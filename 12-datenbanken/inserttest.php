<?php

require_once "../inc/htmlhelper.php";

htmlanfang("MySQL-Insert", "MySQL-Insert");

$server = "localhost";
$user = "php-user";
$pass = "Kennwort00";
$database = "obstladen";

$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$ort = $_POST["ort"];
$sorte = $_POST["sorte"];
$menge = $_POST["menge"];

$verbindung = mysqli_connect($server, $user, $pass, $database)
    or die("Verbindung konnte nicht hergestellt werden.");

$sql = "INSERT INTO bestellung (vorname, nachname, ort, sorte, menge)";
$sql .= " VALUES ('$vorname', '$nachname', '$ort', '$sorte', $menge)";

echo "$sql <br>";
$abfrage = mysqli_query($verbindung, $sql);
if ($abfrage) {
    echo "<p>Vielen Dank, Ihre Bestellung wurde gespeichert...</p>";
} else {
    echo "<p>Die SQL-Anweisung ist fehlgeschlagen.</p>";
}
$return = mysqli_close($verbindung);
if (!$return) {
    echo "<p>Die Verbindung mit dem Server konnte nicht geschlossen werden.</p>";
}

htmlende();
