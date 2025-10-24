<?php
//__NM____NM__FUNCTION__NM__//
	
class configAplicacion {
    public  $dirAutorizados; 
    public  $dirFirma; 
    public  $dirLogo; 
    public  $passFirma; 
	public  $dirIreport;
}

class configCorreo {
    public  $correoAsunto; 
    public  $correoHost; 
    public  $correoPass; 
    public  $correoPort; 
    public  $correoRemitente; 
    public  $sslHabilitado; 
	public  $rutaLogo;
}

class comprobanteGeneral {
    public  $configAplicacion;
    public  $configCorreo;
    public  $ambiente;
    public  $tipoEmision;
    public  $razonSocial;
    public  $nombreComercial;
    public  $ruc;
    public  $codDoc;
    public  $claveAcc;
    public  $establecimiento;
    public  $ptoEmision;
    public  $secuencial;
    public  $dirMatriz;
    public  $dirEstablecimiento;
    public  $contribuyenteEspecial;
    public  $obligadoContabilidad;
    public  $tipoDoc;
    public  $fechaEmision;
	public  $padronMicroempresa;
	public  $padronAgenteRetencion;
	public  $numeroResolucion;
	public  $artesanoCalificado;
	public  $padronRimpe;
	public  $leyendaRimpe;
}

class comprobanteLote {
    public  $configAplicacion;
    public  $configCorreo;
    public  $idUnico;
    public  $claveAcceso;
    public  $ruc;
    public  $fechaEmision;
    public  $ambiente;
    public  $tipoEmision;
    public  $secuencial;
    public  $codDoc;
    public  $establecimiento;
    public  $ptoEmision;
    public  $comprobantes;
	public  $padronMicroempresa;
	public  $padronAgenteRetencion;
	public  $artesanoCalificado;
	public  $padronRimpe;
}

class comprobantePendiente {
    public  $configAplicacion;
    public  $configCorreo;
    public  $clavAcc;
    public  $codDoc;
    public  $ruc;
    public  $ambiente;
    public  $establecimiento;
    public  $ptoEmision;
    public  $secuencial;
    public  $tipoEmision;
    public  $fechaEmision;
    public  $enviarEmail;
    public  $otrosDestinatarios;
	public  $padronMicroempresa;
	public  $padronAgenteRetencion;
	public  $artesanoCalificado;
	public  $padronRimpe;
}

class comprobanteRetencion extends comprobanteGeneral {
    public  $tipoIdentificacionSujetoRetenido; 
	public  $razonSocialSujetoRetenido;
	public  $identificacionSujetoRetenido;
	public  $periodoFiscal; 
	public  $impuestos;
	public  $infoAdicional;
}

class comprobanteRetencionDos extends comprobanteGeneral {
    public  $tipoIdentificacionSujetoRetenido; 
    public  $tipoSujetoRetenido;
    public  $parteRel;
    public  $razonSocialSujetoRetenido;
    public  $identificacionSujetoRetenido; 
    public  $periodoFiscal; 
    public  $docsSustento; 
    public  $infoAdicional; 
}

class factura extends comprobanteGeneral {
    public  $tipoIdentificacionComprador;
	public  $guiaRemision;
	public  $razonSocialComprador;
	public  $identificacionComprador;
	public  $direccionComprador;
    public  $totalSinImpuestos;
    public  $totalDescuento;
    public  $propina;
    public  $totalConImpuesto;
	public  $totalSubsidio;
    public  $importeTotal;
	public  $moneda;
    public  $detalles;
    public  $infoAdicional;
	public  $pagos;
}

class guiaRemision extends comprobanteGeneral{
    public  $dirPartida;
    public  $razonSocialTransportista;
    public  $tipoIdentificacionTransportista;
    public  $rucTransportista;
    public  $rise;
    public  $fechaFinTransporte;
    public  $fechaIniTransporte;
    public  $placa;
    public  $destinatarios;
    public  $infoAdicional;
}

class liquidacionCompra extends comprobanteGeneral {
    public  $tipoIdentificacionProveedor; 
    public  $razonSocialProveedor; 
    public  $identificacionProveedor; 
    public  $direccionProveedor; 
    public  $totalSinImpuestos; 
    public  $totalDescuento; 
    public  $totalConImpuesto; 
    public  $importeTotal; 
    public  $moneda; 
    public  $detalles; 
    public  $infoAdicional; 
    public  $pagos;
}

class notaCredito extends comprobanteGeneral {
    public  $tipoIdentificacionComprador; 
    public  $razonSocialComprador; 
    public  $identificacionComprador; 
    public  $rise; 
    public  $codDocModificado; 
    public  $numDocModificado; 
    public  $fechaEmisionDocSustento; 
    public  $totalSinImpuestos; 
    public  $valorModificacion; 
    public  $moneda; 
    public  $totalConImpuesto; 
    public  $motivo; 
    public  $detalles; 
    public  $infoAdicional;
}

