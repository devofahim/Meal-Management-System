<!DOCTYPE html>
<html>
<head>
    <title>Meals Table</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
         <link rel="stylesheet" href="main.css"/>
         <style>
             #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
         </style>
</head>
<body>
    
    
    <div class="container">
        <h4>Bazar History - Current Month</h4>
        <table id="customers">
            <thead>
                <tr>
                    
                    <th>Username</th>
                    <th>Bazar Cost</th>
                    <th>Bazar Details</th>
                    <th>Date</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the database
                $conn = mysqli_connect('138.201.53.131', 'mwfiedvq_meals', 'Bangla@desh33', 'mwfiedvq_meals');

                // Check if the connection was successful
                if (!$conn) {
                    die('Error connecting to the database: ' . mysqli_connect_error());
                }

                // Execute the query to select all rows from the "meals" table
                $result = mysqli_query($conn, "SELECT username, bazarcost, bazar_details, bazar_date FROM meals WHERE bazar_date != '0000-00-00' ORDER BY bazar_date DESC");

                // Check if any rows were returned
                if (mysqli_num_rows($result) > 0) {
                  // Output the table headers
               
                
                  // Loop through each row and output the data in the table
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['username'] . '</td>';
                    echo '<td>' . $row['bazarcost'] . '</td>';
                       echo '<td>' . $row['bazar_details'] . '</td>';
                    echo '<td>' . date('d-m-Y', strtotime($row['bazar_date'])) . '</td>';
                    echo '</tr>';
                  }
                
                  // Output the closing tags for the table
                  echo '</tbody></table>';
                } else {
                  // Output a message if no rows were returned
                  echo 'No data found.';
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