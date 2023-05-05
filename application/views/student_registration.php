<!DOCTYPE html>
<html>
<head>
<title>Student Registration form</title>
</head>
<style>
table{
	width:600px; 
	border:2px solid black; 
	padding-left:85px;
	padding-right:85px;
	padding-top:50px;
	padding-bottom:100px;
	background-color:rgba(255, 255, 0, 1);
}
td{
	font-size:15px;
}
tr{
	width:20px;
	height:10px;
}
body{
	background-color:hsl(300, 76%, 72%);
}
	
</style>
<body>
	<form method="post">
		<table align="center">
	<tr>
		<td colspan="2"><?php echo @$error; ?></td>
	</tr>	
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Password </td>
    <td><input type="password" name="pass"/></td>
  </tr>

  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="mobile"/></td>
  </tr>
  
  <tr>
    <td>Select Your Course </td>
    <td>
	<select name="course">
		<option value="">Select Course</option>
		<option>PHP</option>
		<option>Java</option>
		<option>Wordpress</option>
	</select>
	</td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="register" value="Register Me"/>
	<input type="reset" name="reset" value="Reset"/></td>
  </tr>
</table>

	</form>
</body>
</html>