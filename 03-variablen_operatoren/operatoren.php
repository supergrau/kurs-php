<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>Operatoren</title>

</head>

<body>
    <?php
    // Arithmetische Operatoren
    echo 1 + 2;
    echo "<br>";
    echo 5 - 2;
    echo "<br>";
    echo 5 * 2;
    echo "<br>";
    echo 8 / 2;
    echo "<br>";
    echo 5 % 2;
    echo "<br>";   // Modulo
    echo 5 ** 2;
    echo "<br>";  // Potenzieren

    $visitors = 0;

    $visitors = $visitors + 1;
    echo $visitors;
    echo "---<br>";

    $visitors++;  // binärer Additionsoperator
    echo $visitors;
    echo "---<br>";

    $visitors--;  // binärer Subtraktionsoperator
    $visitors++;  // binärer Additionsoperator
    ++$visitors;  // binärer Additionsoperator
    echo $visitors . "<br>";
    $summe = $visitors++ + ++$visitors;
    echo $visitors;
    echo "<br>";

    // Rangfolge
    $value = 2 + (3 * 4);
    echo $value;
    echo "<br>";

    // Vergleichsoperatoren:
    // Prüfung auf Gleichheit
    $value1 = 5;
    $value2 = '5';
    var_dump($value1 == $value2);
    echo "<br>";
    // Auf Identität prüfen
    var_dump($value1 === $value2);
    echo "<br>";
    echo 2 * $value2;
    echo "<br>";
    $value2 = 3;
    var_dump($value1 < $value2);
    echo "<br>";
    var_dump($value1 > $value2);
    echo "<br>";
    var_dump($value1 != $value2);
    echo "<br>";
    $value2 = '5';
    var_dump($value1 != $value2);
    echo "<br>";
    var_dump($value1 !== $value2);
    echo "<br>";

    var_dump(true && true);
    echo "<br>";
    var_dump(true && false);
    echo "<br>";
    var_dump(true || false);
    echo "<br>";
    var_dump(true && !false);
    echo "<br>";

    $a = 7;
    $b = "30 Euro";

    //echo $a + $b;

    echo '<strong>\'Text\'</strong>' . $a . " Text " . $b;

    ?>
</body>

</html>