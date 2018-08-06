<!doctype>
<html>
<head>
   <title>jsPDF</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <script type="text/javascript" src="jspdf.min.js"></script>
   <script type="text/javascript" src="html2canvas.js"></script>
   <script type="text/javascript">
      function genPDF(){
         html2canvas(document.getElementById("testDiv"),{
            onrendered: function(canvas){
               var img = canvas.toDataURL("image/png");
               var doc = new jsPDF();
               doc.addImage(img,'JPEG',20,20);
               doc.save('test.pdf');
            }

         });

      }

   </script>
</head>
<body>
   <h1>jsPDF Demon</h1>
   <a href="javascript:genPDF()">Download</a>
   <div id="testDiv">
      <H1>example header</H1>
      <input type="text"/>
      <input type="submit" value="botton"/>
      <br><br>
      <img src="test.jpg" width="600" height="400"/>

   </div>
</body>
</html>