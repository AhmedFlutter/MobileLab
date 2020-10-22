<?php
include('header.php');

if (isset($_GET['success'])) {
    echo "<script>  alert('" . $_GET['success'] . "');  </script>";
} else if (isset($_GET['error'])) {
    echo "<script>  alert('" . $_GET['error'] . "');  </script>";
}



?>
<div class="container-fluid">
    <div class="row">

        <div class="mt-5 col-md-8 offset-md-2 mb-5">
            <h2 class="text-light text-center"> Manage Employees, Admins & Users </h2>
            <div class="d-flex justify-content-end">
                <button class="btn btn-success" id='add' data-toggle='modal' data-target='#form' type=""> ADD </button>
            </div>
        </div>
        <div class="col-md-12">
            <table id="employeeTable" class="table table-bordered table-hover table-dark table-striped " style="width:100%;">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Full Name </th>
                        <th> User Role </th>
                        <th> Edit </th>
                        <th>Delete </th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel"> Add Employee Or Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="bg-white rounded pb_form_v1">

                    <div class="form-group">

                        <input type="text" class="form-control  pb_height-35 reverse fname " id="first" placeholder="Full name">
                        <div class="invalid-feedback"> Full Name Is required </div>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control  pb_height-35 reverse uname " id="user" placeholder="User name">

                        <div class="invalid-feedback uerror"> User Name Is required </div>
                    </div>
                    <div class="form-group">

                        <input type="email" class="form-control pb_height-35 reverse email " id="email" placeholder="Email">

                        <div class="invalid-feedback emailError"> Email Is required </div>
                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control pb_height-35 reverse pass " id="pass" placeholder="Password">

                        <div class="invalid-feedback passerror"> Password Is required </div>
                    </div>
                    <div class="form-group">

                        <input type="password" class=" form-control pb_height-35  reverse repass " id="retypepass" placeholder="Re-Type Password">

                        <div class="invalid-feedback conpass"> Re-type Your Password </div>
                    </div>
                    <div class="form-group">
                        <select class='form-control' name="" id="userRole">
                            <option value="">select</option>
                            <option value="normal_user">User</option>
                            <option value="admin">Administrator</option>
                            <option value="employee">Employee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg btn-block pb_btn-pill signup btn-shadow-blue" id="signupAdmin">Add</button>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn " data-dismiss="modal"> Close </button>
                <button type="submit" class="btn  btn-submit"> Insert</button>

            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel"> Add Employee Or Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id='myform' class="bg-white rounded pb_form_v1">
                    <input type="text" hidden id="userID">
                    <div class="form-group">

                        <input type="text" class="form-control  pb_height-35 reverse fname " id="userfirst" placeholder="Full name">
                        <div class="invalid-feedback"> Full Name Is required </div>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control  pb_height-35 reverse uname " id="username" placeholder="User name">

                        <div class="invalid-feedback uerror"> User Name Is required </div>
                    </div>
                    <div class="form-group">

                        <input type="email" class="form-control pb_height-35 reverse email " id="useremail" placeholder="Email">

                        <div class="invalid-feedback emailError"> Email Is required </div>
                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control pb_height-35 reverse pass " id="userpass" placeholder="Password">

                        <div class="invalid-feedback passerror"> Password Is required </div>
                    </div>
                    <div class="form-group">

                        <input type="password" class=" form-control pb_height-35  reverse repass " id="userretypepass" placeholder="Re-Type Password">

                        <div class="invalid-feedback conpass"> Re-type Your Password </div>
                    </div>
                    <div class="form-group">
                        <select class='form-control' name="" id="Role">
                            <option value="">select</option>
                            <option value="normal_user">User</option>
                            <option value="admin">Administrator</option>
                            <option value="employee">Employee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg btn-block pb_btn-pill signup btn-shadow-blue" id="editAdmin">Update</button>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn " data-dismiss="modal"> Close </button>
                <button type="submit" class="btn  btn-submit"> Insert</button>

            </div>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

