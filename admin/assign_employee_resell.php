<?php

include('functions.php');
require_once('livechat/database_connection.php');
$id = $_POST['assign_employee'];
$resell_id = $_POST['resell_id'];
$admin_id = $_SESSION['admin']['id'];
$admin_name = $_SESSION['admin']['first'];
$phone_number = $_POST['phonenumber'];
if(!empty($id))
{
    $sqlEmployee = "Select * from signup where signup_id = $id";

    $resultSelect = $connect->prepare($sqlEmployee);
    $resultSelect->execute();
    $name = '';

    if($resultSelect->rowCount() > 0) {
        $row = $resultSelect->fetch(PDO::FETCH_ASSOC);
        $name = $row['fullname'];
    }

    $sql = "UPDATE `resell_order` SET `employee_id` = $id, `employee_name` = '$name', `admin_id` = $admin_id, `admin_name` = '$admin_name', `status` = 'pending' WHERE `resell_id` = $resell_id";

    $result = $connect->prepare($sql);

    $result->execute();

    if($result->rowCount() === 1) {

        $url = 'resell_employee_order_show.php';
        $title = $_POST['message'];
        $notification = notificationInsert($id, $url,$title,$connect);
        if($notification === 1) {

            $data = array(
                ':to_user_id'  => $_POST['signup_id'],
                ':from_user_id'  => $_SESSION['admin']['id'],
                ':chat_message'  => "Your order for resell has been recieved Our team member $name will contact you on your provided number $phone_number",
                ':status'   => '1'
            );

            $query = "INSERT INTO chat_message
            (to_user_id, from_user_id, chat_message, status)
            VALUES (:to_user_id, :from_user_id, :chat_message, :status)
            ";

            $statement = $connect->prepare($query);

            $statement->execute($data);

            if($statement->rowCount() === 1)
            {
                header("location:resell_order_show.php?success=Employee Assign Successfully");
            }

        }

    }
    else
    {
        header("location:resell_order_show.php?error=This Employee has already Assigned");
    }
}
