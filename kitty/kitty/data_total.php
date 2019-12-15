<!--
    Uses cat selection from session to select total data for specified cat
-->

<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "testuser";
$password = "12345";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

//id is set to be the chosen cat form cat.php
$id = $_SESSION["catID"];
$sqlQuery = "select year (end) as 'year', sum(revolutions) as revolutions, sum(TIMESTAMPDIFF(SECOND,start,end)) as 'time' from kittyspinny WHERE catId=$id group by year (end)  ";
$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);
echo json_encode($data);
?>