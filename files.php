<td class="card" height="185" width="250">

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

// Prepare the SQL query
$sql = "SELECT * FROM meals";

// Execute the query
$result = $conn->query($sql);



// Close the connection
$conn->close();
?>


<?php
// Output the table header
echo "<table>";
echo "<tr><th>ID</th><th>Username</th><th>Total meals</th><th>Deposit</th><th>Users total meals</th><th>Daily meals</th><th>Date</th></tr>";

// Iterate over each row of data and output it in a table row
while($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['totalmeals'] . "</td>";
  echo "<td>" . $row['deposit'] . "</td>";
  echo "<td>" . $row['userstotalmeals'] . "</td>";
  echo "<td>" . $row['dailymeals'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
}

// Output the table footer
echo "</table>";
?>







<?php
// Output the table header
echo "<table>";
echo "<tr><th>Username</th><th>Total daily meals</th></tr>";

// Output the total dailymeals for the current user in a table row
echo "<tr>";
echo "<td>" . $username . "</td>";
echo "<td>" . $total_dailymeals . "</td>";
echo "</tr>";

// Output the table footer
echo "</table>";
?>