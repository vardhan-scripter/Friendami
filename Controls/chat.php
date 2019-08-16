<!DOCTYPE html>
<html>
<head>
	<title>chat application</title>
	<link rel="stylesheet" media="screen and (min-width: 900px)" href="../css/chatbox.css">
	<link rel="stylesheet" media="screen and (max-width: 899px)" href="../css/mobile.css">
	<!--<link rel="stylesheet" type="text/css" href="css/chatbox.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div align="center" class="header">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="chatbox">
				<div class="whole">

					<div class="name"><h1><?php
					session_start();
					error_reporting(0);
					$mobilenumber=$_SESSION['mobilenumber'];
					if ($mobilenumber == '') {
						header('Location:../index.php');
					}
					echo $_SESSION['user']; ?></h1></div>

					<div class="contacts">
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="enter searching mobilenumber" name="search">
								<div class='input-group-btn'>
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
							<br> <?php include('friendsearch.php'); ?>
						</form>
						<h2>Friends</h2>
						<?php include('friends.php'); ?>
					</div>
				</form>	
			</div>
			<div class="searchandchat">
			<div id="chat">
				<?php include('chatting.php'); ?>
			</div>
			<div class="formed" id="formed">
			<form action='sendmessage.php' method='post' id='form'>
	<div class='input-group'><input type='text' name='send_chat' placeholder='chat here' class='form-control' required><div class='input-group-btn'><input type='submit' name='submit' value='send' class='btn btn-success'></div>
	</div>
	</form></div>
</div>
		</div>
	</div>
	<button id="reload"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M9 13.5c-2.49 0-4.5-2.01-4.5-4.5S6.51 4.5 9 4.5c1.24 0 2.36.52 3.17 1.33L10 8h5V3l-1.76 1.76C12.15 3.68 10.66 3 9 3 5.69 3 3.01 5.69 3.01 9S5.69 15 9 15c2.97 0 5.43-2.16 5.9-5h-1.52c-.46 2-2.24 3.5-4.38 3.5z"/></svg></button>
	<h2 style="position: absolute;top: 1%;left: 2%;"><a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/></svg></a></h2>
	<?php include('sendmessage.php'); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			

			var d = $('#overallchat');
			d.scrollTop(d.prop("scrollHeight"));
		})

		setInterval(function() {
			$('#reload').load('check.php'); 
		},1000)
	</script>
</body>
</html>