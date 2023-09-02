<?php

// Configuration de la base de données
$dbHost = 'localhost';     // Adresse du serveur de base de données
$dbName = 'webbooks'; // Nom de la base de données
$dbUser = 'root';      // Nom d'utilisateur de la base de données
$dbPassword = '';  // Mot de passe de la base de données

// Créez une instance de la classe PDO pour la connexion à la base de données
try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);

    // Définissez l'attribut PDO pour rapporter les erreurs SQL
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Gérez les erreurs de connexion à la base de données
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

?>
