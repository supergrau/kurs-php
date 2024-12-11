<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Daten in MySQL-Datenbank speichern", "Daten in MySQL-Datenbank speichern");
?>
<h1>Apfelkauf im Obstladen</h1>
<p>Bitte geben Sie folgende Daten für Ihre Bestellung ein:</p>
<form action="inserttest.php" method="post">
  <p>Vorname: <input type="text" name="vorname"></p>
  <p>Nachname: <input type="text" name="nachname"></p>
  <p>Wohnort: <input type="text" name="ort"></p>
  <p>Menge (in kg): <input type="text" size="5" name="menge"></p>
  <p>Apfelsorte:
    <input type="radio" name="sorte" value="Jonagold">Jonagold
    <input type="radio" name="sorte" value="Gala">Gala
    <input type="radio" name="sorte" value="Elstar">Elstar
  </p>
  <p><input type="submit" value="Abschicken"></p>
</form>

<?php
htmlende();
?>