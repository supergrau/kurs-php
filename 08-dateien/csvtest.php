<?php
require_once "../inc/htmlhelper.php";

htmlanfang("CVS-Test", "CSV-Datei");

$inhalt = "Stunde,Montag,Dienstag,Mittwoch,Donnerstag,Freitag
1,Mathematik,Deutsch,Englisch,Erdkunde,Politik
2,Sport,Deutsch,Englisch,Sport,Geschichte
3,Sport,\"Religion (ev./kath.)\",Kunst,,Kunst";

$csvdatei = "stundenplan.csv";
file_put_contents($csvdatei, $inhalt);

echo "geschrieben...<br>";

if (is_file($csvdatei)) {
    $f = fopen($csvdatei, "r");
    if ($f != FALSE) {
        echo "<table>";
        while (!feof($f)) {
            echo "<tr>";

            $zeile = fgets($f);
            $felder = mb_split(",", $zeile);

            foreach ($felder as $feld) {
                echo "<td>$feld</td>";
            }

            echo "</tr>";
        }
        echo "</table>";

        fclose($f);
    } else {
        echo "<p>Beim Öffnen von $csvdatei ist ein Fehler aufgetreten!";
    }
} else {
    echo "<p>Die Datei $csvdatei existiert nicht";
}

htmlende();
