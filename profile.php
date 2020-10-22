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
            <li class="nav-item"><a class="nav-link" href="livechat/livechat.php#section-chat">Live Chat
            
          </a>
          </li><span class='count'> </span>
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
                    
                    <a class="dropdown-item" href="">Profile</a>
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

    <section class="pb_section bg-light pb_slant-white" id="section-profile">
    <div class="container-fluid">

            <div class="row">
            <div class="col-md-4 ml-5 text-xs-center">
            <img src="pic/profile.png" width="150px" class="m-x-auto img-fluid img-circle" alt="avatar">
            <h6 class="mt-3"> <?php if(isset($_SESSION['first'])) echo $_SESSION['first']; ?> </h6>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-8 ">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active ml-5">Profile</a>
                </li>
            </ul>
            </div>
            </div>

            <div class="tab-content p-b-3">
                <div class="tab-pane active" id="profile">
                    <h4 class="mt-2 ml-5 mt-3">User Profile</h4>
                    <div class="row">
                        <div class="mt-4 col-md-6">
                            <h4 class=" ml-5">About</h4><hr>
                            <p class="ml-5"> User Name: &nbsp;
                            <?php if(isset($_SESSION['first'])) echo $_SESSION['name'];  ?>
                            </p>
                            <p class="ml-5"> Email: &nbsp;
                            <?php if(isset($_SESSION['first'])) echo $_SESSION['email']; ?>
                            </p>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="container-fluid">
                        <div class="row">

                        <div class="mt-4 col-md-12" >

                            <h4 class="mt-4 ml-5"><i class="fa fa-clock"></i> Your Repair Orders</h4>

                            <table class="table table-dark table-hover table-striped mt-4 " id="profile_repair_table">
                                <thead>
                                  <tr>
                                    <th> ID </th>
                                    <th> Item </th>
                                    <th> Name </th>
                                    <th> Phone-Number </th>
                                    <th> Company </th>
                                    <th> Model No </th>
                                    <th> Problem </th>
                                    <th> Address </th>
                                    <th>Status</th>
                                    <th> Amount </th>
                                    <th> Chat </th>
                                  </tr>

                                </thead>
                                <tbody>
                                <?php
                                    $id = $_SESSION['id'];
                                    $sql = "select * from repair_order Where $id = signup_id";
                                    $select = mysqli_query($connect,$sql);
                                    $result = mysqli_num_rows($select);
                                    if($result > 0){
                                        while($row = mysqli_fetch_assoc($select)){
                                            echo " <tr><td style=color:white;>" .$row['order_repairid']. "</td>
                                            <td style=color:white;>" .$row['item']. "</td>
                                            <td style=color:white;>" . $row['name'] . "</td>
                                            <td style=color:white;>" . $row['phonenumber'] . "</td>
                                            <td style=color:white;>" . $row['company'] . "</td>
                                            <td style=color:white;>" . $row['modelno'] . "</td>
                                            <td style=color:white;>" . $row['problem'] . "</td>
                                            <td style=color:white;>" . $row['address'] . "</td>
                                            <td style=color:white;>" . $row['status'] . "</td>                                            
                                            <td style=color:white;>" . $row['amount'] . "</td>
                                            <td> <a href='livechat/livechat.php' class='btn btn-success btn-xs' name='' id=''> Start Chat </a> </td>

                                            </tr>";
                                        }
                                    }
                                    else{

                                      $msg = "No Orders";
                                      echo "<div class='text-primary pt-3'> ".$msg." </div>";

                                    }


                                    ?>
                            </tbody>
                            </table>
                           </div>
                    <!--/row-->
                    </div>

