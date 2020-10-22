<?php
	include('functions.php');
	$connect = dbconnect();

	if(isset($_POST['username']) && isset($_POST['userpassword'])){

		$uname  = $_POST['username'];
		$password  = $_POST['userpassword'];

		$query  = "SELECT * from signup where username = '$uname' OR email = '$uname' ";
		$select = mysqli_query($connect,$query);
		$result = mysqli_num_rows($select);
		if($result > 0){
			 $row = mysqli_fetch_assoc($select);
			 $user_id = $row['signup_id'];
			 $firstname = $row['fullname'];
			 $username = $row['username'];
			 $email = $row['email'];
			 $dbpassword = $row['password'];
			 	if(password_verify($password, $dbpassword)){
			 		$_SESSION['id']   = $user_id;
			 		$_SESSION['name'] =	$username;
			 		$_SESSION['first'] = $firstname;
					$_SESSION['email'] = $email;
					$connect2 = new PDO("mysql:host=localhost;dbname=mobilelab", "root", "");
					$sub_query = "INSERT INTO login_details (user_id) VALUES ('" . $row['signup_id'] . "')";
					$statement = $connect2->prepare($sub_query);
					$statement->execute();
					$_SESSION['login_details_id'] = $connect2->lastInsertId();
					echo json_encode(['status' => 'success']);
			 	}
			 	else{
			 	echo json_encode(['status' => 'passwordError' , 'message' => 'your Email or Password is wrong']);
			 	}
		}
		else{
				echo json_encode(['status' => 'emailError' , 'message' => 'your Email or Password is wrong']);
		}
	}





?>
