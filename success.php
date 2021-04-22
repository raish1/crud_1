<?php
require"connection.php";
$gender=$subject="";
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$subject=implode(",",$_POST['subject']);
	$text=$_POST['textbox'];
	$branch=$_POST['branch'];
	if($username!="" && $password!=""){
		$sql="INSERT INTO curd204(`username`,`password`,`email`,`gender`,`subject`,`textbox`,`branch`)
		     VALUES('".$username."','".$password."','".$email."','".$gender."','".$subject."','".$text."','".$branch."')";
			 if($conn->query($sql)===TRUE){
				 header("location: home.php");
			 }else{
				 echo "error".$sql."</br>".$conn->error;
			 }
			 $conn->close();
	}else{
		echo "data is not founded";
	}
	
}
?>