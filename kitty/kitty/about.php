<!--
	About page for kittySpinny, includes information about the project and future plans
-->

<?php
session_start();
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="de">

<head>
	<title>KittySpinny</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./CSS/main.css">-
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
  <style>
    	body {
			background-image: url("catPic.jpg");
		}
  </style>
  
  <title>Kontakt</title>  
</head>

<body id="back">
	<main>
		<section id="box">
			<p>
        We are a young and innovative team with the goal to create the best smart cat wheels in the world!
        
        KittySpinny is brought to you by a team of 5 engineers, who have set out to create a line of smart devices for your cats and
        hopefully in the future will expand to other household pets. The smart cat wheel will track various statistics so you can see
        just how often your cat (or cats) are exercising. We keep track of distance, speed, and other statistics related to your cat's
        health and activity.
      </p>
      <br>
      <p>
        <?php if ($_SESSION['loggedIn'] == 'true') : ?>
          Thank you for your purchase! We hope you enjoy our website.

        <?php else: ?>
          Our webstore is under maintenance at the moment, but please check back for KittySpinny buying options! Keep an eye on our progress <a href="./defaultMaintenance.php">here</a>
        <?php endif; ?>
			</p>
		</section>
	</main>

</body>

</html>