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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
    <table class="table" id="cattable">
      <thead>
        <tr>
          
          <th>Revolutions</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Cat ID</th>
        </tr>
      </thead>
      <tbody>

          <?php
              $servername = "localhost";
              $username = "testuser";
              $password = "12345";
              $dbname = "test";

              $db_link = mysqli_connect (
                  $servername, $username, $password, $dbname
                                  );
              
              $sql = "SELECT * FROM kittyspinny ORDER BY start DESC";
              
              $db_erg = mysqli_query( $db_link, $sql );
              if ( ! $db_erg )
              {
                die('Ungültige Abfrage: ' . mysqli_error());
              }
                    while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
              {
                echo "<tr>";
                
                echo "<td>". $zeile['revolutions'] . "</td>";
                echo "<td>". $zeile['start'] . "</td>";
                echo "<td>". $zeile['end'] . "</td>";
                echo "<td>". $zeile['catId'] . "</td>";
                echo "</tr>";
              }
              
              
              mysqli_free_result( $db_erg );
              ?> 
      </tbody>
    </table>
  </div>

  <script>
$(document).ready( function () {
    $('#cattable').DataTable();
} );
</script>
    


    
         

</body>
</html>