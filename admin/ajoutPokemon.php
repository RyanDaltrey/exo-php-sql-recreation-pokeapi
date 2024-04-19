<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Pokémons</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="formulaire_ajout_pokemon">
        <h2 class="mb-4">Ajoute ton pokémons</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="taille">Taille :</label>
                <input type="text" id="taille" name="taille" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="descripton" name="description" class="form-control" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="masse">Masse :</label>
                <input type="number" id="masse" name="masse" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hp">Hp :</label>
                <input type="number" id="hp" name="hp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="attack">Attack :</label>
                <input type="number" id="attack" name="attack" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="defence">Defence :</label>
                <input type="number" id="defence" name="defence" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="vitesse">Vitesse :</label>
                <input type="number" id="vitesse" name="vitesse" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label for="defence_spe">Defence spé :</label>
                <input type="number" id="defence_spe" name="defence_spe" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label for="attack_spe">Attack spé :</label>
                <input type="number" id="attack_spe" name="attack_spe" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label for="img_poke">Img_poke :</label>
                <input type="file" id="img_poke" name="img_poke" class="form-control">
            </div>
            <div class="form-group"> 
                <label for="generation">Génération :</label>
                <input type="number" id="generation" name="generation" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label for="version_app">Version :</label>
                <input type="number" id="version_app" name="version_app" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label for="habitat">Habitat :</label>
                <input type="number" id="habitat" name="habitat" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label for="competences">Compétences :</label>
                <input type="number" id="competences" name="competences" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label for="categorie">Catégorie :</label>
                <input type="number" id="categorie" name="categorie" class="form-control" required>
            </div>
                <button type="submit" class="btn btn-primary">Ajouter le Pokémon!</button>
        </form>
    </div>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // var_dump($_POST["taille"], $_POST["description"], $_POST["nom"], $_POST["masse"], $_POST["hp"], $_POST["attack"], $_POST["defence"], $_POST["vitesse"] , $_POST["defence_spe"], $_POST["attack_spe"], $_POST["img_poke"], $_POST["generation"], $_POST["version_app"], $_POST["habitat"] , $_POST["competences"], $_POST["categorie"]);
                            

    $dsn = 'mysql:dbname=pokedex;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $dbh = new PDO($dsn, $user, $password);

    $ajoutPokemon = "INSERT INTO `pokemon`(`nom`, `taille`, `description`, `masse`, `hp`, `attack`, `defence`, `vitesse`, `defence_spe`, `attack_spe`, `img_poke`, `generation`, `version_app`, `habitat`, `competences`, `categorie`) VALUES ( :nom , :taille , :description , :masse , :hp , :attack , :defence , :vitesse , :defence_spe , :attack_spe , :img_poke , :generation , :version_app , :habitat , :competences , :categorie)";


    $requete = $dbh->prepare($ajoutPokemon);

    $requete ->execute(array("nom"=>$_POST["nom"] , "taille"=>$_POST["taille"] , "description"=>$_POST["description"] , "masse"=>$_POST["masse"] , "hp"=>$_POST["hp"] , "attack"=>$_POST["attack"] , "defence"=>$_POST["defence"] , "vitesse"=>$_POST["vitesse"] , "defence_spe"=>$_POST["defence_spe"] , "attack_spe"=>$_POST["attack_spe"] , "img_poke"=>"img.png" , "generation"=>$_POST["generation"] , "version_app"=>$_POST["version_app"] , "habitat"=>$_POST["habitat"] , "competences"=>$_POST["competences"] , "categorie"=>$_POST["categorie"]));

    echo "Pokémon Ajouté Yeah!"; 
 }
    

?>