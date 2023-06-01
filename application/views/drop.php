<!DOCTYPE html>
<html>
<head>
<title>Drag and drop</title>
</head>
<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
<style>
nav{
float: left;
width: 15%;
height:250px; 
background-color: hsl(0, 0%, 95%);
padding: 20px;
}
#dimensions{
color:white;
text-align:center;
border:1px DodgerBlue;
border-collapse:collapse;
background-color:DodgerBlue;
width:17.5%;
height:30px;
border-top-left-radius: 10px 10px;
border-top-right-radius: 10px 10px;
}
#draggable1,#draggable2,#draggable3{ 
width:125px; 
height:10px; 
padding: 0.5em; 
background:hsl(0, 0%, 95%);
}
#columns,#rows,#values{   
width:900px;
height:30px; 
padding-top:1px;
padding-right:10px;
padding-bottom:10px;
padding-left:0px;
text-align:center;
float: left;   
margin:10px; 
overflow:hidden; 
background: rgb(196, 246, 255); 
border:1px hsl(0, 0%, 95%);
border-top-left-radius: 5px 5px;
border-bottom-left-radius:  5px 5px; 
}
p{
width:100px; 
height:20px;
padding:10px 10px 10px 0px; 
float:left;   
background:DodgerBlue;
position:absolute;
margin-top:0px;
margin-left:0px; 
border-top-left-radius: 5px 5px;
border-bottom-left-radius:  5px 5px;
}
#box{
width:900px;
height:500px;
border-radius:2px;
background:rgb(196, 246, 255);
margin-left:300px;
margin-top:150px;
}
#List thead{
color:white;
text-align:center;
border:2px solid white;
border-collapse:collapse;
background-color:DodgerBlue;
height:40px;
padding:20px;
width:10%;

}
#records{
	border:1px solid white;
	border-collapse:collapse;
	padding:40px;
	width:10%;
	background-color:rgb(238, 130, 238);
	text-align:center;
}
#records tbody,td{
    font-weight:normal;
	color:white;
	font-size:85%;
	padding:10px;
	height:30px;
	width:10%;
 }
 #data{
	border:1px solid white;
	border-collapse:collapse;
	padding:40px;
	width:10%;
	background-color:rgb(238, 130, 238);
	text-align:center;
}
#data tbody,td{
    font-weight:normal;
	color:black;
	font-size:85%;
	padding:10px;
	height:30px;
	width:10%;
}
</style>
<body>
<form>
<table id="dimensions">
<th>Dimensions</th>
</table>
<section>
<nav>
<ul style="list-style-type:none" id="draggable1">
 <li>Employee name</li>
</ul>
<ul style="list-style-type:none" id="draggable2">
 <li>Employee_designation</li>
</ul>
<ul style="list-style-type:none" id="draggable3">
 <li>Salary</li>
</ul>
</nav>
</section>
</form>
<div id="columns" class="ui-widget-header">  
<p>Columns</p>
 </div><br><br>
<div id="rows" class="ui-widget-header">    
<p>Rows</p>
</div><br><br>
<div id="values" class="ui-widget-header">  
<p>Values</p><br><br><br></div>
<div id="box">
<table class="table table-striped" id="List">
<thead>
<tr>
<th>Employee_name</th>
</tr>
</thead>
<tbody id="records">                    
</tbody>
</table>
<table class="table table-striped" id="List">
<thead>
<tr>
<th>Employee_designation</th>
<tbody id="data">                    
</tbody>
</table>
<table class="table table-striped" id="List">
<thead>
<tr>
<th>Salary</th>
<tbody id="detail">                    
</tbody>
</table>
</div>

<script>
$(function() {  
    $("#draggable1").draggable({helper:"clone"});
         $("#columns").droppable({  
            accept:"#draggable1",  
            drop: function(event,ui,data) {  
               $(this).addClass("ui-state-highlight").find("p").html("Columns").css("color","red");
			   var employeename=$(this).val();

		$.ajax({
			url:"<?=site_url('dragcontroller/names')?>",//Shorthand php
            method:'post',
            data:{Employee_name:employeename},//{column name:variable name that we give}
            dataType:'json',
            success: function(data){
			var html='';
			var i='';
			for(i=0;i<data.length;i++){
				html +=  '<tr id="'+data[i].id+'">'+
						'<td>'+data[i].Employee_name+'</td>'+
						'</tr>';
			}
			$('#records').html(html);					
		}
	});
			   
			}
		 });

$("#draggable2").draggable({helper:"clone"});		 
$("#rows").droppable({  
            accept:"#draggable2",  
            drop: function(event,ui) {  
               $(this).addClass("ui-state-highlight").find("p").html("Rows").css("color","red");  
             var employeedes=$(this).val();

		$.ajax({
			url:"<?=site_url('dragcontroller/designation')?>",//Shorthand php
            method:'post',
            data:{Employee_designation:employeedes},//{column name:variable name that we give}
            dataType:'json',
            success: function(data){
			var html='';
			var i='';
			for(i=0;i<data.length;i++){
				html +=  '<tr id="'+data[i].id+'">'+
						'<td>'+data[i].Employee_designation+'</td>'+
						'</tr>';
			}
			$('#data').html(html);					
		}
	});
			   
			}
		 });

$("#draggable3").draggable({helper:"clone"});
$("#values").droppable({  
            accept:"#draggable3",  
            drop: function(event,ui,data) {  
               $(this).addClass("ui-state-highlight").find("p").html("Values").css("color","red"); 
           var salary=$(this).val();

		$.ajax({
			url:"<?=site_url('dragcontroller/salary')?>",//Shorthand php
            method:'post',
            data:{Salary:salary},//{column name:variable name that we give}
            dataType:'json',
            success: function(data){
			var html='';
			var i='';
			for(i=0;i<data.length;i++){
				html +=  '<tr id="'+data[i].id+'">'+
						'<td>'+data[i].Salary+'</td>'+
						'</tr>';
			}
			$('#detail').html(html);					
		}
	});			   
			  
				
}
});
});
</script>
</body>
</html>






<!--var employeename=$(this).val();
			   var employeedes=$(this).val();
			   var salary=$(this).val();
		$.ajax({
			url:"<?=site_url('drag/Column')?>",//Shorthand php
            method:'post',
            data:{Employee_name:employeename,Employee_designation:employeedes,Salary:salary},//{column name:variable name that we give}
            dataType:'json',
            success: function(data){
			var html='';
			var i='';
			for(i=0;i<data.length;i++){
				html +=  '<tr id="'+data[i].id+'">'+
						'<td>'+data[i].Employee_name+'</td>'+
						'<td>'+data[i].Employee_designation+'</td>'+
						'<td>'+data[i].Salary+'</td>'+
						
						'</tr>';
			}
			$('#records').html(html);					
		}
	});
				}		-->

