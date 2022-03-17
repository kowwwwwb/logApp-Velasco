<?php

$host="localhost";
$user="root";
$password="";
$db="convelpas";

	// Create Connection
	$conn = mysqli_connect($host, $user, $password, $db);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}
	
?>