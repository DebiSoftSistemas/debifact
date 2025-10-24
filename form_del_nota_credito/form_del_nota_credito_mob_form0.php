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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_nota_credito"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_nota_credito"); } ?></TITLE>
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
.css_read_off_nc_fecha button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_nc_fecha_autorizacion button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_nota_credito/form_del_nota_credito_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_nota_credito_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['last'] : 'off'); ?>";
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
  document.getElementById('nmsc_iframe_liga_form_del_detalle_nota_credito').contentDocument.location.reload(true);
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
     if (F_name == "tipo_doc_sustento")
     {
        $('input[name="tipo_doc_sustento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tipo_doc_sustento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tipo_doc_sustento"]').removeClass("scFormInputDisabled");
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
     if (F_name == "fac_ruc_cliente")
     {
        $('input[name="fac_ruc_cliente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_ruc_cliente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_ruc_cliente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_nombre_cliente")
     {
        $('input[name="fac_nombre_cliente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_nombre_cliente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_nombre_cliente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_direccion_cliente")
     {
        $('input[name="fac_direccion_cliente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_direccion_cliente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_direccion_cliente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fac_email_cliente")
     {
        $('input[name="fac_email_cliente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fac_email_cliente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fac_email_cliente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_subtotal")
     {
        $('input[name="nc_subtotal"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_subtotal"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_subtotal"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_subtotal_iva")
     {
        $('input[name="nc_subtotal_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_subtotal_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_subtotal_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_subtotal_cero")
     {
        $('input[name="nc_subtotal_cero"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_subtotal_cero"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_subtotal_cero"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_subtotal_no_objeto")
     {
        $('input[name="nc_subtotal_no_objeto"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_subtotal_no_objeto"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_subtotal_no_objeto"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_subtotal_excento")
     {
        $('input[name="nc_subtotal_excento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_subtotal_excento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_subtotal_excento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_total_descuento")
     {
        $('input[name="nc_total_descuento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_total_descuento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_total_descuento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_valor_ice")
     {
        $('input[name="nc_valor_ice"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_valor_ice"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_valor_ice"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_valor_iva")
     {
        $('input[name="nc_valor_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_valor_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_valor_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_valor_irbpnr")
     {
        $('input[name="nc_valor_irbpnr"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_valor_irbpnr"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_valor_irbpnr"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "nc_total")
     {
        $('input[name="nc_total"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="nc_total"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="nc_total"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_del_nota_credito_mob_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_del_nota_credito']['error_buffer']) && '' != $_SESSION['scriptcase']['form_del_nota_credito']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_del_nota_credito']['error_buffer'];
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
 include_once("form_del_nota_credito_mob_js0.php");
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
               action="form_del_nota_credito_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['insert_validation']; ?>">
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
<input type="hidden" name="nc_numero" value="<?php  echo $this->form_encode_input($this->nc_numero) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_del_nota_credito_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_nota_credito_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['nuevo'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['update'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['anular'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['enviar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['enviar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['enviar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['enviar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['enviar'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['ride']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['ride']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['ride']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['ride']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['ride'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "ride", "scBtnFn_ride()", "scBtnFn_ride()", "sc_ride_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['contabilizar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['contabilizar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['contabilizar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['contabilizar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['contabilizar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['contabilizar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "contabilizar", "scBtnFn_contabilizar()", "scBtnFn_contabilizar()", "sc_contabilizar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['nc_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['nc_tipo_libretin'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_establecimiento']))
   {
       $this->nmgp_cmp_hidden['nc_establecimiento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_punto_emision']))
   {
       $this->nmgp_cmp_hidden['nc_punto_emision'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_secuencial']))
   {
       $this->nmgp_cmp_hidden['nc_secuencial'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_ambiente']))
   {
       $this->nmgp_cmp_hidden['nc_ambiente'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_cliente']))
   {
       $this->nmgp_cmp_hidden['nc_cliente'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_cod_docmod']))
   {
       $this->nmgp_cmp_hidden['nc_cod_docmod'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_serie_docmod']))
   {
       $this->nmgp_cmp_hidden['nc_serie_docmod'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_secuencial_docmod']))
   {
       $this->nmgp_cmp_hidden['nc_secuencial_docmod'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_fecha_emison_docmod']))
   {
       $this->nmgp_cmp_hidden['nc_fecha_emison_docmod'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['nc_error_sri']))
   {
       $this->nmgp_cmp_hidden['nc_error_sri'] = 'off';
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
    if (!isset($this->nm_new_label['nc_error_sri']))
    {
        $this->nm_new_label['nc_error_sri'] = "" . $this->Ini->Nm_lang['lang_mensaje'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_error_sri = $this->nc_error_sri;
   if (!isset($this->nmgp_cmp_hidden['nc_error_sri']))
   {
       $this->nmgp_cmp_hidden['nc_error_sri'] = 'off';
   }
   $sStyleHidden_nc_error_sri = '';
   if (isset($this->nmgp_cmp_hidden['nc_error_sri']) && $this->nmgp_cmp_hidden['nc_error_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_error_sri']);
       $sStyleHidden_nc_error_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_error_sri = 'display: none;';
   $sStyleReadInp_nc_error_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_error_sri']) && $this->nmgp_cmp_readonly['nc_error_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_error_sri']);
       $sStyleReadLab_nc_error_sri = '';
       $sStyleReadInp_nc_error_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_error_sri']) && $this->nmgp_cmp_hidden['nc_error_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_error_sri" value="<?php echo $this->form_encode_input($nc_error_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_error_sri_line" id="hidden_field_data_nc_error_sri" style="<?php echo $sStyleHidden_nc_error_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_error_sri_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_error_sri"]) &&  $this->nmgp_cmp_readonly["nc_error_sri"] == "on") { 

 ?>
<input type="hidden" name="nc_error_sri" value="<?php echo $this->form_encode_input($nc_error_sri) . "\">" . $nc_error_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_error_sri" class="sc-ui-readonly-nc_error_sri css_nc_error_sri_line" style="<?php echo $sStyleReadLab_nc_error_sri; ?>"><?php echo $this->form_format_readonly("nc_error_sri", $this->form_encode_input($this->nc_error_sri)); ?></span><span id="id_read_off_nc_error_sri" class="css_read_off_nc_error_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_error_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_error_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_error_sri" type=text name="nc_error_sri" value="<?php echo $this->form_encode_input($nc_error_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=300"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_error_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_error_sri_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_nc_error_sri_dumb = ('' == $sStyleHidden_nc_error_sri) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nc_error_sri_dumb" style="<?php echo $sStyleHidden_nc_error_sri_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_nc'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_fecha']))
    {
        $this->nm_new_label['nc_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_fecha = $this->nc_fecha;
   $sStyleHidden_nc_fecha = '';
   if (isset($this->nmgp_cmp_hidden['nc_fecha']) && $this->nmgp_cmp_hidden['nc_fecha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_fecha']);
       $sStyleHidden_nc_fecha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_fecha = 'display: none;';
   $sStyleReadInp_nc_fecha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_fecha']) && $this->nmgp_cmp_readonly['nc_fecha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_fecha']);
       $sStyleReadLab_nc_fecha = '';
       $sStyleReadInp_nc_fecha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_fecha']) && $this->nmgp_cmp_hidden['nc_fecha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_fecha" value="<?php echo $this->form_encode_input($nc_fecha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_fecha_line" id="hidden_field_data_nc_fecha" style="<?php echo $sStyleHidden_nc_fecha; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_fecha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_fecha_label" style=""><span id="id_label_nc_fecha"><?php echo $this->nm_new_label['nc_fecha']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_fecha"]) &&  $this->nmgp_cmp_readonly["nc_fecha"] == "on") { 

 ?>
<input type="hidden" name="nc_fecha" value="<?php echo $this->form_encode_input($nc_fecha) . "\">" . $nc_fecha . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_fecha" class="sc-ui-readonly-nc_fecha css_nc_fecha_line" style="<?php echo $sStyleReadLab_nc_fecha; ?>"><?php echo $this->form_format_readonly("nc_fecha", $this->form_encode_input($nc_fecha)); ?></span><span id="id_read_off_nc_fecha" class="css_read_off_nc_fecha<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_fecha; ?>"><?php
$tmp_form_data = $this->field_config['nc_fecha']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_nc_fecha_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_fecha" type=text name="nc_fecha" value="<?php echo $this->form_encode_input($nc_fecha) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['nc_fecha']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['nc_fecha']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_fecha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_fecha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['nc_libretin']))
   {
       $this->nm_new_label['nc_libretin'] = "" . $this->Ini->Nm_lang['lang_libretin'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_libretin = $this->nc_libretin;
   $sStyleHidden_nc_libretin = '';
   if (isset($this->nmgp_cmp_hidden['nc_libretin']) && $this->nmgp_cmp_hidden['nc_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_libretin']);
       $sStyleHidden_nc_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_libretin = 'display: none;';
   $sStyleReadInp_nc_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_libretin']) && $this->nmgp_cmp_readonly['nc_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_libretin']);
       $sStyleReadLab_nc_libretin = '';
       $sStyleReadInp_nc_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_libretin']) && $this->nmgp_cmp_hidden['nc_libretin'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="nc_libretin" value="<?php echo $this->form_encode_input($this->nc_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_libretin_line" id="hidden_field_data_nc_libretin" style="<?php echo $sStyleHidden_nc_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_libretin_label" style=""><span id="id_label_nc_libretin"><?php echo $this->nm_new_label['nc_libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_libretin"]) &&  $this->nmgp_cmp_readonly["nc_libretin"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lookup_nc_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lookup_nc_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lookup_nc_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lookup_nc_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lookup_nc_libretin']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lookup_nc_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lookup_nc_libretin']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lookup_nc_libretin'] = array(); 
    }

   $old_value_nc_fecha = $this->nc_fecha;
   $old_value_nc_establecimiento = $this->nc_establecimiento;
   $old_value_nc_punto_emision = $this->nc_punto_emision;
   $old_value_nc_secuencial = $this->nc_secuencial;
   $old_value_nc_ambiente = $this->nc_ambiente;
   $old_value_nc_iddocmod = $this->nc_iddocmod;
   $old_value_fecha_sustento = $this->fecha_sustento;
   $old_value_nc_cliente = $this->nc_cliente;
   $old_value_nc_secuencial_docmod = $this->nc_secuencial_docmod;
   $old_value_nc_fecha_emison_docmod = $this->nc_fecha_emison_docmod;
   $old_value_nc_subtotal = $this->nc_subtotal;
   $old_value_nc_subtotal_iva = $this->nc_subtotal_iva;
   $old_value_nc_subtotal_cero = $this->nc_subtotal_cero;
   $old_value_nc_subtotal_no_objeto = $this->nc_subtotal_no_objeto;
   $old_value_nc_subtotal_excento = $this->nc_subtotal_excento;
   $old_value_nc_total_descuento = $this->nc_total_descuento;
   $old_value_nc_valor_ice = $this->nc_valor_ice;
   $old_value_nc_valor_iva = $this->nc_valor_iva;
   $old_value_nc_valor_irbpnr = $this->nc_valor_irbpnr;
   $old_value_nc_total = $this->nc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_nc_fecha = $this->nc_fecha;
   $unformatted_value_nc_establecimiento = $this->nc_establecimiento;
   $unformatted_value_nc_punto_emision = $this->nc_punto_emision;
   $unformatted_value_nc_secuencial = $this->nc_secuencial;
   $unformatted_value_nc_ambiente = $this->nc_ambiente;
   $unformatted_value_nc_iddocmod = $this->nc_iddocmod;
   $unformatted_value_fecha_sustento = $this->fecha_sustento;
   $unformatted_value_nc_cliente = $this->nc_cliente;
   $unformatted_value_nc_secuencial_docmod = $this->nc_secuencial_docmod;
   $unformatted_value_nc_fecha_emison_docmod = $this->nc_fecha_emison_docmod;
   $unformatted_value_nc_subtotal = $this->nc_subtotal;
   $unformatted_value_nc_subtotal_iva = $this->nc_subtotal_iva;
   $unformatted_value_nc_subtotal_cero = $this->nc_subtotal_cero;
   $unformatted_value_nc_subtotal_no_objeto = $this->nc_subtotal_no_objeto;
   $unformatted_value_nc_subtotal_excento = $this->nc_subtotal_excento;
   $unformatted_value_nc_total_descuento = $this->nc_total_descuento;
   $unformatted_value_nc_valor_ice = $this->nc_valor_ice;
   $unformatted_value_nc_valor_iva = $this->nc_valor_iva;
   $unformatted_value_nc_valor_irbpnr = $this->nc_valor_irbpnr;
   $unformatted_value_nc_total = $this->nc_total;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='04'";

   $this->nc_fecha = $old_value_nc_fecha;
   $this->nc_establecimiento = $old_value_nc_establecimiento;
   $this->nc_punto_emision = $old_value_nc_punto_emision;
   $this->nc_secuencial = $old_value_nc_secuencial;
   $this->nc_ambiente = $old_value_nc_ambiente;
   $this->nc_iddocmod = $old_value_nc_iddocmod;
   $this->fecha_sustento = $old_value_fecha_sustento;
   $this->nc_cliente = $old_value_nc_cliente;
   $this->nc_secuencial_docmod = $old_value_nc_secuencial_docmod;
   $this->nc_fecha_emison_docmod = $old_value_nc_fecha_emison_docmod;
   $this->nc_subtotal = $old_value_nc_subtotal;
   $this->nc_subtotal_iva = $old_value_nc_subtotal_iva;
   $this->nc_subtotal_cero = $old_value_nc_subtotal_cero;
   $this->nc_subtotal_no_objeto = $old_value_nc_subtotal_no_objeto;
   $this->nc_subtotal_excento = $old_value_nc_subtotal_excento;
   $this->nc_total_descuento = $old_value_nc_total_descuento;
   $this->nc_valor_ice = $old_value_nc_valor_ice;
   $this->nc_valor_iva = $old_value_nc_valor_iva;
   $this->nc_valor_irbpnr = $old_value_nc_valor_irbpnr;
   $this->nc_total = $old_value_nc_total;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lookup_nc_libretin'][] = $rs->fields[0];
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
   $nc_libretin_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->nc_libretin_1))
          {
              foreach ($this->nc_libretin_1 as $tmp_nc_libretin)
              {
                  if (trim($tmp_nc_libretin) === trim($cadaselect[1])) {$nc_libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->nc_libretin) && trim($this->nc_libretin) === trim($cadaselect[1])) {$nc_libretin_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="nc_libretin" value="<?php echo $this->form_encode_input($nc_libretin) . "\">" . $nc_libretin_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_nc_libretin();
   $x = 0 ; 
   $nc_libretin_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->nc_libretin_1))
          {
              foreach ($this->nc_libretin_1 as $tmp_nc_libretin)
              {
                  if (trim($tmp_nc_libretin) === trim($cadaselect[1])) {$nc_libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->nc_libretin) && trim($this->nc_libretin) === trim($cadaselect[1])) { $nc_libretin_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($nc_libretin_look))
          {
              $nc_libretin_look = $this->nc_libretin;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_nc_libretin\" class=\"css_nc_libretin_line\" style=\"" .  $sStyleReadLab_nc_libretin . "\">" . $this->form_format_readonly("nc_libretin", $this->form_encode_input($nc_libretin_look)) . "</span><span id=\"id_read_off_nc_libretin\" class=\"css_read_off_nc_libretin" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_nc_libretin . "\">";
   echo " <span id=\"idAjaxSelect_nc_libretin\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_nc_libretin_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_nc_libretin\" name=\"nc_libretin\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->nc_libretin) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->nc_libretin)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_libretin_text"></span></td></tr></table></td></tr></table> </TD>
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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_tipo_libretin']))
    {
        $this->nm_new_label['nc_tipo_libretin'] = "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_tipo_libretin = $this->nc_tipo_libretin;
   if (!isset($this->nmgp_cmp_hidden['nc_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['nc_tipo_libretin'] = 'off';
   }
   $sStyleHidden_nc_tipo_libretin = '';
   if (isset($this->nmgp_cmp_hidden['nc_tipo_libretin']) && $this->nmgp_cmp_hidden['nc_tipo_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_tipo_libretin']);
       $sStyleHidden_nc_tipo_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_tipo_libretin = 'display: none;';
   $sStyleReadInp_nc_tipo_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_tipo_libretin']) && $this->nmgp_cmp_readonly['nc_tipo_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_tipo_libretin']);
       $sStyleReadLab_nc_tipo_libretin = '';
       $sStyleReadInp_nc_tipo_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_tipo_libretin']) && $this->nmgp_cmp_hidden['nc_tipo_libretin'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_tipo_libretin" value="<?php echo $this->form_encode_input($nc_tipo_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_tipo_libretin_line" id="hidden_field_data_nc_tipo_libretin" style="<?php echo $sStyleHidden_nc_tipo_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_tipo_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_tipo_libretin_label" style=""><span id="id_label_nc_tipo_libretin"><?php echo $this->nm_new_label['nc_tipo_libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_tipo_libretin"]) &&  $this->nmgp_cmp_readonly["nc_tipo_libretin"] == "on") { 

 ?>
<input type="hidden" name="nc_tipo_libretin" value="<?php echo $this->form_encode_input($nc_tipo_libretin) . "\">" . $nc_tipo_libretin . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_tipo_libretin" class="sc-ui-readonly-nc_tipo_libretin css_nc_tipo_libretin_line" style="<?php echo $sStyleReadLab_nc_tipo_libretin; ?>"><?php echo $this->form_format_readonly("nc_tipo_libretin", $this->form_encode_input($this->nc_tipo_libretin)); ?></span><span id="id_read_off_nc_tipo_libretin" class="css_read_off_nc_tipo_libretin<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_tipo_libretin; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_tipo_libretin_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_tipo_libretin" type=text name="nc_tipo_libretin" value="<?php echo $this->form_encode_input($nc_tipo_libretin) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_tipo_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_tipo_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_establecimiento']))
    {
        $this->nm_new_label['nc_establecimiento'] = "" . $this->Ini->Nm_lang['lang_establecimiento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_establecimiento = $this->nc_establecimiento;
   if (!isset($this->nmgp_cmp_hidden['nc_establecimiento']))
   {
       $this->nmgp_cmp_hidden['nc_establecimiento'] = 'off';
   }
   $sStyleHidden_nc_establecimiento = '';
   if (isset($this->nmgp_cmp_hidden['nc_establecimiento']) && $this->nmgp_cmp_hidden['nc_establecimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_establecimiento']);
       $sStyleHidden_nc_establecimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_establecimiento = 'display: none;';
   $sStyleReadInp_nc_establecimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_establecimiento']) && $this->nmgp_cmp_readonly['nc_establecimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_establecimiento']);
       $sStyleReadLab_nc_establecimiento = '';
       $sStyleReadInp_nc_establecimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_establecimiento']) && $this->nmgp_cmp_hidden['nc_establecimiento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_establecimiento" value="<?php echo $this->form_encode_input($nc_establecimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_establecimiento_line" id="hidden_field_data_nc_establecimiento" style="<?php echo $sStyleHidden_nc_establecimiento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_establecimiento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_establecimiento_label" style=""><span id="id_label_nc_establecimiento"><?php echo $this->nm_new_label['nc_establecimiento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_establecimiento"]) &&  $this->nmgp_cmp_readonly["nc_establecimiento"] == "on") { 

 ?>
<input type="hidden" name="nc_establecimiento" value="<?php echo $this->form_encode_input($nc_establecimiento) . "\">" . $nc_establecimiento . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_establecimiento" class="sc-ui-readonly-nc_establecimiento css_nc_establecimiento_line" style="<?php echo $sStyleReadLab_nc_establecimiento; ?>"><?php echo $this->form_format_readonly("nc_establecimiento", $this->form_encode_input($this->nc_establecimiento)); ?></span><span id="id_read_off_nc_establecimiento" class="css_read_off_nc_establecimiento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_establecimiento; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_establecimiento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_establecimiento" type=text name="nc_establecimiento" value="<?php echo $this->form_encode_input($nc_establecimiento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_establecimiento']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['nc_establecimiento']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_establecimiento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_establecimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_establecimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_punto_emision']))
    {
        $this->nm_new_label['nc_punto_emision'] = "" . $this->Ini->Nm_lang['lang_punto_emision'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_punto_emision = $this->nc_punto_emision;
   if (!isset($this->nmgp_cmp_hidden['nc_punto_emision']))
   {
       $this->nmgp_cmp_hidden['nc_punto_emision'] = 'off';
   }
   $sStyleHidden_nc_punto_emision = '';
   if (isset($this->nmgp_cmp_hidden['nc_punto_emision']) && $this->nmgp_cmp_hidden['nc_punto_emision'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_punto_emision']);
       $sStyleHidden_nc_punto_emision = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_punto_emision = 'display: none;';
   $sStyleReadInp_nc_punto_emision = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_punto_emision']) && $this->nmgp_cmp_readonly['nc_punto_emision'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_punto_emision']);
       $sStyleReadLab_nc_punto_emision = '';
       $sStyleReadInp_nc_punto_emision = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_punto_emision']) && $this->nmgp_cmp_hidden['nc_punto_emision'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_punto_emision" value="<?php echo $this->form_encode_input($nc_punto_emision) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_punto_emision_line" id="hidden_field_data_nc_punto_emision" style="<?php echo $sStyleHidden_nc_punto_emision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_punto_emision_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_punto_emision_label" style=""><span id="id_label_nc_punto_emision"><?php echo $this->nm_new_label['nc_punto_emision']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_punto_emision"]) &&  $this->nmgp_cmp_readonly["nc_punto_emision"] == "on") { 

 ?>
<input type="hidden" name="nc_punto_emision" value="<?php echo $this->form_encode_input($nc_punto_emision) . "\">" . $nc_punto_emision . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_punto_emision" class="sc-ui-readonly-nc_punto_emision css_nc_punto_emision_line" style="<?php echo $sStyleReadLab_nc_punto_emision; ?>"><?php echo $this->form_format_readonly("nc_punto_emision", $this->form_encode_input($this->nc_punto_emision)); ?></span><span id="id_read_off_nc_punto_emision" class="css_read_off_nc_punto_emision<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_punto_emision; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_punto_emision_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_punto_emision" type=text name="nc_punto_emision" value="<?php echo $this->form_encode_input($nc_punto_emision) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_punto_emision']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['nc_punto_emision']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_punto_emision']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_punto_emision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_punto_emision_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_secuencial']))
    {
        $this->nm_new_label['nc_secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_secuencial = $this->nc_secuencial;
   if (!isset($this->nmgp_cmp_hidden['nc_secuencial']))
   {
       $this->nmgp_cmp_hidden['nc_secuencial'] = 'off';
   }
   $sStyleHidden_nc_secuencial = '';
   if (isset($this->nmgp_cmp_hidden['nc_secuencial']) && $this->nmgp_cmp_hidden['nc_secuencial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_secuencial']);
       $sStyleHidden_nc_secuencial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_secuencial = 'display: none;';
   $sStyleReadInp_nc_secuencial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_secuencial']) && $this->nmgp_cmp_readonly['nc_secuencial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_secuencial']);
       $sStyleReadLab_nc_secuencial = '';
       $sStyleReadInp_nc_secuencial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_secuencial']) && $this->nmgp_cmp_hidden['nc_secuencial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_secuencial" value="<?php echo $this->form_encode_input($nc_secuencial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_secuencial_line" id="hidden_field_data_nc_secuencial" style="<?php echo $sStyleHidden_nc_secuencial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_secuencial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_secuencial_label" style=""><span id="id_label_nc_secuencial"><?php echo $this->nm_new_label['nc_secuencial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_secuencial"]) &&  $this->nmgp_cmp_readonly["nc_secuencial"] == "on") { 

 ?>
<input type="hidden" name="nc_secuencial" value="<?php echo $this->form_encode_input($nc_secuencial) . "\">" . $nc_secuencial . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_secuencial" class="sc-ui-readonly-nc_secuencial css_nc_secuencial_line" style="<?php echo $sStyleReadLab_nc_secuencial; ?>"><?php echo $this->form_format_readonly("nc_secuencial", $this->form_encode_input($this->nc_secuencial)); ?></span><span id="id_read_off_nc_secuencial" class="css_read_off_nc_secuencial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_secuencial; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_secuencial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_secuencial" type=text name="nc_secuencial" value="<?php echo $this->form_encode_input($nc_secuencial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_secuencial']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['nc_secuencial']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_secuencial']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_ambiente']))
    {
        $this->nm_new_label['nc_ambiente'] = "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_ambiente = $this->nc_ambiente;
   if (!isset($this->nmgp_cmp_hidden['nc_ambiente']))
   {
       $this->nmgp_cmp_hidden['nc_ambiente'] = 'off';
   }
   $sStyleHidden_nc_ambiente = '';
   if (isset($this->nmgp_cmp_hidden['nc_ambiente']) && $this->nmgp_cmp_hidden['nc_ambiente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_ambiente']);
       $sStyleHidden_nc_ambiente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_ambiente = 'display: none;';
   $sStyleReadInp_nc_ambiente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_ambiente']) && $this->nmgp_cmp_readonly['nc_ambiente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_ambiente']);
       $sStyleReadLab_nc_ambiente = '';
       $sStyleReadInp_nc_ambiente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_ambiente']) && $this->nmgp_cmp_hidden['nc_ambiente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_ambiente" value="<?php echo $this->form_encode_input($nc_ambiente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_ambiente_line" id="hidden_field_data_nc_ambiente" style="<?php echo $sStyleHidden_nc_ambiente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_ambiente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_ambiente_label" style=""><span id="id_label_nc_ambiente"><?php echo $this->nm_new_label['nc_ambiente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_ambiente"]) &&  $this->nmgp_cmp_readonly["nc_ambiente"] == "on") { 

 ?>
<input type="hidden" name="nc_ambiente" value="<?php echo $this->form_encode_input($nc_ambiente) . "\">" . $nc_ambiente . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_ambiente" class="sc-ui-readonly-nc_ambiente css_nc_ambiente_line" style="<?php echo $sStyleReadLab_nc_ambiente; ?>"><?php echo $this->form_format_readonly("nc_ambiente", $this->form_encode_input($this->nc_ambiente)); ?></span><span id="id_read_off_nc_ambiente" class="css_read_off_nc_ambiente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_ambiente; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_ambiente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_ambiente" type=text name="nc_ambiente" value="<?php echo $this->form_encode_input($nc_ambiente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_ambiente']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['nc_ambiente']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_ambiente']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_ambiente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_ambiente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_nc_ambiente_dumb = ('' == $sStyleHidden_nc_ambiente) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nc_ambiente_dumb" style="<?php echo $sStyleHidden_nc_ambiente_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_documento_sustento'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_iddocmod']))
    {
        $this->nm_new_label['nc_iddocmod'] = "" . $this->Ini->Nm_lang['lang_lot_documento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_iddocmod = $this->nc_iddocmod;
   $sStyleHidden_nc_iddocmod = '';
   if (isset($this->nmgp_cmp_hidden['nc_iddocmod']) && $this->nmgp_cmp_hidden['nc_iddocmod'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_iddocmod']);
       $sStyleHidden_nc_iddocmod = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_iddocmod = 'display: none;';
   $sStyleReadInp_nc_iddocmod = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_iddocmod']) && $this->nmgp_cmp_readonly['nc_iddocmod'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_iddocmod']);
       $sStyleReadLab_nc_iddocmod = '';
       $sStyleReadInp_nc_iddocmod = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_iddocmod']) && $this->nmgp_cmp_hidden['nc_iddocmod'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_iddocmod" value="<?php echo $this->form_encode_input($nc_iddocmod) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_iddocmod_line" id="hidden_field_data_nc_iddocmod" style="<?php echo $sStyleHidden_nc_iddocmod; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_iddocmod_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_iddocmod_label" style=""><span id="id_label_nc_iddocmod"><?php echo $this->nm_new_label['nc_iddocmod']; ?></span></span><br><input type="hidden" name="nc_iddocmod" value="<?php echo $this->form_encode_input($nc_iddocmod); ?>"><span id="id_ajax_label_nc_iddocmod"><?php echo nl2br($nc_iddocmod); ?></span>
<?php
   $Sc_iframe_master = ($this->Embutida_call) ? 'nmgp_iframe_ret*scinnmsc_iframe_liga_form_del_nota_credito_mob*scout' : '';
   if (isset($this->Ini->sc_lig_md5["buscar_factura"]) && $this->Ini->sc_lig_md5["buscar_factura"] == "S") {
       $Parms_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,nc_iddocmod,fac_numero*scoutnm_evt_ret_busca*scinsc_form_del_nota_credito_nc_iddocmod_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_nota_credito_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,nc_iddocmod,fac_numero*scoutnm_evt_ret_busca*scinsc_form_del_nota_credito_nc_iddocmod_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
   }
?>

<?php if (!$this->Ini->Export_img_zip) { ?><?php echo nmButtonOutput($this->arr_buttons, "bform_captura", "nm_submit_cap('" . $this->Ini->link_buscar_factura_cons_psq. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_buscar_factura_cons_psq. "', '" . $Md5_Lig . "')", "cap_nc_iddocmod", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_iddocmod_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_iddocmod_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipo_doc_sustento']))
    {
        $this->nm_new_label['tipo_doc_sustento'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipo_doc_sustento = $this->tipo_doc_sustento;
   $sStyleHidden_tipo_doc_sustento = '';
   if (isset($this->nmgp_cmp_hidden['tipo_doc_sustento']) && $this->nmgp_cmp_hidden['tipo_doc_sustento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipo_doc_sustento']);
       $sStyleHidden_tipo_doc_sustento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipo_doc_sustento = 'display: none;';
   $sStyleReadInp_tipo_doc_sustento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipo_doc_sustento']) && $this->nmgp_cmp_readonly['tipo_doc_sustento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipo_doc_sustento']);
       $sStyleReadLab_tipo_doc_sustento = '';
       $sStyleReadInp_tipo_doc_sustento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipo_doc_sustento']) && $this->nmgp_cmp_hidden['tipo_doc_sustento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipo_doc_sustento" value="<?php echo $this->form_encode_input($tipo_doc_sustento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipo_doc_sustento_line" id="hidden_field_data_tipo_doc_sustento" style="<?php echo $sStyleHidden_tipo_doc_sustento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipo_doc_sustento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tipo_doc_sustento_label" style=""><span id="id_label_tipo_doc_sustento"><?php echo $this->nm_new_label['tipo_doc_sustento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipo_doc_sustento"]) &&  $this->nmgp_cmp_readonly["tipo_doc_sustento"] == "on") { 

 ?>
<input type="hidden" name="tipo_doc_sustento" value="<?php echo $this->form_encode_input($tipo_doc_sustento) . "\">" . $tipo_doc_sustento . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipo_doc_sustento" class="sc-ui-readonly-tipo_doc_sustento css_tipo_doc_sustento_line" style="<?php echo $sStyleReadLab_tipo_doc_sustento; ?>"><?php echo $this->form_format_readonly("tipo_doc_sustento", $this->form_encode_input($this->tipo_doc_sustento)); ?></span><span id="id_read_off_tipo_doc_sustento" class="css_read_off_tipo_doc_sustento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_tipo_doc_sustento; ?>">
 <input class="sc-js-input scFormObjectOdd css_tipo_doc_sustento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_tipo_doc_sustento" type=text name="tipo_doc_sustento" value="<?php echo $this->form_encode_input($tipo_doc_sustento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_doc_sustento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_doc_sustento_text"></span></td></tr></table></td></tr></table> </TD>
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
    if (!isset($this->nm_new_label['fecha_sustento']))
    {
        $this->nm_new_label['fecha_sustento'] = "" . $this->Ini->Nm_lang['lang_fecha_emision'] . "";
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
    if (!isset($this->nm_new_label['nc_cliente']))
    {
        $this->nm_new_label['nc_cliente'] = "" . $this->Ini->Nm_lang['lang_clientes'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_cliente = $this->nc_cliente;
   if (!isset($this->nmgp_cmp_hidden['nc_cliente']))
   {
       $this->nmgp_cmp_hidden['nc_cliente'] = 'off';
   }
   $sStyleHidden_nc_cliente = '';
   if (isset($this->nmgp_cmp_hidden['nc_cliente']) && $this->nmgp_cmp_hidden['nc_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_cliente']);
       $sStyleHidden_nc_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_cliente = 'display: none;';
   $sStyleReadInp_nc_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_cliente']) && $this->nmgp_cmp_readonly['nc_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_cliente']);
       $sStyleReadLab_nc_cliente = '';
       $sStyleReadInp_nc_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_cliente']) && $this->nmgp_cmp_hidden['nc_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_cliente" value="<?php echo $this->form_encode_input($nc_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_cliente_line" id="hidden_field_data_nc_cliente" style="<?php echo $sStyleHidden_nc_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_cliente_label" style=""><span id="id_label_nc_cliente"><?php echo $this->nm_new_label['nc_cliente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_cliente"]) &&  $this->nmgp_cmp_readonly["nc_cliente"] == "on") { 

 ?>
<input type="hidden" name="nc_cliente" value="<?php echo $this->form_encode_input($nc_cliente) . "\">" . $nc_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_cliente" class="sc-ui-readonly-nc_cliente css_nc_cliente_line" style="<?php echo $sStyleReadLab_nc_cliente; ?>"><?php echo $this->form_format_readonly("nc_cliente", $this->form_encode_input($this->nc_cliente)); ?></span><span id="id_read_off_nc_cliente" class="css_read_off_nc_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_cliente" type=text name="nc_cliente" value="<?php echo $this->form_encode_input($nc_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_cliente']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['nc_cliente']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_cliente']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_cod_docmod']))
    {
        $this->nm_new_label['nc_cod_docmod'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_cod_docmod = $this->nc_cod_docmod;
   if (!isset($this->nmgp_cmp_hidden['nc_cod_docmod']))
   {
       $this->nmgp_cmp_hidden['nc_cod_docmod'] = 'off';
   }
   $sStyleHidden_nc_cod_docmod = '';
   if (isset($this->nmgp_cmp_hidden['nc_cod_docmod']) && $this->nmgp_cmp_hidden['nc_cod_docmod'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_cod_docmod']);
       $sStyleHidden_nc_cod_docmod = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_cod_docmod = 'display: none;';
   $sStyleReadInp_nc_cod_docmod = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_cod_docmod']) && $this->nmgp_cmp_readonly['nc_cod_docmod'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_cod_docmod']);
       $sStyleReadLab_nc_cod_docmod = '';
       $sStyleReadInp_nc_cod_docmod = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_cod_docmod']) && $this->nmgp_cmp_hidden['nc_cod_docmod'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_cod_docmod" value="<?php echo $this->form_encode_input($nc_cod_docmod) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_cod_docmod_line" id="hidden_field_data_nc_cod_docmod" style="<?php echo $sStyleHidden_nc_cod_docmod; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_cod_docmod_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_cod_docmod_label" style=""><span id="id_label_nc_cod_docmod"><?php echo $this->nm_new_label['nc_cod_docmod']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_cod_docmod"]) &&  $this->nmgp_cmp_readonly["nc_cod_docmod"] == "on") { 

 ?>
<input type="hidden" name="nc_cod_docmod" value="<?php echo $this->form_encode_input($nc_cod_docmod) . "\">" . $nc_cod_docmod . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_cod_docmod" class="sc-ui-readonly-nc_cod_docmod css_nc_cod_docmod_line" style="<?php echo $sStyleReadLab_nc_cod_docmod; ?>"><?php echo $this->form_format_readonly("nc_cod_docmod", $this->form_encode_input($this->nc_cod_docmod)); ?></span><span id="id_read_off_nc_cod_docmod" class="css_read_off_nc_cod_docmod<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_cod_docmod; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_cod_docmod_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_cod_docmod" type=text name="nc_cod_docmod" value="<?php echo $this->form_encode_input($nc_cod_docmod) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=2"; } ?> maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_cod_docmod_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_cod_docmod_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_serie_docmod']))
    {
        $this->nm_new_label['nc_serie_docmod'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_serie_docmod = $this->nc_serie_docmod;
   if (!isset($this->nmgp_cmp_hidden['nc_serie_docmod']))
   {
       $this->nmgp_cmp_hidden['nc_serie_docmod'] = 'off';
   }
   $sStyleHidden_nc_serie_docmod = '';
   if (isset($this->nmgp_cmp_hidden['nc_serie_docmod']) && $this->nmgp_cmp_hidden['nc_serie_docmod'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_serie_docmod']);
       $sStyleHidden_nc_serie_docmod = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_serie_docmod = 'display: none;';
   $sStyleReadInp_nc_serie_docmod = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_serie_docmod']) && $this->nmgp_cmp_readonly['nc_serie_docmod'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_serie_docmod']);
       $sStyleReadLab_nc_serie_docmod = '';
       $sStyleReadInp_nc_serie_docmod = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_serie_docmod']) && $this->nmgp_cmp_hidden['nc_serie_docmod'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_serie_docmod" value="<?php echo $this->form_encode_input($nc_serie_docmod) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_serie_docmod_line" id="hidden_field_data_nc_serie_docmod" style="<?php echo $sStyleHidden_nc_serie_docmod; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_serie_docmod_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_serie_docmod_label" style=""><span id="id_label_nc_serie_docmod"><?php echo $this->nm_new_label['nc_serie_docmod']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_serie_docmod"]) &&  $this->nmgp_cmp_readonly["nc_serie_docmod"] == "on") { 

 ?>
<input type="hidden" name="nc_serie_docmod" value="<?php echo $this->form_encode_input($nc_serie_docmod) . "\">" . $nc_serie_docmod . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_serie_docmod" class="sc-ui-readonly-nc_serie_docmod css_nc_serie_docmod_line" style="<?php echo $sStyleReadLab_nc_serie_docmod; ?>"><?php echo $this->form_format_readonly("nc_serie_docmod", $this->form_encode_input($this->nc_serie_docmod)); ?></span><span id="id_read_off_nc_serie_docmod" class="css_read_off_nc_serie_docmod<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_serie_docmod; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_serie_docmod_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_serie_docmod" type=text name="nc_serie_docmod" value="<?php echo $this->form_encode_input($nc_serie_docmod) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=7"; } ?> maxlength=7 alt="{datatype: 'text', maxLength: 7, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_serie_docmod_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_serie_docmod_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_secuencial_docmod']))
    {
        $this->nm_new_label['nc_secuencial_docmod'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_secuencial_docmod = $this->nc_secuencial_docmod;
   if (!isset($this->nmgp_cmp_hidden['nc_secuencial_docmod']))
   {
       $this->nmgp_cmp_hidden['nc_secuencial_docmod'] = 'off';
   }
   $sStyleHidden_nc_secuencial_docmod = '';
   if (isset($this->nmgp_cmp_hidden['nc_secuencial_docmod']) && $this->nmgp_cmp_hidden['nc_secuencial_docmod'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_secuencial_docmod']);
       $sStyleHidden_nc_secuencial_docmod = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_secuencial_docmod = 'display: none;';
   $sStyleReadInp_nc_secuencial_docmod = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_secuencial_docmod']) && $this->nmgp_cmp_readonly['nc_secuencial_docmod'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_secuencial_docmod']);
       $sStyleReadLab_nc_secuencial_docmod = '';
       $sStyleReadInp_nc_secuencial_docmod = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_secuencial_docmod']) && $this->nmgp_cmp_hidden['nc_secuencial_docmod'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_secuencial_docmod" value="<?php echo $this->form_encode_input($nc_secuencial_docmod) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_secuencial_docmod_line" id="hidden_field_data_nc_secuencial_docmod" style="<?php echo $sStyleHidden_nc_secuencial_docmod; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_secuencial_docmod_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_secuencial_docmod_label" style=""><span id="id_label_nc_secuencial_docmod"><?php echo $this->nm_new_label['nc_secuencial_docmod']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_secuencial_docmod"]) &&  $this->nmgp_cmp_readonly["nc_secuencial_docmod"] == "on") { 

 ?>
<input type="hidden" name="nc_secuencial_docmod" value="<?php echo $this->form_encode_input($nc_secuencial_docmod) . "\">" . $nc_secuencial_docmod . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_secuencial_docmod" class="sc-ui-readonly-nc_secuencial_docmod css_nc_secuencial_docmod_line" style="<?php echo $sStyleReadLab_nc_secuencial_docmod; ?>"><?php echo $this->form_format_readonly("nc_secuencial_docmod", $this->form_encode_input($this->nc_secuencial_docmod)); ?></span><span id="id_read_off_nc_secuencial_docmod" class="css_read_off_nc_secuencial_docmod<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_secuencial_docmod; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_secuencial_docmod_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_secuencial_docmod" type=text name="nc_secuencial_docmod" value="<?php echo $this->form_encode_input($nc_secuencial_docmod) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_secuencial_docmod']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['nc_secuencial_docmod']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_secuencial_docmod']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_secuencial_docmod_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_secuencial_docmod_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_fecha_emison_docmod']))
    {
        $this->nm_new_label['nc_fecha_emison_docmod'] = "" . $this->Ini->Nm_lang['lang_fecha_emision'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_fecha_emison_docmod = $this->nc_fecha_emison_docmod;
   if (!isset($this->nmgp_cmp_hidden['nc_fecha_emison_docmod']))
   {
       $this->nmgp_cmp_hidden['nc_fecha_emison_docmod'] = 'off';
   }
   $sStyleHidden_nc_fecha_emison_docmod = '';
   if (isset($this->nmgp_cmp_hidden['nc_fecha_emison_docmod']) && $this->nmgp_cmp_hidden['nc_fecha_emison_docmod'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_fecha_emison_docmod']);
       $sStyleHidden_nc_fecha_emison_docmod = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_fecha_emison_docmod = 'display: none;';
   $sStyleReadInp_nc_fecha_emison_docmod = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_fecha_emison_docmod']) && $this->nmgp_cmp_readonly['nc_fecha_emison_docmod'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_fecha_emison_docmod']);
       $sStyleReadLab_nc_fecha_emison_docmod = '';
       $sStyleReadInp_nc_fecha_emison_docmod = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_fecha_emison_docmod']) && $this->nmgp_cmp_hidden['nc_fecha_emison_docmod'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_fecha_emison_docmod" value="<?php echo $this->form_encode_input($nc_fecha_emison_docmod) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_fecha_emison_docmod_line" id="hidden_field_data_nc_fecha_emison_docmod" style="<?php echo $sStyleHidden_nc_fecha_emison_docmod; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_fecha_emison_docmod_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_fecha_emison_docmod_label" style=""><span id="id_label_nc_fecha_emison_docmod"><?php echo $this->nm_new_label['nc_fecha_emison_docmod']; ?></span></span><br><input type="hidden" name="nc_fecha_emison_docmod" value="<?php echo $this->form_encode_input($nc_fecha_emison_docmod); ?>"><span id="id_ajax_label_nc_fecha_emison_docmod"><?php echo nl2br($nc_fecha_emison_docmod); ?></span>
<?php
$tmp_form_data = $this->field_config['nc_fecha_emison_docmod']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_fecha_emison_docmod_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_fecha_emison_docmod_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_nc_fecha_emison_docmod_dumb = ('' == $sStyleHidden_nc_fecha_emison_docmod) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nc_fecha_emison_docmod_dumb" style="<?php echo $sStyleHidden_nc_fecha_emison_docmod_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_cliente'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_ruc_cliente']))
    {
        $this->nm_new_label['fac_ruc_cliente'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_ruc_cliente = $this->fac_ruc_cliente;
   $sStyleHidden_fac_ruc_cliente = '';
   if (isset($this->nmgp_cmp_hidden['fac_ruc_cliente']) && $this->nmgp_cmp_hidden['fac_ruc_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fac_ruc_cliente']);
       $sStyleHidden_fac_ruc_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fac_ruc_cliente = 'display: none;';
   $sStyleReadInp_fac_ruc_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fac_ruc_cliente']) && $this->nmgp_cmp_readonly['fac_ruc_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fac_ruc_cliente']);
       $sStyleReadLab_fac_ruc_cliente = '';
       $sStyleReadInp_fac_ruc_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fac_ruc_cliente']) && $this->nmgp_cmp_hidden['fac_ruc_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_ruc_cliente" value="<?php echo $this->form_encode_input($fac_ruc_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_ruc_cliente_line" id="hidden_field_data_fac_ruc_cliente" style="<?php echo $sStyleHidden_fac_ruc_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fac_ruc_cliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fac_ruc_cliente_label" style=""><span id="id_label_fac_ruc_cliente"><?php echo $this->nm_new_label['fac_ruc_cliente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_ruc_cliente"]) &&  $this->nmgp_cmp_readonly["fac_ruc_cliente"] == "on") { 

 ?>
<input type="hidden" name="fac_ruc_cliente" value="<?php echo $this->form_encode_input($fac_ruc_cliente) . "\">" . $fac_ruc_cliente . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_ruc_cliente" class="sc-ui-readonly-fac_ruc_cliente css_fac_ruc_cliente_line" style="<?php echo $sStyleReadLab_fac_ruc_cliente; ?>"><?php echo $this->form_format_readonly("fac_ruc_cliente", $this->form_encode_input($this->fac_ruc_cliente)); ?></span><span id="id_read_off_fac_ruc_cliente" class="css_read_off_fac_ruc_cliente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_ruc_cliente; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_ruc_cliente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_ruc_cliente" type=text name="fac_ruc_cliente" value="<?php echo $this->form_encode_input($fac_ruc_cliente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_ruc_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_ruc_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_nombre_cliente']))
    {
        $this->nm_new_label['fac_nombre_cliente'] = "" . $this->Ini->Nm_lang['lang_cliente'] . "";
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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_nombre_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_nombre_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_direccion_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_direccion_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
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
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fac_email_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fac_email_cliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_motivo']))
    {
        $this->nm_new_label['nc_motivo'] = "" . $this->Ini->Nm_lang['lang_motivo'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_motivo = $this->nc_motivo;
   $sStyleHidden_nc_motivo = '';
   if (isset($this->nmgp_cmp_hidden['nc_motivo']) && $this->nmgp_cmp_hidden['nc_motivo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_motivo']);
       $sStyleHidden_nc_motivo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_motivo = 'display: none;';
   $sStyleReadInp_nc_motivo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_motivo']) && $this->nmgp_cmp_readonly['nc_motivo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_motivo']);
       $sStyleReadLab_nc_motivo = '';
       $sStyleReadInp_nc_motivo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_motivo']) && $this->nmgp_cmp_hidden['nc_motivo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_motivo" value="<?php echo $this->form_encode_input($nc_motivo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_motivo_line" id="hidden_field_data_nc_motivo" style="<?php echo $sStyleHidden_nc_motivo; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_motivo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_motivo_label" style=""><span id="id_label_nc_motivo"><?php echo $this->nm_new_label['nc_motivo']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['php_cmp_required']['nc_motivo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['php_cmp_required']['nc_motivo'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php
$nc_motivo_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($nc_motivo));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_motivo"]) &&  $this->nmgp_cmp_readonly["nc_motivo"] == "on") { 

 ?>
<input type="hidden" name="nc_motivo" value="<?php echo $this->form_encode_input($nc_motivo) . "\">" . $nc_motivo_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_motivo" class="sc-ui-readonly-nc_motivo css_nc_motivo_line" style="<?php echo $sStyleReadLab_nc_motivo; ?>"><?php echo $this->form_format_readonly("nc_motivo", $this->form_encode_input($nc_motivo_val)); ?></span><span id="id_read_off_nc_motivo" class="css_read_off_nc_motivo<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_motivo; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_nc_motivo_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;" name="nc_motivo" id="id_sc_field_nc_motivo" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $nc_motivo; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_motivo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_motivo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_nc_motivo_dumb = ('' == $sStyleHidden_nc_motivo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nc_motivo_dumb" style="<?php echo $sStyleHidden_nc_motivo_dumb; ?>"></TD>
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
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalles'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalles'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalles'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['embutida_parms'] = "var_nota_credito*scin" . $this->nmgp_dados_form['nc_numero'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['foreign_key']['dnc_nota_credito'] = $this->nmgp_dados_form['nc_numero'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['foreign_key']['dnc_empresa'] = $this->nmgp_dados_form['nc_empresa'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['where_filter'] = "dnc_nota_credito = " . $this->nmgp_dados_form['nc_numero'] . " AND dnc_empresa = '" . $this->nmgp_dados_form['nc_empresa'] . "'";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['where_detal']  = "dnc_nota_credito = " . $this->nmgp_dados_form['nc_numero'] . " AND dnc_empresa = '" . $this->nmgp_dados_form['nc_empresa'] . "'";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_nota_credito_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_nota_credito_mob_empty.htm' : $this->Ini->link_form_del_detalle_nota_credito_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=418';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init'] ]['form_del_detalle_nota_credito'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_detalles']) && 'nmsc_iframe_liga_form_del_detalle_nota_credito_mob' != $this->Ini->sc_lig_target['C_@scinf_detalles'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_detalles'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_detalle_nota_credito_mob_script_case_init']);
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
<iframe border="0" id="nmsc_iframe_liga_form_del_detalle_nota_credito_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="418" width="100%" name="nmsc_iframe_liga_form_del_detalle_nota_credito_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
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
   <a name="bloco_5"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_5" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


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
    if (!isset($this->nm_new_label['nc_subtotal']))
    {
        $this->nm_new_label['nc_subtotal'] = "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_subtotal = $this->nc_subtotal;
   $sStyleHidden_nc_subtotal = '';
   if (isset($this->nmgp_cmp_hidden['nc_subtotal']) && $this->nmgp_cmp_hidden['nc_subtotal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_subtotal']);
       $sStyleHidden_nc_subtotal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_subtotal = 'display: none;';
   $sStyleReadInp_nc_subtotal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_subtotal']) && $this->nmgp_cmp_readonly['nc_subtotal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_subtotal']);
       $sStyleReadLab_nc_subtotal = '';
       $sStyleReadInp_nc_subtotal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_subtotal']) && $this->nmgp_cmp_hidden['nc_subtotal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_subtotal" value="<?php echo $this->form_encode_input($nc_subtotal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_subtotal_line" id="hidden_field_data_nc_subtotal" style="<?php echo $sStyleHidden_nc_subtotal; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_subtotal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_subtotal_label" style=""><span id="id_label_nc_subtotal"><?php echo $this->nm_new_label['nc_subtotal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_subtotal"]) &&  $this->nmgp_cmp_readonly["nc_subtotal"] == "on") { 

 ?>
<input type="hidden" name="nc_subtotal" value="<?php echo $this->form_encode_input($nc_subtotal) . "\">" . $nc_subtotal . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_subtotal" class="sc-ui-readonly-nc_subtotal css_nc_subtotal_line" style="<?php echo $sStyleReadLab_nc_subtotal; ?>"><?php echo $this->form_format_readonly("nc_subtotal", $this->form_encode_input($this->nc_subtotal)); ?></span><span id="id_read_off_nc_subtotal" class="css_read_off_nc_subtotal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_subtotal; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_subtotal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_subtotal" type=text name="nc_subtotal" value="<?php echo $this->form_encode_input($nc_subtotal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_subtotal']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_subtotal']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_subtotal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_subtotal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_subtotal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_subtotal_iva']))
    {
        $this->nm_new_label['nc_subtotal_iva'] = "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_subtotal_iva = $this->nc_subtotal_iva;
   $sStyleHidden_nc_subtotal_iva = '';
   if (isset($this->nmgp_cmp_hidden['nc_subtotal_iva']) && $this->nmgp_cmp_hidden['nc_subtotal_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_subtotal_iva']);
       $sStyleHidden_nc_subtotal_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_subtotal_iva = 'display: none;';
   $sStyleReadInp_nc_subtotal_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_subtotal_iva']) && $this->nmgp_cmp_readonly['nc_subtotal_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_subtotal_iva']);
       $sStyleReadLab_nc_subtotal_iva = '';
       $sStyleReadInp_nc_subtotal_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_subtotal_iva']) && $this->nmgp_cmp_hidden['nc_subtotal_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_subtotal_iva" value="<?php echo $this->form_encode_input($nc_subtotal_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_subtotal_iva_line" id="hidden_field_data_nc_subtotal_iva" style="<?php echo $sStyleHidden_nc_subtotal_iva; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_subtotal_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_subtotal_iva_label" style=""><span id="id_label_nc_subtotal_iva"><?php echo $this->nm_new_label['nc_subtotal_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_subtotal_iva"]) &&  $this->nmgp_cmp_readonly["nc_subtotal_iva"] == "on") { 

 ?>
<input type="hidden" name="nc_subtotal_iva" value="<?php echo $this->form_encode_input($nc_subtotal_iva) . "\">" . $nc_subtotal_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_subtotal_iva" class="sc-ui-readonly-nc_subtotal_iva css_nc_subtotal_iva_line" style="<?php echo $sStyleReadLab_nc_subtotal_iva; ?>"><?php echo $this->form_format_readonly("nc_subtotal_iva", $this->form_encode_input($this->nc_subtotal_iva)); ?></span><span id="id_read_off_nc_subtotal_iva" class="css_read_off_nc_subtotal_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_subtotal_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_subtotal_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_subtotal_iva" type=text name="nc_subtotal_iva" value="<?php echo $this->form_encode_input($nc_subtotal_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_subtotal_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_subtotal_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_subtotal_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_subtotal_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_subtotal_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_subtotal_cero']))
    {
        $this->nm_new_label['nc_subtotal_cero'] = "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_subtotal_cero = $this->nc_subtotal_cero;
   $sStyleHidden_nc_subtotal_cero = '';
   if (isset($this->nmgp_cmp_hidden['nc_subtotal_cero']) && $this->nmgp_cmp_hidden['nc_subtotal_cero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_subtotal_cero']);
       $sStyleHidden_nc_subtotal_cero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_subtotal_cero = 'display: none;';
   $sStyleReadInp_nc_subtotal_cero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_subtotal_cero']) && $this->nmgp_cmp_readonly['nc_subtotal_cero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_subtotal_cero']);
       $sStyleReadLab_nc_subtotal_cero = '';
       $sStyleReadInp_nc_subtotal_cero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_subtotal_cero']) && $this->nmgp_cmp_hidden['nc_subtotal_cero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_subtotal_cero" value="<?php echo $this->form_encode_input($nc_subtotal_cero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_subtotal_cero_line" id="hidden_field_data_nc_subtotal_cero" style="<?php echo $sStyleHidden_nc_subtotal_cero; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_subtotal_cero_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_subtotal_cero_label" style=""><span id="id_label_nc_subtotal_cero"><?php echo $this->nm_new_label['nc_subtotal_cero']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_subtotal_cero"]) &&  $this->nmgp_cmp_readonly["nc_subtotal_cero"] == "on") { 

 ?>
<input type="hidden" name="nc_subtotal_cero" value="<?php echo $this->form_encode_input($nc_subtotal_cero) . "\">" . $nc_subtotal_cero . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_subtotal_cero" class="sc-ui-readonly-nc_subtotal_cero css_nc_subtotal_cero_line" style="<?php echo $sStyleReadLab_nc_subtotal_cero; ?>"><?php echo $this->form_format_readonly("nc_subtotal_cero", $this->form_encode_input($this->nc_subtotal_cero)); ?></span><span id="id_read_off_nc_subtotal_cero" class="css_read_off_nc_subtotal_cero<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_subtotal_cero; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_subtotal_cero_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_subtotal_cero" type=text name="nc_subtotal_cero" value="<?php echo $this->form_encode_input($nc_subtotal_cero) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_subtotal_cero']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_subtotal_cero']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_subtotal_cero']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_subtotal_cero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_subtotal_cero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_subtotal_no_objeto']))
    {
        $this->nm_new_label['nc_subtotal_no_objeto'] = "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_subtotal_no_objeto = $this->nc_subtotal_no_objeto;
   $sStyleHidden_nc_subtotal_no_objeto = '';
   if (isset($this->nmgp_cmp_hidden['nc_subtotal_no_objeto']) && $this->nmgp_cmp_hidden['nc_subtotal_no_objeto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_subtotal_no_objeto']);
       $sStyleHidden_nc_subtotal_no_objeto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_subtotal_no_objeto = 'display: none;';
   $sStyleReadInp_nc_subtotal_no_objeto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_subtotal_no_objeto']) && $this->nmgp_cmp_readonly['nc_subtotal_no_objeto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_subtotal_no_objeto']);
       $sStyleReadLab_nc_subtotal_no_objeto = '';
       $sStyleReadInp_nc_subtotal_no_objeto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_subtotal_no_objeto']) && $this->nmgp_cmp_hidden['nc_subtotal_no_objeto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_subtotal_no_objeto" value="<?php echo $this->form_encode_input($nc_subtotal_no_objeto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_subtotal_no_objeto_line" id="hidden_field_data_nc_subtotal_no_objeto" style="<?php echo $sStyleHidden_nc_subtotal_no_objeto; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_subtotal_no_objeto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_subtotal_no_objeto_label" style=""><span id="id_label_nc_subtotal_no_objeto"><?php echo $this->nm_new_label['nc_subtotal_no_objeto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_subtotal_no_objeto"]) &&  $this->nmgp_cmp_readonly["nc_subtotal_no_objeto"] == "on") { 

 ?>
<input type="hidden" name="nc_subtotal_no_objeto" value="<?php echo $this->form_encode_input($nc_subtotal_no_objeto) . "\">" . $nc_subtotal_no_objeto . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_subtotal_no_objeto" class="sc-ui-readonly-nc_subtotal_no_objeto css_nc_subtotal_no_objeto_line" style="<?php echo $sStyleReadLab_nc_subtotal_no_objeto; ?>"><?php echo $this->form_format_readonly("nc_subtotal_no_objeto", $this->form_encode_input($this->nc_subtotal_no_objeto)); ?></span><span id="id_read_off_nc_subtotal_no_objeto" class="css_read_off_nc_subtotal_no_objeto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_subtotal_no_objeto; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_subtotal_no_objeto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_subtotal_no_objeto" type=text name="nc_subtotal_no_objeto" value="<?php echo $this->form_encode_input($nc_subtotal_no_objeto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_subtotal_no_objeto']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_subtotal_no_objeto']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_subtotal_no_objeto']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_subtotal_no_objeto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_subtotal_no_objeto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_subtotal_excento']))
    {
        $this->nm_new_label['nc_subtotal_excento'] = "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_subtotal_excento = $this->nc_subtotal_excento;
   $sStyleHidden_nc_subtotal_excento = '';
   if (isset($this->nmgp_cmp_hidden['nc_subtotal_excento']) && $this->nmgp_cmp_hidden['nc_subtotal_excento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_subtotal_excento']);
       $sStyleHidden_nc_subtotal_excento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_subtotal_excento = 'display: none;';
   $sStyleReadInp_nc_subtotal_excento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_subtotal_excento']) && $this->nmgp_cmp_readonly['nc_subtotal_excento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_subtotal_excento']);
       $sStyleReadLab_nc_subtotal_excento = '';
       $sStyleReadInp_nc_subtotal_excento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_subtotal_excento']) && $this->nmgp_cmp_hidden['nc_subtotal_excento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_subtotal_excento" value="<?php echo $this->form_encode_input($nc_subtotal_excento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_subtotal_excento_line" id="hidden_field_data_nc_subtotal_excento" style="<?php echo $sStyleHidden_nc_subtotal_excento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_subtotal_excento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_subtotal_excento_label" style=""><span id="id_label_nc_subtotal_excento"><?php echo $this->nm_new_label['nc_subtotal_excento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_subtotal_excento"]) &&  $this->nmgp_cmp_readonly["nc_subtotal_excento"] == "on") { 

 ?>
<input type="hidden" name="nc_subtotal_excento" value="<?php echo $this->form_encode_input($nc_subtotal_excento) . "\">" . $nc_subtotal_excento . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_subtotal_excento" class="sc-ui-readonly-nc_subtotal_excento css_nc_subtotal_excento_line" style="<?php echo $sStyleReadLab_nc_subtotal_excento; ?>"><?php echo $this->form_format_readonly("nc_subtotal_excento", $this->form_encode_input($this->nc_subtotal_excento)); ?></span><span id="id_read_off_nc_subtotal_excento" class="css_read_off_nc_subtotal_excento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_subtotal_excento; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_subtotal_excento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_subtotal_excento" type=text name="nc_subtotal_excento" value="<?php echo $this->form_encode_input($nc_subtotal_excento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_subtotal_excento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_subtotal_excento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_subtotal_excento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_subtotal_excento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_subtotal_excento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_total_descuento']))
    {
        $this->nm_new_label['nc_total_descuento'] = "" . $this->Ini->Nm_lang['lang_descuento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_total_descuento = $this->nc_total_descuento;
   $sStyleHidden_nc_total_descuento = '';
   if (isset($this->nmgp_cmp_hidden['nc_total_descuento']) && $this->nmgp_cmp_hidden['nc_total_descuento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_total_descuento']);
       $sStyleHidden_nc_total_descuento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_total_descuento = 'display: none;';
   $sStyleReadInp_nc_total_descuento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_total_descuento']) && $this->nmgp_cmp_readonly['nc_total_descuento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_total_descuento']);
       $sStyleReadLab_nc_total_descuento = '';
       $sStyleReadInp_nc_total_descuento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_total_descuento']) && $this->nmgp_cmp_hidden['nc_total_descuento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_total_descuento" value="<?php echo $this->form_encode_input($nc_total_descuento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_total_descuento_line" id="hidden_field_data_nc_total_descuento" style="<?php echo $sStyleHidden_nc_total_descuento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_total_descuento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_total_descuento_label" style=""><span id="id_label_nc_total_descuento"><?php echo $this->nm_new_label['nc_total_descuento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_total_descuento"]) &&  $this->nmgp_cmp_readonly["nc_total_descuento"] == "on") { 

 ?>
<input type="hidden" name="nc_total_descuento" value="<?php echo $this->form_encode_input($nc_total_descuento) . "\">" . $nc_total_descuento . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_total_descuento" class="sc-ui-readonly-nc_total_descuento css_nc_total_descuento_line" style="<?php echo $sStyleReadLab_nc_total_descuento; ?>"><?php echo $this->form_format_readonly("nc_total_descuento", $this->form_encode_input($this->nc_total_descuento)); ?></span><span id="id_read_off_nc_total_descuento" class="css_read_off_nc_total_descuento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_total_descuento; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_total_descuento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_total_descuento" type=text name="nc_total_descuento" value="<?php echo $this->form_encode_input($nc_total_descuento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_total_descuento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_total_descuento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_total_descuento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_total_descuento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_total_descuento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_valor_ice']))
    {
        $this->nm_new_label['nc_valor_ice'] = "" . $this->Ini->Nm_lang['lang_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_valor_ice = $this->nc_valor_ice;
   $sStyleHidden_nc_valor_ice = '';
   if (isset($this->nmgp_cmp_hidden['nc_valor_ice']) && $this->nmgp_cmp_hidden['nc_valor_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_valor_ice']);
       $sStyleHidden_nc_valor_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_valor_ice = 'display: none;';
   $sStyleReadInp_nc_valor_ice = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_valor_ice']) && $this->nmgp_cmp_readonly['nc_valor_ice'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_valor_ice']);
       $sStyleReadLab_nc_valor_ice = '';
       $sStyleReadInp_nc_valor_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_valor_ice']) && $this->nmgp_cmp_hidden['nc_valor_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_valor_ice" value="<?php echo $this->form_encode_input($nc_valor_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_valor_ice_line" id="hidden_field_data_nc_valor_ice" style="<?php echo $sStyleHidden_nc_valor_ice; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_valor_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_valor_ice_label" style=""><span id="id_label_nc_valor_ice"><?php echo $this->nm_new_label['nc_valor_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_valor_ice"]) &&  $this->nmgp_cmp_readonly["nc_valor_ice"] == "on") { 

 ?>
<input type="hidden" name="nc_valor_ice" value="<?php echo $this->form_encode_input($nc_valor_ice) . "\">" . $nc_valor_ice . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_valor_ice" class="sc-ui-readonly-nc_valor_ice css_nc_valor_ice_line" style="<?php echo $sStyleReadLab_nc_valor_ice; ?>"><?php echo $this->form_format_readonly("nc_valor_ice", $this->form_encode_input($this->nc_valor_ice)); ?></span><span id="id_read_off_nc_valor_ice" class="css_read_off_nc_valor_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_valor_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_valor_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_valor_ice" type=text name="nc_valor_ice" value="<?php echo $this->form_encode_input($nc_valor_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_valor_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_valor_ice']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_valor_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_valor_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_valor_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_valor_iva']))
    {
        $this->nm_new_label['nc_valor_iva'] = "" . $this->Ini->Nm_lang['lang_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_valor_iva = $this->nc_valor_iva;
   $sStyleHidden_nc_valor_iva = '';
   if (isset($this->nmgp_cmp_hidden['nc_valor_iva']) && $this->nmgp_cmp_hidden['nc_valor_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_valor_iva']);
       $sStyleHidden_nc_valor_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_valor_iva = 'display: none;';
   $sStyleReadInp_nc_valor_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_valor_iva']) && $this->nmgp_cmp_readonly['nc_valor_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_valor_iva']);
       $sStyleReadLab_nc_valor_iva = '';
       $sStyleReadInp_nc_valor_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_valor_iva']) && $this->nmgp_cmp_hidden['nc_valor_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_valor_iva" value="<?php echo $this->form_encode_input($nc_valor_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_valor_iva_line" id="hidden_field_data_nc_valor_iva" style="<?php echo $sStyleHidden_nc_valor_iva; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_valor_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_valor_iva_label" style=""><span id="id_label_nc_valor_iva"><?php echo $this->nm_new_label['nc_valor_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_valor_iva"]) &&  $this->nmgp_cmp_readonly["nc_valor_iva"] == "on") { 

 ?>
<input type="hidden" name="nc_valor_iva" value="<?php echo $this->form_encode_input($nc_valor_iva) . "\">" . $nc_valor_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_valor_iva" class="sc-ui-readonly-nc_valor_iva css_nc_valor_iva_line" style="<?php echo $sStyleReadLab_nc_valor_iva; ?>"><?php echo $this->form_format_readonly("nc_valor_iva", $this->form_encode_input($this->nc_valor_iva)); ?></span><span id="id_read_off_nc_valor_iva" class="css_read_off_nc_valor_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_valor_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_valor_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_valor_iva" type=text name="nc_valor_iva" value="<?php echo $this->form_encode_input($nc_valor_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_valor_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_valor_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_valor_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_valor_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_valor_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_valor_irbpnr']))
    {
        $this->nm_new_label['nc_valor_irbpnr'] = "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_valor_irbpnr = $this->nc_valor_irbpnr;
   $sStyleHidden_nc_valor_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['nc_valor_irbpnr']) && $this->nmgp_cmp_hidden['nc_valor_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_valor_irbpnr']);
       $sStyleHidden_nc_valor_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_valor_irbpnr = 'display: none;';
   $sStyleReadInp_nc_valor_irbpnr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_valor_irbpnr']) && $this->nmgp_cmp_readonly['nc_valor_irbpnr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_valor_irbpnr']);
       $sStyleReadLab_nc_valor_irbpnr = '';
       $sStyleReadInp_nc_valor_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_valor_irbpnr']) && $this->nmgp_cmp_hidden['nc_valor_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_valor_irbpnr" value="<?php echo $this->form_encode_input($nc_valor_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_valor_irbpnr_line" id="hidden_field_data_nc_valor_irbpnr" style="<?php echo $sStyleHidden_nc_valor_irbpnr; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_valor_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_valor_irbpnr_label" style=""><span id="id_label_nc_valor_irbpnr"><?php echo $this->nm_new_label['nc_valor_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_valor_irbpnr"]) &&  $this->nmgp_cmp_readonly["nc_valor_irbpnr"] == "on") { 

 ?>
<input type="hidden" name="nc_valor_irbpnr" value="<?php echo $this->form_encode_input($nc_valor_irbpnr) . "\">" . $nc_valor_irbpnr . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_valor_irbpnr" class="sc-ui-readonly-nc_valor_irbpnr css_nc_valor_irbpnr_line" style="<?php echo $sStyleReadLab_nc_valor_irbpnr; ?>"><?php echo $this->form_format_readonly("nc_valor_irbpnr", $this->form_encode_input($this->nc_valor_irbpnr)); ?></span><span id="id_read_off_nc_valor_irbpnr" class="css_read_off_nc_valor_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_valor_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_valor_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_valor_irbpnr" type=text name="nc_valor_irbpnr" value="<?php echo $this->form_encode_input($nc_valor_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_valor_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_valor_irbpnr']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_valor_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_valor_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_valor_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nc_total']))
    {
        $this->nm_new_label['nc_total'] = "" . $this->Ini->Nm_lang['lang_othr_totl'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nc_total = $this->nc_total;
   $sStyleHidden_nc_total = '';
   if (isset($this->nmgp_cmp_hidden['nc_total']) && $this->nmgp_cmp_hidden['nc_total'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nc_total']);
       $sStyleHidden_nc_total = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nc_total = 'display: none;';
   $sStyleReadInp_nc_total = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nc_total']) && $this->nmgp_cmp_readonly['nc_total'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nc_total']);
       $sStyleReadLab_nc_total = '';
       $sStyleReadInp_nc_total = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nc_total']) && $this->nmgp_cmp_hidden['nc_total'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nc_total" value="<?php echo $this->form_encode_input($nc_total) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nc_total_line" id="hidden_field_data_nc_total" style="<?php echo $sStyleHidden_nc_total; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nc_total_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nc_total_label" style=""><span id="id_label_nc_total"><?php echo $this->nm_new_label['nc_total']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nc_total"]) &&  $this->nmgp_cmp_readonly["nc_total"] == "on") { 

 ?>
<input type="hidden" name="nc_total" value="<?php echo $this->form_encode_input($nc_total) . "\">" . $nc_total . ""; ?>
<?php } else { ?>
<span id="id_read_on_nc_total" class="sc-ui-readonly-nc_total css_nc_total_line" style="<?php echo $sStyleReadLab_nc_total; ?>"><?php echo $this->form_format_readonly("nc_total", $this->form_encode_input($this->nc_total)); ?></span><span id="id_read_off_nc_total" class="css_read_off_nc_total<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nc_total; ?>">
 <input class="sc-js-input scFormObjectOdd css_nc_total_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nc_total" type=text name="nc_total" value="<?php echo $this->form_encode_input($nc_total) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['nc_total']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['nc_total']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nc_total']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nc_total_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nc_total_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_nc_total_dumb = ('' == $sStyleHidden_nc_total) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nc_total_dumb" style="<?php echo $sStyleHidden_nc_total_dumb; ?>"></TD>
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
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['embutida_parms'] = "var_nota_credito*scin" . $this->nmgp_dados_form['nc_numero'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['foreign_key']['fp_nota_credito'] = $this->nmgp_dados_form['nc_numero'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['where_filter'] = "fp_nota_credito = " . $this->nmgp_dados_form['nc_numero'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['where_detal']  = "fp_nota_credito = " . $this->nmgp_dados_form['nc_numero'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_nota_credito_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_nota_credito_mob_empty.htm' : $this->Ini->link_form_del_forma_pago_nota_credito_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=200';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init'] ]['form_del_forma_pago_nota_credito'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_forma_pago']) && 'nmsc_iframe_liga_form_del_forma_pago_nota_credito_mob' != $this->Ini->sc_lig_target['C_@scinf_forma_pago'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_forma_pago'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['form_del_forma_pago_nota_credito_mob_script_case_init']);
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
<iframe border="0" id="nmsc_iframe_liga_form_del_forma_pago_nota_credito_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="200" width="100%" name="nmsc_iframe_liga_form_del_forma_pago_nota_credito_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-21';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['exit'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['nuevo'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['update'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['anular'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['enviar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['enviar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['enviar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['enviar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['enviar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "enviar", "scBtnFn_enviar()", "scBtnFn_enviar()", "sc_enviar_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['ride'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['ride']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_disabled']['ride']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['ride']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['ride']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['btn_label']['ride'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "ride", "scBtnFn_ride()", "scBtnFn_ride()", "sc_ride_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['run_iframe'] != "R")
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_nota_credito_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_nota_credito_mob");
 parent.scAjaxDetailHeight("form_del_nota_credito_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_nota_credito_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_nota_credito_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['sc_modal'])
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
	function scBtnFn_ride() {
		if ($("#sc_ride_top").length && $("#sc_ride_top").is(":visible")) {
		    if ($("#sc_ride_top").hasClass("disabled")) {
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
		if ($("#sc_ride_top").length && $("#sc_ride_top").is(":visible")) {
		    if ($("#sc_ride_top").hasClass("disabled")) {
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
	function scBtnFn_contabilizar() {
		if ($("#sc_contabilizar_top").length && $("#sc_contabilizar_top").is(":visible")) {
		    if ($("#sc_contabilizar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_contabilizar()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_contabilizar_top").length && $("#sc_contabilizar_top").is(":visible")) {
		    if ($("#sc_contabilizar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_contabilizar()
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nota_credito_mob']['buttonStatus'] = $this->nmgp_botoes;
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
