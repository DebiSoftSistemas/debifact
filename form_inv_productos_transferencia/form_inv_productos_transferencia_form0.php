<?php
class form_inv_productos_transferencia_form extends form_inv_productos_transferencia_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " inv_productos_transferencia"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " inv_productos_transferencia"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
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
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
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
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_desc ?>'], 
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_asc ?>']{opacity:1!important;} 
   .scFormLabelOddMult a img{opacity:0;transition:all .2s;} 
   .scFormLabelOddMult:HOVER a img{opacity:1;transition:all .2s;} 
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['embutida_pdf']))
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
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_inv_productos_transferencia/form_inv_productos_transferencia_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_inv_productos_transferencia_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['last'] : 'off'); ?>";
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

include_once('form_inv_productos_transferencia_jquery.php');

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


  scJQGeneralAdd();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

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

  for (var i = 1; i < block.rows.length; i++) {
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/jsrsClient.js" ?>"> 
</script> 
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
 include_once("form_inv_productos_transferencia_js0.php");
?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/jsrsClient.js" ?>"> 
</script> 
<script type="text/javascript"> 
  sc_quant_excl = <?php if (!isset($sc_check_excl)) {$sc_check_excl = array();} echo count($sc_check_excl); ?>; 
  <?php if (!isset($sc_check_incl)) {$sc_check_incl = array();}?>; 
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
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
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
<?php
$_SESSION['scriptcase']['error_span_title']['form_inv_productos_transferencia'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_inv_productos_transferencia'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "R")
{
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "R")
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
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['empty_filter'] = true;
       }
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
   if (!isset($this->nmgp_cmp_hidden['pt_id_']))
   {
       $this->nmgp_cmp_hidden['pt_id_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pt_empresa_']))
   {
       $this->nmgp_cmp_hidden['pt_empresa_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pt_transferencia_']))
   {
       $this->nmgp_cmp_hidden['pt_transferencia_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pt_bodegaorigen_']))
   {
       $this->nmgp_cmp_hidden['pt_bodegaorigen_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pt_bodegadestino_']))
   {
       $this->nmgp_cmp_hidden['pt_bodegadestino_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pt_cantidad_recibida_']))
   {
       $this->nmgp_cmp_hidden['pt_cantidad_recibida_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pt_recibe_']))
   {
       $this->nmgp_cmp_hidden['pt_recibe_'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
$labelRowCount = 0;
?>
   <tr class="sc-ui-header-row" id="sc-id-fixed-headers-row-<?php echo $labelRowCount++ ?>">
<?php
$orderColName = '';
$orderColOrient = '';
$orderColRule = '';
?>
    <script type="text/javascript">
     var orderImgAsc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc ?>";
     var orderImgDesc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc ?>";
     var orderImgNone = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort ?>";
     var orderColName = "";
     function scSetOrderColumn(clickedColumn) {
      $(".sc-ui-img-order-column").attr("src", orderImgNone);
      if (clickedColumn != orderColName) {
       orderColName = clickedColumn;
       orderColOrient = orderImgAsc;
      }
      else if ("" != orderColName) {
       orderColOrient = orderColOrient == orderImgAsc ? orderImgDesc : orderImgAsc;
      }
      else {
       orderColName = "";
       orderColOrient = "";
      }
      $("#sc-id-img-order-" + orderColName).attr("src", orderColOrient);
     }
    </script>
<?php
     $Col_span = "";


       if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") { $Col_span = " colspan=2"; }
 ?>

    <TD class="scFormLabelOddMult sc-col-title" style="display: none;" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult sc-col-title"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult sc-col-title"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if ((!isset($this->nmgp_cmp_hidden['pt_id_']) || $this->nmgp_cmp_hidden['pt_id_'] == 'on') && ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir"))) { 
      if (!isset($this->nm_new_label['pt_id_'])) {
          $this->nm_new_label['pt_id_'] = "" . $this->Ini->Nm_lang['lang_id'] . ""; } ?>
<?php
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;

        // label
        $label_labelContent = $this->nm_new_label['pt_id_'];
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
?>

    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_id__label sc-col-title" id="hidden_field_label_pt_id_" style="<?php echo $sStyleHidden_pt_id_; ?>" > <?php echo $label_final ?> </TD>
   <?php $this->form_fixed_column_no++;}?>

   <?php
    $sStyleHidden_pt_transferencia_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_transferencia_']) && $this->nmgp_cmp_hidden['pt_transferencia_'] == 'off') {
        $sStyleHidden_pt_transferencia_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_transferencia_']) || $this->nmgp_cmp_hidden['pt_transferencia_'] == 'on') {
        if (!isset($this->nm_new_label['pt_transferencia_'])) {
            $this->nm_new_label['pt_transferencia_'] = "" . $this->Ini->Nm_lang['lang_transferencia'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['pt_transferencia_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_fieldName .= "&nbsp;<span class=\"scFormRequiredOddMult\">*</span>&nbsp;";
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_transferencia__label sc-col-title" id="hidden_field_label_pt_transferencia_" style="<?php echo $sStyleHidden_pt_transferencia_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_bodegaorigen_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_bodegaorigen_']) && $this->nmgp_cmp_hidden['pt_bodegaorigen_'] == 'off') {
        $sStyleHidden_pt_bodegaorigen_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_bodegaorigen_']) || $this->nmgp_cmp_hidden['pt_bodegaorigen_'] == 'on') {
        if (!isset($this->nm_new_label['pt_bodegaorigen_'])) {
            $this->nm_new_label['pt_bodegaorigen_'] = "" . $this->Ini->Nm_lang['lang_bodega_origen'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['pt_bodegaorigen_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_fieldName .= "&nbsp;<span class=\"scFormRequiredOddMult\">*</span>&nbsp;";
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_bodegaorigen__label sc-col-title" id="hidden_field_label_pt_bodegaorigen_" style="<?php echo $sStyleHidden_pt_bodegaorigen_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_bodegadestino_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_bodegadestino_']) && $this->nmgp_cmp_hidden['pt_bodegadestino_'] == 'off') {
        $sStyleHidden_pt_bodegadestino_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_bodegadestino_']) || $this->nmgp_cmp_hidden['pt_bodegadestino_'] == 'on') {
        if (!isset($this->nm_new_label['pt_bodegadestino_'])) {
            $this->nm_new_label['pt_bodegadestino_'] = "" . $this->Ini->Nm_lang['lang_bodega_destino'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['pt_bodegadestino_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_fieldName .= "&nbsp;<span class=\"scFormRequiredOddMult\">*</span>&nbsp;";
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_bodegadestino__label sc-col-title" id="hidden_field_label_pt_bodegadestino_" style="<?php echo $sStyleHidden_pt_bodegadestino_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_producto_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_producto_']) && $this->nmgp_cmp_hidden['pt_producto_'] == 'off') {
        $sStyleHidden_pt_producto_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_producto_']) || $this->nmgp_cmp_hidden['pt_producto_'] == 'on') {
        if (!isset($this->nm_new_label['pt_producto_'])) {
            $this->nm_new_label['pt_producto_'] = "" . $this->Ini->Nm_lang['lang_producto'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['pt_producto_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_fieldName .= "&nbsp;<span class=\"scFormRequiredOddMult\">*</span>&nbsp;";
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_producto__label sc-col-title" id="hidden_field_label_pt_producto_" style="<?php echo $sStyleHidden_pt_producto_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_unidad_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_unidad_']) && $this->nmgp_cmp_hidden['pt_unidad_'] == 'off') {
        $sStyleHidden_pt_unidad_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_unidad_']) || $this->nmgp_cmp_hidden['pt_unidad_'] == 'on') {
        if (!isset($this->nm_new_label['pt_unidad_'])) {
            $this->nm_new_label['pt_unidad_'] = "" . $this->Ini->Nm_lang['lang_unidad'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['pt_unidad_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_fieldName .= "&nbsp;<span class=\"scFormRequiredOddMult\">*</span>&nbsp;";
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_unidad__label sc-col-title" id="hidden_field_label_pt_unidad_" style="<?php echo $sStyleHidden_pt_unidad_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_stock_origen_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_stock_origen_']) && $this->nmgp_cmp_hidden['pt_stock_origen_'] == 'off') {
        $sStyleHidden_pt_stock_origen_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_stock_origen_']) || $this->nmgp_cmp_hidden['pt_stock_origen_'] == 'on') {
        if (!isset($this->nm_new_label['pt_stock_origen_'])) {
            $this->nm_new_label['pt_stock_origen_'] = "" . $this->Ini->Nm_lang['lang_stock'] . " " . $this->Ini->Nm_lang['lang_origen'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['pt_stock_origen_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_fieldName .= "&nbsp;<span class=\"scFormRequiredOddMult\">*</span>&nbsp;";
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_stock_origen__label sc-col-title" id="hidden_field_label_pt_stock_origen_" style="<?php echo $sStyleHidden_pt_stock_origen_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_stock_solicitado_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_stock_solicitado_']) && $this->nmgp_cmp_hidden['pt_stock_solicitado_'] == 'off') {
        $sStyleHidden_pt_stock_solicitado_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_stock_solicitado_']) || $this->nmgp_cmp_hidden['pt_stock_solicitado_'] == 'on') {
        if (!isset($this->nm_new_label['pt_stock_solicitado_'])) {
            $this->nm_new_label['pt_stock_solicitado_'] = "" . $this->Ini->Nm_lang['lang_lot_cantidad'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['pt_stock_solicitado_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_fieldName .= "&nbsp;<span class=\"scFormRequiredOddMult\">*</span>&nbsp;";
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_stock_solicitado__label sc-col-title" id="hidden_field_label_pt_stock_solicitado_" style="<?php echo $sStyleHidden_pt_stock_solicitado_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_saldo_origen_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_saldo_origen_']) && $this->nmgp_cmp_hidden['pt_saldo_origen_'] == 'off') {
        $sStyleHidden_pt_saldo_origen_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_saldo_origen_']) || $this->nmgp_cmp_hidden['pt_saldo_origen_'] == 'on') {
        if (!isset($this->nm_new_label['pt_saldo_origen_'])) {
            $this->nm_new_label['pt_saldo_origen_'] = "" . $this->Ini->Nm_lang['lang_saldo'] . " " . $this->Ini->Nm_lang['lang_origen'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['pt_saldo_origen_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_fieldName .= "&nbsp;<span class=\"scFormRequiredOddMult\">*</span>&nbsp;";
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_saldo_origen__label sc-col-title" id="hidden_field_label_pt_saldo_origen_" style="<?php echo $sStyleHidden_pt_saldo_origen_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_empresa_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_empresa_']) && $this->nmgp_cmp_hidden['pt_empresa_'] == 'off') {
        $sStyleHidden_pt_empresa_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_empresa_']) || $this->nmgp_cmp_hidden['pt_empresa_'] == 'on') {
        if (!isset($this->nm_new_label['pt_empresa_'])) {
            $this->nm_new_label['pt_empresa_'] = "Pt Empresa";
        }
        $SC_Label = "" . $this->nm_new_label['pt_empresa_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("pt_empresa", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("pt_empresa", $fieldSortRule);

        if (empty($this->Ini->Label_sort_pos)) {
            $this->Ini->Label_sort_pos = "right_field";
        }

        if (empty($fieldSortIcon)) {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\"><div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\">" . $fieldSortIcon . "\<div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div></div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\"><div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\">" . $fieldSortIcon . "<div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div></div>";
        } else {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        }
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'pt_empresa')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_empresa__label sc-col-title" id="hidden_field_label_pt_empresa_" style="<?php echo $sStyleHidden_pt_empresa_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_cantidad_recibida_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_cantidad_recibida_']) && $this->nmgp_cmp_hidden['pt_cantidad_recibida_'] == 'off') {
        $sStyleHidden_pt_cantidad_recibida_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_cantidad_recibida_']) || $this->nmgp_cmp_hidden['pt_cantidad_recibida_'] == 'on') {
        if (!isset($this->nm_new_label['pt_cantidad_recibida_'])) {
            $this->nm_new_label['pt_cantidad_recibida_'] = "Pt Cantidad Recibida";
        }
        $SC_Label = "" . $this->nm_new_label['pt_cantidad_recibida_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("pt_cantidad_recibida", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("pt_cantidad_recibida", $fieldSortRule);

        if (empty($this->Ini->Label_sort_pos)) {
            $this->Ini->Label_sort_pos = "right_field";
        }

        if (empty($fieldSortIcon)) {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\"><div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\">" . $fieldSortIcon . "\<div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div></div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\"><div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\">" . $fieldSortIcon . "<div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div></div>";
        } else {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        }
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'pt_cantidad_recibida')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_cantidad_recibida__label sc-col-title" id="hidden_field_label_pt_cantidad_recibida_" style="<?php echo $sStyleHidden_pt_cantidad_recibida_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_pt_recibe_ = '';
    if (isset($this->nmgp_cmp_hidden['pt_recibe_']) && $this->nmgp_cmp_hidden['pt_recibe_'] == 'off') {
        $sStyleHidden_pt_recibe_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['pt_recibe_']) || $this->nmgp_cmp_hidden['pt_recibe_'] == 'on') {
        if (!isset($this->nm_new_label['pt_recibe_'])) {
            $this->nm_new_label['pt_recibe_'] = "Pt Recibe";
        }
        $SC_Label = "" . $this->nm_new_label['pt_recibe_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("pt_recibe", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("pt_recibe", $fieldSortRule);

        if (empty($this->Ini->Label_sort_pos)) {
            $this->Ini->Label_sort_pos = "right_field";
        }

        if (empty($fieldSortIcon)) {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\"><div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\">" . $fieldSortIcon . "\<div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div></div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\"><div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\">" . $fieldSortIcon . "<div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div></div>";
        } else {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        }
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'pt_recibe')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_pt_recibe__label sc-col-title" id="hidden_field_label_pt_recibe_" style="<?php echo $sStyleHidden_pt_recibe_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     orderColRule = "<?php echo $orderColRule ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert, $sc_check_incl, $sc_check_excl; 
   $sc_hidden_no = 1; $sc_hidden_yes = 0;
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_form_inv_productos_transferencia);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_inv_productos_transferencia = $this->form_vert_form_inv_productos_transferencia;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_inv_productos_transferencia))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pt_id_']))
           {
               $this->nmgp_cmp_readonly['pt_id_'] = 'on';
           }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pt_transferencia_']))
           {
               $this->nmgp_cmp_readonly['pt_transferencia_'] = 'on';
           }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pt_bodegaorigen_']))
           {
               $this->nmgp_cmp_readonly['pt_bodegaorigen_'] = 'on';
           }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pt_bodegadestino_']))
           {
               $this->nmgp_cmp_readonly['pt_bodegadestino_'] = 'on';
           }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pt_producto_']))
           {
               $this->nmgp_cmp_readonly['pt_producto_'] = 'on';
           }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pt_unidad_']))
           {
               $this->nmgp_cmp_readonly['pt_unidad_'] = 'on';
           }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pt_stock_origen_']))
           {
               $this->nmgp_cmp_readonly['pt_stock_origen_'] = 'on';
           }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pt_saldo_origen_']))
           {
               $this->nmgp_cmp_readonly['pt_saldo_origen_'] = 'on';
           }
   foreach ($this->form_vert_form_inv_productos_transferencia as $sc_seq_vert => $sc_lixo)
   {
       $this->form_fixed_column_no = 0;
       $this->loadRecordState($sc_seq_vert);
       $this->pt_stock_destino_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_stock_destino_'];
       $this->pt_saldo_destino_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_saldo_destino_'];
       $this->pt_estado_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_estado_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['pt_id_'] = true;
           $this->nmgp_cmp_readonly['pt_transferencia_'] = true;
           $this->nmgp_cmp_readonly['pt_bodegaorigen_'] = true;
           $this->nmgp_cmp_readonly['pt_bodegadestino_'] = true;
           $this->nmgp_cmp_readonly['pt_producto_'] = true;
           $this->nmgp_cmp_readonly['pt_unidad_'] = true;
           $this->nmgp_cmp_readonly['pt_stock_origen_'] = true;
           $this->nmgp_cmp_readonly['pt_stock_solicitado_'] = true;
           $this->nmgp_cmp_readonly['pt_saldo_origen_'] = true;
           $this->nmgp_cmp_readonly['pt_empresa_'] = true;
           $this->nmgp_cmp_readonly['pt_cantidad_recibida_'] = true;
           $this->nmgp_cmp_readonly['pt_recibe_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['pt_id_']) || $this->nmgp_cmp_readonly['pt_id_'] != "on") {$this->nmgp_cmp_readonly['pt_id_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_transferencia_']) || $this->nmgp_cmp_readonly['pt_transferencia_'] != "on") {$this->nmgp_cmp_readonly['pt_transferencia_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_bodegaorigen_']) || $this->nmgp_cmp_readonly['pt_bodegaorigen_'] != "on") {$this->nmgp_cmp_readonly['pt_bodegaorigen_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_bodegadestino_']) || $this->nmgp_cmp_readonly['pt_bodegadestino_'] != "on") {$this->nmgp_cmp_readonly['pt_bodegadestino_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_producto_']) || $this->nmgp_cmp_readonly['pt_producto_'] != "on") {$this->nmgp_cmp_readonly['pt_producto_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_unidad_']) || $this->nmgp_cmp_readonly['pt_unidad_'] != "on") {$this->nmgp_cmp_readonly['pt_unidad_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_stock_origen_']) || $this->nmgp_cmp_readonly['pt_stock_origen_'] != "on") {$this->nmgp_cmp_readonly['pt_stock_origen_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_stock_solicitado_']) || $this->nmgp_cmp_readonly['pt_stock_solicitado_'] != "on") {$this->nmgp_cmp_readonly['pt_stock_solicitado_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_saldo_origen_']) || $this->nmgp_cmp_readonly['pt_saldo_origen_'] != "on") {$this->nmgp_cmp_readonly['pt_saldo_origen_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_empresa_']) || $this->nmgp_cmp_readonly['pt_empresa_'] != "on") {$this->nmgp_cmp_readonly['pt_empresa_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_cantidad_recibida_']) || $this->nmgp_cmp_readonly['pt_cantidad_recibida_'] != "on") {$this->nmgp_cmp_readonly['pt_cantidad_recibida_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pt_recibe_']) || $this->nmgp_cmp_readonly['pt_recibe_'] != "on") {$this->nmgp_cmp_readonly['pt_recibe_'] = false;}
       }
            if (isset($this->form_vert_form_preenchimento[$sc_seq_vert])) {
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
            }
        $this->pt_id_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_id_']; 
       $pt_id_ = $this->pt_id_; 
       if (!isset($this->nmgp_cmp_hidden['pt_id_']))
       {
           $this->nmgp_cmp_hidden['pt_id_'] = 'off';
       }
       $sStyleHidden_pt_id_ = '';
       if (isset($sCheckRead_pt_id_))
       {
           unset($sCheckRead_pt_id_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_id_']))
       {
           $sCheckRead_pt_id_ = $this->nmgp_cmp_readonly['pt_id_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_id_']) && $this->nmgp_cmp_hidden['pt_id_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_id_']);
           $sStyleHidden_pt_id_ = 'display: none;';
       }
       $bTestReadOnly_pt_id_ = true;
       $sStyleReadLab_pt_id_ = 'display: none;';
       $sStyleReadInp_pt_id_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pt_id_"]) &&  $this->nmgp_cmp_readonly["pt_id_"] == "on"))
       {
           $bTestReadOnly_pt_id_ = false;
           unset($this->nmgp_cmp_readonly['pt_id_']);
           $sStyleReadLab_pt_id_ = '';
           $sStyleReadInp_pt_id_ = 'display: none;';
       }
       $this->pt_transferencia_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_transferencia_']; 
       $pt_transferencia_ = $this->pt_transferencia_; 
       if (!isset($this->nmgp_cmp_hidden['pt_transferencia_']))
       {
           $this->nmgp_cmp_hidden['pt_transferencia_'] = 'off';
       }
       $sStyleHidden_pt_transferencia_ = '';
       if (isset($sCheckRead_pt_transferencia_))
       {
           unset($sCheckRead_pt_transferencia_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_transferencia_']))
       {
           $sCheckRead_pt_transferencia_ = $this->nmgp_cmp_readonly['pt_transferencia_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_transferencia_']) && $this->nmgp_cmp_hidden['pt_transferencia_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_transferencia_']);
           $sStyleHidden_pt_transferencia_ = 'display: none;';
       }
       $bTestReadOnly_pt_transferencia_ = true;
       $sStyleReadLab_pt_transferencia_ = 'display: none;';
       $sStyleReadInp_pt_transferencia_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pt_transferencia_"]) &&  $this->nmgp_cmp_readonly["pt_transferencia_"] == "on"))
       {
           $bTestReadOnly_pt_transferencia_ = false;
           unset($this->nmgp_cmp_readonly['pt_transferencia_']);
           $sStyleReadLab_pt_transferencia_ = '';
           $sStyleReadInp_pt_transferencia_ = 'display: none;';
       }
       $this->pt_bodegaorigen_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_bodegaorigen_']; 
       $pt_bodegaorigen_ = $this->pt_bodegaorigen_; 
       if (!isset($this->nmgp_cmp_hidden['pt_bodegaorigen_']))
       {
           $this->nmgp_cmp_hidden['pt_bodegaorigen_'] = 'off';
       }
       $sStyleHidden_pt_bodegaorigen_ = '';
       if (isset($sCheckRead_pt_bodegaorigen_))
       {
           unset($sCheckRead_pt_bodegaorigen_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_bodegaorigen_']))
       {
           $sCheckRead_pt_bodegaorigen_ = $this->nmgp_cmp_readonly['pt_bodegaorigen_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_bodegaorigen_']) && $this->nmgp_cmp_hidden['pt_bodegaorigen_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_bodegaorigen_']);
           $sStyleHidden_pt_bodegaorigen_ = 'display: none;';
       }
       $bTestReadOnly_pt_bodegaorigen_ = true;
       $sStyleReadLab_pt_bodegaorigen_ = 'display: none;';
       $sStyleReadInp_pt_bodegaorigen_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pt_bodegaorigen_"]) &&  $this->nmgp_cmp_readonly["pt_bodegaorigen_"] == "on"))
       {
           $bTestReadOnly_pt_bodegaorigen_ = false;
           unset($this->nmgp_cmp_readonly['pt_bodegaorigen_']);
           $sStyleReadLab_pt_bodegaorigen_ = '';
           $sStyleReadInp_pt_bodegaorigen_ = 'display: none;';
       }
       $this->pt_bodegadestino_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_bodegadestino_']; 
       $pt_bodegadestino_ = $this->pt_bodegadestino_; 
       if (!isset($this->nmgp_cmp_hidden['pt_bodegadestino_']))
       {
           $this->nmgp_cmp_hidden['pt_bodegadestino_'] = 'off';
       }
       $sStyleHidden_pt_bodegadestino_ = '';
       if (isset($sCheckRead_pt_bodegadestino_))
       {
           unset($sCheckRead_pt_bodegadestino_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_bodegadestino_']))
       {
           $sCheckRead_pt_bodegadestino_ = $this->nmgp_cmp_readonly['pt_bodegadestino_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_bodegadestino_']) && $this->nmgp_cmp_hidden['pt_bodegadestino_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_bodegadestino_']);
           $sStyleHidden_pt_bodegadestino_ = 'display: none;';
       }
       $bTestReadOnly_pt_bodegadestino_ = true;
       $sStyleReadLab_pt_bodegadestino_ = 'display: none;';
       $sStyleReadInp_pt_bodegadestino_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pt_bodegadestino_"]) &&  $this->nmgp_cmp_readonly["pt_bodegadestino_"] == "on"))
       {
           $bTestReadOnly_pt_bodegadestino_ = false;
           unset($this->nmgp_cmp_readonly['pt_bodegadestino_']);
           $sStyleReadLab_pt_bodegadestino_ = '';
           $sStyleReadInp_pt_bodegadestino_ = 'display: none;';
       }
       $this->pt_producto_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_producto_']; 
       $pt_producto_ = $this->pt_producto_; 
       $sStyleHidden_pt_producto_ = '';
       if (isset($sCheckRead_pt_producto_))
       {
           unset($sCheckRead_pt_producto_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_producto_']))
       {
           $sCheckRead_pt_producto_ = $this->nmgp_cmp_readonly['pt_producto_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_producto_']) && $this->nmgp_cmp_hidden['pt_producto_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_producto_']);
           $sStyleHidden_pt_producto_ = 'display: none;';
       }
       $bTestReadOnly_pt_producto_ = true;
       $sStyleReadLab_pt_producto_ = 'display: none;';
       $sStyleReadInp_pt_producto_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pt_producto_"]) &&  $this->nmgp_cmp_readonly["pt_producto_"] == "on"))
       {
           $bTestReadOnly_pt_producto_ = false;
           unset($this->nmgp_cmp_readonly['pt_producto_']);
           $sStyleReadLab_pt_producto_ = '';
           $sStyleReadInp_pt_producto_ = 'display: none;';
       }
       $this->pt_unidad_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_unidad_']; 
       $pt_unidad_ = $this->pt_unidad_; 
       $sStyleHidden_pt_unidad_ = '';
       if (isset($sCheckRead_pt_unidad_))
       {
           unset($sCheckRead_pt_unidad_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_unidad_']))
       {
           $sCheckRead_pt_unidad_ = $this->nmgp_cmp_readonly['pt_unidad_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_unidad_']) && $this->nmgp_cmp_hidden['pt_unidad_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_unidad_']);
           $sStyleHidden_pt_unidad_ = 'display: none;';
       }
       $bTestReadOnly_pt_unidad_ = true;
       $sStyleReadLab_pt_unidad_ = 'display: none;';
       $sStyleReadInp_pt_unidad_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pt_unidad_"]) &&  $this->nmgp_cmp_readonly["pt_unidad_"] == "on"))
       {
           $bTestReadOnly_pt_unidad_ = false;
           unset($this->nmgp_cmp_readonly['pt_unidad_']);
           $sStyleReadLab_pt_unidad_ = '';
           $sStyleReadInp_pt_unidad_ = 'display: none;';
       }
       $this->pt_stock_origen_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_stock_origen_']; 
       $pt_stock_origen_ = $this->pt_stock_origen_; 
       $sStyleHidden_pt_stock_origen_ = '';
       if (isset($sCheckRead_pt_stock_origen_))
       {
           unset($sCheckRead_pt_stock_origen_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_stock_origen_']))
       {
           $sCheckRead_pt_stock_origen_ = $this->nmgp_cmp_readonly['pt_stock_origen_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_stock_origen_']) && $this->nmgp_cmp_hidden['pt_stock_origen_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_stock_origen_']);
           $sStyleHidden_pt_stock_origen_ = 'display: none;';
       }
       $bTestReadOnly_pt_stock_origen_ = true;
       $sStyleReadLab_pt_stock_origen_ = 'display: none;';
       $sStyleReadInp_pt_stock_origen_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pt_stock_origen_"]) &&  $this->nmgp_cmp_readonly["pt_stock_origen_"] == "on"))
       {
           $bTestReadOnly_pt_stock_origen_ = false;
           unset($this->nmgp_cmp_readonly['pt_stock_origen_']);
           $sStyleReadLab_pt_stock_origen_ = '';
           $sStyleReadInp_pt_stock_origen_ = 'display: none;';
       }
       $this->pt_stock_solicitado_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_stock_solicitado_']; 
       $pt_stock_solicitado_ = $this->pt_stock_solicitado_; 
       $sStyleHidden_pt_stock_solicitado_ = '';
       if (isset($sCheckRead_pt_stock_solicitado_))
       {
           unset($sCheckRead_pt_stock_solicitado_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_stock_solicitado_']))
       {
           $sCheckRead_pt_stock_solicitado_ = $this->nmgp_cmp_readonly['pt_stock_solicitado_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_stock_solicitado_']) && $this->nmgp_cmp_hidden['pt_stock_solicitado_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_stock_solicitado_']);
           $sStyleHidden_pt_stock_solicitado_ = 'display: none;';
       }
       $bTestReadOnly_pt_stock_solicitado_ = true;
       $sStyleReadLab_pt_stock_solicitado_ = 'display: none;';
       $sStyleReadInp_pt_stock_solicitado_ = '';
       if (isset($this->nmgp_cmp_readonly['pt_stock_solicitado_']) && $this->nmgp_cmp_readonly['pt_stock_solicitado_'] == 'on')
       {
           $bTestReadOnly_pt_stock_solicitado_ = false;
           unset($this->nmgp_cmp_readonly['pt_stock_solicitado_']);
           $sStyleReadLab_pt_stock_solicitado_ = '';
           $sStyleReadInp_pt_stock_solicitado_ = 'display: none;';
       }
       $this->pt_saldo_origen_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_saldo_origen_']; 
       $pt_saldo_origen_ = $this->pt_saldo_origen_; 
       $sStyleHidden_pt_saldo_origen_ = '';
       if (isset($sCheckRead_pt_saldo_origen_))
       {
           unset($sCheckRead_pt_saldo_origen_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_saldo_origen_']))
       {
           $sCheckRead_pt_saldo_origen_ = $this->nmgp_cmp_readonly['pt_saldo_origen_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_saldo_origen_']) && $this->nmgp_cmp_hidden['pt_saldo_origen_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_saldo_origen_']);
           $sStyleHidden_pt_saldo_origen_ = 'display: none;';
       }
       $bTestReadOnly_pt_saldo_origen_ = true;
       $sStyleReadLab_pt_saldo_origen_ = 'display: none;';
       $sStyleReadInp_pt_saldo_origen_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pt_saldo_origen_"]) &&  $this->nmgp_cmp_readonly["pt_saldo_origen_"] == "on"))
       {
           $bTestReadOnly_pt_saldo_origen_ = false;
           unset($this->nmgp_cmp_readonly['pt_saldo_origen_']);
           $sStyleReadLab_pt_saldo_origen_ = '';
           $sStyleReadInp_pt_saldo_origen_ = 'display: none;';
       }
       $this->pt_empresa_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_empresa_']; 
       $pt_empresa_ = $this->pt_empresa_; 
       if (!isset($this->nmgp_cmp_hidden['pt_empresa_']))
       {
           $this->nmgp_cmp_hidden['pt_empresa_'] = 'off';
       }
       $sStyleHidden_pt_empresa_ = '';
       if (isset($sCheckRead_pt_empresa_))
       {
           unset($sCheckRead_pt_empresa_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_empresa_']))
       {
           $sCheckRead_pt_empresa_ = $this->nmgp_cmp_readonly['pt_empresa_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_empresa_']) && $this->nmgp_cmp_hidden['pt_empresa_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_empresa_']);
           $sStyleHidden_pt_empresa_ = 'display: none;';
       }
       $bTestReadOnly_pt_empresa_ = true;
       $sStyleReadLab_pt_empresa_ = 'display: none;';
       $sStyleReadInp_pt_empresa_ = '';
       if (isset($this->nmgp_cmp_readonly['pt_empresa_']) && $this->nmgp_cmp_readonly['pt_empresa_'] == 'on')
       {
           $bTestReadOnly_pt_empresa_ = false;
           unset($this->nmgp_cmp_readonly['pt_empresa_']);
           $sStyleReadLab_pt_empresa_ = '';
           $sStyleReadInp_pt_empresa_ = 'display: none;';
       }
       $this->pt_cantidad_recibida_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_cantidad_recibida_']; 
       $pt_cantidad_recibida_ = $this->pt_cantidad_recibida_; 
       if (!isset($this->nmgp_cmp_hidden['pt_cantidad_recibida_']))
       {
           $this->nmgp_cmp_hidden['pt_cantidad_recibida_'] = 'off';
       }
       $sStyleHidden_pt_cantidad_recibida_ = '';
       if (isset($sCheckRead_pt_cantidad_recibida_))
       {
           unset($sCheckRead_pt_cantidad_recibida_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_cantidad_recibida_']))
       {
           $sCheckRead_pt_cantidad_recibida_ = $this->nmgp_cmp_readonly['pt_cantidad_recibida_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_cantidad_recibida_']) && $this->nmgp_cmp_hidden['pt_cantidad_recibida_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_cantidad_recibida_']);
           $sStyleHidden_pt_cantidad_recibida_ = 'display: none;';
       }
       $bTestReadOnly_pt_cantidad_recibida_ = true;
       $sStyleReadLab_pt_cantidad_recibida_ = 'display: none;';
       $sStyleReadInp_pt_cantidad_recibida_ = '';
       if (isset($this->nmgp_cmp_readonly['pt_cantidad_recibida_']) && $this->nmgp_cmp_readonly['pt_cantidad_recibida_'] == 'on')
       {
           $bTestReadOnly_pt_cantidad_recibida_ = false;
           unset($this->nmgp_cmp_readonly['pt_cantidad_recibida_']);
           $sStyleReadLab_pt_cantidad_recibida_ = '';
           $sStyleReadInp_pt_cantidad_recibida_ = 'display: none;';
       }
       $this->pt_recibe_ = $this->form_vert_form_inv_productos_transferencia[$sc_seq_vert]['pt_recibe_']; 
       $pt_recibe_ = $this->pt_recibe_; 
       if (!isset($this->nmgp_cmp_hidden['pt_recibe_']))
       {
           $this->nmgp_cmp_hidden['pt_recibe_'] = 'off';
       }
       $sStyleHidden_pt_recibe_ = '';
       if (isset($sCheckRead_pt_recibe_))
       {
           unset($sCheckRead_pt_recibe_);
       }
       if (isset($this->nmgp_cmp_readonly['pt_recibe_']))
       {
           $sCheckRead_pt_recibe_ = $this->nmgp_cmp_readonly['pt_recibe_'];
       }
       if (isset($this->nmgp_cmp_hidden['pt_recibe_']) && $this->nmgp_cmp_hidden['pt_recibe_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pt_recibe_']);
           $sStyleHidden_pt_recibe_ = 'display: none;';
       }
       $bTestReadOnly_pt_recibe_ = true;
       $sStyleReadLab_pt_recibe_ = 'display: none;';
       $sStyleReadInp_pt_recibe_ = '';
       if (isset($this->nmgp_cmp_readonly['pt_recibe_']) && $this->nmgp_cmp_readonly['pt_recibe_'] == 'on')
       {
           $bTestReadOnly_pt_recibe_ = false;
           unset($this->nmgp_cmp_readonly['pt_recibe_']);
           $sStyleReadLab_pt_recibe_ = '';
           $sStyleReadInp_pt_recibe_ = 'display: none;';
       }

       $this->lookup_pt_unidad_($look_rpc_pt_unidad_);
       $nm_cor_fun_vert = (isset($nm_cor_fun_vert) && $nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = (isset($nm_img_fun_cel)  && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?> class="sc-row" data-sc-row-number="<?php echo $sc_seq_vert; ?>">


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>"  style="display: none;"> <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\""; if (in_array($sc_seq_vert, $sc_check_excl)) { echo " checked";} ?> onclick="if (this.checked) {sc_quant_excl++; } else {sc_quant_excl--; }" class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['delete'] == "off") {
        $sDisplayDelete = 'display: none';
    }
    else {
        $sDisplayDelete = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayDelete. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['update'] == "off") {
        $sDisplayUpdate = 'display: none';
    }
    else {
        $sDisplayUpdate = '';
    }
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayUpdate. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = $sDisplayUpdate;
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_inv_productos_transferencia_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_inv_productos_transferencia_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_inv_productos_transferencia_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_inv_productos_transferencia_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_inv_productos_transferencia_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_inv_productos_transferencia_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['pt_id_']) && $this->nmgp_cmp_hidden['pt_id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOddMult css_pt_id__line" id="hidden_field_data_pt_id_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_id_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_id__line" style="vertical-align: top;padding: 0px"><span id="id_read_on_pt_id_<?php echo $sc_seq_vert ?>" class="css_pt_id__line" style="<?php echo $sStyleReadLab_pt_id_; ?>"><?php echo $this->form_format_readonly("pt_id_", $this->form_encode_input($this->pt_id_)); ?></span><span id="id_read_off_pt_id_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_id_" style="<?php echo $sStyleReadInp_pt_id_; ?>"><input type="hidden" id="id_sc_field_pt_id_<?php echo $sc_seq_vert ?>" name="pt_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_id_) . "\">"?>
<span id="id_ajax_label_pt_id_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($pt_id_); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_id_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_id_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_transferencia_']) && $this->nmgp_cmp_hidden['pt_transferencia_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_transferencia_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_transferencia_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_transferencia__line" id="hidden_field_data_pt_transferencia_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_transferencia_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_transferencia__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_transferencia_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pt_transferencia_"]) &&  $this->nmgp_cmp_readonly["pt_transferencia_"] == "on")) { 

 ?>
<input type="hidden" name="pt_transferencia_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_transferencia_) . "\"><span id=\"id_ajax_label_pt_transferencia_" . $sc_seq_vert . "\">" . $pt_transferencia_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_pt_transferencia_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_transferencia_<?php echo $sc_seq_vert ?> css_pt_transferencia__line" style="<?php echo $sStyleReadLab_pt_transferencia_; ?>"><?php echo $this->form_format_readonly("pt_transferencia_", $this->form_encode_input($this->pt_transferencia_)); ?></span><span id="id_read_off_pt_transferencia_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_transferencia_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_transferencia_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_transferencia__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_transferencia_<?php echo $sc_seq_vert ?>" type=text name="pt_transferencia_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_transferencia_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['pt_transferencia_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['pt_transferencia_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pt_transferencia_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_transferencia_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_transferencia_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_bodegaorigen_']) && $this->nmgp_cmp_hidden['pt_bodegaorigen_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_bodegaorigen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_bodegaorigen_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_bodegaorigen__line" id="hidden_field_data_pt_bodegaorigen_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_bodegaorigen_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_bodegaorigen__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_bodegaorigen_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pt_bodegaorigen_"]) &&  $this->nmgp_cmp_readonly["pt_bodegaorigen_"] == "on")) { 

 ?>
<input type="hidden" name="pt_bodegaorigen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_bodegaorigen_) . "\"><span id=\"id_ajax_label_pt_bodegaorigen_" . $sc_seq_vert . "\">" . $pt_bodegaorigen_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_pt_bodegaorigen_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_bodegaorigen_<?php echo $sc_seq_vert ?> css_pt_bodegaorigen__line" style="<?php echo $sStyleReadLab_pt_bodegaorigen_; ?>"><?php echo $this->form_format_readonly("pt_bodegaorigen_", $this->form_encode_input($this->pt_bodegaorigen_)); ?></span><span id="id_read_off_pt_bodegaorigen_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_bodegaorigen_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_bodegaorigen_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_bodegaorigen__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_bodegaorigen_<?php echo $sc_seq_vert ?>" type=text name="pt_bodegaorigen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_bodegaorigen_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['pt_bodegaorigen_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['pt_bodegaorigen_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pt_bodegaorigen_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_bodegaorigen_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_bodegaorigen_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_bodegadestino_']) && $this->nmgp_cmp_hidden['pt_bodegadestino_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_bodegadestino_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_bodegadestino_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_bodegadestino__line" id="hidden_field_data_pt_bodegadestino_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_bodegadestino_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_bodegadestino__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_bodegadestino_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pt_bodegadestino_"]) &&  $this->nmgp_cmp_readonly["pt_bodegadestino_"] == "on")) { 

 ?>
<input type="hidden" name="pt_bodegadestino_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_bodegadestino_) . "\"><span id=\"id_ajax_label_pt_bodegadestino_" . $sc_seq_vert . "\">" . $pt_bodegadestino_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_pt_bodegadestino_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_bodegadestino_<?php echo $sc_seq_vert ?> css_pt_bodegadestino__line" style="<?php echo $sStyleReadLab_pt_bodegadestino_; ?>"><?php echo $this->form_format_readonly("pt_bodegadestino_", $this->form_encode_input($this->pt_bodegadestino_)); ?></span><span id="id_read_off_pt_bodegadestino_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_bodegadestino_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_bodegadestino_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_bodegadestino__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_bodegadestino_<?php echo $sc_seq_vert ?>" type=text name="pt_bodegadestino_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_bodegadestino_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['pt_bodegadestino_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['pt_bodegadestino_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pt_bodegadestino_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_bodegadestino_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_bodegadestino_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_producto_']) && $this->nmgp_cmp_hidden['pt_producto_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pt_producto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->pt_producto_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_producto__line" id="hidden_field_data_pt_producto_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_producto_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_producto__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_producto_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pt_producto_"]) &&  $this->nmgp_cmp_readonly["pt_producto_"] == "on")) { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_'] = array(); 
}
if ($this->pt_bodegaorigen_ != "")
{ 
   $this->nm_clear_val("pt_bodegaorigen_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_'] = array(); 
    }

   $old_value_pt_id_ = $this->pt_id_;
   $old_value_pt_transferencia_ = $this->pt_transferencia_;
   $old_value_pt_bodegaorigen_ = $this->pt_bodegaorigen_;
   $old_value_pt_bodegadestino_ = $this->pt_bodegadestino_;
   $old_value_pt_unidad_ = $this->pt_unidad_;
   $old_value_pt_stock_origen_ = $this->pt_stock_origen_;
   $old_value_pt_stock_solicitado_ = $this->pt_stock_solicitado_;
   $old_value_pt_saldo_origen_ = $this->pt_saldo_origen_;
   $old_value_pt_cantidad_recibida_ = $this->pt_cantidad_recibida_;
   $this->nm_tira_formatacao();


   $unformatted_value_pt_id_ = $this->pt_id_;
   $unformatted_value_pt_transferencia_ = $this->pt_transferencia_;
   $unformatted_value_pt_bodegaorigen_ = $this->pt_bodegaorigen_;
   $unformatted_value_pt_bodegadestino_ = $this->pt_bodegadestino_;
   $unformatted_value_pt_unidad_ = $this->pt_unidad_;
   $unformatted_value_pt_stock_origen_ = $this->pt_stock_origen_;
   $unformatted_value_pt_stock_solicitado_ = $this->pt_stock_solicitado_;
   $unformatted_value_pt_saldo_origen_ = $this->pt_saldo_origen_;
   $unformatted_value_pt_cantidad_recibida_ = $this->pt_cantidad_recibida_;

   $nm_comando = "SELECT pro_codigo ,  pro_codigo ||' - '|| pro_descripcion  FROM del_producto  join inv_inventario on inv_producto = pro_codigo where inv_bodega= $this->pt_bodegaorigen_ ORDER BY pro_descripcion, pro_codigo";

   $this->pt_id_ = $old_value_pt_id_;
   $this->pt_transferencia_ = $old_value_pt_transferencia_;
   $this->pt_bodegaorigen_ = $old_value_pt_bodegaorigen_;
   $this->pt_bodegadestino_ = $old_value_pt_bodegadestino_;
   $this->pt_unidad_ = $old_value_pt_unidad_;
   $this->pt_stock_origen_ = $old_value_pt_stock_origen_;
   $this->pt_stock_solicitado_ = $old_value_pt_stock_solicitado_;
   $this->pt_saldo_origen_ = $old_value_pt_saldo_origen_;
   $this->pt_cantidad_recibida_ = $old_value_pt_cantidad_recibida_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_'][] = $rs->fields[0];
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
   $pt_producto__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pt_producto__1))
          {
              foreach ($this->pt_producto__1 as $tmp_pt_producto_)
              {
                  if (trim($tmp_pt_producto_) === trim($cadaselect[1])) {$pt_producto__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pt_producto_) && trim($this->pt_producto_) === trim($cadaselect[1])) {$pt_producto__look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pt_producto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_producto_) . "\"><span id=\"id_ajax_label_pt_producto_" . $sc_seq_vert . "\">" . $pt_producto__look . "</span>"; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pt_producto_();
   $x = 0 ; 
   $pt_producto__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pt_producto__1))
          {
              foreach ($this->pt_producto__1 as $tmp_pt_producto_)
              {
                  if (trim($tmp_pt_producto_) === trim($cadaselect[1])) {$pt_producto__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pt_producto_) && trim($this->pt_producto_) === trim($cadaselect[1])) { $pt_producto__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pt_producto__look))
          {
              $pt_producto__look = $this->pt_producto_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pt_producto_" . $sc_seq_vert . "\" class=\"css_pt_producto__line\" style=\"" .  $sStyleReadLab_pt_producto_ . "\">" . $this->form_format_readonly("pt_producto_", $this->form_encode_input($pt_producto__look)) . "</span><span id=\"id_read_off_pt_producto_" . $sc_seq_vert . "\" class=\"css_read_off_pt_producto_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pt_producto_ . "\">";
   echo " <span id=\"idAjaxSelect_pt_producto_" .  $sc_seq_vert . "\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOddMult css_pt_producto__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pt_producto_" . $sc_seq_vert . "\" name=\"pt_producto_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['Lookup_pt_producto_'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pt_producto_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pt_producto_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_producto_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_producto_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_unidad_']) && $this->nmgp_cmp_hidden['pt_unidad_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_unidad_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_unidad_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_unidad__line" id="hidden_field_data_pt_unidad_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_unidad_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_unidad__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_unidad_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pt_unidad_"]) &&  $this->nmgp_cmp_readonly["pt_unidad_"] == "on")) { 

 ?>
<input type="hidden" name="pt_unidad_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_unidad_) . "\"><span id=\"id_ajax_label_pt_unidad_" . $sc_seq_vert . "\">" . $pt_unidad_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_pt_unidad_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_unidad_<?php echo $sc_seq_vert ?> css_pt_unidad__line" style="<?php echo $sStyleReadLab_pt_unidad_; ?>"><?php echo $this->form_format_readonly("pt_unidad_", $this->form_encode_input($this->pt_unidad_)); ?></span><span id="id_read_off_pt_unidad_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_unidad_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_unidad_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_unidad__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_unidad_<?php echo $sc_seq_vert ?>" type=text name="pt_unidad_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_unidad_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=2"; } ?> alt="{datatype: 'integer', maxLength: 2, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['pt_unidad_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['pt_unidad_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pt_unidad_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 <SPAN id="id_lookup_pt_unidad_<?php echo $sc_seq_vert ?>"><?php echo $look_rpc_pt_unidad_; ?></SPAN></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_unidad_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_unidad_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_stock_origen_']) && $this->nmgp_cmp_hidden['pt_stock_origen_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_stock_origen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_stock_origen_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_stock_origen__line" id="hidden_field_data_pt_stock_origen_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_stock_origen_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_stock_origen__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_stock_origen_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pt_stock_origen_"]) &&  $this->nmgp_cmp_readonly["pt_stock_origen_"] == "on")) { 

 ?>
<input type="hidden" name="pt_stock_origen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_stock_origen_) . "\"><span id=\"id_ajax_label_pt_stock_origen_" . $sc_seq_vert . "\">" . $pt_stock_origen_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_pt_stock_origen_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_stock_origen_<?php echo $sc_seq_vert ?> css_pt_stock_origen__line" style="<?php echo $sStyleReadLab_pt_stock_origen_; ?>"><?php echo $this->form_format_readonly("pt_stock_origen_", $this->form_encode_input($this->pt_stock_origen_)); ?></span><span id="id_read_off_pt_stock_origen_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_stock_origen_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_stock_origen_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_stock_origen__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_stock_origen_<?php echo $sc_seq_vert ?>" type=text name="pt_stock_origen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_stock_origen_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pt_stock_origen_']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pt_stock_origen_']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pt_stock_origen_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_stock_origen_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_stock_origen_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_stock_solicitado_']) && $this->nmgp_cmp_hidden['pt_stock_solicitado_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_stock_solicitado_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_stock_solicitado_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_stock_solicitado__line" id="hidden_field_data_pt_stock_solicitado_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_stock_solicitado_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_stock_solicitado__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_stock_solicitado_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pt_stock_solicitado_"]) &&  $this->nmgp_cmp_readonly["pt_stock_solicitado_"] == "on") { 

 ?>
<input type="hidden" name="pt_stock_solicitado_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_stock_solicitado_) . "\">" . $pt_stock_solicitado_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_pt_stock_solicitado_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_stock_solicitado_<?php echo $sc_seq_vert ?> css_pt_stock_solicitado__line" style="<?php echo $sStyleReadLab_pt_stock_solicitado_; ?>"><?php echo $this->form_format_readonly("pt_stock_solicitado_", $this->form_encode_input($this->pt_stock_solicitado_)); ?></span><span id="id_read_off_pt_stock_solicitado_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_stock_solicitado_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_stock_solicitado_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_stock_solicitado__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_stock_solicitado_<?php echo $sc_seq_vert ?>" type=text name="pt_stock_solicitado_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_stock_solicitado_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pt_stock_solicitado_']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pt_stock_solicitado_']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pt_stock_solicitado_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_stock_solicitado_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_stock_solicitado_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_saldo_origen_']) && $this->nmgp_cmp_hidden['pt_saldo_origen_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_saldo_origen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_saldo_origen_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_saldo_origen__line" id="hidden_field_data_pt_saldo_origen_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_saldo_origen_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_saldo_origen__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_saldo_origen_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pt_saldo_origen_"]) &&  $this->nmgp_cmp_readonly["pt_saldo_origen_"] == "on")) { 

 ?>
<input type="hidden" name="pt_saldo_origen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_saldo_origen_) . "\"><span id=\"id_ajax_label_pt_saldo_origen_" . $sc_seq_vert . "\">" . $pt_saldo_origen_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_pt_saldo_origen_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_saldo_origen_<?php echo $sc_seq_vert ?> css_pt_saldo_origen__line" style="<?php echo $sStyleReadLab_pt_saldo_origen_; ?>"><?php echo $this->form_format_readonly("pt_saldo_origen_", $this->form_encode_input($this->pt_saldo_origen_)); ?></span><span id="id_read_off_pt_saldo_origen_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_saldo_origen_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_saldo_origen_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_saldo_origen__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_saldo_origen_<?php echo $sc_seq_vert ?>" type=text name="pt_saldo_origen_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_saldo_origen_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pt_saldo_origen_']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pt_saldo_origen_']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pt_saldo_origen_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_saldo_origen_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_saldo_origen_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_empresa_']) && $this->nmgp_cmp_hidden['pt_empresa_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_empresa_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_empresa_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_empresa__line" id="hidden_field_data_pt_empresa_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_empresa_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_empresa__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_empresa_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pt_empresa_"]) &&  $this->nmgp_cmp_readonly["pt_empresa_"] == "on") { 

 ?>
<input type="hidden" name="pt_empresa_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_empresa_) . "\">" . $pt_empresa_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_pt_empresa_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_empresa_<?php echo $sc_seq_vert ?> css_pt_empresa__line" style="<?php echo $sStyleReadLab_pt_empresa_; ?>"><?php echo $this->form_format_readonly("pt_empresa_", $this->form_encode_input($this->pt_empresa_)); ?></span><span id="id_read_off_pt_empresa_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_empresa_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_empresa_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_empresa__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_empresa_<?php echo $sc_seq_vert ?>" type=text name="pt_empresa_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_empresa_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_empresa_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_empresa_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_cantidad_recibida_']) && $this->nmgp_cmp_hidden['pt_cantidad_recibida_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_cantidad_recibida_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_cantidad_recibida_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_cantidad_recibida__line" id="hidden_field_data_pt_cantidad_recibida_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_cantidad_recibida_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_cantidad_recibida__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_cantidad_recibida_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pt_cantidad_recibida_"]) &&  $this->nmgp_cmp_readonly["pt_cantidad_recibida_"] == "on") { 

 ?>
<input type="hidden" name="pt_cantidad_recibida_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_cantidad_recibida_) . "\">" . $pt_cantidad_recibida_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_pt_cantidad_recibida_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_cantidad_recibida_<?php echo $sc_seq_vert ?> css_pt_cantidad_recibida__line" style="<?php echo $sStyleReadLab_pt_cantidad_recibida_; ?>"><?php echo $this->form_format_readonly("pt_cantidad_recibida_", $this->form_encode_input($this->pt_cantidad_recibida_)); ?></span><span id="id_read_off_pt_cantidad_recibida_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_cantidad_recibida_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_cantidad_recibida_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_cantidad_recibida__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_cantidad_recibida_<?php echo $sc_seq_vert ?>" type=text name="pt_cantidad_recibida_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_cantidad_recibida_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pt_cantidad_recibida_']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['pt_cantidad_recibida_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['pt_cantidad_recibida_']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pt_cantidad_recibida_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_cantidad_recibida_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_cantidad_recibida_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pt_recibe_']) && $this->nmgp_cmp_hidden['pt_recibe_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pt_recibe_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_recibe_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_pt_recibe__line" id="hidden_field_data_pt_recibe_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pt_recibe_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_pt_recibe__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pt_recibe_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pt_recibe_"]) &&  $this->nmgp_cmp_readonly["pt_recibe_"] == "on") { 

 ?>
<input type="hidden" name="pt_recibe_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_recibe_) . "\">" . $pt_recibe_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_pt_recibe_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pt_recibe_<?php echo $sc_seq_vert ?> css_pt_recibe__line" style="<?php echo $sStyleReadLab_pt_recibe_; ?>"><?php echo $this->form_format_readonly("pt_recibe_", $this->form_encode_input($this->pt_recibe_)); ?></span><span id="id_read_off_pt_recibe_<?php echo $sc_seq_vert ?>" class="css_read_off_pt_recibe_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pt_recibe_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_pt_recibe__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pt_recibe_<?php echo $sc_seq_vert ?>" type=text name="pt_recibe_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($pt_recibe_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pt_recibe_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pt_recibe_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_pt_id_))
       {
           $this->nmgp_cmp_readonly['pt_id_'] = $sCheckRead_pt_id_;
       }
       if ('display: none;' == $sStyleHidden_pt_id_)
       {
           $this->nmgp_cmp_hidden['pt_id_'] = 'off';
       }
       if (isset($sCheckRead_pt_transferencia_))
       {
           $this->nmgp_cmp_readonly['pt_transferencia_'] = $sCheckRead_pt_transferencia_;
       }
       if ('display: none;' == $sStyleHidden_pt_transferencia_)
       {
           $this->nmgp_cmp_hidden['pt_transferencia_'] = 'off';
       }
       if (isset($sCheckRead_pt_bodegaorigen_))
       {
           $this->nmgp_cmp_readonly['pt_bodegaorigen_'] = $sCheckRead_pt_bodegaorigen_;
       }
       if ('display: none;' == $sStyleHidden_pt_bodegaorigen_)
       {
           $this->nmgp_cmp_hidden['pt_bodegaorigen_'] = 'off';
       }
       if (isset($sCheckRead_pt_bodegadestino_))
       {
           $this->nmgp_cmp_readonly['pt_bodegadestino_'] = $sCheckRead_pt_bodegadestino_;
       }
       if ('display: none;' == $sStyleHidden_pt_bodegadestino_)
       {
           $this->nmgp_cmp_hidden['pt_bodegadestino_'] = 'off';
       }
       if (isset($sCheckRead_pt_producto_))
       {
           $this->nmgp_cmp_readonly['pt_producto_'] = $sCheckRead_pt_producto_;
       }
       if ('display: none;' == $sStyleHidden_pt_producto_)
       {
           $this->nmgp_cmp_hidden['pt_producto_'] = 'off';
       }
       if (isset($sCheckRead_pt_unidad_))
       {
           $this->nmgp_cmp_readonly['pt_unidad_'] = $sCheckRead_pt_unidad_;
       }
       if ('display: none;' == $sStyleHidden_pt_unidad_)
       {
           $this->nmgp_cmp_hidden['pt_unidad_'] = 'off';
       }
       if (isset($sCheckRead_pt_stock_origen_))
       {
           $this->nmgp_cmp_readonly['pt_stock_origen_'] = $sCheckRead_pt_stock_origen_;
       }
       if ('display: none;' == $sStyleHidden_pt_stock_origen_)
       {
           $this->nmgp_cmp_hidden['pt_stock_origen_'] = 'off';
       }
       if (isset($sCheckRead_pt_stock_solicitado_))
       {
           $this->nmgp_cmp_readonly['pt_stock_solicitado_'] = $sCheckRead_pt_stock_solicitado_;
       }
       if ('display: none;' == $sStyleHidden_pt_stock_solicitado_)
       {
           $this->nmgp_cmp_hidden['pt_stock_solicitado_'] = 'off';
       }
       if (isset($sCheckRead_pt_saldo_origen_))
       {
           $this->nmgp_cmp_readonly['pt_saldo_origen_'] = $sCheckRead_pt_saldo_origen_;
       }
       if ('display: none;' == $sStyleHidden_pt_saldo_origen_)
       {
           $this->nmgp_cmp_hidden['pt_saldo_origen_'] = 'off';
       }
       if (isset($sCheckRead_pt_empresa_))
       {
           $this->nmgp_cmp_readonly['pt_empresa_'] = $sCheckRead_pt_empresa_;
       }
       if ('display: none;' == $sStyleHidden_pt_empresa_)
       {
           $this->nmgp_cmp_hidden['pt_empresa_'] = 'off';
       }
       if (isset($sCheckRead_pt_cantidad_recibida_))
       {
           $this->nmgp_cmp_readonly['pt_cantidad_recibida_'] = $sCheckRead_pt_cantidad_recibida_;
       }
       if ('display: none;' == $sStyleHidden_pt_cantidad_recibida_)
       {
           $this->nmgp_cmp_hidden['pt_cantidad_recibida_'] = 'off';
       }
       if (isset($sCheckRead_pt_recibe_))
       {
           $this->nmgp_cmp_readonly['pt_recibe_'] = $sCheckRead_pt_recibe_;
       }
       if ('display: none;' == $sStyleHidden_pt_recibe_)
       {
           $this->nmgp_cmp_hidden['pt_recibe_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_inv_productos_transferencia = $guarda_form_vert_form_inv_productos_transferencia;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div>
 <div id="sc-id-fixedheaders-placeholder" style="display: none; position: fixed; top: 0; z-index: 500"></div>
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type="hidden" name="sc_contr_vert" value="<?php echo $this->form_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; font-weight: bold">
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColorMult">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "R")
{
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['enviar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['enviar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['enviar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_label']['enviar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_label']['enviar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_label']['enviar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "enviar", "scBtnFn_enviar()", "scBtnFn_enviar()", "sc_enviar_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai_modal()", "scBtnFn_sys_format_sai_modal()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_iframe'] != "R")
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
<script>
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
<?php
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['run_modal'])
{
?>
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
<?php
}
else
{
?>
 $(function() {
  setTimeout(function() { for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) { scJQElementsAdd(iLine); } }, 250);
 });
<?php
}
?>
</script>
<div id="new_line_dummy" style="display: none">
</div>

</form> 
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
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_inv_productos_transferencia");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_inv_productos_transferencia");
 parent.scAjaxDetailHeight("form_inv_productos_transferencia", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_inv_productos_transferencia", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_inv_productos_transferencia", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['sc_modal'])
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
	function scBtnFn_enviar() {
		if ($("#sc_enviar_bot").length && $("#sc_enviar_bot").is(":visible")) {
		    if ($("#sc_enviar_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			 return;
		}
	}
	function scBtnFn_sys_format_sai_modal() {
		if ($("#sc_b_sai_b.sc-unique-btn-1").length && $("#sc_b_sai_b.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_productos_transferencia']['buttonStatus'] = $this->nmgp_botoes;
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
<?php 
 } 
} 
?> 
