<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page proteger par mdp</title>
</head>
<body>
<?php include("menus.php"); ?>

    <p>entré votre mot de passe</p>
    <form action="secret.php" method="post">
        <p><input type="password" name="mdp"></p>
        <p><input type="submit" value="destruction"></p>

    </form> 

</body>
</html>