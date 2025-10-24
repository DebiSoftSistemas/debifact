<?php

class grid_resumen_nc_total
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;

   var $nm_data;

   //----- 
   function __construct($sc_page)
   {
      $this->sc_page = $sc_page;
      $this->nm_data = new nm_data("es");
      if (isset($_SESSION['sc_session'][$this->sc_page]['grid_resumen_nc']['campos_busca']) && !empty($_SESSION['sc_session'][$this->sc_page]['grid_resumen_nc']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->nc_fecha = (isset($Busca_temp['nc_fecha'])) ? $Busca_temp['nc_fecha'] : ""; 
          $tmp_pos = (is_string($this->nc_fecha)) ? strpos($this->nc_fecha, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->nc_fecha))
          {
              $this->nc_fecha = substr($this->nc_fecha, 0, $tmp_pos);
          }
          $nc_fecha_2 = (isset($Busca_temp['nc_fecha_input_2'])) ? $Busca_temp['nc_fecha_input_2'] : ""; 
          $this->nc_fecha_2 = $nc_fecha_2; 
          $this->est_codigo = (isset($Busca_temp['est_codigo'])) ? $Busca_temp['est_codigo'] : ""; 
          $tmp_pos = (is_string($this->est_codigo)) ? strpos($this->est_codigo, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->est_codigo))
          {
              $this->est_codigo = substr($this->est_codigo, 0, $tmp_pos);
          }
          $this->pen_serie = (isset($Busca_temp['pen_serie'])) ? $Busca_temp['pen_serie'] : ""; 
          $tmp_pos = (is_string($this->pen_serie)) ? strpos($this->pen_serie, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pen_serie))
          {
              $this->pen_serie = substr($this->pen_serie, 0, $tmp_pos);
          }
          $this->cl_identificacion = (isset($Busca_temp['cl_identificacion'])) ? $Busca_temp['cl_identificacion'] : ""; 
          $tmp_pos = (is_string($this->cl_identificacion)) ? strpos($this->cl_identificacion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_identificacion))
          {
              $this->cl_identificacion = substr($this->cl_identificacion, 0, $tmp_pos);
          }
          $this->cl_nombre = (isset($Busca_temp['cl_nombre'])) ? $Busca_temp['cl_nombre'] : ""; 
          $tmp_pos = (is_string($this->cl_nombre)) ? strpos($this->cl_nombre, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_nombre))
          {
              $this->cl_nombre = substr($this->cl_nombre, 0, $tmp_pos);
          }
          $this->nc_usuario = (isset($Busca_temp['nc_usuario'])) ? $Busca_temp['nc_usuario'] : ""; 
          $tmp_pos = (is_string($this->nc_usuario)) ? strpos($this->nc_usuario, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->nc_usuario))
          {
              $this->nc_usuario = substr($this->nc_usuario, 0, $tmp_pos);
          }
      } 
   }


   //----- 
   function Calc_resumo_sc_free_group_by($destino_resumo, $res_export=false)
   {
      global $nm_lang;
      $this->nm_data = new nm_data("es");
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['sql_tot_res']);
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->nc_fecha = (isset($Busca_temp['nc_fecha'])) ? $Busca_temp['nc_fecha'] : ""; 
          $tmp_pos = (is_string($this->nc_fecha)) ? strpos($this->nc_fecha, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->nc_fecha))
          {
              $this->nc_fecha = substr($this->nc_fecha, 0, $tmp_pos);
          }
          $this->nc_fecha_2 = (isset($Busca_temp['nc_fecha_input_2'])) ? $Busca_temp['nc_fecha_input_2'] : ""; 
          $this->est_codigo = (isset($Busca_temp['est_codigo'])) ? $Busca_temp['est_codigo'] : ""; 
          $tmp_pos = (is_string($this->est_codigo)) ? strpos($this->est_codigo, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->est_codigo))
          {
              $this->est_codigo = substr($this->est_codigo, 0, $tmp_pos);
          }
          $this->pen_serie = (isset($Busca_temp['pen_serie'])) ? $Busca_temp['pen_serie'] : ""; 
          $tmp_pos = (is_string($this->pen_serie)) ? strpos($this->pen_serie, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pen_serie))
          {
              $this->pen_serie = substr($this->pen_serie, 0, $tmp_pos);
          }
          $this->cl_identificacion = (isset($Busca_temp['cl_identificacion'])) ? $Busca_temp['cl_identificacion'] : ""; 
          $tmp_pos = (is_string($this->cl_identificacion)) ? strpos($this->cl_identificacion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_identificacion))
          {
              $this->cl_identificacion = substr($this->cl_identificacion, 0, $tmp_pos);
          }
          $this->cl_nombre = (isset($Busca_temp['cl_nombre'])) ? $Busca_temp['cl_nombre'] : ""; 
          $tmp_pos = (is_string($this->cl_nombre)) ? strpos($this->cl_nombre, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_nombre))
          {
              $this->cl_nombre = substr($this->cl_nombre, 0, $tmp_pos);
          }
          $this->nc_usuario = (isset($Busca_temp['nc_usuario'])) ? $Busca_temp['nc_usuario'] : ""; 
          $tmp_pos = (is_string($this->nc_usuario)) ? strpos($this->nc_usuario, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->nc_usuario))
          {
              $this->nc_usuario = substr($this->nc_usuario, 0, $tmp_pos);
          }
      } 
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq'];
      $ind_qb                = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['SC_Ind_Groupby'];
      $cmp_sql_def   = array('nc_fecha' => "nc_fecha",'est_codigo' => "est_codigo",'pen_serie' => "pen_serie",'cl_identificacion' => "cl_identificacion",'cl_nombre' => "cl_nombre",'nc_secuencial_docmod' => "nc_secuencial_docmod",'nc_usuario' => "nc_usuario");
      $cmps_quebra_atual = array();
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['SC_Gb_Free_cmp'] as $cmp => $resto)
      {
          $cmps_quebra_atual[] = $cmp;
      }
      $ult_cmp_quebra_atual = $cmps_quebra_atual[(count($cmps_quebra_atual) - 1)];
      $arr_tots = "";
      $join     = "";
      $group    = "";
      $i_group  = 1;
      $cmps_gb  = "";
      $cmps_gb1 = "";
      $cmps_gb2 = "";
      $cmps_gbS = array();
      $ind_cmps = 11;
      $ind_alias = "1";
      $cmp_dim   = array();
      $all_group = array();
      foreach ($cmps_quebra_atual as $cmp_gb)
      {
          $Format_tst = $this->Ini->Get_Gb_date_format($ind_qb, $cmp_gb);
          if (!empty($Format_tst))
          {
              $Str_arg_sum = $this->Ini->Get_date_arg_sum($cmp_gb, $Format_tst, $cmp_sql_def[$cmp_gb], false, true);
              $Str_arg_sql = ($Str_arg_sum == " is null") ? $cmp_sql_def[$cmp_gb] : $this->Ini->Get_sql_date_groupby($cmp_sql_def[$cmp_gb], $Format_tst);
          }
          else
          {
              $Str_arg_sql = "";
              $Str_arg_sum = $cmp_sql_def[$cmp_gb] . " *sc# SC." . $cmp_sql_def[$cmp_gb];
          }
          $cmp_dim[$cmp_gb] = $ind_cmps;
          $temp = explode(" and ", $Str_arg_sum);
          foreach ($temp as $cada_parte)
          {
              $temp1 = explode("*sc#", $cada_parte);
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $group .= (empty($group)) ? $i_group : "," . $i_group;
              }
              elseif (!in_array($Str_arg_sql . trim($temp1[0]), $all_group))
              {
                  $group .= (empty($group)) ? $Str_arg_sql . trim($temp1[0]) : "," . $Str_arg_sql . trim($temp1[0]);
                  $all_group[] = $Str_arg_sql . trim($temp1[0]);
              }
              $cmps_gb1 .= (empty($cmps_gb1)) ? $Str_arg_sql . trim($temp1[0]) : "," . $Str_arg_sql . trim($temp1[0]);
              $cmps_gb1 .= " as a_cmp_" .  $ind_alias;
              $cmps_gb2 .= (empty($cmps_gb2)) ? $Str_arg_sql . trim($temp1[0]) : "," . $Str_arg_sql . trim($temp1[0]);
              $cmps_gb2 .= " as b_cmp_" .  $ind_alias;
              $join     .= empty($join) ? "" : " and ";
              $join     .= " SC_sel1.a_cmp_" .  $ind_alias . " =  SC_sel2.b_cmp_" .  $ind_alias;
              $ind_cmps++;
              $ind_alias++;
              $i_group++;
          }
      }
      $ind_cmps  = 11;
      $ind_alias = "1";
      $cmp_dim   = array();
      foreach ($cmps_quebra_atual as $cmp_gb)
      {
          $arr_tots .= "[\$" . $cmp_gb . "_orig]";
          $Format_tst = $this->Ini->Get_Gb_date_format($ind_qb, $cmp_gb);
          if (!empty($Format_tst))
          {
              $Str_arg_sum = $this->Ini->Get_date_arg_sum($cmp_gb, $Format_tst, $cmp_sql_def[$cmp_gb], false, true);
              $Str_arg_sql = ($Str_arg_sum == " is null") ? $cmp_sql_def[$cmp_gb] : $this->Ini->Get_sql_date_groupby($cmp_sql_def[$cmp_gb], $Format_tst);
          }
          else
          {
              $Str_arg_sql = "";
              $Str_arg_sum = $cmp_sql_def[$cmp_gb] . " *sc# SC." . $cmp_sql_def[$cmp_gb];
          }
          $cmp_dim[$cmp_gb] = $ind_cmps;
          $temp = explode(" and ", $Str_arg_sum);
          foreach ($temp as $cada_parte)
          {
              $temp1 = explode("*sc#", $cada_parte);
              $cmps_gb  .= (empty($cmps_gb)) ? "a_cmp_" .  $ind_alias : "," . "a_cmp_" .  $ind_alias;
              $cmps_gbS['a_cmp_' . $ind_alias] = $Str_arg_sql . trim($temp1[0]);
              $ind_cmps++;
              $ind_alias++;
          }
          $this->Res_Totaliza_sc_free_group_by($ind_qb, $cmp_gb, $arr_tots, $group, $join, $cmps_gb, $cmps_gb1, $cmps_gb2, $cmps_gbS, $cmp_dim, $cmps_quebra_atual, $cmp_sql_def, $res_export);
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['arr_total'] = array();
      foreach ($cmps_quebra_atual as $cmp_gb)
      {
          $Arr_tot_name = "array_total_" . $cmp_gb;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['arr_total'][$cmp_gb] = $this->$Arr_tot_name;
      }
   }

   function Res_Totaliza_sc_free_group_by($ind_qb, $cmp_tot, $arr_tots, $group, $join, $cmps_quebras, $cmps_quebras1, $cmps_quebras2, $cmps_quebrasS, $Cmp_dim, $cmps_quebra_atual, $cmp_sql_def, $res_export)
   {
      $sc_having = ((isset($parms_sub_sel['having']))) ? "  having " . $parms_sub_sel['having'] : "";
      $Tem_estat_manual = false;
      $where_ok = $this->sc_where_atual;
      $cmp_sql_tp_num = array('nc_numero' => 'N','nc_subtotal' => 'N','nc_subtotal_iva' => 'N','nc_valor_iva' => 'N','nc_subtotal_cero' => 'N','nc_subtotal_no_objeto' => 'N','nc_subtotal_excento' => 'N','nc_total_descuento' => 'N','nc_valor_ice' => 'N','nc_valor_irbpnr' => 'N','nc_total' => 'N');
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
         $cmd_simp = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4), sum(SC_metric5), sum(SC_metric6), sum(SC_metric7), sum(SC_metric8), sum(SC_metric9), sum(SC_metric10)#@#cmps_quebras#@# from (";
         $comando .= "select nc_subtotal as SC_metric1,nc_total_descuento as SC_metric2,nc_valor_iva as SC_metric3,nc_total as SC_metric4,nc_subtotal_iva as SC_metric5,nc_subtotal_cero as SC_metric6,nc_subtotal_no_objeto as SC_metric7,nc_subtotal_excento as SC_metric8,nc_valor_ice as SC_metric9,nc_valor_irbpnr as SC_metric10, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
         $cmd_simp = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4), sum(SC_metric5), sum(SC_metric6), sum(SC_metric7), sum(SC_metric8), sum(SC_metric9), sum(SC_metric10)#@#cmps_quebras#@# from (";
         $comando .= "select nc_subtotal as SC_metric1,nc_total_descuento as SC_metric2,nc_valor_iva as SC_metric3,nc_total as SC_metric4,nc_subtotal_iva as SC_metric5,nc_subtotal_cero as SC_metric6,nc_subtotal_no_objeto as SC_metric7,nc_subtotal_excento as SC_metric8,nc_valor_ice as SC_metric9,nc_valor_irbpnr as SC_metric10, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
         $cmd_simp = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4), sum(SC_metric5), sum(SC_metric6), sum(SC_metric7), sum(SC_metric8), sum(SC_metric9), sum(SC_metric10)#@#cmps_quebras#@# from (";
         $comando .= "select nc_subtotal as SC_metric1,nc_total_descuento as SC_metric2,nc_valor_iva as SC_metric3,nc_total as SC_metric4,nc_subtotal_iva as SC_metric5,nc_subtotal_cero as SC_metric6,nc_subtotal_no_objeto as SC_metric7,nc_subtotal_excento as SC_metric8,nc_valor_ice as SC_metric9,nc_valor_irbpnr as SC_metric10, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
         $cmd_simp = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4), sum(SC_metric5), sum(SC_metric6), sum(SC_metric7), sum(SC_metric8), sum(SC_metric9), sum(SC_metric10)#@#cmps_quebras#@# from (";
         $comando .= "select nc_subtotal as SC_metric1,nc_total_descuento as SC_metric2,nc_valor_iva as SC_metric3,nc_total as SC_metric4,nc_subtotal_iva as SC_metric5,nc_subtotal_cero as SC_metric6,nc_subtotal_no_objeto as SC_metric7,nc_subtotal_excento as SC_metric8,nc_valor_ice as SC_metric9,nc_valor_irbpnr as SC_metric10, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
         $cmd_simp = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4), sum(SC_metric5), sum(SC_metric6), sum(SC_metric7), sum(SC_metric8), sum(SC_metric9), sum(SC_metric10)#@#cmps_quebras#@# from (";
         $comando .= "select nc_subtotal as SC_metric1,nc_total_descuento as SC_metric2,nc_valor_iva as SC_metric3,nc_total as SC_metric4,nc_subtotal_iva as SC_metric5,nc_subtotal_cero as SC_metric6,nc_subtotal_no_objeto as SC_metric7,nc_subtotal_excento as SC_metric8,nc_valor_ice as SC_metric9,nc_valor_irbpnr as SC_metric10, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      else 
      { 
         $cmd_simp = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4), sum(SC_metric5), sum(SC_metric6), sum(SC_metric7), sum(SC_metric8), sum(SC_metric9), sum(SC_metric10)#@#cmps_quebras#@# from (";
         $comando .= "select nc_subtotal as SC_metric1,nc_total_descuento as SC_metric2,nc_valor_iva as SC_metric3,nc_total as SC_metric4,nc_subtotal_iva as SC_metric5,nc_subtotal_cero as SC_metric6,nc_subtotal_no_objeto as SC_metric7,nc_subtotal_excento as SC_metric8,nc_valor_ice as SC_metric9,nc_valor_irbpnr as SC_metric10, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['sql_tot_res']))
      {
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['sql_tot_res'] = str_replace("#@#cmps_quebras#@#", "", $comando);
      }
      $comando  = str_replace("#@#cmps_quebras#@#", "," . $cmps_quebras, $comando);
      $comando .= " group by " . $cmps_quebras . " order by " .  $cmps_quebras;
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['Res_search_metric_use']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['Res_search_metric_use']))
      {
          $comando = $cmd_simp;
          $cmps_S  = "";
          foreach ($cmps_quebrasS as $alias => $sql)
          {
              $cmps_S .= empty($cmps_S) ? $sql : ", " . $sql;
          }
          $comando = str_replace("#@#cmps_quebras#@#", "," . $cmps_S, $comando);
          $order_group = "";
          foreach ($cmps_quebrasS as $alias => $cada_tst)
          {
              $cada_tst = trim($cada_tst);
              $pos = strpos(" " . $order_group, " " . $cada_tst);
              if ($pos === false)
              {
                  $order_group .= (!empty($order_group)) ? ", " . $cada_tst : $cada_tst;
              }
          }
          $comando .= " group by " . $order_group . " order by " .  $order_group;
      }
      $comando  = $this->Ajust_statistic($comando);
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($comando))
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit;
      }
      $format_dimensions = array();
      $format_dimensions['nc_fecha']['reg'] = "S";
      $format_dimensions['nc_fecha']['msk'] = "";
      $format_dimensions['est_codigo']['reg'] = "S";
      $format_dimensions['est_codigo']['msk'] = "";
      $format_dimensions['pen_serie']['reg'] = "S";
      $format_dimensions['pen_serie']['msk'] = "";
      $format_dimensions['cl_identificacion']['reg'] = "S";
      $format_dimensions['cl_identificacion']['msk'] = "";
      $format_dimensions['cl_nombre']['reg'] = "S";
      $format_dimensions['cl_nombre']['msk'] = "";
      $format_dimensions['nc_secuencial_docmod']['reg'] = "S";
      $format_dimensions['nc_secuencial_docmod']['msk'] = "";
      $format_dimensions['nc_usuario']['reg'] = "S";
      $format_dimensions['nc_usuario']['msk'] = "";
      while (!$rt->EOF)
      {
          $sql_where = "";
          foreach ($Cmp_dim as $Cada_dim => $Ind_sql)
          {
              $prep_look  = $Cada_dim . "_SC_look";
              $$prep_look = $rt->fields[$Ind_sql];
              $SC_prep = $this->Ini->Get_format_dimension($Ind_sql, 'sc_free_group_by', $Cada_dim, $rt, $format_dimensions[$Cada_dim]['reg'], $format_dimensions[$Cada_dim]['msk']);
              $SC_orig = $Cada_dim . "_orig";
              $SC_graf = "val_grafico_" . $Cada_dim;
              $$Cada_dim = $SC_prep['fmt'];
              $$SC_orig = $SC_prep['orig'];
              if ($Cada_dim == "est_codigo") {
              }
              if ($Cada_dim == "pen_serie") {
              }
              if ($Cada_dim == "cl_identificacion") {
              }
              if ($Cada_dim == "cl_nombre") {
              }
              if ($Cada_dim == "nc_secuencial_docmod") {
              }
              if ($Cada_dim == "nc_usuario") {
                  $this->Lookup->lookup_sc_free_group_by_nc_usuario($$Cada_dim,  $nc_usuario);
              }
              if (null === $$Cada_dim)
              {
                  $$Cada_dim = '';
              }
              if (null === $$SC_orig)
              {
                  $$SC_orig = '__SCNULL__';
              }
              $$SC_graf = $$Cada_dim;
              if ($Tem_estat_manual)
              {
                  $Format_tst = $this->Ini->Get_Gb_date_format($ind_qb, $Cada_dim);
                  if (!empty($Format_tst))
                  {
                      $val_sql  = $rt->fields[$Ind_sql];
                      if ($Format_tst == 'YYYYMMDDHHII')
                      {
                          $val_sql .= "-" . $rt->fields[$Ind_sql + 1] . "-" . $rt->fields[$Ind_sql + 2] . " " . $rt->fields[$Ind_sql + 3] . ":" . $rt->fields[$Ind_sql + 4];
                      }
                      if ($Format_tst == 'YYYYMMDDHH')
                      {
                          $val_sql .= "-" . $rt->fields[$Ind_sql + 1] . "-" . $rt->fields[$Ind_sql + 2] . " " . $rt->fields[$Ind_sql + 3];
                      }
                      if ($Format_tst == 'YYYYMMDD2')
                      {
                          $val_sql .= "-" . $rt->fields[$Ind_sql + 1] . "-" . $rt->fields[$Ind_sql + 2];
                      }
                      if ($Format_tst == 'YYYYMM')
                      {
                          $val_sql .= "-" . $rt->fields[$Ind_sql + 1];
                      }
                      if ($Format_tst == 'YYYYHH' || $Format_tst == 'YYYYDD' || $Format_tst == 'YYYYDAYNAME' || $Format_tst == 'YYYYWEEK' || $Format_tst == 'YYYYBIMONTHLY' || $Format_tst == 'YYYYQUARTER' || $Format_tst == 'YYYYFOURMONTHS' || $Format_tst == 'YYYYSEMIANNUAL')
                      {
                          $val_sql .= $rt->fields[$Ind_sql + 1];
                      }
                      if ($Format_tst == 'HHIISS')
                      {
                          $val_sql  = $rt->fields[$Ind_sql] . ":" . $rt->fields[$Ind_sql + 1] . ":" . $rt->fields[$Ind_sql + 2];
                      }
                      if ($Format_tst == 'HHII')
                      {
                          $val_sql  = $rt->fields[$Ind_sql] . ":" . $rt->fields[$Ind_sql + 1];
                      }
                      $Str_arg_sum = $this->Ini->Get_date_arg_sum($val_sql, $Format_tst, $cmp_sql_def[$Cada_dim], true);
                      $Str_arg_sql = ($Str_arg_sum == " is null") ? $cmp_sql_def[$Cada_dim] : $this->Ini->Get_sql_date_groupby($cmp_sql_def[$Cada_dim], $Format_tst);
                  }
                  elseif (isset($cmp_sql_tp_num[$Cada_dim]))
                  {
                      $Str_arg_sql = $cmp_sql_def[$Cada_dim];
                      $Str_arg_sum = " = " . $rt->fields[$Ind_sql];
                  }
                  else
                  {
                      $Str_arg_sql = $cmp_sql_def[$Cada_dim];
                      $Str_arg_sum = " = " . $this->Db->qstr($rt->fields[$Ind_sql]);
                  }
                  $sql_where .= (!empty($sql_where)) ? " and " : "";
                  $sql_where .= $Str_arg_sql . $Str_arg_sum;
              }
          }
          if ($Tem_estat_manual)
          {
              $where_ok = (empty($this->sc_where_atual)) ? " where " . $sql_where : $this->sc_where_atual . " and " . $sql_where;
              $vl_statistic = $this->Calc_statist_manual_sc_free_group_by($where_ok);
              foreach ($vl_statistic as $ind => $val)
              {
                  $rt->fields[$ind] = $val;
              }
          }
          $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
          $rt->fields[1] = (strpos(strtolower($rt->fields[1]), "e")) ? (float)$rt->fields[1] : $rt->fields[1]; 
          $rt->fields[1] = (string)$rt->fields[1];
          if ($rt->fields[1] == "") 
          {
              $rt->fields[1] = 0;
          }
          if (substr($rt->fields[1], 0, 1) == ".") 
          {
              $rt->fields[1] = "0" . $rt->fields[1];
          }
          if (substr($rt->fields[1], 0, 2) == "-.") 
          {
              $rt->fields[1] = "-0" . substr($rt->fields[1], 1);
          }
          nmgp_Trunc_Num($rt->fields[1], 2);
          $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
          $rt->fields[2] = (strpos(strtolower($rt->fields[2]), "e")) ? (float)$rt->fields[2] : $rt->fields[2]; 
          $rt->fields[2] = (string)$rt->fields[2];
          if ($rt->fields[2] == "") 
          {
              $rt->fields[2] = 0;
          }
          if (substr($rt->fields[2], 0, 1) == ".") 
          {
              $rt->fields[2] = "0" . $rt->fields[2];
          }
          if (substr($rt->fields[2], 0, 2) == "-.") 
          {
              $rt->fields[2] = "-0" . substr($rt->fields[2], 1);
          }
          nmgp_Trunc_Num($rt->fields[2], 2);
          $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
          $rt->fields[3] = (strpos(strtolower($rt->fields[3]), "e")) ? (float)$rt->fields[3] : $rt->fields[3]; 
          $rt->fields[3] = (string)$rt->fields[3];
          if ($rt->fields[3] == "") 
          {
              $rt->fields[3] = 0;
          }
          if (substr($rt->fields[3], 0, 1) == ".") 
          {
              $rt->fields[3] = "0" . $rt->fields[3];
          }
          if (substr($rt->fields[3], 0, 2) == "-.") 
          {
              $rt->fields[3] = "-0" . substr($rt->fields[3], 1);
          }
          nmgp_Trunc_Num($rt->fields[3], 2);
          $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
          $rt->fields[4] = (strpos(strtolower($rt->fields[4]), "e")) ? (float)$rt->fields[4] : $rt->fields[4]; 
          $rt->fields[4] = (string)$rt->fields[4];
          if ($rt->fields[4] == "") 
          {
              $rt->fields[4] = 0;
          }
          if (substr($rt->fields[4], 0, 1) == ".") 
          {
              $rt->fields[4] = "0" . $rt->fields[4];
          }
          if (substr($rt->fields[4], 0, 2) == "-.") 
          {
              $rt->fields[4] = "-0" . substr($rt->fields[4], 1);
          }
          nmgp_Trunc_Num($rt->fields[4], 2);
          $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
          $rt->fields[5] = (strpos(strtolower($rt->fields[5]), "e")) ? (float)$rt->fields[5] : $rt->fields[5]; 
          $rt->fields[5] = (string)$rt->fields[5];
          if ($rt->fields[5] == "") 
          {
              $rt->fields[5] = 0;
          }
          if (substr($rt->fields[5], 0, 1) == ".") 
          {
              $rt->fields[5] = "0" . $rt->fields[5];
          }
          if (substr($rt->fields[5], 0, 2) == "-.") 
          {
              $rt->fields[5] = "-0" . substr($rt->fields[5], 1);
          }
          nmgp_Trunc_Num($rt->fields[5], 2);
          $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
          $rt->fields[6] = (strpos(strtolower($rt->fields[6]), "e")) ? (float)$rt->fields[6] : $rt->fields[6]; 
          $rt->fields[6] = (string)$rt->fields[6];
          if ($rt->fields[6] == "") 
          {
              $rt->fields[6] = 0;
          }
          if (substr($rt->fields[6], 0, 1) == ".") 
          {
              $rt->fields[6] = "0" . $rt->fields[6];
          }
          if (substr($rt->fields[6], 0, 2) == "-.") 
          {
              $rt->fields[6] = "-0" . substr($rt->fields[6], 1);
          }
          nmgp_Trunc_Num($rt->fields[6], 2);
          $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
          $rt->fields[7] = (strpos(strtolower($rt->fields[7]), "e")) ? (float)$rt->fields[7] : $rt->fields[7]; 
          $rt->fields[7] = (string)$rt->fields[7];
          if ($rt->fields[7] == "") 
          {
              $rt->fields[7] = 0;
          }
          if (substr($rt->fields[7], 0, 1) == ".") 
          {
              $rt->fields[7] = "0" . $rt->fields[7];
          }
          if (substr($rt->fields[7], 0, 2) == "-.") 
          {
              $rt->fields[7] = "-0" . substr($rt->fields[7], 1);
          }
          nmgp_Trunc_Num($rt->fields[7], 2);
          $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
          $rt->fields[8] = (strpos(strtolower($rt->fields[8]), "e")) ? (float)$rt->fields[8] : $rt->fields[8]; 
          $rt->fields[8] = (string)$rt->fields[8];
          if ($rt->fields[8] == "") 
          {
              $rt->fields[8] = 0;
          }
          if (substr($rt->fields[8], 0, 1) == ".") 
          {
              $rt->fields[8] = "0" . $rt->fields[8];
          }
          if (substr($rt->fields[8], 0, 2) == "-.") 
          {
              $rt->fields[8] = "-0" . substr($rt->fields[8], 1);
          }
          nmgp_Trunc_Num($rt->fields[8], 2);
          $rt->fields[9] = str_replace(",", ".", $rt->fields[9]);
          $rt->fields[9] = (strpos(strtolower($rt->fields[9]), "e")) ? (float)$rt->fields[9] : $rt->fields[9]; 
          $rt->fields[9] = (string)$rt->fields[9];
          if ($rt->fields[9] == "") 
          {
              $rt->fields[9] = 0;
          }
          if (substr($rt->fields[9], 0, 1) == ".") 
          {
              $rt->fields[9] = "0" . $rt->fields[9];
          }
          if (substr($rt->fields[9], 0, 2) == "-.") 
          {
              $rt->fields[9] = "-0" . substr($rt->fields[9], 1);
          }
          nmgp_Trunc_Num($rt->fields[9], 2);
          $rt->fields[10] = str_replace(",", ".", $rt->fields[10]);
          $rt->fields[10] = (strpos(strtolower($rt->fields[10]), "e")) ? (float)$rt->fields[10] : $rt->fields[10]; 
          $rt->fields[10] = (string)$rt->fields[10];
          if ($rt->fields[10] == "") 
          {
              $rt->fields[10] = 0;
          }
          if (substr($rt->fields[10], 0, 1) == ".") 
          {
              $rt->fields[10] = "0" . $rt->fields[10];
          }
          if (substr($rt->fields[10], 0, 2) == "-.") 
          {
              $rt->fields[10] = "-0" . substr($rt->fields[10], 1);
          }
          nmgp_Trunc_Num($rt->fields[10], 2);
          $str_tot = "array_total_" . $cmp_tot;
          if (!isset($this->$str_tot))
          {
              $this->$str_tot = array();
          }
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[0]";
          eval ('$this->' . $str_tot . ' = ' . $rt->fields[0] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[1]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[1] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[6]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[2] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[8]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[3] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[10]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[4] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[2]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[5] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[3]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[6] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[4]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[7] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[5]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[8] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[7]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[9] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[9]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[10] . ';');
          $str_grf = "val_grafico_" . $cmp_tot;
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[11]";
          eval ('$this->' . $str_tot . ' = $' . $str_grf . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[12]";
          $str_org = $cmp_tot . "_orig";
          eval ('$this->' . $str_tot . ' = $' . $str_org . ';');
          eval ('ksort($this->array_total_' . $cmp_tot . $arr_tots . ');');
          $rt->MoveNext();
      }
      $rt->Close();
   }
   //---- 
   function quebra_geral_sc_free_group_by($res_limit=false, $res_export=false)
   {
      global $nada, $nm_lang ;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['contr_total_geral'] == "OK") 
      { 
          return; 
      } 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'] = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][0] = "" . $this->Ini->Nm_lang['lang_msgs_totl'] . ""; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $rt->fields[1] = (string)$rt->fields[1]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][2] = $rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $rt->fields[2] = (string)$rt->fields[2]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][3] = $rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $rt->fields[3] = (string)$rt->fields[3]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][4] = $rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $rt->fields[4] = (string)$rt->fields[4]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][5] = $rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $rt->fields[5] = (string)$rt->fields[5]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][6] = $rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $rt->fields[6] = (string)$rt->fields[6]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][7] = $rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $rt->fields[7] = (string)$rt->fields[7]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][8] = $rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $rt->fields[8] = (string)$rt->fields[8]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][9] = $rt->fields[8]; 
      $rt->fields[9] = str_replace(",", ".", $rt->fields[9]);
      $rt->fields[9] = (string)$rt->fields[9]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][10] = $rt->fields[9]; 
      $rt->fields[10] = str_replace(",", ".", $rt->fields[10]);
      $rt->fields[10] = (string)$rt->fields[10]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['tot_geral'][11] = $rt->fields[10]; 
      $rt->Close(); 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['contr_total_geral'] = "OK";
   } 

   //-----  nc_fecha
   function quebra_nc_fecha_sc_free_group_by($nc_fecha, $Where_qb, $Cmp_Name) 
   {
      $Var_name_gb = "SC_tot_" . $Cmp_Name;
      global $$Var_name_gb;
      $tot_nc_fecha = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq'])) 
      { 
         $nm_comando .= " where " . $Where_qb ; 
      } 
      else 
      { 
         $nm_comando .= " and " . $Where_qb ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      $tot_nc_fecha[0] = NM_encode_input(sc_strip_script($nc_fecha)) ; 
      $tot_nc_fecha[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_nc_fecha[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_nc_fecha[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_nc_fecha[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_nc_fecha[5] = (string)$rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $tot_nc_fecha[6] = (string)$rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $tot_nc_fecha[7] = (string)$rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $tot_nc_fecha[8] = (string)$rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $tot_nc_fecha[9] = (string)$rt->fields[8]; 
      $rt->fields[9] = str_replace(",", ".", $rt->fields[9]);
      $tot_nc_fecha[10] = (string)$rt->fields[9]; 
      $rt->fields[10] = str_replace(",", ".", $rt->fields[10]);
      $tot_nc_fecha[11] = (string)$rt->fields[10]; 
      $rt->Close(); 
      $$Var_name_gb = $tot_nc_fecha;
   } 

   //-----  est_codigo
   function quebra_est_codigo_sc_free_group_by($est_codigo, $Where_qb, $Cmp_Name) 
   {
      $Var_name_gb = "SC_tot_" . $Cmp_Name;
      global $$Var_name_gb;
      $tot_est_codigo = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq'])) 
      { 
         $nm_comando .= " where " . $Where_qb ; 
      } 
      else 
      { 
         $nm_comando .= " and " . $Where_qb ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_est_codigo[0] = NM_encode_input(sc_strip_script($est_codigo));
      }
      else {
          $tot_est_codigo[0] = sc_strip_script($est_codigo) ; 
      }
      $tot_est_codigo[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_est_codigo[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_est_codigo[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_est_codigo[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_est_codigo[5] = (string)$rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $tot_est_codigo[6] = (string)$rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $tot_est_codigo[7] = (string)$rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $tot_est_codigo[8] = (string)$rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $tot_est_codigo[9] = (string)$rt->fields[8]; 
      $rt->fields[9] = str_replace(",", ".", $rt->fields[9]);
      $tot_est_codigo[10] = (string)$rt->fields[9]; 
      $rt->fields[10] = str_replace(",", ".", $rt->fields[10]);
      $tot_est_codigo[11] = (string)$rt->fields[10]; 
      $rt->Close(); 
      $$Var_name_gb = $tot_est_codigo;
   } 

   //-----  pen_serie
   function quebra_pen_serie_sc_free_group_by($pen_serie, $Where_qb, $Cmp_Name) 
   {
      $Var_name_gb = "SC_tot_" . $Cmp_Name;
      global $$Var_name_gb;
      $tot_pen_serie = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq'])) 
      { 
         $nm_comando .= " where " . $Where_qb ; 
      } 
      else 
      { 
         $nm_comando .= " and " . $Where_qb ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_pen_serie[0] = NM_encode_input(sc_strip_script($pen_serie));
      }
      else {
          $tot_pen_serie[0] = sc_strip_script($pen_serie) ; 
      }
      $tot_pen_serie[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_pen_serie[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_pen_serie[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_pen_serie[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_pen_serie[5] = (string)$rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $tot_pen_serie[6] = (string)$rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $tot_pen_serie[7] = (string)$rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $tot_pen_serie[8] = (string)$rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $tot_pen_serie[9] = (string)$rt->fields[8]; 
      $rt->fields[9] = str_replace(",", ".", $rt->fields[9]);
      $tot_pen_serie[10] = (string)$rt->fields[9]; 
      $rt->fields[10] = str_replace(",", ".", $rt->fields[10]);
      $tot_pen_serie[11] = (string)$rt->fields[10]; 
      $rt->Close(); 
      $$Var_name_gb = $tot_pen_serie;
   } 

   //-----  cl_identificacion
   function quebra_cl_identificacion_sc_free_group_by($cl_identificacion, $Where_qb, $Cmp_Name) 
   {
      $Var_name_gb = "SC_tot_" . $Cmp_Name;
      global $$Var_name_gb;
      $tot_cl_identificacion = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq'])) 
      { 
         $nm_comando .= " where " . $Where_qb ; 
      } 
      else 
      { 
         $nm_comando .= " and " . $Where_qb ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_cl_identificacion[0] = NM_encode_input(sc_strip_script($cl_identificacion));
      }
      else {
          $tot_cl_identificacion[0] = sc_strip_script($cl_identificacion) ; 
      }
      $tot_cl_identificacion[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_cl_identificacion[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_cl_identificacion[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_cl_identificacion[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_cl_identificacion[5] = (string)$rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $tot_cl_identificacion[6] = (string)$rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $tot_cl_identificacion[7] = (string)$rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $tot_cl_identificacion[8] = (string)$rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $tot_cl_identificacion[9] = (string)$rt->fields[8]; 
      $rt->fields[9] = str_replace(",", ".", $rt->fields[9]);
      $tot_cl_identificacion[10] = (string)$rt->fields[9]; 
      $rt->fields[10] = str_replace(",", ".", $rt->fields[10]);
      $tot_cl_identificacion[11] = (string)$rt->fields[10]; 
      $rt->Close(); 
      $$Var_name_gb = $tot_cl_identificacion;
   } 

   //-----  cl_nombre
   function quebra_cl_nombre_sc_free_group_by($cl_nombre, $Where_qb, $Cmp_Name) 
   {
      $Var_name_gb = "SC_tot_" . $Cmp_Name;
      global $$Var_name_gb;
      $tot_cl_nombre = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq'])) 
      { 
         $nm_comando .= " where " . $Where_qb ; 
      } 
      else 
      { 
         $nm_comando .= " and " . $Where_qb ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_cl_nombre[0] = NM_encode_input(sc_strip_script($cl_nombre));
      }
      else {
          $tot_cl_nombre[0] = sc_strip_script($cl_nombre) ; 
      }
      $tot_cl_nombre[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_cl_nombre[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_cl_nombre[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_cl_nombre[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_cl_nombre[5] = (string)$rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $tot_cl_nombre[6] = (string)$rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $tot_cl_nombre[7] = (string)$rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $tot_cl_nombre[8] = (string)$rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $tot_cl_nombre[9] = (string)$rt->fields[8]; 
      $rt->fields[9] = str_replace(",", ".", $rt->fields[9]);
      $tot_cl_nombre[10] = (string)$rt->fields[9]; 
      $rt->fields[10] = str_replace(",", ".", $rt->fields[10]);
      $tot_cl_nombre[11] = (string)$rt->fields[10]; 
      $rt->Close(); 
      $$Var_name_gb = $tot_cl_nombre;
   } 

   //-----  nc_secuencial_docmod
   function quebra_nc_secuencial_docmod_sc_free_group_by($nc_secuencial_docmod, $Where_qb, $Cmp_Name) 
   {
      $Var_name_gb = "SC_tot_" . $Cmp_Name;
      global $$Var_name_gb;
      $tot_nc_secuencial_docmod = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq'])) 
      { 
         $nm_comando .= " where " . $Where_qb ; 
      } 
      else 
      { 
         $nm_comando .= " and " . $Where_qb ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_nc_secuencial_docmod[0] = NM_encode_input(sc_strip_script($nc_secuencial_docmod));
      }
      else {
          $tot_nc_secuencial_docmod[0] = sc_strip_script($nc_secuencial_docmod) ; 
      }
      $tot_nc_secuencial_docmod[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_nc_secuencial_docmod[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_nc_secuencial_docmod[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_nc_secuencial_docmod[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_nc_secuencial_docmod[5] = (string)$rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $tot_nc_secuencial_docmod[6] = (string)$rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $tot_nc_secuencial_docmod[7] = (string)$rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $tot_nc_secuencial_docmod[8] = (string)$rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $tot_nc_secuencial_docmod[9] = (string)$rt->fields[8]; 
      $rt->fields[9] = str_replace(",", ".", $rt->fields[9]);
      $tot_nc_secuencial_docmod[10] = (string)$rt->fields[9]; 
      $rt->fields[10] = str_replace(",", ".", $rt->fields[10]);
      $tot_nc_secuencial_docmod[11] = (string)$rt->fields[10]; 
      $rt->Close(); 
      $$Var_name_gb = $tot_nc_secuencial_docmod;
   } 

   //-----  nc_usuario
   function quebra_nc_usuario_sc_free_group_by($nc_usuario, $Where_qb, $Cmp_Name) 
   {
      $Var_name_gb = "SC_tot_" . $Cmp_Name;
      global $$Var_name_gb;
      $tot_nc_usuario = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(nc_subtotal), sum(nc_total_descuento), sum(nc_valor_iva), sum(nc_total), sum(nc_subtotal_iva), sum(nc_subtotal_cero), sum(nc_subtotal_no_objeto), sum(nc_subtotal_excento), sum(nc_valor_ice), sum(nc_valor_irbpnr) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['where_pesq'])) 
      { 
         $nm_comando .= " where " . $Where_qb ; 
      } 
      else 
      { 
         $nm_comando .= " and " . $Where_qb ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_nc']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_nc_usuario[0] = NM_encode_input(sc_strip_script($nc_usuario));
      }
      else {
          $tot_nc_usuario[0] = sc_strip_script($nc_usuario) ; 
      }
      $tot_nc_usuario[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_nc_usuario[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_nc_usuario[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_nc_usuario[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_nc_usuario[5] = (string)$rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $tot_nc_usuario[6] = (string)$rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $tot_nc_usuario[7] = (string)$rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $tot_nc_usuario[8] = (string)$rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $tot_nc_usuario[9] = (string)$rt->fields[8]; 
      $rt->fields[9] = str_replace(",", ".", $rt->fields[9]);
      $tot_nc_usuario[10] = (string)$rt->fields[9]; 
      $rt->fields[10] = str_replace(",", ".", $rt->fields[10]);
      $tot_nc_usuario[11] = (string)$rt->fields[10]; 
      $rt->Close(); 
      $$Var_name_gb = $tot_nc_usuario;
   } 

   function Ajust_statistic($comando)
   {
      if ((isset($this->Ini->nm_bases_vfp) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_vfp)) || (isset($this->Ini->nm_bases_odbc) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_odbc)))
      {
          $comando = str_replace(array('count(distinct ','varp(','stdevp(','variance(','stddev('), array('sum(','sum(','sum(','sum(','sum('), $comando);
      }
      if ($this->Ini->nm_tp_variance == "P")
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $comando = str_replace(array('count(distinct ','varp(','stdevp('), array('count(','var(','stdev('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite) && $this->Ini->sqlite_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) && $this->Ini->Ibase_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_pop(','stddev_pop('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          {
                  $comando = str_replace(array('variance(','stddev('), array('var_pop(','stddev_pop('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_pop(','stddev_pop('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_pop(','stddev_pop('), $comando);
          }
      }
      if ($this->Ini->nm_tp_variance == "A")
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $comando = str_replace(array('count(distinct ','varp(','stdevp('), array('count(','var(','stdev('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite) && $this->Ini->sqlite_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) && $this->Ini->Ibase_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          {
                  $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $comando = str_replace(array('varp(','stdevp('), array('var(','stdev('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $comando = str_replace('stddev(', 'stdev(', $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $comando = str_replace(array('variance(','stddev('), array('variance_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
      }
      return $comando;
   }

   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT") {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT") {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "SC_FORMAT_REGION") {
           $this->nm_data->SetaData($dt_in, strtoupper($form_in));
           $prep_out  = (strpos(strtolower($form_in), "dd") !== false) ? "dd" : "";
           $prep_out .= (strpos(strtolower($form_in), "mm") !== false) ? "mm" : "";
           $prep_out .= (strpos(strtolower($form_in), "aa") !== false) ? "aaaa" : "";
           $prep_out .= (strpos(strtolower($form_in), "yy") !== false) ? "aaaa" : "";
           return $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", $prep_out));
       }
       else {
           nm_conv_form_data($dt_out, $form_in, $form_out);
           return $dt_out;
       }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $str_highlight_ini = "";
      $str_highlight_fim = "";
      if(substr($nm_campo, 0, 23) == '<div class="highlight">' && substr($nm_campo, -6) == '</div>')
      {
           $str_highlight_ini = substr($nm_campo, 0, 23);
           $str_highlight_fim = substr($nm_campo, -6);

           $trab_campo = substr($nm_campo, 23, -6);
           $tam_campo  = strlen($trab_campo);
      }      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($tam_campo >= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
   } 
}

?>
