<?php
// variable declare a 100
$chrono=100 ;
echo " 100 " ."\n";
// boucle chrono inferieur  a 999
while ( $chrono <= 999 ) {
    // decompte de 1 seconde
    sleep( 1) ;
    // a chaque decompte j avance de 25
    $chrono=( $chrono + 25 ) ;
    echo $chrono ." \n " ;
}
echo " enfin 1000 " ;
