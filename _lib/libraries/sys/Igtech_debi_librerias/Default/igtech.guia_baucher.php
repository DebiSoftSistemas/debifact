<?php
class MYPDF extends TCPDF {
	var $grid = false;
	var $y=75;
	//variables para la cabecera
	var $w_logo_empresa='tributarya23.jpg';
	var $w_nombre_empresa='DEBIEC';
    var $w_ruc_empresa='1001862935001';
    var $w_nombre_establecimiento='MATRIZ';
	var $w_direccion_establecimiento='Alfredo Obando Luna';
	var $w_telefono_establecimiento='';
	var $w_ciudad_inst='IBARRA';
	var $w_pais_inst='ECUADOR';
    //variables del solicitante
	var $w_fecha='';
	var $w_tipo_documento='GUIA REMISION';
	var $w_nro_documento='001001-000000001';
	
	var $w_identificacion_transportista='';
	var $w_transportista='';
	var $w_placa='';
	var $w_direccion_partida='';
	var $w_fecha_ini_transporte='';
	var $w_fecha_fin_transporte='';
	
	
	function Header(){
        //dibuja la cuadricula de ayuda para las posiciones
        if($this->grid) $this->DrawGrid();
        $this->y=36;
        // carga el logotipo de la empresa
		$this->Image('../_lib/file/img/'.$this->w_ruc_empresa.'/'.$this->w_logo_empresa,17,5,40,15);
		$this->SetFont('helvetica', 'B', 6);
		$this->SetTextColor(0,0,0);
		$this->SetXY(0,21);
		$this->MultiCell(74, 3, $this->w_ruc_empresa .' - '. $this->w_nombre_empresa, 0, 'C', 0, 0, '', '', true);
		//$this->SetXY(0,24);
		//$this->MultiCell(74, 3, $this->w_ruc_empresa, 0, 'C', 0, 0, '', '', true);
		$this->SetXY(0,27);
		$this->MultiCell(74, 3, $this->w_nombre_establecimiento .' - ' .$this->w_direccion_establecimiento , 0, 'C', 0, 0, '', '', true);
		//$this->SetXY(0,30);
		//$this->MultiCell(74, 3, $this->w_direccion_establecimiento, 0, 'C', 0, 0, '', '', true);
		$this->SetXY(0,33);
		$this->MultiCell(74, 3, $this->w_telefono_establecimiento.$this->y, 0, 'C', 0, 0, '', '', true);
		
        
    }
	
	function Footer() {
	}
	
	function cabecera_guia(){
        $this->y=36;
		$this->SetFont('helvetica', 'B', 6);
		$this->SetTextColor(0,0,0);
		
		$this->DrawBorder(2,$this->y,70,24,2,2);
		$this->SetXY(0,$this->y);
	    $this->MultiCell(74, 3, $this->w_tipo_documento.' Nro. '.$this->w_nro_documento, 0, 'C', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
		$this->MultiCell(0, 3, 'Fecha: '.$this->w_fecha, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Transportista:'.$this->w_transportista, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Identificación:'.$this->w_identificacion_transportista, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
		$this->MultiCell(0, 3, 'Placa:'.$this->w_placa, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Partida:'.$this->w_direccion_partida, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Fecha de Inicio:'.$this->w_fecha_ini_transporte, 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Fecha de Fin:'.$this->w_fecha_fin_transporte, 0, 'L', 0, 0, '', '', true);
		$this->y+=3;
	}
	
	function destinatario($w_destinatario){
		$this->SetFont('helvetica', 'B', 6);
		$this->SetTextColor(0,0,0);
		$this->y+=3;
		$this->DrawBorder(2,$this->y,70,30,2,2);
		
		$this->SetXY(5,$this->y);
		$this->MultiCell(0, 3, 'Comprobante de Venta: '.$w_destinatario['tipo_doc_sustento'].' Nro. '.$w_destinatario['doc_sustento'], 0, 'L', 0, 0, '', '', true);
		
		$this->SetXY(5,$this->y+=3);
		$this->MultiCell(0, 3, 'Fecha de Emisión: '.$w_destinatario['fecha_doc_sustento'], 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Autorización:'.$w_destinatario['autorizacion_doc_sustento'], 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Motivo de traslado:'.$w_destinatario['motivo_traslado'], 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
		$this->MultiCell(0, 3, 'Destino:'.$w_destinatario['direccion_destino'], 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Identificación(Destinatario):'.$w_destinatario['identificacion_destinatario'], 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Razón Social:'.$w_destinatario['nombre_destinatario'], 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Documento Aduanero:'.$w_destinatario['documento_aduanero'], 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Codigo Establecimiento Destino:'.$w_destinatario['codigo_est_destino'], 0, 'L', 0, 0, '', '', true);
		$this->SetXY(5,$this->y+=3);
	    $this->MultiCell(0, 3, 'Ruta:'.$w_destinatario['ruta'], 0, 'L', 0, 0, '', '', true);
		$this->y+=3;
		
	}
	
	function detalle_guia($w_productos_guia){
		$x=2;
		$this->y+=3;
		$ancho=3;
		$this->SetFont('helvetica', 'B', 6);
		$this->setCellMargins(0, 0, 0, 0);
		$this->SetFillColor(255, 255, 255);
        $this->SetXY($x,$this->y);//producto
        $this->MultiCell(55, $ancho, 'Producto', 1, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=55;
				
		$this->SetXY($x,$this->y);//cantidad
        $this->MultiCell(15, $ancho, 'Cantidad', 1, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->y+=$ancho;

		foreach ($w_productos_guia as $item) {
			$x=2;
			$num_lineas=intval(strlen($item[1])/40)+1;
			$this->SetFont('helvetica', '', 6);
			$this->setCellMargins(0, 0, 0, 0);
			$this->SetFillColor(255, 255, 255);
			$this->SetXY($x,$this->y);//producto
			$this->MultiCell(45, $ancho*$num_lineas, $item[1], 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=55;
			$this->SetXY($x,$this->y);//cantidad
			$this->MultiCell(15, $ancho*$num_lineas, number_format($item[2],2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$this->line(2,$this->y,72,$this->y);
			
			$this->y+=$num_lineas*$ancho;
		}	
		$this->y+=3;
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