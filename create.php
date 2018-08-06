<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

   include("Config.php");
   session_start();
   $error = " ";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	  
	  
      $sql = "SELECT username FROM admin WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
	  if ($result && mysqli_num_rows($result) > 0) {
    printf("Error: That username already exists\n");
    exit();
}

      $sql = "INSERT INTO admin(username, password) VALUES ('$myusername', '$mypassword')";
      $result = mysqli_query($db,$sql);
      if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
	  }
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		

   }
?>
<html>
   
   <head>
      <title>Creation Page</title>
      
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
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Create Account "/><br />
               </form>
               
              <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>