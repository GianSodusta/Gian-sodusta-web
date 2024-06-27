<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

body {
	background-color: #EDEEF6;
	font-family: 'Poppins', sans-serif;
	
}

p {
  text-align: center;
  font-size: 20px;
  font-weight: bold;
  color:  #ffffff;
}

form {
 outline-style: solid;
  outline-width: 3px;
  outline-color: #003BBE;
  max-width: 260px;
  margin: 0 auto;
  background-color: #4267B2;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px #888888;
} 

label {
  display: block;
  margin-bottom: 10px;
  color: #ffffff;
}

input[type="text"]{
  outline-style: solid;
  outline-width: 3px;
  outline-color: #003BBE;
  display: block;
  width: 239px;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  box-shadow: 0px 0px 5px #888888;
}
input[type="password"]:hover , input[type="text"]:hover {
  outline-style: solid;
  outline-width: 3px;
  outline-color: #ffffff;
}

input[type="submit"]:hover , input[type="reset"]:hover {
  outline-style: solid;
  outline-width: 3px;
  outline-color: #ffffff;
}



input[type="password"]{
  outline-style: solid;
  outline-width: 3px;
  outline-color: #003BBE;
  display: block;
  width: 239px;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  box-shadow: 0px 0px 5px #888888;
}


input[type="submit"] {
  width: 100px;
  background-color: #FA3E3E;
  color: #fff;
  cursor: pointer;
  border: none;
  border-radius: 8px;
  padding: 10px;
  font-size: 17px;
  margin: 0 auto;
}

input[type="submit"]:hover {
  background-color: #E63946;
}

input[type="reset"]:hover {
  background-color: #E63946;
}

input[type="reset"] {
  width: 100px;
  background-color: #FA3E3E;
  color: #fff;
  cursor: pointer;
  border: none;
  border-radius: 8px;
  padding: 10px;
  font-size: 17px;
  margin: 0 auto;
}

#buttons {
  height: 40px;
  display: flex;
  flex-direction: column;
  align-item: center;
  flex-direction: row;
  flex-direction: row-reverse;
  

}

a {
  text-align: center;
  display: block;
  color: #A8DADC;
}

a:hover {
   color: #ffffff;
}

</style>
</head>
<body>
<form method="post" action="login_admin.php">
<img class="card-img-top mx-auto" src="./img/admin.jpeg" style="width: 60%; margin-left: 53px;" alt="Card image cap">
<p>ADMIN LOGIN</p>
<img src="./img/ateneo1.jpeg" style="width: 255px;">
<br/>
<label for="username">Username:</label>
<input type="text" id="username" name="username" required>

<label for="password">Password:</label>
<input type="password" id="password" name="password" required>

<br/>
<div id="buttons">
<input type="submit" value="Login">
<input type="reset" value="Clear">
</div>
<br/>
<a href="signup.php"> Sign Up.</a>
</form>
</body>
</html>