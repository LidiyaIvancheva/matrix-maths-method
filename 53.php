<?php
$n=5;
$m=5;
$num=1;

echo "<table border=1>";
for ($i=0; $i<=$m; $i++) {
	echo"<tr>";
	for ($j=0; $j<=$n; $j++){
		echo "<td>$num</td>";
		$num=$num*2;
	}
	echo "</tr>";
}
echo "</table>";