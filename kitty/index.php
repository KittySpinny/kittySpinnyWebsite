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
                    <li><a class="active" href="./week.php">This week</a></li>
                    <li><a href="./year.php">This year</a></li>
                    <li><a href="./total.php">Total</a></li>
                    <li><a href="#about">About</a></li>
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
         
        if(isset($_GET['login'])) {
            $email = $_POST['username'];
            $passwort = $_POST['password'];
            
            $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
            $result = $statement->execute(array('email' => $email));
            $user = $statement->fetch();
            
            //Überprüfung des Passworts
            if ($user !== false && password_verify($passwort, $user['passwort'])) {
                $_SESSION['userid'] = $user['id'];
                header("location:./week.php");
            } else {
                $msg = "Login or password incorrect!<br>";
            }
            
        }
        ?>

        <div id="mynav" class="nav">
            <ul>
                <li><a  class="active" href="./login.php">Home</a></li>
                <li><a href="./week.php">This week</a></li>
                <li><a href="./year.php">This year</a></li>
                <li><a href="./total.php">Total</a></li>
                <li><a href="#about">About</a></li>
              </ul> 
              </div>
    <div class="main" id ="main">
    </div>
<div class = "container">
<div class="col-md-12">
  <form class = "form-signin" role = "form" method = "post" action="?login=1">
		<!--Displays message here if wrong username/password, can be styled-->
		<h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
		<input type = "text" class = "form-control" name = "username" placeholder = "Username"	required autofocus></br>
		<input type = "password" class = "form-control" name = "password" placeholder = "Password" required>
		<button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">Login</button>
	</form>	
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