<?php
    include('functions.php');
    $connect = dbconnect();

    $file = $_FILES['image'];
    $data = [];
    foreach($file as $index => $file_info){
        if(is_array($file_info)){
            foreach($file_info as $innerIndex => $value){
                $data[$innerIndex][$index] = $value;
            }
        }
    }

    $images = [];
    for($i=0; $i < count($data); $i++) {
        $uploaded = insertImages($data[$i]);
        $images[] = $uploaded;
   }
   $imagesserialize = serialize($images);


    $item = $_POST['btntype'];
    $user_name = $_POST['username'];
    $user_contact = $_POST['phonenumber'];
    $company_name = $_POST['companyname'];
    $model_no = $_POST['modelno'];
    $problem_name = $_POST['problem'];
    $address = $_POST['address'];
    $expected_amount = $_POST['expected_amount'];
    $id =  $_SESSION['id'];

    $sql = "insert into resell_order (item,name,phone_number,company_name,model_no,problem,address,images,expect_amount,signup_id) values ('$item','$user_name','$user_contact','$company_name','$model_no','$problem_name','$address','$imagesserialize','$expected_amount','$id')";

    if($query = mysqli_query($connect,$sql)){
        echo json_encode(['status' => 'success']);
    }
    else{
        echo json_encode(['status' => 'error']);
    }






 ?>




