<div id="form_admin_empresas_mob_form1" style='<?php echo ($this->tabCssClass["form_admin_empresas_mob_form1"]['class'] == 'scTabInactive' ? 'display: none; width: 1px; height: 0px; overflow: scroll' : ''); ?>'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['emp_ruc']))
           {
               $this->nmgp_cmp_readonly['emp_ruc'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['establecimiento']))
    {
        $this->nm_new_label['establecimiento'] = "establecimiento";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $establecimiento = $this->establecimiento;
   $sStyleHidden_establecimiento = '';
   if (isset($this->nmgp_cmp_hidden['establecimiento']) && $this->nmgp_cmp_hidden['establecimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['establecimiento']);
       $sStyleHidden_establecimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_establecimiento = 'display: none;';
   $sStyleReadInp_establecimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['establecimiento']) && $this->nmgp_cmp_readonly['establecimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['establecimiento']);
       $sStyleReadLab_establecimiento = '';
       $sStyleReadInp_establecimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['establecimiento']) && $this->nmgp_cmp_hidden['establecimiento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="establecimiento" value="<?php echo $this->form_encode_input($establecimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_establecimiento_line" id="hidden_field_data_establecimiento" style="<?php echo $sStyleHidden_establecimiento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_establecimiento_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_establecimiento'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_establecimiento'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['grid_admin_establecimientos_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_establecimiento'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['grid_admin_establecimientos_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['grid_admin_establecimientos_script_case_init'] ]['grid_admin_establecimientos']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['grid_admin_establecimientos_script_case_init'] ]['grid_admin_establecimientos']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['grid_admin_establecimientos_script_case_init'] ]['grid_admin_establecimientos']['embutida_pai']        = "form_admin_empresas_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['grid_admin_establecimientos_script_case_init'] ]['grid_admin_establecimientos']['embutida_form_parms'] = "var_empresa*scin" . $this->nmgp_dados_form['emp_ruc'] . "*scoutNMSC_inicial*scininicio*scout";
 if (isset($this->Ini->sc_lig_md5["grid_admin_establecimientos"]) && $this->Ini->sc_lig_md5["grid_admin_establecimientos"] == "S") {
     $Parms_Lig  = "var_empresa*scin" . $this->nmgp_dados_form['emp_ruc'] . "*scoutNMSC_inicial*scininicio*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_admin_empresas_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_empresa*scin" . $this->nmgp_dados_form['emp_ruc'] . "*scoutNMSC_inicial*scininicio*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_admin_empresas_mob_empty.htm' : $this->Ini->link_grid_admin_establecimientos_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['grid_admin_establecimientos_script_case_init'] ]['grid_admin_establecimientos'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['grid_admin_establecimientos_script_case_init'] ]['grid_admin_establecimientos'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_establecimiento']) && 'nmsc_iframe_liga_grid_admin_establecimientos' != $this->Ini->sc_lig_target['C_@scinf_establecimiento'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_establecimiento'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_admin_empresas_mob']['grid_admin_establecimientos_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_establecimiento'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_admin_establecimientos"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_admin_establecimientos"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_establecimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_establecimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