class notaDebito extends comprobanteGeneral {
    public  $tipoIdentificacionComprador; 
    public  $razonSocialComprador; 
    public  $identificacionComprador; 
    public  $rise; 
    public  $codDocModificado; 
    public  $numDocModificado; 
    public  $fechaEmisionDocSustento; 
    public  $totalSinImpuestos; 
    public  $impuestos; 
    public  $valorTotal; 
	public  $pagos;
    public  $motivos; 
    public  $infoAdicional; 
}

class campoAdicional {
    public  $nombre; 
    public  $valor; 
}

class compraCajaBanana{
    public  $numCajBan;
    public  $precCajBan;
}

class destinatario {
    public  $identificacionDestinatario; 
    public  $razonSocialDestinatario; 
    public  $dirDestinatario; 
    public  $motivoTraslado; 
    public  $docAduaneroUnico; 
    public  $codEstabDestino; 
    public  $ruta; 
    public  $codDocSustento; 
    public  $numDocSustento; 
    public  $numAutDocSustento; 
    public  $fechaEmisionDocSustento; 
    public  $detalles; 
}

class detalleAdicional {
    public  $nombre; 
    public  $valor; 
}

class detalleFactura {
    public  $codigoAuxiliar; 
    public  $codigoPrincipal; 
    public  $descripcion; 
    public  $cantidad; 
    public  $precioUnitario; 
    public  $descuento; 
    public  $precioTotalSinImpuesto; 
    public  $detalleAdicional; 
    public  $impuestos; 
	public  $precioSinSubsidio;
}

class detalleGuiaRemision {
    public  $codigoInterno; 
    public  $codigoAdicional; 
    public  $descripcion; 
    public  $cantidad; 
    public  $detallesAdicionales;
}

class detalleImpuestoReeembolso{
    public  $codigo;
    public  $codigoPorcentaje;
    public  $tarifa;
    public  $baseImponibleReembolso;
    public  $impuestoReembolso;
}

class detalleLiquidacionCompra {
    public  $codigoPrincipal; 
    public  $codigoAuxiliar; 
    public  $descripcion; 
    public  $cantidad; 
    public  $precioUnitario; 
    public  $descuento; 
    public  $precioTotalSinImpuesto; 
    public  $detalleAdicional; 
    public  $impuestos; 
}

class detalleNotaCredito {
    public  $codigoInterno; 
    public  $codigoAdicional; 
    public  $descripcion; 
    public  $cantidad; 
    public  $precioUnitario; 
    public  $descuento; 
    public  $precioTotalSinImpuesto; 
    public  $detallesAdicionales; 
    public  $impuestos; 
}

class detalleReembolsoSustento{
    public  $tipoIdentificacionProveedorReembolso;
    public  $identificacionProveedorReembolso;
    public  $codPaisPagoProveedorReembolso;
    public  $tipoProveedorReembolso;
    public  $codDocReembolso;
    public  $estabDocReembolso;
    public  $ptoEmiDocReembolso;
    public  $secuencialDocReembolso;
    public  $fechaEmisionDocReembolso;
    public  $numeroAutorizacionDocReemb;
    public  $detalleImpuestos;
}

class dividendo{
    public  $fechaPagoDiv;
    public  $imRentaSoc;
    public  $ejerFisUtDiv;
}

class impuesto {
    public  $codigo; 
    public  $codigoPorcentaje; 
    public  $tarifa; 
    public  $baseImponible; 
    public  $valor; 
}

class impuestoComprobanteRetencion {
    public  $codigo; 
    public  $codigoRetencion; 
	public  $baseImponible; 
    public  $porcentajeRetener; 
	public  $valorRetenido; 
    public  $codDocSustento;
	public  $numDocSustento;
	public  $fechaEmisionDocSustento;
}

class impuestoComprobanteRetencionDos {
    public  $codigo; 
    public  $codigoRetencion; 
    public  $baseImponible; 
    public  $porcentajeRetener; 
    public  $valorRetenido; 
    public  $dividendos;
    public  $compraCajaBanano;
}

class impuestoDocSustento{
    public  $codImpuestoDocSustento;
    public  $codigoPorcentaje;
    public  $baseImponible;
    public  $tarifa;
    public  $valorImpuesto;
}

class motivo {
    public  $razon; 
    public  $valor; 
}

class pagos {
    public  $formaPago;
    public  $total;
    public  $plazo;
    public  $unidadTiempo;
}

class pagoSustento{
    public  $formapago;
    public  $total;
}

class sustentoRetencion{
    public  $codSustento;
    public  $codDocSustento;
    public  $numDocSustento;
    public  $fechaEmisionDocSustento;
    public  $fechaRegistroContable;
    public  $numAutDocSustento;
    public  $pagoLocExt;
    public  $tipoRegi;
    public  $paisEfecPago;
    public  $aplicConvDobTrib;
    public  $pagExtSujRetNorLeg;
    public  $pagoRegFis;
    public  $totalComprobantesReembolso;
    public  $totalBaseImponibleReembolso;
    public  $totalImpuestoReembolso;
    public  $totalSinImpuestos;
    public  $importeTotal;
    public  $impuestosDocSustento;
    public  $retenciones;
    public  $reembolsos;
    public  $pagos;
}

