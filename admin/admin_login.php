<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="sb-admin-2.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.1-web/css/all.css">
    <link href="style1.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <style>
        body {
            background: #F4F6F7;
            background-size: cover;
            background-image: url('pic/background_login.jpg');

        }


        .head {
            color: #fff;

        }

        .log {
            background-color: rgba(3, 66, 125, 0.5) !important;
            padding: 20px;
            border-radius: 20px;
        }
    </style>

    <title>Admin Panel</title>


</head>

<body>

    <div class="container">
        <div class="row mt-5">




            <div class="col-md-4 offset-md-4 mt-5 log ">
                <div class="image">
                    <h3 class="text-center text-light">Mobile Lab</h3>
                </div>

                <form action="">
                    <h1 class="text-center head mt-5">Login</h1>
                    <div class="form-group input-group mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="" class="form-control adminuser" id="username" placeholder="Enter username or email " type="text">
                        <div class="invalid-feedback"> Type Your Username or Email </div>
                    </div>

                    <div class="form-group input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control  adminpass" id="password" placeholder="Type your password here" type="password">
                        <div class="invalid-feedback"> Type your Password </div>
                    </div>

                    <div class="form-group mt-3">
                        <button type="button" class="btn btn-primary btn-block" id="admin_login_btn"> LOGIN </button>
                    </div>


                </form>

            </div>
        </div>
    </div>






    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"> </script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"> </script>
    <script>
        $(document).ready(function() {
            $('#admin_login_btn').click(function() {
                const admin_username = $('#username').val();
                const admin_password = $('#password').val();
                if (admin_username.length == "") {
                    $('.adminuser').addClass('is-invalid');
                } else {
                    $('.adminuser').removeClass('is-invalid');
                }

                if (admin_password.length == "") {
                    $('.adminpass').addClass('is-invalid');
                } else {
                    $('.adminpass').removeClass('is-invalid');
                }

                if (admin_username.length != "" && admin_password.length != "") {
                    $.ajax({
                        type: "POST",
                        url: "admin_login_code.php",
                        data: {
                            "admin_username": admin_username,
                            "admin_password": admin_password
                        },
                        success: function(result) {
                            let feedback = $.parseJSON(result);
                            if (feedback.status === "success") {
                                window.location = "dashboard.php";
                            } else if (feedback.status === "passwordError") {
                                alert("email or password is incorrect");
                            } else if (feedback.status === "emailError") {
                                alert("email or password is incorrect");
                            }
                        }
                    })
                }
            });
        });
    </script>


</body>

</html>
