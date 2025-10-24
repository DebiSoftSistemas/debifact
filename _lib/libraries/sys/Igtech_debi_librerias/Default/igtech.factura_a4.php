<?php
class MYPDF extends TCPDF {
	var $grid = false;
	var $dibuja_cabecera=true;
	var $posy=0;
	var $posx=5;
	var $ancho=4;
	var $largo=190;
	
	//variables para la cabecera
	var $w_logo_empresa='tributarya23.jpg';
	var $w_nombre_empresa='DEBIEC';
    var $w_ruc_empresa='1001862935001';
    var $w_nombre_establecimiento='MATRIZ';
	var $w_direccion_establecimiento='Alfredo Obando Luna';
	var $w_telefono_establecimiento='';
	var $w_ciudad_inst='IBARRA';
	var $w_pais_inst='ECUADOR';
	var $w_tipo_documento='FACTURA';
	var $w_telefonos='';
	var $w_email='';
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
	
	
	function Header(){
        //dibuja la cuadricula de ayuda para las posiciones
        
		if($this->grid) $this->DrawGrid();
        
        // carga el logotipo de la empresa
		$this->posx=5;
		$this->posy=5;
		$w_ancho_imagen=40;
		$w_alto_imagen=20;
		
		if($this->dibuja_cabecera){
			
			$w_posx=36-$w_ancho_imagen/2;
			$ruta_logo='../_lib/file/img'.$this->w_ruc_empresa.'/'.$this->w_logo_empresa;
			if (file_exists($ruta_logo)) {
				$this->Image($ruta_logo,$w_posx,$this->posy,$w_ancho_imagen,$w_alto_imagen);
			}else{
				$ruta_logo='../_lib/file/img/'.$this->w_ruc_empresa.'/'.$this->w_logo_empresa;
				if (file_exists($ruta_logo)) {
					$this->Image($ruta_logo,$w_posx,$this->posy,$w_ancho_imagen,$w_alto_imagen);
				}	
			}	
			$this->posx=60;
			$this->posy=5;	
			$this->largo=130;
			$this->SetFont('helvetica', 'B', 8);
			$this->SetTextColor(0,0,0);
			$this->SetXY($this->posx,$this->posy);
			$this->MultiCell($this->largo, $this->ancho, $this->w_ruc_empresa , 0, 'C', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
			
			
			$this->SetFont('helvetica', 'B', 7);
			$this->SetTextColor(0,0,0);
			$this->SetXY($this->posx,$this->posy+=$this->ancho);
			$num_lineas=intval(strlen($this->w_nombre_empresa)/100)+1;
			$this->MultiCell($this->largo, $this->ancho*$num_lineas,$this->w_nombre_empresa, 0, 'C', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');
			
			$this->SetXY($this->posx,$this->posy+=$this->ancho*$num_lineas);
			$num_lineas=intval(strlen('Dir. '.$this->w_direccion_establecimiento)/50)+1;
			$this->MultiCell($this->largo, $this->ancho,'Dir. '.$this->w_direccion_establecimiento , 0, 'C', 0, 0, '', '', true,0, false, true, $this->ancho*$num_lineas, 'M');
			
			$this->SetXY($this->posx,$this->posy+=$this->ancho*$num_lineas);
			$this->MultiCell($this->largo, $this->ancho,$this->w_telefono_establecimiento, 0, 'C', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
			$this->SetXY($this->posx,$this->posy+=$this->ancho);
			$this->MultiCell($this->largo, $this->ancho,$this->w_email, 0, 'C', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
			$num_lineas=1;
			$this->SetFont('helvetica', 'B', 7);
			$this->SetXY($this->posx,$this->posy+=$this->ancho*$num_lineas);
			$this->MultiCell($this->largo, $this->ancho, $this->w_tipo_documento.' Nro. '.$this->w_nro_documento, 0, 'C', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
			$this->posy+=5;
		}
		
			
    }
	
	function Footer() {
	}
	
	function cabecera_factura(){
		$this->posx=10;
		$this->largo=190;
        //$this->posy=42;
		$this->DrawBorder(5,$this->posy,200,25,2,2);
		$this->SetFont('helvetica', 'B', 7);
		$this->SetTextColor(0,0,0);
		$this->SetXY($this->posx,$this->posy);
	    $this->MultiCell($this->largo, $this->ancho, 'Identificacion:'.$this->w_identificacion_cliente, 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		$this->SetXY($this->posx+140,$this->posy);
		$this->MultiCell($this->largo, $this->ancho, 'Fecha: '.$this->w_fecha, 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->SetXY($this->posx,$this->posy+=$this->ancho);
	    $num_lineas=intval(strlen('Cliente:'.$this->w_cliente)/50)+1;
		$this->MultiCell($this->largo, $this->ancho*$num_lineas, 'Cliente:'.$this->w_cliente, 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');
		
		$this->SetXY($this->posx,$this->posy+=$this->ancho);
		$num_lineas=intval(strlen('Dirección:'.$this->w_direccion_cliente)/50)+1;
		$this->MultiCell($this->largo, $this->ancho*$num_lineas, 'Dirección:'.$this->w_direccion_cliente, 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');
		$this->SetXY($this->posx,$this->posy+=$this->ancho*$num_lineas);
	    $this->MultiCell($this->largo, $this->ancho, 'Telefono:'.$this->w_telefono_cliente, 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		$this->SetXY($this->posx,$this->posy+=$this->ancho);
		$num_lineas=intval(strlen('Comentario: '.$this->w_comentario)/130)+1;
	    $this->MultiCell($this->largo, $this->ancho*$num_lineas, 'Comentario: '.$this->w_comentario, 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');
		$this->SetXY($this->posx,$this->posy+=$this->ancho*($num_lineas)+1);
	}

	function detalle_factura(){
		$this->posx=5;
		//$this->posy=68;
		$this->ancho=4;
		$this->SetFont('helvetica', 'B', 7);
		$this->setCellMargins(0, 0, 0, 0);
		$this->SetFillColor(255, 255, 255);
        $this->SetXY($this->posx,$this->posy);//cantidad
        $this->MultiCell(10, $this->ancho, 'Cant.', 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->posx+=20;
		$this->SetXY($this->posx,$this->posy);//producto
        $this->MultiCell(20, $this->ancho, 'Codigo', 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->posx+=20;
		$this->SetXY($this->posx,$this->posy);//producto
        $this->MultiCell(100, $this->ancho, 'Producto', 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->posx+=100;
		$this->SetXY($this->posx,$this->posy);//precio Unitario
        $this->MultiCell(20, $this->ancho, 'P. Unit.', 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->posx+=20;
		$this->SetXY($this->posx,$this->posy);//precio Unitario
        $this->MultiCell(20, $this->ancho, 'Descuento', 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->posx+=20;
		$this->SetXY($this->posx,$this->posy);//TOTAL
        $this->MultiCell(20, $this->ancho, 'Subtotal', 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		//$this->line(5,$this->posy,200,$this->posy);
		$this->posy+=$this->ancho;
		$this->line(5,$this->posy,205,$this->posy);
		foreach ($this->w_productos_factura as $item) {
			$this->posx=5;
			$num_lineas=intval(strlen($item['descripcion'])/80)+1;
			$this->SetFont('helvetica', '', 7);
			$this->setCellMargins(0, 0, 0, 0);
			$this->SetFillColor(255, 255, 255);
			$this->SetXY($this->posx,$this->posy);//cantidad
			$this->MultiCell(20, $this->ancho*$num_lineas, number_format($item['cantidad'],4), 0, 'C', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');
			
			$this->posx+=20;
			$this->SetXY($this->posx,$this->posy);//producto
			$this->MultiCell(20, $this->ancho*$num_lineas, $item['codigo'], 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');
			
			$this->posx+=20;
			$this->SetXY($this->posx,$this->posy);//producto
			$this->MultiCell(100, $this->ancho*$num_lineas, $item['descripcion'], 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');
			
			$this->posx+=100;
			$this->SetXY($this->posx,$this->posy);//P. Unitario
			$this->MultiCell(20, $this->ancho*$num_lineas, number_format($item['precio'],4), 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');
			
			$this->posx+=20;
			$this->SetXY($this->posx,$this->posy);//P. Descuento
			$this->MultiCell(20, $this->ancho*$num_lineas, number_format($item['descuento'],4), 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');
			
			$this->posx+=20;
			$this->SetXY($this->posx,$this->posy);//TOTAL
			$this->MultiCell(20, $this->ancho*$num_lineas, number_format($item['base_iva'],2), 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho*$num_lineas, 'M');		
			
			$this->posy+=$num_lineas*$this->ancho;
		}	
		$this->posx=155;
		$this->line(5,$this->posy,205,$this->posy); 
		$this->SetFont('helvetica', 'B', 7);
		$this->SetFillColor(255, 255, 255);
        $this->SetXY($this->posx,$this->posy);
		$this->MultiCell(45, $this->ancho,'Subotal', 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		$this->SetXY($this->posx+35,$this->posy);
		$this->MultiCell(15, $this->ancho, number_format($this->w_subtotal,2), 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->SetXY($this->posx,$this->posy+=$this->ancho);
		$this->MultiCell(45, $this->ancho,'Base IVA', 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		$this->SetXY($this->posx+35,$this->posy);
		$this->MultiCell(15, $this->ancho, number_format($this->w_subtotal_iva,2), 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->SetXY($this->posx,$this->posy+=$this->ancho);
		$this->MultiCell(40, $this->ancho,'Base 0%', 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		$this->SetXY($this->posx+35,$this->posy);
		$this->MultiCell(15, $this->ancho, number_format($this->w_subtotal_cero,2), 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->SetXY($this->posx,$this->posy+=$this->ancho);
		$this->MultiCell(40, $this->ancho,'IVA', 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		$this->SetXY($this->posx+35,$this->posy);
		$this->MultiCell(15, $this->ancho, number_format($this->w_iva,2), 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->SetXY($this->posx,$this->posy+=$this->ancho);
		$this->MultiCell(40, $this->ancho,'Total', 0, 'L', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		$this->SetXY($this->posx+35,$this->posy);
		$this->MultiCell(15, $this->ancho, number_format($this->w_total,2), 0, 'R', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		
		$this->posx=5;
		$this->SetXY($this->posx,$this->posy+=$this->ancho);
		$this->line(5,$this->posy,205,$this->posy); 
		
		$this->largo=190;
		$this->setCellMargins(0, 0, 0, 0);
		$this->SetFillColor(255, 255, 255);
		$this->MultiCell($this->largo, $this->ancho,$this->w_mensaje, 0, 'C', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		$this->SetXY($this->posx,$this->posy+=$this->ancho);
		$this->MultiCell($this->largo, $this->ancho,'Recaudado por: '.$this->w_vendedor, 0, 'C', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		//$this->SetXY($this->posx,$this->posy+=$this->ancho);
		//$this->MultiCell($this->largo, $this->ancho,$this->w_email, 0, 'C', 0, 0, '', '', true, 0, false, true, $this->ancho, 'M');
		$style = array(
			'position' => '',
			'align' => 'L',
			'stretch' => false,
			'fitwidth' => false,
			'cellfitalign' => 'L',
			'border' => false,
			'hpadding' => 'auto',
			'vpadding' => 'auto',
			'fgcolor' => array(0,0,0),
			'bgcolor' => false, //array(255,255,255),
			'text' => false,
			'font' => 'helvetica',
			'fontsize' => 6,
			'stretchtext' => 2
		);
		$this->SetXY(0,$this->posy+=$this->ancho);
		//$this->write1DBarcode($this->w_identificacion_cliente, 'CODABAR', '', '', '', 12, 0.4, $style, 'N');
		
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