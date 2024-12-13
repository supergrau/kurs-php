<?php
// Sparbuch als assiziatives Array
$sparbuch = [];
$sparbuch['glaeubiger'] = 'Max Muster';
$sparbuch['kontonummer'] = 'DE01234567890123';
$sparbuch['guthaben'] = 1000;
$sparbuch['waehrung'] = '€';

$sparbuch['guthaben'] += 234;
echo "<pre>";
var_dump($sparbuch);
echo "</pre>";

$sparbuchHH = [];
$sparbuchHH['glaeubiger'] = 'Heinz Hoffmann';
$sparbuchHH['kontonummer'] = 'DE05534567890125';
$sparbuchHH['guthaben'] = 2000;
$sparbuchHH['waehrung'] = '€';

$betrag = 400;
$sparbuchHH['guthaben'] -= $betrag;
$sparbuch['guthaben'] += $betrag;
echo "<pre>";
var_dump($sparbuch);
echo "</pre>";
echo "<pre>";
var_dump($sparbuchHH);
echo "</pre>";
