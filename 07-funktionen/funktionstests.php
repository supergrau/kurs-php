<?php

// declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktionstests</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>

<body>
    <header>
        <h1>Funktionen mit PHP</h1>
    </header>
    <main>
        <h2>Einfache Funktion</h2>
        <?php


        // Definition einer Funktion
        function ausgabe1()
        {
            echo "<br>Hier meldet sich die Funktion <i>ausgabe1</i><br>";
        }

        echo "Vor der Funktion<br>";
        ausgabe1(); // Aufruf (call) der Funktion
        echo "Nach der der Funktion<br>";
        ausgabe1();
        ausgabe1();
        ?>
        <h2>Parameter</h2>
        <?php
        // Ein Parameter
        function ausgabe2($wert)
        {
            echo "<br>Wert: <i>$wert</i><br>";
        }

        ausgabe2("Ein Wert wurde übergeben");
        // Wird mit einem Fehler geahndet:
        // echo $wert;

        // Mit zwei Parametern
        function ausgabe3($wert1, $wert2)
        {
            echo "<br>Wert: <i>$wert1</i> -- <i>$wert2</i><br>";
        }

        ausgabe3("Wert 1", 1234);

        function add($a, $b)
        {
            echo $a + $b;
            echo "<br>";
        }

        add(23, 47);
        //add("ABC", 47);
        ?>
        <h2>Vorgabewerte</h2>
        <?php
        function add1($a = 1.0, $b = 1.0)
        {
            echo "$a + $b = " . $a + $b . "<br>";
        }
        add1(2);
        add1(b: 5, a: 3);  // benannte Parameter
        function add2($a, $b = 1.0)
        {
            echo "$a + $b = " . $a + $b . "<br>";
        }
        add2(30, 5);
        ?>
        <h2>Flexible Anzahl von Parametern</h2>
        <?php
        function flexibel($a, ...$params)
        {
            echo $a . "<br>";
            echo count($params) . "<br>";
            echo "<pre>";
            var_dump($params);
            echo "</pre>";
        }

        flexibel(1, 2, 3, 4, 5);


        ?>
        <h2>Gültigkeit</h2>
        <?php
        $global = "Global";
        echo "$global<br>";

        function gueltigkeit()
        {
            // Das Schlüsselwort global dient dem Zugriff auf globale Variablen
            global $global;
            $global = $global; // = "geändert in der Funktion";
            $lokal = "Lokal";
            $global = "global - lokal";
            echo "$global ---- $lokal<br>";
        }

        gueltigkeit();
        echo "$global<br>";
        // Alle globalen Variablen auflisten
        echo "<pre>";
        var_dump($GLOBALS);
        echo "</pre>";


        ?>

        <h2>Rückgabewerte</h2>
        <?php
        function add3($a = 0, $b = 0)
        {
            return $a + $b;
        }

        echo "Summe: " . add3(4, 5) . "<br>";

        function message($msg = "")
        {
            return "Mitteilung: $msg<br>";
        }
        echo message("Info1");
        echo message(12345);

        function multiplikation($a)
        {
            $produkte = [];
            for ($i = 1; $i <= 10; $i++) {
                $produkte[$i] = $a * $i;
            }
            return $produkte;
        }

        $ergebnis = multiplikation(2);
        foreach ($ergebnis as $ele) {
            echo "$ele<br />";
        }
        ?>

        <h2>Funktionsnamen in Variablen</h2>
        <?php
        function ausgabe4($par)
        {
            echo "Hallo $par<br>";
        }

        $funktionsname = "ausgabe4";
        $funktionsname("Max");
        ?>

        <h2>Anonyme Funktionen</h2>
        <?php
        $ausgabe5 = function ($par) {
            echo "Hallo $par<br>";
        };

        $ausgabe5("Horst");
        ?>

        <h2>Typdeklaration</h2>
        <?php
        function summe(float ...$a): float
        {
            return array_sum($a);
        }

        $erg = summe(1, 2, 3.5, 4.3, 5.67, 6);
        echo "$erg<br>";

        ?>

        <h2>Rückgabetyp void</h2>
        <?php
        function ausgabe5(string $s): void
        {
            echo $s . "<br>";
            return;
        }

        ausgabe5("Werteliste");
        ?>

        <h2>Union-Types</h2>
        <?php
        function summeX(int|string|float ...$a): int|float
        {
            return array_sum($a);
        }

        echo summeX(1, 3.4, '5.6') . "<br>";
        ?>
    </main>
    <footer>
        <p>Das ist die Fußzeile</p>
    </footer>
</body>

</html>