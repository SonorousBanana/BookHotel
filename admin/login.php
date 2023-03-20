<?php
session_start(); //we need session for the log in thingy XD 
include "../connection.php";
//include "../includes/footer.php";
//include "../includes/header.php";
//include('../includes/functions.php');
?>
<!Doctype html>
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title><?php //echo $page_title; 
          ?>Panorama Hotel - Best Hotel in the center of Athens</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/panorama_hotel/includes/css/public.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/panorama_hotel/includes/css/panorama_home.css">

  <nav class="navbar navbar-default egr_navbar">
    <div class="container-fluid">

       <ul class="nav navbar-nav navbar-left">
        <li><a class="eg_logo_link" href="/panorama_hotel/">Panorama Hotel</a></li>
        <li><a href="http://localhost/panorama_hotel/contact_form.php">Contact Us</a></li>
        <li><a href="http://localhost/panorama_hotel/rooms/room.php">Rooms</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a class="" href="http://localhost/panorama_hotel/admin/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="http://localhost/panorama_hotel/admin/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>      

      </ul>

    </div>
  </nav>
  <script type="text/javascript">
    function submitForm1() {
            var email = document.getElementById("inputEmail").value;
              localStorage.setItem("email", email);
    }
          </script>

</head>
<body class="text-center">
  <?php

  if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
       
       $row = mysqli_fetch_assoc($result);
       $Type = $row["type"];
       if ($Type == "user") {
        $_SESSION['login'] = true;
        $_SESSION['type'] = $row['type'];
        $_SESSION['email'] = $email;
        global $email;
        header("Location: http://localhost/panorama_hotel/booking/booking.php?email=$email");
    
        exit;
       
      }else if ($Type == "admin") {//if (count(fetchAll($query2)) > 0) {
        $_SESSION['login'] = true;
        $_SESSION['type'] = $row['type'];
        $_SESSION['email'] = $email;
  
        header("Location: http://localhost/panorama_hotel/admin_panel/");
        exit;
      }
     } else {
          echo "<script>alert('Wrong login details.')</script>";
        }
        
      }
 
  ?>
  <div class="container">
    <form method="post" class="form-signin" action="#">
      
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>


      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <button name="signin" onclick="submitForm1()" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <a href="signup.php" class="mt-5 mb-3 text-muted">Create an account</a>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../booking/script.js"></script>
</body>

</html>