<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter multiple drag and drop image upload</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row form-group">
		<form action="<?php echo base_url('ImageController/imageUploadPost'); ?>" enctype="multipart/form-data" class="dropzone" id="image-upload" method="POST">
		<div class="col-md-12">
			<h2 class="text-primary">Codeigniter multiple drag and drop image upload</h2>
			
				<div>
					<h3 class="text-warning">Upload Multiple Image By Click On Box</h3>
				</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
				<input class="btn btn-primary btn-lg" type="submit" value="upload"/>
			</form>
		</div>
	</div>
</div>


<script type="text/javascript">
	Dropzone.options.imageUpload = 
	{
        maxFilesize:1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>


</body>
</html>