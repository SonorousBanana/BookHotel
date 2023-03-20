<?php


// home page
$page_itle="Hotel Panorama";
include "../includes/header.php";

// https://www.youtube.com/watch?v=BCuH9jTMK58

?>  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<body>

<!-- Απο εδω και κατω ειναι Τα δωμάτια -->

<div class="con1">
<div class="container-fluid mt-3">
    <h1>Διαμονή</h1>
    <p>6 διαφορετικές κατηγορίες δωματίων</p>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-6 text-black">
            
            <h2>Superior Δωμάτια</h2>
            <h5>Θέα στην πόλη ή στο εσωτερικό του κτιρίου</h5>
           
            <div class="fakeimg">
              <img src="images/superior.jpg" alt="Cinque Terre" width="100%" height="100%">
              <div class="but">
              <a href="http://localhost/panorama_hotel/admin/login.php">
              <button type="button" id="btnsuc">ΚΡΑΤΗΣΗ ΔΩΜΑΤΙΟΥ</button>
              <a href="roomInf1.php">
              <button type="button" id="btninf">ΠΕΡΙΣΣΟΤΕΡΑ</button>
              </a>
            </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-6 text-black">
            <h2>Executive Δωμάτια</h2>
            <h5>Θέα στην Ακρόπολη</h5>
            <div class="fakeimg">
              <img src="images/executive.jpg" alt="Cinque Terre" width="100%" height="100%">
              <div class="but">
              <a href="http://localhost/panorama_hotel/admin/login.php">
                <button type="button" id="btnsuc">ΚΡΑΤΗΣΗ ΔΩΜΑΤΙΟΥ</button>
                <a href="roomInf2.php">
                <button type="button" id="btninf">ΠΕΡΙΣΣΟΤΕΡΑ</button>
                </a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  </div>
 
  <div class="con1">
  <div class="container-fluid mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-6 text-black">
            <h2>Standard Δωμάτιο</h2>
            <h5>Θέα στην πόλη ή στο εσωτερικό του κτιρίου</h5>
            <div class="fakeimg">
              <img src="images/standard.jpg" alt="Cinque Terre" width="100%" height="100%">
              <div class="but">
              <a href="http://localhost/panorama_hotel/admin/login.php">
                <button type="button" id="btnsuc">ΚΡΑΤΗΣΗ ΔΩΜΑΤΙΟΥ</button>
                <a href="roomInf3.php">
                <button type="button" id="btninf">ΠΕΡΙΣΣΟΤΕΡΑ</button>
                </a>
              </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-6 text-back">
            <h2>Deluxe Δωμάτια</h2>
            <h5>Θέα στον Λυκαβηττό ή στην πόλη</h5>
            <div class="fakeimg">
              <img src="images/deluxe.jpg" alt="Cinque Terre" width="100%" height="100%">
              <div class="but">
                <a href="http://localhost/panorama_hotel/admin/login.php">
                <button type="button" id="btnsuc">ΚΡΑΤΗΣΗ ΔΩΜΑΤΙΟΥ</button>
                <a href="roomInf4.php">
                <button type="button" id="btninf">ΠΕΡΙΣΣΟΤΕΡΑ</button>
                </a>
              </div>
            </div> 
        </div>
      </div>
    </div>
  </div>
</div>

<div class="con1">
  <div class="container-fluid mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-6 text-black">
            <h2>Junior Σουίτες</h2>
            <h5>Θέα στην Ακρόπολη</h5>
            <div class="fakeimg">
              <img src="images/junior.jpg" alt="Cinque Terre" width="100%" height="100%">
              <div class="but">
                <a href="http://localhost/panorama_hotel/admin/login.php">
                <button type="button" id="btnsuc">ΚΡΑΤΗΣΗ ΔΩΜΑΤΙΟΥ</button>
                <a href="roomInf5.php">
                <button type="button" id="btninf">ΠΕΡΙΣΣΟΤΕΡΑ</button>
                </a>
              </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-6 text-back">
            <h2>Deluxe Σουίτες</h2>
            <h5>Θέα στην Ακρόπολη και στην πόλη</h5>
            <div class="fakeimg">
              <img src="images/deluxeSuite.jpg" alt="Cinque Terre" width="100%" height="100%">
              <div class="but">
                <a href="http://localhost/panorama_hotel/admin/login.php">
                <button type="button" id="btnsuc">ΚΡΑΤΗΣΗ ΔΩΜΑΤΙΟΥ</button>
                <a href="roomInf6.php">
                <button type="button" id="btninf">ΠΕΡΙΣΣΟΤΕΡΑ</button>
                </a>
              </div>
            </div> 
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "../includes/footer.php"; ?>
</body>
</html>
