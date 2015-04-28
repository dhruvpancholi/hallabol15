<?php
session_start();
require_once('keyset.php');

$error = FALSE;
if(isset($_GET['email'])
  && isset($_GET['code'])){
  $email = $_GET['email'];
  $hashcode = md5("hallabol15".$email."dhruvpancholi");
  if($_GET['code']==$hashcode){
    $query = "UPDATE  `user` SET  `confirm` =  '$hashcode' WHERE  `email` =  '$email'";
    $result = mysql_query($query);
    if(!$result){
      if($debug) die("Database access failed: ".mysql_error());
      else die();
    }else{
      $result = run_query("INSERT INTO `standings` (`email`, `score`) VALUES ('$email', '10000')");
      header('Location: ./login.php');
    }
  } else{
    $error = TRUE;
  }
}
else{
  $error = FALSE;
}

require_once('navigation.php');
?>
<div class="container" ng-app="insertEvents" ng-controller="insertEventsController">
  <div class="row">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-3">                    
      <div class="panel panel-info" >

        <div class="panel-heading">
          <div class="panel-title">Email Confirmation</div>
          <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
        </div>
        
        <div style="padding-top:30px" class="panel-body" >
        <div class="alert alert-success alert-dismissable" id="error_message">
         <button type="button" class="close" data-dismiss="alert" 
            aria-hidden="true">
            &times;
         </button>
         <span id="error_msg">Please Check your mail for confirmation code.</span>
      </div>
        <?php
          if ($error) {
            echo '<div style="color:red;" id="login-alert" class="alert alert-danger col-sm-12" >
                <p>Invalid Email or confirmation code!</p>
            </div>';                     
          } 
        ?>

        <form class="form-inline" method="get" action="./confirm.php">
          <input type="text" class="form-control" placeholder="Email" id="email" name="email">
          <input type="text" class="form-control" placeholder="Confirmation Code" id="code" name="code">
          <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
<?php
require_once('footer.php');
?>
