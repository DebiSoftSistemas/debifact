<?php
class MYPDF extends TCPDF {
    var $grid = false;
	//variables para la institucion
	var $w_institucion='';
	var $w_ruc_empresa='1768182390001';
	var $w_logo='logo_size3.jpg';
	var $w_direccion_inst='';
	var $w_ciudad_inst='OTAVALO';
	var $w_comunidad_inst='LA BUENA ESPERANZA';
	var $w_representante='';
	var $w_cedula_representante='';
	//variables del solicitante
	var $w_fecha='';
	var $w_tipo_solicitud='DERECHO DE INSTALACION DE AGUA POTABLE';
	var $w_nro_solicitud='0000001';
	
	var $w_solicitante='IVAN GONZALEZ';
	var $w_cedula_solicitante='1712873890';
	var $w_direccion='AV. HERNAN GONZALEZ DE SAA 24145';
	var $w_provincia='IMBABURA';
	var $w_ciudad='OTAVALO';
	var $w_parroquia='SAN PABLO';
	var $w_comunidad='LA BUENA ESPERANZA';
	var $w_toma_operativa='TOMA ANGLA';
	var $w_toma_administrativa='TOMA PRINCIPAL';
	var $w_nro_medidor='123456789';
	var $w_comentario='Comentario de prueba';
	
	var $w_texto_aviso="Sirvase concurrir a esta misma ventanilla con este comprobante luego de 10 días laborales, no lo extravíe.";
	//var $w_tipo_instalacion='';
	//var $w_prductos_contrato;
	//variables de la forma de pago
   //var $w_tarifa_basica=2.10;
	//var $w_metros_basicos=10;
	//var $w_metros_excedente=11;
	//var $w_valor_abono=0;
	//var $w_plazo=0;
	//var $w_valor_dividendo=0;
	
	
    function Header(){
	
        if($this->grid)
            $this->DrawGrid();
		$vetor_x = 		array(5, 	5, 		5);
        $vetor_y = 		array(5, 	27, 	100);
        $largura = 		array(200, 	200, 	200);
        $altura = 		array(20, 	63, 	42);
		$raio = 		array(2, 	2, 		2);
		$resolucao = 	array(2, 	2, 		2);
		
        for ($i = 0; $i != count($vetor_x); $i++){
			
			$this->DrawBorder($vetor_x[$i],$vetor_y[$i],$largura[$i],$altura[$i],$raio[$i],$resolucao[$i]);
		}	
		// Logo do Relatório
		$this->Image('../_lib/file/img/'.$this->w_ruc_empresa.'/'.$this->w_logo,10,6,20,18);
		
		$this->SetXY(60,10);
		$this->SetFont('helvetica', 'B', 12);
		$this->SetTextColor(0,0,0);
		$this->MultiCell(0, 10, $this->w_institucion, 0, 'C', 0, 0, '', '', true);
		
		
	}	
	
