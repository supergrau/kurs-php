<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>Variablen</title>

</head>

<body>
    <?php
    $zahl_alter = 3;    // ganze Zahl
    $zahl_b = 4.5;      // reelle (float) Zahl

    var_dump($zahl_alter);
    echo "<br>";
    var_dump($zahl_b);

    $produkt = 2.0 * 4;  // -> 8
    echo "<br>";
    var_dump($produkt);

    $text_example = 'Textbeispiel: $produkt';
    echo "<br>";
    var_dump($text_example);

    $text_example = "Textbeispiel: $produkt";
    echo "<br>";
    var_dump($text_example);

    // Bennenung von Variablen:
    $age = 65;
    $Age = $age + 1;
    $AGE = $age + 2;

    echo "<br>\$age = $age, \$Age = $Age, \$AGE = $AGE <br>";

    // Buckel- oder Camelschreibweise
    $ageAnton = 23;
    $ageBerta = 34;
    $ageCäsar = 45;

    echo "\$ageAnton = $ageAnton, \$ageBerta = $ageBerta, \$ageCäser = $ageCäsar <br>";

    // snake_case-Schreibweise
    $age_anton = 33;
    $age_berta = 44;
    $age_caesar = 55;

    echo "\$age_anton = $age_anton, \$age_berta = $age_berta, \$age_caeser = $age_caesar <br>";

    $_DISTANCE = 1; // in Parsec

    // Referenzen:
    $name = "Mustermann";
    $lastname = $name;
    $name = "Musterfrau";

    echo "\$name = $name, \$lastname = $lastname <br>";

    $name = "Mustermann";
    $lastname = &$name;  // $lastname ist eine Referenz auf $name
    $name = "Musterfrau";

    echo "\$name = $name, \$lastname = $lastname <br>";
    $lastname = "Müller";
    echo "\$name = $name, \$lastname = $lastname <br>";

    // Variable Variablennamen:
    $var1 = "variable1";
    $$var1 = 'Inhalt in $variable1';

    echo "\$var1 = $var1, \$\$var1 = " . $$var1 . "\$variable1 = $variable1" . "<br>";
    ?>
</body>

</html>