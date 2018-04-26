<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST['mdp']) AND $_POST['mdp'] ==  "admin") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Voici les codes d'accès :</h1>
        <p><strong>RTM5-FUN8-KL28-4785</strong></p>   
        
        <p>
        c est un code steam pour un petit jeux :p
        </p>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p><strong> erreur</strong> localisation de votre ordinateur en cours</p>';
    }
    ?>
</body>
</html>