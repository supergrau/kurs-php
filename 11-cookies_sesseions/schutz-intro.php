<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Intro", "Intro-Seite");

session_start();

$user = "max";
$kennwort = "12345";
// Falls Aufruf von der Anmeldeseite kommt:
if (isset($_POST["name"])) {
    if ($_POST["name"] == $user && $_POST["passwort"]) {
        $_SESSION["name"] = $_POST["name"];
    }
}

// Kontrolle, ob Login nicht erfolgreich
if (!isset($_SESSION["name"])) {
    exit("<p>Kein Zugang: <a href='schutz-login.php'>Zur Anmeldung</a>" . htmlende());
}



?>

<p><a href="schutz-seite.php">Zur beliebigen Seite</a></p>
<p><a href="schutz-login.php">Abmeldung</a></p>

<?php
htmlende();
?>