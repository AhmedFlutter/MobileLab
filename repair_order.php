<?php
    include('functions.php');
    $connect = dbconnect();

    

        if(isset($_POST['btntype']) && isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['compval']) && isset($_POST['modelno']) && isset($_POST['probval']) && isset($_POST['address']) && isset($_POST['probamo'])){
            $item = $_POST['btntype'];
            $user_name = $_POST['name'];
            $user_contact = $_POST['contact'];
            $company_name = $_POST['compval'];
            $model_no = $_POST['modelno'];
            $problem_name = $_POST['probval'];
            $address = $_POST['address'];
            $problem_amount = $_POST['probamo'];
            $id =  $_SESSION['id'];
                
            $sql  = "INSERT into repair_order (item,name,phonenumber,company,modelno,problem,address,amount,signup_id) VALUES (?,?,?,?,?,?,?,?,?)";
			    $stmt = mysqli_prepare($connect,$sql);
                mysqli_stmt_bind_param($stmt,'ssssssssi', $item,$user_name,$user_contact,$company_name,$model_no,$problem_name,$address,$problem_amount,$id);
                if(mysqli_stmt_execute($stmt)){
                    echo json_encode(['status' => 'success']);
                } 
                else{
                    echo json_encode(['status' => 'success']);
                }
            }
        


?>