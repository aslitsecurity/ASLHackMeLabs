<?php
include("18.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

?>

<script type="text/javascript">

function Validate(text)
{
	var len = String(text).length;
	var tx105 = String(text).substring(len-2,1);
	var tx106 = tx105.split('').reverse().join('');
	var tx107 = String(tx106).substring(len-2,len-2);

	if ((tx106+tx107) == "19887361829")
	{
		alert("Hackme completed!");
	}else{
		alert("Failed!");
	}

}

</script>
</br>
<form onsubmit="return Validate(password.value);" id="form1">
<input type="text" name="password" id="password"/></br>
<button>Login</button></br>

</form>
