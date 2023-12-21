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
$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);
if(!$c)
echo "Connection NOT Done<br>";
if(!$d)

echo "<br>DB NOT Selected<br>";


echo "<html><body>";
echo "<form name=f method=get action=http://localhost/PROJECT/registeration1.php>";

echo "<center><font color=white size=10px>Sports Enrollment Form</font></center>";
echo "<table align=center bgcolor=black>";

/*echo "<tr><td><font color=white>Enter name: </font></td><td><input type=text name=name></td></tr>";

echo "<tr><td><font color=white>Select class: </font></td><td>";
echo "<select name=c>";
echo "<option value=FY>FY</option>";
echo "<option value=SY>SY</option>";
echo "<option value=TY>TY</option>";
echo "</select>";
echo "</td></tr>";

echo "<tr><td><font color=white>Enter Registered Email id:</font></td><td> <input type=text name=email></td></tr>";
echo "<tr><td><font color=white>Enter Contact Number: </font></td><td><input type=text name=mob></td></tr>";
*/
/*$q=mysql_query("select * from dept;");
echo "<tr><td><font color=white>Select Department name:</font></td><td><select name=s>";
while($r=mysql_fetch_array($q))
{
	echo "<option value=".$r[0].">".$r[1]."</option>";
}
echo "</select></td></tr>";
*/

$q=mysql_query("select * from sports;");
echo "<tr><td><font color=white>Select Sports name:</font></td><td><select name=spname>";
while($r=mysql_fetch_array($q))
{
	echo "<option value=".$r[0].">".$r[1]."</option>";
}
echo "</select></td></tr>";



//echo "<tr><td><font color=white>Enter Sports name:</font></td><td> <input type=text name='name'></td></tr>";

echo "<br><br></table>";
echo "<center><input type=submit value=Enroll></center>";
echo "</body></html>";
?>

</div>

<div class="footer">
  <h2>Thanku You</h2>
</div>
</body>
</html>