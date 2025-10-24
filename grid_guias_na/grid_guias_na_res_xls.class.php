<?php

class grid_guias_na_res_xls
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Xls_dados;
   var $Xls_workbook;
   var $Xls_col;
   var $Xls_row;
   var $array_titulos;
   var $array_linhas;
   var $Arquivo;
   var $Tit_doc;

   //---- 
   function __construct()
   {
   }

   //---- 
   function monta_xls()
   {
      $this->inicializa_vars();
      $this->grava_arquivo();
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_res_grid']))
      {
          return;
      }
      if ($this->Ini->sc_export_ajax)
      {
          $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Xls_f);
          $this->Arr_result['title_export'] = NM_charset_to_utf8($this->Tit_doc);
          $Temp = ob_get_clean();
          if ($Temp !== false && trim($Temp) != "")
          {
              $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
          }
          $oJson = new Services_JSON();
          echo $oJson->encode($this->Arr_result);
          exit;
      }
      else
      {
          $this->progress_bar_end();
      }
   }

   //----- 
   function inicializa_vars()
   {
      $this->Use_phpspreadsheet = (phpversion() >=  "7.3.9" && is_dir($this->Ini->path_third . '/phpspreadsheet')) ? true : false;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . $this->Ini->Apl_resumo); 
      $this->Xls_row = 1;
      if ($this->Use_phpspreadsheet) {
          require_once $this->Ini->path_third . '/phpspreadsheet/vendor/autoload.php';
      } 
      else { 
          set_include_path(get_include_path() . PATH_SEPARATOR . $this->Ini->path_third . '/phpexcel/');
          require_once $this->Ini->path_third . '/phpexcel/PHPExcel.php';
          require_once $this->Ini->path_third . '/phpexcel/PHPExcel/IOFactory.php';
      } 
      $this->array_titulos = array();
      $this->array_linhas  = array();
      $this->Xls_password = "";
      $this->Xls_tp     = ".xlsx";
      $this->Xls_col    = 0;
      $this->nm_data    = new nm_data("es");
      if (isset($_REQUEST['nmgp_tp_xls']) && !empty($_REQUEST['nmgp_tp_xls']))
      {
          $this->Xls_tp = "." . $_REQUEST['nmgp_tp_xls'];
      }
      $this->Arquivo    = "sc_xls";
      $this->Arquivo   .= "_" . date('YmdHis') . "_" . rand(0, 1000);
      $this->Arq_zip    = $this->Arquivo . "_grid_guias_na.zip";
      $this->Arquivo   .= "_grid_guias_na";
      $this->Arquivo   .= $this->Xls_tp;
      $this->Tit_doc    = "grid_guias_na" . $this->Xls_tp;
      $this->Tit_zip    = "grid_guias_na.zip";
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_name'] .= $this->Xls_tp ;
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_name'];
          $this->Arq_zip = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_name'];
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_name'], ".");
          if ($Pos !== false) {
              $this->Arq_zip = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_name'], 0, $Pos);
          }
          $this->Arq_zip .= ".zip";
          $this->Tit_zip  = $this->Arq_zip;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_name']);
      }
      $this->Xls_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $this->Zip_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arq_zip;
      if ($this->Use_phpspreadsheet) {
          $this->Xls_dados = new PhpOffice\PhpSpreadsheet\Spreadsheet();
      }
      else {
          $this->Xls_dados = new PHPExcel();
      }
      $this->Xls_dados->setActiveSheetIndex(0);
      $this->Nm_ActiveSheet = $this->Xls_dados->getActiveSheet();
      $this->Nm_ActiveSheet->setTitle($this->Ini->Nm_lang['lang_othr_smry_titl']);
      if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
      {
          $this->Nm_ActiveSheet->setRightToLeft(true);
      }
      $this->Res       = new grid_guias_na_resumo("out");
      $this->prep_modulos("Res");
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_res_grid']) && !$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_guias_na']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_return']);
          $this->pb->setTotalSteps(100);
          $Mens_bar  = $this->Ini->Nm_lang['lang_othr_prcs'];
          $Mens_smry = $this->Ini->Nm_lang['lang_othr_smry_titl'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
              $Mens_bar  = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
              $Mens_smry = sc_convert_encoding($Mens_smry, "UTF-8", $_SESSION['scriptcase']['charset']);
          }
          $this->pb->setProgressbarMessage($Mens_bar . ": " . $Mens_smry);
          $this->pb->addSteps(50);
      }
   }

   //---- 
   function prep_modulos($modulo)
   {
      $this->$modulo->Ini    = $this->Ini;
      $this->$modulo->Db     = $this->Db;
      $this->$modulo->Erro   = $this->Erro;
      $this->$modulo->Lookup = $this->Lookup;
   }

   //----- 
   function grava_arquivo()
   {
      $this->Res->resumo_export();
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_res_grid']) && !$this->Ini->sc_export_ajax) {
          $Mens_bar  = $this->Ini->Nm_lang['lang_othr_prcs'];
          $Mens_smry = $this->Ini->Nm_lang['lang_othr_smry_titl'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
              $Mens_bar  = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
              $Mens_smry = sc_convert_encoding($Mens_smry, "UTF-8", $_SESSION['scriptcase']['charset']);
          }
          $this->pb->setProgressbarMessage($Mens_bar . ": " . $Mens_smry);
          $this->pb->addSteps(30);
      }
      $this->comp_field   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['pivot_group_by'];
      $this->comp_y_axys  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['pivot_y_axys'];
      $this->comp_tabular = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['pivot_tabular'];
      $this->array_titulos = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['arr_export']['label'];
      $this->array_linhas  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['arr_export']['data'];
      $b_display = false;
      $contr_rowspan = array();
      $contr_colspan = array();
      foreach ($this->array_titulos as $lines)
      {
           $this->Xls_col = 0;
           if (!$b_display)
           {
               if ($this->comp_tabular)
               {
                   foreach ($this->comp_y_axys as $iYAxysIndex)
                   {
                       $contr_rowspan[$this->Xls_col] = sizeof($this->array_titulos);
                       $contr_colspan[$this->Xls_col] = 1;
                       if ($this->Use_phpspreadsheet) {
                           $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                       }
                       else {
                           $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                       }
                       $this->Nm_ActiveSheet->setCellValue($this->calc_cell($this->Xls_col) . $this->Xls_row, $this->comp_field[$iYAxysIndex]);
                       $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getFont()->setBold(true);
                       $this->Nm_ActiveSheet->getColumnDimension($this->calc_cell($this->Xls_col))->setAutoSize(true);
                       $this->Xls_col += 1;
                   }
               }
               else
               {
                   $colspan = $this->comp_tabular ? sizeof($this->comp_y_axys) : 1;
                   $contr_rowspan[$this->Xls_col] = sizeof($this->array_titulos);
                   $contr_colspan[$this->Xls_col] = $colspan;
                   $campo_titulo = $this->Ini->Nm_lang['lang_othr_smry_msge'];
                   if (!NM_is_utf8($campo_titulo))
                   {
                       $campo_titulo = sc_convert_encoding($campo_titulo, "UTF-8", $_SESSION['scriptcase']['charset']);
                   }
                   if ($this->Use_phpspreadsheet) {
                       $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                   }
                   else {
                       $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                   }
                   $this->Nm_ActiveSheet->setCellValue($this->calc_cell($this->Xls_col) . $this->Xls_row, $campo_titulo);
                   $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getFont()->setBold(true);
                   $this->Nm_ActiveSheet->getColumnDimension($this->calc_cell($this->Xls_col))->setAutoSize(true);
                   $this->Xls_col += $colspan;
               }
               $b_display = true;
           }
           foreach ($lines as $columns)
           {
               $col_ok = false;
               $colspan = (isset($columns['colspan']) && 1 < $columns['colspan']) ? $columns['colspan'] : 1;
               while (!$col_ok)
               {
                   if (isset($contr_rowspan[$this->Xls_col]) && 1 < $contr_rowspan[$this->Xls_col])
                   {
                       $contr_rowspan[$this->Xls_col]--;
                       $this->Xls_col += $contr_colspan[$this->Xls_col];
                   }
                   else
                   {
                       $col_ok = true;
                   }
               }
               if (isset($columns['rowspan']) && 1 < $columns['rowspan'])
               {
                   $contr_rowspan[$this->Xls_col] = $columns['rowspan'];
                   $contr_colspan[$this->Xls_col] = $colspan;
               }
               $campo_titulo = $columns['label'];
               if (!NM_is_utf8($campo_titulo))
               {
                   $campo_titulo = sc_convert_encoding($campo_titulo, "UTF-8", $_SESSION['scriptcase']['charset']);
               }
               if ($this->Use_phpspreadsheet) {
                   $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
               }
               else {
                   $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
               }
               $this->Nm_ActiveSheet->setCellValue($this->calc_cell($this->Xls_col) . $this->Xls_row, $campo_titulo);
               $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getFont()->setBold(true);
               $this->Nm_ActiveSheet->getColumnDimension($this->calc_cell($this->Xls_col))->setAutoSize(true);
               $this->Xls_col += $colspan;
           }
           foreach ($contr_rowspan as $col => $row)
           {
               if ($col >= $this->Xls_col && $row > 1)
               {
                   $contr_rowspan[$col]--;
               }
           }
           $this->Xls_row++;
      }
      foreach ($this->array_linhas as $lines)
      {
           $this->Xls_col = 0;
           $colspan       = 0;
           foreach ($lines as $num_col => $columns)
           {
               if (0 <= $columns['level'])
               {
                   $cada_dado = $this->comp_tabular ? $columns['label'] : str_repeat('   ', $columns['level']) . $columns['label'];
               }
               else
               {
                   $cada_dado = $columns['value'];
               }
               if (is_array($cada_dado)) {
                   $cada_dado = "";
               }
               if (!NM_is_utf8($cada_dado))
               {
                   $cada_dado = sc_convert_encoding($cada_dado, "UTF-8", $_SESSION['scriptcase']['charset']);
               }
               $this->Xls_col = $num_col + $colspan;
               if (isset($columns['colspan']) && $columns['colspan'] > 0)
               {
                   $colspan = ($columns['colspan'] - 1);
               }
               if (0 <= $columns['level'])
               {
                   if (!NM_is_utf8($cada_dado))
                   {
                       $cada_dado = sc_convert_encoding($cada_dado, "UTF-8", $_SESSION['scriptcase']['charset']);
                   }
                   if ($this->Use_phpspreadsheet) {
                       $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                   }
                   else {
                       $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                   }
                   $this->Nm_ActiveSheet->setCellValue($this->calc_cell($this->Xls_col) . $this->Xls_row, $cada_dado);
               }
               else
               {
                   if (!NM_is_utf8($cada_val))
                   {
                       $cada_val = sc_convert_encoding($cada_val, "UTF-8", $_SESSION['scriptcase']['charset']);
                   }
                   if ($this->Use_phpspreadsheet) {
                       $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                   }
                   else {
                       $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                   }
                   $this->Nm_ActiveSheet->getStyle($this->calc_cell($this->Xls_col) . $this->Xls_row)->getNumberFormat()->setFormatCode('');
                   $this->Nm_ActiveSheet->setCellValue($this->calc_cell($this->Xls_col) . $this->Xls_row, $cada_dado);
               }
               $this->Xls_col += $colspan;
           }
           $this->Xls_row++;
      }
      if ($this->Use_phpspreadsheet) {
          if ($this->Xls_tp == ".xlsx") {
              $objWriter = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($this->Xls_dados);
          } 
          else {
              $objWriter = new PhpOffice\PhpSpreadsheet\Writer\Xls($this->Xls_dados);
          } 
      } 
      else {
          if ($this->Xls_tp == ".xlsx") {
              $objWriter = new PHPExcel_Writer_Excel2007($this->Xls_dados);
          } 
          else {
              $objWriter = new PHPExcel_Writer_Excel5($this->Xls_dados);
          } 
      } 
      $objWriter->save($this->Xls_f);
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_res_grid']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_res_sheet'] = $this->Xls_f;
      }
      elseif ($this->Xls_password != "")
      { 
          $str_zip = "";
          $Zip_f = (FALSE !== strpos($this->Zip_f, ' ')) ? " \"" . $this->Zip_f . "\"" :  $this->Zip_f;
          $Arq_input  = (FALSE !== strpos($this->Xls_f, ' ')) ? " \"" . $this->Xls_f . "\"" :  $this->Xls_f;
          if (is_file($Zip_f)) {
              unlink($Zip_f);
          }
          if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
          {
              chdir($this->Ini->path_third . "/zip/windows");
              $str_zip = "zip.exe -P -j " . $this->Xls_password . " " . $Zip_f . " " . $Arq_input;
          }
          elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
          {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
              $str_zip = "./7za -p" . $this->Xls_password . " a " . $Zip_f . " " . $Arq_input;
          }
          elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
          {
              chdir($this->Ini->path_third . "/zip/mac/bin");
              $str_zip = "./7za -p" . $this->Xls_password . " a " . $Zip_f . " " . $Arq_input;
          }
          if (!empty($str_zip)) {
              exec($str_zip);
          }
          unlink($Arq_input);
          $this->Arquivo = $this->Arq_zip;
          $this->Xls_f   = $this->Zip_f;
          $this->Tit_doc = $this->Tit_zip;
          // ----- ZIP log
          $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
          if ($fp)
          {
              @fwrite($fp, $str_zip . "\r\n\r\n");
              @fclose($fp);
          }
      } 
   }


   function calc_cell($col)
   {
       $arr_alfa = array("","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
       $val_ret = "";
       $result = $col + 1;
       while ($result > 26)
       {
           $cel      = $result % 26;
           $result   = $result / 26;
           if ($cel == 0)
           {
               $cel    = 26;
               $result--;
           }
           $val_ret = $arr_alfa[$cel] . $val_ret;
       }
       $val_ret = $arr_alfa[$result] . $val_ret;
       return $val_ret;
   }
   function progress_bar_end()
   {
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_file']);
      if (is_file($this->Xls_f))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_file'] = $this->Xls_f;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na'][$path_doc_md5][1] = $this->Tit_doc;
      $Mens_bar = $this->Ini->Nm_lang['lang_othr_file_msge'];
      if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
          $Mens_bar = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
      }
      $this->pb->setProgressbarMessage($Mens_bar);
      $this->pb->setDownloadLink($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $this->pb->setDownloadMd5($path_doc_md5);
      $this->pb->completed();
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_file']);
      if (is_file($this->Xls_f))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_file'] = $this->Xls_f;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_title'] ?> v_del_datos_guia_remision :: Excel</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}
