<?php
include('../functions.php');
$connect = dbconnect();

if (!isset($_SESSION['admin']['id'])){
  header("location: ../admin_login.php"); 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
  <link rel="stylesheet" href="../sb-admin-2.min.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.8.1-web/css/all.css">
  
  <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link href="../style1.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <style>
        html,
    body {
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #f5f5f5;
    }

    .container {
      max-width: 700px;
      margin: 0 auto;
    }

    .header {
      background-color: #000;
    }

    .header h1 {
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 32px;
      font-weight: 200;
      color: #fff;
      margin: 0;
      padding: 7px 0;
    }

    .notification {
      position: relative;
      text-align: center;
      width: 500px;
      top: -48px;
      left:30%;
    }

    .notification img {
      padding: 10px 0;
    }

    .notification-menu {
      position: absolute;
      top: 40px;
      left: 0;
      background-color: #e5e5e5;
      border: #989898;
      padding: 10px;
      list-style: none;
      width: 500px;
      display: none;
      text-align: left;
      z-index: 4000;
    }

    .notification-menu li {
      background-color: #fff;
      padding: 10px;
      margin-bottom: 10px;
    }

    .notification-menu .avatar {
      padding: 2px 0;
    }

    .notification-menu h3 {
      font-size: 15px;
      margin: 0 0 5px 0;
      display: inline;
    }
  </style>
  <title>Admin Panel</title>


</head>

<body>


  <div style="background-image:url('bg.png');background-size: cover;" class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading bg-dark text-light">
        <large> <b> Mobile Lab </b> </large>
      </div>
      <div class="list-group list-group-flush">
        <button type="button" class="btn list-group-item list-group-item-action" data-toggle="dropdown" style="color:#007bff;font-weight:bold;">
          <?php if($_SESSION['admin']['userRole'] === 'admin') { echo 'Administrator' ;} else if($_SESSION['admin']['userRole'] === 'employee') { echo "Employee"; } ?> : &nbsp; <?php echo $_SESSION['admin']['name']; ?>
        </button>
        <?php
        if ($_SESSION['admin']['userRole'] === 'admin') {
        ?>
        <a href="../dashboard.php" class="list-group-item list-group-item-action bg-light "><i class="fa fa-home"></i> &nbspDashboard </a>
        <a href="livechat.php" class="list-group-item list-group-item-action bg-light "><i class="fa fa-home"></i> &nbspLive Chat <i class='count'></i></a>
        <a href="../add_problem.php" class="list-group-item list-group-item-action "><i class="fa fa-plus"></i> &nbsp Add Problem</a>
        <a href="../add_company.php" class="list-group-item list-group-item-action "><i class="fa fa-plus"></i> &nbsp Add Company</a>
        <a href="../add_employee.php" class="list-group-item list-group-item-action "><i class="fa fa-plus"></i> &nbsp Add Employee</a>
        <a href="../repair_order_show.php" class="list-group-item list-group-item-action "><i class="fa fa-plus"></i> &nbsp Repair Orders</a>
        <a href="../resell_order_show.php" class="list-group-item list-group-item-action "><i class="fa fa-plus"></i> &nbsp Re-Sell Orders</a>
        <a href="../show_feedback.php" class="list-group-item list-group-item-action bg-light "><i class="fa fa-home"></i> &nbspFeedback </a>
        <a href="../usermessages.php" class="list-group-item list-group-item-action bg-light "><i class="fa fa-home"></i> &nbspMessages </a>
        <a href="../admin_logout.php" class="list-group-item list-group-item-action bg-light "><i class="fa fa-home"></i> Logout </a>
        <?php
        } else if ($_SESSION['admin']['userRole'] === 'employee') {

          ?>
          <a href="dashboard.php" class="list-group-item list-group-item-action bg-light "><i class="fa fa-home"></i> &nbspDashboard </a>
          <a href="repair_employee_order_show.php" class="list-group-item list-group-item-action "><i class="fa fa-plus"></i> &nbsp Repair Orders</a>
          <a href="resell_employee_order_show.php" class="list-group-item list-group-item-action "><i class="fa fa-plus"></i> &nbsp Re-Sell Orders</a>
          <a href="admin_logout.php" class="list-group-item list-group-item-action bg-light "><i class="fa fa-home"></i> Logout </a>
        <?php } ?>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"> </i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </nav>

        <div class="notification">
          <img class='notification-btn' src="https://s3.amazonaws.com/codecademy-content/projects/2/feedster/bell.svg">
            
          <ul class="notification-menu">
          </ul>
        </div>
