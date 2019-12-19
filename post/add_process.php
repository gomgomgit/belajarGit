<?php 
	include '../connect/connect.php';

	$author		= $_POST['author'];
	$title		= $_POST['title'];
	$content	= $_POST['content'];
	$status		= $_POST['status'];

	// var_dump($author, $title, $content, $status);

	$sql	= "INSERT INTO post (author, title, content, status) VALUES ('$author', '$title', '$content', '$status')";
	mysqli_query($connect, $sql);
	header('location:index.php');


?>