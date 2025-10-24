<?php
class MYPDF extends TCPDF {
    var $grid = false;
	//variables para la institucion
	var $w_institucion='JUNTA ADMINISTRADORA DE AGUA POTABLE Y ALCANTARILLADO LA ESPERANZA';
	var $w_ruc_empresa='1768182390001';
	var $w_logo='logo_size3.jpg';
	
	//variables del solicitante
	var $w_tipo_contrato='EGRESO DE MATERIALES';
	var $w_nro_egreso='0000001';
    var $w_fecha_impresion='20 de Junio de 2023';
	var $w_fecha_egreso='01 de Enero de 2023';

	var $w_solicitante='IVAN GONZALEZ';
	var $w_cedula_solicitante='1712873890';
	var $w_direccion='AV. HERNAN GONZALEZ DE SAA 24145';
    var $w_contrato = '123';
    var $w_nro_medidor='123456789';
	var $w_ruta='CENTRO';

    var $w_productos = array ();

    function Header(){
	
        if($this->grid)
            $this->DrawGrid();
		$vetor_x = 		array(5, 	5);
        $vetor_y = 		array(5, 	27);
        $largura = 		array(200, 	200);
        $altura = 		array(20, 	117);
		$raio = 		array(2, 	2);
		$resolucao = 	array(2, 	2);
		
        for ($i = 0; $i != count($vetor_x); $i++){
			
			$this->DrawBorder($vetor_x[$i],$vetor_y[$i],$largura[$i],$altura[$i],$raio[$i],$resolucao[$i]);
		}	
		// Logo do Relatório
		$this->Image('../_lib/file/img/'.$this->w_ruc_empresa.'/'.$this->w_logo,10,10,40,10);
		
		$this->SetXY(60,10);
		$this->SetFont('times', 'B', 12);
		$this->SetTextColor(0,0,0);
		$this->MultiCell(0, 10, $this->w_institucion, 0, 'C', 0, 0, '', '', true);
		
		
	}	
	function cuerpoContrato(){	
		$this->SetFont('times', 'B', 12);
		$this->SetXY(25,30);
	    $this->MultiCell(140, 8, $this->w_tipo_contrato, 0, 'C', 0, 0, '', '', true);
		$this->SetFont('times', 'B', 12);
		$this->SetXY(170,30);
		$this->SetTextColor(255,0,0);
	    $this->MultiCell(50, 8, 'Nro. '.$this->w_nro_egreso, 0, 'L', 0, 0, '', '', true);
		$this->SetFont('times', 'B', 10);
		$this->SetTextColor(0,0,0);
        $this->SetXY(105,35);
	    $this->MultiCell(90, 8, 'FECHA DE IMPRESION: '. $this->w_fecha_impresion, 0, 'R', 0, 0, '', '', true);
		
		$this->SetFont('times', '', 8);
		$this->SetTextColor(0,0,0);
		$x=10;
		$y=40;
		$ancho=3;
		$this->SetFont('times', '', 8);
		$this->SetXY($x,$y);
		$this->MultiCell(90, 8, 'CLIENTE: '.$this->w_solicitante, 0, 'L', 0, 0, '', '', true);
		$this->SetXY($x+140,$y);
		$this->MultiCell(50, 8, 'CEDULA: '.$this->w_cedula_solicitante, 0, 'L', 0, 0, '', '', true);
		$y+=$ancho;
		$this->SetXY($x,$y);
       	$this->MultiCell(145, 8, 'DIRECCION: '.$this->w_direccion, 0, 'L', 0, 0, '', '', true);
		$y+=$ancho;
		$this->SetXY($x,$y);
		$this->MultiCell(50, 8, 'NRO. CONTRATO: '.$this->w_contrato, 0, 'L', 0, 0, '', '', true);
		//$this->SetXY($x+70,$y);
		//$this->MultiCell(50, 8, 'NRO. MEDIDOR: '.$this->w_nro_medidor, 0, 'L', 0, 0, '', '', true);
		$this->SetXY($x+140,$y);
		$this->MultiCell(50, 8, 'RUTA: '.$this->w_ruta, 0, 'L', 0, 0, '', '', true);	
		$y+=$ancho;
		$this->SetXY($x,$y);
	    $this->MultiCell(140, 8, "FECHA DE EGRESO: ".$this->w_fecha_egreso, 0, 'L', 0, 0, '', '', true);
		$y+=$ancho;
		$this->Detalle_Egreso($x,$y,$ancho);
    }
	
	function Footer() {
    }
	
