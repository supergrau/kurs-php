<?php
require_once "../inc/htmlhelper.php";

htmlanfang("File-Upload", "File-Upload");

if (isset($_FILES["Datei"])) {

    ksort($_FILES["Datei"]);
    reset($_FILES["Datei"]);

    echo "<table>";
    foreach ($_FILES["Datei"] as $schluessel => $wert) {
        $wert = is_string($wert) ? htmlspecialchars($wert) : $wert;
        echo "<tr><td>$schluessel</td><td>$wert</td></tr>";
    }
    echo "</table>";

    echo "<pre>";

    var_dump($_FILES["Datei"]);
    echo "</pre>";
    if (is_uploaded_file($_FILES['Datei']['tmp_name'])) {
        echo "Datei " . $_FILES['Datei']['name'] . " erfolgreich herauf geladen.\n";
        $tmp_name = $_FILES['Datei']['tmp_name'];
        $name = $_FILES['Datei']['name'];
        move_uploaded_file($tmp_name, "./$name");
    } else {
        echo "Mögliche Dateiupload-Attacke: ";
        echo "Dateiname '" . $_FILES['Datei']['tmp_name'] . "'.";
    }
}
?>
<form method="post" enctype="multipart/form-data" action="">
    <input type="file" name="Datei" />
    <input type="submit" value="Upload" />
</form>

<?php
htmlende();
?>