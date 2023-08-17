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
<a href="<?=base_url('ticketing/reg')?>"><input type="button" name="home" value="Back to User Registration" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
</div>

<form method="post" action="<?=base_url('admin/submit')?>" id="cont">
<table align="center">
<tbody>
<tr>
<th>Admin Registration</th></tr><tr>
<tr>
<tr>
<td>First Name</td>
<tr>
<td><input type="text" name="firstname" required></td>
<tr><tr><tr><tr>
<td>Last Name</td>
<tr>
<td><input type="text" name="lastname" required></td>
<tr><tr><tr><tr>
<td>Email</td>
<tr>
<td><input type="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required></td>
<tr><tr><tr><tr>
<td>Password</td>
<tr>
<td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td>
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
<td align="center"><?php echo @$error;?></td>
</tbody>
</table>
</form>
</body>
</html>
