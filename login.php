<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Admin Index</title>
	<link rel="stylesheet" href = "./css/index.css">
</head>
<body>
	<div class = "main">
		<?php include "./header.php" ?>
        <div class = "form">
		<form action = "login_admin.php" method = "post">
		<p>Id</p>
		<p><input type = "text" name = "Id"></p>
		
		<p>Password</p>
		<p><input type = "password" name = "password"></p>

		<p><input type = "submit" name = "Sign In"></p>

	    </form>

		</div>

	</div>
</body>
</html>
