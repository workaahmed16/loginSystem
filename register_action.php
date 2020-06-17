<?php 


//Checking if the user got to this page correctly through the Register button. 
if (isset($_POST['register-submit'])) {

	// Hooking up the database connection
	require 'dbh.php';

	$email = $_POST['email'];
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$passwordRepeat = $_POST['passwordRepeat'];


	// ERROR CHECKING

	// 1. Are the required values present?
	// 2. Is the email and user valid?
	// 3. Is just the email valid?
	// 4. Is just the username valid?
	// 5. Does the password match up with the comfirmation password
	// 6. Is the password length less than 8 characters?
	// 7. Is the term checkbox clicked?
	// 8. Is their a user already in the database with the same credentials?

	if (empty($email) || empty($userName) || empty($password) || empty($passwordRepeat)) {
		header("Location: register.php?error=emptyfields&uid=" . $userName . "&mail=" .$email);
		exit();
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userName)){
		header("Location: register.php?error=invalidmailuid=" . $userName);
		exit();
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: register.php?error=invalidmailuid=" . $userName);
		exit();
	}else if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
		header("Location: register.php?error=invaliduid&mail=" . $email);
		exit();
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: register.php?error=invalid_email=" . $userName);
		exit();
	}else if($password !== $passwordRepeat){
		header("Location: register.php?error=passwordcheck&userName=" .$userName . "&mail=" .$email);
		exit();
	}else if(strlen($password) < 8){
		header("Location: register.php?error=passwordtooshort&userName=" .$userName . "&mail=" .$email);
		exit();
	}else if(!isset($_POST['terms'])){
		header("Location: register.php?error=mustacceptterms&userName=" .$userName);
		exit();
	}else{

		$sql = "SELECT userName FROM users WHERE userName=?";
		// SQL statement checking if the userName is already in the database. 

		$statement = mysqli_stmt_init($con);
		// Connecting to the mysql database

		// Error checking if statement to determine whether connection to db was succcessful. 
		if (!mysqli_stmt_prepare($statement, $sql)) {
			header("Location: register.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($statement, "s", $userName);
			mysqli_stmt_execute($statement);
			mysqli_stmt_store_result($statement);
			$resultCheck = mysqli_stmt_num_rows($statement);

			// If resultCheck returns a value of 1. It means a userName is already taken
			// If result check returns a value of 0, it means the userName is not taken.

			if ($resultCheck > 0) {
				header("Location: register.php?error=usertaken&mail=" . $email);
				exit();
			}else{
				// SQL statement that inserts new row into database with placeholders for preparing statements
				$sql = "INSERT INTO users (email, userName, password) VALUES (?, ?, ?)";
				$statement = mysqli_stmt_init($con);
				if (!mysqli_stmt_prepare($statement, $sql)) {
					header("Location: register.php?error=sqlerror");
					exit();
				}else{
					// Hashing the password before storing into database.

					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);


					mysqli_stmt_bind_param($statement, "sss", $email, $userName, $hashedPwd);
					mysqli_stmt_execute($statement);
					header("Location: register.php?register=success");
					exit();
				}
			}
		}
	}

	mysqli_stmt_close($statement);
	mysqli_close($con);

}else {
	header("Location: register.php");
	exit();
}




?>