<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Datum und Zeit", "Beispiel für Datum und Zeit");

// Grundlegen spielt die Unix-Zeit eine entscheidende Rolle
// Start der Unix-Zeit: 01.01.1970 01:00 Uhr
setlocale(LC_ALL, "en_GB");
// Zeitstempel herstellen
echo "<h4>Zeitstempel herstellen mit mktime</h4>";
$zeitstempel = mktime(10, 0, 0, 12, 10, 2024);
echo "<pre>";

print_r($zeitstempel);
echo "<br>";
$zeitstempel = mktime(1, 0, 0, 1, 1, 1970);
print_r($zeitstempel);

echo "</pre>";

echo "<h4>Datum aus einem String mit strtotime</h4>";
$datum = strtotime('03.10.2018 06:34:34');
echo $datum . "<br>";
// Die Funktion time liefert die aktuelle Zeit:
echo time() . "<br>";
// Zeitvergleich
if ($datum > time()) {
    echo "<p>Datum liegt in der Zukunft</<p>";
} else {
    echo "<p>Datum liegt in der Vergangenheit</<p>";
}

// Differenz bei Datumswerten:
$diff = time() - $datum;
echo "<br>" . $diff . "<br>";

$diff = $diff / 60 / 60 / 24;
echo "<br>" . $diff . " Tage<br>";
$diff /= 365;
echo "<br>" . $diff . " Jahre<br>";

echo "<h4>Ausgabe mit Formatierung mit der Funktion date</h4>";
echo "<br>Heute ist der " . date("l, d.m.Y", time()) . "<br>";
echo "Es ist " . date("H:i:s", time()) . " Uhr<br>";

echo "Datum: " . $datum . "<br>";
echo "<br>Damals war der " . date("l, d.m.Y", $datum) . "<br>";
echo "Es war um " . date("H:i:s", $datum) . " Uhr<br>";

htmlende();
