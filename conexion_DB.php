<?php


// $servername = "sql112.epizy.com";
// $username = "epiz_33917343";
// $password = "RWX45GpG3UtJ23";
// $bdname = "epiz_33917343_apptower";

$servername = "localhost";
$username = "root";
$password = "";
$bdname = "apptower";

try {

    $db = new PDO("mysql:host=$servername; dbname=$bdname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($db);
    else throw new PDOException("No pudimos conectarnos bro");
} catch (PDOException $e) {

    echo "No se establecio la conexion: " . $e->getMessage();
}
