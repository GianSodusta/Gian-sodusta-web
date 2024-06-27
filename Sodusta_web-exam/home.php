<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

body {
  background-image: url('./img/ateneo5.jpeg');
  background-repeat: no-repeat;
  background-size: cover;
}

p {
  text-align: center;
  font-size: 22px;
  font-weight: bold;
  color:  white;
  font-family: 'Poppins', sans-serif;
}

.container {
  outline-style: solid;
  outline-width: 3px;
  outline-color: #003BBE;
  max-width: 260px;
  margin: 0 auto;
  background-color: transparent;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #888888;
  height: 480px;
  margin-top: 55px;
} 

label {
  display: block;
  margin-bottom: 10px;
  color: #ffffff;
}

.container {
   text-align: center;
}


button:hover {
  height: 45px;
  width: 190px;
  border-radius: 15px;
  outline-style: solid;
  outline-width: 3px;
  outline-color: #0487E2;
  border-style: solid;
  border-width: 3px;
  border-color: #ffffff;
  color: #ffffff;
}

button{
  height: 35px;
  width: 180px;
  border-radius: 15px;
  outline-style: solid;
  outline-width: 3px;
  outline-color: #0487E2;
  border-style: solid;
  border-width: 3px;
  border-color: #0463CA;
  color: #003B8E; 
}



</style>
</head>
<body>
<div class="container">
<img class="card-img-top mx-auto" src="./img/home.JPEG" style="width: 60%; margin: 0px;" alt="Card image cap">
<p>WELCOME ADMIN<img src="./img/hello.jpeg" style="width: 21px;"></p>
<br/>
<button onclick="window.location.href = 'student.php'"  style=" background-color: #65C2F5;">Add Students</button>
<br/>
<br/>
<button onclick="window.location.href = 'subject.php'" style=" background-color: #65BCBF;">Add Subjects</button>
<br/>
<br/>
<button onclick="window.location.href = 'view.php'" style=" background-color: #A8DADC;">View Data</button>
<br/>
<br/>
<button onclick="redirectToStudentPage()" style="background-color: #F4908A;">Exit</button>

</div>
<br/>
<br/>
</form>


<script>
function redirectToStudentPage() {
  setTimeout(function() {
    window.location.href = 'index.php';
  }, 2000);
}
</script>
</body>

</html>