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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_retencion"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_retencion"); } ?></TITLE>
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
.css_read_off_ret_fecha button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_ret_fecha_autorizacion button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_retencion/form_del_retencion_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_retencion_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['last'] : 'off'); ?>";
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

 function nm_field_disabled(Fields, Opt) {
  opcao = "<?php if ($GLOBALS["erro_incl"] == 1) {echo "novo";} else {echo $this->nmgp_opcao;} ?>";
  if (opcao == "novo" && Opt == "U") {
      return;
  }
  if (opcao != "novo" && Opt == "I") {
      return;
  }
  Field = Fields.split(";");
  for (i=0; i < Field.length; i++)
  {
     F_temp = Field[i].split("=");
     F_name = F_temp[0];
     F_opc  = (F_temp[1] && ("disabled" == F_temp[1] || "true" == F_temp[1])) ? true : false;
     if (F_name == "secuencial")
     {
        $('input[name="secuencial"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="secuencial"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="secuencial"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tipo_libretin")
     {
        $('input[name="tipo_libretin"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tipo_libretin"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tipo_libretin"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ambiente")
     {
        $('input[name="ambiente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ambiente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ambiente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ret_ruc_cliente")
     {
        $('input[name="ret_ruc_cliente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ret_ruc_cliente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ret_ruc_cliente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ret_nombre_cliente")
     {
        $('input[name="ret_nombre_cliente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ret_nombre_cliente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ret_nombre_cliente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ret_direccion_cliente")
     {
        $('input[name="ret_direccion_cliente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ret_direccion_cliente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ret_direccion_cliente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ret_email_cliente")
     {
        $('input[name="ret_email_cliente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ret_email_cliente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ret_email_cliente"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_del_retencion_jquery.php');

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
  scFocusField('ret_libretin');

<?php
}
?>
  sc_form_onload();

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['link_info']['remove_border']) {
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
 include_once("form_del_retencion_js0.php");
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
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_del_retencion'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_retencion'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_1";
        echo "<img id=\"NM_sep_1\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Nuevo'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['nuevo'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "nuevo", "scBtnFn_Nuevo()", "scBtnFn_Nuevo()", "sc_Nuevo_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Anular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['anular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "anular", "scBtnFn_Anular()", "scBtnFn_Anular()", "sc_Anular_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label'][''];
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
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['enviar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['enviar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['enviar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['enviar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['enviar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['enviar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "enviar", "scBtnFn_enviar()", "scBtnFn_enviar()", "sc_enviar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['ride'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['ride']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['ride']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['ride']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['ride']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['ride'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "ride", "scBtnFn_ride()", "scBtnFn_ride()", "sc_ride_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['ret_establecimiento']))
   {
       $this->nmgp_cmp_hidden['ret_establecimiento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['ret_punto_emision']))
   {
       $this->nmgp_cmp_hidden['ret_punto_emision'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['ret_secuencial']))
   {
       $this->nmgp_cmp_hidden['ret_secuencial'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['ret_ambiente']))
   {
       $this->nmgp_cmp_hidden['ret_ambiente'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['ret_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['ret_tipo_libretin'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['ret_estado_sri']))
   {
       $this->nmgp_cmp_hidden['ret_estado_sri'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['ret_error_sri']))
   {
       $this->nmgp_cmp_hidden['ret_error_sri'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['titulo']))
    {
        $this->nm_new_label['titulo'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $titulo = $this->titulo;
   $sStyleHidden_titulo = '';
   if (isset($this->nmgp_cmp_hidden['titulo']) && $this->nmgp_cmp_hidden['titulo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['titulo']);
       $sStyleHidden_titulo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_titulo = 'display: none;';
   $sStyleReadInp_titulo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['titulo']) && $this->nmgp_cmp_readonly['titulo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['titulo']);
       $sStyleReadLab_titulo = '';
       $sStyleReadInp_titulo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['titulo']) && $this->nmgp_cmp_hidden['titulo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="titulo" value="<?php echo $this->form_encode_input($titulo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_titulo_line" id="hidden_field_data_titulo" style="<?php echo $sStyleHidden_titulo; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_titulo_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="titulo" value="<?php echo $this->form_encode_input($titulo); ?>"><span id="id_ajax_label_titulo"><?php echo nl2br($titulo); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_titulo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_titulo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ret_estado_sri']))
    {
        $this->nm_new_label['ret_estado_sri'] = "Ret Estado Sri";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_estado_sri = $this->ret_estado_sri;
   if (!isset($this->nmgp_cmp_hidden['ret_estado_sri']))
   {
       $this->nmgp_cmp_hidden['ret_estado_sri'] = 'off';
   }
   $sStyleHidden_ret_estado_sri = '';
   if (isset($this->nmgp_cmp_hidden['ret_estado_sri']) && $this->nmgp_cmp_hidden['ret_estado_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_estado_sri']);
       $sStyleHidden_ret_estado_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_estado_sri = 'display: none;';
   $sStyleReadInp_ret_estado_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_estado_sri']) && $this->nmgp_cmp_readonly['ret_estado_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_estado_sri']);
       $sStyleReadLab_ret_estado_sri = '';
       $sStyleReadInp_ret_estado_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_estado_sri']) && $this->nmgp_cmp_hidden['ret_estado_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_estado_sri" value="<?php echo $this->form_encode_input($ret_estado_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ret_estado_sri_line" id="hidden_field_data_ret_estado_sri" style="<?php echo $sStyleHidden_ret_estado_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_estado_sri_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_estado_sri"]) &&  $this->nmgp_cmp_readonly["ret_estado_sri"] == "on") { 

 ?>
<input type="hidden" name="ret_estado_sri" value="<?php echo $this->form_encode_input($ret_estado_sri) . "\">" . $ret_estado_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_estado_sri" class="sc-ui-readonly-ret_estado_sri css_ret_estado_sri_line" style="<?php echo $sStyleReadLab_ret_estado_sri; ?>"><?php echo $this->form_format_readonly("ret_estado_sri", $this->form_encode_input($this->ret_estado_sri)); ?></span><span id="id_read_off_ret_estado_sri" class="css_read_off_ret_estado_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_estado_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_estado_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_estado_sri" type=text name="ret_estado_sri" value="<?php echo $this->form_encode_input($ret_estado_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_estado_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_estado_sri_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="6" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_retencion'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ret_fecha']))
    {
        $this->nm_new_label['ret_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_fecha = $this->ret_fecha;
   $sStyleHidden_ret_fecha = '';
   if (isset($this->nmgp_cmp_hidden['ret_fecha']) && $this->nmgp_cmp_hidden['ret_fecha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_fecha']);
       $sStyleHidden_ret_fecha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_fecha = 'display: none;';
   $sStyleReadInp_ret_fecha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_fecha']) && $this->nmgp_cmp_readonly['ret_fecha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_fecha']);
       $sStyleReadLab_ret_fecha = '';
       $sStyleReadInp_ret_fecha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_fecha']) && $this->nmgp_cmp_hidden['ret_fecha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_fecha" value="<?php echo $this->form_encode_input($ret_fecha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ret_fecha_line" id="hidden_field_data_ret_fecha" style="<?php echo $sStyleHidden_ret_fecha; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_fecha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ret_fecha_label" style=""><span id="id_label_ret_fecha"><?php echo $this->nm_new_label['ret_fecha']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_fecha']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_fecha'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_fecha"]) &&  $this->nmgp_cmp_readonly["ret_fecha"] == "on") { 

 ?>
<input type="hidden" name="ret_fecha" value="<?php echo $this->form_encode_input($ret_fecha) . "\">" . $ret_fecha . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_fecha" class="sc-ui-readonly-ret_fecha css_ret_fecha_line" style="<?php echo $sStyleReadLab_ret_fecha; ?>"><?php echo $this->form_format_readonly("ret_fecha", $this->form_encode_input($ret_fecha)); ?></span><span id="id_read_off_ret_fecha" class="css_read_off_ret_fecha<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_fecha; ?>"><?php
$tmp_form_data = $this->field_config['ret_fecha']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_ret_fecha_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_fecha" type=text name="ret_fecha" value="<?php echo $this->form_encode_input($ret_fecha) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['ret_fecha']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['ret_fecha']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_fecha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_fecha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ret_libretin']))
   {
       $this->nm_new_label['ret_libretin'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_libretin = $this->ret_libretin;
   $sStyleHidden_ret_libretin = '';
   if (isset($this->nmgp_cmp_hidden['ret_libretin']) && $this->nmgp_cmp_hidden['ret_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_libretin']);
       $sStyleHidden_ret_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_libretin = 'display: none;';
   $sStyleReadInp_ret_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_libretin']) && $this->nmgp_cmp_readonly['ret_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_libretin']);
       $sStyleReadLab_ret_libretin = '';
       $sStyleReadInp_ret_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_libretin']) && $this->nmgp_cmp_hidden['ret_libretin'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ret_libretin" value="<?php echo $this->form_encode_input($this->ret_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ret_libretin_line" id="hidden_field_data_ret_libretin" style="<?php echo $sStyleHidden_ret_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ret_libretin_label" style=""><span id="id_label_ret_libretin"><?php echo $this->nm_new_label['ret_libretin']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_libretin']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_libretin'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_libretin"]) &&  $this->nmgp_cmp_readonly["ret_libretin"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_libretin']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_libretin']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_libretin'] = array(); 
    }

   $old_value_ret_fecha = $this->ret_fecha;
   $old_value_ret_establecimiento = $this->ret_establecimiento;
   $old_value_ret_punto_emision = $this->ret_punto_emision;
   $old_value_ret_secuencial = $this->ret_secuencial;
   $old_value_ret_ambiente = $this->ret_ambiente;
   $old_value_ret_cliente = $this->ret_cliente;
   $old_value_ret_anio_periodo_fiscal = $this->ret_anio_periodo_fiscal;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_ret_fecha = $this->ret_fecha;
   $unformatted_value_ret_establecimiento = $this->ret_establecimiento;
   $unformatted_value_ret_punto_emision = $this->ret_punto_emision;
   $unformatted_value_ret_secuencial = $this->ret_secuencial;
   $unformatted_value_ret_ambiente = $this->ret_ambiente;
   $unformatted_value_ret_cliente = $this->ret_cliente;
   $unformatted_value_ret_anio_periodo_fiscal = $this->ret_anio_periodo_fiscal;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='07'";

   $this->ret_fecha = $old_value_ret_fecha;
   $this->ret_establecimiento = $old_value_ret_establecimiento;
   $this->ret_punto_emision = $old_value_ret_punto_emision;
   $this->ret_secuencial = $old_value_ret_secuencial;
   $this->ret_ambiente = $old_value_ret_ambiente;
   $this->ret_cliente = $old_value_ret_cliente;
   $this->ret_anio_periodo_fiscal = $old_value_ret_anio_periodo_fiscal;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_libretin'][] = $rs->fields[0];
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
   $ret_libretin_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ret_libretin_1))
          {
              foreach ($this->ret_libretin_1 as $tmp_ret_libretin)
              {
                  if (trim($tmp_ret_libretin) === trim($cadaselect[1])) {$ret_libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ret_libretin) && trim($this->ret_libretin) === trim($cadaselect[1])) {$ret_libretin_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ret_libretin" value="<?php echo $this->form_encode_input($ret_libretin) . "\">" . $ret_libretin_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ret_libretin();
   $x = 0 ; 
   $ret_libretin_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ret_libretin_1))
          {
              foreach ($this->ret_libretin_1 as $tmp_ret_libretin)
              {
                  if (trim($tmp_ret_libretin) === trim($cadaselect[1])) {$ret_libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ret_libretin) && trim($this->ret_libretin) === trim($cadaselect[1])) { $ret_libretin_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ret_libretin_look))
          {
              $ret_libretin_look = $this->ret_libretin;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ret_libretin\" class=\"css_ret_libretin_line\" style=\"" .  $sStyleReadLab_ret_libretin . "\">" . $this->form_format_readonly("ret_libretin", $this->form_encode_input($ret_libretin_look)) . "</span><span id=\"id_read_off_ret_libretin\" class=\"css_read_off_ret_libretin" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ret_libretin . "\">";
   echo " <span id=\"idAjaxSelect_ret_libretin\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ret_libretin_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ret_libretin\" name=\"ret_libretin\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ret_libretin) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ret_libretin)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['secuencial']))
    {
        $this->nm_new_label['secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $secuencial = $this->secuencial;
   $sStyleHidden_secuencial = '';
   if (isset($this->nmgp_cmp_hidden['secuencial']) && $this->nmgp_cmp_hidden['secuencial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['secuencial']);
       $sStyleHidden_secuencial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_secuencial = 'display: none;';
   $sStyleReadInp_secuencial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['secuencial']) && $this->nmgp_cmp_readonly['secuencial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['secuencial']);
       $sStyleReadLab_secuencial = '';
       $sStyleReadInp_secuencial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['secuencial']) && $this->nmgp_cmp_hidden['secuencial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="secuencial" value="<?php echo $this->form_encode_input($secuencial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_secuencial_line" id="hidden_field_data_secuencial" style="<?php echo $sStyleHidden_secuencial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_secuencial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_secuencial_label" style=""><span id="id_label_secuencial"><?php echo $this->nm_new_label['secuencial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["secuencial"]) &&  $this->nmgp_cmp_readonly["secuencial"] == "on") { 

 ?>
<input type="hidden" name="secuencial" value="<?php echo $this->form_encode_input($secuencial) . "\">" . $secuencial . ""; ?>
<?php } else { ?>
<span id="id_read_on_secuencial" class="sc-ui-readonly-secuencial css_secuencial_line" style="<?php echo $sStyleReadLab_secuencial; ?>"><?php echo $this->form_format_readonly("secuencial", $this->form_encode_input($this->secuencial)); ?></span><span id="id_read_off_secuencial" class="css_read_off_secuencial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_secuencial; ?>">
 <input class="sc-js-input scFormObjectOdd css_secuencial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_secuencial" type=text name="secuencial" value="<?php echo $this->form_encode_input($secuencial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'text', maxLength: 9, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['tipo_libretin']))
    {
        $this->nm_new_label['tipo_libretin'] = "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipo_libretin = $this->tipo_libretin;
   $sStyleHidden_tipo_libretin = '';
   if (isset($this->nmgp_cmp_hidden['tipo_libretin']) && $this->nmgp_cmp_hidden['tipo_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipo_libretin']);
       $sStyleHidden_tipo_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipo_libretin = 'display: none;';
   $sStyleReadInp_tipo_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipo_libretin']) && $this->nmgp_cmp_readonly['tipo_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipo_libretin']);
       $sStyleReadLab_tipo_libretin = '';
       $sStyleReadInp_tipo_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipo_libretin']) && $this->nmgp_cmp_hidden['tipo_libretin'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipo_libretin" value="<?php echo $this->form_encode_input($tipo_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipo_libretin_line" id="hidden_field_data_tipo_libretin" style="<?php echo $sStyleHidden_tipo_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipo_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tipo_libretin_label" style=""><span id="id_label_tipo_libretin"><?php echo $this->nm_new_label['tipo_libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipo_libretin"]) &&  $this->nmgp_cmp_readonly["tipo_libretin"] == "on") { 

 ?>
<input type="hidden" name="tipo_libretin" value="<?php echo $this->form_encode_input($tipo_libretin) . "\">" . $tipo_libretin . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipo_libretin" class="sc-ui-readonly-tipo_libretin css_tipo_libretin_line" style="<?php echo $sStyleReadLab_tipo_libretin; ?>"><?php echo $this->form_format_readonly("tipo_libretin", $this->form_encode_input($this->tipo_libretin)); ?></span><span id="id_read_off_tipo_libretin" class="css_read_off_tipo_libretin<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_tipo_libretin; ?>">
 <input class="sc-js-input scFormObjectOdd css_tipo_libretin_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_tipo_libretin" type=text name="tipo_libretin" value="<?php echo $this->form_encode_input($tipo_libretin) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ambiente']))
    {
        $this->nm_new_label['ambiente'] = "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ambiente = $this->ambiente;
   $sStyleHidden_ambiente = '';
   if (isset($this->nmgp_cmp_hidden['ambiente']) && $this->nmgp_cmp_hidden['ambiente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ambiente']);
       $sStyleHidden_ambiente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ambiente = 'display: none;';
   $sStyleReadInp_ambiente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ambiente']) && $this->nmgp_cmp_readonly['ambiente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ambiente']);
       $sStyleReadLab_ambiente = '';
       $sStyleReadInp_ambiente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ambiente']) && $this->nmgp_cmp_hidden['ambiente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ambiente" value="<?php echo $this->form_encode_input($ambiente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ambiente_line" id="hidden_field_data_ambiente" style="<?php echo $sStyleHidden_ambiente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ambiente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ambiente_label" style=""><span id="id_label_ambiente"><?php echo $this->nm_new_label['ambiente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ambiente"]) &&  $this->nmgp_cmp_readonly["ambiente"] == "on") { 

 ?>
<input type="hidden" name="ambiente" value="<?php echo $this->form_encode_input($ambiente) . "\">" . $ambiente . ""; ?>
<?php } else { ?>
<span id="id_read_on_ambiente" class="sc-ui-readonly-ambiente css_ambiente_line" style="<?php echo $sStyleReadLab_ambiente; ?>"><?php echo $this->form_format_readonly("ambiente", $this->form_encode_input($this->ambiente)); ?></span><span id="id_read_off_ambiente" class="css_read_off_ambiente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ambiente; ?>">
 <input class="sc-js-input scFormObjectOdd css_ambiente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ambiente" type=text name="ambiente" value="<?php echo $this->form_encode_input($ambiente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ambiente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ambiente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ret_establecimiento']))
    {
        $this->nm_new_label['ret_establecimiento'] = "Ret Establecimiento";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_establecimiento = $this->ret_establecimiento;
   if (!isset($this->nmgp_cmp_hidden['ret_establecimiento']))
   {
       $this->nmgp_cmp_hidden['ret_establecimiento'] = 'off';
   }
   $sStyleHidden_ret_establecimiento = '';
   if (isset($this->nmgp_cmp_hidden['ret_establecimiento']) && $this->nmgp_cmp_hidden['ret_establecimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_establecimiento']);
       $sStyleHidden_ret_establecimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_establecimiento = 'display: none;';
   $sStyleReadInp_ret_establecimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_establecimiento']) && $this->nmgp_cmp_readonly['ret_establecimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_establecimiento']);
       $sStyleReadLab_ret_establecimiento = '';
       $sStyleReadInp_ret_establecimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_establecimiento']) && $this->nmgp_cmp_hidden['ret_establecimiento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_establecimiento" value="<?php echo $this->form_encode_input($ret_establecimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ret_establecimiento_line" id="hidden_field_data_ret_establecimiento" style="<?php echo $sStyleHidden_ret_establecimiento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_establecimiento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ret_establecimiento_label" style=""><span id="id_label_ret_establecimiento"><?php echo $this->nm_new_label['ret_establecimiento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_establecimiento"]) &&  $this->nmgp_cmp_readonly["ret_establecimiento"] == "on") { 

 ?>
<input type="hidden" name="ret_establecimiento" value="<?php echo $this->form_encode_input($ret_establecimiento) . "\">" . $ret_establecimiento . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_establecimiento" class="sc-ui-readonly-ret_establecimiento css_ret_establecimiento_line" style="<?php echo $sStyleReadLab_ret_establecimiento; ?>"><?php echo $this->form_format_readonly("ret_establecimiento", $this->form_encode_input($this->ret_establecimiento)); ?></span><span id="id_read_off_ret_establecimiento" class="css_read_off_ret_establecimiento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_establecimiento; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_establecimiento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_establecimiento" type=text name="ret_establecimiento" value="<?php echo $this->form_encode_input($ret_establecimiento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['ret_establecimiento']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['ret_establecimiento']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ret_establecimiento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_establecimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_establecimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_ret_fecha_dumb = ('' == $sStyleHidden_ret_fecha) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ret_fecha_dumb" style="<?php echo $sStyleHidden_ret_fecha_dumb; ?>"></TD>
<?php $sStyleHidden_ret_libretin_dumb = ('' == $sStyleHidden_ret_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ret_libretin_dumb" style="<?php echo $sStyleHidden_ret_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_secuencial_dumb = ('' == $sStyleHidden_secuencial) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_secuencial_dumb" style="<?php echo $sStyleHidden_secuencial_dumb; ?>"></TD>
<?php $sStyleHidden_tipo_libretin_dumb = ('' == $sStyleHidden_tipo_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tipo_libretin_dumb" style="<?php echo $sStyleHidden_tipo_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_ambiente_dumb = ('' == $sStyleHidden_ambiente) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ambiente_dumb" style="<?php echo $sStyleHidden_ambiente_dumb; ?>"></TD>
<?php $sStyleHidden_ret_establecimiento_dumb = ('' == $sStyleHidden_ret_establecimiento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ret_establecimiento_dumb" style="<?php echo $sStyleHidden_ret_establecimiento_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ret_punto_emision']))
    {
        $this->nm_new_label['ret_punto_emision'] = "Ret Punto Emision";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_punto_emision = $this->ret_punto_emision;
   if (!isset($this->nmgp_cmp_hidden['ret_punto_emision']))
   {
       $this->nmgp_cmp_hidden['ret_punto_emision'] = 'off';
   }
   $sStyleHidden_ret_punto_emision = '';
   if (isset($this->nmgp_cmp_hidden['ret_punto_emision']) && $this->nmgp_cmp_hidden['ret_punto_emision'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_punto_emision']);
       $sStyleHidden_ret_punto_emision = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_punto_emision = 'display: none;';
   $sStyleReadInp_ret_punto_emision = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_punto_emision']) && $this->nmgp_cmp_readonly['ret_punto_emision'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_punto_emision']);
       $sStyleReadLab_ret_punto_emision = '';
       $sStyleReadInp_ret_punto_emision = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_punto_emision']) && $this->nmgp_cmp_hidden['ret_punto_emision'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_punto_emision" value="<?php echo $this->form_encode_input($ret_punto_emision) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ret_punto_emision_line" id="hidden_field_data_ret_punto_emision" style="<?php echo $sStyleHidden_ret_punto_emision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_punto_emision_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ret_punto_emision_label" style=""><span id="id_label_ret_punto_emision"><?php echo $this->nm_new_label['ret_punto_emision']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_punto_emision"]) &&  $this->nmgp_cmp_readonly["ret_punto_emision"] == "on") { 

 ?>
<input type="hidden" name="ret_punto_emision" value="<?php echo $this->form_encode_input($ret_punto_emision) . "\">" . $ret_punto_emision . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_punto_emision" class="sc-ui-readonly-ret_punto_emision css_ret_punto_emision_line" style="<?php echo $sStyleReadLab_ret_punto_emision; ?>"><?php echo $this->form_format_readonly("ret_punto_emision", $this->form_encode_input($this->ret_punto_emision)); ?></span><span id="id_read_off_ret_punto_emision" class="css_read_off_ret_punto_emision<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_punto_emision; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_punto_emision_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_punto_emision" type=text name="ret_punto_emision" value="<?php echo $this->form_encode_input($ret_punto_emision) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['ret_punto_emision']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['ret_punto_emision']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ret_punto_emision']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_punto_emision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_punto_emision_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ret_secuencial']))
    {
        $this->nm_new_label['ret_secuencial'] = "Ret Secuencial";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_secuencial = $this->ret_secuencial;
   if (!isset($this->nmgp_cmp_hidden['ret_secuencial']))
   {
       $this->nmgp_cmp_hidden['ret_secuencial'] = 'off';
   }
   $sStyleHidden_ret_secuencial = '';
   if (isset($this->nmgp_cmp_hidden['ret_secuencial']) && $this->nmgp_cmp_hidden['ret_secuencial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_secuencial']);
       $sStyleHidden_ret_secuencial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_secuencial = 'display: none;';
   $sStyleReadInp_ret_secuencial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_secuencial']) && $this->nmgp_cmp_readonly['ret_secuencial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_secuencial']);
       $sStyleReadLab_ret_secuencial = '';
       $sStyleReadInp_ret_secuencial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_secuencial']) && $this->nmgp_cmp_hidden['ret_secuencial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_secuencial" value="<?php echo $this->form_encode_input($ret_secuencial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ret_secuencial_line" id="hidden_field_data_ret_secuencial" style="<?php echo $sStyleHidden_ret_secuencial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_secuencial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ret_secuencial_label" style=""><span id="id_label_ret_secuencial"><?php echo $this->nm_new_label['ret_secuencial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_secuencial"]) &&  $this->nmgp_cmp_readonly["ret_secuencial"] == "on") { 

 ?>
<input type="hidden" name="ret_secuencial" value="<?php echo $this->form_encode_input($ret_secuencial) . "\">" . $ret_secuencial . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_secuencial" class="sc-ui-readonly-ret_secuencial css_ret_secuencial_line" style="<?php echo $sStyleReadLab_ret_secuencial; ?>"><?php echo $this->form_format_readonly("ret_secuencial", $this->form_encode_input($this->ret_secuencial)); ?></span><span id="id_read_off_ret_secuencial" class="css_read_off_ret_secuencial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_secuencial; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_secuencial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_secuencial" type=text name="ret_secuencial" value="<?php echo $this->form_encode_input($ret_secuencial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['ret_secuencial']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['ret_secuencial']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ret_secuencial']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ret_tipo_libretin']))
    {
        $this->nm_new_label['ret_tipo_libretin'] = "Ret Tipo Libretin";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_tipo_libretin = $this->ret_tipo_libretin;
   if (!isset($this->nmgp_cmp_hidden['ret_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['ret_tipo_libretin'] = 'off';
   }
   $sStyleHidden_ret_tipo_libretin = '';
   if (isset($this->nmgp_cmp_hidden['ret_tipo_libretin']) && $this->nmgp_cmp_hidden['ret_tipo_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_tipo_libretin']);
       $sStyleHidden_ret_tipo_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_tipo_libretin = 'display: none;';
   $sStyleReadInp_ret_tipo_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_tipo_libretin']) && $this->nmgp_cmp_readonly['ret_tipo_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_tipo_libretin']);
       $sStyleReadLab_ret_tipo_libretin = '';
       $sStyleReadInp_ret_tipo_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_tipo_libretin']) && $this->nmgp_cmp_hidden['ret_tipo_libretin'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_tipo_libretin" value="<?php echo $this->form_encode_input($ret_tipo_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ret_tipo_libretin_line" id="hidden_field_data_ret_tipo_libretin" style="<?php echo $sStyleHidden_ret_tipo_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_tipo_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ret_tipo_libretin_label" style=""><span id="id_label_ret_tipo_libretin"><?php echo $this->nm_new_label['ret_tipo_libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_tipo_libretin"]) &&  $this->nmgp_cmp_readonly["ret_tipo_libretin"] == "on") { 

 ?>
<input type="hidden" name="ret_tipo_libretin" value="<?php echo $this->form_encode_input($ret_tipo_libretin) . "\">" . $ret_tipo_libretin . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_tipo_libretin" class="sc-ui-readonly-ret_tipo_libretin css_ret_tipo_libretin_line" style="<?php echo $sStyleReadLab_ret_tipo_libretin; ?>"><?php echo $this->form_format_readonly("ret_tipo_libretin", $this->form_encode_input($this->ret_tipo_libretin)); ?></span><span id="id_read_off_ret_tipo_libretin" class="css_read_off_ret_tipo_libretin<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_tipo_libretin; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_tipo_libretin_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_tipo_libretin" type=text name="ret_tipo_libretin" value="<?php echo $this->form_encode_input($ret_tipo_libretin) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_tipo_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_tipo_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ret_ambiente']))
    {
        $this->nm_new_label['ret_ambiente'] = "Ret Ambiente";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_ambiente = $this->ret_ambiente;
   if (!isset($this->nmgp_cmp_hidden['ret_ambiente']))
   {
       $this->nmgp_cmp_hidden['ret_ambiente'] = 'off';
   }
   $sStyleHidden_ret_ambiente = '';
   if (isset($this->nmgp_cmp_hidden['ret_ambiente']) && $this->nmgp_cmp_hidden['ret_ambiente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_ambiente']);
       $sStyleHidden_ret_ambiente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_ambiente = 'display: none;';
   $sStyleReadInp_ret_ambiente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_ambiente']) && $this->nmgp_cmp_readonly['ret_ambiente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_ambiente']);
       $sStyleReadLab_ret_ambiente = '';
       $sStyleReadInp_ret_ambiente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_ambiente']) && $this->nmgp_cmp_hidden['ret_ambiente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_ambiente" value="<?php echo $this->form_encode_input($ret_ambiente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ret_ambiente_line" id="hidden_field_data_ret_ambiente" style="<?php echo $sStyleHidden_ret_ambiente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_ambiente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ret_ambiente_label" style=""><span id="id_label_ret_ambiente"><?php echo $this->nm_new_label['ret_ambiente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_ambiente"]) &&  $this->nmgp_cmp_readonly["ret_ambiente"] == "on") { 

 ?>
<input type="hidden" name="ret_ambiente" value="<?php echo $this->form_encode_input($ret_ambiente) . "\">" . $ret_ambiente . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_ambiente" class="sc-ui-readonly-ret_ambiente css_ret_ambiente_line" style="<?php echo $sStyleReadLab_ret_ambiente; ?>"><?php echo $this->form_format_readonly("ret_ambiente", $this->form_encode_input($this->ret_ambiente)); ?></span><span id="id_read_off_ret_ambiente" class="css_read_off_ret_ambiente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_ambiente; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_ambiente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_ambiente" type=text name="ret_ambiente" value="<?php echo $this->form_encode_input($ret_ambiente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['ret_ambiente']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['ret_ambiente']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ret_ambiente']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_ambiente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_ambiente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="2" >&nbsp;</TD>




<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
<?php $sStyleHidden_ret_punto_emision_dumb = ('' == $sStyleHidden_ret_punto_emision) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ret_punto_emision_dumb" style="<?php echo $sStyleHidden_ret_punto_emision_dumb; ?>"></TD>
<?php $sStyleHidden_ret_secuencial_dumb = ('' == $sStyleHidden_ret_secuencial) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ret_secuencial_dumb" style="<?php echo $sStyleHidden_ret_secuencial_dumb; ?>"></TD>
<?php $sStyleHidden_ret_tipo_libretin_dumb = ('' == $sStyleHidden_ret_tipo_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ret_tipo_libretin_dumb" style="<?php echo $sStyleHidden_ret_tipo_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_ret_ambiente_dumb = ('' == $sStyleHidden_ret_ambiente) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ret_ambiente_dumb" style="<?php echo $sStyleHidden_ret_ambiente_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="4" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_proveedor'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ret_cliente']))
    {
        $this->nm_new_label['ret_cliente'] = "" . $this->Ini->Nm_lang['lang_proveedor'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_cliente = $this->ret_cliente;
   $sStyleHidden_ret_cliente = '';
   if (isset($this->nmgp_cmp_hidden['ret_cliente']) && $this->nmgp_cmp_hidden['ret_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_cliente']);
       $sStyleHidden_ret_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_cliente = 'display: none;';
   $sStyleReadInp_ret_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_cliente']) && $this->nmgp_cmp_readonly['ret_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_cliente']);
       $sStyleReadLab_ret_cliente = '';
       $sStyleReadInp_ret_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_cliente']) && $this->nmgp_cmp_hidden['ret_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_cliente" value="<?php echo $this->form_encode_input($ret_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ret_cliente_label" id="hidden_field_label_ret_cliente" style="<?php echo $sStyleHidden_ret_cliente; ?>"><span id="id_label_ret_cliente"><?php echo $this->nm_new_label['ret_cliente']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_cliente']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_cliente'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_ret_cliente_line" id="hidden_field_data_ret_cliente" style="<?php echo $sStyleHidden_ret_cliente; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_cliente_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="ret_cliente" value="<?php echo $this->form_encode_input($ret_cliente); ?>"><span id="id_ajax_label_ret_cliente"><?php echo nl2br($ret_cliente); ?></span>
<?php
   $Sc_iframe_master = ($this->Embutida_call) ? 'nmgp_iframe_ret*scinnmsc_iframe_liga_form_del_retencion*scout' : '';
   if (isset($this->Ini->sc_lig_md5["grid_del_proveedor"]) && $this->Ini->sc_lig_md5["grid_del_proveedor"] == "S") {
       $Parms_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,ret_cliente,pr_id*scoutnm_evt_ret_busca*scinsc_form_del_retencion_ret_cliente_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_retencion@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,ret_cliente,pr_id*scoutnm_evt_ret_busca*scinsc_form_del_retencion_ret_cliente_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
   }
?>

<?php if (!$this->Ini->Export_img_zip) { ?><?php echo nmButtonOutput($this->arr_buttons, "bform_captura", "nm_submit_cap('" . $this->Ini->link_grid_del_proveedor_cons_psq. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_grid_del_proveedor_cons_psq. "', '" . $Md5_Lig . "')", "cap_ret_cliente", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_cliente_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ret_ruc_cliente']))
    {
        $this->nm_new_label['ret_ruc_cliente'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_ruc_cliente = $this->ret_ruc_cliente;
   $sStyleHidden_ret_ruc_cliente = '';
   if (isset($this->nmgp_cmp_hidden['ret_ruc_cliente']) && $this->nmgp_cmp_hidden['ret_ruc_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_ruc_cliente']);
       $sStyleHidden_ret_ruc_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_ruc_cliente = 'display: none;';
   $sStyleReadInp_ret_ruc_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_ruc_cliente']) && $this->nmgp_cmp_readonly['ret_ruc_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_ruc_cliente']);
       $sStyleReadLab_ret_ruc_cliente = '';
       $sStyleReadInp_ret_ruc_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_ruc_cliente']) && $this->nmgp_cmp_hidden['ret_ruc_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_ruc_cliente" value="<?php echo $this->form_encode_input($ret_ruc_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ret_ruc_cliente_label" id="hidden_field_label_ret_ruc_cliente" style="<?php echo $sStyleHidden_ret_ruc_cliente; ?>"><span id="id_label_ret_ruc_cliente"><?php echo $this->nm_new_label['ret_ruc_cliente']; ?></span></TD>
    <TD class="scFormDataOdd css_ret_ruc_cliente_line" id="hidden_field_data_ret_ruc_cliente" style="<?php echo $sStyleHidden_ret_ruc_cliente; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_ruc_cliente_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_ruc_cliente"]) &&  $this->nmgp_cmp_readonly["ret_ruc_cliente"] == "on") { 

 ?>
<input type="hidden" name="ret_ruc_cliente" value="<?php echo $this->form_encode_input($ret_ruc_cliente) . "\">" . $ret_ruc_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_ruc_cliente" class="sc-ui-readonly-ret_ruc_cliente css_ret_ruc_cliente_line" style="<?php echo $sStyleReadLab_ret_ruc_cliente; ?>"><?php echo $this->form_format_readonly("ret_ruc_cliente", $this->form_encode_input($this->ret_ruc_cliente)); ?></span><span id="id_read_off_ret_ruc_cliente" class="css_read_off_ret_ruc_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_ruc_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_ruc_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_ruc_cliente" type=text name="ret_ruc_cliente" value="<?php echo $this->form_encode_input($ret_ruc_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_ruc_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_ruc_cliente_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ret_nombre_cliente']))
    {
        $this->nm_new_label['ret_nombre_cliente'] = "" . $this->Ini->Nm_lang['lang_nombre'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_nombre_cliente = $this->ret_nombre_cliente;
   $sStyleHidden_ret_nombre_cliente = '';
   if (isset($this->nmgp_cmp_hidden['ret_nombre_cliente']) && $this->nmgp_cmp_hidden['ret_nombre_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_nombre_cliente']);
       $sStyleHidden_ret_nombre_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_nombre_cliente = 'display: none;';
   $sStyleReadInp_ret_nombre_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_nombre_cliente']) && $this->nmgp_cmp_readonly['ret_nombre_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_nombre_cliente']);
       $sStyleReadLab_ret_nombre_cliente = '';
       $sStyleReadInp_ret_nombre_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_nombre_cliente']) && $this->nmgp_cmp_hidden['ret_nombre_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_nombre_cliente" value="<?php echo $this->form_encode_input($ret_nombre_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ret_nombre_cliente_label" id="hidden_field_label_ret_nombre_cliente" style="<?php echo $sStyleHidden_ret_nombre_cliente; ?>"><span id="id_label_ret_nombre_cliente"><?php echo $this->nm_new_label['ret_nombre_cliente']; ?></span></TD>
    <TD class="scFormDataOdd css_ret_nombre_cliente_line" id="hidden_field_data_ret_nombre_cliente" style="<?php echo $sStyleHidden_ret_nombre_cliente; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_nombre_cliente_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_nombre_cliente"]) &&  $this->nmgp_cmp_readonly["ret_nombre_cliente"] == "on") { 

 ?>
<input type="hidden" name="ret_nombre_cliente" value="<?php echo $this->form_encode_input($ret_nombre_cliente) . "\">" . $ret_nombre_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_nombre_cliente" class="sc-ui-readonly-ret_nombre_cliente css_ret_nombre_cliente_line" style="<?php echo $sStyleReadLab_ret_nombre_cliente; ?>"><?php echo $this->form_format_readonly("ret_nombre_cliente", $this->form_encode_input($this->ret_nombre_cliente)); ?></span><span id="id_read_off_ret_nombre_cliente" class="css_read_off_ret_nombre_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_nombre_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_nombre_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_nombre_cliente" type=text name="ret_nombre_cliente" value="<?php echo $this->form_encode_input($ret_nombre_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_nombre_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_nombre_cliente_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ret_direccion_cliente']))
    {
        $this->nm_new_label['ret_direccion_cliente'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_direccion_cliente = $this->ret_direccion_cliente;
   $sStyleHidden_ret_direccion_cliente = '';
   if (isset($this->nmgp_cmp_hidden['ret_direccion_cliente']) && $this->nmgp_cmp_hidden['ret_direccion_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_direccion_cliente']);
       $sStyleHidden_ret_direccion_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_direccion_cliente = 'display: none;';
   $sStyleReadInp_ret_direccion_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_direccion_cliente']) && $this->nmgp_cmp_readonly['ret_direccion_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_direccion_cliente']);
       $sStyleReadLab_ret_direccion_cliente = '';
       $sStyleReadInp_ret_direccion_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_direccion_cliente']) && $this->nmgp_cmp_hidden['ret_direccion_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_direccion_cliente" value="<?php echo $this->form_encode_input($ret_direccion_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ret_direccion_cliente_label" id="hidden_field_label_ret_direccion_cliente" style="<?php echo $sStyleHidden_ret_direccion_cliente; ?>"><span id="id_label_ret_direccion_cliente"><?php echo $this->nm_new_label['ret_direccion_cliente']; ?></span></TD>
    <TD class="scFormDataOdd css_ret_direccion_cliente_line" id="hidden_field_data_ret_direccion_cliente" style="<?php echo $sStyleHidden_ret_direccion_cliente; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_direccion_cliente_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_direccion_cliente"]) &&  $this->nmgp_cmp_readonly["ret_direccion_cliente"] == "on") { 

 ?>
<input type="hidden" name="ret_direccion_cliente" value="<?php echo $this->form_encode_input($ret_direccion_cliente) . "\">" . $ret_direccion_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_direccion_cliente" class="sc-ui-readonly-ret_direccion_cliente css_ret_direccion_cliente_line" style="<?php echo $sStyleReadLab_ret_direccion_cliente; ?>"><?php echo $this->form_format_readonly("ret_direccion_cliente", $this->form_encode_input($this->ret_direccion_cliente)); ?></span><span id="id_read_off_ret_direccion_cliente" class="css_read_off_ret_direccion_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_direccion_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_direccion_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_direccion_cliente" type=text name="ret_direccion_cliente" value="<?php echo $this->form_encode_input($ret_direccion_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_direccion_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_direccion_cliente_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ret_email_cliente']))
    {
        $this->nm_new_label['ret_email_cliente'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_email_cliente = $this->ret_email_cliente;
   $sStyleHidden_ret_email_cliente = '';
   if (isset($this->nmgp_cmp_hidden['ret_email_cliente']) && $this->nmgp_cmp_hidden['ret_email_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_email_cliente']);
       $sStyleHidden_ret_email_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_email_cliente = 'display: none;';
   $sStyleReadInp_ret_email_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_email_cliente']) && $this->nmgp_cmp_readonly['ret_email_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_email_cliente']);
       $sStyleReadLab_ret_email_cliente = '';
       $sStyleReadInp_ret_email_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_email_cliente']) && $this->nmgp_cmp_hidden['ret_email_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_email_cliente" value="<?php echo $this->form_encode_input($ret_email_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ret_email_cliente_label" id="hidden_field_label_ret_email_cliente" style="<?php echo $sStyleHidden_ret_email_cliente; ?>"><span id="id_label_ret_email_cliente"><?php echo $this->nm_new_label['ret_email_cliente']; ?></span></TD>
    <TD class="scFormDataOdd css_ret_email_cliente_line" id="hidden_field_data_ret_email_cliente" style="<?php echo $sStyleHidden_ret_email_cliente; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_email_cliente_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_email_cliente"]) &&  $this->nmgp_cmp_readonly["ret_email_cliente"] == "on") { 

 ?>
<input type="hidden" name="ret_email_cliente" value="<?php echo $this->form_encode_input($ret_email_cliente) . "\">" . $ret_email_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_email_cliente" class="sc-ui-readonly-ret_email_cliente css_ret_email_cliente_line" style="<?php echo $sStyleReadLab_ret_email_cliente; ?>"><?php echo $this->form_format_readonly("ret_email_cliente", $this->form_encode_input($this->ret_email_cliente)); ?></span><span id="id_read_off_ret_email_cliente" class="css_read_off_ret_email_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_email_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_email_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_email_cliente" type=text name="ret_email_cliente" value="<?php echo $this->form_encode_input($ret_email_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_email_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_email_cliente_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ret_mes_periodo_fiscal']))
   {
       $this->nm_new_label['ret_mes_periodo_fiscal'] = "" . $this->Ini->Nm_lang['lang_mes_fiscal'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_mes_periodo_fiscal = $this->ret_mes_periodo_fiscal;
   $sStyleHidden_ret_mes_periodo_fiscal = '';
   if (isset($this->nmgp_cmp_hidden['ret_mes_periodo_fiscal']) && $this->nmgp_cmp_hidden['ret_mes_periodo_fiscal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_mes_periodo_fiscal']);
       $sStyleHidden_ret_mes_periodo_fiscal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_mes_periodo_fiscal = 'display: none;';
   $sStyleReadInp_ret_mes_periodo_fiscal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_mes_periodo_fiscal']) && $this->nmgp_cmp_readonly['ret_mes_periodo_fiscal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_mes_periodo_fiscal']);
       $sStyleReadLab_ret_mes_periodo_fiscal = '';
       $sStyleReadInp_ret_mes_periodo_fiscal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_mes_periodo_fiscal']) && $this->nmgp_cmp_hidden['ret_mes_periodo_fiscal'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ret_mes_periodo_fiscal" value="<?php echo $this->form_encode_input($this->ret_mes_periodo_fiscal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ret_mes_periodo_fiscal_label" id="hidden_field_label_ret_mes_periodo_fiscal" style="<?php echo $sStyleHidden_ret_mes_periodo_fiscal; ?>"><span id="id_label_ret_mes_periodo_fiscal"><?php echo $this->nm_new_label['ret_mes_periodo_fiscal']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_mes_periodo_fiscal']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_mes_periodo_fiscal'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_ret_mes_periodo_fiscal_line" id="hidden_field_data_ret_mes_periodo_fiscal" style="<?php echo $sStyleHidden_ret_mes_periodo_fiscal; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_mes_periodo_fiscal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_mes_periodo_fiscal"]) &&  $this->nmgp_cmp_readonly["ret_mes_periodo_fiscal"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_mes_periodo_fiscal']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_mes_periodo_fiscal'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_mes_periodo_fiscal']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_mes_periodo_fiscal'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_mes_periodo_fiscal']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_mes_periodo_fiscal'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_mes_periodo_fiscal']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_mes_periodo_fiscal'] = array(); 
    }

   $old_value_ret_fecha = $this->ret_fecha;
   $old_value_ret_establecimiento = $this->ret_establecimiento;
   $old_value_ret_punto_emision = $this->ret_punto_emision;
   $old_value_ret_secuencial = $this->ret_secuencial;
   $old_value_ret_ambiente = $this->ret_ambiente;
   $old_value_ret_cliente = $this->ret_cliente;
   $old_value_ret_anio_periodo_fiscal = $this->ret_anio_periodo_fiscal;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_ret_fecha = $this->ret_fecha;
   $unformatted_value_ret_establecimiento = $this->ret_establecimiento;
   $unformatted_value_ret_punto_emision = $this->ret_punto_emision;
   $unformatted_value_ret_secuencial = $this->ret_secuencial;
   $unformatted_value_ret_ambiente = $this->ret_ambiente;
   $unformatted_value_ret_cliente = $this->ret_cliente;
   $unformatted_value_ret_anio_periodo_fiscal = $this->ret_anio_periodo_fiscal;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_meses ORDER BY dec_id";

   $this->ret_fecha = $old_value_ret_fecha;
   $this->ret_establecimiento = $old_value_ret_establecimiento;
   $this->ret_punto_emision = $old_value_ret_punto_emision;
   $this->ret_secuencial = $old_value_ret_secuencial;
   $this->ret_ambiente = $old_value_ret_ambiente;
   $this->ret_cliente = $old_value_ret_cliente;
   $this->ret_anio_periodo_fiscal = $old_value_ret_anio_periodo_fiscal;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lookup_ret_mes_periodo_fiscal'][] = $rs->fields[0];
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
   $ret_mes_periodo_fiscal_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ret_mes_periodo_fiscal_1))
          {
              foreach ($this->ret_mes_periodo_fiscal_1 as $tmp_ret_mes_periodo_fiscal)
              {
                  if (trim($tmp_ret_mes_periodo_fiscal) === trim($cadaselect[1])) {$ret_mes_periodo_fiscal_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ret_mes_periodo_fiscal) && trim($this->ret_mes_periodo_fiscal) === trim($cadaselect[1])) {$ret_mes_periodo_fiscal_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ret_mes_periodo_fiscal" value="<?php echo $this->form_encode_input($ret_mes_periodo_fiscal) . "\">" . $ret_mes_periodo_fiscal_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ret_mes_periodo_fiscal();
   $x = 0 ; 
   $ret_mes_periodo_fiscal_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ret_mes_periodo_fiscal_1))
          {
              foreach ($this->ret_mes_periodo_fiscal_1 as $tmp_ret_mes_periodo_fiscal)
              {
                  if (trim($tmp_ret_mes_periodo_fiscal) === trim($cadaselect[1])) {$ret_mes_periodo_fiscal_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ret_mes_periodo_fiscal) && trim($this->ret_mes_periodo_fiscal) === trim($cadaselect[1])) { $ret_mes_periodo_fiscal_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ret_mes_periodo_fiscal_look))
          {
              $ret_mes_periodo_fiscal_look = $this->ret_mes_periodo_fiscal;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ret_mes_periodo_fiscal\" class=\"css_ret_mes_periodo_fiscal_line\" style=\"" .  $sStyleReadLab_ret_mes_periodo_fiscal . "\">" . $this->form_format_readonly("ret_mes_periodo_fiscal", $this->form_encode_input($ret_mes_periodo_fiscal_look)) . "</span><span id=\"id_read_off_ret_mes_periodo_fiscal\" class=\"css_read_off_ret_mes_periodo_fiscal" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ret_mes_periodo_fiscal . "\">";
   echo " <span id=\"idAjaxSelect_ret_mes_periodo_fiscal\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ret_mes_periodo_fiscal_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ret_mes_periodo_fiscal\" name=\"ret_mes_periodo_fiscal\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ret_mes_periodo_fiscal) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ret_mes_periodo_fiscal)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_mes_periodo_fiscal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_mes_periodo_fiscal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ret_anio_periodo_fiscal']))
    {
        $this->nm_new_label['ret_anio_periodo_fiscal'] = "" . $this->Ini->Nm_lang['lang_anio_fiscal'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_anio_periodo_fiscal = $this->ret_anio_periodo_fiscal;
   $sStyleHidden_ret_anio_periodo_fiscal = '';
   if (isset($this->nmgp_cmp_hidden['ret_anio_periodo_fiscal']) && $this->nmgp_cmp_hidden['ret_anio_periodo_fiscal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_anio_periodo_fiscal']);
       $sStyleHidden_ret_anio_periodo_fiscal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_anio_periodo_fiscal = 'display: none;';
   $sStyleReadInp_ret_anio_periodo_fiscal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_anio_periodo_fiscal']) && $this->nmgp_cmp_readonly['ret_anio_periodo_fiscal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_anio_periodo_fiscal']);
       $sStyleReadLab_ret_anio_periodo_fiscal = '';
       $sStyleReadInp_ret_anio_periodo_fiscal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_anio_periodo_fiscal']) && $this->nmgp_cmp_hidden['ret_anio_periodo_fiscal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_anio_periodo_fiscal" value="<?php echo $this->form_encode_input($ret_anio_periodo_fiscal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ret_anio_periodo_fiscal_label" id="hidden_field_label_ret_anio_periodo_fiscal" style="<?php echo $sStyleHidden_ret_anio_periodo_fiscal; ?>"><span id="id_label_ret_anio_periodo_fiscal"><?php echo $this->nm_new_label['ret_anio_periodo_fiscal']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_anio_periodo_fiscal']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['php_cmp_required']['ret_anio_periodo_fiscal'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_ret_anio_periodo_fiscal_line" id="hidden_field_data_ret_anio_periodo_fiscal" style="<?php echo $sStyleHidden_ret_anio_periodo_fiscal; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_anio_periodo_fiscal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_anio_periodo_fiscal"]) &&  $this->nmgp_cmp_readonly["ret_anio_periodo_fiscal"] == "on") { 

 ?>
<input type="hidden" name="ret_anio_periodo_fiscal" value="<?php echo $this->form_encode_input($ret_anio_periodo_fiscal) . "\">" . $ret_anio_periodo_fiscal . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_anio_periodo_fiscal" class="sc-ui-readonly-ret_anio_periodo_fiscal css_ret_anio_periodo_fiscal_line" style="<?php echo $sStyleReadLab_ret_anio_periodo_fiscal; ?>"><?php echo $this->form_format_readonly("ret_anio_periodo_fiscal", $this->form_encode_input($this->ret_anio_periodo_fiscal)); ?></span><span id="id_read_off_ret_anio_periodo_fiscal" class="css_read_off_ret_anio_periodo_fiscal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_anio_periodo_fiscal; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_anio_periodo_fiscal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_anio_periodo_fiscal" type=text name="ret_anio_periodo_fiscal" value="<?php echo $this->form_encode_input($ret_anio_periodo_fiscal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=4"; } ?> maxlength=4 alt="{datatype: 'integer', maxLength: 4, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['ret_anio_periodo_fiscal']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ret_anio_periodo_fiscal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_anio_periodo_fiscal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_anio_periodo_fiscal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="2" >&nbsp;</TD>
<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ret_comentario']))
    {
        $this->nm_new_label['ret_comentario'] = "" . $this->Ini->Nm_lang['lang_comentario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_comentario = $this->ret_comentario;
   $sStyleHidden_ret_comentario = '';
   if (isset($this->nmgp_cmp_hidden['ret_comentario']) && $this->nmgp_cmp_hidden['ret_comentario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_comentario']);
       $sStyleHidden_ret_comentario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_comentario = 'display: none;';
   $sStyleReadInp_ret_comentario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_comentario']) && $this->nmgp_cmp_readonly['ret_comentario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_comentario']);
       $sStyleReadLab_ret_comentario = '';
       $sStyleReadInp_ret_comentario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_comentario']) && $this->nmgp_cmp_hidden['ret_comentario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_comentario" value="<?php echo $this->form_encode_input($ret_comentario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ret_comentario_label" id="hidden_field_label_ret_comentario" style="<?php echo $sStyleHidden_ret_comentario; ?>"><span id="id_label_ret_comentario"><?php echo $this->nm_new_label['ret_comentario']; ?></span></TD>
    <TD class="scFormDataOdd css_ret_comentario_line" id="hidden_field_data_ret_comentario" style="<?php echo $sStyleHidden_ret_comentario; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_comentario_line" style="vertical-align: top;padding: 0px">
<?php
$ret_comentario_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($ret_comentario));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_comentario"]) &&  $this->nmgp_cmp_readonly["ret_comentario"] == "on") { 

 ?>
<input type="hidden" name="ret_comentario" value="<?php echo $this->form_encode_input($ret_comentario) . "\">" . $ret_comentario_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_comentario" class="sc-ui-readonly-ret_comentario css_ret_comentario_line" style="<?php echo $sStyleReadLab_ret_comentario; ?>"><?php echo $this->form_format_readonly("ret_comentario", $this->form_encode_input($ret_comentario_val)); ?></span><span id="id_read_off_ret_comentario" class="css_read_off_ret_comentario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_comentario; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_ret_comentario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;" name="ret_comentario" id="id_sc_field_ret_comentario" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $ret_comentario; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_comentario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_comentario_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_detalle'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['detalle']))
    {
        $this->nm_new_label['detalle'] = "detalle";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $detalle = $this->detalle;
   $sStyleHidden_detalle = '';
   if (isset($this->nmgp_cmp_hidden['detalle']) && $this->nmgp_cmp_hidden['detalle'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['detalle']);
       $sStyleHidden_detalle = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_detalle = 'display: none;';
   $sStyleReadInp_detalle = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['detalle']) && $this->nmgp_cmp_readonly['detalle'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['detalle']);
       $sStyleReadLab_detalle = '';
       $sStyleReadInp_detalle = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['detalle']) && $this->nmgp_cmp_hidden['detalle'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="detalle" value="<?php echo $this->form_encode_input($detalle) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_detalle_line" id="hidden_field_data_detalle" style="<?php echo $sStyleHidden_detalle; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_detalle_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalle'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalle'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['grid_del_detalle_retencion_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalle'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['grid_del_detalle_retencion_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['grid_del_detalle_retencion_script_case_init'] ]['grid_del_detalle_retencion']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['grid_del_detalle_retencion_script_case_init'] ]['grid_del_detalle_retencion']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['grid_del_detalle_retencion_script_case_init'] ]['grid_del_detalle_retencion']['embutida_pai']        = "form_del_retencion";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['grid_del_detalle_retencion_script_case_init'] ]['grid_del_detalle_retencion']['embutida_form_parms'] = "var_retencion*scin" . $this->nmgp_dados_form['ret_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scout";
 if (isset($this->Ini->sc_lig_md5["grid_del_detalle_retencion"]) && $this->Ini->sc_lig_md5["grid_del_detalle_retencion"] == "S") {
     $Parms_Lig  = "var_retencion*scin" . $this->nmgp_dados_form['ret_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_retencion@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_retencion*scin" . $this->nmgp_dados_form['ret_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_retencion_empty.htm' : $this->Ini->link_grid_del_detalle_retencion_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
if (isset($this->Ini->sc_lig_target['C_@scinf_detalle']) && 'nmsc_iframe_liga_grid_del_detalle_retencion' != $this->Ini->sc_lig_target['C_@scinf_detalle'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_detalle'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['grid_del_detalle_retencion_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_detalle'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_del_detalle_retencion"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_del_detalle_retencion"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_detalle_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_detalle_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ret_error_sri']))
    {
        $this->nm_new_label['ret_error_sri'] = "" . $this->Ini->Nm_lang['lang_mensaje'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ret_error_sri = $this->ret_error_sri;
   if (!isset($this->nmgp_cmp_hidden['ret_error_sri']))
   {
       $this->nmgp_cmp_hidden['ret_error_sri'] = 'off';
   }
   $sStyleHidden_ret_error_sri = '';
   if (isset($this->nmgp_cmp_hidden['ret_error_sri']) && $this->nmgp_cmp_hidden['ret_error_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ret_error_sri']);
       $sStyleHidden_ret_error_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ret_error_sri = 'display: none;';
   $sStyleReadInp_ret_error_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ret_error_sri']) && $this->nmgp_cmp_readonly['ret_error_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ret_error_sri']);
       $sStyleReadLab_ret_error_sri = '';
       $sStyleReadInp_ret_error_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ret_error_sri']) && $this->nmgp_cmp_hidden['ret_error_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ret_error_sri" value="<?php echo $this->form_encode_input($ret_error_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ret_error_sri_line" id="hidden_field_data_ret_error_sri" style="<?php echo $sStyleHidden_ret_error_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ret_error_sri_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ret_error_sri"]) &&  $this->nmgp_cmp_readonly["ret_error_sri"] == "on") { 

 ?>
<input type="hidden" name="ret_error_sri" value="<?php echo $this->form_encode_input($ret_error_sri) . "\">" . $ret_error_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_ret_error_sri" class="sc-ui-readonly-ret_error_sri css_ret_error_sri_line" style="<?php echo $sStyleReadLab_ret_error_sri; ?>"><?php echo $this->form_format_readonly("ret_error_sri", $this->form_encode_input($this->ret_error_sri)); ?></span><span id="id_read_off_ret_error_sri" class="css_read_off_ret_error_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ret_error_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_ret_error_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ret_error_sri" type=text name="ret_error_sri" value="<?php echo $this->form_encode_input($ret_error_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=300"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ret_error_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ret_error_sri_text"></span></td></tr></table></td></tr></table> </TD>
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
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-10';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_3";
        echo "<img id=\"NM_sep_3\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['run_iframe'] != "R")
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

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_retencion");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_retencion");
 parent.scAjaxDetailHeight("form_del_retencion", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_retencion", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_retencion", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['sc_modal'])
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
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_b").length && $("#sc_b_hlp_b").is(":visible")) {
		    if ($("#sc_b_hlp_b").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-1").length && $("#sc_b_sai_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-2").length && $("#sc_b_sai_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-7").length && $("#sc_b_sai_b.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-8").length && $("#sc_b_sai_b.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-9").length && $("#sc_b_sai_b.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-4").length && $("#sys_separator.sc-unique-btn-4").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-6").length && $("#sys_separator.sc-unique-btn-6").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-10").length && $("#sys_separator.sc-unique-btn-10").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
	}
	function scBtnFn_Nuevo() {
		if ($("#sc_Nuevo_top").length && $("#sc_Nuevo_top").is(":visible")) {
		    if ($("#sc_Nuevo_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-5").length && $("#sc_b_upd_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_Anular() {
		if ($("#sc_Anular_top").length && $("#sc_Anular_top").is(":visible")) {
		    if ($("#sc_Anular_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			 return;
		}
	}
	function scBtnFn_enviar() {
		if ($("#sc_enviar_top").length && $("#sc_enviar_top").is(":visible")) {
		    if ($("#sc_enviar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			 return;
		}
	}
	function scBtnFn_ride() {
		if ($("#sc_ride_top").length && $("#sc_ride_top").is(":visible")) {
		    if ($("#sc_ride_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_ride()
			 return;
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
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_retencion']['buttonStatus'] = $this->nmgp_botoes;
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
