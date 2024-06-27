<?php
require 'db_connect.php';

$a = $_POST['username'];
$b = $_POST['password'];

// Check if the username or email already exists
$check_query = mysqli_query($connect, "SELECT * FROM user WHERE username='$a'");

if(mysqli_num_rows($check_query) > 0) {
  // User already exists, show error message
  echo '<script>alert("Username already exists!"); window.location.replace("signup.php.php");</script>';
  exit;
} else {
  // Insert new user data into the database
  $insert_query = mysqli_query($connect, "INSERT INTO user (username, password) VALUES ('$a', '$b')");
  if($insert_query) {
    // User registered successfully, redirect to login page
    echo '<script>alert("Signing up Successfuly!. Login Now!"); window.location.replace("index.php");</script>';
    exit;
  } else {
    // Error inserting user data, show error message
    echo '<script>alert("Error saving your data!"); window.location.replace("signup.php");</script>';
    exit;
  }
}
?>