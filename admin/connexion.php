<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Connexion</title>
</head>
<body id="page_connexion">
    <nav>
        <div id="nav_page">
            <a href="index.php" ><button class="boutton_option">Les Pokémons</button></a>
            <div>
                <h1 id="titre_inscription">Connexion</h1>
            </div>
            <a href="inscription.php"><button class="boutton_option">Inscription</button></a>
        </div>
    </nav>
    <form action="" method="POST">
        <div id="main_formulaire">
            <div id="image_personnages_3d">
                <img src="./images/pierre_3d.png" alt="pierre_3d" class="personnages_3d">
            </div>
            <div id="form_content"> 
                <div id="content_input">
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
                        <input type="submit" value="Let's GO!" class="boutton_submit">
                    </div> 
            </div> 
        </div>        
    </form>
    <footer>
        <div id="footer_block_connexion">
                <div id="pikachu_footer_3d_inscription">
                    <img src="./images/pikachu_footer_3d.png" alt="pikachu_footer_3d">
                </div>
            <p class="text_footer">Copy Right©</p>
            <p class="text_footer">Mentions Legales</p>
            <p class="text_footer">Contactez-nous</p>
        </div>
    </footer>   
</body>
</html>

<?php
    if(isset( $_POST["email"], $_POST["mdp"])){

        $dsn = 'mysql:dbname=pokedex;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $dbh = new PDO($dsn, $user, $password);

        $connexion = "SELECT * FROM `utilisateur` WHERE `email` LIKE :email";
        $requete = $dbh->prepare($connexion);
        $requete->execute(array("email"=>$_POST["email"]));
        $resultat = $requete->fetch();

        if($resultat != false) {

            $mdpHash = $resultat["mdp"];

            if(password_verify ($_POST["mdp"], $mdpHash)){
                echo "GO!";

                $_SESSION["email"] = $_POST["email"];
                $_SESSION["prenom"] = $_POST["prenom"];
                $_SESSION["id"] = $resultat["id"];

                header("Location: ajoutPokemon.php");   

            }else{
                echo "Le mot de passe est invalide.";
            }
            }else{
                echo "Votre adresse email est inconnue.";
        }
    }

?>