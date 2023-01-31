<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* Add styles for a responsive design */
  </style>
</head>
<body>
  <?php
    session_start();
    if (isset($_SESSION['username'])) {
      header('location: home.php');
    }
  ?>
  <div class="container">
    <form action="process.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
