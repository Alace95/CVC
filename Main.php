<?php
   include("session.php");
?>
<html>
	<head>
		<!--BASIC PAGE SETUP START-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="CSS/General.css">
		<!--BASIC PAGE SETUP END-->
		<title><?php echo $_SESSION['login_user'];?></title>
		<header><h1>Welcome <?php echo $_SESSION['login_user'];?>!</h1></header>
	</head>
	<body>
		<header><h2>Education</h2></header>
		<header><h2>Work History</h2></header>
		<header><h2>Skills</h2></header>
		<header><h2></h2></header>
	</body>

</html>