<?php
//
class control_procesa_factura_mob_apl
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
   var $fr_valor;
   var $fr_tipo_identificacion;
   var $fr_cedula;
   var $fr_nombre;
   var $fr_direccion;
   var $fr_correo;
   var $fr_forma_pago;
   var $fr_forma_pago_1;
   var $fr_provincia;
   var $fr_provincia_1;
   var $fr_canton;
   var $fr_canton_1;
   var $fr_telefono;
   var $fr_total;
   var $fr_comentario;
   var $fr_forma_pago2;
   var $fr_forma_pago2_1;
   var $fr_valor2;
   var $fr_forma_pago3;
   var $fr_forma_pago3_1;
   var $fr_valor3;
   var $total_pago;
   var $fac_tipo_libretin;
   var $fac_libretin;
   var $fac_estado_sri;
   var $fac_estado;
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
            $glo_senha_protect, $bok, $nm_apl_dependente, $nm_form_submit, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup, $nmgp_redir;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['fac_estado_sri']))
          {
              $this->fac_estado_sri = $this->NM_ajax_info['param']['fac_estado_sri'];
          }
          if (isset($this->NM_ajax_info['param']['fac_libretin']))
          {
              $this->fac_libretin = $this->NM_ajax_info['param']['fac_libretin'];
          }
          if (isset($this->NM_ajax_info['param']['fac_tipo_libretin']))
          {
              $this->fac_tipo_libretin = $this->NM_ajax_info['param']['fac_tipo_libretin'];
          }
          if (isset($this->NM_ajax_info['param']['fr_canton']))
          {
              $this->fr_canton = $this->NM_ajax_info['param']['fr_canton'];
          }
          if (isset($this->NM_ajax_info['param']['fr_cedula']))
          {
              $this->fr_cedula = $this->NM_ajax_info['param']['fr_cedula'];
          }
          if (isset($this->NM_ajax_info['param']['fr_comentario']))
          {
              $this->fr_comentario = $this->NM_ajax_info['param']['fr_comentario'];
          }
          if (isset($this->NM_ajax_info['param']['fr_correo']))
          {
              $this->fr_correo = $this->NM_ajax_info['param']['fr_correo'];
          }
          if (isset($this->NM_ajax_info['param']['fr_direccion']))
          {
              $this->fr_direccion = $this->NM_ajax_info['param']['fr_direccion'];
          }
          if (isset($this->NM_ajax_info['param']['fr_forma_pago']))
          {
              $this->fr_forma_pago = $this->NM_ajax_info['param']['fr_forma_pago'];
          }
          if (isset($this->NM_ajax_info['param']['fr_forma_pago2']))
          {
              $this->fr_forma_pago2 = $this->NM_ajax_info['param']['fr_forma_pago2'];
          }
          if (isset($this->NM_ajax_info['param']['fr_forma_pago3']))
          {
              $this->fr_forma_pago3 = $this->NM_ajax_info['param']['fr_forma_pago3'];
          }
          if (isset($this->NM_ajax_info['param']['fr_nombre']))
          {
              $this->fr_nombre = $this->NM_ajax_info['param']['fr_nombre'];
          }
          if (isset($this->NM_ajax_info['param']['fr_provincia']))
          {
              $this->fr_provincia = $this->NM_ajax_info['param']['fr_provincia'];
          }
          if (isset($this->NM_ajax_info['param']['fr_telefono']))
          {
              $this->fr_telefono = $this->NM_ajax_info['param']['fr_telefono'];
          }
          if (isset($this->NM_ajax_info['param']['fr_tipo_identificacion']))
          {
              $this->fr_tipo_identificacion = $this->NM_ajax_info['param']['fr_tipo_identificacion'];
          }
          if (isset($this->NM_ajax_info['param']['fr_total']))
          {
              $this->fr_total = $this->NM_ajax_info['param']['fr_total'];
          }
          if (isset($this->NM_ajax_info['param']['fr_valor']))
          {
              $this->fr_valor = $this->NM_ajax_info['param']['fr_valor'];
          }
          if (isset($this->NM_ajax_info['param']['fr_valor2']))
          {
              $this->fr_valor2 = $this->NM_ajax_info['param']['fr_valor2'];
          }
          if (isset($this->NM_ajax_info['param']['fr_valor3']))
          {
              $this->fr_valor3 = $this->NM_ajax_info['param']['fr_valor3'];
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
          if (isset($this->NM_ajax_info['param']['total_pago']))
          {
              $this->total_pago = $this->NM_ajax_info['param']['total_pago'];
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
      if (isset($this->Igtech_RucEmpresa) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (isset($this->var_factura) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_factura'] = $this->var_factura;
      }
      if (isset($this->Igtech_AutorizacionInmediata) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_AutorizacionInmediata'] = $this->Igtech_AutorizacionInmediata;
      }
      if (isset($_POST["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_POST["Igtech_RucEmpresa"]) && isset($_POST["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_POST["igtech_rucempresa"];
      }
      if (isset($_POST["var_factura"]) && isset($this->var_factura)) 
      {
          $_SESSION['var_factura'] = $this->var_factura;
      }
      if (isset($_POST["Igtech_AutorizacionInmediata"]) && isset($this->Igtech_AutorizacionInmediata)) 
      {
          $_SESSION['Igtech_AutorizacionInmediata'] = $this->Igtech_AutorizacionInmediata;
      }
      if (!isset($_POST["Igtech_AutorizacionInmediata"]) && isset($_POST["igtech_autorizacioninmediata"])) 
      {
          $_SESSION['Igtech_AutorizacionInmediata'] = $_POST["igtech_autorizacioninmediata"];
      }
      if (isset($_GET["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_GET["Igtech_RucEmpresa"]) && isset($_GET["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_GET["igtech_rucempresa"];
      }
      if (isset($_GET["var_factura"]) && isset($this->var_factura)) 
      {
          $_SESSION['var_factura'] = $this->var_factura;
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
          $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['embutida_parms']);
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
                 nm_limpa_str_control_procesa_factura_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if (isset($this->var_factura)) 
          {
              $_SESSION['var_factura'] = $this->var_factura;
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
              $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if (isset($this->var_factura)) 
          {
              $_SESSION['var_factura'] = $this->var_factura;
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
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new control_procesa_factura_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['control_procesa_factura_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['control_procesa_factura_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['control_procesa_factura_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['control_procesa_factura_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['control_procesa_factura_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('control_procesa_factura_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['control_procesa_factura_mob']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . "";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "control_procesa_factura_mob")
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
      $this->Ini->Str_btn_form = (isset($_SESSION['scriptcase']['str_button_all'])) ? $_SESSION['scriptcase']['str_button_all'] : "botones_cacmu";
      $_SESSION['scriptcase']['str_button_all'] = $this->Ini->Str_btn_form;
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $_SESSION['scriptcase']['css_form_help'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form.css";
      $_SESSION['scriptcase']['css_form_help_dir'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      $this->Db = $this->Ini->Db; 
      $this->nm_new_label['fr_valor'] = '' . $this->Ini->Nm_lang['lang_valor'] . '';
      $this->nm_new_label['fr_tipo_identificacion'] = '' . $this->Ini->Nm_lang['lang_lot_tipoid'] . '';
      $this->nm_new_label['fr_cedula'] = '' . $this->Ini->Nm_lang['lang_lot_identificacion'] . '';
      $this->nm_new_label['fr_nombre'] = '' . $this->Ini->Nm_lang['lang_cliente'] . '';
      $this->nm_new_label['fr_direccion'] = '' . $this->Ini->Nm_lang['lang_direccion'] . '';
      $this->nm_new_label['fr_correo'] = '' . $this->Ini->Nm_lang['lang_email'] . '';
      $this->nm_new_label['fr_forma_pago'] = '' . $this->Ini->Nm_lang['lang_forma_pago'] . '';
      $this->nm_new_label['fr_provincia'] = '' . $this->Ini->Nm_lang['lang_provincia'] . '';
      $this->nm_new_label['fr_canton'] = '' . $this->Ini->Nm_lang['lang_canton'] . '';
      $this->nm_new_label['fr_telefono'] = '' . $this->Ini->Nm_lang['lang_lot_telefono'] . '';
      $this->nm_new_label['fr_total'] = '' . $this->Ini->Nm_lang['lang_total'] . '';
      $this->nm_new_label['fr_comentario'] = '' . $this->Ini->Nm_lang['lang_comentario'] . '';
      $this->nm_new_label['fr_valor2'] = '' . $this->Ini->Nm_lang['lang_valor'] . '';
      $this->nm_new_label['fr_valor3'] = '' . $this->Ini->Nm_lang['lang_valor'] . '';
      $this->nm_new_label['total_pago'] = '' . $this->Ini->Nm_lang['lang_total_pago'] . '';

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



      $_SESSION['scriptcase']['error_icon']['control_procesa_factura_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['control_procesa_factura_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['ok'] = "on";
      $this->nmgp_botoes['facebook'] = "off";
      $this->nmgp_botoes['google'] = "off";
      $this->nmgp_botoes['twitter'] = "off";
      $this->nmgp_botoes['paypal'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['control_procesa_factura_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['control_procesa_factura_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['control_procesa_factura_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_form'];
          if (!isset($this->fac_estado)){$this->fac_estado = $this->nmgp_dados_form['fac_estado'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("control_procesa_factura_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'control_procesa_factura/igtech.PocesarDocumentosElectronicos.php');
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

      if (is_file($this->Ini->path_aplicacao . 'control_procesa_factura_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'control_procesa_factura_mob_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('contr:' == substr($str_link_webhelp, 0, 6))
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
          require_once($this->Ini->path_embutida . 'control_procesa_factura/control_procesa_factura_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "control_procesa_factura_mob_erro.class.php"); 
      }
      $this->Erro      = new control_procesa_factura_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['control_procesa_factura_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
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

            $out1_img_cache = $_SESSION['scriptcase']['control_procesa_factura_mob']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['control_procesa_factura_mob']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fr_total
      $this->field_config['fr_total']               = array();
      $this->field_config['fr_total']['symbol_grp'] = '';
      $this->field_config['fr_total']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fr_total']['symbol_dec'] = '.';
      $this->field_config['fr_total']['symbol_neg'] = '-';
      $this->field_config['fr_total']['format_neg'] = '2';
      //-- fr_valor
      $this->field_config['fr_valor']               = array();
      $this->field_config['fr_valor']['symbol_grp'] = '';
      $this->field_config['fr_valor']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fr_valor']['symbol_dec'] = '.';
      $this->field_config['fr_valor']['symbol_neg'] = '-';
      $this->field_config['fr_valor']['format_neg'] = '2';
      //-- fr_valor2
      $this->field_config['fr_valor2']               = array();
      $this->field_config['fr_valor2']['symbol_grp'] = '';
      $this->field_config['fr_valor2']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fr_valor2']['symbol_dec'] = '.';
      $this->field_config['fr_valor2']['symbol_neg'] = '-';
      $this->field_config['fr_valor2']['format_neg'] = '2';
      //-- fr_valor3
      $this->field_config['fr_valor3']               = array();
      $this->field_config['fr_valor3']['symbol_grp'] = '';
      $this->field_config['fr_valor3']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fr_valor3']['symbol_dec'] = '.';
      $this->field_config['fr_valor3']['symbol_neg'] = '-';
      $this->field_config['fr_valor3']['format_neg'] = '2';
      //-- total_pago
      $this->field_config['total_pago']               = array();
      $this->field_config['total_pago']['symbol_grp'] = '';
      $this->field_config['total_pago']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['total_pago']['symbol_dec'] = '.';
      $this->field_config['total_pago']['symbol_neg'] = '-';
      $this->field_config['total_pago']['format_neg'] = '2';
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
            $glo_senha_protect, $bok, $nm_apl_dependente, $nm_form_submit, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup, $nmgp_redir;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Gera_log_access'] = false;
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
          if ('validate_fr_total' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_total');
          }
          if ('validate_fr_cedula' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_cedula');
          }
          if ('validate_fac_tipo_libretin' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_tipo_libretin');
          }
          if ('validate_fr_nombre' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_nombre');
          }
          if ('validate_fac_libretin' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_libretin');
          }
          if ('validate_fr_provincia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_provincia');
          }
          if ('validate_fr_canton' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_canton');
          }
          if ('validate_fr_direccion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_direccion');
          }
          if ('validate_fr_tipo_identificacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_tipo_identificacion');
          }
          if ('validate_fr_correo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_correo');
          }
          if ('validate_fac_estado_sri' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_estado_sri');
          }
          if ('validate_fr_telefono' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_telefono');
          }
          if ('validate_fr_forma_pago' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_forma_pago');
          }
          if ('validate_fr_valor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_valor');
          }
          if ('validate_fr_forma_pago2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_forma_pago2');
          }
          if ('validate_fr_valor2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_valor2');
          }
          if ('validate_fr_forma_pago3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_forma_pago3');
          }
          if ('validate_fr_valor3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_valor3');
          }
          if ('validate_fr_comentario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fr_comentario');
          }
          if ('validate_total_pago' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'total_pago');
          }
          control_procesa_factura_mob_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          if ('event_fr_cantidad_onchange' == $this->NM_ajax_opcao)
          {
              $this->fr_cantidad_onChange();
          }
          if ('event_fr_cedula_onchange' == $this->NM_ajax_opcao)
          {
              $this->fr_cedula_onChange();
          }
          if ('event_fr_valor_onchange' == $this->NM_ajax_opcao)
          {
              $this->fr_valor_onChange();
          }
          if ('event_fr_valor2_onchange' == $this->NM_ajax_opcao)
          {
              $this->fr_valor2_onChange();
          }
          if ('event_fr_valor3_onchange' == $this->NM_ajax_opcao)
          {
              $this->fr_valor3_onChange();
          }
          control_procesa_factura_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              control_procesa_factura_mob_pack_ajax_response();
              exit;
          }
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  control_procesa_factura_mob_pack_ajax_response();
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
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  control_procesa_factura_mob_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, '', true, true);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
//
      if (!isset($nm_form_submit) && $this->nmgp_opcao != "nada")
      {
          $this->fr_valor = "" ;  
          $this->fr_tipo_identificacion = "VENTA CONSUMIDOR FINAL" ;  
          $this->fr_cedula = "9999999999999" ;  
          $this->fr_nombre = "CONSUMIDOR FINAL" ;  
          $this->fr_direccion = "--" ;  
          $this->fr_correo = "sincorreo@gmail.com" ;  
          $this->fr_forma_pago = "" ;  
          $this->fr_provincia = "IMBABURA" ;  
          $this->fr_canton = "IBARRA" ;  
          $this->fr_telefono = "" ;  
          $this->fr_total = "" ;  
          $this->fr_comentario = "" ;  
          $this->fr_forma_pago2 = "" ;  
          $this->fr_valor2 = "0" ;  
          $this->fr_forma_pago3 = "" ;  
          $this->fr_valor3 = "0" ;  
          $this->total_pago = "" ;  
          $this->fac_tipo_libretin = "" ;  
          $this->fac_libretin = "" ;  
          $this->fac_estado_sri = "" ;  
          $this->fac_estado = "" ;  
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_form']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_form']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_form'] as $NM_campo => $NM_valor)
              {
                  $$NM_campo = $NM_valor;
              }
          }
      }
      else
      {
           if ($this->nmgp_opcao != "nada")
           {
           }
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "" || $campos_erro != "" || !isset($this->bok) || $this->bok != "OK" || $this->nmgp_opcao == "recarga")
      {
          if ($Campos_Crit == "" && empty($Campos_Falta) && $this->Campos_Mens_erro == "" && !isset($this->bok) && $this->nmgp_opcao != "recarga")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos']))
              { 
                  $fr_total = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][0]; 
                  $fr_cedula = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][1]; 
                  $fac_tipo_libretin = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][2]; 
                  $fr_nombre = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][3]; 
                  $fac_libretin = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][4]; 
                  $fr_provincia = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][5]; 
                  $fr_canton = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][6]; 
                  $fr_direccion = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][7]; 
                  $fr_tipo_identificacion = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][8]; 
                  $fr_correo = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][9]; 
                  $fac_estado_sri = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][10]; 
                  $fr_telefono = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][11]; 
                  $fr_forma_pago = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][12]; 
                  $fr_valor = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][13]; 
                  $fr_forma_pago2 = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][14]; 
                  $fr_valor2 = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][15]; 
                  $fr_forma_pago3 = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][16]; 
                  $fr_valor3 = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][17]; 
                  $fr_comentario = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][18]; 
                  $total_pago = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][19]; 
              } 
          }
          $this->nm_gera_html();
          $this->NM_close_db(); 
      }
      elseif (isset($this->bok) && $this->bok == "OK")
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'] = array(); 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][0] = $this->fr_total; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][1] = $this->fr_cedula; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][2] = $this->fac_tipo_libretin; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][3] = $this->fr_nombre; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][4] = $this->fac_libretin; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][5] = $this->fr_provincia; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][6] = $this->fr_canton; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][7] = $this->fr_direccion; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][8] = $this->fr_tipo_identificacion; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][9] = $this->fr_correo; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][10] = $this->fac_estado_sri; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][11] = $this->fr_telefono; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][12] = $this->fr_forma_pago; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][13] = $this->fr_valor; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][14] = $this->fr_forma_pago2; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][15] = $this->fr_valor2; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][16] = $this->fr_forma_pago3; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][17] = $this->fr_valor3; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][18] = $this->fr_comentario; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['campos'][19] = $this->total_pago; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['redir'] == "redir")
          {
              $this->nmgp_redireciona(); 
          }
          else
          {
              $contr_menu = "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['iframe_menu'])
              {
                  $contr_menu = "glo_menu";
              }
              if (isset($_SESSION['scriptcase']['sc_ult_apl_menu']) && in_array("control_procesa_factura_mob", $_SESSION['scriptcase']['sc_ult_apl_menu']))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona_form("control_procesa_factura_mob_fim.php", $this->nm_location, $contr_menu); 
              }
              else
              {
                  $this->nm_gera_html();
                  if (!$_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_proc'])
                  { 
                      $this->NM_close_db(); 
                  } 
              }
          }
          $this->NM_close_db(); 
          if ($this->NM_ajax_flag)
          {
              control_procesa_factura_mob_pack_ajax_response();
              exit;
          }
      }
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "control_procesa_factura_mob.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . "") ?></TITLE>
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
<form name="Fdown" method="get" action="control_procesa_factura_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="control_procesa_factura_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="control_procesa_factura_mob.php" target="_self" style="display: none"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'control_procesa_factura_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'control_procesa_factura_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'control_procesa_factura_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               control_procesa_factura_mob_pack_ajax_response();
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
           case 'fr_total':
               return "" . $this->Ini->Nm_lang['lang_total'] . "";
               break;
           case 'fr_cedula':
               return "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
               break;
           case 'fac_tipo_libretin':
               return "fac_tipo_libretin";
               break;
           case 'fr_nombre':
               return "" . $this->Ini->Nm_lang['lang_cliente'] . "";
               break;
           case 'fac_libretin':
               return "fac_libretin";
               break;
           case 'fr_provincia':
               return "" . $this->Ini->Nm_lang['lang_provincia'] . "";
               break;
           case 'fr_canton':
               return "" . $this->Ini->Nm_lang['lang_canton'] . "";
               break;
           case 'fr_direccion':
               return "" . $this->Ini->Nm_lang['lang_direccion'] . "";
               break;
           case 'fr_tipo_identificacion':
               return "" . $this->Ini->Nm_lang['lang_lot_tipoid'] . "";
               break;
           case 'fr_correo':
               return "" . $this->Ini->Nm_lang['lang_email'] . "";
               break;
           case 'fac_estado_sri':
               return "fac_estado_sri";
               break;
           case 'fr_telefono':
               return "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
               break;
           case 'fr_forma_pago':
               return "" . $this->Ini->Nm_lang['lang_forma_pago'] . "";
               break;
           case 'fr_valor':
               return "" . $this->Ini->Nm_lang['lang_valor'] . "";
               break;
           case 'fr_forma_pago2':
               return "" . $this->Ini->Nm_lang['lang_forma_pago'] . " 2";
               break;
           case 'fr_valor2':
               return "" . $this->Ini->Nm_lang['lang_valor'] . "";
               break;
           case 'fr_forma_pago3':
               return "" . $this->Ini->Nm_lang['lang_forma_pago'] . " 3";
               break;
           case 'fr_valor3':
               return "" . $this->Ini->Nm_lang['lang_valor'] . "";
               break;
           case 'fr_comentario':
               return "" . $this->Ini->Nm_lang['lang_comentario'] . "";
               break;
           case 'total_pago':
               return "" . $this->Ini->Nm_lang['lang_total_pago'] . "";
               break;
           case 'fac_estado':
               return "fac_estado";
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
              if (!isset($this->NM_ajax_info['errList']['geral_control_procesa_factura_mob']) || !is_array($this->NM_ajax_info['errList']['geral_control_procesa_factura_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_control_procesa_factura_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_control_procesa_factura_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'fr_total' == $filtro)) || (is_array($filtro) && in_array('fr_total', $filtro)))
        $this->ValidateField_fr_total($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_cedula' == $filtro)) || (is_array($filtro) && in_array('fr_cedula', $filtro)))
        $this->ValidateField_fr_cedula($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_tipo_libretin' == $filtro)) || (is_array($filtro) && in_array('fac_tipo_libretin', $filtro)))
        $this->ValidateField_fac_tipo_libretin($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_nombre' == $filtro)) || (is_array($filtro) && in_array('fr_nombre', $filtro)))
        $this->ValidateField_fr_nombre($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_libretin' == $filtro)) || (is_array($filtro) && in_array('fac_libretin', $filtro)))
        $this->ValidateField_fac_libretin($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_provincia' == $filtro)) || (is_array($filtro) && in_array('fr_provincia', $filtro)))
        $this->ValidateField_fr_provincia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_canton' == $filtro)) || (is_array($filtro) && in_array('fr_canton', $filtro)))
        $this->ValidateField_fr_canton($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_direccion' == $filtro)) || (is_array($filtro) && in_array('fr_direccion', $filtro)))
        $this->ValidateField_fr_direccion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_tipo_identificacion' == $filtro)) || (is_array($filtro) && in_array('fr_tipo_identificacion', $filtro)))
        $this->ValidateField_fr_tipo_identificacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_correo' == $filtro)) || (is_array($filtro) && in_array('fr_correo', $filtro)))
        $this->ValidateField_fr_correo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_estado_sri' == $filtro)) || (is_array($filtro) && in_array('fac_estado_sri', $filtro)))
        $this->ValidateField_fac_estado_sri($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_telefono' == $filtro)) || (is_array($filtro) && in_array('fr_telefono', $filtro)))
        $this->ValidateField_fr_telefono($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_forma_pago' == $filtro)) || (is_array($filtro) && in_array('fr_forma_pago', $filtro)))
        $this->ValidateField_fr_forma_pago($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_valor' == $filtro)) || (is_array($filtro) && in_array('fr_valor', $filtro)))
        $this->ValidateField_fr_valor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_forma_pago2' == $filtro)) || (is_array($filtro) && in_array('fr_forma_pago2', $filtro)))
        $this->ValidateField_fr_forma_pago2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_valor2' == $filtro)) || (is_array($filtro) && in_array('fr_valor2', $filtro)))
        $this->ValidateField_fr_valor2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_forma_pago3' == $filtro)) || (is_array($filtro) && in_array('fr_forma_pago3', $filtro)))
        $this->ValidateField_fr_forma_pago3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_valor3' == $filtro)) || (is_array($filtro) && in_array('fr_valor3', $filtro)))
        $this->ValidateField_fr_valor3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fr_comentario' == $filtro)) || (is_array($filtro) && in_array('fr_comentario', $filtro)))
        $this->ValidateField_fr_comentario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'total_pago' == $filtro)) || (is_array($filtro) && in_array('total_pago', $filtro)))
        $this->ValidateField_total_pago($Campos_Crit, $Campos_Falta, $Campos_Erros);

      if (empty($Campos_Crit) && empty($Campos_Falta))
      {
      if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
      {
      $_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fac_estado_sri = $this->fac_estado_sri;
    $original_fac_libretin = $this->fac_libretin;
    $original_fac_tipo_libretin = $this->fac_tipo_libretin;
    $original_fr_canton = $this->fr_canton;
    $original_fr_cedula = $this->fr_cedula;
    $original_fr_comentario = $this->fr_comentario;
    $original_fr_correo = $this->fr_correo;
    $original_fr_direccion = $this->fr_direccion;
    $original_fr_forma_pago = $this->fr_forma_pago;
    $original_fr_forma_pago2 = $this->fr_forma_pago2;
    $original_fr_forma_pago3 = $this->fr_forma_pago3;
    $original_fr_nombre = $this->fr_nombre;
    $original_fr_provincia = $this->fr_provincia;
    $original_fr_telefono = $this->fr_telefono;
    $original_fr_tipo_identificacion = $this->fr_tipo_identificacion;
    $original_fr_total = $this->fr_total;
    $original_fr_valor = $this->fr_valor;
    $original_fr_valor2 = $this->fr_valor2;
    $original_fr_valor3 = $this->fr_valor3;
    $original_total_pago = $this->total_pago;
}
if (!isset($this->sc_temp_Igtech_AutorizacionInmediata)) {$this->sc_temp_Igtech_AutorizacionInmediata = (isset($_SESSION['Igtech_AutorizacionInmediata'])) ? $_SESSION['Igtech_AutorizacionInmediata'] : "";}
if (!isset($this->sc_temp_var_factura)) {$this->sc_temp_var_factura = (isset($_SESSION['var_factura'])) ? $_SESSION['var_factura'] : "";}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  if($this->fac_estado =='R'){
	$ciudadano=array(
		'identificacion'=>$this->fr_cedula ,
		'nombre'=>$this->fr_nombre ,
		'nombre_comercial'=>'',
		'obligado_contabilidad'=>'N',
		'tipo_contribuyente'=>"PERSONAS NATURALES",
		'provincia'=>$this->fr_provincia ,
		'canton'=>$this->fr_canton ,
		'direccion'=>$this->fr_direccion ,
		'correo'=>$this->fr_correo ,
		'telefono'=>$this->fr_telefono 
	);
	$respuesta=insertUpdateCiudadano($ciudadano);

	if($this->fr_total ==$this->total_pago ){
		if($this->fr_cedula =='9999999999999' and $this->fr_total >50){
			$mensaje='NO se puede facturar mas de 50 USD a Consumidor final';
			
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $mensaje;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_control_procesa_factura_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_control_procesa_factura_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $mensaje;
 }
;
			if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
 if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
 if (isset($this->sc_temp_Igtech_AutorizacionInmediata)) { $_SESSION['Igtech_AutorizacionInmediata'] = $this->sc_temp_Igtech_AutorizacionInmediata;}
    $_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
    return;
}
}else{
			if ($this->fr_cedula <>'9999999999999'){
				$w_cliente= array(
					'empresa'=> $this->sc_temp_Igtech_RucEmpresa,
					'nombre'=> $this->fr_nombre ,
					'tipo_identificacion'=> $this->fr_tipo_identificacion ,
					'identificacion'=> $this->fr_cedula ,
					'pais'=> 'ECUADOR',
					'provincia'=> $this->fr_provincia ,
					'ciudad'=> $this->fr_canton ,
					'direccion'=> $this->fr_direccion ,
					'telefono'=> $this->fr_telefono ,
					'email'=> $this->fr_correo 
				);
				$respuesta=$this->insertUpdateCliente($w_cliente);
				$cliente=$respuesta['id'];
			}else{
				$cliente=1;
			}
			$this->actualiza_factura($cliente,$this->fr_comentario );

			if($this->fr_valor <>0){
				$this->registrar_pago($this->fr_forma_pago ,$this->fr_valor );
			}
			if($this->fr_valor2 <>0){
				$this->registrar_pago($this->fr_forma_pago2 ,$this->fr_valor2 );
			}
			if($this->fr_valor3 <>0){
				$this->registrar_pago($this->fr_forma_pago3 ,$this->fr_valor3 );
			}
			$check_sql = "SELECT sp_del_secuencial_documento (".$this->fac_libretin .",'01',".$this->sc_temp_var_factura.")";
			 
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
					$mensaje="No se encontro un secuencial valido para esta serie";
					
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $mensaje;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_control_procesa_factura_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_control_procesa_factura_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $mensaje;
 }
;
					if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
 if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
 if (isset($this->sc_temp_Igtech_AutorizacionInmediata)) { $_SESSION['Igtech_AutorizacionInmediata'] = $this->sc_temp_Igtech_AutorizacionInmediata;}
    $_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
    return;
}
}
			}
			$registra_kardex="SELECT sp_ventas_al_kardex(".$this->sc_temp_var_factura.");";
			
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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		}

		if($this->fac_tipo_libretin =='E' and $this->fac_estado_sri <>'AUTORIZADO'){
			$mensaje=$this->autorizar_factura($this->sc_temp_var_factura,$this->sc_temp_Igtech_AutorizacionInmediata);
			$this->nm_mens_alert[] = $mensaje; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert($mensaje); }}else{
			$this->nm_mens_alert[] = "Factura Procesada"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Factura Procesada"); }}
		$this->NM_ajax_info['buttonDisplay']['ok'] = $this->nmgp_botoes["ok"] = 'off';;
	}else{
		$mensaje='El valor del pago debe ser igual al total facturado';
		
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $mensaje;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_control_procesa_factura_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_control_procesa_factura_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $mensaje;
 }
;
		if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
 if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
 if (isset($this->sc_temp_Igtech_AutorizacionInmediata)) { $_SESSION['Igtech_AutorizacionInmediata'] = $this->sc_temp_Igtech_AutorizacionInmediata;}
    $_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
    return;
}
}
}else{
	$mensaje='La factura ya fue procesada';
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $mensaje;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_control_procesa_factura_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_control_procesa_factura_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $mensaje;
 }
;
	if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
 if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
 if (isset($this->sc_temp_Igtech_AutorizacionInmediata)) { $_SESSION['Igtech_AutorizacionInmediata'] = $this->sc_temp_Igtech_AutorizacionInmediata;}
    $_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
    return;
}
}
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
if (isset($this->sc_temp_Igtech_AutorizacionInmediata)) { $_SESSION['Igtech_AutorizacionInmediata'] = $this->sc_temp_Igtech_AutorizacionInmediata;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fac_estado_sri != $this->fac_estado_sri || (isset($bFlagRead_fac_estado_sri) && $bFlagRead_fac_estado_sri)))
    {
        $this->ajax_return_values_fac_estado_sri(true);
    }
    if (($original_fac_libretin != $this->fac_libretin || (isset($bFlagRead_fac_libretin) && $bFlagRead_fac_libretin)))
    {
        $this->ajax_return_values_fac_libretin(true);
    }
    if (($original_fac_tipo_libretin != $this->fac_tipo_libretin || (isset($bFlagRead_fac_tipo_libretin) && $bFlagRead_fac_tipo_libretin)))
    {
        $this->ajax_return_values_fac_tipo_libretin(true);
    }
    if (($original_fr_canton != $this->fr_canton || (isset($bFlagRead_fr_canton) && $bFlagRead_fr_canton)))
    {
        $this->ajax_return_values_fr_canton(true);
    }
    if (($original_fr_cedula != $this->fr_cedula || (isset($bFlagRead_fr_cedula) && $bFlagRead_fr_cedula)))
    {
        $this->ajax_return_values_fr_cedula(true);
    }
    if (($original_fr_comentario != $this->fr_comentario || (isset($bFlagRead_fr_comentario) && $bFlagRead_fr_comentario)))
    {
        $this->ajax_return_values_fr_comentario(true);
    }
    if (($original_fr_correo != $this->fr_correo || (isset($bFlagRead_fr_correo) && $bFlagRead_fr_correo)))
    {
        $this->ajax_return_values_fr_correo(true);
    }
    if (($original_fr_direccion != $this->fr_direccion || (isset($bFlagRead_fr_direccion) && $bFlagRead_fr_direccion)))
    {
        $this->ajax_return_values_fr_direccion(true);
    }
    if (($original_fr_forma_pago != $this->fr_forma_pago || (isset($bFlagRead_fr_forma_pago) && $bFlagRead_fr_forma_pago)))
    {
        $this->ajax_return_values_fr_forma_pago(true);
    }
    if (($original_fr_forma_pago2 != $this->fr_forma_pago2 || (isset($bFlagRead_fr_forma_pago2) && $bFlagRead_fr_forma_pago2)))
    {
        $this->ajax_return_values_fr_forma_pago2(true);
    }
    if (($original_fr_forma_pago3 != $this->fr_forma_pago3 || (isset($bFlagRead_fr_forma_pago3) && $bFlagRead_fr_forma_pago3)))
    {
        $this->ajax_return_values_fr_forma_pago3(true);
    }
    if (($original_fr_nombre != $this->fr_nombre || (isset($bFlagRead_fr_nombre) && $bFlagRead_fr_nombre)))
    {
        $this->ajax_return_values_fr_nombre(true);
    }
    if (($original_fr_provincia != $this->fr_provincia || (isset($bFlagRead_fr_provincia) && $bFlagRead_fr_provincia)))
    {
        $this->ajax_return_values_fr_provincia(true);
    }
    if (($original_fr_telefono != $this->fr_telefono || (isset($bFlagRead_fr_telefono) && $bFlagRead_fr_telefono)))
    {
        $this->ajax_return_values_fr_telefono(true);
    }
    if (($original_fr_tipo_identificacion != $this->fr_tipo_identificacion || (isset($bFlagRead_fr_tipo_identificacion) && $bFlagRead_fr_tipo_identificacion)))
    {
        $this->ajax_return_values_fr_tipo_identificacion(true);
    }
    if (($original_fr_total != $this->fr_total || (isset($bFlagRead_fr_total) && $bFlagRead_fr_total)))
    {
        $this->ajax_return_values_fr_total(true);
    }
    if (($original_fr_valor != $this->fr_valor || (isset($bFlagRead_fr_valor) && $bFlagRead_fr_valor)))
    {
        $this->ajax_return_values_fr_valor(true);
    }
    if (($original_fr_valor2 != $this->fr_valor2 || (isset($bFlagRead_fr_valor2) && $bFlagRead_fr_valor2)))
    {
        $this->ajax_return_values_fr_valor2(true);
    }
    if (($original_fr_valor3 != $this->fr_valor3 || (isset($bFlagRead_fr_valor3) && $bFlagRead_fr_valor3)))
    {
        $this->ajax_return_values_fr_valor3(true);
    }
    if (($original_total_pago != $this->total_pago || (isset($bFlagRead_total_pago) && $bFlagRead_total_pago)))
    {
        $this->ajax_return_values_total_pago(true);
    }
}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off'; 
      }
      }
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

      if (empty($Campos_Crit) && empty($Campos_Falta) && empty($this->Campos_Mens_erro))
      {
          if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
          {
              $_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_var_factura)) {$this->sc_temp_var_factura = (isset($_SESSION['var_factura'])) ? $_SESSION['var_factura'] : "";}
  $redir_app    = 'pdf_factura_baucher';  
