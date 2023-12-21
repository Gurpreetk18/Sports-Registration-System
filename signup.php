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
  <h1><img src="http://localhost/PROJECT/xx.png" height="50" width="50"> Sports Management System</h1>
</div>

<div class="navbar">
<a href="http://localhost/PROJECT/newpage.html">Home</a>
<div class="dropdown">
    <button class="dropbtn">login
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/PROJECT/stud_index.html">Students</a>
<a href="http://localhost/PROJECT/index.html">Admin</a>
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

echo "<form name=f method=get action=http://localhost/PROJECT/signup1.php>";
echo "<center><font color=white size=10px>Sign Up</font></center>";
echo "<table border=1 align=center bgcolor=black>";
echo "<tr><td><font color=white>Enter name: </font></td><td><input type=text name=name></td></tr>";

echo "<tr><td><font color=white>Select class: </font></td><td>";
echo "<select name=c>";
echo "<option value=FY>FY</option>";
echo "<option value=SY>SY</option>";
echo "<option value=TY>TY</option>";
echo "</select>";
echo "</td></tr>";

echo "<tr><td><font color=white>Enter email:</font></td><td> <input type=text name=email></td></tr>";
echo "<tr><td><font color=white>Enter mobile number: </font></td><td><input type=text name=mob></td></tr>";
echo "<tr><td><font color=white>Enter username:</font></td><td> <input type=text name=username></td></tr>";
echo "<tr><td><font color=white>Enter password: </font></td><td><input type=password name=password></td></tr>";

$q=mysql_query("select * from dept;");
echo "<tr><td><font color=white>Select Department name:</font></td><td><select name=s>";
while($r=mysql_fetch_array($q))
{
	echo "<option value=".$r[0].">".$r[1]."</option>";
}
echo "</select></td></tr>";
echo "<br><br></table>";
echo "<center><input type=submit value=ADD_RECORD></center></body></html>";

?>

</div>


<div class="footer">
  <h2>Thanku You</h2>
</div>
</body>
</html>