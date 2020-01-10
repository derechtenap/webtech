<?php

// Aufgabe zur zweiten SBT
// 18.11.2019

echo "<style> td { width: 20px; height: 20px; } 
.bg-green { background: darkgreen; }</style>";

function dreieck($m = 3) { // $m = 3, falls kein Übergabewert mit gegeben wird

  echo "<table style=\"border: 0;\"";
  for ($i = 0; $i < $m; $i++) { // Höhe
    echo "<tr>";
    for ($j = 1; $j < 2*$m; $j++) { // Damit das Dreieck doppelt so groß wird
      if ($j >= $m - $i && $j <= $m + $i) {
        echo "<td class=\"bg-green\"></td>";
      } else {
        echo "<td></td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";

}

echo "<h1>Dreieck m=6</h1>";
dreieck(6);

?>