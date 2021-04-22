<?php
include_once"connection.php";
if(!isset($_POST['submit'])){
	$user_id=$_GET['my_id'];
	$sql="Delete FROM curd204 Where id='".$user_id."'";
	if(mysqli_query($conn,$sql)){
		header("location: home.php");
	}else{
		echo "delete edting record".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>