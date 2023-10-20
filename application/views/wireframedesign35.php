<!DOCTYPE html>
<html>
<head>
<title>Wireframe</title>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
h2{
background:  linear-gradient(to right, rgb(46,49,146) , rgb(236, 6, 119));
width:1400px;
border: rgb(234, 0, 255);
padding:12px;
margin-left:100px;
margin-top:-50px;
color:white;
border-radius: 5px;
font-family:calibri;
font-size:20px;
}
img1{
float:left;
position:relative;
margin-left:25px;
margin-top:0px;
}
#inner{
  border: 2px solid rgb(81, 124, 255);
  width:750px;
  padding:0px;
  margin-left:455px;
  border-radius:10px;
  box-shadow: 5px 5px 5px 5px #888888;
  font-size:20px;
  font-weight:bold;
  font-family:verdana;
  margin-top:-60px;
}
header{
	font-family:calibri;
}
table,th{
	border-collapse:collapse;
	margin-top:100px;
	font-family:calibri;
}
.previous {
  background-color:black;
  color:white;
  width:50px;
  margin-right:60px;
}
a{
	text-decoration:none;
}


</style>
<body>
<header>
<img src="<?php echo base_url('assets/HelpDesk/CUB.png');?>" style="width:55px;height:55px;" id="img1"></img>
<h2 align="center">Advances</h2><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="<?php echo base_url('BaseController');?>"><img src="<?php echo base_url('assets/HelpDesk/Home.png');?>" style="width:45px;height:45px;"></img></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b><?php echo date('l,F d,Y'); ?></b>
<a href="<?=base_url('BaseController/firstpage');?>" class="previous" style="position:relative;float:right;">&laquo; Back</a>
</header>
<div id="inner" align="center" style="text-align:center;">
  <p><i>Regionwise advances and pending performance report - MVL</i></p>
</div><br><br><br>
<p align="right" style="font-family:calibri;font-weight:bold;margin-top:-80px;"><i>Welcome Kumar</i></p><br><br><br>

<div class="dropdown-container" style="float:left; margin-left:130px">
<label for="dropdown1" class="dropdown-label" style="background-color:lightgray;padding:3px 100px;font-family:calibri;font-weight:bold;">Region</label><br>
<select id="dropdown1" class="dropdown-select" style="padding:2px 83px;">
    <option value="">--Select--</option>
	<?php foreach($Region as $region) {?>
		<option value="<?=$region->Region?>"><?=$region->Region?></option>
	<?php } ?>
    </select>
</div>

<div class="dropdown-container" style="float:left; margin-left:100px;">
<label for="dropdown2" class="dropdown-label" style="background-color:lightgray;padding:3px 100px;font-family:calibri;font-weight:bold;">Category</label><br>
<select id="dropdown2" class="dropdown-select" style="padding:2px 90px;">
 <option  value="">--Select--</option>
<?php foreach($Category as $category) {?>
		<option value="<?=$category->Category?>"><?=$category->Category?></option>
	<?php } ?>
</select>
</div>

<div class="dropdown-container" style="float:left; margin-left:100px">
<label for="dropdown3" class="dropdown-label" style="background-color:lightgray;padding:3px 43px;font-family:calibri;font-weight:bold;">Branch code-Branch name</label><br>
<select id="dropdown3" class="dropdown-select" style="padding:2px 68px;">
 <option  value="">--Select--</option>
<?php foreach($Branch as $branch) {?>
		<option value="<?=$branch->Branch?>"><?=$branch->Branch?></option>
	<?php } ?>
 </select>
</div>
<div class="dropdown-container" style="float:left; margin-left:100px">
<label for="dropdown4" class="dropdown-label" style="background-color:lightgray;padding:3px 105px;font-family:calibri;font-weight:bold;">Section</label><br>
<select id="dropdown4" class="dropdown-select" style="padding:2px 90px;">
 <option value="">--Select--</option>
<?php foreach($Section as $section) {?>
		<option value="<?=$section->Section?>"><?=$section->Section?></option>
	<?php } ?>
