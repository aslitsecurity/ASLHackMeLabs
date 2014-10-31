<?php
include("17.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}

$info = null;
if(isset($_POST['submit'])){


$extpos = strpos($_FILES['file']['name'],".");
$extension = substr($_FILES['file']['name'],$extpos,4);
$realext = strrchr($_FILES["file"]["name"],".");
if ($extension == '.php'){
$info = "File not allowed";
}else{
$info = "Uploaded (NOT PHP)";
}

if ($realext == ".php" && $extension != '.php'){
die("Hackme completed!");
}


}

?>
</br>
<center>Allowed file types: GIF/JPEG/PNG</br>
<form method="post" enctype="multipart/form-data">
<label for="file">Select image:</label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Upload!" /></br>

</center>
</form>
