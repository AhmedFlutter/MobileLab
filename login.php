<?php
	include 'functions.php';
       if(isset($_SESSION['created'])){
    echo "<script>alert('" . $_SESSION['created'] . "')</script>";
        }  
		unset($_SESSION['created']);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Mobile Lab</title>
		<meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
		<meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">


    <!-- <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css"> -->


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/landing-2.css">

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.1-web/css/all.css">
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand text-uppercase" href="index.php#section-home">MOBILE LAB</a>
    
      </div>
    </nav>
    <!-- END nav -->
    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_slant-light pb_gradient_v1 " id="section-home">

      <div class="container" >
      
      <div class="row align-items-center justify-content-center">
           <div class="col-md-6" >
            <h2 class="heading ">Provide Best Service In Town !</h2>
            <div class="sub-heading">
              <p class="">Join over 1M+ people who uses Instant App</p>
            </div>
        </div>
          <div class="col-md-5 relative align-self-center">

            <form action="#" class="bg-white rounded pb_form_v1">
                <h2 class="mb-4 mt-0 text-center">Login</h2>
                <div class="form-group">
                
                    <input type="text" class="form-control pb_height-50 reverse user " id="user" placeholder="Username or Email">
                    <div class="invalid-feedback"> UserName or Email Is required </div>
                </div>
                <div class="form-group">
                
                    <input type="password" class="form-control pb_height-50 reverse pass" id="userpass" placeholder="Password">
                    <div class="invalid-feedback"> Password Is required </div>
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" id="login" value="login">
                </div>
                <a href="index.php#section-home"> <p style="color:#007bff;">  New user? Create Your Account &rarr; </p> </a>
            </form>
            </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>



    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>

    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="app.js"></script>

	</body>
</html>
