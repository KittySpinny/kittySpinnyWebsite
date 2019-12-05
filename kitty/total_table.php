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
<?php
//check if logged in
session_start();
if(!isset($_SESSION['userid'])) {
    die('


    <body>
           
    
            <div id="mynav" class="nav">
                <ul>
                    <li><a href="./login.php">Home</a></li>
                    <li><a href="./cat.php">Select cat</a></li>
                    <li><a href="./week.php">This week</a></li>
                    <li><a href="./year.php">This year</a></li>
                    <li><a class="active" href="./total.php">Total</a></li>
                    <li><a href="./about.html">About</a></li>
                  </ul> 
                  </div>
            <h3> Please <a href="login.php">login</a> </h3>
       
    </body>                  
    ');
}
 

?>

<body>

        <div id="mynav" class="nav">
            <ul>
                <li><a href="./login.php">Home</a></li>
                <li><a href="./cat.php">Select cat</a></li>
                <li><a href="./week.php">This week</a></li>
                <li><a href="./year.php">This year</a></li>
                <li><a class="active" href="./total.php">Total</a></li>
                <li><a href="./about.html">About</a></li>
              </ul> 
              </div>
    <div class="main" id ="main">
    <?php
$servername = "localhost";
$username = "testuser";
$password = "12345";
$dbname = "test";

$db_link = mysqli_connect (
    $servername, $username, $password, $dbname
                    );
 
$sql = "SELECT * FROM kittyspinny ORDER BY start";
 
$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
 
echo '<table id=cattable>';
echo "<tr>";
echo "<th>ID</td>";
echo "<th>Revolutions</td>";
echo "<th>Startdate</td>";
echo "<th>Enddate</td>";
echo "<th>Cat ID</td>";
echo "</tr>";
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
{
  echo "<tr id=>";
  echo "<td>". $zeile['id'] . "</td>";
  echo "<td>". $zeile['revolutions'] . "</td>";
  echo "<td>". $zeile['start'] . "</td>";
  echo "<td>". $zeile['end'] . "</td>";
  echo "<td>". $zeile['catId'] . "</td>";
  echo "</tr>";
}
echo "</table>";
 
mysqli_free_result( $db_erg );
?>   

    
         

</body>
</html>