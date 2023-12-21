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

$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);
if(!$c)
echo "Connection NOT Done<br>";
if(!$d)
echo "<br>DB NOT Selected<br>";
echo "<html>";

$p=mysql_query("select rno,stud.sid,stud.sname,stud.email,stud.mob_no,stud.class,sports.sp_name,sports.date from registration,stud,sports where registration.sid=stud.sid and registration.sno=sports.sno;");
if(!$p)
echo mysql_error();
else
echo "<table border=1 bgcolor=grey><tr><td><font color=white>Registeration no</font></td><td><font color=white>Student id</font></td><td><font color=white>Student Name</font></td><td><font color=white>Email Id</font></td><td><font color=white>Mobile_NO</font></td><td><font color=white>Class</font></td><td><font color=white>Sports Name</font></td><td><font color=white>Date</font></td></tr>";
while($c=mysql_fetch_array($p))
{
echo "<tr><td><font color=white>".$c[0]."</font></td><td><font color=white>".$c[1]."</font></td><td><font color=white>".$c[2]."</font></td><td><font color=white>".$c[3]."</font></td><td><font color=white>".$c[4]."</font></td><td><font color=white>".$c[5]."</font></td><td><font color=white>".$c[6]."</font></td><td><font color=white>".$c[7]."</font></td><td><a href=sendmail.php?m1=".$c[3].",s1=".$c[6].">Mail</td></tr>";

}
echo "</table></center>";

?>

</div>


<div class="footer">
  <h2>Thanku You</h2>
</div>
</body>
</html>