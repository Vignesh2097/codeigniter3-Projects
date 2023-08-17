<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<style>
#container{
padding-top:50px;
padding-left:650px;
padding-bottom:20px;
background-color:white;
}
body{
background:url(<?php echo base_url('assets/HelpDesk/Background.png');?>)no-repeat center fixed;
 background-size:cover;
 }
 h1{
	 color:yellow;
	 text-align:center;
 }
</style>
<body>
<div id="container">
<a href="<?=base_url('ticketing/reg')?>"><input type="button" name="home" value="User Registration" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('ticketing/createtab')?>"><input type="button" name="create" value="Raise Ticket" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('ticketing/viewticket')?>"><input type="button" value="View Ticket"style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('ticketing/logout')?>"><input type="button" name="logout" value="Logout" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
</div>
<h1>Now you are able to raise ticket<br>Click on view ticket to display your raised tickets</h1>

</body>
</html>