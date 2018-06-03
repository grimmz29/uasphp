<?php
include("connection.php");
session_start();  
  
if (empty($_SESSION['user_id']) AND empty($_SESSION['password'])) {  
  
  echo "<center>Untuk mengakses halaman ini, Anda harus login   
";  
  
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
		<h1><center>Tambah Kelas</center></h1><br>
		<center><form name="form" action="fungsiaddkelas.php" method="post">
			<table width="500" height="300" border="0">
				<tr>
					<td>Nama Kelas</td>
					<td>
						<input type="text" name="nm_kelas" id="nm_kelas" size="30" maxlength="50" />
					</td>
				</tr>
				<tr>
					<td>Deskripsi Singkat</td>
					<td>
					  <input type="text" name="des_singkat" id="des_singkat" size="30" maxlength="100" />
					</td>
				</tr> 
				<tr>
					<td>Deskripsi Lengkap</td>
					<td>
						<textarea name="des_lengkap" id="des_lengkap" cols="35" rows="8"></textarea>
					</td>
				</tr>
				<tr>
					<td>Pengajar</td>  
					<td>    
						<input type="text" name="pengajar" id="pengajar" size="30" maxlength="50" />
					</td>  
				</tr>
				<tr>
					<td>Hari Kelas</td>
					<td>
						<input type="text" size="30" name="tglkls" id="tglkls" />
					</td>
				</tr>
				<tr>
					<td>jam Kelas</td>
					<td>
						<input type="time" name="jamkelas" id="jamkelas" size="30"/>
					</td>
				</tr>
	
				<tr>
					<td colspan="2" align="center">
					  <input type="submit" name="simpan" id="simpan" value="Simpan" />
					  <input type="reset" name="batal" id="batal" value="Batal" /></td>
				</tr>
			</table>
		</form></center>
	</body>
</html>
<?php } ?>