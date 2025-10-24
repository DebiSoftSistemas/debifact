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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Agregar Producto"); } else { echo strip_tags("Agregar Producto"); } ?></TITLE>
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
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/calculator/jquery.calculator.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/calculator/jquery.plugin.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/calculator/jquery.calculator.js"></SCRIPT>
<?php
switch ($_SESSION['scriptcase']['str_lang']) {
        case 'ca':
        case 'da':
        case 'de':
        case 'es':
        case 'fr':
        case 'hr':
        case 'it':
        case 'nl':
        case 'no':
        case 'pl':
        case 'ru':
//        case 'sr':
        case 'sl':
        case 'uk':
                $tmpCalcLocale = $_SESSION['scriptcase']['str_lang'];
                break;
        case 'pt_br':
                $tmpCalcLocale = 'pt-BR';
                break;
        case 'tr':
                $tmpCalcLocale = 'ar';
                break;
        case 'zh_cn':
                $tmpCalcLocale = 'zh-CN';
                break;
//        case 'zh_hk':
//                $tmpCalcLocale = 'zh-TW';
//                break;
        default:
                $tmpCalcLocale = '';
                break;
}
if ('' != $tmpCalcLocale) {
        echo " <SCRIPT type=\"text/javascript\" src=\"{$this->Ini->path_prod}/third/jquery_plugin/calculator/jquery.calculator-$tmpCalcLocale.js\"></SCRIPT>\r\n";
}
?>
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
<?php
$miniCalculatorFA = $this->jqueryFAFile('calculator');
if ('' != $miniCalculatorFA) {
?>
<style type="text/css">
.css_read_off_df_cantidad button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_df_precio_unitario button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_df_descuento button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_detalle_factura_nueva/form_detalle_factura_nueva_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_detalle_factura_nueva_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['last'] : 'off'); ?>";
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

include_once('form_detalle_factura_nueva_mob_jquery.php');

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

<?php
if (!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName)
{
?>
  scFocusField('df_producto');

<?php
}
?>
  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  $(".scUiLabelWidthFix").css("width", "120px");
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_detalle_factura_nueva']['error_buffer']) && '' != $_SESSION['scriptcase']['form_detalle_factura_nueva']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_detalle_factura_nueva']['error_buffer'];
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
 include_once("form_detalle_factura_nueva_mob_js0.php");
