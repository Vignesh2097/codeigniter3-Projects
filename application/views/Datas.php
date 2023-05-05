<!DOCTYPE html>
<html>
<head>
<title>Datas</title>
</head>
<style>
.dbresult,.dbresult td,.dbresult th{
	border:1px solid black;
	border-collapse:collapse;
	padding:10px;
	background-color: #D6EEEE;
	text-align:center;
 }
 .dbresult td{
    font-weight:normal;
	font-size:85%;
 }
 
 </style>
<body>
<table class="dbresult" align="center">
  <tr style="font-size:80%;">
    <th>Id no</th>
    <th>First Name</th>
    <th>Last Name</th>
	<th>Date of birth</th>
    <th>Email</th>
    <th>Password</th>
	<th>Confirm password</th>
	<th>Delete</th>
	<th>Update</th>
  </tr>
  
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->firstname."</td>";
  echo "<td>".$row->lastname."</td>";
  echo "<td>".$row->dob."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->password."</td>";
  echo "<td>".$row->confirm."</td>";
  echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
  echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
  
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</body>
</html>