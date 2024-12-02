<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Überschrift</h1>
    <p>Das ist ein Absatz</p>
    <?php 
        $DR = $_SERVER["DOCUMENT_ROOT"];
        echo "DOCUMENTROOT: $DR<br>";
        $greeting = 'Hallo Welt und der Rest ;)';
        echo "<p>Ein weiterer Absatz...</p>";echo "<p>$greeting</p>";

        $greeting = 'Guten Tag';
        echo "<p>$greeting</p>";
    ?>

    <h2>Zwischenüberschrift</h2>

    <?php
        $greeting = "Hallöchen";
        echo "<p>$greeting</p>";
    ?>

    <pre>
Am Anfang der Zeile &lt;li&gt;      
    Eingerückter Text
        Zwei Tabulatoren

Letzte Zeile
</pre>

    <?php
        echo "\nTestzeile\n";
        echo "\nTestzeile 2";
        
        $format = "b";
        echo "<pre>";
        echo "\n<$format>\n'Test\n\teintrag'</$format>\n";
        echo "<br>\tZeile";
        echo "</pre>";
        
    ?>

    <?php   
        // Zeichenketten verknüpfen:
        $greeting = 'Hallo';
        $name = 'Max';
        $tag = 2;
        echo "Tag: $tag" . ".12.2024<br>";
        echo "$greeting $name<br>";
        echo $greeting . ' &nbsp;  ' . $name . ' - ' . $tag .'.12.2024<br />';
        $zeile = $greeting . ' ' . $name . '<br>';
        echo $zeile;
    ?>
    Testzeile



    Schlußzeile
</body>

</html>