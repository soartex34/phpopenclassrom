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
   
    <h2>tableau numerote</h2>
        <?php
            // La fonction array permet de créer un array
            $prenoms = array ('clem', 'Michel', 'Nicole', 'Véronique', 'Benoît');
                echo $prenoms[1];
        ?>
    
    <h2>tableau assosiatif</h2>

            <?php
                // On crée notre array $coordonnees
                $coordonnees = array (
                'prenom' => 'François',
                'nom' => 'Dupont',
                'adresse' => '3 Rue du Paradis',
                'ville' => 'Marseille');

                echo $coordonnees ['ville'];
            ?>
    <h2>parcourir un tableau</h2>
    <h3>avec foreach</h3>

            <?php
            
                $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
            
                foreach($prenoms as $element){
                    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
                }
            ?>
        <br>
            <?php
                $coordonnees = array (
                'prenom' => 'François',
                'nom' => 'Dupont',
                'adresse' => '3 Rue du Paradis',
                'ville' => 'Marseille');

                foreach($coordonnees as $cle => $element){
                    //affiche la cle et la valeur 
                    echo '[' . $cle . '] vaut ' . $element . '<br />';
                }
            ?>

    <h2>rechercher dans un tableau</h2>

        <?php
            $coordonnees = array (
            'prenom' => 'François',
            'nom' => 'Dupont',
            'adresse' => '3 Rue du Paradis',
            'ville' => 'Marseille');

            if (array_key_exists('nom', $coordonnees)){
                echo 'La clé "nom" se trouve dans les coordonnées !';
            }

            if (array_key_exists('pays', $coordonnees)){
                echo 'La clé "pays" se trouve dans les coordonnées !';
            }

        ?>   
    <br>    
        <?php
            $fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

            if (in_array('Myrtille', $fruits)){
                echo 'La valeur "Myrtille" se trouve dans les fruits !';
            }

            if (in_array('Cerise', $fruits)){
                echo 'La valeur "Cerise" se trouve dans les fruits !';
            }
        ?>
    <br>
        <?php
            $fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

            $position = array_search('Fraise', $fruits);
                echo '"Fraise" se trouve en position ' . $position . '<br />';

            $position = array_search('Banane', $fruits);
                echo '"Banane" se trouve en position ' . $position;
?>

</body>
</html>