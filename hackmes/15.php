<?php
include("../db_conn.php");
include("../functions.php");
include("15.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}


if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$query = mysql_query("SELECT * FROM hackme15 WHERE username='$username' AND password='$password'");
	$fetch = mysql_fetch_array($query);

	if (mysql_num_rows($query))
	{
		setcookie("id",$fetch['id']);
		setcookie("username",$username);
		setcookie("password",$password);
		header("Location: ?page=usercp");
	}
}

if (isset($_GET['page']) && isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
	Secure($_COOKIE['username']);
	Secure($_COOKIE['password']);
	if($_GET['page'] == 'usercp')
	{
		$query = mysql_query("SELECT * FROM hackme15 WHERE username='".$_COOKIE['username']."' AND password='".$_COOKIE['password']."'");
		$fetch = mysql_fetch_array($query);

		if (mysql_num_rows($query) >0)
		{
			die('Welcome back, '.$_COOKIE['username'].', your member id is: '.$fetch['id']."</br><a style=\"color:red;\" href=\"?page=logout\">Logout</a>");
		}
	}
}

if (isset($_GET['page']))
{
	if($_GET['page'] == 'logout')
	{
		setcookie("id",$fetch['id'],mktime()-10000);
		setcookie("username",$username,mktime()-10000);
		setcookie("password",$password,mktime()-10000);
		header("Location: 15.php");
	}
}

?>
</br>
<form method="post">
Username: <input type="text" name="username"/></br>
Password: <input type="password" name="password"/></br>
<input type="submit" name="submit" value="Login"/></br>

</form>
