<?php
include("../../db_conn.php");
session_start();

if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

$output = NULL;
if (isset($_GET['id']))
{
	$_GET['id'] = str_replace("(","",$_GET['id']);
	$query = mysql_query("SELECT * FROM realistic1_news WHERE (id='".($_GET['id'])."')") or die(mysql_error());
	$fetch = mysql_fetch_array($query);

	$output .= "<font size=4><b>{$fetch['title']}</b></font></br>";
	$output .= "<font size=2>{$fetch['text']}</font></br>";
	
}else{

	$query = mysql_query("SELECT * FROM realistic1_news ORDER BY id ASC") or die(mysql_error());
	while($fetch = mysql_fetch_array($query))
	{
	$output .= "<font size=4><b>{$fetch['title']}</b></font></br>";
	$output .= "<font size=2>".substr($fetch['text'],0,-50)."...<a href=\"news.php?id=".(int)$fetch['id']."\">Read More</a></font></br>";
	}
}

?>
<html>
<title>AngryGuys - News</title>
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
<a href="./index.php">Home</a> | News | <a href="./admin.php">Admin Panel</a></br>
<hr size=1 color="black"></hr>
<?php echo $output; ?>
</tr>
</table>



</body>
</html>
