<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>12.1 Aufgabe: Adressverwaltung mit Sessions</title><link rel="stylesheet" href="../stylesheets/reset.css"></head>
<body>
    <h1>
        Aufgabe 12.1: Adressverwaltung mit Sessions
    </h1>

    <?php

        // Verbindung zur Datenbank
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "webtech";

        $mysqli = new mysqli($server, $user, $password, $database);

        if ($mysqli->connect_errno) {
            echo '<p> Es konnte keine Verbidnung zur Datenbank hergestellt werden! (' . 
            $mysqli->connect_error . ')';
        } else {
            echo '<p>Verbindung zur Datenbank wurde hergestellt!</p>';
            $mysqli->set_charset("utf-8");
        }
    ?>

    <h2>
        Admin-Login:
    </h2>

    <!-- 
        
    Login Passwörter:
    
    Peter Müller || Rnss:4$}bK&.PRt= (Sha1= a8306abf3f6732eeeaeb748308729f281c07ab59)
    Hans Maier   || U)&kzV>58q&kY%QB (Sha1= ca58a43700e514d52489e49c7b01146dc81bf92f)
    Petra Schmidt|| g9,4QAd:gv?->Eqy (Sha1= a17166cd1ca8250f6702c4f7746f33968399608a)

    -->

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">
            Nachname
        </label>
        <input type="text" name="name" id="name" autocomplete="off">
        <label for="passwort">
            Passwort
        </label>
        <input type="password" name="passwort" id="passwort" autocomplete="off">
        <button type="submit" name="abschicken">
            Abschicken
        </button>
    </form>

    <?php

        if(isset($_POST["name"], $_POST["passwort"])) {

            $login_name = $_POST["name"];
            $login_passwort = $_POST["passwort"];

            $sql_anfrage = mysqli_query($mysqli, "SELECT nachname, passwort FROM adressverwaltung WHERE nachname = '".$login_name."' AND  passwort = '".sha1($login_passwort)."'");
            echo '<p>LOGIN=' . $login_name . '</p><p>PW= '. $login_passwort . '</p><p>PW_SHA1= ' . sha1($login_passwort) . '</p>';

            if (mysqli_num_rows($sql_anfrage) > 0 ) {
                echo '<p style="color: green; font-weight: bolder;">LOGIN OK!</p>';

                // LOGIN OK!
                // Ausgabe der Daten

                $ausgabe = $mysqli->query('SELECT * FROM adressverwaltung');

                echo '<table><tr><th>id</th><th>vorname</th><th>nachname</th><th>ort</th><th></th></tr>';

                while ($eintrag = $ausgabe->fetch_assoc()) {
                    echo "<tr><td>$eintrag[id]</td><td><input name=\"inp_vorname\" placeholder=\"$eintrag[vorname]\"></td>
                    <td><input name=\"inp_nachname\" placeholder=\"$eintrag[nachname]\"></td><td><input name=\"inp_ort\" 
                    placeholder=\"$eintrag[ort]\"></td>
                    <td>";?><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <button type="submit" name="aendern">Ändern</button>
                    <button type="submit" name="loeschen">Löschen</button>
                    </form><?php echo"</td>
                    
                    </tr>
                    ";
                }
                echo "<tr><td></td><td><input name=\"neu_vorname\"></td><td><input name=\"neu_nachname\"></td><td><input name=\"neu_ort\"></td>
                <td>";?>
                
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <button type="submit" name="hinzufuegen">Hinzufügen</button>
                    </form>
                <?php echo"</td></tr>
                </table>";

                if (isset($_POST["hinzufuegen"])) {
                    echo "TEST!";
    
                    // Hinzufügen
                    $sql_hinzu = "INSERT INTO adressverwaltung (vorname, nachname, ort) VALUES ('".$_POST["neu_vorname"]."','".$_POST["neu_nachname"]."','".$_POST["neu_ort"]."')";
    
                    echo "<h3>Folgende Daten sollen der DB hinzugefügt werden:<code>" . $sql_hinzu . "</code>";
                    
                    // Daten Okay? 
    
                    if ($mysqli->query($sql_hinzu) === TRUE) {
                        echo "Daten hinzugefügt!";
                    } else {
                        echo "Fehler!";
                    }
    
                }

                if (isset($_POST["loeschen"])) {
                    echo "Löschen gedrückt!";
                }

            }  else {
                echo '<p style="color: red; font-weight: bolder;">LOGIN FALSCH!</p>';
            }            

        } else {
            echo "Es wurden noch keine Daten eingegeben!";
        }

    ?>

</body>
</html>