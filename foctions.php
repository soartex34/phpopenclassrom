<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h2>compteur de caractere</h2>
        
        <?php
            $phrase = 'Bonjour tout le monde ! mon but est de vous entrainer !';   
            $longueur = strlen($phrase);
 
 
            echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
        ?>
    
    <h2>remplacer des caractere</h2>

        <?php
            
            
            $ma_variable = str_replace('b', 'p', 'bim bam boum');
                echo "et si on remplacer les 'b' de bim bam boum par des 'p' ca donnerait : $ma_variable";
        ?>
    
    <h2>melanger les cractere aleatoirement</h2>

       <?php
            $chaine = 'cette phrase est ilisible tu perd ton temps !';
            $chaine = str_shuffle($chaine);
                echo $chaine;   
        ?> 
    
    <h2>ecrire en minuscule</h2>

        <?php
            $chaine = 'COMMENT CA JE CRIE TROP FORT ???';
            $chaine = strtolower($chaine);
 
            echo $chaine;
        ?>
    <h2>date</h2>
        <?php
            // Enregistrons les informations de date dans des variables

            $jour = date('d');
            $mois = date('m');
            $annee = date('Y');

            $heure = date('H');
            $minute = date('i');

            // Maintenant on peut afficher ce qu'on a recueilli
            echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute;
        ?>
    <h2>cree ses propre fonctions</h2>
        <h3>dire bonjour</h3>
            <?php
                function DireBonjour($nom){
                    echo 'Bonjour ' . $nom . ' !<br />';
                }

                DireBonjour('Marie');
                DireBonjour('Patrice');
                DireBonjour('Edouard');
                DireBonjour('Pascale');
                DireBonjour('François');
                DireBonjour('Benoît');
                DireBonjour('Père Noël');
            ?>
        <h3>conne</h3>
            
            <?php
                // Calcul du volume d'un cône de rayon 5 et de hauteur 2
                $volume = 5 * 5 * 3.14 * 2 * (1/3);
                echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';

                // Calcul du volume d'un cône de rayon 3 et de hauteur 4
                $volume = 3 * 3 * 3.14 * 4 * (1/3);
                echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';
            ?>

</body>
</html>