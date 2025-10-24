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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_factura"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_factura"); } ?></TITLE>
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
.css_read_off_fac_fecha button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_factura_multiple/form_del_factura_multiple_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_factura_multiple_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['last'] : 'off'); ?>";
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
     if (F_name == "fac_subtotal")
     {
        $('input[name="fac_subtotal"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_subtotal"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_subtotal"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_subtotal_iva")
     {
        $('input[name="fac_subtotal_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_subtotal_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_subtotal_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_subtotal_cero")
     {
        $('input[name="fac_subtotal_cero"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_subtotal_cero"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_subtotal_cero"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_subtotal_no_objeto")
     {
        $('input[name="fac_subtotal_no_objeto"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_subtotal_no_objeto"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_subtotal_no_objeto"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_subtotal_excento")
     {
        $('input[name="fac_subtotal_excento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_subtotal_excento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_subtotal_excento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_total_descuento")
     {
        $('input[name="fac_total_descuento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_total_descuento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_total_descuento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_valor_ice")
     {
        $('input[name="fac_valor_ice"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_valor_ice"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_valor_ice"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_valor_iva")
     {
        $('input[name="fac_valor_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_valor_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_valor_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_valor_irbpnr")
     {
        $('input[name="fac_valor_irbpnr"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_valor_irbpnr"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_valor_irbpnr"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_propina")
     {
        $('input[name="fac_propina"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_propina"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_propina"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_total")
     {
        $('input[name="fac_total"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_total"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_total"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_del_factura_multiple_jquery.php');

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
  scFocusField('fac_libretin');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['link_info']['remove_border']) {
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
 include_once("form_del_factura_multiple_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_del_factura_multiple'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_factura_multiple'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['exit'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['nuevo'];
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
        $buttonMacroLabel = "" . $this->Ini->Nm_lang['lang_generar_facturas'] . "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['empty_filter'] = true;
       }
  }
?>
<style>
.scTabInactive {
    cursor: pointer;
}
</style>
<script type="text/javascript">
var pag_ativa = "form_del_factura_multiple_form0";
</script>
<ul class="scTabLine sc-ui-page-tab-line">
<?php
    $this->tabCssClass = array(
        'form_del_factura_multiple_form0' => array(
            'title' => "{lang_factura}",
            'class' => empty($nmgp_num_form) || $nmgp_num_form == "form_del_factura_multiple_form0" ? "scTabActive" : "scTabInactive",
        ),
        'form_del_factura_multiple_form1' => array(
            'title' => "{lang_clientes}",
            'class' => $nmgp_num_form == "form_del_factura_multiple_form1" ? "scTabActive" : "scTabInactive",
        ),
    );
    if (!empty($this->Ini->nm_hidden_pages)) {
        foreach ($this->Ini->nm_hidden_pages as $pageName => $pageStatus) {
            if ('{lang_factura}' == $pageName && 'off' == $pageStatus) {
                $this->tabCssClass['form_del_factura_multiple_form0']['class'] = 'scTabInactive';
            }
            if ('{lang_clientes}' == $pageName && 'off' == $pageStatus) {
                $this->tabCssClass['form_del_factura_multiple_form1']['class'] = 'scTabInactive';
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
    $css_celula = $this->tabCssClass["form_del_factura_multiple_form0"]['class'];
?>
   <li id="id_form_del_factura_multiple_form0" class="sc-form-page sc-tab-click <?php echo $css_celula; ?>" data-tab-name="form_del_factura_multiple_form0">
     <img src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ico__NM__document_edit_24.png" align="absmiddle">
     <?php echo $this->Ini->Nm_lang['lang_factura']; ?>
   </li>
<?php
    $css_celula = $this->tabCssClass["form_del_factura_multiple_form1"]['class'];
?>
   <li id="id_form_del_factura_multiple_form1" class="sc-form-page sc-tab-click <?php echo $css_celula; ?>" data-tab-name="form_del_factura_multiple_form1">
     <img src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ico__NM__user_add_24.png" align="absmiddle">
     <?php echo $this->Ini->Nm_lang['lang_clientes']; ?>
   </li>
</ul>
<div style='clear:both'></div>
</td></tr> 
<tr><td style="padding: 0px">
<div id="form_del_factura_multiple_form0" style='display: none; width: 1px; height: 0px; overflow: scroll'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['fac_establecimiento']))
   {
       $this->nmgp_cmp_hidden['fac_establecimiento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_punto_emision']))
   {
       $this->nmgp_cmp_hidden['fac_punto_emision'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_ambiente']))
   {
       $this->nmgp_cmp_hidden['fac_ambiente'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['fac_tipo_libretin'] = 'off';
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_factura'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fac_libretin']))
   {
       $this->nm_new_label['fac_libretin'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_libretin = $this->fac_libretin;
   $sStyleHidden_fac_libretin = '';
   if (isset($this->nmgp_cmp_hidden['fac_libretin']) && $this->nmgp_cmp_hidden['fac_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_libretin']);
       $sStyleHidden_fac_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_libretin = 'display: none;';
   $sStyleReadInp_fac_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_libretin']) && $this->nmgp_cmp_readonly['fac_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_libretin']);
       $sStyleReadLab_fac_libretin = '';
       $sStyleReadInp_fac_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_libretin']) && $this->nmgp_cmp_hidden['fac_libretin'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fac_libretin" value="<?php echo $this->form_encode_input($this->fac_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_libretin_line" id="hidden_field_data_fac_libretin" style="<?php echo $sStyleHidden_fac_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_libretin_label" style=""><span id="id_label_fac_libretin"><?php echo $this->nm_new_label['fac_libretin']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['php_cmp_required']['fac_libretin']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['php_cmp_required']['fac_libretin'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_libretin"]) &&  $this->nmgp_cmp_readonly["fac_libretin"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['Lookup_fac_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['Lookup_fac_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['Lookup_fac_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['Lookup_fac_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['Lookup_fac_libretin']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['Lookup_fac_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['Lookup_fac_libretin']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['Lookup_fac_libretin'] = array(); 
    }

   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_establecimiento = $this->fac_establecimiento;
   $old_value_fac_punto_emision = $this->fac_punto_emision;
   $old_value_fac_ambiente = $this->fac_ambiente;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_propina = $this->fac_propina;
   $old_value_fac_total = $this->fac_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_establecimiento = $this->fac_establecimiento;
   $unformatted_value_fac_punto_emision = $this->fac_punto_emision;
   $unformatted_value_fac_ambiente = $this->fac_ambiente;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_propina = $this->fac_propina;
   $unformatted_value_fac_total = $this->fac_total;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='01'";

   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_establecimiento = $old_value_fac_establecimiento;
   $this->fac_punto_emision = $old_value_fac_punto_emision;
   $this->fac_ambiente = $old_value_fac_ambiente;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_propina = $old_value_fac_propina;
   $this->fac_total = $old_value_fac_total;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['Lookup_fac_libretin'][] = $rs->fields[0];
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
   $fac_libretin_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_libretin_1))
          {
              foreach ($this->fac_libretin_1 as $tmp_fac_libretin)
              {
                  if (trim($tmp_fac_libretin) === trim($cadaselect[1])) {$fac_libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_libretin) && trim($this->fac_libretin) === trim($cadaselect[1])) {$fac_libretin_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fac_libretin" value="<?php echo $this->form_encode_input($fac_libretin) . "\">" . $fac_libretin_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fac_libretin();
   $x = 0 ; 
   $fac_libretin_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_libretin_1))
          {
              foreach ($this->fac_libretin_1 as $tmp_fac_libretin)
              {
                  if (trim($tmp_fac_libretin) === trim($cadaselect[1])) {$fac_libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_libretin) && trim($this->fac_libretin) === trim($cadaselect[1])) { $fac_libretin_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fac_libretin_look))
          {
              $fac_libretin_look = $this->fac_libretin;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fac_libretin\" class=\"css_fac_libretin_line\" style=\"" .  $sStyleReadLab_fac_libretin . "\">" . $this->form_format_readonly("fac_libretin", $this->form_encode_input($fac_libretin_look)) . "</span><span id=\"id_read_off_fac_libretin\" class=\"css_read_off_fac_libretin" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fac_libretin . "\">";
   echo " <span id=\"idAjaxSelect_fac_libretin\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fac_libretin_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fac_libretin\" name=\"fac_libretin\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fac_libretin) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fac_libretin)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_libretin_text"></span></td></tr></table></td></tr></table> </TD>
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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=3"; } ?> maxlength=3 alt="{datatype: 'text', maxLength: 3, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_punto_emision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_punto_emision_text"></span></td></tr></table></td></tr></table> </TD>
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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ambiente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ambiente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fac_fecha']))
    {
        $this->nm_new_label['fac_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_fecha = $this->fac_fecha;
   $sStyleHidden_fac_fecha = '';
   if (isset($this->nmgp_cmp_hidden['fac_fecha']) && $this->nmgp_cmp_hidden['fac_fecha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_fecha']);
       $sStyleHidden_fac_fecha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_fecha = 'display: none;';
   $sStyleReadInp_fac_fecha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_fecha']) && $this->nmgp_cmp_readonly['fac_fecha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_fecha']);
       $sStyleReadLab_fac_fecha = '';
       $sStyleReadInp_fac_fecha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_fecha']) && $this->nmgp_cmp_hidden['fac_fecha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_fecha" value="<?php echo $this->form_encode_input($fac_fecha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_fecha_line" id="hidden_field_data_fac_fecha" style="<?php echo $sStyleHidden_fac_fecha; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_fecha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_fecha_label" style=""><span id="id_label_fac_fecha"><?php echo $this->nm_new_label['fac_fecha']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_fecha"]) &&  $this->nmgp_cmp_readonly["fac_fecha"] == "on") { 

 ?>
<input type="hidden" name="fac_fecha" value="<?php echo $this->form_encode_input($fac_fecha) . "\">" . $fac_fecha . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_fecha" class="sc-ui-readonly-fac_fecha css_fac_fecha_line" style="<?php echo $sStyleReadLab_fac_fecha; ?>"><?php echo $this->form_format_readonly("fac_fecha", $this->form_encode_input($fac_fecha)); ?></span><span id="id_read_off_fac_fecha" class="css_read_off_fac_fecha<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_fecha; ?>"><?php
$tmp_form_data = $this->field_config['fac_fecha']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_fac_fecha_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_fecha" type=text name="fac_fecha" value="<?php echo $this->form_encode_input($fac_fecha) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fac_fecha']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fac_fecha']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_fecha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_fecha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_fac_libretin_dumb = ('' == $sStyleHidden_fac_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_libretin_dumb" style="<?php echo $sStyleHidden_fac_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_establecimiento_dumb = ('' == $sStyleHidden_establecimiento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_establecimiento_dumb" style="<?php echo $sStyleHidden_establecimiento_dumb; ?>"></TD>
<?php $sStyleHidden_punto_emision_dumb = ('' == $sStyleHidden_punto_emision) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_punto_emision_dumb" style="<?php echo $sStyleHidden_punto_emision_dumb; ?>"></TD>
<?php $sStyleHidden_tipo_libretin_dumb = ('' == $sStyleHidden_tipo_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tipo_libretin_dumb" style="<?php echo $sStyleHidden_tipo_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_ambiente_dumb = ('' == $sStyleHidden_ambiente) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ambiente_dumb" style="<?php echo $sStyleHidden_ambiente_dumb; ?>"></TD>
<?php $sStyleHidden_fac_fecha_dumb = ('' == $sStyleHidden_fac_fecha) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_fecha_dumb" style="<?php echo $sStyleHidden_fac_fecha_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_serie_guia']))
    {
        $this->nm_new_label['fac_serie_guia'] = "" . $this->Ini->Nm_lang['lang_guia_remision'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_serie_guia = $this->fac_serie_guia;
   $sStyleHidden_fac_serie_guia = '';
   if (isset($this->nmgp_cmp_hidden['fac_serie_guia']) && $this->nmgp_cmp_hidden['fac_serie_guia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_serie_guia']);
       $sStyleHidden_fac_serie_guia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_serie_guia = 'display: none;';
   $sStyleReadInp_fac_serie_guia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_serie_guia']) && $this->nmgp_cmp_readonly['fac_serie_guia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_serie_guia']);
       $sStyleReadLab_fac_serie_guia = '';
       $sStyleReadInp_fac_serie_guia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_serie_guia']) && $this->nmgp_cmp_hidden['fac_serie_guia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_serie_guia" value="<?php echo $this->form_encode_input($fac_serie_guia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_serie_guia_line" id="hidden_field_data_fac_serie_guia" style="<?php echo $sStyleHidden_fac_serie_guia; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_serie_guia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_serie_guia_label" style=""><span id="id_label_fac_serie_guia"><?php echo $this->nm_new_label['fac_serie_guia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_serie_guia"]) &&  $this->nmgp_cmp_readonly["fac_serie_guia"] == "on") { 

 ?>
<input type="hidden" name="fac_serie_guia" value="<?php echo $this->form_encode_input($fac_serie_guia) . "\">" . $fac_serie_guia . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_serie_guia" class="sc-ui-readonly-fac_serie_guia css_fac_serie_guia_line" style="<?php echo $sStyleReadLab_fac_serie_guia; ?>"><?php echo $this->form_format_readonly("fac_serie_guia", $this->form_encode_input($this->fac_serie_guia)); ?></span><span id="id_read_off_fac_serie_guia" class="css_read_off_fac_serie_guia<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_serie_guia; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_serie_guia_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_serie_guia" type=text name="fac_serie_guia" value="<?php echo $this->form_encode_input($fac_serie_guia) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=17"; } ?> maxlength=17 alt="{datatype: 'text', maxLength: 17, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789-") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '001-001-000000001', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_serie_guia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_serie_guia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fac_establecimiento']))
    {
        $this->nm_new_label['fac_establecimiento'] = "" . $this->Ini->Nm_lang['lang_establecimiento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_establecimiento = $this->fac_establecimiento;
   if (!isset($this->nmgp_cmp_hidden['fac_establecimiento']))
   {
       $this->nmgp_cmp_hidden['fac_establecimiento'] = 'off';
   }
   $sStyleHidden_fac_establecimiento = '';
   if (isset($this->nmgp_cmp_hidden['fac_establecimiento']) && $this->nmgp_cmp_hidden['fac_establecimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_establecimiento']);
       $sStyleHidden_fac_establecimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_establecimiento = 'display: none;';
   $sStyleReadInp_fac_establecimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_establecimiento']) && $this->nmgp_cmp_readonly['fac_establecimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_establecimiento']);
       $sStyleReadLab_fac_establecimiento = '';
       $sStyleReadInp_fac_establecimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_establecimiento']) && $this->nmgp_cmp_hidden['fac_establecimiento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_establecimiento" value="<?php echo $this->form_encode_input($fac_establecimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_establecimiento_line" id="hidden_field_data_fac_establecimiento" style="<?php echo $sStyleHidden_fac_establecimiento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_establecimiento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_establecimiento_label" style=""><span id="id_label_fac_establecimiento"><?php echo $this->nm_new_label['fac_establecimiento']; ?></span></span><br><input type="hidden" name="fac_establecimiento" value="<?php echo $this->form_encode_input($fac_establecimiento); ?>"><span id="id_ajax_label_fac_establecimiento"><?php echo nl2br($fac_establecimiento); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_establecimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_establecimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fac_punto_emision']))
    {
        $this->nm_new_label['fac_punto_emision'] = "" . $this->Ini->Nm_lang['lang_punto_emision'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_punto_emision = $this->fac_punto_emision;
   if (!isset($this->nmgp_cmp_hidden['fac_punto_emision']))
   {
       $this->nmgp_cmp_hidden['fac_punto_emision'] = 'off';
   }
   $sStyleHidden_fac_punto_emision = '';
   if (isset($this->nmgp_cmp_hidden['fac_punto_emision']) && $this->nmgp_cmp_hidden['fac_punto_emision'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_punto_emision']);
       $sStyleHidden_fac_punto_emision = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_punto_emision = 'display: none;';
   $sStyleReadInp_fac_punto_emision = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_punto_emision']) && $this->nmgp_cmp_readonly['fac_punto_emision'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_punto_emision']);
       $sStyleReadLab_fac_punto_emision = '';
       $sStyleReadInp_fac_punto_emision = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_punto_emision']) && $this->nmgp_cmp_hidden['fac_punto_emision'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_punto_emision" value="<?php echo $this->form_encode_input($fac_punto_emision) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_punto_emision_line" id="hidden_field_data_fac_punto_emision" style="<?php echo $sStyleHidden_fac_punto_emision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_punto_emision_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_punto_emision_label" style=""><span id="id_label_fac_punto_emision"><?php echo $this->nm_new_label['fac_punto_emision']; ?></span></span><br><input type="hidden" name="fac_punto_emision" value="<?php echo $this->form_encode_input($fac_punto_emision); ?>"><span id="id_ajax_label_fac_punto_emision"><?php echo nl2br($fac_punto_emision); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_punto_emision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_punto_emision_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fac_tipo_libretin']))
    {
        $this->nm_new_label['fac_tipo_libretin'] = "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_tipo_libretin = $this->fac_tipo_libretin;
   if (!isset($this->nmgp_cmp_hidden['fac_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['fac_tipo_libretin'] = 'off';
   }
   $sStyleHidden_fac_tipo_libretin = '';
   if (isset($this->nmgp_cmp_hidden['fac_tipo_libretin']) && $this->nmgp_cmp_hidden['fac_tipo_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_tipo_libretin']);
       $sStyleHidden_fac_tipo_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_tipo_libretin = 'display: none;';
   $sStyleReadInp_fac_tipo_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_tipo_libretin']) && $this->nmgp_cmp_readonly['fac_tipo_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_tipo_libretin']);
       $sStyleReadLab_fac_tipo_libretin = '';
       $sStyleReadInp_fac_tipo_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_tipo_libretin']) && $this->nmgp_cmp_hidden['fac_tipo_libretin'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_tipo_libretin" value="<?php echo $this->form_encode_input($fac_tipo_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_tipo_libretin_line" id="hidden_field_data_fac_tipo_libretin" style="<?php echo $sStyleHidden_fac_tipo_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_tipo_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_tipo_libretin_label" style=""><span id="id_label_fac_tipo_libretin"><?php echo $this->nm_new_label['fac_tipo_libretin']; ?></span></span><br><input type="hidden" name="fac_tipo_libretin" value="<?php echo $this->form_encode_input($fac_tipo_libretin); ?>"><span id="id_ajax_label_fac_tipo_libretin"><?php echo nl2br($fac_tipo_libretin); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_tipo_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_tipo_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fac_ambiente']))
    {
        $this->nm_new_label['fac_ambiente'] = "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_ambiente = $this->fac_ambiente;
   if (!isset($this->nmgp_cmp_hidden['fac_ambiente']))
   {
       $this->nmgp_cmp_hidden['fac_ambiente'] = 'off';
   }
   $sStyleHidden_fac_ambiente = '';
   if (isset($this->nmgp_cmp_hidden['fac_ambiente']) && $this->nmgp_cmp_hidden['fac_ambiente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_ambiente']);
       $sStyleHidden_fac_ambiente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_ambiente = 'display: none;';
   $sStyleReadInp_fac_ambiente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_ambiente']) && $this->nmgp_cmp_readonly['fac_ambiente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_ambiente']);
       $sStyleReadLab_fac_ambiente = '';
       $sStyleReadInp_fac_ambiente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_ambiente']) && $this->nmgp_cmp_hidden['fac_ambiente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_ambiente" value="<?php echo $this->form_encode_input($fac_ambiente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_ambiente_line" id="hidden_field_data_fac_ambiente" style="<?php echo $sStyleHidden_fac_ambiente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_ambiente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_ambiente_label" style=""><span id="id_label_fac_ambiente"><?php echo $this->nm_new_label['fac_ambiente']; ?></span></span><br><input type="hidden" name="fac_ambiente" value="<?php echo $this->form_encode_input($fac_ambiente); ?>"><span id="id_ajax_label_fac_ambiente"><?php echo nl2br($fac_ambiente); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_ambiente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_ambiente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="1" >&nbsp;</TD>




<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
<?php $sStyleHidden_fac_serie_guia_dumb = ('' == $sStyleHidden_fac_serie_guia) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_serie_guia_dumb" style="<?php echo $sStyleHidden_fac_serie_guia_dumb; ?>"></TD>
<?php $sStyleHidden_fac_establecimiento_dumb = ('' == $sStyleHidden_fac_establecimiento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_establecimiento_dumb" style="<?php echo $sStyleHidden_fac_establecimiento_dumb; ?>"></TD>
<?php $sStyleHidden_fac_punto_emision_dumb = ('' == $sStyleHidden_fac_punto_emision) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_punto_emision_dumb" style="<?php echo $sStyleHidden_fac_punto_emision_dumb; ?>"></TD>
<?php $sStyleHidden_fac_tipo_libretin_dumb = ('' == $sStyleHidden_fac_tipo_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_tipo_libretin_dumb" style="<?php echo $sStyleHidden_fac_tipo_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_fac_ambiente_dumb = ('' == $sStyleHidden_fac_ambiente) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_ambiente_dumb" style="<?php echo $sStyleHidden_fac_ambiente_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="80%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


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
        $this->nm_new_label['detalle'] = "" . $this->Ini->Nm_lang['lang_detalle'] . "";
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
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalle'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalle'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalle'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['embutida_parms'] = "var_factura*scin" . $this->nmgp_dados_form['fac_numero'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['foreign_key']['df_factura_multiple'] = $this->nmgp_dados_form['fac_numero'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['foreign_key']['df_empresa'] = $this->nmgp_dados_form['fac_empresa'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['where_filter'] = "df_factura_multiple = " . $this->nmgp_dados_form['fac_numero'] . " AND df_empresa = '" . $this->nmgp_dados_form['fac_empresa'] . "'";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['where_detal']  = "df_factura_multiple = " . $this->nmgp_dados_form['fac_numero'] . " AND df_empresa = '" . $this->nmgp_dados_form['fac_empresa'] . "'";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_factura_multiple']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init'] ]['form_del_detalle_factura_multiple']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_factura_multiple_empty.htm' : $this->Ini->link_form_del_detalle_factura_multiple_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=450';
if (isset($this->Ini->sc_lig_target['C_@scinf_detalle']) && 'nmsc_iframe_liga_form_del_detalle_factura_multiple' != $this->Ini->sc_lig_target['C_@scinf_detalle'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_detalle'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_detalle_factura_multiple_script_case_init']);
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
<iframe border="0" id="nmsc_iframe_liga_form_del_detalle_factura_multiple"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="450" width="100%" name="nmsc_iframe_liga_form_del_detalle_factura_multiple"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_detalle_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_detalle_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_detalle_dumb = ('' == $sStyleHidden_detalle) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_detalle_dumb" style="<?php echo $sStyleHidden_detalle_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   <td width="20%" height="">
   <a name="bloco_3"></a>
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="2" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_totales'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_subtotal']))
    {
        $this->nm_new_label['fac_subtotal'] = "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_subtotal = $this->fac_subtotal;
   $sStyleHidden_fac_subtotal = '';
   if (isset($this->nmgp_cmp_hidden['fac_subtotal']) && $this->nmgp_cmp_hidden['fac_subtotal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_subtotal']);
       $sStyleHidden_fac_subtotal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_subtotal = 'display: none;';
   $sStyleReadInp_fac_subtotal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_subtotal']) && $this->nmgp_cmp_readonly['fac_subtotal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_subtotal']);
       $sStyleReadLab_fac_subtotal = '';
       $sStyleReadInp_fac_subtotal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_subtotal']) && $this->nmgp_cmp_hidden['fac_subtotal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_subtotal" value="<?php echo $this->form_encode_input($fac_subtotal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_subtotal_label" id="hidden_field_label_fac_subtotal" style="<?php echo $sStyleHidden_fac_subtotal; ?>"><span id="id_label_fac_subtotal"><?php echo $this->nm_new_label['fac_subtotal']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_subtotal_line" id="hidden_field_data_fac_subtotal" style="<?php echo $sStyleHidden_fac_subtotal; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_subtotal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal"]) &&  $this->nmgp_cmp_readonly["fac_subtotal"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal" value="<?php echo $this->form_encode_input($fac_subtotal) . "\">" . $fac_subtotal . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal" class="sc-ui-readonly-fac_subtotal css_fac_subtotal_line" style="<?php echo $sStyleReadLab_fac_subtotal; ?>"><?php echo $this->form_format_readonly("fac_subtotal", $this->form_encode_input($this->fac_subtotal)); ?></span><span id="id_read_off_fac_subtotal" class="css_read_off_fac_subtotal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal" type=text name="fac_subtotal" value="<?php echo $this->form_encode_input($fac_subtotal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_subtotal_iva']))
    {
        $this->nm_new_label['fac_subtotal_iva'] = "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_subtotal_iva = $this->fac_subtotal_iva;
   $sStyleHidden_fac_subtotal_iva = '';
   if (isset($this->nmgp_cmp_hidden['fac_subtotal_iva']) && $this->nmgp_cmp_hidden['fac_subtotal_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_subtotal_iva']);
       $sStyleHidden_fac_subtotal_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_subtotal_iva = 'display: none;';
   $sStyleReadInp_fac_subtotal_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_subtotal_iva']) && $this->nmgp_cmp_readonly['fac_subtotal_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_subtotal_iva']);
       $sStyleReadLab_fac_subtotal_iva = '';
       $sStyleReadInp_fac_subtotal_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_subtotal_iva']) && $this->nmgp_cmp_hidden['fac_subtotal_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_subtotal_iva" value="<?php echo $this->form_encode_input($fac_subtotal_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_subtotal_iva_label" id="hidden_field_label_fac_subtotal_iva" style="<?php echo $sStyleHidden_fac_subtotal_iva; ?>"><span id="id_label_fac_subtotal_iva"><?php echo $this->nm_new_label['fac_subtotal_iva']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_subtotal_iva_line" id="hidden_field_data_fac_subtotal_iva" style="<?php echo $sStyleHidden_fac_subtotal_iva; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_subtotal_iva_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal_iva"]) &&  $this->nmgp_cmp_readonly["fac_subtotal_iva"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal_iva" value="<?php echo $this->form_encode_input($fac_subtotal_iva) . "\">" . $fac_subtotal_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal_iva" class="sc-ui-readonly-fac_subtotal_iva css_fac_subtotal_iva_line" style="<?php echo $sStyleReadLab_fac_subtotal_iva; ?>"><?php echo $this->form_format_readonly("fac_subtotal_iva", $this->form_encode_input($this->fac_subtotal_iva)); ?></span><span id="id_read_off_fac_subtotal_iva" class="css_read_off_fac_subtotal_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal_iva" type=text name="fac_subtotal_iva" value="<?php echo $this->form_encode_input($fac_subtotal_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_iva_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_subtotal_cero']))
    {
        $this->nm_new_label['fac_subtotal_cero'] = "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_subtotal_cero = $this->fac_subtotal_cero;
   $sStyleHidden_fac_subtotal_cero = '';
   if (isset($this->nmgp_cmp_hidden['fac_subtotal_cero']) && $this->nmgp_cmp_hidden['fac_subtotal_cero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_subtotal_cero']);
       $sStyleHidden_fac_subtotal_cero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_subtotal_cero = 'display: none;';
   $sStyleReadInp_fac_subtotal_cero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_subtotal_cero']) && $this->nmgp_cmp_readonly['fac_subtotal_cero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_subtotal_cero']);
       $sStyleReadLab_fac_subtotal_cero = '';
       $sStyleReadInp_fac_subtotal_cero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_subtotal_cero']) && $this->nmgp_cmp_hidden['fac_subtotal_cero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_subtotal_cero" value="<?php echo $this->form_encode_input($fac_subtotal_cero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_subtotal_cero_label" id="hidden_field_label_fac_subtotal_cero" style="<?php echo $sStyleHidden_fac_subtotal_cero; ?>"><span id="id_label_fac_subtotal_cero"><?php echo $this->nm_new_label['fac_subtotal_cero']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_subtotal_cero_line" id="hidden_field_data_fac_subtotal_cero" style="<?php echo $sStyleHidden_fac_subtotal_cero; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_subtotal_cero_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal_cero"]) &&  $this->nmgp_cmp_readonly["fac_subtotal_cero"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal_cero" value="<?php echo $this->form_encode_input($fac_subtotal_cero) . "\">" . $fac_subtotal_cero . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal_cero" class="sc-ui-readonly-fac_subtotal_cero css_fac_subtotal_cero_line" style="<?php echo $sStyleReadLab_fac_subtotal_cero; ?>"><?php echo $this->form_format_readonly("fac_subtotal_cero", $this->form_encode_input($this->fac_subtotal_cero)); ?></span><span id="id_read_off_fac_subtotal_cero" class="css_read_off_fac_subtotal_cero<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal_cero; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_cero_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal_cero" type=text name="fac_subtotal_cero" value="<?php echo $this->form_encode_input($fac_subtotal_cero) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal_cero']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal_cero']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal_cero']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_cero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_cero_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_subtotal_no_objeto']))
    {
        $this->nm_new_label['fac_subtotal_no_objeto'] = "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $sStyleHidden_fac_subtotal_no_objeto = '';
   if (isset($this->nmgp_cmp_hidden['fac_subtotal_no_objeto']) && $this->nmgp_cmp_hidden['fac_subtotal_no_objeto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_subtotal_no_objeto']);
       $sStyleHidden_fac_subtotal_no_objeto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_subtotal_no_objeto = 'display: none;';
   $sStyleReadInp_fac_subtotal_no_objeto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_subtotal_no_objeto']) && $this->nmgp_cmp_readonly['fac_subtotal_no_objeto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_subtotal_no_objeto']);
       $sStyleReadLab_fac_subtotal_no_objeto = '';
       $sStyleReadInp_fac_subtotal_no_objeto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_subtotal_no_objeto']) && $this->nmgp_cmp_hidden['fac_subtotal_no_objeto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_subtotal_no_objeto" value="<?php echo $this->form_encode_input($fac_subtotal_no_objeto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_subtotal_no_objeto_label" id="hidden_field_label_fac_subtotal_no_objeto" style="<?php echo $sStyleHidden_fac_subtotal_no_objeto; ?>"><span id="id_label_fac_subtotal_no_objeto"><?php echo $this->nm_new_label['fac_subtotal_no_objeto']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_subtotal_no_objeto_line" id="hidden_field_data_fac_subtotal_no_objeto" style="<?php echo $sStyleHidden_fac_subtotal_no_objeto; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_subtotal_no_objeto_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal_no_objeto"]) &&  $this->nmgp_cmp_readonly["fac_subtotal_no_objeto"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal_no_objeto" value="<?php echo $this->form_encode_input($fac_subtotal_no_objeto) . "\">" . $fac_subtotal_no_objeto . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal_no_objeto" class="sc-ui-readonly-fac_subtotal_no_objeto css_fac_subtotal_no_objeto_line" style="<?php echo $sStyleReadLab_fac_subtotal_no_objeto; ?>"><?php echo $this->form_format_readonly("fac_subtotal_no_objeto", $this->form_encode_input($this->fac_subtotal_no_objeto)); ?></span><span id="id_read_off_fac_subtotal_no_objeto" class="css_read_off_fac_subtotal_no_objeto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal_no_objeto; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_no_objeto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal_no_objeto" type=text name="fac_subtotal_no_objeto" value="<?php echo $this->form_encode_input($fac_subtotal_no_objeto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal_no_objeto']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal_no_objeto']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal_no_objeto']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_no_objeto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_no_objeto_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_subtotal_excento']))
    {
        $this->nm_new_label['fac_subtotal_excento'] = "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_subtotal_excento = $this->fac_subtotal_excento;
   $sStyleHidden_fac_subtotal_excento = '';
   if (isset($this->nmgp_cmp_hidden['fac_subtotal_excento']) && $this->nmgp_cmp_hidden['fac_subtotal_excento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_subtotal_excento']);
       $sStyleHidden_fac_subtotal_excento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_subtotal_excento = 'display: none;';
   $sStyleReadInp_fac_subtotal_excento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_subtotal_excento']) && $this->nmgp_cmp_readonly['fac_subtotal_excento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_subtotal_excento']);
       $sStyleReadLab_fac_subtotal_excento = '';
       $sStyleReadInp_fac_subtotal_excento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_subtotal_excento']) && $this->nmgp_cmp_hidden['fac_subtotal_excento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_subtotal_excento" value="<?php echo $this->form_encode_input($fac_subtotal_excento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_subtotal_excento_label" id="hidden_field_label_fac_subtotal_excento" style="<?php echo $sStyleHidden_fac_subtotal_excento; ?>"><span id="id_label_fac_subtotal_excento"><?php echo $this->nm_new_label['fac_subtotal_excento']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_subtotal_excento_line" id="hidden_field_data_fac_subtotal_excento" style="<?php echo $sStyleHidden_fac_subtotal_excento; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_subtotal_excento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal_excento"]) &&  $this->nmgp_cmp_readonly["fac_subtotal_excento"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal_excento" value="<?php echo $this->form_encode_input($fac_subtotal_excento) . "\">" . $fac_subtotal_excento . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal_excento" class="sc-ui-readonly-fac_subtotal_excento css_fac_subtotal_excento_line" style="<?php echo $sStyleReadLab_fac_subtotal_excento; ?>"><?php echo $this->form_format_readonly("fac_subtotal_excento", $this->form_encode_input($this->fac_subtotal_excento)); ?></span><span id="id_read_off_fac_subtotal_excento" class="css_read_off_fac_subtotal_excento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal_excento; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_excento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal_excento" type=text name="fac_subtotal_excento" value="<?php echo $this->form_encode_input($fac_subtotal_excento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal_excento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal_excento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal_excento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_excento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_excento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_total_descuento']))
    {
        $this->nm_new_label['fac_total_descuento'] = "" . $this->Ini->Nm_lang['lang_descuento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_total_descuento = $this->fac_total_descuento;
   $sStyleHidden_fac_total_descuento = '';
   if (isset($this->nmgp_cmp_hidden['fac_total_descuento']) && $this->nmgp_cmp_hidden['fac_total_descuento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_total_descuento']);
       $sStyleHidden_fac_total_descuento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_total_descuento = 'display: none;';
   $sStyleReadInp_fac_total_descuento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_total_descuento']) && $this->nmgp_cmp_readonly['fac_total_descuento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_total_descuento']);
       $sStyleReadLab_fac_total_descuento = '';
       $sStyleReadInp_fac_total_descuento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_total_descuento']) && $this->nmgp_cmp_hidden['fac_total_descuento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_total_descuento" value="<?php echo $this->form_encode_input($fac_total_descuento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_total_descuento_label" id="hidden_field_label_fac_total_descuento" style="<?php echo $sStyleHidden_fac_total_descuento; ?>"><span id="id_label_fac_total_descuento"><?php echo $this->nm_new_label['fac_total_descuento']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_total_descuento_line" id="hidden_field_data_fac_total_descuento" style="<?php echo $sStyleHidden_fac_total_descuento; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_total_descuento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_total_descuento"]) &&  $this->nmgp_cmp_readonly["fac_total_descuento"] == "on") { 

 ?>
<input type="hidden" name="fac_total_descuento" value="<?php echo $this->form_encode_input($fac_total_descuento) . "\">" . $fac_total_descuento . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_total_descuento" class="sc-ui-readonly-fac_total_descuento css_fac_total_descuento_line" style="<?php echo $sStyleReadLab_fac_total_descuento; ?>"><?php echo $this->form_format_readonly("fac_total_descuento", $this->form_encode_input($this->fac_total_descuento)); ?></span><span id="id_read_off_fac_total_descuento" class="css_read_off_fac_total_descuento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_total_descuento; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_total_descuento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_total_descuento" type=text name="fac_total_descuento" value="<?php echo $this->form_encode_input($fac_total_descuento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_total_descuento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_total_descuento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_total_descuento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_total_descuento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_total_descuento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_valor_ice']))
    {
        $this->nm_new_label['fac_valor_ice'] = "" . $this->Ini->Nm_lang['lang_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_valor_ice = $this->fac_valor_ice;
   $sStyleHidden_fac_valor_ice = '';
   if (isset($this->nmgp_cmp_hidden['fac_valor_ice']) && $this->nmgp_cmp_hidden['fac_valor_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_valor_ice']);
       $sStyleHidden_fac_valor_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_valor_ice = 'display: none;';
   $sStyleReadInp_fac_valor_ice = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_valor_ice']) && $this->nmgp_cmp_readonly['fac_valor_ice'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_valor_ice']);
       $sStyleReadLab_fac_valor_ice = '';
       $sStyleReadInp_fac_valor_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_valor_ice']) && $this->nmgp_cmp_hidden['fac_valor_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_valor_ice" value="<?php echo $this->form_encode_input($fac_valor_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_valor_ice_label" id="hidden_field_label_fac_valor_ice" style="<?php echo $sStyleHidden_fac_valor_ice; ?>"><span id="id_label_fac_valor_ice"><?php echo $this->nm_new_label['fac_valor_ice']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_valor_ice_line" id="hidden_field_data_fac_valor_ice" style="<?php echo $sStyleHidden_fac_valor_ice; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_valor_ice_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_valor_ice"]) &&  $this->nmgp_cmp_readonly["fac_valor_ice"] == "on") { 

 ?>
<input type="hidden" name="fac_valor_ice" value="<?php echo $this->form_encode_input($fac_valor_ice) . "\">" . $fac_valor_ice . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_valor_ice" class="sc-ui-readonly-fac_valor_ice css_fac_valor_ice_line" style="<?php echo $sStyleReadLab_fac_valor_ice; ?>"><?php echo $this->form_format_readonly("fac_valor_ice", $this->form_encode_input($this->fac_valor_ice)); ?></span><span id="id_read_off_fac_valor_ice" class="css_read_off_fac_valor_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_valor_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_valor_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_valor_ice" type=text name="fac_valor_ice" value="<?php echo $this->form_encode_input($fac_valor_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_valor_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_valor_ice']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_valor_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_valor_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_valor_ice_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_valor_iva']))
    {
        $this->nm_new_label['fac_valor_iva'] = "" . $this->Ini->Nm_lang['lang_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_valor_iva = $this->fac_valor_iva;
   $sStyleHidden_fac_valor_iva = '';
   if (isset($this->nmgp_cmp_hidden['fac_valor_iva']) && $this->nmgp_cmp_hidden['fac_valor_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_valor_iva']);
       $sStyleHidden_fac_valor_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_valor_iva = 'display: none;';
   $sStyleReadInp_fac_valor_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_valor_iva']) && $this->nmgp_cmp_readonly['fac_valor_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_valor_iva']);
       $sStyleReadLab_fac_valor_iva = '';
       $sStyleReadInp_fac_valor_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_valor_iva']) && $this->nmgp_cmp_hidden['fac_valor_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_valor_iva" value="<?php echo $this->form_encode_input($fac_valor_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_valor_iva_label" id="hidden_field_label_fac_valor_iva" style="<?php echo $sStyleHidden_fac_valor_iva; ?>"><span id="id_label_fac_valor_iva"><?php echo $this->nm_new_label['fac_valor_iva']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_valor_iva_line" id="hidden_field_data_fac_valor_iva" style="<?php echo $sStyleHidden_fac_valor_iva; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_valor_iva_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_valor_iva"]) &&  $this->nmgp_cmp_readonly["fac_valor_iva"] == "on") { 

 ?>
<input type="hidden" name="fac_valor_iva" value="<?php echo $this->form_encode_input($fac_valor_iva) . "\">" . $fac_valor_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_valor_iva" class="sc-ui-readonly-fac_valor_iva css_fac_valor_iva_line" style="<?php echo $sStyleReadLab_fac_valor_iva; ?>"><?php echo $this->form_format_readonly("fac_valor_iva", $this->form_encode_input($this->fac_valor_iva)); ?></span><span id="id_read_off_fac_valor_iva" class="css_read_off_fac_valor_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_valor_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_valor_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_valor_iva" type=text name="fac_valor_iva" value="<?php echo $this->form_encode_input($fac_valor_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_valor_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_valor_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_valor_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_valor_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_valor_iva_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_valor_irbpnr']))
    {
        $this->nm_new_label['fac_valor_irbpnr'] = "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $sStyleHidden_fac_valor_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['fac_valor_irbpnr']) && $this->nmgp_cmp_hidden['fac_valor_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_valor_irbpnr']);
       $sStyleHidden_fac_valor_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_valor_irbpnr = 'display: none;';
   $sStyleReadInp_fac_valor_irbpnr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_valor_irbpnr']) && $this->nmgp_cmp_readonly['fac_valor_irbpnr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_valor_irbpnr']);
       $sStyleReadLab_fac_valor_irbpnr = '';
       $sStyleReadInp_fac_valor_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_valor_irbpnr']) && $this->nmgp_cmp_hidden['fac_valor_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_valor_irbpnr" value="<?php echo $this->form_encode_input($fac_valor_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_valor_irbpnr_label" id="hidden_field_label_fac_valor_irbpnr" style="<?php echo $sStyleHidden_fac_valor_irbpnr; ?>"><span id="id_label_fac_valor_irbpnr"><?php echo $this->nm_new_label['fac_valor_irbpnr']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_valor_irbpnr_line" id="hidden_field_data_fac_valor_irbpnr" style="<?php echo $sStyleHidden_fac_valor_irbpnr; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_valor_irbpnr_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_valor_irbpnr"]) &&  $this->nmgp_cmp_readonly["fac_valor_irbpnr"] == "on") { 

 ?>
<input type="hidden" name="fac_valor_irbpnr" value="<?php echo $this->form_encode_input($fac_valor_irbpnr) . "\">" . $fac_valor_irbpnr . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_valor_irbpnr" class="sc-ui-readonly-fac_valor_irbpnr css_fac_valor_irbpnr_line" style="<?php echo $sStyleReadLab_fac_valor_irbpnr; ?>"><?php echo $this->form_format_readonly("fac_valor_irbpnr", $this->form_encode_input($this->fac_valor_irbpnr)); ?></span><span id="id_read_off_fac_valor_irbpnr" class="css_read_off_fac_valor_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_valor_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_valor_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_valor_irbpnr" type=text name="fac_valor_irbpnr" value="<?php echo $this->form_encode_input($fac_valor_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_valor_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_valor_irbpnr']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_valor_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_valor_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_valor_irbpnr_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_propina']))
    {
        $this->nm_new_label['fac_propina'] = "" . $this->Ini->Nm_lang['lang_propina'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_propina = $this->fac_propina;
   $sStyleHidden_fac_propina = '';
   if (isset($this->nmgp_cmp_hidden['fac_propina']) && $this->nmgp_cmp_hidden['fac_propina'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_propina']);
       $sStyleHidden_fac_propina = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_propina = 'display: none;';
   $sStyleReadInp_fac_propina = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_propina']) && $this->nmgp_cmp_readonly['fac_propina'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_propina']);
       $sStyleReadLab_fac_propina = '';
       $sStyleReadInp_fac_propina = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_propina']) && $this->nmgp_cmp_hidden['fac_propina'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_propina" value="<?php echo $this->form_encode_input($fac_propina) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_propina_label" id="hidden_field_label_fac_propina" style="<?php echo $sStyleHidden_fac_propina; ?>"><span id="id_label_fac_propina"><?php echo $this->nm_new_label['fac_propina']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_propina_line" id="hidden_field_data_fac_propina" style="<?php echo $sStyleHidden_fac_propina; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_propina_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_propina"]) &&  $this->nmgp_cmp_readonly["fac_propina"] == "on") { 

 ?>
<input type="hidden" name="fac_propina" value="<?php echo $this->form_encode_input($fac_propina) . "\">" . $fac_propina . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_propina" class="sc-ui-readonly-fac_propina css_fac_propina_line" style="<?php echo $sStyleReadLab_fac_propina; ?>"><?php echo $this->form_format_readonly("fac_propina", $this->form_encode_input($this->fac_propina)); ?></span><span id="id_read_off_fac_propina" class="css_read_off_fac_propina<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_propina; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_propina_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_propina" type=text name="fac_propina" value="<?php echo $this->form_encode_input($fac_propina) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_propina']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_propina']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_propina']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_propina_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_propina_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_total']))
    {
        $this->nm_new_label['fac_total'] = "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_total = $this->fac_total;
   $sStyleHidden_fac_total = '';
   if (isset($this->nmgp_cmp_hidden['fac_total']) && $this->nmgp_cmp_hidden['fac_total'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_total']);
       $sStyleHidden_fac_total = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_total = 'display: none;';
   $sStyleReadInp_fac_total = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_total']) && $this->nmgp_cmp_readonly['fac_total'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_total']);
       $sStyleReadLab_fac_total = '';
       $sStyleReadInp_fac_total = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_total']) && $this->nmgp_cmp_hidden['fac_total'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_total" value="<?php echo $this->form_encode_input($fac_total) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fac_total_label" id="hidden_field_label_fac_total" style="<?php echo $sStyleHidden_fac_total; ?>"><span id="id_label_fac_total"><?php echo $this->nm_new_label['fac_total']; ?></span></TD>
    <TD class="scFormDataOdd css_fac_total_line" id="hidden_field_data_fac_total" style="<?php echo $sStyleHidden_fac_total; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%;float:right"><tr><td  class="scFormDataFontOdd css_fac_total_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_total"]) &&  $this->nmgp_cmp_readonly["fac_total"] == "on") { 

 ?>
<input type="hidden" name="fac_total" value="<?php echo $this->form_encode_input($fac_total) . "\">" . $fac_total . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_total" class="sc-ui-readonly-fac_total css_fac_total_line" style="<?php echo $sStyleReadLab_fac_total; ?>"><?php echo $this->form_format_readonly("fac_total", $this->form_encode_input($this->fac_total)); ?></span><span id="id_read_off_fac_total" class="css_read_off_fac_total<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_total; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_total_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_total" type=text name="fac_total" value="<?php echo $this->form_encode_input($fac_total) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_total']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_total']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_total']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_total_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_total_text"></span></td></tr></table></td></tr></table></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_forma_pago'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['forma_pago']))
    {
        $this->nm_new_label['forma_pago'] = "forma_pago";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $forma_pago = $this->forma_pago;
   $sStyleHidden_forma_pago = '';
   if (isset($this->nmgp_cmp_hidden['forma_pago']) && $this->nmgp_cmp_hidden['forma_pago'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['forma_pago']);
       $sStyleHidden_forma_pago = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_forma_pago = 'display: none;';
   $sStyleReadInp_forma_pago = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['forma_pago']) && $this->nmgp_cmp_readonly['forma_pago'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['forma_pago']);
       $sStyleReadLab_forma_pago = '';
       $sStyleReadInp_forma_pago = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['forma_pago']) && $this->nmgp_cmp_hidden['forma_pago'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="forma_pago" value="<?php echo $this->form_encode_input($forma_pago) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_forma_pago_line" id="hidden_field_data_forma_pago" style="<?php echo $sStyleHidden_forma_pago; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_forma_pago_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['embutida_parms'] = "var_factura*scin" . $this->nmgp_dados_form['fac_numero'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['foreign_key']['fp_factura_multiple'] = $this->nmgp_dados_form['fac_numero'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['where_filter'] = "fp_factura_multiple = " . $this->nmgp_dados_form['fac_numero'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['where_detal']  = "fp_factura_multiple = " . $this->nmgp_dados_form['fac_numero'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_factura_multiple']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init'] ]['form_del_forma_pago_factura_multiple']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_factura_multiple_empty.htm' : $this->Ini->link_form_del_forma_pago_factura_multiple_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=200';
if (isset($this->Ini->sc_lig_target['C_@scinf_forma_pago']) && 'nmsc_iframe_liga_form_del_forma_pago_factura_multiple' != $this->Ini->sc_lig_target['C_@scinf_forma_pago'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_forma_pago'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_multiple']['form_del_forma_pago_factura_multiple_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_del_forma_pago_factura_multiple"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="200" width="100%" name="nmsc_iframe_liga_form_del_forma_pago_factura_multiple"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_forma_pago_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_forma_pago_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
