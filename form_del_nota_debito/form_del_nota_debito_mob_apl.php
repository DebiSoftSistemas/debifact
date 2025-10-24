<?php
//
class form_del_nota_debito_mob_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $use_100perc_fields = false;
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
   var $nd_numero;
   var $nd_tipo_comprobante;
   var $nd_empresa;
   var $nd_libretin;
   var $nd_libretin_1;
   var $nd_tipo_libretin;
   var $nd_establecimiento;
   var $nd_punto_emision;
   var $nd_secuencial;
   var $nd_ambiente;
   var $nd_cliente;
   var $nd_fecha;
   var $nd_iddocmod;
   var $nd_cod_docmod;
   var $nd_serie_docmod;
   var $nd_secuencial_docmod;
   var $nd_subtotal_iva;
   var $nd_subtotal_cero;
   var $nd_subtotal_no_objeto;
   var $nd_subtotal_excento;
   var $nd_subtotal;
   var $nd_valor_ice;
   var $nd_valor_iva;
   var $nd_total;
   var $nd_estado;
   var $nd_estado_sri;
   var $nd_error_sri;
   var $nd_fecha_autorizacion;
   var $nd_autorizacion;
   var $nd_usuario;
   var $nd_clave;
   var $nd_fecha_docmod;
   var $establecimiento;
   var $punto_emision;
   var $secuencial;
   var $tipo_libretin;
   var $ambiente;
   var $nombre_cliente;
   var $ruc_cliente;
   var $direccion_cliente;
   var $email_cliente;
   var $titulo;
   var $detalle;
   var $forma_pago;
   var $tipo_doc_sustento;
   var $serie_sustento;
   var $secuencial_sustento;
   var $fecha_sustento;
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
          if (isset($this->NM_ajax_info['param']['detalle']))
          {
              $this->detalle = $this->NM_ajax_info['param']['detalle'];
          }
          if (isset($this->NM_ajax_info['param']['direccion_cliente']))
          {
              $this->direccion_cliente = $this->NM_ajax_info['param']['direccion_cliente'];
          }
          if (isset($this->NM_ajax_info['param']['email_cliente']))
          {
              $this->email_cliente = $this->NM_ajax_info['param']['email_cliente'];
          }
          if (isset($this->NM_ajax_info['param']['establecimiento']))
          {
              $this->establecimiento = $this->NM_ajax_info['param']['establecimiento'];
          }
          if (isset($this->NM_ajax_info['param']['fecha_sustento']))
          {
              $this->fecha_sustento = $this->NM_ajax_info['param']['fecha_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['forma_pago']))
          {
              $this->forma_pago = $this->NM_ajax_info['param']['forma_pago'];
          }
          if (isset($this->NM_ajax_info['param']['nd_ambiente']))
          {
              $this->nd_ambiente = $this->NM_ajax_info['param']['nd_ambiente'];
          }
          if (isset($this->NM_ajax_info['param']['nd_autorizacion']))
          {
              $this->nd_autorizacion = $this->NM_ajax_info['param']['nd_autorizacion'];
          }
          if (isset($this->NM_ajax_info['param']['nd_clave']))
          {
              $this->nd_clave = $this->NM_ajax_info['param']['nd_clave'];
          }
          if (isset($this->NM_ajax_info['param']['nd_cliente']))
          {
              $this->nd_cliente = $this->NM_ajax_info['param']['nd_cliente'];
          }
          if (isset($this->NM_ajax_info['param']['nd_cod_docmod']))
          {
              $this->nd_cod_docmod = $this->NM_ajax_info['param']['nd_cod_docmod'];
          }
          if (isset($this->NM_ajax_info['param']['nd_empresa']))
          {
              $this->nd_empresa = $this->NM_ajax_info['param']['nd_empresa'];
          }
          if (isset($this->NM_ajax_info['param']['nd_error_sri']))
          {
              $this->nd_error_sri = $this->NM_ajax_info['param']['nd_error_sri'];
          }
          if (isset($this->NM_ajax_info['param']['nd_establecimiento']))
          {
              $this->nd_establecimiento = $this->NM_ajax_info['param']['nd_establecimiento'];
          }
          if (isset($this->NM_ajax_info['param']['nd_estado']))
          {
              $this->nd_estado = $this->NM_ajax_info['param']['nd_estado'];
          }
          if (isset($this->NM_ajax_info['param']['nd_estado_sri']))
          {
              $this->nd_estado_sri = $this->NM_ajax_info['param']['nd_estado_sri'];
          }
          if (isset($this->NM_ajax_info['param']['nd_fecha']))
          {
              $this->nd_fecha = $this->NM_ajax_info['param']['nd_fecha'];
          }
          if (isset($this->NM_ajax_info['param']['nd_fecha_autorizacion']))
          {
              $this->nd_fecha_autorizacion = $this->NM_ajax_info['param']['nd_fecha_autorizacion'];
          }
          if (isset($this->NM_ajax_info['param']['nd_fecha_docmod']))
          {
              $this->nd_fecha_docmod = $this->NM_ajax_info['param']['nd_fecha_docmod'];
          }
          if (isset($this->NM_ajax_info['param']['nd_iddocmod']))
          {
              $this->nd_iddocmod = $this->NM_ajax_info['param']['nd_iddocmod'];
          }
          if (isset($this->NM_ajax_info['param']['nd_libretin']))
          {
              $this->nd_libretin = $this->NM_ajax_info['param']['nd_libretin'];
          }
          if (isset($this->NM_ajax_info['param']['nd_numero']))
          {
              $this->nd_numero = $this->NM_ajax_info['param']['nd_numero'];
          }
          if (isset($this->NM_ajax_info['param']['nd_punto_emision']))
          {
              $this->nd_punto_emision = $this->NM_ajax_info['param']['nd_punto_emision'];
          }
          if (isset($this->NM_ajax_info['param']['nd_secuencial']))
          {
              $this->nd_secuencial = $this->NM_ajax_info['param']['nd_secuencial'];
          }
          if (isset($this->NM_ajax_info['param']['nd_secuencial_docmod']))
          {
              $this->nd_secuencial_docmod = $this->NM_ajax_info['param']['nd_secuencial_docmod'];
          }
          if (isset($this->NM_ajax_info['param']['nd_serie_docmod']))
          {
              $this->nd_serie_docmod = $this->NM_ajax_info['param']['nd_serie_docmod'];
          }
          if (isset($this->NM_ajax_info['param']['nd_subtotal']))
          {
              $this->nd_subtotal = $this->NM_ajax_info['param']['nd_subtotal'];
          }
          if (isset($this->NM_ajax_info['param']['nd_subtotal_cero']))
          {
              $this->nd_subtotal_cero = $this->NM_ajax_info['param']['nd_subtotal_cero'];
          }
          if (isset($this->NM_ajax_info['param']['nd_subtotal_excento']))
          {
              $this->nd_subtotal_excento = $this->NM_ajax_info['param']['nd_subtotal_excento'];
          }
          if (isset($this->NM_ajax_info['param']['nd_subtotal_iva']))
          {
              $this->nd_subtotal_iva = $this->NM_ajax_info['param']['nd_subtotal_iva'];
          }
          if (isset($this->NM_ajax_info['param']['nd_subtotal_no_objeto']))
          {
              $this->nd_subtotal_no_objeto = $this->NM_ajax_info['param']['nd_subtotal_no_objeto'];
          }
          if (isset($this->NM_ajax_info['param']['nd_tipo_comprobante']))
          {
              $this->nd_tipo_comprobante = $this->NM_ajax_info['param']['nd_tipo_comprobante'];
          }
          if (isset($this->NM_ajax_info['param']['nd_tipo_libretin']))
          {
              $this->nd_tipo_libretin = $this->NM_ajax_info['param']['nd_tipo_libretin'];
          }
          if (isset($this->NM_ajax_info['param']['nd_total']))
          {
              $this->nd_total = $this->NM_ajax_info['param']['nd_total'];
          }
          if (isset($this->NM_ajax_info['param']['nd_usuario']))
          {
              $this->nd_usuario = $this->NM_ajax_info['param']['nd_usuario'];
          }
          if (isset($this->NM_ajax_info['param']['nd_valor_ice']))
          {
              $this->nd_valor_ice = $this->NM_ajax_info['param']['nd_valor_ice'];
          }
          if (isset($this->NM_ajax_info['param']['nd_valor_iva']))
          {
              $this->nd_valor_iva = $this->NM_ajax_info['param']['nd_valor_iva'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nombre_cliente']))
          {
              $this->nombre_cliente = $this->NM_ajax_info['param']['nombre_cliente'];
          }
          if (isset($this->NM_ajax_info['param']['punto_emision']))
          {
              $this->punto_emision = $this->NM_ajax_info['param']['punto_emision'];
          }
          if (isset($this->NM_ajax_info['param']['ruc_cliente']))
          {
              $this->ruc_cliente = $this->NM_ajax_info['param']['ruc_cliente'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['secuencial']))
          {
              $this->secuencial = $this->NM_ajax_info['param']['secuencial'];
          }
          if (isset($this->NM_ajax_info['param']['secuencial_sustento']))
          {
              $this->secuencial_sustento = $this->NM_ajax_info['param']['secuencial_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['serie_sustento']))
          {
              $this->serie_sustento = $this->NM_ajax_info['param']['serie_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['tipo_doc_sustento']))
          {
              $this->tipo_doc_sustento = $this->NM_ajax_info['param']['tipo_doc_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['tipo_libretin']))
          {
              $this->tipo_libretin = $this->NM_ajax_info['param']['tipo_libretin'];
          }
          if (isset($this->NM_ajax_info['param']['titulo']))
          {
              $this->titulo = $this->NM_ajax_info['param']['titulo'];
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
      if (isset($this->var_id_nota_debito) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_id_nota_debito'] = $this->var_id_nota_debito;
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
      if (isset($_POST["var_id_nota_debito"]) && isset($this->var_id_nota_debito)) 
      {
          $_SESSION['var_id_nota_debito'] = $this->var_id_nota_debito;
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
      if (isset($_GET["var_id_nota_debito"]) && isset($this->var_id_nota_debito)) 
      {
          $_SESSION['var_id_nota_debito'] = $this->var_id_nota_debito;
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
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['embutida_parms']);
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
                 nm_limpa_str_form_del_nota_debito_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->var_id_nota_debito)) 
          {
              $_SESSION['var_id_nota_debito'] = $this->var_id_nota_debito;
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
              $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['total']);
          }
          if (!isset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['total']))
          {
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->var_id_nota_debito)) 
          {
              $_SESSION['var_id_nota_debito'] = $this->var_id_nota_debito;
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
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_del_nota_debito_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_nota_debito_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_nota_debito_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_nota_debito_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_nota_debito_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_del_nota_debito_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_nota_debito_mob']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_nota_debito";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_del_nota_debito_mob")
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
      $this->nm_new_label['nd_numero'] = '' . $this->Ini->Nm_lang['lang_id'] . '';
      $this->nm_new_label['nd_tipo_comprobante'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['nd_empresa'] = '' . $this->Ini->Nm_lang['lang_empresa'] . '';
      $this->nm_new_label['nd_libretin'] = '' . $this->Ini->Nm_lang['lang_libretin'] . '';
      $this->nm_new_label['nd_tipo_libretin'] = '' . $this->Ini->Nm_lang['lang_tipo_libretin'] . '';
      $this->nm_new_label['nd_establecimiento'] = '' . $this->Ini->Nm_lang['lang_establecimiento'] . '';
      $this->nm_new_label['nd_punto_emision'] = '' . $this->Ini->Nm_lang['lang_punto_emision'] . '';
      $this->nm_new_label['nd_secuencial'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['nd_ambiente'] = '' . $this->Ini->Nm_lang['lang_tipo_ambiente'] . '';
      $this->nm_new_label['nd_cliente'] = '' . $this->Ini->Nm_lang['lang_cliente'] . '';
      $this->nm_new_label['nd_fecha'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['nd_iddocmod'] = '' . $this->Ini->Nm_lang['lang_factura'] . '';
      $this->nm_new_label['nd_cod_docmod'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['nd_serie_docmod'] = '' . $this->Ini->Nm_lang['lang_serie_sri'] . '';
      $this->nm_new_label['nd_secuencial_docmod'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['nd_subtotal_iva'] = '' . $this->Ini->Nm_lang['lang_subtotal_iva'] . '';
      $this->nm_new_label['nd_subtotal_cero'] = '' . $this->Ini->Nm_lang['lang_subtotal_cero'] . '';
      $this->nm_new_label['nd_subtotal_no_objeto'] = '' . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . '';
      $this->nm_new_label['nd_subtotal_excento'] = '' . $this->Ini->Nm_lang['lang_subtotal_exento'] . '';
      $this->nm_new_label['nd_subtotal'] = '' . $this->Ini->Nm_lang['lang_subtotal'] . '';
      $this->nm_new_label['nd_valor_ice'] = '' . $this->Ini->Nm_lang['lang_ice'] . '';
      $this->nm_new_label['nd_valor_iva'] = '' . $this->Ini->Nm_lang['lang_iva'] . '';
      $this->nm_new_label['nd_total'] = '' . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . '';
      $this->nm_new_label['nd_estado'] = '' . $this->Ini->Nm_lang['lang_estado'] . '';
      $this->nm_new_label['nd_estado_sri'] = '' . $this->Ini->Nm_lang['lang_estado_sri'] . '';
      $this->nm_new_label['nd_error_sri'] = '' . $this->Ini->Nm_lang['lang_mensaje'] . '';
      $this->nm_new_label['nd_fecha_autorizacion'] = '' . $this->Ini->Nm_lang['lang_fecha_autorizacion'] . '';
      $this->nm_new_label['nd_autorizacion'] = '' . $this->Ini->Nm_lang['lang_autorizacion'] . '';
      $this->nm_new_label['nd_usuario'] = '' . $this->Ini->Nm_lang['lang_usuario'] . '';
      $this->nm_new_label['nd_clave'] = '' . $this->Ini->Nm_lang['lang_clave_acceso'] . '';
      $this->nm_new_label['nd_fecha_docmod'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['establecimiento'] = '' . $this->Ini->Nm_lang['lang_establecimiento'] . '';
      $this->nm_new_label['punto_emision'] = '' . $this->Ini->Nm_lang['lang_punto_emision'] . '';
      $this->nm_new_label['secuencial'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['tipo_libretin'] = '' . $this->Ini->Nm_lang['lang_tipo_libretin'] . '';
      $this->nm_new_label['ambiente'] = '' . $this->Ini->Nm_lang['lang_tipo_ambiente'] . '';
      $this->nm_new_label['nombre_cliente'] = '' . $this->Ini->Nm_lang['lang_cliente'] . '';
      $this->nm_new_label['ruc_cliente'] = '' . $this->Ini->Nm_lang['lang_lot_identificacion'] . '';
      $this->nm_new_label['direccion_cliente'] = '' . $this->Ini->Nm_lang['lang_direccion'] . '';
      $this->nm_new_label['email_cliente'] = '' . $this->Ini->Nm_lang['lang_email'] . '';
      $this->nm_new_label['tipo_doc_sustento'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['serie_sustento'] = '' . $this->Ini->Nm_lang['lang_serie_sri'] . '';
      $this->nm_new_label['secuencial_sustento'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['fecha_sustento'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';

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


      $this->arr_buttons['nuevo']['hint']             = "";
      $this->arr_buttons['nuevo']['type']             = "button";
      $this->arr_buttons['nuevo']['value']            = "" . $this->Ini->Nm_lang['lang_nueva_nota_debito'] . "";
      $this->arr_buttons['nuevo']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['nuevo']['display_position'] = "text_right";
      $this->arr_buttons['nuevo']['style']            = "default";
      $this->arr_buttons['nuevo']['image']            = "";
      $this->arr_buttons['nuevo']['has_fa']            = "true";
      $this->arr_buttons['nuevo']['fontawesomeicon']            = "";

      $this->arr_buttons['ride']['hint']             = "";
      $this->arr_buttons['ride']['type']             = "button";
      $this->arr_buttons['ride']['value']            = "" . $this->Ini->Nm_lang['lang_ride'] . "";
      $this->arr_buttons['ride']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['ride']['display_position'] = "text_right";
      $this->arr_buttons['ride']['style']            = "default";
      $this->arr_buttons['ride']['image']            = "";
      $this->arr_buttons['ride']['has_fa']            = "true";
      $this->arr_buttons['ride']['fontawesomeicon']            = "fas fa-print";

      $this->arr_buttons['autorizar']['hint']             = "";
      $this->arr_buttons['autorizar']['type']             = "button";
      $this->arr_buttons['autorizar']['value']            = "" . $this->Ini->Nm_lang['lang_autorizar'] . "";
      $this->arr_buttons['autorizar']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['autorizar']['display_position'] = "text_right";
      $this->arr_buttons['autorizar']['style']            = "default";
      $this->arr_buttons['autorizar']['image']            = "";
      $this->arr_buttons['autorizar']['has_fa']            = "true";
      $this->arr_buttons['autorizar']['fontawesomeicon']            = "fas fa-share-square";

      $this->arr_buttons['anular']['hint']             = "";
      $this->arr_buttons['anular']['type']             = "button";
      $this->arr_buttons['anular']['value']            = "" . $this->Ini->Nm_lang['lang_anular'] . "";
      $this->arr_buttons['anular']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['anular']['display_position'] = "text_right";
      $this->arr_buttons['anular']['style']            = "danger";
      $this->arr_buttons['anular']['image']            = "";
      $this->arr_buttons['anular']['has_fa']            = "true";
      $this->arr_buttons['anular']['fontawesomeicon']            = "fas fa-minus-circle";


      $_SESSION['scriptcase']['error_icon']['form_del_nota_debito_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_del_nota_debito_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['goto']      = 'on';
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
      $this->nmgp_botoes['Nuevo'] = "on";
      $this->nmgp_botoes['ride'] = "on";
      $this->nmgp_botoes['autorizar'] = "on";
      $this->nmgp_botoes['Anular'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_orig'] = " where (nd_numero=" . $_SESSION['var_id_nota_debito'] . ")";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_pesq'] = " where (nd_numero=" . $_SESSION['var_id_nota_debito'] . ")";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_nota_debito_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_nota_debito_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_form'];
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal_iva'] != "null"){$this->nd_subtotal_iva = $this->nmgp_dados_form['nd_subtotal_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal_cero'] != "null"){$this->nd_subtotal_cero = $this->nmgp_dados_form['nd_subtotal_cero'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal_no_objeto'] != "null"){$this->nd_subtotal_no_objeto = $this->nmgp_dados_form['nd_subtotal_no_objeto'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal_excento'] != "null"){$this->nd_subtotal_excento = $this->nmgp_dados_form['nd_subtotal_excento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal'] != "null"){$this->nd_subtotal = $this->nmgp_dados_form['nd_subtotal'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_valor_ice'] != "null"){$this->nd_valor_ice = $this->nmgp_dados_form['nd_valor_ice'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_valor_iva'] != "null"){$this->nd_valor_iva = $this->nmgp_dados_form['nd_valor_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_total'] != "null"){$this->nd_total = $this->nmgp_dados_form['nd_total'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['establecimiento'] != "null"){$this->establecimiento = $this->nmgp_dados_form['establecimiento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['punto_emision'] != "null"){$this->punto_emision = $this->nmgp_dados_form['punto_emision'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['secuencial'] != "null"){$this->secuencial = $this->nmgp_dados_form['secuencial'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['tipo_libretin'] != "null"){$this->tipo_libretin = $this->nmgp_dados_form['tipo_libretin'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['ambiente'] != "null"){$this->ambiente = $this->nmgp_dados_form['ambiente'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nombre_cliente'] != "null"){$this->nombre_cliente = $this->nmgp_dados_form['nombre_cliente'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['ruc_cliente'] != "null"){$this->ruc_cliente = $this->nmgp_dados_form['ruc_cliente'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['direccion_cliente'] != "null"){$this->direccion_cliente = $this->nmgp_dados_form['direccion_cliente'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['email_cliente'] != "null"){$this->email_cliente = $this->nmgp_dados_form['email_cliente'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['tipo_doc_sustento'] != "null"){$this->tipo_doc_sustento = $this->nmgp_dados_form['tipo_doc_sustento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['serie_sustento'] != "null"){$this->serie_sustento = $this->nmgp_dados_form['serie_sustento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['secuencial_sustento'] != "null"){$this->secuencial_sustento = $this->nmgp_dados_form['secuencial_sustento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fecha_sustento'] != "null"){
              $this->fecha_sustento = $this->nmgp_dados_form['fecha_sustento'];
              $this->fecha_sustento = $this->nm_conv_data_db($this->fecha_sustento, 'yyyy-mm-dd', $this->field_config['fecha_sustento']['date_format']);
          }
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_del_nota_debito_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_del_nota_debito/igtech.PocesarDocumentosElectronicos.php');
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
              include_once($this->Ini->path_embutida . 'form_del_nota_debito/form_del_nota_debito_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_del_nota_debito_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_del_nota_debito_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_del_nota_debito_mob_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_del_nota_debito/form_del_nota_debito_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_del_nota_debito_mob_erro.class.php"); 
      }
      $this->Erro      = new form_del_nota_debito_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opcao']))
         { 
             if ($this->nd_numero != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['Nuevo'] = "off";
          $this->nmgp_botoes['ride'] = "off";
          $this->nmgp_botoes['autorizar'] = "off";
          $this->nmgp_botoes['Anular'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['Nuevo'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['botoes']['Nuevo'];
          $this->nmgp_botoes['ride'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['botoes']['ride'];
          $this->nmgp_botoes['autorizar'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['botoes']['autorizar'];
          $this->nmgp_botoes['Anular'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['botoes']['Anular'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_form'];
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
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['reg_start'] = "";
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['total']);
          $detailAppName = 'form_del_detalle_nota_debito_mob';
          $detailAppObject = "form_del_detalle_nota_debito_mob";
          $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          if (!@is_dir($detailAppFolder)) {
              $detailAppName = substr($detailAppName, 0, -4);
              $detailAppObject = substr($detailAppObject, 0, -4);
              $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          }
          $detailAppObject .= '_apl';
          require_once($detailAppFolder . "/index.php");
          require_once($detailAppFolder . "/{$detailAppName}_apl.php");
          $this->form_del_detalle_nota_debito_mob = new $detailAppObject;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['reg_start'] = "";
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['total']);
          $detailAppName = 'form_del_forma_pago_nota_debito_mob';
          $detailAppObject = "form_del_forma_pago_nota_debito_mob";
          $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          if (!@is_dir($detailAppFolder)) {
              $detailAppName = substr($detailAppName, 0, -4);
              $detailAppObject = substr($detailAppObject, 0, -4);
              $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          }
          $detailAppObject .= '_apl';
          require_once($detailAppFolder . "/index.php");
          require_once($detailAppFolder . "/{$detailAppName}_apl.php");
          $this->form_del_forma_pago_nota_debito_mob = new $detailAppObject;
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

            $out1_img_cache = $_SESSION['scriptcase']['form_del_nota_debito_mob']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_del_nota_debito_mob']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$orig_img);
            echo $orig_img . '_@@NM@@_';            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            $sc_obj_img = new nm_trata_img($_SERVER['DOCUMENT_ROOT'].$out1_img_cache, true);

            if(!empty($img_width) && !empty($img_height)){
                $sc_obj_img->setWidth($img_width);
                $sc_obj_img->setHeight($img_height);
            }            $sc_obj_img->createImg($_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            echo $out1_img_cache;
               exit;
            }
      if (isset($this->nd_numero)) { $this->nm_limpa_alfa($this->nd_numero); }
      if (isset($this->nd_tipo_comprobante)) { $this->nm_limpa_alfa($this->nd_tipo_comprobante); }
      if (isset($this->nd_empresa)) { $this->nm_limpa_alfa($this->nd_empresa); }
      if (isset($this->nd_libretin)) { $this->nm_limpa_alfa($this->nd_libretin); }
      if (isset($this->nd_tipo_libretin)) { $this->nm_limpa_alfa($this->nd_tipo_libretin); }
      if (isset($this->nd_establecimiento)) { $this->nm_limpa_alfa($this->nd_establecimiento); }
      if (isset($this->nd_punto_emision)) { $this->nm_limpa_alfa($this->nd_punto_emision); }
      if (isset($this->nd_secuencial)) { $this->nm_limpa_alfa($this->nd_secuencial); }
      if (isset($this->nd_ambiente)) { $this->nm_limpa_alfa($this->nd_ambiente); }
      if (isset($this->nd_cliente)) { $this->nm_limpa_alfa($this->nd_cliente); }
      if (isset($this->nd_iddocmod)) { $this->nm_limpa_alfa($this->nd_iddocmod); }
      if (isset($this->nd_cod_docmod)) { $this->nm_limpa_alfa($this->nd_cod_docmod); }
      if (isset($this->nd_serie_docmod)) { $this->nm_limpa_alfa($this->nd_serie_docmod); }
      if (isset($this->nd_secuencial_docmod)) { $this->nm_limpa_alfa($this->nd_secuencial_docmod); }
      if (isset($this->nd_subtotal_iva)) { $this->nm_limpa_alfa($this->nd_subtotal_iva); }
      if (isset($this->nd_subtotal_cero)) { $this->nm_limpa_alfa($this->nd_subtotal_cero); }
      if (isset($this->nd_subtotal_no_objeto)) { $this->nm_limpa_alfa($this->nd_subtotal_no_objeto); }
      if (isset($this->nd_subtotal_excento)) { $this->nm_limpa_alfa($this->nd_subtotal_excento); }
      if (isset($this->nd_subtotal)) { $this->nm_limpa_alfa($this->nd_subtotal); }
      if (isset($this->nd_valor_ice)) { $this->nm_limpa_alfa($this->nd_valor_ice); }
      if (isset($this->nd_valor_iva)) { $this->nm_limpa_alfa($this->nd_valor_iva); }
      if (isset($this->nd_total)) { $this->nm_limpa_alfa($this->nd_total); }
      if (isset($this->nd_estado)) { $this->nm_limpa_alfa($this->nd_estado); }
      if (isset($this->nd_estado_sri)) { $this->nm_limpa_alfa($this->nd_estado_sri); }
      if (isset($this->nd_error_sri)) { $this->nm_limpa_alfa($this->nd_error_sri); }
      if (isset($this->nd_autorizacion)) { $this->nm_limpa_alfa($this->nd_autorizacion); }
      if (isset($this->nd_usuario)) { $this->nm_limpa_alfa($this->nd_usuario); }
      if (isset($this->nd_clave)) { $this->nm_limpa_alfa($this->nd_clave); }
      if (isset($this->detalle)) { $this->nm_limpa_alfa($this->detalle); }
      if (isset($this->forma_pago)) { $this->nm_limpa_alfa($this->forma_pago); }
      if ($nm_opc_form_php == "formphp")
      { 
          if ($nm_call_php == "autorizar")
          { 
              $this->sc_btn_autorizar();
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
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- nd_fecha
      $this->field_config['nd_fecha']                 = array();
      $this->field_config['nd_fecha']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['nd_fecha']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['nd_fecha']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'nd_fecha');
      //-- nd_establecimiento
      $this->field_config['nd_establecimiento']               = array();
      $this->field_config['nd_establecimiento']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_establecimiento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_establecimiento']['symbol_dec'] = '';
      $this->field_config['nd_establecimiento']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_establecimiento']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- nd_punto_emision
      $this->field_config['nd_punto_emision']               = array();
      $this->field_config['nd_punto_emision']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_punto_emision']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_punto_emision']['symbol_dec'] = '';
      $this->field_config['nd_punto_emision']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_punto_emision']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- nd_secuencial
      $this->field_config['nd_secuencial']               = array();
      $this->field_config['nd_secuencial']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_secuencial']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_secuencial']['symbol_dec'] = '';
      $this->field_config['nd_secuencial']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_secuencial']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- nd_ambiente
      $this->field_config['nd_ambiente']               = array();
      $this->field_config['nd_ambiente']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_ambiente']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_ambiente']['symbol_dec'] = '';
      $this->field_config['nd_ambiente']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_ambiente']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- nd_numero
      $this->field_config['nd_numero']               = array();
      $this->field_config['nd_numero']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_numero']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_numero']['symbol_dec'] = '';
      $this->field_config['nd_numero']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_numero']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- nd_fecha_autorizacion
      $this->field_config['nd_fecha_autorizacion']                 = array();
      $this->field_config['nd_fecha_autorizacion']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['nd_fecha_autorizacion']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['nd_fecha_autorizacion']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'nd_fecha_autorizacion');
      //-- nd_iddocmod
      $this->field_config['nd_iddocmod']               = array();
      $this->field_config['nd_iddocmod']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_iddocmod']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_iddocmod']['symbol_dec'] = '';
      $this->field_config['nd_iddocmod']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_iddocmod']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fecha_sustento
      $this->field_config['fecha_sustento']                 = array();
      $this->field_config['fecha_sustento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha_sustento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_sustento']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha_sustento');
      //-- nd_cliente
      $this->field_config['nd_cliente']               = array();
      $this->field_config['nd_cliente']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_cliente']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_cliente']['symbol_dec'] = '';
      $this->field_config['nd_cliente']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_cliente']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- nd_secuencial_docmod
      $this->field_config['nd_secuencial_docmod']               = array();
      $this->field_config['nd_secuencial_docmod']['symbol_grp'] = '';
      $this->field_config['nd_secuencial_docmod']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_secuencial_docmod']['symbol_dec'] = '';
      $this->field_config['nd_secuencial_docmod']['symbol_neg'] = '-';
      $this->field_config['nd_secuencial_docmod']['format_neg'] = '2';
      //-- nd_fecha_docmod
      $this->field_config['nd_fecha_docmod']                 = array();
      $this->field_config['nd_fecha_docmod']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['nd_fecha_docmod']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['nd_fecha_docmod']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'nd_fecha_docmod');
      //-- nd_subtotal
      $this->field_config['nd_subtotal']               = array();
      $this->field_config['nd_subtotal']['symbol_grp'] = '';
      $this->field_config['nd_subtotal']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_subtotal']['symbol_dec'] = '.';
      $this->field_config['nd_subtotal']['symbol_neg'] = '-';
      $this->field_config['nd_subtotal']['format_neg'] = '2';
      //-- nd_subtotal_iva
      $this->field_config['nd_subtotal_iva']               = array();
      $this->field_config['nd_subtotal_iva']['symbol_grp'] = '';
      $this->field_config['nd_subtotal_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_subtotal_iva']['symbol_dec'] = '.';
      $this->field_config['nd_subtotal_iva']['symbol_neg'] = '-';
      $this->field_config['nd_subtotal_iva']['format_neg'] = '2';
      //-- nd_subtotal_cero
      $this->field_config['nd_subtotal_cero']               = array();
      $this->field_config['nd_subtotal_cero']['symbol_grp'] = '';
      $this->field_config['nd_subtotal_cero']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_subtotal_cero']['symbol_dec'] = '.';
      $this->field_config['nd_subtotal_cero']['symbol_neg'] = '-';
      $this->field_config['nd_subtotal_cero']['format_neg'] = '2';
      //-- nd_subtotal_no_objeto
      $this->field_config['nd_subtotal_no_objeto']               = array();
      $this->field_config['nd_subtotal_no_objeto']['symbol_grp'] = '';
      $this->field_config['nd_subtotal_no_objeto']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_subtotal_no_objeto']['symbol_dec'] = '.';
      $this->field_config['nd_subtotal_no_objeto']['symbol_neg'] = '-';
      $this->field_config['nd_subtotal_no_objeto']['format_neg'] = '2';
      //-- nd_subtotal_excento
      $this->field_config['nd_subtotal_excento']               = array();
      $this->field_config['nd_subtotal_excento']['symbol_grp'] = '';
      $this->field_config['nd_subtotal_excento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_subtotal_excento']['symbol_dec'] = '.';
      $this->field_config['nd_subtotal_excento']['symbol_neg'] = '-';
      $this->field_config['nd_subtotal_excento']['format_neg'] = '2';
      //-- nd_valor_ice
      $this->field_config['nd_valor_ice']               = array();
      $this->field_config['nd_valor_ice']['symbol_grp'] = '';
      $this->field_config['nd_valor_ice']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_valor_ice']['symbol_dec'] = '.';
      $this->field_config['nd_valor_ice']['symbol_neg'] = '-';
      $this->field_config['nd_valor_ice']['format_neg'] = '2';
      //-- nd_valor_iva
      $this->field_config['nd_valor_iva']               = array();
      $this->field_config['nd_valor_iva']['symbol_grp'] = '';
      $this->field_config['nd_valor_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_valor_iva']['symbol_dec'] = '.';
      $this->field_config['nd_valor_iva']['symbol_neg'] = '-';
      $this->field_config['nd_valor_iva']['format_neg'] = '2';
      //-- nd_total
      $this->field_config['nd_total']               = array();
      $this->field_config['nd_total']['symbol_grp'] = '';
      $this->field_config['nd_total']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_total']['symbol_dec'] = '.';
      $this->field_config['nd_total']['symbol_neg'] = '-';
      $this->field_config['nd_total']['format_neg'] = '2';
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Gera_log_access'] = false;
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
          if ('validate_nd_libretin' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_libretin');
          }
          if ('validate_establecimiento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'establecimiento');
          }
          if ('validate_punto_emision' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'punto_emision');
          }
          if ('validate_secuencial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'secuencial');
          }
          if ('validate_tipo_libretin' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipo_libretin');
          }
          if ('validate_ambiente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ambiente');
          }
          if ('validate_nd_fecha' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_fecha');
          }
          if ('validate_nd_establecimiento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_establecimiento');
          }
          if ('validate_nd_punto_emision' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_punto_emision');
          }
          if ('validate_nd_secuencial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_secuencial');
          }
          if ('validate_nd_tipo_libretin' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_tipo_libretin');
          }
          if ('validate_nd_ambiente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_ambiente');
          }
          if ('validate_nd_tipo_comprobante' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_tipo_comprobante');
          }
          if ('validate_nd_numero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_numero');
          }
          if ('validate_nd_empresa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_empresa');
          }
          if ('validate_nd_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_estado');
          }
          if ('validate_nd_estado_sri' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_estado_sri');
          }
          if ('validate_nd_error_sri' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_error_sri');
          }
          if ('validate_nd_fecha_autorizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_fecha_autorizacion');
          }
          if ('validate_nd_autorizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_autorizacion');
          }
          if ('validate_nd_usuario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_usuario');
          }
          if ('validate_nd_clave' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_clave');
          }
          if ('validate_nd_iddocmod' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_iddocmod');
          }
          if ('validate_tipo_doc_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipo_doc_sustento');
          }
          if ('validate_serie_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'serie_sustento');
          }
          if ('validate_secuencial_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'secuencial_sustento');
          }
          if ('validate_fecha_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fecha_sustento');
          }
          if ('validate_nd_cliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_cliente');
          }
          if ('validate_nd_cod_docmod' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_cod_docmod');
          }
          if ('validate_nd_serie_docmod' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_serie_docmod');
          }
          if ('validate_nd_secuencial_docmod' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_secuencial_docmod');
          }
          if ('validate_nd_fecha_docmod' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_fecha_docmod');
          }
          if ('validate_nombre_cliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombre_cliente');
          }
          if ('validate_ruc_cliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ruc_cliente');
          }
          if ('validate_direccion_cliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'direccion_cliente');
          }
          if ('validate_email_cliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'email_cliente');
          }
          if ('validate_detalle' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'detalle');
          }
          if ('validate_nd_subtotal' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_subtotal');
          }
          if ('validate_nd_subtotal_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_subtotal_iva');
          }
          if ('validate_nd_subtotal_cero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_subtotal_cero');
          }
          if ('validate_nd_subtotal_no_objeto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_subtotal_no_objeto');
          }
          if ('validate_nd_subtotal_excento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_subtotal_excento');
          }
          if ('validate_nd_valor_ice' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_valor_ice');
          }
          if ('validate_nd_valor_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_valor_iva');
          }
          if ('validate_nd_total' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_total');
          }
          if ('validate_forma_pago' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'forma_pago');
          }
          form_del_nota_debito_mob_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_nd_iddocmod_onchange' == $this->NM_ajax_opcao)
          {
              $this->nd_iddocmod_onChange();
          }
          if ('event_nd_libretin_onblur' == $this->NM_ajax_opcao)
          {
              $this->nd_libretin_onBlur();
          }
          if ('event_nd_libretin_onchange' == $this->NM_ajax_opcao)
          {
              $this->nd_libretin_onChange();
          }
          if ('event_scajaxbutton_autorizar_onclick' == $this->NM_ajax_opcao)
          {
              $this->scajaxbutton_autorizar_onClick();
          }
          if ('event_scajaxbutton_anular_onclick' == $this->NM_ajax_opcao)
          {
              $this->scajaxbutton_Anular_onClick();
          }
          form_del_nota_debito_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['establecimiento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->establecimiento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['establecimiento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['punto_emision']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->punto_emision = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['punto_emision'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['secuencial']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->secuencial = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['secuencial'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['tipo_libretin']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tipo_libretin = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['tipo_libretin'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['ambiente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->ambiente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['ambiente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['tipo_doc_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tipo_doc_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['tipo_doc_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['serie_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->serie_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['serie_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['secuencial_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->secuencial_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['secuencial_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['fecha_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fecha_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['fecha_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nombre_cliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nombre_cliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nombre_cliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['ruc_cliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->ruc_cliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['ruc_cliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['direccion_cliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->direccion_cliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['direccion_cliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['email_cliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->email_cliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['email_cliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal_cero']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal_cero = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal_cero'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal_no_objeto']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal_no_objeto = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal_no_objeto'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal_excento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal_excento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_subtotal_excento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_valor_ice']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_valor_ice = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_valor_ice'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_valor_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_valor_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_valor_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_total']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_total = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']['nd_total'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_del_nota_debito_mob_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_del_nota_debito_mob_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_del_nota_debito_mob_pack_ajax_response();
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
          form_del_nota_debito_mob_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_del_nota_debito_mob.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_nota_debito") ?></TITLE>
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
<form name="Fdown" method="get" action="form_del_nota_debito_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_del_nota_debito_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_del_nota_debito_mob.php" target="_self" style="display: none"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_nota_debito_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_del_nota_debito_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_nota_debito_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_del_nota_debito_mob_pack_ajax_response();
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
           case 'nd_libretin':
               return "" . $this->Ini->Nm_lang['lang_libretin'] . "";
               break;
           case 'establecimiento':
               return "" . $this->Ini->Nm_lang['lang_establecimiento'] . "";
               break;
           case 'punto_emision':
               return "" . $this->Ini->Nm_lang['lang_punto_emision'] . "";
               break;
           case 'secuencial':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'tipo_libretin':
               return "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
               break;
           case 'ambiente':
               return "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
               break;
           case 'nd_fecha':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'nd_establecimiento':
               return "" . $this->Ini->Nm_lang['lang_establecimiento'] . "";
               break;
           case 'nd_punto_emision':
               return "" . $this->Ini->Nm_lang['lang_punto_emision'] . "";
               break;
           case 'nd_secuencial':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'nd_tipo_libretin':
               return "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
               break;
           case 'nd_ambiente':
               return "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
               break;
           case 'nd_tipo_comprobante':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
               break;
           case 'nd_numero':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
               break;
           case 'nd_empresa':
               return "" . $this->Ini->Nm_lang['lang_empresa'] . "";
               break;
           case 'nd_estado':
               return "" . $this->Ini->Nm_lang['lang_estado'] . "";
               break;
           case 'nd_estado_sri':
               return "" . $this->Ini->Nm_lang['lang_estado_sri'] . "";
               break;
           case 'nd_error_sri':
               return "" . $this->Ini->Nm_lang['lang_mensaje'] . "";
               break;
           case 'nd_fecha_autorizacion':
               return "" . $this->Ini->Nm_lang['lang_fecha_autorizacion'] . "";
               break;
           case 'nd_autorizacion':
               return "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
               break;
           case 'nd_usuario':
               return "" . $this->Ini->Nm_lang['lang_usuario'] . "";
               break;
           case 'nd_clave':
               return "" . $this->Ini->Nm_lang['lang_clave_acceso'] . "";
               break;
           case 'nd_iddocmod':
               return "" . $this->Ini->Nm_lang['lang_factura'] . "";
               break;
           case 'tipo_doc_sustento':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
               break;
           case 'serie_sustento':
               return "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
               break;
           case 'secuencial_sustento':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'fecha_sustento':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'nd_cliente':
               return "" . $this->Ini->Nm_lang['lang_cliente'] . "";
               break;
           case 'nd_cod_docmod':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
               break;
           case 'nd_serie_docmod':
               return "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
               break;
           case 'nd_secuencial_docmod':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'nd_fecha_docmod':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'nombre_cliente':
               return "" . $this->Ini->Nm_lang['lang_cliente'] . "";
               break;
           case 'ruc_cliente':
               return "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
               break;
           case 'direccion_cliente':
               return "" . $this->Ini->Nm_lang['lang_direccion'] . "";
               break;
           case 'email_cliente':
               return "" . $this->Ini->Nm_lang['lang_email'] . "";
               break;
           case 'detalle':
               return "detalle";
               break;
           case 'nd_subtotal':
               return "" . $this->Ini->Nm_lang['lang_subtotal'] . "";
               break;
           case 'nd_subtotal_iva':
               return "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "";
               break;
           case 'nd_subtotal_cero':
               return "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "";
               break;
           case 'nd_subtotal_no_objeto':
               return "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "";
               break;
           case 'nd_subtotal_excento':
               return "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "";
               break;
           case 'nd_valor_ice':
               return "" . $this->Ini->Nm_lang['lang_ice'] . "";
               break;
           case 'nd_valor_iva':
               return "" . $this->Ini->Nm_lang['lang_iva'] . "";
               break;
           case 'nd_total':
               return "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "";
               break;
           case 'forma_pago':
               return "forma_pago";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_del_nota_debito_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_del_nota_debito_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_del_nota_debito_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_del_nota_debito_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'titulo' == $filtro)) || (is_array($filtro) && in_array('titulo', $filtro)))
        $this->ValidateField_titulo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_libretin' == $filtro)) || (is_array($filtro) && in_array('nd_libretin', $filtro)))
        $this->ValidateField_nd_libretin($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'establecimiento' == $filtro)) || (is_array($filtro) && in_array('establecimiento', $filtro)))
        $this->ValidateField_establecimiento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'punto_emision' == $filtro)) || (is_array($filtro) && in_array('punto_emision', $filtro)))
        $this->ValidateField_punto_emision($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'secuencial' == $filtro)) || (is_array($filtro) && in_array('secuencial', $filtro)))
        $this->ValidateField_secuencial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'tipo_libretin' == $filtro)) || (is_array($filtro) && in_array('tipo_libretin', $filtro)))
        $this->ValidateField_tipo_libretin($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'ambiente' == $filtro)) || (is_array($filtro) && in_array('ambiente', $filtro)))
        $this->ValidateField_ambiente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_fecha' == $filtro)) || (is_array($filtro) && in_array('nd_fecha', $filtro)))
        $this->ValidateField_nd_fecha($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_establecimiento' == $filtro)) || (is_array($filtro) && in_array('nd_establecimiento', $filtro)))
        $this->ValidateField_nd_establecimiento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_punto_emision' == $filtro)) || (is_array($filtro) && in_array('nd_punto_emision', $filtro)))
        $this->ValidateField_nd_punto_emision($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_secuencial' == $filtro)) || (is_array($filtro) && in_array('nd_secuencial', $filtro)))
        $this->ValidateField_nd_secuencial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_tipo_libretin' == $filtro)) || (is_array($filtro) && in_array('nd_tipo_libretin', $filtro)))
        $this->ValidateField_nd_tipo_libretin($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_ambiente' == $filtro)) || (is_array($filtro) && in_array('nd_ambiente', $filtro)))
        $this->ValidateField_nd_ambiente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_tipo_comprobante' == $filtro)) || (is_array($filtro) && in_array('nd_tipo_comprobante', $filtro)))
        $this->ValidateField_nd_tipo_comprobante($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_numero' == $filtro)) || (is_array($filtro) && in_array('nd_numero', $filtro)))
        $this->ValidateField_nd_numero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_empresa' == $filtro)) || (is_array($filtro) && in_array('nd_empresa', $filtro)))
        $this->ValidateField_nd_empresa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_estado' == $filtro)) || (is_array($filtro) && in_array('nd_estado', $filtro)))
        $this->ValidateField_nd_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_estado_sri' == $filtro)) || (is_array($filtro) && in_array('nd_estado_sri', $filtro)))
        $this->ValidateField_nd_estado_sri($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_error_sri' == $filtro)) || (is_array($filtro) && in_array('nd_error_sri', $filtro)))
        $this->ValidateField_nd_error_sri($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_fecha_autorizacion' == $filtro)) || (is_array($filtro) && in_array('nd_fecha_autorizacion', $filtro)))
        $this->ValidateField_nd_fecha_autorizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_autorizacion' == $filtro)) || (is_array($filtro) && in_array('nd_autorizacion', $filtro)))
        $this->ValidateField_nd_autorizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_usuario' == $filtro)) || (is_array($filtro) && in_array('nd_usuario', $filtro)))
        $this->ValidateField_nd_usuario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_clave' == $filtro)) || (is_array($filtro) && in_array('nd_clave', $filtro)))
        $this->ValidateField_nd_clave($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_iddocmod' == $filtro)) || (is_array($filtro) && in_array('nd_iddocmod', $filtro)))
        $this->ValidateField_nd_iddocmod($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'tipo_doc_sustento' == $filtro)) || (is_array($filtro) && in_array('tipo_doc_sustento', $filtro)))
        $this->ValidateField_tipo_doc_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'serie_sustento' == $filtro)) || (is_array($filtro) && in_array('serie_sustento', $filtro)))
        $this->ValidateField_serie_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'secuencial_sustento' == $filtro)) || (is_array($filtro) && in_array('secuencial_sustento', $filtro)))
        $this->ValidateField_secuencial_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fecha_sustento' == $filtro)) || (is_array($filtro) && in_array('fecha_sustento', $filtro)))
        $this->ValidateField_fecha_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_cliente' == $filtro)) || (is_array($filtro) && in_array('nd_cliente', $filtro)))
        $this->ValidateField_nd_cliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_cod_docmod' == $filtro)) || (is_array($filtro) && in_array('nd_cod_docmod', $filtro)))
        $this->ValidateField_nd_cod_docmod($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_serie_docmod' == $filtro)) || (is_array($filtro) && in_array('nd_serie_docmod', $filtro)))
        $this->ValidateField_nd_serie_docmod($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_secuencial_docmod' == $filtro)) || (is_array($filtro) && in_array('nd_secuencial_docmod', $filtro)))
        $this->ValidateField_nd_secuencial_docmod($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_fecha_docmod' == $filtro)) || (is_array($filtro) && in_array('nd_fecha_docmod', $filtro)))
        $this->ValidateField_nd_fecha_docmod($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nombre_cliente' == $filtro)) || (is_array($filtro) && in_array('nombre_cliente', $filtro)))
        $this->ValidateField_nombre_cliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'ruc_cliente' == $filtro)) || (is_array($filtro) && in_array('ruc_cliente', $filtro)))
        $this->ValidateField_ruc_cliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'direccion_cliente' == $filtro)) || (is_array($filtro) && in_array('direccion_cliente', $filtro)))
        $this->ValidateField_direccion_cliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'email_cliente' == $filtro)) || (is_array($filtro) && in_array('email_cliente', $filtro)))
        $this->ValidateField_email_cliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'detalle' == $filtro)) || (is_array($filtro) && in_array('detalle', $filtro)))
        $this->ValidateField_detalle($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_subtotal' == $filtro)) || (is_array($filtro) && in_array('nd_subtotal', $filtro)))
        $this->ValidateField_nd_subtotal($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_subtotal_iva' == $filtro)) || (is_array($filtro) && in_array('nd_subtotal_iva', $filtro)))
        $this->ValidateField_nd_subtotal_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_subtotal_cero' == $filtro)) || (is_array($filtro) && in_array('nd_subtotal_cero', $filtro)))
        $this->ValidateField_nd_subtotal_cero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_subtotal_no_objeto' == $filtro)) || (is_array($filtro) && in_array('nd_subtotal_no_objeto', $filtro)))
        $this->ValidateField_nd_subtotal_no_objeto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_subtotal_excento' == $filtro)) || (is_array($filtro) && in_array('nd_subtotal_excento', $filtro)))
        $this->ValidateField_nd_subtotal_excento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_valor_ice' == $filtro)) || (is_array($filtro) && in_array('nd_valor_ice', $filtro)))
        $this->ValidateField_nd_valor_ice($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_valor_iva' == $filtro)) || (is_array($filtro) && in_array('nd_valor_iva', $filtro)))
        $this->ValidateField_nd_valor_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_total' == $filtro)) || (is_array($filtro) && in_array('nd_total', $filtro)))
        $this->ValidateField_nd_total($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

    function ValidateField_nd_libretin(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['nd_libretin'])) {
       return;
   }
               if (!empty($this->nd_libretin) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin']) && !in_array($this->nd_libretin, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['nd_libretin']))
                   {
                       $Campos_Erros['nd_libretin'] = array();
                   }
                   $Campos_Erros['nd_libretin'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['nd_libretin']) || !is_array($this->NM_ajax_info['errList']['nd_libretin']))
                   {
                       $this->NM_ajax_info['errList']['nd_libretin'] = array();
                   }
                   $this->NM_ajax_info['errList']['nd_libretin'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_libretin';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_libretin

    function ValidateField_establecimiento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['establecimiento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->establecimiento) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_establecimiento'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['establecimiento']))
              {
                  $Campos_Erros['establecimiento'] = array();
              }
              $Campos_Erros['establecimiento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['establecimiento']) || !is_array($this->NM_ajax_info['errList']['establecimiento']))
              {
                  $this->NM_ajax_info['errList']['establecimiento'] = array();
              }
              $this->NM_ajax_info['errList']['establecimiento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'establecimiento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_establecimiento

    function ValidateField_punto_emision(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['punto_emision'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->punto_emision) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_punto_emision'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['punto_emision']))
              {
                  $Campos_Erros['punto_emision'] = array();
              }
              $Campos_Erros['punto_emision'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['punto_emision']) || !is_array($this->NM_ajax_info['errList']['punto_emision']))
              {
                  $this->NM_ajax_info['errList']['punto_emision'] = array();
              }
              $this->NM_ajax_info['errList']['punto_emision'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'punto_emision';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_punto_emision

    function ValidateField_secuencial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['secuencial'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->secuencial) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['secuencial']))
              {
                  $Campos_Erros['secuencial'] = array();
              }
              $Campos_Erros['secuencial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['secuencial']) || !is_array($this->NM_ajax_info['errList']['secuencial']))
              {
                  $this->NM_ajax_info['errList']['secuencial'] = array();
              }
              $this->NM_ajax_info['errList']['secuencial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'secuencial';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_secuencial

    function ValidateField_tipo_libretin(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['tipo_libretin'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->tipo_libretin) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['tipo_libretin']))
              {
                  $Campos_Erros['tipo_libretin'] = array();
              }
              $Campos_Erros['tipo_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['tipo_libretin']) || !is_array($this->NM_ajax_info['errList']['tipo_libretin']))
              {
                  $this->NM_ajax_info['errList']['tipo_libretin'] = array();
              }
              $this->NM_ajax_info['errList']['tipo_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tipo_libretin';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tipo_libretin

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

    function ValidateField_nd_fecha(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->nd_fecha, $this->field_config['nd_fecha']['date_sep']) ; 
      if (isset($this->Field_no_validate['nd_fecha'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['nd_fecha']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['nd_fecha']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['nd_fecha']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['nd_fecha']['date_sep']) ; 
          if (trim($this->nd_fecha) != "")  
          { 
              if ($teste_validade->Data($this->nd_fecha, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha'] . "; " ; 
                  if (!isset($Campos_Erros['nd_fecha']))
                  {
                      $Campos_Erros['nd_fecha'] = array();
                  }
                  $Campos_Erros['nd_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_fecha']) || !is_array($this->NM_ajax_info['errList']['nd_fecha']))
                  {
                      $this->NM_ajax_info['errList']['nd_fecha'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['nd_fecha']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_fecha';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_fecha

    function ValidateField_nd_establecimiento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_establecimiento'])) {
          nm_limpa_numero($this->nd_establecimiento, $this->field_config['nd_establecimiento']['symbol_grp']) ; 
          return;
      }
      if ($this->nd_establecimiento === "" || is_null($this->nd_establecimiento))  
      { 
          $this->nd_establecimiento = 0;
          $this->sc_force_zero[] = 'nd_establecimiento';
      } 
      nm_limpa_numero($this->nd_establecimiento, $this->field_config['nd_establecimiento']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_establecimiento != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->nd_establecimiento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_establecimiento'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_establecimiento']))
                  {
                      $Campos_Erros['nd_establecimiento'] = array();
                  }
                  $Campos_Erros['nd_establecimiento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_establecimiento']) || !is_array($this->NM_ajax_info['errList']['nd_establecimiento']))
                  {
                      $this->NM_ajax_info['errList']['nd_establecimiento'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_establecimiento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_establecimiento, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_establecimiento'] . "; " ; 
                  if (!isset($Campos_Erros['nd_establecimiento']))
                  {
                      $Campos_Erros['nd_establecimiento'] = array();
                  }
                  $Campos_Erros['nd_establecimiento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_establecimiento']) || !is_array($this->NM_ajax_info['errList']['nd_establecimiento']))
                  {
                      $this->NM_ajax_info['errList']['nd_establecimiento'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_establecimiento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_establecimiento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_establecimiento

    function ValidateField_nd_punto_emision(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_punto_emision'])) {
          nm_limpa_numero($this->nd_punto_emision, $this->field_config['nd_punto_emision']['symbol_grp']) ; 
          return;
      }
      if ($this->nd_punto_emision === "" || is_null($this->nd_punto_emision))  
      { 
          $this->nd_punto_emision = 0;
          $this->sc_force_zero[] = 'nd_punto_emision';
      } 
      nm_limpa_numero($this->nd_punto_emision, $this->field_config['nd_punto_emision']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_punto_emision != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->nd_punto_emision) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_punto_emision'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_punto_emision']))
                  {
                      $Campos_Erros['nd_punto_emision'] = array();
                  }
                  $Campos_Erros['nd_punto_emision'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_punto_emision']) || !is_array($this->NM_ajax_info['errList']['nd_punto_emision']))
                  {
                      $this->NM_ajax_info['errList']['nd_punto_emision'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_punto_emision'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_punto_emision, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_punto_emision'] . "; " ; 
                  if (!isset($Campos_Erros['nd_punto_emision']))
                  {
                      $Campos_Erros['nd_punto_emision'] = array();
                  }
                  $Campos_Erros['nd_punto_emision'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_punto_emision']) || !is_array($this->NM_ajax_info['errList']['nd_punto_emision']))
                  {
                      $this->NM_ajax_info['errList']['nd_punto_emision'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_punto_emision'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_punto_emision';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_punto_emision

    function ValidateField_nd_secuencial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_secuencial'])) {
          nm_limpa_numero($this->nd_secuencial, $this->field_config['nd_secuencial']['symbol_grp']) ; 
          return;
      }
      if ($this->nd_secuencial === "" || is_null($this->nd_secuencial))  
      { 
          $this->nd_secuencial = 0;
          $this->sc_force_zero[] = 'nd_secuencial';
      } 
      nm_limpa_numero($this->nd_secuencial, $this->field_config['nd_secuencial']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_secuencial != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->nd_secuencial) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_secuencial']))
                  {
                      $Campos_Erros['nd_secuencial'] = array();
                  }
                  $Campos_Erros['nd_secuencial'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_secuencial']) || !is_array($this->NM_ajax_info['errList']['nd_secuencial']))
                  {
                      $this->NM_ajax_info['errList']['nd_secuencial'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_secuencial'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_secuencial, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . "; " ; 
                  if (!isset($Campos_Erros['nd_secuencial']))
                  {
                      $Campos_Erros['nd_secuencial'] = array();
                  }
                  $Campos_Erros['nd_secuencial'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_secuencial']) || !is_array($this->NM_ajax_info['errList']['nd_secuencial']))
                  {
                      $this->NM_ajax_info['errList']['nd_secuencial'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_secuencial'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_secuencial';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_secuencial

    function ValidateField_nd_tipo_libretin(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_tipo_libretin'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_tipo_libretin) > 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_tipo_libretin']))
              {
                  $Campos_Erros['nd_tipo_libretin'] = array();
              }
              $Campos_Erros['nd_tipo_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_tipo_libretin']) || !is_array($this->NM_ajax_info['errList']['nd_tipo_libretin']))
              {
                  $this->NM_ajax_info['errList']['nd_tipo_libretin'] = array();
              }
              $this->NM_ajax_info['errList']['nd_tipo_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_tipo_libretin';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_tipo_libretin

    function ValidateField_nd_ambiente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_ambiente'])) {
          nm_limpa_numero($this->nd_ambiente, $this->field_config['nd_ambiente']['symbol_grp']) ; 
          return;
      }
      if ($this->nd_ambiente === "" || is_null($this->nd_ambiente))  
      { 
          $this->nd_ambiente = 0;
          $this->sc_force_zero[] = 'nd_ambiente';
      } 
      nm_limpa_numero($this->nd_ambiente, $this->field_config['nd_ambiente']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_ambiente != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->nd_ambiente) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_ambiente']))
                  {
                      $Campos_Erros['nd_ambiente'] = array();
                  }
                  $Campos_Erros['nd_ambiente'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_ambiente']) || !is_array($this->NM_ajax_info['errList']['nd_ambiente']))
                  {
                      $this->NM_ajax_info['errList']['nd_ambiente'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_ambiente'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_ambiente, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "; " ; 
                  if (!isset($Campos_Erros['nd_ambiente']))
                  {
                      $Campos_Erros['nd_ambiente'] = array();
                  }
                  $Campos_Erros['nd_ambiente'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_ambiente']) || !is_array($this->NM_ajax_info['errList']['nd_ambiente']))
                  {
                      $this->NM_ajax_info['errList']['nd_ambiente'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_ambiente'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_ambiente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_ambiente

    function ValidateField_nd_tipo_comprobante(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_tipo_comprobante'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_tipo_comprobante) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_tipo_comprobante']))
              {
                  $Campos_Erros['nd_tipo_comprobante'] = array();
              }
              $Campos_Erros['nd_tipo_comprobante'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_tipo_comprobante']) || !is_array($this->NM_ajax_info['errList']['nd_tipo_comprobante']))
              {
                  $this->NM_ajax_info['errList']['nd_tipo_comprobante'] = array();
              }
              $this->NM_ajax_info['errList']['nd_tipo_comprobante'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_tipo_comprobante';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_tipo_comprobante

    function ValidateField_nd_numero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_numero'])) {
          nm_limpa_numero($this->nd_numero, $this->field_config['nd_numero']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->nd_numero, $this->field_config['nd_numero']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->nd_numero != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->nd_numero) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_numero']))
                  {
                      $Campos_Erros['nd_numero'] = array();
                  }
                  $Campos_Erros['nd_numero'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_numero']) || !is_array($this->NM_ajax_info['errList']['nd_numero']))
                  {
                      $this->NM_ajax_info['errList']['nd_numero'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_numero'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_numero, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . "; " ; 
                  if (!isset($Campos_Erros['nd_numero']))
                  {
                      $Campos_Erros['nd_numero'] = array();
                  }
                  $Campos_Erros['nd_numero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_numero']) || !is_array($this->NM_ajax_info['errList']['nd_numero']))
                  {
                      $this->NM_ajax_info['errList']['nd_numero'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_numero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['php_cmp_required']['nd_numero']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['php_cmp_required']['nd_numero'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_id'] . "" ; 
              if (!isset($Campos_Erros['nd_numero']))
              {
                  $Campos_Erros['nd_numero'] = array();
              }
              $Campos_Erros['nd_numero'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['nd_numero']) || !is_array($this->NM_ajax_info['errList']['nd_numero']))
                  {
                      $this->NM_ajax_info['errList']['nd_numero'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_numero'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_numero';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_numero

    function ValidateField_nd_empresa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_empresa'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_empresa) > 13) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_empresa'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_empresa']))
              {
                  $Campos_Erros['nd_empresa'] = array();
              }
              $Campos_Erros['nd_empresa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_empresa']) || !is_array($this->NM_ajax_info['errList']['nd_empresa']))
              {
                  $this->NM_ajax_info['errList']['nd_empresa'] = array();
              }
              $this->NM_ajax_info['errList']['nd_empresa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_empresa';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_empresa

    function ValidateField_nd_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_estado'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_estado) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_estado'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_estado']))
              {
                  $Campos_Erros['nd_estado'] = array();
              }
              $Campos_Erros['nd_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_estado']) || !is_array($this->NM_ajax_info['errList']['nd_estado']))
              {
                  $this->NM_ajax_info['errList']['nd_estado'] = array();
              }
              $this->NM_ajax_info['errList']['nd_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_estado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_estado

    function ValidateField_nd_estado_sri(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_estado_sri'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_estado_sri) > 25) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_estado_sri'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_estado_sri']))
              {
                  $Campos_Erros['nd_estado_sri'] = array();
              }
              $Campos_Erros['nd_estado_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_estado_sri']) || !is_array($this->NM_ajax_info['errList']['nd_estado_sri']))
              {
                  $this->NM_ajax_info['errList']['nd_estado_sri'] = array();
              }
              $this->NM_ajax_info['errList']['nd_estado_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_estado_sri';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_estado_sri

    function ValidateField_nd_error_sri(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_error_sri'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_error_sri) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_mensaje'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_error_sri']))
              {
                  $Campos_Erros['nd_error_sri'] = array();
              }
              $Campos_Erros['nd_error_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_error_sri']) || !is_array($this->NM_ajax_info['errList']['nd_error_sri']))
              {
                  $this->NM_ajax_info['errList']['nd_error_sri'] = array();
              }
              $this->NM_ajax_info['errList']['nd_error_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_error_sri';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_error_sri

    function ValidateField_nd_fecha_autorizacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->nd_fecha_autorizacion, $this->field_config['nd_fecha_autorizacion']['date_sep']) ; 
      if (isset($this->Field_no_validate['nd_fecha_autorizacion'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['nd_fecha_autorizacion']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['nd_fecha_autorizacion']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['nd_fecha_autorizacion']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['nd_fecha_autorizacion']['date_sep']) ; 
          if (trim($this->nd_fecha_autorizacion) != "")  
          { 
              if ($teste_validade->Data($this->nd_fecha_autorizacion, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha_autorizacion'] . "; " ; 
                  if (!isset($Campos_Erros['nd_fecha_autorizacion']))
                  {
                      $Campos_Erros['nd_fecha_autorizacion'] = array();
                  }
                  $Campos_Erros['nd_fecha_autorizacion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_fecha_autorizacion']) || !is_array($this->NM_ajax_info['errList']['nd_fecha_autorizacion']))
                  {
                      $this->NM_ajax_info['errList']['nd_fecha_autorizacion'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_fecha_autorizacion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['nd_fecha_autorizacion']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_fecha_autorizacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_fecha_autorizacion

    function ValidateField_nd_autorizacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_autorizacion'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_autorizacion) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_autorizacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_autorizacion']))
              {
                  $Campos_Erros['nd_autorizacion'] = array();
              }
              $Campos_Erros['nd_autorizacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_autorizacion']) || !is_array($this->NM_ajax_info['errList']['nd_autorizacion']))
              {
                  $this->NM_ajax_info['errList']['nd_autorizacion'] = array();
              }
              $this->NM_ajax_info['errList']['nd_autorizacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_autorizacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_autorizacion

    function ValidateField_nd_usuario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_usuario'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_usuario) > 35) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_usuario'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 35 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_usuario']))
              {
                  $Campos_Erros['nd_usuario'] = array();
              }
              $Campos_Erros['nd_usuario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 35 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_usuario']) || !is_array($this->NM_ajax_info['errList']['nd_usuario']))
              {
                  $this->NM_ajax_info['errList']['nd_usuario'] = array();
              }
              $this->NM_ajax_info['errList']['nd_usuario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 35 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_usuario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_usuario

    function ValidateField_nd_clave(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_clave'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_clave) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_clave_acceso'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_clave']))
              {
                  $Campos_Erros['nd_clave'] = array();
              }
              $Campos_Erros['nd_clave'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_clave']) || !is_array($this->NM_ajax_info['errList']['nd_clave']))
              {
                  $this->NM_ajax_info['errList']['nd_clave'] = array();
              }
              $this->NM_ajax_info['errList']['nd_clave'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_clave';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_clave

    function ValidateField_nd_iddocmod(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_iddocmod'])) {
          nm_limpa_numero($this->nd_iddocmod, $this->field_config['nd_iddocmod']['symbol_grp']) ; 
          return;
      }
      if ($this->nd_iddocmod === "" || is_null($this->nd_iddocmod))  
      { 
          $this->nd_iddocmod = 0;
          $this->sc_force_zero[] = 'nd_iddocmod';
      } 
      nm_limpa_numero($this->nd_iddocmod, $this->field_config['nd_iddocmod']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_iddocmod != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->nd_iddocmod) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_factura'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_iddocmod']))
                  {
                      $Campos_Erros['nd_iddocmod'] = array();
                  }
                  $Campos_Erros['nd_iddocmod'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_iddocmod']) || !is_array($this->NM_ajax_info['errList']['nd_iddocmod']))
                  {
                      $this->NM_ajax_info['errList']['nd_iddocmod'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_iddocmod'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_iddocmod, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_factura'] . "; " ; 
                  if (!isset($Campos_Erros['nd_iddocmod']))
                  {
                      $Campos_Erros['nd_iddocmod'] = array();
                  }
                  $Campos_Erros['nd_iddocmod'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_iddocmod']) || !is_array($this->NM_ajax_info['errList']['nd_iddocmod']))
                  {
                      $this->NM_ajax_info['errList']['nd_iddocmod'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_iddocmod'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_iddocmod';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_iddocmod

    function ValidateField_tipo_doc_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['tipo_doc_sustento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->tipo_doc_sustento) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['tipo_doc_sustento']))
              {
                  $Campos_Erros['tipo_doc_sustento'] = array();
              }
              $Campos_Erros['tipo_doc_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['tipo_doc_sustento']) || !is_array($this->NM_ajax_info['errList']['tipo_doc_sustento']))
              {
                  $this->NM_ajax_info['errList']['tipo_doc_sustento'] = array();
              }
              $this->NM_ajax_info['errList']['tipo_doc_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tipo_doc_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tipo_doc_sustento

    function ValidateField_serie_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['serie_sustento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->serie_sustento) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_serie_sri'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['serie_sustento']))
              {
                  $Campos_Erros['serie_sustento'] = array();
              }
              $Campos_Erros['serie_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['serie_sustento']) || !is_array($this->NM_ajax_info['errList']['serie_sustento']))
              {
                  $this->NM_ajax_info['errList']['serie_sustento'] = array();
              }
              $this->NM_ajax_info['errList']['serie_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'serie_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_serie_sustento

    function ValidateField_secuencial_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['secuencial_sustento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->secuencial_sustento) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['secuencial_sustento']))
              {
                  $Campos_Erros['secuencial_sustento'] = array();
              }
              $Campos_Erros['secuencial_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['secuencial_sustento']) || !is_array($this->NM_ajax_info['errList']['secuencial_sustento']))
              {
                  $this->NM_ajax_info['errList']['secuencial_sustento'] = array();
              }
              $this->NM_ajax_info['errList']['secuencial_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'secuencial_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_secuencial_sustento

    function ValidateField_fecha_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->fecha_sustento, $this->field_config['fecha_sustento']['date_sep']) ; 
      if (isset($this->Field_no_validate['fecha_sustento'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fecha_sustento']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fecha_sustento']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fecha_sustento']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fecha_sustento']['date_sep']) ; 
          if (trim($this->fecha_sustento) != "")  
          { 
              if ($teste_validade->Data($this->fecha_sustento, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha'] . "; " ; 
                  if (!isset($Campos_Erros['fecha_sustento']))
                  {
                      $Campos_Erros['fecha_sustento'] = array();
                  }
                  $Campos_Erros['fecha_sustento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecha_sustento']) || !is_array($this->NM_ajax_info['errList']['fecha_sustento']))
                  {
                      $this->NM_ajax_info['errList']['fecha_sustento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_sustento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fecha_sustento']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fecha_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fecha_sustento

    function ValidateField_nd_cliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_cliente'])) {
          nm_limpa_numero($this->nd_cliente, $this->field_config['nd_cliente']['symbol_grp']) ; 
          return;
      }
      if ($this->nd_cliente === "" || is_null($this->nd_cliente))  
      { 
          $this->nd_cliente = 0;
          $this->sc_force_zero[] = 'nd_cliente';
      } 
      nm_limpa_numero($this->nd_cliente, $this->field_config['nd_cliente']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_cliente != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->nd_cliente) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cliente'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_cliente']))
                  {
                      $Campos_Erros['nd_cliente'] = array();
                  }
                  $Campos_Erros['nd_cliente'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_cliente']) || !is_array($this->NM_ajax_info['errList']['nd_cliente']))
                  {
                      $this->NM_ajax_info['errList']['nd_cliente'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_cliente'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_cliente, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cliente'] . "; " ; 
                  if (!isset($Campos_Erros['nd_cliente']))
                  {
                      $Campos_Erros['nd_cliente'] = array();
                  }
                  $Campos_Erros['nd_cliente'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_cliente']) || !is_array($this->NM_ajax_info['errList']['nd_cliente']))
                  {
                      $this->NM_ajax_info['errList']['nd_cliente'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_cliente'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_cliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_cliente

    function ValidateField_nd_cod_docmod(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_cod_docmod'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_cod_docmod) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_cod_docmod']))
              {
                  $Campos_Erros['nd_cod_docmod'] = array();
              }
              $Campos_Erros['nd_cod_docmod'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_cod_docmod']) || !is_array($this->NM_ajax_info['errList']['nd_cod_docmod']))
              {
                  $this->NM_ajax_info['errList']['nd_cod_docmod'] = array();
              }
              $this->NM_ajax_info['errList']['nd_cod_docmod'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_cod_docmod';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_cod_docmod

    function ValidateField_nd_serie_docmod(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_serie_docmod'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_serie_docmod) > 7) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_serie_sri'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 7 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_serie_docmod']))
              {
                  $Campos_Erros['nd_serie_docmod'] = array();
              }
              $Campos_Erros['nd_serie_docmod'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 7 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_serie_docmod']) || !is_array($this->NM_ajax_info['errList']['nd_serie_docmod']))
              {
                  $this->NM_ajax_info['errList']['nd_serie_docmod'] = array();
              }
              $this->NM_ajax_info['errList']['nd_serie_docmod'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 7 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_serie_docmod';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_serie_docmod

    function ValidateField_nd_secuencial_docmod(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_secuencial_docmod'])) {
          nm_limpa_numero($this->nd_secuencial_docmod, $this->field_config['nd_secuencial_docmod']['symbol_grp']) ; 
          return;
      }
      if ($this->nd_secuencial_docmod === "" || is_null($this->nd_secuencial_docmod))  
      { 
          $this->nd_secuencial_docmod = 0;
          $this->sc_force_zero[] = 'nd_secuencial_docmod';
      } 
      nm_limpa_numero($this->nd_secuencial_docmod, $this->field_config['nd_secuencial_docmod']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_secuencial_docmod != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->nd_secuencial_docmod) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_secuencial_docmod']))
                  {
                      $Campos_Erros['nd_secuencial_docmod'] = array();
                  }
                  $Campos_Erros['nd_secuencial_docmod'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_secuencial_docmod']) || !is_array($this->NM_ajax_info['errList']['nd_secuencial_docmod']))
                  {
                      $this->NM_ajax_info['errList']['nd_secuencial_docmod'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_secuencial_docmod'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_secuencial_docmod, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . "; " ; 
                  if (!isset($Campos_Erros['nd_secuencial_docmod']))
                  {
                      $Campos_Erros['nd_secuencial_docmod'] = array();
                  }
                  $Campos_Erros['nd_secuencial_docmod'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_secuencial_docmod']) || !is_array($this->NM_ajax_info['errList']['nd_secuencial_docmod']))
                  {
                      $this->NM_ajax_info['errList']['nd_secuencial_docmod'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_secuencial_docmod'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_secuencial_docmod';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_secuencial_docmod

    function ValidateField_nd_fecha_docmod(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->nd_fecha_docmod, $this->field_config['nd_fecha_docmod']['date_sep']) ; 
      if (isset($this->Field_no_validate['nd_fecha_docmod'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['nd_fecha_docmod']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['nd_fecha_docmod']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['nd_fecha_docmod']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['nd_fecha_docmod']['date_sep']) ; 
          if (trim($this->nd_fecha_docmod) != "")  
          { 
              if ($teste_validade->Data($this->nd_fecha_docmod, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha'] . "; " ; 
                  if (!isset($Campos_Erros['nd_fecha_docmod']))
                  {
                      $Campos_Erros['nd_fecha_docmod'] = array();
                  }
                  $Campos_Erros['nd_fecha_docmod'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_fecha_docmod']) || !is_array($this->NM_ajax_info['errList']['nd_fecha_docmod']))
                  {
                      $this->NM_ajax_info['errList']['nd_fecha_docmod'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_fecha_docmod'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['nd_fecha_docmod']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_fecha_docmod';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_fecha_docmod

    function ValidateField_nombre_cliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nombre_cliente'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nombre_cliente) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cliente'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nombre_cliente']))
              {
                  $Campos_Erros['nombre_cliente'] = array();
              }
              $Campos_Erros['nombre_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nombre_cliente']) || !is_array($this->NM_ajax_info['errList']['nombre_cliente']))
              {
                  $this->NM_ajax_info['errList']['nombre_cliente'] = array();
              }
              $this->NM_ajax_info['errList']['nombre_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nombre_cliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nombre_cliente

    function ValidateField_ruc_cliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['ruc_cliente'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->ruc_cliente) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ruc_cliente']))
              {
                  $Campos_Erros['ruc_cliente'] = array();
              }
              $Campos_Erros['ruc_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ruc_cliente']) || !is_array($this->NM_ajax_info['errList']['ruc_cliente']))
              {
                  $this->NM_ajax_info['errList']['ruc_cliente'] = array();
              }
              $this->NM_ajax_info['errList']['ruc_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'ruc_cliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_ruc_cliente

    function ValidateField_direccion_cliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['direccion_cliente'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->direccion_cliente) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_direccion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['direccion_cliente']))
              {
                  $Campos_Erros['direccion_cliente'] = array();
              }
              $Campos_Erros['direccion_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['direccion_cliente']) || !is_array($this->NM_ajax_info['errList']['direccion_cliente']))
              {
                  $this->NM_ajax_info['errList']['direccion_cliente'] = array();
              }
              $this->NM_ajax_info['errList']['direccion_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'direccion_cliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_direccion_cliente

    function ValidateField_email_cliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['email_cliente'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->email_cliente) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_email'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['email_cliente']))
              {
                  $Campos_Erros['email_cliente'] = array();
              }
              $Campos_Erros['email_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['email_cliente']) || !is_array($this->NM_ajax_info['errList']['email_cliente']))
              {
                  $this->NM_ajax_info['errList']['email_cliente'] = array();
              }
              $this->NM_ajax_info['errList']['email_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'email_cliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_email_cliente

    function ValidateField_detalle(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['detalle'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->detalle) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'detalle';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_detalle

    function ValidateField_nd_subtotal(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_subtotal'])) {
          if (!empty($this->field_config['nd_subtotal']['symbol_dec'])) {
              nm_limpa_valor($this->nd_subtotal, $this->field_config['nd_subtotal']['symbol_dec'], $this->field_config['nd_subtotal']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->nd_subtotal === "" || is_null($this->nd_subtotal))  
      { 
          $this->nd_subtotal = 0;
          $this->sc_force_zero[] = 'nd_subtotal';
      } 
      if (!empty($this->field_config['nd_subtotal']['symbol_dec']))
      {
          nm_limpa_valor($this->nd_subtotal, $this->field_config['nd_subtotal']['symbol_dec'], $this->field_config['nd_subtotal']['symbol_grp']) ; 
          if ('.' == substr($this->nd_subtotal, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->nd_subtotal, 1)))
              {
                  $this->nd_subtotal = '';
              }
              else
              {
                  $this->nd_subtotal = '0' . $this->nd_subtotal;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_subtotal != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->nd_subtotal) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_subtotal']))
                  {
                      $Campos_Erros['nd_subtotal'] = array();
                  }
                  $Campos_Erros['nd_subtotal'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_subtotal, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal'] . "; " ; 
                  if (!isset($Campos_Erros['nd_subtotal']))
                  {
                      $Campos_Erros['nd_subtotal'] = array();
                  }
                  $Campos_Erros['nd_subtotal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_subtotal';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_subtotal

    function ValidateField_nd_subtotal_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_subtotal_iva'])) {
          if (!empty($this->field_config['nd_subtotal_iva']['symbol_dec'])) {
              nm_limpa_valor($this->nd_subtotal_iva, $this->field_config['nd_subtotal_iva']['symbol_dec'], $this->field_config['nd_subtotal_iva']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->nd_subtotal_iva === "" || is_null($this->nd_subtotal_iva))  
      { 
          $this->nd_subtotal_iva = 0;
          $this->sc_force_zero[] = 'nd_subtotal_iva';
      } 
      if (!empty($this->field_config['nd_subtotal_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->nd_subtotal_iva, $this->field_config['nd_subtotal_iva']['symbol_dec'], $this->field_config['nd_subtotal_iva']['symbol_grp']) ; 
          if ('.' == substr($this->nd_subtotal_iva, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->nd_subtotal_iva, 1)))
              {
                  $this->nd_subtotal_iva = '';
              }
              else
              {
                  $this->nd_subtotal_iva = '0' . $this->nd_subtotal_iva;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_subtotal_iva != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->nd_subtotal_iva) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_subtotal_iva']))
                  {
                      $Campos_Erros['nd_subtotal_iva'] = array();
                  }
                  $Campos_Erros['nd_subtotal_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal_iva']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal_iva']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_subtotal_iva, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "; " ; 
                  if (!isset($Campos_Erros['nd_subtotal_iva']))
                  {
                      $Campos_Erros['nd_subtotal_iva'] = array();
                  }
                  $Campos_Erros['nd_subtotal_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal_iva']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal_iva']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_subtotal_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_subtotal_iva

    function ValidateField_nd_subtotal_cero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_subtotal_cero'])) {
          if (!empty($this->field_config['nd_subtotal_cero']['symbol_dec'])) {
              nm_limpa_valor($this->nd_subtotal_cero, $this->field_config['nd_subtotal_cero']['symbol_dec'], $this->field_config['nd_subtotal_cero']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->nd_subtotal_cero === "" || is_null($this->nd_subtotal_cero))  
      { 
          $this->nd_subtotal_cero = 0;
          $this->sc_force_zero[] = 'nd_subtotal_cero';
      } 
      if (!empty($this->field_config['nd_subtotal_cero']['symbol_dec']))
      {
          nm_limpa_valor($this->nd_subtotal_cero, $this->field_config['nd_subtotal_cero']['symbol_dec'], $this->field_config['nd_subtotal_cero']['symbol_grp']) ; 
          if ('.' == substr($this->nd_subtotal_cero, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->nd_subtotal_cero, 1)))
              {
                  $this->nd_subtotal_cero = '';
              }
              else
              {
                  $this->nd_subtotal_cero = '0' . $this->nd_subtotal_cero;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_subtotal_cero != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->nd_subtotal_cero) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_subtotal_cero']))
                  {
                      $Campos_Erros['nd_subtotal_cero'] = array();
                  }
                  $Campos_Erros['nd_subtotal_cero'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal_cero']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal_cero']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal_cero'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal_cero'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_subtotal_cero, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "; " ; 
                  if (!isset($Campos_Erros['nd_subtotal_cero']))
                  {
                      $Campos_Erros['nd_subtotal_cero'] = array();
                  }
                  $Campos_Erros['nd_subtotal_cero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal_cero']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal_cero']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal_cero'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal_cero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_subtotal_cero';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_subtotal_cero

    function ValidateField_nd_subtotal_no_objeto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_subtotal_no_objeto'])) {
          if (!empty($this->field_config['nd_subtotal_no_objeto']['symbol_dec'])) {
              nm_limpa_valor($this->nd_subtotal_no_objeto, $this->field_config['nd_subtotal_no_objeto']['symbol_dec'], $this->field_config['nd_subtotal_no_objeto']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->nd_subtotal_no_objeto === "" || is_null($this->nd_subtotal_no_objeto))  
      { 
          $this->nd_subtotal_no_objeto = 0;
          $this->sc_force_zero[] = 'nd_subtotal_no_objeto';
      } 
      if (!empty($this->field_config['nd_subtotal_no_objeto']['symbol_dec']))
      {
          nm_limpa_valor($this->nd_subtotal_no_objeto, $this->field_config['nd_subtotal_no_objeto']['symbol_dec'], $this->field_config['nd_subtotal_no_objeto']['symbol_grp']) ; 
          if ('.' == substr($this->nd_subtotal_no_objeto, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->nd_subtotal_no_objeto, 1)))
              {
                  $this->nd_subtotal_no_objeto = '';
              }
              else
              {
                  $this->nd_subtotal_no_objeto = '0' . $this->nd_subtotal_no_objeto;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_subtotal_no_objeto != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->nd_subtotal_no_objeto) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_subtotal_no_objeto']))
                  {
                      $Campos_Erros['nd_subtotal_no_objeto'] = array();
                  }
                  $Campos_Erros['nd_subtotal_no_objeto'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal_no_objeto']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal_no_objeto']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal_no_objeto'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal_no_objeto'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_subtotal_no_objeto, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "; " ; 
                  if (!isset($Campos_Erros['nd_subtotal_no_objeto']))
                  {
                      $Campos_Erros['nd_subtotal_no_objeto'] = array();
                  }
                  $Campos_Erros['nd_subtotal_no_objeto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal_no_objeto']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal_no_objeto']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal_no_objeto'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal_no_objeto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_subtotal_no_objeto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_subtotal_no_objeto

    function ValidateField_nd_subtotal_excento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_subtotal_excento'])) {
          if (!empty($this->field_config['nd_subtotal_excento']['symbol_dec'])) {
              nm_limpa_valor($this->nd_subtotal_excento, $this->field_config['nd_subtotal_excento']['symbol_dec'], $this->field_config['nd_subtotal_excento']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->nd_subtotal_excento === "" || is_null($this->nd_subtotal_excento))  
      { 
          $this->nd_subtotal_excento = 0;
          $this->sc_force_zero[] = 'nd_subtotal_excento';
      } 
      if (!empty($this->field_config['nd_subtotal_excento']['symbol_dec']))
      {
          nm_limpa_valor($this->nd_subtotal_excento, $this->field_config['nd_subtotal_excento']['symbol_dec'], $this->field_config['nd_subtotal_excento']['symbol_grp']) ; 
          if ('.' == substr($this->nd_subtotal_excento, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->nd_subtotal_excento, 1)))
              {
                  $this->nd_subtotal_excento = '';
              }
              else
              {
                  $this->nd_subtotal_excento = '0' . $this->nd_subtotal_excento;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_subtotal_excento != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->nd_subtotal_excento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_subtotal_excento']))
                  {
                      $Campos_Erros['nd_subtotal_excento'] = array();
                  }
                  $Campos_Erros['nd_subtotal_excento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal_excento']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal_excento']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal_excento'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal_excento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_subtotal_excento, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "; " ; 
                  if (!isset($Campos_Erros['nd_subtotal_excento']))
                  {
                      $Campos_Erros['nd_subtotal_excento'] = array();
                  }
                  $Campos_Erros['nd_subtotal_excento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_subtotal_excento']) || !is_array($this->NM_ajax_info['errList']['nd_subtotal_excento']))
                  {
                      $this->NM_ajax_info['errList']['nd_subtotal_excento'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_subtotal_excento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_subtotal_excento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_subtotal_excento

    function ValidateField_nd_valor_ice(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_valor_ice'])) {
          if (!empty($this->field_config['nd_valor_ice']['symbol_dec'])) {
              nm_limpa_valor($this->nd_valor_ice, $this->field_config['nd_valor_ice']['symbol_dec'], $this->field_config['nd_valor_ice']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->nd_valor_ice === "" || is_null($this->nd_valor_ice))  
      { 
          $this->nd_valor_ice = 0;
          $this->sc_force_zero[] = 'nd_valor_ice';
      } 
      if (!empty($this->field_config['nd_valor_ice']['symbol_dec']))
      {
          nm_limpa_valor($this->nd_valor_ice, $this->field_config['nd_valor_ice']['symbol_dec'], $this->field_config['nd_valor_ice']['symbol_grp']) ; 
          if ('.' == substr($this->nd_valor_ice, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->nd_valor_ice, 1)))
              {
                  $this->nd_valor_ice = '';
              }
              else
              {
                  $this->nd_valor_ice = '0' . $this->nd_valor_ice;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_valor_ice != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->nd_valor_ice) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ice'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_valor_ice']))
                  {
                      $Campos_Erros['nd_valor_ice'] = array();
                  }
                  $Campos_Erros['nd_valor_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_valor_ice']) || !is_array($this->NM_ajax_info['errList']['nd_valor_ice']))
                  {
                      $this->NM_ajax_info['errList']['nd_valor_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_valor_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_valor_ice, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ice'] . "; " ; 
                  if (!isset($Campos_Erros['nd_valor_ice']))
                  {
                      $Campos_Erros['nd_valor_ice'] = array();
                  }
                  $Campos_Erros['nd_valor_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_valor_ice']) || !is_array($this->NM_ajax_info['errList']['nd_valor_ice']))
                  {
                      $this->NM_ajax_info['errList']['nd_valor_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_valor_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_valor_ice';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_valor_ice

    function ValidateField_nd_valor_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_valor_iva'])) {
          if (!empty($this->field_config['nd_valor_iva']['symbol_dec'])) {
              nm_limpa_valor($this->nd_valor_iva, $this->field_config['nd_valor_iva']['symbol_dec'], $this->field_config['nd_valor_iva']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->nd_valor_iva === "" || is_null($this->nd_valor_iva))  
      { 
          $this->nd_valor_iva = 0;
          $this->sc_force_zero[] = 'nd_valor_iva';
      } 
      if (!empty($this->field_config['nd_valor_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->nd_valor_iva, $this->field_config['nd_valor_iva']['symbol_dec'], $this->field_config['nd_valor_iva']['symbol_grp']) ; 
          if ('.' == substr($this->nd_valor_iva, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->nd_valor_iva, 1)))
              {
                  $this->nd_valor_iva = '';
              }
              else
              {
                  $this->nd_valor_iva = '0' . $this->nd_valor_iva;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_valor_iva != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->nd_valor_iva) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_valor_iva']))
                  {
                      $Campos_Erros['nd_valor_iva'] = array();
                  }
                  $Campos_Erros['nd_valor_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_valor_iva']) || !is_array($this->NM_ajax_info['errList']['nd_valor_iva']))
                  {
                      $this->NM_ajax_info['errList']['nd_valor_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_valor_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_valor_iva, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_iva'] . "; " ; 
                  if (!isset($Campos_Erros['nd_valor_iva']))
                  {
                      $Campos_Erros['nd_valor_iva'] = array();
                  }
                  $Campos_Erros['nd_valor_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_valor_iva']) || !is_array($this->NM_ajax_info['errList']['nd_valor_iva']))
                  {
                      $this->NM_ajax_info['errList']['nd_valor_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_valor_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_valor_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_valor_iva

    function ValidateField_nd_total(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_total'])) {
          if (!empty($this->field_config['nd_total']['symbol_dec'])) {
              nm_limpa_valor($this->nd_total, $this->field_config['nd_total']['symbol_dec'], $this->field_config['nd_total']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->nd_total === "" || is_null($this->nd_total))  
      { 
          $this->nd_total = 0;
          $this->sc_force_zero[] = 'nd_total';
      } 
      if (!empty($this->field_config['nd_total']['symbol_dec']))
      {
          nm_limpa_valor($this->nd_total, $this->field_config['nd_total']['symbol_dec'], $this->field_config['nd_total']['symbol_grp']) ; 
          if ('.' == substr($this->nd_total, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->nd_total, 1)))
              {
                  $this->nd_total = '';
              }
              else
              {
                  $this->nd_total = '0' . $this->nd_total;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_total != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->nd_total) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_total']))
                  {
                      $Campos_Erros['nd_total'] = array();
                  }
                  $Campos_Erros['nd_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_total']) || !is_array($this->NM_ajax_info['errList']['nd_total']))
                  {
                      $this->NM_ajax_info['errList']['nd_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_total, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "; " ; 
                  if (!isset($Campos_Erros['nd_total']))
                  {
                      $Campos_Erros['nd_total'] = array();
                  }
                  $Campos_Erros['nd_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_total']) || !is_array($this->NM_ajax_info['errList']['nd_total']))
                  {
                      $this->NM_ajax_info['errList']['nd_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_total';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_total

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
    $this->nmgp_dados_form['nd_libretin'] = $this->nd_libretin;
    $this->nmgp_dados_form['establecimiento'] = $this->establecimiento;
    $this->nmgp_dados_form['punto_emision'] = $this->punto_emision;
    $this->nmgp_dados_form['secuencial'] = $this->secuencial;
    $this->nmgp_dados_form['tipo_libretin'] = $this->tipo_libretin;
    $this->nmgp_dados_form['ambiente'] = $this->ambiente;
    $this->nmgp_dados_form['nd_fecha'] = (strlen(trim($this->nd_fecha)) > 19) ? str_replace(".", ":", $this->nd_fecha) : trim($this->nd_fecha);
    $this->nmgp_dados_form['nd_establecimiento'] = $this->nd_establecimiento;
    $this->nmgp_dados_form['nd_punto_emision'] = $this->nd_punto_emision;
    $this->nmgp_dados_form['nd_secuencial'] = $this->nd_secuencial;
    $this->nmgp_dados_form['nd_tipo_libretin'] = $this->nd_tipo_libretin;
    $this->nmgp_dados_form['nd_ambiente'] = $this->nd_ambiente;
    $this->nmgp_dados_form['nd_tipo_comprobante'] = $this->nd_tipo_comprobante;
    $this->nmgp_dados_form['nd_numero'] = $this->nd_numero;
    $this->nmgp_dados_form['nd_empresa'] = $this->nd_empresa;
    $this->nmgp_dados_form['nd_estado'] = $this->nd_estado;
    $this->nmgp_dados_form['nd_estado_sri'] = $this->nd_estado_sri;
    $this->nmgp_dados_form['nd_error_sri'] = $this->nd_error_sri;
    $this->nmgp_dados_form['nd_fecha_autorizacion'] = (strlen(trim($this->nd_fecha_autorizacion)) > 19) ? str_replace(".", ":", $this->nd_fecha_autorizacion) : trim($this->nd_fecha_autorizacion);
    $this->nmgp_dados_form['nd_autorizacion'] = $this->nd_autorizacion;
    $this->nmgp_dados_form['nd_usuario'] = $this->nd_usuario;
    $this->nmgp_dados_form['nd_clave'] = $this->nd_clave;
    $this->nmgp_dados_form['nd_iddocmod'] = $this->nd_iddocmod;
    $this->nmgp_dados_form['tipo_doc_sustento'] = $this->tipo_doc_sustento;
    $this->nmgp_dados_form['serie_sustento'] = $this->serie_sustento;
    $this->nmgp_dados_form['secuencial_sustento'] = $this->secuencial_sustento;
    $this->nmgp_dados_form['fecha_sustento'] = (strlen(trim($this->fecha_sustento)) > 19) ? str_replace(".", ":", $this->fecha_sustento) : trim($this->fecha_sustento);
    $this->nmgp_dados_form['nd_cliente'] = $this->nd_cliente;
    $this->nmgp_dados_form['nd_cod_docmod'] = $this->nd_cod_docmod;
    $this->nmgp_dados_form['nd_serie_docmod'] = $this->nd_serie_docmod;
    $this->nmgp_dados_form['nd_secuencial_docmod'] = $this->nd_secuencial_docmod;
    $this->nmgp_dados_form['nd_fecha_docmod'] = (strlen(trim($this->nd_fecha_docmod)) > 19) ? str_replace(".", ":", $this->nd_fecha_docmod) : trim($this->nd_fecha_docmod);
    $this->nmgp_dados_form['nombre_cliente'] = $this->nombre_cliente;
    $this->nmgp_dados_form['ruc_cliente'] = $this->ruc_cliente;
    $this->nmgp_dados_form['direccion_cliente'] = $this->direccion_cliente;
    $this->nmgp_dados_form['email_cliente'] = $this->email_cliente;
    $this->nmgp_dados_form['detalle'] = $this->detalle;
    $this->nmgp_dados_form['nd_subtotal'] = $this->nd_subtotal;
    $this->nmgp_dados_form['nd_subtotal_iva'] = $this->nd_subtotal_iva;
    $this->nmgp_dados_form['nd_subtotal_cero'] = $this->nd_subtotal_cero;
    $this->nmgp_dados_form['nd_subtotal_no_objeto'] = $this->nd_subtotal_no_objeto;
    $this->nmgp_dados_form['nd_subtotal_excento'] = $this->nd_subtotal_excento;
    $this->nmgp_dados_form['nd_valor_ice'] = $this->nd_valor_ice;
    $this->nmgp_dados_form['nd_valor_iva'] = $this->nd_valor_iva;
    $this->nmgp_dados_form['nd_total'] = $this->nd_total;
    $this->nmgp_dados_form['forma_pago'] = $this->forma_pago;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['nd_fecha'] = $this->nd_fecha;
      nm_limpa_data($this->nd_fecha, $this->field_config['nd_fecha']['date_sep']) ; 
      $this->Before_unformat['nd_establecimiento'] = $this->nd_establecimiento;
      nm_limpa_numero($this->nd_establecimiento, $this->field_config['nd_establecimiento']['symbol_grp']) ; 
      $this->Before_unformat['nd_punto_emision'] = $this->nd_punto_emision;
      nm_limpa_numero($this->nd_punto_emision, $this->field_config['nd_punto_emision']['symbol_grp']) ; 
      $this->Before_unformat['nd_secuencial'] = $this->nd_secuencial;
      nm_limpa_numero($this->nd_secuencial, $this->field_config['nd_secuencial']['symbol_grp']) ; 
      $this->Before_unformat['nd_ambiente'] = $this->nd_ambiente;
      nm_limpa_numero($this->nd_ambiente, $this->field_config['nd_ambiente']['symbol_grp']) ; 
      $this->Before_unformat['nd_numero'] = $this->nd_numero;
      nm_limpa_numero($this->nd_numero, $this->field_config['nd_numero']['symbol_grp']) ; 
      $this->Before_unformat['nd_fecha_autorizacion'] = $this->nd_fecha_autorizacion;
      nm_limpa_data($this->nd_fecha_autorizacion, $this->field_config['nd_fecha_autorizacion']['date_sep']) ; 
      $this->Before_unformat['nd_iddocmod'] = $this->nd_iddocmod;
      nm_limpa_numero($this->nd_iddocmod, $this->field_config['nd_iddocmod']['symbol_grp']) ; 
      $this->Before_unformat['fecha_sustento'] = $this->fecha_sustento;
      nm_limpa_data($this->fecha_sustento, $this->field_config['fecha_sustento']['date_sep']) ; 
      $this->Before_unformat['nd_cliente'] = $this->nd_cliente;
      nm_limpa_numero($this->nd_cliente, $this->field_config['nd_cliente']['symbol_grp']) ; 
      $this->Before_unformat['nd_secuencial_docmod'] = $this->nd_secuencial_docmod;
      nm_limpa_numero($this->nd_secuencial_docmod, $this->field_config['nd_secuencial_docmod']['symbol_grp']) ; 
      $this->Before_unformat['nd_fecha_docmod'] = $this->nd_fecha_docmod;
      nm_limpa_data($this->nd_fecha_docmod, $this->field_config['nd_fecha_docmod']['date_sep']) ; 
      $this->Before_unformat['nd_subtotal'] = $this->nd_subtotal;
      if (!empty($this->field_config['nd_subtotal']['symbol_dec']))
      {
         nm_limpa_valor($this->nd_subtotal, $this->field_config['nd_subtotal']['symbol_dec'], $this->field_config['nd_subtotal']['symbol_grp']);
      }
      $this->Before_unformat['nd_subtotal_iva'] = $this->nd_subtotal_iva;
      if (!empty($this->field_config['nd_subtotal_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->nd_subtotal_iva, $this->field_config['nd_subtotal_iva']['symbol_dec'], $this->field_config['nd_subtotal_iva']['symbol_grp']);
      }
      $this->Before_unformat['nd_subtotal_cero'] = $this->nd_subtotal_cero;
      if (!empty($this->field_config['nd_subtotal_cero']['symbol_dec']))
      {
         nm_limpa_valor($this->nd_subtotal_cero, $this->field_config['nd_subtotal_cero']['symbol_dec'], $this->field_config['nd_subtotal_cero']['symbol_grp']);
      }
      $this->Before_unformat['nd_subtotal_no_objeto'] = $this->nd_subtotal_no_objeto;
      if (!empty($this->field_config['nd_subtotal_no_objeto']['symbol_dec']))
      {
         nm_limpa_valor($this->nd_subtotal_no_objeto, $this->field_config['nd_subtotal_no_objeto']['symbol_dec'], $this->field_config['nd_subtotal_no_objeto']['symbol_grp']);
      }
      $this->Before_unformat['nd_subtotal_excento'] = $this->nd_subtotal_excento;
      if (!empty($this->field_config['nd_subtotal_excento']['symbol_dec']))
      {
         nm_limpa_valor($this->nd_subtotal_excento, $this->field_config['nd_subtotal_excento']['symbol_dec'], $this->field_config['nd_subtotal_excento']['symbol_grp']);
      }
      $this->Before_unformat['nd_valor_ice'] = $this->nd_valor_ice;
      if (!empty($this->field_config['nd_valor_ice']['symbol_dec']))
      {
         nm_limpa_valor($this->nd_valor_ice, $this->field_config['nd_valor_ice']['symbol_dec'], $this->field_config['nd_valor_ice']['symbol_grp']);
      }
      $this->Before_unformat['nd_valor_iva'] = $this->nd_valor_iva;
      if (!empty($this->field_config['nd_valor_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->nd_valor_iva, $this->field_config['nd_valor_iva']['symbol_dec'], $this->field_config['nd_valor_iva']['symbol_grp']);
      }
      $this->Before_unformat['nd_total'] = $this->nd_total;
      if (!empty($this->field_config['nd_total']['symbol_dec']))
      {
         nm_limpa_valor($this->nd_total, $this->field_config['nd_total']['symbol_dec'], $this->field_config['nd_total']['symbol_grp']);
      }
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
      if ($Nome_Campo == "nd_establecimiento")
      {
          nm_limpa_numero($this->nd_establecimiento, $this->field_config['nd_establecimiento']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_punto_emision")
      {
          nm_limpa_numero($this->nd_punto_emision, $this->field_config['nd_punto_emision']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_secuencial")
      {
          nm_limpa_numero($this->nd_secuencial, $this->field_config['nd_secuencial']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_ambiente")
      {
          nm_limpa_numero($this->nd_ambiente, $this->field_config['nd_ambiente']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_numero")
      {
          nm_limpa_numero($this->nd_numero, $this->field_config['nd_numero']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_iddocmod")
      {
          nm_limpa_numero($this->nd_iddocmod, $this->field_config['nd_iddocmod']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_cliente")
      {
          nm_limpa_numero($this->nd_cliente, $this->field_config['nd_cliente']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_secuencial_docmod")
      {
          nm_limpa_numero($this->nd_secuencial_docmod, $this->field_config['nd_secuencial_docmod']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_subtotal")
      {
          if (!empty($this->field_config['nd_subtotal']['symbol_dec']))
          {
             nm_limpa_valor($this->nd_subtotal, $this->field_config['nd_subtotal']['symbol_dec'], $this->field_config['nd_subtotal']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "nd_subtotal_iva")
      {
          if (!empty($this->field_config['nd_subtotal_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->nd_subtotal_iva, $this->field_config['nd_subtotal_iva']['symbol_dec'], $this->field_config['nd_subtotal_iva']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "nd_subtotal_cero")
      {
          if (!empty($this->field_config['nd_subtotal_cero']['symbol_dec']))
          {
             nm_limpa_valor($this->nd_subtotal_cero, $this->field_config['nd_subtotal_cero']['symbol_dec'], $this->field_config['nd_subtotal_cero']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "nd_subtotal_no_objeto")
      {
          if (!empty($this->field_config['nd_subtotal_no_objeto']['symbol_dec']))
          {
             nm_limpa_valor($this->nd_subtotal_no_objeto, $this->field_config['nd_subtotal_no_objeto']['symbol_dec'], $this->field_config['nd_subtotal_no_objeto']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "nd_subtotal_excento")
      {
          if (!empty($this->field_config['nd_subtotal_excento']['symbol_dec']))
          {
             nm_limpa_valor($this->nd_subtotal_excento, $this->field_config['nd_subtotal_excento']['symbol_dec'], $this->field_config['nd_subtotal_excento']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "nd_valor_ice")
      {
          if (!empty($this->field_config['nd_valor_ice']['symbol_dec']))
          {
             nm_limpa_valor($this->nd_valor_ice, $this->field_config['nd_valor_ice']['symbol_dec'], $this->field_config['nd_valor_ice']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "nd_valor_iva")
      {
          if (!empty($this->field_config['nd_valor_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->nd_valor_iva, $this->field_config['nd_valor_iva']['symbol_dec'], $this->field_config['nd_valor_iva']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "nd_total")
      {
          if (!empty($this->field_config['nd_total']['symbol_dec']))
          {
             nm_limpa_valor($this->nd_total, $this->field_config['nd_total']['symbol_dec'], $this->field_config['nd_total']['symbol_grp']);
          }
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
      if ((!empty($this->nd_fecha) && 'null' != $this->nd_fecha) || (!empty($format_fields) && isset($format_fields['nd_fecha'])))
      {
          nm_volta_data($this->nd_fecha, $this->field_config['nd_fecha']['date_format']) ; 
          nmgp_Form_Datas($this->nd_fecha, $this->field_config['nd_fecha']['date_format'], $this->field_config['nd_fecha']['date_sep']) ;  
      }
      elseif ('null' == $this->nd_fecha || '' == $this->nd_fecha)
      {
          $this->nd_fecha = '';
      }
      if ('' !== $this->nd_establecimiento || (!empty($format_fields) && isset($format_fields['nd_establecimiento'])))
      {
          nmgp_Form_Num_Val($this->nd_establecimiento, $this->field_config['nd_establecimiento']['symbol_grp'], $this->field_config['nd_establecimiento']['symbol_dec'], "0", "S", $this->field_config['nd_establecimiento']['format_neg'], "", "", "-", $this->field_config['nd_establecimiento']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_punto_emision || (!empty($format_fields) && isset($format_fields['nd_punto_emision'])))
      {
          nmgp_Form_Num_Val($this->nd_punto_emision, $this->field_config['nd_punto_emision']['symbol_grp'], $this->field_config['nd_punto_emision']['symbol_dec'], "0", "S", $this->field_config['nd_punto_emision']['format_neg'], "", "", "-", $this->field_config['nd_punto_emision']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_secuencial || (!empty($format_fields) && isset($format_fields['nd_secuencial'])))
      {
          nmgp_Form_Num_Val($this->nd_secuencial, $this->field_config['nd_secuencial']['symbol_grp'], $this->field_config['nd_secuencial']['symbol_dec'], "0", "S", $this->field_config['nd_secuencial']['format_neg'], "", "", "-", $this->field_config['nd_secuencial']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_ambiente || (!empty($format_fields) && isset($format_fields['nd_ambiente'])))
      {
          nmgp_Form_Num_Val($this->nd_ambiente, $this->field_config['nd_ambiente']['symbol_grp'], $this->field_config['nd_ambiente']['symbol_dec'], "0", "S", $this->field_config['nd_ambiente']['format_neg'], "", "", "-", $this->field_config['nd_ambiente']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_numero || (!empty($format_fields) && isset($format_fields['nd_numero'])))
      {
          nmgp_Form_Num_Val($this->nd_numero, $this->field_config['nd_numero']['symbol_grp'], $this->field_config['nd_numero']['symbol_dec'], "0", "S", $this->field_config['nd_numero']['format_neg'], "", "", "-", $this->field_config['nd_numero']['symbol_fmt']) ; 
      }
      if ((!empty($this->nd_fecha_autorizacion) && 'null' != $this->nd_fecha_autorizacion) || (!empty($format_fields) && isset($format_fields['nd_fecha_autorizacion'])))
      {
          nm_volta_data($this->nd_fecha_autorizacion, $this->field_config['nd_fecha_autorizacion']['date_format']) ; 
          nmgp_Form_Datas($this->nd_fecha_autorizacion, $this->field_config['nd_fecha_autorizacion']['date_format'], $this->field_config['nd_fecha_autorizacion']['date_sep']) ;  
      }
      elseif ('null' == $this->nd_fecha_autorizacion || '' == $this->nd_fecha_autorizacion)
      {
          $this->nd_fecha_autorizacion = '';
      }
      if ('' !== $this->nd_iddocmod || (!empty($format_fields) && isset($format_fields['nd_iddocmod'])))
      {
          nmgp_Form_Num_Val($this->nd_iddocmod, $this->field_config['nd_iddocmod']['symbol_grp'], $this->field_config['nd_iddocmod']['symbol_dec'], "0", "S", $this->field_config['nd_iddocmod']['format_neg'], "", "", "-", $this->field_config['nd_iddocmod']['symbol_fmt']) ; 
      }
      if ((!empty($this->fecha_sustento) && 'null' != $this->fecha_sustento) || (!empty($format_fields) && isset($format_fields['fecha_sustento'])))
      {
          nm_volta_data($this->fecha_sustento, $this->field_config['fecha_sustento']['date_format']) ; 
          nmgp_Form_Datas($this->fecha_sustento, $this->field_config['fecha_sustento']['date_format'], $this->field_config['fecha_sustento']['date_sep']) ;  
      }
      elseif ('null' == $this->fecha_sustento || '' == $this->fecha_sustento)
      {
          $this->fecha_sustento = '';
      }
      if ('' !== $this->nd_cliente || (!empty($format_fields) && isset($format_fields['nd_cliente'])))
      {
          nmgp_Form_Num_Val($this->nd_cliente, $this->field_config['nd_cliente']['symbol_grp'], $this->field_config['nd_cliente']['symbol_dec'], "0", "S", $this->field_config['nd_cliente']['format_neg'], "", "", "-", $this->field_config['nd_cliente']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_secuencial_docmod || (!empty($format_fields) && isset($format_fields['nd_secuencial_docmod'])))
      {
          nmgp_Form_Num_Val($this->nd_secuencial_docmod, $this->field_config['nd_secuencial_docmod']['symbol_grp'], $this->field_config['nd_secuencial_docmod']['symbol_dec'], "0", "S", $this->field_config['nd_secuencial_docmod']['format_neg'], "", "", "-", $this->field_config['nd_secuencial_docmod']['symbol_fmt']) ; 
      }
      if ((!empty($this->nd_fecha_docmod) && 'null' != $this->nd_fecha_docmod) || (!empty($format_fields) && isset($format_fields['nd_fecha_docmod'])))
      {
          nm_volta_data($this->nd_fecha_docmod, $this->field_config['nd_fecha_docmod']['date_format']) ; 
          nmgp_Form_Datas($this->nd_fecha_docmod, $this->field_config['nd_fecha_docmod']['date_format'], $this->field_config['nd_fecha_docmod']['date_sep']) ;  
      }
      elseif ('null' == $this->nd_fecha_docmod || '' == $this->nd_fecha_docmod)
      {
          $this->nd_fecha_docmod = '';
      }
      if ('' !== $this->nd_subtotal || (!empty($format_fields) && isset($format_fields['nd_subtotal'])))
      {
          nmgp_Form_Num_Val($this->nd_subtotal, $this->field_config['nd_subtotal']['symbol_grp'], $this->field_config['nd_subtotal']['symbol_dec'], "2", "S", $this->field_config['nd_subtotal']['format_neg'], "", "", "-", $this->field_config['nd_subtotal']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_subtotal_iva || (!empty($format_fields) && isset($format_fields['nd_subtotal_iva'])))
      {
          nmgp_Form_Num_Val($this->nd_subtotal_iva, $this->field_config['nd_subtotal_iva']['symbol_grp'], $this->field_config['nd_subtotal_iva']['symbol_dec'], "2", "S", $this->field_config['nd_subtotal_iva']['format_neg'], "", "", "-", $this->field_config['nd_subtotal_iva']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_subtotal_cero || (!empty($format_fields) && isset($format_fields['nd_subtotal_cero'])))
      {
          nmgp_Form_Num_Val($this->nd_subtotal_cero, $this->field_config['nd_subtotal_cero']['symbol_grp'], $this->field_config['nd_subtotal_cero']['symbol_dec'], "2", "S", $this->field_config['nd_subtotal_cero']['format_neg'], "", "", "-", $this->field_config['nd_subtotal_cero']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_subtotal_no_objeto || (!empty($format_fields) && isset($format_fields['nd_subtotal_no_objeto'])))
      {
          nmgp_Form_Num_Val($this->nd_subtotal_no_objeto, $this->field_config['nd_subtotal_no_objeto']['symbol_grp'], $this->field_config['nd_subtotal_no_objeto']['symbol_dec'], "2", "S", $this->field_config['nd_subtotal_no_objeto']['format_neg'], "", "", "-", $this->field_config['nd_subtotal_no_objeto']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_subtotal_excento || (!empty($format_fields) && isset($format_fields['nd_subtotal_excento'])))
      {
          nmgp_Form_Num_Val($this->nd_subtotal_excento, $this->field_config['nd_subtotal_excento']['symbol_grp'], $this->field_config['nd_subtotal_excento']['symbol_dec'], "2", "S", $this->field_config['nd_subtotal_excento']['format_neg'], "", "", "-", $this->field_config['nd_subtotal_excento']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_valor_ice || (!empty($format_fields) && isset($format_fields['nd_valor_ice'])))
      {
          nmgp_Form_Num_Val($this->nd_valor_ice, $this->field_config['nd_valor_ice']['symbol_grp'], $this->field_config['nd_valor_ice']['symbol_dec'], "2", "S", $this->field_config['nd_valor_ice']['format_neg'], "", "", "-", $this->field_config['nd_valor_ice']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_valor_iva || (!empty($format_fields) && isset($format_fields['nd_valor_iva'])))
      {
          nmgp_Form_Num_Val($this->nd_valor_iva, $this->field_config['nd_valor_iva']['symbol_grp'], $this->field_config['nd_valor_iva']['symbol_dec'], "2", "S", $this->field_config['nd_valor_iva']['format_neg'], "", "", "-", $this->field_config['nd_valor_iva']['symbol_fmt']) ; 
      }
      if ('' !== $this->nd_total || (!empty($format_fields) && isset($format_fields['nd_total'])))
      {
          nmgp_Form_Num_Val($this->nd_total, $this->field_config['nd_total']['symbol_grp'], $this->field_config['nd_total']['symbol_dec'], "2", "S", $this->field_config['nd_total']['format_neg'], "", "", "-", $this->field_config['nd_total']['symbol_fmt']) ; 
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
      $guarda_format_hora = $this->field_config['nd_fecha']['date_format'];
      if ($this->nd_fecha != "")  
      { 
          nm_conv_data($this->nd_fecha, $this->field_config['nd_fecha']['date_format']) ; 
          $this->nd_fecha_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->nd_fecha_hora = substr($this->nd_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_fecha_hora = substr($this->nd_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->nd_fecha_hora = substr($this->nd_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->nd_fecha_hora = substr($this->nd_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->nd_fecha_hora = substr($this->nd_fecha_hora, 0, -4);
          }
      } 
      if ($this->nd_fecha == "" && $use_null)  
      { 
          $this->nd_fecha = "null" ; 
      } 
      $this->field_config['nd_fecha']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['nd_fecha_autorizacion']['date_format'];
      if ($this->nd_fecha_autorizacion != "")  
      { 
          nm_conv_data($this->nd_fecha_autorizacion, $this->field_config['nd_fecha_autorizacion']['date_format']) ; 
          $this->nd_fecha_autorizacion_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->nd_fecha_autorizacion_hora = substr($this->nd_fecha_autorizacion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_fecha_autorizacion_hora = substr($this->nd_fecha_autorizacion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->nd_fecha_autorizacion_hora = substr($this->nd_fecha_autorizacion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->nd_fecha_autorizacion_hora = substr($this->nd_fecha_autorizacion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->nd_fecha_autorizacion_hora = substr($this->nd_fecha_autorizacion_hora, 0, -4);
          }
      } 
      if ($this->nd_fecha_autorizacion == "" && $use_null)  
      { 
          $this->nd_fecha_autorizacion = "null" ; 
      } 
      $this->field_config['nd_fecha_autorizacion']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['nd_fecha_docmod']['date_format'];
      if ($this->nd_fecha_docmod != "")  
      { 
          nm_conv_data($this->nd_fecha_docmod, $this->field_config['nd_fecha_docmod']['date_format']) ; 
          $this->nd_fecha_docmod_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->nd_fecha_docmod_hora = substr($this->nd_fecha_docmod_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_fecha_docmod_hora = substr($this->nd_fecha_docmod_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->nd_fecha_docmod_hora = substr($this->nd_fecha_docmod_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->nd_fecha_docmod_hora = substr($this->nd_fecha_docmod_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->nd_fecha_docmod_hora = substr($this->nd_fecha_docmod_hora, 0, -4);
          }
      } 
      if ($this->nd_fecha_docmod == "" && $use_null)  
      { 
          $this->nd_fecha_docmod = "null" ; 
      } 
      $this->field_config['nd_fecha_docmod']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_nd_libretin();
          $this->ajax_return_values_establecimiento();
          $this->ajax_return_values_punto_emision();
          $this->ajax_return_values_secuencial();
          $this->ajax_return_values_tipo_libretin();
          $this->ajax_return_values_ambiente();
          $this->ajax_return_values_nd_fecha();
          $this->ajax_return_values_nd_establecimiento();
          $this->ajax_return_values_nd_punto_emision();
          $this->ajax_return_values_nd_secuencial();
          $this->ajax_return_values_nd_tipo_libretin();
          $this->ajax_return_values_nd_ambiente();
          $this->ajax_return_values_nd_tipo_comprobante();
          $this->ajax_return_values_nd_numero();
          $this->ajax_return_values_nd_empresa();
          $this->ajax_return_values_nd_estado();
          $this->ajax_return_values_nd_estado_sri();
          $this->ajax_return_values_nd_error_sri();
          $this->ajax_return_values_nd_fecha_autorizacion();
          $this->ajax_return_values_nd_autorizacion();
          $this->ajax_return_values_nd_usuario();
          $this->ajax_return_values_nd_clave();
          $this->ajax_return_values_nd_iddocmod();
          $this->ajax_return_values_tipo_doc_sustento();
          $this->ajax_return_values_serie_sustento();
          $this->ajax_return_values_secuencial_sustento();
          $this->ajax_return_values_fecha_sustento();
          $this->ajax_return_values_nd_cliente();
          $this->ajax_return_values_nd_cod_docmod();
          $this->ajax_return_values_nd_serie_docmod();
          $this->ajax_return_values_nd_secuencial_docmod();
          $this->ajax_return_values_nd_fecha_docmod();
          $this->ajax_return_values_nombre_cliente();
          $this->ajax_return_values_ruc_cliente();
          $this->ajax_return_values_direccion_cliente();
          $this->ajax_return_values_email_cliente();
          $this->ajax_return_values_detalle();
          $this->ajax_return_values_nd_subtotal();
          $this->ajax_return_values_nd_subtotal_iva();
          $this->ajax_return_values_nd_subtotal_cero();
          $this->ajax_return_values_nd_subtotal_no_objeto();
          $this->ajax_return_values_nd_subtotal_excento();
          $this->ajax_return_values_nd_valor_ice();
          $this->ajax_return_values_nd_valor_iva();
          $this->ajax_return_values_nd_total();
          $this->ajax_return_values_forma_pago();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['nd_numero']['keyVal'] = form_del_nota_debito_mob_pack_protect_string($this->nmgp_dados_form['nd_numero']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['foreign_key']['dnd_nota_debito'] = $this->nmgp_dados_form['nd_numero'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['where_filter'] = "dnd_nota_debito = " . $this->nmgp_dados_form['nd_numero'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['where_detal']  = "dnd_nota_debito = " . $this->nmgp_dados_form['nd_numero'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['total']);
              foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob'] as $i => $v)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito'][$i] = $v;
              }
              if (isset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['total']))
              {
                  unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_detalle_nota_debito_mob_script_case_init'] ]['form_del_detalle_nota_debito_mob']['total']);
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['foreign_key']['fp_nota_debito'] = $this->nmgp_dados_form['nd_numero'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['where_filter'] = "fp_nota_debito = " . $this->nmgp_dados_form['nd_numero'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['where_detal']  = "fp_nota_debito = " . $this->nmgp_dados_form['nd_numero'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['total']);
              foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob'] as $i => $v)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito'][$i] = $v;
              }
              if (isset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['total']))
              {
                  unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['form_del_forma_pago_nota_debito_mob_script_case_init'] ]['form_del_forma_pago_nota_debito_mob']['total']);
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

          //----- nd_libretin
   function ajax_return_values_nd_libretin($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_libretin", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_libretin);
              $aLookup = array();
              $this->_tmp_lookup_nd_libretin = $this->nd_libretin;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_nd_fecha = $this->nd_fecha;
   $old_value_nd_establecimiento = $this->nd_establecimiento;
   $old_value_nd_punto_emision = $this->nd_punto_emision;
   $old_value_nd_secuencial = $this->nd_secuencial;
   $old_value_nd_ambiente = $this->nd_ambiente;
   $old_value_nd_numero = $this->nd_numero;
   $old_value_nd_fecha_autorizacion = $this->nd_fecha_autorizacion;
   $old_value_nd_iddocmod = $this->nd_iddocmod;
   $old_value_fecha_sustento = $this->fecha_sustento;
   $old_value_nd_cliente = $this->nd_cliente;
   $old_value_nd_secuencial_docmod = $this->nd_secuencial_docmod;
   $old_value_nd_fecha_docmod = $this->nd_fecha_docmod;
   $old_value_nd_subtotal = $this->nd_subtotal;
   $old_value_nd_subtotal_iva = $this->nd_subtotal_iva;
   $old_value_nd_subtotal_cero = $this->nd_subtotal_cero;
   $old_value_nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto;
   $old_value_nd_subtotal_excento = $this->nd_subtotal_excento;
   $old_value_nd_valor_ice = $this->nd_valor_ice;
   $old_value_nd_valor_iva = $this->nd_valor_iva;
   $old_value_nd_total = $this->nd_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_nd_fecha = $this->nd_fecha;
   $unformatted_value_nd_establecimiento = $this->nd_establecimiento;
   $unformatted_value_nd_punto_emision = $this->nd_punto_emision;
   $unformatted_value_nd_secuencial = $this->nd_secuencial;
   $unformatted_value_nd_ambiente = $this->nd_ambiente;
   $unformatted_value_nd_numero = $this->nd_numero;
   $unformatted_value_nd_fecha_autorizacion = $this->nd_fecha_autorizacion;
   $unformatted_value_nd_iddocmod = $this->nd_iddocmod;
   $unformatted_value_fecha_sustento = $this->fecha_sustento;
   $unformatted_value_nd_cliente = $this->nd_cliente;
   $unformatted_value_nd_secuencial_docmod = $this->nd_secuencial_docmod;
   $unformatted_value_nd_fecha_docmod = $this->nd_fecha_docmod;
   $unformatted_value_nd_subtotal = $this->nd_subtotal;
   $unformatted_value_nd_subtotal_iva = $this->nd_subtotal_iva;
   $unformatted_value_nd_subtotal_cero = $this->nd_subtotal_cero;
   $unformatted_value_nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto;
   $unformatted_value_nd_subtotal_excento = $this->nd_subtotal_excento;
   $unformatted_value_nd_valor_ice = $this->nd_valor_ice;
   $unformatted_value_nd_valor_iva = $this->nd_valor_iva;
   $unformatted_value_nd_total = $this->nd_total;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='05'";

   $this->nd_fecha = $old_value_nd_fecha;
   $this->nd_establecimiento = $old_value_nd_establecimiento;
   $this->nd_punto_emision = $old_value_nd_punto_emision;
   $this->nd_secuencial = $old_value_nd_secuencial;
   $this->nd_ambiente = $old_value_nd_ambiente;
   $this->nd_numero = $old_value_nd_numero;
   $this->nd_fecha_autorizacion = $old_value_nd_fecha_autorizacion;
   $this->nd_iddocmod = $old_value_nd_iddocmod;
   $this->fecha_sustento = $old_value_fecha_sustento;
   $this->nd_cliente = $old_value_nd_cliente;
   $this->nd_secuencial_docmod = $old_value_nd_secuencial_docmod;
   $this->nd_fecha_docmod = $old_value_nd_fecha_docmod;
   $this->nd_subtotal = $old_value_nd_subtotal;
   $this->nd_subtotal_iva = $old_value_nd_subtotal_iva;
   $this->nd_subtotal_cero = $old_value_nd_subtotal_cero;
   $this->nd_subtotal_no_objeto = $old_value_nd_subtotal_no_objeto;
   $this->nd_subtotal_excento = $old_value_nd_subtotal_excento;
   $this->nd_valor_ice = $old_value_nd_valor_ice;
   $this->nd_valor_iva = $old_value_nd_valor_iva;
   $this->nd_total = $old_value_nd_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_nota_debito_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_nota_debito_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin'][] = $rs->fields[0];
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
          $sSelComp = "name=\"nd_libretin\"";
          if (isset($this->NM_ajax_info['select_html']['nd_libretin']) && !empty($this->NM_ajax_info['select_html']['nd_libretin']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['nd_libretin']);
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

                  if ($this->nd_libretin == $sValue)
                  {
                      $this->_tmp_lookup_nd_libretin = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['nd_libretin'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['nd_libretin']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['nd_libretin']['valList'][$i] = form_del_nota_debito_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['nd_libretin']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['nd_libretin']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['nd_libretin']['labList'] = $aLabel;
          }
   }

          //----- establecimiento
   function ajax_return_values_establecimiento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("establecimiento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->establecimiento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['establecimiento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- punto_emision
   function ajax_return_values_punto_emision($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("punto_emision", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->punto_emision);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['punto_emision'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- secuencial
   function ajax_return_values_secuencial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("secuencial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->secuencial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['secuencial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- tipo_libretin
   function ajax_return_values_tipo_libretin($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipo_libretin", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipo_libretin);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tipo_libretin'] = array(
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

          //----- nd_fecha
   function ajax_return_values_nd_fecha($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_fecha", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_fecha);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_fecha'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_establecimiento
   function ajax_return_values_nd_establecimiento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_establecimiento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_establecimiento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_establecimiento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_punto_emision
   function ajax_return_values_nd_punto_emision($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_punto_emision", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_punto_emision);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_punto_emision'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_secuencial
   function ajax_return_values_nd_secuencial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_secuencial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_secuencial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_secuencial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_tipo_libretin
   function ajax_return_values_nd_tipo_libretin($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_tipo_libretin", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_tipo_libretin);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_tipo_libretin'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_ambiente
   function ajax_return_values_nd_ambiente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_ambiente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_ambiente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_ambiente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_tipo_comprobante
   function ajax_return_values_nd_tipo_comprobante($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_tipo_comprobante", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_tipo_comprobante);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_tipo_comprobante'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_numero
   function ajax_return_values_nd_numero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_numero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_numero);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_numero'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("nd_numero", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- nd_empresa
   function ajax_return_values_nd_empresa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_empresa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_empresa);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_empresa'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_estado
   function ajax_return_values_nd_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_estado);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_estado'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_estado_sri
   function ajax_return_values_nd_estado_sri($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_estado_sri", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_estado_sri);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_estado_sri'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_error_sri
   function ajax_return_values_nd_error_sri($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_error_sri", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_error_sri);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_error_sri'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_fecha_autorizacion
   function ajax_return_values_nd_fecha_autorizacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_fecha_autorizacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_fecha_autorizacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_fecha_autorizacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_autorizacion
   function ajax_return_values_nd_autorizacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_autorizacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_autorizacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_autorizacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_usuario
   function ajax_return_values_nd_usuario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_usuario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_usuario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_usuario'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_clave
   function ajax_return_values_nd_clave($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_clave", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_clave);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_clave'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_iddocmod
   function ajax_return_values_nd_iddocmod($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_iddocmod", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_iddocmod);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_iddocmod'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tipo_doc_sustento
   function ajax_return_values_tipo_doc_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipo_doc_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipo_doc_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tipo_doc_sustento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- serie_sustento
   function ajax_return_values_serie_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("serie_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->serie_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['serie_sustento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- secuencial_sustento
   function ajax_return_values_secuencial_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("secuencial_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->secuencial_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['secuencial_sustento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fecha_sustento
   function ajax_return_values_fecha_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fecha_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fecha_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fecha_sustento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_cliente
   function ajax_return_values_nd_cliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_cliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_cliente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_cliente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_cod_docmod
   function ajax_return_values_nd_cod_docmod($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_cod_docmod", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_cod_docmod);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_cod_docmod'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_serie_docmod
   function ajax_return_values_nd_serie_docmod($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_serie_docmod", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_serie_docmod);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_serie_docmod'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_secuencial_docmod
   function ajax_return_values_nd_secuencial_docmod($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_secuencial_docmod", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_secuencial_docmod);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_secuencial_docmod'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_fecha_docmod
   function ajax_return_values_nd_fecha_docmod($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_fecha_docmod", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_fecha_docmod);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_fecha_docmod'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nombre_cliente
   function ajax_return_values_nombre_cliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombre_cliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombre_cliente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombre_cliente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- ruc_cliente
   function ajax_return_values_ruc_cliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ruc_cliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ruc_cliente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ruc_cliente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- direccion_cliente
   function ajax_return_values_direccion_cliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("direccion_cliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->direccion_cliente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['direccion_cliente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- email_cliente
   function ajax_return_values_email_cliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("email_cliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->email_cliente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['email_cliente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- detalle
   function ajax_return_values_detalle($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("detalle", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->detalle);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['detalle'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_subtotal
   function ajax_return_values_nd_subtotal($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_subtotal", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_subtotal);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_subtotal'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_subtotal_iva
   function ajax_return_values_nd_subtotal_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_subtotal_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_subtotal_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_subtotal_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_subtotal_cero
   function ajax_return_values_nd_subtotal_cero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_subtotal_cero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_subtotal_cero);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_subtotal_cero'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_subtotal_no_objeto
   function ajax_return_values_nd_subtotal_no_objeto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_subtotal_no_objeto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_subtotal_no_objeto);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_subtotal_no_objeto'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_subtotal_excento
   function ajax_return_values_nd_subtotal_excento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_subtotal_excento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_subtotal_excento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_subtotal_excento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_valor_ice
   function ajax_return_values_nd_valor_ice($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_valor_ice", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_valor_ice);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_valor_ice'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_valor_iva
   function ajax_return_values_nd_valor_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_valor_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_valor_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_valor_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nd_total
   function ajax_return_values_nd_total($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_total", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_total);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_total'] = array(
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['upload_dir'][$fieldName][] = $newName;
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
       $this->NM_ajax_info['btnVars']['var_btn_ride_var_id_documento'] = $this->form_encode_input($this->nmgp_dados_form['nd_numero']);
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_ambiente = $this->ambiente;
    $original_direccion_cliente = $this->direccion_cliente;
    $original_email_cliente = $this->email_cliente;
    $original_establecimiento = $this->establecimiento;
    $original_fecha_sustento = $this->fecha_sustento;
    $original_nd_ambiente = $this->nd_ambiente;
    $original_nd_autorizacion = $this->nd_autorizacion;
    $original_nd_establecimiento = $this->nd_establecimiento;
    $original_nd_estado = $this->nd_estado;
    $original_nd_estado_sri = $this->nd_estado_sri;
    $original_nd_iddocmod = $this->nd_iddocmod;
    $original_nd_libretin = $this->nd_libretin;
    $original_nd_numero = $this->nd_numero;
    $original_nd_punto_emision = $this->nd_punto_emision;
    $original_nd_secuencial = $this->nd_secuencial;
    $original_nd_tipo_libretin = $this->nd_tipo_libretin;
    $original_nombre_cliente = $this->nombre_cliente;
    $original_punto_emision = $this->punto_emision;
    $original_ruc_cliente = $this->ruc_cliente;
    $original_secuencial = $this->secuencial;
    $original_secuencial_sustento = $this->secuencial_sustento;
    $original_serie_sustento = $this->serie_sustento;
    $original_tipo_doc_sustento = $this->tipo_doc_sustento;
    $original_tipo_libretin = $this->tipo_libretin;
    $original_titulo = $this->titulo;
}
if (!isset($this->sc_temp_Igtech_SesionLogin)) {$this->sc_temp_Igtech_SesionLogin = (isset($_SESSION['Igtech_SesionLogin'])) ? $_SESSION['Igtech_SesionLogin'] : "";}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  $this->titulo = $this->Ini->Nm_lang['lang_emitir_nota_debito'] ;

if ($this->nd_estado =='R'){
	$this->sc_field_readonly("nd_libretin", 'off');
	
}else{
	$this->sc_field_readonly("nd_libretin", 'on');
}


if($this->nd_libretin <>''){
	$check_sql = "SELECT est_codigo,
						 pen_serie,
						 right('000000000'||nd_secuencial,9),
						 tl_descripcion,
						 ta_nombre 
				  FROM del_nota_debito 
				  join del_establecimiento on nd_establecimiento=est_id
				  join del_punto_emision on nd_punto_emision=pem_id
				  join sri_tipo_libretin on nd_tipo_libretin = tl_codigo
				  join sri_tipo_ambiente on nd_ambiente=ta_id
				  where nd_numero=".$this->nd_numero ;
	 
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
		
		$this->establecimiento  = $this->rs[0][0];
		$this->punto_emision  = $this->rs[0][1];
		$this->secuencial = $this->rs[0][2];
		$this->tipo_libretin =$this->rs[0][3];
		$this->ambiente =$this->rs[0][4];

	}
}else{
	$check_sql="SELECT lib_id,est_codigo||' - '||pen_serie
				FROM v_del_libretin
				where lib_estado='A'
				and est_empresa='".$this->sc_temp_Igtech_RucEmpresa."'
				and pem_usuario='".$this->sc_temp_Igtech_SesionLogin."'
				AND lib_tipo_comprobante='05'";
	 
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
		$this->nd_libretin =$this->rs[0][0];
	}else{
		$this->nm_mens_alert[] = $this->Ini->Nm_lang['lang_error_libretin']; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert($this->Ini->Nm_lang['lang_error_libretin']); }}
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
         			estado_sri
			 FROM v_del_libretin
			 WHERE lib_id=".$this->nd_libretin ;
			 
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
				$this->nd_establecimiento  = $this->rs[0][0];
				$this->nd_punto_emision  = $this->rs[0][1];
				$this->nd_secuencial = $this->rs[0][2];
				$this->nd_ambiente =$this->rs[0][3];
				$this->nd_tipo_libretin =$this->rs[0][4];
				$this->establecimiento  = $this->rs[0][5];
				$this->punto_emision  = $this->rs[0][6];
				$this->secuencial = $this->rs[0][7];
				$this->ambiente =$this->rs[0][8];
				$this->tipo_libretin =$this->rs[0][9];
				$this->nd_autorizacion =$this->rs[0][10];
				$this->nd_estado_sri =$this->rs[0][11];
			}
}

if ($this->nd_iddocmod <>''){
	$check_sql = "SELECT 
					fac_tipo_comprobante,
					tc_nombre,
					est_codigo||'-'||pen_serie,
					fac_secuencial,
					fac_fecha,
					cl_nombre,
					cl_identificacion,
					cl_direccion,
					cl_email
			FROM v_del_datos_factura_sri
			INNER JOIN sri_tipo_comprobante ON fac_tipo_comprobante=tc_codigo
			WHERE fac_numero=".$this->nd_iddocmod ;
	 
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
		$this->tipo_doc_sustento 		=$this->rs[0][1];
		$this->serie_sustento 		=$this->rs[0][2];
		$this->secuencial_sustento 	=$this->rs[0][3];
		$this->fecha_sustento 		=$this->rs[0][4];
		$this->nombre_cliente 	=$this->rs[0][5];
		$this->ruc_cliente 		=$this->rs[0][6];
		$this->direccion_cliente 	=$this->rs[0][7];
		$this->email_cliente 		=$this->rs[0][8];
	}
}

$this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes["delete"] = 'off';;
$this->NM_ajax_info['buttonDisplay']['new'] = $this->nmgp_botoes["new"] = 'off';;
$this->NM_ajax_info['buttonDisplay']['Nuevo'] = $this->nmgp_botoes["Nuevo"] = 'on';;

if ($this->nd_estado =='R'){
	$this->sc_field_readonly("nd_libretin", 'off');
	$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['autorizar'] = $this->nmgp_botoes["autorizar"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes["ride"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'off';;
}elseif($this->nd_estado =='V'){
	$this->sc_field_readonly("nd_libretin", 'on');
	$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
	if($this->nd_tipo_libretin =='E'){
		if($this->nd_estado_sri  == 'AUTORIZADO'){
			$this->NM_ajax_info['buttonDisplay']['autorizar'] = $this->nmgp_botoes["autorizar"] = 'off';;
		}else{
			$this->NM_ajax_info['buttonDisplay']['autorizar'] = $this->nmgp_botoes["autorizar"] = 'on';;
		}
		$this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes["ride"] = 'on';;
	}else{
		$this->NM_ajax_info['buttonDisplay']['autorizar'] = $this->nmgp_botoes["autorizar"] = 'off';;
		$this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes["ride"] = 'off';;
	}	
}else{
	$this->sc_field_readonly("nd_libretin", 'on');
	$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['autorizar'] = $this->nmgp_botoes["autorizar"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes["ride"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'off';;
}
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_ambiente != $this->ambiente || (isset($bFlagRead_ambiente) && $bFlagRead_ambiente)))
    {
        $this->ajax_return_values_ambiente(true);
    }
    if (($original_direccion_cliente != $this->direccion_cliente || (isset($bFlagRead_direccion_cliente) && $bFlagRead_direccion_cliente)))
    {
        $this->ajax_return_values_direccion_cliente(true);
    }
    if (($original_email_cliente != $this->email_cliente || (isset($bFlagRead_email_cliente) && $bFlagRead_email_cliente)))
    {
        $this->ajax_return_values_email_cliente(true);
    }
    if (($original_establecimiento != $this->establecimiento || (isset($bFlagRead_establecimiento) && $bFlagRead_establecimiento)))
    {
        $this->ajax_return_values_establecimiento(true);
    }
    if (($original_fecha_sustento != $this->fecha_sustento || (isset($bFlagRead_fecha_sustento) && $bFlagRead_fecha_sustento)))
    {
        $this->ajax_return_values_fecha_sustento(true);
    }
    if (($original_nd_ambiente != $this->nd_ambiente || (isset($bFlagRead_nd_ambiente) && $bFlagRead_nd_ambiente)))
    {
        $this->ajax_return_values_nd_ambiente(true);
    }
    if (($original_nd_autorizacion != $this->nd_autorizacion || (isset($bFlagRead_nd_autorizacion) && $bFlagRead_nd_autorizacion)))
    {
        $this->ajax_return_values_nd_autorizacion(true);
    }
    if (($original_nd_establecimiento != $this->nd_establecimiento || (isset($bFlagRead_nd_establecimiento) && $bFlagRead_nd_establecimiento)))
    {
        $this->ajax_return_values_nd_establecimiento(true);
    }
    if (($original_nd_estado != $this->nd_estado || (isset($bFlagRead_nd_estado) && $bFlagRead_nd_estado)))
    {
        $this->ajax_return_values_nd_estado(true);
    }
    if (($original_nd_estado_sri != $this->nd_estado_sri || (isset($bFlagRead_nd_estado_sri) && $bFlagRead_nd_estado_sri)))
    {
        $this->ajax_return_values_nd_estado_sri(true);
    }
    if (($original_nd_iddocmod != $this->nd_iddocmod || (isset($bFlagRead_nd_iddocmod) && $bFlagRead_nd_iddocmod)))
    {
        $this->ajax_return_values_nd_iddocmod(true);
    }
    if (($original_nd_libretin != $this->nd_libretin || (isset($bFlagRead_nd_libretin) && $bFlagRead_nd_libretin)))
    {
        $this->ajax_return_values_nd_libretin(true);
    }
    if (($original_nd_numero != $this->nd_numero || (isset($bFlagRead_nd_numero) && $bFlagRead_nd_numero)))
    {
        $this->ajax_return_values_nd_numero(true);
    }
    if (($original_nd_punto_emision != $this->nd_punto_emision || (isset($bFlagRead_nd_punto_emision) && $bFlagRead_nd_punto_emision)))
    {
        $this->ajax_return_values_nd_punto_emision(true);
    }
    if (($original_nd_secuencial != $this->nd_secuencial || (isset($bFlagRead_nd_secuencial) && $bFlagRead_nd_secuencial)))
    {
        $this->ajax_return_values_nd_secuencial(true);
    }
    if (($original_nd_tipo_libretin != $this->nd_tipo_libretin || (isset($bFlagRead_nd_tipo_libretin) && $bFlagRead_nd_tipo_libretin)))
    {
        $this->ajax_return_values_nd_tipo_libretin(true);
    }
    if (($original_nombre_cliente != $this->nombre_cliente || (isset($bFlagRead_nombre_cliente) && $bFlagRead_nombre_cliente)))
    {
        $this->ajax_return_values_nombre_cliente(true);
    }
    if (($original_punto_emision != $this->punto_emision || (isset($bFlagRead_punto_emision) && $bFlagRead_punto_emision)))
    {
        $this->ajax_return_values_punto_emision(true);
    }
    if (($original_ruc_cliente != $this->ruc_cliente || (isset($bFlagRead_ruc_cliente) && $bFlagRead_ruc_cliente)))
    {
        $this->ajax_return_values_ruc_cliente(true);
    }
    if (($original_secuencial != $this->secuencial || (isset($bFlagRead_secuencial) && $bFlagRead_secuencial)))
    {
        $this->ajax_return_values_secuencial(true);
    }
    if (($original_secuencial_sustento != $this->secuencial_sustento || (isset($bFlagRead_secuencial_sustento) && $bFlagRead_secuencial_sustento)))
    {
        $this->ajax_return_values_secuencial_sustento(true);
    }
    if (($original_serie_sustento != $this->serie_sustento || (isset($bFlagRead_serie_sustento) && $bFlagRead_serie_sustento)))
    {
        $this->ajax_return_values_serie_sustento(true);
    }
    if (($original_tipo_doc_sustento != $this->tipo_doc_sustento || (isset($bFlagRead_tipo_doc_sustento) && $bFlagRead_tipo_doc_sustento)))
    {
        $this->ajax_return_values_tipo_doc_sustento(true);
    }
    if (($original_tipo_libretin != $this->tipo_libretin || (isset($bFlagRead_tipo_libretin) && $bFlagRead_tipo_libretin)))
    {
        $this->ajax_return_values_tipo_libretin(true);
    }
    if (($original_titulo != $this->titulo || (isset($bFlagRead_titulo) && $bFlagRead_titulo)))
    {
        $this->ajax_return_values_titulo(true);
    }
}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off'; 
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
      $this->nd_subtotal = str_replace($sc_parm1, $sc_parm2, $this->nd_subtotal); 
      $this->nd_subtotal_iva = str_replace($sc_parm1, $sc_parm2, $this->nd_subtotal_iva); 
      $this->nd_subtotal_cero = str_replace($sc_parm1, $sc_parm2, $this->nd_subtotal_cero); 
      $this->nd_subtotal_no_objeto = str_replace($sc_parm1, $sc_parm2, $this->nd_subtotal_no_objeto); 
      $this->nd_subtotal_excento = str_replace($sc_parm1, $sc_parm2, $this->nd_subtotal_excento); 
      $this->nd_valor_ice = str_replace($sc_parm1, $sc_parm2, $this->nd_valor_ice); 
      $this->nd_valor_iva = str_replace($sc_parm1, $sc_parm2, $this->nd_valor_iva); 
      $this->nd_total = str_replace($sc_parm1, $sc_parm2, $this->nd_total); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->nd_subtotal = "'" . $this->nd_subtotal . "'";
      $this->nd_subtotal_iva = "'" . $this->nd_subtotal_iva . "'";
      $this->nd_subtotal_cero = "'" . $this->nd_subtotal_cero . "'";
      $this->nd_subtotal_no_objeto = "'" . $this->nd_subtotal_no_objeto . "'";
      $this->nd_subtotal_excento = "'" . $this->nd_subtotal_excento . "'";
      $this->nd_valor_ice = "'" . $this->nd_valor_ice . "'";
      $this->nd_valor_iva = "'" . $this->nd_valor_iva . "'";
      $this->nd_total = "'" . $this->nd_total . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->nd_subtotal = str_replace("'", "", $this->nd_subtotal); 
      $this->nd_subtotal_iva = str_replace("'", "", $this->nd_subtotal_iva); 
      $this->nd_subtotal_cero = str_replace("'", "", $this->nd_subtotal_cero); 
      $this->nd_subtotal_no_objeto = str_replace("'", "", $this->nd_subtotal_no_objeto); 
      $this->nd_subtotal_excento = str_replace("'", "", $this->nd_subtotal_excento); 
      $this->nd_valor_ice = str_replace("'", "", $this->nd_valor_ice); 
      $this->nd_valor_iva = str_replace("'", "", $this->nd_valor_iva); 
      $this->nd_total = str_replace("'", "", $this->nd_total); 
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
      $_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_var_mensaje)) {$this->sc_temp_var_mensaje = (isset($_SESSION['var_mensaje'])) ? $_SESSION['var_mensaje'] : "";}
if (!isset($this->sc_temp_var_procesar)) {$this->sc_temp_var_procesar = (isset($_SESSION['var_procesar'])) ? $_SESSION['var_procesar'] : "";}
  $this->sc_temp_var_procesar=true;
$this->sc_temp_var_mensaje='Nota de Crédito Exitosa';
if (isset($this->sc_temp_var_procesar)) { $_SESSION['var_procesar'] = $this->sc_temp_var_procesar;}
if (isset($this->sc_temp_var_mensaje)) { $_SESSION['var_mensaje'] = $this->sc_temp_var_mensaje;}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off'; 
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
      $NM_val_form['nd_libretin'] = $this->nd_libretin;
      $NM_val_form['establecimiento'] = $this->establecimiento;
      $NM_val_form['punto_emision'] = $this->punto_emision;
      $NM_val_form['secuencial'] = $this->secuencial;
      $NM_val_form['tipo_libretin'] = $this->tipo_libretin;
      $NM_val_form['ambiente'] = $this->ambiente;
      $NM_val_form['nd_fecha'] = $this->nd_fecha;
      $NM_val_form['nd_establecimiento'] = $this->nd_establecimiento;
      $NM_val_form['nd_punto_emision'] = $this->nd_punto_emision;
      $NM_val_form['nd_secuencial'] = $this->nd_secuencial;
      $NM_val_form['nd_tipo_libretin'] = $this->nd_tipo_libretin;
      $NM_val_form['nd_ambiente'] = $this->nd_ambiente;
      $NM_val_form['nd_tipo_comprobante'] = $this->nd_tipo_comprobante;
      $NM_val_form['nd_numero'] = $this->nd_numero;
      $NM_val_form['nd_empresa'] = $this->nd_empresa;
      $NM_val_form['nd_estado'] = $this->nd_estado;
      $NM_val_form['nd_estado_sri'] = $this->nd_estado_sri;
      $NM_val_form['nd_error_sri'] = $this->nd_error_sri;
      $NM_val_form['nd_fecha_autorizacion'] = $this->nd_fecha_autorizacion;
      $NM_val_form['nd_autorizacion'] = $this->nd_autorizacion;
      $NM_val_form['nd_usuario'] = $this->nd_usuario;
      $NM_val_form['nd_clave'] = $this->nd_clave;
      $NM_val_form['nd_iddocmod'] = $this->nd_iddocmod;
      $NM_val_form['tipo_doc_sustento'] = $this->tipo_doc_sustento;
      $NM_val_form['serie_sustento'] = $this->serie_sustento;
      $NM_val_form['secuencial_sustento'] = $this->secuencial_sustento;
      $NM_val_form['fecha_sustento'] = $this->fecha_sustento;
      $NM_val_form['nd_cliente'] = $this->nd_cliente;
      $NM_val_form['nd_cod_docmod'] = $this->nd_cod_docmod;
      $NM_val_form['nd_serie_docmod'] = $this->nd_serie_docmod;
      $NM_val_form['nd_secuencial_docmod'] = $this->nd_secuencial_docmod;
      $NM_val_form['nd_fecha_docmod'] = $this->nd_fecha_docmod;
      $NM_val_form['nombre_cliente'] = $this->nombre_cliente;
      $NM_val_form['ruc_cliente'] = $this->ruc_cliente;
      $NM_val_form['direccion_cliente'] = $this->direccion_cliente;
      $NM_val_form['email_cliente'] = $this->email_cliente;
      $NM_val_form['detalle'] = $this->detalle;
      $NM_val_form['nd_subtotal'] = $this->nd_subtotal;
      $NM_val_form['nd_subtotal_iva'] = $this->nd_subtotal_iva;
      $NM_val_form['nd_subtotal_cero'] = $this->nd_subtotal_cero;
      $NM_val_form['nd_subtotal_no_objeto'] = $this->nd_subtotal_no_objeto;
      $NM_val_form['nd_subtotal_excento'] = $this->nd_subtotal_excento;
      $NM_val_form['nd_valor_ice'] = $this->nd_valor_ice;
      $NM_val_form['nd_valor_iva'] = $this->nd_valor_iva;
      $NM_val_form['nd_total'] = $this->nd_total;
      $NM_val_form['forma_pago'] = $this->forma_pago;
      if ($this->nd_numero === "" || is_null($this->nd_numero))  
      { 
          $this->nd_numero = 0;
      } 
      if ($this->nd_libretin === "" || is_null($this->nd_libretin))  
      { 
          $this->nd_libretin = 0;
          $this->sc_force_zero[] = 'nd_libretin';
      } 
      if ($this->nd_establecimiento === "" || is_null($this->nd_establecimiento))  
      { 
          $this->nd_establecimiento = 0;
          $this->sc_force_zero[] = 'nd_establecimiento';
      } 
      if ($this->nd_punto_emision === "" || is_null($this->nd_punto_emision))  
      { 
          $this->nd_punto_emision = 0;
          $this->sc_force_zero[] = 'nd_punto_emision';
      } 
      if ($this->nd_secuencial === "" || is_null($this->nd_secuencial))  
      { 
          $this->nd_secuencial = 0;
          $this->sc_force_zero[] = 'nd_secuencial';
      } 
      if ($this->nd_ambiente === "" || is_null($this->nd_ambiente))  
      { 
          $this->nd_ambiente = 0;
          $this->sc_force_zero[] = 'nd_ambiente';
      } 
      if ($this->nd_cliente === "" || is_null($this->nd_cliente))  
      { 
          $this->nd_cliente = 0;
          $this->sc_force_zero[] = 'nd_cliente';
      } 
      if ($this->nd_iddocmod === "" || is_null($this->nd_iddocmod))  
      { 
          $this->nd_iddocmod = 0;
          $this->sc_force_zero[] = 'nd_iddocmod';
      } 
      if ($this->nd_secuencial_docmod === "" || is_null($this->nd_secuencial_docmod))  
      { 
          $this->nd_secuencial_docmod = 0;
          $this->sc_force_zero[] = 'nd_secuencial_docmod';
      } 
      if ($this->nd_subtotal_iva === "" || is_null($this->nd_subtotal_iva))  
      { 
          $this->nd_subtotal_iva = 0;
          $this->sc_force_zero[] = 'nd_subtotal_iva';
      } 
      if ($this->nd_subtotal_cero === "" || is_null($this->nd_subtotal_cero))  
      { 
          $this->nd_subtotal_cero = 0;
          $this->sc_force_zero[] = 'nd_subtotal_cero';
      } 
      if ($this->nd_subtotal_no_objeto === "" || is_null($this->nd_subtotal_no_objeto))  
      { 
          $this->nd_subtotal_no_objeto = 0;
          $this->sc_force_zero[] = 'nd_subtotal_no_objeto';
      } 
      if ($this->nd_subtotal_excento === "" || is_null($this->nd_subtotal_excento))  
      { 
          $this->nd_subtotal_excento = 0;
          $this->sc_force_zero[] = 'nd_subtotal_excento';
      } 
      if ($this->nd_subtotal === "" || is_null($this->nd_subtotal))  
      { 
          $this->nd_subtotal = 0;
          $this->sc_force_zero[] = 'nd_subtotal';
      } 
      if ($this->nd_valor_ice === "" || is_null($this->nd_valor_ice))  
      { 
          $this->nd_valor_ice = 0;
          $this->sc_force_zero[] = 'nd_valor_ice';
      } 
      if ($this->nd_valor_iva === "" || is_null($this->nd_valor_iva))  
      { 
          $this->nd_valor_iva = 0;
          $this->sc_force_zero[] = 'nd_valor_iva';
      } 
      if ($this->nd_total === "" || is_null($this->nd_total))  
      { 
          $this->nd_total = 0;
          $this->sc_force_zero[] = 'nd_total';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->nd_tipo_comprobante_before_qstr = $this->nd_tipo_comprobante;
          $this->nd_tipo_comprobante = substr($this->Db->qstr($this->nd_tipo_comprobante), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_tipo_comprobante = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_tipo_comprobante);
          }
          if ($this->nd_tipo_comprobante == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_tipo_comprobante = "null"; 
              $NM_val_null[] = "nd_tipo_comprobante";
          } 
          $this->nd_empresa_before_qstr = $this->nd_empresa;
          $this->nd_empresa = substr($this->Db->qstr($this->nd_empresa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_empresa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_empresa);
          }
          if ($this->nd_empresa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_empresa = "null"; 
              $NM_val_null[] = "nd_empresa";
          } 
          $this->nd_tipo_libretin_before_qstr = $this->nd_tipo_libretin;
          $this->nd_tipo_libretin = substr($this->Db->qstr($this->nd_tipo_libretin), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_tipo_libretin = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_tipo_libretin);
          }
          if ($this->nd_tipo_libretin == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_tipo_libretin = "null"; 
              $NM_val_null[] = "nd_tipo_libretin";
          } 
          if ($this->nd_fecha == "")  
          { 
              $this->nd_fecha = "null"; 
              $NM_val_null[] = "nd_fecha";
          } 
          $this->nd_cod_docmod_before_qstr = $this->nd_cod_docmod;
          $this->nd_cod_docmod = substr($this->Db->qstr($this->nd_cod_docmod), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_cod_docmod = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_cod_docmod);
          }
          if ($this->nd_cod_docmod == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_cod_docmod = "null"; 
              $NM_val_null[] = "nd_cod_docmod";
          } 
          $this->nd_serie_docmod_before_qstr = $this->nd_serie_docmod;
          $this->nd_serie_docmod = substr($this->Db->qstr($this->nd_serie_docmod), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_serie_docmod = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_serie_docmod);
          }
          if ($this->nd_serie_docmod == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_serie_docmod = "null"; 
              $NM_val_null[] = "nd_serie_docmod";
          } 
          $this->nd_estado_before_qstr = $this->nd_estado;
          $this->nd_estado = substr($this->Db->qstr($this->nd_estado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_estado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_estado);
          }
          if ($this->nd_estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_estado = "null"; 
              $NM_val_null[] = "nd_estado";
          } 
          $this->nd_estado_sri_before_qstr = $this->nd_estado_sri;
          $this->nd_estado_sri = substr($this->Db->qstr($this->nd_estado_sri), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_estado_sri = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_estado_sri);
          }
          if ($this->nd_estado_sri == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_estado_sri = "null"; 
              $NM_val_null[] = "nd_estado_sri";
          } 
          $this->nd_error_sri_before_qstr = $this->nd_error_sri;
          $this->nd_error_sri = substr($this->Db->qstr($this->nd_error_sri), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_error_sri = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_error_sri);
          }
          if ($this->nd_error_sri == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_error_sri = "null"; 
              $NM_val_null[] = "nd_error_sri";
          } 
          if ($this->nd_fecha_autorizacion == "")  
          { 
              $this->nd_fecha_autorizacion = "null"; 
              $NM_val_null[] = "nd_fecha_autorizacion";
          } 
          $this->nd_autorizacion_before_qstr = $this->nd_autorizacion;
          $this->nd_autorizacion = substr($this->Db->qstr($this->nd_autorizacion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_autorizacion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_autorizacion);
          }
          if ($this->nd_autorizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_autorizacion = "null"; 
              $NM_val_null[] = "nd_autorizacion";
          } 
          $this->nd_usuario_before_qstr = $this->nd_usuario;
          $this->nd_usuario = substr($this->Db->qstr($this->nd_usuario), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_usuario = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_usuario);
          }
          if ($this->nd_usuario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_usuario = "null"; 
              $NM_val_null[] = "nd_usuario";
          } 
          $this->nd_clave_before_qstr = $this->nd_clave;
          $this->nd_clave = substr($this->Db->qstr($this->nd_clave), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_clave = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_clave);
          }
          if ($this->nd_clave == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_clave = "null"; 
              $NM_val_null[] = "nd_clave";
          } 
          if ($this->nd_fecha_docmod == "")  
          { 
              $this->nd_fecha_docmod = "null"; 
              $NM_val_null[] = "nd_fecha_docmod";
          } 
          $this->detalle_before_qstr = $this->detalle;
          $this->detalle = substr($this->Db->qstr($this->detalle), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->detalle = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->detalle);
          }
          if ($this->detalle == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->detalle = "null"; 
              $NM_val_null[] = "detalle";
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
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_del_nota_debito_mob_pack_ajax_response();
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
                  $SC_fields_update[] = "nd_tipo_comprobante = '$this->nd_tipo_comprobante', nd_empresa = '$this->nd_empresa', nd_libretin = $this->nd_libretin, nd_tipo_libretin = '$this->nd_tipo_libretin', nd_establecimiento = $this->nd_establecimiento, nd_punto_emision = $this->nd_punto_emision, nd_secuencial = $this->nd_secuencial, nd_ambiente = $this->nd_ambiente, nd_cliente = $this->nd_cliente, nd_fecha = #$this->nd_fecha#, nd_iddocmod = $this->nd_iddocmod, nd_cod_docmod = '$this->nd_cod_docmod', nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_subtotal = $this->nd_subtotal, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_estado = '$this->nd_estado', nd_estado_sri = '$this->nd_estado_sri', nd_error_sri = '$this->nd_error_sri', nd_fecha_autorizacion = #$this->nd_fecha_autorizacion#, nd_autorizacion = '$this->nd_autorizacion', nd_usuario = '$this->nd_usuario', nd_clave = '$this->nd_clave', nd_fecha_docmod = #$this->nd_fecha_docmod#"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_tipo_comprobante = '$this->nd_tipo_comprobante', nd_empresa = '$this->nd_empresa', nd_libretin = $this->nd_libretin, nd_tipo_libretin = '$this->nd_tipo_libretin', nd_establecimiento = $this->nd_establecimiento, nd_punto_emision = $this->nd_punto_emision, nd_secuencial = $this->nd_secuencial, nd_ambiente = $this->nd_ambiente, nd_cliente = $this->nd_cliente, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_iddocmod = $this->nd_iddocmod, nd_cod_docmod = '$this->nd_cod_docmod', nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_subtotal = $this->nd_subtotal, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_estado = '$this->nd_estado', nd_estado_sri = '$this->nd_estado_sri', nd_error_sri = '$this->nd_error_sri', nd_fecha_autorizacion = " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", nd_autorizacion = '$this->nd_autorizacion', nd_usuario = '$this->nd_usuario', nd_clave = '$this->nd_clave', nd_fecha_docmod = " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ""; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_tipo_comprobante = '$this->nd_tipo_comprobante', nd_empresa = '$this->nd_empresa', nd_libretin = $this->nd_libretin, nd_tipo_libretin = '$this->nd_tipo_libretin', nd_establecimiento = $this->nd_establecimiento, nd_punto_emision = $this->nd_punto_emision, nd_secuencial = $this->nd_secuencial, nd_ambiente = $this->nd_ambiente, nd_cliente = $this->nd_cliente, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_iddocmod = $this->nd_iddocmod, nd_cod_docmod = '$this->nd_cod_docmod', nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_subtotal = $this->nd_subtotal, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_estado = '$this->nd_estado', nd_estado_sri = '$this->nd_estado_sri', nd_error_sri = '$this->nd_error_sri', nd_fecha_autorizacion = " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", nd_autorizacion = '$this->nd_autorizacion', nd_usuario = '$this->nd_usuario', nd_clave = '$this->nd_clave', nd_fecha_docmod = " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ""; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_tipo_comprobante = '$this->nd_tipo_comprobante', nd_empresa = '$this->nd_empresa', nd_libretin = $this->nd_libretin, nd_tipo_libretin = '$this->nd_tipo_libretin', nd_establecimiento = $this->nd_establecimiento, nd_punto_emision = $this->nd_punto_emision, nd_secuencial = $this->nd_secuencial, nd_ambiente = $this->nd_ambiente, nd_cliente = $this->nd_cliente, nd_fecha = EXTEND('$this->nd_fecha', YEAR TO DAY), nd_iddocmod = $this->nd_iddocmod, nd_cod_docmod = '$this->nd_cod_docmod', nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_subtotal = $this->nd_subtotal, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_estado = '$this->nd_estado', nd_estado_sri = '$this->nd_estado_sri', nd_error_sri = '$this->nd_error_sri', nd_fecha_autorizacion = EXTEND('$this->nd_fecha_autorizacion', YEAR TO DAY), nd_autorizacion = '$this->nd_autorizacion', nd_usuario = '$this->nd_usuario', nd_clave = '$this->nd_clave', nd_fecha_docmod = EXTEND('$this->nd_fecha_docmod', YEAR TO DAY)"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_tipo_comprobante = '$this->nd_tipo_comprobante', nd_empresa = '$this->nd_empresa', nd_libretin = $this->nd_libretin, nd_tipo_libretin = '$this->nd_tipo_libretin', nd_establecimiento = $this->nd_establecimiento, nd_punto_emision = $this->nd_punto_emision, nd_secuencial = $this->nd_secuencial, nd_ambiente = $this->nd_ambiente, nd_cliente = $this->nd_cliente, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_iddocmod = $this->nd_iddocmod, nd_cod_docmod = '$this->nd_cod_docmod', nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_subtotal = $this->nd_subtotal, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_estado = '$this->nd_estado', nd_estado_sri = '$this->nd_estado_sri', nd_error_sri = '$this->nd_error_sri', nd_fecha_autorizacion = " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", nd_autorizacion = '$this->nd_autorizacion', nd_usuario = '$this->nd_usuario', nd_clave = '$this->nd_clave', nd_fecha_docmod = " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ""; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_tipo_comprobante = '$this->nd_tipo_comprobante', nd_empresa = '$this->nd_empresa', nd_libretin = $this->nd_libretin, nd_tipo_libretin = '$this->nd_tipo_libretin', nd_establecimiento = $this->nd_establecimiento, nd_punto_emision = $this->nd_punto_emision, nd_secuencial = $this->nd_secuencial, nd_ambiente = $this->nd_ambiente, nd_cliente = $this->nd_cliente, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_iddocmod = $this->nd_iddocmod, nd_cod_docmod = '$this->nd_cod_docmod', nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_subtotal = $this->nd_subtotal, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_estado = '$this->nd_estado', nd_estado_sri = '$this->nd_estado_sri', nd_error_sri = '$this->nd_error_sri', nd_fecha_autorizacion = " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", nd_autorizacion = '$this->nd_autorizacion', nd_usuario = '$this->nd_usuario', nd_clave = '$this->nd_clave', nd_fecha_docmod = " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ""; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_tipo_comprobante = '$this->nd_tipo_comprobante', nd_empresa = '$this->nd_empresa', nd_libretin = $this->nd_libretin, nd_tipo_libretin = '$this->nd_tipo_libretin', nd_establecimiento = $this->nd_establecimiento, nd_punto_emision = $this->nd_punto_emision, nd_secuencial = $this->nd_secuencial, nd_ambiente = $this->nd_ambiente, nd_cliente = $this->nd_cliente, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_iddocmod = $this->nd_iddocmod, nd_cod_docmod = '$this->nd_cod_docmod', nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_subtotal = $this->nd_subtotal, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_estado = '$this->nd_estado', nd_estado_sri = '$this->nd_estado_sri', nd_error_sri = '$this->nd_error_sri', nd_fecha_autorizacion = " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", nd_autorizacion = '$this->nd_autorizacion', nd_usuario = '$this->nd_usuario', nd_clave = '$this->nd_clave', nd_fecha_docmod = " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ""; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE nd_numero = $this->nd_numero ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE nd_numero = $this->nd_numero ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE nd_numero = $this->nd_numero ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE nd_numero = $this->nd_numero ";  
              }  
              else  
              {
                  $comando .= " WHERE nd_numero = $this->nd_numero ";  
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
                                  form_del_nota_debito_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->nd_tipo_comprobante = $this->nd_tipo_comprobante_before_qstr;
              $this->nd_empresa = $this->nd_empresa_before_qstr;
              $this->nd_tipo_libretin = $this->nd_tipo_libretin_before_qstr;
              $this->nd_cod_docmod = $this->nd_cod_docmod_before_qstr;
              $this->nd_serie_docmod = $this->nd_serie_docmod_before_qstr;
              $this->nd_estado = $this->nd_estado_before_qstr;
              $this->nd_estado_sri = $this->nd_estado_sri_before_qstr;
              $this->nd_error_sri = $this->nd_error_sri_before_qstr;
              $this->nd_autorizacion = $this->nd_autorizacion_before_qstr;
              $this->nd_usuario = $this->nd_usuario_before_qstr;
              $this->nd_clave = $this->nd_clave_before_qstr;
              $this->detalle = $this->detalle_before_qstr;
              $this->forma_pago = $this->forma_pago_before_qstr;
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['nd_numero'])) { $this->nd_numero = $NM_val_form['nd_numero']; }
              elseif (isset($this->nd_numero)) { $this->nm_limpa_alfa($this->nd_numero); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_tipo_comprobante'])) { $this->nd_tipo_comprobante = $NM_val_form['nd_tipo_comprobante']; }
              elseif (isset($this->nd_tipo_comprobante)) { $this->nm_limpa_alfa($this->nd_tipo_comprobante); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_empresa'])) { $this->nd_empresa = $NM_val_form['nd_empresa']; }
              elseif (isset($this->nd_empresa)) { $this->nm_limpa_alfa($this->nd_empresa); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_libretin'])) { $this->nd_libretin = $NM_val_form['nd_libretin']; }
              elseif (isset($this->nd_libretin)) { $this->nm_limpa_alfa($this->nd_libretin); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_tipo_libretin'])) { $this->nd_tipo_libretin = $NM_val_form['nd_tipo_libretin']; }
              elseif (isset($this->nd_tipo_libretin)) { $this->nm_limpa_alfa($this->nd_tipo_libretin); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_establecimiento'])) { $this->nd_establecimiento = $NM_val_form['nd_establecimiento']; }
              elseif (isset($this->nd_establecimiento)) { $this->nm_limpa_alfa($this->nd_establecimiento); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_punto_emision'])) { $this->nd_punto_emision = $NM_val_form['nd_punto_emision']; }
              elseif (isset($this->nd_punto_emision)) { $this->nm_limpa_alfa($this->nd_punto_emision); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_secuencial'])) { $this->nd_secuencial = $NM_val_form['nd_secuencial']; }
              elseif (isset($this->nd_secuencial)) { $this->nm_limpa_alfa($this->nd_secuencial); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_ambiente'])) { $this->nd_ambiente = $NM_val_form['nd_ambiente']; }
              elseif (isset($this->nd_ambiente)) { $this->nm_limpa_alfa($this->nd_ambiente); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_cliente'])) { $this->nd_cliente = $NM_val_form['nd_cliente']; }
              elseif (isset($this->nd_cliente)) { $this->nm_limpa_alfa($this->nd_cliente); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_iddocmod'])) { $this->nd_iddocmod = $NM_val_form['nd_iddocmod']; }
              elseif (isset($this->nd_iddocmod)) { $this->nm_limpa_alfa($this->nd_iddocmod); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_cod_docmod'])) { $this->nd_cod_docmod = $NM_val_form['nd_cod_docmod']; }
              elseif (isset($this->nd_cod_docmod)) { $this->nm_limpa_alfa($this->nd_cod_docmod); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_serie_docmod'])) { $this->nd_serie_docmod = $NM_val_form['nd_serie_docmod']; }
              elseif (isset($this->nd_serie_docmod)) { $this->nm_limpa_alfa($this->nd_serie_docmod); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_secuencial_docmod'])) { $this->nd_secuencial_docmod = $NM_val_form['nd_secuencial_docmod']; }
              elseif (isset($this->nd_secuencial_docmod)) { $this->nm_limpa_alfa($this->nd_secuencial_docmod); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal_iva'])) { $this->nd_subtotal_iva = $NM_val_form['nd_subtotal_iva']; }
              elseif (isset($this->nd_subtotal_iva)) { $this->nm_limpa_alfa($this->nd_subtotal_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal_cero'])) { $this->nd_subtotal_cero = $NM_val_form['nd_subtotal_cero']; }
              elseif (isset($this->nd_subtotal_cero)) { $this->nm_limpa_alfa($this->nd_subtotal_cero); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal_no_objeto'])) { $this->nd_subtotal_no_objeto = $NM_val_form['nd_subtotal_no_objeto']; }
              elseif (isset($this->nd_subtotal_no_objeto)) { $this->nm_limpa_alfa($this->nd_subtotal_no_objeto); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal_excento'])) { $this->nd_subtotal_excento = $NM_val_form['nd_subtotal_excento']; }
              elseif (isset($this->nd_subtotal_excento)) { $this->nm_limpa_alfa($this->nd_subtotal_excento); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal'])) { $this->nd_subtotal = $NM_val_form['nd_subtotal']; }
              elseif (isset($this->nd_subtotal)) { $this->nm_limpa_alfa($this->nd_subtotal); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_valor_ice'])) { $this->nd_valor_ice = $NM_val_form['nd_valor_ice']; }
              elseif (isset($this->nd_valor_ice)) { $this->nm_limpa_alfa($this->nd_valor_ice); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_valor_iva'])) { $this->nd_valor_iva = $NM_val_form['nd_valor_iva']; }
              elseif (isset($this->nd_valor_iva)) { $this->nm_limpa_alfa($this->nd_valor_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_total'])) { $this->nd_total = $NM_val_form['nd_total']; }
              elseif (isset($this->nd_total)) { $this->nm_limpa_alfa($this->nd_total); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_estado'])) { $this->nd_estado = $NM_val_form['nd_estado']; }
              elseif (isset($this->nd_estado)) { $this->nm_limpa_alfa($this->nd_estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_estado_sri'])) { $this->nd_estado_sri = $NM_val_form['nd_estado_sri']; }
              elseif (isset($this->nd_estado_sri)) { $this->nm_limpa_alfa($this->nd_estado_sri); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_error_sri'])) { $this->nd_error_sri = $NM_val_form['nd_error_sri']; }
              elseif (isset($this->nd_error_sri)) { $this->nm_limpa_alfa($this->nd_error_sri); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_autorizacion'])) { $this->nd_autorizacion = $NM_val_form['nd_autorizacion']; }
              elseif (isset($this->nd_autorizacion)) { $this->nm_limpa_alfa($this->nd_autorizacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_usuario'])) { $this->nd_usuario = $NM_val_form['nd_usuario']; }
              elseif (isset($this->nd_usuario)) { $this->nm_limpa_alfa($this->nd_usuario); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_clave'])) { $this->nd_clave = $NM_val_form['nd_clave']; }
              elseif (isset($this->nd_clave)) { $this->nm_limpa_alfa($this->nd_clave); }
              if     (isset($NM_val_form) && isset($NM_val_form['detalle'])) { $this->detalle = $NM_val_form['detalle']; }
              elseif (isset($this->detalle)) { $this->nm_limpa_alfa($this->detalle); }
              if     (isset($NM_val_form) && isset($NM_val_form['forma_pago'])) { $this->forma_pago = $NM_val_form['forma_pago']; }
              elseif (isset($this->forma_pago)) { $this->nm_limpa_alfa($this->forma_pago); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('titulo', 'nd_libretin', 'establecimiento', 'punto_emision', 'secuencial', 'tipo_libretin', 'ambiente', 'nd_fecha', 'nd_establecimiento', 'nd_punto_emision', 'nd_secuencial', 'nd_tipo_libretin', 'nd_ambiente', 'nd_tipo_comprobante', 'nd_numero', 'nd_empresa', 'nd_estado', 'nd_estado_sri', 'nd_error_sri', 'nd_fecha_autorizacion', 'nd_autorizacion', 'nd_usuario', 'nd_clave', 'nd_iddocmod', 'tipo_doc_sustento', 'serie_sustento', 'secuencial_sustento', 'fecha_sustento', 'nd_cliente', 'nd_cod_docmod', 'nd_serie_docmod', 'nd_secuencial_docmod', 'nd_fecha_docmod', 'nombre_cliente', 'ruc_cliente', 'direccion_cliente', 'email_cliente', 'detalle', 'nd_subtotal', 'nd_subtotal_iva', 'nd_subtotal_cero', 'nd_subtotal_no_objeto', 'nd_subtotal_excento', 'nd_valor_ice', 'nd_valor_iva', 'nd_total', 'forma_pago'), $aDoNotUpdate);
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
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
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_del_nota_debito_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod) VALUES ($this->nd_numero, '$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_libretin, '$this->nd_tipo_libretin', $this->nd_establecimiento, $this->nd_punto_emision, $this->nd_secuencial, $this->nd_ambiente, $this->nd_cliente, #$this->nd_fecha#, $this->nd_iddocmod, '$this->nd_cod_docmod', '$this->nd_serie_docmod', $this->nd_secuencial_docmod, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_subtotal, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_error_sri', #$this->nd_fecha_autorizacion#, '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_clave', #$this->nd_fecha_docmod#)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod) VALUES (" . $NM_seq_auto . "$this->nd_numero, '$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_libretin, '$this->nd_tipo_libretin', $this->nd_establecimiento, $this->nd_punto_emision, $this->nd_secuencial, $this->nd_ambiente, $this->nd_cliente, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_iddocmod, '$this->nd_cod_docmod', '$this->nd_serie_docmod', $this->nd_secuencial_docmod, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_subtotal, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_error_sri', " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_clave', " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod) VALUES (" . $NM_seq_auto . "$this->nd_numero, '$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_libretin, '$this->nd_tipo_libretin', $this->nd_establecimiento, $this->nd_punto_emision, $this->nd_secuencial, $this->nd_ambiente, $this->nd_cliente, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_iddocmod, '$this->nd_cod_docmod', '$this->nd_serie_docmod', $this->nd_secuencial_docmod, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_subtotal, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_error_sri', " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_clave', " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod) VALUES (" . $NM_seq_auto . "$this->nd_numero, '$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_libretin, '$this->nd_tipo_libretin', $this->nd_establecimiento, $this->nd_punto_emision, $this->nd_secuencial, $this->nd_ambiente, $this->nd_cliente, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_iddocmod, '$this->nd_cod_docmod', '$this->nd_serie_docmod', $this->nd_secuencial_docmod, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_subtotal, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_error_sri', " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_clave', " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod) VALUES (" . $NM_seq_auto . "$this->nd_numero, '$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_libretin, '$this->nd_tipo_libretin', $this->nd_establecimiento, $this->nd_punto_emision, $this->nd_secuencial, $this->nd_ambiente, $this->nd_cliente, EXTEND('$this->nd_fecha', YEAR TO DAY), $this->nd_iddocmod, '$this->nd_cod_docmod', '$this->nd_serie_docmod', $this->nd_secuencial_docmod, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_subtotal, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_error_sri', EXTEND('$this->nd_fecha_autorizacion', YEAR TO DAY), '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_clave', EXTEND('$this->nd_fecha_docmod', YEAR TO DAY))"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod) VALUES (" . $NM_seq_auto . "$this->nd_numero, '$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_libretin, '$this->nd_tipo_libretin', $this->nd_establecimiento, $this->nd_punto_emision, $this->nd_secuencial, $this->nd_ambiente, $this->nd_cliente, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_iddocmod, '$this->nd_cod_docmod', '$this->nd_serie_docmod', $this->nd_secuencial_docmod, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_subtotal, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_error_sri', " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_clave', " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod) VALUES (" . $NM_seq_auto . "$this->nd_numero, '$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_libretin, '$this->nd_tipo_libretin', $this->nd_establecimiento, $this->nd_punto_emision, $this->nd_secuencial, $this->nd_ambiente, $this->nd_cliente, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_iddocmod, '$this->nd_cod_docmod', '$this->nd_serie_docmod', $this->nd_secuencial_docmod, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_subtotal, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_error_sri', " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_clave', " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ")"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod) VALUES (" . $NM_seq_auto . "$this->nd_numero, '$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_libretin, '$this->nd_tipo_libretin', $this->nd_establecimiento, $this->nd_punto_emision, $this->nd_secuencial, $this->nd_ambiente, $this->nd_cliente, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_iddocmod, '$this->nd_cod_docmod', '$this->nd_serie_docmod', $this->nd_secuencial_docmod, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_subtotal, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_error_sri', " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_clave', " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ")"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod) VALUES (" . $NM_seq_auto . "$this->nd_numero, '$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_libretin, '$this->nd_tipo_libretin', $this->nd_establecimiento, $this->nd_punto_emision, $this->nd_secuencial, $this->nd_ambiente, $this->nd_cliente, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_iddocmod, '$this->nd_cod_docmod', '$this->nd_serie_docmod', $this->nd_secuencial_docmod, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_subtotal, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_error_sri', " . $this->Ini->date_delim . $this->nd_fecha_autorizacion . $this->Ini->date_delim1 . ", '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_clave', " . $this->Ini->date_delim . $this->nd_fecha_docmod . $this->Ini->date_delim1 . ")"; 
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
                              form_del_nota_debito_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->nd_tipo_comprobante = $this->nd_tipo_comprobante_before_qstr;
              $this->nd_empresa = $this->nd_empresa_before_qstr;
              $this->nd_tipo_libretin = $this->nd_tipo_libretin_before_qstr;
              $this->nd_cod_docmod = $this->nd_cod_docmod_before_qstr;
              $this->nd_serie_docmod = $this->nd_serie_docmod_before_qstr;
              $this->nd_estado = $this->nd_estado_before_qstr;
              $this->nd_estado_sri = $this->nd_estado_sri_before_qstr;
              $this->nd_error_sri = $this->nd_error_sri_before_qstr;
              $this->nd_autorizacion = $this->nd_autorizacion_before_qstr;
              $this->nd_usuario = $this->nd_usuario_before_qstr;
              $this->nd_clave = $this->nd_clave_before_qstr;
              $this->detalle = $this->detalle_before_qstr;
              $this->forma_pago = $this->forma_pago_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->nd_tipo_comprobante = $this->nd_tipo_comprobante_before_qstr;
              $this->nd_empresa = $this->nd_empresa_before_qstr;
              $this->nd_tipo_libretin = $this->nd_tipo_libretin_before_qstr;
              $this->nd_cod_docmod = $this->nd_cod_docmod_before_qstr;
              $this->nd_serie_docmod = $this->nd_serie_docmod_before_qstr;
              $this->nd_estado = $this->nd_estado_before_qstr;
              $this->nd_estado_sri = $this->nd_estado_sri_before_qstr;
              $this->nd_error_sri = $this->nd_error_sri_before_qstr;
              $this->nd_autorizacion = $this->nd_autorizacion_before_qstr;
              $this->nd_usuario = $this->nd_usuario_before_qstr;
              $this->nd_clave = $this->nd_clave_before_qstr;
              $this->detalle = $this->detalle_before_qstr;
              $this->forma_pago = $this->forma_pago_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->nmgp_botoes['Nuevo'] = "on";
              $this->nmgp_botoes['ride'] = "on";
              $this->nmgp_botoes['autorizar'] = "on";
              $this->nmgp_botoes['Anular'] = "on";
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->nd_numero = substr($this->Db->qstr($this->nd_numero), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';
          if ($bDelecaoOk)
          {
              $sDetailWhere = "dnd_nota_debito = " . $this->nd_numero . "";
              $this->form_del_detalle_nota_debito_mob->ini_controle();
              if ($this->form_del_detalle_nota_debito_mob->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }
          if ($bDelecaoOk)
          {
              $sDetailWhere = "fp_nota_debito = " . $this->nd_numero . "";
              $this->form_del_forma_pago_nota_debito_mob->ini_controle();
              if ($this->form_del_forma_pago_nota_debito_mob->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where nd_numero = $this->nd_numero "); 
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
                          form_del_nota_debito_mob_pack_ajax_response();
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total']);
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['decimal_db'] == ",")
        {
           $this->nm_troca_decimal(",", ".");
        }
        $_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_nd_estado = $this->nd_estado;
    $original_nd_estado_sri = $this->nd_estado_sri;
    $original_nd_libretin = $this->nd_libretin;
    $original_nd_numero = $this->nd_numero;
    $original_nd_tipo_libretin = $this->nd_tipo_libretin;
}
if (!isset($this->sc_temp_Igtech_AutorizacionInmediata)) {$this->sc_temp_Igtech_AutorizacionInmediata = (isset($_SESSION['Igtech_AutorizacionInmediata'])) ? $_SESSION['Igtech_AutorizacionInmediata'] : "";}
if (!isset($this->sc_temp_var_mensaje)) {$this->sc_temp_var_mensaje = (isset($_SESSION['var_mensaje'])) ? $_SESSION['var_mensaje'] : "";}
if (!isset($this->sc_temp_var_procesar)) {$this->sc_temp_var_procesar = (isset($_SESSION['var_procesar'])) ? $_SESSION['var_procesar'] : "";}
  if($this->sc_temp_var_procesar==true){
	if($this->nd_estado =='R'){
		$check_sql = "SELECT sp_del_secuencial_documento (".$this->nd_libretin .",'05',".$this->nd_numero .")";
		 
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
   $sErrorIndex = 'geral_form_del_nota_debito_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_del_nota_debito_mob';
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
        $this->NM_ajax_info['redirExit']['action'] = "form_del_nota_debito_mob_fim.php?script_case_init=" . $this->form_encode_input($this->Ini->sc_page);
        $this->NM_ajax_info['redirExit']['metodo'] = 'location';
        $this->NM_ajax_info['redirExit']['target'] = "_self";
        $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_nota_debito') . "/";
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan'])
        {
            $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_nota_debito_mob";
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan'] = false;
        }
        $_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
        form_del_nota_debito_mob_pack_ajax_response();
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
 $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_nota_debito') . "/";
 if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan'])
 {
     $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_nota_debito_mob";
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan'] = false;
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
        action="form_del_nota_debito_mob_fim.php"
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

   $this->sc_ajax_javascript('recargar_marco');
	if($this->nd_tipo_libretin =='E' and $this->nd_estado_sri <>'AUTORIZADO'){
		$this->sc_temp_var_mensaje=$this->autorizar_nd($this->nd_numero ,$this->sc_temp_Igtech_AutorizacionInmediata);
		$this->nm_mens_alert[] = $this->sc_temp_var_mensaje; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert($this->sc_temp_var_mensaje); }}
}else{
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $this->sc_temp_var_mensaje;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_del_nota_debito_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_del_nota_debito_mob';
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
        $this->NM_ajax_info['redirExit']['action'] = "form_del_nota_debito_mob_fim.php?script_case_init=" . $this->form_encode_input($this->Ini->sc_page);
        $this->NM_ajax_info['redirExit']['metodo'] = 'location';
        $this->NM_ajax_info['redirExit']['target'] = "_self";
        $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_nota_debito') . "/";
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan'])
        {
            $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_nota_debito_mob";
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan'] = false;
        }
        $_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
        form_del_nota_debito_mob_pack_ajax_response();
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
 $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_nota_debito') . "/";
 if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan'])
 {
     $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_nota_debito_mob";
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_outra_jan'] = false;
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
        action="form_del_nota_debito_mob_fim.php"
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
    if (($original_nd_estado != $this->nd_estado || (isset($bFlagRead_nd_estado) && $bFlagRead_nd_estado)))
    {
        $this->ajax_return_values_nd_estado(true);
    }
    if (($original_nd_estado_sri != $this->nd_estado_sri || (isset($bFlagRead_nd_estado_sri) && $bFlagRead_nd_estado_sri)))
    {
        $this->ajax_return_values_nd_estado_sri(true);
    }
    if (($original_nd_libretin != $this->nd_libretin || (isset($bFlagRead_nd_libretin) && $bFlagRead_nd_libretin)))
    {
        $this->ajax_return_values_nd_libretin(true);
    }
    if (($original_nd_numero != $this->nd_numero || (isset($bFlagRead_nd_numero) && $bFlagRead_nd_numero)))
    {
        $this->ajax_return_values_nd_numero(true);
    }
    if (($original_nd_tipo_libretin != $this->nd_tipo_libretin || (isset($bFlagRead_nd_tipo_libretin) && $bFlagRead_nd_tipo_libretin)))
    {
        $this->ajax_return_values_nd_tipo_libretin(true);
    }
}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off'; 
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
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['decimal_db'] == ",")
   {
       $this->nm_troca_decimal(".", ",");
   }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['parms'] = "nd_numero?#?$this->nd_numero?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->nd_numero = null === $this->nd_numero ? null : substr($this->Db->qstr($this->nd_numero), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, str_replace (convert(char(10),nd_fecha,102), '.', '-') + ' ' + convert(char(8),nd_fecha,20), nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, str_replace (convert(char(10),nd_fecha_autorizacion,102), '.', '-') + ' ' + convert(char(8),nd_fecha_autorizacion,20), nd_autorizacion, nd_usuario, nd_clave, str_replace (convert(char(10),nd_fecha_docmod,102), '.', '-') + ' ' + convert(char(8),nd_fecha_docmod,20) from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, convert(char(23),nd_fecha,121), nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, convert(char(23),nd_fecha_autorizacion,121), nd_autorizacion, nd_usuario, nd_clave, convert(char(23),nd_fecha_docmod,121) from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, EXTEND(nd_fecha, YEAR TO DAY), nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, EXTEND(nd_fecha_autorizacion, YEAR TO DAY), nd_autorizacion, nd_usuario, nd_clave, EXTEND(nd_fecha_docmod, YEAR TO DAY) from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_libretin, nd_tipo_libretin, nd_establecimiento, nd_punto_emision, nd_secuencial, nd_ambiente, nd_cliente, nd_fecha, nd_iddocmod, nd_cod_docmod, nd_serie_docmod, nd_secuencial_docmod, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_subtotal, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_error_sri, nd_fecha_autorizacion, nd_autorizacion, nd_usuario, nd_clave, nd_fecha_docmod from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = "(nd_numero=" . $_SESSION['var_id_nota_debito'] . ")";
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (!empty($sc_where))
              {
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  {
                     $aWhere[] = "nd_numero = $this->nd_numero"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                     $aWhere[] = "nd_numero = $this->nd_numero"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                     $aWhere[] = "nd_numero = $this->nd_numero"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                     $aWhere[] = "nd_numero = $this->nd_numero"; 
                  }  
                  else  
                  {
                     $aWhere[] = "nd_numero = $this->nd_numero"; 
                  }
              } 
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "nd_numero";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start']) ;  
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['Nuevo'] = $this->nmgp_botoes['Nuevo'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['ride'] = $this->nmgp_botoes['ride'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['autorizar'] = $this->nmgp_botoes['autorizar'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes['Anular'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['empty_filter'] = true;
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
              $this->nd_numero = $rs->fields[0] ; 
              $this->nmgp_dados_select['nd_numero'] = $this->nd_numero;
              $this->nd_tipo_comprobante = $rs->fields[1] ; 
              $this->nmgp_dados_select['nd_tipo_comprobante'] = $this->nd_tipo_comprobante;
              $this->nd_empresa = $rs->fields[2] ; 
              $this->nmgp_dados_select['nd_empresa'] = $this->nd_empresa;
              $this->nd_libretin = $rs->fields[3] ; 
              $this->nmgp_dados_select['nd_libretin'] = $this->nd_libretin;
              $this->nd_tipo_libretin = $rs->fields[4] ; 
              $this->nmgp_dados_select['nd_tipo_libretin'] = $this->nd_tipo_libretin;
              $this->nd_establecimiento = $rs->fields[5] ; 
              $this->nmgp_dados_select['nd_establecimiento'] = $this->nd_establecimiento;
              $this->nd_punto_emision = $rs->fields[6] ; 
              $this->nmgp_dados_select['nd_punto_emision'] = $this->nd_punto_emision;
              $this->nd_secuencial = $rs->fields[7] ; 
              $this->nmgp_dados_select['nd_secuencial'] = $this->nd_secuencial;
              $this->nd_ambiente = $rs->fields[8] ; 
              $this->nmgp_dados_select['nd_ambiente'] = $this->nd_ambiente;
              $this->nd_cliente = $rs->fields[9] ; 
              $this->nmgp_dados_select['nd_cliente'] = $this->nd_cliente;
              $this->nd_fecha = $rs->fields[10] ; 
              $this->nmgp_dados_select['nd_fecha'] = $this->nd_fecha;
              $this->nd_iddocmod = $rs->fields[11] ; 
              $this->nmgp_dados_select['nd_iddocmod'] = $this->nd_iddocmod;
              $this->nd_cod_docmod = $rs->fields[12] ; 
              $this->nmgp_dados_select['nd_cod_docmod'] = $this->nd_cod_docmod;
              $this->nd_serie_docmod = $rs->fields[13] ; 
              $this->nmgp_dados_select['nd_serie_docmod'] = $this->nd_serie_docmod;
              $this->nd_secuencial_docmod = $rs->fields[14] ; 
              $this->nmgp_dados_select['nd_secuencial_docmod'] = $this->nd_secuencial_docmod;
              $this->nd_subtotal_iva = $rs->fields[15] ; 
              $this->nmgp_dados_select['nd_subtotal_iva'] = $this->nd_subtotal_iva;
              $this->nd_subtotal_cero = $rs->fields[16] ; 
              $this->nmgp_dados_select['nd_subtotal_cero'] = $this->nd_subtotal_cero;
              $this->nd_subtotal_no_objeto = $rs->fields[17] ; 
              $this->nmgp_dados_select['nd_subtotal_no_objeto'] = $this->nd_subtotal_no_objeto;
              $this->nd_subtotal_excento = $rs->fields[18] ; 
              $this->nmgp_dados_select['nd_subtotal_excento'] = $this->nd_subtotal_excento;
              $this->nd_subtotal = $rs->fields[19] ; 
              $this->nmgp_dados_select['nd_subtotal'] = $this->nd_subtotal;
              $this->nd_valor_ice = $rs->fields[20] ; 
              $this->nmgp_dados_select['nd_valor_ice'] = $this->nd_valor_ice;
              $this->nd_valor_iva = $rs->fields[21] ; 
              $this->nmgp_dados_select['nd_valor_iva'] = $this->nd_valor_iva;
              $this->nd_total = $rs->fields[22] ; 
              $this->nmgp_dados_select['nd_total'] = $this->nd_total;
              $this->nd_estado = $rs->fields[23] ; 
              $this->nmgp_dados_select['nd_estado'] = $this->nd_estado;
              $this->nd_estado_sri = $rs->fields[24] ; 
              $this->nmgp_dados_select['nd_estado_sri'] = $this->nd_estado_sri;
              $this->nd_error_sri = $rs->fields[25] ; 
              $this->nmgp_dados_select['nd_error_sri'] = $this->nd_error_sri;
              $this->nd_fecha_autorizacion = $rs->fields[26] ; 
              $this->nmgp_dados_select['nd_fecha_autorizacion'] = $this->nd_fecha_autorizacion;
              $this->nd_autorizacion = $rs->fields[27] ; 
              $this->nmgp_dados_select['nd_autorizacion'] = $this->nd_autorizacion;
              $this->nd_usuario = $rs->fields[28] ; 
              $this->nmgp_dados_select['nd_usuario'] = $this->nd_usuario;
              $this->nd_clave = $rs->fields[29] ; 
              $this->nmgp_dados_select['nd_clave'] = $this->nd_clave;
              $this->nd_fecha_docmod = $rs->fields[30] ; 
              $this->nmgp_dados_select['nd_fecha_docmod'] = $this->nd_fecha_docmod;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->nd_numero = (string)$this->nd_numero; 
              $this->nd_libretin = (string)$this->nd_libretin; 
              $this->nd_establecimiento = (string)$this->nd_establecimiento; 
              $this->nd_punto_emision = (string)$this->nd_punto_emision; 
              $this->nd_secuencial = (string)$this->nd_secuencial; 
              $this->nd_ambiente = (string)$this->nd_ambiente; 
              $this->nd_cliente = (string)$this->nd_cliente; 
              $this->nd_iddocmod = (string)$this->nd_iddocmod; 
              $this->nd_secuencial_docmod = (string)$this->nd_secuencial_docmod; 
              $this->nd_subtotal_iva = (string)$this->nd_subtotal_iva; 
              $this->nd_subtotal_cero = (string)$this->nd_subtotal_cero; 
              $this->nd_subtotal_no_objeto = (string)$this->nd_subtotal_no_objeto; 
              $this->nd_subtotal_excento = (string)$this->nd_subtotal_excento; 
              $this->nd_subtotal = (string)$this->nd_subtotal; 
              $this->nd_valor_ice = (string)$this->nd_valor_ice; 
              $this->nd_valor_iva = (string)$this->nd_valor_iva; 
              $this->nd_total = (string)$this->nd_total; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['parms'] = "nd_numero?#?$this->nd_numero?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['reg_start'] < $qt_geral_reg_form_del_nota_debito_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opcao']   = '';
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
              $this->nd_numero = "";  
              $this->nmgp_dados_form["nd_numero"] = $this->nd_numero;
              $this->nd_tipo_comprobante = "";  
              $this->nmgp_dados_form["nd_tipo_comprobante"] = $this->nd_tipo_comprobante;
              $this->nd_empresa = "" . $_SESSION['Igtech_RucEmpresa'] . "";  
              $this->nmgp_dados_form["nd_empresa"] = $this->nd_empresa;
              $this->nd_libretin = "";  
              $this->nmgp_dados_form["nd_libretin"] = $this->nd_libretin;
              $this->nd_tipo_libretin = "";  
              $this->nmgp_dados_form["nd_tipo_libretin"] = $this->nd_tipo_libretin;
              $this->nd_establecimiento = "";  
              $this->nmgp_dados_form["nd_establecimiento"] = $this->nd_establecimiento;
              $this->nd_punto_emision = "";  
              $this->nmgp_dados_form["nd_punto_emision"] = $this->nd_punto_emision;
              $this->nd_secuencial = "";  
              $this->nmgp_dados_form["nd_secuencial"] = $this->nd_secuencial;
              $this->nd_ambiente = "";  
              $this->nmgp_dados_form["nd_ambiente"] = $this->nd_ambiente;
              $this->nd_cliente = "";  
              $this->nmgp_dados_form["nd_cliente"] = $this->nd_cliente;
              $this->nd_fecha = "";  
              $this->nd_fecha_hora = "" ;  
              $this->nmgp_dados_form["nd_fecha"] = $this->nd_fecha;
              $this->nd_iddocmod = "";  
              $this->nmgp_dados_form["nd_iddocmod"] = $this->nd_iddocmod;
              $this->nd_cod_docmod = "";  
              $this->nmgp_dados_form["nd_cod_docmod"] = $this->nd_cod_docmod;
              $this->nd_serie_docmod = "";  
              $this->nmgp_dados_form["nd_serie_docmod"] = $this->nd_serie_docmod;
              $this->nd_secuencial_docmod = "";  
              $this->nmgp_dados_form["nd_secuencial_docmod"] = $this->nd_secuencial_docmod;
              $this->nd_subtotal_iva = "";  
              $this->nmgp_dados_form["nd_subtotal_iva"] = $this->nd_subtotal_iva;
              $this->nd_subtotal_cero = "";  
              $this->nmgp_dados_form["nd_subtotal_cero"] = $this->nd_subtotal_cero;
              $this->nd_subtotal_no_objeto = "";  
              $this->nmgp_dados_form["nd_subtotal_no_objeto"] = $this->nd_subtotal_no_objeto;
              $this->nd_subtotal_excento = "";  
              $this->nmgp_dados_form["nd_subtotal_excento"] = $this->nd_subtotal_excento;
              $this->nd_subtotal = "";  
              $this->nmgp_dados_form["nd_subtotal"] = $this->nd_subtotal;
              $this->nd_valor_ice = "";  
              $this->nmgp_dados_form["nd_valor_ice"] = $this->nd_valor_ice;
              $this->nd_valor_iva = "";  
              $this->nmgp_dados_form["nd_valor_iva"] = $this->nd_valor_iva;
              $this->nd_total = "";  
              $this->nmgp_dados_form["nd_total"] = $this->nd_total;
              $this->nd_estado = "";  
              $this->nmgp_dados_form["nd_estado"] = $this->nd_estado;
              $this->nd_estado_sri = "";  
              $this->nmgp_dados_form["nd_estado_sri"] = $this->nd_estado_sri;
              $this->nd_error_sri = "";  
              $this->nmgp_dados_form["nd_error_sri"] = $this->nd_error_sri;
              $this->nd_fecha_autorizacion = "";  
              $this->nd_fecha_autorizacion_hora = "" ;  
              $this->nmgp_dados_form["nd_fecha_autorizacion"] = $this->nd_fecha_autorizacion;
              $this->nd_autorizacion = "";  
              $this->nmgp_dados_form["nd_autorizacion"] = $this->nd_autorizacion;
              $this->nd_usuario = "";  
              $this->nmgp_dados_form["nd_usuario"] = $this->nd_usuario;
              $this->nd_clave = "";  
              $this->nmgp_dados_form["nd_clave"] = $this->nd_clave;
              $this->nd_fecha_docmod = "";  
              $this->nd_fecha_docmod_hora = "" ;  
              $this->nmgp_dados_form["nd_fecha_docmod"] = $this->nd_fecha_docmod;
              $this->establecimiento = "";  
              $this->nmgp_dados_form["establecimiento"] = $this->establecimiento;
              $this->punto_emision = "";  
              $this->nmgp_dados_form["punto_emision"] = $this->punto_emision;
              $this->secuencial = "";  
              $this->nmgp_dados_form["secuencial"] = $this->secuencial;
              $this->tipo_libretin = "";  
              $this->nmgp_dados_form["tipo_libretin"] = $this->tipo_libretin;
              $this->ambiente = "";  
              $this->nmgp_dados_form["ambiente"] = $this->ambiente;
              $this->nombre_cliente = "";  
              $this->nmgp_dados_form["nombre_cliente"] = $this->nombre_cliente;
              $this->ruc_cliente = "";  
              $this->nmgp_dados_form["ruc_cliente"] = $this->ruc_cliente;
              $this->direccion_cliente = "";  
              $this->nmgp_dados_form["direccion_cliente"] = $this->direccion_cliente;
              $this->email_cliente = "";  
              $this->nmgp_dados_form["email_cliente"] = $this->email_cliente;
              $this->titulo = "";  
              $this->nmgp_dados_form["titulo"] = $this->titulo;
              $this->detalle = "";  
              $this->nmgp_dados_form["detalle"] = $this->detalle;
              $this->forma_pago = "";  
              $this->nmgp_dados_form["forma_pago"] = $this->forma_pago;
              $this->tipo_doc_sustento = "";  
              $this->nmgp_dados_form["tipo_doc_sustento"] = $this->tipo_doc_sustento;
              $this->serie_sustento = "";  
              $this->nmgp_dados_form["serie_sustento"] = $this->serie_sustento;
              $this->secuencial_sustento = "";  
              $this->nmgp_dados_form["secuencial_sustento"] = $this->secuencial_sustento;
              $this->fecha_sustento = "";  
              $this->fecha_sustento_hora = "" ;  
              $this->nmgp_dados_form["fecha_sustento"] = $this->fecha_sustento;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['foreign_key'] as $sFKName => $sFKValue)
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_debito_mob']['embutida_parms'] = "var_nota_debito*scin" . $this->nmgp_dados_form['nd_numero'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_forma_pago_nota_debito_mob']['embutida_parms'] = "var_factura*scin" . $this->nmgp_dados_form['nd_numero'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
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
       $this->SC_log_arr['keys']['nd_numero'] =  $this->nd_numero;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dados_select'];
           $this->SC_log_arr['fields']['nd_tipo_comprobante']['0'] =  $nmgp_dados_select['nd_tipo_comprobante'];
           $this->SC_log_arr['fields']['nd_empresa']['0'] =  $nmgp_dados_select['nd_empresa'];
           $this->SC_log_arr['fields']['nd_libretin']['0'] =  $nmgp_dados_select['nd_libretin'];
           $this->SC_log_arr['fields']['nd_tipo_libretin']['0'] =  $nmgp_dados_select['nd_tipo_libretin'];
           $this->SC_log_arr['fields']['nd_establecimiento']['0'] =  $nmgp_dados_select['nd_establecimiento'];
           $this->SC_log_arr['fields']['nd_punto_emision']['0'] =  $nmgp_dados_select['nd_punto_emision'];
           $this->SC_log_arr['fields']['nd_secuencial']['0'] =  $nmgp_dados_select['nd_secuencial'];
           $this->SC_log_arr['fields']['nd_ambiente']['0'] =  $nmgp_dados_select['nd_ambiente'];
           $this->SC_log_arr['fields']['nd_cliente']['0'] =  $nmgp_dados_select['nd_cliente'];
           $this->SC_log_arr['fields']['nd_fecha']['0'] =  $nmgp_dados_select['nd_fecha'];
           $this->SC_log_arr['fields']['nd_iddocmod']['0'] =  $nmgp_dados_select['nd_iddocmod'];
           $this->SC_log_arr['fields']['nd_cod_docmod']['0'] =  $nmgp_dados_select['nd_cod_docmod'];
           $this->SC_log_arr['fields']['nd_serie_docmod']['0'] =  $nmgp_dados_select['nd_serie_docmod'];
           $this->SC_log_arr['fields']['nd_secuencial_docmod']['0'] =  $nmgp_dados_select['nd_secuencial_docmod'];
           $this->SC_log_arr['fields']['nd_subtotal_iva']['0'] =  $nmgp_dados_select['nd_subtotal_iva'];
           $this->SC_log_arr['fields']['nd_subtotal_cero']['0'] =  $nmgp_dados_select['nd_subtotal_cero'];
           $this->SC_log_arr['fields']['nd_subtotal_no_objeto']['0'] =  $nmgp_dados_select['nd_subtotal_no_objeto'];
           $this->SC_log_arr['fields']['nd_subtotal_excento']['0'] =  $nmgp_dados_select['nd_subtotal_excento'];
           $this->SC_log_arr['fields']['nd_subtotal']['0'] =  $nmgp_dados_select['nd_subtotal'];
           $this->SC_log_arr['fields']['nd_valor_ice']['0'] =  $nmgp_dados_select['nd_valor_ice'];
           $this->SC_log_arr['fields']['nd_valor_iva']['0'] =  $nmgp_dados_select['nd_valor_iva'];
           $this->SC_log_arr['fields']['nd_total']['0'] =  $nmgp_dados_select['nd_total'];
           $this->SC_log_arr['fields']['nd_estado']['0'] =  $nmgp_dados_select['nd_estado'];
           $this->SC_log_arr['fields']['nd_estado_sri']['0'] =  $nmgp_dados_select['nd_estado_sri'];
           $this->SC_log_arr['fields']['nd_error_sri']['0'] =  $nmgp_dados_select['nd_error_sri'];
           $this->SC_log_arr['fields']['nd_fecha_autorizacion']['0'] =  $nmgp_dados_select['nd_fecha_autorizacion'];
           $this->SC_log_arr['fields']['nd_autorizacion']['0'] =  $nmgp_dados_select['nd_autorizacion'];
           $this->SC_log_arr['fields']['nd_usuario']['0'] =  $nmgp_dados_select['nd_usuario'];
           $this->SC_log_arr['fields']['nd_clave']['0'] =  $nmgp_dados_select['nd_clave'];
           $this->SC_log_arr['fields']['nd_fecha_docmod']['0'] =  $nmgp_dados_select['nd_fecha_docmod'];
           $this->SC_log_arr['fields']['detalle']['0'] =  $nmgp_dados_select['detalle'];
           $this->SC_log_arr['fields']['forma_pago']['0'] =  $nmgp_dados_select['forma_pago'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['nd_tipo_comprobante']['1'] =  $this->nd_tipo_comprobante;
       $this->SC_log_arr['fields']['nd_empresa']['1'] =  $this->nd_empresa;
       $this->SC_log_arr['fields']['nd_libretin']['1'] =  $this->nd_libretin;
       $this->SC_log_arr['fields']['nd_tipo_libretin']['1'] =  $this->nd_tipo_libretin;
       $this->SC_log_arr['fields']['nd_establecimiento']['1'] =  $this->nd_establecimiento;
       $this->SC_log_arr['fields']['nd_punto_emision']['1'] =  $this->nd_punto_emision;
       $this->SC_log_arr['fields']['nd_secuencial']['1'] =  $this->nd_secuencial;
       $this->SC_log_arr['fields']['nd_ambiente']['1'] =  $this->nd_ambiente;
       $this->SC_log_arr['fields']['nd_cliente']['1'] =  $this->nd_cliente;
       $this->SC_log_arr['fields']['nd_fecha']['1'] =  $this->nd_fecha;
       $this->SC_log_arr['fields']['nd_iddocmod']['1'] =  $this->nd_iddocmod;
       $this->SC_log_arr['fields']['nd_cod_docmod']['1'] =  $this->nd_cod_docmod;
       $this->SC_log_arr['fields']['nd_serie_docmod']['1'] =  $this->nd_serie_docmod;
       $this->SC_log_arr['fields']['nd_secuencial_docmod']['1'] =  $this->nd_secuencial_docmod;
       $this->SC_log_arr['fields']['nd_subtotal_iva']['1'] =  $this->nd_subtotal_iva;
       $this->SC_log_arr['fields']['nd_subtotal_cero']['1'] =  $this->nd_subtotal_cero;
       $this->SC_log_arr['fields']['nd_subtotal_no_objeto']['1'] =  $this->nd_subtotal_no_objeto;
       $this->SC_log_arr['fields']['nd_subtotal_excento']['1'] =  $this->nd_subtotal_excento;
       $this->SC_log_arr['fields']['nd_subtotal']['1'] =  $this->nd_subtotal;
       $this->SC_log_arr['fields']['nd_valor_ice']['1'] =  $this->nd_valor_ice;
       $this->SC_log_arr['fields']['nd_valor_iva']['1'] =  $this->nd_valor_iva;
       $this->SC_log_arr['fields']['nd_total']['1'] =  $this->nd_total;
       $this->SC_log_arr['fields']['nd_estado']['1'] =  $this->nd_estado;
       $this->SC_log_arr['fields']['nd_estado_sri']['1'] =  $this->nd_estado_sri;
       $this->SC_log_arr['fields']['nd_error_sri']['1'] =  $this->nd_error_sri;
       $this->SC_log_arr['fields']['nd_fecha_autorizacion']['1'] =  $this->nd_fecha_autorizacion;
       $this->SC_log_arr['fields']['nd_autorizacion']['1'] =  $this->nd_autorizacion;
       $this->SC_log_arr['fields']['nd_usuario']['1'] =  $this->nd_usuario;
       $this->SC_log_arr['fields']['nd_clave']['1'] =  $this->nd_clave;
       $this->SC_log_arr['fields']['nd_fecha_docmod']['1'] =  $this->nd_fecha_docmod;
       $this->SC_log_arr['fields']['detalle']['1'] =  $this->detalle;
       $this->SC_log_arr['fields']['forma_pago']['1'] =  $this->forma_pago;
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
       $Log_labels['nd_tipo_comprobante'] =  "{lang_tipo_comprobante}";
       $Log_labels['nd_empresa'] =  "{lang_empresa}";
       $Log_labels['nd_libretin'] =  "{lang_libretin}";
       $Log_labels['nd_tipo_libretin'] =  "{lang_tipo_libretin}";
       $Log_labels['nd_establecimiento'] =  "{lang_establecimiento}";
       $Log_labels['nd_punto_emision'] =  "{lang_punto_emision}";
       $Log_labels['nd_secuencial'] =  "{lang_secuencial}";
       $Log_labels['nd_ambiente'] =  "{lang_tipo_ambiente}";
       $Log_labels['nd_cliente'] =  "{lang_cliente}";
       $Log_labels['nd_fecha'] =  "{lang_fecha}";
       $Log_labels['nd_iddocmod'] =  "{lang_factura}";
       $Log_labels['nd_cod_docmod'] =  "{lang_tipo_comprobante}";
       $Log_labels['nd_serie_docmod'] =  "{lang_serie_sri}";
       $Log_labels['nd_secuencial_docmod'] =  "{lang_secuencial}";
       $Log_labels['nd_subtotal_iva'] =  "{lang_subtotal_iva}";
       $Log_labels['nd_subtotal_cero'] =  "{lang_subtotal_cero}";
       $Log_labels['nd_subtotal_no_objeto'] =  "{lang_subtotal_no_objeto}";
       $Log_labels['nd_subtotal_excento'] =  "{lang_subtotal_exento}";
       $Log_labels['nd_subtotal'] =  "{lang_subtotal}";
       $Log_labels['nd_valor_ice'] =  "{lang_ice}";
       $Log_labels['nd_valor_iva'] =  "{lang_iva}";
       $Log_labels['nd_total'] =  "{lang_othr_chrt_totl}";
       $Log_labels['nd_estado'] =  "{lang_estado}";
       $Log_labels['nd_estado_sri'] =  "{lang_estado_sri}";
       $Log_labels['nd_error_sri'] =  "{lang_mensaje}";
       $Log_labels['nd_fecha_autorizacion'] =  "{lang_fecha_autorizacion}";
       $Log_labels['nd_autorizacion'] =  "{lang_autorizacion}";
       $Log_labels['nd_usuario'] =  "{lang_usuario}";
       $Log_labels['nd_clave'] =  "{lang_clave_acceso}";
       $Log_labels['nd_fecha_docmod'] =  "{lang_fecha}";
       $Log_labels['detalle'] =  "detalle";
       $Log_labels['forma_pago'] =  "forma_pago";
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function nd_iddocmod_onChange()
{
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
$original_nd_iddocmod = $this->nd_iddocmod;
$original_nd_cod_docmod = $this->nd_cod_docmod;
$original_tipo_doc_sustento = $this->tipo_doc_sustento;
$original_nd_serie_docmod = $this->nd_serie_docmod;
$original_serie_sustento = $this->serie_sustento;
$original_nd_secuencial_docmod = $this->nd_secuencial_docmod;
$original_secuencial_sustento = $this->secuencial_sustento;
$original_nd_fecha_docmod = $this->nd_fecha_docmod;
$original_fecha_sustento = $this->fecha_sustento;
$original_nombre_cliente = $this->nombre_cliente;
$original_ruc_cliente = $this->ruc_cliente;
$original_direccion_cliente = $this->direccion_cliente;
$original_email_cliente = $this->email_cliente;
$original_nd_cliente = $this->nd_cliente;
$original_nd_numero = $this->nd_numero;
$original_nd_subtotal = $this->nd_subtotal;
$original_nd_subtotal_iva = $this->nd_subtotal_iva;
$original_nd_subtotal_cero = $this->nd_subtotal_cero;
$original_nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto;
$original_nd_subtotal_excento = $this->nd_subtotal_excento;
$original_nd_valor_ice = $this->nd_valor_ice;
$original_nd_valor_iva = $this->nd_valor_iva;
$original_nd_total = $this->nd_total;

$check_sql = "SELECT 
					fac_tipo_comprobante,
					tc_nombre,
					est_codigo||'-'||pen_serie,
					fac_secuencial,
					fac_fecha,
					cl_nombre,
					cl_identificacion,
					cl_direccion,
					cl_email,
					cl_id
			FROM v_del_datos_factura_sri
			INNER JOIN sri_tipo_comprobante ON fac_tipo_comprobante=tc_codigo
			WHERE fac_numero=".$this->nd_iddocmod ;
 
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
	$this->nd_cod_docmod 			=$this->rs[0][0];
	$this->tipo_doc_sustento 		=$this->rs[0][1];
	$this->nd_serie_docmod 		=$this->rs[0][2];
	$this->serie_sustento 		=$this->rs[0][2];
	$this->nd_secuencial_docmod 	=$this->rs[0][3];
	$this->secuencial_sustento 	=$this->rs[0][3];
	$this->nd_fecha_docmod =$this->rs[0][4];
	$this->fecha_sustento 		=$this->rs[0][4];
	$this->nombre_cliente 	=$this->rs[0][5];
	$this->ruc_cliente 		=$this->rs[0][6];
	$this->direccion_cliente 	=$this->rs[0][7];
	$this->email_cliente 		=$this->rs[0][8];
	$this->nd_cliente 		=$this->rs[0][9];
}

$check_sql="SELECT 
					nd_subtotal,
					nd_subtotal_iva,
					nd_subtotal_cero,
					nd_subtotal_no_objeto,
					nd_subtotal_excento,
					nd_valor_ice,
					nd_valor_iva,
					nd_total
				FROM del_nota_debito
				WHERE nd_numero=".$this->nd_numero ;
 
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
	$this->nd_subtotal 			=$this->rs[0][0];
	$this->nd_subtotal_iva 		=$this->rs[0][1];
	$this->nd_subtotal_cero 		=$this->rs[0][2];
	$this->nd_subtotal_no_objeto 	=$this->rs[0][3];
	$this->nd_subtotal_excento 	=$this->rs[0][4];
	$this->nd_valor_ice 			=$this->rs[0][5];
	$this->nd_valor_iva 			=$this->rs[0][6];
	$this->nd_total 				=$this->rs[0][7];
}


$modificado_nd_iddocmod = $this->nd_iddocmod;
$modificado_nd_cod_docmod = $this->nd_cod_docmod;
$modificado_tipo_doc_sustento = $this->tipo_doc_sustento;
$modificado_nd_serie_docmod = $this->nd_serie_docmod;
$modificado_serie_sustento = $this->serie_sustento;
$modificado_nd_secuencial_docmod = $this->nd_secuencial_docmod;
$modificado_secuencial_sustento = $this->secuencial_sustento;
$modificado_nd_fecha_docmod = $this->nd_fecha_docmod;
$modificado_fecha_sustento = $this->fecha_sustento;
$modificado_nombre_cliente = $this->nombre_cliente;
$modificado_ruc_cliente = $this->ruc_cliente;
$modificado_direccion_cliente = $this->direccion_cliente;
$modificado_email_cliente = $this->email_cliente;
$modificado_nd_cliente = $this->nd_cliente;
$modificado_nd_numero = $this->nd_numero;
$modificado_nd_subtotal = $this->nd_subtotal;
$modificado_nd_subtotal_iva = $this->nd_subtotal_iva;
$modificado_nd_subtotal_cero = $this->nd_subtotal_cero;
$modificado_nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto;
$modificado_nd_subtotal_excento = $this->nd_subtotal_excento;
$modificado_nd_valor_ice = $this->nd_valor_ice;
$modificado_nd_valor_iva = $this->nd_valor_iva;
$modificado_nd_total = $this->nd_total;
$this->nm_formatar_campos('nd_iddocmod', 'nd_cod_docmod', 'tipo_doc_sustento', 'nd_serie_docmod', 'serie_sustento', 'nd_secuencial_docmod', 'secuencial_sustento', 'nd_fecha_docmod', 'fecha_sustento', 'nombre_cliente', 'ruc_cliente', 'direccion_cliente', 'email_cliente', 'nd_cliente', 'nd_numero', 'nd_subtotal', 'nd_subtotal_iva', 'nd_subtotal_cero', 'nd_subtotal_no_objeto', 'nd_subtotal_excento', 'nd_valor_ice', 'nd_valor_iva', 'nd_total');
if ($original_nd_iddocmod !== $modificado_nd_iddocmod || isset($this->nmgp_cmp_readonly['nd_iddocmod']) || (isset($bFlagRead_nd_iddocmod) && $bFlagRead_nd_iddocmod))
{
    $this->ajax_return_values_nd_iddocmod(true);
}
if ($original_nd_cod_docmod !== $modificado_nd_cod_docmod || isset($this->nmgp_cmp_readonly['nd_cod_docmod']) || (isset($bFlagRead_nd_cod_docmod) && $bFlagRead_nd_cod_docmod))
{
    $this->ajax_return_values_nd_cod_docmod(true);
}
if ($original_tipo_doc_sustento !== $modificado_tipo_doc_sustento || isset($this->nmgp_cmp_readonly['tipo_doc_sustento']) || (isset($bFlagRead_tipo_doc_sustento) && $bFlagRead_tipo_doc_sustento))
{
    $this->ajax_return_values_tipo_doc_sustento(true);
}
if ($original_nd_serie_docmod !== $modificado_nd_serie_docmod || isset($this->nmgp_cmp_readonly['nd_serie_docmod']) || (isset($bFlagRead_nd_serie_docmod) && $bFlagRead_nd_serie_docmod))
{
    $this->ajax_return_values_nd_serie_docmod(true);
}
if ($original_serie_sustento !== $modificado_serie_sustento || isset($this->nmgp_cmp_readonly['serie_sustento']) || (isset($bFlagRead_serie_sustento) && $bFlagRead_serie_sustento))
{
    $this->ajax_return_values_serie_sustento(true);
}
if ($original_nd_secuencial_docmod !== $modificado_nd_secuencial_docmod || isset($this->nmgp_cmp_readonly['nd_secuencial_docmod']) || (isset($bFlagRead_nd_secuencial_docmod) && $bFlagRead_nd_secuencial_docmod))
{
    $this->ajax_return_values_nd_secuencial_docmod(true);
}
if ($original_secuencial_sustento !== $modificado_secuencial_sustento || isset($this->nmgp_cmp_readonly['secuencial_sustento']) || (isset($bFlagRead_secuencial_sustento) && $bFlagRead_secuencial_sustento))
{
    $this->ajax_return_values_secuencial_sustento(true);
}
if ($original_nd_fecha_docmod !== $modificado_nd_fecha_docmod || isset($this->nmgp_cmp_readonly['nd_fecha_docmod']) || (isset($bFlagRead_nd_fecha_docmod) && $bFlagRead_nd_fecha_docmod))
{
    $this->ajax_return_values_nd_fecha_docmod(true);
}
if ($original_fecha_sustento !== $modificado_fecha_sustento || isset($this->nmgp_cmp_readonly['fecha_sustento']) || (isset($bFlagRead_fecha_sustento) && $bFlagRead_fecha_sustento))
{
    $this->ajax_return_values_fecha_sustento(true);
}
if ($original_nombre_cliente !== $modificado_nombre_cliente || isset($this->nmgp_cmp_readonly['nombre_cliente']) || (isset($bFlagRead_nombre_cliente) && $bFlagRead_nombre_cliente))
{
    $this->ajax_return_values_nombre_cliente(true);
}
if ($original_ruc_cliente !== $modificado_ruc_cliente || isset($this->nmgp_cmp_readonly['ruc_cliente']) || (isset($bFlagRead_ruc_cliente) && $bFlagRead_ruc_cliente))
{
    $this->ajax_return_values_ruc_cliente(true);
}
if ($original_direccion_cliente !== $modificado_direccion_cliente || isset($this->nmgp_cmp_readonly['direccion_cliente']) || (isset($bFlagRead_direccion_cliente) && $bFlagRead_direccion_cliente))
{
    $this->ajax_return_values_direccion_cliente(true);
}
if ($original_email_cliente !== $modificado_email_cliente || isset($this->nmgp_cmp_readonly['email_cliente']) || (isset($bFlagRead_email_cliente) && $bFlagRead_email_cliente))
{
    $this->ajax_return_values_email_cliente(true);
}
if ($original_nd_cliente !== $modificado_nd_cliente || isset($this->nmgp_cmp_readonly['nd_cliente']) || (isset($bFlagRead_nd_cliente) && $bFlagRead_nd_cliente))
{
    $this->ajax_return_values_nd_cliente(true);
}
if ($original_nd_numero !== $modificado_nd_numero || isset($this->nmgp_cmp_readonly['nd_numero']) || (isset($bFlagRead_nd_numero) && $bFlagRead_nd_numero))
{
    $this->ajax_return_values_nd_numero(true);
}
if ($original_nd_subtotal !== $modificado_nd_subtotal || isset($this->nmgp_cmp_readonly['nd_subtotal']) || (isset($bFlagRead_nd_subtotal) && $bFlagRead_nd_subtotal))
{
    $this->ajax_return_values_nd_subtotal(true);
}
if ($original_nd_subtotal_iva !== $modificado_nd_subtotal_iva || isset($this->nmgp_cmp_readonly['nd_subtotal_iva']) || (isset($bFlagRead_nd_subtotal_iva) && $bFlagRead_nd_subtotal_iva))
{
    $this->ajax_return_values_nd_subtotal_iva(true);
}
if ($original_nd_subtotal_cero !== $modificado_nd_subtotal_cero || isset($this->nmgp_cmp_readonly['nd_subtotal_cero']) || (isset($bFlagRead_nd_subtotal_cero) && $bFlagRead_nd_subtotal_cero))
{
    $this->ajax_return_values_nd_subtotal_cero(true);
}
if ($original_nd_subtotal_no_objeto !== $modificado_nd_subtotal_no_objeto || isset($this->nmgp_cmp_readonly['nd_subtotal_no_objeto']) || (isset($bFlagRead_nd_subtotal_no_objeto) && $bFlagRead_nd_subtotal_no_objeto))
{
    $this->ajax_return_values_nd_subtotal_no_objeto(true);
}
if ($original_nd_subtotal_excento !== $modificado_nd_subtotal_excento || isset($this->nmgp_cmp_readonly['nd_subtotal_excento']) || (isset($bFlagRead_nd_subtotal_excento) && $bFlagRead_nd_subtotal_excento))
{
    $this->ajax_return_values_nd_subtotal_excento(true);
}
if ($original_nd_valor_ice !== $modificado_nd_valor_ice || isset($this->nmgp_cmp_readonly['nd_valor_ice']) || (isset($bFlagRead_nd_valor_ice) && $bFlagRead_nd_valor_ice))
{
    $this->ajax_return_values_nd_valor_ice(true);
}
if ($original_nd_valor_iva !== $modificado_nd_valor_iva || isset($this->nmgp_cmp_readonly['nd_valor_iva']) || (isset($bFlagRead_nd_valor_iva) && $bFlagRead_nd_valor_iva))
{
    $this->ajax_return_values_nd_valor_iva(true);
}
if ($original_nd_total !== $modificado_nd_total || isset($this->nmgp_cmp_readonly['nd_total']) || (isset($bFlagRead_nd_total) && $bFlagRead_nd_total))
{
    $this->ajax_return_values_nd_total(true);
}
$this->NM_ajax_info['event_field'] = 'nd';
form_del_nota_debito_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function nd_libretin_onBlur()
{
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
$original_nd_libretin = $this->nd_libretin;
$original_nd_establecimiento = $this->nd_establecimiento;
$original_nd_punto_emision = $this->nd_punto_emision;
$original_nd_secuencial = $this->nd_secuencial;
$original_nd_ambiente = $this->nd_ambiente;
$original_nd_tipo_libretin = $this->nd_tipo_libretin;
$original_establecimiento = $this->establecimiento;
$original_punto_emision = $this->punto_emision;
$original_secuencial = $this->secuencial;
$original_ambiente = $this->ambiente;
$original_tipo_libretin = $this->tipo_libretin;
$original_nd_autorizacion = $this->nd_autorizacion;
$original_nd_estado_sri = $this->nd_estado_sri;

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
         			estado_sri
			 FROM v_del_libretin
			 WHERE lib_id=".$this->nd_libretin ;
 
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
    $this->nd_establecimiento  = $this->rs[0][0];
    $this->nd_punto_emision  = $this->rs[0][1];
	$this->nd_secuencial = $this->rs[0][2];
	$this->nd_ambiente =$this->rs[0][3];
	$this->nd_tipo_libretin =$this->rs[0][4];
	$this->establecimiento  = $this->rs[0][5];
    $this->punto_emision  = $this->rs[0][6];
	$this->secuencial = $this->rs[0][7];
	$this->ambiente =$this->rs[0][8];
	$this->tipo_libretin =$this->rs[0][9];
	$this->nd_autorizacion =$this->rs[0][10];
	$this->nd_estado_sri =$this->rs[0][11];
}


$modificado_nd_libretin = $this->nd_libretin;
$modificado_nd_establecimiento = $this->nd_establecimiento;
$modificado_nd_punto_emision = $this->nd_punto_emision;
$modificado_nd_secuencial = $this->nd_secuencial;
$modificado_nd_ambiente = $this->nd_ambiente;
$modificado_nd_tipo_libretin = $this->nd_tipo_libretin;
$modificado_establecimiento = $this->establecimiento;
$modificado_punto_emision = $this->punto_emision;
$modificado_secuencial = $this->secuencial;
$modificado_ambiente = $this->ambiente;
$modificado_tipo_libretin = $this->tipo_libretin;
$modificado_nd_autorizacion = $this->nd_autorizacion;
$modificado_nd_estado_sri = $this->nd_estado_sri;
$this->nm_formatar_campos('nd_libretin', 'nd_establecimiento', 'nd_punto_emision', 'nd_secuencial', 'nd_ambiente', 'nd_tipo_libretin', 'establecimiento', 'punto_emision', 'secuencial', 'ambiente', 'tipo_libretin', 'nd_autorizacion', 'nd_estado_sri');
if ($original_nd_libretin !== $modificado_nd_libretin || isset($this->nmgp_cmp_readonly['nd_libretin']) || (isset($bFlagRead_nd_libretin) && $bFlagRead_nd_libretin))
{
    $this->ajax_return_values_nd_libretin(true);
}
if ($original_nd_establecimiento !== $modificado_nd_establecimiento || isset($this->nmgp_cmp_readonly['nd_establecimiento']) || (isset($bFlagRead_nd_establecimiento) && $bFlagRead_nd_establecimiento))
{
    $this->ajax_return_values_nd_establecimiento(true);
}
if ($original_nd_punto_emision !== $modificado_nd_punto_emision || isset($this->nmgp_cmp_readonly['nd_punto_emision']) || (isset($bFlagRead_nd_punto_emision) && $bFlagRead_nd_punto_emision))
{
    $this->ajax_return_values_nd_punto_emision(true);
}
if ($original_nd_secuencial !== $modificado_nd_secuencial || isset($this->nmgp_cmp_readonly['nd_secuencial']) || (isset($bFlagRead_nd_secuencial) && $bFlagRead_nd_secuencial))
{
    $this->ajax_return_values_nd_secuencial(true);
}
if ($original_nd_ambiente !== $modificado_nd_ambiente || isset($this->nmgp_cmp_readonly['nd_ambiente']) || (isset($bFlagRead_nd_ambiente) && $bFlagRead_nd_ambiente))
{
    $this->ajax_return_values_nd_ambiente(true);
}
if ($original_nd_tipo_libretin !== $modificado_nd_tipo_libretin || isset($this->nmgp_cmp_readonly['nd_tipo_libretin']) || (isset($bFlagRead_nd_tipo_libretin) && $bFlagRead_nd_tipo_libretin))
{
    $this->ajax_return_values_nd_tipo_libretin(true);
}
if ($original_establecimiento !== $modificado_establecimiento || isset($this->nmgp_cmp_readonly['establecimiento']) || (isset($bFlagRead_establecimiento) && $bFlagRead_establecimiento))
{
    $this->ajax_return_values_establecimiento(true);
}
if ($original_punto_emision !== $modificado_punto_emision || isset($this->nmgp_cmp_readonly['punto_emision']) || (isset($bFlagRead_punto_emision) && $bFlagRead_punto_emision))
{
    $this->ajax_return_values_punto_emision(true);
}
if ($original_secuencial !== $modificado_secuencial || isset($this->nmgp_cmp_readonly['secuencial']) || (isset($bFlagRead_secuencial) && $bFlagRead_secuencial))
{
    $this->ajax_return_values_secuencial(true);
}
if ($original_ambiente !== $modificado_ambiente || isset($this->nmgp_cmp_readonly['ambiente']) || (isset($bFlagRead_ambiente) && $bFlagRead_ambiente))
{
    $this->ajax_return_values_ambiente(true);
}
if ($original_tipo_libretin !== $modificado_tipo_libretin || isset($this->nmgp_cmp_readonly['tipo_libretin']) || (isset($bFlagRead_tipo_libretin) && $bFlagRead_tipo_libretin))
{
    $this->ajax_return_values_tipo_libretin(true);
}
if ($original_nd_autorizacion !== $modificado_nd_autorizacion || isset($this->nmgp_cmp_readonly['nd_autorizacion']) || (isset($bFlagRead_nd_autorizacion) && $bFlagRead_nd_autorizacion))
{
    $this->ajax_return_values_nd_autorizacion(true);
}
if ($original_nd_estado_sri !== $modificado_nd_estado_sri || isset($this->nmgp_cmp_readonly['nd_estado_sri']) || (isset($bFlagRead_nd_estado_sri) && $bFlagRead_nd_estado_sri))
{
    $this->ajax_return_values_nd_estado_sri(true);
}
$this->NM_ajax_info['event_field'] = 'nd';
form_del_nota_debito_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function nd_libretin_onChange()
{
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
$original_nd_libretin = $this->nd_libretin;
$original_nd_establecimiento = $this->nd_establecimiento;
$original_nd_punto_emision = $this->nd_punto_emision;
$original_nd_secuencial = $this->nd_secuencial;
$original_nd_ambiente = $this->nd_ambiente;
$original_nd_tipo_libretin = $this->nd_tipo_libretin;
$original_establecimiento = $this->establecimiento;
$original_punto_emision = $this->punto_emision;
$original_secuencial = $this->secuencial;
$original_ambiente = $this->ambiente;
$original_tipo_libretin = $this->tipo_libretin;
$original_nd_autorizacion = $this->nd_autorizacion;
$original_nd_estado_sri = $this->nd_estado_sri;

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
         			estado_sri
			 FROM v_del_libretin
			 WHERE lib_id=".$this->nd_libretin ;
 
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
    $this->nd_establecimiento  = $this->rs[0][0];
    $this->nd_punto_emision  = $this->rs[0][1];
	$this->nd_secuencial = $this->rs[0][2];
	$this->nd_ambiente =$this->rs[0][3];
	$this->nd_tipo_libretin =$this->rs[0][4];
	$this->establecimiento  = $this->rs[0][5];
    $this->punto_emision  = $this->rs[0][6];
	$this->secuencial = $this->rs[0][7];
	$this->ambiente =$this->rs[0][8];
	$this->tipo_libretin =$this->rs[0][9];
	$this->nd_autorizacion =$this->rs[0][10];
	$this->nd_estado_sri =$this->rs[0][11];
}


$modificado_nd_libretin = $this->nd_libretin;
$modificado_nd_establecimiento = $this->nd_establecimiento;
$modificado_nd_punto_emision = $this->nd_punto_emision;
$modificado_nd_secuencial = $this->nd_secuencial;
$modificado_nd_ambiente = $this->nd_ambiente;
$modificado_nd_tipo_libretin = $this->nd_tipo_libretin;
$modificado_establecimiento = $this->establecimiento;
$modificado_punto_emision = $this->punto_emision;
$modificado_secuencial = $this->secuencial;
$modificado_ambiente = $this->ambiente;
$modificado_tipo_libretin = $this->tipo_libretin;
$modificado_nd_autorizacion = $this->nd_autorizacion;
$modificado_nd_estado_sri = $this->nd_estado_sri;
$this->nm_formatar_campos('nd_libretin', 'nd_establecimiento', 'nd_punto_emision', 'nd_secuencial', 'nd_ambiente', 'nd_tipo_libretin', 'establecimiento', 'punto_emision', 'secuencial', 'ambiente', 'tipo_libretin', 'nd_autorizacion', 'nd_estado_sri');
if ($original_nd_libretin !== $modificado_nd_libretin || isset($this->nmgp_cmp_readonly['nd_libretin']) || (isset($bFlagRead_nd_libretin) && $bFlagRead_nd_libretin))
{
    $this->ajax_return_values_nd_libretin(true);
}
if ($original_nd_establecimiento !== $modificado_nd_establecimiento || isset($this->nmgp_cmp_readonly['nd_establecimiento']) || (isset($bFlagRead_nd_establecimiento) && $bFlagRead_nd_establecimiento))
{
    $this->ajax_return_values_nd_establecimiento(true);
}
if ($original_nd_punto_emision !== $modificado_nd_punto_emision || isset($this->nmgp_cmp_readonly['nd_punto_emision']) || (isset($bFlagRead_nd_punto_emision) && $bFlagRead_nd_punto_emision))
{
    $this->ajax_return_values_nd_punto_emision(true);
}
if ($original_nd_secuencial !== $modificado_nd_secuencial || isset($this->nmgp_cmp_readonly['nd_secuencial']) || (isset($bFlagRead_nd_secuencial) && $bFlagRead_nd_secuencial))
{
    $this->ajax_return_values_nd_secuencial(true);
}
if ($original_nd_ambiente !== $modificado_nd_ambiente || isset($this->nmgp_cmp_readonly['nd_ambiente']) || (isset($bFlagRead_nd_ambiente) && $bFlagRead_nd_ambiente))
{
    $this->ajax_return_values_nd_ambiente(true);
}
if ($original_nd_tipo_libretin !== $modificado_nd_tipo_libretin || isset($this->nmgp_cmp_readonly['nd_tipo_libretin']) || (isset($bFlagRead_nd_tipo_libretin) && $bFlagRead_nd_tipo_libretin))
{
    $this->ajax_return_values_nd_tipo_libretin(true);
}
if ($original_establecimiento !== $modificado_establecimiento || isset($this->nmgp_cmp_readonly['establecimiento']) || (isset($bFlagRead_establecimiento) && $bFlagRead_establecimiento))
{
    $this->ajax_return_values_establecimiento(true);
}
if ($original_punto_emision !== $modificado_punto_emision || isset($this->nmgp_cmp_readonly['punto_emision']) || (isset($bFlagRead_punto_emision) && $bFlagRead_punto_emision))
{
    $this->ajax_return_values_punto_emision(true);
}
if ($original_secuencial !== $modificado_secuencial || isset($this->nmgp_cmp_readonly['secuencial']) || (isset($bFlagRead_secuencial) && $bFlagRead_secuencial))
{
    $this->ajax_return_values_secuencial(true);
}
if ($original_ambiente !== $modificado_ambiente || isset($this->nmgp_cmp_readonly['ambiente']) || (isset($bFlagRead_ambiente) && $bFlagRead_ambiente))
{
    $this->ajax_return_values_ambiente(true);
}
if ($original_tipo_libretin !== $modificado_tipo_libretin || isset($this->nmgp_cmp_readonly['tipo_libretin']) || (isset($bFlagRead_tipo_libretin) && $bFlagRead_tipo_libretin))
{
    $this->ajax_return_values_tipo_libretin(true);
}
if ($original_nd_autorizacion !== $modificado_nd_autorizacion || isset($this->nmgp_cmp_readonly['nd_autorizacion']) || (isset($bFlagRead_nd_autorizacion) && $bFlagRead_nd_autorizacion))
{
    $this->ajax_return_values_nd_autorizacion(true);
}
if ($original_nd_estado_sri !== $modificado_nd_estado_sri || isset($this->nmgp_cmp_readonly['nd_estado_sri']) || (isset($bFlagRead_nd_estado_sri) && $bFlagRead_nd_estado_sri))
{
    $this->ajax_return_values_nd_estado_sri(true);
}
$this->NM_ajax_info['event_field'] = 'nd';
form_del_nota_debito_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function scajaxbutton_autorizar_onClick()
{
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
$original_nd_numero = $this->nd_numero;

$this->sc_ajax_message ($this->autorizar_nd($this->nd_numero ,'S'), "Aviso", "modal = Y & button = Y & button_label = Ok & body_icon = Y & redir = form_del_nota_debito.php", "toast=Y&toasto_pos=center-start&type=success");



$modificado_nd_numero = $this->nd_numero;
$this->nm_formatar_campos('nd_numero');
if ($original_nd_numero !== $modificado_nd_numero || isset($this->nmgp_cmp_readonly['nd_numero']) || (isset($bFlagRead_nd_numero) && $bFlagRead_nd_numero))
{
    $this->ajax_return_values_nd_numero(true);
}
$this->NM_ajax_info['event_field'] = 'scajaxbutton';
form_del_nota_debito_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function scajaxbutton_Anular_onClick()
{
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
$original_nd_numero = $this->nd_numero;

$update_sql = "UPDATE del_nota_debito 
					SET  
					   nd_estado='N',
					   nd_estado_sri='ANULADO'
					WHERE
						nd_numero=".$this->nd_numero .";";

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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$update_sql = "UPDATE del_detalle_nota_debito
					SET  
					   dnd_estado='N'
					WHERE
						dnd_nota_debito=".$this->nd_numero .";";

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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$this->nm_mens_alert[] = $this->Ini->Nm_lang['lang_doc_anulado']; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert($this->Ini->Nm_lang['lang_doc_anulado']); }$modificado_nd_numero = $this->nd_numero;
$this->nm_formatar_campos('nd_numero');
if ($original_nd_numero !== $modificado_nd_numero || isset($this->nmgp_cmp_readonly['nd_numero']) || (isset($bFlagRead_nd_numero) && $bFlagRead_nd_numero))
{
    $this->ajax_return_values_nd_numero(true);
}
$this->NM_ajax_info['event_field'] = 'scajaxbutton';
form_del_nota_debito_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function crearNombreCarpeta($xmlComprobante) {
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function crearNombreFichero($xmlComprobante,$extension) {
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
        $nombre = "";
        $codDoc = $xmlComprobante->codDoc;
        $this->establecimiento = $xmlComprobante->establecimiento;
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
        return $nombre . $this->establecimiento . "-" . $ptoEmision . "-" . $secuencial_doc .".". $extension;
    
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function crearNombreFicheroSinExtension($xmlComprobante){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
		
		$nombre = "";
		$codDoc = $xmlComprobante->codDoc;
		$this->establecimiento = $xmlComprobante->establecimiento;
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
		return $nombre . $this->establecimiento . "-" . $ptoEmision . "-" . $secuencial_doc ;
	
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function crearMensajeCorreo($xmlComprobante, $w_ruta_logo) {
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function enviarCorreo($xmlComprobante,$correo_destino){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
		
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
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function autorizar_factura ($fac_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  	
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function autorizar_liquidacion ($liq_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function autorizar_nc ($nc_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function autorizar_guia	($gr_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
						$detalles = array();
						$j=0;
						while (!$this->rs_detalles->EOF){
							$this->detalle = new DetalleGuiaRemision();
							$this->detalle->codigoInterno = $this->rs_detalles->fields[1];
							$this->detalle->codigoAdicional = $this->rs_detalles->fields[2];
							$this->detalle->descripcion = $this->rs_detalles->fields[3];
							$this->detalle->cantidad = $this->rs_detalles->fields[4];
							$detalles[$j] = $this->detalle;
							$j+=1;
							$this->rs_detalles->MoveNext();
						}	
						$destinatario->detalles = $detalles;
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function autorizar_retencion ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function autorizar_retencion_dos ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				}
				return $mensaje_final;
				
			}
		}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function autorizar_nd ($nd_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($this->nd_numero);
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
		$check_sql="SELECT nd_empresa,nd_establecimiento FROM del_nota_debito WHERE nd_numero=".$this->nd_numero;
		 
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
					WHERE nd_numero=".$this->nd_numero ;
		 
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
						where a.fp_nota_debito=".$this->nd_numero ;
			 
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
								WHERE nd_numero=" . $this->nd_numero;
				
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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_nota_debito 
                        SET nd_estado_sri='" . $res->return->estadoComprobante . "',
                            nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' 
                        WHERE nd_numero=" . $this->nd_numero;
				
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
                form_del_nota_debito_mob_pack_ajax_response();
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
								WHERE nd_numero=".$this->nd_numero ;
				
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
                form_del_nota_debito_mob_pack_ajax_response();
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
								WHERE nd_numero=".$this->nd_numero ;
				}else{
					$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_error_sri='".$res->return->mensajes->mensaje."'
								WHERE nd_numero=".$this->nd_numero ;
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
                form_del_nota_debito_mob_pack_ajax_response();
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
								WHERE nd_numero=".$this->nd_numero ;
				
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
                form_del_nota_debito_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function obtener_factura ($var_autorizacion){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
					$this->detalle['codigoPrincipal']=		(String)$item->codigoPrincipal;
					$this->detalle['codigoAuxiliar']=			(String)$item->codigoAuxiliar;
					$this->detalle['descripcion']=			(String)$item->descripcion;
					$this->detalle['cantidad']=				(String)$item->cantidad;
					$this->detalle['precioUnitario']=			(String)$item->precioUnitario;
					$this->detalle['precioSinSubsidio']=		(String)$item->precioSinSubsidio;
					$this->detalle['descuento']=				(String)$item->descuento;
					$this->detalle['precioTotalSinImpuesto']=	(String)$item->precioTotalSinImpuesto;
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

					$this->detalle['impuestos']=$impuestos;
					$detalles[]=$this->detalle;
					unset($this->detalle);
				}
				$comprobante['detalles']=$detalles;

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
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function obtener_notaCredito($var_autorizacion){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
					$this->detalle['codigoInterno']=	    	(String)$item->codigoInterno;
					$this->detalle['codigoAdicional']=		(String)$item->codigoAdicional;
					$this->detalle['descripcion']=			(String)$item->descripcion;
					$this->detalle['cantidad']=				(String)$item->cantidad;
					$this->detalle['precioUnitario']=			(String)$item->precioUnitario;
					$this->detalle['descuento']=				(String)$item->descuento;
					$this->detalle['precioTotalSinImpuesto']=	(String)$item->precioTotalSinImpuesto;
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
					$this->detalle['impuestos']=$impuestos;
					$detalles[]=$this->detalle;
					unset($this->detalle);
				}
				$comprobante['detalles']=$detalles;

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
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function obtener_notaDebito($var_autorizacion){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function obtener_retencion($var_autorizacion){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function esCedula($ced) {
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function EsRUC_natural($identificacion) {
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function EsRUC_juridico($identificacion) {
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
	
	return 1;

$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function EsRUC_Publica($identificacion) {
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function validar_esRuc($ced){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
}
function validar_CedulaRuc($ced){
$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nota_debito_mob']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_del_nota_debito_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_del_nota_debito_mob_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("nd_numero", "nd_tipo_comprobante", "nd_empresa", "nd_libretin", "nd_tipo_libretin", "nd_establecimiento", "nd_punto_emision", "nd_secuencial", "nd_ambiente", "nd_cliente", "nd_iddocmod", "nd_cod_docmod", "nd_serie_docmod", "nd_secuencial_docmod", "nd_subtotal_iva", "nd_subtotal_cero", "nd_subtotal_no_objeto", "nd_subtotal_excento", "nd_subtotal", "nd_valor_ice", "nd_valor_iva", "nd_total", "nd_estado", "nd_estado_sri", "nd_error_sri", "nd_autorizacion", "nd_usuario", "nd_clave"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['csrf_token'];
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

   function Form_lookup_nd_libretin()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin'] = array(); 
    }

   $old_value_nd_fecha = $this->nd_fecha;
   $old_value_nd_establecimiento = $this->nd_establecimiento;
   $old_value_nd_punto_emision = $this->nd_punto_emision;
   $old_value_nd_secuencial = $this->nd_secuencial;
   $old_value_nd_ambiente = $this->nd_ambiente;
   $old_value_nd_numero = $this->nd_numero;
   $old_value_nd_fecha_autorizacion = $this->nd_fecha_autorizacion;
   $old_value_nd_iddocmod = $this->nd_iddocmod;
   $old_value_fecha_sustento = $this->fecha_sustento;
   $old_value_nd_cliente = $this->nd_cliente;
   $old_value_nd_secuencial_docmod = $this->nd_secuencial_docmod;
   $old_value_nd_fecha_docmod = $this->nd_fecha_docmod;
   $old_value_nd_subtotal = $this->nd_subtotal;
   $old_value_nd_subtotal_iva = $this->nd_subtotal_iva;
   $old_value_nd_subtotal_cero = $this->nd_subtotal_cero;
   $old_value_nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto;
   $old_value_nd_subtotal_excento = $this->nd_subtotal_excento;
   $old_value_nd_valor_ice = $this->nd_valor_ice;
   $old_value_nd_valor_iva = $this->nd_valor_iva;
   $old_value_nd_total = $this->nd_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_nd_fecha = $this->nd_fecha;
   $unformatted_value_nd_establecimiento = $this->nd_establecimiento;
   $unformatted_value_nd_punto_emision = $this->nd_punto_emision;
   $unformatted_value_nd_secuencial = $this->nd_secuencial;
   $unformatted_value_nd_ambiente = $this->nd_ambiente;
   $unformatted_value_nd_numero = $this->nd_numero;
   $unformatted_value_nd_fecha_autorizacion = $this->nd_fecha_autorizacion;
   $unformatted_value_nd_iddocmod = $this->nd_iddocmod;
   $unformatted_value_fecha_sustento = $this->fecha_sustento;
   $unformatted_value_nd_cliente = $this->nd_cliente;
   $unformatted_value_nd_secuencial_docmod = $this->nd_secuencial_docmod;
   $unformatted_value_nd_fecha_docmod = $this->nd_fecha_docmod;
   $unformatted_value_nd_subtotal = $this->nd_subtotal;
   $unformatted_value_nd_subtotal_iva = $this->nd_subtotal_iva;
   $unformatted_value_nd_subtotal_cero = $this->nd_subtotal_cero;
   $unformatted_value_nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto;
   $unformatted_value_nd_subtotal_excento = $this->nd_subtotal_excento;
   $unformatted_value_nd_valor_ice = $this->nd_valor_ice;
   $unformatted_value_nd_valor_iva = $this->nd_valor_iva;
   $unformatted_value_nd_total = $this->nd_total;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='05'";

   $this->nd_fecha = $old_value_nd_fecha;
   $this->nd_establecimiento = $old_value_nd_establecimiento;
   $this->nd_punto_emision = $old_value_nd_punto_emision;
   $this->nd_secuencial = $old_value_nd_secuencial;
   $this->nd_ambiente = $old_value_nd_ambiente;
   $this->nd_numero = $old_value_nd_numero;
   $this->nd_fecha_autorizacion = $old_value_nd_fecha_autorizacion;
   $this->nd_iddocmod = $old_value_nd_iddocmod;
   $this->fecha_sustento = $old_value_fecha_sustento;
   $this->nd_cliente = $old_value_nd_cliente;
   $this->nd_secuencial_docmod = $old_value_nd_secuencial_docmod;
   $this->nd_fecha_docmod = $old_value_nd_fecha_docmod;
   $this->nd_subtotal = $old_value_nd_subtotal;
   $this->nd_subtotal_iva = $old_value_nd_subtotal_iva;
   $this->nd_subtotal_cero = $old_value_nd_subtotal_cero;
   $this->nd_subtotal_no_objeto = $old_value_nd_subtotal_no_objeto;
   $this->nd_subtotal_excento = $old_value_nd_subtotal_excento;
   $this->nd_valor_ice = $old_value_nd_valor_ice;
   $this->nd_valor_iva = $old_value_nd_valor_iva;
   $this->nd_total = $old_value_nd_total;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['Lookup_nd_libretin'][] = $rs->fields[0];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_del_nota_debito_mob_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "nd_numero", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_tipo_comprobante", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_empresa", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_nd_libretin($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "nd_libretin", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_tipo_libretin", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_establecimiento", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_punto_emision", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_secuencial", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_ambiente", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_cliente", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_iddocmod", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_cod_docmod", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_serie_docmod", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_secuencial_docmod", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_subtotal_iva", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_subtotal_cero", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_subtotal_no_objeto", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_subtotal_excento", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_subtotal", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_valor_ice", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_valor_iva", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_total", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_estado", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_estado_sri", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_error_sri", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_autorizacion", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_usuario", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_clave", $arg_search, $data_search, "VARCHAR", false);
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter_form'] . " and ((nd_numero=" . $_SESSION['var_id_nota_debito'] . ")) and (" . $comando . ")";
      }
      else
      {
          $sc_where = " where (nd_numero=" . $_SESSION['var_id_nota_debito'] . ") and (" . $comando . ")";
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_del_nota_debito_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['total'] = $qt_geral_reg_form_del_nota_debito_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_nota_debito_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_nota_debito_mob_pack_ajax_response();
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
      $nm_numeric[] = "nd_numero";$nm_numeric[] = "nd_libretin";$nm_numeric[] = "nd_establecimiento";$nm_numeric[] = "nd_punto_emision";$nm_numeric[] = "nd_secuencial";$nm_numeric[] = "nd_ambiente";$nm_numeric[] = "nd_cliente";$nm_numeric[] = "nd_iddocmod";$nm_numeric[] = "nd_secuencial_docmod";$nm_numeric[] = "nd_subtotal_iva";$nm_numeric[] = "nd_subtotal_cero";$nm_numeric[] = "nd_subtotal_no_objeto";$nm_numeric[] = "nd_subtotal_excento";$nm_numeric[] = "nd_subtotal";$nm_numeric[] = "nd_valor_ice";$nm_numeric[] = "nd_valor_iva";$nm_numeric[] = "nd_total";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['decimal_db'] == ".")
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
      $Nm_datas["nd_fecha"] = "date";$Nm_datas["nd_fecha_autorizacion"] = "date";$Nm_datas["nd_fecha_docmod"] = "date";$Nm_datas[""] = "date";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['SC_sep_date1'];
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
   function SC_lookup_nd_libretin($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (isset($this->Ini->nm_bases_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT est_codigo||' - '||pen_serie, lib_id FROM v_del_libretin WHERE (CAST (lib_id AS TEXT) LIKE '%$campo%') AND (lib_estado='A') AND (est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "') AND (pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "') AND (lib_tipo_comprobante='05)" ; 
       }
       else
       {
           $nm_comando = "SELECT est_codigo||' - '||pen_serie, lib_id FROM v_del_libretin WHERE (#cmp_iest_codigo||' - '||pen_serie#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos) AND (lib_estado='A') AND (est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "') AND (pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "') AND (lib_tipo_comprobante='05)" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "LIKE '#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "NOT LIKE '%#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", ">= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "< '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<= '#arg_i" . $campo . "#arg_f'", $nm_comando);
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
       $nmgp_saida_form = "form_del_nota_debito_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_del_nota_debito_mob_fim.php";
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
       form_del_nota_debito_mob_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['masterValue']);
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
                return array("sc_b_sai_t.sc-unique-btn-1", "sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_b.sc-unique-btn-8", "sc_b_sai_b.sc-unique-btn-10", "sc_b_sai_t.sc-unique-btn-15", "sc_b_sai_t.sc-unique-btn-17", "sc_b_sai_b.sc-unique-btn-22", "sc_b_sai_b.sc-unique-btn-24", "sc_b_sai_t.sc-unique-btn-2", "sc_b_sai_b.sc-unique-btn-9", "sc_b_sai_t.sc-unique-btn-16", "sc_b_sai_b.sc-unique-btn-23");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-4", "sys_separator.sc-unique-btn-6", "sys_separator.sc-unique-btn-7", "sys_separator.sc-unique-btn-11", "sys_separator.sc-unique-btn-13", "sys_separator.sc-unique-btn-14", "sys_separator.sc-unique-btn-18", "sys_separator.sc-unique-btn-20", "sys_separator.sc-unique-btn-21", "sys_separator.sc-unique-btn-25", "sys_separator.sc-unique-btn-27", "sys_separator.sc-unique-btn-28");
                break;
            case "nuevo":
                return array("sc_Nuevo_top.", "sc_Nuevo_bot.", "sc_Nuevo_top.", "sc_Nuevo_bot.");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-5", "sc_b_upd_b.sc-unique-btn-12", "sc_b_upd_t.sc-unique-btn-19", "sc_b_upd_b.sc-unique-btn-26");
                break;
            case "autorizar":
                return array("sc_autorizar_top.", "sc_autorizar_bot.", "sc_autorizar_top.", "sc_autorizar_bot.");
                break;
            case "anular":
                return array("sc_Anular_top.", "sc_Anular_bot.", "sc_Anular_top.", "sc_Anular_bot.");
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_mob']['ordem_ord'] == " desc") {
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
    {        if ($this->scIsFieldNumeric($fieldName)) {
            $defaultOffIcon = 'asc' == $this->scGetDefaultFieldOrder($fieldName) ? "fas fa-sort-numeric-down" : "fas fa-sort-numeric-down-alt";
            if ('desc' == $sortRule) {
                return "<span class=\"fas fa-sort-numeric-down-alt sc-form-order-icon\"></span>";
            } elseif ('asc' == $sortRule) {
                return "<span class=\"fas fa-sort-numeric-down sc-form-order-icon\"></span>";
            } else {
                return "<span class=\"" . $defaultOffIcon . " sc-form-order-icon sc-form-order-icon-unused\"></span>";
            }
        } else {
            $defaultOffIcon = 'asc' == $this->scGetDefaultFieldOrder($fieldName) ? "fas fa-sort-alpha-down" : "fas fa-sort-alpha-down-alt";
            if ('desc' == $sortRule) {
                return "<span class=\"fas fa-sort-alpha-down-alt sc-form-order-icon\"></span>";
            } elseif ('asc' == $sortRule) {
                return "<span class=\"fas fa-sort-alpha-down sc-form-order-icon\"></span>";
            } else {
                return "<span class=\"" . $defaultOffIcon . " sc-form-order-icon sc-form-order-icon-unused\"></span>";
            }
        }
    }

    function scIsFieldNumeric($fieldName)
    {
        switch ($fieldName) {
            case "nd_establecimiento":
                return true;
            case "nd_punto_emision":
                return true;
            case "nd_secuencial":
                return true;
            case "nd_ambiente":
                return true;
            case "nd_numero":
                return true;
            case "nd_iddocmod":
                return true;
            case "nd_cliente":
                return true;
            case "nd_secuencial_docmod":
                return true;
            case "nd_subtotal":
                return true;
            case "nd_subtotal_iva":
                return true;
            case "nd_subtotal_cero":
                return true;
            case "nd_subtotal_no_objeto":
                return true;
            case "nd_subtotal_excento":
                return true;
            case "nd_valor_ice":
                return true;
            case "nd_valor_iva":
                return true;
            case "nd_total":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "nd_libretin":
                return 'desc';
            case "nd_fecha":
                return 'desc';
            case "nd_establecimiento":
                return 'desc';
            case "nd_punto_emision":
                return 'desc';
            case "nd_secuencial":
                return 'desc';
            case "nd_ambiente":
                return 'desc';
            case "nd_numero":
                return 'desc';
            case "nd_fecha_autorizacion":
                return 'desc';
            case "nd_iddocmod":
                return 'desc';
            case "nd_cliente":
                return 'desc';
            case "nd_secuencial_docmod":
                return 'desc';
            case "nd_fecha_docmod":
                return 'desc';
            case "nd_subtotal":
                return 'desc';
            case "nd_subtotal_iva":
                return 'desc';
            case "nd_subtotal_cero":
                return 'desc';
            case "nd_subtotal_no_objeto":
                return 'desc';
            case "nd_subtotal_excento":
                return 'desc';
            case "nd_valor_ice":
                return 'desc';
            case "nd_valor_iva":
                return 'desc';
            case "nd_total":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
