<?php
$search=$_POST['search'];
if ($search!='') {	
	$conn = mysqli_connect('localhost','root','','chatapplication') or die('could not connect');
	$query = "select * from login where mobilenumber = '".$search."'";
	$row = mysqli_query($conn,$query);
	if(mysqli_num_rows($row) == 1){
		$arr = mysqli_fetch_assoc($row);
		echo "<input type='submit' name='friend' value='".$arr['username']."' class='btn btn-primary btn-block'><hr>";		
	}else{
		echo "This number doesn't have an account";
	}
}
?>