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
<a href="http://localhost/PROJECT/s_contact.html" class="right">Contact</a>
<a href="http://localhost/PROJECT/logout.php" class="right">Logout</a>
</div>


  <div class="main">
<?php
$rno=$_GET['id1'];
$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);
if(!$c)
echo "Connection NOT Done<br>";
if(!$d)
echo "<br>DB NOT Selected<br>";
echo "<html>";

$q="delete from registration where rno='".$rno."'";
$z=mysql_query($q);
if(!$z)
echo mysql_error();
else
{
echo "<script>alert('RECORD DELETED')</script>";
echo "<script>location.href='http://localhost/PROJECT/enrollment.php'</script>";
}


/*$p=mysql_query("select rno,stud.sid,stud.sname,stud.email,stud.mob_no,stud.class,sports.sp_name,sports.date from registration,stud,sports where registration.sid=stud.sid and registration.sno=sports.sno ;");
if(!$p)
echo mysql_error();
else
echo "<table border=1 bgcolor=white><tr><td>Registeration no</td><td>Student id</td><td>Student Name</td><td>Email</td><td>Mobile_NO</td><td>Class</td><td>Sports Name</td><td>Date</td></tr>";
while($c=mysql_fetch_array($p))
{
echo "<tr><td>".$c[0]."</td><td>".$c[1]."</td><td>".$c[2]."</td><td>".$c[3]."</td><td>".$c[4]."</td><td>".$c[5]."</td><td>".$c[6]."</td><td>".$c[7]."</td></tr>";

}
echo "</table></center>";

echo "<script>alert('GOING So SOON :( You are Logged out')</script>";
echo "<script>location.href='registeration1.php'</script>";*/


?>

</div>


<div class="footer">
  <h2>Thanku You</h2>
</div>
</body>
</html>