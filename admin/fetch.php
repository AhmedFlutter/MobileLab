<?php
require_once('DataTableClass.php');
$dataTable = new DataTableClass();

$query = "Select * from signup ";
$query2 = 'WHERE fullname LIKE "%'.$_POST["search"]["value"].'%"';
$dataTableFunc = $dataTable->request($query,$query2,$_POST,"signup_id");

$data = [];

$filteredRows = $dataTableFunc->rowCount();
$category = '';
while ($row = $dataTableFunc->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['signup_id'];
         $subArray = [];
         $subArray[] = $row['signup_id'];
         $subArray[] = $row['fullname'];
         $subArray[] = $row['signup_role'];
         $subArray[] = "<button class='btn btn-primary edit' data-id='$id' data-toggle='modal' data-target='#editForm'>Edit</button>";
         $subArray[] = "<button class='btn btn-danger delete' data-id='$id'>Delete</button>";
     $data[] = $subArray;
 }
 $output = [
     'draw'              => intval($_POST['draw']),
     'recordsTotal'      => $filteredRows,
     'recordsFiltered'   => $filteredRows,
     'data'              => $data
 ];

 echo json_encode($output);
?>
