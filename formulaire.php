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
        
    </p>
    
        <textarea name="message" rows="8" cols="45">
            Votre message ici.
        </textarea>
    
    <br>

        <select name="pays">
            <option value="france">france</option>
            <option value="allemagne">allemagne</option>
            <option value="japon">japon</option>
            <option value="angleterre">angleterre</option>
        </select>

    <p>Aimez-vous les frites ?</p>
        <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
        <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
    
    
    
    <br>
    <p>avez vous lu le truc inutile qui fais 20 page avant de valider</p>
        <input type="checkbox" name="case" id="case" /> <label for="case">j'ai lu et j'accepte</label>
    <br>
        

    <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                ajouter un fichier :<br />
                <input type="file" name="monfichier" /><br />
        </p>    <input type="submit" value="Valider" /> 
    </form>


   
    
</body>
</html>