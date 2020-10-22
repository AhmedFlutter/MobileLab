<?php
  include 'functions.php';
  if(isset($_SESSION['id'])):
    header("location: userprofile1.php");
  endif;
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

    <link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
     <link  rel="stylesheet" href="assets/css/animate.css" >
     <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">

    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">

    <link rel="stylesheet" href="assets/css/landing-2.css">

    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.1-web/css/all.css">
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand text-uppercase" href="index.php">MOBILE LAB</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-reviews">Reviews</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-fixes">Quick Fixes</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-team">Team</a></li>
            <li class="nav-item"><a class="nav-link" href="#contactus">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php#section-home">Login</a></li>
            <li class="nav-item cta-btn   ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="#section-features" target=""><span class="pb_rounded-4 px-4">Get Started</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->




    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <h2 class="heading mb-3">Provide Best Service In Town !</h2>
            <div class="sub-heading">
              <p class="mb-4">Join over 1M+ people who uses Instant App</p>

            </div>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5 relative align-self-center">

            <form action="#" class="bg-white rounded pb_form_v1">
                <h2 class="text-center">Sign Up for Free</h2>
                <div class="form-group">

                    <input type="text" class="form-control  pb_height-30 reverse fname " id="first" placeholder="Full name">
                    <div class="invalid-feedback"> Full Name Is required </div>
                </div>
                <div class="form-group">

                    <input type="text" class="form-control  pb_height-30 pb_height-35 reverse uname " id="user" placeholder="User name">

                    <div class="invalid-feedback uerror"> User Name Is required </div>
                </div>
                <div class="form-group">

                    <input type="email" class="form-control pb_height-30 reverse email "  id="email"  placeholder="Email">

                    <div class="invalid-feedback emailError"> Email Is required </div>
                </div>
                <div class="form-group">

                    <input type="password" class="form-control pb_height-30 reverse pass " id="pass"  placeholder="Password">

                    <div class="invalid-feedback passerror"> Password Is required </div>
                </div>
                <div class="form-group">

                  <input type="password" class=" form-control pb_height-30  reverse repass " id="retypepass" placeholder="Re-Type Password">

                  <div class="invalid-feedback conpass"> Re-type Your Password </div>
                </div>
                <div class="form-group">
                    <input type="button" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue"  id="signup"  value="Register  &rarr;">
                </div>
                <a href="login.php"> <p style="color:#007bff;"> Already have an Account? Want to login? </p> </a>
            </form>
            </div>
          </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Features</strong></h5>
            <h2>Our Lab Features</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Fast Delivery</h5>
                <p class="text-sans-serif">We Provide Fast Delivery Of Your Goods After Repairing.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Pick And Drop Service</h5>
                <p class="text-sans-serif">We Also Provide a Pick And Drop Service Of Your Damage or Broken Cellphones, Tablets and Other Appliances.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Re-Selling Products</h5>
                <p class="text-sans-serif">We Offers you to Sell Your Un-usable products to us. We Can Buy These In Good Rates.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-color-filter-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Quick Fixes </h5>
                <p class="text-sans-serif">You Also Find a Quick Soultions For Yours Mobile Or Tablets.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-wineglass-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Customer Support </h5>
                <p class="text-sans-serif">We Always Take care Of Our Customers And Always Works According To Their Requirments To Make Them Happy   </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-paperplane-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading"> Use Geniune Parts</h5>
                <p class="text-sans-serif">We always use geniune parts in your device to make sure that your device work well.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->



    <section class="pb_section pb_slant-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5">
            <img src="pic/phone_3.png" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-lg-8 pl-md-5 pl-sm-0">
            <div class="row">
              <div class="col">
                <h2>Re-Selling Features</h2>

              </div>
            </div>
            <div class="row">
              <div class="col-lg">

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Dead Sets</h3>
                    <p class="text-sans-serif pb_font-16" style="text-align:justify;">We Offer You To Sell Your Dead Cellphone or Tablets To US.</p>
                  </div>
                </div>

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15 mt-4 "><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
                  <div class="media-body mt-4">
                    <h3 class="mt-2 mb-2 heading">Damage Sets</h3>
                    <p class="text-sans-serif pb_font-16" style="text-align:justify;">You Always Wellcome To Sell Your Damage CellPhones Which You Donot Want to Repair.</p>
                  </div>
                </div>

              </div>
              <div class="col-lg">

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Un-Repairable Tablets</h3>
                    <p class="text-sans-serif pb_font-16" style="text-align:justify;">We Also Buy Yours Un-Repairable or Fully Broken Tablets Which are Useless For you</p>
                  </div>
                </div>

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-color-filter-outline  pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Old Tablets/Cell-Phones</h3>
                    <p class="text-sans-serif pb_font-16" style="text-align:justify;">You Can Also Sell Your Old Phones & Tablets In Good Prices To Us.</p>
                  </div>
                </div>

              </div>
            </div>
            <div class="d-flex justify-content-end pt-4">

            <p class="text-primary"> Wanna Sell Some Item?  <a href="#section-home" type="button" class="btn btn-primary ml-3"> Lets! Signup </a> </p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-2">
            <img src="pic/pic1.png" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-lg-8 pr-md-5 pr-sm-0 order-1  mb-5">
            <div class="row">
              <div class="col">
                <h2>Repair Features</h2>
                  <p class="pb_font-20" style="text-align:justify;">We always use geniune parts in your device to make sure that your device work well.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Use Geniune Parts</h3>
                    <p class="text-sans-serif pb_font-16" style="text-align:justify;">We always use geniune parts in your device to make sure that your device work well.</p>
                  </div>
                </div>

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Professionals</h3>
                    <p class="text-sans-serif pb_font-16" style="text-align:justify;">We Have a Team Of Complete Qualified people For Your's Repairable Items.</p>
                  </div>
                </div>

              </div>
              <div class="col-lg">

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Time Saving</h3>
                    <p class="text-sans-serif pb_font-16" style="text-align:justify;">We always Try To Save Your Time And Try To Repair Your Item As Soon As Possible.</p>
                  </div>
                </div>

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-color-filter-outline  pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Receive And Drop Facility</h3>
                    <p class="text-sans-serif pb_font-16" style="text-align:justify;">We Also Providing Item Receive And Drop Facility For Our Customers Before And After from Your Doorsteps.</p>
                  </div>
                </div>

              </div>
            </div>
            <div class="d-flex justify-content-start pt-4">

                <p class="text-primary"> Wanna Repair Some Item?  <a href="#section-home" type="button" class="btn btn-primary ml-3"> Lets! Signup </a> </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pb_section pb_slant-white pb_pb-220" id="section-reviews">
    <div class="container">
        <div class="row justify-content-center mb-1">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Reviews</strong></h5>
            <h2>Good Review From Good People</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="pb_slide_testimonial_sync_v1">
              <div class="pb_slider_content js-pb_slider_content2">
                <div>
                                <?php
                  $connect = dbconnect();

                  $sql = "select * from feedback where feedback_id = 1";
                  $select = mysqli_query($connect,$sql);
                  $result = mysqli_num_rows($select);
                  $row = mysqli_fetch_assoc($select);

                  echo '<div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="pt-4"> '.$row["feedback"] .'.</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading"> '.$row["name"] .'</h3>
                      <span class="subheading">  @'.$row["name"] .'</span>
                    </div>
                  </div>
                </div>
                <div>';

                $sql = "select * from feedback where feedback_id = 11";
                  $select = mysqli_query($connect,$sql);
                  $result = mysqli_num_rows($select);
                  $row1 = mysqli_fetch_assoc($select);

                  echo' <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="pt-4">'.$row1["feedback"] .'.</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading"> '.$row1["name"] .'</h3>
                      <span class="subheading">@ '.$row1["name"] .'</span>
                    </div>
                  </div>
                </div>
                <div>';
                $sql = "select * from feedback where feedback_id= 1";
                  $select = mysqli_query($connect,$sql);
                  $result = mysqli_num_rows($select);
                  $row2 = mysqli_fetch_assoc($select);

                  echo '<div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="pt-4"> '.$row2["feedback"] .'.</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading"> '.$row2["name"] .'</h3>
                      <span class="subheading">  @'.$row2["name"] .'</span>
                    </div>
                  </div>
                </div>
                <div>';
                $sql = "select * from feedback where feedback_id= 11";
                  $select = mysqli_query($connect,$sql);
                  $result = mysqli_num_rows($select);
                  $row3 = mysqli_fetch_assoc($select);

                 echo '<div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="pt-4">'.$row3["feedback"] .' .</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading"> '.$row3["name"] .'</h3>
                      <span class="subheading">@ '.$row3["name"] .'</span>
                    </div>
                  </div>
                </div>
              </div>';

              ?>

              <div class="row">
                <div class="col-md-6 mx-auto">
                  <div class="pb_slider_nav js-pb_slider_nav2">
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="assets/images/person_1.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="assets/images/person_5.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="assets/images/person_2.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="assets/images/person_6.jpg" alt="Generic placeholder image">
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- END sync_v1 -->
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->




    <!-- END section -->



    <section class="pb_section bg-light pb_slant-white mb-5 "  id="section-fixes">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Fixes</strong></h5>
            <h2>QUICK FIXES</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div id="pb_faq" class="pb_accordion" data-children=".item">
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="true" aria-controls="pb_faq1" class="pb_font-22 py-4">Slow Phone?</a>
                <div id="pb_faq1" class="collapse show" role="tabpanel">
                  <div class="py-3">
                  <p>Clean your cell phone and close/delete apps, files and clear the cache data. If you recently installed an app and your phone is not working well, you should uninstall it and see if your mobile phone runs faster. If this does not help you, you can also try saving important information on Google Drive, Dropbox or just on your computer. Then, you can restore your cell phone to factory data.</p>

                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4">Bad Battery Life?</a>
                <div id="pb_faq2" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p> First, you should try to dim the screen brightness and turn off the GPS, WiFi and Bluetooth if you are not using them. You can also enable the Battery Saving Mode and see if your battery lasts longer. Additionally, you should check your Battery Usage in your phone Settings and see which apps are using more battery. You can close or disable the ones that are draining more battery if you usually do not need them.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-22 py-4">Overheating Phone?</a>
                <div id="pb_faq3" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>You should try the previous possible solutions first to see if this problem is directly related to your battery issue. If it keeps overheating, try to carry your phone in a fresh place and keep it away from the sun’s heat. You can also give your phone some minutes to “refresh” and start using it again.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-22 py-4">Full Storage Space?</a>
                <div id="pb_faq4" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>This fourth common mobile problem can be related to the first we already mentioned before. When you have filled up your storage space, your cell phone tends to respond slowly. So, the possible solutions for this problem are the same: try to delete those files and apps that you do not use anymore, you can also delete old calls and text messages and clean the cache data. Try to transfer those files you would like to keep with you on an online cloud or buy a microSD card to save that valuable information in a safe place..</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false" aria-controls="pb_faq5" class="pb_font-22 py-4">App Crashes/Freezes?</a>
                <div id="pb_faq5" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>The first thing you should try is to restart your cell phone and start using the app again. You can also go to the App Manager and stop the app, sometimes cleaning the cache data also works. If it continues doing the same, try to uninstall the app and install it again. As it was mentioned before, sometimes the app has a lot of bugs that cause this problem. </p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq6" aria-expanded="false" aria-controls="pb_faq6" class="pb_font-22 py-4"> Phone Freezes?</a>
                <div id="pb_faq6" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>Depending on your phone, here are the steps you must follow to restart it: <br>
                        <b> Apple (iOS8 or higher): </b> <br>
                        Click Volume Uponce
                        Click Volume Down once
                        Hold the Power key for 15 seconds. <br>
                        <b> Apple (iOS7 or lower): </b> <br>
                        Press the Power key + Volume Down key at the same time for 10 seconds or until the Apple Logo appears.
                        Samsung
                        Press the Power key  + Volume Down key at the same time for 15 seconds or until the Samsung Logo appears.
                        Sony
                        Press the Power key + Volume Up at the same time for 10 seconds
                        When the phone vibrates, press the power key like normal to turn ON the mobile phone. <br>
                        <b> Nokia/HMD: </b> <br>
                        Press the Power key + Volume Up at the same time for 15 seconds or until the Android logo appears.
                    </p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq7" aria-expanded="false" aria-controls="pb_faq7" class="pb_font-22 py-4">Apps Not Downloading?</a>
                <div id="pb_faq6" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>Try cleaning the apps cache and you can also clean the history of Google Play and Google Play Services. Remember to restart your cell phone after doing that and try again to download the app you want </p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq8" aria-expanded="false" aria-controls="pb_faq8" class="pb_font-22 py-4">MicroSD card does not work?</a>
                <div id="pb_faq8" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>Your microSD probably has errors and your phone is not recognizing that card. Try to connect a card reader to your PC and format the microSD card at least two times. Restart your mobile phone and insert the SD card again. </p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq9" aria-expanded="false" aria-controls="pb_faq9" class="pb_font-22 py-4">Wet Cell Phone?</a>
                <div id="pb_faq9" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>The first this you should NOT do is to turn ON your device. It can be just the worst thing to do. Remove the battery and put the cell phone in a bowl full of rice. It will help to absorb the moisture. Now, take it to a service workshop and let them fix it. </p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq10" aria-expanded="false" aria-controls="pb_faq10" class="pb_font-22 py-4">Damaged Charging Port?</a>
                <div id="pb_faq10" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>Before taking your mobile phone to the repair shop, try to clean the charging port with a new and dry toothbrush. You can also clean it using a dry cotton swab to remove the dust and dirt that does not allow your charging port to work properly. If this does not work, please take your phone the repair shop. </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-5">
          <div class="col-md-6 text-center mt-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Android issues</strong></h5>
            <h2>COMMON ANDROID PROBLEMS</h2>

          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div id="pb_faq" class="pb_accordion" data-children=".item">
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="false" aria-controls="pb_faq1" class="pb_font-22 py-4">Google Play Store Does Not Download Apps?</a>
                <div id="pb_faq1" class="collapse " role="tabpanel">
                  <div class="py-3">
                  <p>The first option –and the most recognized- is to clean the Google Play cache. How can you do it? Go to Settings – Apps – Open Google Play Store – Clean Cache – Restart your phone. <br>
                      The second way to solve this problem is to clean the Google Play Store history. This is more simple than the first solution. First, you need to Open Google Play Store – Settings – Choose Clean History.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4">Google Play Store Crashes?</a>
                <div id="pb_faq2" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>Although some menus vary, most Androids have the same options. So, you just need to go Settings – Apps – Open Google Play Store – Clean Cache and Data – Restart your phone. This should fix the crashing problem. But if it does not work, try doing the same with Google Play Services and Google Services Framework.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-22 py-4">Connectivity Issues like bluetooth or wifi?</a>
                <div id="pb_faq3" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>We recommend you to enable the airplane mode for at least 1 minute. Then, try to connect again. Occasionally, you can turn OFF and ON the connection that is failing and then try to connect it again.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-22 py-4">Synchronization Failures?</a>
                <div id="pb_faq4" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>First of all, make sure that you are connected to the internet. You also need to check if the services that are you trying to sync (just like Google or Dropbox) is working as well. Another thing that you should do is to verify your password, check if it is correct and try again. If any of this works, remove entirely your account from your device and add it again.</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false" aria-controls="pb_faq5" class="pb_font-22 py-4">Unsent Messages?</a>
                <div id="pb_faq5" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>The first thing you must do is to make sure that you are connected to a WiFi network or that your mobile network is working correctly. Then, click on the message that was not sent and select the resend option. This should be enough, but if you still have the same issue, try to restart your phone or try downloading another message service app.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-5">
          <div class="col-md-6 text-center mt-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>IOS issues</strong></h5>
            <h2>COMMON IOS PROBLEMS</h2>

          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div id="pb_faq" class="pb_accordion" data-children=".item">
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="false" aria-controls="pb_faq1" class="pb_font-22 py-4"> Control Center Button Does Not Respond?</a>
                <div id="pb_faq1" class="collapse " role="tabpanel">
                  <div class="py-3">
                  <p>If this happens to you, you must go to Settings and then to the Control Center to customize and delete the specific app that does not work in the including section. You can do it by sliding it on the left and touching Delete. After that, you must restart your device and once it is turned ON again, you can customize the controls again and add the app that you remove before. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4">iPhone Overheats?</a>
                <div id="pb_faq2" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>If you are using a specific app and your cell phone overheats, let it rest for a while. You can disable the location service by going to Settings and Privacy. We recommend you to do this because the location service uses GPS, Bluetooth and mobile locations to determine where you are. This could mean a lot of activity for your phone. If you are charging your iPhone and it overheats, unplugged it for several minutes until it cools. Then, you can plug it again. Removing the case of your device also works. It will avoid that the plug keeps the heat and it will not block the heat output of the phone. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-22 py-4">Issues to Connect to WiFi?</a>
                <div id="pb_faq3" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>You can also try to restart your devise or the router by unplugging it and plugging it again. If it still not responds you may go to settings to reestablish your network. It will restore the Wi-Fi network and the password with the VPN and APN of your cell phone. Just in case the problem continues, remember that you can restore to the factory configuration by eliminating all the content. Before doing this make sure of have made a backup of all the important files that you have on your phone because everything will be erased once you restore your device.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-22 py-4">The Screen Is Not Bright Enough?</a>
                <div id="pb_faq4" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>To solve this problem you can go to General Settings, then to accessibility and after that click on Screen Adaptations. You will see an option to reduce the white point at the button so you can adapt the intensity of the colors until you consider is good for you. </p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false" aria-controls="pb_faq5" class="pb_font-22 py-4">Unable To Connect To The App Store?</a>
                <div id="pb_faq5" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>A possible solution for that is to set the date and time of your device. Disable the option of set automatically, instead of that, set the date and time manually. Then, go to the App Store and let it open for about 5 seconds at least. Activate the date and time automatically again and then close the App Store and open it again. <br> <br>

                      We are sure there are many more problems among phones, no matter, if they are Android phones or they are part of the iOS technology. But, this time we just covered the most common issues and we hope those possible solutions work for you. Please share with us if you have experienced some of these problems and how you solved them!</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pb_section  pb_slant-white pb_pb-220" id="section-team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h5 class="text-uppercase text-center pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>TEAM</strong></h5>
            <h2 class="text-center"> Our Team </h2>
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
                    <div id="team-section">
                      <div class="our-team">

                                    <div class="team-member">
                                        <img src="pic/7.jpeg" class="img-fluid" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="pic/6.jpeg" class="img-fluid" alt="">
                                        <div class="team-details">
                                            <h4>Taylor Swift</h4>
                                            <p>Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="pic/8.jpeg" class="img-fluid" alt="">
                                        <div class="team-details">
                                            <h4>Rock</h4>
                                            <p>Business Partner</p>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="pic/7.jpeg" class="img-fluid" alt="">
                                        <div class="team-details">
                                            <h4>John Cena</h4>
                                            <p>Business Partner</p>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>






                    </div>
                </div>
            </div>
        </div>
      </div>




    </section>

    <section class="pb_xl_py_cover overflow-hidden pb_slant-light1 pb_gradient_v1 cover-bg-opacity-8 pb_pb-200"  style="background-image: url(assets/images/1900x1200_img_5.jpg);" id="contactus">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 justify-content-center">
            <h2 class="heading mb-5 pb_font-40"> Feel Free To Ask Any Thing! </h2>
            <div class="sub-heading">
              <p class="mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
             <form action="#" class="bg-white rounded pb_form_v1">
              <h3 class="mb-3 mt-0 text-center">MAY I HELP YOU</h3> <hr>
              <h2 class="text-center" style="color:#007bff;"> Inquire Now </h2>
              <div class="form-group py-2">

                <input type="text" class="form-control pb_height-35 reverse name " id="web_user" placeholder="Full name">
                <div class="invalid-feedback "> Kindly provide Your Name </div>
              </div>
              <div class="form-group">

                <input type="email" class="form-control pb_height-35 reverse email " id="web_email" placeholder="Email">
                <div class="invalid-feedback "> Kindly provide Your Email </div>
              </div>
              <div class="form-group " >
                <textarea class="form-control  reverse message " style="border-color:none;" id="web_msg"  name="" style="height:100px; border-color:#1ebba3;" placeholder="Message" id="web_msg" rows="3"></textarea>
                <div class="invalid-feedback "> Kindly Type Your Query </div>
                </div>

              <div class="form-group">
                <input type="button" id="web_btn" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Send Message">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fab fa-linkedin-in"></i></a></li>
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
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="app.js"></script>

	</body>
</html>

<script>
	$(".our-team").owlCarousel({
					pagination: true,
					slideSpeed : 2000,
					stopOnHover: true,
					autoPlay: 3000,
					items: 3,
					//singleItem:true,
					itemsMobile : [550,1],
					itemsDesktopSmall : [991,2],
					transitionStyle : "fade",
					navigationText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']
			});



</script>
