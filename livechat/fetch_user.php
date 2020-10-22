<?php

//fetch_user.php
function debug($arg)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
}
include('database_connection.php');

session_start();

$query = "
SELECT * FROM signup
WHERE signup_id != '".$_SESSION['id']."' and signup_role = 'admin'
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <td>Name</td>
  <td>Status</td>
  <td>Action</td>
 </tr>
';

foreach($result as $row)
{
    $status = '';
    $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
    $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
    $user_last_activity = fetch_user_last_activity($row['signup_id'], $connect);
    if ($user_last_activity > $current_timestamp) {
        $status = '<span class="btn btn-success">Online</span>';
    } else {
        $status = '<span class="btn btn-danger">Offline</span>';
    }
    $output .= '<tr>
    <td>' . $row['fullname'] . ' '. count_unseen_message($row['signup_id'], $_SESSION['id'], $connect).'</td>
    <td>' . $status . '</td>
    <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="' . $row['signup_id'] . '" data-tousername="' . $row['username'] . '">Start Chat</button></td>
    </tr>
    ';

}

$output .= '</table>';

echo $output;
