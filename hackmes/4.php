<?php
include("../db_conn.php");
include("../functions.php");
include("4.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

function WAF($parameter)
{
	$filter = array("union","select","and","or","from");
	foreach($filter as $filters)
	{	
		if (preg_match("/$filters/i",$_SERVER['REQUEST_URI']))
		{
			die("Attack detected by Web Application Firewall");
		}
	}
}

if (isset($_GET['username'])){
	Secure($_GET['username']);
	WAF($_GET['username']);
	$query = mysql_query("SELECT * FROM hackme4 WHERE username='".$_GET['username']."'") or die(mysql_error());
	$fetch = mysql_fetch_array($query);
}else{
	die("missing parameter");
}


?>
</br>
<?php 

if (mysql_num_rows($query) > 0) echo 'Member '.$fetch['username'].' found!!';

?>
