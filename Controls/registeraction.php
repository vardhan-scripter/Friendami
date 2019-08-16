<?php
session_start();
$user=test_input($_POST['user']);
$pass=test_input($_POST['pass']);
$mobilenumber=$_POST['mobilenumber'];
if ($user!=''){
	if(strlen($mobilenumber) == 10) {
		$conn = mysqli_connect('localhost','root','','chatapplication') or die('could not connect');
		$query = "select mobilenumber from login where mobilenumber='".$mobilenumber."'";
		$row = mysqli_query($conn,$query);
		if(mysqli_num_rows($row) == 0){
			$query = "insert into login values('".$user."','".$pass."','".$mobilenumber."')";
			if(mysqli_query($conn,$query)){
				$query = "create table ".$mobilenumber."_chat(username varchar(30),chat varchar(65535),time varchar(40), status varchar(10))";
				if(mysqli_query($conn,$query)){
					header('Location:login.php');
				}else{
					echo "registration failed";
				}
			}else{
				echo "registration failed1";
			}
			
		}else{
			echo "This number already have an account in this website";
		}
	}
	else{
		echo "enter valid mobilenumber";
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>