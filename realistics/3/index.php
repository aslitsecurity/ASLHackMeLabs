<?php
include("../../db_conn.php");
session_start();

if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}
$info = null;
setcookie("session_id", "jNmaJ11UiajNNABkk1j288JA");
$cookie = @$_COOKIE["session_id"];
if (isset($_COOKIE['session_id']))
{
	$query = mysql_fetch_assoc(mysql_query("SELECT * FROM realistic3 WHERE session_id='$cookie'")) or die("SQL ERROR!".'</br>realistic3(id,username,password,session_id,rank_level,ip)');

	if ($_COOKIE['session_id'] == 'KajnnxmI18ajBAANmakjjah1901')
	{
		if(getenv("HTTP_X_FORWARDED_FOR") == $query['ip'])
		{
			die("Hackme completed!");
		}else{
			echo'<center>Fake admin detected - Your IP doesn\' match (HTTP_X_FORW*****_F**)</center>';
		}
	}
}

if (isset($_POST['submit_buy']))
{
	$info = "Congratulations, you just bought \"".htmlentities($_POST['product'])."\" .It will be shipped in the next two business days";
}

?>

<html>
<title>FirEX Webshop</title>
<head>
<style type="text/css">
body{
background-color: #9C9C9C;
text-align:center;
}
.cent{
background-color: orange;
border: 1px solid black;
width:700px;
margin:auto;
}
</style>
</head>
<body>

<div class="cent">
<font size=5>FirEX Webshop 1.3 beta 2</font>
<hr size=1 color="black"></hr>
Welcome to breakdown Webshop v1.9 beta 1! You're currently logged in as '<?php if(@$query['username']){echo @$query['username'];}else{echo 'demo';} ?>'
</br></br></br>

<form method="post">
<select name="product">
Product to buy:
<option value="XBox 360">XBox 360 (230$)</option>
<option value="Game Boy Color">Game Boy Color (60$)</option>
<option value="Nintendo DS">Nintendo DS (130$) </option>
<option value="Playstation 3">Playstation 3 (210$)</option>
</select>

<input type="submit" name="submit_buy" value="Buy it"></br>
</form>
<?php echo $info; ?>
</center>
</div>

</body>
</html>
