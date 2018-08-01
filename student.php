<?php
 mysql_connect("localhost", "krishna", "krishna");
mysql_select_db("kumar");
 if(isset($_POST['submit']))
 {
    $c=0;
	$id=$_POST['id'];
	$a1=$_POST['first'];
	$a2=$_POST['second'];
	$a3=$_POST['third'];
	$a4=$_POST['fourth'];
	$a5=$_POST['fifth'];
	$a6=$_POST['sixth'];
	$a7=$_POST['seventh'];
	$a8=$_POST['eighth'];
	$a9=$_POST['ninth'];
	$a10=$_POST['tenth'];
	$q = "insert into ans(id,a,b,c,d,e,f,g,h,i,j) values('$id','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";
	mysql_query($q);
	$q1="select * from ans where id='$id'";
	$r=mysql_query($q1);
	while($row=mysql_fetch_array($r))
	{
	   if($row['a']=='4')
	   {
	     $c++;
	   }
	   if($row['b']=='3')
	   {
	    $c++;
	   }
	   if($row['c']=='4')
	   {
	    $c++;
	   }if($row['d']=='2')
	   {
	     $c++;
	   }
	   if($row['e']=='2')
	   {
	    $c++;
	   }
	   if($row['f']=='1')
	   {
	    $c++;
	   }
	   if($row['g']=='4')
	   {
	     $c++;
	   }
	   if($row['h']=='4')
	   {
	    $c++;
	   }
	   if($row['i']=='2')
	   {
	    $c++;
	   }
	   if($row['j']=='4')
	   {
	    $c++;
	   }   
    }
	}
?>
<html>
<head>
<style>
h4 {
				position:fixed;
				margin-left:90%;
				font-size:30px;
			}
		
			</style>
</head>
<body background="7.jpg" style="position:fixed;background-size:cover"><h4>
<a href="logout.php">Logout</a></h4>
<br><br><br><h1 style="margin-left:34%;font-size:100px;font-family:French Script MT;position:fixed">Congratulations</h1><br><br><br><br><br><br><br>
<?php 
if($c>7)
	$a='A';
if($c>=5 && $c<=7)
	$a='B';
if($c<5 && $c>=3)
	$a='C';
if($c<3)
	$a='F';
echo "<p style='font-family:Agency FB;font-size:85px;'>The result is $c out of 10. Your percentage is $c"."0%<br>&emsp;&emsp;Your evaluated grade in the quiz is $a .<br>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Please do Logout.<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Thank you !!!!</p>" ?>
</body>
</html>