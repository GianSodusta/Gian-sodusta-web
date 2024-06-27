<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="subject_style.css">

<style>
.header {
   background-image: url('./img/ateneo4.jpeg');
   background-repeat: no-repeat;
   background-size: cover;
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
  justify-content: center;
}

.subjects input[type="checkbox"] {
  display: none;
}

.subjects label {
  position: relative;
  display: flex;
  flex-basis: calc(33.33% - 10px);
  margin: 5px;
  padding: 10px;
  border: 1px solid #ccc;
  align-items: center;
  justify-content: center;
  text-align: center;
  cursor: pointer;
  transition: background-color 0.3s;
  font-size: 12px;
}

.subjects label:hover {
  background-color: #9BC4E2;
}

.subjects input[type="checkbox"]:checked + label {
  background-color: #0F9690;
}

.subjects input[type="checkbox"]:checked + label::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 10px;
  height: 10px;
  background-color: #6DA5C0;
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
<br/>
<button onclick="window.location.href = 'home.php'" >Exit</button>
<button id="open">+ Add Subject to Students</button>
<form class="search" method="get" action="subject_search.php">
<input type="text" name="keyword" style="height: 35px; width: 250px">
<input type="submit" name="search" value="Search">
</form>
<br/>
<br/>
</div>

  <form class="subjects" method="POST" action="subject_insert.php">
    <div class="modal-container" id="modal_container" >
        <div class="modal">
             <span id="close"> X  </span>
             <div class="modal-inner" >
       <h1>Insert Subjects to Student</h1>
         <br/>
       <input type="text" name="student_id" id="student_id" placeholder="Student ID">
        <br/>
         <br/>
             <h1>List of Subjects</h1>
            <br/>
            <div class="subjects">
  <input type="checkbox" id="mathCheckbox" name="sub1" value="Math">
  <label for="mathCheckbox">Math</label>
 
  <input type="checkbox" id="englishCheckbox" name="sub2" value="English">
  <label for="englishCheckbox">English</label> 

  <input type="checkbox" id="filipinoCheckbox" name="sub3" value="Filipino">
  <label for="filipinoCheckbox">Filipino</label> 
  
  <input type="checkbox" id="scienceCheckbox" name="sub4" value="Science">
  <label for="scienceCheckbox">Science</label>

  <input type="checkbox" id="tleCheckbox" name="sub5" value="T.L.E">
  <label for="tleCheckbox">T.L.E</label>

  <input type="checkbox" id="historyCheckbox" name="sub6" value="History">
  <label for="historyCheckbox">History</label>
  
  <input type="checkbox" id="computerCheckbox" name="sub7" value="Computer">
  <label for="computerCheckbox">Computer</label>

  <input type="checkbox" id="apCheckbox" name="sub8" value="Araling Panlipunan">
  <label for="apCheckbox">Araling Panlipunan</label>  

  <input type="checkbox" id="peCheckbox" name="sub9" value="Physical Education">
  <label for="peCheckbox">Physical Education</label>  
</div>  
    <br/>
         <div id="buttons">
         <input type="submit" value="Enroll" style="width: 120px;">
         <input type="reset" value="Clear" style="width: 120px;">
         </div>
         </div>
          </div>
        </div>
    </form>
<div class="data">
<table class="table-list">
<thead>
<tr>

<td>Student ID</td>
<td>Subject</td>
<td>Edit</td>
<td>Delete</td>
</tr>
</thead>
</div>

<?php
require 'db_connect.php';

$qry = mysqli_query($connect, "SELECT * FROM subjects");
if (!$qry) {
 echo "Error" . mysqli_error($connect);
 exit;
}

if(mysqli_num_rows($qry) >= 1) {
  while($rows = mysqli_fetch_array($qry)){
  echo "<tr><tbody>
      <td>".$rows['student_id']."</td>
      <td>
      ".$rows['sub1']." ,
      ".$rows['sub2']." , 
      ".$rows['sub3']." ,
      ".$rows['sub4'].",
      ".$rows['sub5']." ,
      ".$rows['sub6']." ,
      ".$rows['sub7']." ,
      ".$rows['sub8']." ,
      ".$rows['sub9']." ,
      </td>
      <td><a href='subject_edit.php?id=".$rows['student_id']."'><img src='./img/edit.jpeg' style='width: 30px;' alt='Edit'></a></td>
      <td><a href='delete_subject.php?id=".$rows['student_id']."'><img src='./img/delete.jpeg' style='width: 30px;' alt='Delete'></a></td>
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