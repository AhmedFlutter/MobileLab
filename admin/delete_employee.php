
<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['id'])){
            $delete_order = $_POST['id'];

            if($delete_order){
               $sql = "Delete FROM signup where signup_id = '$delete_order' ";
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
