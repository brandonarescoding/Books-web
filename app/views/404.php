<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur 404 - Page Non Trouvée</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 80px;
            margin: 0;
            padding: 0;
            color: #e74c3c;
            text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.2);
            animation: bounceInDown 1s;
        }

        p {
            font-size: 24px;
            margin-top: 10px;
            color: #333;
            animation: fadeInUp 1s;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #e74c3c;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes bounceInDown {
            0%, 60%, 75%, 90%, 100% {
                transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            }
            0% {
                opacity: 0;
                transform: translateY(-3000px);
            }
            60% {
                opacity: 1;
                transform: translateY(25px);
            }
            75% {
                transform: translateY(-10px);
            }
            90% {
                transform: translateY(5px);
            }
            100% {
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Erreur 404</h1>
        <p>La page que vous cherchez est introuvable.</p>
        <p>Retournez à la <a href="/">page d'accueil</a> ou explorez nos <a href="/categories">catégories</a> pour trouver ce que vous recherchez.</p>
    </div>
</body>
</html>
