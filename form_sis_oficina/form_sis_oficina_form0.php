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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_configuracion'] . "-" . $this->Ini->Nm_lang['lang_oficina'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_configuracion'] . "-" . $this->Ini->Nm_lang['lang_oficina'] . ""); } ?></TITLE>
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
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_sis_oficina/form_sis_oficina_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_sis_oficina_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['last'] : 'off'); ?>";
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

include_once('form_sis_oficina_jquery.php');

?>

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $("#hidden_bloco_0,#hidden_bloco_1").each(function() {
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
    "hidden_bloco_0": true,
    "hidden_bloco_1": true
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['link_info']['remove_border']) {
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
 include_once("form_sis_oficina_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_sis_oficina'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_sis_oficina'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<?php
$this->displayAppHeader();
?>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label'][''];
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
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="4" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf0\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_datos_generales'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['ofi_filial']))
   {
       $this->nm_new_label['ofi_filial'] = "" . $this->Ini->Nm_lang['lang_filial'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_filial = $this->ofi_filial;
   $sStyleHidden_ofi_filial = '';
   if (isset($this->nmgp_cmp_hidden['ofi_filial']) && $this->nmgp_cmp_hidden['ofi_filial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_filial']);
       $sStyleHidden_ofi_filial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_filial = 'display: none;';
   $sStyleReadInp_ofi_filial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_filial']) && $this->nmgp_cmp_readonly['ofi_filial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_filial']);
       $sStyleReadLab_ofi_filial = '';
       $sStyleReadInp_ofi_filial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_filial']) && $this->nmgp_cmp_hidden['ofi_filial'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ofi_filial" value="<?php echo $this->form_encode_input($this->ofi_filial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_filial_label" id="hidden_field_label_ofi_filial" style="<?php echo $sStyleHidden_ofi_filial; ?>"><span id="id_label_ofi_filial"><?php echo $this->nm_new_label['ofi_filial']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_filial_line" id="hidden_field_data_ofi_filial" style="<?php echo $sStyleHidden_ofi_filial; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_filial_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_filial"]) &&  $this->nmgp_cmp_readonly["ofi_filial"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial'] = array(); 
    }
   $nm_comando = "SELECT fil_id, fil_nombre  FROM sis_filial  ORDER BY fil_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial'][] = $rs->fields[0];
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
   $ofi_filial_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_filial_1))
          {
              foreach ($this->ofi_filial_1 as $tmp_ofi_filial)
              {
                  if (trim($tmp_ofi_filial) === trim($cadaselect[1])) {$ofi_filial_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_filial) && trim($this->ofi_filial) === trim($cadaselect[1])) {$ofi_filial_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ofi_filial" value="<?php echo $this->form_encode_input($ofi_filial) . "\">" . $ofi_filial_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ofi_filial();
   $x = 0 ; 
   $ofi_filial_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_filial_1))
          {
              foreach ($this->ofi_filial_1 as $tmp_ofi_filial)
              {
                  if (trim($tmp_ofi_filial) === trim($cadaselect[1])) {$ofi_filial_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_filial) && trim($this->ofi_filial) === trim($cadaselect[1])) { $ofi_filial_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ofi_filial_look))
          {
              $ofi_filial_look = $this->ofi_filial;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ofi_filial\" class=\"css_ofi_filial_line\" style=\"" .  $sStyleReadLab_ofi_filial . "\">" . $this->form_format_readonly("ofi_filial", $this->form_encode_input($ofi_filial_look)) . "</span><span id=\"id_read_off_ofi_filial\" class=\"css_read_off_ofi_filial" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ofi_filial . "\">";
   echo " <span id=\"idAjaxSelect_ofi_filial\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ofi_filial_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ofi_filial\" name=\"ofi_filial\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_filial'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ofi_filial) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ofi_filial)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_filial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_filial_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ofi_sucursal']))
   {
       $this->nm_new_label['ofi_sucursal'] = "" . $this->Ini->Nm_lang['lang_sucursal'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_sucursal = $this->ofi_sucursal;
   $sStyleHidden_ofi_sucursal = '';
   if (isset($this->nmgp_cmp_hidden['ofi_sucursal']) && $this->nmgp_cmp_hidden['ofi_sucursal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_sucursal']);
       $sStyleHidden_ofi_sucursal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_sucursal = 'display: none;';
   $sStyleReadInp_ofi_sucursal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_sucursal']) && $this->nmgp_cmp_readonly['ofi_sucursal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_sucursal']);
       $sStyleReadLab_ofi_sucursal = '';
       $sStyleReadInp_ofi_sucursal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_sucursal']) && $this->nmgp_cmp_hidden['ofi_sucursal'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ofi_sucursal" value="<?php echo $this->form_encode_input($this->ofi_sucursal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_sucursal_label" id="hidden_field_label_ofi_sucursal" style="<?php echo $sStyleHidden_ofi_sucursal; ?>"><span id="id_label_ofi_sucursal"><?php echo $this->nm_new_label['ofi_sucursal']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_sucursal_line" id="hidden_field_data_ofi_sucursal" style="<?php echo $sStyleHidden_ofi_sucursal; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_sucursal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_sucursal"]) &&  $this->nmgp_cmp_readonly["ofi_sucursal"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_sucursal']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_sucursal'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_sucursal']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_sucursal'] = array(); 
}
if ($this->ofi_filial != "")
{ 
   $this->nm_clear_val("ofi_filial");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_sucursal']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_sucursal'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_sucursal']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_sucursal'] = array(); 
    }
   $nm_comando = "SELECT suc_id, suc_nombre  FROM sis_sucursal  where suc_filial='$this->ofi_filial' ORDER BY suc_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_sucursal'][] = $rs->fields[0];
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
} 
   $x = 0; 
   $ofi_sucursal_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_sucursal_1))
          {
              foreach ($this->ofi_sucursal_1 as $tmp_ofi_sucursal)
              {
                  if (trim($tmp_ofi_sucursal) === trim($cadaselect[1])) {$ofi_sucursal_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_sucursal) && trim($this->ofi_sucursal) === trim($cadaselect[1])) {$ofi_sucursal_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ofi_sucursal" value="<?php echo $this->form_encode_input($ofi_sucursal) . "\">" . $ofi_sucursal_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ofi_sucursal();
   $x = 0 ; 
   $ofi_sucursal_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_sucursal_1))
          {
              foreach ($this->ofi_sucursal_1 as $tmp_ofi_sucursal)
              {
                  if (trim($tmp_ofi_sucursal) === trim($cadaselect[1])) {$ofi_sucursal_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_sucursal) && trim($this->ofi_sucursal) === trim($cadaselect[1])) { $ofi_sucursal_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ofi_sucursal_look))
          {
              $ofi_sucursal_look = $this->ofi_sucursal;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ofi_sucursal\" class=\"css_ofi_sucursal_line\" style=\"" .  $sStyleReadLab_ofi_sucursal . "\">" . $this->form_format_readonly("ofi_sucursal", $this->form_encode_input($ofi_sucursal_look)) . "</span><span id=\"id_read_off_ofi_sucursal\" class=\"css_read_off_ofi_sucursal" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ofi_sucursal . "\">";
   echo " <span id=\"idAjaxSelect_ofi_sucursal\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ofi_sucursal_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ofi_sucursal\" name=\"ofi_sucursal\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ofi_sucursal) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ofi_sucursal)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_sucursal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_sucursal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ofi_nombre']))
    {
        $this->nm_new_label['ofi_nombre'] = "" . $this->Ini->Nm_lang['lang_oficina'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_nombre = $this->ofi_nombre;
   $sStyleHidden_ofi_nombre = '';
   if (isset($this->nmgp_cmp_hidden['ofi_nombre']) && $this->nmgp_cmp_hidden['ofi_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_nombre']);
       $sStyleHidden_ofi_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_nombre = 'display: none;';
   $sStyleReadInp_ofi_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_nombre']) && $this->nmgp_cmp_readonly['ofi_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_nombre']);
       $sStyleReadLab_ofi_nombre = '';
       $sStyleReadInp_ofi_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_nombre']) && $this->nmgp_cmp_hidden['ofi_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ofi_nombre" value="<?php echo $this->form_encode_input($ofi_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_nombre_label" id="hidden_field_label_ofi_nombre" style="<?php echo $sStyleHidden_ofi_nombre; ?>"><span id="id_label_ofi_nombre"><?php echo $this->nm_new_label['ofi_nombre']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_nombre_line" id="hidden_field_data_ofi_nombre" style="<?php echo $sStyleHidden_ofi_nombre; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_nombre_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_nombre"]) &&  $this->nmgp_cmp_readonly["ofi_nombre"] == "on") { 

 ?>
<input type="hidden" name="ofi_nombre" value="<?php echo $this->form_encode_input($ofi_nombre) . "\">" . $ofi_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_ofi_nombre" class="sc-ui-readonly-ofi_nombre css_ofi_nombre_line" style="<?php echo $sStyleReadLab_ofi_nombre; ?>"><?php echo $this->form_format_readonly("ofi_nombre", $this->form_encode_input($this->ofi_nombre)); ?></span><span id="id_read_off_ofi_nombre" class="css_read_off_ofi_nombre<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ofi_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_ofi_nombre_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ofi_nombre" type=text name="ofi_nombre" value="<?php echo $this->form_encode_input($ofi_nombre) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_nombre_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ofi_representante']))
    {
        $this->nm_new_label['ofi_representante'] = "" . $this->Ini->Nm_lang['lang_representante'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_representante = $this->ofi_representante;
   $sStyleHidden_ofi_representante = '';
   if (isset($this->nmgp_cmp_hidden['ofi_representante']) && $this->nmgp_cmp_hidden['ofi_representante'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_representante']);
       $sStyleHidden_ofi_representante = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_representante = 'display: none;';
   $sStyleReadInp_ofi_representante = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_representante']) && $this->nmgp_cmp_readonly['ofi_representante'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_representante']);
       $sStyleReadLab_ofi_representante = '';
       $sStyleReadInp_ofi_representante = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_representante']) && $this->nmgp_cmp_hidden['ofi_representante'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ofi_representante" value="<?php echo $this->form_encode_input($ofi_representante) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_representante_label" id="hidden_field_label_ofi_representante" style="<?php echo $sStyleHidden_ofi_representante; ?>"><span id="id_label_ofi_representante"><?php echo $this->nm_new_label['ofi_representante']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_representante_line" id="hidden_field_data_ofi_representante" style="<?php echo $sStyleHidden_ofi_representante; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_representante_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_representante"]) &&  $this->nmgp_cmp_readonly["ofi_representante"] == "on") { 

 ?>
<input type="hidden" name="ofi_representante" value="<?php echo $this->form_encode_input($ofi_representante) . "\">" . $ofi_representante . ""; ?>
<?php } else { ?>
<span id="id_read_on_ofi_representante" class="sc-ui-readonly-ofi_representante css_ofi_representante_line" style="<?php echo $sStyleReadLab_ofi_representante; ?>"><?php echo $this->form_format_readonly("ofi_representante", $this->form_encode_input($this->ofi_representante)); ?></span><span id="id_read_off_ofi_representante" class="css_read_off_ofi_representante<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ofi_representante; ?>">
 <input class="sc-js-input scFormObjectOdd css_ofi_representante_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ofi_representante" type=text name="ofi_representante" value="<?php echo $this->form_encode_input($ofi_representante) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_representante_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_representante_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ofi_serie_sri']))
    {
        $this->nm_new_label['ofi_serie_sri'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_serie_sri = $this->ofi_serie_sri;
   $sStyleHidden_ofi_serie_sri = '';
   if (isset($this->nmgp_cmp_hidden['ofi_serie_sri']) && $this->nmgp_cmp_hidden['ofi_serie_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_serie_sri']);
       $sStyleHidden_ofi_serie_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_serie_sri = 'display: none;';
   $sStyleReadInp_ofi_serie_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_serie_sri']) && $this->nmgp_cmp_readonly['ofi_serie_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_serie_sri']);
       $sStyleReadLab_ofi_serie_sri = '';
       $sStyleReadInp_ofi_serie_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_serie_sri']) && $this->nmgp_cmp_hidden['ofi_serie_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ofi_serie_sri" value="<?php echo $this->form_encode_input($ofi_serie_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_serie_sri_label" id="hidden_field_label_ofi_serie_sri" style="<?php echo $sStyleHidden_ofi_serie_sri; ?>"><span id="id_label_ofi_serie_sri"><?php echo $this->nm_new_label['ofi_serie_sri']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_serie_sri_line" id="hidden_field_data_ofi_serie_sri" style="<?php echo $sStyleHidden_ofi_serie_sri; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_serie_sri_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_serie_sri"]) &&  $this->nmgp_cmp_readonly["ofi_serie_sri"] == "on") { 

 ?>
<input type="hidden" name="ofi_serie_sri" value="<?php echo $this->form_encode_input($ofi_serie_sri) . "\">" . $ofi_serie_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_ofi_serie_sri" class="sc-ui-readonly-ofi_serie_sri css_ofi_serie_sri_line" style="<?php echo $sStyleReadLab_ofi_serie_sri; ?>"><?php echo $this->form_format_readonly("ofi_serie_sri", $this->form_encode_input($this->ofi_serie_sri)); ?></span><span id="id_read_off_ofi_serie_sri" class="css_read_off_ofi_serie_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ofi_serie_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_ofi_serie_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ofi_serie_sri" type=text name="ofi_serie_sri" value="<?php echo $this->form_encode_input($ofi_serie_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=3"; } ?> maxlength=3 alt="{datatype: 'text', maxLength: 3, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_serie_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_serie_sri_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ofi_estado']))
   {
       $this->nm_new_label['ofi_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_estado = $this->ofi_estado;
   $sStyleHidden_ofi_estado = '';
   if (isset($this->nmgp_cmp_hidden['ofi_estado']) && $this->nmgp_cmp_hidden['ofi_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_estado']);
       $sStyleHidden_ofi_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_estado = 'display: none;';
   $sStyleReadInp_ofi_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_estado']) && $this->nmgp_cmp_readonly['ofi_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_estado']);
       $sStyleReadLab_ofi_estado = '';
       $sStyleReadInp_ofi_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_estado']) && $this->nmgp_cmp_hidden['ofi_estado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ofi_estado" value="<?php echo $this->form_encode_input($this->ofi_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_estado_label" id="hidden_field_label_ofi_estado" style="<?php echo $sStyleHidden_ofi_estado; ?>"><span id="id_label_ofi_estado"><?php echo $this->nm_new_label['ofi_estado']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_estado_line" id="hidden_field_data_ofi_estado" style="<?php echo $sStyleHidden_ofi_estado; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_estado_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_estado"]) &&  $this->nmgp_cmp_readonly["ofi_estado"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_estado'] = array(); 
    }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_estado  ORDER BY dec_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_estado'][] = $rs->fields[0];
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
   $ofi_estado_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_estado_1))
          {
              foreach ($this->ofi_estado_1 as $tmp_ofi_estado)
              {
                  if (trim($tmp_ofi_estado) === trim($cadaselect[1])) {$ofi_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_estado) && trim($this->ofi_estado) === trim($cadaselect[1])) {$ofi_estado_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ofi_estado" value="<?php echo $this->form_encode_input($ofi_estado) . "\">" . $ofi_estado_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ofi_estado();
   $x = 0 ; 
   $ofi_estado_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_estado_1))
          {
              foreach ($this->ofi_estado_1 as $tmp_ofi_estado)
              {
                  if (trim($tmp_ofi_estado) === trim($cadaselect[1])) {$ofi_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_estado) && trim($this->ofi_estado) === trim($cadaselect[1])) { $ofi_estado_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ofi_estado_look))
          {
              $ofi_estado_look = $this->ofi_estado;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ofi_estado\" class=\"css_ofi_estado_line\" style=\"" .  $sStyleReadLab_ofi_estado . "\">" . $this->form_format_readonly("ofi_estado", $this->form_encode_input($ofi_estado_look)) . "</span><span id=\"id_read_off_ofi_estado\" class=\"css_read_off_ofi_estado" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ofi_estado . "\">";
   echo " <span id=\"idAjaxSelect_ofi_estado\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ofi_estado_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ofi_estado\" name=\"ofi_estado\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ofi_estado) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ofi_estado)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_estado_text"></span></td></tr></table></td></tr></table></TD>
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
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="4" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf1\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_direccion'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['ofi_pais']))
   {
       $this->nm_new_label['ofi_pais'] = "" . $this->Ini->Nm_lang['lang_pais'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_pais = $this->ofi_pais;
   $sStyleHidden_ofi_pais = '';
   if (isset($this->nmgp_cmp_hidden['ofi_pais']) && $this->nmgp_cmp_hidden['ofi_pais'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_pais']);
       $sStyleHidden_ofi_pais = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_pais = 'display: none;';
   $sStyleReadInp_ofi_pais = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_pais']) && $this->nmgp_cmp_readonly['ofi_pais'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_pais']);
       $sStyleReadLab_ofi_pais = '';
       $sStyleReadInp_ofi_pais = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_pais']) && $this->nmgp_cmp_hidden['ofi_pais'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ofi_pais" value="<?php echo $this->form_encode_input($this->ofi_pais) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_pais_label" id="hidden_field_label_ofi_pais" style="<?php echo $sStyleHidden_ofi_pais; ?>"><span id="id_label_ofi_pais"><?php echo $this->nm_new_label['ofi_pais']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_pais_line" id="hidden_field_data_ofi_pais" style="<?php echo $sStyleHidden_ofi_pais; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_pais_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_pais"]) &&  $this->nmgp_cmp_readonly["ofi_pais"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_pais'] = array(); 
    }
   $nm_comando = "SELECT pai_id, pai_nombre  FROM sis_pais  ORDER BY pai_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_pais'][] = $rs->fields[0];
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
   $ofi_pais_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_pais_1))
          {
              foreach ($this->ofi_pais_1 as $tmp_ofi_pais)
              {
                  if (trim($tmp_ofi_pais) === trim($cadaselect[1])) {$ofi_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_pais) && trim($this->ofi_pais) === trim($cadaselect[1])) {$ofi_pais_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ofi_pais" value="<?php echo $this->form_encode_input($ofi_pais) . "\">" . $ofi_pais_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ofi_pais();
   $x = 0 ; 
   $ofi_pais_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_pais_1))
          {
              foreach ($this->ofi_pais_1 as $tmp_ofi_pais)
              {
                  if (trim($tmp_ofi_pais) === trim($cadaselect[1])) {$ofi_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_pais) && trim($this->ofi_pais) === trim($cadaselect[1])) { $ofi_pais_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ofi_pais_look))
          {
              $ofi_pais_look = $this->ofi_pais;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ofi_pais\" class=\"css_ofi_pais_line\" style=\"" .  $sStyleReadLab_ofi_pais . "\">" . $this->form_format_readonly("ofi_pais", $this->form_encode_input($ofi_pais_look)) . "</span><span id=\"id_read_off_ofi_pais\" class=\"css_read_off_ofi_pais" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ofi_pais . "\">";
   echo " <span id=\"idAjaxSelect_ofi_pais\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ofi_pais_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ofi_pais\" name=\"ofi_pais\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ofi_pais) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ofi_pais)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_pais_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_pais_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ofi_provincia']))
   {
       $this->nm_new_label['ofi_provincia'] = "" . $this->Ini->Nm_lang['lang_provincia'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_provincia = $this->ofi_provincia;
   $sStyleHidden_ofi_provincia = '';
   if (isset($this->nmgp_cmp_hidden['ofi_provincia']) && $this->nmgp_cmp_hidden['ofi_provincia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_provincia']);
       $sStyleHidden_ofi_provincia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_provincia = 'display: none;';
   $sStyleReadInp_ofi_provincia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_provincia']) && $this->nmgp_cmp_readonly['ofi_provincia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_provincia']);
       $sStyleReadLab_ofi_provincia = '';
       $sStyleReadInp_ofi_provincia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_provincia']) && $this->nmgp_cmp_hidden['ofi_provincia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ofi_provincia" value="<?php echo $this->form_encode_input($this->ofi_provincia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_provincia_label" id="hidden_field_label_ofi_provincia" style="<?php echo $sStyleHidden_ofi_provincia; ?>"><span id="id_label_ofi_provincia"><?php echo $this->nm_new_label['ofi_provincia']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_provincia_line" id="hidden_field_data_ofi_provincia" style="<?php echo $sStyleHidden_ofi_provincia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_provincia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_provincia"]) &&  $this->nmgp_cmp_readonly["ofi_provincia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_provincia'] = array(); 
}
if ($this->ofi_pais != "")
{ 
   $this->nm_clear_val("ofi_pais");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_provincia'] = array(); 
    }
   $nm_comando = "SELECT pro_id, pro_nombre  FROM sis_provincia  WHERE pro_pais='$this->ofi_pais' ORDER BY pro_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_provincia'][] = $rs->fields[0];
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
} 
   $x = 0; 
   $ofi_provincia_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_provincia_1))
          {
              foreach ($this->ofi_provincia_1 as $tmp_ofi_provincia)
              {
                  if (trim($tmp_ofi_provincia) === trim($cadaselect[1])) {$ofi_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_provincia) && trim($this->ofi_provincia) === trim($cadaselect[1])) {$ofi_provincia_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ofi_provincia" value="<?php echo $this->form_encode_input($ofi_provincia) . "\">" . $ofi_provincia_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ofi_provincia();
   $x = 0 ; 
   $ofi_provincia_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_provincia_1))
          {
              foreach ($this->ofi_provincia_1 as $tmp_ofi_provincia)
              {
                  if (trim($tmp_ofi_provincia) === trim($cadaselect[1])) {$ofi_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_provincia) && trim($this->ofi_provincia) === trim($cadaselect[1])) { $ofi_provincia_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ofi_provincia_look))
          {
              $ofi_provincia_look = $this->ofi_provincia;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ofi_provincia\" class=\"css_ofi_provincia_line\" style=\"" .  $sStyleReadLab_ofi_provincia . "\">" . $this->form_format_readonly("ofi_provincia", $this->form_encode_input($ofi_provincia_look)) . "</span><span id=\"id_read_off_ofi_provincia\" class=\"css_read_off_ofi_provincia" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ofi_provincia . "\">";
   echo " <span id=\"idAjaxSelect_ofi_provincia\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ofi_provincia_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ofi_provincia\" name=\"ofi_provincia\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ofi_provincia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ofi_provincia)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_provincia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_provincia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['ofi_ciudad']))
   {
       $this->nm_new_label['ofi_ciudad'] = "" . $this->Ini->Nm_lang['lang_ciudad'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_ciudad = $this->ofi_ciudad;
   $sStyleHidden_ofi_ciudad = '';
   if (isset($this->nmgp_cmp_hidden['ofi_ciudad']) && $this->nmgp_cmp_hidden['ofi_ciudad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_ciudad']);
       $sStyleHidden_ofi_ciudad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_ciudad = 'display: none;';
   $sStyleReadInp_ofi_ciudad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_ciudad']) && $this->nmgp_cmp_readonly['ofi_ciudad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_ciudad']);
       $sStyleReadLab_ofi_ciudad = '';
       $sStyleReadInp_ofi_ciudad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_ciudad']) && $this->nmgp_cmp_hidden['ofi_ciudad'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ofi_ciudad" value="<?php echo $this->form_encode_input($this->ofi_ciudad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_ciudad_label" id="hidden_field_label_ofi_ciudad" style="<?php echo $sStyleHidden_ofi_ciudad; ?>"><span id="id_label_ofi_ciudad"><?php echo $this->nm_new_label['ofi_ciudad']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_ciudad_line" id="hidden_field_data_ofi_ciudad" style="<?php echo $sStyleHidden_ofi_ciudad; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_ciudad_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_ciudad"]) &&  $this->nmgp_cmp_readonly["ofi_ciudad"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_ciudad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_ciudad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_ciudad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_ciudad'] = array(); 
}
if ($this->ofi_provincia != "")
{ 
   $this->nm_clear_val("ofi_provincia");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_ciudad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_ciudad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_ciudad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_ciudad'] = array(); 
    }
   $nm_comando = "SELECT can_id, can_nombre  FROM sis_canton  WHERE can_provincia='$this->ofi_provincia' ORDER BY can_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['Lookup_ofi_ciudad'][] = $rs->fields[0];
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
} 
   $x = 0; 
   $ofi_ciudad_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_ciudad_1))
          {
              foreach ($this->ofi_ciudad_1 as $tmp_ofi_ciudad)
              {
                  if (trim($tmp_ofi_ciudad) === trim($cadaselect[1])) {$ofi_ciudad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_ciudad) && trim($this->ofi_ciudad) === trim($cadaselect[1])) {$ofi_ciudad_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ofi_ciudad" value="<?php echo $this->form_encode_input($ofi_ciudad) . "\">" . $ofi_ciudad_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ofi_ciudad();
   $x = 0 ; 
   $ofi_ciudad_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ofi_ciudad_1))
          {
              foreach ($this->ofi_ciudad_1 as $tmp_ofi_ciudad)
              {
                  if (trim($tmp_ofi_ciudad) === trim($cadaselect[1])) {$ofi_ciudad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ofi_ciudad) && trim($this->ofi_ciudad) === trim($cadaselect[1])) { $ofi_ciudad_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ofi_ciudad_look))
          {
              $ofi_ciudad_look = $this->ofi_ciudad;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ofi_ciudad\" class=\"css_ofi_ciudad_line\" style=\"" .  $sStyleReadLab_ofi_ciudad . "\">" . $this->form_format_readonly("ofi_ciudad", $this->form_encode_input($ofi_ciudad_look)) . "</span><span id=\"id_read_off_ofi_ciudad\" class=\"css_read_off_ofi_ciudad" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ofi_ciudad . "\">";
   echo " <span id=\"idAjaxSelect_ofi_ciudad\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ofi_ciudad_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ofi_ciudad\" name=\"ofi_ciudad\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ofi_ciudad) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ofi_ciudad)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_ciudad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_ciudad_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ofi_sector']))
    {
        $this->nm_new_label['ofi_sector'] = "" . $this->Ini->Nm_lang['lang_sector'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_sector = $this->ofi_sector;
   $sStyleHidden_ofi_sector = '';
   if (isset($this->nmgp_cmp_hidden['ofi_sector']) && $this->nmgp_cmp_hidden['ofi_sector'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_sector']);
       $sStyleHidden_ofi_sector = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_sector = 'display: none;';
   $sStyleReadInp_ofi_sector = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_sector']) && $this->nmgp_cmp_readonly['ofi_sector'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_sector']);
       $sStyleReadLab_ofi_sector = '';
       $sStyleReadInp_ofi_sector = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_sector']) && $this->nmgp_cmp_hidden['ofi_sector'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ofi_sector" value="<?php echo $this->form_encode_input($ofi_sector) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_sector_label" id="hidden_field_label_ofi_sector" style="<?php echo $sStyleHidden_ofi_sector; ?>"><span id="id_label_ofi_sector"><?php echo $this->nm_new_label['ofi_sector']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_sector_line" id="hidden_field_data_ofi_sector" style="<?php echo $sStyleHidden_ofi_sector; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_sector_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_sector"]) &&  $this->nmgp_cmp_readonly["ofi_sector"] == "on") { 

 ?>
<input type="hidden" name="ofi_sector" value="<?php echo $this->form_encode_input($ofi_sector) . "\">" . $ofi_sector . ""; ?>
<?php } else { ?>
<span id="id_read_on_ofi_sector" class="sc-ui-readonly-ofi_sector css_ofi_sector_line" style="<?php echo $sStyleReadLab_ofi_sector; ?>"><?php echo $this->form_format_readonly("ofi_sector", $this->form_encode_input($this->ofi_sector)); ?></span><span id="id_read_off_ofi_sector" class="css_read_off_ofi_sector<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ofi_sector; ?>">
 <input class="sc-js-input scFormObjectOdd css_ofi_sector_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ofi_sector" type=text name="ofi_sector" value="<?php echo $this->form_encode_input($ofi_sector) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_sector_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_sector_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ofi_calle_principal']))
    {
        $this->nm_new_label['ofi_calle_principal'] = "" . $this->Ini->Nm_lang['lang_calle_principal'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_calle_principal = $this->ofi_calle_principal;
   $sStyleHidden_ofi_calle_principal = '';
   if (isset($this->nmgp_cmp_hidden['ofi_calle_principal']) && $this->nmgp_cmp_hidden['ofi_calle_principal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_calle_principal']);
       $sStyleHidden_ofi_calle_principal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_calle_principal = 'display: none;';
   $sStyleReadInp_ofi_calle_principal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_calle_principal']) && $this->nmgp_cmp_readonly['ofi_calle_principal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_calle_principal']);
       $sStyleReadLab_ofi_calle_principal = '';
       $sStyleReadInp_ofi_calle_principal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_calle_principal']) && $this->nmgp_cmp_hidden['ofi_calle_principal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ofi_calle_principal" value="<?php echo $this->form_encode_input($ofi_calle_principal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_calle_principal_label" id="hidden_field_label_ofi_calle_principal" style="<?php echo $sStyleHidden_ofi_calle_principal; ?>"><span id="id_label_ofi_calle_principal"><?php echo $this->nm_new_label['ofi_calle_principal']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_calle_principal_line" id="hidden_field_data_ofi_calle_principal" style="<?php echo $sStyleHidden_ofi_calle_principal; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_calle_principal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_calle_principal"]) &&  $this->nmgp_cmp_readonly["ofi_calle_principal"] == "on") { 

 ?>
<input type="hidden" name="ofi_calle_principal" value="<?php echo $this->form_encode_input($ofi_calle_principal) . "\">" . $ofi_calle_principal . ""; ?>
<?php } else { ?>
<span id="id_read_on_ofi_calle_principal" class="sc-ui-readonly-ofi_calle_principal css_ofi_calle_principal_line" style="<?php echo $sStyleReadLab_ofi_calle_principal; ?>"><?php echo $this->form_format_readonly("ofi_calle_principal", $this->form_encode_input($this->ofi_calle_principal)); ?></span><span id="id_read_off_ofi_calle_principal" class="css_read_off_ofi_calle_principal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ofi_calle_principal; ?>">
 <input class="sc-js-input scFormObjectOdd css_ofi_calle_principal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ofi_calle_principal" type=text name="ofi_calle_principal" value="<?php echo $this->form_encode_input($ofi_calle_principal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_calle_principal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_calle_principal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ofi_numero']))
    {
        $this->nm_new_label['ofi_numero'] = "" . $this->Ini->Nm_lang['lang_numero'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_numero = $this->ofi_numero;
   $sStyleHidden_ofi_numero = '';
   if (isset($this->nmgp_cmp_hidden['ofi_numero']) && $this->nmgp_cmp_hidden['ofi_numero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_numero']);
       $sStyleHidden_ofi_numero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_numero = 'display: none;';
   $sStyleReadInp_ofi_numero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_numero']) && $this->nmgp_cmp_readonly['ofi_numero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_numero']);
       $sStyleReadLab_ofi_numero = '';
       $sStyleReadInp_ofi_numero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_numero']) && $this->nmgp_cmp_hidden['ofi_numero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ofi_numero" value="<?php echo $this->form_encode_input($ofi_numero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_numero_label" id="hidden_field_label_ofi_numero" style="<?php echo $sStyleHidden_ofi_numero; ?>"><span id="id_label_ofi_numero"><?php echo $this->nm_new_label['ofi_numero']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_numero_line" id="hidden_field_data_ofi_numero" style="<?php echo $sStyleHidden_ofi_numero; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_numero_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_numero"]) &&  $this->nmgp_cmp_readonly["ofi_numero"] == "on") { 

 ?>
<input type="hidden" name="ofi_numero" value="<?php echo $this->form_encode_input($ofi_numero) . "\">" . $ofi_numero . ""; ?>
<?php } else { ?>
<span id="id_read_on_ofi_numero" class="sc-ui-readonly-ofi_numero css_ofi_numero_line" style="<?php echo $sStyleReadLab_ofi_numero; ?>"><?php echo $this->form_format_readonly("ofi_numero", $this->form_encode_input($this->ofi_numero)); ?></span><span id="id_read_off_ofi_numero" class="css_read_off_ofi_numero<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ofi_numero; ?>">
 <input class="sc-js-input scFormObjectOdd css_ofi_numero_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ofi_numero" type=text name="ofi_numero" value="<?php echo $this->form_encode_input($ofi_numero) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_numero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_numero_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ofi_calle_secundaria']))
    {
        $this->nm_new_label['ofi_calle_secundaria'] = "" . $this->Ini->Nm_lang['lang_calle_secundaria'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_calle_secundaria = $this->ofi_calle_secundaria;
   $sStyleHidden_ofi_calle_secundaria = '';
   if (isset($this->nmgp_cmp_hidden['ofi_calle_secundaria']) && $this->nmgp_cmp_hidden['ofi_calle_secundaria'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_calle_secundaria']);
       $sStyleHidden_ofi_calle_secundaria = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_calle_secundaria = 'display: none;';
   $sStyleReadInp_ofi_calle_secundaria = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_calle_secundaria']) && $this->nmgp_cmp_readonly['ofi_calle_secundaria'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_calle_secundaria']);
       $sStyleReadLab_ofi_calle_secundaria = '';
       $sStyleReadInp_ofi_calle_secundaria = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_calle_secundaria']) && $this->nmgp_cmp_hidden['ofi_calle_secundaria'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ofi_calle_secundaria" value="<?php echo $this->form_encode_input($ofi_calle_secundaria) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_calle_secundaria_label" id="hidden_field_label_ofi_calle_secundaria" style="<?php echo $sStyleHidden_ofi_calle_secundaria; ?>"><span id="id_label_ofi_calle_secundaria"><?php echo $this->nm_new_label['ofi_calle_secundaria']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_calle_secundaria_line" id="hidden_field_data_ofi_calle_secundaria" style="<?php echo $sStyleHidden_ofi_calle_secundaria; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_calle_secundaria_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_calle_secundaria"]) &&  $this->nmgp_cmp_readonly["ofi_calle_secundaria"] == "on") { 

 ?>
<input type="hidden" name="ofi_calle_secundaria" value="<?php echo $this->form_encode_input($ofi_calle_secundaria) . "\">" . $ofi_calle_secundaria . ""; ?>
<?php } else { ?>
<span id="id_read_on_ofi_calle_secundaria" class="sc-ui-readonly-ofi_calle_secundaria css_ofi_calle_secundaria_line" style="<?php echo $sStyleReadLab_ofi_calle_secundaria; ?>"><?php echo $this->form_format_readonly("ofi_calle_secundaria", $this->form_encode_input($this->ofi_calle_secundaria)); ?></span><span id="id_read_off_ofi_calle_secundaria" class="css_read_off_ofi_calle_secundaria<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ofi_calle_secundaria; ?>">
 <input class="sc-js-input scFormObjectOdd css_ofi_calle_secundaria_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ofi_calle_secundaria" type=text name="ofi_calle_secundaria" value="<?php echo $this->form_encode_input($ofi_calle_secundaria) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_calle_secundaria_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_calle_secundaria_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ofi_referencia']))
    {
        $this->nm_new_label['ofi_referencia'] = "" . $this->Ini->Nm_lang['lang_referencia'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ofi_referencia = $this->ofi_referencia;
   $sStyleHidden_ofi_referencia = '';
   if (isset($this->nmgp_cmp_hidden['ofi_referencia']) && $this->nmgp_cmp_hidden['ofi_referencia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ofi_referencia']);
       $sStyleHidden_ofi_referencia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ofi_referencia = 'display: none;';
   $sStyleReadInp_ofi_referencia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ofi_referencia']) && $this->nmgp_cmp_readonly['ofi_referencia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ofi_referencia']);
       $sStyleReadLab_ofi_referencia = '';
       $sStyleReadInp_ofi_referencia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ofi_referencia']) && $this->nmgp_cmp_hidden['ofi_referencia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ofi_referencia" value="<?php echo $this->form_encode_input($ofi_referencia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ofi_referencia_label" id="hidden_field_label_ofi_referencia" style="<?php echo $sStyleHidden_ofi_referencia; ?>"><span id="id_label_ofi_referencia"><?php echo $this->nm_new_label['ofi_referencia']; ?></span></TD>
    <TD class="scFormDataOdd css_ofi_referencia_line" id="hidden_field_data_ofi_referencia" style="<?php echo $sStyleHidden_ofi_referencia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ofi_referencia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ofi_referencia"]) &&  $this->nmgp_cmp_readonly["ofi_referencia"] == "on") { 

 ?>
<input type="hidden" name="ofi_referencia" value="<?php echo $this->form_encode_input($ofi_referencia) . "\">" . $ofi_referencia . ""; ?>
<?php } else { ?>
<span id="id_read_on_ofi_referencia" class="sc-ui-readonly-ofi_referencia css_ofi_referencia_line" style="<?php echo $sStyleReadLab_ofi_referencia; ?>"><?php echo $this->form_format_readonly("ofi_referencia", $this->form_encode_input($this->ofi_referencia)); ?></span><span id="id_read_off_ofi_referencia" class="css_read_off_ofi_referencia<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ofi_referencia; ?>">
 <input class="sc-js-input scFormObjectOdd css_ofi_referencia_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ofi_referencia" type=text name="ofi_referencia" value="<?php echo $this->form_encode_input($ofi_referencia) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ofi_referencia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ofi_referencia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
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
  $nm_sc_blocos_da_pag = array(0,1);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_sis_oficina");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_sis_oficina");
 parent.scAjaxDetailHeight("form_sis_oficina", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_sis_oficina", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_sis_oficina", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['sc_modal'])
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
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-3").length && $("#sc_b_upd_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-4").length && $("#sc_b_del_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_oficina']['buttonStatus'] = $this->nmgp_botoes;
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
