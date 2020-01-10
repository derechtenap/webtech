<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>10.1 Aufgabe: Grundlegendes</title><link rel="stylesheet" href="../stylesheets/reset.css"></head><body>
<?php

    // 10.1 Aufgabe: Grundlegendes
    // 21.11.2019

    // Verbindungsaufbau

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "webtech";

    $mysqli = new mysqli($server, $user, $password, $database);

    if ($mysqli->connect_errno) {
        echo "Fehler beim Zugriff auf MySQL: (" .
        $mysqli->connect_errno . ")" . $mysqli->connect_error;
    }
    $mysqli->set_charset("utf8");


    // Ausgabe

    $ergebnis = $mysqli->query("SELECT * FROM kunden");
    
    echo "<table><tr><th>ID</th><th>Vorname</th><th>Nachname</th>
    <th>Telefon</th></tr>";

    while ($kunde = $ergebnis->fetch_assoc()) {
        echo "<tr><td>$kunde[ID]</td><td>$kunde[Vorname]</td>
        <td>$kunde[Nachname]</td><td>$kunde[Telefon]</td></tr>";
    }

    echo "</table>"
?>
</body></html>