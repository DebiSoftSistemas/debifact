<?php
//__NM____NM__FUNCTION__NM__//

    class conexionBDD{
        public $server;
        public $port;
        public $user;
        public $pass;
        public $bdd;
    }

    class IdAsiento{
        public $idEmpresa;
        public $mes;
        public $anio;
        public $tipo;
    }

    class Asiento{
        public $idAsiento;
		public $codEmpresa;
		public $fecha;
		public $concepto;
		public $estado;
		public $aprobado;
		public $esGeneradoPor;
        public $detallesAsiento;
	}

    class detalleAsiento{
        public $idAsiento;
        public $idPlanCuentas;
        public $debeHaber;
        public $valor;
    }

    class ClienteDebi{
       
        public $codEmpresa;
        public $tipoIdentificacion;
        public $identificacion;
        public $nombre;
        public $provincia;
        public $ciudad;
        public $direccion;
        public $telefono;
        public $email;
    }
    
    class FacturaDebi{
        public $empresa;
        public $tipo_documento;
        public $tipo_emision;
        public $fecha;
        public $fecha_caducidad;
        public $serie;
        public $secuencial;
        public $autorizacion;
        public $estado_sri;
        public $observaciones;
        public $servicio;
        public $propina;
        public $total;
        public $cliente;
        public $productos;
        public $formas_pago;
        public $factura_afecta;
    }

    class Producto{
        public $cod_producto_debi;
        public $cantidad;
        public $pvp;
        public $descuento_total;
        public $porcentaje_iva;
		public $valor_iva;
    }
    
    class FormaPago{
        public $id_tesoreria;
        public $tipo_pago;
        public $lote;
        public $documento;
        public $valor;
        public $plazo;
        public $tiempo;
    }

    class FacturaAfecta{
        public $serie;
        public $secuencial;
    }
    
	
?>