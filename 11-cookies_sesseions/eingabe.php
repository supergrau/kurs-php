<?php
$vorname = htmlentities($_POST["vorname"]);
$nachname = htmlentities($_POST["nachname"]);
$t = time() + 60 * 60 * 24 * 365;
setcookie("vorname", $vorname, $t);
setcookie("nachname", $nachname, $t);

require_once "../inc/htmlhelper.php";

htmlanfang("Eingabe", "Eingabe erhalten");

echo "<h3>Daten wurden empfangen</h3>";
echo "<p> $vorname $nachname $t</p>";
echo "<p>" . time() . "</p>";

htmlende();
