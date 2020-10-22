<?php


include('database_connection.php');

session_start();

if (!isset($_SESSION['id'])) {
    header("location:login.php");
}


?>
 

<html>

<head>
    <title>Mobile Lab</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    
    
  

    
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/landing-2.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.1-web/css/all.css">

    <style>

      .label {
        display: block;
        float: right;
        height:24px;
        width: 25px;
        border-radius: 50%;
        text-align: center;
        font-family: fantasy;
        padding-left:1px;
      }
      
      .label-success {
        background : #f1c40f !important;
      }


</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand text-uppercase" href="../userprofile1.php">MOBILE LAB</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="../userprofile1.php#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="../userprofile1.php#section-features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="../userprofile1.php#section-reviews">Reviews</a></li>
            <li class="nav-item"><a class="nav-link" href="../userprofile1.php#section-fixes">Quick Fixes</a></li>
            <li class="nav-item"><a class="nav-link" href="../userprofile1.php#section-team">Team</a></li>
            <li class="nav-item"><a class="nav-link" href="../userprofile1.php#contactus">Contact Us</a></li>
            
            <li class="nav-item">
                <div class="dropdown" >
                    <button type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown" style="color:#007bff;font-weight:bold;">
                      Services
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="../repair.php#section-repair">Repair</a>
                    <a class="dropdown-item" href="../resell.php#section-resell">Re-Sell</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown" >
                    <button  type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown" style="color:#007bff;font-weight:bold;">
                    <?php echo $_SESSION['name']; ?>
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="../profile.php">Profile</a>
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
            <h2 class=" mb-2" style="color:white;">WelCome To </h2> <h1 class=""> MOBILE LAB! </h1>
            <div class="sub-heading">
              <p class="mb-4"> We Welcome You to in Mobile Lab Mr: <?php if(isset($_SESSION['first'])) echo $_SESSION['first']; ?> </p>

            </div>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5 relative align-self-center">


            </div>
          </div>
      </div>
    </section>
    
    
    <section id="section-chat" >
    <div class="container ">
        <div class="table-responsive">
            <h4  class="mt-5 text-center text-primary">Need Help Contact with Admins</h4>
            <div id="user_details" class="mt-5"></div>
            <div id="user_model_details"class="mt-5" ></div>
        </div> 
    </div>
    </div>
    </section>

    <footer class="pb_footer" role="contentinfo">
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
    
    <script src="js/jquery-3.3.1.min.js" ></script>
  
   <script src="js/bootstrap.min.js"></script>

   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/main.js"></script>
    

</body>
</html>




<script>
    $(document).ready(function() {
        fetch_user();

        setInterval(function() {
            update_last_activity();
            fetch_user();
            update_chat_history_data();
        }, 3000);

        function update_last_activity() {
            $.ajax({
                url: "update_last_activity.php",
                success: function() {

                }
            });
        }

        function fetch_user() {
            $.ajax({
                url: "fetch_user.php",
                method: "POST",
                success: function(data) {
                    $('#user_details').html(data);
                }
            });
        }

        function make_chat_dialog_box(to_user_id, to_user_name) {
            var modal_content = '<div id="user_dialog_' + to_user_id + '" class="user_dialog" title="You have chat with ' + to_user_name + '">';
            modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="' + to_user_id + '" id="chat_history_' + to_user_id + '">';
            modal_content += fetch_user_chat_history(to_user_id);
            modal_content += '</div>';
            modal_content += '<div class="form-group">';
            modal_content += '<textarea name="chat_message_' + to_user_id + '" id="chat_message_' + to_user_id + '" class="form-control chat_message"></textarea>';
            modal_content += '</div><div class="form-group" align="right">';
            modal_content += '<button type="button" name="send_chat" id="' + to_user_id + '" class="btn btn-info send_chat">Send</button></div></div>';
            $('#user_model_details').html(modal_content);
        }

        $(document).on('click', '.start_chat', function() {
            var to_user_id = $(this).data('touserid');
            var to_user_name = $(this).data('tousername');
            make_chat_dialog_box(to_user_id, to_user_name);
            $("#user_dialog_" + to_user_id).dialog({
                autoOpen: false,
                width: 400
            });
            $('#user_dialog_' + to_user_id).dialog('open');
        });

        $(document).on('click', '.send_chat', function() {
            var to_user_id = $(this).attr('id');
            var chat_message = $('#chat_message_' + to_user_id).val();
            $.ajax({
                url: "insert_chat.php",
                method: "POST",
                data: {
                    to_user_id: to_user_id,
                    chat_message: chat_message
                },
                success: function(data) {
                    $('#chat_message_' + to_user_id).val('');
                    $('#chat_history_' + to_user_id).html(data);
                }
            });
        });

        function fetch_user_chat_history(to_user_id) {
            $.ajax({
                url: "fetch_user_chat_history.php",
                method: "POST",
                data: {
                    to_user_id: to_user_id
                },
                success: function(data) {
                    $('#chat_history_' + to_user_id).html(data);
                }
            })
        }

        function update_chat_history_data() {
            $('.chat_history').each(function() {
                var to_user_id = $(this).data('touserid');
                fetch_user_chat_history(to_user_id);
            });
        }

        $(document).on('click', '.ui-button-icon', function() {
            $('.user_dialog').dialog('destroy').remove();
        });

    });
</script>
