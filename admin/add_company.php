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
    
    <div class="mt-5 col-md-8 offset-md-2 mb-5">
  
    <form class="mt-3" action="insert_code.php" method="POST">
    <h2 class="text-light">Add Companies</h2>
        <div class="form-group">
          <label for=""></label>
          <input type="text" class="form-control" name="company" required id="" placeholder="Write Company Name Here">
        </div>
        <button type="submit" name="btn_com" class="btn btn-success">Add</button>
    </form>
    </div>
    <div class="col-md-12">
    <table id="" class="table table-bordered table-hover table-dark table-striped example" style="width:100%;">
    <thead>
    <tr>
    <th> ID </th>
    <th> Company Name </th>
    <th> Update </th>
    <th> Delete </th>
    </tr>
    </thead>
    <?php
       

        $sql = "select * from companyname";
        $select = mysqli_query($connect,$sql);
        $result = mysqli_num_rows($select);
        if($result > 0){
            while($row = mysqli_fetch_assoc($select)){
                echo "<tr><td style=color:white;>" .$row['comp_id']. "</td>
                <td style=color:white;>" .$row['company_name']. "</td>
                <td> <button class='btn btn-success btn_update_company' type='submit' name=''> Update </button> </td>
                <td> <button class='btn btn-danger btn_delete_company' type='submit' name='' id=''> Delete </button> </td>
                
                </tr>"; 
            }
        }
        

    ?>

    </table>
    </div>
    </div>

    <!-- ADD COmpnay Edit -->
    <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Delete Company</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <form action="update_company.php" method="POST">
                <div class="form-group">
                    <label for="id" class="control-label"> ID </label>
                    <input type="text" class="form-control " readonly name="comp_id" id="comp_id" value="">
                    
                </div>
                <div class="form-group">
                <label for="company" class="control-label"> Company Name </label>
                    <input type="text" class="form-control   company" name="company_name" id="company_name" >
                    <div class="invalid-feedback uerror"> Company Is required </div>
                </div>
            </form>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" id="updatedata" name="updatedata" class="btn btn-success" >Update</button>
              </div>

            </div>
          </div>
        </div>

        <!-- ADD COmpnay Delete -->
    <!-- The Modal -->
      <div class="modal myModaldelete" id="">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <input type="hidden" class="form-control delete_comp_id"  name="comp_id" id="" value="">
              <h5 class="text-danger"> Are u sure you want to delete this company? </h5>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <button type="submit" id="deletedata" name="deletedata" class="btn btn-danger" > Yes </button>
              </div>

            </div>
          </div>
        </div>
    </div>

    

<?php include ('footer.php'); ?>
        
   