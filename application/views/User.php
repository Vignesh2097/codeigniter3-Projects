 <!DOCTYPE html>
<html>
<head>
<title>Ticketing Tool</title>
</head>
<style>
table{
 border:1px solid black;
 padding-left:85px;
 padding-right:85px;
 padding-top:60px;
 padding-bottom:120px;
 background-color:white;
 margin-top:20px;
}
body{
 background:url(<?php echo base_url('assets/HelpDesk/back.png');?>)no-repeat center fixed;
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
 img{
 width:100px;
 height:50px;
 }
 th{
 font-weight:bold;
 color:DodgerBlue;
 font-size:200%;
 }

 
</style>
<body>
<h1>HD Ticketing Services</h1>
<form method="post" action="<?=base_url('ticketing/register')?>">
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
<td><input type="submit" name="submit" value="Submit" align="center" style="background-color:rgb(0, 75, 255);border:rgb(0, 75, 255);width:175px;height:30px;color:white;"></td>
<tr>
<td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or</p></td>
<tr>
<td><input type="button" name="signin" value="Sign-in" style="background-color:rgb(0, 75, 255);border:rgb(0, 75, 255);width:175px;height:30px;color:white;"></td>
<tr>
<td align="left" style="color:red;"><?php echo @$error;?></td>
</tbody>
</table>
</form>


</body>
</html>
