<?php
$n=4;
$m=4;
$num=0;
$c=1;
echo "<table border=1>";
for ($i=0; $i <$m ; $i++) { 
	echo "<tr>";
    for ($j=0; $j <$n ; $j++) { 
    	$num=$num*2+1;
    	echo "<td>$num</td>";
    	$num=$c+2;
    }
	echo "</tr>";
}
echo "</table>";