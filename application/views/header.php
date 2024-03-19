<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <img src="<?php echo base_url('assets/HelpDesk/Desk.png');?>" style="width:40px;height:40px;"></img>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('page/index')?>">Home</a>
      </li>
	    <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('page/faq')?>">FAQ'S</a>
      </li>
	  <?php if(!$this->session->has_userdata('authenticated'))
	  {?>
	  <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('AuthController/login')?>">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('AuthController/register')?>">User's Registration</a>
      </li>
      <?php }?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('UserController/index')?>">Raise Ticket</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="<?=base_url('UserController/viewticket')?>">View Ticket</a>
      </li>
	  <?php if($this->session->has_userdata('authenticated')==TRUE){?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          <?=$this->session->userdata('auth_user')['first_name'];?>
		  <?=$this->session->userdata('auth_user')['last_name'];?>
		  </a>
		  <div class="dropdown-menu">
          <a class="dropdown-item" href="<?=base_url('LogoutController/logout')?>">Logout</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
	  <?php }?>
    </ul>
     </div>
</nav>
</header>
</body>
</html>