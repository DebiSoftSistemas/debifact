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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_configuracion'] . "-" . $this->Ini->Nm_lang['lang_filial'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_configuracion'] . "-" . $this->Ini->Nm_lang['lang_filial'] . ""); } ?></TITLE>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_sis_filial/form_sis_filial_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_sis_filial_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['last'] : 'off'); ?>";
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
<?php

include_once('form_sis_filial_jquery.php');

?>

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['link_info']['remove_border']) {
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
 include_once("form_sis_filial_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_sis_filial'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_sis_filial'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R")
{
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['fast_search'][2] : "";
          $stateSearchIconClose  = 'none';
          $stateSearchIconSearch = '';
          if(!empty($OPC_dat))
          {
              $stateSearchIconClose  = '';
              $stateSearchIconSearch = 'none';
          }
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input id='fast_search_f0_t' type="hidden" name="nmgp_fast_search_t" value="">
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
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label'][''];
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
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['new'];
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
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['bcancelar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['bcancelar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['bcancelar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['bcancelar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['bcancelar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['update'];
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
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-10';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['exit'];
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['empty_filter'] = true;
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
   if (!isset($this->nm_new_label['fil_empresa']))
   {
       $this->nm_new_label['fil_empresa'] = "" . $this->Ini->Nm_lang['lang_empresa'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_empresa = $this->fil_empresa;
   $sStyleHidden_fil_empresa = '';
   if (isset($this->nmgp_cmp_hidden['fil_empresa']) && $this->nmgp_cmp_hidden['fil_empresa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_empresa']);
       $sStyleHidden_fil_empresa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_empresa = 'display: none;';
   $sStyleReadInp_fil_empresa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_empresa']) && $this->nmgp_cmp_readonly['fil_empresa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_empresa']);
       $sStyleReadLab_fil_empresa = '';
       $sStyleReadInp_fil_empresa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_empresa']) && $this->nmgp_cmp_hidden['fil_empresa'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_empresa" value="<?php echo $this->form_encode_input($this->fil_empresa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_empresa_label" id="hidden_field_label_fil_empresa" style="<?php echo $sStyleHidden_fil_empresa; ?>"><span id="id_label_fil_empresa"><?php echo $this->nm_new_label['fil_empresa']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_empresa_line" id="hidden_field_data_fil_empresa" style="<?php echo $sStyleHidden_fil_empresa; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_empresa_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_empresa"]) &&  $this->nmgp_cmp_readonly["fil_empresa"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_empresa']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_empresa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_empresa']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_empresa'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_empresa']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_empresa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_empresa']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_empresa'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT emp_id, emp_nombre  FROM sis_empresa  ORDER BY emp_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_empresa'][] = $rs->fields[0];
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
   $fil_empresa_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_empresa_1))
          {
              foreach ($this->fil_empresa_1 as $tmp_fil_empresa)
              {
                  if (trim($tmp_fil_empresa) === trim($cadaselect[1])) {$fil_empresa_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_empresa) && trim($this->fil_empresa) === trim($cadaselect[1])) {$fil_empresa_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fil_empresa" value="<?php echo $this->form_encode_input($fil_empresa) . "\">" . $fil_empresa_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fil_empresa();
   $x = 0 ; 
   $fil_empresa_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_empresa_1))
          {
              foreach ($this->fil_empresa_1 as $tmp_fil_empresa)
              {
                  if (trim($tmp_fil_empresa) === trim($cadaselect[1])) {$fil_empresa_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_empresa) && trim($this->fil_empresa) === trim($cadaselect[1])) { $fil_empresa_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fil_empresa_look))
          {
              $fil_empresa_look = $this->fil_empresa;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fil_empresa\" class=\"css_fil_empresa_line\" style=\"" .  $sStyleReadLab_fil_empresa . "\">" . $this->form_format_readonly("fil_empresa", $this->form_encode_input($fil_empresa_look)) . "</span><span id=\"id_read_off_fil_empresa\" class=\"css_read_off_fil_empresa" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fil_empresa . "\">";
   echo " <span id=\"idAjaxSelect_fil_empresa\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fil_empresa_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fil_empresa\" name=\"fil_empresa\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fil_empresa) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fil_empresa)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_empresa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_empresa_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fil_razon_social']))
    {
        $this->nm_new_label['fil_razon_social'] = "" . $this->Ini->Nm_lang['lang_razon_social'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_razon_social = $this->fil_razon_social;
   $sStyleHidden_fil_razon_social = '';
   if (isset($this->nmgp_cmp_hidden['fil_razon_social']) && $this->nmgp_cmp_hidden['fil_razon_social'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_razon_social']);
       $sStyleHidden_fil_razon_social = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_razon_social = 'display: none;';
   $sStyleReadInp_fil_razon_social = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_razon_social']) && $this->nmgp_cmp_readonly['fil_razon_social'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_razon_social']);
       $sStyleReadLab_fil_razon_social = '';
       $sStyleReadInp_fil_razon_social = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_razon_social']) && $this->nmgp_cmp_hidden['fil_razon_social'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_razon_social" value="<?php echo $this->form_encode_input($fil_razon_social) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_razon_social_label" id="hidden_field_label_fil_razon_social" style="<?php echo $sStyleHidden_fil_razon_social; ?>"><span id="id_label_fil_razon_social"><?php echo $this->nm_new_label['fil_razon_social']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_razon_social_line" id="hidden_field_data_fil_razon_social" style="<?php echo $sStyleHidden_fil_razon_social; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_razon_social_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_razon_social"]) &&  $this->nmgp_cmp_readonly["fil_razon_social"] == "on") { 

 ?>
<input type="hidden" name="fil_razon_social" value="<?php echo $this->form_encode_input($fil_razon_social) . "\">" . $fil_razon_social . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_razon_social" class="sc-ui-readonly-fil_razon_social css_fil_razon_social_line" style="<?php echo $sStyleReadLab_fil_razon_social; ?>"><?php echo $this->form_format_readonly("fil_razon_social", $this->form_encode_input($this->fil_razon_social)); ?></span><span id="id_read_off_fil_razon_social" class="css_read_off_fil_razon_social<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_razon_social; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_razon_social_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_razon_social" type=text name="fil_razon_social" value="<?php echo $this->form_encode_input($fil_razon_social) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_razon_social_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_razon_social_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fil_nombre']))
    {
        $this->nm_new_label['fil_nombre'] = "" . $this->Ini->Nm_lang['lang_nombre_comercial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_nombre = $this->fil_nombre;
   $sStyleHidden_fil_nombre = '';
   if (isset($this->nmgp_cmp_hidden['fil_nombre']) && $this->nmgp_cmp_hidden['fil_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_nombre']);
       $sStyleHidden_fil_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_nombre = 'display: none;';
   $sStyleReadInp_fil_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_nombre']) && $this->nmgp_cmp_readonly['fil_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_nombre']);
       $sStyleReadLab_fil_nombre = '';
       $sStyleReadInp_fil_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_nombre']) && $this->nmgp_cmp_hidden['fil_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_nombre" value="<?php echo $this->form_encode_input($fil_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_nombre_label" id="hidden_field_label_fil_nombre" style="<?php echo $sStyleHidden_fil_nombre; ?>"><span id="id_label_fil_nombre"><?php echo $this->nm_new_label['fil_nombre']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_nombre_line" id="hidden_field_data_fil_nombre" style="<?php echo $sStyleHidden_fil_nombre; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_nombre_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_nombre"]) &&  $this->nmgp_cmp_readonly["fil_nombre"] == "on") { 

 ?>
<input type="hidden" name="fil_nombre" value="<?php echo $this->form_encode_input($fil_nombre) . "\">" . $fil_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_nombre" class="sc-ui-readonly-fil_nombre css_fil_nombre_line" style="<?php echo $sStyleReadLab_fil_nombre; ?>"><?php echo $this->form_format_readonly("fil_nombre", $this->form_encode_input($this->fil_nombre)); ?></span><span id="id_read_off_fil_nombre" class="css_read_off_fil_nombre<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_nombre_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_nombre" type=text name="fil_nombre" value="<?php echo $this->form_encode_input($fil_nombre) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_nombre_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fil_ruc']))
    {
        $this->nm_new_label['fil_ruc'] = "" . $this->Ini->Nm_lang['lang_ruc'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_ruc = $this->fil_ruc;
   $sStyleHidden_fil_ruc = '';
   if (isset($this->nmgp_cmp_hidden['fil_ruc']) && $this->nmgp_cmp_hidden['fil_ruc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_ruc']);
       $sStyleHidden_fil_ruc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_ruc = 'display: none;';
   $sStyleReadInp_fil_ruc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_ruc']) && $this->nmgp_cmp_readonly['fil_ruc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_ruc']);
       $sStyleReadLab_fil_ruc = '';
       $sStyleReadInp_fil_ruc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_ruc']) && $this->nmgp_cmp_hidden['fil_ruc'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_ruc" value="<?php echo $this->form_encode_input($fil_ruc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_ruc_label" id="hidden_field_label_fil_ruc" style="<?php echo $sStyleHidden_fil_ruc; ?>"><span id="id_label_fil_ruc"><?php echo $this->nm_new_label['fil_ruc']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_ruc_line" id="hidden_field_data_fil_ruc" style="<?php echo $sStyleHidden_fil_ruc; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_ruc_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_ruc"]) &&  $this->nmgp_cmp_readonly["fil_ruc"] == "on") { 

 ?>
<input type="hidden" name="fil_ruc" value="<?php echo $this->form_encode_input($fil_ruc) . "\">" . $fil_ruc . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_ruc" class="sc-ui-readonly-fil_ruc css_fil_ruc_line" style="<?php echo $sStyleReadLab_fil_ruc; ?>"><?php echo $this->form_format_readonly("fil_ruc", $this->form_encode_input($this->fil_ruc)); ?></span><span id="id_read_off_fil_ruc" class="css_read_off_fil_ruc<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_ruc; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_ruc_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_ruc" type=text name="fil_ruc" value="<?php echo $this->form_encode_input($fil_ruc) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_ruc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_ruc_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fil_telefono']))
    {
        $this->nm_new_label['fil_telefono'] = "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_telefono = $this->fil_telefono;
   $sStyleHidden_fil_telefono = '';
   if (isset($this->nmgp_cmp_hidden['fil_telefono']) && $this->nmgp_cmp_hidden['fil_telefono'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_telefono']);
       $sStyleHidden_fil_telefono = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_telefono = 'display: none;';
   $sStyleReadInp_fil_telefono = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_telefono']) && $this->nmgp_cmp_readonly['fil_telefono'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_telefono']);
       $sStyleReadLab_fil_telefono = '';
       $sStyleReadInp_fil_telefono = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_telefono']) && $this->nmgp_cmp_hidden['fil_telefono'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_telefono" value="<?php echo $this->form_encode_input($fil_telefono) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_telefono_label" id="hidden_field_label_fil_telefono" style="<?php echo $sStyleHidden_fil_telefono; ?>"><span id="id_label_fil_telefono"><?php echo $this->nm_new_label['fil_telefono']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_telefono_line" id="hidden_field_data_fil_telefono" style="<?php echo $sStyleHidden_fil_telefono; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_telefono_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_telefono"]) &&  $this->nmgp_cmp_readonly["fil_telefono"] == "on") { 

 ?>
<input type="hidden" name="fil_telefono" value="<?php echo $this->form_encode_input($fil_telefono) . "\">" . $fil_telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_telefono" class="sc-ui-readonly-fil_telefono css_fil_telefono_line" style="<?php echo $sStyleReadLab_fil_telefono; ?>"><?php echo $this->form_format_readonly("fil_telefono", $this->form_encode_input($this->fil_telefono)); ?></span><span id="id_read_off_fil_telefono" class="css_read_off_fil_telefono<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_telefono_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_telefono" type=text name="fil_telefono" value="<?php echo $this->form_encode_input($fil_telefono) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_telefono_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_telefono_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fil_email']))
    {
        $this->nm_new_label['fil_email'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_email = $this->fil_email;
   $sStyleHidden_fil_email = '';
   if (isset($this->nmgp_cmp_hidden['fil_email']) && $this->nmgp_cmp_hidden['fil_email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_email']);
       $sStyleHidden_fil_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_email = 'display: none;';
   $sStyleReadInp_fil_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_email']) && $this->nmgp_cmp_readonly['fil_email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_email']);
       $sStyleReadLab_fil_email = '';
       $sStyleReadInp_fil_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_email']) && $this->nmgp_cmp_hidden['fil_email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_email" value="<?php echo $this->form_encode_input($fil_email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_email_label" id="hidden_field_label_fil_email" style="<?php echo $sStyleHidden_fil_email; ?>"><span id="id_label_fil_email"><?php echo $this->nm_new_label['fil_email']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_email_line" id="hidden_field_data_fil_email" style="<?php echo $sStyleHidden_fil_email; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_email_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_email"]) &&  $this->nmgp_cmp_readonly["fil_email"] == "on") { 

 ?>
<input type="hidden" name="fil_email" value="<?php echo $this->form_encode_input($fil_email) . "\">" . $fil_email . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_email" class="sc-ui-readonly-fil_email css_fil_email_line" style="<?php echo $sStyleReadLab_fil_email; ?>"><?php echo $this->form_format_readonly("fil_email", $this->form_encode_input($this->fil_email)); ?></span><span id="id_read_off_fil_email" class="css_read_off_fil_email<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_email_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_email" type=text name="fil_email" value="<?php echo $this->form_encode_input($fil_email) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=60 alt="{datatype: 'text', maxLength: 60, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_email_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fil_representante']))
    {
        $this->nm_new_label['fil_representante'] = "" . $this->Ini->Nm_lang['lang_representante'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_representante = $this->fil_representante;
   $sStyleHidden_fil_representante = '';
   if (isset($this->nmgp_cmp_hidden['fil_representante']) && $this->nmgp_cmp_hidden['fil_representante'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_representante']);
       $sStyleHidden_fil_representante = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_representante = 'display: none;';
   $sStyleReadInp_fil_representante = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_representante']) && $this->nmgp_cmp_readonly['fil_representante'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_representante']);
       $sStyleReadLab_fil_representante = '';
       $sStyleReadInp_fil_representante = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_representante']) && $this->nmgp_cmp_hidden['fil_representante'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_representante" value="<?php echo $this->form_encode_input($fil_representante) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_representante_label" id="hidden_field_label_fil_representante" style="<?php echo $sStyleHidden_fil_representante; ?>"><span id="id_label_fil_representante"><?php echo $this->nm_new_label['fil_representante']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_representante_line" id="hidden_field_data_fil_representante" style="<?php echo $sStyleHidden_fil_representante; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_representante_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_representante"]) &&  $this->nmgp_cmp_readonly["fil_representante"] == "on") { 

 ?>
<input type="hidden" name="fil_representante" value="<?php echo $this->form_encode_input($fil_representante) . "\">" . $fil_representante . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_representante" class="sc-ui-readonly-fil_representante css_fil_representante_line" style="<?php echo $sStyleReadLab_fil_representante; ?>"><?php echo $this->form_format_readonly("fil_representante", $this->form_encode_input($this->fil_representante)); ?></span><span id="id_read_off_fil_representante" class="css_read_off_fil_representante<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_representante; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_representante_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_representante" type=text name="fil_representante" value="<?php echo $this->form_encode_input($fil_representante) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_representante_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_representante_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fil_contador']))
    {
        $this->nm_new_label['fil_contador'] = "" . $this->Ini->Nm_lang['lang_contador'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_contador = $this->fil_contador;
   $sStyleHidden_fil_contador = '';
   if (isset($this->nmgp_cmp_hidden['fil_contador']) && $this->nmgp_cmp_hidden['fil_contador'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_contador']);
       $sStyleHidden_fil_contador = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_contador = 'display: none;';
   $sStyleReadInp_fil_contador = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_contador']) && $this->nmgp_cmp_readonly['fil_contador'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_contador']);
       $sStyleReadLab_fil_contador = '';
       $sStyleReadInp_fil_contador = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_contador']) && $this->nmgp_cmp_hidden['fil_contador'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_contador" value="<?php echo $this->form_encode_input($fil_contador) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_contador_label" id="hidden_field_label_fil_contador" style="<?php echo $sStyleHidden_fil_contador; ?>"><span id="id_label_fil_contador"><?php echo $this->nm_new_label['fil_contador']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_contador_line" id="hidden_field_data_fil_contador" style="<?php echo $sStyleHidden_fil_contador; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_contador_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_contador"]) &&  $this->nmgp_cmp_readonly["fil_contador"] == "on") { 

 ?>
<input type="hidden" name="fil_contador" value="<?php echo $this->form_encode_input($fil_contador) . "\">" . $fil_contador . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_contador" class="sc-ui-readonly-fil_contador css_fil_contador_line" style="<?php echo $sStyleReadLab_fil_contador; ?>"><?php echo $this->form_format_readonly("fil_contador", $this->form_encode_input($this->fil_contador)); ?></span><span id="id_read_off_fil_contador" class="css_read_off_fil_contador<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_contador; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_contador_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_contador" type=text name="fil_contador" value="<?php echo $this->form_encode_input($fil_contador) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_contador_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_contador_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fil_actividad_economica']))
   {
       $this->nm_new_label['fil_actividad_economica'] = "" . $this->Ini->Nm_lang['lang_actividad_economica'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_actividad_economica = $this->fil_actividad_economica;
   $sStyleHidden_fil_actividad_economica = '';
   if (isset($this->nmgp_cmp_hidden['fil_actividad_economica']) && $this->nmgp_cmp_hidden['fil_actividad_economica'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_actividad_economica']);
       $sStyleHidden_fil_actividad_economica = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_actividad_economica = 'display: none;';
   $sStyleReadInp_fil_actividad_economica = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_actividad_economica']) && $this->nmgp_cmp_readonly['fil_actividad_economica'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_actividad_economica']);
       $sStyleReadLab_fil_actividad_economica = '';
       $sStyleReadInp_fil_actividad_economica = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_actividad_economica']) && $this->nmgp_cmp_hidden['fil_actividad_economica'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_actividad_economica" value="<?php echo $this->form_encode_input($this->fil_actividad_economica) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_actividad_economica_label" id="hidden_field_label_fil_actividad_economica" style="<?php echo $sStyleHidden_fil_actividad_economica; ?>"><span id="id_label_fil_actividad_economica"><?php echo $this->nm_new_label['fil_actividad_economica']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_actividad_economica_line" id="hidden_field_data_fil_actividad_economica" style="<?php echo $sStyleHidden_fil_actividad_economica; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_actividad_economica_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_actividad_economica"]) &&  $this->nmgp_cmp_readonly["fil_actividad_economica"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_actividad_economica']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_actividad_economica'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_actividad_economica']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_actividad_economica'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_actividad_economica']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_actividad_economica'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_actividad_economica']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_actividad_economica'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_actividades_aconomicas  ORDER BY dec_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_actividad_economica'][] = $rs->fields[0];
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
   $fil_actividad_economica_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_actividad_economica_1))
          {
              foreach ($this->fil_actividad_economica_1 as $tmp_fil_actividad_economica)
              {
                  if (trim($tmp_fil_actividad_economica) === trim($cadaselect[1])) {$fil_actividad_economica_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_actividad_economica) && trim($this->fil_actividad_economica) === trim($cadaselect[1])) {$fil_actividad_economica_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fil_actividad_economica" value="<?php echo $this->form_encode_input($fil_actividad_economica) . "\">" . $fil_actividad_economica_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fil_actividad_economica();
   $x = 0 ; 
   $fil_actividad_economica_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_actividad_economica_1))
          {
              foreach ($this->fil_actividad_economica_1 as $tmp_fil_actividad_economica)
              {
                  if (trim($tmp_fil_actividad_economica) === trim($cadaselect[1])) {$fil_actividad_economica_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_actividad_economica) && trim($this->fil_actividad_economica) === trim($cadaselect[1])) { $fil_actividad_economica_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fil_actividad_economica_look))
          {
              $fil_actividad_economica_look = $this->fil_actividad_economica;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fil_actividad_economica\" class=\"css_fil_actividad_economica_line\" style=\"" .  $sStyleReadLab_fil_actividad_economica . "\">" . $this->form_format_readonly("fil_actividad_economica", $this->form_encode_input($fil_actividad_economica_look)) . "</span><span id=\"id_read_off_fil_actividad_economica\" class=\"css_read_off_fil_actividad_economica" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fil_actividad_economica . "\">";
   echo " <span id=\"idAjaxSelect_fil_actividad_economica\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fil_actividad_economica_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fil_actividad_economica\" name=\"fil_actividad_economica\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fil_actividad_economica) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fil_actividad_economica)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_actividad_economica_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_actividad_economica_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['fil_obligado_contabilidad']))
   {
       $this->nm_new_label['fil_obligado_contabilidad'] = "" . $this->Ini->Nm_lang['lang_obligado_contabilidad'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_obligado_contabilidad = $this->fil_obligado_contabilidad;
   $sStyleHidden_fil_obligado_contabilidad = '';
   if (isset($this->nmgp_cmp_hidden['fil_obligado_contabilidad']) && $this->nmgp_cmp_hidden['fil_obligado_contabilidad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_obligado_contabilidad']);
       $sStyleHidden_fil_obligado_contabilidad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_obligado_contabilidad = 'display: none;';
   $sStyleReadInp_fil_obligado_contabilidad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_obligado_contabilidad']) && $this->nmgp_cmp_readonly['fil_obligado_contabilidad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_obligado_contabilidad']);
       $sStyleReadLab_fil_obligado_contabilidad = '';
       $sStyleReadInp_fil_obligado_contabilidad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_obligado_contabilidad']) && $this->nmgp_cmp_hidden['fil_obligado_contabilidad'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_obligado_contabilidad" value="<?php echo $this->form_encode_input($this->fil_obligado_contabilidad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_obligado_contabilidad_label" id="hidden_field_label_fil_obligado_contabilidad" style="<?php echo $sStyleHidden_fil_obligado_contabilidad; ?>"><span id="id_label_fil_obligado_contabilidad"><?php echo $this->nm_new_label['fil_obligado_contabilidad']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_obligado_contabilidad_line" id="hidden_field_data_fil_obligado_contabilidad" style="<?php echo $sStyleHidden_fil_obligado_contabilidad; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_obligado_contabilidad_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_obligado_contabilidad"]) &&  $this->nmgp_cmp_readonly["fil_obligado_contabilidad"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_obligado_contabilidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_obligado_contabilidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_obligado_contabilidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_obligado_contabilidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_obligado_contabilidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_obligado_contabilidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_obligado_contabilidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_obligado_contabilidad'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_obligado_contabilidad'][] = $rs->fields[0];
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
   $fil_obligado_contabilidad_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_obligado_contabilidad_1))
          {
              foreach ($this->fil_obligado_contabilidad_1 as $tmp_fil_obligado_contabilidad)
              {
                  if (trim($tmp_fil_obligado_contabilidad) === trim($cadaselect[1])) {$fil_obligado_contabilidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_obligado_contabilidad) && trim($this->fil_obligado_contabilidad) === trim($cadaselect[1])) {$fil_obligado_contabilidad_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fil_obligado_contabilidad" value="<?php echo $this->form_encode_input($fil_obligado_contabilidad) . "\">" . $fil_obligado_contabilidad_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fil_obligado_contabilidad();
   $x = 0 ; 
   $fil_obligado_contabilidad_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_obligado_contabilidad_1))
          {
              foreach ($this->fil_obligado_contabilidad_1 as $tmp_fil_obligado_contabilidad)
              {
                  if (trim($tmp_fil_obligado_contabilidad) === trim($cadaselect[1])) {$fil_obligado_contabilidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_obligado_contabilidad) && trim($this->fil_obligado_contabilidad) === trim($cadaselect[1])) { $fil_obligado_contabilidad_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fil_obligado_contabilidad_look))
          {
              $fil_obligado_contabilidad_look = $this->fil_obligado_contabilidad;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fil_obligado_contabilidad\" class=\"css_fil_obligado_contabilidad_line\" style=\"" .  $sStyleReadLab_fil_obligado_contabilidad . "\">" . $this->form_format_readonly("fil_obligado_contabilidad", $this->form_encode_input($fil_obligado_contabilidad_look)) . "</span><span id=\"id_read_off_fil_obligado_contabilidad\" class=\"css_read_off_fil_obligado_contabilidad" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fil_obligado_contabilidad . "\">";
   echo " <span id=\"idAjaxSelect_fil_obligado_contabilidad\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fil_obligado_contabilidad_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fil_obligado_contabilidad\" name=\"fil_obligado_contabilidad\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fil_obligado_contabilidad) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fil_obligado_contabilidad)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_obligado_contabilidad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_obligado_contabilidad_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fil_contribuyente_especial']))
    {
        $this->nm_new_label['fil_contribuyente_especial'] = "" . $this->Ini->Nm_lang['lang_contribuyente_especial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_contribuyente_especial = $this->fil_contribuyente_especial;
   $sStyleHidden_fil_contribuyente_especial = '';
   if (isset($this->nmgp_cmp_hidden['fil_contribuyente_especial']) && $this->nmgp_cmp_hidden['fil_contribuyente_especial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_contribuyente_especial']);
       $sStyleHidden_fil_contribuyente_especial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_contribuyente_especial = 'display: none;';
   $sStyleReadInp_fil_contribuyente_especial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_contribuyente_especial']) && $this->nmgp_cmp_readonly['fil_contribuyente_especial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_contribuyente_especial']);
       $sStyleReadLab_fil_contribuyente_especial = '';
       $sStyleReadInp_fil_contribuyente_especial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_contribuyente_especial']) && $this->nmgp_cmp_hidden['fil_contribuyente_especial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_contribuyente_especial" value="<?php echo $this->form_encode_input($fil_contribuyente_especial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_contribuyente_especial_label" id="hidden_field_label_fil_contribuyente_especial" style="<?php echo $sStyleHidden_fil_contribuyente_especial; ?>"><span id="id_label_fil_contribuyente_especial"><?php echo $this->nm_new_label['fil_contribuyente_especial']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_contribuyente_especial_line" id="hidden_field_data_fil_contribuyente_especial" style="<?php echo $sStyleHidden_fil_contribuyente_especial; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_contribuyente_especial_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_contribuyente_especial"]) &&  $this->nmgp_cmp_readonly["fil_contribuyente_especial"] == "on") { 

 ?>
<input type="hidden" name="fil_contribuyente_especial" value="<?php echo $this->form_encode_input($fil_contribuyente_especial) . "\">" . $fil_contribuyente_especial . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_contribuyente_especial" class="sc-ui-readonly-fil_contribuyente_especial css_fil_contribuyente_especial_line" style="<?php echo $sStyleReadLab_fil_contribuyente_especial; ?>"><?php echo $this->form_format_readonly("fil_contribuyente_especial", $this->form_encode_input($this->fil_contribuyente_especial)); ?></span><span id="id_read_off_fil_contribuyente_especial" class="css_read_off_fil_contribuyente_especial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_contribuyente_especial; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_contribuyente_especial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_contribuyente_especial" type=text name="fil_contribuyente_especial" value="<?php echo $this->form_encode_input($fil_contribuyente_especial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=5"; } ?> maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_contribuyente_especial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_contribuyente_especial_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['fil_padronrimpe']))
   {
       $this->nm_new_label['fil_padronrimpe'] = "" . $this->Ini->Nm_lang['lang_rimpe'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_padronrimpe = $this->fil_padronrimpe;
   $sStyleHidden_fil_padronrimpe = '';
   if (isset($this->nmgp_cmp_hidden['fil_padronrimpe']) && $this->nmgp_cmp_hidden['fil_padronrimpe'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_padronrimpe']);
       $sStyleHidden_fil_padronrimpe = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_padronrimpe = 'display: none;';
   $sStyleReadInp_fil_padronrimpe = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_padronrimpe']) && $this->nmgp_cmp_readonly['fil_padronrimpe'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_padronrimpe']);
       $sStyleReadLab_fil_padronrimpe = '';
       $sStyleReadInp_fil_padronrimpe = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_padronrimpe']) && $this->nmgp_cmp_hidden['fil_padronrimpe'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_padronrimpe" value="<?php echo $this->form_encode_input($this->fil_padronrimpe) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->fil_padronrimpe_1 = explode(";", trim($this->fil_padronrimpe));
  } 
  else
  {
      if (empty($this->fil_padronrimpe))
      {
          $this->fil_padronrimpe_1= array(); 
          $this->fil_padronrimpe= "N";
      } 
      else
      {
          $this->fil_padronrimpe_1= $this->fil_padronrimpe; 
          $this->fil_padronrimpe= ""; 
          foreach ($this->fil_padronrimpe_1 as $cada_fil_padronrimpe)
          {
             if (!empty($fil_padronrimpe))
             {
                 $this->fil_padronrimpe.= ";"; 
             } 
             $this->fil_padronrimpe.= $cada_fil_padronrimpe; 
          } 
      } 
  } 
?> 

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_padronrimpe_label" id="hidden_field_label_fil_padronrimpe" style="<?php echo $sStyleHidden_fil_padronrimpe; ?>"><span id="id_label_fil_padronrimpe"><?php echo $this->nm_new_label['fil_padronrimpe']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_padronrimpe_line" id="hidden_field_data_fil_padronrimpe" style="<?php echo $sStyleHidden_fil_padronrimpe; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_padronrimpe_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_padronrimpe"]) &&  $this->nmgp_cmp_readonly["fil_padronrimpe"] == "on") { 

$fil_padronrimpe_look = "";
 if ($this->fil_padronrimpe == "S") { $fil_padronrimpe_look .= "" ;} 
 if (empty($fil_padronrimpe_look)) { $fil_padronrimpe_look = $this->fil_padronrimpe; }
?>
<input type="hidden" name="fil_padronrimpe" value="<?php echo $this->form_encode_input($fil_padronrimpe) . "\">" . $fil_padronrimpe_look . ""; ?>
<?php } else { ?>

<?php

$fil_padronrimpe_look = "";
 if ($this->fil_padronrimpe == "S") { $fil_padronrimpe_look .= "" ;} 
 if (empty($fil_padronrimpe_look)) { $fil_padronrimpe_look = $this->fil_padronrimpe; }
?>
<span id="id_read_on_fil_padronrimpe" class="css_fil_padronrimpe_line" style="<?php echo $sStyleReadLab_fil_padronrimpe; ?>"><?php echo $this->form_format_readonly("fil_padronrimpe", $this->form_encode_input($fil_padronrimpe_look)); ?></span><span id="id_read_off_fil_padronrimpe" class="css_read_off_fil_padronrimpe css_fil_padronrimpe_line" style="<?php echo $sStyleReadInp_fil_padronrimpe; ?>"><?php echo "<div id=\"idAjaxCheckbox_fil_padronrimpe\" style=\"display: inline-block\" class=\"css_fil_padronrimpe_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_fil_padronrimpe_line"><?php $tempOptionId = "id-opt-fil_padronrimpe" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-fil_padronrimpe sc-ui-checkbox-fil_padronrimpe" name="fil_padronrimpe[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_padronrimpe'][] = 'S'; ?>
<?php  if (in_array("S", $this->fil_padronrimpe_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_padronrimpe_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_padronrimpe_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fil_ambiente_sri']))
   {
       $this->nm_new_label['fil_ambiente_sri'] = "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_ambiente_sri = $this->fil_ambiente_sri;
   $sStyleHidden_fil_ambiente_sri = '';
   if (isset($this->nmgp_cmp_hidden['fil_ambiente_sri']) && $this->nmgp_cmp_hidden['fil_ambiente_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_ambiente_sri']);
       $sStyleHidden_fil_ambiente_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_ambiente_sri = 'display: none;';
   $sStyleReadInp_fil_ambiente_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_ambiente_sri']) && $this->nmgp_cmp_readonly['fil_ambiente_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_ambiente_sri']);
       $sStyleReadLab_fil_ambiente_sri = '';
       $sStyleReadInp_fil_ambiente_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_ambiente_sri']) && $this->nmgp_cmp_hidden['fil_ambiente_sri'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_ambiente_sri" value="<?php echo $this->form_encode_input($this->fil_ambiente_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_ambiente_sri_label" id="hidden_field_label_fil_ambiente_sri" style="<?php echo $sStyleHidden_fil_ambiente_sri; ?>"><span id="id_label_fil_ambiente_sri"><?php echo $this->nm_new_label['fil_ambiente_sri']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_ambiente_sri_line" id="hidden_field_data_fil_ambiente_sri" style="<?php echo $sStyleHidden_fil_ambiente_sri; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_ambiente_sri_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_ambiente_sri"]) &&  $this->nmgp_cmp_readonly["fil_ambiente_sri"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ambiente_sri']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ambiente_sri'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ambiente_sri']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ambiente_sri'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ambiente_sri']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ambiente_sri'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ambiente_sri']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ambiente_sri'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT ta_id, ta_nombre  FROM sri_tipo_ambiente  ORDER BY ta_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ambiente_sri'][] = $rs->fields[0];
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
   $fil_ambiente_sri_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_ambiente_sri_1))
          {
              foreach ($this->fil_ambiente_sri_1 as $tmp_fil_ambiente_sri)
              {
                  if (trim($tmp_fil_ambiente_sri) === trim($cadaselect[1])) {$fil_ambiente_sri_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_ambiente_sri) && trim($this->fil_ambiente_sri) === trim($cadaselect[1])) {$fil_ambiente_sri_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fil_ambiente_sri" value="<?php echo $this->form_encode_input($fil_ambiente_sri) . "\">" . $fil_ambiente_sri_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fil_ambiente_sri();
   $x = 0 ; 
   $fil_ambiente_sri_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_ambiente_sri_1))
          {
              foreach ($this->fil_ambiente_sri_1 as $tmp_fil_ambiente_sri)
              {
                  if (trim($tmp_fil_ambiente_sri) === trim($cadaselect[1])) {$fil_ambiente_sri_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_ambiente_sri) && trim($this->fil_ambiente_sri) === trim($cadaselect[1])) { $fil_ambiente_sri_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fil_ambiente_sri_look))
          {
              $fil_ambiente_sri_look = $this->fil_ambiente_sri;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fil_ambiente_sri\" class=\"css_fil_ambiente_sri_line\" style=\"" .  $sStyleReadLab_fil_ambiente_sri . "\">" . $this->form_format_readonly("fil_ambiente_sri", $this->form_encode_input($fil_ambiente_sri_look)) . "</span><span id=\"id_read_off_fil_ambiente_sri\" class=\"css_read_off_fil_ambiente_sri" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fil_ambiente_sri . "\">";
   echo " <span id=\"idAjaxSelect_fil_ambiente_sri\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fil_ambiente_sri_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fil_ambiente_sri\" name=\"fil_ambiente_sri\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fil_ambiente_sri) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fil_ambiente_sri)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_ambiente_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_ambiente_sri_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['fil_estado']))
   {
       $this->nm_new_label['fil_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_estado = $this->fil_estado;
   $sStyleHidden_fil_estado = '';
   if (isset($this->nmgp_cmp_hidden['fil_estado']) && $this->nmgp_cmp_hidden['fil_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_estado']);
       $sStyleHidden_fil_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_estado = 'display: none;';
   $sStyleReadInp_fil_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_estado']) && $this->nmgp_cmp_readonly['fil_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_estado']);
       $sStyleReadLab_fil_estado = '';
       $sStyleReadInp_fil_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_estado']) && $this->nmgp_cmp_hidden['fil_estado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_estado" value="<?php echo $this->form_encode_input($this->fil_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_estado_label" id="hidden_field_label_fil_estado" style="<?php echo $sStyleHidden_fil_estado; ?>"><span id="id_label_fil_estado"><?php echo $this->nm_new_label['fil_estado']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_estado_line" id="hidden_field_data_fil_estado" style="<?php echo $sStyleHidden_fil_estado; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_estado_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_estado"]) &&  $this->nmgp_cmp_readonly["fil_estado"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_estado'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_estado'][] = $rs->fields[0];
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
   $fil_estado_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_estado_1))
          {
              foreach ($this->fil_estado_1 as $tmp_fil_estado)
              {
                  if (trim($tmp_fil_estado) === trim($cadaselect[1])) {$fil_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_estado) && trim($this->fil_estado) === trim($cadaselect[1])) {$fil_estado_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fil_estado" value="<?php echo $this->form_encode_input($fil_estado) . "\">" . $fil_estado_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fil_estado();
   $x = 0 ; 
   $fil_estado_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_estado_1))
          {
              foreach ($this->fil_estado_1 as $tmp_fil_estado)
              {
                  if (trim($tmp_fil_estado) === trim($cadaselect[1])) {$fil_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_estado) && trim($this->fil_estado) === trim($cadaselect[1])) { $fil_estado_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fil_estado_look))
          {
              $fil_estado_look = $this->fil_estado;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fil_estado\" class=\"css_fil_estado_line\" style=\"" .  $sStyleReadLab_fil_estado . "\">" . $this->form_format_readonly("fil_estado", $this->form_encode_input($fil_estado_look)) . "</span><span id=\"id_read_off_fil_estado\" class=\"css_read_off_fil_estado" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fil_estado . "\">";
   echo " <span id=\"idAjaxSelect_fil_estado\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fil_estado_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fil_estado\" name=\"fil_estado\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fil_estado) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fil_estado)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_estado_text"></span></td></tr></table></td></tr></table></TD>
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
   if (!isset($this->nm_new_label['fil_pais']))
   {
       $this->nm_new_label['fil_pais'] = "" . $this->Ini->Nm_lang['lang_pais'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_pais = $this->fil_pais;
   $sStyleHidden_fil_pais = '';
   if (isset($this->nmgp_cmp_hidden['fil_pais']) && $this->nmgp_cmp_hidden['fil_pais'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_pais']);
       $sStyleHidden_fil_pais = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_pais = 'display: none;';
   $sStyleReadInp_fil_pais = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_pais']) && $this->nmgp_cmp_readonly['fil_pais'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_pais']);
       $sStyleReadLab_fil_pais = '';
       $sStyleReadInp_fil_pais = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_pais']) && $this->nmgp_cmp_hidden['fil_pais'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_pais" value="<?php echo $this->form_encode_input($this->fil_pais) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_pais_label" id="hidden_field_label_fil_pais" style="<?php echo $sStyleHidden_fil_pais; ?>"><span id="id_label_fil_pais"><?php echo $this->nm_new_label['fil_pais']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_pais_line" id="hidden_field_data_fil_pais" style="<?php echo $sStyleHidden_fil_pais; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_pais_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_pais"]) &&  $this->nmgp_cmp_readonly["fil_pais"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_pais'] = array(); 
    }
   $fil_padronrimpe_val_str = "''";
   if (!empty($this->fil_padronrimpe))
   {
       if (is_array($this->fil_padronrimpe))
       {
           $Tmp_array = $this->fil_padronrimpe;
       }
       else
       {
           $Tmp_array = explode(";", $this->fil_padronrimpe);
       }
       $fil_padronrimpe_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $fil_padronrimpe_val_str)
          {
             $fil_padronrimpe_val_str .= ", ";
          }
          $fil_padronrimpe_val_str .= "'$Tmp_val_cmp'";
       }
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_pais'][] = $rs->fields[0];
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
   $fil_pais_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_pais_1))
          {
              foreach ($this->fil_pais_1 as $tmp_fil_pais)
              {
                  if (trim($tmp_fil_pais) === trim($cadaselect[1])) {$fil_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_pais) && trim($this->fil_pais) === trim($cadaselect[1])) {$fil_pais_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fil_pais" value="<?php echo $this->form_encode_input($fil_pais) . "\">" . $fil_pais_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fil_pais();
   $x = 0 ; 
   $fil_pais_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_pais_1))
          {
              foreach ($this->fil_pais_1 as $tmp_fil_pais)
              {
                  if (trim($tmp_fil_pais) === trim($cadaselect[1])) {$fil_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_pais) && trim($this->fil_pais) === trim($cadaselect[1])) { $fil_pais_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fil_pais_look))
          {
              $fil_pais_look = $this->fil_pais;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fil_pais\" class=\"css_fil_pais_line\" style=\"" .  $sStyleReadLab_fil_pais . "\">" . $this->form_format_readonly("fil_pais", $this->form_encode_input($fil_pais_look)) . "</span><span id=\"id_read_off_fil_pais\" class=\"css_read_off_fil_pais" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fil_pais . "\">";
   echo " <span id=\"idAjaxSelect_fil_pais\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fil_pais_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fil_pais\" name=\"fil_pais\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fil_pais) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fil_pais)) 
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
   if (isset($this->Ini->sc_lig_md5["form_sis_pais"]) && $this->Ini->sc_lig_md5["form_sis_pais"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_sis_filial_lkpedt_refresh_fil_pais*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_sis_filial@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_sis_filial_lkpedt_refresh_fil_pais*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "", "", "fldedt_fil_pais", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->link_form_sis_pais_edit . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=form_sis_filial&KeepThis=true&TB_iframe=true&height=400&width=640&modal=true", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_pais_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_pais_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['fil_provincia']))
   {
       $this->nm_new_label['fil_provincia'] = "" . $this->Ini->Nm_lang['lang_provincia'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_provincia = $this->fil_provincia;
   $sStyleHidden_fil_provincia = '';
   if (isset($this->nmgp_cmp_hidden['fil_provincia']) && $this->nmgp_cmp_hidden['fil_provincia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_provincia']);
       $sStyleHidden_fil_provincia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_provincia = 'display: none;';
   $sStyleReadInp_fil_provincia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_provincia']) && $this->nmgp_cmp_readonly['fil_provincia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_provincia']);
       $sStyleReadLab_fil_provincia = '';
       $sStyleReadInp_fil_provincia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_provincia']) && $this->nmgp_cmp_hidden['fil_provincia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_provincia" value="<?php echo $this->form_encode_input($this->fil_provincia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_provincia_label" id="hidden_field_label_fil_provincia" style="<?php echo $sStyleHidden_fil_provincia; ?>"><span id="id_label_fil_provincia"><?php echo $this->nm_new_label['fil_provincia']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_provincia_line" id="hidden_field_data_fil_provincia" style="<?php echo $sStyleHidden_fil_provincia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_provincia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_provincia"]) &&  $this->nmgp_cmp_readonly["fil_provincia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_provincia'] = array(); 
}
if ($this->fil_pais != "")
{ 
   $this->nm_clear_val("fil_pais");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_provincia'] = array(); 
    }
   $nm_comando = "SELECT pro_id, pro_nombre  FROM sis_provincia  where pro_pais=$this->fil_pais ORDER BY pro_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_provincia'][] = $rs->fields[0];
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
   $fil_provincia_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_provincia_1))
          {
              foreach ($this->fil_provincia_1 as $tmp_fil_provincia)
              {
                  if (trim($tmp_fil_provincia) === trim($cadaselect[1])) {$fil_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_provincia) && trim($this->fil_provincia) === trim($cadaselect[1])) {$fil_provincia_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fil_provincia" value="<?php echo $this->form_encode_input($fil_provincia) . "\">" . $fil_provincia_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fil_provincia();
   $x = 0 ; 
   $fil_provincia_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_provincia_1))
          {
              foreach ($this->fil_provincia_1 as $tmp_fil_provincia)
              {
                  if (trim($tmp_fil_provincia) === trim($cadaselect[1])) {$fil_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_provincia) && trim($this->fil_provincia) === trim($cadaselect[1])) { $fil_provincia_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fil_provincia_look))
          {
              $fil_provincia_look = $this->fil_provincia;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fil_provincia\" class=\"css_fil_provincia_line\" style=\"" .  $sStyleReadLab_fil_provincia . "\">" . $this->form_format_readonly("fil_provincia", $this->form_encode_input($fil_provincia_look)) . "</span><span id=\"id_read_off_fil_provincia\" class=\"css_read_off_fil_provincia" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fil_provincia . "\">";
   echo " <span id=\"idAjaxSelect_fil_provincia\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fil_provincia_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fil_provincia\" name=\"fil_provincia\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fil_provincia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fil_provincia)) 
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
   if (isset($this->Ini->sc_lig_md5["form_sis_provincia"]) && $this->Ini->sc_lig_md5["form_sis_provincia"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_sis_filial_lkpedt_refresh_fil_provincia*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_sis_filial@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_sis_filial_lkpedt_refresh_fil_provincia*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "", "", "fldedt_fil_provincia", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->link_form_sis_provincia_edit . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=form_sis_filial&KeepThis=true&TB_iframe=true&height=400&width=640&modal=true", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_provincia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_provincia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fil_ciudad']))
   {
       $this->nm_new_label['fil_ciudad'] = "" . $this->Ini->Nm_lang['lang_ciudad'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_ciudad = $this->fil_ciudad;
   $sStyleHidden_fil_ciudad = '';
   if (isset($this->nmgp_cmp_hidden['fil_ciudad']) && $this->nmgp_cmp_hidden['fil_ciudad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_ciudad']);
       $sStyleHidden_fil_ciudad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_ciudad = 'display: none;';
   $sStyleReadInp_fil_ciudad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_ciudad']) && $this->nmgp_cmp_readonly['fil_ciudad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_ciudad']);
       $sStyleReadLab_fil_ciudad = '';
       $sStyleReadInp_fil_ciudad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_ciudad']) && $this->nmgp_cmp_hidden['fil_ciudad'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_ciudad" value="<?php echo $this->form_encode_input($this->fil_ciudad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_ciudad_label" id="hidden_field_label_fil_ciudad" style="<?php echo $sStyleHidden_fil_ciudad; ?>"><span id="id_label_fil_ciudad"><?php echo $this->nm_new_label['fil_ciudad']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_ciudad_line" id="hidden_field_data_fil_ciudad" style="<?php echo $sStyleHidden_fil_ciudad; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_ciudad_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_ciudad"]) &&  $this->nmgp_cmp_readonly["fil_ciudad"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ciudad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ciudad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ciudad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ciudad'] = array(); 
}
if ($this->fil_provincia != "")
{ 
   $this->nm_clear_val("fil_provincia");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ciudad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ciudad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ciudad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ciudad'] = array(); 
    }
   $nm_comando = "SELECT can_id, can_nombre  FROM sis_canton  WHERE can_provincia='$this->fil_provincia' ORDER BY can_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_ciudad'][] = $rs->fields[0];
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
   $fil_ciudad_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_ciudad_1))
          {
              foreach ($this->fil_ciudad_1 as $tmp_fil_ciudad)
              {
                  if (trim($tmp_fil_ciudad) === trim($cadaselect[1])) {$fil_ciudad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_ciudad) && trim($this->fil_ciudad) === trim($cadaselect[1])) {$fil_ciudad_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fil_ciudad" value="<?php echo $this->form_encode_input($fil_ciudad) . "\">" . $fil_ciudad_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fil_ciudad();
   $x = 0 ; 
   $fil_ciudad_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_ciudad_1))
          {
              foreach ($this->fil_ciudad_1 as $tmp_fil_ciudad)
              {
                  if (trim($tmp_fil_ciudad) === trim($cadaselect[1])) {$fil_ciudad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_ciudad) && trim($this->fil_ciudad) === trim($cadaselect[1])) { $fil_ciudad_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fil_ciudad_look))
          {
              $fil_ciudad_look = $this->fil_ciudad;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fil_ciudad\" class=\"css_fil_ciudad_line\" style=\"" .  $sStyleReadLab_fil_ciudad . "\">" . $this->form_format_readonly("fil_ciudad", $this->form_encode_input($fil_ciudad_look)) . "</span><span id=\"id_read_off_fil_ciudad\" class=\"css_read_off_fil_ciudad" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fil_ciudad . "\">";
   echo " <span id=\"idAjaxSelect_fil_ciudad\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fil_ciudad_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fil_ciudad\" name=\"fil_ciudad\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fil_ciudad) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fil_ciudad)) 
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
   if (isset($this->Ini->sc_lig_md5["form_sis_canton"]) && $this->Ini->sc_lig_md5["form_sis_canton"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_sis_filial_lkpedt_refresh_fil_ciudad*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_sis_filial@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_sis_filial_lkpedt_refresh_fil_ciudad*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "", "", "fldedt_fil_ciudad", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->link_form_sis_canton_edit . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=form_sis_filial&KeepThis=true&TB_iframe=true&height=400&width=640&modal=true", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_ciudad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_ciudad_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['fil_parroquia']))
   {
       $this->nm_new_label['fil_parroquia'] = "" . $this->Ini->Nm_lang['lang_parroquia'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_parroquia = $this->fil_parroquia;
   $sStyleHidden_fil_parroquia = '';
   if (isset($this->nmgp_cmp_hidden['fil_parroquia']) && $this->nmgp_cmp_hidden['fil_parroquia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_parroquia']);
       $sStyleHidden_fil_parroquia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_parroquia = 'display: none;';
   $sStyleReadInp_fil_parroquia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_parroquia']) && $this->nmgp_cmp_readonly['fil_parroquia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_parroquia']);
       $sStyleReadLab_fil_parroquia = '';
       $sStyleReadInp_fil_parroquia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_parroquia']) && $this->nmgp_cmp_hidden['fil_parroquia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fil_parroquia" value="<?php echo $this->form_encode_input($this->fil_parroquia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_parroquia_label" id="hidden_field_label_fil_parroquia" style="<?php echo $sStyleHidden_fil_parroquia; ?>"><span id="id_label_fil_parroquia"><?php echo $this->nm_new_label['fil_parroquia']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_parroquia_line" id="hidden_field_data_fil_parroquia" style="<?php echo $sStyleHidden_fil_parroquia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_parroquia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_parroquia"]) &&  $this->nmgp_cmp_readonly["fil_parroquia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_parroquia'] = array(); 
}
if ($this->fil_ciudad != "")
{ 
   $this->nm_clear_val("fil_ciudad");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_parroquia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_parroquia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_parroquia'] = array(); 
    }
   $nm_comando = "SELECT parr_id, parr_nombre  FROM sis_parroquia  WHERE parr_canton='$this->fil_ciudad' ORDER BY parr_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lookup_fil_parroquia'][] = $rs->fields[0];
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
   $fil_parroquia_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_parroquia_1))
          {
              foreach ($this->fil_parroquia_1 as $tmp_fil_parroquia)
              {
                  if (trim($tmp_fil_parroquia) === trim($cadaselect[1])) {$fil_parroquia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_parroquia) && trim($this->fil_parroquia) === trim($cadaselect[1])) {$fil_parroquia_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fil_parroquia" value="<?php echo $this->form_encode_input($fil_parroquia) . "\">" . $fil_parroquia_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fil_parroquia();
   $x = 0 ; 
   $fil_parroquia_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fil_parroquia_1))
          {
              foreach ($this->fil_parroquia_1 as $tmp_fil_parroquia)
              {
                  if (trim($tmp_fil_parroquia) === trim($cadaselect[1])) {$fil_parroquia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fil_parroquia) && trim($this->fil_parroquia) === trim($cadaselect[1])) { $fil_parroquia_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fil_parroquia_look))
          {
              $fil_parroquia_look = $this->fil_parroquia;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fil_parroquia\" class=\"css_fil_parroquia_line\" style=\"" .  $sStyleReadLab_fil_parroquia . "\">" . $this->form_format_readonly("fil_parroquia", $this->form_encode_input($fil_parroquia_look)) . "</span><span id=\"id_read_off_fil_parroquia\" class=\"css_read_off_fil_parroquia" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fil_parroquia . "\">";
   echo " <span id=\"idAjaxSelect_fil_parroquia\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fil_parroquia_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fil_parroquia\" name=\"fil_parroquia\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fil_parroquia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fil_parroquia)) 
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
   if (isset($this->Ini->sc_lig_md5["form_sis_parroquia"]) && $this->Ini->sc_lig_md5["form_sis_parroquia"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_sis_filial_lkpedt_refresh_fil_parroquia*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_sis_filial@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_sis_filial_lkpedt_refresh_fil_parroquia*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "", "", "fldedt_fil_parroquia", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->link_form_sis_parroquia_edit . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=form_sis_filial&KeepThis=true&TB_iframe=true&height=400&width=640&modal=true", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_parroquia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_parroquia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fil_barrio']))
    {
        $this->nm_new_label['fil_barrio'] = "" . $this->Ini->Nm_lang['lang_lot_barrio'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_barrio = $this->fil_barrio;
   $sStyleHidden_fil_barrio = '';
   if (isset($this->nmgp_cmp_hidden['fil_barrio']) && $this->nmgp_cmp_hidden['fil_barrio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_barrio']);
       $sStyleHidden_fil_barrio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_barrio = 'display: none;';
   $sStyleReadInp_fil_barrio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_barrio']) && $this->nmgp_cmp_readonly['fil_barrio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_barrio']);
       $sStyleReadLab_fil_barrio = '';
       $sStyleReadInp_fil_barrio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_barrio']) && $this->nmgp_cmp_hidden['fil_barrio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_barrio" value="<?php echo $this->form_encode_input($fil_barrio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_barrio_label" id="hidden_field_label_fil_barrio" style="<?php echo $sStyleHidden_fil_barrio; ?>"><span id="id_label_fil_barrio"><?php echo $this->nm_new_label['fil_barrio']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_barrio_line" id="hidden_field_data_fil_barrio" style="<?php echo $sStyleHidden_fil_barrio; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_barrio_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_barrio"]) &&  $this->nmgp_cmp_readonly["fil_barrio"] == "on") { 

 ?>
<input type="hidden" name="fil_barrio" value="<?php echo $this->form_encode_input($fil_barrio) . "\">" . $fil_barrio . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_barrio" class="sc-ui-readonly-fil_barrio css_fil_barrio_line" style="<?php echo $sStyleReadLab_fil_barrio; ?>"><?php echo $this->form_format_readonly("fil_barrio", $this->form_encode_input($this->fil_barrio)); ?></span><span id="id_read_off_fil_barrio" class="css_read_off_fil_barrio<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_barrio; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_barrio_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_barrio" type=text name="fil_barrio" value="<?php echo $this->form_encode_input($fil_barrio) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_barrio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_barrio_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fil_direccion']))
    {
        $this->nm_new_label['fil_direccion'] = "Fil Direccion";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_direccion = $this->fil_direccion;
   $sStyleHidden_fil_direccion = '';
   if (isset($this->nmgp_cmp_hidden['fil_direccion']) && $this->nmgp_cmp_hidden['fil_direccion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_direccion']);
       $sStyleHidden_fil_direccion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_direccion = 'display: none;';
   $sStyleReadInp_fil_direccion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_direccion']) && $this->nmgp_cmp_readonly['fil_direccion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_direccion']);
       $sStyleReadLab_fil_direccion = '';
       $sStyleReadInp_fil_direccion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_direccion']) && $this->nmgp_cmp_hidden['fil_direccion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_direccion" value="<?php echo $this->form_encode_input($fil_direccion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_direccion_label" id="hidden_field_label_fil_direccion" style="<?php echo $sStyleHidden_fil_direccion; ?>"><span id="id_label_fil_direccion"><?php echo $this->nm_new_label['fil_direccion']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_direccion_line" id="hidden_field_data_fil_direccion" style="<?php echo $sStyleHidden_fil_direccion; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_direccion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_direccion"]) &&  $this->nmgp_cmp_readonly["fil_direccion"] == "on") { 

 ?>
<input type="hidden" name="fil_direccion" value="<?php echo $this->form_encode_input($fil_direccion) . "\">" . $fil_direccion . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_direccion" class="sc-ui-readonly-fil_direccion css_fil_direccion_line" style="<?php echo $sStyleReadLab_fil_direccion; ?>"><?php echo $this->form_format_readonly("fil_direccion", $this->form_encode_input($this->fil_direccion)); ?></span><span id="id_read_off_fil_direccion" class="css_read_off_fil_direccion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_direccion; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_direccion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_direccion" type=text name="fil_direccion" value="<?php echo $this->form_encode_input($fil_direccion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_direccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_direccion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fil_referencia']))
    {
        $this->nm_new_label['fil_referencia'] = "" . $this->Ini->Nm_lang['lang_referencia'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fil_referencia = $this->fil_referencia;
   $sStyleHidden_fil_referencia = '';
   if (isset($this->nmgp_cmp_hidden['fil_referencia']) && $this->nmgp_cmp_hidden['fil_referencia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fil_referencia']);
       $sStyleHidden_fil_referencia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fil_referencia = 'display: none;';
   $sStyleReadInp_fil_referencia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fil_referencia']) && $this->nmgp_cmp_readonly['fil_referencia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fil_referencia']);
       $sStyleReadLab_fil_referencia = '';
       $sStyleReadInp_fil_referencia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fil_referencia']) && $this->nmgp_cmp_hidden['fil_referencia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fil_referencia" value="<?php echo $this->form_encode_input($fil_referencia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fil_referencia_label" id="hidden_field_label_fil_referencia" style="<?php echo $sStyleHidden_fil_referencia; ?>"><span id="id_label_fil_referencia"><?php echo $this->nm_new_label['fil_referencia']; ?></span></TD>
    <TD class="scFormDataOdd css_fil_referencia_line" id="hidden_field_data_fil_referencia" style="<?php echo $sStyleHidden_fil_referencia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fil_referencia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fil_referencia"]) &&  $this->nmgp_cmp_readonly["fil_referencia"] == "on") { 

 ?>
<input type="hidden" name="fil_referencia" value="<?php echo $this->form_encode_input($fil_referencia) . "\">" . $fil_referencia . ""; ?>
<?php } else { ?>
<span id="id_read_on_fil_referencia" class="sc-ui-readonly-fil_referencia css_fil_referencia_line" style="<?php echo $sStyleReadLab_fil_referencia; ?>"><?php echo $this->form_format_readonly("fil_referencia", $this->form_encode_input($this->fil_referencia)); ?></span><span id="id_read_off_fil_referencia" class="css_read_off_fil_referencia<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fil_referencia; ?>">
 <input class="sc-js-input scFormObjectOdd css_fil_referencia_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fil_referencia" type=text name="fil_referencia" value="<?php echo $this->form_encode_input($fil_referencia) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fil_referencia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fil_referencia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="2" >&nbsp;</TD>
<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R")
{
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['birpara']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['birpara']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['birpara']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['birpara']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['birpara'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "birpara", "scBtnFn_sys_GridPermiteSeq('b')", "scBtnFn_sys_GridPermiteSeq('b')", "brec_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label'][''];
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
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['first'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['back'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
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
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['forward'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['last'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['btn_label'][''];
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
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_sis_filial");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_sis_filial");
 parent.scAjaxDetailHeight("form_sis_filial", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_sis_filial", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_sis_filial", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['sc_modal'])
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
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-7").length && $("#sys_separator.sc-unique-btn-7").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-13").length && $("#sys_separator.sc-unique-btn-13").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-18").length && $("#sys_separator.sc-unique-btn-18").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
	}
	function scBtnFn_sys_format_inc() {
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
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
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
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-6").length && $("#sc_b_del_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
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
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-11").length && $("#sc_b_sai_t.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-12").length && $("#sc_b_sai_t.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq(btnPos) {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
		    if ($("#brec_b").hasClass("disabled")) {
		        return;
		    }
			if (document.F1['nmgp_rec_' + btnPos].value != '') {nm_navpage(document.F1['nmgp_rec_' + btnPos].value, 'P');} document.F1['nmgp_rec_' + btnPos].value = '';
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-14").length && $("#sc_b_ini_b.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-15").length && $("#sc_b_ret_b.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-16").length && $("#sc_b_avc_b.sc-unique-btn-16").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-17").length && $("#sc_b_fim_b.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_sis_filial']['buttonStatus'] = $this->nmgp_botoes;
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
