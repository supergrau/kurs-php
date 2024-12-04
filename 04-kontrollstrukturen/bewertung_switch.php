<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewertung Switch</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>


<header>
    <h1>Bewertung Switch</h1>
</header>
<main>
    <?php
    $punkte = 10;
    $bewertung = "";
    switch ($punkte) {
        case 7:
            $bewertung = "Ausreichend";
            break;
        case 8:
            $bewertung = "Befriedigend";
            break;
        case 9:
            $bewertung = "Gut";
            break;
        case 10:
            $bewertung = "Sehr gut";
            break;

        default:
            $bewertung = "Leider  zu wenige Punkte erreicht";
            break;
    }

    echo "<p>$bewertung</p>";

    $punkte = 2;

    // Match
    echo match ($punkte) {
        7 => "Ausreichend",
        8 => "Befriedigend",
        9 => "Gut",
        10 => "Sehr gut",
        default => "Leider  zu wenige Punkte erreicht"
    }
    ?>
</main>
<footer>
    <p>Das ist die Fußzeile</p>
</footer>


</html>