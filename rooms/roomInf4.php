<?php


// home page
$page_itle="Hotel Panorama";
include "../includes/header.php";
include "../includes/footer.php";
// https://www.youtube.com/watch?v=BCuH9jTMK58

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<script>
  function function1() {
    document.getElementById('hold').style.display='block';
    document.getElementById('card-body').style.display='none';
  }
  function function2() {
    window.location.href="http://localhost/panorama_hotel/admin/login.php";
  }
</script>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
          <ul class="nav navbar-nav eg_menu_bar">
              <li><a class="nav-link" href="#">Services</a></li>
              <li><a class="nav-link" href="#">Contact Us</a></li>
              <li><a class="nav-link" href="#">Rooms</a></li>
         
            </ul>
        
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"><a class="nav-link" href="#"><span class="glyphicon glyphicon-circle-arrow-right"></span> Booking</a></li>
              <li class="nav-item"><a class="nav-link" href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
    </div>
  </nav>

<!-- Απο εδω και κατω ειναι Τα δωμάτια -->


<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/room4.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>PANORAMA</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/room1.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>PANORAMA</h3>
        <p>Thank you, Chicago!</p>
      </div> 
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<br>


<div class="info">
  <div class="overlay">
    <div class="row">
      <div class="col-4">
        <div class="container p-5 my-3">
          <h4 class="t1">ΔΙΑΜΟΝΗ</h4>
          <h1 class="t3">Deluxe Δωμάτια</h1>
          <p class="t2">_________________________________________________</p>
          <p class="t2">Θέα στον Λυκαβηττό ή στην πόλη</p>
          <p class="t2">_________________________________________________</p>
          <p class="t2">ΧΩΡΗΤΙΚΟΤΗΤΑ 2</p>
          <p class="t2">_________________________________________________</p>
          <div class="container pt-5 my-5 bg-light">
              <div id="card-body">
              <p class="t5">Για ηλεκτρονική κράτηση πρέπει να διαθέτετε λογαριασμό</p>
            <br>
            <button type="button" id="btnsuc1" onclick="function2()">ΚΡΑΤΗΣΗ ΤΩΡΑ</button>
            </div>
              <div id="hold">
                <p class="t5">Απευθείας κράτηση από <h4>150&euro;</h4></p>
               <p>Διαθέτουμε</p> <!--εδω γινεται ανακτηση των διαθεσημων δωματιων απο τη βάση μεσω JS--> <p>Δωμάτια απο αυτή την κατηγορία</p><br>
                <button type="button" id="btnsuc1">ΚΡΑΤΗΣΗ</button>
              </div>
          </div>
          
        </div>
      </div>
      <div class="col-4"><br><br><br><br>
        <p class="t4">Πλήρως ανακαινισμένα δωμάτια στις γήινες αποχρώσεις της ελιάς, με βεράντα και εξωτερική θέα. Φωτεινά και άνετα δωμάτια (21 τ.μ.)  μπορούν να φιλοξενήσουν έως 2 άτομα σε ένα διπλό ή δύο ξεχωριστά κρεβάτια. Όλα τα δωμάτια διαθέτουν βεράντα επί της οδού Φειδίου και κάποια μπορούν να φιλοξενήσουν οικογένειες από 3 έως 4 άτομα (ενημερώστε μας κατά την πραγματοποίηση της κράτησής σας).
          <br><br> Προσφορά γλυκό καλωσορίσματος και μπουκάλι εμφιαλωμένο μεταλλικό νερό κατά την άφιξη. <br><br>*Λάβετε υπόψη ότι οι εικόνες ενδέχεται να μην αντιπροσωπεύουν πλήρως τα χαρακτηριστικά του δωματίου που έχετε κάνει κράτηση.</p></div>
      <div class="col-4" id="img1">
        <img src="images/room02.jpg">
      </div>
    </div>
    <div class="container p-5 my-3">
    <h2 class="t5">ΠΑΡΟΧΕΣ</h2><br>
    <p class="t4">Παροχές superior δωματίου</p>
    <div class="row">
      <div class="col">
        <ul>
          <li class="t6">Ρυθμιζόμενος θερμοστάτης</li><br>
          <li class="t6">Δωρεάν σύνδεση στο διαδίκτυο</li><br>
          <li class="t6">Γραφείο εργασίας σεκρετέρ</li><br>
          <li class="t6">Χρηματοκιβώτιο</li><br>
          <li class="t6">Μπάνιο με μπανιέρα ή ντουζιέρα</li><br>
          <li class="t6">Δωρεάν προϊόντα περιποίησης μπάνιου</li><br>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li class="t6">Βραστήρας νερού και δωρεάν παροχή τσάι & καφέ </li><br>
          <li class="t6">Μπουκάλι εμφιαλωμένο νερό </li><br>
          <li class="t6">Σπιτικό γλυκό καλωσορίσματος</li><br>
          <li class="t6">Μπουρνούζι & παντόφλες</li><br>
          <li class="t6">Ψυγείο</li><br>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li class="t6">Καλωδιακή-Δορυφορική τηλεόραση</li><br>
          <li class="t6">Αθλητικά κανάλια</li><br>
          <li class="t6">Απευθείας εξωτερική τηλεφωνική γραμμή (με επιπλέον κόστος)  </li><br>
          <li class="t6">Πιστολάκι μαλλιών</li><br>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li class="t6">Υπηρεσία σερβιρίσματος στο δωμάτιο </li><br>
          <li class="t6">Αλλαγή πετσετών κατόπιν αιτήματος</li><br>
          <li class="t6">Αφύπνιση </li><br>
        </ul>
      </div>
      </div>
  </div>
  </div>
</div>


</body>
</html>