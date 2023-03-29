<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create a new mysqli object
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the data from the form
$id = $_POST['id'];
$username = $_POST['username'];
$totalmeals = $_POST['totalmeals'];
$deposit = $_POST['deposit'];
$userstotalmeals = $_POST['userstotalmeals'];
$dailymeals = $_POST['dailymeals'];

// Prepare the SQL query
$sql = "INSERT INTO meals (id, username, totalmeals, deposit, userstotalmeals, dailymeals, date) VALUES ('$id', '$username', '$totalmeals', '$deposit', '$userstotalmeals', '$dailymeals', NOW())";

// Execute the query
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>