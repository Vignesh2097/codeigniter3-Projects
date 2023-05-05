<!DOCTYPE html>
<html>
<head>
<title>User checking using Ajax</title>
<style>
.content{
  background-color:DodgerBlue;
  width:700px;
  padding:100px;
  margin: 1px;
}
h1{
	color:Tomato;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container" align="center">
<h1 align="center">Username checking using Ajax and CI</h1>
 	<div class="content" align="center">
      <label for="email">Enter Your Name:</label>
      <input type="text" class="name" id="name" placeholder="Enter Name" name="name">
    <br><br><br>
      <label for="email">Enter Your Email:</label>
      <input type="email" class="email" id="email" placeholder="Enter Email" name="email">
	  <br>
	  <label id="msg"></label>
   <br><br>
      <label for="email">Enter Your Course:</label>
      <input type="text" class="course" id="course" placeholder="Enter course" name="course">
   <br><br>
    <input type="button" class="save-data-button" value="save data" id="butsave">
</div>
</div>
<script type="text/javascript">
// Ajax post
$(document).ready(function() 
{
	
$("#email").blur(function() //This function blurrs the label box of email opposite of this is .focus
{
var email = $('#email').val();

	if(email!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url('/Ajax_Controller/checkUser'); ?>",
		dataType: 'html',
		//It compares the mail with the mailid stored in the database
		data: {email: email},
		success: function(res) 
		{
			//If the user already exists the msg gets printed in the mentioned color under the email box
			if(res==1)
			{
			//Declaring the message to be printed by giving a color
			$("#msg").css({"color":"rgb(0, 255, 0)"});
			$("#msg").html("This user already exists");
			}
			//otherwise the msg gets printed in green color under the email box
			else
			{
			$("#msg").css({"color":"green"});
			$("#msg").html("Congrates username available !");	
			}
			
		},
		error:function()
		{
		alert('some error');	
		}
		});
	}
	else
	{
	alert("please enter your email id ");
	}

});
});
</script>
</body>
</html>