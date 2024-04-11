<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
</head>
<body>
    <table>
        <thead>
            <th>img_poke</th>
            <th>Nom</th>
            <th>Taille</th>
            <th>Description</th>
            <th>HP</th>
            <th>Attaque</th>
            <th>Défense</th>
            <th>Vitesse</th>
            <th>Attaque spé</th>
            <th>Défense spé</th>
            <th>Génération</th>
        </thead>
            <tbody>
                <?php

                require 'database.php';
                                //stockage de database et de la fonction                         
                $appelDeLaFonctionGetPokemon = Database::getPokemon();

                while($pokemon = $appelDeLaFonctionGetPokemon->fetch()){
                    echo '<tr>';
                    echo'<td>'.$pokemon["img_poke"].'</td>';
                    echo '<td>'.$pokemon["nom"].'</td>';
                    echo '<td>'.$pokemon["taille"].'</td>';
                    echo '<td>'.$pokemon["description"].'</td>';
                    echo '<td>'.$pokemon["hp"].'</td>';
                    echo '<td>'.$pokemon["attack"].'</td>';
                    echo '<td>'.$pokemon["defence"].'</td>';
                    echo '<td>'.$pokemon["vitesse"].'</td>';
                    echo '<td>'.$pokemon["attack_spe"].'</td>';
                    echo '<td>'.$pokemon["defence_spe"].'</td>';
                    echo '<td>'.$pokemon["generation"].'</td>';
                    echo '</tr>';
                
                }
                ?>
            </tbody>
    </table>
</body>
</html>