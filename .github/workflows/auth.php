<?php
$db_host = 'fdb1030.awardspace.net'; // Server Name
$db_user = '4624910_kiwibase'; // Username
$db_pass = '01010202kiwikodes'; // Password
$db_name = '4624910_kiwibase'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
?>