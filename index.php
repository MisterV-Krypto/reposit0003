<!DOCTYPE html>
<html>

 <head>
     <title>About Me!</title>
     <?php readfile('header.html'); ?>
</head>

<body>
    <?php readfile('nav.html'); ?>
    <div class="parralax">
        <div class="container">
          <div class="row">
            <div class="col" id="bio">
                <h3>Personal Bio</h3>
                <p>
                     My name is Vaughn Simmons I am a Utah native. working full time 
                    as a field supervisor for Don Russell LLC. My first project is the "Dee" events center
                    'Grand' entrance staircase. Supervising all structural steele, formsetting and
                    finishing crews and working under the engineer, projects include the Eccles mansion
                    the John M. Huntsman center and eventually ending up @ Micron.The Micron Foundation is established 
                    to advance STEM education and support communities in 2000. Fast forward 5 years
                    2004 Micron ships first 2-gigabit NAND flash product and I am 24 years old. After
                    doing 12/7/365 work days at Micron/Deerfield supervising 'clean room' projects. I 
                    am a contractor and a lifetime of residential projects ensue. 2 years after the 2002
                    winter olympics in SLC, Utah the economy is booming and the housing market skyrockets
                    It wont be until 2019 that I go back to school for that Bachelors degree and continue a long 
                    crush with coding. Expecting to graduate in 2022 Web design and development is where my
                    heart lies along with "Art and Design" Vaughn enjoys a variety of hobbies including hiking,
                    mountain biking, drawing, painting, gardening and yes coding. 
                </p>
            </div>
        </div>
        <div class="row">
           <div class="col-sm">
               <h3>Education</h3>
               <p>
                   2019 - Salt Lake Community College, Salt Lake City, Utah USA<br>
                   <em>Cont_ed cert 1 web developer summer 2021.</em><br>
                    Expected cert 1 web designer summer 2021.
                    <br><br>
                   2019 - 2022 University of Utah, Salt Lake City, Utah USA
                   <em>B.A. in Art and Design</em><br>
                    University of Utah 2022.
              </p>
          </div>
          <div class="col-sm">
              <h3>Experience</h3>
              <p>
                 <?php
                     function buildString($skillSets) {
                        $result ="";
                        foreach($skillSets as $skillSet){
                            $result .= $skillSet.", ";
                        }
                        return rtrim($result, ", ");
                    }

                    $result = "";
                    $skills = ["html", "css", "javascript", "php/mysql"];
                    $hobbies = array("Watch movies", "Like to code", "Make videos");

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
              2017 to present VPSHome Salt Lake City, Ut.<br>
              <em>General Contractor</em><br>
              Currently I am a small business owner. I currently bid jobs in salt lake city, Ut.
              Taking on jobs 100,000$ or less on mostly residential projects. Custom kitchen and
              bathroom remodels and some structural concrete as well.
              Responsibilities include:
              <ul>
                 <li>Setting up and maintaining advertisement. Making appointments for bids.</li>
                 <li>Bidding and estimating  future projects, meeting w homeownrers.</li>
                 <li>Schedualing deliveries, sub contractors, state and local permits.</li>
                 <li>Providing quality craftsmanship and warranty.</li>
                 <li>Payroll, insurance and books. Preparing and filing business taxes.</li>
            </ul>
            <br>
            05/2016-2017 Millcreek Tile<br>
            <em>Independent Contractor</em><br>
            <ul>
                <li>Testing ground compaction. Testing drains. Testing shower pans. Testing concrete
                    air levels and cement to sand radios.</li>
                <li>Design and implementations of products to be used onsite.
                    Staying current with tools and products for the company.
                    Setting up accounts with Customers and contractors.</li>
                <li>Designing tile patterns and layouts for tile setters. Supervising the setting of 
                    tile. Keeping track of employee hours. Filling out purchase orders and itemising
                    employee time to work performed ratios.</li>
            </ul> 
        </p>
    </div>
</div>

<div class="row">
    <div class="col-sm">
        <h3>Projects</h3>
        <p>
           Steve Peterson construction (Park City, Pony Express Museum).Lowell construction (Eccles Mansion, Huntsman Mansions).
           H3 Group (Chevron oil refinery).Acme construction (UTA trax and Frontrunner stations).
        </p>
    </div>
    <div class="col-sm">
        <h3>Strongest professional qualities</h3>
        <p>
            Problem solving skills/self starter.
            Knowing my roll on a project/seeing the big picture.
        </p>
    </div>
    <div class="col-sm">
        h3>References</h3>
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


              



        
  
 

