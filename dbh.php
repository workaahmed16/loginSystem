<?php 


	// Configure the 4 variables below based on your database information. 
	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";
	$dBName = "loginsystem";

	$con = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
	if (!$con) {
		die("Connection failed:" . mysqli_connect_error());
	}

 ?>