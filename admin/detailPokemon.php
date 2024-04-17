<?php
session_start();



$id_pokemon = $_GET['num_poke'];

    $dsn = 'mysql:host=localhost;dbname=pokedex';
    $user = 'root';
    $password = '';

    $connexion = new PDO($dsn, $user, $password);

    // requete detail fiche
    $sql = "SELECT * FROM pokemon WHERE num_poke = :num_poke";

    $requete = $connexion->prepare($sql);
    $requete->execute(array('num_poke'=>$id_pokemon));
    $fiche = $requete->fetch();

    // var_dump($fiche);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Pokémons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div id="content_details">
            <img id="image_pokemon_detail" src="./images/<?php echo $fiche['img_poke']; ?>">
    <div id="infos_pokemon">       
            <h5 class="card-title"><?php echo $fiche['nom']; ?></h5>
            <p class="card-text"> Taille <?php echo $fiche['taille']; ?>cm</p>
            <p class="card-text"><?php echo $fiche['description']; ?></p>
            <p class="card-text">Hp : <?php echo $fiche['hp']; ?></p>
            <p class="card-text">Attack : <?php echo $fiche['attack']; ?></p>
            <p class="card-text">Defence : <?php echo $fiche['defence']; ?></p>
            <p class="card-text">Vitesse : <?php echo $fiche['vitesse']; ?></p>
            <p class="card-text">Attack_spe : <?php echo $fiche['attack_spe']; ?></p>
            <p class="card-text">Defence_spe : <?php echo $fiche['defence_spe']; ?></p>
            <p class="card-text">Generation : <?php echo $fiche['generation']; ?></p>
    </div>         
</div>



</body>
</html>