<? 
include('session.php');
include('Config.php');?>
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
<html>
    <head>
    <link href = "css/template1.css" , rel="stylesheet", type="text/css">
    </head>
    
<body topmargin = "1" leftmargin = "1" rightmargin="1">
    <div id="content" contenteditable="true" style="width: 50em; padding: 1.5em;">
    
    <h1 class ="title"> <?php
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
    <h1 class = "contact"> [Street Address][City, St Zip Code]
        <?php
            $username = $_SESSION['login_user'];
                                $sql = "SELECT * FROM personal WHERE username='$username'";
                                $result = mysqli_query($db,$sql);
                                $row = $result->fetch_assoc();
                                $number = $row["phone"];
                                $email = $row["email"];
                                echo $number." ".$email; 
        ?>
    </h1>
    <h1 class = "object"> Objective</h1>
    
    <p class = "temp">[To replace tip text with your own, just select a line of text and start typing. For best results when selecting text to copy or replace, don’t include space to the right of the characters in your selection.] </p>
   
    <h3 class = "school"> Education</h3>
    <ul class = "description">
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
        
        </ul>   
    <h3 class = "experience">Experience</h3>
    <h3 class = "job">[Dates From] – [To] <br>
            [Job Title] | [Company Name] | [Location] <br>
            [This is the place for a brief summary of your key responsibilities and most stellar accomplishments.] <br>
           <p id = "next">[Dates From] – [To] <br>
            [Job Title] | [Company Name] | [Location] <br>
            [This is the place for a brief summary of your key responsibilities and most stellar accomplishments.]</p> <br></h3>

    
        
    
    <h4 class = "award">Skills</h4>    

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
    
 
        
     </div>
    </body>  
    <link rel="stylesheet" href="css/style.css">
 <a class="btn btn-primary btn-outline" href="javascript:genPDF()">Download</a>  
    
</html>