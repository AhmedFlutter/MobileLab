<?php
    include('functions.php');
    $connect = dbconnect();

    if(isset($_POST['btn_rep'])){
        if(isset($_POST['repproblem']) && (isset($_POST['repamount'])) ){
            $problem = $_POST['repproblem'];
            $amount = $_POST['repamount'];

            if($problem !== "" && $amount !== ""){
                $sql  = "INSERT into repairprob (problem_name,amount) VALUES (?,?)";
			    $stmt = mysqli_prepare($connect,$sql);
                mysqli_stmt_bind_param($stmt,'si', $problem,$amount );
                if(mysqli_stmt_execute($stmt)){
                    $success = "Data Inserted";
                    header("location: add_problem.php?success=". $success);
                }
                else{
                    $error = "Data not inserted";
                    header("location: add_problem.php?error=". $error);
                }
            }
        }
    }


?>
