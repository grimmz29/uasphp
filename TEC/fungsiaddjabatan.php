<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Tambah Jabatan</title>
	</head>
<html>
	<body>
		<?php
			include ("connection.php");

		$namajabatan= $_POST["nm_jabatan"];
			
		$query="select nm_jabatan from jabatan where nm_jabatan='$namajabatan'";
		$cek=mysqli_query($conn, $query)or die(mysqli_error($conn));
		if(mysqli_num_rows($cek)>0) { 
		echo "<script>alert('Jabatan sudah ada')</script>";
		print("<script>");
		print("location.href = 'addjabatan.php'");//kembali ke halaman yg berisi semua user
		print("</script>");		
		} else {
		$sql = mysqli_query($conn, "INSERT INTO jabatan (nm_jabatan)
		VALUES ('$namajabatan')")or die(mysqli_error($conn));	
		print("<script>");
		print("location.href = 'listjabatan.php'");//kembali ke halaman yg berisi semua user
		print("</script>");
		}
?>
</body>
</html>