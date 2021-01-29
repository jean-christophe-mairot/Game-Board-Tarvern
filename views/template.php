<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="public/css/card.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/nav.css">
        <link rel="stylesheet" href="public/css/404.css">
        <link rel="stylesheet" href="public/css/footer.css">

        <!-- titre qui change en fonction de la vue -->
        <title><?= $t ?></title>
    </head>
    <body>
        <header class="header">
            <h1>Game Board Taverne</h1>
            <p>Vous prendrez bien un petit jeu ?!</p>
        </header>
        <nav class="navAside">
            <ul>
                <li><a href=""></a><img src="public/img/retour_accueil.png" alt=""></li>
                <li><a href=""></a><img src="public/img/bouton.png" alt=""></li>
                <li><a href=""></a><img src="public/img/10_suivante.png" alt=""></li>
            </ul>
        </nav>
        <!-- content qui arrive de View -->
            <?= $content ?>
        
            <!-- footer -->
        <footer class="footer">
            <p>Créé par Mr Gitmoi</p>
        </footer>

        <!-- script pour le js card -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="public/js/card.js"></script>
        <!-- jquery -->
        
    </body>
</html>