// index.php
// index.php 

<?php

require_once '../config/database.php'; // Inclure la bibliotheque de la base de donne

// Inclure les controllers et les modeles si necessaires

// Recuperer la page demandee (via GET)
$page1 = isset($_GET['page1']) ? $_GET['page1'] : 'accueil';

switch ($page1) {
    case '/' :
        //Inclure la vue da la page d'accueil
        require '../ressources/views/home.php';
        break;
    
    default:
        //Inclure une vue par defaut (par exemple, une page d'erreur)
        require '../ressources/views/home.php';
        break;


}

?> 