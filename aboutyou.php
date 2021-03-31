<!DOCTYPE html>
<html>

<head>
  <title>About You</title>
  <?php readfile('header.html'); ?>
</head>

<body>
  <?php readfile('nav.html'); ?>
  <div class="parralax-aboutyou">
    <div class="container">
      <div class="alert alert-danger alert-dismissable fade show d-none">
        <button type="button" class="close" onclick="closeAlert();">&times;</button>
        <strong>Stop!</strong> Please fill out all of the fields correctly.
</div>
<div class="row">
  <div class="col">
    <h2 style="text-align: center;">Tell us a lil bit about you.
</div>
</div>
<div class="row">
  <div class="col">
    <form name="aboutYouForm" method="post" onsubmit="event.preventDefault(); validateAbout();">
    <div class="form-group">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" id="fname" ariaDescribedBy="firstName" placeholder="Enter First Name">
</div>
<div class="form-group">
  <label for="lname">Last Name</label>
  <input type="text" class="form-control" id="lname" aria-describedBy="lastName" placeholder="Enter Your Last Name">
</div>
<div class="form-group">
  <label for="txtHobbies">Hobbies</label>
  <textArea class="form-control" id="txtHobbies" aria-describedBy="txtHobbies" placeholder="Enter Your Favorite Hobby">
</div>
<div class="form-group">
  <label for="txtMovies">Favorite movie or TV show(s)</label>
  <textArea class="form-control" id="txtMovies" ariaDescribedBy="txtMovies" placeholder="Enter Your Favorite Movie">
</div>
<div class="form-group">
  <label for="txtFood">Favorite Food(s)</label>
  <text area class="form-control" id="txtFood" aria-describedBy="txtFood" placeholder="Enter Favorite Food">
</div>
<div class="form-group">
<label for="listDay">Favorite Day Of The Week</label>
<select class="form-control" id="listDay">
  <option value="monday">Monday</option>
  <option value="tuesday">Tuesday</option>
  <option value="wednsday">Wednesday</option>
  <option value="thursday">Thursday</option>
  <option value="friday">Friday</option>
  <option value="saturday">Saturday</option>
  <option value="sunday">Sunday</option>
</select>
</div>
<div class="form-group">
  <label id="sportsLabel" for="radioSports">Like TV Sports?</label><br>
  <input type="radio" name="sports" value="professional">professional
  <input type="radio" name="sports" value="college">College
  <input type="radio" name="sports" value="both">Both
  <input type="radio" name="sports" value="none">None
  <input type="radio" name="sports" value="other">Other</div>
</div>
<label id="checkboxGames" for="checkGames">Gamer? (check all platforms that apply to you)</label><br>
<div class="form-check" id="checkgames">
  <input type="checkbox" class="form-check-input" name="games" value="pc">PC<br>
  <input type="checkbox" class="form-check-input" name="games" value="ps4">Playstation<br>
  <input type="checkbox" class="form-check-input" name="games" value="xbox">Xbox</br>
  <input type="checkbox" class="form-check-input" name="games" value="nintendo">Nintendo</br>
  <input type="checkbox" class="form-control-input" name="games" value="classics">Classics
(Atari, PS1, etc.)<br>
<input type="checkbox" class="form-check-input" name="games" value="phone">Smartphone<br>
<input type="checkbox" class="form-check-input" name="games" value="boardgames">Non-digital
(Checkers, Chess, Go, etc.)<br>
<input type="checkbox" class="form-check-input" name="games" value="book">A good book is
all I need<br>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
<?php readfile('footer.html'); ?>
</body>

</html>



