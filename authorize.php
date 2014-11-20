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
	
	if(isset($_POST['email'])&&isset($_POST['password'])&&(!empty($_POST['email']))&&(!empty($_POST['password'])))
	{
		$password = md5($_POST['password']);
		$email = $_POST['email'];
		
		$query = "SELECT * FROM `users` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";
		if($query_run = mysql_query($query))
		{
			$query_num_rows = mysql_num_rows($query_run);
			if($query_num_rows!=1)
			{
				echo 'Invalid username/password combination. Click <a href="index.html">here</a> to go back.';
				die();
			}
			else
			{
				$id = mysql_result($query_run, 0, 'id' );
				session_start();
				$_SESSION['id'] = $id;
				header('Location: welcome.php');
			}
		}
		
	}
	else
	{
		die('Please login to continue! Click <a href="homepage.html">here</a> to login.');
		
	}
	
	
?>