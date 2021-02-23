<?php
include_once "cloudinary/Cloudinary.php";

include_once "cloudinary/Uploader.php";

include_once "cloudinary/Api.php";

Cloudinary::config(array("cloud_name" => "", "api_key" => "", "api_secret" => ""));

?>


<!DOCTYPE HTML>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<form method="post" enctype="multipart/form-data">
		<div>
		<img src="https://th.bing.com/th/id/Radc58d295a98a8d147d07ed5d6d39995?rik=T0jBxjBhuYx50A&riu=http%3a%2f%2fres.cloudinary.com%2fcloudinary%2fimage%2fupload%2fnew_cloudinary_logo_square.png&ehk=i6w%2bEpBs44bLbOB3mqjVHkcNNDWHNoxoEo1dPvE4QtQ%3d&risl=&pid=ImgRaw">
		<h2>
			Select image to upload to Cloudinary:
		</h2>
		<div class="col-md-4" align="center"> <br>
			<input type="file" name="fileToUpload" id="fileToUpload">
		</div>
		
		<div class="col-md-4" align="center"> <br>
			<input type="submit" value="Upload" name="submit">
		</div>
		</div>
	</form>
	
	<div>
		<?php
		if (isset($_POST["submit"]))
			{
    			$cloudUpload = \Cloudinary\Uploader::upload($_FILES["fileToUpload"]['tmp_name']);
    			print_r($cloudUpload['url']);
			}
	?>
	</div>
</body>

</html>
