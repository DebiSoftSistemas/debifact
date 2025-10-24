<?php
//
class form_del_detalle_nota_credito_compras_apl
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
                                'navPage'           => array(),
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
   var $dnc_id_;
   var $dnc_factura_;
   var $dnc_empresa_;
   var $dnc_producto_;
   var $dnc_descripcion_;
   var $dnc_cantidad_facturada_;
   var $dnc_cantidad_;
   var $dnc_precio_unitario_;
   var $dnc_subtotal_;
   var $dnc_descuento_;
   var $dnc_base_iva_;
   var $dnc_porcentaje_iva_;
   var $dnc_valor_iva_;
   var $dnc_base_ice_;
   var $dnc_porcentaje_ice_;
   var $dnc_valor_ice_;
   var $dnc_base_irbpnr_;
   var $dnc_porcentaje_irbpnr_;
   var $dnc_valor_irbpnr_;
   var $dnc_total_;
   var $dnc_estado_;
   var $dnc_nota_credito_;
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
   var $sc_teve_incl = false;
   var $sc_teve_excl = false;
   var $sc_teve_alt  = false;
   var $sc_after_all_insert = false;
   var $sc_after_all_update = false;
   var $sc_after_all_delete = false;
   var $sc_max_reg = 10; 
   var $sc_max_reg_incl = 10; 
   var $form_vert_form_del_detalle_nota_credito_compras = array();
   var $form_paginacao = 'total';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = true;
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
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_base_ice_']))
          {
              $this->dnc_base_ice_ = $this->NM_ajax_info['param']['dnc_base_ice_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_base_irbpnr_']))
          {
              $this->dnc_base_irbpnr_ = $this->NM_ajax_info['param']['dnc_base_irbpnr_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_base_iva_']))
          {
              $this->dnc_base_iva_ = $this->NM_ajax_info['param']['dnc_base_iva_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_cantidad_']))
          {
              $this->dnc_cantidad_ = $this->NM_ajax_info['param']['dnc_cantidad_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_cantidad_facturada_']))
          {
              $this->dnc_cantidad_facturada_ = $this->NM_ajax_info['param']['dnc_cantidad_facturada_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_descripcion_']))
          {
              $this->dnc_descripcion_ = $this->NM_ajax_info['param']['dnc_descripcion_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_descuento_']))
          {
              $this->dnc_descuento_ = $this->NM_ajax_info['param']['dnc_descuento_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_empresa_']))
          {
              $this->dnc_empresa_ = $this->NM_ajax_info['param']['dnc_empresa_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_estado_']))
          {
              $this->dnc_estado_ = $this->NM_ajax_info['param']['dnc_estado_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_factura_']))
          {
              $this->dnc_factura_ = $this->NM_ajax_info['param']['dnc_factura_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_id_']))
          {
              $this->dnc_id_ = $this->NM_ajax_info['param']['dnc_id_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_nota_credito_']))
          {
              $this->dnc_nota_credito_ = $this->NM_ajax_info['param']['dnc_nota_credito_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_porcentaje_ice_']))
          {
              $this->dnc_porcentaje_ice_ = $this->NM_ajax_info['param']['dnc_porcentaje_ice_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_porcentaje_irbpnr_']))
          {
              $this->dnc_porcentaje_irbpnr_ = $this->NM_ajax_info['param']['dnc_porcentaje_irbpnr_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_porcentaje_iva_']))
          {
              $this->dnc_porcentaje_iva_ = $this->NM_ajax_info['param']['dnc_porcentaje_iva_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_precio_unitario_']))
          {
              $this->dnc_precio_unitario_ = $this->NM_ajax_info['param']['dnc_precio_unitario_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_producto_']))
          {
              $this->dnc_producto_ = $this->NM_ajax_info['param']['dnc_producto_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_subtotal_']))
          {
              $this->dnc_subtotal_ = $this->NM_ajax_info['param']['dnc_subtotal_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_total_']))
          {
              $this->dnc_total_ = $this->NM_ajax_info['param']['dnc_total_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_valor_ice_']))
          {
              $this->dnc_valor_ice_ = $this->NM_ajax_info['param']['dnc_valor_ice_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_valor_irbpnr_']))
          {
              $this->dnc_valor_irbpnr_ = $this->NM_ajax_info['param']['dnc_valor_irbpnr_'];
          }
          if (isset($this->NM_ajax_info['param']['dnc_valor_iva_']))
          {
              $this->dnc_valor_iva_ = $this->NM_ajax_info['param']['dnc_valor_iva_'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_row']))
          {
              $this->nmgp_refresh_row = $this->NM_ajax_info['param']['nmgp_refresh_row'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['sc_clone']))
          {
              $this->sc_clone = $this->NM_ajax_info['param']['sc_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_clone']))
          {
              $this->sc_seq_clone = $this->NM_ajax_info['param']['sc_seq_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_vert']))
          {
              $this->sc_seq_vert = $this->NM_ajax_info['param']['sc_seq_vert'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
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
      $this->sc_conv_var['dnc_id'] = "dnc_id_";
      $this->sc_conv_var['dnc_factura'] = "dnc_factura_";
      $this->sc_conv_var['dnc_empresa'] = "dnc_empresa_";
      $this->sc_conv_var['dnc_producto'] = "dnc_producto_";
      $this->sc_conv_var['dnc_descripcion'] = "dnc_descripcion_";
      $this->sc_conv_var['dnc_cantidad_facturada'] = "dnc_cantidad_facturada_";
      $this->sc_conv_var['dnc_cantidad'] = "dnc_cantidad_";
      $this->sc_conv_var['dnc_precio_unitario'] = "dnc_precio_unitario_";
      $this->sc_conv_var['dnc_subtotal'] = "dnc_subtotal_";
      $this->sc_conv_var['dnc_descuento'] = "dnc_descuento_";
      $this->sc_conv_var['dnc_base_iva'] = "dnc_base_iva_";
      $this->sc_conv_var['dnc_porcentaje_iva'] = "dnc_porcentaje_iva_";
      $this->sc_conv_var['dnc_valor_iva'] = "dnc_valor_iva_";
      $this->sc_conv_var['dnc_base_ice'] = "dnc_base_ice_";
      $this->sc_conv_var['dnc_porcentaje_ice'] = "dnc_porcentaje_ice_";
      $this->sc_conv_var['dnc_valor_ice'] = "dnc_valor_ice_";
      $this->sc_conv_var['dnc_base_irbpnr'] = "dnc_base_irbpnr_";
      $this->sc_conv_var['dnc_porcentaje_irbpnr'] = "dnc_porcentaje_irbpnr_";
      $this->sc_conv_var['dnc_valor_irbpnr'] = "dnc_valor_irbpnr_";
      $this->sc_conv_var['dnc_total'] = "dnc_total_";
      $this->sc_conv_var['dnc_estado'] = "dnc_estado_";
      $this->sc_conv_var['dnc_nota_credito'] = "dnc_nota_credito_";
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
      if (isset($this->var_nota_credito) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_nota_credito'] = $this->var_nota_credito;
      }
      if (isset($this->Igtech_RucEmpresa) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (isset($_POST["var_nota_credito"]) && isset($this->var_nota_credito)) 
      {
          $_SESSION['var_nota_credito'] = $this->var_nota_credito;
      }
      if (isset($_POST["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_POST["Igtech_RucEmpresa"]) && isset($_POST["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_POST["igtech_rucempresa"];
      }
      if (isset($_GET["var_nota_credito"]) && isset($this->var_nota_credito)) 
      {
          $_SESSION['var_nota_credito'] = $this->var_nota_credito;
      }
      if (isset($_GET["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_GET["Igtech_RucEmpresa"]) && isset($_GET["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_GET["igtech_rucempresa"];
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $this->NM_where_filter = "";
          $tem_where_parms       = false;
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
                 nm_limpa_str_form_del_detalle_nota_credito_compras($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 if ($cadapar[0] == "dnc_id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "dnc_id = " . $this->dnc_id_;
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
             }
             $ix++;
          }
          if (isset($this->var_nota_credito)) 
          {
              $_SESSION['var_nota_credito'] = $this->var_nota_credito;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if ($tem_where_parms)
          {
              $this->NM_where_filter .= ")";
          }
          elseif (empty($this->NM_where_filter))
          {
              unset($this->NM_where_filter);
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->var_nota_credito)) 
          {
              $_SESSION['var_nota_credito'] = $this->var_nota_credito;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_del_detalle_nota_credito_compras_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_del_detalle_nota_credito_compras']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_detalle_nota_credito_compras']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_detalle_nota_credito_compras'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_detalle_nota_credito_compras']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_detalle_nota_credito_compras']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_del_detalle_nota_credito_compras') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_detalle_nota_credito_compras']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_detalle_nota_credito";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_del_detalle_nota_credito_compras")
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
      $this->nm_new_label['dnc_id_'] = '' . $this->Ini->Nm_lang['lang_id'] . '';
      $this->nm_new_label['dnc_factura_'] = '' . $this->Ini->Nm_lang['lang_factura'] . '';
      $this->nm_new_label['dnc_empresa_'] = '' . $this->Ini->Nm_lang['lang_empresa'] . '';
      $this->nm_new_label['dnc_producto_'] = '' . $this->Ini->Nm_lang['lang_producto'] . '';
      $this->nm_new_label['dnc_descripcion_'] = '' . $this->Ini->Nm_lang['lang_descripcion'] . '';
      $this->nm_new_label['dnc_cantidad_'] = '' . $this->Ini->Nm_lang['lang_cantidad'] . '';
      $this->nm_new_label['dnc_precio_unitario_'] = '' . $this->Ini->Nm_lang['lang_precio_unitario'] . '';
      $this->nm_new_label['dnc_subtotal_'] = '' . $this->Ini->Nm_lang['lang_subtotal'] . '';
      $this->nm_new_label['dnc_descuento_'] = '' . $this->Ini->Nm_lang['lang_descuento'] . '';
      $this->nm_new_label['dnc_base_iva_'] = '' . $this->Ini->Nm_lang['lang_base_iva'] . '';
      $this->nm_new_label['dnc_porcentaje_iva_'] = '' . $this->Ini->Nm_lang['lang_porcentaje_iva'] . '';
      $this->nm_new_label['dnc_valor_iva_'] = '' . $this->Ini->Nm_lang['lang_iva'] . '';
      $this->nm_new_label['dnc_base_ice_'] = '' . $this->Ini->Nm_lang['lang_base_ice'] . '';
      $this->nm_new_label['dnc_porcentaje_ice_'] = '' . $this->Ini->Nm_lang['lang_porcentaje_ice'] . '';
      $this->nm_new_label['dnc_valor_ice_'] = '' . $this->Ini->Nm_lang['lang_ice'] . '';
      $this->nm_new_label['dnc_base_irbpnr_'] = '' . $this->Ini->Nm_lang['lang_base_irbpnr'] . '';
      $this->nm_new_label['dnc_porcentaje_irbpnr_'] = '' . $this->Ini->Nm_lang['lang_porcentaje_irbpnr'] . '';
      $this->nm_new_label['dnc_valor_irbpnr_'] = '' . $this->Ini->Nm_lang['lang_irbpnr'] . '';
      $this->nm_new_label['dnc_total_'] = '' . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . '';
      $this->nm_new_label['dnc_estado_'] = '' . $this->Ini->Nm_lang['lang_estado'] . '';
      $this->nm_new_label['dnc_nota_credito_'] = '' . $this->Ini->Nm_lang['lang_nota_credito'] . '';

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
      $this->Ini->Img_status_ok       = !isset($str_img_status_ok_mult)  || "" == trim($str_img_status_ok_mult)   ? ""     : $str_img_status_ok_mult;
      $this->Ini->Img_status_err      = !isset($str_img_status_err_mult) || "" == trim($str_img_status_err_mult)  ? ""     : $str_img_status_err_mult;
      $this->Ini->Css_status          = "scFormInputErrorMult";
      $this->Ini->Css_status_pwd_box  = "scFormInputErrorMultPwdBox";
      $this->Ini->Css_status_pwd_text = "scFormInputErrorMultPwdText";
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



      $_SESSION['scriptcase']['error_icon']['form_del_detalle_nota_credito_compras']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_del_detalle_nota_credito_compras'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      if ('total' == $this->form_paginacao)
      {
          $this->nmgp_botoes['first']   = "off";
          $this->nmgp_botoes['back']    = "off";
          $this->nmgp_botoes['forward'] = "off";
          $this->nmgp_botoes['last']    = "off";
          $this->nmgp_botoes['navpage'] = "off";
          $this->nmgp_botoes['goto']    = "off";
          $this->nmgp_botoes['qtline']  = "off";
          $this->nmgp_botoes['summary'] = "on";
      }
      else
      {
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "on";
      $this->nmgp_botoes['qtline'] = "on";
      $this->nmgp_botoes['reload'] = "off";
      }
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_orig'] = " where (dnc_cantidad>0
and dnc_nota_credito=" . $_SESSION['var_nota_credito'] . ")";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_pesq'] = " where (dnc_cantidad>0
and dnc_nota_credito=" . $_SESSION['var_nota_credito'] . ")";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_detalle_nota_credito_compras']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_detalle_nota_credito_compras'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_detalle_nota_credito_compras'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field . "_"] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field . "_"] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_del_detalle_nota_credito_compras", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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

      if (is_file($this->Ini->path_aplicacao . 'form_del_detalle_nota_credito_compras_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_del_detalle_nota_credito_compras_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_del_detalle_nota_credito_compras/form_del_detalle_nota_credito_compras_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_del_detalle_nota_credito_compras_erro.class.php"); 
      }
      $this->Erro      = new form_del_detalle_nota_credito_compras_erro();
      $this->Erro->Ini = $this->Ini;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_max_reg']) && strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_max_reg']) == "all")
      {
          $this->form_paginacao = "total";
      }
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opcao']))
         { 
             if ($this->dnc_id_ != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
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

            $out1_img_cache = $_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($nm_opc_lookup) && $nm_opc_lookup == "lookup")
      { 
          if ($GLOBALS['F'] == "dnc_producto_")
          { 
              $nm_parms   = substr($GLOBALS['P0'], 1, strlen($GLOBALS['P0']) - 2);
              $array_vars = explode(",", $nm_parms);
              $this->dnc_producto_ = $array_vars[0];
              $dnc_producto_       = $this->dnc_producto_;
              $this->dnc_producto_       = $dnc_producto_;
              $this->lookup_dnc_producto_($conteudo);
              $conteudo = str_replace("&", "&amp;", $conteudo); 
              $conteudo = str_replace("\/" , "\/", $conteudo); 
              echo "<html><head></head>";
              echo " <body onload=\"p=document.layers?parentLayer:window.parent;p.jsrsLoaded('" . $GLOBALS['C'] . "');\">";
              echo "  jsrsPayload:";
              echo "  <br>";
              echo "  <form name=\"jsrs_Form\"><textarea name=\"jsrs_Payload\">";
              echo "$conteudo";
              echo " </textarea></form></body></html>";
          } 
          $this->NM_close_db(); 
          exit;
      } 
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- dnc_id_
      $this->field_config['dnc_id_']               = array();
      $this->field_config['dnc_id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['dnc_id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_id_']['symbol_dec'] = '';
      $this->field_config['dnc_id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['dnc_id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- dnc_factura_
      $this->field_config['dnc_factura_']               = array();
      $this->field_config['dnc_factura_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['dnc_factura_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_factura_']['symbol_dec'] = '';
      $this->field_config['dnc_factura_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['dnc_factura_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- dnc_cantidad_facturada_
      $this->field_config['dnc_cantidad_facturada_']               = array();
      $this->field_config['dnc_cantidad_facturada_']['symbol_grp'] = '';
      $this->field_config['dnc_cantidad_facturada_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_cantidad_facturada_']['symbol_dec'] = '.';
      $this->field_config['dnc_cantidad_facturada_']['symbol_neg'] = '-';
      $this->field_config['dnc_cantidad_facturada_']['format_neg'] = '2';
      //-- dnc_cantidad_
      $this->field_config['dnc_cantidad_']               = array();
      $this->field_config['dnc_cantidad_']['symbol_grp'] = '';
      $this->field_config['dnc_cantidad_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_cantidad_']['symbol_dec'] = '.';
      $this->field_config['dnc_cantidad_']['symbol_neg'] = '-';
      $this->field_config['dnc_cantidad_']['format_neg'] = '2';
      //-- dnc_precio_unitario_
      $this->field_config['dnc_precio_unitario_']               = array();
      $this->field_config['dnc_precio_unitario_']['symbol_grp'] = '';
      $this->field_config['dnc_precio_unitario_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_precio_unitario_']['symbol_dec'] = '.';
      $this->field_config['dnc_precio_unitario_']['symbol_neg'] = '-';
      $this->field_config['dnc_precio_unitario_']['format_neg'] = '2';
      //-- dnc_descuento_
      $this->field_config['dnc_descuento_']               = array();
      $this->field_config['dnc_descuento_']['symbol_grp'] = '';
      $this->field_config['dnc_descuento_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_descuento_']['symbol_dec'] = '.';
      $this->field_config['dnc_descuento_']['symbol_neg'] = '-';
      $this->field_config['dnc_descuento_']['format_neg'] = '2';
      //-- dnc_subtotal_
      $this->field_config['dnc_subtotal_']               = array();
      $this->field_config['dnc_subtotal_']['symbol_grp'] = '';
      $this->field_config['dnc_subtotal_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_subtotal_']['symbol_dec'] = '.';
      $this->field_config['dnc_subtotal_']['symbol_neg'] = '-';
      $this->field_config['dnc_subtotal_']['format_neg'] = '2';
      //-- dnc_base_iva_
      $this->field_config['dnc_base_iva_']               = array();
      $this->field_config['dnc_base_iva_']['symbol_grp'] = '';
      $this->field_config['dnc_base_iva_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_base_iva_']['symbol_dec'] = '.';
      $this->field_config['dnc_base_iva_']['symbol_neg'] = '-';
      $this->field_config['dnc_base_iva_']['format_neg'] = '2';
      //-- dnc_porcentaje_iva_
      $this->field_config['dnc_porcentaje_iva_']               = array();
      $this->field_config['dnc_porcentaje_iva_']['symbol_grp'] = '';
      $this->field_config['dnc_porcentaje_iva_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_porcentaje_iva_']['symbol_dec'] = '';
      $this->field_config['dnc_porcentaje_iva_']['symbol_neg'] = '-';
      $this->field_config['dnc_porcentaje_iva_']['format_neg'] = '2';
      //-- dnc_valor_iva_
      $this->field_config['dnc_valor_iva_']               = array();
      $this->field_config['dnc_valor_iva_']['symbol_grp'] = '';
      $this->field_config['dnc_valor_iva_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_valor_iva_']['symbol_dec'] = '.';
      $this->field_config['dnc_valor_iva_']['symbol_neg'] = '-';
      $this->field_config['dnc_valor_iva_']['format_neg'] = '2';
      //-- dnc_base_ice_
      $this->field_config['dnc_base_ice_']               = array();
      $this->field_config['dnc_base_ice_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['dnc_base_ice_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_base_ice_']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['dnc_base_ice_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['dnc_base_ice_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- dnc_valor_ice_
      $this->field_config['dnc_valor_ice_']               = array();
      $this->field_config['dnc_valor_ice_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['dnc_valor_ice_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_valor_ice_']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['dnc_valor_ice_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['dnc_valor_ice_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- dnc_base_irbpnr_
      $this->field_config['dnc_base_irbpnr_']               = array();
      $this->field_config['dnc_base_irbpnr_']['symbol_grp'] = '';
      $this->field_config['dnc_base_irbpnr_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_base_irbpnr_']['symbol_dec'] = ',';
      $this->field_config['dnc_base_irbpnr_']['symbol_neg'] = '-';
      $this->field_config['dnc_base_irbpnr_']['format_neg'] = '2';
      //-- dnc_valor_irbpnr_
      $this->field_config['dnc_valor_irbpnr_']               = array();
      $this->field_config['dnc_valor_irbpnr_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['dnc_valor_irbpnr_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_valor_irbpnr_']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['dnc_valor_irbpnr_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['dnc_valor_irbpnr_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- dnc_total_
      $this->field_config['dnc_total_']               = array();
      $this->field_config['dnc_total_']['symbol_grp'] = '';
      $this->field_config['dnc_total_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_total_']['symbol_dec'] = '.';
      $this->field_config['dnc_total_']['symbol_neg'] = '-';
      $this->field_config['dnc_total_']['format_neg'] = '2';
      //-- dnc_nota_credito_
      $this->field_config['dnc_nota_credito_']               = array();
      $this->field_config['dnc_nota_credito_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['dnc_nota_credito_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dnc_nota_credito_']['symbol_dec'] = '';
      $this->field_config['dnc_nota_credito_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['dnc_nota_credito_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['Gera_log_access'] = false;
      }
      if ($this->nmgp_opcao == "change_qtd_line")
      {
          $this->NM_btn_navega = "N";
          if (strtolower($this->nmgp_max_line) == "all")
          {
              $this->nmgp_opcao = "inicio";
              $this->form_paginacao = "total";
          }
          else
          {
              $this->nmgp_opcao = "igual";
              $this->form_paginacao = "parcial";
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_max_reg'] = $this->nmgp_max_line;
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

      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opc_edit'] = true;  
      $this->SC_log_arr_vert = array();
      $sc_contr_vert = (isset($GLOBALS["sc_contr_vert"])) ? $GLOBALS["sc_contr_vert"] : "";
      $sc_seq_vert   = 1; 
      $sc_opc_salva  = $this->nmgp_opcao; 
      $sc_todas_Crit = "";
      $sc_check_excl = array(); 
      $sc_check_incl = array(); 
      if (isset($GLOBALS["sc_check_vert"]) && is_array($GLOBALS["sc_check_vert"])) 
      { 
          if ($this->nmgp_opcao == "incluir" || ($this->nmgp_opcao == "recarga" && $this->nmgp_opc_ant == "novo"))
          {
              $sc_check_incl = $GLOBALS["sc_check_vert"]; 
          }
          elseif ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir" || $this->nmgp_opcao == "recarga")
          {
              $sc_check_excl = $GLOBALS["sc_check_vert"]; 
          }
      } 
      elseif ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $sc_check_incl = array($_POST['upload_file_row']);
      }
      if (empty($this->nmgp_opcao)) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "novo";
         $this->nm_select_banco();
         $this->nm_gera_html();
         $this->NM_ajax_info['newline'] = NM_utf8_urldecode($this->New_Line);
         $this->NM_close_db();
         form_del_detalle_nota_credito_compras_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'backup_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "igual";
         $this->nm_tira_formatacao();
         $this->nm_select_banco();
         $this->ajax_return_values();
         $this->NM_close_db();
         form_del_detalle_nota_credito_compras_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'submit_form' == $this->NM_ajax_opcao)
      {
         if (isset($this->dnc_id_)) { $this->nm_limpa_alfa($this->dnc_id_); }
         if (isset($this->dnc_factura_)) { $this->nm_limpa_alfa($this->dnc_factura_); }
         if (isset($this->dnc_empresa_)) { $this->nm_limpa_alfa($this->dnc_empresa_); }
         if (isset($this->dnc_producto_)) { $this->nm_limpa_alfa($this->dnc_producto_); }
         if (isset($this->dnc_descripcion_)) { $this->nm_limpa_alfa($this->dnc_descripcion_); }
         if (isset($this->dnc_cantidad_facturada_)) { $this->nm_limpa_alfa($this->dnc_cantidad_facturada_); }
         if (isset($this->dnc_cantidad_)) { $this->nm_limpa_alfa($this->dnc_cantidad_); }
         if (isset($this->dnc_precio_unitario_)) { $this->nm_limpa_alfa($this->dnc_precio_unitario_); }
         if (isset($this->dnc_subtotal_)) { $this->nm_limpa_alfa($this->dnc_subtotal_); }
         if (isset($this->dnc_descuento_)) { $this->nm_limpa_alfa($this->dnc_descuento_); }
         if (isset($this->dnc_base_iva_)) { $this->nm_limpa_alfa($this->dnc_base_iva_); }
         if (isset($this->dnc_porcentaje_iva_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_iva_); }
         if (isset($this->dnc_valor_iva_)) { $this->nm_limpa_alfa($this->dnc_valor_iva_); }
         if (isset($this->dnc_base_ice_)) { $this->nm_limpa_alfa($this->dnc_base_ice_); }
         if (isset($this->dnc_porcentaje_ice_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_ice_); }
         if (isset($this->dnc_valor_ice_)) { $this->nm_limpa_alfa($this->dnc_valor_ice_); }
         if (isset($this->dnc_base_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_base_irbpnr_); }
         if (isset($this->dnc_porcentaje_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_irbpnr_); }
         if (isset($this->dnc_valor_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_valor_irbpnr_); }
         if (isset($this->dnc_total_)) { $this->nm_limpa_alfa($this->dnc_total_); }
         if (isset($this->dnc_estado_)) { $this->nm_limpa_alfa($this->dnc_estado_); }
         if (isset($this->dnc_nota_credito_)) { $this->nm_limpa_alfa($this->dnc_nota_credito_); }
         if (isset($this->Sc_num_lin_alt) && $this->Sc_num_lin_alt > 0) 
         {
             $sc_seq_vert = $this->Sc_num_lin_alt;
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_form'][$sc_seq_vert];
         }
         $this->controle_form_vert();
         if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
         {
             $this->NM_rollback_db();
              if ($this->NM_ajax_flag)
              {
                  if (!isset($this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras']) || !is_array($this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras']))
                  {
                      $this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras'] = array();
                  }
                  if ($Campos_Crit != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras'][] = $Campos_Crit;
                  }
                  if (!empty($Campos_Falta))
                  {
                      $this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras'][] = $this->Formata_Campos_Falta($Campos_Falta);
                  }
                  if ($this->Campos_Mens_erro != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras'][] = $this->Campos_Mens_erro;
                  }
                  $this->NM_gera_nav_page(); 
                  $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              }
         }
         else
         {
             if ($this->SC_log_atv)
             {
                 $this->SC_log_arr_vert[] = $this->SC_log_arr;
                 $this->SC_log_atv = false;
             }
             $this->NM_commit_db();
         }
         if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
         }
         $this->NM_close_db();
		if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'] && 'ERROR' != $this->NM_ajax_info['result']) {
			$this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
		}
		if ('incluir' == $this->NM_ajax_info['param']['nmgp_opcao'] && 'ERROR' != $this->NM_ajax_info['result']) {
			$this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmi']);
		}
		if ('excluir' == $this->NM_ajax_info['param']['nmgp_opcao'] && 'ERROR' != $this->NM_ajax_info['result']) {
			$this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmd']);
		}
         form_del_detalle_nota_credito_compras_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
          if ('validate_dnc_id_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_id_');
          }
          if ('validate_dnc_factura_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_factura_');
          }
          if ('validate_dnc_empresa_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_empresa_');
          }
          if ('validate_dnc_producto_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_producto_');
          }
          if ('validate_dnc_descripcion_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_descripcion_');
          }
          if ('validate_dnc_cantidad_facturada_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_cantidad_facturada_');
          }
          if ('validate_dnc_cantidad_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_cantidad_');
          }
          if ('validate_dnc_precio_unitario_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_precio_unitario_');
          }
          if ('validate_dnc_descuento_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_descuento_');
          }
          if ('validate_dnc_subtotal_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_subtotal_');
          }
          if ('validate_dnc_base_iva_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_base_iva_');
          }
          if ('validate_dnc_porcentaje_iva_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_porcentaje_iva_');
          }
          if ('validate_dnc_valor_iva_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_valor_iva_');
          }
          if ('validate_dnc_base_ice_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_base_ice_');
          }
          if ('validate_dnc_porcentaje_ice_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_porcentaje_ice_');
          }
          if ('validate_dnc_valor_ice_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_valor_ice_');
          }
          if ('validate_dnc_base_irbpnr_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_base_irbpnr_');
          }
          if ('validate_dnc_porcentaje_irbpnr_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_porcentaje_irbpnr_');
          }
          if ('validate_dnc_valor_irbpnr_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_valor_irbpnr_');
          }
          if ('validate_dnc_total_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_total_');
          }
          if ('validate_dnc_estado_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_estado_');
          }
          if ('validate_dnc_nota_credito_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dnc_nota_credito_');
          }
          form_del_detalle_nota_credito_compras_pack_ajax_response();
          exit;
      }
      while ($sc_contr_vert > $sc_seq_vert) 
      { 
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
         $this->dnc_id_ = $GLOBALS["dnc_id_" . $sc_seq_vert]; 
         $this->dnc_factura_ = $GLOBALS["dnc_factura_" . $sc_seq_vert]; 
         $this->dnc_empresa_ = $GLOBALS["dnc_empresa_" . $sc_seq_vert]; 
         $this->dnc_producto_ = $GLOBALS["dnc_producto_" . $sc_seq_vert]; 
         $this->dnc_descripcion_ = $GLOBALS["dnc_descripcion_" . $sc_seq_vert]; 
         $this->dnc_cantidad_facturada_ = $GLOBALS["dnc_cantidad_facturada_" . $sc_seq_vert]; 
         $this->dnc_cantidad_ = $GLOBALS["dnc_cantidad_" . $sc_seq_vert]; 
         $this->dnc_precio_unitario_ = $GLOBALS["dnc_precio_unitario_" . $sc_seq_vert]; 
         $this->dnc_descuento_ = $GLOBALS["dnc_descuento_" . $sc_seq_vert]; 
         $this->dnc_subtotal_ = $GLOBALS["dnc_subtotal_" . $sc_seq_vert]; 
         $this->dnc_base_iva_ = $GLOBALS["dnc_base_iva_" . $sc_seq_vert]; 
         $this->dnc_porcentaje_iva_ = $GLOBALS["dnc_porcentaje_iva_" . $sc_seq_vert]; 
         $this->dnc_valor_iva_ = $GLOBALS["dnc_valor_iva_" . $sc_seq_vert]; 
         $this->dnc_base_ice_ = $GLOBALS["dnc_base_ice_" . $sc_seq_vert]; 
         $this->dnc_porcentaje_ice_ = $GLOBALS["dnc_porcentaje_ice_" . $sc_seq_vert]; 
         $this->dnc_valor_ice_ = $GLOBALS["dnc_valor_ice_" . $sc_seq_vert]; 
         $this->dnc_base_irbpnr_ = $GLOBALS["dnc_base_irbpnr_" . $sc_seq_vert]; 
         $this->dnc_porcentaje_irbpnr_ = $GLOBALS["dnc_porcentaje_irbpnr_" . $sc_seq_vert]; 
         $this->dnc_valor_irbpnr_ = $GLOBALS["dnc_valor_irbpnr_" . $sc_seq_vert]; 
         $this->dnc_total_ = $GLOBALS["dnc_total_" . $sc_seq_vert]; 
         $this->dnc_estado_ = $GLOBALS["dnc_estado_" . $sc_seq_vert]; 
         $this->dnc_nota_credito_ = $GLOBALS["dnc_nota_credito_" . $sc_seq_vert]; 
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_form'][$sc_seq_vert];
         }
         if (isset($this->dnc_id_)) { $this->nm_limpa_alfa($this->dnc_id_); }
         if (isset($this->dnc_factura_)) { $this->nm_limpa_alfa($this->dnc_factura_); }
         if (isset($this->dnc_empresa_)) { $this->nm_limpa_alfa($this->dnc_empresa_); }
         if (isset($this->dnc_producto_)) { $this->nm_limpa_alfa($this->dnc_producto_); }
         if (isset($this->dnc_descripcion_)) { $this->nm_limpa_alfa($this->dnc_descripcion_); }
         if (isset($this->dnc_cantidad_facturada_)) { $this->nm_limpa_alfa($this->dnc_cantidad_facturada_); }
         if (isset($this->dnc_cantidad_)) { $this->nm_limpa_alfa($this->dnc_cantidad_); }
         if (isset($this->dnc_precio_unitario_)) { $this->nm_limpa_alfa($this->dnc_precio_unitario_); }
         if (isset($this->dnc_subtotal_)) { $this->nm_limpa_alfa($this->dnc_subtotal_); }
         if (isset($this->dnc_descuento_)) { $this->nm_limpa_alfa($this->dnc_descuento_); }
         if (isset($this->dnc_base_iva_)) { $this->nm_limpa_alfa($this->dnc_base_iva_); }
         if (isset($this->dnc_porcentaje_iva_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_iva_); }
         if (isset($this->dnc_valor_iva_)) { $this->nm_limpa_alfa($this->dnc_valor_iva_); }
         if (isset($this->dnc_base_ice_)) { $this->nm_limpa_alfa($this->dnc_base_ice_); }
         if (isset($this->dnc_porcentaje_ice_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_ice_); }
         if (isset($this->dnc_valor_ice_)) { $this->nm_limpa_alfa($this->dnc_valor_ice_); }
         if (isset($this->dnc_base_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_base_irbpnr_); }
         if (isset($this->dnc_porcentaje_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_irbpnr_); }
         if (isset($this->dnc_valor_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_valor_irbpnr_); }
         if (isset($this->dnc_total_)) { $this->nm_limpa_alfa($this->dnc_total_); }
         if (isset($this->dnc_estado_)) { $this->nm_limpa_alfa($this->dnc_estado_); }
         if (isset($this->dnc_nota_credito_)) { $this->nm_limpa_alfa($this->dnc_nota_credito_); }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_form'])) 
         {
            $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_form'][$sc_seq_vert];
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'])) 
         {
            $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert];
         }
         if ($this->nmgp_opcao != "recarga" && in_array($sc_seq_vert, $sc_check_excl))
         {
             $this->nmgp_opcao = "excluir";
         }
         if ($this->nmgp_opcao == "incluir" && !in_array($sc_seq_vert, $sc_check_incl))
         { }
         else
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_disabled'] = array();
             $this->controle_form_vert(); 
             $this->nmgp_opcao = $sc_opc_salva; 
             if ($this->nmgp_opcao != "recarga"  && $this->nmgp_opcao != "muda_form" && ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != ""))
             {
                 $sc_todas_Crit .= (!empty($sc_todas_Crit)) ? "<br>" : ""; 
                 $sc_todas_Crit .= "<B>" . $this->Ini->Nm_lang['lang_errm_line'] . $sc_seq_vert . "</B>: "; 
                 $sc_todas_Crit .= $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, '', true, true);
                 $this->Campos_Mens_erro = ""; 
             }
             elseif ($this->SC_log_atv)
             {
                 $this->SC_log_arr_vert[] = $this->SC_log_arr;
                 $this->SC_log_atv = false;
             }
             if ($this->nmgp_opcao != "recarga") 
             {
                $this->nm_guardar_campos();
                $this->nm_formatar_campos();
             }
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_id_'] =  $this->dnc_id_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_factura_'] =  $this->dnc_factura_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_empresa_'] =  $this->dnc_empresa_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_producto_'] =  $this->dnc_producto_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_descripcion_'] =  $this->dnc_descripcion_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_cantidad_facturada_'] =  $this->dnc_cantidad_facturada_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_cantidad_'] =  $this->dnc_cantidad_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_precio_unitario_'] =  $this->dnc_precio_unitario_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_descuento_'] =  $this->dnc_descuento_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_subtotal_'] =  $this->dnc_subtotal_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_base_iva_'] =  $this->dnc_base_iva_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_porcentaje_iva_'] =  $this->dnc_porcentaje_iva_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_valor_iva_'] =  $this->dnc_valor_iva_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_base_ice_'] =  $this->dnc_base_ice_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_porcentaje_ice_'] =  $this->dnc_porcentaje_ice_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_valor_ice_'] =  $this->dnc_valor_ice_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_base_irbpnr_'] =  $this->dnc_base_irbpnr_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_porcentaje_irbpnr_'] =  $this->dnc_porcentaje_irbpnr_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_valor_irbpnr_'] =  $this->dnc_valor_irbpnr_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_total_'] =  $this->dnc_total_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_estado_'] =  $this->dnc_estado_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_nota_credito_'] =  $this->dnc_nota_credito_; 
         }
         $sc_seq_vert++; 
      } 
      if (!empty($sc_todas_Crit)) 
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sc_todas_Crit); 
          if ($this->nmgp_opcao == "incluir")
          { 
              $this->nmgp_opcao = "novo"; 
          }
      } 
      elseif ($this->nmgp_opcao == "incluir")
      { 
          $this->nmgp_opcao = "novo"; 
      }
      if ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $this->nmgp_opcao = 'igual';
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && (!$this->NM_ajax_flag || 'event_' != substr($this->NM_ajax_opcao, 0, 6))) 
      { 
          if ($this->sc_teve_incl) 
          { 
              $this->sc_after_all_insert = true;
          }
          if ($this->sc_teve_alt) 
          { 
              $this->sc_after_all_update = true;
          }
          if ($this->sc_teve_excl) 
          { 
              $this->sc_after_all_delete = true;
          }
          if (empty($sc_todas_Crit)) 
          { 
              $this->NM_commit_db(); 
              $this->nm_select_banco();
              $sc_check_excl = array(); 
          } 
          else
          { 
              $this->NM_rollback_db(); 
          } 
      } 
      if ($this->nmgp_opcao == "recarga") 
      { 
          $this->NM_gera_nav_page(); 
      } 
      if ($this->NM_ajax_flag && ('navigate_form' == $this->NM_ajax_opcao || !empty($this->nmgp_refresh_fields)))
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          $this->NM_close_db();
          form_del_detalle_nota_credito_compras_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
      {
          $this->nm_gera_html();
          $this->NM_ajax_info['tableRefresh'] = NM_charset_to_utf8($this->Table_refresh . $this->New_Line) . '</table>';
          $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
          $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_del_detalle_nota_credito_compras);
          $this->NM_ajax_info['fldList']['dnc_id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['dnc_id_']);
          $this->NM_close_db();
          form_del_detalle_nota_credito_compras_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          if ('event_dnc_base_ice__onchange' == $this->NM_ajax_opcao)
          {
              $this->dnc_base_ice__onChange();
          }
          if ('event_dnc_base_irbpnr__onchange' == $this->NM_ajax_opcao)
          {
              $this->dnc_base_irbpnr__onChange();
          }
          if ('event_dnc_cantidad__onchange' == $this->NM_ajax_opcao)
          {
              $this->dnc_cantidad__onChange();
          }
          if ('event_dnc_valor_ice__onchange' == $this->NM_ajax_opcao)
          {
              $this->dnc_valor_ice__onChange();
          }
          if ('event_dnc_valor_irbpnr__onchange' == $this->NM_ajax_opcao)
          {
              $this->dnc_valor_irbpnr__onChange();
          }
          $this->NM_close_db();
          form_del_detalle_nota_credito_compras_pack_ajax_response();
          exit;
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      $this->nm_todas_criticas = $sc_todas_Crit;
      $this->nm_gera_html();
      $this->NM_close_db(); 
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
   function controle_form_vert()
   {
     global $nm_opc_lookup,$Campos_Crit, $Campos_Falta, $Campos_Erros, 
            $glo_senha_protect, $nm_apl_dependente, $nm_form_submit;

//
//-----> 
//
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_del_detalle_nota_credito_compras_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          return; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
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
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_del_detalle_nota_credito_compras.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_detalle_nota_credito") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
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
<form name="Fdown" method="get" action="form_del_detalle_nota_credito_compras_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_del_detalle_nota_credito_compras"> 
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
       foreach ($this->SC_log_arr_vert as $this->SC_log_arr)
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_detalle_nota_credito_compras', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_del_detalle_nota_credito_compras', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_detalle_nota_credito_compras', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_del_detalle_nota_credito_compras_pack_ajax_response();
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
   function lookup_dnc_producto_(&$conteudo)
   {
      global  $dnc_producto_;
      $guarda_formatado = $this->formatado;
      $this->nm_tira_formatacao();
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      $nm_comando = "SELECT pro_descripcion 
FROM del_producto 
WHERE pro_codigo = '$this->dnc_producto_' 
AND pro_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "'
ORDER BY pro_descripcion"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->Execute($nm_comando)) 
      {
          $conteudo = (isset($rs->fields[0])) ? $rs->fields[0] : ""; 
          $rs->Close() ; 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0; 
      foreach ($this->Before_unformat as $Cmp => $Val)
      {
          $this->$Cmp = $Val;
          $this->formatado = $guarda_formatado;
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
           case 'dnc_id_':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
               break;
           case 'dnc_factura_':
               return "" . $this->Ini->Nm_lang['lang_factura'] . "";
               break;
           case 'dnc_empresa_':
               return "" . $this->Ini->Nm_lang['lang_empresa'] . "";
               break;
           case 'dnc_producto_':
               return "" . $this->Ini->Nm_lang['lang_producto'] . "";
               break;
           case 'dnc_descripcion_':
               return "" . $this->Ini->Nm_lang['lang_descripcion'] . "";
               break;
           case 'dnc_cantidad_facturada_':
               return "" . $this->Ini->Nm_lang['lang_cantidad'] . " Facturada";
               break;
           case 'dnc_cantidad_':
               return "" . $this->Ini->Nm_lang['lang_cantidad'] . "";
               break;
           case 'dnc_precio_unitario_':
               return "" . $this->Ini->Nm_lang['lang_precio_unitario'] . "";
               break;
           case 'dnc_descuento_':
               return "" . $this->Ini->Nm_lang['lang_descuento'] . "";
               break;
           case 'dnc_subtotal_':
               return "" . $this->Ini->Nm_lang['lang_subtotal'] . "";
               break;
           case 'dnc_base_iva_':
               return "" . $this->Ini->Nm_lang['lang_base_iva'] . "";
               break;
           case 'dnc_porcentaje_iva_':
               return "" . $this->Ini->Nm_lang['lang_porcentaje_iva'] . "";
               break;
           case 'dnc_valor_iva_':
               return "" . $this->Ini->Nm_lang['lang_iva'] . "";
               break;
           case 'dnc_base_ice_':
               return "" . $this->Ini->Nm_lang['lang_base_ice'] . "";
               break;
           case 'dnc_porcentaje_ice_':
               return "" . $this->Ini->Nm_lang['lang_porcentaje_ice'] . "";
               break;
           case 'dnc_valor_ice_':
               return "" . $this->Ini->Nm_lang['lang_ice'] . "";
               break;
           case 'dnc_base_irbpnr_':
               return "" . $this->Ini->Nm_lang['lang_base_irbpnr'] . "";
               break;
           case 'dnc_porcentaje_irbpnr_':
               return "" . $this->Ini->Nm_lang['lang_porcentaje_irbpnr'] . "";
               break;
           case 'dnc_valor_irbpnr_':
               return "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
               break;
           case 'dnc_total_':
               return "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "";
               break;
           case 'dnc_estado_':
               return "" . $this->Ini->Nm_lang['lang_estado'] . "";
               break;
           case 'dnc_nota_credito_':
               return "" . $this->Ini->Nm_lang['lang_nota_credito'] . "";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras']) || !is_array($this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras']))
              {
                  $this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_del_detalle_nota_credito_compras'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_id_' == $filtro)) || (is_array($filtro) && in_array('dnc_id_', $filtro)))
        $this->ValidateField_dnc_id_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_factura_' == $filtro)) || (is_array($filtro) && in_array('dnc_factura_', $filtro)))
        $this->ValidateField_dnc_factura_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_empresa_' == $filtro)) || (is_array($filtro) && in_array('dnc_empresa_', $filtro)))
        $this->ValidateField_dnc_empresa_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_producto_' == $filtro)) || (is_array($filtro) && in_array('dnc_producto_', $filtro)))
        $this->ValidateField_dnc_producto_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_descripcion_' == $filtro)) || (is_array($filtro) && in_array('dnc_descripcion_', $filtro)))
        $this->ValidateField_dnc_descripcion_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_cantidad_facturada_' == $filtro)) || (is_array($filtro) && in_array('dnc_cantidad_facturada_', $filtro)))
        $this->ValidateField_dnc_cantidad_facturada_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_cantidad_' == $filtro)) || (is_array($filtro) && in_array('dnc_cantidad_', $filtro)))
        $this->ValidateField_dnc_cantidad_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_precio_unitario_' == $filtro)) || (is_array($filtro) && in_array('dnc_precio_unitario_', $filtro)))
        $this->ValidateField_dnc_precio_unitario_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_descuento_' == $filtro)) || (is_array($filtro) && in_array('dnc_descuento_', $filtro)))
        $this->ValidateField_dnc_descuento_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_subtotal_' == $filtro)) || (is_array($filtro) && in_array('dnc_subtotal_', $filtro)))
        $this->ValidateField_dnc_subtotal_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_base_iva_' == $filtro)) || (is_array($filtro) && in_array('dnc_base_iva_', $filtro)))
        $this->ValidateField_dnc_base_iva_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_porcentaje_iva_' == $filtro)) || (is_array($filtro) && in_array('dnc_porcentaje_iva_', $filtro)))
        $this->ValidateField_dnc_porcentaje_iva_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_valor_iva_' == $filtro)) || (is_array($filtro) && in_array('dnc_valor_iva_', $filtro)))
        $this->ValidateField_dnc_valor_iva_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_base_ice_' == $filtro)) || (is_array($filtro) && in_array('dnc_base_ice_', $filtro)))
        $this->ValidateField_dnc_base_ice_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_porcentaje_ice_' == $filtro)) || (is_array($filtro) && in_array('dnc_porcentaje_ice_', $filtro)))
        $this->ValidateField_dnc_porcentaje_ice_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_valor_ice_' == $filtro)) || (is_array($filtro) && in_array('dnc_valor_ice_', $filtro)))
        $this->ValidateField_dnc_valor_ice_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_base_irbpnr_' == $filtro)) || (is_array($filtro) && in_array('dnc_base_irbpnr_', $filtro)))
        $this->ValidateField_dnc_base_irbpnr_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_porcentaje_irbpnr_' == $filtro)) || (is_array($filtro) && in_array('dnc_porcentaje_irbpnr_', $filtro)))
        $this->ValidateField_dnc_porcentaje_irbpnr_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_valor_irbpnr_' == $filtro)) || (is_array($filtro) && in_array('dnc_valor_irbpnr_', $filtro)))
        $this->ValidateField_dnc_valor_irbpnr_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_total_' == $filtro)) || (is_array($filtro) && in_array('dnc_total_', $filtro)))
        $this->ValidateField_dnc_total_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_estado_' == $filtro)) || (is_array($filtro) && in_array('dnc_estado_', $filtro)))
        $this->ValidateField_dnc_estado_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dnc_nota_credito_' == $filtro)) || (is_array($filtro) && in_array('dnc_nota_credito_', $filtro)))
        $this->ValidateField_dnc_nota_credito_($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

    function ValidateField_dnc_id_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_id_'])) {
          nm_limpa_numero($this->dnc_id_, $this->field_config['dnc_id_']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->dnc_id_, $this->field_config['dnc_id_']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->dnc_id_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->dnc_id_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_id_']))
                  {
                      $Campos_Erros['dnc_id_'] = array();
                  }
                  $Campos_Erros['dnc_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_id_']) || !is_array($this->NM_ajax_info['errList']['dnc_id_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_id_, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_id_']))
                  {
                      $Campos_Erros['dnc_id_'] = array();
                  }
                  $Campos_Erros['dnc_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_id_']) || !is_array($this->NM_ajax_info['errList']['dnc_id_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['php_cmp_required']['dnc_id_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['php_cmp_required']['dnc_id_'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_id'] . "" ; 
              if (!isset($Campos_Erros['dnc_id_']))
              {
                  $Campos_Erros['dnc_id_'] = array();
              }
              $Campos_Erros['dnc_id_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_id_']) || !is_array($this->NM_ajax_info['errList']['dnc_id_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_id_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_id_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_id_

    function ValidateField_dnc_factura_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_factura_'])) {
          nm_limpa_numero($this->dnc_factura_, $this->field_config['dnc_factura_']['symbol_grp']) ; 
          return;
      }
      if ($this->dnc_factura_ === "" || is_null($this->dnc_factura_))  
      { 
          $this->dnc_factura_ = 0;
          $this->sc_force_zero[] = 'dnc_factura_';
      } 
      nm_limpa_numero($this->dnc_factura_, $this->field_config['dnc_factura_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_factura_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->dnc_factura_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_factura'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_factura_']))
                  {
                      $Campos_Erros['dnc_factura_'] = array();
                  }
                  $Campos_Erros['dnc_factura_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_factura_']) || !is_array($this->NM_ajax_info['errList']['dnc_factura_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_factura_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_factura_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_factura_, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_factura'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_factura_']))
                  {
                      $Campos_Erros['dnc_factura_'] = array();
                  }
                  $Campos_Erros['dnc_factura_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_factura_']) || !is_array($this->NM_ajax_info['errList']['dnc_factura_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_factura_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_factura_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_factura_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_factura_

    function ValidateField_dnc_empresa_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_empresa_'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dnc_empresa_) > 13) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_empresa'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dnc_empresa_']))
              {
                  $Campos_Erros['dnc_empresa_'] = array();
              }
              $Campos_Erros['dnc_empresa_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dnc_empresa_']) || !is_array($this->NM_ajax_info['errList']['dnc_empresa_']))
              {
                  $this->NM_ajax_info['errList']['dnc_empresa_'] = array();
              }
              $this->NM_ajax_info['errList']['dnc_empresa_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_empresa_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_empresa_

    function ValidateField_dnc_producto_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_producto_'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dnc_producto_) > 25) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_producto'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dnc_producto_']))
              {
                  $Campos_Erros['dnc_producto_'] = array();
              }
              $Campos_Erros['dnc_producto_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dnc_producto_']) || !is_array($this->NM_ajax_info['errList']['dnc_producto_']))
              {
                  $this->NM_ajax_info['errList']['dnc_producto_'] = array();
              }
              $this->NM_ajax_info['errList']['dnc_producto_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_producto_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_producto_

    function ValidateField_dnc_descripcion_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_descripcion_'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dnc_descripcion_) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_descripcion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dnc_descripcion_']))
              {
                  $Campos_Erros['dnc_descripcion_'] = array();
              }
              $Campos_Erros['dnc_descripcion_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dnc_descripcion_']) || !is_array($this->NM_ajax_info['errList']['dnc_descripcion_']))
              {
                  $this->NM_ajax_info['errList']['dnc_descripcion_'] = array();
              }
              $this->NM_ajax_info['errList']['dnc_descripcion_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_descripcion_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_descripcion_

    function ValidateField_dnc_cantidad_facturada_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_cantidad_facturada_'])) {
          if (!empty($this->field_config['dnc_cantidad_facturada_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_cantidad_facturada_, $this->field_config['dnc_cantidad_facturada_']['symbol_dec'], $this->field_config['dnc_cantidad_facturada_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_cantidad_facturada_ === "" || is_null($this->dnc_cantidad_facturada_))  
      { 
          $this->dnc_cantidad_facturada_ = 0;
          $this->sc_force_zero[] = 'dnc_cantidad_facturada_';
      } 
      if (!empty($this->field_config['dnc_cantidad_facturada_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_cantidad_facturada_, $this->field_config['dnc_cantidad_facturada_']['symbol_dec'], $this->field_config['dnc_cantidad_facturada_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_cantidad_facturada_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_cantidad_facturada_, 1)))
              {
                  $this->dnc_cantidad_facturada_ = '';
              }
              else
              {
                  $this->dnc_cantidad_facturada_ = '0' . $this->dnc_cantidad_facturada_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_cantidad_facturada_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_cantidad_facturada_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cantidad'] . " Facturada: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_cantidad_facturada_']))
                  {
                      $Campos_Erros['dnc_cantidad_facturada_'] = array();
                  }
                  $Campos_Erros['dnc_cantidad_facturada_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_cantidad_facturada_']) || !is_array($this->NM_ajax_info['errList']['dnc_cantidad_facturada_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_cantidad_facturada_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_cantidad_facturada_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_cantidad_facturada_, 10, 5, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cantidad'] . " Facturada; " ; 
                  if (!isset($Campos_Erros['dnc_cantidad_facturada_']))
                  {
                      $Campos_Erros['dnc_cantidad_facturada_'] = array();
                  }
                  $Campos_Erros['dnc_cantidad_facturada_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_cantidad_facturada_']) || !is_array($this->NM_ajax_info['errList']['dnc_cantidad_facturada_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_cantidad_facturada_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_cantidad_facturada_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_cantidad_facturada_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_cantidad_facturada_

    function ValidateField_dnc_cantidad_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_cantidad_'])) {
          if (!empty($this->field_config['dnc_cantidad_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_cantidad_, $this->field_config['dnc_cantidad_']['symbol_dec'], $this->field_config['dnc_cantidad_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_cantidad_ === "" || is_null($this->dnc_cantidad_))  
      { 
          $this->dnc_cantidad_ = 0;
          $this->sc_force_zero[] = 'dnc_cantidad_';
      } 
      if (!empty($this->field_config['dnc_cantidad_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_cantidad_, $this->field_config['dnc_cantidad_']['symbol_dec'], $this->field_config['dnc_cantidad_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_cantidad_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_cantidad_, 1)))
              {
                  $this->dnc_cantidad_ = '';
              }
              else
              {
                  $this->dnc_cantidad_ = '0' . $this->dnc_cantidad_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_cantidad_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_cantidad_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cantidad'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_cantidad_']))
                  {
                      $Campos_Erros['dnc_cantidad_'] = array();
                  }
                  $Campos_Erros['dnc_cantidad_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_cantidad_']) || !is_array($this->NM_ajax_info['errList']['dnc_cantidad_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_cantidad_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_cantidad_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_cantidad_, 9, 6, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cantidad'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_cantidad_']))
                  {
                      $Campos_Erros['dnc_cantidad_'] = array();
                  }
                  $Campos_Erros['dnc_cantidad_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_cantidad_']) || !is_array($this->NM_ajax_info['errList']['dnc_cantidad_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_cantidad_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_cantidad_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_cantidad_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_cantidad_

    function ValidateField_dnc_precio_unitario_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_precio_unitario_'])) {
          if (!empty($this->field_config['dnc_precio_unitario_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_precio_unitario_, $this->field_config['dnc_precio_unitario_']['symbol_dec'], $this->field_config['dnc_precio_unitario_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_precio_unitario_ === "" || is_null($this->dnc_precio_unitario_))  
      { 
          $this->dnc_precio_unitario_ = 0;
          $this->sc_force_zero[] = 'dnc_precio_unitario_';
      } 
      if (!empty($this->field_config['dnc_precio_unitario_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_precio_unitario_, $this->field_config['dnc_precio_unitario_']['symbol_dec'], $this->field_config['dnc_precio_unitario_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_precio_unitario_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_precio_unitario_, 1)))
              {
                  $this->dnc_precio_unitario_ = '';
              }
              else
              {
                  $this->dnc_precio_unitario_ = '0' . $this->dnc_precio_unitario_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_precio_unitario_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_precio_unitario_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_precio_unitario'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_precio_unitario_']))
                  {
                      $Campos_Erros['dnc_precio_unitario_'] = array();
                  }
                  $Campos_Erros['dnc_precio_unitario_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_precio_unitario_']) || !is_array($this->NM_ajax_info['errList']['dnc_precio_unitario_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_precio_unitario_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_precio_unitario_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_precio_unitario_, 9, 6, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_precio_unitario'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_precio_unitario_']))
                  {
                      $Campos_Erros['dnc_precio_unitario_'] = array();
                  }
                  $Campos_Erros['dnc_precio_unitario_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_precio_unitario_']) || !is_array($this->NM_ajax_info['errList']['dnc_precio_unitario_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_precio_unitario_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_precio_unitario_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_precio_unitario_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_precio_unitario_

    function ValidateField_dnc_descuento_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_descuento_'])) {
          if (!empty($this->field_config['dnc_descuento_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_descuento_, $this->field_config['dnc_descuento_']['symbol_dec'], $this->field_config['dnc_descuento_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_descuento_ === "" || is_null($this->dnc_descuento_))  
      { 
          $this->dnc_descuento_ = 0;
          $this->sc_force_zero[] = 'dnc_descuento_';
      } 
      if (!empty($this->field_config['dnc_descuento_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_descuento_, $this->field_config['dnc_descuento_']['symbol_dec'], $this->field_config['dnc_descuento_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_descuento_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_descuento_, 1)))
              {
                  $this->dnc_descuento_ = '';
              }
              else
              {
                  $this->dnc_descuento_ = '0' . $this->dnc_descuento_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_descuento_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_descuento_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_descuento'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_descuento_']))
                  {
                      $Campos_Erros['dnc_descuento_'] = array();
                  }
                  $Campos_Erros['dnc_descuento_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_descuento_']) || !is_array($this->NM_ajax_info['errList']['dnc_descuento_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_descuento_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_descuento_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_descuento_, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_descuento'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_descuento_']))
                  {
                      $Campos_Erros['dnc_descuento_'] = array();
                  }
                  $Campos_Erros['dnc_descuento_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_descuento_']) || !is_array($this->NM_ajax_info['errList']['dnc_descuento_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_descuento_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_descuento_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_descuento_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_descuento_

    function ValidateField_dnc_subtotal_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_subtotal_'])) {
          if (!empty($this->field_config['dnc_subtotal_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_subtotal_, $this->field_config['dnc_subtotal_']['symbol_dec'], $this->field_config['dnc_subtotal_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_subtotal_ === "" || is_null($this->dnc_subtotal_))  
      { 
          $this->dnc_subtotal_ = 0;
          $this->sc_force_zero[] = 'dnc_subtotal_';
      } 
      if (!empty($this->field_config['dnc_subtotal_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_subtotal_, $this->field_config['dnc_subtotal_']['symbol_dec'], $this->field_config['dnc_subtotal_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_subtotal_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_subtotal_, 1)))
              {
                  $this->dnc_subtotal_ = '';
              }
              else
              {
                  $this->dnc_subtotal_ = '0' . $this->dnc_subtotal_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_subtotal_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_subtotal_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_subtotal_']))
                  {
                      $Campos_Erros['dnc_subtotal_'] = array();
                  }
                  $Campos_Erros['dnc_subtotal_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_subtotal_']) || !is_array($this->NM_ajax_info['errList']['dnc_subtotal_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_subtotal_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_subtotal_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_subtotal_, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_subtotal_']))
                  {
                      $Campos_Erros['dnc_subtotal_'] = array();
                  }
                  $Campos_Erros['dnc_subtotal_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_subtotal_']) || !is_array($this->NM_ajax_info['errList']['dnc_subtotal_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_subtotal_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_subtotal_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_subtotal_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_subtotal_

    function ValidateField_dnc_base_iva_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_base_iva_'])) {
          if (!empty($this->field_config['dnc_base_iva_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_base_iva_, $this->field_config['dnc_base_iva_']['symbol_dec'], $this->field_config['dnc_base_iva_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_base_iva_ === "" || is_null($this->dnc_base_iva_))  
      { 
          $this->dnc_base_iva_ = 0;
          $this->sc_force_zero[] = 'dnc_base_iva_';
      } 
      if (!empty($this->field_config['dnc_base_iva_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_base_iva_, $this->field_config['dnc_base_iva_']['symbol_dec'], $this->field_config['dnc_base_iva_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_base_iva_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_base_iva_, 1)))
              {
                  $this->dnc_base_iva_ = '';
              }
              else
              {
                  $this->dnc_base_iva_ = '0' . $this->dnc_base_iva_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_base_iva_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_base_iva_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_base_iva_']))
                  {
                      $Campos_Erros['dnc_base_iva_'] = array();
                  }
                  $Campos_Erros['dnc_base_iva_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_base_iva_']) || !is_array($this->NM_ajax_info['errList']['dnc_base_iva_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_base_iva_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_base_iva_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_base_iva_, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_iva'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_base_iva_']))
                  {
                      $Campos_Erros['dnc_base_iva_'] = array();
                  }
                  $Campos_Erros['dnc_base_iva_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_base_iva_']) || !is_array($this->NM_ajax_info['errList']['dnc_base_iva_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_base_iva_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_base_iva_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_base_iva_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_base_iva_

    function ValidateField_dnc_porcentaje_iva_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_porcentaje_iva_'])) {
          nm_limpa_numero($this->dnc_porcentaje_iva_, $this->field_config['dnc_porcentaje_iva_']['symbol_grp']) ; 
          return;
      }
      if ($this->dnc_porcentaje_iva_ === "" || is_null($this->dnc_porcentaje_iva_))  
      { 
          $this->dnc_porcentaje_iva_ = 0;
          $this->sc_force_zero[] = 'dnc_porcentaje_iva_';
      } 
      nm_limpa_numero($this->dnc_porcentaje_iva_, $this->field_config['dnc_porcentaje_iva_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_porcentaje_iva_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->dnc_porcentaje_iva_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_porcentaje_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_porcentaje_iva_']))
                  {
                      $Campos_Erros['dnc_porcentaje_iva_'] = array();
                  }
                  $Campos_Erros['dnc_porcentaje_iva_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_porcentaje_iva_']) || !is_array($this->NM_ajax_info['errList']['dnc_porcentaje_iva_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_porcentaje_iva_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_porcentaje_iva_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_porcentaje_iva_, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_porcentaje_iva'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_porcentaje_iva_']))
                  {
                      $Campos_Erros['dnc_porcentaje_iva_'] = array();
                  }
                  $Campos_Erros['dnc_porcentaje_iva_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_porcentaje_iva_']) || !is_array($this->NM_ajax_info['errList']['dnc_porcentaje_iva_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_porcentaje_iva_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_porcentaje_iva_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_porcentaje_iva_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_porcentaje_iva_

    function ValidateField_dnc_valor_iva_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_valor_iva_'])) {
          if (!empty($this->field_config['dnc_valor_iva_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_valor_iva_, $this->field_config['dnc_valor_iva_']['symbol_dec'], $this->field_config['dnc_valor_iva_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_valor_iva_ === "" || is_null($this->dnc_valor_iva_))  
      { 
          $this->dnc_valor_iva_ = 0;
          $this->sc_force_zero[] = 'dnc_valor_iva_';
      } 
      if (!empty($this->field_config['dnc_valor_iva_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_valor_iva_, $this->field_config['dnc_valor_iva_']['symbol_dec'], $this->field_config['dnc_valor_iva_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_valor_iva_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_valor_iva_, 1)))
              {
                  $this->dnc_valor_iva_ = '';
              }
              else
              {
                  $this->dnc_valor_iva_ = '0' . $this->dnc_valor_iva_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_valor_iva_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_valor_iva_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_valor_iva_']))
                  {
                      $Campos_Erros['dnc_valor_iva_'] = array();
                  }
                  $Campos_Erros['dnc_valor_iva_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_valor_iva_']) || !is_array($this->NM_ajax_info['errList']['dnc_valor_iva_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_valor_iva_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_valor_iva_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_valor_iva_, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_iva'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_valor_iva_']))
                  {
                      $Campos_Erros['dnc_valor_iva_'] = array();
                  }
                  $Campos_Erros['dnc_valor_iva_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_valor_iva_']) || !is_array($this->NM_ajax_info['errList']['dnc_valor_iva_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_valor_iva_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_valor_iva_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_valor_iva_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_valor_iva_

    function ValidateField_dnc_base_ice_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_base_ice_'])) {
          if (!empty($this->field_config['dnc_base_ice_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_base_ice_, $this->field_config['dnc_base_ice_']['symbol_dec'], $this->field_config['dnc_base_ice_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_base_ice_ === "" || is_null($this->dnc_base_ice_))  
      { 
          $this->dnc_base_ice_ = 0;
          $this->sc_force_zero[] = 'dnc_base_ice_';
      } 
      if (!empty($this->field_config['dnc_base_ice_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_base_ice_, $this->field_config['dnc_base_ice_']['symbol_dec'], $this->field_config['dnc_base_ice_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_base_ice_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_base_ice_, 1)))
              {
                  $this->dnc_base_ice_ = '';
              }
              else
              {
                  $this->dnc_base_ice_ = '0' . $this->dnc_base_ice_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_base_ice_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_base_ice_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_ice'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_base_ice_']))
                  {
                      $Campos_Erros['dnc_base_ice_'] = array();
                  }
                  $Campos_Erros['dnc_base_ice_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_base_ice_']) || !is_array($this->NM_ajax_info['errList']['dnc_base_ice_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_base_ice_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_base_ice_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_base_ice_, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_ice'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_base_ice_']))
                  {
                      $Campos_Erros['dnc_base_ice_'] = array();
                  }
                  $Campos_Erros['dnc_base_ice_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_base_ice_']) || !is_array($this->NM_ajax_info['errList']['dnc_base_ice_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_base_ice_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_base_ice_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_base_ice_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_base_ice_

    function ValidateField_dnc_porcentaje_ice_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_porcentaje_ice_'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dnc_porcentaje_ice_) > 5) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_porcentaje_ice'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dnc_porcentaje_ice_']))
              {
                  $Campos_Erros['dnc_porcentaje_ice_'] = array();
              }
              $Campos_Erros['dnc_porcentaje_ice_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dnc_porcentaje_ice_']) || !is_array($this->NM_ajax_info['errList']['dnc_porcentaje_ice_']))
              {
                  $this->NM_ajax_info['errList']['dnc_porcentaje_ice_'] = array();
              }
              $this->NM_ajax_info['errList']['dnc_porcentaje_ice_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_porcentaje_ice_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_porcentaje_ice_

    function ValidateField_dnc_valor_ice_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_valor_ice_'])) {
          if (!empty($this->field_config['dnc_valor_ice_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_valor_ice_, $this->field_config['dnc_valor_ice_']['symbol_dec'], $this->field_config['dnc_valor_ice_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_valor_ice_ === "" || is_null($this->dnc_valor_ice_))  
      { 
          $this->dnc_valor_ice_ = 0;
          $this->sc_force_zero[] = 'dnc_valor_ice_';
      } 
      if (!empty($this->field_config['dnc_valor_ice_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_valor_ice_, $this->field_config['dnc_valor_ice_']['symbol_dec'], $this->field_config['dnc_valor_ice_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_valor_ice_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_valor_ice_, 1)))
              {
                  $this->dnc_valor_ice_ = '';
              }
              else
              {
                  $this->dnc_valor_ice_ = '0' . $this->dnc_valor_ice_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_valor_ice_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_valor_ice_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ice'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_valor_ice_']))
                  {
                      $Campos_Erros['dnc_valor_ice_'] = array();
                  }
                  $Campos_Erros['dnc_valor_ice_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_valor_ice_']) || !is_array($this->NM_ajax_info['errList']['dnc_valor_ice_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_valor_ice_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_valor_ice_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_valor_ice_, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ice'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_valor_ice_']))
                  {
                      $Campos_Erros['dnc_valor_ice_'] = array();
                  }
                  $Campos_Erros['dnc_valor_ice_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_valor_ice_']) || !is_array($this->NM_ajax_info['errList']['dnc_valor_ice_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_valor_ice_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_valor_ice_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_valor_ice_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_valor_ice_

    function ValidateField_dnc_base_irbpnr_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_base_irbpnr_'])) {
          if (!empty($this->field_config['dnc_base_irbpnr_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_base_irbpnr_, $this->field_config['dnc_base_irbpnr_']['symbol_dec'], $this->field_config['dnc_base_irbpnr_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_base_irbpnr_ === "" || is_null($this->dnc_base_irbpnr_))  
      { 
          $this->dnc_base_irbpnr_ = 0;
          $this->sc_force_zero[] = 'dnc_base_irbpnr_';
      } 
      if (!empty($this->field_config['dnc_base_irbpnr_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_base_irbpnr_, $this->field_config['dnc_base_irbpnr_']['symbol_dec'], $this->field_config['dnc_base_irbpnr_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_base_irbpnr_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_base_irbpnr_, 1)))
              {
                  $this->dnc_base_irbpnr_ = '';
              }
              else
              {
                  $this->dnc_base_irbpnr_ = '0' . $this->dnc_base_irbpnr_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_base_irbpnr_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_base_irbpnr_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_irbpnr'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_base_irbpnr_']))
                  {
                      $Campos_Erros['dnc_base_irbpnr_'] = array();
                  }
                  $Campos_Erros['dnc_base_irbpnr_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_base_irbpnr_']) || !is_array($this->NM_ajax_info['errList']['dnc_base_irbpnr_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_base_irbpnr_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_base_irbpnr_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_base_irbpnr_, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_irbpnr'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_base_irbpnr_']))
                  {
                      $Campos_Erros['dnc_base_irbpnr_'] = array();
                  }
                  $Campos_Erros['dnc_base_irbpnr_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_base_irbpnr_']) || !is_array($this->NM_ajax_info['errList']['dnc_base_irbpnr_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_base_irbpnr_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_base_irbpnr_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_base_irbpnr_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_base_irbpnr_

    function ValidateField_dnc_porcentaje_irbpnr_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_porcentaje_irbpnr_'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dnc_porcentaje_irbpnr_) > 5) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_porcentaje_irbpnr'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dnc_porcentaje_irbpnr_']))
              {
                  $Campos_Erros['dnc_porcentaje_irbpnr_'] = array();
              }
              $Campos_Erros['dnc_porcentaje_irbpnr_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dnc_porcentaje_irbpnr_']) || !is_array($this->NM_ajax_info['errList']['dnc_porcentaje_irbpnr_']))
              {
                  $this->NM_ajax_info['errList']['dnc_porcentaje_irbpnr_'] = array();
              }
              $this->NM_ajax_info['errList']['dnc_porcentaje_irbpnr_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_porcentaje_irbpnr_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_porcentaje_irbpnr_

    function ValidateField_dnc_valor_irbpnr_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_valor_irbpnr_'])) {
          if (!empty($this->field_config['dnc_valor_irbpnr_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_valor_irbpnr_, $this->field_config['dnc_valor_irbpnr_']['symbol_dec'], $this->field_config['dnc_valor_irbpnr_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_valor_irbpnr_ === "" || is_null($this->dnc_valor_irbpnr_))  
      { 
          $this->dnc_valor_irbpnr_ = 0;
          $this->sc_force_zero[] = 'dnc_valor_irbpnr_';
      } 
      if (!empty($this->field_config['dnc_valor_irbpnr_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_valor_irbpnr_, $this->field_config['dnc_valor_irbpnr_']['symbol_dec'], $this->field_config['dnc_valor_irbpnr_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_valor_irbpnr_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_valor_irbpnr_, 1)))
              {
                  $this->dnc_valor_irbpnr_ = '';
              }
              else
              {
                  $this->dnc_valor_irbpnr_ = '0' . $this->dnc_valor_irbpnr_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_valor_irbpnr_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_valor_irbpnr_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_irbpnr'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_valor_irbpnr_']))
                  {
                      $Campos_Erros['dnc_valor_irbpnr_'] = array();
                  }
                  $Campos_Erros['dnc_valor_irbpnr_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_valor_irbpnr_']) || !is_array($this->NM_ajax_info['errList']['dnc_valor_irbpnr_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_valor_irbpnr_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_valor_irbpnr_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_valor_irbpnr_, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_irbpnr'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_valor_irbpnr_']))
                  {
                      $Campos_Erros['dnc_valor_irbpnr_'] = array();
                  }
                  $Campos_Erros['dnc_valor_irbpnr_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_valor_irbpnr_']) || !is_array($this->NM_ajax_info['errList']['dnc_valor_irbpnr_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_valor_irbpnr_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_valor_irbpnr_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_valor_irbpnr_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_valor_irbpnr_

    function ValidateField_dnc_total_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_total_'])) {
          if (!empty($this->field_config['dnc_total_']['symbol_dec'])) {
              nm_limpa_valor($this->dnc_total_, $this->field_config['dnc_total_']['symbol_dec'], $this->field_config['dnc_total_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->dnc_total_ === "" || is_null($this->dnc_total_))  
      { 
          $this->dnc_total_ = 0;
          $this->sc_force_zero[] = 'dnc_total_';
      } 
      if (!empty($this->field_config['dnc_total_']['symbol_dec']))
      {
          nm_limpa_valor($this->dnc_total_, $this->field_config['dnc_total_']['symbol_dec'], $this->field_config['dnc_total_']['symbol_grp']) ; 
          if ('.' == substr($this->dnc_total_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->dnc_total_, 1)))
              {
                  $this->dnc_total_ = '';
              }
              else
              {
                  $this->dnc_total_ = '0' . $this->dnc_total_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_total_ != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->dnc_total_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_total_']))
                  {
                      $Campos_Erros['dnc_total_'] = array();
                  }
                  $Campos_Erros['dnc_total_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_total_']) || !is_array($this->NM_ajax_info['errList']['dnc_total_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_total_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_total_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_total_, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_total_']))
                  {
                      $Campos_Erros['dnc_total_'] = array();
                  }
                  $Campos_Erros['dnc_total_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_total_']) || !is_array($this->NM_ajax_info['errList']['dnc_total_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_total_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_total_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_total_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_total_

    function ValidateField_dnc_estado_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_estado_'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dnc_estado_) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_estado'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dnc_estado_']))
              {
                  $Campos_Erros['dnc_estado_'] = array();
              }
              $Campos_Erros['dnc_estado_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dnc_estado_']) || !is_array($this->NM_ajax_info['errList']['dnc_estado_']))
              {
                  $this->NM_ajax_info['errList']['dnc_estado_'] = array();
              }
              $this->NM_ajax_info['errList']['dnc_estado_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_estado_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_estado_

    function ValidateField_dnc_nota_credito_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dnc_nota_credito_'])) {
          nm_limpa_numero($this->dnc_nota_credito_, $this->field_config['dnc_nota_credito_']['symbol_grp']) ; 
          return;
      }
      if ($this->dnc_nota_credito_ === "" || is_null($this->dnc_nota_credito_))  
      { 
          $this->dnc_nota_credito_ = 0;
          $this->sc_force_zero[] = 'dnc_nota_credito_';
      } 
      nm_limpa_numero($this->dnc_nota_credito_, $this->field_config['dnc_nota_credito_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dnc_nota_credito_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->dnc_nota_credito_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_nota_credito'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dnc_nota_credito_']))
                  {
                      $Campos_Erros['dnc_nota_credito_'] = array();
                  }
                  $Campos_Erros['dnc_nota_credito_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dnc_nota_credito_']) || !is_array($this->NM_ajax_info['errList']['dnc_nota_credito_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_nota_credito_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_nota_credito_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dnc_nota_credito_, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_nota_credito'] . "; " ; 
                  if (!isset($Campos_Erros['dnc_nota_credito_']))
                  {
                      $Campos_Erros['dnc_nota_credito_'] = array();
                  }
                  $Campos_Erros['dnc_nota_credito_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dnc_nota_credito_']) || !is_array($this->NM_ajax_info['errList']['dnc_nota_credito_']))
                  {
                      $this->NM_ajax_info['errList']['dnc_nota_credito_'] = array();
                  }
                  $this->NM_ajax_info['errList']['dnc_nota_credito_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dnc_nota_credito_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dnc_nota_credito_

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
    $this->nmgp_dados_form['dnc_id_'] = $this->dnc_id_;
    $this->nmgp_dados_form['dnc_factura_'] = $this->dnc_factura_;
    $this->nmgp_dados_form['dnc_empresa_'] = $this->dnc_empresa_;
    $this->nmgp_dados_form['dnc_producto_'] = $this->dnc_producto_;
    $this->nmgp_dados_form['dnc_descripcion_'] = $this->dnc_descripcion_;
    $this->nmgp_dados_form['dnc_cantidad_facturada_'] = $this->dnc_cantidad_facturada_;
    $this->nmgp_dados_form['dnc_cantidad_'] = $this->dnc_cantidad_;
    $this->nmgp_dados_form['dnc_precio_unitario_'] = $this->dnc_precio_unitario_;
    $this->nmgp_dados_form['dnc_descuento_'] = $this->dnc_descuento_;
    $this->nmgp_dados_form['dnc_subtotal_'] = $this->dnc_subtotal_;
    $this->nmgp_dados_form['dnc_base_iva_'] = $this->dnc_base_iva_;
    $this->nmgp_dados_form['dnc_porcentaje_iva_'] = $this->dnc_porcentaje_iva_;
    $this->nmgp_dados_form['dnc_valor_iva_'] = $this->dnc_valor_iva_;
    $this->nmgp_dados_form['dnc_base_ice_'] = $this->dnc_base_ice_;
    $this->nmgp_dados_form['dnc_porcentaje_ice_'] = $this->dnc_porcentaje_ice_;
    $this->nmgp_dados_form['dnc_valor_ice_'] = $this->dnc_valor_ice_;
    $this->nmgp_dados_form['dnc_base_irbpnr_'] = $this->dnc_base_irbpnr_;
    $this->nmgp_dados_form['dnc_porcentaje_irbpnr_'] = $this->dnc_porcentaje_irbpnr_;
    $this->nmgp_dados_form['dnc_valor_irbpnr_'] = $this->dnc_valor_irbpnr_;
    $this->nmgp_dados_form['dnc_total_'] = $this->dnc_total_;
    $this->nmgp_dados_form['dnc_estado_'] = $this->dnc_estado_;
    $this->nmgp_dados_form['dnc_nota_credito_'] = $this->dnc_nota_credito_;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_form'][$sc_seq_vert] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['dnc_id_'] = $this->dnc_id_;
      nm_limpa_numero($this->dnc_id_, $this->field_config['dnc_id_']['symbol_grp']) ; 
      $this->Before_unformat['dnc_factura_'] = $this->dnc_factura_;
      nm_limpa_numero($this->dnc_factura_, $this->field_config['dnc_factura_']['symbol_grp']) ; 
      $this->Before_unformat['dnc_cantidad_facturada_'] = $this->dnc_cantidad_facturada_;
      if (!empty($this->field_config['dnc_cantidad_facturada_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_cantidad_facturada_, $this->field_config['dnc_cantidad_facturada_']['symbol_dec'], $this->field_config['dnc_cantidad_facturada_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_cantidad_'] = $this->dnc_cantidad_;
      if (!empty($this->field_config['dnc_cantidad_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_cantidad_, $this->field_config['dnc_cantidad_']['symbol_dec'], $this->field_config['dnc_cantidad_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_precio_unitario_'] = $this->dnc_precio_unitario_;
      if (!empty($this->field_config['dnc_precio_unitario_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_precio_unitario_, $this->field_config['dnc_precio_unitario_']['symbol_dec'], $this->field_config['dnc_precio_unitario_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_descuento_'] = $this->dnc_descuento_;
      if (!empty($this->field_config['dnc_descuento_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_descuento_, $this->field_config['dnc_descuento_']['symbol_dec'], $this->field_config['dnc_descuento_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_subtotal_'] = $this->dnc_subtotal_;
      if (!empty($this->field_config['dnc_subtotal_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_subtotal_, $this->field_config['dnc_subtotal_']['symbol_dec'], $this->field_config['dnc_subtotal_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_base_iva_'] = $this->dnc_base_iva_;
      if (!empty($this->field_config['dnc_base_iva_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_base_iva_, $this->field_config['dnc_base_iva_']['symbol_dec'], $this->field_config['dnc_base_iva_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_porcentaje_iva_'] = $this->dnc_porcentaje_iva_;
      nm_limpa_numero($this->dnc_porcentaje_iva_, $this->field_config['dnc_porcentaje_iva_']['symbol_grp']) ; 
      $this->Before_unformat['dnc_valor_iva_'] = $this->dnc_valor_iva_;
      if (!empty($this->field_config['dnc_valor_iva_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_valor_iva_, $this->field_config['dnc_valor_iva_']['symbol_dec'], $this->field_config['dnc_valor_iva_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_base_ice_'] = $this->dnc_base_ice_;
      if (!empty($this->field_config['dnc_base_ice_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_base_ice_, $this->field_config['dnc_base_ice_']['symbol_dec'], $this->field_config['dnc_base_ice_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_valor_ice_'] = $this->dnc_valor_ice_;
      if (!empty($this->field_config['dnc_valor_ice_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_valor_ice_, $this->field_config['dnc_valor_ice_']['symbol_dec'], $this->field_config['dnc_valor_ice_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_base_irbpnr_'] = $this->dnc_base_irbpnr_;
      if (!empty($this->field_config['dnc_base_irbpnr_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_base_irbpnr_, $this->field_config['dnc_base_irbpnr_']['symbol_dec'], $this->field_config['dnc_base_irbpnr_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_valor_irbpnr_'] = $this->dnc_valor_irbpnr_;
      if (!empty($this->field_config['dnc_valor_irbpnr_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_valor_irbpnr_, $this->field_config['dnc_valor_irbpnr_']['symbol_dec'], $this->field_config['dnc_valor_irbpnr_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_total_'] = $this->dnc_total_;
      if (!empty($this->field_config['dnc_total_']['symbol_dec']))
      {
         nm_limpa_valor($this->dnc_total_, $this->field_config['dnc_total_']['symbol_dec'], $this->field_config['dnc_total_']['symbol_grp']);
      }
      $this->Before_unformat['dnc_nota_credito_'] = $this->dnc_nota_credito_;
      nm_limpa_numero($this->dnc_nota_credito_, $this->field_config['dnc_nota_credito_']['symbol_grp']) ; 
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
      if ($Nome_Campo == "dnc_id_")
      {
          nm_limpa_numero($this->dnc_id_, $this->field_config['dnc_id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "dnc_factura_")
      {
          nm_limpa_numero($this->dnc_factura_, $this->field_config['dnc_factura_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "dnc_cantidad_facturada_")
      {
          if (!empty($this->field_config['dnc_cantidad_facturada_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_cantidad_facturada_, $this->field_config['dnc_cantidad_facturada_']['symbol_dec'], $this->field_config['dnc_cantidad_facturada_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_cantidad_")
      {
          if (!empty($this->field_config['dnc_cantidad_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_cantidad_, $this->field_config['dnc_cantidad_']['symbol_dec'], $this->field_config['dnc_cantidad_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_precio_unitario_")
      {
          if (!empty($this->field_config['dnc_precio_unitario_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_precio_unitario_, $this->field_config['dnc_precio_unitario_']['symbol_dec'], $this->field_config['dnc_precio_unitario_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_descuento_")
      {
          if (!empty($this->field_config['dnc_descuento_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_descuento_, $this->field_config['dnc_descuento_']['symbol_dec'], $this->field_config['dnc_descuento_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_subtotal_")
      {
          if (!empty($this->field_config['dnc_subtotal_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_subtotal_, $this->field_config['dnc_subtotal_']['symbol_dec'], $this->field_config['dnc_subtotal_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_base_iva_")
      {
          if (!empty($this->field_config['dnc_base_iva_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_base_iva_, $this->field_config['dnc_base_iva_']['symbol_dec'], $this->field_config['dnc_base_iva_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_porcentaje_iva_")
      {
          nm_limpa_numero($this->dnc_porcentaje_iva_, $this->field_config['dnc_porcentaje_iva_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "dnc_valor_iva_")
      {
          if (!empty($this->field_config['dnc_valor_iva_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_valor_iva_, $this->field_config['dnc_valor_iva_']['symbol_dec'], $this->field_config['dnc_valor_iva_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_base_ice_")
      {
          if (!empty($this->field_config['dnc_base_ice_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_base_ice_, $this->field_config['dnc_base_ice_']['symbol_dec'], $this->field_config['dnc_base_ice_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_valor_ice_")
      {
          if (!empty($this->field_config['dnc_valor_ice_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_valor_ice_, $this->field_config['dnc_valor_ice_']['symbol_dec'], $this->field_config['dnc_valor_ice_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_base_irbpnr_")
      {
          if (!empty($this->field_config['dnc_base_irbpnr_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_base_irbpnr_, $this->field_config['dnc_base_irbpnr_']['symbol_dec'], $this->field_config['dnc_base_irbpnr_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_valor_irbpnr_")
      {
          if (!empty($this->field_config['dnc_valor_irbpnr_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_valor_irbpnr_, $this->field_config['dnc_valor_irbpnr_']['symbol_dec'], $this->field_config['dnc_valor_irbpnr_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_total_")
      {
          if (!empty($this->field_config['dnc_total_']['symbol_dec']))
          {
             nm_limpa_valor($this->dnc_total_, $this->field_config['dnc_total_']['symbol_dec'], $this->field_config['dnc_total_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "dnc_nota_credito_")
      {
          nm_limpa_numero($this->dnc_nota_credito_, $this->field_config['dnc_nota_credito_']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
      if ('' !== $this->dnc_id_ || (!empty($format_fields) && isset($format_fields['dnc_id_'])))
      {
          nmgp_Form_Num_Val($this->dnc_id_, $this->field_config['dnc_id_']['symbol_grp'], $this->field_config['dnc_id_']['symbol_dec'], "0", "S", $this->field_config['dnc_id_']['format_neg'], "", "", "-", $this->field_config['dnc_id_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_factura_ || (!empty($format_fields) && isset($format_fields['dnc_factura_'])))
      {
          nmgp_Form_Num_Val($this->dnc_factura_, $this->field_config['dnc_factura_']['symbol_grp'], $this->field_config['dnc_factura_']['symbol_dec'], "0", "S", $this->field_config['dnc_factura_']['format_neg'], "", "", "-", $this->field_config['dnc_factura_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_cantidad_facturada_ || (!empty($format_fields) && isset($format_fields['dnc_cantidad_facturada_'])))
      {
          nmgp_Form_Num_Val($this->dnc_cantidad_facturada_, $this->field_config['dnc_cantidad_facturada_']['symbol_grp'], $this->field_config['dnc_cantidad_facturada_']['symbol_dec'], "5", "S", $this->field_config['dnc_cantidad_facturada_']['format_neg'], "", "", "-", $this->field_config['dnc_cantidad_facturada_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_cantidad_ || (!empty($format_fields) && isset($format_fields['dnc_cantidad_'])))
      {
          nmgp_Form_Num_Val($this->dnc_cantidad_, $this->field_config['dnc_cantidad_']['symbol_grp'], $this->field_config['dnc_cantidad_']['symbol_dec'], "6", "S", $this->field_config['dnc_cantidad_']['format_neg'], "", "", "-", $this->field_config['dnc_cantidad_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_precio_unitario_ || (!empty($format_fields) && isset($format_fields['dnc_precio_unitario_'])))
      {
          nmgp_Form_Num_Val($this->dnc_precio_unitario_, $this->field_config['dnc_precio_unitario_']['symbol_grp'], $this->field_config['dnc_precio_unitario_']['symbol_dec'], "6", "S", $this->field_config['dnc_precio_unitario_']['format_neg'], "", "", "-", $this->field_config['dnc_precio_unitario_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_descuento_ || (!empty($format_fields) && isset($format_fields['dnc_descuento_'])))
      {
          nmgp_Form_Num_Val($this->dnc_descuento_, $this->field_config['dnc_descuento_']['symbol_grp'], $this->field_config['dnc_descuento_']['symbol_dec'], "2", "S", $this->field_config['dnc_descuento_']['format_neg'], "", "", "-", $this->field_config['dnc_descuento_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_subtotal_ || (!empty($format_fields) && isset($format_fields['dnc_subtotal_'])))
      {
          nmgp_Form_Num_Val($this->dnc_subtotal_, $this->field_config['dnc_subtotal_']['symbol_grp'], $this->field_config['dnc_subtotal_']['symbol_dec'], "2", "S", $this->field_config['dnc_subtotal_']['format_neg'], "", "", "-", $this->field_config['dnc_subtotal_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_base_iva_ || (!empty($format_fields) && isset($format_fields['dnc_base_iva_'])))
      {
          nmgp_Form_Num_Val($this->dnc_base_iva_, $this->field_config['dnc_base_iva_']['symbol_grp'], $this->field_config['dnc_base_iva_']['symbol_dec'], "2", "S", $this->field_config['dnc_base_iva_']['format_neg'], "", "", "-", $this->field_config['dnc_base_iva_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_porcentaje_iva_ || (!empty($format_fields) && isset($format_fields['dnc_porcentaje_iva_'])))
      {
          nmgp_Form_Num_Val($this->dnc_porcentaje_iva_, $this->field_config['dnc_porcentaje_iva_']['symbol_grp'], $this->field_config['dnc_porcentaje_iva_']['symbol_dec'], "0", "S", $this->field_config['dnc_porcentaje_iva_']['format_neg'], "", "", "-", $this->field_config['dnc_porcentaje_iva_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_valor_iva_ || (!empty($format_fields) && isset($format_fields['dnc_valor_iva_'])))
      {
          nmgp_Form_Num_Val($this->dnc_valor_iva_, $this->field_config['dnc_valor_iva_']['symbol_grp'], $this->field_config['dnc_valor_iva_']['symbol_dec'], "2", "S", $this->field_config['dnc_valor_iva_']['format_neg'], "", "", "-", $this->field_config['dnc_valor_iva_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_base_ice_ || (!empty($format_fields) && isset($format_fields['dnc_base_ice_'])))
      {
          nmgp_Form_Num_Val($this->dnc_base_ice_, $this->field_config['dnc_base_ice_']['symbol_grp'], $this->field_config['dnc_base_ice_']['symbol_dec'], "2", "S", $this->field_config['dnc_base_ice_']['format_neg'], "", "", "-", $this->field_config['dnc_base_ice_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_valor_ice_ || (!empty($format_fields) && isset($format_fields['dnc_valor_ice_'])))
      {
          nmgp_Form_Num_Val($this->dnc_valor_ice_, $this->field_config['dnc_valor_ice_']['symbol_grp'], $this->field_config['dnc_valor_ice_']['symbol_dec'], "2", "S", $this->field_config['dnc_valor_ice_']['format_neg'], "", "", "-", $this->field_config['dnc_valor_ice_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_base_irbpnr_ || (!empty($format_fields) && isset($format_fields['dnc_base_irbpnr_'])))
      {
          nmgp_Form_Num_Val($this->dnc_base_irbpnr_, $this->field_config['dnc_base_irbpnr_']['symbol_grp'], $this->field_config['dnc_base_irbpnr_']['symbol_dec'], "2", "S", $this->field_config['dnc_base_irbpnr_']['format_neg'], "", "", "-", $this->field_config['dnc_base_irbpnr_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_valor_irbpnr_ || (!empty($format_fields) && isset($format_fields['dnc_valor_irbpnr_'])))
      {
          nmgp_Form_Num_Val($this->dnc_valor_irbpnr_, $this->field_config['dnc_valor_irbpnr_']['symbol_grp'], $this->field_config['dnc_valor_irbpnr_']['symbol_dec'], "2", "S", $this->field_config['dnc_valor_irbpnr_']['format_neg'], "", "", "-", $this->field_config['dnc_valor_irbpnr_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_total_ || (!empty($format_fields) && isset($format_fields['dnc_total_'])))
      {
          nmgp_Form_Num_Val($this->dnc_total_, $this->field_config['dnc_total_']['symbol_grp'], $this->field_config['dnc_total_']['symbol_dec'], "2", "S", $this->field_config['dnc_total_']['format_neg'], "", "", "-", $this->field_config['dnc_total_']['symbol_fmt']) ; 
      }
      if ('' !== $this->dnc_nota_credito_ || (!empty($format_fields) && isset($format_fields['dnc_nota_credito_'])))
      {
          nmgp_Form_Num_Val($this->dnc_nota_credito_, $this->field_config['dnc_nota_credito_']['symbol_grp'], $this->field_config['dnc_nota_credito_']['symbol_dec'], "0", "S", $this->field_config['dnc_nota_credito_']['format_neg'], "", "", "-", $this->field_config['dnc_nota_credito_']['symbol_fmt']) ; 
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
          $this->ajax_return_values_all_vert();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['dnc_id_']['keyVal'] = form_del_detalle_nota_credito_compras_pack_protect_string($this->nmgp_dados_form['dnc_id_']);
          }
   } // ajax_return_values
   function ajax_return_values_all_vert()
   {
          if (isset($this->nmgp_refresh_fields) && isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row] = $this->NM_ajax_info['param'];
              if ((isset($this->Embutida_ronly) && $this->Embutida_ronly) || $this->NM_ajax_force_values)
              {
                  if (isset($this->NM_ajax_changed['dnc_id_']) && $this->NM_ajax_changed['dnc_id_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_id_'] = $this->dnc_id_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_factura_']) && $this->NM_ajax_changed['dnc_factura_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_factura_'] = $this->dnc_factura_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_empresa_']) && $this->NM_ajax_changed['dnc_empresa_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_empresa_'] = $this->dnc_empresa_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_producto_']) && $this->NM_ajax_changed['dnc_producto_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_producto_'] = $this->dnc_producto_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_descripcion_']) && $this->NM_ajax_changed['dnc_descripcion_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_descripcion_'] = $this->dnc_descripcion_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_cantidad_facturada_']) && $this->NM_ajax_changed['dnc_cantidad_facturada_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_cantidad_facturada_'] = $this->dnc_cantidad_facturada_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_cantidad_']) && $this->NM_ajax_changed['dnc_cantidad_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_cantidad_'] = $this->dnc_cantidad_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_precio_unitario_']) && $this->NM_ajax_changed['dnc_precio_unitario_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_precio_unitario_'] = $this->dnc_precio_unitario_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_descuento_']) && $this->NM_ajax_changed['dnc_descuento_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_descuento_'] = $this->dnc_descuento_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_subtotal_']) && $this->NM_ajax_changed['dnc_subtotal_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_subtotal_'] = $this->dnc_subtotal_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_base_iva_']) && $this->NM_ajax_changed['dnc_base_iva_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_base_iva_'] = $this->dnc_base_iva_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_porcentaje_iva_']) && $this->NM_ajax_changed['dnc_porcentaje_iva_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_porcentaje_iva_'] = $this->dnc_porcentaje_iva_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_valor_iva_']) && $this->NM_ajax_changed['dnc_valor_iva_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_valor_iva_'] = $this->dnc_valor_iva_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_base_ice_']) && $this->NM_ajax_changed['dnc_base_ice_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_base_ice_'] = $this->dnc_base_ice_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_porcentaje_ice_']) && $this->NM_ajax_changed['dnc_porcentaje_ice_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_porcentaje_ice_'] = $this->dnc_porcentaje_ice_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_valor_ice_']) && $this->NM_ajax_changed['dnc_valor_ice_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_valor_ice_'] = $this->dnc_valor_ice_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_base_irbpnr_']) && $this->NM_ajax_changed['dnc_base_irbpnr_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_base_irbpnr_'] = $this->dnc_base_irbpnr_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_porcentaje_irbpnr_']) && $this->NM_ajax_changed['dnc_porcentaje_irbpnr_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_porcentaje_irbpnr_'] = $this->dnc_porcentaje_irbpnr_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_valor_irbpnr_']) && $this->NM_ajax_changed['dnc_valor_irbpnr_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_valor_irbpnr_'] = $this->dnc_valor_irbpnr_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_total_']) && $this->NM_ajax_changed['dnc_total_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_total_'] = $this->dnc_total_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_estado_']) && $this->NM_ajax_changed['dnc_estado_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_estado_'] = $this->dnc_estado_;
                  }
                  if (isset($this->NM_ajax_changed['dnc_nota_credito_']) && $this->NM_ajax_changed['dnc_nota_credito_'])
                  {
                      $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_nota_credito_'] = $this->dnc_nota_credito_;
                  }
              }
          }
          if (isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_empresa_'] = $this->dnc_empresa_;
              $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_producto_'] = $this->dnc_producto_;
              $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_descripcion_'] = $this->dnc_descripcion_;
              $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_porcentaje_ice_'] = $this->dnc_porcentaje_ice_;
              $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_porcentaje_irbpnr_'] = $this->dnc_porcentaje_irbpnr_;
              $this->form_vert_form_del_detalle_nota_credito_compras[$this->nmgp_refresh_row]['dnc_estado_'] = $this->dnc_estado_;
          }
          $this->NM_ajax_info['rsSize']            = sizeof($this->form_vert_form_del_detalle_nota_credito_compras);
          $this->NM_ajax_info['buttonDisplayVert'] = array();
          foreach($this->form_vert_form_del_detalle_nota_credito_compras as $sc_seq_vert => $aRecData)
          {
              $this->loadRecordState($sc_seq_vert);
              if ('navigate_form' == $this->NM_ajax_opcao) {
                  $this->NM_ajax_info['buttonDisplayVert'][] = array(
                      'seq'      => $sc_seq_vert,
                      'gridView' => true,
                      'delete'   => $this->nmgp_botoes['delete'],
                      'update'   => $this->nmgp_botoes['update'],
                  );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_id_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_id_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_id_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_factura_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_factura_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_factura_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_empresa_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_empresa_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_empresa_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_producto_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_producto_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_producto_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              $this->dnc_producto_ = $aRecData['dnc_producto_'];
              $orig_dnc_producto_ = $this->dnc_producto_;
              $dnc_producto_      = $this->dnc_producto_;
              $this->dnc_producto_ = $dnc_producto_;
              $this->lookup_dnc_producto_($conteudo);
              $this->dnc_producto_ = $orig_dnc_producto_;
              $this->NM_ajax_info['fldList']['dnc_producto_' . $sc_seq_vert]['lookupCons'] = form_del_detalle_nota_credito_compras_pack_protect_string($conteudo);
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_descripcion_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_descripcion_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_descripcion_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_cantidad_facturada_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_cantidad_facturada_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_cantidad_facturada_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_cantidad_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_cantidad_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_cantidad_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_precio_unitario_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_precio_unitario_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_precio_unitario_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_descuento_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_descuento_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_descuento_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_subtotal_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_subtotal_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_subtotal_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_base_iva_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_base_iva_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_base_iva_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_porcentaje_iva_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_porcentaje_iva_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_porcentaje_iva_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_valor_iva_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_valor_iva_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_valor_iva_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_base_ice_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_base_ice_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_base_ice_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_porcentaje_ice_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_porcentaje_ice_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_porcentaje_ice_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_valor_ice_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_valor_ice_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_valor_ice_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_base_irbpnr_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_base_irbpnr_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_base_irbpnr_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_porcentaje_irbpnr_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_porcentaje_irbpnr_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_porcentaje_irbpnr_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_valor_irbpnr_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_valor_irbpnr_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_valor_irbpnr_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_total_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_total_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_total_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_estado_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_estado_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_estado_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dnc_nota_credito_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['dnc_nota_credito_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['upload_dir'][$fieldName][] = $newName;
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
  function nm_proc_onload_record($sc_seq_vert=0)
  {
          if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
          $_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'on';
if (!isset($this->sc_temp_var_nota_credito)) {$this->sc_temp_var_nota_credito = (isset($_SESSION['var_nota_credito'])) ? $_SESSION['var_nota_credito'] : "";}
  $check_sql = "SELECT nc_estado 
			  FROM del_nota_credito_compra
			  WHERE nc_numero=".$this->sc_temp_var_nota_credito;
 
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
    if($this->rs[0][0]<>'R'){
	 $this->NM_ajax_info['buttonDisplay']['new'] = $this->nmgp_botoes["new"] = 'off';;
	 $this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes["delete"] = 'off';;
	 $this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
	}
}
if (isset($this->sc_temp_var_nota_credito)) { $_SESSION['var_nota_credito'] = $this->sc_temp_var_nota_credito;}
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off'; 
          }
  }
  function nm_proc_onload($bFormat = true)
  {
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['Field_no_validate'] = array();
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
      $this->dnc_cantidad_facturada_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_cantidad_facturada_); 
      $this->dnc_cantidad_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_cantidad_); 
      $this->dnc_precio_unitario_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_precio_unitario_); 
      $this->dnc_descuento_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_descuento_); 
      $this->dnc_subtotal_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_subtotal_); 
      $this->dnc_base_iva_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_base_iva_); 
      $this->dnc_valor_iva_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_valor_iva_); 
      $this->dnc_base_ice_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_base_ice_); 
      $this->dnc_valor_ice_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_valor_ice_); 
      $this->dnc_base_irbpnr_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_base_irbpnr_); 
      $this->dnc_valor_irbpnr_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_valor_irbpnr_); 
      $this->dnc_total_ = str_replace($sc_parm1, $sc_parm2, $this->dnc_total_); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->dnc_cantidad_facturada_ = "'" . $this->dnc_cantidad_facturada_ . "'";
      $this->dnc_cantidad_ = "'" . $this->dnc_cantidad_ . "'";
      $this->dnc_precio_unitario_ = "'" . $this->dnc_precio_unitario_ . "'";
      $this->dnc_descuento_ = "'" . $this->dnc_descuento_ . "'";
      $this->dnc_subtotal_ = "'" . $this->dnc_subtotal_ . "'";
      $this->dnc_base_iva_ = "'" . $this->dnc_base_iva_ . "'";
      $this->dnc_valor_iva_ = "'" . $this->dnc_valor_iva_ . "'";
      $this->dnc_base_ice_ = "'" . $this->dnc_base_ice_ . "'";
      $this->dnc_valor_ice_ = "'" . $this->dnc_valor_ice_ . "'";
      $this->dnc_base_irbpnr_ = "'" . $this->dnc_base_irbpnr_ . "'";
      $this->dnc_valor_irbpnr_ = "'" . $this->dnc_valor_irbpnr_ . "'";
      $this->dnc_total_ = "'" . $this->dnc_total_ . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->dnc_cantidad_facturada_ = str_replace("'", "", $this->dnc_cantidad_facturada_); 
      $this->dnc_cantidad_ = str_replace("'", "", $this->dnc_cantidad_); 
      $this->dnc_precio_unitario_ = str_replace("'", "", $this->dnc_precio_unitario_); 
      $this->dnc_descuento_ = str_replace("'", "", $this->dnc_descuento_); 
      $this->dnc_subtotal_ = str_replace("'", "", $this->dnc_subtotal_); 
      $this->dnc_base_iva_ = str_replace("'", "", $this->dnc_base_iva_); 
      $this->dnc_valor_iva_ = str_replace("'", "", $this->dnc_valor_iva_); 
      $this->dnc_base_ice_ = str_replace("'", "", $this->dnc_base_ice_); 
      $this->dnc_valor_ice_ = str_replace("'", "", $this->dnc_valor_ice_); 
      $this->dnc_base_irbpnr_ = str_replace("'", "", $this->dnc_base_irbpnr_); 
      $this->dnc_valor_irbpnr_ = str_replace("'", "", $this->dnc_valor_irbpnr_); 
      $this->dnc_total_ = str_replace("'", "", $this->dnc_total_); 
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
      global $sc_seq_vert,  $nm_form_submit, $teste_validade, $sc_where;
 
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
          $this->NM_gera_log_old($sc_seq_vert);
      }
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if ($this->nmgp_opcao == "alterar")
      {
          $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert];
          if ($this->nmgp_dados_select['dnc_id_'] == $this->dnc_id_ &&
              $this->nmgp_dados_select['dnc_factura_'] == $this->dnc_factura_ &&
              $this->nmgp_dados_select['dnc_empresa_'] == $this->dnc_empresa_ &&
              $this->nmgp_dados_select['dnc_producto_'] == $this->dnc_producto_ &&
              $this->nmgp_dados_select['dnc_descripcion_'] == $this->dnc_descripcion_ &&
              $this->nmgp_dados_select['dnc_cantidad_facturada_'] == $this->dnc_cantidad_facturada_ &&
              $this->nmgp_dados_select['dnc_cantidad_'] == $this->dnc_cantidad_ &&
              $this->nmgp_dados_select['dnc_precio_unitario_'] == $this->dnc_precio_unitario_ &&
              $this->nmgp_dados_select['dnc_descuento_'] == $this->dnc_descuento_ &&
              $this->nmgp_dados_select['dnc_subtotal_'] == $this->dnc_subtotal_ &&
              $this->nmgp_dados_select['dnc_base_iva_'] == $this->dnc_base_iva_ &&
              $this->nmgp_dados_select['dnc_porcentaje_iva_'] == $this->dnc_porcentaje_iva_ &&
              $this->nmgp_dados_select['dnc_valor_iva_'] == $this->dnc_valor_iva_ &&
              $this->nmgp_dados_select['dnc_base_ice_'] == $this->dnc_base_ice_ &&
              $this->nmgp_dados_select['dnc_porcentaje_ice_'] == $this->dnc_porcentaje_ice_ &&
              $this->nmgp_dados_select['dnc_valor_ice_'] == $this->dnc_valor_ice_ &&
              $this->nmgp_dados_select['dnc_base_irbpnr_'] == $this->dnc_base_irbpnr_ &&
              $this->nmgp_dados_select['dnc_porcentaje_irbpnr_'] == $this->dnc_porcentaje_irbpnr_ &&
              $this->nmgp_dados_select['dnc_valor_irbpnr_'] == $this->dnc_valor_irbpnr_ &&
              $this->nmgp_dados_select['dnc_total_'] == $this->dnc_total_ &&
              $this->nmgp_dados_select['dnc_estado_'] == $this->dnc_estado_ &&
              $this->nmgp_dados_select['dnc_nota_credito_'] == $this->dnc_nota_credito_)
          { }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_id_'] = $this->dnc_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_factura_'] = $this->dnc_factura_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_empresa_'] = $this->dnc_empresa_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_producto_'] = $this->dnc_producto_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_descripcion_'] = $this->dnc_descripcion_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_cantidad_facturada_'] = $this->dnc_cantidad_facturada_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_cantidad_'] = $this->dnc_cantidad_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_precio_unitario_'] = $this->dnc_precio_unitario_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_descuento_'] = $this->dnc_descuento_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_subtotal_'] = $this->dnc_subtotal_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_base_iva_'] = $this->dnc_base_iva_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_porcentaje_iva_'] = $this->dnc_porcentaje_iva_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_valor_iva_'] = $this->dnc_valor_iva_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_base_ice_'] = $this->dnc_base_ice_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_porcentaje_ice_'] = $this->dnc_porcentaje_ice_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_valor_ice_'] = $this->dnc_valor_ice_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_base_irbpnr_'] = $this->dnc_base_irbpnr_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_porcentaje_irbpnr_'] = $this->dnc_porcentaje_irbpnr_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_valor_irbpnr_'] = $this->dnc_valor_irbpnr_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_total_'] = $this->dnc_total_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_estado_'] = $this->dnc_estado_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_nota_credito_'] = $this->dnc_nota_credito_;
          }
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
      $NM_val_form['dnc_id_'] = $this->dnc_id_;
      $NM_val_form['dnc_factura_'] = $this->dnc_factura_;
      $NM_val_form['dnc_empresa_'] = $this->dnc_empresa_;
      $NM_val_form['dnc_producto_'] = $this->dnc_producto_;
      $NM_val_form['dnc_descripcion_'] = $this->dnc_descripcion_;
      $NM_val_form['dnc_cantidad_facturada_'] = $this->dnc_cantidad_facturada_;
      $NM_val_form['dnc_cantidad_'] = $this->dnc_cantidad_;
      $NM_val_form['dnc_precio_unitario_'] = $this->dnc_precio_unitario_;
      $NM_val_form['dnc_descuento_'] = $this->dnc_descuento_;
      $NM_val_form['dnc_subtotal_'] = $this->dnc_subtotal_;
      $NM_val_form['dnc_base_iva_'] = $this->dnc_base_iva_;
      $NM_val_form['dnc_porcentaje_iva_'] = $this->dnc_porcentaje_iva_;
      $NM_val_form['dnc_valor_iva_'] = $this->dnc_valor_iva_;
      $NM_val_form['dnc_base_ice_'] = $this->dnc_base_ice_;
      $NM_val_form['dnc_porcentaje_ice_'] = $this->dnc_porcentaje_ice_;
      $NM_val_form['dnc_valor_ice_'] = $this->dnc_valor_ice_;
      $NM_val_form['dnc_base_irbpnr_'] = $this->dnc_base_irbpnr_;
      $NM_val_form['dnc_porcentaje_irbpnr_'] = $this->dnc_porcentaje_irbpnr_;
      $NM_val_form['dnc_valor_irbpnr_'] = $this->dnc_valor_irbpnr_;
      $NM_val_form['dnc_total_'] = $this->dnc_total_;
      $NM_val_form['dnc_estado_'] = $this->dnc_estado_;
      $NM_val_form['dnc_nota_credito_'] = $this->dnc_nota_credito_;
      if ($this->dnc_id_ === "" || is_null($this->dnc_id_))  
      { 
          $this->dnc_id_ = 0;
      } 
      if ($this->dnc_factura_ === "" || is_null($this->dnc_factura_))  
      { 
          $this->dnc_factura_ = 0;
          $this->sc_force_zero[] = 'dnc_factura_';
      } 
      if ($this->dnc_cantidad_facturada_ === "" || is_null($this->dnc_cantidad_facturada_))  
      { 
          $this->dnc_cantidad_facturada_ = 0;
          $this->sc_force_zero[] = 'dnc_cantidad_facturada_';
      } 
      if ($this->dnc_cantidad_ === "" || is_null($this->dnc_cantidad_))  
      { 
          $this->dnc_cantidad_ = 0;
          $this->sc_force_zero[] = 'dnc_cantidad_';
      } 
      if ($this->dnc_precio_unitario_ === "" || is_null($this->dnc_precio_unitario_))  
      { 
          $this->dnc_precio_unitario_ = 0;
          $this->sc_force_zero[] = 'dnc_precio_unitario_';
      } 
      if ($this->dnc_subtotal_ === "" || is_null($this->dnc_subtotal_))  
      { 
          $this->dnc_subtotal_ = 0;
          $this->sc_force_zero[] = 'dnc_subtotal_';
      } 
      if ($this->dnc_descuento_ === "" || is_null($this->dnc_descuento_))  
      { 
          $this->dnc_descuento_ = 0;
          $this->sc_force_zero[] = 'dnc_descuento_';
      } 
      if ($this->dnc_base_iva_ === "" || is_null($this->dnc_base_iva_))  
      { 
          $this->dnc_base_iva_ = 0;
          $this->sc_force_zero[] = 'dnc_base_iva_';
      } 
      if ($this->dnc_porcentaje_iva_ === "" || is_null($this->dnc_porcentaje_iva_))  
      { 
          $this->dnc_porcentaje_iva_ = 0;
          $this->sc_force_zero[] = 'dnc_porcentaje_iva_';
      } 
      if ($this->dnc_valor_iva_ === "" || is_null($this->dnc_valor_iva_))  
      { 
          $this->dnc_valor_iva_ = 0;
          $this->sc_force_zero[] = 'dnc_valor_iva_';
      } 
      if ($this->dnc_base_ice_ === "" || is_null($this->dnc_base_ice_))  
      { 
          $this->dnc_base_ice_ = 0;
          $this->sc_force_zero[] = 'dnc_base_ice_';
      } 
      if ($this->dnc_valor_ice_ === "" || is_null($this->dnc_valor_ice_))  
      { 
          $this->dnc_valor_ice_ = 0;
          $this->sc_force_zero[] = 'dnc_valor_ice_';
      } 
      if ($this->dnc_base_irbpnr_ === "" || is_null($this->dnc_base_irbpnr_))  
      { 
          $this->dnc_base_irbpnr_ = 0;
          $this->sc_force_zero[] = 'dnc_base_irbpnr_';
      } 
      if ($this->dnc_valor_irbpnr_ === "" || is_null($this->dnc_valor_irbpnr_))  
      { 
          $this->dnc_valor_irbpnr_ = 0;
          $this->sc_force_zero[] = 'dnc_valor_irbpnr_';
      } 
      if ($this->dnc_total_ === "" || is_null($this->dnc_total_))  
      { 
          $this->dnc_total_ = 0;
          $this->sc_force_zero[] = 'dnc_total_';
      } 
      if ($this->dnc_nota_credito_ === "" || is_null($this->dnc_nota_credito_))  
      { 
          $this->dnc_nota_credito_ = 0;
          $this->sc_force_zero[] = 'dnc_nota_credito_';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->dnc_empresa__before_qstr = $this->dnc_empresa_;
          $this->dnc_empresa_ = substr($this->Db->qstr($this->dnc_empresa_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dnc_empresa_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dnc_empresa_);
          }
          if ($this->dnc_empresa_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dnc_empresa_ = "null"; 
              $NM_val_null[] = "dnc_empresa_";
          } 
          $this->dnc_producto__before_qstr = $this->dnc_producto_;
          $this->dnc_producto_ = substr($this->Db->qstr($this->dnc_producto_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dnc_producto_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dnc_producto_);
          }
          if ($this->dnc_producto_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dnc_producto_ = "null"; 
              $NM_val_null[] = "dnc_producto_";
          } 
          $this->dnc_descripcion__before_qstr = $this->dnc_descripcion_;
          $this->dnc_descripcion_ = substr($this->Db->qstr($this->dnc_descripcion_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dnc_descripcion_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dnc_descripcion_);
          }
          if ($this->dnc_descripcion_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dnc_descripcion_ = "null"; 
              $NM_val_null[] = "dnc_descripcion_";
          } 
          $this->dnc_porcentaje_ice__before_qstr = $this->dnc_porcentaje_ice_;
          $this->dnc_porcentaje_ice_ = substr($this->Db->qstr($this->dnc_porcentaje_ice_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dnc_porcentaje_ice_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dnc_porcentaje_ice_);
          }
          if ($this->dnc_porcentaje_ice_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dnc_porcentaje_ice_ = "null"; 
              $NM_val_null[] = "dnc_porcentaje_ice_";
          } 
          $this->dnc_porcentaje_irbpnr__before_qstr = $this->dnc_porcentaje_irbpnr_;
          $this->dnc_porcentaje_irbpnr_ = substr($this->Db->qstr($this->dnc_porcentaje_irbpnr_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dnc_porcentaje_irbpnr_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dnc_porcentaje_irbpnr_);
          }
          if ($this->dnc_porcentaje_irbpnr_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dnc_porcentaje_irbpnr_ = "null"; 
              $NM_val_null[] = "dnc_porcentaje_irbpnr_";
          } 
          $this->dnc_estado__before_qstr = $this->dnc_estado_;
          $this->dnc_estado_ = substr($this->Db->qstr($this->dnc_estado_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dnc_estado_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dnc_estado_);
          }
          if ($this->dnc_estado_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dnc_estado_ = "null"; 
              $NM_val_null[] = "dnc_estado_";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_del_detalle_nota_credito_compras_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_nfnd']; 
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
                  $SC_fields_update[] = "dnc_factura = $this->dnc_factura_, dnc_empresa = '$this->dnc_empresa_', dnc_producto = '$this->dnc_producto_', dnc_descripcion = '$this->dnc_descripcion_', dnc_cantidad_facturada = $this->dnc_cantidad_facturada_, dnc_cantidad = $this->dnc_cantidad_, dnc_precio_unitario = $this->dnc_precio_unitario_, dnc_subtotal = $this->dnc_subtotal_, dnc_descuento = $this->dnc_descuento_, dnc_base_iva = $this->dnc_base_iva_, dnc_porcentaje_iva = $this->dnc_porcentaje_iva_, dnc_valor_iva = $this->dnc_valor_iva_, dnc_base_ice = $this->dnc_base_ice_, dnc_porcentaje_ice = '$this->dnc_porcentaje_ice_', dnc_valor_ice = $this->dnc_valor_ice_, dnc_base_irbpnr = $this->dnc_base_irbpnr_, dnc_porcentaje_irbpnr = '$this->dnc_porcentaje_irbpnr_', dnc_valor_irbpnr = $this->dnc_valor_irbpnr_, dnc_total = $this->dnc_total_, dnc_estado = '$this->dnc_estado_', dnc_nota_credito = $this->dnc_nota_credito_"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dnc_factura = $this->dnc_factura_, dnc_empresa = '$this->dnc_empresa_', dnc_producto = '$this->dnc_producto_', dnc_descripcion = '$this->dnc_descripcion_', dnc_cantidad_facturada = $this->dnc_cantidad_facturada_, dnc_cantidad = $this->dnc_cantidad_, dnc_precio_unitario = $this->dnc_precio_unitario_, dnc_subtotal = $this->dnc_subtotal_, dnc_descuento = $this->dnc_descuento_, dnc_base_iva = $this->dnc_base_iva_, dnc_porcentaje_iva = $this->dnc_porcentaje_iva_, dnc_valor_iva = $this->dnc_valor_iva_, dnc_base_ice = $this->dnc_base_ice_, dnc_porcentaje_ice = '$this->dnc_porcentaje_ice_', dnc_valor_ice = $this->dnc_valor_ice_, dnc_base_irbpnr = $this->dnc_base_irbpnr_, dnc_porcentaje_irbpnr = '$this->dnc_porcentaje_irbpnr_', dnc_valor_irbpnr = $this->dnc_valor_irbpnr_, dnc_total = $this->dnc_total_, dnc_estado = '$this->dnc_estado_', dnc_nota_credito = $this->dnc_nota_credito_"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dnc_factura = $this->dnc_factura_, dnc_empresa = '$this->dnc_empresa_', dnc_producto = '$this->dnc_producto_', dnc_descripcion = '$this->dnc_descripcion_', dnc_cantidad_facturada = $this->dnc_cantidad_facturada_, dnc_cantidad = $this->dnc_cantidad_, dnc_precio_unitario = $this->dnc_precio_unitario_, dnc_subtotal = $this->dnc_subtotal_, dnc_descuento = $this->dnc_descuento_, dnc_base_iva = $this->dnc_base_iva_, dnc_porcentaje_iva = $this->dnc_porcentaje_iva_, dnc_valor_iva = $this->dnc_valor_iva_, dnc_base_ice = $this->dnc_base_ice_, dnc_porcentaje_ice = '$this->dnc_porcentaje_ice_', dnc_valor_ice = $this->dnc_valor_ice_, dnc_base_irbpnr = $this->dnc_base_irbpnr_, dnc_porcentaje_irbpnr = '$this->dnc_porcentaje_irbpnr_', dnc_valor_irbpnr = $this->dnc_valor_irbpnr_, dnc_total = $this->dnc_total_, dnc_estado = '$this->dnc_estado_', dnc_nota_credito = $this->dnc_nota_credito_"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dnc_factura = $this->dnc_factura_, dnc_empresa = '$this->dnc_empresa_', dnc_producto = '$this->dnc_producto_', dnc_descripcion = '$this->dnc_descripcion_', dnc_cantidad_facturada = $this->dnc_cantidad_facturada_, dnc_cantidad = $this->dnc_cantidad_, dnc_precio_unitario = $this->dnc_precio_unitario_, dnc_subtotal = $this->dnc_subtotal_, dnc_descuento = $this->dnc_descuento_, dnc_base_iva = $this->dnc_base_iva_, dnc_porcentaje_iva = $this->dnc_porcentaje_iva_, dnc_valor_iva = $this->dnc_valor_iva_, dnc_base_ice = $this->dnc_base_ice_, dnc_porcentaje_ice = '$this->dnc_porcentaje_ice_', dnc_valor_ice = $this->dnc_valor_ice_, dnc_base_irbpnr = $this->dnc_base_irbpnr_, dnc_porcentaje_irbpnr = '$this->dnc_porcentaje_irbpnr_', dnc_valor_irbpnr = $this->dnc_valor_irbpnr_, dnc_total = $this->dnc_total_, dnc_estado = '$this->dnc_estado_', dnc_nota_credito = $this->dnc_nota_credito_"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dnc_factura = $this->dnc_factura_, dnc_empresa = '$this->dnc_empresa_', dnc_producto = '$this->dnc_producto_', dnc_descripcion = '$this->dnc_descripcion_', dnc_cantidad_facturada = $this->dnc_cantidad_facturada_, dnc_cantidad = $this->dnc_cantidad_, dnc_precio_unitario = $this->dnc_precio_unitario_, dnc_subtotal = $this->dnc_subtotal_, dnc_descuento = $this->dnc_descuento_, dnc_base_iva = $this->dnc_base_iva_, dnc_porcentaje_iva = $this->dnc_porcentaje_iva_, dnc_valor_iva = $this->dnc_valor_iva_, dnc_base_ice = $this->dnc_base_ice_, dnc_porcentaje_ice = '$this->dnc_porcentaje_ice_', dnc_valor_ice = $this->dnc_valor_ice_, dnc_base_irbpnr = $this->dnc_base_irbpnr_, dnc_porcentaje_irbpnr = '$this->dnc_porcentaje_irbpnr_', dnc_valor_irbpnr = $this->dnc_valor_irbpnr_, dnc_total = $this->dnc_total_, dnc_estado = '$this->dnc_estado_', dnc_nota_credito = $this->dnc_nota_credito_"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dnc_factura = $this->dnc_factura_, dnc_empresa = '$this->dnc_empresa_', dnc_producto = '$this->dnc_producto_', dnc_descripcion = '$this->dnc_descripcion_', dnc_cantidad_facturada = $this->dnc_cantidad_facturada_, dnc_cantidad = $this->dnc_cantidad_, dnc_precio_unitario = $this->dnc_precio_unitario_, dnc_subtotal = $this->dnc_subtotal_, dnc_descuento = $this->dnc_descuento_, dnc_base_iva = $this->dnc_base_iva_, dnc_porcentaje_iva = $this->dnc_porcentaje_iva_, dnc_valor_iva = $this->dnc_valor_iva_, dnc_base_ice = $this->dnc_base_ice_, dnc_porcentaje_ice = '$this->dnc_porcentaje_ice_', dnc_valor_ice = $this->dnc_valor_ice_, dnc_base_irbpnr = $this->dnc_base_irbpnr_, dnc_porcentaje_irbpnr = '$this->dnc_porcentaje_irbpnr_', dnc_valor_irbpnr = $this->dnc_valor_irbpnr_, dnc_total = $this->dnc_total_, dnc_estado = '$this->dnc_estado_', dnc_nota_credito = $this->dnc_nota_credito_"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dnc_factura = $this->dnc_factura_, dnc_empresa = '$this->dnc_empresa_', dnc_producto = '$this->dnc_producto_', dnc_descripcion = '$this->dnc_descripcion_', dnc_cantidad_facturada = $this->dnc_cantidad_facturada_, dnc_cantidad = $this->dnc_cantidad_, dnc_precio_unitario = $this->dnc_precio_unitario_, dnc_subtotal = $this->dnc_subtotal_, dnc_descuento = $this->dnc_descuento_, dnc_base_iva = $this->dnc_base_iva_, dnc_porcentaje_iva = $this->dnc_porcentaje_iva_, dnc_valor_iva = $this->dnc_valor_iva_, dnc_base_ice = $this->dnc_base_ice_, dnc_porcentaje_ice = '$this->dnc_porcentaje_ice_', dnc_valor_ice = $this->dnc_valor_ice_, dnc_base_irbpnr = $this->dnc_base_irbpnr_, dnc_porcentaje_irbpnr = '$this->dnc_porcentaje_irbpnr_', dnc_valor_irbpnr = $this->dnc_valor_irbpnr_, dnc_total = $this->dnc_total_, dnc_estado = '$this->dnc_estado_', dnc_nota_credito = $this->dnc_nota_credito_"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE dnc_id = $this->dnc_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE dnc_id = $this->dnc_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE dnc_id = $this->dnc_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE dnc_id = $this->dnc_id_ ";  
              }  
              else  
              {
                  $comando .= " WHERE dnc_id = $this->dnc_id_ ";  
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
                                  form_del_detalle_nota_credito_compras_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->dnc_empresa_ = $this->dnc_empresa__before_qstr;
              $this->dnc_producto_ = $this->dnc_producto__before_qstr;
              $this->dnc_descripcion_ = $this->dnc_descripcion__before_qstr;
              $this->dnc_porcentaje_ice_ = $this->dnc_porcentaje_ice__before_qstr;
              $this->dnc_porcentaje_irbpnr_ = $this->dnc_porcentaje_irbpnr__before_qstr;
              $this->dnc_estado_ = $this->dnc_estado__before_qstr;
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
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }

              $this->sc_teve_alt = true; 
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_id_'])) { $this->dnc_id_ = $NM_val_form['dnc_id_']; }
              elseif (isset($this->dnc_id_)) { $this->nm_limpa_alfa($this->dnc_id_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_factura_'])) { $this->dnc_factura_ = $NM_val_form['dnc_factura_']; }
              elseif (isset($this->dnc_factura_)) { $this->nm_limpa_alfa($this->dnc_factura_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_empresa_'])) { $this->dnc_empresa_ = $NM_val_form['dnc_empresa_']; }
              elseif (isset($this->dnc_empresa_)) { $this->nm_limpa_alfa($this->dnc_empresa_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_producto_'])) { $this->dnc_producto_ = $NM_val_form['dnc_producto_']; }
              elseif (isset($this->dnc_producto_)) { $this->nm_limpa_alfa($this->dnc_producto_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_descripcion_'])) { $this->dnc_descripcion_ = $NM_val_form['dnc_descripcion_']; }
              elseif (isset($this->dnc_descripcion_)) { $this->nm_limpa_alfa($this->dnc_descripcion_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_cantidad_facturada_'])) { $this->dnc_cantidad_facturada_ = $NM_val_form['dnc_cantidad_facturada_']; }
              elseif (isset($this->dnc_cantidad_facturada_)) { $this->nm_limpa_alfa($this->dnc_cantidad_facturada_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_cantidad_'])) { $this->dnc_cantidad_ = $NM_val_form['dnc_cantidad_']; }
              elseif (isset($this->dnc_cantidad_)) { $this->nm_limpa_alfa($this->dnc_cantidad_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_precio_unitario_'])) { $this->dnc_precio_unitario_ = $NM_val_form['dnc_precio_unitario_']; }
              elseif (isset($this->dnc_precio_unitario_)) { $this->nm_limpa_alfa($this->dnc_precio_unitario_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_subtotal_'])) { $this->dnc_subtotal_ = $NM_val_form['dnc_subtotal_']; }
              elseif (isset($this->dnc_subtotal_)) { $this->nm_limpa_alfa($this->dnc_subtotal_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_descuento_'])) { $this->dnc_descuento_ = $NM_val_form['dnc_descuento_']; }
              elseif (isset($this->dnc_descuento_)) { $this->nm_limpa_alfa($this->dnc_descuento_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_base_iva_'])) { $this->dnc_base_iva_ = $NM_val_form['dnc_base_iva_']; }
              elseif (isset($this->dnc_base_iva_)) { $this->nm_limpa_alfa($this->dnc_base_iva_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_porcentaje_iva_'])) { $this->dnc_porcentaje_iva_ = $NM_val_form['dnc_porcentaje_iva_']; }
              elseif (isset($this->dnc_porcentaje_iva_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_iva_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_valor_iva_'])) { $this->dnc_valor_iva_ = $NM_val_form['dnc_valor_iva_']; }
              elseif (isset($this->dnc_valor_iva_)) { $this->nm_limpa_alfa($this->dnc_valor_iva_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_base_ice_'])) { $this->dnc_base_ice_ = $NM_val_form['dnc_base_ice_']; }
              elseif (isset($this->dnc_base_ice_)) { $this->nm_limpa_alfa($this->dnc_base_ice_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_porcentaje_ice_'])) { $this->dnc_porcentaje_ice_ = $NM_val_form['dnc_porcentaje_ice_']; }
              elseif (isset($this->dnc_porcentaje_ice_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_ice_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_valor_ice_'])) { $this->dnc_valor_ice_ = $NM_val_form['dnc_valor_ice_']; }
              elseif (isset($this->dnc_valor_ice_)) { $this->nm_limpa_alfa($this->dnc_valor_ice_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_base_irbpnr_'])) { $this->dnc_base_irbpnr_ = $NM_val_form['dnc_base_irbpnr_']; }
              elseif (isset($this->dnc_base_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_base_irbpnr_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_porcentaje_irbpnr_'])) { $this->dnc_porcentaje_irbpnr_ = $NM_val_form['dnc_porcentaje_irbpnr_']; }
              elseif (isset($this->dnc_porcentaje_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_irbpnr_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_valor_irbpnr_'])) { $this->dnc_valor_irbpnr_ = $NM_val_form['dnc_valor_irbpnr_']; }
              elseif (isset($this->dnc_valor_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_valor_irbpnr_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_total_'])) { $this->dnc_total_ = $NM_val_form['dnc_total_']; }
              elseif (isset($this->dnc_total_)) { $this->nm_limpa_alfa($this->dnc_total_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_estado_'])) { $this->dnc_estado_ = $NM_val_form['dnc_estado_']; }
              elseif (isset($this->dnc_estado_)) { $this->nm_limpa_alfa($this->dnc_estado_); }
              if     (isset($NM_val_form) && isset($NM_val_form['dnc_nota_credito_'])) { $this->dnc_nota_credito_ = $NM_val_form['dnc_nota_credito_']; }
              elseif (isset($this->dnc_nota_credito_)) { $this->nm_limpa_alfa($this->dnc_nota_credito_); }
              $this->nm_proc_onload_record($this->nmgp_refresh_row);

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('dnc_id_', 'dnc_factura_', 'dnc_empresa_', 'dnc_producto_', 'dnc_descripcion_', 'dnc_cantidad_facturada_', 'dnc_cantidad_', 'dnc_precio_unitario_', 'dnc_descuento_', 'dnc_subtotal_', 'dnc_base_iva_', 'dnc_porcentaje_iva_', 'dnc_valor_iva_', 'dnc_base_ice_', 'dnc_porcentaje_ice_', 'dnc_valor_ice_', 'dnc_base_irbpnr_', 'dnc_porcentaje_irbpnr_', 'dnc_valor_irbpnr_', 'dnc_total_', 'dnc_estado_', 'dnc_nota_credito_'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if (isset($this->Embutida_ronly) && $this->Embutida_ronly)
              {

                  $this->NM_ajax_info['readOnly']['dnc_id_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_factura_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_empresa_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_producto_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_descripcion_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_cantidad_facturada_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_cantidad_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_precio_unitario_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_descuento_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_subtotal_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_base_iva_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_porcentaje_iva_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_valor_iva_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_base_ice_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_porcentaje_ice_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_valor_ice_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_base_irbpnr_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_porcentaje_irbpnr_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_valor_irbpnr_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_total_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_estado_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['dnc_nota_credito_' . $this->nmgp_refresh_row] = 'on';


                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_pkey']; 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito) VALUES ($this->dnc_id_, $this->dnc_factura_, '$this->dnc_empresa_', '$this->dnc_producto_', '$this->dnc_descripcion_', $this->dnc_cantidad_facturada_, $this->dnc_cantidad_, $this->dnc_precio_unitario_, $this->dnc_subtotal_, $this->dnc_descuento_, $this->dnc_base_iva_, $this->dnc_porcentaje_iva_, $this->dnc_valor_iva_, $this->dnc_base_ice_, '$this->dnc_porcentaje_ice_', $this->dnc_valor_ice_, $this->dnc_base_irbpnr_, '$this->dnc_porcentaje_irbpnr_', $this->dnc_valor_irbpnr_, $this->dnc_total_, '$this->dnc_estado_', $this->dnc_nota_credito_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito) VALUES (" . $NM_seq_auto . "$this->dnc_id_, $this->dnc_factura_, '$this->dnc_empresa_', '$this->dnc_producto_', '$this->dnc_descripcion_', $this->dnc_cantidad_facturada_, $this->dnc_cantidad_, $this->dnc_precio_unitario_, $this->dnc_subtotal_, $this->dnc_descuento_, $this->dnc_base_iva_, $this->dnc_porcentaje_iva_, $this->dnc_valor_iva_, $this->dnc_base_ice_, '$this->dnc_porcentaje_ice_', $this->dnc_valor_ice_, $this->dnc_base_irbpnr_, '$this->dnc_porcentaje_irbpnr_', $this->dnc_valor_irbpnr_, $this->dnc_total_, '$this->dnc_estado_', $this->dnc_nota_credito_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito) VALUES (" . $NM_seq_auto . "$this->dnc_id_, $this->dnc_factura_, '$this->dnc_empresa_', '$this->dnc_producto_', '$this->dnc_descripcion_', $this->dnc_cantidad_facturada_, $this->dnc_cantidad_, $this->dnc_precio_unitario_, $this->dnc_subtotal_, $this->dnc_descuento_, $this->dnc_base_iva_, $this->dnc_porcentaje_iva_, $this->dnc_valor_iva_, $this->dnc_base_ice_, '$this->dnc_porcentaje_ice_', $this->dnc_valor_ice_, $this->dnc_base_irbpnr_, '$this->dnc_porcentaje_irbpnr_', $this->dnc_valor_irbpnr_, $this->dnc_total_, '$this->dnc_estado_', $this->dnc_nota_credito_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito) VALUES (" . $NM_seq_auto . "$this->dnc_id_, $this->dnc_factura_, '$this->dnc_empresa_', '$this->dnc_producto_', '$this->dnc_descripcion_', $this->dnc_cantidad_facturada_, $this->dnc_cantidad_, $this->dnc_precio_unitario_, $this->dnc_subtotal_, $this->dnc_descuento_, $this->dnc_base_iva_, $this->dnc_porcentaje_iva_, $this->dnc_valor_iva_, $this->dnc_base_ice_, '$this->dnc_porcentaje_ice_', $this->dnc_valor_ice_, $this->dnc_base_irbpnr_, '$this->dnc_porcentaje_irbpnr_', $this->dnc_valor_irbpnr_, $this->dnc_total_, '$this->dnc_estado_', $this->dnc_nota_credito_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito) VALUES (" . $NM_seq_auto . "$this->dnc_id_, $this->dnc_factura_, '$this->dnc_empresa_', '$this->dnc_producto_', '$this->dnc_descripcion_', $this->dnc_cantidad_facturada_, $this->dnc_cantidad_, $this->dnc_precio_unitario_, $this->dnc_subtotal_, $this->dnc_descuento_, $this->dnc_base_iva_, $this->dnc_porcentaje_iva_, $this->dnc_valor_iva_, $this->dnc_base_ice_, '$this->dnc_porcentaje_ice_', $this->dnc_valor_ice_, $this->dnc_base_irbpnr_, '$this->dnc_porcentaje_irbpnr_', $this->dnc_valor_irbpnr_, $this->dnc_total_, '$this->dnc_estado_', $this->dnc_nota_credito_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito) VALUES (" . $NM_seq_auto . "$this->dnc_id_, $this->dnc_factura_, '$this->dnc_empresa_', '$this->dnc_producto_', '$this->dnc_descripcion_', $this->dnc_cantidad_facturada_, $this->dnc_cantidad_, $this->dnc_precio_unitario_, $this->dnc_subtotal_, $this->dnc_descuento_, $this->dnc_base_iva_, $this->dnc_porcentaje_iva_, $this->dnc_valor_iva_, $this->dnc_base_ice_, '$this->dnc_porcentaje_ice_', $this->dnc_valor_ice_, $this->dnc_base_irbpnr_, '$this->dnc_porcentaje_irbpnr_', $this->dnc_valor_irbpnr_, $this->dnc_total_, '$this->dnc_estado_', $this->dnc_nota_credito_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito) VALUES (" . $NM_seq_auto . "$this->dnc_id_, $this->dnc_factura_, '$this->dnc_empresa_', '$this->dnc_producto_', '$this->dnc_descripcion_', $this->dnc_cantidad_facturada_, $this->dnc_cantidad_, $this->dnc_precio_unitario_, $this->dnc_subtotal_, $this->dnc_descuento_, $this->dnc_base_iva_, $this->dnc_porcentaje_iva_, $this->dnc_valor_iva_, $this->dnc_base_ice_, '$this->dnc_porcentaje_ice_', $this->dnc_valor_ice_, $this->dnc_base_irbpnr_, '$this->dnc_porcentaje_irbpnr_', $this->dnc_valor_irbpnr_, $this->dnc_total_, '$this->dnc_estado_', $this->dnc_nota_credito_)"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito) VALUES (" . $NM_seq_auto . "$this->dnc_id_, $this->dnc_factura_, '$this->dnc_empresa_', '$this->dnc_producto_', '$this->dnc_descripcion_', $this->dnc_cantidad_facturada_, $this->dnc_cantidad_, $this->dnc_precio_unitario_, $this->dnc_subtotal_, $this->dnc_descuento_, $this->dnc_base_iva_, $this->dnc_porcentaje_iva_, $this->dnc_valor_iva_, $this->dnc_base_ice_, '$this->dnc_porcentaje_ice_', $this->dnc_valor_ice_, $this->dnc_base_irbpnr_, '$this->dnc_porcentaje_irbpnr_', $this->dnc_valor_irbpnr_, $this->dnc_total_, '$this->dnc_estado_', $this->dnc_nota_credito_)"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito) VALUES (" . $NM_seq_auto . "$this->dnc_id_, $this->dnc_factura_, '$this->dnc_empresa_', '$this->dnc_producto_', '$this->dnc_descripcion_', $this->dnc_cantidad_facturada_, $this->dnc_cantidad_, $this->dnc_precio_unitario_, $this->dnc_subtotal_, $this->dnc_descuento_, $this->dnc_base_iva_, $this->dnc_porcentaje_iva_, $this->dnc_valor_iva_, $this->dnc_base_ice_, '$this->dnc_porcentaje_ice_', $this->dnc_valor_ice_, $this->dnc_base_irbpnr_, '$this->dnc_porcentaje_irbpnr_', $this->dnc_valor_irbpnr_, $this->dnc_total_, '$this->dnc_estado_', $this->dnc_nota_credito_)"; 
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
                              form_del_detalle_nota_credito_compras_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->dnc_empresa_ = $this->dnc_empresa__before_qstr;
              $this->dnc_producto_ = $this->dnc_producto__before_qstr;
              $this->dnc_descripcion_ = $this->dnc_descripcion__before_qstr;
              $this->dnc_porcentaje_ice_ = $this->dnc_porcentaje_ice__before_qstr;
              $this->dnc_porcentaje_irbpnr_ = $this->dnc_porcentaje_irbpnr__before_qstr;
              $this->dnc_estado_ = $this->dnc_estado__before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['db_changed'] = true;

              $this->sc_evento = "insert"; 
              $this->dnc_empresa_ = $this->dnc_empresa__before_qstr;
              $this->dnc_producto_ = $this->dnc_producto__before_qstr;
              $this->dnc_descripcion_ = $this->dnc_descripcion__before_qstr;
              $this->dnc_porcentaje_ice_ = $this->dnc_porcentaje_ice__before_qstr;
              $this->dnc_porcentaje_irbpnr_ = $this->dnc_porcentaje_irbpnr__before_qstr;
              $this->dnc_estado_ = $this->dnc_estado__before_qstr;
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_qtd']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_I_E']++; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_incl = true; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_id_'] = $this->dnc_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_factura_'] = $this->dnc_factura_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_empresa_'] = $this->dnc_empresa_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_producto_'] = $this->dnc_producto_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_descripcion_'] = $this->dnc_descripcion_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_cantidad_facturada_'] = $this->dnc_cantidad_facturada_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_cantidad_'] = $this->dnc_cantidad_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_precio_unitario_'] = $this->dnc_precio_unitario_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_descuento_'] = $this->dnc_descuento_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_subtotal_'] = $this->dnc_subtotal_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_base_iva_'] = $this->dnc_base_iva_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_porcentaje_iva_'] = $this->dnc_porcentaje_iva_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_valor_iva_'] = $this->dnc_valor_iva_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_base_ice_'] = $this->dnc_base_ice_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_porcentaje_ice_'] = $this->dnc_porcentaje_ice_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_valor_ice_'] = $this->dnc_valor_ice_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_base_irbpnr_'] = $this->dnc_base_irbpnr_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_porcentaje_irbpnr_'] = $this->dnc_porcentaje_irbpnr_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_valor_irbpnr_'] = $this->dnc_valor_irbpnr_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_total_'] = $this->dnc_total_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_estado_'] = $this->dnc_estado_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert]['dnc_nota_credito_'] = $this->dnc_nota_credito_;
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
              if (isset($this->dnc_id_)) { $this->nm_limpa_alfa($this->dnc_id_); }
              if (isset($this->dnc_factura_)) { $this->nm_limpa_alfa($this->dnc_factura_); }
              if (isset($this->dnc_empresa_)) { $this->nm_limpa_alfa($this->dnc_empresa_); }
              if (isset($this->dnc_producto_)) { $this->nm_limpa_alfa($this->dnc_producto_); }
              if (isset($this->dnc_descripcion_)) { $this->nm_limpa_alfa($this->dnc_descripcion_); }
              if (isset($this->dnc_cantidad_facturada_)) { $this->nm_limpa_alfa($this->dnc_cantidad_facturada_); }
              if (isset($this->dnc_cantidad_)) { $this->nm_limpa_alfa($this->dnc_cantidad_); }
              if (isset($this->dnc_precio_unitario_)) { $this->nm_limpa_alfa($this->dnc_precio_unitario_); }
              if (isset($this->dnc_subtotal_)) { $this->nm_limpa_alfa($this->dnc_subtotal_); }
              if (isset($this->dnc_descuento_)) { $this->nm_limpa_alfa($this->dnc_descuento_); }
              if (isset($this->dnc_base_iva_)) { $this->nm_limpa_alfa($this->dnc_base_iva_); }
              if (isset($this->dnc_porcentaje_iva_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_iva_); }
              if (isset($this->dnc_valor_iva_)) { $this->nm_limpa_alfa($this->dnc_valor_iva_); }
              if (isset($this->dnc_base_ice_)) { $this->nm_limpa_alfa($this->dnc_base_ice_); }
              if (isset($this->dnc_porcentaje_ice_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_ice_); }
              if (isset($this->dnc_valor_ice_)) { $this->nm_limpa_alfa($this->dnc_valor_ice_); }
              if (isset($this->dnc_base_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_base_irbpnr_); }
              if (isset($this->dnc_porcentaje_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_porcentaje_irbpnr_); }
              if (isset($this->dnc_valor_irbpnr_)) { $this->nm_limpa_alfa($this->dnc_valor_irbpnr_); }
              if (isset($this->dnc_total_)) { $this->nm_limpa_alfa($this->dnc_total_); }
              if (isset($this->dnc_estado_)) { $this->nm_limpa_alfa($this->dnc_estado_); }
              if (isset($this->dnc_nota_credito_)) { $this->nm_limpa_alfa($this->dnc_nota_credito_); }
              if (isset($this->Embutida_form) && $this->Embutida_form)
              {
                  $this->nm_guardar_campos();
                  $this->nm_proc_onload_record($this->nmgp_refresh_row);
                  $this->nm_formatar_campos();

                  $tmpLabel_dnc_id_ = $this->dnc_id_;
                  $this->NM_ajax_info['fldList']['dnc_id_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_id_)));
                  $this->NM_ajax_info['fldList']['dnc_id_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_id_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_factura_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_factura_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_factura_)));
                  $this->NM_ajax_info['fldList']['dnc_factura_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_factura_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_factura_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_factura_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_factura_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_factura_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_empresa_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_empresa_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_empresa_)));
                  $this->NM_ajax_info['fldList']['dnc_empresa_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_empresa_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_empresa_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_empresa_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_empresa_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_empresa_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $orig_dnc_producto_ = $this->dnc_producto_;
                  $dnc_producto_      = $this->dnc_producto_;
                  $this->dnc_producto_ = $dnc_producto_;
                  $this->lookup_dnc_producto_($conteudo);
                  $this->dnc_producto_ = $orig_dnc_producto_;
                  $this->NM_ajax_info['fldList']['dnc_producto_' . $this->nmgp_refresh_row]['lookupCons'] = form_del_detalle_nota_credito_compras_pack_protect_string($conteudo);
                  $tmpLabel_dnc_producto_ = $this->dnc_producto_;
                  $this->NM_ajax_info['fldList']['dnc_producto_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['dnc_producto_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_producto_)));
                  $this->NM_ajax_info['fldList']['dnc_producto_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_producto_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_producto_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_producto_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_producto_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_producto_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_dnc_descripcion_ = $this->dnc_descripcion_;
                  $this->NM_ajax_info['fldList']['dnc_descripcion_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['dnc_descripcion_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_descripcion_)));
                  $this->NM_ajax_info['fldList']['dnc_descripcion_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_descripcion_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_descripcion_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_descripcion_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_descripcion_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_descripcion_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_dnc_cantidad_facturada_ = $this->dnc_cantidad_facturada_;
                  $this->NM_ajax_info['fldList']['dnc_cantidad_facturada_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['dnc_cantidad_facturada_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_cantidad_facturada_)));
                  $this->NM_ajax_info['fldList']['dnc_cantidad_facturada_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_cantidad_facturada_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_cantidad_facturada_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_cantidad_facturada_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_cantidad_facturada_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_cantidad_facturada_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_cantidad_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_cantidad_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_cantidad_)));
                  $this->NM_ajax_info['fldList']['dnc_cantidad_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_cantidad_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_cantidad_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_cantidad_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_cantidad_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_cantidad_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_dnc_precio_unitario_ = $this->dnc_precio_unitario_;
                  $this->NM_ajax_info['fldList']['dnc_precio_unitario_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['dnc_precio_unitario_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_precio_unitario_)));
                  $this->NM_ajax_info['fldList']['dnc_precio_unitario_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_precio_unitario_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_precio_unitario_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_precio_unitario_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_precio_unitario_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_precio_unitario_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_dnc_descuento_ = $this->dnc_descuento_;
                  $this->NM_ajax_info['fldList']['dnc_descuento_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['dnc_descuento_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_descuento_)));
                  $this->NM_ajax_info['fldList']['dnc_descuento_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_descuento_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_descuento_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_descuento_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_descuento_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_descuento_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_dnc_subtotal_ = $this->dnc_subtotal_;
                  $this->NM_ajax_info['fldList']['dnc_subtotal_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['dnc_subtotal_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_subtotal_)));
                  $this->NM_ajax_info['fldList']['dnc_subtotal_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_subtotal_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_subtotal_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_subtotal_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_subtotal_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_subtotal_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_dnc_base_iva_ = $this->dnc_base_iva_;
                  $this->NM_ajax_info['fldList']['dnc_base_iva_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['dnc_base_iva_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_base_iva_)));
                  $this->NM_ajax_info['fldList']['dnc_base_iva_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_base_iva_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_base_iva_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_base_iva_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_base_iva_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_base_iva_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_porcentaje_iva_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_porcentaje_iva_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_porcentaje_iva_)));
                  $this->NM_ajax_info['fldList']['dnc_porcentaje_iva_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_porcentaje_iva_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_porcentaje_iva_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_porcentaje_iva_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_porcentaje_iva_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_porcentaje_iva_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_dnc_valor_iva_ = $this->dnc_valor_iva_;
                  $this->NM_ajax_info['fldList']['dnc_valor_iva_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['dnc_valor_iva_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_valor_iva_)));
                  $this->NM_ajax_info['fldList']['dnc_valor_iva_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_valor_iva_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_valor_iva_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_valor_iva_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_valor_iva_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_valor_iva_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_base_ice_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_base_ice_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_base_ice_)));
                  $this->NM_ajax_info['fldList']['dnc_base_ice_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_base_ice_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_base_ice_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_base_ice_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_base_ice_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_base_ice_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_porcentaje_ice_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_porcentaje_ice_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_porcentaje_ice_)));
                  $this->NM_ajax_info['fldList']['dnc_porcentaje_ice_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_porcentaje_ice_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_porcentaje_ice_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_porcentaje_ice_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_porcentaje_ice_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_porcentaje_ice_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_valor_ice_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_valor_ice_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_valor_ice_)));
                  $this->NM_ajax_info['fldList']['dnc_valor_ice_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_valor_ice_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_valor_ice_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_valor_ice_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_valor_ice_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_valor_ice_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_base_irbpnr_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_base_irbpnr_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_base_irbpnr_)));
                  $this->NM_ajax_info['fldList']['dnc_base_irbpnr_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_base_irbpnr_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_base_irbpnr_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_base_irbpnr_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_base_irbpnr_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_base_irbpnr_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_porcentaje_irbpnr_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_porcentaje_irbpnr_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_porcentaje_irbpnr_)));
                  $this->NM_ajax_info['fldList']['dnc_porcentaje_irbpnr_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_porcentaje_irbpnr_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_porcentaje_irbpnr_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_porcentaje_irbpnr_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_porcentaje_irbpnr_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_porcentaje_irbpnr_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_valor_irbpnr_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_valor_irbpnr_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_valor_irbpnr_)));
                  $this->NM_ajax_info['fldList']['dnc_valor_irbpnr_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_valor_irbpnr_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_valor_irbpnr_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_valor_irbpnr_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_valor_irbpnr_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_valor_irbpnr_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_dnc_total_ = $this->dnc_total_;
                  $this->NM_ajax_info['fldList']['dnc_total_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['dnc_total_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_total_)));
                  $this->NM_ajax_info['fldList']['dnc_total_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_total_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_total_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_total_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_total_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_total_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_estado_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_estado_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_estado_)));
                  $this->NM_ajax_info['fldList']['dnc_estado_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_estado_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_estado_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_estado_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_estado_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_estado_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->dnc_nota_credito_)));
                  $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_dnc_nota_credito_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_nota_credito_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_nota_credito_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['dnc_nota_credito_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['dnc_nota_credito_' . $this->nmgp_refresh_row] = "on";
                      }
                  }


                  $this->nm_tira_formatacao();

                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->dnc_id_ = substr($this->Db->qstr($this->dnc_id_), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
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
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_dele_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dnc_id = $this->dnc_id_ "); 
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
                          form_del_detalle_nota_credito_compras_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nm_proc_onload_record($sc_seq_vert);
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['db_changed'] = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_qtd']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_I_E']--; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_excl = true; 
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
    if ("insert" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['decimal_db'] == ",")
        {
            $this->nm_troca_decimal(",", ".");
        }
        $_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_dnc_nota_credito_ = $this->dnc_nota_credito_;
}
  $exec_sql = "SELECT sp_del_actualiza_nc_compra(".$this->dnc_nota_credito_ .")";

     $nm_select = $exec_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_detalle_nota_credito_compras_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$check_sql="SELECT 
				nc_subtotal,
				nc_subtotal_iva,
				nc_subtotal_cero,
				nc_subtotal_no_objeto,
				nc_subtotal_excento,
				nc_total_descuento,
				nc_valor_ice,
				nc_valor_iva,
				nc_valor_irbpnr,
				nc_total
			FROM del_nota_credito_compra
			WHERE nc_numero=".$this->dnc_nota_credito_ ;
 
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


if (isset($this->rs[0][0])) {
    $this->sc_master_value('nc_subtotal',$this->rs[0][0]);
    $this->sc_master_value('nc_subtotal_iva', $this->rs[0][1]);
	$this->sc_master_value('nc_subtotal_cero', $this->rs[0][2]);
	$this->sc_master_value('nc_subtotal_no_objeto', $this->rs[0][3]);
	$this->sc_master_value('nc_subtotal_excento', $this->rs[0][4]);
	$this->sc_master_value('nc_total_descuento', $this->rs[0][5]);
	$this->sc_master_value('nc_valor_ice', $this->rs[0][6]);
	$this->sc_master_value('nc_valor_iva', $this->rs[0][7]);
	$this->sc_master_value('nc_valor_irbpnr', $this->rs[0][8]);
	$this->sc_master_value('nc_total', $this->rs[0][9]);
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_dnc_nota_credito_ != $this->dnc_nota_credito_ || (isset($bFlagRead_dnc_nota_credito_) && $bFlagRead_dnc_nota_credito_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $this->nmgp_refresh_row]['valList'] = array($this->dnc_nota_credito_);
        $this->NM_ajax_changed['dnc_nota_credito_'] = true;
    }
}
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off'; 
    }
    if ("update" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        $_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_dnc_nota_credito_ = $this->dnc_nota_credito_;
}
  $exec_sql = "SELECT sp_del_actualiza_nc_compra(".$this->dnc_nota_credito_ .")";

     $nm_select = $exec_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_detalle_nota_credito_compras_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$check_sql="SELECT 
				nc_subtotal,
				nc_subtotal_iva,
				nc_subtotal_cero,
				nc_subtotal_no_objeto,
				nc_subtotal_excento,
				nc_total_descuento,
				nc_valor_ice,
				nc_valor_iva,
				nc_valor_irbpnr,
				nc_total
			FROM del_nota_credito_compra
			WHERE nc_numero=".$this->dnc_nota_credito_ ;
 
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


if (isset($this->rs[0][0])) {
    $this->sc_master_value('nc_subtotal',$this->rs[0][0]);
    $this->sc_master_value('nc_subtotal_iva', $this->rs[0][1]);
	$this->sc_master_value('nc_subtotal_cero', $this->rs[0][2]);
	$this->sc_master_value('nc_subtotal_no_objeto', $this->rs[0][3]);
	$this->sc_master_value('nc_subtotal_excento', $this->rs[0][4]);
	$this->sc_master_value('nc_total_descuento', $this->rs[0][5]);
	$this->sc_master_value('nc_valor_ice', $this->rs[0][6]);
	$this->sc_master_value('nc_valor_iva', $this->rs[0][7]);
	$this->sc_master_value('nc_valor_irbpnr', $this->rs[0][8]);
	$this->sc_master_value('nc_total', $this->rs[0][9]);
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_dnc_nota_credito_ != $this->dnc_nota_credito_ || (isset($bFlagRead_dnc_nota_credito_) && $bFlagRead_dnc_nota_credito_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $this->nmgp_refresh_row]['valList'] = array($this->dnc_nota_credito_);
        $this->NM_ajax_changed['dnc_nota_credito_'] = true;
    }
}
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off'; 
    }
    if ("delete" == $this->sc_evento && $this->nmgp_opcao != "nada") {
      $_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_dnc_nota_credito_ = $this->dnc_nota_credito_;
}
  $exec_sql = "SELECT sp_del_actualiza_nc_compra(".$this->dnc_nota_credito_ .")";

     $nm_select = $exec_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_del_detalle_nota_credito_compras_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$check_sql="SELECT 
				nc_subtotal,
				nc_subtotal_iva,
				nc_subtotal_cero,
				nc_subtotal_no_objeto,
				nc_subtotal_excento,
				nc_total_descuento,
				nc_valor_ice,
				nc_valor_iva,
				nc_valor_irbpnr,
				nc_total
			FROM del_nota_credito_compra
			WHERE nc_numero=".$this->dnc_nota_credito_ ;
 
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


if (isset($this->rs[0][0])) {
    $this->sc_master_value('nc_subtotal',$this->rs[0][0]);
    $this->sc_master_value('nc_subtotal_iva', $this->rs[0][1]);
	$this->sc_master_value('nc_subtotal_cero', $this->rs[0][2]);
	$this->sc_master_value('nc_subtotal_no_objeto', $this->rs[0][3]);
	$this->sc_master_value('nc_subtotal_excento', $this->rs[0][4]);
	$this->sc_master_value('nc_total_descuento', $this->rs[0][5]);
	$this->sc_master_value('nc_valor_ice', $this->rs[0][6]);
	$this->sc_master_value('nc_valor_iva', $this->rs[0][7]);
	$this->sc_master_value('nc_valor_irbpnr', $this->rs[0][8]);
	$this->sc_master_value('nc_total', $this->rs[0][9]);
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_dnc_nota_credito_ != $this->dnc_nota_credito_ || (isset($bFlagRead_dnc_nota_credito_) && $bFlagRead_dnc_nota_credito_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['dnc_nota_credito_' . $this->nmgp_refresh_row]['valList'] = array($this->dnc_nota_credito_);
        $this->NM_ajax_changed['dnc_nota_credito_'] = true;
    }
}
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          return;
      }
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['decimal_db'] == ",")
   {
       $this->nm_troca_decimal(".", ",");
   }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['parms'] = "dnc_id_?#?$this->dnc_id_?@?"; 
      }
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->dnc_id_ = null === $this->dnc_id_ ? null : substr($this->Db->qstr($this->dnc_id_), 1, -1); 
      } 
   }
//---------- 
   function nm_select_banco() 
   { 
      global $nm_form_submit, $sc_seq_vert, $sc_check_incl, $teste_validade, $sc_where;
 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['rows']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['rows']))
      {
          $this->sc_max_reg = $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['rows'];
      } 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['rows_ins']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['rows_ins']))
      {
          $this->sc_max_reg_incl = $_SESSION['scriptcase']['sc_apl_conf']['form_del_detalle_nota_credito_compras']['rows_ins'];
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_qtd_reg']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_qtd_reg'])
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_qtd_reg'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_max_reg']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_max_reg'] > 0 || strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_max_reg']) == "all"))
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_max_reg'];
      } 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
      $this->form_vert_form_del_detalle_nota_credito_compras = array();
      if ($this->nmgp_opcao != "novo") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['parms'] = ""; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($this->sc_teve_excl)
      {
          $this->nmgp_opcao = "avanca";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] -= $this->sc_max_reg;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = 0;
      }
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter'] . ")";
          }
      }
      $sc_where = trim("(dnc_cantidad>0
and dnc_nota_credito=" . $_SESSION['var_nota_credito'] . ")");
      if (substr(strtolower($sc_where), 0, 5) == "where")
      {
          $sc_where  = substr($sc_where , 5);
      }
      if (!empty($sc_where))
      {
          $sc_where = " where " . $sc_where . " ";
      }
      if ('' != $sc_where_filter)
      {
          $sc_where = (isset($sc_where) && '' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (((isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao) || (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)) && !$this->has_where_params && 'novo' != $this->nmgp_opcao)
      {
          $aNewWhereCond = array();
          if (null != $this->dnc_id_)
          {
              $aNewWhereCond[] = "dnc_id = " . $this->dnc_id_;
          }
          if (!$this->NM_ajax_flag)
          {
              $this->NM_btn_navega = "S";
          }
          elseif (!empty($aNewWhereCond))
          {
              if ('' == $sc_where)
              {
                  $sc_where = " where (";
              }
              else
              {
                  $sc_where .= " and (";
              }
              $sc_where .= implode(" and ", $aNewWhereCond) . ")";
          }
      }
      if ('total' != $this->form_paginacao)
      {
          if ($this->app_is_initializing || $this->sc_teve_excl || $this->sc_teve_incl || (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total']))
          {
              $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where;
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
              $rt = $this->Db->Execute($nmgp_select);
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit;
              }
              $qt_geral_reg_form_del_detalle_nota_credito_compras = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total'] = $qt_geral_reg_form_del_detalle_nota_credito_compras;
              $rt->Close();
          }
      if ((isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_I_E'] = 0; 
          if (!$this->sc_teve_excl && !$this->sc_teve_incl) 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = 0; 
          } 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->dnc_id_))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "dnc_id < $this->dnc_id_ "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "dnc_id < $this->dnc_id_ "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "dnc_id < $this->dnc_id_ "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "dnc_id < $this->dnc_id_ "; 
              }
              else  
              {
                  $Key_Where = "dnc_id < $this->dnc_id_ "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_del_detalle_nota_credito_compras = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total'];
      } 
      if ($this->nmgp_opcao == "inicio" || $this->nmgp_opcao == "ordem") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_del_detalle_nota_credito_compras) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] += ($this->sc_max_reg + $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_I_E']); 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] > $qt_geral_reg_form_del_detalle_nota_credito_compras)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = $qt_geral_reg_form_del_detalle_nota_credito_compras - $this->sc_max_reg; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = 0; 
              }
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] -= $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = ($qt_geral_reg_form_del_detalle_nota_credito_compras + 1) - $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] = 0; 
          }
      } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_I_E'] = 0; 
      }
      $Cmps_ord_def = array();
      $sc_order_by  = "";
      $sc_order_by = "dnc_id";
      $sc_order_by = str_replace("order by ", "", $sc_order_by);
      $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
      if (!empty($sc_order_by))
      {
          $sc_order_by = " order by $sc_order_by "; 
      }
      if ($this->nmgp_opcao == "ordem" && in_array($this->nmgp_ordem, $Cmps_ord_def)) 
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_cmp'] != $this->nmgp_ordem)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_cmp'] = $this->nmgp_ordem; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' asc'; 
              switch ($this->nmgp_ordem) {
                  case "dnc_id":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_factura":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_cantidad_facturada":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_cantidad":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_precio_unitario":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_descuento":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_subtotal":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_base_iva":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_porcentaje_iva":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_valor_iva":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_base_ice":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_valor_ice":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_base_irbpnr":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_valor_irbpnr":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_total":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  case "dnc_nota_credito":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc';
                      break;
                  default:
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' asc';
                      break;
              }
          }
          elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] == ' asc')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' desc'; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] = ' asc'; 
          }
      } 
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_cmp'])) 
      { 
          $sc_order_by = " order by " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_cmp'] . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord']; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nmgp_select = "SELECT dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      else 
      { 
          $nmgp_select = "SELECT dnc_id, dnc_factura, dnc_empresa, dnc_producto, dnc_descripcion, dnc_cantidad_facturada, dnc_cantidad, dnc_precio_unitario, dnc_subtotal, dnc_descuento, dnc_base_iva, dnc_porcentaje_iva, dnc_valor_iva, dnc_base_ice, dnc_porcentaje_ice, dnc_valor_ice, dnc_base_irbpnr, dnc_porcentaje_irbpnr, dnc_valor_irbpnr, dnc_total, dnc_estado, dnc_nota_credito from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      if ($this->nmgp_opcao != "novo") 
      { 
      if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
          $rs = $this->Db->Execute($nmgp_select) ;
      }
      elseif ('total' == $this->form_paginacao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
      }
      else
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "R")
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          else 
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start']) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start']) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start']) ; 
              } 
              else  
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
                  $rs = $this->Db->Execute($nmgp_select) ; 
                  if (!$rs === false && !$rs->EOF) 
                  { 
                      $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start']) ;  
                  } 
              } 
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
          if ($rs->EOF && $this->nmgp_botoes['new'] != "on")
          {
              $this->nmgp_form_empty = true;
          }
          if ($rs->EOF)
          {
              $sc_seq_vert = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['empty_filter'] = true;
              }
          }
          else
          {
              $sc_seq_vert = 1; 
          }
          if ('total' == $this->form_paginacao)
          {
              $bPagTest = true;
              $this->sc_max_reg = 0;
          }
          else
          {
              $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
          }
          while (!$rs->EOF && $bPagTest)
          { 
              if ('total' == $this->form_paginacao)
              {
                  $this->sc_max_reg++;
              }
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $guard_seq_vert = $sc_seq_vert;
                  $sc_seq_vert    = $this->nmgp_refresh_row;
              }
              if ('total' != $this->form_paginacao)
              {
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "R")
              { 
                  $this->sc_max_reg++;
              } 
              }
              $this->dnc_id_ = $rs->fields[0] ; 
              $this->nmgp_dados_select['dnc_id_'] = $this->dnc_id_;
              $this->dnc_factura_ = $rs->fields[1] ; 
              $this->nmgp_dados_select['dnc_factura_'] = $this->dnc_factura_;
              $this->dnc_empresa_ = $rs->fields[2] ; 
              $this->nmgp_dados_select['dnc_empresa_'] = $this->dnc_empresa_;
              $this->dnc_producto_ = $rs->fields[3] ; 
              $this->nmgp_dados_select['dnc_producto_'] = $this->dnc_producto_;
              $this->dnc_descripcion_ = $rs->fields[4] ; 
              $this->nmgp_dados_select['dnc_descripcion_'] = $this->dnc_descripcion_;
              $this->dnc_cantidad_facturada_ = $rs->fields[5] ; 
              $this->nmgp_dados_select['dnc_cantidad_facturada_'] = $this->dnc_cantidad_facturada_;
              $this->dnc_cantidad_ = $rs->fields[6] ; 
              $this->nmgp_dados_select['dnc_cantidad_'] = $this->dnc_cantidad_;
              $this->dnc_precio_unitario_ = $rs->fields[7] ; 
              $this->nmgp_dados_select['dnc_precio_unitario_'] = $this->dnc_precio_unitario_;
              $this->dnc_subtotal_ = $rs->fields[8] ; 
              $this->nmgp_dados_select['dnc_subtotal_'] = $this->dnc_subtotal_;
              $this->dnc_descuento_ = $rs->fields[9] ; 
              $this->nmgp_dados_select['dnc_descuento_'] = $this->dnc_descuento_;
              $this->dnc_base_iva_ = $rs->fields[10] ; 
              $this->nmgp_dados_select['dnc_base_iva_'] = $this->dnc_base_iva_;
              $this->dnc_porcentaje_iva_ = $rs->fields[11] ; 
              $this->nmgp_dados_select['dnc_porcentaje_iva_'] = $this->dnc_porcentaje_iva_;
              $this->dnc_valor_iva_ = $rs->fields[12] ; 
              $this->nmgp_dados_select['dnc_valor_iva_'] = $this->dnc_valor_iva_;
              $this->dnc_base_ice_ = $rs->fields[13] ; 
              $this->nmgp_dados_select['dnc_base_ice_'] = $this->dnc_base_ice_;
              $this->dnc_porcentaje_ice_ = $rs->fields[14] ; 
              $this->nmgp_dados_select['dnc_porcentaje_ice_'] = $this->dnc_porcentaje_ice_;
              $this->dnc_valor_ice_ = $rs->fields[15] ; 
              $this->nmgp_dados_select['dnc_valor_ice_'] = $this->dnc_valor_ice_;
              $this->dnc_base_irbpnr_ = $rs->fields[16] ; 
              $this->nmgp_dados_select['dnc_base_irbpnr_'] = $this->dnc_base_irbpnr_;
              $this->dnc_porcentaje_irbpnr_ = $rs->fields[17] ; 
              $this->nmgp_dados_select['dnc_porcentaje_irbpnr_'] = $this->dnc_porcentaje_irbpnr_;
              $this->dnc_valor_irbpnr_ = $rs->fields[18] ; 
              $this->nmgp_dados_select['dnc_valor_irbpnr_'] = $this->dnc_valor_irbpnr_;
              $this->dnc_total_ = $rs->fields[19] ; 
              $this->nmgp_dados_select['dnc_total_'] = $this->dnc_total_;
              $this->dnc_estado_ = $rs->fields[20] ; 
              $this->nmgp_dados_select['dnc_estado_'] = $this->dnc_estado_;
              $this->dnc_nota_credito_ = $rs->fields[21] ; 
              $this->nmgp_dados_select['dnc_nota_credito_'] = $this->dnc_nota_credito_;
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->dnc_id_ = (string)$this->dnc_id_; 
              $this->dnc_factura_ = (string)$this->dnc_factura_; 
              $this->dnc_cantidad_facturada_ = (string)$this->dnc_cantidad_facturada_; 
              $this->dnc_cantidad_ = (string)$this->dnc_cantidad_; 
              $this->dnc_precio_unitario_ = (string)$this->dnc_precio_unitario_; 
              $this->dnc_subtotal_ = (string)$this->dnc_subtotal_; 
              $this->dnc_descuento_ = (string)$this->dnc_descuento_; 
              $this->dnc_base_iva_ = (string)$this->dnc_base_iva_; 
              $this->dnc_porcentaje_iva_ = (string)$this->dnc_porcentaje_iva_; 
              $this->dnc_valor_iva_ = (string)$this->dnc_valor_iva_; 
              $this->dnc_base_ice_ = (string)$this->dnc_base_ice_; 
              $this->dnc_valor_ice_ = (string)$this->dnc_valor_ice_; 
              $this->dnc_base_irbpnr_ = (string)$this->dnc_base_irbpnr_; 
              $this->dnc_valor_irbpnr_ = (string)$this->dnc_valor_irbpnr_; 
              $this->dnc_total_ = (string)$this->dnc_total_; 
              $this->dnc_nota_credito_ = (string)$this->dnc_nota_credito_; 
              if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['parms'])) 
              { 
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['parms'] = "dnc_id_?#?$this->dnc_id_?@?";
              } 
              $this->nm_proc_onload_record($sc_seq_vert);
              $this->storeRecordState($sc_seq_vert);
//
//-- 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert] = $this->nmgp_dados_select;
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_id_'] =  $this->dnc_id_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_factura_'] =  $this->dnc_factura_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_empresa_'] =  $this->dnc_empresa_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_producto_'] =  $this->dnc_producto_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_descripcion_'] =  $this->dnc_descripcion_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_cantidad_facturada_'] =  $this->dnc_cantidad_facturada_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_cantidad_'] =  $this->dnc_cantidad_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_precio_unitario_'] =  $this->dnc_precio_unitario_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_descuento_'] =  $this->dnc_descuento_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_subtotal_'] =  $this->dnc_subtotal_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_base_iva_'] =  $this->dnc_base_iva_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_porcentaje_iva_'] =  $this->dnc_porcentaje_iva_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_valor_iva_'] =  $this->dnc_valor_iva_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_base_ice_'] =  $this->dnc_base_ice_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_porcentaje_ice_'] =  $this->dnc_porcentaje_ice_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_valor_ice_'] =  $this->dnc_valor_ice_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_base_irbpnr_'] =  $this->dnc_base_irbpnr_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_porcentaje_irbpnr_'] =  $this->dnc_porcentaje_irbpnr_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_valor_irbpnr_'] =  $this->dnc_valor_irbpnr_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_total_'] =  $this->dnc_total_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_estado_'] =  $this->dnc_estado_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_nota_credito_'] =  $this->dnc_nota_credito_; 
              $sc_seq_vert++; 
              $rs->MoveNext() ; 
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $sc_seq_vert = $guard_seq_vert;
              }
              if ('total' != $this->form_paginacao)
              {
                  $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
              }
          } 
          ksort ($this->form_vert_form_del_detalle_nota_credito_compras); 
          $rs->Close(); 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_qtd'] = $sc_seq_vert + $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] - 1;
          if ('total' == $this->form_paginacao)
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $this->sc_max_reg; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $this->sc_max_reg; 
          }
          else
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total'] + 1; 
          }
          if ($this->form_paginacao == "total")
          {
              $this->SC_nav_page = "";
          }
          else
          {
              $this->NM_gera_nav_page(); 
          }
          $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] < (($qt_geral_reg_form_del_detalle_nota_credito_compras + 1) - $this->sc_max_reg);
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opcao'] = '';
          }
      } 
      if ($this->nmgp_opcao == "novo") 
      { 
          $sc_seq_vert = 1; 
          $sc_check_incl = array(); 
          if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao) 
          { 
              $sc_seq_vert = $this->sc_seq_vert; 
              $this->sc_evento = "novo"; 
              $this->sc_max_reg_incl = $this->sc_seq_vert; 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_multi']) 
          { 
          } 
          else 
          { 
              $this->sc_max_reg_incl = 0; 
          } 
          while ($sc_seq_vert <= $this->sc_max_reg_incl) 
          { 
              $this->dnc_id_ = "";  
              $this->dnc_factura_ = "";  
              $this->dnc_empresa_ = "";  
              $this->dnc_producto_ = "";  
              $this->dnc_descripcion_ = "";  
              $this->dnc_cantidad_facturada_ = "";  
              $this->dnc_cantidad_ = "";  
              $this->dnc_precio_unitario_ = "";  
              $this->dnc_subtotal_ = "";  
              $this->dnc_descuento_ = "";  
              $this->dnc_base_iva_ = "";  
              $this->dnc_porcentaje_iva_ = "";  
              $this->dnc_valor_iva_ = "";  
              $this->dnc_base_ice_ = "";  
              $this->dnc_porcentaje_ice_ = "";  
              $this->dnc_valor_ice_ = "";  
              $this->dnc_base_irbpnr_ = "";  
              $this->dnc_porcentaje_irbpnr_ = "";  
              $this->dnc_valor_irbpnr_ = "";  
              $this->dnc_total_ = "";  
              $this->dnc_estado_ = "";  
              $this->dnc_nota_credito_ = "";  
              $this->nm_proc_onload_record($sc_seq_vert);
              if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['foreign_key']))
              {
                  foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['foreign_key'] as $sFKName => $sFKValue)
                  {
                      if (isset($this->sc_conv_var[$sFKName]))
                      {
                          $sFKName = $this->sc_conv_var[$sFKName];
                      }
                      eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
                  }
              }
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_id_'] =  $this->dnc_id_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_factura_'] =  $this->dnc_factura_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_empresa_'] =  $this->dnc_empresa_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_producto_'] =  $this->dnc_producto_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_descripcion_'] =  $this->dnc_descripcion_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_cantidad_facturada_'] =  $this->dnc_cantidad_facturada_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_cantidad_'] =  $this->dnc_cantidad_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_precio_unitario_'] =  $this->dnc_precio_unitario_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_descuento_'] =  $this->dnc_descuento_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_subtotal_'] =  $this->dnc_subtotal_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_base_iva_'] =  $this->dnc_base_iva_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_porcentaje_iva_'] =  $this->dnc_porcentaje_iva_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_valor_iva_'] =  $this->dnc_valor_iva_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_base_ice_'] =  $this->dnc_base_ice_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_porcentaje_ice_'] =  $this->dnc_porcentaje_ice_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_valor_ice_'] =  $this->dnc_valor_ice_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_base_irbpnr_'] =  $this->dnc_base_irbpnr_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_porcentaje_irbpnr_'] =  $this->dnc_porcentaje_irbpnr_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_valor_irbpnr_'] =  $this->dnc_valor_irbpnr_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_total_'] =  $this->dnc_total_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_estado_'] =  $this->dnc_estado_; 
             $this->form_vert_form_del_detalle_nota_credito_compras[$sc_seq_vert]['dnc_nota_credito_'] =  $this->dnc_nota_credito_; 
              $sc_seq_vert++; 
          } 
      }  
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
       $this->SC_log_arr['keys']['dnc_id'] =  $this->dnc_id_;
   }
// 
   function NM_gera_log_old($sc_seq_vert) 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert] ))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dados_select'][$sc_seq_vert] ;
           $this->SC_log_arr['fields']['dnc_factura']['0'] =  $nmgp_dados_select['dnc_factura_'];
           $this->SC_log_arr['fields']['dnc_empresa']['0'] =  $nmgp_dados_select['dnc_empresa_'];
           $this->SC_log_arr['fields']['dnc_producto']['0'] =  $nmgp_dados_select['dnc_producto_'];
           $this->SC_log_arr['fields']['dnc_descripcion']['0'] =  $nmgp_dados_select['dnc_descripcion_'];
           $this->SC_log_arr['fields']['dnc_cantidad_facturada']['0'] =  $nmgp_dados_select['dnc_cantidad_facturada_'];
           $this->SC_log_arr['fields']['dnc_cantidad']['0'] =  $nmgp_dados_select['dnc_cantidad_'];
           $this->SC_log_arr['fields']['dnc_precio_unitario']['0'] =  $nmgp_dados_select['dnc_precio_unitario_'];
           $this->SC_log_arr['fields']['dnc_subtotal']['0'] =  $nmgp_dados_select['dnc_subtotal_'];
           $this->SC_log_arr['fields']['dnc_descuento']['0'] =  $nmgp_dados_select['dnc_descuento_'];
           $this->SC_log_arr['fields']['dnc_base_iva']['0'] =  $nmgp_dados_select['dnc_base_iva_'];
           $this->SC_log_arr['fields']['dnc_porcentaje_iva']['0'] =  $nmgp_dados_select['dnc_porcentaje_iva_'];
           $this->SC_log_arr['fields']['dnc_valor_iva']['0'] =  $nmgp_dados_select['dnc_valor_iva_'];
           $this->SC_log_arr['fields']['dnc_base_ice']['0'] =  $nmgp_dados_select['dnc_base_ice_'];
           $this->SC_log_arr['fields']['dnc_porcentaje_ice']['0'] =  $nmgp_dados_select['dnc_porcentaje_ice_'];
           $this->SC_log_arr['fields']['dnc_valor_ice']['0'] =  $nmgp_dados_select['dnc_valor_ice_'];
           $this->SC_log_arr['fields']['dnc_base_irbpnr']['0'] =  $nmgp_dados_select['dnc_base_irbpnr_'];
           $this->SC_log_arr['fields']['dnc_porcentaje_irbpnr']['0'] =  $nmgp_dados_select['dnc_porcentaje_irbpnr_'];
           $this->SC_log_arr['fields']['dnc_valor_irbpnr']['0'] =  $nmgp_dados_select['dnc_valor_irbpnr_'];
           $this->SC_log_arr['fields']['dnc_total']['0'] =  $nmgp_dados_select['dnc_total_'];
           $this->SC_log_arr['fields']['dnc_estado']['0'] =  $nmgp_dados_select['dnc_estado_'];
           $this->SC_log_arr['fields']['dnc_nota_credito']['0'] =  $nmgp_dados_select['dnc_nota_credito_'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['dnc_factura']['1'] =  $this->dnc_factura_;
       $this->SC_log_arr['fields']['dnc_empresa']['1'] =  $this->dnc_empresa_;
       $this->SC_log_arr['fields']['dnc_producto']['1'] =  $this->dnc_producto_;
       $this->SC_log_arr['fields']['dnc_descripcion']['1'] =  $this->dnc_descripcion_;
       $this->SC_log_arr['fields']['dnc_cantidad_facturada']['1'] =  $this->dnc_cantidad_facturada_;
       $this->SC_log_arr['fields']['dnc_cantidad']['1'] =  $this->dnc_cantidad_;
       $this->SC_log_arr['fields']['dnc_precio_unitario']['1'] =  $this->dnc_precio_unitario_;
       $this->SC_log_arr['fields']['dnc_subtotal']['1'] =  $this->dnc_subtotal_;
       $this->SC_log_arr['fields']['dnc_descuento']['1'] =  $this->dnc_descuento_;
       $this->SC_log_arr['fields']['dnc_base_iva']['1'] =  $this->dnc_base_iva_;
       $this->SC_log_arr['fields']['dnc_porcentaje_iva']['1'] =  $this->dnc_porcentaje_iva_;
       $this->SC_log_arr['fields']['dnc_valor_iva']['1'] =  $this->dnc_valor_iva_;
       $this->SC_log_arr['fields']['dnc_base_ice']['1'] =  $this->dnc_base_ice_;
       $this->SC_log_arr['fields']['dnc_porcentaje_ice']['1'] =  $this->dnc_porcentaje_ice_;
       $this->SC_log_arr['fields']['dnc_valor_ice']['1'] =  $this->dnc_valor_ice_;
       $this->SC_log_arr['fields']['dnc_base_irbpnr']['1'] =  $this->dnc_base_irbpnr_;
       $this->SC_log_arr['fields']['dnc_porcentaje_irbpnr']['1'] =  $this->dnc_porcentaje_irbpnr_;
       $this->SC_log_arr['fields']['dnc_valor_irbpnr']['1'] =  $this->dnc_valor_irbpnr_;
       $this->SC_log_arr['fields']['dnc_total']['1'] =  $this->dnc_total_;
       $this->SC_log_arr['fields']['dnc_estado']['1'] =  $this->dnc_estado_;
       $this->SC_log_arr['fields']['dnc_nota_credito']['1'] =  $this->dnc_nota_credito_;
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
       $Log_labels['dnc_factura'] =  "{lang_factura}";
       $Log_labels['dnc_empresa'] =  "{lang_empresa}";
       $Log_labels['dnc_producto'] =  "{lang_producto}";
       $Log_labels['dnc_descripcion'] =  "{lang_descripcion}";
       $Log_labels['dnc_cantidad_facturada'] =  "{lang_cantidad} Facturada";
       $Log_labels['dnc_cantidad'] =  "{lang_cantidad}";
       $Log_labels['dnc_precio_unitario'] =  "{lang_precio_unitario}";
       $Log_labels['dnc_subtotal'] =  "{lang_subtotal}";
       $Log_labels['dnc_descuento'] =  "{lang_descuento}";
       $Log_labels['dnc_base_iva'] =  "{lang_base_iva}";
       $Log_labels['dnc_porcentaje_iva'] =  "{lang_porcentaje_iva}";
       $Log_labels['dnc_valor_iva'] =  "{lang_iva}";
       $Log_labels['dnc_base_ice'] =  "{lang_base_ice}";
       $Log_labels['dnc_porcentaje_ice'] =  "{lang_porcentaje_ice}";
       $Log_labels['dnc_valor_ice'] =  "{lang_ice}";
       $Log_labels['dnc_base_irbpnr'] =  "{lang_base_irbpnr}";
       $Log_labels['dnc_porcentaje_irbpnr'] =  "{lang_porcentaje_irbpnr}";
       $Log_labels['dnc_valor_irbpnr'] =  "{lang_irbpnr}";
       $Log_labels['dnc_total'] =  "{lang_othr_chrt_totl}";
       $Log_labels['dnc_estado'] =  "{lang_estado}";
       $Log_labels['dnc_nota_credito'] =  "{lang_nota_credito}";
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
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Arr_result        = array();
       $Ind_result        = 0;
       $Reg_Page   = $this->sc_max_reg;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['reg_start'] + $this->sc_max_reg;
       $rec_fim    = ($rec_fim > $rec_tot) ? $rec_tot : $rec_fim;
       if ($rec_tot == 0)
       {
           return;
       }
       $Qtd_Pages  = ceil($rec_tot / $Reg_Page);
       $Page_Atu   = ceil($rec_fim / $Reg_Page);
       $Link_ini   = 1;
       if ($Page_Atu > $Max_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       elseif ($Page_Atu > $Mid_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       if (($Qtd_Pages - $Link_ini) < $Max_link)
       {
           $Link_ini = ($Qtd_Pages - $Max_link) + 1;
       }
       if ($Link_ini < 1)
       {
           $Link_ini = 1;
       }
       for ($x = 0; $x < $Max_link && $Link_ini <= $Qtd_Pages; $x++)
       {
           $rec = (($Link_ini - 1) * $Reg_Page) + 1;
           if ($Link_ini == $Page_Atu)
           {
               $Arr_result[$Ind_result] = '<span class="scFormToolbarNavOpen" style="vertical-align: middle;">' . $Link_ini . '</span>';
           }
           else
           {
               $Arr_result[$Ind_result] = '<a class="scFormToolbarNav" style="vertical-align: middle;" href="javascript: nm_navpage(' . $rec . ')">' . $Link_ini . '</a>';
           }
           $Link_ini++;
           $Ind_result++;
           if (!isset($this->Ini->Str_toolbarnav_separator))
           {
               $this->Ini->Str_toolbarnav_separator = "";
           }
           if (($x + 1) < $Max_link && $Link_ini <= $Qtd_Pages && '' != $this->Ini->Str_toolbarnav_separator && @is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator))
           {
               $Arr_result[$Ind_result] = '<img src="' . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator . '" align="absmiddle" style="vertical-align: middle;">';
               $Ind_result++;
           }
       }
       if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
       {
           krsort($Arr_result);
       }
       foreach ($Arr_result as $Ind_result => $Lin_result)
       {
           $this->SC_nav_page .= $Lin_result;
       }
   }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function dnc_base_ice__onChange()
{
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  
$original_dnc_producto_ = $this->dnc_producto_;
$original_dnc_base_irbpnr_ = $this->dnc_base_irbpnr_;
$original_dnc_porcentaje_irbpnr_ = $this->dnc_porcentaje_irbpnr_;
$original_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;
$original_dnc_base_ice_ = $this->dnc_base_ice_;
$original_dnc_valor_ice_ = $this->dnc_valor_ice_;
$original_dnc_base_iva_ = $this->dnc_base_iva_;
$original_dnc_subtotal_ = $this->dnc_subtotal_;
$original_dnc_valor_iva_ = $this->dnc_valor_iva_;
$original_dnc_total_ = $this->dnc_total_;

if($this->dnc_producto_ <>''){
	$var_porcentaje_iva=0;
	$var_porcentaje_ic=0;
	$var_porcentaje_irbpnr=0;
	$check_sql = "SELECT 
					pro_precio,
					pro_descuento,
					pro_por_iva,
					pro_por_ice,
					pro_por_irbpnr,
					iva_porcentaje,
					ice_porcentaje,
					irbpnr_porcentaje 
				FROM v_del_producto
				WHERE pro_codigo='" . $this->dnc_producto_  . "'
				and pro_empresa='".$this->sc_temp_Igtech_RucEmpresa."';";
	 
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
		$var_porcentaje_iva=$this->rs[0][5];
		$var_porcentaje_ice=$this->rs[0][6];
		$var_porcentaje_irbpnr=$this->rs[0][7];
	}
	
	if($this->dnc_base_ice_ <>''and $this->dnc_base_ice_ <>0 and $var_porcentaje_ice<>0 ){
		 $this->dnc_valor_ice_ =$this->dnc_base_ice_ *$var_porcentaje_ice;
		 $this->dnc_base_iva_ =$this->dnc_subtotal_ +$this->dnc_valor_ice_ ;
		 $this->dnc_valor_iva_ =round($this->dnc_base_iva_ *$var_porcentaje_iva/100,2);
	}else{
		 $this->dnc_base_ice_ =0;
		 $this->dnc_valor_ice_ =0;
		 $this->dnc_base_iva_ =$this->dnc_subtotal_ ;
		 $this->dnc_valor_iva_ =round($this->dnc_base_iva_ *$var_porcentaje_iva/100,2);
	}
	
	$this->dnc_total_ =$this->dnc_subtotal_ +$this->dnc_valor_ice_ +$this->dnc_valor_iva_ +$this->dnc_valor_irbpnr_ ;
}	


if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off';
$modificado_dnc_producto_ = $this->dnc_producto_;
$modificado_dnc_base_irbpnr_ = $this->dnc_base_irbpnr_;
$modificado_dnc_porcentaje_irbpnr_ = $this->dnc_porcentaje_irbpnr_;
$modificado_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;
$modificado_dnc_base_ice_ = $this->dnc_base_ice_;
$modificado_dnc_valor_ice_ = $this->dnc_valor_ice_;
$modificado_dnc_base_iva_ = $this->dnc_base_iva_;
$modificado_dnc_subtotal_ = $this->dnc_subtotal_;
$modificado_dnc_valor_iva_ = $this->dnc_valor_iva_;
$modificado_dnc_total_ = $this->dnc_total_;
$this->nm_formatar_campos('dnc_producto_', 'dnc_base_irbpnr_', 'dnc_porcentaje_irbpnr_', 'dnc_valor_irbpnr_', 'dnc_base_ice_', 'dnc_valor_ice_', 'dnc_base_iva_', 'dnc_subtotal_', 'dnc_valor_iva_', 'dnc_total_');
$this->nmgp_refresh_fields = array();
if ($original_dnc_producto_ !== $modificado_dnc_producto_ || isset($this->nmgp_cmp_readonly['dnc_producto_']) || (isset($bFlagRead_dnc_producto_) && $bFlagRead_dnc_producto_))
{
    $this->nmgp_refresh_fields[] = 'dnc_producto_';
    $this->NM_ajax_changed['dnc_producto_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_base_irbpnr_ !== $modificado_dnc_base_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_base_irbpnr_']) || (isset($bFlagRead_dnc_base_irbpnr_) && $bFlagRead_dnc_base_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_base_irbpnr_';
    $this->NM_ajax_changed['dnc_base_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_porcentaje_irbpnr_ !== $modificado_dnc_porcentaje_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_porcentaje_irbpnr_']) || (isset($bFlagRead_dnc_porcentaje_irbpnr_) && $bFlagRead_dnc_porcentaje_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_porcentaje_irbpnr_';
    $this->NM_ajax_changed['dnc_porcentaje_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_irbpnr_ !== $modificado_dnc_valor_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_valor_irbpnr_']) || (isset($bFlagRead_dnc_valor_irbpnr_) && $bFlagRead_dnc_valor_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_irbpnr_';
    $this->NM_ajax_changed['dnc_valor_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_base_ice_ !== $modificado_dnc_base_ice_ || isset($this->nmgp_cmp_readonly['dnc_base_ice_']) || (isset($bFlagRead_dnc_base_ice_) && $bFlagRead_dnc_base_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_base_ice_';
    $this->NM_ajax_changed['dnc_base_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_ice_ !== $modificado_dnc_valor_ice_ || isset($this->nmgp_cmp_readonly['dnc_valor_ice_']) || (isset($bFlagRead_dnc_valor_ice_) && $bFlagRead_dnc_valor_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_ice_';
    $this->NM_ajax_changed['dnc_valor_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_base_iva_ !== $modificado_dnc_base_iva_ || isset($this->nmgp_cmp_readonly['dnc_base_iva_']) || (isset($bFlagRead_dnc_base_iva_) && $bFlagRead_dnc_base_iva_))
{
    $this->nmgp_refresh_fields[] = 'dnc_base_iva_';
    $this->NM_ajax_changed['dnc_base_iva_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_subtotal_ !== $modificado_dnc_subtotal_ || isset($this->nmgp_cmp_readonly['dnc_subtotal_']) || (isset($bFlagRead_dnc_subtotal_) && $bFlagRead_dnc_subtotal_))
{
    $this->nmgp_refresh_fields[] = 'dnc_subtotal_';
    $this->NM_ajax_changed['dnc_subtotal_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_iva_ !== $modificado_dnc_valor_iva_ || isset($this->nmgp_cmp_readonly['dnc_valor_iva_']) || (isset($bFlagRead_dnc_valor_iva_) && $bFlagRead_dnc_valor_iva_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_iva_';
    $this->NM_ajax_changed['dnc_valor_iva_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_total_ !== $modificado_dnc_total_ || isset($this->nmgp_cmp_readonly['dnc_total_']) || (isset($bFlagRead_dnc_total_) && $bFlagRead_dnc_total_))
{
    $this->nmgp_refresh_fields[] = 'dnc_total_';
    $this->NM_ajax_changed['dnc_total_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'dnc';
form_del_detalle_nota_credito_compras_pack_ajax_response();
exit;
}
function dnc_base_irbpnr__onChange()
{
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  
$original_dnc_producto_ = $this->dnc_producto_;
$original_dnc_base_irbpnr_ = $this->dnc_base_irbpnr_;
$original_dnc_porcentaje_irbpnr_ = $this->dnc_porcentaje_irbpnr_;
$original_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;
$original_dnc_total_ = $this->dnc_total_;
$original_dnc_subtotal_ = $this->dnc_subtotal_;
$original_dnc_valor_ice_ = $this->dnc_valor_ice_;
$original_dnc_valor_iva_ = $this->dnc_valor_iva_;

if($this->dnc_producto_ <>''){
	$var_porcentaje_iva=0;
	$var_porcentaje_ic=0;
	$var_porcentaje_irbpnr=0;
	$check_sql = "SELECT 
					pro_precio,
					pro_descuento,
					pro_por_iva,
					pro_por_ice,
					pro_por_irbpnr,
					iva_porcentaje,
					ice_porcentaje,
					irbpnr_porcentaje 
				FROM v_del_producto
				WHERE pro_codigo='" . $this->dnc_producto_  . "'
				and pro_empresa='".$this->sc_temp_Igtech_RucEmpresa."';";
	 
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
		$var_porcentaje_iva=$this->rs[0][5];
		$var_porcentaje_ice=$this->rs[0][6];
		$var_porcentaje_irbpnr=$this->rs[0][7];
	}
	
	
	if($this->dnc_base_irbpnr_ <>''and $this->dnc_base_irbpnr_ <>0 and $var_porcentaje_irbpnr<>0){
		$this->dnc_valor_irbpnr_ =round($this->dnc_base_irbpnr_ *$var_porcentaje_irbpnr,2);
	}else{
		$this->dnc_base_irbpnr_ =0;
		$this->dnc_valor_irbpnr_ =0;
	}
	$this->dnc_total_ =$this->dnc_subtotal_ +$this->dnc_valor_ice_ +$this->dnc_valor_iva_ +$this->dnc_valor_irbpnr_ ;
}	


if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off';
$modificado_dnc_producto_ = $this->dnc_producto_;
$modificado_dnc_base_irbpnr_ = $this->dnc_base_irbpnr_;
$modificado_dnc_porcentaje_irbpnr_ = $this->dnc_porcentaje_irbpnr_;
$modificado_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;
$modificado_dnc_total_ = $this->dnc_total_;
$modificado_dnc_subtotal_ = $this->dnc_subtotal_;
$modificado_dnc_valor_ice_ = $this->dnc_valor_ice_;
$modificado_dnc_valor_iva_ = $this->dnc_valor_iva_;
$this->nm_formatar_campos('dnc_producto_', 'dnc_base_irbpnr_', 'dnc_porcentaje_irbpnr_', 'dnc_valor_irbpnr_', 'dnc_total_', 'dnc_subtotal_', 'dnc_valor_ice_', 'dnc_valor_iva_');
$this->nmgp_refresh_fields = array();
if ($original_dnc_producto_ !== $modificado_dnc_producto_ || isset($this->nmgp_cmp_readonly['dnc_producto_']) || (isset($bFlagRead_dnc_producto_) && $bFlagRead_dnc_producto_))
{
    $this->nmgp_refresh_fields[] = 'dnc_producto_';
    $this->NM_ajax_changed['dnc_producto_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_base_irbpnr_ !== $modificado_dnc_base_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_base_irbpnr_']) || (isset($bFlagRead_dnc_base_irbpnr_) && $bFlagRead_dnc_base_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_base_irbpnr_';
    $this->NM_ajax_changed['dnc_base_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_porcentaje_irbpnr_ !== $modificado_dnc_porcentaje_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_porcentaje_irbpnr_']) || (isset($bFlagRead_dnc_porcentaje_irbpnr_) && $bFlagRead_dnc_porcentaje_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_porcentaje_irbpnr_';
    $this->NM_ajax_changed['dnc_porcentaje_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_irbpnr_ !== $modificado_dnc_valor_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_valor_irbpnr_']) || (isset($bFlagRead_dnc_valor_irbpnr_) && $bFlagRead_dnc_valor_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_irbpnr_';
    $this->NM_ajax_changed['dnc_valor_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_total_ !== $modificado_dnc_total_ || isset($this->nmgp_cmp_readonly['dnc_total_']) || (isset($bFlagRead_dnc_total_) && $bFlagRead_dnc_total_))
{
    $this->nmgp_refresh_fields[] = 'dnc_total_';
    $this->NM_ajax_changed['dnc_total_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_subtotal_ !== $modificado_dnc_subtotal_ || isset($this->nmgp_cmp_readonly['dnc_subtotal_']) || (isset($bFlagRead_dnc_subtotal_) && $bFlagRead_dnc_subtotal_))
{
    $this->nmgp_refresh_fields[] = 'dnc_subtotal_';
    $this->NM_ajax_changed['dnc_subtotal_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_ice_ !== $modificado_dnc_valor_ice_ || isset($this->nmgp_cmp_readonly['dnc_valor_ice_']) || (isset($bFlagRead_dnc_valor_ice_) && $bFlagRead_dnc_valor_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_ice_';
    $this->NM_ajax_changed['dnc_valor_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_iva_ !== $modificado_dnc_valor_iva_ || isset($this->nmgp_cmp_readonly['dnc_valor_iva_']) || (isset($bFlagRead_dnc_valor_iva_) && $bFlagRead_dnc_valor_iva_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_iva_';
    $this->NM_ajax_changed['dnc_valor_iva_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'dnc';
form_del_detalle_nota_credito_compras_pack_ajax_response();
exit;
}
function dnc_cantidad__onChange()
{
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  
$original_dnc_cantidad_ = $this->dnc_cantidad_;
$original_dnc_cantidad_facturada_ = $this->dnc_cantidad_facturada_;
$original_dnc_producto_ = $this->dnc_producto_;
$original_dnc_precio_unitario_ = $this->dnc_precio_unitario_;
$original_dnc_valor_ice_ = $this->dnc_valor_ice_;
$original_dnc_porcentaje_ice_ = $this->dnc_porcentaje_ice_;
$original_dnc_base_ice_ = $this->dnc_base_ice_;
$original_dnc_base_irbpnr_ = $this->dnc_base_irbpnr_;
$original_dnc_porcentaje_irbpnr_ = $this->dnc_porcentaje_irbpnr_;
$original_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;
$original_dnc_subtotal_ = $this->dnc_subtotal_;
$original_dnc_descuento_ = $this->dnc_descuento_;
$original_dnc_base_iva_ = $this->dnc_base_iva_;
$original_dnc_valor_iva_ = $this->dnc_valor_iva_;
$original_dnc_total_ = $this->dnc_total_;

if($this->dnc_cantidad_ >$this->dnc_cantidad_facturada_ ){
	$this->nm_mens_alert[] = "La cantidad en la Nota de Crédito no puede ser mayor a la Facturada"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("La cantidad en la Nota de Crédito no puede ser mayor a la Facturada"); }$this->dnc_cantidad_ =$this->dnc_cantidad_facturada_ ;
}

if($this->dnc_producto_ <>''){
	$var_porcentaje_iva=0;
	$var_porcentaje_ic=0;
	$var_porcentaje_irbpnr=0;
	$check_sql = "SELECT 
					pro_precio,
					pro_descuento,
					pro_por_iva,
					pro_por_ice,
					pro_por_irbpnr,
					iva_porcentaje,
					ice_porcentaje,
					irbpnr_porcentaje 
				  FROM v_del_producto
				  WHERE pro_codigo='" . $this->dnc_producto_  . "'
				  and pro_empresa='".$this->sc_temp_Igtech_RucEmpresa."';";
	 
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
		if($this->dnc_precio_unitario_ ==''){
			$this->dnc_precio_unitario_ =$this->rs[0][0];
		}
		$var_porcentaje_iva=$this->rs[0][5];
		$var_porcentaje_ice=$this->rs[0][6];
		$var_porcentaje_irbpnr=$this->rs[0][7];
	}
	
	$this->dnc_subtotal_ =$this->dnc_cantidad_ *($this->dnc_precio_unitario_ -$this->dnc_descuento_ );
	
	if($this->dnc_base_ice_ <>''and $this->dnc_base_ice_ <>0 and $var_porcentaje_ice<>0 ){
		 $this->dnc_valor_ice_ =$this->dnc_base_ice_ *$var_porcentaje_ice;
		 $this->dnc_base_iva_ =$this->dnc_subtotal_ +$this->dnc_valor_ice_ ;
		 $this->dnc_valor_iva_ =round($this->dnc_base_iva_ *$var_porcentaje_iva/100,2);
	}else{
		 $this->dnc_base_iva_ =$this->dnc_subtotal_ ;
		 $this->dnc_valor_iva_ =round($this->dnc_base_iva_ *$var_porcentaje_iva/100,2);
		 $this->dnc_base_ice_ =0;  
		 $this->dnc_valor_ice_ =0;
	}
	if($this->dnc_base_irbpnr_ <>''and $this->dnc_base_irbpnr_ <>0 and $var_porcentaje_irbpnr<>0){
	     $this->dnc_valor_irbpnr_ =round($this->dnc_base_irbpnr_ *$var_porcentaje_irbpnr,2);
	}else{
		 $this->dnc_valor_irbpnr_ =0;
	}
	$this->dnc_total_ =$this->dnc_subtotal_ +$this->dnc_valor_ice_ +$this->dnc_valor_iva_ +$this->dnc_valor_irbpnr_ ;
}	


if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off';
$modificado_dnc_cantidad_ = $this->dnc_cantidad_;
$modificado_dnc_cantidad_facturada_ = $this->dnc_cantidad_facturada_;
$modificado_dnc_producto_ = $this->dnc_producto_;
$modificado_dnc_precio_unitario_ = $this->dnc_precio_unitario_;
$modificado_dnc_valor_ice_ = $this->dnc_valor_ice_;
$modificado_dnc_porcentaje_ice_ = $this->dnc_porcentaje_ice_;
$modificado_dnc_base_ice_ = $this->dnc_base_ice_;
$modificado_dnc_base_irbpnr_ = $this->dnc_base_irbpnr_;
$modificado_dnc_porcentaje_irbpnr_ = $this->dnc_porcentaje_irbpnr_;
$modificado_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;
$modificado_dnc_subtotal_ = $this->dnc_subtotal_;
$modificado_dnc_descuento_ = $this->dnc_descuento_;
$modificado_dnc_base_iva_ = $this->dnc_base_iva_;
$modificado_dnc_valor_iva_ = $this->dnc_valor_iva_;
$modificado_dnc_total_ = $this->dnc_total_;
$this->nm_formatar_campos('dnc_cantidad_', 'dnc_cantidad_facturada_', 'dnc_producto_', 'dnc_precio_unitario_', 'dnc_valor_ice_', 'dnc_porcentaje_ice_', 'dnc_base_ice_', 'dnc_base_irbpnr_', 'dnc_porcentaje_irbpnr_', 'dnc_valor_irbpnr_', 'dnc_subtotal_', 'dnc_descuento_', 'dnc_base_iva_', 'dnc_valor_iva_', 'dnc_total_');
$this->nmgp_refresh_fields = array();
if ($original_dnc_cantidad_ !== $modificado_dnc_cantidad_ || isset($this->nmgp_cmp_readonly['dnc_cantidad_']) || (isset($bFlagRead_dnc_cantidad_) && $bFlagRead_dnc_cantidad_))
{
    $this->nmgp_refresh_fields[] = 'dnc_cantidad_';
    $this->NM_ajax_changed['dnc_cantidad_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_cantidad_facturada_ !== $modificado_dnc_cantidad_facturada_ || isset($this->nmgp_cmp_readonly['dnc_cantidad_facturada_']) || (isset($bFlagRead_dnc_cantidad_facturada_) && $bFlagRead_dnc_cantidad_facturada_))
{
    $this->nmgp_refresh_fields[] = 'dnc_cantidad_facturada_';
    $this->NM_ajax_changed['dnc_cantidad_facturada_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_producto_ !== $modificado_dnc_producto_ || isset($this->nmgp_cmp_readonly['dnc_producto_']) || (isset($bFlagRead_dnc_producto_) && $bFlagRead_dnc_producto_))
{
    $this->nmgp_refresh_fields[] = 'dnc_producto_';
    $this->NM_ajax_changed['dnc_producto_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_precio_unitario_ !== $modificado_dnc_precio_unitario_ || isset($this->nmgp_cmp_readonly['dnc_precio_unitario_']) || (isset($bFlagRead_dnc_precio_unitario_) && $bFlagRead_dnc_precio_unitario_))
{
    $this->nmgp_refresh_fields[] = 'dnc_precio_unitario_';
    $this->NM_ajax_changed['dnc_precio_unitario_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_ice_ !== $modificado_dnc_valor_ice_ || isset($this->nmgp_cmp_readonly['dnc_valor_ice_']) || (isset($bFlagRead_dnc_valor_ice_) && $bFlagRead_dnc_valor_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_ice_';
    $this->NM_ajax_changed['dnc_valor_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_porcentaje_ice_ !== $modificado_dnc_porcentaje_ice_ || isset($this->nmgp_cmp_readonly['dnc_porcentaje_ice_']) || (isset($bFlagRead_dnc_porcentaje_ice_) && $bFlagRead_dnc_porcentaje_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_porcentaje_ice_';
    $this->NM_ajax_changed['dnc_porcentaje_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_base_ice_ !== $modificado_dnc_base_ice_ || isset($this->nmgp_cmp_readonly['dnc_base_ice_']) || (isset($bFlagRead_dnc_base_ice_) && $bFlagRead_dnc_base_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_base_ice_';
    $this->NM_ajax_changed['dnc_base_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_base_irbpnr_ !== $modificado_dnc_base_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_base_irbpnr_']) || (isset($bFlagRead_dnc_base_irbpnr_) && $bFlagRead_dnc_base_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_base_irbpnr_';
    $this->NM_ajax_changed['dnc_base_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_porcentaje_irbpnr_ !== $modificado_dnc_porcentaje_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_porcentaje_irbpnr_']) || (isset($bFlagRead_dnc_porcentaje_irbpnr_) && $bFlagRead_dnc_porcentaje_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_porcentaje_irbpnr_';
    $this->NM_ajax_changed['dnc_porcentaje_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_irbpnr_ !== $modificado_dnc_valor_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_valor_irbpnr_']) || (isset($bFlagRead_dnc_valor_irbpnr_) && $bFlagRead_dnc_valor_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_irbpnr_';
    $this->NM_ajax_changed['dnc_valor_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_subtotal_ !== $modificado_dnc_subtotal_ || isset($this->nmgp_cmp_readonly['dnc_subtotal_']) || (isset($bFlagRead_dnc_subtotal_) && $bFlagRead_dnc_subtotal_))
{
    $this->nmgp_refresh_fields[] = 'dnc_subtotal_';
    $this->NM_ajax_changed['dnc_subtotal_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_descuento_ !== $modificado_dnc_descuento_ || isset($this->nmgp_cmp_readonly['dnc_descuento_']) || (isset($bFlagRead_dnc_descuento_) && $bFlagRead_dnc_descuento_))
{
    $this->nmgp_refresh_fields[] = 'dnc_descuento_';
    $this->NM_ajax_changed['dnc_descuento_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_base_iva_ !== $modificado_dnc_base_iva_ || isset($this->nmgp_cmp_readonly['dnc_base_iva_']) || (isset($bFlagRead_dnc_base_iva_) && $bFlagRead_dnc_base_iva_))
{
    $this->nmgp_refresh_fields[] = 'dnc_base_iva_';
    $this->NM_ajax_changed['dnc_base_iva_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_iva_ !== $modificado_dnc_valor_iva_ || isset($this->nmgp_cmp_readonly['dnc_valor_iva_']) || (isset($bFlagRead_dnc_valor_iva_) && $bFlagRead_dnc_valor_iva_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_iva_';
    $this->NM_ajax_changed['dnc_valor_iva_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_total_ !== $modificado_dnc_total_ || isset($this->nmgp_cmp_readonly['dnc_total_']) || (isset($bFlagRead_dnc_total_) && $bFlagRead_dnc_total_))
{
    $this->nmgp_refresh_fields[] = 'dnc_total_';
    $this->NM_ajax_changed['dnc_total_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'dnc';
form_del_detalle_nota_credito_compras_pack_ajax_response();
exit;
}
function dnc_valor_ice__onChange()
{
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  
$original_dnc_producto_ = $this->dnc_producto_;
$original_dnc_valor_ice_ = $this->dnc_valor_ice_;
$original_dnc_porcentaje_ice_ = $this->dnc_porcentaje_ice_;
$original_dnc_base_ice_ = $this->dnc_base_ice_;
$original_dnc_base_iva_ = $this->dnc_base_iva_;
$original_dnc_subtotal_ = $this->dnc_subtotal_;
$original_dnc_valor_iva_ = $this->dnc_valor_iva_;
$original_dnc_total_ = $this->dnc_total_;
$original_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;

if($this->dnc_producto_ <>''){
	$var_porcentaje_iva=0;
	$var_porcentaje_ic=0;
	$var_porcentaje_irbpnr=0;
	$var_porcentaje_irbpnr=0;
	$check_sql = "SELECT 
					pro_precio,
					pro_descuento,
					pro_por_iva,
					pro_por_ice,
					pro_por_irbpnr,
					iva_porcentaje,
					ice_porcentaje,
					irbpnr_porcentaje 
				FROM v_del_producto
				WHERE pro_codigo='" . $this->dnc_producto_  . "'
				and pro_empresa='".$this->sc_temp_Igtech_RucEmpresa."';";
	 
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
		$var_porcentaje_iva=$this->rs[0][5];
		$var_porcentaje_ice=$this->rs[0][6];
		$var_porcentaje_irbpnr=$this->rs[0][7];
	}
	
	if($this->dnc_valor_ice_ <>''and $this->dnc_valor_ice_ <>0){
		 $this->dnc_base_iva_ =$this->dnc_subtotal_ +$this->dnc_valor_ice_ ;
		 $this->dnc_valor_iva_ =round($this->dnc_base_iva_ *$var_porcentaje_iva/100,2);
	}else{
		 $this->dnc_base_iva_ =$this->dnc_subtotal_ ;
		 $this->dnc_valor_iva_ =round($this->dnc_base_iva_ *$var_porcentaje_iva/100,2);
	}
	$this->dnc_total_ =$this->dnc_subtotal_ +$this->dnc_valor_ice_ +$this->dnc_valor_iva_ +$this->dnc_valor_irbpnr_ ;
}	


if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off';
$modificado_dnc_producto_ = $this->dnc_producto_;
$modificado_dnc_valor_ice_ = $this->dnc_valor_ice_;
$modificado_dnc_porcentaje_ice_ = $this->dnc_porcentaje_ice_;
$modificado_dnc_base_ice_ = $this->dnc_base_ice_;
$modificado_dnc_base_iva_ = $this->dnc_base_iva_;
$modificado_dnc_subtotal_ = $this->dnc_subtotal_;
$modificado_dnc_valor_iva_ = $this->dnc_valor_iva_;
$modificado_dnc_total_ = $this->dnc_total_;
$modificado_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;
$this->nm_formatar_campos('dnc_producto_', 'dnc_valor_ice_', 'dnc_porcentaje_ice_', 'dnc_base_ice_', 'dnc_base_iva_', 'dnc_subtotal_', 'dnc_valor_iva_', 'dnc_total_', 'dnc_valor_irbpnr_');
$this->nmgp_refresh_fields = array();
if ($original_dnc_producto_ !== $modificado_dnc_producto_ || isset($this->nmgp_cmp_readonly['dnc_producto_']) || (isset($bFlagRead_dnc_producto_) && $bFlagRead_dnc_producto_))
{
    $this->nmgp_refresh_fields[] = 'dnc_producto_';
    $this->NM_ajax_changed['dnc_producto_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_ice_ !== $modificado_dnc_valor_ice_ || isset($this->nmgp_cmp_readonly['dnc_valor_ice_']) || (isset($bFlagRead_dnc_valor_ice_) && $bFlagRead_dnc_valor_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_ice_';
    $this->NM_ajax_changed['dnc_valor_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_porcentaje_ice_ !== $modificado_dnc_porcentaje_ice_ || isset($this->nmgp_cmp_readonly['dnc_porcentaje_ice_']) || (isset($bFlagRead_dnc_porcentaje_ice_) && $bFlagRead_dnc_porcentaje_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_porcentaje_ice_';
    $this->NM_ajax_changed['dnc_porcentaje_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_base_ice_ !== $modificado_dnc_base_ice_ || isset($this->nmgp_cmp_readonly['dnc_base_ice_']) || (isset($bFlagRead_dnc_base_ice_) && $bFlagRead_dnc_base_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_base_ice_';
    $this->NM_ajax_changed['dnc_base_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_base_iva_ !== $modificado_dnc_base_iva_ || isset($this->nmgp_cmp_readonly['dnc_base_iva_']) || (isset($bFlagRead_dnc_base_iva_) && $bFlagRead_dnc_base_iva_))
{
    $this->nmgp_refresh_fields[] = 'dnc_base_iva_';
    $this->NM_ajax_changed['dnc_base_iva_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_subtotal_ !== $modificado_dnc_subtotal_ || isset($this->nmgp_cmp_readonly['dnc_subtotal_']) || (isset($bFlagRead_dnc_subtotal_) && $bFlagRead_dnc_subtotal_))
{
    $this->nmgp_refresh_fields[] = 'dnc_subtotal_';
    $this->NM_ajax_changed['dnc_subtotal_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_iva_ !== $modificado_dnc_valor_iva_ || isset($this->nmgp_cmp_readonly['dnc_valor_iva_']) || (isset($bFlagRead_dnc_valor_iva_) && $bFlagRead_dnc_valor_iva_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_iva_';
    $this->NM_ajax_changed['dnc_valor_iva_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_total_ !== $modificado_dnc_total_ || isset($this->nmgp_cmp_readonly['dnc_total_']) || (isset($bFlagRead_dnc_total_) && $bFlagRead_dnc_total_))
{
    $this->nmgp_refresh_fields[] = 'dnc_total_';
    $this->NM_ajax_changed['dnc_total_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_irbpnr_ !== $modificado_dnc_valor_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_valor_irbpnr_']) || (isset($bFlagRead_dnc_valor_irbpnr_) && $bFlagRead_dnc_valor_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_irbpnr_';
    $this->NM_ajax_changed['dnc_valor_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'dnc';
form_del_detalle_nota_credito_compras_pack_ajax_response();
exit;
}
function dnc_valor_irbpnr__onChange()
{
$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'on';
  
$original_dnc_total_ = $this->dnc_total_;
$original_dnc_subtotal_ = $this->dnc_subtotal_;
$original_dnc_valor_ice_ = $this->dnc_valor_ice_;
$original_dnc_valor_iva_ = $this->dnc_valor_iva_;
$original_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;

$this->dnc_total_ =$this->dnc_subtotal_ +$this->dnc_valor_ice_ +$this->dnc_valor_iva_ +$this->dnc_valor_irbpnr_ ;

$modificado_dnc_total_ = $this->dnc_total_;
$modificado_dnc_subtotal_ = $this->dnc_subtotal_;
$modificado_dnc_valor_ice_ = $this->dnc_valor_ice_;
$modificado_dnc_valor_iva_ = $this->dnc_valor_iva_;
$modificado_dnc_valor_irbpnr_ = $this->dnc_valor_irbpnr_;
$this->nm_formatar_campos('dnc_total_', 'dnc_subtotal_', 'dnc_valor_ice_', 'dnc_valor_iva_', 'dnc_valor_irbpnr_');
$this->nmgp_refresh_fields = array();
if ($original_dnc_total_ !== $modificado_dnc_total_ || isset($this->nmgp_cmp_readonly['dnc_total_']) || (isset($bFlagRead_dnc_total_) && $bFlagRead_dnc_total_))
{
    $this->nmgp_refresh_fields[] = 'dnc_total_';
    $this->NM_ajax_changed['dnc_total_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_subtotal_ !== $modificado_dnc_subtotal_ || isset($this->nmgp_cmp_readonly['dnc_subtotal_']) || (isset($bFlagRead_dnc_subtotal_) && $bFlagRead_dnc_subtotal_))
{
    $this->nmgp_refresh_fields[] = 'dnc_subtotal_';
    $this->NM_ajax_changed['dnc_subtotal_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_ice_ !== $modificado_dnc_valor_ice_ || isset($this->nmgp_cmp_readonly['dnc_valor_ice_']) || (isset($bFlagRead_dnc_valor_ice_) && $bFlagRead_dnc_valor_ice_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_ice_';
    $this->NM_ajax_changed['dnc_valor_ice_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_iva_ !== $modificado_dnc_valor_iva_ || isset($this->nmgp_cmp_readonly['dnc_valor_iva_']) || (isset($bFlagRead_dnc_valor_iva_) && $bFlagRead_dnc_valor_iva_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_iva_';
    $this->NM_ajax_changed['dnc_valor_iva_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_dnc_valor_irbpnr_ !== $modificado_dnc_valor_irbpnr_ || isset($this->nmgp_cmp_readonly['dnc_valor_irbpnr_']) || (isset($bFlagRead_dnc_valor_irbpnr_) && $bFlagRead_dnc_valor_irbpnr_))
{
    $this->nmgp_refresh_fields[] = 'dnc_valor_irbpnr_';
    $this->NM_ajax_changed['dnc_valor_irbpnr_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'dnc';
form_del_detalle_nota_credito_compras_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_detalle_nota_credito_compras']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_del_detalle_nota_credito_compras_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
   if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
   {
        $this->Form_Corpo(true);
   }
   elseif ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
   {
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['table_refresh'] = true;
        $this->Form_Table(true);
        $this->Form_Corpo(false, true);
   }
   else
   {
        $this->Form_Init();
        $this->Form_Table();
        $this->Form_Corpo();
        $this->Form_Fim();
   }
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("dn_id", "dn_factura", "dn_empresa", "dn_producto", "dn_descripcion", "dn_cantidad", "dn_precio_unitario", "dn_subtotal", "dn_descuento", "dn_base_iva", "dn_porcentaje_iva", "dn_valor_iva", "dn_base_ice", "dn_porcentaje_ice", "dn_valor_ice", "dn_base_irbpnr", "dn_porcentaje_irbpnr", "dn_valor_irbpnr", "dn_total"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['csrf_token'];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_del_detalle_nota_credito_compras_pack_ajax_response();
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter_form'] . " and ((dnc_cantidad>0
and dnc_nota_credito=" . $_SESSION['var_nota_credito'] . ")) and (" . $comando . ")";
      }
      else
      {
          $sc_where = " where (dnc_cantidad>0
and dnc_nota_credito=" . $_SESSION['var_nota_credito'] . ") and (" . $comando . ")";
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_del_detalle_nota_credito_compras = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['total'] = $qt_geral_reg_form_del_detalle_nota_credito_compras;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_detalle_nota_credito_compras_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_detalle_nota_credito_compras_pack_ajax_response();
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
      $nm_numeric[] = "dnc_id";$nm_numeric[] = "dnc_factura";$nm_numeric[] = "dnc_cantidad_facturada";$nm_numeric[] = "dnc_cantidad";$nm_numeric[] = "dnc_precio_unitario";$nm_numeric[] = "dnc_subtotal";$nm_numeric[] = "dnc_descuento";$nm_numeric[] = "dnc_base_iva";$nm_numeric[] = "dnc_porcentaje_iva";$nm_numeric[] = "dnc_valor_iva";$nm_numeric[] = "dnc_base_ice";$nm_numeric[] = "dnc_valor_ice";$nm_numeric[] = "dnc_base_irbpnr";$nm_numeric[] = "dnc_valor_irbpnr";$nm_numeric[] = "dnc_total";$nm_numeric[] = "dnc_nota_credito";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['decimal_db'] == ".")
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
       $nmgp_saida_form = "form_del_detalle_nota_credito_compras_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_del_detalle_nota_credito_compras_fim.php";
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
       form_del_detalle_nota_credito_compras_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['masterValue']);
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
    function sc_master_value($sIndex, $sValue)
    {
        $sIndex = strtolower($sIndex);
        $this->NM_ajax_info['masterValue'][$sIndex] = $sValue;
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['masterValue'] = $this->NM_ajax_info['masterValue'];
    } // sc_master_value
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
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-1");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-2", "sys_separator.sc-unique-btn-6", "sys_separator.sc-unique-btn-11");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_t.sc-unique-btn-5", "sc_b_sai_t.sc-unique-btn-4");
                break;
            case "birpara":
                return array("brec_b");
                break;
            case "first":
                return array("sc_b_ini_b.sc-unique-btn-7");
                break;
            case "back":
                return array("sc_b_ret_b.sc-unique-btn-8");
                break;
            case "forward":
                return array("sc_b_avc_b.sc-unique-btn-9");
                break;
            case "last":
                return array("sc_b_fim_b.sc-unique-btn-10");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['link_info']['compact_mode']) {
            return;
        }
?>
    <tr><td class="sc-app-header">
   <TABLE width="100%" class="scFormHeader">
    <TR align="center">
     <TD style="padding: 0px">
      <TABLE style="padding: 0px; border-spacing: 0px; border-width: 0px;" width="100%">
       <TR valign="middle">
        <TD align="left" rowspan="3" class="scFormHeaderFont">
          
        </TD>
        <TD align="left" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="center" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="right" class="scFormHeaderFont">
          
        </TD>
       </TR>
       <TR valign="middle">
        <TD align="left" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="center" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="right" class="scFormHeaderFont">
          
        </TD>
       </TR>
       <TR valign="middle">
        <TD align="left" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="center" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="right" class="scFormHeaderFont">
          
        </TD>
       </TR>
      </TABLE>
     </TD>
    </TR>
   </TABLE>
    </td></tr>
<?php
    }

    function displayAppFooter()
    {
    }

    function displayAppToolbars()
    {
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_nota_credito_compras']['ordem_ord'] == " desc") {
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
            case "dnc_id":
                return true;
            case "dnc_factura":
                return true;
            case "dnc_cantidad_facturada":
                return true;
            case "dnc_cantidad":
                return true;
            case "dnc_precio_unitario":
                return true;
            case "dnc_descuento":
                return true;
            case "dnc_subtotal":
                return true;
            case "dnc_base_iva":
                return true;
            case "dnc_valor_iva":
                return true;
            case "dnc_base_ice":
                return true;
            case "dnc_valor_ice":
                return true;
            case "dnc_base_irbpnr":
                return true;
            case "dnc_valor_irbpnr":
                return true;
            case "dnc_total":
                return true;
            case "dnc_nota_credito":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "dnc_id":
                return 'desc';
            case "dnc_factura":
                return 'desc';
            case "dnc_cantidad_facturada":
                return 'desc';
            case "dnc_cantidad":
                return 'desc';
            case "dnc_precio_unitario":
                return 'desc';
            case "dnc_descuento":
                return 'desc';
            case "dnc_subtotal":
                return 'desc';
            case "dnc_base_iva":
                return 'desc';
            case "dnc_porcentaje_iva":
                return 'desc';
            case "dnc_valor_iva":
                return 'desc';
            case "dnc_base_ice":
                return 'desc';
            case "dnc_valor_ice":
                return 'desc';
            case "dnc_base_irbpnr":
                return 'desc';
            case "dnc_valor_irbpnr":
                return 'desc';
            case "dnc_total":
                return 'desc';
            case "dnc_nota_credito":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
