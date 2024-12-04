<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While - Do While</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>


<header>
    <h1>While - Do While</h1>
</header>
<main>
    <?php
    $zahl = 1;
    while ($zahl <= 5) {
        echo $zahl . "<br>";
        $zahl++;
    }

    $zahl = 20;
    do {
        echo $zahl . "<br>";
        $zahl++;
    } while ($zahl <= 5);
    ?>
</main>
<footer>
    <p>Das ist die Fußzeile</p>
</footer>


</html>