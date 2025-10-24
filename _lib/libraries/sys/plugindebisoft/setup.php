<?php

//esta linea evita que se envien cabeceras si son las mismas
ob_start();
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

//url del sitio con woocomerce (cliente)
$url = 'https://plugin.nousproyect.com/';
//CK
$ck = 'ck_2718fcdc62c43ec6c001211fcdf44eda485d5409';
//CS
$cs = 'cs_803a747c63aa7fe203916da4de1f174568132ab7';
//setear data del cliente dueño de la tienda de woocommerce
$woocommerce = new Client($url, $ck, $cs, ['version' => 'wc/v3',]);
//Cambiar esto por los parametros del servidor donde se aloja la data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "debi";
// Crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "➜ Conectando... \n";
}
//$conn->close();

class servicesDebiClass
{
    //method for send login and get token, and logout and delete the token
    public function loginAndLogout(string $url, $user, $pass)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . '?user="' . $user . '"&pass="' . $pass . '"',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                                    "user": "' . $user . '",
                                    "pass": "' . $pass . '"
                                    }
                                    ',
            CURLOPT_HTTPHEADER => array(
                ': ',
                'Accept: application/json',
                'Authorization: Basic REVCSTpERUJJ',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return (array) json_decode(stripslashes($response));
    }

    //method for use some data on a REST Service connection with debisoft using token
    function callAPI($method, $url, $data, $token)
    {
        $curl = curl_init();
        switch ($method) {
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
            'APIKEY: ' . $token . '',
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
    //method for create the tables for the store settings
    function setupStoreData($connection, $storeName)
    {
        $queryCreate = "CREATE TABLE  IF NOT EXISTS wp_storeDebiInfo (
            id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            storeRuc VARCHAR(13) NOT NULL,
            storeName VARCHAR(30) NOT NULL,
            storeEmail VARCHAR(50) NOT NULL,
            storePhone VARCHAR(13) NOT NULL,
            storeStatus BOOLEAN NOT NULL,
            createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        //query de creacion del almacen
        if ($connection->query($queryCreate) === TRUE) {
            echo "Creando Almacen " . $storeName . " ...";
        } else {
            echo "❗Error " . $queryCreate . "<br>" . $connection->error;
        }
        $connection->close();
    }
    //method for set the store data 
    function setStoreData($connection, $storeRuc, $storeName, $storeEmail, $storePhone, $storeStatus)
    {
        //query para insertar en la tabla de datos de la empresa
        $queryInsert = "INSERT INTO wp_storeDebiInfo(storeRuc, storeName, storeEmail, storePhone, storeStatus)
    VALUES ('$storeRuc' , '$storeName' , '$storeEmail', '$storePhone' , '$storeStatus' )";
        if ($connection->query($queryInsert) === TRUE) {
            echo "Ingresando datos de la Tienda " . $storeName . " ingresados Exitosamente! :)";
        } else {
            echo "❗Error" . $queryInsert . "\n" . $connection->error;
        }
        $connection->close();
    }

    //method for obtains the store data
    function getStoreData($connection, $storeRuc)
    {
        $querySelect = "SELECT id, storeRuc, storeName, storeEmail, storePhone, storeStatus FROM wp_storedebiinfo WHERE storeRuc = '$storeRuc'";
        $result = $connection->query($querySelect);
        //query de seleccion de datos del almacen a traves de el ruc
        if ($result->num_rows > 0) {
            //output
            while ($row = $result->fetch_assoc()) {
                echo "- Id: " . $row["id"] . " Store Name: " . $row['storeName'] . " Store Email: " . $row['storeEmail'] . " Store Phone : " . $row['storePhone'] . " Store Status : " . $row['storeStatus'] . "\n";
            }
        } else {
            echo "No se encontraron Resultados";
        }
        $connection->close();
    }
    //method for get all products in the client store
    function getOrdersFromClientStore($woocommerceOBJ)
    {
        $wooResult = $woocommerceOBJ->get('orders');
        return $wooResult;
    }
    //get orders in the date parameter, this method $wooresult variable is the result like a getOrdersFromClientStore() method 
    function getOrdersFromClientStoreByDateCreated($wooResult, DateTime $date)
    {
        $data = json_decode($wooResult, true);
        foreach ($data as $value) {
            if ($value['date_created'] == $date) {
                $string = "Encontrado! su identificador es : " . $value['id'] . " y genera una venta total de $" . $value['total'];
            } else {
                $string = "no existen resultados";
            }
        }
        return $string;
    }
    //get orders on status parameter
    function getOrdersFromClientStoreByStatus($wooResult, $status)
    {
        $data = json_decode($wooResult, true);
        foreach ($data as $value) {
            if ($value['status'] == $status) {
                $string = "Encontrado! su identificador es : " . $value['id'] . " y genera una venta total de $" . $value['total'];
            } else {
                $string = "no existen resultados";
            }
        }
        return $string;
    }
    function setProductsOnClientStore($woocommerce, $product)
    {
        if ($product != null) {
            $woocommerce->post('products', $product);
            $result = 'Producto ingresado exitosamente';
        } else {
            $result = 'No existen datos dentro del producto' . $product;
        }
        return $result;
    }
    function setSellOnClientStore($woocommerce, $orden)
    {
        if ($orden != null) {
            $woocommerce->post('orders', $orden);
            $result = 'Orden ingresada exitosamente';
        } else {
            $result = 'No existen datos dentro de la orden' . $orden;
        }
        return $result;
    }
}


//datos de la empresa
$rucEmpresa = '9999999999001';
$nombreEmpresa = 'Nousclic';
$emailEmpresa = 'juan@nousclic.com';
$telefonoEmpresa = '+59398765678';
$storeStatus = true;
//data para login
$data = array("user" => 'DEBI', "pass" => 'DEBI');
$services = new servicesDebiClass();
//$setupStoreData = $service->setupStoreData($conn, $nombreEmpresa);
//$setStoreData = $services->setStoreData($conn, $rucEmpresa, $nombreEmpresa, $emailEmpresa, $telefonoEmpresa, $storeStatus);
//$getStoreData = $services->getStoreData($conn, $rucEmpresa);
$getOrders = $services->getOrdersFromClientStore($woocommerce);
$orders = json_encode($getOrders, JSON_FORCE_OBJECT);
print_r($orders . "\n");
//Recordar que el dato que se pasa aqui es del tipo datetime, puedes cambiarlo a Date si deseas pero el dato que da woocommerce es datetime 
//$date = new DateTime('2021-06-21T18:18:08');
$filteredDateOrders = $services->getOrdersFromClientStoreByDateCreated($orders, $date);
//print_r($filteredDateOrders."\n");

//datos de productos
$sku = "";
$id = "";
$name = "";
$categoryId = 'LIMP1';
$categoryName = 'Limpieza';
$category = array(
    "id" => $categoryId,
    "categoria" => $categoryName
);
$categories = ['id' => 9, 'id' => 8];
$regular_price = 15.06;
$iva = 12;
$preciocosto = 10.77;
$estado = "V";
$product = array(
    "datos" => array(
        "empresa" => $rucEmpresa,
        "codigo" => $sku,
        "codigo_auxiliar" => $id,
        "nombre_producto" => $name,
        "categoria" => $categories,
        "precio_venta" => $regular_price,
        "porcentaje_iva" => $iva,
        "costo_promedio" => $preciocosto,
        "estado" => $estado
    )
);
//$setProductsOnClientStore = $services->setProductsOnClientStore($woocommerce, $product);
//print_r($setProductsOnClientStore . "\n");
//datos de pedidos
$convenio = "DEBI";
$clientData = array(
    'name' => "Nousclic",
    'lastName' => "Sanchez",
);
//data del cliente
$clientDataJ = json_encode($clientData, JSON_FORCE_OBJECT);
$tipoIdentificacion = "RUC";
$nroIdentidicacion = "1234567899001";
$paisE = "Ecuador";
$provinciaE = "Imbabura";
$ciudadE = "Ibarra";
$direccion = "Teodoro Gomez y MAriano acosta";
$phone = "0999999999";
$movil = "0999999999";
$clientMail = "cliente@mail.com";
$paisR = "Ecuador";
$provinciaR = "Imbabura";
$ciudadR = "Ibarra";
$reciper = "Anita perez";
$identificacionREciper = "1234567898";
$direccionR = "Calle 123 siempre viva";
$phoneR = "098888888";
//datos de la forma de pago
$tipoPago = "TARJETA DE CREDITO";
$codigoSri = "01";
$valor = "13.10";
$lote = "111111";
$transaccion = "22222";
$postalCode = "100110";
//objeto de formas de pago
$forma_pago = array(
    $tipoPago,
    "codigo_sri" => $codigoSri,
    "valor" => $valor,
    "lote" => $lote,
    "transaccion" => $transaccion
);
$paisCode = substr($paisR, 0, 2);
$productArray = array(
    "datos" => array(
        "empresa" => $rucEmpresa,
        "codigo" => $ordersByWoocommerce['line_items']['sku'],
        "codigo_auxiliar" => $ordersByWoocommerce['line_items']->product_id,
        "nombre_producto" => $ordersByWoocommerce['line_items']->name,
        "categoria" => $categories, //sacar de producto
        "precio_venta" => $regular_price,
        "cantidad" => $ordersByWoocommerce['line_items']->quantity,
        "porcentaje_iva" => $iva, //llenar iva
        "costo_promedio" => $preciocosto, //llenar precio
        //"estado" => $estado//
    ),
    "datos" => array(
        "empresa" => $rucEmpresa,
        "codigo" => $ordersByWoocommerce['line_items']['sku'],
        "codigo_auxiliar" => $ordersByWoocommerce['line_items']->product_id,
        "nombre_producto" => $ordersByWoocommerce['line_items']->name,
        "categoria" => $categories, //sacar de producto
        "precio_venta" => $regular_price,
        "cantidad" => $ordersByWoocommerce['line_items']->quantity,
        "porcentaje_iva" => $iva, //llenar iva
        "costo_promedio" => $preciocosto, //llenar precio
        //"estado" => $estado//
    )
);
$shipping = array(
    "first_name" => $clientData['name'],
    "last_name" => $clientData['lastName'],
    "company" => $nombreEmpresa,
    "address_1" => $direccion,
    "address_2" => "",
    "city" => $ciudadR,
    "state" => $provinciaR,
    "postcode" => $postalCode,
    "country" => $paisCode
);
//json woocommerce data
$ordersByWoocommerce = array(
    "id" => $id, //if dont have id parameter woocmmerce generate autoincrement id
    "parent_id" => $parenId, //ever 0
    "number" => $nroOrden,
    "order_key" => "wc_order_58d2d042d1d",
    "created_via" => "rest-api",
    "version" => "3.0.0",
    "status" => "processing",
    "currency" => "USD",
    "date_created" => "2017-03-22T16:28:02",
    "date_created_gmt" => "2017-03-22T19:28:02",
    "date_modified" => "2017-03-22T16:28:08",
    "date_modified_gmt" => "2017-03-22T19:28:08",
    "discount_total" => "0.00",
    "discount_tax" => "0.00",
    "shipping_total" => "10.00",
    "shipping_tax" => "0.00",
    "cart_tax" => "1.35",
    "total" => "29.35",
    "total_tax" => "1.35",
    "prices_include_tax" => false,
    "customer_id" => 0,
    "customer_ip_address" => "",
    "customer_user_agent" => "",
    "customer_note" => "",
    "billing" => array(
        "first_name" => "John",
        "last_name" => "Doe",
        "company" => "",
        "address_1" => "969 Market",
        "address_2" => "",
        "city" => "San Francisco",
        "state" => "CA",
        "postcode" => "94103",
        "country" => "US",
        "email" => "john.doe@example.com",
        "phone" => "(555) 555-5555"

    ),
    "shipping" => array(
        "first_name" => "John",
        "last_name" => "Doe",
        "company" => "",
        "address_1" => "969 Market",
        "address_2" => "",
        "city" => "San Francisco",
        "state" => "CA",
        "postcode" => "94103",
        "country" => "US"
    ),
    "payment_method" => "bacs",
    "payment_method_title" => "Direct Bank Transfer",
    "transaction_id" => "",
    "date_paid" => "2017-03-22T16:28:08",
    "date_paid_gmt" => "2017-03-22T19:28:08",
    "date_completed" => null,
    "date_completed_gmt" => null,
    "cart_hash" => "",
    "meta_data" => [
        array(
            "id" => 13106,
            "key" => "_download_permissions_granted",
            "value" => "yes"
        )
    ],
    "line_items" => [
        array(
            "id" => 315,
            "name" => "Woo Single #1",
            "product_id" => 93,
            "variation_id" => 0,
            "quantity" => 2,
            "tax_class" => "",
            "subtotal" => "6.00",
            "subtotal_tax" => "0.45",
            "total" => "6.00",
            "total_tax" => "0.45",
            "taxes" => [
                array(
                    "id" => 75,
                    "total" => "0.45",
                    "subtotal" => "0.45"
                )
            ],
            "meta_data" => [],
            "sku" => "",
            "price" => 3
        ),
        array(
            "id" => 316,
            "name" => "Ship Your Idea &ndash; Color: Black, Size: M Test",
            "product_id" => 22,
            "variation_id" => 23,
            "quantity" => 1,
            "tax_class" => "",
            "subtotal" => "12.00",
            "subtotal_tax" => "0.90",
            "total" => "12.00",
            "total_tax" => "0.90",
            "taxes" => [
                array(
                    "id" => 75,
                    "total" => "0.9",
                    "subtotal" => "0.9"
                )
            ],
            "meta_data" => [
                array(
                    "id" => 2095,
                    "key" => "pa_color",
                    "value" => "black"
                ),
                array(
                    "id" => 2096,
                    "key" => "size",
                    "value" => "M Test"
                )
            ],
            "sku" => "Bar3",
            "price" => 12
        )
    ],
    "tax_lines" => [
        array(
            "id" => 318,
            "rate_code" => "US-CA-STATE TAX",
            "rate_id" => 75,
            "label" => "State Tax",
            "compound" => false,
            "tax_total" => "1.35",
            "shipping_tax_total" => "0.00",
            "meta_data" => []
        )
    ],
    "shipping_lines" => [
        array(
            "id" => 317,
            "method_title" => "Flat Rate",
            "method_id" => "flat_rate",
            "total" => "10.00",
            "total_tax" => "0.00",
            "taxes" => [],
            "meta_data" => []
        )
    ],
    "fee_lines" => [],
    "coupon_lines" => [],
    "refunds" => [],
    "_links" => array(
        "self" => [
            array(
                "href" => "https://example.com/wp-json/wc/v3/orders/727"
            )
        ],
        "collection" => [
            array(
                "href" => "https://example.com/wp-json/wc/v3/orders"
            )
        ]
    )
);

$order =  array(
    "id" => $ordersByWoocommerce['id'],
    "parent_id" => '0',
    "convenio" => $convenio,
    "empresa" => $rucEmpresa,
    "estado" => $ordersByWoocommerce['status'],
    "order_key" => $ordersByWoocommerce['order_key'],
    "tipo_entrega" => $shipping,
    "currency" => $ordersByWoocommerce['currency'],
    "date_created" => $ordersByWoocommerce['date_created'],
    "shipping_total" => $ordersByWoocommerce['shipping_total'], //opcional
    "cliente" => array(
        "empresa" => $rucEmpresa,
        "nombre" => $ordersByWoocommerce['billing']['first_name'] . " " . $ordersByWoocommerce['billing']['last_name'],
        "tipo_identificacion" => $tipoIdentificacion,
        "identificacion" => $nroIdentidicacion,
        "pais" => $ordersByWoocommerce['billing']['country'],
        "provincia" => $ordersByWoocommerce['billing']['state'],
        "ciudad" => $ordersByWoocommerce['billing']['city'],
        "direccion" => $ordersByWoocommerce['billing']['address_1'] . " - " . $ordersByWoocommerce['address_2'],
        "telefono" => $ordersByWoocommerce['billing']['phone'],
        "celular" => $movil,
        "email" => $ordersByWoocommerce['billing']['email']
    ),
    "direccion_envio" => array(
        "persona_recibe" => $ordersByWoocommerce['shipping']['first_name'] . " " . $ordersByWoocommerce['shipping']['last_name'],
        "identificacion" => $identificacionREciper, //llenar
        "pais" => $ordersByWoocommerce['shipping']['country'],
        "provincia" => $ordersByWoocommerce['shipping']['state'],
        "ciudad" => $ordersByWoocommerce['shipping']['city'],
        "direccion" => $ordersByWoocommerce['shipping']['addres_1'] . " - " . $ordersByWoocommerce['shipping']['addres_2'],
        "telefono" => $phoneR, //llenar
    ),
    "productos" => $productArray,
    "pagos" => $forma_pago

);
//$setSellOnClientStore = $services->setSellOnClientStore($woocommerce, $order);
//print_r($setSellOnClientStore . "\n");

//prueba de obtencion del token con DEBISOFT

//url Servicio a conectar
$urlDebiLogin = 'http://debisoft.dyndns.org:85/ws_debifact/login';
$urlDebiLogout = 'http://debisoft.dyndns.org:85/ws_debifact/logOut';
//userData
$user = "DEBI";
$password = "DEBI";
//$login = $services->loginAndLogout($urlDebiLogin, $user, $password);
//$loginToken = $login['datos']->token;
//print_r($loginToken);
//metodo de logout 
//$logoutResponse = $services->loginAndLogout($urlDebiLogout, $user, $password);
//print_r($logoutResponse);
//callback ejemplo CON PEDIO NUEVO a DEBISOFT
$POST = 'POST';
//$pedidoNuevo = $services->callAPI($POST, $ventaURL, $pedidoObj, $token);
$urlProductoNuevo =  'http://debisoft.dyndns.org:85/ws_debifact/productos_venta/nuevo';
//$productoNuevo = $services->callAPI($POST, $urlProductoNuevo, $product, $loginToken);
$urlCategoriaNuevo =  'http://debisoft.dyndns.org:85/ws_debifact/categoria_productos/nuevo';
//$categoriaNueva = $services->callAPI($POST, $urlCategoriaNuevo, $category, $loginToken);
//$reporteGenerales = $woocommerce->get('reports');
$dateRange = [
    'date_min' => '2020-05-03',
    'date_max' => '2020-07-30'
];
//$reporteVentas = $woocommerce->get('reports/sales', $dateRange);
//print_r(json_encode($reporteVentas));
$month = [
    'period' => 'last_month'
];
//$reporteVendedoresMesuales = $woocommerce->get('reports/top_sellers', $month);
//$reporteTotalClientes = $woocommerce->get('reports/customers/totals');
//$reporteTotalOrdenes = $woocommerce->get('reports/orders/totals');
//$reporteTotalProductos = $woocommerce->get('reports/products/totals');
//$reporteTotalRevisiones = $woocommerce->get('reports/reviews/totals');

//documentation
//https://woocommerce.github.io/woocommerce-rest-api-docs/?php#list-all-orders