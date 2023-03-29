<link rel="stylesheets" href="/css/style.css"/>




<?php
// Connect to database
  $conn = mysqli_connect('138.201.53.131', 'mwfiedvq_meals', 'Bangla@desh33', 'mwfiedvq_meals');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get values from form
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$deposit = mysqli_real_escape_string($conn, $_POST["deposit"]);
$deposit_date = mysqli_real_escape_string($conn, $_POST["deposit_date"]);



// Insert values into meals table
$sql = "INSERT INTO meals (username, deposit, deposit_date) VALUES ('$username', '$deposit', '$deposit_date')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['flash_message'] = "User created successfully!";
    $_SESSION['flash_type'] = "success";
} else {
    // Set error flash message
    $_SESSION['flash_message'] = "Error creating user: " . mysqli_error($conn);
    $_SESSION['flash_type'] = "error";
}

// Close database connection
mysqli_close($conn);

// Redirect to welcome page
header("Location: welcome.php");
exit;
?>
