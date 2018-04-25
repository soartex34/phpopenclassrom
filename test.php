<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
            <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>
        </p>

        <h1>ma page web</h1>
        
            <p>aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <h1>test variable</h1>
            <?php 
            $age_du_visiteur = 17;
            echo $age_du_visiteur;
            ?>

    </body>
</html>