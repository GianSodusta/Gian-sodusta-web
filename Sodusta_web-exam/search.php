<!DOCTYPE html>
<head>
<title></title>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

* {
	box-sizing: border-box;
}

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

.table-list tbody td {
  border: 2px solid #ddd;
  padding: 8px 15px; 
  font-size: 13px;
}

.table-list tbody tr:nth-child(even) {
  background-color: blue;
}

.table-list tbody tr:hover {
  background-color: #A3D1E6;
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
<td>Age</td>
<td>Gender</td>
<td>Course</td>
<td>Year Level</td>
<td>Address</td>
<td>Edit</td>
<td>Delete</td>
</tr>
</thead>
</div>

<?php

require 'db_connect.php';

$a = $_GET['keyword'];

$qry = mysqli_query($connect, "SELECT * FROM students WHERE student_id like '%$a' OR firstname like '%$a' OR middlename like '%$a' OR lastname like '%$a' OR age like '%$a' OR gender like '%$a' OR course like '%$a' OR year like '%$a' OR address like '%$a' ORDER BY lastname ASC");
while($rows = mysqli_fetch_array($qry)){
echo "<tr><tbody>

<td>".$rows['student_id']."</td>
<td>".$rows['firstname']."</td>
<td>".$rows['middlename']."</td>
<td>".$rows['lastname']."</td>
<td>".$rows['age']."</td>
<td>".$rows['gender']."</td>
<td>".$rows['course']."</td>
<td>".$rows['year']."</td>
<td>".$rows['address']."</td>
<td><a href='edit.php?id=".$rows['student_id']."'><img src='./img/edit.jpeg' style='width: 30px;' alt='Edit'></a></td>
<td><a href='delete.php?id=".$rows['student_id']."'><img src='./img/delete.jpeg' style='width: 30px;' alt='Delete'></a></td>
</tbody></tr>";
}

?>

</table>
</body>
</html>