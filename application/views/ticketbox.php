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
label{
 font-weight:bold;
 color:black;
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

</style>
<body>
<br><br>
<form id="ticket" align="center" method="POST" action="<?=base_url('UserController/raiseticket')?>">
<?php if($this->session->flashdata('status')):?>
<div class="alert alert-success">
<?=$this->session->flashdata('status');?>
</div>
<?php endif; ?>
<label for="raised_date">Date</label>
<input type="date" id="raised_date" name="raised_date" size="50" required style="height:20px;"><br><br>
<label for="requester">Requester&nbsp;</label>
<input type="text" id="requester" name="requester" size="50" placeholder="Name"  required style="height:25px;" value="<?=$this->session->userdata('auth_user')['first_name'];?>">
<label for="remail">&nbsp;&nbsp;Email&nbsp;</label>
<input type="email" id="remail" name="remail" size="50" placeholder="Email of the requester"  value="<?=$this->session->userdata('auth_user')['email'];?>" required style="height:25px;"><br><br><br>
<label for="contact">Assigned to&nbsp;</label>
<input type="text" id="contact" name="contact" size="50" placeholder="Name" required style="height:25px;">
<label for="cemail">&nbsp;&nbsp;Email&nbsp;</label>
<input type="email" id="cemail" name="cemail" size="50" placeholder="Email of the assigned person" required style="height:25px;"><br><br><br>
<label for="request_type" style="float:left;position:relative;margin-left:260px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Request type&nbsp;</label>
<select id="request_type" name="request_type" style="width:190px;height:30px;float:left;">
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
 <input type="submit" name="submit" value="Submit" id="submit" style="background-color:Tomato;border:1px rgb(99, 244, 255);height:30px;width:60px;">
</form>
</body>
</html>
