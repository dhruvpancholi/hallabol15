<?php

$db_hostname = '127.0.0.1';
$db_database = 'hallabol';
$db_username = 'root';
$db_password = '';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if(!$db_server) die("Unable to connect to MySQL: ".mysql_error());
mysql_select_db($db_database) or die("Unable to select database: ".mysql_error());

function run_query($query){
	$result = mysql_query($query);
	if(!$result) die("Database access failed: ".mysql_error());
	return $result;
}
?>
