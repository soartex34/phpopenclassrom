<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include("menus.php"); ?>

    <p>
        Cette page ne contient que du HTML.<br />
        Veuillez taper votre prénom :
    </p>

        <form action="cible.php" method="post">
    <p>
        <input type="text" name="prenom" />
        <input type="submit" value="Valider" />
    </p>
    
    <textarea name="message" rows="8" cols="45">
    Votre message ici.
    </textarea>
</form>
</body>
</html>