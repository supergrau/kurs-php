<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularelemente</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>


<header>
    <h1>Willkommen bei PHP</h1>
    <h2>Formularelemente</h2>
</header>
<main>
    <h3>Daten per URL übergeben</h3>
    <pre>
        <?php
        var_dump($_GET);
        ?>
    </pre>
    <?php
    // echo $_GET["id"] . "<br>";
    ?>
    <p>Bitte Ihre Daten eingeben.</p>
    <form action="auswertung-get.php" method="GET">
        <p>Vorname: <input type="text" name="vorname"></p>
        <p>Nachname: <input type="text" name="nachname"></p>
        <p>Passwort: <input type="password" name="kennwort"></p>
        <p>Farben: <br>
            <input type="checkbox" name="rot" <?php if (isset($_GET["rot"])) echo "checked=\'checked\'"; ?>> rot
            <input type="checkbox" name="gruen" <?php if (isset($_GET["gruen"])) echo "checked=\'checked\'"; ?>> grün
            <input type="checkbox" name="blau" <?php if (isset($_GET["blau"])) echo "checked=\'checked\'"; ?>> blau
        </p>
        <p>Zustelloption: <br>
            <input type="radio" name="zo" value="normal" checked="checked"> normal <br>
            <input type="radio" name="zo" value="schnell"> schnell +1,-€ <br>
            <input type="radio" name="zo" value="zuegig"> express +2,-€<br>
        </p>
        <p>Zutaten: <br>
            <input type="checkbox" name="zutat[]" value="extra_kaese"> extra Käse <br>
            <input type="checkbox" name="zutat[]" value="salami"> Salami <br>
            <input type="checkbox" name="zutat[]" value="pilze"> Pilze <br>
        </p>
        <p> Getränk:
            <select name="getraenk[]" multiple>
                <option></option>
                <option>Cola</option>
                <option>Limonade</option>
                <option>Wasser</option>
                <option>Wein</option>
            </select>

        </p>

        <p><input type="submit" value="Absenden"><input type="reset" value="Löschen"></p>
    </form>
</main>
<footer>
    <p>Das ist die Fußzeile</p>
</footer>

</html>