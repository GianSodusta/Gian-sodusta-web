<?php
require 'db_connect.php';

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM subjects WHERE student_id = '$id'");
if($delete){
 echo '<script>alert("Data deleted successfully"); window.location.replace("subject.php");</script>';
}else{
echo '<script>alert("ERROR: Deleting Data failed!"); window.location.replace("subject.php");</script>';
}
?>