<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['delete_feedback'])){
            $delete_feedback = $_POST['delete_feedback'];

            if($delete_feedback){
               $sql = "Delete FROM feedback where feedback_id = '$delete_feedback' ";
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