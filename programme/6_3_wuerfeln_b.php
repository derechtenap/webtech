<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">

    <title>
        6.3 Aufgabe: Würfeln - Aufgabenteil 3
    </title>
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            scroll-behavior: smooth;
        }

        table, td, th { 
            border-collapse: collapse; 
            border: 1px solid #111111; 
            padding: .5rem;
        }

        .container {
            margin: 0 auto;
            width: 50vw;
            padding-top: 5vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>
            Wie oft soll gewürfelt werden?
        </h1>

        <form name="form" action="http://localhost/programme/6_3_wuerfeln_b.php" method="POST">
            <input type="text" name="user_eingabe" id="user_eingabe" placehoder="Bitte Wert eingeben...">
            <button type="submit">
                Weiter...
            </button>
        </form>

        <h2>
            Ausgabe:
        </h2>

        <?php

            $augen = 6; //Anzahl der Augen auf den Würfeln
            $summe = 0;
            $wurf = 0;
            $wurf_sum = 0;
            $var = 0;

            if(!empty($_POST)) {
                $user_eingabe =  $_POST['user_eingabe'];

                if(is_numeric($user_eingabe)) {

                    function ermittleWurf() {  
                        global $user_eingabe, $wurf, $wurf_sum;  
                        $wurf = rand(0, ($user_eingabe - $wurf_sum));
                        if ($wurf_sum <= $user_eingabe) {
                            $wurf_sum = $wurf_sum + $wurf;
                            return $wurf;
                        } else {
                            return "0";
                        }
                    }

                    echo "<p>Ihre Eingabe lautet: <strong>" . $user_eingabe . "</strong>.</p>";
                
                    echo "<table><tr><th>Augen</th>";

                    for($i = 1; $i <= $augen; $i++) {
                        echo "<th>" . $i . "</th>";
                    }

                    echo "</tr><tr><td>Würfe</td>";

                    for($j = 1; $j <= $augen; $j++) {
                        $var = ermittleWurf();
                        echo "<td>" . $var . "</td>";
                        $summe = $summe + ($var * $j);
                    }
        
                    echo "</tr></table><p>Summe: " . $summe . "</p>";

                } else {
                    echo "<p><strong>' " . $user_eingabe . " ' ist keine Zahl!</strong> Bitte eine Zahl eingeben.</p>";
                }
            }
            else {
                echo "<p><strong>Leer!</strong> Es wurde noch kein Wert eingegeben!</p>"; 
            }
        ?>
    </div>
</body>

</html>