<?php
class grid_v_del_facturas_detalladas_lookup
{
//  
   function lookup_fac_tipo_comprobante(&$conteudo , $fac_tipo_comprobante) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $fac_tipo_comprobante; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      $nm_comando = "select tc_nombre from sri_tipo_comprobante where tc_codigo = '" . substr($this->Db->qstr($fac_tipo_comprobante), 1 , -1) . "' order by tc_nombre" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = $rx->fields[0]; 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_mes(&$conteudo , $mes) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $mes; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      $nm_comando = "select dec_nombre from v_sis_meses where dec_id = '" . substr($this->Db->qstr($mes), 1 , -1) . "' order by dec_nombre" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = $rx->fields[0]; 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_fac_usuario(&$conteudo , $fac_usuario) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $fac_usuario; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      $nm_comando = "select usu_nombre from del_usuario where usu_usuario = '" . substr($this->Db->qstr($fac_usuario), 1 , -1) . "' order by usu_nombre" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = $rx->fields[0]; 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_sc_free_group_by_fac_tipo_comprobante(&$conteudo , $fac_tipo_comprobante) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $fac_tipo_comprobante; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      $nm_comando = "select tc_nombre from sri_tipo_comprobante where tc_codigo = '" . substr($this->Db->qstr($fac_tipo_comprobante), 1 , -1) . "' order by tc_nombre" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = $rx->fields[0]; 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_sc_free_group_by_mes(&$conteudo , $mes) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $mes; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      $nm_comando = "select dec_nombre from v_sis_meses where dec_id = '" . substr($this->Db->qstr($mes), 1 , -1) . "' order by dec_nombre" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = $rx->fields[0]; 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_sc_free_group_by_fac_usuario(&$conteudo , $fac_usuario) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $fac_usuario; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      $nm_comando = "select usu_nombre from del_usuario where usu_usuario = '" . substr($this->Db->qstr($fac_usuario), 1 , -1) . "' order by usu_nombre" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = $rx->fields[0]; 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
   function lookup_slider_fac_numero()
   { 
      $nm_comando = "select min(fac_numero), max(fac_numero) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $conteudo[0] = (int)$conteudo[0];
          $conteudo[1] = (int)$conteudo[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
   function lookup_slider_fac_cliente()
   { 
      $nm_comando = "select min(fac_cliente), max(fac_cliente) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $conteudo[0] = (int)$conteudo[0];
          $conteudo[1] = (int)$conteudo[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
   function lookup_slider_df_cantidad()
   { 
      $nm_comando = "select min(df_cantidad), max(df_cantidad) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
   function lookup_slider_df_precio_unitario()
   { 
      $nm_comando = "select min(df_precio_unitario), max(df_precio_unitario) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
   function lookup_slider_df_descuento()
   { 
      $nm_comando = "select min(df_descuento), max(df_descuento) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
   function lookup_slider_df_subtotal()
   { 
      $nm_comando = "select min(df_subtotal), max(df_subtotal) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
   function lookup_slider_df_valor_ice()
   { 
      $nm_comando = "select min(df_valor_ice), max(df_valor_ice) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
   function lookup_slider_df_valor_iva()
   { 
      $nm_comando = "select min(df_valor_iva), max(df_valor_iva) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
   function lookup_slider_df_valor_irbpnr()
   { 
      $nm_comando = "select min(df_valor_irbpnr), max(df_valor_irbpnr) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
   function lookup_slider_df_total()
   { 
      $nm_comando = "select min(df_total), max(df_total) from " . $this->Ini->nm_tabela . "  where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
      $conteudo = array();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $conteudo[0] = $rx->fields[0];
          $conteudo[1] = $rx->fields[1];
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      return $conteudo;
   } 
}
?>
