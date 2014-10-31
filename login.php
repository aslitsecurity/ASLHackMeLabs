<?php
include("db_conn.php");
session_start();
if (isset($_SESSION['asl_logged'])){header("Location: ./hackme.php");die();}

$title = "Login";

if (!empty($_POST['password']) && !empty($_POST['username']) && isset($_POST['submit']))
{
	$query = mysql_query("SELECT * FROM users WHERE username='".mysql_real_escape_string(addslashes($_POST['username']))."' AND password='".md5(sha1(md5($_POST['password'])))."'");
	$fetch = mysql_fetch_array($query);	
	if (mysql_num_rows($query))
	{
		if ($fetch['rank'] == 2)
		{
		$_SESSION['asl_logged'] = TRUE;
		$_SESSION['asl_admin'] = TRUE;
		}else{
		$_SESSION['asl_logged'] = TRUE;		
		}
		header("Location: ./hackme.php");
		die();
		
	}else{
		$output = "Wrong username or password. Please contact the webmaster if you forgot it.";
	}
}
?>

<html>
<title>ASL IT Security - <?php echo $title; ?></title>
<head>
<link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>

<div id="title">ASL IT Security - <?php echo $title ?></div>
<div class="menu"><a href="./index.php">Home</a> <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> <a href="./login.php">Login</a> <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> <a href="./hackme.php">Hackme</a> <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> <a href="http://www.aslitsecurity.blogspot.com/">Blog</a> <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> <a href="http://aslitsecurity.com/">Official website</a> <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> <a href="./contact.php">Contact us</a> </div></br>
<div class="content"></br>
<form method="post">
Username: </br>
<input type="text" name="username" size="8"/></br>
Password: </br>
<input type="password" name="password" size="8"/></br></br>
<input type="submit" name="submit" value="Authenticate"/></br></br>
<?php echo @$output; ?></br>
</form>
</div>
<div id="copyright">Copyright &copy 2011-2014 ASL IT Security <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> Powered by <a href="mailto:info@aslitsecurity.com">ASL IT Security Pvt Ltd.</font></div>



</body>
</html>
