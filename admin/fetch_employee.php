<?php

include('functions.php');

require_once('livechat/database_connection.php');
$id = $_POST['id'];
$sql = "SELECT * from signup where signup_id=$id";

$result = $connect->prepare($sql);
$result->execute();

$row = $result->fetch(PDO::FETCH_ASSOC);

$array = [
    'fullname' => $row['fullname'],
    'username' => $row['username'],
    'email'    => $row['email'],
    'signup_role' => $row['signup_role']
];

echo json_encode($array);
?>
