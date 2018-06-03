<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Anggota</title>
</head>
<html>
<body>
<?php
	include ("connection.php");
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jabatan = $_POST['nm_jabatan'];
	$target_dir = "img/";
	$file_name = basename($_FILES["fileToUpload"]["name"]);
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 2000000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		$query="select nim from anggota where nim='$nim'";
		$cek=mysqli_query($conn, $query)or die(mysqli_error($conn));
		if(mysqli_num_rows($cek)>0) { 
		echo "<script>alert('Nim sudah terpakai')</script>"; 
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				$sql = mysqli_query($conn, "INSERT INTO anggota (nim, nama, jabatan, foto)
				VALUES ('$nim', '$nama', '$jabatan', '$file_name')")or die (mysqli_error($conn));
				print("<script>");
				print("location.href = 'listanggota.php'");//kembali ke halaman yg berisi semua user
				print("</script>");
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}
		
?>
</body>
</html>