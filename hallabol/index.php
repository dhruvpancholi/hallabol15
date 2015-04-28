<?php
session_start();
require_once('navigation.php');
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- Header Carousel -->
    <header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active"> <img src="img/slide1.jpg" style="width:100%" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Get Your Game On</h1>
          <p>Register to enter the Battlefield</p>
          <p><a class="btn btn-lg btn-primary" href="./signup.php" role="button">Sign up now!</a></p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="img/slide2.jpg" style="width:100%" data-src="" alt="Second    slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Predict and Win</h1>
          <p>Go Big or Go Home</p>
          <p><a class="btn btn-lg btn-primary" href="./predictor.php" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item"> <img src="img/slide3.jpg" style="width:100%" data-src="" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>HallaBol is for everyone</h1>
          <p>Come out and Play</p>
          <p><a class="btn btn-lg btn-primary" href="./games.php" role="button">Browse games</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        
<!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">Hallabol'15</h1>
            </div>

            <div class="col-md-8">
                <iframe src="https://player.vimeo.com/video/122317190" width="750" height="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="fb-like-box" data-href="https://www.facebook.com/iitgn.hallabol" data-width="350" data-height="500" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
            </div>
        </div>

        <hr>
    </div>
<?php
    require_once 'footer.php';
?>
