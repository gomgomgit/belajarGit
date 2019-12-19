<?php 
	include '../connect/connect.php';

	$id 	= $_POST['id'];
	$name	= $_POST['name'];
	$email	= $_POST['email'];

	$sql 	= "SELECT * FROM user WHERE id ='$id'";
	$result = mysqli_query($connect, $sql);
	$row 	= mysqli_fetch_row($result);
	$pass 	= $row[3];

	if (empty($_POST['password'])) {
		$password = $pass;
	} else {
		$password = md5($_POST['password']);
	}

	$sql	= "UPDATE user set name = '$name', email = '$email', password = '$password' WHERE id = '$id'";
	mysqli_query($connect, $sql);
	header('location:index.php');


?>