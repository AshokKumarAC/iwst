<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$gender = $_POST["gender"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$number = $_POST["number"];

	// Database connection


	$conn = mysqli_connect('103.21.58.5:3306','ipirti','Ipi123*ti','ipirtbkp_');
	if(mysqli_connect_errno()){
		die("Connection error : " . mysqli_connect_error());
	} 
	$sql = "INSERT INTO registratiion (firstName, lastName, gender, email, password, number)
			VALUES (?, ?, ?, ?, ?, ?)";
	
	$stmt = mysqli_stmt_init($conn);
	
	if ( ! mysqli_stmt_prepare($stmt, $sql)) {
		die(mysqli_error($conn));
	}
	
	mysqli_stmt_bind_param($stmt, "sssssi", $firstName, $lastName, $gender, $email, $password, 	$number);

	mysqli_stmt_execute($stmt);
	echo "Record saved.";
?>


