<?php
require 'db_connect.php';

$a = $_POST['student_id'];
$b = $_POST['firstname'];
$c = $_POST['middlename'];
$d = $_POST['lastname'];
$e = $_POST['age'];
$f = $_POST['gender'];
$g = $_POST['course'];
$h = $_POST['year'];
$i = $_POST['address'];

// Check if the username or email already exists
$check_query = mysqli_query($connect, "SELECT * FROM students WHERE student_id ='$a'");

if(mysqli_num_rows($check_query) > 0) {
  // User already exists, show error message
  echo '<script>alert("Student ID already Exist!"); window.location.replace("student.php");</script>';
  exit;
} else {
  // Insert new user data into the database
  $insert_query = mysqli_query($connect, "INSERT INTO students (student_id, firstname, middlename, lastname, age, gender, course, year, address) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i')");
  if($insert_query) {
    // User registered successfully, redirect to login page
    echo '<script>alert("Data Saved Successfuly!"); window.location.replace("student.php");</script>';
    exit;
  } else {
    // Error inserting user data, show error message
   echo "Error" . mysqli_error($connect);
    exit;
  }
}
?>