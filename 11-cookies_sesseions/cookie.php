<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Cookies", "Cookietest");

// benötigt wird die Funktion setcookie()
// außerdem steht das Feld $_COOKIE zur Verfügung

// Falls Cookie vorhanden
if (isset($_COOKIE["Besuch"])) {
    $neu = 0;
} else {
    $neu = 1;
}
setcookie("Besuch", "1", time() + 86400);

if ($neu == 1) {
    echo "<p>Sie waren noch nicht bei uns zu Besuch<br>" .
        " oder Sie speichern keine Cookies.</p>";
} else {
    echo "<p>Sie waren bereits auf unserer Seite.</p>";
}

?>
<form action="eingabe.php" method="post">
    <?php
    echo "<p><input name='vorname' size='20' value='";
    if (isset($_COOKIE["vorname"])) echo $_COOKIE["vorname"];
    echo "'> Vorname</p>";

    echo "<p><input name='nachname' size='20' value='";
    if (isset($_COOKIE["nachname"])) echo $_COOKIE["nachname"];
    echo "'> Nachname</p>";

    ?>
    <p><input type="submit" value="Senden"></p>
</form>
<?php

htmlende();
?>