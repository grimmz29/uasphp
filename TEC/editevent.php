<?php
	include("connection.php");
	session_start();  
  
	if (empty($_SESSION['user_id']) AND empty($_SESSION['password'])) {  
  
		echo "<center>Untuk mengakses halaman ini, Anda harus login";  
  
		print("<script>");
		print("location.href = ' login.php'");
		print("</script>");
  
	}  
  
	else{  
  
	?>
	<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<link type="text/css" href="development-bundle/themes/ui-lightness/ui.all.css" rel="stylesheet" />   
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Tarumanagara English Club</title>
		<meta name="description" content="Tarumanagara English Club" />
		<meta name="keywords" content="Tarumanagara English Club" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="development-bundle/ui/ui.core.js"></script>
		<script type="text/javascript" src="development-bundle/ui/ui.datepicker.js"></script>
		<script type="text/javascript" src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>	
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<span>Tarumanagara English Club</span>
				<h1><a href = "admin.php" >Administrator</a></h1>
				<nav>
					<a href="logout.php" class="icon-drop" data-info="Keluar">Keluar</a>
				</nav>
			</header>	
			<div class="main">
				<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
						<li>
							<a href="#">Olah Data</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>Anggota</h4>
										<ul>
											<li><a href="addanggota.php">Tambah Anggota</a></li>
											<li><a href="listanggota.php">List Anggota</a></li>
										</ul>
									</div>
									<div>
										<h4>Jabatan</h4>
										<ul>
											<li><a href="addjabatan.php">Tambah Jabatan</a></li>
											<li><a href="listjabatan.php">List Jabatan</a></li>
										</ul>
									</div>
									<div>
										<h4>TEC</h4>
										<ul>
											<li><a href="addprofiltec.php">Profil TEC</a></li>
											<li><a href="editprofil.php">Edit Profil TEC</a></li>
											<br></br>
										</ul>
									</div>
									<div>
										<h4>Kelas</h4>
										<ul>
											<li><a href="addkelas.php">Tambah Kelas</a></li>
											<li><a href="listkelas.php">List Kelas</a></li>
										</ul>
									</div>
									<div>
										<h4>Event</h4>
										<ul>
											<li><a href="addevent.php">Tambah Event</a></li>
											<li><a href="listevent.php">List Event</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">List pendaftaran</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div>
										<h4>Recruitment</h4>
										<ul>
											<li><a href="#">List Data</a></li>
										</ul>
									</div>
									<div>
										<h4>BEP</h4>
										<ul>
											<li><a href="listregisterbep.php">List Data</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">FaQ</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										<h4>FaQ</h4>
										<ul>
											<li><a href="addfaq.php">Tambah FaQ</a></li>
											<li><a href="listfaq.php">List FaQ</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
		<h1><center>Edit Event</center></h1>
		<?php
			$id_event = $_GET['id_event'];
			$query2 = mysqli_query($conn, "select * from event where id_event='$id_event'");
			$row2 = mysqli_fetch_array($query2);
		?>
		<br>
		<br>
		<form name="formdata" action="fungsieditevent.php?id_event=<?php print($id_event); ?>" method="post" enctype="multipart/form-data">
			<center>
				<table width="500" height="300" border="0">
					<tr>
						<td>Nama Event</td>
						<td><input type="text" name="nm_event" size= "30" value="<?php print($row2['nama']); ?>"></td>
					</tr>
					<tr>
						<td>Deskripsi Singkat</td>  
						<td>    
							<input type="text" name="des_singkat" id="des_singkat" size="30" maxlength="100" value="<?php print($row2['des_singkat']); ?>"/>
						</td>  
					</tr>
					<tr>
						<td>Deskripsi Lengkap</td>  
						<td>    
							<textarea name="des_lengkap" id="des_lengkap" cols="40" rows="8"><?php print($row2['des_lengkap']); ?></textarea>
						</td>  
					</tr>
					<tr>
						<td>Link web</td>  
						<td>    
							<input type="text" name="link" id="link" size="30" maxlength="50" value="<?php print($row2['link']); ?>"/>
						</td>  
					</tr>
					<tr>
						<td>Background</td>  
						<td>    
							<input type="file" name="fileToUpload" id="fileToUpload">
						</td>  
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="simpan" id="simpan" value="Simpan" />
							<input type="reset" name="batal" id="batal" value="Batal" />
						</td>
					</tr>
				</table>
			</center>
		</form>
	</body>
</html>
<?php } ?>