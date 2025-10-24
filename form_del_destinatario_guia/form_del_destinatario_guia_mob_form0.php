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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_destinatario_guia"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_destinatario_guia"); } ?></TITLE>
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
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_dg_fecha_sustento button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_destinatario_guia/form_del_destinatario_guia_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_destinatario_guia_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['last'] : 'off'); ?>";
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

 function recargar_marco() {
  document.getElementById('nmsc_iframe_liga_form_del_detalle_guia_destinatario').contentDocument.location.reload(true);
 } // recargar_marco

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
     if (F_name == "tipo_sustento")
     {
        $('input[name="tipo_sustento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tipo_sustento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tipo_sustento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "serie_sustento")
     {
        $('input[name="serie_sustento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="serie_sustento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="serie_sustento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "secuencial_sustento")
     {
        $('input[name="secuencial_sustento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="secuencial_sustento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="secuencial_sustento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "autorizacion_sustento")
     {
        $('input[name="autorizacion_sustento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="autorizacion_sustento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="autorizacion_sustento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fecha_sustento")
     {
        $('input[name="fecha_sustento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fecha_sustento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fecha_sustento"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_del_destinatario_guia_mob_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_del_destinatario_guia']['error_buffer']) && '' != $_SESSION['scriptcase']['form_del_destinatario_guia']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_del_destinatario_guia']['error_buffer'];
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
 include_once("form_del_destinatario_guia_mob_js0.php");
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
               action="form_del_destinatario_guia_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_del_destinatario_guia_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_destinatario_guia_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_4";
        echo "<img id=\"NM_sep_4\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['update'];
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
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Delete)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label'][''];
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
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['dg_id']))
   {
       $this->nmgp_cmp_hidden['dg_id'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dg_guia']))
   {
       $this->nmgp_cmp_hidden['dg_guia'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dg_empresa']))
   {
       $this->nmgp_cmp_hidden['dg_empresa'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dg_coddoc_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_coddoc_sustento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dg_serie_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_serie_sustento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dg_secuencial_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_secuencial_sustento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dg_autorizacion_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_autorizacion_sustento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dg_fecha_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_fecha_sustento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dg_tipo']))
   {
       $this->nmgp_cmp_hidden['dg_tipo'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_factura'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_iddoc_sustento']))
    {
        $this->nm_new_label['dg_iddoc_sustento'] = "" . $this->Ini->Nm_lang['lang_documento_sustento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_iddoc_sustento = $this->dg_iddoc_sustento;
   $sStyleHidden_dg_iddoc_sustento = '';
   if (isset($this->nmgp_cmp_hidden['dg_iddoc_sustento']) && $this->nmgp_cmp_hidden['dg_iddoc_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_iddoc_sustento']);
       $sStyleHidden_dg_iddoc_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_iddoc_sustento = 'display: none;';
   $sStyleReadInp_dg_iddoc_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_iddoc_sustento']) && $this->nmgp_cmp_readonly['dg_iddoc_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_iddoc_sustento']);
       $sStyleReadLab_dg_iddoc_sustento = '';
       $sStyleReadInp_dg_iddoc_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_iddoc_sustento']) && $this->nmgp_cmp_hidden['dg_iddoc_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_iddoc_sustento" value="<?php echo $this->form_encode_input($dg_iddoc_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_iddoc_sustento_line" id="hidden_field_data_dg_iddoc_sustento" style="<?php echo $sStyleHidden_dg_iddoc_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_iddoc_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_iddoc_sustento_label" style=""><span id="id_label_dg_iddoc_sustento"><?php echo $this->nm_new_label['dg_iddoc_sustento']; ?></span></span><br><input type="hidden" name="dg_iddoc_sustento" value="<?php echo $this->form_encode_input($dg_iddoc_sustento); ?>"><span id="id_ajax_label_dg_iddoc_sustento"><?php echo nl2br($dg_iddoc_sustento); ?></span>
<?php
   $Sc_iframe_master = ($this->Embutida_call) ? 'nmgp_iframe_ret*scinnmsc_iframe_liga_form_del_destinatario_guia_mob*scout' : '';
   if (isset($this->Ini->sc_lig_md5["buscar_factura"]) && $this->Ini->sc_lig_md5["buscar_factura"] == "S") {
       $Parms_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,dg_iddoc_sustento,fac_numero*scoutnm_evt_ret_busca*scinsc_form_del_destinatario_guia_dg_iddoc_sustento_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_destinatario_guia_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,dg_iddoc_sustento,fac_numero*scoutnm_evt_ret_busca*scinsc_form_del_destinatario_guia_dg_iddoc_sustento_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
   }
?>

<?php if (!$this->Ini->Export_img_zip) { ?><?php echo nmButtonOutput($this->arr_buttons, "bform_captura", "nm_submit_cap('" . $this->Ini->link_buscar_factura_cons_psq. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_buscar_factura_cons_psq. "', '" . $Md5_Lig . "')", "cap_dg_iddoc_sustento", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_iddoc_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_iddoc_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipo_sustento']))
    {
        $this->nm_new_label['tipo_sustento'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipo_sustento = $this->tipo_sustento;
   $sStyleHidden_tipo_sustento = '';
   if (isset($this->nmgp_cmp_hidden['tipo_sustento']) && $this->nmgp_cmp_hidden['tipo_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipo_sustento']);
       $sStyleHidden_tipo_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipo_sustento = 'display: none;';
   $sStyleReadInp_tipo_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipo_sustento']) && $this->nmgp_cmp_readonly['tipo_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipo_sustento']);
       $sStyleReadLab_tipo_sustento = '';
       $sStyleReadInp_tipo_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipo_sustento']) && $this->nmgp_cmp_hidden['tipo_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipo_sustento" value="<?php echo $this->form_encode_input($tipo_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipo_sustento_line" id="hidden_field_data_tipo_sustento" style="<?php echo $sStyleHidden_tipo_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipo_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tipo_sustento_label" style=""><span id="id_label_tipo_sustento"><?php echo $this->nm_new_label['tipo_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipo_sustento"]) &&  $this->nmgp_cmp_readonly["tipo_sustento"] == "on") { 

 ?>
<input type="hidden" name="tipo_sustento" value="<?php echo $this->form_encode_input($tipo_sustento) . "\">" . $tipo_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipo_sustento" class="sc-ui-readonly-tipo_sustento css_tipo_sustento_line" style="<?php echo $sStyleReadLab_tipo_sustento; ?>"><?php echo $this->form_format_readonly("tipo_sustento", $this->form_encode_input($this->tipo_sustento)); ?></span><span id="id_read_off_tipo_sustento" class="css_read_off_tipo_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_tipo_sustento; ?>">
 <input class="sc-js-input scFormObjectOdd css_tipo_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_tipo_sustento" type=text name="tipo_sustento" value="<?php echo $this->form_encode_input($tipo_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['serie_sustento']))
    {
        $this->nm_new_label['serie_sustento'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $serie_sustento = $this->serie_sustento;
   $sStyleHidden_serie_sustento = '';
   if (isset($this->nmgp_cmp_hidden['serie_sustento']) && $this->nmgp_cmp_hidden['serie_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['serie_sustento']);
       $sStyleHidden_serie_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_serie_sustento = 'display: none;';
   $sStyleReadInp_serie_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['serie_sustento']) && $this->nmgp_cmp_readonly['serie_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['serie_sustento']);
       $sStyleReadLab_serie_sustento = '';
       $sStyleReadInp_serie_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['serie_sustento']) && $this->nmgp_cmp_hidden['serie_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="serie_sustento" value="<?php echo $this->form_encode_input($serie_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_serie_sustento_line" id="hidden_field_data_serie_sustento" style="<?php echo $sStyleHidden_serie_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_serie_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_serie_sustento_label" style=""><span id="id_label_serie_sustento"><?php echo $this->nm_new_label['serie_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["serie_sustento"]) &&  $this->nmgp_cmp_readonly["serie_sustento"] == "on") { 

 ?>
<input type="hidden" name="serie_sustento" value="<?php echo $this->form_encode_input($serie_sustento) . "\">" . $serie_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_serie_sustento" class="sc-ui-readonly-serie_sustento css_serie_sustento_line" style="<?php echo $sStyleReadLab_serie_sustento; ?>"><?php echo $this->form_format_readonly("serie_sustento", $this->form_encode_input($this->serie_sustento)); ?></span><span id="id_read_off_serie_sustento" class="css_read_off_serie_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_serie_sustento; ?>">
 <input class="sc-js-input scFormObjectOdd css_serie_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_serie_sustento" type=text name="serie_sustento" value="<?php echo $this->form_encode_input($serie_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_serie_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_serie_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['secuencial_sustento']))
    {
        $this->nm_new_label['secuencial_sustento'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $secuencial_sustento = $this->secuencial_sustento;
   $sStyleHidden_secuencial_sustento = '';
   if (isset($this->nmgp_cmp_hidden['secuencial_sustento']) && $this->nmgp_cmp_hidden['secuencial_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['secuencial_sustento']);
       $sStyleHidden_secuencial_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_secuencial_sustento = 'display: none;';
   $sStyleReadInp_secuencial_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['secuencial_sustento']) && $this->nmgp_cmp_readonly['secuencial_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['secuencial_sustento']);
       $sStyleReadLab_secuencial_sustento = '';
       $sStyleReadInp_secuencial_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['secuencial_sustento']) && $this->nmgp_cmp_hidden['secuencial_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="secuencial_sustento" value="<?php echo $this->form_encode_input($secuencial_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_secuencial_sustento_line" id="hidden_field_data_secuencial_sustento" style="<?php echo $sStyleHidden_secuencial_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_secuencial_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_secuencial_sustento_label" style=""><span id="id_label_secuencial_sustento"><?php echo $this->nm_new_label['secuencial_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["secuencial_sustento"]) &&  $this->nmgp_cmp_readonly["secuencial_sustento"] == "on") { 

 ?>
<input type="hidden" name="secuencial_sustento" value="<?php echo $this->form_encode_input($secuencial_sustento) . "\">" . $secuencial_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_secuencial_sustento" class="sc-ui-readonly-secuencial_sustento css_secuencial_sustento_line" style="<?php echo $sStyleReadLab_secuencial_sustento; ?>"><?php echo $this->form_format_readonly("secuencial_sustento", $this->form_encode_input($this->secuencial_sustento)); ?></span><span id="id_read_off_secuencial_sustento" class="css_read_off_secuencial_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_secuencial_sustento; ?>">
 <input class="sc-js-input scFormObjectOdd css_secuencial_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_secuencial_sustento" type=text name="secuencial_sustento" value="<?php echo $this->form_encode_input($secuencial_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_secuencial_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_secuencial_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['autorizacion_sustento']))
    {
        $this->nm_new_label['autorizacion_sustento'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $autorizacion_sustento = $this->autorizacion_sustento;
   $sStyleHidden_autorizacion_sustento = '';
   if (isset($this->nmgp_cmp_hidden['autorizacion_sustento']) && $this->nmgp_cmp_hidden['autorizacion_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['autorizacion_sustento']);
       $sStyleHidden_autorizacion_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_autorizacion_sustento = 'display: none;';
   $sStyleReadInp_autorizacion_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['autorizacion_sustento']) && $this->nmgp_cmp_readonly['autorizacion_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['autorizacion_sustento']);
       $sStyleReadLab_autorizacion_sustento = '';
       $sStyleReadInp_autorizacion_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['autorizacion_sustento']) && $this->nmgp_cmp_hidden['autorizacion_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="autorizacion_sustento" value="<?php echo $this->form_encode_input($autorizacion_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_autorizacion_sustento_line" id="hidden_field_data_autorizacion_sustento" style="<?php echo $sStyleHidden_autorizacion_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_autorizacion_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_autorizacion_sustento_label" style=""><span id="id_label_autorizacion_sustento"><?php echo $this->nm_new_label['autorizacion_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["autorizacion_sustento"]) &&  $this->nmgp_cmp_readonly["autorizacion_sustento"] == "on") { 

 ?>
<input type="hidden" name="autorizacion_sustento" value="<?php echo $this->form_encode_input($autorizacion_sustento) . "\">" . $autorizacion_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_autorizacion_sustento" class="sc-ui-readonly-autorizacion_sustento css_autorizacion_sustento_line" style="<?php echo $sStyleReadLab_autorizacion_sustento; ?>"><?php echo $this->form_format_readonly("autorizacion_sustento", $this->form_encode_input($this->autorizacion_sustento)); ?></span><span id="id_read_off_autorizacion_sustento" class="css_read_off_autorizacion_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_autorizacion_sustento; ?>">
 <input class="sc-js-input scFormObjectOdd css_autorizacion_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_autorizacion_sustento" type=text name="autorizacion_sustento" value="<?php echo $this->form_encode_input($autorizacion_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_autorizacion_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_autorizacion_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fecha_sustento']))
    {
        $this->nm_new_label['fecha_sustento'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fecha_sustento = $this->fecha_sustento;
   $sStyleHidden_fecha_sustento = '';
   if (isset($this->nmgp_cmp_hidden['fecha_sustento']) && $this->nmgp_cmp_hidden['fecha_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fecha_sustento']);
       $sStyleHidden_fecha_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fecha_sustento = 'display: none;';
   $sStyleReadInp_fecha_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fecha_sustento']) && $this->nmgp_cmp_readonly['fecha_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fecha_sustento']);
       $sStyleReadLab_fecha_sustento = '';
       $sStyleReadInp_fecha_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fecha_sustento']) && $this->nmgp_cmp_hidden['fecha_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fecha_sustento" value="<?php echo $this->form_encode_input($fecha_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fecha_sustento_line" id="hidden_field_data_fecha_sustento" style="<?php echo $sStyleHidden_fecha_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fecha_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fecha_sustento_label" style=""><span id="id_label_fecha_sustento"><?php echo $this->nm_new_label['fecha_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fecha_sustento"]) &&  $this->nmgp_cmp_readonly["fecha_sustento"] == "on") { 

 ?>
<input type="hidden" name="fecha_sustento" value="<?php echo $this->form_encode_input($fecha_sustento) . "\">" . $fecha_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_fecha_sustento" class="sc-ui-readonly-fecha_sustento css_fecha_sustento_line" style="<?php echo $sStyleReadLab_fecha_sustento; ?>"><?php echo $this->form_format_readonly("fecha_sustento", $this->form_encode_input($fecha_sustento)); ?></span><span id="id_read_off_fecha_sustento" class="css_read_off_fecha_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fecha_sustento; ?>"><?php
$tmp_form_data = $this->field_config['fecha_sustento']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>

 <input class="sc-js-input scFormObjectOdd css_fecha_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fecha_sustento" type=text name="fecha_sustento" value="<?php echo $this->form_encode_input($fecha_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fecha_sustento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fecha_sustento']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fecha_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fecha_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_coddoc_sustento']))
    {
        $this->nm_new_label['dg_coddoc_sustento'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_coddoc_sustento = $this->dg_coddoc_sustento;
   if (!isset($this->nmgp_cmp_hidden['dg_coddoc_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_coddoc_sustento'] = 'off';
   }
   $sStyleHidden_dg_coddoc_sustento = '';
   if (isset($this->nmgp_cmp_hidden['dg_coddoc_sustento']) && $this->nmgp_cmp_hidden['dg_coddoc_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_coddoc_sustento']);
       $sStyleHidden_dg_coddoc_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_coddoc_sustento = 'display: none;';
   $sStyleReadInp_dg_coddoc_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_coddoc_sustento']) && $this->nmgp_cmp_readonly['dg_coddoc_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_coddoc_sustento']);
       $sStyleReadLab_dg_coddoc_sustento = '';
       $sStyleReadInp_dg_coddoc_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_coddoc_sustento']) && $this->nmgp_cmp_hidden['dg_coddoc_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_coddoc_sustento" value="<?php echo $this->form_encode_input($dg_coddoc_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_coddoc_sustento_line" id="hidden_field_data_dg_coddoc_sustento" style="<?php echo $sStyleHidden_dg_coddoc_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_coddoc_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_coddoc_sustento_label" style=""><span id="id_label_dg_coddoc_sustento"><?php echo $this->nm_new_label['dg_coddoc_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_coddoc_sustento"]) &&  $this->nmgp_cmp_readonly["dg_coddoc_sustento"] == "on") { 

 ?>
<input type="hidden" name="dg_coddoc_sustento" value="<?php echo $this->form_encode_input($dg_coddoc_sustento) . "\">" . $dg_coddoc_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_coddoc_sustento" class="sc-ui-readonly-dg_coddoc_sustento css_dg_coddoc_sustento_line" style="<?php echo $sStyleReadLab_dg_coddoc_sustento; ?>"><?php echo $this->form_format_readonly("dg_coddoc_sustento", $this->form_encode_input($this->dg_coddoc_sustento)); ?></span><span id="id_read_off_dg_coddoc_sustento" class="css_read_off_dg_coddoc_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_coddoc_sustento; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_coddoc_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_coddoc_sustento" type=text name="dg_coddoc_sustento" value="<?php echo $this->form_encode_input($dg_coddoc_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=2"; } ?> maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_coddoc_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_coddoc_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_serie_sustento']))
    {
        $this->nm_new_label['dg_serie_sustento'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_serie_sustento = $this->dg_serie_sustento;
   if (!isset($this->nmgp_cmp_hidden['dg_serie_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_serie_sustento'] = 'off';
   }
   $sStyleHidden_dg_serie_sustento = '';
   if (isset($this->nmgp_cmp_hidden['dg_serie_sustento']) && $this->nmgp_cmp_hidden['dg_serie_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_serie_sustento']);
       $sStyleHidden_dg_serie_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_serie_sustento = 'display: none;';
   $sStyleReadInp_dg_serie_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_serie_sustento']) && $this->nmgp_cmp_readonly['dg_serie_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_serie_sustento']);
       $sStyleReadLab_dg_serie_sustento = '';
       $sStyleReadInp_dg_serie_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_serie_sustento']) && $this->nmgp_cmp_hidden['dg_serie_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_serie_sustento" value="<?php echo $this->form_encode_input($dg_serie_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_serie_sustento_line" id="hidden_field_data_dg_serie_sustento" style="<?php echo $sStyleHidden_dg_serie_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_serie_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_serie_sustento_label" style=""><span id="id_label_dg_serie_sustento"><?php echo $this->nm_new_label['dg_serie_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_serie_sustento"]) &&  $this->nmgp_cmp_readonly["dg_serie_sustento"] == "on") { 

 ?>
<input type="hidden" name="dg_serie_sustento" value="<?php echo $this->form_encode_input($dg_serie_sustento) . "\">" . $dg_serie_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_serie_sustento" class="sc-ui-readonly-dg_serie_sustento css_dg_serie_sustento_line" style="<?php echo $sStyleReadLab_dg_serie_sustento; ?>"><?php echo $this->form_format_readonly("dg_serie_sustento", $this->form_encode_input($this->dg_serie_sustento)); ?></span><span id="id_read_off_dg_serie_sustento" class="css_read_off_dg_serie_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_serie_sustento; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_serie_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_serie_sustento" type=text name="dg_serie_sustento" value="<?php echo $this->form_encode_input($dg_serie_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=7"; } ?> maxlength=7 alt="{datatype: 'text', maxLength: 7, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_serie_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_serie_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_secuencial_sustento']))
    {
        $this->nm_new_label['dg_secuencial_sustento'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_secuencial_sustento = $this->dg_secuencial_sustento;
   if (!isset($this->nmgp_cmp_hidden['dg_secuencial_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_secuencial_sustento'] = 'off';
   }
   $sStyleHidden_dg_secuencial_sustento = '';
   if (isset($this->nmgp_cmp_hidden['dg_secuencial_sustento']) && $this->nmgp_cmp_hidden['dg_secuencial_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_secuencial_sustento']);
       $sStyleHidden_dg_secuencial_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_secuencial_sustento = 'display: none;';
   $sStyleReadInp_dg_secuencial_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_secuencial_sustento']) && $this->nmgp_cmp_readonly['dg_secuencial_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_secuencial_sustento']);
       $sStyleReadLab_dg_secuencial_sustento = '';
       $sStyleReadInp_dg_secuencial_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_secuencial_sustento']) && $this->nmgp_cmp_hidden['dg_secuencial_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_secuencial_sustento" value="<?php echo $this->form_encode_input($dg_secuencial_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_secuencial_sustento_line" id="hidden_field_data_dg_secuencial_sustento" style="<?php echo $sStyleHidden_dg_secuencial_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_secuencial_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_secuencial_sustento_label" style=""><span id="id_label_dg_secuencial_sustento"><?php echo $this->nm_new_label['dg_secuencial_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_secuencial_sustento"]) &&  $this->nmgp_cmp_readonly["dg_secuencial_sustento"] == "on") { 

 ?>
<input type="hidden" name="dg_secuencial_sustento" value="<?php echo $this->form_encode_input($dg_secuencial_sustento) . "\">" . $dg_secuencial_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_secuencial_sustento" class="sc-ui-readonly-dg_secuencial_sustento css_dg_secuencial_sustento_line" style="<?php echo $sStyleReadLab_dg_secuencial_sustento; ?>"><?php echo $this->form_format_readonly("dg_secuencial_sustento", $this->form_encode_input($this->dg_secuencial_sustento)); ?></span><span id="id_read_off_dg_secuencial_sustento" class="css_read_off_dg_secuencial_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_secuencial_sustento; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_secuencial_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_secuencial_sustento" type=text name="dg_secuencial_sustento" value="<?php echo $this->form_encode_input($dg_secuencial_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'text', maxLength: 9, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_secuencial_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_secuencial_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_autorizacion_sustento']))
    {
        $this->nm_new_label['dg_autorizacion_sustento'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_autorizacion_sustento = $this->dg_autorizacion_sustento;
   if (!isset($this->nmgp_cmp_hidden['dg_autorizacion_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_autorizacion_sustento'] = 'off';
   }
   $sStyleHidden_dg_autorizacion_sustento = '';
   if (isset($this->nmgp_cmp_hidden['dg_autorizacion_sustento']) && $this->nmgp_cmp_hidden['dg_autorizacion_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_autorizacion_sustento']);
       $sStyleHidden_dg_autorizacion_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_autorizacion_sustento = 'display: none;';
   $sStyleReadInp_dg_autorizacion_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_autorizacion_sustento']) && $this->nmgp_cmp_readonly['dg_autorizacion_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_autorizacion_sustento']);
       $sStyleReadLab_dg_autorizacion_sustento = '';
       $sStyleReadInp_dg_autorizacion_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_autorizacion_sustento']) && $this->nmgp_cmp_hidden['dg_autorizacion_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_autorizacion_sustento" value="<?php echo $this->form_encode_input($dg_autorizacion_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_autorizacion_sustento_line" id="hidden_field_data_dg_autorizacion_sustento" style="<?php echo $sStyleHidden_dg_autorizacion_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_autorizacion_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_autorizacion_sustento_label" style=""><span id="id_label_dg_autorizacion_sustento"><?php echo $this->nm_new_label['dg_autorizacion_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_autorizacion_sustento"]) &&  $this->nmgp_cmp_readonly["dg_autorizacion_sustento"] == "on") { 

 ?>
<input type="hidden" name="dg_autorizacion_sustento" value="<?php echo $this->form_encode_input($dg_autorizacion_sustento) . "\">" . $dg_autorizacion_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_autorizacion_sustento" class="sc-ui-readonly-dg_autorizacion_sustento css_dg_autorizacion_sustento_line" style="<?php echo $sStyleReadLab_dg_autorizacion_sustento; ?>"><?php echo $this->form_format_readonly("dg_autorizacion_sustento", $this->form_encode_input($this->dg_autorizacion_sustento)); ?></span><span id="id_read_off_dg_autorizacion_sustento" class="css_read_off_dg_autorizacion_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_autorizacion_sustento; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_autorizacion_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_autorizacion_sustento" type=text name="dg_autorizacion_sustento" value="<?php echo $this->form_encode_input($dg_autorizacion_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=49"; } ?> maxlength=49 alt="{datatype: 'text', maxLength: 49, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_autorizacion_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_autorizacion_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_fecha_sustento']))
    {
        $this->nm_new_label['dg_fecha_sustento'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_fecha_sustento = $this->dg_fecha_sustento;
   if (!isset($this->nmgp_cmp_hidden['dg_fecha_sustento']))
   {
       $this->nmgp_cmp_hidden['dg_fecha_sustento'] = 'off';
   }
   $sStyleHidden_dg_fecha_sustento = '';
   if (isset($this->nmgp_cmp_hidden['dg_fecha_sustento']) && $this->nmgp_cmp_hidden['dg_fecha_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_fecha_sustento']);
       $sStyleHidden_dg_fecha_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_fecha_sustento = 'display: none;';
   $sStyleReadInp_dg_fecha_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_fecha_sustento']) && $this->nmgp_cmp_readonly['dg_fecha_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_fecha_sustento']);
       $sStyleReadLab_dg_fecha_sustento = '';
       $sStyleReadInp_dg_fecha_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_fecha_sustento']) && $this->nmgp_cmp_hidden['dg_fecha_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_fecha_sustento" value="<?php echo $this->form_encode_input($dg_fecha_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_fecha_sustento_line" id="hidden_field_data_dg_fecha_sustento" style="<?php echo $sStyleHidden_dg_fecha_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_fecha_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_fecha_sustento_label" style=""><span id="id_label_dg_fecha_sustento"><?php echo $this->nm_new_label['dg_fecha_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_fecha_sustento"]) &&  $this->nmgp_cmp_readonly["dg_fecha_sustento"] == "on") { 

 ?>
<input type="hidden" name="dg_fecha_sustento" value="<?php echo $this->form_encode_input($dg_fecha_sustento) . "\">" . $dg_fecha_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_fecha_sustento" class="sc-ui-readonly-dg_fecha_sustento css_dg_fecha_sustento_line" style="<?php echo $sStyleReadLab_dg_fecha_sustento; ?>"><?php echo $this->form_format_readonly("dg_fecha_sustento", $this->form_encode_input($dg_fecha_sustento)); ?></span><span id="id_read_off_dg_fecha_sustento" class="css_read_off_dg_fecha_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_fecha_sustento; ?>"><?php
$tmp_form_data = $this->field_config['dg_fecha_sustento']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_dg_fecha_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_fecha_sustento" type=text name="dg_fecha_sustento" value="<?php echo $this->form_encode_input($dg_fecha_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['dg_fecha_sustento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dg_fecha_sustento']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_fecha_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_fecha_sustento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_dg_fecha_sustento_dumb = ('' == $sStyleHidden_dg_fecha_sustento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_dg_fecha_sustento_dumb" style="<?php echo $sStyleHidden_dg_fecha_sustento_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_establecimiento'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['dg_establecimiento_destino']))
   {
       $this->nm_new_label['dg_establecimiento_destino'] = "" . $this->Ini->Nm_lang['lang_establecimiento_destino'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_establecimiento_destino = $this->dg_establecimiento_destino;
   $sStyleHidden_dg_establecimiento_destino = '';
   if (isset($this->nmgp_cmp_hidden['dg_establecimiento_destino']) && $this->nmgp_cmp_hidden['dg_establecimiento_destino'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_establecimiento_destino']);
       $sStyleHidden_dg_establecimiento_destino = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_establecimiento_destino = 'display: none;';
   $sStyleReadInp_dg_establecimiento_destino = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_establecimiento_destino']) && $this->nmgp_cmp_readonly['dg_establecimiento_destino'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_establecimiento_destino']);
       $sStyleReadLab_dg_establecimiento_destino = '';
       $sStyleReadInp_dg_establecimiento_destino = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_establecimiento_destino']) && $this->nmgp_cmp_hidden['dg_establecimiento_destino'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="dg_establecimiento_destino" value="<?php echo $this->form_encode_input($this->dg_establecimiento_destino) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_establecimiento_destino_line" id="hidden_field_data_dg_establecimiento_destino" style="<?php echo $sStyleHidden_dg_establecimiento_destino; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_establecimiento_destino_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_establecimiento_destino_label" style=""><span id="id_label_dg_establecimiento_destino"><?php echo $this->nm_new_label['dg_establecimiento_destino']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_establecimiento_destino"]) &&  $this->nmgp_cmp_readonly["dg_establecimiento_destino"] == "on") { 
 
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
   $x = 0; 
   $dg_establecimiento_destino_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->dg_establecimiento_destino_1))
          {
              foreach ($this->dg_establecimiento_destino_1 as $tmp_dg_establecimiento_destino)
              {
                  if (trim($tmp_dg_establecimiento_destino) === trim($cadaselect[1])) {$dg_establecimiento_destino_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->dg_establecimiento_destino) && trim($this->dg_establecimiento_destino) === trim($cadaselect[1])) {$dg_establecimiento_destino_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="dg_establecimiento_destino" value="<?php echo $this->form_encode_input($dg_establecimiento_destino) . "\">" . $dg_establecimiento_destino_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_dg_establecimiento_destino();
   $x = 0 ; 
   $dg_establecimiento_destino_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->dg_establecimiento_destino_1))
          {
              foreach ($this->dg_establecimiento_destino_1 as $tmp_dg_establecimiento_destino)
              {
                  if (trim($tmp_dg_establecimiento_destino) === trim($cadaselect[1])) {$dg_establecimiento_destino_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->dg_establecimiento_destino) && trim($this->dg_establecimiento_destino) === trim($cadaselect[1])) { $dg_establecimiento_destino_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($dg_establecimiento_destino_look))
          {
              $dg_establecimiento_destino_look = $this->dg_establecimiento_destino;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_dg_establecimiento_destino\" class=\"css_dg_establecimiento_destino_line\" style=\"" .  $sStyleReadLab_dg_establecimiento_destino . "\">" . $this->form_format_readonly("dg_establecimiento_destino", $this->form_encode_input($dg_establecimiento_destino_look)) . "</span><span id=\"id_read_off_dg_establecimiento_destino\" class=\"css_read_off_dg_establecimiento_destino" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_dg_establecimiento_destino . "\">";
   echo " <span id=\"idAjaxSelect_dg_establecimiento_destino\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_dg_establecimiento_destino_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_dg_establecimiento_destino\" name=\"dg_establecimiento_destino\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['Lookup_dg_establecimiento_destino'][] = '0'; 
   echo "  <option value=\"0\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->dg_establecimiento_destino) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->dg_establecimiento_destino)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_establecimiento_destino_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_establecimiento_destino_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_tipo']))
    {
        $this->nm_new_label['dg_tipo'] = "Dg Tipo";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_tipo = $this->dg_tipo;
   if (!isset($this->nmgp_cmp_hidden['dg_tipo']))
   {
       $this->nmgp_cmp_hidden['dg_tipo'] = 'off';
   }
   $sStyleHidden_dg_tipo = '';
   if (isset($this->nmgp_cmp_hidden['dg_tipo']) && $this->nmgp_cmp_hidden['dg_tipo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_tipo']);
       $sStyleHidden_dg_tipo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_tipo = 'display: none;';
   $sStyleReadInp_dg_tipo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_tipo']) && $this->nmgp_cmp_readonly['dg_tipo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_tipo']);
       $sStyleReadLab_dg_tipo = '';
       $sStyleReadInp_dg_tipo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_tipo']) && $this->nmgp_cmp_hidden['dg_tipo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_tipo" value="<?php echo $this->form_encode_input($dg_tipo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_tipo_line" id="hidden_field_data_dg_tipo" style="<?php echo $sStyleHidden_dg_tipo; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_tipo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_tipo_label" style=""><span id="id_label_dg_tipo"><?php echo $this->nm_new_label['dg_tipo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_tipo"]) &&  $this->nmgp_cmp_readonly["dg_tipo"] == "on") { 

 ?>
<input type="hidden" name="dg_tipo" value="<?php echo $this->form_encode_input($dg_tipo) . "\">" . $dg_tipo . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_tipo" class="sc-ui-readonly-dg_tipo css_dg_tipo_line" style="<?php echo $sStyleReadLab_dg_tipo; ?>"><?php echo $this->form_format_readonly("dg_tipo", $this->form_encode_input($this->dg_tipo)); ?></span><span id="id_read_off_dg_tipo" class="css_read_off_dg_tipo<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_tipo; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_tipo_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_tipo" type=text name="dg_tipo" value="<?php echo $this->form_encode_input($dg_tipo) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_tipo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_tipo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_dg_tipo_dumb = ('' == $sStyleHidden_dg_tipo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_dg_tipo_dumb" style="<?php echo $sStyleHidden_dg_tipo_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_destinatario'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_nombre_destinatario']))
    {
        $this->nm_new_label['dg_nombre_destinatario'] = "" . $this->Ini->Nm_lang['lang_destinatario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_nombre_destinatario = $this->dg_nombre_destinatario;
   $sStyleHidden_dg_nombre_destinatario = '';
   if (isset($this->nmgp_cmp_hidden['dg_nombre_destinatario']) && $this->nmgp_cmp_hidden['dg_nombre_destinatario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_nombre_destinatario']);
       $sStyleHidden_dg_nombre_destinatario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_nombre_destinatario = 'display: none;';
   $sStyleReadInp_dg_nombre_destinatario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_nombre_destinatario']) && $this->nmgp_cmp_readonly['dg_nombre_destinatario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_nombre_destinatario']);
       $sStyleReadLab_dg_nombre_destinatario = '';
       $sStyleReadInp_dg_nombre_destinatario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_nombre_destinatario']) && $this->nmgp_cmp_hidden['dg_nombre_destinatario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_nombre_destinatario" value="<?php echo $this->form_encode_input($dg_nombre_destinatario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_nombre_destinatario_line" id="hidden_field_data_dg_nombre_destinatario" style="<?php echo $sStyleHidden_dg_nombre_destinatario; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_nombre_destinatario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_nombre_destinatario_label" style=""><span id="id_label_dg_nombre_destinatario"><?php echo $this->nm_new_label['dg_nombre_destinatario']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_nombre_destinatario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_nombre_destinatario'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_nombre_destinatario"]) &&  $this->nmgp_cmp_readonly["dg_nombre_destinatario"] == "on") { 

 ?>
<input type="hidden" name="dg_nombre_destinatario" value="<?php echo $this->form_encode_input($dg_nombre_destinatario) . "\">" . $dg_nombre_destinatario . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_nombre_destinatario" class="sc-ui-readonly-dg_nombre_destinatario css_dg_nombre_destinatario_line" style="<?php echo $sStyleReadLab_dg_nombre_destinatario; ?>"><?php echo $this->form_format_readonly("dg_nombre_destinatario", $this->form_encode_input($this->dg_nombre_destinatario)); ?></span><span id="id_read_off_dg_nombre_destinatario" class="css_read_off_dg_nombre_destinatario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_nombre_destinatario; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_nombre_destinatario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_nombre_destinatario" type=text name="dg_nombre_destinatario" value="<?php echo $this->form_encode_input($dg_nombre_destinatario) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_nombre_destinatario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_nombre_destinatario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_identificacion_destinatario']))
    {
        $this->nm_new_label['dg_identificacion_destinatario'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_identificacion_destinatario = $this->dg_identificacion_destinatario;
   $sStyleHidden_dg_identificacion_destinatario = '';
   if (isset($this->nmgp_cmp_hidden['dg_identificacion_destinatario']) && $this->nmgp_cmp_hidden['dg_identificacion_destinatario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_identificacion_destinatario']);
       $sStyleHidden_dg_identificacion_destinatario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_identificacion_destinatario = 'display: none;';
   $sStyleReadInp_dg_identificacion_destinatario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_identificacion_destinatario']) && $this->nmgp_cmp_readonly['dg_identificacion_destinatario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_identificacion_destinatario']);
       $sStyleReadLab_dg_identificacion_destinatario = '';
       $sStyleReadInp_dg_identificacion_destinatario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_identificacion_destinatario']) && $this->nmgp_cmp_hidden['dg_identificacion_destinatario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_identificacion_destinatario" value="<?php echo $this->form_encode_input($dg_identificacion_destinatario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_identificacion_destinatario_line" id="hidden_field_data_dg_identificacion_destinatario" style="<?php echo $sStyleHidden_dg_identificacion_destinatario; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_identificacion_destinatario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_identificacion_destinatario_label" style=""><span id="id_label_dg_identificacion_destinatario"><?php echo $this->nm_new_label['dg_identificacion_destinatario']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_identificacion_destinatario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_identificacion_destinatario'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_identificacion_destinatario"]) &&  $this->nmgp_cmp_readonly["dg_identificacion_destinatario"] == "on") { 

 ?>
<input type="hidden" name="dg_identificacion_destinatario" value="<?php echo $this->form_encode_input($dg_identificacion_destinatario) . "\">" . $dg_identificacion_destinatario . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_identificacion_destinatario" class="sc-ui-readonly-dg_identificacion_destinatario css_dg_identificacion_destinatario_line" style="<?php echo $sStyleReadLab_dg_identificacion_destinatario; ?>"><?php echo $this->form_format_readonly("dg_identificacion_destinatario", $this->form_encode_input($this->dg_identificacion_destinatario)); ?></span><span id="id_read_off_dg_identificacion_destinatario" class="css_read_off_dg_identificacion_destinatario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_identificacion_destinatario; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_identificacion_destinatario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_identificacion_destinatario" type=text name="dg_identificacion_destinatario" value="<?php echo $this->form_encode_input($dg_identificacion_destinatario) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_identificacion_destinatario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_identificacion_destinatario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_direccion_destino']))
    {
        $this->nm_new_label['dg_direccion_destino'] = "" . $this->Ini->Nm_lang['lang_direccion_destino'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_direccion_destino = $this->dg_direccion_destino;
   $sStyleHidden_dg_direccion_destino = '';
   if (isset($this->nmgp_cmp_hidden['dg_direccion_destino']) && $this->nmgp_cmp_hidden['dg_direccion_destino'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_direccion_destino']);
       $sStyleHidden_dg_direccion_destino = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_direccion_destino = 'display: none;';
   $sStyleReadInp_dg_direccion_destino = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_direccion_destino']) && $this->nmgp_cmp_readonly['dg_direccion_destino'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_direccion_destino']);
       $sStyleReadLab_dg_direccion_destino = '';
       $sStyleReadInp_dg_direccion_destino = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_direccion_destino']) && $this->nmgp_cmp_hidden['dg_direccion_destino'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_direccion_destino" value="<?php echo $this->form_encode_input($dg_direccion_destino) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_direccion_destino_line" id="hidden_field_data_dg_direccion_destino" style="<?php echo $sStyleHidden_dg_direccion_destino; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_direccion_destino_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_direccion_destino_label" style=""><span id="id_label_dg_direccion_destino"><?php echo $this->nm_new_label['dg_direccion_destino']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_direccion_destino']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_direccion_destino'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_direccion_destino"]) &&  $this->nmgp_cmp_readonly["dg_direccion_destino"] == "on") { 

 ?>
<input type="hidden" name="dg_direccion_destino" value="<?php echo $this->form_encode_input($dg_direccion_destino) . "\">" . $dg_direccion_destino . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_direccion_destino" class="sc-ui-readonly-dg_direccion_destino css_dg_direccion_destino_line" style="<?php echo $sStyleReadLab_dg_direccion_destino; ?>"><?php echo $this->form_format_readonly("dg_direccion_destino", $this->form_encode_input($this->dg_direccion_destino)); ?></span><span id="id_read_off_dg_direccion_destino" class="css_read_off_dg_direccion_destino<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_direccion_destino; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_direccion_destino_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_direccion_destino" type=text name="dg_direccion_destino" value="<?php echo $this->form_encode_input($dg_direccion_destino) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_direccion_destino_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_direccion_destino_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_documento_aduanero']))
    {
        $this->nm_new_label['dg_documento_aduanero'] = "" . $this->Ini->Nm_lang['lang_documento_aduanero'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_documento_aduanero = $this->dg_documento_aduanero;
   $sStyleHidden_dg_documento_aduanero = '';
   if (isset($this->nmgp_cmp_hidden['dg_documento_aduanero']) && $this->nmgp_cmp_hidden['dg_documento_aduanero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_documento_aduanero']);
       $sStyleHidden_dg_documento_aduanero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_documento_aduanero = 'display: none;';
   $sStyleReadInp_dg_documento_aduanero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_documento_aduanero']) && $this->nmgp_cmp_readonly['dg_documento_aduanero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_documento_aduanero']);
       $sStyleReadLab_dg_documento_aduanero = '';
       $sStyleReadInp_dg_documento_aduanero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_documento_aduanero']) && $this->nmgp_cmp_hidden['dg_documento_aduanero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_documento_aduanero" value="<?php echo $this->form_encode_input($dg_documento_aduanero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_documento_aduanero_line" id="hidden_field_data_dg_documento_aduanero" style="<?php echo $sStyleHidden_dg_documento_aduanero; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_documento_aduanero_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_documento_aduanero_label" style=""><span id="id_label_dg_documento_aduanero"><?php echo $this->nm_new_label['dg_documento_aduanero']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_documento_aduanero"]) &&  $this->nmgp_cmp_readonly["dg_documento_aduanero"] == "on") { 

 ?>
<input type="hidden" name="dg_documento_aduanero" value="<?php echo $this->form_encode_input($dg_documento_aduanero) . "\">" . $dg_documento_aduanero . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_documento_aduanero" class="sc-ui-readonly-dg_documento_aduanero css_dg_documento_aduanero_line" style="<?php echo $sStyleReadLab_dg_documento_aduanero; ?>"><?php echo $this->form_format_readonly("dg_documento_aduanero", $this->form_encode_input($this->dg_documento_aduanero)); ?></span><span id="id_read_off_dg_documento_aduanero" class="css_read_off_dg_documento_aduanero<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_documento_aduanero; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_documento_aduanero_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_documento_aduanero" type=text name="dg_documento_aduanero" value="<?php echo $this->form_encode_input($dg_documento_aduanero) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_documento_aduanero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_documento_aduanero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_motivo_traslado']))
    {
        $this->nm_new_label['dg_motivo_traslado'] = "" . $this->Ini->Nm_lang['lang_motivo'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_motivo_traslado = $this->dg_motivo_traslado;
   $sStyleHidden_dg_motivo_traslado = '';
   if (isset($this->nmgp_cmp_hidden['dg_motivo_traslado']) && $this->nmgp_cmp_hidden['dg_motivo_traslado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_motivo_traslado']);
       $sStyleHidden_dg_motivo_traslado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_motivo_traslado = 'display: none;';
   $sStyleReadInp_dg_motivo_traslado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_motivo_traslado']) && $this->nmgp_cmp_readonly['dg_motivo_traslado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_motivo_traslado']);
       $sStyleReadLab_dg_motivo_traslado = '';
       $sStyleReadInp_dg_motivo_traslado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_motivo_traslado']) && $this->nmgp_cmp_hidden['dg_motivo_traslado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_motivo_traslado" value="<?php echo $this->form_encode_input($dg_motivo_traslado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_motivo_traslado_line" id="hidden_field_data_dg_motivo_traslado" style="<?php echo $sStyleHidden_dg_motivo_traslado; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_motivo_traslado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_motivo_traslado_label" style=""><span id="id_label_dg_motivo_traslado"><?php echo $this->nm_new_label['dg_motivo_traslado']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_motivo_traslado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_motivo_traslado'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php
$dg_motivo_traslado_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($dg_motivo_traslado));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_motivo_traslado"]) &&  $this->nmgp_cmp_readonly["dg_motivo_traslado"] == "on") { 

 ?>
<input type="hidden" name="dg_motivo_traslado" value="<?php echo $this->form_encode_input($dg_motivo_traslado) . "\">" . $dg_motivo_traslado_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_motivo_traslado" class="sc-ui-readonly-dg_motivo_traslado css_dg_motivo_traslado_line" style="<?php echo $sStyleReadLab_dg_motivo_traslado; ?>"><?php echo $this->form_format_readonly("dg_motivo_traslado", $this->form_encode_input($dg_motivo_traslado_val)); ?></span><span id="id_read_off_dg_motivo_traslado" class="css_read_off_dg_motivo_traslado<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_motivo_traslado; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_dg_motivo_traslado_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;" name="dg_motivo_traslado" id="id_sc_field_dg_motivo_traslado" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $dg_motivo_traslado; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_motivo_traslado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_motivo_traslado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['dg_id']))
           {
               $this->nmgp_cmp_readonly['dg_id'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['dg_ruta']))
    {
        $this->nm_new_label['dg_ruta'] = "" . $this->Ini->Nm_lang['lang_ruta_transportista'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_ruta = $this->dg_ruta;
   $sStyleHidden_dg_ruta = '';
   if (isset($this->nmgp_cmp_hidden['dg_ruta']) && $this->nmgp_cmp_hidden['dg_ruta'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_ruta']);
       $sStyleHidden_dg_ruta = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_ruta = 'display: none;';
   $sStyleReadInp_dg_ruta = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_ruta']) && $this->nmgp_cmp_readonly['dg_ruta'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_ruta']);
       $sStyleReadLab_dg_ruta = '';
       $sStyleReadInp_dg_ruta = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_ruta']) && $this->nmgp_cmp_hidden['dg_ruta'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_ruta" value="<?php echo $this->form_encode_input($dg_ruta) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_ruta_line" id="hidden_field_data_dg_ruta" style="<?php echo $sStyleHidden_dg_ruta; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_ruta_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_ruta_label" style=""><span id="id_label_dg_ruta"><?php echo $this->nm_new_label['dg_ruta']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_ruta']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_ruta'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php
$dg_ruta_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($dg_ruta));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_ruta"]) &&  $this->nmgp_cmp_readonly["dg_ruta"] == "on") { 

 ?>
<input type="hidden" name="dg_ruta" value="<?php echo $this->form_encode_input($dg_ruta) . "\">" . $dg_ruta_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_ruta" class="sc-ui-readonly-dg_ruta css_dg_ruta_line" style="<?php echo $sStyleReadLab_dg_ruta; ?>"><?php echo $this->form_format_readonly("dg_ruta", $this->form_encode_input($dg_ruta_val)); ?></span><span id="id_read_off_dg_ruta" class="css_read_off_dg_ruta<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_ruta; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_dg_ruta_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;" name="dg_ruta" id="id_sc_field_dg_ruta" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $dg_ruta; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_ruta_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_ruta_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_id']))
    {
        $this->nm_new_label['dg_id'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_id = $this->dg_id;
   if (!isset($this->nmgp_cmp_hidden['dg_id']))
   {
       $this->nmgp_cmp_hidden['dg_id'] = 'off';
   }
   $sStyleHidden_dg_id = '';
   if (isset($this->nmgp_cmp_hidden['dg_id']) && $this->nmgp_cmp_hidden['dg_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_id']);
       $sStyleHidden_dg_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_id = 'display: none;';
   $sStyleReadInp_dg_id = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["dg_id"]) &&  $this->nmgp_cmp_readonly["dg_id"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_id']);
       $sStyleReadLab_dg_id = '';
       $sStyleReadInp_dg_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_id']) && $this->nmgp_cmp_hidden['dg_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_id" value="<?php echo $this->form_encode_input($dg_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_id_line" id="hidden_field_data_dg_id" style="<?php echo $sStyleHidden_dg_id; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_id_label" style=""><span id="id_label_dg_id"><?php echo $this->nm_new_label['dg_id']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_id']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['php_cmp_required']['dg_id'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["dg_id"]) &&  $this->nmgp_cmp_readonly["dg_id"] == "on")) { 

 ?>
<input type="hidden" name="dg_id" value="<?php echo $this->form_encode_input($dg_id) . "\"><span id=\"id_ajax_label_dg_id\">" . $dg_id . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_dg_id" class="sc-ui-readonly-dg_id css_dg_id_line" style="<?php echo $sStyleReadLab_dg_id; ?>"><?php echo $this->form_format_readonly("dg_id", $this->form_encode_input($this->dg_id)); ?></span><span id="id_read_off_dg_id" class="css_read_off_dg_id<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_id_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_id" type=text name="dg_id" value="<?php echo $this->form_encode_input($dg_id) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['dg_id']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['dg_id']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['dg_id']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_guia']))
    {
        $this->nm_new_label['dg_guia'] = "" . $this->Ini->Nm_lang['lang_guia_remision'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_guia = $this->dg_guia;
   if (!isset($this->nmgp_cmp_hidden['dg_guia']))
   {
       $this->nmgp_cmp_hidden['dg_guia'] = 'off';
   }
   $sStyleHidden_dg_guia = '';
   if (isset($this->nmgp_cmp_hidden['dg_guia']) && $this->nmgp_cmp_hidden['dg_guia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_guia']);
       $sStyleHidden_dg_guia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_guia = 'display: none;';
   $sStyleReadInp_dg_guia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_guia']) && $this->nmgp_cmp_readonly['dg_guia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_guia']);
       $sStyleReadLab_dg_guia = '';
       $sStyleReadInp_dg_guia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_guia']) && $this->nmgp_cmp_hidden['dg_guia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_guia" value="<?php echo $this->form_encode_input($dg_guia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_guia_line" id="hidden_field_data_dg_guia" style="<?php echo $sStyleHidden_dg_guia; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_guia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_guia_label" style=""><span id="id_label_dg_guia"><?php echo $this->nm_new_label['dg_guia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_guia"]) &&  $this->nmgp_cmp_readonly["dg_guia"] == "on") { 

 ?>
<input type="hidden" name="dg_guia" value="<?php echo $this->form_encode_input($dg_guia) . "\">" . $dg_guia . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_guia" class="sc-ui-readonly-dg_guia css_dg_guia_line" style="<?php echo $sStyleReadLab_dg_guia; ?>"><?php echo $this->form_format_readonly("dg_guia", $this->form_encode_input($this->dg_guia)); ?></span><span id="id_read_off_dg_guia" class="css_read_off_dg_guia<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_guia; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_guia_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_guia" type=text name="dg_guia" value="<?php echo $this->form_encode_input($dg_guia) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['dg_guia']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['dg_guia']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['dg_guia']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_guia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_guia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dg_empresa']))
    {
        $this->nm_new_label['dg_empresa'] = "" . $this->Ini->Nm_lang['lang_empresa'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $dg_empresa = $this->dg_empresa;
   if (!isset($this->nmgp_cmp_hidden['dg_empresa']))
   {
       $this->nmgp_cmp_hidden['dg_empresa'] = 'off';
   }
   $sStyleHidden_dg_empresa = '';
   if (isset($this->nmgp_cmp_hidden['dg_empresa']) && $this->nmgp_cmp_hidden['dg_empresa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dg_empresa']);
       $sStyleHidden_dg_empresa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dg_empresa = 'display: none;';
   $sStyleReadInp_dg_empresa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dg_empresa']) && $this->nmgp_cmp_readonly['dg_empresa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dg_empresa']);
       $sStyleReadLab_dg_empresa = '';
       $sStyleReadInp_dg_empresa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dg_empresa']) && $this->nmgp_cmp_hidden['dg_empresa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dg_empresa" value="<?php echo $this->form_encode_input($dg_empresa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dg_empresa_line" id="hidden_field_data_dg_empresa" style="<?php echo $sStyleHidden_dg_empresa; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dg_empresa_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dg_empresa_label" style=""><span id="id_label_dg_empresa"><?php echo $this->nm_new_label['dg_empresa']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dg_empresa"]) &&  $this->nmgp_cmp_readonly["dg_empresa"] == "on") { 

 ?>
<input type="hidden" name="dg_empresa" value="<?php echo $this->form_encode_input($dg_empresa) . "\">" . $dg_empresa . ""; ?>
<?php } else { ?>
<span id="id_read_on_dg_empresa" class="sc-ui-readonly-dg_empresa css_dg_empresa_line" style="<?php echo $sStyleReadLab_dg_empresa; ?>"><?php echo $this->form_format_readonly("dg_empresa", $this->form_encode_input($this->dg_empresa)); ?></span><span id="id_read_off_dg_empresa" class="css_read_off_dg_empresa<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dg_empresa; ?>">
 <input class="sc-js-input scFormObjectOdd css_dg_empresa_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dg_empresa" type=text name="dg_empresa" value="<?php echo $this->form_encode_input($dg_empresa) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dg_empresa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dg_empresa_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_dg_empresa_dumb = ('' == $sStyleHidden_dg_empresa) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_dg_empresa_dumb" style="<?php echo $sStyleHidden_dg_empresa_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_productos'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['productos']))
    {
        $this->nm_new_label['productos'] = "productos";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $productos = $this->productos;
   $sStyleHidden_productos = '';
   if (isset($this->nmgp_cmp_hidden['productos']) && $this->nmgp_cmp_hidden['productos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['productos']);
       $sStyleHidden_productos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_productos = 'display: none;';
   $sStyleReadInp_productos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['productos']) && $this->nmgp_cmp_readonly['productos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['productos']);
       $sStyleReadLab_productos = '';
       $sStyleReadInp_productos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['productos']) && $this->nmgp_cmp_hidden['productos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="productos" value="<?php echo $this->form_encode_input($productos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_productos_line" id="hidden_field_data_productos" style="<?php echo $sStyleHidden_productos; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_productos_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_productos'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_productos'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_productos'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['embutida_parms'] = "var_destinatario*scin" . $this->nmgp_dados_form['dg_id'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['foreign_key']['dgd_destinatario'] = $this->nmgp_dados_form['dg_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['where_filter'] = "dgd_destinatario = " . $this->nmgp_dados_form['dg_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['where_detal']  = "dgd_destinatario = " . $this->nmgp_dados_form['dg_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_destinatario_guia_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_destinatario_guia_mob_empty.htm' : $this->Ini->link_form_del_detalle_guia_destinatario_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=300';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init'] ]['form_del_detalle_guia_destinatario'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_productos']) && 'nmsc_iframe_liga_form_del_detalle_guia_destinatario_mob' != $this->Ini->sc_lig_target['C_@scinf_productos'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_productos'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['form_del_detalle_guia_destinatario_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_productos'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_del_detalle_guia_destinatario_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="300" width="100%" name="nmsc_iframe_liga_form_del_detalle_guia_destinatario_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_productos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_productos_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-21';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-22';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-23';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-24';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label'][''];
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
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-25';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-26';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Delete)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['run_iframe'] != "R")
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
  $nm_sc_blocos_da_pag = array(0,1,2,3);

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
  $nm_sc_blocos_da_pag = array(0,1,2,3);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['masterValue']))
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_destinatario_guia_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_destinatario_guia_mob");
 parent.scAjaxDetailHeight("form_del_destinatario_guia_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_destinatario_guia_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_destinatario_guia_mob", <?php echo $sTamanhoIframe; ?>);
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
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-1").length && $("#sc_b_sai_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-2").length && $("#sc_b_sai_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-8").length && $("#sc_b_sai_b.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-9").length && $("#sc_b_sai_b.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-10").length && $("#sc_b_sai_b.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-10").hasClass("disabled")) {
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
		if ($("#sc_b_sai_b.sc-unique-btn-21").length && $("#sc_b_sai_b.sc-unique-btn-21").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-21").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-22").length && $("#sc_b_sai_b.sc-unique-btn-22").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-22").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-23").length && $("#sc_b_sai_b.sc-unique-btn-23").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-23").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-4").length && $("#sys_separator.sc-unique-btn-4").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-7").length && $("#sys_separator.sc-unique-btn-7").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-11").length && $("#sys_separator.sc-unique-btn-11").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-17").length && $("#sys_separator.sc-unique-btn-17").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-20").length && $("#sys_separator.sc-unique-btn-20").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-20").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-24").length && $("#sys_separator.sc-unique-btn-24").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-24").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-5").length && $("#sc_b_upd_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_b.sc-unique-btn-12").length && $("#sc_b_upd_b.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-18").length && $("#sc_b_upd_t.sc-unique-btn-18").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_b.sc-unique-btn-25").length && $("#sc_b_upd_b.sc-unique-btn-25").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-25").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-6").length && $("#sc_b_del_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_del_b.sc-unique-btn-13").length && $("#sc_b_del_b.sc-unique-btn-13").is(":visible")) {
		    if ($("#sc_b_del_b.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_del_t.sc-unique-btn-19").length && $("#sc_b_del_t.sc-unique-btn-19").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-19").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_del_b.sc-unique-btn-26").length && $("#sc_b_del_b.sc-unique-btn-26").is(":visible")) {
		    if ($("#sc_b_del_b.sc-unique-btn-26").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_destinatario_guia_mob']['buttonStatus'] = $this->nmgp_botoes;
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
