<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<div class="container">
		<h1>Signup Form</h1>
		<form method="post" action="signup.php">
			<div class="form-group">
				<label for="username">Username:</label>
				<input type="text" class="form-control" id="username" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<button type="submit" class="btn btn-primary">Signup</button>
		</form>
	</div>
</body>
</html>


