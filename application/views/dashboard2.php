<!DOCTYPE html>
<html>
<head>
<title>tickets</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

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
<div id="container">
<a href="<?=base_url('ticketing/index')?>"><input type="button" name="home" value="Home" style="background-color:#00A65A;border:rgb(87, 255, 0);color:white;font-weight:bold;font-size:17px;"></a>
<a href="<?=base_url('ticketing/createtab')?>"><input type="button" name="create" value="Raise Ticket" style="background-color:#00A65A;border:rgb(87, 255, 0);color:white;font-weight:bold;font-size:17px;"></a>
<a href="<?=base_url('ticketing/logout')?>"><input type="button" name="logout" value="Logout" style="background-color:#00A65A;border:rgb(87, 255, 0);color:white;font-weight:bold;font-size:17px;"></a>


</div>
<br>
<br>
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
            url: '<?php echo site_url('ticketing/get_tickets'); ?>',
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
                render: function(data, type, row) {
                    if (data === true) {
                        return '<button disabled>Edit</button>';
                    } else {
                        return '<button class="edit_button" data-ticket_no="' + row.ticket_no + '">Edit</button>';
                    }
                }
            }
        ]
    });
});
$(document).ready(function() {
    $('#ticket_table tbody').on('click', 'button.edit_button', function() {
       var ticketno = $(this).data('ticket_no');
	   window.location.href = '<?php echo site_url('ticketing/editticket'); ?>/' + ticketno;
    });
});
</script>
</body>
</html>
