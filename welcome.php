<?php
session_start();
if(!isset($_SESSION['username'])) {
  header('Location: login.php');
  
}
else{
    $myself = $_SESSION['username'];
   
}
?>
<br><br><br>

<?php
$today = date("Y-m-d");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to our Mess Management System!! Created By fahim sarkar
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>
     <link rel="stylesheet" href="main.css"/>
    <style>

        
.popup {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 150;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.2);
}

.popup-content {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


.popup {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 150;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.2);
}

.popup2 {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 150;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.2);
}

.popupb {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 150;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.2);
}

.popupc {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 150;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.2);
}

.popupd {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 150;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.2);
}
.popupe {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 150;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.2);
}


.popup-content {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}



.popup-content2 {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}


.popup-contentb {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}



.popup-contentc {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}



.popup-contentd {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}


.popup-contente {
  background-color: white;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 100%;
}


.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


    </style>
  </head>

<body>
    
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
 <br><br>
  <center> <img src="images/29.jpg" height="" width=""/> </center>
  


<?php
// Connect to MySQL database
$servername = "138.201.53.131";
$username = "mwfiedvq_meals";
$password = "Bangla@desh33";
$dbname = "mwfiedvq_meals";



$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Execute SQL query
$sql = "SELECT SUM(deposit) AS total_diposit FROM meals";
$result = $conn->query($sql);

// Check if query succeeded
if ($result === false) {
  die("Query failed: " . $conn->error);
}

// Retrieve result
$row = $result->fetch_assoc();
$total_diposit = $row["total_diposit"];

// Display result in HTML
 //echo " Total Deposit:  " . number_format($total_diposit, 2) ."";
?>



<?php
$servername = "138.201.53.131";
$username = "mwfiedvq_meals";
$password = "Bangla@desh33";
$dbname = "mwfiedvq_meals";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the sum of bazarcost and deposit from MySQL
$sql = "SELECT SUM(bazarcost) AS total_bazarcost, SUM(deposit) AS total_deposit FROM meals";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_bazarcost = $row['total_bazarcost'];
$total_deposit = $row['total_deposit'];

// Subtract the sum of bazarcost from the sum of deposit
$remaining_amount = $total_deposit - $total_bazarcost;

// Output the remaining amount in HTML
?>


 <?php //echo $remaining_amount; ?> 


<?php
// Close MySQL connection
mysqli_close($conn);
?>





<?php 

$meal_cost = $total_deposit - $remaining_amount;
//echo " Mess Total Meal Cost: " . $meal_cost . " Tk";

?>








<?php
// Connect to MySQL database
$servername = "138.201.53.131";
$username = "mwfiedvq_meals";
$password = "Bangla@desh33";
$dbname = "mwfiedvq_meals";



$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Execute SQL query
$sql = "SELECT SUM(totalmeals) AS total_meals FROM meals";
$result = $conn->query($sql);

// Check if query succeeded
if ($result === false) {
  die("Query failed: " . $conn->error);
}

// Retrieve result
$row = $result->fetch_assoc();
$total_meals = $row["total_meals"];

// Display result in HTML
 //echo " Mess Total Meals: " . number_format($total_meals, 2);
?> 



<?php
$servername = "138.201.53.131";
$username = "mwfiedvq_meals";
$password = "Bangla@desh33";
$dbname = "mwfiedvq_meals";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from MySQL
$sql = "SELECT SUM(bazarcost) / SUM(totalmeals) AS average_cost_per_meal
FROM meals";
$result = mysqli_query($conn, $sql);
// Check if query succeeded
if ($result === false) {
  die("Query failed: " . $conn->error);
}

// Retrieve result

// Output data in HTML table
?>

    <?php while($row = mysqli_fetch_assoc($result)) { 
      
   
      $total_cost_per_meal = $row["average_cost_per_meal"];
      ?>
        
    <?php //echo " Mess Meal Rate: " . $row['average_cost_per_meal'] ." Tk "; ?>
         
        
    <?php } // Retrieve result ?>

