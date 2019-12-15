<!doctype html>
<html>
<?php
//used for navbar display, user is logged out when entering this page
session_start();
if ($_SESSION['loggedIn'] == 'true') {
  
}else{
  $_SESSION['loggedIn'] = '';
}

include('navbar.php');
?>

<head>
  <title>KittySpinny</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <style>
    body {
      background-image: url("catPic.jpg");
    }

    .carousel-inner>.item {
      height: 200px;
    }

    .carousel-inner>.item>img {
      margin: 0 auto;
      height: 200px;
    }
  </style>
</head>

<body>
  <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img-fluid" src="img\cat1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img class="img-fluid" src="img\cat3.jpg" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>-->

  <div class="container text-center">

    <div class="jumbotron">
      <h1>KittySpinny</h1>
      <p></p>
    </div>
    <h3></h3><br>
    <div class="row">
      <div class="col-sm-4">
        <div class="well">
          <p><b>COMING SOON:</b> KittySpinny webstore!
            <br><br><br>
            We will soon be bringing our product to the web! In addition to KittySpinny cat wheel attachments, we will also be
            offering a wide range of products for your feline athletes. Keep an eye out for all things CAT-hlete! Fun-colored
            collars, cat wheel toy attachments, and even some special cat wheel-themed treats to keep your little guys both
            motivated and healthy!
            <br><br><br>
            See on our progress updates <b><a href="./defaultMaintenance.php">here!</a></b>
          </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="well">
          <p><b>Want to connect with other cat trainers?</b>
            <br><br><br>
            Consider heading over to our <b><a href="./defaultMaintenance.php">KittySpinny forum!</a></b>
            <br><br><br>
            In the forum you can start or participate in threads people all over the world. Share your kitty's stats, have
            competitions, or get advice from other cat trainers. If that doesn't peak your interest, we will also have a
            running contest for cutest cat of the month! We hope to see you there!
          </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="well">
          <p>Curious how your cat(s) do compared to other cat-wheel using felines?
            <br><b><a href="./defaultMaintenance.php">Check cat stats from all over the globe!</a></b></br>
          </p>
        </div>
        <div class="well">
          <p>Read all about keeping your cats healthy with PetMD! Check out their site <b><a href="https://www.petmd.com/">HERE!</a></b></p>
        </div>
      </div>
    </div>
  </div><br>

  <footer class="container-fluid text-center">
    <p></p>
  </footer>

</body>

</html>