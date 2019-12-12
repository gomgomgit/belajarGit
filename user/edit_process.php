<?php 
	include '../connect/connect.php';

	$id 	= $_POST['id'];
	$name	= $_POST['name'];
	$email	= $_POST['email'];
	$pass	= $_POST['password'];

	$sql	= "UPDATE user set name = '$name', email = '$email', password = '$pass' WHERE id = '$id'";
	mysqli_query($connect, $sql);
	header('location:index.php');


?>