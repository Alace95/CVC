<? 
include('session.php');
include('Config.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <script type="text/javascript" src="jspdf.min.js"></script>
   <script type="text/javascript" src="html2canvas.js"></script>
   <script type="text/javascript">
      function genPDF(){
         html2canvas(document.getElementById("wrapper"),{
            onrendered: function(canvas){
                var img = canvas.toDataURL("image/png");
                var doc = new jsPDF("p", "mm", "a4");

                var width = doc.internal.pageSize.width;    
                var height = doc.internal.pageSize.height;

               doc.addImage(img, 'JPEG', 0, 0, width, height);
               doc.save('Resume.pdf');
            }

         });

      }

   </script>
<title>Template 4</title>
<link type="text/css" rel="stylesheet" href="css/purple.css" />
<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="JAVASCRIPT/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="JAVASCRIPT/js/jquery.tipsy.js"></script>
<script type="text/javascript" src="JAVASCRIPT/js/cufon.yui.js"></script>
<script type="text/javascript" src="JAVASCRIPT/js/scrollTo.js"></script>
<script type="text/javascript" src="JAVASCRIPT/js/myriad.js"></script>
<script type="text/javascript" src="JAVASCRIPT/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="JAVASCRIPT/js/custom.js"></script>
<script type="text/javascript">
        Cufon.replace('h1,h2');
</script>
</head>
<body>
<!-- Begin Wrapper -->

<div contenteditable="true" id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait"  alt=" " />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name">
            <?php
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
            ?> <br />
              </h1>
            <ul><br>
              <li class="mail">

                <?php
                $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM personal WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    $row = $result->fetch_assoc();
                                    $email = $row["email"];
                                    echo $email; 
                ?></li><br>
              <li class="tel"><?php
                $username = $_SESSION['login_user'];
                                $sql = "SELECT * FROM personal WHERE username='$username'";
                                $result = mysqli_query($db,$sql);
                                $row = $result->fetch_assoc();
                                $number = $row["phone"];
                                echo $number; 
              ?></li>
              <li class="web"><?php
              $username = $_SESSION['login_user'];
                                $sql = "SELECT * FROM personal WHERE username='$username'";
                                $result = mysqli_query($db,$sql);
                                $row = $result->fetch_assoc();
                                $number = $row["website"];
                                echo $number; 
              ?></li>
            </ul>
          </div>
          <!-- End Personal Information -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>OBJECTIVE</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim viverra nibh sed varius. Proin bibendum nunc in sem ultrices posuere. Aliquam ut aliquam lacus.</p>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
            <div class="yui-gf last">
             <div class="yui-u first">
          <h2>EDUCATION</h2>
                </div>
          <div class="content">
              <div clas = "yui-u">
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
              </div>
          </div>
        </div>
          </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry">
          <h2>WORK EXPERIENCE</h2>
          <div class="yui-u">
  
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

            </div><!--// .yui-u -->
            </div><!--// .yui-gf -->
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>SKILLS</h2>
          <div class="content">
            <h3>Software Knowledge</h3>
            <ul class="skills">
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
            </ul>
          </div>
          <div class="content">
            <h3>Languages</h3>
            <ul class="skills">
              <?php
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
                                        
        ?>
            </ul>
          </div>
        </div>
        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        <div class="entry">
        
            
        </div>
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper --> 

  </div>

  <div class="wrapper-bottom"></div>

</div>
<link rel="stylesheet" href="css/style.css">
 <a class="btn btn-primary btn-outline" href="javascript:genPDF()">Download</a>
<!-- End Wrapper -->
</body>

</html>
