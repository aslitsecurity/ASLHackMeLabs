<?php
include("12.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

$output = "No 'text' parameter";

if (isset($_GET['text']))
{
	$output = htmlentities($_GET['text']);
}

?>
</br>
<h1>Text Displayer</h1>
</br>

<?php echo @$output; ?>



