<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['submit']))
    {
       
        $username=$_POST['username'];
        $password=$_POST['password'];
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $country=$_POST['country'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $email = $_POST['email'];
        $type = $_POST['type'];
       
         $insert = mysqli_query($conn,"INSERT INTO users
         (firstname,lastname,country,city,address,email,type,username,password)   VALUES ('$firstName','$lastName','$country','$city','$address','$email','$type','$username','$password')");
 
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