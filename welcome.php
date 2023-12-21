<?php
$uname="admin";
$pwd="admin";
session_start();
if(isset($_SESSION['uname']))
echo "<script>alert('Welcome')</script>";
if($_POST['uname']==$uname && $_POST['pwd']==$pwd)
{
$_SESSION['uname']=$uname;
echo "<script>location.href='a_home.html'</script>";
}
else
{
echo "<script>alert('username or password incorrect!')</script>";
echo "<script>location.href='index.html'</script>";
}
?>