<script>
    $(document).ready(function() {

        function dataTable() {
            $("#employeeTable").DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "fetch.php",
                    method: "post",
                }
            });
        }
        $(document).on('click', '.delete', function() {
            let id = $(this).attr('data-id');
            $.ajax({
                url: "delete_employee.php",
                method: "post",
                data: {
                    id: id
                },
                success: function(data) {

                    let feedback2 = $.parseJSON(data);

                    if (feedback2.status === 'success') {
                        alert("Data Deleted Successfully");
                        $("#employeeTable").DataTable().destroy();
                        dataTable();
                    }
                }
            });
        });
        dataTable();

        $(document).on('click', '#editAdmin', function() {
            const ID = $("#userID").val();
            const firstname = $("#userfirst").val();
            const username = $("#username").val();
            const email = $("#useremail").val();
            const password = $("#userpass").val();
            const retypepass = $("#userretypepass").val();
            const userRole = $("#Role").val();
            const btn = $("#signupAdmin").val();
            if (firstname.length == "") {
                $(".fname").addClass("is-invalid");
            } else {
                $(".fname").removeClass("is-invalid");
            }

            if (username.length == "") {
                $(".uname").addClass("is-invalid");
            } else {
                $(".uname").removeClass("is-invalid");
            }

            if (email.length == "") {
                $(".email").addClass("is-invalid");
            } else {
                $(".email").removeClass("is-invalid");
            }

            if (password.length == "") {
                $(".pass").addClass("is-invalid");
            } else {
                $(".pass").removeClass("is-invalid");
            }

            if (retypepass.length == "") {
                $(".repass").addClass("is-invalid");
            } else {
                $(".repass").removeClass("is-invalid");
            }

            if (password !== retypepass) {
                $(".pass").addClass("is-invalid");
                $(".passerror").html("Password not match");
                $(".repass").addClass("is-invalid");
                $(".conpass").html("Password not match");
            }

            if (firstname.length != "" && username.length != "" && email.length != "" && password.length != "" && password === retypepass && retypepass.length !== "") {
                $.ajax({
                    type: "POST",
                    url: "edit_employee.php",
                    data: {
                        "id": ID,
                        "firstname": firstname,
                        "username": username,
                        "email": email,
                        "password": password,
                        "retypepass": retypepass,
                        "userRole": userRole,
                    },
                    success: function(feedback) {
                        let feedback2 = $.parseJSON(feedback);

                        if (feedback2.status === 'success') {
                            alert("Data Updated Successfully");
                            $("#myform").trigger('reset');
                            $("#employeeTable").DataTable().destroy();
                            dataTable();
                        }
                    }
                });
            }
        });
    });

    $(document).on('click', '.edit', function() {

        let id = $(this).attr('data-id');
        $("#userID").val(id);
        $(".modal-title").html('Edit User');
        // $(".signup").attr('id', 'editAdmin');
        $.ajax({
            url: "fetch_employee.php",
            method: "post",
            data: {
                id: id
            },
            success: function(data) {
                let data2 = $.parseJSON(data);
                $("#userfirst").val(data2.fullname);
                $("#username").val(data2.username);
                $("#useremail").val(data2.email);
                $("#Role").val(data2.signup_role);
            }
        });

    });

    $(document).on('click', '#signupAdmin', function() {
        const firstname = $("#first").val();
        const username = $("#user").val();
        const email = $("#email").val();
        const password = $("#pass").val();
        const retypepass = $("#retypepass").val();
        const userRole = $("#userRole").val();
        const btn = $("#signupAdmin").val();
        if (firstname.length == "") {
            $(".fname").addClass("is-invalid");
        } else {
            $(".fname").removeClass("is-invalid");
        }

        if (username.length == "") {
            $(".uname").addClass("is-invalid");
        } else {
            $(".uname").removeClass("is-invalid");
        }

        if (email.length == "") {
            $(".email").addClass("is-invalid");
        } else {
            $(".email").removeClass("is-invalid");
        }

        if (password.length == "") {
            $(".pass").addClass("is-invalid");
        } else {
            $(".pass").removeClass("is-invalid");
        }

        if (retypepass.length == "") {
            $(".repass").addClass("is-invalid");
        } else {
            $(".repass").removeClass("is-invalid");
        }

        if (password !== retypepass) {
            $(".pass").addClass("is-invalid");
            $(".passerror").html("Password not match");
            $(".repass").addClass("is-invalid");
            $(".conpass").html("Password not match");
        }

        if (firstname.length != "" && username.length != "" && email.length != "" && password.length != "" && retypepass.length !== "") {
            $.ajax({
                type: "POST",
                url: "signup_code.php",
                data: {
                    "firstname": firstname,
                    "username": username,
                    "email": email,
                    "password": password,
                    "retypepass": retypepass,
                    "userRole": userRole,
                    "btn": btn
                },
                dataType: 'JSON',
                success: function(feedback) {
                    if (feedback.status === "error") {
                        $(".email").addClass("is-invalid");
                        $(".emailError").html(feedback.message);
                    } else if (feedback.status === "email_validate_error") {
                        $(".email").addClass("is-invalid");
                        $(".emailError").html(feedback.message);
                    } else if (feedback.status === "uerror") {
                        $(".uname").addClass("is-invalid");
                        $(".uerror").html(feedback.message);
                    } else if (feedback.status === "euerror") {
                        alert("This username and email is already taken ! Try Another");
                    } else if (feedback.status === "success") {
                        alert("This user has been created");
                        $("#employeeTable").DataTable().destroy();
                        dataTable();
                    }

                }
            });
        }
    });
</script>
