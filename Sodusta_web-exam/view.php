<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="view_style.css">
<style>
body {
  background-image: url('./img/ateneobg3.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  font-family: 'Poppins', sans-serif;
}

.header {
 
}

/* Table Structure design*/
table {
 margin-top: 5px;
}

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
  font-size: 13px;
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

input[type="checkbox"] {
  transform: scale(1.5);
}

input[type="checkbox"]:hover {
  outline-style: solid;
  outline-width: 2px;
  outline-color: #86ABCF;
  border: 1px solid #ccc;
  transform: scale(2.0);
}

label {
   font-size: 1.3em;
   color: #fff;
}

.subjects {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.subjects input[type="checkbox"] {
  display: none;
}

.subjects p {
  position: relative;
  display: flex;
  flex-basis: calc(33.33% - 10px);
  margin: 5px;
  padding: 10px;
  border: 2px solid #ccc;
  align-items: center;
  justify-content: center;
  text-align: center;
  cursor: pointer;
  transition: background-color 0.3s;
  font-size: 15px;
  color: #fff;
  font-weight: bold;
  background-color: #4FACFE;
}

button, input[type="submit"] {
  height: 40px;
  background-color:#0463CA;
  color: #fff;
  border-radius: 12px;
  outline-style: solid;
  outline-width: 2px;
  outline-color: #09B1EC;
  border-style: solid;
  border-width: 2px;
  border-color: #48B9A8;
}

button:hover, input[type="submit"]:hover {
  background-color:#0463CA;
  color: gold;
  border-radius: 13px;
  outline-style: solid;
  outline-width: 2px;
  outline-color: #fff;
  border-style: solid;
  border-width: 3px;
  border-color: gold;
}

form{
  float: right;
  display: inline;
}

input[type="text"] {
   height: 20px;
   border-radius: 12px; 
}

input[type="text"]:hover {
   height: 20px;
   border-radius: 15px; 
   outline-style: solid;
   outline-width: 3px;
   outline-color: gold;
}

.image {
   text-align: center;
}

</style>
</head>
<body>
<div class="header">
<div class="image">
<img src="./img/ateneo1.jpeg" style="width: 80%;">
</div>
<br/>
<br/>
<br/>
<br/>
<button onclick="window.location.href = 'home.php'" >Exit</button>
<button id="open">Subjects List</button>
<form method="get" action="view_search.php">
<input type="text" name="keyword" style="height: 35px; width: 250px">
<input type="submit" name="search" value="Search">
</form>
<br/>
<br/>
</div>

 <div class="modal-container" id="modal_container" >
        <div class="modal">
             <span id="close"> X  </span>
             <div class="modal-inner" >
            <h1>List of Subjects</h1>
           <br/>
         <div class="subjects">
         <p>Math</p>
         <p>English</p>
         <p>Filipino</p>
         <p>Science</p>
         <p>T.L.E</p>
         <p>History</p>
         <p>Computer</p>
         <p>Araling Panlipunan</p>
         <p>Physical Education</p>
       </div>
   </div>
</div>
</div>
<div>
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

$qry = "SELECT * FROM students JOIN subjects ON students.student_id = subjects.student_id ORDER BY lastname ASC";
$result = mysqli_query($connect, $qry); // Execute the query

if (!$result) {
    echo "Error: " . mysqli_error($connect);
    exit;
}

if(mysqli_num_rows($result) >= 1){
    while($row = mysqli_fetch_array($result)){
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
} else {
    echo "<tr><td colspan='17'>No Records!...</td></tr>";
}
mysqli_close($connect); // Close the database connection
?>
</tbody> <!-- Closed the tbody tag here -->
</table>
</div>
<script>
const open = document.getElementById('open');
const close = document.getElementById('close');
const modal = document.getElementById('modal_container');

open.addEventListener('click', () => {
	modal.classList.add('show');
});

close.addEventListener('click', () => {
	modal.classList.remove('show');
});
    </script>
</body>
</html>