<?php
    // 6.2 Aufgabe: Eingabe über die Arrays $_GET und $POST
    // 31.10.2019

    if (empty ($_GET)) {
        print_r($_POST);
    } else{
        print_r($_GET);
    }
?>