<?php
require_once "inc/htmlhelper.php";

htmlanfang("Anlegen der DB", "Anlegen der DB");

$con = new mysqli("localhost", "root", "");
$sql = "CREATE DATABASE IF NOT EXISTS web_shop";
$con->execute_query($sql);
$con->select_db("web_shop");
echo "DB angelegt<br>";

$sql = "CREATE TABLE IF NOT EXISTS abteilung"
    . " (abteilung_id INT(11) NOT NULL,"
    . " abteilung_name VARCHAR(50) NOT NULL,"
    . " PRIMARY KEY (abteilung_id)"
    . " ) ENGINE=InnoDB DEFAULT CHARSET=UTF8";
$con->execute_query($sql);

$sql = "INSERT INTO abteilung (abteilung_id, abteilung_name) VALUES"
    . " (1, 'Computer und Hardware'),"
    . " (2, 'TV, Video und DVD'),"
    . " (3, 'Fotografie')";
$con->execute_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS artikel"
    . " (artikel_id INT(11) NOT NULL,"
    . " abteilung_id INT(11) NOT NULL,"
    . " artikel_name VARCHAR(50) NOT NULL,"
    . " artikel_preis DOUBLE NOT NULL,"
    . " PRIMARY KEY (artikel_id)"
    . " ) ENGINE=InnoDB DEFAULT CHARSET=UTF8";
$con->execute_query($sql);

$sql = "INSERT INTO artikel (artikel_id, abteilung_id, artikel_name, artikel_preis) VALUES"
    . " (4418, 2, 'LED-Fernseher', 249),"
    . " (4422, 2, 'Blu-Ray-Player', 49.95),"
    . " (4471, 2, 'Sat-Antenne', 39.95),"
    . " (4475, 2, 'Beamer', 179),"
    . " (4482, 2, 'Heimkino', 489),"
    . " (6213, 3, 'Digitalkamera', 89.95),"
    . " (6265, 3, 'Action-Cam', 129.95),"
    . " (6267, 3, 'Camcorder', 59.95),"
    . " (7609, 1, 'Notebook', 395.9),"
    . " (7612, 1, 'USB-Stick', 12.95),"
    . " (7632, 1, 'Laserdrucker', 125.5),"
    . " (7678, 1, 'NAS-Server', 280.15)";
$con->execute_query($sql);
echo "Alle Daten engefügt<br>";


$con->close();



htmlende();