?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <?php
 if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts))
 {
 ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->str_google_fonts ?>" />
 <?php
 }
 ?>
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">XLS</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_guias_na_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_guias_na"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['grid_guias_na']['xls_return']); ?>"> 
</FORM> 
</td></tr></table>
</BODY>
</HTML>
<?php
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
function crearNombreCarpeta($xmlComprobante) {
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
        $nombre = ""; 
	    $codDoc = $xmlComprobante->codDoc;
        if ($codDoc=='01') {
            $nombre = $xmlComprobante->identificacionComprador;
        } else if ($codDoc=="03") {
            $nombre = $xmlComprobante->identificacionProveedor;
        } else if ($codDoc=="04") {
            $nombre = $xmlComprobante->identificacionComprador;
        } else if ($codDoc=="05") {
            $nombre = $xmlComprobante->identificacionComprador;
        } else if ($codDoc=="06") {
            $nombre = $xmlComprobante->rucTransportista;
        } else if ($codDoc=="07") {
            $nombre = $xmlComprobante->identificacionSujetoRetenido;
        } 
        return $nombre;
    
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function crearNombreFichero($xmlComprobante,$extension) {
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
        $nombre = "";
        $codDoc = $xmlComprobante->codDoc;
        $establecimiento = $xmlComprobante->establecimiento;
        $ptoEmision = $xmlComprobante->ptoEmision;
        $secuencial_doc = $xmlComprobante->secuencial;
        if ($codDoc=="01") {
            $nombre = "FAC";
        } else if ($codDoc=="03") {
            $nombre = "LIQ";
        } else if ($codDoc=="04") {
            $nombre = "NC";
        } else if ($codDoc=="05") {
            $nombre = "ND";
        } else if ($codDoc=="06") { 
            $nombre = "GR";
        } else if ($codDoc=="07") {
            $nombre = "CR";
        } 
        return $nombre . $establecimiento . "-" . $ptoEmision . "-" . $secuencial_doc .".". $extension;
    
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function crearNombreFicheroSinExtension($xmlComprobante){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		
		$nombre = "";
		$codDoc = $xmlComprobante->codDoc;
		$establecimiento = $xmlComprobante->establecimiento;
		$ptoEmision = $xmlComprobante->ptoEmision;
		$secuencial_doc = $xmlComprobante->secuencial;
		if ($codDoc=="01") {
			$nombre = "FAC";
		} else if ($codDoc=="03") {
			$nombre = "LIQ";
		} else if ($codDoc=="04") {
			$nombre = "NC";
		} else if ($codDoc=="05") {
			$nombre = "ND";
		} else if ($codDoc=="06") {
			$nombre = "GR";
		} else if ($codDoc=="07") {
			$nombre = "CR";
		} 
		return $nombre . $establecimiento . "-" . $ptoEmision . "-" . $secuencial_doc ;
	
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function crearMensajeCorreo($xmlComprobante, $w_ruta_logo) {
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_email_documentos.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
        $codDoc = $xmlComprobante->codDoc;
		$w_establecimiento= $xmlComprobante->establecimiento;
        $ptoEmision = $xmlComprobante->ptoEmision;
        $secuencial_doc = $xmlComprobante->secuencial;
		
        $tipoComprobante = "";
        $dirigido = "";
        $w_datos_adicionales = "";
		if ($codDoc=="01") {
			$tipoComprobante = "FACTURA";
			$dirigido = $xmlComprobante->razonSocialComprador;
			$importeTotal = $xmlComprobante->importeTotal;
			$w_datos_adicionales = "<strong>Valor Total: </strong>".$importeTotal."<br /><br />";
		} else if ($codDoc=="03") {
			$tipoComprobante = "LIQUIDACIÓN DE COMPRA DE BIENES Y PRESTACIÓN DE SERVICIOS";
			$dirigido = $xmlComprobante->razonSocialProveedor;
			$importeTotal = $xmlComprobante->importeTotal;
			$w_datos_adicionales = "<strong>Valor Total: </strong>".$importeTotal."<br /><br />";
		} else if ($codDoc=="04") {
			$tipoComprobante = "NOTA DE CRÉDITO";
			$dirigido = $xmlComprobante->razonSocialComprador;
		} else if ($codDoc=="05") {
			$tipoComprobante = "NOTA DE DÉBITO";
			$dirigido = $xmlComprobante->razonSocialComprador;
		} else if ($codDoc=="06") {
			$tipoComprobante = "GUÍA DE REMISIÓN";
			$dirigido = $xmlComprobante->razonSocialTransportista;
		} else if ($codDoc=="07") {
			$tipoComprobante = "COMPROBANTE DE RETENCIÓN";
			$dirigido = $xmlComprobante->razonSocialSujetoRetenido;
		}
        $razonSocial = $dirigido;
        $razonSocialEmisor = $xmlComprobante->razonSocial;
        if (file_exists($nombre)){ 
			$fp = fopen ($nombre,"r"); 
			$datos = fread($fp, filesize($nombre));
			fclose($fp);
			$datos=str_replace('$rutaLogo',$w_ruta_logo,$datos);
			$datos=str_replace('$razonSocial',$razonSocial,$datos);
			$datos=str_replace('$EMPRESA_CLIENTE',$razonSocialEmisor,$datos);
			$datos=str_replace('$tipoComprobante',$tipoComprobante,$datos);
			$datos=str_replace('$w_establecimiento',$w_establecimiento,$datos);
			$datos=str_replace('$ptoEmision',$ptoEmision,$datos);
			$datos=str_replace('$secuencial_doc',$secuencial_doc,$datos);
			$datos=str_replace('$w_datos_adicionales',$w_datos_adicionales,$datos);
			$datos=str_replace('imagenes/',$ruta_imagenes,$datos);

			return $datos;
		}else{
			return 'No se pudo cargar skin '.$nombre;
		}     
    
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function enviarCorreo($xmlComprobante,$correo_destino){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		
		$check_sql = "SELECT sp_busca_parametro ('RUTA_DOCUMENTOS','D:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if(isset($rs[0][0])){
			$dir=$rs[0][0];
		}
		$empresa=$xmlComprobante->ruc;
		$cliente=$this->crearNombreCarpeta($xmlComprobante);
		
		$pathpdf= $dir.$empresa.'/documentos/'.$cliente.'/'.$this->crearNombreFichero($xmlComprobante,'pdf');
		$pathxml= $dir.$empresa.'/documentos/'.$cliente.'/'.$this->crearNombreFichero($xmlComprobante,'xml');
		
		
		$configCorreo=$xmlComprobante->configCorreo;
		$mail_smtp_server    = $configCorreo->correoHost;       
		$mail_smtp_user      = $configCorreo->correoRemitente;
		$mail_smtp_pass      = $configCorreo->correoPass;
		$mail_from           = $configCorreo->correoRemitente;
		$mail_subject        = $configCorreo->correoAsunto;
		$mail_message        = $this->crearMensajeCorreo($xmlComprobante,$configCorreo->rutaLogo); 
		$mail_format         = 'H';
		$mail_copies		 = '';	
		$mail_tp_copies		 = '';
		$mail_port           = $configCorreo->correoPort;
		$mail_tp_connection  = $configCorreo->sslHabilitado;
		$mail_atachment		 = array();
		$mail_atachment[0]= $pathpdf;
		$mail_atachment[1]= $pathxml;
		
		try {
    		$destinatarios = explode(",", $correo_destino);
			foreach( $destinatarios as $destinatario){

				$mail_to= trim($destinatario);

				    include_once($this->Ini->path_third . "/swift/swift_required.php");
    $sc_mail_port     = "$mail_port";
    $sc_mail_tp_port  = "$mail_tp_connection";
    $sc_mail_tp_mens  = "$mail_format";
    $sc_mail_tp_copy  = "$mail_tp_copies";
    $sc_mail_count = 0;
    $sc_mail_erro  = "";
    $sc_mail_ok    = true;
    if ($sc_mail_tp_port == "S" || $sc_mail_tp_port == "Y")
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 465;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'ssl');
    }
    elseif ($sc_mail_tp_port == "T")
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 587;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'tls');
    }
    else
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 25;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port);
    }
    $Con_Mail->setUsername($mail_smtp_user);
    $Con_Mail->setpassword($mail_smtp_pass);
    $Send_Mail = Swift_Mailer::newInstance($Con_Mail);
    if ($sc_mail_tp_mens == "H")
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject)->setBody($mail_message)->setContentType("text/html");
    }
    else
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject)->setBody($mail_message);
    }
    if (!empty($_SESSION['scriptcase']['charset']))
    {
        $Mens_Mail->setCharset($_SESSION['scriptcase']['charset']);
    }
    $Temp_mail = $mail_atachment;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_atachment);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Mens_Mail->attach(Swift_Attachment::fromPath($NM_dest));
        }
    }
    $Temp_mail = $mail_to;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_to);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            $Mens_Mail->addTo($Arr_addr[0], $Arr_addr[1]);
        }
    }
    $Temp_mail = $mail_copies;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_copies);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            if (strtoupper(substr($sc_mail_tp_copy, 0, 2)) == "CC")
            {
                $Mens_Mail->addCc($Arr_addr[0], $Arr_addr[1]);
            }
            else
            {
                $Mens_Mail->addBcc($Arr_addr[0], $Arr_addr[1]);
            }
        }
    }
    $Arr_addr = SC_Mail_Address($mail_from);
    $Err_mail = array();
    $sc_mail_count = $Send_Mail->send($Mens_Mail->setFrom($Arr_addr[0], $Arr_addr[1]), $Err_mail);
    if (!empty($Err_mail))
    {
        $sc_mail_erro = $Err_mail;
        $sc_mail_ok   = false;
    }
