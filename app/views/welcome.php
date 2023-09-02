<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <?php include_once 'resources/views/layout/header.php'; ?>

    <div class="container">
        <h1><?php echo $pageTitle; ?></h1>
        <p><?php echo $welcomeMessage; ?></p>
        <p>C'est la page d'accueil de notre application PHP.</p>
        <p>Vous pouvez commencer à explorer nos fonctionnalités dès maintenant.</p>
    </div>

    <?php include_once 'resources/views/layout/footer.php'; ?>
</body>
</html>
