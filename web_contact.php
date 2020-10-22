<?php 
	include ('functions.php');
	$connect = dbconnect();
	
	if(isset($_POST['username']) && (isset($_POST['email'])) && (isset($_POST['message']))){

	$name = $_POST['username'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	

		$query = "INSERT INTO `usermsg` (name ,email , message ) VALUES ('$name', '$email', '$message')";
		$result =  mysqli_query($connect,$query);
		
		if(isset($result)){
			echo json_encode(['status' => 'success']);
		}
		else{
			echo json_encode(['status' => 'error']);
		}
	}
	

?>