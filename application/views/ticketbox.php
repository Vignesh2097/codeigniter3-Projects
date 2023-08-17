<!DOCTYPE html>
<html>
<head>
<title>Ticket Submission</title>
</head>
<style>
#req{
float:center;
position:relative;
}
h1{
color:yellow;
text-align:center;
}
body{
 background:url(<?php echo base_url('assets/HelpDesk/Background.png');?>)no-repeat center fixed;
 background-size:cover;
 
 }
 label{
 font-weight:bold;
 color:rgb(130, 255, 0);
 font-size:17px; 
 }
 #dropzone{
 margin-left:10px;
 font-size:14px;
 }
 #message{
 margin-top:10px;
 margin-left:45px;
 font-size:17px;
 }
#tab{
padding-top:50px;
padding-left:650px;
padding-bottom:20px;
background-color:white;
}


</style>
<body>
<form id="tab" align="center" method="POST" action="<?=base_url('ticketing/createtab')?>">
<a href="<?=base_url('ticketing/index')?>"><input type="button" name="home" value="Home" style="background-color:white;border:white;float:center;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('ticketing/createtab')?>"><input type="button" name="create" value="Raise Ticket" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('ticketing/viewticket')?>"><input type="button" value="View Ticket"style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
<a href="<?=base_url('ticketing/login')?>"><input type="button" name="login" value="Go Back" style="background-color:white;border:white;color:DodgerBlue;font-weight:bold;font-size:15px;"></a>
</form>
<br><br>
<form id="ticket" align="center" method="POST" action="<?=base_url('ticketing/raiseticket')?>">
<label for="raised_date">Date</label>
<input type="date" id="raised_date" name="raised_date" size="50" required style="height:17px;"><br><br>
<label for="requester">Requester&nbsp;</label>
<input type="text" id="requester" name="requester" size="50" placeholder="Name" required style="height:17px;">
<label for="remail">&nbsp;&nbsp;Email&nbsp;</label>
<input type="email" id="remail" name="remail" size="50" placeholder="Email of the requester" required style="height:17px;"><br><br><br>
<label for="contact">Assigned to&nbsp;</label>
<input type="text" id="contact" name="contact" size="50" placeholder="Name" required style="height:17px;">
<label for="cemail">&nbsp;&nbsp;Email&nbsp;</label>
<input type="email" id="cemail" name="cemail" size="50" placeholder="Email of the assigned person" required style="height:17px;"><br><br><br>
<label for="request_type" style="float:left;position:relative;margin-left:260px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Request type&nbsp;</label>
<select id="request_type" name="request_type" style="width:180px;height:30px;float:left;">
  <option value="Request a new account">Request a new account</option>
  <option value="Request admin access">Request admin access</option>
  <option value="Request new hardware">Request new hardware</option>
  <option value="Request new software">Request new software</option>
  <option value="Report a system problem">Report a system problem</option>
  <option value="Report broken hardware">Report broken hardware</option>
  <option value="Get IT help">Get IT help</option>
  <option value="Others">Others</option>
</select>
<label for="status" style="float:left;position:relative;margin-left:260px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status&nbsp;</label>
<select id="status" name="status" style="width:180px;height:30px;float:left;">
  <option value="Raised ticket">Raised ticket</option>
  <option value="Immediate">Immediate requirement</option>
  </select><br><br><br>
<label for="subject">Subject</label>
<input type="text" id="subject" name="subject" size="58" style="height:20px;">
<label for="message"></label><br>
<textarea id="message" name="message" rows="10" cols="45"></textarea><br><br>
<label for="additional_message"></label><br>
<textarea id="additional_message" name="additional_message" rows="10" cols="45" placeholder="Message can be given by both admin and user"></textarea><br><br>
 <input type="submit" name="submit" value="Submit" id="submit" style="background-color:rgb(99, 244, 255);border:1px rgb(99, 244, 255);height:30px;width:60px;">
</form>
</body>
</html>
