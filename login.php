<!doctype html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
    <title>White Cat - LOGIN</title>
    <link rel="stylesheet" href = "./css/index.css">

</head>
<body>
	<div class = "main" >
		<?php include "header.php" ?>
		<div class = "signin">
			<div class = "signhead">
				<h2>My Account</h2>
			</div> 
			<div class = "login">
				<h3>Log In</h3></br>
				<p>Email Address</p>
				<p><input type = "text" name = "username" placeholder = "Email Address"> </p>
				<p>Password</p>
				<p><input type = "text" name = "password" placeholder = "Password"> </p>
				<p><input type = "button" value="Sign In"></p>
			</div>
			<div class = "register">
				<h3>Register</h3></br>
				<p>User Name</p>
				<p><input type = "text" name = "username" placeholder = "Username"> </p>
				<p>Email Address</p>
				<p><input type = "text" name = "username" placeholder = "Email Address"> </p>
				<p>Password</p>
				<p><input type = "text" name = "password" placeholder = "Password"> </p>
				<p>Confirm Password</p>
				<p><input type = "text" name = "password" placeholder = "Password"> </p>
				<p><input type = "button" value="Register"></p>
			</div>
		</div>

		<?php include "footer.php" ?>
	</div>
</body>
</html>