<!DOCTYPE html>
<html>
<head>
<title>Update data</title>
</head>
<style>
table{
 border:1px solid black;
 padding-left:75px;
 padding-right:75px;
 padding-top:50px;
 padding-bottom:100px;
 background-color:white;
}
body{
 background-color:rgba(0, 0, 255, 0.5);
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
<?php
$i=1;
foreach($data as $row)
{
?>
<form method="post">
<table align="center">
<tbody>
<tr>
<th>Google</th></tr><tr>
<tr>
<tr>
<td>First Name</td>
<tr>
<td><input type="text" name="firstname" value="<?php echo $row->firstname;?>"/></td>
<tr><tr><tr><tr>
<td>Last Name</td>
<tr>
<td><input type="text" name="lastname" value="<?php echo $row->lastname;?>"/></td>
<tr><tr><tr><tr>
<td>Date of Birth</td>
<tr>
<td><input type="date" name="dob" value="<?php echo $row->dob;?>"/></td>
<tr><tr><tr><tr>
<td>Email</td>
<tr>
<td><input type="email" name="email" value="<?php echo $row->email;?>"/></td>
<tr><tr><tr><tr>
<td>Password</td>
<tr>
<td><input type="password" name="password" value="<?php echo $row->password;?>"/></td>
<tr><tr><tr><tr>
<td>Confirm password</td>
<tr>
<td><input type="password" name="confirm" value="<?php echo $row->dob;?>"/></td>
<tr><tr><tr><tr>
<td><input type="submit" name="update" value="Update_Records"></td>
<tr>
</tbody>
</table>
</form>
<?php }?>


</body>
</html>