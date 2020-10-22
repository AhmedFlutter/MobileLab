<?php
	session_start();

	function dbconnect(){
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$dbname="mobilelab";

		$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

		return $conn;
	}

	function debug($arg)
	{
		echo '<pre>';
		print_r($arg);
		echo '</pre>';

	}

	function insertImages($data)
	{
		$upload_directory = "uploads/";

		$filename = $data['name'];
		$upload_directory .= $filename;
		$size = $data['size'];
		$tmp_dir = $data['tmp_name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);

		if ($ext == 'jpg' or $ext == 'jpeg' or $ext == 'png') {
			$uploaded = move_uploaded_file($tmp_dir, $upload_directory);
			if ($uploaded) {
				return 	$upload_directory;
			}
		} else {
			return false;
		}
	}

	function addUser($userRole)
	{
		$connect = dbconnect();

		if(isset($_POST['firstname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['retypepass'])){

			$fname  = $_POST['firstname'];
			$uname  = $_POST['username'];
			$uemail = $_POST['email'];
			$upass  = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$retypepass = $_POST['retypepass'];

			if(filter_var($uemail, FILTER_VALIDATE_EMAIL)) {

				if(password_verify($retypepass, $upass)){
				$checkemail = "SELECT  * from signup where username = '$uname' OR email = '$uemail' " ;
				$select = mysqli_query($connect,$checkemail);
				$result = mysqli_num_rows($select);
					if($result > 0){
						$row = mysqli_fetch_assoc($select);
						$user = $row['username'];
						$email = $row['email'];
						if($user == $uname && $email == $uemail){
							echo json_encode(['status' => 'euerror']);
						}
						elseif($user == $uname){
							echo json_encode(['status' => 'uerror' , 'message' => 'Try another username']);
						}
						elseif($email == $uemail){
							echo json_encode(['status' => 'error' , 'message' => 'Sorry this email is already taken']);
						}
					}

				else{
					$sql  = "INSERT into signup (fullname,username,email,password,signup_role) VALUES (?,?,?,?,?)";
					$stmt = mysqli_prepare($connect,$sql);
					mysqli_stmt_bind_param($stmt,'sssss', $fname, $uname, $uemail, $upass,$userRole);
					if(mysqli_stmt_execute($stmt)){
						$_SESSION['created'] = "Your Account Has been Created SuccessFully !";
						echo json_encode(['status' => 'success']);
					}
				}
			}
		}
			else{
				echo json_encode(['status' => 'email_validate_error' , 'message' => 'Invalid Email']);
			}
		}
	}


	function fetch_user_messages(){
		$connect = dbconnect();
        $sql = "select * from usermsg ORDER By user_id DESC";
        $select = mysqli_query($connect,$sql);
		$result = mysqli_num_rows($select);
		$data = "";
        if($result > 0){
            while($row = mysqli_fetch_assoc($select)){
                $data .= "<tr><td style=color:white;>" .$row['user_id']. "</td>
                <td style=color:white;>" .$row['name']. "</td>
                <td style=color:white;>" .$row['email']. "</td>
                <td style=color:white;>" .$row['signup_id']. "</td>
                <td style=color:white;>" .$row['message']. "</td>
                <td> <button class='btn btn-success msg_reply' type='submit' name='' id=''> Reply </button> </td>
                <td> <button class='btn btn-success btn_delete_msg'  type='submit' name='' id=''> Delete </button> </td>

                </tr>";
			}
		}
		return $data;
	}
?>
