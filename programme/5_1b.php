<?php
    // 5.1b Variablen und Ausgabe
    $operand_eins = 2;
    $operand_zwei = 5;

    echo "<style>table, td, th { text-align: center; font-family: sans-serif; border-collapse: collapse; border: 1px solid #111111; padding: 3px;}</style>";
    echo "<table><tr><th>Operator</th><th colspan=\"2\">Operanden</th><th>Ergebnis</th></tr>";
    echo "<tr><td>+</td><td>" . $operand_eins . "</td><td>" . $operand_zwei . "</td><td>" . ($operand_eins + $operand_zwei) . "</td></tr>";
    echo "<tr><td>-</td><td>" . $operand_eins . "</td><td>" . $operand_zwei . "</td><td>" . ($operand_eins - $operand_zwei) . "</td></tr>";
    echo "<tr><td>*</td><td>" . $operand_eins . "</td><td>" . $operand_zwei . "</td><td>" . ($operand_eins * $operand_zwei) . "</td></tr>";
    echo "<tr><td>/</td><td>" . $operand_eins . "</td><td>" . $operand_zwei . "</td><td>" . ($operand_eins / $operand_zwei) . "</td></tr>";
    echo "<tr><td>%</td><td>" . $operand_eins . "</td><td>" . $operand_zwei . "</td><td>" . ($operand_eins % $operand_zwei) . "</td></tr>";
    echo "<tr><td>.</td><td>" . $operand_eins . "</td><td>" . $operand_zwei . "</td><td>" . ($operand_eins . $operand_zwei) . "</td></tr></table>";
?>