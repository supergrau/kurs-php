<?php
require_once "../inc/htmlhelper.php";

htmlanfang("String-Funktionen", "String-Funktionen");

// Verbinden:
$a = 34;
$euro = "€";

echo $a . " " . $euro . "<br>";

// Teilen und wieder zusammenführen
$text = "Hallo Welt";
echo "Das Zeichen 1 aus der Zeichenkette: $text[0]<br>";
echo "Das vorletzte Zeichen aus der Zeichenkette:" . $text[-2] . "<br>";
//   gleichmaßig unterbrechen
$text = "Bald ist Feierabend";
echo chunk_split($text,  5, "--") . "<br>";
// Zeilenumbrüche
echo wordwrap($text, 5,  break: "<br>");
// substr
$erg = substr($text, 9, 10);
echo "<br>" . $erg . "<br>";
// Telen mit Trennzeichen
echo "1. Teil: " . strtok($text, " ") . "<br>";
echo "2. Teil: " . strtok(" ") . "<br>";
echo "3. Teil: " . strtok(" ") . "<br>";


// Arrays und Strings
$strings = explode(" ", $text);
echo "<pre>";
print_r($strings);
// Beispiel für split:
print_r(mb_split("[,|;-]", "Blumenkohl, Grünkohl| Tomate; Kohlrabi, Rotkohl- Weißkohl, Brokoli"));
echo "</pre>";
$werte = array("Heute", "ist", "ein", "schöner", "Tag");
$erg = implode(" ", $werte);
echo "<pre>";
print_r($erg);
echo "</pre>";
echo $erg . "<br>";

$werte = array("R" => "FF", "G" => "AA", "B" => "00");
$ergebnis = implode($werte);
echo "Farbwert: #" . $ergebnis . "<br>";

// Groß- und Kleinschreibung:
echo strtolower($text) . "<br>";
echo strtoupper($text) . "<br>";

// Zähler:
echo "Wortanzahl: " . str_word_count($text) . "<br>";
echo "Zeichenzahl: " . strlen($text) . "<br>";

// Suchen:
echo "Position von ist: " . strpos($text, "ist") . "<br>";
$email = "max@muster.de";
echo "Position von @: " . strpos($email, "@") . "<br>";
// $email = "maxmuster.de";
if (strpos($email, "@")) {
    echo "E-Mail korrekt<br>";
} else {
    echo "E-Mail nicht korrekt<br>";
}

// Rest-String
$text = "Regen kann auch angenehm sein.";
echo strstr($text, "kann") . "<br>";

// Häufigkeit eines Vorkommens:
$text = "---+---+----+-----+----+--+-+----+---+";
echo "Anzahl von + = " . substr_count($text, "+") . "<br>";
echo "Anzahl von - = " . substr_count($text, "-") . "<br>";

// Alle Vorkommen finden:
$positionen = array();
$i = 0;
$position = strpos($text, "+");
while ($position != false) {
    $positionen[$i] = $position;
    $position = strpos($text, "+", $position + 1);
    $i++;
}
echo "<pre>";
print_r($positionen);
echo "</pre>";


// Ersetzen
echo substr_replace($text, "#", strpos($text, "+"), 1) . "<br>";
$text = "Der Himmel ist grün";
echo substr_replace($text, "blau", strpos($text, "grün"), 5) . "<br>";

$text = "---+---+----+-----+----+--+-+----+---+";
echo str_replace("+", "#", $text) . "<br>";

// Mehrere Zeichen ersetzen:
// strtr()
$text = "abcdef";
echo strtr($text, "ae", "oi") . "<br>";

htmlende();
