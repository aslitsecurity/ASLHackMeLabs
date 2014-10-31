<?php
include("../db_conn.php");
include("../functions.php");

include("1.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']))
{
	Secure($_POST['username']);
	Secure($_POST['password']);

	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = mysql_query("SELECT * FROM hackme1 WHERE username='$username' AND password='$password'") or die(mysql_error());
	
	if (mysql_num_rows($query) > 0)
	{
		die("Hackme completed!");
	}
}
?>
</br>
<form method="post">
Username: <input type="text" name="username"/></br>
Password: <input type="password" name="password"/></br>
<input type="submit" name="submit" value="Login"/></br>

</form>
