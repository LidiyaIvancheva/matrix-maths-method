<?php
$n=5;
$m=5;
echo "<table border=1>";
for ($i=1; $i <=$m ; $i++) { 
	$num=$i*3+8;
	echo "<tr>";
    for ($j=1; $j <=$n ; $j++) { 
    	echo "<td>$num</td>";
    	$num=$num+1;
    }
	echo "</tr>";
}
echo "</table>";
echo "<hr>";
$n=5;
$arr=array();
$num=1;
for ($i=1; $i <=$n ; $i++) { 
     for ($j=1; $j <=$n ; $j++) { 
     	$arr [$i][$j]=$num;
     	$num++;
     }
}
