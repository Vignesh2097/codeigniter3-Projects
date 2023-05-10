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
  border:2px yellow;
  padding-left:100px;
  padding-right:100px;
  padding-top:60px;
  padding-bottom:70px;
  margin:0 auto;
 }
 h3{
	 color:DodgerBlue;
	 font-family:Times New Roman;
 }
 body{
	background-color:white;
 }
 #listRecords,#listRecords td,#listRecords th{
	border:2px solid white;
	border-collapse:collapse;
	padding:10px;
	background-color: #D6EEEE;
	text-align:center;
 }
 #listRecords td{
    font-weight:normal;
	font-size:85%;
 }
 #List th{
	border:2px solid white;
	border-collapse:collapse;
	padding:5px;
	background-color: #D6EEEE;
	text-align:center;
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
 Select Date of Birth: <select id='sel_dob'>
<?php 
foreach($date as $line){
echo "<option value='".$line['dob']."'>".$line['dob']."</option>";
}
?>
</select><br><br>
 </div>
 </div><br>
<table class="table table-striped" id="List">
<thead>
<tr>
<th>Id no</th>
<th>FirstName</th>
<th>LastName</th>
<th>Date of birth</th>
<th>Email</th>
<th>Password</th>
<th>Confirm</th>
</tr>
</thead>
<tbody id="listRecords">                    
</tbody>
</table>
<script>
$(document).ready(function(){
	$('#sel_dob').change(function(){
		var dob = $(this).val();
		$.ajax({
			url:"<?=base_url('login_controller/Details')?>",
            method: 'post',
            data: {dob:dob},
            dataType: 'json',
            success:  function(data){
			var html = '';
			var i;
			for(i=0; i<data.length; i++){
				html += '<tr id="'+data[i].id+'">'+
				        '<td>'+data[i].id+'</td>'+
						'<td>'+data[i].firstname+'</td>'+
						'<td>'+data[i].lastname+'</td>'+
						'<td>'+data[i].dob+'</td>'+		                        
						'<td>'+data[i].email+'</td>'+
						'<td>'+data[i].password+'</td>'+
						'<td>'+data[i].confirm+'</td>'+
						'</tr>';
			}
			$('#listRecords').html(html);					
		}
	});
});
});
</script>
</body>
</html>




































</body>
</head>
</html>



























			
				
	
	
	
	
	
	
	
	












