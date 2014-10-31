<?php
include("20.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}
$cmd = NULL;
if (!empty($_POST['ip']))
{

if (@stristr(php_os, 'WIN')) { 
	 $cmd = shell_exec('ping '.$_POST['ip']);
} else { 
	
	 $cmd = shell_exec('ping -c 3 '.$_POST['ip']);
}
	
}

?>
</br>
<h1>Site Pinger</h1>
<form method="post">
IP: <input type="text" name="ip"/></br>
<input type="submit" name="submit" value="Ping"/></br>
<?php echo "<pre>".$cmd."</pre>"; ?>
</form>
