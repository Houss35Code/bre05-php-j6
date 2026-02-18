<?php
// On inclut la connexion à la base de données
require 'connexion.php';

// 1. Récupération des données du formulaire
$id = $_POST['id'];
$street = $_POST['street'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

// 2. Préparation de la requête SQL (Adaptée à vos champs d'adresse)
$query = $db->prepare("UPDATE address SET street = :street, city = :city, zipcode = :zipcode WHERE id = :id");

// 3. Liaison des paramètres et exécution
$parameters = [
    'id' => $id,
    'street' => $street,
    'city' => $city,
    'zipcode' => $zipcode
];

$query->execute($parameters);

// Petit message de confirmation
echo "L'adresse avec l'ID $id a bien été mise à jour !";
?>