<?php
session_start();

if (!isset($_SESSION['asl_logged'])){header("Location: ./login.php");die();}

$title = "Hackme";

?>

<html>
<title>ASL IT Security - <?php echo $title; ?></title>
<head>
<link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>

<div id="title">ASL IT Security - <?php echo $title ?></div>
<div class="menu"><a href="./index.php">Home</a> <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> <a href="./hackme.php">Hackme</a> <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> <a href="http://www.aslitsecurity.blogspot.com/">Blog</a> <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> <a href="http://aslitsecurity.com/">Official website</a> <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> <a href="./contact.php">Contact us</a> </div></br>
<div class="content">
</br>

<a style="color: black;"  href="./hackmes/1.php"><div style="float:left;margin-left:150px">Hackme 1:</div> <div style="float:right;margin-right:200px;">SQL Form Injection</div></a></br>
<a style="color: black;"  href="./hackmes/2.php"><div style="float:left;margin-left:150px">Hackme 2:</div> <div style="float:right;margin-right:200px;">SQL Form Injection Advanced</div></a></br>
<a style="color: black;"  href="./hackmes/3.php?username=admin"><div style="float:left;margin-left:150px">Hackme 3:</div> <div style="float:right;margin-right:200px;">SQL URL Injection</div></a></br>
<a style="color: black;"  href="./hackmes/4.php?username=admin"><div style="float:left;margin-left:150px">Hackme 4:</div> <div style="float:right;margin-right:200px;">SQL URL Injection WAF Bypass 1</div></a></br>
<a style="color: black;"  href="./hackmes/5.php?username=admin"><div style="float:left;margin-left:150px">Hackme 5:</div> <div style="float:right;margin-right:200px;">SQL URL Injection WAF Bypass 2</div></a></br>
<a style="color: black;"  href="./hackmes/6.php?username=admin"><div style="float:left;margin-left:150px">Hackme 6:</div> <div style="float:right;margin-right:200px;">SQL URL Injection WAF Bypass 3</div></a></br>
<a style="color: black;"  href="./hackmes/7.php"><div style="float:left;margin-left:150px">Hackme 7:</div> <div style="float:right;margin-right:200px;">INSERT INTO SQL Injection</div></a></br>
<a style="color: black;"  href="./hackmes/8.php"><div style="float:left;margin-left:150px">Hackme 8:</div> <div style="float:right;margin-right:200px;">SQL User Agent Injection</div></a></br>
<a style="color: black;"  href="./hackmes/9.php"><div style="float:left;margin-left:150px">Hackme 9:</div> <div style="float:right;margin-right:200px;">Cross Site Request Forgery</div></a></br>
<a style="color: black;"  href="./hackmes/10.php"><div style="float:left;margin-left:150px">Hackme 10:</div> <div style="float:right;margin-right:200px;">Cross Site Scripting</div></a></br>
<a style="color: black;"  href="./hackmes/11.php"><div style="float:left;margin-left:150px">Hackme 11:</div> <div style="float:right;margin-right:200px;">Cross Site Scripting User Agent</div></a></br>
<a style="color: black;"  href="./hackmes/12.php?text=Hello!"><div style="float:left;margin-left:150px">Hackme 12:</div> <div style="float:right;margin-right:200px;">Full Path Disclosure</div></a></br>
<a style="color: black;"  href="./hackmes/13.php?language=en.php"><div style="float:left;margin-left:150px">Hackme 13:</div> <div style="float:right;margin-right:200px;">Local & Remote File Inclusion</div></a></br>
<a style="color: black;"  href="./hackmes/14.php?file=php://input"><div style="float:left;margin-left:150px">Hackme 14:</div> <div style="float:right;margin-right:200px;">Wrapper Injection</div></a></br>
<a style="color: black;"  href="./hackmes/15.php"><div style="float:left;margin-left:150px">Hackme 15:</div> <div style="float:right;margin-right:200px;">Cookie Manipulation</div></a></br>
<a style="color: black;"  href="./hackmes/16.php"><div style="float:left;margin-left:150px">Hackme 16:</div> <div style="float:right;margin-right:200px;">Image Upload Bypass 1</div></a></br>
<a style="color: black;"  href="./hackmes/17.php"><div style="float:left;margin-left:150px">Hackme 17:</div> <div style="float:right;margin-right:200px;">Image Upload Bypass 2</div></a></br>
<a style="color: black;"  href="./hackmes/18.php"><div style="float:left;margin-left:150px">Hackme 18:</div> <div style="float:right;margin-right:200px;">Javascript Bypass</div></a></br>
<a style="color: black;"  href="./hackmes/19.php"><div style="float:left;margin-left:150px">Hackme 19:</div> <div style="float:right;margin-right:200px;">Log Poisoning</div></a></br>
<a style="color: black;"  href="./hackmes/20.php"><div style="float:left;margin-left:150px">Hackme 20:</div> <div style="float:right;margin-right:200px;">Remote Command Execution</div></a></br>
<a style="color: black;"  href="./hackmes/21.php"><div style="float:left;margin-left:150px">Hackme 21:</div> <div style="float:right;margin-right:200px;">Header 'Injection'</div></a></br>
<a style="color: black;"  href="./hackmes/22.php?username=admin"><div style="float:left;margin-left:150px">Hackme 22:</div> <div style="float:right;margin-right:200px;">SQL URL Injection WAF Bypass 4</div></a></br>
<hr size=1 color="#1F2833"></hr>
<a style="color: black;"  href="./realistics/1/mission.php"><div style="float:left;margin-left:150px">Realistic 1:</div> <div style="float:right;margin-right:200px;">Terrorists website</div></a></br>
<a style="color: black;"  href="./realistics/2/"><div style="float:left;margin-left:150px">Realistic 2:</div> <div style="float:right;margin-right:200px;">John pizza website</div></a></br>
<a style="color: black;"  href="./realistics/3/"><div style="float:left;margin-left:150px">Realistic 3:</div> <div style="float:right;margin-right:200px;">Webshop online</div></a></br>

</br>
</div>
<div id="copyright">Copyright &copy 2011-2014 ASL IT Security <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> Powered by <a href="mailto:info@aslitsecurity.com">ASL IT Security Pvt Ltd.</font></div>



</body>
</html>
