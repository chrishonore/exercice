<?php
/*Écrivez un script PHP
qui utilise une boucle for
    pour afficher la table de multiplication
d'un nombre saisi par l'utilisateur.
    */
echo " quel table de multiplication tu veut connaitre ?";
$number=trim(fgets( STDIN)) ;
//nombre initial = a 1 : initial inferieur ou egal a 10: initial qui suit
// boucle for va de 1 a 10
for ( $i =1 ; $i<=10 ; $i ++) {
   echo $number. " x " . $i . " = ". $number*$i . "\n";
}