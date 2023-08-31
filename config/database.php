// database.php 

<?php 
// configuration de la base de donnee

$dbHost = 'localhost';
$dbname = 'webBooks';
$dbUser = 'root';
$dbPassword = '';

try {

    $pdo = new PDO ("mysql:host=$dbHost; dbname=$dbname", $dbUser, $dbPassword);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Erreur de connexion a la base de donnees: " . $e->getMessage());

}

?>