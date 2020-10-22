<?php 
  include ('header.php');

  ?>

    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <h3 class="text-light text-center pt-5"> FeedBack </h3>
    </div>    
    
    <div class="col-md-12 pt-5">
    <table id="" class="table table-striped table-dark table-hover table-bordered " style="width:100%;">
    <thead>
    <tr>
    <th> ID </th>
    <th> Name </th>
    <th> Email </th>
    <th> Feedback </th>
    <th> Signup ID </th>
    </tr>
    </thead>
    <?php

        $sql = "select * from feedback";
        $select = mysqli_query($connect,$sql);
        $result = mysqli_num_rows($select);
        if($result > 0){
            while($row = mysqli_fetch_assoc($select)){
                echo " <tr><td style=color:white;>" .$row['feedback_id']. "</td>
                <td style=color:white;>" . $row['name']. "</td>
                <td style=color:white;>" . $row['email'] . "</td>
                <td style=color:white;>" . $row['feedback'] . "</td>
                <td style=color:white;>" . $row['signup_id'] . "</td>
                <td> <button class='btn btn-danger btn_delete_feedback' type='submit' name='' id=''> Delete </button> </td>
                
                </tr>"; 
            }
            
        }
    ?>

    </table>
  
    </div>
</div>
        <!-- Delete problem Modal-->
   <div class="modal myModal_delete_feedback" id="">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Delete Order</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <input type="hidden" class="form-control delete_feedback_id"  id="delete_feedback_id" value="">
              <h5 class="text-danger"> Are you sure you want to delete this problem? </h5>
              </div>

               <!-- Modal footer --> 
               <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <button type="submit" id="" name="" class="btn btn-danger delete_feedback" >Yes</button>
              </div>

            </div>
          </div>
        </div>

   </div>
    

    

<?php include ('footer.php'); ?>

<script>

$(document).on('click','.btn_delete_feedback',function(){
		$('.myModal_delete_feedback').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();

        }).get();
      
        $('.delete_feedback_id').val(data[0]);

});

$('.delete_feedback').click(function(){
	
	var delete_feedback = $('.delete_feedback_id').val();
	

	if(delete_feedback.length != ""){
	$.ajax({
		type:"POST",
		url :"delete_feedback.php",
		data:{"delete_feedback":delete_feedback},
		dataType: 'JSON',
		success : function(feedback){
			if(feedback.status === "success"){
			alert("Data Deleted");
			window.location = "show_feedback.php";
			}
			else if(feedback.status === "error"){
			alert("Data Not Deleted ")
			}

		
		}
    })
    
	}
});

  </script>   