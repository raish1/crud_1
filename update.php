<?php
include_once"connection.php";
$query=$result=$username=$password=$branch=$email=$gender=$subjects=$text=$subject_php=$row="";
if(!isset($_POST['submit'])){
	$user_id=$_GET['my_id'];
	$sql="SELECT*FROM curd204 where id='".$user_id."'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);
	$username =$result['username'];
	$password =$result['password'];
	$email =$result['email'];
	$gender =$result['gender'];
	$subjects = explode(",",$result['subject']);
	$text=$result['textbox'];
	$branch=$result['branch'];
	mysqli_close($conn);
}


if(isset($_POST['submit'])){
	$username_update=$_POST['username'];
	$password_update=$_POST['password'];
	$email_update=$_POST['email'];
	$gender_update=$_POST['gender'];
	$subject_update=implode(",",$_POST['subject']);
	$user_edit_id=$_POST['user_edit_id'];
	$text_update=$_POST['textbox'];
	$branch_update=$_POST['branch'];
	 
	if($username_update!="" && $password_update!=""){
		$sql="UPDATE curd204 SET username='".$username_update."',password='".$password_update."',email='".$email_update."',gender='".$gender_update."',subject='".$subject_update."',textbox='".$text_update."',branch='".$branch_update."' where id='".$user_edit_id."'";
		if($conn->query($sql)===TRUE){
			header("location: home.php");
		}else{
			echo "error".$sql."</br>".$conn->error;
		}
	}else{
		echo "data is not founded";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
     body,th{text-align:center;}
     body{background-color: orange;}
	 table{width: 100%;}
  </style>
</head>
<body>
  <form action="update.php" method="post">
  <input type="hidden" name="user_edit_id" value="<?php echo $user_id;?>"/>
  <tr>
     <th>USERNAME:</th>
	 <td><input type="text" name="username" value="<?php echo $username;?>"/></td></br></br>
  </tr>
  <tr>
     <th>PASSWORD:</th>
	 <td><input type="password" name="password" value="<?php echo $password;?>"/></td></br></br>
  </tr>
  <tr>
     <th>EMAIL ID:</th>
	 <td><input type="email" name="email" value="<?php echo $email;?>"/></td></br></br>
  </tr>
  <tr>
     <th>GENDER:</th>
	 <td><input type="radio" name="gender" value="male"<?php if($gender=="male"){ echo "checked";}?>/>male</td>
	 <td><input type="radio" name="gender" value="female"<?php if($gender=="female"){ echo "checked";}?>/>female</td></br></br>
  </tr>
  
  <tr>
    <th>SUBJECT:</th>
	<td><input type="checkbox" name="subject[]" value="java"<?php if(in_array("java", $subjects)){ echo "checked";}?>/> java</td>
    <td><input type="checkbox" name="subject[]" value="php"<?php if(in_array("php",$subjects)){ echo "checked";}?>/>php</td>
    <td><input type="checkbox" name="subject[]" value="c"<?php if(in_array("c",$subjects)){ echo "checked";}?>/>c</td>
    <td><input type="checkbox" name="subject[]" value="python"<?php if(in_array("python",$subjects)){ echo "checked";}?>/>python</td></br></br>
  </tr>
  <tr>
    <th>MASSEGE:</th></br>
    <td><textarea name="textbox"rows="10" cols="40"  ><?php echo htmlspecialchars($text);?></textarea></td></br></br>
  </tr>
  <tr>
	<th>BRANCH</th>
	<td>
	<select name="branch">
	<option value="">Select Branch</option>
	<option <?php if($branch=="B.Tech"){echo "selected";}?>>B.Tech</option>
	<option <?php if($branch=="MBA"){echo "selected";}?>>MBA</option>
	<option <?php if($branch=="BCA"){echo "selected";}?>>BCA</option>
	<option <?php if($branch=="MCA"){echo "selected";}?>>MCA</option>
	</select>
	</td></br></br>
  </tr>
  <tr>
	 <td><input type="submit" name="submit" value="update"/></td>
  </tr>
  </form>
</body>
</html>