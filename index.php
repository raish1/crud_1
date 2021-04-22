<html>
<head>
  <style>
     body,th{text-align:center;}
     body{background-color: blue;}
	 body,th,td{border: 1px solid black;}
	 table{width: 100%;}
  </style>
</head>
<body>
<h1><i>#FORM#</i></h1>
<form action="success.php" method="post">
<tr>
  <th>USERNAME:</th>
  <td><input type="text" name="username" value=""/></td><br><br>
</tr>
<tr>
  <th>PASSWORD:</th>
  <td><input type="password" name="password" value=""/></td><br><br>
</tr>
<tr>
  <th>EMAIL ID:</th>
  <td><input type="email" name="email" value=""/></td><br><br>
</tr>
<tr>
  <th>GENDER:</th>
  <td><input type="radio" name="gender" value="male"/>M</td>
  <td><input type="radio" name="gender" value="female"/>F</td><br><br>
</tr>
<tr>
  <th>SUBJECT:</th>
  <td><input type="checkbox" name="subject[]" value="java"/>java</td>
  <td><input type="checkbox" name="subject[]" value="php"/>php</td>
  <td><input type="checkbox" name="subject[]" value="c"/>c</td>
  <td><input type="checkbox" name="subject[]" value="python"/>phython</td><br><br>
</tr>
<tr>
    <td>Message</td></br>
    <td><textarea placeholder="contents" value="" cols="30" rows="5" name="textbox"></textarea></td></br></br>
  </tr>
<tr>
	<th>BRANCH:</th>
	<td>
		<select name="branch">
		<option value="">select branch</option>
		<option>B.Tech</option>
		<option>MBA</option>
		<option>BCA</option>
		<option>MCA</option>
		</select></br></br>
	</td>
</tr>				
<tr>
  <td><input type="submit" name="submit" value="login"/></td><br><br>
</tr>
</form>
</body>
</head>
</html>