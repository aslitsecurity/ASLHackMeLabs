<?php

function Secure($what)
{
	$tofilter = array("users");
	foreach($tofilter as $filter)
	{
		if (preg_match("/$filter/i",$what))
		{
			die("You can't use the function/command/expression '$filter' because it's disabled.");
		}
	}
}

?>
