<?php
$output = NULL;

session_start();

if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

if (!empty($_POST['cap']))
{
	$_POST['cap'] = preg_replace("/<script>/i","",$_POST['cap']);
	$output = "Cannot find any local restaurant for cap <b>".addslashes($_POST['cap'])."</b>";
}

?>
<html>
<title>John Pizza - Your first pizza resource</title>
<head>
<style type="text/css">
a:link    {color:white; text-decoration: none;}
a:visited {color:white; text-decoration: none;}
a:hover   {text-shadow: 1px 1px 1px black; color:white; text-decoration: none;}
a:active  {color:white; text-decoration: none;} 


body{
background-color: #CC3333;
}
table{
width: 600px;
margin: auto;
}
th{
border: 1px solid black;
}
td{
border: 1px solid black;
text-align:center;
}
</style>
</head>
<body>

<table>
<tr>
<th>Home</th>
<th><a href="pizzas.php">Pizza List</a></th>
<th><a href="chefs.php">Our Chefs</a></th>

<th><a href="./admin">AdminCP</a></th>
</tr>

<tr>
<td colspan=4>
Inspired by a love of real Italian pizza, JohnPizza has been pioneering delicious handmade pizza since 1945. Find your local restaurant and book your table now.</br>
</br>
<form method="post">
<b>CAP</b>: <input type="text" name="cap"/></br>
<input type="submit" name="submit" value="Find"/>
</form>

<?php echo $output; ?>

</td>
</tr>
</table>

</body>
</html>
