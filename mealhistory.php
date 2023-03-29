<!DOCTYPE html>
<html>
<head>
    <title>Meals Table</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Meals Table</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Date</th>
                    <th>Breakfast</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                    <th>Total Meals</th>
                    <th>Deposit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the database
                $conn = mysqli_connect('localhost', 'root', '', 'demo');

                // Check if the connection was successful
                if (!$conn) {
                    die('Error connecting to the database: ' . mysqli_connect_error());
                }

                // Execute the query to select all rows from the "meals" table
                $result = mysqli_query($conn, "SELECT * FROM meals");

                // Check if there are any results
                if (mysqli_num_rows($result) > 0) {
                    // Output each row in the table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['username'] . '</td>';
                        echo '<td>' . $row['date'] . '</td>';
                        echo '<td>' . $row['breakfast'] . '</td>';
                        echo '<td>' . $row['lunch'] . '</td>';
                        echo '<td>' . $row['dinner'] . '</td>';
                        echo '<td>' . $row['totalmeals'] . '</td>';
                        echo '<td>' . $row['deposit'] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="8">No results found.</td></tr>';
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>