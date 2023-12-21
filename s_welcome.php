<?php
$c=mysql_connect("localhost","proj");
$d=mysql_select_db("project",$c);
if(!$c)
echo "Connection NOT Done<br>";
if(!$d)
echo "<br>DB NOT Selected<br>";
session_start();

$stud_login=$_POST['username'];
$password_login=$_POST['pwd'];
$_SESSION['user']=$stud_login;
$_SESSION['pwd']=$password_login;

if(isset($_POST['login_btn']))
{
 $stud_login = $_POST['username']; 
    $password_login = $_POST['pwd']; 

    $query = "select username,pwd from stud WHERE username='$stud_login' AND pwd='$password_login'";

   if(mysql_fetch_array(mysql_query($query)))
{
        $_SESSION['username'] = $stud_login;
        header('Location: stud_home.html');
   }
   else
   {
       echo "<script>alert('username or password incorrect!')</script>";
echo "<script>location.href='stud_index.html'</script>";
   }
    
}
?>
