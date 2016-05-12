<?php
$n=5;
$m=5;
$num=1;

echo "<table border=1>";
for ($i=1; $i<=$m; $i++) {
	$num=$i*2-1;
	echo"<tr>";
	for ($j=0; $j<=$n; $j++){
		echo "<td>$num</td>";
		$num=$num+1;
	}
	echo "</tr>";
}
echo "</table>";