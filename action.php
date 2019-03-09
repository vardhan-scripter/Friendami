<?php
session_start();
$user=test_input($_POST['user']);
$pass=test_input($_POST['pass']);
if ($user!='') {
	
	$conn = mysqli_connect('localhost','root','','chatapplication') or die('could not connect');
	$query = "select * from login where username = '".$user."' and password = '".$pass."'";
	$row = mysqli_query($conn,$query);
	if(mysqli_num_rows($row) == 1){
		$arr = mysqli_fetch_assoc($row);
		$_SESSION['user'] = $arr['username'];
		$_SESSION['mobilenumber'] = $arr['mobilenumber'];
		header('Location:chat.php');		
	}else{
		echo "please enter valid details*";
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>