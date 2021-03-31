<!DOCTYPE html>
<html>

<head>
    <title>Contact Me</title>
    <?php readfile('header.html'); ?>
</head>

<body>
    <?php readfile('nav.html'); ?>
    <div class="parallax-contact">
        <div class="container" style="margin-top:56px">
            <div class="alert alert-danger alert dismissable fade show d-none">
                 <button type="button" class="close" onclick="closeAlert();">&times;</button>
                 <strong>Stop!</strong> Please complete all information.
             </div>
             <div class="row">
                <div class="col">
                    <form name="contactForm" method="post" onsubmit="event.preventDefault(); validateContact();">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" aria-describedBy="date">
                </div>
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" aria-describedBy="firstName" placeholder="Enter First Name Here">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" aria-describedBy="lastName" placeholder="Enter Last Name Here">
                </div> 
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" aria-describedBy="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="phone">>Phone Number</label>
                    <input type="text" class="form-control" id="phone" aria-describedBy="phone" placeholder="(xxx-xxx-xxxx)">
                </div>
                <div class="form-group">
                   <label for="company">Company (if applicable)</label>
                    <input type="text" class="form-control" id="company" aria-describedBy="company" placeholder="Company">
                </div>
                <div class="form-group">
                    <label for="listReason">Reason for contact</label>
                     <select class="form-control" id="listDay">
                        <option value="1">I am a recruiter</option>
                        <option value="2">Looking for a contract worker</option>
                        <option value="3">General info</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="txtReasonDetail">Please provide a short message detailing your reason for 
                        contact.</label>
                    <textarea class="form-control" id="txtReasonDetail" aria-describedBy="txtReasonDetail"
                        placeholder="Details..."></textarea>
                </div>
                <button type="submit" clas="btn btn-primary">Submit</button>"
              </form>
           </div>
       </div>
    </div>
</div>
<?php readfile('footer.html'); ?>
</body>

</html>

<?php
include "database.php";
$ini_data + parse_ini_file(config.ini");

$date = $fname = $lname = $email = $phone = $company = $contact_reason = $message = "";


    if ($_SERVER['REQUEST-METHOD'] == "POST") {
        $date = $_POST["date"];
        $fname = cleanse_data($_POST["fname"]);
        $lname = cleanse_data($_POST["lname"]);
        $phone = cleanse_data($_POST["phone"]);
        $email = cleanse_data($_POST["email"]);
        $company = cleanse_data($_POST["company"]);
        $contact = cleanse_data($_POST["listReason"]);
        $message = cleanse_data($_POST["txtReasonDetail"]);

        $subject = "New Contact Entry From: ".$fname." ".$lname;
        $body = "<html><body>New Contact Form Entry: <br>Name: ". $fname." ".$lname."<br>Email: ".$email."<br>Phone: ".$phone."<br>Company: ".$company."<br>Reason for Contact: ".$listReason."<br>Message: ".$txtReasonDetail."</body></html>";

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $mailResponse = mail($ini_data["email"], $subject, $body, $headers);
        echo "Mail response: " . $mailResponse;
        contact_form_insert($ini_data["contact_table"], $fname, $lname, $email, $phone, $company, $contact_reason, $message);
  }

  function cleanse_data($data)
  {
      return htmlspecialchars(stripslashes(trim($data)));
  }

  ?>
  

  
  


        
    






    
