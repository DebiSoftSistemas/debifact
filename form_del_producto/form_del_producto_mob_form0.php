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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_producto"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_producto"); } ?></TITLE>
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
.css_read_off_pro_precio button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_pro_base_ice button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_producto/form_del_producto_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_producto_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['last'] : 'off'); ?>";
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
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
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
     if (F_name == "pro_valor_subsidio")
     {
        $('input[name="pro_valor_subsidio"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="pro_valor_subsidio"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="pro_valor_subsidio"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tarifa_ice")
     {
        $('input[name="tarifa_ice"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tarifa_ice"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tarifa_ice"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "total_ice")
     {
        $('input[name="total_ice"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="total_ice"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="total_ice"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tarifa_iva")
     {
        $('input[name="tarifa_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tarifa_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tarifa_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "base_iva")
     {
        $('input[name="base_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="base_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="base_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "total_iva")
     {
        $('input[name="total_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="total_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="total_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tarifa_irbpnr")
     {
        $('input[name="tarifa_irbpnr"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="tarifa_irbpnr"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="tarifa_irbpnr"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "total_irbpnr")
     {
        $('input[name="total_irbpnr"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="total_irbpnr"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="total_irbpnr"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "pro_iva")
     {
        $('input[name="pro_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="pro_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="pro_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "precio_con_impuesto")
     {
        $('input[name="precio_con_impuesto"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="precio_con_impuesto"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="precio_con_impuesto"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "pro_ice")
     {
        $('input[name="pro_ice"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="pro_ice"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="pro_ice"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "pro_irbpnr")
     {
        $('input[name="pro_irbpnr"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="pro_irbpnr"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="pro_irbpnr"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_del_producto_mob_jquery.php');

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
  scFocusField('pro_codigo');

<?php
}
?>
  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
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
     if ($('#t').length>0) {
         scQuickSearchKeyUp('t', null);
     }
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchKeyUp(sPos, e) {
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
       else
       {
           $('#SC_fast_search_submit_'+sPos).show();
       }
     }
   }
   function nm_gp_submit_qsearch(pos)
   {
        nm_move('fast_search', pos);
   }
   function nm_gp_open_qsearch_div(pos)
   {
        if (typeof nm_gp_open_qsearch_div_mobile == 'function') {
            return nm_gp_open_qsearch_div_mobile(pos);
        }
        if($('#SC_fast_search_dropdown_' + pos).hasClass('fa-caret-down'))
        {
            if(($('#quicksearchph_' + pos).offset().top+$('#id_qs_div_' + pos).height()+10) >= $(document).height())
            {
                $('#id_qs_div_' + pos).offset({top:($('#quicksearchph_' + pos).offset().top-($('#quicksearchph_' + pos).height()/2)-$('#id_qs_div_' + pos).height()-4)});
            }

            nm_gp_open_qsearch_div_store_temp(pos);
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-down').addClass('fa-caret-up');
        }
        else
        {
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-up').addClass('fa-caret-down');
        }
        $('#id_qs_div_' + pos).toggle();
   }

   var tmp_qs_arr_fields = [], tmp_qs_arr_cond = "";
   function nm_gp_open_qsearch_div_store_temp(pos)
   {
        tmp_qs_arr_fields = [], tmp_qs_str_cond = "";

        if($('#fast_search_f0_' + pos).prop('type') == 'select-multiple')
        {
            tmp_qs_arr_fields = $('#fast_search_f0_' + pos).val();
        }
        else
        {
            tmp_qs_arr_fields.push($('#fast_search_f0_' + pos).val());
        }

        tmp_qs_str_cond = $('#cond_fast_search_f0_' + pos).val();
   }

   function nm_gp_cancel_qsearch_div_store_temp(pos)
   {
        $('#fast_search_f0_' + pos).val('');
        $("#fast_search_f0_" + pos + " option").prop('selected', false);
        for(it=0; it<tmp_qs_arr_fields.length; it++)
        {
            $("#fast_search_f0_" + pos + " option[value='"+ tmp_qs_arr_fields[it] +"']").prop('selected', true);
        }
        $("#fast_search_f0_" + pos).change();
        tmp_qs_arr_fields = [];

        $('#cond_fast_search_f0_' + pos).val(tmp_qs_str_cond);
        $('#cond_fast_search_f0_' + pos).change();
        tmp_qs_str_cond = "";

        nm_gp_open_qsearch_div(pos);
   } if($(".sc-ui-block-control").length) {
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['recarga'];
}
if ('' != $this->pro_iva)
{
    $this->lookup_pro_iva($look_rpc_pro_iva);
}
if ('' != $this->pro_ice)
{
    $this->lookup_pro_ice($look_rpc_pro_ice);
}
if ('' != $this->pro_irbpnr)
{
    $this->lookup_pro_irbpnr($look_rpc_pro_irbpnr);
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_del_producto']['error_buffer']) && '' != $_SESSION['scriptcase']['form_del_producto']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_del_producto']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
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
 include_once("form_del_producto_mob_js0.php");
?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/jsrsClient.js" ?>"> 
</script> 
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
<form  name="F1" method="post" enctype="multipart/form-data" 
               action="form_del_producto_mob.php" 
               onsubmit="return false;" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['insert_validation']; ?>">
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
<input type="hidden" name="pro_imagen_salva" value="<?php  echo $this->form_encode_input($this->pro_imagen) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_del_producto_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_producto_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R")
{
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['fast_search'][2] : "";
          $stateSearchIconClose  = 'none';
          $stateSearchIconSearch = '';
          if(!empty($OPC_dat))
          {
              $stateSearchIconClose  = '';
              $stateSearchIconSearch = 'none';
          }
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input id='fast_search_f0_t' type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <select id='cond_fast_search_f0_t' class="scFormToolbarInput" style="vertical-align: middle;display:none;" name="nmgp_cond_fast_search_t" onChange="change_fast_t = 'CH';">
<?php 
          $OPC_sel = ("qp" == $OPC_arg) ? " selected" : "";
           echo "           <option value='qp'" . $OPC_sel . ">" . $this->Ini->Nm_lang['lang_srch_like'] . "</option>";
?> 
          </select>
          <span id="quicksearchph_t" class="scFormToolbarInput" style='display: inline-block; vertical-align: inherit'>
              <span>
                  <input type="text" id="SC_fast_search_t" class="scFormToolbarInputText" style="border-width: 0px;;" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">&nbsp;
                  <img style="display: <?php echo $stateSearchIconSearch ?>; "  id="SC_fast_search_submit_t" class='css_toolbar_obj_qs_search_img' src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
                  <img style="display: <?php echo $stateSearchIconClose ?>; " id="SC_fast_search_close_t" class='css_toolbar_obj_qs_search_img' src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
              </span>
          </span>  </div>
  <?php
      }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label'][''];
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
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['new'];
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
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-21';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['bcancelar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['bcancelar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['bcancelar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['bcancelar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['bcancelar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Escape)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-22';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-23';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label'][''];
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
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-24';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-25';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-26';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-27';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-28';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['pro_empresa']))
   {
       $this->nmgp_cmp_hidden['pro_empresa'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pro_iva']))
   {
       $this->nmgp_cmp_hidden['pro_iva'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pro_ice']))
   {
       $this->nmgp_cmp_hidden['pro_ice'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pro_irbpnr']))
   {
       $this->nmgp_cmp_hidden['pro_irbpnr'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['pro_cta_cartera_vencida']))
   {
       $this->nmgp_cmp_hidden['pro_cta_cartera_vencida'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><input type="hidden" name="pro_imagen_ul_name" id="id_sc_field_pro_imagen_ul_name" value="<?php echo $this->form_encode_input($this->pro_imagen_ul_name);?>">
<input type="hidden" name="pro_imagen_ul_type" id="id_sc_field_pro_imagen_ul_type" value="<?php echo $this->form_encode_input($this->pro_imagen_ul_type);?>">
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_logotipo'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pro_empresa']))
           {
               $this->nmgp_cmp_readonly['pro_empresa'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['pro_imagen']))
    {
        $this->nm_new_label['pro_imagen'] = "" . $this->Ini->Nm_lang['lang_btns_img'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_imagen = $this->pro_imagen;
   $sStyleHidden_pro_imagen = '';
   if (isset($this->nmgp_cmp_hidden['pro_imagen']) && $this->nmgp_cmp_hidden['pro_imagen'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_imagen']);
       $sStyleHidden_pro_imagen = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_imagen = 'display: none;';
   $sStyleReadInp_pro_imagen = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_imagen']) && $this->nmgp_cmp_readonly['pro_imagen'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_imagen']);
       $sStyleReadLab_pro_imagen = '';
       $sStyleReadInp_pro_imagen = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_imagen']) && $this->nmgp_cmp_hidden['pro_imagen'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_imagen" value="<?php echo $this->form_encode_input($pro_imagen) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_imagen_line" id="hidden_field_data_pro_imagen" style="<?php echo $sStyleHidden_pro_imagen; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_imagen_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_pro_imagen" => $out_pro_imagen); ?><script>var var_ajax_img_pro_imagen = '<?php echo $out_pro_imagen; ?>';</script><?php if (!empty($out_pro_imagen)){ echo "<img id=\"id_ajax_img_pro_imagen\" border=\"0\" src=\"$out_pro_imagen\"> &nbsp;" . "<span id=\"txt_ajax_img_pro_imagen\" style=\"display: none\">" . $this->form_format_readonly("pro_imagen", $pro_imagen) . "</span>"; if (!empty($pro_imagen)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_pro_imagen\" border=\"0\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_pro_imagen\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_imagen"]) &&  $this->nmgp_cmp_readonly["pro_imagen"] == "on") { 

 ?>
<img id=\"pro_imagen_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="pro_imagen" value="<?php echo $this->form_encode_input($pro_imagen) . "\">" . $pro_imagen . ""; ?>
<?php } else { ?>
<span id="id_read_off_pro_imagen" class="css_read_off_pro_imagen<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_imagen; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-pro_imagen" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_pro_imagen_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="pro_imagen[]" id="id_sc_field_pro_imagen" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<?php
   $sCheckInsert = "";
?>
<span id="chk_ajax_img_pro_imagen"<?php if ($this->nmgp_opcao == "novo" || empty($pro_imagen)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="pro_imagen_limpa" value="<?php echo $pro_imagen_limpa . '" '; if ($pro_imagen_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};<?php echo $sCheckInsert ?>"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="pro_imagen_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_pro_imagen" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_pro_imagen" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_imagen_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_imagen_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_pro_imagen_dumb = ('' == $sStyleHidden_pro_imagen) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_pro_imagen_dumb" style="<?php echo $sStyleHidden_pro_imagen_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_generales'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pro_codigo']))
           {
               $this->nmgp_cmp_readonly['pro_codigo'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['pro_empresa']))
    {
        $this->nm_new_label['pro_empresa'] = "" . $this->Ini->Nm_lang['lang_empresa'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_empresa = $this->pro_empresa;
   if (!isset($this->nmgp_cmp_hidden['pro_empresa']))
   {
       $this->nmgp_cmp_hidden['pro_empresa'] = 'off';
   }
   $sStyleHidden_pro_empresa = '';
   if (isset($this->nmgp_cmp_hidden['pro_empresa']) && $this->nmgp_cmp_hidden['pro_empresa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_empresa']);
       $sStyleHidden_pro_empresa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_empresa = 'display: none;';
   $sStyleReadInp_pro_empresa = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pro_empresa"]) &&  $this->nmgp_cmp_readonly["pro_empresa"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_empresa']);
       $sStyleReadLab_pro_empresa = '';
       $sStyleReadInp_pro_empresa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_empresa']) && $this->nmgp_cmp_hidden['pro_empresa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_empresa" value="<?php echo $this->form_encode_input($pro_empresa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_empresa_line" id="hidden_field_data_pro_empresa" style="<?php echo $sStyleHidden_pro_empresa; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_empresa_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_empresa_label" style=""><span id="id_label_pro_empresa"><?php echo $this->nm_new_label['pro_empresa']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['php_cmp_required']['pro_empresa']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['php_cmp_required']['pro_empresa'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pro_empresa"]) &&  $this->nmgp_cmp_readonly["pro_empresa"] == "on")) { 

 ?>
<input type="hidden" name="pro_empresa" value="<?php echo $this->form_encode_input($pro_empresa) . "\"><span id=\"id_ajax_label_pro_empresa\">" . $pro_empresa . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_pro_empresa" class="sc-ui-readonly-pro_empresa css_pro_empresa_line" style="<?php echo $sStyleReadLab_pro_empresa; ?>"><?php echo $this->form_format_readonly("pro_empresa", $this->form_encode_input($this->pro_empresa)); ?></span><span id="id_read_off_pro_empresa" class="css_read_off_pro_empresa<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_empresa; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_empresa_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_empresa" type=text name="pro_empresa" value="<?php echo $this->form_encode_input($pro_empresa) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_empresa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_empresa_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_codigo']))
    {
        $this->nm_new_label['pro_codigo'] = "" . $this->Ini->Nm_lang['lang_codigo'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_codigo = $this->pro_codigo;
   $sStyleHidden_pro_codigo = '';
   if (isset($this->nmgp_cmp_hidden['pro_codigo']) && $this->nmgp_cmp_hidden['pro_codigo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_codigo']);
       $sStyleHidden_pro_codigo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_codigo = 'display: none;';
   $sStyleReadInp_pro_codigo = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pro_codigo"]) &&  $this->nmgp_cmp_readonly["pro_codigo"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_codigo']);
       $sStyleReadLab_pro_codigo = '';
       $sStyleReadInp_pro_codigo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_codigo']) && $this->nmgp_cmp_hidden['pro_codigo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_codigo" value="<?php echo $this->form_encode_input($pro_codigo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_codigo_line" id="hidden_field_data_pro_codigo" style="<?php echo $sStyleHidden_pro_codigo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_codigo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_codigo_label" style=""><span id="id_label_pro_codigo"><?php echo $this->nm_new_label['pro_codigo']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['php_cmp_required']['pro_codigo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['php_cmp_required']['pro_codigo'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pro_codigo"]) &&  $this->nmgp_cmp_readonly["pro_codigo"] == "on")) { 

 ?>
<input type="hidden" name="pro_codigo" value="<?php echo $this->form_encode_input($pro_codigo) . "\"><span id=\"id_ajax_label_pro_codigo\">" . $pro_codigo . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_pro_codigo" class="sc-ui-readonly-pro_codigo css_pro_codigo_line" style="<?php echo $sStyleReadLab_pro_codigo; ?>"><?php echo $this->form_format_readonly("pro_codigo", $this->form_encode_input($this->pro_codigo)); ?></span><span id="id_read_off_pro_codigo" class="css_read_off_pro_codigo<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_codigo; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_codigo_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_codigo" type=text name="pro_codigo" value="<?php echo $this->form_encode_input($pro_codigo) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_codigo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_codigo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_codigo_aux']))
    {
        $this->nm_new_label['pro_codigo_aux'] = "" . $this->Ini->Nm_lang['lang_codigo_secundario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_codigo_aux = $this->pro_codigo_aux;
   $sStyleHidden_pro_codigo_aux = '';
   if (isset($this->nmgp_cmp_hidden['pro_codigo_aux']) && $this->nmgp_cmp_hidden['pro_codigo_aux'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_codigo_aux']);
       $sStyleHidden_pro_codigo_aux = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_codigo_aux = 'display: none;';
   $sStyleReadInp_pro_codigo_aux = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_codigo_aux']) && $this->nmgp_cmp_readonly['pro_codigo_aux'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_codigo_aux']);
       $sStyleReadLab_pro_codigo_aux = '';
       $sStyleReadInp_pro_codigo_aux = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_codigo_aux']) && $this->nmgp_cmp_hidden['pro_codigo_aux'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_codigo_aux" value="<?php echo $this->form_encode_input($pro_codigo_aux) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_codigo_aux_line" id="hidden_field_data_pro_codigo_aux" style="<?php echo $sStyleHidden_pro_codigo_aux; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_codigo_aux_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_codigo_aux_label" style=""><span id="id_label_pro_codigo_aux"><?php echo $this->nm_new_label['pro_codigo_aux']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['php_cmp_required']['pro_codigo_aux']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['php_cmp_required']['pro_codigo_aux'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_codigo_aux"]) &&  $this->nmgp_cmp_readonly["pro_codigo_aux"] == "on") { 

 ?>
<input type="hidden" name="pro_codigo_aux" value="<?php echo $this->form_encode_input($pro_codigo_aux) . "\">" . $pro_codigo_aux . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_codigo_aux" class="sc-ui-readonly-pro_codigo_aux css_pro_codigo_aux_line" style="<?php echo $sStyleReadLab_pro_codigo_aux; ?>"><?php echo $this->form_format_readonly("pro_codigo_aux", $this->form_encode_input($this->pro_codigo_aux)); ?></span><span id="id_read_off_pro_codigo_aux" class="css_read_off_pro_codigo_aux<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_codigo_aux; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_codigo_aux_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_codigo_aux" type=text name="pro_codigo_aux" value="<?php echo $this->form_encode_input($pro_codigo_aux) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_codigo_aux_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_codigo_aux_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_descripcion']))
    {
        $this->nm_new_label['pro_descripcion'] = "" . $this->Ini->Nm_lang['lang_descripcion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_descripcion = $this->pro_descripcion;
   $sStyleHidden_pro_descripcion = '';
   if (isset($this->nmgp_cmp_hidden['pro_descripcion']) && $this->nmgp_cmp_hidden['pro_descripcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_descripcion']);
       $sStyleHidden_pro_descripcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_descripcion = 'display: none;';
   $sStyleReadInp_pro_descripcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_descripcion']) && $this->nmgp_cmp_readonly['pro_descripcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_descripcion']);
       $sStyleReadLab_pro_descripcion = '';
       $sStyleReadInp_pro_descripcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_descripcion']) && $this->nmgp_cmp_hidden['pro_descripcion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_descripcion" value="<?php echo $this->form_encode_input($pro_descripcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_descripcion_line" id="hidden_field_data_pro_descripcion" style="<?php echo $sStyleHidden_pro_descripcion; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_descripcion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_descripcion_label" style=""><span id="id_label_pro_descripcion"><?php echo $this->nm_new_label['pro_descripcion']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['php_cmp_required']['pro_descripcion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['php_cmp_required']['pro_descripcion'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_descripcion"]) &&  $this->nmgp_cmp_readonly["pro_descripcion"] == "on") { 

 ?>
<input type="hidden" name="pro_descripcion" value="<?php echo $this->form_encode_input($pro_descripcion) . "\">" . $pro_descripcion . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_descripcion" class="sc-ui-readonly-pro_descripcion css_pro_descripcion_line" style="<?php echo $sStyleReadLab_pro_descripcion; ?>"><?php echo $this->form_format_readonly("pro_descripcion", $this->form_encode_input($this->pro_descripcion)); ?></span><span id="id_read_off_pro_descripcion" class="css_read_off_pro_descripcion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_descripcion; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_descripcion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_descripcion" type=text name="pro_descripcion" value="<?php echo $this->form_encode_input($pro_descripcion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_descripcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_descripcion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_categoria_producto']))
   {
       $this->nm_new_label['pro_categoria_producto'] = "" . $this->Ini->Nm_lang['lang_categoria'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_categoria_producto = $this->pro_categoria_producto;
   $sStyleHidden_pro_categoria_producto = '';
   if (isset($this->nmgp_cmp_hidden['pro_categoria_producto']) && $this->nmgp_cmp_hidden['pro_categoria_producto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_categoria_producto']);
       $sStyleHidden_pro_categoria_producto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_categoria_producto = 'display: none;';
   $sStyleReadInp_pro_categoria_producto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_categoria_producto']) && $this->nmgp_cmp_readonly['pro_categoria_producto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_categoria_producto']);
       $sStyleReadLab_pro_categoria_producto = '';
       $sStyleReadInp_pro_categoria_producto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_categoria_producto']) && $this->nmgp_cmp_hidden['pro_categoria_producto'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_categoria_producto" value="<?php echo $this->form_encode_input($this->pro_categoria_producto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_categoria_producto_line" id="hidden_field_data_pro_categoria_producto" style="<?php echo $sStyleHidden_pro_categoria_producto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_categoria_producto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_categoria_producto_label" style=""><span id="id_label_pro_categoria_producto"><?php echo $this->nm_new_label['pro_categoria_producto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_categoria_producto"]) &&  $this->nmgp_cmp_readonly["pro_categoria_producto"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_categoria_producto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_categoria_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_categoria_producto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_categoria_producto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_categoria_producto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_categoria_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_categoria_producto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_categoria_producto'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT cat_id, cat_descripcion  FROM del_categoria_producto  WHERE cat_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY cat_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_categoria_producto'][] = $rs->fields[0];
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
   $pro_categoria_producto_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_categoria_producto_1))
          {
              foreach ($this->pro_categoria_producto_1 as $tmp_pro_categoria_producto)
              {
                  if (trim($tmp_pro_categoria_producto) === trim($cadaselect[1])) {$pro_categoria_producto_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_categoria_producto) && trim($this->pro_categoria_producto) === trim($cadaselect[1])) {$pro_categoria_producto_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pro_categoria_producto" value="<?php echo $this->form_encode_input($pro_categoria_producto) . "\">" . $pro_categoria_producto_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pro_categoria_producto();
   $x = 0 ; 
   $pro_categoria_producto_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_categoria_producto_1))
          {
              foreach ($this->pro_categoria_producto_1 as $tmp_pro_categoria_producto)
              {
                  if (trim($tmp_pro_categoria_producto) === trim($cadaselect[1])) {$pro_categoria_producto_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_categoria_producto) && trim($this->pro_categoria_producto) === trim($cadaselect[1])) { $pro_categoria_producto_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pro_categoria_producto_look))
          {
              $pro_categoria_producto_look = $this->pro_categoria_producto;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pro_categoria_producto\" class=\"css_pro_categoria_producto_line\" style=\"" .  $sStyleReadLab_pro_categoria_producto . "\">" . $this->form_format_readonly("pro_categoria_producto", $this->form_encode_input($pro_categoria_producto_look)) . "</span><span id=\"id_read_off_pro_categoria_producto\" class=\"css_read_off_pro_categoria_producto" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pro_categoria_producto . "\">";
   echo " <span id=\"idAjaxSelect_pro_categoria_producto\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_pro_categoria_producto_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pro_categoria_producto\" name=\"pro_categoria_producto\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pro_categoria_producto) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pro_categoria_producto)) 
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
   if (isset($this->Ini->sc_lig_md5["form_del_categoria_producto"]) && $this->Ini->sc_lig_md5["form_del_categoria_producto"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_del_producto_mob_lkpedt_refresh_pro_categoria_producto*scoutnmgp_url_saida*scin*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_producto_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_del_producto_mob_lkpedt_refresh_pro_categoria_producto*scoutnmgp_url_saida*scin*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "nm_submit_cap('" . $this->Ini->link_form_del_categoria_producto_edit. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_form_del_categoria_producto_edit. "', '" . $Md5_Lig . "')", "fldedt_pro_categoria_producto", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_categoria_producto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_categoria_producto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_familia_producto']))
   {
       $this->nm_new_label['pro_familia_producto'] = "" . $this->Ini->Nm_lang['lang_familias_producto'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_familia_producto = $this->pro_familia_producto;
   $sStyleHidden_pro_familia_producto = '';
   if (isset($this->nmgp_cmp_hidden['pro_familia_producto']) && $this->nmgp_cmp_hidden['pro_familia_producto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_familia_producto']);
       $sStyleHidden_pro_familia_producto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_familia_producto = 'display: none;';
   $sStyleReadInp_pro_familia_producto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_familia_producto']) && $this->nmgp_cmp_readonly['pro_familia_producto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_familia_producto']);
       $sStyleReadLab_pro_familia_producto = '';
       $sStyleReadInp_pro_familia_producto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_familia_producto']) && $this->nmgp_cmp_hidden['pro_familia_producto'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_familia_producto" value="<?php echo $this->form_encode_input($this->pro_familia_producto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_familia_producto_line" id="hidden_field_data_pro_familia_producto" style="<?php echo $sStyleHidden_pro_familia_producto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_familia_producto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_familia_producto_label" style=""><span id="id_label_pro_familia_producto"><?php echo $this->nm_new_label['pro_familia_producto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_familia_producto"]) &&  $this->nmgp_cmp_readonly["pro_familia_producto"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_familia_producto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_familia_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_familia_producto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_familia_producto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_familia_producto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_familia_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_familia_producto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_familia_producto'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $pro_compra_val_str = "''";
   if (!empty($this->pro_compra))
   {
       if (is_array($this->pro_compra))
       {
           $Tmp_array = $this->pro_compra;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_compra);
       }
       $pro_compra_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_compra_val_str)
          {
             $pro_compra_val_str .= ", ";
          }
          $pro_compra_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_venta_val_str = "''";
   if (!empty($this->pro_venta))
   {
       if (is_array($this->pro_venta))
       {
           $Tmp_array = $this->pro_venta;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_venta);
       }
       $pro_venta_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_venta_val_str)
          {
             $pro_venta_val_str .= ", ";
          }
          $pro_venta_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_stock_val_str = "''";
   if (!empty($this->pro_stock))
   {
       if (is_array($this->pro_stock))
       {
           $Tmp_array = $this->pro_stock;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_stock);
       }
       $pro_stock_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_stock_val_str)
          {
             $pro_stock_val_str .= ", ";
          }
          $pro_stock_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_aplica_subsidio_val_str = "''";
   if (!empty($this->pro_aplica_subsidio))
   {
       if (is_array($this->pro_aplica_subsidio))
       {
           $Tmp_array = $this->pro_aplica_subsidio;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_aplica_subsidio);
       }
       $pro_aplica_subsidio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_aplica_subsidio_val_str)
          {
             $pro_aplica_subsidio_val_str .= ", ";
          }
          $pro_aplica_subsidio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_familia_productos  ORDER BY fp_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_familia_producto'][] = $rs->fields[0];
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
   $pro_familia_producto_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_familia_producto_1))
          {
              foreach ($this->pro_familia_producto_1 as $tmp_pro_familia_producto)
              {
                  if (trim($tmp_pro_familia_producto) === trim($cadaselect[1])) {$pro_familia_producto_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_familia_producto) && trim($this->pro_familia_producto) === trim($cadaselect[1])) {$pro_familia_producto_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pro_familia_producto" value="<?php echo $this->form_encode_input($pro_familia_producto) . "\">" . $pro_familia_producto_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pro_familia_producto();
   $x = 0 ; 
   $pro_familia_producto_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_familia_producto_1))
          {
              foreach ($this->pro_familia_producto_1 as $tmp_pro_familia_producto)
              {
                  if (trim($tmp_pro_familia_producto) === trim($cadaselect[1])) {$pro_familia_producto_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_familia_producto) && trim($this->pro_familia_producto) === trim($cadaselect[1])) { $pro_familia_producto_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pro_familia_producto_look))
          {
              $pro_familia_producto_look = $this->pro_familia_producto;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pro_familia_producto\" class=\"css_pro_familia_producto_line\" style=\"" .  $sStyleReadLab_pro_familia_producto . "\">" . $this->form_format_readonly("pro_familia_producto", $this->form_encode_input($pro_familia_producto_look)) . "</span><span id=\"id_read_off_pro_familia_producto\" class=\"css_read_off_pro_familia_producto" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pro_familia_producto . "\">";
   echo " <span id=\"idAjaxSelect_pro_familia_producto\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_pro_familia_producto_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pro_familia_producto\" name=\"pro_familia_producto\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pro_familia_producto) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pro_familia_producto)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_familia_producto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_familia_producto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_grupo_compras']))
   {
       $this->nm_new_label['pro_grupo_compras'] = "" . $this->Ini->Nm_lang['lang_grupo_compras'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_grupo_compras = $this->pro_grupo_compras;
   $sStyleHidden_pro_grupo_compras = '';
   if (isset($this->nmgp_cmp_hidden['pro_grupo_compras']) && $this->nmgp_cmp_hidden['pro_grupo_compras'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_grupo_compras']);
       $sStyleHidden_pro_grupo_compras = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_grupo_compras = 'display: none;';
   $sStyleReadInp_pro_grupo_compras = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_grupo_compras']) && $this->nmgp_cmp_readonly['pro_grupo_compras'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_grupo_compras']);
       $sStyleReadLab_pro_grupo_compras = '';
       $sStyleReadInp_pro_grupo_compras = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_grupo_compras']) && $this->nmgp_cmp_hidden['pro_grupo_compras'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_grupo_compras" value="<?php echo $this->form_encode_input($this->pro_grupo_compras) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_grupo_compras_line" id="hidden_field_data_pro_grupo_compras" style="<?php echo $sStyleHidden_pro_grupo_compras; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_grupo_compras_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_grupo_compras_label" style=""><span id="id_label_pro_grupo_compras"><?php echo $this->nm_new_label['pro_grupo_compras']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_grupo_compras"]) &&  $this->nmgp_cmp_readonly["pro_grupo_compras"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_compras']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_compras'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_compras']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_compras'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_compras']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_compras'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_compras']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_compras'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT gpc_id, gpc_descripcion  FROM v_del_grupo_productos_compras  where gpc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY gpc_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_compras'][] = $rs->fields[0];
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
   $pro_grupo_compras_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_grupo_compras_1))
          {
              foreach ($this->pro_grupo_compras_1 as $tmp_pro_grupo_compras)
              {
                  if (trim($tmp_pro_grupo_compras) === trim($cadaselect[1])) {$pro_grupo_compras_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_grupo_compras) && trim($this->pro_grupo_compras) === trim($cadaselect[1])) {$pro_grupo_compras_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pro_grupo_compras" value="<?php echo $this->form_encode_input($pro_grupo_compras) . "\">" . $pro_grupo_compras_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pro_grupo_compras();
   $x = 0 ; 
   $pro_grupo_compras_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_grupo_compras_1))
          {
              foreach ($this->pro_grupo_compras_1 as $tmp_pro_grupo_compras)
              {
                  if (trim($tmp_pro_grupo_compras) === trim($cadaselect[1])) {$pro_grupo_compras_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_grupo_compras) && trim($this->pro_grupo_compras) === trim($cadaselect[1])) { $pro_grupo_compras_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pro_grupo_compras_look))
          {
              $pro_grupo_compras_look = $this->pro_grupo_compras;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pro_grupo_compras\" class=\"css_pro_grupo_compras_line\" style=\"" .  $sStyleReadLab_pro_grupo_compras . "\">" . $this->form_format_readonly("pro_grupo_compras", $this->form_encode_input($pro_grupo_compras_look)) . "</span><span id=\"id_read_off_pro_grupo_compras\" class=\"css_read_off_pro_grupo_compras" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pro_grupo_compras . "\">";
   echo " <span id=\"idAjaxSelect_pro_grupo_compras\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_pro_grupo_compras_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pro_grupo_compras\" name=\"pro_grupo_compras\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pro_grupo_compras) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pro_grupo_compras)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_grupo_compras_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_grupo_compras_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_grupo_ventas']))
   {
       $this->nm_new_label['pro_grupo_ventas'] = "" . $this->Ini->Nm_lang['lang_grupo_ventas'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_grupo_ventas = $this->pro_grupo_ventas;
   $sStyleHidden_pro_grupo_ventas = '';
   if (isset($this->nmgp_cmp_hidden['pro_grupo_ventas']) && $this->nmgp_cmp_hidden['pro_grupo_ventas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_grupo_ventas']);
       $sStyleHidden_pro_grupo_ventas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_grupo_ventas = 'display: none;';
   $sStyleReadInp_pro_grupo_ventas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_grupo_ventas']) && $this->nmgp_cmp_readonly['pro_grupo_ventas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_grupo_ventas']);
       $sStyleReadLab_pro_grupo_ventas = '';
       $sStyleReadInp_pro_grupo_ventas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_grupo_ventas']) && $this->nmgp_cmp_hidden['pro_grupo_ventas'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_grupo_ventas" value="<?php echo $this->form_encode_input($this->pro_grupo_ventas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_grupo_ventas_line" id="hidden_field_data_pro_grupo_ventas" style="<?php echo $sStyleHidden_pro_grupo_ventas; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_grupo_ventas_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_grupo_ventas_label" style=""><span id="id_label_pro_grupo_ventas"><?php echo $this->nm_new_label['pro_grupo_ventas']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_grupo_ventas"]) &&  $this->nmgp_cmp_readonly["pro_grupo_ventas"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_ventas']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_ventas'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_ventas']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_ventas'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_ventas']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_ventas'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_ventas']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_ventas'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT gpv_id, gpv_descripcion  FROM v_del_grupo_productos_ventas  where gpv_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY gpv_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_grupo_ventas'][] = $rs->fields[0];
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
   $pro_grupo_ventas_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_grupo_ventas_1))
          {
              foreach ($this->pro_grupo_ventas_1 as $tmp_pro_grupo_ventas)
              {
                  if (trim($tmp_pro_grupo_ventas) === trim($cadaselect[1])) {$pro_grupo_ventas_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_grupo_ventas) && trim($this->pro_grupo_ventas) === trim($cadaselect[1])) {$pro_grupo_ventas_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pro_grupo_ventas" value="<?php echo $this->form_encode_input($pro_grupo_ventas) . "\">" . $pro_grupo_ventas_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pro_grupo_ventas();
   $x = 0 ; 
   $pro_grupo_ventas_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_grupo_ventas_1))
          {
              foreach ($this->pro_grupo_ventas_1 as $tmp_pro_grupo_ventas)
              {
                  if (trim($tmp_pro_grupo_ventas) === trim($cadaselect[1])) {$pro_grupo_ventas_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_grupo_ventas) && trim($this->pro_grupo_ventas) === trim($cadaselect[1])) { $pro_grupo_ventas_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pro_grupo_ventas_look))
          {
              $pro_grupo_ventas_look = $this->pro_grupo_ventas;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pro_grupo_ventas\" class=\"css_pro_grupo_ventas_line\" style=\"" .  $sStyleReadLab_pro_grupo_ventas . "\">" . $this->form_format_readonly("pro_grupo_ventas", $this->form_encode_input($pro_grupo_ventas_look)) . "</span><span id=\"id_read_off_pro_grupo_ventas\" class=\"css_read_off_pro_grupo_ventas" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pro_grupo_ventas . "\">";
   echo " <span id=\"idAjaxSelect_pro_grupo_ventas\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_pro_grupo_ventas_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pro_grupo_ventas\" name=\"pro_grupo_ventas\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pro_grupo_ventas) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pro_grupo_ventas)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_grupo_ventas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_grupo_ventas_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_estado']))
   {
       $this->nm_new_label['pro_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_estado = $this->pro_estado;
   $sStyleHidden_pro_estado = '';
   if (isset($this->nmgp_cmp_hidden['pro_estado']) && $this->nmgp_cmp_hidden['pro_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_estado']);
       $sStyleHidden_pro_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_estado = 'display: none;';
   $sStyleReadInp_pro_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_estado']) && $this->nmgp_cmp_readonly['pro_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_estado']);
       $sStyleReadLab_pro_estado = '';
       $sStyleReadInp_pro_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_estado']) && $this->nmgp_cmp_hidden['pro_estado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_estado" value="<?php echo $this->form_encode_input($this->pro_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_estado_line" id="hidden_field_data_pro_estado" style="<?php echo $sStyleHidden_pro_estado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_estado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_estado_label" style=""><span id="id_label_pro_estado"><?php echo $this->nm_new_label['pro_estado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_estado"]) &&  $this->nmgp_cmp_readonly["pro_estado"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_estado'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $pro_compra_val_str = "''";
   if (!empty($this->pro_compra))
   {
       if (is_array($this->pro_compra))
       {
           $Tmp_array = $this->pro_compra;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_compra);
       }
       $pro_compra_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_compra_val_str)
          {
             $pro_compra_val_str .= ", ";
          }
          $pro_compra_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_venta_val_str = "''";
   if (!empty($this->pro_venta))
   {
       if (is_array($this->pro_venta))
       {
           $Tmp_array = $this->pro_venta;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_venta);
       }
       $pro_venta_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_venta_val_str)
          {
             $pro_venta_val_str .= ", ";
          }
          $pro_venta_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_stock_val_str = "''";
   if (!empty($this->pro_stock))
   {
       if (is_array($this->pro_stock))
       {
           $Tmp_array = $this->pro_stock;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_stock);
       }
       $pro_stock_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_stock_val_str)
          {
             $pro_stock_val_str .= ", ";
          }
          $pro_stock_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_aplica_subsidio_val_str = "''";
   if (!empty($this->pro_aplica_subsidio))
   {
       if (is_array($this->pro_aplica_subsidio))
       {
           $Tmp_array = $this->pro_aplica_subsidio;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_aplica_subsidio);
       }
       $pro_aplica_subsidio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_aplica_subsidio_val_str)
          {
             $pro_aplica_subsidio_val_str .= ", ";
          }
          $pro_aplica_subsidio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_fac_estado_producto  ORDER BY dec_nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_estado'][] = $rs->fields[0];
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
   $pro_estado_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_estado_1))
          {
              foreach ($this->pro_estado_1 as $tmp_pro_estado)
              {
                  if (trim($tmp_pro_estado) === trim($cadaselect[1])) {$pro_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_estado) && trim($this->pro_estado) === trim($cadaselect[1])) {$pro_estado_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pro_estado" value="<?php echo $this->form_encode_input($pro_estado) . "\">" . $pro_estado_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pro_estado();
   $x = 0 ; 
   $pro_estado_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_estado_1))
          {
              foreach ($this->pro_estado_1 as $tmp_pro_estado)
              {
                  if (trim($tmp_pro_estado) === trim($cadaselect[1])) {$pro_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_estado) && trim($this->pro_estado) === trim($cadaselect[1])) { $pro_estado_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pro_estado_look))
          {
              $pro_estado_look = $this->pro_estado;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pro_estado\" class=\"css_pro_estado_line\" style=\"" .  $sStyleReadLab_pro_estado . "\">" . $this->form_format_readonly("pro_estado", $this->form_encode_input($pro_estado_look)) . "</span><span id=\"id_read_off_pro_estado\" class=\"css_read_off_pro_estado" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pro_estado . "\">";
   echo " <span id=\"idAjaxSelect_pro_estado\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_pro_estado_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pro_estado\" name=\"pro_estado\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pro_estado) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pro_estado)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_pro_estado_dumb = ('' == $sStyleHidden_pro_estado) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_pro_estado_dumb" style="<?php echo $sStyleHidden_pro_estado_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_impuestos'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_aplica_subsidio']))
   {
       $this->nm_new_label['pro_aplica_subsidio'] = "" . $this->Ini->Nm_lang['lang_aplica_subsidio'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_aplica_subsidio = $this->pro_aplica_subsidio;
   $sStyleHidden_pro_aplica_subsidio = '';
   if (isset($this->nmgp_cmp_hidden['pro_aplica_subsidio']) && $this->nmgp_cmp_hidden['pro_aplica_subsidio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_aplica_subsidio']);
       $sStyleHidden_pro_aplica_subsidio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_aplica_subsidio = 'display: none;';
   $sStyleReadInp_pro_aplica_subsidio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_aplica_subsidio']) && $this->nmgp_cmp_readonly['pro_aplica_subsidio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_aplica_subsidio']);
       $sStyleReadLab_pro_aplica_subsidio = '';
       $sStyleReadInp_pro_aplica_subsidio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_aplica_subsidio']) && $this->nmgp_cmp_hidden['pro_aplica_subsidio'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_aplica_subsidio" value="<?php echo $this->form_encode_input($this->pro_aplica_subsidio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->pro_aplica_subsidio_1 = explode(";", trim($this->pro_aplica_subsidio));
  } 
  else
  {
      if (empty($this->pro_aplica_subsidio))
      {
          $this->pro_aplica_subsidio_1= array(); 
          $this->pro_aplica_subsidio= "N";
      } 
      else
      {
          $this->pro_aplica_subsidio_1= $this->pro_aplica_subsidio; 
          $this->pro_aplica_subsidio= ""; 
          foreach ($this->pro_aplica_subsidio_1 as $cada_pro_aplica_subsidio)
          {
             if (!empty($pro_aplica_subsidio))
             {
                 $this->pro_aplica_subsidio.= ";"; 
             } 
             $this->pro_aplica_subsidio.= $cada_pro_aplica_subsidio; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_pro_aplica_subsidio_line" id="hidden_field_data_pro_aplica_subsidio" style="<?php echo $sStyleHidden_pro_aplica_subsidio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_aplica_subsidio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_aplica_subsidio_label" style=""><span id="id_label_pro_aplica_subsidio"><?php echo $this->nm_new_label['pro_aplica_subsidio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_aplica_subsidio"]) &&  $this->nmgp_cmp_readonly["pro_aplica_subsidio"] == "on") { 

$pro_aplica_subsidio_look = "";
 if ($this->pro_aplica_subsidio == "S") { $pro_aplica_subsidio_look .= "" ;} 
 if (empty($pro_aplica_subsidio_look)) { $pro_aplica_subsidio_look = $this->pro_aplica_subsidio; }
?>
<input type="hidden" name="pro_aplica_subsidio" value="<?php echo $this->form_encode_input($pro_aplica_subsidio) . "\">" . $pro_aplica_subsidio_look . ""; ?>
<?php } else { ?>

<?php

$pro_aplica_subsidio_look = "";
 if ($this->pro_aplica_subsidio == "S") { $pro_aplica_subsidio_look .= "" ;} 
 if (empty($pro_aplica_subsidio_look)) { $pro_aplica_subsidio_look = $this->pro_aplica_subsidio; }
?>
<span id="id_read_on_pro_aplica_subsidio" class="css_pro_aplica_subsidio_line" style="<?php echo $sStyleReadLab_pro_aplica_subsidio; ?>"><?php echo $this->form_format_readonly("pro_aplica_subsidio", $this->form_encode_input($pro_aplica_subsidio_look)); ?></span><span id="id_read_off_pro_aplica_subsidio" class="css_read_off_pro_aplica_subsidio css_pro_aplica_subsidio_line" style="<?php echo $sStyleReadInp_pro_aplica_subsidio; ?>"><?php echo "<div id=\"idAjaxCheckbox_pro_aplica_subsidio\" style=\"display: inline-block\" class=\"css_pro_aplica_subsidio_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_pro_aplica_subsidio_line"><?php $tempOptionId = "id-opt-pro_aplica_subsidio" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-pro_aplica_subsidio sc-ui-checkbox-pro_aplica_subsidio sc-js-input" name="pro_aplica_subsidio[]" value="S"
 alt="{type: 'checkbox', enterTab: true}"<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_aplica_subsidio'][] = 'S'; ?>
<?php  if (in_array("S", $this->pro_aplica_subsidio_1))  { echo " checked" ;} ?> onClick="do_ajax_form_del_producto_mob_event_pro_aplica_subsidio_onclick();" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_aplica_subsidio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_aplica_subsidio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_precio_sin_subsidio']))
    {
        $this->nm_new_label['pro_precio_sin_subsidio'] = "" . $this->Ini->Nm_lang['lang_precio_sin_subsidio'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $sStyleHidden_pro_precio_sin_subsidio = '';
   if (isset($this->nmgp_cmp_hidden['pro_precio_sin_subsidio']) && $this->nmgp_cmp_hidden['pro_precio_sin_subsidio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_precio_sin_subsidio']);
       $sStyleHidden_pro_precio_sin_subsidio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_precio_sin_subsidio = 'display: none;';
   $sStyleReadInp_pro_precio_sin_subsidio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_precio_sin_subsidio']) && $this->nmgp_cmp_readonly['pro_precio_sin_subsidio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_precio_sin_subsidio']);
       $sStyleReadLab_pro_precio_sin_subsidio = '';
       $sStyleReadInp_pro_precio_sin_subsidio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_precio_sin_subsidio']) && $this->nmgp_cmp_hidden['pro_precio_sin_subsidio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_precio_sin_subsidio" value="<?php echo $this->form_encode_input($pro_precio_sin_subsidio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_precio_sin_subsidio_line" id="hidden_field_data_pro_precio_sin_subsidio" style="<?php echo $sStyleHidden_pro_precio_sin_subsidio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_precio_sin_subsidio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_precio_sin_subsidio_label" style=""><span id="id_label_pro_precio_sin_subsidio"><?php echo $this->nm_new_label['pro_precio_sin_subsidio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_precio_sin_subsidio"]) &&  $this->nmgp_cmp_readonly["pro_precio_sin_subsidio"] == "on") { 

 ?>
<input type="hidden" name="pro_precio_sin_subsidio" value="<?php echo $this->form_encode_input($pro_precio_sin_subsidio) . "\">" . $pro_precio_sin_subsidio . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_precio_sin_subsidio" class="sc-ui-readonly-pro_precio_sin_subsidio css_pro_precio_sin_subsidio_line" style="<?php echo $sStyleReadLab_pro_precio_sin_subsidio; ?>"><?php echo $this->form_format_readonly("pro_precio_sin_subsidio", $this->form_encode_input($this->pro_precio_sin_subsidio)); ?></span><span id="id_read_off_pro_precio_sin_subsidio" class="css_read_off_pro_precio_sin_subsidio<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_precio_sin_subsidio; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_precio_sin_subsidio_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_precio_sin_subsidio" type=text name="pro_precio_sin_subsidio" value="<?php echo $this->form_encode_input($pro_precio_sin_subsidio) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pro_precio_sin_subsidio']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pro_precio_sin_subsidio']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pro_precio_sin_subsidio']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_precio_sin_subsidio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_precio_sin_subsidio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_valor_subsidio']))
    {
        $this->nm_new_label['pro_valor_subsidio'] = "" . $this->Ini->Nm_lang['lang_pro_valor_subsidio'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_valor_subsidio = $this->pro_valor_subsidio;
   $sStyleHidden_pro_valor_subsidio = '';
   if (isset($this->nmgp_cmp_hidden['pro_valor_subsidio']) && $this->nmgp_cmp_hidden['pro_valor_subsidio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_valor_subsidio']);
       $sStyleHidden_pro_valor_subsidio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_valor_subsidio = 'display: none;';
   $sStyleReadInp_pro_valor_subsidio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_valor_subsidio']) && $this->nmgp_cmp_readonly['pro_valor_subsidio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_valor_subsidio']);
       $sStyleReadLab_pro_valor_subsidio = '';
       $sStyleReadInp_pro_valor_subsidio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_valor_subsidio']) && $this->nmgp_cmp_hidden['pro_valor_subsidio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_valor_subsidio" value="<?php echo $this->form_encode_input($pro_valor_subsidio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_valor_subsidio_line" id="hidden_field_data_pro_valor_subsidio" style="<?php echo $sStyleHidden_pro_valor_subsidio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_valor_subsidio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_valor_subsidio_label" style=""><span id="id_label_pro_valor_subsidio"><?php echo $this->nm_new_label['pro_valor_subsidio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_valor_subsidio"]) &&  $this->nmgp_cmp_readonly["pro_valor_subsidio"] == "on") { 

 ?>
<input type="hidden" name="pro_valor_subsidio" value="<?php echo $this->form_encode_input($pro_valor_subsidio) . "\">" . $pro_valor_subsidio . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_valor_subsidio" class="sc-ui-readonly-pro_valor_subsidio css_pro_valor_subsidio_line" style="<?php echo $sStyleReadLab_pro_valor_subsidio; ?>"><?php echo $this->form_format_readonly("pro_valor_subsidio", $this->form_encode_input($this->pro_valor_subsidio)); ?></span><span id="id_read_off_pro_valor_subsidio" class="css_read_off_pro_valor_subsidio<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_valor_subsidio; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_valor_subsidio_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_valor_subsidio" type=text name="pro_valor_subsidio" value="<?php echo $this->form_encode_input($pro_valor_subsidio) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pro_valor_subsidio']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pro_valor_subsidio']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pro_valor_subsidio']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_valor_subsidio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_valor_subsidio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_precio']))
    {
        $this->nm_new_label['pro_precio'] = "" . $this->Ini->Nm_lang['lang_precio_unitario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_precio = $this->pro_precio;
   $sStyleHidden_pro_precio = '';
   if (isset($this->nmgp_cmp_hidden['pro_precio']) && $this->nmgp_cmp_hidden['pro_precio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_precio']);
       $sStyleHidden_pro_precio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_precio = 'display: none;';
   $sStyleReadInp_pro_precio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_precio']) && $this->nmgp_cmp_readonly['pro_precio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_precio']);
       $sStyleReadLab_pro_precio = '';
       $sStyleReadInp_pro_precio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_precio']) && $this->nmgp_cmp_hidden['pro_precio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_precio" value="<?php echo $this->form_encode_input($pro_precio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_precio_line" id="hidden_field_data_pro_precio" style="<?php echo $sStyleHidden_pro_precio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_precio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_precio_label" style=""><span id="id_label_pro_precio"><?php echo $this->nm_new_label['pro_precio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_precio"]) &&  $this->nmgp_cmp_readonly["pro_precio"] == "on") { 

 ?>
<input type="hidden" name="pro_precio" value="<?php echo $this->form_encode_input($pro_precio) . "\">" . $pro_precio . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_precio" class="sc-ui-readonly-pro_precio css_pro_precio_line" style="<?php echo $sStyleReadLab_pro_precio; ?>"><?php echo $this->form_format_readonly("pro_precio", $this->form_encode_input($this->pro_precio)); ?></span><span id="id_read_off_pro_precio" class="css_read_off_pro_precio<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_precio; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_precio_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_precio" type=text name="pro_precio" value="<?php echo $this->form_encode_input($pro_precio) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=18"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pro_precio']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pro_precio']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pro_precio']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_precio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_precio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['tarifa_ice']))
           {
               $this->nmgp_cmp_readonly['tarifa_ice'] = 'on';
           }
?>


   <?php
   if (!isset($this->nm_new_label['pro_por_ice']))
   {
       $this->nm_new_label['pro_por_ice'] = "" . $this->Ini->Nm_lang['lang_tarifa_ice'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_por_ice = $this->pro_por_ice;
   $sStyleHidden_pro_por_ice = '';
   if (isset($this->nmgp_cmp_hidden['pro_por_ice']) && $this->nmgp_cmp_hidden['pro_por_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_por_ice']);
       $sStyleHidden_pro_por_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_por_ice = 'display: none;';
   $sStyleReadInp_pro_por_ice = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_por_ice']) && $this->nmgp_cmp_readonly['pro_por_ice'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_por_ice']);
       $sStyleReadLab_pro_por_ice = '';
       $sStyleReadInp_pro_por_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_por_ice']) && $this->nmgp_cmp_hidden['pro_por_ice'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_por_ice" value="<?php echo $this->form_encode_input($this->pro_por_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_por_ice_line" id="hidden_field_data_pro_por_ice" style="<?php echo $sStyleHidden_pro_por_ice; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_por_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_por_ice_label" style=""><span id="id_label_pro_por_ice"><?php echo $this->nm_new_label['pro_por_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_por_ice"]) &&  $this->nmgp_cmp_readonly["pro_por_ice"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT ice_id,ice_codigo||'-'|| ice_descripcion  FROM sri_tarifa_ice WHERE ice_estado='V'  ORDER BY ice_codigo,ice_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice'][] = $rs->fields[0];
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
   $pro_por_ice_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_por_ice_1))
          {
              foreach ($this->pro_por_ice_1 as $tmp_pro_por_ice)
              {
                  if (trim($tmp_pro_por_ice) === trim($cadaselect[1])) {$pro_por_ice_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_por_ice) && trim($this->pro_por_ice) === trim($cadaselect[1])) {$pro_por_ice_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pro_por_ice" value="<?php echo $this->form_encode_input($pro_por_ice) . "\">" . $pro_por_ice_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pro_por_ice();
   $x = 0 ; 
   $pro_por_ice_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_por_ice_1))
          {
              foreach ($this->pro_por_ice_1 as $tmp_pro_por_ice)
              {
                  if (trim($tmp_pro_por_ice) === trim($cadaselect[1])) {$pro_por_ice_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_por_ice) && trim($this->pro_por_ice) === trim($cadaselect[1])) { $pro_por_ice_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pro_por_ice_look))
          {
              $pro_por_ice_look = $this->pro_por_ice;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pro_por_ice\" class=\"css_pro_por_ice_line\" style=\"" .  $sStyleReadLab_pro_por_ice . "\">" . $this->form_format_readonly("pro_por_ice", $this->form_encode_input($pro_por_ice_look)) . "</span><span id=\"id_read_off_pro_por_ice\" class=\"css_read_off_pro_por_ice" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pro_por_ice . "\">";
   echo " <span id=\"idAjaxSelect_pro_por_ice\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_pro_por_ice_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pro_por_ice\" name=\"pro_por_ice\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_ice'][] = '0'; 
   echo "  <option value=\"0\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pro_por_ice) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pro_por_ice)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_por_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_por_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tarifa_ice']))
    {
        $this->nm_new_label['tarifa_ice'] = "" . $this->Ini->Nm_lang['lang_tarifa_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tarifa_ice = $this->tarifa_ice;
   $sStyleHidden_tarifa_ice = '';
   if (isset($this->nmgp_cmp_hidden['tarifa_ice']) && $this->nmgp_cmp_hidden['tarifa_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tarifa_ice']);
       $sStyleHidden_tarifa_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tarifa_ice = 'display: none;';
   $sStyleReadInp_tarifa_ice = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["tarifa_ice"]) &&  $this->nmgp_cmp_readonly["tarifa_ice"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tarifa_ice']);
       $sStyleReadLab_tarifa_ice = '';
       $sStyleReadInp_tarifa_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tarifa_ice']) && $this->nmgp_cmp_hidden['tarifa_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tarifa_ice" value="<?php echo $this->form_encode_input($tarifa_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tarifa_ice_line" id="hidden_field_data_tarifa_ice" style="<?php echo $sStyleHidden_tarifa_ice; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tarifa_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tarifa_ice_label" style=""><span id="id_label_tarifa_ice"><?php echo $this->nm_new_label['tarifa_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["tarifa_ice"]) &&  $this->nmgp_cmp_readonly["tarifa_ice"] == "on")) { 

 ?>
<input type="hidden" name="tarifa_ice" value="<?php echo $this->form_encode_input($tarifa_ice) . "\"><span id=\"id_ajax_label_tarifa_ice\">" . $tarifa_ice . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_tarifa_ice" class="sc-ui-readonly-tarifa_ice css_tarifa_ice_line" style="<?php echo $sStyleReadLab_tarifa_ice; ?>"><?php echo $this->form_format_readonly("tarifa_ice", $this->form_encode_input($this->tarifa_ice)); ?></span><span id="id_read_off_tarifa_ice" class="css_read_off_tarifa_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_tarifa_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_tarifa_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_tarifa_ice" type=text name="tarifa_ice" value="<?php echo $this->form_encode_input($tarifa_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['tarifa_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['tarifa_ice']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['tarifa_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tarifa_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tarifa_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_base_ice']))
    {
        $this->nm_new_label['pro_base_ice'] = "" . $this->Ini->Nm_lang['lang_base_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_base_ice = $this->pro_base_ice;
   $sStyleHidden_pro_base_ice = '';
   if (isset($this->nmgp_cmp_hidden['pro_base_ice']) && $this->nmgp_cmp_hidden['pro_base_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_base_ice']);
       $sStyleHidden_pro_base_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_base_ice = 'display: none;';
   $sStyleReadInp_pro_base_ice = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_base_ice']) && $this->nmgp_cmp_readonly['pro_base_ice'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_base_ice']);
       $sStyleReadLab_pro_base_ice = '';
       $sStyleReadInp_pro_base_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_base_ice']) && $this->nmgp_cmp_hidden['pro_base_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_base_ice" value="<?php echo $this->form_encode_input($pro_base_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_base_ice_line" id="hidden_field_data_pro_base_ice" style="<?php echo $sStyleHidden_pro_base_ice; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_base_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_base_ice_label" style=""><span id="id_label_pro_base_ice"><?php echo $this->nm_new_label['pro_base_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_base_ice"]) &&  $this->nmgp_cmp_readonly["pro_base_ice"] == "on") { 

 ?>
<input type="hidden" name="pro_base_ice" value="<?php echo $this->form_encode_input($pro_base_ice) . "\">" . $pro_base_ice . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_base_ice" class="sc-ui-readonly-pro_base_ice css_pro_base_ice_line" style="<?php echo $sStyleReadLab_pro_base_ice; ?>"><?php echo $this->form_format_readonly("pro_base_ice", $this->form_encode_input($this->pro_base_ice)); ?></span><span id="id_read_off_pro_base_ice" class="css_read_off_pro_base_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_base_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_base_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_base_ice" type=text name="pro_base_ice" value="<?php echo $this->form_encode_input($pro_base_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pro_base_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pro_base_ice']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pro_base_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_base_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_base_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['total_ice']))
    {
        $this->nm_new_label['total_ice'] = "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $total_ice = $this->total_ice;
   $sStyleHidden_total_ice = '';
   if (isset($this->nmgp_cmp_hidden['total_ice']) && $this->nmgp_cmp_hidden['total_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['total_ice']);
       $sStyleHidden_total_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_total_ice = 'display: none;';
   $sStyleReadInp_total_ice = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['total_ice']) && $this->nmgp_cmp_readonly['total_ice'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['total_ice']);
       $sStyleReadLab_total_ice = '';
       $sStyleReadInp_total_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['total_ice']) && $this->nmgp_cmp_hidden['total_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="total_ice" value="<?php echo $this->form_encode_input($total_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_total_ice_line" id="hidden_field_data_total_ice" style="<?php echo $sStyleHidden_total_ice; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_total_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_total_ice_label" style=""><span id="id_label_total_ice"><?php echo $this->nm_new_label['total_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["total_ice"]) &&  $this->nmgp_cmp_readonly["total_ice"] == "on") { 

 ?>
<input type="hidden" name="total_ice" value="<?php echo $this->form_encode_input($total_ice) . "\">" . $total_ice . ""; ?>
<?php } else { ?>
<span id="id_read_on_total_ice" class="sc-ui-readonly-total_ice css_total_ice_line" style="<?php echo $sStyleReadLab_total_ice; ?>"><?php echo $this->form_format_readonly("total_ice", $this->form_encode_input($this->total_ice)); ?></span><span id="id_read_off_total_ice" class="css_read_off_total_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_total_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_total_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_total_ice" type=text name="total_ice" value="<?php echo $this->form_encode_input($total_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['total_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['total_ice']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['total_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_total_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_total_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_por_iva']))
   {
       $this->nm_new_label['pro_por_iva'] = "" . $this->Ini->Nm_lang['lang_tarifa_iva'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_por_iva = $this->pro_por_iva;
   $sStyleHidden_pro_por_iva = '';
   if (isset($this->nmgp_cmp_hidden['pro_por_iva']) && $this->nmgp_cmp_hidden['pro_por_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_por_iva']);
       $sStyleHidden_pro_por_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_por_iva = 'display: none;';
   $sStyleReadInp_pro_por_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_por_iva']) && $this->nmgp_cmp_readonly['pro_por_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_por_iva']);
       $sStyleReadLab_pro_por_iva = '';
       $sStyleReadInp_pro_por_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_por_iva']) && $this->nmgp_cmp_hidden['pro_por_iva'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_por_iva" value="<?php echo $this->form_encode_input($this->pro_por_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_por_iva_line" id="hidden_field_data_pro_por_iva" style="<?php echo $sStyleHidden_pro_por_iva; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_por_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_por_iva_label" style=""><span id="id_label_pro_por_iva"><?php echo $this->nm_new_label['pro_por_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_por_iva"]) &&  $this->nmgp_cmp_readonly["pro_por_iva"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_iva']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_iva'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_iva']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_iva'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_iva']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_iva'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_iva']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_iva'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT iva_codigo, iva_descripcion  FROM sri_tarifa_iva  WHERE iva_estado='V' ORDER BY iva_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_iva'][] = $rs->fields[0];
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
   $pro_por_iva_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_por_iva_1))
          {
              foreach ($this->pro_por_iva_1 as $tmp_pro_por_iva)
              {
                  if (trim($tmp_pro_por_iva) === trim($cadaselect[1])) {$pro_por_iva_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_por_iva) && trim($this->pro_por_iva) === trim($cadaselect[1])) {$pro_por_iva_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pro_por_iva" value="<?php echo $this->form_encode_input($pro_por_iva) . "\">" . $pro_por_iva_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pro_por_iva();
   $x = 0 ; 
   $pro_por_iva_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_por_iva_1))
          {
              foreach ($this->pro_por_iva_1 as $tmp_pro_por_iva)
              {
                  if (trim($tmp_pro_por_iva) === trim($cadaselect[1])) {$pro_por_iva_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_por_iva) && trim($this->pro_por_iva) === trim($cadaselect[1])) { $pro_por_iva_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pro_por_iva_look))
          {
              $pro_por_iva_look = $this->pro_por_iva;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pro_por_iva\" class=\"css_pro_por_iva_line\" style=\"" .  $sStyleReadLab_pro_por_iva . "\">" . $this->form_format_readonly("pro_por_iva", $this->form_encode_input($pro_por_iva_look)) . "</span><span id=\"id_read_off_pro_por_iva\" class=\"css_read_off_pro_por_iva" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pro_por_iva . "\">";
   echo " <span id=\"idAjaxSelect_pro_por_iva\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_pro_por_iva_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pro_por_iva\" name=\"pro_por_iva\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pro_por_iva) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pro_por_iva)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_por_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_por_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tarifa_iva']))
    {
        $this->nm_new_label['tarifa_iva'] = "" . $this->Ini->Nm_lang['lang_tarifa_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tarifa_iva = $this->tarifa_iva;
   $sStyleHidden_tarifa_iva = '';
   if (isset($this->nmgp_cmp_hidden['tarifa_iva']) && $this->nmgp_cmp_hidden['tarifa_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tarifa_iva']);
       $sStyleHidden_tarifa_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tarifa_iva = 'display: none;';
   $sStyleReadInp_tarifa_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tarifa_iva']) && $this->nmgp_cmp_readonly['tarifa_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tarifa_iva']);
       $sStyleReadLab_tarifa_iva = '';
       $sStyleReadInp_tarifa_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tarifa_iva']) && $this->nmgp_cmp_hidden['tarifa_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tarifa_iva" value="<?php echo $this->form_encode_input($tarifa_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tarifa_iva_line" id="hidden_field_data_tarifa_iva" style="<?php echo $sStyleHidden_tarifa_iva; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tarifa_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tarifa_iva_label" style=""><span id="id_label_tarifa_iva"><?php echo $this->nm_new_label['tarifa_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tarifa_iva"]) &&  $this->nmgp_cmp_readonly["tarifa_iva"] == "on") { 

 ?>
<input type="hidden" name="tarifa_iva" value="<?php echo $this->form_encode_input($tarifa_iva) . "\">" . $tarifa_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_tarifa_iva" class="sc-ui-readonly-tarifa_iva css_tarifa_iva_line" style="<?php echo $sStyleReadLab_tarifa_iva; ?>"><?php echo $this->form_format_readonly("tarifa_iva", $this->form_encode_input($this->tarifa_iva)); ?></span><span id="id_read_off_tarifa_iva" class="css_read_off_tarifa_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_tarifa_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_tarifa_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_tarifa_iva" type=text name="tarifa_iva" value="<?php echo $this->form_encode_input($tarifa_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['tarifa_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['tarifa_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['tarifa_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tarifa_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tarifa_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['base_iva']))
    {
        $this->nm_new_label['base_iva'] = "" . $this->Ini->Nm_lang['lang_base_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $base_iva = $this->base_iva;
   $sStyleHidden_base_iva = '';
   if (isset($this->nmgp_cmp_hidden['base_iva']) && $this->nmgp_cmp_hidden['base_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['base_iva']);
       $sStyleHidden_base_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_base_iva = 'display: none;';
   $sStyleReadInp_base_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['base_iva']) && $this->nmgp_cmp_readonly['base_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['base_iva']);
       $sStyleReadLab_base_iva = '';
       $sStyleReadInp_base_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['base_iva']) && $this->nmgp_cmp_hidden['base_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="base_iva" value="<?php echo $this->form_encode_input($base_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_base_iva_line" id="hidden_field_data_base_iva" style="<?php echo $sStyleHidden_base_iva; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_base_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_base_iva_label" style=""><span id="id_label_base_iva"><?php echo $this->nm_new_label['base_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["base_iva"]) &&  $this->nmgp_cmp_readonly["base_iva"] == "on") { 

 ?>
<input type="hidden" name="base_iva" value="<?php echo $this->form_encode_input($base_iva) . "\">" . $base_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_base_iva" class="sc-ui-readonly-base_iva css_base_iva_line" style="<?php echo $sStyleReadLab_base_iva; ?>"><?php echo $this->form_format_readonly("base_iva", $this->form_encode_input($this->base_iva)); ?></span><span id="id_read_off_base_iva" class="css_read_off_base_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_base_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_base_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_base_iva" type=text name="base_iva" value="<?php echo $this->form_encode_input($base_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['base_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['base_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['base_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_base_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_base_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['total_iva']))
    {
        $this->nm_new_label['total_iva'] = "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $total_iva = $this->total_iva;
   $sStyleHidden_total_iva = '';
   if (isset($this->nmgp_cmp_hidden['total_iva']) && $this->nmgp_cmp_hidden['total_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['total_iva']);
       $sStyleHidden_total_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_total_iva = 'display: none;';
   $sStyleReadInp_total_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['total_iva']) && $this->nmgp_cmp_readonly['total_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['total_iva']);
       $sStyleReadLab_total_iva = '';
       $sStyleReadInp_total_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['total_iva']) && $this->nmgp_cmp_hidden['total_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="total_iva" value="<?php echo $this->form_encode_input($total_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_total_iva_line" id="hidden_field_data_total_iva" style="<?php echo $sStyleHidden_total_iva; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_total_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_total_iva_label" style=""><span id="id_label_total_iva"><?php echo $this->nm_new_label['total_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["total_iva"]) &&  $this->nmgp_cmp_readonly["total_iva"] == "on") { 

 ?>
<input type="hidden" name="total_iva" value="<?php echo $this->form_encode_input($total_iva) . "\">" . $total_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_total_iva" class="sc-ui-readonly-total_iva css_total_iva_line" style="<?php echo $sStyleReadLab_total_iva; ?>"><?php echo $this->form_format_readonly("total_iva", $this->form_encode_input($this->total_iva)); ?></span><span id="id_read_off_total_iva" class="css_read_off_total_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_total_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_total_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_total_iva" type=text name="total_iva" value="<?php echo $this->form_encode_input($total_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['total_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['total_iva']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['total_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_total_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_total_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['tarifa_irbpnr']))
           {
               $this->nmgp_cmp_readonly['tarifa_irbpnr'] = 'on';
           }
?>


   <?php
   if (!isset($this->nm_new_label['pro_por_irbpnr']))
   {
       $this->nm_new_label['pro_por_irbpnr'] = "" . $this->Ini->Nm_lang['lang_tarifa_irbpnr'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_por_irbpnr = $this->pro_por_irbpnr;
   $sStyleHidden_pro_por_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['pro_por_irbpnr']) && $this->nmgp_cmp_hidden['pro_por_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_por_irbpnr']);
       $sStyleHidden_pro_por_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_por_irbpnr = 'display: none;';
   $sStyleReadInp_pro_por_irbpnr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_por_irbpnr']) && $this->nmgp_cmp_readonly['pro_por_irbpnr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_por_irbpnr']);
       $sStyleReadLab_pro_por_irbpnr = '';
       $sStyleReadInp_pro_por_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_por_irbpnr']) && $this->nmgp_cmp_hidden['pro_por_irbpnr'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_por_irbpnr" value="<?php echo $this->form_encode_input($this->pro_por_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_por_irbpnr_line" id="hidden_field_data_pro_por_irbpnr" style="<?php echo $sStyleHidden_pro_por_irbpnr; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_por_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_por_irbpnr_label" style=""><span id="id_label_pro_por_irbpnr"><?php echo $this->nm_new_label['pro_por_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_por_irbpnr"]) &&  $this->nmgp_cmp_readonly["pro_por_irbpnr"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $pro_compra_val_str = "''";
   if (!empty($this->pro_compra))
   {
       if (is_array($this->pro_compra))
       {
           $Tmp_array = $this->pro_compra;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_compra);
       }
       $pro_compra_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_compra_val_str)
          {
             $pro_compra_val_str .= ", ";
          }
          $pro_compra_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_venta_val_str = "''";
   if (!empty($this->pro_venta))
   {
       if (is_array($this->pro_venta))
       {
           $Tmp_array = $this->pro_venta;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_venta);
       }
       $pro_venta_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_venta_val_str)
          {
             $pro_venta_val_str .= ", ";
          }
          $pro_venta_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_stock_val_str = "''";
   if (!empty($this->pro_stock))
   {
       if (is_array($this->pro_stock))
       {
           $Tmp_array = $this->pro_stock;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_stock);
       }
       $pro_stock_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_stock_val_str)
          {
             $pro_stock_val_str .= ", ";
          }
          $pro_stock_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_aplica_subsidio_val_str = "''";
   if (!empty($this->pro_aplica_subsidio))
   {
       if (is_array($this->pro_aplica_subsidio))
       {
           $Tmp_array = $this->pro_aplica_subsidio;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_aplica_subsidio);
       }
       $pro_aplica_subsidio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_aplica_subsidio_val_str)
          {
             $pro_aplica_subsidio_val_str .= ", ";
          }
          $pro_aplica_subsidio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT irbpnr_codigo, irbpnr_descripcion  FROM sri_tarifa_irbpnr  ORDER BY irbpnr_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr'][] = $rs->fields[0];
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
   $pro_por_irbpnr_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_por_irbpnr_1))
          {
              foreach ($this->pro_por_irbpnr_1 as $tmp_pro_por_irbpnr)
              {
                  if (trim($tmp_pro_por_irbpnr) === trim($cadaselect[1])) {$pro_por_irbpnr_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_por_irbpnr) && trim($this->pro_por_irbpnr) === trim($cadaselect[1])) {$pro_por_irbpnr_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pro_por_irbpnr" value="<?php echo $this->form_encode_input($pro_por_irbpnr) . "\">" . $pro_por_irbpnr_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pro_por_irbpnr();
   $x = 0 ; 
   $pro_por_irbpnr_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_por_irbpnr_1))
          {
              foreach ($this->pro_por_irbpnr_1 as $tmp_pro_por_irbpnr)
              {
                  if (trim($tmp_pro_por_irbpnr) === trim($cadaselect[1])) {$pro_por_irbpnr_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_por_irbpnr) && trim($this->pro_por_irbpnr) === trim($cadaselect[1])) { $pro_por_irbpnr_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pro_por_irbpnr_look))
          {
              $pro_por_irbpnr_look = $this->pro_por_irbpnr;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pro_por_irbpnr\" class=\"css_pro_por_irbpnr_line\" style=\"" .  $sStyleReadLab_pro_por_irbpnr . "\">" . $this->form_format_readonly("pro_por_irbpnr", $this->form_encode_input($pro_por_irbpnr_look)) . "</span><span id=\"id_read_off_pro_por_irbpnr\" class=\"css_read_off_pro_por_irbpnr" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pro_por_irbpnr . "\">";
   echo " <span id=\"idAjaxSelect_pro_por_irbpnr\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_pro_por_irbpnr_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pro_por_irbpnr\" name=\"pro_por_irbpnr\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_por_irbpnr'][] = '0'; 
   echo "  <option value=\"0\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pro_por_irbpnr) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pro_por_irbpnr)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_por_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_por_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tarifa_irbpnr']))
    {
        $this->nm_new_label['tarifa_irbpnr'] = "" . $this->Ini->Nm_lang['lang_tarifa_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tarifa_irbpnr = $this->tarifa_irbpnr;
   $sStyleHidden_tarifa_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['tarifa_irbpnr']) && $this->nmgp_cmp_hidden['tarifa_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tarifa_irbpnr']);
       $sStyleHidden_tarifa_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tarifa_irbpnr = 'display: none;';
   $sStyleReadInp_tarifa_irbpnr = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["tarifa_irbpnr"]) &&  $this->nmgp_cmp_readonly["tarifa_irbpnr"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tarifa_irbpnr']);
       $sStyleReadLab_tarifa_irbpnr = '';
       $sStyleReadInp_tarifa_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tarifa_irbpnr']) && $this->nmgp_cmp_hidden['tarifa_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tarifa_irbpnr" value="<?php echo $this->form_encode_input($tarifa_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tarifa_irbpnr_line" id="hidden_field_data_tarifa_irbpnr" style="<?php echo $sStyleHidden_tarifa_irbpnr; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tarifa_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tarifa_irbpnr_label" style=""><span id="id_label_tarifa_irbpnr"><?php echo $this->nm_new_label['tarifa_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["tarifa_irbpnr"]) &&  $this->nmgp_cmp_readonly["tarifa_irbpnr"] == "on")) { 

 ?>
<input type="hidden" name="tarifa_irbpnr" value="<?php echo $this->form_encode_input($tarifa_irbpnr) . "\"><span id=\"id_ajax_label_tarifa_irbpnr\">" . $tarifa_irbpnr . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_tarifa_irbpnr" class="sc-ui-readonly-tarifa_irbpnr css_tarifa_irbpnr_line" style="<?php echo $sStyleReadLab_tarifa_irbpnr; ?>"><?php echo $this->form_format_readonly("tarifa_irbpnr", $this->form_encode_input($this->tarifa_irbpnr)); ?></span><span id="id_read_off_tarifa_irbpnr" class="css_read_off_tarifa_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_tarifa_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_tarifa_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_tarifa_irbpnr" type=text name="tarifa_irbpnr" value="<?php echo $this->form_encode_input($tarifa_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['tarifa_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['tarifa_irbpnr']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['tarifa_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tarifa_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tarifa_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_base_irbpnr']))
    {
        $this->nm_new_label['pro_base_irbpnr'] = "" . $this->Ini->Nm_lang['lang_base_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_base_irbpnr = $this->pro_base_irbpnr;
   $sStyleHidden_pro_base_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['pro_base_irbpnr']) && $this->nmgp_cmp_hidden['pro_base_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_base_irbpnr']);
       $sStyleHidden_pro_base_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_base_irbpnr = 'display: none;';
   $sStyleReadInp_pro_base_irbpnr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_base_irbpnr']) && $this->nmgp_cmp_readonly['pro_base_irbpnr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_base_irbpnr']);
       $sStyleReadLab_pro_base_irbpnr = '';
       $sStyleReadInp_pro_base_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_base_irbpnr']) && $this->nmgp_cmp_hidden['pro_base_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_base_irbpnr" value="<?php echo $this->form_encode_input($pro_base_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_base_irbpnr_line" id="hidden_field_data_pro_base_irbpnr" style="<?php echo $sStyleHidden_pro_base_irbpnr; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_base_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_base_irbpnr_label" style=""><span id="id_label_pro_base_irbpnr"><?php echo $this->nm_new_label['pro_base_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_base_irbpnr"]) &&  $this->nmgp_cmp_readonly["pro_base_irbpnr"] == "on") { 

 ?>
<input type="hidden" name="pro_base_irbpnr" value="<?php echo $this->form_encode_input($pro_base_irbpnr) . "\">" . $pro_base_irbpnr . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_base_irbpnr" class="sc-ui-readonly-pro_base_irbpnr css_pro_base_irbpnr_line" style="<?php echo $sStyleReadLab_pro_base_irbpnr; ?>"><?php echo $this->form_format_readonly("pro_base_irbpnr", $this->form_encode_input($this->pro_base_irbpnr)); ?></span><span id="id_read_off_pro_base_irbpnr" class="css_read_off_pro_base_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_base_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_base_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_base_irbpnr" type=text name="pro_base_irbpnr" value="<?php echo $this->form_encode_input($pro_base_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 5, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pro_base_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pro_base_irbpnr']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pro_base_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_base_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_base_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['total_irbpnr']))
    {
        $this->nm_new_label['total_irbpnr'] = "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $total_irbpnr = $this->total_irbpnr;
   $sStyleHidden_total_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['total_irbpnr']) && $this->nmgp_cmp_hidden['total_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['total_irbpnr']);
       $sStyleHidden_total_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_total_irbpnr = 'display: none;';
   $sStyleReadInp_total_irbpnr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['total_irbpnr']) && $this->nmgp_cmp_readonly['total_irbpnr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['total_irbpnr']);
       $sStyleReadLab_total_irbpnr = '';
       $sStyleReadInp_total_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['total_irbpnr']) && $this->nmgp_cmp_hidden['total_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="total_irbpnr" value="<?php echo $this->form_encode_input($total_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_total_irbpnr_line" id="hidden_field_data_total_irbpnr" style="<?php echo $sStyleHidden_total_irbpnr; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_total_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_total_irbpnr_label" style=""><span id="id_label_total_irbpnr"><?php echo $this->nm_new_label['total_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["total_irbpnr"]) &&  $this->nmgp_cmp_readonly["total_irbpnr"] == "on") { 

 ?>
<input type="hidden" name="total_irbpnr" value="<?php echo $this->form_encode_input($total_irbpnr) . "\">" . $total_irbpnr . ""; ?>
<?php } else { ?>
<span id="id_read_on_total_irbpnr" class="sc-ui-readonly-total_irbpnr css_total_irbpnr_line" style="<?php echo $sStyleReadLab_total_irbpnr; ?>"><?php echo $this->form_format_readonly("total_irbpnr", $this->form_encode_input($this->total_irbpnr)); ?></span><span id="id_read_off_total_irbpnr" class="css_read_off_total_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_total_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_total_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_total_irbpnr" type=text name="total_irbpnr" value="<?php echo $this->form_encode_input($total_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['total_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['total_irbpnr']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['total_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_total_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_total_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_total_irbpnr_dumb = ('' == $sStyleHidden_total_irbpnr) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_total_irbpnr_dumb" style="<?php echo $sStyleHidden_total_irbpnr_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_total'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_iva']))
    {
        $this->nm_new_label['pro_iva'] = "" . $this->Ini->Nm_lang['lang_impuesto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_iva = $this->pro_iva;
   if (!isset($this->nmgp_cmp_hidden['pro_iva']))
   {
       $this->nmgp_cmp_hidden['pro_iva'] = 'off';
   }
   $sStyleHidden_pro_iva = '';
   if (isset($this->nmgp_cmp_hidden['pro_iva']) && $this->nmgp_cmp_hidden['pro_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_iva']);
       $sStyleHidden_pro_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_iva = 'display: none;';
   $sStyleReadInp_pro_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_iva']) && $this->nmgp_cmp_readonly['pro_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_iva']);
       $sStyleReadLab_pro_iva = '';
       $sStyleReadInp_pro_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_iva']) && $this->nmgp_cmp_hidden['pro_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_iva" value="<?php echo $this->form_encode_input($pro_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_iva_line" id="hidden_field_data_pro_iva" style="<?php echo $sStyleHidden_pro_iva; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_iva_label" style=""><span id="id_label_pro_iva"><?php echo $this->nm_new_label['pro_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_iva"]) &&  $this->nmgp_cmp_readonly["pro_iva"] == "on") { 

 ?>
<input type="hidden" name="pro_iva" value="<?php echo $this->form_encode_input($pro_iva) . "\">" . $pro_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_iva" class="sc-ui-readonly-pro_iva css_pro_iva_line" style="<?php echo $sStyleReadLab_pro_iva; ?>"><?php echo $this->form_format_readonly("pro_iva", $this->form_encode_input($this->pro_iva)); ?></span><span id="id_read_off_pro_iva" class="css_read_off_pro_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_iva" type=text name="pro_iva" value="<?php echo $this->form_encode_input($pro_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 <SPAN id="id_lookup_pro_iva"><?php echo $look_rpc_pro_iva; ?></SPAN></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['precio_con_impuesto']))
    {
        $this->nm_new_label['precio_con_impuesto'] = "" . $this->Ini->Nm_lang['lang_total'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $precio_con_impuesto = $this->precio_con_impuesto;
   $sStyleHidden_precio_con_impuesto = '';
   if (isset($this->nmgp_cmp_hidden['precio_con_impuesto']) && $this->nmgp_cmp_hidden['precio_con_impuesto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['precio_con_impuesto']);
       $sStyleHidden_precio_con_impuesto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_precio_con_impuesto = 'display: none;';
   $sStyleReadInp_precio_con_impuesto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['precio_con_impuesto']) && $this->nmgp_cmp_readonly['precio_con_impuesto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['precio_con_impuesto']);
       $sStyleReadLab_precio_con_impuesto = '';
       $sStyleReadInp_precio_con_impuesto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['precio_con_impuesto']) && $this->nmgp_cmp_hidden['precio_con_impuesto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="precio_con_impuesto" value="<?php echo $this->form_encode_input($precio_con_impuesto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_precio_con_impuesto_line" id="hidden_field_data_precio_con_impuesto" style="<?php echo $sStyleHidden_precio_con_impuesto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_precio_con_impuesto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_precio_con_impuesto_label" style=""><span id="id_label_precio_con_impuesto"><?php echo $this->nm_new_label['precio_con_impuesto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["precio_con_impuesto"]) &&  $this->nmgp_cmp_readonly["precio_con_impuesto"] == "on") { 

 ?>
<input type="hidden" name="precio_con_impuesto" value="<?php echo $this->form_encode_input($precio_con_impuesto) . "\">" . $precio_con_impuesto . ""; ?>
<?php } else { ?>
<span id="id_read_on_precio_con_impuesto" class="sc-ui-readonly-precio_con_impuesto css_precio_con_impuesto_line" style="<?php echo $sStyleReadLab_precio_con_impuesto; ?>"><?php echo $this->form_format_readonly("precio_con_impuesto", $this->form_encode_input($this->precio_con_impuesto)); ?></span><span id="id_read_off_precio_con_impuesto" class="css_read_off_precio_con_impuesto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_precio_con_impuesto; ?>">
 <input class="sc-js-input scFormObjectOdd css_precio_con_impuesto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_precio_con_impuesto" type=text name="precio_con_impuesto" value="<?php echo $this->form_encode_input($precio_con_impuesto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['precio_con_impuesto']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['precio_con_impuesto']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['precio_con_impuesto']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_precio_con_impuesto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_precio_con_impuesto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_ice']))
    {
        $this->nm_new_label['pro_ice'] = "" . $this->Ini->Nm_lang['lang_impuesto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_ice = $this->pro_ice;
   if (!isset($this->nmgp_cmp_hidden['pro_ice']))
   {
       $this->nmgp_cmp_hidden['pro_ice'] = 'off';
   }
   $sStyleHidden_pro_ice = '';
   if (isset($this->nmgp_cmp_hidden['pro_ice']) && $this->nmgp_cmp_hidden['pro_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_ice']);
       $sStyleHidden_pro_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_ice = 'display: none;';
   $sStyleReadInp_pro_ice = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_ice']) && $this->nmgp_cmp_readonly['pro_ice'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_ice']);
       $sStyleReadLab_pro_ice = '';
       $sStyleReadInp_pro_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_ice']) && $this->nmgp_cmp_hidden['pro_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_ice" value="<?php echo $this->form_encode_input($pro_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_ice_line" id="hidden_field_data_pro_ice" style="<?php echo $sStyleHidden_pro_ice; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_ice_label" style=""><span id="id_label_pro_ice"><?php echo $this->nm_new_label['pro_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_ice"]) &&  $this->nmgp_cmp_readonly["pro_ice"] == "on") { 

 ?>
<input type="hidden" name="pro_ice" value="<?php echo $this->form_encode_input($pro_ice) . "\">" . $pro_ice . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_ice" class="sc-ui-readonly-pro_ice css_pro_ice_line" style="<?php echo $sStyleReadLab_pro_ice; ?>"><?php echo $this->form_format_readonly("pro_ice", $this->form_encode_input($this->pro_ice)); ?></span><span id="id_read_off_pro_ice" class="css_read_off_pro_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_ice" type=text name="pro_ice" value="<?php echo $this->form_encode_input($pro_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 <SPAN id="id_lookup_pro_ice"><?php echo $look_rpc_pro_ice; ?></SPAN></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_irbpnr']))
    {
        $this->nm_new_label['pro_irbpnr'] = "" . $this->Ini->Nm_lang['lang_impuesto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_irbpnr = $this->pro_irbpnr;
   if (!isset($this->nmgp_cmp_hidden['pro_irbpnr']))
   {
       $this->nmgp_cmp_hidden['pro_irbpnr'] = 'off';
   }
   $sStyleHidden_pro_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['pro_irbpnr']) && $this->nmgp_cmp_hidden['pro_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_irbpnr']);
       $sStyleHidden_pro_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_irbpnr = 'display: none;';
   $sStyleReadInp_pro_irbpnr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_irbpnr']) && $this->nmgp_cmp_readonly['pro_irbpnr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_irbpnr']);
       $sStyleReadLab_pro_irbpnr = '';
       $sStyleReadInp_pro_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_irbpnr']) && $this->nmgp_cmp_hidden['pro_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_irbpnr" value="<?php echo $this->form_encode_input($pro_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_irbpnr_line" id="hidden_field_data_pro_irbpnr" style="<?php echo $sStyleHidden_pro_irbpnr; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_irbpnr_label" style=""><span id="id_label_pro_irbpnr"><?php echo $this->nm_new_label['pro_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_irbpnr"]) &&  $this->nmgp_cmp_readonly["pro_irbpnr"] == "on") { 

 ?>
<input type="hidden" name="pro_irbpnr" value="<?php echo $this->form_encode_input($pro_irbpnr) . "\">" . $pro_irbpnr . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_irbpnr" class="sc-ui-readonly-pro_irbpnr css_pro_irbpnr_line" style="<?php echo $sStyleReadLab_pro_irbpnr; ?>"><?php echo $this->form_format_readonly("pro_irbpnr", $this->form_encode_input($this->pro_irbpnr)); ?></span><span id="id_read_off_pro_irbpnr" class="css_read_off_pro_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_irbpnr" type=text name="pro_irbpnr" value="<?php echo $this->form_encode_input($pro_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 <SPAN id="id_lookup_pro_irbpnr"><?php echo $look_rpc_pro_irbpnr; ?></SPAN></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_pro_irbpnr_dumb = ('' == $sStyleHidden_pro_irbpnr) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_pro_irbpnr_dumb" style="<?php echo $sStyleHidden_pro_irbpnr_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_inventario'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_compra']))
   {
       $this->nm_new_label['pro_compra'] = "" . $this->Ini->Nm_lang['lang_producto_compra'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_compra = $this->pro_compra;
   $sStyleHidden_pro_compra = '';
   if (isset($this->nmgp_cmp_hidden['pro_compra']) && $this->nmgp_cmp_hidden['pro_compra'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_compra']);
       $sStyleHidden_pro_compra = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_compra = 'display: none;';
   $sStyleReadInp_pro_compra = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_compra']) && $this->nmgp_cmp_readonly['pro_compra'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_compra']);
       $sStyleReadLab_pro_compra = '';
       $sStyleReadInp_pro_compra = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_compra']) && $this->nmgp_cmp_hidden['pro_compra'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_compra" value="<?php echo $this->form_encode_input($this->pro_compra) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->pro_compra_1 = explode(";", trim($this->pro_compra));
  } 
  else
  {
      if (empty($this->pro_compra))
      {
          $this->pro_compra_1= array(); 
          $this->pro_compra= "N";
      } 
      else
      {
          $this->pro_compra_1= $this->pro_compra; 
          $this->pro_compra= ""; 
          foreach ($this->pro_compra_1 as $cada_pro_compra)
          {
             if (!empty($pro_compra))
             {
                 $this->pro_compra.= ";"; 
             } 
             $this->pro_compra.= $cada_pro_compra; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_pro_compra_line" id="hidden_field_data_pro_compra" style="<?php echo $sStyleHidden_pro_compra; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_compra_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_compra_label" style=""><span id="id_label_pro_compra"><?php echo $this->nm_new_label['pro_compra']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_compra"]) &&  $this->nmgp_cmp_readonly["pro_compra"] == "on") { 

$pro_compra_look = "";
 if ($this->pro_compra == "S") { $pro_compra_look .= "" ;} 
 if (empty($pro_compra_look)) { $pro_compra_look = $this->pro_compra; }
?>
<input type="hidden" name="pro_compra" value="<?php echo $this->form_encode_input($pro_compra) . "\">" . $pro_compra_look . ""; ?>
<?php } else { ?>

<?php

$pro_compra_look = "";
 if ($this->pro_compra == "S") { $pro_compra_look .= "" ;} 
 if (empty($pro_compra_look)) { $pro_compra_look = $this->pro_compra; }
?>
<span id="id_read_on_pro_compra" class="css_pro_compra_line" style="<?php echo $sStyleReadLab_pro_compra; ?>"><?php echo $this->form_format_readonly("pro_compra", $this->form_encode_input($pro_compra_look)); ?></span><span id="id_read_off_pro_compra" class="css_read_off_pro_compra css_pro_compra_line" style="<?php echo $sStyleReadInp_pro_compra; ?>"><?php echo "<div id=\"idAjaxCheckbox_pro_compra\" style=\"display: inline-block\" class=\"css_pro_compra_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_pro_compra_line"><?php $tempOptionId = "id-opt-pro_compra" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-pro_compra sc-ui-checkbox-pro_compra sc-js-input" name="pro_compra[]" value="S"
 alt="{type: 'checkbox', enterTab: true}"<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_compra'][] = 'S'; ?>
<?php  if (in_array("S", $this->pro_compra_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_compra_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_compra_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_venta']))
   {
       $this->nm_new_label['pro_venta'] = "" . $this->Ini->Nm_lang['lang_producto_venta'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_venta = $this->pro_venta;
   $sStyleHidden_pro_venta = '';
   if (isset($this->nmgp_cmp_hidden['pro_venta']) && $this->nmgp_cmp_hidden['pro_venta'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_venta']);
       $sStyleHidden_pro_venta = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_venta = 'display: none;';
   $sStyleReadInp_pro_venta = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_venta']) && $this->nmgp_cmp_readonly['pro_venta'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_venta']);
       $sStyleReadLab_pro_venta = '';
       $sStyleReadInp_pro_venta = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_venta']) && $this->nmgp_cmp_hidden['pro_venta'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_venta" value="<?php echo $this->form_encode_input($this->pro_venta) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->pro_venta_1 = explode(";", trim($this->pro_venta));
  } 
  else
  {
      if (empty($this->pro_venta))
      {
          $this->pro_venta_1= array(); 
          $this->pro_venta= "N";
      } 
      else
      {
          $this->pro_venta_1= $this->pro_venta; 
          $this->pro_venta= ""; 
          foreach ($this->pro_venta_1 as $cada_pro_venta)
          {
             if (!empty($pro_venta))
             {
                 $this->pro_venta.= ";"; 
             } 
             $this->pro_venta.= $cada_pro_venta; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_pro_venta_line" id="hidden_field_data_pro_venta" style="<?php echo $sStyleHidden_pro_venta; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_venta_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_venta_label" style=""><span id="id_label_pro_venta"><?php echo $this->nm_new_label['pro_venta']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_venta"]) &&  $this->nmgp_cmp_readonly["pro_venta"] == "on") { 

$pro_venta_look = "";
 if ($this->pro_venta == "S") { $pro_venta_look .= "" ;} 
 if (empty($pro_venta_look)) { $pro_venta_look = $this->pro_venta; }
?>
<input type="hidden" name="pro_venta" value="<?php echo $this->form_encode_input($pro_venta) . "\">" . $pro_venta_look . ""; ?>
<?php } else { ?>

<?php

$pro_venta_look = "";
 if ($this->pro_venta == "S") { $pro_venta_look .= "" ;} 
 if (empty($pro_venta_look)) { $pro_venta_look = $this->pro_venta; }
?>
<span id="id_read_on_pro_venta" class="css_pro_venta_line" style="<?php echo $sStyleReadLab_pro_venta; ?>"><?php echo $this->form_format_readonly("pro_venta", $this->form_encode_input($pro_venta_look)); ?></span><span id="id_read_off_pro_venta" class="css_read_off_pro_venta css_pro_venta_line" style="<?php echo $sStyleReadInp_pro_venta; ?>"><?php echo "<div id=\"idAjaxCheckbox_pro_venta\" style=\"display: inline-block\" class=\"css_pro_venta_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_pro_venta_line"><?php $tempOptionId = "id-opt-pro_venta" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-pro_venta sc-ui-checkbox-pro_venta sc-js-input" name="pro_venta[]" value="S"
 alt="{type: 'checkbox', enterTab: true}"<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_venta'][] = 'S'; ?>
<?php  if (in_array("S", $this->pro_venta_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_venta_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_venta_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_stock']))
   {
       $this->nm_new_label['pro_stock'] = "" . $this->Ini->Nm_lang['lang_mueve_inventario'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_stock = $this->pro_stock;
   $sStyleHidden_pro_stock = '';
   if (isset($this->nmgp_cmp_hidden['pro_stock']) && $this->nmgp_cmp_hidden['pro_stock'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_stock']);
       $sStyleHidden_pro_stock = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_stock = 'display: none;';
   $sStyleReadInp_pro_stock = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_stock']) && $this->nmgp_cmp_readonly['pro_stock'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_stock']);
       $sStyleReadLab_pro_stock = '';
       $sStyleReadInp_pro_stock = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_stock']) && $this->nmgp_cmp_hidden['pro_stock'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_stock" value="<?php echo $this->form_encode_input($this->pro_stock) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->pro_stock_1 = explode(";", trim($this->pro_stock));
  } 
  else
  {
      if (empty($this->pro_stock))
      {
          $this->pro_stock_1= array(); 
          $this->pro_stock= "N";
      } 
      else
      {
          $this->pro_stock_1= $this->pro_stock; 
          $this->pro_stock= ""; 
          foreach ($this->pro_stock_1 as $cada_pro_stock)
          {
             if (!empty($pro_stock))
             {
                 $this->pro_stock.= ";"; 
             } 
             $this->pro_stock.= $cada_pro_stock; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_pro_stock_line" id="hidden_field_data_pro_stock" style="<?php echo $sStyleHidden_pro_stock; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_stock_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_stock_label" style=""><span id="id_label_pro_stock"><?php echo $this->nm_new_label['pro_stock']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_stock"]) &&  $this->nmgp_cmp_readonly["pro_stock"] == "on") { 

$pro_stock_look = "";
 if ($this->pro_stock == "S") { $pro_stock_look .= "" ;} 
 if (empty($pro_stock_look)) { $pro_stock_look = $this->pro_stock; }
?>
<input type="hidden" name="pro_stock" value="<?php echo $this->form_encode_input($pro_stock) . "\">" . $pro_stock_look . ""; ?>
<?php } else { ?>

<?php

$pro_stock_look = "";
 if ($this->pro_stock == "S") { $pro_stock_look .= "" ;} 
 if (empty($pro_stock_look)) { $pro_stock_look = $this->pro_stock; }
?>
<span id="id_read_on_pro_stock" class="css_pro_stock_line" style="<?php echo $sStyleReadLab_pro_stock; ?>"><?php echo $this->form_format_readonly("pro_stock", $this->form_encode_input($pro_stock_look)); ?></span><span id="id_read_off_pro_stock" class="css_read_off_pro_stock css_pro_stock_line" style="<?php echo $sStyleReadInp_pro_stock; ?>"><?php echo "<div id=\"idAjaxCheckbox_pro_stock\" style=\"display: inline-block\" class=\"css_pro_stock_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_pro_stock_line"><?php $tempOptionId = "id-opt-pro_stock" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-pro_stock sc-ui-checkbox-pro_stock sc-js-input" name="pro_stock[]" value="S"
 alt="{type: 'checkbox', enterTab: true}"<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_stock'][] = 'S'; ?>
<?php  if (in_array("S", $this->pro_stock_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_stock_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_stock_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pro_unidad']))
   {
       $this->nm_new_label['pro_unidad'] = "" . $this->Ini->Nm_lang['lang_unidad'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_unidad = $this->pro_unidad;
   $sStyleHidden_pro_unidad = '';
   if (isset($this->nmgp_cmp_hidden['pro_unidad']) && $this->nmgp_cmp_hidden['pro_unidad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_unidad']);
       $sStyleHidden_pro_unidad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_unidad = 'display: none;';
   $sStyleReadInp_pro_unidad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_unidad']) && $this->nmgp_cmp_readonly['pro_unidad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_unidad']);
       $sStyleReadLab_pro_unidad = '';
       $sStyleReadInp_pro_unidad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_unidad']) && $this->nmgp_cmp_hidden['pro_unidad'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pro_unidad" value="<?php echo $this->form_encode_input($this->pro_unidad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_unidad_line" id="hidden_field_data_pro_unidad" style="<?php echo $sStyleHidden_pro_unidad; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_unidad_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_unidad_label" style=""><span id="id_label_pro_unidad"><?php echo $this->nm_new_label['pro_unidad']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_unidad"]) &&  $this->nmgp_cmp_readonly["pro_unidad"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT uni_id, uni_nombre  FROM inv_unidad  WHERE uni_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY uni_nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad'][] = $rs->fields[0];
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
   $pro_unidad_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_unidad_1))
          {
              foreach ($this->pro_unidad_1 as $tmp_pro_unidad)
              {
                  if (trim($tmp_pro_unidad) === trim($cadaselect[1])) {$pro_unidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_unidad) && trim($this->pro_unidad) === trim($cadaselect[1])) {$pro_unidad_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="pro_unidad" value="<?php echo $this->form_encode_input($pro_unidad) . "\">" . $pro_unidad_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_pro_unidad();
   $x = 0 ; 
   $pro_unidad_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->pro_unidad_1))
          {
              foreach ($this->pro_unidad_1 as $tmp_pro_unidad)
              {
                  if (trim($tmp_pro_unidad) === trim($cadaselect[1])) {$pro_unidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->pro_unidad) && trim($this->pro_unidad) === trim($cadaselect[1])) { $pro_unidad_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($pro_unidad_look))
          {
              $pro_unidad_look = $this->pro_unidad;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_pro_unidad\" class=\"css_pro_unidad_line\" style=\"" .  $sStyleReadLab_pro_unidad . "\">" . $this->form_format_readonly("pro_unidad", $this->form_encode_input($pro_unidad_look)) . "</span><span id=\"id_read_off_pro_unidad\" class=\"css_read_off_pro_unidad" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_pro_unidad . "\">";
   echo " <span id=\"idAjaxSelect_pro_unidad\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_pro_unidad_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_pro_unidad\" name=\"pro_unidad\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['Lookup_pro_unidad'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->pro_unidad) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->pro_unidad)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_unidad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_unidad_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_cantidad_inventario']))
    {
        $this->nm_new_label['pro_cantidad_inventario'] = "" . $this->Ini->Nm_lang['lang_cantidad_inicial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $sStyleHidden_pro_cantidad_inventario = '';
   if (isset($this->nmgp_cmp_hidden['pro_cantidad_inventario']) && $this->nmgp_cmp_hidden['pro_cantidad_inventario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_cantidad_inventario']);
       $sStyleHidden_pro_cantidad_inventario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_cantidad_inventario = 'display: none;';
   $sStyleReadInp_pro_cantidad_inventario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_cantidad_inventario']) && $this->nmgp_cmp_readonly['pro_cantidad_inventario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_cantidad_inventario']);
       $sStyleReadLab_pro_cantidad_inventario = '';
       $sStyleReadInp_pro_cantidad_inventario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_cantidad_inventario']) && $this->nmgp_cmp_hidden['pro_cantidad_inventario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_cantidad_inventario" value="<?php echo $this->form_encode_input($pro_cantidad_inventario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_cantidad_inventario_line" id="hidden_field_data_pro_cantidad_inventario" style="<?php echo $sStyleHidden_pro_cantidad_inventario; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_cantidad_inventario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_cantidad_inventario_label" style=""><span id="id_label_pro_cantidad_inventario"><?php echo $this->nm_new_label['pro_cantidad_inventario']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_cantidad_inventario"]) &&  $this->nmgp_cmp_readonly["pro_cantidad_inventario"] == "on") { 

 ?>
<input type="hidden" name="pro_cantidad_inventario" value="<?php echo $this->form_encode_input($pro_cantidad_inventario) . "\">" . $pro_cantidad_inventario . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_cantidad_inventario" class="sc-ui-readonly-pro_cantidad_inventario css_pro_cantidad_inventario_line" style="<?php echo $sStyleReadLab_pro_cantidad_inventario; ?>"><?php echo $this->form_format_readonly("pro_cantidad_inventario", $this->form_encode_input($this->pro_cantidad_inventario)); ?></span><span id="id_read_off_pro_cantidad_inventario" class="css_read_off_pro_cantidad_inventario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_cantidad_inventario; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_cantidad_inventario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_cantidad_inventario" type=text name="pro_cantidad_inventario" value="<?php echo $this->form_encode_input($pro_cantidad_inventario) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 5, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pro_cantidad_inventario']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pro_cantidad_inventario']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pro_cantidad_inventario']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_cantidad_inventario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_cantidad_inventario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_costo_promedio']))
    {
        $this->nm_new_label['pro_costo_promedio'] = "" . $this->Ini->Nm_lang['lang_costo_promedio'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_costo_promedio = $this->pro_costo_promedio;
   $sStyleHidden_pro_costo_promedio = '';
   if (isset($this->nmgp_cmp_hidden['pro_costo_promedio']) && $this->nmgp_cmp_hidden['pro_costo_promedio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_costo_promedio']);
       $sStyleHidden_pro_costo_promedio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_costo_promedio = 'display: none;';
   $sStyleReadInp_pro_costo_promedio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_costo_promedio']) && $this->nmgp_cmp_readonly['pro_costo_promedio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_costo_promedio']);
       $sStyleReadLab_pro_costo_promedio = '';
       $sStyleReadInp_pro_costo_promedio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_costo_promedio']) && $this->nmgp_cmp_hidden['pro_costo_promedio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_costo_promedio" value="<?php echo $this->form_encode_input($pro_costo_promedio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_costo_promedio_line" id="hidden_field_data_pro_costo_promedio" style="<?php echo $sStyleHidden_pro_costo_promedio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_costo_promedio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_costo_promedio_label" style=""><span id="id_label_pro_costo_promedio"><?php echo $this->nm_new_label['pro_costo_promedio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pro_costo_promedio"]) &&  $this->nmgp_cmp_readonly["pro_costo_promedio"] == "on") { 

 ?>
<input type="hidden" name="pro_costo_promedio" value="<?php echo $this->form_encode_input($pro_costo_promedio) . "\">" . $pro_costo_promedio . ""; ?>
<?php } else { ?>
<span id="id_read_on_pro_costo_promedio" class="sc-ui-readonly-pro_costo_promedio css_pro_costo_promedio_line" style="<?php echo $sStyleReadLab_pro_costo_promedio; ?>"><?php echo $this->form_format_readonly("pro_costo_promedio", $this->form_encode_input($this->pro_costo_promedio)); ?></span><span id="id_read_off_pro_costo_promedio" class="css_read_off_pro_costo_promedio<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pro_costo_promedio; ?>">
 <input class="sc-js-input scFormObjectOdd css_pro_costo_promedio_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pro_costo_promedio" type=text name="pro_costo_promedio" value="<?php echo $this->form_encode_input($pro_costo_promedio) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 4, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['pro_costo_promedio']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['pro_costo_promedio']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['pro_costo_promedio']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_costo_promedio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_costo_promedio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pro_total_inventario']))
    {
        $this->nm_new_label['pro_total_inventario'] = "" . $this->Ini->Nm_lang['lang_total_inventario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pro_total_inventario = $this->pro_total_inventario;
   $sStyleHidden_pro_total_inventario = '';
   if (isset($this->nmgp_cmp_hidden['pro_total_inventario']) && $this->nmgp_cmp_hidden['pro_total_inventario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pro_total_inventario']);
       $sStyleHidden_pro_total_inventario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pro_total_inventario = 'display: none;';
   $sStyleReadInp_pro_total_inventario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pro_total_inventario']) && $this->nmgp_cmp_readonly['pro_total_inventario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pro_total_inventario']);
       $sStyleReadLab_pro_total_inventario = '';
       $sStyleReadInp_pro_total_inventario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pro_total_inventario']) && $this->nmgp_cmp_hidden['pro_total_inventario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pro_total_inventario" value="<?php echo $this->form_encode_input($pro_total_inventario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pro_total_inventario_line" id="hidden_field_data_pro_total_inventario" style="<?php echo $sStyleHidden_pro_total_inventario; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pro_total_inventario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pro_total_inventario_label" style=""><span id="id_label_pro_total_inventario"><?php echo $this->nm_new_label['pro_total_inventario']; ?></span></span><br><input type="hidden" name="pro_total_inventario" value="<?php echo $this->form_encode_input($pro_total_inventario); ?>"><span id="id_ajax_label_pro_total_inventario"><?php echo nl2br($pro_total_inventario); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pro_total_inventario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pro_total_inventario_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R")
{
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['birpara']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['birpara']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['birpara']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['birpara']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['birpara'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "birpara", "scBtnFn_sys_GridPermiteSeq('b')", "scBtnFn_sys_GridPermiteSeq('b')", "brec_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-29';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label'][''];
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
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-30';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['first'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8592;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-31';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['back'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8592;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-32';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['forward'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8594;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-33';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['last'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8594;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-34';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['btn_label'][''];
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
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_producto_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_producto_mob");
 parent.scAjaxDetailHeight("form_del_producto_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_producto_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_producto_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['sc_modal'])
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
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-1").length && $("#sys_separator.sc-unique-btn-1").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-1").hasClass("disabled")) {
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
		if ($("#sys_separator.sc-unique-btn-12").length && $("#sys_separator.sc-unique-btn-12").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-12").hasClass("disabled")) {
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
		if ($("#sys_separator.sc-unique-btn-18").length && $("#sys_separator.sc-unique-btn-18").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-23").length && $("#sys_separator.sc-unique-btn-23").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-23").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-29").length && $("#sys_separator.sc-unique-btn-29").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-29").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-34").length && $("#sys_separator.sc-unique-btn-34").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-34").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-2").length && $("#sc_b_new_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-3").length && $("#sc_b_ins_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-19").length && $("#sc_b_new_t.sc-unique-btn-19").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-19").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-20").length && $("#sc_b_ins_t.sc-unique-btn-20").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-20").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-21").length && $("#sc_b_sai_t.sc-unique-btn-21").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-21").hasClass("disabled")) {
		        return;
		    }
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
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
		if ($("#sc_b_upd_t.sc-unique-btn-22").length && $("#sc_b_upd_t.sc-unique-btn-22").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-22").hasClass("disabled")) {
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
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-9").hasClass("disabled")) {
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
		if ($("#sc_b_sai_t.sc-unique-btn-24").length && $("#sc_b_sai_t.sc-unique-btn-24").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-24").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-25").length && $("#sc_b_sai_t.sc-unique-btn-25").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-25").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-26").length && $("#sc_b_sai_t.sc-unique-btn-26").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-26").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-27").length && $("#sc_b_sai_t.sc-unique-btn-27").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-27").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-28").length && $("#sc_b_sai_t.sc-unique-btn-28").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-28").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq(btnPos) {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
		    if ($("#brec_b").hasClass("disabled")) {
		        return;
		    }
			if (document.F1['nmgp_rec_' + btnPos].value != '') {nm_navpage(document.F1['nmgp_rec_' + btnPos].value, 'P');} document.F1['nmgp_rec_' + btnPos].value = '';
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-13").length && $("#sc_b_ini_b.sc-unique-btn-13").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ini_b.sc-unique-btn-30").length && $("#sc_b_ini_b.sc-unique-btn-30").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-30").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-14").length && $("#sc_b_ret_b.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ret_b.sc-unique-btn-31").length && $("#sc_b_ret_b.sc-unique-btn-31").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-31").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-15").length && $("#sc_b_avc_b.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_avc_b.sc-unique-btn-32").length && $("#sc_b_avc_b.sc-unique-btn-32").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-32").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-16").length && $("#sc_b_fim_b.sc-unique-btn-16").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_fim_b.sc-unique-btn-33").length && $("#sc_b_fim_b.sc-unique-btn-33").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-33").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto_mob']['buttonStatus'] = $this->nmgp_botoes;
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
