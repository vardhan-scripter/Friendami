<?php
session_start();
error_reporting(0);
if($friend!=''||$_SESSION['friend']!=''){
	$conn = mysqli_connect('localhost','root','','chatapplication') or die('could not connect');
	$friend = $_POST['friend'];
	if ($friend == '') {
		$friend = $_SESSION['friend'];
	}else{
		$_SESSION['friend'] = $friend;
	}
	$mobilenumber = $_SESSION['mobilenumber'];
	echo "<div class='chatperson'><h1 align='center' id='chatperson'>".$friend."</h1></div>
	<div class='overallchat' id='overallchat'>";
	$query = "select * from ".$mobilenumber."_chat where username = '".$friend."'";
	$row = mysqli_query($conn,$query);
	if(mysqli_num_rows($row) >0){
		while ($friend = mysqli_fetch_assoc($row)) {
			if($friend['status']=='receive'){
				echo "<div class='receiver_div'><h3 class='receiver_message'>".$friend['chat']."</h3><small>".$friend['time']."</small></div><br>";
			}elseif ($friend['status']=='send') {
				echo "<div class='sender_div'><h3 class='sender_message'>".$friend['chat']."</h3><small>".$friend['time']."</small></div><br>";
			}
		}	
	}else{
		echo "You have no chat with your friend";
	}
	echo "</div>";
}else{
	echo "<h1 class='select'>select a contact to chat</h1>";
}
?>

<script type="text/javascript">
	$(document).ready(function() {

		var d = $('#overallchat');
		d.scrollTop(d.prop("scrollHeight"));
	})
</script>
