
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- titre qui change en fonction de la vue -->
        <title><?= $t ?></title>
    </head>
    <body>
        <header>
            <h1>Game Board Taverne</h1>
            <p>Vous prendrez bien un petit jeu ?!</p>
        </header>
            <?= $content ?>
        <footer>
            <p>Créé par Mr Gitmoi</p>
        </footer>
    </body>
</html>