<?php
include('header.php');

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-light text-center pt-5"> Resell Orders </h3>
        </div>

        <div class="col-md-12 pt-5">
            <table id="" class="table example table-striped table-dark table-hover table-bordered " style="width:100%;">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Item </th>
                        <th> Name </th>
                        <th> Phone Number </th>
                        <th> Company </th>
                        <th> Model No </th>
                        <th> Problem </th>
                        <th> Address </th>
                        <th> Amount </th>
                        <th>Assigned By</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <?php
                $id = $_SESSION['admin']['id'];
                $sql = "select * from resell_order where employee_id = $id";
                $select = mysqli_query($connect, $sql);
                $result = mysqli_num_rows($select);
                if ($result > 0) {
                    while ($row = mysqli_fetch_assoc($select)) {
                        echo " <tr><td style=color:white;>" . $row['resell_id'] . "</td>
                <td style=color:white;>" . $row['item'] . "</td>
                <td style=color:white;>" . $row['name'] . "</td>
                <td style=color:white;>" . $row['phone_number'] . "</td>
                <td style=color:white;>" . $row['company_name'] . "</td>
                <td style=color:white;>" . $row['model_no'] . "</td>
                <td style=color:white;>" . $row['problem'] . "</td>
                <td style=color:white;>" . $row['address'] . "</td>
                <td style=color:white;>" . $row['expect_amount'] . "</td>
                <td style=color:white;>" . $row['admin_name'] . "</td>
                <td style=color:white;>" . $row['status'] . "</td>
                <td> <button data-toggle='modal' data-target='#employeeModel' id='" . $row['resell_id'] . "' type='button'admin-id='" . $row['admin_id'] . "' class='btn btn-primary edit' data-id=" . $row['signup_id'] . ">Edit</button> </td>

                </tr>";
                    }
                }
                ?>

            </table>

        </div>
    </div>
    <!-- Delete problem Modal -->
    <div class="modal myModal_delete_order" id="">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Delete Order</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <input type="hidden" class="form-control delete_order_id" name="delete_order_id" id="delete_order_id" value="">
                    <h5 class="text-danger"> Are you sure you want to delete this problem? </h5>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                    <button type="submit" id="" name="" class="btn btn-danger delete_order">Yes</button>
                </div>

            </div>
        </div>
    </div>

</div>


<div class="modal fade" id="employeeModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update_resell_state.php" method="post">
                <div class="modal-body">
                    <input type="text" hidden name='repair_id' id='repair_id'>
                    <input type="text" hidden name='signup_id' id='signup_id'>
                    <input type='text' hidden name='admin_id' id='admin_id'>
                    <div class="form-group">
                        <select class='form-control' name="state">
                            <option value="pending">Pending</option>
                            <option value="Recieved">Recieved</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>




<?php include('footer.php'); ?>

<script>
    $(document).on('click', '.edit', function() {
        let admin_id = $(this).attr('admin-id');
        let order_id = $(this).attr('id');
        let user_id = $(this).attr('data-id');
        $("#repair_id").val(order_id);
        $("#signup_id").val(user_id);
        $("#admin_id").val(admin_id);
    });
</script>
