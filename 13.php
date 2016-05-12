<?php
$arr=array(array());
$m=6;
$n=5;
$l=1;
$s=2;
echo "<table border=1>";
for($i=1; $i<$m; $i++){
	echo "<tr>";
	for($j=1; $j<=$n; $j++){
		echo "<td>";
  	for ($k=1; $k<=$i ; $k++) { 
  		echo $l;
  		echo $s;
  	}
    echo "$j</td>";
	}
	echo "</tr>";
}
echo "</table>";