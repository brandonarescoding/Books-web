<?php

require_once('./core/Controller.php');

class HomeController extends Controller {
    public function index()
    {
        // Vous pouvez ajouter la logique spécifique de la page d'accueil ici
        $pageTitle = "Accueil";
        $welcomeMessage = "Bienvenue sur notre application !";

        // Charge la vue welcome.php en passant des données
        parent::view('welcome', [
            'pageTitle' => $pageTitle,
            'welcomeMessage' => $welcomeMessage
        ]);
    }
}



?>
