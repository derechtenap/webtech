<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>7.1 Aufgabe: Grundlagen zu Cookies</title><style>* { font-family: 'Segoe UI', sans-serif }</style></head>
<body>

    <?php

        // 7.1 Aufgabe: Grundlagen zu Cookies
        // 19.11.2019

        setcookie("besucher", "Tim", time() + 63072000); // 2 Jahre
        setcookie("sprache", "Deutsch", time() + 2628000); // 1 Monat
        setcookie("zeit", time(), 0); // Cookie wird nach dem schließen vernichtet


        // Ausgabe
        echo "COOKIES: <pre>";
        print_r($_COOKIE);
        echo "</pre>";

        // Aufgabenteil d) Cookie löschen

        setcookie("zeit", "Cookie wird gelöscht...", 1);

        // Aufgabenteil e) Aufrufe

        if(!isset($_COOKIE["anzahl_aufrufe"])) {
            // Ist das Cookie gesetzt?
            setcookie("anzahl_aufrufe", 0, time() + 31536000);
        } else {
            $aufrufe = $_COOKIE["anzahl_aufrufe"];
            $aufrufe++;
            setcookie("anzahl_aufrufe", $aufrufe, time() + 31536000);
            
        }

        // Aufgabenteil f) Session

        if(!isset($_COOKIE["session"])) {
            setcookie("session", sha1(time()), time() + 100);
        }

        // Aufgabenteil g)

        echo "<h1>Besuchername: " . $_COOKIE["besucher"] . "</h1>";
        echo "<h3>Anzahl der Aurufe: " . $_COOKIE["anzahl_aufrufe"] . "</h3>";

    ?>

</body>
</html>