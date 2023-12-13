<?php
/* Écrivez un script PHP qui utilise une boucle while
 pour demander à l'utilisateur de saisir des notes (valeurs entre 0 et 20).
 La saisie s'arrête lorsque l'utilisateur entre une note négative.
 Le script doit ensuite calculer la moyenne des notes saisies et l'afficher.
 Utilisez l'instruction break pour sortir de la boucle lorsque la note négative est détectée.
*/
$compteur = 0 ;
$total= 0 ;
while ( true ) {
    echo " entrer une note entre 1 et 20  ";
    $num = trim(fgets( STDIN)) ;

if ( $num >= 21 ){
 echo " ce nombre n est pas valide veuillez entrer le bon nombre " ."\n";
 continue ;

}
if ( $num <= 0 ) {
    echo " ce nombre n est pas valide " ;
    break ;
}
    $total=$total+$num;

    $compteur++ ;
}
echo "la moyenne des notes vaux".$total/$compteur ;