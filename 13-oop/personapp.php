<?php
require_once "../inc/htmlhelper.php";
require_once "./person.class.php";
require_once "./employee.class.php";

htmlanfang("OOP - Person", "OOP - Person - App");

// Neue Person herstellen
$max = new Person("Muster", "Max", "1990-11-11");
echo $max . "<br>";

// Neuer Angestellter:
$heike = new Employee("Hoffmann", "Heike", "1995-05-01", "2023-06-01");
echo $heike . "<br>";
$heike->dismissed("2024-12-13");
echo $heike . "<br>";

htmlende();
