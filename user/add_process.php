<?php 
	include '../connect/connect.php';

	$name	= $_POST['name'];
	$email	= $_POST['email'];
	$pass	= md5($_POST['password']);

	$sql	= "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$pass')";
	mysqli_query($connect, $sql);
	header('location:index.php');


?>