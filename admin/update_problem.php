<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['prob_update_id']) && isset($_POST['prob_name']) && isset($_POST['prob_amount'])){
            
            $update_prob_id = $_POST['prob_update_id'];
            $update_prob_name = $_POST['prob_name'];
            $update_prob_amount = $_POST['prob_amount'];

            $sql = "update repairprob set problem_name='$update_prob_name' , amount='$update_prob_amount' where repair_id = '$update_prob_id'";
            $result =  mysqli_query($connect,$sql);
            if($result)
            {
                echo json_encode(['status' => 'success1']);
            }
            else
            {
                echo json_encode(['status' => 'error1']);
            }
        }
    
?>