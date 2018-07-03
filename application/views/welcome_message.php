<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
	<form action="welcome/image"  enctype="multipart/form-data" method="post">
		<input name="image" type="file"/>
		<button type="submit" name='submit' value='upload'>submit</button>
	</form>

</body>
</html>