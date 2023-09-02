<?php

class Model {
    protected $db;

    public function __construct() {
        // Initialisez la connexion à la base de données ici si nécessaire
        // Exemple : $this->db = new PDO(...);
    }

    // Une méthode de base pour effectuer des requêtes à la base de données
    protected function query($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}

?>
