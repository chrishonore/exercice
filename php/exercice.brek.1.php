<?php
/*  Écrivez un script PHP qui utilise une boucle while
 pour demander à l'utilisateur de saisir un mot de passe.
 Si l'utilisateur échoue après trois tentatives,
le script affiche un message d'erreur et utilise
l'instruction break pour sortir de la boucle.
*/
$mdp=  2023  ;
$compteur= 0 ;
while (true ) {
    $compteur++ ;
    echo " entrer le mot de passe ";
    $mdp = trim(fgets( STDIN)) ;
    echo " tour " .$compteur . "\n";
    if ( $mdp == 2023 ) {
        echo " bravo tu veut une medaille ???  " ;
        break;
    }
    if ($compteur == 3 ){
        echo " mot de passe errone " ;
    break ;
    }
   }
