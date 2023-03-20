<?php


// home page
$page_itle="Hotel Panorama";
include "../includes/header.php";
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
      <img src="images/room1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3 class="t5">PANORAMA</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/room11.jpg" alt="Chicago" class="d-block" style="width:100%">
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
          <h1 class="t3">Superior Δωμάτια</h1>
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
              <p class="t5">Απευθείας κράτηση από <h4>106&euro;</h4></p>
             <p>Διαθέτουμε</p> <!--εδω γινεται ανακτηση των διαθεσημων δωματιων απο τη βάση μεσω JS--> <p>Δωμάτια απο αυτή την κατηγορία</p><br>
              <button type="button" id="btnsuc1" onclick="fucntion2()">ΚΡΑΤΗΣΗ</button>
            </div>
        </div>
        </div>
      </div>
      <div class="col-4"><br><br><br><br>
        <p class="t4">Superior δωμάτια. Πλήρως ανακαινισμένα δωμάτια στις γήινες αποχρώσεις της ελιάς, με θέα στην πόλη η στο εσωτερικό χώρο του ξενοδοχείου. Τα φωτεινά και άνετα δωμάτια με μέγεθος 21 τμ  μπορούν να φιλοξενήσουν έως 3 άτομα. Τα δωμάτια διαθέτουν ένα διπλό ή δύο ξεχωριστά κρεβάτια, με δυνατότητα 3ου ατόμου σε επιπλέον κρεβάτι. Ορισμένα δωμάτια διαθέτουν μπαλκόνι με θέα στην πόλη και κάποια άλλα συνδέονται με εσωτερική πόρτα, ιδανικά να φιλοξενήσουν οικογένειες έως 4 ατόμα (ενημερώστε μας κατά την πραγματοποίηση της κράτησής σας). Superior δωμάτια για χρήστες αναπηρικών αμαξιδίων (ενημερώστε μας κατά την πραγματοποίηση της κράτησής σας)<br>
        <br>*Λάβετε υπόψη ότι οι εικόνες ενδέχεται να μην αντιπροσωπεύουν πλήρως τα χαρακτηριστικά του δωματίου που έχετε κάνει κράτηση.</p></div>
      <div class="col-4" id="img1">
        <img src="images/room06.jpg">
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
          <li class="t6">Μπάνιο με μπανιέρα</li><br>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li class="t6">Δωρεάν προϊόντα περιποίησης μπάνιου</li><br>
          <li class="t6">Βραστήρας νερού και δωρεάν παροχή τσάι & καφέ </li><br>
          <li class="t6">Μπουρνούζι & παντόφλες</li><br>
          <li class="t6">Ψυγείο</li><br>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li class="t6">Τηλεόραση με επίπεδη οθόνη </li><br>
          <li class="t6">Καλωδιακή-Δορυφορική τηλεόραση</li><br>
          <li class="t6">Αθλητικά κανάλια</li><br>
          <li class="t6">Απευθείας εξωτερική τηλεφωνική γραμμή (με επιπλέον κόστος)</li><br>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li class="t6">Πιστολάκι μαλλιών</li><br>
          <li class="t6">Υπηρεσία σερβιρίσματος στο δωμάτιο</li><br>
          <li class="t6">Αλλαγή πετσετών κατόπιν αιτήματος</li><br>
          <li class="t6">Αφύπνιση</li><br>
        </ul>
      </div>
      </div>
  </div>
  </div>
</div>

<div class="container-fluid mt-3 p-5 my-3">
  <div class="row">
    <div class="col-4">
      <img src="images/room001.jpg" width="100%" height="100%">
    </div>
    <div class="col-4">
      <img src="images/room002.jpg" width="100%" height="100%">
    </div>
    <div class="col-4">
      <img src="images/room003.jpg" width="100%" height="100%">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-4">
      <img src="images/room004.jpg" width="100%" height="100%">
    </div>
    <div class="col-4">
      <img src="images/room005.jpg" width="100%" height="100%">
    </div>
    <div class="col-4">
      <img src="images/room006.jpg" width="100%" height="100%">
    </div>
  </div>
</div>
<?php include "../includes/footer.php"; ?>
</body>
</html>
