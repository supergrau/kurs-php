<?php
/* Abteilungen */
$sql = "SELECT * FROM abteilung";
$res = $con->execute_query($sql);
echo "<p>Abteilungen:<br>";
while ($dsatz = $res->fetch_assoc())
    echo $dsatz["abteilung_id"] . ": <a href='web_shop.php?abt="
        . $dsatz["abteilung_id"] . "'>" . $dsatz["abteilung_name"] . "</a><br>";
$res->close();
