<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Session", "Sessiontest");

/**
 * Eine Session muss immer explizit gestartet werden:
 * Session endet mit dem Schließen des Browsers
 * Array: $_SESSION

 * Funktion: session_start()
 * muss auf jeder Seite aufgerufen werden, die zu einer
 * Session gehört
 * 
 * Funktion: session_destroy()
 * beendet die Session
 * 
 *   */

// Session starten oder Session-Wiederaufnahe:
session_start();
// $_SESSION["Programmiersprache"] = "PHP";
// Einen Zugriffszähler herstellen:
if (isset($_SESSION["zz"]))  // Zugriffszähler existiert
    $_SESSION["zz"]++;
else
    $_SESSION["zz"] = 1;

echo "<p>Ihr Besuch Nr.: " . $_SESSION["zz"] . "</p>";
echo "<p>Ihre Session-ID: " . session_id() . "</p>";
echo "<p>Programmiersprache: " . $_SESSION["Programmiersprache"] . "</p>";



// rn3b74l39n1umhlid7f1guaql0
htmlende();
