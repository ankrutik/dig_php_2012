<?php
	ini_set('display_errors','1');
	if(!isset($_SESSION))
	session_start();

	$db_host='localhost';
	$db_user='root';
	$db_name='shopping';

	$conn = mysql_pconnect($db_host, $db_user);
	mysql_select_db($db_name,$conn);
?>