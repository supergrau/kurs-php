<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Dateitest", "Dateien");

$dateiname = "test1.txt";

// Datei zum lesen öffnen:
$f = fopen($dateiname, "r");

if ($f != false) {
    echo "<h4>Inhalt von $dateiname</h4>";
    while (!feof($f)) {
        $zeile = fgets($f);
        echo "$zeile<br>";
    }
    fclose($f);
} else {
    echo "<p>Beim Öffnen von $dateiname ist ein Fehler aufgetreten!</p>";
}

// Datei zum schreiben öffnen/anlegen
$csvdatei = "test2.txt";
// Datei anlegen:

if ($f = fopen($csvdatei, "w")) {
    if (
        fwrite($f, "Dies ist ein Test 1\n") &&
        fwrite($f, "Dies ist ein Test 2\n")
    ) {
        echo "Datei geschrieben...<br>";
    } else {
        echo "Schreibfehler...<br>";
    }
    fclose($f);
} else {
    echo "Datei konnte nicht zum Schreiben geöffnet werden...<br>";
}


if (is_file($csvdatei)) {
    $f = fopen($csvdatei, "r");
    if ($f != FALSE) {
        while (!feof($f)) {
            $zeile = fgets($f);
            echo "$zeile<br>";
        }
        fclose($f);
    } else {
        echo "<p>Beim Öffnen von $csvdatei ist ein Fehler aufgetreten!";
    }
} else {
    echo "<p>Die Datei $csvdatei existiert nicht";
}


// Schreiben im Schnelldurchlauf:
file_put_contents(
    "text3.txt",
    "Zeile1 <script>alert('hallo')</script>\nZeile2\n"
);


// Schnelles Lesen :
$all = file_get_contents("text3.txt");
echo "<pre>" . htmlspecialchars($all) . "</pre>";

// Bitte nicht nachmachen:
//echo "<pre>" . $all . "</pre>";


htmlende();
