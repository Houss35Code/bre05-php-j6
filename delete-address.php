<?php

require 'connexion.php';

$id_to_delete = $_POST['id'];

$query = $db->prepare("DELETE FROM address WHERE id = :id");


$parameters = [
    'id' => $id_to_delete
];

$query->execute($parameters);

echo "L'adresse avec l'ID $id_to_delete a été supprimée avec succès.";
?>