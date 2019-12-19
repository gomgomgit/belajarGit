<?php 
	include '../connect/connect.php';

	$id 		= $_POST['id'];
	$author		= $_POST['author'];
	$title		= $_POST['title'];
	$content	= $_POST['content'];
	$status		= $_POST['status'];

	// var_dump($author, $title, $content, $status);

	$sql	= "UPDATE post SET author ='$author', title = '$title', content = '$content', status = '$status' WHERE  id = '$id'";
	mysqli_query($connect, $sql);
	header('location:index.php');


?>