<?php
include("16.html");
session_start();
if (!isset($_SESSION['asl_logged'])){header("Location: ../login.php");die();}


if (isset($_POST['submit'])){
$fileextension = strrchr($_FILES["file"]["name"],".");
if((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($fileextension == '.php')){
die("Hackme completed!");
}elseif ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))){
echo'<center>Valid file uploaded (NOT PHP ONE!).</center>';

}else{
echo'<center>Invalid file :(</center>';
}
}
?>
</br>
<center>Allowed file types: GIF/JPEG/PNG</br>
<form method="post" enctype="multipart/form-data">
<label for="file">Select image:</label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Upload!" />
</center>
</form>
