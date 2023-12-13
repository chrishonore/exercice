<?php
/*Écrivez un script PHP qui utilise une boucle do... while
 pour afficher un menu de sélection avec des options numérotées
 (par exemple, 1. Afficher, 2. Ajouter, 3. Quitter).
 Demandez à l'utilisateur de sélectionner une option.
 La boucle doit continuer tant que l'utilisateur ne choisit pas l'option "Quitter".
*/
$nombre1="1";
$nombre2="2";
$nombre3="3";

do {
    echo " choisisser un nombre entre 1=afficher 2=ajouter 3=sortir ";
    $nombre=fgets( STDIN) ;

    if ( $nombre <= 0 || $nombre >= 4 ) {
    echo " introduiser le bon nombre " ." \n ";
    }
}
while ( $nombre != 3 ) ;
echo " bye bye " ;
