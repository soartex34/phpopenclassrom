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

    <?php
    
    
        if (isset($_GET['prenom']) AND isset($_GET['nom'])){ // On a le nom et le prénom
            
            for ($i = 0 ; $i < $_GET['repeter'] ; $i++){
		        echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
	        }

        }
        else{ // Il manque des paramètres, on avertit le visiteur
            echo 'Il faut renseigner un nom et un prénom !';
        }
    ?>


</body>
</html>