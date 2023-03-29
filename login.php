<?php
session_start();
if(isset($_SESSION['username'])) {
  header('Location: welcome.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysqli_connect('138.201.53.131', 'mwfiedvq_meals', 'Bangla@desh33', 'mwfiedvq_meals');

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('Location: welcome.php');
  } else {
    echo "Invalid username or password";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
        
      
    </style>
  </head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <body><br><br><br>
  <div class="container">
  <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header"> <br>
          <div align="center">  <img src="/img/meal.png" height="60px" width="60px"/> <p></p></dev>
    <h5 class="text-center"><font color="#c51f5d">  Mess Management System </font></h5>
    
</div>




<style>
    :root {
  --primary-color: #e53935;
  --secondry-color: #c62828;
}
a{
  color: #1976D2;
}
.form-footer {
  text-align: center;
}

.form-footer a {
  text-decoration: underline;
}

.login-from-input {
  width: 100%;
  border: 2px solid #ccc;
  font-size: 18px;
  padding: 7px 10px;
  border-radius: 3px;
}

.login-from-input:hover {
  border-color: #aaa;
}

.login-from-input:focus {
  border: 2px solid var(--primary-color);
}

.form-group label {
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 400;
}

.page-title {
  color: var(--primary-color);
  margin-bottom: 30px;
}

input:focus,
textarea:focus,
keygen:focus,
select:focus {
  outline-offset: 0px;
}

:focus {
  outline: none;
}

.login-btn {
  width: 100%;
  padding: 10px;
  color: #fff;
  background-color: var(--primary-color);
  border: none;
  border-radius: 3px;
}

.login-btn:hover {
  background-color: var(--secondry-color);
}
</style>










<div class="container">
  <div class="col-sm-4 col-sm-offset-4">
    <form method="POST" action="login.php">
      <h1 class="text-center page-title">Login</h1>
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="login-from-input" id="username" name="username" required>
      </div>
      <div class="form-group">
        <div>
          <label>Password</label>
        </div>
        <input type="password" class="login-from-input password-input" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" class="login-btn" value="login" />
      </div>
      <div class="form-group form-footer">
        <p>Dont have an account? <a href="register.php" title="">Create Account</a></p>
     
      </div>
    </form>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
