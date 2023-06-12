<!DOCTYPE html>
<html>
<head>
<title>Pivot</title>
</head>
<body>
<table>
<thead>
<tr>
<th>Row Field</th>
<th>Column Field</th>
<th>Data Field</th>
</tr>
</thead>
</tbody>
<?php foreach ($pivotData as $row): ?>                                                         
<tr>
<td><?php echo $row['Employee_name'];?></td>
<td><?php echo $row['Employee_designation'];?></td>
<td><?php echo $row['Salary'];?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>

        