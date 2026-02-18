<?php
// Inclusion de la connexion
require 'connexion.php';

// 1. Récupération de l'ID depuis le formulaire
$id_to_delete = $_POST['id'];

// 2. Préparation de la requête de suppression
// Note : Vérifiez bien si votre table s'appelle 'address' ou 'user' 
// selon ce que vous avez créé aux étapes précédentes.
$query = $db->prepare("DELETE FROM address WHERE id = :id");

// 3. Liaison du paramètre et exécution
$parameters = [
    'id' => $id_to_delete
];

$query->execute($parameters);

// Confirmation visuelle
echo "L'adresse avec l'ID $id_to_delete a été supprimée avec succès.";
?>