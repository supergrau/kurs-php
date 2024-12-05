<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auswertung POST</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>

<body>
    <header>
        <h1>Auswertung des Formulars (POST)</h1>
    </header>
    <main>
        <p>Werte in _POST:</p>
        <?php
        // var_dump($_POST);
        echo "<br>";
        // print_r($_POST);
        if ($_POST['vorname'] != "" && $_POST['nachname'] != "") {
            echo "<br>Vorname: " . $_POST['vorname'] . " --- Nachname: " . htmlspecialchars($_POST['nachname'], ENT_QUOTES, "UTF-8") . "<br> ";
            echo "<br>Kennwort: " . $_POST['kennwort'] . "<br> ";
            echo "<br>erste Zutat: " . $_POST['zutat'][0] . "<br> ";
        } else {
            echo "<br>Falsche Daten";
        }
        ?>
    </main>
    <footer>
        <p>Das ist die Fußzeile</p>
    </footer>
</body>

</html>