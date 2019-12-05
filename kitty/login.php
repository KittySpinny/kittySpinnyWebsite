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
	<style>
		*/body {
			background-image: url("catPic.jpeg");
		}*/
	</style>
<link rel="stylesheet" href="./CSS/main.css">

<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>



</head>

<body>

<?php
//check if logged in
session_start();
if(isset($_SESSION['userid'])) {
    die('


    <body>
           
    
            <div id="mynav" class="nav">
                <ul>
                    <li><a href="./login.php">Home</a></li>
                    <li><a href="./cat.php">Select cat</a></li>
                    <li><a class="active" href="./week.php">This week</a></li>
                    <li><a href="./year.php">This year</a></li>
                    <li><a href="./total.php">Total</a></li>
                    <li><a href="./about.html">About</a></li>
                  </ul> 
                  </div>
            <h3><a href="logout.php">Logout</a> </h3>
       
    </body>                  
    ');
}
 

?>





        <?php 
        $msg = '';
        
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'testuser', '12345');
         
        if (isset($_POST['login']) ) {
            $email = $_POST['username'];
            $passwort = $_POST['password'];
            
            $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
            $result = $statement->execute(array('email' => $email));
            $user = $statement->fetch();
            
            //Überprüfung des Passworts
            if ($user !== false && password_verify($passwort, $user['passwort'])) {
                $_SESSION['userid'] = $user['id'];
                $_SESSION["catID"] = 1;
                header("location:./week.php");
            } else {
                $msg = "Login or password incorrect!<br>";
            }
            
        }
        ?>

        <div id="mynav" class="nav">
            <ul>
                <li><a  class="active" href="./login.php">Home</a></li>
                <li><a href="./cat.php">Select cat</a></li>
                <li><a href="./week.php">This week</a></li>
                <li><a href="./year.php">This year</a></li>
                <li><a href="./total.php">Total</a></li>
                <li><a href="./about.html">About</a></li>
                <ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
              </ul> 
              </div>
    <div class="main" id ="main">
    

<div id="loginModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-xs-center">Login</h4>
			</div>
			<div class="modal-body">
				<form class="form-signin" role="form" method="post">
					<div class="form-group">
						<label class="control-label">Username</label>
						<div>
							<input type="text" class="form-control" name="username" placeholder="Username" required autofocus></br>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<div>
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button id="submitButton" class="btn btn-info" type="submit" name="login">Login</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</div>
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

			
                
          

    
        
         

   
    
    
    
</div>
   
    

</body>
</html>