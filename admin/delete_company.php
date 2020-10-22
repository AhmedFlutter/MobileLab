<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['comp_id'])){
            $update_compid = $_POST['comp_id'];

            if($update_compid){
               $sql = "Delete FROM companyname where comp_id = '$update_compid' ";
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