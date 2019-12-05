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



</head>

<?php
session_start();
session_destroy();
 
echo "


<body>
       

        <div id=\"mynav\" class=\"nav\">
            <ul>
                <li><a  class=\"active\" href=\"./login.php\">Home</a></li>
                <li><a href=\"./cat.php\">Select cat</a></li>
                <li><a href=\"./week.php\">This week</a></li>
                <li><a href=\"./year.php\">This year</a></li>
                <li><a href=\"./total.php\">Total</a></li>
                <li><a href=\"./about.html\">About</a></li>
              </ul> 
              </div>
        <h3> Logout successfull </h3>
   
</body>                  
";
header("location:./login.php");
?>