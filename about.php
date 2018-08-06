<? 
include('session.php');
include('Config.php');

ini_set('display_errors', 1);
	if(isset($_POST) && array_key_exists('enter',$_POST)){
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  $mygrad = mysqli_real_escape_string($db,$_POST['Graduation']);
      $mydegree = mysqli_real_escape_string($db,$_POST['Degree']);
      $myschool = mysqli_real_escape_string($db,$_POST['School']); 
	  $mymajor = mysqli_real_escape_string($db,$_POST['Major']); 
	  $myminor = mysqli_real_escape_string($db,$_POST['Minor']); 
	  $mydistinctions = mysqli_real_escape_string($db,$_POST['Distinctions']); 
      $username = $_SESSION['login_user'];

      //this line pulls from the database
      $sql = "INSERT INTO education VALUES('$username', '$mygrad', '$mydegree', '$myschool', '$mymajor', '$myminor', '$mydistinctions')";
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
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Manage Your Educational History</span></h2>
				<form method='post'>
				<div class="row animate-box" data-animate-effect="fadeInLeft">

					
						<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Graduation Date</h4>
						<input type="text" name="Graduation" value="" placeholder=" DD/MM/YY">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Degree</h4>
						<input type="text" name="Degree" value="" placeholder=" i.e: Highschool, Bachelor..">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">School</h4>
						<input type="text" name="School" value="" placeholder=" school name ">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Subjects</h4>
						<input type="text" name="Major" value="" placeholder="  major">
						<input type="text" name="Minor" value="" placeholder="  minor">
						<input type="text" name="Distinctions" value="" placeholder=" Distinctions (Summa/ cum/ laude/ honors) ">
					</div>
				</div>
				<br><p><input class="btn btn-primary btn-outline" name = "enter" type = "submit" onclick="myCreateFunction()" value = " Add To Educational History "/></p>
					</form>
			</div>
			<style>
			th {padding-left: 1em;}
			td {padding-left: 1em;}
			</style>
			<div class="fh5co-narrow-content">
				<div class="row">
					
						<h1 class="fh5co-heading-colored">Your Educational History</h1>

				</div>
				<div class="row">
					<?php ;
					$username = $_SESSION['login_user'];
					$sql = "SELECT * FROM education WHERE username='$username'";
     				 $result = mysqli_query($db,$sql);
	  
					
					
					
					
					if (!empty($result)) {
						echo "<table><tr><th><h4>Show</h4></th><th><h4>Graduation Date</h4></th><th><h4>Degree</h4></th><th><h4>School</h4></th><th><h4>Major</h4></th><th><h4>Minor</h4></th><th><h4>Distinctions</h4></th></tr>";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<tr><td>&nbsp;<input type=\"checkbox\" name=\"checkbox\" value=\"\" id=\"checkbox\"></td><td>".$row["time"]."</td><td>".$row["degree"]."</td><td>".$row["school"]." </td><td> ".$row["major"]."</td><td> ".$row["minor"]."</td><td> ".$row["distinctions"]."</td></tr>";
						}
						echo "</table>";
					} else {

					}
					
					?>
					<br>
				</div>
				<a class="btn btn-primary btn-outline">Delete Selected</a>
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

