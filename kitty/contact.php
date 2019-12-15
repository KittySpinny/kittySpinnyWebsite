<!doctype html>
<html>
<?php
//used for navbar display, user is logged out when entering this page
session_start();
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
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="well">
          <p align="center">
            <img class="logos" src="./img/cat1.jpg" alt="Bild von der Fotografin" width="200px" height="200px">
          </p>
          <p align="center">
            KittySpinny GmbH <br> Telefon: +49 170 87676 <br> E-Mail: <a href="mailto:contact@kittyspinny.de">contact@kittyspinny.de</a>
          </p>
        </div>
      </div>
    </div>
  </div>

</body>

</html>