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
<body id="page_ajout_pokemon">
    <nav>
        <div id="nav_page">
            <a href="index.php"><button class="boutton_option_ajout_pokemon">Les Pokémons</button></a>
            <div>
                <h1 id="titre_inscription">Ajoute ton Pokémon !</h1>
            </div>
            <a href="accueil.php"><button class="boutton_option_ajout_pokemon">Accueil</button></a>
        </div>
    </nav>
        <form action="" method="POST" class="formulaire">
            <div id="main_formulaire">    
                    <div id="image_personnages_sacha_3d">
                        <img src="./images/sacha_3d.png" alt="sacha_3d" class="personnages_3d">
                    </div>
                <div id="form_content_ajout_pokemon">
                    <div id="content_input_ajout_pokemon"> 
                        <div>
                            <label for="nom" class="label_input">Nom :</label>
                            <input type="text" class="input_form" name="nom" required>
                        </div>
                        <div>
                            <label for="taille" class="label_input">Taille :</label>
                            <input type="text" class="input_form" name="taille" required>
                        </div>
                        <div>
                            <label for="description" class="label_input">Description :</label>
                            <textarea class="input_form" name="description" required></textarea>
                        </div>
                        
                        <div>
                            <label for="masse" class="label_input">Masse :</label>
                            <input type="number" class="input_form" name="masse" required>
                        </div>
                        <div>
                            <label for="hp" class="label_input">Hp :</label>
                            <input type="number" class="input_form" name="hp" required>
                        </div>
                        <div>
                            <label for="attack" class="label_input">Attack :</label>
                            <input type="number" class="input_form" name="attack" required>
                        </div>
                        <div>
                            <label for="defence" class="label_input">Defence :</label>
                            <input type="number" class="input_form" name="defence" required>
                        </div>
                        <div>
                            <label for="vitesse" class="label_input">Vitesse :</label>
                            <input type="number" class="input_form" name="vitesse" required>
                        </div>
                        <div> 
                            <label for="defence_spe" class="label_input">Defence spé :</label>
                            <input type="number" class="input_form" name="defence_spe" required>
                        </div>
                        <div> 
                            <label for="attack_spe" class="label_input">Attack spé :</label>
                            <input type="number" class="input_form" name="attack_spe" required>
                        </div>
                        <div> 
                            <label for="img_poke" class="label_input">Img_poke :</label>
                            <input type="file" class="input_form" name="img_poke">
                        </div>
                        <div> 
                            <label for="generation" class="label_input">Génération :</label>
                            <input type="number" class="input_form" name="generation" required>
                        </div>
                        <div> 
                            <label for="version_app" class="label_input">Version :</label>
                            <input type="number" class="input_form" name="version_app" required>
                        </div>
                        <div> 
                            <label for="habitat" class="label_input">Habitat :</label>
                            <input type="number" class="input_form" name="habitat" required>
                        </div>
                        <div> 
                            <label for="competences" class="label_input">Compétences :</label>
                            <input type="number" class="input_form" name="competences" required>
                        </div>
                        <div> 
                            <label for="categorie" class="label_input">Catégorie :</label>
                            <input type="number" class="input_form" name="categorie" required>
                        </div>
                    </div>    
                        <div id="boutton_submit_block_ajout_pokemon">
                            <button type="submit" class="boutton_submit" >Ajouter le Pokémon!</button>
                        </div>
                </div>    
            </div>        
        </form>
        <footer>
            <div id="footer_block_ajout_pokemon">
                    <div id="pikachu_footer_3d_ajout_pokemon">
                        <img src="./images/pikachu_footer_3d.png" alt="pikachu_footer_3d">
                    </div>
                <p class="text_footer">Copy Right©</p>
                <p class="text_footer">Mentions Legales</p>
                <p class="text_footer">Contactez-nous : Pokemongo@hotmail.com</p>
            </div>
        </footer>
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