<?php
class form_del_direccion_entrega_pedido_form extends form_del_direccion_entrega_pedido_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_direccion_entrega_pedido"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_direccion_entrega_pedido"); } ?></TITLE>
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
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
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
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_desc ?>'], 
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_asc ?>']{opacity:1!important;} 
   .scFormLabelOddMult a img{opacity:0;transition:all .2s;} 
   .scFormLabelOddMult:HOVER a img{opacity:1;transition:all .2s;} 
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_direccion_entrega_pedido/form_del_direccion_entrega_pedido_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_direccion_entrega_pedido_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['last'] : 'off'); ?>";
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

 function nm_field_disabled(Fields, Opt, Seq, Opcao) {
  if (Opcao != null) {
      opcao = Opcao;
  }
  else {
      opcao = "<?php if ($GLOBALS["erro_incl"] == 1) {echo "novo";} else {echo $this->nmgp_opcao;} ?>";
  }
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
     ini = 1;
     xx = document.F1.sc_contr_vert.value;
     if (Seq != null) 
     {
         ini = parseInt(Seq);
         xx  = ini + 1;
     }
     if (F_name == "dep_identificacion_quien_recibe_")
     {
        for (ii=ini; ii < xx; ii++)
        {
            cmp_name = "dep_identificacion_quien_recibe_" + ii;
            $('input[name=' + cmp_name + ']').prop("disabled", F_opc);
            if (F_opc == "disabled" || F_opc == true) {
                $('input[name=' + cmp_name + ']').addClass("scFormInputDisabledMult");
            }
            else {
                $('input[name=' + cmp_name + ']').removeClass("scFormInputDisabledMult");
            }
        }
     }
     if (F_name == "dep_nombre_quien_recibie_")
     {
        for (ii=ini; ii < xx; ii++)
        {
            cmp_name = "dep_nombre_quien_recibie_" + ii;
            $('input[name=' + cmp_name + ']').prop("disabled", F_opc);
            if (F_opc == "disabled" || F_opc == true) {
                $('input[name=' + cmp_name + ']').addClass("scFormInputDisabledMult");
            }
            else {
                $('input[name=' + cmp_name + ']').removeClass("scFormInputDisabledMult");
            }
        }
     }
     if (F_name == "dep_pais_")
     {
        for (ii=ini; ii < xx; ii++)
        {
            cmp_name = "dep_pais_" + ii;
            $('select[name=' + cmp_name + ']').prop("disabled", F_opc);
            if (F_opc == "disabled" || F_opc == true) {
                $('select[name=' + cmp_name + ']').addClass("scFormInputDisabledMult");
            }
            else {
                $('select[name=' + cmp_name + ']').removeClass("scFormInputDisabledMult");
            }
        }
     }
     if (F_name == "dep_provincial_")
     {
        for (ii=ini; ii < xx; ii++)
        {
            cmp_name = "dep_provincial_" + ii;
            $('select[name=' + cmp_name + ']').prop("disabled", F_opc);
            if (F_opc == "disabled" || F_opc == true) {
                $('select[name=' + cmp_name + ']').addClass("scFormInputDisabledMult");
            }
            else {
                $('select[name=' + cmp_name + ']').removeClass("scFormInputDisabledMult");
            }
        }
     }
     if (F_name == "dep_ciudad_")
     {
        for (ii=ini; ii < xx; ii++)
        {
            cmp_name = "dep_ciudad_" + ii;
            $('select[name=' + cmp_name + ']').prop("disabled", F_opc);
            if (F_opc == "disabled" || F_opc == true) {
                $('select[name=' + cmp_name + ']').addClass("scFormInputDisabledMult");
            }
            else {
                $('select[name=' + cmp_name + ']').removeClass("scFormInputDisabledMult");
            }
        }
     }
     if (F_name == "dep_direccion_")
     {
        for (ii=ini; ii < xx; ii++)
        {
            cmp_name = "dep_direccion_" + ii;
            $('input[name=' + cmp_name + ']').prop("disabled", F_opc);
            if (F_opc == "disabled" || F_opc == true) {
                $('input[name=' + cmp_name + ']').addClass("scFormInputDisabledMult");
            }
            else {
                $('input[name=' + cmp_name + ']').removeClass("scFormInputDisabledMult");
            }
        }
     }
     if (F_name == "dep_telefono_")
     {
        for (ii=ini; ii < xx; ii++)
        {
            cmp_name = "dep_telefono_" + ii;
            $('input[name=' + cmp_name + ']').prop("disabled", F_opc);
            if (F_opc == "disabled" || F_opc == true) {
                $('input[name=' + cmp_name + ']').addClass("scFormInputDisabledMult");
            }
            else {
                $('input[name=' + cmp_name + ']').removeClass("scFormInputDisabledMult");
            }
        }
     }
  }
 } // nm_field_disabled
 function nm_field_disabled_reset() {
  for (var i = 0; i <= iAjaxNewLine; i++) {
    nm_field_disabled("dep_identificacion_quien_recibe_=enabled", "", i);
    nm_field_disabled("dep_nombre_quien_recibie_=enabled", "", i);
    nm_field_disabled("dep_pais_=enabled", "", i);
    nm_field_disabled("dep_provincial_=enabled", "", i);
    nm_field_disabled("dep_ciudad_=enabled", "", i);
    nm_field_disabled("dep_direccion_=enabled", "", i);
    nm_field_disabled("dep_telefono_=enabled", "", i);
  }
 } // nm_field_disabled_reset
<?php

