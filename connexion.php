<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "houssounihalifa_phpj6"; // nom exact sur le serveur école
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "houssounihalifa";     // identifiant école
$password = "43e3596f3a7986e99288e13a3e5824c7"; // mot de passe école

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);