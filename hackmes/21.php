<?php
include("21.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}
$pwd = base64_encode(base64_encode('19028372'));
header("Password: $pwd");

if (!empty($_POST['pwd']))
{
	if ($_POST['pwd'] == base64_decode(base64_decode($pwd)))
	{
		die("Hackme completed!");
	}
}
?>
</br>
<h1>Login</h1>
<form method="post">
Pwd: <input type="text" name="pwd"/></br>
<input type="submit" name="submit" value="Authenticate"/></br>

</form>