<?php
// Close MySQL connection
mysqli_close($conn);
?>

  

  
  
  <p></p>
  <center>    <div class="customers">
          
              <div class="card-header">
   <div class="card" style="width: 100rem;">
  <table class="table table-sm table-borderless">
  <thead>
    
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><img src="images/icons8-deposit-64.png" height="20px" width="20px"/> Total Deposit: </td>
    
      <td><?php echo $total_diposit; ?> Tk</td>
    </tr>
   <tr>
      <th scope="row"></th>
      <td><img src="images/icons8-sales-balance-50.png" height="20px" width="20px"/> Mess Balance: </td>
    
      <td><?php echo $remaining_amount; ?> Tk</td>
    </tr>
    
    <tr>
      <th scope="row"></th>
      <td><img src="images/icons8-fast-moving-consumer-goods-50.png" height="20px" width="20px"/> Mess Total Meal Cost: </td>
    
      <td><?php echo $meal_cost; ?> Tk</td>
    </tr>
    
    <tr>
      <th scope="row"></th>
      <td><img src="images/icons8-meal-50.png" height="20px" width="20px"/> Mess Total Meals: </td>
    
      <td><?php echo$total_meals; ?> </td>
    </tr>
    
    <tr>
      <th scope="row"></th>
      <td><img src="images/icons8-activity.gif" height="20px" width="20px"/>  Mess Meal Rate: </td>
    
      <td><?php echo  $total_cost_per_meal; ?> Tk</td>
    </tr>
    
    </tbody>
    </table>
    </div>
    </div></div>











    <?php
// Connect to MySQL database
$servername = "138.201.53.131";
$username = "mwfiedvq_meals";
$password = "Bangla@desh33";
$dbname = "mwfiedvq_meals";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Execute SQL query
$sql = "SELECT SUM(totalmeals) AS total_meal FROM meals where username='$myself'";
$result = $conn->query($sql);

// Check if query succeeded
if ($result === false) {
  die("Query failed: " . $conn->error);
}

// Retrieve result
$row = $result->fetch_assoc();
$total_meal = $row["total_meal"];

// Display result in HTML



//echo "<font size='4px'><b><small> " ." My Meal: <p>" . $total_meal . ".0 </small></b></font>";




?>

</td>

<td colspan="2px">


<?php
// Connect to MySQL database
$servername = "138.201.53.131";
$username = "mwfiedvq_meals";
$password = "Bangla@desh33";
$dbname = "mwfiedvq_meals";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Execute SQL query
$sql = "SELECT SUM(deposit) AS user_total_deposit FROM meals where username='$myself'";
$result = $conn->query($sql);

// Check if query succeeded
if ($result === false) {
  die("Query failed: " . $conn->error);
}

// Retrieve result
$row = $result->fetch_assoc();
$user_total_deposit = $row["user_total_deposit"];

// Display result in HTML



//echo "<font size='4px'><b><small> " ." My Deposit: <p>" . $user_total_deposit . ".0 Tk </small></b></font>";




?>
</td>


<td>

<?php

$user_cost = $total_meal * $total_cost_per_meal;

//echo "<font size='4px'><b><small> " ." My Cost: " . $user_cost . " Tk </small></b></font>";




?>

</td>

<td>
<?php

$user_balance = $user_total_deposit -  $user_cost;

//echo "<font size='4px'><b><small> " ." Balance: " . $user_balance . " Tk </small></b></font>";




?> </td>

</table>




         
           <h4> My Informations </h4>
              <div class="card-header">
                  
                 
              
                <button class="btn btn-primary btn-sm">Deposit: <?php echo $user_total_deposit; ?>  <span class="fas fa-arrow-left"></span> </button>  &nbsp; 
                
                <button class="btn btn-primary btn-sm">Meals: <?php echo $total_meal;?> <span class="fas fa-arrow-left"></span> </button>  &nbsp;
                <br><br/>
                
                <button class="btn btn-primary btn-sm">Cost: <?php echo round($user_cost); ?>  <span class="fas fa-arrow-left"></span> </button>  &nbsp;
                
                <button class="btn btn-primary btn-sm">Balance: <?php echo round($user_balance); ?>  <span 
                class="fas fa-arrow-left"></span> </button>
              </div>














    </td>

    <td class="card" height="400" width="1500">
    <?php

    $conn = mysqli_connect('138.201.53.131', 'mwfiedvq_meals', 'Bangla@desh33', 'mwfiedvq_meals');


    if (!$conn) {
        die('Error connecting to the database: ' . mysqli_connect_error());
    }

   
    echo ' <h4>All Members</h4>
