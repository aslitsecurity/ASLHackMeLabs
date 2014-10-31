<?php
include("19.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

$ip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
 
$op = fopen('../files/hackme19_logs.php','a+');
fwrite ($op,"IP: $ip</br>User Agent: $useragent</br>---------</br>");
fclose($op);
 
echo "We logged your User Agent and IP for security reasons.";
?>

