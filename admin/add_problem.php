<?php 
  include ('header.php');
  
  if(isset($_GET['success'])){
    echo "<script>  alert('". $_GET['success']. "');  </script>";
  }
  else if(isset($_GET['error'])){
    echo "<script>  alert('". $_GET['error']. "');  </script>";
  }
 


?>
    <div class="container-fluid">
    <div class="row">
    <div class="mt-3 col-md-8 offset-md-2 mb-5" >
    
    <form action="repair_code.php" method="POST">
    <h2 class="text-light">Add Problem/Issue</h2>
        <div class="form-group">
          <label for=""></label>
          <input type="text" class="form-control prob" required name="repproblem" id="prob" placeholder="Write Problem Here">
          </div>
        <div class="form-group">
        <label for=""></label>
          <input type="text" class="form-control amount" required name="repamount" id="amount" placeholder="Write Problem Amount">
          
          </div>
        <button type="submit" id="btn-rep" name="btn_rep" class="btn btn-success ">Add</button>
    </form>
    
  
    </div>
    
    <div class="col-md-12">
    <table id="" class="table table-striped table-dark table-hover table-bordered example" style="width:100%;">
    <thead>
    <tr>
    <th> ID </th>
    <th> Problem Name </th>
    <th> Problem Amount </th>
    <th> Update </th>
    <th> Delete </th>
    </tr>
    </thead>
    <?php

        $sql = "select * from repairprob";
        $select = mysqli_query($connect,$sql);
        $result = mysqli_num_rows($select);
        if($result > 0){
            while($row = mysqli_fetch_assoc($select)){
                echo " <tr><td style=color:white;>" .$row['repair_id']. "</td>
                <td style=color:white;>" .$row['problem_name']. "</td>
                <td style=color:white;>" . $row['amount'] . "</td>
                <td> <button class='btn btn-success btn_update_problem' type='submit' name='' id=''> Update </button> </td>
                <td> <button class='btn btn-danger btn_delete_problem' type='submit' name='' id=''> Delete </button> </td>
                
                </tr>"; 
            }
        }
        
    ?>

    </table>
  
    </div>




   </div>
   <!-- update problem Modal -->
   <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Update Problem</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <form action="update_company.php" method="POST">
                <div class="form-group">
                    <label for="id" class="control-label"> ID </label>
                    <input type="text" class="form-control pb_height-35 reverse repairid " readonly name="repair_id" id="repair_id" value="">
                    
                </div>
                <div class="form-group">
                <label for="company" class="control=label"> Problem Name </label>
                    <input type="text" class="form-control  pb_height-35 pb_height-35 reverse problem1 prob" name="problem_name" id="problem_name" value="" >
                    <div class="invalid-feedback uerror"> Company Is required </div>
                </div>
                <div class="form-group">
                <label for="amount" class="control-label"> Problem Amount </label>
                    <input type="text" class="form-control  pb_height-35 pb_height-35 reverse amount1 amo" name="amount" id="amount" value="">
                    <div class="invalid-feedback uerror"> Amount Is required </div>
                </div>
            </form>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" id="" name="" class="btn btn-success update_data_problem" >Update</button>
              </div>

            </div>
          </div>
        </div>

        <!-- Delete problem Modal -->
   <div class="modal myModal_delete_prob" id="">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Delete Problem</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <input type="hidden" class="form-control repair_id"  name="repair_id" id="repair_id" value="">
              <h5 class="text-danger"> Are you sure you want to delete this problem? </h5>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <button type="submit" id="" name="" class="btn btn-danger delete_data_problem" >Yes</button>
              </div>

            </div>
          </div>
        </div>
   </div>
    

    

<?php include ('footer.php'); ?>

    