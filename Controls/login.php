<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
</head>
<body>
	<div class="form" align="center">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<h1>Login</h1>
			<input type="text" name="user" placeholder="enter username" required>
			<input type="password" name="pass" placeholder="enter password" required>
			<input type="submit" value="submit">
			<p><?php
			error_reporting(0);
			include('action.php'); ?></p>
		</form>
	</div>
</body>
</html>