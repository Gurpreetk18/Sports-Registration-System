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
echo "<html><body><center>";
$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);
if(!$c)
echo "Connection NOT Done<br>";
if(!$d)
echo "<br>DB NOT Selected<br>";
echo "<font color=white>Badminton";
$p=mysql_query("select wno,sp_name,First_position,Second_position,Third_position from sports,result where sports.sno=result.sno and sports.sp_name='Badminton';"
);
if(!$p)
echo mysql_error();
else
echo "<table border=1 bgcolor=black><tr><td><font color=white>Winner no</td><td><font color=white>Sports name</td><td><font color=white>First position</td><td><font color=white>Second position</td><td><font color=white>Third position</td></tr>";
while($c=mysql_fetch_array($p))
{

 echo "<tr><td><font color=white>".$c[0]."</td><td><font color=white>".$c[1]."</td><td><font color=white>".$c[2]."</td><td><font color=white>".$c[3]."</td><td><font color=white>".$c[4]."</td></tr>";

}
echo "</table>";
echo "<font color=white>Javelin throw";
$p=mysql_query("select wno,sp_name,First_position,Second_position,Third_position from sports,result where sports.sno=result.sno and sports.sp_name='Javelin throw';");
if(!$p)
echo mysql_error();
else
echo "<table border=1 bgcolor=black><tr><td><font color=white>Winner no</td><td><font color=white>Sports name</td><td><font color=white>First position</td><td><font color=white>Second position</td><td><font color=white>Third position</td></tr>";
while($c=mysql_fetch_array($p))
{

 echo "<tr><td><font color=white>".$c[0]."</td><td><font color=white>".$c[1]."</td><td><font color=white>".$c[2]."</td><td><font color=white>".$c[3]."</td><td><font color=white>".$c[4]."</td></tr>";

}
echo "</table>";

echo "<font color=white>Athletics";
$p=mysql_query("select wno,sp_name,First_position,Second_position,Third_position from sports,result where sports.sno=result.sno and sports.sp_name='Athletics';");
if(!$p)
echo mysql_error();
else
echo "<table border=1 bgcolor=black><tr><td><font color=white>Winner no</td><td><font color=white>Sports name</td><td><font color=white>First position</td><td><font color=white>Second position</td><td><font color=white>Third position</td></tr>";
while($c=mysql_fetch_array($p))
{
 echo "<tr><td><font color=white>".$c[0]."</td><td><font color=white>".$c[1]."</td><td><font color=white>".$c[2]."</td><td><font color=white>".$c[3]."</td><td><font color=white>".$c[4]."</td></tr>";

}
echo "</table>";

echo "<font color=white>Boxing";
$p=mysql_query("select wno,sp_name,First_position,Second_position,Third_position from sports,result where sports.sno=result.sno and sports.sp_name='Boxing';");
if(!$p)
echo mysql_error();
else
echo "<table border=1 bgcolor=black><tr><td><font color=white>Winner no</td><td><font color=white>Sports name</td><td><font color=white>First position</td><td><font color=white>Second position</td><td><font color=white>Third position</td></tr>";
while($c=mysql_fetch_array($p))
{

 echo "<tr><td><font color=white>".$c[0]."</td><td><font color=white>".$c[1]."</td><td><font color=white>".$c[2]."</td><td><font color=white>".$c[3]."</td><td><font color=white>".$c[4]."</td></tr>";

}
echo "</table>";

echo "<font color=white>Shot Put";
$p=mysql_query("select wno,sp_name,First_position,Second_position,Third_position from sports,result where sports.sno=result.sno and sports.sp_name='Shot put';");
if(!$p)
echo mysql_error();
else
echo "<table border=1 bgcolor=black><tr><td><font color=white>Winner no</td><td><font color=white>Sports name</td><td><font color=white>First position</td><td><font color=white>Second position</td><td><font color=white>Third position</td></tr>";
while($c=mysql_fetch_array($p))
{

 echo "<tr><td><font color=white>".$c[0]."</td><td><font color=white>".$c[1]."</td><td><font color=white>".$c[2]."</td><td><font color=white>".$c[3]."</td><td><font color=white>".$c[4]."</td></tr>";

}
echo "</table>";


echo "</center></body></html>";
?>
</div>


<div class="footer">
  <h2>Thank You</h2>
</div>
</body>
</html>


