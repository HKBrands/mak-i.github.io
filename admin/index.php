<?php
	session_start(); 
	if(isset($_SESSION['aid'])){
		header('location:dashboard.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid text-center">
		<br>
		<h1>Admin Login</h1>
		<br>
		<h5 id="error" class="text-danger">Username or Password is incorrect!</h5>
		<form action="index.php" method="post">
		  <label for="username">Username:</label>
		  <input type="text" id="username" name="username" class="form-control" required><br><br>
		  <label for="password">Password:</label>
		  <input type="password" id="password" name="password" class="form-control" required><br><br>
		  <button class="btn btn-primary" name="login" id="login">Login</button>
		</form>
	</div>
	<script>
	$('#error').hide();
    </script>
</body>
</html>

<?php 
	include ('../dbcon.php');
	include ('loginaction.php');
 ?>