<?php

header('Access-Control-Allow-Origin:*');
header("content-type:application/json");
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Athorization, X-Request-Width');

include('function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){

    $email = $_REQUEST['email'];
    $reservation = getReservation($email);
    echo $reservation;


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