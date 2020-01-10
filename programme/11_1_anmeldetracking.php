<!DOCTYPE html>
<html lang="de"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge"><title>11.1 Aufgabe: Anmeldetracking</title><link rel="stylesheet" href="../static/bootstrap.min.css"></link></head>
<body>

    <div class="container-sm m-5">

        <h1>
            11.1 Aufgabe: Anmeldetracking
        </h1>

        <?php
        
        // 11.1 Aufgabe: Anmeldetracking
        // 03.12.2019

        // Verbindung zur Datenbank
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "webtech";

        $mysqli = new mysqli($server, $user, $password, $database);

        if ($mysqli->connect_errno) {
            echo '<p>Es konnte keine Verbindung zur Datenbank hergestellt werden! (' . 
            $mysqli->connect_error . ')';
        } else {
            echo '<p>Verbindung zur Datenbank wurde hergestellt!</p>';
            $mysqli->set_charset("utf-8");

            // Ausgabe der Tabelle
            $ausgabe = $mysqli->query('SELECT * FROM aufgabe11');

            echo '<table class="table table-hover my-5"><tr><th>anmeldename</th><th>ip</th>
            <th>anzahl</th></tr>';

            while ($eintrag = $ausgabe->fetch_assoc()) {
                echo "<tr><td>$eintrag[anmeldename]</td><td>$eintrag[ip]</td>
                <td>$eintrag[anzahl]</td></tr>";
            }

            echo '</table>';
        }

        ?>

        <div class="form-group my-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="eingabe_name">
                    Anmeldename
                </label>
                <input class="form-control" type="text" name="eingabe_name" id="eingabe_name">
                <small class="form-text text-muted">
                    Der Benutzername muss <strong>eindeutig</strong> seien!
                </small>
                
                <button type="submit" name="btn-anmelden" class="btn btn-lg btn-primary mt-5">
                    Anmelden
                </button>
            </form>
        </div>

        <?php

            // PHP wird ausgeführt, wenn der Button gedrückt wurde
            if(isset($_POST["btn-anmelden"])) {
                
                $i = mt_rand(1,6); // Zufälliger Anzahl-Wert

                // IP speichern
                $ip = $_SERVER["REMOTE_ADDR"];
                
                // Daten hinzufügen
                $insert = "INSERT INTO aufgabe11 (anmeldename, ip, anzahl)
                VALUES ('".$_POST["eingabe_name"]."','".$ip."','".$i."')";

                echo '<hr><h6>SQL-Anfrage: </h6><code>> ' . $insert . 
                '</code><p class="mt-3">Feedback: ';

                // Daten okay?
                if ($mysqli->query($insert) === TRUE) {
                    echo '<strong>Daten hinzugefügt!</strong></p>';
                } else {
                    echo '<strong>Fehler!</strong></p>';
                }
            }

        ?>

    </div>

</body>
</html>