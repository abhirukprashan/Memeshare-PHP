<?php
	$Host = 'localhost';
    $database = '';
    $user = 'root';
    $pwd = '';

	$conn = new mysqli($Host,$user,$pwd,$database);
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	}
    echo "";
?>