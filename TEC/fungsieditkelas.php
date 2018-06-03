<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Edit Kelas</title>
	</head>
<html>
	<body>
		<?php
			include ("connection.php");

			$idkelas= $_GET["id_kelas"];
			$nm_kelas = $_POST["nm_kelas"];
			$des_singkat= $_POST["des_singkat"];
			$des_lengkap = $_POST["des_lengkap"];
			$pengajar=$_POST["pengajar"];
			$hari=$_POST["hari"];
			$jam=$_POST["jam"];
	
	
			$sql = mysqli_query($conn, "UPDATE kelas set id_kelas='$idkelas', nama='$nm_kelas', des_pendek='$des_singkat', des_lengkap='$des_lengkap', guru='$pengajar', tanggal='$hari', jam='$jam' where id_kelas='$idkelas'")or die(mysqli_error($conn));

		print("<script>");
		print("location.href = ' listkelas.php'");
		print("</script>");
?>
	</body>
</html>