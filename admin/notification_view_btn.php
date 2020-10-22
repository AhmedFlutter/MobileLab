<?php
session_start();
require_once('livechat/database_connection.php');

function debug($arg)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
}
$sql = 'SELECT * FROM `notification` where to_user_id =' . $_SESSION['admin']['id'] . ' ORDER BY notification_id DESC';

$statement = $connect->prepare($sql);
$statement->execute();

// $sql2 = "UPDATE `notification` SET `status`=0 WHERE";
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$output = '';

foreach ($result as $row) {
    $uri = $row['uri'];
    $title = $row['title'];
    $name = $row['user_name'];
    $output .= '<li>';
    $output .= '<i class="fa fa-user" style="margin-right: 6px;" aria-hidden="true"></i>&nbsp;';
    $output .= "<h3 style='font-weight:300px; !important'>$name</h3><br>";
    $output .= "<a style='text-decoration:none; color:#000;' href='$uri'>$title</a>";
    $output .= "</li>";
}

$id = $_SESSION['admin']['id'];
$sql2 = "UPDATE `notification` SET `status`=0 WHERE `to_user_id`= $id and `status`=1";
$result2 = $connect->prepare($sql2);
$result2->execute();

echo $output;


?>
