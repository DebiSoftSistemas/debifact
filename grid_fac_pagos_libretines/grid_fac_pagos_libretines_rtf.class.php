<?php

class grid_fac_pagos_libretines_rtf
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Texto_tag;
   var $Arquivo;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function __construct()
   {
      $this->nm_data   = new nm_data("es");
      $this->Texto_tag = "";
   }


function actionBar_isValidState($buttonName, $buttonState)
{
    switch ($buttonName) {
    }

    return false;
}


function actionBar_displayState($buttonName)
{
    switch ($buttonName) {
    }
}

function actionBar_getStateHint($buttonName)
{
    switch ($buttonName) {
    }
}

function actionBar_getStateConfirm($buttonName)
{
    switch ($buttonName) {
    }
}

function actionBar_getStateDisable($buttonName)
{
    if (isset($this->sc_actionbar_disabled[$buttonName]) && $this->sc_actionbar_disabled[$buttonName]) {
        return ' disabled';
    }

    return '';
}

function actionBar_getStateHide($buttonName)
{
    if (isset($this->sc_actionbar_hidden[$buttonName]) && $this->sc_actionbar_hidden[$buttonName]) {
        return ' sc-actionbar-button-hidden';
    }

    return '';
}

   //---- 
   function monta_rtf()
   {
      $this->inicializa_vars();
      $this->gera_texto_tag();
      $this->grava_arquivo_rtf();
      if ($this->Ini->sc_export_ajax)
      {
          $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Rtf_f);
          $this->Arr_result['title_export'] = NM_charset_to_utf8($this->Tit_doc);
          $Temp = ob_get_clean();
          if ($Temp !== false && trim($Temp) != "")
          {
              $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
          }
          $oJson = new Services_JSON();
          echo $oJson->encode($this->Arr_result);
          exit;
      }
      else
      {
          $this->progress_bar_end();
      }
   }

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      if (isset($GLOBALS['nmgp_parms']) && !empty($GLOBALS['nmgp_parms'])) 
      { 
          $GLOBALS['nmgp_parms'] = str_replace("@aspass@", "'", $GLOBALS['nmgp_parms']);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $GLOBALS["nmgp_parms"]);
          $todo  = explode("?@?", $todox);
          foreach ($todo as $param)
          {
               $cadapar = explode("?#?", $param);
               if (1 < sizeof($cadapar))
               {
                   if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                   {
                       $cadapar[0] = substr($cadapar[0], 11);
                       $cadapar[1] = $_SESSION[$cadapar[1]];
                   }
                   if (isset($GLOBALS['sc_conv_var'][$cadapar[0]]))
                   {
                       $cadapar[0] = $GLOBALS['sc_conv_var'][$cadapar[0]];
                   }
                   elseif (isset($GLOBALS['sc_conv_var'][strtolower($cadapar[0])]))
                   {
                       $cadapar[0] = $GLOBALS['sc_conv_var'][strtolower($cadapar[0])];
                   }
                   nm_limpa_str_grid_fac_pagos_libretines($cadapar[1]);
                   nm_protect_num_grid_fac_pagos_libretines($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_fac_pagos_libretines']['opcao'] = $cadapar[1];
                   }
               }
          }
      }
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . "grid_fac_pagos_libretines_total.class.php"); 
      $this->Tot      = new grid_fac_pagos_libretines_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      $Gb_geral = "quebra_geral_" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['SC_Ind_Groupby'];
      if (method_exists($this->Tot,$Gb_geral))
      {
          $this->Tot->$Gb_geral();
          $this->count_ger = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['tot_geral'][1];
      }
      if (!$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_fac_pagos_libretines']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption('volta_grid');
          $this->pb->setTotalSteps($this->count_ger);
      }
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_grid_fac_pagos_libretines";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_fac_pagos_libretines.rtf";
   }
   //---- 
   function prep_modulos($modulo)
   {
      $this->$modulo->Ini    = $this->Ini;
      $this->$modulo->Db     = $this->Db;
      $this->$modulo->Erro   = $this->Erro;
      $this->$modulo->Lookup = $this->Lookup;
   }


   //----- 
   function gera_texto_tag()
   {
     global $nm_lang;
      global $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      $this->New_label['pag_empresa'] = "" . $this->Ini->Nm_lang['lang_cliente'] . "";
      $this->New_label['pag_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
      $this->New_label['pag_metodo_pago'] = "" . $this->Ini->Nm_lang['lang_metodo_pago'] . "";
      $this->New_label['pag_banco_origen'] = "" . $this->Ini->Nm_lang['lang_banco_origen'] . "";
      $this->New_label['pag_cuenta_origen'] = "" . $this->Ini->Nm_lang['lang_cuenta_origen'] . "";
      $this->New_label['pag_monto'] = "" . $this->Ini->Nm_lang['lang_valor_pago'] . "";
      $this->New_label['pag_cuenta_destino'] = "" . $this->Ini->Nm_lang['lang_cuenta_destino'] . "";
      $this->New_label['pag_documento'] = "" . $this->Ini->Nm_lang['lang_lot_documento'] . "";
      $this->New_label['pag_id'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
      $this->New_label['pag_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_fac_pagos_libretines']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_fac_pagos_libretines']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_fac_pagos_libretines']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->pag_metodo_pago = (isset($Busca_temp['pag_metodo_pago'])) ? $Busca_temp['pag_metodo_pago'] : ""; 
          $tmp_pos = (is_string($this->pag_metodo_pago)) ? strpos($this->pag_metodo_pago, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pag_metodo_pago))
          {
              $this->pag_metodo_pago = substr($this->pag_metodo_pago, 0, $tmp_pos);
          }
          $this->pag_id = (isset($Busca_temp['pag_id'])) ? $Busca_temp['pag_id'] : ""; 
          $tmp_pos = (is_string($this->pag_id)) ? strpos($this->pag_id, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pag_id))
          {
              $this->pag_id = substr($this->pag_id, 0, $tmp_pos);
          }
          $this->pag_empresa = (isset($Busca_temp['pag_empresa'])) ? $Busca_temp['pag_empresa'] : ""; 
          $tmp_pos = (is_string($this->pag_empresa)) ? strpos($this->pag_empresa, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pag_empresa))
          {
              $this->pag_empresa = substr($this->pag_empresa, 0, $tmp_pos);
          }
          $this->pag_fecha = (isset($Busca_temp['pag_fecha'])) ? $Busca_temp['pag_fecha'] : ""; 
          $tmp_pos = (is_string($this->pag_fecha)) ? strpos($this->pag_fecha, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pag_fecha))
          {
              $this->pag_fecha = substr($this->pag_fecha, 0, $tmp_pos);
          }
          $this->pag_fecha_2 = (isset($Busca_temp['pag_fecha_input_2'])) ? $Busca_temp['pag_fecha_input_2'] : ""; 
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_name'] .= ".rtf";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_name']);
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['pag_empresa'])) ? $this->New_label['pag_empresa'] : ""; 
          if ($Cada_col == "pag_empresa" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_fecha'])) ? $this->New_label['pag_fecha'] : ""; 
          if ($Cada_col == "pag_fecha" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_metodo_pago'])) ? $this->New_label['pag_metodo_pago'] : ""; 
          if ($Cada_col == "pag_metodo_pago" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_banco_origen'])) ? $this->New_label['pag_banco_origen'] : ""; 
          if ($Cada_col == "pag_banco_origen" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_cuenta_origen'])) ? $this->New_label['pag_cuenta_origen'] : ""; 
          if ($Cada_col == "pag_cuenta_origen" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_monto'])) ? $this->New_label['pag_monto'] : ""; 
          if ($Cada_col == "pag_monto" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_cuenta_destino'])) ? $this->New_label['pag_cuenta_destino'] : ""; 
          if ($Cada_col == "pag_cuenta_destino" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_documento'])) ? $this->New_label['pag_documento'] : ""; 
          if ($Cada_col == "pag_documento" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_verificar'])) ? $this->New_label['pag_verificar'] : ""; 
          if ($Cada_col == "pag_verificar" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_anular'])) ? $this->New_label['pag_anular'] : ""; 
          if ($Cada_col == "pag_anular" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['pag_id'])) ? $this->New_label['pag_id'] : ""; 
          if ($Cada_col == "pag_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
      } 
      $this->Texto_tag .= "</tr>\r\n";
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $nmgp_select_count = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela; 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT pag_empresa, str_replace (convert(char(10),pag_fecha,102), '.', '-') + ' ' + convert(char(8),pag_fecha,20), pag_metodo_pago, pag_banco_origen, pag_cuenta_origen, pag_monto, pag_cuenta_destino, pag_documento, pag_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT pag_empresa, pag_fecha, pag_metodo_pago, pag_banco_origen, pag_cuenta_origen, pag_monto, pag_cuenta_destino, pag_documento, pag_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT pag_empresa, convert(char(23),pag_fecha,121), pag_metodo_pago, pag_banco_origen, pag_cuenta_origen, pag_monto, pag_cuenta_destino, pag_documento, pag_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT pag_empresa, pag_fecha, pag_metodo_pago, pag_banco_origen, pag_cuenta_origen, pag_monto, pag_cuenta_destino, pag_documento, pag_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT pag_empresa, EXTEND(pag_fecha, YEAR TO DAY), pag_metodo_pago, pag_banco_origen, pag_cuenta_origen, pag_monto, pag_cuenta_destino, pag_documento, pag_id from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT pag_empresa, pag_fecha, pag_metodo_pago, pag_banco_origen, pag_cuenta_origen, pag_monto, pag_cuenta_destino, pag_documento, pag_id from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select_count;
      $rt = $this->Db->Execute($nmgp_select_count);
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->count_ger = $rt->fields[0];
      $rt->Close();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->SC_seq_register = 0;
      $PB_tot = (isset($this->count_ger) && $this->count_ger > 0) ? "/" . $this->count_ger : "";
      while (!$rs->EOF)
      {
         $this->SC_seq_register++;
         if (!$this->Ini->sc_export_ajax) {
             $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
             $this->pb->setProgressbarMessage($Mens_bar . ": " . $this->SC_seq_register . $PB_tot);
             $this->pb->addSteps(1);
         }
         $this->Texto_tag .= "<tr>\r\n";
         $this->pag_empresa = $rs->fields[0] ;  
         $this->pag_fecha = $rs->fields[1] ;  
         $this->pag_metodo_pago = $rs->fields[2] ;  
         $this->pag_banco_origen = $rs->fields[3] ;  
         $this->pag_cuenta_origen = $rs->fields[4] ;  
         $this->pag_monto = $rs->fields[5] ;  
         $this->pag_monto = (string)$this->pag_monto;
         $this->pag_cuenta_destino = $rs->fields[6] ;  
         $this->pag_cuenta_destino = (string)$this->pag_cuenta_destino;
         $this->pag_documento = $rs->fields[7] ;  
         $this->pag_id = $rs->fields[8] ;  
         $this->pag_id = (string)$this->pag_id;
         $this->Orig_pag_empresa = $this->pag_empresa;
         $this->Orig_pag_fecha = $this->pag_fecha;
         $this->Orig_pag_metodo_pago = $this->pag_metodo_pago;
         $this->Orig_pag_banco_origen = $this->pag_banco_origen;
         $this->Orig_pag_cuenta_origen = $this->pag_cuenta_origen;
         $this->Orig_pag_monto = $this->pag_monto;
         $this->Orig_pag_cuenta_destino = $this->pag_cuenta_destino;
         $this->Orig_pag_documento = $this->pag_documento;
         $this->Orig_pag_id = $this->pag_id;
         //----- lookup - pag_empresa
         $this->look_pag_empresa = $this->pag_empresa; 
         $this->Lookup->lookup_pag_empresa($this->look_pag_empresa, $this->pag_empresa) ; 
         $this->look_pag_empresa = ($this->look_pag_empresa == "&nbsp;") ? "" : $this->look_pag_empresa; 
         //----- lookup - pag_metodo_pago
         $this->look_pag_metodo_pago = $this->pag_metodo_pago; 
         $this->Lookup->lookup_pag_metodo_pago($this->look_pag_metodo_pago, $this->pag_metodo_pago) ; 
         $this->look_pag_metodo_pago = ($this->look_pag_metodo_pago == "&nbsp;") ? "" : $this->look_pag_metodo_pago; 
         //----- lookup - pag_cuenta_destino
         $this->look_pag_cuenta_destino = $this->pag_cuenta_destino; 
         $this->Lookup->lookup_pag_cuenta_destino($this->look_pag_cuenta_destino, $this->pag_cuenta_destino) ; 
         $this->look_pag_cuenta_destino = ($this->look_pag_cuenta_destino == "&nbsp;") ? "" : $this->look_pag_cuenta_destino; 
         $this->sc_proc_grid = true; 
         $_SESSION['scriptcase']['grid_fac_pagos_libretines']['contr_erro'] = 'on';
  $this->pag_anular ="<button type='button' class='scButton_cancel'><i class='far fa-window-close'></i></button>";
$this->pag_verificar ="<button type='button' class='scButton_ok'><i class='far fa-money-bill-alt'></i></i></button>";

$_SESSION['scriptcase']['grid_fac_pagos_libretines']['contr_erro'] = 'off'; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->Texto_tag .= "</tr>\r\n";
         $rs->MoveNext();
      }
      $this->Texto_tag .= "</table>\r\n";
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['export_sel_columns']['usr_cmp_sel']);
      }
      $rs->Close();
   }
   //----- pag_empresa
   function NM_export_pag_empresa()
   {
         $this->look_pag_empresa = html_entity_decode($this->look_pag_empresa, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->look_pag_empresa = strip_tags($this->look_pag_empresa);
         $this->look_pag_empresa = NM_charset_to_utf8($this->look_pag_empresa);
         $this->look_pag_empresa = str_replace('<', '&lt;', $this->look_pag_empresa);
         $this->look_pag_empresa = str_replace('>', '&gt;', $this->look_pag_empresa);
         $this->Texto_tag .= "<td>" . $this->look_pag_empresa . "</td>\r\n";
   }
   //----- pag_fecha
   function NM_export_pag_fecha()
   {
             $conteudo_x =  $this->pag_fecha;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->pag_fecha, "YYYY-MM-DD  ");
                 $this->pag_fecha = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
             } 
         $this->pag_fecha = NM_charset_to_utf8($this->pag_fecha);
         $this->pag_fecha = str_replace('<', '&lt;', $this->pag_fecha);
         $this->pag_fecha = str_replace('>', '&gt;', $this->pag_fecha);
         $this->Texto_tag .= "<td>" . $this->pag_fecha . "</td>\r\n";
   }
   //----- pag_metodo_pago
   function NM_export_pag_metodo_pago()
   {
         nmgp_Form_Num_Val($this->look_pag_metodo_pago, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->look_pag_metodo_pago = NM_charset_to_utf8($this->look_pag_metodo_pago);
         $this->look_pag_metodo_pago = str_replace('<', '&lt;', $this->look_pag_metodo_pago);
         $this->look_pag_metodo_pago = str_replace('>', '&gt;', $this->look_pag_metodo_pago);
         $this->Texto_tag .= "<td>" . $this->look_pag_metodo_pago . "</td>\r\n";
   }
   //----- pag_banco_origen
   function NM_export_pag_banco_origen()
   {
         $this->pag_banco_origen = html_entity_decode($this->pag_banco_origen, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->pag_banco_origen = strip_tags($this->pag_banco_origen);
         $this->pag_banco_origen = NM_charset_to_utf8($this->pag_banco_origen);
         $this->pag_banco_origen = str_replace('<', '&lt;', $this->pag_banco_origen);
         $this->pag_banco_origen = str_replace('>', '&gt;', $this->pag_banco_origen);
         $this->Texto_tag .= "<td>" . $this->pag_banco_origen . "</td>\r\n";
   }
   //----- pag_cuenta_origen
   function NM_export_pag_cuenta_origen()
   {
         $this->pag_cuenta_origen = html_entity_decode($this->pag_cuenta_origen, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->pag_cuenta_origen = strip_tags($this->pag_cuenta_origen);
         $this->pag_cuenta_origen = NM_charset_to_utf8($this->pag_cuenta_origen);
         $this->pag_cuenta_origen = str_replace('<', '&lt;', $this->pag_cuenta_origen);
         $this->pag_cuenta_origen = str_replace('>', '&gt;', $this->pag_cuenta_origen);
         $this->Texto_tag .= "<td>" . $this->pag_cuenta_origen . "</td>\r\n";
   }
   //----- pag_monto
   function NM_export_pag_monto()
   {
             nmgp_Form_Num_Val($this->pag_monto, "", ".", "2", "S", "2", "", "N:2", "-") ; 
         $this->pag_monto = NM_charset_to_utf8($this->pag_monto);
         $this->pag_monto = str_replace('<', '&lt;', $this->pag_monto);
         $this->pag_monto = str_replace('>', '&gt;', $this->pag_monto);
         $this->Texto_tag .= "<td>" . $this->pag_monto . "</td>\r\n";
   }
   //----- pag_cuenta_destino
   function NM_export_pag_cuenta_destino()
   {
         nmgp_Form_Num_Val($this->look_pag_cuenta_destino, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->look_pag_cuenta_destino = NM_charset_to_utf8($this->look_pag_cuenta_destino);
         $this->look_pag_cuenta_destino = str_replace('<', '&lt;', $this->look_pag_cuenta_destino);
         $this->look_pag_cuenta_destino = str_replace('>', '&gt;', $this->look_pag_cuenta_destino);
         $this->Texto_tag .= "<td>" . $this->look_pag_cuenta_destino . "</td>\r\n";
   }
   //----- pag_documento
   function NM_export_pag_documento()
   {
         $this->pag_documento = html_entity_decode($this->pag_documento, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->pag_documento = strip_tags($this->pag_documento);
         $this->pag_documento = NM_charset_to_utf8($this->pag_documento);
         $this->pag_documento = str_replace('<', '&lt;', $this->pag_documento);
         $this->pag_documento = str_replace('>', '&gt;', $this->pag_documento);
         $this->Texto_tag .= "<td>" . $this->pag_documento . "</td>\r\n";
   }
   //----- pag_verificar
   function NM_export_pag_verificar()
   {
         $this->pag_verificar = html_entity_decode($this->pag_verificar, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->pag_verificar = strip_tags($this->pag_verificar);
         $this->pag_verificar = NM_charset_to_utf8($this->pag_verificar);
         $this->pag_verificar = str_replace('<', '&lt;', $this->pag_verificar);
         $this->pag_verificar = str_replace('>', '&gt;', $this->pag_verificar);
         $this->Texto_tag .= "<td>" . $this->pag_verificar . "</td>\r\n";
   }
   //----- pag_anular
   function NM_export_pag_anular()
   {
         $this->pag_anular = html_entity_decode($this->pag_anular, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->pag_anular = strip_tags($this->pag_anular);
         $this->pag_anular = NM_charset_to_utf8($this->pag_anular);
         $this->pag_anular = str_replace('<', '&lt;', $this->pag_anular);
         $this->pag_anular = str_replace('>', '&gt;', $this->pag_anular);
         $this->Texto_tag .= "<td>" . $this->pag_anular . "</td>\r\n";
   }
   //----- pag_id
   function NM_export_pag_id()
   {
             nmgp_Form_Num_Val($this->pag_id, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->pag_id = NM_charset_to_utf8($this->pag_id);
         $this->pag_id = str_replace('<', '&lt;', $this->pag_id);
         $this->pag_id = str_replace('>', '&gt;', $this->pag_id);
         $this->Texto_tag .= "<td>" . $this->pag_id . "</td>\r\n";
   }

   //----- 
   function grava_arquivo_rtf()
   {
      global $nm_lang, $doc_wrap;
      $this->Rtf_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $rtf_f       = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      require_once($this->Ini->path_third      . "/rtf_new/document_generator/cl_xml2driver.php"); 
      $text_ok  =  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n"; 
      $text_ok .=  "<DOC config_file=\"" . $this->Ini->path_third . "/rtf_new/doc_config.inc\" >\r\n"; 
      $text_ok .=  $this->Texto_tag; 
      $text_ok .=  "</DOC>\r\n"; 
      $xml = new nDOCGEN($text_ok,"RTF"); 
      fwrite($rtf_f, $xml->get_result_file());
      fclose($rtf_f);
   }

   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT") {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT") {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "SC_FORMAT_REGION") {
           $this->nm_data->SetaData($dt_in, strtoupper($form_in));
           $prep_out  = (strpos(strtolower($form_in), "dd") !== false) ? "dd" : "";
           $prep_out .= (strpos(strtolower($form_in), "mm") !== false) ? "mm" : "";
           $prep_out .= (strpos(strtolower($form_in), "aa") !== false) ? "aaaa" : "";
           $prep_out .= (strpos(strtolower($form_in), "yy") !== false) ? "aaaa" : "";
           return $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", $prep_out));
       }
       else {
           nm_conv_form_data($dt_out, $form_in, $form_out);
           return $dt_out;
       }
   }
   function progress_bar_end()
   {
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines'][$path_doc_md5][1] = $this->Tit_doc;
      $Mens_bar = $this->Ini->Nm_lang['lang_othr_file_msge'];
      if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
          $Mens_bar = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
      }
      $this->pb->setProgressbarMessage($Mens_bar);
      $this->pb->setDownloadLink($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $this->pb->setDownloadMd5($path_doc_md5);
      $this->pb->completed();
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_pagos_libretines'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_title'] ?> fac_pagos_libretines :: RTF</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}
?>
  <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
  <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
  <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
  <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
  <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <?php
 if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts))
 {
 ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->str_google_fonts ?>" />
 <?php
 }
 ?>
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">RTF</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_fac_pagos_libretines_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_fac_pagos_libretines"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="volta_grid"> 
</FORM> 
</BODY>
</HTML>
<?php
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $str_highlight_ini = "";
      $str_highlight_fim = "";
      if(substr($nm_campo, 0, 23) == '<div class="highlight">' && substr($nm_campo, -6) == '</div>')
      {
           $str_highlight_ini = substr($nm_campo, 0, 23);
           $str_highlight_fim = substr($nm_campo, -6);

           $trab_campo = substr($nm_campo, 23, -6);
           $tam_campo  = strlen($trab_campo);
      }      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($tam_campo >= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
   } 
function css()
{
$_SESSION['scriptcase']['grid_fac_pagos_libretines']['contr_erro'] = 'on';
  
?>
<link rel="stylesheet" type="text/css" href="<?php echo sc_url_library('sys','bootstrap4.4','css/bootstrap.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo sc_url_library('sys','bootstrap4.4','css/bootstrap.min.css');?>">
<?php

$_SESSION['scriptcase']['grid_fac_pagos_libretines']['contr_erro'] = 'off';
}
}

?>
