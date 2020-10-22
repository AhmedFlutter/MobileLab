<?php
include('functions.php');
require_once('livechat/database_connection.php');
$id = $_POST['assign_employee'];
$repair_id = $_POST['repair_id'];
$phone_number = $_POST['phonenumber'];
$admin_id = $_SESSION['admin']['id'];
$admin_name = $_SESSION['admin']['first'];
if (!empty($id)) {
    $sqlEmployee = "Select * from signup where signup_id = $id";

    $resultSelect = $connect->prepare($sqlEmployee);
    $resultSelect->execute();
    $name = '';

    if ($resultSelect->rowCount() > 0) {
        $row = $resultSelect->fetch(PDO::FETCH_ASSOC);
        $name = $row['fullname'];
    }

    $sql = "UPDATE `repair_order` SET `employee_id` = $id, `employee_name` = '$name', `admin_id` = $admin_id, `admin_name` = '$admin_name', `status` = 'pending' WHERE `order_repairid` = $repair_id";

    $result = $connect->prepare($sql);

    $result->execute();
    if ($result->rowCount() === 1) {
        $url = 'repair_employee_order_show.php';
        $title = $_POST['message'];
        $notification = notificationInsert($id, $url, $title, $connect);
        if ($notification === 1) {
            $data = array(
                ':to_user_id'  => $_POST['signup_id'],
                ':from_user_id'  => $_SESSION['admin']['id'],
                ':chat_message'  => "Your order for repair mobile has been recieved Our team member $name will contact you on your provided number $phone_number",
                ':status'   => '1'
            );

            $query = "INSERT INTO chat_message
            (to_user_id, from_user_id, chat_message, status)
            VALUES (:to_user_id, :from_user_id, :chat_message, :status)
            ";

            $statement = $connect->prepare($query);

            $statement->execute($data);

            if ($statement->rowCount() === 1) {
                header("location:repair_order_show.php?success=Employee Assign Successfully");
            }
        }
    } else {
        header("location:repair_order_show.php?error=This Employee has already Assigned");
    }
}
