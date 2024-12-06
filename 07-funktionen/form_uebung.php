<?php
require("../inc/htmlhelper.php");
require("./funktion.inc.php");

htmlanfang("Kapitel 7 - Übung 2", "Kapitel 7 - Übung 2");
?>
<p>Geben Sie zwei oder drei Zahlen ein und senden Sie das Formular ab</p>
<form action="" method="GET">
    <label for="zahl1">Zahl 1:</label>
    <input type="text" id="zahl1" name="zahl1"><br>
    <label>Zahl 2:</label>
    <input type="text" name="zahl2" /><br>
    <label>Zahl 3:</label>
    <input type="text" name="zahl3" /><br>
    <br>
    <input type="submit" name="send" value="Absenden"><br>
</form>
<?php
if (isset($_GET["send"]) && !empty($_GET["zahl1"]) && !empty($_GET["zahl2"])) {
    echo "<p>Das Ergebnis ist:</p>";
    if (empty($_GET["zahl3"])) {
        $_GET["zahl3"] = 0;
    }
    addiere($_GET["zahl1"], $_GET["zahl2"], $_GET["zahl3"]);
}

htmlende();
?>