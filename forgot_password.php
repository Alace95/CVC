<?php
include("Config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$myusername = mysqli_real_escape_string($db,$_POST['username']);
	$newkey = random_str(10);
	
	$sql = "SELECT * FROM admin WHERE username = '$myusername'";
	$result = mysqli_query($db,$sql);
	
	if (!$result) {
		printf("Error: %s\n", mysqli_error($db));
		exit();
	}
	
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$to = $row["email"];
	$subject = "Forgotten password";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$message = "<html><body>";
	$message .= "<h1>The password for ".$myusername." was requested.</h1><br>";
	$message .= "Your key is ".$newkey."<br>";
	$message .= "</body></html>";
	
	mail($to, $subject, $message, $headers);
}
?>

<html>

	<head>
		<title>
		Forgot Password
		</title>
		<style type = "text/css">
			body {
			font-family:Arial, Helvetica, sans-serif;
			font-size:14px;
			}

			label {
			font-weight:bold;
			width:100px;
			font-size:14px;
			}

			.box {
			border:#666666 solid 1px;
			}
		</style>
	</head>
	
	<body bgcolor = "#FFFFFF">
	<div align = "center">
		<div style = "width:300px; border: solid 1px #333333; " align = "center">
			<div style = "background-color:#333333; color:#FFFFFF; padding:3px;">
				<b>Forgot Password</b>
			</div>

			<div style = "margin:30px">
				<form action = "" method = "post">
					<p><center>
					<label>Please enter your username</label>
					<br>
					<input type="text" name="username" value="" placeholder="" required>
					<input type="submit" name="submit" value="Recover Password">
					</center></p>
					
			</div>
	</body>

</html>