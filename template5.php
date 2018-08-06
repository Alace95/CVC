<? 
include('session.php');
include('Config.php');?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
    <div contenteditable="true" class="wrapper" id="content">
        <div class="sidebar-wrapper">
            <div class="profile-container">
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
    ?>
                </h1>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: yourname@email.com">
                        <?php
                $username = $_SESSION['login_user'];
                                    $sql = "SELECT * FROM personal WHERE username='$username'";
                                    $result = mysqli_query($db,$sql);
                                    $row = $result->fetch_assoc();
                                    $email = $row["email"];
                                    echo $email; 
                ?>
                    </a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:0123 456 789"><?php
                $username = $_SESSION['login_user'];
                                $sql = "SELECT * FROM personal WHERE username='$username'";
                                $result = mysqli_query($db,$sql);
                                $row = $result->fetch_assoc();
                                $number = $row["phone"];
                                echo $number; 
              ?></a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/" target="_blank">
                    <?php
              $username = $_SESSION['login_user'];
                                $sql = "SELECT * FROM personal WHERE username='$username'";
                                $result = mysqli_query($db,$sql);
                                $row = $result->fetch_assoc();
                                $number = $row["website"];
                                echo $number; 
              ?></a></li>
                    
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <div class="item">
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
                  <?php
                $username = $_SESSION['login_user'];
                 $sql = "SELECT * FROM education WHERE username='$username'";
               $result = mysqli_query($db,$sql);
                $row = $result->fetch_assoc();
                $school = $row["school"];
                $row = $result->fetch_assoc();
                  $time = $row["time"];
                                    
                                    echo $email; 
                ?>
              </div>
          </div>
        </div>
          </div>
                </div><!--//item-->
                <div class="item">
                    <h4 class="degree">BSc in Applied Mathematics</h4>
                    <h5 class="meta">Bristol University</h5>
                    <div class="time">2007 - 2011</div><br>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc">(Native)</span></li>
                    <li>French <span class="lang-desc">(Professional)</span></li>
                    <li>Spanish <span class="lang-desc">(Professional)</span></li>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li>Climbing</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
                <div class="summary">
                    <p>Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can <a href="http://themes.3rdwavemedia.com/website-templates/orbit-free-resume-cv-template-for-developers/" target="_blank">download this free resume/CV template here</a>. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Lead Developer</h3>
                            <div class="time">2015 - Present</div>
                        </div><!--//upper-row-->
                        <div class="company">Startup Hubs, San Francisco</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>  
                        
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">Senior Software Engineer</h3>
                            <div class="time">2014 - 2015</div>
                        </div><!--//upper-row-->
                        <div class="company">Google, London</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>  
                        
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">UI Developer</h3>
                            <div class="time">2012 - 2014</div>
                        </div><!--//upper-row-->
                        <div class="company">Amazon, London</div>
                    </div><!--//meta-->
                    <div class="details">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>  
                    </div><!--//details-->
                </div><!--//item-->
                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Education</h2>
                <div class="intro">
                    <p>You can list your side projects or open source libraries in this section. </p>
                </div><!--//intro-->
                <div class="item">
                    <span class="project-title"><a href="#hook">Velocity</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote, market and sell their products.</span>
                    
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">DevStudio</a></span> - 
                    <span class="project-tagline">A responsive website template designed to help web developers/designers market their services. </span>
                </div><!--//item-->
                <div class="item">
                    <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">Delta</a></span> - <span class="project-tagline">A responsive Bootstrap one page theme designed to help app developers promote their mobile apps</span>
                </div><!--//item-->
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                <div class="skillset">        
                    <div class="item">
                        <h3 class="level-title">Python &amp; Django</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Angular</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="95%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Ruby on Rails</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="85%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title">Sketch &amp; Photoshop</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="60%">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div><br>
    <link rel="stylesheet" href="css/style.css">
 <a class="btn btn-primary btn-outline" href="javascript:genPDF()">Download</a>
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 