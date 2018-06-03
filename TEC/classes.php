<?php
include("connection.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title> Classes </title>
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
				<div class="container">
					<!-- SKILLS -->
					<h2 class="with-breaker animate-me fadeInUp">
						Our Classes
					</h2>
					<p class="center">Here lies our dreams for regular classes</p>
					<div class="tabs-container">
						<ul class="nav nav-tabs" role="tablist" id="SkillsTab">
							<?php $query="SELECT nama FROM kelas";
							
								$result=mysqli_query($conn, $query);
								$i = 0;
								while ($row=mysqli_fetch_array($result)){
									$i = $i+1;
							?>
							<li><a href="#skill<?php echo "$i" ?>" role="tab" data-toggle="tab"> <?php echo $row["nama"]?></a></li>
								
							
								<?php } ?>
							<!--<li><a href="#skill1" role="tab" data-toggle="tab"><i class="fa fa-star-o"></i> Debate</a></li>
							<li><a href="#skill2" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i> Scrabble</a></li>
							<li><a href="#skill3" role="tab" data-toggle="tab"><i class="fa fa-line-chart"></i> English For Beginner</a></li>
							<li><a href="#skill4" role="tab" data-toggle="tab"><i class="fa fa-magic"></i> Social Club</a></li>
							<li><a href="#skill5" role="tab" data-toggle="tab"><i class="fa fa-paint-brush"></i> News Casting</a></li>-->
						</ul>

						<div class="tab-content">
							<?php $query="SELECT * FROM kelas";
							
								$result=mysqli_query($conn, $query);
								$i = 0;
								while ($row=mysqli_fetch_array($result)){
									$i = $i+1;
							?>
								<?php if($i == 1){?>
							<div class="tab-pane active bounceInRight" id="skill<?php echo "$i"?>">
								<h2><?php echo $row["nama"] ?></h2>
								<p class="text-justify"><?php echo $row["des_lengkap"] ?></p>
								<div class="row">
									<div class="col-md-6">
									Teacher :
										<ul><li><?php echo $row["guru"] ?></li></ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									Schedule : 
										<ul>
											<li>Day : <?php echo $row["tanggal"]?></li>
											<li>Time : <?php echo $row["jam"]?> </li>
										</ul>
									</div>
								</div>
							</div>
							<?php } else { ?>
							<div class="tab-pane bounceInRight" id="skill<?php echo "$i"?>">
								<h2><?php echo $row["nama"] ?></h2>
								<p class="text-justify"><?php echo $row["des_lengkap"] ?></p>
								<div class="row">
									<div class="col-md-6">
									Teacher :
										<ul><li><?php echo $row["guru"] ?></li></ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									Schedule : 
										<ul>
											<li>Day : <?php echo $row["tanggal"]?></li>
											<li>Time : <?php echo $row["jam"]?> </li>
										</ul>
									</div>
								</div>
							</div>
								<?php } ?>
								<?php } ?>
							<!--<div class="tab-pane active bounceInRight" id="skill1">
								<h2><i class="fa fa-star-o"></i>Debate</h2>
								<p class="text-justify"> Description will show from db</p>
								<div class="row">
									<div class="col-md-6">
									Teacher : 
										<ul>
											<li>David Luiz</li>
											<li>Dunga</li>
											<li>Ketut</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									Schedule : 
										<ul>
											<li>Days : </li>
											<li>Time :</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tab-pane bounceInRight" id="skill2">
								<h2><i class="fa fa-envelope-o"></i>Srabble</h2>
								<p class="text-justify"> Description will show from db</p>
								<div class="row">
									<div class="col-md-6">
									Teacher : 
										<ul>
											<li>David Luiz</li>
											<li>Dunga</li>
											<li>Ketut</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									Schedule : 
										<ul>
											<li>Days : </li>
											<li>Time :</li>
										</ul>
									</div>
								</div>
								
							</div>
							<div class="tab-pane bounceInRight" id="skill3">
								<h2><i class="fa fa-line-chart"></i>English For Beginner</h2>
								<p class="text-justify">Description will show from db</p>
								<div class="row">
									<div class="col-md-6">
									Teacher : 
										<ul>
											<li>David Luiz</li>
											<li>Dunga</li>
											<li>Ketut</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									Schedule : 
										<ul>
											<li>Days : </li>
											<li>Time :</li>
										</ul>
									</div>
								</div>
								
							</div>
							<div class="tab-pane bounceInRight" id="skill4">
								<h2><i class="fa fa-magic"></i>Social Club</h2>
								<p class="text-justify">Description will show from db</p>
								<div class="row">
									<div class="col-md-6">
									Teacher : 
										<ul>
											<li>David Luiz</li>
											<li>Dunga</li>
											<li>Ketut</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									Schedule : 
										<ul>
											<li>Days : </li>
											<li>Time :</li>
										</ul>
									</div>
								</div>
								
							</div>
							<div class="tab-pane bounceInRight" id="skill5">
								<h2><i class="fa fa-paint-brush"></i>News Casting</h2>
								<p class="text-justify">Description will show from db </p>
								<div class="row">
									<div class="col-md-6">
									Teacher : 
										<ul>
											<li>David Luiz</li>
											<li>Dunga</li>
											<li>Ketut</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									Schedule : 
										<ul>
											<li>Days : </li>
											<li>Time :</li>
										</ul>
									</div>
								</div>
								<div class="text-left">
									<a href="#" class="btn btn-default"><i class="fa fa-home"></i> Button Example</i></a>
								</div>
							</div>-->
							
						</div>
						<script>
						  $(function () {
								$('#SkillsTab a').click(function (e) {
									e.preventDefault()
									$(this).tab('show')
								});
						  });
						</script>
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