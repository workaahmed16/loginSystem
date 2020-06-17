<!DOCTYPE html>
<html>
<head>
	<!-- Connect Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- 	Connect to Jquery courtesy of W3schools -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<!-- 	Connect main CSS document -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<meta charset="utf-8">
	<meta name="description" content="This is a login system and this is the sign up page for it">
	<meta name=viewport content="width=device-width, initial-scale=1">

	<title>Register</title>
</head>
<body>
	<div class="form-container">
		<form action="register_action.php" method="POST">
			<h1>Register</h1>
			<div class="form-group">
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="username" placeholder="Enter Username" name="userName">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="Password1" placeholder="Enter Password" name="password">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="Password2" placeholder="Confirm Password" name="passwordRepeat">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1" name="terms">
				<label class="form-check-label" for="exampleCheck1">I accept the Terms of Use & Privacy Policy</label>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="register-submit">Register Now</button>
			</div>
		</form>
	</div>


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
	</script>
</body>
</html>