	function Detalle_Egreso($x,$y,$ancho){
			$w_subtotal=0;
			$w_iva=0;
			$w_total=0;
			$this->SetFont('times', 'B', 8);
			$this->SetXY($x,$y);
	    	$this->MultiCell(15, 7, "COD.", 0, 'L', 0, 2, '' ,'', true);
			$this->SetXY($x+15,$y);
	    	$this->MultiCell(50, 7, "PRODUCTO", 0, 'L', 0, 2, '' ,'', true);
			$this->SetXY($x+65,$y);
	    	$this->MultiCell(20, 7, "UNIDAD", 0, 'L', 0, 2, '' ,'', true);
			$this->SetXY($x+85,$y);
	    	$this->MultiCell(20, 7, "CANT.", 0, 'R', 0, 2, '' ,'', true);
			$this->SetXY($x+105,$y);
	    	$this->MultiCell(25, 7, "PRECIO", 0, 'R', 0, 2, '' ,'', true);
			$this->SetXY($x+130,$y);
			$this->MultiCell(25, 7, "SUBTOTAL", 0, 'R', 0, 2, '' ,'', true);
			$this->SetXY($x+155,$y);
			$this->MultiCell(15, 7, "IVA", 0, 'R', 0, 2, '' ,'', true);
			$this->SetXY($x+170,$y);
	    	$this->MultiCell(20, 7, "TOTAL", 0, 'R', 0, 2, '' ,'', true);
			$y+=$ancho;
		foreach ($this->w_productos as $item) {
			$this->SetFont('times', '', 8);
			$this->SetXY($x,$y);
	    	$this->MultiCell(15, 7, $item['codigo'], 0, 'L', 0, 2, '' ,'', true);
			$this->SetXY($x+15,$y);
	    	$this->MultiCell(50, 7, substr($item['producto'],0,30), 0, 'L', 0, 2, '' ,'', true);
			$this->SetXY($x+65,$y);
	    	$this->MultiCell(20, 7, $item['unidad'], 0, 'C', 0, 2, '' ,'', true);
			$this->SetXY($x+85,$y);
	    	$this->MultiCell(20, 7, $item['cantidad'], 0, 'R', 0, 2, '' ,'', true);
			$this->SetXY($x+105,$y);
	    	$this->MultiCell(25, 7, number_format($item['precio'],2), 0, 'R', 0, 2, '' ,'', true);
			$this->SetXY($x+130,$y);
			$this->MultiCell(25, 7, number_format($item['subtotal'],2), 0, 'R', 0, 2, '' ,'', true);
			$this->SetXY($x+155,$y);
			$this->MultiCell(15, 7, number_format($item['iva'],2), 0, 'R', 0, 2, '' ,'', true);
			$this->SetXY($x+170,$y);
	    	$this->MultiCell(20, 7, number_format($item['total'],2), 0, 'R', 0, 2, '' ,'', true);
			$y+=$ancho;
			$w_subtotal+=$item['subtotal'];
			$w_iva+=$item['iva'];
			$w_total+=$item['total'];
		}	
		$this->SetFont('times', 'B', 8);
		$this->SetXY($x+105,$y);
		$this->MultiCell(25, 7, 'TOTALES', 0, 'R', 0, 2, '' ,'', true);
		$this->SetXY($x+130,$y);
		$this->MultiCell(25, 7, number_format($w_subtotal,2), 0, 'R', 0, 2, '' ,'', true);
		$this->SetXY($x+155,$y);
		$this->MultiCell(15, 7, number_format($w_iva,2), 0, 'R', 0, 2, '' ,'', true);
		$this->SetXY($x+170,$y);
		$this->MultiCell(20, 7, number_format($w_total,2), 0, 'R', 0, 2, '' ,'', true);
		$y+=15;

		$this->SetLineWidth(0.5);
		$this->Line(25,$y,95,$y);
		$this->Line(115,$y,185,$y);
		$this->SetXY(25,$y);
	    $this->MultiCell(70, 8, "ENTREGUE CONFORME", 0, 'C', 0, 0, '', '', true);
		$this->SetXY(115,$y);
		$this->MultiCell(70, 8, "RECIBI CONFORME", 0, 'C', 0, 0, '', '', true, 1, false, true, 8 );
		$y+=$ancho;
		$this->SetXY(25,$y);
	    $this->MultiCell(70, 8, "OPERADOR", 0, 'C', 0, 0, '', '', true);
		$this->SetXY(115,$y);
	    $this->MultiCell(70, 8, $this->w_solicitante, 0, 'C', 0, 0, '', '', true);

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