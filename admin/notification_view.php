<?php
session_start();
require_once('livechat/database_connection.php');

function debug($arg)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
}
$id = $_SESSION['admin']['id'];

$sql = "SELECT * from `notification` where `to_user_id`=$id and `status`=1";

$statement = $connect->prepare($sql);
$statement->execute();

// if($statement->rowCount() > 0)
// {
//     echo $statement->rowCount();
// }

if($statement->rowCount() > 0) {
    echo $statement->rowCount();
}
?>