$redir_target = '_blank';  
$redir_param  = array(     
					'var_documento' => $this->sc_temp_var_factura,
					
);

 if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($redir_app, $this->nm_location, $redir_param, "$redir_target", "ret_self", 440, 630);
 };
if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off'; 
          }
      }
   }

    function ValidateField_fr_total(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_total'])) {
          if (!empty($this->field_config['fr_total']['symbol_dec'])) {
              nm_limpa_valor($this->fr_total, $this->field_config['fr_total']['symbol_dec'], $this->field_config['fr_total']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fr_total === "" || is_null($this->fr_total))  
      { 
          $this->fr_total = 0;
          $this->sc_force_zero[] = 'fr_total';
      } 
      if (!empty($this->field_config['fr_total']['symbol_dec']))
      {
          nm_limpa_valor($this->fr_total, $this->field_config['fr_total']['symbol_dec'], $this->field_config['fr_total']['symbol_grp']) ; 
          if ('.' == substr($this->fr_total, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fr_total, 1)))
              {
                  $this->fr_total = '';
              }
              else
              {
                  $this->fr_total = '0' . $this->fr_total;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fr_total != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->fr_total, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->fr_total, -1))
              {
                  $iTestSize++;
                  $this->fr_total = '-' . substr($this->fr_total, 0, -1);
              }
              if (strlen($this->fr_total) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fr_total']))
                  {
                      $Campos_Erros['fr_total'] = array();
                  }
                  $Campos_Erros['fr_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fr_total']) || !is_array($this->NM_ajax_info['errList']['fr_total']))
                  {
                      $this->NM_ajax_info['errList']['fr_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fr_total, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . "; " ; 
                  if (!isset($Campos_Erros['fr_total']))
                  {
                      $Campos_Erros['fr_total'] = array();
                  }
                  $Campos_Erros['fr_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fr_total']) || !is_array($this->NM_ajax_info['errList']['fr_total']))
                  {
                      $this->NM_ajax_info['errList']['fr_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_total';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_total

    function ValidateField_fr_cedula(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_cedula'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_cedula']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_cedula'] == "on")) 
      { 
          if ($this->fr_cedula == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "" ; 
              if (!isset($Campos_Erros['fr_cedula']))
              {
                  $Campos_Erros['fr_cedula'] = array();
              }
              $Campos_Erros['fr_cedula'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fr_cedula']) || !is_array($this->NM_ajax_info['errList']['fr_cedula']))
                  {
                      $this->NM_ajax_info['errList']['fr_cedula'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_cedula'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fr_cedula) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fr_cedula']))
              {
                  $Campos_Erros['fr_cedula'] = array();
              }
              $Campos_Erros['fr_cedula'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fr_cedula']) || !is_array($this->NM_ajax_info['errList']['fr_cedula']))
              {
                  $this->NM_ajax_info['errList']['fr_cedula'] = array();
              }
              $this->NM_ajax_info['errList']['fr_cedula'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_cedula';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_cedula

    function ValidateField_fac_tipo_libretin(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_tipo_libretin'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fac_tipo_libretin) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "fac_tipo_libretin " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fac_tipo_libretin']))
              {
                  $Campos_Erros['fac_tipo_libretin'] = array();
              }
              $Campos_Erros['fac_tipo_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fac_tipo_libretin']) || !is_array($this->NM_ajax_info['errList']['fac_tipo_libretin']))
              {
                  $this->NM_ajax_info['errList']['fac_tipo_libretin'] = array();
              }
              $this->NM_ajax_info['errList']['fac_tipo_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_tipo_libretin';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_tipo_libretin

    function ValidateField_fr_nombre(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_nombre'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_nombre']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_nombre'] == "on")) 
      { 
          if ($this->fr_nombre == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_cliente'] . "" ; 
              if (!isset($Campos_Erros['fr_nombre']))
              {
                  $Campos_Erros['fr_nombre'] = array();
              }
              $Campos_Erros['fr_nombre'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fr_nombre']) || !is_array($this->NM_ajax_info['errList']['fr_nombre']))
                  {
                      $this->NM_ajax_info['errList']['fr_nombre'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_nombre'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fr_nombre) > 200) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cliente'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fr_nombre']))
              {
                  $Campos_Erros['fr_nombre'] = array();
              }
              $Campos_Erros['fr_nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fr_nombre']) || !is_array($this->NM_ajax_info['errList']['fr_nombre']))
              {
                  $this->NM_ajax_info['errList']['fr_nombre'] = array();
              }
              $this->NM_ajax_info['errList']['fr_nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_nombre';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_nombre

    function ValidateField_fac_libretin(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_libretin'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fac_libretin) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "fac_libretin " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fac_libretin']))
              {
                  $Campos_Erros['fac_libretin'] = array();
              }
              $Campos_Erros['fac_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fac_libretin']) || !is_array($this->NM_ajax_info['errList']['fac_libretin']))
              {
                  $this->NM_ajax_info['errList']['fac_libretin'] = array();
              }
              $this->NM_ajax_info['errList']['fac_libretin'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_libretin';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_libretin

    function ValidateField_fr_provincia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fr_provincia'])) {
       return;
   }
      if ($this->fr_provincia == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_provincia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_provincia'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_provincia'] . "" ; 
          if (!isset($Campos_Erros['fr_provincia']))
          {
              $Campos_Erros['fr_provincia'] = array();
          }
          $Campos_Erros['fr_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['fr_provincia']) || !is_array($this->NM_ajax_info['errList']['fr_provincia']))
          {
              $this->NM_ajax_info['errList']['fr_provincia'] = array();
          }
          $this->NM_ajax_info['errList']['fr_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->fr_provincia) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']) && !in_array($this->fr_provincia, $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['fr_provincia']))
              {
                  $Campos_Erros['fr_provincia'] = array();
              }
              $Campos_Erros['fr_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['fr_provincia']) || !is_array($this->NM_ajax_info['errList']['fr_provincia']))
              {
                  $this->NM_ajax_info['errList']['fr_provincia'] = array();
              }
              $this->NM_ajax_info['errList']['fr_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_provincia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_provincia

    function ValidateField_fr_canton(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fr_canton'])) {
       return;
   }
      if ($this->fr_canton == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_canton']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_canton'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_canton'] . "" ; 
          if (!isset($Campos_Erros['fr_canton']))
          {
              $Campos_Erros['fr_canton'] = array();
          }
          $Campos_Erros['fr_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['fr_canton']) || !is_array($this->NM_ajax_info['errList']['fr_canton']))
          {
              $this->NM_ajax_info['errList']['fr_canton'] = array();
          }
          $this->NM_ajax_info['errList']['fr_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->fr_canton) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']) && !in_array($this->fr_canton, $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['fr_canton']))
              {
                  $Campos_Erros['fr_canton'] = array();
              }
              $Campos_Erros['fr_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['fr_canton']) || !is_array($this->NM_ajax_info['errList']['fr_canton']))
              {
                  $this->NM_ajax_info['errList']['fr_canton'] = array();
              }
              $this->NM_ajax_info['errList']['fr_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_canton';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_canton

    function ValidateField_fr_direccion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_direccion'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_direccion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_direccion'] == "on")) 
      { 
          if ($this->fr_direccion == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_direccion'] . "" ; 
              if (!isset($Campos_Erros['fr_direccion']))
              {
                  $Campos_Erros['fr_direccion'] = array();
              }
              $Campos_Erros['fr_direccion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fr_direccion']) || !is_array($this->NM_ajax_info['errList']['fr_direccion']))
                  {
                      $this->NM_ajax_info['errList']['fr_direccion'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_direccion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fr_direccion) > 200) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_direccion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fr_direccion']))
              {
                  $Campos_Erros['fr_direccion'] = array();
              }
              $Campos_Erros['fr_direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fr_direccion']) || !is_array($this->NM_ajax_info['errList']['fr_direccion']))
              {
                  $this->NM_ajax_info['errList']['fr_direccion'] = array();
              }
              $this->NM_ajax_info['errList']['fr_direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_direccion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_direccion

    function ValidateField_fr_tipo_identificacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_tipo_identificacion'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_tipo_identificacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_tipo_identificacion'] == "on")) 
      { 
          if ($this->fr_tipo_identificacion == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_lot_tipoid'] . "" ; 
              if (!isset($Campos_Erros['fr_tipo_identificacion']))
              {
                  $Campos_Erros['fr_tipo_identificacion'] = array();
              }
              $Campos_Erros['fr_tipo_identificacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fr_tipo_identificacion']) || !is_array($this->NM_ajax_info['errList']['fr_tipo_identificacion']))
                  {
                      $this->NM_ajax_info['errList']['fr_tipo_identificacion'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_tipo_identificacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fr_tipo_identificacion) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_tipoid'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fr_tipo_identificacion']))
              {
                  $Campos_Erros['fr_tipo_identificacion'] = array();
              }
              $Campos_Erros['fr_tipo_identificacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fr_tipo_identificacion']) || !is_array($this->NM_ajax_info['errList']['fr_tipo_identificacion']))
              {
                  $this->NM_ajax_info['errList']['fr_tipo_identificacion'] = array();
              }
              $this->NM_ajax_info['errList']['fr_tipo_identificacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_tipo_identificacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_tipo_identificacion

    function ValidateField_fr_correo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_correo'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_correo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_correo'] == "on")) 
      { 
          if ($this->fr_correo == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_email'] . "" ; 
              if (!isset($Campos_Erros['fr_correo']))
              {
                  $Campos_Erros['fr_correo'] = array();
              }
              $Campos_Erros['fr_correo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fr_correo']) || !is_array($this->NM_ajax_info['errList']['fr_correo']))
                  {
                      $this->NM_ajax_info['errList']['fr_correo'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_correo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fr_correo) > 100) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_email'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fr_correo']))
              {
                  $Campos_Erros['fr_correo'] = array();
              }
              $Campos_Erros['fr_correo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fr_correo']) || !is_array($this->NM_ajax_info['errList']['fr_correo']))
              {
                  $this->NM_ajax_info['errList']['fr_correo'] = array();
              }
              $this->NM_ajax_info['errList']['fr_correo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_correo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_correo

    function ValidateField_fac_estado_sri(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_estado_sri'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fac_estado_sri) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "fac_estado_sri " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fac_estado_sri']))
              {
                  $Campos_Erros['fac_estado_sri'] = array();
              }
              $Campos_Erros['fac_estado_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fac_estado_sri']) || !is_array($this->NM_ajax_info['errList']['fac_estado_sri']))
              {
                  $this->NM_ajax_info['errList']['fac_estado_sri'] = array();
              }
              $this->NM_ajax_info['errList']['fac_estado_sri'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_estado_sri';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_estado_sri

    function ValidateField_fr_telefono(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_telefono'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fr_telefono) > 10) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_telefono'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fr_telefono']))
              {
                  $Campos_Erros['fr_telefono'] = array();
              }
              $Campos_Erros['fr_telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fr_telefono']) || !is_array($this->NM_ajax_info['errList']['fr_telefono']))
              {
                  $this->NM_ajax_info['errList']['fr_telefono'] = array();
              }
              $this->NM_ajax_info['errList']['fr_telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "01234567890123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->fr_telefono ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->fr_telefono, $_SESSION['scriptcase']['charset']); $x++) 
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
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_telefono'] . " " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['fr_telefono']))
              {
                  $Campos_Erros['fr_telefono'] = array();
              }
              $Campos_Erros['fr_telefono'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['fr_telefono']) || !is_array($this->NM_ajax_info['errList']['fr_telefono']))
              {
                  $this->NM_ajax_info['errList']['fr_telefono'] = array();
              }
              $this->NM_ajax_info['errList']['fr_telefono'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_telefono';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_telefono

    function ValidateField_fr_forma_pago(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fr_forma_pago'])) {
       return;
   }
      if ($this->fr_forma_pago == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_forma_pago']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_forma_pago'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_forma_pago'] . "" ; 
          if (!isset($Campos_Erros['fr_forma_pago']))
          {
              $Campos_Erros['fr_forma_pago'] = array();
          }
          $Campos_Erros['fr_forma_pago'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['fr_forma_pago']) || !is_array($this->NM_ajax_info['errList']['fr_forma_pago']))
          {
              $this->NM_ajax_info['errList']['fr_forma_pago'] = array();
          }
          $this->NM_ajax_info['errList']['fr_forma_pago'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->fr_forma_pago) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']) && !in_array($this->fr_forma_pago, $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['fr_forma_pago']))
              {
                  $Campos_Erros['fr_forma_pago'] = array();
              }
              $Campos_Erros['fr_forma_pago'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['fr_forma_pago']) || !is_array($this->NM_ajax_info['errList']['fr_forma_pago']))
              {
                  $this->NM_ajax_info['errList']['fr_forma_pago'] = array();
              }
              $this->NM_ajax_info['errList']['fr_forma_pago'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_forma_pago';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_forma_pago

    function ValidateField_fr_valor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_valor'])) {
          if (!empty($this->field_config['fr_valor']['symbol_dec'])) {
              nm_limpa_valor($this->fr_valor, $this->field_config['fr_valor']['symbol_dec'], $this->field_config['fr_valor']['symbol_grp']) ; 
          }
          return;
      }
      if (!empty($this->field_config['fr_valor']['symbol_dec']))
      {
          nm_limpa_valor($this->fr_valor, $this->field_config['fr_valor']['symbol_dec'], $this->field_config['fr_valor']['symbol_grp']) ; 
          if ('.' == substr($this->fr_valor, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fr_valor, 1)))
              {
                  $this->fr_valor = '';
              }
              else
              {
                  $this->fr_valor = '0' . $this->fr_valor;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fr_valor != '')  
          { 
              $iTestSize = 21;
              if (strlen($this->fr_valor) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_valor'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fr_valor']))
                  {
                      $Campos_Erros['fr_valor'] = array();
                  }
                  $Campos_Erros['fr_valor'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fr_valor']) || !is_array($this->NM_ajax_info['errList']['fr_valor']))
                  {
                      $this->NM_ajax_info['errList']['fr_valor'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_valor'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fr_valor, 18, 2, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_valor'] . "; " ; 
                  if (!isset($Campos_Erros['fr_valor']))
                  {
                      $Campos_Erros['fr_valor'] = array();
                  }
                  $Campos_Erros['fr_valor'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fr_valor']) || !is_array($this->NM_ajax_info['errList']['fr_valor']))
                  {
                      $this->NM_ajax_info['errList']['fr_valor'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_valor'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_valor']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_valor'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_valor'] . "" ; 
              if (!isset($Campos_Erros['fr_valor']))
              {
                  $Campos_Erros['fr_valor'] = array();
              }
              $Campos_Erros['fr_valor'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fr_valor']) || !is_array($this->NM_ajax_info['errList']['fr_valor']))
                  {
                      $this->NM_ajax_info['errList']['fr_valor'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_valor'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_valor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_valor

    function ValidateField_fr_forma_pago2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fr_forma_pago2'])) {
       return;
   }
               if (!empty($this->fr_forma_pago2) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']) && !in_array($this->fr_forma_pago2, $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fr_forma_pago2']))
                   {
                       $Campos_Erros['fr_forma_pago2'] = array();
                   }
                   $Campos_Erros['fr_forma_pago2'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fr_forma_pago2']) || !is_array($this->NM_ajax_info['errList']['fr_forma_pago2']))
                   {
                       $this->NM_ajax_info['errList']['fr_forma_pago2'] = array();
                   }
                   $this->NM_ajax_info['errList']['fr_forma_pago2'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_forma_pago2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_forma_pago2

    function ValidateField_fr_valor2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_valor2'])) {
          if (!empty($this->field_config['fr_valor2']['symbol_dec'])) {
              nm_limpa_valor($this->fr_valor2, $this->field_config['fr_valor2']['symbol_dec'], $this->field_config['fr_valor2']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fr_valor2 === "" || is_null($this->fr_valor2))  
      { 
          $this->fr_valor2 = 0;
          $this->sc_force_zero[] = 'fr_valor2';
      } 
      if (!empty($this->field_config['fr_valor2']['symbol_dec']))
      {
          nm_limpa_valor($this->fr_valor2, $this->field_config['fr_valor2']['symbol_dec'], $this->field_config['fr_valor2']['symbol_grp']) ; 
          if ('.' == substr($this->fr_valor2, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fr_valor2, 1)))
              {
                  $this->fr_valor2 = '';
              }
              else
              {
                  $this->fr_valor2 = '0' . $this->fr_valor2;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fr_valor2 != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->fr_valor2, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->fr_valor2, -1))
              {
                  $iTestSize++;
                  $this->fr_valor2 = '-' . substr($this->fr_valor2, 0, -1);
              }
              if (strlen($this->fr_valor2) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_valor'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fr_valor2']))
                  {
                      $Campos_Erros['fr_valor2'] = array();
                  }
                  $Campos_Erros['fr_valor2'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fr_valor2']) || !is_array($this->NM_ajax_info['errList']['fr_valor2']))
                  {
                      $this->NM_ajax_info['errList']['fr_valor2'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_valor2'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fr_valor2, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_valor'] . "; " ; 
                  if (!isset($Campos_Erros['fr_valor2']))
                  {
                      $Campos_Erros['fr_valor2'] = array();
                  }
                  $Campos_Erros['fr_valor2'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fr_valor2']) || !is_array($this->NM_ajax_info['errList']['fr_valor2']))
                  {
                      $this->NM_ajax_info['errList']['fr_valor2'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_valor2'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_valor2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_valor2

    function ValidateField_fr_forma_pago3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fr_forma_pago3'])) {
       return;
   }
               if (!empty($this->fr_forma_pago3) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']) && !in_array($this->fr_forma_pago3, $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fr_forma_pago3']))
                   {
                       $Campos_Erros['fr_forma_pago3'] = array();
                   }
                   $Campos_Erros['fr_forma_pago3'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fr_forma_pago3']) || !is_array($this->NM_ajax_info['errList']['fr_forma_pago3']))
                   {
                       $this->NM_ajax_info['errList']['fr_forma_pago3'] = array();
                   }
                   $this->NM_ajax_info['errList']['fr_forma_pago3'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_forma_pago3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_forma_pago3

    function ValidateField_fr_valor3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_valor3'])) {
          if (!empty($this->field_config['fr_valor3']['symbol_dec'])) {
              nm_limpa_valor($this->fr_valor3, $this->field_config['fr_valor3']['symbol_dec'], $this->field_config['fr_valor3']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fr_valor3 === "" || is_null($this->fr_valor3))  
      { 
          $this->fr_valor3 = 0;
          $this->sc_force_zero[] = 'fr_valor3';
      } 
      if (!empty($this->field_config['fr_valor3']['symbol_dec']))
      {
          nm_limpa_valor($this->fr_valor3, $this->field_config['fr_valor3']['symbol_dec'], $this->field_config['fr_valor3']['symbol_grp']) ; 
          if ('.' == substr($this->fr_valor3, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fr_valor3, 1)))
              {
                  $this->fr_valor3 = '';
              }
              else
              {
                  $this->fr_valor3 = '0' . $this->fr_valor3;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fr_valor3 != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->fr_valor3, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->fr_valor3, -1))
              {
                  $iTestSize++;
                  $this->fr_valor3 = '-' . substr($this->fr_valor3, 0, -1);
              }
              if (strlen($this->fr_valor3) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_valor'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fr_valor3']))
                  {
                      $Campos_Erros['fr_valor3'] = array();
                  }
                  $Campos_Erros['fr_valor3'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fr_valor3']) || !is_array($this->NM_ajax_info['errList']['fr_valor3']))
                  {
                      $this->NM_ajax_info['errList']['fr_valor3'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_valor3'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fr_valor3, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_valor'] . "; " ; 
                  if (!isset($Campos_Erros['fr_valor3']))
                  {
                      $Campos_Erros['fr_valor3'] = array();
                  }
                  $Campos_Erros['fr_valor3'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fr_valor3']) || !is_array($this->NM_ajax_info['errList']['fr_valor3']))
                  {
                      $this->NM_ajax_info['errList']['fr_valor3'] = array();
                  }
                  $this->NM_ajax_info['errList']['fr_valor3'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_valor3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_valor3

    function ValidateField_fr_comentario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fr_comentario'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fr_comentario) > 400) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_comentario'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 400 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fr_comentario']))
              {
                  $Campos_Erros['fr_comentario'] = array();
              }
              $Campos_Erros['fr_comentario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 400 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fr_comentario']) || !is_array($this->NM_ajax_info['errList']['fr_comentario']))
              {
                  $this->NM_ajax_info['errList']['fr_comentario'] = array();
              }
              $this->NM_ajax_info['errList']['fr_comentario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 400 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fr_comentario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fr_comentario

    function ValidateField_total_pago(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['total_pago'])) {
          if (!empty($this->field_config['total_pago']['symbol_dec'])) {
              nm_limpa_valor($this->total_pago, $this->field_config['total_pago']['symbol_dec'], $this->field_config['total_pago']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->total_pago === "" || is_null($this->total_pago))  
      { 
          $this->total_pago = 0;
          $this->sc_force_zero[] = 'total_pago';
      } 
      if (!empty($this->field_config['total_pago']['symbol_dec']))
      {
          nm_limpa_valor($this->total_pago, $this->field_config['total_pago']['symbol_dec'], $this->field_config['total_pago']['symbol_grp']) ; 
          if ('.' == substr($this->total_pago, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->total_pago, 1)))
              {
                  $this->total_pago = '';
              }
              else
              {
                  $this->total_pago = '0' . $this->total_pago;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->total_pago != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->total_pago, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->total_pago, -1))
              {
                  $iTestSize++;
                  $this->total_pago = '-' . substr($this->total_pago, 0, -1);
              }
              if (strlen($this->total_pago) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total_pago'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['total_pago']))
                  {
                      $Campos_Erros['total_pago'] = array();
                  }
                  $Campos_Erros['total_pago'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['total_pago']) || !is_array($this->NM_ajax_info['errList']['total_pago']))
                  {
                      $this->NM_ajax_info['errList']['total_pago'] = array();
                  }
                  $this->NM_ajax_info['errList']['total_pago'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->total_pago, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total_pago'] . "; " ; 
                  if (!isset($Campos_Erros['total_pago']))
                  {
                      $Campos_Erros['total_pago'] = array();
                  }
                  $Campos_Erros['total_pago'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['total_pago']) || !is_array($this->NM_ajax_info['errList']['total_pago']))
                  {
                      $this->NM_ajax_info['errList']['total_pago'] = array();
                  }
                  $this->NM_ajax_info['errList']['total_pago'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'total_pago';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_total_pago

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
    $this->nmgp_dados_form['fr_total'] = $this->fr_total;
    $this->nmgp_dados_form['fr_cedula'] = $this->fr_cedula;
    $this->nmgp_dados_form['fac_tipo_libretin'] = $this->fac_tipo_libretin;
    $this->nmgp_dados_form['fr_nombre'] = $this->fr_nombre;
    $this->nmgp_dados_form['fac_libretin'] = $this->fac_libretin;
    $this->nmgp_dados_form['fr_provincia'] = $this->fr_provincia;
    $this->nmgp_dados_form['fr_canton'] = $this->fr_canton;
    $this->nmgp_dados_form['fr_direccion'] = $this->fr_direccion;
    $this->nmgp_dados_form['fr_tipo_identificacion'] = $this->fr_tipo_identificacion;
    $this->nmgp_dados_form['fr_correo'] = $this->fr_correo;
    $this->nmgp_dados_form['fac_estado_sri'] = $this->fac_estado_sri;
    $this->nmgp_dados_form['fr_telefono'] = $this->fr_telefono;
    $this->nmgp_dados_form['fr_forma_pago'] = $this->fr_forma_pago;
    $this->nmgp_dados_form['fr_valor'] = $this->fr_valor;
    $this->nmgp_dados_form['fr_forma_pago2'] = $this->fr_forma_pago2;
    $this->nmgp_dados_form['fr_valor2'] = $this->fr_valor2;
    $this->nmgp_dados_form['fr_forma_pago3'] = $this->fr_forma_pago3;
    $this->nmgp_dados_form['fr_valor3'] = $this->fr_valor3;
    $this->nmgp_dados_form['fr_comentario'] = $this->fr_comentario;
    $this->nmgp_dados_form['total_pago'] = $this->total_pago;
    $this->nmgp_dados_form['fac_estado'] = $this->fac_estado;
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['fr_total'] = $this->fr_total;
      if (!empty($this->field_config['fr_total']['symbol_dec']))
      {
         nm_limpa_valor($this->fr_total, $this->field_config['fr_total']['symbol_dec'], $this->field_config['fr_total']['symbol_grp']);
      }
      $this->Before_unformat['fr_valor'] = $this->fr_valor;
      if (!empty($this->field_config['fr_valor']['symbol_dec']))
      {
         nm_limpa_valor($this->fr_valor, $this->field_config['fr_valor']['symbol_dec'], $this->field_config['fr_valor']['symbol_grp']);
      }
      $this->Before_unformat['fr_valor2'] = $this->fr_valor2;
      if (!empty($this->field_config['fr_valor2']['symbol_dec']))
      {
         nm_limpa_valor($this->fr_valor2, $this->field_config['fr_valor2']['symbol_dec'], $this->field_config['fr_valor2']['symbol_grp']);
      }
      $this->Before_unformat['fr_valor3'] = $this->fr_valor3;
      if (!empty($this->field_config['fr_valor3']['symbol_dec']))
      {
         nm_limpa_valor($this->fr_valor3, $this->field_config['fr_valor3']['symbol_dec'], $this->field_config['fr_valor3']['symbol_grp']);
      }
      $this->Before_unformat['total_pago'] = $this->total_pago;
      if (!empty($this->field_config['total_pago']['symbol_dec']))
      {
         nm_limpa_valor($this->total_pago, $this->field_config['total_pago']['symbol_dec'], $this->field_config['total_pago']['symbol_grp']);
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
      if ($Nome_Campo == "fr_total")
      {
          if (!empty($this->field_config['fr_total']['symbol_dec']))
          {
             nm_limpa_valor($this->fr_total, $this->field_config['fr_total']['symbol_dec'], $this->field_config['fr_total']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fr_valor")
      {
          if (!empty($this->field_config['fr_valor']['symbol_dec']))
          {
             nm_limpa_valor($this->fr_valor, $this->field_config['fr_valor']['symbol_dec'], $this->field_config['fr_valor']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fr_valor2")
      {
          if (!empty($this->field_config['fr_valor2']['symbol_dec']))
          {
             nm_limpa_valor($this->fr_valor2, $this->field_config['fr_valor2']['symbol_dec'], $this->field_config['fr_valor2']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fr_valor3")
      {
          if (!empty($this->field_config['fr_valor3']['symbol_dec']))
          {
             nm_limpa_valor($this->fr_valor3, $this->field_config['fr_valor3']['symbol_dec'], $this->field_config['fr_valor3']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "total_pago")
      {
          if (!empty($this->field_config['total_pago']['symbol_dec']))
          {
             nm_limpa_valor($this->total_pago, $this->field_config['total_pago']['symbol_dec'], $this->field_config['total_pago']['symbol_grp']);
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
      if ('' !== $this->fr_total || (!empty($format_fields) && isset($format_fields['fr_total'])))
      {
          nmgp_Form_Num_Val($this->fr_total, $this->field_config['fr_total']['symbol_grp'], $this->field_config['fr_total']['symbol_dec'], "2", "S", $this->field_config['fr_total']['format_neg'], "", "", "-", $this->field_config['fr_total']['symbol_fmt']) ; 
      }
      if ('' !== $this->fr_valor || (!empty($format_fields) && isset($format_fields['fr_valor'])))
      {
          nmgp_Form_Num_Val($this->fr_valor, $this->field_config['fr_valor']['symbol_grp'], $this->field_config['fr_valor']['symbol_dec'], "2", "S", $this->field_config['fr_valor']['format_neg'], "", "", "-", $this->field_config['fr_valor']['symbol_fmt']) ; 
      }
      if ('' !== $this->fr_valor2 || (!empty($format_fields) && isset($format_fields['fr_valor2'])))
      {
          nmgp_Form_Num_Val($this->fr_valor2, $this->field_config['fr_valor2']['symbol_grp'], $this->field_config['fr_valor2']['symbol_dec'], "2", "S", $this->field_config['fr_valor2']['format_neg'], "", "", "-", $this->field_config['fr_valor2']['symbol_fmt']) ; 
      }
      if ('' !== $this->fr_valor3 || (!empty($format_fields) && isset($format_fields['fr_valor3'])))
      {
          nmgp_Form_Num_Val($this->fr_valor3, $this->field_config['fr_valor3']['symbol_grp'], $this->field_config['fr_valor3']['symbol_dec'], "2", "S", $this->field_config['fr_valor3']['format_neg'], "", "", "-", $this->field_config['fr_valor3']['symbol_fmt']) ; 
      }
      if ('' !== $this->total_pago || (!empty($format_fields) && isset($format_fields['total_pago'])))
      {
          nmgp_Form_Num_Val($this->total_pago, $this->field_config['total_pago']['symbol_grp'], $this->field_config['total_pago']['symbol_dec'], "2", "S", $this->field_config['total_pago']['format_neg'], "", "", "-", $this->field_config['total_pago']['symbol_fmt']) ; 
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

   function ajax_return_values()
   {
          $this->ajax_return_values_fr_total();
          $this->ajax_return_values_fr_cedula();
          $this->ajax_return_values_fac_tipo_libretin();
          $this->ajax_return_values_fr_nombre();
          $this->ajax_return_values_fac_libretin();
          $this->ajax_return_values_fr_provincia();
          $this->ajax_return_values_fr_canton();
          $this->ajax_return_values_fr_direccion();
          $this->ajax_return_values_fr_tipo_identificacion();
          $this->ajax_return_values_fr_correo();
          $this->ajax_return_values_fac_estado_sri();
          $this->ajax_return_values_fr_telefono();
          $this->ajax_return_values_fr_forma_pago();
          $this->ajax_return_values_fr_valor();
          $this->ajax_return_values_fr_forma_pago2();
          $this->ajax_return_values_fr_valor2();
          $this->ajax_return_values_fr_forma_pago3();
          $this->ajax_return_values_fr_valor3();
          $this->ajax_return_values_fr_comentario();
          $this->ajax_return_values_total_pago();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          }
   } // ajax_return_values

          //----- fr_total
   function ajax_return_values_fr_total($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_total", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_total);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_total'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fr_cedula
   function ajax_return_values_fr_cedula($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_cedula", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_cedula);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_cedula'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fac_tipo_libretin
   function ajax_return_values_fac_tipo_libretin($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_tipo_libretin", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_tipo_libretin);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_tipo_libretin'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fr_nombre
   function ajax_return_values_fr_nombre($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_nombre", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_nombre);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_nombre'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fac_libretin
   function ajax_return_values_fac_libretin($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_libretin", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_libretin);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_libretin'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fr_provincia
   function ajax_return_values_fr_provincia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_provincia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_provincia);
              $aLookup = array();
              $this->_tmp_lookup_fr_provincia = $this->fr_provincia;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT pro_nombre, pro_nombre  FROM sis_provincia  where pro_pais=66 ORDER BY pro_nombre";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fr_provincia\"";
          if (isset($this->NM_ajax_info['select_html']['fr_provincia']) && !empty($this->NM_ajax_info['select_html']['fr_provincia']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fr_provincia']);
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

                  if ($this->fr_provincia == $sValue)
                  {
                      $this->_tmp_lookup_fr_provincia = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fr_provincia'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fr_provincia']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fr_provincia']['valList'][$i] = control_procesa_factura_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fr_provincia']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fr_provincia']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fr_provincia']['labList'] = $aLabel;
          }
   }

          //----- fr_canton
   function ajax_return_values_fr_canton($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_canton", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_canton);
              $aLookup = array();
              $this->_tmp_lookup_fr_canton = $this->fr_canton;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT can_nombre , can_nombre  FROM sis_canton  where can_provincia in (SELECT pro_id FROM sis_provincia where pro_nombre='$this->fr_provincia'  ) ORDER BY can_nombre";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fr_canton\"";
          if (isset($this->NM_ajax_info['select_html']['fr_canton']) && !empty($this->NM_ajax_info['select_html']['fr_canton']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fr_canton']);
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

                  if ($this->fr_canton == $sValue)
                  {
                      $this->_tmp_lookup_fr_canton = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fr_canton'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fr_canton']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fr_canton']['valList'][$i] = control_procesa_factura_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fr_canton']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fr_canton']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fr_canton']['labList'] = $aLabel;
          }
   }

          //----- fr_direccion
   function ajax_return_values_fr_direccion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_direccion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_direccion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_direccion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fr_tipo_identificacion
   function ajax_return_values_fr_tipo_identificacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_tipo_identificacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_tipo_identificacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_tipo_identificacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fr_correo
   function ajax_return_values_fr_correo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_correo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_correo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_correo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fac_estado_sri
   function ajax_return_values_fac_estado_sri($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_estado_sri", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_estado_sri);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_estado_sri'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fr_telefono
   function ajax_return_values_fr_telefono($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_telefono", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_telefono);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_telefono'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fr_forma_pago
   function ajax_return_values_fr_forma_pago($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_forma_pago", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_forma_pago);
              $aLookup = array();
              $this->_tmp_lookup_fr_forma_pago = $this->fr_forma_pago;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  where fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fr_forma_pago\"";
          if (isset($this->NM_ajax_info['select_html']['fr_forma_pago']) && !empty($this->NM_ajax_info['select_html']['fr_forma_pago']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fr_forma_pago']);
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

                  if ($this->fr_forma_pago == $sValue)
                  {
                      $this->_tmp_lookup_fr_forma_pago = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fr_forma_pago'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fr_forma_pago']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fr_forma_pago']['valList'][$i] = control_procesa_factura_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fr_forma_pago']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fr_forma_pago']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fr_forma_pago']['labList'] = $aLabel;
          }
   }

          //----- fr_valor
   function ajax_return_values_fr_valor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_valor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_valor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_valor'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fr_forma_pago2
   function ajax_return_values_fr_forma_pago2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_forma_pago2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_forma_pago2);
              $aLookup = array();
              $this->_tmp_lookup_fr_forma_pago2 = $this->fr_forma_pago2;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  where fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fr_forma_pago2\"";
          if (isset($this->NM_ajax_info['select_html']['fr_forma_pago2']) && !empty($this->NM_ajax_info['select_html']['fr_forma_pago2']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fr_forma_pago2']);
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

                  if ($this->fr_forma_pago2 == $sValue)
                  {
                      $this->_tmp_lookup_fr_forma_pago2 = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fr_forma_pago2'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fr_forma_pago2']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fr_forma_pago2']['valList'][$i] = control_procesa_factura_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fr_forma_pago2']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fr_forma_pago2']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fr_forma_pago2']['labList'] = $aLabel;
          }
   }

          //----- fr_valor2
   function ajax_return_values_fr_valor2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_valor2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_valor2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_valor2'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fr_forma_pago3
   function ajax_return_values_fr_forma_pago3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_forma_pago3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_forma_pago3);
              $aLookup = array();
              $this->_tmp_lookup_fr_forma_pago3 = $this->fr_forma_pago3;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  where fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', control_procesa_factura_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fr_forma_pago3\"";
          if (isset($this->NM_ajax_info['select_html']['fr_forma_pago3']) && !empty($this->NM_ajax_info['select_html']['fr_forma_pago3']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fr_forma_pago3']);
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

                  if ($this->fr_forma_pago3 == $sValue)
                  {
                      $this->_tmp_lookup_fr_forma_pago3 = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fr_forma_pago3'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fr_forma_pago3']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fr_forma_pago3']['valList'][$i] = control_procesa_factura_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fr_forma_pago3']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fr_forma_pago3']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fr_forma_pago3']['labList'] = $aLabel;
          }
   }

          //----- fr_valor3
   function ajax_return_values_fr_valor3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_valor3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_valor3);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_valor3'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fr_comentario
   function ajax_return_values_fr_comentario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fr_comentario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fr_comentario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fr_comentario'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- total_pago
   function ajax_return_values_total_pago($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("total_pago", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->total_pago);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['total_pago'] = array(
                       'row'    => '',
               'type'    => 'label',
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['upload_dir'][$fieldName][] = $newName;
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
   } // ajax_add_parameters
//
function actualiza_factura($cliente, $comentario)
{
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_var_factura)) {$this->sc_temp_var_factura = (isset($_SESSION['var_factura'])) ? $_SESSION['var_factura'] : "";}
  
$update_sql = "UPDATE del_factura 
SET 
 fac_cliente=".$cliente.",
 fac_comentario='".$comentario."'
WHERE fac_numero=".$this->sc_temp_var_factura.";";

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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function fr_cantidad_onChange()
{
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
$original_fr_total = $this->fr_total;
$original_fr_valor = $this->fr_valor;

if($fr_cantidad ==0){
	$fr_cantidad =1;
}
$this->fr_total =$fr_cantidad *$this->fr_valor ;

$modificado_fr_total = $this->fr_total;
$modificado_fr_valor = $this->fr_valor;
$this->nm_formatar_campos('fr_total', 'fr_valor');
if ($original_fr_total !== $modificado_fr_total || isset($this->nmgp_cmp_readonly['fr_total']) || (isset($bFlagRead_fr_total) && $bFlagRead_fr_total))
{
    $this->ajax_return_values_fr_total(true);
}
if ($original_fr_valor !== $modificado_fr_valor || isset($this->nmgp_cmp_readonly['fr_valor']) || (isset($bFlagRead_fr_valor) && $bFlagRead_fr_valor))
{
    $this->ajax_return_values_fr_valor(true);
}
$this->NM_ajax_info['event_field'] = 'fr';
control_procesa_factura_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function fr_cedula_onChange()
{
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
$original_fr_cedula = $this->fr_cedula;
$original_fr_tipo_identificacion = $this->fr_tipo_identificacion;
$original_fr_nombre = $this->fr_nombre;
$original_fr_provincia = $this->fr_provincia;
$original_fr_canton = $this->fr_canton;
$original_fr_direccion = $this->fr_direccion;
$original_fr_correo = $this->fr_correo;
$original_fr_telefono = $this->fr_telefono;

if (strlen($this->fr_cedula )==13){
	if ($this->validar_esRuc($this->fr_cedula )==0 and $this->fr_cedula <>'9999999999999'){
		$this->fr_tipo_identificacion ='PASAPORTE';
		$this->sc_ajax_message( $this->Ini->Nm_lang['lang_ruc_invalido'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	}else{
		if($this->fr_cedula =='9999999999999'){
			$this->fr_tipo_identificacion ='VENTA CONSUMIDOR FINAL';
		}else{
			$this->fr_tipo_identificacion ='RUC';
		}	
	}
}elseif (strlen($this->fr_cedula )==10){
	if ($this->esCedula($this->fr_cedula )==0){
		$this->fr_tipo_identificacion ='PASAPORTE';
		$this->sc_ajax_message( $this->Ini->Nm_lang['lang_cedula_invalida'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	}else{
		$this->fr_tipo_identificacion ='CEDULA';
	}
}else{
	$this->fr_tipo_identificacion ='PASAPORTE';	
	$this->sc_ajax_message("Se usará la identificación como pasaporte", "Error","toast=Y&toasto_pos=center-start&type=error");
}

$respuesta=consultaNombres($this->fr_cedula );
if($respuesta['error']=='0'){
	$ciudadano=$respuesta['datos'];
	$this->fr_nombre =		$ciudadano['nombre'];
	$this->fr_provincia =		$ciudadano['provincia'];
	$this->fr_canton =		$ciudadano['canton'];
	$this->fr_direccion =		$ciudadano['direccion'];
	$this->fr_correo =		$ciudadano['correo'];
	$this->fr_telefono =		$ciudadano['telefono'];
}	

$modificado_fr_cedula = $this->fr_cedula;
$modificado_fr_tipo_identificacion = $this->fr_tipo_identificacion;
$modificado_fr_nombre = $this->fr_nombre;
$modificado_fr_provincia = $this->fr_provincia;
$modificado_fr_canton = $this->fr_canton;
$modificado_fr_direccion = $this->fr_direccion;
$modificado_fr_correo = $this->fr_correo;
$modificado_fr_telefono = $this->fr_telefono;
$this->nm_formatar_campos('fr_cedula', 'fr_tipo_identificacion', 'fr_nombre', 'fr_provincia', 'fr_canton', 'fr_direccion', 'fr_correo', 'fr_telefono');
if ($original_fr_cedula !== $modificado_fr_cedula || isset($this->nmgp_cmp_readonly['fr_cedula']) || (isset($bFlagRead_fr_cedula) && $bFlagRead_fr_cedula))
{
    $this->ajax_return_values_fr_cedula(true);
}
if ($original_fr_tipo_identificacion !== $modificado_fr_tipo_identificacion || isset($this->nmgp_cmp_readonly['fr_tipo_identificacion']) || (isset($bFlagRead_fr_tipo_identificacion) && $bFlagRead_fr_tipo_identificacion))
{
    $this->ajax_return_values_fr_tipo_identificacion(true);
}
if ($original_fr_nombre !== $modificado_fr_nombre || isset($this->nmgp_cmp_readonly['fr_nombre']) || (isset($bFlagRead_fr_nombre) && $bFlagRead_fr_nombre))
{
    $this->ajax_return_values_fr_nombre(true);
}
if ($original_fr_provincia !== $modificado_fr_provincia || isset($this->nmgp_cmp_readonly['fr_provincia']) || (isset($bFlagRead_fr_provincia) && $bFlagRead_fr_provincia))
{
    $this->ajax_return_values_fr_provincia(true);
}
if ($original_fr_canton !== $modificado_fr_canton || isset($this->nmgp_cmp_readonly['fr_canton']) || (isset($bFlagRead_fr_canton) && $bFlagRead_fr_canton))
{
    $this->ajax_return_values_fr_canton(true);
}
if ($original_fr_direccion !== $modificado_fr_direccion || isset($this->nmgp_cmp_readonly['fr_direccion']) || (isset($bFlagRead_fr_direccion) && $bFlagRead_fr_direccion))
{
    $this->ajax_return_values_fr_direccion(true);
}
if ($original_fr_correo !== $modificado_fr_correo || isset($this->nmgp_cmp_readonly['fr_correo']) || (isset($bFlagRead_fr_correo) && $bFlagRead_fr_correo))
{
    $this->ajax_return_values_fr_correo(true);
}
if ($original_fr_telefono !== $modificado_fr_telefono || isset($this->nmgp_cmp_readonly['fr_telefono']) || (isset($bFlagRead_fr_telefono) && $bFlagRead_fr_telefono))
{
    $this->ajax_return_values_fr_telefono(true);
}
$this->NM_ajax_info['event_field'] = 'fr';
control_procesa_factura_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function fr_valor_onChange()
{
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
$original_total_pago = $this->total_pago;
$original_fr_valor = $this->fr_valor;
$original_fr_valor2 = $this->fr_valor2;
$original_fr_valor3 = $this->fr_valor3;

$this->pago();


$modificado_total_pago = $this->total_pago;
$modificado_fr_valor = $this->fr_valor;
$modificado_fr_valor2 = $this->fr_valor2;
$modificado_fr_valor3 = $this->fr_valor3;
$this->nm_formatar_campos('total_pago', 'fr_valor', 'fr_valor2', 'fr_valor3');
if ($original_total_pago !== $modificado_total_pago || isset($this->nmgp_cmp_readonly['total_pago']) || (isset($bFlagRead_total_pago) && $bFlagRead_total_pago))
{
    $this->ajax_return_values_total_pago(true);
}
if ($original_fr_valor !== $modificado_fr_valor || isset($this->nmgp_cmp_readonly['fr_valor']) || (isset($bFlagRead_fr_valor) && $bFlagRead_fr_valor))
{
    $this->ajax_return_values_fr_valor(true);
}
if ($original_fr_valor2 !== $modificado_fr_valor2 || isset($this->nmgp_cmp_readonly['fr_valor2']) || (isset($bFlagRead_fr_valor2) && $bFlagRead_fr_valor2))
{
    $this->ajax_return_values_fr_valor2(true);
}
if ($original_fr_valor3 !== $modificado_fr_valor3 || isset($this->nmgp_cmp_readonly['fr_valor3']) || (isset($bFlagRead_fr_valor3) && $bFlagRead_fr_valor3))
{
    $this->ajax_return_values_fr_valor3(true);
}
$this->NM_ajax_info['event_field'] = 'fr';
control_procesa_factura_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function fr_valor2_onChange()
{
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
$original_total_pago = $this->total_pago;
$original_fr_valor = $this->fr_valor;
$original_fr_valor2 = $this->fr_valor2;
$original_fr_valor3 = $this->fr_valor3;

$this->pago();

$modificado_total_pago = $this->total_pago;
$modificado_fr_valor = $this->fr_valor;
$modificado_fr_valor2 = $this->fr_valor2;
$modificado_fr_valor3 = $this->fr_valor3;
$this->nm_formatar_campos('total_pago', 'fr_valor', 'fr_valor2', 'fr_valor3');
if ($original_total_pago !== $modificado_total_pago || isset($this->nmgp_cmp_readonly['total_pago']) || (isset($bFlagRead_total_pago) && $bFlagRead_total_pago))
{
    $this->ajax_return_values_total_pago(true);
}
if ($original_fr_valor !== $modificado_fr_valor || isset($this->nmgp_cmp_readonly['fr_valor']) || (isset($bFlagRead_fr_valor) && $bFlagRead_fr_valor))
{
    $this->ajax_return_values_fr_valor(true);
}
if ($original_fr_valor2 !== $modificado_fr_valor2 || isset($this->nmgp_cmp_readonly['fr_valor2']) || (isset($bFlagRead_fr_valor2) && $bFlagRead_fr_valor2))
{
    $this->ajax_return_values_fr_valor2(true);
}
if ($original_fr_valor3 !== $modificado_fr_valor3 || isset($this->nmgp_cmp_readonly['fr_valor3']) || (isset($bFlagRead_fr_valor3) && $bFlagRead_fr_valor3))
{
    $this->ajax_return_values_fr_valor3(true);
}
$this->NM_ajax_info['event_field'] = 'fr';
control_procesa_factura_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function fr_valor3_onChange()
{
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
$original_total_pago = $this->total_pago;
$original_fr_valor = $this->fr_valor;
$original_fr_valor2 = $this->fr_valor2;
$original_fr_valor3 = $this->fr_valor3;

$this->pago();

$modificado_total_pago = $this->total_pago;
$modificado_fr_valor = $this->fr_valor;
$modificado_fr_valor2 = $this->fr_valor2;
$modificado_fr_valor3 = $this->fr_valor3;
$this->nm_formatar_campos('total_pago', 'fr_valor', 'fr_valor2', 'fr_valor3');
if ($original_total_pago !== $modificado_total_pago || isset($this->nmgp_cmp_readonly['total_pago']) || (isset($bFlagRead_total_pago) && $bFlagRead_total_pago))
{
    $this->ajax_return_values_total_pago(true);
}
if ($original_fr_valor !== $modificado_fr_valor || isset($this->nmgp_cmp_readonly['fr_valor']) || (isset($bFlagRead_fr_valor) && $bFlagRead_fr_valor))
{
    $this->ajax_return_values_fr_valor(true);
}
if ($original_fr_valor2 !== $modificado_fr_valor2 || isset($this->nmgp_cmp_readonly['fr_valor2']) || (isset($bFlagRead_fr_valor2) && $bFlagRead_fr_valor2))
{
    $this->ajax_return_values_fr_valor2(true);
}
if ($original_fr_valor3 !== $modificado_fr_valor3 || isset($this->nmgp_cmp_readonly['fr_valor3']) || (isset($bFlagRead_fr_valor3) && $bFlagRead_fr_valor3))
{
    $this->ajax_return_values_fr_valor3(true);
}
$this->NM_ajax_info['event_field'] = 'fr';
control_procesa_factura_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function pago()
{
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
$this->total_pago =$this->fr_valor +$this->fr_valor2 +$this->fr_valor3 ;

$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function registrar_pago($forma_pago, $valor)
{
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_var_factura)) {$this->sc_temp_var_factura = (isset($_SESSION['var_factura'])) ? $_SESSION['var_factura'] : "";}
  
$insert_sql = "INSERT INTO del_forma_pago_factura(
					fp_factura,
					fp_forma_pago,
					fp_valor,
					fp_plazo,
					fp_unidad_tiempo,
					fp_lote,
					fp_transaccion) 
				VALUES (
						".$this->sc_temp_var_factura.",
						".$forma_pago.",
						".$valor.",
						1,
						'DIAS',
						'',
						''
					)";


     $nm_select = $insert_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function crearNombreCarpeta($xmlComprobante) {
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function crearNombreFichero($xmlComprobante,$extension) {
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function crearNombreFicheroSinExtension($xmlComprobante){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
		
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
	
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function crearMensajeCorreo($xmlComprobante, $w_ruta_logo) {
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function enviarCorreo($xmlComprobante,$correo_destino){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
		
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
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function autorizar_factura ($fac_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  	
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function autorizar_liquidacion ($liq_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function autorizar_nc ($nc_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function autorizar_guia	($gr_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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
							$detalle = new DetalleGuiaRemision();
							$detalle->codigoInterno = $this->rs_detalles->fields[1];
							$detalle->codigoAdicional = $this->rs_detalles->fields[2];
							$detalle->descripcion = $this->rs_detalles->fields[3];
							$detalle->cantidad = $this->rs_detalles->fields[4];
							$detalles[$j] = $detalle;
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function autorizar_retencion ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function autorizar_retencion_dos ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				}
				return $mensaje_final;
				
			}
		}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function autorizar_nd ($nd_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function seleccionaCliente($i_empresa, $i_cliente){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
		$select_sql="SELECT id,
                            empresa,
                            nombre,
                            tipo_identificacion,
                            identificacion,
                            pais,
                            provincia,
                            ciudad,
                            direccion,
                            telefono,
                            celular,
                            email 
                        FROM v_ws_clientes
                        WHERE empresa='".$i_empresa."'
                        AND   identificacion='".$i_cliente."';";
		 
      $nm_select = $select_sql; 
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
			$w_respuesta = array(
                    'id'                        =>$this->rs[0][0],
                    'empresa'                   =>$this->rs[0][1],
                    'nombre'                    =>$this->rs[0][2],
                    'tipo_identificacion'       =>$this->rs[0][3],
                    'identificacion'            =>$this->rs[0][4],
                    'pais'                      =>$this->rs[0][5],
                    'provincia'                 =>$this->rs[0][6],
                    'ciudad'                    =>$this->rs[0][7],
                    'direccion'                 =>$this->rs[0][8],
                    'telefono'                  =>$this->rs[0][9],
                    'celular'                   =>$this->rs[0][10],
                    'email'                     =>$this->rs[0][11]
                );
                
		}else{
			$w_respuesta = array();
		}
		return $w_respuesta;
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function registraCliente($i_data){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
		$insert_sql="INSERT INTO del_cliente(
                            cl_id,
                            cl_empresa,
                            cl_nombre,
                            cl_tipo_identificacion,
                            cl_identificacion,
                            cl_pais,
                            cl_provincia,
                            cl_ciudad,
                            cl_direccion,
                            cl_telefono,
                            cl_email) 
                        VALUES(
                            (SELECT max(cl_id)+1 FROM del_cliente),
                            '".$i_data['empresa']."',
                            '".$i_data['nombre']."',
                            (SELECT ti_codigo FROM sri_tipo_identificacion WHERE ti_nombre='".strtoupper($i_data['tipo_identificacion'])."'),
                            '".$i_data['identificacion']."',
                            (SELECT pai_id FROM sis_pais WHERE pai_nombre IN ('".strtoupper($i_data['pais'])."','ECUADOR')),
                            (SELECT pro_id FROM sis_provincia WHERE pro_nombre='".strtoupper($i_data['provincia'])."'),
                            (SELECT can_id FROM sis_canton WHERE can_nombre='".strtoupper($i_data['ciudad'])."'),
                            '".$i_data['direccion']."',
                            '".$i_data['telefono']."',
                            '".$i_data['email']."');"; 
		
     $nm_select = $insert_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function actualizaCliente($i_data){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
		$update_sql="UPDATE del_cliente 
                    SET	cl_nombre='".$i_data['nombre']."',
                        cl_tipo_identificacion=(SELECT ti_codigo 
												FROM sri_tipo_identificacion 
												WHERE ti_nombre='".strtoupper($i_data['tipo_identificacion'])."'),
                        cl_pais=(SELECT pai_id 
								 FROM sis_pais 
								 WHERE pai_nombre IN ('".strtoupper($i_data['pais'])."','ECUADOR')),
                        cl_provincia=(SELECT pro_id 
									  FROM sis_provincia 
									  WHERE pro_nombre='".strtoupper($i_data['provincia'])."'),
                        cl_ciudad=(SELECT can_id 
									FROM sis_canton 
									WHERE can_nombre='".strtoupper($i_data['ciudad'])."'),
                        cl_direccion='".$i_data['direccion']."',
                        cl_telefono='".$i_data['telefono']."',
                        cl_email='".$i_data['email']."' 
                    WHERE cl_empresa='".$i_data['empresa']."'
                    and cl_identificacion='".$i_data['identificacion']."';"; 
		
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
                control_procesa_factura_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function insertUpdateCliente($i_data){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
		$w_validacion=$this->validarDatosCliente($i_data);
		if($w_validacion['error']<>'0'){
            return $w_validacion;
        }
		$select_sql="SELECT count(*) 
                    FROM del_cliente 
                    WHERE cl_empresa='".$i_data['empresa']."'
                    AND cl_identificacion='".$i_data['identificacion']."'";
		 
      $nm_select = $select_sql; 
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

		if ($this->rs[0][0]==0){
			$this->registraCliente($i_data);
		}else{
			$this->actualizaCliente($i_data);
		}
		
		$o_respuesta=$this->seleccionaCliente($i_data['empresa'], $i_data['identificacion']);
		return $o_respuesta;
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function validarDatosCliente($i_data){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
		if (!isset($i_data['empresa'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo empresa');
			return $o_respuesta;
		}
		if (!isset($i_data['nombre'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo nombre');
			return $o_respuesta;
		}
		if (!isset($i_data['tipo_identificacion'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo tipo_identificacion');
			return $o_respuesta;
		}
		if (!isset($i_data['identificacion'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo identificacion');
			return $o_respuesta;

		}
		if (!isset($i_data['pais'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo pais');
			return $o_respuesta;
		}
		if (!isset($i_data['provincia'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo provincial');
			return $o_respuesta;
		}
		if (!isset($i_data['ciudad'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo ciudad');
			return $o_respuesta;
		}
		if (!isset($i_data['direccion'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo direccion');
			return $o_respuesta;
		}
		if (!isset($i_data['telefono'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo telefono');
			return $o_respuesta;
		}
		
		if (!isset($i_data['email'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo email');
			return $o_respuesta;
		}
		$o_respuesta=array('error'=>'0','mensaje'=>'ok');
		return $o_respuesta;
	
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function consultaProvincia($campo, $valor){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
		$check_sql="SELECT  pro_id,
							pro_pais,
							pro_nombre,
							pro_codigo 
					FROM sis_provincia 
					WHERE ".$campo."::text=upper('".$valor."') 
					AND pro_pais=66";
		 
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
			$w_respuesta = array(
				'id'	=>$this->rs[0][0],
				'pais'	=>$this->rs[0][1],
				'nombre'=>$this->rs[0][2],
				'codigo'=>$this->rs[0][3]
			);
		}else{
			$w_respuesta = array(
				'id'	=>'',
				'pais'	=>'',
				'nombre'=>'',
				'codigo'=>''
			);
		}
		return $w_respuesta;
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function consultaCanton($campo, $valor, $provincia){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
		$check_sql="SELECT  can_id,
							can_provincia,
							can_nombre,
							can_codigo,
							can_pais 
					FROM sis_canton
					where ".$campo."::text=upper('".$valor."')
					AND can_pais=66
					AND can_provincia=".$provincia ;
		
		 
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
			$w_respuesta = array(
				'id'=>$this->rs[0][0],
				'provincia'=>$this->rs[0][1],
				'nombre'=>$this->rs[0][2],
				'codigo'=>$this->rs[0][3],
				'pais'=>$this->rs[0][4]
			);
		}else{
			$w_respuesta = array(
				'id'=>			'',
				'provincia'=>	'',
				'nombre'=>		'',
				'codigo'=>		'',
				'pais'=>		''
			);
		}
		return $w_respuesta;
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function esCedula($ced) {
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function EsRUC_natural($identificacion) {
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function EsRUC_juridico($identificacion) {
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
	
	return 1;

$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function EsRUC_Publica($identificacion) {
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function validar_esRuc($ced){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
}
function validar_CedulaRuc($ced){
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              control_procesa_factura_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
      if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1) 
      { 
          $nm_saida_global = $_SESSION['scriptcase']['nm_sc_retorno']; 
      } 
    if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
    $_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fac_estado_sri = $this->fac_estado_sri;
    $original_fac_libretin = $this->fac_libretin;
    $original_fac_tipo_libretin = $this->fac_tipo_libretin;
    $original_fr_total = $this->fr_total;
    $original_fr_valor = $this->fr_valor;
    $original_fr_valor2 = $this->fr_valor2;
    $original_fr_valor3 = $this->fr_valor3;
    $original_total_pago = $this->total_pago;
}
if (!isset($this->sc_temp_var_factura)) {$this->sc_temp_var_factura = (isset($_SESSION['var_factura'])) ? $_SESSION['var_factura'] : "";}
  $check_sql = "SELECT fac_total,
					 fac_libretin,
					 fac_tipo_libretin,
					 fac_estado_sri,
					 fac_estado
			  FROM del_factura 
			  where fac_numero=".$this->sc_temp_var_factura;
 
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
	$this->fr_total  = $this->rs[0][0];
	$this->fr_valor  = $this->rs[0][0];
	$this->fac_libretin =$this->rs[0][1];
	$this->fac_tipo_libretin =$this->rs[0][2];
	$this->fac_estado_sri =$this->rs[0][3];
	$this->fac_estado =$this->rs[0][4];
	$this->pago();
		
}
if (isset($this->sc_temp_var_factura)) { $_SESSION['var_factura'] = $this->sc_temp_var_factura;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fac_estado_sri != $this->fac_estado_sri || (isset($bFlagRead_fac_estado_sri) && $bFlagRead_fac_estado_sri)))
    {
        $this->ajax_return_values_fac_estado_sri(true);
    }
    if (($original_fac_libretin != $this->fac_libretin || (isset($bFlagRead_fac_libretin) && $bFlagRead_fac_libretin)))
    {
        $this->ajax_return_values_fac_libretin(true);
    }
    if (($original_fac_tipo_libretin != $this->fac_tipo_libretin || (isset($bFlagRead_fac_tipo_libretin) && $bFlagRead_fac_tipo_libretin)))
    {
        $this->ajax_return_values_fac_tipo_libretin(true);
    }
    if (($original_fr_total != $this->fr_total || (isset($bFlagRead_fr_total) && $bFlagRead_fr_total)))
    {
        $this->ajax_return_values_fr_total(true);
    }
    if (($original_fr_valor != $this->fr_valor || (isset($bFlagRead_fr_valor) && $bFlagRead_fr_valor)))
    {
        $this->ajax_return_values_fr_valor(true);
    }
    if (($original_fr_valor2 != $this->fr_valor2 || (isset($bFlagRead_fr_valor2) && $bFlagRead_fr_valor2)))
    {
        $this->ajax_return_values_fr_valor2(true);
    }
    if (($original_fr_valor3 != $this->fr_valor3 || (isset($bFlagRead_fr_valor3) && $bFlagRead_fr_valor3)))
    {
        $this->ajax_return_values_fr_valor3(true);
    }
    if (($original_total_pago != $this->total_pago || (isset($bFlagRead_total_pago) && $bFlagRead_total_pago)))
    {
        $this->ajax_return_values_total_pago(true);
    }
}
$_SESSION['scriptcase']['control_procesa_factura_mob']['contr_erro'] = 'off'; 
    }
    if (!empty($this->Campos_Mens_erro)) 
    {
        $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
    }
    $this->nm_guardar_campos();
    $this->nm_formatar_campos();
        $this->initFormPages();
    include_once("control_procesa_factura_mob_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array(""))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['csrf_token'];
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

   function Form_lookup_fr_provincia()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT pro_nombre, pro_nombre  FROM sis_provincia  where pro_pais=66 ORDER BY pro_nombre";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'][] = $rs->fields[0];
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
   function Form_lookup_fr_canton()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT can_nombre , can_nombre  FROM sis_canton  where can_provincia in (SELECT pro_id FROM sis_provincia where pro_nombre='$this->fr_provincia'  ) ORDER BY can_nombre";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'][] = $rs->fields[0];
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
   function Form_lookup_fr_forma_pago()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  where fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'][] = $rs->fields[0];
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
   function Form_lookup_fr_forma_pago2()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  where fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'][] = $rs->fields[0];
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
   function Form_lookup_fr_forma_pago3()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  where fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'][] = $rs->fields[0];
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
       $nmgp_saida_form = "control_procesa_factura_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "control_procesa_factura_mob_fim.php";
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
       control_procesa_factura_mob_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue']);
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
function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $opc="", $alt_modal=430, $larg_modal=630)
{
   if (isset($this->NM_is_redirected) && $this->NM_is_redirected)
   {
       return;
   }
   if (is_array($nm_apl_parms))
   {
       $tmp_parms = "";
       foreach ($nm_apl_parms as $par => $val)
       {
           $par = trim($par);
           $val = trim($val);
           $tmp_parms .= str_replace(".", "_", $par) . "?#?";
           if (substr($val, 0, 1) == "$")
           {
               $tmp_parms .= $$val;
           }
           elseif (substr($val, 0, 1) == "{")
           {
               $val        = substr($val, 1, -1);
               $tmp_parms .= $this->$val;
           }
           elseif (substr($val, 0, 1) == "[")
           {
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob'][substr($val, 1, -1)];
           }
           else
           {
               $tmp_parms .= $val;
           }
           $tmp_parms .= "?@?";
       }
       $nm_apl_parms = $tmp_parms;
   }
   if (empty($opc))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opc_ant'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           control_procesa_factura_mob_pack_ajax_response();
           exit;
       }
       echo "<SCRIPT language=\"javascript\">";
       if (strtolower($nm_target) == "_blank")
       {
           echo "window.open ('" . $nm_apl_dest . "');";
           echo "</SCRIPT>";
           return;
       }
       else
       {
           echo "window.location='" . $nm_apl_dest . "';";
           echo "</SCRIPT>";
           $this->NM_close_db();
           exit;
       }
   }
   $dir = explode("/", $nm_apl_dest);
   if (count($dir) == 1)
   {
       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
       $nm_apl_dest = $this->Ini->path_link . SC_dir_app_name($nm_apl_dest) . "/" . $nm_apl_dest . ".php";
   }
   if ($this->NM_ajax_flag)
   {
       $nm_apl_parms = str_replace("?#?", "*scin", NM_charset_to_utf8($nm_apl_parms));
       $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
       $this->NM_ajax_info['redir']['metodo']     = 'post';
       $this->NM_ajax_info['redir']['action']     = $nm_apl_dest;
       $this->NM_ajax_info['redir']['nmgp_parms'] = $nm_apl_parms;
       $this->NM_ajax_info['redir']['target']     = $nm_target_form;
       $this->NM_ajax_info['redir']['h_modal']    = $alt_modal;
       $this->NM_ajax_info['redir']['w_modal']    = $larg_modal;
       if ($nm_target_form == "_blank")
       {
           $this->NM_ajax_info['redir']['nmgp_outra_jan'] = 'true';
       }
       else
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida']      = $nm_apl_retorno;
           $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       }
       control_procesa_factura_mob_pack_ajax_response();
       exit;
   }
   if ($nm_target == "modal")
   {
       if (!empty($nm_apl_parms))
       {
           $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
           $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
           $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
       }
       $par_modal = "?script_case_init=" . $this->Ini->sc_page . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
       $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
       $this->NM_is_redirected = true;
       return;
   }
   if ($nm_target == "_blank")
   {
?>
<form name="Fredir" method="post" target="_blank" action="<?php echo $nm_apl_dest; ?>">
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
</form>
<script type="text/javascript">
setTimeout(function() { document.Fredir.submit(); }, 250);
</script>
<?php
    return;
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
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
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_third; ?>jquery/js/jquery.js"></SCRIPT>
   </HEAD>
   <BODY>
<?php
   }
?>
<form name="Fredir" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
<?php
   if ($nm_target_form == "_blank")
   {
?>
  <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
  <input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nm_apl_retorno) ?>">
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
<?php
   }
?>
</form> 
   <SCRIPT type="text/javascript">
<?php
   if ($nm_target_form == "modal")
   {
?>
       $(document).ready(function(){
           tb_show('', '<?php echo $nm_apl_dest ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&nmgp_url_saida=modal&nmgp_parms=<?php echo $this->form_encode_input($nm_apl_parms); ?>&nmgp_outra_jan=true&TB_iframe=true&height=<?php echo $alt_modal; ?>&width=<?php echo $larg_modal; ?>&modal=true', '');
       });
<?php
   }
   else
   {
?>
    $(function() {
       document.Fredir.target = "<?php echo $nm_target_form ?>"; 
       document.Fredir.action = "<?php echo $nm_apl_dest ?>";
       document.Fredir.submit();
    });
<?php
   }
?>
   </SCRIPT>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
   </BODY>
   </HTML>
<?php
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
       $this->NM_close_db();
       exit;
   }
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
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "ok":
                return array("sub_form_b.sc-unique-btn-1", "sub_form_b.sc-unique-btn-4");
                break;
            case "help":
                return array("sc_b_hlp_b");
                break;
            case "exit":
                return array("Bsair_b.sc-unique-btn-2", "Bsair_b.sc-unique-btn-5", "Bsair_b.sc-unique-btn-3", "Bsair_b.sc-unique-btn-6");
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['ordem_ord'] == " desc") {
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
            case "":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
