<?php

class AuthController
{
    private $db;

    public function __construct()
    {
        // Initialisez la connexion à la base de données
        $this->db = new PDO("mysql:host=localhost;dbname=webbooks", "votre_utilisateur", "votre_mot_de_passe");
    }

    public function login()
    {
        // Gérez la logique de connexion ici
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Vérifiez les informations d'identification dans la base de données
            // Vous devrez implémenter la logique de vérification ici
            $query = $this->db->prepare("SELECT * FROM users WHERE username = :username");
            $query->execute(['username' => $username]);
            $user = $query->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // L'utilisateur est authentifié avec succès
                // Vous pouvez également gérer les sessions ici
                // Exemple : $_SESSION['user_id'] = $user['id'];
                header('Location: /dashboard');
            } else {
                // Affichez un message d'erreur si la connexion échoue
                echo "Nom d'utilisateur ou mot de passe incorrect.";
            }
        }
        include 'app/views/login.php';
    }

    public function register()
    {
        // Gérez la logique d'inscription ici
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // Vérifiez si l'utilisateur existe déjà
            $query = $this->db->prepare("SELECT * FROM users WHERE username = :username");
            $query->execute(['username' => $username]);

            if ($query->rowCount() > 0) {
                // L'utilisateur existe déjà, affichez un message d'erreur
                echo "Nom d'utilisateur déjà utilisé. Choisissez un autre nom d'utilisateur.";
            } else {
                // Hash du mot de passe avant de l'enregistrer dans la base de données
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insérez l'utilisateur dans la base de données
                $insertQuery = $this->db->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
                $insertQuery->execute([
                    'username' => $username,
                    'password' => $hashedPassword,
                    'email' => $email,
                ]);

                // Redirigez l'utilisateur vers la page de connexion après l'inscription
                header('Location: /login');
            }
        }
        include 'app/views/register.php';
    }
}

?>
