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
	}else{

		//SQL statement checking if the userName is already in the database. 
		$sql = "SELECT * FROM users WHERE userName=?;";

		//Connecting to MySql database
		$statement = mysqli_stmt_init($con);
		

		//Error checking if statement to determine whether connection to db was succcessful.
		if (!mysqli_stmt_prepare($statement, $sql)) {
			header("Location: login.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($statement, "s", $user);
			mysqli_stmt_execute($statement);
			$result = mysqli_stmt_get_result($statement);
			

			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($pass, $row['password']);
				if ($pwdCheck == false) {
					header("Location: login.php?error=wrongpassword");
					exit();
				}else if ($pwdCheck == true){
					//Beginning users session. 

					session_start();
					$_SESSION['userName'] = $row['userName'];
					$_SESSION['userName'] = $row['userName'];

					header("Location: home.php?login=success");
					exit();
				}else{
					header("Location: login.php?error=wrongpassword");
					exit();
				}
			}else{
				header("Location: login.php?error=nouser");
				exit();
			}
		}
	}

}else{
	header("Location: login.php");
	exit();
}

?>