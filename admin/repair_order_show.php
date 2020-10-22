<?php
include('header.php');

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-light text-center pt-5"> Repair Orders </h3>
    </div>

    <div class="col-md-12 pt-5">
      <table id="repair" class="table table-striped table-dark table-hover table-bordered ">
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
            <th> Amount </th>
            <th>Employee Name</th>
            <th> Status </th>
            <th>Assign Employee</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php

        $sql = "select * from repair_order";
        $select = mysqli_query($connect, $sql);
        $result = mysqli_num_rows($select);
        if ($result > 0) {
          while ($row = mysqli_fetch_assoc($select)) {
            echo " <tr><td style=color:white;>" . $row['order_repairid'] . "</td>
                <td style=color:white;>" . $row['item'] . "</td>
                <td style=color:white;>" . $row['name'] . "</td>
                <td style=color:white;>" . $row['phonenumber'] . "</td>
                <td style=color:white;>" . $row['company'] . "</td>
                <td style=color:white;>" . $row['modelno'] . "</td>
                <td style=color:white;>" . $row['problem'] . "</td>
                <td style=color:white;>" . $row['address'] . "</td>
                <td style=color:white;>" . $row['amount'] . "</td>
                <td style=color:white;>" . $row['employee_name'] . "</td>
                <td style=color:white;>" . $row['status'] . "</td>
                <td> <button data-toggle='modal' data-target='#employeeModel' id='" . $row['order_repairid'] . "' type='button' class='btn btn-primary btn-sm assign_employee' phonenumber='" . $row['phonenumber'] . "' data-id=" . $row['signup_id'] . ">Assign Employee</button> </td>
                <td> <button class='btn btn-sm btn-danger btn_delete_order' type='submit' name='' id=''> Delete </button> </td>

                </tr>";
          }
        }
        ?>
      </tbody>

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
      <form action="assign_employee_repair.php" method="post">
        <div class="modal-body">
          <input type="text" hidden name='repair_id' id='repair_id' value=''>
          <input type="text" hidden name='signup_id' id='signup_id'>
          <input type='text' hidden name='phonenumber' id='phonenumber'>
          <div class="form-group">
            <textarea class="md-textarea form-control" placeholder="Notification Message for Employee" name='message' rows="2"></textarea>
          </div>
          <div class="form-group">
            <select name="assign_employee" class='form-control'>
              <?php
              require_once 'livechat/database_connection.php';
              $sql = "SELECT * FROM `signup` WHERE `signup_role` = 'employee'";
              $result = $connect->prepare($sql);
              $result->execute();

              if ($result->rowCount() > 0) {
                while ($row = $result->fetchAll(PDO::FETCH_ASSOC)) {
                  foreach ($row as $key) {
                    $id = $key['signup_id'];
                    $name = $key['fullname'];
                    echo "<option value='$id'>$name</option>";
                  }
                }
              }
              ?>
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
  $(document).on('click', '.btn_delete_order', function() {
    $('.myModal_delete_order').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function() {
      return $(this).text();

    }).get();

    $('.delete_order_id').val(data[0]);

  });

  $('.delete_order').click(function() {

    var delete_order = $('.delete_order_id').val();


    if (delete_order.length != "") {
      $.ajax({
        type: "POST",
        url: "delete_order.php",
        data: {
          "delete_order": delete_order
        },
        dataType: 'JSON',
        success: function(feedback) {
          if (feedback.status === "success") {
            alert("Data Deleted");
            window.location = "repair_order_show.php";
          } else if (feedback.status === "error") {
            alert("Data Not Deleted ")
          }


        }
      })
    }
  });

  $(document).on('click', '.assign_employee', function() {
    let signup_id = $(this).attr('data-id');
    let repair_id = $(this).attr('id');
    let phonenumber = $(this).attr('phonenumber');
    $("#repair_id").val(repair_id);
    $("#signup_id").val(signup_id);
    $("#phonenumber").val(phonenumber);
  });


  $("#repair").DataTable();
</script>
