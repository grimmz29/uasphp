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
			<!-- END HEADER -->
			<!-- START MAIN CONTAINER -->
			<div class="main-container">
				<div id="faq-container" class="container">
					<!-- SKILLS -->
					<h2 class="with-breaker animate-me fadeInUp">
						FAQ
					</h2>
					<p class="center"> </p>
					<hr>
					<div class="row">
					<?php
						$query="SELECT * FROM faq";
								
						$result=mysqli_query($conn, $query);
						$total_record = mysqli_num_rows($result);
						$i = round($total_record/2);
						$j =0;
						while ($row=mysqli_fetch_array($result)){
					?>
						<div class="col-md-6">
							<ul class="faqs-container">
								
								<?php $j = $j+1; ?>
								<li class="faq"> 
									<h4 class="faq-link"><a href="javascript:void(0)"><i class="fa fa-question-circle"></i><?php echo $row['pertanyaan'] ?></a></h4>
									<div class="faq-content">
										<p><?php echo $row['jawaban'] ?></p>
									</div>
								</li>
								<?php 
									if($j%$i==0){
										echo "</ul>";
										echo "</div>";
									}
									}
									?>
							</ul>
						</div>
					</div>
					<hr>
				</div>
			</div>
			<!-- END MAIN CONTAINER -->
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