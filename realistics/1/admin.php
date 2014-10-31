<?php
include("../../db_conn.php");
session_start();

if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

$output = NULL;
if (!empty($_POST['username']) && !empty($_POST['password']))
{
	$query = mysql_query("SELECT * FROM realistic1_admins WHERE username='".mysql_real_escape_string($_POST['username'])."' AND password='".md5($_POST['password'])."'");	

	if (mysql_num_rows($query))
	{
		$output .= "Welcome back, ".$_POST['username']."</br>";
		$output .= "Nuclear bomb will activate on 6.00 of tomorrow.</br>";
		$output .= "<button onclick=\"alert('Disarmed - Thank you!');\">Disarm</button></br>";


	}else{
		$output = "Wrong informations.</br><a href=\"admin.php\">Go back</a>";
	}
}else{
	$output = "<form method=\"post\">
		   Username: <input type=\"text\" name=\"username\"/></br>
		   Password: <input type=\"password\" name=\"password\"/></br>
		   <input type=\"submit\" name=\"submit\" value=\"Login\"/></br>
		   </form>";

}

?>
<html>
<title>AngryGuys - Admin</title>
<head>
<style type="text/css">
body{
background-color: white;
}
table{
border: 1px solid black;
width: 600px;
margin: auto;

}

td{
text-align: center;
}
</style>
</head>
<body>

	

<table>
<tr>
<th>AngryGuys terrorist group<hr size=1 color="black"></hr></th>

</tr>
<tr>
<td>
<a href="./index.php">Home</a> | <a href="./news.php">News</a> | Admin Panel</br>
<hr size=1 color="black"></hr>
<?php echo $output; ?>
</tr>
</table>



</body>
</html>
