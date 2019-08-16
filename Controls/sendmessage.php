<?php
session_start();
$conn = mysqli_connect('localhost','root','','chatapplication') or die('could not connect');
date_default_timezone_set('Asia/Kolkata');
$message = test_input($_POST['send_chat']);
$remove[] = "'";
$remove[] = '"';
$remove[] = "-"; 
$message = str_replace( $remove, "", $message );
$date = date("M,d,Y h:i:s A");
if($message !=''&&$_SESSION['friend']!=''){
	$query = "select * from login where username = '".$_SESSION['friend']."'";
	$row = mysqli_query($conn,$query);
	if(mysqli_num_rows($row) == 1){
		$arr = mysqli_fetch_assoc($row);
	}
	$query_send = "insert into ".$_SESSION['mobilenumber']."_chat values('".$_SESSION['friend']."','".$message."','".$date."','send')";
	$query_receive = "insert into ".$arr['mobilenumber']."_chat values('".$_SESSION['user']."','".$message."','".$date."','receive')";
	if(mysqli_query($conn,$query_send)&&mysqli_query($conn,$query_receive)){
		header('Location:chat.php');
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>