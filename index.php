<?php

// Inclure le fichier d'autoloading de Composer si vous l'utilisez
// require_once 'vendor/autoload.php';

// Inclure le fichier de configuration de l'application
require_once 'config/database.php';

// Inclure le fichier principal de l'application
require_once 'core/App.php';

// Créer une instance de la classe App
$app = new App();

// Exécuter l'application
$app->run();

?>
