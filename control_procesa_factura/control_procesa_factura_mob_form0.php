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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . ""); } ?></TITLE>
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
.css_read_off_fr_valor button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_fr_valor2 button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_fr_valor3 button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>control_procesa_factura/control_procesa_factura_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("control_procesa_factura_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['last'] : 'off'); ?>";
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

include_once('control_procesa_factura_mob_jquery.php');

?>

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

<?php
if (!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName)
{
?>
  scFocusField('fr_cedula');

<?php
}
?>
  $("#hidden_bloco_1,#hidden_bloco_3,#hidden_bloco_4,#hidden_bloco_5").each(function() {
   $(this.rows[0]).bind("click", {block: this}, toggleBlock)
                  .mouseover(function() { $(this).css("cursor", "pointer"); })
                  .mouseout(function() { $(this).css("cursor", ""); });
  });

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
    "hidden_bloco_1": false,
    "hidden_bloco_3": false,
    "hidden_bloco_4": false,
    "hidden_bloco_5": false
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-contr" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['control_procesa_factura']['error_buffer']) && '' != $_SESSION['scriptcase']['control_procesa_factura']['error_buffer'])
{
    echo $_SESSION['scriptcase']['control_procesa_factura']['error_buffer'];
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
 include_once("control_procesa_factura_mob_js0.php");
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
               action="control_procesa_factura_mob.php" 
               target="_self">
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nmgp_url_saida); ?>">
<input type="hidden" name="bok" value="OK">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['control_procesa_factura_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['control_procesa_factura_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['fr_tipo_identificacion']))
   {
       $this->nmgp_cmp_hidden['fr_tipo_identificacion'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_tipo_libretin']))
   {
       $this->nmgp_cmp_hidden['fac_tipo_libretin'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_libretin']))
   {
       $this->nmgp_cmp_hidden['fac_libretin'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['fac_estado_sri']))
   {
       $this->nmgp_cmp_hidden['fac_estado_sri'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_total']))
    {
        $this->nm_new_label['fr_total'] = "" . $this->Ini->Nm_lang['lang_total'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_total = $this->fr_total;
   $sStyleHidden_fr_total = '';
   if (isset($this->nmgp_cmp_hidden['fr_total']) && $this->nmgp_cmp_hidden['fr_total'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_total']);
       $sStyleHidden_fr_total = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_total = 'display: none;';
   $sStyleReadInp_fr_total = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_total']) && $this->nmgp_cmp_readonly['fr_total'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_total']);
       $sStyleReadLab_fr_total = '';
       $sStyleReadInp_fr_total = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_total']) && $this->nmgp_cmp_hidden['fr_total'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_total" value="<?php echo $this->form_encode_input($fr_total) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_total_line" id="hidden_field_data_fr_total" style="<?php echo $sStyleHidden_fr_total; ?>"> <span class="scFormLabelOddFormat css_fr_total_label" style=""><span id="id_label_fr_total"><?php echo $this->nm_new_label['fr_total']; ?></span></span><br><input type="hidden" name="fr_total" value="<?php echo $this->form_encode_input($fr_total); ?>"><span id="id_ajax_label_fr_total"><?php echo nl2br($fr_total); ?></span>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fr_total_dumb = ('' == $sStyleHidden_fr_total) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fr_total_dumb" style="<?php echo $sStyleHidden_fr_total_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf1\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_exp . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_cliente'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_cedula']))
    {
        $this->nm_new_label['fr_cedula'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_cedula = $this->fr_cedula;
   $sStyleHidden_fr_cedula = '';
   if (isset($this->nmgp_cmp_hidden['fr_cedula']) && $this->nmgp_cmp_hidden['fr_cedula'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_cedula']);
       $sStyleHidden_fr_cedula = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_cedula = 'display: none;';
   $sStyleReadInp_fr_cedula = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_cedula']) && $this->nmgp_cmp_readonly['fr_cedula'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_cedula']);
       $sStyleReadLab_fr_cedula = '';
       $sStyleReadInp_fr_cedula = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_cedula']) && $this->nmgp_cmp_hidden['fr_cedula'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_cedula" value="<?php echo $this->form_encode_input($fr_cedula) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_cedula_line" id="hidden_field_data_fr_cedula" style="<?php echo $sStyleHidden_fr_cedula; ?>"> <span class="scFormLabelOddFormat css_fr_cedula_label" style=""><span id="id_label_fr_cedula"><?php echo $this->nm_new_label['fr_cedula']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_cedula']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_cedula'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_cedula"]) &&  $this->nmgp_cmp_readonly["fr_cedula"] == "on") { 

 ?>
<input type="hidden" name="fr_cedula" value="<?php echo $this->form_encode_input($fr_cedula) . "\">" . $fr_cedula . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_cedula" class="sc-ui-readonly-fr_cedula css_fr_cedula_line" style="<?php echo $sStyleReadLab_fr_cedula; ?>"><?php echo $this->form_format_readonly("fr_cedula", $this->form_encode_input($this->fr_cedula)); ?></span><span id="id_read_off_fr_cedula" class="css_read_off_fr_cedula<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_cedula; ?>">
 <input class="sc-js-input scFormObjectOdd css_fr_cedula_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fr_cedula" type=text name="fr_cedula" value="<?php echo $this->form_encode_input($fr_cedula) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_tipo_libretin']))
    {
        $this->nm_new_label['fac_tipo_libretin'] = "fac_tipo_libretin";
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

    <TD class="scFormDataOdd css_fac_tipo_libretin_line" id="hidden_field_data_fac_tipo_libretin" style="<?php echo $sStyleHidden_fac_tipo_libretin; ?>"> <span class="scFormLabelOddFormat css_fac_tipo_libretin_label" style=""><span id="id_label_fac_tipo_libretin"><?php echo $this->nm_new_label['fac_tipo_libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_tipo_libretin"]) &&  $this->nmgp_cmp_readonly["fac_tipo_libretin"] == "on") { 

 ?>
<input type="hidden" name="fac_tipo_libretin" value="<?php echo $this->form_encode_input($fac_tipo_libretin) . "\">" . $fac_tipo_libretin . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_tipo_libretin" class="sc-ui-readonly-fac_tipo_libretin css_fac_tipo_libretin_line" style="<?php echo $sStyleReadLab_fac_tipo_libretin; ?>"><?php echo $this->form_format_readonly("fac_tipo_libretin", $this->form_encode_input($this->fac_tipo_libretin)); ?></span><span id="id_read_off_fac_tipo_libretin" class="css_read_off_fac_tipo_libretin<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_tipo_libretin; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_tipo_libretin_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_tipo_libretin" type=text name="fac_tipo_libretin" value="<?php echo $this->form_encode_input($fac_tipo_libretin) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_nombre']))
    {
        $this->nm_new_label['fr_nombre'] = "" . $this->Ini->Nm_lang['lang_cliente'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_nombre = $this->fr_nombre;
   $sStyleHidden_fr_nombre = '';
   if (isset($this->nmgp_cmp_hidden['fr_nombre']) && $this->nmgp_cmp_hidden['fr_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_nombre']);
       $sStyleHidden_fr_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_nombre = 'display: none;';
   $sStyleReadInp_fr_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_nombre']) && $this->nmgp_cmp_readonly['fr_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_nombre']);
       $sStyleReadLab_fr_nombre = '';
       $sStyleReadInp_fr_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_nombre']) && $this->nmgp_cmp_hidden['fr_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_nombre" value="<?php echo $this->form_encode_input($fr_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_nombre_line" id="hidden_field_data_fr_nombre" style="<?php echo $sStyleHidden_fr_nombre; ?>"> <span class="scFormLabelOddFormat css_fr_nombre_label" style=""><span id="id_label_fr_nombre"><?php echo $this->nm_new_label['fr_nombre']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_nombre']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_nombre'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_nombre"]) &&  $this->nmgp_cmp_readonly["fr_nombre"] == "on") { 

 ?>
<input type="hidden" name="fr_nombre" value="<?php echo $this->form_encode_input($fr_nombre) . "\">" . $fr_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_nombre" class="sc-ui-readonly-fr_nombre css_fr_nombre_line" style="<?php echo $sStyleReadLab_fr_nombre; ?>"><?php echo $this->form_format_readonly("fr_nombre", $this->form_encode_input($this->fr_nombre)); ?></span><span id="id_read_off_fr_nombre" class="css_read_off_fr_nombre<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_fr_nombre_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fr_nombre" type=text name="fr_nombre" value="<?php echo $this->form_encode_input($fr_nombre) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_libretin']))
    {
        $this->nm_new_label['fac_libretin'] = "fac_libretin";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fac_libretin = $this->fac_libretin;
   if (!isset($this->nmgp_cmp_hidden['fac_libretin']))
   {
       $this->nmgp_cmp_hidden['fac_libretin'] = 'off';
   }
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
<?php if (isset($this->nmgp_cmp_hidden['fac_libretin']) && $this->nmgp_cmp_hidden['fac_libretin'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fac_libretin" value="<?php echo $this->form_encode_input($fac_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fac_libretin_line" id="hidden_field_data_fac_libretin" style="<?php echo $sStyleHidden_fac_libretin; ?>"> <span class="scFormLabelOddFormat css_fac_libretin_label" style=""><span id="id_label_fac_libretin"><?php echo $this->nm_new_label['fac_libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_libretin"]) &&  $this->nmgp_cmp_readonly["fac_libretin"] == "on") { 

 ?>
<input type="hidden" name="fac_libretin" value="<?php echo $this->form_encode_input($fac_libretin) . "\">" . $fac_libretin . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_libretin" class="sc-ui-readonly-fac_libretin css_fac_libretin_line" style="<?php echo $sStyleReadLab_fac_libretin; ?>"><?php echo $this->form_format_readonly("fac_libretin", $this->form_encode_input($this->fac_libretin)); ?></span><span id="id_read_off_fac_libretin" class="css_read_off_fac_libretin<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_libretin; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_libretin_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_libretin" type=text name="fac_libretin" value="<?php echo $this->form_encode_input($fac_libretin) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fr_provincia']))
   {
       $this->nm_new_label['fr_provincia'] = "" . $this->Ini->Nm_lang['lang_provincia'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_provincia = $this->fr_provincia;
   $sStyleHidden_fr_provincia = '';
   if (isset($this->nmgp_cmp_hidden['fr_provincia']) && $this->nmgp_cmp_hidden['fr_provincia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_provincia']);
       $sStyleHidden_fr_provincia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_provincia = 'display: none;';
   $sStyleReadInp_fr_provincia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_provincia']) && $this->nmgp_cmp_readonly['fr_provincia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_provincia']);
       $sStyleReadLab_fr_provincia = '';
       $sStyleReadInp_fr_provincia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_provincia']) && $this->nmgp_cmp_hidden['fr_provincia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fr_provincia" value="<?php echo $this->form_encode_input($this->fr_provincia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_provincia_line" id="hidden_field_data_fr_provincia" style="<?php echo $sStyleHidden_fr_provincia; ?>"> <span class="scFormLabelOddFormat css_fr_provincia_label" style=""><span id="id_label_fr_provincia"><?php echo $this->nm_new_label['fr_provincia']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_provincia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_provincia'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_provincia"]) &&  $this->nmgp_cmp_readonly["fr_provincia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT pro_nombre, pro_nombre  FROM sis_provincia  where pro_pais=66 ORDER BY pro_nombre";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_provincia'][] = $rs->fields[0];
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
   $fr_provincia_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_provincia_1))
          {
              foreach ($this->fr_provincia_1 as $tmp_fr_provincia)
              {
                  if (trim($tmp_fr_provincia) === trim($cadaselect[1])) {$fr_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_provincia) && trim($this->fr_provincia) === trim($cadaselect[1])) {$fr_provincia_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fr_provincia" value="<?php echo $this->form_encode_input($fr_provincia) . "\">" . $fr_provincia_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fr_provincia();
   $x = 0 ; 
   $fr_provincia_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_provincia_1))
          {
              foreach ($this->fr_provincia_1 as $tmp_fr_provincia)
              {
                  if (trim($tmp_fr_provincia) === trim($cadaselect[1])) {$fr_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_provincia) && trim($this->fr_provincia) === trim($cadaselect[1])) { $fr_provincia_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fr_provincia_look))
          {
              $fr_provincia_look = $this->fr_provincia;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fr_provincia\" class=\"css_fr_provincia_line\" style=\"" .  $sStyleReadLab_fr_provincia . "\">" . $this->form_format_readonly("fr_provincia", $this->form_encode_input($fr_provincia_look)) . "</span><span id=\"id_read_off_fr_provincia\" class=\"css_read_off_fr_provincia" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fr_provincia . "\">";
   echo " <span id=\"idAjaxSelect_fr_provincia\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fr_provincia_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fr_provincia\" name=\"fr_provincia\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fr_provincia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fr_provincia)) 
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
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fr_canton']))
   {
       $this->nm_new_label['fr_canton'] = "" . $this->Ini->Nm_lang['lang_canton'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_canton = $this->fr_canton;
   $sStyleHidden_fr_canton = '';
   if (isset($this->nmgp_cmp_hidden['fr_canton']) && $this->nmgp_cmp_hidden['fr_canton'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_canton']);
       $sStyleHidden_fr_canton = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_canton = 'display: none;';
   $sStyleReadInp_fr_canton = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_canton']) && $this->nmgp_cmp_readonly['fr_canton'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_canton']);
       $sStyleReadLab_fr_canton = '';
       $sStyleReadInp_fr_canton = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_canton']) && $this->nmgp_cmp_hidden['fr_canton'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fr_canton" value="<?php echo $this->form_encode_input($this->fr_canton) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_canton_line" id="hidden_field_data_fr_canton" style="<?php echo $sStyleHidden_fr_canton; ?>"> <span class="scFormLabelOddFormat css_fr_canton_label" style=""><span id="id_label_fr_canton"><?php echo $this->nm_new_label['fr_canton']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_canton']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_canton'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_canton"]) &&  $this->nmgp_cmp_readonly["fr_canton"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT can_nombre , can_nombre  FROM sis_canton  where can_provincia in (SELECT pro_id FROM sis_provincia where pro_nombre='$this->fr_provincia'  ) ORDER BY can_nombre";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_canton'][] = $rs->fields[0];
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
   $fr_canton_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_canton_1))
          {
              foreach ($this->fr_canton_1 as $tmp_fr_canton)
              {
                  if (trim($tmp_fr_canton) === trim($cadaselect[1])) {$fr_canton_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_canton) && trim($this->fr_canton) === trim($cadaselect[1])) {$fr_canton_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fr_canton" value="<?php echo $this->form_encode_input($fr_canton) . "\">" . $fr_canton_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fr_canton();
   $x = 0 ; 
   $fr_canton_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_canton_1))
          {
              foreach ($this->fr_canton_1 as $tmp_fr_canton)
              {
                  if (trim($tmp_fr_canton) === trim($cadaselect[1])) {$fr_canton_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_canton) && trim($this->fr_canton) === trim($cadaselect[1])) { $fr_canton_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fr_canton_look))
          {
              $fr_canton_look = $this->fr_canton;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fr_canton\" class=\"css_fr_canton_line\" style=\"" .  $sStyleReadLab_fr_canton . "\">" . $this->form_format_readonly("fr_canton", $this->form_encode_input($fr_canton_look)) . "</span><span id=\"id_read_off_fr_canton\" class=\"css_read_off_fr_canton" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fr_canton . "\">";
   echo " <span id=\"idAjaxSelect_fr_canton\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fr_canton_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fr_canton\" name=\"fr_canton\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fr_canton) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fr_canton)) 
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
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_direccion']))
    {
        $this->nm_new_label['fr_direccion'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_direccion = $this->fr_direccion;
   $sStyleHidden_fr_direccion = '';
   if (isset($this->nmgp_cmp_hidden['fr_direccion']) && $this->nmgp_cmp_hidden['fr_direccion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_direccion']);
       $sStyleHidden_fr_direccion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_direccion = 'display: none;';
   $sStyleReadInp_fr_direccion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_direccion']) && $this->nmgp_cmp_readonly['fr_direccion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_direccion']);
       $sStyleReadLab_fr_direccion = '';
       $sStyleReadInp_fr_direccion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_direccion']) && $this->nmgp_cmp_hidden['fr_direccion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_direccion" value="<?php echo $this->form_encode_input($fr_direccion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_direccion_line" id="hidden_field_data_fr_direccion" style="<?php echo $sStyleHidden_fr_direccion; ?>"> <span class="scFormLabelOddFormat css_fr_direccion_label" style=""><span id="id_label_fr_direccion"><?php echo $this->nm_new_label['fr_direccion']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_direccion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_direccion'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_direccion"]) &&  $this->nmgp_cmp_readonly["fr_direccion"] == "on") { 

 ?>
<input type="hidden" name="fr_direccion" value="<?php echo $this->form_encode_input($fr_direccion) . "\">" . $fr_direccion . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_direccion" class="sc-ui-readonly-fr_direccion css_fr_direccion_line" style="<?php echo $sStyleReadLab_fr_direccion; ?>"><?php echo $this->form_format_readonly("fr_direccion", $this->form_encode_input($this->fr_direccion)); ?></span><span id="id_read_off_fr_direccion" class="css_read_off_fr_direccion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_direccion; ?>">
 <input class="sc-js-input scFormObjectOdd css_fr_direccion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fr_direccion" type=text name="fr_direccion" value="<?php echo $this->form_encode_input($fr_direccion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_tipo_identificacion']))
    {
        $this->nm_new_label['fr_tipo_identificacion'] = "" . $this->Ini->Nm_lang['lang_lot_tipoid'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_tipo_identificacion = $this->fr_tipo_identificacion;
   if (!isset($this->nmgp_cmp_hidden['fr_tipo_identificacion']))
   {
       $this->nmgp_cmp_hidden['fr_tipo_identificacion'] = 'off';
   }
   $sStyleHidden_fr_tipo_identificacion = '';
   if (isset($this->nmgp_cmp_hidden['fr_tipo_identificacion']) && $this->nmgp_cmp_hidden['fr_tipo_identificacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_tipo_identificacion']);
       $sStyleHidden_fr_tipo_identificacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_tipo_identificacion = 'display: none;';
   $sStyleReadInp_fr_tipo_identificacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_tipo_identificacion']) && $this->nmgp_cmp_readonly['fr_tipo_identificacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_tipo_identificacion']);
       $sStyleReadLab_fr_tipo_identificacion = '';
       $sStyleReadInp_fr_tipo_identificacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_tipo_identificacion']) && $this->nmgp_cmp_hidden['fr_tipo_identificacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_tipo_identificacion" value="<?php echo $this->form_encode_input($fr_tipo_identificacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_tipo_identificacion_line" id="hidden_field_data_fr_tipo_identificacion" style="<?php echo $sStyleHidden_fr_tipo_identificacion; ?>"> <span class="scFormLabelOddFormat css_fr_tipo_identificacion_label" style=""><span id="id_label_fr_tipo_identificacion"><?php echo $this->nm_new_label['fr_tipo_identificacion']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_tipo_identificacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_tipo_identificacion'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_tipo_identificacion"]) &&  $this->nmgp_cmp_readonly["fr_tipo_identificacion"] == "on") { 

 ?>
<input type="hidden" name="fr_tipo_identificacion" value="<?php echo $this->form_encode_input($fr_tipo_identificacion) . "\">" . $fr_tipo_identificacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_tipo_identificacion" class="sc-ui-readonly-fr_tipo_identificacion css_fr_tipo_identificacion_line" style="<?php echo $sStyleReadLab_fr_tipo_identificacion; ?>"><?php echo $this->form_format_readonly("fr_tipo_identificacion", $this->form_encode_input($this->fr_tipo_identificacion)); ?></span><span id="id_read_off_fr_tipo_identificacion" class="css_read_off_fr_tipo_identificacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_tipo_identificacion; ?>">
 <input class="sc-js-input scFormObjectOdd css_fr_tipo_identificacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fr_tipo_identificacion" type=text name="fr_tipo_identificacion" value="<?php echo $this->form_encode_input($fr_tipo_identificacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_correo']))
    {
        $this->nm_new_label['fr_correo'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_correo = $this->fr_correo;
   $sStyleHidden_fr_correo = '';
   if (isset($this->nmgp_cmp_hidden['fr_correo']) && $this->nmgp_cmp_hidden['fr_correo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_correo']);
       $sStyleHidden_fr_correo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_correo = 'display: none;';
   $sStyleReadInp_fr_correo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_correo']) && $this->nmgp_cmp_readonly['fr_correo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_correo']);
       $sStyleReadLab_fr_correo = '';
       $sStyleReadInp_fr_correo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_correo']) && $this->nmgp_cmp_hidden['fr_correo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_correo" value="<?php echo $this->form_encode_input($fr_correo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_correo_line" id="hidden_field_data_fr_correo" style="<?php echo $sStyleHidden_fr_correo; ?>"> <span class="scFormLabelOddFormat css_fr_correo_label" style=""><span id="id_label_fr_correo"><?php echo $this->nm_new_label['fr_correo']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_correo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['php_cmp_required']['fr_correo'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_correo"]) &&  $this->nmgp_cmp_readonly["fr_correo"] == "on") { 

 ?>
<input type="hidden" name="fr_correo" value="<?php echo $this->form_encode_input($fr_correo) . "\">" . $fr_correo . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_correo" class="sc-ui-readonly-fr_correo css_fr_correo_line" style="<?php echo $sStyleReadLab_fr_correo; ?>"><?php echo $this->form_format_readonly("fr_correo", $this->form_encode_input($this->fr_correo)); ?></span><span id="id_read_off_fr_correo" class="css_read_off_fr_correo<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_correo; ?>">
 <input class="sc-js-input scFormObjectOdd css_fr_correo_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fr_correo" type=text name="fr_correo" value="<?php echo $this->form_encode_input($fr_correo) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fac_estado_sri']))
    {
        $this->nm_new_label['fac_estado_sri'] = "fac_estado_sri";
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

    <TD class="scFormDataOdd css_fac_estado_sri_line" id="hidden_field_data_fac_estado_sri" style="<?php echo $sStyleHidden_fac_estado_sri; ?>"> <span class="scFormLabelOddFormat css_fac_estado_sri_label" style=""><span id="id_label_fac_estado_sri"><?php echo $this->nm_new_label['fac_estado_sri']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fac_estado_sri"]) &&  $this->nmgp_cmp_readonly["fac_estado_sri"] == "on") { 

 ?>
<input type="hidden" name="fac_estado_sri" value="<?php echo $this->form_encode_input($fac_estado_sri) . "\">" . $fac_estado_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_fac_estado_sri" class="sc-ui-readonly-fac_estado_sri css_fac_estado_sri_line" style="<?php echo $sStyleReadLab_fac_estado_sri; ?>"><?php echo $this->form_format_readonly("fac_estado_sri", $this->form_encode_input($this->fac_estado_sri)); ?></span><span id="id_read_off_fac_estado_sri" class="css_read_off_fac_estado_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fac_estado_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_fac_estado_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fac_estado_sri" type=text name="fac_estado_sri" value="<?php echo $this->form_encode_input($fac_estado_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_telefono']))
    {
        $this->nm_new_label['fr_telefono'] = "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_telefono = $this->fr_telefono;
   $sStyleHidden_fr_telefono = '';
   if (isset($this->nmgp_cmp_hidden['fr_telefono']) && $this->nmgp_cmp_hidden['fr_telefono'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_telefono']);
       $sStyleHidden_fr_telefono = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_telefono = 'display: none;';
   $sStyleReadInp_fr_telefono = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_telefono']) && $this->nmgp_cmp_readonly['fr_telefono'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_telefono']);
       $sStyleReadLab_fr_telefono = '';
       $sStyleReadInp_fr_telefono = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_telefono']) && $this->nmgp_cmp_hidden['fr_telefono'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_telefono" value="<?php echo $this->form_encode_input($fr_telefono) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_telefono_line" id="hidden_field_data_fr_telefono" style="<?php echo $sStyleHidden_fr_telefono; ?>"> <span class="scFormLabelOddFormat css_fr_telefono_label" style=""><span id="id_label_fr_telefono"><?php echo $this->nm_new_label['fr_telefono']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_telefono"]) &&  $this->nmgp_cmp_readonly["fr_telefono"] == "on") { 

 ?>
<input type="hidden" name="fr_telefono" value="<?php echo $this->form_encode_input($fr_telefono) . "\">" . $fr_telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_telefono" class="sc-ui-readonly-fr_telefono css_fr_telefono_line" style="<?php echo $sStyleReadLab_fr_telefono; ?>"><?php echo $this->form_format_readonly("fr_telefono", $this->form_encode_input($this->fr_telefono)); ?></span><span id="id_read_off_fr_telefono" class="css_read_off_fr_telefono<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd css_fr_telefono_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fr_telefono" type=text name="fr_telefono" value="<?php echo $this->form_encode_input($fr_telefono) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fr_telefono_dumb = ('' == $sStyleHidden_fr_telefono) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fr_telefono_dumb" style="<?php echo $sStyleHidden_fr_telefono_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_forma_pago'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fr_forma_pago']))
   {
       $this->nm_new_label['fr_forma_pago'] = "" . $this->Ini->Nm_lang['lang_forma_pago'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_forma_pago = $this->fr_forma_pago;
   $sStyleHidden_fr_forma_pago = '';
   if (isset($this->nmgp_cmp_hidden['fr_forma_pago']) && $this->nmgp_cmp_hidden['fr_forma_pago'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_forma_pago']);
       $sStyleHidden_fr_forma_pago = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_forma_pago = 'display: none;';
   $sStyleReadInp_fr_forma_pago = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_forma_pago']) && $this->nmgp_cmp_readonly['fr_forma_pago'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_forma_pago']);
       $sStyleReadLab_fr_forma_pago = '';
       $sStyleReadInp_fr_forma_pago = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_forma_pago']) && $this->nmgp_cmp_hidden['fr_forma_pago'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fr_forma_pago" value="<?php echo $this->form_encode_input($this->fr_forma_pago) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_forma_pago_line" id="hidden_field_data_fr_forma_pago" style="<?php echo $sStyleHidden_fr_forma_pago; ?>"> 
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_forma_pago"]) &&  $this->nmgp_cmp_readonly["fr_forma_pago"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  where fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago'][] = $rs->fields[0];
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
   $fr_forma_pago_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_forma_pago_1))
          {
              foreach ($this->fr_forma_pago_1 as $tmp_fr_forma_pago)
              {
                  if (trim($tmp_fr_forma_pago) === trim($cadaselect[1])) {$fr_forma_pago_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_forma_pago) && trim($this->fr_forma_pago) === trim($cadaselect[1])) {$fr_forma_pago_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fr_forma_pago" value="<?php echo $this->form_encode_input($fr_forma_pago) . "\">" . $fr_forma_pago_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fr_forma_pago();
   $x = 0 ; 
   $fr_forma_pago_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_forma_pago_1))
          {
              foreach ($this->fr_forma_pago_1 as $tmp_fr_forma_pago)
              {
                  if (trim($tmp_fr_forma_pago) === trim($cadaselect[1])) {$fr_forma_pago_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_forma_pago) && trim($this->fr_forma_pago) === trim($cadaselect[1])) { $fr_forma_pago_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fr_forma_pago_look))
          {
              $fr_forma_pago_look = $this->fr_forma_pago;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fr_forma_pago\" class=\"css_fr_forma_pago_line\" style=\"" .  $sStyleReadLab_fr_forma_pago . "\">" . $this->form_format_readonly("fr_forma_pago", $this->form_encode_input($fr_forma_pago_look)) . "</span><span id=\"id_read_off_fr_forma_pago\" class=\"css_read_off_fr_forma_pago" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fr_forma_pago . "\">";
   echo " <span id=\"idAjaxSelect_fr_forma_pago\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fr_forma_pago_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fr_forma_pago\" name=\"fr_forma_pago\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fr_forma_pago) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fr_forma_pago)) 
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
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_valor']))
    {
        $this->nm_new_label['fr_valor'] = "" . $this->Ini->Nm_lang['lang_valor'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_valor = $this->fr_valor;
   $sStyleHidden_fr_valor = '';
   if (isset($this->nmgp_cmp_hidden['fr_valor']) && $this->nmgp_cmp_hidden['fr_valor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_valor']);
       $sStyleHidden_fr_valor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_valor = 'display: none;';
   $sStyleReadInp_fr_valor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_valor']) && $this->nmgp_cmp_readonly['fr_valor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_valor']);
       $sStyleReadLab_fr_valor = '';
       $sStyleReadInp_fr_valor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_valor']) && $this->nmgp_cmp_hidden['fr_valor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_valor" value="<?php echo $this->form_encode_input($fr_valor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_valor_line" id="hidden_field_data_fr_valor" style="<?php echo $sStyleHidden_fr_valor; ?>"> 
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_valor"]) &&  $this->nmgp_cmp_readonly["fr_valor"] == "on") { 

 ?>
<input type="hidden" name="fr_valor" value="<?php echo $this->form_encode_input($fr_valor) . "\">" . $fr_valor . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_valor" class="sc-ui-readonly-fr_valor css_fr_valor_line" style="<?php echo $sStyleReadLab_fr_valor; ?>"><?php echo $this->form_format_readonly("fr_valor", $this->form_encode_input($this->fr_valor)); ?></span><span id="id_read_off_fr_valor" class="css_read_off_fr_valor<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_valor; ?>">
 <input class="sc-js-input scFormObjectOdd css_fr_valor_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fr_valor" type=text name="fr_valor" value="<?php echo $this->form_encode_input($fr_valor) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fr_valor']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fr_valor']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fr_valor']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fr_valor_dumb = ('' == $sStyleHidden_fr_valor) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fr_valor_dumb" style="<?php echo $sStyleHidden_fr_valor_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf3\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_exp . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_forma_pago'] ?> 2<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fr_forma_pago2']))
   {
       $this->nm_new_label['fr_forma_pago2'] = "" . $this->Ini->Nm_lang['lang_forma_pago'] . " 2";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_forma_pago2 = $this->fr_forma_pago2;
   $sStyleHidden_fr_forma_pago2 = '';
   if (isset($this->nmgp_cmp_hidden['fr_forma_pago2']) && $this->nmgp_cmp_hidden['fr_forma_pago2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_forma_pago2']);
       $sStyleHidden_fr_forma_pago2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_forma_pago2 = 'display: none;';
   $sStyleReadInp_fr_forma_pago2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_forma_pago2']) && $this->nmgp_cmp_readonly['fr_forma_pago2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_forma_pago2']);
       $sStyleReadLab_fr_forma_pago2 = '';
       $sStyleReadInp_fr_forma_pago2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_forma_pago2']) && $this->nmgp_cmp_hidden['fr_forma_pago2'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fr_forma_pago2" value="<?php echo $this->form_encode_input($this->fr_forma_pago2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_forma_pago2_line" id="hidden_field_data_fr_forma_pago2" style="<?php echo $sStyleHidden_fr_forma_pago2; ?>"> 
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_forma_pago2"]) &&  $this->nmgp_cmp_readonly["fr_forma_pago2"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  where fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago2'][] = $rs->fields[0];
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
   $fr_forma_pago2_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_forma_pago2_1))
          {
              foreach ($this->fr_forma_pago2_1 as $tmp_fr_forma_pago2)
              {
                  if (trim($tmp_fr_forma_pago2) === trim($cadaselect[1])) {$fr_forma_pago2_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_forma_pago2) && trim($this->fr_forma_pago2) === trim($cadaselect[1])) {$fr_forma_pago2_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fr_forma_pago2" value="<?php echo $this->form_encode_input($fr_forma_pago2) . "\">" . $fr_forma_pago2_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fr_forma_pago2();
   $x = 0 ; 
   $fr_forma_pago2_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_forma_pago2_1))
          {
              foreach ($this->fr_forma_pago2_1 as $tmp_fr_forma_pago2)
              {
                  if (trim($tmp_fr_forma_pago2) === trim($cadaselect[1])) {$fr_forma_pago2_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_forma_pago2) && trim($this->fr_forma_pago2) === trim($cadaselect[1])) { $fr_forma_pago2_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fr_forma_pago2_look))
          {
              $fr_forma_pago2_look = $this->fr_forma_pago2;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fr_forma_pago2\" class=\"css_fr_forma_pago2_line\" style=\"" .  $sStyleReadLab_fr_forma_pago2 . "\">" . $this->form_format_readonly("fr_forma_pago2", $this->form_encode_input($fr_forma_pago2_look)) . "</span><span id=\"id_read_off_fr_forma_pago2\" class=\"css_read_off_fr_forma_pago2" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fr_forma_pago2 . "\">";
   echo " <span id=\"idAjaxSelect_fr_forma_pago2\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fr_forma_pago2_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fr_forma_pago2\" name=\"fr_forma_pago2\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fr_forma_pago2) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fr_forma_pago2)) 
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
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_valor2']))
    {
        $this->nm_new_label['fr_valor2'] = "" . $this->Ini->Nm_lang['lang_valor'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_valor2 = $this->fr_valor2;
   $sStyleHidden_fr_valor2 = '';
   if (isset($this->nmgp_cmp_hidden['fr_valor2']) && $this->nmgp_cmp_hidden['fr_valor2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_valor2']);
       $sStyleHidden_fr_valor2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_valor2 = 'display: none;';
   $sStyleReadInp_fr_valor2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_valor2']) && $this->nmgp_cmp_readonly['fr_valor2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_valor2']);
       $sStyleReadLab_fr_valor2 = '';
       $sStyleReadInp_fr_valor2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_valor2']) && $this->nmgp_cmp_hidden['fr_valor2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_valor2" value="<?php echo $this->form_encode_input($fr_valor2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_valor2_line" id="hidden_field_data_fr_valor2" style="<?php echo $sStyleHidden_fr_valor2; ?>"> 
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_valor2"]) &&  $this->nmgp_cmp_readonly["fr_valor2"] == "on") { 

 ?>
<input type="hidden" name="fr_valor2" value="<?php echo $this->form_encode_input($fr_valor2) . "\">" . $fr_valor2 . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_valor2" class="sc-ui-readonly-fr_valor2 css_fr_valor2_line" style="<?php echo $sStyleReadLab_fr_valor2; ?>"><?php echo $this->form_format_readonly("fr_valor2", $this->form_encode_input($this->fr_valor2)); ?></span><span id="id_read_off_fr_valor2" class="css_read_off_fr_valor2<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_valor2; ?>">
 <input class="sc-js-input scFormObjectOdd css_fr_valor2_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fr_valor2" type=text name="fr_valor2" value="<?php echo $this->form_encode_input($fr_valor2) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fr_valor2']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fr_valor2']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fr_valor2']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fr_valor2_dumb = ('' == $sStyleHidden_fr_valor2) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fr_valor2_dumb" style="<?php echo $sStyleHidden_fr_valor2_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf4\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_exp . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_forma_pago'] ?> 3<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fr_forma_pago3']))
   {
       $this->nm_new_label['fr_forma_pago3'] = "" . $this->Ini->Nm_lang['lang_forma_pago'] . " 3";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_forma_pago3 = $this->fr_forma_pago3;
   $sStyleHidden_fr_forma_pago3 = '';
   if (isset($this->nmgp_cmp_hidden['fr_forma_pago3']) && $this->nmgp_cmp_hidden['fr_forma_pago3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_forma_pago3']);
       $sStyleHidden_fr_forma_pago3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_forma_pago3 = 'display: none;';
   $sStyleReadInp_fr_forma_pago3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_forma_pago3']) && $this->nmgp_cmp_readonly['fr_forma_pago3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_forma_pago3']);
       $sStyleReadLab_fr_forma_pago3 = '';
       $sStyleReadInp_fr_forma_pago3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_forma_pago3']) && $this->nmgp_cmp_hidden['fr_forma_pago3'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fr_forma_pago3" value="<?php echo $this->form_encode_input($this->fr_forma_pago3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_forma_pago3_line" id="hidden_field_data_fr_forma_pago3" style="<?php echo $sStyleHidden_fr_forma_pago3; ?>"> 
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_forma_pago3"]) &&  $this->nmgp_cmp_readonly["fr_forma_pago3"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'] = array(); 
    }

   $old_value_fr_total = $this->fr_total;
   $old_value_fr_valor = $this->fr_valor;
   $old_value_fr_valor2 = $this->fr_valor2;
   $old_value_fr_valor3 = $this->fr_valor3;
   $old_value_total_pago = $this->total_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_fr_total = $this->fr_total;
   $unformatted_value_fr_valor = $this->fr_valor;
   $unformatted_value_fr_valor2 = $this->fr_valor2;
   $unformatted_value_fr_valor3 = $this->fr_valor3;
   $unformatted_value_total_pago = $this->total_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  where fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->fr_total = $old_value_fr_total;
   $this->fr_valor = $old_value_fr_valor;
   $this->fr_valor2 = $old_value_fr_valor2;
   $this->fr_valor3 = $old_value_fr_valor3;
   $this->total_pago = $old_value_total_pago;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['Lookup_fr_forma_pago3'][] = $rs->fields[0];
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
   $fr_forma_pago3_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_forma_pago3_1))
          {
              foreach ($this->fr_forma_pago3_1 as $tmp_fr_forma_pago3)
              {
                  if (trim($tmp_fr_forma_pago3) === trim($cadaselect[1])) {$fr_forma_pago3_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_forma_pago3) && trim($this->fr_forma_pago3) === trim($cadaselect[1])) {$fr_forma_pago3_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fr_forma_pago3" value="<?php echo $this->form_encode_input($fr_forma_pago3) . "\">" . $fr_forma_pago3_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fr_forma_pago3();
   $x = 0 ; 
   $fr_forma_pago3_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fr_forma_pago3_1))
          {
              foreach ($this->fr_forma_pago3_1 as $tmp_fr_forma_pago3)
              {
                  if (trim($tmp_fr_forma_pago3) === trim($cadaselect[1])) {$fr_forma_pago3_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fr_forma_pago3) && trim($this->fr_forma_pago3) === trim($cadaselect[1])) { $fr_forma_pago3_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fr_forma_pago3_look))
          {
              $fr_forma_pago3_look = $this->fr_forma_pago3;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fr_forma_pago3\" class=\"css_fr_forma_pago3_line\" style=\"" .  $sStyleReadLab_fr_forma_pago3 . "\">" . $this->form_format_readonly("fr_forma_pago3", $this->form_encode_input($fr_forma_pago3_look)) . "</span><span id=\"id_read_off_fr_forma_pago3\" class=\"css_read_off_fr_forma_pago3" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fr_forma_pago3 . "\">";
   echo " <span id=\"idAjaxSelect_fr_forma_pago3\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fr_forma_pago3_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fr_forma_pago3\" name=\"fr_forma_pago3\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fr_forma_pago3) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fr_forma_pago3)) 
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
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_valor3']))
    {
        $this->nm_new_label['fr_valor3'] = "" . $this->Ini->Nm_lang['lang_valor'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_valor3 = $this->fr_valor3;
   $sStyleHidden_fr_valor3 = '';
   if (isset($this->nmgp_cmp_hidden['fr_valor3']) && $this->nmgp_cmp_hidden['fr_valor3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_valor3']);
       $sStyleHidden_fr_valor3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_valor3 = 'display: none;';
   $sStyleReadInp_fr_valor3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_valor3']) && $this->nmgp_cmp_readonly['fr_valor3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_valor3']);
       $sStyleReadLab_fr_valor3 = '';
       $sStyleReadInp_fr_valor3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_valor3']) && $this->nmgp_cmp_hidden['fr_valor3'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_valor3" value="<?php echo $this->form_encode_input($fr_valor3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_valor3_line" id="hidden_field_data_fr_valor3" style="<?php echo $sStyleHidden_fr_valor3; ?>"> 
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_valor3"]) &&  $this->nmgp_cmp_readonly["fr_valor3"] == "on") { 

 ?>
<input type="hidden" name="fr_valor3" value="<?php echo $this->form_encode_input($fr_valor3) . "\">" . $fr_valor3 . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_valor3" class="sc-ui-readonly-fr_valor3 css_fr_valor3_line" style="<?php echo $sStyleReadLab_fr_valor3; ?>"><?php echo $this->form_format_readonly("fr_valor3", $this->form_encode_input($this->fr_valor3)); ?></span><span id="id_read_off_fr_valor3" class="css_read_off_fr_valor3<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_valor3; ?>">
 <input class="sc-js-input scFormObjectOdd css_fr_valor3_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fr_valor3" type=text name="fr_valor3" value="<?php echo $this->form_encode_input($fr_valor3) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fr_valor3']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fr_valor3']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: true, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fr_valor3']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fr_valor3_dumb = ('' == $sStyleHidden_fr_valor3) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fr_valor3_dumb" style="<?php echo $sStyleHidden_fr_valor3_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf5\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_exp . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_comentario'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr style=\"display: none;\">"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fr_comentario']))
    {
        $this->nm_new_label['fr_comentario'] = "" . $this->Ini->Nm_lang['lang_comentario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fr_comentario = $this->fr_comentario;
   $sStyleHidden_fr_comentario = '';
   if (isset($this->nmgp_cmp_hidden['fr_comentario']) && $this->nmgp_cmp_hidden['fr_comentario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fr_comentario']);
       $sStyleHidden_fr_comentario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fr_comentario = 'display: none;';
   $sStyleReadInp_fr_comentario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fr_comentario']) && $this->nmgp_cmp_readonly['fr_comentario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fr_comentario']);
       $sStyleReadLab_fr_comentario = '';
       $sStyleReadInp_fr_comentario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fr_comentario']) && $this->nmgp_cmp_hidden['fr_comentario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fr_comentario" value="<?php echo $this->form_encode_input($fr_comentario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fr_comentario_line" id="hidden_field_data_fr_comentario" style="<?php echo $sStyleHidden_fr_comentario; ?>"> 
<?php
$fr_comentario_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($fr_comentario));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fr_comentario"]) &&  $this->nmgp_cmp_readonly["fr_comentario"] == "on") { 

 ?>
<input type="hidden" name="fr_comentario" value="<?php echo $this->form_encode_input($fr_comentario) . "\">" . $fr_comentario_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_fr_comentario" class="sc-ui-readonly-fr_comentario css_fr_comentario_line" style="<?php echo $sStyleReadLab_fr_comentario; ?>"><?php echo $this->form_format_readonly("fr_comentario", $this->form_encode_input($fr_comentario_val)); ?></span><span id="id_read_off_fr_comentario" class="css_read_off_fr_comentario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fr_comentario; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_fr_comentario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;" name="fr_comentario" id="id_sc_field_fr_comentario" rows="2" cols="30"
 alt="{datatype: 'text', maxLength: 400, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $fr_comentario; ?>
</textarea>
</span><?php } ?>
 </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fr_comentario_dumb = ('' == $sStyleHidden_fr_comentario) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fr_comentario_dumb" style="<?php echo $sStyleHidden_fr_comentario_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_6"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_6"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_6" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['total_pago']))
    {
        $this->nm_new_label['total_pago'] = "" . $this->Ini->Nm_lang['lang_total_pago'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $total_pago = $this->total_pago;
   $sStyleHidden_total_pago = '';
   if (isset($this->nmgp_cmp_hidden['total_pago']) && $this->nmgp_cmp_hidden['total_pago'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['total_pago']);
       $sStyleHidden_total_pago = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_total_pago = 'display: none;';
   $sStyleReadInp_total_pago = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['total_pago']) && $this->nmgp_cmp_readonly['total_pago'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['total_pago']);
       $sStyleReadLab_total_pago = '';
       $sStyleReadInp_total_pago = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['total_pago']) && $this->nmgp_cmp_hidden['total_pago'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="total_pago" value="<?php echo $this->form_encode_input($total_pago) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_total_pago_line" id="hidden_field_data_total_pago" style="<?php echo $sStyleHidden_total_pago; ?>"> <span class="scFormLabelOddFormat css_total_pago_label" style=""><span id="id_label_total_pago"><?php echo $this->nm_new_label['total_pago']; ?></span></span><br><input type="hidden" name="total_pago" value="<?php echo $this->form_encode_input($total_pago); ?>"><span id="id_ajax_label_total_pago"><?php echo nl2br($total_pago); ?></span>
 </TD>
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
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
    $NM_btn = false;
?>
<?php
        $sCondStyle = ($this->nmgp_botoes['ok'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['ok']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['ok']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['ok']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['ok']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['ok'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bok", "scBtnFn_sys_format_ok()", "scBtnFn_sys_format_ok()", "sub_form_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
?>
       
<?php
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?>
       
<?php
    if (($nm_apl_dependente != 1) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard'])) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['nm_run_menu']) || $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['nm_run_menu'] != 1))) {
        $sCondStyle = ($this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "Bsair_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?>
       
<?php
    if (($nm_apl_dependente == 1) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "Bsair_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?>
          </td></tr> 
   </table> 
   </td></tr></table> 
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("control_procesa_factura_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("control_procesa_factura_mob");
 parent.scAjaxDetailHeight("control_procesa_factura_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("control_procesa_factura_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("control_procesa_factura_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['sc_modal'])
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
	function scBtnFn_sys_format_ok() {
		if ($("#sub_form_b.sc-unique-btn-1").length && $("#sub_form_b.sc-unique-btn-1").is(":visible")) {
		    if ($("#sub_form_b.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sub_form_b.sc-unique-btn-4").length && $("#sub_form_b.sc-unique-btn-4").is(":visible")) {
		    if ($("#sub_form_b.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza('alterar');
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
		if ($("#Bsair_b.sc-unique-btn-2").length && $("#Bsair_b.sc-unique-btn-2").is(":visible")) {
		    if ($("#Bsair_b.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_saida_glo(); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#Bsair_b.sc-unique-btn-3").length && $("#Bsair_b.sc-unique-btn-3").is(":visible")) {
		    if ($("#Bsair_b.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_saida_glo(); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#Bsair_b.sc-unique-btn-5").length && $("#Bsair_b.sc-unique-btn-5").is(":visible")) {
		    if ($("#Bsair_b.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_saida_glo(); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#Bsair_b.sc-unique-btn-6").length && $("#Bsair_b.sc-unique-btn-6").is(":visible")) {
		    if ($("#Bsair_b.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			nm_saida_glo(); return false;
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
$_SESSION['sc_session'][$this->Ini->sc_page]['control_procesa_factura_mob']['buttonStatus'] = $this->nmgp_botoes;
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
