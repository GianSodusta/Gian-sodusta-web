<?php
include("db_connect.php");

$id = $_GET['id'];

$sql = mysqli_query($connect, "SELECT * FROM students WHERE student_id ='$id'");
if (!$sql) {
    die("Query failed: " . mysqli_error($connect));
}

if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_array($sql);
   
    $a = $row['student_id'];
    $b = $row['firstname'];
    $c = $row['middlename'];
    $d = $row['lastname'];
    $e = $row['age'];
    $f = $row['gender'];
    $g = $row['course'];
    $h = $row['year'];
    $i = $row['address'];
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
  max-width: 310px;
  margin: 0 auto;
  background-color: #4267B2;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #888888;
} 


input[type="text"], select, textarea {
   width: 300px;
   height: 30px;
   margin: 0 auto;
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
</style>
</head>
<body>
<form method="post" action="edit_exec.php">
<h1>Edit Student Data</h1>

<input type="hidden" name="id" value="<?php echo $id;?>"/>

<br/>
<input type="text" id="student_id" name="student_id" placeholder="Student ID" value="<?php echo $a;?>"/>
<br/>
<input type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $b;?>"/>
<br/>
<input type="text" id="middlename" name="middlename" placeholder="Middle Name" value="<?php echo $c;?>"/>
<br/>

<input type="text" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $d;?>"/>
<br/>
<input type="text" id="age" name="age" placeholder="Age" value="<?php echo $e;?>"/>
<br/>
<select id="gender" name="gender" placeholder="Gender" value="<?php echo $f;?>"/>
             <option>Select Gender</option>
             <option>Male</option>
             <option>Female</option>
</select>
<br/>
<input type="text" id="course" name="course" placeholder="Course" value="<?php echo $g;?>"/>
<br/>
<select id="year" name="year" placeholder="Year Level" value="<?php echo $h;?>"/>
             <option>Select Year Level</option>
             <option>1st Year</option>
             <option>2nd Year</option>
             <option>3rd Year</option>
             <option>4th Year</option>
 </select>
 <br/>
<textarea id="address" name="address" placeholder="Address" value="<?php echo $i;?>"/></textarea>
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