class totalImpuesto {
    public  $codigo; 
    public  $codigoPorcentaje; 
    public  $descuentoAdicional; 
    public  $baseImponible; 
    public  $tarifa; 
    public  $valor; 
}

class procesarComprobanteLote {
    public  $comprobanteLote;
}

class procesarComprobanteLoteResponse {
    public  $return; 
}

class respuestaComprobanteLote {
    public  $claveAccesoConsultada; 
    public  $error;
    public  $mensajeGeneral; 
    public  $respuestas; 
}

class mensajeGenerado {
    public  $identificador; 
    public  $informacionAdicional; 
    public  $mensaje; 
    public  $tipo; 
}

class respuesta {
    public  $claveAcceso; 
    public  $comprobanteID; 
    public  $estadoComprobante; 
    public  $mensajes; 
    public  $numeroAutorizacion; 
    public  $fechaAutorizacion;
}

class procesarComprobantePendiente {
    public  $comprobantePendiente; 
}

class procesarComprobantePendienteResponse {
    public  $return;
}

class procesarComprobante {
    public  $comprobante;
    public  $envioSRI;
}

class procesarComprobanteResponse {
    public  $return;
}

class obtenerComprobante{
    public  $claveAcceso;
    public  $ambiente;
}

class ProcesarComprobanteElectronico extends SoapClient {
    private static $classmap = [
        // Comprobantes
        'comprobanteGeneral'        => comprobanteGeneral::class,
        'comprobanteLote'           => comprobanteLote::class,
        'comprobantePendiente'      => comprobantePendiente::class,
        'comprobanteRetencion'      => comprobanteRetencion::class,
        'comprobanteRetencionDos'   => comprobanteRetencionDos::class,
        'factura'                   => factura::class,
        'guiaRemision'              => guiaRemision::class,
        'liquidacionCompra'         => liquidacionCompra::class,
        'notaCredito'               => notaCredito::class,
        'notaDebito'                => notaDebito::class,

        // Detalles y Adicionales
        'campoAdicional'            => campoAdicional::class,
        'compraCajaBanana'          => compraCajaBanana::class,
        'destinatario'              => destinatario::class,
        'detalleAdicional'          => detalleAdicional::class,
        'detalleFactura'            => detalleFactura::class,
        'detalleGuiaRemision'       => detalleGuiaRemision::class,
        'detalleImpuestoReeembolso' => detalleImpuestoReeembolso::class,
        'detalleLiquidacionCompra'  => detalleLiquidacionCompra::class,
        'detalleNotaCredito'        => detalleNotaCredito::class,
        'detalleReembolsoSustento'  => detalleReembolsoSustento::class,

        // Impuestos y Pagos
        'dividendo'                         => dividendo::class,
        'impuesto'                          => impuesto::class,
        'impuestoComprobanteRetencion'      => impuestoComprobanteRetencion::class,
        'impuestoComprobanteRetencionDos'   => impuestoComprobanteRetencionDos::class,
        'impuestoDocSustento'               => impuestoDocSustento::class,
        'motivo'                            => motivo::class,
        'pagos'                             => pagos::class,
        'pagoSustento'                      => pagoSustento::class,
        'sustentoRetencion'                 => sustentoRetencion::class,
        'totalImpuesto'                     => totalImpuesto::class,

        // Configuración
        'configAplicacion'  => configAplicacion::class,
        'configCorreo'      => configCorreo::class,

        // Procesamiento de Comprobantes
        'procesarComprobanteLote'               => procesarComprobanteLote::class,
        'procesarComprobanteLoteResponse'       => procesarComprobanteLoteResponse::class,
        'respuestaComprobanteLote'              => respuestaComprobanteLote::class,
        'mensajeGenerado'                       => mensajeGenerado::class,
        'respuesta'                             => respuesta::class,
        'procesarComprobantePendiente'          => procesarComprobantePendiente::class,
        'procesarComprobantePendienteResponse'  => procesarComprobantePendienteResponse::class,
        'procesarComprobante'                   => procesarComprobante::class,
        'procesarComprobanteResponse'           => procesarComprobanteResponse::class,
        'obtenerComprobante'                    => obtenerComprobante::class,
    ];

    public function __construct($wsdl = "http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl", $options = []) {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        parent::__construct($wsdl, $options);
    }

    // Métodos para procesar comprobantes
    public function procesarComprobantePendiente(procesarComprobantePendiente $parameters) {
        return $this->__soapCall('procesarComprobantePendiente', [$parameters], ['uri' => 'http://Servicio/', 'soapaction' => '']);
    }

    public function procesarComprobanteLote(procesarComprobanteLote $parameters) {
        return $this->__soapCall('procesarComprobanteLote', [$parameters], ['uri' => 'http://Servicio/', 'soapaction' => '']);
    }

    public function procesarComprobante(procesarComprobante $parameters) {
        return $this->__soapCall('procesarComprobante', [$parameters], ['uri' => 'http://Servicio/', 'soapaction' => '']);
    }

    public function obtenerComprobante(obtenerComprobante $parameters) {
        return $this->__soapCall('obtenerComprobante', [$parameters], ['uri' => 'http://Servicio/', 'soapaction' => '']);
    }
}
?>