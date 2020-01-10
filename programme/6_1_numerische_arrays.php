<?php
    // 6.1 Aufgabe: Numerische Arrays
    // 31.10.2019

    $quadart = [0,1,4,9,16,25];

    // Ausgabe mit print_r für Aufgabenteil a)

    print_r($quadart);

    // Ausgabe mit einer Schleife für Aufgabenteil b)

    echo "<table><tr>";
    for ($i = 0; $i < sizeof($quadart); $i++) {
        echo "<td>" . $quadart[$i] . "</td>";
    }
    echo "</tr></table>";
?>