<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
	<?php if($this->session->flashdata('status')):?>
	<div class="alert alert-success">
	<?=$this->session->flashdata('status');?>
	</div>
<?php endif; ?>

      <h2 class="text-center">User's Registration</h2>
      <form method="post" action="<?=base_url('AuthController/register');?>">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name" value="<?php echo set_value('first_name');?>">
		  <small><?php echo form_error('first_name');?></small>
        </div>
		<div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" id="last_name" value="<?php echo set_value('last_name');?>" >
		  <small><?php echo form_error('last_name');?></small>
        </div>
		<div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" value="<?php echo set_value('email');?>">
		  <small><?php echo form_error('email');?></small>
        </div>
		<div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" value="<?php echo set_value('password');?>">
		  <small><?php echo form_error('password');?></small>
        </div>
		<div class="form-group">
          <label for="confirm">Confirm</label>
          <input type="password" class="form-control" id="password" value="<?php echo set_value('confirm');?>">
		  <small><?php echo form_error('confirm');?></small>
        </div>
        <div class="form-group">
          <label for="company">Name of the organization</label>
          <input type="text" class="form-control" id="company" value="<?php echo set_value('company');?>">
		  <small><?php echo form_error('company');?></small>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>



