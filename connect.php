<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$messege = $_POST['messege'];

	// Database connection
	$conn = new mysqli('localhost','root','','interior');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(firstName, lastName, gender, email, number, messege) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssis", $firstName, $lastName, $gender, $email,  $number,$messege);
		$execval = $stmt->execute();
		echo $execval;
		echo "successfull...";
		$stmt->close();
		$conn->close();
	}
?>