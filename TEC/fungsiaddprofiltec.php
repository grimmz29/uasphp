<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD Profil TEC</title>
</head>
<html>
<body>
<?php
	include ("connection.php");
	$profil= $_POST["profiltec"];
	$vision= $_POST["vision"];
	$mission= $_POST["mission"];
	    $sql = mysqli_query($conn, "INSERT INTO profiltec (profile, vision, mission)
		VALUES ('$profil','$vision','$mission')")or die (mysqli_error($conn));	
		print("<script>");
		print("location.href = 'admin.php'");//kembali ke halaman yg berisi semua user
		print("</script>");
?>
</body>
</html>