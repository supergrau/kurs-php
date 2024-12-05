<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../styles/simple.css">
    <title>05 - Assozietive Arrays</title>
</head>

<header>
    <h1>05 - Assozietive Arrays</h1>
</header>
<main>
    <?php
    // echo $_SERVER["SERVER_SOFTWARE"] . "<br>";

    // In $keys die Schlüssel als eindimensional Array ablegen
    // $keys = array_keys($_SERVER);
    // foreach ($keys as $k) echo "$k<br>";

    // Alle Infos aus $_SERVER ausgeben    
    // foreach ($_SERVER as $key => $value) echo "$key => $value<br>";
    ?>

    <h2>Eigene assoziative Arrays</h2>
    <?php
    $laender = [
        "BRD" => "Berlin",
        "Frankreich" => "Paris",
        "Polen" => "Warschau"
    ];

    echo "<pre>";
    var_dump($laender);

    $laender["Italien"] = "Rom";
    var_dump($laender);

    echo "</pre>";
    ?>
</main>
<footer>
    <p>Das ist die Fußzeile</p>
</footer>


</html>