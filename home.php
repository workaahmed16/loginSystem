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

	<title>Home Page</title>
</head>
<body>

		<div class="form-container">
			<div class="form-group">
				<h1>Welcome</h1>
			</div>
			<div class="form-group">
			<p>Welcome to my login/register system. This was built so I can practice
			the procedure of registering a user and logging a user in so they can either acess
			information or their own unique instance of that information. </p>
			<p>This was also made to
			practice using bootstrap as well as the WAMP(Windows, Apache, Mysql, PHP) stack.</p>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary" onclick="location.href='register.php'">Register</button>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary" onclick="location.href='login.php'">Already a user? Login</button>
			</div>
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
	</script>
</body>
</html>