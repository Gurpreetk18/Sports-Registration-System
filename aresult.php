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


echo "<html><body>";
echo "<form name=f method=get action=http://localhost/PROJECT/aresult1.php>";

echo "<center><font color=white size=10px>Winner Entry For Athletics</font></center>";
echo "<table align=center bgcolor=black>";



$q=mysql_query("select stud.sname from stud,registration,sports where stud.sid=registration.sid and sports.sno=registration.sno and sports.sp_name='Athletics';");
echo "<tr><td><font color=white size=5px>Select First Position:</font></td><td><select name=a>";
while($r=mysql_fetch_array($q))
{
	echo "<option value=".$r[0].">".$r[0]."</option>";
}
echo "</select></td></tr>";
$q=mysql_query("select stud.sname from stud,registration,sports where stud.sid=registration.sid and sports.sno=registration.sno and sports.sp_name='Athletics';");
echo "<tr><td><font color=white size=5px>Select Second Position:</font></td><td><select name=b>";
while($r=mysql_fetch_array($q))
{
	echo "<option value=".$r[0].">".$r[0]."</option>";
}
echo "</select></td></tr>";
$q=mysql_query("select stud.sname from stud,registration,sports where stud.sid=registration.sid and sports.sno=registration.sno and sports.sp_name='Athletics';");
echo "<tr><td><font color=white size=5px>Select Third Position:</font></td><td><select name=c>";
while($r=mysql_fetch_array($q))
{
	echo "<option value=".$r[0].">".$r[0]."</option>";
}
echo "</select></td></tr>";
echo "<br><br></table>";
echo "<center><input type=submit value=Confirm></center>";
echo "</body></html>";
?>

</div>

<div class="footer">
  <h2>Thank You</h2>
</div>
</body>
</html>