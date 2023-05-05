<!DOCTYPE html>
<html>
<head>
<title>Data display</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
<div class="box">
<div class="row">
<div class="col">
<h1>Datas</h1>
<table id ="employee" class="table table-bordered table-striped table-hover">
<thead>
<tr>
<td><b>Date<b></td>
<td><b>Employee Id<b></td>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
<script>
        $(document).ready(function() {
            $('#employee').DataTable({
                ajax: {
                    url: '<?php echo base_url('DatatableController/emp_data'); ?>', // Replace 'DataTableController/get_data' with your actual controller and method name
                    type: 'GET',
                    dataType: 'json',
                    dataSrc: ''
                },
                columns: [
                    { data: 'dates' },
                    { data: 'empid' }
                  ],
                // Modify date format using render function
                columnDefs: [
                    {
                        targets: 2,
                        render: function(data, type, row) {
                            return new Date(data).toLocalDateString(); 
                        }
                    }
                ]
            });
        });
    </script>

