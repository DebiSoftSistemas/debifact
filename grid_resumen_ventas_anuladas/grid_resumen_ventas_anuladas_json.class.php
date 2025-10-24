<?php

class grid_resumen_ventas_anuladas_json
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Arquivo;
   var $Arquivo_view;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   function __construct()
   {
      $this->nm_data = new nm_data("es");
   }


function actionBar_isValidState($buttonName, $buttonState)
{
    switch ($buttonName) {
        case 'btn_pdf':
            return in_array($buttonState, array("state1"));
        case 'btn_xml':
            return in_array($buttonState, array("state1"));
        case 'btn_baucher':
            return in_array($buttonState, array("state1"));
    }

    return false;
}


function actionBar_displayState($buttonName)
{
    switch ($buttonName) {
        case 'btn_pdf':
            return $this->actionBar_displayState_btn_pdf();
        case 'btn_xml':
            return $this->actionBar_displayState_btn_xml();
        case 'btn_baucher':
            return $this->actionBar_displayState_btn_baucher();
    }
}

function actionBar_displayState_btn_pdf()
{
    switch ($this->sc_actionbar_states['btn_pdf']) {
        case 'state1':
            return "<i class=\"icon_fa sc-actb-btn_pdf sc-acts-state1 fas fa-file-pdf\"></i>";
    }
}

function actionBar_displayState_btn_xml()
{
    switch ($this->sc_actionbar_states['btn_xml']) {
        case 'state1':
            return "<i class=\"icon_fa sc-actb-btn_xml sc-acts-state1 far fa-file-code\"></i>";
    }
}

function actionBar_displayState_btn_baucher()
{
    switch ($this->sc_actionbar_states['btn_baucher']) {
        case 'state1':
            return "<i class=\"icon_fa sc-actb-btn_baucher sc-acts-state1 fas fa-file-invoice\"></i>";
    }
}

function actionBar_getStateHint($buttonName)
{
    switch ($buttonName) {
        case 'btn_pdf':
            return $this->actionBar_getStateHint_btn_pdf();
        case 'btn_xml':
            return $this->actionBar_getStateHint_btn_xml();
        case 'btn_baucher':
            return $this->actionBar_getStateHint_btn_baucher();
    }
}

function actionBar_getStateHint_btn_pdf()
{
    switch ($this->sc_actionbar_states['btn_pdf']) {
        case 'state1':
            return "pdf";
    }
}

function actionBar_getStateHint_btn_xml()
{
    switch ($this->sc_actionbar_states['btn_xml']) {
        case 'state1':
            return "xml";
    }
}

function actionBar_getStateHint_btn_baucher()
{
    switch ($this->sc_actionbar_states['btn_baucher']) {
        case 'state1':
            return "Baucher";
    }
}

function actionBar_getStateConfirm($buttonName)
{
    switch ($buttonName) {
        case 'btn_pdf':
            return $this->actionBar_getStateConfirm_btn_pdf();
        case 'btn_xml':
            return $this->actionBar_getStateConfirm_btn_xml();
        case 'btn_baucher':
            return $this->actionBar_getStateConfirm_btn_baucher();
    }
}

function actionBar_getStateConfirm_btn_pdf()
{
    switch ($this->sc_actionbar_states['btn_pdf']) {
        case 'state1':
            return "";
    }
}

function actionBar_getStateConfirm_btn_xml()
{
    switch ($this->sc_actionbar_states['btn_xml']) {
        case 'state1':
            return "";
    }
}

