<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Inscription</title>
</head>
<body id="page_inscription">
    <nav>
        <div id="nav_page">
            <a href="index.php" ><button class="boutton_option">Les Pokémons</button></a>
            <div>
                <h1 id="titre_inscription">Inscription</h1>
            </div>
            <a href="connexion.php"><button class="boutton_option">Connexion</button></a>
        </div>
    </nav>
    <form method="POST" action="" class="formulaire">
        <div id="main_formulaire">
                <div id="image_personnages_3d">
                    <img src="./images/ondine_3d.png" alt="ondine_3d" class="personnages_3d">
                </div>
            <div id="form_content">   
                <div id="content_input"> 
                    <div>
                            <label for="nom" class="label_input">Nom :</label>
                            <input type="text" class="input_form" name="nom" required>
                    </div>
                    <div>
                            <label for="penom" class="label_input">Prenom :</label>
                            <input type="text" class="input_form" name="prenom" required>
                    </div>
                    <div>
                            <label for="email" class="label_input">Email :</label>
                            <input type="text" class="input_form" name="email" required>
                    </div>
                    <div>
                            <label for="mdp" class="label_input">Mot de passe :</label>
                            <input type="password" class="input_form" name="mdp" required>
                    </div>
                </div>
                    <div id="boutton_submit_block">              
                        <a href="connexion.php"><input type="submit" value="S'inscrire" class="boutton_submit"></a>
                    </div>
            </div>    
        </div>   
    </form>
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
    <!-- <footer>
        <div id="footer_block_inscription">
                <div id="pikachu_footer_3d_inscription">
                    <img src="./images/pikachu_footer_3d.png" alt="pikachu_footer_3d">
                </div>
            <p class="text_footer">Copy Right©</p>
            <p class="text_footer">Mentions Legales</p>
            <p class="text_footer">Contactez-nous : Pokemongo@hotmail.com</p>
        </div>
    </footer> -->

</body>
</html>

<?php
    if(isset($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["mdp"])) {

        $dsn = 'mysql:dbname=pokedex;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $dbh = new PDO($dsn, $user, $password);

        $inscription = "INSERT INTO `utilisateur` (`nom`, `prenom`, `email`, `mdp`) VALUES ( :nom , :prenom , :email , :mdp)";

        $requete = $dbh->prepare($inscription);
        $mdpHash = password_hash( $_POST["mdp"] , PASSWORD_DEFAULT);
        $requete->execute(array("nom"=>$_POST["nom"] , "prenom"=>$_POST["prenom"] , "email"=>$_POST["email"] , "mdp"=> $mdpHash
        ));
    }
?>