';

   
    $result = mysqli_query($conn, " 
    SELECT users.username, SUM(meals.deposit) AS total_deposit, SUM(meals.totalmeals) AS total_meals, (SUM(meals.totalmeals) * $total_cost_per_meal) AS total_cost, - (SUM(meals.totalmeals) * $total_cost_per_meal) + SUM(meals.deposit) AS available_balance
    FROM users
    LEFT JOIN meals ON users.username = meals.username
    GROUP BY users.username
    ");

   
    if (mysqli_num_rows($result) > 0) {
       
        echo '<table id="customers">';
   
        while ($row = mysqli_fetch_assoc($result)) {
          
            echo '<td> <font size="3px"> <b>' . $row['username'] . ' </td></b></font> ' .'<td colspan="2"> Deposit: ' . $row['total_deposit'] . '</td> <tr><td> Meal Number: ' . $row['total_meals'] . '</td><td> Total Cost: ' . round($row['total_cost']) . '</td><td>Balance ' . round($row['available_balance']) .' </td> </tr>';
        }
        echo '</table>';
    } else {
        echo 'No results found.';
    }

    mysqli_close($conn);
    ?>
















</td>
  </tr>


  


  <tr>
    <td height="10px" width="250"> 








 </td>

</tr>



<style>
    
  
</style>




<?php
// Connect to MySQL database
 $conn = mysqli_connect('138.201.53.131', 'mwfiedvq_meals', 'Bangla@desh33', 'mwfiedvq_meals');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the logged in user
 // replace with your own code to get the logged in user

// Query to select the user with the given username and status manager
$sql = "SELECT * FROM users WHERE username = '$myself' AND status = 'manager'";

// Execute query
$result = mysqli_query($conn, $sql);

// Check if the user is a manager
if (mysqli_num_rows($result) > 0) {
    // User is a manager, display the button
    echo ' 
     
    <center>     <div class="navbarr">
    
    
    






   
  <a href="#" id="popup-linkd" class="active"><img src="images/home.png" height="15px" width="15px"/> <font color="white"><small>Home</small></font> 
  </a> 

   
  <a href="#" id="popup-link2"><img src="images/addbazar.png" height="15px" width="15px"/> <font color="white"><small>Add Bazar</small></font></a> 
  
 
  <a href="#" id="popup-linkb"><img src="images/addmeal.png" height="15px" width="15px"/> <font color="white"><small>Add Meal</small></font></a> 
  
  
  

 
 <a href="#" id="popup-link"><img src="images/deposit.png" height="15px" width="15px"/> <font color="white"><small>Deposit</small></font>  </a> 
 
   <a href="#" id="popup-linkc"><img src="images/user.png" height="15px" width="15px"/> <font color="white"><small>Add Member</small></font></a> 
   
   <a href="#" id="popup-linke"><img src="images/bazarlist.png" height="15px" width="15px"/> <font color="white"><small> Bazar List </small></font></a> 
   
   
   
   
   
   
     <a href="dashboard.php"><img src="images/log-file.png" height="15px" width="15px"/> <font color="white"><small>Dashboard</small></font></a> 
  
  
 
 </div>





</div>



   </center>
     
     ';
}else
{
    echo ' <center>     <div class="navbarr">
    
    
    
      <a href="#" id="popup-linkd" class="active"><img src="images/home.png" height="15px" width="15px"/> <font color="white"><small>Home</small></font> 
  </a> 
 <a href="#" id="popup-linke"><img src="images/bazarlist.png" height="15px" width="15px"/> <font color="white"><small> Bazar List </small></font></a> 
   
    
    <a href="dashboard.php"><img src="images/log-file.png" height="15px" width="15px"/> <font color="white"><small>Dashboard</small></font></a>

  

  

   

 
  
 
</div>

   </center>';
}

// Close MySQL connection
mysqli_close($conn);
?>

</center>

</body>
</html>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  
  
   </center>
  
  
    
  </tbody>
  
  
</table>
  
 </div>
  
  
  

  
  








      <header>
          <nav class="navbar navbar-inverse width: 100rem;">
   <img src="images/logo-2.png" width="120px" height="46px" alt="profile-img"> 
</nav>
       
      

       

        <div class="user-wrapper">
         <img src="avater.png" width="30px" height="30px" alt="profile-img">
         <div class="">
            <h5><?php echo $myself; ?> </h5>
            <small><a href="logout.php">Logout</a></small>
         </div>
        </div>
      </header>

     
       
                    </div>
                </div>
              </div>
            </div>

          </div>
          
        </div>  

      </main>
    </div>
    
    
    
    <style>


    </style>
    



    
    <div id="popup" class="popup">
  <div class="popup-content">

 <span class="close">&times;</span>

<form method="post" action="insert_deposit.php">
  <div class="form-group">
    <label for="username">Username:</label>
    <select class="form-control" id="username" name="username" required>
      <?php
      // Connect to database
      $conn = mysqli_connect('138.201.53.131', 'mwfiedvq_meals', 'Bangla@desh33', 'mwfiedvq_meals');

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Retrieve usernames from database
      $sql = "SELECT DISTINCT username FROM meals ORDER BY username ASC";
      $result = mysqli_query($conn, $sql);

      // Create option tags for select box
      while ($row = mysqli_fetch_assoc($result)) {
        $username = $row["username"];
        echo "<option value='$username'>$username</option>";
      }

      // Close connection
      mysqli_close($conn);
      ?>
    </select>
  </div>
 
 
 
  <div class="form-group">
    <label for="deposit">Deposit:</label>
    <input type="number" class="form-control" id="deposit" name="deposit" required>
  </div>
  <div class="form-group">
    <label for="deposit_date">Deposit Date:</label>
    <input type="date" class="form-control" id="deposit_date" name="deposit_date" value="<?php echo date('Y-m-d'); ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


   
  </div>
</div>






 
    <div id="popup2" class="popup2">
  <div class="popup-content2">

 <span class="close">&times;</span>

<form method="post" action="insert_bazar.php">
  <div class="form-group">
    <label for="username">Username:</label>
    <select class="form-control" id="username" name="username" required>
      <?php
      // Connect to database
      $conn = mysqli_connect('138.201.53.131', 'mwfiedvq_meals', 'Bangla@desh33', 'mwfiedvq_meals');

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Retrieve usernames from database
      $sql = "SELECT DISTINCT username FROM meals ORDER BY username ASC";
      $result = mysqli_query($conn, $sql);

      // Create option tags for select box
      while ($row = mysqli_fetch_assoc($result)) {
        $username = $row["username"];
        echo "<option value='$username'>$username</option>";
      }

      // Close connection
      mysqli_close($conn);
      ?>
    </select>
  </div>
 
 
  <div class="form-group">
    <label for="bazarcost">Bazar Details:</label>
    <input type="text" class="form-control" id="bazar_details" name="bazar_details" required>
  </div>
 
 
  <div class="form-group">
    <label for="bazarcost">Add Bazar Cost:</label>
    <input type="number" class="form-control" id="bazarcost" name="bazarcost" required>
  </div>
  
  
  
  
  <div class="form-group">
    <label for="deposit_date">Bazar Date:</label>
    <input type="date" class="form-control" id="bazar_date" name="bazar_date" value="<?php echo date('Y-m-d'); ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>


   
  </div>
</div>

   
    <div id="popupb" class="popupb">
  <div class="popup-contentb">

 <span class="close">&times;</span>

<form method="post" action="meal_add.php">
  <div class="form-group">
    <label for="username">Username:</label>
    <select class="form-control" id="username" name="username" required>
      <?php
      // Connect to database
      $conn = mysqli_connect('138.201.53.131', 'mwfiedvq_meals', 'Bangla@desh33', 'mwfiedvq_meals');

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Retrieve usernames from database
      $sql = "SELECT DISTINCT username FROM meals ORDER BY username ASC";
      $result = mysqli_query($conn, $sql);

      // Create option tags for select box
      while ($row = mysqli_fetch_assoc($result)) {
        $username = $row["username"];
        echo "<option value='$username'>$username</option>";
      }

      // Close connection
      mysqli_close($conn);
      ?>
    </select>
  </div>
 
 
  
 
 
  <div class="form-group">
    <label for="bazarcost">Add Meal:</label>
    <input type="number" class="form-control" id="totalmeals" name="totalmeals" required>
  </div>
  
  
  
  
  <div class="form-group">
    <label for="meal_date">Meal Date:</label>
    <input type="date" class="form-control" id="meal_date" name="meal_date" value="<?php echo date('Y-m-d'); ?>" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


   
  </div>
</div>






    <div id="popupc" class="popupc">
  <div class="popup-contentc">

 <span class="close">&times;</span>

<form method="post" action="add_user.php">
  <div class="form-group">
    <label for="username">Username:</label>
    <select class="form-control" id="username" name="username" required>
      <?php
      // Connect to database
      $conn = mysqli_connect('138.201.53.131', 'mwfiedvq_meals', 'Bangla@desh33', 'mwfiedvq_meals');

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Retrieve usernames from database
      $sql = "SELECT DISTINCT username FROM users ORDER BY username ASC";
      $result = mysqli_query($conn, $sql);

      // Create option tags for select box
      while ($row = mysqli_fetch_assoc($result)) {
        $username = $row["username"];
        echo "<option value='$username'>$username</option>";
      }

      // Close connection
      mysqli_close($conn);
      ?>
    </select>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Add</button>
</form>


   
  </div>
</div>



    <div id="popupd" class="popupd">
  <div class="popup-contentd">

 <span class="close">&times;</span>
<center>  <h4><img src="/img/avatar.png" height="60px" width="60px"/> <p> <a href="profile.php">  <?php echo $_SESSION['username']; ?> </a> <p> <a href="logout.php"><small> [ Logout ]  </small></a> </h4> 

<button class="btn btn-info btn-sm"> <img src="img/notifications-meal.png" height="20px" width="30px"/><i> Today's Notifications </i></button> 
<?php
// Include the database configuration file
require_once 'config.php';

// SQL query to retrieve all meals information for a user with username "fahm"
$sql = "SELECT * FROM meals WHERE meal_date='$today' AND username='$myself'";

// Execute the SQL query and store the results in a variable
$result = $mysqli->query($sql);

// Check if the query was successful and there are results
if ($result && $result->num_rows > 0) {
    // Loop through each row of the result set and output the meal information
    while ($row = $result->fetch_assoc()) {
     
    
        echo " <div class='btn btn-danger btn-sm'> Dear, $myself [ " . $row['totalmeals'] . " Meals Added To Your Lunchbox ! <img src='/img/lunchbox.png' height='20px' width='20px'/>  " . $row['todays_date'] . "   $today ] </div>"; 
        //echo "<p>Deposit: " . $row['deposit'] . "</p>";
        //echo "<p>User's Total Meals: " . $row['userstotalmeals'] . "</p>";
        //echo "<hr>";
    }
} else {
    // Output an error message if the query fails or there are no results
    echo " ";
}

// Close the database connection
$mysqli->close();
?>

<br>




<?php
// Include the database configuration file

require 'config.php';

// SQL query to retrieve all meals information for a user with username "fahm"
$sql = "SELECT * FROM meals WHERE deposit_date='$today' AND username='$myself'";

// Execute the SQL query and store the results in a variable
$result = $mysqli->query($sql);

// Check if the query was successful and there are results
if ($result && $result->num_rows > 0) {
    // Loop through each row of the result set and output the meal information
    while ($row = $result->fetch_assoc()) {
     
    
        echo " <div class='btn btn-primary btn-sm'> Dear, $myself [ " . $row['deposit'] . "Taka diposited  To Your Account !  " . $row['todays_date'] . "  $today ] </div>"; 
        //echo "<p>Deposit: " . $row['deposit'] . "</p>";
        //echo "<p>User's Total Meals: " . $row['userstotalmeals'] . "</p>";
        //echo "<hr>";
    }
} else {
    // Output an error message if the query fails or there are no results
    echo " ";
}

// Close the database connection
$mysqli->close();
?>



<?php
// Include the database configuration file

require 'config.php';

// SQL query to retrieve all meals information for a user with username "fahm"
$sql = "SELECT * FROM meals WHERE bazar_date='$today'";

// Execute the SQL query and store the results in a variable
$result = $mysqli->query($sql);

// Check if the query was successful and there are results
if ($result && $result->num_rows > 0) {
    // Loop through each row of the result set and output the meal information
    while ($row = $result->fetch_assoc()) {
     
    
        echo " <div class='btn btn-warning btn-sm'> $row[username]   [ " . $row['bazarcost'] . "Taka Bazar Cost added To My Mess !  " . $row['bazar_date'] . "  $today ] </div>"; 
        //echo "<p>Deposit: " . $row['deposit'] . "</p>";
        //echo "<p>User's Total Meals: " . $row['userstotalmeals'] . "</p>";
        //echo "<hr>";
    }
} else {
    // Output an error message if the query fails or there are no results
    echo " ";
}

// Close the database connection
$mysqli->close();
?>

  
  
  </div>
</div>





    <div id="popupe" class="popupe">
  <div class="popup-contente">

 <span class="close">&times;</span>

 <div class="container">
        <h5>Bazar List</h5>
        <table id="customers">
            <thead>
                <tr>
                    
                    <th>Username</th>
                    <th>Bazar Cost</th>
                    <th>Bazar Details</th>
                    <th>Bazar Date</th>
                   
                    
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
                $result = mysqli_query($conn, "SELECT username, bazarcost, bazar_details, bazar_date 
FROM meals 
WHERE bazar_date != '0000-00-00'
ORDER BY bazar_date DESC LIMIT 3");

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
                
                <center>
                    <br>
                   <a href="bazar_view.php"> <button class"button button2"> Click To View Full Bazar List</button> </a> 
                    
                </center>
            </tbody>
        </table>
    </div>
    


   
  </div>
</div>
















     
<script>


// Get the popup element
var popup = document.getElementById("popup");

// Get the link element
var link = document.getElementById("popup-link");

// Get the close button
var close = popup.getElementsByClassName("close")[0];

// When the user clicks on the link, open the popup
link.onclick = function() {
  popup.style.display = "block";
}

// When the user clicks on the close button, close the popup
close.onclick = function() {
  popup.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
}


</script>
     
     
        

     
     
     

<script>


// Get the popup element
var popup2 = document.getElementById("popup2");

// Get the link element
var link = document.getElementById("popup-link2");

// Get the close button
var close = popup2.getElementsByClassName("close")[0];

// When the user clicks on the link, open the popup
link.onclick = function() {
  popup2.style.display = "block";
}

// When the user clicks on the close button, close the popup
close.onclick = function() {
  popup2.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == popup2) {
    popup2.style.display = "none";
  }
}


</script>

     <script>


// Get the popup element
var popupb = document.getElementById("popupb");

// Get the link element
var link = document.getElementById("popup-linkb");

// Get the close button
var close = popupb.getElementsByClassName("close")[0];

// When the user clicks on the link, open the popup
link.onclick = function() {
  popupb.style.display = "block";
}

// When the user clicks on the close button, close the popup
close.onclick = function() {
  popupb.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == popupb) {
    popupb.style.display = "none";
  }
}


