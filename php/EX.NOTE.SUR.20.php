<?php
/* Écrivez un script PHP qui utilise une boucle while
 pour demander à l'utilisateur de saisir des notes (valeurs entre 0 et 20).
 La saisie s'arrête lorsque l'utilisateur entre une note négative.
 Le script doit ensuite calculer la moyenne des notes saisies et l'afficher.
 Utilisez l'instruction break pour sortir de la boucle lorsque la note négative est détectée.
*/
//valeur d depart du compteur declare a 0
function scoreVingt () {
$compteur = 0 ;
// valeur de depare du total declare a 0
$total= 0 ;

while ( true ) {
    // entrer la note de l utilisateur est lis son entree
    echo "\n entrer votre note entre 1 et 20 ";
    $num = trim(fgets( STDIN)) ;
    if (!is_numeric($num)) {
        echo " ceci n es pas un chiffre veuillez recommencer .\n ";
        break;
    }
// si le nombre est superieur a 20 alors on continue la boucle
if ( $num > 20 ){
 echo " ce nombre est superieur a 20 . \n veuillez entrer le bon nombre " ."\n";
 continue ;
}// si le nombre est inferieur  a 0 alors on sort de la boucle
if ( $num <= 0 ) {
    echo " ce nombre est inferieur a 0 . \n veuillez entrer le bon nombre " ."\n " ;
    break ;
}// formule de variable
    $total=$total+$num;
    $compteur++ ;
}// message de fin de boucle avec le resultat
echo " votre moyenne total est de ".$total/$compteur ." sur 20 ";
}
scoreVingt ();
scoreVingt();