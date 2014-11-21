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

?>