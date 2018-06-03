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
		<!-- LOADER DIV - ONLY HOME -->
		<div id="loader">
			<div id="loading-logo"></div>
		</div>
		<style type="text/css" scoped>
  			@media only screen and (max-width: 992px) {
  				#page-customizer{display: none;}
  			}
  			#customizer-toggle{
				background: #FFF;
				padding: 12px 15px;
				float: right;
				position: relative;
				right: -40px;
				border-radius: 0 5px 5px 0;
				margin-top: 30px;
				color: #444;
  			}
  			#customizer-toggle:hover{color: #B4B4B4;}
  			#page-customizer{
  				z-index: 100;
  				position: fixed;
  				left: -230px;
  				top: 20%;
  			}
  			#page-customizer.show-me{left: 0;}
  			#container-customizer{
  				background: #FFF;
				padding: 30px;
				width: 230px;
				border-radius: 0 5px 5px 0;
  			}
  			#container-customizer a.btn{display: block;}
  			#container-customizer h5{font-weight: bold;}
  		</style>
		
		<div id="page">
		<!-- START HEADER -->
			<header id="header" class="big with-separation-bottom">
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
	  		
				<!-- TEXT SLIDER -->
				<div id="ticker" class="animate-me zoomIn">
					<h4 class="with-breaker">Why join us ?</h4>
					<div id="ticker-text">
						<ul>
							<li>Tarumanagara English Club</li>
							<li>We're ready to hear you</li>
							<li>Our work is all about quality</li>
							<li>We're always at the top</li>
							<li>We care about you</li>
							<li>We're Indonesia & proud !</li>
							<li>We're dynamic !</li>
						</ul>
					</div>
				</div>  		
	  		
				<!-- SCROLL BOTTOM -->
				<div id="scroll-bottom" class="animate-me fadeInUpBig">
					<a href="#"><i class="fa fa-angle-double-down"></i></a>
				</div>
	  		
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
				<div class="container">
					<!-- SKILLS -->
					<h2 class="with-breaker animate-me fadeInUp">
						What do we do <span>Built for any kind of activity !</span>
					</h2>
					<table id="skills-container" class="skills">
						<tr class="skill-row">
							<?php
								$query="SELECT * FROM kelas";
							
								$result=mysqli_query($conn, $query);
								$i = 0;
								while ($row=mysqli_fetch_array($result)){
							?>
								<?php $i = $i+1; ?>
								<td class="skill zoomIn">
									<h4><?php echo $row["nama"];?></h4>
									<p>
										<?php
											echo $row["des_lengkap"];
										?>
									</p>
								</td>
								
							<?php
							if($i % 3 == 0){
								echo "</tr>";
							}
							} ?>
							
						</tr>
					</table>
					<!--PORTFOLIO -->
					<h2 class="with-breaker animate-me fadeInUp">
						Our Latest Event <span>Yep, and we're proud !</span>
					</h2>
				</div>
				<div id="portfolio-container" class="with-separation-bottom with-separation-top">
					<?php
						$query = "SELECT * FROM event";
						$result = mysqli_query($conn, $query);
						while ($row=mysqli_fetch_array($result)){
					?>
						<!--PORTFOLIO ITEM -->
						<figure class="portfolio-item effect-sadie">
							<img src="img/<?php echo $row['foto']?>" alt="Image portfolio"/>
							<figcaption>
								<h4><?php echo $row['nama']?></h4>
								<p><?php echo $row['des_singkat']?></p>
								<a href="<?php echo $row['link']?>">View more </a>
							</figcaption>
						</figure>
					<?php } ?>
				
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
		<script type="text/javascript">
			/*TEXT TICKER (ONLY FOR HOME PAGE)*/
			$('#ticker-text').vTicker('init', {
				speed: 300, 
				pause: 3000
			});
		</script>
		
		<!-- ONLY DEMO -->	
		<script src="js/custom.js"></script>
	</body>
</html>