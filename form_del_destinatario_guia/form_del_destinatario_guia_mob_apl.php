<?php
//
class form_del_destinatario_guia_mob_apl
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
   var $dg_id;
   var $dg_guia;
   var $dg_empresa;
   var $dg_identificacion_destinatario;
   var $dg_nombre_destinatario;
   var $dg_establecimiento_destino;
   var $dg_establecimiento_destino_1;
   var $dg_documento_aduanero;
   var $dg_iddoc_sustento;
   var $dg_coddoc_sustento;
   var $dg_serie_sustento;
   var $dg_secuencial_sustento;
   var $dg_autorizacion_sustento;
   var $dg_fecha_sustento;
   var $dg_direccion_destino;
   var $dg_motivo_traslado;
   var $dg_ruta;
   var $dg_tipo;
   var $productos;
   var $tipo_sustento;
   var $serie_sustento;
   var $secuencial_sustento;
   var $autorizacion_sustento;
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
          if (isset($this->NM_ajax_info['param']['autorizacion_sustento']))
          {
              $this->autorizacion_sustento = $this->NM_ajax_info['param']['autorizacion_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['dg_autorizacion_sustento']))
          {
              $this->dg_autorizacion_sustento = $this->NM_ajax_info['param']['dg_autorizacion_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['dg_coddoc_sustento']))
          {
              $this->dg_coddoc_sustento = $this->NM_ajax_info['param']['dg_coddoc_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['dg_direccion_destino']))
          {
              $this->dg_direccion_destino = $this->NM_ajax_info['param']['dg_direccion_destino'];
          }
          if (isset($this->NM_ajax_info['param']['dg_documento_aduanero']))
          {
              $this->dg_documento_aduanero = $this->NM_ajax_info['param']['dg_documento_aduanero'];
          }
          if (isset($this->NM_ajax_info['param']['dg_empresa']))
          {
              $this->dg_empresa = $this->NM_ajax_info['param']['dg_empresa'];
          }
          if (isset($this->NM_ajax_info['param']['dg_establecimiento_destino']))
          {
              $this->dg_establecimiento_destino = $this->NM_ajax_info['param']['dg_establecimiento_destino'];
          }
          if (isset($this->NM_ajax_info['param']['dg_fecha_sustento']))
          {
              $this->dg_fecha_sustento = $this->NM_ajax_info['param']['dg_fecha_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['dg_guia']))
          {
              $this->dg_guia = $this->NM_ajax_info['param']['dg_guia'];
          }
          if (isset($this->NM_ajax_info['param']['dg_id']))
          {
              $this->dg_id = $this->NM_ajax_info['param']['dg_id'];
          }
          if (isset($this->NM_ajax_info['param']['dg_iddoc_sustento']))
          {
              $this->dg_iddoc_sustento = $this->NM_ajax_info['param']['dg_iddoc_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['dg_identificacion_destinatario']))
          {
              $this->dg_identificacion_destinatario = $this->NM_ajax_info['param']['dg_identificacion_destinatario'];
          }
          if (isset($this->NM_ajax_info['param']['dg_motivo_traslado']))
          {
              $this->dg_motivo_traslado = $this->NM_ajax_info['param']['dg_motivo_traslado'];
          }
          if (isset($this->NM_ajax_info['param']['dg_nombre_destinatario']))
          {
              $this->dg_nombre_destinatario = $this->NM_ajax_info['param']['dg_nombre_destinatario'];
          }
          if (isset($this->NM_ajax_info['param']['dg_ruta']))
          {
              $this->dg_ruta = $this->NM_ajax_info['param']['dg_ruta'];
          }
          if (isset($this->NM_ajax_info['param']['dg_secuencial_sustento']))
          {
              $this->dg_secuencial_sustento = $this->NM_ajax_info['param']['dg_secuencial_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['dg_serie_sustento']))
          {
              $this->dg_serie_sustento = $this->NM_ajax_info['param']['dg_serie_sustento'];
          }
          if (isset($this->NM_ajax_info['param']['dg_tipo']))
          {
              $this->dg_tipo = $this->NM_ajax_info['param']['dg_tipo'];
          }
          if (isset($this->NM_ajax_info['param']['fecha_sustento']))
          {
              $this->fecha_sustento = $this->NM_ajax_info['param']['fecha_sustento'];
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
          if (isset($this->NM_ajax_info['param']['productos']))
          {
              $this->productos = $this->NM_ajax_info['param']['productos'];
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
          if (isset($this->NM_ajax_info['param']['tipo_sustento']))
          {
              $this->tipo_sustento = $this->NM_ajax_info['param']['tipo_sustento'];
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
      if (isset($this->var_id_destinatario) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_id_destinatario'] = $this->var_id_destinatario;
      }
      if (isset($this->var_id_guia) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_id_guia'] = $this->var_id_guia;
      }
      if (isset($this->Igtech_RucEmpresa) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (isset($_POST["var_id_destinatario"]) && isset($this->var_id_destinatario)) 
      {
          $_SESSION['var_id_destinatario'] = $this->var_id_destinatario;
      }
      if (isset($_POST["var_id_guia"]) && isset($this->var_id_guia)) 
      {
          $_SESSION['var_id_guia'] = $this->var_id_guia;
      }
      if (isset($_POST["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_POST["Igtech_RucEmpresa"]) && isset($_POST["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_POST["igtech_rucempresa"];
      }
      if (isset($_GET["var_id_destinatario"]) && isset($this->var_id_destinatario)) 
      {
          $_SESSION['var_id_destinatario'] = $this->var_id_destinatario;
      }
      if (isset($_GET["var_id_guia"]) && isset($this->var_id_guia)) 
      {
          $_SESSION['var_id_guia'] = $this->var_id_guia;
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
          $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['embutida_parms']);
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
                 nm_limpa_str_form_del_destinatario_guia_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->var_id_destinatario)) 
          {
              $_SESSION['var_id_destinatario'] = $this->var_id_destinatario;
          }
          if (isset($this->var_id_guia)) 
          {
              $_SESSION['var_id_guia'] = $this->var_id_guia;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['total']);
          }
          if (!isset($_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['total']))
          {
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->var_id_destinatario)) 
          {
              $_SESSION['var_id_destinatario'] = $this->var_id_destinatario;
          }
          if (isset($this->var_id_guia)) 
          {
              $_SESSION['var_id_guia'] = $this->var_id_guia;
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
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_del_destinatario_guia_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_del_destinatario_guia_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_destinatario_guia_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_destinatario_guia_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_destinatario_guia_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_destinatario_guia_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_del_destinatario_guia_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_destinatario_guia_mob']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_destinatario_guia";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_del_destinatario_guia_mob")
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
      $this->nm_new_label['dg_id'] = '' . $this->Ini->Nm_lang['lang_id'] . '';
      $this->nm_new_label['dg_guia'] = '' . $this->Ini->Nm_lang['lang_guia_remision'] . '';
      $this->nm_new_label['dg_empresa'] = '' . $this->Ini->Nm_lang['lang_empresa'] . '';
      $this->nm_new_label['dg_identificacion_destinatario'] = '' . $this->Ini->Nm_lang['lang_lot_identificacion'] . '';
      $this->nm_new_label['dg_nombre_destinatario'] = '' . $this->Ini->Nm_lang['lang_destinatario'] . '';
      $this->nm_new_label['dg_establecimiento_destino'] = '' . $this->Ini->Nm_lang['lang_establecimiento_destino'] . '';
      $this->nm_new_label['dg_documento_aduanero'] = '' . $this->Ini->Nm_lang['lang_documento_aduanero'] . '';
      $this->nm_new_label['dg_iddoc_sustento'] = '' . $this->Ini->Nm_lang['lang_documento_sustento'] . '';
      $this->nm_new_label['dg_coddoc_sustento'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['dg_serie_sustento'] = '' . $this->Ini->Nm_lang['lang_serie_sri'] . '';
      $this->nm_new_label['dg_secuencial_sustento'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['dg_autorizacion_sustento'] = '' . $this->Ini->Nm_lang['lang_autorizacion'] . '';
      $this->nm_new_label['dg_fecha_sustento'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['dg_direccion_destino'] = '' . $this->Ini->Nm_lang['lang_direccion_destino'] . '';
      $this->nm_new_label['dg_motivo_traslado'] = '' . $this->Ini->Nm_lang['lang_motivo'] . '';
      $this->nm_new_label['dg_ruta'] = '' . $this->Ini->Nm_lang['lang_ruta_transportista'] . '';
      $this->nm_new_label['tipo_sustento'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['serie_sustento'] = '' . $this->Ini->Nm_lang['lang_serie_sri'] . '';
      $this->nm_new_label['secuencial_sustento'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['autorizacion_sustento'] = '' . $this->Ini->Nm_lang['lang_autorizacion'] . '';
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


      $this->arr_buttons['desde_factura']['hint']             = "";
      $this->arr_buttons['desde_factura']['type']             = "button";
      $this->arr_buttons['desde_factura']['value']            = "" . $this->Ini->Nm_lang['lang_desde_factura'] . "";
      $this->arr_buttons['desde_factura']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['desde_factura']['display_position'] = "text_right";
      $this->arr_buttons['desde_factura']['style']            = "default";
      $this->arr_buttons['desde_factura']['image']            = "";
      $this->arr_buttons['desde_factura']['has_fa']            = "true";
      $this->arr_buttons['desde_factura']['fontawesomeicon']            = "";

      $this->arr_buttons['entre_establecimientos']['hint']             = "";
      $this->arr_buttons['entre_establecimientos']['type']             = "button";
      $this->arr_buttons['entre_establecimientos']['value']            = "" . $this->Ini->Nm_lang['lang_entre_establecimientos'] . "";
      $this->arr_buttons['entre_establecimientos']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['entre_establecimientos']['display_position'] = "text_right";
      $this->arr_buttons['entre_establecimientos']['style']            = "default";
      $this->arr_buttons['entre_establecimientos']['image']            = "";
      $this->arr_buttons['entre_establecimientos']['has_fa']            = "true";
      $this->arr_buttons['entre_establecimientos']['fontawesomeicon']            = "";


      $_SESSION['scriptcase']['error_icon']['form_del_destinatario_guia_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_del_destinatario_guia_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      $this->nmgp_botoes['desde_factura'] = "on";
      $this->nmgp_botoes['entre_establecimientos'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_orig'] = " where (dg_id=" . $_SESSION['var_id_destinatario'] . ")";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_pesq'] = " where (dg_id=" . $_SESSION['var_id_destinatario'] . ")";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_destinatario_guia_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_destinatario_guia_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_destinatario_guia_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_form'];
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['tipo_sustento'] != "null"){$this->tipo_sustento = $this->nmgp_dados_form['tipo_sustento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['serie_sustento'] != "null"){$this->serie_sustento = $this->nmgp_dados_form['serie_sustento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['secuencial_sustento'] != "null"){$this->secuencial_sustento = $this->nmgp_dados_form['secuencial_sustento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['autorizacion_sustento'] != "null"){$this->autorizacion_sustento = $this->nmgp_dados_form['autorizacion_sustento'];} 
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
              if (in_array("form_del_destinatario_guia_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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
              include_once($this->Ini->path_embutida . 'form_del_destinatario_guia/form_del_destinatario_guia_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_del_destinatario_guia_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_del_destinatario_guia_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_del_destinatario_guia_mob_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_del_destinatario_guia/form_del_destinatario_guia_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_del_destinatario_guia_mob_erro.class.php"); 
      }
      $this->Erro      = new form_del_destinatario_guia_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opcao']))
         { 
             if ($this->dg_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_del_destinatario_guia_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['desde_factura'] = "off";
          $this->nmgp_botoes['entre_establecimientos'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['desde_factura'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['botoes']['desde_factura'];
          $this->nmgp_botoes['entre_establecimientos'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['botoes']['entre_establecimientos'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_form'];
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
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['reg_start'] = "";
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['total']);
          $detailAppName = 'form_del_detalle_guia_destinatario_mob';
          $detailAppObject = "form_del_detalle_guia_destinatario_mob";
          $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          if (!@is_dir($detailAppFolder)) {
              $detailAppName = substr($detailAppName, 0, -4);
              $detailAppObject = substr($detailAppObject, 0, -4);
              $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          }
          $detailAppObject .= '_apl';
          require_once($detailAppFolder . "/index.php");
          require_once($detailAppFolder . "/{$detailAppName}_apl.php");
          $this->form_del_detalle_guia_destinatario_mob = new $detailAppObject;
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

            $out1_img_cache = $_SESSION['scriptcase']['form_del_destinatario_guia_mob']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_del_destinatario_guia_mob']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($this->dg_id)) { $this->nm_limpa_alfa($this->dg_id); }
      if (isset($this->dg_guia)) { $this->nm_limpa_alfa($this->dg_guia); }
      if (isset($this->dg_empresa)) { $this->nm_limpa_alfa($this->dg_empresa); }
      if (isset($this->dg_identificacion_destinatario)) { $this->nm_limpa_alfa($this->dg_identificacion_destinatario); }
      if (isset($this->dg_nombre_destinatario)) { $this->nm_limpa_alfa($this->dg_nombre_destinatario); }
      if (isset($this->dg_establecimiento_destino)) { $this->nm_limpa_alfa($this->dg_establecimiento_destino); }
      if (isset($this->dg_documento_aduanero)) { $this->nm_limpa_alfa($this->dg_documento_aduanero); }
      if (isset($this->dg_iddoc_sustento)) { $this->nm_limpa_alfa($this->dg_iddoc_sustento); }
      if (isset($this->dg_coddoc_sustento)) { $this->nm_limpa_alfa($this->dg_coddoc_sustento); }
      if (isset($this->dg_serie_sustento)) { $this->nm_limpa_alfa($this->dg_serie_sustento); }
      if (isset($this->dg_secuencial_sustento)) { $this->nm_limpa_alfa($this->dg_secuencial_sustento); }
      if (isset($this->dg_autorizacion_sustento)) { $this->nm_limpa_alfa($this->dg_autorizacion_sustento); }
      if (isset($this->dg_direccion_destino)) { $this->nm_limpa_alfa($this->dg_direccion_destino); }
      if (isset($this->dg_motivo_traslado)) { $this->nm_limpa_alfa($this->dg_motivo_traslado); }
      if (isset($this->dg_ruta)) { $this->nm_limpa_alfa($this->dg_ruta); }
      if (isset($this->dg_tipo)) { $this->nm_limpa_alfa($this->dg_tipo); }
      if (isset($this->productos)) { $this->nm_limpa_alfa($this->productos); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- dg_iddoc_sustento
      $this->field_config['dg_iddoc_sustento']               = array();
      $this->field_config['dg_iddoc_sustento']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['dg_iddoc_sustento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dg_iddoc_sustento']['symbol_dec'] = '';
      $this->field_config['dg_iddoc_sustento']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['dg_iddoc_sustento']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fecha_sustento
      $this->field_config['fecha_sustento']                 = array();
      $this->field_config['fecha_sustento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha_sustento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_sustento']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha_sustento');
      //-- dg_fecha_sustento
      $this->field_config['dg_fecha_sustento']                 = array();
      $this->field_config['dg_fecha_sustento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['dg_fecha_sustento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['dg_fecha_sustento']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'dg_fecha_sustento');
      //-- dg_id
      $this->field_config['dg_id']               = array();
      $this->field_config['dg_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['dg_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dg_id']['symbol_dec'] = '';
      $this->field_config['dg_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['dg_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- dg_guia
      $this->field_config['dg_guia']               = array();
      $this->field_config['dg_guia']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['dg_guia']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['dg_guia']['symbol_dec'] = '';
      $this->field_config['dg_guia']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['dg_guia']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Gera_log_access'] = false;
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
          if ('validate_dg_iddoc_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_iddoc_sustento');
          }
          if ('validate_tipo_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipo_sustento');
          }
          if ('validate_serie_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'serie_sustento');
          }
          if ('validate_secuencial_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'secuencial_sustento');
          }
          if ('validate_autorizacion_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'autorizacion_sustento');
          }
          if ('validate_fecha_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fecha_sustento');
          }
          if ('validate_dg_coddoc_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_coddoc_sustento');
          }
          if ('validate_dg_serie_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_serie_sustento');
          }
          if ('validate_dg_secuencial_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_secuencial_sustento');
          }
          if ('validate_dg_autorizacion_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_autorizacion_sustento');
          }
          if ('validate_dg_fecha_sustento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_fecha_sustento');
          }
          if ('validate_dg_establecimiento_destino' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_establecimiento_destino');
          }
          if ('validate_dg_tipo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_tipo');
          }
          if ('validate_dg_nombre_destinatario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_nombre_destinatario');
          }
          if ('validate_dg_identificacion_destinatario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_identificacion_destinatario');
          }
          if ('validate_dg_direccion_destino' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_direccion_destino');
          }
          if ('validate_dg_documento_aduanero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_documento_aduanero');
          }
          if ('validate_dg_motivo_traslado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_motivo_traslado');
          }
          if ('validate_dg_ruta' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_ruta');
          }
          if ('validate_dg_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_id');
          }
          if ('validate_dg_guia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_guia');
          }
          if ('validate_dg_empresa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'dg_empresa');
          }
          if ('validate_productos' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'productos');
          }
          form_del_destinatario_guia_mob_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_dg_establecimiento_destino_onchange' == $this->NM_ajax_opcao)
          {
              $this->dg_establecimiento_destino_onChange();
          }
          if ('event_dg_iddoc_sustento_onchange' == $this->NM_ajax_opcao)
          {
              $this->dg_iddoc_sustento_onChange();
          }
          form_del_destinatario_guia_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['tipo_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tipo_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['tipo_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['serie_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->serie_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['serie_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['secuencial_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->secuencial_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['secuencial_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['autorizacion_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->autorizacion_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['autorizacion_sustento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['fecha_sustento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fecha_sustento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']['fecha_sustento'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_del_destinatario_guia_mob_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_del_destinatario_guia_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_del_destinatario_guia_mob_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['recarga'] = $this->nmgp_opcao;
          if ($this->sc_evento == "update")
          {
              $this->NM_close_db(); 
              $this->nmgp_redireciona(2); 
          }
          if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
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
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_del_destinatario_guia_mob_pack_ajax_response();
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
          form_del_destinatario_guia_mob_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_del_destinatario_guia_mob.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_destinatario_guia") ?></TITLE>
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
<form name="Fdown" method="get" action="form_del_destinatario_guia_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_del_destinatario_guia_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_del_destinatario_guia_mob.php" target="_self" style="display: none"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_destinatario_guia_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_del_destinatario_guia_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_destinatario_guia_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_del_destinatario_guia_mob_pack_ajax_response();
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
           case 'dg_iddoc_sustento':
               return "" . $this->Ini->Nm_lang['lang_documento_sustento'] . "";
               break;
           case 'tipo_sustento':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
               break;
           case 'serie_sustento':
               return "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
               break;
           case 'secuencial_sustento':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'autorizacion_sustento':
               return "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
               break;
           case 'fecha_sustento':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'dg_coddoc_sustento':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
               break;
           case 'dg_serie_sustento':
               return "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
               break;
           case 'dg_secuencial_sustento':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'dg_autorizacion_sustento':
               return "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
               break;
           case 'dg_fecha_sustento':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'dg_establecimiento_destino':
               return "" . $this->Ini->Nm_lang['lang_establecimiento_destino'] . "";
               break;
           case 'dg_tipo':
               return "Dg Tipo";
               break;
           case 'dg_nombre_destinatario':
               return "" . $this->Ini->Nm_lang['lang_destinatario'] . "";
               break;
           case 'dg_identificacion_destinatario':
               return "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
               break;
           case 'dg_direccion_destino':
               return "" . $this->Ini->Nm_lang['lang_direccion_destino'] . "";
               break;
           case 'dg_documento_aduanero':
               return "" . $this->Ini->Nm_lang['lang_documento_aduanero'] . "";
               break;
           case 'dg_motivo_traslado':
               return "" . $this->Ini->Nm_lang['lang_motivo'] . "";
               break;
           case 'dg_ruta':
               return "" . $this->Ini->Nm_lang['lang_ruta_transportista'] . "";
               break;
           case 'dg_id':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
               break;
           case 'dg_guia':
               return "" . $this->Ini->Nm_lang['lang_guia_remision'] . "";
               break;
           case 'dg_empresa':
               return "" . $this->Ini->Nm_lang['lang_empresa'] . "";
               break;
           case 'productos':
               return "productos";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_del_destinatario_guia_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_del_destinatario_guia_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_del_destinatario_guia_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_del_destinatario_guia_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'dg_iddoc_sustento' == $filtro)) || (is_array($filtro) && in_array('dg_iddoc_sustento', $filtro)))
        $this->ValidateField_dg_iddoc_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'tipo_sustento' == $filtro)) || (is_array($filtro) && in_array('tipo_sustento', $filtro)))
        $this->ValidateField_tipo_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'serie_sustento' == $filtro)) || (is_array($filtro) && in_array('serie_sustento', $filtro)))
        $this->ValidateField_serie_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'secuencial_sustento' == $filtro)) || (is_array($filtro) && in_array('secuencial_sustento', $filtro)))
        $this->ValidateField_secuencial_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'autorizacion_sustento' == $filtro)) || (is_array($filtro) && in_array('autorizacion_sustento', $filtro)))
        $this->ValidateField_autorizacion_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fecha_sustento' == $filtro)) || (is_array($filtro) && in_array('fecha_sustento', $filtro)))
        $this->ValidateField_fecha_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_coddoc_sustento' == $filtro)) || (is_array($filtro) && in_array('dg_coddoc_sustento', $filtro)))
        $this->ValidateField_dg_coddoc_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_serie_sustento' == $filtro)) || (is_array($filtro) && in_array('dg_serie_sustento', $filtro)))
        $this->ValidateField_dg_serie_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_secuencial_sustento' == $filtro)) || (is_array($filtro) && in_array('dg_secuencial_sustento', $filtro)))
        $this->ValidateField_dg_secuencial_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_autorizacion_sustento' == $filtro)) || (is_array($filtro) && in_array('dg_autorizacion_sustento', $filtro)))
        $this->ValidateField_dg_autorizacion_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_fecha_sustento' == $filtro)) || (is_array($filtro) && in_array('dg_fecha_sustento', $filtro)))
        $this->ValidateField_dg_fecha_sustento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_establecimiento_destino' == $filtro)) || (is_array($filtro) && in_array('dg_establecimiento_destino', $filtro)))
        $this->ValidateField_dg_establecimiento_destino($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_tipo' == $filtro)) || (is_array($filtro) && in_array('dg_tipo', $filtro)))
        $this->ValidateField_dg_tipo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_nombre_destinatario' == $filtro)) || (is_array($filtro) && in_array('dg_nombre_destinatario', $filtro)))
        $this->ValidateField_dg_nombre_destinatario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_identificacion_destinatario' == $filtro)) || (is_array($filtro) && in_array('dg_identificacion_destinatario', $filtro)))
        $this->ValidateField_dg_identificacion_destinatario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_direccion_destino' == $filtro)) || (is_array($filtro) && in_array('dg_direccion_destino', $filtro)))
        $this->ValidateField_dg_direccion_destino($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_documento_aduanero' == $filtro)) || (is_array($filtro) && in_array('dg_documento_aduanero', $filtro)))
        $this->ValidateField_dg_documento_aduanero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_motivo_traslado' == $filtro)) || (is_array($filtro) && in_array('dg_motivo_traslado', $filtro)))
        $this->ValidateField_dg_motivo_traslado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_ruta' == $filtro)) || (is_array($filtro) && in_array('dg_ruta', $filtro)))
        $this->ValidateField_dg_ruta($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_id' == $filtro)) || (is_array($filtro) && in_array('dg_id', $filtro)))
        $this->ValidateField_dg_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_guia' == $filtro)) || (is_array($filtro) && in_array('dg_guia', $filtro)))
        $this->ValidateField_dg_guia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'dg_empresa' == $filtro)) || (is_array($filtro) && in_array('dg_empresa', $filtro)))
        $this->ValidateField_dg_empresa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'productos' == $filtro)) || (is_array($filtro) && in_array('productos', $filtro)))
        $this->ValidateField_productos($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

    function ValidateField_dg_iddoc_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_iddoc_sustento'])) {
          nm_limpa_numero($this->dg_iddoc_sustento, $this->field_config['dg_iddoc_sustento']['symbol_grp']) ; 
          return;
      }
      if ($this->dg_iddoc_sustento === "" || is_null($this->dg_iddoc_sustento))  
      { 
          $this->dg_iddoc_sustento = 0;
          $this->sc_force_zero[] = 'dg_iddoc_sustento';
      } 
      nm_limpa_numero($this->dg_iddoc_sustento, $this->field_config['dg_iddoc_sustento']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dg_iddoc_sustento != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->dg_iddoc_sustento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_documento_sustento'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dg_iddoc_sustento']))
                  {
                      $Campos_Erros['dg_iddoc_sustento'] = array();
                  }
                  $Campos_Erros['dg_iddoc_sustento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dg_iddoc_sustento']) || !is_array($this->NM_ajax_info['errList']['dg_iddoc_sustento']))
                  {
                      $this->NM_ajax_info['errList']['dg_iddoc_sustento'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_iddoc_sustento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dg_iddoc_sustento, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_documento_sustento'] . "; " ; 
                  if (!isset($Campos_Erros['dg_iddoc_sustento']))
                  {
                      $Campos_Erros['dg_iddoc_sustento'] = array();
                  }
                  $Campos_Erros['dg_iddoc_sustento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dg_iddoc_sustento']) || !is_array($this->NM_ajax_info['errList']['dg_iddoc_sustento']))
                  {
                      $this->NM_ajax_info['errList']['dg_iddoc_sustento'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_iddoc_sustento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_iddoc_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_iddoc_sustento

    function ValidateField_tipo_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['tipo_sustento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->tipo_sustento) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['tipo_sustento']))
              {
                  $Campos_Erros['tipo_sustento'] = array();
              }
              $Campos_Erros['tipo_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['tipo_sustento']) || !is_array($this->NM_ajax_info['errList']['tipo_sustento']))
              {
                  $this->NM_ajax_info['errList']['tipo_sustento'] = array();
              }
              $this->NM_ajax_info['errList']['tipo_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tipo_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tipo_sustento

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

    function ValidateField_autorizacion_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['autorizacion_sustento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->autorizacion_sustento) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_autorizacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['autorizacion_sustento']))
              {
                  $Campos_Erros['autorizacion_sustento'] = array();
              }
              $Campos_Erros['autorizacion_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['autorizacion_sustento']) || !is_array($this->NM_ajax_info['errList']['autorizacion_sustento']))
              {
                  $this->NM_ajax_info['errList']['autorizacion_sustento'] = array();
              }
              $this->NM_ajax_info['errList']['autorizacion_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'autorizacion_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_autorizacion_sustento

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

    function ValidateField_dg_coddoc_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_coddoc_sustento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_coddoc_sustento) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_coddoc_sustento']))
              {
                  $Campos_Erros['dg_coddoc_sustento'] = array();
              }
              $Campos_Erros['dg_coddoc_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_coddoc_sustento']) || !is_array($this->NM_ajax_info['errList']['dg_coddoc_sustento']))
              {
                  $this->NM_ajax_info['errList']['dg_coddoc_sustento'] = array();
              }
              $this->NM_ajax_info['errList']['dg_coddoc_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_coddoc_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_coddoc_sustento

    function ValidateField_dg_serie_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_serie_sustento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_serie_sustento) > 7) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_serie_sri'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 7 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_serie_sustento']))
              {
                  $Campos_Erros['dg_serie_sustento'] = array();
              }
              $Campos_Erros['dg_serie_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 7 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_serie_sustento']) || !is_array($this->NM_ajax_info['errList']['dg_serie_sustento']))
              {
                  $this->NM_ajax_info['errList']['dg_serie_sustento'] = array();
              }
              $this->NM_ajax_info['errList']['dg_serie_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 7 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_serie_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_serie_sustento

    function ValidateField_dg_secuencial_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_secuencial_sustento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_secuencial_sustento) > 9) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 9 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_secuencial_sustento']))
              {
                  $Campos_Erros['dg_secuencial_sustento'] = array();
              }
              $Campos_Erros['dg_secuencial_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 9 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_secuencial_sustento']) || !is_array($this->NM_ajax_info['errList']['dg_secuencial_sustento']))
              {
                  $this->NM_ajax_info['errList']['dg_secuencial_sustento'] = array();
              }
              $this->NM_ajax_info['errList']['dg_secuencial_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 9 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_secuencial_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_secuencial_sustento

    function ValidateField_dg_autorizacion_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_autorizacion_sustento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_autorizacion_sustento) > 49) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_autorizacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 49 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_autorizacion_sustento']))
              {
                  $Campos_Erros['dg_autorizacion_sustento'] = array();
              }
              $Campos_Erros['dg_autorizacion_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 49 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_autorizacion_sustento']) || !is_array($this->NM_ajax_info['errList']['dg_autorizacion_sustento']))
              {
                  $this->NM_ajax_info['errList']['dg_autorizacion_sustento'] = array();
              }
              $this->NM_ajax_info['errList']['dg_autorizacion_sustento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 49 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_autorizacion_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_autorizacion_sustento

    function ValidateField_dg_fecha_sustento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->dg_fecha_sustento, $this->field_config['dg_fecha_sustento']['date_sep']) ; 
      if (isset($this->Field_no_validate['dg_fecha_sustento'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['dg_fecha_sustento']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['dg_fecha_sustento']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['dg_fecha_sustento']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['dg_fecha_sustento']['date_sep']) ; 
          if (trim($this->dg_fecha_sustento) != "")  
          { 
              if ($teste_validade->Data($this->dg_fecha_sustento, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha'] . "; " ; 
                  if (!isset($Campos_Erros['dg_fecha_sustento']))
                  {
                      $Campos_Erros['dg_fecha_sustento'] = array();
                  }
                  $Campos_Erros['dg_fecha_sustento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dg_fecha_sustento']) || !is_array($this->NM_ajax_info['errList']['dg_fecha_sustento']))
                  {
                      $this->NM_ajax_info['errList']['dg_fecha_sustento'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_fecha_sustento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['dg_fecha_sustento']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_fecha_sustento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_fecha_sustento

    function ValidateField_dg_establecimiento_destino(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['dg_establecimiento_destino'])) {
       return;
   }
               if (!empty($this->dg_establecimiento_destino) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino']) && !in_array($this->dg_establecimiento_destino, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['dg_establecimiento_destino']))
                   {
                       $Campos_Erros['dg_establecimiento_destino'] = array();
                   }
                   $Campos_Erros['dg_establecimiento_destino'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['dg_establecimiento_destino']) || !is_array($this->NM_ajax_info['errList']['dg_establecimiento_destino']))
                   {
                       $this->NM_ajax_info['errList']['dg_establecimiento_destino'] = array();
                   }
                   $this->NM_ajax_info['errList']['dg_establecimiento_destino'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_establecimiento_destino';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_establecimiento_destino

    function ValidateField_dg_tipo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_tipo'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_tipo) > 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "Dg Tipo " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_tipo']))
              {
                  $Campos_Erros['dg_tipo'] = array();
              }
              $Campos_Erros['dg_tipo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_tipo']) || !is_array($this->NM_ajax_info['errList']['dg_tipo']))
              {
                  $this->NM_ajax_info['errList']['dg_tipo'] = array();
              }
              $this->NM_ajax_info['errList']['dg_tipo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_tipo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_tipo

    function ValidateField_dg_nombre_destinatario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_nombre_destinatario'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_nombre_destinatario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_nombre_destinatario'] == "on")) 
      { 
          if ($this->dg_nombre_destinatario == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_destinatario'] . "" ; 
              if (!isset($Campos_Erros['dg_nombre_destinatario']))
              {
                  $Campos_Erros['dg_nombre_destinatario'] = array();
              }
              $Campos_Erros['dg_nombre_destinatario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['dg_nombre_destinatario']) || !is_array($this->NM_ajax_info['errList']['dg_nombre_destinatario']))
                  {
                      $this->NM_ajax_info['errList']['dg_nombre_destinatario'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_nombre_destinatario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_nombre_destinatario) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_destinatario'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_nombre_destinatario']))
              {
                  $Campos_Erros['dg_nombre_destinatario'] = array();
              }
              $Campos_Erros['dg_nombre_destinatario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_nombre_destinatario']) || !is_array($this->NM_ajax_info['errList']['dg_nombre_destinatario']))
              {
                  $this->NM_ajax_info['errList']['dg_nombre_destinatario'] = array();
              }
              $this->NM_ajax_info['errList']['dg_nombre_destinatario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_nombre_destinatario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_nombre_destinatario

    function ValidateField_dg_identificacion_destinatario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_identificacion_destinatario'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_identificacion_destinatario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_identificacion_destinatario'] == "on")) 
      { 
          if ($this->dg_identificacion_destinatario == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "" ; 
              if (!isset($Campos_Erros['dg_identificacion_destinatario']))
              {
                  $Campos_Erros['dg_identificacion_destinatario'] = array();
              }
              $Campos_Erros['dg_identificacion_destinatario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['dg_identificacion_destinatario']) || !is_array($this->NM_ajax_info['errList']['dg_identificacion_destinatario']))
                  {
                      $this->NM_ajax_info['errList']['dg_identificacion_destinatario'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_identificacion_destinatario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_identificacion_destinatario) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_identificacion_destinatario']))
              {
                  $Campos_Erros['dg_identificacion_destinatario'] = array();
              }
              $Campos_Erros['dg_identificacion_destinatario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_identificacion_destinatario']) || !is_array($this->NM_ajax_info['errList']['dg_identificacion_destinatario']))
              {
                  $this->NM_ajax_info['errList']['dg_identificacion_destinatario'] = array();
              }
              $this->NM_ajax_info['errList']['dg_identificacion_destinatario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_identificacion_destinatario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_identificacion_destinatario

    function ValidateField_dg_direccion_destino(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_direccion_destino'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_direccion_destino']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_direccion_destino'] == "on")) 
      { 
          if ($this->dg_direccion_destino == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_direccion_destino'] . "" ; 
              if (!isset($Campos_Erros['dg_direccion_destino']))
              {
                  $Campos_Erros['dg_direccion_destino'] = array();
              }
              $Campos_Erros['dg_direccion_destino'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['dg_direccion_destino']) || !is_array($this->NM_ajax_info['errList']['dg_direccion_destino']))
                  {
                      $this->NM_ajax_info['errList']['dg_direccion_destino'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_direccion_destino'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_direccion_destino) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_direccion_destino'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_direccion_destino']))
              {
                  $Campos_Erros['dg_direccion_destino'] = array();
              }
              $Campos_Erros['dg_direccion_destino'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_direccion_destino']) || !is_array($this->NM_ajax_info['errList']['dg_direccion_destino']))
              {
                  $this->NM_ajax_info['errList']['dg_direccion_destino'] = array();
              }
              $this->NM_ajax_info['errList']['dg_direccion_destino'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_direccion_destino';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_direccion_destino

    function ValidateField_dg_documento_aduanero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_documento_aduanero'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_documento_aduanero) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_documento_aduanero'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_documento_aduanero']))
              {
                  $Campos_Erros['dg_documento_aduanero'] = array();
              }
              $Campos_Erros['dg_documento_aduanero'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_documento_aduanero']) || !is_array($this->NM_ajax_info['errList']['dg_documento_aduanero']))
              {
                  $this->NM_ajax_info['errList']['dg_documento_aduanero'] = array();
              }
              $this->NM_ajax_info['errList']['dg_documento_aduanero'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_documento_aduanero';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_documento_aduanero

    function ValidateField_dg_motivo_traslado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_motivo_traslado'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_motivo_traslado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_motivo_traslado'] == "on")) 
      { 
          if ($this->dg_motivo_traslado == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_motivo'] . "" ; 
              if (!isset($Campos_Erros['dg_motivo_traslado']))
              {
                  $Campos_Erros['dg_motivo_traslado'] = array();
              }
              $Campos_Erros['dg_motivo_traslado'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['dg_motivo_traslado']) || !is_array($this->NM_ajax_info['errList']['dg_motivo_traslado']))
                  {
                      $this->NM_ajax_info['errList']['dg_motivo_traslado'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_motivo_traslado'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_motivo_traslado) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_motivo'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_motivo_traslado']))
              {
                  $Campos_Erros['dg_motivo_traslado'] = array();
              }
              $Campos_Erros['dg_motivo_traslado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_motivo_traslado']) || !is_array($this->NM_ajax_info['errList']['dg_motivo_traslado']))
              {
                  $this->NM_ajax_info['errList']['dg_motivo_traslado'] = array();
              }
              $this->NM_ajax_info['errList']['dg_motivo_traslado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_motivo_traslado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_motivo_traslado

    function ValidateField_dg_ruta(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_ruta'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_ruta']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_ruta'] == "on")) 
      { 
          if ($this->dg_ruta == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_ruta_transportista'] . "" ; 
              if (!isset($Campos_Erros['dg_ruta']))
              {
                  $Campos_Erros['dg_ruta'] = array();
              }
              $Campos_Erros['dg_ruta'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['dg_ruta']) || !is_array($this->NM_ajax_info['errList']['dg_ruta']))
                  {
                      $this->NM_ajax_info['errList']['dg_ruta'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_ruta'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_ruta) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ruta_transportista'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_ruta']))
              {
                  $Campos_Erros['dg_ruta'] = array();
              }
              $Campos_Erros['dg_ruta'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_ruta']) || !is_array($this->NM_ajax_info['errList']['dg_ruta']))
              {
                  $this->NM_ajax_info['errList']['dg_ruta'] = array();
              }
              $this->NM_ajax_info['errList']['dg_ruta'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_ruta';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_ruta

    function ValidateField_dg_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_id'])) {
          nm_limpa_numero($this->dg_id, $this->field_config['dg_id']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->dg_id, $this->field_config['dg_id']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->dg_id != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->dg_id) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dg_id']))
                  {
                      $Campos_Erros['dg_id'] = array();
                  }
                  $Campos_Erros['dg_id'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dg_id']) || !is_array($this->NM_ajax_info['errList']['dg_id']))
                  {
                      $this->NM_ajax_info['errList']['dg_id'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_id'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dg_id, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . "; " ; 
                  if (!isset($Campos_Erros['dg_id']))
                  {
                      $Campos_Erros['dg_id'] = array();
                  }
                  $Campos_Erros['dg_id'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dg_id']) || !is_array($this->NM_ajax_info['errList']['dg_id']))
                  {
                      $this->NM_ajax_info['errList']['dg_id'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_id'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_id']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_id'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_id'] . "" ; 
              if (!isset($Campos_Erros['dg_id']))
              {
                  $Campos_Erros['dg_id'] = array();
              }
              $Campos_Erros['dg_id'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['dg_id']) || !is_array($this->NM_ajax_info['errList']['dg_id']))
                  {
                      $this->NM_ajax_info['errList']['dg_id'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_id'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_id';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_id

    function ValidateField_dg_guia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_guia'])) {
          nm_limpa_numero($this->dg_guia, $this->field_config['dg_guia']['symbol_grp']) ; 
          return;
      }
      if ($this->dg_guia === "" || is_null($this->dg_guia))  
      { 
          $this->dg_guia = 0;
          $this->sc_force_zero[] = 'dg_guia';
      } 
      nm_limpa_numero($this->dg_guia, $this->field_config['dg_guia']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->dg_guia != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->dg_guia) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_guia_remision'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['dg_guia']))
                  {
                      $Campos_Erros['dg_guia'] = array();
                  }
                  $Campos_Erros['dg_guia'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['dg_guia']) || !is_array($this->NM_ajax_info['errList']['dg_guia']))
                  {
                      $this->NM_ajax_info['errList']['dg_guia'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_guia'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->dg_guia, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_guia_remision'] . "; " ; 
                  if (!isset($Campos_Erros['dg_guia']))
                  {
                      $Campos_Erros['dg_guia'] = array();
                  }
                  $Campos_Erros['dg_guia'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['dg_guia']) || !is_array($this->NM_ajax_info['errList']['dg_guia']))
                  {
                      $this->NM_ajax_info['errList']['dg_guia'] = array();
                  }
                  $this->NM_ajax_info['errList']['dg_guia'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_guia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_guia

    function ValidateField_dg_empresa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['dg_empresa'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->dg_empresa) > 13) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_empresa'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['dg_empresa']))
              {
                  $Campos_Erros['dg_empresa'] = array();
              }
              $Campos_Erros['dg_empresa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['dg_empresa']) || !is_array($this->NM_ajax_info['errList']['dg_empresa']))
              {
                  $this->NM_ajax_info['errList']['dg_empresa'] = array();
              }
              $this->NM_ajax_info['errList']['dg_empresa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'dg_empresa';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_dg_empresa

    function ValidateField_productos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['productos'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->productos) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'productos';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_productos

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
    $this->nmgp_dados_form['dg_iddoc_sustento'] = $this->dg_iddoc_sustento;
    $this->nmgp_dados_form['tipo_sustento'] = $this->tipo_sustento;
    $this->nmgp_dados_form['serie_sustento'] = $this->serie_sustento;
    $this->nmgp_dados_form['secuencial_sustento'] = $this->secuencial_sustento;
    $this->nmgp_dados_form['autorizacion_sustento'] = $this->autorizacion_sustento;
    $this->nmgp_dados_form['fecha_sustento'] = (strlen(trim($this->fecha_sustento)) > 19) ? str_replace(".", ":", $this->fecha_sustento) : trim($this->fecha_sustento);
    $this->nmgp_dados_form['dg_coddoc_sustento'] = $this->dg_coddoc_sustento;
    $this->nmgp_dados_form['dg_serie_sustento'] = $this->dg_serie_sustento;
    $this->nmgp_dados_form['dg_secuencial_sustento'] = $this->dg_secuencial_sustento;
    $this->nmgp_dados_form['dg_autorizacion_sustento'] = $this->dg_autorizacion_sustento;
    $this->nmgp_dados_form['dg_fecha_sustento'] = (strlen(trim($this->dg_fecha_sustento)) > 19) ? str_replace(".", ":", $this->dg_fecha_sustento) : trim($this->dg_fecha_sustento);
    $this->nmgp_dados_form['dg_establecimiento_destino'] = $this->dg_establecimiento_destino;
    $this->nmgp_dados_form['dg_tipo'] = $this->dg_tipo;
    $this->nmgp_dados_form['dg_nombre_destinatario'] = $this->dg_nombre_destinatario;
    $this->nmgp_dados_form['dg_identificacion_destinatario'] = $this->dg_identificacion_destinatario;
    $this->nmgp_dados_form['dg_direccion_destino'] = $this->dg_direccion_destino;
    $this->nmgp_dados_form['dg_documento_aduanero'] = $this->dg_documento_aduanero;
    $this->nmgp_dados_form['dg_motivo_traslado'] = $this->dg_motivo_traslado;
    $this->nmgp_dados_form['dg_ruta'] = $this->dg_ruta;
    $this->nmgp_dados_form['dg_id'] = $this->dg_id;
    $this->nmgp_dados_form['dg_guia'] = $this->dg_guia;
    $this->nmgp_dados_form['dg_empresa'] = $this->dg_empresa;
    $this->nmgp_dados_form['productos'] = $this->productos;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['dg_iddoc_sustento'] = $this->dg_iddoc_sustento;
      nm_limpa_numero($this->dg_iddoc_sustento, $this->field_config['dg_iddoc_sustento']['symbol_grp']) ; 
      $this->Before_unformat['fecha_sustento'] = $this->fecha_sustento;
      nm_limpa_data($this->fecha_sustento, $this->field_config['fecha_sustento']['date_sep']) ; 
      $this->Before_unformat['dg_fecha_sustento'] = $this->dg_fecha_sustento;
      nm_limpa_data($this->dg_fecha_sustento, $this->field_config['dg_fecha_sustento']['date_sep']) ; 
      $this->Before_unformat['dg_id'] = $this->dg_id;
      nm_limpa_numero($this->dg_id, $this->field_config['dg_id']['symbol_grp']) ; 
      $this->Before_unformat['dg_guia'] = $this->dg_guia;
      nm_limpa_numero($this->dg_guia, $this->field_config['dg_guia']['symbol_grp']) ; 
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
      if ($Nome_Campo == "dg_iddoc_sustento")
      {
          nm_limpa_numero($this->dg_iddoc_sustento, $this->field_config['dg_iddoc_sustento']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "dg_id")
      {
          nm_limpa_numero($this->dg_id, $this->field_config['dg_id']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "dg_guia")
      {
          nm_limpa_numero($this->dg_guia, $this->field_config['dg_guia']['symbol_grp']) ; 
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
      if ('' !== $this->dg_iddoc_sustento || (!empty($format_fields) && isset($format_fields['dg_iddoc_sustento'])))
      {
          nmgp_Form_Num_Val($this->dg_iddoc_sustento, $this->field_config['dg_iddoc_sustento']['symbol_grp'], $this->field_config['dg_iddoc_sustento']['symbol_dec'], "0", "S", $this->field_config['dg_iddoc_sustento']['format_neg'], "", "", "-", $this->field_config['dg_iddoc_sustento']['symbol_fmt']) ; 
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
      if ((!empty($this->dg_fecha_sustento) && 'null' != $this->dg_fecha_sustento) || (!empty($format_fields) && isset($format_fields['dg_fecha_sustento'])))
      {
          nm_volta_data($this->dg_fecha_sustento, $this->field_config['dg_fecha_sustento']['date_format']) ; 
          nmgp_Form_Datas($this->dg_fecha_sustento, $this->field_config['dg_fecha_sustento']['date_format'], $this->field_config['dg_fecha_sustento']['date_sep']) ;  
      }
      elseif ('null' == $this->dg_fecha_sustento || '' == $this->dg_fecha_sustento)
      {
          $this->dg_fecha_sustento = '';
      }
      if ('' !== $this->dg_id || (!empty($format_fields) && isset($format_fields['dg_id'])))
      {
          nmgp_Form_Num_Val($this->dg_id, $this->field_config['dg_id']['symbol_grp'], $this->field_config['dg_id']['symbol_dec'], "0", "S", $this->field_config['dg_id']['format_neg'], "", "", "-", $this->field_config['dg_id']['symbol_fmt']) ; 
      }
      if ('' !== $this->dg_guia || (!empty($format_fields) && isset($format_fields['dg_guia'])))
      {
          nmgp_Form_Num_Val($this->dg_guia, $this->field_config['dg_guia']['symbol_grp'], $this->field_config['dg_guia']['symbol_dec'], "0", "S", $this->field_config['dg_guia']['format_neg'], "", "", "-", $this->field_config['dg_guia']['symbol_fmt']) ; 
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
      $guarda_format_hora = $this->field_config['dg_fecha_sustento']['date_format'];
      if ($this->dg_fecha_sustento != "")  
      { 
          nm_conv_data($this->dg_fecha_sustento, $this->field_config['dg_fecha_sustento']['date_format']) ; 
          $this->dg_fecha_sustento_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->dg_fecha_sustento_hora = substr($this->dg_fecha_sustento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_fecha_sustento_hora = substr($this->dg_fecha_sustento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->dg_fecha_sustento_hora = substr($this->dg_fecha_sustento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->dg_fecha_sustento_hora = substr($this->dg_fecha_sustento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->dg_fecha_sustento_hora = substr($this->dg_fecha_sustento_hora, 0, -4);
          }
      } 
      if ($this->dg_fecha_sustento == "" && $use_null)  
      { 
          $this->dg_fecha_sustento = "null" ; 
      } 
      $this->field_config['dg_fecha_sustento']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_dg_iddoc_sustento();
          $this->ajax_return_values_tipo_sustento();
          $this->ajax_return_values_serie_sustento();
          $this->ajax_return_values_secuencial_sustento();
          $this->ajax_return_values_autorizacion_sustento();
          $this->ajax_return_values_fecha_sustento();
          $this->ajax_return_values_dg_coddoc_sustento();
          $this->ajax_return_values_dg_serie_sustento();
          $this->ajax_return_values_dg_secuencial_sustento();
          $this->ajax_return_values_dg_autorizacion_sustento();
          $this->ajax_return_values_dg_fecha_sustento();
          $this->ajax_return_values_dg_establecimiento_destino();
          $this->ajax_return_values_dg_tipo();
          $this->ajax_return_values_dg_nombre_destinatario();
          $this->ajax_return_values_dg_identificacion_destinatario();
          $this->ajax_return_values_dg_direccion_destino();
          $this->ajax_return_values_dg_documento_aduanero();
          $this->ajax_return_values_dg_motivo_traslado();
          $this->ajax_return_values_dg_ruta();
          $this->ajax_return_values_dg_id();
          $this->ajax_return_values_dg_guia();
          $this->ajax_return_values_dg_empresa();
          $this->ajax_return_values_productos();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['dg_id']['keyVal'] = form_del_destinatario_guia_mob_pack_protect_string($this->nmgp_dados_form['dg_id']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['foreign_key']['dgd_destinatario'] = $this->nmgp_dados_form['dg_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['where_filter'] = "dgd_destinatario = " . $this->nmgp_dados_form['dg_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['where_detal']  = "dgd_destinatario = " . $this->nmgp_dados_form['dg_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['total']);
              foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob'] as $i => $v)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario'][$i] = $v;
              }
              if (isset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['total']))
              {
                  unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['total']);
              }
          }
   } // ajax_return_values

          //----- dg_iddoc_sustento
   function ajax_return_values_dg_iddoc_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_iddoc_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_iddoc_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_iddoc_sustento'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tipo_sustento
   function ajax_return_values_tipo_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipo_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipo_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tipo_sustento'] = array(
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

          //----- autorizacion_sustento
   function ajax_return_values_autorizacion_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("autorizacion_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->autorizacion_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['autorizacion_sustento'] = array(
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

          //----- dg_coddoc_sustento
   function ajax_return_values_dg_coddoc_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_coddoc_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_coddoc_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_coddoc_sustento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_serie_sustento
   function ajax_return_values_dg_serie_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_serie_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_serie_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_serie_sustento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_secuencial_sustento
   function ajax_return_values_dg_secuencial_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_secuencial_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_secuencial_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_secuencial_sustento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_autorizacion_sustento
   function ajax_return_values_dg_autorizacion_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_autorizacion_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_autorizacion_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_autorizacion_sustento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_fecha_sustento
   function ajax_return_values_dg_fecha_sustento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_fecha_sustento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_fecha_sustento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_fecha_sustento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- dg_establecimiento_destino
   function ajax_return_values_dg_establecimiento_destino($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_establecimiento_destino", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_establecimiento_destino);
              $aLookup = array();
              $this->_tmp_lookup_dg_establecimiento_destino = $this->dg_establecimiento_destino;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'] = array(); 
}
$aLookup[] = array(form_del_destinatario_guia_mob_pack_protect_string('0') => str_replace('<', '&lt;',form_del_destinatario_guia_mob_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'][] = '0';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_dg_iddoc_sustento = $this->dg_iddoc_sustento;
   $old_value_fecha_sustento = $this->fecha_sustento;
   $old_value_dg_fecha_sustento = $this->dg_fecha_sustento;
   $old_value_dg_id = $this->dg_id;
   $old_value_dg_guia = $this->dg_guia;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_dg_iddoc_sustento = $this->dg_iddoc_sustento;
   $unformatted_value_fecha_sustento = $this->fecha_sustento;
   $unformatted_value_dg_fecha_sustento = $this->dg_fecha_sustento;
   $unformatted_value_dg_id = $this->dg_id;
   $unformatted_value_dg_guia = $this->dg_guia;

   $nm_comando = "SELECT est_id, est_codigo  FROM del_establecimiento  WHERE est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY est_codigo";

   $this->dg_iddoc_sustento = $old_value_dg_iddoc_sustento;
   $this->fecha_sustento = $old_value_fecha_sustento;
   $this->dg_fecha_sustento = $old_value_dg_fecha_sustento;
   $this->dg_id = $old_value_dg_id;
   $this->dg_guia = $old_value_dg_guia;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_destinatario_guia_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_destinatario_guia_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'][] = $rs->fields[0];
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
          $sSelComp = "name=\"dg_establecimiento_destino\"";
          if (isset($this->NM_ajax_info['select_html']['dg_establecimiento_destino']) && !empty($this->NM_ajax_info['select_html']['dg_establecimiento_destino']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['dg_establecimiento_destino']);
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

                  if ($this->dg_establecimiento_destino == $sValue)
                  {
                      $this->_tmp_lookup_dg_establecimiento_destino = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['dg_establecimiento_destino'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['dg_establecimiento_destino']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['dg_establecimiento_destino']['valList'][$i] = form_del_destinatario_guia_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['dg_establecimiento_destino']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['dg_establecimiento_destino']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['dg_establecimiento_destino']['labList'] = $aLabel;
          }
   }

          //----- dg_tipo
   function ajax_return_values_dg_tipo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_tipo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_tipo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_tipo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_nombre_destinatario
   function ajax_return_values_dg_nombre_destinatario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_nombre_destinatario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_nombre_destinatario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_nombre_destinatario'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_identificacion_destinatario
   function ajax_return_values_dg_identificacion_destinatario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_identificacion_destinatario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_identificacion_destinatario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_identificacion_destinatario'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_direccion_destino
   function ajax_return_values_dg_direccion_destino($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_direccion_destino", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_direccion_destino);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_direccion_destino'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_documento_aduanero
   function ajax_return_values_dg_documento_aduanero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_documento_aduanero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_documento_aduanero);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_documento_aduanero'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_motivo_traslado
   function ajax_return_values_dg_motivo_traslado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_motivo_traslado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_motivo_traslado);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_motivo_traslado'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_ruta
   function ajax_return_values_dg_ruta($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_ruta", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_ruta);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_ruta'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- dg_id
   function ajax_return_values_dg_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_id'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("dg_id", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- dg_guia
   function ajax_return_values_dg_guia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_guia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_guia);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_guia'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- dg_empresa
   function ajax_return_values_dg_empresa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("dg_empresa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->dg_empresa);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['dg_empresa'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- productos
   function ajax_return_values_productos($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("productos", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->productos);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['productos'] = array(
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['upload_dir'][$fieldName][] = $newName;
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_del_destinatario_guia_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_autorizacion_sustento = $this->autorizacion_sustento;
    $original_dg_iddoc_sustento = $this->dg_iddoc_sustento;
    $original_dg_tipo = $this->dg_tipo;
    $original_fecha_sustento = $this->fecha_sustento;
    $original_secuencial_sustento = $this->secuencial_sustento;
    $original_serie_sustento = $this->serie_sustento;
    $original_tipo_sustento = $this->tipo_sustento;
}
  if($this->dg_iddoc_sustento <>''){
	$check_sql = "SELECT 
					fac_tipo_comprobante,
					tc_nombre,
					est_codigo||'-'||pen_serie,
					fac_secuencial,
					fac_autorizacion,
					fac_fecha
			FROM v_del_datos_factura_sri
			INNER JOIN sri_tipo_comprobante ON fac_tipo_comprobante=tc_codigo
			WHERE fac_numero=".$this->dg_iddoc_sustento ;
	 
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
		$this->tipo_sustento =$this->rs[0][1];
		$this->serie_sustento =$this->rs[0][2];
		$this->secuencial_sustento =$this->rs[0][3];
		$this->autorizacion_sustento =$this->rs[0][4];
		$this->fecha_sustento =$this->rs[0][5];
	}
}

if ($this->dg_tipo  == 'F')     
{
	$this->Ini->nm_hidden_blocos[0] = 'on'; $this->NM_ajax_info['blockDisplay']['0'] = 'on';
	$this->Ini->nm_hidden_blocos[1] = 'off'; $this->NM_ajax_info['blockDisplay']['1'] = 'off';
	
}
elseif  ($this->dg_tipo  == 'E')    
{
	$this->Ini->nm_hidden_blocos[0] = 'off'; $this->NM_ajax_info['blockDisplay']['0'] = 'off';
	$this->Ini->nm_hidden_blocos[1] = 'on'; $this->NM_ajax_info['blockDisplay']['1'] = 'on';
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_autorizacion_sustento != $this->autorizacion_sustento || (isset($bFlagRead_autorizacion_sustento) && $bFlagRead_autorizacion_sustento)))
    {
        $this->ajax_return_values_autorizacion_sustento(true);
    }
    if (($original_dg_iddoc_sustento != $this->dg_iddoc_sustento || (isset($bFlagRead_dg_iddoc_sustento) && $bFlagRead_dg_iddoc_sustento)))
    {
        $this->ajax_return_values_dg_iddoc_sustento(true);
    }
    if (($original_dg_tipo != $this->dg_tipo || (isset($bFlagRead_dg_tipo) && $bFlagRead_dg_tipo)))
    {
        $this->ajax_return_values_dg_tipo(true);
    }
    if (($original_fecha_sustento != $this->fecha_sustento || (isset($bFlagRead_fecha_sustento) && $bFlagRead_fecha_sustento)))
    {
        $this->ajax_return_values_fecha_sustento(true);
    }
    if (($original_secuencial_sustento != $this->secuencial_sustento || (isset($bFlagRead_secuencial_sustento) && $bFlagRead_secuencial_sustento)))
    {
        $this->ajax_return_values_secuencial_sustento(true);
    }
    if (($original_serie_sustento != $this->serie_sustento || (isset($bFlagRead_serie_sustento) && $bFlagRead_serie_sustento)))
    {
        $this->ajax_return_values_serie_sustento(true);
    }
    if (($original_tipo_sustento != $this->tipo_sustento || (isset($bFlagRead_tipo_sustento) && $bFlagRead_tipo_sustento)))
    {
        $this->ajax_return_values_tipo_sustento(true);
    }
}
$_SESSION['scriptcase']['form_del_destinatario_guia_mob']['contr_erro'] = 'off'; 
      }
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
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
      if ('incluir' == $this->nmgp_opcao && empty($this->dg_guia)) {$this->dg_guia = "" . $_SESSION['var_id_guia'] . ""; $this->sc_force_zero[] = "dg_guia";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->dg_empresa)) {$this->dg_empresa = "" . $_SESSION['Igtech_RucEmpresa'] . ""; $NM_val_null[] = "dg_empresa";}  
      $NM_val_form['dg_iddoc_sustento'] = $this->dg_iddoc_sustento;
      $NM_val_form['tipo_sustento'] = $this->tipo_sustento;
      $NM_val_form['serie_sustento'] = $this->serie_sustento;
      $NM_val_form['secuencial_sustento'] = $this->secuencial_sustento;
      $NM_val_form['autorizacion_sustento'] = $this->autorizacion_sustento;
      $NM_val_form['fecha_sustento'] = $this->fecha_sustento;
      $NM_val_form['dg_coddoc_sustento'] = $this->dg_coddoc_sustento;
      $NM_val_form['dg_serie_sustento'] = $this->dg_serie_sustento;
      $NM_val_form['dg_secuencial_sustento'] = $this->dg_secuencial_sustento;
      $NM_val_form['dg_autorizacion_sustento'] = $this->dg_autorizacion_sustento;
      $NM_val_form['dg_fecha_sustento'] = $this->dg_fecha_sustento;
      $NM_val_form['dg_establecimiento_destino'] = $this->dg_establecimiento_destino;
      $NM_val_form['dg_tipo'] = $this->dg_tipo;
      $NM_val_form['dg_nombre_destinatario'] = $this->dg_nombre_destinatario;
      $NM_val_form['dg_identificacion_destinatario'] = $this->dg_identificacion_destinatario;
      $NM_val_form['dg_direccion_destino'] = $this->dg_direccion_destino;
      $NM_val_form['dg_documento_aduanero'] = $this->dg_documento_aduanero;
      $NM_val_form['dg_motivo_traslado'] = $this->dg_motivo_traslado;
      $NM_val_form['dg_ruta'] = $this->dg_ruta;
      $NM_val_form['dg_id'] = $this->dg_id;
      $NM_val_form['dg_guia'] = $this->dg_guia;
      $NM_val_form['dg_empresa'] = $this->dg_empresa;
      $NM_val_form['productos'] = $this->productos;
      if ($this->dg_id === "" || is_null($this->dg_id))  
      { 
          $this->dg_id = 0;
      } 
      if ($this->dg_guia === "" || is_null($this->dg_guia))  
      { 
          $this->dg_guia = 0;
          $this->sc_force_zero[] = 'dg_guia';
      } 
      if ($this->dg_establecimiento_destino === "" || is_null($this->dg_establecimiento_destino))  
      { 
          $this->dg_establecimiento_destino = 0;
          $this->sc_force_zero[] = 'dg_establecimiento_destino';
      } 
      if ($this->dg_iddoc_sustento === "" || is_null($this->dg_iddoc_sustento))  
      { 
          $this->dg_iddoc_sustento = 0;
          $this->sc_force_zero[] = 'dg_iddoc_sustento';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->dg_empresa_before_qstr = $this->dg_empresa;
          $this->dg_empresa = substr($this->Db->qstr($this->dg_empresa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_empresa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_empresa);
          }
          if ($this->dg_empresa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_empresa = "null"; 
              $NM_val_null[] = "dg_empresa";
          } 
          $this->dg_identificacion_destinatario_before_qstr = $this->dg_identificacion_destinatario;
          $this->dg_identificacion_destinatario = substr($this->Db->qstr($this->dg_identificacion_destinatario), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_identificacion_destinatario = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_identificacion_destinatario);
          }
          if ($this->dg_identificacion_destinatario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_identificacion_destinatario = "null"; 
              $NM_val_null[] = "dg_identificacion_destinatario";
          } 
          $this->dg_nombre_destinatario_before_qstr = $this->dg_nombre_destinatario;
          $this->dg_nombre_destinatario = substr($this->Db->qstr($this->dg_nombre_destinatario), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_nombre_destinatario = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_nombre_destinatario);
          }
          if ($this->dg_nombre_destinatario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_nombre_destinatario = "null"; 
              $NM_val_null[] = "dg_nombre_destinatario";
          } 
          $this->dg_documento_aduanero_before_qstr = $this->dg_documento_aduanero;
          $this->dg_documento_aduanero = substr($this->Db->qstr($this->dg_documento_aduanero), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_documento_aduanero = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_documento_aduanero);
          }
          if ($this->dg_documento_aduanero == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_documento_aduanero = "null"; 
              $NM_val_null[] = "dg_documento_aduanero";
          } 
          $this->dg_coddoc_sustento_before_qstr = $this->dg_coddoc_sustento;
          $this->dg_coddoc_sustento = substr($this->Db->qstr($this->dg_coddoc_sustento), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_coddoc_sustento = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_coddoc_sustento);
          }
          if ($this->dg_coddoc_sustento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_coddoc_sustento = "null"; 
              $NM_val_null[] = "dg_coddoc_sustento";
          } 
          $this->dg_serie_sustento_before_qstr = $this->dg_serie_sustento;
          $this->dg_serie_sustento = substr($this->Db->qstr($this->dg_serie_sustento), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_serie_sustento = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_serie_sustento);
          }
          if ($this->dg_serie_sustento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_serie_sustento = "null"; 
              $NM_val_null[] = "dg_serie_sustento";
          } 
          $this->dg_secuencial_sustento_before_qstr = $this->dg_secuencial_sustento;
          $this->dg_secuencial_sustento = substr($this->Db->qstr($this->dg_secuencial_sustento), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_secuencial_sustento = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_secuencial_sustento);
          }
          if ($this->dg_secuencial_sustento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_secuencial_sustento = "null"; 
              $NM_val_null[] = "dg_secuencial_sustento";
          } 
          $this->dg_autorizacion_sustento_before_qstr = $this->dg_autorizacion_sustento;
          $this->dg_autorizacion_sustento = substr($this->Db->qstr($this->dg_autorizacion_sustento), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_autorizacion_sustento = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_autorizacion_sustento);
          }
          if ($this->dg_autorizacion_sustento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_autorizacion_sustento = "null"; 
              $NM_val_null[] = "dg_autorizacion_sustento";
          } 
          if ($this->dg_fecha_sustento == "")  
          { 
              $this->dg_fecha_sustento = "null"; 
              $NM_val_null[] = "dg_fecha_sustento";
          } 
          $this->dg_direccion_destino_before_qstr = $this->dg_direccion_destino;
          $this->dg_direccion_destino = substr($this->Db->qstr($this->dg_direccion_destino), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_direccion_destino = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_direccion_destino);
          }
          if ($this->dg_direccion_destino == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_direccion_destino = "null"; 
              $NM_val_null[] = "dg_direccion_destino";
          } 
          $this->dg_motivo_traslado_before_qstr = $this->dg_motivo_traslado;
          $this->dg_motivo_traslado = substr($this->Db->qstr($this->dg_motivo_traslado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_motivo_traslado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_motivo_traslado);
          }
          if ($this->dg_motivo_traslado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_motivo_traslado = "null"; 
              $NM_val_null[] = "dg_motivo_traslado";
          } 
          $this->dg_ruta_before_qstr = $this->dg_ruta;
          $this->dg_ruta = substr($this->Db->qstr($this->dg_ruta), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_ruta = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_ruta);
          }
          if ($this->dg_ruta == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_ruta = "null"; 
              $NM_val_null[] = "dg_ruta";
          } 
          $this->dg_tipo_before_qstr = $this->dg_tipo;
          $this->dg_tipo = substr($this->Db->qstr($this->dg_tipo), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->dg_tipo = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->dg_tipo);
          }
          if ($this->dg_tipo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->dg_tipo = "null"; 
              $NM_val_null[] = "dg_tipo";
          } 
          $this->productos_before_qstr = $this->productos;
          $this->productos = substr($this->Db->qstr($this->productos), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->productos = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->productos);
          }
          if ($this->productos == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->productos = "null"; 
              $NM_val_null[] = "productos";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_del_destinatario_guia_mob_pack_ajax_response();
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
                  $SC_fields_update[] = "dg_guia = $this->dg_guia, dg_empresa = '$this->dg_empresa', dg_identificacion_destinatario = '$this->dg_identificacion_destinatario', dg_nombre_destinatario = '$this->dg_nombre_destinatario', dg_establecimiento_destino = $this->dg_establecimiento_destino, dg_documento_aduanero = '$this->dg_documento_aduanero', dg_iddoc_sustento = $this->dg_iddoc_sustento, dg_coddoc_sustento = '$this->dg_coddoc_sustento', dg_serie_sustento = '$this->dg_serie_sustento', dg_secuencial_sustento = '$this->dg_secuencial_sustento', dg_autorizacion_sustento = '$this->dg_autorizacion_sustento', dg_fecha_sustento = #$this->dg_fecha_sustento#, dg_direccion_destino = '$this->dg_direccion_destino', dg_motivo_traslado = '$this->dg_motivo_traslado', dg_ruta = '$this->dg_ruta', dg_tipo = '$this->dg_tipo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dg_guia = $this->dg_guia, dg_empresa = '$this->dg_empresa', dg_identificacion_destinatario = '$this->dg_identificacion_destinatario', dg_nombre_destinatario = '$this->dg_nombre_destinatario', dg_establecimiento_destino = $this->dg_establecimiento_destino, dg_documento_aduanero = '$this->dg_documento_aduanero', dg_iddoc_sustento = $this->dg_iddoc_sustento, dg_coddoc_sustento = '$this->dg_coddoc_sustento', dg_serie_sustento = '$this->dg_serie_sustento', dg_secuencial_sustento = '$this->dg_secuencial_sustento', dg_autorizacion_sustento = '$this->dg_autorizacion_sustento', dg_fecha_sustento = " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", dg_direccion_destino = '$this->dg_direccion_destino', dg_motivo_traslado = '$this->dg_motivo_traslado', dg_ruta = '$this->dg_ruta', dg_tipo = '$this->dg_tipo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dg_guia = $this->dg_guia, dg_empresa = '$this->dg_empresa', dg_identificacion_destinatario = '$this->dg_identificacion_destinatario', dg_nombre_destinatario = '$this->dg_nombre_destinatario', dg_establecimiento_destino = $this->dg_establecimiento_destino, dg_documento_aduanero = '$this->dg_documento_aduanero', dg_iddoc_sustento = $this->dg_iddoc_sustento, dg_coddoc_sustento = '$this->dg_coddoc_sustento', dg_serie_sustento = '$this->dg_serie_sustento', dg_secuencial_sustento = '$this->dg_secuencial_sustento', dg_autorizacion_sustento = '$this->dg_autorizacion_sustento', dg_fecha_sustento = " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", dg_direccion_destino = '$this->dg_direccion_destino', dg_motivo_traslado = '$this->dg_motivo_traslado', dg_ruta = '$this->dg_ruta', dg_tipo = '$this->dg_tipo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dg_guia = $this->dg_guia, dg_empresa = '$this->dg_empresa', dg_identificacion_destinatario = '$this->dg_identificacion_destinatario', dg_nombre_destinatario = '$this->dg_nombre_destinatario', dg_establecimiento_destino = $this->dg_establecimiento_destino, dg_documento_aduanero = '$this->dg_documento_aduanero', dg_iddoc_sustento = $this->dg_iddoc_sustento, dg_coddoc_sustento = '$this->dg_coddoc_sustento', dg_serie_sustento = '$this->dg_serie_sustento', dg_secuencial_sustento = '$this->dg_secuencial_sustento', dg_autorizacion_sustento = '$this->dg_autorizacion_sustento', dg_fecha_sustento = EXTEND('$this->dg_fecha_sustento', YEAR TO DAY), dg_direccion_destino = '$this->dg_direccion_destino', dg_motivo_traslado = '$this->dg_motivo_traslado', dg_ruta = '$this->dg_ruta', dg_tipo = '$this->dg_tipo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dg_guia = $this->dg_guia, dg_empresa = '$this->dg_empresa', dg_identificacion_destinatario = '$this->dg_identificacion_destinatario', dg_nombre_destinatario = '$this->dg_nombre_destinatario', dg_establecimiento_destino = $this->dg_establecimiento_destino, dg_documento_aduanero = '$this->dg_documento_aduanero', dg_iddoc_sustento = $this->dg_iddoc_sustento, dg_coddoc_sustento = '$this->dg_coddoc_sustento', dg_serie_sustento = '$this->dg_serie_sustento', dg_secuencial_sustento = '$this->dg_secuencial_sustento', dg_autorizacion_sustento = '$this->dg_autorizacion_sustento', dg_fecha_sustento = " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", dg_direccion_destino = '$this->dg_direccion_destino', dg_motivo_traslado = '$this->dg_motivo_traslado', dg_ruta = '$this->dg_ruta', dg_tipo = '$this->dg_tipo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dg_guia = $this->dg_guia, dg_empresa = '$this->dg_empresa', dg_identificacion_destinatario = '$this->dg_identificacion_destinatario', dg_nombre_destinatario = '$this->dg_nombre_destinatario', dg_establecimiento_destino = $this->dg_establecimiento_destino, dg_documento_aduanero = '$this->dg_documento_aduanero', dg_iddoc_sustento = $this->dg_iddoc_sustento, dg_coddoc_sustento = '$this->dg_coddoc_sustento', dg_serie_sustento = '$this->dg_serie_sustento', dg_secuencial_sustento = '$this->dg_secuencial_sustento', dg_autorizacion_sustento = '$this->dg_autorizacion_sustento', dg_fecha_sustento = " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", dg_direccion_destino = '$this->dg_direccion_destino', dg_motivo_traslado = '$this->dg_motivo_traslado', dg_ruta = '$this->dg_ruta', dg_tipo = '$this->dg_tipo'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "dg_guia = $this->dg_guia, dg_empresa = '$this->dg_empresa', dg_identificacion_destinatario = '$this->dg_identificacion_destinatario', dg_nombre_destinatario = '$this->dg_nombre_destinatario', dg_establecimiento_destino = $this->dg_establecimiento_destino, dg_documento_aduanero = '$this->dg_documento_aduanero', dg_iddoc_sustento = $this->dg_iddoc_sustento, dg_coddoc_sustento = '$this->dg_coddoc_sustento', dg_serie_sustento = '$this->dg_serie_sustento', dg_secuencial_sustento = '$this->dg_secuencial_sustento', dg_autorizacion_sustento = '$this->dg_autorizacion_sustento', dg_fecha_sustento = " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", dg_direccion_destino = '$this->dg_direccion_destino', dg_motivo_traslado = '$this->dg_motivo_traslado', dg_ruta = '$this->dg_ruta', dg_tipo = '$this->dg_tipo'"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE dg_id = $this->dg_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE dg_id = $this->dg_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE dg_id = $this->dg_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE dg_id = $this->dg_id ";  
              }  
              else  
              {
                  $comando .= " WHERE dg_id = $this->dg_id ";  
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
                                  form_del_destinatario_guia_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->dg_empresa = $this->dg_empresa_before_qstr;
              $this->dg_identificacion_destinatario = $this->dg_identificacion_destinatario_before_qstr;
              $this->dg_nombre_destinatario = $this->dg_nombre_destinatario_before_qstr;
              $this->dg_documento_aduanero = $this->dg_documento_aduanero_before_qstr;
              $this->dg_coddoc_sustento = $this->dg_coddoc_sustento_before_qstr;
              $this->dg_serie_sustento = $this->dg_serie_sustento_before_qstr;
              $this->dg_secuencial_sustento = $this->dg_secuencial_sustento_before_qstr;
              $this->dg_autorizacion_sustento = $this->dg_autorizacion_sustento_before_qstr;
              $this->dg_direccion_destino = $this->dg_direccion_destino_before_qstr;
              $this->dg_motivo_traslado = $this->dg_motivo_traslado_before_qstr;
              $this->dg_ruta = $this->dg_ruta_before_qstr;
              $this->dg_tipo = $this->dg_tipo_before_qstr;
              $this->productos = $this->productos_before_qstr;
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['dg_id'])) { $this->dg_id = $NM_val_form['dg_id']; }
              elseif (isset($this->dg_id)) { $this->nm_limpa_alfa($this->dg_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_guia'])) { $this->dg_guia = $NM_val_form['dg_guia']; }
              elseif (isset($this->dg_guia)) { $this->nm_limpa_alfa($this->dg_guia); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_empresa'])) { $this->dg_empresa = $NM_val_form['dg_empresa']; }
              elseif (isset($this->dg_empresa)) { $this->nm_limpa_alfa($this->dg_empresa); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_identificacion_destinatario'])) { $this->dg_identificacion_destinatario = $NM_val_form['dg_identificacion_destinatario']; }
              elseif (isset($this->dg_identificacion_destinatario)) { $this->nm_limpa_alfa($this->dg_identificacion_destinatario); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_nombre_destinatario'])) { $this->dg_nombre_destinatario = $NM_val_form['dg_nombre_destinatario']; }
              elseif (isset($this->dg_nombre_destinatario)) { $this->nm_limpa_alfa($this->dg_nombre_destinatario); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_establecimiento_destino'])) { $this->dg_establecimiento_destino = $NM_val_form['dg_establecimiento_destino']; }
              elseif (isset($this->dg_establecimiento_destino)) { $this->nm_limpa_alfa($this->dg_establecimiento_destino); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_documento_aduanero'])) { $this->dg_documento_aduanero = $NM_val_form['dg_documento_aduanero']; }
              elseif (isset($this->dg_documento_aduanero)) { $this->nm_limpa_alfa($this->dg_documento_aduanero); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_iddoc_sustento'])) { $this->dg_iddoc_sustento = $NM_val_form['dg_iddoc_sustento']; }
              elseif (isset($this->dg_iddoc_sustento)) { $this->nm_limpa_alfa($this->dg_iddoc_sustento); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_coddoc_sustento'])) { $this->dg_coddoc_sustento = $NM_val_form['dg_coddoc_sustento']; }
              elseif (isset($this->dg_coddoc_sustento)) { $this->nm_limpa_alfa($this->dg_coddoc_sustento); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_serie_sustento'])) { $this->dg_serie_sustento = $NM_val_form['dg_serie_sustento']; }
              elseif (isset($this->dg_serie_sustento)) { $this->nm_limpa_alfa($this->dg_serie_sustento); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_secuencial_sustento'])) { $this->dg_secuencial_sustento = $NM_val_form['dg_secuencial_sustento']; }
              elseif (isset($this->dg_secuencial_sustento)) { $this->nm_limpa_alfa($this->dg_secuencial_sustento); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_autorizacion_sustento'])) { $this->dg_autorizacion_sustento = $NM_val_form['dg_autorizacion_sustento']; }
              elseif (isset($this->dg_autorizacion_sustento)) { $this->nm_limpa_alfa($this->dg_autorizacion_sustento); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_direccion_destino'])) { $this->dg_direccion_destino = $NM_val_form['dg_direccion_destino']; }
              elseif (isset($this->dg_direccion_destino)) { $this->nm_limpa_alfa($this->dg_direccion_destino); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_motivo_traslado'])) { $this->dg_motivo_traslado = $NM_val_form['dg_motivo_traslado']; }
              elseif (isset($this->dg_motivo_traslado)) { $this->nm_limpa_alfa($this->dg_motivo_traslado); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_ruta'])) { $this->dg_ruta = $NM_val_form['dg_ruta']; }
              elseif (isset($this->dg_ruta)) { $this->nm_limpa_alfa($this->dg_ruta); }
              if     (isset($NM_val_form) && isset($NM_val_form['dg_tipo'])) { $this->dg_tipo = $NM_val_form['dg_tipo']; }
              elseif (isset($this->dg_tipo)) { $this->nm_limpa_alfa($this->dg_tipo); }
              if     (isset($NM_val_form) && isset($NM_val_form['productos'])) { $this->productos = $NM_val_form['productos']; }
              elseif (isset($this->productos)) { $this->nm_limpa_alfa($this->productos); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('dg_iddoc_sustento', 'tipo_sustento', 'serie_sustento', 'secuencial_sustento', 'autorizacion_sustento', 'fecha_sustento', 'dg_coddoc_sustento', 'dg_serie_sustento', 'dg_secuencial_sustento', 'dg_autorizacion_sustento', 'dg_fecha_sustento', 'dg_establecimiento_destino', 'dg_tipo', 'dg_nombre_destinatario', 'dg_identificacion_destinatario', 'dg_direccion_destino', 'dg_documento_aduanero', 'dg_motivo_traslado', 'dg_ruta', 'dg_id', 'dg_guia', 'dg_empresa', 'productos'), $aDoNotUpdate);
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
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
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_del_destinatario_guia_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo) VALUES ($this->dg_id, $this->dg_guia, '$this->dg_empresa', '$this->dg_identificacion_destinatario', '$this->dg_nombre_destinatario', $this->dg_establecimiento_destino, '$this->dg_documento_aduanero', $this->dg_iddoc_sustento, '$this->dg_coddoc_sustento', '$this->dg_serie_sustento', '$this->dg_secuencial_sustento', '$this->dg_autorizacion_sustento', #$this->dg_fecha_sustento#, '$this->dg_direccion_destino', '$this->dg_motivo_traslado', '$this->dg_ruta', '$this->dg_tipo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo) VALUES (" . $NM_seq_auto . "$this->dg_id, $this->dg_guia, '$this->dg_empresa', '$this->dg_identificacion_destinatario', '$this->dg_nombre_destinatario', $this->dg_establecimiento_destino, '$this->dg_documento_aduanero', $this->dg_iddoc_sustento, '$this->dg_coddoc_sustento', '$this->dg_serie_sustento', '$this->dg_secuencial_sustento', '$this->dg_autorizacion_sustento', " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", '$this->dg_direccion_destino', '$this->dg_motivo_traslado', '$this->dg_ruta', '$this->dg_tipo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo) VALUES (" . $NM_seq_auto . "$this->dg_id, $this->dg_guia, '$this->dg_empresa', '$this->dg_identificacion_destinatario', '$this->dg_nombre_destinatario', $this->dg_establecimiento_destino, '$this->dg_documento_aduanero', $this->dg_iddoc_sustento, '$this->dg_coddoc_sustento', '$this->dg_serie_sustento', '$this->dg_secuencial_sustento', '$this->dg_autorizacion_sustento', " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", '$this->dg_direccion_destino', '$this->dg_motivo_traslado', '$this->dg_ruta', '$this->dg_tipo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo) VALUES (" . $NM_seq_auto . "$this->dg_id, $this->dg_guia, '$this->dg_empresa', '$this->dg_identificacion_destinatario', '$this->dg_nombre_destinatario', $this->dg_establecimiento_destino, '$this->dg_documento_aduanero', $this->dg_iddoc_sustento, '$this->dg_coddoc_sustento', '$this->dg_serie_sustento', '$this->dg_secuencial_sustento', '$this->dg_autorizacion_sustento', " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", '$this->dg_direccion_destino', '$this->dg_motivo_traslado', '$this->dg_ruta', '$this->dg_tipo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo) VALUES (" . $NM_seq_auto . "$this->dg_id, $this->dg_guia, '$this->dg_empresa', '$this->dg_identificacion_destinatario', '$this->dg_nombre_destinatario', $this->dg_establecimiento_destino, '$this->dg_documento_aduanero', $this->dg_iddoc_sustento, '$this->dg_coddoc_sustento', '$this->dg_serie_sustento', '$this->dg_secuencial_sustento', '$this->dg_autorizacion_sustento', EXTEND('$this->dg_fecha_sustento', YEAR TO DAY), '$this->dg_direccion_destino', '$this->dg_motivo_traslado', '$this->dg_ruta', '$this->dg_tipo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo) VALUES (" . $NM_seq_auto . "$this->dg_id, $this->dg_guia, '$this->dg_empresa', '$this->dg_identificacion_destinatario', '$this->dg_nombre_destinatario', $this->dg_establecimiento_destino, '$this->dg_documento_aduanero', $this->dg_iddoc_sustento, '$this->dg_coddoc_sustento', '$this->dg_serie_sustento', '$this->dg_secuencial_sustento', '$this->dg_autorizacion_sustento', " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", '$this->dg_direccion_destino', '$this->dg_motivo_traslado', '$this->dg_ruta', '$this->dg_tipo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo) VALUES (" . $NM_seq_auto . "$this->dg_id, $this->dg_guia, '$this->dg_empresa', '$this->dg_identificacion_destinatario', '$this->dg_nombre_destinatario', $this->dg_establecimiento_destino, '$this->dg_documento_aduanero', $this->dg_iddoc_sustento, '$this->dg_coddoc_sustento', '$this->dg_serie_sustento', '$this->dg_secuencial_sustento', '$this->dg_autorizacion_sustento', " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", '$this->dg_direccion_destino', '$this->dg_motivo_traslado', '$this->dg_ruta', '$this->dg_tipo')"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo) VALUES (" . $NM_seq_auto . "$this->dg_id, $this->dg_guia, '$this->dg_empresa', '$this->dg_identificacion_destinatario', '$this->dg_nombre_destinatario', $this->dg_establecimiento_destino, '$this->dg_documento_aduanero', $this->dg_iddoc_sustento, '$this->dg_coddoc_sustento', '$this->dg_serie_sustento', '$this->dg_secuencial_sustento', '$this->dg_autorizacion_sustento', " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", '$this->dg_direccion_destino', '$this->dg_motivo_traslado', '$this->dg_ruta', '$this->dg_tipo')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo) VALUES (" . $NM_seq_auto . "$this->dg_id, $this->dg_guia, '$this->dg_empresa', '$this->dg_identificacion_destinatario', '$this->dg_nombre_destinatario', $this->dg_establecimiento_destino, '$this->dg_documento_aduanero', $this->dg_iddoc_sustento, '$this->dg_coddoc_sustento', '$this->dg_serie_sustento', '$this->dg_secuencial_sustento', '$this->dg_autorizacion_sustento', " . $this->Ini->date_delim . $this->dg_fecha_sustento . $this->Ini->date_delim1 . ", '$this->dg_direccion_destino', '$this->dg_motivo_traslado', '$this->dg_ruta', '$this->dg_tipo')"; 
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
                              form_del_destinatario_guia_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->dg_empresa = $this->dg_empresa_before_qstr;
              $this->dg_identificacion_destinatario = $this->dg_identificacion_destinatario_before_qstr;
              $this->dg_nombre_destinatario = $this->dg_nombre_destinatario_before_qstr;
              $this->dg_documento_aduanero = $this->dg_documento_aduanero_before_qstr;
              $this->dg_coddoc_sustento = $this->dg_coddoc_sustento_before_qstr;
              $this->dg_serie_sustento = $this->dg_serie_sustento_before_qstr;
              $this->dg_secuencial_sustento = $this->dg_secuencial_sustento_before_qstr;
              $this->dg_autorizacion_sustento = $this->dg_autorizacion_sustento_before_qstr;
              $this->dg_direccion_destino = $this->dg_direccion_destino_before_qstr;
              $this->dg_motivo_traslado = $this->dg_motivo_traslado_before_qstr;
              $this->dg_ruta = $this->dg_ruta_before_qstr;
              $this->dg_tipo = $this->dg_tipo_before_qstr;
              $this->productos = $this->productos_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->dg_empresa = $this->dg_empresa_before_qstr;
              $this->dg_identificacion_destinatario = $this->dg_identificacion_destinatario_before_qstr;
              $this->dg_nombre_destinatario = $this->dg_nombre_destinatario_before_qstr;
              $this->dg_documento_aduanero = $this->dg_documento_aduanero_before_qstr;
              $this->dg_coddoc_sustento = $this->dg_coddoc_sustento_before_qstr;
              $this->dg_serie_sustento = $this->dg_serie_sustento_before_qstr;
              $this->dg_secuencial_sustento = $this->dg_secuencial_sustento_before_qstr;
              $this->dg_autorizacion_sustento = $this->dg_autorizacion_sustento_before_qstr;
              $this->dg_direccion_destino = $this->dg_direccion_destino_before_qstr;
              $this->dg_motivo_traslado = $this->dg_motivo_traslado_before_qstr;
              $this->dg_ruta = $this->dg_ruta_before_qstr;
              $this->dg_tipo = $this->dg_tipo_before_qstr;
              $this->productos = $this->productos_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->nmgp_botoes['desde_factura'] = "on";
              $this->nmgp_botoes['entre_establecimientos'] = "on";
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->dg_id = substr($this->Db->qstr($this->dg_id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';
          if ($bDelecaoOk)
          {
              $sDetailWhere = "dgd_destinatario = " . $this->dg_id . "";
              $this->form_del_detalle_guia_destinatario_mob->ini_controle();
              if ($this->form_del_detalle_guia_destinatario_mob->temRegistros($sDetailWhere))
              {
                  if (!$this->form_del_detalle_guia_destinatario_mob->deletaRegistros($sDetailWhere))
                  {
                      $bDelecaoOk = false;
                      $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
                  }
              }
          }

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where dg_id = $this->dg_id "); 
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
                          form_del_destinatario_guia_mob_pack_ajax_response();
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total']);
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
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['parms'] = "dg_id?#?$this->dg_id?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->dg_id = null === $this->dg_id ? null : substr($this->Db->qstr($this->dg_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, str_replace (convert(char(10),dg_fecha_sustento,102), '.', '-') + ' ' + convert(char(8),dg_fecha_sustento,20), dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, convert(char(23),dg_fecha_sustento,121), dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, EXTEND(dg_fecha_sustento, YEAR TO DAY), dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT dg_id, dg_guia, dg_empresa, dg_identificacion_destinatario, dg_nombre_destinatario, dg_establecimiento_destino, dg_documento_aduanero, dg_iddoc_sustento, dg_coddoc_sustento, dg_serie_sustento, dg_secuencial_sustento, dg_autorizacion_sustento, dg_fecha_sustento, dg_direccion_destino, dg_motivo_traslado, dg_ruta, dg_tipo from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = "(dg_id=" . $_SESSION['var_id_destinatario'] . ")";
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (!empty($sc_where))
              {
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  {
                     $aWhere[] = "dg_id = $this->dg_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                     $aWhere[] = "dg_id = $this->dg_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                     $aWhere[] = "dg_id = $this->dg_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                     $aWhere[] = "dg_id = $this->dg_id"; 
                  }  
                  else  
                  {
                     $aWhere[] = "dg_id = $this->dg_id"; 
                  }
              } 
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "dg_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start']) ;  
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['desde_factura'] = $this->nmgp_botoes['desde_factura'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['entre_establecimientos'] = $this->nmgp_botoes['entre_establecimientos'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['empty_filter'] = true;
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
              $this->dg_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['dg_id'] = $this->dg_id;
              $this->dg_guia = $rs->fields[1] ; 
              $this->nmgp_dados_select['dg_guia'] = $this->dg_guia;
              $this->dg_empresa = $rs->fields[2] ; 
              $this->nmgp_dados_select['dg_empresa'] = $this->dg_empresa;
              $this->dg_identificacion_destinatario = $rs->fields[3] ; 
              $this->nmgp_dados_select['dg_identificacion_destinatario'] = $this->dg_identificacion_destinatario;
              $this->dg_nombre_destinatario = $rs->fields[4] ; 
              $this->nmgp_dados_select['dg_nombre_destinatario'] = $this->dg_nombre_destinatario;
              $this->dg_establecimiento_destino = $rs->fields[5] ; 
              $this->nmgp_dados_select['dg_establecimiento_destino'] = $this->dg_establecimiento_destino;
              $this->dg_documento_aduanero = $rs->fields[6] ; 
              $this->nmgp_dados_select['dg_documento_aduanero'] = $this->dg_documento_aduanero;
              $this->dg_iddoc_sustento = $rs->fields[7] ; 
              $this->nmgp_dados_select['dg_iddoc_sustento'] = $this->dg_iddoc_sustento;
              $this->dg_coddoc_sustento = $rs->fields[8] ; 
              $this->nmgp_dados_select['dg_coddoc_sustento'] = $this->dg_coddoc_sustento;
              $this->dg_serie_sustento = $rs->fields[9] ; 
              $this->nmgp_dados_select['dg_serie_sustento'] = $this->dg_serie_sustento;
              $this->dg_secuencial_sustento = $rs->fields[10] ; 
              $this->nmgp_dados_select['dg_secuencial_sustento'] = $this->dg_secuencial_sustento;
              $this->dg_autorizacion_sustento = $rs->fields[11] ; 
              $this->nmgp_dados_select['dg_autorizacion_sustento'] = $this->dg_autorizacion_sustento;
              $this->dg_fecha_sustento = $rs->fields[12] ; 
              $this->nmgp_dados_select['dg_fecha_sustento'] = $this->dg_fecha_sustento;
              $this->dg_direccion_destino = $rs->fields[13] ; 
              $this->nmgp_dados_select['dg_direccion_destino'] = $this->dg_direccion_destino;
              $this->dg_motivo_traslado = $rs->fields[14] ; 
              $this->nmgp_dados_select['dg_motivo_traslado'] = $this->dg_motivo_traslado;
              $this->dg_ruta = $rs->fields[15] ; 
              $this->nmgp_dados_select['dg_ruta'] = $this->dg_ruta;
              $this->dg_tipo = $rs->fields[16] ; 
              $this->nmgp_dados_select['dg_tipo'] = $this->dg_tipo;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->dg_id = (string)$this->dg_id; 
              $this->dg_guia = (string)$this->dg_guia; 
              $this->dg_establecimiento_destino = (string)$this->dg_establecimiento_destino; 
              $this->dg_iddoc_sustento = (string)$this->dg_iddoc_sustento; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['parms'] = "dg_id?#?$this->dg_id?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['reg_start'] < $qt_geral_reg_form_del_destinatario_guia_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opcao']   = '';
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
              $this->dg_id = "";  
              $this->nmgp_dados_form["dg_id"] = $this->dg_id;
              $this->dg_guia = "" . $_SESSION['var_id_guia'] . "";  
              $this->nmgp_dados_form["dg_guia"] = $this->dg_guia;
              $this->dg_empresa = "" . $_SESSION['Igtech_RucEmpresa'] . "";  
              $this->nmgp_dados_form["dg_empresa"] = $this->dg_empresa;
              $this->dg_identificacion_destinatario = "";  
              $this->nmgp_dados_form["dg_identificacion_destinatario"] = $this->dg_identificacion_destinatario;
              $this->dg_nombre_destinatario = "";  
              $this->nmgp_dados_form["dg_nombre_destinatario"] = $this->dg_nombre_destinatario;
              $this->dg_establecimiento_destino = "";  
              $this->nmgp_dados_form["dg_establecimiento_destino"] = $this->dg_establecimiento_destino;
              $this->dg_documento_aduanero = "";  
              $this->nmgp_dados_form["dg_documento_aduanero"] = $this->dg_documento_aduanero;
              $this->dg_iddoc_sustento = "";  
              $this->nmgp_dados_form["dg_iddoc_sustento"] = $this->dg_iddoc_sustento;
              $this->dg_coddoc_sustento = "";  
              $this->nmgp_dados_form["dg_coddoc_sustento"] = $this->dg_coddoc_sustento;
              $this->dg_serie_sustento = "";  
              $this->nmgp_dados_form["dg_serie_sustento"] = $this->dg_serie_sustento;
              $this->dg_secuencial_sustento = "";  
              $this->nmgp_dados_form["dg_secuencial_sustento"] = $this->dg_secuencial_sustento;
              $this->dg_autorizacion_sustento = "";  
              $this->nmgp_dados_form["dg_autorizacion_sustento"] = $this->dg_autorizacion_sustento;
              $this->dg_fecha_sustento = "";  
              $this->dg_fecha_sustento_hora = "" ;  
              $this->nmgp_dados_form["dg_fecha_sustento"] = $this->dg_fecha_sustento;
              $this->dg_direccion_destino = "";  
              $this->nmgp_dados_form["dg_direccion_destino"] = $this->dg_direccion_destino;
              $this->dg_motivo_traslado = "";  
              $this->nmgp_dados_form["dg_motivo_traslado"] = $this->dg_motivo_traslado;
              $this->dg_ruta = "";  
              $this->nmgp_dados_form["dg_ruta"] = $this->dg_ruta;
              $this->dg_tipo = "";  
              $this->nmgp_dados_form["dg_tipo"] = $this->dg_tipo;
              $this->productos = "";  
              $this->nmgp_dados_form["productos"] = $this->productos;
              $this->tipo_sustento = "";  
              $this->nmgp_dados_form["tipo_sustento"] = $this->tipo_sustento;
              $this->serie_sustento = "";  
              $this->nmgp_dados_form["serie_sustento"] = $this->serie_sustento;
              $this->secuencial_sustento = "";  
              $this->nmgp_dados_form["secuencial_sustento"] = $this->secuencial_sustento;
              $this->autorizacion_sustento = "";  
              $this->nmgp_dados_form["autorizacion_sustento"] = $this->autorizacion_sustento;
              $this->fecha_sustento = "";  
              $this->fecha_sustento_hora = "" ;  
              $this->nmgp_dados_form["fecha_sustento"] = $this->fecha_sustento;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['foreign_key'] as $sFKName => $sFKValue)
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_detalle_guia_destinatario_mob']['embutida_parms'] = "var_destinatario*scin" . $this->nmgp_dados_form['dg_id'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
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
       $this->SC_log_arr['keys']['dg_id'] =  $this->dg_id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dados_select'];
           $this->SC_log_arr['fields']['dg_guia']['0'] =  $nmgp_dados_select['dg_guia'];
           $this->SC_log_arr['fields']['dg_empresa']['0'] =  $nmgp_dados_select['dg_empresa'];
           $this->SC_log_arr['fields']['dg_identificacion_destinatario']['0'] =  $nmgp_dados_select['dg_identificacion_destinatario'];
           $this->SC_log_arr['fields']['dg_nombre_destinatario']['0'] =  $nmgp_dados_select['dg_nombre_destinatario'];
           $this->SC_log_arr['fields']['dg_establecimiento_destino']['0'] =  $nmgp_dados_select['dg_establecimiento_destino'];
           $this->SC_log_arr['fields']['dg_documento_aduanero']['0'] =  $nmgp_dados_select['dg_documento_aduanero'];
           $this->SC_log_arr['fields']['dg_iddoc_sustento']['0'] =  $nmgp_dados_select['dg_iddoc_sustento'];
           $this->SC_log_arr['fields']['dg_coddoc_sustento']['0'] =  $nmgp_dados_select['dg_coddoc_sustento'];
           $this->SC_log_arr['fields']['dg_serie_sustento']['0'] =  $nmgp_dados_select['dg_serie_sustento'];
           $this->SC_log_arr['fields']['dg_secuencial_sustento']['0'] =  $nmgp_dados_select['dg_secuencial_sustento'];
           $this->SC_log_arr['fields']['dg_autorizacion_sustento']['0'] =  $nmgp_dados_select['dg_autorizacion_sustento'];
           $this->SC_log_arr['fields']['dg_fecha_sustento']['0'] =  $nmgp_dados_select['dg_fecha_sustento'];
           $this->SC_log_arr['fields']['dg_direccion_destino']['0'] =  $nmgp_dados_select['dg_direccion_destino'];
           $this->SC_log_arr['fields']['dg_motivo_traslado']['0'] =  $nmgp_dados_select['dg_motivo_traslado'];
           $this->SC_log_arr['fields']['dg_ruta']['0'] =  $nmgp_dados_select['dg_ruta'];
           $this->SC_log_arr['fields']['dg_tipo']['0'] =  $nmgp_dados_select['dg_tipo'];
           $this->SC_log_arr['fields']['productos']['0'] =  $nmgp_dados_select['productos'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['dg_guia']['1'] =  $this->dg_guia;
       $this->SC_log_arr['fields']['dg_empresa']['1'] =  $this->dg_empresa;
       $this->SC_log_arr['fields']['dg_identificacion_destinatario']['1'] =  $this->dg_identificacion_destinatario;
       $this->SC_log_arr['fields']['dg_nombre_destinatario']['1'] =  $this->dg_nombre_destinatario;
       $this->SC_log_arr['fields']['dg_establecimiento_destino']['1'] =  $this->dg_establecimiento_destino;
       $this->SC_log_arr['fields']['dg_documento_aduanero']['1'] =  $this->dg_documento_aduanero;
       $this->SC_log_arr['fields']['dg_iddoc_sustento']['1'] =  $this->dg_iddoc_sustento;
       $this->SC_log_arr['fields']['dg_coddoc_sustento']['1'] =  $this->dg_coddoc_sustento;
       $this->SC_log_arr['fields']['dg_serie_sustento']['1'] =  $this->dg_serie_sustento;
       $this->SC_log_arr['fields']['dg_secuencial_sustento']['1'] =  $this->dg_secuencial_sustento;
       $this->SC_log_arr['fields']['dg_autorizacion_sustento']['1'] =  $this->dg_autorizacion_sustento;
       $this->SC_log_arr['fields']['dg_fecha_sustento']['1'] =  $this->dg_fecha_sustento;
       $this->SC_log_arr['fields']['dg_direccion_destino']['1'] =  $this->dg_direccion_destino;
       $this->SC_log_arr['fields']['dg_motivo_traslado']['1'] =  $this->dg_motivo_traslado;
       $this->SC_log_arr['fields']['dg_ruta']['1'] =  $this->dg_ruta;
       $this->SC_log_arr['fields']['dg_tipo']['1'] =  $this->dg_tipo;
       $this->SC_log_arr['fields']['productos']['1'] =  $this->productos;
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
       $Log_labels['dg_guia'] =  "{lang_guia_remision}";
       $Log_labels['dg_empresa'] =  "{lang_empresa}";
       $Log_labels['dg_identificacion_destinatario'] =  "{lang_lot_identificacion}";
       $Log_labels['dg_nombre_destinatario'] =  "{lang_destinatario}";
       $Log_labels['dg_establecimiento_destino'] =  "{lang_establecimiento_destino}";
       $Log_labels['dg_documento_aduanero'] =  "{lang_documento_aduanero}";
       $Log_labels['dg_iddoc_sustento'] =  "{lang_documento_sustento}";
       $Log_labels['dg_coddoc_sustento'] =  "{lang_tipo_comprobante}";
       $Log_labels['dg_serie_sustento'] =  "{lang_serie_sri}";
       $Log_labels['dg_secuencial_sustento'] =  "{lang_secuencial}";
       $Log_labels['dg_autorizacion_sustento'] =  "{lang_autorizacion}";
       $Log_labels['dg_fecha_sustento'] =  "{lang_fecha}";
       $Log_labels['dg_direccion_destino'] =  "{lang_direccion_destino}";
       $Log_labels['dg_motivo_traslado'] =  "{lang_motivo}";
       $Log_labels['dg_ruta'] =  "{lang_ruta_transportista}";
       $Log_labels['dg_tipo'] =  "Dg Tipo";
       $Log_labels['productos'] =  "productos";
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function dg_establecimiento_destino_onChange()
{
$_SESSION['scriptcase']['form_del_destinatario_guia_mob']['contr_erro'] = 'on';
  
$original_dg_establecimiento_destino = $this->dg_establecimiento_destino;
$original_dg_nombre_destinatario = $this->dg_nombre_destinatario;
$original_dg_identificacion_destinatario = $this->dg_identificacion_destinatario;
$original_dg_direccion_destino = $this->dg_direccion_destino;

$check_sql = "SELECT 
				emp_razon_social,
				est_empresa,
				est_direccion
			  FROM del_establecimiento 
			  inner join del_empresa on est_empresa=emp_ruc
			  WHERE est_id=".$this->dg_establecimiento_destino ;
 
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
	$this->dg_nombre_destinatario  = $this->rs[0][0];
    $this->dg_identificacion_destinatario = $this->rs[0][1];
	$this->dg_direccion_destino =$this->rs[0][2];
}


$modificado_dg_establecimiento_destino = $this->dg_establecimiento_destino;
$modificado_dg_nombre_destinatario = $this->dg_nombre_destinatario;
$modificado_dg_identificacion_destinatario = $this->dg_identificacion_destinatario;
$modificado_dg_direccion_destino = $this->dg_direccion_destino;
$this->nm_formatar_campos('dg_establecimiento_destino', 'dg_nombre_destinatario', 'dg_identificacion_destinatario', 'dg_direccion_destino');
if ($original_dg_establecimiento_destino !== $modificado_dg_establecimiento_destino || isset($this->nmgp_cmp_readonly['dg_establecimiento_destino']) || (isset($bFlagRead_dg_establecimiento_destino) && $bFlagRead_dg_establecimiento_destino))
{
    $this->ajax_return_values_dg_establecimiento_destino(true);
}
if ($original_dg_nombre_destinatario !== $modificado_dg_nombre_destinatario || isset($this->nmgp_cmp_readonly['dg_nombre_destinatario']) || (isset($bFlagRead_dg_nombre_destinatario) && $bFlagRead_dg_nombre_destinatario))
{
    $this->ajax_return_values_dg_nombre_destinatario(true);
}
if ($original_dg_identificacion_destinatario !== $modificado_dg_identificacion_destinatario || isset($this->nmgp_cmp_readonly['dg_identificacion_destinatario']) || (isset($bFlagRead_dg_identificacion_destinatario) && $bFlagRead_dg_identificacion_destinatario))
{
    $this->ajax_return_values_dg_identificacion_destinatario(true);
}
if ($original_dg_direccion_destino !== $modificado_dg_direccion_destino || isset($this->nmgp_cmp_readonly['dg_direccion_destino']) || (isset($bFlagRead_dg_direccion_destino) && $bFlagRead_dg_direccion_destino))
{
    $this->ajax_return_values_dg_direccion_destino(true);
}
$this->NM_ajax_info['event_field'] = 'dg';
form_del_destinatario_guia_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_destinatario_guia_mob']['contr_erro'] = 'off';
}
function dg_iddoc_sustento_onChange()
{
$_SESSION['scriptcase']['form_del_destinatario_guia_mob']['contr_erro'] = 'on';
  
$original_dg_iddoc_sustento = $this->dg_iddoc_sustento;
$original_dg_coddoc_sustento = $this->dg_coddoc_sustento;
$original_tipo_sustento = $this->tipo_sustento;
$original_dg_serie_sustento = $this->dg_serie_sustento;
$original_serie_sustento = $this->serie_sustento;
$original_secuencial_sustento = $this->secuencial_sustento;
$original_dg_secuencial_sustento = $this->dg_secuencial_sustento;
$original_dg_autorizacion_sustento = $this->dg_autorizacion_sustento;
$original_autorizacion_sustento = $this->autorizacion_sustento;
$original_dg_fecha_sustento = $this->dg_fecha_sustento;
$original_fecha_sustento = $this->fecha_sustento;
$original_dg_nombre_destinatario = $this->dg_nombre_destinatario;
$original_dg_identificacion_destinatario = $this->dg_identificacion_destinatario;
$original_dg_direccion_destino = $this->dg_direccion_destino;
$original_dg_id = $this->dg_id;

$check_sql = "SELECT 
					fac_tipo_comprobante,
					tc_nombre,
					est_codigo||'-'||pen_serie,
					fac_secuencial,
					fac_autorizacion,
					fac_fecha,
					cl_nombre,
					cl_identificacion,
					cl_direccion
			FROM v_del_datos_factura_sri
			INNER JOIN sri_tipo_comprobante ON fac_tipo_comprobante=tc_codigo
			WHERE fac_numero=".$this->dg_iddoc_sustento ;
 
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
    $this->dg_coddoc_sustento =$this->rs[0][0];
	$this->tipo_sustento =$this->rs[0][1];
	$this->dg_serie_sustento =$this->rs[0][2];
	$this->serie_sustento =$this->rs[0][2];
	$this->secuencial_sustento =$this->rs[0][3];
	$this->dg_secuencial_sustento =$this->rs[0][3];
	$this->dg_autorizacion_sustento =$this->rs[0][4];
	$this->autorizacion_sustento =$this->rs[0][4];
	$this->dg_fecha_sustento =$this->rs[0][5];
	$this->fecha_sustento =$this->rs[0][5];
	$this->dg_nombre_destinatario =$this->rs[0][6];
	$this->dg_identificacion_destinatario =$this->rs[0][7];
	$this->dg_direccion_destino =$this->rs[0][8];
}

$update_sql = "DELETE FROM del_detalle_guia_destinatario 
WHERE dgd_destinatario=".$this->dg_id ;

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
                form_del_destinatario_guia_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$update_sql = "INSERT INTO del_detalle_guia_destinatario(
						dgd_destinatario,
						dgd_producto,
						dgd_descripcion_adicional,
						dgd_cantidad) 
				SELECT  ".$this->dg_id .",
						df_producto,
						df_descripcion,
						df_cantidad 
				FROM del_detalle_factura 
				WHERE df_factura=".$this->dg_iddoc_sustento ;

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
                form_del_destinatario_guia_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$this->sc_ajax_javascript('recargar_marco');


$modificado_dg_iddoc_sustento = $this->dg_iddoc_sustento;
$modificado_dg_coddoc_sustento = $this->dg_coddoc_sustento;
$modificado_tipo_sustento = $this->tipo_sustento;
$modificado_dg_serie_sustento = $this->dg_serie_sustento;
$modificado_serie_sustento = $this->serie_sustento;
$modificado_secuencial_sustento = $this->secuencial_sustento;
$modificado_dg_secuencial_sustento = $this->dg_secuencial_sustento;
$modificado_dg_autorizacion_sustento = $this->dg_autorizacion_sustento;
$modificado_autorizacion_sustento = $this->autorizacion_sustento;
$modificado_dg_fecha_sustento = $this->dg_fecha_sustento;
$modificado_fecha_sustento = $this->fecha_sustento;
$modificado_dg_nombre_destinatario = $this->dg_nombre_destinatario;
$modificado_dg_identificacion_destinatario = $this->dg_identificacion_destinatario;
$modificado_dg_direccion_destino = $this->dg_direccion_destino;
$modificado_dg_id = $this->dg_id;
$this->nm_formatar_campos('dg_iddoc_sustento', 'dg_coddoc_sustento', 'tipo_sustento', 'dg_serie_sustento', 'serie_sustento', 'secuencial_sustento', 'dg_secuencial_sustento', 'dg_autorizacion_sustento', 'autorizacion_sustento', 'dg_fecha_sustento', 'fecha_sustento', 'dg_nombre_destinatario', 'dg_identificacion_destinatario', 'dg_direccion_destino', 'dg_id');
if ($original_dg_iddoc_sustento !== $modificado_dg_iddoc_sustento || isset($this->nmgp_cmp_readonly['dg_iddoc_sustento']) || (isset($bFlagRead_dg_iddoc_sustento) && $bFlagRead_dg_iddoc_sustento))
{
    $this->ajax_return_values_dg_iddoc_sustento(true);
}
if ($original_dg_coddoc_sustento !== $modificado_dg_coddoc_sustento || isset($this->nmgp_cmp_readonly['dg_coddoc_sustento']) || (isset($bFlagRead_dg_coddoc_sustento) && $bFlagRead_dg_coddoc_sustento))
{
    $this->ajax_return_values_dg_coddoc_sustento(true);
}
if ($original_tipo_sustento !== $modificado_tipo_sustento || isset($this->nmgp_cmp_readonly['tipo_sustento']) || (isset($bFlagRead_tipo_sustento) && $bFlagRead_tipo_sustento))
{
    $this->ajax_return_values_tipo_sustento(true);
}
if ($original_dg_serie_sustento !== $modificado_dg_serie_sustento || isset($this->nmgp_cmp_readonly['dg_serie_sustento']) || (isset($bFlagRead_dg_serie_sustento) && $bFlagRead_dg_serie_sustento))
{
    $this->ajax_return_values_dg_serie_sustento(true);
}
if ($original_serie_sustento !== $modificado_serie_sustento || isset($this->nmgp_cmp_readonly['serie_sustento']) || (isset($bFlagRead_serie_sustento) && $bFlagRead_serie_sustento))
{
    $this->ajax_return_values_serie_sustento(true);
}
if ($original_secuencial_sustento !== $modificado_secuencial_sustento || isset($this->nmgp_cmp_readonly['secuencial_sustento']) || (isset($bFlagRead_secuencial_sustento) && $bFlagRead_secuencial_sustento))
{
    $this->ajax_return_values_secuencial_sustento(true);
}
if ($original_dg_secuencial_sustento !== $modificado_dg_secuencial_sustento || isset($this->nmgp_cmp_readonly['dg_secuencial_sustento']) || (isset($bFlagRead_dg_secuencial_sustento) && $bFlagRead_dg_secuencial_sustento))
{
    $this->ajax_return_values_dg_secuencial_sustento(true);
}
if ($original_dg_autorizacion_sustento !== $modificado_dg_autorizacion_sustento || isset($this->nmgp_cmp_readonly['dg_autorizacion_sustento']) || (isset($bFlagRead_dg_autorizacion_sustento) && $bFlagRead_dg_autorizacion_sustento))
{
    $this->ajax_return_values_dg_autorizacion_sustento(true);
}
if ($original_autorizacion_sustento !== $modificado_autorizacion_sustento || isset($this->nmgp_cmp_readonly['autorizacion_sustento']) || (isset($bFlagRead_autorizacion_sustento) && $bFlagRead_autorizacion_sustento))
{
    $this->ajax_return_values_autorizacion_sustento(true);
}
if ($original_dg_fecha_sustento !== $modificado_dg_fecha_sustento || isset($this->nmgp_cmp_readonly['dg_fecha_sustento']) || (isset($bFlagRead_dg_fecha_sustento) && $bFlagRead_dg_fecha_sustento))
{
    $this->ajax_return_values_dg_fecha_sustento(true);
}
if ($original_fecha_sustento !== $modificado_fecha_sustento || isset($this->nmgp_cmp_readonly['fecha_sustento']) || (isset($bFlagRead_fecha_sustento) && $bFlagRead_fecha_sustento))
{
    $this->ajax_return_values_fecha_sustento(true);
}
if ($original_dg_nombre_destinatario !== $modificado_dg_nombre_destinatario || isset($this->nmgp_cmp_readonly['dg_nombre_destinatario']) || (isset($bFlagRead_dg_nombre_destinatario) && $bFlagRead_dg_nombre_destinatario))
{
    $this->ajax_return_values_dg_nombre_destinatario(true);
}
if ($original_dg_identificacion_destinatario !== $modificado_dg_identificacion_destinatario || isset($this->nmgp_cmp_readonly['dg_identificacion_destinatario']) || (isset($bFlagRead_dg_identificacion_destinatario) && $bFlagRead_dg_identificacion_destinatario))
{
    $this->ajax_return_values_dg_identificacion_destinatario(true);
}
if ($original_dg_direccion_destino !== $modificado_dg_direccion_destino || isset($this->nmgp_cmp_readonly['dg_direccion_destino']) || (isset($bFlagRead_dg_direccion_destino) && $bFlagRead_dg_direccion_destino))
{
    $this->ajax_return_values_dg_direccion_destino(true);
}
if ($original_dg_id !== $modificado_dg_id || isset($this->nmgp_cmp_readonly['dg_id']) || (isset($bFlagRead_dg_id) && $bFlagRead_dg_id))
{
    $this->ajax_return_values_dg_id(true);
}
$this->NM_ajax_info['event_field'] = 'dg';
form_del_destinatario_guia_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_destinatario_guia_mob']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_del_destinatario_guia_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_del_destinatario_guia_mob_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("dg_id", "dg_guia", "dg_empresa", "dg_identificacion_destinatario", "dg_nombre_destinatario", "dg_establecimiento_destino", "dg_documento_aduanero", "dg_iddoc_sustento", "dg_coddoc_sustento", "dg_serie_sustento", "dg_secuencial_sustento", "dg_autorizacion_sustento", "dg_direccion_destino", "dg_motivo_traslado", "dg_ruta"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['csrf_token'];
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

   function Form_lookup_dg_establecimiento_destino()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'] = array(); 
    }

   $old_value_dg_iddoc_sustento = $this->dg_iddoc_sustento;
   $old_value_fecha_sustento = $this->fecha_sustento;
   $old_value_dg_fecha_sustento = $this->dg_fecha_sustento;
   $old_value_dg_id = $this->dg_id;
   $old_value_dg_guia = $this->dg_guia;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_dg_iddoc_sustento = $this->dg_iddoc_sustento;
   $unformatted_value_fecha_sustento = $this->fecha_sustento;
   $unformatted_value_dg_fecha_sustento = $this->dg_fecha_sustento;
   $unformatted_value_dg_id = $this->dg_id;
   $unformatted_value_dg_guia = $this->dg_guia;

   $nm_comando = "SELECT est_id, est_codigo  FROM del_establecimiento  WHERE est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY est_codigo";

   $this->dg_iddoc_sustento = $old_value_dg_iddoc_sustento;
   $this->fecha_sustento = $old_value_fecha_sustento;
   $this->dg_fecha_sustento = $old_value_dg_fecha_sustento;
   $this->dg_id = $old_value_dg_id;
   $this->dg_guia = $old_value_dg_guia;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'][] = $rs->fields[0];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_del_destinatario_guia_mob_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "dg_id", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_guia", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_empresa", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_identificacion_destinatario", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_nombre_destinatario", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_dg_establecimiento_destino($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "dg_establecimiento_destino", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_documento_aduanero", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_iddoc_sustento", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_coddoc_sustento", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_serie_sustento", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_secuencial_sustento", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_autorizacion_sustento", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_direccion_destino", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_motivo_traslado", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "dg_ruta", $arg_search, $data_search, "VARCHAR", false);
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter_form'] . " and ((dg_id=" . $_SESSION['var_id_destinatario'] . ")) and (" . $comando . ")";
      }
      else
      {
          $sc_where = " where (dg_id=" . $_SESSION['var_id_destinatario'] . ") and (" . $comando . ")";
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_del_destinatario_guia_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['total'] = $qt_geral_reg_form_del_destinatario_guia_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_destinatario_guia_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_destinatario_guia_mob_pack_ajax_response();
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
      $nm_numeric[] = "dg_id";$nm_numeric[] = "dg_guia";$nm_numeric[] = "dg_establecimiento_destino";$nm_numeric[] = "dg_iddoc_sustento";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['decimal_db'] == ".")
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
      $Nm_datas["dg_fecha_sustento"] = "date";$Nm_datas[""] = "date";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['SC_sep_date1'];
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
   function SC_lookup_dg_establecimiento_destino($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (isset($this->Ini->nm_bases_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT est_codigo, est_id FROM del_establecimiento WHERE (CAST (est_id AS TEXT) LIKE '%$campo%') AND (est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
       }
       else
       {
           $nm_comando = "SELECT est_codigo, est_id FROM del_establecimiento WHERE (#cmp_iest_codigo#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos) AND (est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
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
       $nmgp_saida_form = "form_del_destinatario_guia_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_del_destinatario_guia_mob_fim.php";
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
       form_del_destinatario_guia_mob_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['masterValue']);
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
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "help":
                return array("sc_b_hlp_b");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-1", "sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_b.sc-unique-btn-8", "sc_b_sai_b.sc-unique-btn-10", "sc_b_sai_t.sc-unique-btn-14", "sc_b_sai_t.sc-unique-btn-16", "sc_b_sai_b.sc-unique-btn-21", "sc_b_sai_b.sc-unique-btn-23", "sc_b_sai_t.sc-unique-btn-2", "sc_b_sai_b.sc-unique-btn-9", "sc_b_sai_t.sc-unique-btn-15", "sc_b_sai_b.sc-unique-btn-22");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-4", "sys_separator.sc-unique-btn-7", "sys_separator.sc-unique-btn-11", "sys_separator.sc-unique-btn-17", "sys_separator.sc-unique-btn-20", "sys_separator.sc-unique-btn-24");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-5", "sc_b_upd_b.sc-unique-btn-12", "sc_b_upd_t.sc-unique-btn-18", "sc_b_upd_b.sc-unique-btn-25");
                break;
            case "delete":
                return array("sc_b_del_t.sc-unique-btn-6", "sc_b_del_b.sc-unique-btn-13", "sc_b_del_t.sc-unique-btn-19", "sc_b_del_b.sc-unique-btn-26");
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['ordem_ord'] == " desc") {
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
            case "dg_iddoc_sustento":
                return true;
            case "dg_id":
                return true;
            case "dg_guia":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "dg_iddoc_sustento":
                return 'desc';
            case "dg_fecha_sustento":
                return 'desc';
            case "dg_id":
                return 'desc';
            case "dg_guia":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
