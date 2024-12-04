<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewertung Switch 2</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>


<header>
    <h1>Bewertung Switch 2</h1>
</header>
<main>
    <?php
    $punkte = 10;
    $bewertung = "";
    for ($punkte = 0; $punkte <= 10; $punkte++) {


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

        echo "$punkte: $bewertung<br>";
    }
    ?>
</main>
<footer>
    <p>Das ist die Fußzeile</p>
</footer>


</html>