</script>

     <script>


// Get the popup element
var popupc = document.getElementById("popupc");

// Get the link element
var link = document.getElementById("popup-linkc");

// Get the close button
var close = popupc.getElementsByClassName("close")[0];

// When the user clicks on the link, open the popup
link.onclick = function() {
  popupc.style.display = "block";
}

// When the user clicks on the close button, close the popup
close.onclick = function() {
  popupc.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == popupc) {
    popupc.style.display = "none";
  }
}


</script>

  <script>


// Get the popup element
var popupd = document.getElementById("popupd");

// Get the link element
var link = document.getElementById("popup-linkd");

// Get the close button
var close = popupd.getElementsByClassName("close")[0];

// When the user clicks on the link, open the popup
link.onclick = function() {
  popupd.style.display = "block";
}

// When the user clicks on the close button, close the popup
close.onclick = function() {
  popupd.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == popupd) {
    popupd.style.display = "none";
  }
}


</script>

  <script>


// Get the popup element
var popupe = document.getElementById("popupe");

// Get the link element
var link = document.getElementById("popup-linke");

// Get the close button
var close = popupe.getElementsByClassName("close")[0];

// When the user clicks on the link, open the popup
link.onclick = function() {
  popupe.style.display = "block";
}

// When the user clicks on the close button, close the popup
close.onclick = function() {
  popupe.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
  if (event.target == popupe) {
    popupe.style.display = "none";
  }
}


</script>






<br><br><br><br><br><br><br><br><br>
