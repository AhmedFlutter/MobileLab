<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['prob_id'])){
            $delete_probid = $_POST['prob_id'];

            if($delete_probid){
               $sql = "Delete FROM repairprob where repair_id = '$delete_probid' ";
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