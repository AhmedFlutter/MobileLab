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
            <th> Phone-Number </th>
            <th> Company </th>
            <th> Model No </th>
            <th> Problem </th>
            <th> Address </th>
            <th> Amount </th>
            <th>Employee Name</th>
            <th> Status </th>
            <th> Assign Employee </th>
            <th> view images </th>
            <th> Delete </th>
          </tr>
        </thead>
        <?php

        $sql = "select * from resell_order";
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
                <td style=color:white;>" . $row['employee_name'] . "</td>
                <td style=color:white;>" . $row['status'] . "</td>
                <td> <button data-toggle='modal' data-target='#employeeModel' id='" . $row['resell_id'] . "' type='button' class='btn btn-primary assign_employee' phonenumber='" . $row['phone_number'] . "' data-id=" . $row['signup_id'] . ">Assign Employee</button> </td>
                <td> <button class='btn btn-success btn_view_images' data-id='" . $row['resell_id'] . "' type='button' name='' id=''> view </button> </td>
                <td> <button class='btn btn-danger btn_delete_resell_order' type='submit' name='' id=''> Delete </button> </td>

                </tr>";
          }
        }
        ?>

      </table>

    </div>
  </div>
  <!--  Delete problem Modal-->
  <div class="modal myModal_view_images" id="">
    <div class="modal-dialog">
      <div class="modal-content">

        <!--  Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Images</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!--  Modal body -->
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-title text-center">
                  <h3>Images</h3>
                </div>
              </div>
            </div>
            <div class="row pt-4" id='showImages'></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>

<!-- Employee Model !-->
<!-- Modal -->
<div class="modal fade" id="employeeModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="assign_employee_resell.php" method="post">
        <div class="modal-body">
          <input type="text" hidden name='resell_id' id='resell_id' value=''>
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


<!-- Delete problem Modal
   <div class="modal myModal_delete_order" id="">
        <div class="modal-dialog">
          <div class="modal-content">

            Modal Header
              <div class="modal-header">
                <h4 class="modal-title">Delete Order</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

               Modal body
              <div class="modal-body">
              <input type="hidden" class="form-control delete_order_id"  name="delete_order_id" id="delete_order_id" value="">
              <h5 class="text-danger"> Are you sure you want to delete this problem? </h5>
              </div>

             Modal footer
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <button type="submit" id="" name="" class="btn btn-danger delete_order" >Yes</button>
              </div>

            </div>
          </div>
        </div> -->

</div>

<!-- Delete problem Modal -->
<div class="modal myModal_delete_resell_order" id="">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Order</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <input type="hidden" class="form-control delete_order_resell_id" name="delete_order_id" id="delete_order_id" value="">
        <h5 class="text-danger"> Are you sure you want to delete this problem? </h5>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        <button type="submit" id="" name="" class="btn btn-danger delete_resell_order">Yes</button>
      </div>

    </div>
  </div>
</div>



<?php include('footer.php'); ?>
<!-- <img src="pic/a.jpg" class="img-fluid" alt=".."> -->
<script>
  $(document).on('click', '.btn_view_images', function() {
    let id = $(this).attr('data-id');
    $.ajax({
      url: 'view_images.php',
      type: 'post',
      data: {
        "id": id
      },
      success: function(data) {
        let data2 = $.parseJSON(data);
        let showImages = $("#showImages");
        var images = '';
        // if (showImages.html() === '') {
        $.each(data2.images, function(index, file) {
          images += "<div class='col-md-5 offset-md-1'>";
          images += "<img src='../" + file + "' class='img-fluid'>";
          images += "</div>";

        });
        showImages.html(images);
        // }
        $('.myModal_view_images').modal('show');
      }
    });

  });

  $(document).on('click', '.btn_delete_resell_order', function() {
    $('.myModal_delete_resell_order').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function() {
      return $(this).text();

    }).get();

    $('.delete_order_resell_id').val(data[0]);

  });

  $('.delete_resell_order').click(function() {

    var delete_resell_order = $('.delete_order_resell_id').val();


    if (delete_resell_order != "") {
      $.ajax({
        type: "POST",
        url: "delete_resell_order.php",
        data: {
          "delete_resell_order": delete_resell_order
        },
        dataType: 'JSON',
        success: function(feedback) {
          if (feedback.status === "success") {
            alert("Data Deleted");
            window.location = "resell_order_show.php";
          } else if (feedback.status === "error") {
            alert("Data Not Deleted ")
          }


        }
      })
    }
  });

  $(document).on('click', '.assign_employee', function() {
    let signup_id = $(this).attr('data-id');
    let resell_id = $(this).attr('id');
    let phonenumber = $(this).attr('phonenumber');
    $("#resell_id").val(resell_id);
    $("#signup_id").val(signup_id);
    $("#phonenumber").val(phonenumber);
  });

  // $('.delete_order').click(function(){

  // 	var delete_order = $('.delete_order_id').val();


  // 	if(delete_order.length != ""){
  // 	$.ajax({
  // 		type:"POST",
  // 		url :"delete_order.php",
  // 		data:{"delete_order":delete_order},
  // 		dataType: 'JSON',
  // 		success : function(feedback){
  // 			if(feedback.status === "success"){
  // 			alert("Data Deleted");
  // 			window.location = "repair_order_show.php";
  // 			}
  // 			else if(feedback.status === "error"){
  // 			alert("Data Not Deleted ")
  // 			}


  // 		}
  // 	})
  // 	}
  // });

  // $(document).on('click','.btn_delete_order',function(){
  // 		$('.myModal_delete_order').modal('show');

  //       $tr = $(this).closest('tr');

  //       var data = $tr.children("td").map(function(){
  //         return $(this).text();

  //         }).get();

  //         $('.delete_order_id').val(data[0]);

  // });

  // $('.delete_order').click(function(){

  // 	var delete_order = $('.delete_order_id').val();


  // 	if(delete_order.length != ""){
  // 	$.ajax({
  // 		type:"POST",
  // 		url :"delete_order.php",
  // 		data:{"delete_order":delete_order},
  // 		dataType: 'JSON',
  // 		success : function(feedback){
  // 			if(feedback.status === "success"){
  // 			alert("Data Deleted");
  // 			window.location = "repair_order_show.php";
  // 			}
  // 			else if(feedback.status === "error"){
  // 			alert("Data Not Deleted ")
  // 			}


  // 		}
  // 	})
  // 	}
  // });
</script> -->
