<?php

class grid_resumen_compras_csv
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;

   var $Arquivo;
   var $Tit_doc;
   var $Delim_dados;
   var $Delim_line;
   var $Delim_col;
   var $Csv_label;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();
   var $count_ger;
   var $sum_fc_subtotal;
   var $sum_fc_total_descuento;
   var $sum_fc_valor_iva;
   var $sum_fc_total;
   var $sum_fc_subtotal_iva;
   var $sum_fc_subtotal_cero;
   var $sum_fc_subtotal_no_objeto;
   var $sum_fc_subtotal_excento;
   var $sum_fc_valor_ice;
   var $sum_fc_valor_irbpnr;

   //---- 
   function __construct()
   {
      $this->nm_data   = new nm_data("es");
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
   function monta_csv()
   {
      $this->inicializa_vars();
      $this->grava_arquivo();
      if ($this->Ini->sc_export_ajax)
      {
          $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Csv_f);
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
                   nm_limpa_str_grid_resumen_compras($cadapar[1]);
                   nm_protect_num_grid_resumen_compras($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_resumen_compras']['opcao'] = $cadapar[1];
                   }
               }
          }
      }
      if (!isset($Igtech_RucEmpresa) && isset($igtech_rucempresa)) 
      {
         $Igtech_RucEmpresa = $igtech_rucempresa;
      }
      if (isset($Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $Igtech_RucEmpresa;
          nm_limpa_str_grid_resumen_compras($_SESSION["Igtech_RucEmpresa"]);
      }
      if (!isset($Igtech_NombreEmpresa) && isset($igtech_nombreempresa)) 
      {
         $Igtech_NombreEmpresa = $igtech_nombreempresa;
      }
      if (isset($Igtech_NombreEmpresa)) 
      {
          $_SESSION['Igtech_NombreEmpresa'] = $Igtech_NombreEmpresa;
          nm_limpa_str_grid_resumen_compras($_SESSION["Igtech_NombreEmpresa"]);
      }
      if (!isset($var_RutaLogo) && isset($var_rutalogo)) 
      {
         $var_RutaLogo = $var_rutalogo;
      }
      if (isset($var_RutaLogo)) 
      {
          $_SESSION['var_RutaLogo'] = $var_RutaLogo;
          nm_limpa_str_grid_resumen_compras($_SESSION["var_RutaLogo"]);
      }
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . "grid_resumen_compras_total.class.php"); 
      $this->Tot      = new grid_resumen_compras_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      $Gb_geral = "quebra_geral_" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['SC_Ind_Groupby'];
      if (method_exists($this->Tot,$Gb_geral))
      {
          $this->Tot->$Gb_geral();
          $this->count_ger = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][1];
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['SC_Ind_Groupby'] == "sc_free_group_by")
          {
              $this->sum_fc_subtotal = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][2];
              $this->sum_fc_total_descuento = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][3];
              $this->sum_fc_valor_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][4];
              $this->sum_fc_total = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][5];
              $this->sum_fc_subtotal_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][6];
              $this->sum_fc_subtotal_cero = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][7];
              $this->sum_fc_subtotal_no_objeto = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][8];
              $this->sum_fc_subtotal_excento = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][9];
              $this->sum_fc_valor_ice = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][10];
              $this->sum_fc_valor_irbpnr = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][11];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['SC_Ind_Groupby'] == "fc_tipo_comprobante")
          {
              $this->sum_fc_subtotal = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][2];
              $this->sum_fc_total_descuento = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][3];
              $this->sum_fc_valor_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][4];
              $this->sum_fc_total = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][5];
              $this->sum_fc_subtotal_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][6];
              $this->sum_fc_subtotal_cero = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][7];
              $this->sum_fc_subtotal_no_objeto = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][8];
              $this->sum_fc_subtotal_excento = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][9];
              $this->sum_fc_valor_ice = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][10];
              $this->sum_fc_valor_irbpnr = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['tot_geral'][11];
          }
      }
      $this->Csv_password = "";
      $this->Arquivo   = "sc_csv";
      $this->Arquivo  .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arq_zip   = $this->Arquivo . "_grid_resumen_compras.zip";
      $this->Arquivo  .= "_grid_resumen_compras";
      $this->Arquivo  .= ".csv";
      $this->Tit_doc   = "grid_resumen_compras.csv";
      $this->Tit_zip   = "grid_resumen_compras.zip";
      $this->Label_CSV = "N";
      $this->Delim_dados = "\"";
      $this->Delim_col   = ";";
      $this->Delim_line  = "\r\n";
      $this->Tem_csv_res = false;
      if (isset($_REQUEST['nm_delim_line']) && !empty($_REQUEST['nm_delim_line']))
      {
          $this->Delim_line = str_replace(array(1,2,3), array("\r\n","\r","\n"), $_REQUEST['nm_delim_line']);
      }
      if (isset($_REQUEST['nm_delim_col']) && !empty($_REQUEST['nm_delim_col']))
      {
          $this->Delim_col = str_replace(array(1,2,3,4,5), array(";",",","\	","#",""), $_REQUEST['nm_delim_col']);
      }
      if (isset($_REQUEST['nm_delim_dados']) && !empty($_REQUEST['nm_delim_dados']))
      {
          $this->Delim_dados = str_replace(array(1,2,3,4), array('"',"'","","|"), $_REQUEST['nm_delim_dados']);
      }
      if (isset($_REQUEST['nm_label_csv']) && !empty($_REQUEST['nm_label_csv']))
      {
          $this->Label_CSV = $_REQUEST['nm_label_csv'];
      }
          $this->Tem_csv_res  = true;
          if (isset($_REQUEST['SC_module_export']) && $_REQUEST['SC_module_export'] != "")
          { 
              $this->Tem_csv_res = (strpos(" " . $_REQUEST['SC_module_export'], "resume") !== false) ? true : false;
          } 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['SC_Ind_Groupby'] == "sc_free_group_by" && empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['SC_Gb_Free_cmp']))
          {
              $this->Tem_csv_res  = false;
          }
      if (!$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_resumen_compras']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_return']);
          if ($this->Tem_csv_res) {
              $PB_plus = intval ($this->count_ger * 0.04);
              $PB_plus = ($PB_plus < 2) ? 2 : $PB_plus;
          }
          else {
              $PB_plus = intval ($this->count_ger * 0.02);
              $PB_plus = ($PB_plus < 1) ? 1 : $PB_plus;
          }
          $PB_tot = $this->count_ger + $PB_plus;
          $this->PB_dif = $PB_tot - $this->count_ger;
          $this->pb->setTotalSteps($PB_tot );
      }
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
   function grava_arquivo()
   {
     global $nm_lang;
      global $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      $this->New_label['fc_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
      $this->New_label['pr_identificacion'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
      $this->New_label['pr_nombre'] = "" . $this->Ini->Nm_lang['lang_proveedor'] . "";
      $this->New_label['fc_serie'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
      $this->New_label['fac_secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
      $this->New_label['fc_subtotal'] = "" . $this->Ini->Nm_lang['lang_subtotal'] . "";
      $this->New_label['fc_total_descuento'] = "" . $this->Ini->Nm_lang['lang_descuento'] . "";
      $this->New_label['fc_valor_iva'] = "" . $this->Ini->Nm_lang['lang_iva'] . "";
      $this->New_label['fc_total'] = "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "";
      $this->New_label['pr_direccion'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
      $this->New_label['pr_email'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
      $this->New_label['fc_subtotal_iva'] = "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "";
      $this->New_label['fc_subtotal_cero'] = "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "";
      $this->New_label['fc_subtotal_no_objeto'] = "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "";
      $this->New_label['fc_subtotal_excento'] = "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "";
      $this->New_label['fc_valor_ice'] = "" . $this->Ini->Nm_lang['lang_ice'] . "";
      $this->New_label['fc_valor_irbpnr'] = "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
      $this->New_label['fc_autorizacion'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
      $this->New_label['fc_fecha_caducidad'] = "" . $this->Ini->Nm_lang['lang_fecha_caducidad'] . "";
      $this->New_label['fc_id'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
      $this->New_label['fc_empresa'] = "" . $this->Ini->Nm_lang['lang_empresa'] . "";
      $this->New_label['fc_tipo_comprobante'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
      $this->New_label['fc_proveedor'] = "" . $this->Ini->Nm_lang['lang_proveedor'] . "";
      $this->New_label['fc_comentario'] = "" . $this->Ini->Nm_lang['lang_comentario'] . "";
      $this->New_label['fc_usuario'] = "" . $this->Ini->Nm_lang['lang_usuario'] . "";
      $this->New_label['tc_nombre'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_resumen_compras']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_resumen_compras']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_resumen_compras']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->fc_fecha = (isset($Busca_temp['fc_fecha'])) ? $Busca_temp['fc_fecha'] : ""; 
          $tmp_pos = (is_string($this->fc_fecha)) ? strpos($this->fc_fecha, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fc_fecha))
          {
              $this->fc_fecha = substr($this->fc_fecha, 0, $tmp_pos);
          }
          $this->fc_fecha_2 = (isset($Busca_temp['fc_fecha_input_2'])) ? $Busca_temp['fc_fecha_input_2'] : ""; 
          $this->tc_nombre = (isset($Busca_temp['tc_nombre'])) ? $Busca_temp['tc_nombre'] : ""; 
          $tmp_pos = (is_string($this->tc_nombre)) ? strpos($this->tc_nombre, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->tc_nombre))
          {
              $this->tc_nombre = substr($this->tc_nombre, 0, $tmp_pos);
          }
          $this->fc_serie = (isset($Busca_temp['fc_serie'])) ? $Busca_temp['fc_serie'] : ""; 
          $tmp_pos = (is_string($this->fc_serie)) ? strpos($this->fc_serie, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fc_serie))
          {
              $this->fc_serie = substr($this->fc_serie, 0, $tmp_pos);
          }
          $this->pr_identificacion = (isset($Busca_temp['pr_identificacion'])) ? $Busca_temp['pr_identificacion'] : ""; 
          $tmp_pos = (is_string($this->pr_identificacion)) ? strpos($this->pr_identificacion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pr_identificacion))
          {
              $this->pr_identificacion = substr($this->pr_identificacion, 0, $tmp_pos);
          }
          $this->fc_usuario = (isset($Busca_temp['fc_usuario'])) ? $Busca_temp['fc_usuario'] : ""; 
          $tmp_pos = (is_string($this->fc_usuario)) ? strpos($this->fc_usuario, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fc_usuario))
          {
              $this->fc_usuario = substr($this->fc_usuario, 0, $tmp_pos);
          }
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_name'] .= ".csv";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_name'];
          $this->Arq_zip = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_name'];
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_name'], ".");
          if ($Pos !== false) {
              $this->Arq_zip = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_name'], 0, $Pos);
          }
          $this->Arq_zip .= ".zip";
          $this->Tit_zip  = $this->Arq_zip;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_name']);
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      $this->Csv_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $this->Zip_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arq_zip;
      $csv_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      if ($this->Label_CSV == "S")
      { 
          $this->NM_prim_col  = 0;
          $this->csv_registro = "";
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['field_order'] as $Cada_col)
          { 
              $SC_Label = (isset($this->New_label['fc_fecha'])) ? $this->New_label['fc_fecha'] : ""; 
              if ($Cada_col == "fc_fecha" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['pr_identificacion'])) ? $this->New_label['pr_identificacion'] : ""; 
              if ($Cada_col == "pr_identificacion" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['pr_nombre'])) ? $this->New_label['pr_nombre'] : ""; 
              if ($Cada_col == "pr_nombre" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_serie'])) ? $this->New_label['fc_serie'] : ""; 
              if ($Cada_col == "fc_serie" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fac_secuencial'])) ? $this->New_label['fac_secuencial'] : ""; 
              if ($Cada_col == "fac_secuencial" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_subtotal'])) ? $this->New_label['fc_subtotal'] : ""; 
              if ($Cada_col == "fc_subtotal" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_total_descuento'])) ? $this->New_label['fc_total_descuento'] : ""; 
              if ($Cada_col == "fc_total_descuento" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_valor_iva'])) ? $this->New_label['fc_valor_iva'] : ""; 
              if ($Cada_col == "fc_valor_iva" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_total'])) ? $this->New_label['fc_total'] : ""; 
              if ($Cada_col == "fc_total" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['pr_direccion'])) ? $this->New_label['pr_direccion'] : ""; 
              if ($Cada_col == "pr_direccion" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['pr_email'])) ? $this->New_label['pr_email'] : ""; 
              if ($Cada_col == "pr_email" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_subtotal_iva'])) ? $this->New_label['fc_subtotal_iva'] : ""; 
              if ($Cada_col == "fc_subtotal_iva" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_subtotal_cero'])) ? $this->New_label['fc_subtotal_cero'] : ""; 
              if ($Cada_col == "fc_subtotal_cero" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_subtotal_no_objeto'])) ? $this->New_label['fc_subtotal_no_objeto'] : ""; 
              if ($Cada_col == "fc_subtotal_no_objeto" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_subtotal_excento'])) ? $this->New_label['fc_subtotal_excento'] : ""; 
              if ($Cada_col == "fc_subtotal_excento" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_valor_ice'])) ? $this->New_label['fc_valor_ice'] : ""; 
              if ($Cada_col == "fc_valor_ice" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_valor_irbpnr'])) ? $this->New_label['fc_valor_irbpnr'] : ""; 
              if ($Cada_col == "fc_valor_irbpnr" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_autorizacion'])) ? $this->New_label['fc_autorizacion'] : ""; 
              if ($Cada_col == "fc_autorizacion" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
              $SC_Label = (isset($this->New_label['fc_fecha_caducidad'])) ? $this->New_label['fc_fecha_caducidad'] : ""; 
              if ($Cada_col == "fc_fecha_caducidad" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
              {
                  $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
                  $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $SC_Label);
                  $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
                  $this->NM_prim_col++;
              }
          } 
          $this->csv_registro .= $this->Delim_line;
          fwrite($csv_f, $this->csv_registro);
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $nmgp_select_count = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela; 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT str_replace (convert(char(10),fc_fecha,102), '.', '-') + ' ' + convert(char(8),fc_fecha,20), pr_identificacion, pr_nombre, fc_serie, fac_secuencial, fc_subtotal, fc_total_descuento, fc_valor_iva, fc_total, pr_direccion, pr_email, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_valor_ice, fc_valor_irbpnr, fc_autorizacion, str_replace (convert(char(10),fc_fecha_caducidad,102), '.', '-') + ' ' + convert(char(8),fc_fecha_caducidad,20), fc_usuario, tc_nombre from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT fc_fecha, pr_identificacion, pr_nombre, fc_serie, fac_secuencial, fc_subtotal, fc_total_descuento, fc_valor_iva, fc_total, pr_direccion, pr_email, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_valor_ice, fc_valor_irbpnr, fc_autorizacion, fc_fecha_caducidad, fc_usuario, tc_nombre from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT convert(char(23),fc_fecha,121), pr_identificacion, pr_nombre, fc_serie, fac_secuencial, fc_subtotal, fc_total_descuento, fc_valor_iva, fc_total, pr_direccion, pr_email, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_valor_ice, fc_valor_irbpnr, fc_autorizacion, convert(char(23),fc_fecha_caducidad,121), fc_usuario, tc_nombre from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT fc_fecha, pr_identificacion, pr_nombre, fc_serie, fac_secuencial, fc_subtotal, fc_total_descuento, fc_valor_iva, fc_total, pr_direccion, pr_email, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_valor_ice, fc_valor_irbpnr, fc_autorizacion, fc_fecha_caducidad, fc_usuario, tc_nombre from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT EXTEND(fc_fecha, YEAR TO DAY), pr_identificacion, pr_nombre, fc_serie, fac_secuencial, fc_subtotal, fc_total_descuento, fc_valor_iva, fc_total, pr_direccion, pr_email, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_valor_ice, fc_valor_irbpnr, fc_autorizacion, EXTEND(fc_fecha_caducidad, YEAR TO DAY), fc_usuario, tc_nombre from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT fc_fecha, pr_identificacion, pr_nombre, fc_serie, fac_secuencial, fc_subtotal, fc_total_descuento, fc_valor_iva, fc_total, pr_direccion, pr_email, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_valor_ice, fc_valor_irbpnr, fc_autorizacion, fc_fecha_caducidad, fc_usuario, tc_nombre from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_pesq'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_resumo']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_resumo'])) 
      { 
          if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_pesq'])) 
          { 
              $nmgp_select .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_resumo']; 
              $nmgp_select_count .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_resumo']; 
          } 
          else
          { 
              $nmgp_select .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_resumo'] . ")"; 
              $nmgp_select_count .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['where_resumo'] . ")"; 
          } 
      } 
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['order_grid'];
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
      if (!$rs->EOF)
      {
         $this->fc_fecha = $rs->fields[0] ;  
         $this->pr_identificacion = $rs->fields[1] ;  
         $this->pr_nombre = $rs->fields[2] ;  
         $this->fc_serie = $rs->fields[3] ;  
         $this->fac_secuencial = $rs->fields[4] ;  
         $this->fc_subtotal = $rs->fields[5] ;  
         $this->fc_subtotal = (string)$this->fc_subtotal;
         $this->fc_total_descuento = $rs->fields[6] ;  
         $this->fc_total_descuento = (string)$this->fc_total_descuento;
         $this->fc_valor_iva = $rs->fields[7] ;  
         $this->fc_valor_iva = (string)$this->fc_valor_iva;
         $this->fc_total = $rs->fields[8] ;  
         $this->fc_total = (string)$this->fc_total;
         $this->pr_direccion = $rs->fields[9] ;  
         $this->pr_email = $rs->fields[10] ;  
         $this->fc_subtotal_iva = $rs->fields[11] ;  
         $this->fc_subtotal_iva = (string)$this->fc_subtotal_iva;
         $this->fc_subtotal_cero = $rs->fields[12] ;  
         $this->fc_subtotal_cero = (string)$this->fc_subtotal_cero;
         $this->fc_subtotal_no_objeto = $rs->fields[13] ;  
         $this->fc_subtotal_no_objeto = (string)$this->fc_subtotal_no_objeto;
         $this->fc_subtotal_excento = $rs->fields[14] ;  
         $this->fc_subtotal_excento = (string)$this->fc_subtotal_excento;
         $this->fc_valor_ice = $rs->fields[15] ;  
         $this->fc_valor_ice = (string)$this->fc_valor_ice;
         $this->fc_valor_irbpnr = $rs->fields[16] ;  
         $this->fc_valor_irbpnr = (string)$this->fc_valor_irbpnr;
         $this->fc_autorizacion = $rs->fields[17] ;  
         $this->fc_fecha_caducidad = $rs->fields[18] ;  
         $this->fc_usuario = $rs->fields[19] ;  
         $this->tc_nombre = $rs->fields[20] ;  
   $_SESSION['scriptcase']['grid_resumen_compras']['contr_erro'] = 'on';
if (!isset($_SESSION['var_RutaLogo'])) {$_SESSION['var_RutaLogo'] = "";}
if (!isset($this->sc_temp_var_RutaLogo)) {$this->sc_temp_var_RutaLogo = (isset($_SESSION['var_RutaLogo'])) ? $_SESSION['var_RutaLogo'] : "";}
if (!isset($_SESSION['Igtech_RucEmpresa'])) {$_SESSION['Igtech_RucEmpresa'] = "";}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
 
$check_sql="SELECT sp_busca_parametro('RUTA_IMAGENES','/lib')||emp_ruc||'/'||emp_logo
			FROM del_empresa 
			where emp_ruc='".$this->sc_temp_Igtech_RucEmpresa."'";
 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $this->rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 


if (isset($this->rs[0][0]))     
{
   $emp_logo= $this->rs[0][0];
   
}else{
	$emp_logo= "";
}

$this->sc_temp_var_RutaLogo="<img src='".$emp_logo."' width='230' height='80' border='0'>";
if (isset($this->sc_temp_Igtech_RucEmpresa)) {$_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->sc_temp_var_RutaLogo)) {$_SESSION['var_RutaLogo'] = $this->sc_temp_var_RutaLogo;}
$_SESSION['scriptcase']['grid_resumen_compras']['contr_erro'] = 'off';
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
         $this->csv_registro = "";
         $this->NM_prim_col  = 0;
         $this->fc_fecha = $rs->fields[0] ;  
         $this->pr_identificacion = $rs->fields[1] ;  
         $this->pr_nombre = $rs->fields[2] ;  
         $this->fc_serie = $rs->fields[3] ;  
         $this->fac_secuencial = $rs->fields[4] ;  
         $this->fc_subtotal = $rs->fields[5] ;  
         $this->fc_subtotal = (string)$this->fc_subtotal;
         $this->fc_total_descuento = $rs->fields[6] ;  
         $this->fc_total_descuento = (string)$this->fc_total_descuento;
         $this->fc_valor_iva = $rs->fields[7] ;  
         $this->fc_valor_iva = (string)$this->fc_valor_iva;
         $this->fc_total = $rs->fields[8] ;  
         $this->fc_total = (string)$this->fc_total;
         $this->pr_direccion = $rs->fields[9] ;  
         $this->pr_email = $rs->fields[10] ;  
         $this->fc_subtotal_iva = $rs->fields[11] ;  
         $this->fc_subtotal_iva = (string)$this->fc_subtotal_iva;
         $this->fc_subtotal_cero = $rs->fields[12] ;  
         $this->fc_subtotal_cero = (string)$this->fc_subtotal_cero;
         $this->fc_subtotal_no_objeto = $rs->fields[13] ;  
         $this->fc_subtotal_no_objeto = (string)$this->fc_subtotal_no_objeto;
         $this->fc_subtotal_excento = $rs->fields[14] ;  
         $this->fc_subtotal_excento = (string)$this->fc_subtotal_excento;
         $this->fc_valor_ice = $rs->fields[15] ;  
         $this->fc_valor_ice = (string)$this->fc_valor_ice;
         $this->fc_valor_irbpnr = $rs->fields[16] ;  
         $this->fc_valor_irbpnr = (string)$this->fc_valor_irbpnr;
         $this->fc_autorizacion = $rs->fields[17] ;  
         $this->fc_fecha_caducidad = $rs->fields[18] ;  
         $this->fc_usuario = $rs->fields[19] ;  
         $this->tc_nombre = $rs->fields[20] ;  
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->csv_registro .= $this->Delim_line;
         fwrite($csv_f, $this->csv_registro);
         $rs->MoveNext();
      }
      fclose($csv_f);
      if ($this->Tem_csv_res)
      { 
          if (!$this->Ini->sc_export_ajax) {
              $this->PB_dif = intval ($this->PB_dif / 2);
              $Mens_bar  = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
              $Mens_smry = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_smry_titl']);
              $this->pb->setProgressbarMessage($Mens_bar . ": " . $Mens_smry);
              $this->pb->addSteps($this->PB_dif);
          }
          require_once($this->Ini->path_aplicacao . "grid_resumen_compras_res_csv.class.php");
          $this->Res = new grid_resumen_compras_res_csv();
          $this->prep_modulos("Res");
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_res_grid'] = true;
          $this->Res->monta_csv();
      } 
      if (!$this->Ini->sc_export_ajax) {
          $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_btns_export_finished']);
          $this->pb->setProgressbarMessage($Mens_bar);
          $this->pb->addSteps($this->PB_dif);
      }
      if ($this->Csv_password != "" || $this->Tem_csv_res)
      { 
          $str_zip    = "";
          $Parm_pass  = ($this->Csv_password != "") ? " -p" : "";
          $Zip_f      = (FALSE !== strpos($this->Zip_f, ' ')) ? " \"" . $this->Zip_f . "\"" :  $this->Zip_f;
          $Arq_input  = (FALSE !== strpos($this->Csv_f, ' ')) ? " \"" . $this->Csv_f . "\"" :  $this->Csv_f;
          if (is_file($Zip_f)) {
              unlink($Zip_f);
          }
          if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
          {
              chdir($this->Ini->path_third . "/zip/windows");
              $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $this->Csv_password . " " . $Zip_f . " " . $Arq_input;
          }
          elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
          {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
                $str_zip = "./7za " . $Parm_pass . $this->Csv_password . " a " . $Zip_f . " " . $Arq_input;
          }
          elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
          {
              chdir($this->Ini->path_third . "/zip/mac/bin");
              $str_zip = "./7za " . $Parm_pass . $this->Csv_password . " a " . $Zip_f . " " . $Arq_input;
          }
          if (!empty($str_zip)) {
              exec($str_zip);
          }
          // ----- ZIP log
          $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
          if ($fp)
          {
              @fwrite($fp, $str_zip . "\r\n\r\n");
              @fclose($fp);
          }
          if ($this->Tem_csv_res)
          { 
              $str_zip    = "";
              $Arq_res    = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_res_file'];
              $Arq_input  = (FALSE !== strpos($Arq_res, ' ')) ? " \"" . $Arq_res . "\"" :  $Arq_res;
              if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
              {
                  $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $this->Csv_password . " " . $Zip_f . " " . $Arq_input;
              }
              elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
              {
                  $str_zip = "./7za " . $Parm_pass . $this->Csv_password . " a " . $Zip_f . " " . $Arq_input;
              }
              elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
              {
                  $str_zip = "./7za " . $Parm_pass . $this->Csv_password . " a " . $Zip_f . " " . $Arq_input;
              }
              if (!empty($str_zip)) {
                  exec($str_zip);
              }
              // ----- ZIP log
              $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'a');
              if ($fp)
              {
                  @fwrite($fp, $str_zip . "\r\n\r\n");
                  @fclose($fp);
              }
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_res_grid']);
              unlink($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_res_file']);
          }
          unlink($Arq_input);
          $this->Arquivo = $this->Arq_zip;
          $this->Csv_f   = $this->Zip_f;
          $this->Tit_doc = $this->Tit_zip;
      } 
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['export_sel_columns']['usr_cmp_sel']);
      }
      $rs->Close();
   }
   //----- fc_fecha
   function NM_export_fc_fecha()
   {
             $conteudo_x =  $this->fc_fecha;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->fc_fecha, "YYYY-MM-DD  ");
                 $this->fc_fecha = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
             } 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_fecha);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- pr_identificacion
   function NM_export_pr_identificacion()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->pr_identificacion);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- pr_nombre
   function NM_export_pr_nombre()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->pr_nombre);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_serie
   function NM_export_fc_serie()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_serie);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fac_secuencial
   function NM_export_fac_secuencial()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fac_secuencial);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_subtotal
   function NM_export_fc_subtotal()
   {
             nmgp_Form_Num_Val($this->fc_subtotal, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_subtotal);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_total_descuento
   function NM_export_fc_total_descuento()
   {
             nmgp_Form_Num_Val($this->fc_total_descuento, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_total_descuento);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_valor_iva
   function NM_export_fc_valor_iva()
   {
             nmgp_Form_Num_Val($this->fc_valor_iva, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_valor_iva);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_total
   function NM_export_fc_total()
   {
             nmgp_Form_Num_Val($this->fc_total, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_total);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- pr_direccion
   function NM_export_pr_direccion()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->pr_direccion);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- pr_email
   function NM_export_pr_email()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->pr_email);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_subtotal_iva
   function NM_export_fc_subtotal_iva()
   {
             nmgp_Form_Num_Val($this->fc_subtotal_iva, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_subtotal_iva);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_subtotal_cero
   function NM_export_fc_subtotal_cero()
   {
             nmgp_Form_Num_Val($this->fc_subtotal_cero, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_subtotal_cero);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_subtotal_no_objeto
   function NM_export_fc_subtotal_no_objeto()
   {
             nmgp_Form_Num_Val($this->fc_subtotal_no_objeto, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_subtotal_no_objeto);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_subtotal_excento
   function NM_export_fc_subtotal_excento()
   {
             nmgp_Form_Num_Val($this->fc_subtotal_excento, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_subtotal_excento);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_valor_ice
   function NM_export_fc_valor_ice()
   {
             nmgp_Form_Num_Val($this->fc_valor_ice, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_valor_ice);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_valor_irbpnr
   function NM_export_fc_valor_irbpnr()
   {
             nmgp_Form_Num_Val($this->fc_valor_irbpnr, "", ".", "2", "S", "2", "", "N:1", "-") ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_valor_irbpnr);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_autorizacion
   function NM_export_fc_autorizacion()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_autorizacion);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- fc_fecha_caducidad
   function NM_export_fc_fecha_caducidad()
   {
             $conteudo_x =  $this->fc_fecha_caducidad;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->fc_fecha_caducidad, "YYYY-MM-DD  ");
                 $this->fc_fecha_caducidad = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
             } 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fc_fecha_caducidad);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['xml_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['xml_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras'][$path_doc_md5][1] = $this->Tit_doc;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE>Resumen de Compras :: CSV</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?>" GMT">
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0">
 <META http-equiv="Pragma" content="no-cache">
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}
?>
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
   <td class="scExportTitle" style="height: 25px">CSV</td>
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
<form name="Fdown" method="get" action="grid_resumen_compras_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_resumen_compras"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_compras']['csv_return']); ?>"> 
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
}

?>
