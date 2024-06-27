<?php
require 'db_connect.php';

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM students WHERE student_id = '$id'");
if($delete){
echo '<script>alert("Data deleted successfully!"); window.location.replace("student.php");</script>';
}else{
echo '<script>alert("ERROR: Deleting Data failed!"); window.location.replace("student.php");</script>';
}
?>