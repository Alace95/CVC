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
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
	  
	  
	  
      $sql = "SELECT username FROM admin WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
	  if ($result && mysqli_num_rows($result) > 0) {
    printf("Error: That username already exists\n");
    exit();
    }

      
      $sql = "INSERT INTO admin(username, password, email) VALUES ('$myusername', '$mypassword', '$myemail')";
      $result = mysqli_query($db,$sql);
      if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
	  }
   }
?>
<html>
   
   <head>
      <title>Create Account</title>
      
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
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Create Account</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                          <p><center><label>Email :</label><br><input type="text" name="email" value="" placeholder="Enter an email"></center></p>
                <p><center><label>UserName  :</label><input type="text" name="username" value="" placeholder="Create a Username"></center></p>  
                    <p><center><label>Password  :</label><input type="password" name="password" value="" placeholder="Create a Password"></center></p>
                    <p><center><label>Confirm Password  :</label><input type="password" name="password" value="" placeholder="Confirm Password"></center></p>
                    <p class="submit"><center><input type="submit" name="commit" value="Create Account" href = "Inputpage.html"></center></p>
               </form>
         
              <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          
            </div>
        
         </div>
      
      </div>

   </body>
</html>




