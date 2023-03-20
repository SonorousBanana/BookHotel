<?php

// Home Page
// https://www.youtube.com/watch?v=BCuH9jTMK58

include "connection.php";
include "includes/header.php";
include 'includes/functions.php';

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first to make a reservation";
  //header('location: login.php');
}

function isAdmin()
{
  if (isset($_SESSION['user']) && $_SESSION['user']['type'] == 'admin') {
    return true;
  } else {
    return false;
  }
}


?>

<body class="eg_public_body">
  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Carousel slides -->
    <div class="carousel-inner egr_carousel_inner">
      <div class="item eg_carousel_img eg_carousel_img_1 active">
        <img src="includes/images/home_img_1.jpg" width="100%" alt="Room">
        <div class="eg_centered_text">Κύριο μέλημά μας είναι να σας προσφέρουμε την υπέρτατη ελληνική φιλοξενία και μια ανώτατης ποιότητας εμπειρία διακοπών. </div>
      </div>

      <div class="item eg_carousel_img eg_carousel_img_2">
        <img src="includes/images/home_img_2.jpg" width="100%" alt="Chicago">
        <div class="eg_centered_text">Κύριο μέλημά μας είναι να σας προσφέρουμε την υπέρτατη ελληνική φιλοξενία και μια ανώτατης ποιότητας εμπειρία διακοπών. </div>
      </div>

      <div class="item eg_carousel_img eg_carousel_img_3">
        <img src="includes/images/home_img_3.jpg" width="100%" alt="New York">
        <div class="eg_centered_text">Κύριο μέλημά μας είναι να σας προσφέρουμε την υπέρτατη ελληνική φιλοξενία και μια ανώτατης ποιότητας εμπειρία διακοπών. </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Breakfast Section -->
  <div class="container-fluid eg_acropolis_section">

    <div class="eg_acropolis_left_n_right">

      <div class="eg_acropolis_left">
        <div class="eg_home_header">
          <h2>A timeless hotel in the heart of Athens</h2>
        </div>
        <p>
          A timeless hotel in the heart of Athens
          Titania Hotel is situated in the heart of Athens. Located in between Syntagma & Omonia squares,
          surrounded by the best of what Athens has to offer.
          Our supreme location is the perfect home base for both business and leisure travellers.
          Within walking distance to the most emblematic places and
          easily connected with the rest of the city through public transportation.
          Metro stations Omonia and Panepistimio are right on our doorstep.
          This landmark hotel offers you a stay, as comfortable and convenient as it can be.
        </p>
      </div>

      <div class="eg_acropolis_right">
        <img class="eg_acropolis_img" src="includes/images/acropolis_home.jpg" alt="Acropolis" />
        <img class="eg_tsolias_img" src="includes/images/tsolias_home.jpg" alt="Acropolis" />
      </div>

    </div>

  </div>
  
<?php
    include "includes/footer.php";