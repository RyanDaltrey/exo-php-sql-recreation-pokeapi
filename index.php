<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
            $dsn = 'mysql:dbname=pokedex;host=127.0.0.1';
            $user = 'root';
            $password = '';

            $dbh = new PDO($dsn, $user, $password);

            
            $sql = "SELECT * FROM pokemon";
            $requete = $dbh ->query($sql);
            $requete ->execute();

            $affichage = $requete->fetchAll();

            var_dump ($affichage);

?>



</body>
</html>