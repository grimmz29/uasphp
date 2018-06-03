<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Edit Jabatan</title>
	</head>
<html>
	<body>
		<?php
			include ("connection.php");

			$idjabatan= $_GET["id_jabatan"];
			$nm_jabatan = $_POST["nm_jabatan"];
	
	
			$sql = mysqli_query($conn, "UPDATE jabatan set id_jabatan='$idjabatan', nm_jabatan='$nm_jabatan' where id_jabatan='$idjabatan'")or die(mysqli_error($conn));

		print("<script>");
		print("location.href = ' listjabatan.php'");
		print("</script>");
?>
	</body>
</html>