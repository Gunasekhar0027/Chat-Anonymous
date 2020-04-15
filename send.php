<?php
session_start();
include('config.php');
 $n=$_SESSION['name'];		
	$message = $_POST['message'];
	$sql = "insert into livechat (name,message) values ('$n','$message')";
	if(mysqli_query($con, $sql)){					
	}
?>
