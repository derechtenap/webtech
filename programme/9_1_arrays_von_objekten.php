<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>9.1 Aufgabe: Arrays von Objekten</title><link rel="stylesheet" href="../stylesheets/reset.css"></head><body>
<?php

    // 9.1 Aufgabe: Arrays von Objekten
    // 19.11.2019

    // --> NICHT FERTIG

    class Person {
        public $vorname;
        public $nachname;
        public $telefon;

        public function __construct($vorname, $nachname, $telefon) {
            $this->vorname = $vorname;
            $this->nachname = $nachname;
            $this->telefon = $telefon;
        }

        public function __toString() {
            return "$this->vorname, $this->nachname, $this->telefon";
        }

        public function getVorname() {
            return "$this->vorname";
        }

        public function getNachname() {
            return "$this->nachname";
        }

        public function getTelefonnummer() {
            return "$this->telefon";
        }

        public function setTelefonnummer($telefon) {
            $this->telefon = $telefon;
            return $this;
        }
    }

    $personenArray = [];
    $personA = new Person("Anton", "Müller", 1234);
    $personB = new Person("Tim", "Test", 5678);

    $personenArray = [$personA, $personB];

    // Aufgabenteil b)
    // var_dump($personenArray);

    echo "<pre>"; print_r($personenArray); echo "</pre>"; // besser

    // Aufgabenteil c)

    echo "<table><tr><th>Nr.</th><th>Vorname</th>
    <th>Nachname</th><th>Telefon</th></tr>";

    for($i = 0; $i < sizeof($personenArray); $i++) {

        $speicher = $personenArray[$i];

        echo "<tr><td>" . $i . "</td><td>" . 
        $speicher->getVorname() . "</td><td>" .
        $speicher->getNachname() . "</td><td>" .
        $speicher->getTelefonnummer() . "</td></tr>";

    }

    echo "</table>";

    // Aufgabenteil e)

    $personA->setTelefonnummer(1337);

    // Erneute Ausgabe der Tabelle...

    
    echo "<table style=\"margin-top: 1rem;\"><tr><th>Nr.</th><th>Vorname</th>
    <th>Nachname</th><th>Telefon</th></tr>";

    for($i = 0; $i < sizeof($personenArray); $i++) {

        $speicher = $personenArray[$i];

        echo "<tr><td>" . $i . "</td><td>" . 
        $speicher->getVorname() . "</td><td>" .
        $speicher->getNachname() . "</td><td>" .
        $speicher->getTelefonnummer() . "</td></tr>";

    }

    echo "</table>";

?>
</body></html>