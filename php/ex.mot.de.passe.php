<?php
/*  Écrivez un script PHP qui utilise une boucle while
 pour demander à l'utilisateur de saisir un mot de passe.
 Si l'utilisateur échoue après trois tentatives,
le script affiche un message d'erreur et utilise
l'instruction break pour sortir de la boucle.
*/
// variable et sa valeur
$mdp=  2023  ;
// compteur avec sa valeur de depart
$compteur= 0 ;
//boucle while vrai
while (true ) {
    $compteur++ ;
    echo " entrer le mot de passe . " . " tentative ".$compteur . "\n " ;
    // lis le mdp de l utilisateur
    $mdp = trim(fgets( STDIN)) ;
    // si le mdp est egale a 2023 alors c est vrai
    if ( $mdp == 2023 ) {
        echo " bravo tu veut une medaille ???  " ;
        // on sort de la boucle
        break;
    }
    // si le compteur est egale a 3 alors les tentative s arrete
    if ($compteur == 3 ){
        echo " mot de passe errone " ;
    break ;
    }
   }
