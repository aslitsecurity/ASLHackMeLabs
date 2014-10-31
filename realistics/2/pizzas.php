<?php
session_start();

if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}
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
<th>Pizza List</th>
<th><a href="chefs.php">Our Chefs</a></th>

<th><a href="./admin">AdminCP</a></th>
</tr>

<tr>
<td colspan=4>

Pizza with Pepperoni - 5$</br>
Pizza with Cheese - 4$</br>
Pizza with Pineapple - 4.50$</br>
Pizza with Sausage - 3.30$</br>
Pizza with Mushrooms - 4.80$</br>
Pizza with Bacon - 4$</br>
Pizza with Ham - 6$</br>
Pizza with Green Peppers - 5.50$</br>
Pizza with Onions - 3$</br>


</td>
</tr>
</table>

</body>
</html>
