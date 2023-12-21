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
<a href="http://localhost/PROJECT/myresult.php">My Results</a>
<a href="http://localhost/PROJECT/s_contact.html" class="right">Contact</a>
<a href="http://localhost/PROJECT/logout.php" class="right">Logout</a>
<a href="http://localhost/PROJECT/student_home.php" class="right">My Profile</a>
</div>


  <div class="main">
<?php
echo "<html><body><center>";
$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);

if(!$c)
echo "Connection NOT Done<br>";
if(!$d)
echo "<br>DB NOT Selected<br>";


session_start();
$user=$_SESSION['user'];
$pwd=$_SESSION['pwd'];

echo "<b><center><font color=white size=8>Successfully enrolled for:</font></center></br>";
$a="select rno,stud.sid,stud.sname,stud.email,stud.mob_no,stud.class,sports.sp_name,sports.date from registration,stud,sports where registration.sid=stud.sid and registration.sno=sports.sno and stud.pwd='$pwd'and stud.username='$user';";

$result=mysql_query($a,$c);
if(!$result)
echo "unable" ;
else
echo "<table border=1 bgcolor=black><tr><td><font color=white>Registration no</td><td><font color=white>Student no</td><td><font color=white>Student name</td><td><font color=white>Registered Email</td><td><font color=white>Mobile no</td><td><font color=white>Class</td><td><font color=white>Sport name</td><td><font color=white>Date</td></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td><font color=white>".$row[0]."</td><td><font color=white>".$row[1]."</td><td><font color=white>".$row[2]."</td><td><font color=white>".$row[3]."</td><td><font color=white>".$row[4]."</font></td><td><font color=white>".$row[5]."</font></td><td><font color=white>".$row[6]."</td><td><font color=white>".$row[7]."</td><td><a href=rdelete.php?id1=".$row[0]."><font color=white>Unenroll</font></td></tr>";
}
//echo "<script>location.href='Regmail.php'</script>";
echo "</table>";

echo "<b><font color:white size:4>Registration Complete</font></b>";
echo "</center></body></html>";
?>
</div>
<div class="footer">
  <h2>Thanku You</h2>
</div>
</body>
</html>