;	

			}
			if ($sc_mail_ok ){
				return true;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
		}
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function autorizar_factura ($fac_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  	
		if($i_log){
					var_dump($fac_numero);
					echo '<br>';
		}	
		$correo_enviado='';
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$factura = new factura();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="select fac_empresa,fac_establecimiento from del_factura where fac_numero =".$fac_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];
		}

		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			
			$configApp->dirIreport=$dir_ireport;
			$factura->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Factura";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$factura->configCorreo = $configCorreo;

			$factura->ruc = $rs_empresa[0][0];
			$factura->razonSocial = $rs_empresa[0][4];
			$factura->nombreComercial = $rs_empresa[0][5]; 
			$factura->dirMatriz = $rs_empresa[0][6]; 
			$factura->obligadoContabilidad =$rs_empresa[0][7]; 
			$factura->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$factura->contribuyenteEspecial = $rs_empresa[0][10];
			}	
			$factura->padronMicroempresa=$rs_empresa[0][17];
			$factura->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $factura->numeroResolucion=$rs[0][0];   
				}
			}
			$factura->artesanoCalificado=$rs_empresa[0][19];
		}

		$check_sql="SELECT
							fac_numero,
							fac_ambiente,
							fac_tipo_comprobante,
							fecha,
							est_direccion,
							est_codigo,
							pen_serie,
							fac_secuencial,
							cl_tipo_identificacion,
							cl_nombre,
							cl_identificacion,
							cl_direccion,
							cl_telefono,
							cl_email,
							fac_subtotal,
							fac_total_descuento,
							fac_subtotal_iva,
							fac_valor_iva,
							fac_subtotal_cero,
							fac_subtotal_no_objeto,
							fac_subtotal_excento,
							fac_valor_ice,
							fac_valor_irbpnr,
							fac_propina,
							fac_total,
							fac_guia_remision,
							fac_comentario,
							fac_moneda,
							usuario,
							usu_cedula,
							usu_telefono,
							usu_email,
							usu_placa,
							usu_tipo_documento,
							dia_descripcion,
							est_padronrimpe,
							fac_total_subsidio,
							est_leyenda_rimpe,
							usu_direccion,
							fac_correo_enviado
						FROM
							v_del_datos_factura_sri
						WHERE fac_numero=".$fac_numero ;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_factura = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_factura[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_factura = false;
          $rs_factura_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_factura[0][0])){
			$correo_enviado=$rs_factura[0][39];
			$factura->padronRimpe=$rs_factura[0][35];
			$factura->leyendaRimpe=$rs_factura[0][37];
			$factura->ambiente = $rs_factura[0][1];
			$factura->codDoc = $rs_factura[0][2];
			$factura->fechaEmision = $rs_factura[0][3];
			$factura->dirEstablecimiento = $rs_factura[0][4];
			$factura->establecimiento = $rs_factura[0][5]; 
			$factura->ptoEmision = $rs_factura[0][6]; 
			$factura->secuencial = $rs_factura[0][7];
			$factura->tipoIdentificacionComprador = $rs_factura[0][8];
			if($rs_factura[0][25]<>''){
				$factura->guiaRemision=$rs_factura[0][25];
			}
			$factura->razonSocialComprador = $rs_factura[0][9]; 
			$factura->identificacionComprador = $rs_factura[0][10];
			$factura->direccionComprador=$rs_factura[0][11];
			$factura->totalSinImpuestos = $rs_factura[0][14]; 
			if($rs_factura[0][36]>0){
				$factura->totalSubsidio=$rs_factura[0][36];
			}
			$factura->totalDescuento = $rs_factura[0][15]; 
			$total_Impuestos=array();
			$i=0;
				$sql_ivas_cobrados="SELECT df_porcentaje_iva,
											ROUND(sum(df_cantidad*(df_precio_unitario-df_descuento)+df_valor_ice),2),
											round(sum(df_base_iva) *iva_porcentaje/100,2)
									FROM  del_detalle_factura 
									inner join sri_tarifa_iva on iva_codigo=df_porcentaje_iva
									WHERE df_factura=".$fac_numero."
									group by df_porcentaje_iva,iva_porcentaje";
				 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_ivas = false;
          $rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
				if ($rs_ivas   === false){
					echo "Error al acceder a del_detalle_factura";
				}else{
					while (!$rs_ivas->EOF){
						$totalImpuesto = new totalImpuesto();
						$totalImpuesto->codigo ='2'; 
						$totalImpuesto->codigoPorcentaje = $rs_ivas->fields[0]; 
						$totalImpuesto->baseImponible = $rs_ivas->fields[1];
						$totalImpuesto->valor = $rs_ivas->fields[2];
						$total_Impuestos[$i]=$totalImpuesto;
						$i+=1;
						$rs_ivas->MoveNext();
					}
					$rs_ivas->Close();
				}	
				
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}
				if($rs_factura[0][21]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 ice_codigo,
										sum(df_subtotal),
										sum(df_valor_ice) 
								FROM del_detalle_factura 
								join sri_tarifa_ice on df_porcentaje_ice::integer=ice_id
								WHERE df_porcentaje_ice<>'0' 
								and df_factura=".$fac_numero."
								group by df_porcentaje_ice,ice_codigo";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2];
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
				if($rs_factura[0][22]>0){	
					$check_sql="SELECT  '5' as impuesto,
										df_porcentaje_irbpnr,
										sum(df_base_irbpnr*df_cantidad),
										sum(df_valor_irbpnr) 
								FROM del_detalle_factura 
								WHERE df_porcentaje_irbpnr<>'0' 
								and df_factura=".$fac_numero ."
								group by df_porcentaje_irbpnr";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1];
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2]; 
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
			$factura->totalConImpuesto = $total_Impuestos;
			$factura->propina = $rs_factura[0][23]; 
			$factura->importeTotal = $rs_factura[0][24]; 
			$factura->moneda = $rs_factura[0][27];
			$check_sql="SELECT
								df_factura,
								df_producto,
								pro_codigo_aux,
								pro_descripcion,
								df_cantidad,
								df_precio_unitario,
								df_descuento,
								valor_sin_impuesto,
								pro_iva,
								df_porcentaje_iva,
								iva_porcentaje,
								df_base_iva,
								df_valor_iva,
								pro_ice,
								ice_codigo,
								round(df_subtotal,2),
								ice_tarifa,
								df_valor_ice,
								pro_irbpnr,
								df_porcentaje_irbpnr,
								irbpnr_tarifa,
								round(df_base_irbpnr*df_cantidad,2),
								df_valor_irbpnr,
								df_descripcion,
								df_precio_sin_subsidio
							FROM
								v_del_detalle_factura_sri
							where df_factura=".$fac_numero."
							order by df_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_detalles   === false){
				echo "Error al acceder al detalle de la factura";
			}else{
				$detalles_factura = array();
				$i=0;
				while (!$rs_detalles->EOF){
					$detalleFactura = new detalleFactura();
					$detalleFactura->codigoPrincipal = $rs_detalles->fields[1];
					$detalleFactura->codigoAuxiliar = $rs_detalles->fields[2]; 
					$detalleFactura->descripcion = $rs_detalles->fields[3]; 
					$detalleFactura->cantidad = $rs_detalles->fields[4]; 
					$detalleFactura->precioUnitario = $rs_detalles->fields[5]; 
					$detalleFactura->descuento = $rs_detalles->fields[6]; 
					$detalleFactura->precioTotalSinImpuesto = $rs_detalles->fields[7]; 
					$detalleFactura->precioSinSubsidio=$rs_detalles->fields[24];

					if ($rs_detalles->fields[23] <>""){
						$informacion_adicional=array();
						$detalle_adicional= new detalleAdicional();
						$detalle_adicional->nombre = 'Adicional';
						$detalle_adicional->valor = $rs_detalles->fields[23] ;
						$informacion_adicional[0]=$detalle_adicional;							 
						$detalleFactura->detalleAdicional = $informacion_adicional;	
					}

						$impuestos_det=array();
						$j=0;
						$impuesto = new impuesto();
						$impuesto->codigo = $rs_detalles->fields[8];
						$impuesto->codigoPorcentaje = $rs_detalles->fields[9]; 
						$impuesto->tarifa = $rs_detalles->fields[10]; 
						$impuesto->baseImponible = $rs_detalles->fields[11]; 
						$impuesto->valor = $rs_detalles->fields[12];
						$impuestos_det[$j]=$impuesto;
						$j+=1;
						if($rs_detalles->fields[14]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[13];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[14]; 
							$impuesto->tarifa = "0.00";  
							$impuesto->baseImponible = $rs_detalles->fields[15]; 
							$impuesto->valor = $rs_detalles->fields[17];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
						if($rs_detalles->fields[19]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[18];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[19]; 
							$impuesto->tarifa = $rs_detalles->fields[20]; 
							$impuesto->baseImponible = $rs_detalles->fields[21]; 
							$impuesto->valor = $rs_detalles->fields[22];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
					$detalleFactura->impuestos = $impuestos_det;
					$detalles_factura[$i]=$detalleFactura;
					$rs_detalles->MoveNext();
					$i+=1;
				}
				$rs_detalles->Close();
				$factura->detalles = $detalles_factura;
			}
			$pagos = array();
			$check_sql="SELECT 	a.fp_id,
								sri_forma_pago.fp_codigo,
								a.fp_valor,
								coalesce(a.fp_plazo,0),
								coalesce(a.fp_unidad_tiempo,'DIAS') 
						FROM del_forma_pago_factura a 
						inner join del_forma_pago b on a.fp_forma_pago=b.fp_id	
						inner join sri_forma_pago on b.fp_sri=sri_forma_pago.fp_codigo
						where a.fp_factura=".$fac_numero ;
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_pagos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_pagos = false;
          $rs_pagos_erro = $this->Db->ErrorMsg();
      } 
 
			if ($rs_pagos   === false){
				echo "Error al acceder a las formas de pago";
			}else{
				$i=0;
				while (!$rs_pagos->EOF){
					$pago = new pagos();
					$pago->formaPago =$rs_pagos->fields[1];
					$pago->total = $rs_pagos->fields[2];
					$pago->plazo = $rs_pagos->fields[3];
					$pago->unidadTiempo=$rs_pagos->fields[4];
					$pagos[$i]=$pago;
					$i+=1;
					$rs_pagos->MoveNext();
				}
				$rs_pagos->Close();
			}	
			$factura->pagos = $pagos;
			$camposAdicionales = array();
			$i=0;

			if($rs_empresa[0][16]=='S'){
				if($rs_factura[0][29]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Ruc";
					$campoAdicional->valor = $rs_factura[0][29];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_factura[0][28]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Razon Social";
					$campoAdicional->valor = $rs_factura[0][28];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_factura[0][32]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Placa";
					$campoAdicional->valor = $rs_factura[0][32];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_factura[0][6]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Punto Emision";
					$campoAdicional->valor = $rs_factura[0][6];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

				if($rs_factura[0][33]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Contribuyente";
					$campoAdicional->valor = $rs_factura[0][33];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

				if($rs_factura[0][30]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Telefono Socio";
					$campoAdicional->valor = $rs_factura[0][30];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_factura[0][38]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Direccion Emisor";
					$campoAdicional->valor = $rs_factura[0][38];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
			}

			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_factura[0][12]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_factura[0][12];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_factura[0][13]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Email";
					$campoAdicional->valor = $rs_factura[0][13];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
			if($rs_factura[0][26]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Comentario";
				$campoAdicional->valor = $rs_factura[0][26];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_factura[0][34]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Diagnostico";
				$campoAdicional->valor = $rs_factura[0][34];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			$factura->infoAdicional = $camposAdicionales;
			if($i_log){
					var_dump($factura);
					echo '<br>';
			}
			try{
				$procesarComprobante = new procesarComprobante();
				$procesarComprobante->comprobante = $factura;
				$procesarComprobante->envioSRI = false; 
				$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
				if($i_log){
					
					var_dump($res);
					echo '<br>';
				}	
			}catch(Throwable $e){
				echo $e->getMessage();	
			}
				
			
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $factura;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_factura[0][1];
						$comprobantePendiente->codDoc = $rs_factura[0][2];
						$comprobantePendiente->establecimiento = $rs_factura[0][5];
						$comprobantePendiente->fechaEmision = $rs_factura[0][3];
						$comprobantePendiente->ptoEmision = $rs_factura[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_factura[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."'
								WHERE fac_numero=".$fac_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($factura,$rs_factura[0][13])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
					if($i_log){
						var_dump($correo_enviado);
						echo '<br>';
					}	
				}
				$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_autorizacion='".$res->return->numeroAutorizacion."',
									 fac_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 fac_error_sri='',
									 fac_correo_enviado='".$correo_enviado."'
								WHERE fac_numero=".$fac_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($factura,$rs_factura[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
						if($i_log){
						var_dump($correo_enviado);
						echo '<br>';
					}
					}
					$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='AUTORIZADO',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_autorizacion='".$res->return->claveAcceso."',
									 fac_correo_enviado='".$correo_enviado."'
								WHERE fac_numero=".$fac_numero ;
				}else{
					$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_error_sri='".$res->return->mensajes->mensaje."'
								WHERE fac_numero=".$fac_numero ;
				}

				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_error_sri='".$res->return->mensajes->mensaje."',
									 fac_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE fac_numero=".$fac_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function autorizar_liquidacion ($liq_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($liq_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$liquidacion = new \liquidacionCompra();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollo/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT fc_empresa,liq_establecimiento FROM del_factura_compra where fc_id=".$liq_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$liquidacion->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Liquidacion de Compras";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$liquidacion->configCorreo = $configCorreo;

			$liquidacion->ruc = $rs_empresa[0][0];
			$liquidacion->razonSocial = $rs_empresa[0][4];
			$liquidacion->nombreComercial = $rs_empresa[0][5]; 
			$liquidacion->dirMatriz = $rs_empresa[0][6]; 
			$liquidacion->obligadoContabilidad =$rs_empresa[0][7]; 
			$liquidacion->tipoEmision = $rs_empresa[0][9];

			if ($rs_empresa[0][10]!=''){
				$liquidacion->contribuyenteEspecial = $rs_empresa[0][10];
			}
			$liquidacion->padronMicroempresa=$rs_empresa[0][17];
			$liquidacion->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $liquidacion->numeroResolucion=$rs[0][0];
				}
			}
			$liquidacion->artesanoCalificado=$rs_empresa[0][19];

		}

		$check_sql="SELECT
							fc_id,
							liq_ambiente,
							fc_tipo_comprobante,
							fecha,
							est_direccion,
							est_codigo,
							pen_serie,
							fc_secuencial,
							pr_tipo_identificacion,
							pr_nombre,
							pr_identificacion,
							pr_direccion,
							pr_telefono,
							pr_email,
							fc_subtotal,
							fc_total_descuento,
							fc_subtotal_iva,
							fc_valor_iva,
							fc_subtotal_cero,
							fc_subtotal_no_objeto,
							fc_subtotal_excento,
							fc_valor_ice,
							fc_valor_irbpnr,
							fc_propina,
							fc_total,
							fc_guia_remision,
							fc_comentario,
							sp_busca_parametro('MONEDASRI'::character varying, 'DOLAR'::character varying) AS fc_moneda,
							fc_total-fc_propina,
							est_padronrimpe,
							est_leyenda_rimpe,
							fc_correo_enviado
					FROM    v_del_datos_liquidacion_sri
					WHERE fc_id=".$liq_numero ;

		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_liquidacion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_liquidacion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_liquidacion = false;
          $rs_liquidacion_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_liquidacion[0][0])){
			$correo_enviado=$rs_liquidacion[0][31];
			$liquidacion->padronRimpe=$rs_liquidacion[0][29];
			$liquidacion->leyendaRimpe=$rs_liquidacion[0][30];
			$liquidacion->ambiente = $rs_liquidacion[0][1];
			$liquidacion->codDoc = $rs_liquidacion[0][2];
			$liquidacion->fechaEmision = $rs_liquidacion[0][3];
			$liquidacion->dirEstablecimiento = $rs_liquidacion[0][4];
			$liquidacion->establecimiento = $rs_liquidacion[0][5]; 
			$liquidacion->ptoEmision = $rs_liquidacion[0][6]; 
			$liquidacion->secuencial = $rs_liquidacion[0][7];
			$liquidacion->tipoIdentificacionProveedor = $rs_liquidacion[0][8];
			if($rs_liquidacion[0][25]<>''){
				$liquidacion->guiaRemision=$rs_liquidacion[0][25];
			}
			$liquidacion->razonSocialProveedor = $rs_liquidacion[0][9]; 
			$liquidacion->identificacionProveedor = $rs_liquidacion[0][10];
			$liquidacion->direccionProveedor= $rs_liquidacion[0][11];
			$liquidacion->totalSinImpuestos = $rs_liquidacion[0][14]; 
			$liquidacion->totalDescuento = $rs_liquidacion[0][15]; 
			$total_Impuestos=array();
			$i=0;
					$sql_ivas_cobrados="SELECT dfc_porcentaje_iva,
												ROUND(sum(dfc_cantidad*(dfc_precio_unitario-dfc_descuento)+dfc_valor_ice),2),
												round(sum(dfc_base_iva) *iva_porcentaje/100,2)
										FROM  del_detalle_factura_compra 
										inner join sri_tarifa_iva on iva_codigo=dfc_porcentaje_iva
										WHERE dfc_factura=".$liq_numero."
										group by dfc_porcentaje_iva,iva_porcentaje";
					 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_ivas = false;
          $rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_ivas   === false){
						echo "Error al acceder a del_detalle_liquidacion";
					}else{
						while (!$rs_ivas->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo ='2'; 
							$totalImpuesto->codigoPorcentaje = $rs_ivas->fields[0]; 
							$totalImpuesto->baseImponible = $rs_ivas->fields[1];
							$totalImpuesto->valor = $rs_ivas->fields[2];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_ivas->MoveNext();
						}
						$rs_ivas->Close();
					}
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}
			
				if($rs_liquidacion[0][21]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 dfc_porcentaje_ice,
										sum(dfc_base_ice),
										sum(dfc_valor_ice) 
								FROM del_detalle_factura_compra 
								WHERE dfc_porcentaje_ice<>'0'
								and dfc_factura=".$liq_numero."
								group by dfc_porcentaje_ice";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2];
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
				if($rs_liquidacion[0][22]>0){	
					$check_sql="SELECT  '5' as impuesto,
										 dfc_porcentaje_irbpnr,
										sum(dfc_base_irbpnr),
										sum(dfc_valor_irbpnr) 
								FROM del_detalle_factura_compra 
								WHERE dfc_porcentaje_irbpnr<>'0'
								and dfc_factura=".$liq_numero."
								group by dfc_porcentaje_irbpnr";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1];
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2]; 
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
			$liquidacion->totalConImpuesto = $total_Impuestos;
			$liquidacion->propina = $rs_liquidacion[0][23]; 
			$liquidacion->importeTotal = $rs_liquidacion[0][28]; 
			$liquidacion->moneda = $rs_liquidacion[0][27];
			$check_sql="SELECT
								dfc_factura,
								codigo,
								codigo_aux,
								fp_descripcion,
								dfc_cantidad,
								dfc_precio_unitario,
								dfc_descuento,
								valor_sin_impuesto,
								fp_iva,
								dfc_porcentaje_iva,
								iva_porcentaje,
								dfc_base_iva,
								dfc_valor_iva,
								fp_ice,
								dfc_porcentaje_ice,
								dfc_base_ice,
								ice_tarifa,
								dfc_valor_ice,
								fp_irbpnr,
								dfc_porcentaje_irbpnr,
								irbpnr_tarifa,
								dfc_base_irbpnr,
								dfc_valor_irbpnr,
								dfc_descripcion 
							FROM
								v_del_detalle_liquidacion_sri
							where dfc_factura=".$liq_numero."
							order by dfc_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_detalles   === false){
				echo "Error al acceder al detalle de la factura";
			}else{
				$detalles_factura = array();
				$i=0;
				while (!$rs_detalles->EOF){
					$detalleFactura = new detalleFactura();
					$detalleFactura->codigoPrincipal = $rs_detalles->fields[1];
					$detalleFactura->codigoAuxiliar = $rs_detalles->fields[2]; 
					$detalleFactura->descripcion = $rs_detalles->fields[3]; 
					$detalleFactura->cantidad = $rs_detalles->fields[4]; 
					$detalleFactura->precioUnitario = $rs_detalles->fields[5]; 
					$detalleFactura->descuento = $rs_detalles->fields[6]; 
					$detalleFactura->precioTotalSinImpuesto = $rs_detalles->fields[7]; 
					if ($rs_detalles->fields[23] <>""){
						$informacion_adicional=array();
						$detalle_adicional= new detalleAdicional();
						$detalle_adicional->nombre = 'Adicional';
						$detalle_adicional->valor = $rs_detalles->fields[23] ;
						$informacion_adicional[0]=$detalle_adicional;							 
						$detalleFactura->detalleAdicional = $informacion_adicional;	
					}
						$impuestos_det=array();
						$j=0;
						$impuesto = new impuesto();
						$impuesto->codigo = $rs_detalles->fields[8];
						$impuesto->codigoPorcentaje = $rs_detalles->fields[9]; 
						$impuesto->tarifa = $rs_detalles->fields[10]; 
						$impuesto->baseImponible = $rs_detalles->fields[11]; 
						$impuesto->valor = $rs_detalles->fields[12];
						$impuestos_det[$j]=$impuesto;
						$j+=1;
						if($rs_detalles->fields[14]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[13];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[14]; 
							$impuesto->tarifa = $rs_detalles->fields[16];  
							$impuesto->baseImponible = $rs_detalles->fields[15]; 
							$impuesto->valor = $rs_detalles->fields[17];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
						if($rs_detalles->fields[19]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[18];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[19]; 
							$impuesto->tarifa = $rs_detalles->fields[20]; 
							$impuesto->baseImponible = $rs_detalles->fields[21]; 
							$impuesto->valor = $rs_detalles->fields[22];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
					$detalleFactura->impuestos = $impuestos_det;
					$detalles_factura[$i]=$detalleFactura;
					$rs_detalles->MoveNext();
					$i+=1;
				}
				$rs_detalles->Close();
				$liquidacion->detalles = $detalles_factura;
			}
			$pagos = array();
			$check_sql="SELECT 	a.fp_id,
								sri_forma_pago.fp_codigo,
								a.fp_valor,
								coalesce(a.fp_plazo,0),
								coalesce(a.fp_unidad_tiempo,'DIAS') 
						FROM del_forma_pago_factura_compra a 
						inner join del_forma_pago b on a.fp_forma_pago=b.fp_id	
						inner join sri_forma_pago on b.fp_sri=sri_forma_pago.fp_codigo
						where a.fp_factura=".$liq_numero ;
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_pagos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_pagos = false;
          $rs_pagos_erro = $this->Db->ErrorMsg();
      } 
 
			if ($rs_pagos   === false){
				echo "Error al acceder a las formas de pago";
			}else{
				$i=0;
				while (!$rs_pagos->EOF){
					$pago = new pagos();
					$pago->formaPago =$rs_pagos->fields[1];
					$pago->total = $rs_pagos->fields[2];
					$pago->plazo = $rs_pagos->fields[3];
					$pago->unidadTiempo=$rs_pagos->fields[4];
					$pagos[$i]=$pago;
					$i+=1;
					$rs_pagos->MoveNext();
				}
				$rs_pagos->Close();
			}	
			$liquidacion->pagos = $pagos;
			$camposAdicionales = array();
			$i=0;

			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_liquidacion[0][12]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_liquidacion[0][12];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_liquidacion[0][13]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $rs_liquidacion[0][13];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_liquidacion[0][26]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Comentario";
				$campoAdicional->valor = $rs_liquidacion[0][26];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			$liquidacion->infoAdicional = $camposAdicionales;


			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $liquidacion;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($liquidacion);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}	
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $liquidacion;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_liquidacion[0][1];
						$comprobantePendiente->codDoc = $rs_liquidacion[0][2];
						$comprobantePendiente->establecimiento = $rs_liquidacion[0][5];
						$comprobantePendiente->fechaEmision = $rs_liquidacion[0][3];
						$comprobantePendiente->ptoEmision = $rs_liquidacion[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_liquidacion[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}	
			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				 $update_sql =  "UPDATE del_factura_compra 
                                    SET liq_error_sri='" . $res->return->mensajes->mensaje . "',
                                        fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."'
                                    WHERE fc_id=" . $liq_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_factura_compra 
                                    SET liq_estado_sri='" . $res->return->estadoComprobante . "',
                                        fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."'
                                    WHERE fc_id=" . $liq_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($liquidacion,$rs_liquidacion[0][13])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				
				$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='".$res->return->estadoComprobante."',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',
									 liq_clave='".$res->return->claveAcceso."',   
									 fc_autorizacion='".$res->return->numeroAutorizacion."',
									 liq_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 fc_correo_enviado='".$correo_enviado."'
								WHERE fc_id=".$liq_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($liquidacion,$rs_liquidacion[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					
					$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='AUTORIZADO',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',
									 liq_clave='".$res->return->claveAcceso."',   
									 fc_autorizacion='".$res->return->claveAcceso."',
									  fc_correo_enviado='".$correo_enviado."'
								WHERE fc_id=".$liq_numero ;
				}else{
					$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='".$res->return->estadoComprobante."',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',	
									 liq_clave='".$res->return->claveAcceso."',   
									 liq_error_sri='".$res->return->mensajes->mensaje."'
								WHERE fc_id=".$liq_numero ;
				}
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='".$res->return->estadoComprobante."',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',
									 liq_clave='".$res->return->claveAcceso."',   
									 liq_error_sri='".$res->return->mensajes->mensaje."',
									 liq_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE fc_id=".$liq_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function autorizar_nc ($nc_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($nc_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$notaCredito = new notaCredito();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT nc_empresa,nc_establecimiento FROM del_nota_credito WHERE nc_numero=".$nc_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$notaCredito->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Nota de Credito";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$notaCredito->configCorreo = $configCorreo;

			$notaCredito->ruc = $rs_empresa[0][0];
			$notaCredito->razonSocial = $rs_empresa[0][4];
			$notaCredito->nombreComercial = $rs_empresa[0][5]; 
			$notaCredito->dirMatriz = $rs_empresa[0][6]; 
			$notaCredito->obligadoContabilidad =$rs_empresa[0][7]; 
			$notaCredito->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$notaCredito->contribuyenteEspecial = $rs_empresa[0][10];
			}
			$notaCredito->padronMicroempresa=$rs_empresa[0][17];
			$notaCredito->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $notaCredito->numeroResolucion=$rs[0][0];
				}
			}
			$notaCredito->artesanoCalificado=$rs_empresa[0][19];

		}

		$check_sql="SELECT
						nc_numero,
						nc_ambiente,
						nc_tipo_comprobante,
						fecha,
						est_direccion,
						est_codigo,
						pen_serie,
						nc_secuencial,
						cl_tipo_identificacion,
						cl_nombre,
						cl_identificacion,
						nc_cod_docmod,
						nc_secuencial_docmod,
						fecha_docmod,
						nc_subtotal,
						nc_total_descuento,
						nc_subtotal_iva,
						nc_valor_iva,
						nc_subtotal_cero,
						nc_subtotal_no_objeto,
						nc_subtotal_excento,
						nc_valor_ice,
						nc_valor_irbpnr,
						nc_total,
						nc_motivo,
						sp_busca_parametro('MONEDASRI'::character varying, 'DOLAR'::character varying) AS nc_moneda,
						cl_direccion,
						cl_email,
						cl_telefono,
						usuario,
						usu_cedula,
						usu_telefono,
						usu_email,
						usu_placa,
						usu_tipo_documento,
						est_padronrimpe,
						est_leyenda_rimpe,
						nc_correo_enviado
					FROM
						v_del_datos_nota_credito_sri
					WHERE nc_numero=".$nc_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_notaCredito = array();
      $rs_notacredito = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_notaCredito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                        $rs_notacredito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_notaCredito = false;
          $rs_notaCredito_erro = $this->Db->ErrorMsg();
          $rs_notacredito = false;
          $rs_notacredito_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_notacredito[0][0])){
			$correo_enviado=$rs_notacredito[0][37];
			$notaCredito->padronRimpe=$rs_notacredito[0][35];
			$notaCredito->leyendaRimpe=$rs_notacredito[0][36];
			$notaCredito->ambiente = $rs_notacredito[0][1];
			$notaCredito->codDoc = $rs_notacredito[0][2];
			$notaCredito->fechaEmision = $rs_notacredito[0][3];
			$notaCredito->dirEstablecimiento = $rs_notacredito[0][4];
			$notaCredito->establecimiento = $rs_notacredito[0][5]; 
			$notaCredito->ptoEmision = $rs_notacredito[0][6]; 
			$notaCredito->secuencial = $rs_notacredito[0][7];
			$notaCredito->tipoIdentificacionComprador = $rs_notacredito[0][8];
			$notaCredito->razonSocialComprador = $rs_notacredito[0][9]; 
			$notaCredito->identificacionComprador = $rs_notacredito[0][10];
			$notaCredito->codDocModificado = $rs_notacredito[0][11];
			$notaCredito->numDocModificado = $rs_notacredito[0][12];
			$notaCredito->fechaEmisionDocSustento = $rs_notacredito[0][13];
			$notaCredito->totalSinImpuestos = $rs_notacredito[0][14]; 
			$notaCredito->totalDescuento = $rs_notacredito[0][15]; 
			$total_Impuestos=array();
			$i=0;
					$sql_ivas_cobrados="SELECT dnc_porcentaje_iva,
												ROUND(sum(dnc_cantidad*(dnc_precio_unitario-dnc_descuento)+dnc_valor_ice),2),
												round(sum(dnc_base_iva) *iva_porcentaje/100,2)
										FROM  del_detalle_nota_credito 
										inner join sri_tarifa_iva on iva_codigo=dnc_porcentaje_iva
										WHERE dnc_nota_credito=".$nc_numero."
										group by dnc_porcentaje_iva,iva_porcentaje";
					 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_ivas = false;
          $rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_ivas   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_ivas->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo ='2'; 
							$totalImpuesto->codigoPorcentaje = $rs_ivas->fields[0]; 
							$totalImpuesto->baseImponible = $rs_ivas->fields[1];
							$totalImpuesto->valor = $rs_ivas->fields[2];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_ivas->MoveNext();
						}
						$rs_ivas->Close();
					}	
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}
				if($rs_notacredito[0][21]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 dnc_porcentaje_ice,
										sum(dnc_base_ice),
										sum(dnc_valor_ice) 
								FROM del_detalle_nota_credito 
								WHERE dnc_porcentaje_ice<>'0' 
								and dnc_nota_credito=".$nc_numero."
								group by dnc_porcentaje_ice";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_notaCredito";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2];
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
				if($rs_notacredito[0][22]>0){	
					$check_sql="SELECT  '5' as impuesto,
										dnc_porcentaje_irbpnr,
										sum(dnc_base_irbpnr),
										sum(dnc_valor_irbpnr) 
								FROM del_detalle_nota_credito 
								WHERE dnc_porcentaje_irbpnr<>'0' 
								and dnc_nota_credito=".$nc_numero ."
								group by dnc_porcentaje_irbpnr";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_notaCredito";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1];
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2]; 
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
			$notaCredito->totalConImpuesto = $total_Impuestos;
			$notaCredito->valorModificacion = $rs_notacredito[0][23];
			$notaCredito->motivo = $rs_notacredito[0][24];
			$notaCredito->moneda = $rs_notacredito[0][25];

			$check_sql="SELECT
								dnc_nota_credito,
								dnc_producto,
								pro_codigo_aux,
								pro_descripcion,
								dnc_cantidad,
								dnc_precio_unitario,
								dnc_descuento,
								valor_sin_impuesto,
								pro_iva,
								dnc_porcentaje_iva,
								iva_porcentaje,
								dnc_base_iva,
								dnc_valor_iva,
								pro_ice,
								dnc_porcentaje_ice,
								dnc_base_ice,
								ice_tarifa,
								dnc_valor_ice,
								pro_irbpnr,
								dnc_porcentaje_irbpnr,
								irbpnr_tarifa,
								dnc_base_irbpnr,
								dnc_valor_irbpnr,
								dnc_descripcion 
							FROM
								v_del_detalle_nota_credito_sri
							where dnc_nota_credito=".$nc_numero."
							order by dnc_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_detalles   === false){
				echo "Error al acceder al detalle de la notaCredito";
			}else{
				$detalles_notaCredito = array();
				$i=0;
				while (!$rs_detalles->EOF){
					$detallenotaCredito = new detalleNotaCredito();
					$detallenotaCredito->codigoInterno = $rs_detalles->fields[1];
					$detallenotaCredito->codigoAdicional = $rs_detalles->fields[2]; 
					$detallenotaCredito->descripcion = $rs_detalles->fields[3]; 
					$detallenotaCredito->cantidad = $rs_detalles->fields[4]; 
					$detallenotaCredito->precioUnitario = $rs_detalles->fields[5]; 
					$detallenotaCredito->descuento = $rs_detalles->fields[6]; 
					$detallenotaCredito->precioTotalSinImpuesto = $rs_detalles->fields[7]; 
					if ($rs_detalles->fields[23] <>""){
						$informacion_adicional=array();
						$detalle_adicional= new detalleAdicional();
						$detalle_adicional->nombre = 'Adicional';
						$detalle_adicional->valor = $rs_detalles->fields[23] ;
						$informacion_adicional[0]=$detalle_adicional;							 
						$detallenotaCredito->detallesAdicionales = $informacion_adicional;	
					}
						$impuestos_det=array();
						$j=0;
						$impuesto = new impuesto();
						$impuesto->codigo = $rs_detalles->fields[8];
						$impuesto->codigoPorcentaje = $rs_detalles->fields[9]; 
						$impuesto->tarifa = $rs_detalles->fields[10]; 
						$impuesto->baseImponible = $rs_detalles->fields[11]; 
						$impuesto->valor = $rs_detalles->fields[12];
						$impuestos_det[$j]=$impuesto;
						$j+=1;
						if($rs_detalles->fields[14]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[13];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[14]; 
							$impuesto->tarifa = $rs_detalles->fields[16];  
							$impuesto->baseImponible = $rs_detalles->fields[15]; 
							$impuesto->valor = $rs_detalles->fields[17];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
						if($rs_detalles->fields[19]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[18];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[19]; 
							$impuesto->tarifa = $rs_detalles->fields[20]; 
							$impuesto->baseImponible = $rs_detalles->fields[21]; 
							$impuesto->valor = $rs_detalles->fields[22];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
					$detallenotaCredito->impuestos = $impuestos_det;
					$detalles_notaCredito[$i]=$detallenotaCredito;
					$rs_detalles->MoveNext();
					$i+=1;
				}
				$rs_detalles->Close();
				$notaCredito->detalles = $detalles_notaCredito;
			}

			$camposAdicionales = array();
			$i=0;

			if($rs_empresa[0][16]=='S'){
				if($rs_notacredito[0][6]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Punto Emision";
					$campoAdicional->valor = $rs_notacredito[0][6];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][29]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Razon Social";
					$campoAdicional->valor = $rs_notacredito[0][29];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][30]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Ruc";
					$campoAdicional->valor = $rs_notacredito[0][30];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][31]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Telefono Socio";
					$campoAdicional->valor = $rs_notacredito[0][31];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][33]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Placa";
					$campoAdicional->valor = $rs_notacredito[0][33];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][34]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Contribuyente";
					$campoAdicional->valor = $rs_notacredito[0][34];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

			}


			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if($rs_notacredito[0][28]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_notacredito[0][28];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_notacredito[0][27]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $rs_notacredito[0][27];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if($rs_notacredito[0][26]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Direccion";
				$campoAdicional->valor = $rs_notacredito[0][26];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			$notaCredito->infoAdicional = $camposAdicionales;

			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $notaCredito;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($notaCredito);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}	
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $notaCredito;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_notacredito[0][1];
						$comprobantePendiente->codDoc = $rs_notacredito[0][2];
						$comprobantePendiente->establecimiento = $rs_notacredito[0][5];
						$comprobantePendiente->fechaEmision = $rs_notacredito[0][3];
						$comprobantePendiente->ptoEmision = $rs_notacredito[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_notacredito[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE del_nota_credito 
								SET nc_error_sri='" . $res->return->mensajes->mensaje . "',
									nc_archivo='".$this->crearNombreFicheroSinExtension($notaCredito)."'
								WHERE nc_numero=" . $nc_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_nota_credito 
								 SET nc_estado_sri='" . $res->return->estadoComprobante . "',
									 nc_archivo='".$this->crearNombreFicheroSinExtension($notaCredito)."'
								 WHERE nc_numero=" . $nc_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
						if($this->enviarCorreo($notaCredito,$rs_notacredito[0][27])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
				
				$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='".$res->return->estadoComprobante."',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_autorizacion='".$res->return->numeroAutorizacion."',
									 nc_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 nc_error_sri='',
									 nc_correo_enviado='".$correo_enviado."'
								WHERE nc_numero=".$nc_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($notaCredito,$rs_notacredito[0][27])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='AUTORIZADO',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_autorizacion='".$res->return->claveAcceso."',
									 nc_correo_enviado='".$correo_enviado."'
								WHERE nc_numero=".$nc_numero ;
				}else{
					$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='".$res->return->estadoComprobante."',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_error_sri='".$res->return->mensajes->mensaje."'
								WHERE nc_numero=".$nc_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='".$res->return->estadoComprobante."',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_error_sri='".$res->return->mensajes->mensaje."',
									 nc_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE nc_numero=".$nc_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function autorizar_guia	($gr_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($gr_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$guiaRemision = new guiaRemision();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT gr_empresa,gr_establecimiento FROM del_guia_remision WHERE gr_numero=".$gr_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$guiaRemision->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Guia de Remision";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$guiaRemision->configCorreo = $configCorreo;

			$guiaRemision->ruc = $rs_empresa[0][0];
			$guiaRemision->razonSocial = $rs_empresa[0][4];
			$guiaRemision->nombreComercial = $rs_empresa[0][5]; 
			$guiaRemision->dirMatriz = $rs_empresa[0][6]; 
			$guiaRemision->obligadoContabilidad =$rs_empresa[0][7]; 
			$guiaRemision->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$guiaRemision->contribuyenteEspecial = $rs_empresa[0][10];
			}
			$guiaRemision->padronMicroempresa=$rs_empresa[0][17];
			$guiaRemision->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $guiaRemision->numeroResolucion=$rs[0][0];
				}
			}
			$guiaRemision->artesanoCalificado=$rs_empresa[0][19];

		}

		$check_sql="SELECT  gr_numero,
							gr_ambiente,
							gr_tipo_comprobante,
							est_codigo,
							pen_serie,
							gr_secuencial,
							est_direccion,
							gr_direccion_partida,
							tr_nombre,
							tr_tipo_identificacion,
							tr_identificacion,
							fecha_inicio,
							fecha_fin,
							tr_placa,
							tr_email,
							est_padronrimpe,
							est_leyenda_rimpe,
							gr_correo_enviado
					FROM v_del_datos_guia_remision
					WHERE gr_numero=".$gr_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_guiaRemision = array();
      $rs_guiaremision = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_guiaRemision[$SCy] [$SCx] = $SCrx->fields[$SCx];
                        $rs_guiaremision[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_guiaRemision = false;
          $rs_guiaRemision_erro = $this->Db->ErrorMsg();
          $rs_guiaremision = false;
          $rs_guiaremision_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_guiaremision[0][0])){
			$correo_enviado=$rs_guiaremision[0][17];
			$guiaRemision->padronRimpe=$rs_guiaremision[0][15];
			$guiaRemision->leyendaRimpe=$rs_guiaremision[0][16];
			$guiaRemision->ambiente = $rs_guiaremision[0][1];
			$guiaRemision->codDoc = $rs_guiaremision[0][2];
			$guiaRemision->establecimiento = $rs_guiaremision[0][3];
			$guiaRemision->ptoEmision = $rs_guiaremision[0][4]; 
			$guiaRemision->secuencial = $rs_guiaremision[0][5];
			$guiaRemision->dirEstablecimiento = $rs_guiaremision[0][6];
			$guiaRemision->dirPartida = $rs_guiaremision[0][7];
			$guiaRemision->razonSocialTransportista = $rs_guiaremision[0][8];
			$guiaRemision->tipoIdentificacionTransportista = $rs_guiaremision[0][9];
			$guiaRemision->rucTransportista =$rs_guiaremision[0][10];
			$guiaRemision->rise = "RISE";
			$guiaRemision->fechaIniTransporte = $rs_guiaremision[0][11];
			$guiaRemision->fechaFinTransporte = $rs_guiaremision[0][12];
			$guiaRemision->placa = $rs_guiaremision[0][13];

			$check_sql="SELECT dg_guia,
								dg_identificacion_destinatario,
								dg_nombre_destinatario,
								dg_direccion_destino,
								dg_motivo_traslado,
								dg_documento_aduanero,
								coalesce(est_codigo,''),
								dg_ruta,
								dg_coddoc_sustento,
								dg_documento_sustento,
								dg_autorizacion_sustento,
								coalesce(dg_fecha_sustento,''),
								dg_id
							FROM v_del_destinatario_guia_sri
						where dg_guia=".$gr_numero."
						order by dg_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_destinatarios = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_destinatarios = false;
          $rs_destinatarios_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_destinatarios   === false){
				echo "Error al acceder al detalle de la guiaRemision";
			}else{
				$destinatarios_guiaRemision = array();
				$i=0;
				while (!$rs_destinatarios->EOF){
					$destinatario = new Destinatario();
					$destinatario->identificacionDestinatario = $rs_destinatarios->fields[1];
					$destinatario->razonSocialDestinatario = $rs_destinatarios->fields[2];
					$destinatario->dirDestinatario =$rs_destinatarios->fields[3];
					$destinatario->motivoTraslado = $rs_destinatarios->fields[4];
					$destinatario->docAduaneroUnico = $rs_destinatarios->fields[5];
					$destinatario->codEstabDestino = $rs_destinatarios->fields[6];
					$destinatario->ruta =$rs_destinatarios->fields[7];
					$destinatario->codDocSustento = $rs_destinatarios->fields[8];
					$destinatario->numDocSustento = $rs_destinatarios->fields[9];
					$destinatario->numAutDocSustento = $rs_destinatarios->fields[10];
					$destinatario->fechaEmisionDocSustento = $rs_destinatarios->fields[11];

					$check_sql="SELECT 
										dgd_destinatario,
										pro_codigo,
										pro_codigo_aux,
										pro_descripcion,
										dgd_cantidad 
								FROM v_del_productos_destinatario_guia_sri
								WHERE dgd_destinatario=".$rs_destinatarios->fields[12]."
								order by dgd_id";

					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 
  

					if ($rs_detalles   === false){
						echo "Error al acceder al detalle de la guiaRemision";
					}else{
						$detalles = array();
						$j=0;
						while (!$rs_detalles->EOF){
							$detalle = new DetalleGuiaRemision();
							$detalle->codigoInterno = $rs_detalles->fields[1];
							$detalle->codigoAdicional = $rs_detalles->fields[2];
							$detalle->descripcion = $rs_detalles->fields[3];
							$detalle->cantidad = $rs_detalles->fields[4];
							$detalles[$j] = $detalle;
							$j+=1;
							$rs_detalles->MoveNext();
						}	
						$destinatario->detalles = $detalles;
					}
					$destinatarios_guiaRemision[$i]=$destinatario;
					$rs_destinatarios->MoveNext();
					$i+=1;
				}
				$rs_destinatarios->Close();
				$guiaRemision->destinatarios = $destinatarios_guiaRemision;
			}

			$camposAdicionales = array();
			$campoAdicional = new campoAdicional();
			$campoAdicional->nombre = "Email";
			$campoAdicional->valor = $rs_guiaremision[0][14];
			$camposAdicionales[0] = $campoAdicional;
			$campoAdicional = new campoAdicional();
			$campoAdicional->nombre = "Direccion";
			$campoAdicional->valor = $rs_empresa[0][6];
			$camposAdicionales[1] = $campoAdicional;
			$guiaRemision->infoAdicional = $camposAdicionales;

			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $guiaRemision;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($guiaRemision);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $guiaRemision;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_guiaremision[0][1];
						$comprobantePendiente->codDoc = $rs_guiaremision[0][2];
						$comprobantePendiente->establecimiento = $rs_guiaremision[0][5];
						$comprobantePendiente->fechaEmision = $rs_guiaremision[0][3];
						$comprobantePendiente->ptoEmision = $rs_guiaremision[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_guiaremision[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE del_guia_remision 
                                    SET gr_error_sri='" . $res->return->mensajes->mensaje . "',
                                        gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."' 
                                    WHERE gr_numero=" . $gr_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_guia_remision 
                                    SET gr_estado_sri='" . $res->return->estadoComprobante . "',
                                        gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."' 
                                    WHERE gr_numero=" . $gr_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($guiaRemision,$rs_guiaremision[0][14])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				
				$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='".$res->return->estadoComprobante."',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."' ,
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_autorizacion='".$res->return->numeroAutorizacion."',
									 gr_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 gr_error_sri='',
									 gr_correo_enviado='".$correo_enviado."'
								WHERE gr_numero=".$gr_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($guiaRemision,$rs_guiaremision[0][14])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='AUTORIZADO',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."', 
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_autorizacion='".$res->return->claveAcceso."',
									 gr_correo_enviado='".$correo_enviado."'
								WHERE gr_numero=".$gr_numero ;
				}else{
					$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='".$res->return->estadoComprobante."',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."',
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_error_sri='".$res->return->mensajes->mensaje."'
								WHERE gr_numero=".$gr_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='".$res->return->estadoComprobante."',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."',
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_error_sri='".$res->return->mensajes->mensaje."',
									 gr_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE gr_numero=".$gr_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function autorizar_retencion ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($ret_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado="";
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$retencion = new comprobanteRetencion();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT ret_empresa,ret_establecimiento FROM del_retencion WHERE ret_numero=".$ret_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$retencion->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Retencion";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado =$rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$retencion->configCorreo = $configCorreo;

			$retencion->ruc = $rs_empresa[0][0];
			$retencion->razonSocial = $rs_empresa[0][4];
			$retencion->nombreComercial = $rs_empresa[0][5]; 
			$retencion->dirMatriz = $rs_empresa[0][6]; 
			$retencion->obligadoContabilidad =$rs_empresa[0][7]; 
			$retencion->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$retencion->contribuyenteEspecial = $rs_empresa[0][10];
			}	
			$retencion->padronMicroempresa=$rs_empresa[0][17];
			$retencion->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $retencion->numeroResolucion=$rs[0][0];
				}
			}
			$retencion->artesanoCalificado=$rs_empresa[0][19];

		}
		$check_sql="SELECT	ret_numero,
							ret_ambiente,
							ret_tipo_comprobante,
							fecha,
							est_codigo,
							pen_serie,
							ret_secuencial,
							est_direccion,
							pr_tipo_identificacion,
							pr_nombre,
							pr_identificacion,
							ret_periodo_fiscal, 
							pr_direccion,
							pr_email,
							pr_telefono,
							ret_comentario,
							est_padronrimpe,
							est_leyenda_rimpe,
							ret_correo_enviado
						FROM
							v_del_datos_retencion_sri
						WHERE ret_numero=".$ret_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_retencion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_retencion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_retencion = false;
          $rs_retencion_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_retencion[0][0])){
			$correo_enviado=$rs_retencion[0][18];
			$retencion->padronRimpe=$rs_retencion[0][16];
			$retencion->leyendaRimpe=$rs_retencion[0][17];
			$retencion->ambiente = $rs_retencion[0][1];
			$retencion->codDoc = $rs_retencion[0][2];
			$retencion->fechaEmision = $rs_retencion[0][3];
			$retencion->establecimiento = $rs_retencion[0][4];
			$retencion->ptoEmision = $rs_retencion[0][5];
			$retencion->secuencial = $rs_retencion[0][6];
			$retencion->dirEstablecimiento = $rs_retencion[0][7];
			$retencion->tipoIdentificacionSujetoRetenido = $rs_retencion[0][8];
			$retencion->razonSocialSujetoRetenido = $rs_retencion[0][9];
			$retencion->identificacionSujetoRetenido = $rs_retencion[0][10];
			$retencion->periodoFiscal = $rs_retencion[0][11];
			$camposAdicionales = array();
			$i=0;

			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if ($rs_retencion[0][14]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_retencion[0][14];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if ($rs_retencion[0][13]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $rs_retencion[0][13];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}	

			if ($rs_retencion[0][12]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Direccion";
				$campoAdicional->valor = $rs_retencion[0][12];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}	

			if ($rs_retencion[0][15]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Comentario";
				$campoAdicional->valor = $rs_retencion[0][15];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}	
			$retencion->infoAdicional = $camposAdicionales;

			$check_sql="SELECT	dr_retencion,
								dr_impuesto,
								pri_codigo,
								dr_base_imponible,
								dr_porcentaje_retencion,
								dr_valor_retenido,
								dr_cod_doc_sustento,
								doc_sustento,
								fecha 
							FROM
								v_del_detalle_retencion_sri
							where dr_retencion=".$ret_numero."
							order by dr_id";
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 

			if ($rs_detalles  === false){
				echo "error al acceder a los detalles";
			}else{
				$impuestos = array();
				$i=0;
				while (!$rs_detalles->EOF){
					$impuesto = new impuestoComprobanteRetencion();
					$impuesto->codigo = $rs_detalles->fields[1];
					$impuesto->codigoRetencion = $rs_detalles->fields[2];
					$impuesto->baseImponible = $rs_detalles->fields[3];
					$impuesto->porcentajeRetener = $rs_detalles->fields[4];
					$impuesto->valorRetenido = $rs_detalles->fields[5];
					$impuesto->codDocSustento = $rs_detalles->fields[6];
					$impuesto->numDocSustento = $rs_detalles->fields[7];
					$impuesto->fechaEmisionDocSustento = $rs_detalles->fields[8];
					$impuestos[$i] = $impuesto;
					$rs_detalles->MoveNext();
					$i+=1;
				}
				$rs_detalles->Close();
				$retencion->impuestos = $impuestos;
			}	
			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $retencion;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($retencion);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}

			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $retencion;
					$procesarComprobante->envioSRI = true; 
					$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo "<br>";
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$retencionPendiente = new \comprobantePendiente();
						$retencionPendiente->configAplicacion = $configApp;
						$retencionPendiente->configCorreo = $configCorreo;
						$retencionPendiente->ambiente = $rs_retencion[0][1];
						$retencionPendiente->codDoc = $rs_retencion[0][2];
						$retencionPendiente->establecimiento = $rs_retencion[0][4];
						$retencionPendiente->fechaEmision = $rs_retencion[0][3];
						$retencionPendiente->ptoEmision = $rs_retencion[0][5];
						$retencionPendiente->ruc = $rs_empresa[0][0];
						$retencionPendiente->secuencial = $rs_retencion[0][6];
						$retencionPendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $retencionPendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}	
			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE  del_retencion
								SET  ret_error_sri='" .$res->return->mensajes->mensaje . "',
									ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
								WHERE ret_numero=" . $ret_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
					$update_sql =  "UPDATE  del_retencion
									SET ret_estado_sri='" . $res->return->estadoComprobante . "',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
									WHERE ret_numero=" . $ret_numero;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($retencion,$rs_retencion[0][13])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				
				$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='".$res->return->estadoComprobante."',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_autorizacion='".$res->return->numeroAutorizacion."',
									 ret_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 ret_correo_enviado='".$correo_enviado."'
								WHERE ret_numero=".$ret_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($retencion,$rs_retencion[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='AUTORIZADO',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_autorizacion='".$res->return->claveAcceso."',
									 ret_correo_enviado='".$correo_enviado."'
								WHERE ret_numero=".$ret_numero ;
				}else{
					$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='".$res->return->estadoComprobante."',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_error_sri='".$res->return->mensajes->mensaje."'
								WHERE ret_numero=".$ret_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='".$res->return->estadoComprobante."',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_error_sri='".$res->return->mensajes->mensaje."',
									 ret_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE ret_numero=".$ret_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function autorizar_retencion_dos ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($ret_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado="";
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$retencion = new comprobanteRetencionDos();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT ret_empresa,ret_establecimiento FROM del_retencion WHERE ret_numero=".$ret_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$check_sql="SELECT	ret_numero,
						ret_ambiente,
						ret_tipo_comprobante,
						fecha,
						est_codigo,
						pen_serie,
						ret_secuencial,
						est_direccion,
						pr_tipo_identificacion,
						pr_nombre,
						pr_identificacion,
						ret_periodo_fiscal, 
						pr_direccion,
						pr_email,
						pr_telefono,
						ret_comentario,
						est_padronrimpe,
						est_leyenda_rimpe,
						ret_correo_enviado,
						pr_tipo_persona,
						parte_relacionada
					FROM
						v_del_datos_retencion_sri
					WHERE ret_numero=".$ret_numero;
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_retencion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_retencion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_retencion = false;
          $rs_retencion_erro = $this->Db->ErrorMsg();
      } 


			if (isset($rs_retencion[0][0])){
				$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
				$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
				$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
				$configApp->passFirma = $rs_empresa[0][3];
				$configApp->dirIreport=$dir_ireport;
				$retencion->configAplicacion = $configApp;

				$configCorreo->correoAsunto = "Nueva Retencion V2";
				$configCorreo->correoHost = $rs_empresa[0][12];
				$configCorreo->correoPass = $rs_empresa[0][13];
				$configCorreo->correoPort = $rs_empresa[0][14];
				$configCorreo->correoRemitente = $rs_empresa[0][15];
				$configCorreo->sslHabilitado = $rs_empresa[0][21];
				$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
				$retencion->configCorreo = $configCorreo;

				$retencion->ambiente = $rs_retencion[0][1];
				$retencion->tipoEmision = $rs_empresa[0][9];
				$retencion->razonSocial = $rs_empresa[0][4];
				$retencion->nombreComercial = $rs_empresa[0][5]; 
				$retencion->ruc = $rs_empresa[0][0];
				$retencion->codDoc = $rs_retencion[0][2];
				$retencion->establecimiento = $rs_retencion[0][4];
				$retencion->ptoEmision = $rs_retencion[0][5];
				$retencion->secuencial = $rs_retencion[0][6];
				$retencion->dirMatriz = $rs_empresa[0][6]; 
				
				$retencion->padronMicroempresa=$rs_empresa[0][17];
				$retencion->padronAgenteRetencion=$rs_empresa[0][18];
				if($rs_empresa[0][18]=='S'){
					$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

					if (isset($rs[0][0])){
					$retencion->numeroResolucion=$rs[0][0];
					}
				}
				$retencion->artesanoCalificado=$rs_empresa[0][19];
				$retencion->padronRimpe=$rs_retencion[0][16];
				$retencion->leyendaRimpe=$rs_retencion[0][17];
		
				$retencion->fechaEmision = $rs_retencion[0][3];
				$retencion->dirEstablecimiento = $rs_retencion[0][7];
				if ($rs_empresa[0][10]!=''){
					$retencion->contribuyenteEspecial = $rs_empresa[0][10];
				}
				$retencion->obligadoContabilidad =$rs_empresa[0][7]; 
				$retencion->tipoIdentificacionSujetoRetenido = $rs_retencion[0][8];
				if($rs_retencion[0][8]=='06' or $rs_retencion[0][8]=='08' ){
					$retencion->tipoSujetoRetenido=$rs_retencion[0][19];
				}
				$retencion->parteRel=$rs_retencion[0][20];
				$retencion->razonSocialSujetoRetenido = $rs_retencion[0][9];
				$retencion->identificacionSujetoRetenido = $rs_retencion[0][10];
				$retencion->periodoFiscal = $rs_retencion[0][11];
				$correo_enviado=$rs_retencion[0][18];
				$select_sql="SELECT
									sr_id,
									sr_cod_sustento,
									sr_cod_docsustento,
									sr_num_doc_sustento,
									sr_fechaemision,
									sr_fecha_registro_contable,
									sr_autorizacion,
									sr_pago_loc_ext,
									sr_tipo_regimen,
									sr_pais_pago,
									sr_aplica_doble_trib,
									sr_pago_sujeto_retencion_nc,
									sr_pago_reg_fis,
									sr_total_reembolsos,
									sr_total_baseimponible_reembolsos,
									sr_total_impuesto_reeemboso,
									sr_total_sin_impuestos,
									sr_importe_total 
								FROM
									v_del_datos_sustento_retencion_sri
								WHERE
									sr_retencion=".$ret_numero;
				 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_sustentos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_sustentos = false;
          $rs_sustentos_erro = $this->Db->ErrorMsg();
      } 

				$w_sustentos = array();
				$i=0;
				if ($rs_sustentos  === false){
					echo "error al acceder a los sustentos";
				}else{
					while (!$rs_sustentos->EOF){
						$w_sustento = new sustentoRetencion();
						$w_sustento->codSustento=$rs_sustentos->fields[1];
						$w_sustento->codDocSustento=$rs_sustentos->fields[2];
						$w_sustento->numDocSustento=$rs_sustentos->fields[3];
						$w_sustento->fechaEmisionDocSustento=$rs_sustentos->fields[4];
						$w_sustento->fechaRegistroContable=$rs_sustentos->fields[5];
						$w_sustento->numAutDocSustento=$rs_sustentos->fields[6];
						$w_sustento->pagoLocExt=$rs_sustentos->fields[7];
						if($rs_sustentos->fields[7]=='02'){
							$w_sustento->tipoRegi=$rs_sustentos->fields[8];
							$w_sustento->paisEfecPago=$rs_sustentos->fields[9];
							$w_sustento->aplicConvDobTrib=$rs_sustentos->fields[10];
							$w_sustento->pagExtSujRetNorLeg=$rs_sustentos->fields[11];
							$w_sustento->pagoRegFis=$rs_sustentos->fields[12];
						}
						if($rs_sustentos->fields[2]=='41'){
							$w_sustento->totalComprobantesReembolso=$rs_sustentos->fields[13];
							$w_sustento->totalBaseImponibleReembolso=$rs_sustentos->fields[14];
							$w_sustento->totalImpuestoReembolso=$rs_sustentos->fields[15];
						}
							
						$w_sustento->totalSinImpuestos=$rs_sustentos->fields[16];
						$w_sustento->importeTotal=$rs_sustentos->fields[17];
						
						$w_impuestos_sustento = array();
						$j=0;
						$select_sql="SELECT 
										isr_cod_impuesto,
										isr_cod_porcentaje,
										isr_base_imponible,
										ti_tarifa,
										isr_valor_impuesto 
									FROM v_del_impuestos_sustento_retencion_sri 
									WHERE isr_doc_sustento=".$rs_sustentos->fields[0];
						 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuestos_sustentos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuestos_sustentos = false;
          $rs_impuestos_sustentos_erro = $this->Db->ErrorMsg();
      } 

						if ($rs_impuestos_sustentos  === false){
							echo "error al acceder a los impuestos del sustento";
						}else{
							while (!$rs_impuestos_sustentos->EOF) {
							
								$w_impuesto_sustento = new impuestoDocSustento();
								$w_impuesto_sustento->codImpuestoDocSustento = $rs_impuestos_sustentos->fields[0];
								$w_impuesto_sustento->codigoPorcentaje = $rs_impuestos_sustentos->fields[1];
								$w_impuesto_sustento->baseImponible = $rs_impuestos_sustentos->fields[2];
								$w_impuesto_sustento->tarifa = $rs_impuestos_sustentos->fields[3];
								$w_impuesto_sustento->valorImpuesto = $rs_impuestos_sustentos->fields[4];

								$w_impuestos_sustento[$j]=$w_impuesto_sustento;
								$rs_impuestos_sustentos->MoveNext();
								$j+=1;
							}	
						}
						$w_sustento->impuestosDocSustento=$w_impuestos_sustento;

						$w_retenciones = array();
						$j=0;
						$select_sql="SELECT 
										codigo
										,codigo_retencion
										,irs_base_imponible
										,irs_porcentaje_retencion
										,irs_valor_retenido 
									FROM v_del_datos_retencion_sustento_sri 
									WHERE irs_sustento=".$rs_sustentos->fields[0];
						 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_retenciones = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_retenciones = false;
          $rs_retenciones_erro = $this->Db->ErrorMsg();
      } 

						if($rs_retenciones ===false){
							echo "error al acceder a las retenciones del sustento";
						}else{
							while (!$rs_retenciones->EOF) {
								$w_retencion_sustento = new impuestoComprobanteRetencionDos();
								$w_retencion_sustento->codigo = $rs_retenciones->fields[0];
								$w_retencion_sustento->codigoRetencion = $rs_retenciones->fields[1];
								$w_retencion_sustento->baseImponible = $rs_retenciones->fields[2];
								$w_retencion_sustento->porcentajeRetener = $rs_retenciones->fields[3];
								$w_retencion_sustento->valorRetenido = $rs_retenciones->fields[4];
								$w_retenciones[$j] = $w_retencion_sustento; 
								$rs_retenciones->MoveNext();
								$j+=1;
							}
						}
						$w_sustento->retenciones=$w_retenciones;

						$w_pagos_sustento = array();
						$j=0;
						$select_sql="SELECT 
										psr_forma_pago,
										psr_valor_pago 
									FROM del_forma_pago_sustento_retencion 
									WHERE psr_sustento_retencion=".$rs_sustentos->fields[0];
						 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_pagos_sustento = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_pagos_sustento = false;
          $rs_pagos_sustento_erro = $this->Db->ErrorMsg();
      } 

						if($rs_pagos_sustento ===false){
							echo "error al acceder a los pagos del sustento";
						}else{
							while (!$rs_pagos_sustento->EOF) {
							
								$w_pago= new pagoSustento();
								$w_pago->formapago=$rs_pagos_sustento->fields[0];
								$w_pago->total=$rs_pagos_sustento->fields[1];
								$rs_pagos_sustento->MoveNext();
								$w_pagos_sustento[$j]=$w_pago;
								$j+=1;
							}
						}	
						$w_sustento->pagos=$w_pagos_sustento;
						
						$w_sustentos[$i]=$w_sustento;
						$rs_sustentos->MoveNext();
						$i+=1;
					}	
				}
				$retencion->docsSustento=$w_sustentos;
				
				$camposAdicionales = array();
				$i=0;
				if($rs_empresa[0][19]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "artesanoCalificado";
					$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if ($rs_retencion[0][14]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Telefono";
					$campoAdicional->valor = $rs_retencion[0][14];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

				if ($rs_retencion[0][13]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Email";
					$campoAdicional->valor = $rs_retencion[0][13];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}	

				if ($rs_retencion[0][12]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Direccion";
					$campoAdicional->valor = $rs_retencion[0][12];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}	

				if ($rs_retencion[0][15]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Comentario";
					$campoAdicional->valor = $rs_retencion[0][15];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
					}	
				$retencion->infoAdicional = $camposAdicionales;
				if($i_log){
					var_dump($retencion);
					echo '<br>';
				}
					
				$procesarComprobante = new procesarComprobante();
				$procesarComprobante->comprobante = $retencion;
				$procesarComprobante->envioSRI = false; 
				$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
				if($i_log){
					var_dump($res);
					echo '<br>';
				}
				if($i_autorizar=='S'){
					if ($res->return->estadoComprobante == "FIRMADO") {
						$procesarComprobante = new procesarComprobante();
						$procesarComprobante->comprobante = $retencion;
						$procesarComprobante->envioSRI = true; 
						$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
						if($i_log){
							var_dump($res);
							echo "<br>";
						}	
					}else{
						if($res->return->estadoComprobante == "PROCESANDOSE"){
							$retencionPendiente = new \comprobantePendiente();
							$retencionPendiente->configAplicacion = $configApp;
							$retencionPendiente->configCorreo = $configCorreo;
							$retencionPendiente->ambiente = $rs_retencion[0][1];
							$retencionPendiente->codDoc = $rs_retencion[0][2];
							$retencionPendiente->establecimiento = $rs_retencion[0][4];
							$retencionPendiente->fechaEmision = $rs_retencion[0][3];
							$retencionPendiente->ptoEmision = $rs_retencion[0][5];
							$retencionPendiente->ruc = $rs_empresa[0][0];
							$retencionPendiente->secuencial = $rs_retencion[0][6];
							$retencionPendiente->tipoEmision = $rs_empresa[0][9];
							$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
							$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
							$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
							$procesarComprobantePendiente = new \procesarComprobantePendiente();
							$procesarComprobantePendiente->comprobantePendiente = $retencionPendiente;
							$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
							if ($res->return->estadoComprobante == "PROCESANDOSE") {
								$res->return->estadoComprobante = "ERROR";
							}
						}	
					}
				}	
				$mensaje_final=	$res->return->estadoComprobante."<br>";
				if ($res->return->estadoComprobante == 'ERROR'){
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
					$update_sql =  "UPDATE  del_retencion
									SET ret_error_sri='" .$res->return->mensajes->mensaje . "',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
									WHERE ret_numero=" . $ret_numero;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				}

				if ($res->return->estadoComprobante == "FIRMADO") {
					$update_sql =  "UPDATE  del_retencion
									SET ret_estado_sri='" . $res->return->estadoComprobante . "',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
									WHERE ret_numero=" . $ret_numero;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				}
				if($res->return->estadoComprobante=='AUTORIZADO'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($retencion,$rs_retencion[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					
					$update_sql = "UPDATE del_retencion 
									SET ret_estado_sri='".$res->return->estadoComprobante."',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
										ret_clave='".$res->return->claveAcceso."',   
										ret_autorizacion='".$res->return->numeroAutorizacion."',
										ret_fecha_autorizacion='".$res->return->fechaAutorizacion."',
										ret_correo_enviado='".$correo_enviado."'
									WHERE ret_numero=".$ret_numero ;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				}
				if($res->return->estadoComprobante=='DEVUELTA'){
					if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
						if($correo_enviado=="NO"){
							if($this->enviarCorreo($retencion,$rs_retencion[0][13])){
								$correo_enviado="SI";
							}else{
								$correo_enviado="NO";
							}
						}
						$update_sql = "UPDATE del_retencion 
										SET ret_estado_sri='AUTORIZADO',
											ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
											ret_clave='".$res->return->claveAcceso."',   
											ret_autorizacion='".$res->return->claveAcceso."',
											ret_correo_enviado='".$correo_enviado."'
										WHERE ret_numero=".$ret_numero ;
					}else{
						$update_sql = "UPDATE del_retencion 
										SET ret_estado_sri='".$res->return->estadoComprobante."',
											ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
											ret_clave='".$res->return->claveAcceso."',   
											ret_error_sri='".$res->return->mensajes->mensaje."'
										WHERE ret_numero=".$ret_numero ;
					}


					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				}
				if($res->return->estadoComprobante=='NO AUTORIZADO'){
					$update_sql = "UPDATE del_retencion 
									SET ret_estado_sri='".$res->return->estadoComprobante."',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
										ret_clave='".$res->return->claveAcceso."',   
										ret_error_sri='".$res->return->mensajes->mensaje."',
										ret_fecha_autorizacion='".$res->return->fechaAutorizacion."'
									WHERE ret_numero=".$ret_numero ;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				}
				return $mensaje_final;
				
			}
		}
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function autorizar_nd ($nd_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($nd_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$notaDebito = new notaDebito();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT nd_empresa,nd_establecimiento FROM del_nota_debito WHERE nd_numero=".$nd_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT 
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$notaDebito->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Nota de Debito";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$notaDebito->configCorreo = $configCorreo;

			$notaDebito->ruc = $rs_empresa[0][0];
			$notaDebito->razonSocial = $rs_empresa[0][4];
			$notaDebito->nombreComercial = $rs_empresa[0][5]; 
			$notaDebito->dirMatriz = $rs_empresa[0][6]; 
			$notaDebito->obligadoContabilidad =$rs_empresa[0][7]; 
			$notaDebito->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$notaDebito->contribuyenteEspecial = $rs_empresa[0][10];
			}
			$notaDebito->padronMicroempresa=$rs_empresa[0][17];
			$notaDebito->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $notaDebito->numeroResolucion=$rs[0][0];
				}
			}
			$notaDebito->artesanoCalificado=$rs_empresa[0][19];

		}

		$check_sql="SELECT
							nd_numero,
							nd_ambiente,
							nd_tipo_comprobante,
							fecha,
							est_direccion,
							est_codigo,
							pen_serie,
							nd_secuencial,
							cl_tipo_identificacion,
							cl_nombre,
							cl_identificacion,
							nd_cod_docmod,
							nd_serie_docmod||'-'||nd_secuencial_docmod,
							fecha_docmod,
							nd_subtotal,
							nd_subtotal_iva,
							nd_valor_iva,
							nd_subtotal_cero,
							nd_subtotal_no_objeto,
							nd_subtotal_excento,
							nd_valor_ice,
							nd_total,
							cl_direccion,
							cl_email,
							cl_telefono,
							est_padronrimpe,
							est_leyenda_rimpe,
							nd_correo_enviado
					FROM
							v_del_datos_nota_debito_sri
					WHERE nd_numero=".$nd_numero ;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_notaDebito = array();
      $rs_notadebito = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_notaDebito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                        $rs_notadebito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_notaDebito = false;
          $rs_notaDebito_erro = $this->Db->ErrorMsg();
          $rs_notadebito = false;
          $rs_notadebito_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_notadebito[0][0])){
			$correo_enviado=$rs_notadebito[0][27];
			$notaDebito->padronRimpe=$rs_notadebito[0][25];
			$notaDebito->leyendaRimpe=$rs_notadebito[0][26];
			$notaDebito->ambiente = $rs_notadebito[0][1];
			$notaDebito->codDoc = $rs_notadebito[0][2];
			$notaDebito->fechaEmision = $rs_notadebito[0][3];
			$notaDebito->dirEstablecimiento = $rs_notadebito[0][4];
			$notaDebito->establecimiento = $rs_notadebito[0][5]; 
			$notaDebito->ptoEmision = $rs_notadebito[0][6]; 
			$notaDebito->secuencial = $rs_notadebito[0][7];
			$notaDebito->tipoIdentificacionComprador = $rs_notadebito[0][8];
			$notaDebito->razonSocialComprador = $rs_notadebito[0][9]; 
			$notaDebito->identificacionComprador = $rs_notadebito[0][10];
			$notaDebito->codDocModificado = $rs_notadebito[0][11];
			$notaDebito->numDocModificado = $rs_notadebito[0][12];
			$notaDebito->fechaEmisionDocSustento = $rs_notadebito[0][13];
			$notaDebito->totalSinImpuestos = $rs_notadebito[0][14]; 
			$total_Impuestos=array();
			$i=0;
					$sql_ivas_cobrados="SELECT dnd_porcentaje_iva,
												ROUND(sum(1*(dnd_precio_unitario)+dnd_valor_ice),2),
												round(sum(dnd_base_iva) *iva_porcentaje/100,2),
												iva_porcentaje
										FROM  del_detalle_nota_debito 
										inner join sri_tarifa_iva on iva_codigo=dnd_porcentaje_iva
										WHERE dnd_nota_debito=".$nd_numero."
										group by dnd_porcentaje_iva,iva_porcentaje";
					 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_ivas = false;
          $rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_ivas   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_ivas->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo ='2'; 
							$totalImpuesto->codigoPorcentaje = $rs_ivas->fields[0]; 
							$totalImpuesto->baseImponible = $rs_ivas->fields[1];
							$totalImpuesto->valor = $rs_ivas->fields[2];
							$totalImpuesto->tarifa = $rs_ivas->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_ivas->MoveNext();
						}
						$rs_ivas->Close();
					}	
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$totalImpuesto->tarifa = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}	
				if($rs_notadebito[0][20]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 dnd_porcentaje_ice,
										sum(dnd_base_ice),
										sum(dnd_valor_ice) 
								FROM del_detalle_nota_debito 
								WHERE dnd_porcentaje_ice<>'0' 
								and dnd_nota_debito=".$nd_numero."
								group by dnd_porcentaje_ice";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_notaDebito";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2];
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}

			$notaDebito->impuestos = $total_Impuestos;
			$notaDebito->valorTotal = $rs_notadebito[0][21]; 
			$pagos = array();
			$check_sql="SELECT 	a.fp_id,
								sri_forma_pago.fp_codigo,
								a.fp_valor,
								coalesce(a.fp_plazo,0),
								coalesce(a.fp_unidad_tiempo,'DIAS') 
						FROM del_forma_pago_nd a 
						inner join del_forma_pago b on a.fp_forma_pago=b.fp_id	
						inner join sri_forma_pago on b.fp_sri=sri_forma_pago.fp_codigo
						where a.fp_nota_debito=".$nd_numero ;
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_pagos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_pagos = false;
          $rs_pagos_erro = $this->Db->ErrorMsg();
      } 
 
			if ($rs_pagos   === false){
				echo "Error al acceder a las formas de pago";
			}else{
				$i=0;
				while (!$rs_pagos->EOF){
					$pago = new pagos();
					$pago->formaPago =$rs_pagos->fields[1];
					$pago->total = $rs_pagos->fields[2];
					$pago->plazo = $rs_pagos->fields[3];
					$pago->unidadTiempo=$rs_pagos->fields[4];
					$pagos[$i]=$pago;
					$i+=1;
					$rs_pagos->MoveNext();
				}
				$rs_pagos->Close();
			}	
			$notaDebito->pagos = $pagos;
			$check_sql="SELECT pro_descripcion,
							   dnd_precio_unitario 
						FROM v_del_detalle_nota_debito_sri
						WHERE dnd_nota_debito=".$nd_numero."
						order by dnd_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_motivos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_motivos = false;
          $rs_motivos_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_motivos   === false){
				echo "Error al acceder al detalle de la notaDebito";
			}else{
				$motivos = array();
				$i=0;
				while (!$rs_motivos->EOF){
					$motivo = new motivo();
					$motivo->razon = $rs_motivos->fields[0];
					$motivo->valor = $rs_motivos->fields[1];
					$motivos[$i] = $motivo;
					$rs_motivos->MoveNext();
					$i+=1;
				}
				$rs_motivos->Close();
				$notaDebito->motivos = $motivos;
			}

			$camposAdicionales = array();
			$i=0;
			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_notadebito[0][24]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_notadebito[0][24];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_notadebito[0][23]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $rs_notadebito[0][23];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if($rs_notadebito[0][22]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Direccion";
				$campoAdicional->valor = $rs_notadebito[0][22];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			$notaDebito->infoAdicional = $camposAdicionales;

			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $notaDebito;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($notaDebito);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}	
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $notaDebito;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_notadebito[0][1];
						$comprobantePendiente->codDoc = $rs_notadebito[0][2];
						$comprobantePendiente->establecimiento = $rs_notadebito[0][5];
						$comprobantePendiente->fechaEmision = $rs_notadebito[0][3];
						$comprobantePendiente->ptoEmision = $rs_notadebito[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_notadebito[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE del_nota_debito 
								SET nd_error_sri='" . $res->return->mensajes->mensaje . "',
									nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' 
								WHERE nd_numero=" . $nd_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_nota_debito 
                        SET nd_estado_sri='" . $res->return->estadoComprobante . "',
                            nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' 
                        WHERE nd_numero=" . $nd_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($notaDebito,$rs_notadebito[0][23])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,	
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_autorizacion='".$res->return->numeroAutorizacion."',
									 nd_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 nd_error_sri='',
									 nd_correo_enviado='".$correo_enviado."'
								WHERE nd_numero=".$nd_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($notaDebito,$rs_notadebito[0][23])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='AUTORIZADO',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_autorizacion='".$res->return->claveAcceso."',
									 nd_correo_enviado='".$correo_enviado."'
								WHERE nd_numero=".$nd_numero ;
				}else{
					$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_error_sri='".$res->return->mensajes->mensaje."'
								WHERE nd_numero=".$nd_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_error_sri='".$res->return->mensajes->mensaje."',
									 nd_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE nd_numero=".$nd_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function obtener_factura ($var_autorizacion){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='01'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoFactura=$xml->infoFactura;
				$infoFactura=array();
				$infoFactura['fechaEmision']=				(String)$contenido_infoFactura->fechaEmision;
				$infoFactura['dirEstablecimiento']=			(String)$contenido_infoFactura->dirEstablecimiento;
				$infoFactura['obligadoContabilidad']=		(String)$contenido_infoFactura->obligadoContabilidad;
				$infoFactura['tipoIdentificacionComprador']=(String)$contenido_infoFactura->tipoIdentificacionComprador;
				$infoFactura['razonSocialComprador']=		(String)$contenido_infoFactura->razonSocialComprador;
				$infoFactura['identificacionComprador']=	(String)$contenido_infoFactura->identificacionComprador;
				$infoFactura['direccionComprador']=			(String)$contenido_infoFactura->direccionComprador;
				$infoFactura['totalSinImpuestos']=			(String)$contenido_infoFactura->totalSinImpuestos;
				$infoFactura['totalDescuento']=				(String)$contenido_infoFactura->totalDescuento;
				$impuestos = array();
				foreach ($contenido_infoFactura->totalConImpuestos->totalImpuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=            (String)$item->codigo;
					$impuesto['codigoPorcentaje']=  (String)$item->codigoPorcentaje;
					$impuesto['baseImponible']=     (String)$item->baseImponible;
					$impuesto['valor']=             (String)$item->valor;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$infoFactura['totalConImpuestos']=$impuestos;
				$infoFactura['propina']=		(String)$contenido_infoFactura->propina;
				$infoFactura['importeTotal']=	(String)$contenido_infoFactura->importeTotal;
				$infoFactura['moneda']=			(String)$contenido_infoFactura->moneda;
				$pagos = array();
				foreach ($contenido_infoFactura->pagos->pago as $item) {
					$pago=array();
					$pago['formaPago']=     (String)$item->formaPago;
					$pago['total']=  		(String)$item->total;
					$pago['plazo']=     	(String)$item->plazo;
					$pago['unidadTiempo']=  (String)$item->unidadTiempo;
					$pagos[]=$pago;
					unset($pago);
				}
				$infoFactura['pagos']=$pagos;
				$comprobante['infoFactura']=$infoFactura;
				$detalles=array();
				$contenido_detalles=$xml->detalles;
				foreach($contenido_detalles->detalle as $item){
					$detalle=array();
					$detalle['codigoPrincipal']=		(String)$item->codigoPrincipal;
					$detalle['codigoAuxiliar']=			(String)$item->codigoAuxiliar;
					$detalle['descripcion']=			(String)$item->descripcion;
					$detalle['cantidad']=				(String)$item->cantidad;
					$detalle['precioUnitario']=			(String)$item->precioUnitario;
					$detalle['precioSinSubsidio']=		(String)$item->precioSinSubsidio;
					$detalle['descuento']=				(String)$item->descuento;
					$detalle['precioTotalSinImpuesto']=	(String)$item->precioTotalSinImpuesto;
					$impuestos = array();
					foreach ($item->impuestos->impuesto as $item_impuesto) {
						$impuesto=array();
						$impuesto['codigo']=            (String)$item_impuesto->codigo;
						$impuesto['codigoPorcentaje']=  (String)$item_impuesto->codigoPorcentaje;
						$impuesto['tarifa']=            (String)$item_impuesto->tarifa;
						$impuesto['baseImponible']=     (String)$item_impuesto->baseImponible;
						$impuesto['valor']=             (String)$item_impuesto->valor;
						$impuestos[]=$impuesto;
						unset($impuesto);
					}

					$detalle['impuestos']=$impuestos;
					$detalles[]=$detalle;
					unset($detalle);
				}
				$comprobante['detalles']=$detalles;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}    
			}
		}	
		return $comprobante;
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function obtener_notaCredito($var_autorizacion){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='04'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoNotaCredito=$xml->infoNotaCredito;
				$infoNotaCredito=array();
				$infoNotaCredito['fechaEmision']=				(String)$contenido_infoNotaCredito->fechaEmision;
				$infoNotaCredito['dirEstablecimiento']=			(String)$contenido_infoNotaCredito->dirEstablecimiento;
				$infoNotaCredito['tipoIdentificacionComprador']=(String)$contenido_infoNotaCredito->tipoIdentificacionComprador;
				$infoNotaCredito['razonSocialComprador']=		(String)$contenido_infoNotaCredito->razonSocialComprador;
				$infoNotaCredito['identificacionComprador']=	(String)$contenido_infoNotaCredito->identificacionComprador;
				$infoNotaCredito['direccionComprador']=			(String)$contenido_infoNotaCredito->direccionComprador;
				$infoNotaCredito['obligadoContabilidad']=		(String)$contenido_infoNotaCredito->obligadoContabilidad;
				$infoNotaCredito['contribuyenteEspecial']=		(String)$contenido_infoNotaCredito->contribuyenteEspecial;
				$infoNotaCredito['rise']=               		(String)$contenido_infoNotaCredito->rise;
				$infoNotaCredito['codDocModificado']=           (String)$contenido_infoNotaCredito->codDocModificado;
				$infoNotaCredito['numDocModificado']=           (String)$contenido_infoNotaCredito->numDocModificado;
				$infoNotaCredito['fechaEmisionDocSustento']=    (String)$contenido_infoNotaCredito->fechaEmisionDocSustento;
				$infoNotaCredito['totalSinImpuestos']=			(String)$contenido_infoNotaCredito->totalSinImpuestos;
				$infoNotaCredito['valorModificacion']=			(String)$contenido_infoNotaCredito->valorModificacion;
				$infoNotaCredito['moneda']=			            (String)$contenido_infoNotaCredito->moneda;
				$impuestos = array();
				foreach ($contenido_infoNotaCredito->totalConImpuestos->totalImpuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=            (String)$item->codigo;
					$impuesto['codigoPorcentaje']=  (String)$item->codigoPorcentaje;
					$impuesto['baseImponible']=     (String)$item->baseImponible;
					$impuesto['valor']=             (String)$item->valor;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$infoNotaCredito['totalConImpuestos']=$impuestos;
				$infoNotaCredito['motivo']=		(String)$contenido_infoNotaCredito->motivo;
				$comprobante['infoNotaCredito']=$infoNotaCredito;

				$detalles=array();
				$contenido_detalles=$xml->detalles;
				foreach($contenido_detalles->detalle as $item){
					$detalle=array();
					$detalle['codigoInterno']=	    	(String)$item->codigoInterno;
					$detalle['codigoAdicional']=		(String)$item->codigoAdicional;
					$detalle['descripcion']=			(String)$item->descripcion;
					$detalle['cantidad']=				(String)$item->cantidad;
					$detalle['precioUnitario']=			(String)$item->precioUnitario;
					$detalle['descuento']=				(String)$item->descuento;
					$detalle['precioTotalSinImpuesto']=	(String)$item->precioTotalSinImpuesto;
					$impuestos = array();
					foreach ($item->impuestos->impuesto as $item_impuesto) {
						$impuesto=array();
						$impuesto['codigo']=            (String)$item_impuesto->codigo;
						$impuesto['codigoPorcentaje']=  (String)$item_impuesto->codigoPorcentaje;
						$impuesto['tarifa']=            (String)$item_impuesto->tarifa;
						$impuesto['baseImponible']=     (String)$item_impuesto->baseImponible;
						$impuesto['valor']=             (String)$item_impuesto->valor;
						$impuestos[]=$impuesto;
						unset($impuesto);
					}
					$detalle['impuestos']=$impuestos;
					$detalles[]=$detalle;
					unset($detalle);
				}
				$comprobante['detalles']=$detalles;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}
			}       
		}	
		return $comprobante;
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function obtener_notaDebito($var_autorizacion){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='05'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoNotaDebito=$xml->infoNotaDebito;
				$infoNotaDebito=array();
				$infoNotaDebito['fechaEmision']=			    (String)$contenido_infoNotaDebito->fechaEmision;
				$infoNotaDebito['dirEstablecimiento']=			(String)$contenido_infoNotaDebito->dirEstablecimiento;
				$infoNotaDebito['tipoIdentificacionComprador']= (String)$contenido_infoNotaDebito->tipoIdentificacionComprador;
				$infoNotaDebito['razonSocialComprador']=		(String)$contenido_infoNotaDebito->razonSocialComprador;
				$infoNotaDebito['identificacionComprador']=	    (String)$contenido_infoNotaDebito->identificacionComprador;
				$infoNotaDebito['direccionComprador']=			(String)$contenido_infoNotaDebito->direccionComprador;
				$infoNotaDebito['contribuyenteEspecial']=		(String)$contenido_infoNotaDebito->contribuyenteEspecial;
				$infoNotaDebito['obligadoContabilidad']=		(String)$contenido_infoNotaDebito->obligadoContabilidad;
				$infoNotaDebito['codDocModificado']=            (String)$contenido_infoNotaDebito->codDocModificado;
				$infoNotaDebito['numDocModificado']=            (String)$contenido_infoNotaDebito->numDocModificado;
				$infoNotaDebito['fechaEmisionDocSustento']=     (String)$contenido_infoNotaDebito->fechaEmisionDocSustento;
				$infoNotaDebito['totalSinImpuestos']=			(String)$contenido_infoNotaDebito->totalSinImpuestos;

				$impuestos = array();
				foreach ($contenido_infoNotaDebito->impuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=            (String)$item->codigo;
					$impuesto['codigoPorcentaje']=  (String)$item->codigoPorcentaje;
					$impuesto['tarifa']=  (String)$item->tarifa;
					$impuesto['baseImponible']=     (String)$item->baseImponible;
					$impuesto['valor']=             (String)$item->valor;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$infoNotaDebito['impuestos']=$impuestos;
				$infoNotaDebito['valorTotal']=	(String)$contenido_infoNotaDebito->valorTotal;

				$pagos = array();
				foreach ($contenido_infoNotaDebito->pagos->pago as $item) {
					$pago=array();
					$pago['formaPago']=     (String)$item->formaPago;
					$pago['total']=  		(String)$item->total;
					$pago['plazo']=     	(String)$item->plazo;
					$pago['unidadTiempo']=  (String)$item->unidadTiempo;
					$pagos[]=$pago;
					unset($pago);
				}
				$infoNotaDebito['pagos']=$pagos;
				$comprobante['infoNotaDebito']=$infoNotaDebito;

				$motivos=array();
				$contenido_motivos=$xml->motivos;
				foreach($contenido_motivos->motivo as $item){
					$motivo=array();
					$motivo['razon']= (String)$item->razon;
					$motivo['valor']=	(String)$item->valor;
					$motivos[]=$motivo;
					unset($motivo);
				}
				$comprobante['motivos']=$motivos;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}    
			}
		}	
		return $comprobante;
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
function obtener_retencion($var_autorizacion){
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='07'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoCompRetencion=$xml->infoCompRetencion;
				$infoCompRetencion=array();
				$infoCompRetencion['fechaEmision']=				(String)$contenido_infoCompRetencion->fechaEmision;
				$infoCompRetencion['dirEstablecimiento']=			(String)$contenido_infoCompRetencion->dirEstablecimiento;
				$infoCompRetencion['obligadoContabilidad']=		(String)$contenido_infoCompRetencion->obligadoContabilidad;
				$infoCompRetencion['tipoIdentificacionSujetoRetenido']=(String)$contenido_infoCompRetencion->tipoIdentificacionSujetoRetenido;
				$infoCompRetencion['razonSocialSujetoRetenido']=		(String)$contenido_infoCompRetencion->razonSocialSujetoRetenido;
				$infoCompRetencion['identificacionSujetoRetenido']=	(String)$contenido_infoCompRetencion->identificacionSujetoRetenido;
				$infoCompRetencion['periodoFiscal']=			(String)$contenido_infoCompRetencion->periodoFiscal;
				$comprobante['infoCompRetencion']=$infoCompRetencion;

				$impuestos = array();
				foreach ($xml->impuestos->impuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=                    (String)$item->codigo;
					$impuesto['codigoRetencion']=           (String)$item->codigoRetencion;
					$impuesto['baseImponible']=             (String)$item->baseImponible;
					$impuesto['porcentajeRetener']=         (String)$item->porcentajeRetener;
					$impuesto['valorRetenido']=             (String)$item->valorRetenido;
					$impuesto['codDocSustento']=            (String)$item->codDocSustento;
					$impuesto['numDocSustento']=            (String)$item->numDocSustento;
					$impuesto['fechaEmisionDocSustento']=   (String)$item->fechaEmisionDocSustento;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$comprobante['impuestos']=$impuestos;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}    
			}
		}	
		return $comprobante;
$_SESSION['scriptcase']['grid_guias_na']['contr_erro'] = 'off';
}
}

?>
