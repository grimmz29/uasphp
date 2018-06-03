<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hapus Kelas</title>
</head>
<html>
<body>
<?php
	include ("connection.php");
	$id_kelas = $_GET['id_kelas'];
	$kueri = mysqli_query($conn, "delete from kelas where id_kelas = '$id_kelas'");
		print("<script>");
		print("location.href = ' listkelas.php'");//kembali ke halaman yg berisi semua kelas
		print("</script>");
?>
</body>
</html>