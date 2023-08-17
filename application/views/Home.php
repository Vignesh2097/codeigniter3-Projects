<!DOCTYPE html>
<html>
<head>
</head>
<style>
table{
 border:1px white;
 padding-left:85px;
 padding-right:75px;
 padding-top:60px;
 padding-bottom:120px;
 background-color:white;
 margin-top:30px;
 animation-duration:1s;
 animation-name:slideup;
} 
@keyframes slideup{
	from{
		margin-top:50%;
	}
	to{
		margin-top:30px;
	}
}

body{
 background:url(<?php echo base_url('assets/HelpDesk/Background.png');?>)no-repeat center fixed;
 background-size:cover;
 
 }
 h1{
 text-align:center;
 color:yellow;	 
 } 
 td{
 font-weight:bold;
 font-size:75%;
 }
 th{
 font-weight:bold;
 color:DodgerBlue;
 font-size:200%;
 }
 #container{
padding-top:50px;
padding-left:650px;
padding-bottom:20px;
background-color:white;
}

</style>
<body>
<div id="container">
<a href="<?=base_url('ticketing/index')?>"><input type="button" name="home" value="Home" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('ticketing/reg')?>"><input type="button" name="home" value="User Registration" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('ticketing/login')?>"><input type="button" name="login" value="User Login" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('admin/index')?>"><input type="button" name="home" value="Admin Registration" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('admin/signin')?>"><input type="button" name="login" value="Admin Login" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
</div>

<form method="post" action="<?=base_url('ticketing/register')?>" >
<table align="center">
<tbody>
<tr>
<th>User's Registration</th></tr><tr>
<tr>
<tr>
<td>First Name</td>
<tr>
<td><input type="text" name="first_name" required></td>
<tr><tr><tr><tr>
<td>Last Name</td>
<tr>
<td><input type="text" name="last_name" required></td>
<tr><tr><tr><tr>
<td>Email</td>
<tr>
<td><input type="email" name="email" required></td>
<tr><tr><tr><tr>
<td>Password</td>
<tr>
<td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
<tr><tr><tr><tr>
<td>Confirm password</td>
<tr>
<td><input type="password" name="confirm" required>
</td>
<tr><tr><tr><tr>
<td>Name of the Organization</td>
<tr>
<td><input type="text" name="company" required>
</td>
<tr><tr><tr><tr>
<td><input type="submit" name="register" value="Register" align="center" style="background-color:rgb(0, 75, 255);border:rgb(0, 75, 255);width:175px;height:30px;color:white;"></td>
<tr>
<td align="center"><?php echo @$error;?>
</td>
</tbody>
</table>
</form>
</body>
</html>
