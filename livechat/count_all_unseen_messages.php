<?php
session_start();
require_once('database_connection.php');

function count_all_unseen_message($to_user_id, $connect)
{
    $query = "
    SELECT * FROM chat_message
    WHERE to_user_id = '$to_user_id'
    AND status = '1'
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $count = $statement->rowCount();
    $output = '';
    if ($count > 0) {
        $output = '<span class="label label-success" style="background:##2ecc71 !important;" >' . $count . '</span>';
    }
    return $output;
}

echo count_all_unseen_message($_SESSION['id'], $connect);



?>
