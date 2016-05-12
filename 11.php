<?php
$arr=array(array());
$m=5;
$n=4;
$l=1;
echo "<table border=1>";
for($i=1; $i<$m; $i++){
	echo "<tr>";
	for($j=1; $j<=$n; $j++){
		echo "<td>";
  	for ($k=1; $k<=$j ; $k++) { 
  		echo $l;
  	}
    echo "$i</td>";
	}
	echo "</tr>";
}
echo "</table>";