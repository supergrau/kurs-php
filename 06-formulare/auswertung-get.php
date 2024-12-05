<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auswertung</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>

<body>
    <header>
        <h1>Auswertung des Formulars</h1>
    </header>
    <main>
        <p>Werte in _GET:</p>
        <?php
        var_dump($_GET);
        echo "<br>";
        print_r($_GET);
        if ($_GET['vorname'] != "" && $_GET['nachname'] != "") {
            echo "<br>Vorname: " . $_GET['vorname'] . " --- Nachname: " . $_GET['nachname'] . "<br> ";
            echo "<br>Kennwort: " . $_GET['kennwort'] . "<br> ";
        } else {
            echo "<br>Falsche Daten";
        }
        if (isset($_GET["zo"])) {
            echo "<br><b>Zustelloption</b>: <br>";
            echo $_GET["zo"] . "<br>";
        }

        if (isset($_GET["zutat"])) {
            echo "<b>Zutaten</b>: <br>";
            foreach ($_GET["zutat"] as $zutat) {
                echo match ($zutat) {
                    "extra_kaese" => "Extra Käse",
                    "salami" => "Salami",
                    "pilze" => "Pilze",
                };
                echo "<br>";
            }
        }
        ?>
    </main>
    <footer>
        <p>Das ist die Fußzeile</p>
    </footer>
</body>

</html>