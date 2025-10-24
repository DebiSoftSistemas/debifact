<?php
class MYPDF extends TCPDF {
	var $grid = false;
	var $y=75;
	var $dibuja_cabecera=false;
	//variables para la cabecera
	var $w_logo_empresa='tributarya23.jpg';
	var $w_nombre_empresa='DEBIEC';
    var $w_ruc_empresa='1001862935001';
    var $w_nombre_establecimiento='MATRIZ';
	var $w_direccion_establecimiento='Alfredo Obando Luna';
	var $w_telefono_establecimiento='062603102';
	var $w_ciudad_inst='IBARRA';
	var $w_pais_inst='ECUADOR';
	var $w_tipo_documento='FACTURA';
	var $w_nro_documento='001001-000000001';
    //variables del solicitante
	var $w_fecha='';
	var $w_cliente='';
	var $w_identificacion_cliente='';
	var $w_direccion_cliente='';
	var $w_telefono_cliente='';
	
	var $w_vendedor='';
	var $w_comentario='';
	//detalles de la factura
	var $w_productos_factura;
	//variables de los subtotales
	var $w_subtotal=0;
	var $w_subtotal_iva=0;
	var $w_subtotal_cero=0;
	var $w_iva=0;
	var $w_total=0;
	var $w_mensaje='Documento sin validez tributaria, revise su correo electrónico';
	var $w_telefonos='***Fecha de pago del 05 al 20 de cada mes***';
	var $w_email='';
	
	function Header(){
        //dibuja la cuadricula de ayuda para las posiciones
        if($this->grid) $this->DrawGrid();
        
        // carga el logotipo de la empresa
		if($this->dibuja_cabecera){
			$ruta_logo='../_lib/file/img'.$this->w_ruc_empresa.'/'.$this->w_logo_empresa;
			if (file_exists($ruta_logo)) {
				$this->Image($ruta_logo,20,5,40,15);
			}else{
				$ruta_logo='../_lib/file/img/'.$this->w_ruc_empresa.'/'.$this->w_logo_empresa;
				if (file_exists($ruta_logo)) {
					$this->Image($ruta_logo,20,5,40,15);
				}	
			}	
			$x=5;			
			$this->SetFont('helvetica', 'B', 6);
			$this->SetTextColor(0,0,0);
			$this->SetXY($x,21);
			$this->MultiCell(60, 3, $this->w_ruc_empresa , 0, 'C', 0, 0, '', '', true);
			
			$this->SetFont('helvetica', 'B', 6);
			$this->SetTextColor(0,0,0);
			$this->SetXY($x,24);
			$this->MultiCell(60, 3,$this->w_nombre_empresa, 0, 'C', 0, 0, '', '', true);
			
			$this->SetXY($x,30);
			$this->MultiCell(60, 3, $this->w_nombre_establecimiento .' - ' .$this->w_direccion_establecimiento , 0, 'C', 0, 0, '', '', true);
			
			
			$this->SetFont('helvetica', 'B', 6);
			$this->SetXY($x,36);
			$this->MultiCell(60, 3, 'telfs: '.$this->w_telefono_establecimiento, 0, 'C', 0, 0, '', '', true);
			
			$this->SetFont('helvetica', 'B', 6);
			$this->SetXY($x,39);
			$this->MultiCell(60, 3, $this->w_tipo_documento.' Nro. '.$this->w_nro_documento, 0, 'C', 0, 0, '', '', true);
			
		}
		
			
    }
	
	function Footer() {
	}
	
