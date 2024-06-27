<?php
require 'db_connect.php';

$a = $_POST['student_id'];
$b = $_POST['sub1'];
$c = $_POST['sub2'];
$d = $_POST['sub3'];
$e = $_POST['sub4'];
$f = $_POST['sub5'];
$g = $_POST['sub6'];
$h = $_POST['sub7'];
$i = $_POST['sub8'];
$j = $_POST['sub9'];

// Check if the username or email already exists
$check_query = mysqli_query($connect, "SELECT * FROM subjects WHERE student_id ='$a'");

if(mysqli_num_rows($check_query) > 0) {
  // User already exists, show error message
  echo '<script>alert("Student ID already Exist!"); window.location.replace("subject.php");</script>';
  exit;
} else {
  // Insert new user data into the database
  $insert_query = mysqli_query($connect, "INSERT INTO subjects (student_id, sub1, sub2, sub3, sub4, sub5, sub6, sub7, sub8, sub9) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')");
  if($insert_query) {
    // User registered successfully, redirect to login page
    echo '<script>alert("Data Saved Successfuly!"); window.location.replace("subject.php");</script>';
    exit;
  } else {
    // Error inserting user data, show error message
    exit;
  }
}
?>