<!DOCTYPE html>
<html>
<head>
<title>Ticketing Tool</title>
</head>
<style>
table{
 border:1px white;
 padding-left:85px;
 padding-right:85px;
 padding-top:60px;
 padding-bottom:120px;
 background-color:white;
 margin-top:20px;
 animation-duration:1s;
 animation-name:slideup;
} 
@keyframes slideup{
	from{
		margin-left:50%;
	}
	to{
		margin-left:600px;
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
<a href="<?=base_url('ticketing/reg')?>"><input type="button" name="home" value="Back to User Registration" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
</div>
<form method="post" action="<?php echo site_url('ticketing/dashboard');?>">
<table align="center">
<tbody>
<tr>
<th>User's Login</th></tr><tr>
<tr>
<tr>
<td>Email</td>
<tr>
<td><input type="email" name="email" required></td>
<tr><tr><tr><tr>
<td>Password</td>
<tr>
<td><input type="password" name="password" required></td>
<tr><tr><tr><tr>
<td><input type="submit" name="submit" value="Login" align="center" style="background-color:rgb(0, 75, 255);border:rgb(0, 75, 255);width:175px;height:30px;color:white;"></td>
<tr>
<td align="center"><?php echo @$error;?></td>
</tbody>
</table>
</form>
</body>
</html>
