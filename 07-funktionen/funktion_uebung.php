<?php
require("../inc/htmlhelper.php");

htmlanfang("Kapitel 7 - Übung 1", "Kapitel 7 - Übung 1");

function addiere($a, $b, $c = 0)
{
    $erg = $a + $b + $c;
    echo "Addition: $a + $b + $c = $erg<br>";
}

function multipiziere($a, $b, $c = 1)
{
    $erg = $a * $b * $c;
    echo "Multiplikation: $a * $b * $c = $erg<br>";
}

addiere(1, 2, 3, 4);
addiere(10, 20, 30, 40);
addiere(11, 21);
multipiziere(2, 4, 6);
multipiziere(2, 4, 6.7);
multipiziere(3, 4);
htmlende();
