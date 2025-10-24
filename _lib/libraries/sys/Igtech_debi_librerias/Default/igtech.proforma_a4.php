<?php
class MYPDF extends TCPDF {
	var $grid = true;
	var $y=75;
	VAR $dibuja_comentario=true;
	//variables para la cabecera
	var $w_nombre_empresa='DEBIEC';
    var $w_ruc_empresa='1001862935001';
    var $w_logo_empresa='tributarya23.jpg';
    var $w_nro_proforma='000000001';
	var $w_direccion_inst='Alfredo Obando Luna';
	var $w_ciudad_inst='IBARRA';
    //variables del solicitante
	
	var $w_cliente='IVAN GONZALEZ';
	var $w_identificacion='1712873890';
	var $w_direccion='AV. HERNAN GONZALEZ DE SAA 24145';
	var $w_telefono='0979375063';
	var $w_fecha='08 de junio de 2020';
	var $w_vendedor='BORYS GUERRA';
	var $w_comentario='';
	var $w_productos_proforma;
	function Header(){
        //dibuja la cuadricula de ayuda para las posiciones
        if($this->grid)
            $this->DrawGrid();
        
        // carga el logotipo de la empresa
		
		$ruta_logo='../_lib/file/img'.$this->w_ruc_empresa.'/'.$this->w_logo_empresa;
		if (file_exists($ruta_logo)) {
			$this->Image($ruta_logo,10,10,60,20);
		}else{
			$ruta_logo='../_lib/file/img/'.$this->w_ruc_empresa.'/'.$this->w_logo_empresa;
			if (file_exists($ruta_logo)) {
				$this->Image($ruta_logo,10,10,60,20);
			}	
		}
		$y=10;
		$ancho=5;	
		$this->SetXY(75,$y);
		$this->SetFont('helvetica', 'B', 12);
		$this->SetTextColor(0,0,0);
		$num_lineas1=intval(strlen($this->w_nombre_empresa)/30)+1;
		$this->MultiCell(130, $ancho*$num_lineas1, $this->w_nombre_empresa, 0, 'C', 0, 0, '', '', true);
				
		$y+=$ancho*$num_lineas1;
		$this->SetFont('helvetica', 'B', 12);
		$this->SetXY(75,$y);
		$this->MultiCell(130, $ancho, $this->w_ruc_empresa, 0, 'C', 0, 0, '', '', true);
		
		$y+=$ancho;
		$this->SetXY(75,$y);
	    $this->MultiCell(130, $ancho, 'PROFORMA', 0, 'C', 0, 0, '', '', true);
        
        
		$this->SetXY(165,$y);
		$this->SetTextColor(255,0,0);
	    $this->MultiCell(40, $ancho, 'Nro. '.$this->w_nro_proforma, 0, 'R', 0, 0, '', '', true);
	}
	
