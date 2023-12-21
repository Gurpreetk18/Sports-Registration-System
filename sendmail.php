<html><body>
<?php
$x=$_GET['m1'];
$to       =$x;
$subject  = 'Successful Sports Enrollment';
$message  = 'Hi, you just received an Email from Sports Management System for registering in sports.Thank You!!';
$headers  = 'From: gurpreetkaur2816@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
{
echo "<script>alert('Email sent')</script>"; 
echo "<script>location.href='stud_enrol.php'</script>";
}   
else
    echo  "<script>alert('Failed to send')</script>";
?>
</body></html>
