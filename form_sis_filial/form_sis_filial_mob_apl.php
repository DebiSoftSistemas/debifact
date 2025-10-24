<?php
//
class form_sis_filial_mob_apl
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
   var $fil_id;
   var $fil_empresa;
   var $fil_empresa_1;
   var $fil_nombre;
   var $fil_ruc;
   var $fil_email;
   var $fil_representante;
   var $fil_contador;
   var $fil_actividad_economica;
   var $fil_actividad_economica_1;
   var $fil_estado;
   var $fil_estado_1;
   var $fil_pais;
   var $fil_pais_1;
   var $fil_provincia;
   var $fil_provincia_1;
   var $fil_ciudad;
   var $fil_ciudad_1;
   var $fil_barrio;
   var $fil_direccion;
   var $fil_referencia;
   var $fil_parroquia;
   var $fil_parroquia_1;
   var $fil_telefono;
   var $fil_razon_social;
   var $fil_obligado_contabilidad;
   var $fil_obligado_contabilidad_1;
   var $fil_contribuyente_especial;
   var $fil_ambiente_sri;
   var $fil_ambiente_sri_1;
   var $fil_padronrimpe;
   var $fil_padronrimpe_1;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
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
          if (isset($this->NM_ajax_info['param']['fil_actividad_economica']))
          {
              $this->fil_actividad_economica = $this->NM_ajax_info['param']['fil_actividad_economica'];
          }
          if (isset($this->NM_ajax_info['param']['fil_ambiente_sri']))
          {
              $this->fil_ambiente_sri = $this->NM_ajax_info['param']['fil_ambiente_sri'];
          }
          if (isset($this->NM_ajax_info['param']['fil_barrio']))
          {
              $this->fil_barrio = $this->NM_ajax_info['param']['fil_barrio'];
          }
          if (isset($this->NM_ajax_info['param']['fil_ciudad']))
          {
              $this->fil_ciudad = $this->NM_ajax_info['param']['fil_ciudad'];
          }
          if (isset($this->NM_ajax_info['param']['fil_contador']))
          {
              $this->fil_contador = $this->NM_ajax_info['param']['fil_contador'];
          }
          if (isset($this->NM_ajax_info['param']['fil_contribuyente_especial']))
          {
              $this->fil_contribuyente_especial = $this->NM_ajax_info['param']['fil_contribuyente_especial'];
          }
          if (isset($this->NM_ajax_info['param']['fil_direccion']))
          {
              $this->fil_direccion = $this->NM_ajax_info['param']['fil_direccion'];
          }
          if (isset($this->NM_ajax_info['param']['fil_email']))
          {
              $this->fil_email = $this->NM_ajax_info['param']['fil_email'];
          }
          if (isset($this->NM_ajax_info['param']['fil_empresa']))
          {
              $this->fil_empresa = $this->NM_ajax_info['param']['fil_empresa'];
          }
          if (isset($this->NM_ajax_info['param']['fil_estado']))
          {
              $this->fil_estado = $this->NM_ajax_info['param']['fil_estado'];
          }
          if (isset($this->NM_ajax_info['param']['fil_id']))
          {
              $this->fil_id = $this->NM_ajax_info['param']['fil_id'];
          }
          if (isset($this->NM_ajax_info['param']['fil_nombre']))
          {
              $this->fil_nombre = $this->NM_ajax_info['param']['fil_nombre'];
          }
          if (isset($this->NM_ajax_info['param']['fil_obligado_contabilidad']))
          {
              $this->fil_obligado_contabilidad = $this->NM_ajax_info['param']['fil_obligado_contabilidad'];
          }
          if (isset($this->NM_ajax_info['param']['fil_padronrimpe']))
          {
              $this->fil_padronrimpe = $this->NM_ajax_info['param']['fil_padronrimpe'];
          }
          if (isset($this->NM_ajax_info['param']['fil_pais']))
          {
              $this->fil_pais = $this->NM_ajax_info['param']['fil_pais'];
          }
          if (isset($this->NM_ajax_info['param']['fil_parroquia']))
          {
              $this->fil_parroquia = $this->NM_ajax_info['param']['fil_parroquia'];
          }
          if (isset($this->NM_ajax_info['param']['fil_provincia']))
          {
              $this->fil_provincia = $this->NM_ajax_info['param']['fil_provincia'];
          }
          if (isset($this->NM_ajax_info['param']['fil_razon_social']))
          {
              $this->fil_razon_social = $this->NM_ajax_info['param']['fil_razon_social'];
          }
          if (isset($this->NM_ajax_info['param']['fil_referencia']))
          {
              $this->fil_referencia = $this->NM_ajax_info['param']['fil_referencia'];
          }
          if (isset($this->NM_ajax_info['param']['fil_representante']))
          {
              $this->fil_representante = $this->NM_ajax_info['param']['fil_representante'];
          }
          if (isset($this->NM_ajax_info['param']['fil_ruc']))
          {
              $this->fil_ruc = $this->NM_ajax_info['param']['fil_ruc'];
          }
          if (isset($this->NM_ajax_info['param']['fil_telefono']))
          {
              $this->fil_telefono = $this->NM_ajax_info['param']['fil_telefono'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
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
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['embutida_parms']);
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
                 nm_limpa_str_form_sis_filial_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_sis_filial_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_sis_filial_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_sis_filial_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_sis_filial_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_sis_filial_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_sis_filial_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_sis_filial_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_sis_filial_mob']['label'] = "" . $this->Ini->Nm_lang['lang_configuracion'] . "-" . $this->Ini->Nm_lang['lang_filial'] . "";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_sis_filial_mob")
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
      $this->nm_new_label['fil_empresa'] = '' . $this->Ini->Nm_lang['lang_empresa'] . '';
      $this->nm_new_label['fil_nombre'] = '' . $this->Ini->Nm_lang['lang_nombre_comercial'] . '';
      $this->nm_new_label['fil_ruc'] = '' . $this->Ini->Nm_lang['lang_ruc'] . '';
      $this->nm_new_label['fil_email'] = '' . $this->Ini->Nm_lang['lang_email'] . '';
      $this->nm_new_label['fil_representante'] = '' . $this->Ini->Nm_lang['lang_representante'] . '';
      $this->nm_new_label['fil_contador'] = '' . $this->Ini->Nm_lang['lang_contador'] . '';
      $this->nm_new_label['fil_actividad_economica'] = '' . $this->Ini->Nm_lang['lang_actividad_economica'] . '';
      $this->nm_new_label['fil_estado'] = '' . $this->Ini->Nm_lang['lang_estado'] . '';
      $this->nm_new_label['fil_pais'] = '' . $this->Ini->Nm_lang['lang_pais'] . '';
      $this->nm_new_label['fil_provincia'] = '' . $this->Ini->Nm_lang['lang_provincia'] . '';
      $this->nm_new_label['fil_ciudad'] = '' . $this->Ini->Nm_lang['lang_ciudad'] . '';
      $this->nm_new_label['fil_barrio'] = '' . $this->Ini->Nm_lang['lang_lot_barrio'] . '';
      $this->nm_new_label['fil_referencia'] = '' . $this->Ini->Nm_lang['lang_referencia'] . '';
      $this->nm_new_label['fil_parroquia'] = '' . $this->Ini->Nm_lang['lang_parroquia'] . '';
      $this->nm_new_label['fil_telefono'] = '' . $this->Ini->Nm_lang['lang_lot_telefono'] . '';
      $this->nm_new_label['fil_razon_social'] = '' . $this->Ini->Nm_lang['lang_razon_social'] . '';
      $this->nm_new_label['fil_obligado_contabilidad'] = '' . $this->Ini->Nm_lang['lang_obligado_contabilidad'] . '';
      $this->nm_new_label['fil_contribuyente_especial'] = '' . $this->Ini->Nm_lang['lang_contribuyente_especial'] . '';
      $this->nm_new_label['fil_ambiente_sri'] = '' . $this->Ini->Nm_lang['lang_tipo_ambiente'] . '';
      $this->nm_new_label['fil_padronrimpe'] = '' . $this->Ini->Nm_lang['lang_rimpe'] . '';

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



      $_SESSION['scriptcase']['error_icon']['form_sis_filial_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_sis_filial_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "on";
      $this->nmgp_botoes['qtline'] = "on";
      $this->nmgp_botoes['reload'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sis_filial_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_sis_filial_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_sis_filial_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_form'];
          if (!isset($this->fil_id)){$this->fil_id = $this->nmgp_dados_form['fil_id'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_sis_filial_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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

      if (is_file($this->Ini->path_aplicacao . 'form_sis_filial_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_sis_filial_mob_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_sis_filial/form_sis_filial_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_sis_filial_mob_erro.class.php"); 
      }
      $this->Erro      = new form_sis_filial_mob_erro();
      $this->Erro->Ini = $this->Ini;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['sc_max_reg']) && strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['sc_max_reg']) == "all")
      {
          $this->form_paginacao = "total";
      }
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opcao']))
         { 
             if ($this->fil_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_sis_filial_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->NM_case_insensitive = true;
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
            if ('ajax_check_file' == $this->nmgp_opcao ){
                 ob_start(); 
                 include_once("../_lib/lib/php/nm_api.php"); 
            switch( $_POST['rsargs'] ){
               default:
                   echo 0;exit;
               break;
               }

            $out1_img_cache = $_SESSION['scriptcase']['form_sis_filial_mob']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_sis_filial_mob']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($this->fil_empresa)) { $this->nm_limpa_alfa($this->fil_empresa); }
      if (isset($this->fil_nombre)) { $this->nm_limpa_alfa($this->fil_nombre); }
      if (isset($this->fil_ruc)) { $this->nm_limpa_alfa($this->fil_ruc); }
      if (isset($this->fil_email)) { $this->nm_limpa_alfa($this->fil_email); }
      if (isset($this->fil_representante)) { $this->nm_limpa_alfa($this->fil_representante); }
      if (isset($this->fil_contador)) { $this->nm_limpa_alfa($this->fil_contador); }
      if (isset($this->fil_actividad_economica)) { $this->nm_limpa_alfa($this->fil_actividad_economica); }
      if (isset($this->fil_estado)) { $this->nm_limpa_alfa($this->fil_estado); }
      if (isset($this->fil_pais)) { $this->nm_limpa_alfa($this->fil_pais); }
      if (isset($this->fil_provincia)) { $this->nm_limpa_alfa($this->fil_provincia); }
      if (isset($this->fil_ciudad)) { $this->nm_limpa_alfa($this->fil_ciudad); }
      if (isset($this->fil_barrio)) { $this->nm_limpa_alfa($this->fil_barrio); }
      if (isset($this->fil_direccion)) { $this->nm_limpa_alfa($this->fil_direccion); }
      if (isset($this->fil_referencia)) { $this->nm_limpa_alfa($this->fil_referencia); }
      if (isset($this->fil_parroquia)) { $this->nm_limpa_alfa($this->fil_parroquia); }
      if (isset($this->fil_telefono)) { $this->nm_limpa_alfa($this->fil_telefono); }
      if (isset($this->fil_razon_social)) { $this->nm_limpa_alfa($this->fil_razon_social); }
      if (isset($this->fil_obligado_contabilidad)) { $this->nm_limpa_alfa($this->fil_obligado_contabilidad); }
      if (isset($this->fil_contribuyente_especial)) { $this->nm_limpa_alfa($this->fil_contribuyente_especial); }
      if (isset($this->fil_ambiente_sri)) { $this->nm_limpa_alfa($this->fil_ambiente_sri); }
      if (isset($this->fil_padronrimpe)) { $this->nm_limpa_alfa($this->fil_padronrimpe); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fil_id
      $this->field_config['fil_id']               = array();
      $this->field_config['fil_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['fil_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fil_id']['symbol_dec'] = '';
      $this->field_config['fil_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['fil_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Gera_log_access'] = false;
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
          if ('validate_fil_empresa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_empresa');
          }
          if ('validate_fil_razon_social' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_razon_social');
          }
          if ('validate_fil_nombre' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_nombre');
          }
          if ('validate_fil_ruc' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_ruc');
          }
          if ('validate_fil_telefono' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_telefono');
          }
          if ('validate_fil_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_email');
          }
          if ('validate_fil_representante' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_representante');
          }
          if ('validate_fil_contador' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_contador');
          }
          if ('validate_fil_actividad_economica' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_actividad_economica');
          }
          if ('validate_fil_obligado_contabilidad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_obligado_contabilidad');
          }
          if ('validate_fil_contribuyente_especial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_contribuyente_especial');
          }
          if ('validate_fil_padronrimpe' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_padronrimpe');
          }
          if ('validate_fil_ambiente_sri' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_ambiente_sri');
          }
          if ('validate_fil_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_estado');
          }
          if ('validate_fil_pais' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_pais');
          }
          if ('validate_fil_provincia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_provincia');
          }
          if ('validate_fil_ciudad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_ciudad');
          }
          if ('validate_fil_parroquia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_parroquia');
          }
          if ('validate_fil_barrio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_barrio');
          }
          if ('validate_fil_direccion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_direccion');
          }
          if ('validate_fil_referencia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fil_referencia');
          }
          form_sis_filial_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->fil_padronrimpe))
          {
              $x = 0; 
              $this->fil_padronrimpe_1 = $this->fil_padronrimpe;
              $this->fil_padronrimpe = ""; 
              if ($this->fil_padronrimpe_1 != "") 
              { 
                  foreach ($this->fil_padronrimpe_1 as $dados_fil_padronrimpe_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->fil_padronrimpe .= ";";
                      } 
                      $this->fil_padronrimpe .= $dados_fil_padronrimpe_1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_sis_filial_mob_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_sis_filial_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_sis_filial_mob_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_sis_filial_mob_pack_ajax_response();
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
          form_sis_filial_mob_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_sis_filial_mob.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_configuracion'] . "-" . $this->Ini->Nm_lang['lang_filial'] . "") ?></TITLE>
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
<form name="Fdown" method="get" action="form_sis_filial_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_sis_filial_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_sis_filial_mob.php" target="_self" style="display: none"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_sis_filial_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_sis_filial_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_sis_filial_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_sis_filial_mob_pack_ajax_response();
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
           case 'fil_empresa':
               return "" . $this->Ini->Nm_lang['lang_empresa'] . "";
               break;
           case 'fil_razon_social':
               return "" . $this->Ini->Nm_lang['lang_razon_social'] . "";
               break;
           case 'fil_nombre':
               return "" . $this->Ini->Nm_lang['lang_nombre_comercial'] . "";
               break;
           case 'fil_ruc':
               return "" . $this->Ini->Nm_lang['lang_ruc'] . "";
               break;
           case 'fil_telefono':
               return "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
               break;
           case 'fil_email':
               return "" . $this->Ini->Nm_lang['lang_email'] . "";
               break;
           case 'fil_representante':
               return "" . $this->Ini->Nm_lang['lang_representante'] . "";
               break;
           case 'fil_contador':
               return "" . $this->Ini->Nm_lang['lang_contador'] . "";
               break;
           case 'fil_actividad_economica':
               return "" . $this->Ini->Nm_lang['lang_actividad_economica'] . "";
               break;
           case 'fil_obligado_contabilidad':
               return "" . $this->Ini->Nm_lang['lang_obligado_contabilidad'] . "";
               break;
           case 'fil_contribuyente_especial':
               return "" . $this->Ini->Nm_lang['lang_contribuyente_especial'] . "";
               break;
           case 'fil_padronrimpe':
               return "" . $this->Ini->Nm_lang['lang_rimpe'] . "";
               break;
           case 'fil_ambiente_sri':
               return "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
               break;
           case 'fil_estado':
               return "" . $this->Ini->Nm_lang['lang_estado'] . "";
               break;
           case 'fil_pais':
               return "" . $this->Ini->Nm_lang['lang_pais'] . "";
               break;
           case 'fil_provincia':
               return "" . $this->Ini->Nm_lang['lang_provincia'] . "";
               break;
           case 'fil_ciudad':
               return "" . $this->Ini->Nm_lang['lang_ciudad'] . "";
               break;
           case 'fil_parroquia':
               return "" . $this->Ini->Nm_lang['lang_parroquia'] . "";
               break;
           case 'fil_barrio':
               return "" . $this->Ini->Nm_lang['lang_lot_barrio'] . "";
               break;
           case 'fil_direccion':
               return "Fil Direccion";
               break;
           case 'fil_referencia':
               return "" . $this->Ini->Nm_lang['lang_referencia'] . "";
               break;
           case 'fil_id':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_sis_filial_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_sis_filial_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_sis_filial_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_sis_filial_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'fil_empresa' == $filtro)) || (is_array($filtro) && in_array('fil_empresa', $filtro)))
        $this->ValidateField_fil_empresa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_razon_social' == $filtro)) || (is_array($filtro) && in_array('fil_razon_social', $filtro)))
        $this->ValidateField_fil_razon_social($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_nombre' == $filtro)) || (is_array($filtro) && in_array('fil_nombre', $filtro)))
        $this->ValidateField_fil_nombre($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_ruc' == $filtro)) || (is_array($filtro) && in_array('fil_ruc', $filtro)))
        $this->ValidateField_fil_ruc($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_telefono' == $filtro)) || (is_array($filtro) && in_array('fil_telefono', $filtro)))
        $this->ValidateField_fil_telefono($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_email' == $filtro)) || (is_array($filtro) && in_array('fil_email', $filtro)))
        $this->ValidateField_fil_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_representante' == $filtro)) || (is_array($filtro) && in_array('fil_representante', $filtro)))
        $this->ValidateField_fil_representante($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_contador' == $filtro)) || (is_array($filtro) && in_array('fil_contador', $filtro)))
        $this->ValidateField_fil_contador($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_actividad_economica' == $filtro)) || (is_array($filtro) && in_array('fil_actividad_economica', $filtro)))
        $this->ValidateField_fil_actividad_economica($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_obligado_contabilidad' == $filtro)) || (is_array($filtro) && in_array('fil_obligado_contabilidad', $filtro)))
        $this->ValidateField_fil_obligado_contabilidad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_contribuyente_especial' == $filtro)) || (is_array($filtro) && in_array('fil_contribuyente_especial', $filtro)))
        $this->ValidateField_fil_contribuyente_especial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_padronrimpe' == $filtro)) || (is_array($filtro) && in_array('fil_padronrimpe', $filtro)))
        $this->ValidateField_fil_padronrimpe($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_ambiente_sri' == $filtro)) || (is_array($filtro) && in_array('fil_ambiente_sri', $filtro)))
        $this->ValidateField_fil_ambiente_sri($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_estado' == $filtro)) || (is_array($filtro) && in_array('fil_estado', $filtro)))
        $this->ValidateField_fil_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_pais' == $filtro)) || (is_array($filtro) && in_array('fil_pais', $filtro)))
        $this->ValidateField_fil_pais($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_provincia' == $filtro)) || (is_array($filtro) && in_array('fil_provincia', $filtro)))
        $this->ValidateField_fil_provincia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_ciudad' == $filtro)) || (is_array($filtro) && in_array('fil_ciudad', $filtro)))
        $this->ValidateField_fil_ciudad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_parroquia' == $filtro)) || (is_array($filtro) && in_array('fil_parroquia', $filtro)))
        $this->ValidateField_fil_parroquia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_barrio' == $filtro)) || (is_array($filtro) && in_array('fil_barrio', $filtro)))
        $this->ValidateField_fil_barrio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_direccion' == $filtro)) || (is_array($filtro) && in_array('fil_direccion', $filtro)))
        $this->ValidateField_fil_direccion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fil_referencia' == $filtro)) || (is_array($filtro) && in_array('fil_referencia', $filtro)))
        $this->ValidateField_fil_referencia($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

    function ValidateField_fil_empresa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_empresa'])) {
       return;
   }
               if (!empty($this->fil_empresa) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa']) && !in_array($this->fil_empresa, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fil_empresa']))
                   {
                       $Campos_Erros['fil_empresa'] = array();
                   }
                   $Campos_Erros['fil_empresa'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fil_empresa']) || !is_array($this->NM_ajax_info['errList']['fil_empresa']))
                   {
                       $this->NM_ajax_info['errList']['fil_empresa'] = array();
                   }
                   $this->NM_ajax_info['errList']['fil_empresa'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_empresa';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_empresa

    function ValidateField_fil_razon_social(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_razon_social'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_razon_social) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_razon_social'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_razon_social']))
              {
                  $Campos_Erros['fil_razon_social'] = array();
              }
              $Campos_Erros['fil_razon_social'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_razon_social']) || !is_array($this->NM_ajax_info['errList']['fil_razon_social']))
              {
                  $this->NM_ajax_info['errList']['fil_razon_social'] = array();
              }
              $this->NM_ajax_info['errList']['fil_razon_social'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_razon_social';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_razon_social

    function ValidateField_fil_nombre(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_nombre'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_nombre) > 100) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_nombre_comercial'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_nombre']))
              {
                  $Campos_Erros['fil_nombre'] = array();
              }
              $Campos_Erros['fil_nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_nombre']) || !is_array($this->NM_ajax_info['errList']['fil_nombre']))
              {
                  $this->NM_ajax_info['errList']['fil_nombre'] = array();
              }
              $this->NM_ajax_info['errList']['fil_nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_nombre';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_nombre

    function ValidateField_fil_ruc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_ruc'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_ruc) > 13) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ruc'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_ruc']))
              {
                  $Campos_Erros['fil_ruc'] = array();
              }
              $Campos_Erros['fil_ruc'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_ruc']) || !is_array($this->NM_ajax_info['errList']['fil_ruc']))
              {
                  $this->NM_ajax_info['errList']['fil_ruc'] = array();
              }
              $this->NM_ajax_info['errList']['fil_ruc'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_ruc';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_ruc

    function ValidateField_fil_telefono(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_telefono'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_telefono) > 10) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_telefono'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_telefono']))
              {
                  $Campos_Erros['fil_telefono'] = array();
              }
              $Campos_Erros['fil_telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_telefono']) || !is_array($this->NM_ajax_info['errList']['fil_telefono']))
              {
                  $this->NM_ajax_info['errList']['fil_telefono'] = array();
              }
              $this->NM_ajax_info['errList']['fil_telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_telefono';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_telefono

    function ValidateField_fil_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_email'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_email) > 60) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_email'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 60 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_email']))
              {
                  $Campos_Erros['fil_email'] = array();
              }
              $Campos_Erros['fil_email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 60 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_email']) || !is_array($this->NM_ajax_info['errList']['fil_email']))
              {
                  $this->NM_ajax_info['errList']['fil_email'] = array();
              }
              $this->NM_ajax_info['errList']['fil_email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 60 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_email';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_email

    function ValidateField_fil_representante(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_representante'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_representante) > 13) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_representante'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_representante']))
              {
                  $Campos_Erros['fil_representante'] = array();
              }
              $Campos_Erros['fil_representante'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_representante']) || !is_array($this->NM_ajax_info['errList']['fil_representante']))
              {
                  $this->NM_ajax_info['errList']['fil_representante'] = array();
              }
              $this->NM_ajax_info['errList']['fil_representante'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_representante';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_representante

    function ValidateField_fil_contador(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_contador'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_contador) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_contador'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_contador']))
              {
                  $Campos_Erros['fil_contador'] = array();
              }
              $Campos_Erros['fil_contador'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_contador']) || !is_array($this->NM_ajax_info['errList']['fil_contador']))
              {
                  $this->NM_ajax_info['errList']['fil_contador'] = array();
              }
              $this->NM_ajax_info['errList']['fil_contador'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_contador';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_contador

    function ValidateField_fil_actividad_economica(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_actividad_economica'])) {
       return;
   }
               if (!empty($this->fil_actividad_economica) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica']) && !in_array($this->fil_actividad_economica, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fil_actividad_economica']))
                   {
                       $Campos_Erros['fil_actividad_economica'] = array();
                   }
                   $Campos_Erros['fil_actividad_economica'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fil_actividad_economica']) || !is_array($this->NM_ajax_info['errList']['fil_actividad_economica']))
                   {
                       $this->NM_ajax_info['errList']['fil_actividad_economica'] = array();
                   }
                   $this->NM_ajax_info['errList']['fil_actividad_economica'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_actividad_economica';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_actividad_economica

    function ValidateField_fil_obligado_contabilidad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_obligado_contabilidad'])) {
       return;
   }
               if (!empty($this->fil_obligado_contabilidad) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad']) && !in_array($this->fil_obligado_contabilidad, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fil_obligado_contabilidad']))
                   {
                       $Campos_Erros['fil_obligado_contabilidad'] = array();
                   }
                   $Campos_Erros['fil_obligado_contabilidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fil_obligado_contabilidad']) || !is_array($this->NM_ajax_info['errList']['fil_obligado_contabilidad']))
                   {
                       $this->NM_ajax_info['errList']['fil_obligado_contabilidad'] = array();
                   }
                   $this->NM_ajax_info['errList']['fil_obligado_contabilidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_obligado_contabilidad';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_obligado_contabilidad

    function ValidateField_fil_contribuyente_especial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_contribuyente_especial'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_contribuyente_especial) > 5) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_contribuyente_especial'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_contribuyente_especial']))
              {
                  $Campos_Erros['fil_contribuyente_especial'] = array();
              }
              $Campos_Erros['fil_contribuyente_especial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_contribuyente_especial']) || !is_array($this->NM_ajax_info['errList']['fil_contribuyente_especial']))
              {
                  $this->NM_ajax_info['errList']['fil_contribuyente_especial'] = array();
              }
              $this->NM_ajax_info['errList']['fil_contribuyente_especial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_contribuyente_especial';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_contribuyente_especial

    function ValidateField_fil_padronrimpe(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_padronrimpe'])) {
       return;
   }
      if ($this->fil_padronrimpe == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->fil_padronrimpe = "N";
      } 
      else 
      { 
          if (is_array($this->fil_padronrimpe))
          {
              $x = 0; 
              $this->fil_padronrimpe_1 = array(); 
              foreach ($this->fil_padronrimpe as $ind => $dados_fil_padronrimpe_1 ) 
              {
                  if ($dados_fil_padronrimpe_1 != "") 
                  {
                      $this->fil_padronrimpe_1[] = $dados_fil_padronrimpe_1;
                  } 
              } 
              $this->fil_padronrimpe = ""; 
              foreach ($this->fil_padronrimpe_1 as $dados_fil_padronrimpe_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->fil_padronrimpe .= ";";
                   } 
                   $this->fil_padronrimpe .= $dados_fil_padronrimpe_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_padronrimpe';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_padronrimpe

    function ValidateField_fil_ambiente_sri(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_ambiente_sri'])) {
       return;
   }
               if (!empty($this->fil_ambiente_sri) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri']) && !in_array($this->fil_ambiente_sri, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fil_ambiente_sri']))
                   {
                       $Campos_Erros['fil_ambiente_sri'] = array();
                   }
                   $Campos_Erros['fil_ambiente_sri'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fil_ambiente_sri']) || !is_array($this->NM_ajax_info['errList']['fil_ambiente_sri']))
                   {
                       $this->NM_ajax_info['errList']['fil_ambiente_sri'] = array();
                   }
                   $this->NM_ajax_info['errList']['fil_ambiente_sri'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_ambiente_sri';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_ambiente_sri

    function ValidateField_fil_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_estado'])) {
       return;
   }
               if (!empty($this->fil_estado) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado']) && !in_array($this->fil_estado, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fil_estado']))
                   {
                       $Campos_Erros['fil_estado'] = array();
                   }
                   $Campos_Erros['fil_estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fil_estado']) || !is_array($this->NM_ajax_info['errList']['fil_estado']))
                   {
                       $this->NM_ajax_info['errList']['fil_estado'] = array();
                   }
                   $this->NM_ajax_info['errList']['fil_estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_estado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_estado

    function ValidateField_fil_pais(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_pais'])) {
       return;
   }
               if (!empty($this->fil_pais) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais']) && !in_array($this->fil_pais, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fil_pais']))
                   {
                       $Campos_Erros['fil_pais'] = array();
                   }
                   $Campos_Erros['fil_pais'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fil_pais']) || !is_array($this->NM_ajax_info['errList']['fil_pais']))
                   {
                       $this->NM_ajax_info['errList']['fil_pais'] = array();
                   }
                   $this->NM_ajax_info['errList']['fil_pais'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_pais';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_pais

    function ValidateField_fil_provincia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_provincia'])) {
       return;
   }
               if (!empty($this->fil_provincia) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia']) && !in_array($this->fil_provincia, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fil_provincia']))
                   {
                       $Campos_Erros['fil_provincia'] = array();
                   }
                   $Campos_Erros['fil_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fil_provincia']) || !is_array($this->NM_ajax_info['errList']['fil_provincia']))
                   {
                       $this->NM_ajax_info['errList']['fil_provincia'] = array();
                   }
                   $this->NM_ajax_info['errList']['fil_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_provincia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_provincia

    function ValidateField_fil_ciudad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_ciudad'])) {
       return;
   }
               if (!empty($this->fil_ciudad) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad']) && !in_array($this->fil_ciudad, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fil_ciudad']))
                   {
                       $Campos_Erros['fil_ciudad'] = array();
                   }
                   $Campos_Erros['fil_ciudad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fil_ciudad']) || !is_array($this->NM_ajax_info['errList']['fil_ciudad']))
                   {
                       $this->NM_ajax_info['errList']['fil_ciudad'] = array();
                   }
                   $this->NM_ajax_info['errList']['fil_ciudad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_ciudad';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_ciudad

    function ValidateField_fil_parroquia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fil_parroquia'])) {
       return;
   }
               if (!empty($this->fil_parroquia) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia']) && !in_array($this->fil_parroquia, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['fil_parroquia']))
                   {
                       $Campos_Erros['fil_parroquia'] = array();
                   }
                   $Campos_Erros['fil_parroquia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['fil_parroquia']) || !is_array($this->NM_ajax_info['errList']['fil_parroquia']))
                   {
                       $this->NM_ajax_info['errList']['fil_parroquia'] = array();
                   }
                   $this->NM_ajax_info['errList']['fil_parroquia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_parroquia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_parroquia

    function ValidateField_fil_barrio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_barrio'])) {
          return;
      }
      $this->fil_barrio = sc_strtoupper($this->fil_barrio); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_barrio) > 100) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_barrio'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_barrio']))
              {
                  $Campos_Erros['fil_barrio'] = array();
              }
              $Campos_Erros['fil_barrio'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_barrio']) || !is_array($this->NM_ajax_info['errList']['fil_barrio']))
              {
                  $this->NM_ajax_info['errList']['fil_barrio'] = array();
              }
              $this->NM_ajax_info['errList']['fil_barrio'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_barrio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_barrio

    function ValidateField_fil_direccion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_direccion'])) {
          return;
      }
      $this->fil_direccion = sc_strtoupper($this->fil_direccion); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_direccion) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "Fil Direccion " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_direccion']))
              {
                  $Campos_Erros['fil_direccion'] = array();
              }
              $Campos_Erros['fil_direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_direccion']) || !is_array($this->NM_ajax_info['errList']['fil_direccion']))
              {
                  $this->NM_ajax_info['errList']['fil_direccion'] = array();
              }
              $this->NM_ajax_info['errList']['fil_direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_direccion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_direccion

    function ValidateField_fil_referencia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fil_referencia'])) {
          return;
      }
      $this->fil_referencia = sc_strtoupper($this->fil_referencia); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fil_referencia) > 200) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_referencia'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fil_referencia']))
              {
                  $Campos_Erros['fil_referencia'] = array();
              }
              $Campos_Erros['fil_referencia'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fil_referencia']) || !is_array($this->NM_ajax_info['errList']['fil_referencia']))
              {
                  $this->NM_ajax_info['errList']['fil_referencia'] = array();
              }
              $this->NM_ajax_info['errList']['fil_referencia'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fil_referencia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fil_referencia

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
    $this->nmgp_dados_form['fil_empresa'] = $this->fil_empresa;
    $this->nmgp_dados_form['fil_razon_social'] = $this->fil_razon_social;
    $this->nmgp_dados_form['fil_nombre'] = $this->fil_nombre;
    $this->nmgp_dados_form['fil_ruc'] = $this->fil_ruc;
    $this->nmgp_dados_form['fil_telefono'] = $this->fil_telefono;
    $this->nmgp_dados_form['fil_email'] = $this->fil_email;
    $this->nmgp_dados_form['fil_representante'] = $this->fil_representante;
    $this->nmgp_dados_form['fil_contador'] = $this->fil_contador;
    $this->nmgp_dados_form['fil_actividad_economica'] = $this->fil_actividad_economica;
    $this->nmgp_dados_form['fil_obligado_contabilidad'] = $this->fil_obligado_contabilidad;
    $this->nmgp_dados_form['fil_contribuyente_especial'] = $this->fil_contribuyente_especial;
    $this->nmgp_dados_form['fil_padronrimpe'] = $this->fil_padronrimpe;
    $this->nmgp_dados_form['fil_ambiente_sri'] = $this->fil_ambiente_sri;
    $this->nmgp_dados_form['fil_estado'] = $this->fil_estado;
    $this->nmgp_dados_form['fil_pais'] = $this->fil_pais;
    $this->nmgp_dados_form['fil_provincia'] = $this->fil_provincia;
    $this->nmgp_dados_form['fil_ciudad'] = $this->fil_ciudad;
    $this->nmgp_dados_form['fil_parroquia'] = $this->fil_parroquia;
    $this->nmgp_dados_form['fil_barrio'] = $this->fil_barrio;
    $this->nmgp_dados_form['fil_direccion'] = $this->fil_direccion;
    $this->nmgp_dados_form['fil_referencia'] = $this->fil_referencia;
    $this->nmgp_dados_form['fil_id'] = $this->fil_id;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['fil_id'] = $this->fil_id;
      nm_limpa_numero($this->fil_id, $this->field_config['fil_id']['symbol_grp']) ; 
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
      if ($Nome_Campo == "fil_id")
      {
          nm_limpa_numero($this->fil_id, $this->field_config['fil_id']['symbol_grp']) ; 
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
          $this->ajax_return_values_fil_empresa();
          $this->ajax_return_values_fil_razon_social();
          $this->ajax_return_values_fil_nombre();
          $this->ajax_return_values_fil_ruc();
          $this->ajax_return_values_fil_telefono();
          $this->ajax_return_values_fil_email();
          $this->ajax_return_values_fil_representante();
          $this->ajax_return_values_fil_contador();
          $this->ajax_return_values_fil_actividad_economica();
          $this->ajax_return_values_fil_obligado_contabilidad();
          $this->ajax_return_values_fil_contribuyente_especial();
          $this->ajax_return_values_fil_padronrimpe();
          $this->ajax_return_values_fil_ambiente_sri();
          $this->ajax_return_values_fil_estado();
          $this->ajax_return_values_fil_pais();
          $this->ajax_return_values_fil_provincia();
          $this->ajax_return_values_fil_ciudad();
          $this->ajax_return_values_fil_parroquia();
          $this->ajax_return_values_fil_barrio();
          $this->ajax_return_values_fil_direccion();
          $this->ajax_return_values_fil_referencia();
          $this->ajax_return_values_fil_id();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['fil_id']['keyVal'] = form_sis_filial_mob_pack_protect_string($this->nmgp_dados_form['fil_id']);
          }
   } // ajax_return_values

          //----- fil_empresa
   function ajax_return_values_fil_empresa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_empresa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_empresa);
              $aLookup = array();
              $this->_tmp_lookup_fil_empresa = $this->fil_empresa;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT emp_id, emp_nombre  FROM sis_empresa  ORDER BY emp_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fil_empresa\"";
          if (isset($this->NM_ajax_info['select_html']['fil_empresa']) && !empty($this->NM_ajax_info['select_html']['fil_empresa']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_empresa']);
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

                  if ($this->fil_empresa == $sValue)
                  {
                      $this->_tmp_lookup_fil_empresa = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fil_empresa'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_empresa']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_empresa']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_empresa']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_empresa']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_empresa']['labList'] = $aLabel;
          }
   }

          //----- fil_razon_social
   function ajax_return_values_fil_razon_social($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_razon_social", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_razon_social);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_razon_social'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_nombre
   function ajax_return_values_fil_nombre($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_nombre", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_nombre);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_nombre'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_ruc
   function ajax_return_values_fil_ruc($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_ruc", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_ruc);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_ruc'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_telefono
   function ajax_return_values_fil_telefono($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_telefono", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_telefono);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_telefono'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_email
   function ajax_return_values_fil_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_representante
   function ajax_return_values_fil_representante($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_representante", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_representante);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_representante'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_contador
   function ajax_return_values_fil_contador($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_contador", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_contador);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_contador'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_actividad_economica
   function ajax_return_values_fil_actividad_economica($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_actividad_economica", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_actividad_economica);
              $aLookup = array();
              $this->_tmp_lookup_fil_actividad_economica = $this->fil_actividad_economica;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_actividades_aconomicas  ORDER BY dec_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fil_actividad_economica\"";
          if (isset($this->NM_ajax_info['select_html']['fil_actividad_economica']) && !empty($this->NM_ajax_info['select_html']['fil_actividad_economica']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_actividad_economica']);
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

                  if ($this->fil_actividad_economica == $sValue)
                  {
                      $this->_tmp_lookup_fil_actividad_economica = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fil_actividad_economica'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_actividad_economica']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_actividad_economica']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_actividad_economica']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_actividad_economica']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_actividad_economica']['labList'] = $aLabel;
          }
   }

          //----- fil_obligado_contabilidad
   function ajax_return_values_fil_obligado_contabilidad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_obligado_contabilidad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_obligado_contabilidad);
              $aLookup = array();
              $this->_tmp_lookup_fil_obligado_contabilidad = $this->fil_obligado_contabilidad;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fil_obligado_contabilidad\"";
          if (isset($this->NM_ajax_info['select_html']['fil_obligado_contabilidad']) && !empty($this->NM_ajax_info['select_html']['fil_obligado_contabilidad']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_obligado_contabilidad']);
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

                  if ($this->fil_obligado_contabilidad == $sValue)
                  {
                      $this->_tmp_lookup_fil_obligado_contabilidad = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fil_obligado_contabilidad'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_obligado_contabilidad']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_obligado_contabilidad']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_obligado_contabilidad']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_obligado_contabilidad']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_obligado_contabilidad']['labList'] = $aLabel;
          }
   }

          //----- fil_contribuyente_especial
   function ajax_return_values_fil_contribuyente_especial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_contribuyente_especial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_contribuyente_especial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_contribuyente_especial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_padronrimpe
   function ajax_return_values_fil_padronrimpe($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_padronrimpe", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_padronrimpe);
              $aLookup = array();
              $this->_tmp_lookup_fil_padronrimpe = $this->fil_padronrimpe;

$aLookup[] = array(form_sis_filial_mob_pack_protect_string('S') => str_replace('<', '&lt;',form_sis_filial_mob_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_padronrimpe'][] = 'S';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['fil_padronrimpe']) && !empty($this->NM_ajax_info['select_html']['fil_padronrimpe']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_padronrimpe']);
          }
          $this->NM_ajax_info['fldList']['fil_padronrimpe'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => true,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-fil_padronrimpe',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_padronrimpe']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_padronrimpe']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_padronrimpe']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_padronrimpe']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_padronrimpe']['labList'] = $aLabel;
          }
   }

          //----- fil_ambiente_sri
   function ajax_return_values_fil_ambiente_sri($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_ambiente_sri", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_ambiente_sri);
              $aLookup = array();
              $this->_tmp_lookup_fil_ambiente_sri = $this->fil_ambiente_sri;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT ta_id, ta_nombre  FROM sri_tipo_ambiente  ORDER BY ta_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fil_ambiente_sri\"";
          if (isset($this->NM_ajax_info['select_html']['fil_ambiente_sri']) && !empty($this->NM_ajax_info['select_html']['fil_ambiente_sri']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_ambiente_sri']);
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

                  if ($this->fil_ambiente_sri == $sValue)
                  {
                      $this->_tmp_lookup_fil_ambiente_sri = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fil_ambiente_sri'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_ambiente_sri']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_ambiente_sri']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_ambiente_sri']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_ambiente_sri']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_ambiente_sri']['labList'] = $aLabel;
          }
   }

          //----- fil_estado
   function ajax_return_values_fil_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_estado);
              $aLookup = array();
              $this->_tmp_lookup_fil_estado = $this->fil_estado;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_estado  ORDER BY dec_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fil_estado\"";
          if (isset($this->NM_ajax_info['select_html']['fil_estado']) && !empty($this->NM_ajax_info['select_html']['fil_estado']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_estado']);
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

                  if ($this->fil_estado == $sValue)
                  {
                      $this->_tmp_lookup_fil_estado = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fil_estado'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_estado']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_estado']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_estado']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_estado']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_estado']['labList'] = $aLabel;
          }
   }

          //----- fil_pais
   function ajax_return_values_fil_pais($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_pais", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_pais);
              $aLookup = array();
              $this->_tmp_lookup_fil_pais = $this->fil_pais;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT pai_id, pai_nombre  FROM sis_pais  ORDER BY pai_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fil_pais\"";
          if (isset($this->NM_ajax_info['select_html']['fil_pais']) && !empty($this->NM_ajax_info['select_html']['fil_pais']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_pais']);
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

                  if ($this->fil_pais == $sValue)
                  {
                      $this->_tmp_lookup_fil_pais = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fil_pais'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_pais']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_pais']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_pais']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_pais']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_pais']['labList'] = $aLabel;
          }
   }

          //----- fil_provincia
   function ajax_return_values_fil_provincia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_provincia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_provincia);
              $aLookup = array();
              $this->_tmp_lookup_fil_provincia = $this->fil_provincia;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia'] = array(); 
}
if ($this->fil_pais != "")
{ 
   $this->nm_clear_val("fil_pais");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $nm_comando = "SELECT pro_id, pro_nombre  FROM sis_provincia  where pro_pais=$this->fil_pais ORDER BY pro_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia'][] = $rs->fields[0];
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
} 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"fil_provincia\"";
          if (isset($this->NM_ajax_info['select_html']['fil_provincia']) && !empty($this->NM_ajax_info['select_html']['fil_provincia']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_provincia']);
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

                  if ($this->fil_provincia == $sValue)
                  {
                      $this->_tmp_lookup_fil_provincia = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fil_provincia'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_provincia']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_provincia']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_provincia']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_provincia']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_provincia']['labList'] = $aLabel;
          }
   }

          //----- fil_ciudad
   function ajax_return_values_fil_ciudad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_ciudad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_ciudad);
              $aLookup = array();
              $this->_tmp_lookup_fil_ciudad = $this->fil_ciudad;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad'] = array(); 
}
if ($this->fil_provincia != "")
{ 
   $this->nm_clear_val("fil_provincia");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $nm_comando = "SELECT can_id, can_nombre  FROM sis_canton  WHERE can_provincia='$this->fil_provincia' ORDER BY can_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad'][] = $rs->fields[0];
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
} 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"fil_ciudad\"";
          if (isset($this->NM_ajax_info['select_html']['fil_ciudad']) && !empty($this->NM_ajax_info['select_html']['fil_ciudad']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_ciudad']);
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

                  if ($this->fil_ciudad == $sValue)
                  {
                      $this->_tmp_lookup_fil_ciudad = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fil_ciudad'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_ciudad']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_ciudad']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_ciudad']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_ciudad']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_ciudad']['labList'] = $aLabel;
          }
   }

          //----- fil_parroquia
   function ajax_return_values_fil_parroquia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_parroquia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_parroquia);
              $aLookup = array();
              $this->_tmp_lookup_fil_parroquia = $this->fil_parroquia;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia'] = array(); 
}
if ($this->fil_ciudad != "")
{ 
   $this->nm_clear_val("fil_ciudad");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $nm_comando = "SELECT parr_id, parr_nombre  FROM sis_parroquia  WHERE parr_canton='$this->fil_ciudad' ORDER BY parr_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_sis_filial_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia'][] = $rs->fields[0];
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
} 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"fil_parroquia\"";
          if (isset($this->NM_ajax_info['select_html']['fil_parroquia']) && !empty($this->NM_ajax_info['select_html']['fil_parroquia']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fil_parroquia']);
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

                  if ($this->fil_parroquia == $sValue)
                  {
                      $this->_tmp_lookup_fil_parroquia = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['fil_parroquia'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fil_parroquia']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fil_parroquia']['valList'][$i] = form_sis_filial_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fil_parroquia']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fil_parroquia']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fil_parroquia']['labList'] = $aLabel;
          }
   }

          //----- fil_barrio
   function ajax_return_values_fil_barrio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_barrio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_barrio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_barrio'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_direccion
   function ajax_return_values_fil_direccion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_direccion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_direccion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_direccion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_referencia
   function ajax_return_values_fil_referencia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_referencia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_referencia);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_referencia'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fil_id
   function ajax_return_values_fil_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fil_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fil_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fil_id'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("fil_id", $this->form_encode_input($sTmpValue))),
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['upload_dir'][$fieldName][] = $newName;
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Field_no_validate'] = array();
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 

   function return_after_insert()
   {
      global $sc_where;
      $sc_where_pos = " WHERE ((fil_id < $this->fil_id))";
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
      if ('' != $this->fil_id)
      {
          $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count;
          $rsc = $this->Db->Execute($nmgp_sel_count);
          if ($rsc === false && !$rsc->EOF)
          {
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
              exit;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] = $rsc->fields[0];
          $rsc->Close();
      }
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
      $NM_val_form['fil_empresa'] = $this->fil_empresa;
      $NM_val_form['fil_razon_social'] = $this->fil_razon_social;
      $NM_val_form['fil_nombre'] = $this->fil_nombre;
      $NM_val_form['fil_ruc'] = $this->fil_ruc;
      $NM_val_form['fil_telefono'] = $this->fil_telefono;
      $NM_val_form['fil_email'] = $this->fil_email;
      $NM_val_form['fil_representante'] = $this->fil_representante;
      $NM_val_form['fil_contador'] = $this->fil_contador;
      $NM_val_form['fil_actividad_economica'] = $this->fil_actividad_economica;
      $NM_val_form['fil_obligado_contabilidad'] = $this->fil_obligado_contabilidad;
      $NM_val_form['fil_contribuyente_especial'] = $this->fil_contribuyente_especial;
      $NM_val_form['fil_padronrimpe'] = $this->fil_padronrimpe;
      $NM_val_form['fil_ambiente_sri'] = $this->fil_ambiente_sri;
      $NM_val_form['fil_estado'] = $this->fil_estado;
      $NM_val_form['fil_pais'] = $this->fil_pais;
      $NM_val_form['fil_provincia'] = $this->fil_provincia;
      $NM_val_form['fil_ciudad'] = $this->fil_ciudad;
      $NM_val_form['fil_parroquia'] = $this->fil_parroquia;
      $NM_val_form['fil_barrio'] = $this->fil_barrio;
      $NM_val_form['fil_direccion'] = $this->fil_direccion;
      $NM_val_form['fil_referencia'] = $this->fil_referencia;
      $NM_val_form['fil_id'] = $this->fil_id;
      if ($this->fil_id === "" || is_null($this->fil_id))  
      { 
          $this->fil_id = 0;
      } 
      if ($this->fil_empresa === "" || is_null($this->fil_empresa))  
      { 
          $this->fil_empresa = 0;
          $this->sc_force_zero[] = 'fil_empresa';
      } 
      if ($this->fil_actividad_economica === "" || is_null($this->fil_actividad_economica))  
      { 
          $this->fil_actividad_economica = 0;
          $this->sc_force_zero[] = 'fil_actividad_economica';
      } 
      if ($this->fil_pais === "" || is_null($this->fil_pais))  
      { 
          $this->fil_pais = 0;
          $this->sc_force_zero[] = 'fil_pais';
      } 
      if ($this->fil_provincia === "" || is_null($this->fil_provincia))  
      { 
          $this->fil_provincia = 0;
          $this->sc_force_zero[] = 'fil_provincia';
      } 
      if ($this->fil_ciudad === "" || is_null($this->fil_ciudad))  
      { 
          $this->fil_ciudad = 0;
          $this->sc_force_zero[] = 'fil_ciudad';
      } 
      if ($this->fil_parroquia === "" || is_null($this->fil_parroquia))  
      { 
          $this->fil_parroquia = 0;
          $this->sc_force_zero[] = 'fil_parroquia';
      } 
      if ($this->fil_ambiente_sri === "" || is_null($this->fil_ambiente_sri))  
      { 
          $this->fil_ambiente_sri = 0;
          $this->sc_force_zero[] = 'fil_ambiente_sri';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->fil_nombre_before_qstr = $this->fil_nombre;
          $this->fil_nombre = substr($this->Db->qstr($this->fil_nombre), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_nombre = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_nombre);
          }
          if ($this->fil_nombre == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_nombre = "null"; 
              $NM_val_null[] = "fil_nombre";
          } 
          $this->fil_ruc_before_qstr = $this->fil_ruc;
          $this->fil_ruc = substr($this->Db->qstr($this->fil_ruc), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_ruc = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_ruc);
          }
          if ($this->fil_ruc == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_ruc = "null"; 
              $NM_val_null[] = "fil_ruc";
          } 
          $this->fil_email_before_qstr = $this->fil_email;
          $this->fil_email = substr($this->Db->qstr($this->fil_email), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_email = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_email);
          }
          if ($this->fil_email == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_email = "null"; 
              $NM_val_null[] = "fil_email";
          } 
          $this->fil_representante_before_qstr = $this->fil_representante;
          $this->fil_representante = substr($this->Db->qstr($this->fil_representante), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_representante = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_representante);
          }
          if ($this->fil_representante == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_representante = "null"; 
              $NM_val_null[] = "fil_representante";
          } 
          $this->fil_contador_before_qstr = $this->fil_contador;
          $this->fil_contador = substr($this->Db->qstr($this->fil_contador), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_contador = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_contador);
          }
          if ($this->fil_contador == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_contador = "null"; 
              $NM_val_null[] = "fil_contador";
          } 
          $this->fil_estado_before_qstr = $this->fil_estado;
          $this->fil_estado = substr($this->Db->qstr($this->fil_estado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_estado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_estado);
          }
          if ($this->fil_estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_estado = "null"; 
              $NM_val_null[] = "fil_estado";
          } 
          $this->fil_barrio_before_qstr = $this->fil_barrio;
          $this->fil_barrio = substr($this->Db->qstr($this->fil_barrio), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_barrio = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_barrio);
          }
          if ($this->fil_barrio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_barrio = "null"; 
              $NM_val_null[] = "fil_barrio";
          } 
          $this->fil_direccion_before_qstr = $this->fil_direccion;
          $this->fil_direccion = substr($this->Db->qstr($this->fil_direccion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_direccion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_direccion);
          }
          if ($this->fil_direccion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_direccion = "null"; 
              $NM_val_null[] = "fil_direccion";
          } 
          $this->fil_referencia_before_qstr = $this->fil_referencia;
          $this->fil_referencia = substr($this->Db->qstr($this->fil_referencia), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_referencia = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_referencia);
          }
          if ($this->fil_referencia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_referencia = "null"; 
              $NM_val_null[] = "fil_referencia";
          } 
          $this->fil_telefono_before_qstr = $this->fil_telefono;
          $this->fil_telefono = substr($this->Db->qstr($this->fil_telefono), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_telefono = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_telefono);
          }
          if ($this->fil_telefono == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_telefono = "null"; 
              $NM_val_null[] = "fil_telefono";
          } 
          $this->fil_razon_social_before_qstr = $this->fil_razon_social;
          $this->fil_razon_social = substr($this->Db->qstr($this->fil_razon_social), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_razon_social = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_razon_social);
          }
          if ($this->fil_razon_social == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_razon_social = "null"; 
              $NM_val_null[] = "fil_razon_social";
          } 
          $this->fil_obligado_contabilidad_before_qstr = $this->fil_obligado_contabilidad;
          $this->fil_obligado_contabilidad = substr($this->Db->qstr($this->fil_obligado_contabilidad), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_obligado_contabilidad = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_obligado_contabilidad);
          }
          if ($this->fil_obligado_contabilidad == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_obligado_contabilidad = "null"; 
              $NM_val_null[] = "fil_obligado_contabilidad";
          } 
          $this->fil_contribuyente_especial_before_qstr = $this->fil_contribuyente_especial;
          $this->fil_contribuyente_especial = substr($this->Db->qstr($this->fil_contribuyente_especial), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_contribuyente_especial = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_contribuyente_especial);
          }
          if ($this->fil_contribuyente_especial == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_contribuyente_especial = "null"; 
              $NM_val_null[] = "fil_contribuyente_especial";
          } 
          $this->fil_padronrimpe_before_qstr = $this->fil_padronrimpe;
          $this->fil_padronrimpe = substr($this->Db->qstr($this->fil_padronrimpe), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fil_padronrimpe = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fil_padronrimpe);
          }
          if ($this->fil_padronrimpe == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fil_padronrimpe = "null"; 
              $NM_val_null[] = "fil_padronrimpe";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['foreign_key'] as $sFKName => $sFKValue)
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
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_sis_filial_mob_pack_ajax_response();
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
                  $SC_fields_update[] = "fil_empresa = $this->fil_empresa, fil_nombre = '$this->fil_nombre', fil_ruc = '$this->fil_ruc', fil_email = '$this->fil_email', fil_representante = '$this->fil_representante', fil_contador = '$this->fil_contador', fil_actividad_economica = $this->fil_actividad_economica, fil_estado = '$this->fil_estado', fil_pais = $this->fil_pais, fil_provincia = $this->fil_provincia, fil_ciudad = $this->fil_ciudad, fil_barrio = '$this->fil_barrio', fil_direccion = '$this->fil_direccion', fil_referencia = '$this->fil_referencia', fil_parroquia = $this->fil_parroquia, fil_telefono = '$this->fil_telefono', fil_razon_social = '$this->fil_razon_social', fil_obligado_contabilidad = '$this->fil_obligado_contabilidad', fil_contribuyente_especial = '$this->fil_contribuyente_especial', fil_ambiente_sri = $this->fil_ambiente_sri, fil_padronrimpe = '$this->fil_padronrimpe'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fil_empresa = $this->fil_empresa, fil_nombre = '$this->fil_nombre', fil_ruc = '$this->fil_ruc', fil_email = '$this->fil_email', fil_representante = '$this->fil_representante', fil_contador = '$this->fil_contador', fil_actividad_economica = $this->fil_actividad_economica, fil_estado = '$this->fil_estado', fil_pais = $this->fil_pais, fil_provincia = $this->fil_provincia, fil_ciudad = $this->fil_ciudad, fil_barrio = '$this->fil_barrio', fil_direccion = '$this->fil_direccion', fil_referencia = '$this->fil_referencia', fil_parroquia = $this->fil_parroquia, fil_telefono = '$this->fil_telefono', fil_razon_social = '$this->fil_razon_social', fil_obligado_contabilidad = '$this->fil_obligado_contabilidad', fil_contribuyente_especial = '$this->fil_contribuyente_especial', fil_ambiente_sri = $this->fil_ambiente_sri, fil_padronrimpe = '$this->fil_padronrimpe'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fil_empresa = $this->fil_empresa, fil_nombre = '$this->fil_nombre', fil_ruc = '$this->fil_ruc', fil_email = '$this->fil_email', fil_representante = '$this->fil_representante', fil_contador = '$this->fil_contador', fil_actividad_economica = $this->fil_actividad_economica, fil_estado = '$this->fil_estado', fil_pais = $this->fil_pais, fil_provincia = $this->fil_provincia, fil_ciudad = $this->fil_ciudad, fil_barrio = '$this->fil_barrio', fil_direccion = '$this->fil_direccion', fil_referencia = '$this->fil_referencia', fil_parroquia = $this->fil_parroquia, fil_telefono = '$this->fil_telefono', fil_razon_social = '$this->fil_razon_social', fil_obligado_contabilidad = '$this->fil_obligado_contabilidad', fil_contribuyente_especial = '$this->fil_contribuyente_especial', fil_ambiente_sri = $this->fil_ambiente_sri, fil_padronrimpe = '$this->fil_padronrimpe'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fil_empresa = $this->fil_empresa, fil_nombre = '$this->fil_nombre', fil_ruc = '$this->fil_ruc', fil_email = '$this->fil_email', fil_representante = '$this->fil_representante', fil_contador = '$this->fil_contador', fil_actividad_economica = $this->fil_actividad_economica, fil_estado = '$this->fil_estado', fil_pais = $this->fil_pais, fil_provincia = $this->fil_provincia, fil_ciudad = $this->fil_ciudad, fil_barrio = '$this->fil_barrio', fil_direccion = '$this->fil_direccion', fil_referencia = '$this->fil_referencia', fil_parroquia = $this->fil_parroquia, fil_telefono = '$this->fil_telefono', fil_razon_social = '$this->fil_razon_social', fil_obligado_contabilidad = '$this->fil_obligado_contabilidad', fil_contribuyente_especial = '$this->fil_contribuyente_especial', fil_ambiente_sri = $this->fil_ambiente_sri, fil_padronrimpe = '$this->fil_padronrimpe'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fil_empresa = $this->fil_empresa, fil_nombre = '$this->fil_nombre', fil_ruc = '$this->fil_ruc', fil_email = '$this->fil_email', fil_representante = '$this->fil_representante', fil_contador = '$this->fil_contador', fil_actividad_economica = $this->fil_actividad_economica, fil_estado = '$this->fil_estado', fil_pais = $this->fil_pais, fil_provincia = $this->fil_provincia, fil_ciudad = $this->fil_ciudad, fil_barrio = '$this->fil_barrio', fil_direccion = '$this->fil_direccion', fil_referencia = '$this->fil_referencia', fil_parroquia = $this->fil_parroquia, fil_telefono = '$this->fil_telefono', fil_razon_social = '$this->fil_razon_social', fil_obligado_contabilidad = '$this->fil_obligado_contabilidad', fil_contribuyente_especial = '$this->fil_contribuyente_especial', fil_ambiente_sri = $this->fil_ambiente_sri, fil_padronrimpe = '$this->fil_padronrimpe'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fil_empresa = $this->fil_empresa, fil_nombre = '$this->fil_nombre', fil_ruc = '$this->fil_ruc', fil_email = '$this->fil_email', fil_representante = '$this->fil_representante', fil_contador = '$this->fil_contador', fil_actividad_economica = $this->fil_actividad_economica, fil_estado = '$this->fil_estado', fil_pais = $this->fil_pais, fil_provincia = $this->fil_provincia, fil_ciudad = $this->fil_ciudad, fil_barrio = '$this->fil_barrio', fil_direccion = '$this->fil_direccion', fil_referencia = '$this->fil_referencia', fil_parroquia = $this->fil_parroquia, fil_telefono = '$this->fil_telefono', fil_razon_social = '$this->fil_razon_social', fil_obligado_contabilidad = '$this->fil_obligado_contabilidad', fil_contribuyente_especial = '$this->fil_contribuyente_especial', fil_ambiente_sri = $this->fil_ambiente_sri, fil_padronrimpe = '$this->fil_padronrimpe'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fil_empresa = $this->fil_empresa, fil_nombre = '$this->fil_nombre', fil_ruc = '$this->fil_ruc', fil_email = '$this->fil_email', fil_representante = '$this->fil_representante', fil_contador = '$this->fil_contador', fil_actividad_economica = $this->fil_actividad_economica, fil_estado = '$this->fil_estado', fil_pais = $this->fil_pais, fil_provincia = $this->fil_provincia, fil_ciudad = $this->fil_ciudad, fil_barrio = '$this->fil_barrio', fil_direccion = '$this->fil_direccion', fil_referencia = '$this->fil_referencia', fil_parroquia = $this->fil_parroquia, fil_telefono = '$this->fil_telefono', fil_razon_social = '$this->fil_razon_social', fil_obligado_contabilidad = '$this->fil_obligado_contabilidad', fil_contribuyente_especial = '$this->fil_contribuyente_especial', fil_ambiente_sri = $this->fil_ambiente_sri, fil_padronrimpe = '$this->fil_padronrimpe'"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE fil_id = $this->fil_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE fil_id = $this->fil_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE fil_id = $this->fil_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE fil_id = $this->fil_id ";  
              }  
              else  
              {
                  $comando .= " WHERE fil_id = $this->fil_id ";  
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
                                  form_sis_filial_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->fil_nombre = $this->fil_nombre_before_qstr;
              $this->fil_ruc = $this->fil_ruc_before_qstr;
              $this->fil_email = $this->fil_email_before_qstr;
              $this->fil_representante = $this->fil_representante_before_qstr;
              $this->fil_contador = $this->fil_contador_before_qstr;
              $this->fil_estado = $this->fil_estado_before_qstr;
              $this->fil_barrio = $this->fil_barrio_before_qstr;
              $this->fil_direccion = $this->fil_direccion_before_qstr;
              $this->fil_referencia = $this->fil_referencia_before_qstr;
              $this->fil_telefono = $this->fil_telefono_before_qstr;
              $this->fil_razon_social = $this->fil_razon_social_before_qstr;
              $this->fil_obligado_contabilidad = $this->fil_obligado_contabilidad_before_qstr;
              $this->fil_contribuyente_especial = $this->fil_contribuyente_especial_before_qstr;
              $this->fil_padronrimpe = $this->fil_padronrimpe_before_qstr;
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['fil_id'])) { $this->fil_id = $NM_val_form['fil_id']; }
              elseif (isset($this->fil_id)) { $this->nm_limpa_alfa($this->fil_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_empresa'])) { $this->fil_empresa = $NM_val_form['fil_empresa']; }
              elseif (isset($this->fil_empresa)) { $this->nm_limpa_alfa($this->fil_empresa); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_nombre'])) { $this->fil_nombre = $NM_val_form['fil_nombre']; }
              elseif (isset($this->fil_nombre)) { $this->nm_limpa_alfa($this->fil_nombre); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_ruc'])) { $this->fil_ruc = $NM_val_form['fil_ruc']; }
              elseif (isset($this->fil_ruc)) { $this->nm_limpa_alfa($this->fil_ruc); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_email'])) { $this->fil_email = $NM_val_form['fil_email']; }
              elseif (isset($this->fil_email)) { $this->nm_limpa_alfa($this->fil_email); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_representante'])) { $this->fil_representante = $NM_val_form['fil_representante']; }
              elseif (isset($this->fil_representante)) { $this->nm_limpa_alfa($this->fil_representante); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_contador'])) { $this->fil_contador = $NM_val_form['fil_contador']; }
              elseif (isset($this->fil_contador)) { $this->nm_limpa_alfa($this->fil_contador); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_actividad_economica'])) { $this->fil_actividad_economica = $NM_val_form['fil_actividad_economica']; }
              elseif (isset($this->fil_actividad_economica)) { $this->nm_limpa_alfa($this->fil_actividad_economica); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_estado'])) { $this->fil_estado = $NM_val_form['fil_estado']; }
              elseif (isset($this->fil_estado)) { $this->nm_limpa_alfa($this->fil_estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_pais'])) { $this->fil_pais = $NM_val_form['fil_pais']; }
              elseif (isset($this->fil_pais)) { $this->nm_limpa_alfa($this->fil_pais); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_provincia'])) { $this->fil_provincia = $NM_val_form['fil_provincia']; }
              elseif (isset($this->fil_provincia)) { $this->nm_limpa_alfa($this->fil_provincia); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_ciudad'])) { $this->fil_ciudad = $NM_val_form['fil_ciudad']; }
              elseif (isset($this->fil_ciudad)) { $this->nm_limpa_alfa($this->fil_ciudad); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_barrio'])) { $this->fil_barrio = $NM_val_form['fil_barrio']; }
              elseif (isset($this->fil_barrio)) { $this->nm_limpa_alfa($this->fil_barrio); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_direccion'])) { $this->fil_direccion = $NM_val_form['fil_direccion']; }
              elseif (isset($this->fil_direccion)) { $this->nm_limpa_alfa($this->fil_direccion); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_referencia'])) { $this->fil_referencia = $NM_val_form['fil_referencia']; }
              elseif (isset($this->fil_referencia)) { $this->nm_limpa_alfa($this->fil_referencia); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_parroquia'])) { $this->fil_parroquia = $NM_val_form['fil_parroquia']; }
              elseif (isset($this->fil_parroquia)) { $this->nm_limpa_alfa($this->fil_parroquia); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_telefono'])) { $this->fil_telefono = $NM_val_form['fil_telefono']; }
              elseif (isset($this->fil_telefono)) { $this->nm_limpa_alfa($this->fil_telefono); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_razon_social'])) { $this->fil_razon_social = $NM_val_form['fil_razon_social']; }
              elseif (isset($this->fil_razon_social)) { $this->nm_limpa_alfa($this->fil_razon_social); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_obligado_contabilidad'])) { $this->fil_obligado_contabilidad = $NM_val_form['fil_obligado_contabilidad']; }
              elseif (isset($this->fil_obligado_contabilidad)) { $this->nm_limpa_alfa($this->fil_obligado_contabilidad); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_contribuyente_especial'])) { $this->fil_contribuyente_especial = $NM_val_form['fil_contribuyente_especial']; }
              elseif (isset($this->fil_contribuyente_especial)) { $this->nm_limpa_alfa($this->fil_contribuyente_especial); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_ambiente_sri'])) { $this->fil_ambiente_sri = $NM_val_form['fil_ambiente_sri']; }
              elseif (isset($this->fil_ambiente_sri)) { $this->nm_limpa_alfa($this->fil_ambiente_sri); }
              if     (isset($NM_val_form) && isset($NM_val_form['fil_padronrimpe'])) { $this->fil_padronrimpe = $NM_val_form['fil_padronrimpe']; }
              elseif (isset($this->fil_padronrimpe)) { $this->nm_limpa_alfa($this->fil_padronrimpe); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('fil_empresa', 'fil_razon_social', 'fil_nombre', 'fil_ruc', 'fil_telefono', 'fil_email', 'fil_representante', 'fil_contador', 'fil_actividad_economica', 'fil_obligado_contabilidad', 'fil_contribuyente_especial', 'fil_padronrimpe', 'fil_ambiente_sri', 'fil_estado', 'fil_pais', 'fil_provincia', 'fil_ciudad', 'fil_parroquia', 'fil_barrio', 'fil_direccion', 'fil_referencia'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela; 
          $comando = "select max(fil_id) from " . $this->Ini->nm_tabela; 
          $rs = $this->Db->Execute($comando); 
          if ($rs === false && !$rs->EOF)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
              $this->NM_rollback_db(); 
              if ($this->NM_ajax_flag)
              {
                  form_sis_filial_mob_pack_ajax_response();
              }
              exit; 
          }  
          $this->fil_id_before_qstr = $this->fil_id = $rs->fields[0] + 1;
          $rs->Close(); 
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
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
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_sis_filial_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe) VALUES ($this->fil_id, $this->fil_empresa, '$this->fil_nombre', '$this->fil_ruc', '$this->fil_email', '$this->fil_representante', '$this->fil_contador', $this->fil_actividad_economica, '$this->fil_estado', $this->fil_pais, $this->fil_provincia, $this->fil_ciudad, '$this->fil_barrio', '$this->fil_direccion', '$this->fil_referencia', $this->fil_parroquia, '$this->fil_telefono', '$this->fil_razon_social', '$this->fil_obligado_contabilidad', '$this->fil_contribuyente_especial', $this->fil_ambiente_sri, '$this->fil_padronrimpe')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe) VALUES (" . $NM_seq_auto . "$this->fil_id, $this->fil_empresa, '$this->fil_nombre', '$this->fil_ruc', '$this->fil_email', '$this->fil_representante', '$this->fil_contador', $this->fil_actividad_economica, '$this->fil_estado', $this->fil_pais, $this->fil_provincia, $this->fil_ciudad, '$this->fil_barrio', '$this->fil_direccion', '$this->fil_referencia', $this->fil_parroquia, '$this->fil_telefono', '$this->fil_razon_social', '$this->fil_obligado_contabilidad', '$this->fil_contribuyente_especial', $this->fil_ambiente_sri, '$this->fil_padronrimpe')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe) VALUES (" . $NM_seq_auto . "$this->fil_id, $this->fil_empresa, '$this->fil_nombre', '$this->fil_ruc', '$this->fil_email', '$this->fil_representante', '$this->fil_contador', $this->fil_actividad_economica, '$this->fil_estado', $this->fil_pais, $this->fil_provincia, $this->fil_ciudad, '$this->fil_barrio', '$this->fil_direccion', '$this->fil_referencia', $this->fil_parroquia, '$this->fil_telefono', '$this->fil_razon_social', '$this->fil_obligado_contabilidad', '$this->fil_contribuyente_especial', $this->fil_ambiente_sri, '$this->fil_padronrimpe')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe) VALUES (" . $NM_seq_auto . "$this->fil_id, $this->fil_empresa, '$this->fil_nombre', '$this->fil_ruc', '$this->fil_email', '$this->fil_representante', '$this->fil_contador', $this->fil_actividad_economica, '$this->fil_estado', $this->fil_pais, $this->fil_provincia, $this->fil_ciudad, '$this->fil_barrio', '$this->fil_direccion', '$this->fil_referencia', $this->fil_parroquia, '$this->fil_telefono', '$this->fil_razon_social', '$this->fil_obligado_contabilidad', '$this->fil_contribuyente_especial', $this->fil_ambiente_sri, '$this->fil_padronrimpe')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe) VALUES (" . $NM_seq_auto . "$this->fil_id, $this->fil_empresa, '$this->fil_nombre', '$this->fil_ruc', '$this->fil_email', '$this->fil_representante', '$this->fil_contador', $this->fil_actividad_economica, '$this->fil_estado', $this->fil_pais, $this->fil_provincia, $this->fil_ciudad, '$this->fil_barrio', '$this->fil_direccion', '$this->fil_referencia', $this->fil_parroquia, '$this->fil_telefono', '$this->fil_razon_social', '$this->fil_obligado_contabilidad', '$this->fil_contribuyente_especial', $this->fil_ambiente_sri, '$this->fil_padronrimpe')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe) VALUES (" . $NM_seq_auto . "$this->fil_id, $this->fil_empresa, '$this->fil_nombre', '$this->fil_ruc', '$this->fil_email', '$this->fil_representante', '$this->fil_contador', $this->fil_actividad_economica, '$this->fil_estado', $this->fil_pais, $this->fil_provincia, $this->fil_ciudad, '$this->fil_barrio', '$this->fil_direccion', '$this->fil_referencia', $this->fil_parroquia, '$this->fil_telefono', '$this->fil_razon_social', '$this->fil_obligado_contabilidad', '$this->fil_contribuyente_especial', $this->fil_ambiente_sri, '$this->fil_padronrimpe')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe) VALUES (" . $NM_seq_auto . "$this->fil_id, $this->fil_empresa, '$this->fil_nombre', '$this->fil_ruc', '$this->fil_email', '$this->fil_representante', '$this->fil_contador', $this->fil_actividad_economica, '$this->fil_estado', $this->fil_pais, $this->fil_provincia, $this->fil_ciudad, '$this->fil_barrio', '$this->fil_direccion', '$this->fil_referencia', $this->fil_parroquia, '$this->fil_telefono', '$this->fil_razon_social', '$this->fil_obligado_contabilidad', '$this->fil_contribuyente_especial', $this->fil_ambiente_sri, '$this->fil_padronrimpe')"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe) VALUES (" . $NM_seq_auto . "$this->fil_id, $this->fil_empresa, '$this->fil_nombre', '$this->fil_ruc', '$this->fil_email', '$this->fil_representante', '$this->fil_contador', $this->fil_actividad_economica, '$this->fil_estado', $this->fil_pais, $this->fil_provincia, $this->fil_ciudad, '$this->fil_barrio', '$this->fil_direccion', '$this->fil_referencia', $this->fil_parroquia, '$this->fil_telefono', '$this->fil_razon_social', '$this->fil_obligado_contabilidad', '$this->fil_contribuyente_especial', $this->fil_ambiente_sri, '$this->fil_padronrimpe')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe) VALUES (" . $NM_seq_auto . "$this->fil_id, $this->fil_empresa, '$this->fil_nombre', '$this->fil_ruc', '$this->fil_email', '$this->fil_representante', '$this->fil_contador', $this->fil_actividad_economica, '$this->fil_estado', $this->fil_pais, $this->fil_provincia, $this->fil_ciudad, '$this->fil_barrio', '$this->fil_direccion', '$this->fil_referencia', $this->fil_parroquia, '$this->fil_telefono', '$this->fil_razon_social', '$this->fil_obligado_contabilidad', '$this->fil_contribuyente_especial', $this->fil_ambiente_sri, '$this->fil_padronrimpe')"; 
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
                              form_sis_filial_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->fil_nombre = $this->fil_nombre_before_qstr;
              $this->fil_ruc = $this->fil_ruc_before_qstr;
              $this->fil_email = $this->fil_email_before_qstr;
              $this->fil_representante = $this->fil_representante_before_qstr;
              $this->fil_contador = $this->fil_contador_before_qstr;
              $this->fil_estado = $this->fil_estado_before_qstr;
              $this->fil_barrio = $this->fil_barrio_before_qstr;
              $this->fil_direccion = $this->fil_direccion_before_qstr;
              $this->fil_referencia = $this->fil_referencia_before_qstr;
              $this->fil_telefono = $this->fil_telefono_before_qstr;
              $this->fil_razon_social = $this->fil_razon_social_before_qstr;
              $this->fil_obligado_contabilidad = $this->fil_obligado_contabilidad_before_qstr;
              $this->fil_contribuyente_especial = $this->fil_contribuyente_especial_before_qstr;
              $this->fil_padronrimpe = $this->fil_padronrimpe_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->fil_nombre = $this->fil_nombre_before_qstr;
              $this->fil_ruc = $this->fil_ruc_before_qstr;
              $this->fil_email = $this->fil_email_before_qstr;
              $this->fil_representante = $this->fil_representante_before_qstr;
              $this->fil_contador = $this->fil_contador_before_qstr;
              $this->fil_estado = $this->fil_estado_before_qstr;
              $this->fil_barrio = $this->fil_barrio_before_qstr;
              $this->fil_direccion = $this->fil_direccion_before_qstr;
              $this->fil_referencia = $this->fil_referencia_before_qstr;
              $this->fil_telefono = $this->fil_telefono_before_qstr;
              $this->fil_razon_social = $this->fil_razon_social_before_qstr;
              $this->fil_obligado_contabilidad = $this->fil_obligado_contabilidad_before_qstr;
              $this->fil_contribuyente_especial = $this->fil_contribuyente_especial_before_qstr;
              $this->fil_padronrimpe = $this->fil_padronrimpe_before_qstr;
              $this->sc_insert_on = true; 
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->return_after_insert();
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
          $this->fil_id = substr($this->Db->qstr($this->fil_id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fil_id = $this->fil_id "); 
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
                          form_sis_filial_mob_pack_ajax_response();
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total']);
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
    if ("insert" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        $_SESSION['scriptcase']['form_sis_filial_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fil_ruc = $this->fil_ruc;
}
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

$rights=0777;
$dir=$this->rs[0][0].$this->fil_ruc ;
$dir_logo=$dir.'/logo';
$dir_firma=$dir.'/firma';
$dir_documentos=$dir.'/documentos';
if (!file_exists($dir)){
	mkdir($dir, $rights);
	chmod($dir, $rights);
}	
if (!file_exists($dir_logo)){
	mkdir($dir_logo, $rights);
	chmod($dir_logo, $rights);
}	
if (!file_exists($dir_firma)){
	mkdir($dir_firma, $rights);
	chmod($dir_firma, $rights);
}	
if (!file_exists($dir_documentos)){
	mkdir($dir_documentos, $rights);
	chmod($dir_documentos, $rights);
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fil_ruc != $this->fil_ruc || (isset($bFlagRead_fil_ruc) && $bFlagRead_fil_ruc)))
    {
        $this->ajax_return_values_fil_ruc(true);
    }
}
$_SESSION['scriptcase']['form_sis_filial_mob']['contr_erro'] = 'off'; 
    }
    if ("update" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        $_SESSION['scriptcase']['form_sis_filial_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fil_ruc = $this->fil_ruc;
}
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

$rights=0777;
$dir=$this->rs[0][0].$this->fil_ruc ;
$dir_logo=$dir.'/logo';
$dir_firma=$dir.'/firma';
$dir_documentos=$dir.'/documentos';
if (!file_exists($dir)){
	mkdir($dir, $rights);
	chmod($dir, $rights);
}	
if (!file_exists($dir_logo)){
	mkdir($dir_logo, $rights);
	chmod($dir_logo, $rights);
}	
if (!file_exists($dir_firma)){
	mkdir($dir_firma, $rights);
	chmod($dir_firma, $rights);
}	
if (!file_exists($dir_documentos)){
	mkdir($dir_documentos, $rights);
	chmod($dir_documentos, $rights);
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fil_ruc != $this->fil_ruc || (isset($bFlagRead_fil_ruc) && $bFlagRead_fil_ruc)))
    {
        $this->ajax_return_values_fil_ruc(true);
    }
}
$_SESSION['scriptcase']['form_sis_filial_mob']['contr_erro'] = 'off'; 
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
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['parms'] = "fil_id?#?$this->fil_id?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->fil_id = null === $this->fil_id ? null : substr($this->Db->qstr($this->fil_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "R")
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->fil_id)) 
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
          else 
          { 
              $this->nmgp_opcao = "igual"; 
          } 
      } 
      if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->nmgp_opcao != "nada" && (trim($this->fil_id) == "")) 
      { 
          if ($this->nmgp_opcao == "avanca")  
          { 
              $this->nmgp_opcao = "final"; 
          } 
          elseif ($this->nmgp_opcao != "novo")
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("");
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
          $sc_where = ('' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total']))
      { 
          $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_sis_filial_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total'] = $qt_geral_reg_form_sis_filial_mob;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->fil_id))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "fil_id < $this->fil_id "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "fil_id < $this->fil_id "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "fil_id < $this->fil_id "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "fil_id < $this->fil_id "; 
              }
              else  
              {
                  $Key_Where = "fil_id < $this->fil_id "; 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_sis_filial_mob = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] > $qt_geral_reg_form_sis_filial_mob)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] = $qt_geral_reg_form_sis_filial_mob; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] = $qt_geral_reg_form_sis_filial_mob; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_sis_filial_mob) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total'] + 1; 
      $this->NM_gera_nav_page(); 
      $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT fil_id, fil_empresa, fil_nombre, fil_ruc, fil_email, fil_representante, fil_contador, fil_actividad_economica, fil_estado, fil_pais, fil_provincia, fil_ciudad, fil_barrio, fil_direccion, fil_referencia, fil_parroquia, fil_telefono, fil_razon_social, fil_obligado_contabilidad, fil_contribuyente_especial, fil_ambiente_sri, fil_padronrimpe from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "fil_id = $this->fil_id"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "fil_id = $this->fil_id"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "fil_id = $this->fil_id"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "fil_id = $this->fil_id"; 
              }  
              else  
              {
                  $aWhere[] = "fil_id = $this->fil_id"; 
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
          $sc_order_by = "fil_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "insert" || $this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start']) ;  
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['empty_filter'] = true;
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
              $this->fil_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['fil_id'] = $this->fil_id;
              $this->fil_empresa = $rs->fields[1] ; 
              $this->nmgp_dados_select['fil_empresa'] = $this->fil_empresa;
              $this->fil_nombre = $rs->fields[2] ; 
              $this->nmgp_dados_select['fil_nombre'] = $this->fil_nombre;
              $this->fil_ruc = $rs->fields[3] ; 
              $this->nmgp_dados_select['fil_ruc'] = $this->fil_ruc;
              $this->fil_email = $rs->fields[4] ; 
              $this->nmgp_dados_select['fil_email'] = $this->fil_email;
              $this->fil_representante = $rs->fields[5] ; 
              $this->nmgp_dados_select['fil_representante'] = $this->fil_representante;
              $this->fil_contador = $rs->fields[6] ; 
              $this->nmgp_dados_select['fil_contador'] = $this->fil_contador;
              $this->fil_actividad_economica = $rs->fields[7] ; 
              $this->nmgp_dados_select['fil_actividad_economica'] = $this->fil_actividad_economica;
              $this->fil_estado = $rs->fields[8] ; 
              $this->nmgp_dados_select['fil_estado'] = $this->fil_estado;
              $this->fil_pais = $rs->fields[9] ; 
              $this->nmgp_dados_select['fil_pais'] = $this->fil_pais;
              $this->fil_provincia = $rs->fields[10] ; 
              $this->nmgp_dados_select['fil_provincia'] = $this->fil_provincia;
              $this->fil_ciudad = $rs->fields[11] ; 
              $this->nmgp_dados_select['fil_ciudad'] = $this->fil_ciudad;
              $this->fil_barrio = $rs->fields[12] ; 
              $this->nmgp_dados_select['fil_barrio'] = $this->fil_barrio;
              $this->fil_direccion = $rs->fields[13] ; 
              $this->nmgp_dados_select['fil_direccion'] = $this->fil_direccion;
              $this->fil_referencia = $rs->fields[14] ; 
              $this->nmgp_dados_select['fil_referencia'] = $this->fil_referencia;
              $this->fil_parroquia = $rs->fields[15] ; 
              $this->nmgp_dados_select['fil_parroquia'] = $this->fil_parroquia;
              $this->fil_telefono = $rs->fields[16] ; 
              $this->nmgp_dados_select['fil_telefono'] = $this->fil_telefono;
              $this->fil_razon_social = $rs->fields[17] ; 
              $this->nmgp_dados_select['fil_razon_social'] = $this->fil_razon_social;
              $this->fil_obligado_contabilidad = $rs->fields[18] ; 
              $this->nmgp_dados_select['fil_obligado_contabilidad'] = $this->fil_obligado_contabilidad;
              $this->fil_contribuyente_especial = $rs->fields[19] ; 
              $this->nmgp_dados_select['fil_contribuyente_especial'] = $this->fil_contribuyente_especial;
              $this->fil_ambiente_sri = $rs->fields[20] ; 
              $this->nmgp_dados_select['fil_ambiente_sri'] = $this->fil_ambiente_sri;
              $this->fil_padronrimpe = $rs->fields[21] ; 
              $this->nmgp_dados_select['fil_padronrimpe'] = $this->fil_padronrimpe;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->fil_id = (string)$this->fil_id; 
              $this->fil_empresa = (string)$this->fil_empresa; 
              $this->fil_actividad_economica = (string)$this->fil_actividad_economica; 
              $this->fil_pais = (string)$this->fil_pais; 
              $this->fil_provincia = (string)$this->fil_provincia; 
              $this->fil_ciudad = (string)$this->fil_ciudad; 
              $this->fil_parroquia = (string)$this->fil_parroquia; 
              $this->fil_ambiente_sri = (string)$this->fil_ambiente_sri; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['parms'] = "fil_id?#?$this->fil_id?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] < $qt_geral_reg_form_sis_filial_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opcao']   = '';
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
              $this->fil_id = "";  
              $this->nmgp_dados_form["fil_id"] = $this->fil_id;
              $this->fil_empresa = "";  
              $this->nmgp_dados_form["fil_empresa"] = $this->fil_empresa;
              $this->fil_nombre = "";  
              $this->nmgp_dados_form["fil_nombre"] = $this->fil_nombre;
              $this->fil_ruc = "";  
              $this->nmgp_dados_form["fil_ruc"] = $this->fil_ruc;
              $this->fil_email = "";  
              $this->nmgp_dados_form["fil_email"] = $this->fil_email;
              $this->fil_representante = "";  
              $this->nmgp_dados_form["fil_representante"] = $this->fil_representante;
              $this->fil_contador = "";  
              $this->nmgp_dados_form["fil_contador"] = $this->fil_contador;
              $this->fil_actividad_economica = "";  
              $this->nmgp_dados_form["fil_actividad_economica"] = $this->fil_actividad_economica;
              $this->fil_estado = "";  
              $this->nmgp_dados_form["fil_estado"] = $this->fil_estado;
              $this->fil_pais = "";  
              $this->nmgp_dados_form["fil_pais"] = $this->fil_pais;
              $this->fil_provincia = "";  
              $this->nmgp_dados_form["fil_provincia"] = $this->fil_provincia;
              $this->fil_ciudad = "";  
              $this->nmgp_dados_form["fil_ciudad"] = $this->fil_ciudad;
              $this->fil_barrio = "";  
              $this->nmgp_dados_form["fil_barrio"] = $this->fil_barrio;
              $this->fil_direccion = "";  
              $this->nmgp_dados_form["fil_direccion"] = $this->fil_direccion;
              $this->fil_referencia = "";  
              $this->nmgp_dados_form["fil_referencia"] = $this->fil_referencia;
              $this->fil_parroquia = "";  
              $this->nmgp_dados_form["fil_parroquia"] = $this->fil_parroquia;
              $this->fil_telefono = "";  
              $this->nmgp_dados_form["fil_telefono"] = $this->fil_telefono;
              $this->fil_razon_social = "";  
              $this->nmgp_dados_form["fil_razon_social"] = $this->fil_razon_social;
              $this->fil_obligado_contabilidad = "";  
              $this->nmgp_dados_form["fil_obligado_contabilidad"] = $this->fil_obligado_contabilidad;
              $this->fil_contribuyente_especial = "";  
              $this->nmgp_dados_form["fil_contribuyente_especial"] = $this->fil_contribuyente_especial;
              $this->fil_ambiente_sri = "";  
              $this->nmgp_dados_form["fil_ambiente_sri"] = $this->fil_ambiente_sri;
              $this->fil_padronrimpe = "";  
              $this->nmgp_dados_form["fil_padronrimpe"] = $this->fil_padronrimpe;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['foreign_key'] as $sFKName => $sFKValue)
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
//-- 
   function nm_db_retorna($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " where fil_id < $this->fil_id" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->fil_id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "inicio";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_avanca($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " where fil_id > $this->fil_id" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->fil_id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "final";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_inicio($str_where_param = '') 
   {   
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela; 
     $rs = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela);
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if ($rs->fields[0] == 0) 
     { 
         $this->nmgp_opcao = "novo"; 
         $this->nm_flag_saida_novo = "S"; 
         $rs->Close(); 
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return;
     }
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter']))
         { 
             $rs->Close();  
             return ; 
         } 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->fil_id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_final($str_where_param = '') 
   { 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(fil_id) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->fil_id = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
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
       $this->SC_log_arr['keys']['fil_id'] =  $this->fil_id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dados_select'];
           $this->SC_log_arr['fields']['fil_empresa']['0'] =  $nmgp_dados_select['fil_empresa'];
           $this->SC_log_arr['fields']['fil_nombre']['0'] =  $nmgp_dados_select['fil_nombre'];
           $this->SC_log_arr['fields']['fil_ruc']['0'] =  $nmgp_dados_select['fil_ruc'];
           $this->SC_log_arr['fields']['fil_email']['0'] =  $nmgp_dados_select['fil_email'];
           $this->SC_log_arr['fields']['fil_representante']['0'] =  $nmgp_dados_select['fil_representante'];
           $this->SC_log_arr['fields']['fil_contador']['0'] =  $nmgp_dados_select['fil_contador'];
           $this->SC_log_arr['fields']['fil_actividad_economica']['0'] =  $nmgp_dados_select['fil_actividad_economica'];
           $this->SC_log_arr['fields']['fil_estado']['0'] =  $nmgp_dados_select['fil_estado'];
           $this->SC_log_arr['fields']['fil_pais']['0'] =  $nmgp_dados_select['fil_pais'];
           $this->SC_log_arr['fields']['fil_provincia']['0'] =  $nmgp_dados_select['fil_provincia'];
           $this->SC_log_arr['fields']['fil_ciudad']['0'] =  $nmgp_dados_select['fil_ciudad'];
           $this->SC_log_arr['fields']['fil_barrio']['0'] =  $nmgp_dados_select['fil_barrio'];
           $this->SC_log_arr['fields']['fil_direccion']['0'] =  $nmgp_dados_select['fil_direccion'];
           $this->SC_log_arr['fields']['fil_referencia']['0'] =  $nmgp_dados_select['fil_referencia'];
           $this->SC_log_arr['fields']['fil_parroquia']['0'] =  $nmgp_dados_select['fil_parroquia'];
           $this->SC_log_arr['fields']['fil_telefono']['0'] =  $nmgp_dados_select['fil_telefono'];
           $this->SC_log_arr['fields']['fil_razon_social']['0'] =  $nmgp_dados_select['fil_razon_social'];
           $this->SC_log_arr['fields']['fil_obligado_contabilidad']['0'] =  $nmgp_dados_select['fil_obligado_contabilidad'];
           $this->SC_log_arr['fields']['fil_contribuyente_especial']['0'] =  $nmgp_dados_select['fil_contribuyente_especial'];
           $this->SC_log_arr['fields']['fil_ambiente_sri']['0'] =  $nmgp_dados_select['fil_ambiente_sri'];
           $this->SC_log_arr['fields']['fil_padronrimpe']['0'] =  $nmgp_dados_select['fil_padronrimpe'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['fil_empresa']['1'] =  $this->fil_empresa;
       $this->SC_log_arr['fields']['fil_nombre']['1'] =  $this->fil_nombre;
       $this->SC_log_arr['fields']['fil_ruc']['1'] =  $this->fil_ruc;
       $this->SC_log_arr['fields']['fil_email']['1'] =  $this->fil_email;
       $this->SC_log_arr['fields']['fil_representante']['1'] =  $this->fil_representante;
       $this->SC_log_arr['fields']['fil_contador']['1'] =  $this->fil_contador;
       $this->SC_log_arr['fields']['fil_actividad_economica']['1'] =  $this->fil_actividad_economica;
       $this->SC_log_arr['fields']['fil_estado']['1'] =  $this->fil_estado;
       $this->SC_log_arr['fields']['fil_pais']['1'] =  $this->fil_pais;
       $this->SC_log_arr['fields']['fil_provincia']['1'] =  $this->fil_provincia;
       $this->SC_log_arr['fields']['fil_ciudad']['1'] =  $this->fil_ciudad;
       $this->SC_log_arr['fields']['fil_barrio']['1'] =  $this->fil_barrio;
       $this->SC_log_arr['fields']['fil_direccion']['1'] =  $this->fil_direccion;
       $this->SC_log_arr['fields']['fil_referencia']['1'] =  $this->fil_referencia;
       $this->SC_log_arr['fields']['fil_parroquia']['1'] =  $this->fil_parroquia;
       $this->SC_log_arr['fields']['fil_telefono']['1'] =  $this->fil_telefono;
       $this->SC_log_arr['fields']['fil_razon_social']['1'] =  $this->fil_razon_social;
       $this->SC_log_arr['fields']['fil_obligado_contabilidad']['1'] =  $this->fil_obligado_contabilidad;
       $this->SC_log_arr['fields']['fil_contribuyente_especial']['1'] =  $this->fil_contribuyente_especial;
       $this->SC_log_arr['fields']['fil_ambiente_sri']['1'] =  $this->fil_ambiente_sri;
       $this->SC_log_arr['fields']['fil_padronrimpe']['1'] =  $this->fil_padronrimpe;
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
       $Log_labels['fil_empresa'] =  "{lang_empresa}";
       $Log_labels['fil_nombre'] =  "{lang_nombre_comercial}";
       $Log_labels['fil_ruc'] =  "{lang_ruc}";
       $Log_labels['fil_email'] =  "{lang_email}";
       $Log_labels['fil_representante'] =  "{lang_representante}";
       $Log_labels['fil_contador'] =  "{lang_contador}";
       $Log_labels['fil_actividad_economica'] =  "{lang_actividad_economica}";
       $Log_labels['fil_estado'] =  "{lang_estado}";
       $Log_labels['fil_pais'] =  "{lang_pais}";
       $Log_labels['fil_provincia'] =  "{lang_provincia}";
       $Log_labels['fil_ciudad'] =  "{lang_ciudad}";
       $Log_labels['fil_barrio'] =  "{lang_lot_barrio}";
       $Log_labels['fil_direccion'] =  "Fil Direccion";
       $Log_labels['fil_referencia'] =  "{lang_referencia}";
       $Log_labels['fil_parroquia'] =  "{lang_parroquia}";
       $Log_labels['fil_telefono'] =  "{lang_lot_telefono}";
       $Log_labels['fil_razon_social'] =  "{lang_razon_social}";
       $Log_labels['fil_obligado_contabilidad'] =  "{lang_obligado_contabilidad}";
       $Log_labels['fil_contribuyente_especial'] =  "{lang_contribuyente_especial}";
       $Log_labels['fil_ambiente_sri'] =  "{lang_tipo_ambiente}";
       $Log_labels['fil_padronrimpe'] =  "{lang_rimpe}";
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
       $Reg_Page   = 1;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['reg_start'] + 1;
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_sis_filial_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_sis_filial_mob_form0.php");
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['csrf_token'];
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

   function Form_lookup_fil_empresa()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT emp_id, emp_nombre  FROM sis_empresa  ORDER BY emp_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_empresa'][] = $rs->fields[0];
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
   function Form_lookup_fil_actividad_economica()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_actividades_aconomicas  ORDER BY dec_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_actividad_economica'][] = $rs->fields[0];
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
   function Form_lookup_fil_obligado_contabilidad()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_obligado_contabilidad'][] = $rs->fields[0];
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
   function Form_lookup_fil_padronrimpe()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "?#?S?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_fil_ambiente_sri()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT ta_id, ta_nombre  FROM sri_tipo_ambiente  ORDER BY ta_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ambiente_sri'][] = $rs->fields[0];
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
   function Form_lookup_fil_estado()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_estado  ORDER BY dec_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_estado'][] = $rs->fields[0];
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
   function Form_lookup_fil_pais()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT pai_id, pai_nombre  FROM sis_pais  ORDER BY pai_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_pais'][] = $rs->fields[0];
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
   function Form_lookup_fil_provincia()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia'] = array(); 
}
if ($this->fil_pais != "")
{ 
   $this->nm_clear_val("fil_pais");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia'] = array(); 
    }
   $nm_comando = "SELECT pro_id, pro_nombre  FROM sis_provincia  where pro_pais=$this->fil_pais ORDER BY pro_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_provincia'][] = $rs->fields[0];
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
} 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_fil_ciudad()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad'] = array(); 
}
if ($this->fil_provincia != "")
{ 
   $this->nm_clear_val("fil_provincia");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad'] = array(); 
    }
   $nm_comando = "SELECT can_id, can_nombre  FROM sis_canton  WHERE can_provincia='$this->fil_provincia' ORDER BY can_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_ciudad'][] = $rs->fields[0];
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
} 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_fil_parroquia()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia'] = array(); 
}
if ($this->fil_ciudad != "")
{ 
   $this->nm_clear_val("fil_ciudad");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia'] = array(); 
    }
   $nm_comando = "SELECT parr_id, parr_nombre  FROM sis_parroquia  WHERE parr_canton='$this->fil_ciudad' ORDER BY parr_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['Lookup_fil_parroquia'][] = $rs->fields[0];
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
} 
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_sis_filial_mob_pack_ajax_response();
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter_form'] . " and (" . $comando . ")";
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
      $qt_geral_reg_form_sis_filial_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['total'] = $qt_geral_reg_form_sis_filial_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_sis_filial_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_sis_filial_mob_pack_ajax_response();
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
      $nm_numeric[] = "fil_id";$nm_numeric[] = "fil_empresa";$nm_numeric[] = "fil_actividad_economica";$nm_numeric[] = "fil_pais";$nm_numeric[] = "fil_provincia";$nm_numeric[] = "fil_ciudad";$nm_numeric[] = "fil_parroquia";$nm_numeric[] = "fil_ambiente_sri";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['decimal_db'] == ".")
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
       $nmgp_saida_form = "form_sis_filial_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_sis_filial_mob_fim.php";
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
       form_sis_filial_mob_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['masterValue']);
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
            case "0":
                return array("sys_separator.sc-unique-btn-1", "sys_separator.sc-unique-btn-7", "sys_separator.sc-unique-btn-13", "sys_separator.sc-unique-btn-18", "sys_separator.sc-unique-btn-19", "sys_separator.sc-unique-btn-25", "sys_separator.sc-unique-btn-31", "sys_separator.sc-unique-btn-36");
                break;
            case "new":
                return array("sc_b_new_t.sc-unique-btn-2", "sc_b_new_t.sc-unique-btn-20");
                break;
            case "insert":
                return array("sc_b_ins_t.sc-unique-btn-3", "sc_b_ins_t.sc-unique-btn-21");
                break;
            case "bcancelar":
                return array("sc_b_sai_t.sc-unique-btn-4", "sc_b_sai_t.sc-unique-btn-22");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-5", "sc_b_upd_t.sc-unique-btn-23");
                break;
            case "delete":
                return array("sc_b_del_t.sc-unique-btn-6", "sc_b_del_t.sc-unique-btn-24");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-8", "sc_b_sai_t.sc-unique-btn-9", "sc_b_sai_t.sc-unique-btn-11", "sc_b_sai_t.sc-unique-btn-26", "sc_b_sai_t.sc-unique-btn-27", "sc_b_sai_t.sc-unique-btn-29", "sc_b_sai_t.sc-unique-btn-10", "sc_b_sai_t.sc-unique-btn-12", "sc_b_sai_t.sc-unique-btn-28", "sc_b_sai_t.sc-unique-btn-30");
                break;
            case "birpara":
                return array("brec_b");
                break;
            case "first":
                return array("sc_b_ini_b.sc-unique-btn-14", "sc_b_ini_b.sc-unique-btn-32");
                break;
            case "back":
                return array("sc_b_ret_b.sc-unique-btn-15", "sc_b_ret_b.sc-unique-btn-33");
                break;
            case "forward":
                return array("sc_b_avc_b.sc-unique-btn-16", "sc_b_avc_b.sc-unique-btn-34");
                break;
            case "last":
                return array("sc_b_fim_b.sc-unique-btn-17", "sc_b_fim_b.sc-unique-btn-35");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['link_info']['compact_mode']) {
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
          <?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_configuracion'] . "-" . $this->Ini->Nm_lang['lang_filial'] . ""; } else { echo "" . $this->Ini->Nm_lang['lang_configuracion'] . "-" . $this->Ini->Nm_lang['lang_filial'] . ""; } ?>
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial_mob']['ordem_ord'] == " desc") {
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
            case "fil_id":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "fil_empresa":
                return 'desc';
            case "fil_actividad_economica":
                return 'desc';
            case "fil_ambiente_sri":
                return 'desc';
            case "fil_pais":
                return 'desc';
            case "fil_provincia":
                return 'desc';
            case "fil_ciudad":
                return 'desc';
            case "fil_parroquia":
                return 'desc';
            case "fil_barrio":
                return 'desc';
            case "fil_id":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