</select>
</div>
<table>
<tr>
<th rowspan="3" style="background-color:rgb(191,144,0);border:1px rgb(191,144,0);color:white;width:5%;">Region</th>
<th rowspan="3" style="background-color:rgb(191,144,0);border:1px rgb(191,144,0);color:white;width:5%;">Category</th>
<th rowspan="3" style="background-color:rgb(191,144,0);border:1px rgb(191,144,0);color:white;width:5%;">Branch Code</th>
<th rowspan="3" style="background-color:rgb(191,144,0);border:1px rgb(191,144,0);color:white;width:5%;">Branch Name</th>
<th rowspan="3" style="background-color:rgb(191,144,0);border:1px rgb(191,144,0);color:white;width:5%;">Section</th>
<th colspan="3" style="border:1px solid black;">Snap Shot of Advance Performance as on prev year (31/3/22) Vs current day (31/10/22)</th>
<th colspan="6" style="border:1px solid black;">Month wise targets and shortfall</th>
<th colspan="7" style="border:1px solid black;">Pending stock (As of latest date)</th>
</tr>
<tr>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:6%;">Previous year last day </th>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:6%;">Last month last day </th>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:6%;">Current day</th>
<th colspan="2" style="background-color:rgb(129,22,14);color:white;width:15%;">Oct'22</th>
<th colspan="2" style="background-color:rgb(129,22,14);color:white;width:15%;">Nov'22</th>
<th colspan="2" style="background-color:rgb(129,22,14);color:white;width:15%;">Dec'22</th>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:4%;">Section</th>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:4%;">Sanction</th>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:4%;">Prov</th>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:4%;">UP@CO</th>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:4%;">UP@CPC</th>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:4%;">UP@BR</th>
<th rowspan="2" style="background-color:rgb(0,32,96);color:white;width:4%;">Grand Total</th>
</tr>
<tr>
<th style="background-color:rgb(242,142,134);width:5%;">Target</th>	
<th style="background-color:rgb(242,142,134);width:5%;">Shorfall</th>
<th style="background-color:rgb(242,142,134);width:5%;">Target</th>
<th style="background-color:rgb(242,142,134);width:5%;">Shortfall</th>
<th style="background-color:rgb(242,142,134);width:5%;">Target</th>
<th style="background-color:rgb(242,142,134);width:5%;">Shortfall</th>
</tr>										
</table>
<script>
   $(document).ready(function(){
            $('#dropdown1').change(function() {
                var region = $(this).val();
                if (region!=='') {
                    $.ajax({
                        url: "<?php echo base_url('reportcontroller35/get_categories_by_region');?>",
                        type: 'post',
                        data: {Region: region},
                        dataType: 'json',
                        success: function(data) {
                            var options = '<option value="">--Select--</option>';
                            for(var i=0;i<data.length;i++) {
                                options+= '<option>'+data[i].Category+'</option>';
								
                            }
                            $('#dropdown2').html(options);
							
                        }
                    });
                } else {
                    $('#dropdown2').html('<option value="">Select</option>');
                }
			});
		
$('#dropdown2').change(function(){
                var category = $(this).val();
                if (category!=='') {
                    $.ajax({
                        url: "<?php echo base_url('reportcontroller35/get_branch_by_category');?>",
                        type: 'post',
                        data: {Category: category},
                        dataType: 'json',
                        success: function(data) {
                            var options = '<option  value="">--Select--</option>';
                            for(var i=0;i<data.length;i++) {
                                options+= '<option>'+data[i].Branch+'</option>';
                            }
                            $('#dropdown3').html(options);
                        }
                    });
                } else {
                    $('#dropdown3').html('<option value="">Select</option>');
                }
            });
            $('#dropdown3').change(function(){
                var branch = $(this).val();
                if (branch!=='') {
                    $.ajax({
                        url: "<?php echo base_url('reportcontroller35/get_section_by_branch');?>",
                        type: 'post',
                        data: {Branch:branch},
                        dataType: 'json',
                        success: function(data) {
                            var options = '<option  value="">--Select--</option>';
                            for(var i=0;i<data.length;i++) {
                                options+= '<option>'+data[i].Section+'</option>';
                            }
                            $('#dropdown4').html(options);
                        }
                    });
                } else {
                    $('#dropdown4').html('<option value="">Select</option>');
                }
            });
			
	});
</script>
</body>
</html>
