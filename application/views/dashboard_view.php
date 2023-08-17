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
  </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<script>
$(document).ready(function() {
    $('#ticket_table').DataTable({
        ajax: {
            url: '<?php echo site_url('Dashboard/get_data'); ?>',
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
			{ data: 'additional_message' }
	]
            
});
});
</script>
</body>
</html>
