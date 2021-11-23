<?php
    // CSS Styles
    echo "<style>* { font-family: sans-serif; margin: 0 auto; padding: 0; } table, td, th { border: 1px solid #111; border-collapse: collapse } td { padding: 2rem }</style>";
    
    $x = -2;
    $x_reihe = -2;

    // (f)x = x^3 + 1
    define("Funktion", pow($x,3)+1);

    echo "Funktion mit x = " . $x . " ergibt " . constant("Funktion");

    // Ausgabe in einer Tabelle
    echo "<table><tr>";
    for ($i = 0; $i <= 7; $i++) {
        echo "<th>" . $x_reihe . "</th>";
        $x_reihe = $x_reihe + 1;
    }
    echo "</tr><tr>";

    for ($j = 0; $j <= 7; $j++) {
        // Funktion soll eigentlich definiert werden...
        // Geht allerdings nicht. Scheinbar sind defines statisch!?
        // echo "<td>" . constant(Funktion");
        echo "<td>" . (pow($x,3)+1) . "</td>";
        $x = $x + 1;
    }

    echo "</tr></table>";
?>