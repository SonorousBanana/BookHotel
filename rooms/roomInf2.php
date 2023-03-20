<?php


// home page
$page_title="Hotel Panorama";
include "../includes/header.php";
include "../includes/footer.php";
// https://www.youtube.com/watch?v=BCuH9jTMK58

?> 
<!DOCTYPE html>
<html lang="en">
<head>
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
      <img src="images/room2.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3 class="t5">PANORAMA</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/room21.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Chicago</h3>
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
          <h1 class="t3">Executive Δωμάτια</h1>
          <p class="t2">_________________________________________________</p>
          <p class="t2">Θέα στην πόλη ή στο εσωτερικό του κτιρίου</p>
          <p class="t2">_________________________________________________</p>
          <p class="t2">ΧΩΡΗΤΙΚΟΤΗΤΑ 3</p>
          <p class="t2">_________________________________________________</p>
          <div class="container pt-5 my-5 bg-light">
              <div id="card-body">
              <p class="t5">Για ηλεκτρονική κράτηση πρέπει να διαθέτετε λογαριασμό</p>
            <br>
            <button type="button" id="btnsuc1" onclick="function2()">ΚΡΑΤΗΣΗ ΤΩΡΑ</button>
            </div>
              <div id="hold">
                <p class="t5">Απευθείας κράτηση από <h4>121&euro;</h4></p>
               <p>Διαθέτουμε</p> <!--εδω γινεται ανακτηση των διαθεσημων δωματιων απο τη βάση μεσω JS--> <p>Δωμάτια απο αυτή την κατηγορία</p><br>
                <button type="button" id="btnsuc1">ΚΡΑΤΗΣΗ</button>
              </div>
          </div>
          
        </div>
      </div>
      <div class="col-4"><br><br><br><br>
        <p class="t4">Executive Δωμάτια. Πλήρως ανακαινισμένα με φιλόξενο και ζεστό εσωτερικό σχεδιασμό σε γήινους τόνους. Φωτεινά και άνετα δωμάτια, που βρίσκονται στους τελευταίους ορόφους του ξενοδοχείου με μέγεθος 30 τμ. Διαθέτουν μπαλκόνι με υπέροχη θέα στην Ακρόπολη. Μπορούν να φιλοξενήσουν έως 3 άτομα. Τα δωμάτια διαθέτουν ένα διπλό ή δύο ξεχωριστά κρεβάτια, με δυνατότητα τρίτου ατόμου σε καναπέ-κρεβάτι. Μερικά Executive Δωμάτια συνδέονται μεταξύ τους με εσωτερική πόρτα και μπορούν να φιλοξενήσουν εύκολα οικογένειες έως 4 άτομα (ενημερώστε μας κατά την κράτησής σας). Παροχές. Φρούτα εποχής κατά την άφιξη. Δωρεάν μπουκάλι νερό ανά άτομο κάθε μέρα που μένετε μαζί μας.
          <br>*Λάβετε υπόψη ότι οι εικόνες ενδέχεται να μην αντιπροσωπεύουν πλήρως τα χαρακτηριστικά του δωματίου που έχετε κάνει κράτηση.</p></div>
      <div class="col-4" id="img1">
        <img src="images/room05.jpg">
      </div>
    </div>
    <div class="container p-5 my-3">
    <h2 class="t5">ΠΑΡΟΧΕΣ</h2><br>
    <p class="t4">Παροχές superior δωματίου</p>
    <div class="row">
      <div class="col">
        <ul>
          <li class="t6">Αυτόνομος Κλιματισμός</li><br>
          <li class="t6">Δωρεάν πρόσβαση στο διαδίκτυο</li><br>
          <li class="t6">Γραφείο εργασίας</li><br>
          <li class="t6">Χρηματοκιβώτιο</li><br>
          <li class="t6">Προϊόντα προσωπικής περιποίησης</li><br>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li class="t6">Αλλαγή πετσετών κατόπιν αιτήματος</li><br>
          <li class="t6">Μπάνιο με Μπανιέρα </li><br>
          <li class="t6">Ζυγαριά στο μπανιο</li><br>
          <li class="t6">Βραστήρας νερού, δωρεάν παροχή Καφέ & Τσάι</li><br>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li class="t6">Μπουρνούζια & Παντόφλες</li><br>
          <li class="t6">Ψυγείο</li><br>
          <li class="t6">Δωρεάν μπουκάλι νερό</li><br>
          <li class="t6">Επίπεδη Οθόνη TV</li><br>
          <li class="t6">Καλωδιακή-Δορυφορική Τηλεόραση</li><br>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li class="t6">Αθλητικά κανάλια</li><br>
          <li class="t6">Απευθείας τηλεφωνική γραμμή (επιπλέον χρέωση)</li><br>
          <li class="t6">Πιστολάκι Μαλλιών</li><br>
          <li class="t6">Υπηρεσία Αφύπνισης </li><br>
          <li class="t6">Μπαλκόνι </li><br>
        </ul>
      </div>
      </div>
  </div>
  </div>
</div>

<div class="container-fluid mt-3 p-5 my-3">
  <div class="row">
    <div class="col-4">
      <img src="images/room021.jpg" width="100%" height="100%">
    </div>
    <div class="col-4">
      <img src="images/room022.jpg" width="100%" height="100%">
    </div>
    <div class="col-4">
      <img src="images/room023.jpg" width="100%" height="100%">
    </div>
  </div>
  <br>
</div>

</body>
</html>