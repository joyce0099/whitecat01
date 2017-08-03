<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Add User</title>
	<link rel="stylesheet" href = "./css/index.css">
</head>
<body>
	<div class = "main">
		<?php include "./header.php" ?>
		<div class = "form">
		<form action = "insert.php" method = "post">
		<p>User Name</p>
		<p><input type = "text" name = "username"></p>

		<p>Email</p>
		<p><input type = "text" name = "email"></p>
		
		<p>Password</p>
		<p><input type = "password" name = "password"></p>

		<p><input type = "submit" name = "Register"></p>

	    </form>

		</div>

	</div>

</body>
</html>