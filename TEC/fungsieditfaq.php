<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Edit FaQ</title>
	</head>
<html>
	<body>
		<?php
			include ("connection.php");

			$idfaq= $_GET["id_faq"];
			$pertanyaan = $_POST["pertanyaan"];
			$jawaban= $_POST["jawaban"];
	
	
			$sql = mysqli_query($conn, "UPDATE faq set id_faq='$idfaq', pertanyaan='$pertanyaan', jawaban='$jawaban' where id_faq='$idfaq'")or die(mysqli_error($conn));

		print("<script>");
		print("location.href = 'listfaq.php'");
		print("</script>");
?>
	</body>
</html>