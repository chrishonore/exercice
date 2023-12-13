<?php
/*Écrivez un script PHP
qui utilise une boucle for
    pour afficher la table de multiplication
d'un nombre saisi par l'utilisateur.
    */
echo " quel table de multiplication tu veut connaitre ?";
$number=trim(fgets( STDIN)) ;

for ( $i =1 ; $i<=10 ; $i ++) {
   echo $number. " x " . $i . " = ". $number*$i . "\n";

}