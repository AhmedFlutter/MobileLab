<?php
include 'functions.php';
$connect = dbconnect();
if (!isset($_SESSION['id'])) {
  header("location: login.php");
}

$sql = "select company_name from companyname";
$select = mysqli_query($connect, $sql);
$result = mysqli_num_rows($select);
$option = '';
if ($result > 0) {
  while ($row = mysqli_fetch_assoc($select)) {
    $option .= '<option value = "' . $row['company_name'] . '">' . $row['company_name'] . '</option>';
  }
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
            <div class="dropdown">
              <button type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown" style="color:black;font-weight:bold;">
                Re-Sell
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="repair.php#section-repair">Repair</a>

              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown" style="color:black;font-weight:bold;">
                <?php echo $_SESSION['name']; ?>
              </button>
              <div class="dropdown-menu">
                
                <a class="dropdown-item" href="profile.php#section-profile">Profile</a>
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
      <div class="row align-items-center justify-content-center">
        <div class="col-md-6">
          <h2 class=" mb-2" style="color:white;">WelCome To </h2>
          <h1 class=""> MOBILE LAB! </h1>
          <div class="sub-heading">
            <p class="mb-4"> We Welcome You to in Mobile Lab Mr: <?php if (isset($_SESSION['first'])) echo $_SESSION['first']; ?> </p>

          </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-5 relative align-self-center">


        </div>
      </div>
    </div>
  </section>


  <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-resell">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center mb-5">
          <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Re-sell</strong></h5>
          <h2> Contact Us For Re-Sell Your Items </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="image">
            <img src="pic/mobile_lab_content2.jpg" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6 ">
          <form method="post" action="" enctype="multipart/form-data" id="myForm">
            <div class="form-group">
              <label for="product" class="control-label col-md-5 ">Select Your Product</label>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-default btn-primary active btn-type col-md-5" data-id='mobile' id="mobile" value="mobile"> Mobile </button>
              <button type="button" class="btn btn-default col-md-6 btn-type" data-id='tablet' id="tablet" value="tablet"> Tablet </button>
            </div>
            <div class="form-group">
              <label for="name" class="control-label col-md-2 ">Name</label>
              <input type="text" class="form-control" id="name" name="username" value="<?php echo $_SESSION['first']; ?>">
            </div>
            <div class="form-group">
              <label for="phonenumber" class="control-label col-md-4 ">Phone-Number</label>
              <input type="text" class="form-control contact" id="contact" value="" name="phonenumber">
              <div class="invalid-feedback "> Phone Number Is required </div>
            </div>
            <div class="form-group ">
              <label for="company" class="control-label col-md-6">Select Your Company</label>
              <select class="form-control" id="ddselect" onchange="dd1select()">
                <option> </option>
                <?php echo $option; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="companyname" class="control-label col-md-8">Company Name (optional if not in above)</label>
              <input type="text" class="form-control companyname" id="compval" name="companyname" value="">
              <div class="invalid-feedback"> Company Name Is required </div>
            </div>
            <div class="form-group">
              <label for="modelnumber" class="control-label col-md-4 ">Model-Number</label>
              <input type="text" class="form-control model" id="modelno" value="" name="modelno">
              <div class="invalid-feedback "> Model Number Is required </div>
            </div>

            <div class="form-group">
              <label for="problems" class="control-label col-md-6 ">Problem </label>
              <input type="text" class="form-control problem" id="probval" value="" name="problem">
              <div class="invalid-feedback "> Issue is Required </div>
            </div>
            <div class="form-group">
              <label for="address" class="control-label col-md-6 ">Shipping Address</label>
              <input type="text" class="form-control address" id="address" name="address" value="">
              <div class="invalid-feedback "> Address Is required </div>
            </div>
            <div class="form-group">
              <label for="Image" class="control-label col-md- ">Upload Back And Front Picture Of Your Item</label>
              <input type="file" class="form-control pb_height-45 image" name="image[]" id="image" multiple>
              <div class="invalid-feedback image_error"> Provide Images </div>
            </div>
            <div class="form-group">
              <label for="Amount" class="control-label col-md-6 ">Expected Amount</label>
              <input type="text" class="form-control expect_amount" id="resell_amount" name="expected_amount" value="">
              <div class="invalid-feedback "> Define Your Demand </div>
            </div>
            <div class="form-group pt-3">
              <button class="btn btn-primary btn-block" id="resell_btn" type="submit"> Submit </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>



  <!-- END section -->
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
  <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff" /></svg></div>



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
  function dd1select() {
    var d = document.getElementById("ddselect");
    var displaytext = d.options[d.selectedIndex].text;
    document.getElementById("compval").value = displaytext;
  }


  $(function() {
    $('.btn-type').click(function() {
      $('.btn-type').removeClass('active');
      $('.btn-type').removeClass('btn-primary');
      $(this).addClass('active');
      $(this).addClass('btn-primary');

    });


    $("#myForm").on('submit', function(e) {
      e.preventDefault();

     
      var name = $('#name').val();
      var contact = $('#contact').val();
      var company = $('#compval').val();
      var modelno = $('#modelno').val();
      var problem = $('#probval').val();
      var address = $('#address').val();
      var images = $('#image').val();
      var expectamount = $('#resell_amount').val();
      
      var selection = document.getElementById('image');
      for (var i=0; i<selection.files.length; i++) {
      var ext = selection.files[i].name.split('.').pop().toLowerCase();
      if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
        alert("Kindly provide image file ");
        return false;
        }   
      } 
      

      var $fileUpload = $("input[type='file']");
      if(contact.length == ""){
        $('.contact').addClass('is-invalid');
      }else{
        $('.contact').removeClass('is-invalid');
      }

      if(company.length == ""){
        $('.companyname').addClass('is-invalid');
      }else{
        $('.companyname').removeClass('is-invalid');
      }

      if(modelno.length == ""){
        $('.model').addClass('is-invalid');
      }else{
        $('.model').removeClass('is-invalid');
      }

      if(problem.length == ""){
        $('.problem').addClass('is-invalid');
      }else{
        $('.problem').removeClass('is-invalid');
      }

      if(address.length == ""){
        $('.address').addClass('is-invalid');
      }else{
        $('.address').removeClass('is-invalid');
      }

      if(images.length == ""){
        $('.image').addClass('is-invalid');
      }
      else if(parseInt($fileUpload.get(0).files.length) > 2 || parseInt($fileUpload.get(0).files.length) < 2){
        $('.image_error').html("Kindly provide only Two Images");
      }
      else{
        $('.image').removeClass('is-invalid');
      }

      if(expectamount.length == ""){
        $('.expect_amount').addClass('is-invalid');
      }else{
        $('.expect_amount').removeClass('is-invalid');
      }

   

      let btntype;
      $(".btn-type").each(function(index, element) {
        if ($(element).hasClass('active')) {
          btntype = $(this).attr('data-id');

        }
      });
      
      let form = document.getElementById("myForm");
      let formData = new FormData(form);
      formData.append("btntype", btntype);
      
      if(name.length != "" && contact.length != "" && company.length != "" && modelno.length != "" && problem.length != "" && address.length != "" && images.length != "" && parseInt($fileUpload.get(0).files.length) == 2 && expectamount.length != ""){
      $.ajax({
        url: "resell_order.php",
        method: "post",
        data: formData,
        dataType: 'JSON',
        success: function(feedback) {
          if (feedback.status === "success") {
            alert("Your order has been sent our team will confirm you shortly. kindly track your order in your profile. Thanks!");
            $('#myForm').trigger('reset');
          } else if (feedback.status === "error") {
            alert("Your order has not been sent");
          }

        },
        contentType: false,
        cache: false,
        processData: false
      });
    }
    });
  });
</script>
