<?php
include("../db_conn.php");
include("../functions.php");
include("3.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

if (isset($_GET['username'])){
	Secure($_GET['username']);
	$query = mysql_query("SELECT * FROM hackme3 WHERE username='".$_GET['username']."'") or die(mysql_error());
	$fetch = mysql_fetch_array($query);
}else{
	die("missing parameter");
}


?>
</br>
<?php 

if (mysql_num_rows($query) > 0) echo 'Member '.$fetch['username'].' found!!';

?>
