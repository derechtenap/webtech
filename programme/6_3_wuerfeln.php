<?php
    // 6.3 Aufgabe: Würfeln
    // 31.10.2019

    $anzahl = [0,0,0,0,0,0,0];
    $summe = 0;

    function zufall() {
        return mt_rand(1,6);
    }

    for ($i = 0; $i < 10; $i++) {
        $anzahl[zufall()]++;
    }

    // Ausgabe
    
    echo "<table><tr><th>Augen</th>";
    for ($i = 1; $i < 7; $i++) {
        echo "<td>" . $i . "</td>";
    }
    echo "<tr><th>Anzahl</th>";
    for ($j = 1; $j < 7; $j++) {
        echo "<td>" . $anzahl[$j] . "</td>";
    }
    echo "</tr></table>";

    for ($k = 1; $k < 7; $k++) {
        $summe += $anzahl[$k] * $k;
    }
    echo "<p>Summe: " . $summe . "</p>";

?>