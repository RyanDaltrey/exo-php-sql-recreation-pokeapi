<?php

    session_start();

    if(!isset($_SESSION["email"])){
        header("location: connexion.php");
    }

    $dsn = 'mysql:dbname=pokedex;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $dbh = new PDO($dsn, $user, $password);

    $afficherPokemons= "SELECT * FROM pokemon";

    $requete = $dbh->prepare($afficherPokemons);

    $requete -> execute();

    $pokemons = $requete->fetchAll();

    // var_dump($pokemons);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5"]>
    <h2 class="mb-4">Mes Pokémons</h2>
    <table class="table">
        
        <tr>
            <!-- <th scope="col">Id</th> -->
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Masse</th>
            <th scope="col">Hp</th>
            <th scope="col">Attack</th>
            <th scope="col">Defence</th>
            <th scope="col">Vitesse</th>
            <th scope="col">Defence_spé</th>
            <th scope="col">Attack_spé</th>
            <th scope="col">Image</th>
            <th scope="col">Génération</th>
            <th scope="col">Version</th>
            <th scope="col">Habitat</th>
            <th scope="col">Compétences</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Actions</th>
        </tr>    

        </thread>
    <tbody>
        <?php

        foreach ($pokemons as $pokemons_tableau) :

        ?>
        <tr>
            <!-- <td><?php echo $pokemons_tableau['num_poke'];  ?></td> -->
            <td><?php echo $pokemons_tableau['nom'];  ?></td>
            <td><?php echo $pokemons_tableau['description'];  ?></td>
            <td><?php echo $pokemons_tableau['masse'];  ?></td>
            <td><?php echo $pokemons_tableau['hp'];  ?></td>
            <td><?php echo $pokemons_tableau['attack'];  ?></td>
            <td><?php echo $pokemons_tableau['defence'];  ?></td>
            <td><?php echo $pokemons_tableau['vitesse'];  ?></td>
            <td><?php echo $pokemons_tableau['defence_spe'];  ?></td>
            <td><?php echo $pokemons_tableau['attack_spe'];  ?></td>
            <td><?php echo $pokemons_tableau['img_poke'];  ?></td>
            <td><?php echo $pokemons_tableau['generation'];  ?></td>
            <td><?php echo $pokemons_tableau['version_app'];  ?></td>
            <td><?php echo $pokemons_tableau['habitat'];  ?></td>
            <td><?php echo $pokemons_tableau['competences'];  ?></td>
            <td><?php echo $pokemons_tableau['categorie'];  ?></td>
            <td>
            <a href="modification.php?num_poke" class="btn btn-info btn-sm">Modificaton</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

