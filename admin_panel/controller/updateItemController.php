<?php
    include_once "../config/dbconnect.php";

   
    $room_type=$_POST['room_type'];
    $price = $_POST['room_price'];
   
    $updateItem = mysqli_query($conn,"UPDATE rooms SET room_price='$price' WHERE room_type='$room_type'");


    if($updateItem)
    {
        header("Location: http://localhost/panorama_hotel/admin_panel/#products");;
    }
        echo "Wrong Value";
     
?>