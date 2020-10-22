<?php


include ('header.php');



$user_registered = "select count(signup_id) As totaluser from signup where signup_role = 'normal_user' ";
  $result = mysqli_query($connect,$user_registered);
  $values = mysqli_fetch_assoc($result);
  $num_rows = $values['totaluser'];
 
$total_admin = "select count(signup_id) As totaladmin from signup where signup_role = 'admin' ";
  $result = mysqli_query($connect,$total_admin);
  $values = mysqli_fetch_assoc($result);
  $num_rows1 = $values['totaladmin'];
 
$total_employee = "select count(signup_id) As totalemployee from signup where  signup_role = 'employee' ";
  $result = mysqli_query($connect,$total_employee);
  $values = mysqli_fetch_assoc($result);
  $num_rows2 = $values['totalemployee'];

  $total_repair = "select count(order_repairid) As totalrepairorder from repair_order ";
  $result = mysqli_query($connect,$total_repair);
  $values = mysqli_fetch_assoc($result);
  $num_rows3 = $values['totalrepairorder'];

  $total_resell = "select count(resell_id) As totalresellorder from resell_order";
  $result = mysqli_query($connect,$total_resell);
  $values = mysqli_fetch_assoc($result);
  $num_rows4 = $values['totalresellorder'];

  $completed_repair = "select count(order_repairid) As completerepair from repair_order where  status = 'completed'  ";
  $result = mysqli_query($connect,$completed_repair);
  $values = mysqli_fetch_assoc($result);
  $num_rows5 = $values['completerepair'];

  $completed_resell = "select count(resell_id) As completeresell from resell_order where  status ='Recieved'  ";
  $result = mysqli_query($connect,$completed_resell);
  $values = mysqli_fetch_assoc($result);
  $num_rows6 = $values['completeresell'];

  $feedback = "select * from feedback";
  $result = mysqli_query($connect,$feedback);
  $values = mysqli_fetch_assoc($result);
  $feedback = $values['feedback'];
  $name = $values['name'];




?>
<div class="container-fluid">
<h1 class="text-light">Dashboard</h1>
    <div class="row mt-5">
    
    <div class="col-md-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                   
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">User Registered </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php if(isset($num_rows)) echo $num_rows ?></div>
                    </div>
                  
                    <div class="col-auto">
                    <i class="fa fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-md-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    
                  <div class="col mr-2">
                    
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Total Admins </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php if(isset($num_rows1)) echo $num_rows1 ?></div>
                    </div>
                    
                    <div class="col-auto">
                    <i class="fa fa-user fa-2x text-gray-300"></i>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
        

            <div class="col-md-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
          
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Employee  </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php if(isset($num_rows2)) echo $num_rows2 ?></div>
                  </div>
          
                    <div class="col-auto">
                    <i class="fa fa-user fa-2x text-gray-300"></i>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>

       <div class="row mt-5">
    
    <div class="col-md-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                   
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Re-Sell Order Pending</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php if(isset($num_rows4)) echo $num_rows4 ?></div>
                    </div>
                  
                    <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  
                  </div>
                </div>
              </div>
        </div>

        <div class="col-md-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    
                  <div class="col mr-2">
                    
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Repair Order Pending </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php if(isset($num_rows3)) echo $num_rows3 ?></div>
                    </div>
                    
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
         </div>

         <div class="row mt-5">
         <div class="col-md-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
          
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Completed Repair Orders</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php if(isset($num_rows5)) echo $num_rows5 ?></div>
                  </div>
          
                    <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
          
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Received Resell Orders</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php if(isset($num_rows6)) echo $num_rows6 ?></div>
                  </div>
          
                    <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>


         </div>
    
    
   


 

    <div class="row mt-5">
    <div class="  col-md-6">
    <div class="card shadow ">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-danger">Daily Customer Feedback </h6>
                </div>
                <div class="card-body">
                <?php if(isset($feedback)) echo $feedback ?>
                <div class="name mt-3">
                  User Name: <?php if(isset($name)) echo $name ?>
                </div>
                </div>

              </div>
              </div>
              </div>
              </div>

<?php include('footer.php'); ?>

