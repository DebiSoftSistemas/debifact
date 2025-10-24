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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_proforma"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_proforma"); } ?></TITLE>
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
.css_read_off_prof_fecha button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_pedido_entregar/form_del_pedido_entregar_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_pedido_entregar_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['last'] : 'off'); ?>";
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
     if (F_name == "prof_fecha")
     {
        $('input[name="prof_fecha"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_fecha"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_fecha"]').removeClass("scFormInputDisabled");
        }
        $('input[id="calendar_prof_fecha"]').prop("disabled", F_opc);
        $("#id_sc_field_prof_fecha").datepicker("destroy");
        if (!F_opc) {
            scJQCalendarAdd("");
        }
     }
     if (F_name == "prof_establecimiento")
     {
        $('select[name="prof_establecimiento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="prof_establecimiento"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="prof_establecimiento"]').removeClass("scFormInputDisabled");
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
     if (F_name == "prof_tipo_entrega")
     {
        $('select[name="prof_tipo_entrega"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="prof_tipo_entrega"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="prof_tipo_entrega"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_ruc")
     {
        $('input[name="prof_ruc"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_ruc"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_ruc"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_nombre")
     {
        $('input[name="prof_nombre"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_nombre"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_nombre"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_email")
     {
        $('input[name="prof_email"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_email"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_email"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_direccion")
     {
        $('input[name="prof_direccion"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_direccion"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_direccion"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_subtotal")
     {
        $('input[name="prof_subtotal"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_subtotal"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_subtotal"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_subtotal_iva")
     {
        $('input[name="prof_subtotal_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_subtotal_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_subtotal_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_subtotal_cero")
     {
        $('input[name="prof_subtotal_cero"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_subtotal_cero"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_subtotal_cero"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_subtotal_no_objeto")
     {
        $('input[name="prof_subtotal_no_objeto"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_subtotal_no_objeto"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_subtotal_no_objeto"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_subtotal_excento")
     {
        $('input[name="prof_subtotal_excento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_subtotal_excento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_subtotal_excento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_total_descuento")
     {
        $('input[name="prof_total_descuento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_total_descuento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_total_descuento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_valor_ice")
     {
        $('input[name="prof_valor_ice"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_valor_ice"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_valor_ice"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_valor_iva")
     {
        $('input[name="prof_valor_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_valor_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_valor_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_valor_irbpnr")
     {
        $('input[name="prof_valor_irbpnr"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_valor_irbpnr"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_valor_irbpnr"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_propina")
     {
        $('input[name="prof_propina"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_propina"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_propina"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "prof_total")
     {
        $('input[name="prof_total"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="prof_total"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="prof_total"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_del_pedido_entregar_mob_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_del_pedido_entregar']['error_buffer']) && '' != $_SESSION['scriptcase']['form_del_pedido_entregar']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_del_pedido_entregar']['error_buffer'];
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
 include_once("form_del_pedido_entregar_mob_js0.php");
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
               action="form_del_pedido_entregar_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_del_pedido_entregar_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_pedido_entregar_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['entregar_pedido'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['entregar_pedido']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['entregar_pedido']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['entregar_pedido']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['entregar_pedido']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['entregar_pedido'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "entregar_pedido", "scBtnFn_entregar_pedido()", "scBtnFn_entregar_pedido()", "sc_entregar_pedido_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label'][''];
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
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "" . $this->Ini->Nm_lang['lang_imprimir'] . "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['group_group_1']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['group_group_1']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['group_group_1']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['group_group_1']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['group_group_1'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "group_group_1", "scBtnGrpShow('group_1_t')", "scBtnGrpShow('group_1_t')", "sc_btgp_btn_group_1_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "__sc_grp__");?>
 
<?php
echo nmButtonGroupTableOutput($this->arr_buttons, "group_group_1", 'group_1', 't', 'app', 'ini');
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['nota_venta'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['nota_venta']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['nota_venta']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['nota_venta']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['nota_venta']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['nota_venta'];
        }
?>
  <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_nota_venta_top">
<?php echo nmButtonOutput($this->arr_buttons, "nota_venta", "scBtnFn_nota_venta()", "scBtnFn_nota_venta()", "sc_nota_venta_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "group_1");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['baucher_factura'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['baucher_factura']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['baucher_factura']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['baucher_factura']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['baucher_factura']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['baucher_factura'];
        }
?>
  <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_baucher_factura_top">
<?php echo nmButtonOutput($this->arr_buttons, "baucher_factura", "scBtnFn_baucher_factura()", "scBtnFn_baucher_factura()", "sc_baucher_factura_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "group_1");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['baucher_guia'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['baucher_guia']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['baucher_guia']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['baucher_guia']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['baucher_guia']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['baucher_guia'];
        }
?>
  <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_baucher_guia_top">
<?php echo nmButtonOutput($this->arr_buttons, "baucher_guia", "scBtnFn_baucher_guia()", "scBtnFn_baucher_guia()", "sc_baucher_guia_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "group_1");?>
  </div>
 
<?php
        $NM_btn = true;
    }
echo nmButtonGroupTableOutput($this->arr_buttons, "", '', '', '', 'fim');
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label'][''];
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
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['prof_cliente']))
   {
       $this->nmgp_cmp_hidden['prof_cliente'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['prof_code_order']))
   {
       $this->nmgp_cmp_hidden['prof_code_order'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['prof_delivery_propio']))
   {
       $this->nmgp_cmp_hidden['prof_delivery_propio'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['prof_estado']))
   {
       $this->nmgp_cmp_hidden['prof_estado'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['prof_guia_remision']))
   {
       $this->nmgp_cmp_hidden['prof_guia_remision'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['prof_numero']))
   {
       $this->nmgp_cmp_hidden['prof_numero'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['prof_propina']))
   {
       $this->nmgp_cmp_hidden['prof_propina'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['prof_secuencial']))
   {
       $this->nmgp_cmp_hidden['prof_secuencial'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['prof_usuario']))
   {
       $this->nmgp_cmp_hidden['prof_usuario'] = 'off';
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






<?php $sStyleHidden_titulo_dumb = ('' == $sStyleHidden_titulo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_titulo_dumb" style="<?php echo $sStyleHidden_titulo_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_proforma'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_fecha']))
    {
        $this->nm_new_label['prof_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_fecha = $this->prof_fecha;
   $sStyleHidden_prof_fecha = '';
   if (isset($this->nmgp_cmp_hidden['prof_fecha']) && $this->nmgp_cmp_hidden['prof_fecha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_fecha']);
       $sStyleHidden_prof_fecha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_fecha = 'display: none;';
   $sStyleReadInp_prof_fecha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_fecha']) && $this->nmgp_cmp_readonly['prof_fecha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_fecha']);
       $sStyleReadLab_prof_fecha = '';
       $sStyleReadInp_prof_fecha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_fecha']) && $this->nmgp_cmp_hidden['prof_fecha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_fecha" value="<?php echo $this->form_encode_input($prof_fecha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_fecha_line" id="hidden_field_data_prof_fecha" style="<?php echo $sStyleHidden_prof_fecha; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_fecha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_fecha_label" style=""><span id="id_label_prof_fecha"><?php echo $this->nm_new_label['prof_fecha']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_fecha"]) &&  $this->nmgp_cmp_readonly["prof_fecha"] == "on") { 

 ?>
<input type="hidden" name="prof_fecha" value="<?php echo $this->form_encode_input($prof_fecha) . "\">" . $prof_fecha . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_fecha" class="sc-ui-readonly-prof_fecha css_prof_fecha_line" style="<?php echo $sStyleReadLab_prof_fecha; ?>"><?php echo $this->form_format_readonly("prof_fecha", $this->form_encode_input($prof_fecha)); ?></span><span id="id_read_off_prof_fecha" class="css_read_off_prof_fecha<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_fecha; ?>"><?php
$tmp_form_data = $this->field_config['prof_fecha']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_prof_fecha_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_fecha" type=text name="prof_fecha" value="<?php echo $this->form_encode_input($prof_fecha) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['prof_fecha']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['prof_fecha']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_fecha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_fecha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['prof_establecimiento']))
   {
       $this->nm_new_label['prof_establecimiento'] = "" . $this->Ini->Nm_lang['lang_establecimiento'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_establecimiento = $this->prof_establecimiento;
   $sStyleHidden_prof_establecimiento = '';
   if (isset($this->nmgp_cmp_hidden['prof_establecimiento']) && $this->nmgp_cmp_hidden['prof_establecimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_establecimiento']);
       $sStyleHidden_prof_establecimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_establecimiento = 'display: none;';
   $sStyleReadInp_prof_establecimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_establecimiento']) && $this->nmgp_cmp_readonly['prof_establecimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_establecimiento']);
       $sStyleReadLab_prof_establecimiento = '';
       $sStyleReadInp_prof_establecimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_establecimiento']) && $this->nmgp_cmp_hidden['prof_establecimiento'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="prof_establecimiento" value="<?php echo $this->form_encode_input($this->prof_establecimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_establecimiento_line" id="hidden_field_data_prof_establecimiento" style="<?php echo $sStyleHidden_prof_establecimiento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_establecimiento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_establecimiento_label" style=""><span id="id_label_prof_establecimiento"><?php echo $this->nm_new_label['prof_establecimiento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_establecimiento"]) &&  $this->nmgp_cmp_readonly["prof_establecimiento"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_establecimiento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_establecimiento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_establecimiento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_establecimiento'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_establecimiento']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_establecimiento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_establecimiento']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_establecimiento'] = array(); 
    }

   $old_value_prof_fecha = $this->prof_fecha;
   $old_value_prof_secuencial = $this->prof_secuencial;
   $old_value_prof_numero = $this->prof_numero;
   $old_value_prof_code_order = $this->prof_code_order;
   $old_value_prof_guia_remision = $this->prof_guia_remision;
   $old_value_prof_cliente = $this->prof_cliente;
   $old_value_prof_subtotal = $this->prof_subtotal;
   $old_value_prof_subtotal_iva = $this->prof_subtotal_iva;
   $old_value_prof_subtotal_cero = $this->prof_subtotal_cero;
   $old_value_prof_subtotal_no_objeto = $this->prof_subtotal_no_objeto;
   $old_value_prof_subtotal_excento = $this->prof_subtotal_excento;
   $old_value_prof_total_descuento = $this->prof_total_descuento;
   $old_value_prof_valor_ice = $this->prof_valor_ice;
   $old_value_prof_valor_iva = $this->prof_valor_iva;
   $old_value_prof_valor_irbpnr = $this->prof_valor_irbpnr;
   $old_value_prof_propina = $this->prof_propina;
   $old_value_prof_total = $this->prof_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_prof_fecha = $this->prof_fecha;
   $unformatted_value_prof_secuencial = $this->prof_secuencial;
   $unformatted_value_prof_numero = $this->prof_numero;
   $unformatted_value_prof_code_order = $this->prof_code_order;
   $unformatted_value_prof_guia_remision = $this->prof_guia_remision;
   $unformatted_value_prof_cliente = $this->prof_cliente;
   $unformatted_value_prof_subtotal = $this->prof_subtotal;
   $unformatted_value_prof_subtotal_iva = $this->prof_subtotal_iva;
   $unformatted_value_prof_subtotal_cero = $this->prof_subtotal_cero;
   $unformatted_value_prof_subtotal_no_objeto = $this->prof_subtotal_no_objeto;
   $unformatted_value_prof_subtotal_excento = $this->prof_subtotal_excento;
   $unformatted_value_prof_total_descuento = $this->prof_total_descuento;
   $unformatted_value_prof_valor_ice = $this->prof_valor_ice;
   $unformatted_value_prof_valor_iva = $this->prof_valor_iva;
   $unformatted_value_prof_valor_irbpnr = $this->prof_valor_irbpnr;
   $unformatted_value_prof_propina = $this->prof_propina;
   $unformatted_value_prof_total = $this->prof_total;

   $nm_comando = "SELECT est_id, est_nombre||' ('||est_codigo||')'  FROM del_establecimiento  ORDER BY est_codigo, est_nombre";

   $this->prof_fecha = $old_value_prof_fecha;
   $this->prof_secuencial = $old_value_prof_secuencial;
   $this->prof_numero = $old_value_prof_numero;
   $this->prof_code_order = $old_value_prof_code_order;
   $this->prof_guia_remision = $old_value_prof_guia_remision;
   $this->prof_cliente = $old_value_prof_cliente;
   $this->prof_subtotal = $old_value_prof_subtotal;
   $this->prof_subtotal_iva = $old_value_prof_subtotal_iva;
   $this->prof_subtotal_cero = $old_value_prof_subtotal_cero;
   $this->prof_subtotal_no_objeto = $old_value_prof_subtotal_no_objeto;
   $this->prof_subtotal_excento = $old_value_prof_subtotal_excento;
   $this->prof_total_descuento = $old_value_prof_total_descuento;
   $this->prof_valor_ice = $old_value_prof_valor_ice;
   $this->prof_valor_iva = $old_value_prof_valor_iva;
   $this->prof_valor_irbpnr = $old_value_prof_valor_irbpnr;
   $this->prof_propina = $old_value_prof_propina;
   $this->prof_total = $old_value_prof_total;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_establecimiento'][] = $rs->fields[0];
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
   $prof_establecimiento_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->prof_establecimiento_1))
          {
              foreach ($this->prof_establecimiento_1 as $tmp_prof_establecimiento)
              {
                  if (trim($tmp_prof_establecimiento) === trim($cadaselect[1])) {$prof_establecimiento_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->prof_establecimiento) && trim($this->prof_establecimiento) === trim($cadaselect[1])) {$prof_establecimiento_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="prof_establecimiento" value="<?php echo $this->form_encode_input($prof_establecimiento) . "\">" . $prof_establecimiento_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_prof_establecimiento();
   $x = 0 ; 
   $prof_establecimiento_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->prof_establecimiento_1))
          {
              foreach ($this->prof_establecimiento_1 as $tmp_prof_establecimiento)
              {
                  if (trim($tmp_prof_establecimiento) === trim($cadaselect[1])) {$prof_establecimiento_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->prof_establecimiento) && trim($this->prof_establecimiento) === trim($cadaselect[1])) { $prof_establecimiento_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($prof_establecimiento_look))
          {
              $prof_establecimiento_look = $this->prof_establecimiento;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_prof_establecimiento\" class=\"css_prof_establecimiento_line\" style=\"" .  $sStyleReadLab_prof_establecimiento . "\">" . $this->form_format_readonly("prof_establecimiento", $this->form_encode_input($prof_establecimiento_look)) . "</span><span id=\"id_read_off_prof_establecimiento\" class=\"css_read_off_prof_establecimiento" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_prof_establecimiento . "\">";
   echo " <span id=\"idAjaxSelect_prof_establecimiento\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_prof_establecimiento_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_prof_establecimiento\" name=\"prof_establecimiento\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->prof_establecimiento) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->prof_establecimiento)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_establecimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_establecimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['prof_tipo_entrega']))
   {
       $this->nm_new_label['prof_tipo_entrega'] = "" . $this->Ini->Nm_lang['lang_tipo_entrega'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_tipo_entrega = $this->prof_tipo_entrega;
   $sStyleHidden_prof_tipo_entrega = '';
   if (isset($this->nmgp_cmp_hidden['prof_tipo_entrega']) && $this->nmgp_cmp_hidden['prof_tipo_entrega'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_tipo_entrega']);
       $sStyleHidden_prof_tipo_entrega = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_tipo_entrega = 'display: none;';
   $sStyleReadInp_prof_tipo_entrega = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_tipo_entrega']) && $this->nmgp_cmp_readonly['prof_tipo_entrega'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_tipo_entrega']);
       $sStyleReadLab_prof_tipo_entrega = '';
       $sStyleReadInp_prof_tipo_entrega = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_tipo_entrega']) && $this->nmgp_cmp_hidden['prof_tipo_entrega'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="prof_tipo_entrega" value="<?php echo $this->form_encode_input($this->prof_tipo_entrega) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_tipo_entrega_line" id="hidden_field_data_prof_tipo_entrega" style="<?php echo $sStyleHidden_prof_tipo_entrega; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_tipo_entrega_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_tipo_entrega_label" style=""><span id="id_label_prof_tipo_entrega"><?php echo $this->nm_new_label['prof_tipo_entrega']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_tipo_entrega"]) &&  $this->nmgp_cmp_readonly["prof_tipo_entrega"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_tipo_entrega']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_tipo_entrega'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_tipo_entrega']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_tipo_entrega'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_tipo_entrega']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_tipo_entrega'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_tipo_entrega']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_tipo_entrega'] = array(); 
    }

   $old_value_prof_fecha = $this->prof_fecha;
   $old_value_prof_secuencial = $this->prof_secuencial;
   $old_value_prof_numero = $this->prof_numero;
   $old_value_prof_code_order = $this->prof_code_order;
   $old_value_prof_guia_remision = $this->prof_guia_remision;
   $old_value_prof_cliente = $this->prof_cliente;
   $old_value_prof_subtotal = $this->prof_subtotal;
   $old_value_prof_subtotal_iva = $this->prof_subtotal_iva;
   $old_value_prof_subtotal_cero = $this->prof_subtotal_cero;
   $old_value_prof_subtotal_no_objeto = $this->prof_subtotal_no_objeto;
   $old_value_prof_subtotal_excento = $this->prof_subtotal_excento;
   $old_value_prof_total_descuento = $this->prof_total_descuento;
   $old_value_prof_valor_ice = $this->prof_valor_ice;
   $old_value_prof_valor_iva = $this->prof_valor_iva;
   $old_value_prof_valor_irbpnr = $this->prof_valor_irbpnr;
   $old_value_prof_propina = $this->prof_propina;
   $old_value_prof_total = $this->prof_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_prof_fecha = $this->prof_fecha;
   $unformatted_value_prof_secuencial = $this->prof_secuencial;
   $unformatted_value_prof_numero = $this->prof_numero;
   $unformatted_value_prof_code_order = $this->prof_code_order;
   $unformatted_value_prof_guia_remision = $this->prof_guia_remision;
   $unformatted_value_prof_cliente = $this->prof_cliente;
   $unformatted_value_prof_subtotal = $this->prof_subtotal;
   $unformatted_value_prof_subtotal_iva = $this->prof_subtotal_iva;
   $unformatted_value_prof_subtotal_cero = $this->prof_subtotal_cero;
   $unformatted_value_prof_subtotal_no_objeto = $this->prof_subtotal_no_objeto;
   $unformatted_value_prof_subtotal_excento = $this->prof_subtotal_excento;
   $unformatted_value_prof_total_descuento = $this->prof_total_descuento;
   $unformatted_value_prof_valor_ice = $this->prof_valor_ice;
   $unformatted_value_prof_valor_iva = $this->prof_valor_iva;
   $unformatted_value_prof_valor_irbpnr = $this->prof_valor_irbpnr;
   $unformatted_value_prof_propina = $this->prof_propina;
   $unformatted_value_prof_total = $this->prof_total;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_del_tipo_emtrega  ORDER BY dec_nombre";

   $this->prof_fecha = $old_value_prof_fecha;
   $this->prof_secuencial = $old_value_prof_secuencial;
   $this->prof_numero = $old_value_prof_numero;
   $this->prof_code_order = $old_value_prof_code_order;
   $this->prof_guia_remision = $old_value_prof_guia_remision;
   $this->prof_cliente = $old_value_prof_cliente;
   $this->prof_subtotal = $old_value_prof_subtotal;
   $this->prof_subtotal_iva = $old_value_prof_subtotal_iva;
   $this->prof_subtotal_cero = $old_value_prof_subtotal_cero;
   $this->prof_subtotal_no_objeto = $old_value_prof_subtotal_no_objeto;
   $this->prof_subtotal_excento = $old_value_prof_subtotal_excento;
   $this->prof_total_descuento = $old_value_prof_total_descuento;
   $this->prof_valor_ice = $old_value_prof_valor_ice;
   $this->prof_valor_iva = $old_value_prof_valor_iva;
   $this->prof_valor_irbpnr = $old_value_prof_valor_irbpnr;
   $this->prof_propina = $old_value_prof_propina;
   $this->prof_total = $old_value_prof_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_tipo_entrega'][] = $rs->fields[0];
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
   $prof_tipo_entrega_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->prof_tipo_entrega_1))
          {
              foreach ($this->prof_tipo_entrega_1 as $tmp_prof_tipo_entrega)
              {
                  if (trim($tmp_prof_tipo_entrega) === trim($cadaselect[1])) {$prof_tipo_entrega_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->prof_tipo_entrega) && trim($this->prof_tipo_entrega) === trim($cadaselect[1])) {$prof_tipo_entrega_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="prof_tipo_entrega" value="<?php echo $this->form_encode_input($prof_tipo_entrega) . "\">" . $prof_tipo_entrega_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_prof_tipo_entrega();
   $x = 0 ; 
   $prof_tipo_entrega_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->prof_tipo_entrega_1))
          {
              foreach ($this->prof_tipo_entrega_1 as $tmp_prof_tipo_entrega)
              {
                  if (trim($tmp_prof_tipo_entrega) === trim($cadaselect[1])) {$prof_tipo_entrega_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->prof_tipo_entrega) && trim($this->prof_tipo_entrega) === trim($cadaselect[1])) { $prof_tipo_entrega_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($prof_tipo_entrega_look))
          {
              $prof_tipo_entrega_look = $this->prof_tipo_entrega;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_prof_tipo_entrega\" class=\"css_prof_tipo_entrega_line\" style=\"" .  $sStyleReadLab_prof_tipo_entrega . "\">" . $this->form_format_readonly("prof_tipo_entrega", $this->form_encode_input($prof_tipo_entrega_look)) . "</span><span id=\"id_read_off_prof_tipo_entrega\" class=\"css_read_off_prof_tipo_entrega" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_prof_tipo_entrega . "\">";
   echo " <span id=\"idAjaxSelect_prof_tipo_entrega\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_prof_tipo_entrega_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_prof_tipo_entrega\" name=\"prof_tipo_entrega\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->prof_tipo_entrega) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->prof_tipo_entrega)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_tipo_entrega_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_tipo_entrega_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['prof_numero']))
           {
               $this->nmgp_cmp_readonly['prof_numero'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['prof_secuencial']))
    {
        $this->nm_new_label['prof_secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_secuencial = $this->prof_secuencial;
   if (!isset($this->nmgp_cmp_hidden['prof_secuencial']))
   {
       $this->nmgp_cmp_hidden['prof_secuencial'] = 'off';
   }
   $sStyleHidden_prof_secuencial = '';
   if (isset($this->nmgp_cmp_hidden['prof_secuencial']) && $this->nmgp_cmp_hidden['prof_secuencial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_secuencial']);
       $sStyleHidden_prof_secuencial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_secuencial = 'display: none;';
   $sStyleReadInp_prof_secuencial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_secuencial']) && $this->nmgp_cmp_readonly['prof_secuencial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_secuencial']);
       $sStyleReadLab_prof_secuencial = '';
       $sStyleReadInp_prof_secuencial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_secuencial']) && $this->nmgp_cmp_hidden['prof_secuencial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_secuencial" value="<?php echo $this->form_encode_input($prof_secuencial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_secuencial_line" id="hidden_field_data_prof_secuencial" style="<?php echo $sStyleHidden_prof_secuencial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_secuencial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_secuencial_label" style=""><span id="id_label_prof_secuencial"><?php echo $this->nm_new_label['prof_secuencial']; ?></span></span><br><input type="hidden" name="prof_secuencial" value="<?php echo $this->form_encode_input($prof_secuencial); ?>"><span id="id_ajax_label_prof_secuencial"><?php echo nl2br($prof_secuencial); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_numero']))
    {
        $this->nm_new_label['prof_numero'] = "Prof Numero";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_numero = $this->prof_numero;
   if (!isset($this->nmgp_cmp_hidden['prof_numero']))
   {
       $this->nmgp_cmp_hidden['prof_numero'] = 'off';
   }
   $sStyleHidden_prof_numero = '';
   if (isset($this->nmgp_cmp_hidden['prof_numero']) && $this->nmgp_cmp_hidden['prof_numero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_numero']);
       $sStyleHidden_prof_numero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_numero = 'display: none;';
   $sStyleReadInp_prof_numero = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["prof_numero"]) &&  $this->nmgp_cmp_readonly["prof_numero"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_numero']);
       $sStyleReadLab_prof_numero = '';
       $sStyleReadInp_prof_numero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_numero']) && $this->nmgp_cmp_hidden['prof_numero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_numero" value="<?php echo $this->form_encode_input($prof_numero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_numero_line" id="hidden_field_data_prof_numero" style="<?php echo $sStyleHidden_prof_numero; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_numero_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_numero_label" style=""><span id="id_label_prof_numero"><?php echo $this->nm_new_label['prof_numero']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['php_cmp_required']['prof_numero']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['php_cmp_required']['prof_numero'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["prof_numero"]) &&  $this->nmgp_cmp_readonly["prof_numero"] == "on")) { 

 ?>
<input type="hidden" name="prof_numero" value="<?php echo $this->form_encode_input($prof_numero) . "\"><span id=\"id_ajax_label_prof_numero\">" . $prof_numero . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_prof_numero" class="sc-ui-readonly-prof_numero css_prof_numero_line" style="<?php echo $sStyleReadLab_prof_numero; ?>"><?php echo $this->form_format_readonly("prof_numero", $this->form_encode_input($this->prof_numero)); ?></span><span id="id_read_off_prof_numero" class="css_read_off_prof_numero<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_numero; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_numero_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_numero" type=text name="prof_numero" value="<?php echo $this->form_encode_input($prof_numero) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_numero']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['prof_numero']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_numero']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_numero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_numero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_code_order']))
    {
        $this->nm_new_label['prof_code_order'] = "Prof Code Order";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_code_order = $this->prof_code_order;
   if (!isset($this->nmgp_cmp_hidden['prof_code_order']))
   {
       $this->nmgp_cmp_hidden['prof_code_order'] = 'off';
   }
   $sStyleHidden_prof_code_order = '';
   if (isset($this->nmgp_cmp_hidden['prof_code_order']) && $this->nmgp_cmp_hidden['prof_code_order'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_code_order']);
       $sStyleHidden_prof_code_order = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_code_order = 'display: none;';
   $sStyleReadInp_prof_code_order = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_code_order']) && $this->nmgp_cmp_readonly['prof_code_order'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_code_order']);
       $sStyleReadLab_prof_code_order = '';
       $sStyleReadInp_prof_code_order = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_code_order']) && $this->nmgp_cmp_hidden['prof_code_order'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_code_order" value="<?php echo $this->form_encode_input($prof_code_order) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_code_order_line" id="hidden_field_data_prof_code_order" style="<?php echo $sStyleHidden_prof_code_order; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_code_order_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_code_order_label" style=""><span id="id_label_prof_code_order"><?php echo $this->nm_new_label['prof_code_order']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_code_order"]) &&  $this->nmgp_cmp_readonly["prof_code_order"] == "on") { 

 ?>
<input type="hidden" name="prof_code_order" value="<?php echo $this->form_encode_input($prof_code_order) . "\">" . $prof_code_order . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_code_order" class="sc-ui-readonly-prof_code_order css_prof_code_order_line" style="<?php echo $sStyleReadLab_prof_code_order; ?>"><?php echo $this->form_format_readonly("prof_code_order", $this->form_encode_input($this->prof_code_order)); ?></span><span id="id_read_off_prof_code_order" class="css_read_off_prof_code_order<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_code_order; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_code_order_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_code_order" type=text name="prof_code_order" value="<?php echo $this->form_encode_input($prof_code_order) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_code_order']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['prof_code_order']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_code_order']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_code_order_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_code_order_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_prof_code_order_dumb = ('' == $sStyleHidden_prof_code_order) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_prof_code_order_dumb" style="<?php echo $sStyleHidden_prof_code_order_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_transportista'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['prof_transportista']))
   {
       $this->nm_new_label['prof_transportista'] = "" . $this->Ini->Nm_lang['lang_transportista'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_transportista = $this->prof_transportista;
   $sStyleHidden_prof_transportista = '';
   if (isset($this->nmgp_cmp_hidden['prof_transportista']) && $this->nmgp_cmp_hidden['prof_transportista'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_transportista']);
       $sStyleHidden_prof_transportista = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_transportista = 'display: none;';
   $sStyleReadInp_prof_transportista = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_transportista']) && $this->nmgp_cmp_readonly['prof_transportista'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_transportista']);
       $sStyleReadLab_prof_transportista = '';
       $sStyleReadInp_prof_transportista = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_transportista']) && $this->nmgp_cmp_hidden['prof_transportista'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="prof_transportista" value="<?php echo $this->form_encode_input($this->prof_transportista) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_transportista_line" id="hidden_field_data_prof_transportista" style="<?php echo $sStyleHidden_prof_transportista; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_transportista_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_transportista_label" style=""><span id="id_label_prof_transportista"><?php echo $this->nm_new_label['prof_transportista']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_transportista"]) &&  $this->nmgp_cmp_readonly["prof_transportista"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_transportista']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_transportista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_transportista']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_transportista'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_transportista']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_transportista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_transportista']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_transportista'] = array(); 
    }

   $old_value_prof_fecha = $this->prof_fecha;
   $old_value_prof_secuencial = $this->prof_secuencial;
   $old_value_prof_numero = $this->prof_numero;
   $old_value_prof_code_order = $this->prof_code_order;
   $old_value_prof_guia_remision = $this->prof_guia_remision;
   $old_value_prof_cliente = $this->prof_cliente;
   $old_value_prof_subtotal = $this->prof_subtotal;
   $old_value_prof_subtotal_iva = $this->prof_subtotal_iva;
   $old_value_prof_subtotal_cero = $this->prof_subtotal_cero;
   $old_value_prof_subtotal_no_objeto = $this->prof_subtotal_no_objeto;
   $old_value_prof_subtotal_excento = $this->prof_subtotal_excento;
   $old_value_prof_total_descuento = $this->prof_total_descuento;
   $old_value_prof_valor_ice = $this->prof_valor_ice;
   $old_value_prof_valor_iva = $this->prof_valor_iva;
   $old_value_prof_valor_irbpnr = $this->prof_valor_irbpnr;
   $old_value_prof_propina = $this->prof_propina;
   $old_value_prof_total = $this->prof_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_prof_fecha = $this->prof_fecha;
   $unformatted_value_prof_secuencial = $this->prof_secuencial;
   $unformatted_value_prof_numero = $this->prof_numero;
   $unformatted_value_prof_code_order = $this->prof_code_order;
   $unformatted_value_prof_guia_remision = $this->prof_guia_remision;
   $unformatted_value_prof_cliente = $this->prof_cliente;
   $unformatted_value_prof_subtotal = $this->prof_subtotal;
   $unformatted_value_prof_subtotal_iva = $this->prof_subtotal_iva;
   $unformatted_value_prof_subtotal_cero = $this->prof_subtotal_cero;
   $unformatted_value_prof_subtotal_no_objeto = $this->prof_subtotal_no_objeto;
   $unformatted_value_prof_subtotal_excento = $this->prof_subtotal_excento;
   $unformatted_value_prof_total_descuento = $this->prof_total_descuento;
   $unformatted_value_prof_valor_ice = $this->prof_valor_ice;
   $unformatted_value_prof_valor_iva = $this->prof_valor_iva;
   $unformatted_value_prof_valor_irbpnr = $this->prof_valor_irbpnr;
   $unformatted_value_prof_propina = $this->prof_propina;
   $unformatted_value_prof_total = $this->prof_total;

   $nm_comando = "SELECT tr_id, tr_nombre  FROM del_transportista  WHERE tr_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY tr_nombre";

   $this->prof_fecha = $old_value_prof_fecha;
   $this->prof_secuencial = $old_value_prof_secuencial;
   $this->prof_numero = $old_value_prof_numero;
   $this->prof_code_order = $old_value_prof_code_order;
   $this->prof_guia_remision = $old_value_prof_guia_remision;
   $this->prof_cliente = $old_value_prof_cliente;
   $this->prof_subtotal = $old_value_prof_subtotal;
   $this->prof_subtotal_iva = $old_value_prof_subtotal_iva;
   $this->prof_subtotal_cero = $old_value_prof_subtotal_cero;
   $this->prof_subtotal_no_objeto = $old_value_prof_subtotal_no_objeto;
   $this->prof_subtotal_excento = $old_value_prof_subtotal_excento;
   $this->prof_total_descuento = $old_value_prof_total_descuento;
   $this->prof_valor_ice = $old_value_prof_valor_ice;
   $this->prof_valor_iva = $old_value_prof_valor_iva;
   $this->prof_valor_irbpnr = $old_value_prof_valor_irbpnr;
   $this->prof_propina = $old_value_prof_propina;
   $this->prof_total = $old_value_prof_total;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lookup_prof_transportista'][] = $rs->fields[0];
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
   $prof_transportista_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->prof_transportista_1))
          {
              foreach ($this->prof_transportista_1 as $tmp_prof_transportista)
              {
                  if (trim($tmp_prof_transportista) === trim($cadaselect[1])) {$prof_transportista_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->prof_transportista) && trim($this->prof_transportista) === trim($cadaselect[1])) {$prof_transportista_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="prof_transportista" value="<?php echo $this->form_encode_input($prof_transportista) . "\">" . $prof_transportista_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_prof_transportista();
   $x = 0 ; 
   $prof_transportista_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->prof_transportista_1))
          {
              foreach ($this->prof_transportista_1 as $tmp_prof_transportista)
              {
                  if (trim($tmp_prof_transportista) === trim($cadaselect[1])) {$prof_transportista_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->prof_transportista) && trim($this->prof_transportista) === trim($cadaselect[1])) { $prof_transportista_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($prof_transportista_look))
          {
              $prof_transportista_look = $this->prof_transportista;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_prof_transportista\" class=\"css_prof_transportista_line\" style=\"" .  $sStyleReadLab_prof_transportista . "\">" . $this->form_format_readonly("prof_transportista", $this->form_encode_input($prof_transportista_look)) . "</span><span id=\"id_read_off_prof_transportista\" class=\"css_read_off_prof_transportista" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_prof_transportista . "\">";
   echo " <span id=\"idAjaxSelect_prof_transportista\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_prof_transportista_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_prof_transportista\" name=\"prof_transportista\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->prof_transportista) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->prof_transportista)) 
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
   if (isset($this->Ini->sc_lig_md5["form_del_transportista"]) && $this->Ini->sc_lig_md5["form_del_transportista"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_del_pedido_entregar_mob_lkpedt_refresh_prof_transportista*scoutnmgp_url_saida*scin*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_pedido_entregar_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_del_pedido_entregar_mob_lkpedt_refresh_prof_transportista*scoutnmgp_url_saida*scin*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "nm_submit_cap('" . $this->Ini->link_form_del_transportista_edit. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_form_del_transportista_edit. "', '" . $Md5_Lig . "')", "fldedt_prof_transportista", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_transportista_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_transportista_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_delivery_propio']))
    {
        $this->nm_new_label['prof_delivery_propio'] = "Prof Delivery Propio";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_delivery_propio = $this->prof_delivery_propio;
   if (!isset($this->nmgp_cmp_hidden['prof_delivery_propio']))
   {
       $this->nmgp_cmp_hidden['prof_delivery_propio'] = 'off';
   }
   $sStyleHidden_prof_delivery_propio = '';
   if (isset($this->nmgp_cmp_hidden['prof_delivery_propio']) && $this->nmgp_cmp_hidden['prof_delivery_propio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_delivery_propio']);
       $sStyleHidden_prof_delivery_propio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_delivery_propio = 'display: none;';
   $sStyleReadInp_prof_delivery_propio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_delivery_propio']) && $this->nmgp_cmp_readonly['prof_delivery_propio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_delivery_propio']);
       $sStyleReadLab_prof_delivery_propio = '';
       $sStyleReadInp_prof_delivery_propio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_delivery_propio']) && $this->nmgp_cmp_hidden['prof_delivery_propio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_delivery_propio" value="<?php echo $this->form_encode_input($prof_delivery_propio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_delivery_propio_line" id="hidden_field_data_prof_delivery_propio" style="<?php echo $sStyleHidden_prof_delivery_propio; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_delivery_propio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_delivery_propio_label" style=""><span id="id_label_prof_delivery_propio"><?php echo $this->nm_new_label['prof_delivery_propio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_delivery_propio"]) &&  $this->nmgp_cmp_readonly["prof_delivery_propio"] == "on") { 

 ?>
<input type="hidden" name="prof_delivery_propio" value="<?php echo $this->form_encode_input($prof_delivery_propio) . "\">" . $prof_delivery_propio . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_delivery_propio" class="sc-ui-readonly-prof_delivery_propio css_prof_delivery_propio_line" style="<?php echo $sStyleReadLab_prof_delivery_propio; ?>"><?php echo $this->form_format_readonly("prof_delivery_propio", $this->form_encode_input($this->prof_delivery_propio)); ?></span><span id="id_read_off_prof_delivery_propio" class="css_read_off_prof_delivery_propio<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_delivery_propio; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_delivery_propio_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_delivery_propio" type=text name="prof_delivery_propio" value="<?php echo $this->form_encode_input($prof_delivery_propio) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_delivery_propio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_delivery_propio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_guia_remision']))
    {
        $this->nm_new_label['prof_guia_remision'] = "Prof Guia Remision";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_guia_remision = $this->prof_guia_remision;
   if (!isset($this->nmgp_cmp_hidden['prof_guia_remision']))
   {
       $this->nmgp_cmp_hidden['prof_guia_remision'] = 'off';
   }
   $sStyleHidden_prof_guia_remision = '';
   if (isset($this->nmgp_cmp_hidden['prof_guia_remision']) && $this->nmgp_cmp_hidden['prof_guia_remision'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_guia_remision']);
       $sStyleHidden_prof_guia_remision = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_guia_remision = 'display: none;';
   $sStyleReadInp_prof_guia_remision = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_guia_remision']) && $this->nmgp_cmp_readonly['prof_guia_remision'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_guia_remision']);
       $sStyleReadLab_prof_guia_remision = '';
       $sStyleReadInp_prof_guia_remision = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_guia_remision']) && $this->nmgp_cmp_hidden['prof_guia_remision'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_guia_remision" value="<?php echo $this->form_encode_input($prof_guia_remision) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_guia_remision_line" id="hidden_field_data_prof_guia_remision" style="<?php echo $sStyleHidden_prof_guia_remision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_guia_remision_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_guia_remision_label" style=""><span id="id_label_prof_guia_remision"><?php echo $this->nm_new_label['prof_guia_remision']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_guia_remision"]) &&  $this->nmgp_cmp_readonly["prof_guia_remision"] == "on") { 

 ?>
<input type="hidden" name="prof_guia_remision" value="<?php echo $this->form_encode_input($prof_guia_remision) . "\">" . $prof_guia_remision . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_guia_remision" class="sc-ui-readonly-prof_guia_remision css_prof_guia_remision_line" style="<?php echo $sStyleReadLab_prof_guia_remision; ?>"><?php echo $this->form_format_readonly("prof_guia_remision", $this->form_encode_input($this->prof_guia_remision)); ?></span><span id="id_read_off_prof_guia_remision" class="css_read_off_prof_guia_remision<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_guia_remision; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_guia_remision_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_guia_remision" type=text name="prof_guia_remision" value="<?php echo $this->form_encode_input($prof_guia_remision) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_guia_remision']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['prof_guia_remision']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_guia_remision']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_guia_remision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_guia_remision_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_prof_guia_remision_dumb = ('' == $sStyleHidden_prof_guia_remision) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_prof_guia_remision_dumb" style="<?php echo $sStyleHidden_prof_guia_remision_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_cliente'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_ruc']))
    {
        $this->nm_new_label['prof_ruc'] = "" . $this->Ini->Nm_lang['lang_ruc'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_ruc = $this->prof_ruc;
   $sStyleHidden_prof_ruc = '';
   if (isset($this->nmgp_cmp_hidden['prof_ruc']) && $this->nmgp_cmp_hidden['prof_ruc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_ruc']);
       $sStyleHidden_prof_ruc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_ruc = 'display: none;';
   $sStyleReadInp_prof_ruc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_ruc']) && $this->nmgp_cmp_readonly['prof_ruc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_ruc']);
       $sStyleReadLab_prof_ruc = '';
       $sStyleReadInp_prof_ruc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_ruc']) && $this->nmgp_cmp_hidden['prof_ruc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_ruc" value="<?php echo $this->form_encode_input($prof_ruc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_ruc_line" id="hidden_field_data_prof_ruc" style="<?php echo $sStyleHidden_prof_ruc; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_ruc_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_ruc_label" style=""><span id="id_label_prof_ruc"><?php echo $this->nm_new_label['prof_ruc']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_ruc"]) &&  $this->nmgp_cmp_readonly["prof_ruc"] == "on") { 

 ?>
<input type="hidden" name="prof_ruc" value="<?php echo $this->form_encode_input($prof_ruc) . "\">" . $prof_ruc . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_ruc" class="sc-ui-readonly-prof_ruc css_prof_ruc_line" style="<?php echo $sStyleReadLab_prof_ruc; ?>"><?php echo $this->form_format_readonly("prof_ruc", $this->form_encode_input($this->prof_ruc)); ?></span><span id="id_read_off_prof_ruc" class="css_read_off_prof_ruc<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_ruc; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_ruc_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_ruc" type=text name="prof_ruc" value="<?php echo $this->form_encode_input($prof_ruc) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_ruc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_ruc_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_nombre']))
    {
        $this->nm_new_label['prof_nombre'] = "" . $this->Ini->Nm_lang['lang_nombre'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_nombre = $this->prof_nombre;
   $sStyleHidden_prof_nombre = '';
   if (isset($this->nmgp_cmp_hidden['prof_nombre']) && $this->nmgp_cmp_hidden['prof_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_nombre']);
       $sStyleHidden_prof_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_nombre = 'display: none;';
   $sStyleReadInp_prof_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_nombre']) && $this->nmgp_cmp_readonly['prof_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_nombre']);
       $sStyleReadLab_prof_nombre = '';
       $sStyleReadInp_prof_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_nombre']) && $this->nmgp_cmp_hidden['prof_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_nombre" value="<?php echo $this->form_encode_input($prof_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_nombre_line" id="hidden_field_data_prof_nombre" style="<?php echo $sStyleHidden_prof_nombre; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_nombre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_nombre_label" style=""><span id="id_label_prof_nombre"><?php echo $this->nm_new_label['prof_nombre']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_nombre"]) &&  $this->nmgp_cmp_readonly["prof_nombre"] == "on") { 

 ?>
<input type="hidden" name="prof_nombre" value="<?php echo $this->form_encode_input($prof_nombre) . "\">" . $prof_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_nombre" class="sc-ui-readonly-prof_nombre css_prof_nombre_line" style="<?php echo $sStyleReadLab_prof_nombre; ?>"><?php echo $this->form_format_readonly("prof_nombre", $this->form_encode_input($this->prof_nombre)); ?></span><span id="id_read_off_prof_nombre" class="css_read_off_prof_nombre<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_nombre_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_nombre" type=text name="prof_nombre" value="<?php echo $this->form_encode_input($prof_nombre) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_nombre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_email']))
    {
        $this->nm_new_label['prof_email'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_email = $this->prof_email;
   $sStyleHidden_prof_email = '';
   if (isset($this->nmgp_cmp_hidden['prof_email']) && $this->nmgp_cmp_hidden['prof_email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_email']);
       $sStyleHidden_prof_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_email = 'display: none;';
   $sStyleReadInp_prof_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_email']) && $this->nmgp_cmp_readonly['prof_email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_email']);
       $sStyleReadLab_prof_email = '';
       $sStyleReadInp_prof_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_email']) && $this->nmgp_cmp_hidden['prof_email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_email" value="<?php echo $this->form_encode_input($prof_email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_email_line" id="hidden_field_data_prof_email" style="<?php echo $sStyleHidden_prof_email; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_email_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_email_label" style=""><span id="id_label_prof_email"><?php echo $this->nm_new_label['prof_email']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_email"]) &&  $this->nmgp_cmp_readonly["prof_email"] == "on") { 

 ?>
<input type="hidden" name="prof_email" value="<?php echo $this->form_encode_input($prof_email) . "\">" . $prof_email . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_email" class="sc-ui-readonly-prof_email css_prof_email_line" style="<?php echo $sStyleReadLab_prof_email; ?>"><?php echo $this->form_format_readonly("prof_email", $this->form_encode_input($this->prof_email)); ?></span><span id="id_read_off_prof_email" class="css_read_off_prof_email<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_email_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_email" type=text name="prof_email" value="<?php echo $this->form_encode_input($prof_email) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_email_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_direccion']))
    {
        $this->nm_new_label['prof_direccion'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_direccion = $this->prof_direccion;
   $sStyleHidden_prof_direccion = '';
   if (isset($this->nmgp_cmp_hidden['prof_direccion']) && $this->nmgp_cmp_hidden['prof_direccion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_direccion']);
       $sStyleHidden_prof_direccion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_direccion = 'display: none;';
   $sStyleReadInp_prof_direccion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_direccion']) && $this->nmgp_cmp_readonly['prof_direccion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_direccion']);
       $sStyleReadLab_prof_direccion = '';
       $sStyleReadInp_prof_direccion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_direccion']) && $this->nmgp_cmp_hidden['prof_direccion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_direccion" value="<?php echo $this->form_encode_input($prof_direccion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_direccion_line" id="hidden_field_data_prof_direccion" style="<?php echo $sStyleHidden_prof_direccion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_direccion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_direccion_label" style=""><span id="id_label_prof_direccion"><?php echo $this->nm_new_label['prof_direccion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_direccion"]) &&  $this->nmgp_cmp_readonly["prof_direccion"] == "on") { 

 ?>
<input type="hidden" name="prof_direccion" value="<?php echo $this->form_encode_input($prof_direccion) . "\">" . $prof_direccion . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_direccion" class="sc-ui-readonly-prof_direccion css_prof_direccion_line" style="<?php echo $sStyleReadLab_prof_direccion; ?>"><?php echo $this->form_format_readonly("prof_direccion", $this->form_encode_input($this->prof_direccion)); ?></span><span id="id_read_off_prof_direccion" class="css_read_off_prof_direccion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_direccion; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_direccion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_direccion" type=text name="prof_direccion" value="<?php echo $this->form_encode_input($prof_direccion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_direccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_direccion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_descripcion']))
    {
        $this->nm_new_label['prof_descripcion'] = "" . $this->Ini->Nm_lang['lang_comentario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_descripcion = $this->prof_descripcion;
   $sStyleHidden_prof_descripcion = '';
   if (isset($this->nmgp_cmp_hidden['prof_descripcion']) && $this->nmgp_cmp_hidden['prof_descripcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_descripcion']);
       $sStyleHidden_prof_descripcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_descripcion = 'display: none;';
   $sStyleReadInp_prof_descripcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_descripcion']) && $this->nmgp_cmp_readonly['prof_descripcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_descripcion']);
       $sStyleReadLab_prof_descripcion = '';
       $sStyleReadInp_prof_descripcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_descripcion']) && $this->nmgp_cmp_hidden['prof_descripcion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_descripcion" value="<?php echo $this->form_encode_input($prof_descripcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_descripcion_line" id="hidden_field_data_prof_descripcion" style="<?php echo $sStyleHidden_prof_descripcion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_descripcion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_descripcion_label" style=""><span id="id_label_prof_descripcion"><?php echo $this->nm_new_label['prof_descripcion']; ?></span></span><br>
<?php
$prof_descripcion_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($prof_descripcion));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_descripcion"]) &&  $this->nmgp_cmp_readonly["prof_descripcion"] == "on") { 

 ?>
<input type="hidden" name="prof_descripcion" value="<?php echo $this->form_encode_input($prof_descripcion) . "\">" . $prof_descripcion_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_descripcion" class="sc-ui-readonly-prof_descripcion css_prof_descripcion_line" style="<?php echo $sStyleReadLab_prof_descripcion; ?>"><?php echo $this->form_format_readonly("prof_descripcion", $this->form_encode_input($prof_descripcion_val)); ?></span><span id="id_read_off_prof_descripcion" class="css_read_off_prof_descripcion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_descripcion; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_prof_descripcion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;" name="prof_descripcion" id="id_sc_field_prof_descripcion" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $prof_descripcion; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_descripcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_descripcion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_cliente']))
    {
        $this->nm_new_label['prof_cliente'] = "" . $this->Ini->Nm_lang['lang_cliente'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_cliente = $this->prof_cliente;
   if (!isset($this->nmgp_cmp_hidden['prof_cliente']))
   {
       $this->nmgp_cmp_hidden['prof_cliente'] = 'off';
   }
   $sStyleHidden_prof_cliente = '';
   if (isset($this->nmgp_cmp_hidden['prof_cliente']) && $this->nmgp_cmp_hidden['prof_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_cliente']);
       $sStyleHidden_prof_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_cliente = 'display: none;';
   $sStyleReadInp_prof_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_cliente']) && $this->nmgp_cmp_readonly['prof_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_cliente']);
       $sStyleReadLab_prof_cliente = '';
       $sStyleReadInp_prof_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_cliente']) && $this->nmgp_cmp_hidden['prof_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_cliente" value="<?php echo $this->form_encode_input($prof_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_cliente_line" id="hidden_field_data_prof_cliente" style="<?php echo $sStyleHidden_prof_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_cliente_label" style=""><span id="id_label_prof_cliente"><?php echo $this->nm_new_label['prof_cliente']; ?></span></span><br><input type="hidden" name="prof_cliente" value="<?php echo $this->form_encode_input($prof_cliente); ?>"><span id="id_ajax_label_prof_cliente"><?php echo nl2br($prof_cliente); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_prof_cliente_dumb = ('' == $sStyleHidden_prof_cliente) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_prof_cliente_dumb" style="<?php echo $sStyleHidden_prof_cliente_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_direccion_entrega'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lugar_envio']))
    {
        $this->nm_new_label['lugar_envio'] = "" . $this->Ini->Nm_lang['lang_direccion_entrega'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lugar_envio = $this->lugar_envio;
   $sStyleHidden_lugar_envio = '';
   if (isset($this->nmgp_cmp_hidden['lugar_envio']) && $this->nmgp_cmp_hidden['lugar_envio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lugar_envio']);
       $sStyleHidden_lugar_envio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lugar_envio = 'display: none;';
   $sStyleReadInp_lugar_envio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lugar_envio']) && $this->nmgp_cmp_readonly['lugar_envio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lugar_envio']);
       $sStyleReadLab_lugar_envio = '';
       $sStyleReadInp_lugar_envio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lugar_envio']) && $this->nmgp_cmp_hidden['lugar_envio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lugar_envio" value="<?php echo $this->form_encode_input($lugar_envio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_lugar_envio_line" id="hidden_field_data_lugar_envio" style="<?php echo $sStyleHidden_lugar_envio; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_lugar_envio_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_lugar_envio'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_lugar_envio'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_lugar_envio'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_liga_form_insert'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_liga_form_update'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_liga_form_delete'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['embutida_parms'] = "NM_btn_insert*scinN*scoutNM_btn_update*scinN*scoutNM_btn_delete*scinN*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['foreign_key']['dep_id_pedido'] = $this->nmgp_dados_form['prof_numero'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['where_filter'] = "dep_id_pedido = " . $this->nmgp_dados_form['prof_numero'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['where_detal']  = "dep_id_pedido = " . $this->nmgp_dados_form['prof_numero'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_pedido_entregar_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_pedido_entregar_mob_empty.htm' : $this->Ini->link_form_del_direccion_entrega_pedido_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init'] ]['form_del_direccion_entrega_pedido'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_lugar_envio']) && 'nmsc_iframe_liga_form_del_direccion_entrega_pedido_mob' != $this->Ini->sc_lig_target['C_@scinf_lugar_envio'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_lugar_envio'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_direccion_entrega_pedido_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_lugar_envio'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_del_direccion_entrega_pedido_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_del_direccion_entrega_pedido_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lugar_envio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lugar_envio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_lugar_envio_dumb = ('' == $sStyleHidden_lugar_envio) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_lugar_envio_dumb" style="<?php echo $sStyleHidden_lugar_envio_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_detalle'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['detalles']))
    {
        $this->nm_new_label['detalles'] = "detalles";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $detalles = $this->detalles;
   $sStyleHidden_detalles = '';
   if (isset($this->nmgp_cmp_hidden['detalles']) && $this->nmgp_cmp_hidden['detalles'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['detalles']);
       $sStyleHidden_detalles = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_detalles = 'display: none;';
   $sStyleReadInp_detalles = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['detalles']) && $this->nmgp_cmp_readonly['detalles'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['detalles']);
       $sStyleReadLab_detalles = '';
       $sStyleReadInp_detalles = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['detalles']) && $this->nmgp_cmp_hidden['detalles'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="detalles" value="<?php echo $this->form_encode_input($detalles) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_detalles_line" id="hidden_field_data_detalles" style="<?php echo $sStyleHidden_detalles; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_detalles_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalles'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalles'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalles'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_liga_form_insert'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_liga_form_update'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_liga_form_delete'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['embutida_parms'] = "var_proforma*scin" . $this->nmgp_dados_form['prof_numero'] . "*scoutNM_btn_insert*scinN*scoutNM_btn_update*scinN*scoutNM_btn_delete*scinN*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['foreign_key']['dp_pedido_convenio'] = $this->nmgp_dados_form['prof_numero'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['where_filter'] = "dp_pedido_convenio = " . $this->nmgp_dados_form['prof_numero'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['where_detal']  = "dp_pedido_convenio = " . $this->nmgp_dados_form['prof_numero'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_pedido_entregar_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_pedido_entregar_mob_empty.htm' : $this->Ini->link_form_del_detalle_pedido_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=440';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init'] ]['form_del_detalle_pedido'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_detalles']) && 'nmsc_iframe_liga_form_del_detalle_pedido_mob' != $this->Ini->sc_lig_target['C_@scinf_detalles'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_detalles'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_detalle_pedido_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_detalles'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_del_detalle_pedido_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="440" width="100%" name="nmsc_iframe_liga_form_del_detalle_pedido_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_detalles_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_detalles_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_detalles_dumb = ('' == $sStyleHidden_detalles) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_detalles_dumb" style="<?php echo $sStyleHidden_detalles_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_totales'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_subtotal']))
    {
        $this->nm_new_label['prof_subtotal'] = "" . $this->Ini->Nm_lang['lang_subtotal'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_subtotal = $this->prof_subtotal;
   $sStyleHidden_prof_subtotal = '';
   if (isset($this->nmgp_cmp_hidden['prof_subtotal']) && $this->nmgp_cmp_hidden['prof_subtotal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_subtotal']);
       $sStyleHidden_prof_subtotal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_subtotal = 'display: none;';
   $sStyleReadInp_prof_subtotal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_subtotal']) && $this->nmgp_cmp_readonly['prof_subtotal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_subtotal']);
       $sStyleReadLab_prof_subtotal = '';
       $sStyleReadInp_prof_subtotal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_subtotal']) && $this->nmgp_cmp_hidden['prof_subtotal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_subtotal" value="<?php echo $this->form_encode_input($prof_subtotal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_subtotal_line" id="hidden_field_data_prof_subtotal" style="<?php echo $sStyleHidden_prof_subtotal; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_subtotal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_subtotal_label" style=""><span id="id_label_prof_subtotal"><?php echo $this->nm_new_label['prof_subtotal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_subtotal"]) &&  $this->nmgp_cmp_readonly["prof_subtotal"] == "on") { 

 ?>
<input type="hidden" name="prof_subtotal" value="<?php echo $this->form_encode_input($prof_subtotal) . "\">" . $prof_subtotal . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_subtotal" class="sc-ui-readonly-prof_subtotal css_prof_subtotal_line" style="<?php echo $sStyleReadLab_prof_subtotal; ?>"><?php echo $this->form_format_readonly("prof_subtotal", $this->form_encode_input($this->prof_subtotal)); ?></span><span id="id_read_off_prof_subtotal" class="css_read_off_prof_subtotal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_subtotal; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_subtotal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_subtotal" type=text name="prof_subtotal" value="<?php echo $this->form_encode_input($prof_subtotal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_subtotal']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_subtotal']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_subtotal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_subtotal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_subtotal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_subtotal_iva']))
    {
        $this->nm_new_label['prof_subtotal_iva'] = "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_subtotal_iva = $this->prof_subtotal_iva;
   $sStyleHidden_prof_subtotal_iva = '';
   if (isset($this->nmgp_cmp_hidden['prof_subtotal_iva']) && $this->nmgp_cmp_hidden['prof_subtotal_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_subtotal_iva']);
       $sStyleHidden_prof_subtotal_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_subtotal_iva = 'display: none;';
   $sStyleReadInp_prof_subtotal_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_subtotal_iva']) && $this->nmgp_cmp_readonly['prof_subtotal_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_subtotal_iva']);
       $sStyleReadLab_prof_subtotal_iva = '';
       $sStyleReadInp_prof_subtotal_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_subtotal_iva']) && $this->nmgp_cmp_hidden['prof_subtotal_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_subtotal_iva" value="<?php echo $this->form_encode_input($prof_subtotal_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_subtotal_iva_line" id="hidden_field_data_prof_subtotal_iva" style="<?php echo $sStyleHidden_prof_subtotal_iva; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_subtotal_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_subtotal_iva_label" style=""><span id="id_label_prof_subtotal_iva"><?php echo $this->nm_new_label['prof_subtotal_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_subtotal_iva"]) &&  $this->nmgp_cmp_readonly["prof_subtotal_iva"] == "on") { 

 ?>
<input type="hidden" name="prof_subtotal_iva" value="<?php echo $this->form_encode_input($prof_subtotal_iva) . "\">" . $prof_subtotal_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_subtotal_iva" class="sc-ui-readonly-prof_subtotal_iva css_prof_subtotal_iva_line" style="<?php echo $sStyleReadLab_prof_subtotal_iva; ?>"><?php echo $this->form_format_readonly("prof_subtotal_iva", $this->form_encode_input($this->prof_subtotal_iva)); ?></span><span id="id_read_off_prof_subtotal_iva" class="css_read_off_prof_subtotal_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_subtotal_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_subtotal_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_subtotal_iva" type=text name="prof_subtotal_iva" value="<?php echo $this->form_encode_input($prof_subtotal_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_subtotal_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_subtotal_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_subtotal_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_subtotal_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_subtotal_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_subtotal_cero']))
    {
        $this->nm_new_label['prof_subtotal_cero'] = "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_subtotal_cero = $this->prof_subtotal_cero;
   $sStyleHidden_prof_subtotal_cero = '';
   if (isset($this->nmgp_cmp_hidden['prof_subtotal_cero']) && $this->nmgp_cmp_hidden['prof_subtotal_cero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_subtotal_cero']);
       $sStyleHidden_prof_subtotal_cero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_subtotal_cero = 'display: none;';
   $sStyleReadInp_prof_subtotal_cero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_subtotal_cero']) && $this->nmgp_cmp_readonly['prof_subtotal_cero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_subtotal_cero']);
       $sStyleReadLab_prof_subtotal_cero = '';
       $sStyleReadInp_prof_subtotal_cero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_subtotal_cero']) && $this->nmgp_cmp_hidden['prof_subtotal_cero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_subtotal_cero" value="<?php echo $this->form_encode_input($prof_subtotal_cero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_subtotal_cero_line" id="hidden_field_data_prof_subtotal_cero" style="<?php echo $sStyleHidden_prof_subtotal_cero; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_subtotal_cero_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_subtotal_cero_label" style=""><span id="id_label_prof_subtotal_cero"><?php echo $this->nm_new_label['prof_subtotal_cero']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_subtotal_cero"]) &&  $this->nmgp_cmp_readonly["prof_subtotal_cero"] == "on") { 

 ?>
<input type="hidden" name="prof_subtotal_cero" value="<?php echo $this->form_encode_input($prof_subtotal_cero) . "\">" . $prof_subtotal_cero . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_subtotal_cero" class="sc-ui-readonly-prof_subtotal_cero css_prof_subtotal_cero_line" style="<?php echo $sStyleReadLab_prof_subtotal_cero; ?>"><?php echo $this->form_format_readonly("prof_subtotal_cero", $this->form_encode_input($this->prof_subtotal_cero)); ?></span><span id="id_read_off_prof_subtotal_cero" class="css_read_off_prof_subtotal_cero<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_subtotal_cero; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_subtotal_cero_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_subtotal_cero" type=text name="prof_subtotal_cero" value="<?php echo $this->form_encode_input($prof_subtotal_cero) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_subtotal_cero']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_subtotal_cero']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_subtotal_cero']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_subtotal_cero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_subtotal_cero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_subtotal_no_objeto']))
    {
        $this->nm_new_label['prof_subtotal_no_objeto'] = "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_subtotal_no_objeto = $this->prof_subtotal_no_objeto;
   $sStyleHidden_prof_subtotal_no_objeto = '';
   if (isset($this->nmgp_cmp_hidden['prof_subtotal_no_objeto']) && $this->nmgp_cmp_hidden['prof_subtotal_no_objeto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_subtotal_no_objeto']);
       $sStyleHidden_prof_subtotal_no_objeto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_subtotal_no_objeto = 'display: none;';
   $sStyleReadInp_prof_subtotal_no_objeto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_subtotal_no_objeto']) && $this->nmgp_cmp_readonly['prof_subtotal_no_objeto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_subtotal_no_objeto']);
       $sStyleReadLab_prof_subtotal_no_objeto = '';
       $sStyleReadInp_prof_subtotal_no_objeto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_subtotal_no_objeto']) && $this->nmgp_cmp_hidden['prof_subtotal_no_objeto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_subtotal_no_objeto" value="<?php echo $this->form_encode_input($prof_subtotal_no_objeto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_subtotal_no_objeto_line" id="hidden_field_data_prof_subtotal_no_objeto" style="<?php echo $sStyleHidden_prof_subtotal_no_objeto; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_subtotal_no_objeto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_subtotal_no_objeto_label" style=""><span id="id_label_prof_subtotal_no_objeto"><?php echo $this->nm_new_label['prof_subtotal_no_objeto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_subtotal_no_objeto"]) &&  $this->nmgp_cmp_readonly["prof_subtotal_no_objeto"] == "on") { 

 ?>
<input type="hidden" name="prof_subtotal_no_objeto" value="<?php echo $this->form_encode_input($prof_subtotal_no_objeto) . "\">" . $prof_subtotal_no_objeto . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_subtotal_no_objeto" class="sc-ui-readonly-prof_subtotal_no_objeto css_prof_subtotal_no_objeto_line" style="<?php echo $sStyleReadLab_prof_subtotal_no_objeto; ?>"><?php echo $this->form_format_readonly("prof_subtotal_no_objeto", $this->form_encode_input($this->prof_subtotal_no_objeto)); ?></span><span id="id_read_off_prof_subtotal_no_objeto" class="css_read_off_prof_subtotal_no_objeto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_subtotal_no_objeto; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_subtotal_no_objeto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_subtotal_no_objeto" type=text name="prof_subtotal_no_objeto" value="<?php echo $this->form_encode_input($prof_subtotal_no_objeto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_subtotal_no_objeto']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_subtotal_no_objeto']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_subtotal_no_objeto']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_subtotal_no_objeto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_subtotal_no_objeto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_subtotal_excento']))
    {
        $this->nm_new_label['prof_subtotal_excento'] = "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_subtotal_excento = $this->prof_subtotal_excento;
   $sStyleHidden_prof_subtotal_excento = '';
   if (isset($this->nmgp_cmp_hidden['prof_subtotal_excento']) && $this->nmgp_cmp_hidden['prof_subtotal_excento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_subtotal_excento']);
       $sStyleHidden_prof_subtotal_excento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_subtotal_excento = 'display: none;';
   $sStyleReadInp_prof_subtotal_excento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_subtotal_excento']) && $this->nmgp_cmp_readonly['prof_subtotal_excento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_subtotal_excento']);
       $sStyleReadLab_prof_subtotal_excento = '';
       $sStyleReadInp_prof_subtotal_excento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_subtotal_excento']) && $this->nmgp_cmp_hidden['prof_subtotal_excento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_subtotal_excento" value="<?php echo $this->form_encode_input($prof_subtotal_excento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_subtotal_excento_line" id="hidden_field_data_prof_subtotal_excento" style="<?php echo $sStyleHidden_prof_subtotal_excento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_subtotal_excento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_subtotal_excento_label" style=""><span id="id_label_prof_subtotal_excento"><?php echo $this->nm_new_label['prof_subtotal_excento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_subtotal_excento"]) &&  $this->nmgp_cmp_readonly["prof_subtotal_excento"] == "on") { 

 ?>
<input type="hidden" name="prof_subtotal_excento" value="<?php echo $this->form_encode_input($prof_subtotal_excento) . "\">" . $prof_subtotal_excento . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_subtotal_excento" class="sc-ui-readonly-prof_subtotal_excento css_prof_subtotal_excento_line" style="<?php echo $sStyleReadLab_prof_subtotal_excento; ?>"><?php echo $this->form_format_readonly("prof_subtotal_excento", $this->form_encode_input($this->prof_subtotal_excento)); ?></span><span id="id_read_off_prof_subtotal_excento" class="css_read_off_prof_subtotal_excento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_subtotal_excento; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_subtotal_excento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_subtotal_excento" type=text name="prof_subtotal_excento" value="<?php echo $this->form_encode_input($prof_subtotal_excento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_subtotal_excento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_subtotal_excento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_subtotal_excento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_subtotal_excento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_subtotal_excento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_total_descuento']))
    {
        $this->nm_new_label['prof_total_descuento'] = "" . $this->Ini->Nm_lang['lang_descuento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_total_descuento = $this->prof_total_descuento;
   $sStyleHidden_prof_total_descuento = '';
   if (isset($this->nmgp_cmp_hidden['prof_total_descuento']) && $this->nmgp_cmp_hidden['prof_total_descuento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_total_descuento']);
       $sStyleHidden_prof_total_descuento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_total_descuento = 'display: none;';
   $sStyleReadInp_prof_total_descuento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_total_descuento']) && $this->nmgp_cmp_readonly['prof_total_descuento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_total_descuento']);
       $sStyleReadLab_prof_total_descuento = '';
       $sStyleReadInp_prof_total_descuento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_total_descuento']) && $this->nmgp_cmp_hidden['prof_total_descuento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_total_descuento" value="<?php echo $this->form_encode_input($prof_total_descuento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_total_descuento_line" id="hidden_field_data_prof_total_descuento" style="<?php echo $sStyleHidden_prof_total_descuento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_total_descuento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_total_descuento_label" style=""><span id="id_label_prof_total_descuento"><?php echo $this->nm_new_label['prof_total_descuento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_total_descuento"]) &&  $this->nmgp_cmp_readonly["prof_total_descuento"] == "on") { 

 ?>
<input type="hidden" name="prof_total_descuento" value="<?php echo $this->form_encode_input($prof_total_descuento) . "\">" . $prof_total_descuento . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_total_descuento" class="sc-ui-readonly-prof_total_descuento css_prof_total_descuento_line" style="<?php echo $sStyleReadLab_prof_total_descuento; ?>"><?php echo $this->form_format_readonly("prof_total_descuento", $this->form_encode_input($this->prof_total_descuento)); ?></span><span id="id_read_off_prof_total_descuento" class="css_read_off_prof_total_descuento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_total_descuento; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_total_descuento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_total_descuento" type=text name="prof_total_descuento" value="<?php echo $this->form_encode_input($prof_total_descuento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_total_descuento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_total_descuento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_total_descuento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_total_descuento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_total_descuento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_valor_ice']))
    {
        $this->nm_new_label['prof_valor_ice'] = "" . $this->Ini->Nm_lang['lang_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_valor_ice = $this->prof_valor_ice;
   $sStyleHidden_prof_valor_ice = '';
   if (isset($this->nmgp_cmp_hidden['prof_valor_ice']) && $this->nmgp_cmp_hidden['prof_valor_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_valor_ice']);
       $sStyleHidden_prof_valor_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_valor_ice = 'display: none;';
   $sStyleReadInp_prof_valor_ice = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_valor_ice']) && $this->nmgp_cmp_readonly['prof_valor_ice'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_valor_ice']);
       $sStyleReadLab_prof_valor_ice = '';
       $sStyleReadInp_prof_valor_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_valor_ice']) && $this->nmgp_cmp_hidden['prof_valor_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_valor_ice" value="<?php echo $this->form_encode_input($prof_valor_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_valor_ice_line" id="hidden_field_data_prof_valor_ice" style="<?php echo $sStyleHidden_prof_valor_ice; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_valor_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_valor_ice_label" style=""><span id="id_label_prof_valor_ice"><?php echo $this->nm_new_label['prof_valor_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_valor_ice"]) &&  $this->nmgp_cmp_readonly["prof_valor_ice"] == "on") { 

 ?>
<input type="hidden" name="prof_valor_ice" value="<?php echo $this->form_encode_input($prof_valor_ice) . "\">" . $prof_valor_ice . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_valor_ice" class="sc-ui-readonly-prof_valor_ice css_prof_valor_ice_line" style="<?php echo $sStyleReadLab_prof_valor_ice; ?>"><?php echo $this->form_format_readonly("prof_valor_ice", $this->form_encode_input($this->prof_valor_ice)); ?></span><span id="id_read_off_prof_valor_ice" class="css_read_off_prof_valor_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_valor_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_valor_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_valor_ice" type=text name="prof_valor_ice" value="<?php echo $this->form_encode_input($prof_valor_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_valor_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_valor_ice']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_valor_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_valor_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_valor_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_valor_iva']))
    {
        $this->nm_new_label['prof_valor_iva'] = "" . $this->Ini->Nm_lang['lang_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_valor_iva = $this->prof_valor_iva;
   $sStyleHidden_prof_valor_iva = '';
   if (isset($this->nmgp_cmp_hidden['prof_valor_iva']) && $this->nmgp_cmp_hidden['prof_valor_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_valor_iva']);
       $sStyleHidden_prof_valor_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_valor_iva = 'display: none;';
   $sStyleReadInp_prof_valor_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_valor_iva']) && $this->nmgp_cmp_readonly['prof_valor_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_valor_iva']);
       $sStyleReadLab_prof_valor_iva = '';
       $sStyleReadInp_prof_valor_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_valor_iva']) && $this->nmgp_cmp_hidden['prof_valor_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_valor_iva" value="<?php echo $this->form_encode_input($prof_valor_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_valor_iva_line" id="hidden_field_data_prof_valor_iva" style="<?php echo $sStyleHidden_prof_valor_iva; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_valor_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_valor_iva_label" style=""><span id="id_label_prof_valor_iva"><?php echo $this->nm_new_label['prof_valor_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_valor_iva"]) &&  $this->nmgp_cmp_readonly["prof_valor_iva"] == "on") { 

 ?>
<input type="hidden" name="prof_valor_iva" value="<?php echo $this->form_encode_input($prof_valor_iva) . "\">" . $prof_valor_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_valor_iva" class="sc-ui-readonly-prof_valor_iva css_prof_valor_iva_line" style="<?php echo $sStyleReadLab_prof_valor_iva; ?>"><?php echo $this->form_format_readonly("prof_valor_iva", $this->form_encode_input($this->prof_valor_iva)); ?></span><span id="id_read_off_prof_valor_iva" class="css_read_off_prof_valor_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_valor_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_valor_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_valor_iva" type=text name="prof_valor_iva" value="<?php echo $this->form_encode_input($prof_valor_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_valor_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_valor_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_valor_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_valor_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_valor_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_valor_irbpnr']))
    {
        $this->nm_new_label['prof_valor_irbpnr'] = "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_valor_irbpnr = $this->prof_valor_irbpnr;
   $sStyleHidden_prof_valor_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['prof_valor_irbpnr']) && $this->nmgp_cmp_hidden['prof_valor_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_valor_irbpnr']);
       $sStyleHidden_prof_valor_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_valor_irbpnr = 'display: none;';
   $sStyleReadInp_prof_valor_irbpnr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_valor_irbpnr']) && $this->nmgp_cmp_readonly['prof_valor_irbpnr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_valor_irbpnr']);
       $sStyleReadLab_prof_valor_irbpnr = '';
       $sStyleReadInp_prof_valor_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_valor_irbpnr']) && $this->nmgp_cmp_hidden['prof_valor_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_valor_irbpnr" value="<?php echo $this->form_encode_input($prof_valor_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_valor_irbpnr_line" id="hidden_field_data_prof_valor_irbpnr" style="<?php echo $sStyleHidden_prof_valor_irbpnr; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_valor_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_valor_irbpnr_label" style=""><span id="id_label_prof_valor_irbpnr"><?php echo $this->nm_new_label['prof_valor_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_valor_irbpnr"]) &&  $this->nmgp_cmp_readonly["prof_valor_irbpnr"] == "on") { 

 ?>
<input type="hidden" name="prof_valor_irbpnr" value="<?php echo $this->form_encode_input($prof_valor_irbpnr) . "\">" . $prof_valor_irbpnr . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_valor_irbpnr" class="sc-ui-readonly-prof_valor_irbpnr css_prof_valor_irbpnr_line" style="<?php echo $sStyleReadLab_prof_valor_irbpnr; ?>"><?php echo $this->form_format_readonly("prof_valor_irbpnr", $this->form_encode_input($this->prof_valor_irbpnr)); ?></span><span id="id_read_off_prof_valor_irbpnr" class="css_read_off_prof_valor_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_valor_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_valor_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_valor_irbpnr" type=text name="prof_valor_irbpnr" value="<?php echo $this->form_encode_input($prof_valor_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_valor_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_valor_irbpnr']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_valor_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_valor_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_valor_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_propina']))
    {
        $this->nm_new_label['prof_propina'] = "" . $this->Ini->Nm_lang['lang_propina'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_propina = $this->prof_propina;
   if (!isset($this->nmgp_cmp_hidden['prof_propina']))
   {
       $this->nmgp_cmp_hidden['prof_propina'] = 'off';
   }
   $sStyleHidden_prof_propina = '';
   if (isset($this->nmgp_cmp_hidden['prof_propina']) && $this->nmgp_cmp_hidden['prof_propina'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_propina']);
       $sStyleHidden_prof_propina = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_propina = 'display: none;';
   $sStyleReadInp_prof_propina = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_propina']) && $this->nmgp_cmp_readonly['prof_propina'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_propina']);
       $sStyleReadLab_prof_propina = '';
       $sStyleReadInp_prof_propina = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_propina']) && $this->nmgp_cmp_hidden['prof_propina'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_propina" value="<?php echo $this->form_encode_input($prof_propina) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_propina_line" id="hidden_field_data_prof_propina" style="<?php echo $sStyleHidden_prof_propina; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_propina_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_propina_label" style=""><span id="id_label_prof_propina"><?php echo $this->nm_new_label['prof_propina']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_propina"]) &&  $this->nmgp_cmp_readonly["prof_propina"] == "on") { 

 ?>
<input type="hidden" name="prof_propina" value="<?php echo $this->form_encode_input($prof_propina) . "\">" . $prof_propina . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_propina" class="sc-ui-readonly-prof_propina css_prof_propina_line" style="<?php echo $sStyleReadLab_prof_propina; ?>"><?php echo $this->form_format_readonly("prof_propina", $this->form_encode_input($this->prof_propina)); ?></span><span id="id_read_off_prof_propina" class="css_read_off_prof_propina<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_propina; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_propina_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_propina" type=text name="prof_propina" value="<?php echo $this->form_encode_input($prof_propina) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_propina']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_propina']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_propina']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_propina_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_propina_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_total']))
    {
        $this->nm_new_label['prof_total'] = "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_total = $this->prof_total;
   $sStyleHidden_prof_total = '';
   if (isset($this->nmgp_cmp_hidden['prof_total']) && $this->nmgp_cmp_hidden['prof_total'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_total']);
       $sStyleHidden_prof_total = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_total = 'display: none;';
   $sStyleReadInp_prof_total = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_total']) && $this->nmgp_cmp_readonly['prof_total'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_total']);
       $sStyleReadLab_prof_total = '';
       $sStyleReadInp_prof_total = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_total']) && $this->nmgp_cmp_hidden['prof_total'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_total" value="<?php echo $this->form_encode_input($prof_total) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_total_line" id="hidden_field_data_prof_total" style="<?php echo $sStyleHidden_prof_total; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_total_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_total_label" style=""><span id="id_label_prof_total"><?php echo $this->nm_new_label['prof_total']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_total"]) &&  $this->nmgp_cmp_readonly["prof_total"] == "on") { 

 ?>
<input type="hidden" name="prof_total" value="<?php echo $this->form_encode_input($prof_total) . "\">" . $prof_total . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_total" class="sc-ui-readonly-prof_total css_prof_total_line" style="<?php echo $sStyleReadLab_prof_total; ?>"><?php echo $this->form_format_readonly("prof_total", $this->form_encode_input($this->prof_total)); ?></span><span id="id_read_off_prof_total" class="css_read_off_prof_total<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_total; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_total_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_total" type=text name="prof_total" value="<?php echo $this->form_encode_input($prof_total) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['prof_total']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['prof_total']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['prof_total']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_total_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_total_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_estado']))
    {
        $this->nm_new_label['prof_estado'] = "Prof Estado";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_estado = $this->prof_estado;
   if (!isset($this->nmgp_cmp_hidden['prof_estado']))
   {
       $this->nmgp_cmp_hidden['prof_estado'] = 'off';
   }
   $sStyleHidden_prof_estado = '';
   if (isset($this->nmgp_cmp_hidden['prof_estado']) && $this->nmgp_cmp_hidden['prof_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_estado']);
       $sStyleHidden_prof_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_estado = 'display: none;';
   $sStyleReadInp_prof_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_estado']) && $this->nmgp_cmp_readonly['prof_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_estado']);
       $sStyleReadLab_prof_estado = '';
       $sStyleReadInp_prof_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_estado']) && $this->nmgp_cmp_hidden['prof_estado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_estado" value="<?php echo $this->form_encode_input($prof_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_estado_line" id="hidden_field_data_prof_estado" style="<?php echo $sStyleHidden_prof_estado; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_estado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_estado_label" style=""><span id="id_label_prof_estado"><?php echo $this->nm_new_label['prof_estado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_estado"]) &&  $this->nmgp_cmp_readonly["prof_estado"] == "on") { 

 ?>
<input type="hidden" name="prof_estado" value="<?php echo $this->form_encode_input($prof_estado) . "\">" . $prof_estado . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_estado" class="sc-ui-readonly-prof_estado css_prof_estado_line" style="<?php echo $sStyleReadLab_prof_estado; ?>"><?php echo $this->form_format_readonly("prof_estado", $this->form_encode_input($this->prof_estado)); ?></span><span id="id_read_off_prof_estado" class="css_read_off_prof_estado<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_estado; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_estado_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_estado" type=text name="prof_estado" value="<?php echo $this->form_encode_input($prof_estado) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['prof_usuario']))
    {
        $this->nm_new_label['prof_usuario'] = "Prof Usuario";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $prof_usuario = $this->prof_usuario;
   if (!isset($this->nmgp_cmp_hidden['prof_usuario']))
   {
       $this->nmgp_cmp_hidden['prof_usuario'] = 'off';
   }
   $sStyleHidden_prof_usuario = '';
   if (isset($this->nmgp_cmp_hidden['prof_usuario']) && $this->nmgp_cmp_hidden['prof_usuario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['prof_usuario']);
       $sStyleHidden_prof_usuario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_prof_usuario = 'display: none;';
   $sStyleReadInp_prof_usuario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['prof_usuario']) && $this->nmgp_cmp_readonly['prof_usuario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['prof_usuario']);
       $sStyleReadLab_prof_usuario = '';
       $sStyleReadInp_prof_usuario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['prof_usuario']) && $this->nmgp_cmp_hidden['prof_usuario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="prof_usuario" value="<?php echo $this->form_encode_input($prof_usuario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_prof_usuario_line" id="hidden_field_data_prof_usuario" style="<?php echo $sStyleHidden_prof_usuario; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_prof_usuario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_prof_usuario_label" style=""><span id="id_label_prof_usuario"><?php echo $this->nm_new_label['prof_usuario']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["prof_usuario"]) &&  $this->nmgp_cmp_readonly["prof_usuario"] == "on") { 

 ?>
<input type="hidden" name="prof_usuario" value="<?php echo $this->form_encode_input($prof_usuario) . "\">" . $prof_usuario . ""; ?>
<?php } else { ?>
<span id="id_read_on_prof_usuario" class="sc-ui-readonly-prof_usuario css_prof_usuario_line" style="<?php echo $sStyleReadLab_prof_usuario; ?>"><?php echo $this->form_format_readonly("prof_usuario", $this->form_encode_input($this->prof_usuario)); ?></span><span id="id_read_off_prof_usuario" class="css_read_off_prof_usuario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_prof_usuario; ?>">
 <input class="sc-js-input scFormObjectOdd css_prof_usuario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_prof_usuario" type=text name="prof_usuario" value="<?php echo $this->form_encode_input($prof_usuario) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=35"; } ?> maxlength=35 alt="{datatype: 'text', maxLength: 35, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_prof_usuario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_prof_usuario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_prof_usuario_dumb = ('' == $sStyleHidden_prof_usuario) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_prof_usuario_dumb" style="<?php echo $sStyleHidden_prof_usuario_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_7"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_7"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_7" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


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
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_liga_form_insert'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_liga_form_update'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_liga_form_delete'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['embutida_parms'] = "var_proforma*scin" . $this->nmgp_dados_form['prof_numero'] . "*scoutNM_btn_insert*scinN*scoutNM_btn_update*scinN*scoutNM_btn_delete*scinN*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['foreign_key']['fp_pedido_convenio'] = $this->nmgp_dados_form['prof_numero'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['where_filter'] = "fp_pedido_convenio = " . $this->nmgp_dados_form['prof_numero'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['where_detal']  = "fp_pedido_convenio = " . $this->nmgp_dados_form['prof_numero'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_pedido_entregar_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_pedido_entregar_mob_empty.htm' : $this->Ini->link_form_del_forma_pago_pedido_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init'] ]['form_del_forma_pago_pedido'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_forma_pago']) && 'nmsc_iframe_liga_form_del_forma_pago_pedido_mob' != $this->Ini->sc_lig_target['C_@scinf_forma_pago'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_forma_pago'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['form_del_forma_pago_pedido_mob_script_case_init']);
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
<iframe border="0" id="nmsc_iframe_liga_form_del_forma_pago_pedido_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_del_forma_pago_pedido_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_forma_pago_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_forma_pago_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['run_iframe'] != "R")
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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7);

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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_pedido_entregar_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_pedido_entregar_mob");
 parent.scAjaxDetailHeight("form_del_pedido_entregar_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_pedido_entregar_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_pedido_entregar_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['sc_modal'])
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
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-1").length && $("#sc_b_upd_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_b.sc-unique-btn-7").length && $("#sc_b_upd_b.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-7").hasClass("disabled")) {
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
		if ($("#sc_b_upd_b.sc-unique-btn-17").length && $("#sc_b_upd_b.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_entregar_pedido() {
		if ($("#sc_entregar_pedido_top").length && $("#sc_entregar_pedido_top").is(":visible")) {
		    if ($("#sc_entregar_pedido_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_entregar_pedido()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_entregar_pedido_top").length && $("#sc_entregar_pedido_top").is(":visible")) {
		    if ($("#sc_entregar_pedido_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_entregar_pedido()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-2").length && $("#sys_separator.sc-unique-btn-2").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-3").length && $("#sys_separator.sc-unique-btn-3").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-12").length && $("#sys_separator.sc-unique-btn-12").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-12").hasClass("disabled")) {
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
	function scBtnFn_nota_venta() {
		if ($("#sc_nota_venta_top").length && $("#sc_nota_venta_top").is(":visible")) {
		    if ($("#sc_nota_venta_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_nota_venta()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_nota_venta_top").length && $("#sc_nota_venta_top").is(":visible")) {
		    if ($("#sc_nota_venta_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_nota_venta()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_baucher_factura() {
		if ($("#sc_baucher_factura_top").length && $("#sc_baucher_factura_top").is(":visible")) {
		    if ($("#sc_baucher_factura_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_baucher_factura()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_baucher_factura_top").length && $("#sc_baucher_factura_top").is(":visible")) {
		    if ($("#sc_baucher_factura_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_baucher_factura()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_baucher_guia() {
		if ($("#sc_baucher_guia_top").length && $("#sc_baucher_guia_top").is(":visible")) {
		    if ($("#sc_baucher_guia_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_baucher_guia()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_baucher_guia_top").length && $("#sc_baucher_guia_top").is(":visible")) {
		    if ($("#sc_baucher_guia_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_baucher_guia()
			toggleToolbar(event, true); return;
		}
	}
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
		if ($("#sc_b_sai_b.sc-unique-btn-18").length && $("#sc_b_sai_b.sc-unique-btn-18").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-19").length && $("#sc_b_sai_b.sc-unique-btn-19").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-19").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-20").length && $("#sc_b_sai_b.sc-unique-btn-20").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-20").hasClass("disabled")) {
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_pedido_entregar_mob']['buttonStatus'] = $this->nmgp_botoes;
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
