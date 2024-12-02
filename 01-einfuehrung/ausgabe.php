<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            $artist = "Pink Floyd";
            echo $artist;
        ?>
    </title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>

<body>
    <h1>
        <?php
            echo $artist;
        ?>
    </h1>
    <?php 
        $gegruendet = 1965;
        $album = "1977 – Animals";
        $info = "Die Wurzeln der <b>Band</b> gehen zurück auf 
        die <font color='red'>'Schulzeit'</font> von Syd Barrett, 
        Roger Waters und David Gilmour in Cambridge. Barrett und 
        Waters besuchten das Hills Road Sixth Form College, 
        Gilmour die Perse School in derselben Straße. 
        Barrett und Gilmour trafen sich in den Mittagspausen 
        zum Gitarrespielen und gaben vereinzelt Straßenkonzerte. 
        <br>Zu einer Bandgründung kam es allerdings noch nicht. 
        1963 ging Barrett nach London. Gilmour gründete die Band 
        Joker´s Wild[4] und zog ab 1966 mit einer weiteren Band 
        relativ erfolglos durch Spanien und Frankreich.";
    ?>
    <ul>
        <li>gegründet: <?php echo $gegruendet;?></li>
        <li>Beispielalbum: <?php echo $album;?></li>
        <li>Info: <?php echo $info;?></li>
        <li>Wert: <?php echo $wert;?></li>
    </ul>
</body>

</html>