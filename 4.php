<?php

$n=5;
$m=5;
$num=1;
echo "<table border=1>";
for ($i=1; $i <=$m ; $i++) { 
	echo "<tr>";
	for ($j=1; $j <=$n ; $j++) { 
		$num=$num+2;
		echo "<td>$num</td>";
	}
	echo "</tr>";
}
echo "</table>";