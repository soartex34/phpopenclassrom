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

    <p>le pays <?php echo $_POST['pays'] ?></p>

    <p>aimer les frite <?php echo $_POST['frites']?></p>


    <p>truc inutile <?php echo $_POST['case'] ?></p>


    <?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";
                }
        }
}
?>
</body>
</html>