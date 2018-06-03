<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Register</title>
	</head>
<html>
	<body>
		<?php
			include ("connection.php");

		$namaevent= $_POST["nama"];
		$nama = $_POST["namapendaftar"];
		$nim = $_POST["nim"];
		if($nama == "" || $nim == ""){
			echo "<script>alert('Nama dan NIM harus terisi')</script>";
			print("<script>");
			print("location.href = 'register.php'");
			print("</script>");
		}else{
		$sql = mysqli_query($conn, "INSERT INTO registerevent (nama_event, nama, nim)
		VALUES ('$namaevent', '$nama', '$nim')")or die(mysqli_error($conn));	
		print("<script>");
		print("location.href = 'index.php'");//kembali ke halaman index
		print("</script>");
		}
?>
</body>
</html>