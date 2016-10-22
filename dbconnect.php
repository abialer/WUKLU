<?php
	$mysqli = new mysqli('localhost', 'GH', 'GH', 'GH');

	if($mysqli -> connect_errno){
        printf("Connection Failed: %s\n", $mysqli -> connect_errno);
        exit;
    }
?>