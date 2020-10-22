<?php
  include 'functions.php';
  $connect = dbconnect();
  if(!isset($_SESSION['id'])){
    header("location: login.php"); 
  }

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
    <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css"> 


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
        <a class="navbar-brand text-uppercase" href="userprofile1.php">MOBILE LAB</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="userprofile1.php#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="userprofile1.php#section-features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="userprofile1.php#section-reviews">Reviews</a></li>
            <li class="nav-item"><a class="nav-link" href="userprofile1.php#section-fixes">Quick Fixes</a></li>
            <li class="nav-item"><a class="nav-link" href="userprofile1.php#section-team">Team</a></li>
            <li class="nav-item"><a class="nav-link" href="userprofile1.php#contactus">Contact Us</a></li>
            <li class="nav-item">
                <div class="dropdown" >
                    <button type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown" style="color:black;font-weight:bold;">
                      Services
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="repair.php#section-repair">Repair</a>
                    <a class="dropdown-item" href="resell.php#section-resell">Re-sell</a>
                    
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown" >
                    <button type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown" style="color:black;font-weight:bold;">
                    <?php echo $_SESSION['name']; ?>
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="btn dropdown-item" href="logout.php" role="button">Logout</a>
                    </div>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    
    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">    
    <div class="container">
    <div class="row align-items-center ">
          <div class="col-md-6">
            <h2 class=" mb-2" style="color:white;">WellCome To </h2> <h1 class=""> MOBILE LAB! </h1>
            <div class="sub-heading">
              <p class="mb-4"> We Welcome You to in Mobile Lab Mr: <?php if(isset($_SESSION['first'])) echo $_SESSION['first']; ?> </p>
              
            </div>
          </div>
          </div>
    </section>
    
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
    <div class="container">
    
<div class="row">
<div class="col-md-4 offset-md-4 text-xs-center">
            <img src="profile.png" width="150px" class="m-x-auto img-fluid img-circle" alt="avatar">
            <h6 class="mt-3"> <?php if(isset($_SESSION['first'])) echo $_SESSION['first']; ?> </h6>
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>

            </ul>
            <div class="tab-content p-b-3">
                <div class="tab-pane active" id="profile">
                    <h4 class="mt-2">User Profile</h4>
                    <div class="row">
                        <div class="mt-4 col-md-6">
                            <h4>About</h4><hr>
                            <p> User Name: &nbsp;
                            <?php if(isset($_SESSION['first'])) echo $_SESSION['name'];  ?>
                            </p>
                            <p> Email: &nbsp;
                            <?php if(isset($_SESSION['first'])) echo $_SESSION['email']; ?>
                            </p>
                        </div>
                        
                        <div class="mt-4 col-md-12">
                            <h4 class="mt-4"><i class="fa fa-clock  "></i> Recent Orders</h4>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                    </div>  
</div>
<hr>

    </section>
    <!-- END section -->
    
    
    <footer class="pb_footer " role="contentinfo">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; 2019. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

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
  
  <script>
    function dd1select(){
      var d = document.getElementById("ddselect");
      var displaytext = d.options[d.selectedIndex].text;
      document.getElementById("compval").value=displaytext;
    };

    function dd2select(){
      var d = document.getElementById("ddpselect");
      var displaytext = d.options[d.selectedIndex].text;
      var displayvalue = d.options[d.selectedIndex].value;
      document.getElementById("probval").value=displaytext;
      document.getElementById("probamo").value=displayvalue;
    };
   
    
    $(document).ready(function(){
      $('.btn-type').click(function(){
          $('.btn-type').removeClass('active');
          $(this).addClass('active');
      });

      $('#repair_btn').click(function(){
      let btntype;
      $(".btn-type").each(function(index, element){
        if($(element).hasClass('active')){
          btntype = $(this).attr('data-id');
        }
      });
      
      const name = $('#name').val();
      const contact = $('#contact').val();
      const compval = $('#compval').val();
      const modelno = $('#modelno').val();
      const probval = $('#probval').val();
      const address = $('#address').val();
      const probamo = $('#probamo').val();

      // console.log(amount);

    });
    
  
  });
    
   
  </script>