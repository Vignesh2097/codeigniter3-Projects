<!DOCTYPE html>
<html>
<head>
<title>save data using Ajax</title>
<style>
.content{
  background-color:DodgerBlue;
  width:500px;
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
<div class="container"align="center">
<h1 align="center">Ajax Form using CI</h1>
 	<div class="content" align="center">
      <label for="email">Enter Your Name:</label>
      <input type="text" class="name" id="name" placeholder="Enter Name" name="name">
    <br><br>
      <label for="email">Enter Your Email:</label>
      <input type="email" class="email" id="email" placeholder="Enter Email" name="email">
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

//The values we give inside name,email,course should gets submitted and should show that the 
//data is saved successfully after clicking the save data button 
$("#butsave").click(function() 
{

//The values given here gets stored in their respective variable names 
var name = $('#name').val();
var email = $('#email').val(); 
var course = $('#course').val();

	if(name!="" && email!="" && course!="")
	{
        //Perform an asynchronous HTTP (Ajax) request.
		jQuery.ajax({
		type: "POST",
		url: "http://localhost/Codeigniter-3/AjaxController/savedata",
		dataType: 'html',
		data: {name: name, email: email,course:course},
		success: function(res) 
		{
			if(res==1)
			{
			alert('Data saved successfully');	
			}
			else
			{
			alert('Data not saved');	
			}
			
		},
		error:function()
		{
		alert('data not saved');	
		}
		});
	}
	else
	{
	alert("please fill all fields first");
	}

});
});
</script>
</body>
</html>