<?php
require 'db_connect.php';

    $id = $_POST['id'];
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


$qry = mysqli_query($connect, "UPDATE subjects SET student_id='$a', sub1='$b', sub2='$c', sub3='$d', sub4='$e', sub5='$f', sub6='$g', sub7='$h', sub8='$i', sub9='$j' WHERE student_id='$id'");

if($qry){
 echo '<script>alert("Data Updated Successfuly!"); window.location.replace("subject.php");</script>';
}else{
 echo '<script>alert("ERROR: Updating Data Fail!"); window.location.replace("subject.php");</script>';
}
?>