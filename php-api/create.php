<?php

header('Access-Control-Allow-Origin:*');
header("content-type:application/json");
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Athorization, X-Request-Width');

include('function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];
$email = $_POST["email"];
if($requestMethod == "POST"){

    //$email = 'giorgosathens1997@hotmail.com';
   $inputData = json_decode(file_get_contents("php://input"), true);
   if(empty($inputData)){

        $storeReservation = storeReservation($_POST);
   }else{
        $storeReservation = storeReservation($inputDatat);
       
   }
   
   echo $storeReservation;
   header("Location: http://localhost/panorama_hotel/booking/booking.php?email=$email");

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