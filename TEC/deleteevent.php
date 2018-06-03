<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hapus Event</title>
</head>
<html>
<body>
<?php
	include ("connection.php");
	$id_event = $_GET['id_event'];
	$kueri = mysqli_query($conn, "delete from event where id_event = '$id_event'");
		print("<script>");
		print("location.href = ' listevent.php'");//kembali ke halaman yg berisi semua event
		print("</script>");
?>
</body>
</html>