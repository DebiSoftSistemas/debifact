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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_establecimiento"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_establecimiento"); } ?></TITLE>
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
    <style type="text/css">
        .sc-form-order-icon {
            padding: 0 2px;
        }
    </style>
<?php
           $formOrderUnusedVisivility = $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'] ? 'visible' : 'hidden';
           $formOrderUnusedOpacity = $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'] ? '0.5' : '1';
?>
    <style>
        .sc-form-order-icon-unused {
            visibility: <?php echo $formOrderUnusedVisivility ?>;
            opacity: 0.5;
        }
        .scFormLabelOddMult:hover .sc-form-order-icon-unused {
            visibility: visible;
            opacity: <?php echo $formOrderUnusedOpacity ?>;
        }
    </style>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_establecimiento/form_del_establecimiento_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_establecimiento_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['last'] : 'off'); ?>";
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
<?php

include_once('form_del_establecimiento_mob_jquery.php');

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
   });
 if($(".sc-ui-block-control").length) {
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_del_establecimiento']['error_buffer']) && '' != $_SESSION['scriptcase']['form_del_establecimiento']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_del_establecimiento']['error_buffer'];
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
 include_once("form_del_establecimiento_mob_js0.php");
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
               action="form_del_establecimiento_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['insert_validation']; ?>">
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
<input type="hidden" name="est_logo_salva" value="<?php  echo $this->form_encode_input($this->est_logo) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_del_establecimiento_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_establecimiento_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<table id="main_table_form"  align="left" cellpadding=0 cellspacing=0  width="35%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['new'];
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
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['insert'];
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
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-10';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['est_id']))
   {
       $this->nmgp_cmp_hidden['est_id'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['est_empresa']))
   {
       $this->nmgp_cmp_hidden['est_empresa'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['bodega']))
   {
       $this->nmgp_cmp_hidden['bodega'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><input type="hidden" name="est_logo_ul_name" id="id_sc_field_est_logo_ul_name" value="<?php echo $this->form_encode_input($this->est_logo_ul_name);?>">
<input type="hidden" name="est_logo_ul_type" id="id_sc_field_est_logo_ul_type" value="<?php echo $this->form_encode_input($this->est_logo_ul_type);?>">
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['est_id']))
           {
               $this->nmgp_cmp_readonly['est_id'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['est_id']))
    {
        $this->nm_new_label['est_id'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_id = $this->est_id;
   if (!isset($this->nmgp_cmp_hidden['est_id']))
   {
       $this->nmgp_cmp_hidden['est_id'] = 'off';
   }
   $sStyleHidden_est_id = '';
   if (isset($this->nmgp_cmp_hidden['est_id']) && $this->nmgp_cmp_hidden['est_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_id']);
       $sStyleHidden_est_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_id = 'display: none;';
   $sStyleReadInp_est_id = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["est_id"]) &&  $this->nmgp_cmp_readonly["est_id"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_id']);
       $sStyleReadLab_est_id = '';
       $sStyleReadInp_est_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_id']) && $this->nmgp_cmp_hidden['est_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="est_id" value="<?php echo $this->form_encode_input($est_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd css_est_id_line" id="hidden_field_data_est_id" style="<?php echo $sStyleHidden_est_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_id_label" style=""><span id="id_label_est_id"><?php echo $this->nm_new_label['est_id']; ?></span></span><br><span id="id_read_on_est_id" class="css_est_id_line" style="<?php echo $sStyleReadLab_est_id; ?>"><?php echo $this->form_format_readonly("est_id", $this->form_encode_input($this->est_id)); ?></span><span id="id_read_off_est_id" class="css_read_off_est_id" style="<?php echo $sStyleReadInp_est_id; ?>"><input type="hidden" name="est_id" value="<?php echo $this->form_encode_input($est_id) . "\">"?><span id="id_ajax_label_est_id"><?php echo nl2br($est_id); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_id_text"></span></td></tr></table></td></tr></table> </TD>
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
    if (!isset($this->nm_new_label['est_logo']))
    {
        $this->nm_new_label['est_logo'] = "" . $this->Ini->Nm_lang['lang_logotipo'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_logo = $this->est_logo;
   $sStyleHidden_est_logo = '';
   if (isset($this->nmgp_cmp_hidden['est_logo']) && $this->nmgp_cmp_hidden['est_logo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_logo']);
       $sStyleHidden_est_logo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_logo = 'display: none;';
   $sStyleReadInp_est_logo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_logo']) && $this->nmgp_cmp_readonly['est_logo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_logo']);
       $sStyleReadLab_est_logo = '';
       $sStyleReadInp_est_logo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_logo']) && $this->nmgp_cmp_hidden['est_logo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="est_logo" value="<?php echo $this->form_encode_input($est_logo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_logo_line" id="hidden_field_data_est_logo" style="<?php echo $sStyleHidden_est_logo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_logo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_logo_label" style=""><span id="id_label_est_logo"><?php echo $this->nm_new_label['est_logo']; ?></span></span><br>
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_est_logo" => $out_est_logo); ?><script>var var_ajax_img_est_logo = '<?php echo $out_est_logo; ?>';</script><?php if (!empty($out_est_logo)){ echo "<img id=\"id_ajax_img_est_logo\" border=\"0\" src=\"$out_est_logo\"> &nbsp;" . "<span id=\"txt_ajax_img_est_logo\">" . $this->form_format_readonly("est_logo", $est_logo) . "</span>"; if (!empty($est_logo)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_est_logo\" border=\"0\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_est_logo\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_logo"]) &&  $this->nmgp_cmp_readonly["est_logo"] == "on") { 

 ?>
<img id=\"est_logo_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="est_logo" value="<?php echo $this->form_encode_input($est_logo) . "\">" . $est_logo . ""; ?>
<?php } else { ?>
<span id="id_read_off_est_logo" class="css_read_off_est_logo<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_est_logo; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-est_logo" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_est_logo_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="est_logo[]" id="id_sc_field_est_logo" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<?php
   $sCheckInsert = "";
?>
<span id="chk_ajax_img_est_logo"<?php if ($this->nmgp_opcao == "novo" || empty($est_logo)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="est_logo_limpa" value="<?php echo $est_logo_limpa . '" '; if ($est_logo_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};<?php echo $sCheckInsert ?>"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="est_logo_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_est_logo" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_est_logo" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_logo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_logo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['est_empresa']))
    {
        $this->nm_new_label['est_empresa'] = "" . $this->Ini->Nm_lang['lang_empresa'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_empresa = $this->est_empresa;
   if (!isset($this->nmgp_cmp_hidden['est_empresa']))
   {
       $this->nmgp_cmp_hidden['est_empresa'] = 'off';
   }
   $sStyleHidden_est_empresa = '';
   if (isset($this->nmgp_cmp_hidden['est_empresa']) && $this->nmgp_cmp_hidden['est_empresa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_empresa']);
       $sStyleHidden_est_empresa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_empresa = 'display: none;';
   $sStyleReadInp_est_empresa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_empresa']) && $this->nmgp_cmp_readonly['est_empresa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_empresa']);
       $sStyleReadLab_est_empresa = '';
       $sStyleReadInp_est_empresa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_empresa']) && $this->nmgp_cmp_hidden['est_empresa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="est_empresa" value="<?php echo $this->form_encode_input($est_empresa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_empresa_line" id="hidden_field_data_est_empresa" style="<?php echo $sStyleHidden_est_empresa; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_empresa_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_empresa_label" style=""><span id="id_label_est_empresa"><?php echo $this->nm_new_label['est_empresa']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['php_cmp_required']['est_empresa']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['php_cmp_required']['est_empresa'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br><input type="hidden" name="est_empresa" value="<?php echo $this->form_encode_input($est_empresa); ?>"><span id="id_ajax_label_est_empresa"><?php echo nl2br($est_empresa); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_empresa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_empresa_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['est_nombre']))
    {
        $this->nm_new_label['est_nombre'] = "" . $this->Ini->Nm_lang['lang_nombre_establecimiento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_nombre = $this->est_nombre;
   $sStyleHidden_est_nombre = '';
   if (isset($this->nmgp_cmp_hidden['est_nombre']) && $this->nmgp_cmp_hidden['est_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_nombre']);
       $sStyleHidden_est_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_nombre = 'display: none;';
   $sStyleReadInp_est_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_nombre']) && $this->nmgp_cmp_readonly['est_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_nombre']);
       $sStyleReadLab_est_nombre = '';
       $sStyleReadInp_est_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_nombre']) && $this->nmgp_cmp_hidden['est_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="est_nombre" value="<?php echo $this->form_encode_input($est_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_nombre_line" id="hidden_field_data_est_nombre" style="<?php echo $sStyleHidden_est_nombre; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_nombre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_nombre_label" style=""><span id="id_label_est_nombre"><?php echo $this->nm_new_label['est_nombre']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['php_cmp_required']['est_nombre']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['php_cmp_required']['est_nombre'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_nombre"]) &&  $this->nmgp_cmp_readonly["est_nombre"] == "on") { 

 ?>
<input type="hidden" name="est_nombre" value="<?php echo $this->form_encode_input($est_nombre) . "\">" . $est_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_est_nombre" class="sc-ui-readonly-est_nombre css_est_nombre_line" style="<?php echo $sStyleReadLab_est_nombre; ?>"><?php echo $this->form_format_readonly("est_nombre", $this->form_encode_input($this->est_nombre)); ?></span><span id="id_read_off_est_nombre" class="css_read_off_est_nombre<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_est_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_est_nombre_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_est_nombre" type=text name="est_nombre" value="<?php echo $this->form_encode_input($est_nombre) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_nombre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['est_codigo']))
    {
        $this->nm_new_label['est_codigo'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_codigo = $this->est_codigo;
   $sStyleHidden_est_codigo = '';
   if (isset($this->nmgp_cmp_hidden['est_codigo']) && $this->nmgp_cmp_hidden['est_codigo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_codigo']);
       $sStyleHidden_est_codigo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_codigo = 'display: none;';
   $sStyleReadInp_est_codigo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_codigo']) && $this->nmgp_cmp_readonly['est_codigo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_codigo']);
       $sStyleReadLab_est_codigo = '';
       $sStyleReadInp_est_codigo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_codigo']) && $this->nmgp_cmp_hidden['est_codigo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="est_codigo" value="<?php echo $this->form_encode_input($est_codigo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_codigo_line" id="hidden_field_data_est_codigo" style="<?php echo $sStyleHidden_est_codigo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_codigo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_codigo_label" style=""><span id="id_label_est_codigo"><?php echo $this->nm_new_label['est_codigo']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['php_cmp_required']['est_codigo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['php_cmp_required']['est_codigo'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_codigo"]) &&  $this->nmgp_cmp_readonly["est_codigo"] == "on") { 

 ?>
<input type="hidden" name="est_codigo" value="<?php echo $this->form_encode_input($est_codigo) . "\">" . $est_codigo . ""; ?>
<?php } else { ?>
<span id="id_read_on_est_codigo" class="sc-ui-readonly-est_codigo css_est_codigo_line" style="<?php echo $sStyleReadLab_est_codigo; ?>"><?php echo $this->form_format_readonly("est_codigo", $this->form_encode_input($this->est_codigo)); ?></span><span id="id_read_off_est_codigo" class="css_read_off_est_codigo<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_est_codigo; ?>">
 <input class="sc-js-input scFormObjectOdd css_est_codigo_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_est_codigo" type=text name="est_codigo" value="<?php echo $this->form_encode_input($est_codigo) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=3"; } ?> maxlength=3 alt="{datatype: 'text', maxLength: 3, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
<span class="css_est_codigo_label scFormDataHelpOdd">&nbsp;Ej. 001
</span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_codigo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_codigo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['est_padronrimpe']))
   {
       $this->nm_new_label['est_padronrimpe'] = "" . $this->Ini->Nm_lang['lang_rimpe'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_padronrimpe = $this->est_padronrimpe;
   $sStyleHidden_est_padronrimpe = '';
   if (isset($this->nmgp_cmp_hidden['est_padronrimpe']) && $this->nmgp_cmp_hidden['est_padronrimpe'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_padronrimpe']);
       $sStyleHidden_est_padronrimpe = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_padronrimpe = 'display: none;';
   $sStyleReadInp_est_padronrimpe = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_padronrimpe']) && $this->nmgp_cmp_readonly['est_padronrimpe'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_padronrimpe']);
       $sStyleReadLab_est_padronrimpe = '';
       $sStyleReadInp_est_padronrimpe = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_padronrimpe']) && $this->nmgp_cmp_hidden['est_padronrimpe'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="est_padronrimpe" value="<?php echo $this->form_encode_input($this->est_padronrimpe) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->est_padronrimpe_1 = explode(";", trim($this->est_padronrimpe));
  } 
  else
  {
      if (empty($this->est_padronrimpe))
      {
          $this->est_padronrimpe_1= array(); 
          $this->est_padronrimpe= "N";
      } 
      else
      {
          $this->est_padronrimpe_1= $this->est_padronrimpe; 
          $this->est_padronrimpe= ""; 
          foreach ($this->est_padronrimpe_1 as $cada_est_padronrimpe)
          {
             if (!empty($est_padronrimpe))
             {
                 $this->est_padronrimpe.= ";"; 
             } 
             $this->est_padronrimpe.= $cada_est_padronrimpe; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_est_padronrimpe_line" id="hidden_field_data_est_padronrimpe" style="<?php echo $sStyleHidden_est_padronrimpe; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_padronrimpe_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_padronrimpe_label" style=""><span id="id_label_est_padronrimpe"><?php echo $this->nm_new_label['est_padronrimpe']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_padronrimpe"]) &&  $this->nmgp_cmp_readonly["est_padronrimpe"] == "on") { 

$est_padronrimpe_look = "";
 if ($this->est_padronrimpe == "S") { $est_padronrimpe_look .= "" ;} 
 if (empty($est_padronrimpe_look)) { $est_padronrimpe_look = $this->est_padronrimpe; }
?>
<input type="hidden" name="est_padronrimpe" value="<?php echo $this->form_encode_input($est_padronrimpe) . "\">" . $est_padronrimpe_look . ""; ?>
<?php } else { ?>

<?php

$est_padronrimpe_look = "";
 if ($this->est_padronrimpe == "S") { $est_padronrimpe_look .= "" ;} 
 if (empty($est_padronrimpe_look)) { $est_padronrimpe_look = $this->est_padronrimpe; }
?>
<span id="id_read_on_est_padronrimpe" class="css_est_padronrimpe_line" style="<?php echo $sStyleReadLab_est_padronrimpe; ?>"><?php echo $this->form_format_readonly("est_padronrimpe", $this->form_encode_input($est_padronrimpe_look)); ?></span><span id="id_read_off_est_padronrimpe" class="css_read_off_est_padronrimpe css_est_padronrimpe_line" style="<?php echo $sStyleReadInp_est_padronrimpe; ?>"><?php echo "<div id=\"idAjaxCheckbox_est_padronrimpe\" style=\"display: inline-block\" class=\"css_est_padronrimpe_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_est_padronrimpe_line"><?php $tempOptionId = "id-opt-est_padronrimpe" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-est_padronrimpe sc-ui-checkbox-est_padronrimpe" name="est_padronrimpe[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_padronrimpe'][] = 'S'; ?>
<?php  if (in_array("S", $this->est_padronrimpe_1))  { echo " checked" ;} ?> onClick="do_ajax_form_del_establecimiento_mob_event_est_padronrimpe_onclick();" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_padronrimpe_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_padronrimpe_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['est_leyenda_rimpe']))
   {
       $this->nm_new_label['est_leyenda_rimpe'] = "" . $this->Ini->Nm_lang['lang_tipo_rimpe'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_leyenda_rimpe = $this->est_leyenda_rimpe;
   $sStyleHidden_est_leyenda_rimpe = '';
   if (isset($this->nmgp_cmp_hidden['est_leyenda_rimpe']) && $this->nmgp_cmp_hidden['est_leyenda_rimpe'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_leyenda_rimpe']);
       $sStyleHidden_est_leyenda_rimpe = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_leyenda_rimpe = 'display: none;';
   $sStyleReadInp_est_leyenda_rimpe = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_leyenda_rimpe']) && $this->nmgp_cmp_readonly['est_leyenda_rimpe'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_leyenda_rimpe']);
       $sStyleReadLab_est_leyenda_rimpe = '';
       $sStyleReadInp_est_leyenda_rimpe = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_leyenda_rimpe']) && $this->nmgp_cmp_hidden['est_leyenda_rimpe'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="est_leyenda_rimpe" value="<?php echo $this->form_encode_input($this->est_leyenda_rimpe) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_leyenda_rimpe_line" id="hidden_field_data_est_leyenda_rimpe" style="<?php echo $sStyleHidden_est_leyenda_rimpe; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_leyenda_rimpe_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_leyenda_rimpe_label" style=""><span id="id_label_est_leyenda_rimpe"><?php echo $this->nm_new_label['est_leyenda_rimpe']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_leyenda_rimpe"]) &&  $this->nmgp_cmp_readonly["est_leyenda_rimpe"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe'] = array(); 
    }

   $old_value_est_id = $this->est_id;
   $this->nm_tira_formatacao();


   $unformatted_value_est_id = $this->est_id;

   $est_padronrimpe_val_str = "''";
   if (!empty($this->est_padronrimpe))
   {
       if (is_array($this->est_padronrimpe))
       {
           $Tmp_array = $this->est_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->est_padronrimpe);
       }
       $est_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $est_padronrimpe_val_str)
          {
             $est_padronrimpe_val_str .= ", ";
          }
          $est_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $est_iva_diferenciado_val_str = "''";
   if (!empty($this->est_iva_diferenciado))
   {
       if (is_array($this->est_iva_diferenciado))
       {
           $Tmp_array = $this->est_iva_diferenciado;
       }
       else
       {
           $Tmp_array = explode(";", $this->est_iva_diferenciado);
       }
       $est_iva_diferenciado_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $est_iva_diferenciado_val_str)
          {
             $est_iva_diferenciado_val_str .= ", ";
          }
          $est_iva_diferenciado_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $bodega_val_str = "''";
   if (!empty($this->bodega))
   {
       if (is_array($this->bodega))
       {
           $Tmp_array = $this->bodega;
       }
       else
       {
           $Tmp_array = explode(";", $this->bodega);
       }
       $bodega_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $bodega_val_str)
          {
             $bodega_val_str .= ", ";
          }
          $bodega_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_nombre, dec_nombre  FROM v_del_leyendas_rimpe  ORDER BY dec_nombre";

   $this->est_id = $old_value_est_id;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe'][] = $rs->fields[0];
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
   $est_leyenda_rimpe_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_leyenda_rimpe_1))
          {
              foreach ($this->est_leyenda_rimpe_1 as $tmp_est_leyenda_rimpe)
              {
                  if (trim($tmp_est_leyenda_rimpe) === trim($cadaselect[1])) {$est_leyenda_rimpe_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_leyenda_rimpe) && trim($this->est_leyenda_rimpe) === trim($cadaselect[1])) {$est_leyenda_rimpe_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="est_leyenda_rimpe" value="<?php echo $this->form_encode_input($est_leyenda_rimpe) . "\">" . $est_leyenda_rimpe_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_est_leyenda_rimpe();
   $x = 0 ; 
   $est_leyenda_rimpe_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_leyenda_rimpe_1))
          {
              foreach ($this->est_leyenda_rimpe_1 as $tmp_est_leyenda_rimpe)
              {
                  if (trim($tmp_est_leyenda_rimpe) === trim($cadaselect[1])) {$est_leyenda_rimpe_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_leyenda_rimpe) && trim($this->est_leyenda_rimpe) === trim($cadaselect[1])) { $est_leyenda_rimpe_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($est_leyenda_rimpe_look))
          {
              $est_leyenda_rimpe_look = $this->est_leyenda_rimpe;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_est_leyenda_rimpe\" class=\"css_est_leyenda_rimpe_line\" style=\"" .  $sStyleReadLab_est_leyenda_rimpe . "\">" . $this->form_format_readonly("est_leyenda_rimpe", $this->form_encode_input($est_leyenda_rimpe_look)) . "</span><span id=\"id_read_off_est_leyenda_rimpe\" class=\"css_read_off_est_leyenda_rimpe" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_est_leyenda_rimpe . "\">";
   echo " <span id=\"idAjaxSelect_est_leyenda_rimpe\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_est_leyenda_rimpe_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_est_leyenda_rimpe\" name=\"est_leyenda_rimpe\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_leyenda_rimpe'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->est_leyenda_rimpe) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->est_leyenda_rimpe)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_leyenda_rimpe_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_leyenda_rimpe_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['est_pais']))
           {
               $this->nmgp_cmp_readonly['est_pais'] = 'on';
           }
?>


   <?php
   if (!isset($this->nm_new_label['est_iva_diferenciado']))
   {
       $this->nm_new_label['est_iva_diferenciado'] = "" . $this->Ini->Nm_lang['lang_iva_diferenciado'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_iva_diferenciado = $this->est_iva_diferenciado;
   $sStyleHidden_est_iva_diferenciado = '';
   if (isset($this->nmgp_cmp_hidden['est_iva_diferenciado']) && $this->nmgp_cmp_hidden['est_iva_diferenciado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_iva_diferenciado']);
       $sStyleHidden_est_iva_diferenciado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_iva_diferenciado = 'display: none;';
   $sStyleReadInp_est_iva_diferenciado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_iva_diferenciado']) && $this->nmgp_cmp_readonly['est_iva_diferenciado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_iva_diferenciado']);
       $sStyleReadLab_est_iva_diferenciado = '';
       $sStyleReadInp_est_iva_diferenciado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_iva_diferenciado']) && $this->nmgp_cmp_hidden['est_iva_diferenciado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="est_iva_diferenciado" value="<?php echo $this->form_encode_input($this->est_iva_diferenciado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->est_iva_diferenciado_1 = explode(";", trim($this->est_iva_diferenciado));
  } 
  else
  {
      if (empty($this->est_iva_diferenciado))
      {
          $this->est_iva_diferenciado_1= array(); 
          $this->est_iva_diferenciado= "N";
      } 
      else
      {
          $this->est_iva_diferenciado_1= $this->est_iva_diferenciado; 
          $this->est_iva_diferenciado= ""; 
          foreach ($this->est_iva_diferenciado_1 as $cada_est_iva_diferenciado)
          {
             if (!empty($est_iva_diferenciado))
             {
                 $this->est_iva_diferenciado.= ";"; 
             } 
             $this->est_iva_diferenciado.= $cada_est_iva_diferenciado; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_est_iva_diferenciado_line" id="hidden_field_data_est_iva_diferenciado" style="<?php echo $sStyleHidden_est_iva_diferenciado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_iva_diferenciado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_iva_diferenciado_label" style=""><span id="id_label_est_iva_diferenciado"><?php echo $this->nm_new_label['est_iva_diferenciado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_iva_diferenciado"]) &&  $this->nmgp_cmp_readonly["est_iva_diferenciado"] == "on") { 

$est_iva_diferenciado_look = "";
 if ($this->est_iva_diferenciado == "S") { $est_iva_diferenciado_look .= "" ;} 
 if (empty($est_iva_diferenciado_look)) { $est_iva_diferenciado_look = $this->est_iva_diferenciado; }
?>
<input type="hidden" name="est_iva_diferenciado" value="<?php echo $this->form_encode_input($est_iva_diferenciado) . "\">" . $est_iva_diferenciado_look . ""; ?>
<?php } else { ?>

<?php

$est_iva_diferenciado_look = "";
 if ($this->est_iva_diferenciado == "S") { $est_iva_diferenciado_look .= "" ;} 
 if (empty($est_iva_diferenciado_look)) { $est_iva_diferenciado_look = $this->est_iva_diferenciado; }
?>
<span id="id_read_on_est_iva_diferenciado" class="css_est_iva_diferenciado_line" style="<?php echo $sStyleReadLab_est_iva_diferenciado; ?>"><?php echo $this->form_format_readonly("est_iva_diferenciado", $this->form_encode_input($est_iva_diferenciado_look)); ?></span><span id="id_read_off_est_iva_diferenciado" class="css_read_off_est_iva_diferenciado css_est_iva_diferenciado_line" style="<?php echo $sStyleReadInp_est_iva_diferenciado; ?>"><?php echo "<div id=\"idAjaxCheckbox_est_iva_diferenciado\" style=\"display: inline-block\" class=\"css_est_iva_diferenciado_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_est_iva_diferenciado_line"><?php $tempOptionId = "id-opt-est_iva_diferenciado" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-est_iva_diferenciado sc-ui-checkbox-est_iva_diferenciado" name="est_iva_diferenciado[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_iva_diferenciado'][] = 'S'; ?>
<?php  if (in_array("S", $this->est_iva_diferenciado_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_iva_diferenciado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_iva_diferenciado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['est_pais']))
   {
       $this->nm_new_label['est_pais'] = "" . $this->Ini->Nm_lang['lang_pais'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_pais = $this->est_pais;
   $sStyleHidden_est_pais = '';
   if (isset($this->nmgp_cmp_hidden['est_pais']) && $this->nmgp_cmp_hidden['est_pais'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_pais']);
       $sStyleHidden_est_pais = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_pais = 'display: none;';
   $sStyleReadInp_est_pais = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["est_pais"]) &&  $this->nmgp_cmp_readonly["est_pais"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_pais']);
       $sStyleReadLab_est_pais = '';
       $sStyleReadInp_est_pais = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_pais']) && $this->nmgp_cmp_hidden['est_pais'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="est_pais" value="<?php echo $this->form_encode_input($this->est_pais) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_pais_line" id="hidden_field_data_est_pais" style="<?php echo $sStyleHidden_est_pais; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_pais_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_pais_label" style=""><span id="id_label_est_pais"><?php echo $this->nm_new_label['est_pais']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["est_pais"]) &&  $this->nmgp_cmp_readonly["est_pais"] == "on")) { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_pais'] = array(); 
    }

   $old_value_est_id = $this->est_id;
   $this->nm_tira_formatacao();


   $unformatted_value_est_id = $this->est_id;

   $est_padronrimpe_val_str = "''";
   if (!empty($this->est_padronrimpe))
   {
       if (is_array($this->est_padronrimpe))
       {
           $Tmp_array = $this->est_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->est_padronrimpe);
       }
       $est_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $est_padronrimpe_val_str)
          {
             $est_padronrimpe_val_str .= ", ";
          }
          $est_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $est_iva_diferenciado_val_str = "''";
   if (!empty($this->est_iva_diferenciado))
   {
       if (is_array($this->est_iva_diferenciado))
       {
           $Tmp_array = $this->est_iva_diferenciado;
       }
       else
       {
           $Tmp_array = explode(";", $this->est_iva_diferenciado);
       }
       $est_iva_diferenciado_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $est_iva_diferenciado_val_str)
          {
             $est_iva_diferenciado_val_str .= ", ";
          }
          $est_iva_diferenciado_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $bodega_val_str = "''";
   if (!empty($this->bodega))
   {
       if (is_array($this->bodega))
       {
           $Tmp_array = $this->bodega;
       }
       else
       {
           $Tmp_array = explode(";", $this->bodega);
       }
       $bodega_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $bodega_val_str)
          {
             $bodega_val_str .= ", ";
          }
          $bodega_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT pai_id, pai_nombre  FROM sis_pais  ORDER BY pai_nombre";

   $this->est_id = $old_value_est_id;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_pais'][] = $rs->fields[0];
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
   $est_pais_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_pais_1))
          {
              foreach ($this->est_pais_1 as $tmp_est_pais)
              {
                  if (trim($tmp_est_pais) === trim($cadaselect[1])) {$est_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_pais) && trim($this->est_pais) === trim($cadaselect[1])) {$est_pais_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="est_pais" value="<?php echo $this->form_encode_input($est_pais) . "\"><span id=\"id_ajax_label_est_pais\">" . $est_pais_look . "</span>"; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_est_pais();
   $x = 0 ; 
   $est_pais_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_pais_1))
          {
              foreach ($this->est_pais_1 as $tmp_est_pais)
              {
                  if (trim($tmp_est_pais) === trim($cadaselect[1])) {$est_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_pais) && trim($this->est_pais) === trim($cadaselect[1])) { $est_pais_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($est_pais_look))
          {
              $est_pais_look = $this->est_pais;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_est_pais\" class=\"css_est_pais_line\" style=\"" .  $sStyleReadLab_est_pais . "\">" . $this->form_format_readonly("est_pais", $this->form_encode_input($est_pais_look)) . "</span><span id=\"id_read_off_est_pais\" class=\"css_read_off_est_pais" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_est_pais . "\">";
   echo " <span id=\"idAjaxSelect_est_pais\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_est_pais_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_est_pais\" name=\"est_pais\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->est_pais) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->est_pais)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_pais_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_pais_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['est_provincia']))
   {
       $this->nm_new_label['est_provincia'] = "" . $this->Ini->Nm_lang['lang_provincia'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_provincia = $this->est_provincia;
   $sStyleHidden_est_provincia = '';
   if (isset($this->nmgp_cmp_hidden['est_provincia']) && $this->nmgp_cmp_hidden['est_provincia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_provincia']);
       $sStyleHidden_est_provincia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_provincia = 'display: none;';
   $sStyleReadInp_est_provincia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_provincia']) && $this->nmgp_cmp_readonly['est_provincia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_provincia']);
       $sStyleReadLab_est_provincia = '';
       $sStyleReadInp_est_provincia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_provincia']) && $this->nmgp_cmp_hidden['est_provincia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="est_provincia" value="<?php echo $this->form_encode_input($this->est_provincia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_provincia_line" id="hidden_field_data_est_provincia" style="<?php echo $sStyleHidden_est_provincia; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_provincia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_provincia_label" style=""><span id="id_label_est_provincia"><?php echo $this->nm_new_label['est_provincia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_provincia"]) &&  $this->nmgp_cmp_readonly["est_provincia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_provincia'] = array(); 
}
if ($this->est_pais != "")
{ 
   $this->nm_clear_val("est_pais");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_provincia'] = array(); 
    }

   $old_value_est_id = $this->est_id;
   $this->nm_tira_formatacao();


   $unformatted_value_est_id = $this->est_id;

   $nm_comando = "SELECT pro_id, pro_nombre  FROM sis_provincia WHERE pro_pais='$this->est_pais'  ORDER BY pro_nombre";

   $this->est_id = $old_value_est_id;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_provincia'][] = $rs->fields[0];
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
   $x = 0; 
   $est_provincia_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_provincia_1))
          {
              foreach ($this->est_provincia_1 as $tmp_est_provincia)
              {
                  if (trim($tmp_est_provincia) === trim($cadaselect[1])) {$est_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_provincia) && trim($this->est_provincia) === trim($cadaselect[1])) {$est_provincia_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="est_provincia" value="<?php echo $this->form_encode_input($est_provincia) . "\">" . $est_provincia_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_est_provincia();
   $x = 0 ; 
   $est_provincia_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_provincia_1))
          {
              foreach ($this->est_provincia_1 as $tmp_est_provincia)
              {
                  if (trim($tmp_est_provincia) === trim($cadaselect[1])) {$est_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_provincia) && trim($this->est_provincia) === trim($cadaselect[1])) { $est_provincia_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($est_provincia_look))
          {
              $est_provincia_look = $this->est_provincia;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_est_provincia\" class=\"css_est_provincia_line\" style=\"" .  $sStyleReadLab_est_provincia . "\">" . $this->form_format_readonly("est_provincia", $this->form_encode_input($est_provincia_look)) . "</span><span id=\"id_read_off_est_provincia\" class=\"css_read_off_est_provincia" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_est_provincia . "\">";
   echo " <span id=\"idAjaxSelect_est_provincia\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_est_provincia_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_est_provincia\" name=\"est_provincia\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->est_provincia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->est_provincia)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_provincia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_provincia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['est_canton']))
   {
       $this->nm_new_label['est_canton'] = "" . $this->Ini->Nm_lang['lang_canton'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_canton = $this->est_canton;
   $sStyleHidden_est_canton = '';
   if (isset($this->nmgp_cmp_hidden['est_canton']) && $this->nmgp_cmp_hidden['est_canton'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_canton']);
       $sStyleHidden_est_canton = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_canton = 'display: none;';
   $sStyleReadInp_est_canton = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_canton']) && $this->nmgp_cmp_readonly['est_canton'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_canton']);
       $sStyleReadLab_est_canton = '';
       $sStyleReadInp_est_canton = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_canton']) && $this->nmgp_cmp_hidden['est_canton'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="est_canton" value="<?php echo $this->form_encode_input($this->est_canton) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_canton_line" id="hidden_field_data_est_canton" style="<?php echo $sStyleHidden_est_canton; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_canton_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_canton_label" style=""><span id="id_label_est_canton"><?php echo $this->nm_new_label['est_canton']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_canton"]) &&  $this->nmgp_cmp_readonly["est_canton"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_canton'] = array(); 
}
if ($this->est_provincia != "")
{ 
   $this->nm_clear_val("est_provincia");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_canton']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_canton']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_canton'] = array(); 
    }

   $old_value_est_id = $this->est_id;
   $this->nm_tira_formatacao();


   $unformatted_value_est_id = $this->est_id;

   $nm_comando = "SELECT can_id, can_nombre  FROM sis_canton  where can_provincia='$this->est_provincia' ORDER BY can_nombre";

   $this->est_id = $old_value_est_id;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_canton'][] = $rs->fields[0];
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
   $x = 0; 
   $est_canton_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_canton_1))
          {
              foreach ($this->est_canton_1 as $tmp_est_canton)
              {
                  if (trim($tmp_est_canton) === trim($cadaselect[1])) {$est_canton_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_canton) && trim($this->est_canton) === trim($cadaselect[1])) {$est_canton_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="est_canton" value="<?php echo $this->form_encode_input($est_canton) . "\">" . $est_canton_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_est_canton();
   $x = 0 ; 
   $est_canton_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_canton_1))
          {
              foreach ($this->est_canton_1 as $tmp_est_canton)
              {
                  if (trim($tmp_est_canton) === trim($cadaselect[1])) {$est_canton_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_canton) && trim($this->est_canton) === trim($cadaselect[1])) { $est_canton_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($est_canton_look))
          {
              $est_canton_look = $this->est_canton;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_est_canton\" class=\"css_est_canton_line\" style=\"" .  $sStyleReadLab_est_canton . "\">" . $this->form_format_readonly("est_canton", $this->form_encode_input($est_canton_look)) . "</span><span id=\"id_read_off_est_canton\" class=\"css_read_off_est_canton" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_est_canton . "\">";
   echo " <span id=\"idAjaxSelect_est_canton\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_est_canton_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_est_canton\" name=\"est_canton\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->est_canton) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->est_canton)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_canton_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_canton_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['est_direccion']))
    {
        $this->nm_new_label['est_direccion'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_direccion = $this->est_direccion;
   $sStyleHidden_est_direccion = '';
   if (isset($this->nmgp_cmp_hidden['est_direccion']) && $this->nmgp_cmp_hidden['est_direccion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_direccion']);
       $sStyleHidden_est_direccion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_direccion = 'display: none;';
   $sStyleReadInp_est_direccion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_direccion']) && $this->nmgp_cmp_readonly['est_direccion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_direccion']);
       $sStyleReadLab_est_direccion = '';
       $sStyleReadInp_est_direccion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_direccion']) && $this->nmgp_cmp_hidden['est_direccion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="est_direccion" value="<?php echo $this->form_encode_input($est_direccion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_direccion_line" id="hidden_field_data_est_direccion" style="<?php echo $sStyleHidden_est_direccion; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_direccion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_direccion_label" style=""><span id="id_label_est_direccion"><?php echo $this->nm_new_label['est_direccion']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['php_cmp_required']['est_direccion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['php_cmp_required']['est_direccion'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_direccion"]) &&  $this->nmgp_cmp_readonly["est_direccion"] == "on") { 

 ?>
<input type="hidden" name="est_direccion" value="<?php echo $this->form_encode_input($est_direccion) . "\">" . $est_direccion . ""; ?>
<?php } else { ?>
<span id="id_read_on_est_direccion" class="sc-ui-readonly-est_direccion css_est_direccion_line" style="<?php echo $sStyleReadLab_est_direccion; ?>"><?php echo $this->form_format_readonly("est_direccion", $this->form_encode_input($this->est_direccion)); ?></span><span id="id_read_off_est_direccion" class="css_read_off_est_direccion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_est_direccion; ?>">
 <input class="sc-js-input scFormObjectOdd css_est_direccion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_est_direccion" type=text name="est_direccion" value="<?php echo $this->form_encode_input($est_direccion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_direccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_direccion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['est_telefono']))
    {
        $this->nm_new_label['est_telefono'] = "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_telefono = $this->est_telefono;
   $sStyleHidden_est_telefono = '';
   if (isset($this->nmgp_cmp_hidden['est_telefono']) && $this->nmgp_cmp_hidden['est_telefono'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_telefono']);
       $sStyleHidden_est_telefono = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_telefono = 'display: none;';
   $sStyleReadInp_est_telefono = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_telefono']) && $this->nmgp_cmp_readonly['est_telefono'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_telefono']);
       $sStyleReadLab_est_telefono = '';
       $sStyleReadInp_est_telefono = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_telefono']) && $this->nmgp_cmp_hidden['est_telefono'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="est_telefono" value="<?php echo $this->form_encode_input($est_telefono) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_telefono_line" id="hidden_field_data_est_telefono" style="<?php echo $sStyleHidden_est_telefono; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_telefono_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_telefono_label" style=""><span id="id_label_est_telefono"><?php echo $this->nm_new_label['est_telefono']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_telefono"]) &&  $this->nmgp_cmp_readonly["est_telefono"] == "on") { 

 ?>
<input type="hidden" name="est_telefono" value="<?php echo $this->form_encode_input($est_telefono) . "\">" . $est_telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_est_telefono" class="sc-ui-readonly-est_telefono css_est_telefono_line" style="<?php echo $sStyleReadLab_est_telefono; ?>"><?php echo $this->form_format_readonly("est_telefono", $this->form_encode_input($this->est_telefono)); ?></span><span id="id_read_off_est_telefono" class="css_read_off_est_telefono<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_est_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd css_est_telefono_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_est_telefono" type=text name="est_telefono" value="<?php echo $this->form_encode_input($est_telefono) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789-") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_telefono_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_telefono_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['est_estado']))
   {
       $this->nm_new_label['est_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $est_estado = $this->est_estado;
   $sStyleHidden_est_estado = '';
   if (isset($this->nmgp_cmp_hidden['est_estado']) && $this->nmgp_cmp_hidden['est_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['est_estado']);
       $sStyleHidden_est_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_est_estado = 'display: none;';
   $sStyleReadInp_est_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['est_estado']) && $this->nmgp_cmp_readonly['est_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['est_estado']);
       $sStyleReadLab_est_estado = '';
       $sStyleReadInp_est_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['est_estado']) && $this->nmgp_cmp_hidden['est_estado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="est_estado" value="<?php echo $this->form_encode_input($this->est_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_est_estado_line" id="hidden_field_data_est_estado" style="<?php echo $sStyleHidden_est_estado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_est_estado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_est_estado_label" style=""><span id="id_label_est_estado"><?php echo $this->nm_new_label['est_estado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["est_estado"]) &&  $this->nmgp_cmp_readonly["est_estado"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_estado'] = array(); 
    }

   $old_value_est_id = $this->est_id;
   $this->nm_tira_formatacao();


   $unformatted_value_est_id = $this->est_id;

   $est_padronrimpe_val_str = "''";
   if (!empty($this->est_padronrimpe))
   {
       if (is_array($this->est_padronrimpe))
       {
           $Tmp_array = $this->est_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->est_padronrimpe);
       }
       $est_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $est_padronrimpe_val_str)
          {
             $est_padronrimpe_val_str .= ", ";
          }
          $est_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $est_iva_diferenciado_val_str = "''";
   if (!empty($this->est_iva_diferenciado))
   {
       if (is_array($this->est_iva_diferenciado))
       {
           $Tmp_array = $this->est_iva_diferenciado;
       }
       else
       {
           $Tmp_array = explode(";", $this->est_iva_diferenciado);
       }
       $est_iva_diferenciado_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $est_iva_diferenciado_val_str)
          {
             $est_iva_diferenciado_val_str .= ", ";
          }
          $est_iva_diferenciado_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $bodega_val_str = "''";
   if (!empty($this->bodega))
   {
       if (is_array($this->bodega))
       {
           $Tmp_array = $this->bodega;
       }
       else
       {
           $Tmp_array = explode(";", $this->bodega);
       }
       $bodega_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $bodega_val_str)
          {
             $bodega_val_str .= ", ";
          }
          $bodega_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_estado  ORDER BY dec_nombre";

   $this->est_id = $old_value_est_id;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_est_estado'][] = $rs->fields[0];
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
   $est_estado_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_estado_1))
          {
              foreach ($this->est_estado_1 as $tmp_est_estado)
              {
                  if (trim($tmp_est_estado) === trim($cadaselect[1])) {$est_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_estado) && trim($this->est_estado) === trim($cadaselect[1])) {$est_estado_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="est_estado" value="<?php echo $this->form_encode_input($est_estado) . "\">" . $est_estado_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_est_estado();
   $x = 0 ; 
   $est_estado_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->est_estado_1))
          {
              foreach ($this->est_estado_1 as $tmp_est_estado)
              {
                  if (trim($tmp_est_estado) === trim($cadaselect[1])) {$est_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->est_estado) && trim($this->est_estado) === trim($cadaselect[1])) { $est_estado_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($est_estado_look))
          {
              $est_estado_look = $this->est_estado;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_est_estado\" class=\"css_est_estado_line\" style=\"" .  $sStyleReadLab_est_estado . "\">" . $this->form_format_readonly("est_estado", $this->form_encode_input($est_estado_look)) . "</span><span id=\"id_read_off_est_estado\" class=\"css_read_off_est_estado" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_est_estado . "\">";
   echo " <span id=\"idAjaxSelect_est_estado\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_est_estado_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_est_estado\" name=\"est_estado\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->est_estado) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->est_estado)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_est_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_est_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['bodega']))
   {
       $this->nm_new_label['bodega'] = "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bodega = $this->bodega;
   if (!isset($this->nmgp_cmp_hidden['bodega']))
   {
       $this->nmgp_cmp_hidden['bodega'] = 'off';
   }
   $sStyleHidden_bodega = '';
   if (isset($this->nmgp_cmp_hidden['bodega']) && $this->nmgp_cmp_hidden['bodega'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bodega']);
       $sStyleHidden_bodega = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bodega = 'display: none;';
   $sStyleReadInp_bodega = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bodega']) && $this->nmgp_cmp_readonly['bodega'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bodega']);
       $sStyleReadLab_bodega = '';
       $sStyleReadInp_bodega = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bodega']) && $this->nmgp_cmp_hidden['bodega'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="bodega" value="<?php echo $this->form_encode_input($this->bodega) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->bodega_1 = explode(";", trim($this->bodega));
  } 
  else
  {
      if (empty($this->bodega))
      {
          $this->bodega_1= array(); 
          $this->bodega= "N";
      } 
      else
      {
          $this->bodega_1= $this->bodega; 
          $this->bodega= ""; 
          foreach ($this->bodega_1 as $cada_bodega)
          {
             if (!empty($bodega))
             {
                 $this->bodega.= ";"; 
             } 
             $this->bodega.= $cada_bodega; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_bodega_line" id="hidden_field_data_bodega" style="<?php echo $sStyleHidden_bodega; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bodega_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bodega_label" style=""><span id="id_label_bodega"><?php echo $this->nm_new_label['bodega']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bodega"]) &&  $this->nmgp_cmp_readonly["bodega"] == "on") { 

$bodega_look = "";
 if ($this->bodega == "S") { $bodega_look .= "" . $this->Ini->Nm_lang['lang_crear_bodega'] . "" ;} 
 if (empty($bodega_look)) { $bodega_look = $this->bodega; }
?>
<input type="hidden" name="bodega" value="<?php echo $this->form_encode_input($bodega) . "\">" . $bodega_look . ""; ?>
<?php } else { ?>

<?php

$bodega_look = "";
 if ($this->bodega == "S") { $bodega_look .= "" . $this->Ini->Nm_lang['lang_crear_bodega'] . "" ;} 
 if (empty($bodega_look)) { $bodega_look = $this->bodega; }
?>
<span id="id_read_on_bodega" class="css_bodega_line" style="<?php echo $sStyleReadLab_bodega; ?>"><?php echo $this->form_format_readonly("bodega", $this->form_encode_input($bodega_look)); ?></span><span id="id_read_off_bodega" class="css_read_off_bodega css_bodega_line" style="<?php echo $sStyleReadInp_bodega; ?>"><?php echo "<div id=\"idAjaxCheckbox_bodega\" style=\"display: inline-block\" class=\"css_bodega_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_bodega_line"><?php $tempOptionId = "id-opt-bodega" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-bodega sc-ui-checkbox-bodega" name="bodega[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['Lookup_bodega'][] = 'S'; ?>
<?php  if (in_array("S", $this->bodega_1))  { echo " checked" ;} ?> onClick="" ><label for="<?php echo $tempOptionId ?>"><?php echo $this->Ini->Nm_lang['lang_crear_bodega']; ?></label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bodega_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bodega_text"></span></td></tr></table></td></tr></table> </TD>
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
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage({title: '', message: "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", isModal: false, timeout: 0, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: true, showBodyIcon: false, isToast: false, toastPos: ""});
</script> 
<?php
      }
?>
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_establecimiento_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_establecimiento_mob");
 parent.scAjaxDetailHeight("form_del_establecimiento_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_establecimiento_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_establecimiento_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['sc_modal'])
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
		if ($("#sc_b_new_t.sc-unique-btn-7").length && $("#sc_b_new_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-8").length && $("#sc_b_ins_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-8").hasClass("disabled")) {
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
		if ($("#sc_b_upd_t.sc-unique-btn-9").length && $("#sc_b_upd_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
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
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-5").length && $("#sc_b_sai_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-11").length && $("#sc_b_sai_t.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-12").length && $("#sc_b_sai_t.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_establecimiento_mob']['buttonStatus'] = $this->nmgp_botoes;
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
