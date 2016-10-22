<?php
$mysqli = new mysqli('localhost', 'shelter', 'shelter_$', 'shelter');

if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}
?>