</div>

                        <div class="container-fluid">
                        <div class="row">

                        <div class="mt-4 col-md-12" >

                            <h4 class="mt-4 ml-5"><i class="fa fa-clock"></i> Your Re-Sell Orders</h4>

                            <table class="table table-dark table-hover table-striped mt-4" id="profiletable">
                                <thead>
                                  <tr>
                                    <th> ID </th>
                                    <th> Item </th>
                                    <th> Name </th>
                                    <th> Phone-Number </th>
                                    <th> Company </th>
                                    <th> Model No </th>
                                    <th> Problem </th>
                                    <th> Address </th>
                                    <th>Status</th>
                                    <th> Your Demand </th>
                                    <th> Chat </th>
                                  </tr>

                                </thead>
                                <tbody>
                                <?php
                                    $id = $_SESSION['id'];
                                    $sql = "select * from resell_order Where $id = signup_id";
                                    $select = mysqli_query($connect,$sql);
                                    $result = mysqli_num_rows($select);
                                    if($result > 0){
                                        while($row = mysqli_fetch_assoc($select)){
                                            echo " <tr><td style=color:white;>" .$row['resell_id']. "</td>
                                            <td style=color:white;>" .$row['item']. "</td>
                                            <td style=color:white;>" . $row['name'] . "</td>
                                            <td style=color:white;>" . $row['phone_number'] . "</td>
                                            <td style=color:white;>" . $row['company_name'] . "</td>
                                            <td style=color:white;>" . $row['model_no'] . "</td>
                                            <td style=color:white;>" . $row['problem'] . "</td>
                                            <td style=color:white;>" . $row['address'] . "</td>
                                            <td style=color:white;>" . $row['status'] . "</td>
                                            <td style=color:white;>" . $row['expect_amount'] . "</td>
                                            <td> <a href='livechat/livechat.php' class='btn btn-success btn-xs' name='' id=''> Start Chat </a> </td>

                                            </tr>";
                                        }
                                    }
                                    else{

                                      $msg = "No Orders";
                                      echo "<div class='text-primary pt-3'> ".$msg." </div>";

                                    }


                                    ?>
                                    </tbody>
                            </table>
                           </div>
                    <!--/row-->
                    </div>

</div>
<hr>

    </section>
    <!-- END section -->

    <!-- END section -->

    <section class="pb_section  pb_slant-white " id="section-feedback" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2 class=" text-center"> Feed Back </h2>
            <h5 class=" text-center"> It Helps Us To Improve Our Services </h5>
          </div>
        </div>
      </div>
      <div class="container contact-form" id="feedback">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="" id="feedbackform">
                <h3 class="text-light">Drop Us a Feedback</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control pb_height-50" id="fullname"  value=" <?php if(isset($_SESSION['first'])) echo $_SESSION['first']; ?>" />
                        </div>
                        <div class="form-group mt-4">
                            <input type="email" name="txtEmail" class="form-control pb_height-50" id="email"  value=" <?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" />
                        </div>
                        <div class="form-group">
                          <button type="button" name="btnSubmit" class="btnContact" id="btn_feedback_user" value=""> Send </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="" class="form-control feedback1" id="feedback1" placeholder="Your Feedback *" rows="6"></textarea>
                            <div class="invalid-feedback "> Please type Some Feedback</div>
                        </div>
                    </div>
                </div>
            </form>
</div>
    </section>
    <section class=" pb_pb-40 " >

  </section>

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
    <script src='app.js'></script>


    <script>
$(document).ready(function(){
  $('#btn_feedback_user').click(function(){
    const name     = $("#fullname").val();
    const email    = $("#email").val();
    const feedback = $("#feedback1").val();

    if(feedback.length == ""){
      $('.feedback1').addClass('is-invalid');
    }
    else{
      $('.feedback1').removeClass('is-invalid');
    }

    if(feedback.length != "" && name.length != "" && email.length !=""){
      $.ajax({
				type:"POST",
				url :"feedback.php",
				data:{"name":name,
					 "email":email,
					"feedback":feedback},
				dataType: 'json',
				success : function(feedback){
						if(feedback.status === "success"){
              alert("Your Feedback has been sent. Thank you For sending This");
              $('#feedbackform').trigger('reset');
						}
						else if(feedback.status === "error"){
							alert("Your msg has not been sent");
            }
          }
      });
    }
  });
  
    if ($("#profiletable > tbody > tr").length == null || $("#profiletable > tbody > tr").length == 0){
      $("#profiletable").hide();
    }else{
      $("#profiletable").show();
    }

    if ($("#profile_repair_table > tbody > tr").length == null || $("#profile_repair_table > tbody > tr").length == 0){
      $("#profile_repair_table").hide();
    }else{
      $("#profile_repair_table").show();
    }
});


</script>

	</body>
</html>




