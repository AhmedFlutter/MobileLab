<?php
	
	include('functions.php');
	if(isset($_POST['btn']))
	{
		addUser($_POST['userRole']);

	}
	else
	{
		addUser('normal_user');
	}

?>