	function cabecera_factura(){
		$x=5;
        $ancho=3;
		$this->SetFont('helvetica', 'B', 6);
		$this->SetTextColor(0,0,0);
		$this->y=42;
		$this->SetXY($x,$this->y);
		$this->line(2,$this->y,72,$this->y);
		$this->MultiCell(0, $ancho, 'Fecha: '.$this->w_fecha, 0, 'L', 0, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY($x,$this->y+=$ancho);
	    $num_lineas=intval(strlen($this->w_cliente)/40)+1;
		$this->MultiCell(60, $ancho*$num_lineas, 'Cliente:'.$this->w_cliente, 0, 'L', 0, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
		$this->SetXY($x,$this->y+=$ancho*$num_lineas);
	    $this->MultiCell(0, $ancho, 'Identificacion:'.$this->w_identificacion_cliente, 0, 'L', 0, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY($x,$this->y+=$ancho);
		$num_lineas=intval(strlen($this->w_direccion_cliente)/40)+1;
		$this->MultiCell(60, $ancho*$num_lineas, 'Dirección:'.$this->w_direccion_cliente, 0, 'L', 0, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
		$this->SetXY($x,$this->y+=$ancho*$num_lineas);
	    $this->MultiCell(0, $ancho, 'Telefono:'.$this->w_telefono_cliente, 0, 'L', 0, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY($x,$this->y+=$ancho);
		$num_lineas=intval(strlen($this->w_comentario)/40)+1;
	    $this->MultiCell(60, $ancho*$num_lineas, 'Comentario: '.$this->w_comentario, 0, 'L', 0, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
		$this->SetXY($x,$this->y+=$ancho*$num_lineas+$ancho);
	}

	function detalle_factura(){
		$x=5;
		//$this->y=68;
		$ancho=3;
		$this->SetFont('helvetica', 'B', 6);
		$this->setCellMargins(0, 0, 0, 0);
		$this->SetFillColor(255, 255, 255);
        $this->SetXY($x,$this->y);//cantidad
        $this->MultiCell(10, $ancho, 'Cant.', 0, 'C', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=10;
		
		$this->SetXY($x,$this->y);//producto
        $this->MultiCell(40, $ancho, 'Producto', 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$x+=40;
				
		$this->SetXY($x,$this->y);//TOTAL
        $this->MultiCell(15, $ancho, 'Subtotal', 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->line(2,$this->y,72,$this->y);
		$this->y+=$ancho;
		$this->line(2,$this->y,72,$this->y);
		foreach ($this->w_productos_factura as $item) {
			$x=5;
			$num_lineas=intval(strlen($item['descripcion'])/35)+1;
			$this->SetFont('helvetica', '', 6);
			$this->setCellMargins(0, 0, 0, 0);
			$this->SetFillColor(255, 255, 255);
			$this->SetXY($x,$this->y);//cantidad
			$this->MultiCell(10, $ancho*$num_lineas, number_format($item['cantidad'],5), 0, 'C', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=10;
			$this->SetXY($x,$this->y);//producto
			$this->MultiCell(40, $ancho*$num_lineas, $item['descripcion'], 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			$x+=40;
						
			$this->SetXY($x,$this->y);//TOTAL
			$this->MultiCell(15, $ancho*$num_lineas, number_format($item['base_iva'],2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho*$num_lineas, 'M');
			//$this->line(2,$this->y,72,$this->y);
			
			$this->y+=$num_lineas*$ancho;
		}	
		$x=5;
		$this->line(2,$this->y,72,$this->y); 
		$this->SetFont('helvetica', 'B', 6);
		$this->SetFillColor(255, 255, 255);
        $this->SetXY($x,$this->y);
		$this->MultiCell(50, $ancho,'Subotal', 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY($x+50,$this->y);
		$this->MultiCell(15, $ancho, number_format($this->w_subtotal,2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		
		$this->SetXY($x,$this->y+=3);
		$this->MultiCell(50, $ancho,'Base IVA', 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY($x+50,$this->y);
		$this->MultiCell(15, $ancho, number_format($this->w_subtotal_iva,2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		
		$this->SetXY($x,$this->y+=3);
		$this->MultiCell(50, $ancho,'Base 0%', 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY($x+50,$this->y);
		$this->MultiCell(15, $ancho, number_format($this->w_subtotal_cero,2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		
		$this->SetXY($x,$this->y+=3);
		$this->MultiCell(50, $ancho,'IVA', 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY($x+50,$this->y);
		$this->MultiCell(15, $ancho, number_format($this->w_iva,2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		
		$this->SetXY($x,$this->y+=3);
		$this->MultiCell(50, $ancho,'Total', 0, 'L', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		$this->SetXY($x+50,$this->y);
		$this->MultiCell(15, $ancho, number_format($this->w_total,2), 0, 'R', 1, 0, '', '', true, 0, false, true, $ancho, 'M');
		
		
		
		$this->SetXY($x,$this->y+=3);
		$this->line(2,$this->y,72,$this->y); 
		
		$this->setCellMargins(0, 0, 0, 0);
		$this->SetFillColor(255, 255, 255);
		$this->MultiCell(65, $ancho,$this->w_mensaje, 0, 'C', 1, 0, '', '', true, 0, false, true, $ancho*2, 'M');
		$this->SetXY($x,$this->y+=3);
		$this->MultiCell(65, $ancho,$this->w_telefonos, 0, 'C', 1, 0, '', '', true, 0, false, true, $ancho*2, 'M');
		$this->SetXY($x,$this->y+=3);
		$this->MultiCell(65, $ancho,$this->w_email, 0, 'C', 1, 0, '', '', true, 0, false, true, $ancho*2, 'M');
		
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