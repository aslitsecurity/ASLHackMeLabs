<?php
session_start();

if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}
?>

<html>
<title>AngryGuys - Index</title>
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
Home | <a href="./news.php">News</a> | <a href="./admin.php">Admin Panel</a></br>
<hr size=1 color="black"></hr>
Hello everyone, we are AngryGuys and we are a big terrorists group.</br>
You should really be scared, we got a nuclear bomb and we'll active it tomorrow, at 6:00 AM GMT+1.</br> Say goodbye!</td>
</tr>
</table>



</body>
</html>
