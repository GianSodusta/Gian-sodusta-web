<!DOCTYPE html>
<head>
<title></title>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

body {
	background-color: #EDEEF6;
	font-family: 'Poppins', sans-serif;
}

/* Table Structure design*/
.table-list {
  width: 100%;
  border-collapse: collapse;
  margin-buttom: 20px;
}

.table-list thead td {
  background-color: #0487E2;
  color: #fff;
  font-weight: bold;
  padding: 12px 15px;
  text-align: left;
  font-size: 15px;
  border: 2px solid #ddd;
}

.table-list tbody tr {
  background-color: #E1CBD7;
}

.table-list tbody td {
  border: 2px solid #ddd;
  padding: 8px 15px; 
  font-size: 13px;
}

.table-list tbody tr:nth-child(even) {
  background-color: #A8DADC;
}

.table-list tbody tr:hover {
  background-color: #E7EFF2;
}

.table-list tbody td:first-child {
  border-top-left-radius: 6px;
  border-buttom-left-radius: 6px;
}

.table-list tbody td:last-child {
  border-top-left-radius: 6px;
  border-buttom-left-radius: 6px;
}

h1 {
  text-align: center;
}

</style>
</head>
<body>
<?php
require 'db_connect.php';

$a = $_GET['keyword'];
echo "<h1>Searched Data for keyword '{$a}'</h1>";
?>
<table class="table-list">
<thead>
<tr>
<td>Student ID</td>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
<td>Gender</td>
<td>Course</td>
<td>Year Level</td>
<td>Subjects</td>
</tr>
</thead>
<tbody>
<?php

require 'db_connect.php';

$a = $_GET['keyword'];

$qry = mysqli_query($connect,"SELECT * FROM students JOIN subjects ON students.student_id = subjects.student_id WHERE students.student_id LIKE '%$a' OR students.firstname LIKE '%$a' OR students.middlename LIKE '%$a' OR students.lastname LIKE '%$a' OR students.gender LIKE '%$a' OR students.course LIKE '%$a' OR students.year LIKE '%$a' OR subjects.sub1 LIKE '%$a' OR subjects.sub2 LIKE '%$a' OR subjects.sub3 LIKE '%$a' OR subjects.sub4 LIKE '%$a' OR subjects.sub5 LIKE '%$a' OR subjects.sub6 LIKE '%$a' OR subjects.sub7 LIKE '%$a' OR subjects.sub8 LIKE '%$a' OR subjects.sub9 LIKE '%$a' ORDER BY students.lastname ASC");

if (!$qry) {
    die("Query failed:" . mysqli_error($connect));
}

while($row = mysqli_fetch_array($qry)){
    echo "<tr>
            <td>".$row['student_id']."</td>
            <td>".$row['firstname']."</td>
            <td>".$row['middlename']."</td>
            <td>".$row['lastname']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['course']."</td>
            <td>".$row['year']."</td>
            <td>
            ".$row['sub1']." ,
            ".$row['sub2']." ,
            ".$row['sub3']." ,
            ".$row['sub4']." ,
            ".$row['sub5']." ,
            ".$row['sub6']." ,
            ".$row['sub7']." ,
            ".$row['sub8']." ,
            ".$row['sub9']." ,
            </td>
        </tr>";
}

?>
</tbody>
</table>
</body>
</html>