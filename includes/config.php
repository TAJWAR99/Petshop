<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "petshop";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
