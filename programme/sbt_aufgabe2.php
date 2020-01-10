<?php

    // Aufgabe 2 des SBT-Selbsttests
    // 18.11.2019

    $summe = 0;
    $a[1] = 1;
    $a[2] = 2;

    $b[1] = -1;
    $b[2] = -2;

    $c[1] = $a;
    $c[2] = $b;

    foreach ($c as $x) {
        foreach ($x as $y => $z) {
            $summe += $y;
        }
    }

    echo $summe;

?>