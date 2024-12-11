<?php
require_once "inc/htmlhelper.php";

session_start();

htmlanfang("Webshop", "Unser Shop");

// Herstellung einer Verbindung zur Datenbank
$con = new mysqli("localhost", "root", "", "web_shop");

// Abteilungen als Hyperlink ausgeben
include "inc/web_shop.inc.php";

if (isset($_GET["abt"])) {
    $abteilung_id = $_GET["abt"];
    $sql = "SELECT * FROM artikel WHERE abteilung_id=$abteilung_id";
    $res = $con->execute_query($sql);

    /* Überschrift */
    echo "<form method='post' action='web_shop_warenkorb.php'>";
    echo "<table>";
    echo "<tr>";
    echo "<td><b>Artikel</b></td>";
    echo "<td><b>Abt.</b></td>";
    echo "<td><b>Nr.</b></td>";
    echo "<td><b>Preis</b></td>";
    echo "<td><b>Anzahl</b></td>";
    echo "</tr>";

    /* Artikel */
    while ($dsatz = $res->fetch_assoc()) {
        $artikel_id = $dsatz["artikel_id"];
        echo "<tr>";
        echo "<td>" . $dsatz["artikel_name"] . "</td>";
        echo "<td style='text-align:right;'>$abteilung_id</td>";
        echo "<td>$artikel_id</td>";
        echo "<td style='text-align:right;'>" . number_format(
            $dsatz["artikel_preis"],
            2,
            ",",
            "."
        ) . " €</td>";
        echo "<td><input type=number name='anzahl[$artikel_id]' size='5'";
        if (isset($_SESSION["anzahl"][$artikel_id]))
            echo " value='" . $_SESSION["anzahl"][$artikel_id] . "'";
        else
            echo " value='0'";
        echo "></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<p><input type='submit' value='In den Warenkorb'></p>";
    echo "</form>";
    $res->close();
} else {
    echo "<br>nicht gesetzt";
}

// Schließen der Vebindung zum SQL-Server:
$con->close();

htmlende();