<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schleifen</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>


<header>
    <h1>Schleifen</h1>
</header>
<main>
    <h2>for-Schleife</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Zeile $i<br>";
    }

    for ($z = 1; $z <= 5; $z = $z + 1) {
        for ($s = 1; $s <= 3; $s = $s + 1)
            echo "Ze$z/Sp$s &nbsp;&nbsp;";
        echo "<br>";
    }
    ?>
    <table>
        <?php
        for ($i = 8; $i <= 13; $i++) {
            echo "<tr>";
            echo "<td>Zeile</td>";
            echo "<td style='text-align:right;'>$i</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <h3>Verschachtelter Tabellenaufbau</h3>
    <table>
        <?php
        for ($z = 8; $z <= 13; $z = $z + 1) {
            echo "<tr>";
            for ($s = 1; $s <= 5; $s = $s + 1)
                echo "<td style='text-align:right;'>$z/$s</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>while-Schleife</h2>
    <h3>Kopfgesteuerte Schleife</h3>
    <?php
    $summe = 0;  // Initialisierung

    while ($summe < 25) {
        $zufallszahl = random_int(1, 6);
        $summe += $zufallszahl;
        echo "Zahl $zufallszahl, Summe $summe<br>";
    }
    ?>

    <h3>Fußgesteuerte Schleife</h3>
    <?php
    $summe = 30;

    do {
        $zufallszahl = random_int(1, 6);
        $summe += $zufallszahl;
        echo "Zahl $zufallszahl, Summe $summe<br>";
    } while ($summe < 25);
    ?>

    <h3>Abbruch einer Schleife durch "break"</h3>
    <?php
    $summe = 0;
    $zaehler = 0;

    while ($summe < 25) {
        $zufallszahl = random_int(1, 6);
        $summe += $zufallszahl;
        $zaehler++;
        echo "Nr. $zaehler, Zahl $zufallszahl,";
        echo " Summe $summe<br>";
        if ($zaehler >= 7)         // Sonderfall
            break;
    }
    ?>

    <h3>Fortsetzung einer Schleife durch "continue"</h3>
    <?php
    for ($i = 1; $i <= 15; $i++) {
        if ($i >= 5 && $i <= 12)
            continue;
        echo "Zeile $i<br>";
    }
    ?>
</main>
<footer>
    <p>Das ist die Fußzeile</p>
</footer>


</html>