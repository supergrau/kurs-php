<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>Arrays 01</title>
</head>

<header>
    <h1>Arrays 01</h1>
</header>
<main>
    <?php
    $name1 = "Max Mustermann";
    $name2 = "Erwin Mustermann";

    //$a = array("Max Mustermann", "Erwin Mustermann");
    $a = ["Max Mustermann", "Erwin Mustermann"];
    $b = [$name1, $name2];
    $c = ["Wert", 1];
    echo "<pre>";
    print_r($a);
    print_r($b);
    var_dump($a);
    var_dump($b);
    var_dump($c);
    // Einen Eintrag aus dem Array abrufen:
    var_dump($a[1]);
    var_dump($c[1]);

    // Einen neuen Eintrag hizufügen:
    $a[3] = "Claire Grube";

    $a[] = "Rudi Mente";
    print_r($a);
    echo "</pre>";
    ?>
</main>
<footer>
    <p>Das ist die Fußzeile</p>
</footer>
</body>

</html>