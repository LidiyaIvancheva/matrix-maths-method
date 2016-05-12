<?php

$n=5;
//table
echo "<table border=1>";
for ($i=1; $i<=$n; $i++){
  echo "<tr>";
  for ($j=1; $j<=$n ; $j++) { 
    echo "<td>";
  	for ($k=2; $k<=$j ; $k++) { 
  		echo $n;
  	}
    echo "$i</td>";
  }
  echo "</tr>";
}
echo "</table>";
