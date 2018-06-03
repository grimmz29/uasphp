<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hapus FaQ</title>
</head>
<html>
<body>
<?php
	include ("connection.php");
	$id_faq = $_GET['id_faq'];
	$kueri = mysqli_query($conn, "delete from faq where id_faq = '$id_faq'");
		print("<script>");
		print("location.href = ' listfaq.php'");//kembali ke halaman yg berisi semua event
		print("</script>");
?>
</body>
</html>