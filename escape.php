<?php
$a = 1;
echo '<p>Der $a \'Eiffelturm\' ist das Wahrzeichen von Paris.</p>';
echo "<p>Der $a \"Eiffelturm\" ist das Wahrzeichen von Paris.</p>";
$a = 5;
$b = '5';
if ($a = $b) echo "<p>wahr</p>";

$arr["Eins"] = 1;
$arr["Zwei"] = 2;
$arr["Drei"] = [1, 2, 3,];

print_r($arr);

$f = fopen("./escape.php", "r");

$zahl = 12.345678;
echo number_format($zahl, 3) . "<br>";
