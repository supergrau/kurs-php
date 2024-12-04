<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>Büro</title>

</head>

<body>
    <h1>Beispiel für Variablen, Operatoren und Konstanten</h1>
    <h2>Übung 2, Kapitel 3</h2>
    <?php
    const MWST = 1.19;

    $bezeichnung_tisch = "Schreibtisch";
    $bezeichnung_stuhl = "Bürostuhl";
    $bezeichnung_lampe = "Lampe";
    $bezeichnung_pctisch = "Computertisch";
    $preis_tisch = 1999.00;
    $preis_stuhl = 589.00;
    $preis_lampe = 29.00;
    $preis_pctisch = 999.0;

    $netto_gesamt = $preis_lampe + $preis_pctisch + $preis_stuhl + $preis_tisch;
    $brutto_gesamt = $netto_gesamt * MWST;
    $brutto_pctisch = $preis_pctisch * MWST;
    $brutto_stuhl = $preis_stuhl * MWST;
    $brutto_lampe = $preis_lampe * MWST;
    $brutto_tisch = $preis_tisch * MWST;

    // Ausgaben:
    echo "Netto-Preis: $netto_gesamt €<br>";
    echo "Brutto-Preis: $brutto_gesamt €<br>";
    echo "<br>";
    echo "Brutto-Preis Schreibtisch: $brutto_tisch €<br>";
    echo "Brutto-Preis Lampe: $brutto_lampe €<br>";
    echo "Brutto-Preis Stuhl: $brutto_stuhl €<br>";
    echo "Brutto-Preis PC-Tisch: $brutto_pctisch €<br>";
    ?>
</body>

</html>