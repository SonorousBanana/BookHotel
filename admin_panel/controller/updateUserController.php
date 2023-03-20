<?php
    include_once "../config/dbconnect.php";

   

    $id=$_POST['record'];

    // again
    $sql = "UPDATE users SET type='admin' WHERE id='$id';";
    
    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
     
?>