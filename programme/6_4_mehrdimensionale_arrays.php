<?php

    // 6.4 Aufgabe: Mehrdimensionale Arrays
    // 08.11.2019

    $ausgabeArray = [
        $kundeAnton = array ( 
            "Vorname" => "Anton",
            "Nachname" => "Müller",
            "Telefon" => "1234"
        ),

        $kundeMaria = array ( 
            "Vorname" => "Maria",
            "Nachname" => "Meier",
            "Telefon" => "0815"
        )
    ];

    echo "<style>table, td, th { border-collapse: collapse; border: 1px solid #111111; padding: .5rem;}</style>";
    echo "<table><tr><th>Index</th><th>Vorname</th><th>Nachname</th><th>Telefon</th>";

    for($index = 0; $index < sizeOf($ausgabeArray); $index++) {
        echo "<tr><td>" . $index . "</td><td>" . $ausgabeArray[$index]["Vorname"] . 
        "</td><td>" . $ausgabeArray[$index]["Nachname"] . "</td><td>" . 
        $ausgabeArray[$index]["Telefon"] . "</td></tr>";
    }

    echo "</tr></table>";
?>