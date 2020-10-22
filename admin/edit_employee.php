<?php
include('functions.php');
require_once('livechat/database_connection.php');
$id = $_POST['id'];
$fullname = $_POST['firstname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$userRole = $_POST['userRole'];


$sql = "UPDATE `signup` SET `fullname`='$fullname',`username`='$username',`email`='$email',`password`='$password',`signup_role`='$userRole' WHERE signup_id = $id";

$result = $connect->prepare($sql);
$result->execute();

echo json_encode(['status' => 'success']);

?>
