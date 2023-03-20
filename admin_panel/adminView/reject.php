<?php

include "../config/dbconnect.php";
//include "../includes/header.php";
//include '../functions.php';

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

$query = "DELETE FROM requests WHERE id = '$id'";
//$query = "DELETE FROM requests WHERE requests.id = $id";
if (performQuery($query)) {
	header("Location: http://localhost/panorama_hotel/admin_panel/");
    echo "Account has been rejected.";
} else {
    echo "Unknown error occured. Please try again.";
}

?>
<br /><br />
<a href="http://localhost/panorama_hotel/admin_panel/">Back</a>