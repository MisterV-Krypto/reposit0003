<!DOCTYPE html>
<html>

 <head>
     <title>About Me!</title>
     <?php readfile('header.html'); ?>
 </head>


 <body>
      <?php readfile('nav.html'); ?>

      <?php
          include "database.php";
          $ini_data = parse_ini_file("config.ini");

          get_content($ini_data["contact_table"]);
      ?>

      <?php readfile('footer.html'); ?>
  </body>

  </html>
  


    
     
