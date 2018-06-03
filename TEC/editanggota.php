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
if($_POST){
	$nama = $_POST['nm_event'];
	$des_singkat = $_POST['des_singkat'];
	$des_lengkap=$_POST['des_lengkap'];
	$file_gambar1='';
	$upload_dir='/img';
	$fname = basename($_FILES['file_gambar']['name']);
	$tmp = $_FILES['file_gambar']['tmp_name'];
	if(!file_exists($_FILES['file_gambar']['tmp_name']) || !is_uploaded_file($_FILES['file_gambar']['tmp_name'])){
		echo "no upload";
		}
		else{
			
				move_uploaded_file($tmp, "$upload_dir/$fname");
				$file_gambar1 = $fname;
				$sql = mysqli_query($conn, "INSERT INTO event (nama, des_singkat, des_lengkap, foto)
				VALUES ('$nama', '$des_singkat', '$des_lengkap', '$file_gambar1')")or die (mysqli_error($conn));
		}
		echo $fname;
		echo $tmp;
		echo $upload_dir;
		//print("<script>");
		//print("location.href = 'admin.php'");//kembali ke halaman yg berisi semua user
		//print("</script>");
}
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
		<h1><center>Tambah Anggota</center></h1><br>
		<?php
			$nim = $_GET['id_anggota'];
			$query2 = mysqli_query($conn, "select * from anggota where nim='$nim'");
			$row2 = mysqli_fetch_array($query2);
		?>
		<center><form name="form" action="fungsieditanggota.php?id_anggota=<?php print($nim); ?>" method="post" enctype="multipart/form-data">
			<table width="500" height="300" border="0">
				<tr>
					<td>Nama</td>
					<td>
						<input type="text" name="nama" id="nama" size="30" value="<?php print($row2['nama']); ?>" maxlength="50" />
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>
					  <input type="text" name="nim" id="nim" size="30" value="<?php print($row2['nim']); ?>" maxlength="20" />
					</td>
				</tr> 
				<tr>
					<td>Jabatan</td>
					<td>
						<?php 
							$query=mysqli_query($conn, "SELECT * FROM jabatan");
							echo '<select name="nm_jabatan">';
							while($row=mysqli_fetch_array($query)){
								$kode=$row['id_jabatan'];
								$nm_jabatan=$row['nm_jabatan'];
								echo "<option value='$nm_jabatan'>$nm_jabatan</option>";
							}
							echo '</select>';
						?>
					</td>
				</tr>
				<tr>
					<td>foto</td>  
					<td>    
						<input type="file" name="fileToUpload" id="fileToUpload">
					</td>  
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="simpan" id="simpan" value="Submit" />
						<input type="reset" name="batal" id="batal" value="Batal" />
					</td>
				</tr>
			</table>
		</form></center>
	</body>
</html>
<?php } ?>