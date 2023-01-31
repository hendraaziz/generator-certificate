<?php
session_start();
require("connection.php");
if (isset($_POST['username']) && isset($_POST['password'])) {
  /* Check the username and password against a database or hardcoded values */
  if ($_POST['username'] === 'admin' && $_POST['password'] === 'pass') {
    $_SESSION['username'] = 'admin';
    header('location: home.php');
  } else {
    /* Incorrect username or password */
  }
}
