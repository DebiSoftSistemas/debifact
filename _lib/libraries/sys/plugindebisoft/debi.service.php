<?php 

class servicesDebiClass{
    var $url_serviciodebi;
    var $convenio;
    var $user_debi;
    var $pass_debi;
    
    function __construct($url,$convenio,$user,$pass){
        $this->url_serviciodebi=$url;
        $this->convenio=$convenio;
        $this->user_debi=$user;
        $this->pass_debi=$pass;
    }

    function login(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
                                        CURLOPT_URL => $this->url_serviciodebi.'login',
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => '',
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 0,
                                        CURLOPT_FOLLOWLOCATION => true,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => 'POST',
                                        CURLOPT_POSTFIELDS => '{
                                                                "user": "' . $this->user_debi . '",
                                                                "pass": "' . $this->pass_debi . '"
                                                                }
                                                                ',
                                        CURLOPT_HTTPHEADER => array(
                                            'Accept: application/json',
                                            'Content-Type: application/json'
                                        ),
                                )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        return (array) json_decode(stripslashes($response));
    }

    function logOut($token){
        $curl = curl_init();

        curl_setopt_array($curl, array(
                                        CURLOPT_URL => $this->url_serviciodebi.'logOut',
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => '',
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 0,
                                        CURLOPT_FOLLOWLOCATION => true,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => 'POST',
                                        CURLOPT_HTTPHEADER => array(
                                                                    'Content-Type: application/json',
                                                                    'Accept: application/json',
                                                                    'Authorization: ' . $token . ''
                                                                ),
                                    )
        );

        $response = curl_exec($curl);

        curl_close($curl);
        return (array) json_decode(stripslashes($response));
    }
    
    function callAPI($verbo, $metodo, $data, $token){
        $curl = curl_init();
        $url=$this->url_serviciodebi.$metodo;
        switch ($verbo) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        //header data
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: ' . $token . '',
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // EXECUTE:
        $result = curl_exec($curl);
        if (!$result) {
            die("❗Conexión Fallida");
        }
        curl_close($curl);
        return $result;
        echo 'DEBI Says: Operation Successfull';
    }
 
}   
// $services = new servicesDebiClass('http://localhost:81/ws_debifact/',
//                                   'WORDPRESS',
//                                   '0f572791710050be12cd7c8a3beeb267',
//                                   'da48febfb810af4d0580d3df58b79495');

// $login = $services->login();
// $loginToken = $login['datos']->token;
// // print_r($loginToken);
// // $data=array(
// //     'identificacion'=>'1712873890001',
// //     'nombre'=>'IVAN JAVIER GONZALEZ PLACENCIA',
// //     'nombre_comercial'=>'IVAN JAVIER GONZALEZ PLACENCIA',
// //     'nombre_fantasia'=>'IGTECHNOLOGY',
// //     'obligado_contabilidad'=>'NO',
// //     'tipo_contribuyente'=>'PERSONA NATURAL',
// //     'provincia'=>'IMBABURA',
// //     'canton'=>'IBARRA',
// //     'parroquia'=>'CARANQUI',
// //     'calle_principal'=>'HERNAN GONZALEZ DE SAA',
// //     'numero'=>'24145',
// //     'calle_secundaria'=>'CORY CORY',
// // );

// $ciudadano=$services->callAPI('GET','ciudadano/1712873890','',$loginToken);
// var_dump($ciudadano);

// $service->logOut($loginToken);
                                  
// $url = "http://nemesis-services.dyndns.org:8030/NemesisService/NServices.asmx?WSDL";
// $datos=$services->consultaNombres($url,'1712873890001');
// var_dump($datos);
//
?>