<?php
require_once("../inc/htmlhelper.php");

htmlanfang("Call by Value und Call by Reference", "Call by Value und Call by Reference");

// Call by Value
function tausche1($a, $b)
{
    $hilf = $a;
    $a = $b;
    $b = $hilf;
}

// Call by Reference
function tausche2(&$a, &$b)
{
    $hilf = $a;
    $a = $b;
    $b = $hilf;
}

$x = 5;
$y = 8;
echo "Vor dem Tausch: \$x = $x; \$y = $y<br>";
tausche1($x, $y);
echo "Nach dem Tausch mit tausche1: \$x = $x; \$y = $y<br>";
tausche2($x, $y);
echo "Nach dem Tausch mit tausche2: \$x = $x; \$y = $y<br>";

htmlende();
