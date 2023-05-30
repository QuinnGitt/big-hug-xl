<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin.css">
    <title>EDIT</title>
</head>

<body>
    
<?php 
  include "header.php";
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
  include "functions/login.php";
  $msg = checkLogin();
}?>

<div class="container">
    <h2>Login</h2>
    <?php if (isset($msg)) { ?>
      <p><?php echo $msg; ?></p>
    <?php } ?>
    <form action="" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
      
    </form>
  </div>

</body>
</html>