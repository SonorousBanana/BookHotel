<?php
    include "../config/dbconnect.php";
  
    if(isset($_POST['submit']))
    {
        $id= $count;
        $room_type = $_POST['room_type'];
        $price = $_POST['room_price'];
            

        $insert = mysqli_query($conn,"INSERT INTO rooms
        (room_id, room_type ,room_price) 
        VALUES ('$id','$room_type','$price')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?size=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?size=success");
         }

     
    }
        
?>