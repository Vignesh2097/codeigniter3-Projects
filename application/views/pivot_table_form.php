<!DOCTYPE html>
<html>
<head>
<title>action</title>
</head>
<body>
<form action="<?php echo base_url('PivotTableController/generate_pivot_table');?>" method="post">
    <label for="Employee_name">Row Field:</label>
    <input type="text" name="Employee_name" id="Employee_name">

    <label for="Employee_designation">Column Field:</label>
    <input type="text" name="Employee_designation" id="Employee_designation">

    <label for="Salary">Data Field:</label>
    <input type="text" name="Salary" id="Salary">

    <button type="submit">Generate Pivot Table</button>
</form>
</body>
</html>
