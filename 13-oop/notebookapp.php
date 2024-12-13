<?php
require_once "../inc/htmlhelper.php";
require_once "./notebook.class.php";

htmlanfang("OOP - Notebook", "OOP - Notebook - App");

$harddisk1 = new Harddisk("SN0815");

$notebook = new Notebook($harddisk1);
echo $notebook . "<br>";

$harddisk2 = new Harddisk("SN4711");
$notebook->changeHarddisk($harddisk2);
echo $notebook . "<br>";

$harddisk3 = new Harddisk("SN12345");
echo $harddisk3 . "<br>";


htmlende();
