<?php
	session_start();
	// header('location: home.php');

	$conn = mysqli_connect('localhost','root', '', 'myproject');

if (!$conn){
	echo "The connection Failed";
}else{	
	$name = $_POST['user'];
	$pass = $_POST['password'];
	$myquery = "SELECT * from users WHERE name ='$name' && password = '$pass'";

	$check = mysqli_query($conn, $myquery);

	$num = mysqli_num_rows($check);
	if ($num == 1){
		$_SESSION['username'] = $name;
		header('location:home1.php');
	}else{
		header('location:login.php');
	}
}
?>