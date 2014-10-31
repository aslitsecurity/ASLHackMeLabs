<?php
include("../db_conn.php");
include("../functions.php");
include("8.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

if (!empty($_SERVER['HTTP_USER_AGENT']))
{
	Secure($_SERVER['REMOTE_ADDR']);
	Secure($_SERVER['HTTP_USER_AGENT']);
	$query = mysql_query("INSERT INTO hackme8(ip,useragent) VALUES ('".$_SERVER['REMOTE_ADDR']."','".$_SERVER['HTTP_USER_AGENT']."')") or die(mysql_error());
	$query2 = mysql_query("SELECT * FROM hackme8 WHERE ip='".$_SERVER['REMOTE_ADDR']."' ORDER BY useragent DESC LIMIT 10") or die(mysql_error());
}
?>
</br>
<?php 

echo "Your user agent</br><b>".$_SERVER['HTTP_USER_AGENT']."</b></br> has been inserted in our database for security issues.";
echo "</br></br>Previous 10 user agents:</br></br>";
while ($fetch2 = mysql_fetch_array($query2))
{
	echo $fetch2['useragent']."</br>";
}

?>
