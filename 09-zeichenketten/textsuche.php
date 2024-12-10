<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Übung Textsuche", "Übung Textsuche");

$beispieltext = "Freilebende Gummibärchen gibt es nicht. Man kauft sie in Packungen an der Kinokasse. Dieser Kauf ist der Beginn einer fast erotischen und sehr ambivalenten Beziehung Gummibärchen-Mensch. Zuerst genießt man. Dieser Genuß umfaßt alle Sinne. 
      
Man wühlt in den Gummibärchen, man fühlt sie. Gummibärchen haben eine Konsistenz wie weichgekochter Radiergummi. Die Tastempfindung geht auch ins Sexuelle. Das bedeutet nicht unbedingt, daß das Verhältnis zum Gummibärchen ein geschlechtliches wäre, denn prinzipiell sind diese geschlechtsneutral. 

Nun sind Gummibärchen weder wabbelig noch zäh; sie stehen genau an der Grenze. Auch das macht sie spannend. Gummibärchen sind auf eine aufreizende Art weich. Und da sie weich sind, kann man sie auch ziehen. Ich mache das sehr gerne. 

Ich sitze im dunklen Kino und ziehe meine Gummibärchen in die Länge, ganz ganz langsam. Man will sie nicht kaputtmachen, und dann siegt doch die Neugier, wieviel Zug so ein Bärchen aushält. (Vorstellbar sind u.a. Gummibärchen-Expander für Kinder und Genesende). ";

// Aufbau des Formulars zur Suche nach der Nadel im Heuhaufen1
echo '<form action="' . $_SERVER["SCRIPT_NAME"] . '" method="POST">
	<p>Originaltext: <textarea name="gesamt" cols="70" rows="10">' . $beispieltext . '</textarea></p>
	<p>Suche nach: <input name="suchbegriff" type="text"></p>
	<input type="submit" value="Zeichenkette suchen">
	</form>';

// Auswertung: Nur dann etwas tun, wenn das Inputfeld "suchbegriff" einen Inhalt hat
if (isset($_POST["suchbegriff"]) && trim($_POST["suchbegriff"]) != "") {
    $gesamt = $_POST["gesamt"];
    $suchbegriff = $_POST["suchbegriff"];
    $ersetzung = str_replace($suchbegriff, "<span style=\"background-color: orange\">" . $suchbegriff . "</span>", $gesamt);
    echo "<p><span style=\"color:blue\">Suche nach \n";
    echo "\"<strong>$suchbegriff</strong>\": <strong><span style=\"color:red\">\n";
    echo substr_count($gesamt, $suchbegriff) . " Mal</span></strong> ";
    echo "gefunden.</span> <p>" . nl2br($ersetzung) . "</p>\n";
}
?>



<?php
htmlende();
?>