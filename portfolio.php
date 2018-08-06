<?php
include('session.php');

ini_set('display_errors', 1);
	if(isset($_POST) && array_key_exists('enter',$_POST)){
		if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  $myemployer = mysqli_real_escape_string($db,$_POST['employer']);
      $mystart = mysqli_real_escape_string($db,$_POST['Start']);
      $myend = mysqli_real_escape_string($db,$_POST['End']); 
	  $myposition = mysqli_real_escape_string($db,$_POST['Position']); 
	  $mycountry = mysqli_real_escape_string($db,$_POST['Country']); 
	  $mystate = mysqli_real_escape_string($db,$_POST['State']); 
	  $mycity = mysqli_real_escape_string($db,$_POST['City']); 
	  $myresp1 = mysqli_real_escape_string($db,$_POST['Responsibilities1']); 
	  $myresp2 = mysqli_real_escape_string($db,$_POST['Responsibilities2']); 
	  $myresp3 = mysqli_real_escape_string($db,$_POST['Responsibilities3']); 
	  $myresp4 = mysqli_real_escape_string($db,$_POST['Responsibilities4']); 
      $username = $_SESSION['login_user'];

      //this line pulls from the database
      $sql = "INSERT INTO work(employer,username,start,end,position,country,state,city,respo1,respo2,respo3,respo4,showing) VALUES('$myemployer', '$username', '$mystart', '$myend', '$myposition', '$mycountry', '$mystate', '$mycity', '$myresp1', '$myresp2', '$myresp3', '$myresp4', '1')";
      $result = mysqli_query($db,$sql);
	if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
	}
   }
	}
	else{
		
	}


 ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Work</title>
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

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
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

			<h1 id="fh5co-logo"><a href="home.php"><img src="images/logo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<!--Navigation-->
					<li><a href="home.php">Home</a></li>
					<li><a href="portfolio.php">Work</a></li>
					<li><a href="about.php">Education</a></li>
					<li><a href="skills.php">Skills/Other</a></li>
					<li><a href="personal.php">Personal</a></li>
					<li><a href="logout.php">Logout</a></li>
					<br>
					<br>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>Work</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
			</div>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Manage Your Work History</span></h2>
				<form method='post'>
				<div class="row animate-box" data-animate-effect="fadeInLeft">

						<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Starting Date</h4>
						<input type="text" name="Start" value="" placeholder=" DD/MM/YY">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Ending Date</h4>
						<input type="text" name="End" value="" placeholder=" DD/MM/YY">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Position</h4>
						<input type="text" name="Position" value="" placeholder=" title ">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Employer</h4>
						<input type="text" name="employer" value="" placeholder=" employer">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Responsibilities</h4>
						<input type="text" name="Responsibilities1" value="" placeholder=" task">
						<input type="text" name="Responsibilities2" value="" placeholder=" task">
						<input type="text" name="Responsibilities3" value="" placeholder=" task">
						<input type="text" name="Responsibilities4" value="" placeholder=" task">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Location</h4>
						<input type="text" name="Country" value="" placeholder="  country">
						<input type="text" name="State" value="" placeholder="  state/province">
						<input type="text" name="City" value="" placeholder="  city ">
					</div>
				</div>
				<br><p><input class="btn btn-primary btn-outline" name = "enter" type = "submit" value = " Add To Work History "/></p>
				</form>
				
			</div>
		
			<style>
			th {padding-left: 1em;}
			td {padding-left: 1em;}
			</style>
			<div class="fh5co-narrow-content">
				<div class="row">
					
						<h1 class="fh5co-heading-colored">Your Work History</h1>

				</div>
				<div class="row">
				
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

	
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

