
<html> 
<head>
<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
</head>
<body>

<?php

if(isset($_GET['msg'])) {
    echo $_GET['msg'];
}
else if(isset($_GET['success'])) {
    echo $_GET['success'];
}
else if(isset($_GET['error'])) {
    echo $_GET['error'];
}


?>

    
    <form method="post" action="insert_code.php">
    <input type="text" name="company" placeholder="companyname">
    <button type="submit" name="btn_com" > submit </button> 
    
    </form>
    <table >
    <tr>
    <th> ID </th>
    <th> Company Name </th>
    </tr>
    <?php
        include('functions.php');
        $connect = dbconnect();

        $sql = "select * from companyname";
        $select = mysqli_query($connect,$sql);
        $result = mysqli_num_rows($select);
        if($result > 0){
            while($row = mysqli_fetch_assoc($select)){
                echo "<tr><td>" .$row['comp_id']. "</td><td>" .$row['company_name']. "</td></tr>"; 
            }
            echo "</table>";
        }
        

    ?>

    </table>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>