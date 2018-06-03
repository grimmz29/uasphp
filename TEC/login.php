<?php
session_start();  
require_once("connection.php");


$username="";
$password="";

if(isset($_POST["submit"])){
$username=mysqli_real_escape_string($conn, $_POST["username"]);
$password=mysqli_real_escape_string($conn, $_POST["password"]);

$query="SELECT * from useradmin WHERE username='$username' AND password='$password'";

$result=mysqli_query($conn, $query)or die('SQL Error :: '.mysqli_error($conn));;
if(mysqli_num_rows($result)>0){ 
	$row=mysqli_fetch_array($result);
	$_SESSION["user_id"]=$row["username"];
	
	print '<script>
	window.location.href = "admin.php";
	</script>';
}
else{
echo "<script> alert ('Wrong username / password');</script>";
}
}
?>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8 no-js">      <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9 no-js">           <![endif]-->
<!--[if gt IE 9]>  <html class="no-js">                       <![endif]-->
<!--[if !IE]><!--> <html class="no-js">
<!DOCTYPE html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Login</title>
		   
		<!-- // Mobile meta/files // -->

		<!-- For third-generation iPad with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
		<!-- For iPhone 4with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/mobile/apple-touch-icon-114x114.png" />
		<!-- For first-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/mobile/apple-touch-icon-72x72.png" />
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="images/mobile/apple-touch-icon.png" />
		<!-- For nokia devices: -->
		<link rel="shortcut icon" href="images/apple-touch-icon.png" />
		<!-- 320x460 for iPhone 3GS -->
		<link rel="apple-touch-startup-image" media="(max-device-width: 480px) and not (-webkit-min-device-pixel-ratio: 2)" href="images/mobile/splash-320x460.png" />
		<!-- 640x920 for retina display -->
		<link rel="apple-touch-startup-image" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" href="images/mobile/splash-640x920-retina.png" />
		<!-- iPad Portrait 768x1004 -->
		<link rel="apple-touch-startup-image" media="(min-device-width: 768px) and (orientation: portrait)" href="images/mobile/splash-768x1004.png" />
		<!-- iPad Landscape 1024x748 -->
		<link rel="apple-touch-startup-image" media="(min-device-width: 768px) and (orientation: landscape)" href="images/mobile/splash-1024x748.png" />
		<!-- iPad 3 Portrait 1536x2008 -->
		<link rel="apple-touch-startup-image" media="(min-device-width: 1536px) and (orientation: portrait)" href="images/mobile/splash-1536x2008-retina.png" />
		<!-- iPad 3 Landscape 2048x1536 -->
		<link rel="apple-touch-startup-image" media="(min-device-width: 2048px) and (orientation: landscape)" href="images/mobile/splash-2048x1496-retina.png" />
		<!-- Transform to webapp: -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fullscreen mode: -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<!-- Viewport for older phones - http://davidbcalhoun.com/tag/handheldfriendly -->
		<meta name="HandheldFriendly" content="true"/>   
		<!-- Viewport - http://davidbcalhoun.com/tag/handheldfriendly -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
		<!-- This file contains some fixes, splash screen and web app code --> 
		<script src="js/mobiledevices.js"></script>
		
		<!-- // Internet Explore // -->
		
		<!-- IE9 Pinned Sites: http://msdn.microsoft.com/en-us/library/gg131029.aspx -->
		<meta name="application-name" content="Elite Admin Skin">
		<meta name="msapplication-tooltip" content="Cross-platform admin skin.">
		<meta name="msapplication-starturl" content="http://themes.creativemilk.net/elite/html/index.html">
		<!-- These custom tasks are examples, you need to edit them to show actual pages -->
		<meta name="msapplication-task" content="name=Home;action-uri=http://themes.creativemilk.net/elite/html/index.html;icon-uri=http://themes.creativemilk.net/elite/html/images/favicons/favicon.ico">
		<meta http-equiv="cleartype" content="on" /> 
		
		<!--[if lt IE 8]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
		<![endif]-->
				
		<!-- // Stylesheets // -->

		<!-- Framework -->
		<link rel="stylesheet" href="css/framework.css"/>
		<!-- Core -->
		<link rel="stylesheet" href="css/login.css"/>
		<!-- Styling -->
		<link rel="stylesheet" href="css/theme/lightgrey.css" id="themesheet"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="css/destroy-ie6-ie7.css"/>
		<![endif]-->
		  
		<!-- // Misc // -->
		
		<!--<link rel="shortcut icon" href="images/favicons/favicon.ico">-->
		
		<!-- // jQuery/UI core // -->
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>!window.jQuery && document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
		<script src="http://code.jquery.com/ui/1.8.22/jquery-ui.min.js"></script>
		<script>!window.jQueryUI && document.write('<script src="js/jquery-ui-1.8.22.min.js"><\/script>')</script>
		
		<!-- // Plugins // -->    
						  
		<!-- Touch helper -->  
		<script src="js/jquery.ui.touch-punch.min.js"></script>
		<!-- Stylesheet switcher --> 
		<script src="js/e_styleswitcher.1.1.min.js"></script>   
		<!-- Checkbox solution -->
		<script src="js/e_checkbox.1.0.min.js"></script>       
		<!-- Tabs -->
		<script src="js/e_tabs.1.1.min.js"></script>
		<!-- Menu -->
		<script src="js/e_menu.1.1.min.js"></script>
		<!-- Contact form with validation -->
		<script src="js/e_contactform.1.1.min.js"></script>    
		<!-- Show password -->     
		<script src="js/e_showpassword.1.0.min.js"></script>  
		<!-- Tooltip -->               
		<script src="js/tipsy.js"></script>      
		<!-- Plugins and custom code -->     
		<script src="js/login.js"></script>  
		
		<!-- // HTML5/CSS3 support // -->

		<script src="js/modernizr.min.js"></script>
					
	</head>
	<body>  
		<div id="login">
		
			<!-- Put your logo here -->
			<div id="logo">
				<h2>Tarumanagara English Club</h>
			</div>
			
			<!-- Show a dialog -->

			<!-- The main part -->                   
			<div id="login-outher">        
				<div id="login-inner">
					<header>
						<h2>Login</h2>                 
					</header>
					
					<div id="login-content">
						<?php 
						if(! isset($_SESSION["tipe_login"])){
						?>
						<form method="post" action="login.php" id="login-form">
							<div class="g_1">
								<label for="field1">Username</label>
							</div>
							<div class="g_1">                            
								<input type="text" name="username" id="field1" tabindex="1" data-validation-type="present"/>
							</div>
							
							<div class="spacer-10"><!-- spacer 20px --></div> 
							
							<div class="g_1">
								<label for="field2">Password</label>
							</div>
							<div class="g_1">  
								<input type="password" name="password" id="field2" tabindex="2" data-validation-type="present"/> 
							</div>
							<div class="spacer-20"><!-- spacer 20px --></div> 
							
							 <div class="g_1">
								<input type="submit" value="Login" name="submit" tabindex="4" class="button-text"/>
								<input type="reset" value="Batal" name="reset" tabindex="4" class="button-text"/>
							</div>   	
						</form>
						<?php }  ?>
					</div><!-- End #login-content --> 
				</div><!-- End #login-inner -->                                  
			</div><!-- End #login-outher --> 
			
			<!-- place your copyright text here -->
			<footer id="footer">
				Copyright © 2014 - TEC
			</footer> 
		</div><!-- End "#login" -->        
	</body>
</html>