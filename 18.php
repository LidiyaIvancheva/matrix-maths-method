<?php
$arr=array(array());
$m=5;
$n=4;
$num=0;
echo "<table border=1>";
for($i=0; $i<$m; $i++){
	echo "<tr>";
	for($j=0; $j<=$n; $j++){
		$num=$num+11;
		echo "<td>$num</td>";
	}
	echo "</tr>";
	$num=($num* 2)+10;
}
echo "</table>";
