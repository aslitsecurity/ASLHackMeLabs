<?php
include("14.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

?>
</br>
<h1>File Loader</h1>
</br>

<?php
if (isset($_GET['file']))
{
	include($_GET['file']);
}else{
	die("Missing parameter!");
}
?>
