<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM users where id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"user Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>