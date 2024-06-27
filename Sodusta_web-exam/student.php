<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="student_style.css">

<style>

body {
	background-color: #EDEEF6;
	font-family: 'Poppins', sans-serif;	
}

.header {
   background-image: url('./img/ateneobg3.0.jpeg');
   background-repeat: no-repeat;
   background-size: cover;
}

table {
   margin-top: 5px;
}

input[type="text"], select, textarea {
   width: 300px;
   height: 30px;
   margin: 0;
   border-radius: 15px;
}

input[type="text"]:hover, select:hover, textarea:hover {
   width: 310px;
   height: 33px;
   outline-style: solid;
   outline-width: 3px;
   outline-color: #0463CA;
   font-weight: bold;
}

input[type="submit"]:hover, input[type="reset"]:hover {
   width: 130px;
   outline-style: solid;
   outline-width: 3px;
   outline-color: #fff;
   font-weight: bold;
   border-radius: 15px;
}

#buttons {
  height: 40px;
  display: flex;
  flex-direction: column;
  align-item: center;
  flex-direction: row;
  flex-direction: row-reverse;
  justify-content: space-evenly;
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

.image {
  text-align: center;
}


</style>

</head>
<body>
<div class="header">
<div class="image">
<img src="./img/ateneo.jpeg" style="width: 60%;">
</div>
<br/>
<br/>
<br/>
<button onclick="window.location.href = 'home.php'" >Exit</button>
<button id="open">+ Enroll new student</button>
<form method="get" action="search.php">
<input type="text" name="keyword" style="height: 35px; width: 250px">
<input type="submit" name="search" value="SEARCH">
</form>
<br/>
<br/>
</div>
 
   <form method="POST" action="student_insert.php">
    <div class="modal-container" id="modal_container" >
        <div class="modal">
             <span id="close"> X  </span>
             <div class="modal-inner" >
            <h1>Add New Student!</h1>
             <br/>
           <input type="text" id="student_id" name="student_id" placeholder="Student ID" Required>
           <br/>
           <input type="text" id="firstname" name="firstname" placeholder="First Name" Required>
           <br/>
           <input type="text" id="middlename" name="middlename" placeholder="Middle Name">
           <br/>

           <input type="text" id="lastname" name="lastname" placeholder="Last Name" Required>
           <br/>
           <input type="text" id="age" name="age" placeholder="Age" Required>
           <br/>
            <select id="gender" name="gender" placeholder="Gender">
              <option>Select Gender</option>
             <option>Male</option>
             <option>Female</option>
             </select>
           <br/>
           <input type="text" id="course" name="course" placeholder="Course" Required>
           <br/>
           <select id="year" name="year" placeholder="Year Level">
             <option>Select Year Level</option>
             <option>1st Year</option>
             <option>2nd Year</option>
             <option>3rd Year</option>
             <option>4th Year</option>
             </select>
           <br/>
             <textarea id="address" name="address" placeholder="Address"></textarea>
             <br/>
             <br/>
         <div id="buttons">
         <input type="submit" value="Enroll" style="width: 120px;">
         <input type="reset" value="Clear" style="width: 120px;">
         </div>
         </div>
          </div>
        </div>
    </form>
<div class="data" style="overflow-x: auto;">
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

$qry = mysqli_query($connect, "SELECT * FROM students");
if (!$qry) {
 echo "Error" . mysqli_error($connect);
 exit;
}

if(mysqli_num_rows($qry) >= 1) {
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

}else{
  echo "No Records!...";
 }
?>
</table>

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