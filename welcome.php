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
	
	session_start();
	
	if(isset($_SESSION['id'])&&!empty($_SESSION['id']))
	{
		$id = $_SESSION['id'];
		$query = "SELECT * FROM `users` WHERE `id` LIKE '$id'";
		if($query_run = mysql_query($query))
		{
			if(mysql_num_rows($query_run)!=1)
			{
				die('Could not login! Click <a href="homepage.html">here</a> to go back.');
			}
			else
			{
				$name = mysql_result($query_run, 0, 'name');
				$email = mysql_result($query_run, 0, 'email');
				$phone = mysql_result($query_run, 0, 'phone');
				$college = mysql_result($query_run, 0, 'college');
			}
		}
		else
		{
			die('Could not login! Click <a href="homepage.html">here</a> to go back.');
		}
	}
	else
	{
		die('Please <a href="homepage.html">login</a> to continue.');
	}
		
?>

<!DOCTYPE html>
<html>

<head>
	<title>Welcome!</title>
	<meta charset='UTF-8'>
	<meta name="viewport" content = "width = device-width, initial-scale = 1.0">
	<link type="text/css" rel="stylesheet" href="custom.css"/>
</head>
<body>
	<div id = "profile">
		<table>
			<tr>
				<td colspan = 2 align="right">
					<div id="logout" class="button"><a href="logout.php" target="_self">LogOut!</a></div>
				</td>
			</tr>
			<tr>
				<td align="center"><h2><u>Your personal information</u></h2></td>
			</tr>
			<tr>
				<td id="p_left">
					<p>Name</p>
				</td>
				<td id="p_right">
					<p><?php echo $name ?></p>
				</td>
			</tr>
			<tr>
				<td  id="p_left">
					<p>Email</p>
				</td>
				<td id="p_right">
					<p><?php echo $email; ?></p>
				</td>
			</tr>
			<tr>
				<td  id="p_left">
					<p>Phone</p>
				</td>
				<td id="p_right">
					<p><?php echo $phone; ?></p>
				</td>
			</tr>
			<tr>
				<td  id="p_left">
					<p>College</p>
				</td>
				<td id="p_right">
					<p><?php echo $college; ?></p>
				</td>
			</tr>
			<tr colspan=2 height="500">
				<div id="blank" ></div>
			</tr>
		</table>
	</div>
</body>

</html>