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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_sustento'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_sustento'] . ""); } ?></TITLE>
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
                       'scrollUpPosition' => 'A',
                       'toolbarOrientation' => 'H',
                       'mobilePanes' => 'true',
                       'navigationBarButtons' => unserialize('a:3:{i:0;s:2:"NP";i:1;s:2:"FL";i:2;s:2:"RC";}'),
                       'mobileSimpleToolbar' => true,
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/viewerjs/viewer.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/viewerjs/viewer.js"></SCRIPT>
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
.css_read_off_sr_fechaemision button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_sr_fecha_registro_contable button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['embutida_pdf']))
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
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_sustento_retencion/form_del_sustento_retencion_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_sustento_retencion_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['last'] : 'off'); ?>";
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
<?php

include_once('form_del_sustento_retencion_mob_jquery.php');

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
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $("#hidden_bloco_2,#hidden_bloco_3,#hidden_bloco_4,#hidden_bloco_5").each(function() {
   $(this.rows[0]).bind("click", {block: this}, toggleBlock)
                  .mouseover(function() { $(this).css("cursor", "pointer"); })
                  .mouseout(function() { $(this).css("cursor", ""); });
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
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
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
    "hidden_bloco_2": true,
    "hidden_bloco_3": true,
    "hidden_bloco_4": true,
    "hidden_bloco_5": true
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

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
    if ("hidden_bloco_4" == block_id) {
      scAjaxDetailHeight("form_del_impuesto_sustento_retencion", $($("#nmsc_iframe_liga_form_del_impuesto_sustento_retencion")[0].contentWindow.document).innerHeight());
    }
    if ("hidden_bloco_5" == block_id) {
      scAjaxDetailHeight("form_del_forma_pago_sustento_retencion", $($("#nmsc_iframe_liga_form_del_forma_pago_sustento_retencion")[0].contentWindow.document).innerHeight());
    }
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_del_sustento_retencion']['error_buffer']) && '' != $_SESSION['scriptcase']['form_del_sustento_retencion']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_del_sustento_retencion']['error_buffer'];
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
 include_once("form_del_sustento_retencion_mob_js0.php");
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
<form  name="F1" method="post" 
               action="form_del_sustento_retencion_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['insert_validation']; ?>">
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
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_del_sustento_retencion_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_sustento_retencion_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['new'];
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
        $buttonMacroDisabled = 'sc-unique-btn-10';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['update'];
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
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Delete)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_2";
        echo "<img id=\"NM_sep_2\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['sr_id']))
   {
       $this->nmgp_cmp_hidden['sr_id'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['sr_retencion']))
   {
       $this->nmgp_cmp_hidden['sr_retencion'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['sr_pais_pago']))
   {
       $this->nmgp_cmp_hidden['sr_pais_pago'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_documento_sustento'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_fechaemision']))
    {
        $this->nm_new_label['sr_fechaemision'] = "" . $this->Ini->Nm_lang['lang_fecha_emision'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_fechaemision = $this->sr_fechaemision;
   $sStyleHidden_sr_fechaemision = '';
   if (isset($this->nmgp_cmp_hidden['sr_fechaemision']) && $this->nmgp_cmp_hidden['sr_fechaemision'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_fechaemision']);
       $sStyleHidden_sr_fechaemision = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_fechaemision = 'display: none;';
   $sStyleReadInp_sr_fechaemision = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_fechaemision']) && $this->nmgp_cmp_readonly['sr_fechaemision'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_fechaemision']);
       $sStyleReadLab_sr_fechaemision = '';
       $sStyleReadInp_sr_fechaemision = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_fechaemision']) && $this->nmgp_cmp_hidden['sr_fechaemision'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_fechaemision" value="<?php echo $this->form_encode_input($sr_fechaemision) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_fechaemision_line" id="hidden_field_data_sr_fechaemision" style="<?php echo $sStyleHidden_sr_fechaemision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_fechaemision_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_fechaemision_label" style=""><span id="id_label_sr_fechaemision"><?php echo $this->nm_new_label['sr_fechaemision']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['php_cmp_required']['sr_fechaemision']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['php_cmp_required']['sr_fechaemision'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_fechaemision"]) &&  $this->nmgp_cmp_readonly["sr_fechaemision"] == "on") { 

 ?>
<input type="hidden" name="sr_fechaemision" value="<?php echo $this->form_encode_input($sr_fechaemision) . "\">" . $sr_fechaemision . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_fechaemision" class="sc-ui-readonly-sr_fechaemision css_sr_fechaemision_line" style="<?php echo $sStyleReadLab_sr_fechaemision; ?>"><?php echo $this->form_format_readonly("sr_fechaemision", $this->form_encode_input($sr_fechaemision)); ?></span><span id="id_read_off_sr_fechaemision" class="css_read_off_sr_fechaemision<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_fechaemision; ?>"><?php
$tmp_form_data = $this->field_config['sr_fechaemision']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_sr_fechaemision_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_fechaemision" type=text name="sr_fechaemision" value="<?php echo $this->form_encode_input($sr_fechaemision) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['sr_fechaemision']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['sr_fechaemision']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_fechaemision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_fechaemision_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_fecha_registro_contable']))
    {
        $this->nm_new_label['sr_fecha_registro_contable'] = "" . $this->Ini->Nm_lang['lang_fecha_registro_contable'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $sStyleHidden_sr_fecha_registro_contable = '';
   if (isset($this->nmgp_cmp_hidden['sr_fecha_registro_contable']) && $this->nmgp_cmp_hidden['sr_fecha_registro_contable'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_fecha_registro_contable']);
       $sStyleHidden_sr_fecha_registro_contable = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_fecha_registro_contable = 'display: none;';
   $sStyleReadInp_sr_fecha_registro_contable = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_fecha_registro_contable']) && $this->nmgp_cmp_readonly['sr_fecha_registro_contable'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_fecha_registro_contable']);
       $sStyleReadLab_sr_fecha_registro_contable = '';
       $sStyleReadInp_sr_fecha_registro_contable = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_fecha_registro_contable']) && $this->nmgp_cmp_hidden['sr_fecha_registro_contable'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_fecha_registro_contable" value="<?php echo $this->form_encode_input($sr_fecha_registro_contable) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_fecha_registro_contable_line" id="hidden_field_data_sr_fecha_registro_contable" style="<?php echo $sStyleHidden_sr_fecha_registro_contable; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_fecha_registro_contable_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_fecha_registro_contable_label" style=""><span id="id_label_sr_fecha_registro_contable"><?php echo $this->nm_new_label['sr_fecha_registro_contable']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['php_cmp_required']['sr_fecha_registro_contable']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['php_cmp_required']['sr_fecha_registro_contable'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_fecha_registro_contable"]) &&  $this->nmgp_cmp_readonly["sr_fecha_registro_contable"] == "on") { 

 ?>
<input type="hidden" name="sr_fecha_registro_contable" value="<?php echo $this->form_encode_input($sr_fecha_registro_contable) . "\">" . $sr_fecha_registro_contable . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_fecha_registro_contable" class="sc-ui-readonly-sr_fecha_registro_contable css_sr_fecha_registro_contable_line" style="<?php echo $sStyleReadLab_sr_fecha_registro_contable; ?>"><?php echo $this->form_format_readonly("sr_fecha_registro_contable", $this->form_encode_input($sr_fecha_registro_contable)); ?></span><span id="id_read_off_sr_fecha_registro_contable" class="css_read_off_sr_fecha_registro_contable<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_fecha_registro_contable; ?>"><?php
$tmp_form_data = $this->field_config['sr_fecha_registro_contable']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_sr_fecha_registro_contable_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_fecha_registro_contable" type=text name="sr_fecha_registro_contable" value="<?php echo $this->form_encode_input($sr_fecha_registro_contable) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['sr_fecha_registro_contable']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['sr_fecha_registro_contable']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_fecha_registro_contable_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_fecha_registro_contable_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sr_cod_docsustento']))
   {
       $this->nm_new_label['sr_cod_docsustento'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_cod_docsustento = $this->sr_cod_docsustento;
   $sStyleHidden_sr_cod_docsustento = '';
   if (isset($this->nmgp_cmp_hidden['sr_cod_docsustento']) && $this->nmgp_cmp_hidden['sr_cod_docsustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_cod_docsustento']);
       $sStyleHidden_sr_cod_docsustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_cod_docsustento = 'display: none;';
   $sStyleReadInp_sr_cod_docsustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_cod_docsustento']) && $this->nmgp_cmp_readonly['sr_cod_docsustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_cod_docsustento']);
       $sStyleReadLab_sr_cod_docsustento = '';
       $sStyleReadInp_sr_cod_docsustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_cod_docsustento']) && $this->nmgp_cmp_hidden['sr_cod_docsustento'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sr_cod_docsustento" value="<?php echo $this->form_encode_input($this->sr_cod_docsustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_cod_docsustento_line" id="hidden_field_data_sr_cod_docsustento" style="<?php echo $sStyleHidden_sr_cod_docsustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_cod_docsustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_cod_docsustento_label" style=""><span id="id_label_sr_cod_docsustento"><?php echo $this->nm_new_label['sr_cod_docsustento']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['php_cmp_required']['sr_cod_docsustento']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['php_cmp_required']['sr_cod_docsustento'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_cod_docsustento"]) &&  $this->nmgp_cmp_readonly["sr_cod_docsustento"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento'] = array(); 
    }

   $old_value_sr_fechaemision = $this->sr_fechaemision;
   $old_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $old_value_sr_id = $this->sr_id;
   $old_value_sr_secuencial = $this->sr_secuencial;
   $old_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $old_value_sr_importe_total = $this->sr_importe_total;
   $old_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $old_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $old_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_sr_fechaemision = $this->sr_fechaemision;
   $unformatted_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $unformatted_value_sr_id = $this->sr_id;
   $unformatted_value_sr_secuencial = $this->sr_secuencial;
   $unformatted_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $unformatted_value_sr_importe_total = $this->sr_importe_total;
   $unformatted_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $unformatted_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $unformatted_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;

   $nm_comando = "SELECT tc_codigo, tc_nombre  FROM sri_tipo_comprobante  WHERE  tc_estado='V' ORDER BY tc_nombre";

   $this->sr_fechaemision = $old_value_sr_fechaemision;
   $this->sr_fecha_registro_contable = $old_value_sr_fecha_registro_contable;
   $this->sr_id = $old_value_sr_id;
   $this->sr_secuencial = $old_value_sr_secuencial;
   $this->sr_total_sin_impuestos = $old_value_sr_total_sin_impuestos;
   $this->sr_importe_total = $old_value_sr_importe_total;
   $this->sr_total_reembolsos = $old_value_sr_total_reembolsos;
   $this->sr_total_baseimponible_reembolsos = $old_value_sr_total_baseimponible_reembolsos;
   $this->sr_total_impuesto_reeemboso = $old_value_sr_total_impuesto_reeemboso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento'][] = $rs->fields[0];
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
   $sr_cod_docsustento_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_cod_docsustento_1))
          {
              foreach ($this->sr_cod_docsustento_1 as $tmp_sr_cod_docsustento)
              {
                  if (trim($tmp_sr_cod_docsustento) === trim($cadaselect[1])) {$sr_cod_docsustento_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_cod_docsustento) && trim($this->sr_cod_docsustento) === trim($cadaselect[1])) {$sr_cod_docsustento_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="sr_cod_docsustento" value="<?php echo $this->form_encode_input($sr_cod_docsustento) . "\">" . $sr_cod_docsustento_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_sr_cod_docsustento();
   $x = 0 ; 
   $sr_cod_docsustento_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_cod_docsustento_1))
          {
              foreach ($this->sr_cod_docsustento_1 as $tmp_sr_cod_docsustento)
              {
                  if (trim($tmp_sr_cod_docsustento) === trim($cadaselect[1])) {$sr_cod_docsustento_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_cod_docsustento) && trim($this->sr_cod_docsustento) === trim($cadaselect[1])) { $sr_cod_docsustento_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($sr_cod_docsustento_look))
          {
              $sr_cod_docsustento_look = $this->sr_cod_docsustento;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_sr_cod_docsustento\" class=\"css_sr_cod_docsustento_line\" style=\"" .  $sStyleReadLab_sr_cod_docsustento . "\">" . $this->form_format_readonly("sr_cod_docsustento", $this->form_encode_input($sr_cod_docsustento_look)) . "</span><span id=\"id_read_off_sr_cod_docsustento\" class=\"css_read_off_sr_cod_docsustento" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_sr_cod_docsustento . "\">";
   echo " <span id=\"idAjaxSelect_sr_cod_docsustento\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_sr_cod_docsustento_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_sr_cod_docsustento\" name=\"sr_cod_docsustento\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_docsustento'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->sr_cod_docsustento) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->sr_cod_docsustento)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_cod_docsustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_cod_docsustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['sr_id']))
           {
               $this->nmgp_cmp_readonly['sr_id'] = 'on';
           }
?>


   <?php
   if (!isset($this->nm_new_label['sr_cod_sustento']))
   {
       $this->nm_new_label['sr_cod_sustento'] = "" . $this->Ini->Nm_lang['lang_sustento_tributario'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_cod_sustento = $this->sr_cod_sustento;
   $sStyleHidden_sr_cod_sustento = '';
   if (isset($this->nmgp_cmp_hidden['sr_cod_sustento']) && $this->nmgp_cmp_hidden['sr_cod_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_cod_sustento']);
       $sStyleHidden_sr_cod_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_cod_sustento = 'display: none;';
   $sStyleReadInp_sr_cod_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_cod_sustento']) && $this->nmgp_cmp_readonly['sr_cod_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_cod_sustento']);
       $sStyleReadLab_sr_cod_sustento = '';
       $sStyleReadInp_sr_cod_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_cod_sustento']) && $this->nmgp_cmp_hidden['sr_cod_sustento'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sr_cod_sustento" value="<?php echo $this->form_encode_input($this->sr_cod_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_cod_sustento_line" id="hidden_field_data_sr_cod_sustento" style="<?php echo $sStyleHidden_sr_cod_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_cod_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_cod_sustento_label" style=""><span id="id_label_sr_cod_sustento"><?php echo $this->nm_new_label['sr_cod_sustento']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['php_cmp_required']['sr_cod_sustento']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['php_cmp_required']['sr_cod_sustento'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_cod_sustento"]) &&  $this->nmgp_cmp_readonly["sr_cod_sustento"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento'] = array(); 
    }

   $old_value_sr_fechaemision = $this->sr_fechaemision;
   $old_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $old_value_sr_id = $this->sr_id;
   $old_value_sr_secuencial = $this->sr_secuencial;
   $old_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $old_value_sr_importe_total = $this->sr_importe_total;
   $old_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $old_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $old_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_sr_fechaemision = $this->sr_fechaemision;
   $unformatted_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $unformatted_value_sr_id = $this->sr_id;
   $unformatted_value_sr_secuencial = $this->sr_secuencial;
   $unformatted_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $unformatted_value_sr_importe_total = $this->sr_importe_total;
   $unformatted_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $unformatted_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $unformatted_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;

   $nm_comando = "SELECT cs_sustento, stg_descripcion FROM sri_comprobante_sustento  inner join sri_sustento_tributario_gasto on cs_sustento=stg_codigo WHERE cs_comprobante='$this->sr_cod_docsustento' and cs_estado='V' order by cs_sustento";

   $this->sr_fechaemision = $old_value_sr_fechaemision;
   $this->sr_fecha_registro_contable = $old_value_sr_fecha_registro_contable;
   $this->sr_id = $old_value_sr_id;
   $this->sr_secuencial = $old_value_sr_secuencial;
   $this->sr_total_sin_impuestos = $old_value_sr_total_sin_impuestos;
   $this->sr_importe_total = $old_value_sr_importe_total;
   $this->sr_total_reembolsos = $old_value_sr_total_reembolsos;
   $this->sr_total_baseimponible_reembolsos = $old_value_sr_total_baseimponible_reembolsos;
   $this->sr_total_impuesto_reeemboso = $old_value_sr_total_impuesto_reeemboso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento'][] = $rs->fields[0];
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
   $sr_cod_sustento_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_cod_sustento_1))
          {
              foreach ($this->sr_cod_sustento_1 as $tmp_sr_cod_sustento)
              {
                  if (trim($tmp_sr_cod_sustento) === trim($cadaselect[1])) {$sr_cod_sustento_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_cod_sustento) && trim($this->sr_cod_sustento) === trim($cadaselect[1])) {$sr_cod_sustento_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="sr_cod_sustento" value="<?php echo $this->form_encode_input($sr_cod_sustento) . "\">" . $sr_cod_sustento_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_sr_cod_sustento();
   $x = 0 ; 
   $sr_cod_sustento_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_cod_sustento_1))
          {
              foreach ($this->sr_cod_sustento_1 as $tmp_sr_cod_sustento)
              {
                  if (trim($tmp_sr_cod_sustento) === trim($cadaselect[1])) {$sr_cod_sustento_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_cod_sustento) && trim($this->sr_cod_sustento) === trim($cadaselect[1])) { $sr_cod_sustento_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($sr_cod_sustento_look))
          {
              $sr_cod_sustento_look = $this->sr_cod_sustento;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_sr_cod_sustento\" class=\"css_sr_cod_sustento_line\" style=\"" .  $sStyleReadLab_sr_cod_sustento . "\">" . $this->form_format_readonly("sr_cod_sustento", $this->form_encode_input($sr_cod_sustento_look)) . "</span><span id=\"id_read_off_sr_cod_sustento\" class=\"css_read_off_sr_cod_sustento" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_sr_cod_sustento . "\">";
   echo " <span id=\"idAjaxSelect_sr_cod_sustento\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_sr_cod_sustento_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_sr_cod_sustento\" name=\"sr_cod_sustento\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_cod_sustento'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->sr_cod_sustento) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->sr_cod_sustento)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_cod_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_cod_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_id']))
    {
        $this->nm_new_label['sr_id'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_id = $this->sr_id;
   if (!isset($this->nmgp_cmp_hidden['sr_id']))
   {
       $this->nmgp_cmp_hidden['sr_id'] = 'off';
   }
   $sStyleHidden_sr_id = '';
   if (isset($this->nmgp_cmp_hidden['sr_id']) && $this->nmgp_cmp_hidden['sr_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_id']);
       $sStyleHidden_sr_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_id = 'display: none;';
   $sStyleReadInp_sr_id = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["sr_id"]) &&  $this->nmgp_cmp_readonly["sr_id"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_id']);
       $sStyleReadLab_sr_id = '';
       $sStyleReadInp_sr_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_id']) && $this->nmgp_cmp_hidden['sr_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_id" value="<?php echo $this->form_encode_input($sr_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd css_sr_id_line" id="hidden_field_data_sr_id" style="<?php echo $sStyleHidden_sr_id; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_id_label" style=""><span id="id_label_sr_id"><?php echo $this->nm_new_label['sr_id']; ?></span></span><br><span id="id_read_on_sr_id" class="css_sr_id_line" style="<?php echo $sStyleReadLab_sr_id; ?>"><?php echo $this->form_format_readonly("sr_id", $this->form_encode_input($this->sr_id)); ?></span><span id="id_read_off_sr_id" class="css_read_off_sr_id" style="<?php echo $sStyleReadInp_sr_id; ?>"><input type="hidden" name="sr_id" value="<?php echo $this->form_encode_input($sr_id) . "\">"?><span id="id_ajax_label_sr_id"><?php echo nl2br($sr_id); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_retencion']))
    {
        $this->nm_new_label['sr_retencion'] = "" . $this->Ini->Nm_lang['lang_retencion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_retencion = $this->sr_retencion;
   if (!isset($this->nmgp_cmp_hidden['sr_retencion']))
   {
       $this->nmgp_cmp_hidden['sr_retencion'] = 'off';
   }
   $sStyleHidden_sr_retencion = '';
   if (isset($this->nmgp_cmp_hidden['sr_retencion']) && $this->nmgp_cmp_hidden['sr_retencion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_retencion']);
       $sStyleHidden_sr_retencion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_retencion = 'display: none;';
   $sStyleReadInp_sr_retencion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_retencion']) && $this->nmgp_cmp_readonly['sr_retencion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_retencion']);
       $sStyleReadLab_sr_retencion = '';
       $sStyleReadInp_sr_retencion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_retencion']) && $this->nmgp_cmp_hidden['sr_retencion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_retencion" value="<?php echo $this->form_encode_input($sr_retencion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_retencion_line" id="hidden_field_data_sr_retencion" style="<?php echo $sStyleHidden_sr_retencion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_retencion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_retencion_label" style=""><span id="id_label_sr_retencion"><?php echo $this->nm_new_label['sr_retencion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_retencion"]) &&  $this->nmgp_cmp_readonly["sr_retencion"] == "on") { 

 ?>
<input type="hidden" name="sr_retencion" value="<?php echo $this->form_encode_input($sr_retencion) . "\">" . $sr_retencion . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_retencion" class="sc-ui-readonly-sr_retencion css_sr_retencion_line" style="<?php echo $sStyleReadLab_sr_retencion; ?>"><?php echo $this->form_format_readonly("sr_retencion", $this->form_encode_input($this->sr_retencion)); ?></span><span id="id_read_off_sr_retencion" class="css_read_off_sr_retencion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_retencion; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_retencion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_retencion" type=text name="sr_retencion" value="<?php echo $this->form_encode_input($sr_retencion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_retencion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_retencion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_sr_retencion_dumb = ('' == $sStyleHidden_sr_retencion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_sr_retencion_dumb" style="<?php echo $sStyleHidden_sr_retencion_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_doc_sustento'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_serie']))
    {
        $this->nm_new_label['sr_serie'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_serie = $this->sr_serie;
   $sStyleHidden_sr_serie = '';
   if (isset($this->nmgp_cmp_hidden['sr_serie']) && $this->nmgp_cmp_hidden['sr_serie'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_serie']);
       $sStyleHidden_sr_serie = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_serie = 'display: none;';
   $sStyleReadInp_sr_serie = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_serie']) && $this->nmgp_cmp_readonly['sr_serie'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_serie']);
       $sStyleReadLab_sr_serie = '';
       $sStyleReadInp_sr_serie = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_serie']) && $this->nmgp_cmp_hidden['sr_serie'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_serie" value="<?php echo $this->form_encode_input($sr_serie) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_serie_line" id="hidden_field_data_sr_serie" style="<?php echo $sStyleHidden_sr_serie; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_serie_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_serie_label" style=""><span id="id_label_sr_serie"><?php echo $this->nm_new_label['sr_serie']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_serie"]) &&  $this->nmgp_cmp_readonly["sr_serie"] == "on") { 

 ?>
<input type="hidden" name="sr_serie" value="<?php echo $this->form_encode_input($sr_serie) . "\">" . $sr_serie . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_serie" class="sc-ui-readonly-sr_serie css_sr_serie_line" style="<?php echo $sStyleReadLab_sr_serie; ?>"><?php echo $this->form_format_readonly("sr_serie", $this->form_encode_input($this->sr_serie)); ?></span><span id="id_read_off_sr_serie" class="css_read_off_sr_serie<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_serie; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_serie_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_serie" type=text name="sr_serie" value="<?php echo $this->form_encode_input($sr_serie) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=6"; } ?> maxlength=6 alt="{datatype: 'text', maxLength: 6, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_serie_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_serie_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_secuencial']))
    {
        $this->nm_new_label['sr_secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_secuencial = $this->sr_secuencial;
   $sStyleHidden_sr_secuencial = '';
   if (isset($this->nmgp_cmp_hidden['sr_secuencial']) && $this->nmgp_cmp_hidden['sr_secuencial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_secuencial']);
       $sStyleHidden_sr_secuencial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_secuencial = 'display: none;';
   $sStyleReadInp_sr_secuencial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_secuencial']) && $this->nmgp_cmp_readonly['sr_secuencial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_secuencial']);
       $sStyleReadLab_sr_secuencial = '';
       $sStyleReadInp_sr_secuencial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_secuencial']) && $this->nmgp_cmp_hidden['sr_secuencial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_secuencial" value="<?php echo $this->form_encode_input($sr_secuencial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_secuencial_line" id="hidden_field_data_sr_secuencial" style="<?php echo $sStyleHidden_sr_secuencial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_secuencial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_secuencial_label" style=""><span id="id_label_sr_secuencial"><?php echo $this->nm_new_label['sr_secuencial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_secuencial"]) &&  $this->nmgp_cmp_readonly["sr_secuencial"] == "on") { 

 ?>
<input type="hidden" name="sr_secuencial" value="<?php echo $this->form_encode_input($sr_secuencial) . "\">" . $sr_secuencial . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_secuencial" class="sc-ui-readonly-sr_secuencial css_sr_secuencial_line" style="<?php echo $sStyleReadLab_sr_secuencial; ?>"><?php echo $this->form_format_readonly("sr_secuencial", $this->form_encode_input($this->sr_secuencial)); ?></span><span id="id_read_off_sr_secuencial" class="css_read_off_sr_secuencial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_secuencial; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_secuencial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_secuencial" type=text name="sr_secuencial" value="<?php echo $this->form_encode_input($sr_secuencial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['sr_secuencial']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['sr_secuencial']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_autorizacion']))
    {
        $this->nm_new_label['sr_autorizacion'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_autorizacion = $this->sr_autorizacion;
   $sStyleHidden_sr_autorizacion = '';
   if (isset($this->nmgp_cmp_hidden['sr_autorizacion']) && $this->nmgp_cmp_hidden['sr_autorizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_autorizacion']);
       $sStyleHidden_sr_autorizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_autorizacion = 'display: none;';
   $sStyleReadInp_sr_autorizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_autorizacion']) && $this->nmgp_cmp_readonly['sr_autorizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_autorizacion']);
       $sStyleReadLab_sr_autorizacion = '';
       $sStyleReadInp_sr_autorizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_autorizacion']) && $this->nmgp_cmp_hidden['sr_autorizacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_autorizacion" value="<?php echo $this->form_encode_input($sr_autorizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_autorizacion_line" id="hidden_field_data_sr_autorizacion" style="<?php echo $sStyleHidden_sr_autorizacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_autorizacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_autorizacion_label" style=""><span id="id_label_sr_autorizacion"><?php echo $this->nm_new_label['sr_autorizacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_autorizacion"]) &&  $this->nmgp_cmp_readonly["sr_autorizacion"] == "on") { 

 ?>
<input type="hidden" name="sr_autorizacion" value="<?php echo $this->form_encode_input($sr_autorizacion) . "\">" . $sr_autorizacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_autorizacion" class="sc-ui-readonly-sr_autorizacion css_sr_autorizacion_line" style="<?php echo $sStyleReadLab_sr_autorizacion; ?>"><?php echo $this->form_format_readonly("sr_autorizacion", $this->form_encode_input($this->sr_autorizacion)); ?></span><span id="id_read_off_sr_autorizacion" class="css_read_off_sr_autorizacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_autorizacion; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_autorizacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_autorizacion" type=text name="sr_autorizacion" value="<?php echo $this->form_encode_input($sr_autorizacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=49"; } ?> maxlength=49 alt="{datatype: 'text', maxLength: 49, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_autorizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_autorizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_total_sin_impuestos']))
    {
        $this->nm_new_label['sr_total_sin_impuestos'] = "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $sStyleHidden_sr_total_sin_impuestos = '';
   if (isset($this->nmgp_cmp_hidden['sr_total_sin_impuestos']) && $this->nmgp_cmp_hidden['sr_total_sin_impuestos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_total_sin_impuestos']);
       $sStyleHidden_sr_total_sin_impuestos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_total_sin_impuestos = 'display: none;';
   $sStyleReadInp_sr_total_sin_impuestos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_total_sin_impuestos']) && $this->nmgp_cmp_readonly['sr_total_sin_impuestos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_total_sin_impuestos']);
       $sStyleReadLab_sr_total_sin_impuestos = '';
       $sStyleReadInp_sr_total_sin_impuestos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_total_sin_impuestos']) && $this->nmgp_cmp_hidden['sr_total_sin_impuestos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_total_sin_impuestos" value="<?php echo $this->form_encode_input($sr_total_sin_impuestos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_total_sin_impuestos_line" id="hidden_field_data_sr_total_sin_impuestos" style="<?php echo $sStyleHidden_sr_total_sin_impuestos; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_total_sin_impuestos_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_total_sin_impuestos_label" style=""><span id="id_label_sr_total_sin_impuestos"><?php echo $this->nm_new_label['sr_total_sin_impuestos']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_total_sin_impuestos"]) &&  $this->nmgp_cmp_readonly["sr_total_sin_impuestos"] == "on") { 

 ?>
<input type="hidden" name="sr_total_sin_impuestos" value="<?php echo $this->form_encode_input($sr_total_sin_impuestos) . "\">" . $sr_total_sin_impuestos . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_total_sin_impuestos" class="sc-ui-readonly-sr_total_sin_impuestos css_sr_total_sin_impuestos_line" style="<?php echo $sStyleReadLab_sr_total_sin_impuestos; ?>"><?php echo $this->form_format_readonly("sr_total_sin_impuestos", $this->form_encode_input($this->sr_total_sin_impuestos)); ?></span><span id="id_read_off_sr_total_sin_impuestos" class="css_read_off_sr_total_sin_impuestos<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_total_sin_impuestos; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_total_sin_impuestos_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_total_sin_impuestos" type=text name="sr_total_sin_impuestos" value="<?php echo $this->form_encode_input($sr_total_sin_impuestos) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['sr_total_sin_impuestos']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['sr_total_sin_impuestos']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['sr_total_sin_impuestos']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_total_sin_impuestos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_total_sin_impuestos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_importe_total']))
    {
        $this->nm_new_label['sr_importe_total'] = "" . $this->Ini->Nm_lang['lang_total'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_importe_total = $this->sr_importe_total;
   $sStyleHidden_sr_importe_total = '';
   if (isset($this->nmgp_cmp_hidden['sr_importe_total']) && $this->nmgp_cmp_hidden['sr_importe_total'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_importe_total']);
       $sStyleHidden_sr_importe_total = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_importe_total = 'display: none;';
   $sStyleReadInp_sr_importe_total = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_importe_total']) && $this->nmgp_cmp_readonly['sr_importe_total'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_importe_total']);
       $sStyleReadLab_sr_importe_total = '';
       $sStyleReadInp_sr_importe_total = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_importe_total']) && $this->nmgp_cmp_hidden['sr_importe_total'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_importe_total" value="<?php echo $this->form_encode_input($sr_importe_total) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_importe_total_line" id="hidden_field_data_sr_importe_total" style="<?php echo $sStyleHidden_sr_importe_total; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_importe_total_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_importe_total_label" style=""><span id="id_label_sr_importe_total"><?php echo $this->nm_new_label['sr_importe_total']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_importe_total"]) &&  $this->nmgp_cmp_readonly["sr_importe_total"] == "on") { 

 ?>
<input type="hidden" name="sr_importe_total" value="<?php echo $this->form_encode_input($sr_importe_total) . "\">" . $sr_importe_total . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_importe_total" class="sc-ui-readonly-sr_importe_total css_sr_importe_total_line" style="<?php echo $sStyleReadLab_sr_importe_total; ?>"><?php echo $this->form_format_readonly("sr_importe_total", $this->form_encode_input($this->sr_importe_total)); ?></span><span id="id_read_off_sr_importe_total" class="css_read_off_sr_importe_total<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_importe_total; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_importe_total_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_importe_total" type=text name="sr_importe_total" value="<?php echo $this->form_encode_input($sr_importe_total) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['sr_importe_total']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['sr_importe_total']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['sr_importe_total']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_importe_total_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_importe_total_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sr_pago_loc_ext']))
   {
       $this->nm_new_label['sr_pago_loc_ext'] = "" . $this->Ini->Nm_lang['lang_forma_pago'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_pago_loc_ext = $this->sr_pago_loc_ext;
   $sStyleHidden_sr_pago_loc_ext = '';
   if (isset($this->nmgp_cmp_hidden['sr_pago_loc_ext']) && $this->nmgp_cmp_hidden['sr_pago_loc_ext'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_pago_loc_ext']);
       $sStyleHidden_sr_pago_loc_ext = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_pago_loc_ext = 'display: none;';
   $sStyleReadInp_sr_pago_loc_ext = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_pago_loc_ext']) && $this->nmgp_cmp_readonly['sr_pago_loc_ext'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_pago_loc_ext']);
       $sStyleReadLab_sr_pago_loc_ext = '';
       $sStyleReadInp_sr_pago_loc_ext = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_pago_loc_ext']) && $this->nmgp_cmp_hidden['sr_pago_loc_ext'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sr_pago_loc_ext" value="<?php echo $this->form_encode_input($this->sr_pago_loc_ext) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_pago_loc_ext_line" id="hidden_field_data_sr_pago_loc_ext" style="<?php echo $sStyleHidden_sr_pago_loc_ext; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_pago_loc_ext_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_pago_loc_ext_label" style=""><span id="id_label_sr_pago_loc_ext"><?php echo $this->nm_new_label['sr_pago_loc_ext']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_pago_loc_ext"]) &&  $this->nmgp_cmp_readonly["sr_pago_loc_ext"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_loc_ext']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_loc_ext'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_loc_ext']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_loc_ext'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_loc_ext']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_loc_ext'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_loc_ext']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_loc_ext'] = array(); 
    }

   $old_value_sr_fechaemision = $this->sr_fechaemision;
   $old_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $old_value_sr_id = $this->sr_id;
   $old_value_sr_secuencial = $this->sr_secuencial;
   $old_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $old_value_sr_importe_total = $this->sr_importe_total;
   $old_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $old_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $old_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_sr_fechaemision = $this->sr_fechaemision;
   $unformatted_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $unformatted_value_sr_id = $this->sr_id;
   $unformatted_value_sr_secuencial = $this->sr_secuencial;
   $unformatted_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $unformatted_value_sr_importe_total = $this->sr_importe_total;
   $unformatted_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $unformatted_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $unformatted_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;

   $nm_comando = "SELECT tp_codigo, tp_descripcion  FROM ats_tipo_pago  WHERE tp_estado='V' ORDER BY tp_codigo";

   $this->sr_fechaemision = $old_value_sr_fechaemision;
   $this->sr_fecha_registro_contable = $old_value_sr_fecha_registro_contable;
   $this->sr_id = $old_value_sr_id;
   $this->sr_secuencial = $old_value_sr_secuencial;
   $this->sr_total_sin_impuestos = $old_value_sr_total_sin_impuestos;
   $this->sr_importe_total = $old_value_sr_importe_total;
   $this->sr_total_reembolsos = $old_value_sr_total_reembolsos;
   $this->sr_total_baseimponible_reembolsos = $old_value_sr_total_baseimponible_reembolsos;
   $this->sr_total_impuesto_reeemboso = $old_value_sr_total_impuesto_reeemboso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_loc_ext'][] = $rs->fields[0];
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
   $sr_pago_loc_ext_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_pago_loc_ext_1))
          {
              foreach ($this->sr_pago_loc_ext_1 as $tmp_sr_pago_loc_ext)
              {
                  if (trim($tmp_sr_pago_loc_ext) === trim($cadaselect[1])) {$sr_pago_loc_ext_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_pago_loc_ext) && trim($this->sr_pago_loc_ext) === trim($cadaselect[1])) {$sr_pago_loc_ext_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="sr_pago_loc_ext" value="<?php echo $this->form_encode_input($sr_pago_loc_ext) . "\">" . $sr_pago_loc_ext_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_sr_pago_loc_ext();
   $x = 0 ; 
   $sr_pago_loc_ext_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_pago_loc_ext_1))
          {
              foreach ($this->sr_pago_loc_ext_1 as $tmp_sr_pago_loc_ext)
              {
                  if (trim($tmp_sr_pago_loc_ext) === trim($cadaselect[1])) {$sr_pago_loc_ext_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_pago_loc_ext) && trim($this->sr_pago_loc_ext) === trim($cadaselect[1])) { $sr_pago_loc_ext_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($sr_pago_loc_ext_look))
          {
              $sr_pago_loc_ext_look = $this->sr_pago_loc_ext;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_sr_pago_loc_ext\" class=\"css_sr_pago_loc_ext_line\" style=\"" .  $sStyleReadLab_sr_pago_loc_ext . "\">" . $this->form_format_readonly("sr_pago_loc_ext", $this->form_encode_input($sr_pago_loc_ext_look)) . "</span><span id=\"id_read_off_sr_pago_loc_ext\" class=\"css_read_off_sr_pago_loc_ext" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_sr_pago_loc_ext . "\">";
   echo " <span id=\"idAjaxSelect_sr_pago_loc_ext\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_sr_pago_loc_ext_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_sr_pago_loc_ext\" name=\"sr_pago_loc_ext\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->sr_pago_loc_ext) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->sr_pago_loc_ext)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_pago_loc_ext_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_pago_loc_ext_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_sr_pago_loc_ext_dumb = ('' == $sStyleHidden_sr_pago_loc_ext) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_sr_pago_loc_ext_dumb" style="<?php echo $sStyleHidden_sr_pago_loc_ext_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf2\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_pago_exterior'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sr_tipo_regimen']))
   {
       $this->nm_new_label['sr_tipo_regimen'] = "" . $this->Ini->Nm_lang['lang_tipo_regimen_exterior'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_tipo_regimen = $this->sr_tipo_regimen;
   $sStyleHidden_sr_tipo_regimen = '';
   if (isset($this->nmgp_cmp_hidden['sr_tipo_regimen']) && $this->nmgp_cmp_hidden['sr_tipo_regimen'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_tipo_regimen']);
       $sStyleHidden_sr_tipo_regimen = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_tipo_regimen = 'display: none;';
   $sStyleReadInp_sr_tipo_regimen = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_tipo_regimen']) && $this->nmgp_cmp_readonly['sr_tipo_regimen'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_tipo_regimen']);
       $sStyleReadLab_sr_tipo_regimen = '';
       $sStyleReadInp_sr_tipo_regimen = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_tipo_regimen']) && $this->nmgp_cmp_hidden['sr_tipo_regimen'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sr_tipo_regimen" value="<?php echo $this->form_encode_input($this->sr_tipo_regimen) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_tipo_regimen_line" id="hidden_field_data_sr_tipo_regimen" style="<?php echo $sStyleHidden_sr_tipo_regimen; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_tipo_regimen_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_tipo_regimen_label" style=""><span id="id_label_sr_tipo_regimen"><?php echo $this->nm_new_label['sr_tipo_regimen']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_tipo_regimen"]) &&  $this->nmgp_cmp_readonly["sr_tipo_regimen"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen'] = array(); 
    }

   $old_value_sr_fechaemision = $this->sr_fechaemision;
   $old_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $old_value_sr_id = $this->sr_id;
   $old_value_sr_secuencial = $this->sr_secuencial;
   $old_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $old_value_sr_importe_total = $this->sr_importe_total;
   $old_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $old_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $old_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_sr_fechaemision = $this->sr_fechaemision;
   $unformatted_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $unformatted_value_sr_id = $this->sr_id;
   $unformatted_value_sr_secuencial = $this->sr_secuencial;
   $unformatted_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $unformatted_value_sr_importe_total = $this->sr_importe_total;
   $unformatted_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $unformatted_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $unformatted_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;

   $nm_comando = "SELECT tre_codigo, tre_descripcion  FROM ats_tipo_regimen_exterior  WHERE tre_estado='V' ORDER BY tre_codigo";

   $this->sr_fechaemision = $old_value_sr_fechaemision;
   $this->sr_fecha_registro_contable = $old_value_sr_fecha_registro_contable;
   $this->sr_id = $old_value_sr_id;
   $this->sr_secuencial = $old_value_sr_secuencial;
   $this->sr_total_sin_impuestos = $old_value_sr_total_sin_impuestos;
   $this->sr_importe_total = $old_value_sr_importe_total;
   $this->sr_total_reembolsos = $old_value_sr_total_reembolsos;
   $this->sr_total_baseimponible_reembolsos = $old_value_sr_total_baseimponible_reembolsos;
   $this->sr_total_impuesto_reeemboso = $old_value_sr_total_impuesto_reeemboso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen'][] = $rs->fields[0];
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
   $sr_tipo_regimen_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_tipo_regimen_1))
          {
              foreach ($this->sr_tipo_regimen_1 as $tmp_sr_tipo_regimen)
              {
                  if (trim($tmp_sr_tipo_regimen) === trim($cadaselect[1])) {$sr_tipo_regimen_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_tipo_regimen) && trim($this->sr_tipo_regimen) === trim($cadaselect[1])) {$sr_tipo_regimen_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="sr_tipo_regimen" value="<?php echo $this->form_encode_input($sr_tipo_regimen) . "\">" . $sr_tipo_regimen_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_sr_tipo_regimen();
   $x = 0 ; 
   $sr_tipo_regimen_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_tipo_regimen_1))
          {
              foreach ($this->sr_tipo_regimen_1 as $tmp_sr_tipo_regimen)
              {
                  if (trim($tmp_sr_tipo_regimen) === trim($cadaselect[1])) {$sr_tipo_regimen_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_tipo_regimen) && trim($this->sr_tipo_regimen) === trim($cadaselect[1])) { $sr_tipo_regimen_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($sr_tipo_regimen_look))
          {
              $sr_tipo_regimen_look = $this->sr_tipo_regimen;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_sr_tipo_regimen\" class=\"css_sr_tipo_regimen_line\" style=\"" .  $sStyleReadLab_sr_tipo_regimen . "\">" . $this->form_format_readonly("sr_tipo_regimen", $this->form_encode_input($sr_tipo_regimen_look)) . "</span><span id=\"id_read_off_sr_tipo_regimen\" class=\"css_read_off_sr_tipo_regimen" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_sr_tipo_regimen . "\">";
   echo " <span id=\"idAjaxSelect_sr_tipo_regimen\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_sr_tipo_regimen_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_sr_tipo_regimen\" name=\"sr_tipo_regimen\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_tipo_regimen'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->sr_tipo_regimen) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->sr_tipo_regimen)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_tipo_regimen_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_tipo_regimen_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sr_pais']))
   {
       $this->nm_new_label['sr_pais'] = "" . $this->Ini->Nm_lang['lang_pais'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_pais = $this->sr_pais;
   $sStyleHidden_sr_pais = '';
   if (isset($this->nmgp_cmp_hidden['sr_pais']) && $this->nmgp_cmp_hidden['sr_pais'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_pais']);
       $sStyleHidden_sr_pais = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_pais = 'display: none;';
   $sStyleReadInp_sr_pais = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_pais']) && $this->nmgp_cmp_readonly['sr_pais'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_pais']);
       $sStyleReadLab_sr_pais = '';
       $sStyleReadInp_sr_pais = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_pais']) && $this->nmgp_cmp_hidden['sr_pais'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sr_pais" value="<?php echo $this->form_encode_input($this->sr_pais) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_pais_line" id="hidden_field_data_sr_pais" style="<?php echo $sStyleHidden_sr_pais; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_pais_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_pais_label" style=""><span id="id_label_sr_pais"><?php echo $this->nm_new_label['sr_pais']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_pais"]) &&  $this->nmgp_cmp_readonly["sr_pais"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pais'] = array(); 
    }

   $old_value_sr_fechaemision = $this->sr_fechaemision;
   $old_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $old_value_sr_id = $this->sr_id;
   $old_value_sr_secuencial = $this->sr_secuencial;
   $old_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $old_value_sr_importe_total = $this->sr_importe_total;
   $old_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $old_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $old_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_sr_fechaemision = $this->sr_fechaemision;
   $unformatted_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $unformatted_value_sr_id = $this->sr_id;
   $unformatted_value_sr_secuencial = $this->sr_secuencial;
   $unformatted_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $unformatted_value_sr_importe_total = $this->sr_importe_total;
   $unformatted_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $unformatted_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $unformatted_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;

   $nm_comando = "SELECT pai_codigo_sri, pai_nombre  FROM sis_pais  ORDER BY pai_nombre";

   $this->sr_fechaemision = $old_value_sr_fechaemision;
   $this->sr_fecha_registro_contable = $old_value_sr_fecha_registro_contable;
   $this->sr_id = $old_value_sr_id;
   $this->sr_secuencial = $old_value_sr_secuencial;
   $this->sr_total_sin_impuestos = $old_value_sr_total_sin_impuestos;
   $this->sr_importe_total = $old_value_sr_importe_total;
   $this->sr_total_reembolsos = $old_value_sr_total_reembolsos;
   $this->sr_total_baseimponible_reembolsos = $old_value_sr_total_baseimponible_reembolsos;
   $this->sr_total_impuesto_reeemboso = $old_value_sr_total_impuesto_reeemboso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pais'][] = $rs->fields[0];
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
   $sr_pais_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_pais_1))
          {
              foreach ($this->sr_pais_1 as $tmp_sr_pais)
              {
                  if (trim($tmp_sr_pais) === trim($cadaselect[1])) {$sr_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_pais) && trim($this->sr_pais) === trim($cadaselect[1])) {$sr_pais_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="sr_pais" value="<?php echo $this->form_encode_input($sr_pais) . "\">" . $sr_pais_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_sr_pais();
   $x = 0 ; 
   $sr_pais_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_pais_1))
          {
              foreach ($this->sr_pais_1 as $tmp_sr_pais)
              {
                  if (trim($tmp_sr_pais) === trim($cadaselect[1])) {$sr_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_pais) && trim($this->sr_pais) === trim($cadaselect[1])) { $sr_pais_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($sr_pais_look))
          {
              $sr_pais_look = $this->sr_pais;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_sr_pais\" class=\"css_sr_pais_line\" style=\"" .  $sStyleReadLab_sr_pais . "\">" . $this->form_format_readonly("sr_pais", $this->form_encode_input($sr_pais_look)) . "</span><span id=\"id_read_off_sr_pais\" class=\"css_read_off_sr_pais" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_sr_pais . "\">";
   echo " <span id=\"idAjaxSelect_sr_pais\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_sr_pais_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_sr_pais\" name=\"sr_pais\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->sr_pais) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->sr_pais)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_pais_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_pais_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sr_paraiso_fiscal']))
   {
       $this->nm_new_label['sr_paraiso_fiscal'] = "" . $this->Ini->Nm_lang['lang_paraiso_fiscal'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_paraiso_fiscal = $this->sr_paraiso_fiscal;
   $sStyleHidden_sr_paraiso_fiscal = '';
   if (isset($this->nmgp_cmp_hidden['sr_paraiso_fiscal']) && $this->nmgp_cmp_hidden['sr_paraiso_fiscal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_paraiso_fiscal']);
       $sStyleHidden_sr_paraiso_fiscal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_paraiso_fiscal = 'display: none;';
   $sStyleReadInp_sr_paraiso_fiscal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_paraiso_fiscal']) && $this->nmgp_cmp_readonly['sr_paraiso_fiscal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_paraiso_fiscal']);
       $sStyleReadLab_sr_paraiso_fiscal = '';
       $sStyleReadInp_sr_paraiso_fiscal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_paraiso_fiscal']) && $this->nmgp_cmp_hidden['sr_paraiso_fiscal'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sr_paraiso_fiscal" value="<?php echo $this->form_encode_input($this->sr_paraiso_fiscal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_paraiso_fiscal_line" id="hidden_field_data_sr_paraiso_fiscal" style="<?php echo $sStyleHidden_sr_paraiso_fiscal; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_paraiso_fiscal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_paraiso_fiscal_label" style=""><span id="id_label_sr_paraiso_fiscal"><?php echo $this->nm_new_label['sr_paraiso_fiscal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_paraiso_fiscal"]) &&  $this->nmgp_cmp_readonly["sr_paraiso_fiscal"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_paraiso_fiscal']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_paraiso_fiscal'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_paraiso_fiscal']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_paraiso_fiscal'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_paraiso_fiscal']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_paraiso_fiscal'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_paraiso_fiscal']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_paraiso_fiscal'] = array(); 
    }

   $old_value_sr_fechaemision = $this->sr_fechaemision;
   $old_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $old_value_sr_id = $this->sr_id;
   $old_value_sr_secuencial = $this->sr_secuencial;
   $old_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $old_value_sr_importe_total = $this->sr_importe_total;
   $old_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $old_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $old_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_sr_fechaemision = $this->sr_fechaemision;
   $unformatted_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $unformatted_value_sr_id = $this->sr_id;
   $unformatted_value_sr_secuencial = $this->sr_secuencial;
   $unformatted_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $unformatted_value_sr_importe_total = $this->sr_importe_total;
   $unformatted_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $unformatted_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $unformatted_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;

   $nm_comando = "SELECT pf_ats_pais, pf_descripcion  FROM ats_paraiso_fiscal  ORDER BY pf_descripcion";

   $this->sr_fechaemision = $old_value_sr_fechaemision;
   $this->sr_fecha_registro_contable = $old_value_sr_fecha_registro_contable;
   $this->sr_id = $old_value_sr_id;
   $this->sr_secuencial = $old_value_sr_secuencial;
   $this->sr_total_sin_impuestos = $old_value_sr_total_sin_impuestos;
   $this->sr_importe_total = $old_value_sr_importe_total;
   $this->sr_total_reembolsos = $old_value_sr_total_reembolsos;
   $this->sr_total_baseimponible_reembolsos = $old_value_sr_total_baseimponible_reembolsos;
   $this->sr_total_impuesto_reeemboso = $old_value_sr_total_impuesto_reeemboso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_paraiso_fiscal'][] = $rs->fields[0];
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
   $sr_paraiso_fiscal_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_paraiso_fiscal_1))
          {
              foreach ($this->sr_paraiso_fiscal_1 as $tmp_sr_paraiso_fiscal)
              {
                  if (trim($tmp_sr_paraiso_fiscal) === trim($cadaselect[1])) {$sr_paraiso_fiscal_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_paraiso_fiscal) && trim($this->sr_paraiso_fiscal) === trim($cadaselect[1])) {$sr_paraiso_fiscal_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="sr_paraiso_fiscal" value="<?php echo $this->form_encode_input($sr_paraiso_fiscal) . "\">" . $sr_paraiso_fiscal_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_sr_paraiso_fiscal();
   $x = 0 ; 
   $sr_paraiso_fiscal_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_paraiso_fiscal_1))
          {
              foreach ($this->sr_paraiso_fiscal_1 as $tmp_sr_paraiso_fiscal)
              {
                  if (trim($tmp_sr_paraiso_fiscal) === trim($cadaselect[1])) {$sr_paraiso_fiscal_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_paraiso_fiscal) && trim($this->sr_paraiso_fiscal) === trim($cadaselect[1])) { $sr_paraiso_fiscal_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($sr_paraiso_fiscal_look))
          {
              $sr_paraiso_fiscal_look = $this->sr_paraiso_fiscal;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_sr_paraiso_fiscal\" class=\"css_sr_paraiso_fiscal_line\" style=\"" .  $sStyleReadLab_sr_paraiso_fiscal . "\">" . $this->form_format_readonly("sr_paraiso_fiscal", $this->form_encode_input($sr_paraiso_fiscal_look)) . "</span><span id=\"id_read_off_sr_paraiso_fiscal\" class=\"css_read_off_sr_paraiso_fiscal" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_sr_paraiso_fiscal . "\">";
   echo " <span id=\"idAjaxSelect_sr_paraiso_fiscal\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_sr_paraiso_fiscal_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_sr_paraiso_fiscal\" name=\"sr_paraiso_fiscal\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->sr_paraiso_fiscal) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->sr_paraiso_fiscal)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_paraiso_fiscal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_paraiso_fiscal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_pais_pago']))
    {
        $this->nm_new_label['sr_pais_pago'] = "" . $this->Ini->Nm_lang['lang_pais_pago'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_pais_pago = $this->sr_pais_pago;
   if (!isset($this->nmgp_cmp_hidden['sr_pais_pago']))
   {
       $this->nmgp_cmp_hidden['sr_pais_pago'] = 'off';
   }
   $sStyleHidden_sr_pais_pago = '';
   if (isset($this->nmgp_cmp_hidden['sr_pais_pago']) && $this->nmgp_cmp_hidden['sr_pais_pago'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_pais_pago']);
       $sStyleHidden_sr_pais_pago = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_pais_pago = 'display: none;';
   $sStyleReadInp_sr_pais_pago = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_pais_pago']) && $this->nmgp_cmp_readonly['sr_pais_pago'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_pais_pago']);
       $sStyleReadLab_sr_pais_pago = '';
       $sStyleReadInp_sr_pais_pago = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_pais_pago']) && $this->nmgp_cmp_hidden['sr_pais_pago'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_pais_pago" value="<?php echo $this->form_encode_input($sr_pais_pago) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_pais_pago_line" id="hidden_field_data_sr_pais_pago" style="<?php echo $sStyleHidden_sr_pais_pago; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_pais_pago_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_pais_pago_label" style=""><span id="id_label_sr_pais_pago"><?php echo $this->nm_new_label['sr_pais_pago']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_pais_pago"]) &&  $this->nmgp_cmp_readonly["sr_pais_pago"] == "on") { 

 ?>
<input type="hidden" name="sr_pais_pago" value="<?php echo $this->form_encode_input($sr_pais_pago) . "\">" . $sr_pais_pago . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_pais_pago" class="sc-ui-readonly-sr_pais_pago css_sr_pais_pago_line" style="<?php echo $sStyleReadLab_sr_pais_pago; ?>"><?php echo $this->form_format_readonly("sr_pais_pago", $this->form_encode_input($this->sr_pais_pago)); ?></span><span id="id_read_off_sr_pais_pago" class="css_read_off_sr_pais_pago<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_pais_pago; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_pais_pago_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_pais_pago" type=text name="sr_pais_pago" value="<?php echo $this->form_encode_input($sr_pais_pago) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=3"; } ?> maxlength=3 alt="{datatype: 'text', maxLength: 3, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_pais_pago_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_pais_pago_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sr_aplica_doble_trib']))
   {
       $this->nm_new_label['sr_aplica_doble_trib'] = "" . $this->Ini->Nm_lang['lang_doble_tributacion'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_aplica_doble_trib = $this->sr_aplica_doble_trib;
   $sStyleHidden_sr_aplica_doble_trib = '';
   if (isset($this->nmgp_cmp_hidden['sr_aplica_doble_trib']) && $this->nmgp_cmp_hidden['sr_aplica_doble_trib'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_aplica_doble_trib']);
       $sStyleHidden_sr_aplica_doble_trib = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_aplica_doble_trib = 'display: none;';
   $sStyleReadInp_sr_aplica_doble_trib = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_aplica_doble_trib']) && $this->nmgp_cmp_readonly['sr_aplica_doble_trib'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_aplica_doble_trib']);
       $sStyleReadLab_sr_aplica_doble_trib = '';
       $sStyleReadInp_sr_aplica_doble_trib = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_aplica_doble_trib']) && $this->nmgp_cmp_hidden['sr_aplica_doble_trib'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sr_aplica_doble_trib" value="<?php echo $this->form_encode_input($this->sr_aplica_doble_trib) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_aplica_doble_trib_line" id="hidden_field_data_sr_aplica_doble_trib" style="<?php echo $sStyleHidden_sr_aplica_doble_trib; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_aplica_doble_trib_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_aplica_doble_trib_label" style=""><span id="id_label_sr_aplica_doble_trib"><?php echo $this->nm_new_label['sr_aplica_doble_trib']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_aplica_doble_trib"]) &&  $this->nmgp_cmp_readonly["sr_aplica_doble_trib"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib'] = array(); 
    }

   $old_value_sr_fechaemision = $this->sr_fechaemision;
   $old_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $old_value_sr_id = $this->sr_id;
   $old_value_sr_secuencial = $this->sr_secuencial;
   $old_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $old_value_sr_importe_total = $this->sr_importe_total;
   $old_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $old_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $old_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_sr_fechaemision = $this->sr_fechaemision;
   $unformatted_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $unformatted_value_sr_id = $this->sr_id;
   $unformatted_value_sr_secuencial = $this->sr_secuencial;
   $unformatted_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $unformatted_value_sr_importe_total = $this->sr_importe_total;
   $unformatted_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $unformatted_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $unformatted_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";

   $this->sr_fechaemision = $old_value_sr_fechaemision;
   $this->sr_fecha_registro_contable = $old_value_sr_fecha_registro_contable;
   $this->sr_id = $old_value_sr_id;
   $this->sr_secuencial = $old_value_sr_secuencial;
   $this->sr_total_sin_impuestos = $old_value_sr_total_sin_impuestos;
   $this->sr_importe_total = $old_value_sr_importe_total;
   $this->sr_total_reembolsos = $old_value_sr_total_reembolsos;
   $this->sr_total_baseimponible_reembolsos = $old_value_sr_total_baseimponible_reembolsos;
   $this->sr_total_impuesto_reeemboso = $old_value_sr_total_impuesto_reeemboso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib'][] = $rs->fields[0];
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
   $sr_aplica_doble_trib_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->sr_aplica_doble_trib_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $sr_aplica_doble_trib_look .= $cadaselect[0] . "&nbsp;";
                  break;
              }
          }
          $x++; 
   }

?>
<input type="hidden" name="sr_aplica_doble_trib" value="<?php echo $this->form_encode_input($sr_aplica_doble_trib) . "\">" . $sr_aplica_doble_trib_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_sr_aplica_doble_trib();
   $x = 0 ; 
   $sr_aplica_doble_trib_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_aplica_doble_trib_1))
          {
              foreach ($this->sr_aplica_doble_trib_1 as $tmp_sr_aplica_doble_trib)
              {
                  if (trim($tmp_sr_aplica_doble_trib) === trim($cadaselect[1])) {$sr_aplica_doble_trib_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_aplica_doble_trib) && trim($this->sr_aplica_doble_trib) === trim($cadaselect[1])) { $sr_aplica_doble_trib_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($sr_aplica_doble_trib_look))
          {
              $sr_aplica_doble_trib_look = $this->sr_aplica_doble_trib;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_sr_aplica_doble_trib\" class=\"css_sr_aplica_doble_trib_line\" style=\"" .  $sStyleReadLab_sr_aplica_doble_trib . "\">" . $this->form_format_readonly("sr_aplica_doble_trib", $this->form_encode_input($sr_aplica_doble_trib_look)) . "</span><span id=\"id_read_off_sr_aplica_doble_trib\" class=\"css_read_off_sr_aplica_doble_trib" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_sr_aplica_doble_trib . "\">";
   echo " <span id=\"idAjaxSelect_sr_aplica_doble_trib\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_sr_aplica_doble_trib_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_sr_aplica_doble_trib\" name=\"sr_aplica_doble_trib\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_aplica_doble_trib'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->sr_aplica_doble_trib) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->sr_aplica_doble_trib)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_aplica_doble_trib_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_aplica_doble_trib_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sr_pago_sujeto_retencion_nc']))
   {
       $this->nm_new_label['sr_pago_sujeto_retencion_nc'] = "" . $this->Ini->Nm_lang['lang_pago_sujeto_ret'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_pago_sujeto_retencion_nc = $this->sr_pago_sujeto_retencion_nc;
   $sStyleHidden_sr_pago_sujeto_retencion_nc = '';
   if (isset($this->nmgp_cmp_hidden['sr_pago_sujeto_retencion_nc']) && $this->nmgp_cmp_hidden['sr_pago_sujeto_retencion_nc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_pago_sujeto_retencion_nc']);
       $sStyleHidden_sr_pago_sujeto_retencion_nc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_pago_sujeto_retencion_nc = 'display: none;';
   $sStyleReadInp_sr_pago_sujeto_retencion_nc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_pago_sujeto_retencion_nc']) && $this->nmgp_cmp_readonly['sr_pago_sujeto_retencion_nc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_pago_sujeto_retencion_nc']);
       $sStyleReadLab_sr_pago_sujeto_retencion_nc = '';
       $sStyleReadInp_sr_pago_sujeto_retencion_nc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_pago_sujeto_retencion_nc']) && $this->nmgp_cmp_hidden['sr_pago_sujeto_retencion_nc'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sr_pago_sujeto_retencion_nc" value="<?php echo $this->form_encode_input($this->sr_pago_sujeto_retencion_nc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_pago_sujeto_retencion_nc_line" id="hidden_field_data_sr_pago_sujeto_retencion_nc" style="<?php echo $sStyleHidden_sr_pago_sujeto_retencion_nc; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_pago_sujeto_retencion_nc_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_pago_sujeto_retencion_nc_label" style=""><span id="id_label_sr_pago_sujeto_retencion_nc"><?php echo $this->nm_new_label['sr_pago_sujeto_retencion_nc']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_pago_sujeto_retencion_nc"]) &&  $this->nmgp_cmp_readonly["sr_pago_sujeto_retencion_nc"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_sujeto_retencion_nc']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_sujeto_retencion_nc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_sujeto_retencion_nc']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_sujeto_retencion_nc'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_sujeto_retencion_nc']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_sujeto_retencion_nc'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_sujeto_retencion_nc']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_sujeto_retencion_nc'] = array(); 
    }

   $old_value_sr_fechaemision = $this->sr_fechaemision;
   $old_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $old_value_sr_id = $this->sr_id;
   $old_value_sr_secuencial = $this->sr_secuencial;
   $old_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $old_value_sr_importe_total = $this->sr_importe_total;
   $old_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $old_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $old_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_sr_fechaemision = $this->sr_fechaemision;
   $unformatted_value_sr_fecha_registro_contable = $this->sr_fecha_registro_contable;
   $unformatted_value_sr_id = $this->sr_id;
   $unformatted_value_sr_secuencial = $this->sr_secuencial;
   $unformatted_value_sr_total_sin_impuestos = $this->sr_total_sin_impuestos;
   $unformatted_value_sr_importe_total = $this->sr_importe_total;
   $unformatted_value_sr_total_reembolsos = $this->sr_total_reembolsos;
   $unformatted_value_sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $unformatted_value_sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";

   $this->sr_fechaemision = $old_value_sr_fechaemision;
   $this->sr_fecha_registro_contable = $old_value_sr_fecha_registro_contable;
   $this->sr_id = $old_value_sr_id;
   $this->sr_secuencial = $old_value_sr_secuencial;
   $this->sr_total_sin_impuestos = $old_value_sr_total_sin_impuestos;
   $this->sr_importe_total = $old_value_sr_importe_total;
   $this->sr_total_reembolsos = $old_value_sr_total_reembolsos;
   $this->sr_total_baseimponible_reembolsos = $old_value_sr_total_baseimponible_reembolsos;
   $this->sr_total_impuesto_reeemboso = $old_value_sr_total_impuesto_reeemboso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['Lookup_sr_pago_sujeto_retencion_nc'][] = $rs->fields[0];
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
   $sr_pago_sujeto_retencion_nc_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->sr_pago_sujeto_retencion_nc_1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $sr_pago_sujeto_retencion_nc_look .= $cadaselect[0] . "&nbsp;";
                  break;
              }
          }
          $x++; 
   }

?>
<input type="hidden" name="sr_pago_sujeto_retencion_nc" value="<?php echo $this->form_encode_input($sr_pago_sujeto_retencion_nc) . "\">" . $sr_pago_sujeto_retencion_nc_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_sr_pago_sujeto_retencion_nc();
   $x = 0 ; 
   $sr_pago_sujeto_retencion_nc_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sr_pago_sujeto_retencion_nc_1))
          {
              foreach ($this->sr_pago_sujeto_retencion_nc_1 as $tmp_sr_pago_sujeto_retencion_nc)
              {
                  if (trim($tmp_sr_pago_sujeto_retencion_nc) === trim($cadaselect[1])) {$sr_pago_sujeto_retencion_nc_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sr_pago_sujeto_retencion_nc) && trim($this->sr_pago_sujeto_retencion_nc) === trim($cadaselect[1])) { $sr_pago_sujeto_retencion_nc_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($sr_pago_sujeto_retencion_nc_look))
          {
              $sr_pago_sujeto_retencion_nc_look = $this->sr_pago_sujeto_retencion_nc;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_sr_pago_sujeto_retencion_nc\" class=\"css_sr_pago_sujeto_retencion_nc_line\" style=\"" .  $sStyleReadLab_sr_pago_sujeto_retencion_nc . "\">" . $this->form_format_readonly("sr_pago_sujeto_retencion_nc", $this->form_encode_input($sr_pago_sujeto_retencion_nc_look)) . "</span><span id=\"id_read_off_sr_pago_sujeto_retencion_nc\" class=\"css_read_off_sr_pago_sujeto_retencion_nc" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_sr_pago_sujeto_retencion_nc . "\">";
   echo " <span id=\"idAjaxSelect_sr_pago_sujeto_retencion_nc\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_sr_pago_sujeto_retencion_nc_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_sr_pago_sujeto_retencion_nc\" name=\"sr_pago_sujeto_retencion_nc\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->sr_pago_sujeto_retencion_nc) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->sr_pago_sujeto_retencion_nc)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_pago_sujeto_retencion_nc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_pago_sujeto_retencion_nc_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_pago_reg_fis']))
    {
        $this->nm_new_label['sr_pago_reg_fis'] = "Pago Reg Fis";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_pago_reg_fis = $this->sr_pago_reg_fis;
   $sStyleHidden_sr_pago_reg_fis = '';
   if (isset($this->nmgp_cmp_hidden['sr_pago_reg_fis']) && $this->nmgp_cmp_hidden['sr_pago_reg_fis'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_pago_reg_fis']);
       $sStyleHidden_sr_pago_reg_fis = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_pago_reg_fis = 'display: none;';
   $sStyleReadInp_sr_pago_reg_fis = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_pago_reg_fis']) && $this->nmgp_cmp_readonly['sr_pago_reg_fis'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_pago_reg_fis']);
       $sStyleReadLab_sr_pago_reg_fis = '';
       $sStyleReadInp_sr_pago_reg_fis = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_pago_reg_fis']) && $this->nmgp_cmp_hidden['sr_pago_reg_fis'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_pago_reg_fis" value="<?php echo $this->form_encode_input($sr_pago_reg_fis) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_pago_reg_fis_line" id="hidden_field_data_sr_pago_reg_fis" style="<?php echo $sStyleHidden_sr_pago_reg_fis; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_pago_reg_fis_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_pago_reg_fis_label" style=""><span id="id_label_sr_pago_reg_fis"><?php echo $this->nm_new_label['sr_pago_reg_fis']; ?></span></span><br><input type="hidden" name="sr_pago_reg_fis" value="<?php echo $this->form_encode_input($sr_pago_reg_fis); ?>"><span id="id_ajax_label_sr_pago_reg_fis"><?php echo nl2br($sr_pago_reg_fis); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_pago_reg_fis_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_pago_reg_fis_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_sr_pago_reg_fis_dumb = ('' == $sStyleHidden_sr_pago_reg_fis) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_sr_pago_reg_fis_dumb" style="<?php echo $sStyleHidden_sr_pago_reg_fis_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf3\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>reembolsos<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_total_reembolsos']))
    {
        $this->nm_new_label['sr_total_reembolsos'] = "Sr Total Reembolsos";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_total_reembolsos = $this->sr_total_reembolsos;
   $sStyleHidden_sr_total_reembolsos = '';
   if (isset($this->nmgp_cmp_hidden['sr_total_reembolsos']) && $this->nmgp_cmp_hidden['sr_total_reembolsos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_total_reembolsos']);
       $sStyleHidden_sr_total_reembolsos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_total_reembolsos = 'display: none;';
   $sStyleReadInp_sr_total_reembolsos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_total_reembolsos']) && $this->nmgp_cmp_readonly['sr_total_reembolsos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_total_reembolsos']);
       $sStyleReadLab_sr_total_reembolsos = '';
       $sStyleReadInp_sr_total_reembolsos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_total_reembolsos']) && $this->nmgp_cmp_hidden['sr_total_reembolsos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_total_reembolsos" value="<?php echo $this->form_encode_input($sr_total_reembolsos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_total_reembolsos_line" id="hidden_field_data_sr_total_reembolsos" style="<?php echo $sStyleHidden_sr_total_reembolsos; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_total_reembolsos_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_total_reembolsos_label" style=""><span id="id_label_sr_total_reembolsos"><?php echo $this->nm_new_label['sr_total_reembolsos']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_total_reembolsos"]) &&  $this->nmgp_cmp_readonly["sr_total_reembolsos"] == "on") { 

 ?>
<input type="hidden" name="sr_total_reembolsos" value="<?php echo $this->form_encode_input($sr_total_reembolsos) . "\">" . $sr_total_reembolsos . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_total_reembolsos" class="sc-ui-readonly-sr_total_reembolsos css_sr_total_reembolsos_line" style="<?php echo $sStyleReadLab_sr_total_reembolsos; ?>"><?php echo $this->form_format_readonly("sr_total_reembolsos", $this->form_encode_input($this->sr_total_reembolsos)); ?></span><span id="id_read_off_sr_total_reembolsos" class="css_read_off_sr_total_reembolsos<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_total_reembolsos; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_total_reembolsos_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_total_reembolsos" type=text name="sr_total_reembolsos" value="<?php echo $this->form_encode_input($sr_total_reembolsos) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['sr_total_reembolsos']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['sr_total_reembolsos']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['sr_total_reembolsos']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['sr_total_reembolsos']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_total_reembolsos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_total_reembolsos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_total_baseimponible_reembolsos']))
    {
        $this->nm_new_label['sr_total_baseimponible_reembolsos'] = "Sr Total Baseimponible Reembolsos";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_total_baseimponible_reembolsos = $this->sr_total_baseimponible_reembolsos;
   $sStyleHidden_sr_total_baseimponible_reembolsos = '';
   if (isset($this->nmgp_cmp_hidden['sr_total_baseimponible_reembolsos']) && $this->nmgp_cmp_hidden['sr_total_baseimponible_reembolsos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_total_baseimponible_reembolsos']);
       $sStyleHidden_sr_total_baseimponible_reembolsos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_total_baseimponible_reembolsos = 'display: none;';
   $sStyleReadInp_sr_total_baseimponible_reembolsos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_total_baseimponible_reembolsos']) && $this->nmgp_cmp_readonly['sr_total_baseimponible_reembolsos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_total_baseimponible_reembolsos']);
       $sStyleReadLab_sr_total_baseimponible_reembolsos = '';
       $sStyleReadInp_sr_total_baseimponible_reembolsos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_total_baseimponible_reembolsos']) && $this->nmgp_cmp_hidden['sr_total_baseimponible_reembolsos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_total_baseimponible_reembolsos" value="<?php echo $this->form_encode_input($sr_total_baseimponible_reembolsos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_total_baseimponible_reembolsos_line" id="hidden_field_data_sr_total_baseimponible_reembolsos" style="<?php echo $sStyleHidden_sr_total_baseimponible_reembolsos; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_total_baseimponible_reembolsos_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_total_baseimponible_reembolsos_label" style=""><span id="id_label_sr_total_baseimponible_reembolsos"><?php echo $this->nm_new_label['sr_total_baseimponible_reembolsos']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_total_baseimponible_reembolsos"]) &&  $this->nmgp_cmp_readonly["sr_total_baseimponible_reembolsos"] == "on") { 

 ?>
<input type="hidden" name="sr_total_baseimponible_reembolsos" value="<?php echo $this->form_encode_input($sr_total_baseimponible_reembolsos) . "\">" . $sr_total_baseimponible_reembolsos . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_total_baseimponible_reembolsos" class="sc-ui-readonly-sr_total_baseimponible_reembolsos css_sr_total_baseimponible_reembolsos_line" style="<?php echo $sStyleReadLab_sr_total_baseimponible_reembolsos; ?>"><?php echo $this->form_format_readonly("sr_total_baseimponible_reembolsos", $this->form_encode_input($this->sr_total_baseimponible_reembolsos)); ?></span><span id="id_read_off_sr_total_baseimponible_reembolsos" class="css_read_off_sr_total_baseimponible_reembolsos<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_total_baseimponible_reembolsos; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_total_baseimponible_reembolsos_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_total_baseimponible_reembolsos" type=text name="sr_total_baseimponible_reembolsos" value="<?php echo $this->form_encode_input($sr_total_baseimponible_reembolsos) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['sr_total_baseimponible_reembolsos']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['sr_total_baseimponible_reembolsos']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['sr_total_baseimponible_reembolsos']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['sr_total_baseimponible_reembolsos']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_total_baseimponible_reembolsos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_total_baseimponible_reembolsos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sr_total_impuesto_reeemboso']))
    {
        $this->nm_new_label['sr_total_impuesto_reeemboso'] = "Sr Total Impuesto Reeemboso";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sr_total_impuesto_reeemboso = $this->sr_total_impuesto_reeemboso;
   $sStyleHidden_sr_total_impuesto_reeemboso = '';
   if (isset($this->nmgp_cmp_hidden['sr_total_impuesto_reeemboso']) && $this->nmgp_cmp_hidden['sr_total_impuesto_reeemboso'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sr_total_impuesto_reeemboso']);
       $sStyleHidden_sr_total_impuesto_reeemboso = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sr_total_impuesto_reeemboso = 'display: none;';
   $sStyleReadInp_sr_total_impuesto_reeemboso = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sr_total_impuesto_reeemboso']) && $this->nmgp_cmp_readonly['sr_total_impuesto_reeemboso'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sr_total_impuesto_reeemboso']);
       $sStyleReadLab_sr_total_impuesto_reeemboso = '';
       $sStyleReadInp_sr_total_impuesto_reeemboso = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sr_total_impuesto_reeemboso']) && $this->nmgp_cmp_hidden['sr_total_impuesto_reeemboso'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sr_total_impuesto_reeemboso" value="<?php echo $this->form_encode_input($sr_total_impuesto_reeemboso) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sr_total_impuesto_reeemboso_line" id="hidden_field_data_sr_total_impuesto_reeemboso" style="<?php echo $sStyleHidden_sr_total_impuesto_reeemboso; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sr_total_impuesto_reeemboso_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sr_total_impuesto_reeemboso_label" style=""><span id="id_label_sr_total_impuesto_reeemboso"><?php echo $this->nm_new_label['sr_total_impuesto_reeemboso']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sr_total_impuesto_reeemboso"]) &&  $this->nmgp_cmp_readonly["sr_total_impuesto_reeemboso"] == "on") { 

 ?>
<input type="hidden" name="sr_total_impuesto_reeemboso" value="<?php echo $this->form_encode_input($sr_total_impuesto_reeemboso) . "\">" . $sr_total_impuesto_reeemboso . ""; ?>
<?php } else { ?>
<span id="id_read_on_sr_total_impuesto_reeemboso" class="sc-ui-readonly-sr_total_impuesto_reeemboso css_sr_total_impuesto_reeemboso_line" style="<?php echo $sStyleReadLab_sr_total_impuesto_reeemboso; ?>"><?php echo $this->form_format_readonly("sr_total_impuesto_reeemboso", $this->form_encode_input($this->sr_total_impuesto_reeemboso)); ?></span><span id="id_read_off_sr_total_impuesto_reeemboso" class="css_read_off_sr_total_impuesto_reeemboso<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sr_total_impuesto_reeemboso; ?>">
 <input class="sc-js-input scFormObjectOdd css_sr_total_impuesto_reeemboso_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sr_total_impuesto_reeemboso" type=text name="sr_total_impuesto_reeemboso" value="<?php echo $this->form_encode_input($sr_total_impuesto_reeemboso) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['sr_total_impuesto_reeemboso']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['sr_total_impuesto_reeemboso']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['sr_total_impuesto_reeemboso']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['sr_total_impuesto_reeemboso']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sr_total_impuesto_reeemboso_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sr_total_impuesto_reeemboso_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_sr_total_impuesto_reeemboso_dumb = ('' == $sStyleHidden_sr_total_impuesto_reeemboso) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_sr_total_impuesto_reeemboso_dumb" style="<?php echo $sStyleHidden_sr_total_impuesto_reeemboso_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf4\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_impuestos_sustento'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['impuestos']))
    {
        $this->nm_new_label['impuestos'] = "impuestos";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $impuestos = $this->impuestos;
   $sStyleHidden_impuestos = '';
   if (isset($this->nmgp_cmp_hidden['impuestos']) && $this->nmgp_cmp_hidden['impuestos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['impuestos']);
       $sStyleHidden_impuestos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_impuestos = 'display: none;';
   $sStyleReadInp_impuestos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['impuestos']) && $this->nmgp_cmp_readonly['impuestos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['impuestos']);
       $sStyleReadLab_impuestos = '';
       $sStyleReadInp_impuestos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['impuestos']) && $this->nmgp_cmp_hidden['impuestos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="impuestos" value="<?php echo $this->form_encode_input($impuestos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_impuestos_line" id="hidden_field_data_impuestos" style="<?php echo $sStyleHidden_impuestos; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_impuestos_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_impuestos'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_impuestos'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_impuestos'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutlink_remove_margin*scinok*scoutlink_remove_border*scinok*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['foreign_key']['isr_doc_sustento'] = $this->nmgp_dados_form['sr_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['where_filter'] = "isr_doc_sustento = " . $this->nmgp_dados_form['sr_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['where_detal']  = "isr_doc_sustento = " . $this->nmgp_dados_form['sr_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_sustento_retencion_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_sustento_retencion_mob_empty.htm' : $this->Ini->link_form_del_impuesto_sustento_retencion_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init'] ]['form_del_impuesto_sustento_retencion'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_impuestos']) && 'nmsc_iframe_liga_form_del_impuesto_sustento_retencion_mob' != $this->Ini->sc_lig_target['C_@scinf_impuestos'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_impuestos'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuesto_sustento_retencion_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_impuestos'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_del_impuesto_sustento_retencion_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_del_impuesto_sustento_retencion_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_impuestos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_impuestos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_impuestos_dumb = ('' == $sStyleHidden_impuestos) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_impuestos_dumb" style="<?php echo $sStyleHidden_impuestos_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_5"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_5" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf5\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_formas_pago_sustento'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pagos']))
    {
        $this->nm_new_label['pagos'] = "pagos";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pagos = $this->pagos;
   $sStyleHidden_pagos = '';
   if (isset($this->nmgp_cmp_hidden['pagos']) && $this->nmgp_cmp_hidden['pagos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pagos']);
       $sStyleHidden_pagos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pagos = 'display: none;';
   $sStyleReadInp_pagos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pagos']) && $this->nmgp_cmp_readonly['pagos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pagos']);
       $sStyleReadLab_pagos = '';
       $sStyleReadInp_pagos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pagos']) && $this->nmgp_cmp_hidden['pagos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pagos" value="<?php echo $this->form_encode_input($pagos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pagos_line" id="hidden_field_data_pagos" style="<?php echo $sStyleHidden_pagos; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_pagos_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_pagos'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_pagos'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_pagos'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutlink_remove_margin*scinok*scoutlink_remove_border*scinok*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['foreign_key']['psr_sustento_retencion'] = $this->nmgp_dados_form['sr_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['where_filter'] = "psr_sustento_retencion = " . $this->nmgp_dados_form['sr_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['where_detal']  = "psr_sustento_retencion = " . $this->nmgp_dados_form['sr_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_sustento_retencion_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_sustento_retencion_mob_empty.htm' : $this->Ini->link_form_del_forma_pago_sustento_retencion_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init'] ]['form_del_forma_pago_sustento_retencion'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_pagos']) && 'nmsc_iframe_liga_form_del_forma_pago_sustento_retencion_mob' != $this->Ini->sc_lig_target['C_@scinf_pagos'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_pagos'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_forma_pago_sustento_retencion_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_pagos'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_del_forma_pago_sustento_retencion_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_del_forma_pago_sustento_retencion_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pagos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pagos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_pagos_dumb = ('' == $sStyleHidden_pagos) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_pagos_dumb" style="<?php echo $sStyleHidden_pagos_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_6"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_6"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_6" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_retencion'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['retenciones']))
    {
        $this->nm_new_label['retenciones'] = "retenciones";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $retenciones = $this->retenciones;
   $sStyleHidden_retenciones = '';
   if (isset($this->nmgp_cmp_hidden['retenciones']) && $this->nmgp_cmp_hidden['retenciones'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['retenciones']);
       $sStyleHidden_retenciones = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_retenciones = 'display: none;';
   $sStyleReadInp_retenciones = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['retenciones']) && $this->nmgp_cmp_readonly['retenciones'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['retenciones']);
       $sStyleReadLab_retenciones = '';
       $sStyleReadInp_retenciones = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['retenciones']) && $this->nmgp_cmp_hidden['retenciones'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="retenciones" value="<?php echo $this->form_encode_input($retenciones) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_retenciones_line" id="hidden_field_data_retenciones" style="<?php echo $sStyleHidden_retenciones; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_retenciones_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_retenciones'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_retenciones'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_retenciones'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutlink_remove_margin*scinok*scoutlink_remove_border*scinok*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['foreign_key']['irs_sustento'] = $this->nmgp_dados_form['sr_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['where_filter'] = "irs_sustento = " . $this->nmgp_dados_form['sr_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['where_detal']  = "irs_sustento = " . $this->nmgp_dados_form['sr_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_sustento_retencion_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_sustento_retencion_mob_empty.htm' : $this->Ini->link_form_del_impuestos_retenidos_sustento_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init'] ]['form_del_impuestos_retenidos_sustento'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_retenciones']) && 'nmsc_iframe_liga_form_del_impuestos_retenidos_sustento_mob' != $this->Ini->sc_lig_target['C_@scinf_retenciones'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_retenciones'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['form_del_impuestos_retenidos_sustento_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_retenciones'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_del_impuestos_retenidos_sustento_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_del_impuestos_retenidos_sustento_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_retenciones_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_retenciones_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R")
{
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['first'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8592;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['back'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8592;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['forward'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8594;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['btn_label']['last'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8594;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R")
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
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none;" class='scDebugWindow'><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = 'hidden';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
$(window).bind("load", function() {
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = '';";
      }
  }
?>
});
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_sustento_retencion_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_sustento_retencion_mob");
 parent.scAjaxDetailHeight("form_del_sustento_retencion_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_sustento_retencion_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_sustento_retencion_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if (isset($this->scFormFocusErrorName) && '' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['sc_modal'])
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
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-9").length && $("#sc_b_new_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-10").length && $("#sc_b_ins_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-3").length && $("#sc_b_upd_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-11").length && $("#sc_b_upd_t.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-4").length && $("#sc_b_del_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_del_t.sc-unique-btn-12").length && $("#sc_b_del_t.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-5").length && $("#sys_separator.sc-unique-btn-5").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-13").length && $("#sys_separator.sc-unique-btn-13").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
		    if ($("#sc_b_hlp_t").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-14").length && $("#sc_b_sai_t.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-15").length && $("#sc_b_sai_t.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-16").length && $("#sc_b_sai_t.sc-unique-btn-16").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-17").length && $("#sc_b_ini_b.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-18").length && $("#sc_b_ret_b.sc-unique-btn-18").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-19").length && $("#sc_b_avc_b.sc-unique-btn-19").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-19").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-20").length && $("#sc_b_fim_b.sc-unique-btn-20").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-20").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			toggleToolbar(event, true); return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_sustento_retencion_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
