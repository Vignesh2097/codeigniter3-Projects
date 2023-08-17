<!DOCTYPE html>
<html lang="en">
<head>
<title>Home page</title>
<!-- Include Bootstrap CSS -->
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
margin-left: 250px;
}
.content {
padding: 20px;
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
#mission{
float:left;
margin-left:-230px;
}
#about{
float:left;
margin-left:-230px;
}

#choose{
float:left;
margin-left:-230px;
}
body{
background:url(<?php echo base_url('assets/HelpDesk/Background.png');?>)no-repeat center fixed;
background-size:cover;
}
#background-container{
	opacity:0.7;
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
	  <div id="about">
        <h1>Welcome to HD Ticketing Services</h1><br>
		<h3 align="left">About Us</h3>
		<p>With a passion for technology and a commitment to exceptional customer service,<br>we're here to streamline your IT support experience and keep your business running smoothly.</p><br></div>
		<div id="mission">
		<h3>Our Mission</h3>
		<p>At HD Ticketing Services, our mission is simple: to provide efficient, reliable,<br>and user-friendly IT online ticketing solutions that empower businesses to manage their technical needs effortlessly.<br>We understand the challenges that organizations face in the fast-paced digital world,<br>and we're dedicated to delivering top-notch services that enable you to focus on what matters most—your core business activities.</p>
		</div><br><br><br><br>
		<div id="choose">
		<h3>Why Choose Us?</h3>
		<p>Expertise: Our team comprises experienced IT professionals who are well-versed in handling a wide range of technical issues. Whether you're dealing with software glitches, hardware malfunctions, or network concerns, we've got you covered.<br>

Efficiency: We believe that every minute counts in the business world. Our ticketing system ensures swift issue resolution, minimizing downtime and maximizing productivity.<br>

User-Friendly Interface: Our platform is designed with you in mind. It's intuitive, easy to navigate, and allows you to submit, track, and manage your IT tickets hassle-free.<br>

Custom Solutions: We understand that every business is unique. That's why we offer tailored solutions to address your specific IT challenges. From small businesses to large enterprises, our services are adaptable and scalable.<br>

24/7 Support: Technical issues can arise at any time. Our round-the-clock support ensures that you have assistance when you need it most, keeping your operations running smoothly.</p>
<h3>Contact Us</h3>
<p>Door No. 13 (Old No. 5A) Chittaranjan Lane, Teynampet, Chennai-600018,Mobile.no : 98433 06868</p><br>
</div>
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
