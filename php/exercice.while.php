<?php

echo "entrer un nombre " ;
$n1 = fgets (STDIN ) ;
$somme=0 ;
while ( $n1 >= 0 ) {
    $somme=( $somme + $n1 ) ;
    echo " + " . $n1 . " est egal a " .$somme . "\n " ;
    echo " entrer un nombre " ;
    $n1 = fgets (STDIN ) ;
}

echo " la somme est " .$somme ;