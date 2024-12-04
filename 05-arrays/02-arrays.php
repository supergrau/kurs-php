<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>Arrays 02</title>
</head>

<header>
    <h1>Arrays 02</h1>
</header>
<main>
    <?php

    $a = [
        "Max Mustermann",
        "Erwin Mustermann",
        "Claire Grube",
        "Reiner Wein"
    ];
    echo "<pre>";
    var_dump($a);

    var_dump(in_array('Max', $a));
    var_dump(in_array('Max Mustermann', $a));
    echo "</pre>";

    if (in_array('Max Mustermann', $a)) {
        echo "Max Mustermann ist im Array enthalten. <br>";
    }

    if (in_array('Max Müller', $a)) {
        echo "Max Müller ist im Array enthalten. <br>";
    } else {
        echo "Max Müller ist im Array <b>nicht</b> enthalten. <br>";
    }

    // Anzahl der Einträge im Array (Length)
    echo count($a) . "<br>";

    for ($i = 0; $i < count($a); $i++) {
        echo $a[$i] . "<br>";
    }

    // Zufällig eine Person auswählen:
    $winner = rand(0, count($a) - 1);
    echo "$winner -> $a[$winner] <br>";

    $b = [];
    echo "<pre>";
    var_dump(empty($b));
    var_dump(empty($b[0]));
    var_dump(empty($a));

    unset($a[0]);
    var_dump($a);
    var_dump($a[0]);  // Erzeugt eine Warnung!

    echo "</pre>";



    ?>
</main>
<footer>
    <p>Das ist die Fußzeile</p>
</footer>
</body>

</html>