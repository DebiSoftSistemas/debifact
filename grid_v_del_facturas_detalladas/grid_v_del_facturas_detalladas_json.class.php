<?php

class grid_v_del_facturas_detalladas_json
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

   function monta_json()
   {
      $this->inicializa_vars();
      $this->grava_arquivo();
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['embutida'])
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['opcao'] = "";
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
                   nm_limpa_str_grid_v_del_facturas_detalladas($cadapar[1]);
                   nm_protect_num_grid_v_del_facturas_detalladas($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_v_del_facturas_detalladas']['opcao'] = $cadapar[1];
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
          nm_limpa_str_grid_v_del_facturas_detalladas($_SESSION["Igtech_RucEmpresa"]);
      }
      if (!isset($Igtech_NombreEmpresa) && isset($igtech_nombreempresa)) 
      {
         $Igtech_NombreEmpresa = $igtech_nombreempresa;
      }
      if (isset($Igtech_NombreEmpresa)) 
      {
          $_SESSION['Igtech_NombreEmpresa'] = $Igtech_NombreEmpresa;
          nm_limpa_str_grid_v_del_facturas_detalladas($_SESSION["Igtech_NombreEmpresa"]);
      }
      if (!isset($var_RutaLogo) && isset($var_rutalogo)) 
      {
         $var_RutaLogo = $var_rutalogo;
      }
      if (isset($var_RutaLogo)) 
      {
          $_SESSION['var_RutaLogo'] = $var_RutaLogo;
          nm_limpa_str_grid_v_del_facturas_detalladas($_SESSION["var_RutaLogo"]);
      }
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Json_use_label = true;
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['SC_Ind_Groupby'] == "sc_free_group_by" && empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['SC_Gb_Free_cmp']))
      {
          $this->Tem_json_res  = false;
      }
      if (!is_file($this->Ini->root . $this->Ini->path_link . "grid_v_del_facturas_detalladas/grid_v_del_facturas_detalladas_res_json.class.php"))
      {
          $this->Tem_json_res  = false;
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_label']))
      {
          $this->Json_use_label = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_label'];
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_format']))
      {
          $this->Json_format = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_format'];
      }
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . "grid_v_del_facturas_detalladas_total.class.php"); 
      $this->Tot = new grid_v_del_facturas_detalladas_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['embutida'] && !$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_v_del_facturas_detalladas']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_return']);
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
      $this->Arq_zip      = $this->Arquivo . "_grid_v_del_facturas_detalladas.zip";
      $this->Arquivo     .= "_grid_v_del_facturas_detalladas";
      $this->Arquivo     .= ".json";
      $this->Tit_doc      = "grid_v_del_facturas_detalladas.json";
      $this->Tit_zip      = "grid_v_del_facturas_detalladas.zip";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_v_del_facturas_detalladas']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_v_del_facturas_detalladas']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_v_del_facturas_detalladas']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->anio = (isset($Busca_temp['anio'])) ? $Busca_temp['anio'] : ""; 
          $tmp_pos = (is_string($this->anio)) ? strpos($this->anio, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->anio))
          {
              $this->anio = substr($this->anio, 0, $tmp_pos);
          }
          $this->mes = (isset($Busca_temp['mes'])) ? $Busca_temp['mes'] : ""; 
          $tmp_pos = (is_string($this->mes)) ? strpos($this->mes, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->mes))
          {
              $this->mes = substr($this->mes, 0, $tmp_pos);
          }
          $this->fac_fecha = (isset($Busca_temp['fac_fecha'])) ? $Busca_temp['fac_fecha'] : ""; 
          $tmp_pos = (is_string($this->fac_fecha)) ? strpos($this->fac_fecha, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_fecha))
          {
              $this->fac_fecha = substr($this->fac_fecha, 0, $tmp_pos);
          }
          $this->fac_fecha_2 = (isset($Busca_temp['fac_fecha_input_2'])) ? $Busca_temp['fac_fecha_input_2'] : ""; 
          $this->fac_tipo_comprobante = (isset($Busca_temp['fac_tipo_comprobante'])) ? $Busca_temp['fac_tipo_comprobante'] : ""; 
          $tmp_pos = (is_string($this->fac_tipo_comprobante)) ? strpos($this->fac_tipo_comprobante, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_tipo_comprobante))
          {
              $this->fac_tipo_comprobante = substr($this->fac_tipo_comprobante, 0, $tmp_pos);
          }
          $this->fac_serie = (isset($Busca_temp['fac_serie'])) ? $Busca_temp['fac_serie'] : ""; 
          $tmp_pos = (is_string($this->fac_serie)) ? strpos($this->fac_serie, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_serie))
          {
              $this->fac_serie = substr($this->fac_serie, 0, $tmp_pos);
          }
          $this->cl_nombre = (isset($Busca_temp['cl_nombre'])) ? $Busca_temp['cl_nombre'] : ""; 
          $tmp_pos = (is_string($this->cl_nombre)) ? strpos($this->cl_nombre, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_nombre))
          {
              $this->cl_nombre = substr($this->cl_nombre, 0, $tmp_pos);
          }
          $this->cl_identificacion = (isset($Busca_temp['cl_identificacion'])) ? $Busca_temp['cl_identificacion'] : ""; 
          $tmp_pos = (is_string($this->cl_identificacion)) ? strpos($this->cl_identificacion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_identificacion))
          {
              $this->cl_identificacion = substr($this->cl_identificacion, 0, $tmp_pos);
          }
          $this->pro_descripcion = (isset($Busca_temp['pro_descripcion'])) ? $Busca_temp['pro_descripcion'] : ""; 
          $tmp_pos = (is_string($this->pro_descripcion)) ? strpos($this->pro_descripcion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pro_descripcion))
          {
              $this->pro_descripcion = substr($this->pro_descripcion, 0, $tmp_pos);
          }
          $this->fac_usuario = (isset($Busca_temp['fac_usuario'])) ? $Busca_temp['fac_usuario'] : ""; 
          $tmp_pos = (is_string($this->fac_usuario)) ? strpos($this->fac_usuario, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_usuario))
          {
              $this->fac_usuario = substr($this->fac_usuario, 0, $tmp_pos);
          }
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_name'] .= ".json";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_name'];
          $this->Arq_zip = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_name'];
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_name'], ".");
          if ($Pos !== false) {
              $this->Arq_zip = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_name'], 0, $Pos);
          }
          $this->Arq_zip .= ".zip";
          $this->Tit_zip  = $this->Arq_zip;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_name']);
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['embutida'])
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
          $nmgp_select = "SELECT str_replace (convert(char(10),fac_fecha,102), '.', '-') + ' ' + convert(char(8),fac_fecha,20), fac_serie, fac_secuencial, cl_nombre, pro_descripcion, df_subtotal, df_descuento, df_base_iva, df_valor_iva, df_total, fac_numero, fac_tipo_comprobante, fac_empresa, cl_identificacion, cl_direccion, cl_telefono, cl_celular, cl_email, fac_comentario, df_cantidad, df_precio_unitario, df_valor_ice, df_valor_irbpnr, mes, anio, fac_asiento, fac_usuario from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT fac_fecha, fac_serie, fac_secuencial, cl_nombre, pro_descripcion, df_subtotal, df_descuento, df_base_iva, df_valor_iva, df_total, fac_numero, fac_tipo_comprobante, fac_empresa, cl_identificacion, cl_direccion, cl_telefono, cl_celular, cl_email, fac_comentario, df_cantidad, df_precio_unitario, df_valor_ice, df_valor_irbpnr, mes, anio, fac_asiento, fac_usuario from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT convert(char(23),fac_fecha,121), fac_serie, fac_secuencial, cl_nombre, pro_descripcion, df_subtotal, df_descuento, df_base_iva, df_valor_iva, df_total, fac_numero, fac_tipo_comprobante, fac_empresa, cl_identificacion, cl_direccion, cl_telefono, cl_celular, cl_email, fac_comentario, df_cantidad, df_precio_unitario, df_valor_ice, df_valor_irbpnr, mes, anio, fac_asiento, fac_usuario from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT fac_fecha, fac_serie, fac_secuencial, cl_nombre, pro_descripcion, df_subtotal, df_descuento, df_base_iva, df_valor_iva, df_total, fac_numero, fac_tipo_comprobante, fac_empresa, cl_identificacion, cl_direccion, cl_telefono, cl_celular, cl_email, fac_comentario, df_cantidad, df_precio_unitario, df_valor_ice, df_valor_irbpnr, mes, anio, fac_asiento, fac_usuario from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT EXTEND(fac_fecha, YEAR TO DAY), fac_serie, fac_secuencial, cl_nombre, pro_descripcion, df_subtotal, df_descuento, df_base_iva, df_valor_iva, df_total, fac_numero, fac_tipo_comprobante, fac_empresa, cl_identificacion, cl_direccion, cl_telefono, cl_celular, cl_email, fac_comentario, df_cantidad, df_precio_unitario, df_valor_ice, df_valor_irbpnr, mes, anio, fac_asiento, fac_usuario from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT fac_fecha, fac_serie, fac_secuencial, cl_nombre, pro_descripcion, df_subtotal, df_descuento, df_base_iva, df_valor_iva, df_total, fac_numero, fac_tipo_comprobante, fac_empresa, cl_identificacion, cl_direccion, cl_telefono, cl_celular, cl_email, fac_comentario, df_cantidad, df_precio_unitario, df_valor_ice, df_valor_irbpnr, mes, anio, fac_asiento, fac_usuario from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_pesq'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_resumo']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_resumo'])) 
      { 
          if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_pesq'])) 
          { 
              $nmgp_select .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_resumo']; 
              $nmgp_select_count .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_resumo']; 
          } 
          else
          { 
              $nmgp_select .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_resumo'] . ")"; 
              $nmgp_select_count .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['where_resumo'] . ")"; 
          } 
      } 
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['order_grid'];
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
         $this->fac_serie = $rs->fields[1] ;  
         $this->fac_secuencial = $rs->fields[2] ;  
         $this->cl_nombre = $rs->fields[3] ;  
         $this->pro_descripcion = $rs->fields[4] ;  
         $this->df_subtotal = $rs->fields[5] ;  
         $this->df_subtotal = (string)$this->df_subtotal;
         $this->df_descuento = $rs->fields[6] ;  
         $this->df_descuento = (string)$this->df_descuento;
         $this->df_base_iva = $rs->fields[7] ;  
         $this->df_base_iva = (string)$this->df_base_iva;
         $this->df_valor_iva = $rs->fields[8] ;  
         $this->df_valor_iva = (string)$this->df_valor_iva;
         $this->df_total = $rs->fields[9] ;  
         $this->df_total = (string)$this->df_total;
         $this->fac_numero = $rs->fields[10] ;  
         $this->fac_numero = (string)$this->fac_numero;
         $this->fac_tipo_comprobante = $rs->fields[11] ;  
         $this->fac_empresa = $rs->fields[12] ;  
         $this->cl_identificacion = $rs->fields[13] ;  
         $this->cl_direccion = $rs->fields[14] ;  
         $this->cl_telefono = $rs->fields[15] ;  
         $this->cl_celular = $rs->fields[16] ;  
         $this->cl_email = $rs->fields[17] ;  
         $this->fac_comentario = $rs->fields[18] ;  
         $this->df_cantidad = $rs->fields[19] ;  
         $this->df_cantidad = (string)$this->df_cantidad;
         $this->df_precio_unitario = $rs->fields[20] ;  
         $this->df_precio_unitario = (string)$this->df_precio_unitario;
         $this->df_valor_ice = $rs->fields[21] ;  
         $this->df_valor_ice = (string)$this->df_valor_ice;
         $this->df_valor_irbpnr = $rs->fields[22] ;  
         $this->df_valor_irbpnr = (string)$this->df_valor_irbpnr;
         $this->mes = $rs->fields[23] ;  
         $this->anio = $rs->fields[24] ;  
         $this->fac_asiento = $rs->fields[25] ;  
         $this->fac_usuario = $rs->fields[26] ;  
   $_SESSION['scriptcase']['grid_v_del_facturas_detalladas']['contr_erro'] = 'on';
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
$_SESSION['scriptcase']['grid_v_del_facturas_detalladas']['contr_erro'] = 'off';
      }
      $this->SC_seq_register = 0;
      $this->json_registro = array();
      $this->SC_seq_json   = 0;
      $PB_tot = (isset($this->count_ger) && $this->count_ger > 0) ? "/" . $this->count_ger : "";
      while (!$rs->EOF)
      {
         $this->SC_seq_register++;
         if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['embutida'] && !$this->Ini->sc_export_ajax) {
             $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
             $this->pb->setProgressbarMessage($Mens_bar . ": " . $this->SC_seq_register . $PB_tot);
             $this->pb->addSteps(1);
         }
         $this->fac_fecha = $rs->fields[0] ;  
         $this->fac_serie = $rs->fields[1] ;  
         $this->fac_secuencial = $rs->fields[2] ;  
         $this->cl_nombre = $rs->fields[3] ;  
         $this->pro_descripcion = $rs->fields[4] ;  
         $this->df_subtotal = $rs->fields[5] ;  
         $this->df_subtotal = (string)$this->df_subtotal;
         $this->df_descuento = $rs->fields[6] ;  
         $this->df_descuento = (string)$this->df_descuento;
         $this->df_base_iva = $rs->fields[7] ;  
         $this->df_base_iva = (string)$this->df_base_iva;
         $this->df_valor_iva = $rs->fields[8] ;  
         $this->df_valor_iva = (string)$this->df_valor_iva;
         $this->df_total = $rs->fields[9] ;  
         $this->df_total = (string)$this->df_total;
         $this->fac_numero = $rs->fields[10] ;  
         $this->fac_numero = (string)$this->fac_numero;
         $this->fac_tipo_comprobante = $rs->fields[11] ;  
         $this->fac_empresa = $rs->fields[12] ;  
         $this->cl_identificacion = $rs->fields[13] ;  
         $this->cl_direccion = $rs->fields[14] ;  
         $this->cl_telefono = $rs->fields[15] ;  
         $this->cl_celular = $rs->fields[16] ;  
         $this->cl_email = $rs->fields[17] ;  
         $this->fac_comentario = $rs->fields[18] ;  
         $this->df_cantidad = $rs->fields[19] ;  
         $this->df_cantidad = (string)$this->df_cantidad;
         $this->df_precio_unitario = $rs->fields[20] ;  
         $this->df_precio_unitario = (string)$this->df_precio_unitario;
         $this->df_valor_ice = $rs->fields[21] ;  
         $this->df_valor_ice = (string)$this->df_valor_ice;
         $this->df_valor_irbpnr = $rs->fields[22] ;  
         $this->df_valor_irbpnr = (string)$this->df_valor_irbpnr;
         $this->mes = $rs->fields[23] ;  
         $this->anio = $rs->fields[24] ;  
         $this->fac_asiento = $rs->fields[25] ;  
         $this->fac_usuario = $rs->fields[26] ;  
         //----- lookup - fac_tipo_comprobante
         $this->look_fac_tipo_comprobante = $this->fac_tipo_comprobante; 
         $this->Lookup->lookup_fac_tipo_comprobante($this->look_fac_tipo_comprobante, $this->fac_tipo_comprobante) ; 
         $this->look_fac_tipo_comprobante = ($this->look_fac_tipo_comprobante == "&nbsp;") ? "" : $this->look_fac_tipo_comprobante; 
         //----- lookup - mes
         $this->look_mes = $this->mes; 
         $this->Lookup->lookup_mes($this->look_mes, $this->mes) ; 
         $this->look_mes = ($this->look_mes == "&nbsp;") ? "" : $this->look_mes; 
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['field_order'] as $Cada_col)
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['embutida'])
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
              require_once($this->Ini->path_aplicacao . "grid_v_del_facturas_detalladas_res_json.class.php");
              $this->Res = new grid_v_del_facturas_detalladas_res_json();
              $this->prep_modulos("Res");
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_res_grid'] = true;
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
                  $Arq_res   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_res_file']['json'];
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
                  unlink($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_res_file']['json']);
              }
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_res_grid']);
          } 
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['export_sel_columns']['usr_cmp_sel']);
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
   //----- fac_serie
   function NM_export_fac_serie()
   {
         $this->fac_serie = NM_charset_to_utf8($this->fac_serie);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_serie'])) ? $this->New_label['fac_serie'] : "" . $this->Ini->Nm_lang['lang_serie_sri'] . ""; 
         }
         else
         {
             $SC_Label = "fac_serie"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_serie;
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
   //----- cl_nombre
   function NM_export_cl_nombre()
   {
         $this->cl_nombre = NM_charset_to_utf8($this->cl_nombre);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_nombre'])) ? $this->New_label['cl_nombre'] : "" . $this->Ini->Nm_lang['lang_nombre'] . ""; 
         }
         else
         {
             $SC_Label = "cl_nombre"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_nombre;
   }
   //----- pro_descripcion
   function NM_export_pro_descripcion()
   {
         $this->pro_descripcion = NM_charset_to_utf8($this->pro_descripcion);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['pro_descripcion'])) ? $this->New_label['pro_descripcion'] : "" . $this->Ini->Nm_lang['lang_producto'] . ""; 
         }
         else
         {
             $SC_Label = "pro_descripcion"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->pro_descripcion;
   }
   //----- df_subtotal
   function NM_export_df_subtotal()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->df_subtotal, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['df_subtotal'])) ? $this->New_label['df_subtotal'] : "" . $this->Ini->Nm_lang['lang_subtotal'] . ""; 
         }
         else
         {
             $SC_Label = "df_subtotal"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->df_subtotal;
   }
   //----- df_descuento
   function NM_export_df_descuento()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->df_descuento, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['df_descuento'])) ? $this->New_label['df_descuento'] : "" . $this->Ini->Nm_lang['lang_descuento'] . ""; 
         }
         else
         {
             $SC_Label = "df_descuento"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->df_descuento;
   }
   //----- df_base_iva
   function NM_export_df_base_iva()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->df_base_iva, "", ".", "2", "S", "2", "", "N:2", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['df_base_iva'])) ? $this->New_label['df_base_iva'] : "" . $this->Ini->Nm_lang['lang_base_iva'] . ""; 
         }
         else
         {
             $SC_Label = "df_base_iva"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->df_base_iva;
   }
   //----- df_valor_iva
   function NM_export_df_valor_iva()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->df_valor_iva, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['df_valor_iva'])) ? $this->New_label['df_valor_iva'] : "" . $this->Ini->Nm_lang['lang_iva'] . ""; 
         }
         else
         {
             $SC_Label = "df_valor_iva"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->df_valor_iva;
   }
   //----- df_total
   function NM_export_df_total()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->df_total, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['df_total'])) ? $this->New_label['df_total'] : "" . $this->Ini->Nm_lang['lang_total'] . ""; 
         }
         else
         {
             $SC_Label = "df_total"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->df_total;
   }
   //----- fac_numero
   function NM_export_fac_numero()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->fac_numero, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_numero'])) ? $this->New_label['fac_numero'] : "" . $this->Ini->Nm_lang['lang_factura'] . ""; 
         }
         else
         {
             $SC_Label = "fac_numero"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_numero;
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
   //----- fac_empresa
   function NM_export_fac_empresa()
   {
         $this->fac_empresa = NM_charset_to_utf8($this->fac_empresa);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_empresa'])) ? $this->New_label['fac_empresa'] : "" . $this->Ini->Nm_lang['lang_empresa'] . ""; 
         }
         else
         {
             $SC_Label = "fac_empresa"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_empresa;
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
   //----- cl_direccion
   function NM_export_cl_direccion()
   {
         $this->cl_direccion = NM_charset_to_utf8($this->cl_direccion);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_direccion'])) ? $this->New_label['cl_direccion'] : "" . $this->Ini->Nm_lang['lang_direccion'] . ""; 
         }
         else
         {
             $SC_Label = "cl_direccion"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_direccion;
   }
   //----- cl_telefono
   function NM_export_cl_telefono()
   {
         $this->cl_telefono = NM_charset_to_utf8($this->cl_telefono);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_telefono'])) ? $this->New_label['cl_telefono'] : "" . $this->Ini->Nm_lang['lang_lot_telefono'] . ""; 
         }
         else
         {
             $SC_Label = "cl_telefono"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_telefono;
   }
   //----- cl_celular
   function NM_export_cl_celular()
   {
         $this->cl_celular = NM_charset_to_utf8($this->cl_celular);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_celular'])) ? $this->New_label['cl_celular'] : "" . $this->Ini->Nm_lang['lang_celular'] . ""; 
         }
         else
         {
             $SC_Label = "cl_celular"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_celular;
   }
   //----- cl_email
   function NM_export_cl_email()
   {
         $this->cl_email = NM_charset_to_utf8($this->cl_email);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_email'])) ? $this->New_label['cl_email'] : "" . $this->Ini->Nm_lang['lang_email'] . ""; 
         }
         else
         {
             $SC_Label = "cl_email"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_email;
   }
   //----- fac_comentario
   function NM_export_fac_comentario()
   {
         $this->fac_comentario = NM_charset_to_utf8($this->fac_comentario);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_comentario'])) ? $this->New_label['fac_comentario'] : "" . $this->Ini->Nm_lang['lang_description'] . ""; 
         }
         else
         {
             $SC_Label = "fac_comentario"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_comentario;
   }
   //----- df_cantidad
   function NM_export_df_cantidad()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->df_cantidad, "", ".", "6", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['df_cantidad'])) ? $this->New_label['df_cantidad'] : "" . $this->Ini->Nm_lang['lang_lot_cantidad'] . ""; 
         }
         else
         {
             $SC_Label = "df_cantidad"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->df_cantidad;
   }
   //----- df_precio_unitario
   function NM_export_df_precio_unitario()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->df_precio_unitario, "", ".", "6", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['df_precio_unitario'])) ? $this->New_label['df_precio_unitario'] : "" . $this->Ini->Nm_lang['lang_precio_unitario'] . ""; 
         }
         else
         {
             $SC_Label = "df_precio_unitario"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->df_precio_unitario;
   }
   //----- df_valor_ice
   function NM_export_df_valor_ice()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->df_valor_ice, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['df_valor_ice'])) ? $this->New_label['df_valor_ice'] : "" . $this->Ini->Nm_lang['lang_ice'] . ""; 
         }
         else
         {
             $SC_Label = "df_valor_ice"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->df_valor_ice;
   }
   //----- df_valor_irbpnr
   function NM_export_df_valor_irbpnr()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->df_valor_irbpnr, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['df_valor_irbpnr'])) ? $this->New_label['df_valor_irbpnr'] : "" . $this->Ini->Nm_lang['lang_irbpnr'] . ""; 
         }
         else
         {
             $SC_Label = "df_valor_irbpnr"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->df_valor_irbpnr;
   }
   //----- mes
   function NM_export_mes()
   {
         $this->look_mes = NM_charset_to_utf8($this->look_mes);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['mes'])) ? $this->New_label['mes'] : "" . $this->Ini->Nm_lang['lang_srch_mnth'] . ""; 
         }
         else
         {
             $SC_Label = "mes"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->look_mes;
   }
   //----- anio
   function NM_export_anio()
   {
         $this->anio = NM_charset_to_utf8($this->anio);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['anio'])) ? $this->New_label['anio'] : "" . $this->Ini->Nm_lang['lang_srch_year'] . ""; 
         }
         else
         {
             $SC_Label = "anio"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->anio;
   }
   //----- fac_asiento
   function NM_export_fac_asiento()
   {
         $this->fac_asiento = NM_charset_to_utf8($this->fac_asiento);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['fac_asiento'])) ? $this->New_label['fac_asiento'] : "" . $this->Ini->Nm_lang['lang_asiento'] . ""; 
         }
         else
         {
             $SC_Label = "fac_asiento"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->fac_asiento;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas'][$path_doc_md5][1] = $this->Tit_doc;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_detalle_ventas'] ?> :: JSON</TITLE>
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
<form name="Fdown" method="get" action="grid_v_del_facturas_detalladas_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_v_del_facturas_detalladas"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./" style="display: none"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_facturas_detalladas']['json_return']); ?>"> 
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
