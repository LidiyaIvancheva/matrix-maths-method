<?php
$n=5;
$m=5;

echo "<table border=1>";
for ($i=1; $i<=$m; $i++) {
	$num=$i*3-2;
	echo"<tr>";
	for ($j=1; $j<=$n; $j++){
		echo "<td>$num</td>";
		$num=$num+2;
	}
	echo "</tr>";
}
echo "</table>";