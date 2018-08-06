<?php 
include('session.php'); 
include('Config.php');

ini_set('display_errors', 1);

if(isset($_POST) && array_key_exists('enter',$_POST)){
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	 
    	$firstname = ($_POST{"firstname"}); 
    	$middle = ($_POST{"middle"}); 
    	$lastname = ($_POST{"lastname"});
    	$email = ($_POST{"email"}); 
    	$number = ($_POST{"number"}); 
    	$country = ($_POST{"country"}); 
    	$city = ($_POST{"city"}); 
    	$state = ($_POST{"state"});
    	$website = ($_POST{"Website"}); 
    	$username = $_SESSION['login_user']; 
		$pic= ($_POST{"pic"}); 
		echo $pic;
		$sql = "SELECT username FROM personal WHERE username = '$username'";
      $result = mysqli_query($db,$sql);
	  if (!$result || mysqli_num_rows($result) == 0) {
			$sql = "INSERT INTO personal(username) VALUES ('$username')";
			$result = mysqli_query($db,$sql);
	  }
   
		//$sql = "SELECT * FROM personal WHERE username = $username";
	//	$sth = $db->query($sql);
		//$result=mysqli_fetch_array($sth);
		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
	
    	//$sql = "INSERT INTO personal(username,first,middle,last,email,website,phone,country,state,city) VALUES('$username', '$firstname', '$middle', '$lastname', '$email','$website', '$number', '$country', '$state', '$city')"; 
    	//$result = mysqli_query($db,$sql);
		if($firstname!=""){
			$sql = "UPDATE personal
					SET first = '$firstname'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}
		if($middle!=""){
			$sql = "UPDATE personal
					SET middle = '$middle'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}
		if($lastname!=""){
			$sql = "UPDATE personal
					SET last = '$lastname'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}if($email!=""){
			$sql = "UPDATE personal
					SET email = '$email'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}
		if($website!=""){
			$sql = "UPDATE personal
					SET website = '$website'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}
		if($number!=""){
			$sql = "UPDATE personal
					SET phone = '$number'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}
		if($country!=""){
			$sql = "UPDATE personal
					SET country = '$country'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}
		if($state!=""){
			$sql = "UPDATE personal
					SET state = '$state'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}
		if($city!=""){
			$sql = "UPDATE personal
					SET city = '$city'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}
		if($pic!=""){
			$sql = "UPDATE personal
					SET pic = '$pic'
					WHERE username='$username'";
			$result = mysqli_query($db,$sql);
		}
   if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
	}
    }
	
}
	

?>


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
					<li><a href ="logout.php">Logout</a></li>
					<br><br>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2016 Nitro Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
			</div>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Manage Your Personal Information</span></h2>
				<form method = 'post'>
					<div class="row animate-box" data-animate-effect="fadeInLeft">

							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
							<h4 class="fh5co-work-title">First Name</h4>
							<input type="firstname" name="firstname" value="" placeholder=" firstname">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
							<h4 class="fh5co-work-title">Middle Initial</h4>
							<input type="text" name="middle" value="" placeholder=" ie: M">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
							<h4 class="fh5co-work-title">Last Name</h4>
							<input type="text" name="lastname" value="" placeholder=" lastname">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
							<h4 class="fh5co-work-title">Email</h4>
							<input type="text" name="email" value="" placeholder=" Sample@CVcreator.com ">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
							<h4 class="fh5co-work-title">Website</h4>
							<input type="text" name="Website" value="" placeholder=" CVcreator.com ">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
							<h4 class="fh5co-work-title">Number</h4>
							<input type="text" name="number" value="" placeholder=" (###)###-#### ">
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
							<h4 class="fh5co-work-title">Location</h4>
							<input type="text" name="country" value="" placeholder="  country">
							<input type="text" name="state" value="" placeholder="  state/province">
							<input type="text" name="city" value="" placeholder="  city ">
						</div>
						<div>
							<form action="/action_page.php">
							<h4 class="fh5co-work-title">Picture</h4>
							<input class="btn btn-primary btn-outline" style="height: 3em; " type="file" name="pic" accept="image/*">
							<br><p>
							<div>
						<input class="btn btn-primary btn-outline" name = "enter" type = "submit" value = " Update"/></p>
						</div>
							</form>
						</div>
					</div>
				
				</form>
			</div>
		

			<div class="fh5co-narrow-content">
				<div class="row">
					
						<h1 class="fh5co-heading-colored">Your Current Information</h1>

				</div>
				<div class="row animate-box" data-animate-effect="fadeInLeft">

					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">First Name</h4>
						<!--php HERE-->
						<?php 
						$username = $_SESSION['login_user'];
						$sql = "SELECT * FROM personal WHERE username='$username'";
						$result = mysqli_query($db,$sql);
						$row = $result->fetch_assoc();
						$firstname = $row["first"];
						echo $firstname;
						?>
						
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Middle Initial</h4>
						<!--php HERE-->
						<?php 
						$username = $_SESSION['login_user'];
						$sql = "SELECT * FROM personal WHERE username='$username'";
						$result = mysqli_query($db,$sql);
						$row = $result->fetch_assoc();
						$data = $row["middle"];
						echo $data;
						?>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Last Name</h4>
						<!--php HERE-->
						<?php 
						$username = $_SESSION['login_user'];
						$sql = "SELECT * FROM personal WHERE username='$username'";
						$result = mysqli_query($db,$sql);
						$row = $result->fetch_assoc();
						$data = $row["last"];
						echo $data;
						?>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Email</h4>
						<!--php HERE-->
						<?php 
						$username = $_SESSION['login_user'];
						$sql = "SELECT * FROM personal WHERE username='$username'";
						$result = mysqli_query($db,$sql);
						$row = $result->fetch_assoc();
						$data = $row["email"];
						echo $data;
						?>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Website</h4>
						<!--php HERE-->
						<?php 
						$username = $_SESSION['login_user'];
						$sql = "SELECT * FROM personal WHERE username='$username'";
						$result = mysqli_query($db,$sql);
						$row = $result->fetch_assoc();
						$data = $row["website"];
						echo $data;
						?>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Number</h4>
						<!--php HERE-->
						<?php 
						$username = $_SESSION['login_user'];
						$sql = "SELECT * FROM personal WHERE username='$username'";
						$result = mysqli_query($db,$sql);
						$row = $result->fetch_assoc();
						$data = $row["phone"];
						echo $data;
						?>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h4 class="fh5co-work-title">Location</h4>
						<!--php HERE-->
						<?php 
						$username = $_SESSION['login_user'];
						$sql = "SELECT * FROM personal WHERE username='$username'";
						$result = mysqli_query($db,$sql);
						$row = $result->fetch_assoc();
						$data = $row["country"];
						echo $data;
						$data = $row["state"];
						echo $data;
						$data = $row["city"];
						echo $data;
						?>
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

