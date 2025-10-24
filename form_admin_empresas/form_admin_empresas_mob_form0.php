<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

header("X-XSS-Protection: 1; mode=block");
header("X-Frame-Options: SAMEORIGIN");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_empresa"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_empresa"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
            <meta name="viewport" content="minimal-ui, width=300, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="apple-touch-icon"   sizes="57x57" href="">
            <link rel="apple-touch-icon"   sizes="60x60" href="">
            <link rel="apple-touch-icon"   sizes="72x72" href="">
            <link rel="apple-touch-icon"   sizes="76x76" href="">
            <link rel="apple-touch-icon" sizes="114x114" href="">
            <link rel="apple-touch-icon" sizes="120x120" href="">
            <link rel="apple-touch-icon" sizes="144x144" href="">
            <link rel="apple-touch-icon" sizes="152x152" href="">
            <link rel="apple-touch-icon" sizes="180x180" href="">
            <link rel="icon" type="image/png" sizes="192x192" href="">
            <link rel="icon" type="image/png"   sizes="32x32" href="">
            <link rel="icon" type="image/png"   sizes="96x96" href="">
            <link rel="icon" type="image/png"   sizes="16x16" href="">
            <meta name="msapplication-TileColor" content="___">
            <meta name="msapplication-TileImage" content="">
            <meta name="theme-color" content="___">
            <meta name="apple-mobile-web-app-status-bar-style" content="___">
            <link rel="shortcut icon" href=""> <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
  var sc_css_status_pwd_box = '<?php echo $this->Ini->Css_status_pwd_box; ?>';
  var sc_css_status_pwd_text = '<?php echo $this->Ini->Css_status_pwd_text; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_third; ?>jquery/js/jquery.js"></SCRIPT>
            <?php
               if ($_SESSION['scriptcase']['display_mobile'] && $_SESSION['scriptcase']['device_mobile']) {
                   $forced_mobile = (isset($_SESSION['scriptcase']['force_mobile']) && $_SESSION['scriptcase']['force_mobile']) ? 'true' : 'false';
                   $sc_app_data   = json_encode([
                       'forceMobile' => $forced_mobile,
                       'appType' => 'form',
                       'improvements' => true,
                       'displayOptionsButton' => false,
                       'displayScrollUp' => true,
                       'scrollUpPosition' => 'R',
                       'toolbarOrientation' => 'H',
                       'mobilePanes' => 'true',
                       'navigationBarButtons' => unserialize('a:0:{}'),
                       'mobileSimpleToolbar' => false,
                       'bottomToolbarFixed' => true
                   ]); ?>
            <input type="hidden" id="sc-mobile-app-data" value='<?php echo $sc_app_data; ?>' />
            <script type="text/javascript" src="../_lib/lib/js/nm_modal_panes.jquery.js"></script>
            <script type="text/javascript" src="../_lib/lib/js/nm_form_mobile.js"></script>
            <link rel='stylesheet' href='../_lib/lib/css/nm_form_mobile.css' type='text/css'/>
            <script>
                $(document).ready(function(){

                    bootstrapMobile();

                });
            </script>
            <?php } ?> <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
<style type="text/css">
.ui-datepicker { z-index: 6 !important }
</style>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_emp_fecha_crea button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
 <style type="text/css">
   .select2-container {
     width: auto !important;
     flex-grow: 1;
   }
   .select2-selection {
     width: 100% !important;
   }
 </style>
