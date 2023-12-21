<?php
session_start();
$u=$_SESSION['u'];
$p=$_SESSION['p'];
$m1=$_SESSION['m1'];
//$x=$_GET['m1']; //recipient mail id
$to       =$m1;
$subject  = 'Student Sports Registration';
$message='<html><body><br>Hi, you just received an Email from Sports Management Team:';
$message.='<br>Your Username is:';
$message.=  $u; //username 
$message.='<br>Your Password is:';
$message.=  $p; //pwd
$message.='<br>Thank you For registering with us !';
$message.='</html></body>';

$headers  = 'From: gurpreetkaur2816@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
{
echo "<script>alert('We sent You a Mail')</script>"; 
echo "<script>location.href='stud_index.html'</script>";
}   
else
    echo  "<script>alert('Failed to send')</script>";
?>