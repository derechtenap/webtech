<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>8.1 Aufgabe: Grundlegendes</title><link rel="stylesheet" href="../stylesheets/reset.css"></head>

<body>

    <?php

        // 8.1 Aufgabe: Grundlegendes
        // 14.11.2019
        
        if (session_status() !== 1) {
        session_start();
        }
        
        $_SESSION["Datum"] = date("r");
        echo "Session aktiv seit: " . $_SESSION["Datum"];

        // session_regenerate_id(); --> für Aufgabenteil c)
    ?>

</body>

</html>