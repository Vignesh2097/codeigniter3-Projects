<!DOCTYPE html>
<html>
<head>
<title>Upload Image in Codeigniter</title>
</head>
<body>
    <?php echo @$error; ?> 
	<?php echo form_open_multipart('ImageUpload/upload');?>
	<?php echo "<input type='file' name='profile_pic' size='20' />"; ?>
	<?php echo "<input type='submit' name='submit' value='upload' /> ";?>
	<?php echo "</form>"?>
</body>
</html>