<?php 
ob_start();
require __DIR__ . '/vendor/autoload.php';
use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException ;

class serviceWordPressClass{
    var $woocommerce;

    function __construct($url,$ck,$cs,$options){
        $this->woocommerce= new Client( $url, 
                                        $ck, 
                                        $cs, 
                                        $options);
    }
    
    function callAPI($w_verbo,$w_uri,$w_data){
        try{
            switch ($w_verbo) {
            case 'GET':
                $wooResult = $this->woocommerce->get($w_uri);
                break;
            case 'POST':
                $wooResult = $this->woocommerce->post($w_uri,$w_data);
                break;
            case 'PUT':
                $wooResult = $this->woocommerce->put($w_uri,$w_data);
                break;    
            case 'DELETE':
                $wooResult = $this->woocommerce->delete($w_uri,$w_data);
                break;    
            default:
                $wooResult = $this->woocommerce->get($w_uri);
                break;
            }    
            $o_respuesta=array('error'=>'0','mensaje'=>'','datos'=>json_encode($wooResult));
        }catch(HttpClientException $e){
            $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
        }
        return $o_respuesta;
    }
          
}
    
    $url = 'https://hydrogenecuador.com/';
    //CK
    $ck = 'ck_51d952d838466951d3db6e614da82de35dec99b0';
    //CS
    $cs = 'cs_298edaca74b32fe7409b009cf8bd01b8486f71f9';
    $options= array(
                'version'     => 'wc/v3',
                'verify_ssl'  => false,
            );
    $service = new serviceWordPressClass($url,$ck,$cs,$options);
    //listar Productos
    // $getdata = $service-> callAPI('GET','products/3154',[]);
    // if ($getdata['error']=='0'){
    //     $datos=json_decode($getdata['datos']);
    //     var_dump($datos);
    //     // foreach($datos as $item){
    //     //     echo $item->id.' - '.$item->name;
    //     // }
    // }else{
    //     echo $getdata['mensaje'];
    // }    
    //ELiminar Categoria
    // $w_data=array(
    //     'force'=>true,
    // );
    // $id=64;
    // $getdata = $service-> callAPI('DELETE','products/categories/'.$id,$w_data);
    // if ($getdata['error']=='0'){
    //     $datos=json_decode($getdata['datos']);
	// 	var_dump($datos);
    // }else{
    //     echo $getdata['mensaje'];
    // }    
    $getdata = $service-> callAPI('GET','taxes',[]);
    if ($getdata['error']=='0'){
        $datos=json_decode($getdata['datos']);
        //var_dump($datos);
        foreach($datos as $item){
            var_dump($item);
        }
    }else{
        echo $getdata['mensaje'];
    }    
    
    
?>
