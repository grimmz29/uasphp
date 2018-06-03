<html>
	<head>
		<meta charset="utf-8">
		<title> Blog </title>
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
			<!-- END HEADER -->
			
			<!-- START MAIN CONTAINER -->
			<div class="main-container">
				<div class="container">
					<!--BLOG -->
					<h2 class="with-breaker animate-me fadeInUp">
						Blog <span>We share our ideas</span>
					</h2>
					<ul class="blog-grid">
						<!-- BLOG POST -->
						<li class="blog-post">
							<!-- THUMBNAIL IMAGE -->
							<div class="blog-thumbnail">
								<a href="blog-single.html">
									<img src="images/blog/01.png" alt="Thumbnail Image">
								</a>
							</div>
							<!-- POST CONTENT -->
							<div class="blog-content">
								<a href="blog-single.html" class="blog-post-title"><h2>Post Name 1</h2></a>
								<ul class="post-metadatas list-inline">
									<li><i class="fa fa-clock-o"></i> November 25, 2015</li>
									<li><i class="fa fa-comments-o"></i> <a href="blog-single.html">4 comments</a></li>
									<li><i class="fa fa-thumb-tack"></i> <a href="#">Webdesign</a>, <a href="#">Graphic</a></li>
								</ul>
								<p class="blog-sum-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra posuere feugiat. Vestibulum purus ligula, malesuada sed erat sed, finibus condimentum est. Suspendisse bibendum, sapien eu suscipit porta, neque sapien ornare mi, eu mollis justo lacus sed risus. Proin posuere quam leo, id iaculis magna pellentesque at...</p>
								<div class="blog-button">
									<a href="blog-single.html" class="btn btn-default"><i class="fa fa-arrow-right"></i> Read More</a>
								</div>
							</div>
						</li>
						<!-- BLOG POST -->
						<li class="blog-post">
							<!-- THUMBNAIL IMAGE -->
							<div class="blog-thumbnail">
								<a href="blog-single.html">
									<img src="images/blog/02.png" alt="Thumbnail Image">
								</a>
							</div>
							<!-- POST CONTENT -->
							<div class="blog-content">
								<a href="blog-single.html" class="blog-post-title"><h2>Post Name 2</h2></a>
								<ul class="post-metadatas list-inline">
									<li><i class="fa fa-clock-o"></i> November 20, 2015</li>
									<li><i class="fa fa-comments-o"></i> <a href="blog-single.html">32 comments</a></li>
									<li><i class="fa fa-thumb-tack"></i> <a href="#">SE0</a></li>
								</ul>
								<p class="blog-sum-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra posuere feugiat. Vestibulum purus ligula, malesuada sed erat sed, finibus condimentum est. Suspendisse bibendum, sapien eu suscipit porta, neque sapien ornare mi, eu mollis justo lacus sed risus. Proin posuere quam leo, id iaculis magna pellentesque at...</p>
								<div class="blog-button">
									<a href="blog-single.html" class="btn btn-default"><i class="fa fa-arrow-right"></i> Read More</a>
								</div>
							</div>
						</li>
						<!-- BLOG POST -->
						<li class="blog-post">
							<!-- THUMBNAIL IMAGE -->
							<div class="blog-thumbnail">
								<a href="blog-single.html">
									<img src="images/blog/03.png" alt="Thumbnail Image">
								</a>
							</div>
							<!-- POST CONTENT -->
							<div class="blog-content">
								<a href="blog-single.html" class="blog-post-title"><h2>Post Name 3</h2></a>
								<ul class="post-metadatas list-inline">
									<li><i class="fa fa-clock-o"></i> November 12, 2015</li>
									<li><i class="fa fa-comments-o"></i> <a href="blog-single.html">3 comments</a></li>
									<li><i class="fa fa-thumb-tack"></i> <a href="#">Community</a></li>
								</ul>
								<p class="blog-sum-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra posuere feugiat. Vestibulum purus ligula, malesuada sed erat sed, finibus condimentum est. Suspendisse bibendum, sapien eu suscipit porta, neque sapien ornare mi, eu mollis justo lacus sed risus. Proin posuere quam leo, id iaculis magna pellentesque at...</p>
								<div class="blog-button">
									<a href="blog-single.html" class="btn btn-default"><i class="fa fa-arrow-right"></i> Read More</a>
								</div>
							</div>
						</li>
						<!-- BLOG POST -->
						<li class="blog-post">
							<!-- THUMBNAIL IMAGE -->
							<div class="blog-thumbnail">
								<a href="blog-single.html">
									<img src="images/blog/04.png" alt="Thumbnail Image">
								</a>
							</div>
							<!-- POST CONTENT -->
							<div class="blog-content">
								<a href="blog-single.html" class="blog-post-title"><h2>Post Name 4</h2></a>
								<ul class="post-metadatas list-inline">
									<li><i class="fa fa-clock-o"></i> October 19, 2015</li>
									<li><i class="fa fa-comments-o"></i> <a href="blog-single.html">32 comments</a></li>
									<li><i class="fa fa-thumb-tack"></i> <a href="#">Webdesign</a></li>
								</ul>
								<p class="blog-sum-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra posuere feugiat. Vestibulum purus ligula, malesuada sed erat sed, finibus condimentum est. Suspendisse bibendum, sapien eu suscipit porta, neque sapien ornare mi, eu mollis justo lacus sed risus. Proin posuere quam leo, id iaculis magna pellentesque at...</p>
								<div class="blog-button">
									<a href="blog-single.html" class="btn btn-default"><i class="fa fa-arrow-right"></i> Read More</a>
								</div>
							</div>
						</li>
						<!-- BLOG POST -->
						<li class="blog-post">
							<!-- THUMBNAIL IMAGE -->
							<div class="blog-thumbnail">
								<a href="blog-single.html">
									<img src="images/blog/01.png" alt="Thumbnail Image">
								</a>
							</div>
							<!-- POST CONTENT -->
							<div class="blog-content">
								<a href="blog-single.html" class="blog-post-title"><h2>Post Name 5</h2></a>
								<ul class="post-metadatas list-inline">
									<li><i class="fa fa-clock-o"></i> October 8, 2015</li>
									<li><i class="fa fa-comments-o"></i> <a href="blog-single.html">32 comments</a></li>
									<li><i class="fa fa-thumb-tack"></i> <a href="#">Mobile</a></li>
								</ul>
								<p class="blog-sum-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra posuere feugiat. Vestibulum purus ligula, malesuada sed erat sed, finibus condimentum est. Suspendisse bibendum, sapien eu suscipit porta, neque sapien ornare mi, eu mollis justo lacus sed risus. Proin posuere quam leo, id iaculis magna pellentesque at...</p>
								<div class="blog-button">
									<a href="blog-single.html" class="btn btn-default"><i class="fa fa-arrow-right"></i> Read More</a>
								</div>
							</div>
						</li>
					</ul>
					<div class="blog-next-page center animate-me zoomIn">
						<a href="blog.html" class="btn btn-default"><i class="fa fa-hand-o-right"></i> Next Page</a>
					</div>
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