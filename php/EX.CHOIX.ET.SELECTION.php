<?php
/*Écrivez un script PHP qui utilise une boucle do... while
 pour afficher un menu de sélection avec des options numérotées
 (par exemple, 1. Afficher, 2. Ajouter, 3. Quitter).
 Demandez à l'utilisateur de sélectionner une option.
 La boucle doit continuer tant que l'utilisateur ne choisit pas l'option "Quitter".
*/
// variable et leur valeur
$nombre1="1";
$nombre2="2";
$nombre3="3";
// boucle do
do {
    // je demande a l utilisateur de choisir entre trois nombre
    echo " 
choisisser un nombre 
____________________
| 1 | = | afficher |
|___|___|__________| 
| 2 | = | ajouter  |
|___|___|__________|
| 3 | = | sortir   | 
|___|___|__________|   ";
    $nombre=fgets( STDIN) ;
// si le nombre est inferieur ou egal a 0 ou si le nombre est superieur ou egale a 4 alors
    if ( $nombre <= 0 || $nombre >= 4 ) {
    echo " introduiser le bon nombre " ." \n ";
    }
}
// si le nombre est de 3 alors on sort de la boucle
while ( $nombre != 3 ) ;
echo " bye bye " ;
