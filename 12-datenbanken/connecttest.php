<?php

require_once "../inc/htmlhelper.php";

htmlanfang("MySQL-Verbindung", "MySQL-Verbindung");

// mysqli_connect("localhost", "php-user", "Kennwort00")
//     or die("Verbindung konnte nicht hergestellt werden.");

// echo "Verbunden...";

$server = "localhost";
$user = "php-user";
$pass = "Kennwort00";
$database = "obstladen";


$verbindung = mysqli_connect($server, $user, $pass, $database)
    or die("Verbindung konnte nicht hergestellt werden.");

echo "<p>Die Verbindung mit dem Server wurde hergestellt, die
Datenbank <strong>$database</strong> wurde ausgewählt.</p>";

/* Server-Version ausgeben */
printf("Server-Version: %s\n", mysqli_get_server_info($verbindung));

// Einfachste Abgrage :)
$query = "SELECT * FROM bestellung;";
if ($result = mysqli_query($verbindung, $query)) {
    echo "<p>Die SQL-Anweisung war erfolgreich.</p>";
    echo "<pre>";
    var_dump($result);
    echo "</pre>";

    // Ausgabe der Daten
    $anzahl = mysqli_num_rows($result);
    echo "<p>In der Tabelle befinden sich $anzahl Datensätze:</p>";
    echo "<ul>";
    while ($zeile = mysqli_fetch_array($result)) {
        echo "<li>" . $zeile["id"] . ": "
            . $zeile["vorname"] . " "
            . $zeile["nachname"] . ", "
            . $zeile["ort"] . ", "
            . $zeile["menge"] . " kg "
            . $zeile["sorte"] . ".";
    }
    echo "</ul>";

    
} else {
    echo "<p>Die SQL-Anweisung ist fehlgeschlagen.</p>";
}

mysqli_close($verbindung);

htmlende();