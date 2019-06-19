<?php
	session_start();
	// header('location: home1.php');

	$conn = mysqli_connect('localhost','root', '', 'myproject');

if (!$conn){
	echo "The connection Failed";
}else{	
	$name = $_POST['user'];
	$pass = $_POST['password'];
	$myquery = "SELECT * from users WHERE name ='$name'";

	$check = mysqli_query($conn, $myquery);

	$num = mysqli_num_rows($check);
	if ($num == 1){
		echo "Username already exists";
	}else{
		$insertquery = "INSERT INTO users (name, password) VALUES ('$name', '$pass')";
		mysqli_query($conn, $insertquery);
		echo "Registration successful";
	}
}
?>