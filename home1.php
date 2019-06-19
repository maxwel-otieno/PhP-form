<?php
	session_start();
	if (!isset($_SESSION['username'])){
		header('location:login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<a href="logout.php" class="btn btn-primary float-right">LOG OUT</a>
		<h1>Log in as <span class="btn-lg btn-warning">
			<?php 
				echo $_SESSION['username'];
			?></span>
			 successful
		</h1>
	</div>
</body>
</html>