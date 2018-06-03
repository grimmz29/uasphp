<?php
include("connection.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title> TEC </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
						<li class="menu-item">
							<span class="navigation-social">We're Tarumanagara English Club !</span> 
							<a href="https://facebook.com/TarumanagaraEnglishClub">
								<i class="fa fa-facebook"></i>
							</a> 
							<a href="https://twitter.com/TEC_UNTAR">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="https://instagram.com/tec_untar">
								<i class="fa fa-instagram"></i>
							</a>
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
				<div id="shade"></div>

				<!-- HEADER SLIDER -->
				<div class="flexslider" id="header-slider">
					<ul class="slides">
						<li><img src="images/bg1.jpg" alt="SLider Image"></li>
					</ul>	
				</div>
			</header>
			<!-- START MAIN CONTAINER -->
	  	<div class="main-container">
		<?php
			$nama = "Gathering Camp (GC)";
			$query="SELECT * FROM event WHERE nama = '$nama'";
			$result=mysqli_query($conn, $query);
			while ($row=mysqli_fetch_array($result)){
		?>
	  		<div class="container">
	  			<div class="row">
	  				<!--PORTFOLIO -->
		  			<h2 class="with-breaker animate-me fadeInUp">
			  			Event <span>Don't miss our maint event every year!</span>
		  			</h2>
	  				<div class="col-lg-6">
	  					<div class="flexslider image-slider">
	  						<!--SLIDER -->
	  						<ul class="slides">
	  							<li><a href="img/<?php echo $row['foto']?>" data-fancybox-group="project-slider" class="fancybox"><img src="img/<?php echo $row['foto'] ?>" alt="Project Image"></a></li>
	  						</ul>
	  					</div>
	  					<!--SHARE BUTTONS -->
			  			<ul class="share-buttons animate-me fadeInUp">
			  				<script>function fbs_click() {u=location.href;t=document.title;window.open('../../../www.facebook.com/sharer.php@u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436'); return false;}</script>
			  				<li><a rel="nofollow" href="../../../www.facebook.com/share.php@u=_3C;url_3E" onclick="return fbs_click()" target="_blank" class="btn btn-default button-facebook" ><i class="fa fa-facebook"></i> Share it</a></li>
			  				<li><a href="../../../twitter.com/home/@status=Your tweet text." target="_blank" class="btn btn-default button-twitter"><i class="fa fa-twitter"></i> Tweet it</a></li>
			  			</ul>
	  				</div>
	  				<div class="col-lg-6">
	  					<!--ITEM DETAILS -->
			  			<h1 class="animate-me fadeInRight project-title"><?php echo $row['nama']?></h1>
			  			<hr class="align-left">
						<p class="text-justify"><?php echo $row['des_lengkap'] ?></p>
			  			<div class="text-right animate-me bounceIn">
			  				<a href="register.php" class="btn btn-default"><i class="fa fa-link"></i>Register</a>
			  			</div>
	  				</div>
	  			</div>
			</div>
			<?php } ?>
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