<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['delete_order'])){
            $delete_order = $_POST['delete_order'];

            if($delete_order){
               $sql = "Delete FROM repair_order where order_repairid = '$delete_order' ";
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
