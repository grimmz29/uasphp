<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Tambah Kelas</title>
	</head>
<html>
	<body>
		<?php
			include ("connection.php");

		$namakelas= $_POST["nm_kelas"];
		$dessingkat = $_POST["des_singkat"];
		$deslengkap = $_POST["des_lengkap"];
		$pengajar= $_POST["pengajar"];
		$tglkls = $_POST["tglkls"];
		$jamkelas=$_POST["jamkelas"];
			
		$query="select nama from kelas where nama='$namakelas'";
		$cek=mysqli_query($conn, $query)or die(mysqli_error($conn));
		if(mysqli_num_rows($cek)>0) { 
		echo "<script>alert('Kelas sudah ada')</script>";
		print("<script>");
		print("location.href = 'addkelas.php'");
		print("</script>");		
		} else {
		$sql = mysqli_query($conn, "INSERT INTO kelas (nama, des_pendek, des_lengkap, guru, tanggal, jam)
		VALUES ('$namakelas', '$dessingkat', '$deslengkap', '$pengajar', '$tglkls', '$jamkelas')")or die(mysqli_error($conn));
		print("<script>");
		print("location.href = 'listkelas.php'");
		print("</script>");		
		}
	    
		
?>
</body>
</html>