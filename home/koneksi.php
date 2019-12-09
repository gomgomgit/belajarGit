<?php
	$server		= "localhost";
	$user		= "root";
	$password  	= 1234;
	$dbname		= "cobaGit";

	$connect	= mysqli_connect($server, $user, $password, $dbname);

	if (!$connect) {
		die("gagal");
	}