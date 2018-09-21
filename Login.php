<?php
   include("Config.php");
   include('encryption.php');
   ini_set('display_errors', '1');
   session_start();
   $error = " ";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $instance = new Encryptor($mypassword);
	  $mypassword = $instance->encrypt($mypassword); 

      //this line pulls from the database
      $sql = "SELECT username FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  if(isset($row['active'])){
		$active = $row['active'];
	  }
      
      $count = mysqli_num_rows($result);//searches user name entered
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {//count is how many of that user name is in the database
        // session_register("myusername");
		session_start();
        $_SESSION['login_user'] = $myusername;
		$sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$_SESSION['userid'] = $row['userID'];
		header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
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
                  <label>Password  :</label><br><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Log In "/><br />
               </form>
			   
			   <form action ="acc_create.php">
					<input type = "submit" value = " Create New Account "/><br />
				</form>
               
              <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>