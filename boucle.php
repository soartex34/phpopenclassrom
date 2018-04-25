<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>

        <h2>while</h2>

            <?php
                $nombre_de_lignes = 1;

                while ($nombre_de_lignes <= 10){
                    echo 'Ceci est la ligne n°' . $nombre_de_lignes .' de la boucle while'.'<br />';
                    $nombre_de_lignes++;
                }       
            ?>
        <h2>for</h2>

            <?php
                for ($nombre_de_lignes = 1; $nombre_de_lignes <= 10; $nombre_de_lignes++){
                    echo 'Ceci est la ligne n°' . $nombre_de_lignes .' de la boucle for'.'<br />';
                }
            ?>
    </body>
</html>