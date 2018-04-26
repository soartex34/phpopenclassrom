<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include("menus.php"); ?>
    
    <h3>age & condition</h3><br>
   
        <?php
   
            //variable age
            $years = 11;
        
            //condition inferieur a 12 autorise l entree
            if($years <= 12){
                echo "salut gamin, et bienvenue";
                $autorisation_entre = oui;
            }
        
            //si superieur a 12 refuse l entrée
            else {
                echo "tu es trop vieux va t'en";
                $autorisation_entre = non;
            }
            //message indiquand l autorisation
            echo " avez vous l autorisation d entrée ? $autorisation_entre";
        ?>

    <h3>age & boolean</h3>
        
        <?php
            $autorisation_entree = false;

            if ($autorisation_entree == true){
                echo "bienvenue sur ma page";
            }
            elseif($autorisation_entree == false){
                echo "il n y a rien a voir";
            }
        ?>

    <h3>condition multiple</h3>

        <?php 
            $age = 8;
            $language = english;
            $pays = "us";
            
            //selections de la langue
            if($age <= 12 AND $language == "francais"){
                echo "bienvenue sur mon site";
            }
            elseif ($age <= 12 AND $language == "english"){
                echo "welcome on my website!";
            }
        ?>
    <br>
        <?php

            //selection pays
            if($pays == "france" OR $pays == "belgique"){
                echo "bienvenue";
            }
            else {
                echo "sorry this site is not available in your country";
            }
        ?>

    <h3>note & switch</h3>

        <?php
            $note = 12;

            switch ($note){ // on indique sur quelle variable on travaille 
            
                case 0: // dans le cas où $note vaut 0
                    echo "Tu es vraiment un gros nul !!!";
                break;
    
                case 5: // dans le cas où $note vaut 5
                    echo "Tu es très mauvais";
                break;
    
                case 7: // dans le cas où $note vaut 7
                    echo "Tu es mauvais";
                break;
    
                case 10:
                    echo "Tu as pile poil la moyenne, c'est un peu juste…";
                break;
    
                case 12:
                    echo "Tu es assez bon";
                break;
    
                case 16:
                    echo "Tu te débrouilles très bien !";
                break;
    
                case 20:
                    echo "Excellent travail, c'est parfait !";
                break;
    
                default:
                    echo "Désolé, je n'ai pas de message à afficher pour cette note";
            }
        ?>
    
<body>
    
</body>
</html>