<?php

    // 6.5 Aufgabe: Arrayfunktionen
    // 08.11.2019

    $beispielArray = ["Hallo","Welt","!"];

    $assoArray = array (
        "Vorname" => "Tim",
        "Geburtstag" => "19. August",
    );

    // a) Ermitteln Sie die Größe (d.h. die Anzahl der Elemente) eines beliebigen Arrays.

    echo "<p>Das Array <strong>'beispielArray'</strong> hat eine Größe von: " . sizeOf($beispielArray) . "</p>";

    // b) Geben Sie nur das letzte Element eines beliebigen assoziativen Arrays aus und entfernen Sie es.

    $werte = array_values($assoArray);
    $letztes = (isset($werte[count($werte) - 1])) ? $werte[count($assoArray) - 1] : null;
    var_dump($letztes);

    // Geburtstag wird aus dem Array entfernt und kann mit $entfernt aufgerufen werden
    $entfernt = array_pop($assoArray);
    print_r($assoArray);

    echo "<p><strong>'" . $entfernt . "'</strong> wurde aus dem Array entfernt!</p>";
?>