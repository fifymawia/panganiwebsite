<?php include('adminconnect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Pangani Girls Administration Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Administration Login</h2>
  </div>
   
  <form method="post" action="adminlogin.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_admin">Login</button>
    </div>
    <p>
      Are you a student/parent? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>