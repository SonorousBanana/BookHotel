<?php

require 'connection.php';


function storeReservation($reservationInput){
    global $conn;

    $reservation_start = mysqli_real_escape_string($conn, $reservationInput['start']);
    $reservation_end = mysqli_real_escape_string($conn, $reservationInput['end']);
    $reservation_name = mysqli_real_escape_string($conn, $reservationInput['reservation_name']);
    $reservation_email = mysqli_real_escape_string($conn, $reservationInput['email']);

    $sql = "SELECT * FROM reservations WHERE reservation_name = '$reservation_name' AND 
                (reservation_start BETWEEN '$reservation_start' AND '$reservation_end' OR 
                reservation_end BETWEEN '$reservation_start' AND '$reservation_end')";
    
    $result1 = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result1) > 0) {
        $data = [
            'status' => 200,
            'message' => 'No Available this room on this date',

        ];
        //header("HTTP/1.0 200 No Available this room on this date");
        return json_encode($data);
    } else {
        $query = "INSERT INTO reservations (reservation_start,reservation_end,reservation_name,reservation_email) VALUES ('$reservation_start','$reservation_end','$reservation_name','$reservation_email')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $data = [
                'status' => 201,
                'message' => 'reservation created',

            ];
            //header("HTTP/1.0 201 reservation created");
            return json_encode($data);
        } else {
            $data = [
                'status' => 500,
                'message' => 'Internal Server Error',

            ];
           // header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }
    }
}


function getReservation($email){

    global $conn;
    $query = "SELECT * FROM reservations WHERE reservation_email='$email'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){

        if(mysqli_num_rows($query_run) > 0){

            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

            $data /*= [
             'status' => 200,
             'message' => 'reservation list fetched succ',
             'data' */= $res;
        
            //];
            header("HTTP/1.0 200 reservation list fetched succ");
            return json_encode($data,JSON_PRETTY_PRINT);


        }else{
            $data = [
                'status' => 404,
                'message' => 'No reservation found',
        
            ];
            header("HTTP/1.0 404 No reservation found");
            return json_encode($data);
        }

    }else{
        $data = [
            'status' => 405,
            'message' => 'Internal Server Error',
    
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
    
}

function getPrice($roomtype){

    global $conn;
    $query = "SELECT room_price FROM rooms WHERE room_type='$roomtype'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){

        if(mysqli_num_rows($query_run) > 0){

            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

            $data /*= [
             'status' => 200,
             'message' => 'reservation list fetched succ',
             'data' */= $res;
        
            //];
            header("HTTP/1.0 200 reservation list fetched succ");
            return json_encode($data,JSON_PRETTY_PRINT);


        }else{
            $data = [
                'status' => 404,
                'message' => 'No reservation found',
        
            ];
            header("HTTP/1.0 404 No reservation found");
            return json_encode($data);
        }

    }else{
        $data = [
            'status' => 405,
            'message' => 'Internal Server Error',
    
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
    
}

?>