<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>7.2 Aufgabe: Login mit Cookies</title></head>
<body>

    <form action="" method="get">

        <label for="anmeldename">Anmeldename</label>
        <input type="text" name="anmeldename" id="">  
        
        <label for="passwort">Passwort</label>
        <input type="password" name="passwort" id="">
        
        <select name="hochschulgruppe" id="">
            <option value="professor">Professor</option>
            <option value="student">Student</option>
        </select>

        <button type="submit">Abschicken</button>

    </form>

    <?php

        // 7.2 Aufgabe: Login mit Cookies
        // 19.11.2019

        if (isset($_GET["anmeldename"])) {

            setcookie("cookie_name", $_GET["anmeldename"], time() + 500000);
            setcookie("cookie_passwort", sha1($_GET["passwort"]), time() + 500000);
            setcookie("cookie_gruppe", $_GET["hochschulgruppe"], time() + 500000);

            echo "<pre>" . print_r($_COOKIE) . "</pre>";
        
            // Aufgabenteil c)

            if (strcmp("professor", $_GET["hochschulgruppe"]) == 0) {
                header("Location: 7_2_prof.php");
            } else {
                header("Location: 7_2_student.php");    
            }
        }

    ?>

</body>
</html>