<?php
// variable declare a 10
$chrono=10 ;
echo " 10 " ."\n";
// boucle qui lance le chrono a partir de 1
while ( $chrono >= 1 ) {
    // sleep decompte toute les 2 secondes
    sleep( 2) ;
    // a ce moment la il se decompte de 1 toute les 2 secondes
    $chrono=( $chrono - 1 ) ;
    echo $chrono ." \n " ;
}
echo " lancement " ;