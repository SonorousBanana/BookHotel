<?php

header('Access-Control-Allow-Origin:*');
header("content-type:application/json");
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Athorization, X-Request-Width');

include('function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){

        $email = $_GET['email'];
        $reservation_start = $_GET['start'];
        $reservation_end = $_GET['end'];
        $reservation_name = $_GET['reservation_name'];
    
        $sql = "SELECT * FROM reservations WHERE reservation_name = '$reservation_name' AND 
                (reservation_start BETWEEN '$reservation_start' AND '$reservation_end' OR 
                reservation_end BETWEEN '$reservation_start' AND '$reservation_end')";
    
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $res = "Not Available";
            echo "Not Available";
            //echo $email;
        } else {
            $res = "Available";
        echo $res;
        //echo $email;
        }
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