<?php

// connect to database
//$db = mysqli_connect('localhost', 'root', '', 'panorama_db');

// register system functions START

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

// register system functions END

function display_error()
{
	global $errors;

	if (count($errors) > 0) {
		echo '<div class="error">';
		foreach ($errors as $error) {
			echo $error . '<br>';
		}
		echo '</div>';
	}
}
//Απο δω και κατω χρησιμοποιείται μονο το sign in. τα υπολοιπα ηταν προσπάθειες για διαφορετικη και πιο δυσκολη λειτουργία του site που επιλεξαμε να μην ακολουθησουμε στη συνεχεια λογο δυσκολίας.
//δεν τα διαγράψαμε για να δείτε και αυτή τη προσπάθεια.
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	} else {
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    
    if (count(fetchAll($query)) > 0) { //this is to catch unknown error.
      //foreach (fetchAll($query) as $row) {
       // if ($row['email'] == $email && $row['password'] == $password) {
          $_SESSION['login'] = true;
         // $_SESSION['type'] = $row['type'];
          $_SESSION['email'] = $email;
          
          header("Location: http://localhost/panorama_hotel/booking/booking.php")?>
          <script type="text/javascript">
            var email = document.getElementById("inputEmail").value;
              localStorage.setItem("email", email);
              alert('loged in');
              window.location.href="home.php";
          </script>
    <?php
			exit;
            //die();
         // echo "Location: https://localhost/panorama_hotel/booking/booking.php";
        } else {
          echo "<script>alert('Wrong login details.')</script>";
        }
        
      }
// call the login() function if register_btn is clicked
/*if (isset($_POST['login_btn'])) {
	login();
}
*/
// LOGIN USER
/*function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// Isform is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE userName='$username' AND userPassword='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['userType'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/admin_home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
*/
