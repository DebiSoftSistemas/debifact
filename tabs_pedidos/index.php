<?php
//
    include_once('tabs_pedidos_session.php');
    @ini_set('session.cookie_httponly', 1);
    @ini_set('session.use_only_cookies', 1);
    @ini_set('session.cookie_secure', 0);
    session_start();
    $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_perfil']         = "igtech_conexion";
    $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod']      = "";
    $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_imag_temp'] = "";
    //check publication with the prod
    $str_path_apl_url = $_SERVER['PHP_SELF'];
    $str_path_apl_url = str_replace("\\", '/', $str_path_apl_url);
    $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/"));
    $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/")+1);
    //check prod
    if(empty($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod']))
    {
            /*check prod*/$_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'] = $str_path_apl_url . "_lib/prod";
    }
    //check tmp
    if(empty($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_imag_temp']))
    {
            /*check tmp*/$_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_imag_temp'] = $str_path_apl_url . "_lib/tmp";
    }
    //end check publication with the prod
class tabs_pedidos
{
  var $nm_data;
  var $sc_page;
  var $str_lang;
  var $str_conf_reg;
  var $str_schema_all;
  var $admin_wp;
  var $grid_del_pedidos_nuevos;
  var $grid_del_pedidos_pagados;
  var $grid_del_pedidos_preparacion;
  var $grid_pedidos_por_entregar;
  var $grid_del_pedidos_enviados_entrega;
  var $grid_del_pedidos_entregados;
//
  function sc_Include($path, $tp, $name)
  {
      if ((empty($tp) && empty($name)) || ($tp == "F" && !function_exists($name)) || ($tp == "C" && !class_exists($name)))
      {
          include_once($path);
      }
  } // sc_Include
//
  function controle()
  {
     global 
             
            $path_libs, $path_lib_php, $path_imag_cab, $script_case_init,
            $nmgp_num_aba, $nm_saida, $nm_apl_dependente;
//
     $this->sc_page = $script_case_init;
     $this->sc_charset['UTF-8'] = 'utf-8';
     $this->sc_charset['ISO-2022-JP'] = 'iso-2022-jp';
     $this->sc_charset['ISO-2022-KR'] = 'iso-2022-kr';
     $this->sc_charset['ISO-8859-1'] = 'iso-8859-1';
     $this->sc_charset['ISO-8859-2'] = 'iso-8859-2';
     $this->sc_charset['ISO-8859-3'] = 'iso-8859-3';
     $this->sc_charset['ISO-8859-4'] = 'iso-8859-4';
     $this->sc_charset['ISO-8859-5'] = 'iso-8859-5';
     $this->sc_charset['ISO-8859-6'] = 'iso-8859-6';
     $this->sc_charset['ISO-8859-7'] = 'iso-8859-7';
     $this->sc_charset['ISO-8859-8'] = 'iso-8859-8';
     $this->sc_charset['ISO-8859-8-I'] = 'iso-8859-8-i';
     $this->sc_charset['ISO-8859-9'] = 'iso-8859-9';
     $this->sc_charset['ISO-8859-10'] = 'iso-8859-10';
     $this->sc_charset['ISO-8859-13'] = 'iso-8859-13';
     $this->sc_charset['ISO-8859-14'] = 'iso-8859-14';
     $this->sc_charset['ISO-8859-15'] = 'iso-8859-15';
     $this->sc_charset['WINDOWS-1250'] = 'windows-1250';
     $this->sc_charset['WINDOWS-1251'] = 'windows-1251';
     $this->sc_charset['WINDOWS-1252'] = 'windows-1252';
     $this->sc_charset['TIS-620'] = 'tis-620';
     $this->sc_charset['WINDOWS-1253'] = 'windows-1253';
     $this->sc_charset['WINDOWS-1254'] = 'windows-1254';
     $this->sc_charset['WINDOWS-1255'] = 'windows-1255';
     $this->sc_charset['WINDOWS-1256'] = 'windows-1256';
     $this->sc_charset['WINDOWS-1257'] = 'windows-1257';
     $this->sc_charset['KOI8-R'] = 'koi8-r';
     $this->sc_charset['BIG-5'] = 'big5';
     $this->sc_charset['EUC-CN'] = 'EUC-CN';
     $this->sc_charset['GB18030'] = 'GB18030';
     $this->sc_charset['GB2312'] = 'gb2312';
     $this->sc_charset['EUC-JP'] = 'euc-jp';
     $this->sc_charset['SJIS'] = 'shift-jis';
     $this->sc_charset['EUC-KR'] = 'euc-kr';
     $_SESSION['scriptcase']['charset_entities']['UTF-8'] = 'UTF-8';
     $_SESSION['scriptcase']['charset_entities']['ISO-8859-1'] = 'ISO-8859-1';
     $_SESSION['scriptcase']['charset_entities']['ISO-8859-5'] = 'ISO-8859-5';
     $_SESSION['scriptcase']['charset_entities']['ISO-8859-15'] = 'ISO-8859-15';
     $_SESSION['scriptcase']['charset_entities']['WINDOWS-1251'] = 'cp1251';
     $_SESSION['scriptcase']['charset_entities']['WINDOWS-1252'] = 'cp1252';
     $_SESSION['scriptcase']['charset_entities']['BIG-5'] = 'BIG5';
     $_SESSION['scriptcase']['charset_entities']['EUC-CN'] = 'GB2312';
     $_SESSION['scriptcase']['charset_entities']['GB2312'] = 'GB2312';
     $_SESSION['scriptcase']['charset_entities']['SJIS'] = 'Shift_JIS';
     $_SESSION['scriptcase']['charset_entities']['EUC-JP'] = 'EUC-JP';
     $_SESSION['scriptcase']['charset_entities']['KOI8-R'] = 'KOI8-R';
     $_SESSION['scriptcase']['sc_num_page'] = $script_case_init;
     $_SESSION['scriptcase']['sc_aba_iframe']['tabs_pedidos'][] = "admin_wp";
     $_SESSION['scriptcase']['sc_aba_iframe']['tabs_pedidos'][] = "grid_del_pedidos_nuevos";
     $_SESSION['scriptcase']['sc_aba_iframe']['tabs_pedidos'][] = "grid_del_pedidos_pagados";
     $_SESSION['scriptcase']['sc_aba_iframe']['tabs_pedidos'][] = "grid_del_pedidos_preparacion";
     $_SESSION['scriptcase']['sc_aba_iframe']['tabs_pedidos'][] = "grid_pedidos_por_entregar";
     $_SESSION['scriptcase']['sc_aba_iframe']['tabs_pedidos'][] = "grid_del_pedidos_enviados_entrega";
     $_SESSION['scriptcase']['sc_aba_iframe']['tabs_pedidos'][] = "grid_del_pedidos_entregados";
//
      $NM_dir_atual = getcwd();
      if (empty($NM_dir_atual))
      {
         $str_path_sys    = (isset($_SERVER['SCRIPT_FILENAME'])) ? $_SERVER['SCRIPT_FILENAME'] : $_SERVER['ORIG_PATH_TRANSLATED'];
         $str_path_sys    = str_replace("\\", '/', $str_path_sys);
      }
      else
      {
         $sc_nm_arquivo   = explode("/", $_SERVER['PHP_SELF']);
         $str_path_sys    = str_replace("\\", "/", getcwd()) . "/" . $sc_nm_arquivo[count($sc_nm_arquivo)-1];
      }
     $str_path_web    = $_SERVER['PHP_SELF'];
     $str_path_web    = str_replace("\\", '/', $str_path_web);
     $str_path_web    = str_replace('//', '/', $str_path_web);
     $root            = substr($str_path_sys, 0, -1 * strlen($str_path_web));
     $path_aplicacao  = substr($str_path_sys, 0, strrpos($str_path_sys, '/'));
     $path_embutida   = substr($path_aplicacao, 0, strrpos($path_aplicacao, '/') + 1);
     $path_aplicacao .= '/';
     $path_link       = substr($str_path_web, 0, strrpos($str_path_web, '/'));
     $path_link       = substr($path_link, 0, strrpos($path_link, '/')) . '/';
     $dir_raiz = strrpos($_SERVER['PHP_SELF'],"/") ;  
     $dir_raiz = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
     $path_imag_temp  = $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_imag_temp'];
     $path_img_global = $path_link . "_lib/img/";
     $path_botoes     = $path_link . "_lib/img";
     $path_icones     = $path_link . "_lib/img/";
     $path_img_modelo = $path_link . "_lib/img/";
     $path_imag_cab   = $path_link . "_lib/img/";
     $path_css        = $root . $path_link . "_lib/css/";
     $path_lib_php    = $root . $path_link . "_lib/lib/php";
     $path_help       = $path_link . "_lib/webhelp/";
     $path_imagens    = $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'] . "/imagens/";
     $path_libs       = $root . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'] . "/lib/php/";
     $path_third      = $root . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'] . "/third/";
     $_SESSION['scriptcase']['dir_temp'] = $root . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_imag_temp'];
     $path_adodb      = $root . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'] . "/third/adodb";
      if (!function_exists("sc_check_mobile"))
      {
          include_once("../_lib/lib/php/nm_check_mobile.php");
      }
      $_SESSION['scriptcase']['proc_mobile'] = sc_check_mobile();
        if (isset($_GET['_sc_force_mobile'])) {
            $_SESSION['scriptcase']['force_mobile'] = 'Y' == $_GET['_sc_force_mobile'];
        }
        if (isset($_SESSION['scriptcase']['force_mobile'])) {
            $_SESSION['scriptcase']['proc_mobile'] = $_SESSION['scriptcase']['force_mobile'];
        }
     if (isset($_SESSION['scriptcase']['user_logout']))
     {
         foreach ($_SESSION['scriptcase']['user_logout'] as $ind => $parms)
         {
             if (isset($_SESSION[$parms['V']]) && $_SESSION[$parms['V']] == $parms['U'])
             {
                 unset($_SESSION['scriptcase']['user_logout'][$ind]);
                 $nm_apl_dest = $parms['R'];
                 $dir = explode("/", $nm_apl_dest);
                 if (count($dir) == 1)
                 {
                     $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
                     $nm_apl_dest = $path_link . SC_dir_app_name($nm_apl_dest) . "/";
                 }
?>
                 <html>
                 <body>
                 <form name="FRedirect" method="POST" action="<?php echo $nm_apl_dest; ?>" target="<?php echo $parms['T']; ?>">
                 </form>
                 <script>
                  document.FRedirect.submit();
                 </script>
                 </body>
                 </html>
<?php
                 exit;
             }
         }
     }
     if (!isset($_SESSION['scriptcase']['str_lang']) || empty($_SESSION['scriptcase']['str_lang']))
     {
         $_SESSION['scriptcase']['str_lang'] = "es";
     }
     if (!isset($_SESSION['scriptcase']['str_conf_reg']) || empty($_SESSION['scriptcase']['str_conf_reg']))
     {
         $_SESSION['scriptcase']['str_conf_reg'] = "es_es";
     }
     $this->str_lang        = $_SESSION['scriptcase']['str_lang'];
     $this->str_conf_reg    = $_SESSION['scriptcase']['str_conf_reg'];
     if (isset($_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['lang'])) {
         $this->str_lang = $_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['lang'];
     }
     elseif (!isset($_SESSION['scriptcase']['tabs_pedidos']['actual_lang']) || $_SESSION['scriptcase']['tabs_pedidos']['actual_lang'] != $this->str_lang) {
         $_SESSION['scriptcase']['tabs_pedidos']['actual_lang'] = $this->str_lang;
         setcookie('sc_actual_lang_debi_doc_electronicos',$this->str_lang,'0','/');
     }
     $this->str_schema_all    = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "Debifact/Debifact";
     $this->path_lang = "../_lib/lang/";
     include($this->path_lang . $this->str_lang . ".lang.php");
     include($this->path_lang . "config_region.php");
     include("../_lib/css/" . $this->str_schema_all . "_tab.php");
     $_SESSION['scriptcase']['charset'] = "UTF-8";
     ini_set('default_charset', $_SESSION['scriptcase']['charset']);
     $_SESSION['scriptcase']['charset_html']  = (isset($this->sc_charset[$_SESSION['scriptcase']['charset']])) ? $this->sc_charset[$_SESSION['scriptcase']['charset']] : $_SESSION['scriptcase']['charset'];
     foreach ($this->Nm_conf_reg[$this->str_conf_reg] as $ind => $dados)
     {
        if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
        {
            $this->Nm_conf_reg[$this->str_conf_reg][$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
        }
     }
     foreach ($this->Nm_lang as $ind => $dados)
     {
        if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($ind))
        {
            $ind = sc_convert_encoding($ind, $_SESSION['scriptcase']['charset'], "UTF-8");
            $this->Nm_lang[$ind] = $dados;
        }
        if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
        {
            $this->Nm_lang[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
        }
     }
     if (isset($_SESSION['sc_session']['SC_parm_violation']) && !isset($_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir']))
     {
         unset($_SESSION['sc_session']['SC_parm_violation']);
         echo "<html>";
         echo "<body>";
         echo "<table align=\"center\" width=\"50%\" border=1 height=\"50px\">";
         echo "<tr>";
         echo "   <td align=\"center\">";
         echo "       <b><font size=4>" . $this->Nm_lang['lang_errm_ajax_data'] . "</font>";
         echo "   </b></td>";
         echo " </tr>";
         echo "</table>";
         echo "</body>";
         echo "</html>";
         exit;
     }
     include("../_lib/css/" . $this->str_schema_all . "_grid.php");
     $_SESSION['scriptcase']['reg_conf']['date_format']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['data_format']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['data_format'] : "ddmmyyyy";
     $_SESSION['scriptcase']['reg_conf']['date_sep']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['data_sep']))                 ?  $this->Nm_conf_reg[$this->str_conf_reg]['data_sep'] : "/";
     $_SESSION['scriptcase']['reg_conf']['date_week_ini'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['prim_dia_sema']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['prim_dia_sema'] : "SU";
     $_SESSION['scriptcase']['reg_conf']['time_format']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_format']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_format'] : "hhiiss";
     $_SESSION['scriptcase']['reg_conf']['time_sep']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_sep']))                 ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_sep'] : ":";
     $_SESSION['scriptcase']['reg_conf']['time_pos_ampm'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_pos_ampm']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_pos_ampm'] : "right_without_space";
     $_SESSION['scriptcase']['reg_conf']['time_simb_am']  = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_am']))          ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_am'] : "am";
     $_SESSION['scriptcase']['reg_conf']['time_simb_pm']  = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_pm']))          ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_pm'] : "pm";
     $_SESSION['scriptcase']['reg_conf']['simb_neg']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sinal_neg']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sinal_neg'] : "-";
     $_SESSION['scriptcase']['reg_conf']['grup_num']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sep_agr']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sep_agr'] : ".";
     $_SESSION['scriptcase']['reg_conf']['dec_num']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sep_dec']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sep_dec'] : ",";
     $_SESSION['scriptcase']['reg_conf']['neg_num']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_format_num_neg']))       ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_format_num_neg'] : 2;
     $_SESSION['scriptcase']['reg_conf']['monet_simb']    = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_simbolo']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_simbolo'] : "$";
     $_SESSION['scriptcase']['reg_conf']['monet_f_pos']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_pos'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_pos'] : 3;
     $_SESSION['scriptcase']['reg_conf']['monet_f_neg']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_neg'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_neg'] : 13;
     $_SESSION['scriptcase']['reg_conf']['grup_val']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_agr']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_agr'] : ".";
     $_SESSION['scriptcase']['reg_conf']['dec_val']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_dec']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_dec'] : ",";
     $_SESSION['scriptcase']['reg_conf']['html_dir']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  " DIR='" . $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] . "'" : "";
     $_SESSION['scriptcase']['reg_conf']['css_dir']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] : "LTR";
     $_SESSION['scriptcase']['reg_conf']['num_group_digit']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit']))       ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit'] : "1";
     $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'] : "1";
     $str_button = (isset($_SESSION['scriptcase']['str_button_all'])) ? $_SESSION['scriptcase']['str_button_all'] : "botones_cacmu";
     $_SESSION['scriptcase']['str_button_all'] = $str_button;
     include("../_lib/buttons/" . trim($str_button) . "/" . trim($str_button) . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".php");
     $Str_btn_css = trim($str_button) . "/" . trim($str_button) . ".css";
     $this->sc_Include($path_lib_php . "/nm_gp_config_btn.php", "F", "nmButtonOutput"); 
     if (isset($_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir'])) {
         $SS_cod_html  = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">';
         $SS_cod_html .= "<HTML>\r\n";
         $SS_cod_html .= " <HEAD>\r\n";
         $SS_cod_html .= "  <TITLE></TITLE>\r\n";
         $SS_cod_html .= "   <META http-equiv=\"Content-Type\" content=\"text/html; charset=" . $_SESSION['scriptcase']['charset_html'] . "\"/>\r\n";
         if ($_SESSION['scriptcase']['proc_mobile']) {
             $SS_cod_html .= "   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\"/>\r\n";
         }
         $SS_cod_html .= "   <META http-equiv=\"Expires\" content=\"Fri, Jan 01 1900 00:00:00 GMT\"/>\r\n";
         $SS_cod_html .= "    <META http-equiv=\"Pragma\" content=\"no-cache\"/>\r\n";
         if ($_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir_tp'] == "R") {
             $SS_cod_html .= "  </HEAD>\r\n";
             $SS_cod_html .= "   <body>\r\n";
         }
         else {
             $SS_cod_html .= "    <link rel=\"shortcut icon\" href=\"../_lib/img/usr__NM__img__NM__favicon.png\">\r\n";
             $SS_cod_html .= "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->str_schema_all . "_aba.css\"/>\r\n";
             $SS_cod_html .= "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->str_schema_all . "_aba" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\"/>\r\n";
             $SS_cod_html .= "  </HEAD>\r\n";
             $SS_cod_html .= "   <body class=\"scTabTable\">\r\n";
             $SS_cod_html .= "    <table align=\"center\"><tr><td style=\"padding: 0\"><div>\r\n";
             $SS_cod_html .= "    <table class=\"scTabTable\" width='100%' cellspacing=0 cellpadding=0><tr class=\"scTabHeader\"><td class=\"scTabHeaderFont\" style=\"padding: 15px 30px; text-align: center\">\r\n";
             $SS_cod_html .= $this->Nm_lang['lang_errm_expired_session'] . "\r\n";
             $SS_cod_html .= "     <form name=\"Fsession_redir\" method=\"post\"\r\n";
             $SS_cod_html .= "           target=\"_self\">\r\n";
             $SS_cod_html .= "           <input type=\"button\" name=\"sc_sai_seg\" value=\"OK\" onclick=\"sc_session_redir('" . $_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir'] . "');\">\r\n";
             $SS_cod_html .= "     </form>\r\n";
             $SS_cod_html .= "    </td></tr></table>\r\n";
             $SS_cod_html .= "    </div></td></tr></table>\r\n";
         }
         $SS_cod_html .= "    <script type=\"text/javascript\">\r\n";
         if ($_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir_tp'] == "R") {
             $SS_cod_html .= "      sc_session_redir('" . $_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir'] . "');\r\n";
         }
         $SS_cod_html .= "      function sc_session_redir(url_redir)\r\n";
         $SS_cod_html .= "      {\r\n";
         $SS_cod_html .= "         if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')\r\n";
         $SS_cod_html .= "         {\r\n";
         $SS_cod_html .= "            window.parent.sc_session_redir(url_redir);\r\n";
         $SS_cod_html .= "         }\r\n";
         $SS_cod_html .= "         else\r\n";
         $SS_cod_html .= "         {\r\n";
         $SS_cod_html .= "             if (window.opener && typeof window.opener.sc_session_redir === 'function')\r\n";
         $SS_cod_html .= "             {\r\n";
         $SS_cod_html .= "                 window.close();\r\n";
         $SS_cod_html .= "                 window.opener.sc_session_redir(url_redir);\r\n";
         $SS_cod_html .= "             }\r\n";
         $SS_cod_html .= "             else\r\n";
         $SS_cod_html .= "             {\r\n";
         $SS_cod_html .= "                 window.location = url_redir;\r\n";
         $SS_cod_html .= "             }\r\n";
         $SS_cod_html .= "         }\r\n";
         $SS_cod_html .= "      }\r\n";
         $SS_cod_html .= "    </script>\r\n";
         $SS_cod_html .= " </body>\r\n";
         $SS_cod_html .= "</HTML>\r\n";
         unset($_SESSION['scriptcase']['tabs_pedidos']['session_timeout']);
         unset($_SESSION['sc_session']);
     }
     if (isset($SS_cod_html))
     {
         echo $SS_cod_html;
         exit;
     }
     $_SESSION['scriptcase']['contr_link_emb'] = $dir_raiz . "tabs_pedidos.php" ; 
      $this->Change_Menu = false;
      if (isset($_SESSION['scriptcase']['menu_atual']) && (!isset($_SESSION['sc_session'][$this->sc_page]['tabs_pedidos']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->sc_page]['tabs_pedidos']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['tabs_pedidos']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['tabs_pedidos'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['tabs_pedidos']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['tabs_pedidos']['link'] = $path_link . "" . SC_dir_app_name('tabs_pedidos') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['tabs_pedidos']['label'] = "tabs_pedidos";
              $this->Change_Menu = true;
         }
         elseif ($this->sc_page == $this->sc_init_menu)
         {
             $achou = false;
             foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
             {
                 if ($apl == "tabs_pedidos")
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
     if ($_SESSION['sc_session'][$this->sc_page]['tabs_pedidos']['initialize'])
     {
         include_once($path_adodb . "/adodb.inc.php"); 
         $this->sc_Include($path_libs . "/nm_sec_prod.php", "F", "nm_reg_prod") ; 
         $this->sc_Include($path_libs . "/nm_ini_perfil.php", "F", "perfil_lib") ; 
         if(function_exists('set_php_timezone')) set_php_timezone('tabs_pedidos'); 
         include_once($path_aplicacao . "tabs_pedidos_erro.class.php"); 
         $this->Erro = new tabs_pedidos_erro();
         $_SESSION['scriptcase']['erro']['str_schema'] = $this->str_schema_all . "_error.css";
         $_SESSION['scriptcase']['erro']['str_schema_dir'] = $this->str_schema_all . "_error" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . " .css";
         $_SESSION['scriptcase']['erro']['str_lang']   = $this->str_lang;
         if (!defined("SC_ERROR_HANDLER"))
         {
             define("SC_ERROR_HANDLER", 1);
             include_once(dirname(__FILE__) . "/tabs_pedidos_erro.php");
         }
         perfil_lib($path_libs);
         if (!isset($_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil']))
         {
             if (function_exists("nm_check_perfil_exists")) nm_check_perfil_exists($path_libs, $path_prod);
             $_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil'] = true;
          }
          $nm_falta_var_db = "";
          if (isset($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_conexao']))
          {
              db_conect_devel($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_conexao'], $root . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'], 'debi_doc_electronicos', 2); 
          }
          if (isset($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_perfil']) && !empty($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_perfil']))
          {
             $_SESSION['scriptcase']['glo_perfil'] = $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_perfil'];
          }
          if (isset($_SESSION['scriptcase']['glo_perfil']) && !empty($_SESSION['scriptcase']['glo_perfil']))
          {
              $_SESSION['scriptcase']['glo_senha_protect'] = "";
              carrega_perfil($_SESSION['scriptcase']['glo_perfil'], $path_libs, "S");
              if (empty($_SESSION['scriptcase']['glo_senha_protect']))
              {
                  $nm_falta_var_db .= "Perfil=" . $_SESSION['scriptcase']['glo_perfil'] . "; ";
              }
          }
          if (!isset($_SESSION['scriptcase']['glo_tpbanco']))
          {
              $nm_falta_var_db .= "glo_tpbanco; ";
          }
          else
          {
              $nm_tpbanco = $_SESSION['scriptcase']['glo_tpbanco']; 
          }
          if (!isset($_SESSION['scriptcase']['glo_servidor']))
          {
              $nm_falta_var_db .= "glo_servidor; ";
          }
          else
          {
              $nm_servidor = $_SESSION['scriptcase']['glo_servidor']; 
          }
          if (!isset($_SESSION['scriptcase']['glo_banco']))
          {
              $nm_falta_var_db .= "glo_banco; ";
          }
          else
          {
              $nm_banco = $_SESSION['scriptcase']['glo_banco']; 
          }
          if (!isset($_SESSION['scriptcase']['glo_usuario']))
          {
              $nm_falta_var_db .= "glo_usuario; ";
          }
          else
          {
              $nm_usuario = $_SESSION['scriptcase']['glo_usuario']; 
          }
          if (!isset($_SESSION['scriptcase']['glo_senha']))
          {
              $nm_falta_var_db .= "glo_senha; ";
          }
          else
          {
               $nm_senha = $_SESSION['scriptcase']['glo_senha']; 
          }
          $nm_con_db2 = array();
          $nm_database_encoding = "";
          if (isset($_SESSION['scriptcase']['glo_database_encoding']))
          {
              $nm_database_encoding = $_SESSION['scriptcase']['glo_database_encoding']; 
          }
          $nm_arr_db_extra_args = array();
          if (isset($_SESSION['scriptcase']['glo_use_ssl']))
          {
              $nm_arr_db_extra_args['use_ssl'] = $_SESSION['scriptcase']['glo_use_ssl']; 
          }
          if (isset($_SESSION['scriptcase']['glo_mysql_ssl_key']))
          {
              $nm_arr_db_extra_args['mysql_ssl_key'] = $_SESSION['scriptcase']['glo_mysql_ssl_key']; 
          }
          if (isset($_SESSION['scriptcase']['glo_mysql_ssl_cert']))
          {
              $nm_arr_db_extra_args['mysql_ssl_cert'] = $_SESSION['scriptcase']['glo_mysql_ssl_cert']; 
          }
          if (isset($_SESSION['scriptcase']['glo_mysql_ssl_capath']))
          {
              $nm_arr_db_extra_args['mysql_ssl_capath'] = $_SESSION['scriptcase']['glo_mysql_ssl_capath']; 
          }
          if (isset($_SESSION['scriptcase']['glo_mysql_ssl_ca']))
          {
              $nm_arr_db_extra_args['mysql_ssl_ca'] = $_SESSION['scriptcase']['glo_mysql_ssl_ca']; 
          }
          if (isset($_SESSION['scriptcase']['glo_mysql_ssl_cipher']))
          {
              $nm_arr_db_extra_args['mysql_ssl_cipher'] = $_SESSION['scriptcase']['glo_mysql_ssl_cipher']; 
          }
          if (isset($_SESSION['scriptcase']['mssql_encrypt']))
          {
              $nm_arr_db_extra_args['mssql_encrypt'] = $_SESSION['scriptcase']['mssql_encrypt']; 
          }
          if (isset($_SESSION['scriptcase']['mssql_trustservercertificate']))
          {
              $nm_arr_db_extra_args['mssql_trustservercertificate'] = $_SESSION['scriptcase']['mssql_trustservercertificate']; 
          }
          if (isset($_SESSION['scriptcase']['mssql_truststore']))
          {
              $nm_arr_db_extra_args['mssql_truststore'] = $_SESSION['scriptcase']['mssql_truststore']; 
          }
          if (isset($_SESSION['scriptcase']['mssql_truststorepassword']))
          {
              $nm_arr_db_extra_args['mssql_truststorepassword'] = $_SESSION['scriptcase']['mssql_truststorepassword']; 
          }
          if (isset($_SESSION['scriptcase']['mssql_hostnameincertificate']))
          {
              $nm_arr_db_extra_args['mssql_hostnameincertificate'] = $_SESSION['scriptcase']['mssql_hostnameincertificate']; 
          }
          if (isset($_SESSION['scriptcase']['glo_db2_autocommit']))
          {
              $nm_con_db2['db2_autocommit'] = $_SESSION['scriptcase']['glo_db2_autocommit']; 
          }
          if (isset($_SESSION['scriptcase']['glo_db2_i5_lib']))
          {
              $nm_con_db2['db2_i5_lib'] = $_SESSION['scriptcase']['glo_db2_i5_lib']; 
          }
          if (isset($_SESSION['scriptcase']['glo_db2_i5_naming']))
          {
              $nm_con_db2['db2_i5_naming'] = $_SESSION['scriptcase']['glo_db2_i5_naming']; 
          }
          if (isset($_SESSION['scriptcase']['glo_db2_i5_commit']))
          {
              $nm_con_db2['db2_i5_commit'] = $_SESSION['scriptcase']['glo_db2_i5_commit']; 
          }
          if (isset($_SESSION['scriptcase']['glo_db2_i5_query_optimize']))
          {
              $nm_con_db2['db2_i5_query_optimize'] = $_SESSION['scriptcase']['glo_db2_i5_query_optimize']; 
          }
          if (isset($_SESSION['scriptcase']['oracle_type']))
          {
              $nm_arr_db_extra_args['oracle_type'] = $_SESSION['scriptcase']['oracle_type']; 
          }
          $date_delim  = "'"; 
          $date_delim1 = "'"; 
          if (isset($_SESSION['scriptcase']['glo_date_separator']) && !empty($_SESSION['scriptcase']['glo_date_separator']))
          {
              $SC_temp = trim($_SESSION['scriptcase']['glo_date_separator']);
              if (strlen($SC_temp) == 2)
              {
                  $date_delim  = substr($SC_temp, 0, 1); 
                  $date_delim1 = substr($SC_temp, 1, 1); 
              }
              else
              {
                 $date_delim  = $SC_temp; 
                 $date_delim1 = $SC_temp; 
              }
          }
          $nm_con_persistente = "";
          $nm_con_use_schema  = "";
          if (isset($_SESSION['scriptcase']['glo_use_persistent']))
          {
              $nm_con_persistente = $_SESSION['scriptcase']['glo_use_persistent']; 
          }
          if (isset($_SESSION['scriptcase']['glo_use_schema']))
          {
              $nm_con_use_schema = $_SESSION['scriptcase']['glo_use_schema']; 
          }
          if (!empty($nm_falta_var_db))
          {
              echo "<table width=\"80%\"  border=\"1\" height=\"117\">";
              echo "<tr>";
              echo "   <td class=\"css_menu_sel\">";
              echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_data'] . "</font>";
              echo "   </b></td>";
              echo " </tr>";
              echo "</table>";
              if (isset($_SESSION['scriptcase']['nm_ret_exec']) && '' != $_SESSION['scriptcase']['nm_ret_exec'])
              { 
                  if (isset($_SESSION['sc_session'][1]['tabs_pedidos']['sc_outra_jan']) && $_SESSION['sc_session'][1]['tabs_pedidos']['sc_outra_jan'])
                  {
                      echo "<a href='javascript:window.close()'><img border='0' src='" . $path_imag_cab . "/scriptcase__NM__exit.gif' title='" . $this->Nm_lang['lang_btns_menu_rtrn_hint'] . "' align=absmiddle></a> \n" ; 
                  } 
                  else 
                  { 
                      echo "<a href='" . $_SESSION['scriptcase']['nm_ret_exec'] . "><img border='0' src='" . $path_imag_cab . "/scriptcase__NM__exit.gif' title='" . $this->Nm_lang['lang_btns_menu_rtrn_hint'] . "' align=absmiddle></a> \n" ; 
                  } 
              } 
              exit ;
          } 
          if (isset($_SESSION['scriptcase']['glo_db_master_usr']) && !empty($_SESSION['scriptcase']['glo_db_master_usr']))
          {
              $nm_usuario = $_SESSION['scriptcase']['glo_db_master_usr']; 
          }
          if (isset($_SESSION['scriptcase']['glo_db_master_pass']) && !empty($_SESSION['scriptcase']['glo_db_master_pass']))
          {
              $nm_senha = $_SESSION['scriptcase']['glo_db_master_pass']; 
          }
          if (isset($_SESSION['scriptcase']['glo_db_master_cript']) && !empty($_SESSION['scriptcase']['glo_db_master_cript']))
          {
              $_SESSION['scriptcase']['glo_senha_protect'] = $_SESSION['scriptcase']['glo_db_master_cript']; 
          }
          $this->nm_bases_access    = array("access", "ado_access", "ace_access");
          $this->nm_bases_db2       = array("db2", "db2_odbc", "odbc_db2", "odbc_db2v6", "pdo_db2_odbc", "pdo_ibm");
          $this->nm_bases_ibase     = array("ibase", "firebird", "pdo_firebird", "borland_ibase");
          $this->nm_bases_informix  = array("informix", "informix72", "pdo_informix");
          $this->nm_bases_mssql     = array("mssql", "ado_mssql", "adooledb_mssql", "odbc_mssql", "mssqlnative", "pdo_sqlsrv", "pdo_dblib", "azure_mssql", "azure_ado_mssql", "azure_adooledb_mssql", "azure_odbc_mssql", "azure_mssqlnative", "azure_pdo_sqlsrv", "azure_pdo_dblib", "googlecloud_mssql", "googlecloud_ado_mssql", "googlecloud_adooledb_mssql", "googlecloud_odbc_mssql", "googlecloud_mssqlnative", "googlecloud_pdo_sqlsrv", "googlecloud_pdo_dblib", "amazonrds_mssql", "amazonrds_ado_mssql", "amazonrds_adooledb_mssql", "amazonrds_odbc_mssql", "amazonrds_mssqlnative", "amazonrds_pdo_sqlsrv", "amazonrds_pdo_dblib");
          $this->nm_bases_mysql     = array("mysql", "mysqlt", "mysqli", "maxsql", "pdo_mysql", "azure_mysql", "azure_mysqlt", "azure_mysqli", "azure_maxsql", "azure_pdo_mysql", "googlecloud_mysql", "googlecloud_mysqlt", "googlecloud_mysqli", "googlecloud_maxsql", "googlecloud_pdo_mysql", "amazonrds_mysql", "amazonrds_mysqlt", "amazonrds_mysqli", "amazonrds_maxsql", "amazonrds_pdo_mysql");
          $this->nm_bases_postgres  = array("postgres", "postgres64", "postgres7", "pdo_pgsql", "azure_postgres", "azure_postgres64", "azure_postgres7", "azure_pdo_pgsql", "googlecloud_postgres", "googlecloud_postgres64", "googlecloud_postgres7", "googlecloud_pdo_pgsql", "amazonrds_postgres", "amazonrds_postgres64", "amazonrds_postgres7", "amazonrds_pdo_pgsql");
          $this->nm_bases_oracle    = array("oci8", "oci805", "oci8po", "odbc_oracle", "oracle", "pdo_oracle", "oraclecloud_oci8", "oraclecloud_oci805", "oraclecloud_oci8po", "oraclecloud_odbc_oracle", "oraclecloud_oracle", "oraclecloud_pdo_oracle", "amazonrds_oci8", "amazonrds_oci805", "amazonrds_oci8po", "amazonrds_odbc_oracle", "amazonrds_oracle", "amazonrds_pdo_oracle");
          $this->nm_bases_sqlite    = array("sqlite", "sqlite3", "pdosqlite");
          $this->nm_bases_sybase    = array("sybase", "pdo_sybase_odbc", "pdo_sybase_dblib");
          $this->nm_bases_vfp       = array("vfp");
          $this->nm_bases_odbc      = array("odbc");
          $this->nm_bases_progress  = array("pdo_progress_odbc", "progress");
          $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
          if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && isset($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_conexao']))
          { 
             $this->Db = db_conect_devel($_SESSION['scriptcase']['tabs_pedidos']['glo_nm_conexao'], $root . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'], 'debi_doc_electronicos'); 
          } 
          else 
          { 
             $this->Db = db_conect($nm_tpbanco, $nm_servidor, $nm_usuario, $nm_senha, $nm_banco, $glo_senha_protect, "S", $nm_con_persistente, $nm_con_db2, $nm_database_encoding, $nm_arr_db_extra_args); 
          } 
          if (in_array(strtolower($nm_tpbanco), $this->nm_bases_ibase) && function_exists('ibase_timefmt'))
          {
             ibase_timefmt('%Y-%m-%d %H:%M:%S');
          } 
          if (in_array(strtolower($nm_tpbanco), $this->nm_bases_sybase))
          {
              $this->Db->fetchMode = ADODB_FETCH_BOTH;
              $this->Db->Execute("set dateformat ymd");
          } 
          if (in_array(strtolower($nm_tpbanco), $this->nm_bases_db2))
          {
              $this->Db->fetchMode = ADODB_FETCH_NUM;
          } 
          if (in_array(strtolower($nm_tpbanco), $this->nm_bases_mssql))
          {
             $this->Db->Execute("set dateformat ymd");
          } 
          if (in_array(strtolower($nm_tpbanco), $this->nm_bases_oracle))
          {
             $this->Db->Execute("alter session set nls_date_format         = 'yyyy-mm-dd hh24:mi:ss'");
             $this->Db->Execute("alter session set nls_timestamp_format    = 'yyyy-mm-dd hh24:mi:ss'");
             $this->Db->Execute("alter session set nls_timestamp_tz_format = 'yyyy-mm-dd hh24:mi:ss'");
             $this->Db->Execute("alter session set nls_time_format         = 'hh24:mi:ss'");
             $this->Db->Execute("alter session set nls_time_tz_format      = 'hh24:mi:ss'");
             $this->Db->Execute("alter session set nls_numeric_characters  = '.,'");
             $_SESSION['sc_session'][$this->sc_page]['tabs_pedidos']['decimal_db'] = "."; 
          } 
          $orig   = "Scriptcase";
          $evento = "access";
          $texto  = "";
          $dt     = $date_delim . date('Y-m-d H:i:s') . $date_delim1;
          $usr = isset($_SESSION['Igtech_SesionLogin']) ? $_SESSION['Igtech_SesionLogin'] : "";
          if (strtolower($nm_tpbanco) == 'pdo_sqlsrv' || strtolower($nm_tpbanco) == 'pdo_dblib')
          { 
              $dt  = $date_delim . date('Ymd H:i:s') . $date_delim1;
          } 
          if (in_array(strtolower($nm_tpbanco), $this->nm_bases_access))
          { 
              $dt  = "#" . date('Y-m-d H:i:s') . "#";
          } 
          if (in_array(strtolower($nm_tpbanco), $this->nm_bases_informix))
          { 
              $dt  = "EXTEND(" . $dt . ", YEAR TO FRACTION)";
          } 
         if (in_array(strtolower($nm_tpbanco), $this->nm_bases_access))
         { 
             $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'tabs_pedidos', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
         } 
          elseif (in_array(strtolower($nm_tpbanco), $this->nm_bases_sqlite))
          { 
              $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'tabs_pedidos', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
          } 
          else
          { 
              $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'tabs_pedidos', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
          } 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
          $rlog = $this->Db->Execute($comando); 
          if ($rlog === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
          }
          $this->Db->close();
     }
     $_SESSION['scriptcase']['nm_bases_security']  = "enc_nm_enc_v1D9NwDuBqHIrwHQJsDMNOVcBUH5XCVENUDcJUZ1B/DSBOD5BODEBOHErCDWF/VoBiDcJUZSX7Z1BYHuFaDMvOV9FeV5X/VEBiDcFYH9BqHIveHuJwDMveVkJ3V5B7VoFGHQFYDQB/D1NKV5BODMBOVcFeV5X/DoXGHQXOZ1FGHIveHQF7HgrKHErCH5X/VoFGHQJeDQB/HAN7HuJwDMNOVcBUDurGVoBqD9BsZ1F7DSrYD5rqDMrYZSJ3V5B7ZuJsHQJKDQFUHAveHuB/DMBYVcFeDWBmDoXGHQBsZ1BOHABYHQFGHgBOZSJqDWrGVoFGHQFYH9BiHArYHuJwDMrYVIBsH5B3DoXGHQJmZkFGHANOHQBqHgNODkXKH5FGDoF7D9XsDQJsDSBYV5FGHgNKDkBsDurGVEBiDcFYH9BODSrYHQJeHgveVkJ3HEB3VoFGHQJKH9FUD1NKVWBODMzGVIBsH5B7DoXGHQBsZ1BiD1NaD5XGDMvCHEJqDuXKVoFGHQXOZ9F7D1NKVWXGDMvODkBsDurGVoBqD9BsZ1F7DSrYD5rqDMrYZSJ3HEB7ZuJsHQXODQFUDSN7HQXGDMzGDkB/DWrmDoXGHQXOZ1FGHAN7HQFUHgBeZSJ3DuXKVoFGHQBiH9FUHABYHuJeDMzGVIB/H5B7DoXGHQBsZ1FGDSBeHQraHgBeZSJ3V5B3DoF7D9XsDQJsDSBYV5FGHgNKDkBsHEX/VEBiDcFYVINUHIBOZMFaHgvsDkXKDWrGVoFGHQJKH9BiDSvCV5BqHgrwVcFeDWXKDoXGHQXGZSBqHAvCZMJeHgvsHArsH5FGVoFGHQNwZSBiDSN7HuJeDMBOVcBUDurGVoBqD9BsZ1F7DSrYD5rqDMrYZSJGH5FYDoF7DcXOZSFGHAveV5FUHuBYVcFKDur/VoJwHQBsZ1BiDSvmD5FaHgBOHEFiDWFqDoXGDcJeDQFGHANOV5BOHuNODkBODuFqDoJeD9BsVIJwZ1BeV5XGDEvsHEFiH5F/DoB/DcJeZSFGD1BOV5JwDMBODkBsH5B7VEFGHQNwZ1FUZ1BOD5rqDEBOHEFiHEFqDoF7DcJUZSFGD1BeV5FGHgrYDkBODur/VoraD9XOH9FaD1rKD5BiHgNOHEBUDWr/ZuB/DcBwDQX7HANOV5FUHuzGDkB/H5FqDoraD9XOZSFaHANOV5FaDErKVkJ3DWF/VoBiDcJUZSX7Z1BYHuFaHuvmV9FeV5F/HMJsD9JmH9FaHIveHuBqHgveHAFKV5B7DoBOHQBiZSBiDSrwHuFaHuNOZSrCH5FqDoXGHQJmZ1FUZ1BeZMB/DMBYHEXeDWr/DoXGDcXOZSFGHAveD5JwHgrKVcFKHEFYDoNUD9BsH9FaD1NaV5FUDErKHEFiDuJeDoBOHQJKDQJsZ1vCV5FGHuNOV9FeDWXCHMJsHQNmZkBiHAzGD5BOHgrKDkB/DWFGDoBqHQBiDuFaDSNaV5XGDMvOV9BUDWF/HIX7DcFYZkFGHIrwHQJsHgBeHEFiV5B3DoF7D9XsDuFaHAveHuBODMvOZSJqH5FqHMJeD9XOZ1FaHIveHQJsHgBYHArCDuFaVoJeHQNmDuFaHIBeHuNUDMvODkBsV5FYDoXGHQJmZ1F7Z1vmD5rqDEBOHArCDWF/VoB/D9NwDQB/Z1rwV5X7HuzGVIBOV5X7DoJsD9XGZSB/HArYHQJwDEBODkFeH5FYVoFGHQJKDQBqHAvmV5JeDMvOZSNiH5XKVorqHQNwVIJsHAvsD5BOHgBeHEFiV5B3DoF7D9XsDuFaHAveHuXGHuNOV9BUH5B3DoXGHQBsZ1FaDSrYD5FaHgNOVkJ3H5FYDoXGDcXOZSBiD1BOV5BODMvmVcFKV5BmVoBqD9BsZkFGHArKHQFGHgvsZSJqDWr/HIXGHQFYZ9rqHAveHuFUHgrwV9FeDWFYHIJeHQXGZSBqHABYHQJwDEBODkFeH5FYVoFGHQJKDQBqDSzGD5NUDMvOVcXeV5r/VEB/";
     if (is_dir($path_aplicacao . 'img'))
     {
         $Res_dir_img = @opendir($path_aplicacao . 'img');
         if ($Res_dir_img)
         {
             while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
             {
                if (@is_file($path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $path_aplicacao . 'img/' . $Str_arquivo)
                {
                    @unlink($path_aplicacao . 'img/' . $Str_arquivo);
                }
             }
         }
         @closedir($Res_dir_img);
         rmdir($path_aplicacao . 'img');
     }
     $this->sc_Include($path_libs. "/nm_sec_prod.php", "F", "nm_reg_prod") ; 
     $this->sc_Include($path_libs. "/nm_trata_saida.php", "C", "nm_trata_saida") ; 
     $nm_saida = new nm_trata_saida();
     $nmsc_falta_var = "";
     $str_message = "<html>

<head>
    <title>{var_str_title}</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            min-width: 320px;
            background: #FFFFFF;
            font-family: 'Lato', 'Helvetica Neue', Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 1.4285em;
            color: rgba(0, 0, 0, 0.87);
            font-smoothing: antialiased;
        }

        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        user agent stylesheet body {
            display: block;
            margin: 8px;
        }

        html {
            font-size: 14px;
        }

        html {
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        ::selection {
            background-color: #CCE2FF;
            color: rgba(0, 0, 0, 0.87);
        }

        .ui.container {
            width: 933px;
            min-width: 992px;
            max-width: 1199px;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .ui.container {
            display: block;
            max-width: 100% !important;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .ui.message:last-child {
            margin-bottom: 0em;
        }

        .ui.message:first-child {
            margin-top: 0em;
        }

        .ui.message {
            font-size: 1em;
        }

        .ui.message {
            position: relative;
            min-height: 1em;
            margin: 1em 0em;
            background: #F8F8F9;
            padding: 1em 1.5em;
            line-height: 1.4285em;
            color: rgba(0, 0, 0, 0.87);
            transition: opacity 0.1s ease, color 0.1s ease, background 0.1s ease, box-shadow 0.1s ease;
            border-radius: 0.28571429rem;
            box-shadow: 0px 0px 0px 1px rgba(34, 36, 38, 0.22) inset, 0px 0px 0px 0px rgba(0, 0, 0, 0);
        }

        article,
        aside,
        footer,
        header,
        nav,
        section {
            display: block;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .ui.message> :last-child {
            margin-bottom: 0em;
        }

        .ui.message> :first-child {
            margin-top: 0em;
        }

        .ui.message .header+p {
            margin-top: 0.25em;
        }

        .ui.message p {
            opacity: 0.85;
            margin: 0.75em 0em;
        }

        p {
            margin: 0em 0em 1em;
            line-height: 1.4285em;
        }

        .ui.message .header:not(.ui) {
            font-size: 1.14285714em;
        }

        .ui.message .header {
            display: block;
            font-family: 'Lato', 'Helvetica Neue', Arial, Helvetica, sans-serif;
            font-weight: bold;
            margin: -0.14285714em 0em 1.2rem 0em;
        }

        .ui.button {
            cursor: pointer;
            display: inline-block;
            min-height: 1em;
            outline: 0;
            border: none;
            vertical-align: baseline;
            background: #e0e1e2 none;
            color: rgba(0, 0, 0, .6);
            font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
            margin: 0 .25em 0 0;
            padding: .78571429em 1.5em .78571429em;
            text-transform: none;
            text-shadow: none;
            font-weight: 700;
            line-height: 1em;
            font-style: normal;
            text-align: center;
            text-decoration: none;
            border-radius: .28571429rem;
            box-shadow: 0 0 0 1px transparent inset, 0 0 0 0 rgba(34, 36, 38, .15) inset;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transition: opacity .1s ease, background-color .1s ease, color .1s ease, box-shadow .1s ease, background .1s ease;
            will-change: '';
            -webkit-tap-highlight-color: transparent;
        }
        
        .ui.button,
        .ui.buttons .button,
        .ui.buttons .or {
            font-size: 1rem;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;
            column-gap: .5rem;
            display: flex;
        }
        
        .ui.primary.button,
        .ui.primary.buttons .button {
            background-color: #2185d0;
            color: #fff;
            text-shadow: none;
            background-image: none;
        }
        
        .ui.primary.button {
            box-shadow: 0 0 0 0 rgba(34, 36, 38, .15) inset;
        }

        [type=reset], [type=submit], button, html [type=button] {
            -webkit-appearance: button;
        }

        .icon{
            position: relative;
            width: 1.2rem;
            height: 1.2rem;
            display: block;
            color: inherit;
            background-repeat: no-repeat;
        }

        .icon.database{
            background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" fill=\"%23FFFFFF\"><path d=\"M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z\"/></svg>');
        }
    </style>
</head>

<body>
    <div class='ui container' style='padding-top:2rem'>
        <section class='ui message'>
            <div class='content'>
                <div class='header'>
                    <h1 class='ui header'>{var_str_title}</h1>
                </div>
                <p>{var_str_message}</p>
                <p>{var_str_message_conn}</p>
                {v_str_btn_inside}
            </div>
        </section>
    </div>";
     $str_message_end = "</body>
</html>";
     $str_message = str_replace('{var_str_title}', $this->Nm_lang['lang_errm_cmlb_nfndtitle'], $str_message);
      $str_message = str_replace('{var_str_message_conn}','', $str_message);
     $str_message = str_replace('{v_str_btn_inside}', '', $str_message);
     if (!empty($nmsc_falta_var)) 
     {
         $str_message = str_replace('{var_str_message}', $this->Nm_lang['lang_errm_glob'], $str_message);
         echo $str_message;
         echo '<A HREF="javascript:document.FSAI.submit()">' . $this->Nm_lang['lang_btns_exit_appl_hint'] . '</A>';
         echo "<form name='FSAI' method='post'"; 
         echo "    action='tabs_pedidos_fim.php'"; 
         echo "    target='_self'>"; 
         echo "    <input type='hidden' name='saida_aba' value='" . NM_encode_input($_SESSION['sc_session'][$this->sc_page]['tabs_pedidos']['aba_saida']) . "'/>";
         echo "    <input type='hidden' name='script_case_init' value='" . NM_encode_input($this->sc_page) . "'/>"; 
         echo $str_message_end;
         exit ;
     }
//  
     if (isset($_SESSION['scriptcase']['sc_apl_conf']['tabs_pedidos']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['tabs_pedidos']['exit'] != '')
     {
         $_SESSION['sc_session'][$this->sc_page]['tabs_pedidos']['aba_saida'] = $_SESSION['scriptcase']['sc_apl_conf']['tabs_pedidos']['exit'];
     }
     header("X-XSS-Protection: 1; mode=block");
  
$nm_saida->saida("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"\r\n");
$nm_saida->saida("            \"http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd\">\r\n");
     $nm_saida->saida("  <HTML" . $_SESSION['scriptcase']['reg_conf']['html_dir'] . ">\r\n");
     $nm_saida->saida("  <HEAD>\r\n");
     $nm_saida->saida("   <TITLE>tabs_pedidos</TITLE>\r\n");
     $nm_saida->saida("   <META http-equiv=\"Content-Type\" content=\"text/html; charset=" . $_SESSION['scriptcase']['charset_html'] . "\" />\r\n");
     if ($_SESSION['scriptcase']['proc_mobile'])
     {
          $nm_saida->saida("   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />\r\n");
     }
     $nm_saida->saida("   <META http-equiv=\"Expires\" content=\"Fri, Jan 01 1900 00:00:00 GMT\" />\r\n");
     $nm_saida->saida("   <META http-equiv=\"Last-Modified\" content=\"" . gmdate('D, d M Y H:i:s') . " GMT\" />\r\n");
     $nm_saida->saida("   <META http-equiv=\"Cache-Control\" content=\"no-store, no-cache, must-revalidate\" />\r\n");
     $nm_saida->saida("   <META http-equiv=\"Cache-Control\" content=\"post-check=0, pre-check=0\" />\r\n");
     $nm_saida->saida("   <META http-equiv=\"Pragma\" content=\"no-cache\" />\r\n");
     $nm_saida->saida("   <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->str_schema_all . "_sweetalert.css\" />\r\n");
     $nm_saida->saida("   <script type=\"text/javascript\" src=\"" . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'] . "/third/jquery/js/jquery.js\"></script>\r\n");
     $nm_saida->saida("   <script type=\"text/javascript\" src=\"" . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'] . '/third/sweetalert/sweetalert2.all.min.js' . "\"></script>\r\n");
     $nm_saida->saida("   <script type=\"text/javascript\" src=\"" . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_prod'] . '/third/sweetalert/polyfill.min.js' . "\"></script>\r\n");
     $nm_saida->saida("   <script type=\"text/javascript\" src=\"../_lib/lib/js/frameControl.js\"></script>\r\n");
$nm_saida->saida("   <link rel=\"shortcut icon\" href=\"../_lib/img/usr__NM__img__NM__favicon.png\">\r\n");
     $nm_saida->saida("   <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->str_schema_all . "_tab.css\" /> \r\n");
     $nm_saida->saida("   <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->str_schema_all . "_tab" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" /> \r\n");
      if(isset($str_google_fonts) && !empty($str_google_fonts)) 
      { 
     $nm_saida->saida("            <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $str_google_fonts . "\" /> \r\n");
      } 
     $nm_saida->saida("   <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/buttons/" . $Str_btn_css . "\" /> \r\n");
     $nm_saida->saida("  </HEAD>\r\n");
     $nm_saida->saida("  <BODY class=\"scTabPage\">\r\n");
     $nm_saida->saida("   <style type=\"text/css\">\r\n");
     $nm_saida->saida("   .scTabLine li {\r\n");
     $nm_saida->saida("            display: inline-block !important;\r\n");
     $nm_saida->saida("            text-align: center !important;\r\n");
     $nm_saida->saida("            overflow: hidden !important;\r\n");
     $nm_saida->saida("            vertical-align:top !important;\r\n");
     $nm_saida->saida("            height: auto !important;\r\n");
     $nm_saida->saida("            min-width: 200 !important;\r\n");
     $nm_saida->saida("            max-width: 300 !important;\r\n");
     $nm_saida->saida("   }\r\n");
     $nm_saida->saida("    .ttip {border:1px solid black;font-size:12px;layer-background-color:lightyellow;background-color:lightyellow;color:black;}\r\n");
     $nm_saida->saida("   </style>\r\n");
     $nm_saida->saida("   <div id=\"tooltip\" style=\"position:absolute;visibility:hidden;border:1px solid black;font-size:12px;layer-background-color:lightyellow;background-color:lightyellow;padding:1px;color:black;\"></div>\r\n");
     $nm_saida->saida("   <TABLE class=\"scTabTable\" cellpadding=0 cellspacing=0 ALIGN=\"center\" WIDTH=\"100%\">\r\n");
     $nm_saida->saida("    <TR>\r\n");
     $nm_saida->saida("     <TD style=\"padding: 0px\">\r\n");
     $nm_saida->saida("   <TABLE style=\"border-collapse: collapse; width: 100%\" cellpadding=0 cellspacing=0><TR><TD VALIGN=\"top\" width='10' nowrap align=\"left\">\r\n");
     $nm_saida->saida("   <ul class='scTabLine'  style='white-space:normal;'>\r\n");
     $cor_celula  = "scTabInactive";
     $cor_celula = "scTabInactiveLink";
     if ($nmgp_num_aba == "1" || empty($nmgp_num_aba)) 
     {
         $cor_celula  = "scTabActive";
         $cor_celula  = "scTabActiveLink";
         $imagem_fun = "";
     }
     $nm_saida->saida("           <li class=\"" . $cor_celula . "\"  ID=\"cel1\"><A HREF=\"javascript:nm_gp_aba1()\" TARGET=\"_self\"><B>" . $this->Nm_lang['lang_tienda_wp'] . "</B></FONT></A></li>\r\n");
     $cor_celula  = "scTabInactive";
     $cor_celula = "scTabInactiveLink";
     if ($nmgp_num_aba == "2") 
     {
         $cor_celula  = "scTabActive";
         $cor_celula  = "scTabActiveLink";
         $imagem_fun = "";
     }
     $nm_saida->saida("           <li class=\"" . $cor_celula . "\"  ID=\"cel2\"><A HREF=\"javascript:nm_gp_aba2()\" TARGET=\"_self\"><B>" . $this->Nm_lang['lang_nuevos_pedidos'] . "</B></FONT></A></li>\r\n");
     $cor_celula  = "scTabInactive";
     $cor_celula = "scTabInactiveLink";
     if ($nmgp_num_aba == "3") 
     {
         $cor_celula  = "scTabActive";
         $cor_celula  = "scTabActiveLink";
         $imagem_fun = "";
     }
     $nm_saida->saida("           <li class=\"" . $cor_celula . "\"  ID=\"cel3\"><A HREF=\"javascript:nm_gp_aba3()\" TARGET=\"_self\"><B>" . $this->Nm_lang['lang_pedidos_pagados'] . "</B></FONT></A></li>\r\n");
     $cor_celula  = "scTabInactive";
     $cor_celula = "scTabInactiveLink";
     if ($nmgp_num_aba == "4") 
     {
         $cor_celula  = "scTabActive";
         $cor_celula  = "scTabActiveLink";
         $imagem_fun = "";
     }
     $nm_saida->saida("           <li class=\"" . $cor_celula . "\"  ID=\"cel4\"><A HREF=\"javascript:nm_gp_aba4()\" TARGET=\"_self\"><B>" . $this->Nm_lang['lang_preparando_pedido'] . "</B></FONT></A></li>\r\n");
     $cor_celula  = "scTabInactive";
     $cor_celula = "scTabInactiveLink";
     if ($nmgp_num_aba == "5") 
     {
         $cor_celula  = "scTabActive";
         $cor_celula  = "scTabActiveLink";
         $imagem_fun = "";
     }
     $nm_saida->saida("           <li class=\"" . $cor_celula . "\"  ID=\"cel5\"><A HREF=\"javascript:nm_gp_aba5()\" TARGET=\"_self\"><B>" . $this->Nm_lang['lang_entregar_pedido'] . "</B></FONT></A></li>\r\n");
     $cor_celula  = "scTabInactive";
     $cor_celula = "scTabInactiveLink";
     if ($nmgp_num_aba == "6") 
     {
         $cor_celula  = "scTabActive";
         $cor_celula  = "scTabActiveLink";
         $imagem_fun = "";
     }
     $nm_saida->saida("           <li class=\"" . $cor_celula . "\"  ID=\"cel6\"><A HREF=\"javascript:nm_gp_aba6()\" TARGET=\"_self\"><B>" . $this->Nm_lang['lang_pedidos_enviados'] . "</B></FONT></A></li>\r\n");
     $cor_celula  = "scTabInactive";
     $cor_celula = "scTabInactiveLink";
     if ($nmgp_num_aba == "7") 
     {
         $cor_celula  = "scTabActive";
         $cor_celula  = "scTabActiveLink";
         $imagem_fun = "";
     }
     $nm_saida->saida("           <li class=\"" . $cor_celula . "\"  ID=\"cel7\"><A HREF=\"javascript:nm_gp_aba7()\" TARGET=\"_self\"><B>" . $this->Nm_lang['lang_pedidos_entregados'] . "</B></FONT></A></li>\r\n");
//
     $cor_celula  = "scTabInactive";
         $cor_celula = "scTabInactiveLink";
//
         $cor_celula  = "scTabInactive";
         $cor_celula = "scTabInactiveLink";
     if (is_file("tabs_pedidos_help.txt"))
     {
        $Arq_WebHelp = file("tabs_pedidos_help.txt"); 
        if (isset($Arq_WebHelp[0]) && !empty($Arq_WebHelp[0]))
        {
            $Arq_WebHelp[0] = str_replace("\r\n" , "", trim($Arq_WebHelp[0]));
            $Tmp = explode(";", $Arq_WebHelp[0]); 
            foreach ($Tmp as $Cada_help)
            {
                $Tmp1 = explode(":", $Cada_help); 
                if (!empty($Tmp1[0]) && isset($Tmp1[1]) && !empty($Tmp1[1]) && $Tmp1[0] == "aba" && is_file($root . $path_help . $Tmp1[1]))
                {
                    $nm_saida->saida("           <li class=\"" . $cor_celula . "\" ><A HREF=\"javascript:nm_help('" . $path_help . $Tmp1[1] . "')\" class=\"scTabInactiveFont\"><B>" . $this->Nm_lang['lang_btns_help_hint'] . "</B></FONT></A></li>\r\n");
                }
            }
        }
     }
     if (!$_SESSION['sc_session'][$this->sc_page]['tabs_pedidos']['iframe_menu'])
     {
         $nm_saida->saida("           <li class=\"" . $cor_celula . "\" ID=\"cel_saida\"><A HREF=\"javascript:nm_gp_submit2('" . $_SESSION['sc_session'][$this->sc_page]['tabs_pedidos']['aba_saida'] . "')\"><B>" . $this->Nm_lang['lang_btns_exit'] . "</B></FONT></A></li>\r\n");
     }
     $nm_saida->saida("   </ul>\r\n");
     $nm_saida->saida("     </TD>\r\n");
     $nm_saida->saida("    </TR>\r\n");
     $nm_saida->saida("   </TABLE>\r\n");
     $nm_saida->saida("   <TABLE BORDER=\"0\" CELLSPACING=\"0\"  WIDTH=\"100%\" class=\"scTabTableApls\" style=\"padding: 0 1px 0 0;\" align=\"center\">\r\n");
     $nm_saida->saida("    <TR>\r\n");
     $nm_saida->saida("      <TD style=\"padding: 0px\">\r\n");
     $nm_saida->saida("         <iframe id=\"nmsc_iframe_admin_wp_1\" frameborder=\"0\" align=\"center\" valign=\"top\" name=\"nm_iframe_aba_admin_wp_1\" height=\"600px\" width=\"100%\" scrolling=\"auto\"></iframe>\r\n");
     $nm_saida->saida("      </TD>\r\n");
     $nm_saida->saida("    </TR>\r\n");
     $nm_saida->saida("    <TR>\r\n");
     $nm_saida->saida("      <TD style=\"padding: 0px\">\r\n");
     $nm_saida->saida("         <iframe id=\"nmsc_iframe_grid_del_pedidos_nuevos_2\" frameborder=\"0\" align=\"center\" valign=\"top\" name=\"nm_iframe_aba_grid_del_pedidos_nuevos_2\" height=\"1000px\" width=\"100%\" scrolling=\"auto\"></iframe>\r\n");
     $nm_saida->saida("      </TD>\r\n");
     $nm_saida->saida("    </TR>\r\n");
     $nm_saida->saida("    <TR>\r\n");
     $nm_saida->saida("      <TD style=\"padding: 0px\">\r\n");
     $nm_saida->saida("         <iframe id=\"nmsc_iframe_grid_del_pedidos_pagados_3\" frameborder=\"0\" align=\"center\" valign=\"top\" name=\"nm_iframe_aba_grid_del_pedidos_pagados_3\" height=\"1000px\" width=\"100%\" scrolling=\"auto\"></iframe>\r\n");
     $nm_saida->saida("      </TD>\r\n");
     $nm_saida->saida("    </TR>\r\n");
     $nm_saida->saida("    <TR>\r\n");
     $nm_saida->saida("      <TD style=\"padding: 0px\">\r\n");
     $nm_saida->saida("         <iframe id=\"nmsc_iframe_grid_del_pedidos_preparacion_4\" frameborder=\"0\" align=\"center\" valign=\"top\" name=\"nm_iframe_aba_grid_del_pedidos_preparacion_4\" height=\"1000px\" width=\"100%\" scrolling=\"auto\"></iframe>\r\n");
     $nm_saida->saida("      </TD>\r\n");
     $nm_saida->saida("    </TR>\r\n");
     $nm_saida->saida("    <TR>\r\n");
     $nm_saida->saida("      <TD style=\"padding: 0px\">\r\n");
     $nm_saida->saida("         <iframe id=\"nmsc_iframe_grid_pedidos_por_entregar_5\" frameborder=\"0\" align=\"center\" valign=\"top\" name=\"nm_iframe_aba_grid_pedidos_por_entregar_5\" height=\"1000px\" width=\"100%\" scrolling=\"auto\"></iframe>\r\n");
     $nm_saida->saida("      </TD>\r\n");
     $nm_saida->saida("    </TR>\r\n");
     $nm_saida->saida("    <TR>\r\n");
     $nm_saida->saida("      <TD style=\"padding: 0px\">\r\n");
     $nm_saida->saida("         <iframe id=\"nmsc_iframe_grid_del_pedidos_enviados_entrega_6\" frameborder=\"0\" align=\"center\" valign=\"top\" name=\"nm_iframe_aba_grid_del_pedidos_enviados_entrega_6\" height=\"1000px\" width=\"100%\" scrolling=\"auto\"></iframe>\r\n");
     $nm_saida->saida("      </TD>\r\n");
     $nm_saida->saida("    </TR>\r\n");
     $nm_saida->saida("    <TR>\r\n");
     $nm_saida->saida("      <TD style=\"padding: 0px\">\r\n");
     $nm_saida->saida("         <iframe id=\"nmsc_iframe_grid_del_pedidos_entregados_7\" frameborder=\"0\" align=\"center\" valign=\"top\" name=\"nm_iframe_aba_grid_del_pedidos_entregados_7\" height=\"1000px\" width=\"100%\" scrolling=\"auto\"></iframe>\r\n");
     $nm_saida->saida("      </TD>\r\n");
     $nm_saida->saida("    </TR>\r\n");
     $nm_saida->saida("   </TABLE>\r\n");
     $nm_saida->saida("     </TD>\r\n");
     $nm_saida->saida("    </TR>\r\n");
         $nm_saida->saida("    </TABLE>\r\n");
     $nm_saida->saida("   <form name=\"F1\" method=\"post\" \r\n");
     $nm_saida->saida("                     action=\"./\" \r\n");
     $nm_saida->saida("                     target=\"_self\"> \r\n");
     $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_num_aba\" value=\"1\"/>\r\n");
     $nm_saida->saida("   </form> \r\n");
     $nm_saida->saida("   <form name=\"F2\" method=\"post\" \r\n");
     $nm_saida->saida("                     target=\"_self\"> \r\n");
     $nm_saida->saida("    <input type=\"hidden\" name=\"saida_aba\" value=\"\"/>\r\n");
     $nm_saida->saida("    <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->sc_page) . "\"/> \r\n");
     $nm_saida->saida("   </form> \r\n");
     $nm_saida->saida("   <form name=\"Faba\" method=\"post\" \r\n");
     $nm_saida->saida("                       action=\"\" \r\n");
     $nm_saida->saida("                       target=\"\"> \r\n");
     $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_parms\" value=\"\"/>\r\n");
     $nm_saida->saida("   </form> \r\n");
     $nm_saida->saida("   <script language=\"javascript\">\r\n");
     $nm_saida->saida("   function sc_session_redir(url_redir)\r\n");
     $nm_saida->saida("   {\r\n");
           $nm_saida->saida("       if (typeof(sc_session_redir_mobile) === typeof(function(){})) { sc_session_redir_mobile(url_redir); }\r\n");
     $nm_saida->saida("       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')\r\n");
     $nm_saida->saida("       {\r\n");
     $nm_saida->saida("           window.parent.sc_session_redir(url_redir);\r\n");
     $nm_saida->saida("       }\r\n");
     $nm_saida->saida("       else\r\n");
     $nm_saida->saida("       {\r\n");
     $nm_saida->saida("           if (window.opener && typeof window.opener.sc_session_redir === 'function')\r\n");
     $nm_saida->saida("           {\r\n");
     $nm_saida->saida("               window.close();\r\n");
     $nm_saida->saida("               window.opener.sc_session_redir(url_redir);\r\n");
     $nm_saida->saida("           }\r\n");
     $nm_saida->saida("           else\r\n");
     $nm_saida->saida("           {\r\n");
     $nm_saida->saida("               window.location = url_redir;\r\n");
     $nm_saida->saida("           }\r\n");
     $nm_saida->saida("       }\r\n");
     $nm_saida->saida("   }\r\n");
     $nm_saida->saida("   function nm_gp_submit(aba) \r\n");
     $nm_saida->saida("   { \r\n");
     $nm_saida->saida("      document.F1.nmgp_num_aba.value = aba;\r\n");
     $nm_saida->saida("      document.F1.submit() ;\r\n");
     $nm_saida->saida("   } \r\n");
     $nm_saida->saida("   function nm_gp_submit2(apl_saida) \r\n");
     $nm_saida->saida("   { \r\n");
     $nm_saida->saida("      document.F2.saida_aba.value = apl_saida  ;\r\n");
     $nm_saida->saida("      document.F2.action = \"tabs_pedidos_fim.php\";\r\n");
     $nm_saida->saida("      document.F2.submit() ;\r\n");
     $nm_saida->saida("   } \r\n");
     $nm_saida->saida("   function nm_help(Page)\r\n");
     $nm_saida->saida("   {\r\n");
     $nm_saida->saida("      window.open(Page, '" . addslashes($this->Nm_lang['lang_btns_help_hint']) . "', 'resizable');\r\n");
     $nm_saida->saida("   }\r\n");
     $nm_saida->saida("   var sc_cel_ativa = 1;\r\n");
     $nm_saida->saida("   var nm_admin_wp_1 = 'no';\r\n");
     $nm_saida->saida("   var nm_grid_del_pedidos_nuevos_2 = 'no';\r\n");
     $nm_saida->saida("   var nm_grid_del_pedidos_pagados_3 = 'no';\r\n");
     $nm_saida->saida("   var nm_grid_del_pedidos_preparacion_4 = 'no';\r\n");
     $nm_saida->saida("   var nm_grid_pedidos_por_entregar_5 = 'no';\r\n");
     $nm_saida->saida("   var nm_grid_del_pedidos_enviados_entrega_6 = 'no';\r\n");
     $nm_saida->saida("   var nm_grid_del_pedidos_entregados_7 = 'no';\r\n");
     $nm_saida->saida("   function nm_gp_aba1() \r\n");
     $nm_saida->saida("   { \r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabInactiveLink';\r\n");
     $nm_saida->saida("      sc_cel_ativa = 1;\r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabActiveLink';\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_nuevos_2').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_pagados_3').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_preparacion_4').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_pedidos_por_entregar_5').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_enviados_entrega_6').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_entregados_7').style.display = 'none'; \r\n");
     $nm_saida->saida("      tst_clear_iframe = document.getElementById(\"nmsc_iframe_admin_wp_1\"); \r\n");
     $nm_saida->saida("      if (tst_clear_iframe.contentWindow && tst_clear_iframe.contentWindow.document && tst_clear_iframe.contentWindow.document.body)\r\n");
     $nm_saida->saida("      {\r\n");
     $nm_saida->saida("          tst_clear_iframe.contentWindow.document.body.innerHTML = \"\";\r\n");
     $nm_saida->saida("      }\r\n");
     $nm_saida->saida("      document.Faba.nmgp_parms.value = \"under_dashboard*scin1*scout\"; \r\n");
     $nm_saida->saida("      document.Faba.target   = \"nm_iframe_aba_admin_wp_1\"; \r\n");
     $nm_saida->saida("      document.Faba.action   = \"" . $path_link  . SC_dir_app_name('admin_wp') . "/\";\r\n");
     $nm_saida->saida("      document.Faba.submit() ;\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_admin_wp_1').style.display = 'block'; \r\n");
     $nm_saida->saida("   } \r\n");
     $nm_saida->saida("   function nm_gp_aba2() \r\n");
     $nm_saida->saida("   { \r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabInactiveLink';\r\n");
     $nm_saida->saida("      sc_cel_ativa = 2;\r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabActiveLink';\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_admin_wp_1').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_pagados_3').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_preparacion_4').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_pedidos_por_entregar_5').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_enviados_entrega_6').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_entregados_7').style.display = 'none'; \r\n");
     $nm_saida->saida("      tst_clear_iframe = document.getElementById(\"nmsc_iframe_grid_del_pedidos_nuevos_2\"); \r\n");
     $nm_saida->saida("      if (tst_clear_iframe.contentWindow && tst_clear_iframe.contentWindow.document && tst_clear_iframe.contentWindow.document.body)\r\n");
     $nm_saida->saida("      {\r\n");
     $nm_saida->saida("          tst_clear_iframe.contentWindow.document.body.innerHTML = \"\";\r\n");
     $nm_saida->saida("      }\r\n");
     $nm_saida->saida("      document.Faba.nmgp_parms.value = \"under_dashboard*scin1*scout\"; \r\n");
     $nm_saida->saida("      document.Faba.target   = \"nm_iframe_aba_grid_del_pedidos_nuevos_2\"; \r\n");
     $nm_saida->saida("      document.Faba.action   = \"" . $path_link  . SC_dir_app_name('grid_del_pedidos_nuevos') . "/\";\r\n");
     $nm_saida->saida("      document.Faba.submit() ;\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_nuevos_2').style.display = 'block'; \r\n");
     $nm_saida->saida("   } \r\n");
     $nm_saida->saida("   function nm_gp_aba3() \r\n");
     $nm_saida->saida("   { \r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabInactiveLink';\r\n");
     $nm_saida->saida("      sc_cel_ativa = 3;\r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabActiveLink';\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_admin_wp_1').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_nuevos_2').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_preparacion_4').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_pedidos_por_entregar_5').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_enviados_entrega_6').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_entregados_7').style.display = 'none'; \r\n");
     $nm_saida->saida("      tst_clear_iframe = document.getElementById(\"nmsc_iframe_grid_del_pedidos_pagados_3\"); \r\n");
     $nm_saida->saida("      if (tst_clear_iframe.contentWindow && tst_clear_iframe.contentWindow.document && tst_clear_iframe.contentWindow.document.body)\r\n");
     $nm_saida->saida("      {\r\n");
     $nm_saida->saida("          tst_clear_iframe.contentWindow.document.body.innerHTML = \"\";\r\n");
     $nm_saida->saida("      }\r\n");
     $nm_saida->saida("      document.Faba.nmgp_parms.value = \"under_dashboard*scin1*scout\"; \r\n");
     $nm_saida->saida("      document.Faba.target   = \"nm_iframe_aba_grid_del_pedidos_pagados_3\"; \r\n");
     $nm_saida->saida("      document.Faba.action   = \"" . $path_link  . SC_dir_app_name('grid_del_pedidos_pagados') . "/\";\r\n");
     $nm_saida->saida("      document.Faba.submit() ;\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_pagados_3').style.display = 'block'; \r\n");
     $nm_saida->saida("   } \r\n");
     $nm_saida->saida("   function nm_gp_aba4() \r\n");
     $nm_saida->saida("   { \r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabInactiveLink';\r\n");
     $nm_saida->saida("      sc_cel_ativa = 4;\r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabActiveLink';\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_admin_wp_1').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_nuevos_2').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_pagados_3').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_pedidos_por_entregar_5').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_enviados_entrega_6').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_entregados_7').style.display = 'none'; \r\n");
     $nm_saida->saida("      tst_clear_iframe = document.getElementById(\"nmsc_iframe_grid_del_pedidos_preparacion_4\"); \r\n");
     $nm_saida->saida("      if (tst_clear_iframe.contentWindow && tst_clear_iframe.contentWindow.document && tst_clear_iframe.contentWindow.document.body)\r\n");
     $nm_saida->saida("      {\r\n");
     $nm_saida->saida("          tst_clear_iframe.contentWindow.document.body.innerHTML = \"\";\r\n");
     $nm_saida->saida("      }\r\n");
     $nm_saida->saida("      document.Faba.nmgp_parms.value = \"under_dashboard*scin1*scout\"; \r\n");
     $nm_saida->saida("      document.Faba.target   = \"nm_iframe_aba_grid_del_pedidos_preparacion_4\"; \r\n");
     $nm_saida->saida("      document.Faba.action   = \"" . $path_link  . SC_dir_app_name('grid_del_pedidos_preparacion') . "/\";\r\n");
     $nm_saida->saida("      document.Faba.submit() ;\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_preparacion_4').style.display = 'block'; \r\n");
     $nm_saida->saida("   } \r\n");
     $nm_saida->saida("   function nm_gp_aba5() \r\n");
     $nm_saida->saida("   { \r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabInactiveLink';\r\n");
     $nm_saida->saida("      sc_cel_ativa = 5;\r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabActiveLink';\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_admin_wp_1').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_nuevos_2').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_pagados_3').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_preparacion_4').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_enviados_entrega_6').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_entregados_7').style.display = 'none'; \r\n");
     $nm_saida->saida("      tst_clear_iframe = document.getElementById(\"nmsc_iframe_grid_pedidos_por_entregar_5\"); \r\n");
     $nm_saida->saida("      if (tst_clear_iframe.contentWindow && tst_clear_iframe.contentWindow.document && tst_clear_iframe.contentWindow.document.body)\r\n");
     $nm_saida->saida("      {\r\n");
     $nm_saida->saida("          tst_clear_iframe.contentWindow.document.body.innerHTML = \"\";\r\n");
     $nm_saida->saida("      }\r\n");
     $nm_saida->saida("      document.Faba.nmgp_parms.value = \"under_dashboard*scin1*scout\"; \r\n");
     $nm_saida->saida("      document.Faba.target   = \"nm_iframe_aba_grid_pedidos_por_entregar_5\"; \r\n");
     $nm_saida->saida("      document.Faba.action   = \"" . $path_link  . SC_dir_app_name('grid_pedidos_por_entregar') . "/\";\r\n");
     $nm_saida->saida("      document.Faba.submit() ;\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_pedidos_por_entregar_5').style.display = 'block'; \r\n");
     $nm_saida->saida("   } \r\n");
     $nm_saida->saida("   function nm_gp_aba6() \r\n");
     $nm_saida->saida("   { \r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabInactiveLink';\r\n");
     $nm_saida->saida("      sc_cel_ativa = 6;\r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabActiveLink';\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_admin_wp_1').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_nuevos_2').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_pagados_3').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_preparacion_4').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_pedidos_por_entregar_5').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_entregados_7').style.display = 'none'; \r\n");
     $nm_saida->saida("      tst_clear_iframe = document.getElementById(\"nmsc_iframe_grid_del_pedidos_enviados_entrega_6\"); \r\n");
     $nm_saida->saida("      if (tst_clear_iframe.contentWindow && tst_clear_iframe.contentWindow.document && tst_clear_iframe.contentWindow.document.body)\r\n");
     $nm_saida->saida("      {\r\n");
     $nm_saida->saida("          tst_clear_iframe.contentWindow.document.body.innerHTML = \"\";\r\n");
     $nm_saida->saida("      }\r\n");
     $nm_saida->saida("      document.Faba.nmgp_parms.value = \"under_dashboard*scin1*scout\"; \r\n");
     $nm_saida->saida("      document.Faba.target   = \"nm_iframe_aba_grid_del_pedidos_enviados_entrega_6\"; \r\n");
     $nm_saida->saida("      document.Faba.action   = \"" . $path_link  . SC_dir_app_name('grid_del_pedidos_enviados_entrega') . "/\";\r\n");
     $nm_saida->saida("      document.Faba.submit() ;\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_enviados_entrega_6').style.display = 'block'; \r\n");
     $nm_saida->saida("   } \r\n");
     $nm_saida->saida("   function nm_gp_aba7() \r\n");
     $nm_saida->saida("   { \r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabInactiveLink';\r\n");
     $nm_saida->saida("      sc_cel_ativa = 7;\r\n");
     $nm_saida->saida("      document.getElementById('cel'+sc_cel_ativa).className = 'scTabActiveLink';\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_admin_wp_1').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_nuevos_2').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_pagados_3').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_preparacion_4').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_pedidos_por_entregar_5').style.display = 'none'; \r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_enviados_entrega_6').style.display = 'none'; \r\n");
     $nm_saida->saida("      tst_clear_iframe = document.getElementById(\"nmsc_iframe_grid_del_pedidos_entregados_7\"); \r\n");
     $nm_saida->saida("      if (tst_clear_iframe.contentWindow && tst_clear_iframe.contentWindow.document && tst_clear_iframe.contentWindow.document.body)\r\n");
     $nm_saida->saida("      {\r\n");
     $nm_saida->saida("          tst_clear_iframe.contentWindow.document.body.innerHTML = \"\";\r\n");
     $nm_saida->saida("      }\r\n");
     $nm_saida->saida("      document.Faba.nmgp_parms.value = \"under_dashboard*scin1*scout\"; \r\n");
     $nm_saida->saida("      document.Faba.target   = \"nm_iframe_aba_grid_del_pedidos_entregados_7\"; \r\n");
     $nm_saida->saida("      document.Faba.action   = \"" . $path_link  . SC_dir_app_name('grid_del_pedidos_entregados') . "/\";\r\n");
     $nm_saida->saida("      document.Faba.submit() ;\r\n");
     $nm_saida->saida("      document.getElementById('nmsc_iframe_grid_del_pedidos_entregados_7').style.display = 'block'; \r\n");
     $nm_saida->saida("   } \r\n");
     if ($nmgp_num_aba == "1" || empty($nmgp_num_aba)) 
     { 
         $nm_saida->saida("   nm_gp_aba1(); \r\n");
     } 
     $nm_saida->saida("   </script>\r\n");
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
     $nm_saida->saida("   </body>\r\n");
     $nm_saida->saida("   </HTML>\r\n");
  }
}
if (!function_exists("NM_is_utf8"))
{
    include_once("../_lib/lib/php/nm_utf8.php");
}
if (!function_exists("SC_dir_app_ini"))
{
    include_once("../_lib/lib/php/nm_ctrl_app_name.php");
}
SC_dir_app_ini('debi_doc_electronicos');
$Sc_lig_md5 = false;
$Sem_Session = (!isset($_SESSION['sc_session'])) ? true : false;
$_SESSION['scriptcase']['sem_session'] = false;
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
         $$nmgp_var = $nmgp_val;
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
         $$nmgp_var = $nmgp_val;
    }
}
if (!isset($_SERVER['HTTP_REFERER']) || (!isset($nmgp_parms) && !isset($script_case_init) && !isset($nmgp_start) ))
{
    $Sem_Session = false;
}
$NM_dir_atual = getcwd();
if (empty($NM_dir_atual)) {
    $str_path_sys  = (isset($_SERVER['SCRIPT_FILENAME'])) ? $_SERVER['SCRIPT_FILENAME'] : $_SERVER['ORIG_PATH_TRANSLATED'];
    $str_path_sys  = str_replace("\\", '/', $str_path_sys);
}
else {
    $sc_nm_arquivo = explode("/", $_SERVER['PHP_SELF']);
    $str_path_sys  = str_replace("\\", "/", getcwd()) . "/" . $sc_nm_arquivo[count($sc_nm_arquivo)-1];
}
$str_path_web    = $_SERVER['PHP_SELF'];
$str_path_web    = str_replace("\\", '/', $str_path_web);
$str_path_web    = str_replace('//', '/', $str_path_web);
$path_aplicacao  = substr($str_path_web, 0, strrpos($str_path_web, '/'));
$path_aplicacao  = substr($path_aplicacao, 0, strrpos($path_aplicacao, '/'));
$root            = substr($str_path_sys, 0, -1 * strlen($str_path_web));
if ($Sem_Session && (!isset($nmgp_start) || $nmgp_start != "SC")) {
    if (isset($_COOKIE['sc_apl_default_debi_doc_electronicos'])) {
        $apl_def = explode(",", $_COOKIE['sc_apl_default_debi_doc_electronicos']);
    }
    elseif (is_file($root . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_imag_temp'] . "/sc_apl_default_debi_doc_electronicos.txt")) {
        $apl_def = explode(",", file_get_contents($root . $_SESSION['scriptcase']['tabs_pedidos']['glo_nm_path_imag_temp'] . "/sc_apl_default_debi_doc_electronicos.txt"));
    }
    if (isset($apl_def)) {
        if ($apl_def[0] != "tabs_pedidos") {
            $_SESSION['scriptcase']['sem_session'] = true;
            if (strtolower(substr($apl_def[0], 0 , 7)) == "http://" || strtolower(substr($apl_def[0], 0 , 8)) == "https://" || substr($apl_def[0], 0 , 2) == "..") {
                $_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir'] = $apl_def[0];
            }
            else {
                $_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir'] = $path_aplicacao . "/" . SC_dir_app_name($apl_def[0]) . "/index.php";
            }
            $Redir_tp = (isset($apl_def[1])) ? trim(strtoupper($apl_def[1])) : "";
            $_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir_tp'] = $Redir_tp;
        }
        if (isset($_COOKIE['sc_actual_lang_debi_doc_electronicos'])) {
            $_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['lang'] = $_COOKIE['sc_actual_lang_debi_doc_electronicos'];
        }
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
if (isset($nmgp_parms))
{
    $nmgp_parms = str_replace("@aspass@", "'", $nmgp_parms);
    $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
    $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
    $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
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
           if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
           $Tmp_par   = $cadapar[0];;
           $$Tmp_par = $cadapar[1];
       }
    }
}
if (empty($script_case_init))
{
    $script_case_init = rand(2, 10000);
}
if (isset($_SESSION['scriptcase']['sc_outra_jan']) && $_SESSION['scriptcase']['sc_outra_jan'] == 'tabs_pedidos')
{
    $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['sc_outra_jan'] = true;
     unset($_SESSION['scriptcase']['sc_outra_jan']);
}
if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
{
    $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['sc_outra_jan'] = true;
}
$salva_iframe = false;
if (isset($_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['iframe_menu']))
{
    $salva_iframe = $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['iframe_menu'];
    unset($_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['iframe_menu']);
}
if (isset($nm_run_menu) && $nm_run_menu == 1)
{
    if (isset($_SESSION['scriptcase']['sc_aba_iframe']) && isset($_SESSION['scriptcase']['sc_apl_menu_atual']))
    {
        foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
        {
            if ($aba == $_SESSION['scriptcase']['sc_apl_menu_atual'])
            {
                unset($_SESSION['scriptcase']['sc_aba_iframe'][$aba]);
                break;
            }
        }
    }
    $_SESSION['scriptcase']['sc_apl_menu_atual'] = "tabs_pedidos";
    $achou = false;
    if (isset($_SESSION['sc_session'][$script_case_init]))
    {
        foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
        {
            if ($nome_apl == 'tabs_pedidos' || $achou)
            {
                if ($achou)
                {
                    unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                }
                $achou = true;
            }
        }
        if (!$achou && isset($nm_apl_menu))
        {
            foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
            {
                if ($nome_apl == $nm_apl_menu || $achou)
                {
                    $achou = true;
                    if ($nome_apl != $nm_apl_menu)
                    {
                        unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                    }
                }
            }
        }
    }
    $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['iframe_menu'] = true;
}
else
{
    $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['iframe_menu'] = $salva_iframe;
}

   if (!isset($_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['initialize']))
   {
       $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['initialize'] = true;
   }
   elseif (!isset($_SERVER['HTTP_REFERER']))
   {
       $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['initialize'] = false;
   }
   elseif (false === strpos($_SERVER['HTTP_REFERER'], '.php'))
   {
       $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['initialize'] = true;
   }
   else
   {
       $sReferer = substr($_SERVER['HTTP_REFERER'], 0, strpos($_SERVER['HTTP_REFERER'], '.php'));
       $sReferer = substr($sReferer, strrpos($sReferer, '/') + 1);
       if ('tabs_pedidos' == $sReferer || 'tabs_pedidos_' == substr($sReferer, 0, 13))
       {
           $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['initialize'] = false;
       }
       else
       {
           $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['initialize'] = true;
       }
   }

$nm_apl_dependente = false;
if (isset($_POST["nmgp_num_aba"])) 
{
    $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['num_aba'] = $nmgp_num_aba;
}
if (isset($nmgp_url_saida) && !empty($nmgp_url_saida)) 
{ 
    $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['aba_saida'] = $nmgp_url_saida ; 
    $nm_apl_dependente = true;
} 
if (!function_exists("sc_check_mobile"))
{
    include_once("../_lib/lib/php/nm_check_mobile.php");
}
$_SESSION['scriptcase']['proc_mobile'] = sc_check_mobile();
if (isset($_GET['_sc_force_mobile'])) {
    $_SESSION['scriptcase']['force_mobile'] = 'Y' == $_GET['_sc_force_mobile'];
}
if (isset($_SESSION['scriptcase']['force_mobile'])) {
    $_SESSION['scriptcase']['proc_mobile'] = $_SESSION['scriptcase']['force_mobile'];
}
$STR_lang    = (isset($_SESSION['scriptcase']['str_lang']) && !empty($_SESSION['scriptcase']['str_lang'])) ? $_SESSION['scriptcase']['str_lang'] : "es";
if (isset($_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['lang'])) {
    $STR_lang = $_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['lang'];
}
     $STR_schema_all = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "Debifact/Debifact";
$NM_arq_lang = "../_lib/lang/" . $STR_lang . ".lang.php";
$Nm_lang = array();
if (is_file($NM_arq_lang))
{
    $Lixo = file($NM_arq_lang);
    foreach ($Lixo as $Cada_lin) 
    {
        if (strpos($Cada_lin, "array()") === false && (trim($Cada_lin) != "<?php")  && (trim($Cada_lin) != "?" . ">"))
        {
            eval (str_replace("\$this->", "\$", $Cada_lin));
        }
    }
}
$_SESSION['scriptcase']['charset'] = "UTF-8";
ini_set('default_charset', $_SESSION['scriptcase']['charset']);
foreach ($Nm_lang as $ind => $dados)
{
   if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
   {
       $Nm_lang[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
   }
}
if (!isset($nmgp_url_saida) || empty($nmgp_url_saida))
{
    $nmgp_url_saida = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ""; 
    $nmgp_url_saida = str_replace("_fim.php", ".php", $nmgp_url_saida);
}
$_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['aba_saida'] = $nmgp_url_saida;
if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
{ 
   $_SESSION['scriptcase']['sc_apl_seg']['tabs_pedidos'] = "on";
} 
if (!isset($_SESSION['scriptcase']['tabs_pedidos']['session_timeout']['redir']) && (!isset($_SESSION['scriptcase']['sc_apl_seg']['tabs_pedidos']) || $_SESSION['scriptcase']['sc_apl_seg']['tabs_pedidos'] != "on"))
{ 
    $NM_Mens_Erro = $Nm_lang['lang_errm_unth_user'];
    $nm_botao_ok = ($_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['iframe_menu']) ? false : true;
    if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
    {
        foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
        {
            if (in_array("tabs_pedidos", $apls_aba))
            {
                $nm_botao_ok = false;
                 break;
            }
        }
    }
       header("X-XSS-Protection: 1; mode=block");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
    <HTML>
     <HEAD>
      <TITLE>tabs_pedidos</TITLE>
      <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}
?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
      <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>      <META http-equiv="Pragma" content="no-cache"/>
      <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
      <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $STR_schema_all ?>_tab.css" /> 
      <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $STR_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
      <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $STR_schema_all ?>_grid.css" /> 
      <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $STR_schema_all ?>_grid<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
     </HEAD>
     <body class="scTabPage">
      <table align="center" class="scGridBorder" cellpadding=0 cellspacing=0><tr><td style="padding: 0">
      <table style="width: 100%" class="scGridTabela" cellpadding=0 cellspacing=0><tr class="scGridFieldOdd"><td class="scGridFieldOddFont" style="padding: 15px 30px; text-align: center">
       <?php echo $NM_Mens_Erro ?>
<?php
     if ($nm_botao_ok)
    {
?>
      <br />
      <form name="Fseg" method="post" 
                          action="tabs_pedidos_fim.php" 
                          target="_self"> 
       <input type="hidden" name="saida_aba" value="<?php echo $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['aba_saida']; ?>"> 
       <input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($script_case_init) ?>"/> 
       <input type="submit" name="sc_sai_seg" value="OK"> 
      </form> 
<?php
     }
?>
      </td></tr></table>
      </td></tr></table>
<?php
    if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']))
    {
?>
<br /><br /><br />
<table align="center" class="scGridBorder" style="width: 450px" cellpadding=0 cellspacing=0><tr><td style="padding: 0">
 <table style="width: 100%" class="scGridTabela" cellpadding=0 cellspacing=0>
  <tr class="scGridFieldOdd">
   <td class="scGridFieldOddFont" style="padding: 15px 30px">
    <?php echo $Nm_lang['lang_errm_unth_hwto']; ?>
   </td>
  </tr>
 </table>
</td></tr></table>
<?php
    }
?>
     </body>
    </HTML>
<?php
    exit;
} 
if ((isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "force_lang") || (isset($_GET['nmgp_opcao']) && $_GET['nmgp_opcao'] == "force_lang"))
{
    if (isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "force_lang")
    {
        $nmgp_opcao  = $_POST['nmgp_opcao'];
        $nmgp_idioma = $_POST['nmgp_idioma'];
    }
    else
    {
        $nmgp_opcao  = $_GET['nmgp_opcao'];
        $nmgp_idioma = $_GET['nmgp_idioma'];
    }
    $Temp_lang = explode(";" , $nmgp_idioma);
    if (isset($Temp_lang[0]) && !empty($Temp_lang[0]))
    {
        $_SESSION['scriptcase']['str_lang'] = $Temp_lang[0];
    }
    if (isset($Temp_lang[1]) && !empty($Temp_lang[1]))
    {
        $_SESSION['scriptcase']['str_conf_reg'] = $Temp_lang[1];
    }
}
$_POST = array();
$_GET  = array();
$nmgp_num_aba = (isset($_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['num_aba'])) ? $_SESSION['sc_session'][$script_case_init]['tabs_pedidos']['num_aba'] : 1;
$tabs_pedidos_contr = new tabs_pedidos();
$tabs_pedidos_contr->controle();
?>
