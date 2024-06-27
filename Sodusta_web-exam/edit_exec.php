<?php
require 'db_connect.php';

$id = $_POST['id'];
$a = $_POST['student_id'];
$b = $_POST['firstname'];
$c = $_POST['middlename'];
$d = $_POST['lastname'];
$e = $_POST['age'];
$f = $_POST['gender'];
$g = $_POST['course'];
$h = $_POST['year'];
$i = $_POST['address'];


$qry = mysqli_query($connect, "UPDATE students SET student_id='$a', firstname='$b', middlename='$c', lastname='$d', age='$e', gender='$f', course='$g', year='$h', address='$i' WHERE student_id='$id'");

if($qry){
 echo '<script>alert("Data Updated Successfuly!"); window.location.replace("student.php");</script>';
}else{
 echo '<script>alert("ERROR: Updating Data Fail!"); window.location.replace("student.php");</script>';
}
