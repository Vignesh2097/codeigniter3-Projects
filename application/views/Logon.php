<!DOCTYPE html>
<html>
<head>
<title>Ticketing Tool</title>
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
      <h2 class="text-center">Sign In</h2>
      <form method="post" action="<?php echo site_url('AuthController/login_user');?>" >
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter your Email">
		  <small><?php echo form_error('email');?></small>
		  </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter your password">
		  <small><?php echo form_error('password');?></small>
		  </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
  </div>
  
</div>
</form>
</body>
</html>


