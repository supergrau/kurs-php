<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Newsletter-Action", "Newsletter-Action");


echo "<pre>";
print_r($_POST);
echo "</pre>";


$userName = $_POST["UserName"];
$userMail = $_POST["UserMail"];

$server = "localhost";
$user = "php-user";
$pass = "Kennwort00";
$database = "homepage";

$verbindung = mysqli_connect($server, $user, $pass, $database)
    or die("Verbindung konnte nicht hergestellt werden.");

$sql = "INSERT INTO newsletter (UserName, UserMail) VALUES (?, ?)";


echo "$sql<br>";
// $abfrage = mysqli_query($verbindung, $sql);
if ($abfrage = mysqli_prepare($verbindung, $sql)) {
    mysqli_stmt_bind_param($abfrage, "ss", $userName, $userMail);
    mysqli_stmt_execute($abfrage);
    mysqli_stmt_close($abfrage);

    echo "<p>Vielen Dank, Ihre Anmeldung wurde gespeichert...</p>";
} else {
    echo "<p>Die SQL-Anweisung ist fehlgeschlagen.</p>";
}

$return = mysqli_close($verbindung);
if (!$return) {
    echo "<p>Die Verbindung mit dem Server konnte nicht geschlossen werden.</p>";
}
