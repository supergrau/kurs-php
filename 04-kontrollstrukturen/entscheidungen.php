<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

    <title>Entscheidungen</title>

</head>


<header>
    <h1>Beispiele für Entscheidungen</h1>
    <h2>Kapitel 4</h2>
</header>
<main>
    <?php
    // Booleans (Wahrheitswerte)
    $a = true;
    echo $a . "<br>";
    var_dump($a);

    $a = false;
    echo "<br>\$a: " . $a . "<br>";
    var_dump($a);

    $w = "Welt";
    echo "<br>";
    var_dump(('Hallo' . ' ' . $w) === "Hallo Welt");

    ?>
    <h3>Einfache Entscheidungen mit if</h3>
    <?php
    $value = 1;
    if ($value == 1) {
        echo "<p>Der Wert ist: $value</p>";
    }
    echo "<p>Außerhalb von if ...</p>";
    ?>
    <h2>Entscheidungen mit if und else</h2>
    <?php
    $value = 2;
    if ($value == 1) {
        echo "<p>Der Wert ist: $value</p>";
    } else {
        echo "<p>innerhalb von else</p>";
    }

    $value = 1;
    ?>

    <!-- Eine andere Art von if-Anweisung -->
    <?php if ($value == 1): ?>
        <p><b>Lorem</b> ipsum dolor sit amet consectetur adipisicing elit. Quaerat error natus numquam doloremque inventore
            corrupti quas, alias cupiditate in molestias! Sed illum, maiores quasi ipsam voluptatem soluta est non hic?</p>
    <?php else: ?>
        <p>Hallo Welt</p>
    <?php endif; ?>

    <p>Nach if: else: endif:</p>

    <h2>Mehrfach-Entscheidungen mit if und else</h2>
    <?php
    $x = 4;
    $y = 4;
    if ($x < $y) {
        echo "<p>x < y</p>";
    } else if ($x == $y) {
        echo "<p>x = y</p>";
    } else if ($x > $y) {
        echo "<p>x > y</p>";
    }

    ?>
    <h2>Mehrfach-Entscheidungen mit switch</h2>
    <?php
    $wuerfel = 6;

    /* Einzelne Fälle */
    switch ($wuerfel) {
        case 1:
            $ausgabe = "Eins";
            break;
        case 2:
            $ausgabe = "Zwei";
            break;
        case 3:
            $ausgabe = "Drei";
            break;
        case 4:
            $ausgabe = "Vier";
            break;
        case 5:
            $ausgabe = "Fünf";
            break;
        case 6:
            $ausgabe = "Sechs";
            break;
        default:
            $ausgabe = "Kein Würfelwert";
    }
    echo $ausgabe . "<br>";
    /* Zusammengefasste Fälle */
    switch ($wuerfel) {
        case 1:
        case 3:
        case 5:
            $ausgabe = "Ungerade Zahl";
            break;
        case 2:
        case 4:
        case 6:
            $ausgabe = "Gerade Zahl";
            break;
        default:
            $ausgabe = "Kein Würfelwert";
    }
    echo $ausgabe . "<br>";
    ?>
    <h2>Mehrfach-Entscheidungen mit match</h2>
    <?php
    $wuerfel = 3;

    /* Einzelne Fälle */
    echo match ($wuerfel) {
        1 => "Eins",
        2 => "Zwei",
        3 => "Drei",
        4 => "Vier",
        5 => "Fünf",
        6 => "Sechs",
        default => "Kein Würfelwert"
    };
    echo "<br>";

    /* Zusammengefasste Fälle */
    echo match ($wuerfel) {
        1, 3, 5 => "Ungerade Zahl",
        2, 4, 6 => "Gerade Zahl",
        default => "Kein Würfelwert"
    };
    echo "<br>";
    ?>

    <h2>Der Ternäre Operator</h2>
    <?php
    $x = 13;
    $y = 12;

    $z = $x < $y ? $x : $y;
    echo "Kleinere Zahl: $z<br>";

    echo "Kleinere Zahl: " . ($x < $y ? $x : $y) . "<br>";

    $f = $x < $y ? "x < y" : ($x > $y ? "x > y" : "x = y");
    echo "Fall $f<br>";
    ?>

    <h2>Der Spaceship-Operator</h2>
    <?php
    echo "Erster Wert: " . (12 <=> 5) . "<br>";
    echo "Zweiter Wert: " . (5 <=> 12) . "<br>";
    echo "Werte sind gleich: " . (5 <=> 5)  . "<br>";
    ?>

    <h2>Existiert eine Variable?</h2>
    <?php
    if (isset($x)) {
        echo '$x existtiert<br>';
    }
    if (!isset($var)) {
        echo "\$var existtiert <strong>nicht</strong><br>";
    }

    unset($x);
    echo '$x ' . (isset($x) ? 'existiert' : 'existiert <u>nicht</u>');
    echo '<br>';
    ?>

    <h2>Typprüfung</h2>
    <?php
    if (is_int(42))            echo "42 ist eine ganze Zahl<br>";
    if (!is_int(42.0))         echo "42.0 ist keine ganze Zahl<br>";
    if (is_float(42.0))        echo "42.0 ist eine Fliesskommazahl<br>";
    if (!is_float(42))         echo "42 ist keine Fliesskommazahl<br><br>";

    if (is_string("42"))       echo "\"42\" ist eine Zeichenkette<br>";
    if (is_string('42'))       echo "'42' ist eine Zeichenkette<br>";
    if (!is_string(42))        echo "42 ist keine Zeichenkette<br><br>";

    if (is_numeric("42"))      echo "\"42\" ist numerisch<br>";
    if (is_numeric("42.0"))    echo "\"42.0\" ist numerisch<br>";
    if (is_numeric("-4.2e-3")) echo "\"-4.2e-3\" ist numerisch<br>";
    if (!is_numeric("42a"))    echo "\"42a\" ist nicht numerisch<br><br>";

    if (is_bool(true))         echo "true ist boolean<br>";
    if (is_bool(5 > 3 && 7 < 12))  echo "5>3 && 7<12 ist boolean<br>";
    if (!is_bool("true"))      echo "\"true\" ist nicht boolean<br><br>";

    ?>
    <h2>Die Koaleszenzoperatoren ?? und ??=</h2>
    <?php
    echo $temperatur ?? "Temperatur nicht vorhanden";
    echo "<br>";
    $temperatur = 36.5;
    echo $temperatur ?? "Temperatur nicht vorhanden";
    echo "<br>";

    $luftdruck ??= "Luftdruck nicht vorhanden";
    echo $luftdruck;
    echo "<br>";
    $luftdruck = 1013.25;
    $luftdruck ??= "Luftdruck nicht vorhanden";
    echo $luftdruck;
    ?>

</main>
<footer>Fußzeile</footer>

</html>