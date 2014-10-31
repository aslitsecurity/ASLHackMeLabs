<?php
include("11.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

?>
</br>
<h1>User Agent Displayer</h1>
</br>

<?php echo $_SERVER['HTTP_USER_AGENT']; ?>



