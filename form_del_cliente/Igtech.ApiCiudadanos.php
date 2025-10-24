<?php
//__NM____NM__FUNCTION__NM__//
class  Persona{
  public $identificacion;
  public $nombre;
  public $nombre_comercial;
  public $obligado_contabilidad;
  public $tipo_contribuyente;
  public $provincia;
  public $canton;
  public $direccion;
  public $correo;
  public $telefono;

  public function __construct($identificacion, $nombre, $nombre_comercial, $obligado_contabilidad, $tipo_contribuyente, $provincia, $canton, $direccion, $correo, $telefono){
    $this->identificacion = $identificacion;
    $this->nombre=$nombre;
    $this->nombre_comercial=$nombre_comercial;
    $this->obligado_contabilidad=$obligado_contabilidad;
    $this->tipo_contribuyente=$tipo_contribuyente;
    $this->provincia=$provincia;
    $this->canton=$canton;
    $this->direccion=$direccion;
    $this->correo=$correo;
    $this->telefono=$telefono;
  }
}

function consultaNombres($id,$url="https://debisoft.technology/ws_ciudadanos/ciudadano/"){
	$curl = curl_init();
	curl_setopt_array($curl, array(
									CURLOPT_URL =>  $url.$id,
									CURLOPT_RETURNTRANSFER => true,
									CURLOPT_ENCODING => '',
									CURLOPT_MAXREDIRS => 10,
									CURLOPT_TIMEOUT => 0,
									CURLOPT_FOLLOWLOCATION => true,
									CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									CURLOPT_CUSTOMREQUEST => 'GET',
									CURLOPT_HTTPHEADER => array(
									  'accept: application/json',
									  'Content-Type: application/json',
									  'User-Agent: Mozilla/5.0'
									),
							));
	$response = curl_exec($curl);
	curl_close($curl);
	return json_decode($response, true);
}

function insertUpdateCiudadano ($persona,$url="https://debisoft.technology/ws_ciudadanos/ciudadano/nuevo"  ){
	$data = json_encode($persona);
	$curl = curl_init();
	curl_setopt_array($curl, array(
								  CURLOPT_URL => $url,
								  CURLOPT_RETURNTRANSFER => true,
								  CURLOPT_ENCODING => '',
								  CURLOPT_MAXREDIRS => 10,
								  CURLOPT_TIMEOUT => 0,
								  CURLOPT_FOLLOWLOCATION => true,
								  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
								  CURLOPT_CUSTOMREQUEST => 'POST',
								  CURLOPT_POSTFIELDS => $data,
								  CURLOPT_HTTPHEADER => array(
									'Accept: application/json',
									'Content-Type: application/json'
								  ),
								));
	$response = curl_exec($curl);
	curl_close($curl);
	return json_decode($response, true);
}

?>