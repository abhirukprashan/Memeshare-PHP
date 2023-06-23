<?php
	$Name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$Host = 'localhost';
    $database = '';
    $user = 'root';
    $pwd = '';

	$conn = new mysqli($Host,$user,$pwd,$database);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(name,email,username,password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$Name, $email, $username, $password);
		$execval = $stmt->execute();
		echo $execval;
		header("Location: gallery.php");
		$stmt->close();
		$conn->close();
	}
