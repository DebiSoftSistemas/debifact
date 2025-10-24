<?php
class MYPDF extends TCPDF {
    var $grid = false;
	//variables para la institucion
	var $w_institucion='';
	var $w_ruc_empresa='1768182390001';
	
	var $w_solicitante='IVAN GONZALEZ';
	var $w_cedula_solicitante='1712873890';
	var $w_direccion='AV. HERNAN GONZALEZ DE SAA 24145';
	
	var $w_tipo_servicio='';
	var $w_condicion_contrato='';
	var $w_ruta='';
	var $w_orden_ingreso=''; 	
	
	var $w_fecha='';
    function Header(){
	    if($this->grid)
            $this->DrawGrid();
	}	
	function cuerpoContrato($x,$y){	
		$this->SetFont('times', 'B', 12);
		$this->SetXY(25,30);
	    $this->MultiCell(190, 8, $this->w_institucion, 0, 'C', 0, 0, '', '', true);
		$this->SetXY(25,35);
		$this->MultiCell(190, 8, "ORDEN DE CORTE AL:". $this->w_fecha, 0, 'C', 0, 0, '', '', true);
		
		$this->SetFont('times', 'B', 10);
		$this->SetTextColor(0,0,0);
		
		$x=10;
		$this->SetFont('times', '', 10);
		$this->SetTextColor(0,0,0);
		$w_texto_contrato='Comparecen a la celebración del presente contrato especial para el suministro de agua potable domiciliaria, por una parte, la '.$this->w_institucion.', representada por el(la) Sr(a): '.$this->w_representante.' presidente de la Junta y por otra parte el(la) Sr(a): '.$this->w_solicitante.', domiciliado en '.$this->w_direccion.' de la parroquia '.$this->w_parroquia.'.';
		$this->SetXY($x,40);
		$this->MultiCell(190, 8, $w_texto_contrato."\n", 0, 'J', 0, 0, '', '', true);
		
		$w_texto_contrato='Las condiciones generales, beneficios y obligaciones son los que a continuación se enumeran, sin perjuicio de que se amplíen cuando la JUNTA DE AGUA expida la disposición correspondiente.';
		$this->SetXY($x,60);
		$this->MultiCell(190, 8, $w_texto_contrato."\n", 0, 'J', 0, 0, '', '', true);
		
		$this->SetFont('times', 'B', 12);
		$this->SetXY($x,75);
	    $this->MultiCell(190, 8, 'UBICACIÓN DEL MEDIDOR', 0, 'C', 0, 0, '', '', true);
		
		$this->SetFont('times', '', 10);
		$this->SetXY($x,80);
		$this->MultiCell(95, 8, 'TIPO DE CONTRATO: '.$this->w_condicion_contrato, 0, 'L', 0, 0, '', '', true);
		$this->SetXY($x+95,80);
		$this->MultiCell(95, 8, 'TIPO DE SERVICIO: '.$this->w_tipo_servicio, 0, 'L', 0, 0, '', '', true);
		$this->SetXY($x,85);
		$this->MultiCell(95, 8, 'RUTA: '.$this->w_ruta, 0, 'L', 0, 0, '', '', true);
		$this->SetXY($x+95,85);
		$this->MultiCell(95, 8, 'SECUENCIA: '.$this->w_orden_ingreso, 0, 'L', 0, 0, '', '', true);
		$this->SetXY($x+140,85);
		$this->MultiCell(95, 8, 'NRO. MEDIDOR: '.$this->w_nro_medidor, 0, 'L', 0, 0, '', '', true);
		
		$this->SetLineWidth(0.5);
		$this->Line(25,275,95,275);
		$this->Line(115,275,185,275);
		$this->SetXY(25,275);
	    $this->MultiCell(70, 8, $this->w_solicitante, 0, 'C', 0, 0, '', '', true);
		$this->SetXY(25,280);
	    $this->MultiCell(70, 8, $this->w_cedula_solicitante, 0, 'C', 0, 0, '', '', true);
		$this->SetXY(25,285);
	    $this->MultiCell(70, 8, 'Cliente', 0, 'C', 0, 0, '', '', true);
				
		$this->SetXY(115,275);
	    $this->MultiCell(70, 8, $this->w_representante, 0, 'C', 0, 0, '', '', true, 1, false, true, 8 );
		$this->SetXY(115,280);
	    $this->MultiCell(70, 8, $this->w_cedula_representante, 0, 'C', 0, 0, '', '', true);
		$this->SetXY(115,285);
	    $this->MultiCell(70, 8, 'Presidente de la Junta', 0, 'C', 0, 0, '', '', true);
    }
	
	function Footer() {
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