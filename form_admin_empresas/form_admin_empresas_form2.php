<div id="form_admin_empresas_form2" style='<?php echo ($this->tabCssClass["form_admin_empresas_form2"]['class'] == 'scTabInactive' ? 'display: none; width: 1px; height: 0px; overflow: scroll' : ''); ?>'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_4" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['emp_ruc']))
           {
               $this->nmgp_cmp_readonly['emp_ruc'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['punto_emision']))
    {
        $this->nm_new_label['punto_emision'] = "punto_emision";
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

    <TD class="scFormDataOdd css_punto_emision_line" id="hidden_field_data_punto_emision" style="<?php echo $sStyleHidden_punto_emision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_punto_emision_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_punto_emision'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_punto_emision'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['grid_admin_punto_emision_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_punto_emision'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['grid_admin_punto_emision_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['grid_admin_punto_emision_script_case_init'] ]['grid_admin_punto_emision']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['grid_admin_punto_emision_script_case_init'] ]['grid_admin_punto_emision']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['grid_admin_punto_emision_script_case_init'] ]['grid_admin_punto_emision']['embutida_pai']        = "form_admin_empresas";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['grid_admin_punto_emision_script_case_init'] ]['grid_admin_punto_emision']['embutida_form_parms'] = "var_empresa*scin" . $this->nmgp_dados_form['emp_ruc'] . "*scoutNMSC_inicial*scininicio*scout";
 if (isset($this->Ini->sc_lig_md5["grid_admin_punto_emision"]) && $this->Ini->sc_lig_md5["grid_admin_punto_emision"] == "S") {
     $Parms_Lig  = "var_empresa*scin" . $this->nmgp_dados_form['emp_ruc'] . "*scoutNMSC_inicial*scininicio*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_admin_empresas@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_empresa*scin" . $this->nmgp_dados_form['emp_ruc'] . "*scoutNMSC_inicial*scininicio*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_admin_empresas_empty.htm' : $this->Ini->link_grid_admin_punto_emision_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
if (isset($this->Ini->sc_lig_target['C_@scinf_punto_emision']) && 'nmsc_iframe_liga_grid_admin_punto_emision' != $this->Ini->sc_lig_target['C_@scinf_punto_emision'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_punto_emision'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas']['grid_admin_punto_emision_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_punto_emision'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_admin_punto_emision"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_admin_punto_emision"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_punto_emision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_punto_emision_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
