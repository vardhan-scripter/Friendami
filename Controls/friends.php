<?php
$conn = mysqli_connect('localhost','root','','chatapplication') or die('could not connect');
$query = "select * from ".$mobilenumber."_chat group by username";
$row = mysqli_query($conn,$query);
if(mysqli_num_rows($row) >0){
	while ($friend = mysqli_fetch_assoc($row)) {
		echo "<span class='glyphicon glyphicon-user'></span><input type='submit' name='friend' value='".$friend['username']."' class='contact_friend'>";
	}	
}else{
	echo "You have no friends";
}
?>