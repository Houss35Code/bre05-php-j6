<?php

$host = 'localhost';
$dbname = 'pdophphoussouni_';
$username = 'root';
$password = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $db = new PDO($dsn, $username, $password, $options);
    echo "Connexion reussie !";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

var_dump($db);