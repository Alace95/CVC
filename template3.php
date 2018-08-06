<? 
include('session.php');
include('Config.php');?>

<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="jspdf.min.js"></script>
   <script type="text/javascript" src="html2canvas.js"></script>
   <script type="text/javascript">
      function genPDF(){
         html2canvas(document.getElementById("cv"),{
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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fichiers CSS -->
<link rel="stylesheet" href="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/reset.css">
<!--[if lt IE 9]> 
    <link rel="stylesheet" href="css/cv.css" media="screen">
<![endif]-->
<link rel="stylesheet" media="screen and (max-width:480px)" href="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/mobile.css">
<link rel="stylesheet" media="screen and (min-width:481px)" href="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/cv.css">
<link rel="stylesheet" media="print" href="Sheldon%20COOPER%20-%20Physicien%20surdou%C3%A9%20et%20Geek%20qualifi%C3%A9_files/print.css">
</head>
<!DOCTYPE html>
<html>
<head>
<title>Template 3</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="css/template3.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div contenteditable="true" id="cv" class="instaFade">
    <div class="mainDetails">
        
        <div id="name">
            <h1 class="quickFade delayTwo">
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
            <h2 class="quickFade delayThree"><!--Position--></h2>
        </div>
        
        <div id="contactDetails" class="quickFade delayFour">
            <ul>
                <li>e: <a href="mailto:joe@bloggs.com" target="_blank">
                        <?php
                            $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM personal WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    $row = $result->fetch_assoc();
                                    $email = $row["email"];
                                    echo $email; 
                        ?>
                </a></li>
                <li>w: <a href="http://www.bloggs.com">
                    <?php
                        $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM personal WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    $row = $result->fetch_assoc();
                                    $email = $row["website"];
                                    echo $email;
                    ?> 
                </a></li>
                <li>m: <?php
                        $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM personal WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    $row = $result->fetch_assoc();
                                    $email = $row["phone"];
                                    echo $email;
                ?></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="mainArea" class="quickFade delayFive">
        <section>
            <article>
                <div class="sectionTitle">
                    <h1>Personal Profile</h1>
                </div>
                
                <div class="sectionContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </div>
            </article>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Work Experience</h1>
            </div>
            <style>
                h2 {
                    
                    font-size: 40pt;
                    text-decoration: bold;
                    font font-weight: 400;
                }
            </style>
            <div class="sectionContent">
                <article>
                <?php
                    $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM work WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    
                                    if (!empty($result)) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<h2>".$row["employer"]." , ".$row["position"]."</h2>".$row["start"]."-".$row["end"]."".$row["respo1"]."<br>".$row["respo2"]."<br>".$row["respo3"]."<br>".$row["respo4"];
                                        }
                                    } else {

                                    }
                ?>
                </article>
                
            </div>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Key Skills</h1>
            </div>
            
            <div class="sectionContent">
                <ul class="keySkills">
                    <?php
                    $username = $_SESSION['login_user'];
                                $sql = "SELECT * FROM skills WHERE username='$username' ";
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
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Education</h1>
            </div>
            
            <div class="sectionContent">
                <article>
                    <?php
                        $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM education WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    
                                    if (!empty($result)) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<h2>".$row["school"]."</h2>".$row["degree"].",".$row["major"]."<br>".$row["minor"]."<br>".$row["distinctions"];
                                        }
                                    } 
                    ?>
                </article>
            </div>
            <div class="clear"></div>
        </section>
        
    </div>
</div>
<link rel="stylesheet" href="css/style.css">
 <a class="btn btn-primary btn-outline" href="javascript:genPDF()">Download</a>
</body>


</html>