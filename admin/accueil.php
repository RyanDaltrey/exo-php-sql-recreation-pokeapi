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
        <div id="nav_page">
            <a href="index.php" ><button class="boutton_option">Les Pokémons</button></a>
            <a href="connexion.php"><button class="boutton_option">Connexion</button></a>
        </div>
    </nav>
    <main class="main">
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

    <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: rgb(60, 7, 83);
  text-align: center;
  display: flex;
    flex-direction: row;
    justify-content: space-around;
    font-family: PokemonLight;
    color: white;
    letter-spacing: 4px;
    z-index: -1;
}
</style>
<style>
.img_pika_accueil {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}
</style>
    <div class="img_pika_accueil">
    <img src="./images/pikachu_footer_3d.png" alt="" class="pika">
    </div>
    <footer class="footer">
        <p> CopyRight ©</p>
        <p> Mentions Légales</p>
        <p> Pokemongo@hotmail.com</p>
    </footer>
</body>
</html>