function actionBar_getStateConfirm_btn_baucher()
{
    switch ($this->sc_actionbar_states['btn_baucher']) {
        case 'state1':
            return "";
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

function sc_actionbar_enable($buttonName)
{
    $this->sc_actionbar_disabled[$buttonName] = false;
    $this->Ini->Arr_result['actionbarDisable'][$buttonName] = false;
}
function sc_actionbar_disable($buttonName)
{
    $this->sc_actionbar_disabled[$buttonName] = true;
    $this->Ini->Arr_result['actionbarDisable'][$buttonName] = true;
}
   function monta_json()
   {
      $this->inicializa_vars();
      $this->grava_arquivo();
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['embutida'])
      {
          if ($this->Ini->sc_export_ajax)
          {
              $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Json_f);
              $this->Arr_result['title_export'] = NM_charset_to_utf8($this->Tit_doc);
              $Temp = ob_get_clean();
              if ($Temp !== false && trim($Temp) != "")
              {
                  $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
              }
              $result_json = json_encode($this->Arr_result, JSON_UNESCAPED_UNICODE);
              if ($result_json == false)
              {
                  $oJson = new Services_JSON();
                  $result_json = $oJson->encode($this->Arr_result);
              }
              echo $result_json;
              exit;
          }
          else
          {
              $this->progress_bar_end();
          }
      }
      else
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['opcao'] = "";
      }
   }

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
                   nm_limpa_str_grid_resumen_ventas_anuladas($cadapar[1]);
                   nm_protect_num_grid_resumen_ventas_anuladas($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_resumen_ventas_anuladas']['opcao'] = $cadapar[1];
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
          nm_limpa_str_grid_resumen_ventas_anuladas($_SESSION["Igtech_RucEmpresa"]);
      }
      if (!isset($Igtech_NombreEmpresa) && isset($igtech_nombreempresa)) 
      {
         $Igtech_NombreEmpresa = $igtech_nombreempresa;
      }
      if (isset($Igtech_NombreEmpresa)) 
      {
          $_SESSION['Igtech_NombreEmpresa'] = $Igtech_NombreEmpresa;
          nm_limpa_str_grid_resumen_ventas_anuladas($_SESSION["Igtech_NombreEmpresa"]);
      }
      if (!isset($var_RutaLogo) && isset($var_rutalogo)) 
      {
         $var_RutaLogo = $var_rutalogo;
      }
      if (isset($var_RutaLogo)) 
      {
          $_SESSION['var_RutaLogo'] = $var_RutaLogo;
          nm_limpa_str_grid_resumen_ventas_anuladas($_SESSION["var_RutaLogo"]);
      }
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Json_use_label = false;
      $this->Json_format = false;
      $this->Tem_json_res = false;
      $this->Json_password = "";
      if (isset($_REQUEST['nm_json_label']) && !empty($_REQUEST['nm_json_label']))
      {
          $this->Json_use_label = ($_REQUEST['nm_json_label'] == "S") ? true : false;
      }
      if (isset($_REQUEST['nm_json_format']) && !empty($_REQUEST['nm_json_format']))
      {
          $this->Json_format = ($_REQUEST['nm_json_format'] == "S") ? true : false;
      }
      $this->Tem_json_res  = true;
      if (isset($_REQUEST['SC_module_export']) && $_REQUEST['SC_module_export'] != "")
      { 
          $this->Tem_json_res = (strpos(" " . $_REQUEST['SC_module_export'], "resume") !== false) ? true : false;
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['SC_Ind_Groupby'] == "sc_free_group_by" && empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['SC_Gb_Free_cmp']))
      {
          $this->Tem_json_res  = false;
      }
      if (!is_file($this->Ini->root . $this->Ini->path_link . "grid_resumen_ventas_anuladas/grid_resumen_ventas_anuladas_res_json.class.php"))
      {
          $this->Tem_json_res  = false;
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_label']))
      {
          $this->Json_use_label = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_label'];
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_format']))
      {
          $this->Json_format = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_format'];
      }
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . "grid_resumen_ventas_anuladas_total.class.php"); 
      $this->Tot = new grid_resumen_ventas_anuladas_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['embutida'] && !$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_resumen_ventas_anuladas']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_return']);
          if ($this->Tem_json_res) {
              $PB_plus = intval ($this->count_ger * 0.04);
              $PB_plus = ($PB_plus < 2) ? 2 : $PB_plus;
          }
          else {
              $PB_plus = intval ($this->count_ger * 0.02);
              $PB_plus = ($PB_plus < 1) ? 1 : $PB_plus;
          }
          $PB_tot = $this->count_ger + $PB_plus;
          $this->PB_dif = $PB_tot - $this->count_ger;
          $this->pb->setTotalSteps($PB_tot);
      }
      $this->nm_data = new nm_data("es");
      $this->Arquivo      = "sc_json";
      $this->Arquivo     .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arq_zip      = $this->Arquivo . "_grid_resumen_ventas_anuladas.zip";
      $this->Arquivo     .= "_grid_resumen_ventas_anuladas";
      $this->Arquivo     .= ".json";
      $this->Tit_doc      = "grid_resumen_ventas_anuladas.json";
      $this->Tit_zip      = "grid_resumen_ventas_anuladas.zip";
   }

   function prep_modulos($modulo)
   {
      $this->$modulo->Ini    = $this->Ini;
      $this->$modulo->Db     = $this->Db;
      $this->$modulo->Erro   = $this->Erro;
      $this->$modulo->Lookup = $this->Lookup;
   }

   function grava_arquivo()
   {
      global $nm_lang;
      global $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_resumen_ventas_anuladas']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_resumen_ventas_anuladas']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_resumen_ventas_anuladas']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->fac_fecha = (isset($Busca_temp['fac_fecha'])) ? $Busca_temp['fac_fecha'] : ""; 
          $tmp_pos = (is_string($this->fac_fecha)) ? strpos($this->fac_fecha, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_fecha))
          {
              $this->fac_fecha = substr($this->fac_fecha, 0, $tmp_pos);
          }
          $this->fac_fecha_2 = (isset($Busca_temp['fac_fecha_input_2'])) ? $Busca_temp['fac_fecha_input_2'] : ""; 
          $this->est_codigo = (isset($Busca_temp['est_codigo'])) ? $Busca_temp['est_codigo'] : ""; 
          $tmp_pos = (is_string($this->est_codigo)) ? strpos($this->est_codigo, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->est_codigo))
          {
              $this->est_codigo = substr($this->est_codigo, 0, $tmp_pos);
          }
          $this->pen_serie = (isset($Busca_temp['pen_serie'])) ? $Busca_temp['pen_serie'] : ""; 
          $tmp_pos = (is_string($this->pen_serie)) ? strpos($this->pen_serie, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pen_serie))
          {
              $this->pen_serie = substr($this->pen_serie, 0, $tmp_pos);
          }
          $this->cl_identificacion = (isset($Busca_temp['cl_identificacion'])) ? $Busca_temp['cl_identificacion'] : ""; 
          $tmp_pos = (is_string($this->cl_identificacion)) ? strpos($this->cl_identificacion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_identificacion))
          {
              $this->cl_identificacion = substr($this->cl_identificacion, 0, $tmp_pos);
          }
          $this->cl_nombre = (isset($Busca_temp['cl_nombre'])) ? $Busca_temp['cl_nombre'] : ""; 
          $tmp_pos = (is_string($this->cl_nombre)) ? strpos($this->cl_nombre, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_nombre))
          {
              $this->cl_nombre = substr($this->cl_nombre, 0, $tmp_pos);
          }
          $this->fac_usuario = (isset($Busca_temp['fac_usuario'])) ? $Busca_temp['fac_usuario'] : ""; 
          $tmp_pos = (is_string($this->fac_usuario)) ? strpos($this->fac_usuario, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_usuario))
          {
              $this->fac_usuario = substr($this->fac_usuario, 0, $tmp_pos);
          }
          $this->fac_socio_transportista = (isset($Busca_temp['fac_socio_transportista'])) ? $Busca_temp['fac_socio_transportista'] : ""; 
          $tmp_pos = (is_string($this->fac_socio_transportista)) ? strpos($this->fac_socio_transportista, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_socio_transportista))
          {
              $this->fac_socio_transportista = substr($this->fac_socio_transportista, 0, $tmp_pos);
          }
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_name'] .= ".json";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_name'];
          $this->Arq_zip = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_name'];
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_name'], ".");
          if ($Pos !== false) {
              $this->Arq_zip = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_name'], 0, $Pos);
          }
          $this->Arq_zip .= ".zip";
          $this->Tit_zip  = $this->Arq_zip;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_name']);
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['embutida'])
      { 
          $this->Json_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
          $this->Zip_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arq_zip;
          $json_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      }
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $nmgp_select_count = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela; 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT str_replace (convert(char(10),fac_fecha,102), '.', '-') + ' ' + convert(char(8),fac_fecha,20), fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_estado_sri, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_numero from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT fac_fecha, fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_estado_sri, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_numero from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT convert(char(23),fac_fecha,121), fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_estado_sri, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_numero from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT fac_fecha, fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_estado_sri, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_numero from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT EXTEND(fac_fecha, YEAR TO DAY), fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_estado_sri, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_numero from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT fac_fecha, fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_estado_sri, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_numero from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_pesq'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_resumo']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_resumo'])) 
      { 
          if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_pesq'])) 
          { 
              $nmgp_select .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_resumo']; 
              $nmgp_select_count .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_resumo']; 
          } 
          else
          { 
              $nmgp_select .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_resumo'] . ")"; 
              $nmgp_select_count .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['where_resumo'] . ")"; 
          } 
      } 
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['order_grid'];
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
         $this->fac_fecha = $rs->fields[0] ;  
         $this->fac_tipo_comprobante = $rs->fields[1] ;  
         $this->cl_identificacion = $rs->fields[2] ;  
         $this->cl_nombre = $rs->fields[3] ;  
         $this->est_codigo = $rs->fields[4] ;  
         $this->pen_serie = $rs->fields[5] ;  
         $this->fac_secuencial = $rs->fields[6] ;  
         $this->fac_subtotal = $rs->fields[7] ;  
         $this->fac_subtotal = (string)$this->fac_subtotal;
         $this->fac_total_descuento = $rs->fields[8] ;  
         $this->fac_total_descuento = (string)$this->fac_total_descuento;
         $this->fac_valor_iva = $rs->fields[9] ;  
         $this->fac_valor_iva = (string)$this->fac_valor_iva;
         $this->fac_propina = $rs->fields[10] ;  
         $this->fac_propina = (string)$this->fac_propina;
         $this->fac_total = $rs->fields[11] ;  
         $this->fac_total = (string)$this->fac_total;
         $this->fac_estado_sri = $rs->fields[12] ;  
         $this->fac_subtotal_iva = $rs->fields[13] ;  
         $this->fac_subtotal_iva = (string)$this->fac_subtotal_iva;
         $this->fac_subtotal_cero = $rs->fields[14] ;  
         $this->fac_subtotal_cero = (string)$this->fac_subtotal_cero;
         $this->fac_subtotal_no_objeto = $rs->fields[15] ;  
         $this->fac_subtotal_no_objeto = (string)$this->fac_subtotal_no_objeto;
         $this->fac_subtotal_excento = $rs->fields[16] ;  
         $this->fac_subtotal_excento = (string)$this->fac_subtotal_excento;
         $this->fac_valor_ice = $rs->fields[17] ;  
         $this->fac_valor_ice = (string)$this->fac_valor_ice;
         $this->fac_valor_irbpnr = $rs->fields[18] ;  
         $this->fac_valor_irbpnr = (string)$this->fac_valor_irbpnr;
         $this->fac_comentario = $rs->fields[19] ;  
         $this->fac_usuario = $rs->fields[20] ;  
         $this->fac_autorizacion = $rs->fields[21] ;  
         $this->fac_socio_transportista = $rs->fields[22] ;  
         $this->fac_numero = $rs->fields[23] ;  
         $this->fac_numero = (string)$this->fac_numero;
   $_SESSION['scriptcase']['grid_resumen_ventas_anuladas']['contr_erro'] = 'on';
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

