<?php
include("db_conn.php");


$title = "Create User";

if (!empty($_POST['password']) && !empty($_POST['username']) && isset($_POST['submit']))
{
	$query = mysql_query("INSERT INTO users (id,username,password,rank) VALUES (NULL,'".mysql_real_escape_string(addslashes($_POST['username']))."','".md5(sha1(md5($_POST['password'])))."',1)");
	if ($query)
	{
		$output = "Registered!";
	}else{
		$output = "Something went wrong!";
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
<input type="submit" name="submit" value="Register"/></br></br>
<?php echo @$output; ?></br>
</form>
</div>
<div id="copyright">Copyright &copy 2011-2014 ASL IT Security <font style="font-weight: bold;" color="#DEE9F5" size=4>|</font> Powered by <a href="mailto:info@aslitsecurity.com">ASL IT Security Pvt Ltd.</font></div>



</body>
</html>
