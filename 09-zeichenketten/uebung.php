<?php
require_once "../inc/htmlhelper.php";

htmlanfang("String-Übung", "String-Übung");

echo "<h4>Teilaufgabe 1</h4>";
$zahl = 78.123456789;
printf("Zahl = %09.5f<br>", $zahl);
echo number_format($zahl, 5, ",", ".") . "<br>";


$string1 = "Beachten Sie das Angebot für die ";
$string2 = "folgende Kalenderwoche: ";
$string3 = " ";
$string4 = "Bananen, 5 Kilo für nur 5.- Euro!";

echo "<h4>Teilaufgabe 2</h4>";
echo implode("---", [$string1, $string2, str_repeat("*", 5), $string4]) . "<br>";

echo "<h4>Teilaufgabe 3</h4>";
$string = $string1 . $string2 . $string2 . $string3 . $string4;
echo $string . "<br>";
$stringArray = explode(" ", $string);
foreach ($stringArray as $s) {
    echo $s . "<br>";
}
$stringNeu = implode("#", $stringArray);
echo $stringNeu . "<br>";

echo "<h4>Teilaufgabe 4</h4>";
$string = str_replace("das Angebot", "<strong>unser Sonderangebot</strong>", $string);
echo $string . "<br>";

$string = str_replace("Bananen", "Alle Obstsorten", $string);
echo $string . "<br>";

htmlende();
