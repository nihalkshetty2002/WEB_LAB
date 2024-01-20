<?php
if (isset($_FILES['uploadfile'])) {
	$errors = array();
	$file_name = $_FILES['uploadfile']['name'];
	$file_size = $_FILES['uploadfile']['size'];
	$file_tmp = $_FILES['uploadfile']['tmp_name'];
	$file_type = $_FILES['uploadfile']['type'];
	$temp = explode('.', $_FILES['uploadfile']['name']);
	$file_ext = end($temp);
	$expension = "pdf";

	if ($file_ext != $expension) {
		$errors[] = "extension not allowed, please choose a pdf file.";
	}
	if ($file_size > 2097152) {
		$errors[] = 'File size must be less than 2 MB';
	}
	if (empty($errors) == true) {
		move_uploaded_file($file_tmp, "files/" . $file_name);
		echo "Success";
		echo "<ul> <li>Sent file: " . $file_name . "      
               <li>File size: " . $file_size . "              
			   <li>File type:" . $file_type . "           
          </ul>";
	} else {
		foreach ($errors as $array) {
			print_r($array);
		}
	}
}
?>
<html>

<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="uploadfile" />
		<input type="submit" />
	</form>
</body>

</html>