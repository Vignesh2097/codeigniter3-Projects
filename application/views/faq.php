<!DOCTYPE html>
<html>
<head>
<title>FAQ'S</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.sidebar {
height: 100%;
width: 250px;
position: fixed; 
top: 0;
left: -250px;
background-color: #f8f9fa;
padding-top: 20px;
transition: left 0.3s ease;
}
.sidebar.show {
left: 0;
}
.sidebar a {
display: block;
padding: 8px 16px;
text-decoration: none;
color:DodgerBlue;
font-weight:bold;
}
.sidebar a:hover {
background-color: #ddd;
}
.content-wrapper {
margin-left: 0;
transition: margin-left 0.3s ease;
}
.content-wrapper.move-right {
margin-left:250px;
}
.content {
padding: 20px;
margin-left:-250px;
}
.hamburger {
cursor: pointer;
padding: 10px;
top: 20px;
left: 20px;
z-index: 999;
color:yellow;
}
.hamburger span {
display: block;
width: 30px;
height: 3px;
background-color:yellow;
}
.hamburger.open {
display: none;
}
.content-align-wrapper {
position: fixed;
top: 20px;
left: 500px;
}
h1{
animation-duration:1s;
animation-name:slideup;
margin-top:5px;
color:yellow;
}
@keyframes slideup{
	from{
		margin-top:50%;
	}
	to{
		margin-top:20px;
	}
}
body{
background:url(<?php echo base_url('assets/HelpDesk/Background.png');?>)no-repeat center fixed;
background-size:cover;
}
p{
color:rgb(130, 255, 0);
}
h3{
color:hsl(177, 100%, 100%);
}	
img{
width:50px;
height:50px;
margin-left:20px;	
}
</style>
</head>
<body>
<div class="hamburger" onclick="toggleSidebar()">
    <span></span>
    <span></span>
    <span></span>
  </div>
<div class="sidebar" id="sidebar">
<img src="<?php echo base_url('assets/HelpDesk/desk.png'); ?>" /><br>
    <a href="<?=base_url('ticketing/index')?>">Home</a>
    <a href="<?=base_url('ticketing/register')?>">Raise Ticket</a>
	<a href="<?=base_url('ticketing/faq')?>">FAQ'S</a>
  </div>
<div class="content-wrapper" id="content-wrapper">
    <div class="content-align-wrapper">
      <div class="content" id="content">
   <h1>FAQ'S</h1>
<h3>How do I submit a support ticket?</h3>
<p>You can submit a support ticket by logging into the system and accessing the "Raise Ticket" option.<br>Fill in the required details, such as the issue description and category, and submit the ticket.</p><br>
<h3>Can I track the status of my ticket?</h3>
<p>Yes, you can track the status of your ticket by logging into your account and navigating to the "View Tickets" section.<br>There, you'll find real-time updates on the progress of your issue.</p><br>
<h3>How are tickets prioritized?</h3>
<p>Tickets are usually prioritized based on their impact and urgency.<br>Critical system outages might have a higher priority than minor issues. The priority level helps IT teams determine which issues to address first.</p><br>
<h3>Can I provide additional information after submitting a ticket?</h3>
<p>Yes, you can often provide additional information or updates to your ticket.<br>This can help IT teams better understand the issue and resolve it more effectively.</p>
</div>
</div>
</div>
<script>
    function toggleSidebar() {
      $("#sidebar").toggleClass("show");
      $("#content-wrapper").toggleClass("move-right");
      $(".hamburger").toggleClass("open");
    }
    $(document).on("click", function(event) {
      if (!$(event.target).closest(".hamburger, #sidebar").length) {
        if ($("#sidebar").hasClass("show")) {
          toggleSidebar();
        }
      }
    });
  </script>
</body>
</html>