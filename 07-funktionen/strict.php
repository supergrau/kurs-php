<?php

declare(strict_types=1);

function summe(float ...$a): float
{
    return array_sum($a);
}
$erg = summe(1, 2, 3.7);
var_dump($erg);