<?php

session_start();
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date1 = date("M,d,Y h:i:s A")."<br>";

$date = date("M,d,Y h:i:s A", time()-1);

$conn = mysqli_connect('localhost','root','','chatapplication') or die('could not connect');
	$query = "select * from ".$_SESSION['mobilenumber']."_chat where username='".$_SESSION['friend']."' and time='".$date."' and status='receive'";
	$row = mysqli_query($conn,$query);
	if(mysqli_num_rows($row) > 0){
		?><script type="text/javascript">
			$('#chat').load('chattingagain.php'); 
		</script><?php
	}
?>