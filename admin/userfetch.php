<?php 

include('functions.php');
$data = fetch_user_messages();

echo json_encode(['success' => $data]);

?>