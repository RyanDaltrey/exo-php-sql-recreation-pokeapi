<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="index.css">
</head>
<body id="page_index">
<div id="content_index">
    <div id="pokemon_header">
        <a href="accueil.php"><img src="images/pokemon_logo_accueil.png" alt="header_pokemon" id="logo"></a>
    </div>

    <div id="poke_image">
      
        <?php

            require 'database.php';
                                        //stockage de database et de la fonction                         
            $appelDeLaFonctionGetPokemon = Database::getPokemon();

            while($pokemon = $appelDeLaFonctionGetPokemon->fetch()){                
            echo '<div id="content_pokemon"> <a href="detailPokemon.php?num_poke=' . $pokemon['num_poke'].'" > <img id="pokemons" src="images/'.$pokemon['img_poke']. '"> </a> </div>';
            }
        ?>
                   
    </div>
</div>
<footer>
        <div id="footer_block">
                <div id="pikachu_footer_3d_index">
                    <img src="./images/pikachu_footer_3d.png" alt="pikachu_footer_3d">
                </div>
            <p class="text_footer">Copy Right©</p>
            <p class="text_footer">Mentions Legales</p>
            <p class="text_footer">Contactez-nous</p>
        </div>
    </footer>
</body>
</html>