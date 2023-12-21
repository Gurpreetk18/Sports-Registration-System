<!DOCTYPE html>
<html lang="en">
<head>

<style>
input[type=button], input[type=submit], input[type=reset] {
  background-color: #006666;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
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
$sno=$_GET['id'];
$_SESSION['x']=$sno;
$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);
if(!$c)
echo "Connection NOT Done<br>";
if(!$d)
echo "<br>DB NOT Selected<br>";

echo "<html><body><form name=f method=get action=http://localhost/PROJECT/studedit2.php><center>";

$q=mysql_fetch_array(mysql_query("select * from stud where sid=$sno;"));
echo "<table border=1px bgcolor=black>";
echo "<tr><td><font color=white>Enter new name: </font></td><td><input type=text name=name value=".$q[1]."></td></tr>";


echo "<tr><td><font color=white>Select class: </font></td><td>";
echo "<select name=c value=" .$q[2].">";
echo "<option value=FY>FY</option>";
echo "<option value=SY>SY</option>";
echo "<option value=TY>TY</option>";
echo "</select></td></tr>";

echo "<tr><td><font color=white>Enter new email:</font></td><td> <input type=text name=email value=".$q[3]."></td></tr>";
echo "<tr><td><font color=white>Enter new mobile no: </font></td><td><input type=text name=mob value=".$q[4]."></td></tr>";
echo "<tr><td><font color=white>Enter new username:</font></td><td> <input type=text name=u value=".$q[5]."></td></tr>";
echo "<tr><td><font color=white>Enter new password:</font></td><td> <input type=text name=p value=".$q[6]."></td></tr>";

//echo "<tr><td>Enter new dept_no:</td><td> <input type=text name=d value=".$q[7]."></td></tr>";


$l=mysql_query("select * from dept;");
echo "<tr><td>Select Department name:</td><td><select name=d><br><br><br>";
while($m=mysql_fetch_array($l))
{
	echo "<option value=".$m[0].">".$m[1]."</option>";
}
echo "</select></td></tr></center></table>";
echo "<center><input type=submit value=UPDATE></center>";
echo "</body></html>";
?>
</div>


<div class="footer">
  <h2>Thanku You</h2>
</div>
</body>
</html>