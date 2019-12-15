<!doctype html>
<html>
<?php
//used for navbar display, user is logged out when entering this page
session_start();
$_SESSION['loggedIn'] = 'false';
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
  <div class="container">
    <div class="jumbotron">
      <h1 align="center"><b>Sorry! :(</b></h1>
    </div>
    <h3>
      We're currently under construction. Please return in January 2020 for the ability to shop online, participate in the forums, or 
      compare your cat stats to our worldwide userbase!
      <br><br><br>
        If you are interested in making a purchase, please reach out <a href="contact.php">here.</a> We look forward to hearing from you!
      </h3>
  </div>
</body>

</html>