	function Footer() {
		$this->line(5,280,205,280);
		$this->SetY(-18);
		$this->SetFont(PDF_FONT_NAME_MAIN, 'I', 8);
		$this->Cell(0, 8,utf8_decode($this->w_direccion_inst), 0, false, 'C');
		$this->SetY(-13);
		$this->SetFont(PDF_FONT_NAME_MAIN, 'I', 8);
		$this->Cell(0, 8, 'ECUADOR', 0, false, 'C');
		$this->Cell(0, 10, 'Pagina '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
	
	function cabecera_Proforma(){
        $ancho_borde=30;
		
		
		$this->SetTextColor(0,0,0);
		
		$posy=40;
		$posx=35;
		$this->SetXY(7,$posy);
		$this->SetFont('helvetica', 'B', 10);
	    $this->MultiCell(0, 8, 'Cliente:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY($posx,$posy);
		$this->SetFont('helvetica', '', 10);
	    $this->MultiCell(100,8, $this->w_cliente, 0, 'L', 0, 0, '', '', true);
		$num_lineas1=intval(strlen($this->w_cliente)/45);
		$ancho_borde+=$num_lineas1*5;
		
		$posy+=($num_lineas1+1)*5;
		$this->SetXY(7,$posy);
		$this->SetFont('helvetica', 'B', 10);
	    $this->MultiCell(0, 8, 'Identificacion:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY($posx,$posy);
		$this->SetFont('helvetica', '', 10);
	    $this->MultiCell(100,8, $this->w_identificacion, 0, 'L', 0, 0, '', '', true);

		$posy+=5;
		$this->SetXY(7,$posy);
		$this->SetFont('helvetica', 'B', 10);
		$this->MultiCell(0, 8, 'Dirección:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY($posx,$posy);
		$this->SetFont('helvetica', '', 10);
		$this->MultiCell(100,8, $this->w_direccion, 0, 'L', 0, 0, '', '', true);
		$num_lineas1=intval(strlen($this->w_direccion)/45);
		$ancho_borde+=$num_lineas1*5;
				
		$posy+=($num_lineas1+1)*5;
		$this->SetXY(7,$posy);
		$this->SetFont('helvetica', 'B', 10);
	    $this->MultiCell(0, 8, 'Telefono:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY($posx,$posy);
		$this->SetFont('helvetica', '', 10);
	    $this->MultiCell(100,8, $this->w_telefono, 0, 'L', 0, 0, '', '', true);

		$posy+=5;
		$this->SetXY(7,$posy);
		$this->SetFont('helvetica', 'B', 10);
		$this->MultiCell(0, 8, 'Fecha:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY($posx,$posy);
		$this->SetFont('helvetica', '', 10);
		$this->MultiCell(160,8, $this->w_fecha, 0, 'L', 0, 0, '', '', true);

		$posy+=5;
		$this->SetXY(7,$posy);
		$this->SetFont('helvetica', 'B', 10);
		$this->MultiCell(0, 8, 'Vendedor:',0, 'L', 0, 0, '', '', true);
		$this->SetXY($posx,$posy);
		$this->SetFont('helvetica', '', 10);
		$this->MultiCell(160,8, $this->w_vendedor,0, 'L', 0, 0, '', '', true);
		$this->DrawBorder(5,40,135,$ancho_borde,2,2);
		
		if ($this->dibuja_comentario){
			$this->DrawBorder(145,40,60,$ancho_borde,2,2);
			$this->SetFont('helvetica', 'B', 10);
			$this->SetFillColor(255, 255, 127);
        	$this->SetXY(145,40);//codigo
			$this->MultiCell(60, 5,'Comentario', 0, 'L', 1, 0, '', '', true, 0, false, true, 5, 'M');
			$this->SetFillColor(255, 255, 255);
			$this->SetXY(145,45);//codigo
			$this->SetFont('helvetica', '', 8);
			$this->MultiCell(60, $ancho_borde-5,$this->w_comentario, 0, 'L', 1, 0, '', '', true, 0, false, true, 25, 'M');
			
		}
		$this->setY(45+$ancho_borde);

	}

	function detalle_Proforma($w_suma_subtotal,$w_suma_iva,$w_suma_total){
		$x=5;
		$this->y=$this->getY();
		$ancho=5;
		if ($w_suma_total>0){
			// $this->SetFont('helvetica', 'B', 10);
			// $this->SetFillColor(255, 255, 127);
        	// $this->SetXY(5,$this->y);//codigo
			// $this->MultiCell(140, $ancho,'Pasan', 1, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
			// $this->SetXY(145,$this->y);//codigo
			// $this->MultiCell(20, $ancho, number_format($w_suma_subtotal,2), 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
			// $this->SetXY(165,$this->y);//codigo
			// $this->MultiCell(20, $ancho, number_format($w_suma_iva,2), 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
			// $this->SetXY(185,$this->y);//codigo
			// $this->MultiCell(20, $ancho, number_format($w_suma_total,2), 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');	
			// $this->y+=$ancho;
		}else{
			$this->dibuja_comentario=false;
		}
		
		$this->SetFont('helvetica', 'B', 10);
		$this->setCellMargins(0, 0, 0, 0);
		$this->SetFillColor(255, 255, 127);
        $this->SetXY($x,$this->y);//codigo
		$this->MultiCell(20, $ancho, 'Codigo', 1, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=20;
		$this->SetXY($x,$this->y);//producto
        $this->MultiCell(65, $ancho, 'Producto', 1, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=65;
		$this->SetXY($x,$this->y);//cantidad
        $this->MultiCell(15, $ancho, 'Cant.', 1, 'C', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=15;
		$this->SetXY($x,$this->y);//precio unitario
        $this->MultiCell(20, $ancho, 'V/U', 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=20;
		$this->SetXY($x,$this->y);//descuento
        $this->MultiCell(20, $ancho, 'Desc.', 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=20;
		$this->SetXY($x,$this->y);//subtotal
        $this->MultiCell(20, $ancho, 'Subtotal', 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=20;
		$this->SetXY($x,$this->y);//IVA
        $this->MultiCell(20, $ancho, 'IVA', 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=20;
		$this->SetXY($x,$this->y);//TOTAL
        $this->MultiCell(20, $ancho, 'Total', 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->y+=$ancho;

		foreach ($this->w_productos_proforma as $item) {
			$x=5;
			$num_lineas1=intval(strlen($item[0])/11)+1;
			$num_lineas2=intval(strlen($item[1])/37)+1;
			if($num_lineas1>=$num_lineas2){
				$num_lineas=$num_lineas1;
			}else{
				$num_lineas=$num_lineas2;
			}
			$this->SetFont('helvetica', '', 8);
			$this->setCellMargins(0, 0, 0, 0);
			$this->SetFillColor(255, 255, 255);
			$this->SetXY($x,$this->y);//codigo
			$this->MultiCell(20, $ancho*$num_lineas, $item[0], 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=20;
			$this->SetXY($x,$this->y);//producto
			$this->MultiCell(65, $ancho*$num_lineas, $item[1], 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=65;
			$this->SetXY($x,$this->y);//cantidad
			$this->MultiCell(15, $ancho*$num_lineas, number_format($item[2],5), 0, 'C', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=15;
			$this->SetXY($x,$this->y);//precio unitario
			$this->MultiCell(20, $ancho*$num_lineas, number_format($item[3],2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=20;
			$this->SetXY($x,$this->y);//descuento
			$this->MultiCell(20, $ancho*$num_lineas, number_format($item[4],2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=20;
			$this->SetXY($x,$this->y);//subtotal
			$this->MultiCell(20, $ancho*$num_lineas, number_format($item[5],2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=20;
			$this->SetXY($x,$this->y);//IVA
			$this->MultiCell(20, $ancho*$num_lineas, number_format($item[6],2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=20;
			$this->SetXY($x,$this->y);//TOTAL
			$this->MultiCell(20, $ancho*$num_lineas, number_format($item[7],2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$this->line(5,$this->y,205,$this->y);
			
			$this->y+=$num_lineas*$ancho;
			$w_suma_subtotal+=$item[5];
			$w_suma_iva+=$item[8];
			$w_suma_total+=$item[7];	
		}	
		 
		$this->SetFont('helvetica', 'B', 10);
		$this->SetFillColor(255, 255, 255);
        $this->SetXY(5,$this->y);//codigo
		$this->MultiCell(140, $ancho,'Totales', 1, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY(145,$this->y);//codigo
		$this->MultiCell(20, $ancho, number_format($w_suma_subtotal,2), 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY(165,$this->y);//codigo
		$this->MultiCell(20, $ancho, number_format($w_suma_iva,2), 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY(185,$this->y);//codigo
		$this->MultiCell(20, $ancho, number_format($w_suma_total,2), 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->y+=$ancho;
	}
	function DrawGrid(){
        if($this->grid===true){
            $spacing = 5;
        } else {
            $spacing = $this->grid;
        }
        $this->SetDrawColor(204,255,255);
        $this->SetLineWidth(0.35);
        for($i=0;$i<$this->w;$i+=$spacing){
            $this->Line($i,0,$i,$this->h);
        }
        for($i=0;$i<$this->h;$i+=$spacing){
            $this->Line(0,$i,$this->w,$i);
        }
        $x = $this->GetX();
        $y = $this->GetY();
        $this->SetTextColor(204,204,204);
        for($i=20;$i<$this->h;$i+=20){
            $this->SetXY(1,$i-3);
            $this->Write(4,$i);
			$this->SetLineWidth(0.5);
			$this->Line(0,$i,$this->w,$i);
        }
				
        for($i=20;$i<(($this->w)-($this->rMargin)-10);$i+=20){
            $this->SetXY($i-1,1);
            $this->Write(4,$i);
			$this->SetLineWidth(0.5);
			$this->Line($i,0,$i,$this->h);
        }
		
		$this->SetDrawColor(0,0,0);
        $this->SetXY($x,$y);
    }

	function DrawBorder($VetorX,$VetorY,$Largura,$Altura,$Raio,$Resolucao){

			$this->SetDrawColor(0,0,0);
			$this->SetLineWidth(0.2);

			$x = $VetorX;
			$y = $VetorY;
			$w = $Largura;
			$h = $Altura;	
			$raio = $Raio;
			$r = $Resolucao;

			$cantoID = 0;
			$cantoIE = 90;
			$cantoSE = 180;
			$cantoSD = 270;

			$x+=$raio;
			$y+=$raio;

			# Linha superior
			$this->Line($x,$y-$raio,$x+$w-($raio*2),$y-$raio);
			# Linha inferior
			$this->Line($x,$y-$raio+$h,$x+$w-($raio*2),$y-$raio+$h);
			# Linha esquerda
			$this->Line($x-$raio,$y,$x-$raio,$y-($raio*2)+$h);
			# Linha direita
			$this->Line($x-$raio+$w,$y,$x-$raio+$w,$y-($raio*2)+$h);

			# Canto Superior Esquerda
			for($cantoSE=180; $cantoSE<270; $cantoSE+=$r)
			{
			   $Xse =((cos($cantoSE*pi()/180))*$raio)+$x;
			   $Yse =((sin($cantoSE*pi()/180))*$raio)+$y;
			   $X1se =((cos(($cantoSE+$r)*pi()/180))*$raio)+$x;
			   $Y1se =((sin(($cantoSE+$r)*pi()/180))*$raio)+$y;
			   $this->Line($Xse,$Yse,$X1se,$Y1se);
			}

			#  Canto Superior Direito
			$x+=$w-$raio-$raio;
			for($cantoSD=270; $cantoSD<360; $cantoSD+=$r)
			{
			   $Xsd =((cos($cantoSD*pi()/180))*$raio)+$x;
			   $Ysd =((sin($cantoSD*pi()/180))*$raio)+$y;
			   $X1sd =((cos(($cantoSD+$r)*pi()/180))*$raio)+$x;
			   $Y1sd =((sin(($cantoSD+$r)*pi()/180))*$raio)+$y;
			   $this->Line($Xsd,$Ysd,$X1sd,$Y1sd);
			}

			# Canto Inferior Direito
			$y+=$h-$raio-$raio;
			for($cantoID=0; $cantoID<90; $cantoID+=$r)
			{
			   $Xid =((cos($cantoID*pi()/180))*$raio)+$x;
			   $Yid =((sin($cantoID*pi()/180))*$raio)+$y;
			   $X1id =((cos(($cantoID+$r)*pi()/180))*$raio)+$x;
			   $Y1id =((sin(($cantoID+$r)*pi()/180))*$raio)+$y;
			   $this->Line($Xid,$Yid,$X1id,$Y1id);
			}

			# Canto Inferior Esquerdo
			$x-=$w-$raio-$raio;
			for($cantoIE=90; $cantoIE<180; $cantoIE+=$r)
			{
			   $Xie =((cos($cantoIE*pi()/180))*$raio)+$x;
			   $Yie =((sin($cantoIE*pi()/180))*$raio)+$y;
			   $X1ie =((cos(($cantoIE+$r)*pi()/180))*$raio)+$x;
			   $Y1ie =((sin(($cantoIE+$r)*pi()/180))*$raio)+$y;
			   $this->Line($Xie,$Yie,$X1ie,$Y1ie);
			}

	}
	
}	
?>