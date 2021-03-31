<!DOCTYPE html>
<html>

 <head>
     <title>About Me!</title>
     <?php readfile('header.html'); ?>
</head>

<body>
    <?php readfile('nav.html'); ?>
    <div class="parallax">
        <div class="container">
          <div class="row">
            <div class="col" id="bio">
                <h3>Personal Bio Data</h3>
           <p>
             Vaughn Paul' goes by the name Vaughn. He is a Utah
         native, studies in "computer programing". Weber State University is next 
        where he starts a BAS in the programing department but gravitate towards
         working as a structural engineering assistant for Don Russell design accepting
         a position in the drafting and design project for the"Dee" events center
        'grand entrance staircase'. Supervising all structural formsetting and
         finishing crews. Some other projects include the Eccles mansion
         the John M. Huntsman center and Micron. Currently Vaughn is a general contractor.
        "Home remodels". Taking on select projects in the salt lake valley 
         while attending SLCC he is looking forward to a cert. 1 web design
         and development certification 2021 and finishing his BAS from WSU in 
         "Art and Design" 2022. Vaughn enjoys a variety of hobbies including hiking,
         mountain biking, drawing, painting, and gardening.
         

             </p>
</div>
</div>
<div class="row">
    <div class="col-sm">
           <h3>Education</h3>

           <p>
               Weber State University 2004-2006, while cont_Ed Vaughn as a "Bruin"
              Salt Lake community College 2000-2002 Vaughn acceppts an internship
              from " Don Russell " located in Roy, Ut. as an assistant to the engineer.
              B.S. Business finance emphasis Computer Programing.
              </p>
</div>
      
> class="col-sm">
    <h3>Experience</h3>
    <p>
        <?php
        function buildString($skillSets) {
            $result ="";
            foreach($skillSets as $skillSet){
                $result .= $skillSet.",";
            }
            return rtrim($result, ",");
        }

        $result = "";
        $skills = ["html", "css", "javascript", "php/mysql"];
        $hobbies = array("Draw", "Paint", "Code");

        echo "<h4>Skills</h4>";
        echo buildString($skills);
        echo "<br>";
        echo "<h4>Hobbies</h4>";
        echo builsString($hobbies);


        ?>
    </p>
 </div>
</div>
<div class="row">
 <div class="col">
          <h3>Work Experience</h3>
          <p>
              aksdjaksljfhvalshvahgkftyif
              
                    2017 to present VPSHome Salt Lake City, Ut.<br>
                        <em>General Contractor</em><br>
                        Currently I am a small business owner. I currently bid jobs in salt lake city, Ut.
                        Taking on jobs 100,000$ or less on mostly residential projects. Custom kitchen and
                        bathroom remodels and some structural concrete as well.
                        Responsibilities include:
                        <ul>
                            <li>Setting up and maintaining advertisement. Making appointments for bids.</li>
                            <li>Bidding and estimating  future projects, meeting w homeownrers.</li>
                            <li>Schedualing]=======================================peeps</li>
                            <li>Providing===========================================stuff</li>
                            <li>Providing==============================================stuff</li>
                        </ul>
                        <br>
                        05/2016-2017 Millcreek Tile<br>
                        <em>Quality Engineer</em><br>
                        <ul>
                            <li>Created ===============================================================================
                                of our==================================================================================
                                testing and retesting........ validation processes.</li>
                            <li>Manual testing ================================ requirements sheets.</li>
                            <li>Docume---------------------------------------- Bugzilla and VersionOne</li>
                        </ul> 
    
                        <br>
                        05/2016====================Cottonwood Heights, UT USA<br>
                        <em>Software Quality Engineer</em><br>
                        <ul>
                            <li>Created and maintain----------------------as part
                                of our
                                test================================= processes.</li>
                            <li>Manual te===================================== to our
                                functional and non-functional requirements sheets.</li>
                            <li>Do==================================================</li>
                        </ul>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <h3>Projects</h3>
                    <p>
                        Designed and built the grand entrance staircase for Dee events center.
                    </p>
                </div>
                <div class="col-sm">
                    <h3>Spoken Languages</h3>
                    <p>
                        English
                        Pig Latin
                    </p>
                </div>
                <div class="col-sm">
                    <h3>References</h3>
                    <p>
                        Tha Rock<br>
                        Bill Gate<br>
                        Eon Musk<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php readfile('footer.html'); ?>

</body>

</html>

              



        
  
 

