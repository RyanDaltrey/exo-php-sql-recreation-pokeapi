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
<body>
    <form action="" method="POST">
    <div>
                <label for="email">Email :</label>
                <input type="text" id="email_connexion" name="email" required>
        </div>
        <div>
                <label for="mdp">Mot de passe :</label>
                <input type="password" id="mdp_connexion" name="mdp" required>
        </div>
                <input type="submit" value="Let's GO!">
    </form>
    
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