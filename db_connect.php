<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '000';
$dbname = 'whiteboard';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

mysql_select_db($dbname);


    $row = mysql_query("select * from chat");

	$rows = mysql_fetch_array($row);

	echo "<pre>";
	print_r($rows);
	exit;

?>
