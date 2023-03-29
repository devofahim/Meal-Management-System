<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data and sanitize inputs
$username = mysqli_real_escape_string($conn, $_POST['username']);
$bazar_details = mysqli_real_escape_string($conn, $_POST['bazar_details']);
$bazarcost = mysqli_real_escape_string($conn, $_POST['bazarcost']);

// Validate form data
if (empty($username) || empty($bazar_details) || empty($bazarcost)) {
    echo "Please fill out all fields.";
} else {
    // Insert form data into meals table
    $query = "INSERT INTO meals (username, bazar_details, bazarcost) VALUES ('$username', '$bazar_details', '$bazarcost')";

    if (mysqli_query($conn, $query)) {
        echo "Record added successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>


<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data and sanitize inputs
$username = mysqli_real_escape_string($conn, $_POST['username']);
$deposit = mysqli_real_escape_string($conn, $_POST['deposit']);
$todays_date = mysqli_real_escape_string($conn, $_POST['todays_date']);

// Validate form data
if (empty($username) || empty($deposit) || empty($date)) {
    echo "Please fill out all fields.";
} else {
    // Insert form data into users table
    $query = "INSERT INTO users (username, deposit, todays_date) VALUES ('$username', '$deposit', '$date')";

    if (mysqli_query($conn, $query)) {
        echo "Record added successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>