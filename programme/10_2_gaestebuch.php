<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><title>10.2 Aufgabe: Gästebuch</title><link rel="stylesheet" href="../stylesheets/reset.css"><style>.container { width: 45%; margin: 0 auto; } button { margin-top: 5%; } input { width: 100%; }</style></head>
<body>


<?php 
  
?>

<div class="container">
    <h1>Gästebuch</h1>

    <form action="10_2_gaestebuch.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="html_name" id="name">
        <label for="email_adresse">eMail-Adresse</label>
        <input type="email" name="html_email_adresse" id="email">
        <label for="eintrag">Eintrag</label>
        <input type="text" name="html_eintrag" id="eintrag">

        <button type="submit" name="submit">Abschicken</button>    
    </form>
</div>

<?php
if(isset($_POST["submit"])) {
    // Verbindung zur DB
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "webtech";

    $mysqli = new mysqli($server, $user, $password, $database);


    if ($mysqli->connect_errno) {
        echo "Keine DB-Verbindung" . $mysqli->connect_error;
        exit();
    } else {
        echo "DB!";
        $mysqli->set_charset("utf-8");
    }

    $date = date("Y/m/d:h:m:sa");
  
    $sql = "INSERT INTO gaestebuchNeu (name, email_adresse, eintrag, datum)
    VALUES ('".$_POST["html_name"]."','".$_POST["html_email_adresse"]."',
    '".$_POST["html_eintrag"]."','".$date."')";

    if($mysqli->query($sql) === TRUE) {
        echo "OKAY!";
    } else {
        echo $conn->error;
    }

}
?>

</body>
</html>