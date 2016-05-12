<?php
$arr=array(array());
$m=6;
$n=5;
$l=1;
echo "<table border=1>";
for($i=1; $i<$m; $i++){
	echo "<tr>";
	for($j=1; $j<=$n; $j++){
		echo "<td>";
  	for ($l=1; $l<=$j ; $l++) { 
  		echo $l;
  	}
    echo "$i</td>";
	}
	echo "</tr>";
}
echo "</table>";