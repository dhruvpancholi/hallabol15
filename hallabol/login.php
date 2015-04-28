<?php
require_once('keyset.php');

if(isset($_POST['email']) && isset($_POST['password'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM user WHERE email='$email'";
  $result = run_query($query);

  $row = mysql_fetch_row($result);
  $password = md5($password);

  if($password==$row[3]){
      if(strlen($row[7])!=32) header('Location: ./confirm.php');
      else{
         session_start();
         $_SESSION['email'] = $row[0];
         $_SESSION['firstname'] = $row[1];
         $_SESSION['lastname'] = $row[2];
         $_SESSION['gender'] = $row[4];
         $_SESSION['degree'] = $row[5];
         $_SESSION['contact'] = $row[6];
         header('Location: ./');
         die();
     }
  }
}

require_once('navigation.php');
  require_once('./keyset.php');
  $sessionid = session_id();
  $addr = $_SERVER['REMOTE_ADDR'];
  $script = $_SERVER['SCRIPT_NAME'];
  $query = "INSERT INTO `visitors` (`visited_at`, `session_id`, `address`, `script`) 
  VALUES (CURRENT_TIMESTAMP, '$sessionid', '$addr', '$script')";
  run_query($query);
?>
<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-3">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onclick="alert('Please contact admin!');">Forgot password?</a></div>
            </div>
            <?php
            if (isset($_POST['email'])) {
              echo '<div id="login-alert" class="alert alert-danger col-sm-12" >
              <p>Invalid Username or password!</p>
          </div>';                     
      } 
      ?>
      <div style="padding-top:30px" class="panel-body" >

        <form id="loginform" class="form-horizontal" role="form" method="post" action="./login.php">

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="text" class="form-control" name="email" value="" placeholder="email">                                        
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="password">
            </div>



            <div class="input-group">
              <div class="checkbox">
                <label>
                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
              </label>
              </div>
            </div>


      <div style="margin-top:10px" class="form-group">
        <!-- Button -->

        <div class="col-sm-12 controls">
          <button type="submit" id="btn-login" class="btn btn-success">Login  </a>
          </div>
      </div>


      <div class="form-group">
        <div class="col-md-12 control">
            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                Don't have an account! 
                <a href="./signup.php">
                    Sign Up Here
                </a>
            </div>
        </div>
    </div>    
</form>
</div>                     
</div>  
</div>
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>