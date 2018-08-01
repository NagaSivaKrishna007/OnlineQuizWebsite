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

input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
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
<form action="new1.php" method="post">
  <div class="container">
    <center><h1>GO QUIZ-Login Form</h1>
    <hr>
	<b>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
    <input type="email" placeholder="Enter email" name="e" required>
	<br><br>
    <b>Password:</b>
    <input type="password" placeholder="Enter Password" name="p" required>
	<br><br>
	<h3>Select Role : <select name="type"><option>student</option><option>admin</option>
	</select></h3><br><br>
	<center><button type="submit" class="registerbtn" id="d1" name="submit">Login</button><br><br>
	<button type='reset'class="registerbtn "id="d1">Clear</button></center><br>
	<h3>If you don't have an account, Please <a href="new.php">Register </a>here</h3><br>
	</div>
</form>
</body>
</html>
<?php
mysql_connect("localhost", "krishna", "krishna");
mysql_select_db("kumar");
 if(isset($_POST['submit']))
 {
  
	$email=$_POST['e'];
	$pass=$_POST['p'];
	$type=$_POST['type'];
	$q="select * from login where email='$email' and pass='$pass' and role='$type'";
 $r=mysql_query($q);
 while($row=mysql_fetch_array($r))
 {
  if($row['email']==$email && $row['pass']==$pass && $row['role']=='student')
  {
    header("Location:index1.html");
  }
  else
  {
    echo "<script>alert('email or password invalid');</script>";
  }
  }
}
?>