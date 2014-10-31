<?php
include("13.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

?>
</br>
<h1>Language Selector</h1>
</br>

<?php
if (isset($_GET['language']))
{
	include("".$_GET['language']);
}else{
	die("Missing parameter!");
}
?>