	function cuerpoContrato(){	
		$y=30;
		$this->SetFont('helvetica', 'B', 12);
		$this->SetXY(10,$y);
	    $this->MultiCell(160, 8, 'SOLICITUD DE: '.$this->w_tipo_solicitud, 0, 'C', 0, 0, '', '', true);
		$this->SetFont('helvetica', 'B', 12);
		$this->SetXY(175,$y);
		$this->SetTextColor(255,0,0);
	    $this->MultiCell($y, 8, 'Nro. '.$this->w_nro_solicitud, 0, 'L', 0, 0, '', '', true);
		
		$this->SetTextColor(0,0,0);
		$this->SetFont('helvetica', '', 10);
		$y+=6;
		$this->SetXY(7,$y);
	    $this->MultiCell(0, 8,$this->w_parroquia.', '.$this->w_fecha , 0, 'L', 0, 0, '', '', true);
		$y=42;
		$this->SetFont('helvetica', 'B', 10);
		$this->SetXY(7,$y);
	    $this->MultiCell(0, 8, 'Solicitante:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY(140,$y);
	    $this->MultiCell(0, 8, 'C.I.:', 0, 'L', 0, 0, '', '', true);
		if(strlen($this->w_solicitante)>55){
			$y+=5;	
		}
		$y+=5;
		$this->SetXY(7,$y);
	    $this->MultiCell(0, 8, 'Provincia:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY(100,$y);
		$this->MultiCell(0, 8, 'Cantón:', 0, 'L', 0, 0, '', '', true);
		$y+=5;
		$this->SetXY(7,$y);
		$this->MultiCell(0, 8, 'Parroquia:', 0, 'L', 0, 0, '', '', true);
		$y+=5;
		$this->SetXY(7,$y);
	  	$this->MultiCell(0, 8, 'Dirección:', 0, 'L', 0, 0, '', '', true);
		
		$y+=5;
		$this->SetXY(7,$y);
	  	$this->MultiCell(0, 8, 'Comentario:', 0, 'L', 0, 0, '', '', true);
		
		$this->SetFont('helvetica', '', 10);
		$this->SetTextColor(0,0,0);
		$y=42;
		$this->SetXY(30,$y);
	    $this->MultiCell(110, 8, $this->w_solicitante, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(150,$y);
	    $this->MultiCell(0, 8, $this->w_cedula_solicitante, 0, 'L', 0, 0, '', '', true);
		if(strlen($this->w_solicitante)>55){
			$y+=5;	
		}
		$y+=5;
		$this->SetXY(30,$y);
	    $this->MultiCell(0, 8, $this->w_provincia, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(115,$y);
		$this->MultiCell(0, 8, $this->w_ciudad, 0, 'L', 0, 0, '', '', true);
		$y+=5;
		$this->SetXY(30,$y);
		$this->MultiCell(0, 8, $this->w_parroquia, 0, 'L', 0, 0, '', '', true);
		$y+=5;
		$this->SetXY(30,$y);
	    $this->MultiCell(0, 8, $this->w_direccion, 0, 'L', 0, 0, '', '', true);
		$y+=5;
		$this->SetXY(30,$y);
	    $this->MultiCell(0, 8, $this->w_comentario, 0, 'L', 0, 0, '', '', true);
		
		$x=30;
		$y=80;
		$this->SetXY($x,$y);
	    $this->MultiCell(0, 8, 'FIRMA FUNCIONARIO', 0, 'L', 0, 0, '', '', true);
		$x=120;
		$this->SetXY($x,$y);
	    $this->MultiCell(80, 8, 'FIRMA PROPIETARIO', 0, 'L', 0, 0, '', '', true, 1, false, true, 8 );
		
		$x=15;
		$y=105;
		$this->SetXY($x,$y);
		$this->SetTextColor(255,0,0);
	    $this->SetFont('helvetica', 'B', 12);
		$this->MultiCell(0, 7,"COMPROBANTE EN TRAMITE!", 0, 'C', 0, 2, '' ,'', true);
		
		$y+=5;
		$this->SetTextColor(0,0,0);
		$this->SetXY(10,$y);
	    $this->MultiCell(160, 8, $this->w_tipo_solicitud, 0, 'C', 0, 0, '', '', true);
		$this->SetXY(175,$y);
		$this->MultiCell($y, 8, 'Nro. '.$this->w_nro_solicitud, 0, 'L', 0, 0, '', '', true);
		
		$y+=10;
		$this->SetFont('helvetica', 'B', 10);
		$this->SetXY(7,$y);
		$this->MultiCell(0, 8, 'Solicitante:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY(140,$y);
		$this->MultiCell(0, 8, 'C.I.:', 0, 'L', 0, 0, '', '', true);
		$this->SetXY(30,$y);
		$this->SetFont('helvetica', '', 10);
	    $this->MultiCell(110, 8, $this->w_solicitante, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(150,$y);
	    $this->MultiCell(0, 8, $this->w_cedula_solicitante, 0, 'L', 0, 0, '', '', true);
		
		$y+=15;
		
		$this->SetXY(7,$y);
	    $this->MultiCell(0, 8, $this->w_texto_aviso, 0, 'C', 0, 0, '', '', true);
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