<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Tambah FaQ</title>
	</head>
<html>
	<body>
		<?php
			include ("connection.php");

		$pertanyaan= $_POST["pertanyaan"];
		$jawaban = $_POST["jawaban"];
			
		$query="select pertanyaan from faq where pertanyaan='$pertanyaan'";
		$cek=mysqli_query($conn, $query)or die(mysqli_error($conn));
		if(mysqli_num_rows($cek)>0) { 
		echo "<script>alert('Pertanyaan sudah ada')</script>";
		print("<script>");
		print("location.href = 'addfaq.php'");
		print("</script>");		
		} else {
		$sql = mysqli_query($conn, "INSERT INTO faq (pertanyaan, jawaban)
		VALUES ('$pertanyaan', '$jawaban')")or die(mysqli_error($conn));
		print("<script>");
		print("location.href = 'listfaq.php'");
		print("</script>");		
		}
	    
		
?>
</body>
</html>