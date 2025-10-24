<?php
class grid_del_sustento_retencion_lookup
{
//  
   function lookup_sr_cod_sustento(&$conteudo , $sr_cod_sustento) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $sr_cod_sustento; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      $nm_comando = "select stg_descripcion from sri_sustento_tributario_gasto where stg_codigo = '" . substr($this->Db->qstr($sr_cod_sustento), 1 , -1) . "' order by stg_descripcion" ; 
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
   function lookup_sr_cod_docsustento(&$conteudo , $sr_cod_docsustento) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $sr_cod_docsustento; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      $nm_comando = "select tc_nombre from sri_tipo_comprobante where tc_codigo = '" . substr($this->Db->qstr($sr_cod_docsustento), 1 , -1) . "' order by tc_nombre" ; 
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
   function lookup_slider_sr_id()
   { 
      $nm_comando = "select min(sr_id), max(sr_id) from " . $this->Ini->nm_tabela . "  where (sr_retencion=" . $_SESSION['var_retencion'] . ")" ; 
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
   function lookup_slider_sr_secuencial()
   { 
      $nm_comando = "select min(sr_secuencial), max(sr_secuencial) from " . $this->Ini->nm_tabela . "  where (sr_retencion=" . $_SESSION['var_retencion'] . ")" ; 
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
}
?>
