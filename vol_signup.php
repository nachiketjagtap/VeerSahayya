<?php
include "partials/vol_signup_action.php";
include "partials/db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Registeration Page</title>
  

</head>
<body>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php require 'partials/_nav.php'?>
<?php
if($showalert){
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>SuccesS...!!</strong> You have suucssfully created account as a Volunteer in VeerSahayya Portal.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>

<div class="container my-4">
        <h1 class = "text-center"> Signup As a Volunteer to Our VeerSahayya Portal</h1>
        <form action ="partials/vol_signup_action.php" method="POST">
  <div class="form-row my-4">
    <div class="form-group col-md-6 mx-4">
      <label for="fullName">Full Name</label>
      <input type="text" class="form-control" id="fullName" name="fullName" placeholder="FirstName MiddleName LastName">
    </div>
    <div class="form-group col-md-4 mx-4">
      <label for="gender">Gender</label>
      <select id="gender" name ="gender" class="form-control">
        <option selected>Male</option>
        <option>Female</option>
        <option>Transgender</option>
        <option>Rather not to say</option>
      </select>
    </div>
    
    <div class="form-group col-md-6 mx-4">
      <label for="mail_ID">Email</label>
      <input type="email" name ="mail_ID" class="form-control" id="mail_ID" placeholder="Email">
    </div>
    <div class="form-group col-md-4 mx-4">
    <label for="phoneNum">Phone Number</label>
    <div class="input-group-prepend">
    <div class="input-group-text">+91</div>
    <input type="text" name = "phoneNum" class="form-control" id="phoneNum" placeholder="PhoneNum">
</div>

  </div>
  <div class="form-group col-md-3 mx-4">
    <label for="fullAddress">Address</label>
    <input type="text" name = "fullAddress" class="form-control" id="fullAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-group col-md-2 mx-4">
      <label for="city">City</label>
      <input type="text" name = "city" class="form-control" id="city">
   
</div>
    <div class="form-group col-md-2 mx-4">
      <label for="state">State</label>
      <select id="state" name ="state" class="form-control">
        <option selected>State</option>
        <option>Maharashtra</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>

</select>
    </div>
    <div class="form-group col-md-2 mx-4">
      <label for="zip">Zip</label>
      <input type="text" name = "zip" class="form-control" id="zip">
    </div>
  </div>
<div class="form-row">
<div class="form-group col-md-4 mx-4">
<label for="workDomain">Work Domain</label>
      <select id="workDomain" name ="workDomain" class="form-control">
        <option selected>Select Domain</option>
        <option value="Sport">Sport</option>
        <option value="Culture">Culture</option>
        <option value="Health Care">Health Care</option>
        <option value="Education">Education</option>
        <option value="Social Service">Social Service</option>
        <option value="Charity">Charity</option>
        <option value = "Others">Others</option>
</select>
</div>
<div class="form-group col-md-4 mx-4">
      <label for="timeAvail">Time Availibilty for Volunteering work</label>
      <input type="text" name = "timeAvail" class="form-control" id="timeAvail">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-3 mx-4">
      <label for="userName">UserName</label>
      <div class="input-group-prepend">
      <div class="input-group-text">@</div>
 
      <input type="text" name = "userName" class="form-control" id="userName">
    </div>
    </div>
    <div class="form-group col-md-4 mx-4">
    <label for="password">Password</label>
<input type="password" id="password" name = "passWord" class="form-control" aria-describedby="passwordHelpBlock">
<small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</small>
    </div>
  </div>
  
<div class="form-group mx-4">
    <label for="about">Tell us about your volunteer work Experience</label>
    <textarea class="form-control" name = "about" id="about" rows="3"></textarea>
  </div>
  <div class="form-row mx-4">
    
  <button type="submit" name ="submit" class="btn btn-primary">Sign Up</button>
  </div>
</form>
    
    
</body>
</html>