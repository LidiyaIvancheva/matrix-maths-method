<?php

$arr=array(array());
$m=4;
$n=4;
$num=0;

for($i=0; $i<$m; $i++){
	for($j=0; $j<$n; $j++){
		$num++;
		$arr[$i][$j]=$num;
	}
}
echo "<table border='1'>";
for ($i=0; $i<$m; $i++) {
	echo "<tr>";
	for($j=0; $j<$n; $j++){
		echo'<td>' .$arr[$i][$j]. '</td>';
	}
	echo "</tr>";
}
echo "</table>";