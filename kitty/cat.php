<?php
session_start();
include('navbar.php')
?>

<!DOCTYPE html>
<html>

<head>

  <title>KittySpinny</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="./CSS/main.css">

  <script type="text/javascript" src="js/moment.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/hammerjs@2.0.8"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom@0.7.4"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-zoom/0.6.6/chartjs-plugin-zoom.min.js"></script>
</head>

<body>
  <div class="main" id="main">
    <p align=center>
      <button id="close-image" class="cats"><img src="./img/cat3.jpg" onclick=setCat1()></button>

      <button id="close-image" class="cats"><img src="./img/cat2.png" onclick=setCat2()></button>
    </p>
  </div>


  <script>
    function setCat1() {
      $.post("./session.php", {
        "cat": 1
      })
      alert("Cat 1 selected.");

    }

    function setCat2() {
      $.post("./session.php", {
        "cat": 2
      })
      alert("Cat 2 selected.");
    }
  </script>



</body>

</html>