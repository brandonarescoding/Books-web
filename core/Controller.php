<?php

class Controller {
    protected $db;

    public function __construct() {
        // Initialisez la connexion à la base de données ici si nécessaire
        // Exemple : $this->db = new PDO(...);
    }

    // Une méthode de base pour charger une vue
    protected function view($viewName, $data = []) {
        require_once 'app/views/' . $viewName . '.php';
    }

    // Une méthode de base pour charger un modèle
    protected function model($modelName) {
        require_once 'app/models/' . $modelName . '.php';
        return new $modelName;
    }
}

?>
