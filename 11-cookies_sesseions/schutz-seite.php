<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Inhalt", "Inhalts-Seite");

session_start();

echo "<h4>Eine beliebige Seite...</h4>";

echo "<p><a href='schutz-login.php'>Abmeldung</a></p>";

htmlende();
