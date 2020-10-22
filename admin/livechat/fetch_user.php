<?php

session_start();

//fetch_user.php
function debug($arg)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
}
include('database_connection.php');

$query = "
SELECT * FROM signup
WHERE signup_id != '".$_SESSION['admin']['id']."' and signup_role = 'normal_user'
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <td style="color:white">Name</td>
  <td style="color:white">Status</td>
  <td style="color:white">Action</td>
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
    <td style="color:white;">' . $row['fullname'] . ' '. count_unseen_message($row['signup_id'], $_SESSION['admin']['id'], $connect).'</td>
    <td>' . $status . '</td>
    <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="' . $row['signup_id'] . '" data-tousername="' . $row['username'] . '">Start Chat</button></td>
    </tr>
    ';

}

$output .= '</table>';

echo $output;
