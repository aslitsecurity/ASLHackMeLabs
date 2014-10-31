<?php
include("9.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

if (!empty($_GET['to']) && !empty($_GET['amount']))
{
	//SendMoney($_GET['to'],$_GET['amount']); // There will be send money function
	$output = htmlentities((int)$_GET['amount']."$ sent to ".$_GET['to']);
}

?>
</br>
<h1>ASL IT Security Bank</h1>
Logged in as: John</br><b>Send Money</b></br></br>

<form method="get">
To: <input type="text" size=10 name="to"/></br>
Amount: <input type="text" size=1 name="amount"/></br>
<button>Send</button></br>
<?php echo @$output; ?>
</form>


