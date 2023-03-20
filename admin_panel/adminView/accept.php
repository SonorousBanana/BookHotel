<?php
include "../config/dbconnect.php";
//include "../adminHeader.php";
//include('../includes/functions.php');

define('DBINFO', 'mysql:host=localhost;dbname=panorama_db');
define('DBUSER', 'root');
define('DBPASS', '');

function performQuery($query){
	$con = new PDO(DBINFO,DBUSER,DBPASS);
	$stmt = $con->prepare($query);
	if($stmt->execute()){
		return true;
	}else{
		return false;
	}
}

function fetchAll($query)
{
	$con = new PDO(DBINFO, DBUSER, DBPASS);
	$stmt = $con->query($query);
	return $stmt->fetchAll();
}


$id = $_GET['id'];
$query = "SELECT * FROM requests WHERE id = '$id'";
if (count(fetchAll($query)) > 0) {
    foreach (fetchAll($query) as $row) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $country = $row['country'];
        $city = $row['city'];
        $address = $row['address'];
        $username = $row['username'];
        $password = $row['password'];
        
        
        $query = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `country`, `city`, `address`, `email`, `type`, `username`, `password`) 
        VALUES (NULL, '$firstname', '$lastname', '$country', '$city', '$address', '$email', 'user', '$username', '$password');";
    }
    $query .= "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
    if (performQuery($query)) {
        header("Location: http://localhost/panorama_hotel/admin_panel/");
        echo "Account has been accepted.";
        
    } else {
        echo "Unknown error occured. Please try again.";
    }
} else {
    echo "Error occured.";
}

?>
<br /><br />
<a href="http://localhost/panorama_hotel/admin_panel/">Admin Panel</a>