<?php

	$p  = "Head over heels.";

	function rep($phrase){

	$healthy = array("a", "b", "c", "d","e", "f", "g", "h","i", "j", "k", "l","m","n", "o", "p", "q","r", "s", "t", "u","v", "w", "x", "y","z");
	$yummy   = array("*","*","*","*","*","*","*","*","*","*","*","*","*","-","-","-","-","-","-","-","-","-","-","-","-","-");
	echo $phrase."<br/>";
	$newphrase = str_replace($healthy, $yummy, $phrase);
	echo $newphrase."<br/>";
	}

	rep($p);
?>