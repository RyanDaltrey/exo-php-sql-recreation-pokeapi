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
                            
            echo '<div id="content_pokemon"><img id="pokemons" src="images/'.$pokemon['img_poke']. '"></div>';
                            // echo'<td>'.$pokemon["img_poke"].'</td>';
                            // echo '<td>'.$pokemon["nom"].'</td>';
                            // echo '<td>'.$pokemon["taille"].'</td>';
                            // echo '<td>'.$pokemon["description"].'</td>';
                            // echo '<td>'.$pokemon["hp"].'</td>';
                            // echo '<td>'.$pokemon["attack"].'</td>';
                            // echo '<td>'.$pokemon["defence"].'</td>';
                            // echo '<td>'.$pokemon["vitesse"].'</td>';
                            // echo '<td>'.$pokemon["attack_spe"].'</td>';
                            // echo '<td>'.$pokemon["defence_spe"].'</td>';
                            // echo '<td>'.$pokemon["generation"].'</td>';

            }
        ?>
                   
</div>
</body>
</html>