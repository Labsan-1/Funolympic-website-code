<?php
 $email = $_POST['email'];
 $password = $_POST['password'];

$con = new mysqli("localhost","root","","mydatabase");
if($con->connect_error) {
	die("Failed to connect : ".$con->connect_error);
} else {
	$stmt = $con->prepare("select * from members where email = ?");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows>0){
		$data = $stmt_result->fetch_assoc();
		if($data['password']===$password){
			echo "<script>window.open('404.html','_self')</script>";
		} else {
			echo "<script>window.alert('Invalid user')</script>";
		}

	}else {
		echo "<script>window.alert('Invalid user')</script>";
	}
}

 ?>
