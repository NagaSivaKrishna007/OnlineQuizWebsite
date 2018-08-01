<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    width: 50%;
    padding: 15px;
	font-size:15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus ,input[type=email]:focus{
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom:5px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #3B5998;
    color: white;
    padding: 16px 16px;
    margin: 8px 0;
    border: none;
	font-size:25px;
    cursor: pointer;
    width: 25%;
    opacity: 0.9;
}

.registerbtn:hover {
    background-color:white;
	color:#3B5998;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>
<form action="new.php" method="post">
  <div class="container">
    <center><h1>GO QUIZ<br>Registration Form</h1>
    <hr>
	<b>ID Number:&nbsp;</b>&nbsp;</b>
    <input type="text" placeholder="Enter your unique college ID" name="id" required>
	<br>
	<b>Username&nbsp;</b>&nbsp;</b>
    <input type="text" placeholder="Enter username" name="u" required>
	<br>
    <b>Password&nbsp;</b>
    <input type="password" placeholder="Enter Password" name="p" required>
	<br>
	<b>Email:&emsp;&emsp;</b>
    <input type="email" placeholder="Enter Email" name="e" required>
	<br>
	<b>Date of Birth</b>
	<input type="date" placeholder="Enter Date of Birth" name="d" required><br>
	<br>
	<b>Gender</b>
    <input type="radio" name="g" value="female">Female
	<input type="radio" name="g" value="male">Male
	<br>
	<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p></center><br>
  <center><button type="submit" class="registerbtn"id ="d1" name="submit">Register</button>&emsp;&emsp;&emsp;
	<button type="reset"  class="registerbtn" id="d1">Reset</button></center>
  </div>
  <div class="container signin">
    <h3>Already have an account? <a href="new1.php">Sign in</a></h3>
  </div>
</form>
</body>
</html>
<?php
mysql_connect("localhost", "krishna", "krishna");
mysql_select_db("kumar");
 if(isset($_POST['submit']))
 {
   $i=$_POST['id'];
   $user=$_POST['u'];
   $pass=$_POST['p'];
   $email=$_POST['e'];
   $dob=$_POST['d'];
   $gen=$_POST['g'];
   $role='student';
   $q="insert into register(id,user,pass,email,dob,gen) values($i,'$user','$pass','$email','$dob','$gen')";
   $q1="insert into login(email,pass,role) values('$email','$pass','$role')";
   if(mysql_query($q)) {

		echo "<script>alert('Success')</script>";
	}
	if(mysql_query($q1))
	{
	  echo "<script>alert('success please login')</script>";
	  header("location:new1.php");
		exit();
	}	
   }
?>
  