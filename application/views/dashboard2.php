<!DOCTYPE html>
<html>
<head>
<title>tickets</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
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
 body{
background-color:white;
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
button{
	text-decoration:none;
}

</style>
<body>
<?php if($this->session->flashdata('status')):?>
<div class="alert alert-success">
<?=$this->session->flashdata('status');?>
</div>
<?php endif; ?>

   <table id="ticket_table" class="display" style="width:100%">
   <thead>
  <tr style="background:#CCC">
    <th>TicketID</th>
	<th>Date</th>
    <th>Requester</th>
    <th>Email</th>
    <th>Contact</th>
	<th>Email</th>
	<th>Request_Type</th>
	<th>Status</th>
	<th>Subject</th>
	<th>Message</th>
	<th>Additional message</th>
	<th>Edit</th>
  </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<script>
$(document).ready(function() {
    $('#ticket_table').DataTable({
        ajax: {
            url: '<?php echo site_url('UserController/get_tickets'); ?>',
            type: 'GET',
            dataType: 'json'
        },
        columns: [
            { data: 'ticket_no' },
            { data: 'raised_date' },
            { data: 'requester' },
            { data: 'remail' },
            { data: 'contact' },
			{ data: 'cemail' },
            { data: 'request_type' },
            { data: 'status' },
            { data: 'subject' },
            { data: 'message' },
			{ data: 'additional_message' },
            {
                data: 'edit_disabled',
                render: function(data,type,row) {
                    if (data === true) {
                        return '<button disabled>Edit</button>';
                    } else {
                        return '<button class="edit_button" data-ticket_no="' + row.ticket_no + '">Edit</button>';
                    }
                }
            }

        ]
    });

    $('#ticket_table tbody').on('click', 'button.edit_button', function() {
        var ticketno = $(this).data('ticket_no');
        window.location.href = '<?php echo site_url('UserController/editticket'); ?>/' + ticketno;
    });
});
</script>
</body>
</html>