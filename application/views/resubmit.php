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


</style>
<body>
<form id="ticket" align="center" method="POST" action="<?php echo site_url('ticketing/update/'. $ticket['ticket_no']); ?>">
<label for="raised_date">Date&nbsp;</label>
<input type="date" id="raised_date" name="raised_date" size="50" placeholder="Name" value="<?php echo $ticket['raised_date']; ?>" required><br><br>
<label for="requester">Requester&nbsp;</label>
<input type="text" id="requester" name="requester" size="50" placeholder="Name" value="<?php echo $ticket['requester']; ?>" required>
<label for="remail">&nbsp;&nbsp;Email&nbsp;</label>
<input type="email" id="remail" name="remail" size="50" placeholder="Email of the requester" value="<?php echo $ticket['remail']; ?>" required><br><br><br>
<label for="contact">Assigned to&nbsp;</label>
<input type="text" id="contact" name="contact" size="50" placeholder="Name" value="<?php echo $ticket['contact']; ?>" required>
<label for="cemail">&nbsp;&nbsp;Email&nbsp;</label>
<input type="email" id="cemail" name="cemail" size="50" placeholder="Email of the assigned person" value="<?php echo $ticket['cemail']; ?>" required><br><br><br>
<label for="request_type" style="float:left;position:relative;margin-left:260px;">Request type&nbsp;</label>
<select id="request_type" name="request_type" style="float:left;">
<option value="Request a new account" <?php echo ($ticket['request_type'] === 'Request a new account') ? 'selected' : '';?>>Request a new account</option>
<option value="Request admin access" <?php echo ($ticket['request_type'] === 'Request admin access') ? 'selected' : '';?>>Request admin access</option>
<option value="Request new hardware" <?php echo ($ticket['request_type'] === 'Request new hardware') ? 'selected' : '';?>>Request new hardware</option>
<option value="Request new software" <?php echo ($ticket['request_type'] === 'Request new software') ? 'selected' : '';?>>Request new software</option>
<option value="Report a system problem" <?php echo ($ticket['request_type'] === 'Report a system problem') ? 'selected' : '';?>>Report a system problem</option>
<option value="Report broken hardware" <?php echo ($ticket['request_type'] === 'Report broken hardware') ? 'selected' : '';?>>Report broken hardware</option>
<option value="Get IT help" <?php echo ($ticket['request_type'] === 'Get IT help') ? 'selected' : ''; ?>>Get IT help</option>
<option value="Others" <?php echo ($ticket['request_type'] === 'Others') ? 'selected' : ''; ?>>Others</option>
</select>
<label for="status">Status</label>
<select id="status" name="status">
    <option value="Immediate requirement"<?php if ($ticket['status'] === 'Immediate requirement') echo 'selected'; ?>>Immediate requirement</option>
    <option value="Raised Ticket"<?php if ($ticket['status'] === 'Raised Ticket') echo 'selected'; ?>>Raised Ticket</option>
</select><br><br><br><br>
<label for="subject">Subject</label>
<input type="text" id="subject" name="subject" size="58" value="<?php echo $ticket['subject']; ?>">
<label for="message"></label><br>
<textarea id="message" name="message" rows="10" cols="45"><?php echo $ticket['message']; ?></textarea><br><br>
<label for="additional_message"></label><br>
<textarea id="additional_message" name="additional_message" rows="10" cols="45"><?php echo $ticket['additional_message']; ?></textarea><br><br>
<input type="hidden" name="ticket_no" value="<?php echo $ticket['ticket_no']; ?>">
<input type="submit" name="resubmit" value="Resubmit" id="submit">
</form>
</body>
</html>
