<!DOCTYPE html>
<html lang="de"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge"><title>11.2 Aufgabe: Pizzabestellung</title><link rel="stylesheet" href="../static/bootstrap.min.css"></link></head>
<body>

    <div class="container mt-5">
    
        <h1>
            11.2 Aufgabe: Pizzabestellung
        </h1>

        <?php

        // 11.2 Aufgabe: Pizzabestellung
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

            //  TODO Tabelle erstellen und hier richtig ausgeben
            echo '<p>Verbindung zur Datenbank wurde hergestellt!</p>';
            $mysqli->set_charset("utf-8");
        }

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group row mt-5">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">
                    Pizza
                </label>
                <div class="col-sm-10">
                <select id="inputState" class="form-control">
                    <option selected>
                        Tonno
                    </option>
                    <option>
                        Salami
                    </option>
                </select>
                </div>
            </div>
        </form>

    </div>

</body>
</html>