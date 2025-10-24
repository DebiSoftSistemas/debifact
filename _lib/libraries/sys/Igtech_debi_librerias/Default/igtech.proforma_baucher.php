<?php
class MYPDF extends TCPDF {
	var $grid = false;
	var $dibuja_logo=false;
	var $y=75;
	VAR $dibuja_comentario=true;
	//variables para la cabecera
	var $w_nombre_empresa='DEBIEC';
    var $w_ruc_empresa='1001862935001';
    var $w_logo_empresa='tributarya23.jpg';
    var $w_nro_proforma='000000001';
	var $w_direccion_inst='Alfredo Obando Luna';
	var $w_ciudad_inst='IBARRA';
	var $w_pais_inst='ECUADOR';
    //variables del solicitante
	var $w_cliente='';
	var $w_identificacion='';
	var $w_direccion='';
	var $w_telefono='';
	var $w_fecha='';
	var $w_vendedor='';
	var $w_comentario='';
	var $w_productos_proforma;
	function Header(){
        //dibuja la cuadricula de ayuda para las posiciones
        if($this->grid)
            $this->DrawGrid();
        
        // carga el logotipo de la empresa
		if($this->dibuja_logo){

			$this->Image('../_lib/file/img'.$this->w_ruc_empresa.'/'.$this->w_logo_empresa,17,5,40,15);
			
			$this->SetXY(0,21);
			$this->SetFont('helvetica', 'B', 8);
			$this->SetTextColor(0,0,0);
			$this->MultiCell(74, 3, $this->w_nombre_empresa, 0, 'C', 0, 0, '', '', true);
			$this->SetXY(0,24);
			$this->MultiCell(74, 3, $this->w_ruc_empresa, 0, 'C', 0, 0, '', '', true);
		
			$this->SetFont('helvetica', 'B', 7);
			$this->SetXY(0,27);
			$this->MultiCell(74, 3, 'PROFORMA Nro. '.$this->w_nro_proforma, 0, 'C', 0, 0, '', '', true);
		}
        
    }
	
	function Footer() {
	}
	
	function cabecera_Proforma(){
        $this->DrawBorder(4,30,65,30,2,2);
		$this->SetFont('helvetica', 'B', 7);
		$this->SetTextColor(0,0,0);
		$y=31;
		$this->SetXY(5,$y);
		$this->MultiCell(0, 4, 'Fecha: '.$this->w_fecha, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$y+=4);
	    $this->MultiCell(0, 4, 'Cliente:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$y+=4);
	    $this->MultiCell(0, 4, 'Identificacion:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$y+=4);
		$this->MultiCell(0, 4, 'Dirección:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$y+=4);
	    $this->MultiCell(0, 4, 'Telefono:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$y+=4);
	    $this->MultiCell(0, 4, 'Email:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$y+=4);
	    $this->MultiCell(0, 4, 'Obteservación: '.$this->w_comentario, 0, 'L', 0, 0, '', '', true);
		
		
	}

	function detalle_Proforma($w_suma_subtotal,$w_suma_iva,$w_suma_total){
		$x=4;
		$this->y=63;
		$ancho=4;
		$this->SetFont('helvetica', 'B', 7);
		$this->setCellMargins(0, 0, 0, 0);
		$this->SetFillColor(255, 255, 255);
        $this->SetXY($x,$this->y);//cantidad
        $this->MultiCell(10, $ancho, 'Cant.', 1, 'C', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=10;
		
		$this->SetXY($x,$this->y);//producto
        $this->MultiCell(40, $ancho, 'Producto', 1, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=40;
				
		$this->SetXY($x,$this->y);//TOTAL
        $this->MultiCell(15, $ancho, 'Total', 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->y+=$ancho;

		foreach ($this->w_productos_proforma as $item) {
			$x=4;
			$num_lineas=intval(strlen($item[1])/50)+1;
			$this->SetFont('helvetica', '', 7);
			$this->setCellMargins(0, 0, 0, 0);
			$this->SetFillColor(255, 255, 255);
			$this->SetXY($x,$this->y);//cantidad
			$this->MultiCell(10, $ancho*$num_lineas, number_format($item[2],2), 0, 'C', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=10;
			$this->SetXY($x,$this->y);//producto
			$this->MultiCell(40, $ancho*$num_lineas, $item[1], 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=40;
						
			$this->SetXY($x,$this->y);//TOTAL
			$this->MultiCell(15, $ancho*$num_lineas, number_format($item[7],2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$this->line(4,$this->y,69,$this->y);
			
			$this->y+=$num_lineas*$ancho;
			$w_suma_subtotal+=$item[5];
			$w_suma_iva+=$item[6];
			$w_suma_total+=$item[7];	
		}	
		 
		$this->SetFont('helvetica', 'B', 7);
		$this->SetFillColor(255, 255, 255);
        $this->SetXY(4,$this->y);
		$this->MultiCell(55, $ancho,'Subtotal', 1, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY(54,$this->y);
		$this->MultiCell(15, $ancho, number_format($w_suma_subtotal,2), 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY(4,$this->y+=4);
		$this->MultiCell(55, $ancho,'IVA', 1, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY(54,$this->y);
		$this->MultiCell(15, $ancho, number_format($w_suma_iva,2), 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY(4,$this->y+=4);
		$this->MultiCell(55, $ancho,'Total', 1, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY(54,$this->y);
		$this->MultiCell(15, $ancho, number_format($w_suma_total,2), 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->y+=5;
		$this->DrawBorder(4,$this->y,65,10,2,2);
		$this->SetXY(4,$this->y);
		$this->SetFont('helvetica', 'B', 7);
		$this->MultiCell(65, 3,'Forma de Pago', 0, 'L', 0, 0, '', '', true);
		$this->y+=12;
		
		
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