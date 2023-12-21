<?php
    session_start();

    if(isset($_SESSION[''])) 
{
session_destroy();
//echo "<script>alert('GOING So SOON :( You are Logged out')</script>";
echo "<script>location.href='newpage.html'</script>";
}
else
{
echo "<script>alert('GOING So SOON :( You are Logged out')</script>";
echo "<script>location.href='start.html'</script>";
}
?>