<?php

header('Access-Control-Allow-Origin:*');
header("content-type:application/json");
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Athorization, X-Request-Width');

include('function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){

    //$roomtype = 'deluxe';
    $roomtype = $_REQUEST['reservation_name'];
    $price = getPrice($roomtype);
    echo $price;


}
else
{
    $data = [
        'status' => 405,
        'message' => $requestMethod . 'Method Not Allowed',

    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}

?>