include_once('form_del_direccion_entrega_pedido_jquery.php');

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


  scJQGeneralAdd();

  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['link_info']['remove_border']) {
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
 include_once("form_del_direccion_entrega_pedido_js0.php");
?>
<script type="text/javascript"> 
  sc_quant_excl = <?php if (!isset($sc_check_excl)) {$sc_check_excl = array();} echo count($sc_check_excl); ?>; 
  <?php if (!isset($sc_check_incl)) {$sc_check_incl = array();}?>; 
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
$_SESSION['scriptcase']['error_span_title']['form_del_direccion_entrega_pedido'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_direccion_entrega_pedido'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['empty_filter'] = true;
       }
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
   if (!isset($this->nmgp_cmp_hidden['dep_id_']))
   {
       $this->nmgp_cmp_hidden['dep_id_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dep_id_pedido_']))
   {
       $this->nmgp_cmp_hidden['dep_id_pedido_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['dep_pais_']))
   {
       $this->nmgp_cmp_hidden['dep_pais_'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
$labelRowCount = 0;
?>
   <tr class="sc-ui-header-row" id="sc-id-fixed-headers-row-<?php echo $labelRowCount++ ?>">
<?php
$orderColName = '';
$orderColOrient = '';
$orderColRule = '';
?>
    <script type="text/javascript">
    var orderColName = "", orderColRule = "";
    var alphaIconAsc = "fas fa-sort-alpha-down sc-form-order-icon sc-form-order-icon-unused";
    var alphaIconDesc = "fas fa-sort-alpha-down-alt sc-form-order-icon sc-form-order-icon-unused";
    var numericIconAsc = "fas fa-sort-numeric-down sc-form-order-icon sc-form-order-icon-unused";
    var numericIconDesc = "fas fa-sort-numeric-down-alt sc-form-order-icon sc-form-order-icon-unused";
    var orderFieldList = [];
    function scSetOrderColumn(clickedColumn)
    {
        let fieldClass;
        scResetOrderColumn();
        if (clickedColumn != orderColName) {
            orderColName = clickedColumn;
            orderColRule = scGetDefaultFieldOrder(orderColName);
        }
        else if ("" != orderColName) {
            orderColRule = "asc" == orderColRule ? "desc" : "asc";
        }
        else {
            orderColName = "";
            orderColRule = "";
        }
        if ("" != orderColName) {
            if (scIsFieldNumeric(orderColName)) {
                if ('desc' == orderColRule) {
                    fieldClass = numericIconDesc;
                } else {
                    fieldClass = numericIconAsc;
                }
            } else {
                if ('desc' == orderColRule) {
                    fieldClass = alphaIconDesc;
                } else {
                    fieldClass = alphaIconAsc;
                }
            }
            $("#hidden_field_label_" + orderColName + "_").find(".sc-form-order-icon").attr("class", fieldClass).removeClass("sc-form-order-icon-unused");
        }
    }
    function scResetOrderColumn()
    {
        if ("" == orderColName) {
            return;
        }
        $("#hidden_field_label_" + orderColName + "_").find(".sc-form-order-icon").attr("class", scGetDefaultFieldOrderIcon(orderColName));
    }
    function scIsFieldNumeric(fieldName)
    {
        switch (fieldName) {
            case "dep_id":
                return true;
            case "dep_id_pedido":
                return true;
            default:
                return false;
        }
        return false;
    }
    function scGetDefaultFieldOrder(fieldName)
    {
        switch (fieldName) {
            case "dep_id":
                return 'desc';
            case "dep_id_pedido":
                return 'desc';
            case "dep_pais":
                return 'desc';
            case "dep_provincial":
                return 'desc';
            case "dep_ciudad":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
    function scGetDefaultFieldOrderIcon(fieldName)
    {
        if (scIsFieldNumeric(fieldName)) {
            if ('desc' == scGetDefaultFieldOrder(fieldName)) {
                fieldClass = numericIconDesc;
            } else {
                fieldClass = numericIconAsc;
            }
        } else {
            if ('desc' == scGetDefaultFieldOrder(fieldName)) {
                fieldClass = alphaIconDesc;
            } else {
                fieldClass = alphaIconAsc;
            }
        }
        return fieldClass;
    }
    </script>
<?php
     $Col_span = "";


    ?>

    <TD class="scFormLabelOddMult sc-col-title" style="display: none;" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult sc-col-title"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult sc-col-title"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if ((!isset($this->nmgp_cmp_hidden['dep_id_']) || $this->nmgp_cmp_hidden['dep_id_'] == 'on') && ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir"))) { 
      if (!isset($this->nm_new_label['dep_id_'])) {
          $this->nm_new_label['dep_id_'] = "Dep Id"; } ?>
<?php
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;

        // label
        $label_labelContent = $this->nm_new_label['dep_id_'];
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
?>

    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_dep_id__label sc-col-title" id="hidden_field_label_dep_id_" style="<?php echo $sStyleHidden_dep_id_; ?>" > <?php echo $label_final ?> </TD>
   <?php $this->form_fixed_column_no++;}?>

   <?php
    $sStyleHidden_dep_id_pedido_ = '';
    if (isset($this->nmgp_cmp_hidden['dep_id_pedido_']) && $this->nmgp_cmp_hidden['dep_id_pedido_'] == 'off') {
        $sStyleHidden_dep_id_pedido_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['dep_id_pedido_']) || $this->nmgp_cmp_hidden['dep_id_pedido_'] == 'on') {
        if (!isset($this->nm_new_label['dep_id_pedido_'])) {
            $this->nm_new_label['dep_id_pedido_'] = "Dep Id Pedido";
        }
        $SC_Label = "" . $this->nm_new_label['dep_id_pedido_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_dep_id_pedido__label sc-col-title" id="hidden_field_label_dep_id_pedido_" style="<?php echo $sStyleHidden_dep_id_pedido_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_dep_identificacion_quien_recibe_ = '';
    if (isset($this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_']) && $this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_'] == 'off') {
        $sStyleHidden_dep_identificacion_quien_recibe_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_']) || $this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_'] == 'on') {
        if (!isset($this->nm_new_label['dep_identificacion_quien_recibe_'])) {
            $this->nm_new_label['dep_identificacion_quien_recibe_'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['dep_identificacion_quien_recibe_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_dep_identificacion_quien_recibe__label sc-col-title" id="hidden_field_label_dep_identificacion_quien_recibe_" style="<?php echo $sStyleHidden_dep_identificacion_quien_recibe_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_dep_nombre_quien_recibie_ = '';
    if (isset($this->nmgp_cmp_hidden['dep_nombre_quien_recibie_']) && $this->nmgp_cmp_hidden['dep_nombre_quien_recibie_'] == 'off') {
        $sStyleHidden_dep_nombre_quien_recibie_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['dep_nombre_quien_recibie_']) || $this->nmgp_cmp_hidden['dep_nombre_quien_recibie_'] == 'on') {
        if (!isset($this->nm_new_label['dep_nombre_quien_recibie_'])) {
            $this->nm_new_label['dep_nombre_quien_recibie_'] = "" . $this->Ini->Nm_lang['lang_nombre'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['dep_nombre_quien_recibie_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_dep_nombre_quien_recibie__label sc-col-title" id="hidden_field_label_dep_nombre_quien_recibie_" style="<?php echo $sStyleHidden_dep_nombre_quien_recibie_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_dep_pais_ = '';
    if (isset($this->nmgp_cmp_hidden['dep_pais_']) && $this->nmgp_cmp_hidden['dep_pais_'] == 'off') {
        $sStyleHidden_dep_pais_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['dep_pais_']) || $this->nmgp_cmp_hidden['dep_pais_'] == 'on') {
        if (!isset($this->nm_new_label['dep_pais_'])) {
            $this->nm_new_label['dep_pais_'] = "" . $this->Ini->Nm_lang['lang_pais'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['dep_pais_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_dep_pais__label sc-col-title" id="hidden_field_label_dep_pais_" style="<?php echo $sStyleHidden_dep_pais_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_dep_provincial_ = '';
    if (isset($this->nmgp_cmp_hidden['dep_provincial_']) && $this->nmgp_cmp_hidden['dep_provincial_'] == 'off') {
        $sStyleHidden_dep_provincial_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['dep_provincial_']) || $this->nmgp_cmp_hidden['dep_provincial_'] == 'on') {
        if (!isset($this->nm_new_label['dep_provincial_'])) {
            $this->nm_new_label['dep_provincial_'] = "" . $this->Ini->Nm_lang['lang_provincia'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['dep_provincial_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_dep_provincial__label sc-col-title" id="hidden_field_label_dep_provincial_" style="<?php echo $sStyleHidden_dep_provincial_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_dep_ciudad_ = '';
    if (isset($this->nmgp_cmp_hidden['dep_ciudad_']) && $this->nmgp_cmp_hidden['dep_ciudad_'] == 'off') {
        $sStyleHidden_dep_ciudad_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['dep_ciudad_']) || $this->nmgp_cmp_hidden['dep_ciudad_'] == 'on') {
        if (!isset($this->nm_new_label['dep_ciudad_'])) {
            $this->nm_new_label['dep_ciudad_'] = "" . $this->Ini->Nm_lang['lang_canton'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['dep_ciudad_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_dep_ciudad__label sc-col-title" id="hidden_field_label_dep_ciudad_" style="<?php echo $sStyleHidden_dep_ciudad_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_dep_direccion_ = '';
    if (isset($this->nmgp_cmp_hidden['dep_direccion_']) && $this->nmgp_cmp_hidden['dep_direccion_'] == 'off') {
        $sStyleHidden_dep_direccion_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['dep_direccion_']) || $this->nmgp_cmp_hidden['dep_direccion_'] == 'on') {
        if (!isset($this->nm_new_label['dep_direccion_'])) {
            $this->nm_new_label['dep_direccion_'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['dep_direccion_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_dep_direccion__label sc-col-title" id="hidden_field_label_dep_direccion_" style="<?php echo $sStyleHidden_dep_direccion_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_dep_telefono_ = '';
    if (isset($this->nmgp_cmp_hidden['dep_telefono_']) && $this->nmgp_cmp_hidden['dep_telefono_'] == 'off') {
        $sStyleHidden_dep_telefono_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['dep_telefono_']) || $this->nmgp_cmp_hidden['dep_telefono_'] == 'on') {
        if (!isset($this->nm_new_label['dep_telefono_'])) {
            $this->nm_new_label['dep_telefono_'] = "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
        }
        $SC_Label = "" . $this->nm_new_label['dep_telefono_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_dep_telefono__label sc-col-title" id="hidden_field_label_dep_telefono_" style="<?php echo $sStyleHidden_dep_telefono_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     orderColRule = "<?php echo $orderColRule ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert, $sc_check_incl, $sc_check_excl; 
   $sc_hidden_no = 1; $sc_hidden_yes = 0;
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_form_del_direccion_entrega_pedido);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_del_direccion_entrega_pedido = $this->form_vert_form_del_direccion_entrega_pedido;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_del_direccion_entrega_pedido))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['dep_id_']))
           {
               $this->nmgp_cmp_readonly['dep_id_'] = 'on';
           }
   foreach ($this->form_vert_form_del_direccion_entrega_pedido as $sc_seq_vert => $sc_lixo)
   {
       $this->form_fixed_column_no = 0;
       $this->loadRecordState($sc_seq_vert);
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['dep_id_'] = true;
           $this->nmgp_cmp_readonly['dep_id_pedido_'] = true;
           $this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_'] = true;
           $this->nmgp_cmp_readonly['dep_nombre_quien_recibie_'] = true;
           $this->nmgp_cmp_readonly['dep_pais_'] = true;
           $this->nmgp_cmp_readonly['dep_provincial_'] = true;
           $this->nmgp_cmp_readonly['dep_ciudad_'] = true;
           $this->nmgp_cmp_readonly['dep_direccion_'] = true;
           $this->nmgp_cmp_readonly['dep_telefono_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['dep_id_']) || $this->nmgp_cmp_readonly['dep_id_'] != "on") {$this->nmgp_cmp_readonly['dep_id_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['dep_id_pedido_']) || $this->nmgp_cmp_readonly['dep_id_pedido_'] != "on") {$this->nmgp_cmp_readonly['dep_id_pedido_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_']) || $this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_'] != "on") {$this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['dep_nombre_quien_recibie_']) || $this->nmgp_cmp_readonly['dep_nombre_quien_recibie_'] != "on") {$this->nmgp_cmp_readonly['dep_nombre_quien_recibie_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['dep_pais_']) || $this->nmgp_cmp_readonly['dep_pais_'] != "on") {$this->nmgp_cmp_readonly['dep_pais_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['dep_provincial_']) || $this->nmgp_cmp_readonly['dep_provincial_'] != "on") {$this->nmgp_cmp_readonly['dep_provincial_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['dep_ciudad_']) || $this->nmgp_cmp_readonly['dep_ciudad_'] != "on") {$this->nmgp_cmp_readonly['dep_ciudad_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['dep_direccion_']) || $this->nmgp_cmp_readonly['dep_direccion_'] != "on") {$this->nmgp_cmp_readonly['dep_direccion_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['dep_telefono_']) || $this->nmgp_cmp_readonly['dep_telefono_'] != "on") {$this->nmgp_cmp_readonly['dep_telefono_'] = false;}
       }
            if (isset($this->form_vert_form_preenchimento[$sc_seq_vert])) {
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
            }
        $this->dep_id_ = $this->form_vert_form_del_direccion_entrega_pedido[$sc_seq_vert]['dep_id_']; 
       $dep_id_ = $this->dep_id_; 
       if (!isset($this->nmgp_cmp_hidden['dep_id_']))
       {
           $this->nmgp_cmp_hidden['dep_id_'] = 'off';
       }
       $sStyleHidden_dep_id_ = '';
       if (isset($sCheckRead_dep_id_))
       {
           unset($sCheckRead_dep_id_);
       }
       if (isset($this->nmgp_cmp_readonly['dep_id_']))
       {
           $sCheckRead_dep_id_ = $this->nmgp_cmp_readonly['dep_id_'];
       }
       if (isset($this->nmgp_cmp_hidden['dep_id_']) && $this->nmgp_cmp_hidden['dep_id_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dep_id_']);
           $sStyleHidden_dep_id_ = 'display: none;';
       }
       $bTestReadOnly_dep_id_ = true;
       $sStyleReadLab_dep_id_ = 'display: none;';
       $sStyleReadInp_dep_id_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["dep_id_"]) &&  $this->nmgp_cmp_readonly["dep_id_"] == "on"))
       {
           $bTestReadOnly_dep_id_ = false;
           unset($this->nmgp_cmp_readonly['dep_id_']);
           $sStyleReadLab_dep_id_ = '';
           $sStyleReadInp_dep_id_ = 'display: none;';
       }
       $this->dep_id_pedido_ = $this->form_vert_form_del_direccion_entrega_pedido[$sc_seq_vert]['dep_id_pedido_']; 
       $dep_id_pedido_ = $this->dep_id_pedido_; 
       if (!isset($this->nmgp_cmp_hidden['dep_id_pedido_']))
       {
           $this->nmgp_cmp_hidden['dep_id_pedido_'] = 'off';
       }
       $sStyleHidden_dep_id_pedido_ = '';
       if (isset($sCheckRead_dep_id_pedido_))
       {
           unset($sCheckRead_dep_id_pedido_);
       }
       if (isset($this->nmgp_cmp_readonly['dep_id_pedido_']))
       {
           $sCheckRead_dep_id_pedido_ = $this->nmgp_cmp_readonly['dep_id_pedido_'];
       }
       if (isset($this->nmgp_cmp_hidden['dep_id_pedido_']) && $this->nmgp_cmp_hidden['dep_id_pedido_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dep_id_pedido_']);
           $sStyleHidden_dep_id_pedido_ = 'display: none;';
       }
       $bTestReadOnly_dep_id_pedido_ = true;
       $sStyleReadLab_dep_id_pedido_ = 'display: none;';
       $sStyleReadInp_dep_id_pedido_ = '';
       if (isset($this->nmgp_cmp_readonly['dep_id_pedido_']) && $this->nmgp_cmp_readonly['dep_id_pedido_'] == 'on')
       {
           $bTestReadOnly_dep_id_pedido_ = false;
           unset($this->nmgp_cmp_readonly['dep_id_pedido_']);
           $sStyleReadLab_dep_id_pedido_ = '';
           $sStyleReadInp_dep_id_pedido_ = 'display: none;';
       }
       $this->dep_identificacion_quien_recibe_ = $this->form_vert_form_del_direccion_entrega_pedido[$sc_seq_vert]['dep_identificacion_quien_recibe_']; 
       $dep_identificacion_quien_recibe_ = $this->dep_identificacion_quien_recibe_; 
       $sStyleHidden_dep_identificacion_quien_recibe_ = '';
       if (isset($sCheckRead_dep_identificacion_quien_recibe_))
       {
           unset($sCheckRead_dep_identificacion_quien_recibe_);
       }
       if (isset($this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_']))
       {
           $sCheckRead_dep_identificacion_quien_recibe_ = $this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_'];
       }
       if (isset($this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_']) && $this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_']);
           $sStyleHidden_dep_identificacion_quien_recibe_ = 'display: none;';
       }
       $bTestReadOnly_dep_identificacion_quien_recibe_ = true;
       $sStyleReadLab_dep_identificacion_quien_recibe_ = 'display: none;';
       $sStyleReadInp_dep_identificacion_quien_recibe_ = '';
       if (isset($this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_']) && $this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_'] == 'on')
       {
           $bTestReadOnly_dep_identificacion_quien_recibe_ = false;
           unset($this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_']);
           $sStyleReadLab_dep_identificacion_quien_recibe_ = '';
           $sStyleReadInp_dep_identificacion_quien_recibe_ = 'display: none;';
       }
       $this->dep_nombre_quien_recibie_ = $this->form_vert_form_del_direccion_entrega_pedido[$sc_seq_vert]['dep_nombre_quien_recibie_']; 
       $dep_nombre_quien_recibie_ = $this->dep_nombre_quien_recibie_; 
       $sStyleHidden_dep_nombre_quien_recibie_ = '';
       if (isset($sCheckRead_dep_nombre_quien_recibie_))
       {
           unset($sCheckRead_dep_nombre_quien_recibie_);
       }
       if (isset($this->nmgp_cmp_readonly['dep_nombre_quien_recibie_']))
       {
           $sCheckRead_dep_nombre_quien_recibie_ = $this->nmgp_cmp_readonly['dep_nombre_quien_recibie_'];
       }
       if (isset($this->nmgp_cmp_hidden['dep_nombre_quien_recibie_']) && $this->nmgp_cmp_hidden['dep_nombre_quien_recibie_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dep_nombre_quien_recibie_']);
           $sStyleHidden_dep_nombre_quien_recibie_ = 'display: none;';
       }
       $bTestReadOnly_dep_nombre_quien_recibie_ = true;
       $sStyleReadLab_dep_nombre_quien_recibie_ = 'display: none;';
       $sStyleReadInp_dep_nombre_quien_recibie_ = '';
       if (isset($this->nmgp_cmp_readonly['dep_nombre_quien_recibie_']) && $this->nmgp_cmp_readonly['dep_nombre_quien_recibie_'] == 'on')
       {
           $bTestReadOnly_dep_nombre_quien_recibie_ = false;
           unset($this->nmgp_cmp_readonly['dep_nombre_quien_recibie_']);
           $sStyleReadLab_dep_nombre_quien_recibie_ = '';
           $sStyleReadInp_dep_nombre_quien_recibie_ = 'display: none;';
       }
       $this->dep_pais_ = $this->form_vert_form_del_direccion_entrega_pedido[$sc_seq_vert]['dep_pais_']; 
       $dep_pais_ = $this->dep_pais_; 
       if (!isset($this->nmgp_cmp_hidden['dep_pais_']))
       {
           $this->nmgp_cmp_hidden['dep_pais_'] = 'off';
       }
       $sStyleHidden_dep_pais_ = '';
       if (isset($sCheckRead_dep_pais_))
       {
           unset($sCheckRead_dep_pais_);
       }
       if (isset($this->nmgp_cmp_readonly['dep_pais_']))
       {
           $sCheckRead_dep_pais_ = $this->nmgp_cmp_readonly['dep_pais_'];
       }
       if (isset($this->nmgp_cmp_hidden['dep_pais_']) && $this->nmgp_cmp_hidden['dep_pais_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dep_pais_']);
           $sStyleHidden_dep_pais_ = 'display: none;';
       }
       $bTestReadOnly_dep_pais_ = true;
       $sStyleReadLab_dep_pais_ = 'display: none;';
       $sStyleReadInp_dep_pais_ = '';
       if (isset($this->nmgp_cmp_readonly['dep_pais_']) && $this->nmgp_cmp_readonly['dep_pais_'] == 'on')
       {
           $bTestReadOnly_dep_pais_ = false;
           unset($this->nmgp_cmp_readonly['dep_pais_']);
           $sStyleReadLab_dep_pais_ = '';
           $sStyleReadInp_dep_pais_ = 'display: none;';
       }
       $this->dep_provincial_ = $this->form_vert_form_del_direccion_entrega_pedido[$sc_seq_vert]['dep_provincial_']; 
       $dep_provincial_ = $this->dep_provincial_; 
       $sStyleHidden_dep_provincial_ = '';
       if (isset($sCheckRead_dep_provincial_))
       {
           unset($sCheckRead_dep_provincial_);
       }
       if (isset($this->nmgp_cmp_readonly['dep_provincial_']))
       {
           $sCheckRead_dep_provincial_ = $this->nmgp_cmp_readonly['dep_provincial_'];
       }
       if (isset($this->nmgp_cmp_hidden['dep_provincial_']) && $this->nmgp_cmp_hidden['dep_provincial_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dep_provincial_']);
           $sStyleHidden_dep_provincial_ = 'display: none;';
       }
       $bTestReadOnly_dep_provincial_ = true;
       $sStyleReadLab_dep_provincial_ = 'display: none;';
       $sStyleReadInp_dep_provincial_ = '';
       if (isset($this->nmgp_cmp_readonly['dep_provincial_']) && $this->nmgp_cmp_readonly['dep_provincial_'] == 'on')
       {
           $bTestReadOnly_dep_provincial_ = false;
           unset($this->nmgp_cmp_readonly['dep_provincial_']);
           $sStyleReadLab_dep_provincial_ = '';
           $sStyleReadInp_dep_provincial_ = 'display: none;';
       }
       $this->dep_ciudad_ = $this->form_vert_form_del_direccion_entrega_pedido[$sc_seq_vert]['dep_ciudad_']; 
       $dep_ciudad_ = $this->dep_ciudad_; 
       $sStyleHidden_dep_ciudad_ = '';
       if (isset($sCheckRead_dep_ciudad_))
       {
           unset($sCheckRead_dep_ciudad_);
       }
       if (isset($this->nmgp_cmp_readonly['dep_ciudad_']))
       {
           $sCheckRead_dep_ciudad_ = $this->nmgp_cmp_readonly['dep_ciudad_'];
       }
       if (isset($this->nmgp_cmp_hidden['dep_ciudad_']) && $this->nmgp_cmp_hidden['dep_ciudad_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dep_ciudad_']);
           $sStyleHidden_dep_ciudad_ = 'display: none;';
       }
       $bTestReadOnly_dep_ciudad_ = true;
       $sStyleReadLab_dep_ciudad_ = 'display: none;';
       $sStyleReadInp_dep_ciudad_ = '';
       if (isset($this->nmgp_cmp_readonly['dep_ciudad_']) && $this->nmgp_cmp_readonly['dep_ciudad_'] == 'on')
       {
           $bTestReadOnly_dep_ciudad_ = false;
           unset($this->nmgp_cmp_readonly['dep_ciudad_']);
           $sStyleReadLab_dep_ciudad_ = '';
           $sStyleReadInp_dep_ciudad_ = 'display: none;';
       }
       $this->dep_direccion_ = $this->form_vert_form_del_direccion_entrega_pedido[$sc_seq_vert]['dep_direccion_']; 
       $dep_direccion_ = $this->dep_direccion_; 
       $sStyleHidden_dep_direccion_ = '';
       if (isset($sCheckRead_dep_direccion_))
       {
           unset($sCheckRead_dep_direccion_);
       }
       if (isset($this->nmgp_cmp_readonly['dep_direccion_']))
       {
           $sCheckRead_dep_direccion_ = $this->nmgp_cmp_readonly['dep_direccion_'];
       }
       if (isset($this->nmgp_cmp_hidden['dep_direccion_']) && $this->nmgp_cmp_hidden['dep_direccion_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dep_direccion_']);
           $sStyleHidden_dep_direccion_ = 'display: none;';
       }
       $bTestReadOnly_dep_direccion_ = true;
       $sStyleReadLab_dep_direccion_ = 'display: none;';
       $sStyleReadInp_dep_direccion_ = '';
       if (isset($this->nmgp_cmp_readonly['dep_direccion_']) && $this->nmgp_cmp_readonly['dep_direccion_'] == 'on')
       {
           $bTestReadOnly_dep_direccion_ = false;
           unset($this->nmgp_cmp_readonly['dep_direccion_']);
           $sStyleReadLab_dep_direccion_ = '';
           $sStyleReadInp_dep_direccion_ = 'display: none;';
       }
       $this->dep_telefono_ = $this->form_vert_form_del_direccion_entrega_pedido[$sc_seq_vert]['dep_telefono_']; 
       $dep_telefono_ = $this->dep_telefono_; 
       $sStyleHidden_dep_telefono_ = '';
       if (isset($sCheckRead_dep_telefono_))
       {
           unset($sCheckRead_dep_telefono_);
       }
       if (isset($this->nmgp_cmp_readonly['dep_telefono_']))
       {
           $sCheckRead_dep_telefono_ = $this->nmgp_cmp_readonly['dep_telefono_'];
       }
       if (isset($this->nmgp_cmp_hidden['dep_telefono_']) && $this->nmgp_cmp_hidden['dep_telefono_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['dep_telefono_']);
           $sStyleHidden_dep_telefono_ = 'display: none;';
       }
       $bTestReadOnly_dep_telefono_ = true;
       $sStyleReadLab_dep_telefono_ = 'display: none;';
       $sStyleReadInp_dep_telefono_ = '';
       if (isset($this->nmgp_cmp_readonly['dep_telefono_']) && $this->nmgp_cmp_readonly['dep_telefono_'] == 'on')
       {
           $bTestReadOnly_dep_telefono_ = false;
           unset($this->nmgp_cmp_readonly['dep_telefono_']);
           $sStyleReadLab_dep_telefono_ = '';
           $sStyleReadInp_dep_telefono_ = 'display: none;';
       }

       $nm_cor_fun_vert = (isset($nm_cor_fun_vert) && $nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = (isset($nm_img_fun_cel)  && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?> class="sc-row" data-sc-row-number="<?php echo $sc_seq_vert; ?>">


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>"  style="display: none;"> <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['delete'] == "off") {
        $sDisplayDelete = 'display: none';
    }
    else {
        $sDisplayDelete = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayDelete. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['update'] == "off") {
        $sDisplayUpdate = 'display: none';
    }
    else {
        $sDisplayUpdate = '';
    }
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayUpdate. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = $sDisplayUpdate;
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_del_direccion_entrega_pedido_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_del_direccion_entrega_pedido_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_del_direccion_entrega_pedido_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_del_direccion_entrega_pedido_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_del_direccion_entrega_pedido_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_del_direccion_entrega_pedido_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['dep_id_']) && $this->nmgp_cmp_hidden['dep_id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dep_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOddMult css_dep_id__line" id="hidden_field_data_dep_id_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dep_id_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dep_id__line" style="vertical-align: top;padding: 0px"><span id="id_read_on_dep_id_<?php echo $sc_seq_vert ?>" class="css_dep_id__line" style="<?php echo $sStyleReadLab_dep_id_; ?>"><?php echo $this->form_format_readonly("dep_id_", $this->form_encode_input($this->dep_id_)); ?></span><span id="id_read_off_dep_id_<?php echo $sc_seq_vert ?>" class="css_read_off_dep_id_" style="<?php echo $sStyleReadInp_dep_id_; ?>"><input type="hidden" id="id_sc_field_dep_id_<?php echo $sc_seq_vert ?>" name="dep_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_id_) . "\">"?>
<span id="id_ajax_label_dep_id_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($dep_id_); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dep_id_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dep_id_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['dep_id_pedido_']) && $this->nmgp_cmp_hidden['dep_id_pedido_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dep_id_pedido_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_id_pedido_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_dep_id_pedido__line" id="hidden_field_data_dep_id_pedido_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dep_id_pedido_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dep_id_pedido__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_dep_id_pedido_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dep_id_pedido_"]) &&  $this->nmgp_cmp_readonly["dep_id_pedido_"] == "on") { 

 ?>
<input type="hidden" name="dep_id_pedido_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_id_pedido_) . "\">" . $dep_id_pedido_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_dep_id_pedido_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-dep_id_pedido_<?php echo $sc_seq_vert ?> css_dep_id_pedido__line" style="<?php echo $sStyleReadLab_dep_id_pedido_; ?>"><?php echo $this->form_format_readonly("dep_id_pedido_", $this->form_encode_input($this->dep_id_pedido_)); ?></span><span id="id_read_off_dep_id_pedido_<?php echo $sc_seq_vert ?>" class="css_read_off_dep_id_pedido_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dep_id_pedido_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_dep_id_pedido__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dep_id_pedido_<?php echo $sc_seq_vert ?>" type=text name="dep_id_pedido_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_id_pedido_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['dep_id_pedido_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['dep_id_pedido_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['dep_id_pedido_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dep_id_pedido_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dep_id_pedido_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_']) && $this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dep_identificacion_quien_recibe_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_identificacion_quien_recibe_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_dep_identificacion_quien_recibe__line" id="hidden_field_data_dep_identificacion_quien_recibe_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dep_identificacion_quien_recibe_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dep_identificacion_quien_recibe__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_dep_identificacion_quien_recibe_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dep_identificacion_quien_recibe_"]) &&  $this->nmgp_cmp_readonly["dep_identificacion_quien_recibe_"] == "on") { 

 ?>
<input type="hidden" name="dep_identificacion_quien_recibe_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_identificacion_quien_recibe_) . "\">" . $dep_identificacion_quien_recibe_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_dep_identificacion_quien_recibe_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-dep_identificacion_quien_recibe_<?php echo $sc_seq_vert ?> css_dep_identificacion_quien_recibe__line" style="<?php echo $sStyleReadLab_dep_identificacion_quien_recibe_; ?>"><?php echo $this->form_format_readonly("dep_identificacion_quien_recibe_", $this->form_encode_input($this->dep_identificacion_quien_recibe_)); ?></span><span id="id_read_off_dep_identificacion_quien_recibe_<?php echo $sc_seq_vert ?>" class="css_read_off_dep_identificacion_quien_recibe_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dep_identificacion_quien_recibe_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_dep_identificacion_quien_recibe__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dep_identificacion_quien_recibe_<?php echo $sc_seq_vert ?>" type=text name="dep_identificacion_quien_recibe_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_identificacion_quien_recibe_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dep_identificacion_quien_recibe_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dep_identificacion_quien_recibe_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['dep_nombre_quien_recibie_']) && $this->nmgp_cmp_hidden['dep_nombre_quien_recibie_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dep_nombre_quien_recibie_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_nombre_quien_recibie_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_dep_nombre_quien_recibie__line" id="hidden_field_data_dep_nombre_quien_recibie_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dep_nombre_quien_recibie_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dep_nombre_quien_recibie__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_dep_nombre_quien_recibie_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dep_nombre_quien_recibie_"]) &&  $this->nmgp_cmp_readonly["dep_nombre_quien_recibie_"] == "on") { 

 ?>
<input type="hidden" name="dep_nombre_quien_recibie_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_nombre_quien_recibie_) . "\">" . $dep_nombre_quien_recibie_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_dep_nombre_quien_recibie_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-dep_nombre_quien_recibie_<?php echo $sc_seq_vert ?> css_dep_nombre_quien_recibie__line" style="<?php echo $sStyleReadLab_dep_nombre_quien_recibie_; ?>"><?php echo $this->form_format_readonly("dep_nombre_quien_recibie_", $this->form_encode_input($this->dep_nombre_quien_recibie_)); ?></span><span id="id_read_off_dep_nombre_quien_recibie_<?php echo $sc_seq_vert ?>" class="css_read_off_dep_nombre_quien_recibie_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dep_nombre_quien_recibie_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_dep_nombre_quien_recibie__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dep_nombre_quien_recibie_<?php echo $sc_seq_vert ?>" type=text name="dep_nombre_quien_recibie_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_nombre_quien_recibie_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dep_nombre_quien_recibie_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dep_nombre_quien_recibie_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['dep_pais_']) && $this->nmgp_cmp_hidden['dep_pais_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="dep_pais_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->dep_pais_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_dep_pais__line" id="hidden_field_data_dep_pais_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dep_pais_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dep_pais__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_dep_pais_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dep_pais_"]) &&  $this->nmgp_cmp_readonly["dep_pais_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_pais_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_pais_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_pais_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_pais_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_pais_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_pais_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_pais_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_pais_'] = array(); 
    }

   $old_value_dep_id_ = $this->dep_id_;
   $old_value_dep_id_pedido_ = $this->dep_id_pedido_;
   $this->nm_tira_formatacao();


   $unformatted_value_dep_id_ = $this->dep_id_;
   $unformatted_value_dep_id_pedido_ = $this->dep_id_pedido_;

   $nm_comando = "SELECT pai_id, pai_nombre  FROM sis_pais  ORDER BY pai_nombre";

   $this->dep_id_ = $old_value_dep_id_;
   $this->dep_id_pedido_ = $old_value_dep_id_pedido_;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_pais_'][] = $rs->fields[0];
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
   $dep_pais__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->dep_pais__1))
          {
              foreach ($this->dep_pais__1 as $tmp_dep_pais_)
              {
                  if (trim($tmp_dep_pais_) === trim($cadaselect[1])) {$dep_pais__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->dep_pais_) && trim($this->dep_pais_) === trim($cadaselect[1])) {$dep_pais__look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="dep_pais_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_pais_) . "\">" . $dep_pais__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_dep_pais_();
   $x = 0 ; 
   $dep_pais__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->dep_pais__1))
          {
              foreach ($this->dep_pais__1 as $tmp_dep_pais_)
              {
                  if (trim($tmp_dep_pais_) === trim($cadaselect[1])) {$dep_pais__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->dep_pais_) && trim($this->dep_pais_) === trim($cadaselect[1])) { $dep_pais__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($dep_pais__look))
          {
              $dep_pais__look = $this->dep_pais_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_dep_pais_" . $sc_seq_vert . "\" class=\"css_dep_pais__line\" style=\"" .  $sStyleReadLab_dep_pais_ . "\">" . $this->form_format_readonly("dep_pais_", $this->form_encode_input($dep_pais__look)) . "</span><span id=\"id_read_off_dep_pais_" . $sc_seq_vert . "\" class=\"css_read_off_dep_pais_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_dep_pais_ . "\">";
   echo " <span id=\"idAjaxSelect_dep_pais_" .  $sc_seq_vert . "\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOddMult css_dep_pais__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_dep_pais_" . $sc_seq_vert . "\" name=\"dep_pais_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->dep_pais_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->dep_pais_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dep_pais_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dep_pais_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['dep_provincial_']) && $this->nmgp_cmp_hidden['dep_provincial_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="dep_provincial_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->dep_provincial_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_dep_provincial__line" id="hidden_field_data_dep_provincial_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dep_provincial_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dep_provincial__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_dep_provincial_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dep_provincial_"]) &&  $this->nmgp_cmp_readonly["dep_provincial_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_provincial_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_provincial_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_provincial_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_provincial_'] = array(); 
}
if ($this->dep_pais_ != "")
{ 
   $this->nm_clear_val("dep_pais_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_provincial_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_provincial_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_provincial_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_provincial_'] = array(); 
    }

   $old_value_dep_id_ = $this->dep_id_;
   $old_value_dep_id_pedido_ = $this->dep_id_pedido_;
   $this->nm_tira_formatacao();


   $unformatted_value_dep_id_ = $this->dep_id_;
   $unformatted_value_dep_id_pedido_ = $this->dep_id_pedido_;

   $nm_comando = "SELECT pro_id, pro_nombre  FROM sis_provincia WHERE pro_pais='$this->dep_pais_'  ORDER BY pro_nombre";

   $this->dep_id_ = $old_value_dep_id_;
   $this->dep_id_pedido_ = $old_value_dep_id_pedido_;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_provincial_'][] = $rs->fields[0];
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
   $dep_provincial__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->dep_provincial__1))
          {
              foreach ($this->dep_provincial__1 as $tmp_dep_provincial_)
              {
                  if (trim($tmp_dep_provincial_) === trim($cadaselect[1])) {$dep_provincial__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->dep_provincial_) && trim($this->dep_provincial_) === trim($cadaselect[1])) {$dep_provincial__look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="dep_provincial_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_provincial_) . "\">" . $dep_provincial__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_dep_provincial_();
   $x = 0 ; 
   $dep_provincial__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->dep_provincial__1))
          {
              foreach ($this->dep_provincial__1 as $tmp_dep_provincial_)
              {
                  if (trim($tmp_dep_provincial_) === trim($cadaselect[1])) {$dep_provincial__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->dep_provincial_) && trim($this->dep_provincial_) === trim($cadaselect[1])) { $dep_provincial__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($dep_provincial__look))
          {
              $dep_provincial__look = $this->dep_provincial_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_dep_provincial_" . $sc_seq_vert . "\" class=\"css_dep_provincial__line\" style=\"" .  $sStyleReadLab_dep_provincial_ . "\">" . $this->form_format_readonly("dep_provincial_", $this->form_encode_input($dep_provincial__look)) . "</span><span id=\"id_read_off_dep_provincial_" . $sc_seq_vert . "\" class=\"css_read_off_dep_provincial_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_dep_provincial_ . "\">";
   echo " <span id=\"idAjaxSelect_dep_provincial_" .  $sc_seq_vert . "\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOddMult css_dep_provincial__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_dep_provincial_" . $sc_seq_vert . "\" name=\"dep_provincial_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->dep_provincial_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->dep_provincial_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dep_provincial_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dep_provincial_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['dep_ciudad_']) && $this->nmgp_cmp_hidden['dep_ciudad_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="dep_ciudad_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->dep_ciudad_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_dep_ciudad__line" id="hidden_field_data_dep_ciudad_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dep_ciudad_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dep_ciudad__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_dep_ciudad_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dep_ciudad_"]) &&  $this->nmgp_cmp_readonly["dep_ciudad_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_ciudad_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_ciudad_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_ciudad_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_ciudad_'] = array(); 
}
if ($this->dep_provincial_ != "")
{ 
   $this->nm_clear_val("dep_provincial_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_ciudad_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_ciudad_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_ciudad_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_ciudad_'] = array(); 
    }

   $old_value_dep_id_ = $this->dep_id_;
   $old_value_dep_id_pedido_ = $this->dep_id_pedido_;
   $this->nm_tira_formatacao();


   $unformatted_value_dep_id_ = $this->dep_id_;
   $unformatted_value_dep_id_pedido_ = $this->dep_id_pedido_;

   $nm_comando = "SELECT can_id, can_nombre  FROM sis_canton WHERE can_provincia='$this->dep_provincial_'  ORDER BY can_nombre";

   $this->dep_id_ = $old_value_dep_id_;
   $this->dep_id_pedido_ = $old_value_dep_id_pedido_;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['Lookup_dep_ciudad_'][] = $rs->fields[0];
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
   $dep_ciudad__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->dep_ciudad__1))
          {
              foreach ($this->dep_ciudad__1 as $tmp_dep_ciudad_)
              {
                  if (trim($tmp_dep_ciudad_) === trim($cadaselect[1])) {$dep_ciudad__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->dep_ciudad_) && trim($this->dep_ciudad_) === trim($cadaselect[1])) {$dep_ciudad__look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="dep_ciudad_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_ciudad_) . "\">" . $dep_ciudad__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_dep_ciudad_();
   $x = 0 ; 
   $dep_ciudad__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->dep_ciudad__1))
          {
              foreach ($this->dep_ciudad__1 as $tmp_dep_ciudad_)
              {
                  if (trim($tmp_dep_ciudad_) === trim($cadaselect[1])) {$dep_ciudad__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->dep_ciudad_) && trim($this->dep_ciudad_) === trim($cadaselect[1])) { $dep_ciudad__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($dep_ciudad__look))
          {
              $dep_ciudad__look = $this->dep_ciudad_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_dep_ciudad_" . $sc_seq_vert . "\" class=\"css_dep_ciudad__line\" style=\"" .  $sStyleReadLab_dep_ciudad_ . "\">" . $this->form_format_readonly("dep_ciudad_", $this->form_encode_input($dep_ciudad__look)) . "</span><span id=\"id_read_off_dep_ciudad_" . $sc_seq_vert . "\" class=\"css_read_off_dep_ciudad_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_dep_ciudad_ . "\">";
   echo " <span id=\"idAjaxSelect_dep_ciudad_" .  $sc_seq_vert . "\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOddMult css_dep_ciudad__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_dep_ciudad_" . $sc_seq_vert . "\" name=\"dep_ciudad_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->dep_ciudad_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->dep_ciudad_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dep_ciudad_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dep_ciudad_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['dep_direccion_']) && $this->nmgp_cmp_hidden['dep_direccion_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dep_direccion_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_direccion_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_dep_direccion__line" id="hidden_field_data_dep_direccion_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dep_direccion_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dep_direccion__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_dep_direccion_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dep_direccion_"]) &&  $this->nmgp_cmp_readonly["dep_direccion_"] == "on") { 

 ?>
<input type="hidden" name="dep_direccion_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_direccion_) . "\">" . $dep_direccion_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_dep_direccion_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-dep_direccion_<?php echo $sc_seq_vert ?> css_dep_direccion__line" style="<?php echo $sStyleReadLab_dep_direccion_; ?>"><?php echo $this->form_format_readonly("dep_direccion_", $this->form_encode_input($this->dep_direccion_)); ?></span><span id="id_read_off_dep_direccion_<?php echo $sc_seq_vert ?>" class="css_read_off_dep_direccion_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dep_direccion_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_dep_direccion__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dep_direccion_<?php echo $sc_seq_vert ?>" type=text name="dep_direccion_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_direccion_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dep_direccion_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dep_direccion_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['dep_telefono_']) && $this->nmgp_cmp_hidden['dep_telefono_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dep_telefono_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_telefono_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_dep_telefono__line" id="hidden_field_data_dep_telefono_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_dep_telefono_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_dep_telefono__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_dep_telefono_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dep_telefono_"]) &&  $this->nmgp_cmp_readonly["dep_telefono_"] == "on") { 

 ?>
<input type="hidden" name="dep_telefono_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_telefono_) . "\">" . $dep_telefono_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_dep_telefono_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-dep_telefono_<?php echo $sc_seq_vert ?> css_dep_telefono__line" style="<?php echo $sStyleReadLab_dep_telefono_; ?>"><?php echo $this->form_format_readonly("dep_telefono_", $this->form_encode_input($this->dep_telefono_)); ?></span><span id="id_read_off_dep_telefono_<?php echo $sc_seq_vert ?>" class="css_read_off_dep_telefono_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_dep_telefono_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_dep_telefono__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_dep_telefono_<?php echo $sc_seq_vert ?>" type=text name="dep_telefono_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($dep_telefono_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dep_telefono_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dep_telefono_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_dep_id_))
       {
           $this->nmgp_cmp_readonly['dep_id_'] = $sCheckRead_dep_id_;
       }
       if ('display: none;' == $sStyleHidden_dep_id_)
       {
           $this->nmgp_cmp_hidden['dep_id_'] = 'off';
       }
       if (isset($sCheckRead_dep_id_pedido_))
       {
           $this->nmgp_cmp_readonly['dep_id_pedido_'] = $sCheckRead_dep_id_pedido_;
       }
       if ('display: none;' == $sStyleHidden_dep_id_pedido_)
       {
           $this->nmgp_cmp_hidden['dep_id_pedido_'] = 'off';
       }
       if (isset($sCheckRead_dep_identificacion_quien_recibe_))
       {
           $this->nmgp_cmp_readonly['dep_identificacion_quien_recibe_'] = $sCheckRead_dep_identificacion_quien_recibe_;
       }
       if ('display: none;' == $sStyleHidden_dep_identificacion_quien_recibe_)
       {
           $this->nmgp_cmp_hidden['dep_identificacion_quien_recibe_'] = 'off';
       }
       if (isset($sCheckRead_dep_nombre_quien_recibie_))
       {
           $this->nmgp_cmp_readonly['dep_nombre_quien_recibie_'] = $sCheckRead_dep_nombre_quien_recibie_;
       }
       if ('display: none;' == $sStyleHidden_dep_nombre_quien_recibie_)
       {
           $this->nmgp_cmp_hidden['dep_nombre_quien_recibie_'] = 'off';
       }
       if (isset($sCheckRead_dep_pais_))
       {
           $this->nmgp_cmp_readonly['dep_pais_'] = $sCheckRead_dep_pais_;
       }
       if ('display: none;' == $sStyleHidden_dep_pais_)
       {
           $this->nmgp_cmp_hidden['dep_pais_'] = 'off';
       }
       if (isset($sCheckRead_dep_provincial_))
       {
           $this->nmgp_cmp_readonly['dep_provincial_'] = $sCheckRead_dep_provincial_;
       }
       if ('display: none;' == $sStyleHidden_dep_provincial_)
       {
           $this->nmgp_cmp_hidden['dep_provincial_'] = 'off';
       }
       if (isset($sCheckRead_dep_ciudad_))
       {
           $this->nmgp_cmp_readonly['dep_ciudad_'] = $sCheckRead_dep_ciudad_;
       }
       if ('display: none;' == $sStyleHidden_dep_ciudad_)
       {
           $this->nmgp_cmp_hidden['dep_ciudad_'] = 'off';
       }
       if (isset($sCheckRead_dep_direccion_))
       {
           $this->nmgp_cmp_readonly['dep_direccion_'] = $sCheckRead_dep_direccion_;
       }
       if ('display: none;' == $sStyleHidden_dep_direccion_)
       {
           $this->nmgp_cmp_hidden['dep_direccion_'] = 'off';
       }
       if (isset($sCheckRead_dep_telefono_))
       {
           $this->nmgp_cmp_readonly['dep_telefono_'] = $sCheckRead_dep_telefono_;
       }
       if ('display: none;' == $sStyleHidden_dep_telefono_)
       {
           $this->nmgp_cmp_hidden['dep_telefono_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_del_direccion_entrega_pedido = $guarda_form_vert_form_del_direccion_entrega_pedido;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div>
 <div id="sc-id-fixedheaders-placeholder" style="display: none; position: fixed; top: 0; z-index: 500"></div>
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type="hidden" name="sc_contr_vert" value="<?php echo $this->form_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; font-weight: bold">
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
<?php
if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
?>
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_iframe'] != "R")
{
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai_modal()", "scBtnFn_sys_format_sai_modal()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_iframe'] != "R")
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
<?php
}
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
<script>
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
<?php
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['run_modal'])
{
?>
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
<?php
}
else
{
?>
 $(function() {
  setTimeout(function() { for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) { scJQElementsAdd(iLine); } }, 250);
 });
<?php
}
?>
</script>
<div id="new_line_dummy" style="display: none">
</div>

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
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_direccion_entrega_pedido");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_direccion_entrega_pedido");
 parent.scAjaxDetailHeight("form_del_direccion_entrega_pedido", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_direccion_entrega_pedido", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_direccion_entrega_pedido", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['sc_modal'])
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
	function scBtnFn_sys_format_sai_modal() {
		if ($("#sc_b_sai_b.sc-unique-btn-1").length && $("#sc_b_sai_b.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_direccion_entrega_pedido']['buttonStatus'] = $this->nmgp_botoes;
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
<?php 
 } 
} 
?> 
