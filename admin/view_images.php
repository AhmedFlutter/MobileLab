<?php
    include('functions.php');
    $connect = dbconnect();

        if(isset($_POST['id'])){
            $id = $_POST['id'];

            if($id !== "" ){
                $sql  = "select images from resell_order where resell_id = '$id' ";
                $stmt = mysqli_query($connect,$sql);
                $result = mysqli_num_rows($stmt);
                $data = '';
                if($result > 0)
                {
                    while($row = mysqli_fetch_assoc($stmt)){
                        $images = unserialize($row['images']);
                        echo json_encode(['images' => $images]);
                    }
                }
            }
        }


?>
