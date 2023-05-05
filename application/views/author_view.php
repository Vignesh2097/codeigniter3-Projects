<!DOCTYPE html>
<html>
<head>
<title>CodeIgniter Pagination</title>
</head>
<style>
.result,.result td,.result th{
	border:1px solid black;
	border-collapse:collapse;
	padding:10px;
	background-color:DodgerBlue;
	text-align:center;
	color:rgb(60, 60, 60);
 }
 .result td{
    font-weight:normal;
	font-size:85%;
	color:white;
 }
</style>
<body>
<div class="container">
<h3 class="title is-3">CodeIgniter Pagination</h3>
<div class="column">

<table class="result">
<thead>
<tr>
<th>ID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>
<th>Date of Birth</th>         
</tr>           
</thead>

<tbody>
<?php foreach ($author as $author): ?>
<tr>
<td><?= $author->id ?></td>
<td><?= $author->first_name ?></td>
<td><?= $author->last_name ?></td>
<td><?= $author->email ?></td>
<td><?= $author->birthdate ?></td>                                              
</tr>
<?php endforeach; ?>
</tbody>
</table>
<p><?php echo $links; ?></p>
</div>
</div>
</body>
</html>