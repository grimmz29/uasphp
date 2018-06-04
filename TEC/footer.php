<footer id="footer" class="with-separation-top">
	<aside id="widgets" class="container">
		<div class="row">
			<!-- WIDGET -->
			<div class="col-md-4 widget animate-me fadeInLeft">
				<img src="images/logo-footer.png" id="footer-logo" alt="Logo footer">
				<?php 
						$query="SELECT * FROM profiltec";
						$result=mysqli_query($conn, $query);
						while ($row=mysqli_fetch_array($result)){
					?>
					<p><?php echo $row['profile'] ?></p>
				<?php } ?>
				<a href="about-us.php" class="btn btn-default"><i class="fa fa-users"></i> Read more</a>
			</div>
			<!-- WIDGET -->
			<div class="col-md-4 widget animate-me fadeInUp">
				<h4>Navigation</h4>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="about-us.php">About Us</a></li>
				</ul>
			</div>
			<!-- WIDGET -->
			<div class="col-md-4 widget animate-me fadeInRight">
				<h4>Contact</h4>
				<ul class="contact-informations">
					<li class="contact-address"><a href="https://goo.gl/maps/hkcvxDqhLKU2">Tarumanagara University</a></li>
					<li class="contact-phone">@yjp0547y</li>
				</ul>
				<ul class="widget-social">
					<!-- ALL ICONS AVAILABLE ->http://fortawesome.github.io/Font-Awesome/icons/#brand-->
					<li><a href="https://www.facebook.com/TarumanagaraEnglishClub?fref=ts"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/TEC_UNTAR"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://instagram.com/tec_untar"><i class="fa fa-instagram"></i></a></li>
				</ul>			
			</div>
		</div>
	</aside>
	<div id="copyright" class="animate-me fadeInUp">
		<div class="container">
			<center><p>Website ini dibuat untuk memenuhi tugas PHP<p></center>
		</div>
	</div>
</footer>