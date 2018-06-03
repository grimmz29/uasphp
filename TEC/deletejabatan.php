<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hapus Anggota</title>
</head>
<html>
<body>
<?php
	include ("connection.php");
	$jabatan = $_GET['id_jabatan'];
	$kueri = mysqli_query($conn, "delete from jabatan where id_jabatan = '$jabatan'");
		print("<script>");
		print("location.href = ' listjabatan.php'");
		print("</script>");
?>
</body>
</html>