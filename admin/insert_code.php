<?php
    include('functions.php');
    $connect = dbconnect();

    if(isset($_POST['btn_com'])){
        if(isset($_POST['company'])){
            $company = $_POST['company'];
            if($company !== ""){
                $sql  = "INSERT into companyname (company_name) VALUES (?)";
			    $stmt = mysqli_prepare($connect,$sql);
                mysqli_stmt_bind_param($stmt,'s', $company);
                if(mysqli_stmt_execute($stmt)){
                    $success = "Data Inserted";
                    header("location: add_company.php?success=". $success);
                } 
                else{
                    $error = "Data not inserted";
                    header("location: add_company.php?error=". $error);
                }
            }
        }
    }


?>