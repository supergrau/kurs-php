<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>Datentypen</title>

</head>

<body>
    <?php
    // ganze Zahlen
    $intA = -12;
    // kleinste Zahl:
    $intMin = -9223372036854775808;
    // größte Zahl
    $intMax = 9_223_372_036_854_775_807;

    $intMax = $intMax + 1;
    echo "$intMin ---- $intMax <br>";

    // Gleitkommazahlen
    $floatValue = 0.000_010_020;
    echo "$floatValue <br>";

    // Arrays:
    $persons = ['Mustermann', 'Lehmann', 'Hoffmann', 'Kaufmann'];
    $firstnames = array('Max', 'Lutz', 'Horst', 'Klaus');
    echo "<pre>";
    var_dump($persons);
    print_r($firstnames);
    echo "</pre>";
    echo "<br> $persons[0], $firstnames[0] <br>";

    // Zeichenketten
    $lastname = $persons[0];
    $firstname = $firstnames[0];
    $fullname = $lastname . ', ' . $firstname;
    echo "\"$fullname\" <br>";

    // Wahrheitswerte
    $wahr = true;
    $falsch = false;
    $test = 1 >= 2;
    echo "\"$wahr\" \"$falsch\" \"$test\"<br>";
    var_dump($test);
    echo "<br>";

    # Null-Wert
    $nullValue = null;
    var_dump($nullValue);
    echo "<br>\$nullValue: $nullValue <br>";

    ?>
</body>

</html>