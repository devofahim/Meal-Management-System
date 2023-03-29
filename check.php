<?php
$servername   = "138.201.53.131";
$database = "mwfiedvq_meals";
$username = "mwfiedvq_meals";
$password = "Bangla@desh33";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?>