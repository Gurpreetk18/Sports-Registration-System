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
<a href="http://localhost/PROJECT/a_home.html">Home</a>
<div class="dropdown">
    <button class="dropbtn">Add
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/PROJECT/addstud.php">Student</a>
      <a href="http://localhost/PROJECT/addsport.php">Sports</a>
    </div>
  </div>
<div class="dropdown">
    <button class="dropbtn">Update
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/PROJECT/updatestud.php">Students</a>
<a href="http://localhost/PROJECT/updatesport.php">Sports</a>
    </div>
  </div>
 <a href="http://localhost/PROJECT/stud_enrol.php">Enrollments</a>
<div class="dropdown">
    <button class="dropbtn">Report
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/PROJECT/a_record.php">Annually</a>
<a href="http://localhost/PROJECT/d_record.php">Department</a>
<a href="http://localhost/PROJECT/s_record.php">Sports</a>
<a href="http://localhost/PROJECT/win_report.php">Winners</a>
    </div>
  </div>
<div class="dropdown">
    <button class="dropbtn">Winners
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/PROJECT/bresult.php">Badminton</a>
<a href="http://localhost/PROJECT/result.php">Javelin Throw</a>
<a href="http://localhost/PROJECT/bresult.php">Athletics</a>
<a href="http://localhost/PROJECT/boxing.php">Boxing</a>
<a href="http://localhost/PROJECT/sresult.php">Shot Put</a>
    </div>
  </div>
<div class="dropdown">
    <button class="dropbtn">View
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/PROJECT/display.php">Students</a>
<a href="http://localhost/PROJECT/s_display.php">Sports</a>
    </div>
  </div>
  <a href="http://localhost/PROJECT/contact.html" class="right">Contact</a>
<a href="http://localhost/PROJECT/logout.php" class="right">Logout</a>
</div>


  <div class="main">
<?php
session_start();
$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);
if(!$c)
echo "Connection NOT Done<br>";
if(!$d)
echo "<br>DB NOT Selected<br>";


$sno=$_SESSION['x'];
echo $sno;

$name=$_GET['name'];
$class=$_GET['c'];
$email=$_GET['email'];
$mob=$_GET['mob'];
$username=$_GET['u'];
$password=$_GET['p'];
$dept_no=$_GET['d'];

$a="select sname from stud where sid='".$sno."';";
$b=mysql_fetch_array(mysql_query($a));
echo "<br><center>".$b[0];

$q="update stud set sname='".$name."',class='".$class."',email='".$email."',mob_no='".$mob."',username='".$username."',pwd='".$password."',dno='".$dept_no."' where sname='".$b[0]."';";
$z=mysql_query($q);
if(!$z)
echo mysql_error();
else
echo "record updated";
$p=mysql_query("select * from stud");
if(!$p)
echo mysql_error();
else
echo "<table border=1 bgcolor=white><tr><td>Student no</td><td>Student name</td><td>Student Class</td><td>Student Email</td><td>Mobile no</td><td>Username</td><td>Password</td><td>Dept_no</td></tr>";
while($c=mysql_fetch_array($p))
{
echo "<tr><td>".$c[0]."</td><td>".$c[1]."</td><td>".$c[2]."</td><td>".$c[3]."</td><td>".$c[4]."</td><td>".$c[5]."</td><td>".$c[6]."</td><td>".$c[7]."</td></tr>";
}
echo "</table></center>";
?>

</div>


<div class="footer">
  <h2>Thanku You</h2>
</div>
</body>
</html>