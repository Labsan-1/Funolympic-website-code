<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="admintable";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){
	$emails = $_POST['email'];
	$password = $_POST['pass'];
	$query="select * from admintables where email='$emails' and pass='$password'";
	$run=mysqli_query($conn,$query);
	if(mysqli_num_rows($run)>0)
	{
		
		$_SESSION['email'] = $emails;
			header('location:php/display.php');
	}
	else
	{
		echo "<script>window.alert('Invalid user')</script>"
			;
	}
}
/*
if(isset($_POST['submit'])){
	echo $emails = $_POST['email'];
	echo $password = $_POST['pass'];
	
	$sql = "select * from admintables where email ='$emails' and pass = '$password'";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows();
		if ($row == 1){
			echo "login successful";
			$_SESSION['email'] = $emails;
			header('location:php/display.php');
		}else{
			echo "login failed";
			header('location:Adminlog.html');
		}

	
}

*/
?>