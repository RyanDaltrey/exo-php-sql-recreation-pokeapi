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
<body>
    <form method="POST" action="">
        <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom_inscription" name="nom" required>
        </div>
        <div>
                <label for="penom">Prenom :</label>
                <input type="text" id="prenom_inscription" name="prenom" required>
        </div>
        <div>
                <label for="email">Email :</label>
                <input type="text" id="email_inscription" name="email" required>
        </div>
        <div>
                <label for="mdp">Mot de passe :</label>
                <input type="text" id="mdp_inscription" name="mdp" required>
        </div>
                <input type="submit" value="S'inscrire">
    </form>
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