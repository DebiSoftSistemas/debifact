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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_guia_remision"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_guia_remision"); } ?></TITLE>
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
.css_read_off_gr_fecha button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_gr_fecha_autorizacion button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_gr_fecha_ini_transporte button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_gr_fecha_fin_transporte button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_guia_remision/form_del_guia_remision_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_guia_remision_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['last'] : 'off'); ?>";
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
  document.getElementById('nmsc_iframe_liga_grid_del_destinatario_guia').contentDocument.location.reload(true);
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
     if (F_name == "establecimiento")
     {
        $('input[name="establecimiento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="establecimiento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="establecimiento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "punto_emision")
     {
        $('input[name="punto_emision"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="punto_emision"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="punto_emision"]').removeClass("scFormInputDisabled");
        }
     }
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
     if (F_name == "ruc_transportista")
     {
        $('input[name="ruc_transportista"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ruc_transportista"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ruc_transportista"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nombre_transportista")
     {
        $('input[name="nombre_transportista"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nombre_transportista"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nombre_transportista"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "placa_transportista")
     {
        $('input[name="placa_transportista"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="placa_transportista"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="placa_transportista"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_del_guia_remision_jquery.php');

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

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
     $(".scBtnGrpClick").mouseup(function(){
          event.preventDefault();
          if(event.target !== event.currentTarget) return;
          if($(this).find("a").prop('href') != '')
          {
              $(this).find("a").click();
          }
          else
          {
              eval($(this).find("a").prop('onclick'));
          }
  });
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
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['link_info']['remove_border']) {
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
 include_once("form_del_guia_remision_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_del_guia_remision'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_guia_remision'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['nuevo'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "nuevo", "scBtnFn_Nuevo()", "scBtnFn_Nuevo()", "sc_Nuevo_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "" . $this->Ini->Nm_lang['lang_destinatario'] . "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['group_group_1']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['group_group_1']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['group_group_1']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['group_group_1']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['group_group_1'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "group_group_1", "scBtnGrpShow('group_1_t')", "scBtnGrpShow('group_1_t')", "sc_btgp_btn_group_1_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "__sc_grp__");?>
 
<?php
echo nmButtonGroupTableOutput($this->arr_buttons, "group_group_1", 'group_1', 't', 'app', 'ini');
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['desde_factura'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['desde_factura']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['desde_factura']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['desde_factura']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['desde_factura']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['desde_factura'];
        }
?>
  <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_desde_factura_top">
<?php echo nmButtonOutput($this->arr_buttons, "desde_factura", "scBtnFn_desde_factura()", "scBtnFn_desde_factura()", "sc_desde_factura_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "group_1");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['entre_establecimiento'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['entre_establecimiento']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['entre_establecimiento']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['entre_establecimiento']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['entre_establecimiento']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['entre_establecimiento'];
        }
?>
  <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_entre_establecimiento_top">
<?php echo nmButtonOutput($this->arr_buttons, "entre_establecimiento", "scBtnFn_entre_establecimiento()", "scBtnFn_entre_establecimiento()", "sc_entre_establecimiento_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "group_1");?>
  </div>
 
<?php
        $NM_btn = true;
    }
echo nmButtonGroupTableOutput($this->arr_buttons, "", '', '', '', 'fim');
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Autorizar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['autorizar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['autorizar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['autorizar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['autorizar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['autorizar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "autorizar", "scBtnFn_Autorizar()", "scBtnFn_Autorizar()", "sc_Autorizar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Anular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['anular'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label'][''];
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
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "" . $this->Ini->Nm_lang['lang_imprimir'] . "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['group_group_2']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['group_group_2']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['group_group_2']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['group_group_2']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['group_group_2'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "__sc_grp__");?>
 
<?php
echo nmButtonGroupTableOutput($this->arr_buttons, "group_group_2", 'group_2', 't', 'app', 'ini');
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Imprimir'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['imprimir']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['imprimir']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['imprimir']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['imprimir']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['imprimir'];
        }
?>
  <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_Imprimir_top">
<?php echo nmButtonOutput($this->arr_buttons, "imprimir", "scBtnFn_Imprimir()", "scBtnFn_Imprimir()", "sc_Imprimir_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['baucher'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['baucher']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['baucher']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['baucher']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['baucher']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['baucher'];
        }
?>
  <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_baucher_top">
<?php echo nmButtonOutput($this->arr_buttons, "baucher", "scBtnFn_baucher()", "scBtnFn_baucher()", "sc_baucher_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
echo nmButtonGroupTableOutput($this->arr_buttons, "", '', '', '', 'fim');
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['gr_numero']))
   {
       $this->nmgp_cmp_hidden['gr_numero'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_tipo_comprobante']))
   {
       $this->nmgp_cmp_hidden['gr_tipo_comprobante'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_empresa']))
   {
       $this->nmgp_cmp_hidden['gr_empresa'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_establecimiento']))
   {
       $this->nmgp_cmp_hidden['gr_establecimiento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_punto_emision']))
   {
       $this->nmgp_cmp_hidden['gr_punto_emision'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_secuencial']))
   {
       $this->nmgp_cmp_hidden['gr_secuencial'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_fecha']))
   {
       $this->nmgp_cmp_hidden['gr_fecha'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_ambiente']))
   {
       $this->nmgp_cmp_hidden['gr_ambiente'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['gr_tipo_libretin'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_usuario']))
   {
       $this->nmgp_cmp_hidden['gr_usuario'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_estado']))
   {
       $this->nmgp_cmp_hidden['gr_estado'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_estado_sri']))
   {
       $this->nmgp_cmp_hidden['gr_estado_sri'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_error_sri']))
   {
       $this->nmgp_cmp_hidden['gr_error_sri'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_fecha_autorizacion']))
   {
       $this->nmgp_cmp_hidden['gr_fecha_autorizacion'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_autorizacion']))
   {
       $this->nmgp_cmp_hidden['gr_autorizacion'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['gr_clave']))
   {
       $this->nmgp_cmp_hidden['gr_clave'] = 'off';
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_guia'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['gr_libretin']))
   {
       $this->nm_new_label['gr_libretin'] = "" . $this->Ini->Nm_lang['lang_libretin'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_libretin = $this->gr_libretin;
   $sStyleHidden_gr_libretin = '';
   if (isset($this->nmgp_cmp_hidden['gr_libretin']) && $this->nmgp_cmp_hidden['gr_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_libretin']);
       $sStyleHidden_gr_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_libretin = 'display: none;';
   $sStyleReadInp_gr_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_libretin']) && $this->nmgp_cmp_readonly['gr_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_libretin']);
       $sStyleReadLab_gr_libretin = '';
       $sStyleReadInp_gr_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_libretin']) && $this->nmgp_cmp_hidden['gr_libretin'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="gr_libretin" value="<?php echo $this->form_encode_input($this->gr_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_libretin_line" id="hidden_field_data_gr_libretin" style="<?php echo $sStyleHidden_gr_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_libretin_label" style=""><span id="id_label_gr_libretin"><?php echo $this->nm_new_label['gr_libretin']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_libretin']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_libretin'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_libretin"]) &&  $this->nmgp_cmp_readonly["gr_libretin"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lookup_gr_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lookup_gr_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lookup_gr_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lookup_gr_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lookup_gr_libretin']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lookup_gr_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lookup_gr_libretin']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lookup_gr_libretin'] = array(); 
    }

   $old_value_gr_establecimiento = $this->gr_establecimiento;
   $old_value_gr_punto_emision = $this->gr_punto_emision;
   $old_value_gr_secuencial = $this->gr_secuencial;
   $old_value_gr_ambiente = $this->gr_ambiente;
   $old_value_gr_numero = $this->gr_numero;
   $old_value_gr_fecha = $this->gr_fecha;
   $old_value_gr_fecha_autorizacion = $this->gr_fecha_autorizacion;
   $old_value_gr_transportista = $this->gr_transportista;
   $old_value_gr_fecha_ini_transporte = $this->gr_fecha_ini_transporte;
   $old_value_gr_fecha_fin_transporte = $this->gr_fecha_fin_transporte;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_gr_establecimiento = $this->gr_establecimiento;
   $unformatted_value_gr_punto_emision = $this->gr_punto_emision;
   $unformatted_value_gr_secuencial = $this->gr_secuencial;
   $unformatted_value_gr_ambiente = $this->gr_ambiente;
   $unformatted_value_gr_numero = $this->gr_numero;
   $unformatted_value_gr_fecha = $this->gr_fecha;
   $unformatted_value_gr_fecha_autorizacion = $this->gr_fecha_autorizacion;
   $unformatted_value_gr_transportista = $this->gr_transportista;
   $unformatted_value_gr_fecha_ini_transporte = $this->gr_fecha_ini_transporte;
   $unformatted_value_gr_fecha_fin_transporte = $this->gr_fecha_fin_transporte;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='06'";

   $this->gr_establecimiento = $old_value_gr_establecimiento;
   $this->gr_punto_emision = $old_value_gr_punto_emision;
   $this->gr_secuencial = $old_value_gr_secuencial;
   $this->gr_ambiente = $old_value_gr_ambiente;
   $this->gr_numero = $old_value_gr_numero;
   $this->gr_fecha = $old_value_gr_fecha;
   $this->gr_fecha_autorizacion = $old_value_gr_fecha_autorizacion;
   $this->gr_transportista = $old_value_gr_transportista;
   $this->gr_fecha_ini_transporte = $old_value_gr_fecha_ini_transporte;
   $this->gr_fecha_fin_transporte = $old_value_gr_fecha_fin_transporte;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lookup_gr_libretin'][] = $rs->fields[0];
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
   $gr_libretin_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->gr_libretin_1))
          {
              foreach ($this->gr_libretin_1 as $tmp_gr_libretin)
              {
                  if (trim($tmp_gr_libretin) === trim($cadaselect[1])) {$gr_libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->gr_libretin) && trim($this->gr_libretin) === trim($cadaselect[1])) {$gr_libretin_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="gr_libretin" value="<?php echo $this->form_encode_input($gr_libretin) . "\">" . $gr_libretin_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_gr_libretin();
   $x = 0 ; 
   $gr_libretin_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->gr_libretin_1))
          {
              foreach ($this->gr_libretin_1 as $tmp_gr_libretin)
              {
                  if (trim($tmp_gr_libretin) === trim($cadaselect[1])) {$gr_libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->gr_libretin) && trim($this->gr_libretin) === trim($cadaselect[1])) { $gr_libretin_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($gr_libretin_look))
          {
              $gr_libretin_look = $this->gr_libretin;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_gr_libretin\" class=\"css_gr_libretin_line\" style=\"" .  $sStyleReadLab_gr_libretin . "\">" . $this->form_format_readonly("gr_libretin", $this->form_encode_input($gr_libretin_look)) . "</span><span id=\"id_read_off_gr_libretin\" class=\"css_read_off_gr_libretin" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_gr_libretin . "\">";
   echo " <span id=\"idAjaxSelect_gr_libretin\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_gr_libretin_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_gr_libretin\" name=\"gr_libretin\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->gr_libretin) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->gr_libretin)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['establecimiento']))
    {
        $this->nm_new_label['establecimiento'] = "" . $this->Ini->Nm_lang['lang_establecimiento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $establecimiento = $this->establecimiento;
   $sStyleHidden_establecimiento = '';
   if (isset($this->nmgp_cmp_hidden['establecimiento']) && $this->nmgp_cmp_hidden['establecimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['establecimiento']);
       $sStyleHidden_establecimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_establecimiento = 'display: none;';
   $sStyleReadInp_establecimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['establecimiento']) && $this->nmgp_cmp_readonly['establecimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['establecimiento']);
       $sStyleReadLab_establecimiento = '';
       $sStyleReadInp_establecimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['establecimiento']) && $this->nmgp_cmp_hidden['establecimiento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="establecimiento" value="<?php echo $this->form_encode_input($establecimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_establecimiento_line" id="hidden_field_data_establecimiento" style="<?php echo $sStyleHidden_establecimiento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_establecimiento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_establecimiento_label" style=""><span id="id_label_establecimiento"><?php echo $this->nm_new_label['establecimiento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["establecimiento"]) &&  $this->nmgp_cmp_readonly["establecimiento"] == "on") { 

 ?>
<input type="hidden" name="establecimiento" value="<?php echo $this->form_encode_input($establecimiento) . "\">" . $establecimiento . ""; ?>
<?php } else { ?>
<span id="id_read_on_establecimiento" class="sc-ui-readonly-establecimiento css_establecimiento_line" style="<?php echo $sStyleReadLab_establecimiento; ?>"><?php echo $this->form_format_readonly("establecimiento", $this->form_encode_input($this->establecimiento)); ?></span><span id="id_read_off_establecimiento" class="css_read_off_establecimiento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_establecimiento; ?>">
 <input class="sc-js-input scFormObjectOdd css_establecimiento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_establecimiento" type=text name="establecimiento" value="<?php echo $this->form_encode_input($establecimiento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_establecimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_establecimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['punto_emision']))
    {
        $this->nm_new_label['punto_emision'] = "" . $this->Ini->Nm_lang['lang_punto_emision'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $punto_emision = $this->punto_emision;
   $sStyleHidden_punto_emision = '';
   if (isset($this->nmgp_cmp_hidden['punto_emision']) && $this->nmgp_cmp_hidden['punto_emision'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['punto_emision']);
       $sStyleHidden_punto_emision = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_punto_emision = 'display: none;';
   $sStyleReadInp_punto_emision = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['punto_emision']) && $this->nmgp_cmp_readonly['punto_emision'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['punto_emision']);
       $sStyleReadLab_punto_emision = '';
       $sStyleReadInp_punto_emision = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['punto_emision']) && $this->nmgp_cmp_hidden['punto_emision'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="punto_emision" value="<?php echo $this->form_encode_input($punto_emision) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_punto_emision_line" id="hidden_field_data_punto_emision" style="<?php echo $sStyleHidden_punto_emision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_punto_emision_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_punto_emision_label" style=""><span id="id_label_punto_emision"><?php echo $this->nm_new_label['punto_emision']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["punto_emision"]) &&  $this->nmgp_cmp_readonly["punto_emision"] == "on") { 

 ?>
<input type="hidden" name="punto_emision" value="<?php echo $this->form_encode_input($punto_emision) . "\">" . $punto_emision . ""; ?>
<?php } else { ?>
<span id="id_read_on_punto_emision" class="sc-ui-readonly-punto_emision css_punto_emision_line" style="<?php echo $sStyleReadLab_punto_emision; ?>"><?php echo $this->form_format_readonly("punto_emision", $this->form_encode_input($this->punto_emision)); ?></span><span id="id_read_off_punto_emision" class="css_read_off_punto_emision<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_punto_emision; ?>">
 <input class="sc-js-input scFormObjectOdd css_punto_emision_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_punto_emision" type=text name="punto_emision" value="<?php echo $this->form_encode_input($punto_emision) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=3"; } ?> maxlength=3 alt="{datatype: 'text', maxLength: 3, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_punto_emision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_punto_emision_text"></span></td></tr></table></td></tr></table> </TD>
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





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_gr_libretin_dumb = ('' == $sStyleHidden_gr_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_libretin_dumb" style="<?php echo $sStyleHidden_gr_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_establecimiento_dumb = ('' == $sStyleHidden_establecimiento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_establecimiento_dumb" style="<?php echo $sStyleHidden_establecimiento_dumb; ?>"></TD>
<?php $sStyleHidden_punto_emision_dumb = ('' == $sStyleHidden_punto_emision) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_punto_emision_dumb" style="<?php echo $sStyleHidden_punto_emision_dumb; ?>"></TD>
<?php $sStyleHidden_secuencial_dumb = ('' == $sStyleHidden_secuencial) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_secuencial_dumb" style="<?php echo $sStyleHidden_secuencial_dumb; ?>"></TD>
<?php $sStyleHidden_tipo_libretin_dumb = ('' == $sStyleHidden_tipo_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tipo_libretin_dumb" style="<?php echo $sStyleHidden_tipo_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_ambiente_dumb = ('' == $sStyleHidden_ambiente) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ambiente_dumb" style="<?php echo $sStyleHidden_ambiente_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['gr_numero']))
           {
               $this->nmgp_cmp_readonly['gr_numero'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['gr_establecimiento']))
    {
        $this->nm_new_label['gr_establecimiento'] = "" . $this->Ini->Nm_lang['lang_establecimiento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_establecimiento = $this->gr_establecimiento;
   if (!isset($this->nmgp_cmp_hidden['gr_establecimiento']))
   {
       $this->nmgp_cmp_hidden['gr_establecimiento'] = 'off';
   }
   $sStyleHidden_gr_establecimiento = '';
   if (isset($this->nmgp_cmp_hidden['gr_establecimiento']) && $this->nmgp_cmp_hidden['gr_establecimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_establecimiento']);
       $sStyleHidden_gr_establecimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_establecimiento = 'display: none;';
   $sStyleReadInp_gr_establecimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_establecimiento']) && $this->nmgp_cmp_readonly['gr_establecimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_establecimiento']);
       $sStyleReadLab_gr_establecimiento = '';
       $sStyleReadInp_gr_establecimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_establecimiento']) && $this->nmgp_cmp_hidden['gr_establecimiento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_establecimiento" value="<?php echo $this->form_encode_input($gr_establecimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_establecimiento_line" id="hidden_field_data_gr_establecimiento" style="<?php echo $sStyleHidden_gr_establecimiento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_establecimiento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_establecimiento_label" style=""><span id="id_label_gr_establecimiento"><?php echo $this->nm_new_label['gr_establecimiento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_establecimiento"]) &&  $this->nmgp_cmp_readonly["gr_establecimiento"] == "on") { 

 ?>
<input type="hidden" name="gr_establecimiento" value="<?php echo $this->form_encode_input($gr_establecimiento) . "\">" . $gr_establecimiento . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_establecimiento" class="sc-ui-readonly-gr_establecimiento css_gr_establecimiento_line" style="<?php echo $sStyleReadLab_gr_establecimiento; ?>"><?php echo $this->form_format_readonly("gr_establecimiento", $this->form_encode_input($this->gr_establecimiento)); ?></span><span id="id_read_off_gr_establecimiento" class="css_read_off_gr_establecimiento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_establecimiento; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_establecimiento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_establecimiento" type=text name="gr_establecimiento" value="<?php echo $this->form_encode_input($gr_establecimiento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['gr_establecimiento']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['gr_establecimiento']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['gr_establecimiento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_establecimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_establecimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_punto_emision']))
    {
        $this->nm_new_label['gr_punto_emision'] = "" . $this->Ini->Nm_lang['lang_punto_emision'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_punto_emision = $this->gr_punto_emision;
   if (!isset($this->nmgp_cmp_hidden['gr_punto_emision']))
   {
       $this->nmgp_cmp_hidden['gr_punto_emision'] = 'off';
   }
   $sStyleHidden_gr_punto_emision = '';
   if (isset($this->nmgp_cmp_hidden['gr_punto_emision']) && $this->nmgp_cmp_hidden['gr_punto_emision'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_punto_emision']);
       $sStyleHidden_gr_punto_emision = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_punto_emision = 'display: none;';
   $sStyleReadInp_gr_punto_emision = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_punto_emision']) && $this->nmgp_cmp_readonly['gr_punto_emision'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_punto_emision']);
       $sStyleReadLab_gr_punto_emision = '';
       $sStyleReadInp_gr_punto_emision = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_punto_emision']) && $this->nmgp_cmp_hidden['gr_punto_emision'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_punto_emision" value="<?php echo $this->form_encode_input($gr_punto_emision) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_punto_emision_line" id="hidden_field_data_gr_punto_emision" style="<?php echo $sStyleHidden_gr_punto_emision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_punto_emision_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_punto_emision_label" style=""><span id="id_label_gr_punto_emision"><?php echo $this->nm_new_label['gr_punto_emision']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_punto_emision"]) &&  $this->nmgp_cmp_readonly["gr_punto_emision"] == "on") { 

 ?>
<input type="hidden" name="gr_punto_emision" value="<?php echo $this->form_encode_input($gr_punto_emision) . "\">" . $gr_punto_emision . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_punto_emision" class="sc-ui-readonly-gr_punto_emision css_gr_punto_emision_line" style="<?php echo $sStyleReadLab_gr_punto_emision; ?>"><?php echo $this->form_format_readonly("gr_punto_emision", $this->form_encode_input($this->gr_punto_emision)); ?></span><span id="id_read_off_gr_punto_emision" class="css_read_off_gr_punto_emision<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_punto_emision; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_punto_emision_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_punto_emision" type=text name="gr_punto_emision" value="<?php echo $this->form_encode_input($gr_punto_emision) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['gr_punto_emision']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['gr_punto_emision']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['gr_punto_emision']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_punto_emision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_punto_emision_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_secuencial']))
    {
        $this->nm_new_label['gr_secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_secuencial = $this->gr_secuencial;
   if (!isset($this->nmgp_cmp_hidden['gr_secuencial']))
   {
       $this->nmgp_cmp_hidden['gr_secuencial'] = 'off';
   }
   $sStyleHidden_gr_secuencial = '';
   if (isset($this->nmgp_cmp_hidden['gr_secuencial']) && $this->nmgp_cmp_hidden['gr_secuencial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_secuencial']);
       $sStyleHidden_gr_secuencial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_secuencial = 'display: none;';
   $sStyleReadInp_gr_secuencial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_secuencial']) && $this->nmgp_cmp_readonly['gr_secuencial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_secuencial']);
       $sStyleReadLab_gr_secuencial = '';
       $sStyleReadInp_gr_secuencial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_secuencial']) && $this->nmgp_cmp_hidden['gr_secuencial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_secuencial" value="<?php echo $this->form_encode_input($gr_secuencial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_secuencial_line" id="hidden_field_data_gr_secuencial" style="<?php echo $sStyleHidden_gr_secuencial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_secuencial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_secuencial_label" style=""><span id="id_label_gr_secuencial"><?php echo $this->nm_new_label['gr_secuencial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_secuencial"]) &&  $this->nmgp_cmp_readonly["gr_secuencial"] == "on") { 

 ?>
<input type="hidden" name="gr_secuencial" value="<?php echo $this->form_encode_input($gr_secuencial) . "\">" . $gr_secuencial . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_secuencial" class="sc-ui-readonly-gr_secuencial css_gr_secuencial_line" style="<?php echo $sStyleReadLab_gr_secuencial; ?>"><?php echo $this->form_format_readonly("gr_secuencial", $this->form_encode_input($this->gr_secuencial)); ?></span><span id="id_read_off_gr_secuencial" class="css_read_off_gr_secuencial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_secuencial; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_secuencial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_secuencial" type=text name="gr_secuencial" value="<?php echo $this->form_encode_input($gr_secuencial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['gr_secuencial']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['gr_secuencial']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['gr_secuencial']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_ambiente']))
    {
        $this->nm_new_label['gr_ambiente'] = "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_ambiente = $this->gr_ambiente;
   if (!isset($this->nmgp_cmp_hidden['gr_ambiente']))
   {
       $this->nmgp_cmp_hidden['gr_ambiente'] = 'off';
   }
   $sStyleHidden_gr_ambiente = '';
   if (isset($this->nmgp_cmp_hidden['gr_ambiente']) && $this->nmgp_cmp_hidden['gr_ambiente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_ambiente']);
       $sStyleHidden_gr_ambiente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_ambiente = 'display: none;';
   $sStyleReadInp_gr_ambiente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_ambiente']) && $this->nmgp_cmp_readonly['gr_ambiente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_ambiente']);
       $sStyleReadLab_gr_ambiente = '';
       $sStyleReadInp_gr_ambiente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_ambiente']) && $this->nmgp_cmp_hidden['gr_ambiente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_ambiente" value="<?php echo $this->form_encode_input($gr_ambiente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_ambiente_line" id="hidden_field_data_gr_ambiente" style="<?php echo $sStyleHidden_gr_ambiente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_ambiente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_ambiente_label" style=""><span id="id_label_gr_ambiente"><?php echo $this->nm_new_label['gr_ambiente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_ambiente"]) &&  $this->nmgp_cmp_readonly["gr_ambiente"] == "on") { 

 ?>
<input type="hidden" name="gr_ambiente" value="<?php echo $this->form_encode_input($gr_ambiente) . "\">" . $gr_ambiente . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_ambiente" class="sc-ui-readonly-gr_ambiente css_gr_ambiente_line" style="<?php echo $sStyleReadLab_gr_ambiente; ?>"><?php echo $this->form_format_readonly("gr_ambiente", $this->form_encode_input($this->gr_ambiente)); ?></span><span id="id_read_off_gr_ambiente" class="css_read_off_gr_ambiente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_ambiente; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_ambiente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_ambiente" type=text name="gr_ambiente" value="<?php echo $this->form_encode_input($gr_ambiente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['gr_ambiente']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['gr_ambiente']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['gr_ambiente']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_ambiente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_ambiente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_tipo_libretin']))
    {
        $this->nm_new_label['gr_tipo_libretin'] = "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_tipo_libretin = $this->gr_tipo_libretin;
   if (!isset($this->nmgp_cmp_hidden['gr_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['gr_tipo_libretin'] = 'off';
   }
   $sStyleHidden_gr_tipo_libretin = '';
   if (isset($this->nmgp_cmp_hidden['gr_tipo_libretin']) && $this->nmgp_cmp_hidden['gr_tipo_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_tipo_libretin']);
       $sStyleHidden_gr_tipo_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_tipo_libretin = 'display: none;';
   $sStyleReadInp_gr_tipo_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_tipo_libretin']) && $this->nmgp_cmp_readonly['gr_tipo_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_tipo_libretin']);
       $sStyleReadLab_gr_tipo_libretin = '';
       $sStyleReadInp_gr_tipo_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_tipo_libretin']) && $this->nmgp_cmp_hidden['gr_tipo_libretin'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_tipo_libretin" value="<?php echo $this->form_encode_input($gr_tipo_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_tipo_libretin_line" id="hidden_field_data_gr_tipo_libretin" style="<?php echo $sStyleHidden_gr_tipo_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_tipo_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_tipo_libretin_label" style=""><span id="id_label_gr_tipo_libretin"><?php echo $this->nm_new_label['gr_tipo_libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_tipo_libretin"]) &&  $this->nmgp_cmp_readonly["gr_tipo_libretin"] == "on") { 

 ?>
<input type="hidden" name="gr_tipo_libretin" value="<?php echo $this->form_encode_input($gr_tipo_libretin) . "\">" . $gr_tipo_libretin . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_tipo_libretin" class="sc-ui-readonly-gr_tipo_libretin css_gr_tipo_libretin_line" style="<?php echo $sStyleReadLab_gr_tipo_libretin; ?>"><?php echo $this->form_format_readonly("gr_tipo_libretin", $this->form_encode_input($this->gr_tipo_libretin)); ?></span><span id="id_read_off_gr_tipo_libretin" class="css_read_off_gr_tipo_libretin<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_tipo_libretin; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_tipo_libretin_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_tipo_libretin" type=text name="gr_tipo_libretin" value="<?php echo $this->form_encode_input($gr_tipo_libretin) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_tipo_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_tipo_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_numero']))
    {
        $this->nm_new_label['gr_numero'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_numero = $this->gr_numero;
   if (!isset($this->nmgp_cmp_hidden['gr_numero']))
   {
       $this->nmgp_cmp_hidden['gr_numero'] = 'off';
   }
   $sStyleHidden_gr_numero = '';
   if (isset($this->nmgp_cmp_hidden['gr_numero']) && $this->nmgp_cmp_hidden['gr_numero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_numero']);
       $sStyleHidden_gr_numero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_numero = 'display: none;';
   $sStyleReadInp_gr_numero = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["gr_numero"]) &&  $this->nmgp_cmp_readonly["gr_numero"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_numero']);
       $sStyleReadLab_gr_numero = '';
       $sStyleReadInp_gr_numero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_numero']) && $this->nmgp_cmp_hidden['gr_numero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_numero" value="<?php echo $this->form_encode_input($gr_numero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_numero_line" id="hidden_field_data_gr_numero" style="<?php echo $sStyleHidden_gr_numero; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_numero_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_numero_label" style=""><span id="id_label_gr_numero"><?php echo $this->nm_new_label['gr_numero']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_numero']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_numero'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["gr_numero"]) &&  $this->nmgp_cmp_readonly["gr_numero"] == "on")) { 

 ?>
<input type="hidden" name="gr_numero" value="<?php echo $this->form_encode_input($gr_numero) . "\"><span id=\"id_ajax_label_gr_numero\">" . $gr_numero . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_gr_numero" class="sc-ui-readonly-gr_numero css_gr_numero_line" style="<?php echo $sStyleReadLab_gr_numero; ?>"><?php echo $this->form_format_readonly("gr_numero", $this->form_encode_input($this->gr_numero)); ?></span><span id="id_read_off_gr_numero" class="css_read_off_gr_numero<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_numero; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_numero_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_numero" type=text name="gr_numero" value="<?php echo $this->form_encode_input($gr_numero) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['gr_numero']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['gr_numero']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['gr_numero']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_numero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_numero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_gr_establecimiento_dumb = ('' == $sStyleHidden_gr_establecimiento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_establecimiento_dumb" style="<?php echo $sStyleHidden_gr_establecimiento_dumb; ?>"></TD>
<?php $sStyleHidden_gr_punto_emision_dumb = ('' == $sStyleHidden_gr_punto_emision) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_punto_emision_dumb" style="<?php echo $sStyleHidden_gr_punto_emision_dumb; ?>"></TD>
<?php $sStyleHidden_gr_secuencial_dumb = ('' == $sStyleHidden_gr_secuencial) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_secuencial_dumb" style="<?php echo $sStyleHidden_gr_secuencial_dumb; ?>"></TD>
<?php $sStyleHidden_gr_ambiente_dumb = ('' == $sStyleHidden_gr_ambiente) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_ambiente_dumb" style="<?php echo $sStyleHidden_gr_ambiente_dumb; ?>"></TD>
<?php $sStyleHidden_gr_tipo_libretin_dumb = ('' == $sStyleHidden_gr_tipo_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_tipo_libretin_dumb" style="<?php echo $sStyleHidden_gr_tipo_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_gr_numero_dumb = ('' == $sStyleHidden_gr_numero) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_numero_dumb" style="<?php echo $sStyleHidden_gr_numero_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['gr_tipo_comprobante']))
    {
        $this->nm_new_label['gr_tipo_comprobante'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_tipo_comprobante = $this->gr_tipo_comprobante;
   if (!isset($this->nmgp_cmp_hidden['gr_tipo_comprobante']))
   {
       $this->nmgp_cmp_hidden['gr_tipo_comprobante'] = 'off';
   }
   $sStyleHidden_gr_tipo_comprobante = '';
   if (isset($this->nmgp_cmp_hidden['gr_tipo_comprobante']) && $this->nmgp_cmp_hidden['gr_tipo_comprobante'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_tipo_comprobante']);
       $sStyleHidden_gr_tipo_comprobante = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_tipo_comprobante = 'display: none;';
   $sStyleReadInp_gr_tipo_comprobante = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_tipo_comprobante']) && $this->nmgp_cmp_readonly['gr_tipo_comprobante'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_tipo_comprobante']);
       $sStyleReadLab_gr_tipo_comprobante = '';
       $sStyleReadInp_gr_tipo_comprobante = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_tipo_comprobante']) && $this->nmgp_cmp_hidden['gr_tipo_comprobante'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_tipo_comprobante" value="<?php echo $this->form_encode_input($gr_tipo_comprobante) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_tipo_comprobante_line" id="hidden_field_data_gr_tipo_comprobante" style="<?php echo $sStyleHidden_gr_tipo_comprobante; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_tipo_comprobante_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_tipo_comprobante_label" style=""><span id="id_label_gr_tipo_comprobante"><?php echo $this->nm_new_label['gr_tipo_comprobante']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_tipo_comprobante"]) &&  $this->nmgp_cmp_readonly["gr_tipo_comprobante"] == "on") { 

 ?>
<input type="hidden" name="gr_tipo_comprobante" value="<?php echo $this->form_encode_input($gr_tipo_comprobante) . "\">" . $gr_tipo_comprobante . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_tipo_comprobante" class="sc-ui-readonly-gr_tipo_comprobante css_gr_tipo_comprobante_line" style="<?php echo $sStyleReadLab_gr_tipo_comprobante; ?>"><?php echo $this->form_format_readonly("gr_tipo_comprobante", $this->form_encode_input($this->gr_tipo_comprobante)); ?></span><span id="id_read_off_gr_tipo_comprobante" class="css_read_off_gr_tipo_comprobante<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_tipo_comprobante; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_tipo_comprobante_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_tipo_comprobante" type=text name="gr_tipo_comprobante" value="<?php echo $this->form_encode_input($gr_tipo_comprobante) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=2"; } ?> maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_tipo_comprobante_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_tipo_comprobante_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_empresa']))
    {
        $this->nm_new_label['gr_empresa'] = "" . $this->Ini->Nm_lang['lang_empresa'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_empresa = $this->gr_empresa;
   if (!isset($this->nmgp_cmp_hidden['gr_empresa']))
   {
       $this->nmgp_cmp_hidden['gr_empresa'] = 'off';
   }
   $sStyleHidden_gr_empresa = '';
   if (isset($this->nmgp_cmp_hidden['gr_empresa']) && $this->nmgp_cmp_hidden['gr_empresa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_empresa']);
       $sStyleHidden_gr_empresa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_empresa = 'display: none;';
   $sStyleReadInp_gr_empresa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_empresa']) && $this->nmgp_cmp_readonly['gr_empresa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_empresa']);
       $sStyleReadLab_gr_empresa = '';
       $sStyleReadInp_gr_empresa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_empresa']) && $this->nmgp_cmp_hidden['gr_empresa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_empresa" value="<?php echo $this->form_encode_input($gr_empresa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_empresa_line" id="hidden_field_data_gr_empresa" style="<?php echo $sStyleHidden_gr_empresa; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_empresa_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_empresa_label" style=""><span id="id_label_gr_empresa"><?php echo $this->nm_new_label['gr_empresa']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_empresa"]) &&  $this->nmgp_cmp_readonly["gr_empresa"] == "on") { 

 ?>
<input type="hidden" name="gr_empresa" value="<?php echo $this->form_encode_input($gr_empresa) . "\">" . $gr_empresa . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_empresa" class="sc-ui-readonly-gr_empresa css_gr_empresa_line" style="<?php echo $sStyleReadLab_gr_empresa; ?>"><?php echo $this->form_format_readonly("gr_empresa", $this->form_encode_input($this->gr_empresa)); ?></span><span id="id_read_off_gr_empresa" class="css_read_off_gr_empresa<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_empresa; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_empresa_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_empresa" type=text name="gr_empresa" value="<?php echo $this->form_encode_input($gr_empresa) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_empresa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_empresa_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_fecha']))
    {
        $this->nm_new_label['gr_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_fecha = $this->gr_fecha;
   if (!isset($this->nmgp_cmp_hidden['gr_fecha']))
   {
       $this->nmgp_cmp_hidden['gr_fecha'] = 'off';
   }
   $sStyleHidden_gr_fecha = '';
   if (isset($this->nmgp_cmp_hidden['gr_fecha']) && $this->nmgp_cmp_hidden['gr_fecha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_fecha']);
       $sStyleHidden_gr_fecha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_fecha = 'display: none;';
   $sStyleReadInp_gr_fecha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_fecha']) && $this->nmgp_cmp_readonly['gr_fecha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_fecha']);
       $sStyleReadLab_gr_fecha = '';
       $sStyleReadInp_gr_fecha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_fecha']) && $this->nmgp_cmp_hidden['gr_fecha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_fecha" value="<?php echo $this->form_encode_input($gr_fecha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_fecha_line" id="hidden_field_data_gr_fecha" style="<?php echo $sStyleHidden_gr_fecha; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_fecha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_fecha_label" style=""><span id="id_label_gr_fecha"><?php echo $this->nm_new_label['gr_fecha']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_fecha"]) &&  $this->nmgp_cmp_readonly["gr_fecha"] == "on") { 

 ?>
<input type="hidden" name="gr_fecha" value="<?php echo $this->form_encode_input($gr_fecha) . "\">" . $gr_fecha . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_fecha" class="sc-ui-readonly-gr_fecha css_gr_fecha_line" style="<?php echo $sStyleReadLab_gr_fecha; ?>"><?php echo $this->form_format_readonly("gr_fecha", $this->form_encode_input($gr_fecha)); ?></span><span id="id_read_off_gr_fecha" class="css_read_off_gr_fecha<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_fecha; ?>"><?php
$tmp_form_data = $this->field_config['gr_fecha']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_gr_fecha_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_fecha" type=text name="gr_fecha" value="<?php echo $this->form_encode_input($gr_fecha) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['gr_fecha']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['gr_fecha']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_fecha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_fecha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_usuario']))
    {
        $this->nm_new_label['gr_usuario'] = "" . $this->Ini->Nm_lang['lang_usuario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_usuario = $this->gr_usuario;
   if (!isset($this->nmgp_cmp_hidden['gr_usuario']))
   {
       $this->nmgp_cmp_hidden['gr_usuario'] = 'off';
   }
   $sStyleHidden_gr_usuario = '';
   if (isset($this->nmgp_cmp_hidden['gr_usuario']) && $this->nmgp_cmp_hidden['gr_usuario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_usuario']);
       $sStyleHidden_gr_usuario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_usuario = 'display: none;';
   $sStyleReadInp_gr_usuario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_usuario']) && $this->nmgp_cmp_readonly['gr_usuario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_usuario']);
       $sStyleReadLab_gr_usuario = '';
       $sStyleReadInp_gr_usuario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_usuario']) && $this->nmgp_cmp_hidden['gr_usuario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_usuario" value="<?php echo $this->form_encode_input($gr_usuario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_usuario_line" id="hidden_field_data_gr_usuario" style="<?php echo $sStyleHidden_gr_usuario; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_usuario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_usuario_label" style=""><span id="id_label_gr_usuario"><?php echo $this->nm_new_label['gr_usuario']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_usuario"]) &&  $this->nmgp_cmp_readonly["gr_usuario"] == "on") { 

 ?>
<input type="hidden" name="gr_usuario" value="<?php echo $this->form_encode_input($gr_usuario) . "\">" . $gr_usuario . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_usuario" class="sc-ui-readonly-gr_usuario css_gr_usuario_line" style="<?php echo $sStyleReadLab_gr_usuario; ?>"><?php echo $this->form_format_readonly("gr_usuario", $this->form_encode_input($this->gr_usuario)); ?></span><span id="id_read_off_gr_usuario" class="css_read_off_gr_usuario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_usuario; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_usuario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_usuario" type=text name="gr_usuario" value="<?php echo $this->form_encode_input($gr_usuario) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=35"; } ?> maxlength=35 alt="{datatype: 'text', maxLength: 35, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_usuario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_usuario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_estado']))
    {
        $this->nm_new_label['gr_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_estado = $this->gr_estado;
   if (!isset($this->nmgp_cmp_hidden['gr_estado']))
   {
       $this->nmgp_cmp_hidden['gr_estado'] = 'off';
   }
   $sStyleHidden_gr_estado = '';
   if (isset($this->nmgp_cmp_hidden['gr_estado']) && $this->nmgp_cmp_hidden['gr_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_estado']);
       $sStyleHidden_gr_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_estado = 'display: none;';
   $sStyleReadInp_gr_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_estado']) && $this->nmgp_cmp_readonly['gr_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_estado']);
       $sStyleReadLab_gr_estado = '';
       $sStyleReadInp_gr_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_estado']) && $this->nmgp_cmp_hidden['gr_estado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_estado" value="<?php echo $this->form_encode_input($gr_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_estado_line" id="hidden_field_data_gr_estado" style="<?php echo $sStyleHidden_gr_estado; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_estado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_estado_label" style=""><span id="id_label_gr_estado"><?php echo $this->nm_new_label['gr_estado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_estado"]) &&  $this->nmgp_cmp_readonly["gr_estado"] == "on") { 

 ?>
<input type="hidden" name="gr_estado" value="<?php echo $this->form_encode_input($gr_estado) . "\">" . $gr_estado . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_estado" class="sc-ui-readonly-gr_estado css_gr_estado_line" style="<?php echo $sStyleReadLab_gr_estado; ?>"><?php echo $this->form_format_readonly("gr_estado", $this->form_encode_input($this->gr_estado)); ?></span><span id="id_read_off_gr_estado" class="css_read_off_gr_estado<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_estado; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_estado_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_estado" type=text name="gr_estado" value="<?php echo $this->form_encode_input($gr_estado) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=2"; } ?> maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_estado_sri']))
    {
        $this->nm_new_label['gr_estado_sri'] = "" . $this->Ini->Nm_lang['lang_estado_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_estado_sri = $this->gr_estado_sri;
   if (!isset($this->nmgp_cmp_hidden['gr_estado_sri']))
   {
       $this->nmgp_cmp_hidden['gr_estado_sri'] = 'off';
   }
   $sStyleHidden_gr_estado_sri = '';
   if (isset($this->nmgp_cmp_hidden['gr_estado_sri']) && $this->nmgp_cmp_hidden['gr_estado_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_estado_sri']);
       $sStyleHidden_gr_estado_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_estado_sri = 'display: none;';
   $sStyleReadInp_gr_estado_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_estado_sri']) && $this->nmgp_cmp_readonly['gr_estado_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_estado_sri']);
       $sStyleReadLab_gr_estado_sri = '';
       $sStyleReadInp_gr_estado_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_estado_sri']) && $this->nmgp_cmp_hidden['gr_estado_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_estado_sri" value="<?php echo $this->form_encode_input($gr_estado_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_estado_sri_line" id="hidden_field_data_gr_estado_sri" style="<?php echo $sStyleHidden_gr_estado_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_estado_sri_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_estado_sri_label" style=""><span id="id_label_gr_estado_sri"><?php echo $this->nm_new_label['gr_estado_sri']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_estado_sri"]) &&  $this->nmgp_cmp_readonly["gr_estado_sri"] == "on") { 

 ?>
<input type="hidden" name="gr_estado_sri" value="<?php echo $this->form_encode_input($gr_estado_sri) . "\">" . $gr_estado_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_estado_sri" class="sc-ui-readonly-gr_estado_sri css_gr_estado_sri_line" style="<?php echo $sStyleReadLab_gr_estado_sri; ?>"><?php echo $this->form_format_readonly("gr_estado_sri", $this->form_encode_input($this->gr_estado_sri)); ?></span><span id="id_read_off_gr_estado_sri" class="css_read_off_gr_estado_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_estado_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_estado_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_estado_sri" type=text name="gr_estado_sri" value="<?php echo $this->form_encode_input($gr_estado_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_estado_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_estado_sri_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_gr_tipo_comprobante_dumb = ('' == $sStyleHidden_gr_tipo_comprobante) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_tipo_comprobante_dumb" style="<?php echo $sStyleHidden_gr_tipo_comprobante_dumb; ?>"></TD>
<?php $sStyleHidden_gr_empresa_dumb = ('' == $sStyleHidden_gr_empresa) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_empresa_dumb" style="<?php echo $sStyleHidden_gr_empresa_dumb; ?>"></TD>
<?php $sStyleHidden_gr_fecha_dumb = ('' == $sStyleHidden_gr_fecha) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_fecha_dumb" style="<?php echo $sStyleHidden_gr_fecha_dumb; ?>"></TD>
<?php $sStyleHidden_gr_usuario_dumb = ('' == $sStyleHidden_gr_usuario) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_usuario_dumb" style="<?php echo $sStyleHidden_gr_usuario_dumb; ?>"></TD>
<?php $sStyleHidden_gr_estado_dumb = ('' == $sStyleHidden_gr_estado) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_estado_dumb" style="<?php echo $sStyleHidden_gr_estado_dumb; ?>"></TD>
<?php $sStyleHidden_gr_estado_sri_dumb = ('' == $sStyleHidden_gr_estado_sri) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_estado_sri_dumb" style="<?php echo $sStyleHidden_gr_estado_sri_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['gr_error_sri']))
    {
        $this->nm_new_label['gr_error_sri'] = "" . $this->Ini->Nm_lang['lang_mensaje'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_error_sri = $this->gr_error_sri;
   if (!isset($this->nmgp_cmp_hidden['gr_error_sri']))
   {
       $this->nmgp_cmp_hidden['gr_error_sri'] = 'off';
   }
   $sStyleHidden_gr_error_sri = '';
   if (isset($this->nmgp_cmp_hidden['gr_error_sri']) && $this->nmgp_cmp_hidden['gr_error_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_error_sri']);
       $sStyleHidden_gr_error_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_error_sri = 'display: none;';
   $sStyleReadInp_gr_error_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_error_sri']) && $this->nmgp_cmp_readonly['gr_error_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_error_sri']);
       $sStyleReadLab_gr_error_sri = '';
       $sStyleReadInp_gr_error_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_error_sri']) && $this->nmgp_cmp_hidden['gr_error_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_error_sri" value="<?php echo $this->form_encode_input($gr_error_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_error_sri_line" id="hidden_field_data_gr_error_sri" style="<?php echo $sStyleHidden_gr_error_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_error_sri_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_error_sri_label" style=""><span id="id_label_gr_error_sri"><?php echo $this->nm_new_label['gr_error_sri']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_error_sri"]) &&  $this->nmgp_cmp_readonly["gr_error_sri"] == "on") { 

 ?>
<input type="hidden" name="gr_error_sri" value="<?php echo $this->form_encode_input($gr_error_sri) . "\">" . $gr_error_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_error_sri" class="sc-ui-readonly-gr_error_sri css_gr_error_sri_line" style="<?php echo $sStyleReadLab_gr_error_sri; ?>"><?php echo $this->form_format_readonly("gr_error_sri", $this->form_encode_input($this->gr_error_sri)); ?></span><span id="id_read_off_gr_error_sri" class="css_read_off_gr_error_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_error_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_error_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_error_sri" type=text name="gr_error_sri" value="<?php echo $this->form_encode_input($gr_error_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_error_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_error_sri_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_fecha_autorizacion']))
    {
        $this->nm_new_label['gr_fecha_autorizacion'] = "" . $this->Ini->Nm_lang['lang_fecha_autorizacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_fecha_autorizacion = $this->gr_fecha_autorizacion;
   if (!isset($this->nmgp_cmp_hidden['gr_fecha_autorizacion']))
   {
       $this->nmgp_cmp_hidden['gr_fecha_autorizacion'] = 'off';
   }
   $sStyleHidden_gr_fecha_autorizacion = '';
   if (isset($this->nmgp_cmp_hidden['gr_fecha_autorizacion']) && $this->nmgp_cmp_hidden['gr_fecha_autorizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_fecha_autorizacion']);
       $sStyleHidden_gr_fecha_autorizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_fecha_autorizacion = 'display: none;';
   $sStyleReadInp_gr_fecha_autorizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_fecha_autorizacion']) && $this->nmgp_cmp_readonly['gr_fecha_autorizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_fecha_autorizacion']);
       $sStyleReadLab_gr_fecha_autorizacion = '';
       $sStyleReadInp_gr_fecha_autorizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_fecha_autorizacion']) && $this->nmgp_cmp_hidden['gr_fecha_autorizacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_fecha_autorizacion" value="<?php echo $this->form_encode_input($gr_fecha_autorizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_fecha_autorizacion_line" id="hidden_field_data_gr_fecha_autorizacion" style="<?php echo $sStyleHidden_gr_fecha_autorizacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_fecha_autorizacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_fecha_autorizacion_label" style=""><span id="id_label_gr_fecha_autorizacion"><?php echo $this->nm_new_label['gr_fecha_autorizacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_fecha_autorizacion"]) &&  $this->nmgp_cmp_readonly["gr_fecha_autorizacion"] == "on") { 

 ?>
<input type="hidden" name="gr_fecha_autorizacion" value="<?php echo $this->form_encode_input($gr_fecha_autorizacion) . "\">" . $gr_fecha_autorizacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_fecha_autorizacion" class="sc-ui-readonly-gr_fecha_autorizacion css_gr_fecha_autorizacion_line" style="<?php echo $sStyleReadLab_gr_fecha_autorizacion; ?>"><?php echo $this->form_format_readonly("gr_fecha_autorizacion", $this->form_encode_input($gr_fecha_autorizacion)); ?></span><span id="id_read_off_gr_fecha_autorizacion" class="css_read_off_gr_fecha_autorizacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_fecha_autorizacion; ?>"><?php
$tmp_form_data = $this->field_config['gr_fecha_autorizacion']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_gr_fecha_autorizacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_fecha_autorizacion" type=text name="gr_fecha_autorizacion" value="<?php echo $this->form_encode_input($gr_fecha_autorizacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['gr_fecha_autorizacion']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['gr_fecha_autorizacion']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_fecha_autorizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_fecha_autorizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_autorizacion']))
    {
        $this->nm_new_label['gr_autorizacion'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_autorizacion = $this->gr_autorizacion;
   if (!isset($this->nmgp_cmp_hidden['gr_autorizacion']))
   {
       $this->nmgp_cmp_hidden['gr_autorizacion'] = 'off';
   }
   $sStyleHidden_gr_autorizacion = '';
   if (isset($this->nmgp_cmp_hidden['gr_autorizacion']) && $this->nmgp_cmp_hidden['gr_autorizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_autorizacion']);
       $sStyleHidden_gr_autorizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_autorizacion = 'display: none;';
   $sStyleReadInp_gr_autorizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_autorizacion']) && $this->nmgp_cmp_readonly['gr_autorizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_autorizacion']);
       $sStyleReadLab_gr_autorizacion = '';
       $sStyleReadInp_gr_autorizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_autorizacion']) && $this->nmgp_cmp_hidden['gr_autorizacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_autorizacion" value="<?php echo $this->form_encode_input($gr_autorizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_autorizacion_line" id="hidden_field_data_gr_autorizacion" style="<?php echo $sStyleHidden_gr_autorizacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_autorizacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_autorizacion_label" style=""><span id="id_label_gr_autorizacion"><?php echo $this->nm_new_label['gr_autorizacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_autorizacion"]) &&  $this->nmgp_cmp_readonly["gr_autorizacion"] == "on") { 

 ?>
<input type="hidden" name="gr_autorizacion" value="<?php echo $this->form_encode_input($gr_autorizacion) . "\">" . $gr_autorizacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_autorizacion" class="sc-ui-readonly-gr_autorizacion css_gr_autorizacion_line" style="<?php echo $sStyleReadLab_gr_autorizacion; ?>"><?php echo $this->form_format_readonly("gr_autorizacion", $this->form_encode_input($this->gr_autorizacion)); ?></span><span id="id_read_off_gr_autorizacion" class="css_read_off_gr_autorizacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_autorizacion; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_autorizacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_autorizacion" type=text name="gr_autorizacion" value="<?php echo $this->form_encode_input($gr_autorizacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_autorizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_autorizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_clave']))
    {
        $this->nm_new_label['gr_clave'] = "" . $this->Ini->Nm_lang['lang_clave_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_clave = $this->gr_clave;
   if (!isset($this->nmgp_cmp_hidden['gr_clave']))
   {
       $this->nmgp_cmp_hidden['gr_clave'] = 'off';
   }
   $sStyleHidden_gr_clave = '';
   if (isset($this->nmgp_cmp_hidden['gr_clave']) && $this->nmgp_cmp_hidden['gr_clave'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_clave']);
       $sStyleHidden_gr_clave = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_clave = 'display: none;';
   $sStyleReadInp_gr_clave = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_clave']) && $this->nmgp_cmp_readonly['gr_clave'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_clave']);
       $sStyleReadLab_gr_clave = '';
       $sStyleReadInp_gr_clave = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_clave']) && $this->nmgp_cmp_hidden['gr_clave'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_clave" value="<?php echo $this->form_encode_input($gr_clave) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_gr_clave_line" id="hidden_field_data_gr_clave" style="<?php echo $sStyleHidden_gr_clave; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_clave_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_gr_clave_label" style=""><span id="id_label_gr_clave"><?php echo $this->nm_new_label['gr_clave']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_clave"]) &&  $this->nmgp_cmp_readonly["gr_clave"] == "on") { 

 ?>
<input type="hidden" name="gr_clave" value="<?php echo $this->form_encode_input($gr_clave) . "\">" . $gr_clave . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_clave" class="sc-ui-readonly-gr_clave css_gr_clave_line" style="<?php echo $sStyleReadLab_gr_clave; ?>"><?php echo $this->form_format_readonly("gr_clave", $this->form_encode_input($this->gr_clave)); ?></span><span id="id_read_off_gr_clave" class="css_read_off_gr_clave<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_clave; ?>">
 <input class="sc-js-input scFormObjectOdd css_gr_clave_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_clave" type=text name="gr_clave" value="<?php echo $this->form_encode_input($gr_clave) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_clave_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_clave_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="2" >&nbsp;</TD>




<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
<?php $sStyleHidden_gr_error_sri_dumb = ('' == $sStyleHidden_gr_error_sri) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_error_sri_dumb" style="<?php echo $sStyleHidden_gr_error_sri_dumb; ?>"></TD>
<?php $sStyleHidden_gr_fecha_autorizacion_dumb = ('' == $sStyleHidden_gr_fecha_autorizacion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_fecha_autorizacion_dumb" style="<?php echo $sStyleHidden_gr_fecha_autorizacion_dumb; ?>"></TD>
<?php $sStyleHidden_gr_autorizacion_dumb = ('' == $sStyleHidden_gr_autorizacion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_autorizacion_dumb" style="<?php echo $sStyleHidden_gr_autorizacion_dumb; ?>"></TD>
<?php $sStyleHidden_gr_clave_dumb = ('' == $sStyleHidden_gr_clave) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_gr_clave_dumb" style="<?php echo $sStyleHidden_gr_clave_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_transportista'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['gr_transportista']))
    {
        $this->nm_new_label['gr_transportista'] = "" . $this->Ini->Nm_lang['lang_transportista'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_transportista = $this->gr_transportista;
   $sStyleHidden_gr_transportista = '';
   if (isset($this->nmgp_cmp_hidden['gr_transportista']) && $this->nmgp_cmp_hidden['gr_transportista'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_transportista']);
       $sStyleHidden_gr_transportista = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_transportista = 'display: none;';
   $sStyleReadInp_gr_transportista = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_transportista']) && $this->nmgp_cmp_readonly['gr_transportista'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_transportista']);
       $sStyleReadLab_gr_transportista = '';
       $sStyleReadInp_gr_transportista = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_transportista']) && $this->nmgp_cmp_hidden['gr_transportista'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_transportista" value="<?php echo $this->form_encode_input($gr_transportista) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_gr_transportista_label" id="hidden_field_label_gr_transportista" style="<?php echo $sStyleHidden_gr_transportista; ?>"><span id="id_label_gr_transportista"><?php echo $this->nm_new_label['gr_transportista']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_transportista']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_transportista'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_gr_transportista_line" id="hidden_field_data_gr_transportista" style="<?php echo $sStyleHidden_gr_transportista; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_transportista_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="gr_transportista" value="<?php echo $this->form_encode_input($gr_transportista); ?>"><span id="id_ajax_label_gr_transportista"><?php echo nl2br($gr_transportista); ?></span>
<?php
   $Sc_iframe_master = ($this->Embutida_call) ? 'nmgp_iframe_ret*scinnmsc_iframe_liga_form_del_guia_remision*scout' : '';
   if (isset($this->Ini->sc_lig_md5["busca_transportista"]) && $this->Ini->sc_lig_md5["busca_transportista"] == "S") {
       $Parms_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,gr_transportista,tr_id*scoutnm_evt_ret_busca*scinsc_form_del_guia_remision_gr_transportista_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_guia_remision@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,gr_transportista,tr_id*scoutnm_evt_ret_busca*scinsc_form_del_guia_remision_gr_transportista_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
   }
?>

<?php if (!$this->Ini->Export_img_zip) { ?><?php echo nmButtonOutput($this->arr_buttons, "bform_captura", "nm_submit_cap('" . $this->Ini->link_busca_transportista_cons_psq. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_busca_transportista_cons_psq. "', '" . $Md5_Lig . "')", "cap_gr_transportista", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_transportista_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_transportista_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ruc_transportista']))
    {
        $this->nm_new_label['ruc_transportista'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ruc_transportista = $this->ruc_transportista;
   $sStyleHidden_ruc_transportista = '';
   if (isset($this->nmgp_cmp_hidden['ruc_transportista']) && $this->nmgp_cmp_hidden['ruc_transportista'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ruc_transportista']);
       $sStyleHidden_ruc_transportista = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ruc_transportista = 'display: none;';
   $sStyleReadInp_ruc_transportista = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ruc_transportista']) && $this->nmgp_cmp_readonly['ruc_transportista'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ruc_transportista']);
       $sStyleReadLab_ruc_transportista = '';
       $sStyleReadInp_ruc_transportista = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ruc_transportista']) && $this->nmgp_cmp_hidden['ruc_transportista'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ruc_transportista" value="<?php echo $this->form_encode_input($ruc_transportista) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ruc_transportista_label" id="hidden_field_label_ruc_transportista" style="<?php echo $sStyleHidden_ruc_transportista; ?>"><span id="id_label_ruc_transportista"><?php echo $this->nm_new_label['ruc_transportista']; ?></span></TD>
    <TD class="scFormDataOdd css_ruc_transportista_line" id="hidden_field_data_ruc_transportista" style="<?php echo $sStyleHidden_ruc_transportista; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ruc_transportista_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ruc_transportista"]) &&  $this->nmgp_cmp_readonly["ruc_transportista"] == "on") { 

 ?>
<input type="hidden" name="ruc_transportista" value="<?php echo $this->form_encode_input($ruc_transportista) . "\">" . $ruc_transportista . ""; ?>
<?php } else { ?>
<span id="id_read_on_ruc_transportista" class="sc-ui-readonly-ruc_transportista css_ruc_transportista_line" style="<?php echo $sStyleReadLab_ruc_transportista; ?>"><?php echo $this->form_format_readonly("ruc_transportista", $this->form_encode_input($this->ruc_transportista)); ?></span><span id="id_read_off_ruc_transportista" class="css_read_off_ruc_transportista<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ruc_transportista; ?>">
 <input class="sc-js-input scFormObjectOdd css_ruc_transportista_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ruc_transportista" type=text name="ruc_transportista" value="<?php echo $this->form_encode_input($ruc_transportista) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ruc_transportista_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ruc_transportista_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nombre_transportista']))
    {
        $this->nm_new_label['nombre_transportista'] = "" . $this->Ini->Nm_lang['lang_nombre'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nombre_transportista = $this->nombre_transportista;
   $sStyleHidden_nombre_transportista = '';
   if (isset($this->nmgp_cmp_hidden['nombre_transportista']) && $this->nmgp_cmp_hidden['nombre_transportista'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nombre_transportista']);
       $sStyleHidden_nombre_transportista = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nombre_transportista = 'display: none;';
   $sStyleReadInp_nombre_transportista = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nombre_transportista']) && $this->nmgp_cmp_readonly['nombre_transportista'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nombre_transportista']);
       $sStyleReadLab_nombre_transportista = '';
       $sStyleReadInp_nombre_transportista = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nombre_transportista']) && $this->nmgp_cmp_hidden['nombre_transportista'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nombre_transportista" value="<?php echo $this->form_encode_input($nombre_transportista) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nombre_transportista_label" id="hidden_field_label_nombre_transportista" style="<?php echo $sStyleHidden_nombre_transportista; ?>"><span id="id_label_nombre_transportista"><?php echo $this->nm_new_label['nombre_transportista']; ?></span></TD>
    <TD class="scFormDataOdd css_nombre_transportista_line" id="hidden_field_data_nombre_transportista" style="<?php echo $sStyleHidden_nombre_transportista; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nombre_transportista_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nombre_transportista"]) &&  $this->nmgp_cmp_readonly["nombre_transportista"] == "on") { 

 ?>
<input type="hidden" name="nombre_transportista" value="<?php echo $this->form_encode_input($nombre_transportista) . "\">" . $nombre_transportista . ""; ?>
<?php } else { ?>
<span id="id_read_on_nombre_transportista" class="sc-ui-readonly-nombre_transportista css_nombre_transportista_line" style="<?php echo $sStyleReadLab_nombre_transportista; ?>"><?php echo $this->form_format_readonly("nombre_transportista", $this->form_encode_input($this->nombre_transportista)); ?></span><span id="id_read_off_nombre_transportista" class="css_read_off_nombre_transportista<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nombre_transportista; ?>">
 <input class="sc-js-input scFormObjectOdd css_nombre_transportista_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nombre_transportista" type=text name="nombre_transportista" value="<?php echo $this->form_encode_input($nombre_transportista) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nombre_transportista_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nombre_transportista_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['placa_transportista']))
    {
        $this->nm_new_label['placa_transportista'] = "" . $this->Ini->Nm_lang['lang_placa'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $placa_transportista = $this->placa_transportista;
   $sStyleHidden_placa_transportista = '';
   if (isset($this->nmgp_cmp_hidden['placa_transportista']) && $this->nmgp_cmp_hidden['placa_transportista'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['placa_transportista']);
       $sStyleHidden_placa_transportista = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_placa_transportista = 'display: none;';
   $sStyleReadInp_placa_transportista = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['placa_transportista']) && $this->nmgp_cmp_readonly['placa_transportista'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['placa_transportista']);
       $sStyleReadLab_placa_transportista = '';
       $sStyleReadInp_placa_transportista = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['placa_transportista']) && $this->nmgp_cmp_hidden['placa_transportista'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="placa_transportista" value="<?php echo $this->form_encode_input($placa_transportista) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_placa_transportista_label" id="hidden_field_label_placa_transportista" style="<?php echo $sStyleHidden_placa_transportista; ?>"><span id="id_label_placa_transportista"><?php echo $this->nm_new_label['placa_transportista']; ?></span></TD>
    <TD class="scFormDataOdd css_placa_transportista_line" id="hidden_field_data_placa_transportista" style="<?php echo $sStyleHidden_placa_transportista; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_placa_transportista_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["placa_transportista"]) &&  $this->nmgp_cmp_readonly["placa_transportista"] == "on") { 

 ?>
<input type="hidden" name="placa_transportista" value="<?php echo $this->form_encode_input($placa_transportista) . "\">" . $placa_transportista . ""; ?>
<?php } else { ?>
<span id="id_read_on_placa_transportista" class="sc-ui-readonly-placa_transportista css_placa_transportista_line" style="<?php echo $sStyleReadLab_placa_transportista; ?>"><?php echo $this->form_format_readonly("placa_transportista", $this->form_encode_input($this->placa_transportista)); ?></span><span id="id_read_off_placa_transportista" class="css_read_off_placa_transportista<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_placa_transportista; ?>">
 <input class="sc-js-input scFormObjectOdd css_placa_transportista_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_placa_transportista" type=text name="placa_transportista" value="<?php echo $this->form_encode_input($placa_transportista) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_placa_transportista_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_placa_transportista_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['gr_fecha_ini_transporte']))
    {
        $this->nm_new_label['gr_fecha_ini_transporte'] = "" . $this->Ini->Nm_lang['lang_fecha_inicio'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_fecha_ini_transporte = $this->gr_fecha_ini_transporte;
   $sStyleHidden_gr_fecha_ini_transporte = '';
   if (isset($this->nmgp_cmp_hidden['gr_fecha_ini_transporte']) && $this->nmgp_cmp_hidden['gr_fecha_ini_transporte'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_fecha_ini_transporte']);
       $sStyleHidden_gr_fecha_ini_transporte = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_fecha_ini_transporte = 'display: none;';
   $sStyleReadInp_gr_fecha_ini_transporte = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_fecha_ini_transporte']) && $this->nmgp_cmp_readonly['gr_fecha_ini_transporte'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_fecha_ini_transporte']);
       $sStyleReadLab_gr_fecha_ini_transporte = '';
       $sStyleReadInp_gr_fecha_ini_transporte = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_fecha_ini_transporte']) && $this->nmgp_cmp_hidden['gr_fecha_ini_transporte'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_fecha_ini_transporte" value="<?php echo $this->form_encode_input($gr_fecha_ini_transporte) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_gr_fecha_ini_transporte_label" id="hidden_field_label_gr_fecha_ini_transporte" style="<?php echo $sStyleHidden_gr_fecha_ini_transporte; ?>"><span id="id_label_gr_fecha_ini_transporte"><?php echo $this->nm_new_label['gr_fecha_ini_transporte']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_fecha_ini_transporte']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_fecha_ini_transporte'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_gr_fecha_ini_transporte_line" id="hidden_field_data_gr_fecha_ini_transporte" style="<?php echo $sStyleHidden_gr_fecha_ini_transporte; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_fecha_ini_transporte_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_fecha_ini_transporte"]) &&  $this->nmgp_cmp_readonly["gr_fecha_ini_transporte"] == "on") { 

 ?>
<input type="hidden" name="gr_fecha_ini_transporte" value="<?php echo $this->form_encode_input($gr_fecha_ini_transporte) . "\">" . $gr_fecha_ini_transporte . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_fecha_ini_transporte" class="sc-ui-readonly-gr_fecha_ini_transporte css_gr_fecha_ini_transporte_line" style="<?php echo $sStyleReadLab_gr_fecha_ini_transporte; ?>"><?php echo $this->form_format_readonly("gr_fecha_ini_transporte", $this->form_encode_input($gr_fecha_ini_transporte)); ?></span><span id="id_read_off_gr_fecha_ini_transporte" class="css_read_off_gr_fecha_ini_transporte<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_fecha_ini_transporte; ?>"><?php
$tmp_form_data = $this->field_config['gr_fecha_ini_transporte']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_gr_fecha_ini_transporte_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_fecha_ini_transporte" type=text name="gr_fecha_ini_transporte" value="<?php echo $this->form_encode_input($gr_fecha_ini_transporte) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['gr_fecha_ini_transporte']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['gr_fecha_ini_transporte']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_fecha_ini_transporte_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_fecha_ini_transporte_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['gr_fecha_fin_transporte']))
    {
        $this->nm_new_label['gr_fecha_fin_transporte'] = "" . $this->Ini->Nm_lang['lang_calendar_fld_end_date'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_fecha_fin_transporte = $this->gr_fecha_fin_transporte;
   $sStyleHidden_gr_fecha_fin_transporte = '';
   if (isset($this->nmgp_cmp_hidden['gr_fecha_fin_transporte']) && $this->nmgp_cmp_hidden['gr_fecha_fin_transporte'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_fecha_fin_transporte']);
       $sStyleHidden_gr_fecha_fin_transporte = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_fecha_fin_transporte = 'display: none;';
   $sStyleReadInp_gr_fecha_fin_transporte = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_fecha_fin_transporte']) && $this->nmgp_cmp_readonly['gr_fecha_fin_transporte'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_fecha_fin_transporte']);
       $sStyleReadLab_gr_fecha_fin_transporte = '';
       $sStyleReadInp_gr_fecha_fin_transporte = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_fecha_fin_transporte']) && $this->nmgp_cmp_hidden['gr_fecha_fin_transporte'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_fecha_fin_transporte" value="<?php echo $this->form_encode_input($gr_fecha_fin_transporte) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_gr_fecha_fin_transporte_label" id="hidden_field_label_gr_fecha_fin_transporte" style="<?php echo $sStyleHidden_gr_fecha_fin_transporte; ?>"><span id="id_label_gr_fecha_fin_transporte"><?php echo $this->nm_new_label['gr_fecha_fin_transporte']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_fecha_fin_transporte']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_fecha_fin_transporte'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_gr_fecha_fin_transporte_line" id="hidden_field_data_gr_fecha_fin_transporte" style="<?php echo $sStyleHidden_gr_fecha_fin_transporte; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_fecha_fin_transporte_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_fecha_fin_transporte"]) &&  $this->nmgp_cmp_readonly["gr_fecha_fin_transporte"] == "on") { 

 ?>
<input type="hidden" name="gr_fecha_fin_transporte" value="<?php echo $this->form_encode_input($gr_fecha_fin_transporte) . "\">" . $gr_fecha_fin_transporte . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_fecha_fin_transporte" class="sc-ui-readonly-gr_fecha_fin_transporte css_gr_fecha_fin_transporte_line" style="<?php echo $sStyleReadLab_gr_fecha_fin_transporte; ?>"><?php echo $this->form_format_readonly("gr_fecha_fin_transporte", $this->form_encode_input($gr_fecha_fin_transporte)); ?></span><span id="id_read_off_gr_fecha_fin_transporte" class="css_read_off_gr_fecha_fin_transporte<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_fecha_fin_transporte; ?>"><?php
$tmp_form_data = $this->field_config['gr_fecha_fin_transporte']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_gr_fecha_fin_transporte_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_gr_fecha_fin_transporte" type=text name="gr_fecha_fin_transporte" value="<?php echo $this->form_encode_input($gr_fecha_fin_transporte) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['gr_fecha_fin_transporte']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['gr_fecha_fin_transporte']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_fecha_fin_transporte_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_fecha_fin_transporte_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['gr_direccion_partida']))
    {
        $this->nm_new_label['gr_direccion_partida'] = "" . $this->Ini->Nm_lang['lang_direccion_partida'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $gr_direccion_partida = $this->gr_direccion_partida;
   $sStyleHidden_gr_direccion_partida = '';
   if (isset($this->nmgp_cmp_hidden['gr_direccion_partida']) && $this->nmgp_cmp_hidden['gr_direccion_partida'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['gr_direccion_partida']);
       $sStyleHidden_gr_direccion_partida = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_gr_direccion_partida = 'display: none;';
   $sStyleReadInp_gr_direccion_partida = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['gr_direccion_partida']) && $this->nmgp_cmp_readonly['gr_direccion_partida'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['gr_direccion_partida']);
       $sStyleReadLab_gr_direccion_partida = '';
       $sStyleReadInp_gr_direccion_partida = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['gr_direccion_partida']) && $this->nmgp_cmp_hidden['gr_direccion_partida'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="gr_direccion_partida" value="<?php echo $this->form_encode_input($gr_direccion_partida) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_gr_direccion_partida_label" id="hidden_field_label_gr_direccion_partida" style="<?php echo $sStyleHidden_gr_direccion_partida; ?>"><span id="id_label_gr_direccion_partida"><?php echo $this->nm_new_label['gr_direccion_partida']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_direccion_partida']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['php_cmp_required']['gr_direccion_partida'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_gr_direccion_partida_line" id="hidden_field_data_gr_direccion_partida" style="<?php echo $sStyleHidden_gr_direccion_partida; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_gr_direccion_partida_line" style="vertical-align: top;padding: 0px">
<?php
$gr_direccion_partida_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($gr_direccion_partida));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["gr_direccion_partida"]) &&  $this->nmgp_cmp_readonly["gr_direccion_partida"] == "on") { 

 ?>
<input type="hidden" name="gr_direccion_partida" value="<?php echo $this->form_encode_input($gr_direccion_partida) . "\">" . $gr_direccion_partida_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_gr_direccion_partida" class="sc-ui-readonly-gr_direccion_partida css_gr_direccion_partida_line" style="<?php echo $sStyleReadLab_gr_direccion_partida; ?>"><?php echo $this->form_format_readonly("gr_direccion_partida", $this->form_encode_input($gr_direccion_partida_val)); ?></span><span id="id_read_off_gr_direccion_partida" class="css_read_off_gr_direccion_partida<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_gr_direccion_partida; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_gr_direccion_partida_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;" name="gr_direccion_partida" id="id_sc_field_gr_direccion_partida" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $gr_direccion_partida; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_gr_direccion_partida_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_gr_direccion_partida_text"></span></td></tr></table></td></tr></table></TD>
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
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_destinatarios'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['destinatario']))
    {
        $this->nm_new_label['destinatario'] = "" . $this->Ini->Nm_lang['lang_destinatarios'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $destinatario = $this->destinatario;
   $sStyleHidden_destinatario = '';
   if (isset($this->nmgp_cmp_hidden['destinatario']) && $this->nmgp_cmp_hidden['destinatario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['destinatario']);
       $sStyleHidden_destinatario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_destinatario = 'display: none;';
   $sStyleReadInp_destinatario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['destinatario']) && $this->nmgp_cmp_readonly['destinatario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['destinatario']);
       $sStyleReadLab_destinatario = '';
       $sStyleReadInp_destinatario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['destinatario']) && $this->nmgp_cmp_hidden['destinatario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="destinatario" value="<?php echo $this->form_encode_input($destinatario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_destinatario_line" id="hidden_field_data_destinatario" style="<?php echo $sStyleHidden_destinatario; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_destinatario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_destinatario_label" style=""><span id="id_label_destinatario"><?php echo $this->nm_new_label['destinatario']; ?></span></span><br>
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_destinatario'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_destinatario'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['grid_del_destinatario_guia_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_destinatario'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['grid_del_destinatario_guia_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['grid_del_destinatario_guia_script_case_init'] ]['grid_del_destinatario_guia']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['grid_del_destinatario_guia_script_case_init'] ]['grid_del_destinatario_guia']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['grid_del_destinatario_guia_script_case_init'] ]['grid_del_destinatario_guia']['embutida_pai']        = "form_del_guia_remision";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['grid_del_destinatario_guia_script_case_init'] ]['grid_del_destinatario_guia']['embutida_form_parms'] = "var_id_guia*scin" . $this->nmgp_dados_form['gr_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
 if (isset($this->Ini->sc_lig_md5["grid_del_destinatario_guia"]) && $this->Ini->sc_lig_md5["grid_del_destinatario_guia"] == "S") {
     $Parms_Lig  = "var_id_guia*scin" . $this->nmgp_dados_form['gr_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_guia_remision@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_id_guia*scin" . $this->nmgp_dados_form['gr_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_guia_remision_empty.htm' : $this->Ini->link_grid_del_destinatario_guia_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=500' . $parms_lig_cons;
if (isset($this->Ini->sc_lig_target['C_@scinf_destinatario']) && 'nmsc_iframe_liga_grid_del_destinatario_guia' != $this->Ini->sc_lig_target['C_@scinf_destinatario'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_destinatario'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['grid_del_destinatario_guia_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_destinatario'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_del_destinatario_guia"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="500" width="100%" name="nmsc_iframe_liga_grid_del_destinatario_guia"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_destinatario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_destinatario_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['exit'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label'][''];
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
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Nuevo'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['nuevo'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "nuevo", "scBtnFn_Nuevo()", "scBtnFn_Nuevo()", "sc_Nuevo_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Autorizar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['autorizar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['autorizar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['autorizar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['autorizar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['autorizar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "autorizar", "scBtnFn_Autorizar()", "scBtnFn_Autorizar()", "sc_Autorizar_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Anular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['anular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "anular", "scBtnFn_Anular()", "scBtnFn_Anular()", "sc_Anular_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label'][''];
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
        $sCondStyle = ($this->nmgp_botoes['Imprimir'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['imprimir']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_disabled']['imprimir']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['imprimir']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['imprimir']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['btn_label']['imprimir'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "imprimir", "scBtnFn_Imprimir()", "scBtnFn_Imprimir()", "sc_Imprimir_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['run_iframe'] != "R")
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_guia_remision");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_guia_remision");
 parent.scAjaxDetailHeight("form_del_guia_remision", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_guia_remision", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_guia_remision", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['sc_modal'])
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
		if ($("#sys_separator.sc-unique-btn-12").length && $("#sys_separator.sc-unique-btn-12").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-12").hasClass("disabled")) {
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
		if ($("#sc_Nuevo_bot").length && $("#sc_Nuevo_bot").is(":visible")) {
		    if ($("#sc_Nuevo_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
			 return;
		}
	}
	function scBtnFn_desde_factura() {
		if ($("#sc_desde_factura_top").length && $("#sc_desde_factura_top").is(":visible")) {
		    if ($("#sc_desde_factura_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_desde_factura()
			 return;
		}
	}
	function scBtnFn_entre_establecimiento() {
		if ($("#sc_entre_establecimiento_top").length && $("#sc_entre_establecimiento_top").is(":visible")) {
		    if ($("#sc_entre_establecimiento_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_entre_establecimiento()
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
		if ($("#sc_b_upd_b.sc-unique-btn-11").length && $("#sc_b_upd_b.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_Autorizar() {
		if ($("#sc_Autorizar_top").length && $("#sc_Autorizar_top").is(":visible")) {
		    if ($("#sc_Autorizar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Autorizar()
			 return;
		}
		if ($("#sc_Autorizar_bot").length && $("#sc_Autorizar_bot").is(":visible")) {
		    if ($("#sc_Autorizar_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Autorizar()
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
		if ($("#sc_Anular_bot").length && $("#sc_Anular_bot").is(":visible")) {
		    if ($("#sc_Anular_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			 return;
		}
	}
	function scBtnFn_Imprimir() {
		if ($("#sc_Imprimir_top").length && $("#sc_Imprimir_top").is(":visible")) {
		    if ($("#sc_Imprimir_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Imprimir()
			 return;
		}
		if ($("#sc_Imprimir_bot").length && $("#sc_Imprimir_bot").is(":visible")) {
		    if ($("#sc_Imprimir_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Imprimir()
			 return;
		}
	}
	function scBtnFn_baucher() {
		if ($("#sc_baucher_top").length && $("#sc_baucher_top").is(":visible")) {
		    if ($("#sc_baucher_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_baucher()
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_guia_remision']['buttonStatus'] = $this->nmgp_botoes;
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