<style type="text/css">
	.sc.switch {
		position: relative;
		display: inline-flex;
	}

	.sc.switch span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.switch span {
		background: #DFDFDF;
		width: 22px;
		height: 14px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		padding: 0 3px;
		transition: all .2s linear;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.switch span:before {
		content: '\2713';
		display: inline-block;
		color: white;
		font-size: 10px;
		z-index: 0;
		position: absolute;
		top: 0;
		left: 4px;
	}

	.sc.switch span:after {
		content: '';
		background: white;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 1px;
		left: 1px;
		border-radius: 15px;
		transition: all .2s linear;
		z-index: 1;
	}

	.sc.switch input {
		margin-right: 10px;
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.switch input:disabled + span {
		opacity: 0.35;
	}

	.sc.switch input:checked + span {
		background: #66AFE9;
	}

	.sc.switch input:checked + span:after {
		left: calc(100% - 1px);
		transform: translateX(-100%);
	}

	.sc.radio {
		position: relative;
		display: inline-flex;
	}

	.sc.radio span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.radio span {
		background: #ffffff;
		border: 1px solid #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.radio span:after {
		content: '';
		background: #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		z-index: 1;
		transform: scale(0);
	}

	.sc.radio input {
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.radio input:disabled + span {
		opacity: 0.35;
	}

	.sc.radio input:checked + span {
		background: #66AFE9;
	}

	.sc.radio input:checked + span:after {
		transform: translateX(-100%);
		transform: scale(1);
	}
</style>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_admin_empresas/form_admin_empresas_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_admin_empresas_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['last'] : 'off'); ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       if ("off" == Nav_binicio_macro_disabled) { $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       if ("off" == Nav_bretorna_macro_disabled) { $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       if ("off" == Nav_bfinal_macro_disabled) { $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       if ("off" == Nav_bavanca_macro_disabled) { $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_admin_empresas_mob_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>

<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys.inc.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys_setup.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
<script type="text/javascript">

function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var Dyn_Ini  = true;
function setLabelCellMaxWidth()
{
    var $labelList = $(".scUiLabelWidthFix"), $spanList, i, testWidth, maxLabelWidth = 0;
    for (i = 0; i < $labelList.length; i++) {
        $spanList = $($labelList[i]).find("span");

        if ($spanList.length) {
            testWidth  = $($spanList[0]).width();

            maxLabelWidth = Math.max(maxLabelWidth, testWidth);
        }
    }

    if (0 < maxLabelWidth) {
        maxLabelWidth += 20;
        $labelList.css("width", maxLabelWidth + "px");
    }
}

 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

        setLabelCellMaxWidth();

<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
     if ($('#t').length>0) {
         scQuickSearchKeyUp('t', null);
     }
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchKeyUp(sPos, e) {
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
       else
       {
           $('#SC_fast_search_submit_'+sPos).show();
       }
     }
   }
   function nm_gp_submit_qsearch(pos)
   {
        nm_move('fast_search', pos);
   }
   function nm_gp_open_qsearch_div(pos)
   {
        if (typeof nm_gp_open_qsearch_div_mobile == 'function') {
            return nm_gp_open_qsearch_div_mobile(pos);
        }
        if($('#SC_fast_search_dropdown_' + pos).hasClass('fa-caret-down'))
        {
            if(($('#quicksearchph_' + pos).offset().top+$('#id_qs_div_' + pos).height()+10) >= $(document).height())
            {
                $('#id_qs_div_' + pos).offset({top:($('#quicksearchph_' + pos).offset().top-($('#quicksearchph_' + pos).height()/2)-$('#id_qs_div_' + pos).height()-4)});
            }

            nm_gp_open_qsearch_div_store_temp(pos);
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-down').addClass('fa-caret-up');
        }
        else
        {
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-up').addClass('fa-caret-down');
        }
        $('#id_qs_div_' + pos).toggle();
   }

   var tmp_qs_arr_fields = [], tmp_qs_arr_cond = "";
   function nm_gp_open_qsearch_div_store_temp(pos)
   {
        tmp_qs_arr_fields = [], tmp_qs_str_cond = "";

        if($('#fast_search_f0_' + pos).prop('type') == 'select-multiple')
        {
            tmp_qs_arr_fields = $('#fast_search_f0_' + pos).val();
        }
        else
        {
            tmp_qs_arr_fields.push($('#fast_search_f0_' + pos).val());
        }

        tmp_qs_str_cond = $('#cond_fast_search_f0_' + pos).val();
   }

   function nm_gp_cancel_qsearch_div_store_temp(pos)
   {
        $('#fast_search_f0_' + pos).val('');
        $("#fast_search_f0_" + pos + " option").prop('selected', false);
        for(it=0; it<tmp_qs_arr_fields.length; it++)
        {
            $("#fast_search_f0_" + pos + " option[value='"+ tmp_qs_arr_fields[it] +"']").prop('selected', true);
        }
        $("#fast_search_f0_" + pos).change();
        tmp_qs_arr_fields = [];

        $('#cond_fast_search_f0_' + pos).val(tmp_qs_str_cond);
        $('#cond_fast_search_f0_' + pos).change();
        tmp_qs_str_cond = "";

        nm_gp_open_qsearch_div(pos);
   } if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 2; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_admin_empresas']['error_buffer']) && '' != $_SESSION['scriptcase']['form_admin_empresas']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_admin_empresas']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_admin_empresas_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" enctype="multipart/form-data" 
               action="form_admin_empresas_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="emp_logo_salva" value="<?php  echo $this->form_encode_input($this->emp_logo) ?>">
<input type="hidden" name="emp_firma_salva" value="<?php  echo $this->form_encode_input($this->emp_firma) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_admin_empresas_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_admin_empresas_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php if (isset($this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'])) {echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'];} ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->sc_page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="98%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
$this->displayAppHeader();
?>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "R")
{
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['fast_search'][2] : "";
          $stateSearchIconClose  = 'none';
          $stateSearchIconSearch = '';
          if(!empty($OPC_dat))
          {
              $stateSearchIconClose  = '';
              $stateSearchIconSearch = 'none';
          }
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input id='fast_search_f0_t' type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <select id='cond_fast_search_f0_t' class="scFormToolbarInput" style="vertical-align: middle;display:none;" name="nmgp_cond_fast_search_t" onChange="change_fast_t = 'CH';">
<?php 
          $OPC_sel = ("qp" == $OPC_arg) ? " selected" : "";
           echo "           <option value='qp'" . $OPC_sel . ">" . $this->Ini->Nm_lang['lang_srch_like'] . "</option>";
?> 
          </select>
          <span id="quicksearchph_t" class="scFormToolbarInput" style='display: inline-block; vertical-align: inherit'>
              <span>
                  <input type="text" id="SC_fast_search_t" class="scFormToolbarInputText" style="border-width: 0px;;" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">&nbsp;
                  <img style="display: <?php echo $stateSearchIconSearch ?>; "  id="SC_fast_search_submit_t" class='css_toolbar_obj_qs_search_img' src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
                  <img style="display: <?php echo $stateSearchIconClose ?>; " id="SC_fast_search_close_t" class='css_toolbar_obj_qs_search_img' src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
              </span>
          </span>  </div>
  <?php
      }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_5";
        echo "<img id=\"NM_sep_5\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-21';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-22';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['bcancelar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['bcancelar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['bcancelar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['bcancelar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['bcancelar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Escape)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-23';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-24';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Delete)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-25';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_6";
        echo "<img id=\"NM_sep_6\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-26';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-27';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-28';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-29';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-30';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['empty_filter'] = true;
       }
  }
?>
<style>
.scTabInactive {
    cursor: pointer;
}
</style>
<script type="text/javascript">
var pag_ativa = "form_admin_empresas_mob_form0";
</script>
<ul class="scTabLine sc-ui-page-tab-line">
<?php
    $this->tabCssClass = array(
        'form_admin_empresas_mob_form0' => array(
            'title' => "{lang_datos_generales}",
            'class' => empty($nmgp_num_form) || $nmgp_num_form == "form_admin_empresas_mob_form0" ? "scTabActive" : "scTabInactive",
        ),
        'form_admin_empresas_mob_form1' => array(
            'title' => "{lang_establecimiento}",
            'class' => $nmgp_num_form == "form_admin_empresas_mob_form1" ? "scTabActive" : "scTabInactive",
        ),
        'form_admin_empresas_mob_form2' => array(
            'title' => "{lang_punto_emision}",
            'class' => $nmgp_num_form == "form_admin_empresas_mob_form2" ? "scTabActive" : "scTabInactive",
        ),
        'form_admin_empresas_mob_form3' => array(
            'title' => "{lang_othr_msec_cusr}",
            'class' => $nmgp_num_form == "form_admin_empresas_mob_form3" ? "scTabActive" : "scTabInactive",
        ),
        'form_admin_empresas_mob_form4' => array(
            'title' => "{lang_productos}",
            'class' => $nmgp_num_form == "form_admin_empresas_mob_form4" ? "scTabActive" : "scTabInactive",
        ),
        'form_admin_empresas_mob_form5' => array(
            'title' => "{lang_pedidos_convenios}",
            'class' => $nmgp_num_form == "form_admin_empresas_mob_form5" ? "scTabActive" : "scTabInactive",
        ),
    );
    if (!empty($this->Ini->nm_hidden_pages)) {
        foreach ($this->Ini->nm_hidden_pages as $pageName => $pageStatus) {
            if ('{lang_datos_generales}' == $pageName && 'off' == $pageStatus) {
                $this->tabCssClass['form_admin_empresas_mob_form0']['class'] = 'scTabInactive';
            }
            if ('{lang_establecimiento}' == $pageName && 'off' == $pageStatus) {
                $this->tabCssClass['form_admin_empresas_mob_form1']['class'] = 'scTabInactive';
            }
            if ('{lang_punto_emision}' == $pageName && 'off' == $pageStatus) {
                $this->tabCssClass['form_admin_empresas_mob_form2']['class'] = 'scTabInactive';
            }
            if ('{lang_othr_msec_cusr}' == $pageName && 'off' == $pageStatus) {
                $this->tabCssClass['form_admin_empresas_mob_form3']['class'] = 'scTabInactive';
            }
            if ('{lang_productos}' == $pageName && 'off' == $pageStatus) {
                $this->tabCssClass['form_admin_empresas_mob_form4']['class'] = 'scTabInactive';
            }
            if ('{lang_pedidos_convenios}' == $pageName && 'off' == $pageStatus) {
                $this->tabCssClass['form_admin_empresas_mob_form5']['class'] = 'scTabInactive';
            }
        }
        $displayingPage = false;
        foreach ($this->tabCssClass as $pageInfo) {
            if ('scTabActive' == $pageInfo['class']) {
                $displayingPage = true;
                break;
            }
        }
        if (!$displayingPage) {
            foreach ($this->tabCssClass as $pageForm => $pageInfo) {
                if (!isset($this->Ini->nm_hidden_pages[ $pageInfo['title'] ]) || 'off' != $this->Ini->nm_hidden_pages[ $pageInfo['title'] ]) {
                    $this->tabCssClass[$pageForm]['class'] = 'scTabActive';
                    break;
                }
            }
        }
    }
?>
<?php
    $css_celula = $this->tabCssClass["form_admin_empresas_mob_form0"]['class'];
?>
   <li id="id_form_admin_empresas_mob_form0" class="sc-form-page sc-tab-click <?php echo $css_celula; ?>" data-tab-name="form_admin_empresas_mob_form0">
     <?php echo $this->Ini->Nm_lang['lang_datos_generales']; ?>
   </li>
<?php
    $css_celula = $this->tabCssClass["form_admin_empresas_mob_form1"]['class'];
?>
   <li id="id_form_admin_empresas_mob_form1" class="sc-form-page sc-tab-click <?php echo $css_celula; ?>" data-tab-name="form_admin_empresas_mob_form1">
     <?php echo $this->Ini->Nm_lang['lang_establecimiento']; ?>
   </li>
<?php
    $css_celula = $this->tabCssClass["form_admin_empresas_mob_form2"]['class'];
?>
   <li id="id_form_admin_empresas_mob_form2" class="sc-form-page sc-tab-click <?php echo $css_celula; ?>" data-tab-name="form_admin_empresas_mob_form2">
     <?php echo $this->Ini->Nm_lang['lang_punto_emision']; ?>
   </li>
<?php
    $css_celula = $this->tabCssClass["form_admin_empresas_mob_form3"]['class'];
?>
   <li id="id_form_admin_empresas_mob_form3" class="sc-form-page sc-tab-click <?php echo $css_celula; ?>" data-tab-name="form_admin_empresas_mob_form3">
     <?php echo $this->Ini->Nm_lang['lang_othr_msec_cusr']; ?>
   </li>
<?php
    $css_celula = $this->tabCssClass["form_admin_empresas_mob_form4"]['class'];
?>
   <li id="id_form_admin_empresas_mob_form4" class="sc-form-page sc-tab-click <?php echo $css_celula; ?>" data-tab-name="form_admin_empresas_mob_form4">
     <?php echo $this->Ini->Nm_lang['lang_productos']; ?>
   </li>
<?php
    $css_celula = $this->tabCssClass["form_admin_empresas_mob_form5"]['class'];
?>
   <li id="id_form_admin_empresas_mob_form5" class="sc-form-page sc-tab-click <?php echo $css_celula; ?>" data-tab-name="form_admin_empresas_mob_form5">
     <?php echo $this->Ini->Nm_lang['lang_pedidos_convenios']; ?>
   </li>
</ul>
<div style='clear:both'></div>
</td></tr> 
<tr><td style="padding: 0px">
<div id="form_admin_empresas_mob_form0" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><input type="hidden" name="emp_logo_ul_name" id="id_sc_field_emp_logo_ul_name" value="<?php echo $this->form_encode_input($this->emp_logo_ul_name);?>">
<input type="hidden" name="emp_logo_ul_type" id="id_sc_field_emp_logo_ul_type" value="<?php echo $this->form_encode_input($this->emp_logo_ul_type);?>">
<input type="hidden" name="emp_firma_ul_name" id="id_sc_field_emp_firma_ul_name" value="<?php echo $this->form_encode_input($this->emp_firma_ul_name);?>">
<input type="hidden" name="emp_firma_ul_type" id="id_sc_field_emp_firma_ul_type" value="<?php echo $this->form_encode_input($this->emp_firma_ul_type);?>">
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['emp_ruc']))
           {
               $this->nmgp_cmp_readonly['emp_ruc'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['emp_logo']))
    {
        $this->nm_new_label['emp_logo'] = "" . $this->Ini->Nm_lang['lang_logotipo'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_logo = $this->emp_logo;
   $sStyleHidden_emp_logo = '';
   if (isset($this->nmgp_cmp_hidden['emp_logo']) && $this->nmgp_cmp_hidden['emp_logo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_logo']);
       $sStyleHidden_emp_logo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_logo = 'display: none;';
   $sStyleReadInp_emp_logo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_logo']) && $this->nmgp_cmp_readonly['emp_logo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_logo']);
       $sStyleReadLab_emp_logo = '';
       $sStyleReadInp_emp_logo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_logo']) && $this->nmgp_cmp_hidden['emp_logo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_logo" value="<?php echo $this->form_encode_input($emp_logo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_logo_line" id="hidden_field_data_emp_logo" style="<?php echo $sStyleHidden_emp_logo; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_logo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_logo_label" style=""><span id="id_label_emp_logo"><?php echo $this->nm_new_label['emp_logo']; ?></span></span><br>
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_emp_logo" => $out1_emp_logo); ?><script>var var_ajax_img_emp_logo = '<?php echo $out1_emp_logo; ?>';</script><?php if (!empty($out_emp_logo)){ echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_emp_logo, '" . $this->nmgp_return_img['emp_logo'][0] . "', '" . $this->nmgp_return_img['emp_logo'][1] . "')\"><img id=\"id_ajax_img_emp_logo\" border=\"0\" src=\"$out_emp_logo\"></a> &nbsp;" . "<span id=\"txt_ajax_img_emp_logo\" style=\"display: none\">" . $this->form_format_readonly("emp_logo", $emp_logo) . "</span>"; if (!empty($emp_logo)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_emp_logo\" border=\"0\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_emp_logo\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_logo"]) &&  $this->nmgp_cmp_readonly["emp_logo"] == "on") { 

 ?>
<img id=\"emp_logo_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="emp_logo" value="<?php echo $this->form_encode_input($emp_logo) . "\">" . $emp_logo . ""; ?>
<?php } else { ?>
<span id="id_read_off_emp_logo" class="css_read_off_emp_logo<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_logo; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-emp_logo" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_emp_logo_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="emp_logo[]" id="id_sc_field_emp_logo" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<?php
   $sCheckInsert = "";
?>
<span id="chk_ajax_img_emp_logo"<?php if ($this->nmgp_opcao == "novo" || empty($emp_logo)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="emp_logo_limpa" value="<?php echo $emp_logo_limpa . '" '; if ($emp_logo_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};<?php echo $sCheckInsert ?>"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="emp_logo_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_emp_logo" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_emp_logo" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_logo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_logo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_emp_logo_dumb = ('' == $sStyleHidden_emp_logo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_emp_logo_dumb" style="<?php echo $sStyleHidden_emp_logo_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_ruc']))
    {
        $this->nm_new_label['emp_ruc'] = "" . $this->Ini->Nm_lang['lang_ruc'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_ruc = $this->emp_ruc;
   $sStyleHidden_emp_ruc = '';
   if (isset($this->nmgp_cmp_hidden['emp_ruc']) && $this->nmgp_cmp_hidden['emp_ruc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_ruc']);
       $sStyleHidden_emp_ruc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_ruc = 'display: none;';
   $sStyleReadInp_emp_ruc = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["emp_ruc"]) &&  $this->nmgp_cmp_readonly["emp_ruc"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_ruc']);
       $sStyleReadLab_emp_ruc = '';
       $sStyleReadInp_emp_ruc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_ruc']) && $this->nmgp_cmp_hidden['emp_ruc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_ruc" value="<?php echo $this->form_encode_input($emp_ruc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_ruc_line" id="hidden_field_data_emp_ruc" style="<?php echo $sStyleHidden_emp_ruc; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_ruc_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_ruc_label" style=""><span id="id_label_emp_ruc"><?php echo $this->nm_new_label['emp_ruc']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['php_cmp_required']['emp_ruc']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['php_cmp_required']['emp_ruc'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["emp_ruc"]) &&  $this->nmgp_cmp_readonly["emp_ruc"] == "on")) { 

 ?>
<input type="hidden" name="emp_ruc" value="<?php echo $this->form_encode_input($emp_ruc) . "\"><span id=\"id_ajax_label_emp_ruc\">" . $emp_ruc . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_emp_ruc" class="sc-ui-readonly-emp_ruc css_emp_ruc_line" style="<?php echo $sStyleReadLab_emp_ruc; ?>"><?php echo $this->form_format_readonly("emp_ruc", $this->form_encode_input($this->emp_ruc)); ?></span><span id="id_read_off_emp_ruc" class="css_read_off_emp_ruc<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_ruc; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_ruc_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_ruc" type=text name="emp_ruc" value="<?php echo $this->form_encode_input($emp_ruc) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_ruc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_ruc_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_razon_social']))
    {
        $this->nm_new_label['emp_razon_social'] = "" . $this->Ini->Nm_lang['lang_razon_social'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_razon_social = $this->emp_razon_social;
   $sStyleHidden_emp_razon_social = '';
   if (isset($this->nmgp_cmp_hidden['emp_razon_social']) && $this->nmgp_cmp_hidden['emp_razon_social'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_razon_social']);
       $sStyleHidden_emp_razon_social = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_razon_social = 'display: none;';
   $sStyleReadInp_emp_razon_social = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_razon_social']) && $this->nmgp_cmp_readonly['emp_razon_social'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_razon_social']);
       $sStyleReadLab_emp_razon_social = '';
       $sStyleReadInp_emp_razon_social = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_razon_social']) && $this->nmgp_cmp_hidden['emp_razon_social'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_razon_social" value="<?php echo $this->form_encode_input($emp_razon_social) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_razon_social_line" id="hidden_field_data_emp_razon_social" style="<?php echo $sStyleHidden_emp_razon_social; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_razon_social_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_razon_social_label" style=""><span id="id_label_emp_razon_social"><?php echo $this->nm_new_label['emp_razon_social']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_razon_social"]) &&  $this->nmgp_cmp_readonly["emp_razon_social"] == "on") { 

 ?>
<input type="hidden" name="emp_razon_social" value="<?php echo $this->form_encode_input($emp_razon_social) . "\">" . $emp_razon_social . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_razon_social" class="sc-ui-readonly-emp_razon_social css_emp_razon_social_line" style="<?php echo $sStyleReadLab_emp_razon_social; ?>"><?php echo $this->form_format_readonly("emp_razon_social", $this->form_encode_input($this->emp_razon_social)); ?></span><span id="id_read_off_emp_razon_social" class="css_read_off_emp_razon_social<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_razon_social; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_razon_social_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_razon_social" type=text name="emp_razon_social" value="<?php echo $this->form_encode_input($emp_razon_social) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_razon_social_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_razon_social_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_nombre_comercial']))
    {
        $this->nm_new_label['emp_nombre_comercial'] = "" . $this->Ini->Nm_lang['lang_nombre_comercial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_nombre_comercial = $this->emp_nombre_comercial;
   $sStyleHidden_emp_nombre_comercial = '';
   if (isset($this->nmgp_cmp_hidden['emp_nombre_comercial']) && $this->nmgp_cmp_hidden['emp_nombre_comercial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_nombre_comercial']);
       $sStyleHidden_emp_nombre_comercial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_nombre_comercial = 'display: none;';
   $sStyleReadInp_emp_nombre_comercial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_nombre_comercial']) && $this->nmgp_cmp_readonly['emp_nombre_comercial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_nombre_comercial']);
       $sStyleReadLab_emp_nombre_comercial = '';
       $sStyleReadInp_emp_nombre_comercial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_nombre_comercial']) && $this->nmgp_cmp_hidden['emp_nombre_comercial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_nombre_comercial" value="<?php echo $this->form_encode_input($emp_nombre_comercial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_nombre_comercial_line" id="hidden_field_data_emp_nombre_comercial" style="<?php echo $sStyleHidden_emp_nombre_comercial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_nombre_comercial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_nombre_comercial_label" style=""><span id="id_label_emp_nombre_comercial"><?php echo $this->nm_new_label['emp_nombre_comercial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_nombre_comercial"]) &&  $this->nmgp_cmp_readonly["emp_nombre_comercial"] == "on") { 

 ?>
<input type="hidden" name="emp_nombre_comercial" value="<?php echo $this->form_encode_input($emp_nombre_comercial) . "\">" . $emp_nombre_comercial . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_nombre_comercial" class="sc-ui-readonly-emp_nombre_comercial css_emp_nombre_comercial_line" style="<?php echo $sStyleReadLab_emp_nombre_comercial; ?>"><?php echo $this->form_format_readonly("emp_nombre_comercial", $this->form_encode_input($this->emp_nombre_comercial)); ?></span><span id="id_read_off_emp_nombre_comercial" class="css_read_off_emp_nombre_comercial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_nombre_comercial; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_nombre_comercial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_nombre_comercial" type=text name="emp_nombre_comercial" value="<?php echo $this->form_encode_input($emp_nombre_comercial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_nombre_comercial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_nombre_comercial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_representante_legal']))
    {
        $this->nm_new_label['emp_representante_legal'] = "" . $this->Ini->Nm_lang['lang_nombre_representante'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_representante_legal = $this->emp_representante_legal;
   $sStyleHidden_emp_representante_legal = '';
   if (isset($this->nmgp_cmp_hidden['emp_representante_legal']) && $this->nmgp_cmp_hidden['emp_representante_legal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_representante_legal']);
       $sStyleHidden_emp_representante_legal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_representante_legal = 'display: none;';
   $sStyleReadInp_emp_representante_legal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_representante_legal']) && $this->nmgp_cmp_readonly['emp_representante_legal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_representante_legal']);
       $sStyleReadLab_emp_representante_legal = '';
       $sStyleReadInp_emp_representante_legal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_representante_legal']) && $this->nmgp_cmp_hidden['emp_representante_legal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_representante_legal" value="<?php echo $this->form_encode_input($emp_representante_legal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_representante_legal_line" id="hidden_field_data_emp_representante_legal" style="<?php echo $sStyleHidden_emp_representante_legal; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_representante_legal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_representante_legal_label" style=""><span id="id_label_emp_representante_legal"><?php echo $this->nm_new_label['emp_representante_legal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_representante_legal"]) &&  $this->nmgp_cmp_readonly["emp_representante_legal"] == "on") { 

 ?>
<input type="hidden" name="emp_representante_legal" value="<?php echo $this->form_encode_input($emp_representante_legal) . "\">" . $emp_representante_legal . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_representante_legal" class="sc-ui-readonly-emp_representante_legal css_emp_representante_legal_line" style="<?php echo $sStyleReadLab_emp_representante_legal; ?>"><?php echo $this->form_format_readonly("emp_representante_legal", $this->form_encode_input($this->emp_representante_legal)); ?></span><span id="id_read_off_emp_representante_legal" class="css_read_off_emp_representante_legal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_representante_legal; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_representante_legal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_representante_legal" type=text name="emp_representante_legal" value="<?php echo $this->form_encode_input($emp_representante_legal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=400 alt="{datatype: 'text', maxLength: 400, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_representante_legal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_representante_legal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_direccion_matriz']))
    {
        $this->nm_new_label['emp_direccion_matriz'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_direccion_matriz = $this->emp_direccion_matriz;
   $sStyleHidden_emp_direccion_matriz = '';
   if (isset($this->nmgp_cmp_hidden['emp_direccion_matriz']) && $this->nmgp_cmp_hidden['emp_direccion_matriz'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_direccion_matriz']);
       $sStyleHidden_emp_direccion_matriz = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_direccion_matriz = 'display: none;';
   $sStyleReadInp_emp_direccion_matriz = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_direccion_matriz']) && $this->nmgp_cmp_readonly['emp_direccion_matriz'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_direccion_matriz']);
       $sStyleReadLab_emp_direccion_matriz = '';
       $sStyleReadInp_emp_direccion_matriz = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_direccion_matriz']) && $this->nmgp_cmp_hidden['emp_direccion_matriz'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_direccion_matriz" value="<?php echo $this->form_encode_input($emp_direccion_matriz) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_direccion_matriz_line" id="hidden_field_data_emp_direccion_matriz" style="<?php echo $sStyleHidden_emp_direccion_matriz; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_direccion_matriz_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_direccion_matriz_label" style=""><span id="id_label_emp_direccion_matriz"><?php echo $this->nm_new_label['emp_direccion_matriz']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_direccion_matriz"]) &&  $this->nmgp_cmp_readonly["emp_direccion_matriz"] == "on") { 

 ?>
<input type="hidden" name="emp_direccion_matriz" value="<?php echo $this->form_encode_input($emp_direccion_matriz) . "\">" . $emp_direccion_matriz . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_direccion_matriz" class="sc-ui-readonly-emp_direccion_matriz css_emp_direccion_matriz_line" style="<?php echo $sStyleReadLab_emp_direccion_matriz; ?>"><?php echo $this->form_format_readonly("emp_direccion_matriz", $this->form_encode_input($this->emp_direccion_matriz)); ?></span><span id="id_read_off_emp_direccion_matriz" class="css_read_off_emp_direccion_matriz<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_direccion_matriz; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_direccion_matriz_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_direccion_matriz" type=text name="emp_direccion_matriz" value="<?php echo $this->form_encode_input($emp_direccion_matriz) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_direccion_matriz_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_direccion_matriz_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_telefono']))
    {
        $this->nm_new_label['emp_telefono'] = "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_telefono = $this->emp_telefono;
   $sStyleHidden_emp_telefono = '';
   if (isset($this->nmgp_cmp_hidden['emp_telefono']) && $this->nmgp_cmp_hidden['emp_telefono'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_telefono']);
       $sStyleHidden_emp_telefono = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_telefono = 'display: none;';
   $sStyleReadInp_emp_telefono = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_telefono']) && $this->nmgp_cmp_readonly['emp_telefono'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_telefono']);
       $sStyleReadLab_emp_telefono = '';
       $sStyleReadInp_emp_telefono = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_telefono']) && $this->nmgp_cmp_hidden['emp_telefono'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_telefono" value="<?php echo $this->form_encode_input($emp_telefono) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_telefono_line" id="hidden_field_data_emp_telefono" style="<?php echo $sStyleHidden_emp_telefono; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_telefono_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_telefono_label" style=""><span id="id_label_emp_telefono"><?php echo $this->nm_new_label['emp_telefono']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_telefono"]) &&  $this->nmgp_cmp_readonly["emp_telefono"] == "on") { 

 ?>
<input type="hidden" name="emp_telefono" value="<?php echo $this->form_encode_input($emp_telefono) . "\">" . $emp_telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_telefono" class="sc-ui-readonly-emp_telefono css_emp_telefono_line" style="<?php echo $sStyleReadLab_emp_telefono; ?>"><?php echo $this->form_format_readonly("emp_telefono", $this->form_encode_input($this->emp_telefono)); ?></span><span id="id_read_off_emp_telefono" class="css_read_off_emp_telefono<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_telefono_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_telefono" type=text name="emp_telefono" value="<?php echo $this->form_encode_input($emp_telefono) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_telefono_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_telefono_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_email']))
    {
        $this->nm_new_label['emp_email'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_email = $this->emp_email;
   $sStyleHidden_emp_email = '';
   if (isset($this->nmgp_cmp_hidden['emp_email']) && $this->nmgp_cmp_hidden['emp_email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_email']);
       $sStyleHidden_emp_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_email = 'display: none;';
   $sStyleReadInp_emp_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_email']) && $this->nmgp_cmp_readonly['emp_email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_email']);
       $sStyleReadLab_emp_email = '';
       $sStyleReadInp_emp_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_email']) && $this->nmgp_cmp_hidden['emp_email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_email" value="<?php echo $this->form_encode_input($emp_email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_email_line" id="hidden_field_data_emp_email" style="<?php echo $sStyleHidden_emp_email; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_email_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_email_label" style=""><span id="id_label_emp_email"><?php echo $this->nm_new_label['emp_email']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_email"]) &&  $this->nmgp_cmp_readonly["emp_email"] == "on") { 

 ?>
<input type="hidden" name="emp_email" value="<?php echo $this->form_encode_input($emp_email) . "\">" . $emp_email . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_email" class="sc-ui-readonly-emp_email css_emp_email_line" style="<?php echo $sStyleReadLab_emp_email; ?>"><?php echo $this->form_format_readonly("emp_email", $this->form_encode_input($this->emp_email)); ?></span><span id="id_read_off_emp_email" class="css_read_off_emp_email<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_email_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_email" type=text name="emp_email" value="<?php echo $this->form_encode_input($emp_email) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_email_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_firma']))
    {
        $this->nm_new_label['emp_firma'] = "" . $this->Ini->Nm_lang['lang_firma'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_firma = $this->emp_firma;
   $sStyleHidden_emp_firma = '';
   if (isset($this->nmgp_cmp_hidden['emp_firma']) && $this->nmgp_cmp_hidden['emp_firma'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_firma']);
       $sStyleHidden_emp_firma = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_firma = 'display: none;';
   $sStyleReadInp_emp_firma = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_firma']) && $this->nmgp_cmp_readonly['emp_firma'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_firma']);
       $sStyleReadLab_emp_firma = '';
       $sStyleReadInp_emp_firma = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_firma']) && $this->nmgp_cmp_hidden['emp_firma'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_firma" value="<?php echo $this->form_encode_input($emp_firma) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_firma_line" id="hidden_field_data_emp_firma" style="<?php echo $sStyleHidden_emp_firma; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_firma_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_firma_label" style=""><span id="id_label_emp_firma"><?php echo $this->nm_new_label['emp_firma']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_firma"]) &&  $this->nmgp_cmp_readonly["emp_firma"] == "on") { 

 ?>
<input type="hidden" name="emp_firma" value="<?php echo $this->form_encode_input($emp_firma) . "\"><img id=\"emp_firma_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><span id=\"id_ajax_doc_emp_firma\"><a href=\"javascript:nm_mostra_doc('1', '" . str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_emp_firma, 3)) . "', 'form_admin_empresas')\">" . $emp_firma . "</a></span>"; ?>
<?php } else { ?>
<span id="id_read_on_emp_firma" class="scFormLinkOdd sc-ui-readonly-emp_firma css_emp_firma_line" style="<?php echo $sStyleReadLab_emp_firma; ?>"><?php echo $this->form_format_readonly("emp_firma", $this->emp_firma) ?></span><span id="id_read_off_emp_firma" class="css_read_off_emp_firma" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_firma; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-emp_firma" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_emp_firma_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="emp_firma[]" id="id_sc_field_emp_firma" ></span></span>
<?php
   $sCheckInsert = "";
?>
<span id="chk_ajax_img_emp_firma"<?php if ($this->nmgp_opcao == "novo" || empty($emp_firma)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="emp_firma_limpa" value="<?php echo $emp_firma_limpa . '" '; if ($emp_firma_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};<?php echo $sCheckInsert ?>"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="emp_firma_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><span id="id_ajax_doc_emp_firma"><a href="javascript:nm_mostra_doc('1', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_emp_firma, 3)); ?>', 'form_admin_empresas')"><?php echo $emp_firma ?></a></span><div id="id_img_loader_emp_firma" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_emp_firma" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_firma_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_firma_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_clave_firma']))
    {
        $this->nm_new_label['emp_clave_firma'] = "" . $this->Ini->Nm_lang['lang_clave_firma'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_clave_firma = $this->emp_clave_firma;
   $sStyleHidden_emp_clave_firma = '';
   if (isset($this->nmgp_cmp_hidden['emp_clave_firma']) && $this->nmgp_cmp_hidden['emp_clave_firma'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_clave_firma']);
       $sStyleHidden_emp_clave_firma = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_clave_firma = 'display: none;';
   $sStyleReadInp_emp_clave_firma = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_clave_firma']) && $this->nmgp_cmp_readonly['emp_clave_firma'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_clave_firma']);
       $sStyleReadLab_emp_clave_firma = '';
       $sStyleReadInp_emp_clave_firma = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_clave_firma']) && $this->nmgp_cmp_hidden['emp_clave_firma'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_clave_firma" value="<?php echo $this->form_encode_input($emp_clave_firma) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_clave_firma_line" id="hidden_field_data_emp_clave_firma" style="<?php echo $sStyleHidden_emp_clave_firma; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_clave_firma_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_clave_firma_label" style=""><span id="id_label_emp_clave_firma"><?php echo $this->nm_new_label['emp_clave_firma']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_clave_firma"]) &&  $this->nmgp_cmp_readonly["emp_clave_firma"] == "on") { 

 ?>
<input type="hidden" name="emp_clave_firma" value="<?php echo $this->form_encode_input($emp_clave_firma) . "\">" . $emp_clave_firma . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_clave_firma" class="sc-ui-readonly-emp_clave_firma css_emp_clave_firma_line" style="<?php echo $sStyleReadLab_emp_clave_firma; ?>"><?php echo $this->form_format_readonly("emp_clave_firma", $this->form_encode_input($this->emp_clave_firma)); ?></span><span id="id_read_off_emp_clave_firma" class="css_read_off_emp_clave_firma<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_clave_firma; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_clave_firma_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_clave_firma" type=text name="emp_clave_firma" value="<?php echo $this->form_encode_input($emp_clave_firma) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_clave_firma_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_clave_firma_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_codigo_empresa_debi']))
    {
        $this->nm_new_label['emp_codigo_empresa_debi'] = "Emp Codigo Empresa Debi";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_codigo_empresa_debi = $this->emp_codigo_empresa_debi;
   $sStyleHidden_emp_codigo_empresa_debi = '';
   if (isset($this->nmgp_cmp_hidden['emp_codigo_empresa_debi']) && $this->nmgp_cmp_hidden['emp_codigo_empresa_debi'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_codigo_empresa_debi']);
       $sStyleHidden_emp_codigo_empresa_debi = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_codigo_empresa_debi = 'display: none;';
   $sStyleReadInp_emp_codigo_empresa_debi = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_codigo_empresa_debi']) && $this->nmgp_cmp_readonly['emp_codigo_empresa_debi'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_codigo_empresa_debi']);
       $sStyleReadLab_emp_codigo_empresa_debi = '';
       $sStyleReadInp_emp_codigo_empresa_debi = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_codigo_empresa_debi']) && $this->nmgp_cmp_hidden['emp_codigo_empresa_debi'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_codigo_empresa_debi" value="<?php echo $this->form_encode_input($emp_codigo_empresa_debi) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_codigo_empresa_debi_line" id="hidden_field_data_emp_codigo_empresa_debi" style="<?php echo $sStyleHidden_emp_codigo_empresa_debi; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_codigo_empresa_debi_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_codigo_empresa_debi_label" style=""><span id="id_label_emp_codigo_empresa_debi"><?php echo $this->nm_new_label['emp_codigo_empresa_debi']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_codigo_empresa_debi"]) &&  $this->nmgp_cmp_readonly["emp_codigo_empresa_debi"] == "on") { 

 ?>
<input type="hidden" name="emp_codigo_empresa_debi" value="<?php echo $this->form_encode_input($emp_codigo_empresa_debi) . "\">" . $emp_codigo_empresa_debi . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_codigo_empresa_debi" class="sc-ui-readonly-emp_codigo_empresa_debi css_emp_codigo_empresa_debi_line" style="<?php echo $sStyleReadLab_emp_codigo_empresa_debi; ?>"><?php echo $this->form_format_readonly("emp_codigo_empresa_debi", $this->form_encode_input($this->emp_codigo_empresa_debi)); ?></span><span id="id_read_off_emp_codigo_empresa_debi" class="css_read_off_emp_codigo_empresa_debi<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_codigo_empresa_debi; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_codigo_empresa_debi_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_codigo_empresa_debi" type=text name="emp_codigo_empresa_debi" value="<?php echo $this->form_encode_input($emp_codigo_empresa_debi) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['emp_codigo_empresa_debi']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['emp_codigo_empresa_debi']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['emp_codigo_empresa_debi']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_codigo_empresa_debi_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_codigo_empresa_debi_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_emp_codigo_empresa_debi_dumb = ('' == $sStyleHidden_emp_codigo_empresa_debi) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_emp_codigo_empresa_debi_dumb" style="<?php echo $sStyleHidden_emp_codigo_empresa_debi_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['emp_obligado']))
   {
       $this->nm_new_label['emp_obligado'] = "" . $this->Ini->Nm_lang['lang_obligado_contabilidad'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_obligado = $this->emp_obligado;
   $sStyleHidden_emp_obligado = '';
   if (isset($this->nmgp_cmp_hidden['emp_obligado']) && $this->nmgp_cmp_hidden['emp_obligado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_obligado']);
       $sStyleHidden_emp_obligado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_obligado = 'display: none;';
   $sStyleReadInp_emp_obligado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_obligado']) && $this->nmgp_cmp_readonly['emp_obligado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_obligado']);
       $sStyleReadLab_emp_obligado = '';
       $sStyleReadInp_emp_obligado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_obligado']) && $this->nmgp_cmp_hidden['emp_obligado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="emp_obligado" value="<?php echo $this->form_encode_input($this->emp_obligado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->emp_obligado_1 = explode(";", trim($this->emp_obligado));
  } 
  else
  {
      if (empty($this->emp_obligado))
      {
          $this->emp_obligado_1= array(); 
          $this->emp_obligado= "N";
      } 
      else
      {
          $this->emp_obligado_1= $this->emp_obligado; 
          $this->emp_obligado= ""; 
          foreach ($this->emp_obligado_1 as $cada_emp_obligado)
          {
             if (!empty($emp_obligado))
             {
                 $this->emp_obligado.= ";"; 
             } 
             $this->emp_obligado.= $cada_emp_obligado; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_emp_obligado_line" id="hidden_field_data_emp_obligado" style="<?php echo $sStyleHidden_emp_obligado; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_obligado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_obligado_label" style=""><span id="id_label_emp_obligado"><?php echo $this->nm_new_label['emp_obligado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_obligado"]) &&  $this->nmgp_cmp_readonly["emp_obligado"] == "on") { 

$emp_obligado_look = "";
 if ($this->emp_obligado == "S") { $emp_obligado_look .= "" ;} 
 if (empty($emp_obligado_look)) { $emp_obligado_look = $this->emp_obligado; }
?>
<input type="hidden" name="emp_obligado" value="<?php echo $this->form_encode_input($emp_obligado) . "\">" . $emp_obligado_look . ""; ?>
<?php } else { ?>

<?php

$emp_obligado_look = "";
 if ($this->emp_obligado == "S") { $emp_obligado_look .= "" ;} 
 if (empty($emp_obligado_look)) { $emp_obligado_look = $this->emp_obligado; }
?>
<span id="id_read_on_emp_obligado" class="css_emp_obligado_line" style="<?php echo $sStyleReadLab_emp_obligado; ?>"><?php echo $this->form_format_readonly("emp_obligado", $this->form_encode_input($emp_obligado_look)); ?></span><span id="id_read_off_emp_obligado" class="css_read_off_emp_obligado css_emp_obligado_line" style="<?php echo $sStyleReadInp_emp_obligado; ?>"><?php echo "<div id=\"idAjaxCheckbox_emp_obligado\" style=\"display: inline-block\" class=\"css_emp_obligado_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_emp_obligado_line"><?php $tempOptionId = "id-opt-emp_obligado" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-emp_obligado sc-ui-checkbox-emp_obligado" name="emp_obligado[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_obligado'][] = 'S'; ?>
<?php  if (in_array("S", $this->emp_obligado_1))  { echo " checked" ;} ?> onClick="do_ajax_form_admin_empresas_mob_event_emp_obligado_onclick();" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_obligado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_obligado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['emp_estado']))
   {
       $this->nm_new_label['emp_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_estado = $this->emp_estado;
   $sStyleHidden_emp_estado = '';
   if (isset($this->nmgp_cmp_hidden['emp_estado']) && $this->nmgp_cmp_hidden['emp_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_estado']);
       $sStyleHidden_emp_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_estado = 'display: none;';
   $sStyleReadInp_emp_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_estado']) && $this->nmgp_cmp_readonly['emp_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_estado']);
       $sStyleReadLab_emp_estado = '';
       $sStyleReadInp_emp_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_estado']) && $this->nmgp_cmp_hidden['emp_estado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="emp_estado" value="<?php echo $this->form_encode_input($this->emp_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_estado_line" id="hidden_field_data_emp_estado" style="<?php echo $sStyleHidden_emp_estado; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_estado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_estado_label" style=""><span id="id_label_emp_estado"><?php echo $this->nm_new_label['emp_estado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_estado"]) &&  $this->nmgp_cmp_readonly["emp_estado"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_estado'] = array(); 
    }

   $old_value_emp_codigo_empresa_debi = $this->emp_codigo_empresa_debi;
   $this->nm_tira_formatacao();


   $unformatted_value_emp_codigo_empresa_debi = $this->emp_codigo_empresa_debi;

   $emp_obligado_val_str = "''";
   if (!empty($this->emp_obligado))
   {
       if (is_array($this->emp_obligado))
       {
           $Tmp_array = $this->emp_obligado;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_obligado);
       }
       $emp_obligado_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_obligado_val_str)
          {
             $emp_obligado_val_str .= ", ";
          }
          $emp_obligado_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_autorizacion_inmediata_val_str = "''";
   if (!empty($this->emp_autorizacion_inmediata))
   {
       if (is_array($this->emp_autorizacion_inmediata))
       {
           $Tmp_array = $this->emp_autorizacion_inmediata;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_autorizacion_inmediata);
       }
       $emp_autorizacion_inmediata_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_autorizacion_inmediata_val_str)
          {
             $emp_autorizacion_inmediata_val_str .= ", ";
          }
          $emp_autorizacion_inmediata_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_es_op_transporte_val_str = "''";
   if (!empty($this->emp_es_op_transporte))
   {
       if (is_array($this->emp_es_op_transporte))
       {
           $Tmp_array = $this->emp_es_op_transporte;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_es_op_transporte);
       }
       $emp_es_op_transporte_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_es_op_transporte_val_str)
          {
             $emp_es_op_transporte_val_str .= ", ";
          }
          $emp_es_op_transporte_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_regimen_especial_val_str = "''";
   if (!empty($this->emp_regimen_especial))
   {
       if (is_array($this->emp_regimen_especial))
       {
           $Tmp_array = $this->emp_regimen_especial;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_regimen_especial);
       }
       $emp_regimen_especial_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_regimen_especial_val_str)
          {
             $emp_regimen_especial_val_str .= ", ";
          }
          $emp_regimen_especial_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_agente_retencion_val_str = "''";
   if (!empty($this->emp_agente_retencion))
   {
       if (is_array($this->emp_agente_retencion))
       {
           $Tmp_array = $this->emp_agente_retencion;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_agente_retencion);
       }
       $emp_agente_retencion_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_agente_retencion_val_str)
          {
             $emp_agente_retencion_val_str .= ", ";
          }
          $emp_agente_retencion_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $escontribuyenteespecial_val_str = "''";
   if (!empty($this->escontribuyenteespecial))
   {
       if (is_array($this->escontribuyenteespecial))
       {
           $Tmp_array = $this->escontribuyenteespecial;
       }
       else
       {
           $Tmp_array = explode(";", $this->escontribuyenteespecial);
       }
       $escontribuyenteespecial_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $escontribuyenteespecial_val_str)
          {
             $escontribuyenteespecial_val_str .= ", ";
          }
          $escontribuyenteespecial_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $esartesanocalificado_val_str = "''";
   if (!empty($this->esartesanocalificado))
   {
       if (is_array($this->esartesanocalificado))
       {
           $Tmp_array = $this->esartesanocalificado;
       }
       else
       {
           $Tmp_array = explode(";", $this->esartesanocalificado);
       }
       $esartesanocalificado_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $esartesanocalificado_val_str)
          {
             $esartesanocalificado_val_str .= ", ";
          }
          $esartesanocalificado_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $es_profesionalsalud_val_str = "''";
   if (!empty($this->es_profesionalsalud))
   {
       if (is_array($this->es_profesionalsalud))
       {
           $Tmp_array = $this->es_profesionalsalud;
       }
       else
       {
           $Tmp_array = explode(";", $this->es_profesionalsalud);
       }
       $es_profesionalsalud_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $es_profesionalsalud_val_str)
          {
             $es_profesionalsalud_val_str .= ", ";
          }
          $es_profesionalsalud_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_socio_transportista_val_str = "''";
   if (!empty($this->emp_socio_transportista))
   {
       if (is_array($this->emp_socio_transportista))
       {
           $Tmp_array = $this->emp_socio_transportista;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_socio_transportista);
       }
       $emp_socio_transportista_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_socio_transportista_val_str)
          {
             $emp_socio_transportista_val_str .= ", ";
          }
          $emp_socio_transportista_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_estado  ORDER BY dec_nombre";

   $this->emp_codigo_empresa_debi = $old_value_emp_codigo_empresa_debi;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_estado'][] = $rs->fields[0];
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
   $x = 0; 
   $emp_estado_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->emp_estado_1))
          {
              foreach ($this->emp_estado_1 as $tmp_emp_estado)
              {
                  if (trim($tmp_emp_estado) === trim($cadaselect[1])) {$emp_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->emp_estado) && trim($this->emp_estado) === trim($cadaselect[1])) {$emp_estado_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="emp_estado" value="<?php echo $this->form_encode_input($emp_estado) . "\">" . $emp_estado_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_emp_estado();
   $x = 0 ; 
   $emp_estado_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->emp_estado_1))
          {
              foreach ($this->emp_estado_1 as $tmp_emp_estado)
              {
                  if (trim($tmp_emp_estado) === trim($cadaselect[1])) {$emp_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->emp_estado) && trim($this->emp_estado) === trim($cadaselect[1])) { $emp_estado_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($emp_estado_look))
          {
              $emp_estado_look = $this->emp_estado;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_emp_estado\" class=\"css_emp_estado_line\" style=\"" .  $sStyleReadLab_emp_estado . "\">" . $this->form_format_readonly("emp_estado", $this->form_encode_input($emp_estado_look)) . "</span><span id=\"id_read_off_emp_estado\" class=\"css_read_off_emp_estado" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_emp_estado . "\">";
   echo " <span id=\"idAjaxSelect_emp_estado\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_emp_estado_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_emp_estado\" name=\"emp_estado\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->emp_estado) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->emp_estado)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['escontribuyenteespecial']))
   {
       $this->nm_new_label['escontribuyenteespecial'] = "" . $this->Ini->Nm_lang['lang_esCOntribuyenteEspecial'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $escontribuyenteespecial = $this->escontribuyenteespecial;
   $sStyleHidden_escontribuyenteespecial = '';
   if (isset($this->nmgp_cmp_hidden['escontribuyenteespecial']) && $this->nmgp_cmp_hidden['escontribuyenteespecial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['escontribuyenteespecial']);
       $sStyleHidden_escontribuyenteespecial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_escontribuyenteespecial = 'display: none;';
   $sStyleReadInp_escontribuyenteespecial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['escontribuyenteespecial']) && $this->nmgp_cmp_readonly['escontribuyenteespecial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['escontribuyenteespecial']);
       $sStyleReadLab_escontribuyenteespecial = '';
       $sStyleReadInp_escontribuyenteespecial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['escontribuyenteespecial']) && $this->nmgp_cmp_hidden['escontribuyenteespecial'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="escontribuyenteespecial" value="<?php echo $this->form_encode_input($this->escontribuyenteespecial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->escontribuyenteespecial_1 = explode(";", trim($this->escontribuyenteespecial));
  } 
  else
  {
      if (empty($this->escontribuyenteespecial))
      {
          $this->escontribuyenteespecial_1= array(); 
          $this->escontribuyenteespecial= "N";
      } 
      else
      {
          $this->escontribuyenteespecial_1= $this->escontribuyenteespecial; 
          $this->escontribuyenteespecial= ""; 
          foreach ($this->escontribuyenteespecial_1 as $cada_escontribuyenteespecial)
          {
             if (!empty($escontribuyenteespecial))
             {
                 $this->escontribuyenteespecial.= ";"; 
             } 
             $this->escontribuyenteespecial.= $cada_escontribuyenteespecial; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_escontribuyenteespecial_line" id="hidden_field_data_escontribuyenteespecial" style="<?php echo $sStyleHidden_escontribuyenteespecial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_escontribuyenteespecial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_escontribuyenteespecial_label" style=""><span id="id_label_escontribuyenteespecial"><?php echo $this->nm_new_label['escontribuyenteespecial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["escontribuyenteespecial"]) &&  $this->nmgp_cmp_readonly["escontribuyenteespecial"] == "on") { 

$escontribuyenteespecial_look = "";
 if ($this->escontribuyenteespecial == "S") { $escontribuyenteespecial_look .= "" ;} 
 if (empty($escontribuyenteespecial_look)) { $escontribuyenteespecial_look = $this->escontribuyenteespecial; }
?>
<input type="hidden" name="escontribuyenteespecial" value="<?php echo $this->form_encode_input($escontribuyenteespecial) . "\">" . $escontribuyenteespecial_look . ""; ?>
<?php } else { ?>

<?php

$escontribuyenteespecial_look = "";
 if ($this->escontribuyenteespecial == "S") { $escontribuyenteespecial_look .= "" ;} 
 if (empty($escontribuyenteespecial_look)) { $escontribuyenteespecial_look = $this->escontribuyenteespecial; }
?>
<span id="id_read_on_escontribuyenteespecial" class="css_escontribuyenteespecial_line" style="<?php echo $sStyleReadLab_escontribuyenteespecial; ?>"><?php echo $this->form_format_readonly("escontribuyenteespecial", $this->form_encode_input($escontribuyenteespecial_look)); ?></span><span id="id_read_off_escontribuyenteespecial" class="css_read_off_escontribuyenteespecial css_escontribuyenteespecial_line" style="<?php echo $sStyleReadInp_escontribuyenteespecial; ?>"><?php echo "<div id=\"idAjaxCheckbox_escontribuyenteespecial\" style=\"display: inline-block\" class=\"css_escontribuyenteespecial_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_escontribuyenteespecial_line"><?php $tempOptionId = "id-opt-escontribuyenteespecial" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-escontribuyenteespecial sc-ui-checkbox-escontribuyenteespecial" name="escontribuyenteespecial[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_escontribuyenteespecial'][] = 'S'; ?>
<?php  if (in_array("S", $this->escontribuyenteespecial_1))  { echo " checked" ;} ?> onClick="do_ajax_form_admin_empresas_mob_event_escontribuyenteespecial_onclick();" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_escontribuyenteespecial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_escontribuyenteespecial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_contribuyente_especial']))
    {
        $this->nm_new_label['emp_contribuyente_especial'] = "" . $this->Ini->Nm_lang['lang_contribuyente_especial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_contribuyente_especial = $this->emp_contribuyente_especial;
   $sStyleHidden_emp_contribuyente_especial = '';
   if (isset($this->nmgp_cmp_hidden['emp_contribuyente_especial']) && $this->nmgp_cmp_hidden['emp_contribuyente_especial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_contribuyente_especial']);
       $sStyleHidden_emp_contribuyente_especial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_contribuyente_especial = 'display: none;';
   $sStyleReadInp_emp_contribuyente_especial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_contribuyente_especial']) && $this->nmgp_cmp_readonly['emp_contribuyente_especial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_contribuyente_especial']);
       $sStyleReadLab_emp_contribuyente_especial = '';
       $sStyleReadInp_emp_contribuyente_especial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_contribuyente_especial']) && $this->nmgp_cmp_hidden['emp_contribuyente_especial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_contribuyente_especial" value="<?php echo $this->form_encode_input($emp_contribuyente_especial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_contribuyente_especial_line" id="hidden_field_data_emp_contribuyente_especial" style="<?php echo $sStyleHidden_emp_contribuyente_especial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_contribuyente_especial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_contribuyente_especial_label" style=""><span id="id_label_emp_contribuyente_especial"><?php echo $this->nm_new_label['emp_contribuyente_especial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_contribuyente_especial"]) &&  $this->nmgp_cmp_readonly["emp_contribuyente_especial"] == "on") { 

 ?>
<input type="hidden" name="emp_contribuyente_especial" value="<?php echo $this->form_encode_input($emp_contribuyente_especial) . "\">" . $emp_contribuyente_especial . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_contribuyente_especial" class="sc-ui-readonly-emp_contribuyente_especial css_emp_contribuyente_especial_line" style="<?php echo $sStyleReadLab_emp_contribuyente_especial; ?>"><?php echo $this->form_format_readonly("emp_contribuyente_especial", $this->form_encode_input($this->emp_contribuyente_especial)); ?></span><span id="id_read_off_emp_contribuyente_especial" class="css_read_off_emp_contribuyente_especial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_contribuyente_especial; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_contribuyente_especial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_contribuyente_especial" type=text name="emp_contribuyente_especial" value="<?php echo $this->form_encode_input($emp_contribuyente_especial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_contribuyente_especial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_contribuyente_especial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['esartesanocalificado']))
   {
       $this->nm_new_label['esartesanocalificado'] = "" . $this->Ini->Nm_lang['lang_artesano_calificado'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $esartesanocalificado = $this->esartesanocalificado;
   $sStyleHidden_esartesanocalificado = '';
   if (isset($this->nmgp_cmp_hidden['esartesanocalificado']) && $this->nmgp_cmp_hidden['esartesanocalificado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['esartesanocalificado']);
       $sStyleHidden_esartesanocalificado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_esartesanocalificado = 'display: none;';
   $sStyleReadInp_esartesanocalificado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['esartesanocalificado']) && $this->nmgp_cmp_readonly['esartesanocalificado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['esartesanocalificado']);
       $sStyleReadLab_esartesanocalificado = '';
       $sStyleReadInp_esartesanocalificado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['esartesanocalificado']) && $this->nmgp_cmp_hidden['esartesanocalificado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="esartesanocalificado" value="<?php echo $this->form_encode_input($this->esartesanocalificado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->esartesanocalificado_1 = explode(";", trim($this->esartesanocalificado));
  } 
  else
  {
      if (empty($this->esartesanocalificado))
      {
          $this->esartesanocalificado_1= array(); 
          $this->esartesanocalificado= "N";
      } 
      else
      {
          $this->esartesanocalificado_1= $this->esartesanocalificado; 
          $this->esartesanocalificado= ""; 
          foreach ($this->esartesanocalificado_1 as $cada_esartesanocalificado)
          {
             if (!empty($esartesanocalificado))
             {
                 $this->esartesanocalificado.= ";"; 
             } 
             $this->esartesanocalificado.= $cada_esartesanocalificado; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_esartesanocalificado_line" id="hidden_field_data_esartesanocalificado" style="<?php echo $sStyleHidden_esartesanocalificado; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_esartesanocalificado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_esartesanocalificado_label" style=""><span id="id_label_esartesanocalificado"><?php echo $this->nm_new_label['esartesanocalificado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["esartesanocalificado"]) &&  $this->nmgp_cmp_readonly["esartesanocalificado"] == "on") { 

$esartesanocalificado_look = "";
 if ($this->esartesanocalificado == "S") { $esartesanocalificado_look .= "" ;} 
 if (empty($esartesanocalificado_look)) { $esartesanocalificado_look = $this->esartesanocalificado; }
?>
<input type="hidden" name="esartesanocalificado" value="<?php echo $this->form_encode_input($esartesanocalificado) . "\">" . $esartesanocalificado_look . ""; ?>
<?php } else { ?>

<?php

$esartesanocalificado_look = "";
 if ($this->esartesanocalificado == "S") { $esartesanocalificado_look .= "" ;} 
 if (empty($esartesanocalificado_look)) { $esartesanocalificado_look = $this->esartesanocalificado; }
?>
<span id="id_read_on_esartesanocalificado" class="css_esartesanocalificado_line" style="<?php echo $sStyleReadLab_esartesanocalificado; ?>"><?php echo $this->form_format_readonly("esartesanocalificado", $this->form_encode_input($esartesanocalificado_look)); ?></span><span id="id_read_off_esartesanocalificado" class="css_read_off_esartesanocalificado css_esartesanocalificado_line" style="<?php echo $sStyleReadInp_esartesanocalificado; ?>"><?php echo "<div id=\"idAjaxCheckbox_esartesanocalificado\" style=\"display: inline-block\" class=\"css_esartesanocalificado_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_esartesanocalificado_line"><?php $tempOptionId = "id-opt-esartesanocalificado" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-esartesanocalificado sc-ui-checkbox-esartesanocalificado" name="esartesanocalificado[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_esartesanocalificado'][] = 'S'; ?>
<?php  if (in_array("S", $this->esartesanocalificado_1))  { echo " checked" ;} ?> onClick="do_ajax_form_admin_empresas_mob_event_esartesanocalificado_onclick();" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_esartesanocalificado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_esartesanocalificado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_calificacion_artesanal']))
    {
        $this->nm_new_label['emp_calificacion_artesanal'] = "" . $this->Ini->Nm_lang['lang_calificacion_artesanal'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_calificacion_artesanal = $this->emp_calificacion_artesanal;
   $sStyleHidden_emp_calificacion_artesanal = '';
   if (isset($this->nmgp_cmp_hidden['emp_calificacion_artesanal']) && $this->nmgp_cmp_hidden['emp_calificacion_artesanal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_calificacion_artesanal']);
       $sStyleHidden_emp_calificacion_artesanal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_calificacion_artesanal = 'display: none;';
   $sStyleReadInp_emp_calificacion_artesanal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_calificacion_artesanal']) && $this->nmgp_cmp_readonly['emp_calificacion_artesanal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_calificacion_artesanal']);
       $sStyleReadLab_emp_calificacion_artesanal = '';
       $sStyleReadInp_emp_calificacion_artesanal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_calificacion_artesanal']) && $this->nmgp_cmp_hidden['emp_calificacion_artesanal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_calificacion_artesanal" value="<?php echo $this->form_encode_input($emp_calificacion_artesanal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_calificacion_artesanal_line" id="hidden_field_data_emp_calificacion_artesanal" style="<?php echo $sStyleHidden_emp_calificacion_artesanal; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_calificacion_artesanal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_calificacion_artesanal_label" style=""><span id="id_label_emp_calificacion_artesanal"><?php echo $this->nm_new_label['emp_calificacion_artesanal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_calificacion_artesanal"]) &&  $this->nmgp_cmp_readonly["emp_calificacion_artesanal"] == "on") { 

 ?>
<input type="hidden" name="emp_calificacion_artesanal" value="<?php echo $this->form_encode_input($emp_calificacion_artesanal) . "\">" . $emp_calificacion_artesanal . ""; ?>
<?php } else { ?>
<span id="id_read_on_emp_calificacion_artesanal" class="sc-ui-readonly-emp_calificacion_artesanal css_emp_calificacion_artesanal_line" style="<?php echo $sStyleReadLab_emp_calificacion_artesanal; ?>"><?php echo $this->form_format_readonly("emp_calificacion_artesanal", $this->form_encode_input($this->emp_calificacion_artesanal)); ?></span><span id="id_read_off_emp_calificacion_artesanal" class="css_read_off_emp_calificacion_artesanal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_emp_calificacion_artesanal; ?>">
 <input class="sc-js-input scFormObjectOdd css_emp_calificacion_artesanal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_emp_calificacion_artesanal" type=text name="emp_calificacion_artesanal" value="<?php echo $this->form_encode_input($emp_calificacion_artesanal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_calificacion_artesanal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_calificacion_artesanal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['emp_es_op_transporte']))
   {
       $this->nm_new_label['emp_es_op_transporte'] = "" . $this->Ini->Nm_lang['lang_es_op_transporte'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_es_op_transporte = $this->emp_es_op_transporte;
   $sStyleHidden_emp_es_op_transporte = '';
   if (isset($this->nmgp_cmp_hidden['emp_es_op_transporte']) && $this->nmgp_cmp_hidden['emp_es_op_transporte'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_es_op_transporte']);
       $sStyleHidden_emp_es_op_transporte = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_es_op_transporte = 'display: none;';
   $sStyleReadInp_emp_es_op_transporte = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_es_op_transporte']) && $this->nmgp_cmp_readonly['emp_es_op_transporte'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_es_op_transporte']);
       $sStyleReadLab_emp_es_op_transporte = '';
       $sStyleReadInp_emp_es_op_transporte = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_es_op_transporte']) && $this->nmgp_cmp_hidden['emp_es_op_transporte'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="emp_es_op_transporte" value="<?php echo $this->form_encode_input($this->emp_es_op_transporte) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->emp_es_op_transporte_1 = explode(";", trim($this->emp_es_op_transporte));
  } 
  else
  {
      if (empty($this->emp_es_op_transporte))
      {
          $this->emp_es_op_transporte_1= array(); 
          $this->emp_es_op_transporte= "N";
      } 
      else
      {
          $this->emp_es_op_transporte_1= $this->emp_es_op_transporte; 
          $this->emp_es_op_transporte= ""; 
          foreach ($this->emp_es_op_transporte_1 as $cada_emp_es_op_transporte)
          {
             if (!empty($emp_es_op_transporte))
             {
                 $this->emp_es_op_transporte.= ";"; 
             } 
             $this->emp_es_op_transporte.= $cada_emp_es_op_transporte; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_emp_es_op_transporte_line" id="hidden_field_data_emp_es_op_transporte" style="<?php echo $sStyleHidden_emp_es_op_transporte; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_es_op_transporte_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_es_op_transporte_label" style=""><span id="id_label_emp_es_op_transporte"><?php echo $this->nm_new_label['emp_es_op_transporte']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_es_op_transporte"]) &&  $this->nmgp_cmp_readonly["emp_es_op_transporte"] == "on") { 

$emp_es_op_transporte_look = "";
 if ($this->emp_es_op_transporte == "S") { $emp_es_op_transporte_look .= "" ;} 
 if (empty($emp_es_op_transporte_look)) { $emp_es_op_transporte_look = $this->emp_es_op_transporte; }
?>
<input type="hidden" name="emp_es_op_transporte" value="<?php echo $this->form_encode_input($emp_es_op_transporte) . "\">" . $emp_es_op_transporte_look . ""; ?>
<?php } else { ?>

<?php

$emp_es_op_transporte_look = "";
 if ($this->emp_es_op_transporte == "S") { $emp_es_op_transporte_look .= "" ;} 
 if (empty($emp_es_op_transporte_look)) { $emp_es_op_transporte_look = $this->emp_es_op_transporte; }
?>
<span id="id_read_on_emp_es_op_transporte" class="css_emp_es_op_transporte_line" style="<?php echo $sStyleReadLab_emp_es_op_transporte; ?>"><?php echo $this->form_format_readonly("emp_es_op_transporte", $this->form_encode_input($emp_es_op_transporte_look)); ?></span><span id="id_read_off_emp_es_op_transporte" class="css_read_off_emp_es_op_transporte css_emp_es_op_transporte_line" style="<?php echo $sStyleReadInp_emp_es_op_transporte; ?>"><?php echo "<div id=\"idAjaxCheckbox_emp_es_op_transporte\" style=\"display: inline-block\" class=\"css_emp_es_op_transporte_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_emp_es_op_transporte_line"><?php $tempOptionId = "id-opt-emp_es_op_transporte" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-emp_es_op_transporte sc-ui-checkbox-emp_es_op_transporte" name="emp_es_op_transporte[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_es_op_transporte'][] = 'S'; ?>
<?php  if (in_array("S", $this->emp_es_op_transporte_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_es_op_transporte_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_es_op_transporte_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['emp_socio_transportista']))
   {
       $this->nm_new_label['emp_socio_transportista'] = "" . $this->Ini->Nm_lang['lang_es_socio_transporte'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_socio_transportista = $this->emp_socio_transportista;
   $sStyleHidden_emp_socio_transportista = '';
   if (isset($this->nmgp_cmp_hidden['emp_socio_transportista']) && $this->nmgp_cmp_hidden['emp_socio_transportista'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_socio_transportista']);
       $sStyleHidden_emp_socio_transportista = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_socio_transportista = 'display: none;';
   $sStyleReadInp_emp_socio_transportista = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_socio_transportista']) && $this->nmgp_cmp_readonly['emp_socio_transportista'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_socio_transportista']);
       $sStyleReadLab_emp_socio_transportista = '';
       $sStyleReadInp_emp_socio_transportista = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_socio_transportista']) && $this->nmgp_cmp_hidden['emp_socio_transportista'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="emp_socio_transportista" value="<?php echo $this->form_encode_input($this->emp_socio_transportista) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->emp_socio_transportista_1 = explode(";", trim($this->emp_socio_transportista));
  } 
  else
  {
      if (empty($this->emp_socio_transportista))
      {
          $this->emp_socio_transportista_1= array(); 
          $this->emp_socio_transportista= "N";
      } 
      else
      {
          $this->emp_socio_transportista_1= $this->emp_socio_transportista; 
          $this->emp_socio_transportista= ""; 
          foreach ($this->emp_socio_transportista_1 as $cada_emp_socio_transportista)
          {
             if (!empty($emp_socio_transportista))
             {
                 $this->emp_socio_transportista.= ";"; 
             } 
             $this->emp_socio_transportista.= $cada_emp_socio_transportista; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_emp_socio_transportista_line" id="hidden_field_data_emp_socio_transportista" style="<?php echo $sStyleHidden_emp_socio_transportista; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_socio_transportista_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_socio_transportista_label" style=""><span id="id_label_emp_socio_transportista"><?php echo $this->nm_new_label['emp_socio_transportista']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_socio_transportista"]) &&  $this->nmgp_cmp_readonly["emp_socio_transportista"] == "on") { 

$emp_socio_transportista_look = "";
 if ($this->emp_socio_transportista == "S") { $emp_socio_transportista_look .= "" ;} 
 if (empty($emp_socio_transportista_look)) { $emp_socio_transportista_look = $this->emp_socio_transportista; }
?>
<input type="hidden" name="emp_socio_transportista" value="<?php echo $this->form_encode_input($emp_socio_transportista) . "\">" . $emp_socio_transportista_look . ""; ?>
<?php } else { ?>

<?php

$emp_socio_transportista_look = "";
 if ($this->emp_socio_transportista == "S") { $emp_socio_transportista_look .= "" ;} 
 if (empty($emp_socio_transportista_look)) { $emp_socio_transportista_look = $this->emp_socio_transportista; }
?>
<span id="id_read_on_emp_socio_transportista" class="css_emp_socio_transportista_line" style="<?php echo $sStyleReadLab_emp_socio_transportista; ?>"><?php echo $this->form_format_readonly("emp_socio_transportista", $this->form_encode_input($emp_socio_transportista_look)); ?></span><span id="id_read_off_emp_socio_transportista" class="css_read_off_emp_socio_transportista css_emp_socio_transportista_line" style="<?php echo $sStyleReadInp_emp_socio_transportista; ?>"><?php echo "<div id=\"idAjaxCheckbox_emp_socio_transportista\" style=\"display: inline-block\" class=\"css_emp_socio_transportista_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_emp_socio_transportista_line"><?php $tempOptionId = "id-opt-emp_socio_transportista" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-emp_socio_transportista sc-ui-checkbox-emp_socio_transportista" name="emp_socio_transportista[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_socio_transportista'][] = 'S'; ?>
<?php  if (in_array("S", $this->emp_socio_transportista_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_socio_transportista_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_socio_transportista_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['es_profesionalsalud']))
   {
       $this->nm_new_label['es_profesionalsalud'] = "" . $this->Ini->Nm_lang['lang_profesional_salud'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $es_profesionalsalud = $this->es_profesionalsalud;
   $sStyleHidden_es_profesionalsalud = '';
   if (isset($this->nmgp_cmp_hidden['es_profesionalsalud']) && $this->nmgp_cmp_hidden['es_profesionalsalud'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['es_profesionalsalud']);
       $sStyleHidden_es_profesionalsalud = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_es_profesionalsalud = 'display: none;';
   $sStyleReadInp_es_profesionalsalud = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['es_profesionalsalud']) && $this->nmgp_cmp_readonly['es_profesionalsalud'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['es_profesionalsalud']);
       $sStyleReadLab_es_profesionalsalud = '';
       $sStyleReadInp_es_profesionalsalud = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['es_profesionalsalud']) && $this->nmgp_cmp_hidden['es_profesionalsalud'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="es_profesionalsalud" value="<?php echo $this->form_encode_input($this->es_profesionalsalud) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->es_profesionalsalud_1 = explode(";", trim($this->es_profesionalsalud));
  } 
  else
  {
      if (empty($this->es_profesionalsalud))
      {
          $this->es_profesionalsalud_1= array(); 
          $this->es_profesionalsalud= "N";
      } 
      else
      {
          $this->es_profesionalsalud_1= $this->es_profesionalsalud; 
          $this->es_profesionalsalud= ""; 
          foreach ($this->es_profesionalsalud_1 as $cada_es_profesionalsalud)
          {
             if (!empty($es_profesionalsalud))
             {
                 $this->es_profesionalsalud.= ";"; 
             } 
             $this->es_profesionalsalud.= $cada_es_profesionalsalud; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_es_profesionalsalud_line" id="hidden_field_data_es_profesionalsalud" style="<?php echo $sStyleHidden_es_profesionalsalud; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_es_profesionalsalud_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_es_profesionalsalud_label" style=""><span id="id_label_es_profesionalsalud"><?php echo $this->nm_new_label['es_profesionalsalud']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["es_profesionalsalud"]) &&  $this->nmgp_cmp_readonly["es_profesionalsalud"] == "on") { 

$es_profesionalsalud_look = "";
 if ($this->es_profesionalsalud == "S") { $es_profesionalsalud_look .= "" ;} 
 if (empty($es_profesionalsalud_look)) { $es_profesionalsalud_look = $this->es_profesionalsalud; }
?>
<input type="hidden" name="es_profesionalsalud" value="<?php echo $this->form_encode_input($es_profesionalsalud) . "\">" . $es_profesionalsalud_look . ""; ?>
<?php } else { ?>

<?php

$es_profesionalsalud_look = "";
 if ($this->es_profesionalsalud == "S") { $es_profesionalsalud_look .= "" ;} 
 if (empty($es_profesionalsalud_look)) { $es_profesionalsalud_look = $this->es_profesionalsalud; }
?>
<span id="id_read_on_es_profesionalsalud" class="css_es_profesionalsalud_line" style="<?php echo $sStyleReadLab_es_profesionalsalud; ?>"><?php echo $this->form_format_readonly("es_profesionalsalud", $this->form_encode_input($es_profesionalsalud_look)); ?></span><span id="id_read_off_es_profesionalsalud" class="css_read_off_es_profesionalsalud css_es_profesionalsalud_line" style="<?php echo $sStyleReadInp_es_profesionalsalud; ?>"><?php echo "<div id=\"idAjaxCheckbox_es_profesionalsalud\" style=\"display: inline-block\" class=\"css_es_profesionalsalud_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_es_profesionalsalud_line"><?php $tempOptionId = "id-opt-es_profesionalsalud" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-es_profesionalsalud sc-ui-checkbox-es_profesionalsalud" name="es_profesionalsalud[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_es_profesionalsalud'][] = 'S'; ?>
<?php  if (in_array("S", $this->es_profesionalsalud_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_es_profesionalsalud_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_es_profesionalsalud_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['emp_agente_retencion']))
   {
       $this->nm_new_label['emp_agente_retencion'] = "" . $this->Ini->Nm_lang['lang_agente_retencion'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_agente_retencion = $this->emp_agente_retencion;
   $sStyleHidden_emp_agente_retencion = '';
   if (isset($this->nmgp_cmp_hidden['emp_agente_retencion']) && $this->nmgp_cmp_hidden['emp_agente_retencion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_agente_retencion']);
       $sStyleHidden_emp_agente_retencion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_agente_retencion = 'display: none;';
   $sStyleReadInp_emp_agente_retencion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_agente_retencion']) && $this->nmgp_cmp_readonly['emp_agente_retencion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_agente_retencion']);
       $sStyleReadLab_emp_agente_retencion = '';
       $sStyleReadInp_emp_agente_retencion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_agente_retencion']) && $this->nmgp_cmp_hidden['emp_agente_retencion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="emp_agente_retencion" value="<?php echo $this->form_encode_input($this->emp_agente_retencion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->emp_agente_retencion_1 = explode(";", trim($this->emp_agente_retencion));
  } 
  else
  {
      if (empty($this->emp_agente_retencion))
      {
          $this->emp_agente_retencion_1= array(); 
          $this->emp_agente_retencion= "N";
      } 
      else
      {
          $this->emp_agente_retencion_1= $this->emp_agente_retencion; 
          $this->emp_agente_retencion= ""; 
          foreach ($this->emp_agente_retencion_1 as $cada_emp_agente_retencion)
          {
             if (!empty($emp_agente_retencion))
             {
                 $this->emp_agente_retencion.= ";"; 
             } 
             $this->emp_agente_retencion.= $cada_emp_agente_retencion; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_emp_agente_retencion_line" id="hidden_field_data_emp_agente_retencion" style="<?php echo $sStyleHidden_emp_agente_retencion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_agente_retencion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_agente_retencion_label" style=""><span id="id_label_emp_agente_retencion"><?php echo $this->nm_new_label['emp_agente_retencion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_agente_retencion"]) &&  $this->nmgp_cmp_readonly["emp_agente_retencion"] == "on") { 

$emp_agente_retencion_look = "";
 if ($this->emp_agente_retencion == "S") { $emp_agente_retencion_look .= "" ;} 
 if (empty($emp_agente_retencion_look)) { $emp_agente_retencion_look = $this->emp_agente_retencion; }
?>
<input type="hidden" name="emp_agente_retencion" value="<?php echo $this->form_encode_input($emp_agente_retencion) . "\">" . $emp_agente_retencion_look . ""; ?>
<?php } else { ?>

<?php

$emp_agente_retencion_look = "";
 if ($this->emp_agente_retencion == "S") { $emp_agente_retencion_look .= "" ;} 
 if (empty($emp_agente_retencion_look)) { $emp_agente_retencion_look = $this->emp_agente_retencion; }
?>
<span id="id_read_on_emp_agente_retencion" class="css_emp_agente_retencion_line" style="<?php echo $sStyleReadLab_emp_agente_retencion; ?>"><?php echo $this->form_format_readonly("emp_agente_retencion", $this->form_encode_input($emp_agente_retencion_look)); ?></span><span id="id_read_off_emp_agente_retencion" class="css_read_off_emp_agente_retencion css_emp_agente_retencion_line" style="<?php echo $sStyleReadInp_emp_agente_retencion; ?>"><?php echo "<div id=\"idAjaxCheckbox_emp_agente_retencion\" style=\"display: inline-block\" class=\"css_emp_agente_retencion_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_emp_agente_retencion_line"><?php $tempOptionId = "id-opt-emp_agente_retencion" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-emp_agente_retencion sc-ui-checkbox-emp_agente_retencion" name="emp_agente_retencion[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_agente_retencion'][] = 'S'; ?>
<?php  if (in_array("S", $this->emp_agente_retencion_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_agente_retencion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_agente_retencion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_ambiente_sri']))
    {
        $this->nm_new_label['emp_ambiente_sri'] = "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_ambiente_sri = $this->emp_ambiente_sri;
   $sStyleHidden_emp_ambiente_sri = '';
   if (isset($this->nmgp_cmp_hidden['emp_ambiente_sri']) && $this->nmgp_cmp_hidden['emp_ambiente_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_ambiente_sri']);
       $sStyleHidden_emp_ambiente_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_ambiente_sri = 'display: none;';
   $sStyleReadInp_emp_ambiente_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_ambiente_sri']) && $this->nmgp_cmp_readonly['emp_ambiente_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_ambiente_sri']);
       $sStyleReadLab_emp_ambiente_sri = '';
       $sStyleReadInp_emp_ambiente_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_ambiente_sri']) && $this->nmgp_cmp_hidden['emp_ambiente_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_ambiente_sri" value="<?php echo $this->form_encode_input($emp_ambiente_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_ambiente_sri_line" id="hidden_field_data_emp_ambiente_sri" style="<?php echo $sStyleHidden_emp_ambiente_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_ambiente_sri_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_ambiente_sri_label" style=""><span id="id_label_emp_ambiente_sri"><?php echo $this->nm_new_label['emp_ambiente_sri']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_ambiente_sri"]) &&  $this->nmgp_cmp_readonly["emp_ambiente_sri"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_ambiente_sri']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_ambiente_sri'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_ambiente_sri']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_ambiente_sri'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_ambiente_sri']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_ambiente_sri'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_ambiente_sri']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_ambiente_sri'] = array(); 
    }

   $old_value_emp_codigo_empresa_debi = $this->emp_codigo_empresa_debi;
   $this->nm_tira_formatacao();


   $unformatted_value_emp_codigo_empresa_debi = $this->emp_codigo_empresa_debi;

   $emp_obligado_val_str = "''";
   if (!empty($this->emp_obligado))
   {
       if (is_array($this->emp_obligado))
       {
           $Tmp_array = $this->emp_obligado;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_obligado);
       }
       $emp_obligado_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_obligado_val_str)
          {
             $emp_obligado_val_str .= ", ";
          }
          $emp_obligado_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_autorizacion_inmediata_val_str = "''";
   if (!empty($this->emp_autorizacion_inmediata))
   {
       if (is_array($this->emp_autorizacion_inmediata))
       {
           $Tmp_array = $this->emp_autorizacion_inmediata;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_autorizacion_inmediata);
       }
       $emp_autorizacion_inmediata_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_autorizacion_inmediata_val_str)
          {
             $emp_autorizacion_inmediata_val_str .= ", ";
          }
          $emp_autorizacion_inmediata_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_es_op_transporte_val_str = "''";
   if (!empty($this->emp_es_op_transporte))
   {
       if (is_array($this->emp_es_op_transporte))
       {
           $Tmp_array = $this->emp_es_op_transporte;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_es_op_transporte);
       }
       $emp_es_op_transporte_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_es_op_transporte_val_str)
          {
             $emp_es_op_transporte_val_str .= ", ";
          }
          $emp_es_op_transporte_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_regimen_especial_val_str = "''";
   if (!empty($this->emp_regimen_especial))
   {
       if (is_array($this->emp_regimen_especial))
       {
           $Tmp_array = $this->emp_regimen_especial;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_regimen_especial);
       }
       $emp_regimen_especial_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_regimen_especial_val_str)
          {
             $emp_regimen_especial_val_str .= ", ";
          }
          $emp_regimen_especial_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_agente_retencion_val_str = "''";
   if (!empty($this->emp_agente_retencion))
   {
       if (is_array($this->emp_agente_retencion))
       {
           $Tmp_array = $this->emp_agente_retencion;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_agente_retencion);
       }
       $emp_agente_retencion_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_agente_retencion_val_str)
          {
             $emp_agente_retencion_val_str .= ", ";
          }
          $emp_agente_retencion_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $escontribuyenteespecial_val_str = "''";
   if (!empty($this->escontribuyenteespecial))
   {
       if (is_array($this->escontribuyenteespecial))
       {
           $Tmp_array = $this->escontribuyenteespecial;
       }
       else
       {
           $Tmp_array = explode(";", $this->escontribuyenteespecial);
       }
       $escontribuyenteespecial_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $escontribuyenteespecial_val_str)
          {
             $escontribuyenteespecial_val_str .= ", ";
          }
          $escontribuyenteespecial_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $esartesanocalificado_val_str = "''";
   if (!empty($this->esartesanocalificado))
   {
       if (is_array($this->esartesanocalificado))
       {
           $Tmp_array = $this->esartesanocalificado;
       }
       else
       {
           $Tmp_array = explode(";", $this->esartesanocalificado);
       }
       $esartesanocalificado_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $esartesanocalificado_val_str)
          {
             $esartesanocalificado_val_str .= ", ";
          }
          $esartesanocalificado_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $es_profesionalsalud_val_str = "''";
   if (!empty($this->es_profesionalsalud))
   {
       if (is_array($this->es_profesionalsalud))
       {
           $Tmp_array = $this->es_profesionalsalud;
       }
       else
       {
           $Tmp_array = explode(";", $this->es_profesionalsalud);
       }
       $es_profesionalsalud_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $es_profesionalsalud_val_str)
          {
             $es_profesionalsalud_val_str .= ", ";
          }
          $es_profesionalsalud_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_socio_transportista_val_str = "''";
   if (!empty($this->emp_socio_transportista))
   {
       if (is_array($this->emp_socio_transportista))
       {
           $Tmp_array = $this->emp_socio_transportista;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_socio_transportista);
       }
       $emp_socio_transportista_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_socio_transportista_val_str)
          {
             $emp_socio_transportista_val_str .= ", ";
          }
          $emp_socio_transportista_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT ta_id, ta_nombre  FROM sri_tipo_ambiente  ORDER BY ta_nombre";

   $this->emp_codigo_empresa_debi = $old_value_emp_codigo_empresa_debi;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_ambiente_sri'][] = $rs->fields[0];
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
   $x = 0; 
   $emp_ambiente_sri_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->emp_ambiente_sri_1))
          {
              foreach ($this->emp_ambiente_sri_1 as $tmp_emp_ambiente_sri)
              {
                  if (trim($tmp_emp_ambiente_sri) === trim($cadaselect[1])) {$emp_ambiente_sri_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->emp_ambiente_sri) && trim($this->emp_ambiente_sri) === trim($cadaselect[1])) {$emp_ambiente_sri_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="emp_ambiente_sri" value="<?php echo $this->form_encode_input($emp_ambiente_sri) . "\">" . $emp_ambiente_sri_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_emp_ambiente_sri();
   $x = 0 ; 
   $emp_ambiente_sri_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->emp_ambiente_sri_1))
          {
              foreach ($this->emp_ambiente_sri_1 as $tmp_emp_ambiente_sri)
              {
                  if (trim($tmp_emp_ambiente_sri) === trim($cadaselect[1])) {$emp_ambiente_sri_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->emp_ambiente_sri) && trim($this->emp_ambiente_sri) === trim($cadaselect[1])) {$emp_ambiente_sri_look .= $cadaselect[0];} 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_emp_ambiente_sri\" class=\"css_emp_ambiente_sri_line\" style=\"" .  $sStyleReadLab_emp_ambiente_sri . "\">" . $this->form_format_readonly("emp_ambiente_sri", $this->form_encode_input($emp_ambiente_sri_look)) . "</span><span id=\"id_read_off_emp_ambiente_sri\" class=\"css_read_off_emp_ambiente_sri css_emp_ambiente_sri_line\" style=\"" . $sStyleReadInp_emp_ambiente_sri . "\">";
   echo "<div id=\"idAjaxRadio_emp_ambiente_sri\" class=\"css_emp_ambiente_sri_line\" style=\"display: inline-block\">\r\n";
   $y = 0 ; 
   echo "<table cellspacing=0 cellpadding=0 border=0>\r\n";
   echo " <tr>\r\n";
   while (!empty($todo[$x])) 
   {
          $cadaradio = explode("?#?", $todo[$x]) ; 
          if ($cadaradio[1] == "@ ") {$cadaradio[1]= trim($cadaradio[1]); } ; 
          if ($y == 1)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOdd css_emp_ambiente_sri_line\">\r\n";
          $tempOptionId = "id-opt-emp_ambiente_sri-" . $x;
          echo "    <input id=\"" . $tempOptionId . "\" type=radio name=\"emp_ambiente_sri\" value=\"$cadaradio[1]\" class=\"sc-ui-radio-emp_ambiente_sri sc-ui-radio-emp_ambiente_sri\"";
          if (trim($this->emp_ambiente_sri) === trim($cadaradio[1])) 
          { 
              echo " checked" ; 
          } 
          if (strtoupper($cadaradio[2]) == "S") 
          { 
              if (empty($this->emp_ambiente_sri)) 
              { 
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"" . $sCheckInsert . "\" >" ; 
          echo "<label for=\"" . $tempOptionId . "\">" . $cadaradio[0] . "</label>";
          $x++ ; 
          $y++ ; 
          echo "  </font></td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_ambiente_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_ambiente_sri_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['emp_autorizacion_inmediata']))
   {
       $this->nm_new_label['emp_autorizacion_inmediata'] = "" . $this->Ini->Nm_lang['lang_autorizacion_inmediata'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_autorizacion_inmediata = $this->emp_autorizacion_inmediata;
   $sStyleHidden_emp_autorizacion_inmediata = '';
   if (isset($this->nmgp_cmp_hidden['emp_autorizacion_inmediata']) && $this->nmgp_cmp_hidden['emp_autorizacion_inmediata'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_autorizacion_inmediata']);
       $sStyleHidden_emp_autorizacion_inmediata = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_autorizacion_inmediata = 'display: none;';
   $sStyleReadInp_emp_autorizacion_inmediata = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_autorizacion_inmediata']) && $this->nmgp_cmp_readonly['emp_autorizacion_inmediata'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_autorizacion_inmediata']);
       $sStyleReadLab_emp_autorizacion_inmediata = '';
       $sStyleReadInp_emp_autorizacion_inmediata = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_autorizacion_inmediata']) && $this->nmgp_cmp_hidden['emp_autorizacion_inmediata'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="emp_autorizacion_inmediata" value="<?php echo $this->form_encode_input($this->emp_autorizacion_inmediata) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->emp_autorizacion_inmediata_1 = explode(";", trim($this->emp_autorizacion_inmediata));
  } 
  else
  {
      if (empty($this->emp_autorizacion_inmediata))
      {
          $this->emp_autorizacion_inmediata_1= array(); 
          $this->emp_autorizacion_inmediata= "N";
      } 
      else
      {
          $this->emp_autorizacion_inmediata_1= $this->emp_autorizacion_inmediata; 
          $this->emp_autorizacion_inmediata= ""; 
          foreach ($this->emp_autorizacion_inmediata_1 as $cada_emp_autorizacion_inmediata)
          {
             if (!empty($emp_autorizacion_inmediata))
             {
                 $this->emp_autorizacion_inmediata.= ";"; 
             } 
             $this->emp_autorizacion_inmediata.= $cada_emp_autorizacion_inmediata; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_emp_autorizacion_inmediata_line" id="hidden_field_data_emp_autorizacion_inmediata" style="<?php echo $sStyleHidden_emp_autorizacion_inmediata; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_autorizacion_inmediata_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_autorizacion_inmediata_label" style=""><span id="id_label_emp_autorizacion_inmediata"><?php echo $this->nm_new_label['emp_autorizacion_inmediata']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_autorizacion_inmediata"]) &&  $this->nmgp_cmp_readonly["emp_autorizacion_inmediata"] == "on") { 

$emp_autorizacion_inmediata_look = "";
 if ($this->emp_autorizacion_inmediata == "S") { $emp_autorizacion_inmediata_look .= "" ;} 
 if (empty($emp_autorizacion_inmediata_look)) { $emp_autorizacion_inmediata_look = $this->emp_autorizacion_inmediata; }
?>
<input type="hidden" name="emp_autorizacion_inmediata" value="<?php echo $this->form_encode_input($emp_autorizacion_inmediata) . "\">" . $emp_autorizacion_inmediata_look . ""; ?>
<?php } else { ?>

<?php

$emp_autorizacion_inmediata_look = "";
 if ($this->emp_autorizacion_inmediata == "S") { $emp_autorizacion_inmediata_look .= "" ;} 
 if (empty($emp_autorizacion_inmediata_look)) { $emp_autorizacion_inmediata_look = $this->emp_autorizacion_inmediata; }
?>
<span id="id_read_on_emp_autorizacion_inmediata" class="css_emp_autorizacion_inmediata_line" style="<?php echo $sStyleReadLab_emp_autorizacion_inmediata; ?>"><?php echo $this->form_format_readonly("emp_autorizacion_inmediata", $this->form_encode_input($emp_autorizacion_inmediata_look)); ?></span><span id="id_read_off_emp_autorizacion_inmediata" class="css_read_off_emp_autorizacion_inmediata css_emp_autorizacion_inmediata_line" style="<?php echo $sStyleReadInp_emp_autorizacion_inmediata; ?>"><?php echo "<div id=\"idAjaxCheckbox_emp_autorizacion_inmediata\" style=\"display: inline-block\" class=\"css_emp_autorizacion_inmediata_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_emp_autorizacion_inmediata_line"><?php $tempOptionId = "id-opt-emp_autorizacion_inmediata" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-emp_autorizacion_inmediata sc-ui-checkbox-emp_autorizacion_inmediata" name="emp_autorizacion_inmediata[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_autorizacion_inmediata'][] = 'S'; ?>
<?php  if (in_array("S", $this->emp_autorizacion_inmediata_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_autorizacion_inmediata_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_autorizacion_inmediata_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['emp_comisionista']))
   {
       $this->nm_new_label['emp_comisionista'] = "" . $this->Ini->Nm_lang['lang_comisionistas'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_comisionista = $this->emp_comisionista;
   $sStyleHidden_emp_comisionista = '';
   if (isset($this->nmgp_cmp_hidden['emp_comisionista']) && $this->nmgp_cmp_hidden['emp_comisionista'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_comisionista']);
       $sStyleHidden_emp_comisionista = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_comisionista = 'display: none;';
   $sStyleReadInp_emp_comisionista = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_comisionista']) && $this->nmgp_cmp_readonly['emp_comisionista'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_comisionista']);
       $sStyleReadLab_emp_comisionista = '';
       $sStyleReadInp_emp_comisionista = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_comisionista']) && $this->nmgp_cmp_hidden['emp_comisionista'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="emp_comisionista" value="<?php echo $this->form_encode_input($this->emp_comisionista) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_comisionista_line" id="hidden_field_data_emp_comisionista" style="<?php echo $sStyleHidden_emp_comisionista; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_comisionista_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_comisionista_label" style=""><span id="id_label_emp_comisionista"><?php echo $this->nm_new_label['emp_comisionista']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_comisionista"]) &&  $this->nmgp_cmp_readonly["emp_comisionista"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_comisionista']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_comisionista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_comisionista']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_comisionista'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_comisionista']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_comisionista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_comisionista']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_comisionista'] = array(); 
    }

   $old_value_emp_codigo_empresa_debi = $this->emp_codigo_empresa_debi;
   $this->nm_tira_formatacao();


   $unformatted_value_emp_codigo_empresa_debi = $this->emp_codigo_empresa_debi;

   $nm_comando = "SELECT com_ruc, com_razon_social  FROM del_comisionista  WHERE com_estado='V' ORDER BY com_razon_social";

   $this->emp_codigo_empresa_debi = $old_value_emp_codigo_empresa_debi;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_comisionista'][] = $rs->fields[0];
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
   $x = 0; 
   $emp_comisionista_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->emp_comisionista_1))
          {
              foreach ($this->emp_comisionista_1 as $tmp_emp_comisionista)
              {
                  if (trim($tmp_emp_comisionista) === trim($cadaselect[1])) {$emp_comisionista_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->emp_comisionista) && trim($this->emp_comisionista) === trim($cadaselect[1])) {$emp_comisionista_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="emp_comisionista" value="<?php echo $this->form_encode_input($emp_comisionista) . "\">" . $emp_comisionista_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_emp_comisionista();
   $x = 0 ; 
   $emp_comisionista_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->emp_comisionista_1))
          {
              foreach ($this->emp_comisionista_1 as $tmp_emp_comisionista)
              {
                  if (trim($tmp_emp_comisionista) === trim($cadaselect[1])) {$emp_comisionista_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->emp_comisionista) && trim($this->emp_comisionista) === trim($cadaselect[1])) { $emp_comisionista_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($emp_comisionista_look))
          {
              $emp_comisionista_look = $this->emp_comisionista;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_emp_comisionista\" class=\"css_emp_comisionista_line\" style=\"" .  $sStyleReadLab_emp_comisionista . "\">" . $this->form_format_readonly("emp_comisionista", $this->form_encode_input($emp_comisionista_look)) . "</span><span id=\"id_read_off_emp_comisionista\" class=\"css_read_off_emp_comisionista" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_emp_comisionista . "\">";
   echo " <span id=\"idAjaxSelect_emp_comisionista\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_emp_comisionista_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_emp_comisionista\" name=\"emp_comisionista\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->emp_comisionista) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->emp_comisionista)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_comisionista_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_comisionista_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['emp_tipo_suscripcion']))
    {
        $this->nm_new_label['emp_tipo_suscripcion'] = "" . $this->Ini->Nm_lang['lang_tipo_suscripcion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $emp_tipo_suscripcion = $this->emp_tipo_suscripcion;
   $sStyleHidden_emp_tipo_suscripcion = '';
   if (isset($this->nmgp_cmp_hidden['emp_tipo_suscripcion']) && $this->nmgp_cmp_hidden['emp_tipo_suscripcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['emp_tipo_suscripcion']);
       $sStyleHidden_emp_tipo_suscripcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_emp_tipo_suscripcion = 'display: none;';
   $sStyleReadInp_emp_tipo_suscripcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['emp_tipo_suscripcion']) && $this->nmgp_cmp_readonly['emp_tipo_suscripcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['emp_tipo_suscripcion']);
       $sStyleReadLab_emp_tipo_suscripcion = '';
       $sStyleReadInp_emp_tipo_suscripcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['emp_tipo_suscripcion']) && $this->nmgp_cmp_hidden['emp_tipo_suscripcion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="emp_tipo_suscripcion" value="<?php echo $this->form_encode_input($emp_tipo_suscripcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_emp_tipo_suscripcion_line" id="hidden_field_data_emp_tipo_suscripcion" style="<?php echo $sStyleHidden_emp_tipo_suscripcion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_emp_tipo_suscripcion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_emp_tipo_suscripcion_label" style=""><span id="id_label_emp_tipo_suscripcion"><?php echo $this->nm_new_label['emp_tipo_suscripcion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["emp_tipo_suscripcion"]) &&  $this->nmgp_cmp_readonly["emp_tipo_suscripcion"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_tipo_suscripcion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_tipo_suscripcion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_tipo_suscripcion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_tipo_suscripcion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_tipo_suscripcion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_tipo_suscripcion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_tipo_suscripcion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_tipo_suscripcion'] = array(); 
    }

   $old_value_emp_codigo_empresa_debi = $this->emp_codigo_empresa_debi;
   $this->nm_tira_formatacao();


   $unformatted_value_emp_codigo_empresa_debi = $this->emp_codigo_empresa_debi;

   $emp_obligado_val_str = "''";
   if (!empty($this->emp_obligado))
   {
       if (is_array($this->emp_obligado))
       {
           $Tmp_array = $this->emp_obligado;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_obligado);
       }
       $emp_obligado_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_obligado_val_str)
          {
             $emp_obligado_val_str .= ", ";
          }
          $emp_obligado_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_autorizacion_inmediata_val_str = "''";
   if (!empty($this->emp_autorizacion_inmediata))
   {
       if (is_array($this->emp_autorizacion_inmediata))
       {
           $Tmp_array = $this->emp_autorizacion_inmediata;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_autorizacion_inmediata);
       }
       $emp_autorizacion_inmediata_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_autorizacion_inmediata_val_str)
          {
             $emp_autorizacion_inmediata_val_str .= ", ";
          }
          $emp_autorizacion_inmediata_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_es_op_transporte_val_str = "''";
   if (!empty($this->emp_es_op_transporte))
   {
       if (is_array($this->emp_es_op_transporte))
       {
           $Tmp_array = $this->emp_es_op_transporte;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_es_op_transporte);
       }
       $emp_es_op_transporte_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_es_op_transporte_val_str)
          {
             $emp_es_op_transporte_val_str .= ", ";
          }
          $emp_es_op_transporte_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_regimen_especial_val_str = "''";
   if (!empty($this->emp_regimen_especial))
   {
       if (is_array($this->emp_regimen_especial))
       {
           $Tmp_array = $this->emp_regimen_especial;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_regimen_especial);
       }
       $emp_regimen_especial_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_regimen_especial_val_str)
          {
             $emp_regimen_especial_val_str .= ", ";
          }
          $emp_regimen_especial_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_agente_retencion_val_str = "''";
   if (!empty($this->emp_agente_retencion))
   {
       if (is_array($this->emp_agente_retencion))
       {
           $Tmp_array = $this->emp_agente_retencion;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_agente_retencion);
       }
       $emp_agente_retencion_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_agente_retencion_val_str)
          {
             $emp_agente_retencion_val_str .= ", ";
          }
          $emp_agente_retencion_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $escontribuyenteespecial_val_str = "''";
   if (!empty($this->escontribuyenteespecial))
   {
       if (is_array($this->escontribuyenteespecial))
       {
           $Tmp_array = $this->escontribuyenteespecial;
       }
       else
       {
           $Tmp_array = explode(";", $this->escontribuyenteespecial);
       }
       $escontribuyenteespecial_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $escontribuyenteespecial_val_str)
          {
             $escontribuyenteespecial_val_str .= ", ";
          }
          $escontribuyenteespecial_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $esartesanocalificado_val_str = "''";
   if (!empty($this->esartesanocalificado))
   {
       if (is_array($this->esartesanocalificado))
       {
           $Tmp_array = $this->esartesanocalificado;
       }
       else
       {
           $Tmp_array = explode(";", $this->esartesanocalificado);
       }
       $esartesanocalificado_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $esartesanocalificado_val_str)
          {
             $esartesanocalificado_val_str .= ", ";
          }
          $esartesanocalificado_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $es_profesionalsalud_val_str = "''";
   if (!empty($this->es_profesionalsalud))
   {
       if (is_array($this->es_profesionalsalud))
       {
           $Tmp_array = $this->es_profesionalsalud;
       }
       else
       {
           $Tmp_array = explode(";", $this->es_profesionalsalud);
       }
       $es_profesionalsalud_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $es_profesionalsalud_val_str)
          {
             $es_profesionalsalud_val_str .= ", ";
          }
          $es_profesionalsalud_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $emp_socio_transportista_val_str = "''";
   if (!empty($this->emp_socio_transportista))
   {
       if (is_array($this->emp_socio_transportista))
       {
           $Tmp_array = $this->emp_socio_transportista;
       }
       else
       {
           $Tmp_array = explode(";", $this->emp_socio_transportista);
       }
       $emp_socio_transportista_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $emp_socio_transportista_val_str)
          {
             $emp_socio_transportista_val_str .= ", ";
          }
          $emp_socio_transportista_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_tipo_suscripcion ORDER BY dec_nombre";

   $this->emp_codigo_empresa_debi = $old_value_emp_codigo_empresa_debi;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lookup_emp_tipo_suscripcion'][] = $rs->fields[0];
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
   $x = 0; 
   $emp_tipo_suscripcion_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->emp_tipo_suscripcion_1))
          {
              foreach ($this->emp_tipo_suscripcion_1 as $tmp_emp_tipo_suscripcion)
              {
                  if (trim($tmp_emp_tipo_suscripcion) === trim($cadaselect[1])) {$emp_tipo_suscripcion_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->emp_tipo_suscripcion) && trim($this->emp_tipo_suscripcion) === trim($cadaselect[1])) {$emp_tipo_suscripcion_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="emp_tipo_suscripcion" value="<?php echo $this->form_encode_input($emp_tipo_suscripcion) . "\">" . $emp_tipo_suscripcion_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_emp_tipo_suscripcion();
   $x = 0 ; 
   $emp_tipo_suscripcion_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->emp_tipo_suscripcion_1))
          {
              foreach ($this->emp_tipo_suscripcion_1 as $tmp_emp_tipo_suscripcion)
              {
                  if (trim($tmp_emp_tipo_suscripcion) === trim($cadaselect[1])) {$emp_tipo_suscripcion_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->emp_tipo_suscripcion) && trim($this->emp_tipo_suscripcion) === trim($cadaselect[1])) {$emp_tipo_suscripcion_look .= $cadaselect[0];} 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_emp_tipo_suscripcion\" class=\"css_emp_tipo_suscripcion_line\" style=\"" .  $sStyleReadLab_emp_tipo_suscripcion . "\">" . $this->form_format_readonly("emp_tipo_suscripcion", $this->form_encode_input($emp_tipo_suscripcion_look)) . "</span><span id=\"id_read_off_emp_tipo_suscripcion\" class=\"css_read_off_emp_tipo_suscripcion css_emp_tipo_suscripcion_line\" style=\"" . $sStyleReadInp_emp_tipo_suscripcion . "\">";
   echo "<div id=\"idAjaxRadio_emp_tipo_suscripcion\" class=\"css_emp_tipo_suscripcion_line\" style=\"display: inline-block\">\r\n";
   $y = 0 ; 
   echo "<table cellspacing=0 cellpadding=0 border=0>\r\n";
   echo " <tr>\r\n";
   while (!empty($todo[$x])) 
   {
          $cadaradio = explode("?#?", $todo[$x]) ; 
          if ($cadaradio[1] == "@ ") {$cadaradio[1]= trim($cadaradio[1]); } ; 
          if ($y == 1)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOdd css_emp_tipo_suscripcion_line\">\r\n";
          echo "      <div class=\"sc radio\">";
          $tempOptionId = "id-opt-emp_tipo_suscripcion-" . $x;
          echo "    <input id=\"" . $tempOptionId . "\" type=radio name=\"emp_tipo_suscripcion\" value=\"$cadaradio[1]\" class=\"sc-ui-radio-emp_tipo_suscripcion sc-ui-radio-emp_tipo_suscripcion\"";
          if (trim($this->emp_tipo_suscripcion) === trim($cadaradio[1])) 
          { 
              echo " checked" ; 
          } 
          if (strtoupper($cadaradio[2]) == "S") 
          { 
              if (empty($this->emp_tipo_suscripcion)) 
              { 
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"" . $sCheckInsert . "\" >" ; 
          echo "<span></span>";
          echo "<label for=\"" . $tempOptionId . "\">" . $cadaradio[0] . "</label>";
          echo "      </div>";
          $x++ ; 
          $y++ ; 
          echo "  </font></td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_emp_tipo_suscripcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_emp_tipo_suscripcion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
