<?php include('session.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nitro &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">
													<!--IMAGE TO PERSON-->
			<h1 id="fh5co-logo"><img src="images/logo.png" alt="Free HTML5 Bootstrap Website Template"></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<!--Navigation-->
					<li><a href="home.php">Home</a></li>
					<li><a href="portfolio.php">Work</a></li>
					<li><a href="about.php">Education</a></li>
					<li><a href="skills.php">Skills/Other</a></li>
					<li><a href="personal.php">Personal</a></li>
					<li><a href = "logout.php">Logout</a></li>
					<br><br>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2016 Nitro Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
				
			</div>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Welcome 
				<?php
				$username = $_SESSION['login_user'];
				$sql = "SELECT username FROM personal WHERE username = '$username'";
				$result = mysqli_query($db,$sql);
				if (!$result || mysqli_num_rows($result) == 0) {
					echo $_SESSION['login_user'];
				}
				else {
					$sql = "SELECT * FROM personal WHERE username='$username'";
					$result = mysqli_query($db,$sql);
					$row = $result->fetch_assoc();
					$firstname = $row["first"];
					if($firstname==""){
						echo $_SESSION['login_user'];
					}
					else{
						echo " back, ";
						echo $firstname;
					}
				}
				?>! <br>Select your template<span>or manage your information</span></h2>
				<div class="row animate-box" data-animate-effect="fadeInLeft">
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work1.php">
							<img src="images/template2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Template 1</h3>
						</a>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work2.php">
							<img src="images/template2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Template 2</h3>
						</a>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work3.php">
							<img src="images/template3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Template 3</h3>
						</a>
					</div>
					<div class="clearfix visible-md-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work4.php">
							<img src="images/template4.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">template 4</h3>
						</a>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work5.php">
							<img src="images/template5.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Template 5</h3>
						</a>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work6.php">
							<img src="images/template6.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title">Template 6</h3>
						</a>
					</div>
					
					
				</div>
			</div>
			
			
			<div class="fh5co-testimonial" >
				<div class="fh5co-narrow-content">
					<div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
		            <div class="fh5co-narrow-content  animate-box" data-animate-effect="fadeInLeft">
				<h2 class="fh5co-wheading">The Team</span></h2>

				<div class="row">
					<div class="col-md-4 fh5co-staff">
						<img src="images/person3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3 style="color: white;">Alexander Acevedo</h3>
						<h4 style="color: white;">Database Developer</h4>
							<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="images/person2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3 style="color: white;">Connor <br>Forgey</h3>
						<h4 style="color: white;">Project Manager</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="images/person4.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3 style="color: white;">Zaina <br>Aljallad</h3>
						<h4 style="color: white;">Encryption and Web development</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="images/person4.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3 style="color: white;">Anthony <br>Hinnant</h3>
						<h4 style="color: white;">Web Design</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="images/person4.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3 style="color: white;">Elizabeth <br>Maspoch</h3>
						<h4 style="color: white;">Web Development & Design</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		            
		            
		          </div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
