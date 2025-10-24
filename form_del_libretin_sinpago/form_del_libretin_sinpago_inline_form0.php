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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_libretin'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_libretin'] . ""); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
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
.css_read_off_lib_fecha_caducidad_ button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_libretin_sinpago/form_del_libretin_sinpago_inline_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_libretin_sinpago_inline_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['last'] : 'off'); ?>";
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

include_once('form_del_libretin_sinpago_inline_jquery.php');

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

  setTimeout(function() {
  scJQElementsAdd('');

  scJQGeneralAdd();

  }, 50);
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_del_libretin_sinpago']['error_buffer']) && '' != $_SESSION['scriptcase']['form_del_libretin_sinpago']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_del_libretin_sinpago']['error_buffer'];
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
 include_once("form_del_libretin_sinpago_inline_js0.php");
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
               action="form_del_libretin_sinpago_inline.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['insert_validation']; ?>">
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
<?php
$_SESSION['scriptcase']['error_span_title']['form_del_libretin_sinpago_inline'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_libretin_sinpago_inline'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<table id="main_table_form"  align="left" cellpadding=0 cellspacing=0  width="98%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['new'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['insert'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['lib_id_']))
   {
       $this->nmgp_cmp_hidden['lib_id_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['lib_punto_emision_']))
   {
       $this->nmgp_cmp_hidden['lib_punto_emision_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['lib_disponibles_']))
   {
       $this->nmgp_cmp_hidden['lib_disponibles_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['lib_utilizados_']))
   {
       $this->nmgp_cmp_hidden['lib_utilizados_'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['lib_id_']))
           {
               $this->nmgp_cmp_readonly['lib_id_'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lib_id_']))
    {
        $this->nm_new_label['lib_id_'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_id_ = $this->lib_id_;
   if (!isset($this->nmgp_cmp_hidden['lib_id_']))
   {
       $this->nmgp_cmp_hidden['lib_id_'] = 'off';
   }
   $sStyleHidden_lib_id_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_id_']) && $this->nmgp_cmp_hidden['lib_id_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_id_']);
       $sStyleHidden_lib_id_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_id_ = 'display: none;';
   $sStyleReadInp_lib_id_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["lib_id_"]) &&  $this->nmgp_cmp_readonly["lib_id_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_id_']);
       $sStyleReadLab_lib_id_ = '';
       $sStyleReadInp_lib_id_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_id_']) && $this->nmgp_cmp_hidden['lib_id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lib_id_" value="<?php echo $this->form_encode_input($lib_id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_id__label" id="hidden_field_label_lib_id_" style="<?php echo $sStyleHidden_lib_id_; ?>"><span id="id_label_lib_id_"><?php echo $this->nm_new_label['lib_id_']; ?></span></TD>
    <TD class="scFormDataOdd css_lib_id__line" id="hidden_field_data_lib_id_" style="<?php echo $sStyleHidden_lib_id_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_id__line" style="vertical-align: top;padding: 0px"><span id="id_read_on_lib_id_" class="css_lib_id__line" style="<?php echo $sStyleReadLab_lib_id_; ?>"><?php echo $this->form_format_readonly("lib_id_", $this->form_encode_input($this->lib_id_)); ?></span><span id="id_read_off_lib_id_" class="css_read_off_lib_id_" style="<?php echo $sStyleReadInp_lib_id_; ?>"><input type="hidden" name="lib_id_" value="<?php echo $this->form_encode_input($lib_id_) . "\">"?><span id="id_ajax_label_lib_id_"><?php echo nl2br($lib_id_); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_id__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_id__text"></span></td></tr></table></td></tr></table></TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['lib_tipo_comprobante_']))
   {
       $this->nm_new_label['lib_tipo_comprobante_'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_tipo_comprobante_ = $this->lib_tipo_comprobante_;
   $sStyleHidden_lib_tipo_comprobante_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_tipo_comprobante_']) && $this->nmgp_cmp_hidden['lib_tipo_comprobante_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_tipo_comprobante_']);
       $sStyleHidden_lib_tipo_comprobante_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_tipo_comprobante_ = 'display: none;';
   $sStyleReadInp_lib_tipo_comprobante_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_tipo_comprobante_']) && $this->nmgp_cmp_readonly['lib_tipo_comprobante_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_tipo_comprobante_']);
       $sStyleReadLab_lib_tipo_comprobante_ = '';
       $sStyleReadInp_lib_tipo_comprobante_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_tipo_comprobante_']) && $this->nmgp_cmp_hidden['lib_tipo_comprobante_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="lib_tipo_comprobante_" value="<?php echo $this->form_encode_input($this->lib_tipo_comprobante_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_tipo_comprobante__label" id="hidden_field_label_lib_tipo_comprobante_" style="<?php echo $sStyleHidden_lib_tipo_comprobante_; ?>"><span id="id_label_lib_tipo_comprobante_"><?php echo $this->nm_new_label['lib_tipo_comprobante_']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_tipo_comprobante_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_tipo_comprobante_'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_lib_tipo_comprobante__line" id="hidden_field_data_lib_tipo_comprobante_" style="<?php echo $sStyleHidden_lib_tipo_comprobante_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_tipo_comprobante__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lib_tipo_comprobante_"]) &&  $this->nmgp_cmp_readonly["lib_tipo_comprobante_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'] = array(); 
    }

   $old_value_lib_id_ = $this->lib_id_;
   $old_value_lib_desde_ = $this->lib_desde_;
   $old_value_lib_hasta_ = $this->lib_hasta_;
   $old_value_lib_secuencial_ = $this->lib_secuencial_;
   $old_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $old_value_lib_disponibles_ = $this->lib_disponibles_;
   $old_value_lib_utilizados_ = $this->lib_utilizados_;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_lib_id_ = $this->lib_id_;
   $unformatted_value_lib_desde_ = $this->lib_desde_;
   $unformatted_value_lib_hasta_ = $this->lib_hasta_;
   $unformatted_value_lib_secuencial_ = $this->lib_secuencial_;
   $unformatted_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $unformatted_value_lib_disponibles_ = $this->lib_disponibles_;
   $unformatted_value_lib_utilizados_ = $this->lib_utilizados_;

   $nm_comando = "SELECT tc_codigo, tc_nombre  FROM sri_tipo_comprobante  ORDER BY tc_nombre";

   $this->lib_id_ = $old_value_lib_id_;
   $this->lib_desde_ = $old_value_lib_desde_;
   $this->lib_hasta_ = $old_value_lib_hasta_;
   $this->lib_secuencial_ = $old_value_lib_secuencial_;
   $this->lib_fecha_caducidad_ = $old_value_lib_fecha_caducidad_;
   $this->lib_disponibles_ = $old_value_lib_disponibles_;
   $this->lib_utilizados_ = $old_value_lib_utilizados_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_comprobante_'][] = $rs->fields[0];
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
   $lib_tipo_comprobante__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->lib_tipo_comprobante__1))
          {
              foreach ($this->lib_tipo_comprobante__1 as $tmp_lib_tipo_comprobante_)
              {
                  if (trim($tmp_lib_tipo_comprobante_) === trim($cadaselect[1])) {$lib_tipo_comprobante__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->lib_tipo_comprobante_) && trim($this->lib_tipo_comprobante_) === trim($cadaselect[1])) {$lib_tipo_comprobante__look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="lib_tipo_comprobante_" value="<?php echo $this->form_encode_input($lib_tipo_comprobante_) . "\">" . $lib_tipo_comprobante__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_lib_tipo_comprobante_();
   $x = 0 ; 
   $lib_tipo_comprobante__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->lib_tipo_comprobante__1))
          {
              foreach ($this->lib_tipo_comprobante__1 as $tmp_lib_tipo_comprobante_)
              {
                  if (trim($tmp_lib_tipo_comprobante_) === trim($cadaselect[1])) {$lib_tipo_comprobante__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->lib_tipo_comprobante_) && trim($this->lib_tipo_comprobante_) === trim($cadaselect[1])) { $lib_tipo_comprobante__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($lib_tipo_comprobante__look))
          {
              $lib_tipo_comprobante__look = $this->lib_tipo_comprobante_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_lib_tipo_comprobante_\" class=\"css_lib_tipo_comprobante__line\" style=\"" .  $sStyleReadLab_lib_tipo_comprobante_ . "\">" . $this->form_format_readonly("lib_tipo_comprobante_", $this->form_encode_input($lib_tipo_comprobante__look)) . "</span><span id=\"id_read_off_lib_tipo_comprobante_\" class=\"css_read_off_lib_tipo_comprobante_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_lib_tipo_comprobante_ . "\">";
   echo " <span id=\"idAjaxSelect_lib_tipo_comprobante_\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_lib_tipo_comprobante__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_lib_tipo_comprobante_\" name=\"lib_tipo_comprobante_\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->lib_tipo_comprobante_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->lib_tipo_comprobante_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_tipo_comprobante__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_tipo_comprobante__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lib_punto_emision_']))
    {
        $this->nm_new_label['lib_punto_emision_'] = "" . $this->Ini->Nm_lang['lang_punto_emision'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_punto_emision_ = $this->lib_punto_emision_;
   if (!isset($this->nmgp_cmp_hidden['lib_punto_emision_']))
   {
       $this->nmgp_cmp_hidden['lib_punto_emision_'] = 'off';
   }
   $sStyleHidden_lib_punto_emision_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_punto_emision_']) && $this->nmgp_cmp_hidden['lib_punto_emision_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_punto_emision_']);
       $sStyleHidden_lib_punto_emision_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_punto_emision_ = 'display: none;';
   $sStyleReadInp_lib_punto_emision_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_punto_emision_']) && $this->nmgp_cmp_readonly['lib_punto_emision_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_punto_emision_']);
       $sStyleReadLab_lib_punto_emision_ = '';
       $sStyleReadInp_lib_punto_emision_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_punto_emision_']) && $this->nmgp_cmp_hidden['lib_punto_emision_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lib_punto_emision_" value="<?php echo $this->form_encode_input($lib_punto_emision_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_punto_emision__label" id="hidden_field_label_lib_punto_emision_" style="<?php echo $sStyleHidden_lib_punto_emision_; ?>"><span id="id_label_lib_punto_emision_"><?php echo $this->nm_new_label['lib_punto_emision_']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_punto_emision_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_punto_emision_'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_lib_punto_emision__line" id="hidden_field_data_lib_punto_emision_" style="<?php echo $sStyleHidden_lib_punto_emision_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_punto_emision__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lib_punto_emision_"]) &&  $this->nmgp_cmp_readonly["lib_punto_emision_"] == "on") { 

 ?>
<input type="hidden" name="lib_punto_emision_" value="<?php echo $this->form_encode_input($lib_punto_emision_) . "\">" . $lib_punto_emision_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_lib_punto_emision_" class="sc-ui-readonly-lib_punto_emision_ css_lib_punto_emision__line" style="<?php echo $sStyleReadLab_lib_punto_emision_; ?>"><?php echo $this->form_format_readonly("lib_punto_emision_", $this->form_encode_input($this->lib_punto_emision_)); ?></span><span id="id_read_off_lib_punto_emision_" class="css_read_off_lib_punto_emision_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_lib_punto_emision_; ?>">
 <input class="sc-js-input scFormObjectOdd css_lib_punto_emision__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_lib_punto_emision_" type=text name="lib_punto_emision_" value="<?php echo $this->form_encode_input($lib_punto_emision_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'text', maxLength: 9, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_punto_emision__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_punto_emision__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['lib_tipo_libretin_']))
   {
       $this->nm_new_label['lib_tipo_libretin_'] = "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_tipo_libretin_ = $this->lib_tipo_libretin_;
   $sStyleHidden_lib_tipo_libretin_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_tipo_libretin_']) && $this->nmgp_cmp_hidden['lib_tipo_libretin_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_tipo_libretin_']);
       $sStyleHidden_lib_tipo_libretin_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_tipo_libretin_ = 'display: none;';
   $sStyleReadInp_lib_tipo_libretin_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_tipo_libretin_']) && $this->nmgp_cmp_readonly['lib_tipo_libretin_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_tipo_libretin_']);
       $sStyleReadLab_lib_tipo_libretin_ = '';
       $sStyleReadInp_lib_tipo_libretin_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_tipo_libretin_']) && $this->nmgp_cmp_hidden['lib_tipo_libretin_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="lib_tipo_libretin_" value="<?php echo $this->form_encode_input($this->lib_tipo_libretin_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_tipo_libretin__label" id="hidden_field_label_lib_tipo_libretin_" style="<?php echo $sStyleHidden_lib_tipo_libretin_; ?>"><span id="id_label_lib_tipo_libretin_"><?php echo $this->nm_new_label['lib_tipo_libretin_']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_tipo_libretin_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_tipo_libretin_'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_lib_tipo_libretin__line" id="hidden_field_data_lib_tipo_libretin_" style="<?php echo $sStyleHidden_lib_tipo_libretin_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_tipo_libretin__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lib_tipo_libretin_"]) &&  $this->nmgp_cmp_readonly["lib_tipo_libretin_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'] = array(); 
    }

   $old_value_lib_id_ = $this->lib_id_;
   $old_value_lib_desde_ = $this->lib_desde_;
   $old_value_lib_hasta_ = $this->lib_hasta_;
   $old_value_lib_secuencial_ = $this->lib_secuencial_;
   $old_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $old_value_lib_disponibles_ = $this->lib_disponibles_;
   $old_value_lib_utilizados_ = $this->lib_utilizados_;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_lib_id_ = $this->lib_id_;
   $unformatted_value_lib_desde_ = $this->lib_desde_;
   $unformatted_value_lib_hasta_ = $this->lib_hasta_;
   $unformatted_value_lib_secuencial_ = $this->lib_secuencial_;
   $unformatted_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $unformatted_value_lib_disponibles_ = $this->lib_disponibles_;
   $unformatted_value_lib_utilizados_ = $this->lib_utilizados_;

   $nm_comando = "SELECT tl_codigo, tl_descripcion  FROM sri_tipo_libretin  ORDER BY tl_descripcion";

   $this->lib_id_ = $old_value_lib_id_;
   $this->lib_desde_ = $old_value_lib_desde_;
   $this->lib_hasta_ = $old_value_lib_hasta_;
   $this->lib_secuencial_ = $old_value_lib_secuencial_;
   $this->lib_fecha_caducidad_ = $old_value_lib_fecha_caducidad_;
   $this->lib_disponibles_ = $old_value_lib_disponibles_;
   $this->lib_utilizados_ = $old_value_lib_utilizados_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_tipo_libretin_'][] = $rs->fields[0];
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
   $lib_tipo_libretin__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->lib_tipo_libretin__1))
          {
              foreach ($this->lib_tipo_libretin__1 as $tmp_lib_tipo_libretin_)
              {
                  if (trim($tmp_lib_tipo_libretin_) === trim($cadaselect[1])) {$lib_tipo_libretin__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->lib_tipo_libretin_) && trim($this->lib_tipo_libretin_) === trim($cadaselect[1])) {$lib_tipo_libretin__look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="lib_tipo_libretin_" value="<?php echo $this->form_encode_input($lib_tipo_libretin_) . "\">" . $lib_tipo_libretin__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_lib_tipo_libretin_();
   $x = 0 ; 
   $lib_tipo_libretin__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->lib_tipo_libretin__1))
          {
              foreach ($this->lib_tipo_libretin__1 as $tmp_lib_tipo_libretin_)
              {
                  if (trim($tmp_lib_tipo_libretin_) === trim($cadaselect[1])) {$lib_tipo_libretin__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->lib_tipo_libretin_) && trim($this->lib_tipo_libretin_) === trim($cadaselect[1])) { $lib_tipo_libretin__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($lib_tipo_libretin__look))
          {
              $lib_tipo_libretin__look = $this->lib_tipo_libretin_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_lib_tipo_libretin_\" class=\"css_lib_tipo_libretin__line\" style=\"" .  $sStyleReadLab_lib_tipo_libretin_ . "\">" . $this->form_format_readonly("lib_tipo_libretin_", $this->form_encode_input($lib_tipo_libretin__look)) . "</span><span id=\"id_read_off_lib_tipo_libretin_\" class=\"css_read_off_lib_tipo_libretin_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_lib_tipo_libretin_ . "\">";
   echo " <span id=\"idAjaxSelect_lib_tipo_libretin_\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_lib_tipo_libretin__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_lib_tipo_libretin_\" name=\"lib_tipo_libretin_\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->lib_tipo_libretin_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->lib_tipo_libretin_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_tipo_libretin__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_tipo_libretin__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lib_desde_']))
    {
        $this->nm_new_label['lib_desde_'] = "" . $this->Ini->Nm_lang['lang_desde'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_desde_ = $this->lib_desde_;
   $sStyleHidden_lib_desde_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_desde_']) && $this->nmgp_cmp_hidden['lib_desde_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_desde_']);
       $sStyleHidden_lib_desde_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_desde_ = 'display: none;';
   $sStyleReadInp_lib_desde_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_desde_']) && $this->nmgp_cmp_readonly['lib_desde_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_desde_']);
       $sStyleReadLab_lib_desde_ = '';
       $sStyleReadInp_lib_desde_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_desde_']) && $this->nmgp_cmp_hidden['lib_desde_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lib_desde_" value="<?php echo $this->form_encode_input($lib_desde_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_desde__label" id="hidden_field_label_lib_desde_" style="<?php echo $sStyleHidden_lib_desde_; ?>"><span id="id_label_lib_desde_"><?php echo $this->nm_new_label['lib_desde_']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_desde_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_desde_'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_lib_desde__line" id="hidden_field_data_lib_desde_" style="<?php echo $sStyleHidden_lib_desde_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_desde__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lib_desde_"]) &&  $this->nmgp_cmp_readonly["lib_desde_"] == "on") { 

 ?>
<input type="hidden" name="lib_desde_" value="<?php echo $this->form_encode_input($lib_desde_) . "\">" . $lib_desde_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_lib_desde_" class="sc-ui-readonly-lib_desde_ css_lib_desde__line" style="<?php echo $sStyleReadLab_lib_desde_; ?>"><?php echo $this->form_format_readonly("lib_desde_", $this->form_encode_input($this->lib_desde_)); ?></span><span id="id_read_off_lib_desde_" class="css_read_off_lib_desde_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_lib_desde_; ?>">
 <input class="sc-js-input scFormObjectOdd css_lib_desde__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_lib_desde_" type=text name="lib_desde_" value="<?php echo $this->form_encode_input($lib_desde_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['lib_desde_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['lib_desde_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_desde__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_desde__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lib_hasta_']))
    {
        $this->nm_new_label['lib_hasta_'] = "" . $this->Ini->Nm_lang['lang_hasta'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_hasta_ = $this->lib_hasta_;
   $sStyleHidden_lib_hasta_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_hasta_']) && $this->nmgp_cmp_hidden['lib_hasta_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_hasta_']);
       $sStyleHidden_lib_hasta_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_hasta_ = 'display: none;';
   $sStyleReadInp_lib_hasta_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_hasta_']) && $this->nmgp_cmp_readonly['lib_hasta_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_hasta_']);
       $sStyleReadLab_lib_hasta_ = '';
       $sStyleReadInp_lib_hasta_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_hasta_']) && $this->nmgp_cmp_hidden['lib_hasta_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lib_hasta_" value="<?php echo $this->form_encode_input($lib_hasta_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_hasta__label" id="hidden_field_label_lib_hasta_" style="<?php echo $sStyleHidden_lib_hasta_; ?>"><span id="id_label_lib_hasta_"><?php echo $this->nm_new_label['lib_hasta_']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_hasta_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_hasta_'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_lib_hasta__line" id="hidden_field_data_lib_hasta_" style="<?php echo $sStyleHidden_lib_hasta_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_hasta__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lib_hasta_"]) &&  $this->nmgp_cmp_readonly["lib_hasta_"] == "on") { 

 ?>
<input type="hidden" name="lib_hasta_" value="<?php echo $this->form_encode_input($lib_hasta_) . "\">" . $lib_hasta_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_lib_hasta_" class="sc-ui-readonly-lib_hasta_ css_lib_hasta__line" style="<?php echo $sStyleReadLab_lib_hasta_; ?>"><?php echo $this->form_format_readonly("lib_hasta_", $this->form_encode_input($this->lib_hasta_)); ?></span><span id="id_read_off_lib_hasta_" class="css_read_off_lib_hasta_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_lib_hasta_; ?>">
 <input class="sc-js-input scFormObjectOdd css_lib_hasta__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_lib_hasta_" type=text name="lib_hasta_" value="<?php echo $this->form_encode_input($lib_hasta_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['lib_hasta_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['lib_hasta_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_hasta__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_hasta__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lib_secuencial_']))
    {
        $this->nm_new_label['lib_secuencial_'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_secuencial_ = $this->lib_secuencial_;
   $sStyleHidden_lib_secuencial_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_secuencial_']) && $this->nmgp_cmp_hidden['lib_secuencial_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_secuencial_']);
       $sStyleHidden_lib_secuencial_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_secuencial_ = 'display: none;';
   $sStyleReadInp_lib_secuencial_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_secuencial_']) && $this->nmgp_cmp_readonly['lib_secuencial_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_secuencial_']);
       $sStyleReadLab_lib_secuencial_ = '';
       $sStyleReadInp_lib_secuencial_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_secuencial_']) && $this->nmgp_cmp_hidden['lib_secuencial_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lib_secuencial_" value="<?php echo $this->form_encode_input($lib_secuencial_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_secuencial__label" id="hidden_field_label_lib_secuencial_" style="<?php echo $sStyleHidden_lib_secuencial_; ?>"><span id="id_label_lib_secuencial_"><?php echo $this->nm_new_label['lib_secuencial_']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_secuencial_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['php_cmp_required']['lib_secuencial_'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_lib_secuencial__line" id="hidden_field_data_lib_secuencial_" style="<?php echo $sStyleHidden_lib_secuencial_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_secuencial__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lib_secuencial_"]) &&  $this->nmgp_cmp_readonly["lib_secuencial_"] == "on") { 

 ?>
<input type="hidden" name="lib_secuencial_" value="<?php echo $this->form_encode_input($lib_secuencial_) . "\">" . $lib_secuencial_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_lib_secuencial_" class="sc-ui-readonly-lib_secuencial_ css_lib_secuencial__line" style="<?php echo $sStyleReadLab_lib_secuencial_; ?>"><?php echo $this->form_format_readonly("lib_secuencial_", $this->form_encode_input($this->lib_secuencial_)); ?></span><span id="id_read_off_lib_secuencial_" class="css_read_off_lib_secuencial_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_lib_secuencial_; ?>">
 <input class="sc-js-input scFormObjectOdd css_lib_secuencial__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_lib_secuencial_" type=text name="lib_secuencial_" value="<?php echo $this->form_encode_input($lib_secuencial_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['lib_secuencial_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['lib_secuencial_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_secuencial__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_secuencial__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lib_autorizacion_']))
    {
        $this->nm_new_label['lib_autorizacion_'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_autorizacion_ = $this->lib_autorizacion_;
   $sStyleHidden_lib_autorizacion_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_autorizacion_']) && $this->nmgp_cmp_hidden['lib_autorizacion_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_autorizacion_']);
       $sStyleHidden_lib_autorizacion_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_autorizacion_ = 'display: none;';
   $sStyleReadInp_lib_autorizacion_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_autorizacion_']) && $this->nmgp_cmp_readonly['lib_autorizacion_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_autorizacion_']);
       $sStyleReadLab_lib_autorizacion_ = '';
       $sStyleReadInp_lib_autorizacion_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_autorizacion_']) && $this->nmgp_cmp_hidden['lib_autorizacion_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lib_autorizacion_" value="<?php echo $this->form_encode_input($lib_autorizacion_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_autorizacion__label" id="hidden_field_label_lib_autorizacion_" style="<?php echo $sStyleHidden_lib_autorizacion_; ?>"><span id="id_label_lib_autorizacion_"><?php echo $this->nm_new_label['lib_autorizacion_']; ?></span></TD>
    <TD class="scFormDataOdd css_lib_autorizacion__line" id="hidden_field_data_lib_autorizacion_" style="<?php echo $sStyleHidden_lib_autorizacion_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_autorizacion__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lib_autorizacion_"]) &&  $this->nmgp_cmp_readonly["lib_autorizacion_"] == "on") { 

 ?>
<input type="hidden" name="lib_autorizacion_" value="<?php echo $this->form_encode_input($lib_autorizacion_) . "\">" . $lib_autorizacion_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_lib_autorizacion_" class="sc-ui-readonly-lib_autorizacion_ css_lib_autorizacion__line" style="<?php echo $sStyleReadLab_lib_autorizacion_; ?>"><?php echo $this->form_format_readonly("lib_autorizacion_", $this->form_encode_input($this->lib_autorizacion_)); ?></span><span id="id_read_off_lib_autorizacion_" class="css_read_off_lib_autorizacion_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_lib_autorizacion_; ?>">
 <input class="sc-js-input scFormObjectOdd css_lib_autorizacion__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_lib_autorizacion_" type=text name="lib_autorizacion_" value="<?php echo $this->form_encode_input($lib_autorizacion_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_autorizacion__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_autorizacion__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lib_fecha_caducidad_']))
    {
        $this->nm_new_label['lib_fecha_caducidad_'] = "" . $this->Ini->Nm_lang['lang_fecha_caducidad'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $sStyleHidden_lib_fecha_caducidad_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_fecha_caducidad_']) && $this->nmgp_cmp_hidden['lib_fecha_caducidad_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_fecha_caducidad_']);
       $sStyleHidden_lib_fecha_caducidad_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_fecha_caducidad_ = 'display: none;';
   $sStyleReadInp_lib_fecha_caducidad_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_fecha_caducidad_']) && $this->nmgp_cmp_readonly['lib_fecha_caducidad_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_fecha_caducidad_']);
       $sStyleReadLab_lib_fecha_caducidad_ = '';
       $sStyleReadInp_lib_fecha_caducidad_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_fecha_caducidad_']) && $this->nmgp_cmp_hidden['lib_fecha_caducidad_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lib_fecha_caducidad_" value="<?php echo $this->form_encode_input($lib_fecha_caducidad_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_fecha_caducidad__label" id="hidden_field_label_lib_fecha_caducidad_" style="<?php echo $sStyleHidden_lib_fecha_caducidad_; ?>"><span id="id_label_lib_fecha_caducidad_"><?php echo $this->nm_new_label['lib_fecha_caducidad_']; ?></span></TD>
    <TD class="scFormDataOdd css_lib_fecha_caducidad__line" id="hidden_field_data_lib_fecha_caducidad_" style="<?php echo $sStyleHidden_lib_fecha_caducidad_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_fecha_caducidad__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lib_fecha_caducidad_"]) &&  $this->nmgp_cmp_readonly["lib_fecha_caducidad_"] == "on") { 

 ?>
<input type="hidden" name="lib_fecha_caducidad_" value="<?php echo $this->form_encode_input($lib_fecha_caducidad_) . "\">" . $lib_fecha_caducidad_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_lib_fecha_caducidad_" class="sc-ui-readonly-lib_fecha_caducidad_ css_lib_fecha_caducidad__line" style="<?php echo $sStyleReadLab_lib_fecha_caducidad_; ?>"><?php echo $this->form_format_readonly("lib_fecha_caducidad_", $this->form_encode_input($lib_fecha_caducidad_)); ?></span><span id="id_read_off_lib_fecha_caducidad_" class="css_read_off_lib_fecha_caducidad_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_lib_fecha_caducidad_; ?>"><?php
$tmp_form_data = $this->field_config['lib_fecha_caducidad_']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_lib_fecha_caducidad__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_lib_fecha_caducidad_" type=text name="lib_fecha_caducidad_" value="<?php echo $this->form_encode_input($lib_fecha_caducidad_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['lib_fecha_caducidad_']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['lib_fecha_caducidad_']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_fecha_caducidad__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_fecha_caducidad__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['lib_estado_']))
   {
       $this->nm_new_label['lib_estado_'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_estado_ = $this->lib_estado_;
   $sStyleHidden_lib_estado_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_estado_']) && $this->nmgp_cmp_hidden['lib_estado_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_estado_']);
       $sStyleHidden_lib_estado_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_estado_ = 'display: none;';
   $sStyleReadInp_lib_estado_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_estado_']) && $this->nmgp_cmp_readonly['lib_estado_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_estado_']);
       $sStyleReadLab_lib_estado_ = '';
       $sStyleReadInp_lib_estado_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_estado_']) && $this->nmgp_cmp_hidden['lib_estado_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="lib_estado_" value="<?php echo $this->form_encode_input($this->lib_estado_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_estado__label" id="hidden_field_label_lib_estado_" style="<?php echo $sStyleHidden_lib_estado_; ?>"><span id="id_label_lib_estado_"><?php echo $this->nm_new_label['lib_estado_']; ?></span></TD>
    <TD class="scFormDataOdd css_lib_estado__line" id="hidden_field_data_lib_estado_" style="<?php echo $sStyleHidden_lib_estado_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_estado__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lib_estado_"]) &&  $this->nmgp_cmp_readonly["lib_estado_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'] = array(); 
    }

   $old_value_lib_id_ = $this->lib_id_;
   $old_value_lib_desde_ = $this->lib_desde_;
   $old_value_lib_hasta_ = $this->lib_hasta_;
   $old_value_lib_secuencial_ = $this->lib_secuencial_;
   $old_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $old_value_lib_disponibles_ = $this->lib_disponibles_;
   $old_value_lib_utilizados_ = $this->lib_utilizados_;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_lib_id_ = $this->lib_id_;
   $unformatted_value_lib_desde_ = $this->lib_desde_;
   $unformatted_value_lib_hasta_ = $this->lib_hasta_;
   $unformatted_value_lib_secuencial_ = $this->lib_secuencial_;
   $unformatted_value_lib_fecha_caducidad_ = $this->lib_fecha_caducidad_;
   $unformatted_value_lib_disponibles_ = $this->lib_disponibles_;
   $unformatted_value_lib_utilizados_ = $this->lib_utilizados_;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sri_estado_libretin  ORDER BY dec_nombre";

   $this->lib_id_ = $old_value_lib_id_;
   $this->lib_desde_ = $old_value_lib_desde_;
   $this->lib_hasta_ = $old_value_lib_hasta_;
   $this->lib_secuencial_ = $old_value_lib_secuencial_;
   $this->lib_fecha_caducidad_ = $old_value_lib_fecha_caducidad_;
   $this->lib_disponibles_ = $old_value_lib_disponibles_;
   $this->lib_utilizados_ = $old_value_lib_utilizados_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['Lookup_lib_estado_'][] = $rs->fields[0];
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
   $lib_estado__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->lib_estado__1))
          {
              foreach ($this->lib_estado__1 as $tmp_lib_estado_)
              {
                  if (trim($tmp_lib_estado_) === trim($cadaselect[1])) {$lib_estado__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->lib_estado_) && trim($this->lib_estado_) === trim($cadaselect[1])) {$lib_estado__look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="lib_estado_" value="<?php echo $this->form_encode_input($lib_estado_) . "\">" . $lib_estado__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_lib_estado_();
   $x = 0 ; 
   $lib_estado__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->lib_estado__1))
          {
              foreach ($this->lib_estado__1 as $tmp_lib_estado_)
              {
                  if (trim($tmp_lib_estado_) === trim($cadaselect[1])) {$lib_estado__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->lib_estado_) && trim($this->lib_estado_) === trim($cadaselect[1])) { $lib_estado__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($lib_estado__look))
          {
              $lib_estado__look = $this->lib_estado_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_lib_estado_\" class=\"css_lib_estado__line\" style=\"" .  $sStyleReadLab_lib_estado_ . "\">" . $this->form_format_readonly("lib_estado_", $this->form_encode_input($lib_estado__look)) . "</span><span id=\"id_read_off_lib_estado_\" class=\"css_read_off_lib_estado_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_lib_estado_ . "\">";
   echo " <span id=\"idAjaxSelect_lib_estado_\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_lib_estado__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_lib_estado_\" name=\"lib_estado_\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->lib_estado_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->lib_estado_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_estado__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_estado__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lib_disponibles_']))
    {
        $this->nm_new_label['lib_disponibles_'] = "" . $this->Ini->Nm_lang['lang_chart_available'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_disponibles_ = $this->lib_disponibles_;
   if (!isset($this->nmgp_cmp_hidden['lib_disponibles_']))
   {
       $this->nmgp_cmp_hidden['lib_disponibles_'] = 'off';
   }
   $sStyleHidden_lib_disponibles_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_disponibles_']) && $this->nmgp_cmp_hidden['lib_disponibles_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_disponibles_']);
       $sStyleHidden_lib_disponibles_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_disponibles_ = 'display: none;';
   $sStyleReadInp_lib_disponibles_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_disponibles_']) && $this->nmgp_cmp_readonly['lib_disponibles_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_disponibles_']);
       $sStyleReadLab_lib_disponibles_ = '';
       $sStyleReadInp_lib_disponibles_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_disponibles_']) && $this->nmgp_cmp_hidden['lib_disponibles_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lib_disponibles_" value="<?php echo $this->form_encode_input($lib_disponibles_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_disponibles__label" id="hidden_field_label_lib_disponibles_" style="<?php echo $sStyleHidden_lib_disponibles_; ?>"><span id="id_label_lib_disponibles_"><?php echo $this->nm_new_label['lib_disponibles_']; ?></span></TD>
    <TD class="scFormDataOdd css_lib_disponibles__line" id="hidden_field_data_lib_disponibles_" style="<?php echo $sStyleHidden_lib_disponibles_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_disponibles__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="lib_disponibles_" value="<?php echo $this->form_encode_input($lib_disponibles_); ?>"><span id="id_ajax_label_lib_disponibles_"><?php echo nl2br($lib_disponibles_); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_disponibles__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_disponibles__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lib_utilizados_']))
    {
        $this->nm_new_label['lib_utilizados_'] = "" . $this->Ini->Nm_lang['lang_utilizados'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lib_utilizados_ = $this->lib_utilizados_;
   if (!isset($this->nmgp_cmp_hidden['lib_utilizados_']))
   {
       $this->nmgp_cmp_hidden['lib_utilizados_'] = 'off';
   }
   $sStyleHidden_lib_utilizados_ = '';
   if (isset($this->nmgp_cmp_hidden['lib_utilizados_']) && $this->nmgp_cmp_hidden['lib_utilizados_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lib_utilizados_']);
       $sStyleHidden_lib_utilizados_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lib_utilizados_ = 'display: none;';
   $sStyleReadInp_lib_utilizados_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lib_utilizados_']) && $this->nmgp_cmp_readonly['lib_utilizados_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lib_utilizados_']);
       $sStyleReadLab_lib_utilizados_ = '';
       $sStyleReadInp_lib_utilizados_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lib_utilizados_']) && $this->nmgp_cmp_hidden['lib_utilizados_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lib_utilizados_" value="<?php echo $this->form_encode_input($lib_utilizados_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_lib_utilizados__label" id="hidden_field_label_lib_utilizados_" style="<?php echo $sStyleHidden_lib_utilizados_; ?>"><span id="id_label_lib_utilizados_"><?php echo $this->nm_new_label['lib_utilizados_']; ?></span></TD>
    <TD class="scFormDataOdd css_lib_utilizados__line" id="hidden_field_data_lib_utilizados_" style="<?php echo $sStyleHidden_lib_utilizados_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lib_utilizados__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="lib_utilizados_" value="<?php echo $this->form_encode_input($lib_utilizados_); ?>"><span id="id_ajax_label_lib_utilizados_"><?php echo nl2br($lib_utilizados_); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lib_utilizados__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lib_utilizados__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_libretin_sinpago_inline");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_libretin_sinpago_inline");
 parent.scAjaxDetailHeight("form_del_libretin_sinpago_inline", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_libretin_sinpago_inline", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_libretin_sinpago_inline", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['sc_modal'])
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
			do_ajax_form_del_libretin_sinpago_add_new_line(); return false;
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-2").length && $("#sc_b_new_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-3").length && $("#sc_b_ins_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-9").length && $("#sc_b_new_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-10").length && $("#sc_b_ins_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-11").length && $("#sc_b_upd_t.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-5").length && $("#sys_separator.sc-unique-btn-5").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-5").hasClass("disabled")) {
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
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
		    if ($("#sc_b_hlp_t").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-13").length && $("#sc_b_sai_t.sc-unique-btn-13").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-14").length && $("#sc_b_sai_t.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-15").length && $("#sc_b_sai_t.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_libretin_sinpago_inline']['buttonStatus'] = $this->nmgp_botoes;
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
