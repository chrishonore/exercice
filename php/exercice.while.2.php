<?php
$chrono=10 ;
echo " 10 " ."\n";
while ( $chrono >= 1 ) {
    sleep( 2) ;
    $chrono=( $chrono - 1 ) ;
    echo $chrono ." \n " ;
}
echo " lancement " ;