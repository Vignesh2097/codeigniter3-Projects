<!DOCTYPE html>
<html>
<head>
<title>tickets</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
</head>
<style>
#container{
padding-top:50px;
padding-left:650px;
padding-bottom:20px;
background-color:#00A65A;
}
 h1{
	 color:yellow;
	 text-align:center;
 }
 table{
	background-color:white;
	width:100%;
	border-collapse:collapse;
}
th{
background-color:LightGray;
}
td{
	text-align:center;
}

</style>
<body>
<div id="container">
<a href="<?=base_url('admin/success')?>"><input type="button" name="back" value="Back" style="background-color:#00A65A;border:white;color:white;font-weight:bold;font-size:17px;"></a>
<a href="<?=base_url('admin/logout')?>"><input type="button" name="logout" value="Logout" style="background-color:#00A65A;border:white;color:white;font-weight:bold;font-size:17px;"></a>

</div>
<br>
<br>
    <table id="tickets_table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Ticket No</th>
                <th>Raised Date</th>
                <th>Requester</th>
                <th>Email</th>
                <th>Request Type</th>
                <th>Status</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Additional Message</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket) { ?>
                <tr data-ticketid="<?php echo $ticket->ticket_no; ?>">
                    <td contenteditable="true" data-columnname="ticket_no"><?php echo $ticket->ticket_no; ?></td>
                    <td contenteditable="true" data-columnname="raised_date"><?php echo $ticket->raised_date; ?></td>
                    <td contenteditable="true" data-columnname="requester"><?php echo $ticket->requester; ?></td>
                    <td contenteditable="true" data-columnname="remail"><?php echo $ticket->remail; ?></td>
                    <td contenteditable="true" data-columnname="request_type"><?php echo $ticket->request_type; ?></td>
                    <td contenteditable="true" data-columnname="status"><?php echo $ticket->status; ?></td>
                    <td contenteditable="true" data-columnname="subject"><?php echo $ticket->subject; ?></td>
                    <td contenteditable="true" data-columnname="message"><?php echo $ticket->message; ?></td>
                    <td contenteditable="true" data-columnname="additional_message"><?php echo $ticket->additional_message; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tickets_table').DataTable();

            // Handle inline editing
            $('#tickets_table').on('blur', 'td[contenteditable="true"]', function() {
                var column_name = $(this).attr('data-columnname');
                var new_value = $(this).text();
                var ticket_id = $(this).parent().find('td[data-columnname="ticket_no"]').text();

                $.ajax({
                    url: '<?php echo base_url('admin/update'); ?>',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        ticket_id: ticket_id,
                        column_name: column_name,
                        new_value: new_value
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            alert('Data updated successfully.');
                        } else {
                            alert('Failed to update data.');
                        }
                    },
                    error: function() {
                        alert('Error occurred while updating data.');
                    }
                });
            });
        });
    </script>
</body>
</html>