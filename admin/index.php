<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div id="pokemon_header">
<img src="images/logo_pokemon.png" alt="header_pokemon">
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
</body>
</html>