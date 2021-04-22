<?php
require"connection.php";
$result=$conn->query("SELECT*FROM curd204");
?>
<html>
<head>
  <style>
     body{background-color:light blue;}
	 body,th,td{border: 1px solid black;}
	 table{width: 100%;}
  </style>
</head>
<body>
  <table>
     <tr>
	   <th>USERNAME</th>
	   <th>PASSWORD</th>
	   <th>EMAIL</th>
	   <th>GENDER</th>
	   <th>SUBJECT</th>
	   <th>TEXTAREA</th>
	   <th>BRANCH</th>
	   <th>UPDATE</th>
	   <th>DELETE</th>
	 </tr>
	  <?php while($row=mysqli_fetch_array($result)){?>
	   <tr>
	      <td><?php echo $row['username'];?></td>
	      <td><?php echo $row['password'];?></td>
	      <td><?php echo $row['email'];?></td>
	      <td><?php echo $row['gender'];?></td>
	      <td><?php echo $row['subject'];?></td>
	      <td><?php echo $row['textbox'];?></td>
	      <td><?php echo $row['branch'];?></td>
		  <td><a href="update.php?my_id=<?php echo $row['id'];?>"/>Edit</a></td>
		  <td><a href="delete.php?my_id=<?php echo $row['id'];?>"/>Delete</a></td>
	   </tr>
	  <?php }?>
  </table>
</body>
</html>