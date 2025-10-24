<?php
//__NM____NM__FUNCTION__NM__//
class mensaje{
	public $phone;
	public $message;
	public function __construct($phone,$message){
    	$this->phone = $phone;
    	$this->message=$message;
   	}

}

function enviar_mensaje ($mensaje,$url="http://26.63.25.199:3001/lead"  ){
	$data = json_encode($mensaje);
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