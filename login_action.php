<?php 

//Checking for login
if (isset($_POST['login_action'])) {

	require 'dbh.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	echo "hello world!";

}else{
	header("Location: login.php");
	exit();
}

?>