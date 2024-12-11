<?php
require_once "inc/htmlhelper.php";

session_start();

htmlanfang("Webshop", "Warenkorb");

$con = new mysqli("localhost", "root", "", "web_shop");
include "inc/web_shop.inc.php";
?>

<p><b>Ihr Warenkorb:</b></p>

<table>
    <tr>
        <td><b>Artikel</b></td>
        <td><b>Abt.</b></td>
        <td><b>Nr.</b></td>
        <td><b>Einzelpreis</b></td>
        <td><b>Anzahl</b></td>
        <td><b>Gesamtpreis</b></td>
    </tr>

    <?php
    /* Übernahme von $_POST zu $_SESSION */
    if (isset($_POST["anzahl"]))
        foreach ($_POST["anzahl"] as $artikel_id => $anzahl)
            $_SESSION["anzahl"][$artikel_id] = intval($anzahl);

    /* Ausgabe von $_SESSION */
    $summe = 0;
    if (isset($_SESSION["anzahl"])) {
        foreach ($_SESSION["anzahl"] as $artikel_id => $anzahl)
            if (intval($anzahl) > 0) {
                $sql = "SELECT * FROM artikel WHERE artikel_id=$artikel_id";
                $res = $con->execute_query($sql);
                $dsatz = $res->fetch_assoc();
                $anzahl = $_SESSION["anzahl"][$artikel_id];
                $gesamtpreis = $dsatz["artikel_preis"] * $anzahl;
                $summe += $gesamtpreis;
                echo "<tr>";
                echo "<td>" . $dsatz["artikel_name"] . "</td>";
                echo "<td style='text-align:right;'>"
                    . $dsatz["abteilung_id"] . "</td>";
                echo "<td>$artikel_id</td>";
                echo "<td style='text-align:right;'>" . number_format(
                    $dsatz["artikel_preis"],
                    2,
                    ",",
                    "."
                ) . " €</td>";
                echo "<td style='text-align:right;'>$anzahl</td>";
                echo "<td style='text-align:right;'>" . number_format(
                    $gesamtpreis,
                    2,
                    ",",
                    "."
                ) . " €</td>";
                echo "</tr>";
                $res->close();
            }
    }

    echo "<tr>";
    echo "<td><b>Summe</b></td>";
    echo "<td>&nbsp;</td>";
    echo "<td>&nbsp;</td>";
    echo "<td>&nbsp;</td>";
    echo "<td>&nbsp;</td>";
    echo "<td style='text-align:right;'><b>" . number_format(
        $summe,
        2,
        ",",
        "."
    ) . " €</b></td>";
    echo "</tr>";

    $con->close();
    echo "</table>";

    htmlende();
    ?>