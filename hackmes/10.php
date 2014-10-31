<?php
include("10.html");
//session_start();
//if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

if (!empty($_GET['url']))
{
	//SendMoney($_GET['to'],$_GET['amount']); // There will be send money function
	$output = "<img src=\"".$_GET['url']."\"></img>";
}

?>
</br>
<h1>Image Loader v3.4</h1>
<b>Image to load:</b></br>

<form method="get">
<input type="text" name="url"/>
<button>Load</button></br>
<?php echo @$output; ?>
</form>


