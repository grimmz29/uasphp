<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Edit Profil</title>
	</head>
<html>
	<body>
		<?php
			include ("connection.php");

			$idprofil= $_GET["id_profile"];
			$profile = $_POST["profiltec"];
			$vision= $_POST["vision"];
			$mission = $_POST["mission"];
	
	
			$sql = mysqli_query($conn, "UPDATE profiltec set id_profile='$idprofil', profile='$profile', vision='$vision', mission='$mission' where id_profile='$idprofil'")or die(mysqli_error($conn));

		print("<script>");
		print("location.href = 'admin.php'");
		print("</script>");
?>
	</body>
</html>