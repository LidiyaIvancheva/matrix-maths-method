<?php
$n=4;
$m=4;
$num=0;
$c=1;
echo "<table border=1>";
for ($i=0; $i <$m ; $i++) { 
	$num=$i*1+1;
	echo "<tr>";
    for ($j=0; $j <$n ; $j++) { 
    	echo "<td>$num</td>";
    	$num=$num*1+$c;
    }
	echo "</tr>";
}
echo "</table>";