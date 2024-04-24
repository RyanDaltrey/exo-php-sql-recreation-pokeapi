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
    <form method="POST" action="" class="formulaire">
        <div>
            <h1 id="titre_inscription">Inscription</h1>
        </div>
        <div id="main_inscription">
                <div id="image_ondine_inscription">
                    <img src="./images/ondine_3d.png" alt="ondine_3d" class="image_personnage_3d">
                </div>
            <div id="form_inscription">   
                <div id="content_input"> 
                    <div>
                            <label for="nom" class="label_input_inscription">Nom :</label>
                            <input type="text" class="input_inscription" name="nom" required>
                    </div>
                    <div>
                            <label for="penom" class="label_input_inscription">Prenom :</label>
                            <input type="text" class="input_inscription" name="prenom" required>
                    </div>
                    <div>
                            <label for="email" class="label_input_inscription">Email :</label>
                            <input type="text" class="input_inscription" name="email" required>
                    </div>
                    <div>
                            <label for="mdp" class="label_input_inscription">Mot de passe :</label>
                            <input type="password" class="input_inscription" name="mdp" required>
                    </div>
                </div>
                    <div id="boutton_inscrire">              
                        <input type="submit" value="S'inscrire" class="boutton_submit">
                    </div>
            </div>    
        </div>
                
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