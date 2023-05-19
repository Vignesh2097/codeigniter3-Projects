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
width:910px;
height:500px;
margin-top:150px;
margin-left:290px;
border-radius:2px;
background:rgb(196, 246, 255);
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
 <li>Employee id</li>
</ul>
<ul style="list-style-type:none" id="draggable2">
 <li>Employee name</li>
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
<p>Values</p><br><br><br>
</div>
<div id="box">
</div>
<script>
$(function() {  
    $( "#draggable1" ).draggable({helper:"clone"});
	$( "#draggable2" ).draggable({helper:"clone"});
	$( "#draggable3" ).draggable({helper:"clone"});
	
         $("#columns").droppable({  
            accept:"#draggable1",  
            drop: function(event,ui) {  
               $(this)  
               .addClass("ui-state-highlight")  
               .find("p")  
               .html("Dropped!");  
            }
			
         });
$("#rows").droppable({  
            accept:"#draggable2",  
            drop: function(event,ui) {  
               $(this)  
               .addClass("ui-state-highlight")  
               .find("p")  
               .html("Dropped!");  
            }  
         });
$("#values").droppable({  
            accept:"#draggable3",  
            drop: function(event,ui) {  
               $(this)  
               .addClass("ui-state-highlight")  
               .find("p")  
               .html("Dropped!");  
            }  
         });  		   		 
	
  });  
</script>

</body>
</html>


