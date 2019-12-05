<!--	PASSWORD: kittySpinny@kitty.com
		USERNAME: kitty123
-->
<!doctype html>
<html>
<?php
session_start();
/*
USED FOR DEBUGGING SESSION VARIABLES

if (isset($_SESSION)) {
	echo '<pre>'; var_dump($_SESSION); echo '</pre>';
	echo '<pre>'; var_dump($_POST); echo '</pre>';
}
else {
	echo "no session variables";
}*/
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
			background-image: url("catPic.jpeg");
		}
	</style>
</head>

<body>
	<?php

	//msg used to display if incorrect username/password set
	$msg = '';

	//checks that username and password fields have been entered via the form
	if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
		/*
		Checks that it has correct username and password, these are probably usually stored
		in a database, but I think this is fine now. We could create another table if we get
		bored
		*/
		if ($_POST['username'] == 'kittySpinny@kitty.com' && 	$_POST['password'] == 'kitty123') {
			//stores the username in session in case we'd like to display it in other places
			$_SESSION['username'] = 'kittySpinny@kitty.com';
			//redirects to new page on successful login, page1.php is just my test page
			echo "<script> window.location.assign('page1.php'); </script>";
		} else {
			$msg = 'Wrong username or password';
		}
	}
	?>


	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
		</nav>

		<div class="row content">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="well">
					<h1>KittySpinny</h1>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<div class="well"></div>
		</div>
		<div class="col-md-4">
			<div class="well"></div>
		</div>
	</div>
	</div>
	</div>
</body>

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

</html>