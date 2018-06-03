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
	  		<div class="container">
	  			<div class="row">
	  				<!--PORTFOLIO -->
		  			<h2 class="with-breaker animate-me fadeInUp">
			  			Portfolio <span>Just missing your next awesome project</span>
		  			</h2>
	  				<div class="col-lg-6">
	  					<div class="flexslider image-slider">
	  						<!--SLIDER -->
	  						<ul class="slides">
	  							<li><a href="images/portfolio/03.jpg" data-fancybox-group="project-slider" class="fancybox"><img src="images/portfolio/03.jpg" alt="Project Image"></a></li>
	  							<li><a href="images/portfolio/04.jpg" data-fancybox-group="project-slider" class="fancybox"><img src="images/portfolio/04.jpg" alt="Project Image"></a></li>
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
			  			<h1 class="animate-me fadeInRight project-title">Project Name</h1>
			  			<hr class="align-left">
			  			<ul class="post-metadatas">
			  				<li><i class="fa fa-clock-o"></i>Released : November 25, 2015</li>
			  				<li><i class="fa fa-thumb-tack"></i>Categories: <a href="#">Webdesign</a>, <a href="#">Graphic</a></li>
			  			</ul>
			  			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra posuere feugiat. Vestibulum purus ligula, malesuada sed erat sed, finibus condimentum est. Suspendisse bibendum, sapien eu suscipit porta, neque sapien ornare mi, eu mollis justo lacus sed risus. Proin posuere quam leo, id iaculis magna pellentesque at. Phasellus a consequat dui. Aenean vel neque a augue pharetra elementum. Nunc suscipit aliquet volutpat. Aliquam quis sagittis felis, ut viverra risus. Ut ut sapien risus. In tortor enim, consequat sit amet ultricies non, luctus ut nibh. Curabitur vel sollicitudin tellus.</p>
			  			<div class="text-right animate-me bounceIn">
			  				<a href="#" class="btn btn-default"><i class="fa fa-link"></i> View Website</a>
			  			</div>
	  				</div>
	  			</div>
	  			

	  			<!--PORTFOLIO -->
	  			<h2 class="with-breaker animate-me fadeInUp">
		  			Our Latest Work <span>Yep, and we're proud !</span>
	  			</h2>
	  		</div>
	  		<div id="portfolio-container" class="with-separation-bottom with-separation-top">
	  			<!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/01.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/02.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/03.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/04.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/05.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
			    <!--PORTFOLIO ITEM -->
	  			<figure class="portfolio-item effect-sadie">
			        <img src="images/portfolio/06.jpg" alt="Image portfolio"/>
			        <figcaption>
			            <h4>Project Name</h4>
			            <p>Short description</p>
			            <a href="portfolio-single.html">View more</a>
			        </figcaption>         
			    </figure>
	  		</div>
	  		<div class="portfolio-button center animate-me zoomIn">
		  		<a href="portfolio.html" class="btn btn-default"><i class="fa fa-suitcase"></i> More Stuff on our Portfolio</a>
	  		</div>
	  	</div>
		<!-- START FOOTER -->
			<?php
			include("footer.php");
			?>
			<!-- END FOOTER -->