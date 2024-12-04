<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>Foreach 03</title>
</head>

<header>
    <h1>Foreach 03</h1>
</header>
<main>
    <?php

    $a = [
        "Max Mustermann",
        "Erwin Mustermann",
        "Claire Grube",
        "Reiner Wein",
        "Axel Schweiß"
    ];
    echo "<pre>";
    foreach ($a as $entry) {
        var_dump($entry);
    }
    echo "</pre>";

    ?>

    <?php foreach ($a as $entry): ?>
    <p><?php echo $entry; ?></p>
    <?php endforeach; ?>

    <?php
    foreach ($a as $entry) {
        if ($entry === 'Max Mustermann') continue;
        echo "<p>Name: $entry</p>";
    }

    $counter = 0;
    foreach ($a as $entry) {
        $counter++;
        echo "<p>Gezählt: $entry</p>";

        if ($counter >= 3) break;
    }
    ?>
</main>
<footer>
    <p>Das ist die Fußzeile</p>
</footer>


</html>