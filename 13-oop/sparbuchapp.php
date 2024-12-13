<?php
require_once "../inc/htmlhelper.php";
require_once "./sparbuch.class.php";

htmlanfang("OOP - Sparbuch", "OOP - Sparbuch - App");
$sb_muster = new Sparbuch();
$sb_muster->glaeubiger = "Max Muster";
$sb_muster->kontonummer = "DE12345678901234";
$sb_muster->einzahlen(1234.50);

$sb_heinz = new Sparbuch();
$sb_heinz->glaeubiger = "Heinz Hoffmann";
$sb_heinz->kontonummer = "DE987654321098345";
$sb_heinz->einzahlen(5432.98);

$sb_gerd = new Sparbuch("Gerd Geldhai", "DE08151234567890", "10000");
echo $sb_gerd . "<br>";

echo "<pre>";
var_dump($sb_muster);
var_dump($sb_heinz);
echo "</pre>";

$sb_heinz->einzahlen(-1000);
echo "Guthaben von Max: " . number_format($sb_muster->getGuthaben(), "2", ",", ".") . " " .  $sb_heinz->waehrung . "<br>";
echo "Guthaben von Heinz: " . number_format($sb_heinz->getGuthaben(), "2", ",", ".") . " " .  $sb_heinz->waehrung . "<br>";

$sb_heinz->abheben(1400.00);
echo "Guthaben von Heinz: " . number_format($sb_heinz->getGuthaben(), "2", ",", ".") . " " .  $sb_heinz->waehrung . "<br>";
$sb_heinz->abheben(2400.00);
echo "Guthaben von Heinz: " . number_format($sb_heinz->getGuthaben(), "2", ",", ".") . " " .  $sb_heinz->waehrung . "<br>";

// $sb_muster->guthaben = 10000000;
echo $sb_muster . "<br>";
echo $sb_heinz . "<br>";
htmlende();
