<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Accueil</title>
</head>
<body id="page_accueil">
    <nav>
        <div id="nav_page_accueil">
            <a href="index.php" ><button class="boutton_option">Les Pokémons</button></a>
            <a href="connexion.php"><button class="boutton_option">Connexion</button></a>
        </div>
    </nav>
    <main>
        <div id="content_page_accueil">
            <div id="rejoignez_nous">
                <h1 id="titre_accueil">Rejoignez notre communauté!</h1>
                <a href="inscription.php"><button id="boutton_inscription">Let's Go!</button></a>
            </div>
            <div id="content_image_3d_pikachu">
                <img src="./images/pikachu_3d.png" alt="image_pikachu_3d" id="image_3d_pikachu">
            </div>
        </div>
    </main>
    <footer>
        <div id="footer_block">
                <div id="pikachu_footer_3d">
                    <img src="./images/pikachu_footer_3d.png" alt="pikachu_footer_3d">
                </div>
            <p class="text_footer">Copy Right©</p>
            <p class="text_footer">Mentions Legales</p>
            <p class="text_footer">Contactez-nous</p>
        </div>
    </footer>
</body>
</html>