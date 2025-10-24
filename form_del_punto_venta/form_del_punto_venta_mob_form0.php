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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_punto_venta/form_del_punto_venta_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_punto_venta_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['last'] : 'off'); ?>";
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
  document.getElementById('nmsc_iframe_liga_form_del_detalle_factura').contentDocument.location.reload(true);
  document.getElementById('nmsc_iframe_liga_form_del_forma_pago_factura').contentDocument.location.reload(true);
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
     if (F_name == "fac_estado")
     {
        $('input[name="fac_estado"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_estado"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_estado"]').removeClass("scFormInputDisabled");
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
  }
 } // nm_field_disabled
<?php

include_once('form_del_punto_venta_mob_jquery.php');

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

<?php
if (!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName)
{
?>
  scFocusField('fac_libretin');

<?php
}
?>
  $("#hidden_bloco_1,#hidden_bloco_4,#hidden_bloco_5").each(function() {
   $(this.rows[0]).bind("click", {block: this}, toggleBlock)
                  .mouseover(function() { $(this).css("cursor", "pointer"); })
                  .mouseout(function() { $(this).css("cursor", ""); });
  });

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
    "hidden_bloco_1": true,
    "hidden_bloco_4": false,
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
    if ("hidden_bloco_5" == block_id) {
      scAjaxDetailHeight("form_del_forma_pago_factura", "200");
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_del_punto_venta']['error_buffer']) && '' != $_SESSION['scriptcase']['form_del_punto_venta']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_del_punto_venta']['error_buffer'];
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
 include_once("form_del_punto_venta_mob_js0.php");
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
               action="form_del_punto_venta_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_del_punto_venta_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_punto_venta_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label'][''];
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
        $sCondStyle = ($this->nmgp_botoes['Nuevo'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['nuevo'];
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
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['update'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['anular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "anular", "scBtnFn_Anular()", "scBtnFn_Anular()", "sc_Anular_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label'][''];
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
        $sCondStyle = ($this->nmgp_botoes['enviar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['enviar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['enviar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['enviar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['enviar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['enviar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "enviar", "scBtnFn_enviar()", "scBtnFn_enviar()", "sc_enviar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['retencion'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['retencion']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['retencion']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['retencion']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['retencion']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['retencion'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "retencion", "scBtnFn_retencion()", "scBtnFn_retencion()", "sc_retencion_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['fac_numero']))
   {
       $this->nmgp_cmp_hidden['fac_numero'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_tipo_comprobante']))
   {
       $this->nmgp_cmp_hidden['fac_tipo_comprobante'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_empresa']))
   {
       $this->nmgp_cmp_hidden['fac_empresa'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_establecimiento']))
   {
       $this->nmgp_cmp_hidden['fac_establecimiento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_punto_emision']))
   {
       $this->nmgp_cmp_hidden['fac_punto_emision'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_secuencial']))
   {
       $this->nmgp_cmp_hidden['fac_secuencial'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_cliente']))
   {
       $this->nmgp_cmp_hidden['fac_cliente'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_ambiente']))
   {
       $this->nmgp_cmp_hidden['fac_ambiente'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['fac_tipo_libretin'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal_iva']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal_iva'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal_cero']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal_cero'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal_no_objeto']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal_no_objeto'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal_excento']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal_excento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_total_descuento']))
   {
       $this->nmgp_cmp_hidden['fac_total_descuento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_valor_ice']))
   {
       $this->nmgp_cmp_hidden['fac_valor_ice'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_valor_iva']))
   {
       $this->nmgp_cmp_hidden['fac_valor_iva'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_valor_irbpnr']))
   {
       $this->nmgp_cmp_hidden['fac_valor_irbpnr'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_propina']))
   {
       $this->nmgp_cmp_hidden['fac_propina'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_total']))
   {
       $this->nmgp_cmp_hidden['fac_total'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_estado']))
   {
       $this->nmgp_cmp_hidden['fac_estado'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_estado_sri']))
   {
       $this->nmgp_cmp_hidden['fac_estado_sri'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_error_sri']))
   {
       $this->nmgp_cmp_hidden['fac_error_sri'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_fecha_autorizacion']))
   {
       $this->nmgp_cmp_hidden['fac_fecha_autorizacion'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_autorizacion']))
   {
       $this->nmgp_cmp_hidden['fac_autorizacion'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_usuario']))
   {
       $this->nmgp_cmp_hidden['fac_usuario'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_clave']))
   {
       $this->nmgp_cmp_hidden['fac_clave'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_retencion']))
   {
       $this->nmgp_cmp_hidden['fac_retencion'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_tipo_identificacion']))
   {
       $this->nmgp_cmp_hidden['fac_tipo_identificacion'] = 'off';
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
    if (!isset($this->nm_new_label['fac_estado_sri']))
    {
        $this->nm_new_label['fac_estado_sri'] = "" . $this->Ini->Nm_lang['lang_estado_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_estado_sri = $this->fac_estado_sri;
   if (!isset($this->nmgp_cmp_hidden['fac_estado_sri']))
   {
       $this->nmgp_cmp_hidden['fac_estado_sri'] = 'off';
   }
   $sStyleHidden_fac_estado_sri = '';
   if (isset($this->nmgp_cmp_hidden['fac_estado_sri']) && $this->nmgp_cmp_hidden['fac_estado_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_estado_sri']);
       $sStyleHidden_fac_estado_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_estado_sri = 'display: none;';
   $sStyleReadInp_fac_estado_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_estado_sri']) && $this->nmgp_cmp_readonly['fac_estado_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_estado_sri']);
       $sStyleReadLab_fac_estado_sri = '';
       $sStyleReadInp_fac_estado_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_estado_sri']) && $this->nmgp_cmp_hidden['fac_estado_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_estado_sri" value="<?php echo $this->form_encode_input($fac_estado_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_estado_sri_line" id="hidden_field_data_fac_estado_sri" style="<?php echo $sStyleHidden_fac_estado_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_estado_sri_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="fac_estado_sri" value="<?php echo $this->form_encode_input($fac_estado_sri); ?>"><span id="id_ajax_label_fac_estado_sri"><?php echo nl2br($fac_estado_sri); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_estado_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_estado_sri_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['fac_numero']))
           {
               $this->nmgp_cmp_readonly['fac_numero'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['fac_error_sri']))
    {
        $this->nm_new_label['fac_error_sri'] = "" . $this->Ini->Nm_lang['lang_mensaje'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_error_sri = $this->fac_error_sri;
   if (!isset($this->nmgp_cmp_hidden['fac_error_sri']))
   {
       $this->nmgp_cmp_hidden['fac_error_sri'] = 'off';
   }
   $sStyleHidden_fac_error_sri = '';
   if (isset($this->nmgp_cmp_hidden['fac_error_sri']) && $this->nmgp_cmp_hidden['fac_error_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_error_sri']);
       $sStyleHidden_fac_error_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_error_sri = 'display: none;';
   $sStyleReadInp_fac_error_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_error_sri']) && $this->nmgp_cmp_readonly['fac_error_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_error_sri']);
       $sStyleReadLab_fac_error_sri = '';
       $sStyleReadInp_fac_error_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_error_sri']) && $this->nmgp_cmp_hidden['fac_error_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_error_sri" value="<?php echo $this->form_encode_input($fac_error_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_error_sri_line" id="hidden_field_data_fac_error_sri" style="<?php echo $sStyleHidden_fac_error_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_error_sri_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_error_sri"]) &&  $this->nmgp_cmp_readonly["fac_error_sri"] == "on") { 

 ?>
<input type="hidden" name="fac_error_sri" value="<?php echo $this->form_encode_input($fac_error_sri) . "\">" . $fac_error_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_error_sri" class="sc-ui-readonly-fac_error_sri css_fac_error_sri_line" style="<?php echo $sStyleReadLab_fac_error_sri; ?>"><?php echo $this->form_format_readonly("fac_error_sri", $this->form_encode_input($this->fac_error_sri)); ?></span><span id="id_read_off_fac_error_sri" class="css_read_off_fac_error_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_error_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_error_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_error_sri" type=text name="fac_error_sri" value="<?php echo $this->form_encode_input($fac_error_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=300"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_error_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_error_sri_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_numero']))
    {
        $this->nm_new_label['fac_numero'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_numero = $this->fac_numero;
   if (!isset($this->nmgp_cmp_hidden['fac_numero']))
   {
       $this->nmgp_cmp_hidden['fac_numero'] = 'off';
   }
   $sStyleHidden_fac_numero = '';
   if (isset($this->nmgp_cmp_hidden['fac_numero']) && $this->nmgp_cmp_hidden['fac_numero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_numero']);
       $sStyleHidden_fac_numero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_numero = 'display: none;';
   $sStyleReadInp_fac_numero = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["fac_numero"]) &&  $this->nmgp_cmp_readonly["fac_numero"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_numero']);
       $sStyleReadLab_fac_numero = '';
       $sStyleReadInp_fac_numero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_numero']) && $this->nmgp_cmp_hidden['fac_numero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_numero" value="<?php echo $this->form_encode_input($fac_numero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd css_fac_numero_line" id="hidden_field_data_fac_numero" style="<?php echo $sStyleHidden_fac_numero; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_numero_line" style="vertical-align: top;padding: 0px"><span id="id_read_on_fac_numero" class="css_fac_numero_line" style="<?php echo $sStyleReadLab_fac_numero; ?>"><?php echo $this->form_format_readonly("fac_numero", $this->form_encode_input($this->fac_numero)); ?></span><span id="id_read_off_fac_numero" class="css_read_off_fac_numero" style="<?php echo $sStyleReadInp_fac_numero; ?>"><input type="hidden" name="fac_numero" value="<?php echo $this->form_encode_input($fac_numero) . "\">"?><span id="id_ajax_label_fac_numero"><?php echo nl2br($fac_numero); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_numero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_numero_text"></span></td></tr></table></td></tr></table> </TD>
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
    if (!isset($this->nm_new_label['fac_tipo_comprobante']))
    {
        $this->nm_new_label['fac_tipo_comprobante'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_tipo_comprobante = $this->fac_tipo_comprobante;
   if (!isset($this->nmgp_cmp_hidden['fac_tipo_comprobante']))
   {
       $this->nmgp_cmp_hidden['fac_tipo_comprobante'] = 'off';
   }
   $sStyleHidden_fac_tipo_comprobante = '';
   if (isset($this->nmgp_cmp_hidden['fac_tipo_comprobante']) && $this->nmgp_cmp_hidden['fac_tipo_comprobante'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_tipo_comprobante']);
       $sStyleHidden_fac_tipo_comprobante = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_tipo_comprobante = 'display: none;';
   $sStyleReadInp_fac_tipo_comprobante = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_tipo_comprobante']) && $this->nmgp_cmp_readonly['fac_tipo_comprobante'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_tipo_comprobante']);
       $sStyleReadLab_fac_tipo_comprobante = '';
       $sStyleReadInp_fac_tipo_comprobante = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_tipo_comprobante']) && $this->nmgp_cmp_hidden['fac_tipo_comprobante'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_tipo_comprobante" value="<?php echo $this->form_encode_input($fac_tipo_comprobante) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_tipo_comprobante_line" id="hidden_field_data_fac_tipo_comprobante" style="<?php echo $sStyleHidden_fac_tipo_comprobante; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_tipo_comprobante_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="fac_tipo_comprobante" value="<?php echo $this->form_encode_input($fac_tipo_comprobante); ?>"><span id="id_ajax_label_fac_tipo_comprobante"><?php echo nl2br($fac_tipo_comprobante); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_tipo_comprobante_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_tipo_comprobante_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_empresa']))
    {
        $this->nm_new_label['fac_empresa'] = "" . $this->Ini->Nm_lang['lang_empresa'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_empresa = $this->fac_empresa;
   if (!isset($this->nmgp_cmp_hidden['fac_empresa']))
   {
       $this->nmgp_cmp_hidden['fac_empresa'] = 'off';
   }
   $sStyleHidden_fac_empresa = '';
   if (isset($this->nmgp_cmp_hidden['fac_empresa']) && $this->nmgp_cmp_hidden['fac_empresa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_empresa']);
       $sStyleHidden_fac_empresa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_empresa = 'display: none;';
   $sStyleReadInp_fac_empresa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_empresa']) && $this->nmgp_cmp_readonly['fac_empresa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_empresa']);
       $sStyleReadLab_fac_empresa = '';
       $sStyleReadInp_fac_empresa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_empresa']) && $this->nmgp_cmp_hidden['fac_empresa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_empresa" value="<?php echo $this->form_encode_input($fac_empresa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_empresa_line" id="hidden_field_data_fac_empresa" style="<?php echo $sStyleHidden_fac_empresa; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_empresa_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="fac_empresa" value="<?php echo $this->form_encode_input($fac_empresa); ?>"><span id="id_ajax_label_fac_empresa"><?php echo nl2br($fac_empresa); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_empresa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_empresa_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormDataOdd css_fac_establecimiento_line" id="hidden_field_data_fac_establecimiento" style="<?php echo $sStyleHidden_fac_establecimiento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_establecimiento_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="fac_establecimiento" value="<?php echo $this->form_encode_input($fac_establecimiento); ?>"><span id="id_ajax_label_fac_establecimiento"><?php echo nl2br($fac_establecimiento); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_establecimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_establecimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormDataOdd css_fac_punto_emision_line" id="hidden_field_data_fac_punto_emision" style="<?php echo $sStyleHidden_fac_punto_emision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_punto_emision_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="fac_punto_emision" value="<?php echo $this->form_encode_input($fac_punto_emision); ?>"><span id="id_ajax_label_fac_punto_emision"><?php echo nl2br($fac_punto_emision); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_punto_emision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_punto_emision_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormDataOdd css_fac_ambiente_line" id="hidden_field_data_fac_ambiente" style="<?php echo $sStyleHidden_fac_ambiente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_ambiente_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="fac_ambiente" value="<?php echo $this->form_encode_input($fac_ambiente); ?>"><span id="id_ajax_label_fac_ambiente"><?php echo nl2br($fac_ambiente); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_ambiente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_ambiente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormDataOdd css_fac_tipo_libretin_line" id="hidden_field_data_fac_tipo_libretin" style="<?php echo $sStyleHidden_fac_tipo_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_tipo_libretin_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="fac_tipo_libretin" value="<?php echo $this->form_encode_input($fac_tipo_libretin); ?>"><span id="id_ajax_label_fac_tipo_libretin"><?php echo nl2br($fac_tipo_libretin); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_tipo_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_tipo_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal_iva']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal_iva'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_subtotal_iva_line" id="hidden_field_data_fac_subtotal_iva" style="<?php echo $sStyleHidden_fac_subtotal_iva; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_subtotal_iva_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal_iva"]) &&  $this->nmgp_cmp_readonly["fac_subtotal_iva"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal_iva" value="<?php echo $this->form_encode_input($fac_subtotal_iva) . "\">" . $fac_subtotal_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal_iva" class="sc-ui-readonly-fac_subtotal_iva css_fac_subtotal_iva_line" style="<?php echo $sStyleReadLab_fac_subtotal_iva; ?>"><?php echo $this->form_format_readonly("fac_subtotal_iva", $this->form_encode_input($this->fac_subtotal_iva)); ?></span><span id="id_read_off_fac_subtotal_iva" class="css_read_off_fac_subtotal_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal_iva" type=text name="fac_subtotal_iva" value="<?php echo $this->form_encode_input($fac_subtotal_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal_cero']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal_cero'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_subtotal_cero_line" id="hidden_field_data_fac_subtotal_cero" style="<?php echo $sStyleHidden_fac_subtotal_cero; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_subtotal_cero_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal_cero"]) &&  $this->nmgp_cmp_readonly["fac_subtotal_cero"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal_cero" value="<?php echo $this->form_encode_input($fac_subtotal_cero) . "\">" . $fac_subtotal_cero . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal_cero" class="sc-ui-readonly-fac_subtotal_cero css_fac_subtotal_cero_line" style="<?php echo $sStyleReadLab_fac_subtotal_cero; ?>"><?php echo $this->form_format_readonly("fac_subtotal_cero", $this->form_encode_input($this->fac_subtotal_cero)); ?></span><span id="id_read_off_fac_subtotal_cero" class="css_read_off_fac_subtotal_cero<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal_cero; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_cero_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal_cero" type=text name="fac_subtotal_cero" value="<?php echo $this->form_encode_input($fac_subtotal_cero) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal_cero']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal_cero']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal_cero']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_cero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_cero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal_no_objeto']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal_no_objeto'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_subtotal_no_objeto_line" id="hidden_field_data_fac_subtotal_no_objeto" style="<?php echo $sStyleHidden_fac_subtotal_no_objeto; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_subtotal_no_objeto_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal_no_objeto"]) &&  $this->nmgp_cmp_readonly["fac_subtotal_no_objeto"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal_no_objeto" value="<?php echo $this->form_encode_input($fac_subtotal_no_objeto) . "\">" . $fac_subtotal_no_objeto . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal_no_objeto" class="sc-ui-readonly-fac_subtotal_no_objeto css_fac_subtotal_no_objeto_line" style="<?php echo $sStyleReadLab_fac_subtotal_no_objeto; ?>"><?php echo $this->form_format_readonly("fac_subtotal_no_objeto", $this->form_encode_input($this->fac_subtotal_no_objeto)); ?></span><span id="id_read_off_fac_subtotal_no_objeto" class="css_read_off_fac_subtotal_no_objeto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal_no_objeto; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_no_objeto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal_no_objeto" type=text name="fac_subtotal_no_objeto" value="<?php echo $this->form_encode_input($fac_subtotal_no_objeto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal_no_objeto']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal_no_objeto']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal_no_objeto']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_no_objeto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_no_objeto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal_excento']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal_excento'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_subtotal_excento_line" id="hidden_field_data_fac_subtotal_excento" style="<?php echo $sStyleHidden_fac_subtotal_excento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_subtotal_excento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal_excento"]) &&  $this->nmgp_cmp_readonly["fac_subtotal_excento"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal_excento" value="<?php echo $this->form_encode_input($fac_subtotal_excento) . "\">" . $fac_subtotal_excento . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal_excento" class="sc-ui-readonly-fac_subtotal_excento css_fac_subtotal_excento_line" style="<?php echo $sStyleReadLab_fac_subtotal_excento; ?>"><?php echo $this->form_format_readonly("fac_subtotal_excento", $this->form_encode_input($this->fac_subtotal_excento)); ?></span><span id="id_read_off_fac_subtotal_excento" class="css_read_off_fac_subtotal_excento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal_excento; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_excento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal_excento" type=text name="fac_subtotal_excento" value="<?php echo $this->form_encode_input($fac_subtotal_excento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal_excento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal_excento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal_excento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_excento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_excento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
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
   if (!isset($this->nmgp_cmp_hidden['fac_subtotal']))
   {
       $this->nmgp_cmp_hidden['fac_subtotal'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_subtotal_line" id="hidden_field_data_fac_subtotal" style="<?php echo $sStyleHidden_fac_subtotal; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_subtotal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_subtotal"]) &&  $this->nmgp_cmp_readonly["fac_subtotal"] == "on") { 

 ?>
<input type="hidden" name="fac_subtotal" value="<?php echo $this->form_encode_input($fac_subtotal) . "\">" . $fac_subtotal . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_subtotal" class="sc-ui-readonly-fac_subtotal css_fac_subtotal_line" style="<?php echo $sStyleReadLab_fac_subtotal; ?>"><?php echo $this->form_format_readonly("fac_subtotal", $this->form_encode_input($this->fac_subtotal)); ?></span><span id="id_read_off_fac_subtotal" class="css_read_off_fac_subtotal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_subtotal; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_subtotal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_subtotal" type=text name="fac_subtotal" value="<?php echo $this->form_encode_input($fac_subtotal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_subtotal']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_subtotal']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_subtotal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_subtotal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_subtotal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_total_descuento']))
   {
       $this->nmgp_cmp_hidden['fac_total_descuento'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_total_descuento_line" id="hidden_field_data_fac_total_descuento" style="<?php echo $sStyleHidden_fac_total_descuento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_total_descuento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_total_descuento"]) &&  $this->nmgp_cmp_readonly["fac_total_descuento"] == "on") { 

 ?>
<input type="hidden" name="fac_total_descuento" value="<?php echo $this->form_encode_input($fac_total_descuento) . "\">" . $fac_total_descuento . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_total_descuento" class="sc-ui-readonly-fac_total_descuento css_fac_total_descuento_line" style="<?php echo $sStyleReadLab_fac_total_descuento; ?>"><?php echo $this->form_format_readonly("fac_total_descuento", $this->form_encode_input($this->fac_total_descuento)); ?></span><span id="id_read_off_fac_total_descuento" class="css_read_off_fac_total_descuento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_total_descuento; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_total_descuento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_total_descuento" type=text name="fac_total_descuento" value="<?php echo $this->form_encode_input($fac_total_descuento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_total_descuento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_total_descuento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_total_descuento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_total_descuento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_total_descuento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_valor_ice']))
   {
       $this->nmgp_cmp_hidden['fac_valor_ice'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_valor_ice_line" id="hidden_field_data_fac_valor_ice" style="<?php echo $sStyleHidden_fac_valor_ice; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_valor_ice_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_valor_ice"]) &&  $this->nmgp_cmp_readonly["fac_valor_ice"] == "on") { 

 ?>
<input type="hidden" name="fac_valor_ice" value="<?php echo $this->form_encode_input($fac_valor_ice) . "\">" . $fac_valor_ice . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_valor_ice" class="sc-ui-readonly-fac_valor_ice css_fac_valor_ice_line" style="<?php echo $sStyleReadLab_fac_valor_ice; ?>"><?php echo $this->form_format_readonly("fac_valor_ice", $this->form_encode_input($this->fac_valor_ice)); ?></span><span id="id_read_off_fac_valor_ice" class="css_read_off_fac_valor_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_valor_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_valor_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_valor_ice" type=text name="fac_valor_ice" value="<?php echo $this->form_encode_input($fac_valor_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_valor_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_valor_ice']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_valor_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_valor_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_valor_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_valor_iva']))
   {
       $this->nmgp_cmp_hidden['fac_valor_iva'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_valor_iva_line" id="hidden_field_data_fac_valor_iva" style="<?php echo $sStyleHidden_fac_valor_iva; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_valor_iva_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_valor_iva"]) &&  $this->nmgp_cmp_readonly["fac_valor_iva"] == "on") { 

 ?>
<input type="hidden" name="fac_valor_iva" value="<?php echo $this->form_encode_input($fac_valor_iva) . "\">" . $fac_valor_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_valor_iva" class="sc-ui-readonly-fac_valor_iva css_fac_valor_iva_line" style="<?php echo $sStyleReadLab_fac_valor_iva; ?>"><?php echo $this->form_format_readonly("fac_valor_iva", $this->form_encode_input($this->fac_valor_iva)); ?></span><span id="id_read_off_fac_valor_iva" class="css_read_off_fac_valor_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_valor_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_valor_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_valor_iva" type=text name="fac_valor_iva" value="<?php echo $this->form_encode_input($fac_valor_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_valor_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_valor_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_valor_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_valor_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_valor_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_valor_irbpnr']))
   {
       $this->nmgp_cmp_hidden['fac_valor_irbpnr'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_valor_irbpnr_line" id="hidden_field_data_fac_valor_irbpnr" style="<?php echo $sStyleHidden_fac_valor_irbpnr; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_valor_irbpnr_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_valor_irbpnr"]) &&  $this->nmgp_cmp_readonly["fac_valor_irbpnr"] == "on") { 

 ?>
<input type="hidden" name="fac_valor_irbpnr" value="<?php echo $this->form_encode_input($fac_valor_irbpnr) . "\">" . $fac_valor_irbpnr . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_valor_irbpnr" class="sc-ui-readonly-fac_valor_irbpnr css_fac_valor_irbpnr_line" style="<?php echo $sStyleReadLab_fac_valor_irbpnr; ?>"><?php echo $this->form_format_readonly("fac_valor_irbpnr", $this->form_encode_input($this->fac_valor_irbpnr)); ?></span><span id="id_read_off_fac_valor_irbpnr" class="css_read_off_fac_valor_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_valor_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_valor_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_valor_irbpnr" type=text name="fac_valor_irbpnr" value="<?php echo $this->form_encode_input($fac_valor_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_valor_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_valor_irbpnr']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_valor_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_valor_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_valor_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_propina']))
   {
       $this->nmgp_cmp_hidden['fac_propina'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_propina_line" id="hidden_field_data_fac_propina" style="<?php echo $sStyleHidden_fac_propina; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_propina_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_propina"]) &&  $this->nmgp_cmp_readonly["fac_propina"] == "on") { 

 ?>
<input type="hidden" name="fac_propina" value="<?php echo $this->form_encode_input($fac_propina) . "\">" . $fac_propina . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_propina" class="sc-ui-readonly-fac_propina css_fac_propina_line" style="<?php echo $sStyleReadLab_fac_propina; ?>"><?php echo $this->form_format_readonly("fac_propina", $this->form_encode_input($this->fac_propina)); ?></span><span id="id_read_off_fac_propina" class="css_read_off_fac_propina<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_propina; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_propina_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_propina" type=text name="fac_propina" value="<?php echo $this->form_encode_input($fac_propina) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_propina']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_propina']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_propina']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_propina_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_propina_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
   if (!isset($this->nmgp_cmp_hidden['fac_total']))
   {
       $this->nmgp_cmp_hidden['fac_total'] = 'off';
   }
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

    <TD class="scFormDataOdd css_fac_total_line" id="hidden_field_data_fac_total" style="<?php echo $sStyleHidden_fac_total; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_total_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_total"]) &&  $this->nmgp_cmp_readonly["fac_total"] == "on") { 

 ?>
<input type="hidden" name="fac_total" value="<?php echo $this->form_encode_input($fac_total) . "\">" . $fac_total . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_total" class="sc-ui-readonly-fac_total css_fac_total_line" style="<?php echo $sStyleReadLab_fac_total; ?>"><?php echo $this->form_format_readonly("fac_total", $this->form_encode_input($this->fac_total)); ?></span><span id="id_read_off_fac_total" class="css_read_off_fac_total<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_total; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_total_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_total" type=text name="fac_total" value="<?php echo $this->form_encode_input($fac_total) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_total']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fac_total']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_total']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_total_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_total_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_estado']))
    {
        $this->nm_new_label['fac_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_estado = $this->fac_estado;
   if (!isset($this->nmgp_cmp_hidden['fac_estado']))
   {
       $this->nmgp_cmp_hidden['fac_estado'] = 'off';
   }
   $sStyleHidden_fac_estado = '';
   if (isset($this->nmgp_cmp_hidden['fac_estado']) && $this->nmgp_cmp_hidden['fac_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_estado']);
       $sStyleHidden_fac_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_estado = 'display: none;';
   $sStyleReadInp_fac_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_estado']) && $this->nmgp_cmp_readonly['fac_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_estado']);
       $sStyleReadLab_fac_estado = '';
       $sStyleReadInp_fac_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_estado']) && $this->nmgp_cmp_hidden['fac_estado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_estado" value="<?php echo $this->form_encode_input($fac_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_estado_line" id="hidden_field_data_fac_estado" style="<?php echo $sStyleHidden_fac_estado; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_estado_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_estado"]) &&  $this->nmgp_cmp_readonly["fac_estado"] == "on") { 

 ?>
<input type="hidden" name="fac_estado" value="<?php echo $this->form_encode_input($fac_estado) . "\">" . $fac_estado . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_estado" class="sc-ui-readonly-fac_estado css_fac_estado_line" style="<?php echo $sStyleReadLab_fac_estado; ?>"><?php echo $this->form_format_readonly("fac_estado", $this->form_encode_input($this->fac_estado)); ?></span><span id="id_read_off_fac_estado" class="css_read_off_fac_estado<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_estado; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_estado_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_estado" type=text name="fac_estado" value="<?php echo $this->form_encode_input($fac_estado) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=2"; } ?> maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_fecha_autorizacion']))
    {
        $this->nm_new_label['fac_fecha_autorizacion'] = "" . $this->Ini->Nm_lang['lang_fecha_autorizacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   if (!isset($this->nmgp_cmp_hidden['fac_fecha_autorizacion']))
   {
       $this->nmgp_cmp_hidden['fac_fecha_autorizacion'] = 'off';
   }
   $sStyleHidden_fac_fecha_autorizacion = '';
   if (isset($this->nmgp_cmp_hidden['fac_fecha_autorizacion']) && $this->nmgp_cmp_hidden['fac_fecha_autorizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_fecha_autorizacion']);
       $sStyleHidden_fac_fecha_autorizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_fecha_autorizacion = 'display: none;';
   $sStyleReadInp_fac_fecha_autorizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_fecha_autorizacion']) && $this->nmgp_cmp_readonly['fac_fecha_autorizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_fecha_autorizacion']);
       $sStyleReadLab_fac_fecha_autorizacion = '';
       $sStyleReadInp_fac_fecha_autorizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_fecha_autorizacion']) && $this->nmgp_cmp_hidden['fac_fecha_autorizacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_fecha_autorizacion" value="<?php echo $this->form_encode_input($fac_fecha_autorizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_fecha_autorizacion_line" id="hidden_field_data_fac_fecha_autorizacion" style="<?php echo $sStyleHidden_fac_fecha_autorizacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_fecha_autorizacion_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="fac_fecha_autorizacion" value="<?php echo $this->form_encode_input($fac_fecha_autorizacion); ?>"><span id="id_ajax_label_fac_fecha_autorizacion"><?php echo nl2br($fac_fecha_autorizacion); ?></span>
<?php
$tmp_form_data = $this->field_config['fac_fecha_autorizacion']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_fecha_autorizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_fecha_autorizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_autorizacion']))
    {
        $this->nm_new_label['fac_autorizacion'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_autorizacion = $this->fac_autorizacion;
   if (!isset($this->nmgp_cmp_hidden['fac_autorizacion']))
   {
       $this->nmgp_cmp_hidden['fac_autorizacion'] = 'off';
   }
   $sStyleHidden_fac_autorizacion = '';
   if (isset($this->nmgp_cmp_hidden['fac_autorizacion']) && $this->nmgp_cmp_hidden['fac_autorizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_autorizacion']);
       $sStyleHidden_fac_autorizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_autorizacion = 'display: none;';
   $sStyleReadInp_fac_autorizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_autorizacion']) && $this->nmgp_cmp_readonly['fac_autorizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_autorizacion']);
       $sStyleReadLab_fac_autorizacion = '';
       $sStyleReadInp_fac_autorizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_autorizacion']) && $this->nmgp_cmp_hidden['fac_autorizacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_autorizacion" value="<?php echo $this->form_encode_input($fac_autorizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_autorizacion_line" id="hidden_field_data_fac_autorizacion" style="<?php echo $sStyleHidden_fac_autorizacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_autorizacion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_autorizacion"]) &&  $this->nmgp_cmp_readonly["fac_autorizacion"] == "on") { 

 ?>
<input type="hidden" name="fac_autorizacion" value="<?php echo $this->form_encode_input($fac_autorizacion) . "\">" . $fac_autorizacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_autorizacion" class="sc-ui-readonly-fac_autorizacion css_fac_autorizacion_line" style="<?php echo $sStyleReadLab_fac_autorizacion; ?>"><?php echo $this->form_format_readonly("fac_autorizacion", $this->form_encode_input($this->fac_autorizacion)); ?></span><span id="id_read_off_fac_autorizacion" class="css_read_off_fac_autorizacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_autorizacion; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_autorizacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_autorizacion" type=text name="fac_autorizacion" value="<?php echo $this->form_encode_input($fac_autorizacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_autorizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_autorizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_usuario']))
    {
        $this->nm_new_label['fac_usuario'] = "" . $this->Ini->Nm_lang['lang_usuario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_usuario = $this->fac_usuario;
   if (!isset($this->nmgp_cmp_hidden['fac_usuario']))
   {
       $this->nmgp_cmp_hidden['fac_usuario'] = 'off';
   }
   $sStyleHidden_fac_usuario = '';
   if (isset($this->nmgp_cmp_hidden['fac_usuario']) && $this->nmgp_cmp_hidden['fac_usuario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_usuario']);
       $sStyleHidden_fac_usuario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_usuario = 'display: none;';
   $sStyleReadInp_fac_usuario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_usuario']) && $this->nmgp_cmp_readonly['fac_usuario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_usuario']);
       $sStyleReadLab_fac_usuario = '';
       $sStyleReadInp_fac_usuario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_usuario']) && $this->nmgp_cmp_hidden['fac_usuario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_usuario" value="<?php echo $this->form_encode_input($fac_usuario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_usuario_line" id="hidden_field_data_fac_usuario" style="<?php echo $sStyleHidden_fac_usuario; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_usuario_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_usuario"]) &&  $this->nmgp_cmp_readonly["fac_usuario"] == "on") { 

 ?>
<input type="hidden" name="fac_usuario" value="<?php echo $this->form_encode_input($fac_usuario) . "\">" . $fac_usuario . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_usuario" class="sc-ui-readonly-fac_usuario css_fac_usuario_line" style="<?php echo $sStyleReadLab_fac_usuario; ?>"><?php echo $this->form_format_readonly("fac_usuario", $this->form_encode_input($this->fac_usuario)); ?></span><span id="id_read_off_fac_usuario" class="css_read_off_fac_usuario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_usuario; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_usuario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_usuario" type=text name="fac_usuario" value="<?php echo $this->form_encode_input($fac_usuario) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=35"; } ?> maxlength=35 alt="{datatype: 'text', maxLength: 35, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_usuario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_usuario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_clave']))
    {
        $this->nm_new_label['fac_clave'] = "Fac Clave";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_clave = $this->fac_clave;
   if (!isset($this->nmgp_cmp_hidden['fac_clave']))
   {
       $this->nmgp_cmp_hidden['fac_clave'] = 'off';
   }
   $sStyleHidden_fac_clave = '';
   if (isset($this->nmgp_cmp_hidden['fac_clave']) && $this->nmgp_cmp_hidden['fac_clave'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_clave']);
       $sStyleHidden_fac_clave = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_clave = 'display: none;';
   $sStyleReadInp_fac_clave = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_clave']) && $this->nmgp_cmp_readonly['fac_clave'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_clave']);
       $sStyleReadLab_fac_clave = '';
       $sStyleReadInp_fac_clave = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_clave']) && $this->nmgp_cmp_hidden['fac_clave'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_clave" value="<?php echo $this->form_encode_input($fac_clave) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_clave_line" id="hidden_field_data_fac_clave" style="<?php echo $sStyleHidden_fac_clave; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_clave_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_clave"]) &&  $this->nmgp_cmp_readonly["fac_clave"] == "on") { 

 ?>
<input type="hidden" name="fac_clave" value="<?php echo $this->form_encode_input($fac_clave) . "\">" . $fac_clave . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_clave" class="sc-ui-readonly-fac_clave css_fac_clave_line" style="<?php echo $sStyleReadLab_fac_clave; ?>"><?php echo $this->form_format_readonly("fac_clave", $this->form_encode_input($this->fac_clave)); ?></span><span id="id_read_off_fac_clave" class="css_read_off_fac_clave<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_clave; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_clave_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_clave" type=text name="fac_clave" value="<?php echo $this->form_encode_input($fac_clave) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_clave_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_clave_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_retencion']))
    {
        $this->nm_new_label['fac_retencion'] = "Fac Retencion";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_retencion = $this->fac_retencion;
   if (!isset($this->nmgp_cmp_hidden['fac_retencion']))
   {
       $this->nmgp_cmp_hidden['fac_retencion'] = 'off';
   }
   $sStyleHidden_fac_retencion = '';
   if (isset($this->nmgp_cmp_hidden['fac_retencion']) && $this->nmgp_cmp_hidden['fac_retencion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_retencion']);
       $sStyleHidden_fac_retencion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_retencion = 'display: none;';
   $sStyleReadInp_fac_retencion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_retencion']) && $this->nmgp_cmp_readonly['fac_retencion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_retencion']);
       $sStyleReadLab_fac_retencion = '';
       $sStyleReadInp_fac_retencion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_retencion']) && $this->nmgp_cmp_hidden['fac_retencion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_retencion" value="<?php echo $this->form_encode_input($fac_retencion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_retencion_line" id="hidden_field_data_fac_retencion" style="<?php echo $sStyleHidden_fac_retencion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_retencion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_retencion"]) &&  $this->nmgp_cmp_readonly["fac_retencion"] == "on") { 

 ?>
<input type="hidden" name="fac_retencion" value="<?php echo $this->form_encode_input($fac_retencion) . "\">" . $fac_retencion . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_retencion" class="sc-ui-readonly-fac_retencion css_fac_retencion_line" style="<?php echo $sStyleReadLab_fac_retencion; ?>"><?php echo $this->form_format_readonly("fac_retencion", $this->form_encode_input($this->fac_retencion)); ?></span><span id="id_read_off_fac_retencion" class="css_read_off_fac_retencion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_retencion; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_retencion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_retencion" type=text name="fac_retencion" value="<?php echo $this->form_encode_input($fac_retencion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['fac_retencion']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['fac_retencion']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fac_retencion']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_retencion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_retencion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fac_retencion_dumb = ('' == $sStyleHidden_fac_retencion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_retencion_dumb" style="<?php echo $sStyleHidden_fac_retencion_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf1\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_datos_factura'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormDataOdd css_fac_libretin_line" id="hidden_field_data_fac_libretin" style="<?php echo $sStyleHidden_fac_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_libretin_label" style=""><span id="id_label_fac_libretin"><?php echo $this->nm_new_label['fac_libretin']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['php_cmp_required']['fac_libretin']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['php_cmp_required']['fac_libretin'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_libretin"]) &&  $this->nmgp_cmp_readonly["fac_libretin"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_libretin']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_libretin']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_libretin'] = array(); 
    }

   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_establecimiento = $this->fac_establecimiento;
   $old_value_fac_punto_emision = $this->fac_punto_emision;
   $old_value_fac_ambiente = $this->fac_ambiente;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_propina = $this->fac_propina;
   $old_value_fac_total = $this->fac_total;
   $old_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $old_value_fac_retencion = $this->fac_retencion;
   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_secuencial = $this->fac_secuencial;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_establecimiento = $this->fac_establecimiento;
   $unformatted_value_fac_punto_emision = $this->fac_punto_emision;
   $unformatted_value_fac_ambiente = $this->fac_ambiente;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_propina = $this->fac_propina;
   $unformatted_value_fac_total = $this->fac_total;
   $unformatted_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $unformatted_value_fac_retencion = $this->fac_retencion;
   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_secuencial = $this->fac_secuencial;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante in ('01','99')";

   $this->fac_numero = $old_value_fac_numero;
   $this->fac_establecimiento = $old_value_fac_establecimiento;
   $this->fac_punto_emision = $old_value_fac_punto_emision;
   $this->fac_ambiente = $old_value_fac_ambiente;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_propina = $old_value_fac_propina;
   $this->fac_total = $old_value_fac_total;
   $this->fac_fecha_autorizacion = $old_value_fac_fecha_autorizacion;
   $this->fac_retencion = $old_value_fac_retencion;
   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_secuencial = $old_value_fac_secuencial;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_libretin'][] = $rs->fields[0];
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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'text', maxLength: 9, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fac_moneda']))
   {
       $this->nm_new_label['fac_moneda'] = "" . $this->Ini->Nm_lang['lang_moneda'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_moneda = $this->fac_moneda;
   $sStyleHidden_fac_moneda = '';
   if (isset($this->nmgp_cmp_hidden['fac_moneda']) && $this->nmgp_cmp_hidden['fac_moneda'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_moneda']);
       $sStyleHidden_fac_moneda = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_moneda = 'display: none;';
   $sStyleReadInp_fac_moneda = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_moneda']) && $this->nmgp_cmp_readonly['fac_moneda'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_moneda']);
       $sStyleReadLab_fac_moneda = '';
       $sStyleReadInp_fac_moneda = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_moneda']) && $this->nmgp_cmp_hidden['fac_moneda'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fac_moneda" value="<?php echo $this->form_encode_input($this->fac_moneda) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_moneda_line" id="hidden_field_data_fac_moneda" style="<?php echo $sStyleHidden_fac_moneda; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_moneda_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_moneda_label" style=""><span id="id_label_fac_moneda"><?php echo $this->nm_new_label['fac_moneda']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_moneda"]) &&  $this->nmgp_cmp_readonly["fac_moneda"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_moneda']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_moneda'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_moneda']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_moneda'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_moneda']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_moneda'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_moneda']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_moneda'] = array(); 
    }

   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_establecimiento = $this->fac_establecimiento;
   $old_value_fac_punto_emision = $this->fac_punto_emision;
   $old_value_fac_ambiente = $this->fac_ambiente;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_propina = $this->fac_propina;
   $old_value_fac_total = $this->fac_total;
   $old_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $old_value_fac_retencion = $this->fac_retencion;
   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_secuencial = $this->fac_secuencial;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_establecimiento = $this->fac_establecimiento;
   $unformatted_value_fac_punto_emision = $this->fac_punto_emision;
   $unformatted_value_fac_ambiente = $this->fac_ambiente;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_propina = $this->fac_propina;
   $unformatted_value_fac_total = $this->fac_total;
   $unformatted_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $unformatted_value_fac_retencion = $this->fac_retencion;
   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_secuencial = $this->fac_secuencial;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_moneda  ORDER BY dec_nombre";

   $this->fac_numero = $old_value_fac_numero;
   $this->fac_establecimiento = $old_value_fac_establecimiento;
   $this->fac_punto_emision = $old_value_fac_punto_emision;
   $this->fac_ambiente = $old_value_fac_ambiente;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_propina = $old_value_fac_propina;
   $this->fac_total = $old_value_fac_total;
   $this->fac_fecha_autorizacion = $old_value_fac_fecha_autorizacion;
   $this->fac_retencion = $old_value_fac_retencion;
   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_secuencial = $old_value_fac_secuencial;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_moneda'][] = $rs->fields[0];
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
   $fac_moneda_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_moneda_1))
          {
              foreach ($this->fac_moneda_1 as $tmp_fac_moneda)
              {
                  if (trim($tmp_fac_moneda) === trim($cadaselect[1])) {$fac_moneda_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_moneda) && trim($this->fac_moneda) === trim($cadaselect[1])) {$fac_moneda_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fac_moneda" value="<?php echo $this->form_encode_input($fac_moneda) . "\">" . $fac_moneda_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fac_moneda();
   $x = 0 ; 
   $fac_moneda_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_moneda_1))
          {
              foreach ($this->fac_moneda_1 as $tmp_fac_moneda)
              {
                  if (trim($tmp_fac_moneda) === trim($cadaselect[1])) {$fac_moneda_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_moneda) && trim($this->fac_moneda) === trim($cadaselect[1])) { $fac_moneda_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fac_moneda_look))
          {
              $fac_moneda_look = $this->fac_moneda;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fac_moneda\" class=\"css_fac_moneda_line\" style=\"" .  $sStyleReadLab_fac_moneda . "\">" . $this->form_format_readonly("fac_moneda", $this->form_encode_input($fac_moneda_look)) . "</span><span id=\"id_read_off_fac_moneda\" class=\"css_read_off_fac_moneda" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fac_moneda . "\">";
   echo " <span id=\"idAjaxSelect_fac_moneda\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fac_moneda_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fac_moneda\" name=\"fac_moneda\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fac_moneda) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fac_moneda)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_moneda_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_moneda_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
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





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_secuencial']))
    {
        $this->nm_new_label['fac_secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_secuencial = $this->fac_secuencial;
   if (!isset($this->nmgp_cmp_hidden['fac_secuencial']))
   {
       $this->nmgp_cmp_hidden['fac_secuencial'] = 'off';
   }
   $sStyleHidden_fac_secuencial = '';
   if (isset($this->nmgp_cmp_hidden['fac_secuencial']) && $this->nmgp_cmp_hidden['fac_secuencial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_secuencial']);
       $sStyleHidden_fac_secuencial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_secuencial = 'display: none;';
   $sStyleReadInp_fac_secuencial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_secuencial']) && $this->nmgp_cmp_readonly['fac_secuencial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_secuencial']);
       $sStyleReadLab_fac_secuencial = '';
       $sStyleReadInp_fac_secuencial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_secuencial']) && $this->nmgp_cmp_hidden['fac_secuencial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_secuencial" value="<?php echo $this->form_encode_input($fac_secuencial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_secuencial_line" id="hidden_field_data_fac_secuencial" style="<?php echo $sStyleHidden_fac_secuencial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_secuencial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_secuencial_label" style=""><span id="id_label_fac_secuencial"><?php echo $this->nm_new_label['fac_secuencial']; ?></span></span><br><input type="hidden" name="fac_secuencial" value="<?php echo $this->form_encode_input($fac_secuencial); ?>"><span id="id_ajax_label_fac_secuencial"><?php echo nl2br($fac_secuencial); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fac_secuencial_dumb = ('' == $sStyleHidden_fac_secuencial) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_secuencial_dumb" style="<?php echo $sStyleHidden_fac_secuencial_dumb; ?>"></TD>
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
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_productos'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_productos'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['productos_venta_empresas_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_productos'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['productos_venta_empresas_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['productos_venta_empresas_script_case_init'] ]['productos_venta_empresas']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['productos_venta_empresas_script_case_init'] ]['productos_venta_empresas']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['productos_venta_empresas_script_case_init'] ]['productos_venta_empresas']['embutida_pai']        = "form_del_punto_venta_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['productos_venta_empresas_script_case_init'] ]['productos_venta_empresas']['embutida_form_parms'] = "NMSC_inicial*scininicio*scoutNMSC_paginacao*scinPARCIAL*scout";
 if (isset($this->Ini->sc_lig_md5["productos_venta_empresas"]) && $this->Ini->sc_lig_md5["productos_venta_empresas"] == "S") {
     $Parms_Lig  = "NMSC_inicial*scininicio*scoutNMSC_paginacao*scinPARCIAL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_punto_venta_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "NMSC_inicial*scininicio*scoutNMSC_paginacao*scinPARCIAL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_punto_venta_mob_empty.htm' : $this->Ini->link_productos_venta_empresas_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=520' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['productos_venta_empresas_script_case_init'] ]['productos_venta_empresas'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['productos_venta_empresas_script_case_init'] ]['productos_venta_empresas'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_productos']) && 'nmsc_iframe_liga_productos_venta_empresas' != $this->Ini->sc_lig_target['C_@scinf_productos'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_productos'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['productos_venta_empresas_script_case_init']);
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
<iframe border="0" id="nmsc_iframe_liga_productos_venta_empresas"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="520" width="100%" name="nmsc_iframe_liga_productos_venta_empresas"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_productos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_productos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_productos_dumb = ('' == $sStyleHidden_productos) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_productos_dumb" style="<?php echo $sStyleHidden_productos_dumb; ?>"></TD>
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
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalle'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalle'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['grid_detalle_factura_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalle'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['grid_detalle_factura_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['grid_detalle_factura_script_case_init'] ]['grid_detalle_factura']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['grid_detalle_factura_script_case_init'] ]['grid_detalle_factura']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['grid_detalle_factura_script_case_init'] ]['grid_detalle_factura']['embutida_pai']        = "form_del_punto_venta_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['grid_detalle_factura_script_case_init'] ]['grid_detalle_factura']['embutida_form_parms'] = "var_factura*scin" . $this->nmgp_dados_form['fac_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_detalle_factura"]) && $this->Ini->sc_lig_md5["grid_detalle_factura"] == "S") {
     $Parms_Lig  = "var_factura*scin" . $this->nmgp_dados_form['fac_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_punto_venta_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_factura*scin" . $this->nmgp_dados_form['fac_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_punto_venta_mob_empty.htm' : $this->Ini->link_grid_detalle_factura_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=520' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['grid_detalle_factura_script_case_init'] ]['grid_detalle_factura'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['grid_detalle_factura_script_case_init'] ]['grid_detalle_factura'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_detalle']) && 'nmsc_iframe_liga_grid_detalle_factura' != $this->Ini->sc_lig_target['C_@scinf_detalle'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_detalle'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['grid_detalle_factura_script_case_init']);
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
<iframe border="0" id="nmsc_iframe_liga_grid_detalle_factura"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="520" width="100%" name="nmsc_iframe_liga_grid_detalle_factura"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
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
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf4\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_exp . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_datos_cliente'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_cliente']))
    {
        $this->nm_new_label['fac_cliente'] = "" . $this->Ini->Nm_lang['lang_cliente'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_cliente = $this->fac_cliente;
   if (!isset($this->nmgp_cmp_hidden['fac_cliente']))
   {
       $this->nmgp_cmp_hidden['fac_cliente'] = 'off';
   }
   $sStyleHidden_fac_cliente = '';
   if (isset($this->nmgp_cmp_hidden['fac_cliente']) && $this->nmgp_cmp_hidden['fac_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_cliente']);
       $sStyleHidden_fac_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_cliente = 'display: none;';
   $sStyleReadInp_fac_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_cliente']) && $this->nmgp_cmp_readonly['fac_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_cliente']);
       $sStyleReadLab_fac_cliente = '';
       $sStyleReadInp_fac_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_cliente']) && $this->nmgp_cmp_hidden['fac_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_cliente" value="<?php echo $this->form_encode_input($fac_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_cliente_line" id="hidden_field_data_fac_cliente" style="<?php echo $sStyleHidden_fac_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_cliente_label" style=""><span id="id_label_fac_cliente"><?php echo $this->nm_new_label['fac_cliente']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['php_cmp_required']['fac_cliente']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['php_cmp_required']['fac_cliente'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br><input type="hidden" name="fac_cliente" value="<?php echo $this->form_encode_input($fac_cliente); ?>"><span id="id_ajax_label_fac_cliente"><?php echo nl2br($fac_cliente); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ruc']))
    {
        $this->nm_new_label['ruc'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ruc = $this->ruc;
   $sStyleHidden_ruc = '';
   if (isset($this->nmgp_cmp_hidden['ruc']) && $this->nmgp_cmp_hidden['ruc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ruc']);
       $sStyleHidden_ruc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ruc = 'display: none;';
   $sStyleReadInp_ruc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ruc']) && $this->nmgp_cmp_readonly['ruc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ruc']);
       $sStyleReadLab_ruc = '';
       $sStyleReadInp_ruc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ruc']) && $this->nmgp_cmp_hidden['ruc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ruc" value="<?php echo $this->form_encode_input($ruc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ruc_line" id="hidden_field_data_ruc" style="<?php echo $sStyleHidden_ruc; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ruc_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ruc_label" style=""><span id="id_label_ruc"><?php echo $this->nm_new_label['ruc']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ruc"]) &&  $this->nmgp_cmp_readonly["ruc"] == "on") { 

 ?>
<input type="hidden" name="ruc" value="<?php echo $this->form_encode_input($ruc) . "\">" . $ruc . ""; ?>
<?php } else { ?>
<span id="id_read_on_ruc" class="sc-ui-readonly-ruc css_ruc_line" style="<?php echo $sStyleReadLab_ruc; ?>"><?php echo $this->form_format_readonly("ruc", $this->form_encode_input($this->ruc)); ?></span><span id="id_read_off_ruc" class="css_read_off_ruc<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ruc; ?>">
 <input class="sc-js-input scFormObjectOdd css_ruc_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ruc" type=text name="ruc" value="<?php echo $this->form_encode_input($ruc) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ruc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ruc_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_tipo_identificacion']))
    {
        $this->nm_new_label['fac_tipo_identificacion'] = "fac_tipo_identificacion";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_tipo_identificacion = $this->fac_tipo_identificacion;
   if (!isset($this->nmgp_cmp_hidden['fac_tipo_identificacion']))
   {
       $this->nmgp_cmp_hidden['fac_tipo_identificacion'] = 'off';
   }
   $sStyleHidden_fac_tipo_identificacion = '';
   if (isset($this->nmgp_cmp_hidden['fac_tipo_identificacion']) && $this->nmgp_cmp_hidden['fac_tipo_identificacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_tipo_identificacion']);
       $sStyleHidden_fac_tipo_identificacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_tipo_identificacion = 'display: none;';
   $sStyleReadInp_fac_tipo_identificacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_tipo_identificacion']) && $this->nmgp_cmp_readonly['fac_tipo_identificacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_tipo_identificacion']);
       $sStyleReadLab_fac_tipo_identificacion = '';
       $sStyleReadInp_fac_tipo_identificacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_tipo_identificacion']) && $this->nmgp_cmp_hidden['fac_tipo_identificacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_tipo_identificacion" value="<?php echo $this->form_encode_input($fac_tipo_identificacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_tipo_identificacion_line" id="hidden_field_data_fac_tipo_identificacion" style="<?php echo $sStyleHidden_fac_tipo_identificacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_tipo_identificacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_tipo_identificacion_label" style=""><span id="id_label_fac_tipo_identificacion"><?php echo $this->nm_new_label['fac_tipo_identificacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_tipo_identificacion"]) &&  $this->nmgp_cmp_readonly["fac_tipo_identificacion"] == "on") { 

 ?>
<input type="hidden" name="fac_tipo_identificacion" value="<?php echo $this->form_encode_input($fac_tipo_identificacion) . "\">" . $fac_tipo_identificacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_tipo_identificacion" class="sc-ui-readonly-fac_tipo_identificacion css_fac_tipo_identificacion_line" style="<?php echo $sStyleReadLab_fac_tipo_identificacion; ?>"><?php echo $this->form_format_readonly("fac_tipo_identificacion", $this->form_encode_input($this->fac_tipo_identificacion)); ?></span><span id="id_read_off_fac_tipo_identificacion" class="css_read_off_fac_tipo_identificacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_tipo_identificacion; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_tipo_identificacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_tipo_identificacion" type=text name="fac_tipo_identificacion" value="<?php echo $this->form_encode_input($fac_tipo_identificacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_tipo_identificacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_tipo_identificacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_nombre_cliente']))
    {
        $this->nm_new_label['fac_nombre_cliente'] = "" . $this->Ini->Nm_lang['lang_nombre'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_nombre_cliente = $this->fac_nombre_cliente;
   $sStyleHidden_fac_nombre_cliente = '';
   if (isset($this->nmgp_cmp_hidden['fac_nombre_cliente']) && $this->nmgp_cmp_hidden['fac_nombre_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_nombre_cliente']);
       $sStyleHidden_fac_nombre_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_nombre_cliente = 'display: none;';
   $sStyleReadInp_fac_nombre_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_nombre_cliente']) && $this->nmgp_cmp_readonly['fac_nombre_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_nombre_cliente']);
       $sStyleReadLab_fac_nombre_cliente = '';
       $sStyleReadInp_fac_nombre_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_nombre_cliente']) && $this->nmgp_cmp_hidden['fac_nombre_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_nombre_cliente" value="<?php echo $this->form_encode_input($fac_nombre_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_nombre_cliente_line" id="hidden_field_data_fac_nombre_cliente" style="<?php echo $sStyleHidden_fac_nombre_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_nombre_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_nombre_cliente_label" style=""><span id="id_label_fac_nombre_cliente"><?php echo $this->nm_new_label['fac_nombre_cliente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_nombre_cliente"]) &&  $this->nmgp_cmp_readonly["fac_nombre_cliente"] == "on") { 

 ?>
<input type="hidden" name="fac_nombre_cliente" value="<?php echo $this->form_encode_input($fac_nombre_cliente) . "\">" . $fac_nombre_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_nombre_cliente" class="sc-ui-readonly-fac_nombre_cliente css_fac_nombre_cliente_line" style="<?php echo $sStyleReadLab_fac_nombre_cliente; ?>"><?php echo $this->form_format_readonly("fac_nombre_cliente", $this->form_encode_input($this->fac_nombre_cliente)); ?></span><span id="id_read_off_fac_nombre_cliente" class="css_read_off_fac_nombre_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_nombre_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_nombre_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_nombre_cliente" type=text name="fac_nombre_cliente" value="<?php echo $this->form_encode_input($fac_nombre_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_nombre_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_nombre_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fac_provincia_cliente']))
   {
       $this->nm_new_label['fac_provincia_cliente'] = "" . $this->Ini->Nm_lang['lang_provincia'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_provincia_cliente = $this->fac_provincia_cliente;
   $sStyleHidden_fac_provincia_cliente = '';
   if (isset($this->nmgp_cmp_hidden['fac_provincia_cliente']) && $this->nmgp_cmp_hidden['fac_provincia_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_provincia_cliente']);
       $sStyleHidden_fac_provincia_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_provincia_cliente = 'display: none;';
   $sStyleReadInp_fac_provincia_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_provincia_cliente']) && $this->nmgp_cmp_readonly['fac_provincia_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_provincia_cliente']);
       $sStyleReadLab_fac_provincia_cliente = '';
       $sStyleReadInp_fac_provincia_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_provincia_cliente']) && $this->nmgp_cmp_hidden['fac_provincia_cliente'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fac_provincia_cliente" value="<?php echo $this->form_encode_input($this->fac_provincia_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_provincia_cliente_line" id="hidden_field_data_fac_provincia_cliente" style="<?php echo $sStyleHidden_fac_provincia_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_provincia_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_provincia_cliente_label" style=""><span id="id_label_fac_provincia_cliente"><?php echo $this->nm_new_label['fac_provincia_cliente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_provincia_cliente"]) &&  $this->nmgp_cmp_readonly["fac_provincia_cliente"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_provincia_cliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_provincia_cliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_provincia_cliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_provincia_cliente'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_provincia_cliente']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_provincia_cliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_provincia_cliente']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_provincia_cliente'] = array(); 
    }

   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_establecimiento = $this->fac_establecimiento;
   $old_value_fac_punto_emision = $this->fac_punto_emision;
   $old_value_fac_ambiente = $this->fac_ambiente;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_propina = $this->fac_propina;
   $old_value_fac_total = $this->fac_total;
   $old_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $old_value_fac_retencion = $this->fac_retencion;
   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_secuencial = $this->fac_secuencial;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_establecimiento = $this->fac_establecimiento;
   $unformatted_value_fac_punto_emision = $this->fac_punto_emision;
   $unformatted_value_fac_ambiente = $this->fac_ambiente;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_propina = $this->fac_propina;
   $unformatted_value_fac_total = $this->fac_total;
   $unformatted_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $unformatted_value_fac_retencion = $this->fac_retencion;
   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_secuencial = $this->fac_secuencial;

   $nm_comando = "SELECT pro_nombre, pro_nombre  FROM sis_provincia  where pro_pais=66 ORDER BY pro_nombre";

   $this->fac_numero = $old_value_fac_numero;
   $this->fac_establecimiento = $old_value_fac_establecimiento;
   $this->fac_punto_emision = $old_value_fac_punto_emision;
   $this->fac_ambiente = $old_value_fac_ambiente;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_propina = $old_value_fac_propina;
   $this->fac_total = $old_value_fac_total;
   $this->fac_fecha_autorizacion = $old_value_fac_fecha_autorizacion;
   $this->fac_retencion = $old_value_fac_retencion;
   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_secuencial = $old_value_fac_secuencial;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_provincia_cliente'][] = $rs->fields[0];
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
   $fac_provincia_cliente_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_provincia_cliente_1))
          {
              foreach ($this->fac_provincia_cliente_1 as $tmp_fac_provincia_cliente)
              {
                  if (trim($tmp_fac_provincia_cliente) === trim($cadaselect[1])) {$fac_provincia_cliente_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_provincia_cliente) && trim($this->fac_provincia_cliente) === trim($cadaselect[1])) {$fac_provincia_cliente_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fac_provincia_cliente" value="<?php echo $this->form_encode_input($fac_provincia_cliente) . "\">" . $fac_provincia_cliente_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fac_provincia_cliente();
   $x = 0 ; 
   $fac_provincia_cliente_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_provincia_cliente_1))
          {
              foreach ($this->fac_provincia_cliente_1 as $tmp_fac_provincia_cliente)
              {
                  if (trim($tmp_fac_provincia_cliente) === trim($cadaselect[1])) {$fac_provincia_cliente_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_provincia_cliente) && trim($this->fac_provincia_cliente) === trim($cadaselect[1])) { $fac_provincia_cliente_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fac_provincia_cliente_look))
          {
              $fac_provincia_cliente_look = $this->fac_provincia_cliente;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fac_provincia_cliente\" class=\"css_fac_provincia_cliente_line\" style=\"" .  $sStyleReadLab_fac_provincia_cliente . "\">" . $this->form_format_readonly("fac_provincia_cliente", $this->form_encode_input($fac_provincia_cliente_look)) . "</span><span id=\"id_read_off_fac_provincia_cliente\" class=\"css_read_off_fac_provincia_cliente" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fac_provincia_cliente . "\">";
   echo " <span id=\"idAjaxSelect_fac_provincia_cliente\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fac_provincia_cliente_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fac_provincia_cliente\" name=\"fac_provincia_cliente\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fac_provincia_cliente) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fac_provincia_cliente)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_provincia_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_provincia_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fac_canton_cliente']))
   {
       $this->nm_new_label['fac_canton_cliente'] = "" . $this->Ini->Nm_lang['lang_canton'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_canton_cliente = $this->fac_canton_cliente;
   $sStyleHidden_fac_canton_cliente = '';
   if (isset($this->nmgp_cmp_hidden['fac_canton_cliente']) && $this->nmgp_cmp_hidden['fac_canton_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_canton_cliente']);
       $sStyleHidden_fac_canton_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_canton_cliente = 'display: none;';
   $sStyleReadInp_fac_canton_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_canton_cliente']) && $this->nmgp_cmp_readonly['fac_canton_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_canton_cliente']);
       $sStyleReadLab_fac_canton_cliente = '';
       $sStyleReadInp_fac_canton_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_canton_cliente']) && $this->nmgp_cmp_hidden['fac_canton_cliente'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fac_canton_cliente" value="<?php echo $this->form_encode_input($this->fac_canton_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_canton_cliente_line" id="hidden_field_data_fac_canton_cliente" style="<?php echo $sStyleHidden_fac_canton_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_canton_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_canton_cliente_label" style=""><span id="id_label_fac_canton_cliente"><?php echo $this->nm_new_label['fac_canton_cliente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_canton_cliente"]) &&  $this->nmgp_cmp_readonly["fac_canton_cliente"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_canton_cliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_canton_cliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_canton_cliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_canton_cliente'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_canton_cliente']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_canton_cliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_canton_cliente']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_canton_cliente'] = array(); 
    }

   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_establecimiento = $this->fac_establecimiento;
   $old_value_fac_punto_emision = $this->fac_punto_emision;
   $old_value_fac_ambiente = $this->fac_ambiente;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_propina = $this->fac_propina;
   $old_value_fac_total = $this->fac_total;
   $old_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $old_value_fac_retencion = $this->fac_retencion;
   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_secuencial = $this->fac_secuencial;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_establecimiento = $this->fac_establecimiento;
   $unformatted_value_fac_punto_emision = $this->fac_punto_emision;
   $unformatted_value_fac_ambiente = $this->fac_ambiente;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_propina = $this->fac_propina;
   $unformatted_value_fac_total = $this->fac_total;
   $unformatted_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $unformatted_value_fac_retencion = $this->fac_retencion;
   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_secuencial = $this->fac_secuencial;

   $nm_comando = "SELECT can_nombre , can_nombre  FROM sis_canton  where can_provincia in (SELECT pro_id FROM sis_provincia where pro_nombre='$this->fac_provincia_cliente'  ) ORDER BY can_nombre";

   $this->fac_numero = $old_value_fac_numero;
   $this->fac_establecimiento = $old_value_fac_establecimiento;
   $this->fac_punto_emision = $old_value_fac_punto_emision;
   $this->fac_ambiente = $old_value_fac_ambiente;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_propina = $old_value_fac_propina;
   $this->fac_total = $old_value_fac_total;
   $this->fac_fecha_autorizacion = $old_value_fac_fecha_autorizacion;
   $this->fac_retencion = $old_value_fac_retencion;
   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_secuencial = $old_value_fac_secuencial;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_canton_cliente'][] = $rs->fields[0];
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
   $fac_canton_cliente_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_canton_cliente_1))
          {
              foreach ($this->fac_canton_cliente_1 as $tmp_fac_canton_cliente)
              {
                  if (trim($tmp_fac_canton_cliente) === trim($cadaselect[1])) {$fac_canton_cliente_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_canton_cliente) && trim($this->fac_canton_cliente) === trim($cadaselect[1])) {$fac_canton_cliente_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fac_canton_cliente" value="<?php echo $this->form_encode_input($fac_canton_cliente) . "\">" . $fac_canton_cliente_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fac_canton_cliente();
   $x = 0 ; 
   $fac_canton_cliente_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_canton_cliente_1))
          {
              foreach ($this->fac_canton_cliente_1 as $tmp_fac_canton_cliente)
              {
                  if (trim($tmp_fac_canton_cliente) === trim($cadaselect[1])) {$fac_canton_cliente_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_canton_cliente) && trim($this->fac_canton_cliente) === trim($cadaselect[1])) { $fac_canton_cliente_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fac_canton_cliente_look))
          {
              $fac_canton_cliente_look = $this->fac_canton_cliente;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fac_canton_cliente\" class=\"css_fac_canton_cliente_line\" style=\"" .  $sStyleReadLab_fac_canton_cliente . "\">" . $this->form_format_readonly("fac_canton_cliente", $this->form_encode_input($fac_canton_cliente_look)) . "</span><span id=\"id_read_off_fac_canton_cliente\" class=\"css_read_off_fac_canton_cliente" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fac_canton_cliente . "\">";
   echo " <span id=\"idAjaxSelect_fac_canton_cliente\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fac_canton_cliente_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fac_canton_cliente\" name=\"fac_canton_cliente\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fac_canton_cliente) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fac_canton_cliente)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_canton_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_canton_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_direccion_cliente']))
    {
        $this->nm_new_label['fac_direccion_cliente'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_direccion_cliente = $this->fac_direccion_cliente;
   $sStyleHidden_fac_direccion_cliente = '';
   if (isset($this->nmgp_cmp_hidden['fac_direccion_cliente']) && $this->nmgp_cmp_hidden['fac_direccion_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_direccion_cliente']);
       $sStyleHidden_fac_direccion_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_direccion_cliente = 'display: none;';
   $sStyleReadInp_fac_direccion_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_direccion_cliente']) && $this->nmgp_cmp_readonly['fac_direccion_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_direccion_cliente']);
       $sStyleReadLab_fac_direccion_cliente = '';
       $sStyleReadInp_fac_direccion_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_direccion_cliente']) && $this->nmgp_cmp_hidden['fac_direccion_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_direccion_cliente" value="<?php echo $this->form_encode_input($fac_direccion_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_direccion_cliente_line" id="hidden_field_data_fac_direccion_cliente" style="<?php echo $sStyleHidden_fac_direccion_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_direccion_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_direccion_cliente_label" style=""><span id="id_label_fac_direccion_cliente"><?php echo $this->nm_new_label['fac_direccion_cliente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_direccion_cliente"]) &&  $this->nmgp_cmp_readonly["fac_direccion_cliente"] == "on") { 

 ?>
<input type="hidden" name="fac_direccion_cliente" value="<?php echo $this->form_encode_input($fac_direccion_cliente) . "\">" . $fac_direccion_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_direccion_cliente" class="sc-ui-readonly-fac_direccion_cliente css_fac_direccion_cliente_line" style="<?php echo $sStyleReadLab_fac_direccion_cliente; ?>"><?php echo $this->form_format_readonly("fac_direccion_cliente", $this->form_encode_input($this->fac_direccion_cliente)); ?></span><span id="id_read_off_fac_direccion_cliente" class="css_read_off_fac_direccion_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_direccion_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_direccion_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_direccion_cliente" type=text name="fac_direccion_cliente" value="<?php echo $this->form_encode_input($fac_direccion_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_direccion_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_direccion_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_email_cliente']))
    {
        $this->nm_new_label['fac_email_cliente'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_email_cliente = $this->fac_email_cliente;
   $sStyleHidden_fac_email_cliente = '';
   if (isset($this->nmgp_cmp_hidden['fac_email_cliente']) && $this->nmgp_cmp_hidden['fac_email_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_email_cliente']);
       $sStyleHidden_fac_email_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_email_cliente = 'display: none;';
   $sStyleReadInp_fac_email_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_email_cliente']) && $this->nmgp_cmp_readonly['fac_email_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_email_cliente']);
       $sStyleReadLab_fac_email_cliente = '';
       $sStyleReadInp_fac_email_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_email_cliente']) && $this->nmgp_cmp_hidden['fac_email_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_email_cliente" value="<?php echo $this->form_encode_input($fac_email_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_email_cliente_line" id="hidden_field_data_fac_email_cliente" style="<?php echo $sStyleHidden_fac_email_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_email_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_email_cliente_label" style=""><span id="id_label_fac_email_cliente"><?php echo $this->nm_new_label['fac_email_cliente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_email_cliente"]) &&  $this->nmgp_cmp_readonly["fac_email_cliente"] == "on") { 

 ?>
<input type="hidden" name="fac_email_cliente" value="<?php echo $this->form_encode_input($fac_email_cliente) . "\">" . $fac_email_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_email_cliente" class="sc-ui-readonly-fac_email_cliente css_fac_email_cliente_line" style="<?php echo $sStyleReadLab_fac_email_cliente; ?>"><?php echo $this->form_format_readonly("fac_email_cliente", $this->form_encode_input($this->fac_email_cliente)); ?></span><span id="id_read_off_fac_email_cliente" class="css_read_off_fac_email_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_email_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_email_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_email_cliente" type=text name="fac_email_cliente" value="<?php echo $this->form_encode_input($fac_email_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_email_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_email_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_telefono_cliente']))
    {
        $this->nm_new_label['fac_telefono_cliente'] = "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_telefono_cliente = $this->fac_telefono_cliente;
   $sStyleHidden_fac_telefono_cliente = '';
   if (isset($this->nmgp_cmp_hidden['fac_telefono_cliente']) && $this->nmgp_cmp_hidden['fac_telefono_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_telefono_cliente']);
       $sStyleHidden_fac_telefono_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_telefono_cliente = 'display: none;';
   $sStyleReadInp_fac_telefono_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_telefono_cliente']) && $this->nmgp_cmp_readonly['fac_telefono_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_telefono_cliente']);
       $sStyleReadLab_fac_telefono_cliente = '';
       $sStyleReadInp_fac_telefono_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_telefono_cliente']) && $this->nmgp_cmp_hidden['fac_telefono_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_telefono_cliente" value="<?php echo $this->form_encode_input($fac_telefono_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_telefono_cliente_line" id="hidden_field_data_fac_telefono_cliente" style="<?php echo $sStyleHidden_fac_telefono_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_telefono_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_telefono_cliente_label" style=""><span id="id_label_fac_telefono_cliente"><?php echo $this->nm_new_label['fac_telefono_cliente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_telefono_cliente"]) &&  $this->nmgp_cmp_readonly["fac_telefono_cliente"] == "on") { 

 ?>
<input type="hidden" name="fac_telefono_cliente" value="<?php echo $this->form_encode_input($fac_telefono_cliente) . "\">" . $fac_telefono_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_telefono_cliente" class="sc-ui-readonly-fac_telefono_cliente css_fac_telefono_cliente_line" style="<?php echo $sStyleReadLab_fac_telefono_cliente; ?>"><?php echo $this->form_format_readonly("fac_telefono_cliente", $this->form_encode_input($this->fac_telefono_cliente)); ?></span><span id="id_read_off_fac_telefono_cliente" class="css_read_off_fac_telefono_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_telefono_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_telefono_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_telefono_cliente" type=text name="fac_telefono_cliente" value="<?php echo $this->form_encode_input($fac_telefono_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_telefono_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_telefono_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fac_aplica_propina']))
   {
       $this->nm_new_label['fac_aplica_propina'] = "" . $this->Ini->Nm_lang['lang_dar_propina'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_aplica_propina = $this->fac_aplica_propina;
   $sStyleHidden_fac_aplica_propina = '';
   if (isset($this->nmgp_cmp_hidden['fac_aplica_propina']) && $this->nmgp_cmp_hidden['fac_aplica_propina'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_aplica_propina']);
       $sStyleHidden_fac_aplica_propina = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_aplica_propina = 'display: none;';
   $sStyleReadInp_fac_aplica_propina = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_aplica_propina']) && $this->nmgp_cmp_readonly['fac_aplica_propina'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_aplica_propina']);
       $sStyleReadLab_fac_aplica_propina = '';
       $sStyleReadInp_fac_aplica_propina = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_aplica_propina']) && $this->nmgp_cmp_hidden['fac_aplica_propina'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fac_aplica_propina" value="<?php echo $this->form_encode_input($this->fac_aplica_propina) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_aplica_propina_line" id="hidden_field_data_fac_aplica_propina" style="<?php echo $sStyleHidden_fac_aplica_propina; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_aplica_propina_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_aplica_propina_label" style=""><span id="id_label_fac_aplica_propina"><?php echo $this->nm_new_label['fac_aplica_propina']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_aplica_propina"]) &&  $this->nmgp_cmp_readonly["fac_aplica_propina"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_aplica_propina']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_aplica_propina'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_aplica_propina']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_aplica_propina'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_aplica_propina']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_aplica_propina'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_aplica_propina']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_aplica_propina'] = array(); 
    }

   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_establecimiento = $this->fac_establecimiento;
   $old_value_fac_punto_emision = $this->fac_punto_emision;
   $old_value_fac_ambiente = $this->fac_ambiente;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_propina = $this->fac_propina;
   $old_value_fac_total = $this->fac_total;
   $old_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $old_value_fac_retencion = $this->fac_retencion;
   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_secuencial = $this->fac_secuencial;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_establecimiento = $this->fac_establecimiento;
   $unformatted_value_fac_punto_emision = $this->fac_punto_emision;
   $unformatted_value_fac_ambiente = $this->fac_ambiente;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_propina = $this->fac_propina;
   $unformatted_value_fac_total = $this->fac_total;
   $unformatted_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $unformatted_value_fac_retencion = $this->fac_retencion;
   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_secuencial = $this->fac_secuencial;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";

   $this->fac_numero = $old_value_fac_numero;
   $this->fac_establecimiento = $old_value_fac_establecimiento;
   $this->fac_punto_emision = $old_value_fac_punto_emision;
   $this->fac_ambiente = $old_value_fac_ambiente;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_propina = $old_value_fac_propina;
   $this->fac_total = $old_value_fac_total;
   $this->fac_fecha_autorizacion = $old_value_fac_fecha_autorizacion;
   $this->fac_retencion = $old_value_fac_retencion;
   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_secuencial = $old_value_fac_secuencial;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_aplica_propina'][] = $rs->fields[0];
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
   $fac_aplica_propina_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_aplica_propina_1))
          {
              foreach ($this->fac_aplica_propina_1 as $tmp_fac_aplica_propina)
              {
                  if (trim($tmp_fac_aplica_propina) === trim($cadaselect[1])) {$fac_aplica_propina_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_aplica_propina) && trim($this->fac_aplica_propina) === trim($cadaselect[1])) {$fac_aplica_propina_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fac_aplica_propina" value="<?php echo $this->form_encode_input($fac_aplica_propina) . "\">" . $fac_aplica_propina_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fac_aplica_propina();
   $x = 0 ; 
   $fac_aplica_propina_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_aplica_propina_1))
          {
              foreach ($this->fac_aplica_propina_1 as $tmp_fac_aplica_propina)
              {
                  if (trim($tmp_fac_aplica_propina) === trim($cadaselect[1])) {$fac_aplica_propina_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_aplica_propina) && trim($this->fac_aplica_propina) === trim($cadaselect[1])) { $fac_aplica_propina_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fac_aplica_propina_look))
          {
              $fac_aplica_propina_look = $this->fac_aplica_propina;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fac_aplica_propina\" class=\"css_fac_aplica_propina_line\" style=\"" .  $sStyleReadLab_fac_aplica_propina . "\">" . $this->form_format_readonly("fac_aplica_propina", $this->form_encode_input($fac_aplica_propina_look)) . "</span><span id=\"id_read_off_fac_aplica_propina\" class=\"css_read_off_fac_aplica_propina" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fac_aplica_propina . "\">";
   echo " <span id=\"idAjaxSelect_fac_aplica_propina\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fac_aplica_propina_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fac_aplica_propina\" name=\"fac_aplica_propina\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fac_aplica_propina) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fac_aplica_propina)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_aplica_propina_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_aplica_propina_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fac_diagnostico']))
   {
       $this->nm_new_label['fac_diagnostico'] = "" . $this->Ini->Nm_lang['lang_diagnostico'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_diagnostico = $this->fac_diagnostico;
   $sStyleHidden_fac_diagnostico = '';
   if (isset($this->nmgp_cmp_hidden['fac_diagnostico']) && $this->nmgp_cmp_hidden['fac_diagnostico'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_diagnostico']);
       $sStyleHidden_fac_diagnostico = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_diagnostico = 'display: none;';
   $sStyleReadInp_fac_diagnostico = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_diagnostico']) && $this->nmgp_cmp_readonly['fac_diagnostico'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_diagnostico']);
       $sStyleReadLab_fac_diagnostico = '';
       $sStyleReadInp_fac_diagnostico = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_diagnostico']) && $this->nmgp_cmp_hidden['fac_diagnostico'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fac_diagnostico" value="<?php echo $this->form_encode_input($this->fac_diagnostico) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_diagnostico_line" id="hidden_field_data_fac_diagnostico" style="<?php echo $sStyleHidden_fac_diagnostico; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_diagnostico_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_diagnostico_label" style=""><span id="id_label_fac_diagnostico"><?php echo $this->nm_new_label['fac_diagnostico']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_diagnostico"]) &&  $this->nmgp_cmp_readonly["fac_diagnostico"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico'] = array(); 
    }

   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_establecimiento = $this->fac_establecimiento;
   $old_value_fac_punto_emision = $this->fac_punto_emision;
   $old_value_fac_ambiente = $this->fac_ambiente;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_propina = $this->fac_propina;
   $old_value_fac_total = $this->fac_total;
   $old_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $old_value_fac_retencion = $this->fac_retencion;
   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_secuencial = $this->fac_secuencial;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_establecimiento = $this->fac_establecimiento;
   $unformatted_value_fac_punto_emision = $this->fac_punto_emision;
   $unformatted_value_fac_ambiente = $this->fac_ambiente;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_propina = $this->fac_propina;
   $unformatted_value_fac_total = $this->fac_total;
   $unformatted_value_fac_fecha_autorizacion = $this->fac_fecha_autorizacion;
   $unformatted_value_fac_retencion = $this->fac_retencion;
   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_secuencial = $this->fac_secuencial;

   $nm_comando = "SELECT dia_id, dia_descripcion  FROM del_diagnosticos  WHERE dia_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY dia_descripcion";

   $this->fac_numero = $old_value_fac_numero;
   $this->fac_establecimiento = $old_value_fac_establecimiento;
   $this->fac_punto_emision = $old_value_fac_punto_emision;
   $this->fac_ambiente = $old_value_fac_ambiente;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_propina = $old_value_fac_propina;
   $this->fac_total = $old_value_fac_total;
   $this->fac_fecha_autorizacion = $old_value_fac_fecha_autorizacion;
   $this->fac_retencion = $old_value_fac_retencion;
   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_secuencial = $old_value_fac_secuencial;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico'][] = $rs->fields[0];
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
   $fac_diagnostico_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_diagnostico_1))
          {
              foreach ($this->fac_diagnostico_1 as $tmp_fac_diagnostico)
              {
                  if (trim($tmp_fac_diagnostico) === trim($cadaselect[1])) {$fac_diagnostico_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_diagnostico) && trim($this->fac_diagnostico) === trim($cadaselect[1])) {$fac_diagnostico_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fac_diagnostico" value="<?php echo $this->form_encode_input($fac_diagnostico) . "\">" . $fac_diagnostico_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fac_diagnostico();
   $x = 0 ; 
   $fac_diagnostico_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fac_diagnostico_1))
          {
              foreach ($this->fac_diagnostico_1 as $tmp_fac_diagnostico)
              {
                  if (trim($tmp_fac_diagnostico) === trim($cadaselect[1])) {$fac_diagnostico_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fac_diagnostico) && trim($this->fac_diagnostico) === trim($cadaselect[1])) { $fac_diagnostico_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fac_diagnostico_look))
          {
              $fac_diagnostico_look = $this->fac_diagnostico;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fac_diagnostico\" class=\"css_fac_diagnostico_line\" style=\"" .  $sStyleReadLab_fac_diagnostico . "\">" . $this->form_format_readonly("fac_diagnostico", $this->form_encode_input($fac_diagnostico_look)) . "</span><span id=\"id_read_off_fac_diagnostico\" class=\"css_read_off_fac_diagnostico" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fac_diagnostico . "\">";
   echo " <span id=\"idAjaxSelect_fac_diagnostico\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fac_diagnostico_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fac_diagnostico\" name=\"fac_diagnostico\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lookup_fac_diagnostico'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fac_diagnostico) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fac_diagnostico)) 
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
   if (isset($this->Ini->sc_lig_md5["form_del_diagnosticos"]) && $this->Ini->sc_lig_md5["form_del_diagnosticos"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_del_punto_venta_mob_lkpedt_refresh_fac_diagnostico*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_punto_venta_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_del_punto_venta_mob_lkpedt_refresh_fac_diagnostico*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "", "", "fldedt_fac_diagnostico", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->link_form_del_diagnosticos_edit . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=form_del_punto_venta_mob&KeepThis=true&TB_iframe=true&height=300&width=600&modal=true", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_diagnostico_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_diagnostico_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_comentario']))
    {
        $this->nm_new_label['fac_comentario'] = "" . $this->Ini->Nm_lang['lang_comentario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_comentario = $this->fac_comentario;
   $sStyleHidden_fac_comentario = '';
   if (isset($this->nmgp_cmp_hidden['fac_comentario']) && $this->nmgp_cmp_hidden['fac_comentario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_comentario']);
       $sStyleHidden_fac_comentario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_comentario = 'display: none;';
   $sStyleReadInp_fac_comentario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_comentario']) && $this->nmgp_cmp_readonly['fac_comentario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_comentario']);
       $sStyleReadLab_fac_comentario = '';
       $sStyleReadInp_fac_comentario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_comentario']) && $this->nmgp_cmp_hidden['fac_comentario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_comentario" value="<?php echo $this->form_encode_input($fac_comentario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_comentario_line" id="hidden_field_data_fac_comentario" style="<?php echo $sStyleHidden_fac_comentario; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_comentario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_comentario_label" style=""><span id="id_label_fac_comentario"><?php echo $this->nm_new_label['fac_comentario']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_comentario"]) &&  $this->nmgp_cmp_readonly["fac_comentario"] == "on") { 

 ?>
<input type="hidden" name="fac_comentario" value="<?php echo $this->form_encode_input($fac_comentario) . "\">" . $fac_comentario . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_comentario" class="sc-ui-readonly-fac_comentario css_fac_comentario_line" style="<?php echo $sStyleReadLab_fac_comentario; ?>"><?php echo $this->form_format_readonly("fac_comentario", $this->form_encode_input($this->fac_comentario)); ?></span><span id="id_read_off_fac_comentario" class="css_read_off_fac_comentario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_comentario; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_comentario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_comentario" type=text name="fac_comentario" value="<?php echo $this->form_encode_input($fac_comentario) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_comentario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_comentario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fac_comentario_dumb = ('' == $sStyleHidden_fac_comentario) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fac_comentario_dumb" style="<?php echo $sStyleHidden_fac_comentario_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf5\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_forma_pago'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
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
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['embutida_parms'] = "var_factura*scin" . $this->nmgp_dados_form['fac_numero'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['foreign_key']['fp_factura'] = $this->nmgp_dados_form['fac_numero'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['where_filter'] = "fp_factura = " . $this->nmgp_dados_form['fac_numero'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['where_detal']  = "fp_factura = " . $this->nmgp_dados_form['fac_numero'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_punto_venta_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_punto_venta_mob_empty.htm' : $this->Ini->link_form_del_forma_pago_factura_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=200';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init'] ]['form_del_forma_pago_factura'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_forma_pago']) && 'nmsc_iframe_liga_form_del_forma_pago_factura_mob' != $this->Ini->sc_lig_target['C_@scinf_forma_pago'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_forma_pago'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['form_del_forma_pago_factura_mob_script_case_init']);
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
<iframe border="0" id="nmsc_iframe_liga_form_del_forma_pago_factura_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="200" width="100%" name="nmsc_iframe_liga_form_del_forma_pago_factura_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-21';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-22';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_7";
        echo "<img id=\"NM_sep_7\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['nuevo'];
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
        $buttonMacroDisabled = 'sc-unique-btn-23';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Anular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['anular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "anular", "scBtnFn_Anular()", "scBtnFn_Anular()", "sc_Anular_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-24';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_8";
        echo "<img id=\"NM_sep_8\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['enviar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['enviar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['enviar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['enviar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['enviar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "enviar", "scBtnFn_enviar()", "scBtnFn_enviar()", "sc_enviar_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "" . $this->Ini->Nm_lang['lang_imprimir'] . "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['group_group_1']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['group_group_1']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['group_group_1']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['group_group_1']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['group_group_1'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "group_group_1", "scBtnGrpShow('group_1_b')", "scBtnGrpShow('group_1_b')", "sc_btgp_btn_group_1_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "__sc_grp__");?>
 
<?php
echo nmButtonGroupTableOutput($this->arr_buttons, "group_group_1", 'group_1', 'b', 'app', 'ini');
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['ride'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['ride']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['ride']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['ride']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['ride']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['ride'];
        }
?>
  <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_ride_bot">
<?php echo nmButtonOutput($this->arr_buttons, "ride", "scBtnFn_ride()", "scBtnFn_ride()", "sc_ride_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "group_1");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['bauchert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['bauchert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['bauchert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['bauchert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['bauchert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['bauchert'];
        }
?>
  <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_bauchert_bot">
<?php echo nmButtonOutput($this->arr_buttons, "bauchert", "scBtnFn_bauchert()", "scBtnFn_bauchert()", "sc_bauchert_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "group_1");?>
  </div>
 
<?php
        $NM_btn = true;
    }
echo nmButtonGroupTableOutput($this->arr_buttons, "", '', '', '', 'fim');
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['retencion'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['retencion']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_disabled']['retencion']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['retencion']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['retencion']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['btn_label']['retencion'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "retencion", "scBtnFn_retencion()", "scBtnFn_retencion()", "sc_retencion_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['run_iframe'] != "R")
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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5);

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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_punto_venta_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_punto_venta_mob");
 parent.scAjaxDetailHeight("form_del_punto_venta_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_punto_venta_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_punto_venta_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['sc_modal'])
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
		if ($("#sc_b_sai_b.sc-unique-btn-7").length && $("#sc_b_sai_b.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-7").hasClass("disabled")) {
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
		if ($("#sc_b_sai_t.sc-unique-btn-13").length && $("#sc_b_sai_t.sc-unique-btn-13").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-13").hasClass("disabled")) {
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
		if ($("#sc_b_sai_b.sc-unique-btn-21").length && $("#sc_b_sai_b.sc-unique-btn-21").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-21").hasClass("disabled")) {
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
		if ($("#sys_separator.sc-unique-btn-6").length && $("#sys_separator.sc-unique-btn-6").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-10").length && $("#sys_separator.sc-unique-btn-10").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-10").hasClass("disabled")) {
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
		if ($("#sys_separator.sc-unique-btn-16").length && $("#sys_separator.sc-unique-btn-16").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-18").length && $("#sys_separator.sc-unique-btn-18").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-22").length && $("#sys_separator.sc-unique-btn-22").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-22").hasClass("disabled")) {
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
	function scBtnFn_Nuevo() {
		if ($("#sc_Nuevo_top").length && $("#sc_Nuevo_top").is(":visible")) {
		    if ($("#sc_Nuevo_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Nuevo_bot").length && $("#sc_Nuevo_bot").is(":visible")) {
		    if ($("#sc_Nuevo_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Nuevo_top").length && $("#sc_Nuevo_top").is(":visible")) {
		    if ($("#sc_Nuevo_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Nuevo_bot").length && $("#sc_Nuevo_bot").is(":visible")) {
		    if ($("#sc_Nuevo_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
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
		if ($("#sc_b_upd_b.sc-unique-btn-11").length && $("#sc_b_upd_b.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-17").length && $("#sc_b_upd_t.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_b.sc-unique-btn-23").length && $("#sc_b_upd_b.sc-unique-btn-23").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-23").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_Anular() {
		if ($("#sc_Anular_top").length && $("#sc_Anular_top").is(":visible")) {
		    if ($("#sc_Anular_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Anular_bot").length && $("#sc_Anular_bot").is(":visible")) {
		    if ($("#sc_Anular_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Anular_top").length && $("#sc_Anular_top").is(":visible")) {
		    if ($("#sc_Anular_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Anular_bot").length && $("#sc_Anular_bot").is(":visible")) {
		    if ($("#sc_Anular_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_enviar() {
		if ($("#sc_enviar_top").length && $("#sc_enviar_top").is(":visible")) {
		    if ($("#sc_enviar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_enviar_bot").length && $("#sc_enviar_bot").is(":visible")) {
		    if ($("#sc_enviar_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_enviar_top").length && $("#sc_enviar_top").is(":visible")) {
		    if ($("#sc_enviar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_enviar_bot").length && $("#sc_enviar_bot").is(":visible")) {
		    if ($("#sc_enviar_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_retencion() {
		if ($("#sc_retencion_top").length && $("#sc_retencion_top").is(":visible")) {
		    if ($("#sc_retencion_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_retencion()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_retencion_bot").length && $("#sc_retencion_bot").is(":visible")) {
		    if ($("#sc_retencion_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_retencion()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_retencion_top").length && $("#sc_retencion_top").is(":visible")) {
		    if ($("#sc_retencion_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_retencion()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_retencion_bot").length && $("#sc_retencion_bot").is(":visible")) {
		    if ($("#sc_retencion_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_retencion()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_ride() {
		if ($("#sc_ride_bot").length && $("#sc_ride_bot").is(":visible")) {
		    if ($("#sc_ride_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_ride()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_ride_bot").length && $("#sc_ride_bot").is(":visible")) {
		    if ($("#sc_ride_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_ride()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_bauchert() {
		if ($("#sc_bauchert_bot").length && $("#sc_bauchert_bot").is(":visible")) {
		    if ($("#sc_bauchert_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_bauchert()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_bauchert_bot").length && $("#sc_bauchert_bot").is(":visible")) {
		    if ($("#sc_bauchert_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_bauchert()
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_punto_venta_mob']['buttonStatus'] = $this->nmgp_botoes;
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
