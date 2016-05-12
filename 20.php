<?php
$n=5;
$arr=array();
$num=1;
for ($i=2; $i <=$n ; $i++) { 
     for ($j=1; $j <=$n ; $j++) { 
     	$arr [$i][$j]=$num;
     	$num++;
     }
}
echo "<table border=1>";
for ($i=$n; $i >=2 ; $i--) { 
	echo "<tr>";
	for ($j=$n; $j >=1 ; $j--) { 
		echo "<td>".$arr[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo "</table>";