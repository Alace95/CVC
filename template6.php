<? 
include('session.php');
include('Config.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <script type="text/javascript" src="jspdf.min.js"></script>
   <script type="text/javascript" src="html2canvas.js"></script>
   <script type="text/javascript">
      function genPDF(){
         html2canvas(document.getElementById("page-wrap"),{
            onrendered: function(canvas){
                var img = canvas.toDataURL("image/png");
                var doc = new jsPDF("p", "mm", "a4");

                var width = doc.internal.pageSize.width-40;    
                var height = doc.internal.pageSize.height-40;

               doc.addImage(img, 'JPEG', 0, 0, width, height);
               doc.save('Resume.pdf');
            }

         });

      }

   </script>


     <title>Template 6</title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
</head>

<body>

    <div contenteditable="true" id="page-wrap">
    
        
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
            <h1 class="fn"><?php
                $username = $_SESSION['login_user'];
                        $sql = "SELECT * FROM personal WHERE username='$username'";
                        $result = mysqli_query($db,$sql);
                        $row = $result->fetch_assoc();
                        $firstname = $row["first"];
                        $middle = $row["middle"];
                        $lastname = $row["last"];
                        echo $firstname; 
                        echo " ";
                        echo $middle;
                        echo ". ";
                        echo $lastname;
            ?></h1>
        
            <p>
                Cell: <span class="tel"><?php
                $username = $_SESSION['login_user'];
                                $sql = "SELECT * FROM personal WHERE username='$username'";
                                $result = mysqli_query($db,$sql);
                                $row = $result->fetch_assoc();
                                $number = $row["phone"];
                                echo $number; 
                ?></span><br />
                Email: <a class="email" href="mailto:greatoldone@lovecraft.com"><?php
                $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM personal WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    $row = $result->fetch_assoc();
                                    $email = $row["email"];
                                    echo $email; 
                ?></a>
            </p>
        </div>
                
        <div id="objective">
            <p>
                I am an outgoing and energetic (ask anybody) young professional, seeking a 
                career that fits my professional skills, personality, and murderous tendencies. 
                My squid-like head is a masterful problem solver and inspires fear in who gaze upon it. 
                I can bring world domination to your organization. 
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Education</dt>
            <dd>
                
                 <?php
                    $username = $_SESSION['login_user'];
                    $sql = "SELECT * FROM education WHERE username='$username'";
                    $result = mysqli_query($db,$sql);
                                    
                  if (!empty($result)) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<h2>".$row["school"]." ,".$row["time"]."</h2>".$row["degree"]."," .$row["major"] . "<br>".$row["minor"]."<br>".$row["distinctions"];
                    }
                    } else {
                        }
                 ?>
            </dd>
            
            <dd class="clear"></dd>
            <style>
                li{
                    list-style: none;
                    float: left;
                    padding-right: 6em;
                }
            </style>
            <dt>Skills</dt>
            <dd>
                <?php
                        $username = $_SESSION['login_user'];
                                $type = 'skill';
                                $sql = "SELECT * FROM skills WHERE username='$username' AND type='$type'";
                                $result = mysqli_query($db,$sql);
                                
                                if (!empty($result)) {
                                    // output data of each row
                                    $count = 0;
                                    while($row = $result->fetch_assoc()) {
                                        $count += 1; 
                                        echo "<li>".$row["skill"]."</li>";

                                    }
                                }
                                        
                ?>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
               <?php
                $username = $_SESSION['login_user'];
                $sql = "SELECT * FROM work WHERE username='$username'";
                $result = mysqli_query($db,$sql);
                                    
                if (!empty($result)) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<h2>".$row["employer"]."</h2><h3>".$row["position"]." &nbsp".$row["start"]."-".$row["end"]."</h3><p>".$row["respo1"]."<br>".$row["respo2"]."<br>".$row["respo3"]."<br>".$row["respo4"];
                    }
                } else {

                        }
              ?>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Hobbies</dt>
            <dd><?php
                        $username = $_SESSION['login_user'];
                                $type = 'hobby';
                                $sql = "SELECT * FROM skills WHERE username='$username' AND type='$type'";
                                $result = mysqli_query($db,$sql);
                                
                                if (!empty($result)) {
                                    // output data of each row
                                    $count = 0;
                                    while($row = $result->fetch_assoc()) {
                                        $count += 1; 
                                        echo "<li>".$row["skill"]."</li>";

                                    }
                                }
                                        
                ?></dd>
            
            <dd class="clear"></dd>
            
            <dt>Languages</dt>
            <dd><?php
                        $username = $_SESSION['login_user'];
                                $type = 'language';
                                $sql = "SELECT * FROM skills WHERE username='$username' AND type='$type'";
                                $result = mysqli_query($db,$sql);
                                
                                if (!empty($result)) {
                                    // output data of each row
                                    $count = 0;
                                    while($row = $result->fetch_assoc()) {
                                        $count += 1; 
                                        echo "<li>".$row["skill"]."</li>";

                                    }
                                }
                                        
                ?></dd>
            
            <dd class="clear"></dd>
        </dl>
        
        <div class="clear"></div>
    
    </div>
    <link rel="stylesheet" href="css/style.css">
 <a style="padding-left: 45%;" class="btn btn-primary btn-outline" href="javascript:genPDF()">Download</a>
</body>

</html>