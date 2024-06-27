<?php
require 'db_connect.php';

$a = $_POST['username'];
$b = $_POST['password'];

// Check if the username or email already exists
$check_query = mysqli_query($connect, "SELECT * FROM user WHERE username='$a'");

if(mysqli_num_rows($check_query) > 0) {
  // User exists, log them in
  $user = mysqli_fetch_assoc($check_query);
  if($user['password'] == $b) {
    // Passwords match, log the user in
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: home.php");
    exit;
  } else {
    // Passwords don't match, redirect to login page with error message
    echo '<script>alert("Incorrect Password!"); window.location.replace("index.php");</script>';
    exit;
  }
} else {
  // User does not exist, redirect to registration page with error message
  echo '<script>alert("You need to register first!"); window.location.replace("signup.php");</script>';
  exit;
}
?>