<?php
if(isset($_SESSION['email'])){
    $logedin = TRUE;
    $email = $_SESSION['email'];
    $firstname = $_SESSION['firstname'];
} else {
    $logedin = FALSE;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Hallabol IIT Gandhinagar Intra-College Sports Festival">
    <meta name="keywords" content="Hallabol 15, IITGN, IIT Gandhinagar, Intra-College, Sports, Festival">
    <meta name="author" content="Dhruv Pancholi">


    <title>Hallabol'15</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/round-about.css" rel="stylesheet">
    
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src= "./js/angular.min.js"></script>
    <script src= "./js/jquery-1.11.2.min.js"></script>
    <script src= "./js/typeahead.min.js"></script>
    <script src= "./js/bootstrap.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Hallabol'15</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="fixtures.php">Fixtures</a>
                    </li>
                    <li>
                        <a href="games.php">Games</a>
                    </li>
                    <li>
                        <a href="teams.php">Teams</a>
                    </li>
                    <li>
                        <a href="predictor.php">Predictor</a>
                    </li>
                </ul>
                <?php
                if($logedin){
echo <<<_END
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">$firstname <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
                </ul>
_END;

                } else{
echo <<<_END
                <ul class="navbar-form navbar-right">
                    <a id="btn-login" href="./login.php" class="btn btn-success">Login</a>
                    <a id="btn-login" href="./signup.php" class="btn btn-primary">Signup</a>
                </ul>


_END;
                }
               
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
