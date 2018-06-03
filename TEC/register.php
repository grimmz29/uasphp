<?php include ("connection.php"); ?>
<html>
	<head>
		<meta charset="utf-8">
		<!-- PAGE TITLE -->
		<title>Register</title>
		<!-- MAKE IT RESPONSIVE -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- SEO -->
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="keywords" content="">
		<!-- STYLESHEETS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/animate.min.css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<link href="css/options.css" rel="stylesheet" media="screen">
		<link href="css/responsive.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		
		<!-- FONTS -->
		<link href='../../../fonts.googleapis.com/css@family=Droid+Serif_3A400,400italic' rel='stylesheet' type='text/css'>
		<link href='../../../fonts.googleapis.com/css@family=Raleway_3A900,300,400,200,800' rel='stylesheet' type='text/css'>
	</head>
	<body>
	
		<div id="page">
			<!-- START HEADER -->
			<header id="header" class="small with-separation-bottom">
				<!-- POINTER ANIMATED -->
				<canvas id="header-canvas"></canvas>
				<!-- TOP NAVIGATION -->
				<div id="top-navigation">
					<ul class="animate-me fadeInDown" data-wow-duration="1.2s">
						<li class="menu-item"><span class="navigation-social">We're Tarumanagara English Club !</span> <a href="https://www.facebook.com/TarumanagaraEnglishClub?fref=ts"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/TEC_HQ"><i class="fa fa-twitter"></i></a></li>
						<li class="menu-item">
							<!-- SEARCHFORM -->
							<div id="search-container" class="animate-me fadeInDown">
								<form role="search" method="get" action="#" >
									<input type="text" value="" name="s" id="s" placeholder="Search..."/>
									<input type="hidden" name="searchsubmit" id="searchsubmit" value="true" />
									<button type="submit" name="searchsubmit"><i class="fa fa-search"></i></button>
								</form>
							</div>
							<a href="#" id="search-toggle"><i class="fa"></i></a>
						</li>
					</ul>
				</div>
				<!-- MOBILE NAVIGATION -->
				<nav id="navigation-mobile"></nav>
	  	
				<!-- MAIN MENU -->
				<?php
				include("nav.php");
				?>

				<!-- SHADOW -->
				<div id="shade2"></div>

				<!-- HEADER SLIDER -->
				<div class="flexslider" id="header-slider">
					<ul class="slides">
						<li><img src="images/bg1.jpg" alt="SLider Image"></li>
					</ul>	
				</div>
	  		
			</header>
			<!-- END HEADER -->
			<div class="main">
				<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<h1><center>Register</center></h1><br>
					<center><form name="form" action="fungsiregister.php" method="post">
						<table width="500" height="300" border="0">
							<tr>
								<td>Nama Event</td>
								<td>
									<?php  
										  $query=mysqli_query($conn, "SELECT * FROM event");
										  echo '<select name="nama">';
										  while($row=mysqli_fetch_array($query)){
										  $kode=$row['id_event'];
										  $nama=$row['nama'];
										  echo "<option value='$nama'>$nama</option>";
										  }
										  echo '</select>';
									?>
								</td>
							</tr>
							<tr>
								<td>Nama</td>
								<td>
								  <input type="text" name="namapendaftar" id="namapendaftar" size="30" maxlength="100" />
								</td>
							</tr> 
							<tr>
								<td>NIM</td>
								<td>
									<input type="text" name="nim" id="nim" size="30" maxlength="50" />
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
				</nav>
			</div>
			<!-- START FOOTER -->
			<?php
			include("footer.php");
			?>
			<!-- END FOOTER -->
			<!-- SCROLL TOP -->
			<a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
		</div>
		 <!-- SCRIPTS -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/custom.js"></script>
	</body>
	  <!-- END BODY -->
</html>