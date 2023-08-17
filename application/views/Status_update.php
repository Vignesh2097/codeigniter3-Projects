<!DOCTYPE html>
<html>
<head>
<title>Status Update</title>
</head>
<style>
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
 #additional_message{
 margin-top:10px;
 margin-left:45px;
 font-size:17px;
 }


</style>
<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
<form id="ticket" align="center" method="POST">
<label for="status">Status</label>
<input type="text" id="status" name="status" size="30" value="<?php echo $row->status;?>" style="height:20px;"><br><br><br><br>
<label for="additional_message"></label><br>
<textarea id="additional_message" name="additional_message" rows="10" cols="45" value="<?php echo $row->additional_message;?>"></textarea><br><br>
<input type="submit" name="submit" value="submit" id="submit" style="background-color:rgb(99, 244, 255);border:1px rgb(99, 244, 255);height:30px;width:60px;">
</table>
</form>
<?php } ?>
</body>
</html>
