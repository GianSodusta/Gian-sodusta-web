<?php
include("db_connect.php");

$id = $_GET['id'];

$sql = mysqli_query($connect, "SELECT * FROM subjects WHERE student_id ='$id'");
if (!$sql) {
    die("Query failed: " . mysqli_error($connect));
}

if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_array($sql);
   
    $a = $row['student_id'];
    $b = $row['sub1'];
    $c = $row['sub2'];
    $d = $row['sub3'];
    $e = $row['sub4'];
    $f = $row['sub5'];
    $g = $row['sub6'];
    $h = $row['sub7'];
    $i = $row['sub8'];
    $j = $row['sub9'];
} else {
    die("Query failed: " . mysqli_error($connect));
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
form {
  outline-style: solid;
  outline-width: 3px;
  outline-color: #003BBE;
  max-width: 305px;
  height: 550px;
  margin: 0 auto;
  background-color: #4267B2;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #888888;
} 


input[type="text"], select, textarea{
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
   color: #fff;
}

input[type="submit"], input[type="reset"] {
  background-color: #86A8CF;
  border-radius: 20px;
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

h1 {
  text-align: center;
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
  flex-basis: calc(35.33% - 10px);
  margin: 5px;
  padding: 10px;
  border: 1px solid #ccc;
  align-items: center;
  justify-content: center;
  text-align: center;
  cursor: pointer;
  transition: background-color 0.3s;
}

.subjects label:hover {
  background-color: #9BC4E2;
  color: #fff;
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
}
</style>
</head>
<body>
<form method="post" action="subject_edit_exec.php">
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<h1>Edit set of subjects</h1>
 <input type="text" id="student_id" name="student_id" placeholder="Student Id" value="<?php echo $id;?>"/ Required>
<br/>
<h1>List of subjects</h1>
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

  <input type="checkbox" id="peCheckbox" name="sub9" value="Pysical Education">
  <label for="peCheckbox">Physical Education</label>  
  
</div>
         <br/>
         <br/>   
         <div id="buttons">
         <input type="submit" value="Update" style="width: 120px;">
         <input type="reset" value="Clear" style="width: 120px;">
         </div>
         </div>
          </div>
        </div>
    </form>
</body>
</html>