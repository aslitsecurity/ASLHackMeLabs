<?php

$file = "./hackmes/".@(int)$_GET['hackme'].".php";

if ((int)$_GET['hackme'] == 21)
{
die("Not allowed to view this source file! Complete it without source");
}

$file_contents = NULL; 

if (!isset($file)){die('Missing parameter');}

$open = @fopen($file,"r");

if (!$open){die('404');}

while(!feof($open))
{
	$file_contents .= fread($open, filesize($file));
}

$close = fclose($open);


echo highlight_string($file_contents,true);

?>
