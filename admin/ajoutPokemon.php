<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Pokémons</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Ajout Pokémons</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="titre">Nom :</label>
                <input type="text" id="titre" name="titre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Taille :</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="plan">Description :</label>
                <input type="text" id="plan" name="plan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="plan">Hp :</label>
                <input type="text" id="plan" name="plan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tpsRea">Attack :</label>
                <input type="number" id="tpsRea" name="tpsRea" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="complexite">Defence :</label>
                <input type="number" id="complexite" name="complexite" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tpsRea">Vitesse :</label>
                <input type="number" id="tpsRea" name="tpsRea" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label for="tpsRea">Attack spé :</label>
                <input type="number" id="tpsRea" name="tpsRea" class="form-control" required>
            </div>
            <div class="form-group"> 
                <label for="tpsRea">Defence spé :</label>
                <input type="number" id="tpsRea" name="tpsRea" class="form-control" required>
            </div>
                <button type="submit" class="btn btn-primary">Ajouter le Pokémon!</button>
        </form>
    </div>
</body>
</html>