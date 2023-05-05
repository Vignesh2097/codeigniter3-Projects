<!DOCTYPE html>
<html>
<head>
<title>Select date of birth</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
 .box{
  background-color:yellow;
  width:500px;
  border:2px solid black;
  padding-left:100px;
  padding-right:100px;
  padding-top:125px;
  padding-bottom:125px;
  margin:0 auto;
 }
 h3{
	 color:DodgerBlue;
	 font-family:Times New Roman;
 }
 body{
	background-color: lightblue;
 }
 #dbresult,#dbresult td,#dbresult th{
	border:1px solid black;
	border-collapse:collapse;
	padding:10px;
	background-color: #D6EEEE;
	text-align:center;
 }
 #dbresult td{
    font-weight:normal;
	font-size:85%;
 }

</style>
</head>
<body>
<div class="container box">
<br>
<br>
<h3 align="center"><b>Login using date of birth<b></h3>
<br>
<div class="form-group">
<label for="date">Date of birth</label>
<select name="date" id="date" class="form-control input-lg">
<option value="">Select</option>
<!--To get all the values from the column id we are using the variable $datas that we have already passed 
To loop the data dob present in Sdobs variable one by one-->
<?php foreach($dobs as $rows) {?>
  <option id="options" value=""><?=$rows->dob?></option>
  <?php } ?>   
 </select><br><br>
 </div>
</body>
</div>
<table id="dbresult" align="center">
  <thead>
     <tr>
	 <th>ID</th>
     <th>FirstName</th>
	 <th>LastName</th>
	 <th>Date of birth</th>
     <th>Email</th>
     <th>Password</th>
	 <th>Confirm</th>
     </tr>
</thead>
<tbody>
    <?php foreach($dob as $row):?>
	<tr>
	<td><?=$row[id]?></td>
	<td><?=$row[firstname]?></td>
	<td><?=$row[lastname]?></td>
	<td><?=$row[dob]?></td>
	<td><?=$row[email]?></td>
	<td><?=$row[password]?></td>
	<td><?=$row[confirm]?></td>
	</tr>
 <?php endforeach;?>
 </tbody>
</table>
<script>			
$(document).ready(function(){
	$('#date').change(function(){
		var dob=$(this).val();
		if(dob!=""){
			$.ajax({
				url:"<?=base_url('Select/fetch')?>",
                method:"GET",
                data:{dob:dob},
                success: function(data){
				$('#dbresult').html(data)
			}else{
			$('#dbresult').html("No data found");
		}
	});
});
</script>
</html>




































</body>
</head>
</html>



























			
				
	
	
	
	
	
	
	
	












