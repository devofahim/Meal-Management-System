<?php
// Connect to MySQL database
$servername = "138.201.53.131";
$username = "mwfiedvq_meals";
$password = "Bangla@desh33";
$dbname = "mwfiedvq_meals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Define pagination variables
$rows_per_page = 10;
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Retrieve total number of rows
$count_query = "SELECT COUNT(*) AS total FROM meals";
$count_result = $conn->query($count_query);
$total_rows = $count_result->fetch_assoc()['total'];

// Calculate number of pages
$total_pages = ceil($total_rows / $rows_per_page);

// Retrieve data for current page
$offset = ($current_page - 1) * $rows_per_page;
$select_query = "SELECT username,totalmeals FROM meals LIMIT $rows_per_page OFFSET $offset";
$result = $conn->query($select_query);

// Display data in HTML table
echo "<table>";
while ($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row['username'] . "</td><td>" . $row['totalmeals'] . "</td></tr>";
}
echo "</table>";

// Display pagination links
echo "<div>";
for ($i = 1; $i <= $total_pages; $i++) {
  $active_class = ($i == $current_page) ? "active" : "";
  echo "<a class='$active_class' href='?page=$i'>$i</a>";
}
echo "</div>";

// Close MySQL connection
$conn->close();
?>