<?php
//
class form_del_nota_debito_compras_apl
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
                                'navSummary'        => array(),
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
   var $nd_proveedor;
   var $nd_iddocmod;
   var $nd_serie_docmod;
   var $nd_secuencial_docmod;
   var $nd_fecha_emison_docmod;
   var $nd_serie;
   var $nd_secuencial;
   var $nd_fecha;
   var $nd_subtotal;
   var $nd_subtotal_iva;
   var $nd_subtotal_cero;
   var $nd_subtotal_no_objeto;
   var $nd_subtotal_excento;
   var $nd_valor_ice;
   var $nd_valor_iva;
   var $nd_total;
   var $nd_estado;
   var $nd_estado_sri;
   var $nd_autorizacion;
   var $nd_usuario;
   var $nd_cod_docmod;
   var $detalles;
   var $titulo;
   var $tipo_doc_sustento;
   var $serie_sustento;
   var $secuencial_sustento;
   var $fecha_sustento;
   var $fac_nombre_cliente;
   var $fac_ruc_cliente;
   var $fac_direccion_cliente;
   var $fac_email_cliente;
   var $forma_pago;
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
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['detalles']))
          {
              $this->detalles = $this->NM_ajax_info['param']['detalles'];
          }
          if (isset($this->NM_ajax_info['param']['fac_direccion_cliente']))
          {
              $this->fac_direccion_cliente = $this->NM_ajax_info['param']['fac_direccion_cliente'];
          }
          if (isset($this->NM_ajax_info['param']['fac_email_cliente']))
          {
              $this->fac_email_cliente = $this->NM_ajax_info['param']['fac_email_cliente'];
          }
          if (isset($this->NM_ajax_info['param']['fac_nombre_cliente']))
          {
              $this->fac_nombre_cliente = $this->NM_ajax_info['param']['fac_nombre_cliente'];
          }
          if (isset($this->NM_ajax_info['param']['fac_ruc_cliente']))
          {
              $this->fac_ruc_cliente = $this->NM_ajax_info['param']['fac_ruc_cliente'];
          }
          if (isset($this->NM_ajax_info['param']['fecha_sustento']))
          {
              $this->fecha_sustento = $this->NM_ajax_info['param']['fecha_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['forma_pago']))
          {
              $this->forma_pago = $this->NM_ajax_info['param']['forma_pago'];
          }
          if (isset($this->NM_ajax_info['param']['nd_autorizacion']))
          {
              $this->nd_autorizacion = $this->NM_ajax_info['param']['nd_autorizacion'];
          }
          if (isset($this->NM_ajax_info['param']['nd_cod_docmod']))
          {
              $this->nd_cod_docmod = $this->NM_ajax_info['param']['nd_cod_docmod'];
          }
          if (isset($this->NM_ajax_info['param']['nd_fecha']))
          {
              $this->nd_fecha = $this->NM_ajax_info['param']['nd_fecha'];
          }
          if (isset($this->NM_ajax_info['param']['nd_fecha_emison_docmod']))
          {
              $this->nd_fecha_emison_docmod = $this->NM_ajax_info['param']['nd_fecha_emison_docmod'];
          }
          if (isset($this->NM_ajax_info['param']['nd_iddocmod']))
          {
              $this->nd_iddocmod = $this->NM_ajax_info['param']['nd_iddocmod'];
          }
          if (isset($this->NM_ajax_info['param']['nd_numero']))
          {
              $this->nd_numero = $this->NM_ajax_info['param']['nd_numero'];
          }
          if (isset($this->NM_ajax_info['param']['nd_proveedor']))
          {
              $this->nd_proveedor = $this->NM_ajax_info['param']['nd_proveedor'];
          }
          if (isset($this->NM_ajax_info['param']['nd_secuencial']))
          {
              $this->nd_secuencial = $this->NM_ajax_info['param']['nd_secuencial'];
          }
          if (isset($this->NM_ajax_info['param']['nd_secuencial_docmod']))
          {
              $this->nd_secuencial_docmod = $this->NM_ajax_info['param']['nd_secuencial_docmod'];
          }
          if (isset($this->NM_ajax_info['param']['nd_serie']))
          {
              $this->nd_serie = $this->NM_ajax_info['param']['nd_serie'];
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
          if (isset($this->NM_ajax_info['param']['nd_total']))
          {
              $this->nd_total = $this->NM_ajax_info['param']['nd_total'];
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
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
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
      if (isset($_POST["var_id_nota_debito"]) && isset($this->var_id_nota_debito)) 
      {
          $_SESSION['var_id_nota_debito'] = $this->var_id_nota_debito;
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
      if (isset($_GET["var_id_nota_debito"]) && isset($this->var_id_nota_debito)) 
      {
          $_SESSION['var_id_nota_debito'] = $this->var_id_nota_debito;
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
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['embutida_parms']);
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
                 nm_limpa_str_form_del_nota_debito_compras($cadapar[1]);
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
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['total']);
          }
          if (!isset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['total']))
          {
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->var_id_nota_debito)) 
          {
              $_SESSION['var_id_nota_debito'] = $this->var_id_nota_debito;
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
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_del_nota_debito_compras_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_del_nota_debito_compras']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_nota_debito_compras']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_nota_debito_compras'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_nota_debito_compras']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_nota_debito_compras']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_del_nota_debito_compras') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_nota_debito_compras']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_nota_debito_compras";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_del_nota_debito_compras")
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
      $this->nm_new_label['nd_proveedor'] = '' . $this->Ini->Nm_lang['lang_proveedor'] . '';
      $this->nm_new_label['nd_iddocmod'] = '' . $this->Ini->Nm_lang['lang_factura'] . '';
      $this->nm_new_label['nd_serie_docmod'] = '' . $this->Ini->Nm_lang['lang_serie_sri'] . '';
      $this->nm_new_label['nd_secuencial_docmod'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['nd_fecha_emison_docmod'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['nd_serie'] = '' . $this->Ini->Nm_lang['lang_serie_sri'] . '';
      $this->nm_new_label['nd_secuencial'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['nd_fecha'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['nd_subtotal'] = '' . $this->Ini->Nm_lang['lang_subtotal'] . '';
      $this->nm_new_label['nd_subtotal_iva'] = '' . $this->Ini->Nm_lang['lang_subtotal_iva'] . '';
      $this->nm_new_label['nd_subtotal_cero'] = '' . $this->Ini->Nm_lang['lang_subtotal_cero'] . '';
      $this->nm_new_label['nd_subtotal_no_objeto'] = '' . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . '';
      $this->nm_new_label['nd_subtotal_excento'] = '' . $this->Ini->Nm_lang['lang_subtotal_exento'] . '';
      $this->nm_new_label['nd_valor_ice'] = '' . $this->Ini->Nm_lang['lang_ice'] . '';
      $this->nm_new_label['nd_valor_iva'] = '' . $this->Ini->Nm_lang['lang_iva'] . '';
      $this->nm_new_label['nd_total'] = '' . $this->Ini->Nm_lang['lang_total'] . '';
      $this->nm_new_label['nd_autorizacion'] = '' . $this->Ini->Nm_lang['lang_autorizacion'] . '';
      $this->nm_new_label['nd_cod_docmod'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['tipo_doc_sustento'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['serie_sustento'] = '' . $this->Ini->Nm_lang['lang_serie_sri'] . '';
      $this->nm_new_label['secuencial_sustento'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['fecha_sustento'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['fac_nombre_cliente'] = '' . $this->Ini->Nm_lang['lang_proveedor'] . '';
      $this->nm_new_label['fac_ruc_cliente'] = '' . $this->Ini->Nm_lang['lang_lot_identificacion'] . '';
      $this->nm_new_label['fac_direccion_cliente'] = '' . $this->Ini->Nm_lang['lang_direccion'] . '';
      $this->nm_new_label['fac_email_cliente'] = '' . $this->Ini->Nm_lang['lang_email'] . '';

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
      $this->arr_buttons['nuevo']['fontawesomeicon']            = "fas fa-plus";

      $this->arr_buttons['anular']['hint']             = "";
      $this->arr_buttons['anular']['type']             = "button";
      $this->arr_buttons['anular']['value']            = "" . $this->Ini->Nm_lang['lang_anular'] . "";
      $this->arr_buttons['anular']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['anular']['display_position'] = "text_right";
      $this->arr_buttons['anular']['style']            = "danger";
      $this->arr_buttons['anular']['image']            = "";
      $this->arr_buttons['anular']['has_fa']            = "true";
      $this->arr_buttons['anular']['fontawesomeicon']            = "fas fa-minus-circle";


      $_SESSION['scriptcase']['error_icon']['form_del_nota_debito_compras']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_del_nota_debito_compras'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['goto']      = 'on';
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
      $this->nmgp_botoes['nuevo'] = "on";
      $this->nmgp_botoes['Anular'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_orig'] = " where (nd_numero=" . $_SESSION['var_id_nota_debito'] . ")";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_pesq'] = " where (nd_numero=" . $_SESSION['var_id_nota_debito'] . ")";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nota_debito_compras']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_nota_debito_compras'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_nota_debito_compras'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_form'];
          if (!isset($this->nd_numero)){$this->nd_numero = $this->nmgp_dados_form['nd_numero'];} 
          if (!isset($this->nd_tipo_comprobante)){$this->nd_tipo_comprobante = $this->nmgp_dados_form['nd_tipo_comprobante'];} 
          if (!isset($this->nd_empresa)){$this->nd_empresa = $this->nmgp_dados_form['nd_empresa'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal'] != "null"){$this->nd_subtotal = $this->nmgp_dados_form['nd_subtotal'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal_iva'] != "null"){$this->nd_subtotal_iva = $this->nmgp_dados_form['nd_subtotal_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal_cero'] != "null"){$this->nd_subtotal_cero = $this->nmgp_dados_form['nd_subtotal_cero'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal_no_objeto'] != "null"){$this->nd_subtotal_no_objeto = $this->nmgp_dados_form['nd_subtotal_no_objeto'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_subtotal_excento'] != "null"){$this->nd_subtotal_excento = $this->nmgp_dados_form['nd_subtotal_excento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_valor_ice'] != "null"){$this->nd_valor_ice = $this->nmgp_dados_form['nd_valor_ice'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_valor_iva'] != "null"){$this->nd_valor_iva = $this->nmgp_dados_form['nd_valor_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['nd_total'] != "null"){$this->nd_total = $this->nmgp_dados_form['nd_total'];} 
          if (!isset($this->nd_estado)){$this->nd_estado = $this->nmgp_dados_form['nd_estado'];} 
          if (!isset($this->nd_estado_sri)){$this->nd_estado_sri = $this->nmgp_dados_form['nd_estado_sri'];} 
          if (!isset($this->nd_usuario)){$this->nd_usuario = $this->nmgp_dados_form['nd_usuario'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['tipo_doc_sustento'] != "null"){$this->tipo_doc_sustento = $this->nmgp_dados_form['tipo_doc_sustento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['serie_sustento'] != "null"){$this->serie_sustento = $this->nmgp_dados_form['serie_sustento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['secuencial_sustento'] != "null"){$this->secuencial_sustento = $this->nmgp_dados_form['secuencial_sustento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fecha_sustento'] != "null"){
              $this->fecha_sustento = $this->nmgp_dados_form['fecha_sustento'];
              $this->fecha_sustento = $this->nm_conv_data_db($this->fecha_sustento, 'yyyy-mm-dd', $this->field_config['fecha_sustento']['date_format']);
          }
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_nombre_cliente'] != "null"){$this->fac_nombre_cliente = $this->nmgp_dados_form['fac_nombre_cliente'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_ruc_cliente'] != "null"){$this->fac_ruc_cliente = $this->nmgp_dados_form['fac_ruc_cliente'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_direccion_cliente'] != "null"){$this->fac_direccion_cliente = $this->nmgp_dados_form['fac_direccion_cliente'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_email_cliente'] != "null"){$this->fac_email_cliente = $this->nmgp_dados_form['fac_email_cliente'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_del_nota_debito_compras", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
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
              include_once($this->Ini->path_embutida . 'form_del_nota_debito_compras/form_del_nota_debito_compras_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_del_nota_debito_compras_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_del_nota_debito_compras_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_del_nota_debito_compras_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_del_nota_debito_compras/form_del_nota_debito_compras_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_del_nota_debito_compras_erro.class.php"); 
      }
      $this->Erro      = new form_del_nota_debito_compras_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opcao']))
         { 
             if ($this->nd_numero != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nota_debito_compras']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['nuevo'] = "off";
          $this->nmgp_botoes['Anular'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['nuevo'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['botoes']['nuevo'];
          $this->nmgp_botoes['Anular'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['botoes']['Anular'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_form'];
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
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['total']);
          $detailAppObject = "form_del_detalle_nota_debito_compras_apl";
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_del_detalle_nota_debito_compras') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_del_detalle_nota_debito_compras') . "/form_del_detalle_nota_debito_compras_apl.php");
          $this->form_del_detalle_nota_debito_compras = new $detailAppObject;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['total']);
          $detailAppObject = "form_del_forma_pago_nd_compras_apl";
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_del_forma_pago_nd_compras') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_del_forma_pago_nd_compras') . "/form_del_forma_pago_nd_compras_apl.php");
          $this->form_del_forma_pago_nd_compras = new $detailAppObject;
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

            $out1_img_cache = $_SESSION['scriptcase']['form_del_nota_debito_compras']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_del_nota_debito_compras']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($this->nd_proveedor)) { $this->nm_limpa_alfa($this->nd_proveedor); }
      if (isset($this->nd_iddocmod)) { $this->nm_limpa_alfa($this->nd_iddocmod); }
      if (isset($this->nd_serie_docmod)) { $this->nm_limpa_alfa($this->nd_serie_docmod); }
      if (isset($this->nd_secuencial_docmod)) { $this->nm_limpa_alfa($this->nd_secuencial_docmod); }
      if (isset($this->nd_serie)) { $this->nm_limpa_alfa($this->nd_serie); }
      if (isset($this->nd_secuencial)) { $this->nm_limpa_alfa($this->nd_secuencial); }
      if (isset($this->nd_subtotal)) { $this->nm_limpa_alfa($this->nd_subtotal); }
      if (isset($this->nd_subtotal_iva)) { $this->nm_limpa_alfa($this->nd_subtotal_iva); }
      if (isset($this->nd_subtotal_cero)) { $this->nm_limpa_alfa($this->nd_subtotal_cero); }
      if (isset($this->nd_subtotal_no_objeto)) { $this->nm_limpa_alfa($this->nd_subtotal_no_objeto); }
      if (isset($this->nd_subtotal_excento)) { $this->nm_limpa_alfa($this->nd_subtotal_excento); }
      if (isset($this->nd_valor_ice)) { $this->nm_limpa_alfa($this->nd_valor_ice); }
      if (isset($this->nd_valor_iva)) { $this->nm_limpa_alfa($this->nd_valor_iva); }
      if (isset($this->nd_total)) { $this->nm_limpa_alfa($this->nd_total); }
      if (isset($this->nd_autorizacion)) { $this->nm_limpa_alfa($this->nd_autorizacion); }
      if (isset($this->nd_cod_docmod)) { $this->nm_limpa_alfa($this->nd_cod_docmod); }
      if (isset($this->detalles)) { $this->nm_limpa_alfa($this->detalles); }
      if (isset($this->forma_pago)) { $this->nm_limpa_alfa($this->forma_pago); }
      if ($nm_opc_form_php == "formphp")
      { 
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
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select'];
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
      //-- nd_secuencial
      $this->field_config['nd_secuencial']               = array();
      $this->field_config['nd_secuencial']['symbol_grp'] = '';
      $this->field_config['nd_secuencial']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_secuencial']['symbol_dec'] = '';
      $this->field_config['nd_secuencial']['symbol_neg'] = '-';
      $this->field_config['nd_secuencial']['format_neg'] = '2';
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
      //-- nd_secuencial_docmod
      $this->field_config['nd_secuencial_docmod']               = array();
      $this->field_config['nd_secuencial_docmod']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_secuencial_docmod']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_secuencial_docmod']['symbol_dec'] = '';
      $this->field_config['nd_secuencial_docmod']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_secuencial_docmod']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- nd_fecha_emison_docmod
      $this->field_config['nd_fecha_emison_docmod']                 = array();
      $this->field_config['nd_fecha_emison_docmod']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['nd_fecha_emison_docmod']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['nd_fecha_emison_docmod']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'nd_fecha_emison_docmod');
      //-- nd_proveedor
      $this->field_config['nd_proveedor']               = array();
      $this->field_config['nd_proveedor']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_proveedor']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_proveedor']['symbol_dec'] = '';
      $this->field_config['nd_proveedor']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_proveedor']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
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
      //-- nd_numero
      $this->field_config['nd_numero']               = array();
      $this->field_config['nd_numero']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nd_numero']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nd_numero']['symbol_dec'] = '';
      $this->field_config['nd_numero']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nd_numero']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['Gera_log_access'] = false;
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
          if ('validate_nd_fecha' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_fecha');
          }
          if ('validate_nd_serie' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_serie');
          }
          if ('validate_nd_secuencial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_secuencial');
          }
          if ('validate_nd_autorizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_autorizacion');
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
          if ('validate_nd_fecha_emison_docmod' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_fecha_emison_docmod');
          }
          if ('validate_fac_ruc_cliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_ruc_cliente');
          }
          if ('validate_fac_nombre_cliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_nombre_cliente');
          }
          if ('validate_fac_direccion_cliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_direccion_cliente');
          }
          if ('validate_fac_email_cliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_email_cliente');
          }
          if ('validate_nd_proveedor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nd_proveedor');
          }
          if ('validate_detalles' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'detalles');
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
          form_del_nota_debito_compras_pack_ajax_response();
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
          if ('event_scajaxbutton_anular_onclick' == $this->NM_ajax_opcao)
          {
              $this->scajaxbutton_Anular_onClick();
          }
          form_del_nota_debito_compras_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['tipo_doc_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tipo_doc_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['tipo_doc_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['serie_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->serie_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['serie_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['secuencial_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->secuencial_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['secuencial_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fecha_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fecha_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fecha_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fac_ruc_cliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_ruc_cliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fac_ruc_cliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fac_nombre_cliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_nombre_cliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fac_nombre_cliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fac_direccion_cliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_direccion_cliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fac_direccion_cliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fac_email_cliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_email_cliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['fac_email_cliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal_cero']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal_cero = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal_cero'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal_no_objeto']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal_no_objeto = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal_no_objeto'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal_excento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_subtotal_excento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_subtotal_excento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_valor_ice']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_valor_ice = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_valor_ice'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_valor_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_valor_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_valor_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_total']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->nd_total = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']['nd_total'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_del_nota_debito_compras_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_del_nota_debito_compras_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_del_nota_debito_compras_pack_ajax_response();
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
          form_del_nota_debito_compras_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_del_nota_debito_compras.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_nota_debito_compras") ?></TITLE>
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
<form name="Fdown" method="get" action="form_del_nota_debito_compras_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_del_nota_debito_compras"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="./" target="_self" style="display: none"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_nota_debito_compras', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_del_nota_debito_compras', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_nota_debito_compras', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_del_nota_debito_compras_pack_ajax_response();
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
               return "titulo";
               break;
           case 'nd_fecha':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'nd_serie':
               return "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
               break;
           case 'nd_secuencial':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'nd_autorizacion':
               return "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
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
           case 'nd_cod_docmod':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
               break;
           case 'nd_serie_docmod':
               return "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
               break;
           case 'nd_secuencial_docmod':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'nd_fecha_emison_docmod':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'fac_ruc_cliente':
               return "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
               break;
           case 'fac_nombre_cliente':
               return "" . $this->Ini->Nm_lang['lang_proveedor'] . "";
               break;
           case 'fac_direccion_cliente':
               return "" . $this->Ini->Nm_lang['lang_direccion'] . "";
               break;
           case 'fac_email_cliente':
               return "" . $this->Ini->Nm_lang['lang_email'] . "";
               break;
           case 'nd_proveedor':
               return "" . $this->Ini->Nm_lang['lang_proveedor'] . "";
               break;
           case 'detalles':
               return "detalles";
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
               return "" . $this->Ini->Nm_lang['lang_total'] . "";
               break;
           case 'forma_pago':
               return "forma_pago";
               break;
           case 'nd_numero':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
               break;
           case 'nd_tipo_comprobante':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
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
           case 'nd_usuario':
               return "" . $this->Ini->Nm_lang['lang_usuario'] . "";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_del_nota_debito_compras']) || !is_array($this->NM_ajax_info['errList']['geral_form_del_nota_debito_compras']))
              {
                  $this->NM_ajax_info['errList']['geral_form_del_nota_debito_compras'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_del_nota_debito_compras'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'titulo' == $filtro)) || (is_array($filtro) && in_array('titulo', $filtro)))
        $this->ValidateField_titulo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_fecha' == $filtro)) || (is_array($filtro) && in_array('nd_fecha', $filtro)))
        $this->ValidateField_nd_fecha($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_serie' == $filtro)) || (is_array($filtro) && in_array('nd_serie', $filtro)))
        $this->ValidateField_nd_serie($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_secuencial' == $filtro)) || (is_array($filtro) && in_array('nd_secuencial', $filtro)))
        $this->ValidateField_nd_secuencial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_autorizacion' == $filtro)) || (is_array($filtro) && in_array('nd_autorizacion', $filtro)))
        $this->ValidateField_nd_autorizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
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
      if ((!is_array($filtro) && ('' == $filtro || 'nd_cod_docmod' == $filtro)) || (is_array($filtro) && in_array('nd_cod_docmod', $filtro)))
        $this->ValidateField_nd_cod_docmod($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_serie_docmod' == $filtro)) || (is_array($filtro) && in_array('nd_serie_docmod', $filtro)))
        $this->ValidateField_nd_serie_docmod($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_secuencial_docmod' == $filtro)) || (is_array($filtro) && in_array('nd_secuencial_docmod', $filtro)))
        $this->ValidateField_nd_secuencial_docmod($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_fecha_emison_docmod' == $filtro)) || (is_array($filtro) && in_array('nd_fecha_emison_docmod', $filtro)))
        $this->ValidateField_nd_fecha_emison_docmod($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_ruc_cliente' == $filtro)) || (is_array($filtro) && in_array('fac_ruc_cliente', $filtro)))
        $this->ValidateField_fac_ruc_cliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_nombre_cliente' == $filtro)) || (is_array($filtro) && in_array('fac_nombre_cliente', $filtro)))
        $this->ValidateField_fac_nombre_cliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_direccion_cliente' == $filtro)) || (is_array($filtro) && in_array('fac_direccion_cliente', $filtro)))
        $this->ValidateField_fac_direccion_cliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_email_cliente' == $filtro)) || (is_array($filtro) && in_array('fac_email_cliente', $filtro)))
        $this->ValidateField_fac_email_cliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nd_proveedor' == $filtro)) || (is_array($filtro) && in_array('nd_proveedor', $filtro)))
        $this->ValidateField_nd_proveedor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'detalles' == $filtro)) || (is_array($filtro) && in_array('detalles', $filtro)))
        $this->ValidateField_detalles($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

    function ValidateField_nd_serie(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_serie'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nd_serie) > 6) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_serie_sri'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_serie']))
              {
                  $Campos_Erros['nd_serie'] = array();
              }
              $Campos_Erros['nd_serie'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_serie']) || !is_array($this->NM_ajax_info['errList']['nd_serie']))
              {
                  $this->NM_ajax_info['errList']['nd_serie'] = array();
              }
              $this->NM_ajax_info['errList']['nd_serie'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "01234567890123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->nd_serie ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->nd_serie, $_SESSION['scriptcase']['charset']); $x++) 
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
              if (!isset($Campos_Erros['nd_serie']))
              {
                  $Campos_Erros['nd_serie'] = array();
              }
              $Campos_Erros['nd_serie'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['nd_serie']) || !is_array($this->NM_ajax_info['errList']['nd_serie']))
              {
                  $this->NM_ajax_info['errList']['nd_serie'] = array();
              }
              $this->NM_ajax_info['errList']['nd_serie'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_serie';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_serie

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
              if ($teste_validade->Valor($this->nd_secuencial, 9, 0, 0, 0, "N") == false)  
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
      $Teste_trab = "01234567890123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->nd_autorizacion ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->nd_autorizacion, $_SESSION['scriptcase']['charset']); $x++) 
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
              if (!isset($Campos_Erros['nd_autorizacion']))
              {
                  $Campos_Erros['nd_autorizacion'] = array();
              }
              $Campos_Erros['nd_autorizacion'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['nd_autorizacion']) || !is_array($this->NM_ajax_info['errList']['nd_autorizacion']))
              {
                  $this->NM_ajax_info['errList']['nd_autorizacion'] = array();
              }
              $this->NM_ajax_info['errList']['nd_autorizacion'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
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
              if ($teste_validade->Valor($this->nd_iddocmod, 9, 0, 0, 0, "N") == false)  
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
          if (NM_utf8_strlen($this->nd_serie_docmod) > 6) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_serie_sri'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nd_serie_docmod']))
              {
                  $Campos_Erros['nd_serie_docmod'] = array();
              }
              $Campos_Erros['nd_serie_docmod'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nd_serie_docmod']) || !is_array($this->NM_ajax_info['errList']['nd_serie_docmod']))
              {
                  $this->NM_ajax_info['errList']['nd_serie_docmod'] = array();
              }
              $this->NM_ajax_info['errList']['nd_serie_docmod'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
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
              if ($teste_validade->Valor($this->nd_secuencial_docmod, 9, 0, 0, 0, "N") == false)  
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

    function ValidateField_nd_fecha_emison_docmod(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->nd_fecha_emison_docmod, $this->field_config['nd_fecha_emison_docmod']['date_sep']) ; 
      if (isset($this->Field_no_validate['nd_fecha_emison_docmod'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['nd_fecha_emison_docmod']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['nd_fecha_emison_docmod']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['nd_fecha_emison_docmod']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['nd_fecha_emison_docmod']['date_sep']) ; 
          if (trim($this->nd_fecha_emison_docmod) != "")  
          { 
              if ($teste_validade->Data($this->nd_fecha_emison_docmod, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha'] . "; " ; 
                  if (!isset($Campos_Erros['nd_fecha_emison_docmod']))
                  {
                      $Campos_Erros['nd_fecha_emison_docmod'] = array();
                  }
                  $Campos_Erros['nd_fecha_emison_docmod'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_fecha_emison_docmod']) || !is_array($this->NM_ajax_info['errList']['nd_fecha_emison_docmod']))
                  {
                      $this->NM_ajax_info['errList']['nd_fecha_emison_docmod'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_fecha_emison_docmod'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['nd_fecha_emison_docmod']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_fecha_emison_docmod';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_fecha_emison_docmod

    function ValidateField_fac_ruc_cliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_ruc_cliente'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fac_ruc_cliente) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fac_ruc_cliente']))
              {
                  $Campos_Erros['fac_ruc_cliente'] = array();
              }
              $Campos_Erros['fac_ruc_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fac_ruc_cliente']) || !is_array($this->NM_ajax_info['errList']['fac_ruc_cliente']))
              {
                  $this->NM_ajax_info['errList']['fac_ruc_cliente'] = array();
              }
              $this->NM_ajax_info['errList']['fac_ruc_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_ruc_cliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_ruc_cliente

    function ValidateField_fac_nombre_cliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_nombre_cliente'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fac_nombre_cliente) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_proveedor'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fac_nombre_cliente']))
              {
                  $Campos_Erros['fac_nombre_cliente'] = array();
              }
              $Campos_Erros['fac_nombre_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fac_nombre_cliente']) || !is_array($this->NM_ajax_info['errList']['fac_nombre_cliente']))
              {
                  $this->NM_ajax_info['errList']['fac_nombre_cliente'] = array();
              }
              $this->NM_ajax_info['errList']['fac_nombre_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_nombre_cliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_nombre_cliente

    function ValidateField_fac_direccion_cliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_direccion_cliente'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fac_direccion_cliente) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_direccion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fac_direccion_cliente']))
              {
                  $Campos_Erros['fac_direccion_cliente'] = array();
              }
              $Campos_Erros['fac_direccion_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fac_direccion_cliente']) || !is_array($this->NM_ajax_info['errList']['fac_direccion_cliente']))
              {
                  $this->NM_ajax_info['errList']['fac_direccion_cliente'] = array();
              }
              $this->NM_ajax_info['errList']['fac_direccion_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_direccion_cliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_direccion_cliente

    function ValidateField_fac_email_cliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_email_cliente'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fac_email_cliente) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_email'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fac_email_cliente']))
              {
                  $Campos_Erros['fac_email_cliente'] = array();
              }
              $Campos_Erros['fac_email_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fac_email_cliente']) || !is_array($this->NM_ajax_info['errList']['fac_email_cliente']))
              {
                  $this->NM_ajax_info['errList']['fac_email_cliente'] = array();
              }
              $this->NM_ajax_info['errList']['fac_email_cliente'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_email_cliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_email_cliente

    function ValidateField_nd_proveedor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['nd_proveedor'])) {
          nm_limpa_numero($this->nd_proveedor, $this->field_config['nd_proveedor']['symbol_grp']) ; 
          return;
      }
      if ($this->nd_proveedor === "" || is_null($this->nd_proveedor))  
      { 
          $this->nd_proveedor = 0;
          $this->sc_force_zero[] = 'nd_proveedor';
      } 
      nm_limpa_numero($this->nd_proveedor, $this->field_config['nd_proveedor']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nd_proveedor != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->nd_proveedor) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_proveedor'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nd_proveedor']))
                  {
                      $Campos_Erros['nd_proveedor'] = array();
                  }
                  $Campos_Erros['nd_proveedor'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nd_proveedor']) || !is_array($this->NM_ajax_info['errList']['nd_proveedor']))
                  {
                      $this->NM_ajax_info['errList']['nd_proveedor'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_proveedor'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nd_proveedor, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_proveedor'] . "; " ; 
                  if (!isset($Campos_Erros['nd_proveedor']))
                  {
                      $Campos_Erros['nd_proveedor'] = array();
                  }
                  $Campos_Erros['nd_proveedor'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nd_proveedor']) || !is_array($this->NM_ajax_info['errList']['nd_proveedor']))
                  {
                      $this->NM_ajax_info['errList']['nd_proveedor'] = array();
                  }
                  $this->NM_ajax_info['errList']['nd_proveedor'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nd_proveedor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nd_proveedor

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
              if ($teste_validade->Valor($this->nd_subtotal, 13, 2, 0, 0, "N") == false)  
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
              if ($teste_validade->Valor($this->nd_subtotal_iva, 13, 2, 0, 0, "N") == false)  
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
              if ($teste_validade->Valor($this->nd_subtotal_cero, 13, 2, 0, 0, "N") == false)  
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
              if ($teste_validade->Valor($this->nd_subtotal_no_objeto, 13, 2, 0, 0, "N") == false)  
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
              if ($teste_validade->Valor($this->nd_subtotal_excento, 13, 2, 0, 0, "N") == false)  
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
              if ($teste_validade->Valor($this->nd_valor_ice, 13, 2, 0, 0, "N") == false)  
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
              if ($teste_validade->Valor($this->nd_valor_iva, 13, 2, 0, 0, "N") == false)  
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
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
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
              if ($teste_validade->Valor($this->nd_total, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . "; " ; 
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
    $this->nmgp_dados_form['nd_fecha'] = (strlen(trim($this->nd_fecha)) > 19) ? str_replace(".", ":", $this->nd_fecha) : trim($this->nd_fecha);
    $this->nmgp_dados_form['nd_serie'] = $this->nd_serie;
    $this->nmgp_dados_form['nd_secuencial'] = $this->nd_secuencial;
    $this->nmgp_dados_form['nd_autorizacion'] = $this->nd_autorizacion;
    $this->nmgp_dados_form['nd_iddocmod'] = $this->nd_iddocmod;
    $this->nmgp_dados_form['tipo_doc_sustento'] = $this->tipo_doc_sustento;
    $this->nmgp_dados_form['serie_sustento'] = $this->serie_sustento;
    $this->nmgp_dados_form['secuencial_sustento'] = $this->secuencial_sustento;
    $this->nmgp_dados_form['fecha_sustento'] = (strlen(trim($this->fecha_sustento)) > 19) ? str_replace(".", ":", $this->fecha_sustento) : trim($this->fecha_sustento);
    $this->nmgp_dados_form['nd_cod_docmod'] = $this->nd_cod_docmod;
    $this->nmgp_dados_form['nd_serie_docmod'] = $this->nd_serie_docmod;
    $this->nmgp_dados_form['nd_secuencial_docmod'] = $this->nd_secuencial_docmod;
    $this->nmgp_dados_form['nd_fecha_emison_docmod'] = (strlen(trim($this->nd_fecha_emison_docmod)) > 19) ? str_replace(".", ":", $this->nd_fecha_emison_docmod) : trim($this->nd_fecha_emison_docmod);
    $this->nmgp_dados_form['fac_ruc_cliente'] = $this->fac_ruc_cliente;
    $this->nmgp_dados_form['fac_nombre_cliente'] = $this->fac_nombre_cliente;
    $this->nmgp_dados_form['fac_direccion_cliente'] = $this->fac_direccion_cliente;
    $this->nmgp_dados_form['fac_email_cliente'] = $this->fac_email_cliente;
    $this->nmgp_dados_form['nd_proveedor'] = $this->nd_proveedor;
    $this->nmgp_dados_form['detalles'] = $this->detalles;
    $this->nmgp_dados_form['nd_subtotal'] = $this->nd_subtotal;
    $this->nmgp_dados_form['nd_subtotal_iva'] = $this->nd_subtotal_iva;
    $this->nmgp_dados_form['nd_subtotal_cero'] = $this->nd_subtotal_cero;
    $this->nmgp_dados_form['nd_subtotal_no_objeto'] = $this->nd_subtotal_no_objeto;
    $this->nmgp_dados_form['nd_subtotal_excento'] = $this->nd_subtotal_excento;
    $this->nmgp_dados_form['nd_valor_ice'] = $this->nd_valor_ice;
    $this->nmgp_dados_form['nd_valor_iva'] = $this->nd_valor_iva;
    $this->nmgp_dados_form['nd_total'] = $this->nd_total;
    $this->nmgp_dados_form['forma_pago'] = $this->forma_pago;
    $this->nmgp_dados_form['nd_numero'] = $this->nd_numero;
    $this->nmgp_dados_form['nd_tipo_comprobante'] = $this->nd_tipo_comprobante;
    $this->nmgp_dados_form['nd_empresa'] = $this->nd_empresa;
    $this->nmgp_dados_form['nd_estado'] = $this->nd_estado;
    $this->nmgp_dados_form['nd_estado_sri'] = $this->nd_estado_sri;
    $this->nmgp_dados_form['nd_usuario'] = $this->nd_usuario;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['nd_fecha'] = $this->nd_fecha;
      nm_limpa_data($this->nd_fecha, $this->field_config['nd_fecha']['date_sep']) ; 
      $this->Before_unformat['nd_secuencial'] = $this->nd_secuencial;
      nm_limpa_numero($this->nd_secuencial, $this->field_config['nd_secuencial']['symbol_grp']) ; 
      $this->Before_unformat['nd_iddocmod'] = $this->nd_iddocmod;
      nm_limpa_numero($this->nd_iddocmod, $this->field_config['nd_iddocmod']['symbol_grp']) ; 
      $this->Before_unformat['fecha_sustento'] = $this->fecha_sustento;
      nm_limpa_data($this->fecha_sustento, $this->field_config['fecha_sustento']['date_sep']) ; 
      $this->Before_unformat['nd_secuencial_docmod'] = $this->nd_secuencial_docmod;
      nm_limpa_numero($this->nd_secuencial_docmod, $this->field_config['nd_secuencial_docmod']['symbol_grp']) ; 
      $this->Before_unformat['nd_fecha_emison_docmod'] = $this->nd_fecha_emison_docmod;
      nm_limpa_data($this->nd_fecha_emison_docmod, $this->field_config['nd_fecha_emison_docmod']['date_sep']) ; 
      $this->Before_unformat['nd_proveedor'] = $this->nd_proveedor;
      nm_limpa_numero($this->nd_proveedor, $this->field_config['nd_proveedor']['symbol_grp']) ; 
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
      $this->Before_unformat['nd_numero'] = $this->nd_numero;
      nm_limpa_numero($this->nd_numero, $this->field_config['nd_numero']['symbol_grp']) ; 
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
      if ($Nome_Campo == "nd_secuencial")
      {
          nm_limpa_numero($this->nd_secuencial, $this->field_config['nd_secuencial']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_iddocmod")
      {
          nm_limpa_numero($this->nd_iddocmod, $this->field_config['nd_iddocmod']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_secuencial_docmod")
      {
          nm_limpa_numero($this->nd_secuencial_docmod, $this->field_config['nd_secuencial_docmod']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "nd_proveedor")
      {
          nm_limpa_numero($this->nd_proveedor, $this->field_config['nd_proveedor']['symbol_grp']) ; 
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
      if ($Nome_Campo == "nd_numero")
      {
          nm_limpa_numero($this->nd_numero, $this->field_config['nd_numero']['symbol_grp']) ; 
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
      if ('' !== $this->nd_secuencial || (!empty($format_fields) && isset($format_fields['nd_secuencial'])))
      {
          nmgp_Form_Num_Val($this->nd_secuencial, $this->field_config['nd_secuencial']['symbol_grp'], $this->field_config['nd_secuencial']['symbol_dec'], "0", "S", $this->field_config['nd_secuencial']['format_neg'], "", "", "-", $this->field_config['nd_secuencial']['symbol_fmt']) ; 
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
      if ('' !== $this->nd_secuencial_docmod || (!empty($format_fields) && isset($format_fields['nd_secuencial_docmod'])))
      {
          nmgp_Form_Num_Val($this->nd_secuencial_docmod, $this->field_config['nd_secuencial_docmod']['symbol_grp'], $this->field_config['nd_secuencial_docmod']['symbol_dec'], "0", "S", $this->field_config['nd_secuencial_docmod']['format_neg'], "", "", "-", $this->field_config['nd_secuencial_docmod']['symbol_fmt']) ; 
      }
      if ((!empty($this->nd_fecha_emison_docmod) && 'null' != $this->nd_fecha_emison_docmod) || (!empty($format_fields) && isset($format_fields['nd_fecha_emison_docmod'])))
      {
          nm_volta_data($this->nd_fecha_emison_docmod, $this->field_config['nd_fecha_emison_docmod']['date_format']) ; 
          nmgp_Form_Datas($this->nd_fecha_emison_docmod, $this->field_config['nd_fecha_emison_docmod']['date_format'], $this->field_config['nd_fecha_emison_docmod']['date_sep']) ;  
      }
      elseif ('null' == $this->nd_fecha_emison_docmod || '' == $this->nd_fecha_emison_docmod)
      {
          $this->nd_fecha_emison_docmod = '';
      }
      if ('' !== $this->nd_proveedor || (!empty($format_fields) && isset($format_fields['nd_proveedor'])))
      {
          nmgp_Form_Num_Val($this->nd_proveedor, $this->field_config['nd_proveedor']['symbol_grp'], $this->field_config['nd_proveedor']['symbol_dec'], "0", "S", $this->field_config['nd_proveedor']['format_neg'], "", "", "-", $this->field_config['nd_proveedor']['symbol_fmt']) ; 
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
      if ($this->fecha_sustento != "")  
      {
     nm_conv_form_data($this->fecha_sustento, $this->field_config['fecha_sustento']['date_format'], "AAAAMMDD", array($this->field_config['fecha_sustento']['date_sep'])) ;  
      }
      $guarda_format_hora = $this->field_config['nd_fecha_emison_docmod']['date_format'];
      if ($this->nd_fecha_emison_docmod != "")  
      { 
          nm_conv_data($this->nd_fecha_emison_docmod, $this->field_config['nd_fecha_emison_docmod']['date_format']) ; 
          $this->nd_fecha_emison_docmod_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->nd_fecha_emison_docmod_hora = substr($this->nd_fecha_emison_docmod_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_fecha_emison_docmod_hora = substr($this->nd_fecha_emison_docmod_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->nd_fecha_emison_docmod_hora = substr($this->nd_fecha_emison_docmod_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->nd_fecha_emison_docmod_hora = substr($this->nd_fecha_emison_docmod_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->nd_fecha_emison_docmod_hora = substr($this->nd_fecha_emison_docmod_hora, 0, -4);
          }
      } 
      if ($this->nd_fecha_emison_docmod == "" && $use_null)  
      { 
          $this->nd_fecha_emison_docmod = "null" ; 
      } 
      $this->field_config['nd_fecha_emison_docmod']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_nd_fecha();
          $this->ajax_return_values_nd_serie();
          $this->ajax_return_values_nd_secuencial();
          $this->ajax_return_values_nd_autorizacion();
          $this->ajax_return_values_nd_iddocmod();
          $this->ajax_return_values_tipo_doc_sustento();
          $this->ajax_return_values_serie_sustento();
          $this->ajax_return_values_secuencial_sustento();
          $this->ajax_return_values_fecha_sustento();
          $this->ajax_return_values_nd_cod_docmod();
          $this->ajax_return_values_nd_serie_docmod();
          $this->ajax_return_values_nd_secuencial_docmod();
          $this->ajax_return_values_nd_fecha_emison_docmod();
          $this->ajax_return_values_fac_ruc_cliente();
          $this->ajax_return_values_fac_nombre_cliente();
          $this->ajax_return_values_fac_direccion_cliente();
          $this->ajax_return_values_fac_email_cliente();
          $this->ajax_return_values_nd_proveedor();
          $this->ajax_return_values_detalles();
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
              $this->NM_ajax_info['fldList']['nd_numero']['keyVal'] = form_del_nota_debito_compras_pack_protect_string($this->nmgp_dados_form['nd_numero']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['foreign_key']['dnd_nota_debito'] = $this->nmgp_dados_form['nd_numero'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['where_filter'] = "dnd_nota_debito = " . $this->nmgp_dados_form['nd_numero'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['where_detal']  = "dnd_nota_debito = " . $this->nmgp_dados_form['nd_numero'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_detalle_nota_debito_compras_script_case_init'] ]['form_del_detalle_nota_debito_compras']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['foreign_key']['fp_nota_debito'] = $this->nmgp_dados_form['nd_numero'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['where_filter'] = "fp_nota_debito = " . $this->nmgp_dados_form['nd_numero'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['where_detal']  = "fp_nota_debito = " . $this->nmgp_dados_form['nd_numero'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['form_del_forma_pago_nd_compras_script_case_init'] ]['form_del_forma_pago_nd_compras']['total']);
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

          //----- nd_serie
   function ajax_return_values_nd_serie($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_serie", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_serie);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_serie'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
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

          //----- nd_fecha_emison_docmod
   function ajax_return_values_nd_fecha_emison_docmod($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_fecha_emison_docmod", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_fecha_emison_docmod);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_fecha_emison_docmod'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_ruc_cliente
   function ajax_return_values_fac_ruc_cliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_ruc_cliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_ruc_cliente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_ruc_cliente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fac_nombre_cliente
   function ajax_return_values_fac_nombre_cliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_nombre_cliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_nombre_cliente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_nombre_cliente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fac_direccion_cliente
   function ajax_return_values_fac_direccion_cliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_direccion_cliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_direccion_cliente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_direccion_cliente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fac_email_cliente
   function ajax_return_values_fac_email_cliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_email_cliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_email_cliente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_email_cliente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nd_proveedor
   function ajax_return_values_nd_proveedor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nd_proveedor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nd_proveedor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nd_proveedor'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['upload_dir'][$fieldName][] = $newName;
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
  function nm_proc_onload($bFormat = true)
  {
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fac_direccion_cliente = $this->fac_direccion_cliente;
    $original_fac_email_cliente = $this->fac_email_cliente;
    $original_fac_nombre_cliente = $this->fac_nombre_cliente;
    $original_fac_ruc_cliente = $this->fac_ruc_cliente;
    $original_fecha_sustento = $this->fecha_sustento;
    $original_nd_cod_docmod = $this->nd_cod_docmod;
    $original_nd_fecha_emison_docmod = $this->nd_fecha_emison_docmod;
    $original_nd_iddocmod = $this->nd_iddocmod;
    $original_nd_secuencial_docmod = $this->nd_secuencial_docmod;
    $original_nd_serie_docmod = $this->nd_serie_docmod;
    $original_secuencial_sustento = $this->secuencial_sustento;
    $original_serie_sustento = $this->serie_sustento;
    $original_tipo_doc_sustento = $this->tipo_doc_sustento;
    $original_titulo = $this->titulo;
}
  $this->titulo = $this->Ini->Nm_lang['lang_registrar_ndc'] ;
if($this->nd_iddocmod <>''){
	$check_sql = "SELECT 
					fc_tipo_comprobante,
					tc_nombre,
					fc_serie,
					fac_secuencial,
					fc_fecha,
					pr_nombre,
					pr_identificacion,
					pr_direccion,
					pr_email,
					fc_proveedor
				FROM v_del_datos_factura_compra
				WHERE fc_id=".$this->nd_iddocmod ;
	 
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
		$this->nd_fecha_emison_docmod =$this->rs[0][4];
		$this->fecha_sustento 		=$this->rs[0][4];
		$this->fac_nombre_cliente 	=$this->rs[0][5];
		$this->fac_ruc_cliente 		=$this->rs[0][6];
		$this->fac_direccion_cliente 	=$this->rs[0][7];
		$this->fac_email_cliente 		=$this->rs[0][8];
	}
}
if($this->nd_estado =='V'){
	$this->nmgp_cmp_hidden["nd_iddocmod"] = 'off'; $this->NM_ajax_info['fieldDisplay']['nd_iddocmod'] = 'off';
	$this->NM_ajax_info['buttonDisplay']['nuevo'] = $this->nmgp_botoes["nuevo"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
}elseif($this->nd_estado =='R'){
	$this->NM_ajax_info['buttonDisplay']['nuevo'] = $this->nmgp_botoes["nuevo"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'on';;

}else{
	$this->nmgp_cmp_hidden["nd_iddocmod"] = 'off'; $this->NM_ajax_info['fieldDisplay']['nd_iddocmod'] = 'off';
	$this->NM_ajax_info['buttonDisplay']['nuevo'] = $this->nmgp_botoes["nuevo"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fac_direccion_cliente != $this->fac_direccion_cliente || (isset($bFlagRead_fac_direccion_cliente) && $bFlagRead_fac_direccion_cliente)))
    {
        $this->ajax_return_values_fac_direccion_cliente(true);
    }
    if (($original_fac_email_cliente != $this->fac_email_cliente || (isset($bFlagRead_fac_email_cliente) && $bFlagRead_fac_email_cliente)))
    {
        $this->ajax_return_values_fac_email_cliente(true);
    }
    if (($original_fac_nombre_cliente != $this->fac_nombre_cliente || (isset($bFlagRead_fac_nombre_cliente) && $bFlagRead_fac_nombre_cliente)))
    {
        $this->ajax_return_values_fac_nombre_cliente(true);
    }
    if (($original_fac_ruc_cliente != $this->fac_ruc_cliente || (isset($bFlagRead_fac_ruc_cliente) && $bFlagRead_fac_ruc_cliente)))
    {
        $this->ajax_return_values_fac_ruc_cliente(true);
    }
    if (($original_fecha_sustento != $this->fecha_sustento || (isset($bFlagRead_fecha_sustento) && $bFlagRead_fecha_sustento)))
    {
        $this->ajax_return_values_fecha_sustento(true);
    }
    if (($original_nd_cod_docmod != $this->nd_cod_docmod || (isset($bFlagRead_nd_cod_docmod) && $bFlagRead_nd_cod_docmod)))
    {
        $this->ajax_return_values_nd_cod_docmod(true);
    }
    if (($original_nd_fecha_emison_docmod != $this->nd_fecha_emison_docmod || (isset($bFlagRead_nd_fecha_emison_docmod) && $bFlagRead_nd_fecha_emison_docmod)))
    {
        $this->ajax_return_values_nd_fecha_emison_docmod(true);
    }
    if (($original_nd_iddocmod != $this->nd_iddocmod || (isset($bFlagRead_nd_iddocmod) && $bFlagRead_nd_iddocmod)))
    {
        $this->ajax_return_values_nd_iddocmod(true);
    }
    if (($original_nd_secuencial_docmod != $this->nd_secuencial_docmod || (isset($bFlagRead_nd_secuencial_docmod) && $bFlagRead_nd_secuencial_docmod)))
    {
        $this->ajax_return_values_nd_secuencial_docmod(true);
    }
    if (($original_nd_serie_docmod != $this->nd_serie_docmod || (isset($bFlagRead_nd_serie_docmod) && $bFlagRead_nd_serie_docmod)))
    {
        $this->ajax_return_values_nd_serie_docmod(true);
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
    if (($original_titulo != $this->titulo || (isset($bFlagRead_titulo) && $bFlagRead_titulo)))
    {
        $this->ajax_return_values_titulo(true);
    }
}
$_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'off'; 
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
      $_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_nd_autorizacion = $this->nd_autorizacion;
    $original_nd_serie = $this->nd_serie;
    $original_nd_total = $this->nd_total;
}
if (!isset($this->sc_temp_var_mensaje)) {$this->sc_temp_var_mensaje = (isset($_SESSION['var_mensaje'])) ? $_SESSION['var_mensaje'] : "";}
if (!isset($this->sc_temp_var_procesar)) {$this->sc_temp_var_procesar = (isset($_SESSION['var_procesar'])) ? $_SESSION['var_procesar'] : "";}
  $this->sc_temp_var_procesar=true;
$this->sc_temp_var_mensaje='Nota de Débito Exitosa';
if(strlen($this->nd_serie )<>6){
	$this->sc_temp_var_procesar=false;
	$this->sc_temp_var_mensaje='Serie N/D incorrecta';
}
if(strlen($this->nd_autorizacion )<>10 and strlen($this->nd_autorizacion )<>37 and strlen($this->nd_autorizacion )<>49){
	$this->sc_temp_var_procesar=false;
	$this->sc_temp_var_mensaje='Número de Autorización incorrecta';
}
if ($this->nd_total ==0){
		$this->sc_temp_var_procesar=false;
		$this->sc_temp_var_mensaje='El valor a facturar no debe ser 0<br>';
}else{	
	$check_sql = "SELECT coalesce(sum(fp_valor),0) 
			  FROM del_forma_pago_nd_compras
		 	  WHERE fp_nota_debito=".$this->nd_numero ;
	 
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
		if ($this->rs[0][0]<>$this->nd_total ){
 			$this->sc_temp_var_procesar=false;
			$this->sc_temp_var_mensaje='La forma de Pago y el Total  no son iguales<br>';
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
    if (($original_nd_autorizacion != $this->nd_autorizacion || (isset($bFlagRead_nd_autorizacion) && $bFlagRead_nd_autorizacion)))
    {
        $this->ajax_return_values_nd_autorizacion(true);
    }
    if (($original_nd_serie != $this->nd_serie || (isset($bFlagRead_nd_serie) && $bFlagRead_nd_serie)))
    {
        $this->ajax_return_values_nd_serie(true);
    }
    if (($original_nd_total != $this->nd_total || (isset($bFlagRead_nd_total) && $bFlagRead_nd_total)))
    {
        $this->ajax_return_values_nd_total(true);
    }
}
$_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'off'; 
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
      if ('incluir' == $this->nmgp_opcao && empty($this->nd_usuario)) {$this->nd_usuario = "" . $_SESSION['Igtech_SesionLogin'] . ""; $NM_val_null[] = "nd_usuario";}  
      $NM_val_form['titulo'] = $this->titulo;
      $NM_val_form['nd_fecha'] = $this->nd_fecha;
      $NM_val_form['nd_serie'] = $this->nd_serie;
      $NM_val_form['nd_secuencial'] = $this->nd_secuencial;
      $NM_val_form['nd_autorizacion'] = $this->nd_autorizacion;
      $NM_val_form['nd_iddocmod'] = $this->nd_iddocmod;
      $NM_val_form['tipo_doc_sustento'] = $this->tipo_doc_sustento;
      $NM_val_form['serie_sustento'] = $this->serie_sustento;
      $NM_val_form['secuencial_sustento'] = $this->secuencial_sustento;
      $NM_val_form['fecha_sustento'] = $this->fecha_sustento;
      $NM_val_form['nd_cod_docmod'] = $this->nd_cod_docmod;
      $NM_val_form['nd_serie_docmod'] = $this->nd_serie_docmod;
      $NM_val_form['nd_secuencial_docmod'] = $this->nd_secuencial_docmod;
      $NM_val_form['nd_fecha_emison_docmod'] = $this->nd_fecha_emison_docmod;
      $NM_val_form['fac_ruc_cliente'] = $this->fac_ruc_cliente;
      $NM_val_form['fac_nombre_cliente'] = $this->fac_nombre_cliente;
      $NM_val_form['fac_direccion_cliente'] = $this->fac_direccion_cliente;
      $NM_val_form['fac_email_cliente'] = $this->fac_email_cliente;
      $NM_val_form['nd_proveedor'] = $this->nd_proveedor;
      $NM_val_form['detalles'] = $this->detalles;
      $NM_val_form['nd_subtotal'] = $this->nd_subtotal;
      $NM_val_form['nd_subtotal_iva'] = $this->nd_subtotal_iva;
      $NM_val_form['nd_subtotal_cero'] = $this->nd_subtotal_cero;
      $NM_val_form['nd_subtotal_no_objeto'] = $this->nd_subtotal_no_objeto;
      $NM_val_form['nd_subtotal_excento'] = $this->nd_subtotal_excento;
      $NM_val_form['nd_valor_ice'] = $this->nd_valor_ice;
      $NM_val_form['nd_valor_iva'] = $this->nd_valor_iva;
      $NM_val_form['nd_total'] = $this->nd_total;
      $NM_val_form['forma_pago'] = $this->forma_pago;
      $NM_val_form['nd_numero'] = $this->nd_numero;
      $NM_val_form['nd_tipo_comprobante'] = $this->nd_tipo_comprobante;
      $NM_val_form['nd_empresa'] = $this->nd_empresa;
      $NM_val_form['nd_estado'] = $this->nd_estado;
      $NM_val_form['nd_estado_sri'] = $this->nd_estado_sri;
      $NM_val_form['nd_usuario'] = $this->nd_usuario;
      if ($this->nd_numero === "" || is_null($this->nd_numero))  
      { 
          $this->nd_numero = 0;
      } 
      if ($this->nd_proveedor === "" || is_null($this->nd_proveedor))  
      { 
          $this->nd_proveedor = 0;
          $this->sc_force_zero[] = 'nd_proveedor';
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
      if ($this->nd_secuencial === "" || is_null($this->nd_secuencial))  
      { 
          $this->nd_secuencial = 0;
          $this->sc_force_zero[] = 'nd_secuencial';
      } 
      if ($this->nd_subtotal === "" || is_null($this->nd_subtotal))  
      { 
          $this->nd_subtotal = 0;
          $this->sc_force_zero[] = 'nd_subtotal';
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['decimal_db'] == ",") 
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
          if ($this->nd_fecha_emison_docmod == "")  
          { 
              $this->nd_fecha_emison_docmod = "null"; 
              $NM_val_null[] = "nd_fecha_emison_docmod";
          } 
          $this->nd_serie_before_qstr = $this->nd_serie;
          $this->nd_serie = substr($this->Db->qstr($this->nd_serie), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->nd_serie = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->nd_serie);
          }
          if ($this->nd_serie == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nd_serie = "null"; 
              $NM_val_null[] = "nd_serie";
          } 
          if ($this->nd_fecha == "")  
          { 
              $this->nd_fecha = "null"; 
              $NM_val_null[] = "nd_fecha";
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['decimal_db'] == ",") 
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
                 form_del_nota_debito_compras_pack_ajax_response();
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
                  $SC_fields_update[] = "nd_proveedor = $this->nd_proveedor, nd_iddocmod = $this->nd_iddocmod, nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_fecha_emison_docmod = #$this->nd_fecha_emison_docmod#, nd_serie = '$this->nd_serie', nd_secuencial = $this->nd_secuencial, nd_fecha = #$this->nd_fecha#, nd_subtotal = $this->nd_subtotal, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_autorizacion = '$this->nd_autorizacion', nd_cod_docmod = '$this->nd_cod_docmod'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_proveedor = $this->nd_proveedor, nd_iddocmod = $this->nd_iddocmod, nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_fecha_emison_docmod = " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", nd_serie = '$this->nd_serie', nd_secuencial = $this->nd_secuencial, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_subtotal = $this->nd_subtotal, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_autorizacion = '$this->nd_autorizacion', nd_cod_docmod = '$this->nd_cod_docmod'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_proveedor = $this->nd_proveedor, nd_iddocmod = $this->nd_iddocmod, nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_fecha_emison_docmod = " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", nd_serie = '$this->nd_serie', nd_secuencial = $this->nd_secuencial, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_subtotal = $this->nd_subtotal, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_autorizacion = '$this->nd_autorizacion', nd_cod_docmod = '$this->nd_cod_docmod'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_proveedor = $this->nd_proveedor, nd_iddocmod = $this->nd_iddocmod, nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_fecha_emison_docmod = EXTEND('$this->nd_fecha_emison_docmod', YEAR TO DAY), nd_serie = '$this->nd_serie', nd_secuencial = $this->nd_secuencial, nd_fecha = EXTEND('$this->nd_fecha', YEAR TO DAY), nd_subtotal = $this->nd_subtotal, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_autorizacion = '$this->nd_autorizacion', nd_cod_docmod = '$this->nd_cod_docmod'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_proveedor = $this->nd_proveedor, nd_iddocmod = $this->nd_iddocmod, nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_fecha_emison_docmod = " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", nd_serie = '$this->nd_serie', nd_secuencial = $this->nd_secuencial, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_subtotal = $this->nd_subtotal, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_autorizacion = '$this->nd_autorizacion', nd_cod_docmod = '$this->nd_cod_docmod'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_proveedor = $this->nd_proveedor, nd_iddocmod = $this->nd_iddocmod, nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_fecha_emison_docmod = " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", nd_serie = '$this->nd_serie', nd_secuencial = $this->nd_secuencial, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_subtotal = $this->nd_subtotal, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_autorizacion = '$this->nd_autorizacion', nd_cod_docmod = '$this->nd_cod_docmod'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "nd_proveedor = $this->nd_proveedor, nd_iddocmod = $this->nd_iddocmod, nd_serie_docmod = '$this->nd_serie_docmod', nd_secuencial_docmod = $this->nd_secuencial_docmod, nd_fecha_emison_docmod = " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", nd_serie = '$this->nd_serie', nd_secuencial = $this->nd_secuencial, nd_fecha = " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", nd_subtotal = $this->nd_subtotal, nd_subtotal_iva = $this->nd_subtotal_iva, nd_subtotal_cero = $this->nd_subtotal_cero, nd_subtotal_no_objeto = $this->nd_subtotal_no_objeto, nd_subtotal_excento = $this->nd_subtotal_excento, nd_valor_ice = $this->nd_valor_ice, nd_valor_iva = $this->nd_valor_iva, nd_total = $this->nd_total, nd_autorizacion = '$this->nd_autorizacion', nd_cod_docmod = '$this->nd_cod_docmod'"; 
              } 
              if (isset($NM_val_form['nd_tipo_comprobante']) && $NM_val_form['nd_tipo_comprobante'] != $this->nmgp_dados_select['nd_tipo_comprobante']) 
              { 
                  $SC_fields_update[] = "nd_tipo_comprobante = '$this->nd_tipo_comprobante'"; 
              } 
              if (isset($NM_val_form['nd_empresa']) && $NM_val_form['nd_empresa'] != $this->nmgp_dados_select['nd_empresa']) 
              { 
                  $SC_fields_update[] = "nd_empresa = '$this->nd_empresa'"; 
              } 
              if (isset($NM_val_form['nd_estado']) && $NM_val_form['nd_estado'] != $this->nmgp_dados_select['nd_estado']) 
              { 
                  $SC_fields_update[] = "nd_estado = '$this->nd_estado'"; 
              } 
              if (isset($NM_val_form['nd_estado_sri']) && $NM_val_form['nd_estado_sri'] != $this->nmgp_dados_select['nd_estado_sri']) 
              { 
                  $SC_fields_update[] = "nd_estado_sri = '$this->nd_estado_sri'"; 
              } 
              if (isset($NM_val_form['nd_usuario']) && $NM_val_form['nd_usuario'] != $this->nmgp_dados_select['nd_usuario']) 
              { 
                  $SC_fields_update[] = "nd_usuario = '$this->nd_usuario'"; 
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
                                  form_del_nota_debito_compras_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->nd_tipo_comprobante = $this->nd_tipo_comprobante_before_qstr;
              $this->nd_empresa = $this->nd_empresa_before_qstr;
              $this->nd_serie_docmod = $this->nd_serie_docmod_before_qstr;
              $this->nd_serie = $this->nd_serie_before_qstr;
              $this->nd_estado = $this->nd_estado_before_qstr;
              $this->nd_estado_sri = $this->nd_estado_sri_before_qstr;
              $this->nd_autorizacion = $this->nd_autorizacion_before_qstr;
              $this->nd_usuario = $this->nd_usuario_before_qstr;
              $this->nd_cod_docmod = $this->nd_cod_docmod_before_qstr;
              $this->detalles = $this->detalles_before_qstr;
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['nd_proveedor'])) { $this->nd_proveedor = $NM_val_form['nd_proveedor']; }
              elseif (isset($this->nd_proveedor)) { $this->nm_limpa_alfa($this->nd_proveedor); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_iddocmod'])) { $this->nd_iddocmod = $NM_val_form['nd_iddocmod']; }
              elseif (isset($this->nd_iddocmod)) { $this->nm_limpa_alfa($this->nd_iddocmod); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_serie_docmod'])) { $this->nd_serie_docmod = $NM_val_form['nd_serie_docmod']; }
              elseif (isset($this->nd_serie_docmod)) { $this->nm_limpa_alfa($this->nd_serie_docmod); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_secuencial_docmod'])) { $this->nd_secuencial_docmod = $NM_val_form['nd_secuencial_docmod']; }
              elseif (isset($this->nd_secuencial_docmod)) { $this->nm_limpa_alfa($this->nd_secuencial_docmod); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_serie'])) { $this->nd_serie = $NM_val_form['nd_serie']; }
              elseif (isset($this->nd_serie)) { $this->nm_limpa_alfa($this->nd_serie); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_secuencial'])) { $this->nd_secuencial = $NM_val_form['nd_secuencial']; }
              elseif (isset($this->nd_secuencial)) { $this->nm_limpa_alfa($this->nd_secuencial); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal'])) { $this->nd_subtotal = $NM_val_form['nd_subtotal']; }
              elseif (isset($this->nd_subtotal)) { $this->nm_limpa_alfa($this->nd_subtotal); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal_iva'])) { $this->nd_subtotal_iva = $NM_val_form['nd_subtotal_iva']; }
              elseif (isset($this->nd_subtotal_iva)) { $this->nm_limpa_alfa($this->nd_subtotal_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal_cero'])) { $this->nd_subtotal_cero = $NM_val_form['nd_subtotal_cero']; }
              elseif (isset($this->nd_subtotal_cero)) { $this->nm_limpa_alfa($this->nd_subtotal_cero); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal_no_objeto'])) { $this->nd_subtotal_no_objeto = $NM_val_form['nd_subtotal_no_objeto']; }
              elseif (isset($this->nd_subtotal_no_objeto)) { $this->nm_limpa_alfa($this->nd_subtotal_no_objeto); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_subtotal_excento'])) { $this->nd_subtotal_excento = $NM_val_form['nd_subtotal_excento']; }
              elseif (isset($this->nd_subtotal_excento)) { $this->nm_limpa_alfa($this->nd_subtotal_excento); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_valor_ice'])) { $this->nd_valor_ice = $NM_val_form['nd_valor_ice']; }
              elseif (isset($this->nd_valor_ice)) { $this->nm_limpa_alfa($this->nd_valor_ice); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_valor_iva'])) { $this->nd_valor_iva = $NM_val_form['nd_valor_iva']; }
              elseif (isset($this->nd_valor_iva)) { $this->nm_limpa_alfa($this->nd_valor_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_total'])) { $this->nd_total = $NM_val_form['nd_total']; }
              elseif (isset($this->nd_total)) { $this->nm_limpa_alfa($this->nd_total); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_autorizacion'])) { $this->nd_autorizacion = $NM_val_form['nd_autorizacion']; }
              elseif (isset($this->nd_autorizacion)) { $this->nm_limpa_alfa($this->nd_autorizacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['nd_cod_docmod'])) { $this->nd_cod_docmod = $NM_val_form['nd_cod_docmod']; }
              elseif (isset($this->nd_cod_docmod)) { $this->nm_limpa_alfa($this->nd_cod_docmod); }
              if     (isset($NM_val_form) && isset($NM_val_form['detalles'])) { $this->detalles = $NM_val_form['detalles']; }
              elseif (isset($this->detalles)) { $this->nm_limpa_alfa($this->detalles); }
              if     (isset($NM_val_form) && isset($NM_val_form['forma_pago'])) { $this->forma_pago = $NM_val_form['forma_pago']; }
              elseif (isset($this->forma_pago)) { $this->nm_limpa_alfa($this->forma_pago); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('titulo', 'nd_fecha', 'nd_serie', 'nd_secuencial', 'nd_autorizacion', 'nd_iddocmod', 'tipo_doc_sustento', 'serie_sustento', 'secuencial_sustento', 'fecha_sustento', 'nd_cod_docmod', 'nd_serie_docmod', 'nd_secuencial_docmod', 'nd_fecha_emison_docmod', 'fac_ruc_cliente', 'fac_nombre_cliente', 'fac_direccion_cliente', 'fac_email_cliente', 'nd_proveedor', 'detalles', 'nd_subtotal', 'nd_subtotal_iva', 'nd_subtotal_cero', 'nd_subtotal_no_objeto', 'nd_subtotal_excento', 'nd_valor_ice', 'nd_valor_iva', 'nd_total', 'forma_pago'), $aDoNotUpdate);
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $NM_seq_auto = "NEXT VALUE FOR del_nota_debito_compras_nd_numero_seq, ";
              $NM_cmp_auto = "nd_numero, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $NM_seq_auto = "del_nota_debito_compras_nd_numero_seq.NEXTVAL, ";
              $NM_cmp_auto = "nd_numero, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          { 
              $NM_seq_auto = "nextval('del_nota_debito_compras_nd_numero_seq'), ";
              $NM_cmp_auto = "nd_numero, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $NM_seq_auto = "gen_id(del_nota_debito_compras_nd_numero_seq, 1), ";
              $NM_cmp_auto = "nd_numero, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "nd_numero, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_del_nota_debito_compras_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod) VALUES ('$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_proveedor, $this->nd_iddocmod, '$this->nd_serie_docmod', $this->nd_secuencial_docmod, #$this->nd_fecha_emison_docmod#, '$this->nd_serie', $this->nd_secuencial, #$this->nd_fecha#, $this->nd_subtotal, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_cod_docmod')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod) VALUES (" . $NM_seq_auto . "'$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_proveedor, $this->nd_iddocmod, '$this->nd_serie_docmod', $this->nd_secuencial_docmod, " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", '$this->nd_serie', $this->nd_secuencial, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_subtotal, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_cod_docmod')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod) VALUES (" . $NM_seq_auto . "'$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_proveedor, $this->nd_iddocmod, '$this->nd_serie_docmod', $this->nd_secuencial_docmod, " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", '$this->nd_serie', $this->nd_secuencial, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_subtotal, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_cod_docmod')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod) VALUES (" . $NM_seq_auto . "'$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_proveedor, $this->nd_iddocmod, '$this->nd_serie_docmod', $this->nd_secuencial_docmod, " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", '$this->nd_serie', $this->nd_secuencial, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_subtotal, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_cod_docmod')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod) VALUES (" . $NM_seq_auto . "'$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_proveedor, $this->nd_iddocmod, '$this->nd_serie_docmod', $this->nd_secuencial_docmod, EXTEND('$this->nd_fecha_emison_docmod', YEAR TO DAY), '$this->nd_serie', $this->nd_secuencial, EXTEND('$this->nd_fecha', YEAR TO DAY), $this->nd_subtotal, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_cod_docmod')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod) VALUES (" . $NM_seq_auto . "'$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_proveedor, $this->nd_iddocmod, '$this->nd_serie_docmod', $this->nd_secuencial_docmod, " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", '$this->nd_serie', $this->nd_secuencial, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_subtotal, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_cod_docmod')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod) VALUES (" . $NM_seq_auto . "'$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_proveedor, $this->nd_iddocmod, '$this->nd_serie_docmod', $this->nd_secuencial_docmod, " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", '$this->nd_serie', $this->nd_secuencial, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_subtotal, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_cod_docmod')"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod) VALUES (" . $NM_seq_auto . "'$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_proveedor, $this->nd_iddocmod, '$this->nd_serie_docmod', $this->nd_secuencial_docmod, " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", '$this->nd_serie', $this->nd_secuencial, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_subtotal, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_cod_docmod')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod) VALUES (" . $NM_seq_auto . "'$this->nd_tipo_comprobante', '$this->nd_empresa', $this->nd_proveedor, $this->nd_iddocmod, '$this->nd_serie_docmod', $this->nd_secuencial_docmod, " . $this->Ini->date_delim . $this->nd_fecha_emison_docmod . $this->Ini->date_delim1 . ", '$this->nd_serie', $this->nd_secuencial, " . $this->Ini->date_delim . $this->nd_fecha . $this->Ini->date_delim1 . ", $this->nd_subtotal, $this->nd_subtotal_iva, $this->nd_subtotal_cero, $this->nd_subtotal_no_objeto, $this->nd_subtotal_excento, $this->nd_valor_ice, $this->nd_valor_iva, $this->nd_total, '$this->nd_estado', '$this->nd_estado_sri', '$this->nd_autorizacion', '$this->nd_usuario', '$this->nd_cod_docmod')"; 
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
                              form_del_nota_debito_compras_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_del_nota_debito_compras_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->nd_numero =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->nd_numero = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT dbinfo('sqlca.sqlerrd1') FROM " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->nd_numero = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select del_nota_debito_compras_nd_numero_seq.currval from dual"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->nd_numero = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "values PREVVAL FOR del_nota_debito_compras_nd_numero_seq"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->nd_numero = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('del_nota_debito_compras_nd_numero_seq')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->nd_numero = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(del_nota_debito_compras_nd_numero_seq, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->nd_numero = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->nd_numero = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              $this->nd_tipo_comprobante = $this->nd_tipo_comprobante_before_qstr;
              $this->nd_empresa = $this->nd_empresa_before_qstr;
              $this->nd_serie_docmod = $this->nd_serie_docmod_before_qstr;
              $this->nd_serie = $this->nd_serie_before_qstr;
              $this->nd_estado = $this->nd_estado_before_qstr;
              $this->nd_estado_sri = $this->nd_estado_sri_before_qstr;
              $this->nd_autorizacion = $this->nd_autorizacion_before_qstr;
              $this->nd_usuario = $this->nd_usuario_before_qstr;
              $this->nd_cod_docmod = $this->nd_cod_docmod_before_qstr;
              $this->detalles = $this->detalles_before_qstr;
              $this->forma_pago = $this->forma_pago_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->nd_tipo_comprobante = $this->nd_tipo_comprobante_before_qstr;
              $this->nd_empresa = $this->nd_empresa_before_qstr;
              $this->nd_serie_docmod = $this->nd_serie_docmod_before_qstr;
              $this->nd_serie = $this->nd_serie_before_qstr;
              $this->nd_estado = $this->nd_estado_before_qstr;
              $this->nd_estado_sri = $this->nd_estado_sri_before_qstr;
              $this->nd_autorizacion = $this->nd_autorizacion_before_qstr;
              $this->nd_usuario = $this->nd_usuario_before_qstr;
              $this->nd_cod_docmod = $this->nd_cod_docmod_before_qstr;
              $this->detalles = $this->detalles_before_qstr;
              $this->forma_pago = $this->forma_pago_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->nmgp_botoes['nuevo'] = "on";
              $this->nmgp_botoes['Anular'] = "on";
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['decimal_db'] == ",") 
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
              $this->form_del_detalle_nota_debito_compras->ini_controle();
              if ($this->form_del_detalle_nota_debito_compras->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }
          if ($bDelecaoOk)
          {
              $sDetailWhere = "fp_nota_debito = " . $this->nd_numero . "";
              $this->form_del_forma_pago_nd_compras->ini_controle();
              if ($this->form_del_forma_pago_nd_compras->temRegistros($sDetailWhere))
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
                          form_del_nota_debito_compras_pack_ajax_response();
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total']);
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['decimal_db'] == ",")
        {
           $this->nm_troca_decimal(",", ".");
        }
        $_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'on';
if (!isset($this->sc_temp_var_mensaje)) {$this->sc_temp_var_mensaje = (isset($_SESSION['var_mensaje'])) ? $_SESSION['var_mensaje'] : "";}
if (!isset($this->sc_temp_var_procesar)) {$this->sc_temp_var_procesar = (isset($_SESSION['var_procesar'])) ? $_SESSION['var_procesar'] : "";}
  if($this->sc_temp_var_procesar==true){
	
	if($this->nd_estado =='R'){
		$update_sql = "UPDATE del_nota_debito_compras 
				SET  
				   nd_estado='V',
				   nd_estado_sri='AUTORIZADO'
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
                form_del_nota_debito_compras_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		$update_sql = "UPDATE del_detalle_nota_debito_compras 
				SET  
				dnd_estado='V'
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
                form_del_nota_debito_compras_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

		$registra_kardex="SELECT sp_ncc_al_kardex(".$this->nd_numero .");";
		
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
                form_del_nota_debito_compras_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
	}
		
}else{
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $this->sc_temp_var_mensaje;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_del_nota_debito_compras';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_del_nota_debito_compras';
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
    if ($this->NM_ajax_flag)
    {
        $this->NM_ajax_info['redirExit']['action'] = "form_del_nota_debito_compras_fim.php?script_case_init=" . $this->form_encode_input($this->Ini->sc_page);
        $this->NM_ajax_info['redirExit']['metodo'] = 'location';
        $this->NM_ajax_info['redirExit']['target'] = "_self";
        $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_nota_debito_compras') . "/";
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_outra_jan'])
        {
            $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_nota_debito_compras";
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_outra_jan'] = false;
        }
        $_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'off';
        form_del_nota_debito_compras_pack_ajax_response();
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
 $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_del_nota_debito_compras') . "/";
 if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_outra_jan'])
 {
     $_SESSION['scriptcase']['sc_outra_jan'] = "form_del_nota_debito_compras";
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_outra_jan'] = false;
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
        action="form_del_nota_debito_compras_fim.php"
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
$_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'off'; 
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
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['decimal_db'] == ",")
   {
       $this->nm_troca_decimal(".", ",");
   }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['parms'] = "nd_numero?#?$this->nd_numero?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->nd_numero = null === $this->nd_numero ? null : substr($this->Db->qstr($this->nd_numero), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, str_replace (convert(char(10),nd_fecha_emison_docmod,102), '.', '-') + ' ' + convert(char(8),nd_fecha_emison_docmod,20), nd_serie, nd_secuencial, str_replace (convert(char(10),nd_fecha,102), '.', '-') + ' ' + convert(char(8),nd_fecha,20), nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, convert(char(23),nd_fecha_emison_docmod,121), nd_serie, nd_secuencial, convert(char(23),nd_fecha,121), nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, EXTEND(nd_fecha_emison_docmod, YEAR TO DAY), nd_serie, nd_secuencial, EXTEND(nd_fecha, YEAR TO DAY), nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT nd_numero, nd_tipo_comprobante, nd_empresa, nd_proveedor, nd_iddocmod, nd_serie_docmod, nd_secuencial_docmod, nd_fecha_emison_docmod, nd_serie, nd_secuencial, nd_fecha, nd_subtotal, nd_subtotal_iva, nd_subtotal_cero, nd_subtotal_no_objeto, nd_subtotal_excento, nd_valor_ice, nd_valor_iva, nd_total, nd_estado, nd_estado_sri, nd_autorizacion, nd_usuario, nd_cod_docmod from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = "(nd_numero=" . $_SESSION['var_id_nota_debito'] . ")";
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
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
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start']) ;  
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
              $this->NM_ajax_info['navSummary']['reg_ini'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['nuevo'] = $this->nmgp_botoes['nuevo'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes['Anular'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['empty_filter'] = true;
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
          else 
          { 
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 1; 
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
              $this->nd_proveedor = $rs->fields[3] ; 
              $this->nmgp_dados_select['nd_proveedor'] = $this->nd_proveedor;
              $this->nd_iddocmod = $rs->fields[4] ; 
              $this->nmgp_dados_select['nd_iddocmod'] = $this->nd_iddocmod;
              $this->nd_serie_docmod = $rs->fields[5] ; 
              $this->nmgp_dados_select['nd_serie_docmod'] = $this->nd_serie_docmod;
              $this->nd_secuencial_docmod = $rs->fields[6] ; 
              $this->nmgp_dados_select['nd_secuencial_docmod'] = $this->nd_secuencial_docmod;
              $this->nd_fecha_emison_docmod = $rs->fields[7] ; 
              $this->nmgp_dados_select['nd_fecha_emison_docmod'] = $this->nd_fecha_emison_docmod;
              $this->nd_serie = $rs->fields[8] ; 
              $this->nmgp_dados_select['nd_serie'] = $this->nd_serie;
              $this->nd_secuencial = $rs->fields[9] ; 
              $this->nmgp_dados_select['nd_secuencial'] = $this->nd_secuencial;
              $this->nd_fecha = $rs->fields[10] ; 
              $this->nmgp_dados_select['nd_fecha'] = $this->nd_fecha;
              $this->nd_subtotal = $rs->fields[11] ; 
              $this->nmgp_dados_select['nd_subtotal'] = $this->nd_subtotal;
              $this->nd_subtotal_iva = $rs->fields[12] ; 
              $this->nmgp_dados_select['nd_subtotal_iva'] = $this->nd_subtotal_iva;
              $this->nd_subtotal_cero = $rs->fields[13] ; 
              $this->nmgp_dados_select['nd_subtotal_cero'] = $this->nd_subtotal_cero;
              $this->nd_subtotal_no_objeto = $rs->fields[14] ; 
              $this->nmgp_dados_select['nd_subtotal_no_objeto'] = $this->nd_subtotal_no_objeto;
              $this->nd_subtotal_excento = $rs->fields[15] ; 
              $this->nmgp_dados_select['nd_subtotal_excento'] = $this->nd_subtotal_excento;
              $this->nd_valor_ice = $rs->fields[16] ; 
              $this->nmgp_dados_select['nd_valor_ice'] = $this->nd_valor_ice;
              $this->nd_valor_iva = $rs->fields[17] ; 
              $this->nmgp_dados_select['nd_valor_iva'] = $this->nd_valor_iva;
              $this->nd_total = $rs->fields[18] ; 
              $this->nmgp_dados_select['nd_total'] = $this->nd_total;
              $this->nd_estado = $rs->fields[19] ; 
              $this->nmgp_dados_select['nd_estado'] = $this->nd_estado;
              $this->nd_estado_sri = $rs->fields[20] ; 
              $this->nmgp_dados_select['nd_estado_sri'] = $this->nd_estado_sri;
              $this->nd_autorizacion = $rs->fields[21] ; 
              $this->nmgp_dados_select['nd_autorizacion'] = $this->nd_autorizacion;
              $this->nd_usuario = $rs->fields[22] ; 
              $this->nmgp_dados_select['nd_usuario'] = $this->nd_usuario;
              $this->nd_cod_docmod = $rs->fields[23] ; 
              $this->nmgp_dados_select['nd_cod_docmod'] = $this->nd_cod_docmod;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->nd_numero = (string)$this->nd_numero; 
              $this->nd_proveedor = (string)$this->nd_proveedor; 
              $this->nd_iddocmod = (string)$this->nd_iddocmod; 
              $this->nd_secuencial_docmod = (string)$this->nd_secuencial_docmod; 
              $this->nd_secuencial = (string)$this->nd_secuencial; 
              $this->nd_subtotal = (string)$this->nd_subtotal; 
              $this->nd_subtotal_iva = (string)$this->nd_subtotal_iva; 
              $this->nd_subtotal_cero = (string)$this->nd_subtotal_cero; 
              $this->nd_subtotal_no_objeto = (string)$this->nd_subtotal_no_objeto; 
              $this->nd_subtotal_excento = (string)$this->nd_subtotal_excento; 
              $this->nd_valor_ice = (string)$this->nd_valor_ice; 
              $this->nd_valor_iva = (string)$this->nd_valor_iva; 
              $this->nd_total = (string)$this->nd_total; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['parms'] = "nd_numero?#?$this->nd_numero?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['reg_start'] < $qt_geral_reg_form_del_nota_debito_compras;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opcao']   = '';
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
              $this->nd_empresa = "";  
              $this->nmgp_dados_form["nd_empresa"] = $this->nd_empresa;
              $this->nd_proveedor = "";  
              $this->nmgp_dados_form["nd_proveedor"] = $this->nd_proveedor;
              $this->nd_iddocmod = "";  
              $this->nmgp_dados_form["nd_iddocmod"] = $this->nd_iddocmod;
              $this->nd_serie_docmod = "";  
              $this->nmgp_dados_form["nd_serie_docmod"] = $this->nd_serie_docmod;
              $this->nd_secuencial_docmod = "";  
              $this->nmgp_dados_form["nd_secuencial_docmod"] = $this->nd_secuencial_docmod;
              $this->nd_fecha_emison_docmod = "";  
              $this->nd_fecha_emison_docmod_hora = "" ;  
              $this->nmgp_dados_form["nd_fecha_emison_docmod"] = $this->nd_fecha_emison_docmod;
              $this->nd_serie = "";  
              $this->nmgp_dados_form["nd_serie"] = $this->nd_serie;
              $this->nd_secuencial = "";  
              $this->nmgp_dados_form["nd_secuencial"] = $this->nd_secuencial;
              $this->nd_fecha = "";  
              $this->nd_fecha_hora = "" ;  
              $this->nmgp_dados_form["nd_fecha"] = $this->nd_fecha;
              $this->nd_subtotal = "";  
              $this->nmgp_dados_form["nd_subtotal"] = $this->nd_subtotal;
              $this->nd_subtotal_iva = "";  
              $this->nmgp_dados_form["nd_subtotal_iva"] = $this->nd_subtotal_iva;
              $this->nd_subtotal_cero = "";  
              $this->nmgp_dados_form["nd_subtotal_cero"] = $this->nd_subtotal_cero;
              $this->nd_subtotal_no_objeto = "";  
              $this->nmgp_dados_form["nd_subtotal_no_objeto"] = $this->nd_subtotal_no_objeto;
              $this->nd_subtotal_excento = "";  
              $this->nmgp_dados_form["nd_subtotal_excento"] = $this->nd_subtotal_excento;
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
              $this->nd_autorizacion = "";  
              $this->nmgp_dados_form["nd_autorizacion"] = $this->nd_autorizacion;
              $this->nd_usuario = "";  
              $this->nmgp_dados_form["nd_usuario"] = $this->nd_usuario;
              $this->nd_cod_docmod = "";  
              $this->nmgp_dados_form["nd_cod_docmod"] = $this->nd_cod_docmod;
              $this->detalles = "";  
              $this->nmgp_dados_form["detalles"] = $this->detalles;
              $this->titulo = "";  
              $this->nmgp_dados_form["titulo"] = $this->titulo;
              $this->tipo_doc_sustento = "";  
              $this->nmgp_dados_form["tipo_doc_sustento"] = $this->tipo_doc_sustento;
              $this->serie_sustento = "";  
              $this->nmgp_dados_form["serie_sustento"] = $this->serie_sustento;
              $this->secuencial_sustento = "";  
              $this->nmgp_dados_form["secuencial_sustento"] = $this->secuencial_sustento;
              $this->fecha_sustento = "";  
              $this->fecha_sustento_hora = "" ;  
              $this->nmgp_dados_form["fecha_sustento"] = $this->fecha_sustento;
              $this->fac_nombre_cliente = "";  
              $this->nmgp_dados_form["fac_nombre_cliente"] = $this->fac_nombre_cliente;
              $this->fac_ruc_cliente = "";  
              $this->nmgp_dados_form["fac_ruc_cliente"] = $this->fac_ruc_cliente;
              $this->fac_direccion_cliente = "";  
              $this->nmgp_dados_form["fac_direccion_cliente"] = $this->fac_direccion_cliente;
              $this->fac_email_cliente = "";  
              $this->nmgp_dados_form["fac_email_cliente"] = $this->fac_email_cliente;
              $this->forma_pago = "";  
              $this->nmgp_dados_form["forma_pago"] = $this->forma_pago;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['foreign_key'] as $sFKName => $sFKValue)
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_debito_compras']['embutida_parms'] = "var_nota_debito*scin" . $this->nmgp_dados_form['nd_numero'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_forma_pago_nd_compras']['embutida_parms'] = "var_factura*scin" . $this->nmgp_dados_form['nd_numero'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dados_select'];
           $this->SC_log_arr['fields']['nd_tipo_comprobante']['0'] =  $nmgp_dados_select['nd_tipo_comprobante'];
           $this->SC_log_arr['fields']['nd_empresa']['0'] =  $nmgp_dados_select['nd_empresa'];
           $this->SC_log_arr['fields']['nd_proveedor']['0'] =  $nmgp_dados_select['nd_proveedor'];
           $this->SC_log_arr['fields']['nd_iddocmod']['0'] =  $nmgp_dados_select['nd_iddocmod'];
           $this->SC_log_arr['fields']['nd_serie_docmod']['0'] =  $nmgp_dados_select['nd_serie_docmod'];
           $this->SC_log_arr['fields']['nd_secuencial_docmod']['0'] =  $nmgp_dados_select['nd_secuencial_docmod'];
           $this->SC_log_arr['fields']['nd_fecha_emison_docmod']['0'] =  $nmgp_dados_select['nd_fecha_emison_docmod'];
           $this->SC_log_arr['fields']['nd_serie']['0'] =  $nmgp_dados_select['nd_serie'];
           $this->SC_log_arr['fields']['nd_secuencial']['0'] =  $nmgp_dados_select['nd_secuencial'];
           $this->SC_log_arr['fields']['nd_fecha']['0'] =  $nmgp_dados_select['nd_fecha'];
           $this->SC_log_arr['fields']['nd_subtotal']['0'] =  $nmgp_dados_select['nd_subtotal'];
           $this->SC_log_arr['fields']['nd_subtotal_iva']['0'] =  $nmgp_dados_select['nd_subtotal_iva'];
           $this->SC_log_arr['fields']['nd_subtotal_cero']['0'] =  $nmgp_dados_select['nd_subtotal_cero'];
           $this->SC_log_arr['fields']['nd_subtotal_no_objeto']['0'] =  $nmgp_dados_select['nd_subtotal_no_objeto'];
           $this->SC_log_arr['fields']['nd_subtotal_excento']['0'] =  $nmgp_dados_select['nd_subtotal_excento'];
           $this->SC_log_arr['fields']['nd_valor_ice']['0'] =  $nmgp_dados_select['nd_valor_ice'];
           $this->SC_log_arr['fields']['nd_valor_iva']['0'] =  $nmgp_dados_select['nd_valor_iva'];
           $this->SC_log_arr['fields']['nd_total']['0'] =  $nmgp_dados_select['nd_total'];
           $this->SC_log_arr['fields']['nd_estado']['0'] =  $nmgp_dados_select['nd_estado'];
           $this->SC_log_arr['fields']['nd_estado_sri']['0'] =  $nmgp_dados_select['nd_estado_sri'];
           $this->SC_log_arr['fields']['nd_autorizacion']['0'] =  $nmgp_dados_select['nd_autorizacion'];
           $this->SC_log_arr['fields']['nd_usuario']['0'] =  $nmgp_dados_select['nd_usuario'];
           $this->SC_log_arr['fields']['nd_cod_docmod']['0'] =  $nmgp_dados_select['nd_cod_docmod'];
           $this->SC_log_arr['fields']['detalles']['0'] =  $nmgp_dados_select['detalles'];
           $this->SC_log_arr['fields']['forma_pago']['0'] =  $nmgp_dados_select['forma_pago'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['nd_tipo_comprobante']['1'] =  $this->nd_tipo_comprobante;
       $this->SC_log_arr['fields']['nd_empresa']['1'] =  $this->nd_empresa;
       $this->SC_log_arr['fields']['nd_proveedor']['1'] =  $this->nd_proveedor;
       $this->SC_log_arr['fields']['nd_iddocmod']['1'] =  $this->nd_iddocmod;
       $this->SC_log_arr['fields']['nd_serie_docmod']['1'] =  $this->nd_serie_docmod;
       $this->SC_log_arr['fields']['nd_secuencial_docmod']['1'] =  $this->nd_secuencial_docmod;
       $this->SC_log_arr['fields']['nd_fecha_emison_docmod']['1'] =  $this->nd_fecha_emison_docmod;
       $this->SC_log_arr['fields']['nd_serie']['1'] =  $this->nd_serie;
       $this->SC_log_arr['fields']['nd_secuencial']['1'] =  $this->nd_secuencial;
       $this->SC_log_arr['fields']['nd_fecha']['1'] =  $this->nd_fecha;
       $this->SC_log_arr['fields']['nd_subtotal']['1'] =  $this->nd_subtotal;
       $this->SC_log_arr['fields']['nd_subtotal_iva']['1'] =  $this->nd_subtotal_iva;
       $this->SC_log_arr['fields']['nd_subtotal_cero']['1'] =  $this->nd_subtotal_cero;
       $this->SC_log_arr['fields']['nd_subtotal_no_objeto']['1'] =  $this->nd_subtotal_no_objeto;
       $this->SC_log_arr['fields']['nd_subtotal_excento']['1'] =  $this->nd_subtotal_excento;
       $this->SC_log_arr['fields']['nd_valor_ice']['1'] =  $this->nd_valor_ice;
       $this->SC_log_arr['fields']['nd_valor_iva']['1'] =  $this->nd_valor_iva;
       $this->SC_log_arr['fields']['nd_total']['1'] =  $this->nd_total;
       $this->SC_log_arr['fields']['nd_estado']['1'] =  $this->nd_estado;
       $this->SC_log_arr['fields']['nd_estado_sri']['1'] =  $this->nd_estado_sri;
       $this->SC_log_arr['fields']['nd_autorizacion']['1'] =  $this->nd_autorizacion;
       $this->SC_log_arr['fields']['nd_usuario']['1'] =  $this->nd_usuario;
       $this->SC_log_arr['fields']['nd_cod_docmod']['1'] =  $this->nd_cod_docmod;
       $this->SC_log_arr['fields']['detalles']['1'] =  $this->detalles;
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
       $Log_labels['nd_proveedor'] =  "{lang_proveedor}";
       $Log_labels['nd_iddocmod'] =  "{lang_factura}";
       $Log_labels['nd_serie_docmod'] =  "{lang_serie_sri}";
       $Log_labels['nd_secuencial_docmod'] =  "{lang_secuencial}";
       $Log_labels['nd_fecha_emison_docmod'] =  "{lang_fecha}";
       $Log_labels['nd_serie'] =  "{lang_serie_sri}";
       $Log_labels['nd_secuencial'] =  "{lang_secuencial}";
       $Log_labels['nd_fecha'] =  "{lang_fecha}";
       $Log_labels['nd_subtotal'] =  "{lang_subtotal}";
       $Log_labels['nd_subtotal_iva'] =  "{lang_subtotal_iva}";
       $Log_labels['nd_subtotal_cero'] =  "{lang_subtotal_cero}";
       $Log_labels['nd_subtotal_no_objeto'] =  "{lang_subtotal_no_objeto}";
       $Log_labels['nd_subtotal_excento'] =  "{lang_subtotal_exento}";
       $Log_labels['nd_valor_ice'] =  "{lang_ice}";
       $Log_labels['nd_valor_iva'] =  "{lang_iva}";
       $Log_labels['nd_total'] =  "{lang_total}";
       $Log_labels['nd_estado'] =  "{lang_estado}";
       $Log_labels['nd_estado_sri'] =  "{lang_estado_sri}";
       $Log_labels['nd_autorizacion'] =  "{lang_autorizacion}";
       $Log_labels['nd_usuario'] =  "{lang_usuario}";
       $Log_labels['nd_cod_docmod'] =  "{lang_tipo_comprobante}";
       $Log_labels['detalles'] =  "detalles";
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function nd_iddocmod_onChange()
{
$_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'on';
  
$original_nd_iddocmod = $this->nd_iddocmod;
$original_nd_cod_docmod = $this->nd_cod_docmod;
$original_tipo_doc_sustento = $this->tipo_doc_sustento;
$original_nd_serie_docmod = $this->nd_serie_docmod;
$original_serie_sustento = $this->serie_sustento;
$original_nd_secuencial_docmod = $this->nd_secuencial_docmod;
$original_secuencial_sustento = $this->secuencial_sustento;
$original_nd_fecha_emison_docmod = $this->nd_fecha_emison_docmod;
$original_fecha_sustento = $this->fecha_sustento;
$original_fac_nombre_cliente = $this->fac_nombre_cliente;
$original_fac_ruc_cliente = $this->fac_ruc_cliente;
$original_fac_direccion_cliente = $this->fac_direccion_cliente;
$original_fac_email_cliente = $this->fac_email_cliente;
$original_nd_proveedor = $this->nd_proveedor;

$check_sql = "SELECT 
					fc_tipo_comprobante,
					tc_nombre,
					fc_serie,
					fac_secuencial,
					fc_fecha,
					pr_nombre,
					pr_identificacion,
					pr_direccion,
					pr_email,
					fc_proveedor
				FROM v_del_datos_factura_compra
				WHERE fc_id=".$this->nd_iddocmod ;
 
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
	$this->nd_fecha_emison_docmod =$this->rs[0][4];
	$this->fecha_sustento 		=$this->rs[0][4];
	$this->fac_nombre_cliente 	=$this->rs[0][5];
	$this->fac_ruc_cliente 		=$this->rs[0][6];
	$this->fac_direccion_cliente 	=$this->rs[0][7];
	$this->fac_email_cliente 		=$this->rs[0][8];
	$this->nd_proveedor 			=$this->rs[0][9];
}


$modificado_nd_iddocmod = $this->nd_iddocmod;
$modificado_nd_cod_docmod = $this->nd_cod_docmod;
$modificado_tipo_doc_sustento = $this->tipo_doc_sustento;
$modificado_nd_serie_docmod = $this->nd_serie_docmod;
$modificado_serie_sustento = $this->serie_sustento;
$modificado_nd_secuencial_docmod = $this->nd_secuencial_docmod;
$modificado_secuencial_sustento = $this->secuencial_sustento;
$modificado_nd_fecha_emison_docmod = $this->nd_fecha_emison_docmod;
$modificado_fecha_sustento = $this->fecha_sustento;
$modificado_fac_nombre_cliente = $this->fac_nombre_cliente;
$modificado_fac_ruc_cliente = $this->fac_ruc_cliente;
$modificado_fac_direccion_cliente = $this->fac_direccion_cliente;
$modificado_fac_email_cliente = $this->fac_email_cliente;
$modificado_nd_proveedor = $this->nd_proveedor;
$this->nm_formatar_campos('nd_iddocmod', 'nd_cod_docmod', 'tipo_doc_sustento', 'nd_serie_docmod', 'serie_sustento', 'nd_secuencial_docmod', 'secuencial_sustento', 'nd_fecha_emison_docmod', 'fecha_sustento', 'fac_nombre_cliente', 'fac_ruc_cliente', 'fac_direccion_cliente', 'fac_email_cliente', 'nd_proveedor');
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
if ($original_nd_fecha_emison_docmod !== $modificado_nd_fecha_emison_docmod || isset($this->nmgp_cmp_readonly['nd_fecha_emison_docmod']) || (isset($bFlagRead_nd_fecha_emison_docmod) && $bFlagRead_nd_fecha_emison_docmod))
{
    $this->ajax_return_values_nd_fecha_emison_docmod(true);
}
if ($original_fecha_sustento !== $modificado_fecha_sustento || isset($this->nmgp_cmp_readonly['fecha_sustento']) || (isset($bFlagRead_fecha_sustento) && $bFlagRead_fecha_sustento))
{
    $this->ajax_return_values_fecha_sustento(true);
}
if ($original_fac_nombre_cliente !== $modificado_fac_nombre_cliente || isset($this->nmgp_cmp_readonly['fac_nombre_cliente']) || (isset($bFlagRead_fac_nombre_cliente) && $bFlagRead_fac_nombre_cliente))
{
    $this->ajax_return_values_fac_nombre_cliente(true);
}
if ($original_fac_ruc_cliente !== $modificado_fac_ruc_cliente || isset($this->nmgp_cmp_readonly['fac_ruc_cliente']) || (isset($bFlagRead_fac_ruc_cliente) && $bFlagRead_fac_ruc_cliente))
{
    $this->ajax_return_values_fac_ruc_cliente(true);
}
if ($original_fac_direccion_cliente !== $modificado_fac_direccion_cliente || isset($this->nmgp_cmp_readonly['fac_direccion_cliente']) || (isset($bFlagRead_fac_direccion_cliente) && $bFlagRead_fac_direccion_cliente))
{
    $this->ajax_return_values_fac_direccion_cliente(true);
}
if ($original_fac_email_cliente !== $modificado_fac_email_cliente || isset($this->nmgp_cmp_readonly['fac_email_cliente']) || (isset($bFlagRead_fac_email_cliente) && $bFlagRead_fac_email_cliente))
{
    $this->ajax_return_values_fac_email_cliente(true);
}
if ($original_nd_proveedor !== $modificado_nd_proveedor || isset($this->nmgp_cmp_readonly['nd_proveedor']) || (isset($bFlagRead_nd_proveedor) && $bFlagRead_nd_proveedor))
{
    $this->ajax_return_values_nd_proveedor(true);
}
$this->NM_ajax_info['event_field'] = 'nd';
form_del_nota_debito_compras_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'off';
}
function scajaxbutton_Anular_onClick()
{
$_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'on';
  

$update_sql = "UPDATE del_nota_debito_compras 
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
                form_del_nota_debito_compras_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$update_sql = "UPDATE del_detalle_nota_debito_compras 
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
                form_del_nota_debito_compras_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$this->nm_mens_alert[] = $this->Ini->Nm_lang['lang_doc_anulado']; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert($this->Ini->Nm_lang['lang_doc_anulado']); }$this->nm_formatar_campos();
$this->NM_ajax_info['event_field'] = 'scajaxbutton';
form_del_nota_debito_compras_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_nota_debito_compras']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_del_nota_debito_compras_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_del_nota_debito_compras_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("nd_numero", "nd_tipo_comprobante", "nd_empresa", "nd_proveedor", "nd_iddocmod", "nd_serie_docmod", "nd_secuencial_docmod", "nd_serie", "nd_secuencial", "nd_subtotal", "nd_subtotal_iva", "nd_subtotal_cero", "nd_subtotal_no_objeto", "nd_subtotal_excento", "nd_valor_ice", "nd_valor_iva", "nd_total", "nd_estado", "nd_estado_sri", "nd_autorizacion", "nd_usuario"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['csrf_token'];
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

   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = true;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_del_nota_debito_compras_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "nd_proveedor", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_iddocmod", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
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
              $this->SC_monta_condicao($comando, "nd_serie", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_secuencial", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_subtotal", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
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
              $this->SC_monta_condicao($comando, "nd_autorizacion", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "nd_usuario", $arg_search, $data_search, "VARCHAR", false);
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter_form'] . " and ((nd_numero=" . $_SESSION['var_id_nota_debito'] . ")) and (" . $comando . ")";
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
      $qt_geral_reg_form_del_nota_debito_compras = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['total'] = $qt_geral_reg_form_del_nota_debito_compras;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_nota_debito_compras_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_nota_debito_compras_pack_ajax_response();
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
      $nm_numeric[] = "nd_numero";$nm_numeric[] = "nd_proveedor";$nm_numeric[] = "nd_iddocmod";$nm_numeric[] = "nd_secuencial_docmod";$nm_numeric[] = "nd_secuencial";$nm_numeric[] = "nd_subtotal";$nm_numeric[] = "nd_subtotal_iva";$nm_numeric[] = "nd_subtotal_cero";$nm_numeric[] = "nd_subtotal_no_objeto";$nm_numeric[] = "nd_subtotal_excento";$nm_numeric[] = "nd_valor_ice";$nm_numeric[] = "nd_valor_iva";$nm_numeric[] = "nd_total";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['decimal_db'] == ".")
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
      $Nm_datas["nd_fecha_emison_docmod"] = "date";$Nm_datas["nd_fecha"] = "date";$Nm_datas[""] = "date";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['SC_sep_date1'];
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
       $nmgp_saida_form = "form_del_nota_debito_compras_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_del_nota_debito_compras_fim.php";
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
       form_del_nota_debito_compras_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['masterValue']);
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
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "help":
                return array("sc_b_hlp_b");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-1", "sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_b.sc-unique-btn-7", "sc_b_sai_b.sc-unique-btn-9", "sc_b_sai_t.sc-unique-btn-2", "sc_b_sai_b.sc-unique-btn-8");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-4", "sys_separator.sc-unique-btn-6", "sys_separator.sc-unique-btn-10");
                break;
            case "nuevo":
                return array("sc_nuevo_top.", "sc_nuevo_bot.");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-5", "sc_b_upd_b.sc-unique-btn-11");
                break;
            case "anular":
                return array("sc_Anular_top.");
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_debito_compras']['ordem_ord'] == " desc") {
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
            case "nd_iddocmod":
                return true;
            case "nd_secuencial_docmod":
                return true;
            case "nd_proveedor":
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
            case "nd_numero":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "nd_fecha":
                return 'desc';
            case "nd_secuencial":
                return 'desc';
            case "nd_iddocmod":
                return 'desc';
            case "nd_secuencial_docmod":
                return 'desc';
            case "nd_fecha_emison_docmod":
                return 'desc';
            case "nd_proveedor":
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
            case "nd_numero":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
