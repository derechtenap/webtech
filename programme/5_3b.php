<?php
    function multiplikationstabelle($m, $n) {
        $multipli = 1;
        $ergebnis = 0;
    
        echo "<style>table, td, th { border-collapse: collapse; border: 1px solid #111111; padding: 3px;}</style>";
        echo "<table style=\"text-align: center;\"><tr><th></th>";
    
        for ($i = 1; $i <= $m; $i++) {
        echo "<th>" . $i;
        }
        
        echo "<tr>";
    
        for ($j = 1; $j <= $n; $j++) {
            echo "<td> <b>$j</b>";
            for ($k = 1; $k <= $m; $k++) {
                // Gibt eine Reihe aus
                echo "<td>" . ($ergebnis = $multipli * $k) . "</td>";
            }
            echo "</tr>";
            $multipli = $multipli + 1;
        }
        echo "</table>";
    }

    // Aufruf der Funktion
    multiplikationstabelle(25,35);
?>