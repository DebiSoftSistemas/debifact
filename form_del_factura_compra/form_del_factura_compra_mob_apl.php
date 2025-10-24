<?php
//
class form_del_factura_compra_mob_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $use_100perc_fields = true;
   var $classes_100perc_fields = array();
   var $close_modal_after_insert = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => array(),
                                'ajaxMessage'       => array(),
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                                'fieldsWithErrors'  => array(),
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $fc_id;
   var $fc_empresa;
   var $fc_tipo_comprobante;
   var $fc_tipo_comprobante_1;
   var $fc_proveedor;
   var $fc_fecha;
   var $fc_serie;
   var $fc_secuencial;
   var $fc_autorizacion;
   var $fc_desde;
   var $fc_hasta;
   var $fc_fecha_caducidad;
   var $fc_subtotal_iva;
   var $fc_subtotal_cero;
   var $fc_subtotal_no_objeto;
   var $fc_subtotal_excento;
   var $fc_subtotal;
   var $fc_valor_ice;
   var $fc_valor_iva;
   var $fc_valor_irbpnr;
   var $fc_total;
   var $fc_comentario;
   var $fc_usuario;
   var $fc_aplica_ret;
   var $fc_aplica_ret_1;
   var $fc_estado;
   var $liq_libretin;
   var $liq_libretin_1;
   var $liq_estado_sri;
   var $liq_error_sri;
   var $liq_fecha_autorizacion;
   var $liq_clave;
   var $fc_total_descuento;
   var $fc_propina;
   var $liq_establecimiento;
   var $liq_punto_emision;
   var $liq_ambiente;
   var $fc_aplica_propina;
   var $fc_aplica_propina_1;
   var $fc_retencion;
   var $fc_correo_enviado;
   var $fc_sustento_gasto;
   var $fc_sustento_gasto_1;
   var $fc_email_proveedor;
   var $fc_nombre_proveedor;
   var $titulo;
   var $ambiente;
   var $forma_pago;
   var $detalles;
   var $liq_tipo_libretin;
   var $fc_ruc_proveedor;
   var $liq_secuencial;
   var $fc_direccion_proveedor;
   var $vacio;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden   = array();
   var $Field_no_validate  = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
   var $record_insert_ok = false;
   var $record_delete_ok = false;
   var $NM_case_insensitive;
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['ambiente']))
          {
              $this->ambiente = $this->NM_ajax_info['param']['ambiente'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['detalles']))
          {
              $this->detalles = $this->NM_ajax_info['param']['detalles'];
          }
          if (isset($this->NM_ajax_info['param']['fc_aplica_propina']))
          {
              $this->fc_aplica_propina = $this->NM_ajax_info['param']['fc_aplica_propina'];
          }
          if (isset($this->NM_ajax_info['param']['fc_aplica_ret']))
          {
              $this->fc_aplica_ret = $this->NM_ajax_info['param']['fc_aplica_ret'];
          }
          if (isset($this->NM_ajax_info['param']['fc_autorizacion']))
          {
              $this->fc_autorizacion = $this->NM_ajax_info['param']['fc_autorizacion'];
          }
          if (isset($this->NM_ajax_info['param']['fc_comentario']))
          {
              $this->fc_comentario = $this->NM_ajax_info['param']['fc_comentario'];
          }
          if (isset($this->NM_ajax_info['param']['fc_direccion_proveedor']))
          {
              $this->fc_direccion_proveedor = $this->NM_ajax_info['param']['fc_direccion_proveedor'];
          }
          if (isset($this->NM_ajax_info['param']['fc_email_proveedor']))
          {
              $this->fc_email_proveedor = $this->NM_ajax_info['param']['fc_email_proveedor'];
          }
          if (isset($this->NM_ajax_info['param']['fc_estado']))
          {
              $this->fc_estado = $this->NM_ajax_info['param']['fc_estado'];
          }
          if (isset($this->NM_ajax_info['param']['fc_fecha']))
          {
              $this->fc_fecha = $this->NM_ajax_info['param']['fc_fecha'];
          }
          if (isset($this->NM_ajax_info['param']['fc_id']))
          {
              $this->fc_id = $this->NM_ajax_info['param']['fc_id'];
          }
          if (isset($this->NM_ajax_info['param']['fc_nombre_proveedor']))
          {
              $this->fc_nombre_proveedor = $this->NM_ajax_info['param']['fc_nombre_proveedor'];
          }
          if (isset($this->NM_ajax_info['param']['fc_propina']))
          {
              $this->fc_propina = $this->NM_ajax_info['param']['fc_propina'];
          }
          if (isset($this->NM_ajax_info['param']['fc_proveedor']))
          {
              $this->fc_proveedor = $this->NM_ajax_info['param']['fc_proveedor'];
          }
          if (isset($this->NM_ajax_info['param']['fc_ruc_proveedor']))
          {
              $this->fc_ruc_proveedor = $this->NM_ajax_info['param']['fc_ruc_proveedor'];
          }
          if (isset($this->NM_ajax_info['param']['fc_secuencial']))
          {
              $this->fc_secuencial = $this->NM_ajax_info['param']['fc_secuencial'];
          }
          if (isset($this->NM_ajax_info['param']['fc_serie']))
          {
              $this->fc_serie = $this->NM_ajax_info['param']['fc_serie'];
          }
          if (isset($this->NM_ajax_info['param']['fc_subtotal']))
          {
              $this->fc_subtotal = $this->NM_ajax_info['param']['fc_subtotal'];
          }
          if (isset($this->NM_ajax_info['param']['fc_subtotal_cero']))
          {
              $this->fc_subtotal_cero = $this->NM_ajax_info['param']['fc_subtotal_cero'];
          }
          if (isset($this->NM_ajax_info['param']['fc_subtotal_excento']))
          {
              $this->fc_subtotal_excento = $this->NM_ajax_info['param']['fc_subtotal_excento'];
          }
          if (isset($this->NM_ajax_info['param']['fc_subtotal_iva']))
          {
              $this->fc_subtotal_iva = $this->NM_ajax_info['param']['fc_subtotal_iva'];
          }
          if (isset($this->NM_ajax_info['param']['fc_subtotal_no_objeto']))
          {
              $this->fc_subtotal_no_objeto = $this->NM_ajax_info['param']['fc_subtotal_no_objeto'];
          }
          if (isset($this->NM_ajax_info['param']['fc_sustento_gasto']))
          {
              $this->fc_sustento_gasto = $this->NM_ajax_info['param']['fc_sustento_gasto'];
          }
          if (isset($this->NM_ajax_info['param']['fc_tipo_comprobante']))
          {
              $this->fc_tipo_comprobante = $this->NM_ajax_info['param']['fc_tipo_comprobante'];
          }
          if (isset($this->NM_ajax_info['param']['fc_total']))
          {
              $this->fc_total = $this->NM_ajax_info['param']['fc_total'];
          }
          if (isset($this->NM_ajax_info['param']['fc_total_descuento']))
          {
              $this->fc_total_descuento = $this->NM_ajax_info['param']['fc_total_descuento'];
          }
          if (isset($this->NM_ajax_info['param']['fc_valor_ice']))
          {
              $this->fc_valor_ice = $this->NM_ajax_info['param']['fc_valor_ice'];
          }
          if (isset($this->NM_ajax_info['param']['fc_valor_irbpnr']))
          {
              $this->fc_valor_irbpnr = $this->NM_ajax_info['param']['fc_valor_irbpnr'];
          }
          if (isset($this->NM_ajax_info['param']['fc_valor_iva']))
          {
              $this->fc_valor_iva = $this->NM_ajax_info['param']['fc_valor_iva'];
          }
          if (isset($this->NM_ajax_info['param']['forma_pago']))
          {
              $this->forma_pago = $this->NM_ajax_info['param']['forma_pago'];
          }
          if (isset($this->NM_ajax_info['param']['liq_ambiente']))
          {
              $this->liq_ambiente = $this->NM_ajax_info['param']['liq_ambiente'];
          }
          if (isset($this->NM_ajax_info['param']['liq_clave']))
          {
              $this->liq_clave = $this->NM_ajax_info['param']['liq_clave'];
          }
          if (isset($this->NM_ajax_info['param']['liq_error_sri']))
          {
              $this->liq_error_sri = $this->NM_ajax_info['param']['liq_error_sri'];
          }
          if (isset($this->NM_ajax_info['param']['liq_establecimiento']))
          {
              $this->liq_establecimiento = $this->NM_ajax_info['param']['liq_establecimiento'];
          }
          if (isset($this->NM_ajax_info['param']['liq_estado_sri']))
          {
              $this->liq_estado_sri = $this->NM_ajax_info['param']['liq_estado_sri'];
          }
          if (isset($this->NM_ajax_info['param']['liq_fecha_autorizacion']))
          {
              $this->liq_fecha_autorizacion = $this->NM_ajax_info['param']['liq_fecha_autorizacion'];
          }
          if (isset($this->NM_ajax_info['param']['liq_libretin']))
          {
              $this->liq_libretin = $this->NM_ajax_info['param']['liq_libretin'];
          }
          if (isset($this->NM_ajax_info['param']['liq_punto_emision']))
          {
              $this->liq_punto_emision = $this->NM_ajax_info['param']['liq_punto_emision'];
          }
          if (isset($this->NM_ajax_info['param']['liq_secuencial']))
          {
              $this->liq_secuencial = $this->NM_ajax_info['param']['liq_secuencial'];
          }
          if (isset($this->NM_ajax_info['param']['liq_tipo_libretin']))
          {
              $this->liq_tipo_libretin = $this->NM_ajax_info['param']['liq_tipo_libretin'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_fields']))
          {
              $this->nmgp_refresh_fields = $this->NM_ajax_info['param']['nmgp_refresh_fields'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['titulo']))
          {
              $this->titulo = $this->NM_ajax_info['param']['titulo'];
          }
          if (isset($this->NM_ajax_info['param']['vacio']))
          {
              $this->vacio = $this->NM_ajax_info['param']['vacio'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->scSajaxReservedWords = array('rs', 'rst', 'rsrnd', 'rsargs');
      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (!in_array(strtolower($nmgp_campo), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_campo]))
                   {
                       $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
                   {
                       $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
                   }
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (!in_array(strtolower($nmgp_var), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_var]))
                   {
                       $nmgp_var = $this->sc_conv_var[$nmgp_var];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
                   {
                       $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
                   }
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (!in_array(strtolower($nmgp_var), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_var]))
                   {
                       $nmgp_var = $this->sc_conv_var[$nmgp_var];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
                   {
                       $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
                   }
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->var_id_factura) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_id_factura'] = $this->var_id_factura;
      }
      if (isset($this->Igtech_RucEmpresa) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (isset($this->Igtech_SesionLogin) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
      }
      if (isset($this->var_procesar) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_procesar'] = $this->var_procesar;
      }
      if (isset($this->var_mensaje) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_mensaje'] = $this->var_mensaje;
      }
      if (isset($this->Igtech_AutorizacionInmediata) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_AutorizacionInmediata'] = $this->Igtech_AutorizacionInmediata;
      }
      if (isset($_POST["var_id_factura"]) && isset($this->var_id_factura)) 
      {
          $_SESSION['var_id_factura'] = $this->var_id_factura;
      }
      if (isset($_POST["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_POST["Igtech_RucEmpresa"]) && isset($_POST["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_POST["igtech_rucempresa"];
      }
      if (isset($_POST["Igtech_SesionLogin"]) && isset($this->Igtech_SesionLogin)) 
      {
          $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
      }
      if (!isset($_POST["Igtech_SesionLogin"]) && isset($_POST["igtech_sesionlogin"])) 
      {
          $_SESSION['Igtech_SesionLogin'] = $_POST["igtech_sesionlogin"];
      }
      if (isset($_POST["var_procesar"]) && isset($this->var_procesar)) 
      {
          $_SESSION['var_procesar'] = $this->var_procesar;
      }
      if (isset($_POST["var_mensaje"]) && isset($this->var_mensaje)) 
      {
          $_SESSION['var_mensaje'] = $this->var_mensaje;
      }
      if (isset($_POST["Igtech_AutorizacionInmediata"]) && isset($this->Igtech_AutorizacionInmediata)) 
      {
          $_SESSION['Igtech_AutorizacionInmediata'] = $this->Igtech_AutorizacionInmediata;
      }
      if (!isset($_POST["Igtech_AutorizacionInmediata"]) && isset($_POST["igtech_autorizacioninmediata"])) 
      {
          $_SESSION['Igtech_AutorizacionInmediata'] = $_POST["igtech_autorizacioninmediata"];
      }
      if (isset($_GET["var_id_factura"]) && isset($this->var_id_factura)) 
      {
          $_SESSION['var_id_factura'] = $this->var_id_factura;
      }
      if (isset($_GET["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_GET["Igtech_RucEmpresa"]) && isset($_GET["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_GET["igtech_rucempresa"];
      }
      if (isset($_GET["Igtech_SesionLogin"]) && isset($this->Igtech_SesionLogin)) 
      {
          $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
      }
      if (!isset($_GET["Igtech_SesionLogin"]) && isset($_GET["igtech_sesionlogin"])) 
      {
          $_SESSION['Igtech_SesionLogin'] = $_GET["igtech_sesionlogin"];
      }
      if (isset($_GET["var_procesar"]) && isset($this->var_procesar)) 
      {
          $_SESSION['var_procesar'] = $this->var_procesar;
      }
      if (isset($_GET["var_mensaje"]) && isset($this->var_mensaje)) 
      {
          $_SESSION['var_mensaje'] = $this->var_mensaje;
      }
      if (isset($_GET["Igtech_AutorizacionInmediata"]) && isset($this->Igtech_AutorizacionInmediata)) 
      {
          $_SESSION['Igtech_AutorizacionInmediata'] = $this->Igtech_AutorizacionInmediata;
      }
      if (!isset($_GET["Igtech_AutorizacionInmediata"]) && isset($_GET["igtech_autorizacioninmediata"])) 
      {
          $_SESSION['Igtech_AutorizacionInmediata'] = $_GET["igtech_autorizacioninmediata"];
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_del_factura_compra_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->var_id_factura)) 
          {
              $_SESSION['var_id_factura'] = $this->var_id_factura;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if (!isset($this->Igtech_SesionLogin) && isset($this->igtech_sesionlogin)) 
          {
              $this->Igtech_SesionLogin = $this->igtech_sesionlogin;
          }
          if (isset($this->Igtech_SesionLogin)) 
          {
              $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
          }
          if (isset($this->var_procesar)) 
          {
              $_SESSION['var_procesar'] = $this->var_procesar;
          }
          if (isset($this->var_mensaje)) 
          {
              $_SESSION['var_mensaje'] = $this->var_mensaje;
          }
          if (!isset($this->Igtech_AutorizacionInmediata) && isset($this->igtech_autorizacioninmediata)) 
          {
              $this->Igtech_AutorizacionInmediata = $this->igtech_autorizacioninmediata;
          }
          if (isset($this->Igtech_AutorizacionInmediata)) 
          {
              $_SESSION['Igtech_AutorizacionInmediata'] = $this->Igtech_AutorizacionInmediata;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['total']);
          }
          if (!isset($_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['total']))
          {
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->var_id_factura)) 
          {
              $_SESSION['var_id_factura'] = $this->var_id_factura;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if (!isset($this->Igtech_SesionLogin) && isset($this->igtech_sesionlogin)) 
          {
              $this->Igtech_SesionLogin = $this->igtech_sesionlogin;
          }
          if (isset($this->Igtech_SesionLogin)) 
          {
              $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
          }
          if (isset($this->var_procesar)) 
          {
              $_SESSION['var_procesar'] = $this->var_procesar;
          }
          if (isset($this->var_mensaje)) 
          {
              $_SESSION['var_mensaje'] = $this->var_mensaje;
          }
          if (!isset($this->Igtech_AutorizacionInmediata) && isset($this->igtech_autorizacioninmediata)) 
          {
              $this->Igtech_AutorizacionInmediata = $this->igtech_autorizacioninmediata;
          }
          if (isset($this->Igtech_AutorizacionInmediata)) 
          {
              $_SESSION['Igtech_AutorizacionInmediata'] = $this->Igtech_AutorizacionInmediata;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_del_factura_compra_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_del_factura_compra_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_factura_compra_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_factura_compra_mob'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_factura_compra_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_factura_compra_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_del_factura_compra_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_factura_compra_mob']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_factura_compra";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_del_factura_compra_mob")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form = (isset($_SESSION['scriptcase']['str_button_all'])) ? $_SESSION['scriptcase']['str_button_all'] : "botones_debi";
      $_SESSION['scriptcase']['str_button_all'] = $this->Ini->Str_btn_form;
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $_SESSION['scriptcase']['css_form_help'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form.css";
      $_SESSION['scriptcase']['css_form_help_dir'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      $this->Db = $this->Ini->Db; 
      $this->nm_new_label['fc_tipo_comprobante'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['fc_proveedor'] = '' . $this->Ini->Nm_lang['lang_proveedor'] . '';
      $this->nm_new_label['fc_fecha'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['fc_serie'] = '' . $this->Ini->Nm_lang['lang_serie_sri'] . '';
      $this->nm_new_label['fc_secuencial'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['fc_autorizacion'] = '' . $this->Ini->Nm_lang['lang_autorizacion'] . '';
      $this->nm_new_label['fc_subtotal_iva'] = '' . $this->Ini->Nm_lang['lang_subtotal_iva'] . '';
      $this->nm_new_label['fc_subtotal_cero'] = '' . $this->Ini->Nm_lang['lang_subtotal_cero'] . '';
      $this->nm_new_label['fc_subtotal_no_objeto'] = '' . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . '';
      $this->nm_new_label['fc_subtotal_excento'] = '' . $this->Ini->Nm_lang['lang_subtotal_exento'] . '';
      $this->nm_new_label['fc_subtotal'] = '' . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . '';
      $this->nm_new_label['fc_valor_ice'] = '' . $this->Ini->Nm_lang['lang_ice'] . '';
      $this->nm_new_label['fc_valor_iva'] = '' . $this->Ini->Nm_lang['lang_iva'] . '';
      $this->nm_new_label['fc_valor_irbpnr'] = '' . $this->Ini->Nm_lang['lang_irbpnr'] . '';
      $this->nm_new_label['fc_total'] = '' . $this->Ini->Nm_lang['lang_total_pagar'] . '';
      $this->nm_new_label['fc_comentario'] = '' . $this->Ini->Nm_lang['lang_comentario'] . '';
      $this->nm_new_label['fc_aplica_ret'] = '' . $this->Ini->Nm_lang['lang_aplica_retencion'] . '';
      $this->nm_new_label['liq_libretin'] = '' . $this->Ini->Nm_lang['lang_serie_sri'] . '';
      $this->nm_new_label['fc_total_descuento'] = '' . $this->Ini->Nm_lang['lang_descuento'] . '';
      $this->nm_new_label['fc_propina'] = '' . $this->Ini->Nm_lang['lang_propina'] . '';
      $this->nm_new_label['fc_aplica_propina'] = '' . $this->Ini->Nm_lang['lang_dar_propina'] . '';
      $this->nm_new_label['fc_sustento_gasto'] = '' . $this->Ini->Nm_lang['lang_sustento_tributario'] . '';
      $this->nm_new_label['fc_email_proveedor'] = '' . $this->Ini->Nm_lang['lang_email'] . '';
      $this->nm_new_label['fc_nombre_proveedor'] = '' . $this->Ini->Nm_lang['lang_nombre'] . '';
      $this->nm_new_label['ambiente'] = '' . $this->Ini->Nm_lang['lang_tipo_ambiente'] . '';
      $this->nm_new_label['liq_tipo_libretin'] = '' . $this->Ini->Nm_lang['lang_tipo_libretin'] . '';
      $this->nm_new_label['fc_ruc_proveedor'] = '' . $this->Ini->Nm_lang['lang_ruc'] . '';
      $this->nm_new_label['liq_secuencial'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['fc_direccion_proveedor'] = '' . $this->Ini->Nm_lang['lang_direccion'] . '';

      $this->Ini->str_google_fonts = isset($str_google_fonts)?$str_google_fonts:'';
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = !isset($str_ajax_bg)         || "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = !isset($str_ajax_border_c)   || "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = !isset($str_ajax_border_s)   || "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = !isset($str_ajax_border_w)   || "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = !isset($str_block_exp)       || "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = !isset($str_block_col)       || "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = !isset($str_msg_ico_title)   || "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = !isset($str_msg_ico_body)    || "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = !isset($str_err_ico_title)   || "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = !isset($str_err_ico_body)    || "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = !isset($str_cal_ico_back)    || "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = !isset($str_cal_ico_for)     || "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = !isset($str_cal_ico_close)   || "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = !isset($str_tab_space)       || "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = !isset($str_bubble_tail)     || "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = !isset($str_label_sort_pos)  || "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = !isset($str_label_sort)      || "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = !isset($str_label_sort_asc)  || "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = !isset($str_label_sort_desc) || "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok       = !isset($str_img_status_ok)  || "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err      = !isset($str_img_status_err) || "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status          = "scFormInputError";
      $this->Ini->Css_status_pwd_box  = "scFormInputErrorPwdBox";
      $this->Ini->Css_status_pwd_text = "scFormInputErrorPwdText";
      $this->Ini->Error_icon_span      = !isset($str_error_icon_span)  || "" == trim($str_error_icon_span)  ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = !isset($img_qs_search)        || "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = !isset($img_qs_clean)         || "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = !isset($str_qs_image_padding) || "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);
      $this->Ini->form_table_width     = isset($str_form_table_width) && '' != trim($str_form_table_width) ? $str_form_table_width : '';

        $this->classes_100perc_fields['table'] = '';
        $this->classes_100perc_fields['input'] = '';
        $this->classes_100perc_fields['span_input'] = '';
        $this->classes_100perc_fields['span_select'] = '';
        $this->classes_100perc_fields['style_category'] = '';
        $this->classes_100perc_fields['keep_field_size'] = true;
        if ($this->use_100perc_fields) {
            $this->classes_100perc_fields['table'] = ' sc-ui-100perc-table';
            $this->classes_100perc_fields['input'] = ' sc-ui-100perc-input';
            $this->classes_100perc_fields['span_input'] = ' sc-ui-100perc-span-input';
            $this->classes_100perc_fields['span_select'] = ' sc-ui-100perc-span-select';
            $this->classes_100perc_fields['style_category'] = ' style="width: 100%"';
            $this->classes_100perc_fields['keep_field_size'] = false;
        }


      $this->arr_buttons['retencion']['hint']             = "";
      $this->arr_buttons['retencion']['type']             = "button";
      $this->arr_buttons['retencion']['value']            = "" . $this->Ini->Nm_lang['lang_retencion'] . "";
      $this->arr_buttons['retencion']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['retencion']['display_position'] = "text_right";
      $this->arr_buttons['retencion']['style']            = "ok";
      $this->arr_buttons['retencion']['image']            = "";
      $this->arr_buttons['retencion']['has_fa']            = "true";
      $this->arr_buttons['retencion']['fontawesomeicon']            = "far fa-eye";

      $this->arr_buttons['enviar']['hint']             = "";
      $this->arr_buttons['enviar']['type']             = "button";
      $this->arr_buttons['enviar']['value']            = "" . $this->Ini->Nm_lang['lang_autorizar'] . "";
      $this->arr_buttons['enviar']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['enviar']['display_position'] = "text_right";
      $this->arr_buttons['enviar']['style']            = "default";
      $this->arr_buttons['enviar']['image']            = "";
      $this->arr_buttons['enviar']['has_fa']            = "true";
      $this->arr_buttons['enviar']['fontawesomeicon']            = "fas fa-share-square";

      $this->arr_buttons['nuevo']['hint']             = "";
      $this->arr_buttons['nuevo']['type']             = "button";
      $this->arr_buttons['nuevo']['value']            = "" . $this->Ini->Nm_lang['lang_nueva_factura'] . "";
      $this->arr_buttons['nuevo']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['nuevo']['display_position'] = "text_right";
      $this->arr_buttons['nuevo']['style']            = "default";
      $this->arr_buttons['nuevo']['image']            = "";
      $this->arr_buttons['nuevo']['has_fa']            = "true";
      $this->arr_buttons['nuevo']['fontawesomeicon']            = "fas fa-plus";

      $this->arr_buttons['ride']['hint']             = "";
      $this->arr_buttons['ride']['type']             = "button";
      $this->arr_buttons['ride']['value']            = "" . $this->Ini->Nm_lang['lang_ride'] . "";
      $this->arr_buttons['ride']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['ride']['display_position'] = "text_right";
      $this->arr_buttons['ride']['style']            = "default";
      $this->arr_buttons['ride']['image']            = "";
      $this->arr_buttons['ride']['has_fa']            = "true";
      $this->arr_buttons['ride']['fontawesomeicon']            = "fas fa-print";

      $this->arr_buttons['anular']['hint']             = "";
      $this->arr_buttons['anular']['type']             = "button";
      $this->arr_buttons['anular']['value']            = "" . $this->Ini->Nm_lang['lang_anular'] . "";
      $this->arr_buttons['anular']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['anular']['display_position'] = "text_right";
      $this->arr_buttons['anular']['style']            = "danger";
      $this->arr_buttons['anular']['image']            = "";
      $this->arr_buttons['anular']['has_fa']            = "true";
      $this->arr_buttons['anular']['fontawesomeicon']            = "fas fa-minus-circle";


      $_SESSION['scriptcase']['error_icon']['form_del_factura_compra_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_del_factura_compra_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "off";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      $this->nmgp_botoes['retencion'] = "on";
      $this->nmgp_botoes['enviar'] = "on";
      $this->nmgp_botoes['Nuevo'] = "on";
      $this->nmgp_botoes['ride'] = "on";
      $this->nmgp_botoes['Anular'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_orig'] = " where (fc_id=" . $_SESSION['var_id_factura'] . ")";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_pesq'] = " where (fc_id=" . $_SESSION['var_id_factura'] . ")";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_factura_compra_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_factura_compra_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_factura_compra_mob'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
              $this->nmgp_botoes['reload']     = $tmpDashboardButtons['form_reload']    ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_form'];
          if (!isset($this->fc_id)){$this->fc_id = $this->nmgp_dados_form['fc_id'];} 
          if (!isset($this->fc_empresa)){$this->fc_empresa = $this->nmgp_dados_form['fc_empresa'];} 
          if (!isset($this->fc_desde)){$this->fc_desde = $this->nmgp_dados_form['fc_desde'];} 
          if (!isset($this->fc_hasta)){$this->fc_hasta = $this->nmgp_dados_form['fc_hasta'];} 
          if (!isset($this->fc_fecha_caducidad)){$this->fc_fecha_caducidad = $this->nmgp_dados_form['fc_fecha_caducidad'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_subtotal_iva'] != "null"){$this->fc_subtotal_iva = $this->nmgp_dados_form['fc_subtotal_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_subtotal_cero'] != "null"){$this->fc_subtotal_cero = $this->nmgp_dados_form['fc_subtotal_cero'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_subtotal_no_objeto'] != "null"){$this->fc_subtotal_no_objeto = $this->nmgp_dados_form['fc_subtotal_no_objeto'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_subtotal_excento'] != "null"){$this->fc_subtotal_excento = $this->nmgp_dados_form['fc_subtotal_excento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_subtotal'] != "null"){$this->fc_subtotal = $this->nmgp_dados_form['fc_subtotal'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_valor_ice'] != "null"){$this->fc_valor_ice = $this->nmgp_dados_form['fc_valor_ice'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_valor_iva'] != "null"){$this->fc_valor_iva = $this->nmgp_dados_form['fc_valor_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_valor_irbpnr'] != "null"){$this->fc_valor_irbpnr = $this->nmgp_dados_form['fc_valor_irbpnr'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_total'] != "null"){$this->fc_total = $this->nmgp_dados_form['fc_total'];} 
          if (!isset($this->fc_usuario)){$this->fc_usuario = $this->nmgp_dados_form['fc_usuario'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_total_descuento'] != "null"){$this->fc_total_descuento = $this->nmgp_dados_form['fc_total_descuento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_propina'] != "null"){$this->fc_propina = $this->nmgp_dados_form['fc_propina'];} 
          if (!isset($this->fc_retencion)){$this->fc_retencion = $this->nmgp_dados_form['fc_retencion'];} 
          if (!isset($this->fc_correo_enviado)){$this->fc_correo_enviado = $this->nmgp_dados_form['fc_correo_enviado'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_email_proveedor'] != "null"){$this->fc_email_proveedor = $this->nmgp_dados_form['fc_email_proveedor'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_nombre_proveedor'] != "null"){$this->fc_nombre_proveedor = $this->nmgp_dados_form['fc_nombre_proveedor'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['ambiente'] != "null"){$this->ambiente = $this->nmgp_dados_form['ambiente'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['liq_tipo_libretin'] != "null"){$this->liq_tipo_libretin = $this->nmgp_dados_form['liq_tipo_libretin'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_ruc_proveedor'] != "null"){$this->fc_ruc_proveedor = $this->nmgp_dados_form['fc_ruc_proveedor'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['liq_secuencial'] != "null"){$this->liq_secuencial = $this->nmgp_dados_form['liq_secuencial'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fc_direccion_proveedor'] != "null"){$this->fc_direccion_proveedor = $this->nmgp_dados_form['fc_direccion_proveedor'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_del_factura_compra_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_del_factura_compra/igtech.PocesarDocumentosElectronicos.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'igtech.PocesarDocumentosElectronicos.php');
      }
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_del_factura_compra/form_del_factura_compra_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_del_factura_compra_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_del_factura_compra_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_del_factura_compra_mob_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_del_factura_compra/form_del_factura_compra_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_del_factura_compra_mob_erro.class.php"); 
      }
      $this->Erro      = new form_del_factura_compra_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opcao']))
         { 
             if ($this->fc_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_del_factura_compra_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['retencion'] = "off";
          $this->nmgp_botoes['enviar'] = "off";
          $this->nmgp_botoes['Nuevo'] = "off";
          $this->nmgp_botoes['ride'] = "off";
          $this->nmgp_botoes['Anular'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['retencion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['botoes']['retencion'];
          $this->nmgp_botoes['enviar'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['botoes']['enviar'];
          $this->nmgp_botoes['Nuevo'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['botoes']['Nuevo'];
          $this->nmgp_botoes['ride'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['botoes']['ride'];
          $this->nmgp_botoes['Anular'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['botoes']['Anular'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      if ($this->nmgp_opcao == "excluir")
      {
          $GLOBALS['script_case_init'] = $this->Ini->sc_page;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['reg_start'] = "";
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['total']);
          $detailAppName = 'form_del_detalle_factura_compra_mob';
          $detailAppObject = "form_del_detalle_factura_compra_mob";
          $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          if (!@is_dir($detailAppFolder)) {
              $detailAppName = substr($detailAppName, 0, -4);
              $detailAppObject = substr($detailAppObject, 0, -4);
              $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          }
          $detailAppObject .= '_apl';
          require_once($detailAppFolder . "/index.php");
          require_once($detailAppFolder . "/{$detailAppName}_apl.php");
          $this->form_del_detalle_factura_compra_mob = new $detailAppObject;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['reg_start'] = "";
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['total']);
          $detailAppName = 'form_del_forma_pago_factura_compra_mob';
          $detailAppObject = "form_del_forma_pago_factura_compra_mob";
          $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          if (!@is_dir($detailAppFolder)) {
              $detailAppName = substr($detailAppName, 0, -4);
              $detailAppObject = substr($detailAppObject, 0, -4);
              $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          }
          $detailAppObject .= '_apl';
          require_once($detailAppFolder . "/index.php");
          require_once($detailAppFolder . "/{$detailAppName}_apl.php");
          $this->form_del_forma_pago_factura_compra_mob = new $detailAppObject;
      }
      $this->NM_case_insensitive = true;
      $this->sc_evento = $this->nmgp_opcao;
            if ('ajax_check_file' == $this->nmgp_opcao ){
                 ob_start(); 
                 include_once("../_lib/lib/php/nm_api.php"); 
            switch( $_POST['rsargs'] ){
               default:
                   echo 0;exit;
               break;
               }

            $out1_img_cache = $_SESSION['scriptcase']['form_del_factura_compra_mob']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_del_factura_compra_mob']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$orig_img);
            echo $orig_img . '_@@NM@@_';            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            $sc_obj_img = new nm_trata_img($_SERVER['DOCUMENT_ROOT'].$out1_img_cache, true);

            if(!empty($img_width) && !empty($img_height)){
                $sc_obj_img->setWidth($img_width);
                $sc_obj_img->setHeight($img_height);
            }
                $sc_obj_img->setManterAspecto(true);
            $sc_obj_img->createImg($_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            echo $out1_img_cache;
               exit;
            }
      if (isset($this->fc_tipo_comprobante)) { $this->nm_limpa_alfa($this->fc_tipo_comprobante); }
      if (isset($this->fc_proveedor)) { $this->nm_limpa_alfa($this->fc_proveedor); }
      if (isset($this->fc_serie)) { $this->nm_limpa_alfa($this->fc_serie); }
      if (isset($this->fc_secuencial)) { $this->nm_limpa_alfa($this->fc_secuencial); }
      if (isset($this->fc_autorizacion)) { $this->nm_limpa_alfa($this->fc_autorizacion); }
      if (isset($this->fc_subtotal_iva)) { $this->nm_limpa_alfa($this->fc_subtotal_iva); }
      if (isset($this->fc_subtotal_cero)) { $this->nm_limpa_alfa($this->fc_subtotal_cero); }
      if (isset($this->fc_subtotal_no_objeto)) { $this->nm_limpa_alfa($this->fc_subtotal_no_objeto); }
      if (isset($this->fc_subtotal_excento)) { $this->nm_limpa_alfa($this->fc_subtotal_excento); }
      if (isset($this->fc_subtotal)) { $this->nm_limpa_alfa($this->fc_subtotal); }
      if (isset($this->fc_valor_ice)) { $this->nm_limpa_alfa($this->fc_valor_ice); }
      if (isset($this->fc_valor_iva)) { $this->nm_limpa_alfa($this->fc_valor_iva); }
      if (isset($this->fc_valor_irbpnr)) { $this->nm_limpa_alfa($this->fc_valor_irbpnr); }
      if (isset($this->fc_total)) { $this->nm_limpa_alfa($this->fc_total); }
      if (isset($this->fc_comentario)) { $this->nm_limpa_alfa($this->fc_comentario); }
      if (isset($this->fc_aplica_ret)) { $this->nm_limpa_alfa($this->fc_aplica_ret); }
      if (isset($this->fc_estado)) { $this->nm_limpa_alfa($this->fc_estado); }
      if (isset($this->liq_libretin)) { $this->nm_limpa_alfa($this->liq_libretin); }
      if (isset($this->liq_estado_sri)) { $this->nm_limpa_alfa($this->liq_estado_sri); }
      if (isset($this->liq_error_sri)) { $this->nm_limpa_alfa($this->liq_error_sri); }
      if (isset($this->liq_fecha_autorizacion)) { $this->nm_limpa_alfa($this->liq_fecha_autorizacion); }
      if (isset($this->liq_clave)) { $this->nm_limpa_alfa($this->liq_clave); }
      if (isset($this->fc_total_descuento)) { $this->nm_limpa_alfa($this->fc_total_descuento); }
      if (isset($this->fc_propina)) { $this->nm_limpa_alfa($this->fc_propina); }
      if (isset($this->liq_establecimiento)) { $this->nm_limpa_alfa($this->liq_establecimiento); }
      if (isset($this->liq_punto_emision)) { $this->nm_limpa_alfa($this->liq_punto_emision); }
      if (isset($this->liq_ambiente)) { $this->nm_limpa_alfa($this->liq_ambiente); }
      if (isset($this->fc_aplica_propina)) { $this->nm_limpa_alfa($this->fc_aplica_propina); }
      if (isset($this->fc_sustento_gasto)) { $this->nm_limpa_alfa($this->fc_sustento_gasto); }
      if (isset($this->forma_pago)) { $this->nm_limpa_alfa($this->forma_pago); }
      if (isset($this->detalles)) { $this->nm_limpa_alfa($this->detalles); }
      if ($nm_opc_form_php == "formphp")
      { 
          if ($nm_call_php == "enviar")
          { 
              $this->sc_btn_enviar();
          } 
          if ($nm_call_php == "Anular")
          { 
              $this->sc_btn_Anular();
          } 
          $this->NM_close_db(); 
          exit;
      } 
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fc_fecha
      $this->field_config['fc_fecha']                 = array();
      $this->field_config['fc_fecha']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fc_fecha']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fc_fecha']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fc_fecha');
      //-- liq_establecimiento
      $this->field_config['liq_establecimiento']               = array();
      $this->field_config['liq_establecimiento']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['liq_establecimiento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['liq_establecimiento']['symbol_dec'] = '';
      $this->field_config['liq_establecimiento']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['liq_establecimiento']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- liq_punto_emision
      $this->field_config['liq_punto_emision']               = array();
      $this->field_config['liq_punto_emision']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['liq_punto_emision']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['liq_punto_emision']['symbol_dec'] = '';
      $this->field_config['liq_punto_emision']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['liq_punto_emision']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- liq_ambiente
      $this->field_config['liq_ambiente']               = array();
      $this->field_config['liq_ambiente']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['liq_ambiente']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['liq_ambiente']['symbol_dec'] = '';
      $this->field_config['liq_ambiente']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['liq_ambiente']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- liq_fecha_autorizacion
      $this->field_config['liq_fecha_autorizacion']                 = array();
      $this->field_config['liq_fecha_autorizacion']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['liq_fecha_autorizacion']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['liq_fecha_autorizacion']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'liq_fecha_autorizacion');
      //-- fc_secuencial
      $this->field_config['fc_secuencial']               = array();
      $this->field_config['fc_secuencial']['symbol_grp'] = '';
      $this->field_config['fc_secuencial']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_secuencial']['symbol_dec'] = '';
      $this->field_config['fc_secuencial']['symbol_neg'] = '-';
      $this->field_config['fc_secuencial']['format_neg'] = '2';
      //-- fc_proveedor
      $this->field_config['fc_proveedor']               = array();
      $this->field_config['fc_proveedor']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['fc_proveedor']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_proveedor']['symbol_dec'] = '';
      $this->field_config['fc_proveedor']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['fc_proveedor']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fc_subtotal
      $this->field_config['fc_subtotal']               = array();
      $this->field_config['fc_subtotal']['symbol_grp'] = '';
      $this->field_config['fc_subtotal']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_subtotal']['symbol_dec'] = '.';
      $this->field_config['fc_subtotal']['symbol_neg'] = '-';
      $this->field_config['fc_subtotal']['format_neg'] = '2';
      //-- fc_subtotal_iva
      $this->field_config['fc_subtotal_iva']               = array();
      $this->field_config['fc_subtotal_iva']['symbol_grp'] = '';
      $this->field_config['fc_subtotal_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_subtotal_iva']['symbol_dec'] = '.';
      $this->field_config['fc_subtotal_iva']['symbol_neg'] = '-';
      $this->field_config['fc_subtotal_iva']['format_neg'] = '2';
      //-- fc_subtotal_cero
      $this->field_config['fc_subtotal_cero']               = array();
      $this->field_config['fc_subtotal_cero']['symbol_grp'] = '';
      $this->field_config['fc_subtotal_cero']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_subtotal_cero']['symbol_dec'] = '.';
      $this->field_config['fc_subtotal_cero']['symbol_neg'] = '-';
      $this->field_config['fc_subtotal_cero']['format_neg'] = '2';
      //-- fc_subtotal_no_objeto
      $this->field_config['fc_subtotal_no_objeto']               = array();
      $this->field_config['fc_subtotal_no_objeto']['symbol_grp'] = '';
      $this->field_config['fc_subtotal_no_objeto']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_subtotal_no_objeto']['symbol_dec'] = '.';
      $this->field_config['fc_subtotal_no_objeto']['symbol_neg'] = '-';
      $this->field_config['fc_subtotal_no_objeto']['format_neg'] = '2';
      //-- fc_subtotal_excento
      $this->field_config['fc_subtotal_excento']               = array();
      $this->field_config['fc_subtotal_excento']['symbol_grp'] = '';
      $this->field_config['fc_subtotal_excento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_subtotal_excento']['symbol_dec'] = '.';
      $this->field_config['fc_subtotal_excento']['symbol_neg'] = '-';
      $this->field_config['fc_subtotal_excento']['format_neg'] = '2';
      //-- fc_total_descuento
      $this->field_config['fc_total_descuento']               = array();
      $this->field_config['fc_total_descuento']['symbol_grp'] = '';
      $this->field_config['fc_total_descuento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_total_descuento']['symbol_dec'] = '.';
      $this->field_config['fc_total_descuento']['symbol_neg'] = '-';
      $this->field_config['fc_total_descuento']['format_neg'] = '2';
      //-- fc_valor_ice
      $this->field_config['fc_valor_ice']               = array();
      $this->field_config['fc_valor_ice']['symbol_grp'] = '';
      $this->field_config['fc_valor_ice']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_valor_ice']['symbol_dec'] = '.';
      $this->field_config['fc_valor_ice']['symbol_neg'] = '-';
      $this->field_config['fc_valor_ice']['format_neg'] = '2';
      //-- fc_valor_iva
      $this->field_config['fc_valor_iva']               = array();
      $this->field_config['fc_valor_iva']['symbol_grp'] = '';
      $this->field_config['fc_valor_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_valor_iva']['symbol_dec'] = '.';
      $this->field_config['fc_valor_iva']['symbol_neg'] = '-';
      $this->field_config['fc_valor_iva']['format_neg'] = '2';
      //-- fc_valor_irbpnr
      $this->field_config['fc_valor_irbpnr']               = array();
      $this->field_config['fc_valor_irbpnr']['symbol_grp'] = '';
      $this->field_config['fc_valor_irbpnr']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_valor_irbpnr']['symbol_dec'] = '.';
      $this->field_config['fc_valor_irbpnr']['symbol_neg'] = '-';
      $this->field_config['fc_valor_irbpnr']['format_neg'] = '2';
      //-- fc_propina
      $this->field_config['fc_propina']               = array();
      $this->field_config['fc_propina']['symbol_grp'] = '';
      $this->field_config['fc_propina']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_propina']['symbol_dec'] = '.';
      $this->field_config['fc_propina']['symbol_neg'] = '-';
      $this->field_config['fc_propina']['format_neg'] = '2';
      //-- fc_total
      $this->field_config['fc_total']               = array();
      $this->field_config['fc_total']['symbol_grp'] = '';
      $this->field_config['fc_total']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_total']['symbol_dec'] = '.';
      $this->field_config['fc_total']['symbol_neg'] = '-';
      $this->field_config['fc_total']['format_neg'] = '2';
      //-- fc_id
      $this->field_config['fc_id']               = array();
      $this->field_config['fc_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['fc_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_id']['symbol_dec'] = '';
      $this->field_config['fc_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['fc_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fc_desde
      $this->field_config['fc_desde']               = array();
      $this->field_config['fc_desde']['symbol_grp'] = '';
      $this->field_config['fc_desde']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_desde']['symbol_dec'] = '';
      $this->field_config['fc_desde']['symbol_neg'] = '-';
      $this->field_config['fc_desde']['format_neg'] = '2';
      //-- fc_hasta
      $this->field_config['fc_hasta']               = array();
      $this->field_config['fc_hasta']['symbol_grp'] = '';
      $this->field_config['fc_hasta']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_hasta']['symbol_dec'] = '';
      $this->field_config['fc_hasta']['symbol_neg'] = '-';
      $this->field_config['fc_hasta']['format_neg'] = '2';
      //-- fc_fecha_caducidad
      $this->field_config['fc_fecha_caducidad']                 = array();
      $this->field_config['fc_fecha_caducidad']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fc_fecha_caducidad']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fc_fecha_caducidad']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fc_fecha_caducidad');
      //-- fc_retencion
      $this->field_config['fc_retencion']               = array();
      $this->field_config['fc_retencion']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['fc_retencion']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fc_retencion']['symbol_dec'] = '';
      $this->field_config['fc_retencion']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['fc_retencion']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Gera_log_access'] = false;
      }

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_titulo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'titulo');
          }
          if ('validate_fc_sustento_gasto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_sustento_gasto');
          }
          if ('validate_vacio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'vacio');
          }
          if ('validate_fc_tipo_comprobante' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_tipo_comprobante');
          }
          if ('validate_fc_fecha' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_fecha');
          }
          if ('validate_liq_libretin' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_libretin');
          }
          if ('validate_liq_secuencial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_secuencial');
          }
          if ('validate_liq_tipo_libretin' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_tipo_libretin');
          }
          if ('validate_ambiente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ambiente');
          }
          if ('validate_liq_establecimiento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_establecimiento');
          }
          if ('validate_liq_punto_emision' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_punto_emision');
          }
          if ('validate_liq_ambiente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_ambiente');
          }
          if ('validate_liq_estado_sri' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_estado_sri');
          }
          if ('validate_liq_error_sri' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_error_sri');
          }
          if ('validate_liq_fecha_autorizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_fecha_autorizacion');
          }
          if ('validate_liq_clave' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'liq_clave');
          }
          if ('validate_fc_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_estado');
          }
          if ('validate_fc_serie' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_serie');
          }
          if ('validate_fc_secuencial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_secuencial');
          }
          if ('validate_fc_autorizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_autorizacion');
          }
          if ('validate_fc_proveedor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_proveedor');
          }
          if ('validate_fc_ruc_proveedor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_ruc_proveedor');
          }
          if ('validate_fc_nombre_proveedor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_nombre_proveedor');
          }
          if ('validate_fc_direccion_proveedor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_direccion_proveedor');
          }
          if ('validate_fc_email_proveedor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_email_proveedor');
          }
          if ('validate_fc_aplica_ret' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_aplica_ret');
          }
          if ('validate_fc_comentario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_comentario');
          }
          if ('validate_fc_aplica_propina' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_aplica_propina');
          }
          if ('validate_detalles' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'detalles');
          }
          if ('validate_fc_subtotal' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_subtotal');
          }
          if ('validate_fc_subtotal_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_subtotal_iva');
          }
          if ('validate_fc_subtotal_cero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_subtotal_cero');
          }
          if ('validate_fc_subtotal_no_objeto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_subtotal_no_objeto');
          }
          if ('validate_fc_subtotal_excento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_subtotal_excento');
          }
          if ('validate_fc_total_descuento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_total_descuento');
          }
          if ('validate_fc_valor_ice' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_valor_ice');
          }
          if ('validate_fc_valor_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_valor_iva');
          }
          if ('validate_fc_valor_irbpnr' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_valor_irbpnr');
          }
          if ('validate_fc_propina' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_propina');
          }
          if ('validate_fc_total' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fc_total');
          }
          if ('validate_forma_pago' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'forma_pago');
          }
          form_del_factura_compra_mob_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_fc_proveedor_onchange' == $this->NM_ajax_opcao)
          {
              $this->fc_proveedor_onChange();
          }
          if ('event_fc_aplica_propina_onchange' == $this->NM_ajax_opcao)
          {
              $this->fc_aplica_propina_onChange();
          }
          if ('event_fc_autorizacion_onblur' == $this->NM_ajax_opcao)
          {
              $this->fc_autorizacion_onBlur();
          }
          if ('event_fc_tipo_comprobante_onchange' == $this->NM_ajax_opcao)
          {
              $this->fc_tipo_comprobante_onChange();
          }
          if ('event_liq_libretin_onchange' == $this->NM_ajax_opcao)
          {
              $this->liq_libretin_onChange();
          }
          if ('event_scajaxbutton_enviar_onclick' == $this->NM_ajax_opcao)
          {
              $this->scajaxbutton_enviar_onClick();
          }
          if ('event_scajaxbutton_anular_onclick' == $this->NM_ajax_opcao)
          {
              $this->scajaxbutton_Anular_onClick();
          }
          form_del_factura_compra_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['liq_secuencial']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->liq_secuencial = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['liq_secuencial'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['liq_tipo_libretin']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->liq_tipo_libretin = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['liq_tipo_libretin'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['ambiente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->ambiente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['ambiente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_ruc_proveedor']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_ruc_proveedor = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_ruc_proveedor'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_nombre_proveedor']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_nombre_proveedor = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_nombre_proveedor'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_direccion_proveedor']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_direccion_proveedor = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_direccion_proveedor'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_email_proveedor']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_email_proveedor = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_email_proveedor'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_subtotal = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_subtotal_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal_cero']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_subtotal_cero = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal_cero'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal_no_objeto']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_subtotal_no_objeto = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal_no_objeto'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal_excento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_subtotal_excento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_subtotal_excento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_total_descuento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_total_descuento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_total_descuento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_valor_ice']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_valor_ice = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_valor_ice'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_valor_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_valor_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_valor_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_valor_irbpnr']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_valor_irbpnr = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_valor_irbpnr'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_propina']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_propina = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_propina'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_total']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fc_total = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']['fc_total'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_del_factura_compra_mob_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_del_factura_compra_mob_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, 4);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro, '', true, true); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_del_factura_compra_mob_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_del_factura_compra_mob_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_del_factura_compra_mob.zip";
          $Arq_htm = $this->Ini->path_imag_temp . "/" . $Zip_name;
          $Arq_zip = $this->Ini->root . $Arq_htm;
          $Zip_f     = (FALSE !== strpos($Arq_zip, ' ')) ? " \"" . $Arq_zip . "\"" :  $Arq_zip;
          $Arq_input = (FALSE !== strpos($Arq_base, ' ')) ? " \"" . $Arq_base . "\"" :  $Arq_base;
           if (is_file($Arq_zip)) {
               unlink($Arq_zip);
           }
           $str_zip = "";
           if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
           {
               chdir($this->Ini->path_third . "/zip/windows");
               $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $Html_password . " " . $Zip_f . " " . $Arq_input;
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
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
           {
               chdir($this->Ini->path_third . "/zip/mac/bin");
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
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
           foreach ($this->Ini->Img_export_zip as $cada_img_zip)
           {
               $str_zip      = "";
              $cada_img_zip = '"' . $cada_img_zip . '"';
               if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
               {
                   $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $Html_password . " " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
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
           }
           if (is_file($Arq_zip)) {
               unlink($Arq_base);
           } 
          $path_doc_md5 = md5($Arq_htm);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_factura_compra") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
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
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" /> 
  <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
</HEAD>
<BODY class="scExportPage">
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: top">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PRINT</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
   <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  $this->form_encode_input($Arq_htm) ?>" target="_self" style="display: none"> 
</form>
<form name="Fdown" method="get" action="form_del_factura_compra_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_del_factura_compra_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_del_factura_compra_mob.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nmgp_opcao" value="<?php echo $this->nmgp_opcao ?>"> 
</form> 
         </BODY>
         </HTML>
<?php
          exit;
  }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
       if ($this->SC_log_atv)
       {
           $this->NM_gera_log_output();
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_gera_log_insert($orig="Scriptcase", $evento="", $texto="")
   {
       $delim  = "'";
       $delim1 = "'";
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_access))
       { 
           $delim  = "#";
           $delim1 = "#";
       } 
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['SC_sep_date1'];
       }
       $dt  = $delim . date('Y-m-d H:i:s') . $delim1;
       $usr = isset($_SESSION['Igtech_SesionLogin']) ? $_SESSION['Igtech_SesionLogin'] : "";
       if (strtolower($_SESSION['scriptcase']['glo_tpbanco']) == 'pdo_sqlsrv' || strtolower($_SESSION['scriptcase']['glo_tpbanco']) == 'pdo_dblib')
       { 
           $dt  = $delim . date('Ymd H:i:s') . $delim1;
       } 
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_access))
       { 
           $dt  = $delim . date('Y-m-d H:i:s') . $delim1;
       } 
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_informix))
       { 
           $dt  = "EXTEND(" . $dt . ", YEAR TO FRACTION)";
       } 
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_access))
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_factura_compra_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_del_factura_compra_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_factura_compra_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_del_factura_compra_mob_pack_ajax_response();
               exit; 
           }
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;

           case 4:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros_SweetAlert($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros_SweetAlert($Campos_Erros) 
   {
       $sError  = '';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= $this->Recupera_Nome_Campo($campo) . ': ' . implode('<br />', array_unique($erros)) . '<br />';
       }

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'titulo':
               return "";
               break;
           case 'fc_sustento_gasto':
               return "" . $this->Ini->Nm_lang['lang_sustento_tributario'] . "";
               break;
           case 'vacio':
               return "";
               break;
           case 'fc_tipo_comprobante':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
               break;
           case 'fc_fecha':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'liq_libretin':
               return "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
               break;
           case 'liq_secuencial':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'liq_tipo_libretin':
               return "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
               break;
           case 'ambiente':
               return "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
               break;
           case 'liq_establecimiento':
               return "Liq Establecimiento";
               break;
           case 'liq_punto_emision':
               return "Liq Punto Emision";
               break;
           case 'liq_ambiente':
               return "Liq Ambiente";
               break;
           case 'liq_estado_sri':
               return "Liq Estado Sri";
               break;
           case 'liq_error_sri':
               return "Liq Error Sri";
               break;
           case 'liq_fecha_autorizacion':
               return "Liq Fecha Autorizacion";
               break;
           case 'liq_clave':
               return "Liq Clave";
               break;
           case 'fc_estado':
               return "Fc Estado";
               break;
           case 'fc_serie':
               return "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
               break;
           case 'fc_secuencial':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'fc_autorizacion':
               return "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
               break;
           case 'fc_proveedor':
               return "" . $this->Ini->Nm_lang['lang_proveedor'] . "";
               break;
           case 'fc_ruc_proveedor':
               return "" . $this->Ini->Nm_lang['lang_ruc'] . "";
               break;
           case 'fc_nombre_proveedor':
               return "" . $this->Ini->Nm_lang['lang_nombre'] . "";
               break;
           case 'fc_direccion_proveedor':
               return "" . $this->Ini->Nm_lang['lang_direccion'] . "";
               break;
           case 'fc_email_proveedor':
               return "" . $this->Ini->Nm_lang['lang_email'] . "";
               break;
           case 'fc_aplica_ret':
               return "" . $this->Ini->Nm_lang['lang_aplica_retencion'] . "";
               break;
           case 'fc_comentario':
               return "" . $this->Ini->Nm_lang['lang_comentario'] . "";
               break;
           case 'fc_aplica_propina':
               return "" . $this->Ini->Nm_lang['lang_dar_propina'] . "";
               break;
           case 'detalles':
               return "detalles";
               break;
           case 'fc_subtotal':
               return "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . "";
               break;
           case 'fc_subtotal_iva':
               return "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "";
               break;
           case 'fc_subtotal_cero':
               return "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "";
               break;
           case 'fc_subtotal_no_objeto':
               return "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "";
               break;
           case 'fc_subtotal_excento':
               return "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "";
               break;
           case 'fc_total_descuento':
               return "" . $this->Ini->Nm_lang['lang_descuento'] . "";
               break;
           case 'fc_valor_ice':
               return "" . $this->Ini->Nm_lang['lang_ice'] . "";
               break;
           case 'fc_valor_iva':
               return "" . $this->Ini->Nm_lang['lang_iva'] . "";
               break;
           case 'fc_valor_irbpnr':
               return "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
               break;
           case 'fc_propina':
               return "" . $this->Ini->Nm_lang['lang_propina'] . "";
               break;
           case 'fc_total':
               return "" . $this->Ini->Nm_lang['lang_total_pagar'] . "";
               break;
           case 'forma_pago':
               return "forma_pago";
               break;
           case 'fc_id':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
               break;
           case 'fc_empresa':
               return "" . $this->Ini->Nm_lang['lang_empresa'] . "";
               break;
           case 'fc_desde':
               return "" . $this->Ini->Nm_lang['lang_desde'] . "";
               break;
           case 'fc_hasta':
               return "" . $this->Ini->Nm_lang['lang_hasta'] . "";
               break;
           case 'fc_fecha_caducidad':
               return "" . $this->Ini->Nm_lang['lang_fecha_caducidad'] . "";
               break;
           case 'fc_usuario':
               return "" . $this->Ini->Nm_lang['lang_usuario'] . "";
               break;
           case 'fc_retencion':
               return "Fc Retencion";
               break;
           case 'fc_correo_enviado':
               return "Fc Correo Enviado";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
     if (is_array($filtro) && empty($filtro)) {
         $filtro = '';
     }
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if (!is_array($filtro) && '' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_del_factura_compra_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_del_factura_compra_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_del_factura_compra_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_del_factura_compra_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'titulo' == $filtro)) || (is_array($filtro) && in_array('titulo', $filtro)))
        $this->ValidateField_titulo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_sustento_gasto' == $filtro)) || (is_array($filtro) && in_array('fc_sustento_gasto', $filtro)))
        $this->ValidateField_fc_sustento_gasto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'vacio' == $filtro)) || (is_array($filtro) && in_array('vacio', $filtro)))
        $this->ValidateField_vacio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_tipo_comprobante' == $filtro)) || (is_array($filtro) && in_array('fc_tipo_comprobante', $filtro)))
        $this->ValidateField_fc_tipo_comprobante($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_fecha' == $filtro)) || (is_array($filtro) && in_array('fc_fecha', $filtro)))
        $this->ValidateField_fc_fecha($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_libretin' == $filtro)) || (is_array($filtro) && in_array('liq_libretin', $filtro)))
        $this->ValidateField_liq_libretin($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_secuencial' == $filtro)) || (is_array($filtro) && in_array('liq_secuencial', $filtro)))
        $this->ValidateField_liq_secuencial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_tipo_libretin' == $filtro)) || (is_array($filtro) && in_array('liq_tipo_libretin', $filtro)))
        $this->ValidateField_liq_tipo_libretin($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'ambiente' == $filtro)) || (is_array($filtro) && in_array('ambiente', $filtro)))
        $this->ValidateField_ambiente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_establecimiento' == $filtro)) || (is_array($filtro) && in_array('liq_establecimiento', $filtro)))
        $this->ValidateField_liq_establecimiento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_punto_emision' == $filtro)) || (is_array($filtro) && in_array('liq_punto_emision', $filtro)))
        $this->ValidateField_liq_punto_emision($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_ambiente' == $filtro)) || (is_array($filtro) && in_array('liq_ambiente', $filtro)))
        $this->ValidateField_liq_ambiente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_estado_sri' == $filtro)) || (is_array($filtro) && in_array('liq_estado_sri', $filtro)))
        $this->ValidateField_liq_estado_sri($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_error_sri' == $filtro)) || (is_array($filtro) && in_array('liq_error_sri', $filtro)))
        $this->ValidateField_liq_error_sri($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_fecha_autorizacion' == $filtro)) || (is_array($filtro) && in_array('liq_fecha_autorizacion', $filtro)))
        $this->ValidateField_liq_fecha_autorizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'liq_clave' == $filtro)) || (is_array($filtro) && in_array('liq_clave', $filtro)))
        $this->ValidateField_liq_clave($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_estado' == $filtro)) || (is_array($filtro) && in_array('fc_estado', $filtro)))
        $this->ValidateField_fc_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_serie' == $filtro)) || (is_array($filtro) && in_array('fc_serie', $filtro)))
        $this->ValidateField_fc_serie($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_secuencial' == $filtro)) || (is_array($filtro) && in_array('fc_secuencial', $filtro)))
        $this->ValidateField_fc_secuencial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_autorizacion' == $filtro)) || (is_array($filtro) && in_array('fc_autorizacion', $filtro)))
        $this->ValidateField_fc_autorizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_proveedor' == $filtro)) || (is_array($filtro) && in_array('fc_proveedor', $filtro)))
        $this->ValidateField_fc_proveedor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_ruc_proveedor' == $filtro)) || (is_array($filtro) && in_array('fc_ruc_proveedor', $filtro)))
        $this->ValidateField_fc_ruc_proveedor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_nombre_proveedor' == $filtro)) || (is_array($filtro) && in_array('fc_nombre_proveedor', $filtro)))
        $this->ValidateField_fc_nombre_proveedor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_direccion_proveedor' == $filtro)) || (is_array($filtro) && in_array('fc_direccion_proveedor', $filtro)))
        $this->ValidateField_fc_direccion_proveedor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_email_proveedor' == $filtro)) || (is_array($filtro) && in_array('fc_email_proveedor', $filtro)))
        $this->ValidateField_fc_email_proveedor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_aplica_ret' == $filtro)) || (is_array($filtro) && in_array('fc_aplica_ret', $filtro)))
        $this->ValidateField_fc_aplica_ret($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_comentario' == $filtro)) || (is_array($filtro) && in_array('fc_comentario', $filtro)))
        $this->ValidateField_fc_comentario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_aplica_propina' == $filtro)) || (is_array($filtro) && in_array('fc_aplica_propina', $filtro)))
        $this->ValidateField_fc_aplica_propina($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'detalles' == $filtro)) || (is_array($filtro) && in_array('detalles', $filtro)))
        $this->ValidateField_detalles($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_subtotal' == $filtro)) || (is_array($filtro) && in_array('fc_subtotal', $filtro)))
        $this->ValidateField_fc_subtotal($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_subtotal_iva' == $filtro)) || (is_array($filtro) && in_array('fc_subtotal_iva', $filtro)))
        $this->ValidateField_fc_subtotal_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_subtotal_cero' == $filtro)) || (is_array($filtro) && in_array('fc_subtotal_cero', $filtro)))
        $this->ValidateField_fc_subtotal_cero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_subtotal_no_objeto' == $filtro)) || (is_array($filtro) && in_array('fc_subtotal_no_objeto', $filtro)))
        $this->ValidateField_fc_subtotal_no_objeto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_subtotal_excento' == $filtro)) || (is_array($filtro) && in_array('fc_subtotal_excento', $filtro)))
        $this->ValidateField_fc_subtotal_excento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_total_descuento' == $filtro)) || (is_array($filtro) && in_array('fc_total_descuento', $filtro)))
        $this->ValidateField_fc_total_descuento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_valor_ice' == $filtro)) || (is_array($filtro) && in_array('fc_valor_ice', $filtro)))
        $this->ValidateField_fc_valor_ice($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_valor_iva' == $filtro)) || (is_array($filtro) && in_array('fc_valor_iva', $filtro)))
        $this->ValidateField_fc_valor_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_valor_irbpnr' == $filtro)) || (is_array($filtro) && in_array('fc_valor_irbpnr', $filtro)))
        $this->ValidateField_fc_valor_irbpnr($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_propina' == $filtro)) || (is_array($filtro) && in_array('fc_propina', $filtro)))
        $this->ValidateField_fc_propina($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fc_total' == $filtro)) || (is_array($filtro) && in_array('fc_total', $filtro)))
        $this->ValidateField_fc_total($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'forma_pago' == $filtro)) || (is_array($filtro) && in_array('forma_pago', $filtro)))
        $this->ValidateField_forma_pago($Campos_Crit, $Campos_Falta, $Campos_Erros);
//-- converter datas   
          $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_titulo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['titulo'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->titulo) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'titulo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_titulo

    function ValidateField_fc_sustento_gasto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fc_sustento_gasto'])) {
       return;
   }
               if (!empty($this->fc_sustento_gasto) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']) && !in_array($this->fc_sustento_gasto, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fc_sustento_gasto']))
                   {
                       $Campos_Erros['fc_sustento_gasto'] = array();
                   }
                   $Campos_Erros['fc_sustento_gasto'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fc_sustento_gasto']) || !is_array($this->NM_ajax_info['errList']['fc_sustento_gasto']))
                   {
                       $this->NM_ajax_info['errList']['fc_sustento_gasto'] = array();
                   }
                   $this->NM_ajax_info['errList']['fc_sustento_gasto'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_sustento_gasto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_sustento_gasto

    function ValidateField_vacio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['vacio'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->vacio) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'vacio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_vacio

    function ValidateField_fc_tipo_comprobante(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fc_tipo_comprobante'])) {
       return;
   }
               if (!empty($this->fc_tipo_comprobante) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']) && !in_array($this->fc_tipo_comprobante, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fc_tipo_comprobante']))
                   {
                       $Campos_Erros['fc_tipo_comprobante'] = array();
                   }
                   $Campos_Erros['fc_tipo_comprobante'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fc_tipo_comprobante']) || !is_array($this->NM_ajax_info['errList']['fc_tipo_comprobante']))
                   {
                       $this->NM_ajax_info['errList']['fc_tipo_comprobante'] = array();
                   }
                   $this->NM_ajax_info['errList']['fc_tipo_comprobante'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_tipo_comprobante';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_tipo_comprobante

    function ValidateField_fc_fecha(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->fc_fecha, $this->field_config['fc_fecha']['date_sep']) ; 
      if (isset($this->Field_no_validate['fc_fecha'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fc_fecha']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fc_fecha']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fc_fecha']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fc_fecha']['date_sep']) ; 
          if (trim($this->fc_fecha) != "")  
          { 
              if ($teste_validade->Data($this->fc_fecha, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha'] . "; " ; 
                  if (!isset($Campos_Erros['fc_fecha']))
                  {
                      $Campos_Erros['fc_fecha'] = array();
                  }
                  $Campos_Erros['fc_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_fecha']) || !is_array($this->NM_ajax_info['errList']['fc_fecha']))
                  {
                      $this->NM_ajax_info['errList']['fc_fecha'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fc_fecha']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_fecha';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_fecha

    function ValidateField_liq_libretin(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['liq_libretin'])) {
       return;
   }
               if (!empty($this->liq_libretin) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin']) && !in_array($this->liq_libretin, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['liq_libretin']))
                   {
                       $Campos_Erros['liq_libretin'] = array();
                   }
                   $Campos_Erros['liq_libretin'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['liq_libretin']) || !is_array($this->NM_ajax_info['errList']['liq_libretin']))
                   {
                       $this->NM_ajax_info['errList']['liq_libretin'] = array();
                   }
                   $this->NM_ajax_info['errList']['liq_libretin'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_libretin';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_libretin

    function ValidateField_liq_secuencial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['liq_secuencial'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->liq_secuencial) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['liq_secuencial']))
              {
                  $Campos_Erros['liq_secuencial'] = array();
              }
              $Campos_Erros['liq_secuencial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['liq_secuencial']) || !is_array($this->NM_ajax_info['errList']['liq_secuencial']))
              {
                  $this->NM_ajax_info['errList']['liq_secuencial'] = array();
              }
              $this->NM_ajax_info['errList']['liq_secuencial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_secuencial';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_secuencial

    function ValidateField_liq_tipo_libretin(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['liq_tipo_libretin'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->liq_tipo_libretin) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['liq_tipo_libretin']))
              {
                  $Campos_Erros['liq_tipo_libretin'] = array();
              }
              $Campos_Erros['liq_tipo_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['liq_tipo_libretin']) || !is_array($this->NM_ajax_info['errList']['liq_tipo_libretin']))
              {
                  $this->NM_ajax_info['errList']['liq_tipo_libretin'] = array();
              }
              $this->NM_ajax_info['errList']['liq_tipo_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_tipo_libretin';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_tipo_libretin

    function ValidateField_ambiente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['ambiente'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->ambiente) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ambiente']))
              {
                  $Campos_Erros['ambiente'] = array();
              }
              $Campos_Erros['ambiente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ambiente']) || !is_array($this->NM_ajax_info['errList']['ambiente']))
              {
                  $this->NM_ajax_info['errList']['ambiente'] = array();
              }
              $this->NM_ajax_info['errList']['ambiente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'ambiente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_ambiente

    function ValidateField_liq_establecimiento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['liq_establecimiento'])) {
          nm_limpa_numero($this->liq_establecimiento, $this->field_config['liq_establecimiento']['symbol_grp']) ; 
          return;
      }
      if ($this->liq_establecimiento === "" || is_null($this->liq_establecimiento))  
      { 
          $this->liq_establecimiento = 0;
          $this->sc_force_zero[] = 'liq_establecimiento';
      } 
      nm_limpa_numero($this->liq_establecimiento, $this->field_config['liq_establecimiento']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->liq_establecimiento != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->liq_establecimiento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Liq Establecimiento: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['liq_establecimiento']))
                  {
                      $Campos_Erros['liq_establecimiento'] = array();
                  }
                  $Campos_Erros['liq_establecimiento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['liq_establecimiento']) || !is_array($this->NM_ajax_info['errList']['liq_establecimiento']))
                  {
                      $this->NM_ajax_info['errList']['liq_establecimiento'] = array();
                  }
                  $this->NM_ajax_info['errList']['liq_establecimiento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->liq_establecimiento, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Liq Establecimiento; " ; 
                  if (!isset($Campos_Erros['liq_establecimiento']))
                  {
                      $Campos_Erros['liq_establecimiento'] = array();
                  }
                  $Campos_Erros['liq_establecimiento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['liq_establecimiento']) || !is_array($this->NM_ajax_info['errList']['liq_establecimiento']))
                  {
                      $this->NM_ajax_info['errList']['liq_establecimiento'] = array();
                  }
                  $this->NM_ajax_info['errList']['liq_establecimiento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_establecimiento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_establecimiento

    function ValidateField_liq_punto_emision(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['liq_punto_emision'])) {
          nm_limpa_numero($this->liq_punto_emision, $this->field_config['liq_punto_emision']['symbol_grp']) ; 
          return;
      }
      if ($this->liq_punto_emision === "" || is_null($this->liq_punto_emision))  
      { 
          $this->liq_punto_emision = 0;
          $this->sc_force_zero[] = 'liq_punto_emision';
      } 
      nm_limpa_numero($this->liq_punto_emision, $this->field_config['liq_punto_emision']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->liq_punto_emision != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->liq_punto_emision) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Liq Punto Emision: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['liq_punto_emision']))
                  {
                      $Campos_Erros['liq_punto_emision'] = array();
                  }
                  $Campos_Erros['liq_punto_emision'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['liq_punto_emision']) || !is_array($this->NM_ajax_info['errList']['liq_punto_emision']))
                  {
                      $this->NM_ajax_info['errList']['liq_punto_emision'] = array();
                  }
                  $this->NM_ajax_info['errList']['liq_punto_emision'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->liq_punto_emision, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Liq Punto Emision; " ; 
                  if (!isset($Campos_Erros['liq_punto_emision']))
                  {
                      $Campos_Erros['liq_punto_emision'] = array();
                  }
                  $Campos_Erros['liq_punto_emision'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['liq_punto_emision']) || !is_array($this->NM_ajax_info['errList']['liq_punto_emision']))
                  {
                      $this->NM_ajax_info['errList']['liq_punto_emision'] = array();
                  }
                  $this->NM_ajax_info['errList']['liq_punto_emision'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_punto_emision';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_punto_emision

    function ValidateField_liq_ambiente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['liq_ambiente'])) {
          nm_limpa_numero($this->liq_ambiente, $this->field_config['liq_ambiente']['symbol_grp']) ; 
          return;
      }
      if ($this->liq_ambiente === "" || is_null($this->liq_ambiente))  
      { 
          $this->liq_ambiente = 0;
          $this->sc_force_zero[] = 'liq_ambiente';
      } 
      nm_limpa_numero($this->liq_ambiente, $this->field_config['liq_ambiente']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->liq_ambiente != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->liq_ambiente) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Liq Ambiente: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['liq_ambiente']))
                  {
                      $Campos_Erros['liq_ambiente'] = array();
                  }
                  $Campos_Erros['liq_ambiente'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['liq_ambiente']) || !is_array($this->NM_ajax_info['errList']['liq_ambiente']))
                  {
                      $this->NM_ajax_info['errList']['liq_ambiente'] = array();
                  }
                  $this->NM_ajax_info['errList']['liq_ambiente'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->liq_ambiente, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Liq Ambiente; " ; 
                  if (!isset($Campos_Erros['liq_ambiente']))
                  {
                      $Campos_Erros['liq_ambiente'] = array();
                  }
                  $Campos_Erros['liq_ambiente'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['liq_ambiente']) || !is_array($this->NM_ajax_info['errList']['liq_ambiente']))
                  {
                      $this->NM_ajax_info['errList']['liq_ambiente'] = array();
                  }
                  $this->NM_ajax_info['errList']['liq_ambiente'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_ambiente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_ambiente

    function ValidateField_liq_estado_sri(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['liq_estado_sri'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->liq_estado_sri) > 25) 
          { 
              $hasError = true;
              $Campos_Crit .= "Liq Estado Sri " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['liq_estado_sri']))
              {
                  $Campos_Erros['liq_estado_sri'] = array();
              }
              $Campos_Erros['liq_estado_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['liq_estado_sri']) || !is_array($this->NM_ajax_info['errList']['liq_estado_sri']))
              {
                  $this->NM_ajax_info['errList']['liq_estado_sri'] = array();
              }
              $this->NM_ajax_info['errList']['liq_estado_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_estado_sri';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_estado_sri

    function ValidateField_liq_error_sri(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['liq_error_sri'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->liq_error_sri) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "Liq Error Sri " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['liq_error_sri']))
              {
                  $Campos_Erros['liq_error_sri'] = array();
              }
              $Campos_Erros['liq_error_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['liq_error_sri']) || !is_array($this->NM_ajax_info['errList']['liq_error_sri']))
              {
                  $this->NM_ajax_info['errList']['liq_error_sri'] = array();
              }
              $this->NM_ajax_info['errList']['liq_error_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_error_sri';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_error_sri

    function ValidateField_liq_fecha_autorizacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->liq_fecha_autorizacion, $this->field_config['liq_fecha_autorizacion']['date_sep']) ; 
      if (isset($this->Field_no_validate['liq_fecha_autorizacion'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['liq_fecha_autorizacion']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['liq_fecha_autorizacion']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['liq_fecha_autorizacion']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['liq_fecha_autorizacion']['date_sep']) ; 
          if (trim($this->liq_fecha_autorizacion) != "")  
          { 
              if ($teste_validade->Data($this->liq_fecha_autorizacion, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Liq Fecha Autorizacion; " ; 
                  if (!isset($Campos_Erros['liq_fecha_autorizacion']))
                  {
                      $Campos_Erros['liq_fecha_autorizacion'] = array();
                  }
                  $Campos_Erros['liq_fecha_autorizacion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['liq_fecha_autorizacion']) || !is_array($this->NM_ajax_info['errList']['liq_fecha_autorizacion']))
                  {
                      $this->NM_ajax_info['errList']['liq_fecha_autorizacion'] = array();
                  }
                  $this->NM_ajax_info['errList']['liq_fecha_autorizacion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['liq_fecha_autorizacion']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_fecha_autorizacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_fecha_autorizacion

    function ValidateField_liq_clave(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['liq_clave'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->liq_clave) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "Liq Clave " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['liq_clave']))
              {
                  $Campos_Erros['liq_clave'] = array();
              }
              $Campos_Erros['liq_clave'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['liq_clave']) || !is_array($this->NM_ajax_info['errList']['liq_clave']))
              {
                  $this->NM_ajax_info['errList']['liq_clave'] = array();
              }
              $this->NM_ajax_info['errList']['liq_clave'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'liq_clave';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_liq_clave

    function ValidateField_fc_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_estado'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fc_estado) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "Fc Estado " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fc_estado']))
              {
                  $Campos_Erros['fc_estado'] = array();
              }
              $Campos_Erros['fc_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fc_estado']) || !is_array($this->NM_ajax_info['errList']['fc_estado']))
              {
                  $this->NM_ajax_info['errList']['fc_estado'] = array();
              }
              $this->NM_ajax_info['errList']['fc_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_estado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_estado

    function ValidateField_fc_serie(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_serie'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fc_serie) > 6) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_serie_sri'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fc_serie']))
              {
                  $Campos_Erros['fc_serie'] = array();
              }
              $Campos_Erros['fc_serie'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fc_serie']) || !is_array($this->NM_ajax_info['errList']['fc_serie']))
              {
                  $this->NM_ajax_info['errList']['fc_serie'] = array();
              }
              $this->NM_ajax_info['errList']['fc_serie'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "01234567890123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->fc_serie ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->fc_serie, $_SESSION['scriptcase']['charset']); $x++) 
          { 
               for ($y = 0; $y < mb_strlen($Teste_trab, $_SESSION['scriptcase']['charset']); $y++) 
               { 
                    if (sc_substr($Teste_compara, $x, 1) == sc_substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (sc_substr($Teste_compara, $x, 1) != sc_substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_serie_sri'] . " " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['fc_serie']))
              {
                  $Campos_Erros['fc_serie'] = array();
              }
              $Campos_Erros['fc_serie'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['fc_serie']) || !is_array($this->NM_ajax_info['errList']['fc_serie']))
              {
                  $this->NM_ajax_info['errList']['fc_serie'] = array();
              }
              $this->NM_ajax_info['errList']['fc_serie'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_serie';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_serie

    function ValidateField_fc_secuencial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_secuencial'])) {
          nm_limpa_numero($this->fc_secuencial, $this->field_config['fc_secuencial']['symbol_grp']) ; 
          return;
      }
      if ($this->fc_secuencial === "" || is_null($this->fc_secuencial))  
      { 
          $this->fc_secuencial = 0;
          $this->sc_force_zero[] = 'fc_secuencial';
      } 
      nm_limpa_numero($this->fc_secuencial, $this->field_config['fc_secuencial']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_secuencial != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->fc_secuencial) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_secuencial']))
                  {
                      $Campos_Erros['fc_secuencial'] = array();
                  }
                  $Campos_Erros['fc_secuencial'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_secuencial']) || !is_array($this->NM_ajax_info['errList']['fc_secuencial']))
                  {
                      $this->NM_ajax_info['errList']['fc_secuencial'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_secuencial'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_secuencial, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . "; " ; 
                  if (!isset($Campos_Erros['fc_secuencial']))
                  {
                      $Campos_Erros['fc_secuencial'] = array();
                  }
                  $Campos_Erros['fc_secuencial'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_secuencial']) || !is_array($this->NM_ajax_info['errList']['fc_secuencial']))
                  {
                      $this->NM_ajax_info['errList']['fc_secuencial'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_secuencial'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_secuencial';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_secuencial

    function ValidateField_fc_autorizacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_autorizacion'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fc_autorizacion) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_autorizacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fc_autorizacion']))
              {
                  $Campos_Erros['fc_autorizacion'] = array();
              }
              $Campos_Erros['fc_autorizacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fc_autorizacion']) || !is_array($this->NM_ajax_info['errList']['fc_autorizacion']))
              {
                  $this->NM_ajax_info['errList']['fc_autorizacion'] = array();
              }
              $this->NM_ajax_info['errList']['fc_autorizacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "01234567890123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->fc_autorizacion ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->fc_autorizacion, $_SESSION['scriptcase']['charset']); $x++) 
          { 
               for ($y = 0; $y < mb_strlen($Teste_trab, $_SESSION['scriptcase']['charset']); $y++) 
               { 
                    if (sc_substr($Teste_compara, $x, 1) == sc_substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (sc_substr($Teste_compara, $x, 1) != sc_substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_autorizacion'] . " " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['fc_autorizacion']))
              {
                  $Campos_Erros['fc_autorizacion'] = array();
              }
              $Campos_Erros['fc_autorizacion'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['fc_autorizacion']) || !is_array($this->NM_ajax_info['errList']['fc_autorizacion']))
              {
                  $this->NM_ajax_info['errList']['fc_autorizacion'] = array();
              }
              $this->NM_ajax_info['errList']['fc_autorizacion'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_autorizacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_autorizacion

    function ValidateField_fc_proveedor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_proveedor'])) {
          nm_limpa_numero($this->fc_proveedor, $this->field_config['fc_proveedor']['symbol_grp']) ; 
          return;
      }
      if ($this->fc_proveedor === "" || is_null($this->fc_proveedor))  
      { 
          $this->fc_proveedor = 0;
          $this->sc_force_zero[] = 'fc_proveedor';
      } 
      nm_limpa_numero($this->fc_proveedor, $this->field_config['fc_proveedor']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_proveedor != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->fc_proveedor) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_proveedor'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_proveedor']))
                  {
                      $Campos_Erros['fc_proveedor'] = array();
                  }
                  $Campos_Erros['fc_proveedor'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_proveedor']) || !is_array($this->NM_ajax_info['errList']['fc_proveedor']))
                  {
                      $this->NM_ajax_info['errList']['fc_proveedor'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_proveedor'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_proveedor, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_proveedor'] . "; " ; 
                  if (!isset($Campos_Erros['fc_proveedor']))
                  {
                      $Campos_Erros['fc_proveedor'] = array();
                  }
                  $Campos_Erros['fc_proveedor'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_proveedor']) || !is_array($this->NM_ajax_info['errList']['fc_proveedor']))
                  {
                      $this->NM_ajax_info['errList']['fc_proveedor'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_proveedor'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_proveedor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_proveedor

    function ValidateField_fc_ruc_proveedor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_ruc_proveedor'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fc_ruc_proveedor) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ruc'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fc_ruc_proveedor']))
              {
                  $Campos_Erros['fc_ruc_proveedor'] = array();
              }
              $Campos_Erros['fc_ruc_proveedor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fc_ruc_proveedor']) || !is_array($this->NM_ajax_info['errList']['fc_ruc_proveedor']))
              {
                  $this->NM_ajax_info['errList']['fc_ruc_proveedor'] = array();
              }
              $this->NM_ajax_info['errList']['fc_ruc_proveedor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_ruc_proveedor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_ruc_proveedor

    function ValidateField_fc_nombre_proveedor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_nombre_proveedor'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fc_nombre_proveedor) > 200) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_nombre'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fc_nombre_proveedor']))
              {
                  $Campos_Erros['fc_nombre_proveedor'] = array();
              }
              $Campos_Erros['fc_nombre_proveedor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fc_nombre_proveedor']) || !is_array($this->NM_ajax_info['errList']['fc_nombre_proveedor']))
              {
                  $this->NM_ajax_info['errList']['fc_nombre_proveedor'] = array();
              }
              $this->NM_ajax_info['errList']['fc_nombre_proveedor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_nombre_proveedor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_nombre_proveedor

    function ValidateField_fc_direccion_proveedor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_direccion_proveedor'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fc_direccion_proveedor) > 200) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_direccion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fc_direccion_proveedor']))
              {
                  $Campos_Erros['fc_direccion_proveedor'] = array();
              }
              $Campos_Erros['fc_direccion_proveedor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fc_direccion_proveedor']) || !is_array($this->NM_ajax_info['errList']['fc_direccion_proveedor']))
              {
                  $this->NM_ajax_info['errList']['fc_direccion_proveedor'] = array();
              }
              $this->NM_ajax_info['errList']['fc_direccion_proveedor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_direccion_proveedor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_direccion_proveedor

    function ValidateField_fc_email_proveedor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_email_proveedor'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fc_email_proveedor) > 200) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_email'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fc_email_proveedor']))
              {
                  $Campos_Erros['fc_email_proveedor'] = array();
              }
              $Campos_Erros['fc_email_proveedor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fc_email_proveedor']) || !is_array($this->NM_ajax_info['errList']['fc_email_proveedor']))
              {
                  $this->NM_ajax_info['errList']['fc_email_proveedor'] = array();
              }
              $this->NM_ajax_info['errList']['fc_email_proveedor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_email_proveedor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_email_proveedor

    function ValidateField_fc_aplica_ret(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fc_aplica_ret'])) {
       return;
   }
               if (!empty($this->fc_aplica_ret) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']) && !in_array($this->fc_aplica_ret, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fc_aplica_ret']))
                   {
                       $Campos_Erros['fc_aplica_ret'] = array();
                   }
                   $Campos_Erros['fc_aplica_ret'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fc_aplica_ret']) || !is_array($this->NM_ajax_info['errList']['fc_aplica_ret']))
                   {
                       $this->NM_ajax_info['errList']['fc_aplica_ret'] = array();
                   }
                   $this->NM_ajax_info['errList']['fc_aplica_ret'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_aplica_ret';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_aplica_ret

    function ValidateField_fc_comentario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_comentario'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fc_comentario) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_comentario'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fc_comentario']))
              {
                  $Campos_Erros['fc_comentario'] = array();
              }
              $Campos_Erros['fc_comentario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fc_comentario']) || !is_array($this->NM_ajax_info['errList']['fc_comentario']))
              {
                  $this->NM_ajax_info['errList']['fc_comentario'] = array();
              }
              $this->NM_ajax_info['errList']['fc_comentario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_comentario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_comentario

    function ValidateField_fc_aplica_propina(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fc_aplica_propina'])) {
       return;
   }
               if (!empty($this->fc_aplica_propina) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']) && !in_array($this->fc_aplica_propina, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fc_aplica_propina']))
                   {
                       $Campos_Erros['fc_aplica_propina'] = array();
                   }
                   $Campos_Erros['fc_aplica_propina'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fc_aplica_propina']) || !is_array($this->NM_ajax_info['errList']['fc_aplica_propina']))
                   {
                       $this->NM_ajax_info['errList']['fc_aplica_propina'] = array();
                   }
                   $this->NM_ajax_info['errList']['fc_aplica_propina'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_aplica_propina';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_aplica_propina

    function ValidateField_detalles(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['detalles'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->detalles) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'detalles';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_detalles

    function ValidateField_fc_subtotal(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_subtotal'])) {
          if (!empty($this->field_config['fc_subtotal']['symbol_dec'])) {
              nm_limpa_valor($this->fc_subtotal, $this->field_config['fc_subtotal']['symbol_dec'], $this->field_config['fc_subtotal']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_subtotal === "" || is_null($this->fc_subtotal))  
      { 
          $this->fc_subtotal = 0;
          $this->sc_force_zero[] = 'fc_subtotal';
      } 
      if (!empty($this->field_config['fc_subtotal']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_subtotal, $this->field_config['fc_subtotal']['symbol_dec'], $this->field_config['fc_subtotal']['symbol_grp']) ; 
          if ('.' == substr($this->fc_subtotal, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_subtotal, 1)))
              {
                  $this->fc_subtotal = '';
              }
              else
              {
                  $this->fc_subtotal = '0' . $this->fc_subtotal;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_subtotal != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_subtotal) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_subtotal']))
                  {
                      $Campos_Erros['fc_subtotal'] = array();
                  }
                  $Campos_Erros['fc_subtotal'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_subtotal, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . "; " ; 
                  if (!isset($Campos_Erros['fc_subtotal']))
                  {
                      $Campos_Erros['fc_subtotal'] = array();
                  }
                  $Campos_Erros['fc_subtotal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_subtotal';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_subtotal

    function ValidateField_fc_subtotal_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_subtotal_iva'])) {
          if (!empty($this->field_config['fc_subtotal_iva']['symbol_dec'])) {
              nm_limpa_valor($this->fc_subtotal_iva, $this->field_config['fc_subtotal_iva']['symbol_dec'], $this->field_config['fc_subtotal_iva']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_subtotal_iva === "" || is_null($this->fc_subtotal_iva))  
      { 
          $this->fc_subtotal_iva = 0;
          $this->sc_force_zero[] = 'fc_subtotal_iva';
      } 
      if (!empty($this->field_config['fc_subtotal_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_subtotal_iva, $this->field_config['fc_subtotal_iva']['symbol_dec'], $this->field_config['fc_subtotal_iva']['symbol_grp']) ; 
          if ('.' == substr($this->fc_subtotal_iva, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_subtotal_iva, 1)))
              {
                  $this->fc_subtotal_iva = '';
              }
              else
              {
                  $this->fc_subtotal_iva = '0' . $this->fc_subtotal_iva;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_subtotal_iva != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_subtotal_iva) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_subtotal_iva']))
                  {
                      $Campos_Erros['fc_subtotal_iva'] = array();
                  }
                  $Campos_Erros['fc_subtotal_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal_iva']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal_iva']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_subtotal_iva, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "; " ; 
                  if (!isset($Campos_Erros['fc_subtotal_iva']))
                  {
                      $Campos_Erros['fc_subtotal_iva'] = array();
                  }
                  $Campos_Erros['fc_subtotal_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal_iva']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal_iva']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_subtotal_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_subtotal_iva

    function ValidateField_fc_subtotal_cero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_subtotal_cero'])) {
          if (!empty($this->field_config['fc_subtotal_cero']['symbol_dec'])) {
              nm_limpa_valor($this->fc_subtotal_cero, $this->field_config['fc_subtotal_cero']['symbol_dec'], $this->field_config['fc_subtotal_cero']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_subtotal_cero === "" || is_null($this->fc_subtotal_cero))  
      { 
          $this->fc_subtotal_cero = 0;
          $this->sc_force_zero[] = 'fc_subtotal_cero';
      } 
      if (!empty($this->field_config['fc_subtotal_cero']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_subtotal_cero, $this->field_config['fc_subtotal_cero']['symbol_dec'], $this->field_config['fc_subtotal_cero']['symbol_grp']) ; 
          if ('.' == substr($this->fc_subtotal_cero, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_subtotal_cero, 1)))
              {
                  $this->fc_subtotal_cero = '';
              }
              else
              {
                  $this->fc_subtotal_cero = '0' . $this->fc_subtotal_cero;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_subtotal_cero != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_subtotal_cero) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_subtotal_cero']))
                  {
                      $Campos_Erros['fc_subtotal_cero'] = array();
                  }
                  $Campos_Erros['fc_subtotal_cero'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal_cero']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal_cero']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal_cero'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal_cero'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_subtotal_cero, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "; " ; 
                  if (!isset($Campos_Erros['fc_subtotal_cero']))
                  {
                      $Campos_Erros['fc_subtotal_cero'] = array();
                  }
                  $Campos_Erros['fc_subtotal_cero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal_cero']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal_cero']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal_cero'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal_cero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_subtotal_cero';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_subtotal_cero

    function ValidateField_fc_subtotal_no_objeto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_subtotal_no_objeto'])) {
          if (!empty($this->field_config['fc_subtotal_no_objeto']['symbol_dec'])) {
              nm_limpa_valor($this->fc_subtotal_no_objeto, $this->field_config['fc_subtotal_no_objeto']['symbol_dec'], $this->field_config['fc_subtotal_no_objeto']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_subtotal_no_objeto === "" || is_null($this->fc_subtotal_no_objeto))  
      { 
          $this->fc_subtotal_no_objeto = 0;
          $this->sc_force_zero[] = 'fc_subtotal_no_objeto';
      } 
      if (!empty($this->field_config['fc_subtotal_no_objeto']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_subtotal_no_objeto, $this->field_config['fc_subtotal_no_objeto']['symbol_dec'], $this->field_config['fc_subtotal_no_objeto']['symbol_grp']) ; 
          if ('.' == substr($this->fc_subtotal_no_objeto, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_subtotal_no_objeto, 1)))
              {
                  $this->fc_subtotal_no_objeto = '';
              }
              else
              {
                  $this->fc_subtotal_no_objeto = '0' . $this->fc_subtotal_no_objeto;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_subtotal_no_objeto != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_subtotal_no_objeto) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_subtotal_no_objeto']))
                  {
                      $Campos_Erros['fc_subtotal_no_objeto'] = array();
                  }
                  $Campos_Erros['fc_subtotal_no_objeto'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal_no_objeto']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal_no_objeto']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal_no_objeto'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal_no_objeto'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_subtotal_no_objeto, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "; " ; 
                  if (!isset($Campos_Erros['fc_subtotal_no_objeto']))
                  {
                      $Campos_Erros['fc_subtotal_no_objeto'] = array();
                  }
                  $Campos_Erros['fc_subtotal_no_objeto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal_no_objeto']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal_no_objeto']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal_no_objeto'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal_no_objeto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_subtotal_no_objeto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_subtotal_no_objeto

    function ValidateField_fc_subtotal_excento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_subtotal_excento'])) {
          if (!empty($this->field_config['fc_subtotal_excento']['symbol_dec'])) {
              nm_limpa_valor($this->fc_subtotal_excento, $this->field_config['fc_subtotal_excento']['symbol_dec'], $this->field_config['fc_subtotal_excento']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_subtotal_excento === "" || is_null($this->fc_subtotal_excento))  
      { 
          $this->fc_subtotal_excento = 0;
          $this->sc_force_zero[] = 'fc_subtotal_excento';
      } 
      if (!empty($this->field_config['fc_subtotal_excento']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_subtotal_excento, $this->field_config['fc_subtotal_excento']['symbol_dec'], $this->field_config['fc_subtotal_excento']['symbol_grp']) ; 
          if ('.' == substr($this->fc_subtotal_excento, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_subtotal_excento, 1)))
              {
                  $this->fc_subtotal_excento = '';
              }
              else
              {
                  $this->fc_subtotal_excento = '0' . $this->fc_subtotal_excento;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_subtotal_excento != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_subtotal_excento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_subtotal_excento']))
                  {
                      $Campos_Erros['fc_subtotal_excento'] = array();
                  }
                  $Campos_Erros['fc_subtotal_excento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal_excento']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal_excento']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal_excento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal_excento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_subtotal_excento, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "; " ; 
                  if (!isset($Campos_Erros['fc_subtotal_excento']))
                  {
                      $Campos_Erros['fc_subtotal_excento'] = array();
                  }
                  $Campos_Erros['fc_subtotal_excento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_subtotal_excento']) || !is_array($this->NM_ajax_info['errList']['fc_subtotal_excento']))
                  {
                      $this->NM_ajax_info['errList']['fc_subtotal_excento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_subtotal_excento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_subtotal_excento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_subtotal_excento

    function ValidateField_fc_total_descuento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_total_descuento'])) {
          if (!empty($this->field_config['fc_total_descuento']['symbol_dec'])) {
              nm_limpa_valor($this->fc_total_descuento, $this->field_config['fc_total_descuento']['symbol_dec'], $this->field_config['fc_total_descuento']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_total_descuento === "" || is_null($this->fc_total_descuento))  
      { 
          $this->fc_total_descuento = 0;
          $this->sc_force_zero[] = 'fc_total_descuento';
      } 
      if (!empty($this->field_config['fc_total_descuento']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_total_descuento, $this->field_config['fc_total_descuento']['symbol_dec'], $this->field_config['fc_total_descuento']['symbol_grp']) ; 
          if ('.' == substr($this->fc_total_descuento, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_total_descuento, 1)))
              {
                  $this->fc_total_descuento = '';
              }
              else
              {
                  $this->fc_total_descuento = '0' . $this->fc_total_descuento;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_total_descuento != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_total_descuento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_descuento'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_total_descuento']))
                  {
                      $Campos_Erros['fc_total_descuento'] = array();
                  }
                  $Campos_Erros['fc_total_descuento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_total_descuento']) || !is_array($this->NM_ajax_info['errList']['fc_total_descuento']))
                  {
                      $this->NM_ajax_info['errList']['fc_total_descuento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_total_descuento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_total_descuento, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_descuento'] . "; " ; 
                  if (!isset($Campos_Erros['fc_total_descuento']))
                  {
                      $Campos_Erros['fc_total_descuento'] = array();
                  }
                  $Campos_Erros['fc_total_descuento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_total_descuento']) || !is_array($this->NM_ajax_info['errList']['fc_total_descuento']))
                  {
                      $this->NM_ajax_info['errList']['fc_total_descuento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_total_descuento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_total_descuento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_total_descuento

    function ValidateField_fc_valor_ice(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_valor_ice'])) {
          if (!empty($this->field_config['fc_valor_ice']['symbol_dec'])) {
              nm_limpa_valor($this->fc_valor_ice, $this->field_config['fc_valor_ice']['symbol_dec'], $this->field_config['fc_valor_ice']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_valor_ice === "" || is_null($this->fc_valor_ice))  
      { 
          $this->fc_valor_ice = 0;
          $this->sc_force_zero[] = 'fc_valor_ice';
      } 
      if (!empty($this->field_config['fc_valor_ice']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_valor_ice, $this->field_config['fc_valor_ice']['symbol_dec'], $this->field_config['fc_valor_ice']['symbol_grp']) ; 
          if ('.' == substr($this->fc_valor_ice, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_valor_ice, 1)))
              {
                  $this->fc_valor_ice = '';
              }
              else
              {
                  $this->fc_valor_ice = '0' . $this->fc_valor_ice;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_valor_ice != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_valor_ice) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ice'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_valor_ice']))
                  {
                      $Campos_Erros['fc_valor_ice'] = array();
                  }
                  $Campos_Erros['fc_valor_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_valor_ice']) || !is_array($this->NM_ajax_info['errList']['fc_valor_ice']))
                  {
                      $this->NM_ajax_info['errList']['fc_valor_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_valor_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_valor_ice, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ice'] . "; " ; 
                  if (!isset($Campos_Erros['fc_valor_ice']))
                  {
                      $Campos_Erros['fc_valor_ice'] = array();
                  }
                  $Campos_Erros['fc_valor_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_valor_ice']) || !is_array($this->NM_ajax_info['errList']['fc_valor_ice']))
                  {
                      $this->NM_ajax_info['errList']['fc_valor_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_valor_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_valor_ice';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_valor_ice

    function ValidateField_fc_valor_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_valor_iva'])) {
          if (!empty($this->field_config['fc_valor_iva']['symbol_dec'])) {
              nm_limpa_valor($this->fc_valor_iva, $this->field_config['fc_valor_iva']['symbol_dec'], $this->field_config['fc_valor_iva']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_valor_iva === "" || is_null($this->fc_valor_iva))  
      { 
          $this->fc_valor_iva = 0;
          $this->sc_force_zero[] = 'fc_valor_iva';
      } 
      if (!empty($this->field_config['fc_valor_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_valor_iva, $this->field_config['fc_valor_iva']['symbol_dec'], $this->field_config['fc_valor_iva']['symbol_grp']) ; 
          if ('.' == substr($this->fc_valor_iva, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_valor_iva, 1)))
              {
                  $this->fc_valor_iva = '';
              }
              else
              {
                  $this->fc_valor_iva = '0' . $this->fc_valor_iva;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_valor_iva != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_valor_iva) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_valor_iva']))
                  {
                      $Campos_Erros['fc_valor_iva'] = array();
                  }
                  $Campos_Erros['fc_valor_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_valor_iva']) || !is_array($this->NM_ajax_info['errList']['fc_valor_iva']))
                  {
                      $this->NM_ajax_info['errList']['fc_valor_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_valor_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_valor_iva, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_iva'] . "; " ; 
                  if (!isset($Campos_Erros['fc_valor_iva']))
                  {
                      $Campos_Erros['fc_valor_iva'] = array();
                  }
                  $Campos_Erros['fc_valor_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_valor_iva']) || !is_array($this->NM_ajax_info['errList']['fc_valor_iva']))
                  {
                      $this->NM_ajax_info['errList']['fc_valor_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_valor_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_valor_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_valor_iva

    function ValidateField_fc_valor_irbpnr(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_valor_irbpnr'])) {
          if (!empty($this->field_config['fc_valor_irbpnr']['symbol_dec'])) {
              nm_limpa_valor($this->fc_valor_irbpnr, $this->field_config['fc_valor_irbpnr']['symbol_dec'], $this->field_config['fc_valor_irbpnr']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_valor_irbpnr === "" || is_null($this->fc_valor_irbpnr))  
      { 
          $this->fc_valor_irbpnr = 0;
          $this->sc_force_zero[] = 'fc_valor_irbpnr';
      } 
      if (!empty($this->field_config['fc_valor_irbpnr']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_valor_irbpnr, $this->field_config['fc_valor_irbpnr']['symbol_dec'], $this->field_config['fc_valor_irbpnr']['symbol_grp']) ; 
          if ('.' == substr($this->fc_valor_irbpnr, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_valor_irbpnr, 1)))
              {
                  $this->fc_valor_irbpnr = '';
              }
              else
              {
                  $this->fc_valor_irbpnr = '0' . $this->fc_valor_irbpnr;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_valor_irbpnr != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_valor_irbpnr) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_irbpnr'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_valor_irbpnr']))
                  {
                      $Campos_Erros['fc_valor_irbpnr'] = array();
                  }
                  $Campos_Erros['fc_valor_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_valor_irbpnr']) || !is_array($this->NM_ajax_info['errList']['fc_valor_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['fc_valor_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_valor_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_valor_irbpnr, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_irbpnr'] . "; " ; 
                  if (!isset($Campos_Erros['fc_valor_irbpnr']))
                  {
                      $Campos_Erros['fc_valor_irbpnr'] = array();
                  }
                  $Campos_Erros['fc_valor_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_valor_irbpnr']) || !is_array($this->NM_ajax_info['errList']['fc_valor_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['fc_valor_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_valor_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_valor_irbpnr';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_valor_irbpnr

    function ValidateField_fc_propina(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_propina'])) {
          if (!empty($this->field_config['fc_propina']['symbol_dec'])) {
              nm_limpa_valor($this->fc_propina, $this->field_config['fc_propina']['symbol_dec'], $this->field_config['fc_propina']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_propina === "" || is_null($this->fc_propina))  
      { 
          $this->fc_propina = 0;
          $this->sc_force_zero[] = 'fc_propina';
      } 
      if (!empty($this->field_config['fc_propina']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_propina, $this->field_config['fc_propina']['symbol_dec'], $this->field_config['fc_propina']['symbol_grp']) ; 
          if ('.' == substr($this->fc_propina, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_propina, 1)))
              {
                  $this->fc_propina = '';
              }
              else
              {
                  $this->fc_propina = '0' . $this->fc_propina;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_propina != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_propina) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_propina'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_propina']))
                  {
                      $Campos_Erros['fc_propina'] = array();
                  }
                  $Campos_Erros['fc_propina'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_propina']) || !is_array($this->NM_ajax_info['errList']['fc_propina']))
                  {
                      $this->NM_ajax_info['errList']['fc_propina'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_propina'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_propina, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_propina'] . "; " ; 
                  if (!isset($Campos_Erros['fc_propina']))
                  {
                      $Campos_Erros['fc_propina'] = array();
                  }
                  $Campos_Erros['fc_propina'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_propina']) || !is_array($this->NM_ajax_info['errList']['fc_propina']))
                  {
                      $this->NM_ajax_info['errList']['fc_propina'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_propina'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_propina';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_propina

    function ValidateField_fc_total(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fc_total'])) {
          if (!empty($this->field_config['fc_total']['symbol_dec'])) {
              nm_limpa_valor($this->fc_total, $this->field_config['fc_total']['symbol_dec'], $this->field_config['fc_total']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fc_total === "" || is_null($this->fc_total))  
      { 
          $this->fc_total = 0;
          $this->sc_force_zero[] = 'fc_total';
      } 
      if (!empty($this->field_config['fc_total']['symbol_dec']))
      {
          nm_limpa_valor($this->fc_total, $this->field_config['fc_total']['symbol_dec'], $this->field_config['fc_total']['symbol_grp']) ; 
          if ('.' == substr($this->fc_total, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fc_total, 1)))
              {
                  $this->fc_total = '';
              }
              else
              {
                  $this->fc_total = '0' . $this->fc_total;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fc_total != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fc_total) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total_pagar'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fc_total']))
                  {
                      $Campos_Erros['fc_total'] = array();
                  }
                  $Campos_Erros['fc_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fc_total']) || !is_array($this->NM_ajax_info['errList']['fc_total']))
                  {
                      $this->NM_ajax_info['errList']['fc_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fc_total, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total_pagar'] . "; " ; 
                  if (!isset($Campos_Erros['fc_total']))
                  {
                      $Campos_Erros['fc_total'] = array();
                  }
                  $Campos_Erros['fc_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fc_total']) || !is_array($this->NM_ajax_info['errList']['fc_total']))
                  {
                      $this->NM_ajax_info['errList']['fc_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['fc_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fc_total';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fc_total

    function ValidateField_forma_pago(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['forma_pago'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->forma_pago) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'forma_pago';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_forma_pago

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['titulo'] = $this->titulo;
    $this->nmgp_dados_form['fc_sustento_gasto'] = $this->fc_sustento_gasto;
    $this->nmgp_dados_form['vacio'] = $this->vacio;
    $this->nmgp_dados_form['fc_tipo_comprobante'] = $this->fc_tipo_comprobante;
    $this->nmgp_dados_form['fc_fecha'] = (strlen(trim($this->fc_fecha)) > 19) ? str_replace(".", ":", $this->fc_fecha) : trim($this->fc_fecha);
    $this->nmgp_dados_form['liq_libretin'] = $this->liq_libretin;
    $this->nmgp_dados_form['liq_secuencial'] = $this->liq_secuencial;
    $this->nmgp_dados_form['liq_tipo_libretin'] = $this->liq_tipo_libretin;
    $this->nmgp_dados_form['ambiente'] = $this->ambiente;
    $this->nmgp_dados_form['liq_establecimiento'] = $this->liq_establecimiento;
    $this->nmgp_dados_form['liq_punto_emision'] = $this->liq_punto_emision;
    $this->nmgp_dados_form['liq_ambiente'] = $this->liq_ambiente;
    $this->nmgp_dados_form['liq_estado_sri'] = $this->liq_estado_sri;
    $this->nmgp_dados_form['liq_error_sri'] = $this->liq_error_sri;
    $this->nmgp_dados_form['liq_fecha_autorizacion'] = $this->liq_fecha_autorizacion;
    $this->nmgp_dados_form['liq_clave'] = $this->liq_clave;
    $this->nmgp_dados_form['fc_estado'] = $this->fc_estado;
    $this->nmgp_dados_form['fc_serie'] = $this->fc_serie;
    $this->nmgp_dados_form['fc_secuencial'] = $this->fc_secuencial;
    $this->nmgp_dados_form['fc_autorizacion'] = $this->fc_autorizacion;
    $this->nmgp_dados_form['fc_proveedor'] = $this->fc_proveedor;
    $this->nmgp_dados_form['fc_ruc_proveedor'] = $this->fc_ruc_proveedor;
    $this->nmgp_dados_form['fc_nombre_proveedor'] = $this->fc_nombre_proveedor;
    $this->nmgp_dados_form['fc_direccion_proveedor'] = $this->fc_direccion_proveedor;
    $this->nmgp_dados_form['fc_email_proveedor'] = $this->fc_email_proveedor;
    $this->nmgp_dados_form['fc_aplica_ret'] = $this->fc_aplica_ret;
    $this->nmgp_dados_form['fc_comentario'] = $this->fc_comentario;
    $this->nmgp_dados_form['fc_aplica_propina'] = $this->fc_aplica_propina;
    $this->nmgp_dados_form['detalles'] = $this->detalles;
    $this->nmgp_dados_form['fc_subtotal'] = $this->fc_subtotal;
    $this->nmgp_dados_form['fc_subtotal_iva'] = $this->fc_subtotal_iva;
    $this->nmgp_dados_form['fc_subtotal_cero'] = $this->fc_subtotal_cero;
    $this->nmgp_dados_form['fc_subtotal_no_objeto'] = $this->fc_subtotal_no_objeto;
    $this->nmgp_dados_form['fc_subtotal_excento'] = $this->fc_subtotal_excento;
    $this->nmgp_dados_form['fc_total_descuento'] = $this->fc_total_descuento;
    $this->nmgp_dados_form['fc_valor_ice'] = $this->fc_valor_ice;
    $this->nmgp_dados_form['fc_valor_iva'] = $this->fc_valor_iva;
    $this->nmgp_dados_form['fc_valor_irbpnr'] = $this->fc_valor_irbpnr;
    $this->nmgp_dados_form['fc_propina'] = $this->fc_propina;
    $this->nmgp_dados_form['fc_total'] = $this->fc_total;
    $this->nmgp_dados_form['forma_pago'] = $this->forma_pago;
    $this->nmgp_dados_form['fc_id'] = $this->fc_id;
    $this->nmgp_dados_form['fc_empresa'] = $this->fc_empresa;
    $this->nmgp_dados_form['fc_desde'] = $this->fc_desde;
    $this->nmgp_dados_form['fc_hasta'] = $this->fc_hasta;
    $this->nmgp_dados_form['fc_fecha_caducidad'] = $this->fc_fecha_caducidad;
    $this->nmgp_dados_form['fc_usuario'] = $this->fc_usuario;
    $this->nmgp_dados_form['fc_retencion'] = $this->fc_retencion;
    $this->nmgp_dados_form['fc_correo_enviado'] = $this->fc_correo_enviado;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['fc_fecha'] = $this->fc_fecha;
      nm_limpa_data($this->fc_fecha, $this->field_config['fc_fecha']['date_sep']) ; 
      $this->Before_unformat['liq_establecimiento'] = $this->liq_establecimiento;
      nm_limpa_numero($this->liq_establecimiento, $this->field_config['liq_establecimiento']['symbol_grp']) ; 
      $this->Before_unformat['liq_punto_emision'] = $this->liq_punto_emision;
      nm_limpa_numero($this->liq_punto_emision, $this->field_config['liq_punto_emision']['symbol_grp']) ; 
      $this->Before_unformat['liq_ambiente'] = $this->liq_ambiente;
      nm_limpa_numero($this->liq_ambiente, $this->field_config['liq_ambiente']['symbol_grp']) ; 
      $this->Before_unformat['liq_fecha_autorizacion'] = $this->liq_fecha_autorizacion;
      nm_limpa_data($this->liq_fecha_autorizacion, $this->field_config['liq_fecha_autorizacion']['date_sep']) ; 
      $this->Before_unformat['fc_secuencial'] = $this->fc_secuencial;
      nm_limpa_numero($this->fc_secuencial, $this->field_config['fc_secuencial']['symbol_grp']) ; 
      $this->Before_unformat['fc_proveedor'] = $this->fc_proveedor;
      nm_limpa_numero($this->fc_proveedor, $this->field_config['fc_proveedor']['symbol_grp']) ; 
      $this->Before_unformat['fc_subtotal'] = $this->fc_subtotal;
      if (!empty($this->field_config['fc_subtotal']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_subtotal, $this->field_config['fc_subtotal']['symbol_dec'], $this->field_config['fc_subtotal']['symbol_grp']);
      }
      $this->Before_unformat['fc_subtotal_iva'] = $this->fc_subtotal_iva;
      if (!empty($this->field_config['fc_subtotal_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_subtotal_iva, $this->field_config['fc_subtotal_iva']['symbol_dec'], $this->field_config['fc_subtotal_iva']['symbol_grp']);
      }
      $this->Before_unformat['fc_subtotal_cero'] = $this->fc_subtotal_cero;
      if (!empty($this->field_config['fc_subtotal_cero']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_subtotal_cero, $this->field_config['fc_subtotal_cero']['symbol_dec'], $this->field_config['fc_subtotal_cero']['symbol_grp']);
      }
      $this->Before_unformat['fc_subtotal_no_objeto'] = $this->fc_subtotal_no_objeto;
      if (!empty($this->field_config['fc_subtotal_no_objeto']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_subtotal_no_objeto, $this->field_config['fc_subtotal_no_objeto']['symbol_dec'], $this->field_config['fc_subtotal_no_objeto']['symbol_grp']);
      }
      $this->Before_unformat['fc_subtotal_excento'] = $this->fc_subtotal_excento;
      if (!empty($this->field_config['fc_subtotal_excento']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_subtotal_excento, $this->field_config['fc_subtotal_excento']['symbol_dec'], $this->field_config['fc_subtotal_excento']['symbol_grp']);
      }
      $this->Before_unformat['fc_total_descuento'] = $this->fc_total_descuento;
      if (!empty($this->field_config['fc_total_descuento']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_total_descuento, $this->field_config['fc_total_descuento']['symbol_dec'], $this->field_config['fc_total_descuento']['symbol_grp']);
      }
      $this->Before_unformat['fc_valor_ice'] = $this->fc_valor_ice;
      if (!empty($this->field_config['fc_valor_ice']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_valor_ice, $this->field_config['fc_valor_ice']['symbol_dec'], $this->field_config['fc_valor_ice']['symbol_grp']);
      }
      $this->Before_unformat['fc_valor_iva'] = $this->fc_valor_iva;
      if (!empty($this->field_config['fc_valor_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_valor_iva, $this->field_config['fc_valor_iva']['symbol_dec'], $this->field_config['fc_valor_iva']['symbol_grp']);
      }
      $this->Before_unformat['fc_valor_irbpnr'] = $this->fc_valor_irbpnr;
      if (!empty($this->field_config['fc_valor_irbpnr']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_valor_irbpnr, $this->field_config['fc_valor_irbpnr']['symbol_dec'], $this->field_config['fc_valor_irbpnr']['symbol_grp']);
      }
      $this->Before_unformat['fc_propina'] = $this->fc_propina;
      if (!empty($this->field_config['fc_propina']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_propina, $this->field_config['fc_propina']['symbol_dec'], $this->field_config['fc_propina']['symbol_grp']);
      }
      $this->Before_unformat['fc_total'] = $this->fc_total;
      if (!empty($this->field_config['fc_total']['symbol_dec']))
      {
         nm_limpa_valor($this->fc_total, $this->field_config['fc_total']['symbol_dec'], $this->field_config['fc_total']['symbol_grp']);
      }
      $this->Before_unformat['fc_id'] = $this->fc_id;
      nm_limpa_numero($this->fc_id, $this->field_config['fc_id']['symbol_grp']) ; 
      $this->Before_unformat['fc_desde'] = $this->fc_desde;
      nm_limpa_numero($this->fc_desde, $this->field_config['fc_desde']['symbol_grp']) ; 
      $this->Before_unformat['fc_hasta'] = $this->fc_hasta;
      nm_limpa_numero($this->fc_hasta, $this->field_config['fc_hasta']['symbol_grp']) ; 
      $this->Before_unformat['fc_fecha_caducidad'] = $this->fc_fecha_caducidad;
      nm_limpa_data($this->fc_fecha_caducidad, $this->field_config['fc_fecha_caducidad']['date_sep']) ; 
      $this->Before_unformat['fc_retencion'] = $this->fc_retencion;
      nm_limpa_numero($this->fc_retencion, $this->field_config['fc_retencion']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "liq_establecimiento")
      {
          nm_limpa_numero($this->liq_establecimiento, $this->field_config['liq_establecimiento']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "liq_punto_emision")
      {
          nm_limpa_numero($this->liq_punto_emision, $this->field_config['liq_punto_emision']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "liq_ambiente")
      {
          nm_limpa_numero($this->liq_ambiente, $this->field_config['liq_ambiente']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "fc_secuencial")
      {
          nm_limpa_numero($this->fc_secuencial, $this->field_config['fc_secuencial']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "fc_proveedor")
      {
          nm_limpa_numero($this->fc_proveedor, $this->field_config['fc_proveedor']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "fc_subtotal")
      {
          if (!empty($this->field_config['fc_subtotal']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_subtotal, $this->field_config['fc_subtotal']['symbol_dec'], $this->field_config['fc_subtotal']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_subtotal_iva")
      {
          if (!empty($this->field_config['fc_subtotal_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_subtotal_iva, $this->field_config['fc_subtotal_iva']['symbol_dec'], $this->field_config['fc_subtotal_iva']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_subtotal_cero")
      {
          if (!empty($this->field_config['fc_subtotal_cero']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_subtotal_cero, $this->field_config['fc_subtotal_cero']['symbol_dec'], $this->field_config['fc_subtotal_cero']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_subtotal_no_objeto")
      {
          if (!empty($this->field_config['fc_subtotal_no_objeto']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_subtotal_no_objeto, $this->field_config['fc_subtotal_no_objeto']['symbol_dec'], $this->field_config['fc_subtotal_no_objeto']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_subtotal_excento")
      {
          if (!empty($this->field_config['fc_subtotal_excento']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_subtotal_excento, $this->field_config['fc_subtotal_excento']['symbol_dec'], $this->field_config['fc_subtotal_excento']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_total_descuento")
      {
          if (!empty($this->field_config['fc_total_descuento']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_total_descuento, $this->field_config['fc_total_descuento']['symbol_dec'], $this->field_config['fc_total_descuento']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_valor_ice")
      {
          if (!empty($this->field_config['fc_valor_ice']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_valor_ice, $this->field_config['fc_valor_ice']['symbol_dec'], $this->field_config['fc_valor_ice']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_valor_iva")
      {
          if (!empty($this->field_config['fc_valor_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_valor_iva, $this->field_config['fc_valor_iva']['symbol_dec'], $this->field_config['fc_valor_iva']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_valor_irbpnr")
      {
          if (!empty($this->field_config['fc_valor_irbpnr']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_valor_irbpnr, $this->field_config['fc_valor_irbpnr']['symbol_dec'], $this->field_config['fc_valor_irbpnr']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_propina")
      {
          if (!empty($this->field_config['fc_propina']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_propina, $this->field_config['fc_propina']['symbol_dec'], $this->field_config['fc_propina']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_total")
      {
          if (!empty($this->field_config['fc_total']['symbol_dec']))
          {
             nm_limpa_valor($this->fc_total, $this->field_config['fc_total']['symbol_dec'], $this->field_config['fc_total']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fc_id")
      {
          nm_limpa_numero($this->fc_id, $this->field_config['fc_id']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "fc_desde")
      {
          nm_limpa_numero($this->fc_desde, $this->field_config['fc_desde']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "fc_hasta")
      {
          nm_limpa_numero($this->fc_hasta, $this->field_config['fc_hasta']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "fc_retencion")
      {
          nm_limpa_numero($this->fc_retencion, $this->field_config['fc_retencion']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ((!empty($this->fc_fecha) && 'null' != $this->fc_fecha) || (!empty($format_fields) && isset($format_fields['fc_fecha'])))
      {
          nm_volta_data($this->fc_fecha, $this->field_config['fc_fecha']['date_format']) ; 
          nmgp_Form_Datas($this->fc_fecha, $this->field_config['fc_fecha']['date_format'], $this->field_config['fc_fecha']['date_sep']) ;  
      }
      elseif ('null' == $this->fc_fecha || '' == $this->fc_fecha)
      {
          $this->fc_fecha = '';
      }
      if ('' !== $this->liq_establecimiento || (!empty($format_fields) && isset($format_fields['liq_establecimiento'])))
      {
          nmgp_Form_Num_Val($this->liq_establecimiento, $this->field_config['liq_establecimiento']['symbol_grp'], $this->field_config['liq_establecimiento']['symbol_dec'], "0", "S", $this->field_config['liq_establecimiento']['format_neg'], "", "", "-", $this->field_config['liq_establecimiento']['symbol_fmt']) ; 
      }
      if ('' !== $this->liq_punto_emision || (!empty($format_fields) && isset($format_fields['liq_punto_emision'])))
      {
          nmgp_Form_Num_Val($this->liq_punto_emision, $this->field_config['liq_punto_emision']['symbol_grp'], $this->field_config['liq_punto_emision']['symbol_dec'], "0", "S", $this->field_config['liq_punto_emision']['format_neg'], "", "", "-", $this->field_config['liq_punto_emision']['symbol_fmt']) ; 
      }
      if ('' !== $this->liq_ambiente || (!empty($format_fields) && isset($format_fields['liq_ambiente'])))
      {
          nmgp_Form_Num_Val($this->liq_ambiente, $this->field_config['liq_ambiente']['symbol_grp'], $this->field_config['liq_ambiente']['symbol_dec'], "0", "S", $this->field_config['liq_ambiente']['format_neg'], "", "", "-", $this->field_config['liq_ambiente']['symbol_fmt']) ; 
      }
      $this->liq_fecha_autorizacion = trim($this->liq_fecha_autorizacion);
      if ($this->liq_fecha_autorizacion == "")
      {
          $this->liq_fecha_autorizacion = "";
      }
      if (!empty($this->liq_fecha_autorizacion) || (!empty($format_fields) && isset($format_fields['liq_fecha_autorizacion'])))
      {
          nm_conv_form_data($this->liq_fecha_autorizacion, "", $this->field_config['liq_fecha_autorizacion']['date_format'], array($this->field_config['liq_fecha_autorizacion']['date_sep'])) ;  
      }
      if ('' !== $this->fc_secuencial || (!empty($format_fields) && isset($format_fields['fc_secuencial'])))
      {
          nmgp_Form_Num_Val($this->fc_secuencial, $this->field_config['fc_secuencial']['symbol_grp'], $this->field_config['fc_secuencial']['symbol_dec'], "0", "S", $this->field_config['fc_secuencial']['format_neg'], "", "", "-", $this->field_config['fc_secuencial']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_proveedor || (!empty($format_fields) && isset($format_fields['fc_proveedor'])))
      {
          nmgp_Form_Num_Val($this->fc_proveedor, $this->field_config['fc_proveedor']['symbol_grp'], $this->field_config['fc_proveedor']['symbol_dec'], "0", "S", $this->field_config['fc_proveedor']['format_neg'], "", "", "-", $this->field_config['fc_proveedor']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_subtotal || (!empty($format_fields) && isset($format_fields['fc_subtotal'])))
      {
          nmgp_Form_Num_Val($this->fc_subtotal, $this->field_config['fc_subtotal']['symbol_grp'], $this->field_config['fc_subtotal']['symbol_dec'], "2", "S", $this->field_config['fc_subtotal']['format_neg'], "", "", "-", $this->field_config['fc_subtotal']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_subtotal_iva || (!empty($format_fields) && isset($format_fields['fc_subtotal_iva'])))
      {
          nmgp_Form_Num_Val($this->fc_subtotal_iva, $this->field_config['fc_subtotal_iva']['symbol_grp'], $this->field_config['fc_subtotal_iva']['symbol_dec'], "2", "S", $this->field_config['fc_subtotal_iva']['format_neg'], "", "", "-", $this->field_config['fc_subtotal_iva']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_subtotal_cero || (!empty($format_fields) && isset($format_fields['fc_subtotal_cero'])))
      {
          nmgp_Form_Num_Val($this->fc_subtotal_cero, $this->field_config['fc_subtotal_cero']['symbol_grp'], $this->field_config['fc_subtotal_cero']['symbol_dec'], "2", "S", $this->field_config['fc_subtotal_cero']['format_neg'], "", "", "-", $this->field_config['fc_subtotal_cero']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_subtotal_no_objeto || (!empty($format_fields) && isset($format_fields['fc_subtotal_no_objeto'])))
      {
          nmgp_Form_Num_Val($this->fc_subtotal_no_objeto, $this->field_config['fc_subtotal_no_objeto']['symbol_grp'], $this->field_config['fc_subtotal_no_objeto']['symbol_dec'], "2", "S", $this->field_config['fc_subtotal_no_objeto']['format_neg'], "", "", "-", $this->field_config['fc_subtotal_no_objeto']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_subtotal_excento || (!empty($format_fields) && isset($format_fields['fc_subtotal_excento'])))
      {
          nmgp_Form_Num_Val($this->fc_subtotal_excento, $this->field_config['fc_subtotal_excento']['symbol_grp'], $this->field_config['fc_subtotal_excento']['symbol_dec'], "2", "S", $this->field_config['fc_subtotal_excento']['format_neg'], "", "", "-", $this->field_config['fc_subtotal_excento']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_total_descuento || (!empty($format_fields) && isset($format_fields['fc_total_descuento'])))
      {
          nmgp_Form_Num_Val($this->fc_total_descuento, $this->field_config['fc_total_descuento']['symbol_grp'], $this->field_config['fc_total_descuento']['symbol_dec'], "2", "S", $this->field_config['fc_total_descuento']['format_neg'], "", "", "-", $this->field_config['fc_total_descuento']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_valor_ice || (!empty($format_fields) && isset($format_fields['fc_valor_ice'])))
      {
          nmgp_Form_Num_Val($this->fc_valor_ice, $this->field_config['fc_valor_ice']['symbol_grp'], $this->field_config['fc_valor_ice']['symbol_dec'], "2", "S", $this->field_config['fc_valor_ice']['format_neg'], "", "", "-", $this->field_config['fc_valor_ice']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_valor_iva || (!empty($format_fields) && isset($format_fields['fc_valor_iva'])))
      {
          nmgp_Form_Num_Val($this->fc_valor_iva, $this->field_config['fc_valor_iva']['symbol_grp'], $this->field_config['fc_valor_iva']['symbol_dec'], "2", "S", $this->field_config['fc_valor_iva']['format_neg'], "", "", "-", $this->field_config['fc_valor_iva']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_valor_irbpnr || (!empty($format_fields) && isset($format_fields['fc_valor_irbpnr'])))
      {
          nmgp_Form_Num_Val($this->fc_valor_irbpnr, $this->field_config['fc_valor_irbpnr']['symbol_grp'], $this->field_config['fc_valor_irbpnr']['symbol_dec'], "2", "S", $this->field_config['fc_valor_irbpnr']['format_neg'], "", "", "-", $this->field_config['fc_valor_irbpnr']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_propina || (!empty($format_fields) && isset($format_fields['fc_propina'])))
      {
          nmgp_Form_Num_Val($this->fc_propina, $this->field_config['fc_propina']['symbol_grp'], $this->field_config['fc_propina']['symbol_dec'], "2", "S", $this->field_config['fc_propina']['format_neg'], "", "", "-", $this->field_config['fc_propina']['symbol_fmt']) ; 
      }
      if ('' !== $this->fc_total || (!empty($format_fields) && isset($format_fields['fc_total'])))
      {
          nmgp_Form_Num_Val($this->fc_total, $this->field_config['fc_total']['symbol_grp'], $this->field_config['fc_total']['symbol_dec'], "2", "S", $this->field_config['fc_total']['format_neg'], "", "", "-", $this->field_config['fc_total']['symbol_fmt']) ; 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
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
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
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
          $nm_campo = $trab_saida;
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
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
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
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['fc_fecha']['date_format'];
      if ($this->fc_fecha != "")  
      { 
          nm_conv_data($this->fc_fecha, $this->field_config['fc_fecha']['date_format']) ; 
          $this->fc_fecha_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fc_fecha_hora = substr($this->fc_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_fecha_hora = substr($this->fc_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fc_fecha_hora = substr($this->fc_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fc_fecha_hora = substr($this->fc_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fc_fecha_hora = substr($this->fc_fecha_hora, 0, -4);
          }
      } 
      if ($this->fc_fecha == "" && $use_null)  
      { 
          $this->fc_fecha = "null" ; 
      } 
      $this->field_config['fc_fecha']['date_format'] = $guarda_format_hora;
   }
//
   function nm_prep_date_change($cmp_date, $format_dt)
   {
       $vl_return  = "";
       if ($cmp_date != 'null') {
           $vl_return .= (strpos($format_dt, "yy") !== false) ? substr($cmp_date,  0, 4) : "";
           $vl_return .= (strpos($format_dt, "mm") !== false) ? substr($cmp_date,  5, 2) : "";
           $vl_return .= (strpos($format_dt, "dd") !== false) ? substr($cmp_date,  8, 2) : "";
           $vl_return .= (strpos($format_dt, "hh") !== false) ? substr($cmp_date, 11, 2) : "";
           $vl_return .= (strpos($format_dt, "ii") !== false) ? substr($cmp_date, 14, 2) : "";
           $vl_return .= (strpos($format_dt, "ss") !== false) ? substr($cmp_date, 17, 2) : "";
       }
       return $vl_return;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
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
           nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
           return $dt_out;
       }
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_titulo();
          $this->ajax_return_values_fc_sustento_gasto();
          $this->ajax_return_values_vacio();
          $this->ajax_return_values_fc_tipo_comprobante();
          $this->ajax_return_values_fc_fecha();
          $this->ajax_return_values_liq_libretin();
          $this->ajax_return_values_liq_secuencial();
          $this->ajax_return_values_liq_tipo_libretin();
          $this->ajax_return_values_ambiente();
          $this->ajax_return_values_liq_establecimiento();
          $this->ajax_return_values_liq_punto_emision();
          $this->ajax_return_values_liq_ambiente();
          $this->ajax_return_values_liq_estado_sri();
          $this->ajax_return_values_liq_error_sri();
          $this->ajax_return_values_liq_fecha_autorizacion();
          $this->ajax_return_values_liq_clave();
          $this->ajax_return_values_fc_estado();
          $this->ajax_return_values_fc_serie();
          $this->ajax_return_values_fc_secuencial();
          $this->ajax_return_values_fc_autorizacion();
          $this->ajax_return_values_fc_proveedor();
          $this->ajax_return_values_fc_ruc_proveedor();
          $this->ajax_return_values_fc_nombre_proveedor();
          $this->ajax_return_values_fc_direccion_proveedor();
          $this->ajax_return_values_fc_email_proveedor();
          $this->ajax_return_values_fc_aplica_ret();
          $this->ajax_return_values_fc_comentario();
          $this->ajax_return_values_fc_aplica_propina();
          $this->ajax_return_values_detalles();
          $this->ajax_return_values_fc_subtotal();
          $this->ajax_return_values_fc_subtotal_iva();
          $this->ajax_return_values_fc_subtotal_cero();
          $this->ajax_return_values_fc_subtotal_no_objeto();
          $this->ajax_return_values_fc_subtotal_excento();
          $this->ajax_return_values_fc_total_descuento();
          $this->ajax_return_values_fc_valor_ice();
          $this->ajax_return_values_fc_valor_iva();
          $this->ajax_return_values_fc_valor_irbpnr();
          $this->ajax_return_values_fc_propina();
          $this->ajax_return_values_fc_total();
          $this->ajax_return_values_forma_pago();
          $this->ajax_return_values_fc_id();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['fc_id']['keyVal'] = form_del_factura_compra_mob_pack_protect_string($this->nmgp_dados_form['fc_id']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['foreign_key']['fp_factura'] = $this->nmgp_dados_form['fc_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['where_filter'] = "fp_factura = " . $this->nmgp_dados_form['fc_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['where_detal']  = "fp_factura = " . $this->nmgp_dados_form['fc_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['total']);
              foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob'] as $i => $v)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra'][$i] = $v;
              }
              if (isset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['total']))
              {
                  unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['total']);
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['foreign_key']['dfc_factura'] = $this->nmgp_dados_form['fc_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['where_filter'] = "dfc_factura = " . $this->nmgp_dados_form['fc_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['where_detal']  = "dfc_factura = " . $this->nmgp_dados_form['fc_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['total']);
              foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob'] as $i => $v)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra'][$i] = $v;
              }
              if (isset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['total']))
              {
                  unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['total']);
              }
          }
   } // ajax_return_values

          //----- titulo
   function ajax_return_values_titulo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("titulo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->titulo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['titulo'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_sustento_gasto
   function ajax_return_values_fc_sustento_gasto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_sustento_gasto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_sustento_gasto);
              $aLookup = array();
              $this->_tmp_lookup_fc_sustento_gasto = $this->fc_sustento_gasto;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array(); 
}
$aLookup[] = array(form_del_factura_compra_mob_pack_protect_string('00') => str_replace('<', '&lt;',form_del_factura_compra_mob_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'][] = '00';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT stg_codigo, stg_descripcion  FROM sri_sustento_tributario_gasto  WHERE stg_estado='V' ORDER BY stg_codigo";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"fc_sustento_gasto\"";
          if (isset($this->NM_ajax_info['select_html']['fc_sustento_gasto']) && !empty($this->NM_ajax_info['select_html']['fc_sustento_gasto']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fc_sustento_gasto']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->fc_sustento_gasto == $sValue)
                  {
                      $this->_tmp_lookup_fc_sustento_gasto = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fc_sustento_gasto'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fc_sustento_gasto']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fc_sustento_gasto']['valList'][$i] = form_del_factura_compra_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fc_sustento_gasto']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fc_sustento_gasto']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fc_sustento_gasto']['labList'] = $aLabel;
          }
   }

          //----- vacio
   function ajax_return_values_vacio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("vacio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->vacio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['vacio'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_tipo_comprobante
   function ajax_return_values_fc_tipo_comprobante($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_tipo_comprobante", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_tipo_comprobante);
              $aLookup = array();
              $this->_tmp_lookup_fc_tipo_comprobante = $this->fc_tipo_comprobante;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT tc_codigo,tc_nombre  FROM sri_comprobante_sustento  inner join sri_tipo_comprobante on cs_comprobante=tc_codigo WHERE cs_sustento='$this->fc_sustento_gasto' order by tc_codigo";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0] . " - " . $rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"fc_tipo_comprobante\"";
          if (isset($this->NM_ajax_info['select_html']['fc_tipo_comprobante']) && !empty($this->NM_ajax_info['select_html']['fc_tipo_comprobante']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fc_tipo_comprobante']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->fc_tipo_comprobante == $sValue)
                  {
                      $this->_tmp_lookup_fc_tipo_comprobante = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fc_tipo_comprobante'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fc_tipo_comprobante']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fc_tipo_comprobante']['valList'][$i] = form_del_factura_compra_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fc_tipo_comprobante']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fc_tipo_comprobante']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fc_tipo_comprobante']['labList'] = $aLabel;
          }
   }

          //----- fc_fecha
   function ajax_return_values_fc_fecha($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_fecha", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_fecha);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_fecha'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- liq_libretin
   function ajax_return_values_liq_libretin($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_libretin", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_libretin);
              $aLookup = array();
              $this->_tmp_lookup_liq_libretin = $this->liq_libretin;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='03'";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"liq_libretin\"";
          if (isset($this->NM_ajax_info['select_html']['liq_libretin']) && !empty($this->NM_ajax_info['select_html']['liq_libretin']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['liq_libretin']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->liq_libretin == $sValue)
                  {
                      $this->_tmp_lookup_liq_libretin = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['liq_libretin'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['liq_libretin']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['liq_libretin']['valList'][$i] = form_del_factura_compra_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['liq_libretin']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['liq_libretin']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['liq_libretin']['labList'] = $aLabel;
          }
   }

          //----- liq_secuencial
   function ajax_return_values_liq_secuencial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_secuencial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_secuencial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['liq_secuencial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- liq_tipo_libretin
   function ajax_return_values_liq_tipo_libretin($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_tipo_libretin", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_tipo_libretin);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['liq_tipo_libretin'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- ambiente
   function ajax_return_values_ambiente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ambiente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ambiente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ambiente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- liq_establecimiento
   function ajax_return_values_liq_establecimiento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_establecimiento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_establecimiento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['liq_establecimiento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- liq_punto_emision
   function ajax_return_values_liq_punto_emision($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_punto_emision", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_punto_emision);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['liq_punto_emision'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- liq_ambiente
   function ajax_return_values_liq_ambiente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_ambiente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_ambiente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['liq_ambiente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- liq_estado_sri
   function ajax_return_values_liq_estado_sri($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_estado_sri", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_estado_sri);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['liq_estado_sri'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- liq_error_sri
   function ajax_return_values_liq_error_sri($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_error_sri", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_error_sri);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['liq_error_sri'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- liq_fecha_autorizacion
   function ajax_return_values_liq_fecha_autorizacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_fecha_autorizacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_fecha_autorizacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['liq_fecha_autorizacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- liq_clave
   function ajax_return_values_liq_clave($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("liq_clave", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->liq_clave);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['liq_clave'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fc_estado
   function ajax_return_values_fc_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_estado);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_estado'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fc_serie
   function ajax_return_values_fc_serie($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_serie", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_serie);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_serie'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fc_secuencial
   function ajax_return_values_fc_secuencial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_secuencial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_secuencial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_secuencial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_autorizacion
   function ajax_return_values_fc_autorizacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_autorizacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_autorizacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_autorizacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fc_proveedor
   function ajax_return_values_fc_proveedor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_proveedor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_proveedor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_proveedor'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_ruc_proveedor
   function ajax_return_values_fc_ruc_proveedor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_ruc_proveedor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_ruc_proveedor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_ruc_proveedor'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fc_nombre_proveedor
   function ajax_return_values_fc_nombre_proveedor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_nombre_proveedor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_nombre_proveedor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_nombre_proveedor'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fc_direccion_proveedor
   function ajax_return_values_fc_direccion_proveedor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_direccion_proveedor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_direccion_proveedor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_direccion_proveedor'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fc_email_proveedor
   function ajax_return_values_fc_email_proveedor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_email_proveedor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_email_proveedor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_email_proveedor'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fc_aplica_ret
   function ajax_return_values_fc_aplica_ret($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_aplica_ret", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_aplica_ret);
              $aLookup = array();
              $this->_tmp_lookup_fc_aplica_ret = $this->fc_aplica_ret;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"fc_aplica_ret\"";
          if (isset($this->NM_ajax_info['select_html']['fc_aplica_ret']) && !empty($this->NM_ajax_info['select_html']['fc_aplica_ret']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fc_aplica_ret']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->fc_aplica_ret == $sValue)
                  {
                      $this->_tmp_lookup_fc_aplica_ret = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fc_aplica_ret'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fc_aplica_ret']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fc_aplica_ret']['valList'][$i] = form_del_factura_compra_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fc_aplica_ret']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fc_aplica_ret']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fc_aplica_ret']['labList'] = $aLabel;
          }
   }

          //----- fc_comentario
   function ajax_return_values_fc_comentario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_comentario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_comentario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_comentario'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fc_aplica_propina
   function ajax_return_values_fc_aplica_propina($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_aplica_propina", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_aplica_propina);
              $aLookup = array();
              $this->_tmp_lookup_fc_aplica_propina = $this->fc_aplica_propina;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_factura_compra_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"fc_aplica_propina\"";
          if (isset($this->NM_ajax_info['select_html']['fc_aplica_propina']) && !empty($this->NM_ajax_info['select_html']['fc_aplica_propina']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fc_aplica_propina']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->fc_aplica_propina == $sValue)
                  {
                      $this->_tmp_lookup_fc_aplica_propina = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fc_aplica_propina'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fc_aplica_propina']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fc_aplica_propina']['valList'][$i] = form_del_factura_compra_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fc_aplica_propina']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fc_aplica_propina']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fc_aplica_propina']['labList'] = $aLabel;
          }
   }

          //----- detalles
   function ajax_return_values_detalles($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("detalles", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->detalles);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['detalles'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_subtotal
   function ajax_return_values_fc_subtotal($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_subtotal", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_subtotal);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_subtotal'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_subtotal_iva
   function ajax_return_values_fc_subtotal_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_subtotal_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_subtotal_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_subtotal_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_subtotal_cero
   function ajax_return_values_fc_subtotal_cero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_subtotal_cero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_subtotal_cero);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_subtotal_cero'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_subtotal_no_objeto
   function ajax_return_values_fc_subtotal_no_objeto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_subtotal_no_objeto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_subtotal_no_objeto);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_subtotal_no_objeto'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_subtotal_excento
   function ajax_return_values_fc_subtotal_excento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_subtotal_excento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_subtotal_excento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_subtotal_excento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_total_descuento
   function ajax_return_values_fc_total_descuento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_total_descuento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_total_descuento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_total_descuento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_valor_ice
   function ajax_return_values_fc_valor_ice($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_valor_ice", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_valor_ice);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_valor_ice'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_valor_iva
   function ajax_return_values_fc_valor_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_valor_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_valor_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_valor_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_valor_irbpnr
   function ajax_return_values_fc_valor_irbpnr($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_valor_irbpnr", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_valor_irbpnr);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_valor_irbpnr'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_propina
   function ajax_return_values_fc_propina($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_propina", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_propina);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_propina'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_total
   function ajax_return_values_fc_total($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_total", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_total);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_total'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- forma_pago
   function ajax_return_values_forma_pago($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("forma_pago", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->forma_pago);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['forma_pago'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fc_id
   function ajax_return_values_fc_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fc_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fc_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fc_id'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("fc_id", $this->form_encode_input($sTmpValue))),
              );
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
       $this->NM_ajax_info['btnVars']['var_btn_retencion_var_id_factura_compra'] = $this->form_encode_input($this->nmgp_dados_form['fc_id']);
       $this->NM_ajax_info['btnVars']['var_btn_ride_var_id_documento'] = $this->form_encode_input($this->nmgp_dados_form['fc_id']);
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_ambiente = $this->ambiente;
    $original_fc_aplica_propina = $this->fc_aplica_propina;
    $original_fc_aplica_ret = $this->fc_aplica_ret;
    $original_fc_comentario = $this->fc_comentario;
    $original_fc_direccion_proveedor = $this->fc_direccion_proveedor;
    $original_fc_email_proveedor = $this->fc_email_proveedor;
    $original_fc_estado = $this->fc_estado;
    $original_fc_fecha = $this->fc_fecha;
    $original_fc_nombre_proveedor = $this->fc_nombre_proveedor;
    $original_fc_propina = $this->fc_propina;
    $original_fc_proveedor = $this->fc_proveedor;
    $original_fc_ruc_proveedor = $this->fc_ruc_proveedor;
    $original_fc_subtotal = $this->fc_subtotal;
    $original_fc_subtotal_cero = $this->fc_subtotal_cero;
    $original_fc_subtotal_excento = $this->fc_subtotal_excento;
    $original_fc_subtotal_iva = $this->fc_subtotal_iva;
    $original_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
    $original_fc_sustento_gasto = $this->fc_sustento_gasto;
    $original_fc_tipo_comprobante = $this->fc_tipo_comprobante;
    $original_fc_total = $this->fc_total;
    $original_fc_total_descuento = $this->fc_total_descuento;
    $original_fc_valor_ice = $this->fc_valor_ice;
    $original_fc_valor_irbpnr = $this->fc_valor_irbpnr;
    $original_fc_valor_iva = $this->fc_valor_iva;
    $original_liq_estado_sri = $this->liq_estado_sri;
    $original_liq_libretin = $this->liq_libretin;
    $original_liq_secuencial = $this->liq_secuencial;
    $original_liq_tipo_libretin = $this->liq_tipo_libretin;
    $original_titulo = $this->titulo;
}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  $this->titulo = $this->Ini->Nm_lang['lang_registrar_compra'] ;
$this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes["ride"] = 'off';;
$this->NM_ajax_info['buttonDisplay']['enviar'] = $this->nmgp_botoes["enviar"] = 'off';;
$this->NM_ajax_info['buttonDisplay']['retencion'] = $this->nmgp_botoes["retencion"] = 'off';;


if($this->fc_proveedor <>''){
	$check_sql = "SELECT
					pr_nombre,
					pr_direccion,
					pr_email,
					pr_identificacion,
					pr_retencion_iva 
				FROM
					del_proveedor
			  where pr_id = " . $this->fc_proveedor  ;
	 
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
		$this->fc_nombre_proveedor  = $this->rs[0][0];
		$this->fc_direccion_proveedor  = $this->rs[0][1];
		$this->fc_email_proveedor =$this->rs[0][2];
		$this->fc_ruc_proveedor =$this->rs[0][3];
	}

}

if($this->fc_tipo_comprobante =='03'){
	$this->Ini->nm_hidden_blocos[2] = 'on'; $this->NM_ajax_info['blockDisplay']['2'] = 'on';
	$this->Ini->nm_hidden_blocos[3] = 'off'; $this->NM_ajax_info['blockDisplay']['3'] = 'off';
	$this->nmgp_cmp_hidden["fc_aplica_propina"] = 'off'; $this->NM_ajax_info['fieldDisplay']['fc_aplica_propina'] = 'off';
	
	$this->fc_aplica_propina ='N';
	$this->fc_propina =0.00;
	if(isset($fa_id )){
		$update_sql = "UPDATE del_factura_compra 
					   SET fc_aplica_propina='".$this->fc_aplica_propina ."'  
						WHERE
						fc_id=".$this->fc_id ;
		
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

		$update_sql = "SELECT sp_del_actualiza_factura_compra(".$this->fc_id .");";
		
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

		$check_sql = "SELECT fc_subtotal,
							fc_subtotal_iva,
							fc_subtotal_cero,
							fc_subtotal_no_objeto,
							fc_subtotal_excento,
							fc_total_descuento,
							fc_valor_ice,
							fc_valor_iva,
							fc_valor_irbpnr,
							fc_propina,
							fc_total 
						FROM del_factura_compra
						WHERE fc_id=".$this->fc_id .";";
		 
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
			$this->fc_subtotal =$this->rs[0][0];
			$this->fc_subtotal_iva = $this->rs[0][1];
			$this->fc_subtotal_cero = $this->rs[0][2];
			$this->fc_subtotal_no_objeto = $this->rs[0][3];
			$this->fc_subtotal_excento = $this->rs[0][4];
			$this->fc_total_descuento = $this->rs[0][5];
			$this->fc_valor_ice = $this->rs[0][6];
			$this->fc_valor_iva = $this->rs[0][7];
			$this->fc_valor_irbpnr = $this->rs[0][8];
			$this->fc_propina = $this->rs[0][9];
			$this->fc_total = $this->rs[0][10];
		}
	}else{
		$this->fc_propina =0;
	}
	if($this->fc_estado =='R'){
		$this->NM_ajax_info['buttonDisplay']['enviar'] = $this->nmgp_botoes["enviar"] = 'off';;
		$this->NM_ajax_info['buttonDisplay']['retencion'] = $this->nmgp_botoes["retencion"] = 'off';;
		$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'on';;
		$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'off';;
		
	}else{
		if($this->liq_libretin <>''){
			
			$check_sql="SELECT right('000000000'||fc_secuencial,9), 
								tl_descripcion,
								ta_nombre
						FROM del_factura_compra 
						join del_libretin on liq_libretin = lib_id
						join sri_tipo_libretin on lib_tipo_libretin = tl_codigo
						join sri_tipo_ambiente on liq_ambiente=ta_id
						WHERE fc_empresa='".$this->sc_temp_Igtech_RucEmpresa."' and fc_id=".$this->fc_id ;
			 
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

			if (isset($this->rs[0][0])){
				
				$this->liq_secuencial =$this->rs[0][0];
				$this->liq_tipo_libretin =$this->rs[0][1];
				$this->ambiente =$this->rs[0][2];
			}else{
				$this->liq_secuencial =$this->rs[0][0];
				$this->liq_tipo_libretin =$this->rs[0][1];
				$this->ambiente =$this->rs[0][2];
			}
			
		}else{
			
		}
		
		if($this->fc_estado =='V'){
			$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'on';;
			if($this->liq_tipo_libretin =='ELECTRONICA'){
				if($this->liq_estado_sri  == 'AUTORIZADO'){
					$this->NM_ajax_info['buttonDisplay']['enviar'] = $this->nmgp_botoes["enviar"] = 'off';;
					$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
				}else{
					$this->NM_ajax_info['buttonDisplay']['enviar'] = $this->nmgp_botoes["enviar"] = 'on';;
					$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
				}
				$this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes["ride"] = 'on';;
			}else{
				$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'on';;
				$this->NM_ajax_info['buttonDisplay']['enviar'] = $this->nmgp_botoes["enviar"] = 'off';;
				$this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes["ride"] = 'off';;
			}	
		}else{
			$this->sc_field_readonly("fac_libretin", 'on');
			$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
			$this->NM_ajax_info['buttonDisplay']['enviar'] = $this->nmgp_botoes["enviar"] = 'off';;
			$this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes["ride"] = 'off';;
			$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'off';;
		}	
		$this->sc_field_readonly("liq_libretin", 'on');
		$this->sc_field_readonly("fc_sustento_gasto", 'on');
		$this->sc_field_readonly("fc_tipo_comprobante", 'on');
		$this->sc_field_readonly("fc_fecha", 'on');
		$this->sc_field_readonly("fc_sustento_gasto", 'on');
		$this->sc_field_readonly("fc_comentario", 'on');
		$this->sc_field_readonly("fc_aplica_ret", 'on');
		
		
	}
	

}else{
	$this->Ini->nm_hidden_blocos[2] = 'off'; $this->NM_ajax_info['blockDisplay']['2'] = 'off';
	$this->Ini->nm_hidden_blocos[3] = 'on'; $this->NM_ajax_info['blockDisplay']['3'] = 'on';
	$this->nmgp_cmp_hidden["fc_aplica_propina"] = 'on'; $this->NM_ajax_info['fieldDisplay']['fc_aplica_propina'] = 'on';
}
if($this->fc_estado =='V' and $this->fc_aplica_ret =='S'){
	$this->NM_ajax_info['buttonDisplay']['retencion'] = $this->nmgp_botoes["retencion"] = 'on';;
}
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_ambiente != $this->ambiente || (isset($bFlagRead_ambiente) && $bFlagRead_ambiente)))
    {
        $this->ajax_return_values_ambiente(true);
    }
    if (($original_fc_aplica_propina != $this->fc_aplica_propina || (isset($bFlagRead_fc_aplica_propina) && $bFlagRead_fc_aplica_propina)))
    {
        $this->ajax_return_values_fc_aplica_propina(true);
    }
    if (($original_fc_aplica_ret != $this->fc_aplica_ret || (isset($bFlagRead_fc_aplica_ret) && $bFlagRead_fc_aplica_ret)))
    {
        $this->ajax_return_values_fc_aplica_ret(true);
    }
    if (($original_fc_comentario != $this->fc_comentario || (isset($bFlagRead_fc_comentario) && $bFlagRead_fc_comentario)))
    {
        $this->ajax_return_values_fc_comentario(true);
    }
    if (($original_fc_direccion_proveedor != $this->fc_direccion_proveedor || (isset($bFlagRead_fc_direccion_proveedor) && $bFlagRead_fc_direccion_proveedor)))
    {
        $this->ajax_return_values_fc_direccion_proveedor(true);
    }
    if (($original_fc_email_proveedor != $this->fc_email_proveedor || (isset($bFlagRead_fc_email_proveedor) && $bFlagRead_fc_email_proveedor)))
    {
        $this->ajax_return_values_fc_email_proveedor(true);
    }
    if (($original_fc_estado != $this->fc_estado || (isset($bFlagRead_fc_estado) && $bFlagRead_fc_estado)))
    {
        $this->ajax_return_values_fc_estado(true);
    }
    if (($original_fc_fecha != $this->fc_fecha || (isset($bFlagRead_fc_fecha) && $bFlagRead_fc_fecha)))
    {
        $this->ajax_return_values_fc_fecha(true);
    }
    if (($original_fc_nombre_proveedor != $this->fc_nombre_proveedor || (isset($bFlagRead_fc_nombre_proveedor) && $bFlagRead_fc_nombre_proveedor)))
    {
        $this->ajax_return_values_fc_nombre_proveedor(true);
    }
    if (($original_fc_propina != $this->fc_propina || (isset($bFlagRead_fc_propina) && $bFlagRead_fc_propina)))
    {
        $this->ajax_return_values_fc_propina(true);
    }
    if (($original_fc_proveedor != $this->fc_proveedor || (isset($bFlagRead_fc_proveedor) && $bFlagRead_fc_proveedor)))
    {
        $this->ajax_return_values_fc_proveedor(true);
    }
    if (($original_fc_ruc_proveedor != $this->fc_ruc_proveedor || (isset($bFlagRead_fc_ruc_proveedor) && $bFlagRead_fc_ruc_proveedor)))
    {
        $this->ajax_return_values_fc_ruc_proveedor(true);
    }
    if (($original_fc_subtotal != $this->fc_subtotal || (isset($bFlagRead_fc_subtotal) && $bFlagRead_fc_subtotal)))
    {
        $this->ajax_return_values_fc_subtotal(true);
    }
    if (($original_fc_subtotal_cero != $this->fc_subtotal_cero || (isset($bFlagRead_fc_subtotal_cero) && $bFlagRead_fc_subtotal_cero)))
    {
        $this->ajax_return_values_fc_subtotal_cero(true);
    }
    if (($original_fc_subtotal_excento != $this->fc_subtotal_excento || (isset($bFlagRead_fc_subtotal_excento) && $bFlagRead_fc_subtotal_excento)))
    {
        $this->ajax_return_values_fc_subtotal_excento(true);
    }
    if (($original_fc_subtotal_iva != $this->fc_subtotal_iva || (isset($bFlagRead_fc_subtotal_iva) && $bFlagRead_fc_subtotal_iva)))
    {
        $this->ajax_return_values_fc_subtotal_iva(true);
    }
    if (($original_fc_subtotal_no_objeto != $this->fc_subtotal_no_objeto || (isset($bFlagRead_fc_subtotal_no_objeto) && $bFlagRead_fc_subtotal_no_objeto)))
    {
        $this->ajax_return_values_fc_subtotal_no_objeto(true);
    }
    if (($original_fc_sustento_gasto != $this->fc_sustento_gasto || (isset($bFlagRead_fc_sustento_gasto) && $bFlagRead_fc_sustento_gasto)))
    {
        $this->ajax_return_values_fc_sustento_gasto(true);
    }
    if (($original_fc_tipo_comprobante != $this->fc_tipo_comprobante || (isset($bFlagRead_fc_tipo_comprobante) && $bFlagRead_fc_tipo_comprobante)))
    {
        $this->ajax_return_values_fc_tipo_comprobante(true);
    }
    if (($original_fc_total != $this->fc_total || (isset($bFlagRead_fc_total) && $bFlagRead_fc_total)))
    {
        $this->ajax_return_values_fc_total(true);
    }
    if (($original_fc_total_descuento != $this->fc_total_descuento || (isset($bFlagRead_fc_total_descuento) && $bFlagRead_fc_total_descuento)))
    {
        $this->ajax_return_values_fc_total_descuento(true);
    }
    if (($original_fc_valor_ice != $this->fc_valor_ice || (isset($bFlagRead_fc_valor_ice) && $bFlagRead_fc_valor_ice)))
    {
        $this->ajax_return_values_fc_valor_ice(true);
    }
    if (($original_fc_valor_irbpnr != $this->fc_valor_irbpnr || (isset($bFlagRead_fc_valor_irbpnr) && $bFlagRead_fc_valor_irbpnr)))
    {
        $this->ajax_return_values_fc_valor_irbpnr(true);
    }
    if (($original_fc_valor_iva != $this->fc_valor_iva || (isset($bFlagRead_fc_valor_iva) && $bFlagRead_fc_valor_iva)))
    {
        $this->ajax_return_values_fc_valor_iva(true);
    }
    if (($original_liq_estado_sri != $this->liq_estado_sri || (isset($bFlagRead_liq_estado_sri) && $bFlagRead_liq_estado_sri)))
    {
        $this->ajax_return_values_liq_estado_sri(true);
    }
    if (($original_liq_libretin != $this->liq_libretin || (isset($bFlagRead_liq_libretin) && $bFlagRead_liq_libretin)))
    {
        $this->ajax_return_values_liq_libretin(true);
    }
    if (($original_liq_secuencial != $this->liq_secuencial || (isset($bFlagRead_liq_secuencial) && $bFlagRead_liq_secuencial)))
    {
        $this->ajax_return_values_liq_secuencial(true);
    }
    if (($original_liq_tipo_libretin != $this->liq_tipo_libretin || (isset($bFlagRead_liq_tipo_libretin) && $bFlagRead_liq_tipo_libretin)))
    {
        $this->ajax_return_values_liq_tipo_libretin(true);
    }
    if (($original_titulo != $this->titulo || (isset($bFlagRead_titulo) && $bFlagRead_titulo)))
    {
        $this->ajax_return_values_titulo(true);
    }
}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off'; 
      }
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//
   function nm_troca_decimal($sc_parm1, $sc_parm2) 
   { 
      $this->fc_subtotal = str_replace($sc_parm1, $sc_parm2, $this->fc_subtotal); 
      $this->fc_subtotal_iva = str_replace($sc_parm1, $sc_parm2, $this->fc_subtotal_iva); 
      $this->fc_subtotal_cero = str_replace($sc_parm1, $sc_parm2, $this->fc_subtotal_cero); 
      $this->fc_subtotal_no_objeto = str_replace($sc_parm1, $sc_parm2, $this->fc_subtotal_no_objeto); 
      $this->fc_subtotal_excento = str_replace($sc_parm1, $sc_parm2, $this->fc_subtotal_excento); 
      $this->fc_total_descuento = str_replace($sc_parm1, $sc_parm2, $this->fc_total_descuento); 
      $this->fc_valor_ice = str_replace($sc_parm1, $sc_parm2, $this->fc_valor_ice); 
      $this->fc_valor_iva = str_replace($sc_parm1, $sc_parm2, $this->fc_valor_iva); 
      $this->fc_valor_irbpnr = str_replace($sc_parm1, $sc_parm2, $this->fc_valor_irbpnr); 
      $this->fc_propina = str_replace($sc_parm1, $sc_parm2, $this->fc_propina); 
      $this->fc_total = str_replace($sc_parm1, $sc_parm2, $this->fc_total); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->fc_subtotal = "'" . $this->fc_subtotal . "'";
      $this->fc_subtotal_iva = "'" . $this->fc_subtotal_iva . "'";
      $this->fc_subtotal_cero = "'" . $this->fc_subtotal_cero . "'";
      $this->fc_subtotal_no_objeto = "'" . $this->fc_subtotal_no_objeto . "'";
      $this->fc_subtotal_excento = "'" . $this->fc_subtotal_excento . "'";
      $this->fc_total_descuento = "'" . $this->fc_total_descuento . "'";
      $this->fc_valor_ice = "'" . $this->fc_valor_ice . "'";
      $this->fc_valor_iva = "'" . $this->fc_valor_iva . "'";
      $this->fc_valor_irbpnr = "'" . $this->fc_valor_irbpnr . "'";
      $this->fc_propina = "'" . $this->fc_propina . "'";
      $this->fc_total = "'" . $this->fc_total . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->fc_subtotal = str_replace("'", "", $this->fc_subtotal); 
      $this->fc_subtotal_iva = str_replace("'", "", $this->fc_subtotal_iva); 
      $this->fc_subtotal_cero = str_replace("'", "", $this->fc_subtotal_cero); 
      $this->fc_subtotal_no_objeto = str_replace("'", "", $this->fc_subtotal_no_objeto); 
      $this->fc_subtotal_excento = str_replace("'", "", $this->fc_subtotal_excento); 
      $this->fc_total_descuento = str_replace("'", "", $this->fc_total_descuento); 
      $this->fc_valor_ice = str_replace("'", "", $this->fc_valor_ice); 
      $this->fc_valor_iva = str_replace("'", "", $this->fc_valor_iva); 
      $this->fc_valor_irbpnr = str_replace("'", "", $this->fc_valor_irbpnr); 
      $this->fc_propina = str_replace("'", "", $this->fc_propina); 
      $this->fc_total = str_replace("'", "", $this->fc_total); 
   } 
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros
    function handleDbErrorMessage(&$dbErrorMessage, $dbErrorCode)
    {
        if (1267 == $dbErrorCode) {
            $dbErrorMessage = $this->Ini->Nm_lang['lang_errm_db_invalid_collation'];
        }
    }


   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      $this->SC_log_atv = false;
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_key($this->nmgp_opcao);
      }
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_old();
      }
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
    if ("alterar" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fc_autorizacion = $this->fc_autorizacion;
    $original_fc_secuencial = $this->fc_secuencial;
    $original_fc_serie = $this->fc_serie;
    $original_fc_tipo_comprobante = $this->fc_tipo_comprobante;
    $original_fc_total = $this->fc_total;
    $original_liq_libretin = $this->liq_libretin;
}
if (!isset($this->sc_temp_var_mensaje)) {$this->sc_temp_var_mensaje = (isset($_SESSION['var_mensaje'])) ? $_SESSION['var_mensaje'] : "";}
if (!isset($this->sc_temp_var_procesar)) {$this->sc_temp_var_procesar = (isset($_SESSION['var_procesar'])) ? $_SESSION['var_procesar'] : "";}
  $this->sc_temp_var_procesar=true;
$this->sc_temp_var_mensaje='Proceso Exitoso';


if ($this->fc_tipo_comprobante =='03'){
	if($this->liq_libretin ==''){
		$this->sc_temp_var_procesar=false;
		$this->sc_temp_var_mensaje='No ha seleccionado una Serie para la factura<br>';
	}
}else{	
	if(strlen($this->fc_serie )<>6){
		$this->sc_temp_var_procesar=false;
		$this->sc_temp_var_mensaje="Número de Serie no es valido";
	}
	if($this->fc_secuencial ==0 or $this->fc_secuencial ==''){
		$this->sc_temp_var_procesar=false;
		$this->sc_temp_var_mensaje="Numero de Factura no es valido";
	}
	$longitud=strlen ($this->fc_autorizacion );
	if($longitud<>10 and $longitud<>37 and $longitud<>49){
		$this->sc_temp_var_procesar=false;
		$this->sc_temp_var_mensaje="Número de Autorización no es valido";
	}
	
}

if ($this->fc_total ==0){
		$this->sc_temp_var_procesar=false;
		$this->sc_temp_var_mensaje='El valor a facturar no debe ser 0<br>';
}else{	
	$check_sql = "SELECT coalesce(sum(fp_valor),0) 
			  FROM del_forma_pago_factura_compra
		 	  WHERE fp_factura=".$this->fc_id ;
	 
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


	if ($this->rs[0][0]>0){
		if ($this->rs[0][0]<>$this->fc_total ){
 			$this->sc_temp_var_procesar=false;
			$this->sc_temp_var_mensaje='La forma de Pago y el Total a Facturar no son iguales<br>';
		}
	}else{
		$this->sc_temp_var_procesar=false;
		$this->sc_temp_var_mensaje='No ha registrado una forma de pago<br>';
	}
	
}
if (isset($this->sc_temp_var_procesar)) { $_SESSION['var_procesar'] = $this->sc_temp_var_procesar;}
if (isset($this->sc_temp_var_mensaje)) { $_SESSION['var_mensaje'] = $this->sc_temp_var_mensaje;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fc_autorizacion != $this->fc_autorizacion || (isset($bFlagRead_fc_autorizacion) && $bFlagRead_fc_autorizacion)))
    {
        $this->ajax_return_values_fc_autorizacion(true);
    }
    if (($original_fc_secuencial != $this->fc_secuencial || (isset($bFlagRead_fc_secuencial) && $bFlagRead_fc_secuencial)))
    {
        $this->ajax_return_values_fc_secuencial(true);
    }
    if (($original_fc_serie != $this->fc_serie || (isset($bFlagRead_fc_serie) && $bFlagRead_fc_serie)))
    {
        $this->ajax_return_values_fc_serie(true);
    }
    if (($original_fc_tipo_comprobante != $this->fc_tipo_comprobante || (isset($bFlagRead_fc_tipo_comprobante) && $bFlagRead_fc_tipo_comprobante)))
    {
        $this->ajax_return_values_fc_tipo_comprobante(true);
    }
    if (($original_fc_total != $this->fc_total || (isset($bFlagRead_fc_total) && $bFlagRead_fc_total)))
    {
        $this->ajax_return_values_fc_total(true);
    }
    if (($original_liq_libretin != $this->liq_libretin || (isset($bFlagRead_liq_libretin) && $bFlagRead_liq_libretin)))
    {
        $this->ajax_return_values_liq_libretin(true);
    }
}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $this->nmgp_opcao ; 
          if ($this->nmgp_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          else
          { 
              $this->sc_evento = ""; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->NM_rollback_db(); 
          $this->Campos_Mens_erro = ""; 
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if ((!isset($this->Ini->nm_bases_access) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Ini->sc_tem_trans_banco = $this->Db->BeginTrans(); 
      } 
      $NM_val_form['titulo'] = $this->titulo;
      $NM_val_form['fc_sustento_gasto'] = $this->fc_sustento_gasto;
      $NM_val_form['vacio'] = $this->vacio;
      $NM_val_form['fc_tipo_comprobante'] = $this->fc_tipo_comprobante;
      $NM_val_form['fc_fecha'] = $this->fc_fecha;
      $NM_val_form['liq_libretin'] = $this->liq_libretin;
      $NM_val_form['liq_secuencial'] = $this->liq_secuencial;
      $NM_val_form['liq_tipo_libretin'] = $this->liq_tipo_libretin;
      $NM_val_form['ambiente'] = $this->ambiente;
      $NM_val_form['liq_establecimiento'] = $this->liq_establecimiento;
      $NM_val_form['liq_punto_emision'] = $this->liq_punto_emision;
      $NM_val_form['liq_ambiente'] = $this->liq_ambiente;
      $NM_val_form['liq_estado_sri'] = $this->liq_estado_sri;
      $NM_val_form['liq_error_sri'] = $this->liq_error_sri;
      $NM_val_form['liq_fecha_autorizacion'] = $this->liq_fecha_autorizacion;
      $NM_val_form['liq_clave'] = $this->liq_clave;
      $NM_val_form['fc_estado'] = $this->fc_estado;
      $NM_val_form['fc_serie'] = $this->fc_serie;
      $NM_val_form['fc_secuencial'] = $this->fc_secuencial;
      $NM_val_form['fc_autorizacion'] = $this->fc_autorizacion;
      $NM_val_form['fc_proveedor'] = $this->fc_proveedor;
      $NM_val_form['fc_ruc_proveedor'] = $this->fc_ruc_proveedor;
      $NM_val_form['fc_nombre_proveedor'] = $this->fc_nombre_proveedor;
      $NM_val_form['fc_direccion_proveedor'] = $this->fc_direccion_proveedor;
      $NM_val_form['fc_email_proveedor'] = $this->fc_email_proveedor;
      $NM_val_form['fc_aplica_ret'] = $this->fc_aplica_ret;
      $NM_val_form['fc_comentario'] = $this->fc_comentario;
      $NM_val_form['fc_aplica_propina'] = $this->fc_aplica_propina;
      $NM_val_form['detalles'] = $this->detalles;
      $NM_val_form['fc_subtotal'] = $this->fc_subtotal;
      $NM_val_form['fc_subtotal_iva'] = $this->fc_subtotal_iva;
      $NM_val_form['fc_subtotal_cero'] = $this->fc_subtotal_cero;
      $NM_val_form['fc_subtotal_no_objeto'] = $this->fc_subtotal_no_objeto;
      $NM_val_form['fc_subtotal_excento'] = $this->fc_subtotal_excento;
      $NM_val_form['fc_total_descuento'] = $this->fc_total_descuento;
      $NM_val_form['fc_valor_ice'] = $this->fc_valor_ice;
      $NM_val_form['fc_valor_iva'] = $this->fc_valor_iva;
      $NM_val_form['fc_valor_irbpnr'] = $this->fc_valor_irbpnr;
      $NM_val_form['fc_propina'] = $this->fc_propina;
      $NM_val_form['fc_total'] = $this->fc_total;
      $NM_val_form['forma_pago'] = $this->forma_pago;
      $NM_val_form['fc_id'] = $this->fc_id;
      $NM_val_form['fc_empresa'] = $this->fc_empresa;
      $NM_val_form['fc_desde'] = $this->fc_desde;
      $NM_val_form['fc_hasta'] = $this->fc_hasta;
      $NM_val_form['fc_fecha_caducidad'] = $this->fc_fecha_caducidad;
      $NM_val_form['fc_usuario'] = $this->fc_usuario;
      $NM_val_form['fc_retencion'] = $this->fc_retencion;
      $NM_val_form['fc_correo_enviado'] = $this->fc_correo_enviado;
      if ($this->fc_id === "" || is_null($this->fc_id))  
      { 
          $this->fc_id = 0;
      } 
      if ($this->fc_proveedor === "" || is_null($this->fc_proveedor))  
      { 
          $this->fc_proveedor = 0;
          $this->sc_force_zero[] = 'fc_proveedor';
      } 
      if ($this->fc_secuencial === "" || is_null($this->fc_secuencial))  
      { 
          $this->fc_secuencial = 0;
          $this->sc_force_zero[] = 'fc_secuencial';
      } 
      if ($this->fc_desde === "" || is_null($this->fc_desde))  
      { 
          $this->fc_desde = 0;
          $this->sc_force_zero[] = 'fc_desde';
      } 
      if ($this->fc_hasta === "" || is_null($this->fc_hasta))  
      { 
          $this->fc_hasta = 0;
          $this->sc_force_zero[] = 'fc_hasta';
      } 
      if ($this->fc_subtotal_iva === "" || is_null($this->fc_subtotal_iva))  
      { 
          $this->fc_subtotal_iva = 0;
          $this->sc_force_zero[] = 'fc_subtotal_iva';
      } 
      if ($this->fc_subtotal_cero === "" || is_null($this->fc_subtotal_cero))  
      { 
          $this->fc_subtotal_cero = 0;
          $this->sc_force_zero[] = 'fc_subtotal_cero';
      } 
      if ($this->fc_subtotal_no_objeto === "" || is_null($this->fc_subtotal_no_objeto))  
      { 
          $this->fc_subtotal_no_objeto = 0;
          $this->sc_force_zero[] = 'fc_subtotal_no_objeto';
      } 
      if ($this->fc_subtotal_excento === "" || is_null($this->fc_subtotal_excento))  
      { 
          $this->fc_subtotal_excento = 0;
          $this->sc_force_zero[] = 'fc_subtotal_excento';
      } 
      if ($this->fc_subtotal === "" || is_null($this->fc_subtotal))  
      { 
          $this->fc_subtotal = 0;
          $this->sc_force_zero[] = 'fc_subtotal';
      } 
      if ($this->fc_valor_ice === "" || is_null($this->fc_valor_ice))  
      { 
          $this->fc_valor_ice = 0;
          $this->sc_force_zero[] = 'fc_valor_ice';
      } 
      if ($this->fc_valor_iva === "" || is_null($this->fc_valor_iva))  
      { 
          $this->fc_valor_iva = 0;
          $this->sc_force_zero[] = 'fc_valor_iva';
      } 
      if ($this->fc_valor_irbpnr === "" || is_null($this->fc_valor_irbpnr))  
      { 
          $this->fc_valor_irbpnr = 0;
          $this->sc_force_zero[] = 'fc_valor_irbpnr';
      } 
      if ($this->fc_total === "" || is_null($this->fc_total))  
      { 
          $this->fc_total = 0;
          $this->sc_force_zero[] = 'fc_total';
      } 
      if ($this->liq_libretin === "" || is_null($this->liq_libretin))  
      { 
          $this->liq_libretin = 0;
          $this->sc_force_zero[] = 'liq_libretin';
      } 
      if ($this->fc_total_descuento === "" || is_null($this->fc_total_descuento))  
      { 
          $this->fc_total_descuento = 0;
          $this->sc_force_zero[] = 'fc_total_descuento';
      } 
      if ($this->fc_propina === "" || is_null($this->fc_propina))  
      { 
          $this->fc_propina = 0;
          $this->sc_force_zero[] = 'fc_propina';
      } 
      if ($this->liq_establecimiento === "" || is_null($this->liq_establecimiento))  
      { 
          $this->liq_establecimiento = 0;
          $this->sc_force_zero[] = 'liq_establecimiento';
      } 
      if ($this->liq_punto_emision === "" || is_null($this->liq_punto_emision))  
      { 
          $this->liq_punto_emision = 0;
          $this->sc_force_zero[] = 'liq_punto_emision';
      } 
      if ($this->liq_ambiente === "" || is_null($this->liq_ambiente))  
      { 
          $this->liq_ambiente = 0;
          $this->sc_force_zero[] = 'liq_ambiente';
      } 
      if ($this->fc_retencion === "" || is_null($this->fc_retencion))  
      { 
          $this->fc_retencion = 0;
          $this->sc_force_zero[] = 'fc_retencion';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->fc_empresa_before_qstr = $this->fc_empresa;
          $this->fc_empresa = substr($this->Db->qstr($this->fc_empresa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_empresa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_empresa);
          }
          if ($this->fc_empresa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_empresa = "null"; 
              $NM_val_null[] = "fc_empresa";
          } 
          $this->fc_tipo_comprobante_before_qstr = $this->fc_tipo_comprobante;
          $this->fc_tipo_comprobante = substr($this->Db->qstr($this->fc_tipo_comprobante), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_tipo_comprobante = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_tipo_comprobante);
          }
          if ($this->fc_tipo_comprobante == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_tipo_comprobante = "null"; 
              $NM_val_null[] = "fc_tipo_comprobante";
          } 
          if ($this->fc_fecha == "")  
          { 
              $this->fc_fecha = "null"; 
              $NM_val_null[] = "fc_fecha";
          } 
          $this->fc_serie_before_qstr = $this->fc_serie;
          $this->fc_serie = substr($this->Db->qstr($this->fc_serie), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_serie = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_serie);
          }
          if ($this->fc_serie == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_serie = "null"; 
              $NM_val_null[] = "fc_serie";
          } 
          $this->fc_autorizacion_before_qstr = $this->fc_autorizacion;
          $this->fc_autorizacion = substr($this->Db->qstr($this->fc_autorizacion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_autorizacion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_autorizacion);
          }
          if ($this->fc_autorizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_autorizacion = "null"; 
              $NM_val_null[] = "fc_autorizacion";
          } 
          if ($this->fc_fecha_caducidad == "")  
          { 
              $this->fc_fecha_caducidad = "null"; 
              $NM_val_null[] = "fc_fecha_caducidad";
          } 
          $this->fc_comentario_before_qstr = $this->fc_comentario;
          $this->fc_comentario = substr($this->Db->qstr($this->fc_comentario), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_comentario = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_comentario);
          }
          if ($this->fc_comentario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_comentario = "null"; 
              $NM_val_null[] = "fc_comentario";
          } 
          $this->fc_usuario_before_qstr = $this->fc_usuario;
          $this->fc_usuario = substr($this->Db->qstr($this->fc_usuario), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_usuario = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_usuario);
          }
          if ($this->fc_usuario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_usuario = "null"; 
              $NM_val_null[] = "fc_usuario";
          } 
          $this->fc_aplica_ret_before_qstr = $this->fc_aplica_ret;
          $this->fc_aplica_ret = substr($this->Db->qstr($this->fc_aplica_ret), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_aplica_ret = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_aplica_ret);
          }
          if ($this->fc_aplica_ret == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_aplica_ret = "null"; 
              $NM_val_null[] = "fc_aplica_ret";
          } 
          $this->fc_estado_before_qstr = $this->fc_estado;
          $this->fc_estado = substr($this->Db->qstr($this->fc_estado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_estado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_estado);
          }
          if ($this->fc_estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_estado = "null"; 
              $NM_val_null[] = "fc_estado";
          } 
          $this->liq_estado_sri_before_qstr = $this->liq_estado_sri;
          $this->liq_estado_sri = substr($this->Db->qstr($this->liq_estado_sri), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->liq_estado_sri = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->liq_estado_sri);
          }
          if ($this->liq_estado_sri == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->liq_estado_sri = "null"; 
              $NM_val_null[] = "liq_estado_sri";
          } 
          $this->liq_error_sri_before_qstr = $this->liq_error_sri;
          $this->liq_error_sri = substr($this->Db->qstr($this->liq_error_sri), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->liq_error_sri = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->liq_error_sri);
          }
          if ($this->liq_error_sri == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->liq_error_sri = "null"; 
              $NM_val_null[] = "liq_error_sri";
          } 
          $this->liq_fecha_autorizacion_before_qstr = $this->liq_fecha_autorizacion;
          $this->liq_fecha_autorizacion = substr($this->Db->qstr($this->liq_fecha_autorizacion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->liq_fecha_autorizacion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->liq_fecha_autorizacion);
          }
          if ($this->liq_fecha_autorizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->liq_fecha_autorizacion = "null"; 
              $NM_val_null[] = "liq_fecha_autorizacion";
          } 
          $this->liq_clave_before_qstr = $this->liq_clave;
          $this->liq_clave = substr($this->Db->qstr($this->liq_clave), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->liq_clave = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->liq_clave);
          }
          if ($this->liq_clave == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->liq_clave = "null"; 
              $NM_val_null[] = "liq_clave";
          } 
          $this->fc_aplica_propina_before_qstr = $this->fc_aplica_propina;
          $this->fc_aplica_propina = substr($this->Db->qstr($this->fc_aplica_propina), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_aplica_propina = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_aplica_propina);
          }
          if ($this->fc_aplica_propina == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_aplica_propina = "null"; 
              $NM_val_null[] = "fc_aplica_propina";
          } 
          $this->fc_correo_enviado_before_qstr = $this->fc_correo_enviado;
          $this->fc_correo_enviado = substr($this->Db->qstr($this->fc_correo_enviado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_correo_enviado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_correo_enviado);
          }
          if ($this->fc_correo_enviado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_correo_enviado = "null"; 
              $NM_val_null[] = "fc_correo_enviado";
          } 
          $this->fc_sustento_gasto_before_qstr = $this->fc_sustento_gasto;
          $this->fc_sustento_gasto = substr($this->Db->qstr($this->fc_sustento_gasto), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fc_sustento_gasto = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fc_sustento_gasto);
          }
          if ($this->fc_sustento_gasto == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fc_sustento_gasto = "null"; 
              $NM_val_null[] = "fc_sustento_gasto";
          } 
          $this->forma_pago_before_qstr = $this->forma_pago;
          $this->forma_pago = substr($this->Db->qstr($this->forma_pago), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->forma_pago = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->forma_pago);
          }
          if ($this->forma_pago == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->forma_pago = "null"; 
              $NM_val_null[] = "forma_pago";
          } 
          $this->detalles_before_qstr = $this->detalles;
          $this->detalles = substr($this->Db->qstr($this->detalles), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->detalles = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->detalles);
          }
          if ($this->detalles == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->detalles = "null"; 
              $NM_val_null[] = "detalles";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_del_factura_compra_mob_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fc_tipo_comprobante = '$this->fc_tipo_comprobante', fc_proveedor = $this->fc_proveedor, fc_fecha = #$this->fc_fecha#, fc_serie = '$this->fc_serie', fc_secuencial = $this->fc_secuencial, fc_autorizacion = '$this->fc_autorizacion', fc_subtotal_iva = $this->fc_subtotal_iva, fc_subtotal_cero = $this->fc_subtotal_cero, fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto, fc_subtotal_excento = $this->fc_subtotal_excento, fc_subtotal = $this->fc_subtotal, fc_valor_ice = $this->fc_valor_ice, fc_valor_iva = $this->fc_valor_iva, fc_valor_irbpnr = $this->fc_valor_irbpnr, fc_total = $this->fc_total, fc_comentario = '$this->fc_comentario', fc_aplica_ret = '$this->fc_aplica_ret', fc_estado = '$this->fc_estado', liq_libretin = $this->liq_libretin, liq_estado_sri = '$this->liq_estado_sri', liq_error_sri = '$this->liq_error_sri', liq_fecha_autorizacion = '$this->liq_fecha_autorizacion', liq_clave = '$this->liq_clave', fc_total_descuento = $this->fc_total_descuento, fc_propina = $this->fc_propina, liq_establecimiento = $this->liq_establecimiento, liq_punto_emision = $this->liq_punto_emision, liq_ambiente = $this->liq_ambiente, fc_aplica_propina = '$this->fc_aplica_propina', fc_sustento_gasto = '$this->fc_sustento_gasto'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fc_tipo_comprobante = '$this->fc_tipo_comprobante', fc_proveedor = $this->fc_proveedor, fc_fecha = " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", fc_serie = '$this->fc_serie', fc_secuencial = $this->fc_secuencial, fc_autorizacion = '$this->fc_autorizacion', fc_subtotal_iva = $this->fc_subtotal_iva, fc_subtotal_cero = $this->fc_subtotal_cero, fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto, fc_subtotal_excento = $this->fc_subtotal_excento, fc_subtotal = $this->fc_subtotal, fc_valor_ice = $this->fc_valor_ice, fc_valor_iva = $this->fc_valor_iva, fc_valor_irbpnr = $this->fc_valor_irbpnr, fc_total = $this->fc_total, fc_comentario = '$this->fc_comentario', fc_aplica_ret = '$this->fc_aplica_ret', fc_estado = '$this->fc_estado', liq_libretin = $this->liq_libretin, liq_estado_sri = '$this->liq_estado_sri', liq_error_sri = '$this->liq_error_sri', liq_fecha_autorizacion = '$this->liq_fecha_autorizacion', liq_clave = '$this->liq_clave', fc_total_descuento = $this->fc_total_descuento, fc_propina = $this->fc_propina, liq_establecimiento = $this->liq_establecimiento, liq_punto_emision = $this->liq_punto_emision, liq_ambiente = $this->liq_ambiente, fc_aplica_propina = '$this->fc_aplica_propina', fc_sustento_gasto = '$this->fc_sustento_gasto'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fc_tipo_comprobante = '$this->fc_tipo_comprobante', fc_proveedor = $this->fc_proveedor, fc_fecha = " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", fc_serie = '$this->fc_serie', fc_secuencial = $this->fc_secuencial, fc_autorizacion = '$this->fc_autorizacion', fc_subtotal_iva = $this->fc_subtotal_iva, fc_subtotal_cero = $this->fc_subtotal_cero, fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto, fc_subtotal_excento = $this->fc_subtotal_excento, fc_subtotal = $this->fc_subtotal, fc_valor_ice = $this->fc_valor_ice, fc_valor_iva = $this->fc_valor_iva, fc_valor_irbpnr = $this->fc_valor_irbpnr, fc_total = $this->fc_total, fc_comentario = '$this->fc_comentario', fc_aplica_ret = '$this->fc_aplica_ret', fc_estado = '$this->fc_estado', liq_libretin = $this->liq_libretin, liq_estado_sri = '$this->liq_estado_sri', liq_error_sri = '$this->liq_error_sri', liq_fecha_autorizacion = '$this->liq_fecha_autorizacion', liq_clave = '$this->liq_clave', fc_total_descuento = $this->fc_total_descuento, fc_propina = $this->fc_propina, liq_establecimiento = $this->liq_establecimiento, liq_punto_emision = $this->liq_punto_emision, liq_ambiente = $this->liq_ambiente, fc_aplica_propina = '$this->fc_aplica_propina', fc_sustento_gasto = '$this->fc_sustento_gasto'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fc_tipo_comprobante = '$this->fc_tipo_comprobante', fc_proveedor = $this->fc_proveedor, fc_fecha = EXTEND('$this->fc_fecha', YEAR TO DAY), fc_serie = '$this->fc_serie', fc_secuencial = $this->fc_secuencial, fc_autorizacion = '$this->fc_autorizacion', fc_subtotal_iva = $this->fc_subtotal_iva, fc_subtotal_cero = $this->fc_subtotal_cero, fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto, fc_subtotal_excento = $this->fc_subtotal_excento, fc_subtotal = $this->fc_subtotal, fc_valor_ice = $this->fc_valor_ice, fc_valor_iva = $this->fc_valor_iva, fc_valor_irbpnr = $this->fc_valor_irbpnr, fc_total = $this->fc_total, fc_comentario = '$this->fc_comentario', fc_aplica_ret = '$this->fc_aplica_ret', fc_estado = '$this->fc_estado', liq_libretin = $this->liq_libretin, liq_estado_sri = '$this->liq_estado_sri', liq_error_sri = '$this->liq_error_sri', liq_fecha_autorizacion = '$this->liq_fecha_autorizacion', liq_clave = '$this->liq_clave', fc_total_descuento = $this->fc_total_descuento, fc_propina = $this->fc_propina, liq_establecimiento = $this->liq_establecimiento, liq_punto_emision = $this->liq_punto_emision, liq_ambiente = $this->liq_ambiente, fc_aplica_propina = '$this->fc_aplica_propina', fc_sustento_gasto = '$this->fc_sustento_gasto'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fc_tipo_comprobante = '$this->fc_tipo_comprobante', fc_proveedor = $this->fc_proveedor, fc_fecha = " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", fc_serie = '$this->fc_serie', fc_secuencial = $this->fc_secuencial, fc_autorizacion = '$this->fc_autorizacion', fc_subtotal_iva = $this->fc_subtotal_iva, fc_subtotal_cero = $this->fc_subtotal_cero, fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto, fc_subtotal_excento = $this->fc_subtotal_excento, fc_subtotal = $this->fc_subtotal, fc_valor_ice = $this->fc_valor_ice, fc_valor_iva = $this->fc_valor_iva, fc_valor_irbpnr = $this->fc_valor_irbpnr, fc_total = $this->fc_total, fc_comentario = '$this->fc_comentario', fc_aplica_ret = '$this->fc_aplica_ret', fc_estado = '$this->fc_estado', liq_libretin = $this->liq_libretin, liq_estado_sri = '$this->liq_estado_sri', liq_error_sri = '$this->liq_error_sri', liq_fecha_autorizacion = '$this->liq_fecha_autorizacion', liq_clave = '$this->liq_clave', fc_total_descuento = $this->fc_total_descuento, fc_propina = $this->fc_propina, liq_establecimiento = $this->liq_establecimiento, liq_punto_emision = $this->liq_punto_emision, liq_ambiente = $this->liq_ambiente, fc_aplica_propina = '$this->fc_aplica_propina', fc_sustento_gasto = '$this->fc_sustento_gasto'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fc_tipo_comprobante = '$this->fc_tipo_comprobante', fc_proveedor = $this->fc_proveedor, fc_fecha = " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", fc_serie = '$this->fc_serie', fc_secuencial = $this->fc_secuencial, fc_autorizacion = '$this->fc_autorizacion', fc_subtotal_iva = $this->fc_subtotal_iva, fc_subtotal_cero = $this->fc_subtotal_cero, fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto, fc_subtotal_excento = $this->fc_subtotal_excento, fc_subtotal = $this->fc_subtotal, fc_valor_ice = $this->fc_valor_ice, fc_valor_iva = $this->fc_valor_iva, fc_valor_irbpnr = $this->fc_valor_irbpnr, fc_total = $this->fc_total, fc_comentario = '$this->fc_comentario', fc_aplica_ret = '$this->fc_aplica_ret', fc_estado = '$this->fc_estado', liq_libretin = $this->liq_libretin, liq_estado_sri = '$this->liq_estado_sri', liq_error_sri = '$this->liq_error_sri', liq_fecha_autorizacion = '$this->liq_fecha_autorizacion', liq_clave = '$this->liq_clave', fc_total_descuento = $this->fc_total_descuento, fc_propina = $this->fc_propina, liq_establecimiento = $this->liq_establecimiento, liq_punto_emision = $this->liq_punto_emision, liq_ambiente = $this->liq_ambiente, fc_aplica_propina = '$this->fc_aplica_propina', fc_sustento_gasto = '$this->fc_sustento_gasto'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fc_tipo_comprobante = '$this->fc_tipo_comprobante', fc_proveedor = $this->fc_proveedor, fc_fecha = " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", fc_serie = '$this->fc_serie', fc_secuencial = $this->fc_secuencial, fc_autorizacion = '$this->fc_autorizacion', fc_subtotal_iva = $this->fc_subtotal_iva, fc_subtotal_cero = $this->fc_subtotal_cero, fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto, fc_subtotal_excento = $this->fc_subtotal_excento, fc_subtotal = $this->fc_subtotal, fc_valor_ice = $this->fc_valor_ice, fc_valor_iva = $this->fc_valor_iva, fc_valor_irbpnr = $this->fc_valor_irbpnr, fc_total = $this->fc_total, fc_comentario = '$this->fc_comentario', fc_aplica_ret = '$this->fc_aplica_ret', fc_estado = '$this->fc_estado', liq_libretin = $this->liq_libretin, liq_estado_sri = '$this->liq_estado_sri', liq_error_sri = '$this->liq_error_sri', liq_fecha_autorizacion = '$this->liq_fecha_autorizacion', liq_clave = '$this->liq_clave', fc_total_descuento = $this->fc_total_descuento, fc_propina = $this->fc_propina, liq_establecimiento = $this->liq_establecimiento, liq_punto_emision = $this->liq_punto_emision, liq_ambiente = $this->liq_ambiente, fc_aplica_propina = '$this->fc_aplica_propina', fc_sustento_gasto = '$this->fc_sustento_gasto'"; 
              } 
              if (isset($NM_val_form['fc_empresa']) && $NM_val_form['fc_empresa'] != $this->nmgp_dados_select['fc_empresa']) 
              { 
                  $SC_fields_update[] = "fc_empresa = '$this->fc_empresa'"; 
              } 
              if (isset($NM_val_form['fc_desde']) && $NM_val_form['fc_desde'] != $this->nmgp_dados_select['fc_desde']) 
              { 
                  $SC_fields_update[] = "fc_desde = $this->fc_desde"; 
              } 
              if (isset($NM_val_form['fc_hasta']) && $NM_val_form['fc_hasta'] != $this->nmgp_dados_select['fc_hasta']) 
              { 
                  $SC_fields_update[] = "fc_hasta = $this->fc_hasta"; 
              } 
              if (isset($NM_val_form['fc_fecha_caducidad']) && $NM_val_form['fc_fecha_caducidad'] != $this->nmgp_dados_select['fc_fecha_caducidad']) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $SC_fields_update[] = "fc_fecha_caducidad = #$this->fc_fecha_caducidad#"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $SC_fields_update[] = "fc_fecha_caducidad = EXTEND('" . $this->fc_fecha_caducidad . "', YEAR TO DAY)"; 
                  } 
                  else
                  { 
                      $SC_fields_update[] = "fc_fecha_caducidad = " . $this->Ini->date_delim . $this->fc_fecha_caducidad . $this->Ini->date_delim1 . ""; 
                  } 
              } 
              if (isset($NM_val_form['fc_usuario']) && $NM_val_form['fc_usuario'] != $this->nmgp_dados_select['fc_usuario']) 
              { 
                  $SC_fields_update[] = "fc_usuario = '$this->fc_usuario'"; 
              } 
              if (isset($NM_val_form['fc_retencion']) && $NM_val_form['fc_retencion'] != $this->nmgp_dados_select['fc_retencion']) 
              { 
                  $SC_fields_update[] = "fc_retencion = $this->fc_retencion"; 
              } 
              if (isset($NM_val_form['fc_correo_enviado']) && $NM_val_form['fc_correo_enviado'] != $this->nmgp_dados_select['fc_correo_enviado']) 
              { 
                  $SC_fields_update[] = "fc_correo_enviado = '$this->fc_correo_enviado'"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE fc_id = $this->fc_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE fc_id = $this->fc_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE fc_id = $this->fc_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE fc_id = $this->fc_id ";  
              }  
              else  
              {
                  $comando .= " WHERE fc_id = $this->fc_id ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $useUpdateProcedure = false;
              if (!empty($SC_fields_update) || $useUpdateProcedure)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $dbErrorMessage = $this->Db->ErrorMsg();
                          $dbErrorCode = $this->Db->ErrorNo();
                          $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $dbErrorMessage;
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_del_factura_compra_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->fc_empresa = $this->fc_empresa_before_qstr;
              $this->fc_tipo_comprobante = $this->fc_tipo_comprobante_before_qstr;
              $this->fc_serie = $this->fc_serie_before_qstr;
              $this->fc_autorizacion = $this->fc_autorizacion_before_qstr;
              $this->fc_comentario = $this->fc_comentario_before_qstr;
              $this->fc_usuario = $this->fc_usuario_before_qstr;
              $this->fc_aplica_ret = $this->fc_aplica_ret_before_qstr;
              $this->fc_estado = $this->fc_estado_before_qstr;
              $this->liq_estado_sri = $this->liq_estado_sri_before_qstr;
              $this->liq_error_sri = $this->liq_error_sri_before_qstr;
              $this->liq_fecha_autorizacion = $this->liq_fecha_autorizacion_before_qstr;
              $this->liq_clave = $this->liq_clave_before_qstr;
              $this->fc_aplica_propina = $this->fc_aplica_propina_before_qstr;
              $this->fc_correo_enviado = $this->fc_correo_enviado_before_qstr;
              $this->fc_sustento_gasto = $this->fc_sustento_gasto_before_qstr;
              $this->forma_pago = $this->forma_pago_before_qstr;
              $this->detalles = $this->detalles_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_log_new();
              $this->NM_gera_log_compress();

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['fc_id'])) { $this->fc_id = $NM_val_form['fc_id']; }
              elseif (isset($this->fc_id)) { $this->nm_limpa_alfa($this->fc_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_tipo_comprobante'])) { $this->fc_tipo_comprobante = $NM_val_form['fc_tipo_comprobante']; }
              elseif (isset($this->fc_tipo_comprobante)) { $this->nm_limpa_alfa($this->fc_tipo_comprobante); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_proveedor'])) { $this->fc_proveedor = $NM_val_form['fc_proveedor']; }
              elseif (isset($this->fc_proveedor)) { $this->nm_limpa_alfa($this->fc_proveedor); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_serie'])) { $this->fc_serie = $NM_val_form['fc_serie']; }
              elseif (isset($this->fc_serie)) { $this->nm_limpa_alfa($this->fc_serie); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_secuencial'])) { $this->fc_secuencial = $NM_val_form['fc_secuencial']; }
              elseif (isset($this->fc_secuencial)) { $this->nm_limpa_alfa($this->fc_secuencial); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_autorizacion'])) { $this->fc_autorizacion = $NM_val_form['fc_autorizacion']; }
              elseif (isset($this->fc_autorizacion)) { $this->nm_limpa_alfa($this->fc_autorizacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_subtotal_iva'])) { $this->fc_subtotal_iva = $NM_val_form['fc_subtotal_iva']; }
              elseif (isset($this->fc_subtotal_iva)) { $this->nm_limpa_alfa($this->fc_subtotal_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_subtotal_cero'])) { $this->fc_subtotal_cero = $NM_val_form['fc_subtotal_cero']; }
              elseif (isset($this->fc_subtotal_cero)) { $this->nm_limpa_alfa($this->fc_subtotal_cero); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_subtotal_no_objeto'])) { $this->fc_subtotal_no_objeto = $NM_val_form['fc_subtotal_no_objeto']; }
              elseif (isset($this->fc_subtotal_no_objeto)) { $this->nm_limpa_alfa($this->fc_subtotal_no_objeto); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_subtotal_excento'])) { $this->fc_subtotal_excento = $NM_val_form['fc_subtotal_excento']; }
              elseif (isset($this->fc_subtotal_excento)) { $this->nm_limpa_alfa($this->fc_subtotal_excento); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_subtotal'])) { $this->fc_subtotal = $NM_val_form['fc_subtotal']; }
              elseif (isset($this->fc_subtotal)) { $this->nm_limpa_alfa($this->fc_subtotal); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_valor_ice'])) { $this->fc_valor_ice = $NM_val_form['fc_valor_ice']; }
              elseif (isset($this->fc_valor_ice)) { $this->nm_limpa_alfa($this->fc_valor_ice); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_valor_iva'])) { $this->fc_valor_iva = $NM_val_form['fc_valor_iva']; }
              elseif (isset($this->fc_valor_iva)) { $this->nm_limpa_alfa($this->fc_valor_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_valor_irbpnr'])) { $this->fc_valor_irbpnr = $NM_val_form['fc_valor_irbpnr']; }
              elseif (isset($this->fc_valor_irbpnr)) { $this->nm_limpa_alfa($this->fc_valor_irbpnr); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_total'])) { $this->fc_total = $NM_val_form['fc_total']; }
              elseif (isset($this->fc_total)) { $this->nm_limpa_alfa($this->fc_total); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_comentario'])) { $this->fc_comentario = $NM_val_form['fc_comentario']; }
              elseif (isset($this->fc_comentario)) { $this->nm_limpa_alfa($this->fc_comentario); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_aplica_ret'])) { $this->fc_aplica_ret = $NM_val_form['fc_aplica_ret']; }
              elseif (isset($this->fc_aplica_ret)) { $this->nm_limpa_alfa($this->fc_aplica_ret); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_estado'])) { $this->fc_estado = $NM_val_form['fc_estado']; }
              elseif (isset($this->fc_estado)) { $this->nm_limpa_alfa($this->fc_estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['liq_libretin'])) { $this->liq_libretin = $NM_val_form['liq_libretin']; }
              elseif (isset($this->liq_libretin)) { $this->nm_limpa_alfa($this->liq_libretin); }
              if     (isset($NM_val_form) && isset($NM_val_form['liq_estado_sri'])) { $this->liq_estado_sri = $NM_val_form['liq_estado_sri']; }
              elseif (isset($this->liq_estado_sri)) { $this->nm_limpa_alfa($this->liq_estado_sri); }
              if     (isset($NM_val_form) && isset($NM_val_form['liq_error_sri'])) { $this->liq_error_sri = $NM_val_form['liq_error_sri']; }
              elseif (isset($this->liq_error_sri)) { $this->nm_limpa_alfa($this->liq_error_sri); }
              if     (isset($NM_val_form) && isset($NM_val_form['liq_fecha_autorizacion'])) { $this->liq_fecha_autorizacion = $NM_val_form['liq_fecha_autorizacion']; }
              elseif (isset($this->liq_fecha_autorizacion)) { $this->nm_limpa_alfa($this->liq_fecha_autorizacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['liq_clave'])) { $this->liq_clave = $NM_val_form['liq_clave']; }
              elseif (isset($this->liq_clave)) { $this->nm_limpa_alfa($this->liq_clave); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_total_descuento'])) { $this->fc_total_descuento = $NM_val_form['fc_total_descuento']; }
              elseif (isset($this->fc_total_descuento)) { $this->nm_limpa_alfa($this->fc_total_descuento); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_propina'])) { $this->fc_propina = $NM_val_form['fc_propina']; }
              elseif (isset($this->fc_propina)) { $this->nm_limpa_alfa($this->fc_propina); }
              if     (isset($NM_val_form) && isset($NM_val_form['liq_establecimiento'])) { $this->liq_establecimiento = $NM_val_form['liq_establecimiento']; }
              elseif (isset($this->liq_establecimiento)) { $this->nm_limpa_alfa($this->liq_establecimiento); }
              if     (isset($NM_val_form) && isset($NM_val_form['liq_punto_emision'])) { $this->liq_punto_emision = $NM_val_form['liq_punto_emision']; }
              elseif (isset($this->liq_punto_emision)) { $this->nm_limpa_alfa($this->liq_punto_emision); }
              if     (isset($NM_val_form) && isset($NM_val_form['liq_ambiente'])) { $this->liq_ambiente = $NM_val_form['liq_ambiente']; }
              elseif (isset($this->liq_ambiente)) { $this->nm_limpa_alfa($this->liq_ambiente); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_aplica_propina'])) { $this->fc_aplica_propina = $NM_val_form['fc_aplica_propina']; }
              elseif (isset($this->fc_aplica_propina)) { $this->nm_limpa_alfa($this->fc_aplica_propina); }
              if     (isset($NM_val_form) && isset($NM_val_form['fc_sustento_gasto'])) { $this->fc_sustento_gasto = $NM_val_form['fc_sustento_gasto']; }
              elseif (isset($this->fc_sustento_gasto)) { $this->nm_limpa_alfa($this->fc_sustento_gasto); }
              if     (isset($NM_val_form) && isset($NM_val_form['forma_pago'])) { $this->forma_pago = $NM_val_form['forma_pago']; }
              elseif (isset($this->forma_pago)) { $this->nm_limpa_alfa($this->forma_pago); }
              if     (isset($NM_val_form) && isset($NM_val_form['detalles'])) { $this->detalles = $NM_val_form['detalles']; }
              elseif (isset($this->detalles)) { $this->nm_limpa_alfa($this->detalles); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('titulo', 'fc_sustento_gasto', 'vacio', 'fc_tipo_comprobante', 'fc_fecha', 'liq_libretin', 'liq_secuencial', 'liq_tipo_libretin', 'ambiente', 'liq_establecimiento', 'liq_punto_emision', 'liq_ambiente', 'liq_estado_sri', 'liq_error_sri', 'liq_fecha_autorizacion', 'liq_clave', 'fc_estado', 'fc_serie', 'fc_secuencial', 'fc_autorizacion', 'fc_proveedor', 'fc_ruc_proveedor', 'fc_nombre_proveedor', 'fc_direccion_proveedor', 'fc_email_proveedor', 'fc_aplica_ret', 'fc_comentario', 'fc_aplica_propina', 'detalles', 'fc_subtotal', 'fc_subtotal_iva', 'fc_subtotal_cero', 'fc_subtotal_no_objeto', 'fc_subtotal_excento', 'fc_total_descuento', 'fc_valor_ice', 'fc_valor_iva', 'fc_valor_irbpnr', 'fc_propina', 'fc_total', 'forma_pago'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_pkey']); 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_del_factura_compra_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto) VALUES ($this->fc_id, '$this->fc_empresa', '$this->fc_tipo_comprobante', $this->fc_proveedor, #$this->fc_fecha#, '$this->fc_serie', $this->fc_secuencial, '$this->fc_autorizacion', $this->fc_desde, $this->fc_hasta, #$this->fc_fecha_caducidad#, $this->fc_subtotal_iva, $this->fc_subtotal_cero, $this->fc_subtotal_no_objeto, $this->fc_subtotal_excento, $this->fc_subtotal, $this->fc_valor_ice, $this->fc_valor_iva, $this->fc_valor_irbpnr, $this->fc_total, '$this->fc_comentario', '$this->fc_usuario', '$this->fc_aplica_ret', '$this->fc_estado', $this->liq_libretin, '$this->liq_estado_sri', '$this->liq_error_sri', '$this->liq_fecha_autorizacion', '$this->liq_clave', $this->fc_total_descuento, $this->fc_propina, $this->liq_establecimiento, $this->liq_punto_emision, $this->liq_ambiente, '$this->fc_aplica_propina', $this->fc_retencion, '$this->fc_correo_enviado', '$this->fc_sustento_gasto')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto) VALUES (" . $NM_seq_auto . "$this->fc_id, '$this->fc_empresa', '$this->fc_tipo_comprobante', $this->fc_proveedor, " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", '$this->fc_serie', $this->fc_secuencial, '$this->fc_autorizacion', $this->fc_desde, $this->fc_hasta, " . $this->Ini->date_delim . $this->fc_fecha_caducidad . $this->Ini->date_delim1 . ", $this->fc_subtotal_iva, $this->fc_subtotal_cero, $this->fc_subtotal_no_objeto, $this->fc_subtotal_excento, $this->fc_subtotal, $this->fc_valor_ice, $this->fc_valor_iva, $this->fc_valor_irbpnr, $this->fc_total, '$this->fc_comentario', '$this->fc_usuario', '$this->fc_aplica_ret', '$this->fc_estado', $this->liq_libretin, '$this->liq_estado_sri', '$this->liq_error_sri', '$this->liq_fecha_autorizacion', '$this->liq_clave', $this->fc_total_descuento, $this->fc_propina, $this->liq_establecimiento, $this->liq_punto_emision, $this->liq_ambiente, '$this->fc_aplica_propina', $this->fc_retencion, '$this->fc_correo_enviado', '$this->fc_sustento_gasto')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto) VALUES (" . $NM_seq_auto . "$this->fc_id, '$this->fc_empresa', '$this->fc_tipo_comprobante', $this->fc_proveedor, " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", '$this->fc_serie', $this->fc_secuencial, '$this->fc_autorizacion', $this->fc_desde, $this->fc_hasta, " . $this->Ini->date_delim . $this->fc_fecha_caducidad . $this->Ini->date_delim1 . ", $this->fc_subtotal_iva, $this->fc_subtotal_cero, $this->fc_subtotal_no_objeto, $this->fc_subtotal_excento, $this->fc_subtotal, $this->fc_valor_ice, $this->fc_valor_iva, $this->fc_valor_irbpnr, $this->fc_total, '$this->fc_comentario', '$this->fc_usuario', '$this->fc_aplica_ret', '$this->fc_estado', $this->liq_libretin, '$this->liq_estado_sri', '$this->liq_error_sri', '$this->liq_fecha_autorizacion', '$this->liq_clave', $this->fc_total_descuento, $this->fc_propina, $this->liq_establecimiento, $this->liq_punto_emision, $this->liq_ambiente, '$this->fc_aplica_propina', $this->fc_retencion, '$this->fc_correo_enviado', '$this->fc_sustento_gasto')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto) VALUES (" . $NM_seq_auto . "$this->fc_id, '$this->fc_empresa', '$this->fc_tipo_comprobante', $this->fc_proveedor, " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", '$this->fc_serie', $this->fc_secuencial, '$this->fc_autorizacion', $this->fc_desde, $this->fc_hasta, " . $this->Ini->date_delim . $this->fc_fecha_caducidad . $this->Ini->date_delim1 . ", $this->fc_subtotal_iva, $this->fc_subtotal_cero, $this->fc_subtotal_no_objeto, $this->fc_subtotal_excento, $this->fc_subtotal, $this->fc_valor_ice, $this->fc_valor_iva, $this->fc_valor_irbpnr, $this->fc_total, '$this->fc_comentario', '$this->fc_usuario', '$this->fc_aplica_ret', '$this->fc_estado', $this->liq_libretin, '$this->liq_estado_sri', '$this->liq_error_sri', '$this->liq_fecha_autorizacion', '$this->liq_clave', $this->fc_total_descuento, $this->fc_propina, $this->liq_establecimiento, $this->liq_punto_emision, $this->liq_ambiente, '$this->fc_aplica_propina', $this->fc_retencion, '$this->fc_correo_enviado', '$this->fc_sustento_gasto')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto) VALUES (" . $NM_seq_auto . "$this->fc_id, '$this->fc_empresa', '$this->fc_tipo_comprobante', $this->fc_proveedor, EXTEND('$this->fc_fecha', YEAR TO DAY), '$this->fc_serie', $this->fc_secuencial, '$this->fc_autorizacion', $this->fc_desde, $this->fc_hasta, EXTEND('$this->fc_fecha_caducidad', YEAR TO DAY), $this->fc_subtotal_iva, $this->fc_subtotal_cero, $this->fc_subtotal_no_objeto, $this->fc_subtotal_excento, $this->fc_subtotal, $this->fc_valor_ice, $this->fc_valor_iva, $this->fc_valor_irbpnr, $this->fc_total, '$this->fc_comentario', '$this->fc_usuario', '$this->fc_aplica_ret', '$this->fc_estado', $this->liq_libretin, '$this->liq_estado_sri', '$this->liq_error_sri', '$this->liq_fecha_autorizacion', '$this->liq_clave', $this->fc_total_descuento, $this->fc_propina, $this->liq_establecimiento, $this->liq_punto_emision, $this->liq_ambiente, '$this->fc_aplica_propina', $this->fc_retencion, '$this->fc_correo_enviado', '$this->fc_sustento_gasto')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto) VALUES (" . $NM_seq_auto . "$this->fc_id, '$this->fc_empresa', '$this->fc_tipo_comprobante', $this->fc_proveedor, " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", '$this->fc_serie', $this->fc_secuencial, '$this->fc_autorizacion', $this->fc_desde, $this->fc_hasta, " . $this->Ini->date_delim . $this->fc_fecha_caducidad . $this->Ini->date_delim1 . ", $this->fc_subtotal_iva, $this->fc_subtotal_cero, $this->fc_subtotal_no_objeto, $this->fc_subtotal_excento, $this->fc_subtotal, $this->fc_valor_ice, $this->fc_valor_iva, $this->fc_valor_irbpnr, $this->fc_total, '$this->fc_comentario', '$this->fc_usuario', '$this->fc_aplica_ret', '$this->fc_estado', $this->liq_libretin, '$this->liq_estado_sri', '$this->liq_error_sri', '$this->liq_fecha_autorizacion', '$this->liq_clave', $this->fc_total_descuento, $this->fc_propina, $this->liq_establecimiento, $this->liq_punto_emision, $this->liq_ambiente, '$this->fc_aplica_propina', $this->fc_retencion, '$this->fc_correo_enviado', '$this->fc_sustento_gasto')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto) VALUES (" . $NM_seq_auto . "$this->fc_id, '$this->fc_empresa', '$this->fc_tipo_comprobante', $this->fc_proveedor, " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", '$this->fc_serie', $this->fc_secuencial, '$this->fc_autorizacion', $this->fc_desde, $this->fc_hasta, " . $this->Ini->date_delim . $this->fc_fecha_caducidad . $this->Ini->date_delim1 . ", $this->fc_subtotal_iva, $this->fc_subtotal_cero, $this->fc_subtotal_no_objeto, $this->fc_subtotal_excento, $this->fc_subtotal, $this->fc_valor_ice, $this->fc_valor_iva, $this->fc_valor_irbpnr, $this->fc_total, '$this->fc_comentario', '$this->fc_usuario', '$this->fc_aplica_ret', '$this->fc_estado', $this->liq_libretin, '$this->liq_estado_sri', '$this->liq_error_sri', '$this->liq_fecha_autorizacion', '$this->liq_clave', $this->fc_total_descuento, $this->fc_propina, $this->liq_establecimiento, $this->liq_punto_emision, $this->liq_ambiente, '$this->fc_aplica_propina', $this->fc_retencion, '$this->fc_correo_enviado', '$this->fc_sustento_gasto')"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto) VALUES (" . $NM_seq_auto . "$this->fc_id, '$this->fc_empresa', '$this->fc_tipo_comprobante', $this->fc_proveedor, " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", '$this->fc_serie', $this->fc_secuencial, '$this->fc_autorizacion', $this->fc_desde, $this->fc_hasta, " . $this->Ini->date_delim . $this->fc_fecha_caducidad . $this->Ini->date_delim1 . ", $this->fc_subtotal_iva, $this->fc_subtotal_cero, $this->fc_subtotal_no_objeto, $this->fc_subtotal_excento, $this->fc_subtotal, $this->fc_valor_ice, $this->fc_valor_iva, $this->fc_valor_irbpnr, $this->fc_total, '$this->fc_comentario', '$this->fc_usuario', '$this->fc_aplica_ret', '$this->fc_estado', $this->liq_libretin, '$this->liq_estado_sri', '$this->liq_error_sri', '$this->liq_fecha_autorizacion', '$this->liq_clave', $this->fc_total_descuento, $this->fc_propina, $this->liq_establecimiento, $this->liq_punto_emision, $this->liq_ambiente, '$this->fc_aplica_propina', $this->fc_retencion, '$this->fc_correo_enviado', '$this->fc_sustento_gasto')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto) VALUES (" . $NM_seq_auto . "$this->fc_id, '$this->fc_empresa', '$this->fc_tipo_comprobante', $this->fc_proveedor, " . $this->Ini->date_delim . $this->fc_fecha . $this->Ini->date_delim1 . ", '$this->fc_serie', $this->fc_secuencial, '$this->fc_autorizacion', $this->fc_desde, $this->fc_hasta, " . $this->Ini->date_delim . $this->fc_fecha_caducidad . $this->Ini->date_delim1 . ", $this->fc_subtotal_iva, $this->fc_subtotal_cero, $this->fc_subtotal_no_objeto, $this->fc_subtotal_excento, $this->fc_subtotal, $this->fc_valor_ice, $this->fc_valor_iva, $this->fc_valor_irbpnr, $this->fc_total, '$this->fc_comentario', '$this->fc_usuario', '$this->fc_aplica_ret', '$this->fc_estado', $this->liq_libretin, '$this->liq_estado_sri', '$this->liq_error_sri', '$this->liq_fecha_autorizacion', '$this->liq_clave', $this->fc_total_descuento, $this->fc_propina, $this->liq_establecimiento, $this->liq_punto_emision, $this->liq_ambiente, '$this->fc_aplica_propina', $this->fc_retencion, '$this->fc_correo_enviado', '$this->fc_sustento_gasto')"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $dbErrorMessage = $this->Db->ErrorMsg();
                      $dbErrorCode = $this->Db->ErrorNo();
                      $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $dbErrorMessage, true);
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
                      { 
                          $this->sc_erro_insert = $dbErrorMessage;
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_del_factura_compra_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->fc_empresa = $this->fc_empresa_before_qstr;
              $this->fc_tipo_comprobante = $this->fc_tipo_comprobante_before_qstr;
              $this->fc_serie = $this->fc_serie_before_qstr;
              $this->fc_autorizacion = $this->fc_autorizacion_before_qstr;
              $this->fc_comentario = $this->fc_comentario_before_qstr;
              $this->fc_usuario = $this->fc_usuario_before_qstr;
              $this->fc_aplica_ret = $this->fc_aplica_ret_before_qstr;
              $this->fc_estado = $this->fc_estado_before_qstr;
              $this->liq_estado_sri = $this->liq_estado_sri_before_qstr;
              $this->liq_error_sri = $this->liq_error_sri_before_qstr;
              $this->liq_fecha_autorizacion = $this->liq_fecha_autorizacion_before_qstr;
              $this->liq_clave = $this->liq_clave_before_qstr;
              $this->fc_aplica_propina = $this->fc_aplica_propina_before_qstr;
              $this->fc_correo_enviado = $this->fc_correo_enviado_before_qstr;
              $this->fc_sustento_gasto = $this->fc_sustento_gasto_before_qstr;
              $this->forma_pago = $this->forma_pago_before_qstr;
              $this->detalles = $this->detalles_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->fc_empresa = $this->fc_empresa_before_qstr;
              $this->fc_tipo_comprobante = $this->fc_tipo_comprobante_before_qstr;
              $this->fc_serie = $this->fc_serie_before_qstr;
              $this->fc_autorizacion = $this->fc_autorizacion_before_qstr;
              $this->fc_comentario = $this->fc_comentario_before_qstr;
              $this->fc_usuario = $this->fc_usuario_before_qstr;
              $this->fc_aplica_ret = $this->fc_aplica_ret_before_qstr;
              $this->fc_estado = $this->fc_estado_before_qstr;
              $this->liq_estado_sri = $this->liq_estado_sri_before_qstr;
              $this->liq_error_sri = $this->liq_error_sri_before_qstr;
              $this->liq_fecha_autorizacion = $this->liq_fecha_autorizacion_before_qstr;
              $this->liq_clave = $this->liq_clave_before_qstr;
              $this->fc_aplica_propina = $this->fc_aplica_propina_before_qstr;
              $this->fc_correo_enviado = $this->fc_correo_enviado_before_qstr;
              $this->fc_sustento_gasto = $this->fc_sustento_gasto_before_qstr;
              $this->forma_pago = $this->forma_pago_before_qstr;
              $this->detalles = $this->detalles_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->nmgp_botoes['retencion'] = "on";
              $this->nmgp_botoes['enviar'] = "on";
              $this->nmgp_botoes['Nuevo'] = "on";
              $this->nmgp_botoes['ride'] = "on";
              $this->nmgp_botoes['Anular'] = "on";
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->fc_id = substr($this->Db->qstr($this->fc_id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';
          if ($bDelecaoOk)
          {
              $sDetailWhere = "fp_factura = " . $this->fc_id . "";
              $this->form_del_forma_pago_factura_compra_mob->ini_controle();
              if ($this->form_del_forma_pago_factura_compra_mob->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }
          if ($bDelecaoOk)
          {
              $sDetailWhere = "dfc_factura = " . $this->fc_id . "";
              $this->form_del_detalle_factura_compra_mob->ini_controle();
              if ($this->form_del_detalle_factura_compra_mob->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fc_id = $this->fc_id "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_del_factura_compra_mob_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              if (empty($this->sc_erro_delete)) {
                  $this->record_delete_ok = true;
              }
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
    if ("update" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['decimal_db'] == ",")
        {
           $this->nm_troca_decimal(",", ".");
        }
        $_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fc_estado = $this->fc_estado;
    $original_fc_tipo_comprobante = $this->fc_tipo_comprobante;
    $original_liq_estado_sri = $this->liq_estado_sri;
    $original_liq_libretin = $this->liq_libretin;
    $original_liq_tipo_libretin = $this->liq_tipo_libretin;
}
if (!isset($this->sc_temp_Igtech_AutorizacionInmediata)) {$this->sc_temp_Igtech_AutorizacionInmediata = (isset($_SESSION['Igtech_AutorizacionInmediata'])) ? $_SESSION['Igtech_AutorizacionInmediata'] : "";}
if (!isset($this->sc_temp_var_mensaje)) {$this->sc_temp_var_mensaje = (isset($_SESSION['var_mensaje'])) ? $_SESSION['var_mensaje'] : "";}
if (!isset($this->sc_temp_var_procesar)) {$this->sc_temp_var_procesar = (isset($_SESSION['var_procesar'])) ? $_SESSION['var_procesar'] : "";}
  if($this->sc_temp_var_procesar==true){
	if($this->fc_tipo_comprobante =='03'){
		if($this->fc_estado =='R'){
			$check_sql = "SELECT sp_del_secuencial_documento (".$this->liq_libretin .",'03',".$this->fc_id .")";
			 
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

			if (isset($this->rs[0][0])){
				if($this->rs[0][0]==0){
					
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "No se encontro un secuencial valido para esta serie";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_del_factura_compra_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_del_factura_compra_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "No se encontro un secuencial valido para esta serie";
 }
;
					if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_var_procesar)) { $_SESSION['var_procesar'] = $this->sc_temp_var_procesar;}
 if (isset($this->sc_temp_var_mensaje)) { $_SESSION['var_mensaje'] = $this->sc_temp_var_mensaje;}
 if (isset($this->sc_temp_Igtech_AutorizacionInmediata)) { $_SESSION['Igtech_AutorizacionInmediata'] = $this->sc_temp_Igtech_AutorizacionInmediata;}
    if ($this->NM_ajax_flag)
    {
        $this->NM_ajax_info['redirExit']['action'] = "form_del_factura_compra_mob_fim.php?script_case_init=" . $this->form_encode_input($this->Ini->sc_page);
        $this->NM_ajax_info['redirExit']['metodo'] = 'location';
        $this->NM_ajax_info['redirExit']['target'] = "_self";
        $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_factura_compra') . "/";
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan'])
        {
            $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_factura_compra_mob";
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan'] = false;
        }
        $_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
        form_del_factura_compra_mob_pack_ajax_response();
        exit;
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<head>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
<?php
 if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
 {
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
 }
?>
</head>
<body>
<?php
 $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_factura_compra') . "/";
 if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan'])
 {
     $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_factura_compra_mob";
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan'] = false;
 }
?>
<TABLE border="0" cellspacing="1" cellpadding="2" bgcolor="#406080" bordercolor="#406080" align="center">
 <TR bgcolor="#FF0000">
  <TD  align="left"><FONT face="Verdana, Arial, sans-serif" size="2" color="#FFFFFF"><B><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></B></FONT></TD>
 </TR>
 <TR bgcolor="#E4E8F0">
   <TD  align="center"><FONT face="Tahoma, Arial, sans-serif" size="2" color="#404040"><?php echo $this->Campos_Mens_erro ?></FONT></TD>
 </TR>
</TABLE>
<table align="center"><tr><td>
  <form name="Fexit" method=post
        action="form_del_factura_compra_mob_fim.php"
        target="_self">
    <input type=hidden name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page) ?>">
    <input type=submit value="OK">
  </form>
</td></tr></table>
</body>
</html>
<?php
   exit;
}
}
			}
			
		}
		$registra_kardex="SELECT sp_compras_al_kardex(".$this->fc_id .");";
		
     $nm_select = $registra_kardex; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		
		if($this->liq_tipo_libretin =='ELECTRONICA' and $this->liq_estado_sri <>'AUTORIZADO'){
			$this->sc_temp_var_mensaje=$this->autorizar_liquidacion($this->fc_id ,$this->sc_temp_Igtech_AutorizacionInmediata);
			$this->nm_mens_alert[] = $this->sc_temp_var_mensaje; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert($this->sc_temp_var_mensaje); }}
		
	}else{
			
		if($this->fc_estado =='R'){
			$update_sql = "UPDATE del_factura_compra 
					SET  
					   fc_estado='V',
					   liq_estado_sri='AUTORIZADO'
					WHERE
						fc_id=".$this->fc_id .";";
			
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			$update_sql = "UPDATE del_detalle_factura_compra
					SET  
					   dfc_estado='V'
					WHERE
						dfc_factura=".$this->fc_id .";";
			
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			$registra_kardex="SELECT sp_compras_al_kardex(".$this->fc_id .");";
			
     $nm_select = $registra_kardex; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		}
	}
	$this->sc_ajax_javascript('recargar_marco');
}else{
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $this->sc_temp_var_mensaje;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_del_factura_compra_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_del_factura_compra_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $this->sc_temp_var_mensaje;
 }
;
	if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_var_procesar)) { $_SESSION['var_procesar'] = $this->sc_temp_var_procesar;}
 if (isset($this->sc_temp_var_mensaje)) { $_SESSION['var_mensaje'] = $this->sc_temp_var_mensaje;}
 if (isset($this->sc_temp_Igtech_AutorizacionInmediata)) { $_SESSION['Igtech_AutorizacionInmediata'] = $this->sc_temp_Igtech_AutorizacionInmediata;}
    if ($this->NM_ajax_flag)
    {
        $this->NM_ajax_info['redirExit']['action'] = "form_del_factura_compra_mob_fim.php?script_case_init=" . $this->form_encode_input($this->Ini->sc_page);
        $this->NM_ajax_info['redirExit']['metodo'] = 'location';
        $this->NM_ajax_info['redirExit']['target'] = "_self";
        $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_factura_compra') . "/";
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan'])
        {
            $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_factura_compra_mob";
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan'] = false;
        }
        $_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
        form_del_factura_compra_mob_pack_ajax_response();
        exit;
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<head>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
<?php
 if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
 {
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
 }
?>
</head>
<body>
<?php
 $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_factura_compra') . "/";
 if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan'])
 {
     $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_factura_compra_mob";
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_outra_jan'] = false;
 }
?>
<TABLE border="0" cellspacing="1" cellpadding="2" bgcolor="#406080" bordercolor="#406080" align="center">
 <TR bgcolor="#FF0000">
  <TD  align="left"><FONT face="Verdana, Arial, sans-serif" size="2" color="#FFFFFF"><B><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></B></FONT></TD>
 </TR>
 <TR bgcolor="#E4E8F0">
   <TD  align="center"><FONT face="Tahoma, Arial, sans-serif" size="2" color="#404040"><?php echo $this->Campos_Mens_erro ?></FONT></TD>
 </TR>
</TABLE>
<table align="center"><tr><td>
  <form name="Fexit" method=post
        action="form_del_factura_compra_mob_fim.php"
        target="_self">
    <input type=hidden name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page) ?>">
    <input type=submit value="OK">
  </form>
</td></tr></table>
</body>
</html>
<?php
   exit;
}
}
if (isset($this->sc_temp_var_procesar)) { $_SESSION['var_procesar'] = $this->sc_temp_var_procesar;}
if (isset($this->sc_temp_var_mensaje)) { $_SESSION['var_mensaje'] = $this->sc_temp_var_mensaje;}
if (isset($this->sc_temp_Igtech_AutorizacionInmediata)) { $_SESSION['Igtech_AutorizacionInmediata'] = $this->sc_temp_Igtech_AutorizacionInmediata;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fc_estado != $this->fc_estado || (isset($bFlagRead_fc_estado) && $bFlagRead_fc_estado)))
    {
        $this->ajax_return_values_fc_estado(true);
    }
    if (($original_fc_tipo_comprobante != $this->fc_tipo_comprobante || (isset($bFlagRead_fc_tipo_comprobante) && $bFlagRead_fc_tipo_comprobante)))
    {
        $this->ajax_return_values_fc_tipo_comprobante(true);
    }
    if (($original_liq_estado_sri != $this->liq_estado_sri || (isset($bFlagRead_liq_estado_sri) && $bFlagRead_liq_estado_sri)))
    {
        $this->ajax_return_values_liq_estado_sri(true);
    }
    if (($original_liq_libretin != $this->liq_libretin || (isset($bFlagRead_liq_libretin) && $bFlagRead_liq_libretin)))
    {
        $this->ajax_return_values_liq_libretin(true);
    }
    if (($original_liq_tipo_libretin != $this->liq_tipo_libretin || (isset($bFlagRead_liq_tipo_libretin) && $bFlagRead_liq_tipo_libretin)))
    {
        $this->ajax_return_values_liq_tipo_libretin(true);
    }
}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $salva_opcao ; 
          if ($salva_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->sc_evento = ""; 
          $this->NM_rollback_db(); 
          return; 
      }
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['decimal_db'] == ",")
   {
       $this->nm_troca_decimal(".", ",");
   }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['parms'] = "fc_id?#?$this->fc_id?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->fc_id = null === $this->fc_id ? null : substr($this->Db->qstr($this->fc_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter'] . ")";
          }
      }
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "inicio")
      { 
          $this->nmgp_opcao = "igual"; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, str_replace (convert(char(10),fc_fecha,102), '.', '-') + ' ' + convert(char(8),fc_fecha,20), fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, str_replace (convert(char(10),fc_fecha_caducidad,102), '.', '-') + ' ' + convert(char(8),fc_fecha_caducidad,20), fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, convert(char(23),fc_fecha,121), fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, convert(char(23),fc_fecha_caducidad,121), fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, EXTEND(fc_fecha, YEAR TO DAY), fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, EXTEND(fc_fecha_caducidad, YEAR TO DAY), fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT fc_id, fc_empresa, fc_tipo_comprobante, fc_proveedor, fc_fecha, fc_serie, fc_secuencial, fc_autorizacion, fc_desde, fc_hasta, fc_fecha_caducidad, fc_subtotal_iva, fc_subtotal_cero, fc_subtotal_no_objeto, fc_subtotal_excento, fc_subtotal, fc_valor_ice, fc_valor_iva, fc_valor_irbpnr, fc_total, fc_comentario, fc_usuario, fc_aplica_ret, fc_estado, liq_libretin, liq_estado_sri, liq_error_sri, liq_fecha_autorizacion, liq_clave, fc_total_descuento, fc_propina, liq_establecimiento, liq_punto_emision, liq_ambiente, fc_aplica_propina, fc_retencion, fc_correo_enviado, fc_sustento_gasto from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = "(fc_id=" . $_SESSION['var_id_factura'] . ")";
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (!empty($sc_where))
              {
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  {
                     $aWhere[] = "fc_id = $this->fc_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                     $aWhere[] = "fc_id = $this->fc_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                     $aWhere[] = "fc_id = $this->fc_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                     $aWhere[] = "fc_id = $this->fc_id"; 
                  }  
                  else  
                  {
                     $aWhere[] = "fc_id = $this->fc_id"; 
                  }
              } 
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "fc_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start']) ;  
              } 
          } 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['retencion'] = $this->nmgp_botoes['retencion'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['enviar'] = $this->nmgp_botoes['enviar'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['Nuevo'] = $this->nmgp_botoes['Nuevo'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes['ride'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes['Anular'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes['update'] = "off";
              $this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes['delete'] = "off";
              return; 
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->fc_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['fc_id'] = $this->fc_id;
              $this->fc_empresa = $rs->fields[1] ; 
              $this->nmgp_dados_select['fc_empresa'] = $this->fc_empresa;
              $this->fc_tipo_comprobante = $rs->fields[2] ; 
              $this->nmgp_dados_select['fc_tipo_comprobante'] = $this->fc_tipo_comprobante;
              $this->fc_proveedor = $rs->fields[3] ; 
              $this->nmgp_dados_select['fc_proveedor'] = $this->fc_proveedor;
              $this->fc_fecha = $rs->fields[4] ; 
              $this->nmgp_dados_select['fc_fecha'] = $this->fc_fecha;
              $this->fc_serie = $rs->fields[5] ; 
              $this->nmgp_dados_select['fc_serie'] = $this->fc_serie;
              $this->fc_secuencial = $rs->fields[6] ; 
              $this->nmgp_dados_select['fc_secuencial'] = $this->fc_secuencial;
              $this->fc_autorizacion = $rs->fields[7] ; 
              $this->nmgp_dados_select['fc_autorizacion'] = $this->fc_autorizacion;
              $this->fc_desde = $rs->fields[8] ; 
              $this->nmgp_dados_select['fc_desde'] = $this->fc_desde;
              $this->fc_hasta = $rs->fields[9] ; 
              $this->nmgp_dados_select['fc_hasta'] = $this->fc_hasta;
              $this->fc_fecha_caducidad = $rs->fields[10] ; 
              $this->nmgp_dados_select['fc_fecha_caducidad'] = $this->fc_fecha_caducidad;
              $this->fc_subtotal_iva = $rs->fields[11] ; 
              $this->nmgp_dados_select['fc_subtotal_iva'] = $this->fc_subtotal_iva;
              $this->fc_subtotal_cero = $rs->fields[12] ; 
              $this->nmgp_dados_select['fc_subtotal_cero'] = $this->fc_subtotal_cero;
              $this->fc_subtotal_no_objeto = $rs->fields[13] ; 
              $this->nmgp_dados_select['fc_subtotal_no_objeto'] = $this->fc_subtotal_no_objeto;
              $this->fc_subtotal_excento = $rs->fields[14] ; 
              $this->nmgp_dados_select['fc_subtotal_excento'] = $this->fc_subtotal_excento;
              $this->fc_subtotal = $rs->fields[15] ; 
              $this->nmgp_dados_select['fc_subtotal'] = $this->fc_subtotal;
              $this->fc_valor_ice = $rs->fields[16] ; 
              $this->nmgp_dados_select['fc_valor_ice'] = $this->fc_valor_ice;
              $this->fc_valor_iva = $rs->fields[17] ; 
              $this->nmgp_dados_select['fc_valor_iva'] = $this->fc_valor_iva;
              $this->fc_valor_irbpnr = $rs->fields[18] ; 
              $this->nmgp_dados_select['fc_valor_irbpnr'] = $this->fc_valor_irbpnr;
              $this->fc_total = $rs->fields[19] ; 
              $this->nmgp_dados_select['fc_total'] = $this->fc_total;
              $this->fc_comentario = $rs->fields[20] ; 
              $this->nmgp_dados_select['fc_comentario'] = $this->fc_comentario;
              $this->fc_usuario = $rs->fields[21] ; 
              $this->nmgp_dados_select['fc_usuario'] = $this->fc_usuario;
              $this->fc_aplica_ret = $rs->fields[22] ; 
              $this->nmgp_dados_select['fc_aplica_ret'] = $this->fc_aplica_ret;
              $this->fc_estado = $rs->fields[23] ; 
              $this->nmgp_dados_select['fc_estado'] = $this->fc_estado;
              $this->liq_libretin = $rs->fields[24] ; 
              $this->nmgp_dados_select['liq_libretin'] = $this->liq_libretin;
              $this->liq_estado_sri = $rs->fields[25] ; 
              $this->nmgp_dados_select['liq_estado_sri'] = $this->liq_estado_sri;
              $this->liq_error_sri = $rs->fields[26] ; 
              $this->nmgp_dados_select['liq_error_sri'] = $this->liq_error_sri;
              $this->liq_fecha_autorizacion = $rs->fields[27] ; 
              $this->nmgp_dados_select['liq_fecha_autorizacion'] = $this->liq_fecha_autorizacion;
              $this->liq_clave = $rs->fields[28] ; 
              $this->nmgp_dados_select['liq_clave'] = $this->liq_clave;
              $this->fc_total_descuento = $rs->fields[29] ; 
              $this->nmgp_dados_select['fc_total_descuento'] = $this->fc_total_descuento;
              $this->fc_propina = $rs->fields[30] ; 
              $this->nmgp_dados_select['fc_propina'] = $this->fc_propina;
              $this->liq_establecimiento = $rs->fields[31] ; 
              $this->nmgp_dados_select['liq_establecimiento'] = $this->liq_establecimiento;
              $this->liq_punto_emision = $rs->fields[32] ; 
              $this->nmgp_dados_select['liq_punto_emision'] = $this->liq_punto_emision;
              $this->liq_ambiente = $rs->fields[33] ; 
              $this->nmgp_dados_select['liq_ambiente'] = $this->liq_ambiente;
              $this->fc_aplica_propina = $rs->fields[34] ; 
              $this->nmgp_dados_select['fc_aplica_propina'] = $this->fc_aplica_propina;
              $this->fc_retencion = $rs->fields[35] ; 
              $this->nmgp_dados_select['fc_retencion'] = $this->fc_retencion;
              $this->fc_correo_enviado = $rs->fields[36] ; 
              $this->nmgp_dados_select['fc_correo_enviado'] = $this->fc_correo_enviado;
              $this->fc_sustento_gasto = $rs->fields[37] ; 
              $this->nmgp_dados_select['fc_sustento_gasto'] = $this->fc_sustento_gasto;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->fc_id = (string)$this->fc_id; 
              $this->fc_proveedor = (string)$this->fc_proveedor; 
              $this->fc_secuencial = (string)$this->fc_secuencial; 
              $this->fc_desde = (string)$this->fc_desde; 
              $this->fc_hasta = (string)$this->fc_hasta; 
              $this->fc_subtotal_iva = (string)$this->fc_subtotal_iva; 
              $this->fc_subtotal_cero = (string)$this->fc_subtotal_cero; 
              $this->fc_subtotal_no_objeto = (string)$this->fc_subtotal_no_objeto; 
              $this->fc_subtotal_excento = (string)$this->fc_subtotal_excento; 
              $this->fc_subtotal = (string)$this->fc_subtotal; 
              $this->fc_valor_ice = (string)$this->fc_valor_ice; 
              $this->fc_valor_iva = (string)$this->fc_valor_iva; 
              $this->fc_valor_irbpnr = (string)$this->fc_valor_irbpnr; 
              $this->fc_total = (string)$this->fc_total; 
              $this->liq_libretin = (string)$this->liq_libretin; 
              $this->fc_total_descuento = (string)$this->fc_total_descuento; 
              $this->fc_propina = (string)$this->fc_propina; 
              $this->liq_establecimiento = (string)$this->liq_establecimiento; 
              $this->liq_punto_emision = (string)$this->liq_punto_emision; 
              $this->liq_ambiente = (string)$this->liq_ambiente; 
              $this->fc_retencion = (string)$this->fc_retencion; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['parms'] = "fc_id?#?$this->fc_id?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['reg_start'] < $qt_geral_reg_form_del_factura_compra_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opcao']   = '';
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->fc_id = "";  
              $this->nmgp_dados_form["fc_id"] = $this->fc_id;
              $this->fc_empresa = "";  
              $this->nmgp_dados_form["fc_empresa"] = $this->fc_empresa;
              $this->fc_tipo_comprobante = "";  
              $this->nmgp_dados_form["fc_tipo_comprobante"] = $this->fc_tipo_comprobante;
              $this->fc_proveedor = "";  
              $this->nmgp_dados_form["fc_proveedor"] = $this->fc_proveedor;
              $this->fc_fecha = "";  
              $this->fc_fecha_hora = "" ;  
              $this->nmgp_dados_form["fc_fecha"] = $this->fc_fecha;
              $this->fc_serie = "";  
              $this->nmgp_dados_form["fc_serie"] = $this->fc_serie;
              $this->fc_secuencial = "";  
              $this->nmgp_dados_form["fc_secuencial"] = $this->fc_secuencial;
              $this->fc_autorizacion = "";  
              $this->nmgp_dados_form["fc_autorizacion"] = $this->fc_autorizacion;
              $this->fc_desde = "";  
              $this->nmgp_dados_form["fc_desde"] = $this->fc_desde;
              $this->fc_hasta = "";  
              $this->nmgp_dados_form["fc_hasta"] = $this->fc_hasta;
              $this->fc_fecha_caducidad = "";  
              $this->fc_fecha_caducidad_hora = "" ;  
              $this->nmgp_dados_form["fc_fecha_caducidad"] = $this->fc_fecha_caducidad;
              $this->fc_subtotal_iva = "";  
              $this->nmgp_dados_form["fc_subtotal_iva"] = $this->fc_subtotal_iva;
              $this->fc_subtotal_cero = "";  
              $this->nmgp_dados_form["fc_subtotal_cero"] = $this->fc_subtotal_cero;
              $this->fc_subtotal_no_objeto = "";  
              $this->nmgp_dados_form["fc_subtotal_no_objeto"] = $this->fc_subtotal_no_objeto;
              $this->fc_subtotal_excento = "";  
              $this->nmgp_dados_form["fc_subtotal_excento"] = $this->fc_subtotal_excento;
              $this->fc_subtotal = "";  
              $this->nmgp_dados_form["fc_subtotal"] = $this->fc_subtotal;
              $this->fc_valor_ice = "";  
              $this->nmgp_dados_form["fc_valor_ice"] = $this->fc_valor_ice;
              $this->fc_valor_iva = "";  
              $this->nmgp_dados_form["fc_valor_iva"] = $this->fc_valor_iva;
              $this->fc_valor_irbpnr = "";  
              $this->nmgp_dados_form["fc_valor_irbpnr"] = $this->fc_valor_irbpnr;
              $this->fc_total = "";  
              $this->nmgp_dados_form["fc_total"] = $this->fc_total;
              $this->fc_comentario = "";  
              $this->nmgp_dados_form["fc_comentario"] = $this->fc_comentario;
              $this->fc_usuario = "";  
              $this->nmgp_dados_form["fc_usuario"] = $this->fc_usuario;
              $this->fc_aplica_ret = "S";  
              $this->nmgp_dados_form["fc_aplica_ret"] = $this->fc_aplica_ret;
              $this->fc_estado = "";  
              $this->nmgp_dados_form["fc_estado"] = $this->fc_estado;
              $this->liq_libretin = "";  
              $this->nmgp_dados_form["liq_libretin"] = $this->liq_libretin;
              $this->liq_estado_sri = "";  
              $this->nmgp_dados_form["liq_estado_sri"] = $this->liq_estado_sri;
              $this->liq_error_sri = "";  
              $this->nmgp_dados_form["liq_error_sri"] = $this->liq_error_sri;
              $this->liq_fecha_autorizacion = "";  
              $this->nmgp_dados_form["liq_fecha_autorizacion"] = $this->liq_fecha_autorizacion;
              $this->liq_clave = "";  
              $this->nmgp_dados_form["liq_clave"] = $this->liq_clave;
              $this->fc_total_descuento = "";  
              $this->nmgp_dados_form["fc_total_descuento"] = $this->fc_total_descuento;
              $this->fc_propina = "";  
              $this->nmgp_dados_form["fc_propina"] = $this->fc_propina;
              $this->liq_establecimiento = "";  
              $this->nmgp_dados_form["liq_establecimiento"] = $this->liq_establecimiento;
              $this->liq_punto_emision = "";  
              $this->nmgp_dados_form["liq_punto_emision"] = $this->liq_punto_emision;
              $this->liq_ambiente = "";  
              $this->nmgp_dados_form["liq_ambiente"] = $this->liq_ambiente;
              $this->fc_aplica_propina = "";  
              $this->nmgp_dados_form["fc_aplica_propina"] = $this->fc_aplica_propina;
              $this->fc_retencion = "";  
              $this->nmgp_dados_form["fc_retencion"] = $this->fc_retencion;
              $this->fc_correo_enviado = "";  
              $this->nmgp_dados_form["fc_correo_enviado"] = $this->fc_correo_enviado;
              $this->fc_sustento_gasto = "";  
              $this->nmgp_dados_form["fc_sustento_gasto"] = $this->fc_sustento_gasto;
              $this->fc_email_proveedor = "";  
              $this->nmgp_dados_form["fc_email_proveedor"] = $this->fc_email_proveedor;
              $this->fc_nombre_proveedor = "";  
              $this->nmgp_dados_form["fc_nombre_proveedor"] = $this->fc_nombre_proveedor;
              $this->titulo = "";  
              $this->nmgp_dados_form["titulo"] = $this->titulo;
              $this->ambiente = "";  
              $this->nmgp_dados_form["ambiente"] = $this->ambiente;
              $this->forma_pago = "";  
              $this->nmgp_dados_form["forma_pago"] = $this->forma_pago;
              $this->detalles = "";  
              $this->nmgp_dados_form["detalles"] = $this->detalles;
              $this->liq_tipo_libretin = "";  
              $this->nmgp_dados_form["liq_tipo_libretin"] = $this->liq_tipo_libretin;
              $this->fc_ruc_proveedor = "";  
              $this->nmgp_dados_form["fc_ruc_proveedor"] = $this->fc_ruc_proveedor;
              $this->liq_secuencial = "";  
              $this->nmgp_dados_form["liq_secuencial"] = $this->liq_secuencial;
              $this->fc_direccion_proveedor = "";  
              $this->nmgp_dados_form["fc_direccion_proveedor"] = $this->fc_direccion_proveedor;
              $this->vacio = "";  
              $this->nmgp_dados_form["vacio"] = $this->vacio;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_factura_compra_mob']['embutida_parms'] = "var_factura*scin" . $this->nmgp_dados_form['fc_id'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_forma_pago_factura_compra_mob']['embutida_parms'] = "var_factura*scin" . $this->nmgp_dados_form['fc_id'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
  }
// 
   function NM_gera_log_key($evt) 
   {
       $this->SC_log_arr = array();
       $this->SC_log_atv = true;
       if ($evt == "incluir")
       {
           $this->SC_log_evt = "insert";
       }
       if ($evt == "alterar")
       {
           $this->SC_log_evt = "update";
       }
       if ($evt == "excluir")
       {
           $this->SC_log_evt = "delete";
       }
       $this->SC_log_arr['keys']['fc_id'] =  $this->fc_id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dados_select'];
           $this->SC_log_arr['fields']['fc_empresa']['0'] =  $nmgp_dados_select['fc_empresa'];
           $this->SC_log_arr['fields']['fc_tipo_comprobante']['0'] =  $nmgp_dados_select['fc_tipo_comprobante'];
           $this->SC_log_arr['fields']['fc_proveedor']['0'] =  $nmgp_dados_select['fc_proveedor'];
           $this->SC_log_arr['fields']['fc_fecha']['0'] =  $nmgp_dados_select['fc_fecha'];
           $this->SC_log_arr['fields']['fc_serie']['0'] =  $nmgp_dados_select['fc_serie'];
           $this->SC_log_arr['fields']['fc_secuencial']['0'] =  $nmgp_dados_select['fc_secuencial'];
           $this->SC_log_arr['fields']['fc_autorizacion']['0'] =  $nmgp_dados_select['fc_autorizacion'];
           $this->SC_log_arr['fields']['fc_desde']['0'] =  $nmgp_dados_select['fc_desde'];
           $this->SC_log_arr['fields']['fc_hasta']['0'] =  $nmgp_dados_select['fc_hasta'];
           $this->SC_log_arr['fields']['fc_fecha_caducidad']['0'] =  $nmgp_dados_select['fc_fecha_caducidad'];
           $this->SC_log_arr['fields']['fc_subtotal_iva']['0'] =  $nmgp_dados_select['fc_subtotal_iva'];
           $this->SC_log_arr['fields']['fc_subtotal_cero']['0'] =  $nmgp_dados_select['fc_subtotal_cero'];
           $this->SC_log_arr['fields']['fc_subtotal_no_objeto']['0'] =  $nmgp_dados_select['fc_subtotal_no_objeto'];
           $this->SC_log_arr['fields']['fc_subtotal_excento']['0'] =  $nmgp_dados_select['fc_subtotal_excento'];
           $this->SC_log_arr['fields']['fc_subtotal']['0'] =  $nmgp_dados_select['fc_subtotal'];
           $this->SC_log_arr['fields']['fc_valor_ice']['0'] =  $nmgp_dados_select['fc_valor_ice'];
           $this->SC_log_arr['fields']['fc_valor_iva']['0'] =  $nmgp_dados_select['fc_valor_iva'];
           $this->SC_log_arr['fields']['fc_valor_irbpnr']['0'] =  $nmgp_dados_select['fc_valor_irbpnr'];
           $this->SC_log_arr['fields']['fc_total']['0'] =  $nmgp_dados_select['fc_total'];
           $this->SC_log_arr['fields']['fc_comentario']['0'] =  $nmgp_dados_select['fc_comentario'];
           $this->SC_log_arr['fields']['fc_usuario']['0'] =  $nmgp_dados_select['fc_usuario'];
           $this->SC_log_arr['fields']['fc_aplica_ret']['0'] =  $nmgp_dados_select['fc_aplica_ret'];
           $this->SC_log_arr['fields']['fc_estado']['0'] =  $nmgp_dados_select['fc_estado'];
           $this->SC_log_arr['fields']['liq_libretin']['0'] =  $nmgp_dados_select['liq_libretin'];
           $this->SC_log_arr['fields']['liq_estado_sri']['0'] =  $nmgp_dados_select['liq_estado_sri'];
           $this->SC_log_arr['fields']['liq_error_sri']['0'] =  $nmgp_dados_select['liq_error_sri'];
           $this->SC_log_arr['fields']['liq_fecha_autorizacion']['0'] =  $nmgp_dados_select['liq_fecha_autorizacion'];
           $this->SC_log_arr['fields']['liq_clave']['0'] =  $nmgp_dados_select['liq_clave'];
           $this->SC_log_arr['fields']['fc_total_descuento']['0'] =  $nmgp_dados_select['fc_total_descuento'];
           $this->SC_log_arr['fields']['fc_propina']['0'] =  $nmgp_dados_select['fc_propina'];
           $this->SC_log_arr['fields']['liq_establecimiento']['0'] =  $nmgp_dados_select['liq_establecimiento'];
           $this->SC_log_arr['fields']['liq_punto_emision']['0'] =  $nmgp_dados_select['liq_punto_emision'];
           $this->SC_log_arr['fields']['liq_ambiente']['0'] =  $nmgp_dados_select['liq_ambiente'];
           $this->SC_log_arr['fields']['fc_aplica_propina']['0'] =  $nmgp_dados_select['fc_aplica_propina'];
           $this->SC_log_arr['fields']['fc_retencion']['0'] =  $nmgp_dados_select['fc_retencion'];
           $this->SC_log_arr['fields']['fc_correo_enviado']['0'] =  $nmgp_dados_select['fc_correo_enviado'];
           $this->SC_log_arr['fields']['fc_sustento_gasto']['0'] =  $nmgp_dados_select['fc_sustento_gasto'];
           $this->SC_log_arr['fields']['forma_pago']['0'] =  $nmgp_dados_select['forma_pago'];
           $this->SC_log_arr['fields']['detalles']['0'] =  $nmgp_dados_select['detalles'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['fc_empresa']['1'] =  $this->fc_empresa;
       $this->SC_log_arr['fields']['fc_tipo_comprobante']['1'] =  $this->fc_tipo_comprobante;
       $this->SC_log_arr['fields']['fc_proveedor']['1'] =  $this->fc_proveedor;
       $this->SC_log_arr['fields']['fc_fecha']['1'] =  $this->fc_fecha;
       $this->SC_log_arr['fields']['fc_serie']['1'] =  $this->fc_serie;
       $this->SC_log_arr['fields']['fc_secuencial']['1'] =  $this->fc_secuencial;
       $this->SC_log_arr['fields']['fc_autorizacion']['1'] =  $this->fc_autorizacion;
       $this->SC_log_arr['fields']['fc_desde']['1'] =  $this->fc_desde;
       $this->SC_log_arr['fields']['fc_hasta']['1'] =  $this->fc_hasta;
       $this->SC_log_arr['fields']['fc_fecha_caducidad']['1'] =  $this->fc_fecha_caducidad;
       $this->SC_log_arr['fields']['fc_subtotal_iva']['1'] =  $this->fc_subtotal_iva;
       $this->SC_log_arr['fields']['fc_subtotal_cero']['1'] =  $this->fc_subtotal_cero;
       $this->SC_log_arr['fields']['fc_subtotal_no_objeto']['1'] =  $this->fc_subtotal_no_objeto;
       $this->SC_log_arr['fields']['fc_subtotal_excento']['1'] =  $this->fc_subtotal_excento;
       $this->SC_log_arr['fields']['fc_subtotal']['1'] =  $this->fc_subtotal;
       $this->SC_log_arr['fields']['fc_valor_ice']['1'] =  $this->fc_valor_ice;
       $this->SC_log_arr['fields']['fc_valor_iva']['1'] =  $this->fc_valor_iva;
       $this->SC_log_arr['fields']['fc_valor_irbpnr']['1'] =  $this->fc_valor_irbpnr;
       $this->SC_log_arr['fields']['fc_total']['1'] =  $this->fc_total;
       $this->SC_log_arr['fields']['fc_comentario']['1'] =  $this->fc_comentario;
       $this->SC_log_arr['fields']['fc_usuario']['1'] =  $this->fc_usuario;
       $this->SC_log_arr['fields']['fc_aplica_ret']['1'] =  $this->fc_aplica_ret;
       $this->SC_log_arr['fields']['fc_estado']['1'] =  $this->fc_estado;
       $this->SC_log_arr['fields']['liq_libretin']['1'] =  $this->liq_libretin;
       $this->SC_log_arr['fields']['liq_estado_sri']['1'] =  $this->liq_estado_sri;
       $this->SC_log_arr['fields']['liq_error_sri']['1'] =  $this->liq_error_sri;
       $this->SC_log_arr['fields']['liq_fecha_autorizacion']['1'] =  $this->liq_fecha_autorizacion;
       $this->SC_log_arr['fields']['liq_clave']['1'] =  $this->liq_clave;
       $this->SC_log_arr['fields']['fc_total_descuento']['1'] =  $this->fc_total_descuento;
       $this->SC_log_arr['fields']['fc_propina']['1'] =  $this->fc_propina;
       $this->SC_log_arr['fields']['liq_establecimiento']['1'] =  $this->liq_establecimiento;
       $this->SC_log_arr['fields']['liq_punto_emision']['1'] =  $this->liq_punto_emision;
       $this->SC_log_arr['fields']['liq_ambiente']['1'] =  $this->liq_ambiente;
       $this->SC_log_arr['fields']['fc_aplica_propina']['1'] =  $this->fc_aplica_propina;
       $this->SC_log_arr['fields']['fc_retencion']['1'] =  $this->fc_retencion;
       $this->SC_log_arr['fields']['fc_correo_enviado']['1'] =  $this->fc_correo_enviado;
       $this->SC_log_arr['fields']['fc_sustento_gasto']['1'] =  $this->fc_sustento_gasto;
       $this->SC_log_arr['fields']['forma_pago']['1'] =  $this->forma_pago;
       $this->SC_log_arr['fields']['detalles']['1'] =  $this->detalles;
   }
// 
   function NM_gera_log_compress() 
   {
       foreach ($this->SC_log_arr['fields'] as $fild => $data_f)
       {
           if ($data_f[0] == $data_f[1] || ($data_f[0] == "" && $data_f[1] == "null"))
           {
               unset($this->SC_log_arr['fields'][$fild]);
           }
       }
   }
// 
   function NM_gera_log_output() 
   {
       $Log_output = "";
       $prim_delim = "";
       $Log_labels = array();
       $Log_labels['fc_empresa'] =  "{lang_empresa}";
       $Log_labels['fc_tipo_comprobante'] =  "{lang_tipo_comprobante}";
       $Log_labels['fc_proveedor'] =  "{lang_proveedor}";
       $Log_labels['fc_fecha'] =  "{lang_fecha}";
       $Log_labels['fc_serie'] =  "{lang_serie_sri}";
       $Log_labels['fc_secuencial'] =  "{lang_secuencial}";
       $Log_labels['fc_autorizacion'] =  "{lang_autorizacion}";
       $Log_labels['fc_desde'] =  "{lang_desde}";
       $Log_labels['fc_hasta'] =  "{lang_hasta}";
       $Log_labels['fc_fecha_caducidad'] =  "{lang_fecha_caducidad}";
       $Log_labels['fc_subtotal_iva'] =  "{lang_subtotal_iva}";
       $Log_labels['fc_subtotal_cero'] =  "{lang_subtotal_cero}";
       $Log_labels['fc_subtotal_no_objeto'] =  "{lang_subtotal_no_objeto}";
       $Log_labels['fc_subtotal_excento'] =  "{lang_subtotal_exento}";
       $Log_labels['fc_subtotal'] =  "{lang_subtotal_sin_impuesto}";
       $Log_labels['fc_valor_ice'] =  "{lang_ice}";
       $Log_labels['fc_valor_iva'] =  "{lang_iva}";
       $Log_labels['fc_valor_irbpnr'] =  "{lang_irbpnr}";
       $Log_labels['fc_total'] =  "{lang_total_pagar}";
       $Log_labels['fc_comentario'] =  "{lang_comentario}";
       $Log_labels['fc_usuario'] =  "{lang_usuario}";
       $Log_labels['fc_aplica_ret'] =  "{lang_aplica_retencion}";
       $Log_labels['fc_estado'] =  "Fc Estado";
       $Log_labels['liq_libretin'] =  "{lang_serie_sri}";
       $Log_labels['liq_estado_sri'] =  "Liq Estado Sri";
       $Log_labels['liq_error_sri'] =  "Liq Error Sri";
       $Log_labels['liq_fecha_autorizacion'] =  "Liq Fecha Autorizacion";
       $Log_labels['liq_clave'] =  "Liq Clave";
       $Log_labels['fc_total_descuento'] =  "{lang_descuento}";
       $Log_labels['fc_propina'] =  "{lang_propina}";
       $Log_labels['liq_establecimiento'] =  "Liq Establecimiento";
       $Log_labels['liq_punto_emision'] =  "Liq Punto Emision";
       $Log_labels['liq_ambiente'] =  "Liq Ambiente";
       $Log_labels['fc_aplica_propina'] =  "{lang_dar_propina}";
       $Log_labels['fc_retencion'] =  "Fc Retencion";
       $Log_labels['fc_correo_enviado'] =  "Fc Correo Enviado";
       $Log_labels['fc_sustento_gasto'] =  "{lang_sustento_tributario}";
       $Log_labels['forma_pago'] =  "forma_pago";
       $Log_labels['detalles'] =  "detalles";
       foreach ($this->SC_log_arr as $type => $dats)
       {
           if ($type == "keys")
           {
               $Log_output .= "--> keys <-- ";
               foreach ($dats as $key => $data)
               {
                   $Log_output .=  $prim_delim . $key . " : " . $data;
                   $prim_delim  = "||";
               }
           }
           if ($type == "fields")
           {
               $Log_output .= $prim_delim . "--> fields <-- ";
               $prim_delim = "";
               if (empty($dats) && $this->SC_log_evt == "update")
               {
                   return;
               }
               foreach ($dats as $key => $data)
               {
                   foreach ($data as $tp => $val)
                   {
                      $tpok = ($tp == 0) ? " (old) " : " (new) ";
                      $Log_output .= $prim_delim . $key . $tpok . " : " . $val;
                      $prim_delim  = "||";
                   }
                   $Log_output .= $prim_delim . $key . " (label) " . " : " . $Log_labels[$key];
               }
           }
       }
       $this->NM_gera_log_insert("Scriptcase", $this->SC_log_evt, $Log_output);
   }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function fc_proveedor_onChange()
{
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
$original_fc_proveedor = $this->fc_proveedor;
$original_fc_nombre_proveedor = $this->fc_nombre_proveedor;
$original_fc_direccion_proveedor = $this->fc_direccion_proveedor;
$original_fc_email_proveedor = $this->fc_email_proveedor;
$original_fc_ruc_proveedor = $this->fc_ruc_proveedor;

$check_sql = "SELECT
					pr_nombre,
					pr_direccion,
					pr_email,
					pr_identificacion,
					pr_retencion_iva 
				FROM
					del_proveedor
			  where pr_id = " . $this->fc_proveedor  ;
 
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
    $this->fc_nombre_proveedor  = $this->rs[0][0];
    $this->fc_direccion_proveedor  = $this->rs[0][1];
	$this->fc_email_proveedor =$this->rs[0][2];
	$this->fc_ruc_proveedor =$this->rs[0][3];
}



$modificado_fc_proveedor = $this->fc_proveedor;
$modificado_fc_nombre_proveedor = $this->fc_nombre_proveedor;
$modificado_fc_direccion_proveedor = $this->fc_direccion_proveedor;
$modificado_fc_email_proveedor = $this->fc_email_proveedor;
$modificado_fc_ruc_proveedor = $this->fc_ruc_proveedor;
$this->nm_formatar_campos('fc_proveedor', 'fc_nombre_proveedor', 'fc_direccion_proveedor', 'fc_email_proveedor', 'fc_ruc_proveedor');
if ($original_fc_proveedor !== $modificado_fc_proveedor || isset($this->nmgp_cmp_readonly['fc_proveedor']) || (isset($bFlagRead_fc_proveedor) && $bFlagRead_fc_proveedor))
{
    $this->ajax_return_values_fc_proveedor(true);
}
if ($original_fc_nombre_proveedor !== $modificado_fc_nombre_proveedor || isset($this->nmgp_cmp_readonly['fc_nombre_proveedor']) || (isset($bFlagRead_fc_nombre_proveedor) && $bFlagRead_fc_nombre_proveedor))
{
    $this->ajax_return_values_fc_nombre_proveedor(true);
}
if ($original_fc_direccion_proveedor !== $modificado_fc_direccion_proveedor || isset($this->nmgp_cmp_readonly['fc_direccion_proveedor']) || (isset($bFlagRead_fc_direccion_proveedor) && $bFlagRead_fc_direccion_proveedor))
{
    $this->ajax_return_values_fc_direccion_proveedor(true);
}
if ($original_fc_email_proveedor !== $modificado_fc_email_proveedor || isset($this->nmgp_cmp_readonly['fc_email_proveedor']) || (isset($bFlagRead_fc_email_proveedor) && $bFlagRead_fc_email_proveedor))
{
    $this->ajax_return_values_fc_email_proveedor(true);
}
if ($original_fc_ruc_proveedor !== $modificado_fc_ruc_proveedor || isset($this->nmgp_cmp_readonly['fc_ruc_proveedor']) || (isset($bFlagRead_fc_ruc_proveedor) && $bFlagRead_fc_ruc_proveedor))
{
    $this->ajax_return_values_fc_ruc_proveedor(true);
}
$this->NM_ajax_info['event_field'] = 'fc';
form_del_factura_compra_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function fc_aplica_propina_onChange()
{
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
$original_fc_aplica_propina = $this->fc_aplica_propina;
$original_fc_subtotal = $this->fc_subtotal;
$original_fc_subtotal_iva = $this->fc_subtotal_iva;
$original_fc_subtotal_cero = $this->fc_subtotal_cero;
$original_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
$original_fc_subtotal_excento = $this->fc_subtotal_excento;
$original_fc_total_descuento = $this->fc_total_descuento;
$original_fc_valor_ice = $this->fc_valor_ice;
$original_fc_valor_iva = $this->fc_valor_iva;
$original_fc_valor_irbpnr = $this->fc_valor_irbpnr;
$original_fc_propina = $this->fc_propina;
$original_fc_total = $this->fc_total;

if(isset($this->fc_id )){
	$update_sql = "UPDATE del_factura_compra 
					SET fc_aplica_propina='".$this->fc_aplica_propina ."'  
					WHERE
					fc_id=".$this->fc_id ;
	
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

	$update_sql = "SELECT sp_del_actualiza_factura_compra(".$this->fc_id .");";
	
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

	$check_sql = "SELECT fc_subtotal,
						fc_subtotal_iva,
						fc_subtotal_cero,
						fc_subtotal_no_objeto,
						fc_subtotal_excento,
						fc_total_descuento,
						fc_valor_ice,
						fc_valor_iva,
						fc_valor_irbpnr,
						fc_propina,
						fc_total 
					FROM del_factura_compra
					WHERE fc_id=".$this->fc_id .";";
	 
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
		$this->fc_subtotal =$this->rs[0][0];
		$this->fc_subtotal_iva = $this->rs[0][1];
		$this->fc_subtotal_cero = $this->rs[0][2];
		$this->fc_subtotal_no_objeto = $this->rs[0][3];
		$this->fc_subtotal_excento = $this->rs[0][4];
		$this->fc_total_descuento = $this->rs[0][5];
		$this->fc_valor_ice = $this->rs[0][6];
		$this->fc_valor_iva = $this->rs[0][7];
		$this->fc_valor_irbpnr = $this->rs[0][8];
		$this->fc_propina = $this->rs[0][9];
		$this->fc_total = $this->rs[0][10];
	}
}else{
	$this->fc_propina =0;
}




$modificado_fc_aplica_propina = $this->fc_aplica_propina;
$modificado_fc_subtotal = $this->fc_subtotal;
$modificado_fc_subtotal_iva = $this->fc_subtotal_iva;
$modificado_fc_subtotal_cero = $this->fc_subtotal_cero;
$modificado_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
$modificado_fc_subtotal_excento = $this->fc_subtotal_excento;
$modificado_fc_total_descuento = $this->fc_total_descuento;
$modificado_fc_valor_ice = $this->fc_valor_ice;
$modificado_fc_valor_iva = $this->fc_valor_iva;
$modificado_fc_valor_irbpnr = $this->fc_valor_irbpnr;
$modificado_fc_propina = $this->fc_propina;
$modificado_fc_total = $this->fc_total;
$this->nm_formatar_campos('fc_aplica_propina', 'fc_subtotal', 'fc_subtotal_iva', 'fc_subtotal_cero', 'fc_subtotal_no_objeto', 'fc_subtotal_excento', 'fc_total_descuento', 'fc_valor_ice', 'fc_valor_iva', 'fc_valor_irbpnr', 'fc_propina', 'fc_total');
if ($original_fc_aplica_propina !== $modificado_fc_aplica_propina || isset($this->nmgp_cmp_readonly['fc_aplica_propina']) || (isset($bFlagRead_fc_aplica_propina) && $bFlagRead_fc_aplica_propina))
{
    $this->ajax_return_values_fc_aplica_propina(true);
}
if ($original_fc_subtotal !== $modificado_fc_subtotal || isset($this->nmgp_cmp_readonly['fc_subtotal']) || (isset($bFlagRead_fc_subtotal) && $bFlagRead_fc_subtotal))
{
    $this->ajax_return_values_fc_subtotal(true);
}
if ($original_fc_subtotal_iva !== $modificado_fc_subtotal_iva || isset($this->nmgp_cmp_readonly['fc_subtotal_iva']) || (isset($bFlagRead_fc_subtotal_iva) && $bFlagRead_fc_subtotal_iva))
{
    $this->ajax_return_values_fc_subtotal_iva(true);
}
if ($original_fc_subtotal_cero !== $modificado_fc_subtotal_cero || isset($this->nmgp_cmp_readonly['fc_subtotal_cero']) || (isset($bFlagRead_fc_subtotal_cero) && $bFlagRead_fc_subtotal_cero))
{
    $this->ajax_return_values_fc_subtotal_cero(true);
}
if ($original_fc_subtotal_no_objeto !== $modificado_fc_subtotal_no_objeto || isset($this->nmgp_cmp_readonly['fc_subtotal_no_objeto']) || (isset($bFlagRead_fc_subtotal_no_objeto) && $bFlagRead_fc_subtotal_no_objeto))
{
    $this->ajax_return_values_fc_subtotal_no_objeto(true);
}
if ($original_fc_subtotal_excento !== $modificado_fc_subtotal_excento || isset($this->nmgp_cmp_readonly['fc_subtotal_excento']) || (isset($bFlagRead_fc_subtotal_excento) && $bFlagRead_fc_subtotal_excento))
{
    $this->ajax_return_values_fc_subtotal_excento(true);
}
if ($original_fc_total_descuento !== $modificado_fc_total_descuento || isset($this->nmgp_cmp_readonly['fc_total_descuento']) || (isset($bFlagRead_fc_total_descuento) && $bFlagRead_fc_total_descuento))
{
    $this->ajax_return_values_fc_total_descuento(true);
}
if ($original_fc_valor_ice !== $modificado_fc_valor_ice || isset($this->nmgp_cmp_readonly['fc_valor_ice']) || (isset($bFlagRead_fc_valor_ice) && $bFlagRead_fc_valor_ice))
{
    $this->ajax_return_values_fc_valor_ice(true);
}
if ($original_fc_valor_iva !== $modificado_fc_valor_iva || isset($this->nmgp_cmp_readonly['fc_valor_iva']) || (isset($bFlagRead_fc_valor_iva) && $bFlagRead_fc_valor_iva))
{
    $this->ajax_return_values_fc_valor_iva(true);
}
if ($original_fc_valor_irbpnr !== $modificado_fc_valor_irbpnr || isset($this->nmgp_cmp_readonly['fc_valor_irbpnr']) || (isset($bFlagRead_fc_valor_irbpnr) && $bFlagRead_fc_valor_irbpnr))
{
    $this->ajax_return_values_fc_valor_irbpnr(true);
}
if ($original_fc_propina !== $modificado_fc_propina || isset($this->nmgp_cmp_readonly['fc_propina']) || (isset($bFlagRead_fc_propina) && $bFlagRead_fc_propina))
{
    $this->ajax_return_values_fc_propina(true);
}
if ($original_fc_total !== $modificado_fc_total || isset($this->nmgp_cmp_readonly['fc_total']) || (isset($bFlagRead_fc_total) && $bFlagRead_fc_total))
{
    $this->ajax_return_values_fc_total(true);
}
$this->NM_ajax_info['event_field'] = 'fc';
form_del_factura_compra_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function fc_autorizacion_onBlur()
{
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  



$this->nm_formatar_campos();
$this->NM_ajax_info['event_field'] = 'fc';
form_del_factura_compra_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function fc_tipo_comprobante_onChange()
{
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_SesionLogin)) {$this->sc_temp_Igtech_SesionLogin = (isset($_SESSION['Igtech_SesionLogin'])) ? $_SESSION['Igtech_SesionLogin'] : "";}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  
$original_fc_tipo_comprobante = $this->fc_tipo_comprobante;
$original_fc_aplica_propina = $this->fc_aplica_propina;
$original_fc_propina = $this->fc_propina;
$original_fc_subtotal = $this->fc_subtotal;
$original_fc_subtotal_iva = $this->fc_subtotal_iva;
$original_fc_subtotal_cero = $this->fc_subtotal_cero;
$original_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
$original_fc_subtotal_excento = $this->fc_subtotal_excento;
$original_fc_total_descuento = $this->fc_total_descuento;
$original_fc_valor_ice = $this->fc_valor_ice;
$original_fc_valor_iva = $this->fc_valor_iva;
$original_fc_valor_irbpnr = $this->fc_valor_irbpnr;
$original_fc_total = $this->fc_total;
$original_liq_libretin = $this->liq_libretin;
$original_liq_establecimiento = $this->liq_establecimiento;
$original_liq_punto_emision = $this->liq_punto_emision;
$original_fc_secuencial = $this->fc_secuencial;
$original_liq_secuencial = $this->liq_secuencial;
$original_liq_ambiente = $this->liq_ambiente;
$original_fc_serie = $this->fc_serie;
$original_ambiente = $this->ambiente;
$original_liq_tipo_libretin = $this->liq_tipo_libretin;
$original_liq_estado_sri = $this->liq_estado_sri;
$original_fc_autorizacion = $this->fc_autorizacion;

if($this->fc_tipo_comprobante =='03'){
	$this->Ini->nm_hidden_blocos[2] = 'on'; $this->NM_ajax_info['blockDisplay']['2'] = 'on';
	$this->Ini->nm_hidden_blocos[3] = 'off'; $this->NM_ajax_info['blockDisplay']['3'] = 'off';
	$this->nmgp_cmp_hidden["fc_aplica_propina"] = 'off'; $this->NM_ajax_info['fieldDisplay']['fc_aplica_propina'] = 'off';
	$this->fc_aplica_propina ='N';
	$this->fc_propina =0.00;
	if(isset($fa_id )){
		$update_sql = "UPDATE del_factura_compra 
						SET fc_aplica_propina='".$this->fc_aplica_propina ."'  
						WHERE
						fc_id=".$this->fc_id ;
		
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

		$update_sql = "SELECT sp_del_actualiza_factura_compra(".$this->fc_id .");";
		
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

		$check_sql = "SELECT fc_subtotal,
							fc_subtotal_iva,
							fc_subtotal_cero,
							fc_subtotal_no_objeto,
							fc_subtotal_excento,
							fc_total_descuento,
							fc_valor_ice,
							fc_valor_iva,
							fc_valor_irbpnr,
							fc_propina,
							fc_total 
						FROM del_factura_compra
						WHERE fc_id=".$this->fc_id .";";
		 
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
			$this->fc_subtotal =$this->rs[0][0];
			$this->fc_subtotal_iva = $this->rs[0][1];
			$this->fc_subtotal_cero = $this->rs[0][2];
			$this->fc_subtotal_no_objeto = $this->rs[0][3];
			$this->fc_subtotal_excento = $this->rs[0][4];
			$this->fc_total_descuento = $this->rs[0][5];
			$this->fc_valor_ice = $this->rs[0][6];
			$this->fc_valor_iva = $this->rs[0][7];
			$this->fc_valor_irbpnr = $this->rs[0][8];
			$this->fc_propina = $this->rs[0][9];
			$this->fc_total = $this->rs[0][10];
		}
	}else{
		$this->fc_propina =0;
	}
	
	if ($this->liq_libretin ==''){
		$check_sql="SELECT lib_id,est_codigo||' - '||pen_serie
					FROM v_del_libretin
					where lib_estado='A'
					and est_empresa='".$this->sc_temp_Igtech_RucEmpresa."'
					and pem_usuario='".$this->sc_temp_Igtech_SesionLogin."'
					AND lib_tipo_comprobante='03'";
		 
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
			$this->liq_libretin =$this->rs[0][0];
		}else{
			$this->nm_mens_alert[] = $this->Ini->Nm_lang['lang_error_libretin']; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert($this->Ini->Nm_lang['lang_error_libretin']); }}
	}	
	$this->liq_libretin =$this->liq_libretin ;
	$check_sql = "SELECT est_id,
						 pem_id,
						 lib_secuencial,
						 emp_ambiente_sri,
						 lib_tipo_libretin,
						 est_codigo,
						 pen_serie,
						 right('000000000'||lib_secuencial,9),
						 ta_nombre,
						 tl_descripcion,
						 lib_autorizacion,
						 lib_desde,
						 lib_hasta,
						 lib_fecha_caducidad,
						 estado_sri,
						 lib_autorizacion
				 FROM v_del_libretin
				 WHERE lib_id=".$this->liq_libretin ;
	 
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


	if (isset($this->rs[0][0])){
		$this->liq_establecimiento =$this->rs[0][0];
		$this->liq_punto_emision =$this->rs[0][1];
		$this->fc_secuencial =$this->rs[0][2];
		$this->liq_secuencial =$this->rs[0][2];
		$this->liq_ambiente =$this->rs[0][3];
		$this->fc_serie =$this->rs[0][5].$this->rs[0][6];
		$this->ambiente =$this->rs[0][8];
		$this->liq_tipo_libretin =$this->rs[0][9];
		$this->fc_desde =$this->rs[0][11];
		$this->fc_hasta =$this->rs[0][12];
		$liq_desde =$this->rs[0][11];
		$liq_hasta =$this->rs[0][12];
		$this->fc_fecha_caducidad =$this->rs[0][13];
		$this->liq_estado_sri =$this->rs[0][14];
		$this->fc_autorizacion =$this->rs[0][15];
	}	
}else{
	$this->Ini->nm_hidden_blocos[2] = 'off'; $this->NM_ajax_info['blockDisplay']['2'] = 'off';
	$this->Ini->nm_hidden_blocos[3] = 'on'; $this->NM_ajax_info['blockDisplay']['3'] = 'on';
	$this->nmgp_cmp_hidden["fc_aplica_propina"] = 'on'; $this->NM_ajax_info['fieldDisplay']['fc_aplica_propina'] = 'on';
	$this->fc_serie ='';
	$this->fc_secuencial ='';
	$this->fc_autorizacion ='';
	$this->fc_desde ='';
	$this->fc_hasta ='';
	
}



if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
$modificado_fc_tipo_comprobante = $this->fc_tipo_comprobante;
$modificado_fc_aplica_propina = $this->fc_aplica_propina;
$modificado_fc_propina = $this->fc_propina;
$modificado_fc_subtotal = $this->fc_subtotal;
$modificado_fc_subtotal_iva = $this->fc_subtotal_iva;
$modificado_fc_subtotal_cero = $this->fc_subtotal_cero;
$modificado_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
$modificado_fc_subtotal_excento = $this->fc_subtotal_excento;
$modificado_fc_total_descuento = $this->fc_total_descuento;
$modificado_fc_valor_ice = $this->fc_valor_ice;
$modificado_fc_valor_iva = $this->fc_valor_iva;
$modificado_fc_valor_irbpnr = $this->fc_valor_irbpnr;
$modificado_fc_total = $this->fc_total;
$modificado_liq_libretin = $this->liq_libretin;
$modificado_liq_establecimiento = $this->liq_establecimiento;
$modificado_liq_punto_emision = $this->liq_punto_emision;
$modificado_fc_secuencial = $this->fc_secuencial;
$modificado_liq_secuencial = $this->liq_secuencial;
$modificado_liq_ambiente = $this->liq_ambiente;
$modificado_fc_serie = $this->fc_serie;
$modificado_ambiente = $this->ambiente;
$modificado_liq_tipo_libretin = $this->liq_tipo_libretin;
$modificado_liq_estado_sri = $this->liq_estado_sri;
$modificado_fc_autorizacion = $this->fc_autorizacion;
$this->nm_formatar_campos('fc_tipo_comprobante', 'fc_aplica_propina', 'fc_propina', 'fc_subtotal', 'fc_subtotal_iva', 'fc_subtotal_cero', 'fc_subtotal_no_objeto', 'fc_subtotal_excento', 'fc_total_descuento', 'fc_valor_ice', 'fc_valor_iva', 'fc_valor_irbpnr', 'fc_total', 'liq_libretin', 'liq_establecimiento', 'liq_punto_emision', 'fc_secuencial', 'liq_secuencial', 'liq_ambiente', 'fc_serie', 'ambiente', 'liq_tipo_libretin', 'liq_estado_sri', 'fc_autorizacion');
if ($original_fc_tipo_comprobante !== $modificado_fc_tipo_comprobante || isset($this->nmgp_cmp_readonly['fc_tipo_comprobante']) || (isset($bFlagRead_fc_tipo_comprobante) && $bFlagRead_fc_tipo_comprobante))
{
    $this->ajax_return_values_fc_tipo_comprobante(true);
}
if ($original_fc_aplica_propina !== $modificado_fc_aplica_propina || isset($this->nmgp_cmp_readonly['fc_aplica_propina']) || (isset($bFlagRead_fc_aplica_propina) && $bFlagRead_fc_aplica_propina))
{
    $this->ajax_return_values_fc_aplica_propina(true);
}
if ($original_fc_propina !== $modificado_fc_propina || isset($this->nmgp_cmp_readonly['fc_propina']) || (isset($bFlagRead_fc_propina) && $bFlagRead_fc_propina))
{
    $this->ajax_return_values_fc_propina(true);
}
if ($original_fc_subtotal !== $modificado_fc_subtotal || isset($this->nmgp_cmp_readonly['fc_subtotal']) || (isset($bFlagRead_fc_subtotal) && $bFlagRead_fc_subtotal))
{
    $this->ajax_return_values_fc_subtotal(true);
}
if ($original_fc_subtotal_iva !== $modificado_fc_subtotal_iva || isset($this->nmgp_cmp_readonly['fc_subtotal_iva']) || (isset($bFlagRead_fc_subtotal_iva) && $bFlagRead_fc_subtotal_iva))
{
    $this->ajax_return_values_fc_subtotal_iva(true);
}
if ($original_fc_subtotal_cero !== $modificado_fc_subtotal_cero || isset($this->nmgp_cmp_readonly['fc_subtotal_cero']) || (isset($bFlagRead_fc_subtotal_cero) && $bFlagRead_fc_subtotal_cero))
{
    $this->ajax_return_values_fc_subtotal_cero(true);
}
if ($original_fc_subtotal_no_objeto !== $modificado_fc_subtotal_no_objeto || isset($this->nmgp_cmp_readonly['fc_subtotal_no_objeto']) || (isset($bFlagRead_fc_subtotal_no_objeto) && $bFlagRead_fc_subtotal_no_objeto))
{
    $this->ajax_return_values_fc_subtotal_no_objeto(true);
}
if ($original_fc_subtotal_excento !== $modificado_fc_subtotal_excento || isset($this->nmgp_cmp_readonly['fc_subtotal_excento']) || (isset($bFlagRead_fc_subtotal_excento) && $bFlagRead_fc_subtotal_excento))
{
    $this->ajax_return_values_fc_subtotal_excento(true);
}
if ($original_fc_total_descuento !== $modificado_fc_total_descuento || isset($this->nmgp_cmp_readonly['fc_total_descuento']) || (isset($bFlagRead_fc_total_descuento) && $bFlagRead_fc_total_descuento))
{
    $this->ajax_return_values_fc_total_descuento(true);
}
if ($original_fc_valor_ice !== $modificado_fc_valor_ice || isset($this->nmgp_cmp_readonly['fc_valor_ice']) || (isset($bFlagRead_fc_valor_ice) && $bFlagRead_fc_valor_ice))
{
    $this->ajax_return_values_fc_valor_ice(true);
}
if ($original_fc_valor_iva !== $modificado_fc_valor_iva || isset($this->nmgp_cmp_readonly['fc_valor_iva']) || (isset($bFlagRead_fc_valor_iva) && $bFlagRead_fc_valor_iva))
{
    $this->ajax_return_values_fc_valor_iva(true);
}
if ($original_fc_valor_irbpnr !== $modificado_fc_valor_irbpnr || isset($this->nmgp_cmp_readonly['fc_valor_irbpnr']) || (isset($bFlagRead_fc_valor_irbpnr) && $bFlagRead_fc_valor_irbpnr))
{
    $this->ajax_return_values_fc_valor_irbpnr(true);
}
if ($original_fc_total !== $modificado_fc_total || isset($this->nmgp_cmp_readonly['fc_total']) || (isset($bFlagRead_fc_total) && $bFlagRead_fc_total))
{
    $this->ajax_return_values_fc_total(true);
}
if ($original_liq_libretin !== $modificado_liq_libretin || isset($this->nmgp_cmp_readonly['liq_libretin']) || (isset($bFlagRead_liq_libretin) && $bFlagRead_liq_libretin))
{
    $this->ajax_return_values_liq_libretin(true);
}
if ($original_liq_establecimiento !== $modificado_liq_establecimiento || isset($this->nmgp_cmp_readonly['liq_establecimiento']) || (isset($bFlagRead_liq_establecimiento) && $bFlagRead_liq_establecimiento))
{
    $this->ajax_return_values_liq_establecimiento(true);
}
if ($original_liq_punto_emision !== $modificado_liq_punto_emision || isset($this->nmgp_cmp_readonly['liq_punto_emision']) || (isset($bFlagRead_liq_punto_emision) && $bFlagRead_liq_punto_emision))
{
    $this->ajax_return_values_liq_punto_emision(true);
}
if ($original_fc_secuencial !== $modificado_fc_secuencial || isset($this->nmgp_cmp_readonly['fc_secuencial']) || (isset($bFlagRead_fc_secuencial) && $bFlagRead_fc_secuencial))
{
    $this->ajax_return_values_fc_secuencial(true);
}
if ($original_liq_secuencial !== $modificado_liq_secuencial || isset($this->nmgp_cmp_readonly['liq_secuencial']) || (isset($bFlagRead_liq_secuencial) && $bFlagRead_liq_secuencial))
{
    $this->ajax_return_values_liq_secuencial(true);
}
if ($original_liq_ambiente !== $modificado_liq_ambiente || isset($this->nmgp_cmp_readonly['liq_ambiente']) || (isset($bFlagRead_liq_ambiente) && $bFlagRead_liq_ambiente))
{
    $this->ajax_return_values_liq_ambiente(true);
}
if ($original_fc_serie !== $modificado_fc_serie || isset($this->nmgp_cmp_readonly['fc_serie']) || (isset($bFlagRead_fc_serie) && $bFlagRead_fc_serie))
{
    $this->ajax_return_values_fc_serie(true);
}
if ($original_ambiente !== $modificado_ambiente || isset($this->nmgp_cmp_readonly['ambiente']) || (isset($bFlagRead_ambiente) && $bFlagRead_ambiente))
{
    $this->ajax_return_values_ambiente(true);
}
if ($original_liq_tipo_libretin !== $modificado_liq_tipo_libretin || isset($this->nmgp_cmp_readonly['liq_tipo_libretin']) || (isset($bFlagRead_liq_tipo_libretin) && $bFlagRead_liq_tipo_libretin))
{
    $this->ajax_return_values_liq_tipo_libretin(true);
}
if ($original_liq_estado_sri !== $modificado_liq_estado_sri || isset($this->nmgp_cmp_readonly['liq_estado_sri']) || (isset($bFlagRead_liq_estado_sri) && $bFlagRead_liq_estado_sri))
{
    $this->ajax_return_values_liq_estado_sri(true);
}
if ($original_fc_autorizacion !== $modificado_fc_autorizacion || isset($this->nmgp_cmp_readonly['fc_autorizacion']) || (isset($bFlagRead_fc_autorizacion) && $bFlagRead_fc_autorizacion))
{
    $this->ajax_return_values_fc_autorizacion(true);
}
$this->NM_ajax_info['event_field'] = 'fc';
form_del_factura_compra_mob_pack_ajax_response();
exit;
}
function liq_libretin_onChange()
{
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
$original_liq_libretin = $this->liq_libretin;
$original_liq_establecimiento = $this->liq_establecimiento;
$original_liq_punto_emision = $this->liq_punto_emision;
$original_fc_secuencial = $this->fc_secuencial;
$original_liq_secuencial = $this->liq_secuencial;
$original_liq_ambiente = $this->liq_ambiente;
$original_fc_serie = $this->fc_serie;
$original_ambiente = $this->ambiente;
$original_liq_tipo_libretin = $this->liq_tipo_libretin;

$check_sql = "SELECT est_id,
					 pem_id,
					 lib_secuencial,
					 emp_ambiente_sri,
					 lib_tipo_libretin,
					 est_codigo,
					 pen_serie,
					 right('000000000'||lib_secuencial,9),
					 ta_nombre,
					 tl_descripcion,
					 lib_autorizacion,
					 lib_desde,
					 lib_hasta,
					 lib_fecha_caducidad
			 FROM v_del_libretin
			 WHERE lib_id=".$this->liq_libretin ;
 
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


if (isset($this->rs[0][0])){
	$this->liq_establecimiento =$this->rs[0][0];
	$this->liq_punto_emision =$this->rs[0][1];
	$this->fc_secuencial =$this->rs[0][2];
	$this->liq_secuencial =$this->rs[0][7];
	$this->liq_ambiente =$this->rs[0][3];
	$this->fc_serie =$this->rs[0][5].$this->rs[0][6];
	$this->ambiente =$this->rs[0][8];
	$this->liq_tipo_libretin =$this->rs[0][9];
	$this->fc_desde =$this->rs[0][11];
	$this->fc_hasta =$this->rs[0][12];
	$liq_desde =$this->rs[0][11];
	$liq_hasta =$this->rs[0][12];
	$this->fc_fecha_caducidad =$this->rs[0][13];
	
}	

$modificado_liq_libretin = $this->liq_libretin;
$modificado_liq_establecimiento = $this->liq_establecimiento;
$modificado_liq_punto_emision = $this->liq_punto_emision;
$modificado_fc_secuencial = $this->fc_secuencial;
$modificado_liq_secuencial = $this->liq_secuencial;
$modificado_liq_ambiente = $this->liq_ambiente;
$modificado_fc_serie = $this->fc_serie;
$modificado_ambiente = $this->ambiente;
$modificado_liq_tipo_libretin = $this->liq_tipo_libretin;
$this->nm_formatar_campos('liq_libretin', 'liq_establecimiento', 'liq_punto_emision', 'fc_secuencial', 'liq_secuencial', 'liq_ambiente', 'fc_serie', 'ambiente', 'liq_tipo_libretin');
if ($original_liq_libretin !== $modificado_liq_libretin || isset($this->nmgp_cmp_readonly['liq_libretin']) || (isset($bFlagRead_liq_libretin) && $bFlagRead_liq_libretin))
{
    $this->ajax_return_values_liq_libretin(true);
}
if ($original_liq_establecimiento !== $modificado_liq_establecimiento || isset($this->nmgp_cmp_readonly['liq_establecimiento']) || (isset($bFlagRead_liq_establecimiento) && $bFlagRead_liq_establecimiento))
{
    $this->ajax_return_values_liq_establecimiento(true);
}
if ($original_liq_punto_emision !== $modificado_liq_punto_emision || isset($this->nmgp_cmp_readonly['liq_punto_emision']) || (isset($bFlagRead_liq_punto_emision) && $bFlagRead_liq_punto_emision))
{
    $this->ajax_return_values_liq_punto_emision(true);
}
if ($original_fc_secuencial !== $modificado_fc_secuencial || isset($this->nmgp_cmp_readonly['fc_secuencial']) || (isset($bFlagRead_fc_secuencial) && $bFlagRead_fc_secuencial))
{
    $this->ajax_return_values_fc_secuencial(true);
}
if ($original_liq_secuencial !== $modificado_liq_secuencial || isset($this->nmgp_cmp_readonly['liq_secuencial']) || (isset($bFlagRead_liq_secuencial) && $bFlagRead_liq_secuencial))
{
    $this->ajax_return_values_liq_secuencial(true);
}
if ($original_liq_ambiente !== $modificado_liq_ambiente || isset($this->nmgp_cmp_readonly['liq_ambiente']) || (isset($bFlagRead_liq_ambiente) && $bFlagRead_liq_ambiente))
{
    $this->ajax_return_values_liq_ambiente(true);
}
if ($original_fc_serie !== $modificado_fc_serie || isset($this->nmgp_cmp_readonly['fc_serie']) || (isset($bFlagRead_fc_serie) && $bFlagRead_fc_serie))
{
    $this->ajax_return_values_fc_serie(true);
}
if ($original_ambiente !== $modificado_ambiente || isset($this->nmgp_cmp_readonly['ambiente']) || (isset($bFlagRead_ambiente) && $bFlagRead_ambiente))
{
    $this->ajax_return_values_ambiente(true);
}
if ($original_liq_tipo_libretin !== $modificado_liq_tipo_libretin || isset($this->nmgp_cmp_readonly['liq_tipo_libretin']) || (isset($bFlagRead_liq_tipo_libretin) && $bFlagRead_liq_tipo_libretin))
{
    $this->ajax_return_values_liq_tipo_libretin(true);
}
$this->NM_ajax_info['event_field'] = 'liq';
form_del_factura_compra_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function scajaxbutton_enviar_onClick()
{
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  

$this->sc_ajax_message ($this->autorizar_liquidacion($this->fc_id ,'S'), "Aviso", "modal = Y & button = Y & button_label = Ok & body_icon = Y & redir = form_del_factura_compra.php", "toast=Y&toasto_pos=center-start&type=success");


$this->nm_formatar_campos();
$this->NM_ajax_info['event_field'] = 'scajaxbutton';
form_del_factura_compra_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function scajaxbutton_Anular_onClick()
{
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  

$update_sql = "UPDATE del_factura_compra 
					SET  
					   fc_estado='N',
					   liq_estado_sri='ANULADO'
					WHERE
						fc_id=".$this->fc_id .";";

     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$update_sql = "UPDATE del_detalle_factura_compra
					SET  
					   dfc_estado='N'
					WHERE
						dfc_factura=".$this->fc_id .";";

     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$registra_kardex="SELECT sp_compras_al_kardex(".$this->fc_id .");";

     $nm_select = $registra_kardex; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$this->nm_mens_alert[] = $this->Ini->Nm_lang['lang_doc_anulado']; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert($this->Ini->Nm_lang['lang_doc_anulado']); }$this->nm_formatar_campos();
$this->NM_ajax_info['event_field'] = 'scajaxbutton';
form_del_factura_compra_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function crearNombreCarpeta($xmlComprobante) {
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
        $nombre = ""; 
	    $codDoc = $xmlComprobante->codDoc;
        if ($codDoc=='01') {
            $nombre = $xmlComprobante->identificacionComprador;
        } else if ($codDoc=="03") {
            $nombre = $xmlComprobante->identificacionProveedor;
        } else if ($codDoc=="04") {
            $nombre = $xmlComprobante->identificacionComprador;
        } else if ($codDoc=="05") {
            $nombre = $xmlComprobante->identificacionComprador;
        } else if ($codDoc=="06") {
            $nombre = $xmlComprobante->rucTransportista;
        } else if ($codDoc=="07") {
            $nombre = $xmlComprobante->identificacionSujetoRetenido;
        } 
        return $nombre;
    
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function crearNombreFichero($xmlComprobante,$extension) {
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
        $nombre = "";
        $codDoc = $xmlComprobante->codDoc;
        $establecimiento = $xmlComprobante->establecimiento;
        $ptoEmision = $xmlComprobante->ptoEmision;
        $secuencial_doc = $xmlComprobante->secuencial;
        if ($codDoc=="01") {
            $nombre = "FAC";
        } else if ($codDoc=="03") {
            $nombre = "LIQ";
        } else if ($codDoc=="04") {
            $nombre = "NC";
        } else if ($codDoc=="05") {
            $nombre = "ND";
        } else if ($codDoc=="06") { 
            $nombre = "GR";
        } else if ($codDoc=="07") {
            $nombre = "CR";
        } 
        return $nombre . $establecimiento . "-" . $ptoEmision . "-" . $secuencial_doc .".". $extension;
    
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function crearNombreFicheroSinExtension($xmlComprobante){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		
		$nombre = "";
		$codDoc = $xmlComprobante->codDoc;
		$establecimiento = $xmlComprobante->establecimiento;
		$ptoEmision = $xmlComprobante->ptoEmision;
		$secuencial_doc = $xmlComprobante->secuencial;
		if ($codDoc=="01") {
			$nombre = "FAC";
		} else if ($codDoc=="03") {
			$nombre = "LIQ";
		} else if ($codDoc=="04") {
			$nombre = "NC";
		} else if ($codDoc=="05") {
			$nombre = "ND";
		} else if ($codDoc=="06") {
			$nombre = "GR";
		} else if ($codDoc=="07") {
			$nombre = "CR";
		} 
		return $nombre . $establecimiento . "-" . $ptoEmision . "-" . $secuencial_doc ;
	
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function crearMensajeCorreo($xmlComprobante, $w_ruta_logo) {
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_email_documentos.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
        $codDoc = $xmlComprobante->codDoc;
		$w_establecimiento= $xmlComprobante->establecimiento;
        $ptoEmision = $xmlComprobante->ptoEmision;
        $secuencial_doc = $xmlComprobante->secuencial;
		
        $tipoComprobante = "";
        $dirigido = "";
        $w_datos_adicionales = "";
		if ($codDoc=="01") {
			$tipoComprobante = "FACTURA";
			$dirigido = $xmlComprobante->razonSocialComprador;
			$importeTotal = $xmlComprobante->importeTotal;
			$w_datos_adicionales = "<strong>Valor Total: </strong>".$importeTotal."<br /><br />";
		} else if ($codDoc=="03") {
			$tipoComprobante = "LIQUIDACIÓN DE COMPRA DE BIENES Y PRESTACIÓN DE SERVICIOS";
			$dirigido = $xmlComprobante->razonSocialProveedor;
			$importeTotal = $xmlComprobante->importeTotal;
			$w_datos_adicionales = "<strong>Valor Total: </strong>".$importeTotal."<br /><br />";
		} else if ($codDoc=="04") {
			$tipoComprobante = "NOTA DE CRÉDITO";
			$dirigido = $xmlComprobante->razonSocialComprador;
		} else if ($codDoc=="05") {
			$tipoComprobante = "NOTA DE DÉBITO";
			$dirigido = $xmlComprobante->razonSocialComprador;
		} else if ($codDoc=="06") {
			$tipoComprobante = "GUÍA DE REMISIÓN";
			$dirigido = $xmlComprobante->razonSocialTransportista;
		} else if ($codDoc=="07") {
			$tipoComprobante = "COMPROBANTE DE RETENCIÓN";
			$dirigido = $xmlComprobante->razonSocialSujetoRetenido;
		}
        $razonSocial = $dirigido;
        $razonSocialEmisor = $xmlComprobante->razonSocial;
        if (file_exists($nombre)){ 
			$fp = fopen ($nombre,"r"); 
			$datos = fread($fp, filesize($nombre));
			fclose($fp);
			$datos=str_replace('$rutaLogo',$w_ruta_logo,$datos);
			$datos=str_replace('$razonSocial',$razonSocial,$datos);
			$datos=str_replace('$EMPRESA_CLIENTE',$razonSocialEmisor,$datos);
			$datos=str_replace('$tipoComprobante',$tipoComprobante,$datos);
			$datos=str_replace('$w_establecimiento',$w_establecimiento,$datos);
			$datos=str_replace('$ptoEmision',$ptoEmision,$datos);
			$datos=str_replace('$secuencial_doc',$secuencial_doc,$datos);
			$datos=str_replace('$w_datos_adicionales',$w_datos_adicionales,$datos);
			$datos=str_replace('imagenes/',$ruta_imagenes,$datos);

			return $datos;
		}else{
			return 'No se pudo cargar skin '.$nombre;
		}     
    
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function enviarCorreo($xmlComprobante,$correo_destino){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		
		$check_sql = "SELECT sp_busca_parametro ('RUTA_DOCUMENTOS','D:/Desarrollos/')";
		 
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

		if(isset($this->rs[0][0])){
			$dir=$this->rs[0][0];
		}
		$empresa=$xmlComprobante->ruc;
		$cliente=$this->crearNombreCarpeta($xmlComprobante);
		
		$pathpdf= $dir.$empresa.'/documentos/'.$cliente.'/'.$this->crearNombreFichero($xmlComprobante,'pdf');
		$pathxml= $dir.$empresa.'/documentos/'.$cliente.'/'.$this->crearNombreFichero($xmlComprobante,'xml');
		
		
		$configCorreo=$xmlComprobante->configCorreo;
		$mail_smtp_server    = $configCorreo->correoHost;       
		$mail_smtp_user      = $configCorreo->correoRemitente;
		$mail_smtp_pass      = $configCorreo->correoPass;
		$mail_from           = $configCorreo->correoRemitente;
		$mail_subject        = $configCorreo->correoAsunto;
		$mail_message        = $this->crearMensajeCorreo($xmlComprobante,$configCorreo->rutaLogo); 
		$mail_format         = 'H';
		$mail_copies		 = '';	
		$mail_tp_copies		 = '';
		$mail_port           = $configCorreo->correoPort;
		$mail_tp_connection  = $configCorreo->sslHabilitado;
		$mail_atachment		 = array();
		$mail_atachment[0]= $pathpdf;
		$mail_atachment[1]= $pathxml;
		
		try {
    		$destinatarios = explode(",", $correo_destino);
			foreach( $destinatarios as $destinatario){

				$mail_to= trim($destinatario);

				    include_once($this->Ini->path_third . "/swift/swift_required.php");
    $sc_mail_port     = "$mail_port";
    $sc_mail_tp_port  = "$mail_tp_connection";
    $sc_mail_tp_mens  = "$mail_format";
    $sc_mail_tp_copy  = "$mail_tp_copies";
    $this->sc_mail_count = 0;
    $this->sc_mail_erro  = "";
    $this->sc_mail_ok    = true;
    if ($sc_mail_tp_port == "S" || $sc_mail_tp_port == "Y")
    {
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 465;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'ssl');
    }
    elseif ($sc_mail_tp_port == "T")
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 587;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'tls');
    }
    else
    {
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 25;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port);
    }
    $Con_Mail->setUsername($mail_smtp_user);
    $Con_Mail->setpassword($mail_smtp_pass);
    $Send_Mail = Swift_Mailer::newInstance($Con_Mail);
    if ($sc_mail_tp_mens == "H")
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject);
        $Mens_Mail->setBody(SC_Mail_Image($mail_message, $Mens_Mail))->setContentType("text/html");
    }
    else
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject)->setBody($mail_message);
    }
    if (!empty($_SESSION['scriptcase']['charset']))
    {
        $Mens_Mail->setCharset($_SESSION['scriptcase']['charset']);
    }
    $Temp_mail = $mail_atachment;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_atachment);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Mens_Mail->attach(Swift_Attachment::fromPath($NM_dest));
        }
    }
    $Temp_mail = $mail_to;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_to);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            $Mens_Mail->addTo($Arr_addr[0], $Arr_addr[1]);
        }
    }
    $Temp_mail = $mail_copies;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_copies);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            if (strtoupper(substr($sc_mail_tp_copy, 0, 2)) == "CC")
            {
                $Mens_Mail->addCc($Arr_addr[0], $Arr_addr[1]);
            }
            else
            {
                $Mens_Mail->addBcc($Arr_addr[0], $Arr_addr[1]);
            }
        }
    }
    $Arr_addr = SC_Mail_Address($mail_from);
    $Err_mail = array();
    $this->sc_mail_count = $Send_Mail->send($Mens_Mail->setFrom($Arr_addr[0], $Arr_addr[1]), $Err_mail);
    if (!empty($Err_mail))
    {
        $this->sc_mail_erro = $Err_mail;
        $this->sc_mail_ok   = false;
    }
;	

			}
			if ($this->sc_mail_ok ){
				return true;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
		}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function autorizar_factura ($fac_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  	
		if($i_log){
					var_dump($fac_numero);
					echo '<br>';
		}	
		$correo_enviado='';
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$factura = new factura();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollos/')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir=$this->rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir_ireport=$this->rs[0][0];
		}
		$check_sql="select fac_empresa,fac_establecimiento from del_factura where fac_numero =".$fac_numero;
		 
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

		if (isset($this->rs[0][0])){
			$var_empresa=$this->rs[0][0];
			$var_establecimiento=$this->rs[0][1];
		}

		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$this->rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$this->rs_empresa[0][0]."/logo/".$this->rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$this->rs_empresa[0][0]."/firma/".$this->rs_empresa[0][2];
			$configApp->passFirma = $this->rs_empresa[0][3];
			
			$configApp->dirIreport=$dir_ireport;
			$factura->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Factura";
			$configCorreo->correoHost = $this->rs_empresa[0][12];
			$configCorreo->correoPass = $this->rs_empresa[0][13];
			$configCorreo->correoPort = $this->rs_empresa[0][14];
			$configCorreo->correoRemitente = $this->rs_empresa[0][15];
			$configCorreo->sslHabilitado = $this->rs_empresa[0][21];
			$configCorreo->rutaLogo=$this->rs_empresa[0][20].$this->rs_empresa[0][0].'/'.$this->rs_empresa[0][1];
			$factura->configCorreo = $configCorreo;

			$factura->ruc = $this->rs_empresa[0][0];
			$factura->razonSocial = $this->rs_empresa[0][4];
			$factura->nombreComercial = $this->rs_empresa[0][5]; 
			$factura->dirMatriz = $this->rs_empresa[0][6]; 
			$factura->obligadoContabilidad =$this->rs_empresa[0][7]; 
			$factura->tipoEmision = $this->rs_empresa[0][9];
			if ($this->rs_empresa[0][10]!=''){
				$factura->contribuyenteEspecial = $this->rs_empresa[0][10];
			}	
			$factura->padronMicroempresa=$this->rs_empresa[0][17];
			$factura->padronAgenteRetencion=$this->rs_empresa[0][18];
			if($this->rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
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

				if (isset($this->rs[0][0])){
				   $factura->numeroResolucion=$this->rs[0][0];   
				}
			}
			$factura->artesanoCalificado=$this->rs_empresa[0][19];
		}

		$check_sql="SELECT
							fac_numero,
							fac_ambiente,
							fac_tipo_comprobante,
							fecha,
							est_direccion,
							est_codigo,
							pen_serie,
							fac_secuencial,
							cl_tipo_identificacion,
							cl_nombre,
							cl_identificacion,
							cl_direccion,
							cl_telefono,
							cl_email,
							fac_subtotal,
							fac_total_descuento,
							fac_subtotal_iva,
							fac_valor_iva,
							fac_subtotal_cero,
							fac_subtotal_no_objeto,
							fac_subtotal_excento,
							fac_valor_ice,
							fac_valor_irbpnr,
							fac_propina,
							fac_total,
							fac_guia_remision,
							fac_comentario,
							fac_moneda,
							usuario,
							usu_cedula,
							usu_telefono,
							usu_email,
							usu_placa,
							usu_tipo_documento,
							dia_descripcion,
							est_padronrimpe,
							fac_total_subsidio,
							est_leyenda_rimpe,
							usu_direccion,
							fac_correo_enviado
						FROM
							v_del_datos_factura_sri
						WHERE fac_numero=".$fac_numero ;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_factura = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_factura[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_factura = false;
          $this->rs_factura_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_factura[0][0])){
			$correo_enviado=$this->rs_factura[0][39];
			$factura->padronRimpe=$this->rs_factura[0][35];
			$factura->leyendaRimpe=$this->rs_factura[0][37];
			$factura->ambiente = $this->rs_factura[0][1];
			$factura->codDoc = $this->rs_factura[0][2];
			$factura->fechaEmision = $this->rs_factura[0][3];
			$factura->dirEstablecimiento = $this->rs_factura[0][4];
			$factura->establecimiento = $this->rs_factura[0][5]; 
			$factura->ptoEmision = $this->rs_factura[0][6]; 
			$factura->secuencial = $this->rs_factura[0][7];
			$factura->tipoIdentificacionComprador = $this->rs_factura[0][8];
			if($this->rs_factura[0][25]<>''){
				$factura->guiaRemision=$this->rs_factura[0][25];
			}
			$factura->razonSocialComprador = $this->rs_factura[0][9]; 
			$factura->identificacionComprador = $this->rs_factura[0][10];
			$factura->direccionComprador=$this->rs_factura[0][11];
			$factura->totalSinImpuestos = $this->rs_factura[0][14]; 
			if($this->rs_factura[0][36]>0){
				$factura->totalSubsidio=$this->rs_factura[0][36];
			}
			$factura->totalDescuento = $this->rs_factura[0][15]; 
			$total_Impuestos=array();
			$i=0;
				$sql_ivas_cobrados="SELECT df_porcentaje_iva,
											ROUND(sum(df_cantidad*(df_precio_unitario-df_descuento)+df_valor_ice),2),
											round(sum(df_base_iva) *iva_porcentaje/100,2)
									FROM  del_detalle_factura 
									inner join sri_tarifa_iva on iva_codigo=df_porcentaje_iva
									WHERE df_factura=".$fac_numero."
									group by df_porcentaje_iva,iva_porcentaje";
				 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_ivas = false;
          $this->rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
				if ($this->rs_ivas   === false){
					echo "Error al acceder a del_detalle_factura";
				}else{
					while (!$this->rs_ivas->EOF){
						$totalImpuesto = new totalImpuesto();
						$totalImpuesto->codigo ='2'; 
						$totalImpuesto->codigoPorcentaje = $this->rs_ivas->fields[0]; 
						$totalImpuesto->baseImponible = $this->rs_ivas->fields[1];
						$totalImpuesto->valor = $this->rs_ivas->fields[2];
						$total_Impuestos[$i]=$totalImpuesto;
						$i+=1;
						$this->rs_ivas->MoveNext();
					}
					$this->rs_ivas->Close();
				}	
				
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}
				if($this->rs_factura[0][21]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 ice_codigo,
										sum(df_subtotal),
										sum(df_valor_ice) 
								FROM del_detalle_factura 
								join sri_tarifa_ice on df_porcentaje_ice::integer=ice_id
								WHERE df_porcentaje_ice<>'0' 
								and df_factura=".$fac_numero."
								group by df_porcentaje_ice,ice_codigo";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_impuesto = false;
          $this->rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$this->rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$this->rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $this->rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $this->rs_impuesto->fields[2];
							$totalImpuesto->valor = $this->rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_impuesto->MoveNext();
						}
						$this->rs_impuesto->Close();
					}	
				}
				if($this->rs_factura[0][22]>0){	
					$check_sql="SELECT  '5' as impuesto,
										df_porcentaje_irbpnr,
										sum(df_base_irbpnr*df_cantidad),
										sum(df_valor_irbpnr) 
								FROM del_detalle_factura 
								WHERE df_porcentaje_irbpnr<>'0' 
								and df_factura=".$fac_numero ."
								group by df_porcentaje_irbpnr";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_impuesto = false;
          $this->rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$this->rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$this->rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $this->rs_impuesto->fields[1];
							$totalImpuesto->baseImponible = $this->rs_impuesto->fields[2]; 
							$totalImpuesto->valor = $this->rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_impuesto->MoveNext();
						}
						$this->rs_impuesto->Close();
					}	
				}
			$factura->totalConImpuesto = $total_Impuestos;
			$factura->propina = $this->rs_factura[0][23]; 
			$factura->importeTotal = $this->rs_factura[0][24]; 
			$factura->moneda = $this->rs_factura[0][27];
			$check_sql="SELECT
								df_factura,
								df_producto,
								pro_codigo_aux,
								pro_descripcion,
								df_cantidad,
								df_precio_unitario,
								df_descuento,
								valor_sin_impuesto,
								pro_iva,
								df_porcentaje_iva,
								iva_porcentaje,
								df_base_iva,
								df_valor_iva,
								pro_ice,
								ice_codigo,
								round(df_subtotal,2),
								ice_tarifa,
								df_valor_ice,
								pro_irbpnr,
								df_porcentaje_irbpnr,
								irbpnr_tarifa,
								round(df_base_irbpnr*df_cantidad,2),
								df_valor_irbpnr,
								df_descripcion,
								df_precio_sin_subsidio
							FROM
								v_del_detalle_factura_sri
							where df_factura=".$fac_numero."
							order by df_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_detalles = false;
          $this->rs_detalles_erro = $this->Db->ErrorMsg();
      } 
   
			if ($this->rs_detalles   === false){
				echo "Error al acceder al detalle de la factura";
			}else{
				$detalles_factura = array();
				$i=0;
				while (!$this->rs_detalles->EOF){
					$detalleFactura = new detalleFactura();
					$detalleFactura->codigoPrincipal = $this->rs_detalles->fields[1];
					$detalleFactura->codigoAuxiliar = $this->rs_detalles->fields[2]; 
					$detalleFactura->descripcion = $this->rs_detalles->fields[3]; 
					$detalleFactura->cantidad = $this->rs_detalles->fields[4]; 
					$detalleFactura->precioUnitario = $this->rs_detalles->fields[5]; 
					$detalleFactura->descuento = $this->rs_detalles->fields[6]; 
					$detalleFactura->precioTotalSinImpuesto = $this->rs_detalles->fields[7]; 
					$detalleFactura->precioSinSubsidio=$this->rs_detalles->fields[24];

					if ($this->rs_detalles->fields[23] <>""){
						$informacion_adicional=array();
						$detalle_adicional= new detalleAdicional();
						$detalle_adicional->nombre = 'Adicional';
						$detalle_adicional->valor = $this->rs_detalles->fields[23] ;
						$informacion_adicional[0]=$detalle_adicional;							 
						$detalleFactura->detalleAdicional = $informacion_adicional;	
					}

						$impuestos_det=array();
						$j=0;
						$impuesto = new impuesto();
						$impuesto->codigo = $this->rs_detalles->fields[8];
						$impuesto->codigoPorcentaje = $this->rs_detalles->fields[9]; 
						$impuesto->tarifa = $this->rs_detalles->fields[10]; 
						$impuesto->baseImponible = $this->rs_detalles->fields[11]; 
						$impuesto->valor = $this->rs_detalles->fields[12];
						$impuestos_det[$j]=$impuesto;
						$j+=1;
						if($this->rs_detalles->fields[14]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $this->rs_detalles->fields[13];
							$impuesto->codigoPorcentaje = $this->rs_detalles->fields[14]; 
							$impuesto->tarifa = "0.00";  
							$impuesto->baseImponible = $this->rs_detalles->fields[15]; 
							$impuesto->valor = $this->rs_detalles->fields[17];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
						if($this->rs_detalles->fields[19]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $this->rs_detalles->fields[18];
							$impuesto->codigoPorcentaje = $this->rs_detalles->fields[19]; 
							$impuesto->tarifa = $this->rs_detalles->fields[20]; 
							$impuesto->baseImponible = $this->rs_detalles->fields[21]; 
							$impuesto->valor = $this->rs_detalles->fields[22];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
					$detalleFactura->impuestos = $impuestos_det;
					$detalles_factura[$i]=$detalleFactura;
					$this->rs_detalles->MoveNext();
					$i+=1;
				}
				$this->rs_detalles->Close();
				$factura->detalles = $detalles_factura;
			}
			$pagos = array();
			$check_sql="SELECT 	a.fp_id,
								sri_forma_pago.fp_codigo,
								a.fp_valor,
								coalesce(a.fp_plazo,0),
								coalesce(a.fp_unidad_tiempo,'DIAS') 
						FROM del_forma_pago_factura a 
						inner join del_forma_pago b on a.fp_forma_pago=b.fp_id	
						inner join sri_forma_pago on b.fp_sri=sri_forma_pago.fp_codigo
						where a.fp_factura=".$fac_numero ;
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_pagos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_pagos = false;
          $this->rs_pagos_erro = $this->Db->ErrorMsg();
      } 
 
			if ($this->rs_pagos   === false){
				echo "Error al acceder a las formas de pago";
			}else{
				$i=0;
				while (!$this->rs_pagos->EOF){
					$pago = new pagos();
					$pago->formaPago =$this->rs_pagos->fields[1];
					$pago->total = $this->rs_pagos->fields[2];
					$pago->plazo = $this->rs_pagos->fields[3];
					$pago->unidadTiempo=$this->rs_pagos->fields[4];
					$pagos[$i]=$pago;
					$i+=1;
					$this->rs_pagos->MoveNext();
				}
				$this->rs_pagos->Close();
			}	
			$factura->pagos = $pagos;
			$camposAdicionales = array();
			$i=0;

			if($this->rs_empresa[0][16]=='S'){
				if($this->rs_factura[0][29]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Ruc";
					$campoAdicional->valor = $this->rs_factura[0][29];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($this->rs_factura[0][28]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Razon Social";
					$campoAdicional->valor = $this->rs_factura[0][28];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($this->rs_factura[0][32]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Placa";
					$campoAdicional->valor = $this->rs_factura[0][32];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($this->rs_factura[0][6]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Punto Emision";
					$campoAdicional->valor = $this->rs_factura[0][6];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

				if($this->rs_factura[0][33]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Contribuyente";
					$campoAdicional->valor = $this->rs_factura[0][33];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

				if($this->rs_factura[0][30]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Telefono Socio";
					$campoAdicional->valor = $this->rs_factura[0][30];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($this->rs_factura[0][38]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Direccion Emisor";
					$campoAdicional->valor = $this->rs_factura[0][38];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
			}

			if($this->rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$this->rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($this->rs_factura[0][12]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $this->rs_factura[0][12];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($this->rs_factura[0][13]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Email";
					$campoAdicional->valor = $this->rs_factura[0][13];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
			if($this->rs_factura[0][26]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Comentario";
				$campoAdicional->valor = $this->rs_factura[0][26];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($this->rs_factura[0][34]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Diagnostico";
				$campoAdicional->valor = $this->rs_factura[0][34];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			$factura->infoAdicional = $camposAdicionales;
			if($i_log){
					var_dump($factura);
					echo '<br>';
			}
			try{
				$procesarComprobante = new procesarComprobante();
				$procesarComprobante->comprobante = $factura;
				$procesarComprobante->envioSRI = false; 
				$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
				if($i_log){
					
					var_dump($res);
					echo '<br>';
				}	
			}catch(Throwable $e){
				echo $e->getMessage();	
			}
				
			
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $factura;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $this->rs_factura[0][1];
						$comprobantePendiente->codDoc = $this->rs_factura[0][2];
						$comprobantePendiente->establecimiento = $this->rs_factura[0][5];
						$comprobantePendiente->fechaEmision = $this->rs_factura[0][3];
						$comprobantePendiente->ptoEmision = $this->rs_factura[0][6];
						$comprobantePendiente->ruc = $this->rs_empresa[0][0];
						$comprobantePendiente->secuencial = $this->rs_factura[0][7];
						$comprobantePendiente->tipoEmision = $this->rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $this->rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $this->rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $this->rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."'
								WHERE fac_numero=".$fac_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($factura,$this->rs_factura[0][13])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
					if($i_log){
						var_dump($correo_enviado);
						echo '<br>';
					}	
				}
				$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_autorizacion='".$res->return->numeroAutorizacion."',
									 fac_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 fac_error_sri='',
									 fac_correo_enviado='".$correo_enviado."'
								WHERE fac_numero=".$fac_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($factura,$this->rs_factura[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
						if($i_log){
						var_dump($correo_enviado);
						echo '<br>';
					}
					}
					$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='AUTORIZADO',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_autorizacion='".$res->return->claveAcceso."',
									 fac_correo_enviado='".$correo_enviado."'
								WHERE fac_numero=".$fac_numero ;
				}else{
					$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_error_sri='".$res->return->mensajes->mensaje."'
								WHERE fac_numero=".$fac_numero ;
				}

				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_error_sri='".$res->return->mensajes->mensaje."',
									 fac_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE fac_numero=".$fac_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function autorizar_liquidacion ($liq_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($liq_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$liquidacion = new \liquidacionCompra();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollo/')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir=$this->rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir_ireport=$this->rs[0][0];
		}
		$check_sql="SELECT fc_empresa,liq_establecimiento FROM del_factura_compra where fc_id=".$liq_numero;
		 
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

		if (isset($this->rs[0][0])){
			$var_empresa=$this->rs[0][0];
			$var_establecimiento=$this->rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$this->rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$this->rs_empresa[0][0]."/logo/".$this->rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$this->rs_empresa[0][0]."/firma/".$this->rs_empresa[0][2];
			$configApp->passFirma = $this->rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$liquidacion->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Liquidacion de Compras";
			$configCorreo->correoHost = $this->rs_empresa[0][12];
			$configCorreo->correoPass = $this->rs_empresa[0][13];
			$configCorreo->correoPort = $this->rs_empresa[0][14];
			$configCorreo->correoRemitente = $this->rs_empresa[0][15];
			$configCorreo->sslHabilitado = $this->rs_empresa[0][21];
			$configCorreo->rutaLogo=$this->rs_empresa[0][20].$this->rs_empresa[0][0].'/'.$this->rs_empresa[0][1];
			$liquidacion->configCorreo = $configCorreo;

			$liquidacion->ruc = $this->rs_empresa[0][0];
			$liquidacion->razonSocial = $this->rs_empresa[0][4];
			$liquidacion->nombreComercial = $this->rs_empresa[0][5]; 
			$liquidacion->dirMatriz = $this->rs_empresa[0][6]; 
			$liquidacion->obligadoContabilidad =$this->rs_empresa[0][7]; 
			$liquidacion->tipoEmision = $this->rs_empresa[0][9];

			if ($this->rs_empresa[0][10]!=''){
				$liquidacion->contribuyenteEspecial = $this->rs_empresa[0][10];
			}
			$liquidacion->padronMicroempresa=$this->rs_empresa[0][17];
			$liquidacion->padronAgenteRetencion=$this->rs_empresa[0][18];
			if($this->rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
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

				if (isset($this->rs[0][0])){
				   $liquidacion->numeroResolucion=$this->rs[0][0];
				}
			}
			$liquidacion->artesanoCalificado=$this->rs_empresa[0][19];

		}

		$check_sql="SELECT
							fc_id,
							liq_ambiente,
							fc_tipo_comprobante,
							fecha,
							est_direccion,
							est_codigo,
							pen_serie,
							fc_secuencial,
							pr_tipo_identificacion,
							pr_nombre,
							pr_identificacion,
							pr_direccion,
							pr_telefono,
							pr_email,
							fc_subtotal,
							fc_total_descuento,
							fc_subtotal_iva,
							fc_valor_iva,
							fc_subtotal_cero,
							fc_subtotal_no_objeto,
							fc_subtotal_excento,
							fc_valor_ice,
							fc_valor_irbpnr,
							fc_propina,
							fc_total,
							fc_guia_remision,
							fc_comentario,
							sp_busca_parametro('MONEDASRI'::character varying, 'DOLAR'::character varying) AS fc_moneda,
							fc_total-fc_propina,
							est_padronrimpe,
							est_leyenda_rimpe,
							fc_correo_enviado
					FROM    v_del_datos_liquidacion_sri
					WHERE fc_id=".$liq_numero ;

		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_liquidacion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_liquidacion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_liquidacion = false;
          $this->rs_liquidacion_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_liquidacion[0][0])){
			$correo_enviado=$this->rs_liquidacion[0][31];
			$liquidacion->padronRimpe=$this->rs_liquidacion[0][29];
			$liquidacion->leyendaRimpe=$this->rs_liquidacion[0][30];
			$liquidacion->ambiente = $this->rs_liquidacion[0][1];
			$liquidacion->codDoc = $this->rs_liquidacion[0][2];
			$liquidacion->fechaEmision = $this->rs_liquidacion[0][3];
			$liquidacion->dirEstablecimiento = $this->rs_liquidacion[0][4];
			$liquidacion->establecimiento = $this->rs_liquidacion[0][5]; 
			$liquidacion->ptoEmision = $this->rs_liquidacion[0][6]; 
			$liquidacion->secuencial = $this->rs_liquidacion[0][7];
			$liquidacion->tipoIdentificacionProveedor = $this->rs_liquidacion[0][8];
			if($this->rs_liquidacion[0][25]<>''){
				$liquidacion->guiaRemision=$this->rs_liquidacion[0][25];
			}
			$liquidacion->razonSocialProveedor = $this->rs_liquidacion[0][9]; 
			$liquidacion->identificacionProveedor = $this->rs_liquidacion[0][10];
			$liquidacion->direccionProveedor= $this->rs_liquidacion[0][11];
			$liquidacion->totalSinImpuestos = $this->rs_liquidacion[0][14]; 
			$liquidacion->totalDescuento = $this->rs_liquidacion[0][15]; 
			$total_Impuestos=array();
			$i=0;
					$sql_ivas_cobrados="SELECT dfc_porcentaje_iva,
												ROUND(sum(dfc_cantidad*(dfc_precio_unitario-dfc_descuento)+dfc_valor_ice),2),
												round(sum(dfc_base_iva) *iva_porcentaje/100,2)
										FROM  del_detalle_factura_compra 
										inner join sri_tarifa_iva on iva_codigo=dfc_porcentaje_iva
										WHERE dfc_factura=".$liq_numero."
										group by dfc_porcentaje_iva,iva_porcentaje";
					 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_ivas = false;
          $this->rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_ivas   === false){
						echo "Error al acceder a del_detalle_liquidacion";
					}else{
						while (!$this->rs_ivas->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo ='2'; 
							$totalImpuesto->codigoPorcentaje = $this->rs_ivas->fields[0]; 
							$totalImpuesto->baseImponible = $this->rs_ivas->fields[1];
							$totalImpuesto->valor = $this->rs_ivas->fields[2];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_ivas->MoveNext();
						}
						$this->rs_ivas->Close();
					}
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}
			
				if($this->rs_liquidacion[0][21]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 dfc_porcentaje_ice,
										sum(dfc_base_ice),
										sum(dfc_valor_ice) 
								FROM del_detalle_factura_compra 
								WHERE dfc_porcentaje_ice<>'0'
								and dfc_factura=".$liq_numero."
								group by dfc_porcentaje_ice";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_impuesto = false;
          $this->rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$this->rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$this->rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $this->rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $this->rs_impuesto->fields[2];
							$totalImpuesto->valor = $this->rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_impuesto->MoveNext();
						}
						$this->rs_impuesto->Close();
					}	
				}
				if($this->rs_liquidacion[0][22]>0){	
					$check_sql="SELECT  '5' as impuesto,
										 dfc_porcentaje_irbpnr,
										sum(dfc_base_irbpnr),
										sum(dfc_valor_irbpnr) 
								FROM del_detalle_factura_compra 
								WHERE dfc_porcentaje_irbpnr<>'0'
								and dfc_factura=".$liq_numero."
								group by dfc_porcentaje_irbpnr";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_impuesto = false;
          $this->rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$this->rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$this->rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $this->rs_impuesto->fields[1];
							$totalImpuesto->baseImponible = $this->rs_impuesto->fields[2]; 
							$totalImpuesto->valor = $this->rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_impuesto->MoveNext();
						}
						$this->rs_impuesto->Close();
					}	
				}
			$liquidacion->totalConImpuesto = $total_Impuestos;
			$liquidacion->propina = $this->rs_liquidacion[0][23]; 
			$liquidacion->importeTotal = $this->rs_liquidacion[0][28]; 
			$liquidacion->moneda = $this->rs_liquidacion[0][27];
			$check_sql="SELECT
								dfc_factura,
								codigo,
								codigo_aux,
								fp_descripcion,
								dfc_cantidad,
								dfc_precio_unitario,
								dfc_descuento,
								valor_sin_impuesto,
								fp_iva,
								dfc_porcentaje_iva,
								iva_porcentaje,
								dfc_base_iva,
								dfc_valor_iva,
								fp_ice,
								dfc_porcentaje_ice,
								dfc_base_ice,
								ice_tarifa,
								dfc_valor_ice,
								fp_irbpnr,
								dfc_porcentaje_irbpnr,
								irbpnr_tarifa,
								dfc_base_irbpnr,
								dfc_valor_irbpnr,
								dfc_descripcion 
							FROM
								v_del_detalle_liquidacion_sri
							where dfc_factura=".$liq_numero."
							order by dfc_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_detalles = false;
          $this->rs_detalles_erro = $this->Db->ErrorMsg();
      } 
   
			if ($this->rs_detalles   === false){
				echo "Error al acceder al detalle de la factura";
			}else{
				$detalles_factura = array();
				$i=0;
				while (!$this->rs_detalles->EOF){
					$detalleFactura = new detalleFactura();
					$detalleFactura->codigoPrincipal = $this->rs_detalles->fields[1];
					$detalleFactura->codigoAuxiliar = $this->rs_detalles->fields[2]; 
					$detalleFactura->descripcion = $this->rs_detalles->fields[3]; 
					$detalleFactura->cantidad = $this->rs_detalles->fields[4]; 
					$detalleFactura->precioUnitario = $this->rs_detalles->fields[5]; 
					$detalleFactura->descuento = $this->rs_detalles->fields[6]; 
					$detalleFactura->precioTotalSinImpuesto = $this->rs_detalles->fields[7]; 
					if ($this->rs_detalles->fields[23] <>""){
						$informacion_adicional=array();
						$detalle_adicional= new detalleAdicional();
						$detalle_adicional->nombre = 'Adicional';
						$detalle_adicional->valor = $this->rs_detalles->fields[23] ;
						$informacion_adicional[0]=$detalle_adicional;							 
						$detalleFactura->detalleAdicional = $informacion_adicional;	
					}
						$impuestos_det=array();
						$j=0;
						$impuesto = new impuesto();
						$impuesto->codigo = $this->rs_detalles->fields[8];
						$impuesto->codigoPorcentaje = $this->rs_detalles->fields[9]; 
						$impuesto->tarifa = $this->rs_detalles->fields[10]; 
						$impuesto->baseImponible = $this->rs_detalles->fields[11]; 
						$impuesto->valor = $this->rs_detalles->fields[12];
						$impuestos_det[$j]=$impuesto;
						$j+=1;
						if($this->rs_detalles->fields[14]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $this->rs_detalles->fields[13];
							$impuesto->codigoPorcentaje = $this->rs_detalles->fields[14]; 
							$impuesto->tarifa = $this->rs_detalles->fields[16];  
							$impuesto->baseImponible = $this->rs_detalles->fields[15]; 
							$impuesto->valor = $this->rs_detalles->fields[17];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
						if($this->rs_detalles->fields[19]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $this->rs_detalles->fields[18];
							$impuesto->codigoPorcentaje = $this->rs_detalles->fields[19]; 
							$impuesto->tarifa = $this->rs_detalles->fields[20]; 
							$impuesto->baseImponible = $this->rs_detalles->fields[21]; 
							$impuesto->valor = $this->rs_detalles->fields[22];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
					$detalleFactura->impuestos = $impuestos_det;
					$detalles_factura[$i]=$detalleFactura;
					$this->rs_detalles->MoveNext();
					$i+=1;
				}
				$this->rs_detalles->Close();
				$liquidacion->detalles = $detalles_factura;
			}
			$pagos = array();
			$check_sql="SELECT 	a.fp_id,
								sri_forma_pago.fp_codigo,
								a.fp_valor,
								coalesce(a.fp_plazo,0),
								coalesce(a.fp_unidad_tiempo,'DIAS') 
						FROM del_forma_pago_factura_compra a 
						inner join del_forma_pago b on a.fp_forma_pago=b.fp_id	
						inner join sri_forma_pago on b.fp_sri=sri_forma_pago.fp_codigo
						where a.fp_factura=".$liq_numero ;
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_pagos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_pagos = false;
          $this->rs_pagos_erro = $this->Db->ErrorMsg();
      } 
 
			if ($this->rs_pagos   === false){
				echo "Error al acceder a las formas de pago";
			}else{
				$i=0;
				while (!$this->rs_pagos->EOF){
					$pago = new pagos();
					$pago->formaPago =$this->rs_pagos->fields[1];
					$pago->total = $this->rs_pagos->fields[2];
					$pago->plazo = $this->rs_pagos->fields[3];
					$pago->unidadTiempo=$this->rs_pagos->fields[4];
					$pagos[$i]=$pago;
					$i+=1;
					$this->rs_pagos->MoveNext();
				}
				$this->rs_pagos->Close();
			}	
			$liquidacion->pagos = $pagos;
			$camposAdicionales = array();
			$i=0;

			if($this->rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$this->rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($this->rs_liquidacion[0][12]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $this->rs_liquidacion[0][12];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($this->rs_liquidacion[0][13]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $this->rs_liquidacion[0][13];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($this->rs_liquidacion[0][26]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Comentario";
				$campoAdicional->valor = $this->rs_liquidacion[0][26];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			$liquidacion->infoAdicional = $camposAdicionales;


			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $liquidacion;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($liquidacion);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}	
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $liquidacion;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $this->rs_liquidacion[0][1];
						$comprobantePendiente->codDoc = $this->rs_liquidacion[0][2];
						$comprobantePendiente->establecimiento = $this->rs_liquidacion[0][5];
						$comprobantePendiente->fechaEmision = $this->rs_liquidacion[0][3];
						$comprobantePendiente->ptoEmision = $this->rs_liquidacion[0][6];
						$comprobantePendiente->ruc = $this->rs_empresa[0][0];
						$comprobantePendiente->secuencial = $this->rs_liquidacion[0][7];
						$comprobantePendiente->tipoEmision = $this->rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $this->rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $this->rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $this->rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}	
			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				 $update_sql =  "UPDATE del_factura_compra 
                                    SET liq_error_sri='" . $res->return->mensajes->mensaje . "',
                                        fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."'
                                    WHERE fc_id=" . $liq_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_factura_compra 
                                    SET liq_estado_sri='" . $res->return->estadoComprobante . "',
                                        fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."'
                                    WHERE fc_id=" . $liq_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($liquidacion,$this->rs_liquidacion[0][13])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				
				$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='".$res->return->estadoComprobante."',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',
									 liq_clave='".$res->return->claveAcceso."',   
									 fc_autorizacion='".$res->return->numeroAutorizacion."',
									 liq_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 fc_correo_enviado='".$correo_enviado."'
								WHERE fc_id=".$liq_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($liquidacion,$this->rs_liquidacion[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					
					$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='AUTORIZADO',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',
									 liq_clave='".$res->return->claveAcceso."',   
									 fc_autorizacion='".$res->return->claveAcceso."',
									  fc_correo_enviado='".$correo_enviado."'
								WHERE fc_id=".$liq_numero ;
				}else{
					$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='".$res->return->estadoComprobante."',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',	
									 liq_clave='".$res->return->claveAcceso."',   
									 liq_error_sri='".$res->return->mensajes->mensaje."'
								WHERE fc_id=".$liq_numero ;
				}
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='".$res->return->estadoComprobante."',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',
									 liq_clave='".$res->return->claveAcceso."',   
									 liq_error_sri='".$res->return->mensajes->mensaje."',
									 liq_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE fc_id=".$liq_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function autorizar_nc ($nc_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($nc_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$notaCredito = new notaCredito();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollos/')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir=$this->rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir_ireport=$this->rs[0][0];
		}
		$check_sql="SELECT nc_empresa,nc_establecimiento FROM del_nota_credito WHERE nc_numero=".$nc_numero;
		 
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

		if (isset($this->rs[0][0])){
			$var_empresa=$this->rs[0][0];
			$var_establecimiento=$this->rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$this->rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$this->rs_empresa[0][0]."/logo/".$this->rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$this->rs_empresa[0][0]."/firma/".$this->rs_empresa[0][2];
			$configApp->passFirma = $this->rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$notaCredito->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Nota de Credito";
			$configCorreo->correoHost = $this->rs_empresa[0][12];
			$configCorreo->correoPass = $this->rs_empresa[0][13];
			$configCorreo->correoPort = $this->rs_empresa[0][14];
			$configCorreo->correoRemitente = $this->rs_empresa[0][15];
			$configCorreo->sslHabilitado = $this->rs_empresa[0][21];
			$configCorreo->rutaLogo=$this->rs_empresa[0][20].$this->rs_empresa[0][0].'/'.$this->rs_empresa[0][1];
			$notaCredito->configCorreo = $configCorreo;

			$notaCredito->ruc = $this->rs_empresa[0][0];
			$notaCredito->razonSocial = $this->rs_empresa[0][4];
			$notaCredito->nombreComercial = $this->rs_empresa[0][5]; 
			$notaCredito->dirMatriz = $this->rs_empresa[0][6]; 
			$notaCredito->obligadoContabilidad =$this->rs_empresa[0][7]; 
			$notaCredito->tipoEmision = $this->rs_empresa[0][9];
			if ($this->rs_empresa[0][10]!=''){
				$notaCredito->contribuyenteEspecial = $this->rs_empresa[0][10];
			}
			$notaCredito->padronMicroempresa=$this->rs_empresa[0][17];
			$notaCredito->padronAgenteRetencion=$this->rs_empresa[0][18];
			if($this->rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
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

				if (isset($this->rs[0][0])){
				   $notaCredito->numeroResolucion=$this->rs[0][0];
				}
			}
			$notaCredito->artesanoCalificado=$this->rs_empresa[0][19];

		}

		$check_sql="SELECT
						nc_numero,
						nc_ambiente,
						nc_tipo_comprobante,
						fecha,
						est_direccion,
						est_codigo,
						pen_serie,
						nc_secuencial,
						cl_tipo_identificacion,
						cl_nombre,
						cl_identificacion,
						nc_cod_docmod,
						nc_secuencial_docmod,
						fecha_docmod,
						nc_subtotal,
						nc_total_descuento,
						nc_subtotal_iva,
						nc_valor_iva,
						nc_subtotal_cero,
						nc_subtotal_no_objeto,
						nc_subtotal_excento,
						nc_valor_ice,
						nc_valor_irbpnr,
						nc_total,
						nc_motivo,
						sp_busca_parametro('MONEDASRI'::character varying, 'DOLAR'::character varying) AS nc_moneda,
						cl_direccion,
						cl_email,
						cl_telefono,
						usuario,
						usu_cedula,
						usu_telefono,
						usu_email,
						usu_placa,
						usu_tipo_documento,
						est_padronrimpe,
						est_leyenda_rimpe,
						nc_correo_enviado
					FROM
						v_del_datos_nota_credito_sri
					WHERE nc_numero=".$nc_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_notaCredito = array();
      $this->rs_notacredito = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_notaCredito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->rs_notacredito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_notaCredito = false;
          $this->rs_notaCredito_erro = $this->Db->ErrorMsg();
          $this->rs_notacredito = false;
          $this->rs_notacredito_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_notacredito[0][0])){
			$correo_enviado=$this->rs_notacredito[0][37];
			$notaCredito->padronRimpe=$this->rs_notacredito[0][35];
			$notaCredito->leyendaRimpe=$this->rs_notacredito[0][36];
			$notaCredito->ambiente = $this->rs_notacredito[0][1];
			$notaCredito->codDoc = $this->rs_notacredito[0][2];
			$notaCredito->fechaEmision = $this->rs_notacredito[0][3];
			$notaCredito->dirEstablecimiento = $this->rs_notacredito[0][4];
			$notaCredito->establecimiento = $this->rs_notacredito[0][5]; 
			$notaCredito->ptoEmision = $this->rs_notacredito[0][6]; 
			$notaCredito->secuencial = $this->rs_notacredito[0][7];
			$notaCredito->tipoIdentificacionComprador = $this->rs_notacredito[0][8];
			$notaCredito->razonSocialComprador = $this->rs_notacredito[0][9]; 
			$notaCredito->identificacionComprador = $this->rs_notacredito[0][10];
			$notaCredito->codDocModificado = $this->rs_notacredito[0][11];
			$notaCredito->numDocModificado = $this->rs_notacredito[0][12];
			$notaCredito->fechaEmisionDocSustento = $this->rs_notacredito[0][13];
			$notaCredito->totalSinImpuestos = $this->rs_notacredito[0][14]; 
			$notaCredito->totalDescuento = $this->rs_notacredito[0][15]; 
			$total_Impuestos=array();
			$i=0;
					$sql_ivas_cobrados="SELECT dnc_porcentaje_iva,
												ROUND(sum(dnc_cantidad*(dnc_precio_unitario-dnc_descuento)+dnc_valor_ice),2),
												round(sum(dnc_base_iva) *iva_porcentaje/100,2)
										FROM  del_detalle_nota_credito 
										inner join sri_tarifa_iva on iva_codigo=dnc_porcentaje_iva
										WHERE dnc_nota_credito=".$nc_numero."
										group by dnc_porcentaje_iva,iva_porcentaje";
					 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_ivas = false;
          $this->rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_ivas   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$this->rs_ivas->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo ='2'; 
							$totalImpuesto->codigoPorcentaje = $this->rs_ivas->fields[0]; 
							$totalImpuesto->baseImponible = $this->rs_ivas->fields[1];
							$totalImpuesto->valor = $this->rs_ivas->fields[2];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_ivas->MoveNext();
						}
						$this->rs_ivas->Close();
					}	
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}
				if($this->rs_notacredito[0][21]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 dnc_porcentaje_ice,
										sum(dnc_base_ice),
										sum(dnc_valor_ice) 
								FROM del_detalle_nota_credito 
								WHERE dnc_porcentaje_ice<>'0' 
								and dnc_nota_credito=".$nc_numero."
								group by dnc_porcentaje_ice";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_impuesto = false;
          $this->rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_impuesto   === false){
						echo "Error al acceder a del_detalle_notaCredito";
					}else{
						while (!$this->rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$this->rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $this->rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $this->rs_impuesto->fields[2];
							$totalImpuesto->valor = $this->rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_impuesto->MoveNext();
						}
						$this->rs_impuesto->Close();
					}	
				}
				if($this->rs_notacredito[0][22]>0){	
					$check_sql="SELECT  '5' as impuesto,
										dnc_porcentaje_irbpnr,
										sum(dnc_base_irbpnr),
										sum(dnc_valor_irbpnr) 
								FROM del_detalle_nota_credito 
								WHERE dnc_porcentaje_irbpnr<>'0' 
								and dnc_nota_credito=".$nc_numero ."
								group by dnc_porcentaje_irbpnr";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_impuesto = false;
          $this->rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_impuesto   === false){
						echo "Error al acceder a del_detalle_notaCredito";
					}else{
						while (!$this->rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$this->rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $this->rs_impuesto->fields[1];
							$totalImpuesto->baseImponible = $this->rs_impuesto->fields[2]; 
							$totalImpuesto->valor = $this->rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_impuesto->MoveNext();
						}
						$this->rs_impuesto->Close();
					}	
				}
			$notaCredito->totalConImpuesto = $total_Impuestos;
			$notaCredito->valorModificacion = $this->rs_notacredito[0][23];
			$notaCredito->motivo = $this->rs_notacredito[0][24];
			$notaCredito->moneda = $this->rs_notacredito[0][25];

			$check_sql="SELECT
								dnc_nota_credito,
								dnc_producto,
								pro_codigo_aux,
								pro_descripcion,
								dnc_cantidad,
								dnc_precio_unitario,
								dnc_descuento,
								valor_sin_impuesto,
								pro_iva,
								dnc_porcentaje_iva,
								iva_porcentaje,
								dnc_base_iva,
								dnc_valor_iva,
								pro_ice,
								dnc_porcentaje_ice,
								dnc_base_ice,
								ice_tarifa,
								dnc_valor_ice,
								pro_irbpnr,
								dnc_porcentaje_irbpnr,
								irbpnr_tarifa,
								dnc_base_irbpnr,
								dnc_valor_irbpnr,
								dnc_descripcion 
							FROM
								v_del_detalle_nota_credito_sri
							where dnc_nota_credito=".$nc_numero."
							order by dnc_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_detalles = false;
          $this->rs_detalles_erro = $this->Db->ErrorMsg();
      } 
   
			if ($this->rs_detalles   === false){
				echo "Error al acceder al detalle de la notaCredito";
			}else{
				$detalles_notaCredito = array();
				$i=0;
				while (!$this->rs_detalles->EOF){
					$detallenotaCredito = new detalleNotaCredito();
					$detallenotaCredito->codigoInterno = $this->rs_detalles->fields[1];
					$detallenotaCredito->codigoAdicional = $this->rs_detalles->fields[2]; 
					$detallenotaCredito->descripcion = $this->rs_detalles->fields[3]; 
					$detallenotaCredito->cantidad = $this->rs_detalles->fields[4]; 
					$detallenotaCredito->precioUnitario = $this->rs_detalles->fields[5]; 
					$detallenotaCredito->descuento = $this->rs_detalles->fields[6]; 
					$detallenotaCredito->precioTotalSinImpuesto = $this->rs_detalles->fields[7]; 
					if ($this->rs_detalles->fields[23] <>""){
						$informacion_adicional=array();
						$detalle_adicional= new detalleAdicional();
						$detalle_adicional->nombre = 'Adicional';
						$detalle_adicional->valor = $this->rs_detalles->fields[23] ;
						$informacion_adicional[0]=$detalle_adicional;							 
						$detallenotaCredito->detallesAdicionales = $informacion_adicional;	
					}
						$impuestos_det=array();
						$j=0;
						$impuesto = new impuesto();
						$impuesto->codigo = $this->rs_detalles->fields[8];
						$impuesto->codigoPorcentaje = $this->rs_detalles->fields[9]; 
						$impuesto->tarifa = $this->rs_detalles->fields[10]; 
						$impuesto->baseImponible = $this->rs_detalles->fields[11]; 
						$impuesto->valor = $this->rs_detalles->fields[12];
						$impuestos_det[$j]=$impuesto;
						$j+=1;
						if($this->rs_detalles->fields[14]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $this->rs_detalles->fields[13];
							$impuesto->codigoPorcentaje = $this->rs_detalles->fields[14]; 
							$impuesto->tarifa = $this->rs_detalles->fields[16];  
							$impuesto->baseImponible = $this->rs_detalles->fields[15]; 
							$impuesto->valor = $this->rs_detalles->fields[17];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
						if($this->rs_detalles->fields[19]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $this->rs_detalles->fields[18];
							$impuesto->codigoPorcentaje = $this->rs_detalles->fields[19]; 
							$impuesto->tarifa = $this->rs_detalles->fields[20]; 
							$impuesto->baseImponible = $this->rs_detalles->fields[21]; 
							$impuesto->valor = $this->rs_detalles->fields[22];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
					$detallenotaCredito->impuestos = $impuestos_det;
					$detalles_notaCredito[$i]=$detallenotaCredito;
					$this->rs_detalles->MoveNext();
					$i+=1;
				}
				$this->rs_detalles->Close();
				$notaCredito->detalles = $detalles_notaCredito;
			}

			$camposAdicionales = array();
			$i=0;

			if($this->rs_empresa[0][16]=='S'){
				if($this->rs_notacredito[0][6]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Punto Emision";
					$campoAdicional->valor = $this->rs_notacredito[0][6];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($this->rs_notacredito[0][29]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Razon Social";
					$campoAdicional->valor = $this->rs_notacredito[0][29];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($this->rs_notacredito[0][30]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Ruc";
					$campoAdicional->valor = $this->rs_notacredito[0][30];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($this->rs_notacredito[0][31]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Telefono Socio";
					$campoAdicional->valor = $this->rs_notacredito[0][31];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($this->rs_notacredito[0][33]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Placa";
					$campoAdicional->valor = $this->rs_notacredito[0][33];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($this->rs_notacredito[0][34]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Contribuyente";
					$campoAdicional->valor = $this->rs_notacredito[0][34];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

			}


			if($this->rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$this->rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if($this->rs_notacredito[0][28]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $this->rs_notacredito[0][28];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($this->rs_notacredito[0][27]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $this->rs_notacredito[0][27];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if($this->rs_notacredito[0][26]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Direccion";
				$campoAdicional->valor = $this->rs_notacredito[0][26];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			$notaCredito->infoAdicional = $camposAdicionales;

			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $notaCredito;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($notaCredito);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}	
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $notaCredito;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $this->rs_notacredito[0][1];
						$comprobantePendiente->codDoc = $this->rs_notacredito[0][2];
						$comprobantePendiente->establecimiento = $this->rs_notacredito[0][5];
						$comprobantePendiente->fechaEmision = $this->rs_notacredito[0][3];
						$comprobantePendiente->ptoEmision = $this->rs_notacredito[0][6];
						$comprobantePendiente->ruc = $this->rs_empresa[0][0];
						$comprobantePendiente->secuencial = $this->rs_notacredito[0][7];
						$comprobantePendiente->tipoEmision = $this->rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $this->rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $this->rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $this->rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE del_nota_credito 
								SET nc_error_sri='" . $res->return->mensajes->mensaje . "',
									nc_archivo='".$this->crearNombreFicheroSinExtension($notaCredito)."'
								WHERE nc_numero=" . $nc_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_nota_credito 
								 SET nc_estado_sri='" . $res->return->estadoComprobante . "',
									 nc_archivo='".$this->crearNombreFicheroSinExtension($notaCredito)."'
								 WHERE nc_numero=" . $nc_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
						if($this->enviarCorreo($notaCredito,$this->rs_notacredito[0][27])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
				
				$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='".$res->return->estadoComprobante."',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_autorizacion='".$res->return->numeroAutorizacion."',
									 nc_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 nc_error_sri='',
									 nc_correo_enviado='".$correo_enviado."'
								WHERE nc_numero=".$nc_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($notaCredito,$this->rs_notacredito[0][27])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='AUTORIZADO',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_autorizacion='".$res->return->claveAcceso."',
									 nc_correo_enviado='".$correo_enviado."'
								WHERE nc_numero=".$nc_numero ;
				}else{
					$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='".$res->return->estadoComprobante."',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_error_sri='".$res->return->mensajes->mensaje."'
								WHERE nc_numero=".$nc_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='".$res->return->estadoComprobante."',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_error_sri='".$res->return->mensajes->mensaje."',
									 nc_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE nc_numero=".$nc_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function autorizar_guia	($gr_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($gr_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$guiaRemision = new guiaRemision();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollos/')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir=$this->rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir_ireport=$this->rs[0][0];
		}
		$check_sql="SELECT gr_empresa,gr_establecimiento FROM del_guia_remision WHERE gr_numero=".$gr_numero;
		 
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

		if (isset($this->rs[0][0])){
			$var_empresa=$this->rs[0][0];
			$var_establecimiento=$this->rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$this->rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$this->rs_empresa[0][0]."/logo/".$this->rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$this->rs_empresa[0][0]."/firma/".$this->rs_empresa[0][2];
			$configApp->passFirma = $this->rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$guiaRemision->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Guia de Remision";
			$configCorreo->correoHost = $this->rs_empresa[0][12];
			$configCorreo->correoPass = $this->rs_empresa[0][13];
			$configCorreo->correoPort = $this->rs_empresa[0][14];
			$configCorreo->correoRemitente = $this->rs_empresa[0][15];
			$configCorreo->sslHabilitado = $this->rs_empresa[0][21];
			$configCorreo->rutaLogo=$this->rs_empresa[0][20].$this->rs_empresa[0][0].'/'.$this->rs_empresa[0][1];
			$guiaRemision->configCorreo = $configCorreo;

			$guiaRemision->ruc = $this->rs_empresa[0][0];
			$guiaRemision->razonSocial = $this->rs_empresa[0][4];
			$guiaRemision->nombreComercial = $this->rs_empresa[0][5]; 
			$guiaRemision->dirMatriz = $this->rs_empresa[0][6]; 
			$guiaRemision->obligadoContabilidad =$this->rs_empresa[0][7]; 
			$guiaRemision->tipoEmision = $this->rs_empresa[0][9];
			if ($this->rs_empresa[0][10]!=''){
				$guiaRemision->contribuyenteEspecial = $this->rs_empresa[0][10];
			}
			$guiaRemision->padronMicroempresa=$this->rs_empresa[0][17];
			$guiaRemision->padronAgenteRetencion=$this->rs_empresa[0][18];
			if($this->rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
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

				if (isset($this->rs[0][0])){
				   $guiaRemision->numeroResolucion=$this->rs[0][0];
				}
			}
			$guiaRemision->artesanoCalificado=$this->rs_empresa[0][19];

		}

		$check_sql="SELECT  gr_numero,
							gr_ambiente,
							gr_tipo_comprobante,
							est_codigo,
							pen_serie,
							gr_secuencial,
							est_direccion,
							gr_direccion_partida,
							tr_nombre,
							tr_tipo_identificacion,
							tr_identificacion,
							fecha_inicio,
							fecha_fin,
							tr_placa,
							tr_email,
							est_padronrimpe,
							est_leyenda_rimpe,
							gr_correo_enviado
					FROM v_del_datos_guia_remision
					WHERE gr_numero=".$gr_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_guiaRemision = array();
      $this->rs_guiaremision = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_guiaRemision[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->rs_guiaremision[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_guiaRemision = false;
          $this->rs_guiaRemision_erro = $this->Db->ErrorMsg();
          $this->rs_guiaremision = false;
          $this->rs_guiaremision_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_guiaremision[0][0])){
			$correo_enviado=$this->rs_guiaremision[0][17];
			$guiaRemision->padronRimpe=$this->rs_guiaremision[0][15];
			$guiaRemision->leyendaRimpe=$this->rs_guiaremision[0][16];
			$guiaRemision->ambiente = $this->rs_guiaremision[0][1];
			$guiaRemision->codDoc = $this->rs_guiaremision[0][2];
			$guiaRemision->establecimiento = $this->rs_guiaremision[0][3];
			$guiaRemision->ptoEmision = $this->rs_guiaremision[0][4]; 
			$guiaRemision->secuencial = $this->rs_guiaremision[0][5];
			$guiaRemision->dirEstablecimiento = $this->rs_guiaremision[0][6];
			$guiaRemision->dirPartida = $this->rs_guiaremision[0][7];
			$guiaRemision->razonSocialTransportista = $this->rs_guiaremision[0][8];
			$guiaRemision->tipoIdentificacionTransportista = $this->rs_guiaremision[0][9];
			$guiaRemision->rucTransportista =$this->rs_guiaremision[0][10];
			$guiaRemision->rise = "RISE";
			$guiaRemision->fechaIniTransporte = $this->rs_guiaremision[0][11];
			$guiaRemision->fechaFinTransporte = $this->rs_guiaremision[0][12];
			$guiaRemision->placa = $this->rs_guiaremision[0][13];

			$check_sql="SELECT dg_guia,
								dg_identificacion_destinatario,
								dg_nombre_destinatario,
								dg_direccion_destino,
								dg_motivo_traslado,
								dg_documento_aduanero,
								coalesce(est_codigo,''),
								dg_ruta,
								dg_coddoc_sustento,
								dg_documento_sustento,
								dg_autorizacion_sustento,
								coalesce(dg_fecha_sustento,''),
								dg_id
							FROM v_del_destinatario_guia_sri
						where dg_guia=".$gr_numero."
						order by dg_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_destinatarios = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_destinatarios = false;
          $this->rs_destinatarios_erro = $this->Db->ErrorMsg();
      } 
   
			if ($this->rs_destinatarios   === false){
				echo "Error al acceder al detalle de la guiaRemision";
			}else{
				$destinatarios_guiaRemision = array();
				$i=0;
				while (!$this->rs_destinatarios->EOF){
					$destinatario = new Destinatario();
					$destinatario->identificacionDestinatario = $this->rs_destinatarios->fields[1];
					$destinatario->razonSocialDestinatario = $this->rs_destinatarios->fields[2];
					$destinatario->dirDestinatario =$this->rs_destinatarios->fields[3];
					$destinatario->motivoTraslado = $this->rs_destinatarios->fields[4];
					$destinatario->docAduaneroUnico = $this->rs_destinatarios->fields[5];
					$destinatario->codEstabDestino = $this->rs_destinatarios->fields[6];
					$destinatario->ruta =$this->rs_destinatarios->fields[7];
					$destinatario->codDocSustento = $this->rs_destinatarios->fields[8];
					$destinatario->numDocSustento = $this->rs_destinatarios->fields[9];
					$destinatario->numAutDocSustento = $this->rs_destinatarios->fields[10];
					$destinatario->fechaEmisionDocSustento = $this->rs_destinatarios->fields[11];

					$check_sql="SELECT 
										dgd_destinatario,
										pro_codigo,
										pro_codigo_aux,
										pro_descripcion,
										dgd_cantidad 
								FROM v_del_productos_destinatario_guia_sri
								WHERE dgd_destinatario=".$this->rs_destinatarios->fields[12]."
								order by dgd_id";

					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_detalles = false;
          $this->rs_detalles_erro = $this->Db->ErrorMsg();
      } 
  

					if ($this->rs_detalles   === false){
						echo "Error al acceder al detalle de la guiaRemision";
					}else{
						$this->detalles = array();
						$j=0;
						while (!$this->rs_detalles->EOF){
							$detalle = new DetalleGuiaRemision();
							$detalle->codigoInterno = $this->rs_detalles->fields[1];
							$detalle->codigoAdicional = $this->rs_detalles->fields[2];
							$detalle->descripcion = $this->rs_detalles->fields[3];
							$detalle->cantidad = $this->rs_detalles->fields[4];
							$this->detalles[$j] = $detalle;
							$j+=1;
							$this->rs_detalles->MoveNext();
						}	
						$destinatario->detalles = $this->detalles;
					}
					$destinatarios_guiaRemision[$i]=$destinatario;
					$this->rs_destinatarios->MoveNext();
					$i+=1;
				}
				$this->rs_destinatarios->Close();
				$guiaRemision->destinatarios = $destinatarios_guiaRemision;
			}

			$camposAdicionales = array();
			$campoAdicional = new campoAdicional();
			$campoAdicional->nombre = "Email";
			$campoAdicional->valor = $this->rs_guiaremision[0][14];
			$camposAdicionales[0] = $campoAdicional;
			$campoAdicional = new campoAdicional();
			$campoAdicional->nombre = "Direccion";
			$campoAdicional->valor = $this->rs_empresa[0][6];
			$camposAdicionales[1] = $campoAdicional;
			$guiaRemision->infoAdicional = $camposAdicionales;

			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $guiaRemision;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($guiaRemision);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $guiaRemision;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $this->rs_guiaremision[0][1];
						$comprobantePendiente->codDoc = $this->rs_guiaremision[0][2];
						$comprobantePendiente->establecimiento = $this->rs_guiaremision[0][5];
						$comprobantePendiente->fechaEmision = $this->rs_guiaremision[0][3];
						$comprobantePendiente->ptoEmision = $this->rs_guiaremision[0][6];
						$comprobantePendiente->ruc = $this->rs_empresa[0][0];
						$comprobantePendiente->secuencial = $this->rs_guiaremision[0][7];
						$comprobantePendiente->tipoEmision = $this->rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $this->rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $this->rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $this->rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE del_guia_remision 
                                    SET gr_error_sri='" . $res->return->mensajes->mensaje . "',
                                        gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."' 
                                    WHERE gr_numero=" . $gr_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_guia_remision 
                                    SET gr_estado_sri='" . $res->return->estadoComprobante . "',
                                        gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."' 
                                    WHERE gr_numero=" . $gr_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}

			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($guiaRemision,$this->rs_guiaremision[0][14])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				
				$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='".$res->return->estadoComprobante."',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."' ,
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_autorizacion='".$res->return->numeroAutorizacion."',
									 gr_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 gr_error_sri='',
									 gr_correo_enviado='".$correo_enviado."'
								WHERE gr_numero=".$gr_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($guiaRemision,$this->rs_guiaremision[0][14])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='AUTORIZADO',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."', 
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_autorizacion='".$res->return->claveAcceso."',
									 gr_correo_enviado='".$correo_enviado."'
								WHERE gr_numero=".$gr_numero ;
				}else{
					$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='".$res->return->estadoComprobante."',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."',
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_error_sri='".$res->return->mensajes->mensaje."'
								WHERE gr_numero=".$gr_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='".$res->return->estadoComprobante."',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."',
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_error_sri='".$res->return->mensajes->mensaje."',
									 gr_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE gr_numero=".$gr_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function autorizar_retencion ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($ret_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$correo_enviado="";
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$retencion = new comprobanteRetencion();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir=$this->rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir_ireport=$this->rs[0][0];
		}
		$check_sql="SELECT ret_empresa,ret_establecimiento FROM del_retencion WHERE ret_numero=".$ret_numero;
		 
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

		if (isset($this->rs[0][0])){
			$var_empresa=$this->rs[0][0];
			$var_establecimiento=$this->rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$this->rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$this->rs_empresa[0][0]."/logo/".$this->rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$this->rs_empresa[0][0]."/firma/".$this->rs_empresa[0][2];
			$configApp->passFirma = $this->rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$retencion->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Retencion";
			$configCorreo->correoHost = $this->rs_empresa[0][12];
			$configCorreo->correoPass = $this->rs_empresa[0][13];
			$configCorreo->correoPort = $this->rs_empresa[0][14];
			$configCorreo->correoRemitente = $this->rs_empresa[0][15];
			$configCorreo->sslHabilitado =$this->rs_empresa[0][21];
			$configCorreo->rutaLogo=$this->rs_empresa[0][20].$this->rs_empresa[0][0].'/'.$this->rs_empresa[0][1];
			$retencion->configCorreo = $configCorreo;

			$retencion->ruc = $this->rs_empresa[0][0];
			$retencion->razonSocial = $this->rs_empresa[0][4];
			$retencion->nombreComercial = $this->rs_empresa[0][5]; 
			$retencion->dirMatriz = $this->rs_empresa[0][6]; 
			$retencion->obligadoContabilidad =$this->rs_empresa[0][7]; 
			$retencion->tipoEmision = $this->rs_empresa[0][9];
			if ($this->rs_empresa[0][10]!=''){
				$retencion->contribuyenteEspecial = $this->rs_empresa[0][10];
			}	
			$retencion->padronMicroempresa=$this->rs_empresa[0][17];
			$retencion->padronAgenteRetencion=$this->rs_empresa[0][18];
			if($this->rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
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

				if (isset($this->rs[0][0])){
				   $retencion->numeroResolucion=$this->rs[0][0];
				}
			}
			$retencion->artesanoCalificado=$this->rs_empresa[0][19];

		}
		$check_sql="SELECT	ret_numero,
							ret_ambiente,
							ret_tipo_comprobante,
							fecha,
							est_codigo,
							pen_serie,
							ret_secuencial,
							est_direccion,
							pr_tipo_identificacion,
							pr_nombre,
							pr_identificacion,
							ret_periodo_fiscal, 
							pr_direccion,
							pr_email,
							pr_telefono,
							ret_comentario,
							est_padronrimpe,
							est_leyenda_rimpe,
							ret_correo_enviado
						FROM
							v_del_datos_retencion_sri
						WHERE ret_numero=".$ret_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_retencion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_retencion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_retencion = false;
          $this->rs_retencion_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_retencion[0][0])){
			$correo_enviado=$this->rs_retencion[0][18];
			$retencion->padronRimpe=$this->rs_retencion[0][16];
			$retencion->leyendaRimpe=$this->rs_retencion[0][17];
			$retencion->ambiente = $this->rs_retencion[0][1];
			$retencion->codDoc = $this->rs_retencion[0][2];
			$retencion->fechaEmision = $this->rs_retencion[0][3];
			$retencion->establecimiento = $this->rs_retencion[0][4];
			$retencion->ptoEmision = $this->rs_retencion[0][5];
			$retencion->secuencial = $this->rs_retencion[0][6];
			$retencion->dirEstablecimiento = $this->rs_retencion[0][7];
			$retencion->tipoIdentificacionSujetoRetenido = $this->rs_retencion[0][8];
			$retencion->razonSocialSujetoRetenido = $this->rs_retencion[0][9];
			$retencion->identificacionSujetoRetenido = $this->rs_retencion[0][10];
			$retencion->periodoFiscal = $this->rs_retencion[0][11];
			$camposAdicionales = array();
			$i=0;

			if($this->rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$this->rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if ($this->rs_retencion[0][14]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $this->rs_retencion[0][14];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if ($this->rs_retencion[0][13]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $this->rs_retencion[0][13];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}	

			if ($this->rs_retencion[0][12]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Direccion";
				$campoAdicional->valor = $this->rs_retencion[0][12];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}	

			if ($this->rs_retencion[0][15]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Comentario";
				$campoAdicional->valor = $this->rs_retencion[0][15];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}	
			$retencion->infoAdicional = $camposAdicionales;

			$check_sql="SELECT	dr_retencion,
								dr_impuesto,
								pri_codigo,
								dr_base_imponible,
								dr_porcentaje_retencion,
								dr_valor_retenido,
								dr_cod_doc_sustento,
								doc_sustento,
								fecha 
							FROM
								v_del_detalle_retencion_sri
							where dr_retencion=".$ret_numero."
							order by dr_id";
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_detalles = false;
          $this->rs_detalles_erro = $this->Db->ErrorMsg();
      } 

			if ($this->rs_detalles  === false){
				echo "error al acceder a los detalles";
			}else{
				$impuestos = array();
				$i=0;
				while (!$this->rs_detalles->EOF){
					$impuesto = new impuestoComprobanteRetencion();
					$impuesto->codigo = $this->rs_detalles->fields[1];
					$impuesto->codigoRetencion = $this->rs_detalles->fields[2];
					$impuesto->baseImponible = $this->rs_detalles->fields[3];
					$impuesto->porcentajeRetener = $this->rs_detalles->fields[4];
					$impuesto->valorRetenido = $this->rs_detalles->fields[5];
					$impuesto->codDocSustento = $this->rs_detalles->fields[6];
					$impuesto->numDocSustento = $this->rs_detalles->fields[7];
					$impuesto->fechaEmisionDocSustento = $this->rs_detalles->fields[8];
					$impuestos[$i] = $impuesto;
					$this->rs_detalles->MoveNext();
					$i+=1;
				}
				$this->rs_detalles->Close();
				$retencion->impuestos = $impuestos;
			}	
			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $retencion;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($retencion);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}

			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $retencion;
					$procesarComprobante->envioSRI = true; 
					$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo "<br>";
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$retencionPendiente = new \comprobantePendiente();
						$retencionPendiente->configAplicacion = $configApp;
						$retencionPendiente->configCorreo = $configCorreo;
						$retencionPendiente->ambiente = $this->rs_retencion[0][1];
						$retencionPendiente->codDoc = $this->rs_retencion[0][2];
						$retencionPendiente->establecimiento = $this->rs_retencion[0][4];
						$retencionPendiente->fechaEmision = $this->rs_retencion[0][3];
						$retencionPendiente->ptoEmision = $this->rs_retencion[0][5];
						$retencionPendiente->ruc = $this->rs_empresa[0][0];
						$retencionPendiente->secuencial = $this->rs_retencion[0][6];
						$retencionPendiente->tipoEmision = $this->rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $this->rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $this->rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $this->rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $retencionPendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}	
			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE  del_retencion
								SET  ret_error_sri='" .$res->return->mensajes->mensaje . "',
									ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
								WHERE ret_numero=" . $ret_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
					$update_sql =  "UPDATE  del_retencion
									SET ret_estado_sri='" . $res->return->estadoComprobante . "',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
									WHERE ret_numero=" . $ret_numero;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($retencion,$this->rs_retencion[0][13])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				
				$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='".$res->return->estadoComprobante."',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_autorizacion='".$res->return->numeroAutorizacion."',
									 ret_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 ret_correo_enviado='".$correo_enviado."'
								WHERE ret_numero=".$ret_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($retencion,$this->rs_retencion[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='AUTORIZADO',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_autorizacion='".$res->return->claveAcceso."',
									 ret_correo_enviado='".$correo_enviado."'
								WHERE ret_numero=".$ret_numero ;
				}else{
					$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='".$res->return->estadoComprobante."',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_error_sri='".$res->return->mensajes->mensaje."'
								WHERE ret_numero=".$ret_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='".$res->return->estadoComprobante."',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_error_sri='".$res->return->mensajes->mensaje."',
									 ret_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE ret_numero=".$ret_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function autorizar_retencion_dos ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($ret_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$correo_enviado="";
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$retencion = new comprobanteRetencionDos();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir=$this->rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir_ireport=$this->rs[0][0];
		}
		$check_sql="SELECT ret_empresa,ret_establecimiento FROM del_retencion WHERE ret_numero=".$ret_numero;
		 
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

		if (isset($this->rs[0][0])){
			$var_empresa=$this->rs[0][0];
			$var_establecimiento=$this->rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_empresa[0][0])){
			$check_sql="SELECT	ret_numero,
						ret_ambiente,
						ret_tipo_comprobante,
						fecha,
						est_codigo,
						pen_serie,
						ret_secuencial,
						est_direccion,
						pr_tipo_identificacion,
						pr_nombre,
						pr_identificacion,
						ret_periodo_fiscal, 
						pr_direccion,
						pr_email,
						pr_telefono,
						ret_comentario,
						est_padronrimpe,
						est_leyenda_rimpe,
						ret_correo_enviado,
						pr_tipo_persona,
						parte_relacionada
					FROM
						v_del_datos_retencion_sri
					WHERE ret_numero=".$ret_numero;
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_retencion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_retencion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_retencion = false;
          $this->rs_retencion_erro = $this->Db->ErrorMsg();
      } 


			if (isset($this->rs_retencion[0][0])){
				$configApp->dirAutorizados = $dir.$this->rs_empresa[0][0]."/documentos/";
				$configApp->dirLogo =  $dir.$this->rs_empresa[0][0]."/logo/".$this->rs_empresa[0][1];
				$configApp->dirFirma =  $dir.$this->rs_empresa[0][0]."/firma/".$this->rs_empresa[0][2];
				$configApp->passFirma = $this->rs_empresa[0][3];
				$configApp->dirIreport=$dir_ireport;
				$retencion->configAplicacion = $configApp;

				$configCorreo->correoAsunto = "Nueva Retencion V2";
				$configCorreo->correoHost = $this->rs_empresa[0][12];
				$configCorreo->correoPass = $this->rs_empresa[0][13];
				$configCorreo->correoPort = $this->rs_empresa[0][14];
				$configCorreo->correoRemitente = $this->rs_empresa[0][15];
				$configCorreo->sslHabilitado = $this->rs_empresa[0][21];
				$configCorreo->rutaLogo=$this->rs_empresa[0][20].$this->rs_empresa[0][0].'/'.$this->rs_empresa[0][1];
				$retencion->configCorreo = $configCorreo;

				$retencion->ambiente = $this->rs_retencion[0][1];
				$retencion->tipoEmision = $this->rs_empresa[0][9];
				$retencion->razonSocial = $this->rs_empresa[0][4];
				$retencion->nombreComercial = $this->rs_empresa[0][5]; 
				$retencion->ruc = $this->rs_empresa[0][0];
				$retencion->codDoc = $this->rs_retencion[0][2];
				$retencion->establecimiento = $this->rs_retencion[0][4];
				$retencion->ptoEmision = $this->rs_retencion[0][5];
				$retencion->secuencial = $this->rs_retencion[0][6];
				$retencion->dirMatriz = $this->rs_empresa[0][6]; 
				
				$retencion->padronMicroempresa=$this->rs_empresa[0][17];
				$retencion->padronAgenteRetencion=$this->rs_empresa[0][18];
				if($this->rs_empresa[0][18]=='S'){
					$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
					 
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

					if (isset($this->rs[0][0])){
					$retencion->numeroResolucion=$this->rs[0][0];
					}
				}
				$retencion->artesanoCalificado=$this->rs_empresa[0][19];
				$retencion->padronRimpe=$this->rs_retencion[0][16];
				$retencion->leyendaRimpe=$this->rs_retencion[0][17];
		
				$retencion->fechaEmision = $this->rs_retencion[0][3];
				$retencion->dirEstablecimiento = $this->rs_retencion[0][7];
				if ($this->rs_empresa[0][10]!=''){
					$retencion->contribuyenteEspecial = $this->rs_empresa[0][10];
				}
				$retencion->obligadoContabilidad =$this->rs_empresa[0][7]; 
				$retencion->tipoIdentificacionSujetoRetenido = $this->rs_retencion[0][8];
				if($this->rs_retencion[0][8]=='06' or $this->rs_retencion[0][8]=='08' ){
					$retencion->tipoSujetoRetenido=$this->rs_retencion[0][19];
				}
				$retencion->parteRel=$this->rs_retencion[0][20];
				$retencion->razonSocialSujetoRetenido = $this->rs_retencion[0][9];
				$retencion->identificacionSujetoRetenido = $this->rs_retencion[0][10];
				$retencion->periodoFiscal = $this->rs_retencion[0][11];
				$correo_enviado=$this->rs_retencion[0][18];
				$select_sql="SELECT
									sr_id,
									sr_cod_sustento,
									sr_cod_docsustento,
									sr_num_doc_sustento,
									sr_fechaemision,
									sr_fecha_registro_contable,
									sr_autorizacion,
									sr_pago_loc_ext,
									sr_tipo_regimen,
									sr_pais_pago,
									sr_aplica_doble_trib,
									sr_pago_sujeto_retencion_nc,
									sr_pago_reg_fis,
									sr_total_reembolsos,
									sr_total_baseimponible_reembolsos,
									sr_total_impuesto_reeemboso,
									sr_total_sin_impuestos,
									sr_importe_total 
								FROM
									v_del_datos_sustento_retencion_sri
								WHERE
									sr_retencion=".$ret_numero;
				 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_sustentos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_sustentos = false;
          $this->rs_sustentos_erro = $this->Db->ErrorMsg();
      } 

				$w_sustentos = array();
				$i=0;
				if ($this->rs_sustentos  === false){
					echo "error al acceder a los sustentos";
				}else{
					while (!$this->rs_sustentos->EOF){
						$w_sustento = new sustentoRetencion();
						$w_sustento->codSustento=$this->rs_sustentos->fields[1];
						$w_sustento->codDocSustento=$this->rs_sustentos->fields[2];
						$w_sustento->numDocSustento=$this->rs_sustentos->fields[3];
						$w_sustento->fechaEmisionDocSustento=$this->rs_sustentos->fields[4];
						$w_sustento->fechaRegistroContable=$this->rs_sustentos->fields[5];
						$w_sustento->numAutDocSustento=$this->rs_sustentos->fields[6];
						$w_sustento->pagoLocExt=$this->rs_sustentos->fields[7];
						if($this->rs_sustentos->fields[7]=='02'){
							$w_sustento->tipoRegi=$this->rs_sustentos->fields[8];
							$w_sustento->paisEfecPago=$this->rs_sustentos->fields[9];
							$w_sustento->aplicConvDobTrib=$this->rs_sustentos->fields[10];
							$w_sustento->pagExtSujRetNorLeg=$this->rs_sustentos->fields[11];
							$w_sustento->pagoRegFis=$this->rs_sustentos->fields[12];
						}
						if($this->rs_sustentos->fields[2]=='41'){
							$w_sustento->totalComprobantesReembolso=$this->rs_sustentos->fields[13];
							$w_sustento->totalBaseImponibleReembolso=$this->rs_sustentos->fields[14];
							$w_sustento->totalImpuestoReembolso=$this->rs_sustentos->fields[15];
						}
							
						$w_sustento->totalSinImpuestos=$this->rs_sustentos->fields[16];
						$w_sustento->importeTotal=$this->rs_sustentos->fields[17];
						
						$w_impuestos_sustento = array();
						$j=0;
						$select_sql="SELECT 
										isr_cod_impuesto,
										isr_cod_porcentaje,
										isr_base_imponible,
										ti_tarifa,
										isr_valor_impuesto 
									FROM v_del_impuestos_sustento_retencion_sri 
									WHERE isr_doc_sustento=".$this->rs_sustentos->fields[0];
						 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_impuestos_sustentos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_impuestos_sustentos = false;
          $this->rs_impuestos_sustentos_erro = $this->Db->ErrorMsg();
      } 

						if ($this->rs_impuestos_sustentos  === false){
							echo "error al acceder a los impuestos del sustento";
						}else{
							while (!$this->rs_impuestos_sustentos->EOF) {
							
								$w_impuesto_sustento = new impuestoDocSustento();
								$w_impuesto_sustento->codImpuestoDocSustento = $this->rs_impuestos_sustentos->fields[0];
								$w_impuesto_sustento->codigoPorcentaje = $this->rs_impuestos_sustentos->fields[1];
								$w_impuesto_sustento->baseImponible = $this->rs_impuestos_sustentos->fields[2];
								$w_impuesto_sustento->tarifa = $this->rs_impuestos_sustentos->fields[3];
								$w_impuesto_sustento->valorImpuesto = $this->rs_impuestos_sustentos->fields[4];

								$w_impuestos_sustento[$j]=$w_impuesto_sustento;
								$this->rs_impuestos_sustentos->MoveNext();
								$j+=1;
							}	
						}
						$w_sustento->impuestosDocSustento=$w_impuestos_sustento;

						$w_retenciones = array();
						$j=0;
						$select_sql="SELECT 
										codigo
										,codigo_retencion
										,irs_base_imponible
										,irs_porcentaje_retencion
										,irs_valor_retenido 
									FROM v_del_datos_retencion_sustento_sri 
									WHERE irs_sustento=".$this->rs_sustentos->fields[0];
						 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_retenciones = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_retenciones = false;
          $this->rs_retenciones_erro = $this->Db->ErrorMsg();
      } 

						if($this->rs_retenciones ===false){
							echo "error al acceder a las retenciones del sustento";
						}else{
							while (!$this->rs_retenciones->EOF) {
								$w_retencion_sustento = new impuestoComprobanteRetencionDos();
								$w_retencion_sustento->codigo = $this->rs_retenciones->fields[0];
								$w_retencion_sustento->codigoRetencion = $this->rs_retenciones->fields[1];
								$w_retencion_sustento->baseImponible = $this->rs_retenciones->fields[2];
								$w_retencion_sustento->porcentajeRetener = $this->rs_retenciones->fields[3];
								$w_retencion_sustento->valorRetenido = $this->rs_retenciones->fields[4];
								$w_retenciones[$j] = $w_retencion_sustento; 
								$this->rs_retenciones->MoveNext();
								$j+=1;
							}
						}
						$w_sustento->retenciones=$w_retenciones;

						$w_pagos_sustento = array();
						$j=0;
						$select_sql="SELECT 
										psr_forma_pago,
										psr_valor_pago 
									FROM del_forma_pago_sustento_retencion 
									WHERE psr_sustento_retencion=".$this->rs_sustentos->fields[0];
						 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_pagos_sustento = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_pagos_sustento = false;
          $this->rs_pagos_sustento_erro = $this->Db->ErrorMsg();
      } 

						if($this->rs_pagos_sustento ===false){
							echo "error al acceder a los pagos del sustento";
						}else{
							while (!$this->rs_pagos_sustento->EOF) {
							
								$w_pago= new pagoSustento();
								$w_pago->formapago=$this->rs_pagos_sustento->fields[0];
								$w_pago->total=$this->rs_pagos_sustento->fields[1];
								$this->rs_pagos_sustento->MoveNext();
								$w_pagos_sustento[$j]=$w_pago;
								$j+=1;
							}
						}	
						$w_sustento->pagos=$w_pagos_sustento;
						
						$w_sustentos[$i]=$w_sustento;
						$this->rs_sustentos->MoveNext();
						$i+=1;
					}	
				}
				$retencion->docsSustento=$w_sustentos;
				
				$camposAdicionales = array();
				$i=0;
				if($this->rs_empresa[0][19]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "artesanoCalificado";
					$campoAdicional->valor = 'Nro. '.$this->rs_empresa[0][19];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if ($this->rs_retencion[0][14]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Telefono";
					$campoAdicional->valor = $this->rs_retencion[0][14];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

				if ($this->rs_retencion[0][13]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Email";
					$campoAdicional->valor = $this->rs_retencion[0][13];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}	

				if ($this->rs_retencion[0][12]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Direccion";
					$campoAdicional->valor = $this->rs_retencion[0][12];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}	

				if ($this->rs_retencion[0][15]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Comentario";
					$campoAdicional->valor = $this->rs_retencion[0][15];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
					}	
				$retencion->infoAdicional = $camposAdicionales;
				if($i_log){
					var_dump($retencion);
					echo '<br>';
				}
					
				$procesarComprobante = new procesarComprobante();
				$procesarComprobante->comprobante = $retencion;
				$procesarComprobante->envioSRI = false; 
				$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
				if($i_log){
					var_dump($res);
					echo '<br>';
				}
				if($i_autorizar=='S'){
					if ($res->return->estadoComprobante == "FIRMADO") {
						$procesarComprobante = new procesarComprobante();
						$procesarComprobante->comprobante = $retencion;
						$procesarComprobante->envioSRI = true; 
						$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
						if($i_log){
							var_dump($res);
							echo "<br>";
						}	
					}else{
						if($res->return->estadoComprobante == "PROCESANDOSE"){
							$retencionPendiente = new \comprobantePendiente();
							$retencionPendiente->configAplicacion = $configApp;
							$retencionPendiente->configCorreo = $configCorreo;
							$retencionPendiente->ambiente = $this->rs_retencion[0][1];
							$retencionPendiente->codDoc = $this->rs_retencion[0][2];
							$retencionPendiente->establecimiento = $this->rs_retencion[0][4];
							$retencionPendiente->fechaEmision = $this->rs_retencion[0][3];
							$retencionPendiente->ptoEmision = $this->rs_retencion[0][5];
							$retencionPendiente->ruc = $this->rs_empresa[0][0];
							$retencionPendiente->secuencial = $this->rs_retencion[0][6];
							$retencionPendiente->tipoEmision = $this->rs_empresa[0][9];
							$comprobantePendiente->padronMicroempresa = $this->rs_empresa[0][17];
							$comprobantePendiente->padronAgenteRetencion = $this->rs_empresa[0][18];
							$comprobantePendiente->padronRimpe = $this->rs_empresa[0][21];
							$procesarComprobantePendiente = new \procesarComprobantePendiente();
							$procesarComprobantePendiente->comprobantePendiente = $retencionPendiente;
							$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
							if ($res->return->estadoComprobante == "PROCESANDOSE") {
								$res->return->estadoComprobante = "ERROR";
							}
						}	
					}
				}	
				$mensaje_final=	$res->return->estadoComprobante."<br>";
				if ($res->return->estadoComprobante == 'ERROR'){
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
					$update_sql =  "UPDATE  del_retencion
									SET ret_error_sri='" .$res->return->mensajes->mensaje . "',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
									WHERE ret_numero=" . $ret_numero;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				}

				if ($res->return->estadoComprobante == "FIRMADO") {
					$update_sql =  "UPDATE  del_retencion
									SET ret_estado_sri='" . $res->return->estadoComprobante . "',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
									WHERE ret_numero=" . $ret_numero;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				}
				if($res->return->estadoComprobante=='AUTORIZADO'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($retencion,$this->rs_retencion[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					
					$update_sql = "UPDATE del_retencion 
									SET ret_estado_sri='".$res->return->estadoComprobante."',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
										ret_clave='".$res->return->claveAcceso."',   
										ret_autorizacion='".$res->return->numeroAutorizacion."',
										ret_fecha_autorizacion='".$res->return->fechaAutorizacion."',
										ret_correo_enviado='".$correo_enviado."'
									WHERE ret_numero=".$ret_numero ;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				}
				if($res->return->estadoComprobante=='DEVUELTA'){
					if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
						if($correo_enviado=="NO"){
							if($this->enviarCorreo($retencion,$this->rs_retencion[0][13])){
								$correo_enviado="SI";
							}else{
								$correo_enviado="NO";
							}
						}
						$update_sql = "UPDATE del_retencion 
										SET ret_estado_sri='AUTORIZADO',
											ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
											ret_clave='".$res->return->claveAcceso."',   
											ret_autorizacion='".$res->return->claveAcceso."',
											ret_correo_enviado='".$correo_enviado."'
										WHERE ret_numero=".$ret_numero ;
					}else{
						$update_sql = "UPDATE del_retencion 
										SET ret_estado_sri='".$res->return->estadoComprobante."',
											ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
											ret_clave='".$res->return->claveAcceso."',   
											ret_error_sri='".$res->return->mensajes->mensaje."'
										WHERE ret_numero=".$ret_numero ;
					}


					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				}
				if($res->return->estadoComprobante=='NO AUTORIZADO'){
					$update_sql = "UPDATE del_retencion 
									SET ret_estado_sri='".$res->return->estadoComprobante."',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
										ret_clave='".$res->return->claveAcceso."',   
										ret_error_sri='".$res->return->mensajes->mensaje."',
										ret_fecha_autorizacion='".$res->return->fechaAutorizacion."'
									WHERE ret_numero=".$ret_numero ;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				}
				return $mensaje_final;
				
			}
		}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function autorizar_nd ($nd_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($nd_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$notaDebito = new notaDebito();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir=$this->rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
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

		if (isset($this->rs[0][0])){
		   $dir_ireport=$this->rs[0][0];
		}
		$check_sql="SELECT nd_empresa,nd_establecimiento FROM del_nota_debito WHERE nd_numero=".$nd_numero;
		 
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

		if (isset($this->rs[0][0])){
			$var_empresa=$this->rs[0][0];
			$var_establecimiento=$this->rs[0][1];	
		}
		$check_sql = "SELECT 
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$this->rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$this->rs_empresa[0][0]."/logo/".$this->rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$this->rs_empresa[0][0]."/firma/".$this->rs_empresa[0][2];
			$configApp->passFirma = $this->rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$notaDebito->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Nota de Debito";
			$configCorreo->correoHost = $this->rs_empresa[0][12];
			$configCorreo->correoPass = $this->rs_empresa[0][13];
			$configCorreo->correoPort = $this->rs_empresa[0][14];
			$configCorreo->correoRemitente = $this->rs_empresa[0][15];
			$configCorreo->sslHabilitado = $this->rs_empresa[0][21];
			$configCorreo->rutaLogo=$this->rs_empresa[0][20].$this->rs_empresa[0][0].'/'.$this->rs_empresa[0][1];
			$notaDebito->configCorreo = $configCorreo;

			$notaDebito->ruc = $this->rs_empresa[0][0];
			$notaDebito->razonSocial = $this->rs_empresa[0][4];
			$notaDebito->nombreComercial = $this->rs_empresa[0][5]; 
			$notaDebito->dirMatriz = $this->rs_empresa[0][6]; 
			$notaDebito->obligadoContabilidad =$this->rs_empresa[0][7]; 
			$notaDebito->tipoEmision = $this->rs_empresa[0][9];
			if ($this->rs_empresa[0][10]!=''){
				$notaDebito->contribuyenteEspecial = $this->rs_empresa[0][10];
			}
			$notaDebito->padronMicroempresa=$this->rs_empresa[0][17];
			$notaDebito->padronAgenteRetencion=$this->rs_empresa[0][18];
			if($this->rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
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

				if (isset($this->rs[0][0])){
				   $notaDebito->numeroResolucion=$this->rs[0][0];
				}
			}
			$notaDebito->artesanoCalificado=$this->rs_empresa[0][19];

		}

		$check_sql="SELECT
							nd_numero,
							nd_ambiente,
							nd_tipo_comprobante,
							fecha,
							est_direccion,
							est_codigo,
							pen_serie,
							nd_secuencial,
							cl_tipo_identificacion,
							cl_nombre,
							cl_identificacion,
							nd_cod_docmod,
							nd_serie_docmod||'-'||nd_secuencial_docmod,
							fecha_docmod,
							nd_subtotal,
							nd_subtotal_iva,
							nd_valor_iva,
							nd_subtotal_cero,
							nd_subtotal_no_objeto,
							nd_subtotal_excento,
							nd_valor_ice,
							nd_total,
							cl_direccion,
							cl_email,
							cl_telefono,
							est_padronrimpe,
							est_leyenda_rimpe,
							nd_correo_enviado
					FROM
							v_del_datos_nota_debito_sri
					WHERE nd_numero=".$nd_numero ;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_notaDebito = array();
      $this->rs_notadebito = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_notaDebito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->rs_notadebito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_notaDebito = false;
          $this->rs_notaDebito_erro = $this->Db->ErrorMsg();
          $this->rs_notadebito = false;
          $this->rs_notadebito_erro = $this->Db->ErrorMsg();
      } 


		if (isset($this->rs_notadebito[0][0])){
			$correo_enviado=$this->rs_notadebito[0][27];
			$notaDebito->padronRimpe=$this->rs_notadebito[0][25];
			$notaDebito->leyendaRimpe=$this->rs_notadebito[0][26];
			$notaDebito->ambiente = $this->rs_notadebito[0][1];
			$notaDebito->codDoc = $this->rs_notadebito[0][2];
			$notaDebito->fechaEmision = $this->rs_notadebito[0][3];
			$notaDebito->dirEstablecimiento = $this->rs_notadebito[0][4];
			$notaDebito->establecimiento = $this->rs_notadebito[0][5]; 
			$notaDebito->ptoEmision = $this->rs_notadebito[0][6]; 
			$notaDebito->secuencial = $this->rs_notadebito[0][7];
			$notaDebito->tipoIdentificacionComprador = $this->rs_notadebito[0][8];
			$notaDebito->razonSocialComprador = $this->rs_notadebito[0][9]; 
			$notaDebito->identificacionComprador = $this->rs_notadebito[0][10];
			$notaDebito->codDocModificado = $this->rs_notadebito[0][11];
			$notaDebito->numDocModificado = $this->rs_notadebito[0][12];
			$notaDebito->fechaEmisionDocSustento = $this->rs_notadebito[0][13];
			$notaDebito->totalSinImpuestos = $this->rs_notadebito[0][14]; 
			$total_Impuestos=array();
			$i=0;
					$sql_ivas_cobrados="SELECT dnd_porcentaje_iva,
												ROUND(sum(1*(dnd_precio_unitario)+dnd_valor_ice),2),
												round(sum(dnd_base_iva) *iva_porcentaje/100,2),
												iva_porcentaje
										FROM  del_detalle_nota_debito 
										inner join sri_tarifa_iva on iva_codigo=dnd_porcentaje_iva
										WHERE dnd_nota_debito=".$nd_numero."
										group by dnd_porcentaje_iva,iva_porcentaje";
					 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_ivas = false;
          $this->rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_ivas   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$this->rs_ivas->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo ='2'; 
							$totalImpuesto->codigoPorcentaje = $this->rs_ivas->fields[0]; 
							$totalImpuesto->baseImponible = $this->rs_ivas->fields[1];
							$totalImpuesto->valor = $this->rs_ivas->fields[2];
							$totalImpuesto->tarifa = $this->rs_ivas->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_ivas->MoveNext();
						}
						$this->rs_ivas->Close();
					}	
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$totalImpuesto->tarifa = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}	
				if($this->rs_notadebito[0][20]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 dnd_porcentaje_ice,
										sum(dnd_base_ice),
										sum(dnd_valor_ice) 
								FROM del_detalle_nota_debito 
								WHERE dnd_porcentaje_ice<>'0' 
								and dnd_nota_debito=".$nd_numero."
								group by dnd_porcentaje_ice";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_impuesto = false;
          $this->rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($this->rs_impuesto   === false){
						echo "Error al acceder a del_detalle_notaDebito";
					}else{
						while (!$this->rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$this->rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $this->rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $this->rs_impuesto->fields[2];
							$totalImpuesto->valor = $this->rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$this->rs_impuesto->MoveNext();
						}
						$this->rs_impuesto->Close();
					}	
				}

			$notaDebito->impuestos = $total_Impuestos;
			$notaDebito->valorTotal = $this->rs_notadebito[0][21]; 
			$pagos = array();
			$check_sql="SELECT 	a.fp_id,
								sri_forma_pago.fp_codigo,
								a.fp_valor,
								coalesce(a.fp_plazo,0),
								coalesce(a.fp_unidad_tiempo,'DIAS') 
						FROM del_forma_pago_nd a 
						inner join del_forma_pago b on a.fp_forma_pago=b.fp_id	
						inner join sri_forma_pago on b.fp_sri=sri_forma_pago.fp_codigo
						where a.fp_nota_debito=".$nd_numero ;
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_pagos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_pagos = false;
          $this->rs_pagos_erro = $this->Db->ErrorMsg();
      } 
 
			if ($this->rs_pagos   === false){
				echo "Error al acceder a las formas de pago";
			}else{
				$i=0;
				while (!$this->rs_pagos->EOF){
					$pago = new pagos();
					$pago->formaPago =$this->rs_pagos->fields[1];
					$pago->total = $this->rs_pagos->fields[2];
					$pago->plazo = $this->rs_pagos->fields[3];
					$pago->unidadTiempo=$this->rs_pagos->fields[4];
					$pagos[$i]=$pago;
					$i+=1;
					$this->rs_pagos->MoveNext();
				}
				$this->rs_pagos->Close();
			}	
			$notaDebito->pagos = $pagos;
			$check_sql="SELECT pro_descripcion,
							   dnd_precio_unitario 
						FROM v_del_detalle_nota_debito_sri
						WHERE dnd_nota_debito=".$nd_numero."
						order by dnd_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_motivos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_motivos = false;
          $this->rs_motivos_erro = $this->Db->ErrorMsg();
      } 
   
			if ($this->rs_motivos   === false){
				echo "Error al acceder al detalle de la notaDebito";
			}else{
				$motivos = array();
				$i=0;
				while (!$this->rs_motivos->EOF){
					$motivo = new motivo();
					$motivo->razon = $this->rs_motivos->fields[0];
					$motivo->valor = $this->rs_motivos->fields[1];
					$motivos[$i] = $motivo;
					$this->rs_motivos->MoveNext();
					$i+=1;
				}
				$this->rs_motivos->Close();
				$notaDebito->motivos = $motivos;
			}

			$camposAdicionales = array();
			$i=0;
			if($this->rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$this->rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($this->rs_notadebito[0][24]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $this->rs_notadebito[0][24];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($this->rs_notadebito[0][23]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $this->rs_notadebito[0][23];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if($this->rs_notadebito[0][22]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Direccion";
				$campoAdicional->valor = $this->rs_notadebito[0][22];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			$notaDebito->infoAdicional = $camposAdicionales;

			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $notaDebito;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($notaDebito);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}	
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $notaDebito;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $this->rs_notadebito[0][1];
						$comprobantePendiente->codDoc = $this->rs_notadebito[0][2];
						$comprobantePendiente->establecimiento = $this->rs_notadebito[0][5];
						$comprobantePendiente->fechaEmision = $this->rs_notadebito[0][3];
						$comprobantePendiente->ptoEmision = $this->rs_notadebito[0][6];
						$comprobantePendiente->ruc = $this->rs_empresa[0][0];
						$comprobantePendiente->secuencial = $this->rs_notadebito[0][7];
						$comprobantePendiente->tipoEmision = $this->rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $this->rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $this->rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $this->rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE del_nota_debito 
								SET nd_error_sri='" . $res->return->mensajes->mensaje . "',
									nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' 
								WHERE nd_numero=" . $nd_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_nota_debito 
                        SET nd_estado_sri='" . $res->return->estadoComprobante . "',
                            nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' 
                        WHERE nd_numero=" . $nd_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}

			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($notaDebito,$this->rs_notadebito[0][23])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,	
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_autorizacion='".$res->return->numeroAutorizacion."',
									 nd_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 nd_error_sri='',
									 nd_correo_enviado='".$correo_enviado."'
								WHERE nd_numero=".$nd_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($notaDebito,$this->rs_notadebito[0][23])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='AUTORIZADO',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_autorizacion='".$res->return->claveAcceso."',
									 nd_correo_enviado='".$correo_enviado."'
								WHERE nd_numero=".$nd_numero ;
				}else{
					$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_error_sri='".$res->return->mensajes->mensaje."'
								WHERE nd_numero=".$nd_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_error_sri='".$res->return->mensajes->mensaje."',
									 nd_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE nd_numero=".$nd_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_factura_compra_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function obtener_factura ($var_autorizacion){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='01'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoFactura=$xml->infoFactura;
				$infoFactura=array();
				$infoFactura['fechaEmision']=				(String)$contenido_infoFactura->fechaEmision;
				$infoFactura['dirEstablecimiento']=			(String)$contenido_infoFactura->dirEstablecimiento;
				$infoFactura['obligadoContabilidad']=		(String)$contenido_infoFactura->obligadoContabilidad;
				$infoFactura['tipoIdentificacionComprador']=(String)$contenido_infoFactura->tipoIdentificacionComprador;
				$infoFactura['razonSocialComprador']=		(String)$contenido_infoFactura->razonSocialComprador;
				$infoFactura['identificacionComprador']=	(String)$contenido_infoFactura->identificacionComprador;
				$infoFactura['direccionComprador']=			(String)$contenido_infoFactura->direccionComprador;
				$infoFactura['totalSinImpuestos']=			(String)$contenido_infoFactura->totalSinImpuestos;
				$infoFactura['totalDescuento']=				(String)$contenido_infoFactura->totalDescuento;
				$impuestos = array();
				foreach ($contenido_infoFactura->totalConImpuestos->totalImpuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=            (String)$item->codigo;
					$impuesto['codigoPorcentaje']=  (String)$item->codigoPorcentaje;
					$impuesto['baseImponible']=     (String)$item->baseImponible;
					$impuesto['valor']=             (String)$item->valor;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$infoFactura['totalConImpuestos']=$impuestos;
				$infoFactura['propina']=		(String)$contenido_infoFactura->propina;
				$infoFactura['importeTotal']=	(String)$contenido_infoFactura->importeTotal;
				$infoFactura['moneda']=			(String)$contenido_infoFactura->moneda;
				$pagos = array();
				foreach ($contenido_infoFactura->pagos->pago as $item) {
					$pago=array();
					$pago['formaPago']=     (String)$item->formaPago;
					$pago['total']=  		(String)$item->total;
					$pago['plazo']=     	(String)$item->plazo;
					$pago['unidadTiempo']=  (String)$item->unidadTiempo;
					$pagos[]=$pago;
					unset($pago);
				}
				$infoFactura['pagos']=$pagos;
				$comprobante['infoFactura']=$infoFactura;
				$detalles=array();
				$contenido_detalles=$xml->detalles;
				foreach($contenido_detalles->detalle as $item){
					$detalle=array();
					$detalle['codigoPrincipal']=		(String)$item->codigoPrincipal;
					$detalle['codigoAuxiliar']=			(String)$item->codigoAuxiliar;
					$detalle['descripcion']=			(String)$item->descripcion;
					$detalle['cantidad']=				(String)$item->cantidad;
					$detalle['precioUnitario']=			(String)$item->precioUnitario;
					$detalle['precioSinSubsidio']=		(String)$item->precioSinSubsidio;
					$detalle['descuento']=				(String)$item->descuento;
					$detalle['precioTotalSinImpuesto']=	(String)$item->precioTotalSinImpuesto;
					$impuestos = array();
					foreach ($item->impuestos->impuesto as $item_impuesto) {
						$impuesto=array();
						$impuesto['codigo']=            (String)$item_impuesto->codigo;
						$impuesto['codigoPorcentaje']=  (String)$item_impuesto->codigoPorcentaje;
						$impuesto['tarifa']=            (String)$item_impuesto->tarifa;
						$impuesto['baseImponible']=     (String)$item_impuesto->baseImponible;
						$impuesto['valor']=             (String)$item_impuesto->valor;
						$impuestos[]=$impuesto;
						unset($impuesto);
					}

					$detalle['impuestos']=$impuestos;
					$this->detalles[]=$detalle;
					unset($detalle);
				}
				$comprobante['detalles']=$this->detalles;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}    
			}
		}	
		return $comprobante;
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function obtener_notaCredito($var_autorizacion){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='04'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoNotaCredito=$xml->infoNotaCredito;
				$infoNotaCredito=array();
				$infoNotaCredito['fechaEmision']=				(String)$contenido_infoNotaCredito->fechaEmision;
				$infoNotaCredito['dirEstablecimiento']=			(String)$contenido_infoNotaCredito->dirEstablecimiento;
				$infoNotaCredito['tipoIdentificacionComprador']=(String)$contenido_infoNotaCredito->tipoIdentificacionComprador;
				$infoNotaCredito['razonSocialComprador']=		(String)$contenido_infoNotaCredito->razonSocialComprador;
				$infoNotaCredito['identificacionComprador']=	(String)$contenido_infoNotaCredito->identificacionComprador;
				$infoNotaCredito['direccionComprador']=			(String)$contenido_infoNotaCredito->direccionComprador;
				$infoNotaCredito['obligadoContabilidad']=		(String)$contenido_infoNotaCredito->obligadoContabilidad;
				$infoNotaCredito['contribuyenteEspecial']=		(String)$contenido_infoNotaCredito->contribuyenteEspecial;
				$infoNotaCredito['rise']=               		(String)$contenido_infoNotaCredito->rise;
				$infoNotaCredito['codDocModificado']=           (String)$contenido_infoNotaCredito->codDocModificado;
				$infoNotaCredito['numDocModificado']=           (String)$contenido_infoNotaCredito->numDocModificado;
				$infoNotaCredito['fechaEmisionDocSustento']=    (String)$contenido_infoNotaCredito->fechaEmisionDocSustento;
				$infoNotaCredito['totalSinImpuestos']=			(String)$contenido_infoNotaCredito->totalSinImpuestos;
				$infoNotaCredito['valorModificacion']=			(String)$contenido_infoNotaCredito->valorModificacion;
				$infoNotaCredito['moneda']=			            (String)$contenido_infoNotaCredito->moneda;
				$impuestos = array();
				foreach ($contenido_infoNotaCredito->totalConImpuestos->totalImpuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=            (String)$item->codigo;
					$impuesto['codigoPorcentaje']=  (String)$item->codigoPorcentaje;
					$impuesto['baseImponible']=     (String)$item->baseImponible;
					$impuesto['valor']=             (String)$item->valor;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$infoNotaCredito['totalConImpuestos']=$impuestos;
				$infoNotaCredito['motivo']=		(String)$contenido_infoNotaCredito->motivo;
				$comprobante['infoNotaCredito']=$infoNotaCredito;

				$detalles=array();
				$contenido_detalles=$xml->detalles;
				foreach($contenido_detalles->detalle as $item){
					$detalle=array();
					$detalle['codigoInterno']=	    	(String)$item->codigoInterno;
					$detalle['codigoAdicional']=		(String)$item->codigoAdicional;
					$detalle['descripcion']=			(String)$item->descripcion;
					$detalle['cantidad']=				(String)$item->cantidad;
					$detalle['precioUnitario']=			(String)$item->precioUnitario;
					$detalle['descuento']=				(String)$item->descuento;
					$detalle['precioTotalSinImpuesto']=	(String)$item->precioTotalSinImpuesto;
					$impuestos = array();
					foreach ($item->impuestos->impuesto as $item_impuesto) {
						$impuesto=array();
						$impuesto['codigo']=            (String)$item_impuesto->codigo;
						$impuesto['codigoPorcentaje']=  (String)$item_impuesto->codigoPorcentaje;
						$impuesto['tarifa']=            (String)$item_impuesto->tarifa;
						$impuesto['baseImponible']=     (String)$item_impuesto->baseImponible;
						$impuesto['valor']=             (String)$item_impuesto->valor;
						$impuestos[]=$impuesto;
						unset($impuesto);
					}
					$detalle['impuestos']=$impuestos;
					$this->detalles[]=$detalle;
					unset($detalle);
				}
				$comprobante['detalles']=$this->detalles;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}
			}       
		}	
		return $comprobante;
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function obtener_notaDebito($var_autorizacion){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='05'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoNotaDebito=$xml->infoNotaDebito;
				$infoNotaDebito=array();
				$infoNotaDebito['fechaEmision']=			    (String)$contenido_infoNotaDebito->fechaEmision;
				$infoNotaDebito['dirEstablecimiento']=			(String)$contenido_infoNotaDebito->dirEstablecimiento;
				$infoNotaDebito['tipoIdentificacionComprador']= (String)$contenido_infoNotaDebito->tipoIdentificacionComprador;
				$infoNotaDebito['razonSocialComprador']=		(String)$contenido_infoNotaDebito->razonSocialComprador;
				$infoNotaDebito['identificacionComprador']=	    (String)$contenido_infoNotaDebito->identificacionComprador;
				$infoNotaDebito['direccionComprador']=			(String)$contenido_infoNotaDebito->direccionComprador;
				$infoNotaDebito['contribuyenteEspecial']=		(String)$contenido_infoNotaDebito->contribuyenteEspecial;
				$infoNotaDebito['obligadoContabilidad']=		(String)$contenido_infoNotaDebito->obligadoContabilidad;
				$infoNotaDebito['codDocModificado']=            (String)$contenido_infoNotaDebito->codDocModificado;
				$infoNotaDebito['numDocModificado']=            (String)$contenido_infoNotaDebito->numDocModificado;
				$infoNotaDebito['fechaEmisionDocSustento']=     (String)$contenido_infoNotaDebito->fechaEmisionDocSustento;
				$infoNotaDebito['totalSinImpuestos']=			(String)$contenido_infoNotaDebito->totalSinImpuestos;

				$impuestos = array();
				foreach ($contenido_infoNotaDebito->impuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=            (String)$item->codigo;
					$impuesto['codigoPorcentaje']=  (String)$item->codigoPorcentaje;
					$impuesto['tarifa']=  (String)$item->tarifa;
					$impuesto['baseImponible']=     (String)$item->baseImponible;
					$impuesto['valor']=             (String)$item->valor;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$infoNotaDebito['impuestos']=$impuestos;
				$infoNotaDebito['valorTotal']=	(String)$contenido_infoNotaDebito->valorTotal;

				$pagos = array();
				foreach ($contenido_infoNotaDebito->pagos->pago as $item) {
					$pago=array();
					$pago['formaPago']=     (String)$item->formaPago;
					$pago['total']=  		(String)$item->total;
					$pago['plazo']=     	(String)$item->plazo;
					$pago['unidadTiempo']=  (String)$item->unidadTiempo;
					$pagos[]=$pago;
					unset($pago);
				}
				$infoNotaDebito['pagos']=$pagos;
				$comprobante['infoNotaDebito']=$infoNotaDebito;

				$motivos=array();
				$contenido_motivos=$xml->motivos;
				foreach($contenido_motivos->motivo as $item){
					$motivo=array();
					$motivo['razon']= (String)$item->razon;
					$motivo['valor']=	(String)$item->valor;
					$motivos[]=$motivo;
					unset($motivo);
				}
				$comprobante['motivos']=$motivos;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}    
			}
		}	
		return $comprobante;
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function obtener_retencion($var_autorizacion){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
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

		if (isset($this->rs[0][0])){
		   $ruta_firmador=$this->rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='07'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoCompRetencion=$xml->infoCompRetencion;
				$infoCompRetencion=array();
				$infoCompRetencion['fechaEmision']=				(String)$contenido_infoCompRetencion->fechaEmision;
				$infoCompRetencion['dirEstablecimiento']=			(String)$contenido_infoCompRetencion->dirEstablecimiento;
				$infoCompRetencion['obligadoContabilidad']=		(String)$contenido_infoCompRetencion->obligadoContabilidad;
				$infoCompRetencion['tipoIdentificacionSujetoRetenido']=(String)$contenido_infoCompRetencion->tipoIdentificacionSujetoRetenido;
				$infoCompRetencion['razonSocialSujetoRetenido']=		(String)$contenido_infoCompRetencion->razonSocialSujetoRetenido;
				$infoCompRetencion['identificacionSujetoRetenido']=	(String)$contenido_infoCompRetencion->identificacionSujetoRetenido;
				$infoCompRetencion['periodoFiscal']=			(String)$contenido_infoCompRetencion->periodoFiscal;
				$comprobante['infoCompRetencion']=$infoCompRetencion;

				$impuestos = array();
				foreach ($xml->impuestos->impuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=                    (String)$item->codigo;
					$impuesto['codigoRetencion']=           (String)$item->codigoRetencion;
					$impuesto['baseImponible']=             (String)$item->baseImponible;
					$impuesto['porcentajeRetener']=         (String)$item->porcentajeRetener;
					$impuesto['valorRetenido']=             (String)$item->valorRetenido;
					$impuesto['codDocSustento']=            (String)$item->codDocSustento;
					$impuesto['numDocSustento']=            (String)$item->numDocSustento;
					$impuesto['fechaEmisionDocSustento']=   (String)$item->fechaEmisionDocSustento;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$comprobante['impuestos']=$impuestos;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}    
			}
		}	
		return $comprobante;
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function esCedula($ced) {
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
	$dig = array ();
	if (strlen ( trim ( $ced ) ) == 10) {
		for($i = 0; $i <= 9; $i ++) {
			$dig [$i] = intval ( substr ( $ced, $i, 1 ) );
		}
		$sum = 0;
		for($i = 0; $i <= 8; $i ++) {
			$par = 0;
			if ($i % 2 != 0)
				$sum = $sum + $dig [$i];
			else {
				if (2 * $dig [$i] > 9)
					$par = 2 * $dig [$i] - 9;
				else
					$par = 2 * $dig [$i];
				$sum = $sum + $par;
			}
		}
		$i = 10;
		while ( $i < $sum ) {
			$i = $i + 10;
		}
		if (substr ( $ced, 0, 2 ) != "00") {
			if ($i - $sum == $dig [9])
				return 1;
			else
				return 0;
		} else
			return 0;
	}else{
		return 0;
	}	

$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function EsRUC_natural($identificacion) {
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
	$dig = array ();
	
	if (strlen ( trim ( $identificacion ) ) == 13) {
		for($i = 0; $i <= 9; $i ++) {
			$dig [$i] = intval ( substr ( $identificacion, $i, 1 ) );
		}
		$sum = 0;
		for($i = 0; $i <= 8; $i ++) {
			$par = 0;
			if ($i % 2 != 0)
				$sum = $sum + $dig [$i];
			else {
				if (2 * $dig [$i] > 9)
					$par = 2 * $dig [$i] - 9;
				else
					$par = 2 * $dig [$i];
				$sum = $sum + $par;
			}
		}
		$i = 10;
		while ( $i < $sum ) {
			$i = $i + 10;
		}
		if (substr ( $identificacion, 0, 2 ) != "00" and substr ( $identificacion, 10, 3 ) == "001") {
			if ($i - $sum == $dig [9])
				return 1;
			else
				return 0;
		} else
			return 0;
	} else
		return 0;

$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function EsRUC_juridico($identificacion) {
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
	
	return 1;

$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function EsRUC_Publica($identificacion) {
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
	$Dig = array ();
	$Prod = array ();
	$Residuo = 0;
	$digito = 0;
	if (strlen ( trim ( $identificacion ) ) == 13) {
		for($i = 1; $i <= 10; $i ++)
			$Dig [$i] = intval ( substr ( $identificacion, $i - 1, 1 ) );
		
		$Prod [1] = $Dig [1] * 3;
		$Prod [2] = $Dig [2] * 2;
		$Prod [3] = $Dig [3] * 7;
		$Prod [4] = $Dig [4] * 6;
		$Prod [5] = $Dig [5] * 5;
		$Prod [6] = $Dig [6] * 4;
		$Prod [7] = $Dig [7] * 3;
		$Prod [8] = $Dig [8] * 2;
		$Prod [9] = $Dig [9] * 1;
		$Sum = 0;
		for($i = 1; $i <= 9; $i ++)
			$Sum = $Sum + $Prod [$i];
		$Residuo = $Sum % 11;
		$digito = 11 - $Residuo;
		if ($Residuo == 0)
			$digito = 0;
		
		if (substr ( $identificacion, 0, 2 ) != "00" and substr ( $identificacion, 10, 3 ) == "001") {
			if ($digito == $Dig [10])
				return 1;
			else
				return 0;
		} else
			return 0;
	} else
		return 0;

$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function validar_esRuc($ced){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
	if(strlen ( trim ( $ced ) ) == 13){
		if(intval ( substr ( $ced, 2, 1 ) )< 6){
			$validador=$this->EsRUC_natural($ced);	
		}else{
			if(intval ( substr ( $ced, 2, 1 ) )== 6){
				$validador=$this->EsRUC_Publica($ced);
				if($validador==0){
					$validador=$this->EsRUC_natural($ced);	
				}
			}else{
				if(intval ( substr ( $ced, 2, 1 ) )== 9){
					$validador=$this->EsRUC_juridico($ced);
					if($validador==0){
						$validador=1;	
					}
				}else{
					$validador=0;
				}	
			}
		}
	}else{
		$validador=0;
	}
	
	return $validador;

$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
function validar_CedulaRuc($ced){
$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'on';
  
	if(strlen ( trim ( $ced ) ) == 10){
		$validador=$this->esCedula($ced);
	}elseif(strlen ( trim ( $ced ) ) == 13){
		if(intval ( substr ( $ced, 2, 1 ) )< 6){
			$validador=$this->EsRUC_natural($ced);	
		}else{
			if(intval ( substr ( $ced, 2, 1 ) )== 6){
				$validador=$this->EsRUC_Publica($ced);
				if($validador==0){
					$validador=$this->EsRUC_natural($ced);	
				}
			}else{
				if(intval ( substr ( $ced, 2, 1 ) )== 9){
					$validador=$this->EsRUC_juridico($ced);
				}else{
					$validador=0;
				}	
			}
		}
	}else{
		$validador=0;
	}
	
	return $validador;

$_SESSION['scriptcase']['form_del_factura_compra_mob']['contr_erro'] = 'off';
}
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_del_factura_compra_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_del_factura_compra_mob_form0.php");
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_format_readonly($field, $value)
    {
        $result = $value;

        $this->form_highlight_search($result, $field, $value);

        return $result;
    }

    function form_highlight_search(&$result, $field, $value)
    {
        if ($this->proc_fast_search) {
            $this->form_highlight_search_quicksearch($result, $field, $value);
        }
    }

    function form_highlight_search_quicksearch(&$result, $field, $value)
    {
        $searchOk = false;
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("fc_id", "fc_empresa", "fc_tipo_comprobante", "fc_proveedor", "fc_serie", "fc_secuencial", "fc_autorizacion", "fc_desde", "fc_hasta", "fc_subtotal_iva", "fc_subtotal_cero", "fc_subtotal_no_objeto", "fc_subtotal_excento", "fc_subtotal", "fc_valor_ice", "fc_valor_iva", "fc_valor_irbpnr", "fc_total", "fc_comentario", "fc_usuario", "fc_aplica_ret"))) {
            $searchOk = true;
        }
        elseif ($field == $this->nmgp_fast_search && in_array($field, array(""))) {
            $searchOk = true;
        }

        if (!$searchOk || '' == $this->nmgp_arg_fast_search) {
            return;
        }

        $htmlIni = '<div class="highlight" style="background-color: #fafaca; display: inline-block">';
        $htmlFim = '</div>';

        if ('qp' == $this->nmgp_cond_fast_search) {
            $keywords = preg_quote($this->nmgp_arg_fast_search, '/');
            $result = preg_replace('/'. $keywords .'/i', $htmlIni . '$0' . $htmlFim, $result);
        } elseif ('eq' == $this->nmgp_cond_fast_search) {
            if (strcasecmp($this->nmgp_arg_fast_search, $value) == 0) {
                $result = $htmlIni. $result .$htmlFim;
            }
        }
    }


    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       $sImage = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalendario']['display'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalculadora']['display'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return '' == $sImage ? '' : $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile

   function jqueryFAFile($sModule)
   {
       $sFA = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
           {
               $sFA = $this->arr_buttons['bcalendario']['fontawesomeicon'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
           {
               $sFA = $this->arr_buttons['bcalculadora']['fontawesomeicon'];
           }
       }

       return '' == $sFA ? '' : "<span class='scButton_fontawesome " . $sFA . "'></span>";
   } // jqueryFAFile

   function jqueryButtonText($sModule)
   {
       $sClass = '';
       $sText  = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalendario']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalendario']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalendario']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i>";
                   }
               }
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalculadora']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalculadora']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalculadora']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> ";
                   }
               }
           }
       }

       return '' == $sText ? array('', '') : array($sText, $sClass);
   } // jqueryButtonText


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

function sc_file_size($file, $format = false)
{
    if ('' == $file) {
        return '';
    }
    if (!@is_file($file)) {
        return '';
    }
    $fileSize = @filesize($file);
    if ($format) {
        $suffix = '';
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' KB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' MB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' GB';
        }
        $fileSize = $fileSize . $suffix;
    }
    return $fileSize;
}


 function new_date_format($type, $field)
 {
     $new_date_format_out = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format_out .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format_out .= $time_sep;
         }
         else
         {
             $new_date_format_out .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format_out;
     if ('DH' == $type)
     {
         $new_date_format_out                                  = explode(';', $new_date_format_out);
         $this->field_config[$field]['date_format_js']        = $new_date_format_out[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format_out[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_fc_sustento_gasto()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT stg_codigo, stg_descripcion  FROM sri_sustento_tributario_gasto  WHERE stg_estado='V' ORDER BY stg_codigo";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_fc_tipo_comprobante()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT tc_codigo,tc_nombre  FROM sri_comprobante_sustento  inner join sri_tipo_comprobante on cs_comprobante=tc_codigo WHERE cs_sustento='$this->fc_sustento_gasto' order by tc_codigo";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_liq_libretin()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='03'";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_libretin'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_fc_aplica_ret()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_fc_aplica_propina()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = true;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_del_factura_compra_mob_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      foreach ($fields as $field) {
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_id", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_empresa", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_fc_tipo_comprobante($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "fc_tipo_comprobante", $arg_search, $data_lookup, "VARCHAR", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_proveedor", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_serie", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_secuencial", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_autorizacion", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_desde", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_hasta", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_subtotal_iva", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_subtotal_cero", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_subtotal_no_objeto", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_subtotal_excento", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_subtotal", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_valor_ice", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_valor_iva", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_valor_irbpnr", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_total", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_comentario", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fc_usuario", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_fc_aplica_ret($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "fc_aplica_ret", $arg_search, $data_lookup, "VARCHAR", false);
              }
          }
      }
      if ($this->NM_case_insensitive)
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $comando = str_replace("#lowerI#", "UCase(", $comando);
          }
          else
          {
              $comando = str_replace("#lowerI#", "Upper(", $comando);
           }
          $comando = str_replace("#lowerF#", ")", $comando);
      }
      else
      {
          $comando = str_replace("#lowerI#", "", $comando);
          $comando = str_replace("#lowerF#", "", $comando);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter_form'] . " and ((fc_id=" . $_SESSION['var_id_factura'] . ")) and (" . $comando . ")";
      }
      else
      {
          $sc_where = " where (fc_id=" . $_SESSION['var_id_factura'] . ") and (" . $comando . ")";
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_del_factura_compra_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['total'] = $qt_geral_reg_form_del_factura_compra_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_factura_compra_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_factura_compra_mob_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="", $tp_unaccent=false)
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = " #lowerI#";
      $nm_fim_lower = "#lowerF#";
      $Nm_accent = $this->Ini->Nm_accent_no;
      if ($tp_unaccent) {
          $Nm_accent = $this->Ini->Nm_accent_yes;
      }
      $nm_numeric[] = "fc_id";$nm_numeric[] = "fc_proveedor";$nm_numeric[] = "fc_secuencial";$nm_numeric[] = "fc_desde";$nm_numeric[] = "fc_hasta";$nm_numeric[] = "fc_subtotal_iva";$nm_numeric[] = "fc_subtotal_cero";$nm_numeric[] = "fc_subtotal_no_objeto";$nm_numeric[] = "fc_subtotal_excento";$nm_numeric[] = "fc_subtotal";$nm_numeric[] = "fc_valor_ice";$nm_numeric[] = "fc_valor_iva";$nm_numeric[] = "fc_valor_irbpnr";$nm_numeric[] = "fc_total";$nm_numeric[] = "liq_libretin";$nm_numeric[] = "fc_total_descuento";$nm_numeric[] = "fc_propina";$nm_numeric[] = "liq_establecimiento";$nm_numeric[] = "liq_punto_emision";$nm_numeric[] = "liq_ambiente";$nm_numeric[] = "fc_retencion";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
         $nm_ini_lower = "";
         $nm_fim_lower = "";
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR(255))";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas["fc_fecha"] = "date";$Nm_datas["fc_fecha_caducidad"] = "date";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
         if (isset($Nm_datas[$campo_join]))
          {
            $nm_ini_lower = "";
             $nm_fim_lower = "";
          }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_ini_lower . $nm_aspas . $Cmp . $nm_aspas1 . $nm_fim_lower;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         $cond_tst = strtoupper($condicao);
         if ($cond_tst == "II" || $cond_tst == "QP" || $cond_tst == "NP")
         {
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
             {
                 $op_like      = " ilike ";
                 $nm_ini_lower = "";
                 $nm_fim_lower = "";
             }
             else
             {
                 $op_like = " like ";
             }
         }
         switch ($cond_tst)
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_like . $nm_ini_lower . "'" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_like . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . " not" . $op_like . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " > " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " >= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " < " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
         }
   }
   function SC_lookup_fc_tipo_comprobante($condicao, $campo)
   {
       return $campo;
   }
   function SC_lookup_fc_aplica_ret($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT dec_nombre, dec_id FROM v_sis_sino WHERE (#lowerI##cmp_idec_nombre#cmp_f)#cmp_apos LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')#arg_apos)" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "LIKE #lowerI#'#arg_i" . $campo . "#arg_f%')", $nm_comando);
       }
       if ($condicao == "np")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "NOT LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "<> #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "> #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", ">= #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "< #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "<= #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
       }
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
       {
           $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
       }
       $nm_comando = str_replace(array('#cmp_i','#cmp_f','#cmp_apos','#arg_i','#arg_f','#arg_apos'), array('','','','','',''), $nm_comando); 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           if ($this->NM_case_insensitive)
           {
               $campo  = sc_strtoupper($campo);
           }
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($this->NM_case_insensitive)
               {
                   $label  = sc_strtoupper($label);
               }
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_del_factura_compra_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_del_factura_compra_mob_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_del_factura_compra_mob_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
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
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_modal'])
   {
?>
        parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
   elseif ($this->lig_edit_lookup)
   {
?>
        opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
?>
      }
      if (bLigEditLookupCall)
      {
        scLigEditLookupCall();
      }
<?php
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue']);
?>
}
<?php
    }
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
    function sc_ajax_alert($sMessage, $params = array())
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxAlert']['message'] = NM_charset_to_utf8($sMessage);
            $this->NM_ajax_info['ajaxAlert']['params']  = $this->sc_ajax_alert_params($params);
        }
    } // sc_ajax_alert

    function sc_ajax_alert_params($params)
    {
        $paramList = array();
        foreach ($params as $paramName => $paramValue)
        {
            if (in_array($paramName, array('title', 'timer', 'confirmButtonText', 'confirmButtonFA', 'confirmButtonFAPos', 'cancelButtonText', 'cancelButtonFA', 'cancelButtonFAPos', 'footer', 'width', 'padding', 'position')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif (in_array($paramName, array('showConfirmButton', 'showCancelButton', 'toast')) && in_array($paramValue, array(true, false)))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('position' == $paramName && in_array($paramValue, array('top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', 'bottom-end')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('type' == $paramName && in_array($paramValue, array('warning', 'error', 'success', 'info', 'question')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('background' == $paramName)
            {
                $paramList[$paramName] = $this->sc_ajax_alert_image(NM_charset_to_utf8($paramValue));
            }
        }
        return $paramList;
    } // sc_ajax_alert_params

    function sc_ajax_alert_image($background)
    {
        $image_param = $background;
        preg_match_all('/url\(([\s])?(["|\'])?(.*?)(["|\'])?([\s])?\)/i', $background, $matches, PREG_PATTERN_ORDER);
        if (isset($matches[3])) {
            foreach ($matches[3] as $match) {
                if ('http:' != substr($match, 0, 5) && 'https:' != substr($match, 0, 6) && '/' != substr($match, 0, 1)) {
                    $image_param = str_replace($match, "{$this->Ini->path_img_global}/{$match}", $image_param);
                }
            }
        }
        return $image_param;
    } // sc_ajax_alert_image
    function sc_ajax_message($sMessage, $sTitle = '', $sParam = '', $sRedirPar = '')
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxMessage'] = array();
            if ('' != $sParam)
            {
                $aParamList = explode('&', $sParam);
                foreach ($aParamList as $sParamItem)
                {
                    $aParamData = explode('=', $sParamItem);
                    if (2 == sizeof($aParamData) &&
                        in_array($aParamData[0], array('modal', 'timeout', 'button', 'button_label', 'top', 'left', 'width', 'height', 'redir', 'redir_target', 'show_close', 'body_icon', 'toast', 'toast_pos', 'type')))
                    {
                        $this->NM_ajax_info['ajaxMessage'][$aParamData[0]] = NM_charset_to_utf8($aParamData[1]);
                    }
                }
            }
            if (isset($this->NM_ajax_info['ajaxMessage']['redir']) && '' != $this->NM_ajax_info['ajaxMessage']['redir'] && '.php' == substr($this->NM_ajax_info['ajaxMessage']['redir'], -4) && 'http' != substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, 4))
            {
                $this->NM_ajax_info['ajaxMessage']['redir'] = $this->Ini->path_link . SC_dir_app_name(substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, -4)) . '/' . $this->NM_ajax_info['ajaxMessage']['redir'];
            }
            if ('' != $sRedirPar)
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = str_replace('=', '?#?', str_replace(';', '?@?', $sRedirPar));
            }
            else
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = '';
            }
            $this->NM_ajax_info['ajaxMessage']['message'] = NM_charset_to_utf8($sMessage);
            $this->NM_ajax_info['ajaxMessage']['title']   = NM_charset_to_utf8($sTitle);
            if (!isset($this->NM_ajax_info['ajaxMessage']['button']))
            {
                $this->NM_ajax_info['ajaxMessage']['button'] = 'Y';
            }
        }
    } // sc_ajax_message
    function sc_ajax_javascript($sJsFunc, $aParam = array())
    {
        if ($this->NM_ajax_flag)
        {
            foreach ($aParam as $i => $v)
            {
                $aParam[$i] = NM_charset_to_utf8($v);
            }
            $this->NM_ajax_info['ajaxJavascript'][] = array(NM_charset_to_utf8($sJsFunc), $aParam);
        }
        else
        {
            foreach ($aParam as $i => $v)
            {
                $aParam[$i] = '"' . str_replace('"', '\"', $v) . '"';
            }
            $this->NM_non_ajax_info['ajaxJavascript'][] = array($sJsFunc, $aParam);
        }
    } // sc_ajax_javascript
    function sc_field_readonly($sField, $sStatus, $iSeq = '')
    {
        if ('on' != $sStatus && 'off' != $sStatus)
        {
            return;
        }

        $sFieldDateTime = '';

        $sFlagVar        = 'bFlagRead_' . $sField;
        $this->$sFlagVar = 'on' == $sStatus;

        $this->nmgp_cmp_readonly[$sField]                = $sStatus;
        $this->NM_ajax_info['readOnly'][$sField . $iSeq] = $sStatus;
        if ('' != $sFieldDateTime)
        {
            $this->NM_ajax_info['readOnly'][$sFieldDateTime . $iSeq] = $sStatus;
        }
    } // sc_field_readonly
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "help":
                return array("sc_b_hlp_b");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-1", "sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_b.sc-unique-btn-7", "sc_b_sai_b.sc-unique-btn-9", "sc_b_sai_t.sc-unique-btn-13", "sc_b_sai_t.sc-unique-btn-15", "sc_b_sai_b.sc-unique-btn-19", "sc_b_sai_b.sc-unique-btn-21", "sc_b_sai_t.sc-unique-btn-2", "sc_b_sai_b.sc-unique-btn-8", "sc_b_sai_t.sc-unique-btn-14", "sc_b_sai_b.sc-unique-btn-20");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-4", "sys_separator.sc-unique-btn-6", "sys_separator.sc-unique-btn-10", "sys_separator.sc-unique-btn-12", "sys_separator.sc-unique-btn-16", "sys_separator.sc-unique-btn-18", "sys_separator.sc-unique-btn-22", "sys_separator.sc-unique-btn-24");
                break;
            case "nuevo":
                return array("sc_Nuevo_top.", "sc_Nuevo_bot.", "sc_Nuevo_top.", "sc_Nuevo_bot.");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-5", "sc_b_upd_b.sc-unique-btn-11", "sc_b_upd_t.sc-unique-btn-17", "sc_b_upd_b.sc-unique-btn-23");
                break;
            case "anular":
                return array("sc_Anular_top.", "sc_Anular_bot.", "sc_Anular_top.", "sc_Anular_bot.");
                break;
            case "enviar":
                return array("sc_enviar_top.", "sc_enviar_bot.", "sc_enviar_top.", "sc_enviar_bot.");
                break;
            case "retencion":
                return array("sc_retencion_top.", "sc_retencion_bot.", "sc_retencion_top.", "sc_retencion_bot.");
                break;
            case "ride":
                return array("sc_ride_top.", "sc_ride_bot.", "sc_ride_top.", "sc_ride_bot.");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
    }

    function displayAppFooter()
    {
    }

    function displayAppToolbars()
    {
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R") {
        } else {
            return false;
        }
        return true;
    } // displayAppToolbars

    function displayTopToolbar()
    {
        if (!$this->displayAppToolbars()) {
            return;
        }
    } // displayTopToolbar

    function displayBottomToolbar()
    {
        if (!$this->displayAppToolbars()) {
            return;
        }
    } // displayBottomToolbar

    function scGetColumnOrderRule($fieldName, &$orderColName, &$orderColOrient, &$orderColRule)
    {
        $sortRule = 'nosort';
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['ordem_ord'] == " desc") {
                $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
                $orderColRule = $sortRule = 'desc';
            } else {
                $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
                $orderColRule = $sortRule = 'asc';
            }
        }
        return $sortRule;
    }

    function scGetColumnOrderIcon($fieldName, $sortRule)
    {        if ('desc' == $sortRule) {
            return "<img src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc . "\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-" . $fieldName . "\" />";
        } elseif ('asc' == $sortRule) {
            return "<img src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc . "\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-" . $fieldName . "\" />";
        } elseif ('' != $this->Ini->Label_sort) {
            return "<img src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_sort . "\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-" . $fieldName . "\" />";
        } else {
            return '';
        }
    }

    function scIsFieldNumeric($fieldName)
    {
        switch ($fieldName) {
            case "liq_establecimiento":
                return true;
            case "liq_punto_emision":
                return true;
            case "liq_ambiente":
                return true;
            case "fc_proveedor":
                return true;
            case "fc_subtotal":
                return true;
            case "fc_subtotal_iva":
                return true;
            case "fc_subtotal_cero":
                return true;
            case "fc_subtotal_no_objeto":
                return true;
            case "fc_subtotal_excento":
                return true;
            case "fc_total_descuento":
                return true;
            case "fc_valor_ice":
                return true;
            case "fc_valor_iva":
                return true;
            case "fc_valor_irbpnr":
                return true;
            case "fc_propina":
                return true;
            case "fc_total":
                return true;
            case "fc_id":
                return true;
            case "fc_retencion":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "fc_fecha":
                return 'desc';
            case "liq_libretin":
                return 'desc';
            case "liq_establecimiento":
                return 'desc';
            case "liq_punto_emision":
                return 'desc';
            case "liq_ambiente":
                return 'desc';
            case "liq_fecha_autorizacion":
                return 'desc';
            case "fc_secuencial":
                return 'desc';
            case "fc_proveedor":
                return 'desc';
            case "fc_subtotal":
                return 'desc';
            case "fc_subtotal_iva":
                return 'desc';
            case "fc_subtotal_cero":
                return 'desc';
            case "fc_subtotal_no_objeto":
                return 'desc';
            case "fc_subtotal_excento":
                return 'desc';
            case "fc_total_descuento":
                return 'desc';
            case "fc_valor_ice":
                return 'desc';
            case "fc_valor_iva":
                return 'desc';
            case "fc_valor_irbpnr":
                return 'desc';
            case "fc_propina":
                return 'desc';
            case "fc_total":
                return 'desc';
            case "fc_id":
                return 'desc';
            case "fc_desde":
                return 'desc';
            case "fc_hasta":
                return 'desc';
            case "fc_fecha_caducidad":
                return 'desc';
            case "fc_retencion":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
