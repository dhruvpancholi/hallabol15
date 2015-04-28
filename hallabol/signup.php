<?php
session_start();
require_once('navigation.php');
?>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" class="simple-form" name="form" method="post" action="signup_back.php" onsubmit="return validate(this)">
          <h2>Please Sign Up <small>It's free and always will be.</small></h2>
          <hr class="colorgraph">
          <?php
            if (isset($_SESSION['signup_error'])) {
              echo '<div id="login-alert" class="alert alert-danger col-sm-12" >
                  <p>'.$_SESSION['signup_error'].'</p>
              </div>';                     
            } 
          ?>
          <div class="form-group">
            <input type="email" name="email" id="email"  class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
          </div>
          
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="firstname" id="firstname" style="text-transform:capitalize" style="text-transform:capitalize"class="form-control input-lg" placeholder="First Name" tabindex="1" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="lastname" id="lastname" style="text-transform:capitalize" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <input type="number" name="contact" id="contact" min="6000000000" max="9999999999" length=10 class="form-control input-lg" placeholder="10 Digit Mobile Number" tabindex="3" required>
          </div>

          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
              </div>
            </div>
          </div>

          <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="gender">I am</label>
            <br>
            <div class="btn-group" data-toggle="buttons" data-effect="fall">
              <label class="btn btn-primary active">
                <input type="radio" name="gender" value="M" checked> Male
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="gender" value="F"> Female
              </label>
              <label class="btn btn-primary">
                <input type="radio" name="gender" value="O"> Other
              </label>
            </div>
          </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <label for="degree">Degree</label>
                <select class="form-control" name="degree" id="degree">
                  <option value="B">B.Tech</option>
                  <option value="M">M.Tech</option>
                  <option value="P">PhD</option>
                  <option value="S">M.Sc</option>
                  <option value="A">MASC</option>
                  <option value="D">PGDIIT</option>
                  <option value="O">Other</option>
                </select>
              </div>
            </div>
          </div>

         <hr class="colorgraph">
         <div class="row">
          <div class="col-xs-6 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
          <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
function validate(form){
  fail="";
  fail+=validateEmail(form.email.value);
  fail+=validateFirstName(form.firstname.value);
  fail+=validateLastName(form.lastname.value);
  fail+=validateContact(form.contact.value);
  fail+=validatePassword(form.password.value);
  fail+=validatePasswordConfirmation(form.password_confirmation.value);
  if(fail=="") return true;
  else alert(fail);return false;
}
function validateEmail(val){
  if (val=="") {return "No Email was entered.\n";}
  else if(!/^[a-zA-Z0-9._]+@iitgn.ac.in$/.test(val)) {return "Please enter a valid iitgn email id.\n";} 
  else return "";
}
function validateFirstName(val){
  if (val=="") {return "No First Name entered.\n";}
  if (val.length<=3 && val.length>=20) {return "First name should be between 3 and 20 characters.\n";}
  if (!val.match(/^[A-Za-z]+$/)) {return "First name should only contain alphabets.\n";}
  else return "";
}
function validateLastName(val){
  if (val=="") {return "No Last Name entered.\n";}
  if (val.length<=3 && val.length>=20) {return "Last name should be between 3 and 20 characters.\n";}
  if (!val.match(/^[A-Za-z]+$/)) {return "Last name should only contain alphabets.\n";}
  else return "";
}
function validateContact(val){
  if (val.length!=10 || isNaN(val)) {return "Please enter a valid mobile number.\n";}
  else return "";
}
function validatePassword(val){
  if (val=="") {return "No Password was entered.\n";}
  else if(val.length < 6){return "Password must be atleast 6 characters.\n";}
  else if(val.length > 20) {return "Maximum number of characters in password is 20.";}
  else return "";
}
function validatePasswordConfirmation(val){
  if (val=="") {return "No Confirmation Password was entered.\n";}
  else if(val!=document.getElementById('password_confirmation').value){return "Passwords are not matching.\n";}
  else return "";
}

</script>
<style>
footer{border-top:1px solid #ddd;padding:30px;margin-top:50px}.container{max-width:90%}.btn-group{margin-bottom:10px}.form-inline input[type=password],.form-inline input[type=text],.form-inline select{width:180px}.input-group{margin-bottom:10px}.pagination{margin-top:0}
</style>
</body>
</html>
