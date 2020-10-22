<?php
	include('functions.php');
	$connect = dbconnect();

	if(isset($_POST['admin_username']) && isset($_POST['admin_password'])){

		$admin_name  = $_POST['admin_username'];
		$admin_password  = $_POST['admin_password'];

		$query  = "SELECT * from signup where username = '$admin_name' and signup_role = 'admin' or email = '$admin_name' OR username = '$admin_name' and signup_role = 'employee' or email = '$admin_name'";
		$select = mysqli_query($connect,$query);
		$result = mysqli_num_rows($select);
		if($result > 0){
			 $row = mysqli_fetch_assoc($select);
			 $user_id = $row['signup_id'];
			 $firstname = $row['fullname'];
			 $username = $row['username'];
			 $email = $row['email'];
			 $userRole = $row['signup_role'];
			 $dbpassword = $row['password'];
			 	if(password_verify($admin_password , $dbpassword)){
			 		$_SESSION['admin']['id']   = $user_id;
					$_SESSION['admin']['name'] = $username;
			 		$_SESSION['admin']['first'] = $firstname;
					$_SESSION['admin']['email'] = $email;
					$_SESSION['admin']['userRole'] = $userRole;
					$connect2 = new PDO("mysql:host=localhost;dbname=mobilelab", "root", "");
					$sub_query = "INSERT INTO login_details (user_id) VALUES ('" . $row['signup_id'] . "')";
					$statement = $connect2->prepare($sub_query);
					$statement->execute();
					$_SESSION['admin']['login_details_id'] = $connect2->lastInsertId();
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
