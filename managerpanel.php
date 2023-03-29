<!DOCTYPE html>
<html>
<head>
  <title>Insert Data into Meals Table</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Insert Bazar Informations</h1>
    <form action="insert.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
    
      <div class="form-group">
        <label for="todays_date">Today's Date:</label>
        <input type="date" class="form-control" id="todays_date" name="todays_date">
      </div>
    
      <div class="form-group">
        <label for="bazar_details">Bazar Details:</label>
        <input type="text" class="form-control" id="bazar_details" name="bazar_details">
      </div>

      <div class="form-group">
        <label for="bazarcost">Bazar Cost:</label>
        <input type="number" class="form-control" id="bazarcost" name="bazarcost">
      </div>
      <button type="submit" class="btn btn-primary">Insert Data</button>
    </form>
  </div>






<br/><br/>



  <div class="container">
    <h1>Deposite To User</h1>
    <form action="insert.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
    
      <div class="form-group">
        <label for="todays_date">Today's Date:</label>
        <input type="date" class="form-control" id="todays_date" name="todays_date">
      </div>
    
      <div class="form-group">
        <label for="bazar_details">Deposit Balance</label>
        <input type="number" class="form-control" id="deposit" name="bazar_details">
      </div>

        
      <button type="submit" class="btn btn-primary">Insert Data</button>
    </form>
  </div>









  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


