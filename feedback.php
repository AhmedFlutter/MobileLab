<?php
	include ('functions.php');
	$connect = dbconnect();

	if(isset($_POST['name']) && (isset($_POST['email'])) && (isset($_POST['feedback']))){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];
	$id =  $_SESSION['id'];

		$query = "INSERT INTO `feedback` (name ,email , feedback ,signup_id) VALUES ('$name', '$email', '$feedback','$id')";
		$result =  mysqli_query($connect,$query);

		if(isset($result)){
			echo json_encode(['status' => 'success']);
		}
		else{
			echo json_encode(['status' => 'error']);
		}
	}


?>
