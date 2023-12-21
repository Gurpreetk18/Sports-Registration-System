<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div class="header">
  <h1><img src="http://localhost/PROJECT/xx.png" height="50" width="50">Sports Management System</h1>
</div>

<div class="navbar">
<a href="http://localhost/PROJECT/stud_home.html">Home</a>
<a href="http://localhost/PROJECT/registeration.php">Register</a>
<a href="http://localhost/PROJECT/enrollment.php">My Enrollments</a>
<a href="http://localhost/PROJECT/s_contact.html" class="right">Contact</a>
<a href="http://localhost/PROJECT/logout.php" class="right">Logout</a>
<a href="http://localhost/PROJECT/student_home.php" class="right">My profile</a>
</div>


  <div class="main">
<center><b><font size=10 color=white>MY PROFILE</font></b></center>

<?php
session_start();
$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);
if(!$c)
echo "Connection NOT Done<br>";
if(!$d)
echo "<br>DB NOT Selected<br>";

$user=$_SESSION['user'];
$pwd=$_SESSION['pwd'];

$p=mysql_query("select stud.sid,stud.sname,stud.class,stud.email,stud.mob_no,stud.username,stud.pwd,dept.d_name from stud,dept where stud.dno=dept.dno and username='".$user."' and pwd='".$pwd."';");
if(!$p)
echo mysql_error();
else
/*echo "<table border=1 bgcolor=black><tr><font color=white>Student no</tr><tr>Student name</tr><tr>Student Class</tr><tr>Student Email</tr><tr>Mobile no</tr><tr>Username</tr><tr>Password</tr><tr>Dept_name</tr>";*/
while($c=mysql_fetch_array($p))
{
echo "<center><table border=1 bgcolor=black><tr><td><font color=white>Student no</td><td><font color=white>".$c[0]."</font></td></tr><tr><td><font color=white>Student name</font></td><td><font color=white>".$c[1]."</font></td></tr><tr><td><font color=white>Student Class</font></td><td><font color=white>".$c[2]."</font></td></tr><tr><td><font color=white>Student Email</font></td><td><font color=white>".$c[3]."</font></td></tr><tr><td><font color=white>Mobile No</font></td><td><font color=white>".$c[4]."</font></td></tr><tr><td><font color=white>Username</font></td><td><font color=white>".$c[5]."</font></td></tr><tr><td><font color=white>Password</font></td><td><font color=white>".$c[6]."</font></td></tr><tr><td><font color=white>Department Name</font></td><td><font color=white>".$c[7]."</td></tr>";
}
echo "</table></center>";
?>

</div>

<div class="footer">
  <h2>Thank You</h2>
</div>
</body>
</html>