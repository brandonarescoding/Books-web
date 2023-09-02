<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

</head>
<body>
    <?php include_once 'resources/views/layout/header.php'; ?>

    <div class="container">
        <h2>Inscription</h2>
        <form action="/auth/register" method="post">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">S'inscrire</button>
        </form>
    </div>

    <?php include_once 'resources/views/layout/footer.php'; ?>
</body>
</html>
