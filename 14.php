<?php
$arr=array(array());
$m=5;
$n=4;
$l=0;
echo "<table border=1>";
for($i=1; $i<$m; $i++){
	$l=$l*1;
	echo "<tr>";
	for($j=1; $j<=$n; $j++){
		echo "<td>";
  	for ($k=1; $k<=$i ; $k++) { 
  		echo $l;
  	}
    echo "$j</td>";
	}
	echo "</tr>";
}
echo "</table>";