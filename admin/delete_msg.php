<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['delete_msg'])){
            $delete_msg = $_POST['delete_msg'];

            if($delete_msg){
               $sql = "Delete FROM usermsg where user_id = '$delete_msg' ";
               $result =  mysqli_query($connect,$sql);
                if($result){
                    echo json_encode(['status' => 'success']);
                }
                else{
                    echo json_encode(['status' => 'error']);
                }
            }
        }
    
?>