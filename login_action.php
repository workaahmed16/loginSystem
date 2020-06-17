<?php 

//Checking for login
if (isset($_POST['login_submit'])) {

	require 'dbh.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	//Checking for empty fields
	if (empty($user) || empty($pass)) {
		header("Location: login.php?error=emptyfields");
		exit();
	}

}else{
	header("Location: login.php");
	exit();
}

?>