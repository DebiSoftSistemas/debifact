<?php
class grid_v_del_notas_credito_detalladas_lookup
{
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
   function lookup_slider_nc_numero()
   { 
      $nm_comando = "select min(nc_numero), max(nc_numero) from " . $this->Ini->nm_tabela . "  where (nc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
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
   function lookup_slider_nc_cliente()
   { 
      $nm_comando = "select min(nc_cliente), max(nc_cliente) from " . $this->Ini->nm_tabela . "  where (nc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
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
