<?php
	$servername = "138.201.53.131";
	$username = "mwfiedvq_meals";
	$password = "Bangla@desh33";
	$dbname = "mwfiedvq_meals";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Get form data
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Insert data into database
	$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

	if ($conn->query($sql) === TRUE) {
		echo "Signup successful!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>