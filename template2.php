<? 
include('session.php');
include('Config.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Template 2</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <script type="text/javascript" src="jspdf.min.js"></script>
   <script type="text/javascript" src="html2canvas.js"></script>
   <script type="text/javascript">
      function genPDF(){
         html2canvas(document.getElementById("content"),{
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

    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
    <link rel="stylesheet" type="text/css" href="css/template2.css" media="all" />

</head>
<body>
<div id="content">
<div contenteditable="true" id="doc2" class="yui-t7">
    <div id="inner">
    
        <div id="hd">
            <div class="yui-gc">
                <div class="yui-u first">
                    <h1>
                        <!--FULL NAME-->
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
                        ?>
                    </h1>
                    <h2><!--CURRENT POSITION--></h2>
                </div>

                <div class="yui-u">
                    <div class="contact-info">
                        <h3><a href=" ">
                            <!--EMAIL-->
                                <?php 
                                    $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM personal WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    $row = $result->fetch_assoc();
                                    $email = $row["email"];
                                    echo $email; 
                                ?>
                            </a></h3>
                        <h3>
                        <!--NUMBER-->
                            <?php 
                                $username = $_SESSION['login_user'];
                                $sql = "SELECT * FROM personal WHERE username='$username'";
                                $result = mysqli_query($db,$sql);
                                $row = $result->fetch_assoc();
                                $number = $row["phone"];
                                echo $number; 
                            ?>    
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="bd">
            <div id="yui-main">
                <div class="yui-b">

                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Profile</h2>
                        </div>
                        <div class="yui-u">
                            <p class="enlarge">
                                Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change. 
                            </p>
                        </div>
                    </div><!--// .yui-gf -->

                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Skills</h2>
                        </div>
                        <div class="yui-u">
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
			                            echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ".$row["skill"]."&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";
			                            if($count%4==0){
			                                echo "<li>"."</li>";
                            }

                        }
                        
                    } else {

                    }
                    
                    ?>
                           

                        </div>
                    </div><!--// .yui-gf-->

                    <div class="yui-gf">
    
                        <div class="yui-u first">
                            <h2>Work History</h2>
                        </div><!--// .yui-u -->

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


                    <div class="yui-gf last">
                        <div class="yui-u first">
                            <h2>Education</h2>
                        </div>
                        <div class="yui-u">
                            <?php
                                    $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM education WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    
                                    if (!empty($result)) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<h2>".$row["school"]." ,".$row["time"]."</h2>".$row["degree"].",".$row["major"]."<br>".$row["minor"]."<br>".$row["distinctions"];
                                        }
                                    } else {

                                    }
                               ?>
                        </div>
                    </div><!--// .yui-gf -->


                </div><!--// .yui-b -->
            </div><!--// yui-main -->
        </div><!--// bd -->

        <div id="ft">
            <p>

                <?php 
                        $username = $_SESSION['login_user'];
                        $sql = "SELECT * FROM personal WHERE username='$username'";
                        $result = mysqli_query($db,$sql);
                        $row = $result->fetch_assoc();
                        $firstname = $row["first"];
                        $middlename = $row["middle"];
                        $lastname = $row["last"];
                        $email = $row["email"];
                        $number = $row["phone"];
                        echo $firstname." ".$middlename." ".$lastname." &mdash; ".$email." &mdash;".$number;
                        ?></p>
        </div><!--// footer -->

    </div><!-- // inner -->


</div><!--// doc -->


</div>
<link rel="stylesheet" href="css/style.css">
 <a class="btn btn-primary btn-outline" href="javascript:genPDF()">Download</a>
</body>
</html>


