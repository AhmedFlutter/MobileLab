<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['delete_resell_order'])){
            $delete_resell_order = $_POST['delete_resell_order'];

            if($delete_resell_order){
               $sql = "Delete FROM resell_order where resell_id = '$delete_resell_order' ";
               $result =  mysqli_query($connect,$sql);
                if($result){
                    echo json_encode(['status' => 'success']);
                }
                else{
                    echo json_encode(['status' => 'error']);
                }
            }
        }
