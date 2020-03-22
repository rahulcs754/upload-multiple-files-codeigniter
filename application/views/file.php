<!DOCTYPE html>
<html>
<head>
	<title>upload imag</title>
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/Welcome/processUpload" enctype="multipart/form-data" method="post" accept-charset="utf-8">

	<p> File upload</p>
	<input type="file" name="gambar[]" multiple><br>
	<br>
	<button>upload</button>
   </form>
</body>
</html>