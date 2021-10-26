<?php 
	
	$targetfolder = "upload/";
	$targetfolder = $targetfolder . basename($_FILES['file']['name']);
	$filetype = $_FILES['file']['type'];
	if ($filetype == "image/png" || $filetype == "application/pdf" || $filetype == "image/jpeg"|| $filetype == "image/jpg") {
		if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
			echo "File berhasil diupload";
		}else{
			echo "File gagal diupload";
		}
	}else{
		echo "Hanya boleh mengupload png,jpg,jpeg,pdf";
	}

?>