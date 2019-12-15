<!--
  Navbar appears at the top of every user-visible page. It includes the code for logging in/logging out,
  and presents dynamic options for the user based on their logged in status
-->

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
    <!--
      If the user is logged in, show full range of options
      Button is visible as "Logout"--redirects to logout.php
    -->
		<?php if ($_SESSION['loggedIn'] == 'true') : ?>
			<header>
				<div id="mynav" class="nav">
					<ul class="nav navbar-nav">
						<li><a href="./main.php">Home</a></li>
						<li><a class="active" href="./cat.php">Select cat</a></li>
						<li><a href="./week.php">This week</a></li>
						<li><a href="./year.php">This year</a></li>
						<li><a href="./total.php">Total</a></li>
            <li><a class="active" href="./about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="main.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
      </header>
    <!--
      User is not logged in, so limited options are shown.
      Button is visible as "Login"--redirects to Login modal
    -->
    <?php else: ?>
		<ul class="nav navbar-nav">
			<li class="active"><a href="main.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    <?php endif; ?>
	</div>
</nav>

<!--
  Modal that contains the login form
-->
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


<?php
//Open link to database, login table
$pdo = new PDO('mysql:host=localhost;dbname=test', 'testuser', '12345');
//check that username and password have been filled out
if (isset($_POST['login'])) {
	if (isset($_POST['login'])) {
		$email = $_POST['username'];
		$passwort = $_POST['password'];
	
		$statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
		$result = $statement->execute(array('email' => $email));
		$user = $statement->fetch();
	
		//Check if username and password match the database records
		if ($user !== false && password_verify($passwort, $user['passwort'])) {
		  $_SESSION['userid'] = $user['id'];
		  $_SESSION["catID"] = 1;
		  $_SESSION["loggedIn"] = 'true';
		  header("location:./week.php");
		} 
	  }
  //alerts user that username or password is incorrect
  else {
    $_SESSION['loggedIn'] = 'false';
    echo '<script>alert("Wrong username or password");</script>';
  }
}
?>