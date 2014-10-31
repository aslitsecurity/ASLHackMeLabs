<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "security";

$connection = mysql_connect($hostname,$username,$password) or die(mysql_error());
$database = mysql_select_db($database,$connection) or die(mysql_error());
?>
