<?php

session_start();

if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

$output = "
<a href=\"?name=mario\">Chef Mario</a></br>
<a href=\"?name=bonnie\">Chef Bonnie</a></br>
";


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
<th><a href="index.php">Home</a></th>
<th><a href="pizzas.php">Pizza List</a></th>
<th>Our Chefs</th>

<th><a href="./admin">AdminCP</a></th>
</tr>

<tr>
<td colspan=4>
<?php echo $output; 
if (!empty($_GET['name']))
{
	include("./chefs/".$_GET['name']);
}
?>

</td>
</tr>
</table>

</body>
</html>
