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
    <style>
        .pokeball {
    position: relative;
    margin: 30px;
  }
  
  .pokeball .pokeball_ouvert {
    position: absolute;
    left: 0;
    top: 0;
    display: none;
  }
  
  .pokeball:hover .pokeball_ouvert {
    display: block;
  }
  
  .pokeball:hover .pokeball_ouvert {
      display: block;
  }

  .pokeball_image {
    width: 80px;
    height: 80px;
    padding:6px;
  }

 .pokeball_image_ouvert{
    width: 80px;
    height: 80px;

 }
  </style>
</head>
<body id="body_details_page">
    <div id="page_details">

        <div class="pokeball">
        <div class="pokeball_ferme">
            <img class="pokeball_image" src="./images/pokeball_ferme.png"  alt="pokeball_ferme">
        </div>
        <div class="pokeball_ouvert">
            <a href="index.php"><img class="pokeball_image_ouvert" src="./images/pokeball_ouvert.png" alt="pokeball_ouvert"></a>
        </div>
        </div>
        
        <div id="content_details">
            <div id="pokemon_nom">
                    <img id="image_pokemon_detail" src="./images/<?php echo $fiche['img_poke']; ?>">
            </div>
                <div id="infos_pokemon">  
                    <h5 class="card-titre"><?php echo $fiche['nom']; ?></h5>     
                    <p class="card-text"> Taille <?php echo $fiche['taille']; ?>cm</p>
                    <p class="card-text"><?php echo $fiche['description']; ?></p>
                    <p class="card-text">Masse : <?php echo $fiche['masse']; ?></p>
                    <p class="card-text">Hp : <?php echo $fiche['hp']; ?></p>
                    <p class="card-text">Attack : <?php echo $fiche['attack']; ?></p>
                    <p class="card-text">Defence : <?php echo $fiche['defence']; ?></p>
                    <p class="card-text">Vitesse : <?php echo $fiche['vitesse']; ?></p>
                    <p class="card-text">Attack_spe : <?php echo $fiche['attack_spe']; ?></p>
                    <p class="card-text">Defence_spe : <?php echo $fiche['defence_spe']; ?></p>
                    <p class="card-text">Generation : <?php echo $fiche['generation']; ?></p>
                </div>         
        </div>
    </div>
    <footer>
        <div id="footer_block_page_details">
                <div id="pikachu_footer_3d_details">
                    <img src="./images/pikachu_footer_3d.png" alt="pikachu_footer_3d">
                </div>
            <p class="text_footer">Copy Right©</p>
            <p class="text_footer">Mentions Legales</p>
            <p class="text_footer">Contactez-nous : Pokemongo@hotmail.com</p>
        </div>
    </footer>



</body>
</html>