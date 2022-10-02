<?php
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','mydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into members(firstname, lastname, email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "registration sucessfull.....";
		$stmt->close();
		$conn->close();
	}
?>