<?php
function ws_prueba(){
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://igtech.dyndns.org:81/ws_debisoft/login',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>'{
		"user":"RUNRUMM",
		"pass":"RUNRUMM"
		}',
		CURLOPT_HTTPHEADER => array(
		'Content-Type: application/json',
		'Accept: application/json'
		),
	));

	$response = curl_exec($curl);
	curl_close($curl);
	return $response;
}

function ws_login($i_uri){
	try{
		$w_uri=$i_uri;

		$curl = curl_init();


		curl_setopt_array($curl, array(
			  CURLOPT_URL => 			$w_uri,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => 		"",
			  CURLOPT_MAXREDIRS => 		10,
			  CURLOPT_TIMEOUT => 		0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => 	CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'POST',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
	}catch(Throwable $e){
        return $e->getMessage();
    }	
}	

function ws_cambiarEstadoPedido($i_uri,$i_metodo,$i_verbo,$i_headers,$i_body){
	try{	
		$curl = curl_init();
		$w_uri=$i_uri.$i_metodo."?".
				"code_sale_invoice=".$i_body['code_sale_invoice'].
				"&code_order_status=".$i_body['code_order_status'].
				"&code_order=".$i_body['code_order'];
		curl_setopt_array($curl, array(
			  CURLOPT_URL => $w_uri,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => $i_verbo,
			  CURLOPT_HTTPHEADER => $i_headers,
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
	}catch(Throwable $e){
        return $e->getMessage();
    }
}
//$respuesta=ws_login('https://smartcab-test.server.runrumm.com/users/login?user=6S6YSUfA9E4nuKnZRfqAeg%3D%3D&password=6S6YSUfA9E4nuKnZRfqAeg%3D%3D&type=isAdmin');
$respuesta=ws_login('https://smartcab.server.runrumm.com/users/login?user=pq07S%2BwIblx5ANgAB0ji5zsoOY9iFsTd5m2mFspGobk%3D&password=cKGQN96T32Ctl8qvux4gLA%3D%3D&type=isAdmin');
//$respuesta=ws_prueba();
var_dump($respuesta);
?>