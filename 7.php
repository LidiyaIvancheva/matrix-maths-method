<?php
$arr=array(array());
$m=5;
$n=5;
echo "<table border=1>";
for($i=1; $i<=$m; $i++){
	$num=$i+10;
	echo "<tr>";
	for($j=1; $j<=$n; $j++){
		echo "<td>$num</td>";
		$num=$num+10;
	}
	echo "</tr>";
}
echo "</table>";
