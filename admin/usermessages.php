<?php 
include ('header.php');
?>
    

    <div class="container-fluid" >
    <div class="row">
    
    <div class="mt-5 col-md-12 ">
  
   
    <h2 class="text-light text-center text-uppercase mb-5">Messages</h2>
       
    </div>
    <div class="col-md-12">
    
    <table class="table table-bordered table-hover table-dark table-striped " id="usermsg" style="width:100%;">
    <thead>
    <tr>
    <th> ID </th>
    <th> Name </th>
    <th> Email </th>
    <th> Sigup User ID </th>
    <th> Message </th>
    <th> Reply </th>
    <th> Delete </th>
    </tr>
    </thead> 
    <tbody id='tbody'>
    <?php    

        $data = fetch_user_messages();
        echo $data;        

    ?>
    <tbody>
    </table>
    <div class="pagination-container">
        <nav>
            <ul class="pagination"> </ul>
        </nav>
    </div>
     </div>
    

    </div>
    </div>

    <div class="modal myModal_delete_msg" id="">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Delete Order</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
              <input type="hidden" class="form-control delete_msg_id"  name="" id="" value="">
              <h5 class="text-danger"> Are you sure you want to delete this message? </h5>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <button type="submit" id="" name="" class="btn btn-danger delete_msg" >Yes</button>
              </div>

            </div>
          </div>
        </div>

        <div class="modal user_msg_reply" id="">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title"> Message Reply</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                    <div class="form-group">
                        <label for="name" class="control-label"> Id </label>
                        <input type="text" readonly class="form-control user_msg_id" name="" id="" >
                    </div>
                   
                    <div class="form-group">
                        <label for="name" class="control-label"> Name </label>
                        <input type="text" class="form-control user_msg_name  name" name="" id="username"/>
                        <div class="invalid-feedback"> Kindly Provide Name </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="email" class="control-label"> Email </label>
                        <input type="email" class="form-control user_msg_email email" name="" id="email" >
                        <div class="invalid-feedback"> Kindly Provide Email </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="email" class="control-label"> Message </label>
                        <input type="textarea"  class="form-control msg1 " id="msg"  name="" value="">
                        <div class="invalid-feedback"> Kindly type Message </div>
                    </div>

               
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
              <div class="form-group">
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                <button type="button" id="send_user_msg" name="" class="btn btn-success send_msg" >Send</button>    
              </div>
              </div>

            </div>
          </div>
        </div>


    </div>
   
    

<?php include ('footer.php'); ?>
        
    <script>

$(document).ready(function(){
        
        setInterval(function(){
            $.ajax({
                url: "userfetch.php",
                method : "post",
                success: function(data) {
                    let data2 = $.parseJSON(data);
                    $("#tbody").html(data2.success);

                
                }
            });
        }, 5000 );
        
        $(document).on('click','.btn_delete_msg',function(){
        $('.myModal_delete_msg').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();

        }).get();
      
        $('.delete_msg_id').val(data[0]);

});

$('.delete_msg').click(function(){
    
    var delete_msg = $('.delete_msg_id').val();
    

    if(delete_msg.length != ""){
    $.ajax({
        type:"POST",
        url :"delete_msg.php",
        data:{"delete_msg":delete_msg},
        dataType: 'JSON',
        success : function(feedback){
            if(feedback.status === "success"){
            alert("Data Deleted");
            window.location = "usermessages.php";
            }
            else if(feedback.status === "error"){
            alert("Data Not Deleted ")
            }

        
        }
    })
    }
});

$(document).on('click','.msg_reply',function(){
        $('.user_msg_reply').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();

        }).get();
      
        $('.user_msg_id').val(data[0]);
        $('.user_msg_name').val(data[1]);
        $('.user_msg_email').val(data[2]);

});     
    
    $(document).on('click','.send_msg',function(){
        

        const name  = $('#username').val();
        const email = $('#email').val();
        const message   = $('#msg').val(); 

        if(name.length == ""){
            $(".name").addClass("is-invalid");
        }
        else{
            $(".name").removeClass("is-invalid");
        }

        if(email.length == ""){
            $(".email").addClass("is-invalid");
        }
        else{
            $(".email").removeClass("is-invalid");
        }

        if(message.length == ""){
            $(".msg1").addClass("is-invalid");
        }
        else{
            $(".msg1").removeClass("is-invalid");
        }
        
        if(name.length != "" && email.length != "" && message.length != ""){
          $.ajax({
            url:'admin_msg_reply_user.php',
            type:'post',
            data:{"name":name,
              "email":email,
              "message":message},
              dataType: 'JSON',
			  	    success : function(feedback){
						if(feedback.status === "success"){
              alert ("Your message has been sent");
              window.location = "usermessages.php";
            }
          }
          });
        }
    });
    
});

   

      
	

</script>