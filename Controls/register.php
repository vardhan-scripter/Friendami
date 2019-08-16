<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
</head>
<body>
	<div class="registerform" align="center">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<h1>SignUp</h1>
			<input type="text" name="user" placeholder="enter username" required>
			<input type="password" name="pass" placeholder="enter password" required>
			<input type="text" name="mobilenumber" placeholder="enter mobile number" required>
			<input type="submit" value="register">
			<p><?php
			error_reporting(0);
			include('registeraction.php'); ?></p>
		</form>
	</div>
</body>
</html>