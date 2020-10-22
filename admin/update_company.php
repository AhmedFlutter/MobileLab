<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['company_name']) && isset($_POST['comp_id'])){
            $update_compid = $_POST['comp_id'];
            $update_company = $_POST['company_name'];

            if($update_company){
               $sql = "update companyname set company_name='$update_company' where comp_id = '$update_compid'";
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