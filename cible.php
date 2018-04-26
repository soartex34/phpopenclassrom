<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>Bonjour !</p>

    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>

    <p>Si tu veux changer d identiter, <a href="formulaire.php">clique ici</a>.</p>

    <p>J'espere que tu n'a pas fais de faute. Voyons voir !<br><?php echo $_POST['message'] ?></p>
    
    <p>lamantable recommence, en <a href="formulaire.php">cliquan ici</a>.</p>
</body>
</html>