?>
<script type="text/javascript"> 
nmdg_enter_tab = true;
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
               action="form_detalle_factura_nueva_mob.php" 
               onsubmit="return false;" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_detalle_factura_nueva_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_detalle_factura_nueva_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['new'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['insert'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['update'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['delete'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['df_id']))
   {
       $this->nmgp_cmp_hidden['df_id'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['df_factura']))
   {
       $this->nmgp_cmp_hidden['df_factura'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['df_base_iva']))
   {
       $this->nmgp_cmp_hidden['df_base_iva'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['df_porcentaje_iva']))
   {
       $this->nmgp_cmp_hidden['df_porcentaje_iva'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['df_base_ice']))
   {
       $this->nmgp_cmp_hidden['df_base_ice'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['df_porcentaje_ice']))
   {
       $this->nmgp_cmp_hidden['df_porcentaje_ice'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['df_base_irbpnr']))
   {
       $this->nmgp_cmp_hidden['df_base_irbpnr'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['df_porcentaje_irbpnr']))
   {
       $this->nmgp_cmp_hidden['df_porcentaje_irbpnr'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['df_cantidad_nc']))
   {
       $this->nmgp_cmp_hidden['df_cantidad_nc'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['df_precio_sin_subsidio']))
   {
       $this->nmgp_cmp_hidden['df_precio_sin_subsidio'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_id']))
           {
               $this->nmgp_cmp_readonly['df_id'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_factura']))
           {
               $this->nmgp_cmp_readonly['df_factura'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_id']))
    {
        $this->nm_new_label['df_id'] = "Df Id";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_id = $this->df_id;
   if (!isset($this->nmgp_cmp_hidden['df_id']))
   {
       $this->nmgp_cmp_hidden['df_id'] = 'off';
   }
   $sStyleHidden_df_id = '';
   if (isset($this->nmgp_cmp_hidden['df_id']) && $this->nmgp_cmp_hidden['df_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_id']);
       $sStyleHidden_df_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_id = 'display: none;';
   $sStyleReadInp_df_id = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_id"]) &&  $this->nmgp_cmp_readonly["df_id"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_id']);
       $sStyleReadLab_df_id = '';
       $sStyleReadInp_df_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_id']) && $this->nmgp_cmp_hidden['df_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_id" value="<?php echo $this->form_encode_input($df_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd css_df_id_line" id="hidden_field_data_df_id" style="<?php echo $sStyleHidden_df_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_id_label" style=""><span id="id_label_df_id"><?php echo $this->nm_new_label['df_id']; ?></span></span><br><span id="id_read_on_df_id" class="css_df_id_line" style="<?php echo $sStyleReadLab_df_id; ?>"><?php echo $this->form_format_readonly("df_id", $this->form_encode_input($this->df_id)); ?></span><span id="id_read_off_df_id" class="css_read_off_df_id" style="<?php echo $sStyleReadInp_df_id; ?>"><input type="hidden" name="df_id" value="<?php echo $this->form_encode_input($df_id) . "\">"?><span id="id_ajax_label_df_id"><?php echo nl2br($df_id); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_id_text"></span></td></tr></table></td></tr></table> </TD>
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
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_producto']))
           {
               $this->nmgp_cmp_readonly['df_producto'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_factura']))
    {
        $this->nm_new_label['df_factura'] = "Df Factura";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_factura = $this->df_factura;
   if (!isset($this->nmgp_cmp_hidden['df_factura']))
   {
       $this->nmgp_cmp_hidden['df_factura'] = 'off';
   }
   $sStyleHidden_df_factura = '';
   if (isset($this->nmgp_cmp_hidden['df_factura']) && $this->nmgp_cmp_hidden['df_factura'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_factura']);
       $sStyleHidden_df_factura = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_factura = 'display: none;';
   $sStyleReadInp_df_factura = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_factura"]) &&  $this->nmgp_cmp_readonly["df_factura"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_factura']);
       $sStyleReadLab_df_factura = '';
       $sStyleReadInp_df_factura = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_factura']) && $this->nmgp_cmp_hidden['df_factura'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_factura" value="<?php echo $this->form_encode_input($df_factura) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_factura_line" id="hidden_field_data_df_factura" style="<?php echo $sStyleHidden_df_factura; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_factura_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_factura_label" style=""><span id="id_label_df_factura"><?php echo $this->nm_new_label['df_factura']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_factura"]) &&  $this->nmgp_cmp_readonly["df_factura"] == "on")) { 

 ?>
<input type="hidden" name="df_factura" value="<?php echo $this->form_encode_input($df_factura) . "\"><span id=\"id_ajax_label_df_factura\">" . $df_factura . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_factura" class="sc-ui-readonly-df_factura css_df_factura_line" style="<?php echo $sStyleReadLab_df_factura; ?>"><?php echo $this->form_format_readonly("df_factura", $this->form_encode_input($this->df_factura)); ?></span><span id="id_read_off_df_factura" class="css_read_off_df_factura<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_factura; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_factura_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_factura" type=text name="df_factura" value="<?php echo $this->form_encode_input($df_factura) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['df_factura']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['df_factura']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_factura']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_factura_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_factura_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['df_producto']))
   {
       $this->nm_new_label['df_producto'] = "" . $this->Ini->Nm_lang['lang_producto'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_producto = $this->df_producto;
   $sStyleHidden_df_producto = '';
   if (isset($this->nmgp_cmp_hidden['df_producto']) && $this->nmgp_cmp_hidden['df_producto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_producto']);
       $sStyleHidden_df_producto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_producto = 'display: none;';
   $sStyleReadInp_df_producto = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_producto"]) &&  $this->nmgp_cmp_readonly["df_producto"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_producto']);
       $sStyleReadLab_df_producto = '';
       $sStyleReadInp_df_producto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_producto']) && $this->nmgp_cmp_hidden['df_producto'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="df_producto" value="<?php echo $this->form_encode_input($this->df_producto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_producto_line" id="hidden_field_data_df_producto" style="<?php echo $sStyleHidden_df_producto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_producto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_producto_label" style=""><span id="id_label_df_producto"><?php echo $this->nm_new_label['df_producto']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['php_cmp_required']['df_producto']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['php_cmp_required']['df_producto'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_producto"]) &&  $this->nmgp_cmp_readonly["df_producto"] == "on")) { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto'] = array(); 
    }

   $old_value_df_id = $this->df_id;
   $old_value_df_factura = $this->df_factura;
   $old_value_df_cantidad = $this->df_cantidad;
   $old_value_df_precio_unitario = $this->df_precio_unitario;
   $old_value_df_descuento = $this->df_descuento;
   $old_value_df_subtotal = $this->df_subtotal;
   $old_value_df_base_ice = $this->df_base_ice;
   $old_value_df_porcentaje_ice = $this->df_porcentaje_ice;
   $old_value_df_valor_ice = $this->df_valor_ice;
   $old_value_df_base_iva = $this->df_base_iva;
   $old_value_df_porcentaje_iva = $this->df_porcentaje_iva;
   $old_value_df_valor_iva = $this->df_valor_iva;
   $old_value_df_base_irbpnr = $this->df_base_irbpnr;
   $old_value_df_valor_irbpnr = $this->df_valor_irbpnr;
   $old_value_df_total = $this->df_total;
   $old_value_df_cantidad_nc = $this->df_cantidad_nc;
   $old_value_df_precio_sin_subsidio = $this->df_precio_sin_subsidio;
   $this->nm_tira_formatacao();


   $unformatted_value_df_id = $this->df_id;
   $unformatted_value_df_factura = $this->df_factura;
   $unformatted_value_df_cantidad = $this->df_cantidad;
   $unformatted_value_df_precio_unitario = $this->df_precio_unitario;
   $unformatted_value_df_descuento = $this->df_descuento;
   $unformatted_value_df_subtotal = $this->df_subtotal;
   $unformatted_value_df_base_ice = $this->df_base_ice;
   $unformatted_value_df_porcentaje_ice = $this->df_porcentaje_ice;
   $unformatted_value_df_valor_ice = $this->df_valor_ice;
   $unformatted_value_df_base_iva = $this->df_base_iva;
   $unformatted_value_df_porcentaje_iva = $this->df_porcentaje_iva;
   $unformatted_value_df_valor_iva = $this->df_valor_iva;
   $unformatted_value_df_base_irbpnr = $this->df_base_irbpnr;
   $unformatted_value_df_valor_irbpnr = $this->df_valor_irbpnr;
   $unformatted_value_df_total = $this->df_total;
   $unformatted_value_df_cantidad_nc = $this->df_cantidad_nc;
   $unformatted_value_df_precio_sin_subsidio = $this->df_precio_sin_subsidio;

   $nm_comando = "SELECT pro_codigo, pro_codigo||' - '||pro_descripcion FROM del_producto where pro_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "'  and pro_familia_producto in (1,3) ORDER BY pro_codigo";

   $this->df_id = $old_value_df_id;
   $this->df_factura = $old_value_df_factura;
   $this->df_cantidad = $old_value_df_cantidad;
   $this->df_precio_unitario = $old_value_df_precio_unitario;
   $this->df_descuento = $old_value_df_descuento;
   $this->df_subtotal = $old_value_df_subtotal;
   $this->df_base_ice = $old_value_df_base_ice;
   $this->df_porcentaje_ice = $old_value_df_porcentaje_ice;
   $this->df_valor_ice = $old_value_df_valor_ice;
   $this->df_base_iva = $old_value_df_base_iva;
   $this->df_porcentaje_iva = $old_value_df_porcentaje_iva;
   $this->df_valor_iva = $old_value_df_valor_iva;
   $this->df_base_irbpnr = $old_value_df_base_irbpnr;
   $this->df_valor_irbpnr = $old_value_df_valor_irbpnr;
   $this->df_total = $old_value_df_total;
   $this->df_cantidad_nc = $old_value_df_cantidad_nc;
   $this->df_precio_sin_subsidio = $old_value_df_precio_sin_subsidio;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto'][] = $rs->fields[0];
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
   $df_producto_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->df_producto_1))
          {
              foreach ($this->df_producto_1 as $tmp_df_producto)
              {
                  if (trim($tmp_df_producto) === trim($cadaselect[1])) {$df_producto_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->df_producto) && trim($this->df_producto) === trim($cadaselect[1])) {$df_producto_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="df_producto" value="<?php echo $this->form_encode_input($df_producto) . "\"><span id=\"id_ajax_label_df_producto\">" . $df_producto_look . "</span>"; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_df_producto();
   $x = 0 ; 
   $df_producto_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->df_producto_1))
          {
              foreach ($this->df_producto_1 as $tmp_df_producto)
              {
                  if (trim($tmp_df_producto) === trim($cadaselect[1])) {$df_producto_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->df_producto) && trim($this->df_producto) === trim($cadaselect[1])) { $df_producto_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($df_producto_look))
          {
              $df_producto_look = $this->df_producto;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_df_producto\" class=\"css_df_producto_line\" style=\"" .  $sStyleReadLab_df_producto . "\">" . $this->form_format_readonly("df_producto", $this->form_encode_input($df_producto_look)) . "</span><span id=\"id_read_off_df_producto\" class=\"css_read_off_df_producto" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_df_producto . "\">";
   echo " <span id=\"idAjaxSelect_df_producto\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_df_producto_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_df_producto\" name=\"df_producto\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['Lookup_df_producto'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->df_producto) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->df_producto)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_producto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_producto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['df_descripcion']))
    {
        $this->nm_new_label['df_descripcion'] = "" . $this->Ini->Nm_lang['lang_inf_adicional'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_descripcion = $this->df_descripcion;
   $sStyleHidden_df_descripcion = '';
   if (isset($this->nmgp_cmp_hidden['df_descripcion']) && $this->nmgp_cmp_hidden['df_descripcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_descripcion']);
       $sStyleHidden_df_descripcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_descripcion = 'display: none;';
   $sStyleReadInp_df_descripcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['df_descripcion']) && $this->nmgp_cmp_readonly['df_descripcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_descripcion']);
       $sStyleReadLab_df_descripcion = '';
       $sStyleReadInp_df_descripcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_descripcion']) && $this->nmgp_cmp_hidden['df_descripcion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_descripcion" value="<?php echo $this->form_encode_input($df_descripcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_descripcion_line" id="hidden_field_data_df_descripcion" style="<?php echo $sStyleHidden_df_descripcion; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_descripcion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_descripcion_label" style=""><span id="id_label_df_descripcion"><?php echo $this->nm_new_label['df_descripcion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["df_descripcion"]) &&  $this->nmgp_cmp_readonly["df_descripcion"] == "on") { 

 ?>
<input type="hidden" name="df_descripcion" value="<?php echo $this->form_encode_input($df_descripcion) . "\">" . $df_descripcion . ""; ?>
<?php } else { ?>
<span id="id_read_on_df_descripcion" class="sc-ui-readonly-df_descripcion css_df_descripcion_line" style="<?php echo $sStyleReadLab_df_descripcion; ?>"><?php echo $this->form_format_readonly("df_descripcion", $this->form_encode_input($this->df_descripcion)); ?></span><span id="id_read_off_df_descripcion" class="css_read_off_df_descripcion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_descripcion; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_descripcion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_descripcion" type=text name="df_descripcion" value="<?php echo $this->form_encode_input($df_descripcion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_descripcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_descripcion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['df_cantidad']))
    {
        $this->nm_new_label['df_cantidad'] = "" . $this->Ini->Nm_lang['lang_lot_cantidad'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_cantidad = $this->df_cantidad;
   $sStyleHidden_df_cantidad = '';
   if (isset($this->nmgp_cmp_hidden['df_cantidad']) && $this->nmgp_cmp_hidden['df_cantidad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_cantidad']);
       $sStyleHidden_df_cantidad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_cantidad = 'display: none;';
   $sStyleReadInp_df_cantidad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['df_cantidad']) && $this->nmgp_cmp_readonly['df_cantidad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_cantidad']);
       $sStyleReadLab_df_cantidad = '';
       $sStyleReadInp_df_cantidad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_cantidad']) && $this->nmgp_cmp_hidden['df_cantidad'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_cantidad" value="<?php echo $this->form_encode_input($df_cantidad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_cantidad_line" id="hidden_field_data_df_cantidad" style="<?php echo $sStyleHidden_df_cantidad; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_cantidad_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_cantidad_label" style=""><span id="id_label_df_cantidad"><?php echo $this->nm_new_label['df_cantidad']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['php_cmp_required']['df_cantidad']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['php_cmp_required']['df_cantidad'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["df_cantidad"]) &&  $this->nmgp_cmp_readonly["df_cantidad"] == "on") { 

 ?>
<input type="hidden" name="df_cantidad" value="<?php echo $this->form_encode_input($df_cantidad) . "\">" . $df_cantidad . ""; ?>
<?php } else { ?>
<span id="id_read_on_df_cantidad" class="sc-ui-readonly-df_cantidad css_df_cantidad_line" style="<?php echo $sStyleReadLab_df_cantidad; ?>"><?php echo $this->form_format_readonly("df_cantidad", $this->form_encode_input($this->df_cantidad)); ?></span><span id="id_read_off_df_cantidad" class="css_read_off_df_cantidad<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_cantidad; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_cantidad_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_cantidad" type=text name="df_cantidad" value="<?php echo $this->form_encode_input($df_cantidad) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_cantidad']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_cantidad']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_cantidad']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_cantidad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_cantidad_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['df_precio_unitario']))
    {
        $this->nm_new_label['df_precio_unitario'] = "" . $this->Ini->Nm_lang['lang_precio_unitario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_precio_unitario = $this->df_precio_unitario;
   $sStyleHidden_df_precio_unitario = '';
   if (isset($this->nmgp_cmp_hidden['df_precio_unitario']) && $this->nmgp_cmp_hidden['df_precio_unitario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_precio_unitario']);
       $sStyleHidden_df_precio_unitario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_precio_unitario = 'display: none;';
   $sStyleReadInp_df_precio_unitario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['df_precio_unitario']) && $this->nmgp_cmp_readonly['df_precio_unitario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_precio_unitario']);
       $sStyleReadLab_df_precio_unitario = '';
       $sStyleReadInp_df_precio_unitario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_precio_unitario']) && $this->nmgp_cmp_hidden['df_precio_unitario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_precio_unitario" value="<?php echo $this->form_encode_input($df_precio_unitario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_precio_unitario_line" id="hidden_field_data_df_precio_unitario" style="<?php echo $sStyleHidden_df_precio_unitario; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_precio_unitario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_precio_unitario_label" style=""><span id="id_label_df_precio_unitario"><?php echo $this->nm_new_label['df_precio_unitario']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['php_cmp_required']['df_precio_unitario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['php_cmp_required']['df_precio_unitario'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["df_precio_unitario"]) &&  $this->nmgp_cmp_readonly["df_precio_unitario"] == "on") { 

 ?>
<input type="hidden" name="df_precio_unitario" value="<?php echo $this->form_encode_input($df_precio_unitario) . "\">" . $df_precio_unitario . ""; ?>
<?php } else { ?>
<span id="id_read_on_df_precio_unitario" class="sc-ui-readonly-df_precio_unitario css_df_precio_unitario_line" style="<?php echo $sStyleReadLab_df_precio_unitario; ?>"><?php echo $this->form_format_readonly("df_precio_unitario", $this->form_encode_input($this->df_precio_unitario)); ?></span><span id="id_read_off_df_precio_unitario" class="css_read_off_df_precio_unitario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_precio_unitario; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_precio_unitario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_precio_unitario" type=text name="df_precio_unitario" value="<?php echo $this->form_encode_input($df_precio_unitario) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_precio_unitario']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_precio_unitario']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_precio_unitario']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_precio_unitario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_precio_unitario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_subtotal']))
           {
               $this->nmgp_cmp_readonly['df_subtotal'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_descuento']))
    {
        $this->nm_new_label['df_descuento'] = "" . $this->Ini->Nm_lang['lang_descuento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_descuento = $this->df_descuento;
   $sStyleHidden_df_descuento = '';
   if (isset($this->nmgp_cmp_hidden['df_descuento']) && $this->nmgp_cmp_hidden['df_descuento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_descuento']);
       $sStyleHidden_df_descuento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_descuento = 'display: none;';
   $sStyleReadInp_df_descuento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['df_descuento']) && $this->nmgp_cmp_readonly['df_descuento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_descuento']);
       $sStyleReadLab_df_descuento = '';
       $sStyleReadInp_df_descuento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_descuento']) && $this->nmgp_cmp_hidden['df_descuento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_descuento" value="<?php echo $this->form_encode_input($df_descuento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_descuento_line" id="hidden_field_data_df_descuento" style="<?php echo $sStyleHidden_df_descuento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_descuento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_descuento_label" style=""><span id="id_label_df_descuento"><?php echo $this->nm_new_label['df_descuento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["df_descuento"]) &&  $this->nmgp_cmp_readonly["df_descuento"] == "on") { 

 ?>
<input type="hidden" name="df_descuento" value="<?php echo $this->form_encode_input($df_descuento) . "\">" . $df_descuento . ""; ?>
<?php } else { ?>
<span id="id_read_on_df_descuento" class="sc-ui-readonly-df_descuento css_df_descuento_line" style="<?php echo $sStyleReadLab_df_descuento; ?>"><?php echo $this->form_format_readonly("df_descuento", $this->form_encode_input($this->df_descuento)); ?></span><span id="id_read_off_df_descuento" class="css_read_off_df_descuento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_descuento; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_descuento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_descuento" type=text name="df_descuento" value="<?php echo $this->form_encode_input($df_descuento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_descuento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_descuento']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_descuento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_descuento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_descuento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_base_ice']))
           {
               $this->nmgp_cmp_readonly['df_base_ice'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_subtotal']))
    {
        $this->nm_new_label['df_subtotal'] = "" . $this->Ini->Nm_lang['lang_subtotal'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_subtotal = $this->df_subtotal;
   $sStyleHidden_df_subtotal = '';
   if (isset($this->nmgp_cmp_hidden['df_subtotal']) && $this->nmgp_cmp_hidden['df_subtotal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_subtotal']);
       $sStyleHidden_df_subtotal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_subtotal = 'display: none;';
   $sStyleReadInp_df_subtotal = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_subtotal"]) &&  $this->nmgp_cmp_readonly["df_subtotal"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_subtotal']);
       $sStyleReadLab_df_subtotal = '';
       $sStyleReadInp_df_subtotal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_subtotal']) && $this->nmgp_cmp_hidden['df_subtotal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_subtotal" value="<?php echo $this->form_encode_input($df_subtotal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_subtotal_line" id="hidden_field_data_df_subtotal" style="<?php echo $sStyleHidden_df_subtotal; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_subtotal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_subtotal_label" style=""><span id="id_label_df_subtotal"><?php echo $this->nm_new_label['df_subtotal']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_subtotal"]) &&  $this->nmgp_cmp_readonly["df_subtotal"] == "on")) { 

 ?>
<input type="hidden" name="df_subtotal" value="<?php echo $this->form_encode_input($df_subtotal) . "\"><span id=\"id_ajax_label_df_subtotal\">" . $df_subtotal . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_subtotal" class="sc-ui-readonly-df_subtotal css_df_subtotal_line" style="<?php echo $sStyleReadLab_df_subtotal; ?>"><?php echo $this->form_format_readonly("df_subtotal", $this->form_encode_input($this->df_subtotal)); ?></span><span id="id_read_off_df_subtotal" class="css_read_off_df_subtotal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_subtotal; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_subtotal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_subtotal" type=text name="df_subtotal" value="<?php echo $this->form_encode_input($df_subtotal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_subtotal']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_subtotal']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_subtotal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_subtotal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_subtotal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_porcentaje_ice']))
           {
               $this->nmgp_cmp_readonly['df_porcentaje_ice'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_base_ice']))
    {
        $this->nm_new_label['df_base_ice'] = "" . $this->Ini->Nm_lang['lang_base_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_base_ice = $this->df_base_ice;
   if (!isset($this->nmgp_cmp_hidden['df_base_ice']))
   {
       $this->nmgp_cmp_hidden['df_base_ice'] = 'off';
   }
   $sStyleHidden_df_base_ice = '';
   if (isset($this->nmgp_cmp_hidden['df_base_ice']) && $this->nmgp_cmp_hidden['df_base_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_base_ice']);
       $sStyleHidden_df_base_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_base_ice = 'display: none;';
   $sStyleReadInp_df_base_ice = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_base_ice"]) &&  $this->nmgp_cmp_readonly["df_base_ice"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_base_ice']);
       $sStyleReadLab_df_base_ice = '';
       $sStyleReadInp_df_base_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_base_ice']) && $this->nmgp_cmp_hidden['df_base_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_base_ice" value="<?php echo $this->form_encode_input($df_base_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_base_ice_line" id="hidden_field_data_df_base_ice" style="<?php echo $sStyleHidden_df_base_ice; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_base_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_base_ice_label" style=""><span id="id_label_df_base_ice"><?php echo $this->nm_new_label['df_base_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_base_ice"]) &&  $this->nmgp_cmp_readonly["df_base_ice"] == "on")) { 

 ?>
<input type="hidden" name="df_base_ice" value="<?php echo $this->form_encode_input($df_base_ice) . "\"><span id=\"id_ajax_label_df_base_ice\">" . $df_base_ice . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_base_ice" class="sc-ui-readonly-df_base_ice css_df_base_ice_line" style="<?php echo $sStyleReadLab_df_base_ice; ?>"><?php echo $this->form_format_readonly("df_base_ice", $this->form_encode_input($this->df_base_ice)); ?></span><span id="id_read_off_df_base_ice" class="css_read_off_df_base_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_base_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_base_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_base_ice" type=text name="df_base_ice" value="<?php echo $this->form_encode_input($df_base_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_base_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_base_ice']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_base_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_base_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_base_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_valor_ice']))
           {
               $this->nmgp_cmp_readonly['df_valor_ice'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_porcentaje_ice']))
    {
        $this->nm_new_label['df_porcentaje_ice'] = "" . $this->Ini->Nm_lang['lang_porcentaje_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_porcentaje_ice = $this->df_porcentaje_ice;
   if (!isset($this->nmgp_cmp_hidden['df_porcentaje_ice']))
   {
       $this->nmgp_cmp_hidden['df_porcentaje_ice'] = 'off';
   }
   $sStyleHidden_df_porcentaje_ice = '';
   if (isset($this->nmgp_cmp_hidden['df_porcentaje_ice']) && $this->nmgp_cmp_hidden['df_porcentaje_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_porcentaje_ice']);
       $sStyleHidden_df_porcentaje_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_porcentaje_ice = 'display: none;';
   $sStyleReadInp_df_porcentaje_ice = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_porcentaje_ice"]) &&  $this->nmgp_cmp_readonly["df_porcentaje_ice"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_porcentaje_ice']);
       $sStyleReadLab_df_porcentaje_ice = '';
       $sStyleReadInp_df_porcentaje_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_porcentaje_ice']) && $this->nmgp_cmp_hidden['df_porcentaje_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_porcentaje_ice" value="<?php echo $this->form_encode_input($df_porcentaje_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_porcentaje_ice_line" id="hidden_field_data_df_porcentaje_ice" style="<?php echo $sStyleHidden_df_porcentaje_ice; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_porcentaje_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_porcentaje_ice_label" style=""><span id="id_label_df_porcentaje_ice"><?php echo $this->nm_new_label['df_porcentaje_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_porcentaje_ice"]) &&  $this->nmgp_cmp_readonly["df_porcentaje_ice"] == "on")) { 

 ?>
<input type="hidden" name="df_porcentaje_ice" value="<?php echo $this->form_encode_input($df_porcentaje_ice) . "\"><span id=\"id_ajax_label_df_porcentaje_ice\">" . $df_porcentaje_ice . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_porcentaje_ice" class="sc-ui-readonly-df_porcentaje_ice css_df_porcentaje_ice_line" style="<?php echo $sStyleReadLab_df_porcentaje_ice; ?>"><?php echo $this->form_format_readonly("df_porcentaje_ice", $this->form_encode_input($this->df_porcentaje_ice)); ?></span><span id="id_read_off_df_porcentaje_ice" class="css_read_off_df_porcentaje_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_porcentaje_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_porcentaje_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_porcentaje_ice" type=text name="df_porcentaje_ice" value="<?php echo $this->form_encode_input($df_porcentaje_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=4"; } ?> maxlength=4 alt="{datatype: 'integer', maxLength: 4, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_porcentaje_ice']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_porcentaje_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_porcentaje_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_porcentaje_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_base_iva']))
           {
               $this->nmgp_cmp_readonly['df_base_iva'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_valor_ice']))
    {
        $this->nm_new_label['df_valor_ice'] = "" . $this->Ini->Nm_lang['lang_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_valor_ice = $this->df_valor_ice;
   $sStyleHidden_df_valor_ice = '';
   if (isset($this->nmgp_cmp_hidden['df_valor_ice']) && $this->nmgp_cmp_hidden['df_valor_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_valor_ice']);
       $sStyleHidden_df_valor_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_valor_ice = 'display: none;';
   $sStyleReadInp_df_valor_ice = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_valor_ice"]) &&  $this->nmgp_cmp_readonly["df_valor_ice"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_valor_ice']);
       $sStyleReadLab_df_valor_ice = '';
       $sStyleReadInp_df_valor_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_valor_ice']) && $this->nmgp_cmp_hidden['df_valor_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_valor_ice" value="<?php echo $this->form_encode_input($df_valor_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_valor_ice_line" id="hidden_field_data_df_valor_ice" style="<?php echo $sStyleHidden_df_valor_ice; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_valor_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_valor_ice_label" style=""><span id="id_label_df_valor_ice"><?php echo $this->nm_new_label['df_valor_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_valor_ice"]) &&  $this->nmgp_cmp_readonly["df_valor_ice"] == "on")) { 

 ?>
<input type="hidden" name="df_valor_ice" value="<?php echo $this->form_encode_input($df_valor_ice) . "\"><span id=\"id_ajax_label_df_valor_ice\">" . $df_valor_ice . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_valor_ice" class="sc-ui-readonly-df_valor_ice css_df_valor_ice_line" style="<?php echo $sStyleReadLab_df_valor_ice; ?>"><?php echo $this->form_format_readonly("df_valor_ice", $this->form_encode_input($this->df_valor_ice)); ?></span><span id="id_read_off_df_valor_ice" class="css_read_off_df_valor_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_valor_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_valor_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_valor_ice" type=text name="df_valor_ice" value="<?php echo $this->form_encode_input($df_valor_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_valor_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_valor_ice']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_valor_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_valor_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_valor_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_porcentaje_iva']))
           {
               $this->nmgp_cmp_readonly['df_porcentaje_iva'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_base_iva']))
    {
        $this->nm_new_label['df_base_iva'] = "" . $this->Ini->Nm_lang['lang_base_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_base_iva = $this->df_base_iva;
   if (!isset($this->nmgp_cmp_hidden['df_base_iva']))
   {
       $this->nmgp_cmp_hidden['df_base_iva'] = 'off';
   }
   $sStyleHidden_df_base_iva = '';
   if (isset($this->nmgp_cmp_hidden['df_base_iva']) && $this->nmgp_cmp_hidden['df_base_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_base_iva']);
       $sStyleHidden_df_base_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_base_iva = 'display: none;';
   $sStyleReadInp_df_base_iva = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_base_iva"]) &&  $this->nmgp_cmp_readonly["df_base_iva"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_base_iva']);
       $sStyleReadLab_df_base_iva = '';
       $sStyleReadInp_df_base_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_base_iva']) && $this->nmgp_cmp_hidden['df_base_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_base_iva" value="<?php echo $this->form_encode_input($df_base_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_base_iva_line" id="hidden_field_data_df_base_iva" style="<?php echo $sStyleHidden_df_base_iva; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_base_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_base_iva_label" style=""><span id="id_label_df_base_iva"><?php echo $this->nm_new_label['df_base_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_base_iva"]) &&  $this->nmgp_cmp_readonly["df_base_iva"] == "on")) { 

 ?>
<input type="hidden" name="df_base_iva" value="<?php echo $this->form_encode_input($df_base_iva) . "\"><span id=\"id_ajax_label_df_base_iva\">" . $df_base_iva . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_base_iva" class="sc-ui-readonly-df_base_iva css_df_base_iva_line" style="<?php echo $sStyleReadLab_df_base_iva; ?>"><?php echo $this->form_format_readonly("df_base_iva", $this->form_encode_input($this->df_base_iva)); ?></span><span id="id_read_off_df_base_iva" class="css_read_off_df_base_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_base_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_base_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_base_iva" type=text name="df_base_iva" value="<?php echo $this->form_encode_input($df_base_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_base_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_base_iva']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_base_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_base_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_base_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_valor_iva']))
           {
               $this->nmgp_cmp_readonly['df_valor_iva'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_porcentaje_iva']))
    {
        $this->nm_new_label['df_porcentaje_iva'] = "" . $this->Ini->Nm_lang['lang_porcentaje_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_porcentaje_iva = $this->df_porcentaje_iva;
   if (!isset($this->nmgp_cmp_hidden['df_porcentaje_iva']))
   {
       $this->nmgp_cmp_hidden['df_porcentaje_iva'] = 'off';
   }
   $sStyleHidden_df_porcentaje_iva = '';
   if (isset($this->nmgp_cmp_hidden['df_porcentaje_iva']) && $this->nmgp_cmp_hidden['df_porcentaje_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_porcentaje_iva']);
       $sStyleHidden_df_porcentaje_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_porcentaje_iva = 'display: none;';
   $sStyleReadInp_df_porcentaje_iva = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_porcentaje_iva"]) &&  $this->nmgp_cmp_readonly["df_porcentaje_iva"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_porcentaje_iva']);
       $sStyleReadLab_df_porcentaje_iva = '';
       $sStyleReadInp_df_porcentaje_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_porcentaje_iva']) && $this->nmgp_cmp_hidden['df_porcentaje_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_porcentaje_iva" value="<?php echo $this->form_encode_input($df_porcentaje_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_porcentaje_iva_line" id="hidden_field_data_df_porcentaje_iva" style="<?php echo $sStyleHidden_df_porcentaje_iva; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_porcentaje_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_porcentaje_iva_label" style=""><span id="id_label_df_porcentaje_iva"><?php echo $this->nm_new_label['df_porcentaje_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_porcentaje_iva"]) &&  $this->nmgp_cmp_readonly["df_porcentaje_iva"] == "on")) { 

 ?>
<input type="hidden" name="df_porcentaje_iva" value="<?php echo $this->form_encode_input($df_porcentaje_iva) . "\"><span id=\"id_ajax_label_df_porcentaje_iva\">" . $df_porcentaje_iva . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_porcentaje_iva" class="sc-ui-readonly-df_porcentaje_iva css_df_porcentaje_iva_line" style="<?php echo $sStyleReadLab_df_porcentaje_iva; ?>"><?php echo $this->form_format_readonly("df_porcentaje_iva", $this->form_encode_input($this->df_porcentaje_iva)); ?></span><span id="id_read_off_df_porcentaje_iva" class="css_read_off_df_porcentaje_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_porcentaje_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_porcentaje_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_porcentaje_iva" type=text name="df_porcentaje_iva" value="<?php echo $this->form_encode_input($df_porcentaje_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_porcentaje_iva']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_porcentaje_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_porcentaje_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_porcentaje_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_base_irbpnr']))
           {
               $this->nmgp_cmp_readonly['df_base_irbpnr'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_valor_iva']))
    {
        $this->nm_new_label['df_valor_iva'] = "" . $this->Ini->Nm_lang['lang_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_valor_iva = $this->df_valor_iva;
   $sStyleHidden_df_valor_iva = '';
   if (isset($this->nmgp_cmp_hidden['df_valor_iva']) && $this->nmgp_cmp_hidden['df_valor_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_valor_iva']);
       $sStyleHidden_df_valor_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_valor_iva = 'display: none;';
   $sStyleReadInp_df_valor_iva = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_valor_iva"]) &&  $this->nmgp_cmp_readonly["df_valor_iva"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_valor_iva']);
       $sStyleReadLab_df_valor_iva = '';
       $sStyleReadInp_df_valor_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_valor_iva']) && $this->nmgp_cmp_hidden['df_valor_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_valor_iva" value="<?php echo $this->form_encode_input($df_valor_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_valor_iva_line" id="hidden_field_data_df_valor_iva" style="<?php echo $sStyleHidden_df_valor_iva; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_valor_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_valor_iva_label" style=""><span id="id_label_df_valor_iva"><?php echo $this->nm_new_label['df_valor_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_valor_iva"]) &&  $this->nmgp_cmp_readonly["df_valor_iva"] == "on")) { 

 ?>
<input type="hidden" name="df_valor_iva" value="<?php echo $this->form_encode_input($df_valor_iva) . "\"><span id=\"id_ajax_label_df_valor_iva\">" . $df_valor_iva . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_valor_iva" class="sc-ui-readonly-df_valor_iva css_df_valor_iva_line" style="<?php echo $sStyleReadLab_df_valor_iva; ?>"><?php echo $this->form_format_readonly("df_valor_iva", $this->form_encode_input($this->df_valor_iva)); ?></span><span id="id_read_off_df_valor_iva" class="css_read_off_df_valor_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_valor_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_valor_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_valor_iva" type=text name="df_valor_iva" value="<?php echo $this->form_encode_input($df_valor_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_valor_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_valor_iva']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_valor_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_valor_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_valor_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_porcentaje_irbpnr']))
           {
               $this->nmgp_cmp_readonly['df_porcentaje_irbpnr'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_base_irbpnr']))
    {
        $this->nm_new_label['df_base_irbpnr'] = "" . $this->Ini->Nm_lang['lang_base_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_base_irbpnr = $this->df_base_irbpnr;
   if (!isset($this->nmgp_cmp_hidden['df_base_irbpnr']))
   {
       $this->nmgp_cmp_hidden['df_base_irbpnr'] = 'off';
   }
   $sStyleHidden_df_base_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['df_base_irbpnr']) && $this->nmgp_cmp_hidden['df_base_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_base_irbpnr']);
       $sStyleHidden_df_base_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_base_irbpnr = 'display: none;';
   $sStyleReadInp_df_base_irbpnr = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_base_irbpnr"]) &&  $this->nmgp_cmp_readonly["df_base_irbpnr"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_base_irbpnr']);
       $sStyleReadLab_df_base_irbpnr = '';
       $sStyleReadInp_df_base_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_base_irbpnr']) && $this->nmgp_cmp_hidden['df_base_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_base_irbpnr" value="<?php echo $this->form_encode_input($df_base_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_base_irbpnr_line" id="hidden_field_data_df_base_irbpnr" style="<?php echo $sStyleHidden_df_base_irbpnr; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_base_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_base_irbpnr_label" style=""><span id="id_label_df_base_irbpnr"><?php echo $this->nm_new_label['df_base_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_base_irbpnr"]) &&  $this->nmgp_cmp_readonly["df_base_irbpnr"] == "on")) { 

 ?>
<input type="hidden" name="df_base_irbpnr" value="<?php echo $this->form_encode_input($df_base_irbpnr) . "\"><span id=\"id_ajax_label_df_base_irbpnr\">" . $df_base_irbpnr . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_base_irbpnr" class="sc-ui-readonly-df_base_irbpnr css_df_base_irbpnr_line" style="<?php echo $sStyleReadLab_df_base_irbpnr; ?>"><?php echo $this->form_format_readonly("df_base_irbpnr", $this->form_encode_input($this->df_base_irbpnr)); ?></span><span id="id_read_off_df_base_irbpnr" class="css_read_off_df_base_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_base_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_base_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_base_irbpnr" type=text name="df_base_irbpnr" value="<?php echo $this->form_encode_input($df_base_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_base_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_base_irbpnr']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_base_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_base_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_base_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_valor_irbpnr']))
           {
               $this->nmgp_cmp_readonly['df_valor_irbpnr'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_porcentaje_irbpnr']))
    {
        $this->nm_new_label['df_porcentaje_irbpnr'] = "" . $this->Ini->Nm_lang['lang_porcentaje_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_porcentaje_irbpnr = $this->df_porcentaje_irbpnr;
   if (!isset($this->nmgp_cmp_hidden['df_porcentaje_irbpnr']))
   {
       $this->nmgp_cmp_hidden['df_porcentaje_irbpnr'] = 'off';
   }
   $sStyleHidden_df_porcentaje_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['df_porcentaje_irbpnr']) && $this->nmgp_cmp_hidden['df_porcentaje_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_porcentaje_irbpnr']);
       $sStyleHidden_df_porcentaje_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_porcentaje_irbpnr = 'display: none;';
   $sStyleReadInp_df_porcentaje_irbpnr = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_porcentaje_irbpnr"]) &&  $this->nmgp_cmp_readonly["df_porcentaje_irbpnr"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_porcentaje_irbpnr']);
       $sStyleReadLab_df_porcentaje_irbpnr = '';
       $sStyleReadInp_df_porcentaje_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_porcentaje_irbpnr']) && $this->nmgp_cmp_hidden['df_porcentaje_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_porcentaje_irbpnr" value="<?php echo $this->form_encode_input($df_porcentaje_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_porcentaje_irbpnr_line" id="hidden_field_data_df_porcentaje_irbpnr" style="<?php echo $sStyleHidden_df_porcentaje_irbpnr; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_porcentaje_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_porcentaje_irbpnr_label" style=""><span id="id_label_df_porcentaje_irbpnr"><?php echo $this->nm_new_label['df_porcentaje_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_porcentaje_irbpnr"]) &&  $this->nmgp_cmp_readonly["df_porcentaje_irbpnr"] == "on")) { 

 ?>
<input type="hidden" name="df_porcentaje_irbpnr" value="<?php echo $this->form_encode_input($df_porcentaje_irbpnr) . "\"><span id=\"id_ajax_label_df_porcentaje_irbpnr\">" . $df_porcentaje_irbpnr . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_porcentaje_irbpnr" class="sc-ui-readonly-df_porcentaje_irbpnr css_df_porcentaje_irbpnr_line" style="<?php echo $sStyleReadLab_df_porcentaje_irbpnr; ?>"><?php echo $this->form_format_readonly("df_porcentaje_irbpnr", $this->form_encode_input($this->df_porcentaje_irbpnr)); ?></span><span id="id_read_off_df_porcentaje_irbpnr" class="css_read_off_df_porcentaje_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_porcentaje_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_porcentaje_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_porcentaje_irbpnr" type=text name="df_porcentaje_irbpnr" value="<?php echo $this->form_encode_input($df_porcentaje_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=4"; } ?> maxlength=4 alt="{datatype: 'text', maxLength: 4, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_porcentaje_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_porcentaje_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_total']))
           {
               $this->nmgp_cmp_readonly['df_total'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_valor_irbpnr']))
    {
        $this->nm_new_label['df_valor_irbpnr'] = "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_valor_irbpnr = $this->df_valor_irbpnr;
   $sStyleHidden_df_valor_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['df_valor_irbpnr']) && $this->nmgp_cmp_hidden['df_valor_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_valor_irbpnr']);
       $sStyleHidden_df_valor_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_valor_irbpnr = 'display: none;';
   $sStyleReadInp_df_valor_irbpnr = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_valor_irbpnr"]) &&  $this->nmgp_cmp_readonly["df_valor_irbpnr"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_valor_irbpnr']);
       $sStyleReadLab_df_valor_irbpnr = '';
       $sStyleReadInp_df_valor_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_valor_irbpnr']) && $this->nmgp_cmp_hidden['df_valor_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_valor_irbpnr" value="<?php echo $this->form_encode_input($df_valor_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_valor_irbpnr_line" id="hidden_field_data_df_valor_irbpnr" style="<?php echo $sStyleHidden_df_valor_irbpnr; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_valor_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_valor_irbpnr_label" style=""><span id="id_label_df_valor_irbpnr"><?php echo $this->nm_new_label['df_valor_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_valor_irbpnr"]) &&  $this->nmgp_cmp_readonly["df_valor_irbpnr"] == "on")) { 

 ?>
<input type="hidden" name="df_valor_irbpnr" value="<?php echo $this->form_encode_input($df_valor_irbpnr) . "\"><span id=\"id_ajax_label_df_valor_irbpnr\">" . $df_valor_irbpnr . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_valor_irbpnr" class="sc-ui-readonly-df_valor_irbpnr css_df_valor_irbpnr_line" style="<?php echo $sStyleReadLab_df_valor_irbpnr; ?>"><?php echo $this->form_format_readonly("df_valor_irbpnr", $this->form_encode_input($this->df_valor_irbpnr)); ?></span><span id="id_read_off_df_valor_irbpnr" class="css_read_off_df_valor_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_valor_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_valor_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_valor_irbpnr" type=text name="df_valor_irbpnr" value="<?php echo $this->form_encode_input($df_valor_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_valor_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_valor_irbpnr']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_valor_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_valor_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_valor_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_cantidad_nc']))
           {
               $this->nmgp_cmp_readonly['df_cantidad_nc'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_total']))
    {
        $this->nm_new_label['df_total'] = "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_total = $this->df_total;
   $sStyleHidden_df_total = '';
   if (isset($this->nmgp_cmp_hidden['df_total']) && $this->nmgp_cmp_hidden['df_total'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_total']);
       $sStyleHidden_df_total = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_total = 'display: none;';
   $sStyleReadInp_df_total = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_total"]) &&  $this->nmgp_cmp_readonly["df_total"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_total']);
       $sStyleReadLab_df_total = '';
       $sStyleReadInp_df_total = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_total']) && $this->nmgp_cmp_hidden['df_total'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_total" value="<?php echo $this->form_encode_input($df_total) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_total_line" id="hidden_field_data_df_total" style="<?php echo $sStyleHidden_df_total; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_total_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_total_label" style=""><span id="id_label_df_total"><?php echo $this->nm_new_label['df_total']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_total"]) &&  $this->nmgp_cmp_readonly["df_total"] == "on")) { 

 ?>
<input type="hidden" name="df_total" value="<?php echo $this->form_encode_input($df_total) . "\"><span id=\"id_ajax_label_df_total\">" . $df_total . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_total" class="sc-ui-readonly-df_total css_df_total_line" style="<?php echo $sStyleReadLab_df_total; ?>"><?php echo $this->form_format_readonly("df_total", $this->form_encode_input($this->df_total)); ?></span><span id="id_read_off_df_total" class="css_read_off_df_total<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_total; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_total_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_total" type=text name="df_total" value="<?php echo $this->form_encode_input($df_total) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_total']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_total']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_total']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_total_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_total_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['df_precio_sin_subsidio']))
           {
               $this->nmgp_cmp_readonly['df_precio_sin_subsidio'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['df_cantidad_nc']))
    {
        $this->nm_new_label['df_cantidad_nc'] = "Df Cantidad Nc";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_cantidad_nc = $this->df_cantidad_nc;
   if (!isset($this->nmgp_cmp_hidden['df_cantidad_nc']))
   {
       $this->nmgp_cmp_hidden['df_cantidad_nc'] = 'off';
   }
   $sStyleHidden_df_cantidad_nc = '';
   if (isset($this->nmgp_cmp_hidden['df_cantidad_nc']) && $this->nmgp_cmp_hidden['df_cantidad_nc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_cantidad_nc']);
       $sStyleHidden_df_cantidad_nc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_cantidad_nc = 'display: none;';
   $sStyleReadInp_df_cantidad_nc = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_cantidad_nc"]) &&  $this->nmgp_cmp_readonly["df_cantidad_nc"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_cantidad_nc']);
       $sStyleReadLab_df_cantidad_nc = '';
       $sStyleReadInp_df_cantidad_nc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_cantidad_nc']) && $this->nmgp_cmp_hidden['df_cantidad_nc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_cantidad_nc" value="<?php echo $this->form_encode_input($df_cantidad_nc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_cantidad_nc_line" id="hidden_field_data_df_cantidad_nc" style="<?php echo $sStyleHidden_df_cantidad_nc; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_cantidad_nc_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_cantidad_nc_label" style=""><span id="id_label_df_cantidad_nc"><?php echo $this->nm_new_label['df_cantidad_nc']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_cantidad_nc"]) &&  $this->nmgp_cmp_readonly["df_cantidad_nc"] == "on")) { 

 ?>
<input type="hidden" name="df_cantidad_nc" value="<?php echo $this->form_encode_input($df_cantidad_nc) . "\"><span id=\"id_ajax_label_df_cantidad_nc\">" . $df_cantidad_nc . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_cantidad_nc" class="sc-ui-readonly-df_cantidad_nc css_df_cantidad_nc_line" style="<?php echo $sStyleReadLab_df_cantidad_nc; ?>"><?php echo $this->form_format_readonly("df_cantidad_nc", $this->form_encode_input($this->df_cantidad_nc)); ?></span><span id="id_read_off_df_cantidad_nc" class="css_read_off_df_cantidad_nc<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_cantidad_nc; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_cantidad_nc_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_cantidad_nc" type=text name="df_cantidad_nc" value="<?php echo $this->form_encode_input($df_cantidad_nc) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['df_cantidad_nc']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['df_cantidad_nc']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_cantidad_nc']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_cantidad_nc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_cantidad_nc_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['df_precio_sin_subsidio']))
    {
        $this->nm_new_label['df_precio_sin_subsidio'] = "" . $this->Ini->Nm_lang['lang_precio_sin_subsidio'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $df_precio_sin_subsidio = $this->df_precio_sin_subsidio;
   if (!isset($this->nmgp_cmp_hidden['df_precio_sin_subsidio']))
   {
       $this->nmgp_cmp_hidden['df_precio_sin_subsidio'] = 'off';
   }
   $sStyleHidden_df_precio_sin_subsidio = '';
   if (isset($this->nmgp_cmp_hidden['df_precio_sin_subsidio']) && $this->nmgp_cmp_hidden['df_precio_sin_subsidio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['df_precio_sin_subsidio']);
       $sStyleHidden_df_precio_sin_subsidio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_df_precio_sin_subsidio = 'display: none;';
   $sStyleReadInp_df_precio_sin_subsidio = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["df_precio_sin_subsidio"]) &&  $this->nmgp_cmp_readonly["df_precio_sin_subsidio"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['df_precio_sin_subsidio']);
       $sStyleReadLab_df_precio_sin_subsidio = '';
       $sStyleReadInp_df_precio_sin_subsidio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['df_precio_sin_subsidio']) && $this->nmgp_cmp_hidden['df_precio_sin_subsidio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="df_precio_sin_subsidio" value="<?php echo $this->form_encode_input($df_precio_sin_subsidio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_df_precio_sin_subsidio_line" id="hidden_field_data_df_precio_sin_subsidio" style="<?php echo $sStyleHidden_df_precio_sin_subsidio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_df_precio_sin_subsidio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_df_precio_sin_subsidio_label" style=""><span id="id_label_df_precio_sin_subsidio"><?php echo $this->nm_new_label['df_precio_sin_subsidio']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["df_precio_sin_subsidio"]) &&  $this->nmgp_cmp_readonly["df_precio_sin_subsidio"] == "on")) { 

 ?>
<input type="hidden" name="df_precio_sin_subsidio" value="<?php echo $this->form_encode_input($df_precio_sin_subsidio) . "\"><span id=\"id_ajax_label_df_precio_sin_subsidio\">" . $df_precio_sin_subsidio . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_df_precio_sin_subsidio" class="sc-ui-readonly-df_precio_sin_subsidio css_df_precio_sin_subsidio_line" style="<?php echo $sStyleReadLab_df_precio_sin_subsidio; ?>"><?php echo $this->form_format_readonly("df_precio_sin_subsidio", $this->form_encode_input($this->df_precio_sin_subsidio)); ?></span><span id="id_read_off_df_precio_sin_subsidio" class="css_read_off_df_precio_sin_subsidio<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_df_precio_sin_subsidio; ?>">
 <input class="sc-js-input scFormObjectOdd css_df_precio_sin_subsidio_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_df_precio_sin_subsidio" type=text name="df_precio_sin_subsidio" value="<?php echo $this->form_encode_input($df_precio_sin_subsidio) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['df_precio_sin_subsidio']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['df_precio_sin_subsidio']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['df_precio_sin_subsidio']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_df_precio_sin_subsidio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_df_precio_sin_subsidio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_detalle_factura_nueva_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_detalle_factura_nueva_mob");
 parent.scAjaxDetailHeight("form_detalle_factura_nueva_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_detalle_factura_nueva_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_detalle_factura_nueva_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['sc_modal'])
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_factura_nueva_mob']['buttonStatus'] = $this->nmgp_botoes;
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
