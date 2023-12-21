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
echo "<html><body><center>";
$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);

if(!$c)
echo "Connection NOT Done<br>";
if(!$d)
echo "<br>DB NOT Selected<br>";

$name=$_GET['name'];
$class=$_GET['c'];

$mob=$_GET['mob'];
session_start();
$email=$_GET['email'];
$username=$_GET['username'];
$password=$_GET['password'];
$_SESSION['u']=$username;
$_SESSION['p']=$password;
$_SESSION['m1']=$email;
$id=$_GET['s'];

$q="insert into stud(sname,class,email,mob_no,username,pwd,dno) values('".$name."','".$class."','".$email."',".$mob.",'".$username."','".$password."',".$id.");";
$a=mysql_query($q);
if(!$a)
echo mysql_error();

else
/*$p=mysql_query("select * from stud");
if(!$p)
echo mysql_error();

else
echo "<table border=1 bgcolor=black>><tr><td><font color=white>Student no</td><td><font color=white>Student name</td><td><font color=white>Class</td><td><font color=white><Email</td><td><font color=white>Mobile no</td><td><font color=white>Username</td><td><font color=white>Password</td><td><font color=white>Department_no</td></tr>";

while($c=mysql_fetch_array($p))

{
	
echo "<tr><td><font color=white>".$c[0]."</td><td><font color=white>".$c[1]."</td><td><font color=white>".$c[2]."</td><td><font color=white>".$c[3]."</td><td><font color=white>".$c[4]."</td><td><font color=white>".$c[5]."</td><td><font color=white>".$c[6]."</td><td><font color=white>".$c[7]."</td></tr>";
}

echo "</table>";*/

echo "<script>alert('YOU HAVE BEEN SIGNED IN SUCCESFULLY!')</script>";
echo "<script>location.href='loginmail.php'</script>";
//echo "<script>location.href='stud_index.html'</script>";
echo "</center></body></html>";
?>

</div>


<div class="footer">
  <h2>Thanku You</h2>
</div>
</body>
</html>