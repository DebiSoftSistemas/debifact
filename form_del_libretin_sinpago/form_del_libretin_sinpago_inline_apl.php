<?php
//
class form_del_libretin_sinpago_inline_apl
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
   var $lib_id_;
   var $lib_punto_emision_;
   var $lib_tipo_comprobante_;
   var $lib_tipo_comprobante__1;
   var $lib_secuencial_;
   var $lib_disponibles_;
   var $lib_estado_;
   var $lib_estado__1;
   var $lib_tipo_libretin_;
   var $lib_tipo_libretin__1;
   var $lib_utilizados_;
   var $lib_desde_;
   var $lib_hasta_;
   var $lib_autorizacion_;
   var $lib_fecha_caducidad_;
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
          if (isset($this->NM_ajax_info['param']['lib_autorizacion_']))
          {
              $this->lib_autorizacion_ = $this->NM_ajax_info['param']['lib_autorizacion_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_desde_']))
          {
              $this->lib_desde_ = $this->NM_ajax_info['param']['lib_desde_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_disponibles_']))
          {
              $this->lib_disponibles_ = $this->NM_ajax_info['param']['lib_disponibles_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_estado_']))
          {
              $this->lib_estado_ = $this->NM_ajax_info['param']['lib_estado_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_fecha_caducidad_']))
          {
              $this->lib_fecha_caducidad_ = $this->NM_ajax_info['param']['lib_fecha_caducidad_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_hasta_']))
          {
              $this->lib_hasta_ = $this->NM_ajax_info['param']['lib_hasta_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_id_']))
          {
              $this->lib_id_ = $this->NM_ajax_info['param']['lib_id_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_punto_emision_']))
          {
              $this->lib_punto_emision_ = $this->NM_ajax_info['param']['lib_punto_emision_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_secuencial_']))
          {
              $this->lib_secuencial_ = $this->NM_ajax_info['param']['lib_secuencial_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_tipo_comprobante_']))
          {
              $this->lib_tipo_comprobante_ = $this->NM_ajax_info['param']['lib_tipo_comprobante_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_tipo_libretin_']))
          {
              $this->lib_tipo_libretin_ = $this->NM_ajax_info['param']['lib_tipo_libretin_'];
          }
          if (isset($this->NM_ajax_info['param']['lib_utilizados_']))
          {
              $this->lib_utilizados_ = $this->NM_ajax_info['param']['lib_utilizados_'];
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
      $this->sc_conv_var['lib_id'] = "lib_id_";
      $this->sc_conv_var['lib_punto_emision'] = "lib_punto_emision_";
      $this->sc_conv_var['lib_tipo_comprobante'] = "lib_tipo_comprobante_";
      $this->sc_conv_var['lib_secuencial'] = "lib_secuencial_";
      $this->sc_conv_var['lib_disponibles'] = "lib_disponibles_";
      $this->sc_conv_var['lib_estado'] = "lib_estado_";
      $this->sc_conv_var['lib_tipo_libretin'] = "lib_tipo_libretin_";
      $this->sc_conv_var['lib_utilizados'] = "lib_utilizados_";
      $this->sc_conv_var['lib_desde'] = "lib_desde_";
      $this->sc_conv_var['lib_hasta'] = "lib_hasta_";
      $this->sc_conv_var['lib_autorizacion'] = "lib_autorizacion_";
      $this->sc_conv_var['lib_fecha_caducidad'] = "lib_fecha_caducidad_";
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
      if (isset($_POST["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_POST["Igtech_RucEmpresa"]) && isset($_POST["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_POST["igtech_rucempresa"];
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
          $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['embutida_parms']);
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
                 nm_limpa_str_form_del_libretin_sinpago_inline($cadapar[1]);
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
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['sc_redir_insert'] = $this->sc_redir_insert;
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
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_del_libretin_sinpago_inline_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_del_libretin_sinpago_inline']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_libretin_sinpago_inline']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_libretin_sinpago_inline'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_libretin_sinpago_inline']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_libretin_sinpago_inline']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_del_libretin_sinpago_inline') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_libretin_sinpago_inline']['label'] = "" . $this->Ini->Nm_lang['lang_libretin'] . "";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_del_libretin_sinpago_inline")
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
      $this->nm_new_label['lib_id_'] = '' . $this->Ini->Nm_lang['lang_id'] . '';
      $this->nm_new_label['lib_punto_emision_'] = '' . $this->Ini->Nm_lang['lang_punto_emision'] . '';
      $this->nm_new_label['lib_tipo_comprobante_'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['lib_secuencial_'] = '' . $this->Ini->Nm_lang['lang_secuencial'] . '';
      $this->nm_new_label['lib_disponibles_'] = '' . $this->Ini->Nm_lang['lang_chart_available'] . '';
      $this->nm_new_label['lib_estado_'] = '' . $this->Ini->Nm_lang['lang_estado'] . '';
      $this->nm_new_label['lib_tipo_libretin_'] = '' . $this->Ini->Nm_lang['lang_tipo_libretin'] . '';
      $this->nm_new_label['lib_utilizados_'] = '' . $this->Ini->Nm_lang['lang_utilizados'] . '';
      $this->nm_new_label['lib_desde_'] = '' . $this->Ini->Nm_lang['lang_desde'] . '';
      $this->nm_new_label['lib_hasta_'] = '' . $this->Ini->Nm_lang['lang_hasta'] . '';
      $this->nm_new_label['lib_autorizacion_'] = '' . $this->Ini->Nm_lang['lang_autorizacion'] . '';
      $this->nm_new_label['lib_fecha_caducidad_'] = '' . $this->Ini->Nm_lang['lang_fecha_caducidad'] . '';

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



      $_SESSION['scriptcase']['error_icon']['form_del_libretin_sinpago_inline']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_del_libretin_sinpago_inline'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['embutida_proc'])) {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_proc'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['embutida_proc'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['embutida_form'])) {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_form'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['embutida_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['embutida_call'])) {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_call'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['embutida_call'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['foreign_key'])) {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['foreign_key'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago']['field_display'])) {
         $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['field_display'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago']['field_display'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago']['field_readonly'])) {
         $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['field_readonly'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago']['field_readonly'];
      }
      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
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
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_libretin_sinpago_inline']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_libretin_sinpago_inline'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_libretin_sinpago_inline'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_form'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_del_libretin_sinpago_inline", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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
              include_once($this->Ini->path_embutida . 'form_del_libretin_sinpago/form_del_libretin_sinpago_inline_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_del_libretin_sinpago_inline_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_del_libretin_sinpago_inline_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_del_libretin_sinpago_inline_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_del_libretin_sinpago/form_del_libretin_sinpago_inline_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_del_libretin_sinpago_inline_erro.class.php"); 
      }
      $this->Erro      = new form_del_libretin_sinpago_inline_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao']))
         { 
             if ($this->lib_id_ != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_del_libretin_sinpago_inline']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_form'];
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

            $out1_img_cache = $_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($this->lib_id_)) { $this->nm_limpa_alfa($this->lib_id_); }
      if (isset($this->lib_punto_emision_)) { $this->nm_limpa_alfa($this->lib_punto_emision_); }
      if (isset($this->lib_tipo_comprobante_)) { $this->nm_limpa_alfa($this->lib_tipo_comprobante_); }
      if (isset($this->lib_secuencial_)) { $this->nm_limpa_alfa($this->lib_secuencial_); }
      if (isset($this->lib_disponibles_)) { $this->nm_limpa_alfa($this->lib_disponibles_); }
      if (isset($this->lib_estado_)) { $this->nm_limpa_alfa($this->lib_estado_); }
      if (isset($this->lib_tipo_libretin_)) { $this->nm_limpa_alfa($this->lib_tipo_libretin_); }
      if (isset($this->lib_utilizados_)) { $this->nm_limpa_alfa($this->lib_utilizados_); }
      if (isset($this->lib_desde_)) { $this->nm_limpa_alfa($this->lib_desde_); }
      if (isset($this->lib_hasta_)) { $this->nm_limpa_alfa($this->lib_hasta_); }
      if (isset($this->lib_autorizacion_)) { $this->nm_limpa_alfa($this->lib_autorizacion_); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- lib_id_
      $this->field_config['lib_id_']               = array();
      $this->field_config['lib_id_']['symbol_grp'] = '';
      $this->field_config['lib_id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['lib_id_']['symbol_dec'] = '';
      $this->field_config['lib_id_']['symbol_neg'] = '-';
      $this->field_config['lib_id_']['format_neg'] = '2';
      //-- lib_desde_
      $this->field_config['lib_desde_']               = array();
      $this->field_config['lib_desde_']['symbol_grp'] = '';
      $this->field_config['lib_desde_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['lib_desde_']['symbol_dec'] = '';
      $this->field_config['lib_desde_']['symbol_neg'] = '-';
      $this->field_config['lib_desde_']['format_neg'] = '2';
      //-- lib_hasta_
      $this->field_config['lib_hasta_']               = array();
      $this->field_config['lib_hasta_']['symbol_grp'] = '';
      $this->field_config['lib_hasta_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['lib_hasta_']['symbol_dec'] = '';
      $this->field_config['lib_hasta_']['symbol_neg'] = '-';
      $this->field_config['lib_hasta_']['format_neg'] = '2';
      //-- lib_secuencial_
      $this->field_config['lib_secuencial_']               = array();
      $this->field_config['lib_secuencial_']['symbol_grp'] = '';
      $this->field_config['lib_secuencial_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['lib_secuencial_']['symbol_dec'] = '';
      $this->field_config['lib_secuencial_']['symbol_neg'] = '-';
      $this->field_config['lib_secuencial_']['format_neg'] = '2';
      //-- lib_fecha_caducidad_
      $this->field_config['lib_fecha_caducidad_']                 = array();
      $this->field_config['lib_fecha_caducidad_']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['lib_fecha_caducidad_']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['lib_fecha_caducidad_']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'lib_fecha_caducidad_');
      //-- lib_disponibles_
      $this->field_config['lib_disponibles_']               = array();
      $this->field_config['lib_disponibles_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['lib_disponibles_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['lib_disponibles_']['symbol_dec'] = '';
      $this->field_config['lib_disponibles_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['lib_disponibles_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- lib_utilizados_
      $this->field_config['lib_utilizados_']               = array();
      $this->field_config['lib_utilizados_']['symbol_grp'] = '';
      $this->field_config['lib_utilizados_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['lib_utilizados_']['symbol_dec'] = '';
      $this->field_config['lib_utilizados_']['symbol_neg'] = '-';
      $this->field_config['lib_utilizados_']['format_neg'] = '2';
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Gera_log_access'] = false;
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
          if ('validate_lib_id_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_id_');
          }
          if ('validate_lib_tipo_comprobante_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_tipo_comprobante_');
          }
          if ('validate_lib_punto_emision_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_punto_emision_');
          }
          if ('validate_lib_tipo_libretin_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_tipo_libretin_');
          }
          if ('validate_lib_desde_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_desde_');
          }
          if ('validate_lib_hasta_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_hasta_');
          }
          if ('validate_lib_secuencial_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_secuencial_');
          }
          if ('validate_lib_autorizacion_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_autorizacion_');
          }
          if ('validate_lib_fecha_caducidad_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_fecha_caducidad_');
          }
          if ('validate_lib_estado_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_estado_');
          }
          if ('validate_lib_disponibles_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_disponibles_');
          }
          if ('validate_lib_utilizados_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lib_utilizados_');
          }
          form_del_libretin_sinpago_inline_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_lib_tipo_libretin__onblur' == $this->NM_ajax_opcao)
          {
              $this->lib_tipo_libretin__onBlur();
          }
          if ('event_lib_tipo_libretin__onchange' == $this->NM_ajax_opcao)
          {
              $this->lib_tipo_libretin__onChange();
          }
          form_del_libretin_sinpago_inline_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_del_libretin_sinpago_inline_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_del_libretin_sinpago_inline_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_del_libretin_sinpago_inline_pack_ajax_response();
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
          form_del_libretin_sinpago_inline_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_del_libretin_sinpago_inline.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_libretin'] . "") ?></TITLE>
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
<form name="Fdown" method="get" action="form_del_libretin_sinpago_inline_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_del_libretin_sinpago_inline"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_del_libretin_sinpago_inline.php" target="_self" style="display: none"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_libretin_sinpago_inline', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_del_libretin_sinpago_inline', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_libretin_sinpago_inline', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_del_libretin_sinpago_inline_pack_ajax_response();
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
           case 'lib_id_':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
               break;
           case 'lib_tipo_comprobante_':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
               break;
           case 'lib_punto_emision_':
               return "" . $this->Ini->Nm_lang['lang_punto_emision'] . "";
               break;
           case 'lib_tipo_libretin_':
               return "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
               break;
           case 'lib_desde_':
               return "" . $this->Ini->Nm_lang['lang_desde'] . "";
               break;
           case 'lib_hasta_':
               return "" . $this->Ini->Nm_lang['lang_hasta'] . "";
               break;
           case 'lib_secuencial_':
               return "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
               break;
           case 'lib_autorizacion_':
               return "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
               break;
           case 'lib_fecha_caducidad_':
               return "" . $this->Ini->Nm_lang['lang_fecha_caducidad'] . "";
               break;
           case 'lib_estado_':
               return "" . $this->Ini->Nm_lang['lang_estado'] . "";
               break;
           case 'lib_disponibles_':
               return "" . $this->Ini->Nm_lang['lang_chart_available'] . "";
               break;
           case 'lib_utilizados_':
               return "" . $this->Ini->Nm_lang['lang_utilizados'] . "";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_del_libretin_sinpago_inline']) || !is_array($this->NM_ajax_info['errList']['geral_form_del_libretin_sinpago_inline']))
              {
                  $this->NM_ajax_info['errList']['geral_form_del_libretin_sinpago_inline'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_del_libretin_sinpago_inline'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'lib_id_' == $filtro)) || (is_array($filtro) && in_array('lib_id_', $filtro)))
        $this->ValidateField_lib_id_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_tipo_comprobante_' == $filtro)) || (is_array($filtro) && in_array('lib_tipo_comprobante_', $filtro)))
        $this->ValidateField_lib_tipo_comprobante_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_punto_emision_' == $filtro)) || (is_array($filtro) && in_array('lib_punto_emision_', $filtro)))
        $this->ValidateField_lib_punto_emision_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_tipo_libretin_' == $filtro)) || (is_array($filtro) && in_array('lib_tipo_libretin_', $filtro)))
        $this->ValidateField_lib_tipo_libretin_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_desde_' == $filtro)) || (is_array($filtro) && in_array('lib_desde_', $filtro)))
        $this->ValidateField_lib_desde_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_hasta_' == $filtro)) || (is_array($filtro) && in_array('lib_hasta_', $filtro)))
        $this->ValidateField_lib_hasta_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_secuencial_' == $filtro)) || (is_array($filtro) && in_array('lib_secuencial_', $filtro)))
        $this->ValidateField_lib_secuencial_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_autorizacion_' == $filtro)) || (is_array($filtro) && in_array('lib_autorizacion_', $filtro)))
        $this->ValidateField_lib_autorizacion_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_fecha_caducidad_' == $filtro)) || (is_array($filtro) && in_array('lib_fecha_caducidad_', $filtro)))
        $this->ValidateField_lib_fecha_caducidad_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_estado_' == $filtro)) || (is_array($filtro) && in_array('lib_estado_', $filtro)))
        $this->ValidateField_lib_estado_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_disponibles_' == $filtro)) || (is_array($filtro) && in_array('lib_disponibles_', $filtro)))
        $this->ValidateField_lib_disponibles_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'lib_utilizados_' == $filtro)) || (is_array($filtro) && in_array('lib_utilizados_', $filtro)))
        $this->ValidateField_lib_utilizados_($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

    function ValidateField_lib_id_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['lib_id_'])) {
          nm_limpa_numero($this->lib_id_, $this->field_config['lib_id_']['symbol_grp']) ; 
          return;
      }
      if ($this->lib_id_ === "" || is_null($this->lib_id_))  
      { 
          $this->lib_id_ = 0;
      } 
      nm_limpa_numero($this->lib_id_, $this->field_config['lib_id_']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->lib_id_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->lib_id_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['lib_id_']))
                  {
                      $Campos_Erros['lib_id_'] = array();
                  }
                  $Campos_Erros['lib_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['lib_id_']) || !is_array($this->NM_ajax_info['errList']['lib_id_']))
                  {
                      $this->NM_ajax_info['errList']['lib_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->lib_id_, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . "; " ; 
                  if (!isset($Campos_Erros['lib_id_']))
                  {
                      $Campos_Erros['lib_id_'] = array();
                  }
                  $Campos_Erros['lib_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['lib_id_']) || !is_array($this->NM_ajax_info['errList']['lib_id_']))
                  {
                      $this->NM_ajax_info['errList']['lib_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_id_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_id_

    function ValidateField_lib_tipo_comprobante_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['lib_tipo_comprobante_'])) {
       return;
   }
      if ($this->lib_tipo_comprobante_ == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_tipo_comprobante_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_tipo_comprobante_'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "" ; 
          if (!isset($Campos_Erros['lib_tipo_comprobante_']))
          {
              $Campos_Erros['lib_tipo_comprobante_'] = array();
          }
          $Campos_Erros['lib_tipo_comprobante_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['lib_tipo_comprobante_']) || !is_array($this->NM_ajax_info['errList']['lib_tipo_comprobante_']))
          {
              $this->NM_ajax_info['errList']['lib_tipo_comprobante_'] = array();
          }
          $this->NM_ajax_info['errList']['lib_tipo_comprobante_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->lib_tipo_comprobante_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']) && !in_array($this->lib_tipo_comprobante_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['lib_tipo_comprobante_']))
              {
                  $Campos_Erros['lib_tipo_comprobante_'] = array();
              }
              $Campos_Erros['lib_tipo_comprobante_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['lib_tipo_comprobante_']) || !is_array($this->NM_ajax_info['errList']['lib_tipo_comprobante_']))
              {
                  $this->NM_ajax_info['errList']['lib_tipo_comprobante_'] = array();
              }
              $this->NM_ajax_info['errList']['lib_tipo_comprobante_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_tipo_comprobante_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_tipo_comprobante_

    function ValidateField_lib_punto_emision_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['lib_punto_emision_'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_punto_emision_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_punto_emision_'] == "on")) 
      { 
          if ($this->lib_punto_emision_ == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_punto_emision'] . "" ; 
              if (!isset($Campos_Erros['lib_punto_emision_']))
              {
                  $Campos_Erros['lib_punto_emision_'] = array();
              }
              $Campos_Erros['lib_punto_emision_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['lib_punto_emision_']) || !is_array($this->NM_ajax_info['errList']['lib_punto_emision_']))
                  {
                      $this->NM_ajax_info['errList']['lib_punto_emision_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_punto_emision_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->lib_punto_emision_) > 9) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_punto_emision'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 9 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['lib_punto_emision_']))
              {
                  $Campos_Erros['lib_punto_emision_'] = array();
              }
              $Campos_Erros['lib_punto_emision_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 9 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['lib_punto_emision_']) || !is_array($this->NM_ajax_info['errList']['lib_punto_emision_']))
              {
                  $this->NM_ajax_info['errList']['lib_punto_emision_'] = array();
              }
              $this->NM_ajax_info['errList']['lib_punto_emision_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 9 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_punto_emision_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_punto_emision_

    function ValidateField_lib_tipo_libretin_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['lib_tipo_libretin_'])) {
       return;
   }
      if ($this->lib_tipo_libretin_ == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_tipo_libretin_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_tipo_libretin_'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "" ; 
          if (!isset($Campos_Erros['lib_tipo_libretin_']))
          {
              $Campos_Erros['lib_tipo_libretin_'] = array();
          }
          $Campos_Erros['lib_tipo_libretin_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['lib_tipo_libretin_']) || !is_array($this->NM_ajax_info['errList']['lib_tipo_libretin_']))
          {
              $this->NM_ajax_info['errList']['lib_tipo_libretin_'] = array();
          }
          $this->NM_ajax_info['errList']['lib_tipo_libretin_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->lib_tipo_libretin_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']) && !in_array($this->lib_tipo_libretin_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['lib_tipo_libretin_']))
              {
                  $Campos_Erros['lib_tipo_libretin_'] = array();
              }
              $Campos_Erros['lib_tipo_libretin_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['lib_tipo_libretin_']) || !is_array($this->NM_ajax_info['errList']['lib_tipo_libretin_']))
              {
                  $this->NM_ajax_info['errList']['lib_tipo_libretin_'] = array();
              }
              $this->NM_ajax_info['errList']['lib_tipo_libretin_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_tipo_libretin_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_tipo_libretin_

    function ValidateField_lib_desde_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['lib_desde_'])) {
          nm_limpa_numero($this->lib_desde_, $this->field_config['lib_desde_']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->lib_desde_, $this->field_config['lib_desde_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->lib_desde_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->lib_desde_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_desde'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['lib_desde_']))
                  {
                      $Campos_Erros['lib_desde_'] = array();
                  }
                  $Campos_Erros['lib_desde_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['lib_desde_']) || !is_array($this->NM_ajax_info['errList']['lib_desde_']))
                  {
                      $this->NM_ajax_info['errList']['lib_desde_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_desde_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->lib_desde_, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_desde'] . "; " ; 
                  if (!isset($Campos_Erros['lib_desde_']))
                  {
                      $Campos_Erros['lib_desde_'] = array();
                  }
                  $Campos_Erros['lib_desde_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['lib_desde_']) || !is_array($this->NM_ajax_info['errList']['lib_desde_']))
                  {
                      $this->NM_ajax_info['errList']['lib_desde_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_desde_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_desde_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_desde_'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_desde'] . "" ; 
              if (!isset($Campos_Erros['lib_desde_']))
              {
                  $Campos_Erros['lib_desde_'] = array();
              }
              $Campos_Erros['lib_desde_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['lib_desde_']) || !is_array($this->NM_ajax_info['errList']['lib_desde_']))
                  {
                      $this->NM_ajax_info['errList']['lib_desde_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_desde_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_desde_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_desde_

    function ValidateField_lib_hasta_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['lib_hasta_'])) {
          nm_limpa_numero($this->lib_hasta_, $this->field_config['lib_hasta_']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->lib_hasta_, $this->field_config['lib_hasta_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->lib_hasta_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->lib_hasta_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_hasta'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['lib_hasta_']))
                  {
                      $Campos_Erros['lib_hasta_'] = array();
                  }
                  $Campos_Erros['lib_hasta_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['lib_hasta_']) || !is_array($this->NM_ajax_info['errList']['lib_hasta_']))
                  {
                      $this->NM_ajax_info['errList']['lib_hasta_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_hasta_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->lib_hasta_, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_hasta'] . "; " ; 
                  if (!isset($Campos_Erros['lib_hasta_']))
                  {
                      $Campos_Erros['lib_hasta_'] = array();
                  }
                  $Campos_Erros['lib_hasta_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['lib_hasta_']) || !is_array($this->NM_ajax_info['errList']['lib_hasta_']))
                  {
                      $this->NM_ajax_info['errList']['lib_hasta_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_hasta_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_hasta_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_hasta_'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_hasta'] . "" ; 
              if (!isset($Campos_Erros['lib_hasta_']))
              {
                  $Campos_Erros['lib_hasta_'] = array();
              }
              $Campos_Erros['lib_hasta_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['lib_hasta_']) || !is_array($this->NM_ajax_info['errList']['lib_hasta_']))
                  {
                      $this->NM_ajax_info['errList']['lib_hasta_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_hasta_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_hasta_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_hasta_

    function ValidateField_lib_secuencial_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['lib_secuencial_'])) {
          nm_limpa_numero($this->lib_secuencial_, $this->field_config['lib_secuencial_']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->lib_secuencial_, $this->field_config['lib_secuencial_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->lib_secuencial_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->lib_secuencial_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['lib_secuencial_']))
                  {
                      $Campos_Erros['lib_secuencial_'] = array();
                  }
                  $Campos_Erros['lib_secuencial_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['lib_secuencial_']) || !is_array($this->NM_ajax_info['errList']['lib_secuencial_']))
                  {
                      $this->NM_ajax_info['errList']['lib_secuencial_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_secuencial_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->lib_secuencial_, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_secuencial'] . "; " ; 
                  if (!isset($Campos_Erros['lib_secuencial_']))
                  {
                      $Campos_Erros['lib_secuencial_'] = array();
                  }
                  $Campos_Erros['lib_secuencial_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['lib_secuencial_']) || !is_array($this->NM_ajax_info['errList']['lib_secuencial_']))
                  {
                      $this->NM_ajax_info['errList']['lib_secuencial_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_secuencial_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_secuencial_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_secuencial_'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "" ; 
              if (!isset($Campos_Erros['lib_secuencial_']))
              {
                  $Campos_Erros['lib_secuencial_'] = array();
              }
              $Campos_Erros['lib_secuencial_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['lib_secuencial_']) || !is_array($this->NM_ajax_info['errList']['lib_secuencial_']))
                  {
                      $this->NM_ajax_info['errList']['lib_secuencial_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_secuencial_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_secuencial_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_secuencial_

    function ValidateField_lib_autorizacion_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['lib_autorizacion_'])) {
          return;
      }
      $this->lib_autorizacion_ = sc_strtoupper($this->lib_autorizacion_); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->lib_autorizacion_) > 10) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_autorizacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['lib_autorizacion_']))
              {
                  $Campos_Erros['lib_autorizacion_'] = array();
              }
              $Campos_Erros['lib_autorizacion_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['lib_autorizacion_']) || !is_array($this->NM_ajax_info['errList']['lib_autorizacion_']))
              {
                  $this->NM_ajax_info['errList']['lib_autorizacion_'] = array();
              }
              $this->NM_ajax_info['errList']['lib_autorizacion_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "0123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->lib_autorizacion_ ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->lib_autorizacion_, $_SESSION['scriptcase']['charset']); $x++) 
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
              if (!isset($Campos_Erros['lib_autorizacion_']))
              {
                  $Campos_Erros['lib_autorizacion_'] = array();
              }
              $Campos_Erros['lib_autorizacion_'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['lib_autorizacion_']) || !is_array($this->NM_ajax_info['errList']['lib_autorizacion_']))
              {
                  $this->NM_ajax_info['errList']['lib_autorizacion_'] = array();
              }
              $this->NM_ajax_info['errList']['lib_autorizacion_'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_autorizacion_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_autorizacion_

    function ValidateField_lib_fecha_caducidad_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->lib_fecha_caducidad_, $this->field_config['lib_fecha_caducidad_']['date_sep']) ; 
      if (isset($this->Field_no_validate['lib_fecha_caducidad_'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['lib_fecha_caducidad_']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['lib_fecha_caducidad_']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['lib_fecha_caducidad_']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['lib_fecha_caducidad_']['date_sep']) ; 
          if (trim($this->lib_fecha_caducidad_) != "")  
          { 
              if ($teste_validade->Data($this->lib_fecha_caducidad_, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha_caducidad'] . "; " ; 
                  if (!isset($Campos_Erros['lib_fecha_caducidad_']))
                  {
                      $Campos_Erros['lib_fecha_caducidad_'] = array();
                  }
                  $Campos_Erros['lib_fecha_caducidad_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['lib_fecha_caducidad_']) || !is_array($this->NM_ajax_info['errList']['lib_fecha_caducidad_']))
                  {
                      $this->NM_ajax_info['errList']['lib_fecha_caducidad_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_fecha_caducidad_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['lib_fecha_caducidad_']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_fecha_caducidad_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_fecha_caducidad_

    function ValidateField_lib_estado_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['lib_estado_'])) {
       return;
   }
               if (!empty($this->lib_estado_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']) && !in_array($this->lib_estado_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['lib_estado_']))
                   {
                       $Campos_Erros['lib_estado_'] = array();
                   }
                   $Campos_Erros['lib_estado_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['lib_estado_']) || !is_array($this->NM_ajax_info['errList']['lib_estado_']))
                   {
                       $this->NM_ajax_info['errList']['lib_estado_'] = array();
                   }
                   $this->NM_ajax_info['errList']['lib_estado_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_estado_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_estado_

    function ValidateField_lib_disponibles_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['lib_disponibles_'])) {
          nm_limpa_numero($this->lib_disponibles_, $this->field_config['lib_disponibles_']['symbol_grp']) ; 
          return;
      }
      if ($this->lib_disponibles_ === "" || is_null($this->lib_disponibles_))  
      { 
          $this->lib_disponibles_ = 0;
          $this->sc_force_zero[] = 'lib_disponibles_';
      } 
      nm_limpa_numero($this->lib_disponibles_, $this->field_config['lib_disponibles_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->lib_disponibles_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->lib_disponibles_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_chart_available'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['lib_disponibles_']))
                  {
                      $Campos_Erros['lib_disponibles_'] = array();
                  }
                  $Campos_Erros['lib_disponibles_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['lib_disponibles_']) || !is_array($this->NM_ajax_info['errList']['lib_disponibles_']))
                  {
                      $this->NM_ajax_info['errList']['lib_disponibles_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_disponibles_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->lib_disponibles_, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_chart_available'] . "; " ; 
                  if (!isset($Campos_Erros['lib_disponibles_']))
                  {
                      $Campos_Erros['lib_disponibles_'] = array();
                  }
                  $Campos_Erros['lib_disponibles_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['lib_disponibles_']) || !is_array($this->NM_ajax_info['errList']['lib_disponibles_']))
                  {
                      $this->NM_ajax_info['errList']['lib_disponibles_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_disponibles_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_disponibles_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_disponibles_

    function ValidateField_lib_utilizados_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['lib_utilizados_'])) {
          nm_limpa_numero($this->lib_utilizados_, $this->field_config['lib_utilizados_']['symbol_grp']) ; 
          return;
      }
      if ($this->lib_utilizados_ === "" || is_null($this->lib_utilizados_))  
      { 
          $this->lib_utilizados_ = 0;
          $this->sc_force_zero[] = 'lib_utilizados_';
      } 
      nm_limpa_numero($this->lib_utilizados_, $this->field_config['lib_utilizados_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->lib_utilizados_ != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->lib_utilizados_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_utilizados'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['lib_utilizados_']))
                  {
                      $Campos_Erros['lib_utilizados_'] = array();
                  }
                  $Campos_Erros['lib_utilizados_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['lib_utilizados_']) || !is_array($this->NM_ajax_info['errList']['lib_utilizados_']))
                  {
                      $this->NM_ajax_info['errList']['lib_utilizados_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_utilizados_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->lib_utilizados_, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_utilizados'] . "; " ; 
                  if (!isset($Campos_Erros['lib_utilizados_']))
                  {
                      $Campos_Erros['lib_utilizados_'] = array();
                  }
                  $Campos_Erros['lib_utilizados_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['lib_utilizados_']) || !is_array($this->NM_ajax_info['errList']['lib_utilizados_']))
                  {
                      $this->NM_ajax_info['errList']['lib_utilizados_'] = array();
                  }
                  $this->NM_ajax_info['errList']['lib_utilizados_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'lib_utilizados_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_lib_utilizados_

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
    $this->nmgp_dados_form['lib_id_'] = $this->lib_id_;
    $this->nmgp_dados_form['lib_tipo_comprobante_'] = $this->lib_tipo_comprobante_;
    $this->nmgp_dados_form['lib_punto_emision_'] = $this->lib_punto_emision_;
    $this->nmgp_dados_form['lib_tipo_libretin_'] = $this->lib_tipo_libretin_;
    $this->nmgp_dados_form['lib_desde_'] = $this->lib_desde_;
    $this->nmgp_dados_form['lib_hasta_'] = $this->lib_hasta_;
    $this->nmgp_dados_form['lib_secuencial_'] = $this->lib_secuencial_;
    $this->nmgp_dados_form['lib_autorizacion_'] = $this->lib_autorizacion_;
    $this->nmgp_dados_form['lib_fecha_caducidad_'] = (strlen(trim($this->lib_fecha_caducidad_)) > 19) ? str_replace(".", ":", $this->lib_fecha_caducidad_) : trim($this->lib_fecha_caducidad_);
    $this->nmgp_dados_form['lib_estado_'] = $this->lib_estado_;
    $this->nmgp_dados_form['lib_disponibles_'] = $this->lib_disponibles_;
    $this->nmgp_dados_form['lib_utilizados_'] = $this->lib_utilizados_;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['lib_id_'] = $this->lib_id_;
      nm_limpa_numero($this->lib_id_, $this->field_config['lib_id_']['symbol_grp']) ; 
      $this->Before_unformat['lib_desde_'] = $this->lib_desde_;
      nm_limpa_numero($this->lib_desde_, $this->field_config['lib_desde_']['symbol_grp']) ; 
      $this->Before_unformat['lib_hasta_'] = $this->lib_hasta_;
      nm_limpa_numero($this->lib_hasta_, $this->field_config['lib_hasta_']['symbol_grp']) ; 
      $this->Before_unformat['lib_secuencial_'] = $this->lib_secuencial_;
      nm_limpa_numero($this->lib_secuencial_, $this->field_config['lib_secuencial_']['symbol_grp']) ; 
      $this->Before_unformat['lib_fecha_caducidad_'] = $this->lib_fecha_caducidad_;
      nm_limpa_data($this->lib_fecha_caducidad_, $this->field_config['lib_fecha_caducidad_']['date_sep']) ; 
      $this->Before_unformat['lib_disponibles_'] = $this->lib_disponibles_;
      nm_limpa_numero($this->lib_disponibles_, $this->field_config['lib_disponibles_']['symbol_grp']) ; 
      $this->Before_unformat['lib_utilizados_'] = $this->lib_utilizados_;
      nm_limpa_numero($this->lib_utilizados_, $this->field_config['lib_utilizados_']['symbol_grp']) ; 
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
      if ($Nome_Campo == "lib_id_")
      {
          nm_limpa_numero($this->lib_id_, $this->field_config['lib_id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "lib_desde_")
      {
          nm_limpa_numero($this->lib_desde_, $this->field_config['lib_desde_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "lib_hasta_")
      {
          nm_limpa_numero($this->lib_hasta_, $this->field_config['lib_hasta_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "lib_secuencial_")
      {
          nm_limpa_numero($this->lib_secuencial_, $this->field_config['lib_secuencial_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "lib_disponibles_")
      {
          nm_limpa_numero($this->lib_disponibles_, $this->field_config['lib_disponibles_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "lib_utilizados_")
      {
          nm_limpa_numero($this->lib_utilizados_, $this->field_config['lib_utilizados_']['symbol_grp']) ; 
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
      if ('' !== $this->lib_id_ || (!empty($format_fields) && isset($format_fields['lib_id_'])))
      {
          nmgp_Form_Num_Val($this->lib_id_, $this->field_config['lib_id_']['symbol_grp'], $this->field_config['lib_id_']['symbol_dec'], "0", "S", $this->field_config['lib_id_']['format_neg'], "", "", "-", $this->field_config['lib_id_']['symbol_fmt']) ; 
      }
      if ('' !== $this->lib_desde_ || (!empty($format_fields) && isset($format_fields['lib_desde_'])))
      {
          nmgp_Form_Num_Val($this->lib_desde_, $this->field_config['lib_desde_']['symbol_grp'], $this->field_config['lib_desde_']['symbol_dec'], "0", "S", $this->field_config['lib_desde_']['format_neg'], "", "", "-", $this->field_config['lib_desde_']['symbol_fmt']) ; 
      }
      if ('' !== $this->lib_hasta_ || (!empty($format_fields) && isset($format_fields['lib_hasta_'])))
      {
          nmgp_Form_Num_Val($this->lib_hasta_, $this->field_config['lib_hasta_']['symbol_grp'], $this->field_config['lib_hasta_']['symbol_dec'], "0", "S", $this->field_config['lib_hasta_']['format_neg'], "", "", "-", $this->field_config['lib_hasta_']['symbol_fmt']) ; 
      }
      if ('' !== $this->lib_secuencial_ || (!empty($format_fields) && isset($format_fields['lib_secuencial_'])))
      {
          nmgp_Form_Num_Val($this->lib_secuencial_, $this->field_config['lib_secuencial_']['symbol_grp'], $this->field_config['lib_secuencial_']['symbol_dec'], "0", "S", $this->field_config['lib_secuencial_']['format_neg'], "", "", "-", $this->field_config['lib_secuencial_']['symbol_fmt']) ; 
      }
      if ((!empty($this->lib_fecha_caducidad_) && 'null' != $this->lib_fecha_caducidad_) || (!empty($format_fields) && isset($format_fields['lib_fecha_caducidad_'])))
      {
          nm_volta_data($this->lib_fecha_caducidad_, $this->field_config['lib_fecha_caducidad_']['date_format']) ; 
          nmgp_Form_Datas($this->lib_fecha_caducidad_, $this->field_config['lib_fecha_caducidad_']['date_format'], $this->field_config['lib_fecha_caducidad_']['date_sep']) ;  
      }
      elseif ('null' == $this->lib_fecha_caducidad_ || '' == $this->lib_fecha_caducidad_)
      {
          $this->lib_fecha_caducidad_ = '';
      }
      if ('' !== $this->lib_disponibles_ || (!empty($format_fields) && isset($format_fields['lib_disponibles_'])))
      {
          nmgp_Form_Num_Val($this->lib_disponibles_, $this->field_config['lib_disponibles_']['symbol_grp'], $this->field_config['lib_disponibles_']['symbol_dec'], "0", "S", $this->field_config['lib_disponibles_']['format_neg'], "", "", "-", $this->field_config['lib_disponibles_']['symbol_fmt']) ; 
      }
      if ('' !== $this->lib_utilizados_ || (!empty($format_fields) && isset($format_fields['lib_utilizados_'])))
      {
          nmgp_Form_Num_Val($this->lib_utilizados_, $this->field_config['lib_utilizados_']['symbol_grp'], $this->field_config['lib_utilizados_']['symbol_dec'], "0", "S", $this->field_config['lib_utilizados_']['format_neg'], "", "", "-", $this->field_config['lib_utilizados_']['symbol_fmt']) ; 
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
      $guarda_format_hora = $this->field_config['lib_fecha_caducidad_']['date_format'];
      if ($this->lib_fecha_caducidad_ != "")  
      { 
          nm_conv_data($this->lib_fecha_caducidad_, $this->field_config['lib_fecha_caducidad_']['date_format']) ; 
          $this->lib_fecha_caducidad__hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->lib_fecha_caducidad__hora = substr($this->lib_fecha_caducidad__hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->lib_fecha_caducidad__hora = substr($this->lib_fecha_caducidad__hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->lib_fecha_caducidad__hora = substr($this->lib_fecha_caducidad__hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->lib_fecha_caducidad__hora = substr($this->lib_fecha_caducidad__hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->lib_fecha_caducidad__hora = substr($this->lib_fecha_caducidad__hora, 0, -4);
          }
      } 
      if ($this->lib_fecha_caducidad_ == "" && $use_null)  
      { 
          $this->lib_fecha_caducidad_ = "null" ; 
      } 
      $this->field_config['lib_fecha_caducidad_']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_lib_id_();
          $this->ajax_return_values_lib_tipo_comprobante_();
          $this->ajax_return_values_lib_punto_emision_();
          $this->ajax_return_values_lib_tipo_libretin_();
          $this->ajax_return_values_lib_desde_();
          $this->ajax_return_values_lib_hasta_();
          $this->ajax_return_values_lib_secuencial_();
          $this->ajax_return_values_lib_autorizacion_();
          $this->ajax_return_values_lib_fecha_caducidad_();
          $this->ajax_return_values_lib_estado_();
          $this->ajax_return_values_lib_disponibles_();
          $this->ajax_return_values_lib_utilizados_();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['lib_id_']['keyVal'] = form_del_libretin_sinpago_inline_pack_protect_string($this->nmgp_dados_form['lib_id_']);
          }
   } // ajax_return_values

          //----- lib_id_
   function ajax_return_values_lib_id_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_id_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_id_);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lib_id_'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("lib_id_", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- lib_tipo_comprobante_
   function ajax_return_values_lib_tipo_comprobante_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_tipo_comprobante_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_tipo_comprobante_);
              $aLookup = array();
              $this->_tmp_lookup_lib_tipo_comprobante_ = $this->lib_tipo_comprobante_;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_lib_id_ = $this->lib_id_;
   $old_value_lib_desde_ = $this->lib_desde_;
   $old_value_lib_hasta_ = $this->lib_hasta_;
   $old_value_lib_secuencial_ = $this->lib_secuencial_;
   $old_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $old_value_lib_disponibles_ = $this->lib_disponibles_;
   $old_value_lib_utilizados_ = $this->lib_utilizados_;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_lib_id_ = $this->lib_id_;
   $unformatted_value_lib_desde_ = $this->lib_desde_;
   $unformatted_value_lib_hasta_ = $this->lib_hasta_;
   $unformatted_value_lib_secuencial_ = $this->lib_secuencial_;
   $unformatted_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $unformatted_value_lib_disponibles_ = $this->lib_disponibles_;
   $unformatted_value_lib_utilizados_ = $this->lib_utilizados_;

   $nm_comando = "SELECT tc_codigo, tc_nombre  FROM sri_tipo_comprobante  ORDER BY tc_nombre";

   $this->lib_id_ = $old_value_lib_id_;
   $this->lib_desde_ = $old_value_lib_desde_;
   $this->lib_hasta_ = $old_value_lib_hasta_;
   $this->lib_secuencial_ = $old_value_lib_secuencial_;
   $this->lib_fecha_caducidad_ = $old_value_lib_fecha_caducidad_;
   $this->lib_disponibles_ = $old_value_lib_disponibles_;
   $this->lib_utilizados_ = $old_value_lib_utilizados_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_libretin_sinpago_inline_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_libretin_sinpago_inline_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'][] = $rs->fields[0];
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
          $sSelComp = "name=\"lib_tipo_comprobante_\"";
          if (isset($this->NM_ajax_info['select_html']['lib_tipo_comprobante_']) && !empty($this->NM_ajax_info['select_html']['lib_tipo_comprobante_']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['lib_tipo_comprobante_']);
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

                  if ($this->lib_tipo_comprobante_ == $sValue)
                  {
                      $this->_tmp_lookup_lib_tipo_comprobante_ = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['lib_tipo_comprobante_'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['lib_tipo_comprobante_']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['lib_tipo_comprobante_']['valList'][$i] = form_del_libretin_sinpago_inline_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['lib_tipo_comprobante_']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['lib_tipo_comprobante_']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['lib_tipo_comprobante_']['labList'] = $aLabel;
          }
   }

          //----- lib_punto_emision_
   function ajax_return_values_lib_punto_emision_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_punto_emision_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_punto_emision_);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lib_punto_emision_'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- lib_tipo_libretin_
   function ajax_return_values_lib_tipo_libretin_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_tipo_libretin_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_tipo_libretin_);
              $aLookup = array();
              $this->_tmp_lookup_lib_tipo_libretin_ = $this->lib_tipo_libretin_;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_lib_id_ = $this->lib_id_;
   $old_value_lib_desde_ = $this->lib_desde_;
   $old_value_lib_hasta_ = $this->lib_hasta_;
   $old_value_lib_secuencial_ = $this->lib_secuencial_;
   $old_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $old_value_lib_disponibles_ = $this->lib_disponibles_;
   $old_value_lib_utilizados_ = $this->lib_utilizados_;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_lib_id_ = $this->lib_id_;
   $unformatted_value_lib_desde_ = $this->lib_desde_;
   $unformatted_value_lib_hasta_ = $this->lib_hasta_;
   $unformatted_value_lib_secuencial_ = $this->lib_secuencial_;
   $unformatted_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $unformatted_value_lib_disponibles_ = $this->lib_disponibles_;
   $unformatted_value_lib_utilizados_ = $this->lib_utilizados_;

   $nm_comando = "SELECT tl_codigo, tl_descripcion  FROM sri_tipo_libretin  ORDER BY tl_descripcion";

   $this->lib_id_ = $old_value_lib_id_;
   $this->lib_desde_ = $old_value_lib_desde_;
   $this->lib_hasta_ = $old_value_lib_hasta_;
   $this->lib_secuencial_ = $old_value_lib_secuencial_;
   $this->lib_fecha_caducidad_ = $old_value_lib_fecha_caducidad_;
   $this->lib_disponibles_ = $old_value_lib_disponibles_;
   $this->lib_utilizados_ = $old_value_lib_utilizados_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_libretin_sinpago_inline_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_libretin_sinpago_inline_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'][] = $rs->fields[0];
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
          $sSelComp = "name=\"lib_tipo_libretin_\"";
          if (isset($this->NM_ajax_info['select_html']['lib_tipo_libretin_']) && !empty($this->NM_ajax_info['select_html']['lib_tipo_libretin_']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['lib_tipo_libretin_']);
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

                  if ($this->lib_tipo_libretin_ == $sValue)
                  {
                      $this->_tmp_lookup_lib_tipo_libretin_ = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['lib_tipo_libretin_'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['lib_tipo_libretin_']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['lib_tipo_libretin_']['valList'][$i] = form_del_libretin_sinpago_inline_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['lib_tipo_libretin_']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['lib_tipo_libretin_']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['lib_tipo_libretin_']['labList'] = $aLabel;
          }
   }

          //----- lib_desde_
   function ajax_return_values_lib_desde_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_desde_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_desde_);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lib_desde_'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- lib_hasta_
   function ajax_return_values_lib_hasta_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_hasta_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_hasta_);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lib_hasta_'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- lib_secuencial_
   function ajax_return_values_lib_secuencial_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_secuencial_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_secuencial_);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lib_secuencial_'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- lib_autorizacion_
   function ajax_return_values_lib_autorizacion_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_autorizacion_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_autorizacion_);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lib_autorizacion_'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- lib_fecha_caducidad_
   function ajax_return_values_lib_fecha_caducidad_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_fecha_caducidad_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_fecha_caducidad_);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lib_fecha_caducidad_'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- lib_estado_
   function ajax_return_values_lib_estado_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_estado_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_estado_);
              $aLookup = array();
              $this->_tmp_lookup_lib_estado_ = $this->lib_estado_;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_lib_id_ = $this->lib_id_;
   $old_value_lib_desde_ = $this->lib_desde_;
   $old_value_lib_hasta_ = $this->lib_hasta_;
   $old_value_lib_secuencial_ = $this->lib_secuencial_;
   $old_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $old_value_lib_disponibles_ = $this->lib_disponibles_;
   $old_value_lib_utilizados_ = $this->lib_utilizados_;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_lib_id_ = $this->lib_id_;
   $unformatted_value_lib_desde_ = $this->lib_desde_;
   $unformatted_value_lib_hasta_ = $this->lib_hasta_;
   $unformatted_value_lib_secuencial_ = $this->lib_secuencial_;
   $unformatted_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $unformatted_value_lib_disponibles_ = $this->lib_disponibles_;
   $unformatted_value_lib_utilizados_ = $this->lib_utilizados_;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sri_estado_libretin  ORDER BY dec_nombre";

   $this->lib_id_ = $old_value_lib_id_;
   $this->lib_desde_ = $old_value_lib_desde_;
   $this->lib_hasta_ = $old_value_lib_hasta_;
   $this->lib_secuencial_ = $old_value_lib_secuencial_;
   $this->lib_fecha_caducidad_ = $old_value_lib_fecha_caducidad_;
   $this->lib_disponibles_ = $old_value_lib_disponibles_;
   $this->lib_utilizados_ = $old_value_lib_utilizados_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_libretin_sinpago_inline_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_libretin_sinpago_inline_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'][] = $rs->fields[0];
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
          $sSelComp = "name=\"lib_estado_\"";
          if (isset($this->NM_ajax_info['select_html']['lib_estado_']) && !empty($this->NM_ajax_info['select_html']['lib_estado_']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['lib_estado_']);
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

                  if ($this->lib_estado_ == $sValue)
                  {
                      $this->_tmp_lookup_lib_estado_ = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['lib_estado_'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['lib_estado_']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['lib_estado_']['valList'][$i] = form_del_libretin_sinpago_inline_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['lib_estado_']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['lib_estado_']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['lib_estado_']['labList'] = $aLabel;
          }
   }

          //----- lib_disponibles_
   function ajax_return_values_lib_disponibles_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_disponibles_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_disponibles_);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lib_disponibles_'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- lib_utilizados_
   function ajax_return_values_lib_utilizados_($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lib_utilizados_", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lib_utilizados_);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['lib_utilizados_'] = array(
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['upload_dir'][$fieldName][] = $newName;
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_lib_autorizacion_ = $this->lib_autorizacion_;
    $original_lib_desde_ = $this->lib_desde_;
    $original_lib_disponibles_ = $this->lib_disponibles_;
    $original_lib_hasta_ = $this->lib_hasta_;
    $original_lib_secuencial_ = $this->lib_secuencial_;
    $original_lib_tipo_libretin_ = $this->lib_tipo_libretin_;
    $original_lib_utilizados_ = $this->lib_utilizados_;
}
  if($this->lib_tipo_libretin_ =='E'){
	$this->nmgp_cmp_hidden["lib_desde_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_desde_'] = 'on';
	$this->nmgp_cmp_hidden["lib_hasta_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_hasta_'] = 'on';
	$this->nmgp_cmp_hidden["lib_secuencial_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_secuencial_'] = 'on';
	$this->nmgp_cmp_hidden["lib_autorizacion_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_autorizacion_'] = 'off';
	$this->nmgp_cmp_hidden["lib_disponibles_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_disponibles_'] = 'on';
	$this->nmgp_cmp_hidden["lib_utilizados_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_utilizados_'] = 'on';
}else{
	$this->nmgp_cmp_hidden["lib_desde_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_desde_'] = 'on';
	$this->nmgp_cmp_hidden["lib_hasta_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_hasta_'] = 'on';
	$this->nmgp_cmp_hidden["lib_secuencial_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_secuencial_'] = 'on';
	$this->nmgp_cmp_hidden["lib_autorizacion_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_autorizacion_'] = 'on';
	$this->nmgp_cmp_hidden["lib_disponibles_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_disponibles_'] = 'off';
	$this->nmgp_cmp_hidden["lib_utilizados_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_utilizados_'] = 'off';
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_lib_autorizacion_ != $this->lib_autorizacion_ || (isset($bFlagRead_lib_autorizacion_) && $bFlagRead_lib_autorizacion_)))
    {
        $this->ajax_return_values_lib_autorizacion_(true);
    }
    if (($original_lib_desde_ != $this->lib_desde_ || (isset($bFlagRead_lib_desde_) && $bFlagRead_lib_desde_)))
    {
        $this->ajax_return_values_lib_desde_(true);
    }
    if (($original_lib_disponibles_ != $this->lib_disponibles_ || (isset($bFlagRead_lib_disponibles_) && $bFlagRead_lib_disponibles_)))
    {
        $this->ajax_return_values_lib_disponibles_(true);
    }
    if (($original_lib_hasta_ != $this->lib_hasta_ || (isset($bFlagRead_lib_hasta_) && $bFlagRead_lib_hasta_)))
    {
        $this->ajax_return_values_lib_hasta_(true);
    }
    if (($original_lib_secuencial_ != $this->lib_secuencial_ || (isset($bFlagRead_lib_secuencial_) && $bFlagRead_lib_secuencial_)))
    {
        $this->ajax_return_values_lib_secuencial_(true);
    }
    if (($original_lib_tipo_libretin_ != $this->lib_tipo_libretin_ || (isset($bFlagRead_lib_tipo_libretin_) && $bFlagRead_lib_tipo_libretin_)))
    {
        $this->ajax_return_values_lib_tipo_libretin_(true);
    }
    if (($original_lib_utilizados_ != $this->lib_utilizados_ || (isset($bFlagRead_lib_utilizados_) && $bFlagRead_lib_utilizados_)))
    {
        $this->ajax_return_values_lib_utilizados_(true);
    }
}
$_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['contr_erro'] = 'off'; 
      }
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total']))
          {
               $sc_where_pos = " WHERE ((lib_id < $this->lib_id_))";
               if ('' != $sc_where)
               {
                   if ('where ' == strtolower(substr(trim($sc_where), 0, 6)))
                   {
                       $sc_where = substr(trim($sc_where), 6);
                   }
                   if ('and ' == strtolower(substr(trim($sc_where), 0, 4)))
                   {
                       $sc_where = substr(trim($sc_where), 4);
                   }
                   $sc_where_pos .= ' AND (' . $sc_where . ')';
                   $sc_where = ' WHERE ' . $sc_where;
               }
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->lib_id_)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opcao'] = '';

   }

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
    if ("incluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_lib_desde_ = $this->lib_desde_;
    $original_lib_disponibles_ = $this->lib_disponibles_;
    $original_lib_hasta_ = $this->lib_hasta_;
}
  $this->lib_disponibles_ =$this->lib_hasta_ -$this->lib_desde_ +1;
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_lib_desde_ != $this->lib_desde_ || (isset($bFlagRead_lib_desde_) && $bFlagRead_lib_desde_)))
    {
        $this->ajax_return_values_lib_desde_(true);
    }
    if (($original_lib_disponibles_ != $this->lib_disponibles_ || (isset($bFlagRead_lib_disponibles_) && $bFlagRead_lib_disponibles_)))
    {
        $this->ajax_return_values_lib_disponibles_(true);
    }
    if (($original_lib_hasta_ != $this->lib_hasta_ || (isset($bFlagRead_lib_hasta_) && $bFlagRead_lib_hasta_)))
    {
        $this->ajax_return_values_lib_hasta_(true);
    }
}
$_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['contr_erro'] = 'off'; 
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
      $NM_val_form['lib_id_'] = $this->lib_id_;
      $NM_val_form['lib_tipo_comprobante_'] = $this->lib_tipo_comprobante_;
      $NM_val_form['lib_punto_emision_'] = $this->lib_punto_emision_;
      $NM_val_form['lib_tipo_libretin_'] = $this->lib_tipo_libretin_;
      $NM_val_form['lib_desde_'] = $this->lib_desde_;
      $NM_val_form['lib_hasta_'] = $this->lib_hasta_;
      $NM_val_form['lib_secuencial_'] = $this->lib_secuencial_;
      $NM_val_form['lib_autorizacion_'] = $this->lib_autorizacion_;
      $NM_val_form['lib_fecha_caducidad_'] = $this->lib_fecha_caducidad_;
      $NM_val_form['lib_estado_'] = $this->lib_estado_;
      $NM_val_form['lib_disponibles_'] = $this->lib_disponibles_;
      $NM_val_form['lib_utilizados_'] = $this->lib_utilizados_;
      if ($this->lib_id_ === "" || is_null($this->lib_id_))  
      { 
          $this->lib_id_ = 0;
      } 
      if ($this->lib_punto_emision_ === "" || is_null($this->lib_punto_emision_))  
      { 
          $this->lib_punto_emision_ = 0;
          $this->sc_force_zero[] = 'lib_punto_emision_';
      } 
      if ($this->lib_secuencial_ === "" || is_null($this->lib_secuencial_))  
      { 
          $this->lib_secuencial_ = 0;
          $this->sc_force_zero[] = 'lib_secuencial_';
      } 
      if ($this->lib_disponibles_ === "" || is_null($this->lib_disponibles_))  
      { 
          $this->lib_disponibles_ = 0;
          $this->sc_force_zero[] = 'lib_disponibles_';
      } 
      if ($this->lib_utilizados_ === "" || is_null($this->lib_utilizados_))  
      { 
          $this->lib_utilizados_ = 0;
          $this->sc_force_zero[] = 'lib_utilizados_';
      } 
      if ($this->lib_desde_ === "" || is_null($this->lib_desde_))  
      { 
          $this->lib_desde_ = 0;
          $this->sc_force_zero[] = 'lib_desde_';
      } 
      if ($this->lib_hasta_ === "" || is_null($this->lib_hasta_))  
      { 
          $this->lib_hasta_ = 0;
          $this->sc_force_zero[] = 'lib_hasta_';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->lib_tipo_comprobante__before_qstr = $this->lib_tipo_comprobante_;
          $this->lib_tipo_comprobante_ = substr($this->Db->qstr($this->lib_tipo_comprobante_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->lib_tipo_comprobante_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->lib_tipo_comprobante_);
          }
          if ($this->lib_tipo_comprobante_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->lib_tipo_comprobante_ = "null"; 
              $NM_val_null[] = "lib_tipo_comprobante_";
          } 
          $this->lib_estado__before_qstr = $this->lib_estado_;
          $this->lib_estado_ = substr($this->Db->qstr($this->lib_estado_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->lib_estado_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->lib_estado_);
          }
          if ($this->lib_estado_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->lib_estado_ = "null"; 
              $NM_val_null[] = "lib_estado_";
          } 
          $this->lib_tipo_libretin__before_qstr = $this->lib_tipo_libretin_;
          $this->lib_tipo_libretin_ = substr($this->Db->qstr($this->lib_tipo_libretin_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->lib_tipo_libretin_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->lib_tipo_libretin_);
          }
          if ($this->lib_tipo_libretin_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->lib_tipo_libretin_ = "null"; 
              $NM_val_null[] = "lib_tipo_libretin_";
          } 
          $this->lib_autorizacion__before_qstr = $this->lib_autorizacion_;
          $this->lib_autorizacion_ = substr($this->Db->qstr($this->lib_autorizacion_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->lib_autorizacion_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->lib_autorizacion_);
          }
          if ($this->lib_autorizacion_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->lib_autorizacion_ = "null"; 
              $NM_val_null[] = "lib_autorizacion_";
          } 
          if ($this->lib_fecha_caducidad_ == "")  
          { 
              $this->lib_fecha_caducidad_ = "null"; 
              $NM_val_null[] = "lib_fecha_caducidad_";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key'] as $sFKName => $sFKValue)
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
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_del_libretin_sinpago_inline_pack_ajax_response();
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
                  $SC_fields_update[] = "lib_punto_emision = $this->lib_punto_emision_, lib_tipo_comprobante = '$this->lib_tipo_comprobante_', lib_secuencial = $this->lib_secuencial_, lib_disponibles = $this->lib_disponibles_, lib_estado = '$this->lib_estado_', lib_tipo_libretin = '$this->lib_tipo_libretin_', lib_utilizados = $this->lib_utilizados_, lib_desde = $this->lib_desde_, lib_hasta = $this->lib_hasta_, lib_autorizacion = '$this->lib_autorizacion_', lib_fecha_caducidad = #$this->lib_fecha_caducidad_#"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "lib_punto_emision = $this->lib_punto_emision_, lib_tipo_comprobante = '$this->lib_tipo_comprobante_', lib_secuencial = $this->lib_secuencial_, lib_disponibles = $this->lib_disponibles_, lib_estado = '$this->lib_estado_', lib_tipo_libretin = '$this->lib_tipo_libretin_', lib_utilizados = $this->lib_utilizados_, lib_desde = $this->lib_desde_, lib_hasta = $this->lib_hasta_, lib_autorizacion = '$this->lib_autorizacion_', lib_fecha_caducidad = " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ""; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "lib_punto_emision = $this->lib_punto_emision_, lib_tipo_comprobante = '$this->lib_tipo_comprobante_', lib_secuencial = $this->lib_secuencial_, lib_disponibles = $this->lib_disponibles_, lib_estado = '$this->lib_estado_', lib_tipo_libretin = '$this->lib_tipo_libretin_', lib_utilizados = $this->lib_utilizados_, lib_desde = $this->lib_desde_, lib_hasta = $this->lib_hasta_, lib_autorizacion = '$this->lib_autorizacion_', lib_fecha_caducidad = " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ""; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "lib_punto_emision = $this->lib_punto_emision_, lib_tipo_comprobante = '$this->lib_tipo_comprobante_', lib_secuencial = $this->lib_secuencial_, lib_disponibles = $this->lib_disponibles_, lib_estado = '$this->lib_estado_', lib_tipo_libretin = '$this->lib_tipo_libretin_', lib_utilizados = $this->lib_utilizados_, lib_desde = $this->lib_desde_, lib_hasta = $this->lib_hasta_, lib_autorizacion = '$this->lib_autorizacion_', lib_fecha_caducidad = EXTEND('$this->lib_fecha_caducidad_', YEAR TO DAY)"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "lib_punto_emision = $this->lib_punto_emision_, lib_tipo_comprobante = '$this->lib_tipo_comprobante_', lib_secuencial = $this->lib_secuencial_, lib_disponibles = $this->lib_disponibles_, lib_estado = '$this->lib_estado_', lib_tipo_libretin = '$this->lib_tipo_libretin_', lib_utilizados = $this->lib_utilizados_, lib_desde = $this->lib_desde_, lib_hasta = $this->lib_hasta_, lib_autorizacion = '$this->lib_autorizacion_', lib_fecha_caducidad = " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ""; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "lib_punto_emision = $this->lib_punto_emision_, lib_tipo_comprobante = '$this->lib_tipo_comprobante_', lib_secuencial = $this->lib_secuencial_, lib_disponibles = $this->lib_disponibles_, lib_estado = '$this->lib_estado_', lib_tipo_libretin = '$this->lib_tipo_libretin_', lib_utilizados = $this->lib_utilizados_, lib_desde = $this->lib_desde_, lib_hasta = $this->lib_hasta_, lib_autorizacion = '$this->lib_autorizacion_', lib_fecha_caducidad = " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ""; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "lib_punto_emision = $this->lib_punto_emision_, lib_tipo_comprobante = '$this->lib_tipo_comprobante_', lib_secuencial = $this->lib_secuencial_, lib_disponibles = $this->lib_disponibles_, lib_estado = '$this->lib_estado_', lib_tipo_libretin = '$this->lib_tipo_libretin_', lib_utilizados = $this->lib_utilizados_, lib_desde = $this->lib_desde_, lib_hasta = $this->lib_hasta_, lib_autorizacion = '$this->lib_autorizacion_', lib_fecha_caducidad = " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ""; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE lib_id = $this->lib_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE lib_id = $this->lib_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE lib_id = $this->lib_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE lib_id = $this->lib_id_ ";  
              }  
              else  
              {
                  $comando .= " WHERE lib_id = $this->lib_id_ ";  
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
                                  form_del_libretin_sinpago_inline_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->lib_tipo_comprobante_ = $this->lib_tipo_comprobante__before_qstr;
              $this->lib_estado_ = $this->lib_estado__before_qstr;
              $this->lib_tipo_libretin_ = $this->lib_tipo_libretin__before_qstr;
              $this->lib_autorizacion_ = $this->lib_autorizacion__before_qstr;
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['lib_id_'])) { $this->lib_id_ = $NM_val_form['lib_id_']; }
              elseif (isset($this->lib_id_)) { $this->nm_limpa_alfa($this->lib_id_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_punto_emision_'])) { $this->lib_punto_emision_ = $NM_val_form['lib_punto_emision_']; }
              elseif (isset($this->lib_punto_emision_)) { $this->nm_limpa_alfa($this->lib_punto_emision_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_tipo_comprobante_'])) { $this->lib_tipo_comprobante_ = $NM_val_form['lib_tipo_comprobante_']; }
              elseif (isset($this->lib_tipo_comprobante_)) { $this->nm_limpa_alfa($this->lib_tipo_comprobante_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_secuencial_'])) { $this->lib_secuencial_ = $NM_val_form['lib_secuencial_']; }
              elseif (isset($this->lib_secuencial_)) { $this->nm_limpa_alfa($this->lib_secuencial_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_disponibles_'])) { $this->lib_disponibles_ = $NM_val_form['lib_disponibles_']; }
              elseif (isset($this->lib_disponibles_)) { $this->nm_limpa_alfa($this->lib_disponibles_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_estado_'])) { $this->lib_estado_ = $NM_val_form['lib_estado_']; }
              elseif (isset($this->lib_estado_)) { $this->nm_limpa_alfa($this->lib_estado_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_tipo_libretin_'])) { $this->lib_tipo_libretin_ = $NM_val_form['lib_tipo_libretin_']; }
              elseif (isset($this->lib_tipo_libretin_)) { $this->nm_limpa_alfa($this->lib_tipo_libretin_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_utilizados_'])) { $this->lib_utilizados_ = $NM_val_form['lib_utilizados_']; }
              elseif (isset($this->lib_utilizados_)) { $this->nm_limpa_alfa($this->lib_utilizados_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_desde_'])) { $this->lib_desde_ = $NM_val_form['lib_desde_']; }
              elseif (isset($this->lib_desde_)) { $this->nm_limpa_alfa($this->lib_desde_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_hasta_'])) { $this->lib_hasta_ = $NM_val_form['lib_hasta_']; }
              elseif (isset($this->lib_hasta_)) { $this->nm_limpa_alfa($this->lib_hasta_); }
              if     (isset($NM_val_form) && isset($NM_val_form['lib_autorizacion_'])) { $this->lib_autorizacion_ = $NM_val_form['lib_autorizacion_']; }
              elseif (isset($this->lib_autorizacion_)) { $this->nm_limpa_alfa($this->lib_autorizacion_); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('lib_id_', 'lib_tipo_comprobante_', 'lib_punto_emision_', 'lib_tipo_libretin_', 'lib_desde_', 'lib_hasta_', 'lib_secuencial_', 'lib_autorizacion_', 'lib_fecha_caducidad_', 'lib_estado_', 'lib_disponibles_', 'lib_utilizados_'), $aDoNotUpdate);
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $NM_seq_auto = "NEXT VALUE FOR del_libretin_lib_id_seq, ";
              $NM_cmp_auto = "lib_id, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $NM_seq_auto = "del_libretin_lib_id_seq.NEXTVAL, ";
              $NM_cmp_auto = "lib_id, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          { 
              $NM_seq_auto = "nextval('del_libretin_lib_id_seq'), ";
              $NM_cmp_auto = "lib_id, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $NM_seq_auto = "gen_id(del_libretin_lib_id_seq, 1), ";
              $NM_cmp_auto = "lib_id, ";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "lib_id, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_del_libretin_sinpago_inline_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad) VALUES ($this->lib_punto_emision_, '$this->lib_tipo_comprobante_', $this->lib_secuencial_, $this->lib_disponibles_, '$this->lib_estado_', '$this->lib_tipo_libretin_', $this->lib_utilizados_, $this->lib_desde_, $this->lib_hasta_, '$this->lib_autorizacion_', #$this->lib_fecha_caducidad_#)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad) VALUES (" . $NM_seq_auto . "$this->lib_punto_emision_, '$this->lib_tipo_comprobante_', $this->lib_secuencial_, $this->lib_disponibles_, '$this->lib_estado_', '$this->lib_tipo_libretin_', $this->lib_utilizados_, $this->lib_desde_, $this->lib_hasta_, '$this->lib_autorizacion_', " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad) VALUES (" . $NM_seq_auto . "$this->lib_punto_emision_, '$this->lib_tipo_comprobante_', $this->lib_secuencial_, $this->lib_disponibles_, '$this->lib_estado_', '$this->lib_tipo_libretin_', $this->lib_utilizados_, $this->lib_desde_, $this->lib_hasta_, '$this->lib_autorizacion_', " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad) VALUES (" . $NM_seq_auto . "$this->lib_punto_emision_, '$this->lib_tipo_comprobante_', $this->lib_secuencial_, $this->lib_disponibles_, '$this->lib_estado_', '$this->lib_tipo_libretin_', $this->lib_utilizados_, $this->lib_desde_, $this->lib_hasta_, '$this->lib_autorizacion_', " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad) VALUES (" . $NM_seq_auto . "$this->lib_punto_emision_, '$this->lib_tipo_comprobante_', $this->lib_secuencial_, $this->lib_disponibles_, '$this->lib_estado_', '$this->lib_tipo_libretin_', $this->lib_utilizados_, $this->lib_desde_, $this->lib_hasta_, '$this->lib_autorizacion_', EXTEND('$this->lib_fecha_caducidad_', YEAR TO DAY))"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad) VALUES (" . $NM_seq_auto . "$this->lib_punto_emision_, '$this->lib_tipo_comprobante_', $this->lib_secuencial_, $this->lib_disponibles_, '$this->lib_estado_', '$this->lib_tipo_libretin_', $this->lib_utilizados_, $this->lib_desde_, $this->lib_hasta_, '$this->lib_autorizacion_', " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad) VALUES (" . $NM_seq_auto . "$this->lib_punto_emision_, '$this->lib_tipo_comprobante_', $this->lib_secuencial_, $this->lib_disponibles_, '$this->lib_estado_', '$this->lib_tipo_libretin_', $this->lib_utilizados_, $this->lib_desde_, $this->lib_hasta_, '$this->lib_autorizacion_', " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ")"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad) VALUES (" . $NM_seq_auto . "$this->lib_punto_emision_, '$this->lib_tipo_comprobante_', $this->lib_secuencial_, $this->lib_disponibles_, '$this->lib_estado_', '$this->lib_tipo_libretin_', $this->lib_utilizados_, $this->lib_desde_, $this->lib_hasta_, '$this->lib_autorizacion_', " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ")"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad) VALUES (" . $NM_seq_auto . "$this->lib_punto_emision_, '$this->lib_tipo_comprobante_', $this->lib_secuencial_, $this->lib_disponibles_, '$this->lib_estado_', '$this->lib_tipo_libretin_', $this->lib_utilizados_, $this->lib_desde_, $this->lib_hasta_, '$this->lib_autorizacion_', " . $this->Ini->date_delim . $this->lib_fecha_caducidad_ . $this->Ini->date_delim1 . ")"; 
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
                              form_del_libretin_sinpago_inline_pack_ajax_response();
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
                          form_del_libretin_sinpago_inline_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->lib_id_ =  $rsy->fields[0];
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
                  $this->lib_id_ = $rsy->fields[0];
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
                  $this->lib_id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select del_libretin_lib_id_seq.currval from dual"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->lib_id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "values PREVVAL FOR del_libretin_lib_id_seq"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->lib_id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('del_libretin_lib_id_seq')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->lib_id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(del_libretin_lib_id_seq, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->lib_id_ = $rsy->fields[0];
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
                  $this->lib_id_ = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              $this->lib_tipo_comprobante_ = $this->lib_tipo_comprobante__before_qstr;
              $this->lib_estado_ = $this->lib_estado__before_qstr;
              $this->lib_tipo_libretin_ = $this->lib_tipo_libretin__before_qstr;
              $this->lib_autorizacion_ = $this->lib_autorizacion__before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->lib_tipo_comprobante_ = $this->lib_tipo_comprobante__before_qstr;
              $this->lib_estado_ = $this->lib_estado__before_qstr;
              $this->lib_tipo_libretin_ = $this->lib_tipo_libretin__before_qstr;
              $this->lib_autorizacion_ = $this->lib_autorizacion__before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['return_edit'] = "new";
              } 
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
          $this->lib_id_ = substr($this->Db->qstr($this->lib_id_), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where lib_id = $this->lib_id_ "); 
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
                          form_del_libretin_sinpago_inline_pack_ajax_response();
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total']);
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['parms'] = "lib_id_?#?$this->lib_id_?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->lib_id_ = null === $this->lib_id_ ? null : substr($this->Db->qstr($this->lib_id_), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT lib_id, lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, str_replace (convert(char(10),lib_fecha_caducidad,102), '.', '-') + ' ' + convert(char(8),lib_fecha_caducidad,20) from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT lib_id, lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, convert(char(23),lib_fecha_caducidad,121) from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT lib_id, lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT lib_id, lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, EXTEND(lib_fecha_caducidad, YEAR TO DAY) from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT lib_id, lib_punto_emision, lib_tipo_comprobante, lib_secuencial, lib_disponibles, lib_estado, lib_tipo_libretin, lib_utilizados, lib_desde, lib_hasta, lib_autorizacion, lib_fecha_caducidad from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "lib_id = $this->lib_id_"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "lib_id = $this->lib_id_"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "lib_id = $this->lib_id_"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "lib_id = $this->lib_id_"; 
              }  
              else  
              {
                  $aWhere[] = "lib_id = $this->lib_id_"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "lib_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['select'] = ""; 
              } 
          } 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['empty_filter'] = true;
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
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->lib_id_ = $rs->fields[0] ; 
              $this->nmgp_dados_select['lib_id_'] = $this->lib_id_;
              $this->lib_punto_emision_ = $rs->fields[1] ; 
              $this->nmgp_dados_select['lib_punto_emision_'] = $this->lib_punto_emision_;
              $this->lib_tipo_comprobante_ = $rs->fields[2] ; 
              $this->nmgp_dados_select['lib_tipo_comprobante_'] = $this->lib_tipo_comprobante_;
              $this->lib_secuencial_ = $rs->fields[3] ; 
              $this->nmgp_dados_select['lib_secuencial_'] = $this->lib_secuencial_;
              $this->lib_disponibles_ = $rs->fields[4] ; 
              $this->nmgp_dados_select['lib_disponibles_'] = $this->lib_disponibles_;
              $this->lib_estado_ = $rs->fields[5] ; 
              $this->nmgp_dados_select['lib_estado_'] = $this->lib_estado_;
              $this->lib_tipo_libretin_ = $rs->fields[6] ; 
              $this->nmgp_dados_select['lib_tipo_libretin_'] = $this->lib_tipo_libretin_;
              $this->lib_utilizados_ = $rs->fields[7] ; 
              $this->nmgp_dados_select['lib_utilizados_'] = $this->lib_utilizados_;
              $this->lib_desde_ = $rs->fields[8] ; 
              $this->nmgp_dados_select['lib_desde_'] = $this->lib_desde_;
              $this->lib_hasta_ = $rs->fields[9] ; 
              $this->nmgp_dados_select['lib_hasta_'] = $this->lib_hasta_;
              $this->lib_autorizacion_ = $rs->fields[10] ; 
              $this->nmgp_dados_select['lib_autorizacion_'] = $this->lib_autorizacion_;
              $this->lib_fecha_caducidad_ = $rs->fields[11] ; 
              $this->nmgp_dados_select['lib_fecha_caducidad_'] = $this->lib_fecha_caducidad_;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->lib_id_ = (string)$this->lib_id_; 
              $this->lib_punto_emision_ = (string)$this->lib_punto_emision_; 
              $this->lib_secuencial_ = (string)$this->lib_secuencial_; 
              $this->lib_disponibles_ = (string)$this->lib_disponibles_; 
              $this->lib_utilizados_ = (string)$this->lib_utilizados_; 
              $this->lib_desde_ = (string)$this->lib_desde_; 
              $this->lib_hasta_ = (string)$this->lib_hasta_; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['parms'] = "lib_id_?#?$this->lib_id_?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->controle_navegacao();
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
              $this->lib_id_ = "";  
              $this->nmgp_dados_form["lib_id_"] = $this->lib_id_;
              $this->lib_punto_emision_ = "";  
              $this->nmgp_dados_form["lib_punto_emision_"] = $this->lib_punto_emision_;
              $this->lib_tipo_comprobante_ = "";  
              $this->nmgp_dados_form["lib_tipo_comprobante_"] = $this->lib_tipo_comprobante_;
              $this->lib_secuencial_ = "";  
              $this->nmgp_dados_form["lib_secuencial_"] = $this->lib_secuencial_;
              $this->lib_disponibles_ = "0";  
              $this->nmgp_dados_form["lib_disponibles_"] = $this->lib_disponibles_;
              $this->lib_estado_ = "A";  
              $this->nmgp_dados_form["lib_estado_"] = $this->lib_estado_;
              $this->lib_tipo_libretin_ = "F";  
              $this->nmgp_dados_form["lib_tipo_libretin_"] = $this->lib_tipo_libretin_;
              $this->lib_utilizados_ = "0";  
              $this->nmgp_dados_form["lib_utilizados_"] = $this->lib_utilizados_;
              $this->lib_desde_ = "";  
              $this->nmgp_dados_form["lib_desde_"] = $this->lib_desde_;
              $this->lib_hasta_ = "";  
              $this->nmgp_dados_form["lib_hasta_"] = $this->lib_hasta_;
              $this->lib_autorizacion_ = "";  
              $this->nmgp_dados_form["lib_autorizacion_"] = $this->lib_autorizacion_;
              $this->lib_fecha_caducidad_ = "";  
              $this->lib_fecha_caducidad__hora = "" ;  
              $this->nmgp_dados_form["lib_fecha_caducidad_"] = $this->lib_fecha_caducidad_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['foreign_key'] as $sFKName => $sFKValue)
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
       $this->SC_log_arr['keys']['lib_id'] =  $this->lib_id_;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dados_select'];
           $this->SC_log_arr['fields']['lib_punto_emision']['0'] =  $nmgp_dados_select['lib_punto_emision_'];
           $this->SC_log_arr['fields']['lib_tipo_comprobante']['0'] =  $nmgp_dados_select['lib_tipo_comprobante_'];
           $this->SC_log_arr['fields']['lib_secuencial']['0'] =  $nmgp_dados_select['lib_secuencial_'];
           $this->SC_log_arr['fields']['lib_disponibles']['0'] =  $nmgp_dados_select['lib_disponibles_'];
           $this->SC_log_arr['fields']['lib_estado']['0'] =  $nmgp_dados_select['lib_estado_'];
           $this->SC_log_arr['fields']['lib_tipo_libretin']['0'] =  $nmgp_dados_select['lib_tipo_libretin_'];
           $this->SC_log_arr['fields']['lib_utilizados']['0'] =  $nmgp_dados_select['lib_utilizados_'];
           $this->SC_log_arr['fields']['lib_desde']['0'] =  $nmgp_dados_select['lib_desde_'];
           $this->SC_log_arr['fields']['lib_hasta']['0'] =  $nmgp_dados_select['lib_hasta_'];
           $this->SC_log_arr['fields']['lib_autorizacion']['0'] =  $nmgp_dados_select['lib_autorizacion_'];
           $this->SC_log_arr['fields']['lib_fecha_caducidad']['0'] =  $nmgp_dados_select['lib_fecha_caducidad_'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['lib_punto_emision']['1'] =  $this->lib_punto_emision_;
       $this->SC_log_arr['fields']['lib_tipo_comprobante']['1'] =  $this->lib_tipo_comprobante_;
       $this->SC_log_arr['fields']['lib_secuencial']['1'] =  $this->lib_secuencial_;
       $this->SC_log_arr['fields']['lib_disponibles']['1'] =  $this->lib_disponibles_;
       $this->SC_log_arr['fields']['lib_estado']['1'] =  $this->lib_estado_;
       $this->SC_log_arr['fields']['lib_tipo_libretin']['1'] =  $this->lib_tipo_libretin_;
       $this->SC_log_arr['fields']['lib_utilizados']['1'] =  $this->lib_utilizados_;
       $this->SC_log_arr['fields']['lib_desde']['1'] =  $this->lib_desde_;
       $this->SC_log_arr['fields']['lib_hasta']['1'] =  $this->lib_hasta_;
       $this->SC_log_arr['fields']['lib_autorizacion']['1'] =  $this->lib_autorizacion_;
       $this->SC_log_arr['fields']['lib_fecha_caducidad']['1'] =  $this->lib_fecha_caducidad_;
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
       $Log_labels['lib_punto_emision'] =  "{lang_punto_emision}";
       $Log_labels['lib_tipo_comprobante'] =  "{lang_tipo_comprobante}";
       $Log_labels['lib_secuencial'] =  "{lang_secuencial}";
       $Log_labels['lib_disponibles'] =  "{lang_chart_available}";
       $Log_labels['lib_estado'] =  "{lang_estado}";
       $Log_labels['lib_tipo_libretin'] =  "{lang_tipo_libretin}";
       $Log_labels['lib_utilizados'] =  "{lang_utilizados}";
       $Log_labels['lib_desde'] =  "{lang_desde}";
       $Log_labels['lib_hasta'] =  "{lang_hasta}";
       $Log_labels['lib_autorizacion'] =  "{lang_autorizacion}";
       $Log_labels['lib_fecha_caducidad'] =  "{lang_fecha_caducidad}";
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function lib_tipo_libretin__onBlur()
{
$_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['contr_erro'] = 'on';
  
$original_lib_tipo_libretin_ = $this->lib_tipo_libretin_;
$original_lib_desde_ = $this->lib_desde_;
$original_lib_hasta_ = $this->lib_hasta_;
$original_lib_secuencial_ = $this->lib_secuencial_;
$original_lib_autorizacion_ = $this->lib_autorizacion_;
$original_lib_disponibles_ = $this->lib_disponibles_;
$original_lib_utilizados_ = $this->lib_utilizados_;

if($this->lib_tipo_libretin_ =='E'){
	$this->nmgp_cmp_hidden["lib_desde_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_desde_'] = 'off';
	$this->nmgp_cmp_hidden["lib_hasta_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_hasta_'] = 'off';
	$this->nmgp_cmp_hidden["lib_secuencial_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_secuencial_'] = 'on';
	$this->nmgp_cmp_hidden["lib_autorizacion_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_autorizacion_'] = 'off';
	$this->nmgp_cmp_hidden["lib_disponibles_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_disponibles_'] = 'on';
	$this->nmgp_cmp_hidden["lib_utilizados_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_utilizados_'] = 'on';}else{
	$this->nmgp_cmp_hidden["lib_desde_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_desde_'] = 'on';
	$this->nmgp_cmp_hidden["lib_hasta_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_hasta_'] = 'on';
	$this->nmgp_cmp_hidden["lib_secuencial_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_secuencial_'] = 'on';
	$this->nmgp_cmp_hidden["lib_autorizacion_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_autorizacion_'] = 'on';
	$this->nmgp_cmp_hidden["lib_disponibles_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_disponibles_'] = 'off';
	$this->nmgp_cmp_hidden["lib_utilizados_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_utilizados_'] = 'off';}

$modificado_lib_tipo_libretin_ = $this->lib_tipo_libretin_;
$modificado_lib_desde_ = $this->lib_desde_;
$modificado_lib_hasta_ = $this->lib_hasta_;
$modificado_lib_secuencial_ = $this->lib_secuencial_;
$modificado_lib_autorizacion_ = $this->lib_autorizacion_;
$modificado_lib_disponibles_ = $this->lib_disponibles_;
$modificado_lib_utilizados_ = $this->lib_utilizados_;
$this->nm_formatar_campos('lib_tipo_libretin_', 'lib_desde_', 'lib_hasta_', 'lib_secuencial_', 'lib_autorizacion_', 'lib_disponibles_', 'lib_utilizados_');
$this->nmgp_refresh_fields = array();
if ($original_lib_tipo_libretin_ !== $modificado_lib_tipo_libretin_ || isset($this->nmgp_cmp_readonly['lib_tipo_libretin_']) || (isset($bFlagRead_lib_tipo_libretin_) && $bFlagRead_lib_tipo_libretin_))
{
    $this->nmgp_refresh_fields[] = 'lib_tipo_libretin_';
    $this->NM_ajax_changed['lib_tipo_libretin_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_desde_ !== $modificado_lib_desde_ || isset($this->nmgp_cmp_readonly['lib_desde_']) || (isset($bFlagRead_lib_desde_) && $bFlagRead_lib_desde_))
{
    $this->nmgp_refresh_fields[] = 'lib_desde_';
    $this->NM_ajax_changed['lib_desde_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_hasta_ !== $modificado_lib_hasta_ || isset($this->nmgp_cmp_readonly['lib_hasta_']) || (isset($bFlagRead_lib_hasta_) && $bFlagRead_lib_hasta_))
{
    $this->nmgp_refresh_fields[] = 'lib_hasta_';
    $this->NM_ajax_changed['lib_hasta_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_secuencial_ !== $modificado_lib_secuencial_ || isset($this->nmgp_cmp_readonly['lib_secuencial_']) || (isset($bFlagRead_lib_secuencial_) && $bFlagRead_lib_secuencial_))
{
    $this->nmgp_refresh_fields[] = 'lib_secuencial_';
    $this->NM_ajax_changed['lib_secuencial_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_autorizacion_ !== $modificado_lib_autorizacion_ || isset($this->nmgp_cmp_readonly['lib_autorizacion_']) || (isset($bFlagRead_lib_autorizacion_) && $bFlagRead_lib_autorizacion_))
{
    $this->nmgp_refresh_fields[] = 'lib_autorizacion_';
    $this->NM_ajax_changed['lib_autorizacion_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_disponibles_ !== $modificado_lib_disponibles_ || isset($this->nmgp_cmp_readonly['lib_disponibles_']) || (isset($bFlagRead_lib_disponibles_) && $bFlagRead_lib_disponibles_))
{
    $this->nmgp_refresh_fields[] = 'lib_disponibles_';
    $this->NM_ajax_changed['lib_disponibles_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_utilizados_ !== $modificado_lib_utilizados_ || isset($this->nmgp_cmp_readonly['lib_utilizados_']) || (isset($bFlagRead_lib_utilizados_) && $bFlagRead_lib_utilizados_))
{
    $this->nmgp_refresh_fields[] = 'lib_utilizados_';
    $this->NM_ajax_changed['lib_utilizados_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'lib';
form_del_libretin_sinpago_inline_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['contr_erro'] = 'off';
}
function lib_tipo_libretin__onChange()
{
$_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['contr_erro'] = 'on';
  
$original_lib_tipo_libretin_ = $this->lib_tipo_libretin_;
$original_lib_desde_ = $this->lib_desde_;
$original_lib_hasta_ = $this->lib_hasta_;
$original_lib_secuencial_ = $this->lib_secuencial_;
$original_lib_autorizacion_ = $this->lib_autorizacion_;
$original_lib_disponibles_ = $this->lib_disponibles_;
$original_lib_utilizados_ = $this->lib_utilizados_;

if($this->lib_tipo_libretin_ =='E'){
	$this->nmgp_cmp_hidden["lib_desde_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_desde_'] = 'off';
	$this->nmgp_cmp_hidden["lib_hasta_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_hasta_'] = 'off';
	$this->nmgp_cmp_hidden["lib_secuencial_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_secuencial_'] = 'on';
	$this->nmgp_cmp_hidden["lib_autorizacion_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_autorizacion_'] = 'off';
	$this->nmgp_cmp_hidden["lib_disponibles_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_disponibles_'] = 'on';
	$this->nmgp_cmp_hidden["lib_utilizados_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_utilizados_'] = 'on';
}else{
	$this->nmgp_cmp_hidden["lib_desde_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_desde_'] = 'on';
	$this->nmgp_cmp_hidden["lib_hasta_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_hasta_'] = 'on';
	$this->nmgp_cmp_hidden["lib_secuencial_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_secuencial_'] = 'on';
	$this->nmgp_cmp_hidden["lib_autorizacion_"] = 'on'; $this->NM_ajax_info['fieldDisplay']['lib_autorizacion_'] = 'on';
	$this->nmgp_cmp_hidden["lib_disponibles_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_disponibles_'] = 'off';
	$this->nmgp_cmp_hidden["lib_utilizados_"] = 'off'; $this->NM_ajax_info['fieldDisplay']['lib_utilizados_'] = 'off';
}

$modificado_lib_tipo_libretin_ = $this->lib_tipo_libretin_;
$modificado_lib_desde_ = $this->lib_desde_;
$modificado_lib_hasta_ = $this->lib_hasta_;
$modificado_lib_secuencial_ = $this->lib_secuencial_;
$modificado_lib_autorizacion_ = $this->lib_autorizacion_;
$modificado_lib_disponibles_ = $this->lib_disponibles_;
$modificado_lib_utilizados_ = $this->lib_utilizados_;
$this->nm_formatar_campos('lib_tipo_libretin_', 'lib_desde_', 'lib_hasta_', 'lib_secuencial_', 'lib_autorizacion_', 'lib_disponibles_', 'lib_utilizados_');
$this->nmgp_refresh_fields = array();
if ($original_lib_tipo_libretin_ !== $modificado_lib_tipo_libretin_ || isset($this->nmgp_cmp_readonly['lib_tipo_libretin_']) || (isset($bFlagRead_lib_tipo_libretin_) && $bFlagRead_lib_tipo_libretin_))
{
    $this->nmgp_refresh_fields[] = 'lib_tipo_libretin_';
    $this->NM_ajax_changed['lib_tipo_libretin_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_desde_ !== $modificado_lib_desde_ || isset($this->nmgp_cmp_readonly['lib_desde_']) || (isset($bFlagRead_lib_desde_) && $bFlagRead_lib_desde_))
{
    $this->nmgp_refresh_fields[] = 'lib_desde_';
    $this->NM_ajax_changed['lib_desde_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_hasta_ !== $modificado_lib_hasta_ || isset($this->nmgp_cmp_readonly['lib_hasta_']) || (isset($bFlagRead_lib_hasta_) && $bFlagRead_lib_hasta_))
{
    $this->nmgp_refresh_fields[] = 'lib_hasta_';
    $this->NM_ajax_changed['lib_hasta_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_secuencial_ !== $modificado_lib_secuencial_ || isset($this->nmgp_cmp_readonly['lib_secuencial_']) || (isset($bFlagRead_lib_secuencial_) && $bFlagRead_lib_secuencial_))
{
    $this->nmgp_refresh_fields[] = 'lib_secuencial_';
    $this->NM_ajax_changed['lib_secuencial_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_autorizacion_ !== $modificado_lib_autorizacion_ || isset($this->nmgp_cmp_readonly['lib_autorizacion_']) || (isset($bFlagRead_lib_autorizacion_) && $bFlagRead_lib_autorizacion_))
{
    $this->nmgp_refresh_fields[] = 'lib_autorizacion_';
    $this->NM_ajax_changed['lib_autorizacion_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_disponibles_ !== $modificado_lib_disponibles_ || isset($this->nmgp_cmp_readonly['lib_disponibles_']) || (isset($bFlagRead_lib_disponibles_) && $bFlagRead_lib_disponibles_))
{
    $this->nmgp_refresh_fields[] = 'lib_disponibles_';
    $this->NM_ajax_changed['lib_disponibles_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_lib_utilizados_ !== $modificado_lib_utilizados_ || isset($this->nmgp_cmp_readonly['lib_utilizados_']) || (isset($bFlagRead_lib_utilizados_) && $bFlagRead_lib_utilizados_))
{
    $this->nmgp_refresh_fields[] = 'lib_utilizados_';
    $this->NM_ajax_changed['lib_utilizados_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'lib';
form_del_libretin_sinpago_inline_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_libretin_sinpago_inline']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_del_libretin_sinpago_inline_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_del_libretin_sinpago_inline_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("lib_id_", "lib_punto_emision_", "lib_tipo_comprobante_", "lib_secuencial_", "lib_disponibles_", "lib_estado_"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['csrf_token'];
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

   function Form_lookup_lib_tipo_comprobante_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array(); 
    }

   $old_value_lib_id_ = $this->lib_id_;
   $old_value_lib_desde_ = $this->lib_desde_;
   $old_value_lib_hasta_ = $this->lib_hasta_;
   $old_value_lib_secuencial_ = $this->lib_secuencial_;
   $old_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $old_value_lib_disponibles_ = $this->lib_disponibles_;
   $old_value_lib_utilizados_ = $this->lib_utilizados_;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_lib_id_ = $this->lib_id_;
   $unformatted_value_lib_desde_ = $this->lib_desde_;
   $unformatted_value_lib_hasta_ = $this->lib_hasta_;
   $unformatted_value_lib_secuencial_ = $this->lib_secuencial_;
   $unformatted_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $unformatted_value_lib_disponibles_ = $this->lib_disponibles_;
   $unformatted_value_lib_utilizados_ = $this->lib_utilizados_;

   $nm_comando = "SELECT tc_codigo, tc_nombre  FROM sri_tipo_comprobante  ORDER BY tc_nombre";

   $this->lib_id_ = $old_value_lib_id_;
   $this->lib_desde_ = $old_value_lib_desde_;
   $this->lib_hasta_ = $old_value_lib_hasta_;
   $this->lib_secuencial_ = $old_value_lib_secuencial_;
   $this->lib_fecha_caducidad_ = $old_value_lib_fecha_caducidad_;
   $this->lib_disponibles_ = $old_value_lib_disponibles_;
   $this->lib_utilizados_ = $old_value_lib_utilizados_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'][] = $rs->fields[0];
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
   function Form_lookup_lib_tipo_libretin_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array(); 
    }

   $old_value_lib_id_ = $this->lib_id_;
   $old_value_lib_desde_ = $this->lib_desde_;
   $old_value_lib_hasta_ = $this->lib_hasta_;
   $old_value_lib_secuencial_ = $this->lib_secuencial_;
   $old_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $old_value_lib_disponibles_ = $this->lib_disponibles_;
   $old_value_lib_utilizados_ = $this->lib_utilizados_;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_lib_id_ = $this->lib_id_;
   $unformatted_value_lib_desde_ = $this->lib_desde_;
   $unformatted_value_lib_hasta_ = $this->lib_hasta_;
   $unformatted_value_lib_secuencial_ = $this->lib_secuencial_;
   $unformatted_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $unformatted_value_lib_disponibles_ = $this->lib_disponibles_;
   $unformatted_value_lib_utilizados_ = $this->lib_utilizados_;

   $nm_comando = "SELECT tl_codigo, tl_descripcion  FROM sri_tipo_libretin  ORDER BY tl_descripcion";

   $this->lib_id_ = $old_value_lib_id_;
   $this->lib_desde_ = $old_value_lib_desde_;
   $this->lib_hasta_ = $old_value_lib_hasta_;
   $this->lib_secuencial_ = $old_value_lib_secuencial_;
   $this->lib_fecha_caducidad_ = $old_value_lib_fecha_caducidad_;
   $this->lib_disponibles_ = $old_value_lib_disponibles_;
   $this->lib_utilizados_ = $old_value_lib_utilizados_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'][] = $rs->fields[0];
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
   function Form_lookup_lib_estado_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array(); 
    }

   $old_value_lib_id_ = $this->lib_id_;
   $old_value_lib_desde_ = $this->lib_desde_;
   $old_value_lib_hasta_ = $this->lib_hasta_;
   $old_value_lib_secuencial_ = $this->lib_secuencial_;
   $old_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $old_value_lib_disponibles_ = $this->lib_disponibles_;
   $old_value_lib_utilizados_ = $this->lib_utilizados_;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_lib_id_ = $this->lib_id_;
   $unformatted_value_lib_desde_ = $this->lib_desde_;
   $unformatted_value_lib_hasta_ = $this->lib_hasta_;
   $unformatted_value_lib_secuencial_ = $this->lib_secuencial_;
   $unformatted_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $unformatted_value_lib_disponibles_ = $this->lib_disponibles_;
   $unformatted_value_lib_utilizados_ = $this->lib_utilizados_;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sri_estado_libretin  ORDER BY dec_nombre";

   $this->lib_id_ = $old_value_lib_id_;
   $this->lib_desde_ = $old_value_lib_desde_;
   $this->lib_hasta_ = $old_value_lib_hasta_;
   $this->lib_secuencial_ = $old_value_lib_secuencial_;
   $this->lib_fecha_caducidad_ = $old_value_lib_fecha_caducidad_;
   $this->lib_disponibles_ = $old_value_lib_disponibles_;
   $this->lib_utilizados_ = $old_value_lib_utilizados_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'][] = $rs->fields[0];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_del_libretin_sinpago_inline_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "lib_id", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "lib_punto_emision", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_lib_tipo_comprobante_($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "lib_tipo_comprobante", $arg_search, $data_lookup, "VARCHAR", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "lib_secuencial", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "lib_disponibles", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_lib_estado_($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "lib_estado", $arg_search, $data_lookup, "VARCHAR", false);
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_del_libretin_sinpago_inline = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['total'] = $qt_geral_reg_form_del_libretin_sinpago_inline;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_libretin_sinpago_inline_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_libretin_sinpago_inline_pack_ajax_response();
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
      $nm_numeric[] = "lib_id";$nm_numeric[] = "lib_punto_emision";$nm_numeric[] = "lib_secuencial";$nm_numeric[] = "lib_disponibles";$nm_numeric[] = "lib_utilizados";$nm_numeric[] = "lib_desde";$nm_numeric[] = "lib_hasta";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['decimal_db'] == ".")
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
      $Nm_datas["lib_fecha_caducidad"] = "date";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['SC_sep_date1'];
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
   function SC_lookup_lib_tipo_comprobante_($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT tc_nombre, tc_codigo FROM sri_tipo_comprobante WHERE (#lowerI##cmp_itc_nombre#cmp_f)#cmp_apos LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')#arg_apos)" ; 
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
   function SC_lookup_lib_estado_($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT dec_nombre, dec_id FROM v_sri_estado_libretin WHERE (#lowerI##cmp_idec_nombre#cmp_f)#cmp_apos LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')#arg_apos)" ; 
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
       $nmgp_saida_form = "form_del_libretin_sinpago_inline_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_del_libretin_sinpago_inline_fim.php";
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
       form_del_libretin_sinpago_inline_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue']);
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
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "new":
                return array("sc_b_new_t.sc-unique-btn-1", "sc_b_new_t.sc-unique-btn-2", "sc_b_new_t.sc-unique-btn-9");
                break;
            case "insert":
                return array("sc_b_ins_t.sc-unique-btn-3", "sc_b_ins_t.sc-unique-btn-10");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-4", "sc_b_upd_t.sc-unique-btn-11");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-5", "sys_separator.sc-unique-btn-12");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-6", "sc_b_sai_t.sc-unique-btn-8", "sc_b_sai_t.sc-unique-btn-13", "sc_b_sai_t.sc-unique-btn-15", "sc_b_sai_t.sc-unique-btn-7", "sc_b_sai_t.sc-unique-btn-14");
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['ordem_ord'] == " desc") {
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
            case "lib_desde":
                return true;
            case "lib_disponibles":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "lib_id":
                return 'desc';
            case "lib_tipo_comprobante":
                return 'desc';
            case "lib_punto_emision":
                return 'desc';
            case "lib_tipo_libretin":
                return 'desc';
            case "lib_desde":
                return 'desc';
            case "lib_hasta":
                return 'desc';
            case "lib_secuencial":
                return 'desc';
            case "lib_fecha_caducidad":
                return 'desc';
            case "lib_disponibles":
                return 'desc';
            case "lib_utilizados":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
