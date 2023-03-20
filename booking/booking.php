

<html>
<head>
  <title>Panorama Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Javascript -->
  <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <script type="text/javascript" src="./includes/jquery/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

  <!-- API -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//geodata.solutions/includes/countrystatecity.js"></script>

   <!-- CSS - External -->
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Extra -->

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="https://localhost/panorama_hotel/includes/css/footer.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/panorama_hotel/includes/css/panorama_home.css">
  <link rel="stylesheet" type="text/css" href="https://localhost/panorama_hotel/includes/css/register_page.css">
  <link rel="stylesheet" type="text/css" href="https://localhost/panorama_hotel/includes/css/admin_home.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/panorama_hotel/includes/css/public.css">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/panorama_hotel/booking/booking.css">
  <nav class="navbar navbar-default egr_navbar">
    <div class="container-fluid">

       <ul class="nav navbar-nav navbar-left">
        <li><a class="eg_logo_link" href="">Panorama Hotel</a></li>
        <li><a href="http://localhost/panorama_hotel/contact_form.php">Contact Us</a></li>
        <li><a href="http://localhost/panorama_hotel/rooms/room.php">Rooms</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="http://localhost/panorama_hotel/booking/booking.php"><span class="glyphicon glyphicon-circle-arrow-right"></span> Booking</a></li>-->
        <!--<li><a class="" href="http://localhost/panorama_hotel/admin/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
        <li><a href="http://localhost/panorama_hotel/admin/login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>

    </div>
  </nav>
</head>

<?php


// home page
$page_itle="Hotel Panorama";
//include "../includes/header.php";



$reservation_email = $_GET['email'];

?>
<body>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <h2>My Booking</h2>
        <p>for anything problem with your booking please communicate with us</p>            
        <table class="table table-bordered">
        <thead class="table">
        <tr>
        <th>Room Type</th>
        <th>Date Arived</th>
        <th>Date Departure</th>
        </tr>
        </thead>
        <tbody id="table_body">
                         
        </tbody>
        </table>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
      <h2>Check your booking</h2>
        <form method="GET">
            <div class="datepicker">
                <div class="date-select">
                    <p>From</p>
                    <input type="date" name ="start" id ="start" class="datepicker-1" value="dd / mm / yyyy" required>
                    <img src="img/calendar.png" alt="">
                </div>
                <div class="date-select to">
                    <p>To</p>
                    <input type="date" name ="end" id ="end" class="datepicker-2" value="dd / mm / yyyy" required>
                    <img src="img/calendar.png" alt="">
                </div>
            </div>
            <div class="room-selector">
                <p>Room</p>
                <select name ="reservation_name1" id="reservation_name" class="suit-select" required>
                    <option name ="reservation_name" id="reservation_name" value="Superior">Superior Room</option>
                    <option name ="reservation_name" id="reservation_name" value="Exclusive">Exclusive Room</option>
                    <option name ="reservation_name" id="reservation_name" value="Standard">Standard Room</option>
                    <option name ="reservation_name" id="reservation_name" value="Deluxe">Deluxe Room</option>
                    <option name ="reservation_name" id="reservation_name" value="Junior Suite">Junior Suite</option>
                    <option name ="reservation_name" id="reservation_name" value="Deluxe Suite">Deluxe Suite</option>
                </select>
            </div><br>
            <div id="mail">
            <input type="email" name="email" id = "email" value="<?php echo $reservation_email;?>"required><br>
            </div>
          
            <br>
            <button type="submit" onclick="check1()" class="btn">Check Availability <i class="lnr lnr-arrow-right"></i></button>
            
            </form>
            
            <?php
              if (isset($_GET['start']) && isset($_GET['end']) && isset($_GET['reservation_name1'])) {
                  $reservation_name = $_GET['reservation_name1'];
                  $start = $_GET['start'];
                  $end = $_GET['end'];
                  $reservation_email = $_GET['email'];
                  $result = file_get_contents("http://localhost/panorama_hotel/php-api/check.php?reservation_name=$reservation_name&start=$start&end=$end&email=$reservation_email");
                  echo "Availability: <br><br>Room: $reservation_name Room<br>From: $start<br>To: $end<br>Is: $result<br><br>";
                  
              }
              ?>
            
      </div>
    </div>


    <div class="col-sm-4"> 
      <div id="book" class="panel panel-success">
      <h2>Book a Room:</h2>
      <form id ="form1" action="http://localhost/panorama_hotel/php-api/create.php" method="post"> <!-- -->
            <p>From</p>
            <input type="date" name ="start" id="start1" class="datepicker-1" value="dd / mm / yyyy" required><br>
            <p>To</p>
            <input type="date" name ="end" id="end1" class="datepicker-2" value="" required><br>
            <div class="room-selector">
                <p>Room</p>
                <select name ="reservation_name" id="reservation_name" class="suit-select" required>
                    <option value="Superior">Superior Room</option>
                    <option name ="reservation_name" id="reservation_name" value="Exclusive">Exclusive Room</option>
                    <option name ="reservation_name" id="reservation_name" value="Standard">Standard Room</option>
                    <option name ="reservation_name" id="reservation_name" value="Deluxe">Deluxe Room</option>
                    <option name ="reservation_name" id="reservation_name" value="Junior Suite">Junior Suite</option>
                    <option name ="reservation_name" id="reservation_name" value="Deluxe Suite">Deluxe Suite</option>
                </select>
            </div>
            <div id="mail">
            <p>Confirm your email</p>
            <input type="email" name="email" id = "email" value="<?php echo $reservation_email;?>" required><br>
            </div>
            <style>
              .container{
                margin-top: 5%;
                margin-bottom: -8%;
              }

              #mail{
                visibility: hidden;
                display: none;
              }

              .col-sm-4{
                text-align: center;
              }
            </style>
            <br>
            <table class="table table-bordered">
            <thead class="table">
                <tr>
                <th>Room Price</th>
                </tr>
                </thead>
                <tbody id="table_price">
                            
                </tbody>
                </table>
            
            
            <button type="submit" name="submit" value="Pay" onclick="book1()"class="btn btn-success">Book</button>
            

        </form>
        
        <button type="button" id="book" onclick="book()" class="btn btn-info">See the price</button>
      </div>
    </div>
  </div>
</div><br>

        
    
    <!-- Room Availability Section End -->
   <?php include "../includes/footer.php"; ?>
   <script src="script.js"></script> 
</body>
<html>