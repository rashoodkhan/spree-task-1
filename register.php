<?php

	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_error = '<strong>SERVER DOWN!!!</strong>';
	$mysql_db = 'springspree';
	$mysql_table = '';

	if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!@mysql_select_db($mysql_db))
	{
		die($mysql_error);
	}

	if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['password'])&&isset($_POST['reppassword'])&&isset($_POST['college'])&&!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['password'])&&!empty($_POST['reppassword'])&&!empty($_POST['college']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$reppassword = $_POST['reppassword'];
		$college = $_POST['college'];

		if($password!=$reppassword)
			die('Passwords do not match! Click <a href="register.html">here</a> to go back.');

		$password = md5($password);

		$query = "SELECT * FROM `users` WHERE `email` LIKE '$email'";

		if($query_run = mysql_query($query))
		{
			$query_rows = mysql_num_rows($query_run);
			if($query_rows != 0)
			{
				die('Email has already been registered! Click <a href="index.html">here</a> to go login.');
			}
			else
			{
				$query2 = "INSERT INTO $mysql_db.`users` (`id`, `name`, `email`, `phone`, `password`, `college`) VALUES (NULL, '$name', '$email', '$phone', '$password', '$college');";
				
				if($query_run = mysql_query($query2))
				{
					echo 'You have been registered! Click <a href="index.html">here</a> to login.';
					die();
				}
				else
				{
					die('Could not register! Click <a href="register.html">here</a> to go back.');
					
				}
			}
		}
	}
	else
	{
		die('Please enter all the fields! Click <a href="register.html">here</a> to go back.');
	}
	
?>