$this->sc_temp_var_RutaLogo="<img src='".$emp_logo."' width='100' border='0'>";
if (isset($this->sc_temp_Igtech_RucEmpresa)) {$_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->sc_temp_var_RutaLogo)) {$_SESSION['var_RutaLogo'] = $this->sc_temp_var_RutaLogo;}
$_SESSION['scriptcase']['grid_resumen_ventas_anuladas']['contr_erro'] = 'off';
      }
      $this->SC_seq_register = 0;
      $this->json_registro = array();
      $this->SC_seq_json   = 0;
      $PB_tot = (isset($this->count_ger) && $this->count_ger > 0) ? "/" . $this->count_ger : "";
      while (!$rs->EOF)
      {
         $this->SC_seq_register++;
         if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['embutida'] && !$this->Ini->sc_export_ajax) {
             $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
             $this->pb->setProgressbarMessage($Mens_bar . ": " . $this->SC_seq_register . $PB_tot);
             $this->pb->addSteps(1);
         }
         $this->fac_fecha = $rs->fields[0] ;  
         $this->fac_tipo_comprobante = $rs->fields[1] ;  
         $this->cl_identificacion = $rs->fields[2] ;  
         $this->cl_nombre = $rs->fields[3] ;  
         $this->est_codigo = $rs->fields[4] ;  
         $this->pen_serie = $rs->fields[5] ;  
         $this->fac_secuencial = $rs->fields[6] ;  
         $this->fac_subtotal = $rs->fields[7] ;  
         $this->fac_subtotal = (string)$this->fac_subtotal;
         $this->fac_total_descuento = $rs->fields[8] ;  
         $this->fac_total_descuento = (string)$this->fac_total_descuento;
         $this->fac_valor_iva = $rs->fields[9] ;  
         $this->fac_valor_iva = (string)$this->fac_valor_iva;
         $this->fac_propina = $rs->fields[10] ;  
         $this->fac_propina = (string)$this->fac_propina;
         $this->fac_total = $rs->fields[11] ;  
         $this->fac_total = (string)$this->fac_total;
         $this->fac_estado_sri = $rs->fields[12] ;  
         $this->fac_subtotal_iva = $rs->fields[13] ;  
         $this->fac_subtotal_iva = (string)$this->fac_subtotal_iva;
         $this->fac_subtotal_cero = $rs->fields[14] ;  
         $this->fac_subtotal_cero = (string)$this->fac_subtotal_cero;
         $this->fac_subtotal_no_objeto = $rs->fields[15] ;  
         $this->fac_subtotal_no_objeto = (string)$this->fac_subtotal_no_objeto;
         $this->fac_subtotal_excento = $rs->fields[16] ;  
         $this->fac_subtotal_excento = (string)$this->fac_subtotal_excento;
         $this->fac_valor_ice = $rs->fields[17] ;  
         $this->fac_valor_ice = (string)$this->fac_valor_ice;
         $this->fac_valor_irbpnr = $rs->fields[18] ;  
         $this->fac_valor_irbpnr = (string)$this->fac_valor_irbpnr;
         $this->fac_comentario = $rs->fields[19] ;  
         $this->fac_usuario = $rs->fields[20] ;  
         $this->fac_autorizacion = $rs->fields[21] ;  
         $this->fac_socio_transportista = $rs->fields[22] ;  
         $this->fac_numero = $rs->fields[23] ;  
         $this->fac_numero = (string)$this->fac_numero;
         //----- lookup - fac_tipo_comprobante
         $this->look_fac_tipo_comprobante = $this->fac_tipo_comprobante; 
         $this->Lookup->lookup_fac_tipo_comprobante($this->look_fac_tipo_comprobante, $this->fac_tipo_comprobante) ; 
         $this->look_fac_tipo_comprobante = ($this->look_fac_tipo_comprobante == "&nbsp;") ? "" : $this->look_fac_tipo_comprobante; 
         //----- lookup - fac_usuario
         $this->look_fac_usuario = $this->fac_usuario; 
         $this->Lookup->lookup_fac_usuario($this->look_fac_usuario, $this->fac_usuario) ; 
         $this->look_fac_usuario = ($this->look_fac_usuario == "&nbsp;") ? "" : $this->look_fac_usuario; 
         //----- lookup - fac_socio_transportista
         $this->look_fac_socio_transportista = $this->fac_socio_transportista; 
         $this->Lookup->lookup_fac_socio_transportista($this->look_fac_socio_transportista, $this->fac_socio_transportista) ; 
         $this->look_fac_socio_transportista = ($this->look_fac_socio_transportista == "&nbsp;") ? "" : $this->look_fac_socio_transportista; 
         $this->sc_proc_grid = true; 
         $_SESSION['scriptcase']['grid_resumen_ventas_anuladas']['contr_erro'] = 'on';
 if($this->fac_tipo_comprobante =='01' ){
	if($this->fac_estado_sri =='NO AUTORIZADO' or $this->fac_estado_sri =='POR AUTORIZAR'){
		$this->sc_actionbar_disable("btn_pdf");
		$this->sc_actionbar_disable("btn_xml");
	}else{

		$this->sc_actionbar_enable("btn_pdf");
		$this->sc_actionbar_enable("btn_xml");
	}
}else{
	$this->sc_actionbar_disable("btn_pdf");
	$this->sc_actionbar_disable("btn_xml");
}
$_SESSION['scriptcase']['grid_resumen_ventas_anuladas']['contr_erro'] = 'off'; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->SC_seq_json++;
         $rs->MoveNext();
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['embutida'])
      { 
          $_SESSION['scriptcase']['export_return'] = $this->json_registro;
      }
      else
      { 
          $result_json = json_encode($this->json_registro, JSON_UNESCAPED_UNICODE);
          if ($result_json == false)
          {
              $oJson = new Services_JSON();
              $result_json = $oJson->encode($this->json_registro);
          }
          fwrite($json_f, $result_json);
          fclose($json_f);
          if ($this->Tem_json_res)
          { 
              if (!$this->Ini->sc_export_ajax) {
                  $this->PB_dif = intval ($this->PB_dif / 2);
                  $Mens_bar  = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
                  $Mens_smry = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_smry_titl']);
                  $this->pb->setProgressbarMessage($Mens_bar . ": " . $Mens_smry);
                  $this->pb->addSteps($this->PB_dif);
              }
              require_once($this->Ini->path_aplicacao . "grid_resumen_ventas_anuladas_res_json.class.php");
              $this->Res = new grid_resumen_ventas_anuladas_res_json();
              $this->prep_modulos("Res");
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_res_grid'] = true;
              $this->Res->monta_json();
          } 
          if (!$this->Ini->sc_export_ajax) {
              $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_btns_export_finished']);
              $this->pb->setProgressbarMessage($Mens_bar);
              $this->pb->addSteps($this->PB_dif);
          }
          if ($this->Json_password != "" || $this->Tem_json_res)
          { 
              $str_zip    = "";
              $Parm_pass  = ($this->Json_password != "") ? " -p" : "";
              $Zip_f      = (FALSE !== strpos($this->Zip_f, ' ')) ? " \"" . $this->Zip_f . "\"" :  $this->Zip_f;
              $Arq_input  = (FALSE !== strpos($this->Json_f, ' ')) ? " \"" . $this->Json_f . "\"" :  $this->Json_f;
              if (is_file($Zip_f)) {
                  unlink($Zip_f);
              }
              if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
              {
                  chdir($this->Ini->path_third . "/zip/windows");
                  $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $this->Json_password . " " . $Zip_f . " " . $Arq_input;
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
                  $str_zip = "./7za " . $Parm_pass . $this->Json_password . " a " . $Zip_f . " " . $Arq_input;
              }
              elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
              {
                  chdir($this->Ini->path_third . "/zip/mac/bin");
                  $str_zip = "./7za " . $Parm_pass . $this->Json_password . " a " . $Zip_f . " " . $Arq_input;
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
              unlink($Arq_input);
              $this->Arquivo = $this->Arq_zip;
              $this->Json_f   = $this->Zip_f;
              $this->Tit_doc = $this->Tit_zip;
              if ($this->Tem_json_res)
              { 
                  $str_zip   = "";
                  $Arq_res   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_res_file']['json'];
                  $Arq_input = (FALSE !== strpos($Arq_res, ' ')) ? " \"" . $Arq_res . "\"" :  $Arq_res;
                  if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
                  {
                      $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $this->Json_password . " " . $Zip_f . " " . $Arq_input;
                  }
                  elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
                  {
                      $str_zip = "./7za " . $Parm_pass . $this->Json_password . " a " . $Zip_f . " " . $Arq_input;
                  }
                  elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
                  {
                      $str_zip = "./7za " . $Parm_pass . $this->Json_password . " a " . $Zip_f . " " . $Arq_input;
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
                  unlink($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_res_file']['json']);
              }
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_res_grid']);
          } 
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['export_sel_columns']['usr_cmp_sel']);
      }
      $rs->Close();
   }
   //----- fac_fecha
   function NM_export_fac_fecha()
   {
         if ($this->Json_format)
         {
             $conteudo_x =  $this->fac_fecha;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->fac_fecha, "YYYY-MM-DD  ");
                 $this->fac_fecha = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
             } 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_fecha'])) ? $this->New_label['fac_fecha'] : "" . $this->Ini->Nm_lang['lang_fecha'] . ""; 
         }
         else
         {
             $SC_Label = "fac_fecha"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_fecha;
   }
   //----- fac_tipo_comprobante
   function NM_export_fac_tipo_comprobante()
   {
         $this->look_fac_tipo_comprobante = NM_charset_to_utf8($this->look_fac_tipo_comprobante);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_tipo_comprobante'])) ? $this->New_label['fac_tipo_comprobante'] : "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . ""; 
         }
         else
         {
             $SC_Label = "fac_tipo_comprobante"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->look_fac_tipo_comprobante;
   }
   //----- cl_identificacion
   function NM_export_cl_identificacion()
   {
         $this->cl_identificacion = NM_charset_to_utf8($this->cl_identificacion);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_identificacion'])) ? $this->New_label['cl_identificacion'] : "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . ""; 
         }
         else
         {
             $SC_Label = "cl_identificacion"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_identificacion;
   }
   //----- cl_nombre
   function NM_export_cl_nombre()
   {
         $this->cl_nombre = NM_charset_to_utf8($this->cl_nombre);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_nombre'])) ? $this->New_label['cl_nombre'] : "" . $this->Ini->Nm_lang['lang_cliente'] . ""; 
         }
         else
         {
             $SC_Label = "cl_nombre"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_nombre;
   }
   //----- est_codigo
   function NM_export_est_codigo()
   {
         $this->est_codigo = NM_charset_to_utf8($this->est_codigo);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['est_codigo'])) ? $this->New_label['est_codigo'] : "" . $this->Ini->Nm_lang['lang_establecimiento'] . ""; 
         }
         else
         {
             $SC_Label = "est_codigo"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->est_codigo;
   }
   //----- pen_serie
   function NM_export_pen_serie()
   {
         $this->pen_serie = NM_charset_to_utf8($this->pen_serie);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['pen_serie'])) ? $this->New_label['pen_serie'] : "" . $this->Ini->Nm_lang['lang_punto_emision'] . ""; 
         }
         else
         {
             $SC_Label = "pen_serie"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->pen_serie;
   }
   //----- fac_secuencial
   function NM_export_fac_secuencial()
   {
         $this->fac_secuencial = NM_charset_to_utf8($this->fac_secuencial);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_secuencial'])) ? $this->New_label['fac_secuencial'] : "" . $this->Ini->Nm_lang['lang_secuencial'] . ""; 
         }
         else
         {
             $SC_Label = "fac_secuencial"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_secuencial;
   }
   //----- fac_subtotal
   function NM_export_fac_subtotal()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_subtotal, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_subtotal'])) ? $this->New_label['fac_subtotal'] : "" . $this->Ini->Nm_lang['lang_subtotal'] . ""; 
         }
         else
         {
             $SC_Label = "fac_subtotal"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_subtotal;
   }
   //----- fac_total_descuento
   function NM_export_fac_total_descuento()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_total_descuento, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_total_descuento'])) ? $this->New_label['fac_total_descuento'] : "" . $this->Ini->Nm_lang['lang_descuento'] . ""; 
         }
         else
         {
             $SC_Label = "fac_total_descuento"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_total_descuento;
   }
   //----- fac_valor_iva
   function NM_export_fac_valor_iva()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_valor_iva, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_valor_iva'])) ? $this->New_label['fac_valor_iva'] : "" . $this->Ini->Nm_lang['lang_iva'] . ""; 
         }
         else
         {
             $SC_Label = "fac_valor_iva"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_valor_iva;
   }
   //----- fac_propina
   function NM_export_fac_propina()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_propina, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_propina'])) ? $this->New_label['fac_propina'] : "" . $this->Ini->Nm_lang['lang_propina'] . ""; 
         }
         else
         {
             $SC_Label = "fac_propina"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_propina;
   }
   //----- fac_total
   function NM_export_fac_total()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_total, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_total'])) ? $this->New_label['fac_total'] : "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . ""; 
         }
         else
         {
             $SC_Label = "fac_total"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_total;
   }
   //----- fac_estado_sri
   function NM_export_fac_estado_sri()
   {
         $this->fac_estado_sri = NM_charset_to_utf8($this->fac_estado_sri);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_estado_sri'])) ? $this->New_label['fac_estado_sri'] : "" . $this->Ini->Nm_lang['lang_estado_sri'] . ""; 
         }
         else
         {
             $SC_Label = "fac_estado_sri"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_estado_sri;
   }
   //----- fac_subtotal_iva
   function NM_export_fac_subtotal_iva()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_subtotal_iva, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_subtotal_iva'])) ? $this->New_label['fac_subtotal_iva'] : "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . ""; 
         }
         else
         {
             $SC_Label = "fac_subtotal_iva"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_subtotal_iva;
   }
   //----- fac_subtotal_cero
   function NM_export_fac_subtotal_cero()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_subtotal_cero, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_subtotal_cero'])) ? $this->New_label['fac_subtotal_cero'] : "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . ""; 
         }
         else
         {
             $SC_Label = "fac_subtotal_cero"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_subtotal_cero;
   }
   //----- fac_subtotal_no_objeto
   function NM_export_fac_subtotal_no_objeto()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_subtotal_no_objeto, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_subtotal_no_objeto'])) ? $this->New_label['fac_subtotal_no_objeto'] : "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . ""; 
         }
         else
         {
             $SC_Label = "fac_subtotal_no_objeto"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_subtotal_no_objeto;
   }
   //----- fac_subtotal_excento
   function NM_export_fac_subtotal_excento()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_subtotal_excento, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_subtotal_excento'])) ? $this->New_label['fac_subtotal_excento'] : "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . ""; 
         }
         else
         {
             $SC_Label = "fac_subtotal_excento"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_subtotal_excento;
   }
   //----- fac_valor_ice
   function NM_export_fac_valor_ice()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_valor_ice, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_valor_ice'])) ? $this->New_label['fac_valor_ice'] : "" . $this->Ini->Nm_lang['lang_ice'] . ""; 
         }
         else
         {
             $SC_Label = "fac_valor_ice"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_valor_ice;
   }
   //----- fac_valor_irbpnr
   function NM_export_fac_valor_irbpnr()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_valor_irbpnr, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_valor_irbpnr'])) ? $this->New_label['fac_valor_irbpnr'] : "" . $this->Ini->Nm_lang['lang_irbpnr'] . ""; 
         }
         else
         {
             $SC_Label = "fac_valor_irbpnr"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_valor_irbpnr;
   }
   //----- fac_comentario
   function NM_export_fac_comentario()
   {
         $this->fac_comentario = NM_charset_to_utf8($this->fac_comentario);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_comentario'])) ? $this->New_label['fac_comentario'] : "" . $this->Ini->Nm_lang['lang_comentario'] . ""; 
         }
         else
         {
             $SC_Label = "fac_comentario"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_comentario;
   }
   //----- fac_usuario
   function NM_export_fac_usuario()
   {
         $this->look_fac_usuario = NM_charset_to_utf8($this->look_fac_usuario);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_usuario'])) ? $this->New_label['fac_usuario'] : "" . $this->Ini->Nm_lang['lang_usuario'] . " Factura"; 
         }
         else
         {
             $SC_Label = "fac_usuario"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->look_fac_usuario;
   }
   //----- fac_autorizacion
   function NM_export_fac_autorizacion()
   {
         $this->fac_autorizacion = NM_charset_to_utf8($this->fac_autorizacion);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_autorizacion'])) ? $this->New_label['fac_autorizacion'] : "" . $this->Ini->Nm_lang['lang_autorizacion'] . ""; 
         }
         else
         {
             $SC_Label = "fac_autorizacion"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_autorizacion;
   }
   //----- fac_socio_transportista
   function NM_export_fac_socio_transportista()
   {
         $this->look_fac_socio_transportista = NM_charset_to_utf8($this->look_fac_socio_transportista);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_socio_transportista'])) ? $this->New_label['fac_socio_transportista'] : "" . $this->Ini->Nm_lang['lang_socio'] . ""; 
         }
         else
         {
             $SC_Label = "fac_socio_transportista"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->look_fac_socio_transportista;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas'][$path_doc_md5][1] = $this->Tit_doc;
      $Mens_bar = $this->Ini->Nm_lang['lang_othr_file_msge'];
      if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
          $Mens_bar = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
      }
      $this->pb->setProgressbarMessage($Mens_bar);
      $this->pb->setDownloadLink($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $this->pb->setDownloadMd5($path_doc_md5);
      $this->pb->completed();
   }
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_resumen_ventas'] ?> :: JSON</TITLE>
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
   <td class="scExportTitle" style="height: 25px">JSON</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo_view ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_resumen_ventas_anuladas_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_resumen_ventas_anuladas"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./" style="display: none"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas_anuladas']['json_return']); ?>"> 
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
